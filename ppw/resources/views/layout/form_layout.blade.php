
  <form method="POST" class="form-group" id="form" action="/signInFounder" enctype="multipart/form-data">
        @csrf

        <h3>Step</h3>
        <section>
            @include('forms/step1-member')
        </section>


        <h3>Step</h3>
        <section>
            @include('forms/step2-member')
        </section>

        <h3>Step</h3>
        <section>
            @include('forms/step3-member')
        </section>


        <h3>Step</h3>
        <section>
            @include('forms/form-card')
        </section>


        {{--<input type="submit" class="btn bnt-lg btn-primary">--}}

    </form>

  <script src="{{ asset('js/jquery.steps.js')  }}"></script>
  <script src="{{ asset('formStepped.jsd.js')  }}"></script>