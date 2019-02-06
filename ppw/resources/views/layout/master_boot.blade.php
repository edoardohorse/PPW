@extends('layout.master')

@section('lib_css')
    <link rel="stylesheet" href = "{{ asset('css/before_login_style.css ') }}">

@stop

@section('body')
   @include('layout.master_boot_header')

    @yield('main')
@stop

@section('lib_end')
    <script src="{{ asset('end_script_before_login.js') }}"></script>
 @stop