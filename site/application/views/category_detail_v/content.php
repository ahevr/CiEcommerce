<!-- Content page -->
<section class="bgwhite p-t-55 p-b-65">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 col-md-4 col-lg-3 p-b-50">
                <div class="leftbar p-r-20 p-r-0-sm">
                    <!--  -->
                    <h4 class="m-text14 p-b-7">
                        Kategoriler
                    </h4>
                    <hr>
                        <ul class="p-b-54">

                             <?php foreach ($categories as $category) { ?>
                               <li class="p-t-4">
                                        <a href="<?php echo base_url('kategoriler/'.$category->url);?>" class="s-text13">
                                            <?php echo $category->category_name;?>
                                        </a>
                                </li>
                            <?php } ?>
                        </ul>
                </div>

                <div class="search-product pos-relative bo4 of-hidden">
                        <input class="s-text7 size6 p-l-23 p-r-50" type="text" name="term" id="search" placeholder="Ürün Ara...">
                    </div>
            </div>
            <div class="col-sm-6 col-md-8 col-lg-9 p-b-50" id="searchdata">
                <!-- Product -->
                <div class="row">
                    <?php foreach ($products as $product) { ?>
                        <div class="col-sm-12 col-md-6 col-lg-4 p-b-50">
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
                                           <b style="font-weight: bold;"><?php echo $product->product_name;?></b>
                                        </a>

                                    <span class="block2-price m-text6 p-r-5">
                                           <?php if ($product->discounted_price > 0) { ?>
                                               <del style="font-size: 20px;"><?php echo $product->price;?> TL</del>
                                               <br>
                                               <div style="color: #ff6c00; font-weight: 800;"><b><?php echo $product->discounted_price;?></b>TL</div>
                                               <div class="discounted-product-list">
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
                    <?php } ?>
                </div>
                <!-- Pagination -->
                <p class="pagination"><?php echo $links;?></p>
            </div>
        </div>
    </div>
</section>




























<style>
    .pagination a , .pagination strong {

        padding: 7px 14px;
        margin-left: 9px;
        text-decoration: none;
        box-shadow: 0px 0px 8px rgba(5,5,5,0.3);
        border-radius: 211px;

    }
</style>




