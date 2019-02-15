@extends('forms.teacher.form-teacher')




@section('route', route('M134', $member->id))
@section('method', 'POST')


@section('form')



    @method('PUT')
    {{--{{dd($courses)}}--}}


    <h3>Step</h3>
    <section>

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Nome',
                                    'input_name' =>     'nome',
                                    'value'     =>      $user->nome,
                                    ])

        @include('forms.input-form', [
                                     'type'      =>      'text',
                                    'label'     =>      'Cognome',
                                    'input_name' =>     'cognome',
                                    'value'     =>      $user->cognome,
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Città',
                                    'input_name' =>     'citta',
                                    'value'     =>      $user->citta,
                                    ])


        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Provincia',
                                    'input_name' =>     'provincia',
                                    'value'     =>      $user->provincia,
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Indirizzo',
                                    'input_name' =>     'indirizzo',
                                    'value'     =>      $user->indirizzo,
                                    ])

        @include('forms.input-form', [
                                   'type'      =>      'text',
                                   'label'     =>      'Cap',
                                   'input_name' =>     'cap',
                                   'value'      =>     $user->cap ,
                                    ])



    </section>


    <h3>Step</h3>
    <section>
        @include('forms.input-form', [
                                   'type'      =>      'date',
                                   'label'     =>      'Data di nascita',
                                   'input_name' =>     'data_nascita',
                                   'value'      =>     $user->data_nascita ,
                                    ])

        @include('forms.option-form', [
                                   'type'      =>      'option',
                                   'label'     =>      'Genere',
                                   'input_name' =>     'genere',
                                   'value'      =>     $user->genere ,
                                    'options'        =>   ['Maschio','Femmina','Altro'],
                                    'option_default'        =>   'Maschio',
                                   ])

        @include('forms.input-form', [
                                          'type'      =>      'text',
                                          'label'     =>      'Codice fiscale',
                                          'input_name' =>     'cod_fiscale',
                                          'value'       =>    $member->cod_fiscale  ,
                                          ])

        @include('forms.input-form', [
                                     'type'      =>      'tel',
                                    'label'     =>      'Numero cellulare',
                                    'input_name' =>     'numero_cell',
                                    'value'     =>      $member->numero_cell,
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'tel',
                                    'label'     =>      'Numero telefono',
                                    'input_name' =>     'numero_tel',
                                    'value'     =>      $member->numero_tel,
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'note',
                                    'input_name' =>     'note',
                                    'value'     =>      $member->note,
                                    ])

        @include('forms.input-form', [
                                  'type'      =>      'date',
                                  'label'     =>      'Data Tesseramento',
                                  'input_name' =>     'data_tesseramento',
                                    'value'     => $card->data_tesseramento
                              ])

    </section>

    <h3>Step</h3>
    <section>

        @include('forms.input-form', [
                     'type'      =>      'date',
                    'label'     =>      'Data scadenza tesseramento',
                    'input_name' =>     'scadenza_tesseramento',
                    'value'     => $card->scadenza_tesseramento

                    ])

        @include('forms.input-form', [
                           'type'      =>      'date',
                           'label'     =>      'Data stipula assicurazione',
                           'input_name' =>     'data_stipula_ass',
                           'value'      =>     $member->data_stipula_ass ,
                                           ])

        @include('forms.input-form', [
                                     'type'      =>      'date',
                                    'label'     =>      'Data scadenza assicurazione',
                                    'input_name' =>     'scadenza_ass',
                                    'value'     =>      $member->scadenza_ass,
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Numero assicurazione',
                                    'input_name' =>     'numero_ass',
                                    'value'     =>      $member->numero_ass,
                                    ])





    </section>


    <h3>Step</h3>
    <section>
        @include('forms.input-form', [
                                   'type'      =>      'date',
                                   'label'     =>      'Data certificato medico',
                                   'input_name' =>     'data_cert_medico',
                                   'value'     =>      $member->data_cert_medico,
                                   ])

        @include('forms.input-form', [
                                    'type'      =>      'date',
                                    'label'     =>      'Data scadenza certificato medico',
                                    'input_name' =>     'scadenza_cert_med',
                                    'value'     =>      $member->scadenza_cert_med,
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Partita Iva',
                                    'input_name' =>     'p_iva',
                                    'value'     =>      $member->p_iva,
                                    ])






    </section>


@stop

@section('modal-done-text', 'Finito')