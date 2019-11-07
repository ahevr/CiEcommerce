<div class="box">
    <div class="box-header">
        <h3 class="box-title">
            <?php echo "<b>$item->user_name</b> kaydının şifresini düzenliyorsunuz";?>
        </h3>
    </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Şifre Güncelle</h3>
        </div>
        <div class="box-body">
            <form action="<?php echo base_url("users/update_password/$item->id");?>" method="post">
                <div class="box-body">
                    <div class="col-md-12">

                        <div class="form-group">
                            <label for="exampleInputEmail1">Şifre</label>
                            <input type="password" class="form-control" name="password" placeholder="Lütfen Bir Şifre Belirleyin">
                            <?php if (isset($form_error)){ ?>
                                <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("password"); ?></small>
                            <?php } ?>
                        </div>


                    </div>
                </div>
                <div class="box-footer">
                    <button type="submit" class="btn btn-primary">Güncelle</button>
                    <a href="<?php echo base_url("users"); ?>" class="btn btn-danger">İptal</a>
                </div>
            </form>
        </div>
    </div>

</div>
