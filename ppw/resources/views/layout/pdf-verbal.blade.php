<style>
    .position-sign-pres{

        position:absolute;
        right:20%;
        top:70%;
    }
    .position-sign-segr{

        position:absolute;
        left:20%;
        top:70%;
    }


</style>

<meta charset="UTF-8">

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <div class="invoice-title">
                <h3>Verbale del consiglio direttivo del @yield('data')</h3>
            </div>
            <div>
                In data @yield('data'), alle ore @yield si è riunito presso la sede sociale @yield('indirizzo') il Consiglio Direttivo in sede ordinaria dell’Associazione nelle persone dei signori (presidenti e segretari):
                <div>
                    @if
                        Sig. @yield('nome')@yield('cognome')
                    @endif
                </div>
                per discutere e deliberare sul seguente ordine del giorno:
                1) Ingresso di nuovi soci nell'associazine;
                2)Varie ed eventuali.

                Assume la presidenza, a norma di statuto, il Presidente del Consiglio Direttivo Sig.@yield('cognome') @yield('nome'), funge da segretario Sig.@yield('cognome') @yield('nome').

                Il Presidente accertata la regolarità della convocazione ed il numero legale dei Consiglieri direttivo dichiara il Consiglio validamente costituito ed atto a delibera.

                Primo punto all’ordine del giorno: Ammissione nuovi soci nell’associazione, in merito alla presentazione della richiesta d’ingresso di nuovi soci nell’associazione.
                Premesso che sono pervenute
                n. @yield('numero di persone che hanno fatto richiesta') domande di ammissione a socio ordinario da parte dei signori:
                <div> @yield('Nomi e cognomi dei soci'); </div>
                che le predette domande sono conformi alle disposizioni statutarie, il consiglio direttivo è chiamato ad esprimere il suo parere in merito all’accettazione o meno di queste richieste. Dopo ampia ed esauriente discussione in merito, i soci deliberano all’unanimità di approvare l’ingresso di tutti i richiedenti in oggetto.

                Null’altro essendovi da deliberare, il Presidente dichiara chiusa la riunione alle ore @yield('ora')  previa stesura, lettura ed approvazione del presente verbale.

                <div class="position-sign-segr"> Il Segretario </div>

                <div class="position-sign-pres"> Il Presidente </div>



            </div>
        </div>
    </div>
</div>