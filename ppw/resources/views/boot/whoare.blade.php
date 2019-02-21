@extends('layout.master')

@push('lib_css')
    <link rel="stylesheet" href = "{{ asset('css/before_login_style.css ') }}">
    <link rel="stylesheet" href = "{{ asset('css/box.css ') }}">
@endpush

@section('body')
    @include('layout.master_boot_header')

    <style>

        .foto{

            padding-left:10%;
        }
        .card1 {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 10%;
            display: inline-block;
            margin: 10px;

        }

        .card2 {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            width: 10%;
            /*display: inline-block;*/
        }


        .card1,.card2:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .container_img {
            padding: 2px 16px;

        }

        .text{
            text-align:center;
            margin-top:20px;

        }

        .facolta{
            width:50%;
            float:right;
            margin:70px;

        }

        button{
          margin:40px;

        }
    </style>

<main>
    <div class="text">
    <h1 style="">Chi siamo</h1>
    </div>
    <a href="{{route('M350')}}"><button class="btn btn-primary btn-lg">Torna Indietro</button></a>
    <div class="foto  py-5 " >
        <div class="facolta">
            <h5 >Il gestionale è stato sviluppato da quattro studenti
            <br>
                universitari iscritti al terzo anno del corso di "Informatica e
                <br>
                Comunicazione Digitale"(ICD),sede di Taranto,dell'Università
                <br>
                degli studi di Bari Aldo Moro.
            </h5>

            <img src="{{asset('img\Facoltà.jpg')}}" alt="Avatar" style="width:100%">
        </div>


        <div class="card1">
        <img src="{{asset('img\Christian.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_img ">
            <h4><b>Christian Meo</b></h4>
        </div>

        </div>


    <div class="card1">
        <img src="{{asset('img\Andrea.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_img">
            <h4><b>Andrea Mannavola</b></h4>
        </div>

    </div>


    <div class="card2">

        <img src="{{asset('img\Edo.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_img">
            <h4><b>Edoardo Cavallo</b></h4>
        </div>
    </div>

    <div class="card2">
        <img src="{{asset('img\Giuseppe.jpg')}}" alt="Avatar" style="width:100%">
        <div class="container_img">
            <h4><b>Giuseppe Cofano</b></h4>
        </div>
    </div>


    </div>

</main>
@stop
