@extends('forms.discipline.form-discipline');


@section('modal-title')
    Modifica nome di '{{$discipline->nome}}'
@stop

@section('route', route('M314', $discipline->id))
@section('method', 'POST')


@section('form')

    @method('PUT')
    @include('forms.input-form',[
            'type'  => 'text',
            'label' => 'Nome disciplina',
            'input_name' => 'nome',
            'value'      => $discipline->nome

    ])

@stop