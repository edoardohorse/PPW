@extends('forms.room.form-room')


@section('modal-title')
    Crea sala
@stop

@section('route', route('M342'))
@section('method', 'POST')


@section('form')

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Nome sala',
                'input_name' => 'nome',

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
