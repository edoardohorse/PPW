@extends('forms.course.form-course')


@section('modal-title')
    Eliminazione effettuata
@stop

@section('route', route('M310'))

@section('modal-done-text', 'Finito')



@section('form')

    <p>{{$course}} eliminata</p>

@stop