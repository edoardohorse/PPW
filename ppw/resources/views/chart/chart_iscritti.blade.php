  <div class="container">

      <div class="panel panel-primary">

          <br>
          <div class="panel-body">

              {!! $chart_iscritti->container() !!}

          </div>
     </div>
  </div>
  @push('lib_script')

      <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/4.0.2/echarts-en.min.js"></script>
      {!! $chart_iscritti->script() !!}

  @endpush
