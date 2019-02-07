 <div class="form-group">
        <label for="fax">Fax</label>
        <input type="text" class="form-control" id="fax" name="fax" value="0995610254">
        @if($errors->has('fax'))
            <span class="help_block" role="alert">
                <strong>{{$errors->first('fax')}}</strong>
            </span>
        @endif

        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" name="email" value="email@prova.it">
        @if($errors->has('email'))
            <span class="help_block" role="alert">
                <strong>{{$errors->first('email')}}</strong>
            </span>
        @endif

        <label for="iva">Partita iva</label>
        <input  type="text" class="form-control" id="iva" name="iva" value="12346">
        @if($errors->has('iva'))
            <span class="help_block" role="alert">
                <strong>{{$errors->first('iva')}}</strong>
            </span>
        @endif

        <label for="cap">Cap</label>
        <input  type="text" class="form-control" id="cap" name="cap" value="74023">
        @if($errors->has('cap'))
            <span class="help_block" role="alert">
                <strong>{{$errors->first('cap')}}</strong>
            </span>
        @endif

        <label for="provincia">Provincia</label>
        <input  type="text" class="form-control" id="provincia" name="provincia" value="Taranto">
        @if($errors->has('provincia'))
            <span class="help_block" role="alert">
                <strong>{{$errors->first('provincia')}}</strong>
            </span>
        @endif

        <label for="cod_fiscale">Codice Fiscale</label>
        <input type="text" class="form-control" id="cod_fiscale" name="cod_fiscale" value="12345">
        @if($errors->has('cod_fiscale'))
            <span class="help_block" role="alert">
                <strong>{{$errors->first('cod_fiscale')}}</strong>
            </span>
        @endif
    </div>
