<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $this->getInfoAccount();
        return view('home');
    }

    public function getInfoAccount(){
        $memb['name'] = Member::get()->first()->name;
        $memb['surname'] = Member::get()->first()->surname;
        $memb['id'] = Member::get()->first()->id;
//        dd($memb);
//        var_dump($memb);
        Auth::user()->setUserId($memb['id'])
                    ->setName($memb['name'])
                    ->setSurname($memb['surname']);
//        dd(Auth::user()->getId());
        return $memb;
    }
}
