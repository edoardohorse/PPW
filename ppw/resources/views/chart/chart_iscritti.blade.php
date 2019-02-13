  <div class="container">

      <div class="panel panel-primary">

          <br>
          <div class="panel-body">

              {!! $chart_iscritti->html() !!}

          </div>
     </div>
  </div>
  @push('lib_script')
      <script src="https://code.highcharts.com/highcharts.js"></script>
      {!! $chart_iscritti->script() !!}

  @endpush
