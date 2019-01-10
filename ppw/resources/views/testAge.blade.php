<h1>Sei piccolo</h1>
@if(Session::exists('age'))
    Eta': {{Session::get('age')}}
@endif

<a href="{{route('home')}}">Torna</a>
