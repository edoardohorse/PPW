@extends('forms.teacher.form-teacher')




{{--@section('route', route('M138'))--}}
@section('method', 'POST')


@section('form')

    {{--{{dd($orafine)}}--}}



        @include('forms.input-checkbox',[
                    'input_name'    => 'courses[]',
                    'label'         => 'Corsi',
                    'key'           =>  'id',
                    'value'           =>  'nome_corso',
                    'checkboxes'    => $courses,
                    'checked'     =>  $courses_id,
        ])





@stop

@section('modal-done-text', 'Chiudi')



