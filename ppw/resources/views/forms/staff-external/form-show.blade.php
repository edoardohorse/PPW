@extends('forms.staff-external.form-staff-external')




@section('route', route('M120'))
@section('method', 'GET')


@section('form')

    {{--{{dd($orafine)}}--}}


    <h3>Step</h3>
    <section>

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Nome',
                                    'input_name' =>     'nome',
                                    'value'     =>      $user->nome,
                                    'readonly'  =>        'tru->nome',
                                    ])

        @include('forms.input-form', [
                                     'type'      =>      'text',
                                    'label'     =>      'Cognome',
                                    'input_name' =>     'cognome',
                                    'value'     =>      $user->cognome,
                                    'readonly'  =>        'true',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Città',
                                    'input_name' =>     'citta',
                                    'value'     =>      $user->citta,
                                    'readonly'  =>        'true',
                                    ])


        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Provincia',
                                    'input_name' =>     'provincia',
                                    'value'     =>      $user->provincia,
                                    'readonly'  =>        'true',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Indirizzo',
                                    'input_name' =>     'indirizzo',
                                    'value'     =>      $user->indirizzo,
                                    'readonly'  =>        'true',
                                    ])

        @include('forms.input-form', [
                                   'type'      =>      'text',
                                   'label'     =>      'Cap',
                                   'input_name' =>     'cap',
                                   'value'      =>     $user->cap ,
                                   'readonly'   =>        'true',
                                    ])



    </section>


    <h3>Step</h3>
    <section>
        @include('forms.input-form', [
                                   'type'      =>      'date',
                                   'label'     =>      'Data di nascita',
                                   'input_name' =>     'data_nascita',
                                   'value'      =>     $user->data_nascita ,
                                   'readonly'   =>        'true',
                                    ])

        @include('forms.option-form', [
                                   'type'      =>      'option',
                                   'label'     =>      'Genere',
                                   'input_name' =>     'genere',
                                   'value'      =>     $user->genere ,
                                   'readonly'   =>        'true',
                                    'options'        =>   ['Maschio','Femmina','Altro'],
                                    'option_default'        =>   'Maschio',
                                   ])

        @include('forms.input-form', [
                                          'type'      =>      'text',
                                          'label'     =>      'Codice fiscale',
                                          'input_name' =>     'cod_fiscale',
                                          'value'       =>    $member->cod_fiscale  ,
                                          'readonly'    =>        'true',
                                          ])

        @include('forms.input-form', [
                                     'type'      =>      'tel',
                                    'label'     =>      'Numero cellulare',
                                    'input_name' =>     'numero_cell',
                                    'value'     =>      $member->numero_cell,
                                    'readonly'  =>        'true',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'tel',
                                    'label'     =>      'Numero telefono',
                                    'input_name' =>     'numero_tel',
                                    'value'     =>      $member->numero_tel,
                                    'readonly'  =>        'true',
                                    ])

        @include('forms.input-form', [
                    'type'      =>      'text',
                    'label'     =>      'note',
                    'input_name' =>     'note',
                    'value'     =>      $member->note,
                    'readonly'  =>        'true',
                    ])



    </section>

    <h3>Step</h3>
    <section>
        @include('forms.input-form', [
                           'type'      =>      'date',
                           'label'     =>      'Data stipula assicurazione',
                           'input_name' =>     'data_stipula_ass',
                           'value'      =>     $member->data_stipula_ass ,
                           'readonly'   =>        'true',
                                           ])

        @include('forms.input-form', [
                                     'type'      =>      'date',
                                    'label'     =>      'Data scadenza assicurazione',
                                    'input_name' =>     'scadenza_ass',
                                    'value'     =>      $member->scadenza_ass,
                                    'readonly'  =>        'true',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Numero assicurazione',
                                    'input_name' =>     'numero_ass',
                                    'value'     =>      $member->numero_ass,
                                    'readonly'  =>        'true',
                                    ])


        @include('forms.input-form', [
                                    'type'      =>      'date',
                                    'label'     =>      'Data certificato medico',
                                    'input_name' =>     'data_cert_medico',
                                    'value'     =>      $member->data_cert_medico,
                                    'readonly'  =>        'true',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'date',
                                    'label'     =>      'Data scadenza certificato medico',
                                    'input_name' =>     'scadenza_cert_med',
                                    'value'     =>      $member->scadenza_cert_med,
                                    'readonly'  =>        'true',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Partita Iva',
                                    'input_name' =>     'p_iva',
                                    'value'     =>      $member->p_iva,
                                    'readonly'  =>        'true',
                                    ])



    </section>




        {{--<input type="submit" class="btn bnt-lg btn-primary">--}}



@stop

@section('modal-done-text', 'Chiudi')



