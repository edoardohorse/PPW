<aside id="menu" class="col-3 float-left container">

    {{-- Homepage--}}
    @include('layout.navbar.list-group',
    ['items'=>[
        [
            'name'  => 'Amministrazione',
            'menu'  => 'Managment',
        ],
        [
            'name'   => 'Segreteria',
            'menu'  =>  'Secretariat',
        ],
        [
            'name'   => 'Gestione attività',
            'menu'  =>  'MngActivity',
        ],
        [
            'name'   => 'Report e statistiche',
            'link'  =>  'ReportStast',
        ],
            ]
    ])

    {{-- Managment --}}
    @include('layout.navbar.list-group', [
        'id'    => 'Managment',
        'items'=>[
                [
                    'name'  => 'Personale',
                    'menu'  => 'Staff',
                    ],
                [
                    'name'   =>'Pagamenti',
                    'menu'  =>  'Payments',
                    ],
            ]
    ])


    {{-- Managment / Staff --}}
    @include('layout.navbar.list-group', [
            'id'    => 'ManagmentStaff',
            'items'=>[
                    [
                        'name'  => 'Collaboratori interni',
                        'link'  => '#'
                        ],
                    [
                        'name'   =>'Collaboratori esterni',
                        'link'  =>  '#',
                        ],
                    [
                        'name'   =>'Stagisti',
                        'link'  =>  '#',
                        ],
                    [
                        'name'   =>'Insegnanti',
                        'link'  =>  '#',
                        ],
                ]
            ])


    {{-- Managment / Payments --}}
    @include('layout.navbar.list-group', [
            'id'    => 'ManagmentPayments',
            'items'=>[
                    [
                        'name'  => 'Effettuati',
                        'link'  => '#'
                        ],
                    [
                        'name'   =>'Ricevuti',
                        'link'  =>  '#',
                        ]
                ]
            ])



    {{-- Secretariat --}}
    @include('layout.navbar.list-group', [
        'id'    => 'Secretariat',
        'items'=>[
                [
                    'name'  => 'Iscritti',
                    'menu'  => 'Subscribers',
                    ],
                [
                    'name'   =>'Fornitori',
                    'link'  =>  '/Vendors',
                    ],
            ]
    ])


    {{-- Secretariat / Subscribers --}}
    @include('layout.navbar.list-group', [
            'id'    => 'SecretariatSubscribers',
            'items'=>[
                    [
                        'name'  => 'Fondatori',
                        'link'  => '#'
                        ],
                    [
                        'name'   =>'Allievi',
                        'link'  =>  '#',
                        ],
                    [
                        'name'   =>'Tessere',
                        'link'  =>  '#',
                        ],
                ]
            ])



    {{-- MngActivity --}}
    @include('layout.navbar.list-group', [
            'id'    => 'MngActivity',
            'items'=>[
            [
                'name'  => 'Discipline interni',
                'link'  => '#'
                ],
            [
                'name'   =>'Corsi',
                'link'  =>  '#',
                ],
            [
                'name'   =>'Pacchetti',
                'link'  =>  '#',
                ],
            [
                'name'   =>'Sale',
                'link'  =>  '#',
                ],
            [
                'name'   =>'Programmazione',
                'link'  =>  '#',
            ],
        ]
    ])




</aside>
<script>


    $("#collapseManagment").detach().appendTo($("a[href='#collapseManagment']").parent())
    $("#collapseManagmentStaff").detach().appendTo($("a[href='#collapseManagmentStaff']").parent())
    $("#collapseManagmentPayments").detach().appendTo($("a[href='#collapseManagmentPayments']").parent())


    $("#collapseSecretariat").detach().appendTo($("a[href='#collapseSecretariat']").parent())
    $("#collapseSecretariatSubscribers").detach().appendTo($("a[href='#collapseSecretariatSubscribers']").parent())
    $("#collapseSecretariatVendors").detach().appendTo($("a[href='#collapseSecretariatVendors']").parent())

    $("#collapseMngActivity").detach().appendTo($("a[href='#collapseMngActivity']").parent())


    $("#collapseReportStats").detach().appendTo($("a[href='#collapseReportStats']").parent())

</script>










