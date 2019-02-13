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

        $hStart = $this->extractHour($request->ora_inizio);
        $hEnd   = $this->extractHour($request->ora_fine);
        $duration = $hEnd - $hStart;

//        dd($hStart,$hEnd);
//        dd($duration);

        if($duration >2 ){
            dd($duration);
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
                    $tmpHStart = $this->extractHour($lesson->ora_inizio);
                    $tmpHEnd = $this->extractHour($lesson->ora_fine);

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

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function fetch(){
        $events = [];
        $data = DB::select("SELECT sh.id, sh.ora_inizio, sh.ora_fine, c.nome_corso, sh.giorno
FROM schedulings as sh, courses as c, scheduling_course as shc
WHERE c.id = shc.course_id
  AND   shc.scheduling_id = sh.id");

        $days = $this->getArrayByWeek();

        //    dd($days);

        foreach ($data as $key => $value) {

            $events[] = Calendar::event(
                $value->nome_corso,
                false,
                new \DateTime($days[$value->giorno].' '.$value->ora_inizio),
                new \DateTime($days[$value->giorno].' '.$value->ora_fine),
                $value->id,
                // Add color and link on event
                [
                    'color' => '#f05050',
                    'url'=>'/homepage'

                    // 'url' => 'pass here url and any route',
                ]);

        }

        //        dd($events);
        $calendar = Calendar::addEvents($events) //add an array with addEvents
        ->setOptions([ //set fullcalendar options
            'defaultView' => 'agendaWeek',
            'minTime' => '08:00:00',
            'maxTime' => '24:00:00',
            'selectable' => true,
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

    private function extractHour($time){return (int)substr($time,0,2);}
}


