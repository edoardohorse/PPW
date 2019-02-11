@extends('layout.master_home_modal_modify')

@include('layout.master_lib')

@section('modal-body_modify')
    <form action="{{route('discipline.update', $discipline->id)}}" method="POST">
        @csrf
        @method('PUT')
        @include('forms.input-form',[
                'type'  => 'text',
                'label' => 'Nome disciplina',
                'input_name' => 'nome',
                'value'     => $discipline->nome

        ])

        <input type="submit" class="btn btn-lg btn-outline-primary">

    </form>


    <script>
        $(document).ready(function(){
            $("#Modal_modify").modal('show');
        })
    </script>

@stop
