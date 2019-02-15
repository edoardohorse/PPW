@extends('layout.master_boot')



@push('lib_end_script')
    <script src="{{ asset('js/jquery.steps.js')  }}"></script>
    <script src="{{ asset('formStepped.jsd.js')  }}"></script>
@endpush

@section('title', 'Registrazione ASD')

@section('h2')
    Registrazione ASD
@stop

@section('panel-body')
    <form method="POST" class="form-group" id="form" action="/signInASD" enctype="multipart/form-data">
        @csrf

            <h3>Step</h3>
            <section>
                @include('forms/step1-boot')
            </section>


            <h3>Step</h3>
            <section>
                @include('forms/step2-boot')
            </section>

        {{--<input type="submit" class="btn bnt-lg btn-primary">--}}

    </form>
@stop
