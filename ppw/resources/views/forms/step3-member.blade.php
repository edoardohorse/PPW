        @include('forms.input-form', [
                                                  'type'      =>      'date',
                                                  'label'     =>      'Data stipula assicurazione',
                                                  'input_name' =>     'data_stipula_ass',
                                    'value'        =>   '1997-05-11',
                                                  ])

        @include('forms.input-form', [
                                     'type'      =>      'date',
                                    'label'     =>      'Data scadenza assicurazione',
                                    'input_name' =>     'scadenza_ass',
                                    'value'        =>   '1997-05-11',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'number',
                                    'label'     =>      'Numero assicurazione',
                                    'input_name' =>     'numero_ass',
                                    'value'        =>   '2',
                                    ])


        @include('forms.input-form', [
                                    'type'      =>      'date',
                                    'label'     =>      'Data certificato medico',
                                    'input_name' =>     'data_cert_medico',
                                    'value'        =>   '1997-05-11',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'date',
                                    'label'     =>      'Data scadenza certificato medico',
                                    'input_name' =>     'scadenza_cert_med',
                                    'value'        =>   '1997-05-11',
                                    ])
