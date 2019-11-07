<!-- jQuery 3 -->
<script src="<?php echo base_url("assets");?>/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url("assets");?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url("assets");?>/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url("assets");?>/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url("assets");?>/bower_components/ckeditor/ckeditor.js"></script>
<script src="<?php echo base_url("assets");?>/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url("assets");?>/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url("assets");?>/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url("assets");?>/dist/js/demo.js"></script>
<script src="<?php echo base_url("assets");?>/dist/js/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url("assets");?>/dist/js/dropzone.min.js"></script>
<script src="<?php echo base_url("assets");?>/dist/js/iziToast.min.js"></script>

<script src="<?php echo base_url("assets");?>/dist/js/custom.js"></script>

<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<script src="<?php echo base_url("assets");?>/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>






















<script>
    $(document).ready(function () {

        $('.toggle_event').change(function () {

            var isActive = $ (this).prop('checked');
            var base_url = $(".base_url").text();
            var id       = $(this).attr("dataID");

            $.post(base_url + "product/isActiveSetter",
                {id: id, isActive: isActive},
                function (response) {

                })
        });

    });


</script>

<script>
    $(document).ready(function () {
        $('.sidebar-menu').tree()
    })
</script>

<script type="text/javascript">

    var table =
        $('#table').DataTable({
        processing: true,

        "language": {
            "url":"<?php echo base_url('assets/dist/js/Turkish.json')?>"
        },
    });
</script>

<script>
    $(function () {
        // Replace the <textarea id="editor1"> with a CKEditor
        // instance, using default configuration.
        CKEDITOR.replace('editor1')
        //bootstrap WYSIHTML5 - text editor
        $('.textarea').wysihtml5()
    })
</script>

<?php
$alert = $this->session->userdata("alert");
    if ($alert){
        if ($alert["type"] === "success"){ ?>

            <script>
                iziToast.success({
                    title: '<?php echo $alert["title"];?>',
                    message: '<?php echo $alert["text"];?>',
                    position: "topCenter"
                });
            </script>

        <?php }else { ?>

            <script>
                iziToast.error({
                    title: '<?php echo $alert["title"];?>',
                    message: '<?php echo $alert["text"];?>',
                    position: "topCenter"
                });
            </script>

        <?php }
    }
?>
