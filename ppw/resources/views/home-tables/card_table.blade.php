<table id="table" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Id tessera</th>
        <th>Data Tesseramento</th>
        <th>Scadenza Tesseramento</th>
        <th>Data Creazione</th>
        <th>Data Modifica</th>

    </tr>
    </thead>

    <tbody>
    @forelse($cards as $card)
    <tr>
        <td>{{$card->id}}</td>
        <td>{{$card->data_tesseramento}}</td>
        <td>{{$card->scadenza_tesseramento}}</td>
        <td>{{$card->created_at}}</td>
        <td>{{$card->updated_at}}</td>
    </tr>

     @empty
    <tr><td>Tabella vuota</td></tr>
    @endforelse
    </tbody>

</table>

<script>

    $(document).ready(function() {
        var table = $('#table').DataTable();

        $('#table tbody').on('click', 'tr', function () {
            var data = table.row( this ).data();
            alert( 'You clicked on '+data[0]+'\'s row' );
        } );
    } );

</script>
