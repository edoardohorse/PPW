<aside id="menu" class="col-2 float-left container p-0">

    {{-- Homepage--}}
    @include('layout.navbar.list-group',
    ['items'=>[
        [
            'name'  => 'Amministrazione',
            'menu'  => 'Managment',
            'level' =>  '1',
        ],
        [
            'name'   => 'Segreteria',
            'menu'  =>  'Secretariat',
            'level' =>  '1',
        ],
        [
            'name'   => 'Gestione attività',
            'menu'  =>  'Mngactivity',
            'level' =>  '1',
        ],
        [
            'name'  => 'Report e statistiche',
            'link'  =>  'M400',
            'level' =>  '1'
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
                    'level' =>  '2',
                    ],
                [
                    'name'   =>'Pagamenti',
                    'menu'  =>  'Payments',
                    'level' =>  '2',
                    ],
            ]
    ])


    {{-- Managment / Staff --}}
    @include('layout.navbar.list-group', [
            'id'    => 'ManagmentStaff',
            'items'=>[
                    [
                        'name'  => 'Collaboratori interni',
                        'link'  => 'M111',
                        'level' =>  '3',
                        ],
                    [
                        'name'   =>'Collaboratori esterni',
                        'link'  =>  'M112',
                        'level' =>  '3'
                        ],
                    [
                        'name'   =>'Stagisti',
                        'link'  =>  'M113',
                        'level' =>  '3',
                        ],
                    [
                        'name'   =>'Insegnanti',
                        'link'  =>  'M114',
                        'level' =>  '3',
                        ],
                ]
            ])


    {{-- Managment / Payments --}}
    @include('layout.navbar.list-group', [
            'id'    => 'ManagmentPayments',
            'items'=>[
                    [
                        'name'  => 'Effettuati',
                        'link'  => 'M121',
                        'level' =>  '3',
                        ],
                    [
                        'name'   =>'Ricevuti',
                        'link'  =>  'M122',
                        'level' =>  '3'
                        ]
                ]
            ])



    {{-- Secretariat --}}
    @include('layout.navbar.list-group', [
        'id'    => 'Secretariat',
        'items'=>[
                [
                    'name'  => 'Iscritti',
                    'menu'  => 'Members',
                    'level' =>  '2',
                    ],
                [
                    'name'   =>'Fornitori',
                    'link'  =>  'M220',
                    'level' =>  '2',
                    ],
            ]
    ])


    {{-- Secretariat / Members --}}
    @include('layout.navbar.list-group', [
            'id'    => 'SecretariatMembers',
            'items'=>[
                    [
                        'name'  => 'Fondatori',
                        'link'  => 'M211',
                        'level' =>  '3',
                        ],
                    [
                        'name'   =>'Allievi',
                        'link'  =>  'M213',
                        'level' =>  '3',
                        ],
                    [
                        'name'   =>'Tessere',
                        'link'  =>  'M216',
                        'level' =>  '3',
                        ],
                ]
            ])



    {{-- Mngactivity --}}
    @include('layout.navbar.list-group', [
            'id'    => 'Mngactivity',
            'items'=>[
            [
                'name'  => 'Discipline interni',
                'link'  => 'M310',
                'level' =>  '2',
                ],
            [
                'name'   =>'Corsi',
                'link'  =>  'M320',
                'level' =>  '2'
                ],
            [
                'name'   =>'Pacchetti',
                'link'  =>  'M330',
                'level' =>  '2'
                ],
            [
                'name'   =>'Sale',
                'link'  =>  'M340',
                'level' =>  '2'
                ],
            [
                'name'   =>'Programmazione',
                'link'  =>  'M350',
                'level' =>  '2'
            ],
        ]
    ])




</aside>
<script>


    $("#collapseManagment").detach().appendTo($("a[href='#collapseManagment']").parent())
    $("#collapseManagmentStaff").detach().appendTo($("a[href='#collapseManagmentStaff']").parent())
    $("#collapseManagmentPayments").detach().appendTo($("a[href='#collapseManagmentPayments']").parent())


    $("#collapseSecretariat").detach().appendTo($("a[href='#collapseSecretariat']").parent())
    $("#collapseSecretariatMembers").detach().appendTo($("a[href='#collapseSecretariatMembers']").parent())
    $("#collapseSecretariatVendors").detach().appendTo($("a[href='#collapseSecretariatVendors']").parent())

    $("#collapseMngactivity").detach().appendTo($("a[href='#collapseMngactivity']").parent())


    $("#collapseReportStats").detach().appendTo($("a[href='#collapseReportStats']").parent())

    // (function(){
        const active = $(`a[href*='${location.pathname}']`)
        active.addClass('active')

        var path = location.pathname.split('/')
        path.shift();
        path.shift();
        path.pop();

        let pathstr = ""
        for(i=0;i<path.length;i++){
            // debugger
            pathstr += capitalizeFirstLetter(path[i])
            $('#collapse'+pathstr).addClass('show')
            $('#collapse'+pathstr).on('hide.bs.collapse', function (e) {
                    // debugger
                    // this.collapse('show')
                    e.preventDefault()
                })

        }

        function capitalizeFirstLetter(string) {
            return string.charAt(0).toUpperCase() + string.slice(1);
        }

        /*active.parent().collapse('show')
        active.parent().collapse('show')*/

    // }())


</script>










