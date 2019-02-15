@extends('forms.course.form-course')


@section('modal-title')
    Modifica '{{$course->nome_corso}}'
@stop

@section('route', route('M324', $course->id))
@section('method', 'POST')


@section('form')

    @method('PUT')


    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Nome corso',
                'input_name' => 'nome_corso',
                'value'     =>  $course->nome_corso

    ])

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Costo orario',
                'input_name' => 'costo_orario',
                'placeholder'   => '7.50',
                'value'     => $course->costo_orario

    ])




    @include('forms.option-form',[
            'input_name'        => 'discipline_id',
            'options'           => $disciplines,
            'option_default'   => $discipline,
            'label'             => 'Disciplina',
            'key'               => 'id',
            'value'             =>  'nome'
        ])

@stop