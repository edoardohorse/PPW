<table id="table" class="display" style="width:100%">
    <thead>
    <tr>
        <th>ID disciplina</th>
        <th>Nome Discipline</th>
        <th>Data creazione</th>
        <th>Data modifica</th>


    </tr>
    </thead>

    <tbody>
    @forelse($disciplines as $discipline)
        <tr>
            <td>{{$discipline->id}}</td>
            <td>{{$discipline->nome}}</td>
            <td>{{$discipline->created_at}}</td>
            <td>{{$discipline->updated_at}}</td>
        </tr>

    @empty
        <tr><td>Tabella vuota</td></tr>
    @endforelse
    </tbody>

</table>

