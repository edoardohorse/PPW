@extends('forms.made.form-made')


@section('modal-title')
    Crea transazione
@stop

@section('route', route('M712'))
@section('method', 'POST')


@section('form')

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Descrizione',
                'input_name' => 'descrizione',

    ])

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Importo',
                'input_name' => 'importo',

    ])



    <div class="form-group">
        <label for="">Metodo di pagamento</label>
        <select class="form-control mt-2" name="modalita_pagamento" id="">
            <option value="Carta di credito">Carta di credito</option>
            <option value="Contanti">Contanti</option>
        </select>
    </div>






@stop
{{--

 [
                    ['id'=>'1','nome_corso'=>'danza'],
                    ['id'=>'2','nome_corso'=>'combattimento'],
                    ['id'=>'3','nome_corso'=>'relax'],
                ],
                'checked'    =>  ['1','3'],
--}}
