<div class="box">
    <div class="box-header">
        <h3 class="box-title">
            <?php echo "<b>$item->bulb_name</b> kaydını düzenliyorsunuz";?>
        </h3>
    </div>
    <div class="box-body">

        <form action="<?php echo base_url("bulbs/update/$item->id");?>" method="post">
            <div class="box-body">

                <div class="col-md-4">
                    <!--stocks_name(ürün adı)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Stok Durumu</label>
                        <input type="text" class="form-control" name="bulb_name" value="<?php echo $item->bulb_name;?>" placeholder="Lütfen Eklemek İstediğini Ürün Adını Girin">
                       <?php if (isset($form_error)){ ?>
                           <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("bulb_name"); ?></small>
                        <?php } ?>
                    </div>
                    <!--stocks_name(ürün adı)END-->
                </div>


            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Güncelle</button>
                <a href="<?php echo base_url("bulbs"); ?>" class="btn btn-danger">İptal</a>
            </div>


        </form>
    </div>
</div>