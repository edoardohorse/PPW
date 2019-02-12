@extends('forms.discipline.form-discipline');


@section('modal-title')
    Eliminazione effettuata
@stop

@section('route', route('M310'))

@section('modal-done-text', 'Finito')



@section('form')

    <p>{{$discipline}} eliminata</p>

@stop