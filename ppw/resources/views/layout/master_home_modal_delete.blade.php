<!-- Modal -->
<div class="modal fade" id="Modal_delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@yield('modal-title_delete')</h5>
            </div>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
            <div class="modal-body">
                @yield('modal-body_delete')
                Elimina

            </div>
            {{--<div class="modal-footer">
                <button type="button" class="btn btn-primary" id="saveModalDelete">Finito</button>
            </div>--}}
        </div>
    </div>
</div>
