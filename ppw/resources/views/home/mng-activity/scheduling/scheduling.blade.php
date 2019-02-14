@extends('layout.master_home')

@section('title','Programmazione')



@section('main')
    <h1>Programmzione</h1>



    @include('layout.calendar_scheduling')


    @yield('modal')

    <a class="btn btn-lg btn-primary" id="redirect_create"
            href="{{route('M351')}}">Nuova lezione</a>





    @yield('other-btn')


@stop


@push('lib_end_script')
    <script src="{{asset('js/scheduling.js')}}"></script>
@endpush