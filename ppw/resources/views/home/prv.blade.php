@extends('layout.main')


@section('body')



    @include('home/header')


    @include('home/sidenav')



    <main class="col-9 float-right">

        @yield('main')



    </main>





@endsection