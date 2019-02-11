<!-- Modal -->
<div class="modal fade" id="Modal_create" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@yield('modal-title_create')</h5>

                <div class="spinner-border text-info" role="status">
                    <span class="sr-only">Loading...</span>
                </div>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                @yield('modal-body_create')
            </div>

           {{-- <div class="modal-footer">
                <button type="button" class="btn btn-primary" id="saveModalCreate">Finito</button>
            </div>--}}

        </div>
    </div>
</div>
