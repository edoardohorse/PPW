@extends('forms.scheduling.form-scheduling')


@section('modal-title')
    Eliminazione effettuata
@stop

@section('route', route('M350'))

@section('modal-done-text', 'Finito')



@section('form')

    <p>{{$scheduling}} eliminata</p>

@stop