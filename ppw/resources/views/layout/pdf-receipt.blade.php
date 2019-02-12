<style>

    .invoice-title h2, .invoice-title h3 {
        display: inline-block;
    }

    .right{

        float: right;

    }

    .position-sign{

        position:absolute;
        right:20%;
        top:33%;
    }


</style>

<meta charset="UTF-8">

<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title">
                <h2>Fattura n.@yield('numero_fattura')</h2>
            </div>

            <hr>

            <div class="right">
                <address>
                    <strong>Nome asd:</strong><br>
                    @yield('nome_asd')<br><br>
                    <strong>Indirizzo:  </strong><br>
                    @yield('indirizzo')
                </address>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-6">
                <address>
                    <strong>Metodo di pagamento:</strong><br>
                    @yield('metodo_pagamento')<br><br>
                </address>
            </div>
            <div class="col-xs-6 text-right">
                <address>
                    <strong>Data emissione:</strong><br>
                    @yield('data_creazione')<br><br>
                </address>
            </div>
        </div>
    </div>
</div>
<hr>
<body>
<div class="row">
    <div class="col-md-12">

                <h3 class="panel-title"><strong>Importo:</strong></h3>
            </div>

    <div class="panel-body">
               <strong>@yield('importo')€</strong>
        <div class="position-sign">
            <strong>Firma</strong>
        </div>
    </div>

</div>
</body>



