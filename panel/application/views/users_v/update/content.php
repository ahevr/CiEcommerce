<div class="box">
    <div class="box-header">
        <h3 class="box-title">
            <?php echo "<b>$item->user_name</b> kaydını düzenliyorsunuz";?>
        </h3>
    </div>
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Yeni Haber Ekle</h3>
        </div>
        <div class="box-body">
            <form action="<?php echo base_url("users/update/$item->id");?>" method="post" enctype="multipart/form-data">
                <div class="box-body">
                    <div class="col-md-12">
                        <!--users_name(ürün adı)-->
                        <div class="form-group">
                            <label>Kullanıcı Adı</label>
                            <input class="form-control" placeholder="Kullanıcı Adını Giriniz" name="user_name" value="<?php echo $item->user_name;?>">
                            <?php if(isset($form_error)){ ?>
                                <small class="pull-right input-form-error"> <?php echo form_error("user_name"); ?></small>
                            <?php } ?>
                        </div>

                        <div class="form-group">
                            <label>Adı ve Soyadı</label>
                            <input class="form-control" placeholder="Adını ve Soyadını Giriniz" name="full_name" value="<?php echo $item->full_name;?>">
                            <?php if(isset($form_error)){ ?>
                                <small class="pull-right input-form-error"> <?php echo form_error("full_name"); ?></small>
                            <?php } ?>
                        </div>

                        <div class="form-group">
                            <label>E-Posta Adresi</label>
                            <input class="form-control" type="email" placeholder="E-Posta Adresi Giriniz" name="email" value="<?php echo $item->email;?>">
                            <?php if(isset($form_error)){ ?>
                                <small class="pull-right input-form-error"> <?php echo form_error("email"); ?></small>
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
