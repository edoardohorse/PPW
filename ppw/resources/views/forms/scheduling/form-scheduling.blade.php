@extends('layout.master_home_modal')





@section('modal-body')
    <form action="@yield('route')" method="@yield('method')" id="show">

        @csrf


        @yield('form')



        <input type="submit" class="btn btn-lg btn-outline-primary float-right" value="@yield('modal-done-text','Invia')">

    </form>

    <form class="d-inline" action="@yield('deleteFormAction')" id="deleteForm" method="POST">
        @csrf
        @method('DELETE')

    </form>

    <script>
        $(document).ready(function(){
            $("#Modal").modal('show');
        })
    </script>

@stop


@section('modal-cancel', route('M350'))