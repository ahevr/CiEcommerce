
<?php
    $popup = get_popup_service($viewFolder);
?>






<?php if ($popup) { ?>

        <div class="modal fade" id="popup_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLongTitle">
                            <?php echo $popup->title;?>
                        </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <?php echo $popup->description;?>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        <button data-popup-id="<?php echo $popup->popup_id;?>" data-url="<?php echo base_url("bir-daha-gosterme");?>" type="button" class="btn btn-primary dontShowBtn " data-dismiss="modal">Bir Daha Gösterme</button>
                    </div>
                </div>
            </div>
        </div>

    <script>
        $(document).ready(function () {
           $("#popup_modal").modal("show");
        })
    </script>

<?php } ?>