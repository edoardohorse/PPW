@extends('forms.package.form-package')


@section('modal-title')
    Crea pacchetto
@stop

@section('route', route('M332'))
@section('method', 'POST')


@section('form')

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Nome pacchetto',
                'input_name' => 'nome_pacchetto',

    ])

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Nome pacchetto',
                'input_name' => 'prezzo',
                'placeholder'   => '21.0'

    ])

    @include('forms.input-checkbox',[
                'input_name'    => 'courses[]',
                'label'         => 'Corsi',
                'key'           =>  'id',
                'value'           =>  'nome_corso',
                'checkboxes'    => $courses,
    ])

@stop
{{--

 [
                    ['id'=>'1','nome_corso'=>'danza'],
                    ['id'=>'2','nome_corso'=>'combattimento'],
                    ['id'=>'3','nome_corso'=>'relax'],
                ],
                'checked'    =>  ['1','3'],
--}}
