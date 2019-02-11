@extends('layout.pdf_receipt')


@forelse($payments as $payment)
@section('numero_fattura')
    {{$payment->id}}
    @stop

@section('data_creazione')

    {{$payment->created_at}}
@stop

@section('nome_asd')

    {{$payment->nome}}
@stop

@section('indirizzo')

    {{$payment->indirizzo}}
@stop

@section('metodo_pagamento')

    {{$payment->tipo_transazione}}
@stop

@section('importo')

    {{$payment->importo}}
@stop
@empty
    <tr><td>Tabella vuota</td></tr>
@endforelse
