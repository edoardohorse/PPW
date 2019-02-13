@extends('forms.scheduling.form-scheduling')


@section('modal-title')
    Modifica '{{$scheduling->nome}}'
@stop

@section('route', route('M354', $scheduling->id))
@section('method', 'POST')


@section('form')

    @method('PUT')
    {{--{{dd($courses)}}--}}
    @include('forms.input-form',[
                 'type'  => 'text',
                 'label' => 'Nome sala',
                 'input_name' => 'nome',
                  'value'     => $scheduling->nome
     ])




@stop

@section('modal-done-text', 'Finito')