
@extends('layout.master_home')

@section('title','Homepage')

@section('main')
    <h1>Pagamenti effettuati</h1>

   @include('home-tables.payments-table')

    @yield('modal')

    <a class="btn btn-lg btn-primary" id="redirect_create"
       href="{{route('M711')}}">Nuova transazione</a>

    <a class="btn btn-lg btn-primary" id="redirect_show"
       href="#">Visualizza </a>



@stop

@push('lib_end_script')
    <script src="{{asset('js/course.js')}}"></script>
@endpush