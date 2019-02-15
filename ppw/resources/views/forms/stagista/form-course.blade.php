@extends('forms.teacher.form-teacher')




@section('route', route('M148', $member->id))
@section('method', 'POST')


@section('form')

{{--    {{dd($courses_id)}}--}}



        @include('forms.input-checkbox',[
                    'input_name'    => 'courses[]',
                    'label'         => 'Corsi',
                    'key'           =>  'id',
                    'value'           =>  'nome_corso',
                    'checkboxes'    => $courses,
                    'checked'     =>  $courses_assigned_id,
        ])



    <input type="submit" class="btn btn-lg btn-outline-primary float-right" value="@yield('modal-done-text','Invia')">


@stop

@section('modal-done-text', 'Chiudi')



