@extends('layout.master')

@section('lib_css')
    <link rel="stylesheet" href="{{ asset('css/prv.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/header.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/sidenav.css')  }}">
@stop


@section('body')

    @include('layout.master_home_header')


    @include('layout.master_home_sidenav')

    <main class="col-9 float-right container">

        @yield('main')

    </main>



@stop