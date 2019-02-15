        @include('forms.input-form', [
        'type'      =>      'text',
        'label'     =>      'Modalità di pagamento',
        'input_name' =>     'modalita_pagamento'
        ])

        @include('forms.input-form', [
        'type'      =>      'text',
        'label'     =>      'Descrizione',
        'input_name' =>     'descrizione'
        ])

        @include('forms.input-form', [
        'type'      =>      'date',
        'label'     =>      'Data',
        'input_name' =>     'data'
        ])

        @include('forms.input-form', [
        'type'      =>      'number',
        'label'     =>      'Importo',
        'input_name' =>     'importo'
        ])
