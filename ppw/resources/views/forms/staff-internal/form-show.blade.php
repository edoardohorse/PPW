@extends('forms.staff-internal.form-staff-internal')




@section('route', route('M350'))
@section('method', 'GET')


@section('form')

    {{--{{dd($orafine)}}--}}
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
        @include('forms/password-form')
        <section>
        </section>


        {{--<input type="submit" class="btn bnt-lg btn-primary">--}}




    <a class="btn btn-lg btn-primary " href="{{route('M353', $schedule->id)}}" id="redirect_edit">Modifica</a>


    <input type="submit" class="btn btn-lg btn-danger" form="deleteForm" id="redirect_delete"  value="Elimina"></input>


@stop

@section('modal-done-text', 'Chiudi')



