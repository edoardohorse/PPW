<a class="btn btn-lg
@if(!empty($class))
        {{$class}}
@endif
@if(!empty($isDisabled))
    disabled"
@endif

@if(!empty($href))
    href="{{$href}}">
@endif

    {{$text}}

</a>