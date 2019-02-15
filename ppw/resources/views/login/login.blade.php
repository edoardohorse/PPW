@extends('layout.master_boot')

@section('title','Login')

@section('body')

    @include('layout.master_boot_header')


    <div class="container text-center position-panel">

        <h2>Login Utente </h2>
        <div class="panel panel-default">
            <div class="col-xs-12 col-sm-12 progress-container">
            </div>
            <div class="panel-body mx-auto d-block">
                <form method="POST" action="{{ route('login') }}">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email address</label>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Password</label>

                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                        @endif
                    </div>

                <input type="submit">
                </form>

            </div>
        </div>
    </div>

@stop