<div class="box">
    <div class="box-header">
        <h3 class="box-title">Yeni Kategori Ekle</h3>
    </div>
    <div class="box-body">
        <form action="<?php echo base_url("categories/save");?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="col-md-12">
                    <!--categories_name(ürün adı)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Kategori Adı</label>
                        <input type="text" class="form-control" name="category_name" placeholder="Lütfen Eklemek İstediğiniz Haberin Başlığını Girin">
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("category_name"); ?></small>
                        <?php } ?>
                    </div>
                    <!--categories_name(ürün adı)END-->

                    <div class="form-group image_upload_container">
                        <label>Görsel Seçiniz</label>
                        <input type="file" name="img_url" class="form-control">
                    </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Kaydet</button>
                <a href="<?php echo base_url("categories"); ?>" class="btn btn-danger">İptal</a>
            </div>
        </form>
    </div>
</div>
