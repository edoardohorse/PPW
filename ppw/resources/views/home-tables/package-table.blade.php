<table id="table" class="display" style="width:100%">
    <thead>
    <tr>
        <th>ID corso</th>
        <th>Nome pacchetto</th>
        <th>Prezzo</th>
        <th>Nome corso pacchetto</th>
        <th>Data creazione</th>
        <th>Data modifica</th>


    </tr>
    </thead>

    <tbody>
    @forelse($packages as $package)
        <tr>
            <td>{{$package->id}}</td>
            <td>{{$package->nome_pacchetto}}</td>
            <td>{{$package->prezzo}}</td>
            <td>{{$package->nome_corso}}</td>
            <td>{{$package->created_at}}</td>
            <td>{{$package->updated_at}}</td>
        </tr>

    @empty
        <tr><td>Tabella vuota</td></tr>
    @endforelse
    </tbody>

</table>