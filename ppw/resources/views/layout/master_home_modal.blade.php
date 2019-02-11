<!-- Modal -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">@yield('modal-title')</h5>

                <a href="@yield('modal-cancel')">
                    <button type="button" class="close"  aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </a>
            </div>
            <div class="modal-body">
                @yield('modal-body')
            </div>



        </div>
    </div>
</div>
