@extends('before_login.main_before')

@section('body')

    @include('before_login/header_before_login')


    <div class="container text-center position-panel">
        <h2>Registrazione avvenuta con successo</h2>
        <div class="panel panel-default">
            <div class="panel-body mx-auto d-block">
            <button class="position-button">Continua</button>
        </div>
        </div>
    </div>
@endsection