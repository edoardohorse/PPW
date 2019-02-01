<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function step1(){
        return view('test/step1');
    }
    public function step2(){
        return view('test/step2');
    }
}
