<?php $settings = get_settings();?>

<!-- Footer -->
<footer class="bg6 p-t-45 p-b-43 p-l-45 p-r-45">
    <div class="flex-w p-b-90">
        <div class="w-size6 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                İletişim
            </h4>
            <div>
                <p class="s-text7 w-size27">
                    <?php echo $settings->adress;?>
                    <br>
                </p>
                <p class="s-text7 w-size27">
                    Telefon :
                    <?php echo $settings->phone;?>
                    <br>
                </p>
                <p class="s-text7 w-size27">
                    Fax :
                    <?php echo $settings->fax;?>
                    <br>
                </p>
                <p class="s-text7 w-size27">
                    Email:
                    <?php echo $settings->email;?>
                </p>

                <p class="s-text7 w-size27">
                    Whatsapp İhbar Hattı:
                    0555 573 25 27
                </p>
            </div>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Kategoriler
            </h4>

            <ul>
                <li class="p-b-9">
                    <a href="<?php echo base_url("urun-listesi");?>" class="s-text7">
                        Avizeler
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="<?php echo base_url("urun-listesi");?>" class="s-text7">
                        Lambader
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="<?php echo base_url("urun-listesi");?>" class="s-text7">
                        Masa Lambası
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="<?php echo base_url("urun-listesi");?>" class="s-text7">
                        Ahşap Avizeler
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size7 p-t-30 p-l-15 p-r-15 respon4">
            <h4 class="s-text12 p-b-30">
                Kısa Yollar
            </h4>


            <ul>
                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        Ara
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="<?php echo base_url("hakkimizda");?>" class="s-text7">
                      Hakkımızda
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        İletişim
                    </a>
                </li>

                <li class="p-b-9">
                    <a href="#" class="s-text7">
                        İade
                    </a>
                </li>
            </ul>
        </div>

        <div class="w-size8 p-t-30 p-l-15 p-r-15 respon3">
            <h4 class="s-text12 p-b-30">
                Hakkımızda
            </h4>
            <p>
                <?php echo $settings->about_us;?>
            </p>
            <hr>
            <h4 class="s-text12">
                Sosyal Medya
            </h4>
            <div class="flex-m p-t-30">
                <a href="<?php echo $settings->facebook;?>" class="fs-18 color1 p-r-20 fa fa-facebook"></a>
                <a href="<?php echo $settings->instagram;?>" class="fs-18 color1 p-r-20 fa fa-instagram"></a>
                <a href="#" class="fs-18 color1 p-r-20 fa fa-twitter"></a>
                <a href="#" class="fs-18 color1 p-r-20 fa fa-linkedin"></a>
            </div>
        </div>
    </div>

    <div class="t-center p-l-15 p-r-15">
        <a href="#">
            <img class="h-size2" src="<?php echo base_url("assets");?>/images/icons/paypal.png" alt="IMG-PAYPAL">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php echo base_url("assets");?>/images/icons/visa.png" alt="IMG-VISA">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php echo base_url("assets");?>/images/icons/mastercard.png" alt="IMG-MASTERCARD">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php echo base_url("assets");?>/images/icons/express.png" alt="IMG-EXPRESS">
        </a>

        <a href="#">
            <img class="h-size2" src="<?php echo base_url("assets");?>/images/icons/discover.png" alt="IMG-DISCOVER">
        </a>

        <div class="t-center s-text8 p-t-20">
            Tüm Hakları Saklıdır © <?php echo date("Y");?> | Ege Sedef Aydınlatma
        </div>


    </div>


</footer>



<!-- Back to top -->
<div class="btn-back-to-top bg0-hov" id="myBtn">
		<span class="symbol-btn-back-to-top">
			<i class="fa fa-angle-double-up" aria-hidden="true"></i>
		</span>
</div>

<!-- Container Selection1 -->
<div id="dropDownSelect1"></div>
