
        <label for="name">Nome</label>
        <input type="text" class="form-control" name="name" id="name">
         @if($errors->has('name' ))
         <span class="help_block" role="alert">
          <strong>{{$errors->first('surname')}}</strong>
         </span>
        <label for="surname">Cognome</label>
        <input type="text" class="form-control" name="surname" id="surname">
         @if($errors->has('surname'))
         <span class="help_block" role="alert">
          <strong>{{$errors->first('surname')}}</strong>
         </span>
        @endif
        <label for="city">Città</label>
        <input type="text" class="form-control" name="city" id="city" >
         @if($errors->has('city'))
          <span class="help_block" role="alert">
           <strong>{{$errors->first('city')}}</strong>
          </span>
        @endif
        <label for="province">Provincia</label>
        <input type="text" class="form-control" name="province" id="city">
         @if($errors->has('province'))
          @endif
         <span class="help_block" role="alert">
          <strong>{{$errors->first('province')}}</strong>
        </span>
        @endif
        <label for="address">Indirizzo</label>
        <input type="text" class="form-control" name="address" id="address">
         @if($errors->has('address'))
         <span class="help_block" role="alert">
          <strong>{{$errors->first('address')}}</strong>
         </span>
         @endif
        <label for="cap">Cap</label>
        <input type="number" class="form-control" name="cap" id="cap">
         @if($errors->has('cap'))
        <span class="help_block" role="alert">
         <strong>{{$errors->first(('cap')}}</strong>
        </span>
        @endif
        <label for="born">Data di nascita</label>
        <input type="date" class="form-control" name="born" id="born" >
         @if($errors->has('born'))
        <span class="help_block" role="alert">
         <strong>{{$errors->first('born')}}</strong>
        </span>
        @endif
        <label for="gender">Genere</label>
        <input  type="text" class="form-control" name="gender" id="born">
        @if($errors->has('gender'))
         <span class="help_block" role="alert">
          <strong>{{$errors->first('gender')}}</strong>
        </span>
        @endif
<!--<button type="submit"  onclick="progress()" class="btn btn-primary">Submit</button>-->

