@extends('layout.master_boot')



@push('lib_end_script')
    <script src="{{ asset('js/jquery.steps.js')  }}"></script>
    <script src="{{ asset('formStepped.jsd.js')  }}"></script>
@endpush

@section('title', 'Registrazione Socio Fondatore')

@section('h2')
    Registrazione Socio Fondatore
@stop

@section('panel-body')
    <form method="POST" class="form-group" id="form" action="/signInFounder" enctype="multipart/form-data">
        @csrf

        <h3>Step</h3>
        <section>
            @include('forms/step1-member')
        </section>


        <h3>Step</h3>
        <section>
            @include('forms/step2-member')
            @include('forms/form-card')
        </section>

        <h3>Step</h3>
        <section>
            @include('forms/step3-member')
        </section>


        <h3>Step</h3>
        <section>
            @include('forms/password-form')
        </section>


        {{--<input type="submit" class="btn bnt-lg btn-primary">--}}

    </form>
@stop
