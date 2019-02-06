@extends('layout.master_boot')


@section('main')

    <div class="container text-center position-panel">
        <h2>@yield('h2')</h2>

        <div class="panel panel-default">
            <div class="panel-body mx-auto d-block">@yield('panel-body')</div>
            <a href=" @yield('redirect') " class="position-button btn btn-primary btn-lg">@yield('button')</a>
        </div>
    </div>

    @yield('box')

@stop