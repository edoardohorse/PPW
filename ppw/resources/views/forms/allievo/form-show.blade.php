@extends('forms.allievo.form-allievo')




@section('route', route('M220'))
@section('method', 'GET')


@section('form')

    {{--{{dd($orafine)}}--}}


    <h3>Step</h3>
    <section>

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Nome',
                                    'input_name' =>     'nome',
                                    'readonly'  =>  'true',
                                    'value'     =>      $user->nome,
                                    ])

        @include('forms.input-form', [
                                     'type'      =>      'text',
                                    'label'     =>      'Cognome',
                                    'input_name' =>     'cognome',
                                    'readonly'  =>  'true',
                                    'value'     =>      $user->cognome,
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Città',
                                    'input_name' =>     'citta',
                                    'readonly'  =>  'true',
                                    'value'     =>      $user->citta,
                                    ])


        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Provincia',
                                    'input_name' =>     'provincia',
                                    'readonly'  =>  'true',
                                    'value'     =>      $user->provincia,
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Indirizzo',
                                    'input_name' =>     'indirizzo',
                                    'readonly'  =>  'true',
                                    'value'     =>      $user->indirizzo,
                                    ])

        @include('forms.input-form', [
                                   'type'      =>      'text',
                                   'label'     =>      'Cap',
                                   'input_name' =>     'cap',
                                   'readonly'   =>  'true',
                                   'value'      =>     $user->cap ,
                                    ])



    </section>


    <h3>Step</h3>
    <section>
        @include('forms.input-form', [
                                   'type'      =>      'date',
                                   'label'     =>      'Data di nascita',
                                   'input_name' =>     'data_nascita',
                                   'readonly'   =>  'true',
                                   'value'      =>     $user->data_nascita ,
                                    ])

        @include('forms.option-form', [
                                   'type'      =>      'option',
                                   'label'     =>      'Genere',
                                   'input_name' =>     'genere',
                                   'readonly'   =>  'true',
                                   'value'      =>     $user->genere ,
                                    'options'        =>   ['Maschio','Femmina','Altro'],
                                    'option_default'        =>   'Maschio',
                                   ])

        @include('forms.input-form', [
                                          'type'      =>      'text',
                                          'label'     =>      'Codice fiscale',
                                          'input_name' =>     'cod_fiscale',
                                          'readonly'    =>  'true',
                                          'value'       =>    $member->cod_fiscale  ,
                                          ])

        @include('forms.input-form', [
                                     'type'      =>      'tel',
                                    'label'     =>      'Numero cellulare',
                                    'input_name' =>     'numero_cell',
                                    'readonly'  =>  'true',
                                    'value'     =>      $member->numero_cell,
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'tel',
                                    'label'     =>      'Numero telefono',
                                    'input_name' =>     'numero_tel',
                                    'readonly'  =>  'true',
                                    'value'     =>      $member->numero_tel,
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'note',
                                    'input_name' =>     'note',
                                    'readonly'  =>  'true',
                                    'value'     =>      $member->note,
                                    ])

        @include('forms.input-form', [
                                  'type'      =>      'date',
                                  'label'     =>      'Data Tesseramento',
                                  'input_name' =>     'data_tesseramento',
                                  'readonly'    =>  'true',
                                    'value'     => $card->data_tesseramento
                              ])

    </section>

    <h3>Step</h3>
    <section>

        @include('forms.input-form', [
                     'type'      =>      'date',
                    'label'     =>      'Data scadenza tesseramento',
                    'input_name' =>     'scadenza_tesseramento',
                    'readonly'  =>  'true',
                    'value'     => $card->scadenza_tesseramento

                    ])

        @include('forms.input-form', [
                           'type'      =>      'date',
                           'label'     =>      'Data stipula assicurazione',
                           'input_name' =>     'data_stipula_ass',
                           'readonly'   =>  'true',
                           'value'      =>     $member->data_stipula_ass ,
                                           ])

        @include('forms.input-form', [
                                     'type'      =>      'date',
                                    'label'     =>      'Data scadenza assicurazione',
                                    'input_name' =>     'scadenza_ass',
                                    'readonly'  =>  'true',
                                    'value'     =>      $member->scadenza_ass,
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Numero assicurazione',
                                    'input_name' =>     'numero_ass',
                                    'readonly'  =>  'true',
                                    'value'     =>      $member->numero_ass,
                                    ])





    </section>


    <h3>Step</h3>
    <section>
        @include('forms.input-form', [
                                   'type'      =>      'date',
                                   'label'     =>      'Data certificato medico',
                                   'input_name' =>     'data_cert_medico',
                                   'readonly'   =>  'true',
                                   'value'     =>      $member->data_cert_medico,
                                   ])

        @include('forms.input-form', [
                                    'type'      =>      'date',
                                    'label'     =>      'Data scadenza certificato medico',
                                    'input_name' =>     'scadenza_cert_med',
                                    'readonly'  =>  'true',
                                    'value'     =>      $member->scadenza_cert_med,
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Partita Iva',
                                    'input_name' =>     'p_iva',
                                    'readonly'  =>  'true',
                                    'value'     =>      $member->p_iva,
                                    ])






    </section>

        {{--<input type="submit" class="btn bnt-lg btn-primary">--}}



@stop

@section('modal-done-text', 'Chiudi')



