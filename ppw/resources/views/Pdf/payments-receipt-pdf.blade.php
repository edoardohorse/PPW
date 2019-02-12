@extends('layout.pdf-receipt')


@forelse($payments as $payment)
@section('numero_ricevuta')        {{-- tabella transaction--}}
    {{$payment->id}}
    @stop

@section('data_creazione')       {{-- tabella transaction--}}

    {{$payment->created_at}}
@stop

@section('nome_asd')

    {{$payment->nome}}
@stop

@section('indirizzo')

    {{$payment->indirizzo}}
@stop

@section('citta')

    {{$payment->citta}}
@stop

@section('provincia')

    {{$payment->provincia}}
@stop

@section('cap')

    {{$payment->cap}}

@stop

@section('cod_fiscale')

    {{$payment->cod_fiscale}}
@stop

@section('numero_tel')
    {{$payment->numero_tel}}
@stop

@section('metodo_pagamento')       {{-- tabella transaction--}}

    {{$payment->modalita_pagamento}}
@stop

@section('descrizione')       {{-- tabella transaction--}}
    {{$payment->descrizione}}

@stop

@section('importo')       {{-- tabella transaction--}}

    {{$payment->importo}}
@stop
@empty
    <tr><td>Tabella vuota</td></tr>
@endforelse
