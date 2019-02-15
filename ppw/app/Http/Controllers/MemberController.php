<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    public function founder()
    {

        $members = DB::select("SELECT DISTINCT m.id,u.nome,u.cognome,m.cod_fiscale,u.data_nascita,c.scadenza_tesseramento,m.scadenza_ass,m.scadenza_cert_med 
FROM users u,cards c,members m 
WHERE m.id = u.member_id AND u.tipo = 'fondatore' 
 GROUP BY m.id ASC ");

        return view('home/secretariat/members/founder', compact('members'));
    }

    public function member()
    {

        $members = DB::select("SELECT DISTINCT m.id,u.nome,u.cognome,m.cod_fiscale,u.data_nascita,c.scadenza_tesseramento,m.scadenza_ass,m.scadenza_cert_med 
FROM users u,cards c,members m 
WHERE m.id = u.member_id AND u.tipo = 'allievo' 
 GROUP BY m.id ASC ");

        return view('home/secretariat/members/member', compact('members'));
    }


    public function datacard()
    {

        $cards = DB::table('cards')->get();

        return view('home/secretariat/members/card', compact('cards'));
    }


    public function provider()
    {

        $members = DB::select("SELECT DISTINCT m.id,u.nome,u.cognome,m.cod_fiscale,u.data_nascita,c.scadenza_tesseramento,m.scadenza_ass,m.scadenza_cert_med 
FROM users u,cards c,members m,providers p 
WHERE m.id = u.member_id AND m.id = p.member_id GROUP BY m.id ASC ");

        return view('home/secretariat/providers/provider', compact('members'));


    }

}