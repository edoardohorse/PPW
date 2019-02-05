@extends('layout.main')

@section('lib_css')
    <link rel="stylesheet" href="{{ asset('css/prv.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/header.css')  }}">
    <link rel="stylesheet" href="{{ asset('css/sidenav.css')  }}">
@endsection


@section('body')

    @include('home/header')


    @include('home/sidenav')

    <main class="col-9 float-right container">

        @yield('main')

    </main>



@endsection