@extends('layout.master_home_modal')

@push('lib_end_script')
    <script src="{{ asset('js/jquery.steps.js')  }}"></script>
    <script src="{{ asset('js/formStepped.js')  }}"></script>
@endpush





@section('modal-body')
    <form action="@yield('route')" method="@yield('method')" class="form-group">

        @csrf


        @yield('form')




        {{--<input type="submit" class="btn btn-lg btn-outline-primary float-right" value="@yield('modal-done-text','Invia')">--}}
    </form>




    <script>
        $(document).ready(function(){
            $("#Modal").modal('show');
        })
    </script>

@stop


@section('modal-cancel', route('M220'))