@extends('forms.room.form-room')


@section('modal-title')
    Modifica '{{$room->nome}}'
@stop

@section('route', route('M344', $room->id))
@section('method', 'POST')


@section('form')

    @method('PUT')
    {{--{{dd($courses)}}--}}
    @include('forms.input-form',[
                 'type'  => 'text',
                 'label' => 'Nome sala',
                 'input_name' => 'nome',
                  'value'     => $room->nome
     ])




@stop

@section('modal-done-text', 'Finito')