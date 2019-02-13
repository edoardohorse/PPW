@extends('layout.master_home')

@section('title','Report')

@section('main')

    {{--<h1>Report</h1>--}}


    <div class="container">
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#home">Home</a></li>
            <li><a data-toggle="tab" href="#menu1">Menu 1</a></li>
            <li><a data-toggle="tab" href="#menu2">Menu 2</a></li>
            <li><a data-toggle="tab" href="#menu3">Menu 3</a></li>
        </ul>

        <div class="tab-content">
            <div id="home" class="tab-pane fade in active">

            </div>
            <div id="menu1" class="tab-pane fade">
                <h3>Iscritti</h3>
                <p>@include('chart.chart_iscritti')</p>
            </div>
            <div id="menu2" class="tab-pane fade">
                <h3>Entrate</h3>
                <p>@include('chart.chart_entrate')</p>
            </div>
            <div id="menu3" class="tab-pane fade">
                <h3>Menu 3</h3>
                <p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
            </div>
        </div>
    </div>


@stop
