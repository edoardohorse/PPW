@extends('layout.master_boot')



@section('lib_end_script')
    <script src="{{ asset('js/jquery.steps.js')  }}"></script>
    <script src="{{ asset('js/formAsd.js')  }}"></script>
@stop

@section('title', 'Registrazione Socio Fondatore')

@section('h2')
    Registrazione Socio Fondatore
@stop

@section('panel-body')
    <form method="POST" class="form-group" id="form" action="/signInFounder">
        @csrf

        <h3>Step</h3>
        <section>
            @include('forms/step1-member')
        </section>


        <h3>Step</h3>
        <section>
            @include('forms/step2-member')
        </section>

        <h3>Step</h3>
        <section>
            @include('forms/step3-member')
        </section>


        <h3>Step</h3>
        <section>
            @include('forms/form-card')
        </section>


        {{--<input type="submit" class="btn bnt-lg btn-primary">--}}

    </form>
@stop
