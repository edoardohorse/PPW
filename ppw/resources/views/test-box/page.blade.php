@extends('test-box.main-box')

@section('title','Box')

@section('h2')
    Login Utente
@stop

@section('panel-body')
    Autenticazione effettuata con successo
@stop


@section('button')
    Vai al gestionale
@stop


@section('redirect', '/login')