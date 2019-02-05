@extends('before_login.main_before')


@section('body')

    @include('before_login/header_before_login')

    <div class="container text-center position-panel">
        <h2>Login Utente</h2>
        <div class="panel panel-default">
            <div class="panel-body mx-auto d-block">Autenticazione effettuata con successo</div>
            <button class="position-button">Vai al gestionale</button>
        </div>
    </div>

@endsection