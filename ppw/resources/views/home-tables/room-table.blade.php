<table id="table" class="display" style="width:100%">
    <thead>
    <tr>
        <th>ID sala</th>
        <th>Nome sala</th>
        <th>Nome corso </th>
        <th>Data creazione</th>
        <th>Data modifica</th>


    </tr>
    </thead>

    <tbody>
    @forelse($rooms as $room)
        <tr>
            <td>{{$room->id}}</td>
            <td>{{$room->nome}}</td>
            <td>{{$room->nome_corso}}</td>
            <td>{{$room->created_at}}</td>
            <td>{{$room->updated_at}}</td>
        </tr>

    @empty
        <tr><td>Tabella vuota</td></tr>
    @endforelse
    </tbody>

</table>