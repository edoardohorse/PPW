@extends('before_login.main')


@section('body')

    @include('before_login/header_before_login')

    <div class="container text-center position-panel">
        <h2>Benvenuto nel tuo gestionale</h2>
        <div class="panel panel-default">
            <div class="panel-body mx-auto d-block">Registra la tua ASD e inizia ad usare il gestionale. Clicca sul pulsante e compila il form di registrazione</div>
            <button class="position-button">Registra</button>
        </div>
    </div>

@endsection