<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;



class PdfController extends Controller
{
    static public function pdf($id)
    {

        $payments = DB::select("SELECT I.id, I.data, I.modalita_pagamento, I.descrizione, I.importo, M.nome, M.indirizzo, M.citta, M.cod_fiscale, M.cap , M.provincia, I.created_at, M.numero_tel
FROM transactions as I, asds as M
          WHERE I.asd_id=M.id AND i.id='$id'
           AND tipo_transazione='entrata' AND tipo_ricevuta='ricevuta'");




//        return view('Pdf/payments-pdf', compact('payments'));
       $pdf = PDF::loadView('Pdf/payments-receipt-pdf', compact('payments'))->save( public_path('/uploads')."/fattura/pdf$id.pdf" );
        return $pdf;
    }

    public function pdfinvoices()
    {
    $invoices = DB::select("SELECT  I.id, I.data, I.modalita_pagamento, I.descrizione, I.importo, M.nome, M.indirizzo, M.citta, M.p_iva, M.cap , M.provincia, I.created_at, A.nome, A.cognome, B.cod_fiscale, B.p_iva
FROM transactions as I, asds as M, users as A, members as B
WHERE I.id=M.id AND I.id=A.id AND A.id=B.id AND tipo_transazione='entrata'");

        $pdf = PDF::loadView('Pdf/payments-invoice-pdf', compact('invoices'))->save( public_path('/uploads').'/pdfname1.pdf' );
        return $pdf->download('fattura.pdf');

    }

    public function pdfverbals()
    {
//        $verbals =
    }

}
