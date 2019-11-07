<section class="newproduct bgwhite p-t-45 p-b-105">
    <div class="container">
        <div class="sec-title p-b-60">
            <h3 class="m-text5 t-center">
                Diğer Ürünler
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
                                     <b style="color: #FF6C00; font-size: 15px; text-align: center;"><?php echo $product->price;?> TL<small></small></b>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>


    </div>
</section>


