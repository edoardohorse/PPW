@extends('layout.master_home')

@section('title','Discipline')



@section('main')
    <h1>Discipline</h1>

    @include('home-tables.discipline-table')

    @yield('modal')

    <a class="btn btn-lg btn-primary" id="redirect_create"
            href="{{route('M311')}}">Nuova disciplina</a>

    <a class="btn btn-lg btn-primary" id="redirect_show"
       href="#">Visualizza disciplina</a>

    <a class="btn btn-lg btn-secondary disabled" id="redirect_edit"
            href="#">Modifica</a>

    <form class="d-inline" action="" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-lg disabled btn-danger" id="redirect_delete" href="#" value="Elimina"></input>

    </form>

    @yield('other-btn')


@stop


@push('lib_end_script')
<script src="{{asset('js/disc.js')}}"></script>
@endpush