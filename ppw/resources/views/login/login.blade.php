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
                <button type="submit">Submit</button>

            </div>
        </div>
    </div>

@stop