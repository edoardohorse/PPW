@extends('layout.master_home')

@section('title','Homepage')

@section('main')
    <h1>Stagista</h1>

    @include('home-tables.staff-table')
@stop