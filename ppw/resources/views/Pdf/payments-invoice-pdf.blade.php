@extends('layout.pdf-invoice')


@foreach($invoices as $invoice)

    {{--dati GENERICI--}}

@section('numero_fattura ')       {{-- tabella transaction--}}
    {{$invoice->id}}
@stop

@section('data_creazione')       {{-- tabella transaction--}}
    {{$invoice->created_at}}
    @stop

@section('metodo_paga')       {{-- tabella transaction--}}
    {{$invoice->modalita_pagamento}}
@stop

@section('importo')       {{-- tabella transaction--}}
    {{$invoice->importo}}
@stop

@section('descrizione')       {{-- tabella transaction--}}
    {{$invoice->descrizione}}
@stop


{{--dati ASD --}}

@section('nome_asd')
    {{$invoice->nome}}
    @stop

@section('indirizzo_asd')
    {{$invoice->indirizzo}}
    @stop

@section('num_tell_asd')
    {{$invoice->numero_tel}}
    @stop

@section('citta_asd')
    {{$invoice->citta}}
    @stop

@section('provincia_asd')
    {{$invoice->provincia}}
    @stop

@section('cap_asd')
    {{$invoice->cap}}
    @stop

@section('cod_fisc_asd')
    {{$invoice->cod_fiscale}}
    @stop

@section('p.iva_asd')
    {{$invoice->p_iva}}
    @stop

{{--dati SOCIO--}}

@section('nome_socio')       {{-- tabella users--}}
    {{$invoice->nome}}
    @stop

@section('cognome_socio')       {{-- tabella users--}}
    {{$invoice->cognome}}
    @stop

@section('cod_fisc_socio')     {{-- tabella members--}}
    {{$invoice->cod_fiscale}}
    @stop

@section('p.iva_socio')    {{-- tabella members--}}
    {{$invoice->p_iva}}
    @stop

@section('indirizzo_socio')     {{-- tabella users--}}
    {{$invoice->indirizzo}}
    @stop

@section('citta_socio')  {{-- tabella users--}}
    {{$invoice->citta}}
    @stop


@endforeach