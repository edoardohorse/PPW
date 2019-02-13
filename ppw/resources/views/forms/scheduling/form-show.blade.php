@extends('forms.scheduling.form-scheduling')


@section('modal-title')
    {{$scheduling->nome}}
@stop

@section('route', route('M350'))
@section('method', 'GET')


@section('form')

{{--    {{dd($courses)}}--}}
@include('forms.input-form',[
             'type'  => 'text',
             'label' => 'Nome sala',
             'input_name' => 'nome',
             'readonly'   => 'true',
              'value'     => $scheduling->nome
 ])




@stop

@section('modal-done-text', 'Chiudi')