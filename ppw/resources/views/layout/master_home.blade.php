@extends('layout.master')

@section('lib_css')
    <link rel="stylesheet" href="{{ asset('css/home.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/header.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/sidenav.css')  }}">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
@stop

@section('lib_script')
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
@stop

@section('lib_end_script')
    <script src="{{ asset('js/sidenav.js') }}"></script>
@stop

@section('body')

    @include('layout.master_home_header')


    @include('layout.master_home_sidenav')

    <main class="col-lg-9 col-sm-12 float-right container">

        @yield('main')

    </main>



@stop