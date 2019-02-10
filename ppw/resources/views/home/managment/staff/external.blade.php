@extends('layout.master_home')

@section('title','Collaboratore esterno')

@section('main')
    <h1>Collaboratore esterno</h1>

    @include('home-tables.staff-table')
@stop

@section('modal-title_create')
    Registrazione collaboratore esterno
@stop
@section('modal-body_create')

@include('layout.form_layout')
@stop

@section('modal-title_modify')
    Modifica collaboratore esterno
@stop

@section('modal-title_delete')
    Elimina collaboratore esterno
@stop


@if(!empty($redirected))
    <div class="alert alert-warning" role="alert">
        Effettura la registrazione dell'asd prima di ogni altra operazione
    </div>

@endif
