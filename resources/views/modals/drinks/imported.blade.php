<!-- DRINKS.IMPORTED modal -->
<div class="popup-modal modal fade" id="menuModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl">
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <div class="modal-body">
                        {!! $content->where('alias','imported-beers')->first()->content !!}

                    </div>
                </div>
            </div><!-- /.row -->
        </div><!-- /.container -->
    </div><!-- /.modal-content -->
</div>
<!-- End menu modal -->