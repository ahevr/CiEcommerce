<?php $settings = get_settings();?>
<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(https://picsum.photos/id/366/1920/220);">
    <h2 class="l-text2 t-center">
       İletişim
    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-30">
                <div class="p-r-20 p-r-0-lg">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3130.4680346141668!2d27.1439223156038!3d38.31499118866674!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14bbdfdeecdc63ab%3A0x2bc1578c688da4d9!2sSedef%20Avize!5e0!3m2!1str!2str!4v1569506549315!5m2!1str!2str" width="550" height="550" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <form class="leave-comment" role="form" method="post" action="<?php echo base_url("mesaj-gonder");?> ">
                    <h4 class="m-text26 p-b-36 p-t-15">
                        Bize Yazın...
                    </h4>
                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="name" placeholder="Adınız ve Soyadınız">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="phone-number" placeholder="Telefon Numaranız">
                    </div>

                    <div class="bo4 of-hidden size15 m-b-20">
                        <input class="sizefull s-text7 p-l-22 p-r-22" type="text" name="email" placeholder="Email Adresiniz">
                    </div>

                    <textarea class="dis-block s-text7 size20 bo4 p-l-22 p-r-22 p-t-13 m-b-20" name="message" placeholder="Mesajınız"></textarea>

                    <div class="row">
                        <div class="col-md-3">
                            <?php echo $captcha["image"];?>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="captcha" placeholder="Doğrulama Kodu">
                        </div>
                    </div>
                    <div class="w-size25">
                        <!-- Button -->
                        <button class="flex-c-m size2 bg1 bo-rad-23 hov1 m-text3 trans-0-4">
                            Gönder
                         </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<hr>

<section class="bgwhite p-t-66 p-b-60">
    <div class="container">
        <div class="row">
            <div class="col-md-6 p-b-30">
                <h4 class="m-text26 p-b-36 p-t-15">
                   İletişim Bİlgileri
                </h4>
                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Adres Bilgileri
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            <?php echo $settings->adress;?>
                        </p>
                    </div>
                </div>


                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Telefonlar
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            Müşteri Hizmetleri : 0232 253 95 03
                        <hr>
                        <p class="s-text8">
                            Muhasebe :  0555 573 25 27
                        </p>
                        <hr>
                        <p class="s-text8">
                            İnternet Alışverişleri Destek Hattı : 0555 573 25 27
                        </p>
                        </p>

                    </div>
                </div>

                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        E Posta Adresleri
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <p class="s-text8">
                            <?php echo $settings->email;?>
                        </p>
                        <hr>
                        <p class="s-text8">
                            destek@egesedefavize.com
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-md-6 p-b-30">
                <h4 class="m-text26 p-b-36 p-t-15">
                    &nbsp;
                </h4>

                <div class="wrap-dropdown-content bo6 p-t-15 p-b-14 dropdown-content">
                    <h5 class="js-toggle-dropdown-content flex-sb-m cs-pointer m-text19 color0-hov trans-0-4">
                        Kırık Gelen Parçalar için
                        <i class="down-mark fs-12 color1 fa fa-minus dis-none" aria-hidden="true"></i>
                        <i class="up-mark fs-12 color1 fa fa-plus" aria-hidden="true"></i>
                    </h5>

                    <div class="dropdown-content dis-none p-t-15 p-b-23">
                        <hr>
                        <p class="s-text8">
                           Kırık Gelen Parçaları Aşağıdaki Formu Doldururak Tarafımıza Ulaştırabilirsiniz
                            <br>
                            <a href="https://destek.egesedefavize.com" target="_blank"><b>Destek Paneli</b></a> Tıklayarak Ulaşabilirsiniz
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>