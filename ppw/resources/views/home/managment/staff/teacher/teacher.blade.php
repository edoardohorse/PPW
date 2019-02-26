@extends('layout.master_home')

@section('title','Insegnante')

@section('main')
    <h1>Insegnante</h1>

    @include('home-tables.staff-table')

    @yield('modal')

    <a class="btn btn-lg btn-primary" id="redirect_create"
       href="{{route('M131')}}">Nuovo insegnante</a>

    <a class="btn btn-lg btn-primary" id="redirect_show"
       href="#">Visualizza</a>

    <a class="btn btn-lg btn-secondary disabled" id="redirect_edit"
       href="#">Modifica</a>

    <a class="btn btn-lg btn-secondary disabled" id="redirect_course"
       href="#">Assegna corso</a>

    <form class="d-inline" action="" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-lg disabled btn-danger" id="redirect_delete" href="#" value="Elimina"></input>

    </form>

    @yield('other-btn')


@stop

@push('lib_end_script')
    <script src="{{asset('js/teacher.js')}}"></script>
@endpush