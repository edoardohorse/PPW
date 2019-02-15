@extends('forms.room.form-room')


@section('modal-title')
    Eliminazione effettuata
@stop

@section('route', route('M340'))

@section('modal-done-text', 'Finito')



@section('form')

    <p>{{$room}} eliminata</p>

@stop