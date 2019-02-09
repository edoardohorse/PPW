@extends('layout.master_home')

@section('title','Pacchetti')

@section('main')
    <h1>Pacchetti</h1>

    @include('home-tables.package-table')
@stop