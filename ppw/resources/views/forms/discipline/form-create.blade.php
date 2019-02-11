<form action="{{route('discipline.store')}}" method="POST">
    @csrf


    @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Nome disciplina',
                'input_name' => 'nome',

    ])

</form>