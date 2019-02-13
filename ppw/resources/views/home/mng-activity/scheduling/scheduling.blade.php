@extends('layout.master_home')

@section('title','Programmazione')



@section('main')
    <h1>Programmzione</h1>



    @include('layout.calendar_scheduling')


    @yield('modal')

    <a class="btn btn-lg btn-primary" id="redirect_create"
            href="{{route('M351')}}">Nuova lezione</a>



    <form class="d-inline" action="" method="POST">
        @csrf
        @method('DELETE')
        <input type="submit" class="btn btn-lg disabled btn-danger" id="redirect_delete" href="#" value="Elimina"></input>

    </form>

    @yield('other-btn')


@stop


@push('lib_end_script')
    <script src="{{asset('js/scheduling.js')}}"></script>
@endpush