@extends('layout.master_home')

@section('title','Collaboratore interno')

@section('main')
     <h1>Collaboratore interno</h1>

     @include('home-tables.staff-table')

     @yield('modal')

     <a class="btn btn-lg btn-primary" id="redirect_create"
        href="{{route('M111')}}">Nuovo collaboratore</a>

     <a class="btn btn-lg btn-primary" id="redirect_show"
        href="#">Visualizza</a>

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