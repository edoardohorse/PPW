
<div class="form-group">

    <label for="{{$input_name}}"> {{ $label  }}  </label>

    {{-- TODO: Usato per debug, da eliminare --}}
    @if( !empty($value))
        <input type="{{$type}}" class="form-control" name="{{$input_name}}" id="{{$input_name}}" value="{{$value}}">
    @else


        @if($errors->has($input_name))
            <input type="{{$type}}" class="form-control is-invalid" name="{{$input_name}}" id="{{$input_name}}" value="{{old($input_name)}}">
            <span class="help-block" role="alert">
                    <strong>{{$errors->first( $input_name )}}</strong>
            </span>
        @else
            @if(old($input_name) == '')
                <input type="{{$type}}" class="form-control" name="{{$input_name}}" id="{{$input_name}}" value="{{old($input_name)}}">
            @else
                <input type="{{$type}}" class="form-control  is-valid" name="{{$input_name}}" id="{{$input_name}}" value="{{old($input_name)}}">
            @endif

        @endif

    @endif

</div>