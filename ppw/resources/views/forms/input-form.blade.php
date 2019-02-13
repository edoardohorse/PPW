
<div class="form-group">

    <label for="{{$input_name}}"> {{ $label  }}  </label>

    {{-- TODO: Usato per debug, da eliminare --}}
    {{--@if( !empty($value))--}}
        {{--<input type="{{$type}}" class="form-control" name="{{$input_name}}" id="{{$input_name}}" value="{{$value}}">--}}
    {{--@else--}}


        @if($errors->has($input_name))
            <input type="{{$type}}" class="form-control is-invalid was-validated" name="{{$input_name}}" id="{{$input_name}}" value="{{old($input_name)}}">
            <span class="invalid-feedback" role="alert">
                {{$errors->first( $input_name )}}
            </span>
        @else

            @if( !empty($value))
                <input type="{{$type}}" class="form-control"
                       @if(!empty($readonly))readonly @endif
                       placeholder="@if(!empty($placeholder)){{$placeholder}}@endif"
                       name="{{$input_name}}" id="{{$input_name}}" value="{{$value}}">
            @else

                @if(old($input_name) == '')
                    <input type="{{$type}}" class="form-control"
                           @if(!empty($readonly))readonly @endif
                           placeholder="@if(!empty($placeholder)){{$placeholder}}@endif"
                           name="{{$input_name}}" id="{{$input_name}}" value="{{old($input_name)}}">
                @else
                    <input type="{{$type}}" class="form-control  is-valid"
                           @if(!empty($readonly))readonly @endif
                           placeholder="@if(!empty($placeholder)){{$placeholder}}@endif"
                           name="{{$input_name}}" id="{{$input_name}}" value="{{old($input_name)}}">
                @endif

            @endif

        @endif


</div>
{{--

    $label
    $input_name
    $type
    $value          opt
    $placeholder    opt
    $readonly       opt

--}}
