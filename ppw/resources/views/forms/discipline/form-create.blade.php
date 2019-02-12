@extends('forms.discipline.form-discipline')


@section('modal-title')
    Crea disciplina
@stop

@section('route', route('M312'))
@section('method', 'POST')


@section('form')

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Nome disciplina',
                'input_name' => 'nome',

    ])

@stop