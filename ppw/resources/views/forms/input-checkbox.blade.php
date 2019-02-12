
<div class="form-group">

    <label for="{{$input_name}}"> {{ $label  }}  </label>


{{--        {{dd($checkboxes)}}--}}
{{--        {{dd(in_array($checkboxes[0]{$key}, $checked))}}--}}
{{--        {{dd($checked)}}--}}


{{--    {{dd($key)}}--}}
        @foreach($checkboxes as $checkbox)
{{--            {{dd($checkbox[$key] )}}--}}
            <br>

            @if(!empty($checked))
                @if(in_array($checkbox[$key], $checked))
                    <input type="checkbox" class="ml-1 mr-3" name="{{$input_name}}"
                           @if(!empty($readonly))disabled @endif
                           checked value="{{$checkbox[$key] }}"><span>{{$checkbox[$value] }}</span>
                @endif
            @else

            <input type="checkbox" class="ml-1 mr-3" name="{{$input_name}}"
                   @if(!empty($readonly))disabled @endif
                   value="{{$checkbox->{$key} }}"><span>{{$checkbox->{$value} }}</span>
            @endif

        @endforeach



</div>
{{--

    $checked
    $checkboxes
    $input_name
    $label
    $key
    $value
    $readonly   opt
--}}
