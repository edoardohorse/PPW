<?php

namespace App\Http\Controllers;

use Validator;

use App\Http\Requests\AsdFormRequest;
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
//        dd( $this->isASDAlreadySigned());
        if( $this->isASDAlreadySigned()){
//            return 'Gia registrata';
            return view('boot/welcome', ['route' => 'B005']);
        }
        else{
//            return 'Non registrata';
            return view('boot/welcome', ['route' => 'A000']);
        }
    }

    public function signInASD(AsdFormRequest $req){
//        dd($req);


        $validator = Validator::make($req->all(),$req->rules());

        if($validator->fails()){
            return redirect('/boot')
                ->withErrors($validator)
                ->withInput();
//            dd('Fallito');

        }
        else{
//            dd($req);
            return redirect('/boot-asd-done');
//            $asd = new App\Asd();
//
//            $asd->nome = $request->name;

        }

    }
}
