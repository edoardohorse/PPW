        @include('forms.input-form', [
                                                  'type'      =>      'date',
                                                  'label'     =>      'Data stipula assicurazione',
                                                  'input_name' =>     'data_stipula_ass'
                                                  ])

        @include('forms.input-form', [
                                     'type'      =>      'date',
                                    'label'     =>      'Data scadenza assicurazione',
                                    'input_name' =>     'scadenza_ass'
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'number',
                                    'label'     =>      'Numero assicurazione',
                                    'input_name' =>     'numero_ass'
                                    ])


        @include('forms.input-form', [
                                    'type'      =>      'date',
                                    'label'     =>      'Data certificato medico',
                                    'input_name' =>     'data_cert_medico'
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'date',
                                    'label'     =>      'Data scadenza certificato medico',
                                    'input_name' =>     'scadenza_cert_med'
                                    ])
