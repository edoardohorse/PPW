@extends('layout.master_home')

@section('title','Collaboratore interno')

@section('main')
     <h1>Collabaoratore interno</h1>

     @include('home-tables.staff-table')

     @yield('modal')


@stop