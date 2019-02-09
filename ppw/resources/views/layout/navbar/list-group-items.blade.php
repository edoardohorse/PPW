


@foreach($items as $item)
    <li class="list-group-item">

    {{-- Se è un link --}}
    @if(empty($item['menu']))
        <a class="list-group-item" role="button" href="{{$item['link']}}">{{$item['name']}}</a>

    {{-- Se è un sottomenu --}}
    @else

        {{-- Menu di 1° livello --}}
        @if(empty($id))
            <a class="list-group-item"  data-toggle="collapse" href="#collapse{{$item['menu']}}"
                                            role="button" aria-expanded="true" aria-controls="#collapse{{$item['menu']}}">
                {{$item['name']}}
            </a>

                {{-- Menu di 2° livello --}}
        @else
            <a class="list-group-item"  data-toggle="collapse" href="#collapse{{$id}}{{$item['menu']}}"
               role="button" aria-expanded="true" aria-controls="#collapse{{$id}}{{$item['menu']}}">
                {{$item['name']}}
            </a>

        @endif
    @endif
    </li>
@endforeach


