@extends('layout.master_home')

@section('title','Discipline')



@section('main')
    <h1>Discipline</h1>

   @include('home-tables.discipline-table')


    <a class="btn btn-lg btn-primary" id="redirect_create"
            href="{{route('discipline.create')}}">Nuova disciplina</a>

    <a class="btn btn-lg btn-secondary disabled" id="redirect_edit"
            href="#">Modifica</a>

    <a class="btn btn-lg disabled btn-danger" id="redirect_delete"
       href="#">Elimina</a>
@stop


