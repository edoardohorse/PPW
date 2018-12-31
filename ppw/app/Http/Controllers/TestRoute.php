<?php

// https://laravel.com/docs/5.7/controllers

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRoute extends Controller
{
    public function default($name = "prova"){
        return "Sei nella pagina $name";
    }

    public function form(Request $request){
        $name = $request->input('testo');
        return $name;
    }

    public function ajaxGET($val = "NULL"){
        return "Richiesta ajax: $val";
    }
    public function ajaxPOST(Request $req){
        $name = $req->input('name');
        $surname = $req->input('surname');
        return "Richiesta ajax: $name, $surname";
    }
}
