<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StaffController extends Controller
{
    public function internal()
    {

        $members = DB::select("SELECT DISTINCT m.id,u.nome,u.cognome,m.cod_fiscale,u.data_nascita,c.scadenza_tesseramento,m.scadenza_ass,m.scadenza_cert_med 
FROM users u,cards c,members m,collaborators co,internals i 
WHERE m.id = u.member_id AND u.id = co.user_id AND 
co.id = i.collaborator_id AND co.esterno = 0 
 ORDER BY m.id ASC ");

        return view('home/managment/staff-internal/internal', compact('members'));
    }

    public function external()
    {

        $members = DB::select("SELECT DISTINCT m.id,u.nome,u.cognome,m.cod_fiscale,u.data_nascita,c.scadenza_tesseramento,m.scadenza_ass,m.scadenza_cert_med 
FROM users u,cards c,members m,collaborators co,internals i 
WHERE m.id = u.member_id AND u.id = co.user_id AND 
co.id = i.collaborator_id AND co.esterno = 1 
 ORDER BY m.id ASC ");

        return view('home/managment/staff-internal/external', compact('members'));
    }

    public function stagista()
    {

        $members = DB::select("SELECT DISTINCT m.id,u.nome,u.cognome,m.cod_fiscale,u.data_nascita,c.scadenza_tesseramento,m.scadenza_ass,m.scadenza_cert_med 
FROM users u,cards c,members m,collaborators co,teachers t 
WHERE m.id = u.member_id AND u.id = co.user_id AND 
co.id = t.collaborator_id AND t.stagista = 1 
 ORDER BY m.id ASC 
");

        return view('home/managment/staff-internal/stagista', compact('members'));
    }

    public function teacher()
    {

        $members = DB::select("SELECT DISTINCT m.id,u.nome,u.cognome,m.cod_fiscale,u.data_nascita,c.scadenza_tesseramento,m.scadenza_ass,m.scadenza_cert_med 
FROM users u,cards c,members m,collaborators co,teachers t 
WHERE m.id = u.member_id AND u.id = co.user_id AND 
co.id = t.collaborator_id AND t.stagista = 0 
 ORDER BY m.id ASC 
");

        return view('home/managment/staff-internal/teacher', compact('members'));
    }
}
