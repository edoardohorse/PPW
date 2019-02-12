@extends('forms.course.form-course')


@section('modal-title')
    {{$course->nome_corso}}
@stop

@section('route', route('M320', $course->id))
@section('method', 'POST')


@section('form')



    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Nome corso',
                'input_name' => 'nome_corso',
                'readonly'          => 'true',
                'value'     =>  $course->nome_corso

    ])

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Costo orario',
                'input_name' => 'costo_orario',
                'readonly'          => 'true',
                'placeholder'   => '7.50',
                'value'     => $course->costo_orario

    ])




    @include('forms.option-form',[
            'input_name'        => 'discipline_id',
            'options'           => $disciplines,
            'option_default'   => $discipline,
            'label'             => 'Disciplina',
            'readonly'          => 'true',
            'key'               => 'id',
            'value'             =>  'nome'
        ])

@stop

@section('modal-done-text', 'Chiudi')