<div class="box">
    <div class="box-header">
        <h3 class="box-title">
            <?php echo "<b>$item->product_name</b> Kaydını İnceliyorsunuz";?>
        </h3>
    </div>
    <div class="box-body">
        <form>
            <div class="box-body">

                <div class="col-md-4 satir">
                    <!--product_name(ürün adı)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ürün Adı</label>
                        <input type="text" class="form-control" name="product_name"  value="<?php echo $item->product_name;?>" placeholder="Lütfen Eklemek İstediğini Ürün Adını Girin"disabled>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("product_name"); ?></small>
                        <?php } ?>

                    </div>
                    <!--product_name(ürün adı)END-->

                    <!--price(fiyat)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fiyatı</label>
                        <input type="text" class="form-control fiyat hesaplama" name="price" id="para"  value="<?php echo $item->price;?>" placeholder="Lütfen Eklemek İstediğini Ürünün Fiyatını Giriniz"disabled>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right">   <?php echo form_error("price"); ?></small>
                        <?php } ?>
                    </div>
                    <!--price(fiyat)END-->


                    <div class="form-group">
                        <label for="exampleInputEmail1">İndirim Oranı</label>
                        <input type="text" class="form-control iskonto hesaplama" name="discounted_rate"   value="<?php echo $item->discounted_rate;?>"  placeholder="Lütfen Eklemek İstediğini İndirim Oranını Giriniz"disabled>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">İndirimli Fiyatı</label>
                        <input type="text" class="form-control satisfiyati" value="<?php echo $item->discounted_price;?>" name="discounted_price"disabled>
                    </div>

                    <!--stock_code(stok kodu)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Stok Kodu</label>
                        <input type="text" class="form-control" name="stock_code" value="<?php echo $item->stock_code;?>" placeholder="Lütfen Eklemek İstediğiniz Stok Kodunu Girin"disabled>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("stock_code"); ?></small>
                        <?php } ?>
                    </div>
                    <!--stock_code(stok kodu)END-->

                    <!--stock_code(stok durumu)-->
                    <div class="form-group">
                        <label>Stok Durumu</label>
                        <select name="stock_status_id" id="stock_code" class="form-control"disabled>
                            <?php foreach ($stock_status as $status) { ?>
                                <option value="<?php echo $status->id;?>"><?php echo $status->stok_name;?></option>
                            <?php } ?>
                        </select>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("stock_status_id"); ?></small>
                        <?php } ?>
                        </label>
                    </div>
                    <!--stock_code(stok durumu)END-->

                    <!--category(Kategori)-->
                    <div class="form-group">
                        <label>Kategoriler</label>
                        <select name="categories_id" id="category" class="form-control" disabled>
                            <?php foreach ($categories as $category) { ?>
                                <option value="<?php echo $category->id;?>"><?php echo $category->category_name;?></option>
                            <?php } ?>
                        </select>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("categories_id"); ?></small>
                        <?php } ?>
                        </label>
                    </div>

                    <!--category(Kategori)END-->


                </div>

                <div class="col-md-4">
                    <!--material(Malzeme)-->
                    <div class="form-group">
                        <label>Malzeme</label>
                        <select name="material_id" id="material" class="form-control" disabled >
                            <?php foreach ($materials as $material) { ?>
                                <option value="<?php echo $material->material_name;?>"><?php echo $material->material_name;?></option>
                            <?php } ?>

                        </select>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("material"); ?></small>
                        <?php } ?>
                        </label>
                    </div>
                    <!--material(Malzeme)END-->

                    <!--Bulb(Ampül Sayısı)-->
                    <div class="form-group">
                        <label>Ampül Sayısı</label>
                        <select name="bulb_id" id="bulb" class="form-control" disabled >
                            <?php foreach ($bulbs as $bulb) { ?>
                                <option value="<?php echo $bulb->id;?>"><?php echo $bulb->bulb_name;?></option>
                            <?php } ?>
                        </select>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("bulb"); ?></small>
                        <?php } ?>
                        </label>
                    </div>
                    <!--Bulb(Ampül Sayısı)END-->

                    <!--usage_area(Kullanım Alanı)-->
                    <div class="form-group">
                        <label>Kullanım Alanı</label>
                        <select name="usage_area_id" id="usage_area" class="form-control" disabled >
                            <?php foreach ($usageAreas as $usageArea) { ?>
                                <option value="<?php echo $usageArea->id;?>"><?php echo $usageArea->area_name;?></option>
                            <?php } ?>
                        </select>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("usage_area"); ?></small>
                        <?php } ?>
                        </label>
                    </div>
                    <!--usage_area(Kullanım Alanı)END-->

                    <!--color(Renk)-->
                    <div class="form-group">
                        <label>Renkler</label>
                        <select name="color_id" id="color" class="form-control" disabled  >
                            <?php foreach ($colors as $color) { ?>
                                <option value="<?php echo $color->id;?>"><?php echo $color->color_name;?></option>
                            <?php } ?>
                        </select>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("color"); ?></small>
                        <?php } ?>
                        </label>
                    </div>
                    <!--color(Renk)END-->

                    <!--depo(depo)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Stok Adeti</label>
                        <input type="text" class="form-control" name="depo" value="<?php echo $item->depo;?>"  placeholder="Lütfen Stok Adetini Girin" disabled>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("depo"); ?></small>
                        <?php } ?>
                    </div>
                    <!--depo(depo)END-->

                </div>

                <div class="col-md-4">
                    <!--desc(Açıklama)-->
                    <div class="form-group">
                        <label>Ürün Açıklaması ve İçerik Bilgisi</label>
                        <textarea id="editor1" name="description" rows="10" cols="80" disabled><?php echo $item->description;?></textarea>
                    </div>
                    <!--desc(Açıklama)END-->
                </div>

                <div class="col-md-2">
                    <!--en(en)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">En</label>
                        <input type="text" class="form-control" name="width" value="<?php echo $item->width;?>" placeholder="CM" disabled>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("width"); ?></small>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-md-2">
                    <!--boy(boy)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Boy</label>
                        <input type="text" class="form-control" name="height" value="<?php echo $item->height;?>"  placeholder="CM" disabled>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("height"); ?></small>
                        <?php } ?>
                    </div>
                    <!--boy(boy)END-->
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Yükseklik</label>
                        <input type="text" class="form-control" name="length" value="<?php echo $item->length;?>" placeholder="CM"disabled>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("length"); ?></small>
                        <?php } ?>
                    </div>
                    <!--boy(boy)END-->
                </div>


            </div>
            <div class="box-footer">
                <button type="submit" class="btn btn-primary">Güncelle</button>
                <a href="<?php echo base_url("product"); ?>" class="btn btn-danger">İptal</a>
            </div>
        </form>
    </div>
</div>
