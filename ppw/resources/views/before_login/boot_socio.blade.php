@include('before_login/header_main')


    <style>
        .progress.active .progress-bar {
            -webkit-transition: none !important;
            transition: none !important;
        }
    </style>
    <body>


        <div class="container text-center position-panel">
            <h2>Registrazione ASD</h2>
            <div class="panel panel-default">
                <div class="col-xs-12 col-sm-12 progress-container">
                    <div class="progress progress-striped active">
                        <div class="progress-bar progress-bar-success" style="width:0%"></div>
                    </div>
                </div>

                @include('forms/step0')
             <!--   <div class="panel-body mx-auto d-block">
                    <form>

                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputName">Nome</label>
                                <input type="text" class="form-control" id="inputName" placeholder="Nome">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputSurname">Cognome</label>
                                <input type="text" class="form-control" id="inputSurname" placeholder="Cognome">
                            </div>
                        <div class="form-group col-md-3">
                            <label for="inputCity">Città</label>
                            <input type="text" class="form-control" id="inputCity" placeholder="ES: Milano">
                        </div>
                            <div class="form-group col-md-3">
                                <label for="inputProvince">Provincia</label>
                                <input type="text" class="form-control" id="inputProvince" placeholder="Es: Brindisi">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-3">
                                <label for="inputAddress">Indirizzo</label>
                                <input type="text" class="form-control" id="inputAddress">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputCap">Cap</label>
                                <input type="number" class="form-control" id="inputCap">
                            </div>
                            <div class="form-group col-md-3">
                                <label for="inputBorn">Data di nascita</label>
                                <input type="date" class="form-control" id="inputBorn">
                            </div>

                            <div class="form-group col-md-3">
                                    <label for="inputGender">Genere</label>
                                    <input  type="text" class="form-control" id="inputGender">


                                </div>
                        </div>
                    </form>
                    <button type="submit"  onclick="progress()" class="btn btn-primary">Submit</button>
              </div>
        -->
            </div>

        </div>
    </body>
    <script>

        function progress(){
            $(".progress-bar").animate({
                width: "33.3%"
            }, 2000);
        }

    </script>


