@extends('test-box.main-box')


@section('body')
    @include('before_login/header_before_login')

    @endsection
@section('h2')
    Login Utente
@stop

@section('panel-body')
    Autenticazione effettuata con successo
    @stop
@section('button')
    Vai al gestionale
@stop


