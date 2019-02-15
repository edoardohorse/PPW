@extends('forms.package.form-package')


@section('modal-title')
    Eliminazione effettuata
@stop

@section('route', route('M330'))

@section('modal-done-text', 'Finito')



@section('form')

    <p>{{$package}} eliminata</p>

@stop