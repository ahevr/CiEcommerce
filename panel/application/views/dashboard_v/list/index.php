<!DOCTYPE html>
<html>
<head>
   <?php $this->load->view("includes/head");?>
</head>
<body class="hold-transition skin-blue sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">

    <!-- ===============NAVBAR================================ -->
    <?php $this->load->view("includes/navbar");?>

    <!-- =============================================== -->

    <!-- Left side column. contains the sidebar -->
    <?php $this->load->view("includes/aside");?>
    <!-- =============================================== -->

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <section class="content">
            <hr>
            <?php $this->load->view("{$viewFolder}/{$subViewFolder}/content");?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- ===============FOOTER================================ -->
    <?php $this->load->view("includes/footer");?>
    <!-- ===============FOOTER================================ -->

</div>
<!-- ./wrapper -->

<?php $this->load->view("includes/include_script");?>
</body>
</html>
