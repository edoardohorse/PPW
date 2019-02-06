
    <div class="form-group">
        <label for="name">Nome Asd</label>
        <input type="text" class="form-control" name="name" id="name">
        @if($errors->has('name'))
            <span class="help_block" role="alert">
                <strong>{{$errors->first('name')}}</strong>
            </span>
        @endif

        <label for="logo">Logo</label>
        <input type="file" class="form-control" name="logo" id="logo">
        @if($errors->has('logo')))
        <span class="help_block" role="alert">
            <strong>{{$errors->first('logo')}}</strong>
        </span>
        @endif

        <label for="tel">Numero Telefono</label>
        <input type="tel" class="form-control" name="tel" id="tel">
        @if($errors->has('tel')))
        <span class="help_block" role="alert">
            <strong>{{$errors->first('tel')}}</strong>
        </span>
        @endif

        <label for="indirizzo">Indirizzo</label>
        <input type="text" class="form-control" name="indirizzo" id="indirizzo">
        @if($errors->has('indirizzo')))
        <span class="help_block" role="alert">
            <strong>{{$errors->first('indirizzo')}}</strong>
        </span>
        @endif


        <label for="citta">Città</label>
        <input type="text" class="form-control" name="citta" id="citta">
        @if($errors->has('citta'))
            <span class="help_block" role="alert">
                <strong>{{$errors->first('citta')}}</strong>
            </span>
        @endif


    </div>

