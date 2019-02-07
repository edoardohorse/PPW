@extends('layout.master_boot')

@section('title', 'Registrazione ASD')

@section('h2')
    Registrazione ASD
@stop

@section('panel-body')
    <form method="POST" action="/signInASD">
        @csrf

            @include('forms/step1')
            @include('forms/step2')

        <input type="submit">

    </form>
@stop
