@extends('forms.made.form-made')



@section('route', route('M710'))
@section('method', 'GET')


@section('form')

    @include('forms.option-form',[
        'label' => 'Tipo',
        'input_name' => 'tipo_fattura',
        'option_default' => $transaction->tipo_transazione,
        'options'   => ['entrata','uscita'],
        'readonly'  => 'true',

    ])

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Descrizione',
                'input_name' => 'descrizione',
                'readonly'  => 'true',
                'value'     =>      $transaction->descrizione

    ])

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Importo',
                'input_name' => 'importo',
                'readonly'  => 'true',
                'value'     =>      $transaction->importo
    ])

    @include('forms.option-form',[
            'label' => 'Metodi di pagamento',
            'input_name' => 'ora_inizio',
            'option_default' => $transaction->modalita_pagamento,
            'options'   => ['Carta di credito','Contanti'],
            'readonly'  => 'true',

    ])

    <a class="btn btn-lg btn-primary " href="{{asset($transaction->file_fattura)}}" id="redirect_edit">Visualizza pdf</a>


@stop

@section('modal-done-text', 'Chiudi')