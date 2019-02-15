@extends('layout.master_home')

@section('title','Allievi')

@section('main')
    <h1>Allievi</h1>


    @include('home-tables.staff-table')

    @yield('modal')

    <a class="btn btn-lg btn-primary" id="redirect_create"
       href="{{route('M221')}}">Nuovo allievo</a>

    <a class="btn btn-lg btn-primary" id="redirect_show"
       href="#">Visualizza</a>

    <a class="btn btn-lg btn-primary disabled" id="redirect_course"
       href="#">Iscrivi a corso</a>

    <a class="btn btn-lg btn-secondary disabled" id="redirect_edit"
       href="#">Modifica</a>


    <form class="d-inline" action="" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-lg disabled btn-danger" id="redirect_delete" href="#" value="Elimina"></input>

    </form>


@stop

@push('lib_end_script')
    <script src="{{asset('js/teacher.js')}}"></script>
@endpush