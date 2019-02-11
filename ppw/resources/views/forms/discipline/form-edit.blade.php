<form action="{{route('discipline.update', $discipline->id)}}" method="POST">
    @csrf
    @method('PUT')
    @include('forms.input-form',[
            'type'  => 'text',
            'label' => 'Nome disciplina',
            'input_name' => 'nome',
            'value'     => $discipline->nome

    ])


</form>