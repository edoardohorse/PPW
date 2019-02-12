
<div class="form-group">

    <label for="{{$input_name}}"> {{ $label  }}  </label>






        @if($errors->has($input_name))

            <select class="custom-select is_invalid was-validated" name="{{$input_name}}" id="{{$input_name}}">
                <option selected> {{ $option_default  }} </option>

                @foreach($options as $option)
                    @if($option_default == $option)
                        <option selected value="{{$option}}">{{$option}}</option>
                    @else
                        <option value="{{$option}}">{{$option}}</option>
                    @endif
                @endforeach

            </select>
            <span class="invalid-feedback d-block" role="alert">
                {{$errors->first( $input_name )}}
            </span>

            @else

                @if(!empty($key))

                    <select class="custom-select" name="{{$input_name}}" id="{{$input_name}}">

                        @foreach($options as $option)
                            @if($option_default == $option->{$key})
                                <option selected value="{{$option->{$key} }}">{{$option->{$value} }}</option>
                            @else
                                <option  value="{{$option->{$key} }}">{{$option->{$value} }}</option>
                            @endif
                        @endforeach

                    </select>

                @else

                    <select class="custom-select" name="{{$input_name}}" id="{{$input_name}}">
                        <option selected> {{ $option_default  }} </option>

                        @foreach($options as $option)
                            <option value="{{$option}}">{{$option}}</option>
                        @endforeach

                    </select>

                @endif

        @endif


</div>
{{--

    $option_default
    $options
    $input_name
    $label
    $key    opt
    $value  opt

--}}
