<div class="container">

    <div class="panel panel-primary">

        <br>
        <div class="panel-body">

            {!! $chart_entrate->html() !!}

        </div>
    </div>
</div>
@push('lib_script')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    {!! $chart_entrate->script() !!}

@endpush
