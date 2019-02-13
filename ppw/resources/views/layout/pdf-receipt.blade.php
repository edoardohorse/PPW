<style>

    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }

    .position-sign{

        position:absolute;
        right:20%;
        top:70%;
    }


</style>

<meta charset="UTF-8">

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="invoice-title">
                <h2>Ricevuta n.@yield('numero_ricevuta')</h2>
            </div>
        </div>
        <div class="col-md-6">
            <address>
                <strong>Data emissione:</strong><br>
                @yield('data_creazione')<br><br>
            </address>
        </div>
    </div>

    <hr>
    <div class="row">
        <div class="col-md-6">
            <address>
                <strong>Nome asd:</strong><br>
                @yield('nome_asd')<br>
                <table>
                    <tr>
                        <td>
                            <strong>Indirizzo:  </strong><br>
                            @yield('indirizzo')
                        </td>
                        <td>
                            <strong>Numero di telefono:</strong><br>
                            @yield('numero_tel')
                        </td>
                    </tr>
                </table>
                <table>
                    <tr>
                        <td><strong>Città:</strong><br>
                            @yield('citta')
                        </td>
                        <td><strong>Provincia:</strong><br>
                            @yield('provincia')
                        </td>
                        <td> <strong>CAP:</strong><br>
                            @yield('cap')
                        </td>

                    </tr>
                </table>

                <strong>Cod. Fiscale:</strong><br>
                @yield('cod_fiscale')<br>
            </address>
        </div>
    </div>



</div>
</div>



<body>

<div class="col-md-12">
    <div class="row">
        <div class="col-md-12">
            <hr>
            <address>
                <strong>Metodo di pagamento:</strong><br>
                @yield('metodo_pagamento')
            </address>
        </div>

    </div>
</div>

    <div class="row">
        <address>
        <table>
            <tr>
        <td><strong>Importo:</strong><br>
            <strong>@yield('importo')€</strong></td>
        <td><strong>Descrizione:</strong><br>
        @yield('descrizione')<br></td>
            </tr>
        </table>
        </address>
    </div>

<div class="position-sign">
    <strong>Firma</strong>
</div>
</body>



