<section class="banner bgwhite p-t-40 p-b-40">
        <div class="container">
            <hr>
            <div class="sec-title p-b-60">
                <h3 class="m-text5 t-center">
                    Kategoriler
                </h3>
            </div>
            <div class="row">
                <?php foreach ($categories as $banner) { ?>
                    <div class="col-sm-10 col-md-8 col-lg-4 m-l-r-auto">
                        <div class="block1 hov-img-zoom pos-relative m-b-30">
                            <img src="<?php echo base_url("panel/uploads/categories_v/$banner->img_url");?>" alt="IMG-PRODUCT">
                            <div class="block1-wrapbtn w-size2">
                                    <a href="<?php echo base_url('kategoriler/'.$banner->url);?>" class="flex-c-m size2 m-text2 bg3 hov1 trans-0-4">
                                        <?php echo $banner->category_name;?>
                                    </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
</section>