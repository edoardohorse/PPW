<?php

// https://laravel.com/docs/5.7/controllers

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestRoute extends Controller
{
    public function default($name = "prova"){
        return "Sei nella pagina $name";
    }
}
