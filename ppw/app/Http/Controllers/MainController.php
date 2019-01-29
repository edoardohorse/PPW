<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MainController extends Controller
{

    /**
     *  Controlla se l'ASD è stata già registrata
     *
     * @return bool
     */
    private function isASDAlreadySigned(){

        // Controllo se esiste almeno una tupla nella tabella ASD
        // ritorna true se esiste altrimenti false
        return DB::table('asds')->first() == null? false : true;
    }


    public function index(){

    }

    public function firstSignInASD(){
        // se l'ASD è già registrata fa il redirect alla B005
        if( $this->isASDAlreadySigned()){
//            return 'Gia registrata';
            return route('');
        }
        else{
//            return 'Non registrata';
            return route('');
        }
    }
}
