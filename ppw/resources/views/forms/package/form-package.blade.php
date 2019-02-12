@extends('layout.master_home_modal')



{{--@include('layout.master_lib')--}}

@section('modal-body')
    <form action="@yield('route')" method="@yield('method')">

        @csrf


        @yield('form')



        <input type="submit" class="btn btn-lg btn-outline-primary float-right" value="@yield('modal-done-text','Invia')">

    </form>


    <script>
        $(document).ready(function(){
            $("#Modal").modal('show');
        })
    </script>

@stop


@section('modal-cancel', route('M330'))