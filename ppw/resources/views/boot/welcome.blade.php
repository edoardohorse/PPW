@extends('layout.master_boot')

@section('title','Benvenuto')

@section('h2')
    Benvenuto sul sito!
@stop



@if( $route   == 'B005')
    @section('redirect', '/login')
    @section('redirect-text', 'Login Gestione')


@else
    @section('redirect', '/boot')
    @section('redirect-text', 'Registrazione ASD')
@endif


