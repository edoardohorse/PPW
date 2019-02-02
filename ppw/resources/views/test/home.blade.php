@extends('before_login.main')

@section('title', 'Test form')

@section('lib_css')
    <link rel="stylesheet" href=" {{ asset('css/form.css')  }} ">
@endsection

@section('lib_end_script')
    <script src="{{ asset('js/jquery.steps.js')  }}"></script>
    <script src="{{ asset('js/jquery.validate.js')  }}"></script>
    <script src="{{ asset('js/test_form.js')  }}"></script>
@endsection

@section('body')

        <main id="form">

            <h3>Primo step</h3>
            <section data-mode="async" data-url="/form/1"></section>

            {{--<h3>Misc step</h3>--}}
        </main>

@endsection