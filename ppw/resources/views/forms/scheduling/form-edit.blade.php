@extends('forms.scheduling.form-scheduling')




@section('route', route('M354', $schedule->id))
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

    @method('PUT')
    {{--{{dd($courses)}}--}}
    @include('forms.option-form',[
                    'label' => 'Giorno settimanale',
                    'input_name' => 'giorno',
                    'option_default' => $schedule->giorno,
                    
                    'options'   => ['Lunedì','Martedì','Mercoledì','Giovedì','Venerdì','Sabato','Domenica']
    
        ])

    @include('forms.option-form',[
                'label' => 'Inizio lezione',
                'input_name' => 'ora_inizio',
                'option_default' => $orainizio,
                'options'   => $time,
                
    
    ])

    @include('forms.option-form',[
                'label' => 'Fine lezione',
                'input_name' => 'ora_fine',
                'option_default' => $orafine,
                'options'   => $time,
                
    
    ])

    @include('forms.option-form',[
                'label' => 'Sala',
                'input_name' => 'room',
                'option_default' => $roomDefault,
                'options'   => $rooms,
                'key'       =>'id',
                'value'     =>'nome',
                
    
    ])

    @include('forms.option-form',[
                'label' => 'Corsi',
                'input_name' => 'course',
                'option_default' => $courseDefault,
                'options'   => $courses,
                'key'       =>'id',
                'value'     =>'nome_corso',
                
    
    ])



@stop

@section('modal-done-text', 'Finito')