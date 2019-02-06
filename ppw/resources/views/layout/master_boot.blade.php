@extends('layout.master')

@section('lib_css')
    <link rel="stylesheet" href = "{{ asset('css/before_login_style.css ') }}">
    <link rel="stylesheet" href = "{{ asset('css/box.css ') }}">
@stop

@section('body')
   @include('layout.master_boot_header')

    @include('layout.master_boot_box')
@stop

@section('lib_end')
    <script src="{{ asset('end_script_before_login.js') }}"></script>
 @stop