@extends('forms.discipline.form-discipline')


@section('modal-title')
    Modifica nome di '{{$discipline->nome}}'
@stop

@section('route', route('M310'))
@section('method', 'POST')


@section('form')

    @method('PUT')
    @include('forms.input-form',[
            'type'  => 'text',
            'label' => 'Nome disciplina',
            'input_name' => 'nome',
            'readonly'  => 'true',
            'value'      => $discipline->nome

    ])

@stop