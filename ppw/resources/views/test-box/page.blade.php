@extends('layout.master_boot')

@section('title','Box')

@section('h2')
    Login Utente
@stop

@section('panel-body')
    Autenticazione effettuata con successo
@stop


@section('redirect-text')
    Vai al gestionale
@stop


@section('redirect', '/login')