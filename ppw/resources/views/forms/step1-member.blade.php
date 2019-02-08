
        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Nome',
                                    'input_name' =>     'nome',
                                    'value'        =>   'Edoardo',
                                    ])

        @include('forms.input-form', [
                                     'type'      =>      'text',
                                    'label'     =>      'Cognome',
                                    'input_name' =>     'cognome',
                                    'value'        =>   'Cavallo',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Città',
                                    'input_name' =>     'citta',
                                    'value'        =>   'Grottaglie',
                                    ])


        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Provincia',
                                    'input_name' =>     'provincia',
                                    'value'        =>   'Taranto',
                                    ])

        @include('forms.input-form', [
                                    'type'      =>      'text',
                                    'label'     =>      'Indirizzo',
                                    'input_name' =>     'indirizzo',
                                    'value'        =>   'Via Socrate, 15',
                                    ])

        @include('forms.input-form', [
                                   'type'      =>      'text',
                                   'label'     =>      'Cap',
                                   'input_name' =>     'cap',
                                    'value'        =>   '74023',
                                   ])

        @include('forms.input-form', [
                                   'type'      =>      'date',
                                   'label'     =>      'Data di nascita',
                                   'input_name' =>     'data_nascita',
                                    'value'        =>   '1997-05-11',
                                   ])

        @include('forms.option-form', [
                                   'type'      =>      'option',
                                   'label'     =>      'Genere',
                                   'input_name' =>     'genere',
                                    'options'        =>   ['Maschio','Femmina','Altro'],
                                    'option_default'        =>   'Maschio',
                                   ])

