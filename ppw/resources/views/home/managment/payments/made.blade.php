
@extends('layout.master_home')

@section('title','Homepage')

@section('main')
    <h1>Pagamenti effettuati</h1>

   @include('home-tables.payments-table')
@stop