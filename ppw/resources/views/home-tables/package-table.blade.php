<table id="table" class="display" style="width:100%">
    <thead>
    <tr>
        <th>ID corso</th>
        <th>Nome pacchetto</th>
        <th>Prezzo</th>
        <th>Data creazione</th>
        <th>Data modifica</th>


    </tr>
    </thead>

    <tbody>
    @foreach($packages as $package)
        <tr>
            <td>{{$package->id}}</td>
            <td>{{$package->nome_pacchetto}}</td>
            <td>{{$package->prezzo}}</td>
            <td>{{$package->created_at}}</td>
            <td>{{$package->updated_at}}</td>
        </tr>

    @endforeach
    </tbody>

</table>