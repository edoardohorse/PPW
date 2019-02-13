<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;


class CalendarController extends Controller
{
    private static $DAYS = ['Lunedi','Martedi','Mercoledi','Giovedi','Venerdi','Sabato','Domenica'];




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
            $days[CalendarController::$DAYS[$i]] = $tmp;
        }
        return $days;
    }


    public function calendar(){

        $events = [];
        $data = DB::select("SELECT sh.ora_inizio, sh.ora_fine, c.nome_corso, sh.giorno
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
                null,
                // Add color and link on event
                [
                    'color' => '#f05050',


                    // 'url' => 'pass here url and any route',
                ]);

            }

        $calendar = Calendar::addEvents($events) //add an array with addEvents
        ->setOptions([ //set fullcalendar options
            'defaultView' => 'agendaWeek',
            'minTime' => '08:00:00',
            'maxTime' => '24:00:00',
            'locale' => 'it',
            'axisFormat' => 'HH:mm',
            'header' => [

                'firstDay' => 1,
                'left' => 'prev,next today',
                'center' => 'title',
                'right' => 'agendaWeek,agendaDay'


            ],
            'eventLimit' => true,

        ]);

        return view('home/mng-activity/calendar', compact('calendar'));

    }
}
