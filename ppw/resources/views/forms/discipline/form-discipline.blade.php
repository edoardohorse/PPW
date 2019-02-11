@extends('layout.master_home_modal_modify')


@include('layout.master_lib')

@section('modal-body_modify')
    <form action="@yield('route')" method="@yield('method')">

        @csrf


        @yield('form')



        <input type="submit" class="btn btn-lg btn-outline-primary float-right">

    </form>


    <script>
        $(document).ready(function(){
            $("#Modal_modify").modal('show');
        })
    </script>

@stop

