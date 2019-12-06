<section class="cart bgwhite p-t-70 p-b-100">
    <div class="container">
        <!-- Cart item -->
        <div class="container-table-cart pos-relative">
            <div class="wrap-table-shopping-cart bgwhite">
                <table class="table-shopping-cart">

                    <?php if (empty($products)){?>

                        <div class="alert alert-danger text-center">Sepetinizde Ürün Bulunmamaktadır</div>

                    <?php } else { ?>


                    <tr class="table-head">

                     <!--   <th class="column-1">Ürün Görseli</th> -->
                        <th class="column-1">Ürün Adı</th>
                        <th class="column-1">Fiyatı</th>
                        <th class="column-1">Adet</th>
                        <th class="column-1">Toplam</th>
                        <th class="column-5">Sepetten Çıkar</th>
                    </tr>


                <?php
                $toplam = 0;
                $adet = 0;
                foreach ($products as $tocart => $key) {$urunugetir = $this->Ayar_model->get(['id'=>$tocart]);?>
                    <tr class="table-row">
                       <!-- <td class="column-1"></td>-->
                        <td class="column-1"><?php echo $urunugetir->product_name;?></td>
                        <td class="column-1"><b> <?php echo $urunugetir->discounted_price;?>TL</b></td>
                        <td class="column-1">
                            <div class="flex-w bo5 of-hidden w-size17">
                                <button class="btn-num-product-down color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-minus" aria-hidden="true"></i>
                                </button>

                                <input class="size8 m-text18 t-center num-product" type="number" name="num-product1" value="<?php echo $key;?>">

                                <button class="btn-num-product-up color1 flex-c-m size7 bg8 eff2">
                                    <i class="fs-12 fa fa-plus" aria-hidden="true"></i>
                                </button>
                            </div>
                        </td>
                        <td class="column-1"><b><?php echo $urunugetir->discounted_price * $key." TL";?></b></td>
                        <td><a href="<?php echo base_url('home/sepettencikar/'.$urunugetir->id);?>" class="btn btn-danger" >Sepetten Çıkar</a></td>

                    </tr>
                <?php
                    $adettoplam = $urunugetir->discounted_price * $key;
                      $toplam+=$adettoplam;

                    $toplammiktar = $key;
                        $adet+=$toplammiktar;

                } ?>

    <tfoot>
    <th colspan="2" class="text-center">
        Toplam Ürün: <span class="color-danger"><?php echo $adet;?></span>
    </th>

    <th colspan="4" class="text-center">
        Toplam Tutar: <span class="color-danger"><?php echo $toplam;?></span>
    </th>
    </tfoot>


                </table>






            </div>
        </div>
        <!-- Total -->
        <div class="col-md-12">
            <hr>
            <br>
            <div class="size15 trans-0-4">
                <!-- Button -->
                <button class="flex-c-m sizefull bg1 bo-rad-23 hov1 s-text1 trans-0-4">
                    Ödeme Yap
                </button>
            </div>
        </div>

        <?php } ?>

    </div>
</section>