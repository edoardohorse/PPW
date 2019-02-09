<table id="table" class="display" style="width:100%">
    <thead>
    <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Cognome</th>
        <th>Codice fiscale</th>
        <th>Data di nascita</th>
        <th>Scadenza tessera</th>
        <th>Scadenza assicurazione</th>
        <th>Scadenza Certificato medico</th>
    </tr>
    </thead>

    <tbody>
    @forelse($members as $member)
        <tr>
            <td>{{$member->id}}</td>
            <td>{{$member->nome}}</td>
            <td>{{$member->cognome}}</td>
            <td>{{$member->cod_fiscale}}</td>
            <td>{{$member->data_nascita}}</td>
            <td>{{$member->scadenza_tesseramento}}</td>
            <td>{{$member->scadenza_ass}}</td>
            <td>{{$member->scadenza_cert_med}}</td>
        </tr>

    @empty
        <tr><td>Tabella vuota</td></tr>
    @endforelse
    </tbody>

</table>

