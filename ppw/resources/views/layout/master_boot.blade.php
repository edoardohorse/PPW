@extends('layout.master')

@section('lib_css')
    <link rel="stylesheet" href = "{{ asset('css/before_login_style.css ') }}">

@endsection

@section('body')
   @include('layout.master_boot_header')
@endsection

@section('lib_end')
    <script src="{{ asset('end_script_before_login.js') }}"></script>
 @endsection