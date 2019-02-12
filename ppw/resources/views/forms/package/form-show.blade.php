@extends('forms.package.form-package')


@section('modal-title')
    {{$package->nome}}
@stop

@section('route', route('M330'))
@section('method', 'GET')


@section('form')

{{--    {{dd($courses)}}--}}
    @include('forms.input-form',[
            'type'  => 'text',
            'label' => 'Nome pacchetto',
            'input_name' => 'nome_pacchetto',
            'readonly'  => 'true',
            'value'     =>  $package->nome_pacchetto,

    ])

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Nome pacchetto',
                'input_name' => 'prezzo',
                'placeholder'   => '21.0',
                'readonly'  => 'true',
                'value'     =>  $package->prezzo,

    ])

    @include('forms.input-checkbox',[
                'input_name'    => 'courses[]',
                'label'         => 'Corsi',
                'key'           =>  'id',
                'value'           =>  'nome_corso',
                'readonly'      => 'true',
                'checkboxes'    => $courses,
                'checked'     =>  $courses_id,
    ])

@stop

@section('modal-done-text', 'Chiudi')