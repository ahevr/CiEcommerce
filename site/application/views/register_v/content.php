<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(https://picsum.photos/id/321/1920/420);">
    <h2 class="l-text2 t-center">
      Üye Kayıt
    </h2>


</section>
<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">
            <div id="content" class="col-sm-12">
                <h1>Üye Ol !</h1>
                <br>
                <small>Üye olmak için aşağıdaki bilgileri eksiksiz bir şekilde doldurunuz</small>
                <form method="post" action="<?php echo base_url("home/do_register");?>" id="create_customer" accept-charset="UTF-8"><input type="hidden" name="form_type" value="create_customer"><input type="hidden" name="utf8" value="✓">
                    <div id="create-account-form ">
                        <fieldset id="account" class="form-horizontal">
                            <br>

                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="first_name">Adınız ve Soyadınız</label>
                                <div class="col-sm-10">
                                    <input type="text" name="full_name" placeholder="First Name" class="form-control" autofocus="">
                                    <?php if (isset($form_error)){ ?>
                                        <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("full_name"); ?></small>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="email">E-mail</label>
                                <div class="col-sm-10">
                                    <input type="text"  name="email" placeholder="Email" class="form-control" autocorrect="off" autocapitalize="off">
                                    <?php if (isset($form_error)){ ?>
                                        <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("email"); ?></small>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="form-group required">
                                <label class="col-sm-2 control-label" for="password">Şifre</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" placeholder="Şifre" class="form-control">
                                    <?php if (isset($form_error)){ ?>
                                        <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("password"); ?></small>
                                    <?php } ?>
                                </div>
                            </div>
                        </fieldset>
                        <br>
                        <div class="submit">
                            <button name="submitcreate" id="button-account" type="submit" class="btn btn-primary">
                                <span>
                                  <i class="fa fa-user left"></i>
                                  Üye Ol
                                </span>
                            </button>
                            &nbsp;
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>