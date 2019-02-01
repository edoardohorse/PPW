@extends('before_login.main')

@section('body')

    @include('before_login/header_before_login')

<div class="container text-center position-panel">

        <h2>Registrazione ASD </h2>
    <div class="panel panel-default">
        <div class="col-xs-12 col-sm-12 progress-container">
        </div>

        <div class="panel-body mx-auto d-block">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>

            </form>
            <button type="submit" onclick="progress()">Submit</button>

        </div>
    </div>
</div>

@endsection