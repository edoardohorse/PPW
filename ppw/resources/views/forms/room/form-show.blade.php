@extends('forms.room.form-room')


@section('modal-title')
    {{$room->nome}}
@stop

@section('route', route('M340'))
@section('method', 'GET')


@section('form')

{{--    {{dd($courses)}}--}}
@include('forms.input-form',[
             'type'  => 'text',
             'label' => 'Nome sala',
             'input_name' => 'nome',
             'readonly'   => 'true',
              'value'     => $room->nome
 ])




@stop

@section('modal-done-text', 'Chiudi')