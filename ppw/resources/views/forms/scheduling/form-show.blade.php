@extends('forms.scheduling.form-scheduling')




@section('route', route('M350'))
@section('method', 'GET')

@section('deleteFormAction',route('M355',$schedule->id))
@section('form')

    {{--{{dd($orafine)}}--}}

    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Insegnante',
                'input_name' => 'teacher',
                'readonly'  => 'true',
                'value'     => $teacher,

    ])

    @include('forms.option-form',[
                    'label' => 'Giorno settimanale',
                    'input_name' => 'giorno',
                    'option_default' => $schedule->giorno,
                    'readonly'  => 'true',
                    'options'   => ['Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato','Domenica']

        ])

@include('forms.option-form',[
            'label' => 'Inizio lezione',
            'input_name' => 'ora_inizio',
            'option_default' => $orainizio,
            'options'   => $time,
            'readonly'  => 'true',

])

@include('forms.option-form',[
            'label' => 'Fine lezione',
            'input_name' => 'ora_fine',
            'option_default' => $orafine,
            'options'   => $time,
            'readonly'  => 'true',

])

@include('forms.option-form',[
            'label' => 'Sala',
            'input_name' => 'room',
            'option_default' => $roomDefault,
            'options'   => $rooms,
            'key'       =>'id',
            'value'     =>'nome',
            'readonly'  => 'true',

])

@include('forms.option-form',[
            'label' => 'Corsi',
            'input_name' => 'course',
            'option_default' => $courseDefault,
            'options'   => $courses,
            'key'       =>'id',
            'value'     =>'nome_corso',
            'readonly'  => 'true',

])

    <a class="btn btn-lg btn-primary " href="{{route('M353', $schedule->id)}}" id="redirect_edit">Modifica</a>


    <input type="submit" class="btn btn-lg btn-danger" form="deleteForm" id="redirect_delete"  value="Elimina"></input>


@stop

@section('modal-done-text', 'Chiudi')