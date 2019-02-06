@extends('layout.master_boot')

@section('title', 'Registrazione ASD')

@section('h2')
    Registrazione ASD
@stop

@section('panel-body')
    <form method="POST" action="/signInASD">
        @csrf

            @include('forms/step0')

        <input type="submit">

    </form>
@stop
