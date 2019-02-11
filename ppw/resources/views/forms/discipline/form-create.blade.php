@extends('forms.discipline.form-discipline');


@section('modal-title_modify')
    Modifica nome di '{{$discipline->nome}}'
@stop

@section('route', route('discipline.update', $discipline->id))
@section('method', 'POST')


@section('form')

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Nome disciplina',
                'input_name' => 'nome',

    ])

@stop