<div class="box">
    <div class="box-header">
        <h3 class="box-title">Yeni Haber Ekle</h3>
    </div>
    <div class="box-body">
        <form action="<?php echo base_url("news/save");?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="col-md-12">
                    <!--news_name(ürün adı)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Başlık</label>
                        <input type="text" class="form-control" name="title" placeholder="Lütfen Eklemek İstediğiniz Haberin Başlığını Girin">
                       <?php if (isset($form_error)){ ?>
                           <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("title"); ?></small>
                        <?php } ?>
                    </div>
                    <!--news_name(ürün adı)END-->

                    <!--desc(Açıklama)-->
                    <div class="form-group">
                        <label>Haber Açıklaması ve İçerik Bilgisi</label>
                        <textarea id="editor1" name="description" rows="10" cols="80"></textarea>
                    </div>
                    <!--desc(Açıklama)END-->

                    <div class="form-group">
                        <label>Haberin Türü</label>
                        <select class="form-control" name="news_type">
                            <option value="">Lütfen Bir Seçim Yapın</option>
                            <option value="image">Fotoğraf</option>
                        </select>
                    </div>

                    <div class="form-group image_upload_container">
                        <label>Görsel Seçiniz</label>
                        <input type="file" name="img_url" class="form-control">
                    </div>

                </div>
            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Kaydet</button>
                <a href="<?php echo base_url("news"); ?>" class="btn btn-danger">İptal</a>
            </div>
        </form>
    </div>
</div>
