@extends('layout.master_home')

@section('title','Corsi')



@section('main')
    <h1>Corsi</h1>


        @include('home-tables.course-table')


    @yield('modal')

    <a class="btn btn-lg btn-primary" id="redirect_create"
            href="{{route('M321')}}">Nuovo corso</a>

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
    <script src="{{asset('js/course.js')}}"></script>
@endpush