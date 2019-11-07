<div class="box">
    <div class="box-header">
        <h3 class="box-title">
            <?php echo "<b>$item->product_name</b> kaydını düzenliyorsunuz";?>
        </h3>
    </div>
    <div class="box-body">

        <form action="<?php echo base_url("product/update/$item->id");?>" method="post">
            <div class="box-body">

                <div class="col-md-4">
                    <!--product_name(ürün adı)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Ürün Adı</label>
                        <input type="text" class="form-control" name="product_name" value="<?php echo $item->product_name;?>" placeholder="Lütfen Eklemek İstediğini Ürün Adını Girin">
                       <?php if (isset($form_error)){ ?>
                           <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("product_name"); ?></small>
                        <?php } ?>

                    </div>
                    <!--product_name(ürün adı)END-->

                    <!--price(fiyat)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Fiyatı</label>
                        <input type="text" class="form-control" name="price" value="<?php echo $item->price;?>" placeholder="Lütfen Eklemek İstediğini Ürünün Fiyatını Giriniz">
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("price"); ?></small>
                        <?php } ?>
                    </div>
                    <!--price(fiyat)END-->

                    <!--stock_code(stok kodu)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Stok Kodu</label>
                        <input type="text" class="form-control" name="stock_code" value="<?php echo $item->stock_code;?>" placeholder="Lütfen Eklemek İstediğiniz Stok Kodunu Girin">
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("stock_code"); ?></small>
                        <?php } ?>
                    </div>
                    <!--stock_code(stok kodu)END-->

                    <!--stock_code(stok durumu)-->
                    <div class="form-group">
                        <label>Stok Durumu</label>
                        <select name="stock_status" id="stock_status" value="<?php echo $item->stock_status;?>" class="form-control"  >
                            <option value="">Lütfen Bir Stok Durumu Seçiniz</option>
                            <option value="Var">Var</option>
                            <option value="Yok">Yok</option>
                            <option value="Üretim">Üretim Aşamasında</option>
                        </select>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("stock_code"); ?></small>
                        <?php } ?>
                        </label>
                    </div>
                    <!--stock_code(stok durumu)END-->

                    <!--category(Kategori)-->
                    <div class="form-group">
                        <label>Kategoriler</label>
                        <select name="category" id="category" value="<?php echo $item->category;?>" class="form-control"  >
                            <option value="">Lütfen Bir Kategori Seçiniz</option>
                            <option value="Avize">Avize</option>
                            <option value="Lambader">Lambader</option>
                            <option value="MasaLambası">Masa Lambası</option>
                            <option value="Ahsap Avize">Ahsap Avize</option>
                            <option value="İthal Avize">İthal Avize</option>
                        </select>
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("category"); ?></small>
                        <?php } ?>
                        </label>
                    </div>
                    <!--category(Kategori)END-->

                </div>

                <div class="col-md-4">
                    <!--material(Malzeme)-->
                    <div class="form-group">
                        <label>Malzeme</label>
                        <select name="material" id="material" value="<?php echo $item->material;?>" class="form-control"  >
                            <option value="">Lütfen Bir Malzeme Seçiniz</option>
                            <option value="Cam">Cam</option>
                            <option value="Ahşap">Ahşap</option>
                            <option value="Metal">Metal</option>
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
                        <select name="bulb" id="bulb" value="<?php echo $item->bulb;?>" class="form-control"  >
                            <option value="">Lütfen Bir Değer Giriniz</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
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
                        <select name="usage_area" id="usage_area" value="<?php echo $item->usage_area;?>" class="form-control"  >
                            <option value="">Lütfen Bir Kullanım Alanı Seçiniz</option>
                            <option value="Salon">Salon</option>
                            <option value="Oturma Odası">Oturma Odası</option>
                            <option value="Yemek Odası">Yemek Odası</option>
                            <option value="Çalışma Odası">Çalışma Odası</option>
                            <option value="Çoçuk Odası">Çoçuk Odası</option>
                            <option value="Mutfak">Mutfak</option>
                            <option value="Balkon-Bahçe">Balkon-Bahçe</option>
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
                        <select name="color" id="color" value="<?php echo $item->color;?>" class="form-control"  >
                            <option value="">Lütfen Bir Ürün Rengi Seçiniz</option>
                            <option value="Siyah">Siyah</option>
                            <option value="Beyaz">Beyaz</option>
                            <option value="Mavi">Mavi</option>
                            <option value="Yeşil">Yeşil</option>
                            <option value="Turuncu">Turuncu</option>
                            <option value="Altın">Altın</option>
                            <option value="Bakır">Bakır</option>
                            <option value="Kırmızı">Kırmızı</option>
                            <option value="Kahverengi">Kahverengi</option>
                            <option value="Gümüş">Gümüş</option>
                            <option value="Krem">Krem</option>
                            <option value="Şampanya">Şampanya</option>
                            <option value="Eskitme">Eskitme</option>
                            <option value="Krom">Krom</option>
                            <option value="Pembe">Pembe</option>
                            <option value="Mürdüm">Mürdüm</option>
                            <option value="Platin">Platin</option>
                            <option value="Sarı">Sarı</option>
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
                        <input type="text" class="form-control" name="depo" value="<?php echo $item->depo;?>" placeholder="Lütfen Stok Adetini Girin">
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
                        <textarea id="editor1" name="description" rows="10" cols="80">
                            <?php echo $item->description;?>
                        </textarea>

                    </div>
                    <!--desc(Açıklama)END-->
                </div>

                <div class="col-md-2">
                    <!--en(en)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">En</label>
                        <input type="text" class="form-control" name="width" value="<?php echo $item->width;?>" placeholder="CM">
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"> <?php echo form_error("width"); ?></small>
                        <?php } ?>
                    </div>
                </div>

                <div class="col-md-2">
                    <!--boy(boy)-->
                    <div class="form-group">
                        <label for="exampleInputEmail1">Boy</label>
                        <input type="text" class="form-control" name="height" value="<?php echo $item->height;?>" placeholder="CM">
                        <?php if (isset($form_error)){ ?>
                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("height"); ?></small>
                        <?php } ?>
                    </div>
                    <!--boy(boy)END-->
                </div>

                <div class="col-md-2">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Yükseklik</label>
                        <input type="text" class="form-control" name="length"  value="<?php echo $item->length;?>" placeholder="CM">
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
