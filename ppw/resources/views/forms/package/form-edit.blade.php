@extends('forms.package.form-package')


@section('modal-title')
    Modifica '{{$package->nome_pacchetto}}'
@stop

@section('route', route('M334', $package->id))
@section('method', 'POST')


@section('form')

    @method('PUT')
    {{--{{dd($courses)}}--}}
    @include('forms.input-form',[
            'type'  => 'text',
            'label' => 'Nome pacchetto',
            'input_name' => 'nome_pacchetto',
            'value'     =>  $package->nome_pacchetto,

    ])

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Nome pacchetto',
                'input_name' => 'prezzo',
                'placeholder'   => '21.0',
                'value'     =>  $package->prezzo,

    ])

    @include('forms.input-checkbox',[
                'input_name'    => 'courses[]',
                'label'         => 'Corsi',
                'key'           =>  'id',
                'value'           =>  'nome_corso',
                'checkboxes'    => $courses,
                'checked'     =>  $courses_id,
    ])


@stop

@section('modal-done-text', 'Finito')