<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ActivityController extends Controller
{
    public function discipline(){

        $disciplines = DB::table('disciplines')->get();

        return view('home/mng-activity/discipline', compact('disciplines'));
    }

    public function course(){

        $courses = DB::select("SELECT c.id,c.nome_corso,c.costo_orario,d.nome,c.created_at,c.updated_at FROM disciplines d,courses c WHERE d.id = c.discipline_id ORDER BY c.id");

        return view('home/mng-activity/course', compact('courses'));

    }

    public function package(){

        $packages = DB::select("SELECT p.id,p.nome_pacchetto,p.prezzo,c.nome_corso,p.created_at,p.updated_at FROM packages p,package_course pc,courses c WHERE c.id = pc.course_id ORDER BY p.id");

        return view('home/mng-activity/package', compact('packages'));

    }

    public function room(){

        $rooms = DB::select("SELECT r.id,r.nome,c.nome_corso,r.created_at,r.updated_at
FROM courses  c, scheduling_course sc, schedulings s,
		(SELECT s.id, r.nome,r.created_at,r.updated_at
			FROM rooms as r, room_scheduling as rs, schedulings as s
				WHERE 	r.id 				= rs.room_id
				AND 	rs.scheduling_id	= s.id ) as r

		WHERE 	c.id 				= sc.course_id
			AND 	sc.scheduling_id 	= s.id 
			AND 	s.id = r.id
            ORDER BY r.id");

        return view('home/mng-activity/room', compact('rooms'));

    }
}
