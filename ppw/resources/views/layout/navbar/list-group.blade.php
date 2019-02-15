@if(empty($id))
    <ul class="list-group ">

        @include('layout.navbar.list-group-items')
@else
    <ul class="list-group collapse" id="collapse{{  $id }}">

        @include('layout.navbar.list-group-items', ['id' => $id ])
@endif


</ul>
