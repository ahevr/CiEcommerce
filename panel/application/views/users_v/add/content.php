<div class="box">
    <div class="box-header">
        <h3 class="box-title">Yeni Kullanıcı Ekle</h3>
    </div>
    <div class="box-body">
        <form action="<?php echo base_url("users/save");?>" method="post">
            <div class="box-body">
                    <div class="col-md-6">
                    <!--users_name(ürün adı)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kullanıcı Adı</label>
                        <input type="text" class="form-control" name="user_name" placeholder="Lütfen Bir Kullanıcı Adı Giriniz">
                       <?php if (isset($form_error)){ ?>
                           <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("user_name"); ?></small>
                        <?php } ?>
                    </div>
                    <!--users_name(ürün adı)END-->

                    <!--users_name(ürün adı)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ad Soyad</label>
                        <input type="text" class="form-control" name="full_name" placeholder="Lütfen Adınızı ve Soyadınızı Giriniz">
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("full_name"); ?></small>
                        <?php } ?>
                    </div>
                </div>
                    <div class="col-md-6">
                    <!--users_name(ürün adı)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Eposta Adresi</label>
                        <input type="email" class="form-control" name="email" placeholder="Lütfen Bir Eposta Adresi Giriniz">
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("email"); ?></small>
                        <?php } ?>
                    </div>
                    <!--users_name(ürün adı)END-->

                    <!--users_name(ürün adı)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Şifre</label>
                        <input type="password" class="form-control" name="password" placeholder="Lütfen Bir Şifre Belirleyin">
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("password"); ?></small>
                            <small id="passwordHelpInline" class="text-muted">
                                Must be 8-20 characters long.
                            </small>
                        <?php } ?>
                    </div>

                    <!--users_name(ürün adı)END-->

                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Kaydet</button>
                <a href="<?php echo base_url("users"); ?>" class="btn btn-danger">İptal</a>
            </div>
        </form>
    </div>
</div>
