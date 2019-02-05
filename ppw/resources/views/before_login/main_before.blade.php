@extends('layout.main')

@section('lib_css')
    <link rel="stylesheet" href = "{{ asset('css/before_login_style.css ') }}">

@endsection

@section('body')
   @include('before_login/header_before_login')
@endsection

@section('lib_end')
    <script src="{{ asset('end_script_before_login.js') }}"></script>
 @endsection