@extends('forms.scheduling.form-scheduling')


@section('modal-title')
    Crea una lezione
@stop

@section('route', route('M352'))
@section('method', 'POST')


@section('form')
    @if(!empty($redirected))
        <div class="alert alert-danger" role="alert">
            {{$redirected}}
        </div>
    @else
    <div class="alert alert-info" role="alert">
            I corsi non possono durare di più di 2 ore
    </div>
    @endif

    @include('forms.option-form',[
                'label' => 'Giorno settimanale',
                'input_name' => 'giorno',
                'option_default' => 'Lunedì',
                'options'   => ['Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato','Domenica']

    ])

    @include('forms.option-form',[
                'label' => 'Inizio lezione',
                'input_name' => 'ora_inizio',
                'option_default' => '08:00',
                'options'   => $time

    ])

    @include('forms.option-form',[
                'label' => 'Fine lezione',
                'input_name' => 'ora_fine',
                'option_default' => '09:00',
                'options'   => $time

    ])
    
    @include('forms.option-form',[
                'label' => 'Sala',
                'input_name' => 'room',
                'option_default' => $roomDefault,
                'options'   => $rooms,
                'key'       =>'id',
                'value'     =>'nome'

    ])

    @include('forms.option-form',[
                'label' => 'Corsi',
                'input_name' => 'courses',
                'option_default' => $courseDefault,
                'options'   => $courses,
                'key'       =>'id',
                'value'     =>'nome_corso'

    ])
    
    {{--@include('forms.option-form',[--}}
                {{--'label' => 'Fine lezione',--}}
                {{--'input_name' => 'ora_fine',--}}
                {{--'option_default' => '09:00',--}}
                {{--'options'   => $time--}}

    {{--])--}}
    
    


@stop
{{--

 [
                    ['id'=>'1','nome_corso'=>'danza'],
                    ['id'=>'2','nome_corso'=>'combattimento'],
                    ['id'=>'3','nome_corso'=>'relax'],
                ],
                'checked'    =>  ['1','3'],
--}}
