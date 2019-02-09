<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaymentController extends Controller
{

    public function made(){

        $transactions = DB::select("SELECT id,descrizione,importo,modalita_pagamento,created_at,file_fattura FROM transactions WHERE tipo_transazione ='entrata'
");


        return view('home/managment/payments/made', compact('transactions'));

    }

    public function received(){

        $transactions = DB::select("SELECT id,descrizione,importo,modalita_pagamento,created_at,file_fattura FROM transactions WHERE tipo_transazione ='uscita'
");


        return view('home/managment/payments/received', compact('transactions'));

    }


}
