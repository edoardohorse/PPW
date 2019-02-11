<table id="table" class="display" style="width:100%">
    <thead>
    <tr>
        <th>Numero transazione</th>
        <th>Descrizione</th>
        <th>Importo</th>
        <th>Modalità di pagamento</th>
        <th>Data</th>
        <th>File fattura</th>

    </tr>
    </thead>

    <tbody>
    @forelse($transactions as $transaction)
        <tr>
            <td>{{$transaction->id}}</td>
            <td>{{$transaction->descrizione}}</td>
            <td>{{$transaction->importo}}</td>
            <td>{{$transaction->modalita_pagamento}}</td>
            <td>{{$transaction->created_at}}</td>
            <td>{{$transaction->file_fattura}}</td>
            <td><a href="/pdf"> Esporta pdf</a></td>
        </tr>

    @empty
        <tr><td>Tabella vuota</td></tr>
    @endforelse
    </tbody>

</table>

