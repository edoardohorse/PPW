@extends('forms.course.form-course')


@section('modal-title')
    Crea corso
@stop

@section('route', route('M322'))
@section('method', 'POST')


@section('form')

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Nome corso',
                'input_name' => 'nome_corso',

    ])

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Costo orario',
                'input_name' => 'costo_orario',
                'placeholder'   => '7.50'

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