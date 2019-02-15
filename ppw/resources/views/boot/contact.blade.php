@extends('layout.master')

@push('lib_css')
    <link rel="stylesheet" href = "{{ asset('css/before_login_style.css ') }}">
    <link rel="stylesheet" href = "{{ asset('css/box.css ') }}">
@endpush

@section('body')
    @include('layout.master_boot_header')

    <style>

        .text{
            text-align:center;
            margin-top:40px;

        }

        h5{

         margin:30px;
        }


        .text1{

         text-align:center;
            margin-right:0px;
            margin-top:-36px;
        }
        .text2{

            text-align:center;
            margin-right:-80px;
            margin-top:-40px;
        }
      .position1{

          text-align:center;
          margin-right: 260px;
      }
        .position2{

            text-align:center;
            margin-right: 260px;
        }



    </style>

    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<main>
    <div class="text">
        <h1 style="">Contatti</h1>
    </div>

    <h5 align="center">Per informazioni sui nostri servizi potete
        <br>
        contattarci dal Lunedì al Venerdì – 9:00/13:00 – 15:00/19:00
    </h5>
<div class="container">
    <div class="position1">
        <i class="material-icons" style="font-size:36px;">call</i>

    </div>
    <div class="text1">
    <h3>Cell: 3807737454</h3>
    </div>
   <div class="position2">
       <i class="fa fa-envelope" style="font-size:36px"></i>
   </div>
   <div class="text2">
    <h3>Email: peka@gmail.com</h3>
   </div>
</div>
</main>
@stop