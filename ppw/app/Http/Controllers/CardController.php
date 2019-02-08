<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

class CardController extends Controller
{
    public function datacard(){

    $cards =  DB::table('cards')->get();

    return view('home/secretariat/members/card',compact('cards'));
    }
}
