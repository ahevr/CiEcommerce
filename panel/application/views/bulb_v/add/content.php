<div class="box">
    <div class="box-header">
        <h3 class="box-title">Yeni Ürün Ekle</h3>
    </div>
    <div class="box-body">
        <form action="<?php echo base_url("stocks/save");?>" method="post">
            <div class="box-body">
                <div class="col-md-4">
                    <!--product_name(ürün adı)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Stok Durumu</label>
                        <input type="text" class="form-control" name="stok_name" placeholder="Lütfen Eklemek İstediğini Ürün Adını Girin">
                       <?php if (isset($form_error)){ ?>
                           <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("stok_name"); ?></small>
                        <?php } ?>
                    </div>
                    <!--product_name(ürün adı)END-->
                 </div>
            </div>
    <div class="box-footer">
        <button type="submit" class="btn btn-primary">Kaydet</button>
        <a href="<?php echo base_url("stocks"); ?>" class="btn btn-danger">İptal</a>
    </div>
    </form>
</div>

