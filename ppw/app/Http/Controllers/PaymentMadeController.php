<?php

namespace App\Http\Controllers;

use App\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Validator;


class PaymentMadeController extends Controller
{

    static $path = 'home/managment/payments/made/made';


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transactions =   $this->fetch();
        return view(PaymentMadeController::$path, compact('transactions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $transactions =   $this->fetch();
        return view(PaymentMadeController::$path.'-create', compact('transactions'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        $validator = Validator::make($request->all(), [
            '*'                     => 'required',
            'descrizione'           =>  'string|max:200',
            'importo'               =>  'required|numeric|between:0,99.99',
        ]);



        if ($validator->fails()) {
            return redirect()->route('M711')
                ->withErrors($validator)
                ->withInput();
            //            dd('Fallito');

        } else {
//            dd($request->all());

            $t = new Transaction();
            $t->modalita_pagamento  =  $request->modalita_pagamento;
            $t->descrizione     = $request->descrizione;
            $t->file_fattura    =   "";
            $t->data = date('Y-m-d');
            $t->importo         = $request->importo;
            $t->tipo_transazione    = 'entrata';
            $t->tipo_ricevuta    = 'ricevuta';
            $t->tipo_fattura       = '';


            $t->asd_id          = 1;
            $t->save();

            $pdf = PdfController::pdf($t->id);
//            else
//                $pdf = PdfController::pdfinvoices($t->id,$request->tipo_ricevuta);



            $t->file_fattura    = "/uploads/ricevuta/pdf$t->id.pdf";
            $t->save();


            return redirect()->route('M710');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $transactions =   $this->fetch();
        $transaction = Transaction::find($id);
        return view(PaymentMadeController::$path.'-show', compact('transactions','transaction'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function fetch(){
        return DB::select("SELECT id,descrizione,importo,modalita_pagamento,created_at,file_fattura FROM transactions WHERE tipo_transazione ='entrata'");
    }
}
