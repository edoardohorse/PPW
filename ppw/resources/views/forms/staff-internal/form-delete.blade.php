@extends('forms.staff-internal.form-staff-internal')


@section('modal-title')
    Eliminazione effettuata
@stop

@section('route', route('M350'))

@section('modal-done-text', 'Finito')



@section('form')

    <p>{{$schedule}} eliminata</p>

@stop