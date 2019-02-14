
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
                            'type'      =>      'text',
                            'label'     =>      'note',
                            'input_name' =>     'note',
                            ])
