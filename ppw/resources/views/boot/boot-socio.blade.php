@extends('master_boot.blade.php')

@section('lib_script')
    <script src="{{ asset('js/jquery.steps.js')  }}"></script>
@stop

@section('lib_end_script')
    <script src="{{ asset('js/form_jquery_steps.js')  }}"></script>
@stop

@section('title','Registrazione fondatore')


@section('body')
        @include('layout.master_boot_header')

        <div class="container text-center position-panel">
            <h2>Registrazione socio fondatore</h2>
            <div class="panel panel-default">
                <div class="col-xs-12 col-sm-12 progress-container">
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-success" style="width:0%"></div>
                    </div>
                </div>
            </div>
        </div>
       @stop