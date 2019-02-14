<?php

namespace App\Http\Controllers;

use App\Room;
use App\Course;
use App\Scheduling;
use Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;

class SchedulingController extends Controller
{
    static $path = 'home/mng-activity/scheduling/scheduling';


    private static $DAYS = ['Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato','Domenica'];

    private static $TIME = ['08:00','09:00','10:00','11:00','12:00','13:00','14:00','15:00','16:00','17:00','18:00','19:00','20:00','21:00','22:00','23:00','00:00'];

    private function  getStartAndEndDate($week, $year) {
        $dto = new \DateTime();
        $dto->setISODate($year, $week);
        $ret['week_start'] = $dto->format('d');
        $dto->modify('+6 days');
        $ret['week_end'] = $dto->format('d');
        return $ret;
    }

    private function getArrayByWeek(){
        $week_array = $this->getStartAndEndDate(date('W'),date('Y'));

        $days = [];
        $first = $week_array['week_start'];
        $end = $week_array['week_end'];

        for($i=0;$first<=$end;$first++,$i++){
            $tmp = $first;
            $tmp .='-'.(string) date('m');
            $tmp.='-'.(string) date('Y');
            $days[SchedulingController::$DAYS[$i]] = $tmp;
        }
        return $days;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $calendar = $this->fetch();
        return view('home/mng-activity/scheduling/scheduling', compact('calendar'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($redirected = null)
    {

        $calendar = $this->fetch();
        $time = SchedulingController::$TIME;
        $rooms = Room::all(['id','nome'])->toArray();
        $roomDefault = $rooms[0];
        $courses =  Course::all(['id','nome_corso'])->toArray();
        $courseDefault = $courses[0];
        //        dd($roomDefault);


        return view(SchedulingController::$path . '-create',
            compact('calendar', 'time', 'rooms', 'roomDefault', 'courses','courseDefault','redirected'));


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //        dd($request->all());

        $validate = Validator::make($request->all(), [
            'giorno'      => 'required',
            'ora_inizio'=> 'required|date_format:H:i',
            'ora_fine'  => 'required|date_format:H:i|after:ora_inizio',
        ]);

        $hStart = $this->extractHourToInt($request->ora_inizio);
        $hEnd   = $this->extractHourToInt($request->ora_fine);
        $duration = $hEnd - $hStart;

        //        dd($hStart,$hEnd);
        //        dd($duration);

        if($duration >2 ){
            //            dd($duration);
            $this->create('I corsi non possono durare di più di 2 ore');
        }
        //
        if ($validate->fails()) {
            return redirect()->route('M351')
                ->withErrors($validate)
                ->withInput();
        } else {

            $idRoom = $request->room;
            $schedulings = Room::find($idRoom)->scheduling()->get();

            $failed = false;
            //            var_dump('Ora inizio:'.$hStart,'Ora fine:'.$hEnd);


            foreach($schedulings as $lesson){
                if($lesson->giorno == $request->giorno) {
                    $tmpHStart = $this->extractHourToInt($lesson->ora_inizio);
                    $tmpHEnd = $this->extractHourToInt($lesson->ora_fine);

                    //                var_dump($tmpHStart,$tmpHEnd);
                    if ($hStart >= $tmpHEnd) {
                        continue;
                    } else {
                        if ($hEnd <= $tmpHStart) {
                            continue;
                        } else {
                            $failed = true;
                            break;
                        }
                    }
                }
            }
            if($failed == true){
                return $this->create("La sala è già occupata per quell'ora");
            }

            $fields = BootController::filterFieldsRequestFromFillable($request->all(),
                Scheduling::class
            );


            $scheduling = new Scheduling($fields);
            $scheduling->save();
            $scheduling->course()->attach($request->course);
            $scheduling->room()->attach($request->room);


            return redirect()->route('M350');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $schedule = Scheduling::find($id);
        $roomDefault = $schedule->room()->first()->id;
        $courseDefault = $schedule->course()->first()->id;

        $orainizio = substr($schedule->ora_inizio,'0',5);
        $orafine = substr($schedule->ora_fine,'0',5);


        $calendar = $this->fetch();
        $time = SchedulingController::$TIME;
        $rooms = Room::all(['id','nome'])->toArray();
        $courses =  Course::all(['id','nome_corso'])->toArray();
        //        dd($roomDefault);




        return view(SchedulingController::$path . '-show',
            compact('calendar', 'schedule','time','orainizio','orafine',
                'roomDefault','rooms', 'courseDefault','courses'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //        dd($redirected);
        $schedule = Scheduling::find($id);
        $roomDefault = $schedule->room()->first()->id;
        $courseDefault = $schedule->course()->first()->id;

        $orainizio = substr($schedule->ora_inizio,'0',5);
        $orafine = substr($schedule->ora_fine,'0',5);


        $calendar = $this->fetch();
        $time = SchedulingController::$TIME;
        $rooms = Room::all(['id','nome'])->toArray();
        $courses =  Course::all(['id','nome_corso'])->toArray();
        //        dd($roomDefault);

        if(session()->has('redirected'))
            $redirected = session('redirected');
        else
            $redirected = null;

        return view(SchedulingController::$path . '-edit',
            compact('calendar', 'schedule','time','orainizio','orafine',
                'roomDefault','rooms', 'courseDefault','courses','redirected'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $scheduling = Scheduling::find($id);

        //        dd($request->all());

        $fields = BootController::filterFieldsRequestFromFillable($request->all(),
            Scheduling::class
        );

        $fieldsOriginal = BootController::filterFieldsRequestFromFillable($scheduling->toArray(),
            Scheduling::class
        );



        //        $request->course


        $validate = Validator::make($request->all(), [
            'giorno'      => 'required',
            'ora_inizio'=> 'required|date_format:H:i',
            'ora_fine'  => 'required|date_format:H:i|after:ora_inizio',
        ]);

        $hStart = $this->extractHourToInt($request->ora_inizio);
        $hEnd   = $this->extractHourToInt($request->ora_fine);
        $duration = $hEnd - $hStart;

        //        dd($hStart,$hEnd);
        //        dd($duration);

        if($duration >2 ){
            //            dd($duration);


            return redirect()->route('M353',$scheduling->id)->with('redirected','I corsi non possono durare di più di 2 ore')
                ->withErrors($validate)
                ->withInput();
        }
        //
        if ($validate->fails()) {
            return redirect()->route('M353',$scheduling->id)
                ->withErrors($validate)
                ->withInput();
        } else {

            $idRoom = $request->room;
            $schedulings = Room::find($idRoom)->scheduling()->get();

            $failed = false;
            //            var_dump('Ora inizio:'.$hStart,'Ora fine:'.$hEnd);


            foreach ($schedulings as $lesson) {
                if ($lesson->giorno == $request->giorno && $lesson->id != $scheduling->id) {
                    $tmpHStart = $this->extractHourToInt($lesson->ora_inizio);
                    $tmpHEnd = $this->extractHourToInt($lesson->ora_fine);

                    //                var_dump($tmpHStart,$tmpHEnd);
                    if ($hStart >= $tmpHEnd) {
                        continue;
                    } else {
                        if ($hEnd <= $tmpHStart) {
                            continue;
                        } else {
                            $failed = true;
                            break;
                        }
                    }
                }
            }
            if ($failed == true) {
                return $this->create("La sala è già occupata per quell'ora");
            }




            $scheduling->fill($fields)->save();
            $scheduling->course()->sync($request->course);
            $scheduling->room()->sync($request->room);




            return redirect()->route('M350');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $scheduling = Scheduling::find($id);
        //        $schedule->course()->detach();
        $nome = $scheduling->course()->first()->nome_corso;
        $nome.= ' - '.$scheduling->room()->first()->nome;
        $scheduling->delete();

        $calendar = $this->fetch();

        return view(SchedulingController::$path . '-delete',
            compact('calendar'))
            ->with('schedule',$nome);
    }

    private function fetch(){
        $events = [];
        $data = DB::select("SELECT r.id,r.nome,c.nome_corso, s.giorno, s.ora_inizio, s.ora_fine
                                    FROM courses  c, scheduling_course sc, schedulings s,
                                            (SELECT s.id, r.nome,r.created_at,r.updated_at
                                                FROM rooms as r, room_scheduling as rs, schedulings as s
                                                    WHERE 	r.id 				= rs.room_id
                                                    AND 	rs.scheduling_id	= s.id ) as r
                                    
                                            WHERE 	c.id 				= sc.course_id
                                                AND 	sc.scheduling_id 	= s.id 
                                                AND 	s.id = r.id
                                                ORDER BY r.id");

        $days = $this->getArrayByWeek();

        //    dd($days);

        foreach ($data as $key => $value) {

            $events[] = Calendar::event(
                $value->nome_corso.' - '.$value->nome,
                false,
                new \DateTime($days[$value->giorno].' '.$value->ora_inizio),
                new \DateTime($days[$value->giorno].' '.$value->ora_fine),
                $value->id,
                // Add color and link on event
                [
                    'color' => '#f05050',
                    'url'=> route('M356',$value->id)

                    // 'url' => 'pass here url and any route',
                ]);

        }

        //        dd($events);
        $calendar = Calendar::addEvents($events) //add an array with addEvents
        ->setOptions([ //set fullcalendar options
            'defaultView' => 'agendaWeek',
            'minTime' => '08:00:00',
            'maxTime' => '24:00:00',
            'locale' => 'it',
            'header' => [

                'firstDay' => 1,
                'left' => 'prev,next today',
                'center' => 'title',
                'right' => 'agendaWeek,agendaDay'


            ],
            'eventLimit' => true,


        ]);
        return $calendar;
    }

    private function extractHourToInt($time){return (int)substr($time,0,2);}

    private function extractHour($time){return substr($time,0,5);}
}


