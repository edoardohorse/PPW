@extends('layout.master_home_modal_create')

@include('layout.master_lib')

@section('modal-body_create')
    <form action="{{route('discipline.store')}}" method="POST">
        @csrf


        @include('forms.input-form',[
                    'type'  => 'text',
                    'label' => 'Nome disciplina',
                    'input_name' => 'nome',

        ])

        <input type="submit" class="btn btn-lg btn-outline-primary">
    </form>

    <script>
        $(document).ready(function(){
            $("#Modal_create").modal('show');
        })
    </script>

@stop
