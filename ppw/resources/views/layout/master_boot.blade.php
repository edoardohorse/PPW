@extends('layout.master')

@push('lib_css')
    <link rel="stylesheet" href = "{{ asset('css/before_login_style.css ') }}">
    <link rel="stylesheet" href = "{{ asset('css/box.css ') }}">
@endpush

@section('body')
   @include('layout.master_boot_header')


    @include('layout.master_boot_box')
@stop

