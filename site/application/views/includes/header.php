<?php $settings = get_settings();?>
<!-- Header -->
<header class="header1">
    <!-- Header desktop -->
    <div class="container-menu-header">
        <div class="topbar">
            <div class="topbar-social">
                <a href="<?php echo $settings->facebook;?>" class="topbar-social-item fa fa-facebook"></a>
                <a href="<?php echo $settings->instagram;?>" class="topbar-social-item fa fa-instagram"></a>
                <a href="<?php echo base_url("");?>" class="topbar-social-item fa fa-youtube-play"></a>
            </div>

                <span class="topbar-child1">
					2020 Katalogumuz Çıkmıştır !
				</span>


            <div class="topbar-child2">
					<span class="topbar-email">
						<?php echo $settings->email;?>
					</span>
            </div>
        </div>
        <div class="wrap_header">
            <!-- Logo -->
            <a href="<?php echo base_url("");?>" class="logo">
                <img src="<?php echo base_url("assets");?>/images/icons/logo.png" alt="IMG-LOGO">
            </a>



            <!-- Menu -->
            <div class="wrap_menu">
                <nav class="menu">
                    <ul class="main_menu">
                        <li>
                            <a href="<?php echo base_url("");?>">Ana Sayfa</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url("urun-listesi");?>">Ürünler</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url("kataloglar");?>">Kataloglar</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url("hakkimizda");?>">Hakkımızda</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url("iletisim");?>">İletişim</a>
                        </li>

                        <!--

                        <li>
                            <a href="https://destek.egesedefavize.com/">Destek</a>
                        </li>

                        -->
                    </ul>
                </nav>
            </div>

            <!-- Header Icon -->
            <div class="header-icons">
                <a href="<?php echo base_url("giris-yap");?>" class="header-wrapicon1 dis-block">
                    <img src="<?php echo base_url("assets");?>/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide1"></span>

                    <a href="<?php echo base_url("sepetim");?>" class="header-wrapicon1 dis-block">
                        <img src="<?php echo base_url("assets");?>/images/icons/icon-header-02.png" class="header-icon1" alt="ICON">
                        <span class="header-icons-noti"><?php echo $kacurunvar; ?></span>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Mobile -->
    <div class="wrap_header_mobile">
        <!-- Logo moblie -->
        <a href="index.html" class="logo-mobile">
            <img src="<?php echo base_url("assets");?>/images/icons/logo.png" alt="IMG-LOGO">
        </a>

        <!-- Button show menu -->
        <div class="btn-show-menu">
            <!-- Header Icon mobile -->
            <div class="header-icons-mobile">
                <a href="#" class="header-wrapicon1 dis-block">
                    <img src="<?php echo base_url("assets");?>/images/icons/icon-header-01.png" class="header-icon1" alt="ICON">
                </a>

                <span class="linedivide2"></span>

                <div class="header-wrapicon2">
                    <img src="<?php echo base_url("assets");?>/images/icons/icon-header-02.png" class="header-icon1 js-show-header-dropdown" alt="ICON">
                    <span class="header-icons-noti">0</span>

                    <!-- Header cart noti -->
                    <div class="header-cart header-dropdown">
                        <ul class="header-cart-wrapitem">
                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="<?php echo base_url("assets");?>/images/item-cart-01.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        White Shirt With Pleat Detail Back
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $19.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="<?php echo base_url("assets");?>/images/item-cart-02.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Converse All Star Hi Black Canvas
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $39.00
										</span>
                                </div>
                            </li>

                            <li class="header-cart-item">
                                <div class="header-cart-item-img">
                                    <img src="<?php echo base_url("assets");?>/images/item-cart-03.jpg" alt="IMG">
                                </div>

                                <div class="header-cart-item-txt">
                                    <a href="#" class="header-cart-item-name">
                                        Nixon Porter Leather Watch In Tan
                                    </a>

                                    <span class="header-cart-item-info">
											1 x $17.00
										</span>
                                </div>
                            </li>
                        </ul>

                        <div class="header-cart-total">
                            Total: $75.00
                        </div>

                        <div class="header-cart-buttons">
                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="<?php echo base_url("");?>>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    View Cart
                                </a>
                            </div>

                            <div class="header-cart-wrapbtn">
                                <!-- Button -->
                                <a href="<?php echo base_url("");?>>" class="flex-c-m size1 bg1 bo-rad-20 hov1 s-text1 trans-0-4">
                                    Check Out
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="btn-show-menu-mobile hamburger hamburger--squeeze">
					<span class="hamburger-box">
						<span class="hamburger-inner"></span>
					</span>
            </div>
        </div>
    </div>

    <!-- Menu Mobile -->
    <div class="wrap-side-menu" >
        <nav class="side-menu">
            <ul class="main-menu">
                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
						<span class="topbar-child1">
							2020 Katalogumuz Çıkmıştır !
						</span>
                </li>

                <li class="item-topbar-mobile p-l-20 p-t-8 p-b-8">
                    <div class="topbar-child2-mobile">
							<span class="topbar-email">
								<?php echo $settings->email;?>
							</span>
                    </div>
                </li>

                <li class="item-topbar-mobile p-l-10">
                    <div class="topbar-social-mobile">
                        <a href="#" class="topbar-social-item fa fa-facebook"></a>
                        <a href="#" class="topbar-social-item fa fa-instagram"></a>
                        <a href="#" class="topbar-social-item fa fa-youtube-play"></a>
                    </div>
                </li>

                <li class="item-menu-mobile">
                    <a href="<?php echo base_url("");?>">Ana Sayfa</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="<?php echo base_url("urun-listesi");?>">Ürünler</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="<?php echo base_url("kataloglar");?>">Kataloglar</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="<?php echo base_url("hakkimizda");?>">Hakkımızda</a>
                </li>

                <li class="item-menu-mobile">
                    <a href="<?php echo base_url("iletisim");?>">İletişim</a>
                </li>
            </ul>
        </nav>
    </div>
</header>