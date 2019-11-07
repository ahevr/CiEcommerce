<div class="box">
    <div class="box-header">
        <h3 class="box-title">Yeni Popup Ekle</h3>
    </div>
    <div class="box-body">
        <form action="<?php echo base_url("popups/save");?>" method="post" enctype="multipart/form-data">
            <div class="box-body">
                <div class="col-md-12">
                    <!--popups_name(ürün adı)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Popups Adı</label>
                        <input type="text" class="form-control" name="title" placeholder="Lütfen Eklemek İstediğiniz Haberin Başlığını Girin">
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("catalog_name"); ?></small>
                        <?php } ?>
                    </div>
                    <!--popups_name(ürün adı)END-->


                    <div class="form-group">
                        <label> Hedef Sayfası</label>
                        <select name="page" class="form-control">
                            <?php foreach(get_page_list() as $page => $value) { ?>
                                <option value="<?php echo $page; ?>"><?php echo $value; ?></option>
                            <?php } ?>
                        </select>
                    </div>

                        <!--desc(Açıklama)-->
                        <div class="form-group">
                            <label>Popups Açıklaması</label>
                            <textarea id="editor1" name="description" rows="10" cols="80"></textarea>
                        </div>
                        <!--desc(Açıklama)END-->

            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Kaydet</button>
                <a href="<?php echo base_url("popups"); ?>" class="btn btn-danger">İptal</a>
            </div>
        </form>
    </div>
</div>
