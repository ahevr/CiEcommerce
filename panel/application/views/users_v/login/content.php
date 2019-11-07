<div class="login-box">
    <div class="login-logo">
        <a href="#"><b>Ege Sedef Avize</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Admin Girişi</p>
        <form action="<?php echo base_url("userop/do_login");?>" method="post">
            <div class="form-group has-feedback">
                <input type="email" class="form-control" name="user_email" placeholder="Email">
                <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                <?php if (isset($form_error)){?>
                    <small class="pull-right input-form-error"> <?php echo form_error("user_email");?></small>
                <?php }?>
            </div>
            <div class="form-group">
                <input id="sign-in-password" type="password" class="form-control" placeholder="Şifre" name="user_password">
                <?php if (isset($form_error)){?>
                    <small class="pull-right input-form-error"> <?php echo form_error("user_password");?></small>
                <?php }?>
            </div>
            <div class="row">
                <div class="col-xs-4">
                    <button type="submit" class="btn btn-primary btn-block btn-flat">Giriş Yap</button>
                </div>
            </div>
        </form>
    </div>
</div>