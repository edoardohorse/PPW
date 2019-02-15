


@foreach($items as $item)
    <li class="list-group-item   p-0">

    {{-- Se è un link --}}
    @if(empty($item['menu']))
        <a class="list-group-item  rounded-0 level-{{$item['level']}}" role="button" href="{{route($item['link'])}}">{{$item['name']}}</a>

    {{-- Se è un sottomenu --}}
    @else

        {{-- Menu di 1° livello --}}
        @if(empty($id))
            <a class="list-group-item   rounded-0 level-{{$item['level']}}"  data-toggle="collapse" href="#collapse{{$item['menu']}}"
                                            role="button" aria-expanded="true" aria-controls="#collapse{{$item['menu']}}">


        {{-- Menu di 2° livello --}}
        @else
            <a class="list-group-item   rounded-0 level-{{$item['level']}}"  data-toggle="collapse" href="#collapse{{$id}}{{$item['menu']}}"
               role="button" aria-expanded="true" aria-controls="#collapse{{$id}}{{$item['menu']}}">


        @endif
                {{$item['name']}}
                <i class="fas fa-caret-down float-right"></i>
            </a>
    @endif
    </li>
@endforeach


