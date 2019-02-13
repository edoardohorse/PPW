<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MaddHatter\LaravelFullcalendar\Facades\Calendar;


class CalendarController extends Controller
{
    public function calendar(){

        $events = [];
        $data = DB::select("SELECT sh.ora_inizio, sh.ora_fine, c.nome_corso
FROM schedulings as sh, courses as c, scheduling_course as shc
WHERE c.id = shc.course_id
AND   shc.scheduling_id = sh.id");



            foreach ($data as $key => $value) {
                $events[] = Calendar::event(
                  $value->nome_corso,
                false,
                new \DateTime($value->ora_inizio),
                new \DateTime($value->ora_fine),
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
