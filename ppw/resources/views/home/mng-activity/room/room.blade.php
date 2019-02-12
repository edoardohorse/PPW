@extends('layout.master_home')

@section('title','Sale')



@section('main')
    <h1>Sale</h1>



    @include('home-tables.room-table')

    @yield('modal')

    <a class="btn btn-lg btn-primary" id="redirect_create"
            href="{{route('M341')}}">Nuova sala</a>


    <a class="btn btn-lg btn-primary" id="redirect_show"
       href="#">Visualizza sala</a>

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
    <script src="{{asset('js/room.js')}}"></script>
@endpush