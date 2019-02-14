@extends('forms.staff-internal.form-staff-internal')

@section('modal-title')
    Aggiungi un collaboratore interno
@stop

@section('route', route('M112'))
@section('method', 'POST')

@section("form")





    <h3>Step</h3>
    <section>

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Nome',
                                    'input_name' =>     'nome',
                                    ])

        @include('forms.input-form', [
                                     'type'      =>      'text',
                                    'label'     =>      'Cognome',
                                    'input_name' =>     'cognome',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Città',
                                    'input_name' =>     'citta',
                                    ])


        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Provincia',
                                    'input_name' =>     'provincia',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Indirizzo',
                                    'input_name' =>     'indirizzo',
                                    ])

        @include('forms.input-form', [
                                   'type'      =>      'text',
                                   'label'     =>      'Cap',
                                   'input_name' =>     'cap',
                                    ])

        @include('forms.input-form', [
                                   'type'      =>      'date',
                                   'label'     =>      'Data di nascita',
                                   'input_name' =>     'data_nascita',
                                    ])

        @include('forms.option-form', [
                                   'type'      =>      'option',
                                   'label'     =>      'Genere',
                                   'input_name' =>     'genere',
                                    'options'        =>   ['Maschio','Femmina','Altro'],
                                    'option_default'        =>   'Maschio',
                                   ])


    </section>


    <h3>Step</h3>
    <section>

        @include('forms.input-form', [
                                          'type'      =>      'text',
                                          'label'     =>      'Codice fiscale',
                                          'input_name' =>     'cod_fiscale',
                                          ])

        @include('forms.input-form', [
                                     'type'      =>      'tel',
                                    'label'     =>      'Numero cellulare',
                                    'input_name' =>     'numero_cell',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'tel',
                                    'label'     =>      'Numero telefono',
                                    'input_name' =>     'numero_tel',
                                    ])


        @include('forms.input-form', [
                                          'type'      =>      'date',
                                          'label'     =>      'Data Tesseramento',
                                          'input_name' =>     'data_tesseramento',

                                      ])

        @include('forms.input-form', [
                                     'type'      =>      'date',
                                    'label'     =>      'Data scadenza tesseramento',
                                    'input_name' =>     'scadenza_tesseramento'
                                    ])

    </section>

    <h3>Step</h3>
    <section>
        @include('forms.input-form', [
                           'type'      =>      'date',
                           'label'     =>      'Data stipula assicurazione',
                           'input_name' =>     'data_stipula_ass',
                                           ])

        @include('forms.input-form', [
                                     'type'      =>      'date',
                                    'label'     =>      'Data scadenza assicurazione',
                                    'input_name' =>     'scadenza_ass',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Numero assicurazione',
                                    'input_name' =>     'numero_ass',
                                    ])


        @include('forms.input-form', [
                                    'type'      =>      'date',
                                    'label'     =>      'Data certificato medico',
                                    'input_name' =>     'data_cert_medico',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'date',
                                    'label'     =>      'Data scadenza certificato medico',
                                    'input_name' =>     'scadenza_cert_med',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Partita Iva',
                                    'input_name' =>     'p_iva',
                                    ])

        @include('forms.input-form', [
                            'type'      =>      'text',
                            'label'     =>      'note',
                            'input_name' =>     'note',
                            ])

    </section>


    <h3>Step</h3>
    <section>

        @include('forms.input-form', [
                                    'type'      =>      'email',
                                    'label'     =>      'Email',
                                    'input_name' =>     'email',
                                    ])

        @include('forms.input-form', [
                            'type'      =>      'password',
                            'label'     =>      'Password',
                            'input_name' =>     'password',
                            ])

        @include('forms.input-form', [
                                    'type'      =>      'password',
                                    'label'     =>      'Conferma password',
                                    'input_name' =>     'password_conf',
                                    ])



    </section>


@endsection