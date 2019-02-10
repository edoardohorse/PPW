@extends('layout.master_boot')

@section('title','Benvenuto')

@section('h2')
    Benvenuto sul sito!
@stop



@if( $route   == 'B005')
    @section('redirect', '/login')
    @section('redirect-text', 'Login Gestionale')

@else
    @section('redirect', '/boot')
    @section('redirect-text', 'Registrazione ASD')


    @if(!empty($redirected))
        @section('panel-body')
            <div class="alert alert-warning" role="alert">
                Effettura la registrazione dell'asd prima di ogni altra operazione
            </div>
        @stop
    @endif
@endif


