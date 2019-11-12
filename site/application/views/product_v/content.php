
<!-- Product Detail -->
<div class="container bgwhite p-t-35 p-b-80">
    <div class="flex-w flex-sb">
        <div class="w-size13 p-t-30 respon5">
            <div class="wrap-slick3 flex-sb flex-w">
                <div class="wrap-slick3-dots"></div>
                    <div class="slick3">
                        <?php foreach ($product_images as $image) { ?>
                            <div class="item-slick3" data-thumb="<?php echo base_url("../panel/uploads/product_v/600x800/$image->img_url");?>">
                                <div class="wrap-pic-w">
                                    <img id="zoom_01" src="<?php echo base_url("../panel/uploads/product_v/600x800/$image->img_url");?>" alt="IMG-PRODUCT">
                                </div>
                            </div>
                        <?php } ?>
                     </div>
            </div>
        </div>
        <div class="w-size14 p-t-30 respon5">

            <div class="container">
                <div class="row product-border">
                    <div class="product">
                        <h4 class="product-detail-name m-text16 p-b-13">
                            <?php echo $product->product_name;?>
                        </h4>
                        <p class="s-text8">
                           <b>Ege Sedef Aydınlatma Güvenceliyle</b>  100 TL ve üzeri alışverişlerde kargo bedava!
                        </p>
                        <span class="m-text17" style="font-weight: 200;">
                                 <?php if ($product->discounted_price > 0) { ?>
                                     <del style="font-size: 20px;"><?php echo $product->price;?> TL</del>
                                     <br>
                                     <div style="color: #ff6c00; font-weight: 800;"><b><?php echo $product->discounted_price;?></b>TL</div>
                                     <div class="discounted self-end">
                                        %
                                        <?php echo $product->discounted_rate;?>
                                        İndirim
                                    </div>
                                 <?php } else { ?>
                                     <?php echo discounted_price;?>
                                 <?php } ?>


                        </span>
                    </div>
                </div>
            </div>











                <div class="p-t-33 p-b-60">
                    <div class="flex-r-m flex-w p-t-10">
                        <div class="w-size16 flex-m flex-w">

                            <div class="flex-w bo5 of-hidden m-r-22 m-t-10 m-b-10">
                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                </button>
                                <input class="size8 m-text18 t-center num-product" type="number" name="qty" value="1">
                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>

                            <div class="btn-addcart-product-detail size9 trans-0-4 m-t-10 m-b-10">

                             <a href="<?php echo base_url("home/sepeteekle/$product->id");?>"  class="flex-c-m size1 bg4 bo-rad-23 hov1 s-text1 trans-0-4">Sepete Ekle</a>

                            </div>

                        </div>
                    </div>
                </div>


            <div class="row">
                <div class="col-md-4">
                    <img style="width: 50px;position: relative;left: 21px;" src="<?php echo base_url("panel/delivery-truck.png");?>">
                    <p>Ücretsiz Kargo</p>
                </div>

                <div class="col-md-4">
                    <img style="width: 50px;position: relative;left: 29px;" src="<?php echo base_url("panel/startup.png");?>">
                    <p>Hızlı Gönderim</p>
                </div>

                <div class="col-md-4">
                    <img style="width: 50px;position: relative;left: 34px;" src="<?php echo base_url("panel/box.png");?>">
                    <p>Kapalı Kutu Ürün</p>
                </div>




            </div>


            <br>
            <br>
                <!--Ürün Açıklamas-->
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 active-dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Ürün Açıklaması
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            <?php echo $product->description;?>
                        </p>
                    </div>
                </div>
                <!--Ürün Açıklamas END-->

                <!--Ürün Özellikler-->
                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Ürün Özellikleri
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td>Kullanılan Malzeme</td>
                                <td><?php echo  get_material_name($product->material_id);?></td>
                            </tr>
                            <tr>
                                <td>Ampül Sayısı</td>
                                <td><?php echo get_bulb($product->bulb_id);?></td>
                            </tr>
                            <tr>
                                <td>Kullanım Alanı</td>
                                <td><?php echo  get_usage_area($product->usage_area_id);?></td>
                            </tr>
                            <tr>
                                <td>Renk</td>
                                <td><?php echo get_color_name($product->color_id);?></td>
                            </tr>
                            <tr>
                                <td>En</td>
                                <td><?php echo $product->width;?></td>
                            </tr>
                            <tr>
                                <td>Boy</td>
                                <td><?php echo $product->height;?></td>
                            </tr><tr>
                                <td>Yükseklik</td>
                                <td><?php echo $product->length;?></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <!--Ürün Özellikleri END-->

                <!--Ürün Bilgileri-->
                <div class="wrap-dropdown-content bo7 p-t-15 p-b-14">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Ürün Bilgileri
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>
                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <table class="table table-bordered table-striped">
                            <tbody>
                            <tr>
                                <td>Stok Kodu</td>
                                <td><?php echo $product->stock_code;?></td>
                            </tr>

                            <tr>
                                <td>Kategori</td>
                                <td><?php echo get_category_name($product->categories_id);?></td>
                            </tr>

                            <tr>
                                <td>Stok Durumu</td>
                                <td><?php echo get_stock_status($product->stock_status_id);?></td>
                            </tr>
                            </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                <!--Ürün Bilgileri END-->
        </div>
    </div>
</div>

<section class="relateproduct bgwhite p-t-45 p-b-138">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Benzer Ürünler
            </h3>
        </div>

        <!-- Slide2 -->
        <div class="wrap-slick2">
            <div class="slick2">
                <?php foreach ($products as $product) { ?>
                <div class="item-slick2 p-l-15 p-r-15">
                        <!-- Block2 -->
                        <div class="block2">
                            <div class="block2-img wrap-pic-w of-hidden pos-relative block2">
                                <?php
                                $image = get_product_cover_image($product->id);

                                $image = ($image) ? base_url("../panel/uploads/product_v/600x800/$image") : base_url("assets/images/item-02.jpg");
                                ?>
                                <img src="<?php echo $image; ?>">
                            </div>

                            <div class="block2-txt p-t-20">
                                <a href="<?php echo base_url("urun-detay/$product->url");?>" class="block2-name dis-block s-text3 p-b-5">
                                    <b style="font-weight: bold; font-size: 15px;"><?php echo $product->product_name;?></b>
                                </a>

                                <span class="block2-price m-text6 p-r-5">
                                     <b style="color: #FF6C00; font-size: 15px; text-align: center;"><?php echo $product->price;?> TL</b>
                                </span>
                            </div>
                        </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>
