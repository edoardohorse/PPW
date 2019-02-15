@extends('forms.allievo.form-allievo')




@section('route', route('M228', $member->id))
@section('method', 'POST')


@section('form')

{{--    {{dd($courses_id)}}--}}



    <h3>Step</h3>
    <section>

        @include('forms.input-form', [
                                    'type'      =>      'date',
                                    'label'     =>      'Data inizio',
                                    'input_name' =>     'data_inizio',
                                    ])

        @include('forms.input-form', [
                                     'type'      =>      'date',
                                    'label'     =>      'Data fine',
                                    'input_name' =>     'data_fine',
                                    ])



        @include('forms.option-form',[
                'input_name'        => 'course',
                'options'           => $courses,
                'option_default'   => '',
                'label'             => 'Corsi',
                'key'               => 'id',
                'value'             =>  'nome_corso'
            ])

    </section>
    <h3>Step</h3>
    <section>

        <div class="spinner-border text-info" style="margin-left:47%;" role="status" id="spinner">
            <span class="sr-only">Loading...</span>
        </div>

        <div id="step2" class="d-none">
            <label for="">Costo</label>
            <input readonly class="form-control" id="costo" name="costo"></input>

            <label for="">Numero lezioni</label>
            <span class="form-control mt-2" id="lezioni"></span>


            <label for="">Metodo di pagamento</label>
            <select class="form-control mt-2" name="metodo" id="">
                <option value="Carta di credito">Carta di credito</option>
                <option value="Contanti">Contanti</option>
            </select>

        </div>
    </section>



@stop

@section('modal-done-text', 'Chiudi')



