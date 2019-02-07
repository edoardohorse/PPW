
        @include('forms.input-form', [
                                          'type'      =>      'text',
                                          'label'     =>      'Codice fiscale',
                                          'input_name' =>     'cod_fiscale',
                                            'value'        =>   'CVLDRD97E11205A',
                                          ])

        @include('forms.input-form', [
                                     'type'      =>      'tel',
                                    'label'     =>      'Numero cellulare',
                                    'input_name' =>     'numero_cell',
                                    'value'        =>   '3926043814',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'tel',
                                    'label'     =>      'Numero telefono',
                                    'input_name' =>     'numero_tel',
                                    'value'        =>   '0995610254',
                                    ])


        @include('forms.input-form', [
                                    'type'      =>      'email',
                                    'label'     =>      'Email',
                                    'input_name' =>     'email',
                                    'value'        =>   'email@prova.it',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'note',
                                    'input_name' =>     'note',
                                    'value'        =>   'nota',
                                    ])

        @include('forms.input-form', [
                                   'type'      =>      'text',
                                   'label'     =>      'Ruolo',
                                   'input_name' =>     'ruolo',
                                    'value'        =>   'ruolo',
                                   ])
