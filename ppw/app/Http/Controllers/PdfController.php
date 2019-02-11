<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade as PDF;



class PdfController extends Controller
{
    public function pdf()
    {

        $payments = DB::select("SELECT I.id, I.data, I.tipo_transazione, I.descrizione, I.importo, M.nome, M.indirizzo, I.created_at
FROM transactions as I, asds as M
WHERE I.asd_id=M.id AND I.id= 1");



       return view('Pdf/payments-pdf', compact('payments'));
       //$pdf = PDF::loadView('Pdf/payments-pdf', compact('payments'))->save( public_path('/uploads').'/pdfname.pdf' );
        //return $pdf->download('invoice.pdf');
    }

}
