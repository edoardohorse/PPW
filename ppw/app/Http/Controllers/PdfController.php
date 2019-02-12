<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;



class PdfController extends Controller
{
    public function pdf()
    {

        $payments = DB::select("SELECT I.id, I.data, I.modalita_pagamento, I.descrizione, I.importo, M.nome, M.indirizzo, I.created_at
FROM transactions as I, asds as M
WHERE I.asd_id=M.id AND M.id= 1 AND tipo_transazione='entrata'");




//        return view('Pdf/payments-pdf', compact('payments'));
       $pdf = PDF::loadView('Pdf/payments-pdf', compact('payments'))->save( public_path('/uploads').'/pdfname.pdf' );
        return $pdf->download('invoice.pdf');
    }

}
