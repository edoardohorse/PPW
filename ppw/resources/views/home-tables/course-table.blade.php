<table id="table" class="display" style="width:100%">
    <thead>
    <tr>
        <th>ID corso</th>
        <th>Nome corso</th>
        <th>Costo orario</th>
        <th>Nome disciplina</th>
        <th>Data creazione</th>
        <th>Data modifica</th>


    </tr>
    </thead>

    <tbody>
    @foreach($courses as $course)

        <tr>
            <td>{{$course->id}}</td>
            <td>{{$course->nome_corso}}</td>
            <td>{{$course->costo_orario}}</td>
            <td>{{$course->nome}}</td>
            <td>{{$course->created_at}}</td>
            <td>{{$course->updated_at}}</td>
        </tr>

    @endforeach
    </tbody>

</table>