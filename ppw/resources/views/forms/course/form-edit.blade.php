@extends('forms.discipline.form-discipline');


@section('modal-title')
    Modifica nome di '{{$discipline->nome}}'
@stop

@section('route', route('M324', $course->id))
@section('method', 'POST')


@section('form')

    @method('PUT')
    @include('forms.input-form',[
            'type'  => 'text',
            'label' => 'Nome disciplina',
            'input_name' => 'nome',
            'value'      => $course->nome

    ])

    @include('forms.input-form',[
            'type'  => 'text',
            'label' => 'Costo orario',
            'input_name' => 'costo_orario',

])




    @include('forms.option-form',[
            'input_name'        => 'discipline_id',
            'options'           => $disciplines,
            'option_default'   => '',
            'label'             => 'Disciplina',
            'key'               => 'id',
            'value'             =>  'nome'
        ])

@stop