<?php $user = get_active_user();?>
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url("assets");?>/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p><?php echo $user->full_name;?></p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- search form -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search...">
                <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form -->
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">

            <li class="header">MAIN NAVIGATION</li>
            <!--anasayfa-->
            <li class="treeview">
            <li><a href="<?php echo base_url("");?>"><i class="fa fa-dashboard"></i>Dashboard</a>
            </li>
            <!--anasayfa-->


            <!--ürünler-->
            <li class="treeview">
            <li><a href="<?php echo base_url("product");?>"><i class="fa fa-bomb"></i>Ürünler</a></li>

            <!--ürünler-->

            <!--kategoriler-->
            <li class="treeview">

            </li>
            <!--kategoriler-->

            <!--Slider-->
            <li class="treeview">
            <li><a href="<?php echo base_url("slides");?>"><i class="fa fa-youtube"></i>Slider</a></li>
            </li>
            <!--Slider-->

            <!--Haberler-->
            <li class="treeview">
            <li><a href="<?php echo base_url("catalogs");?>"><i class="fa fa-newspaper-o"></i>Kataloglar</a></li>
            </li>
            <!--Haberler-->

            <!--Temsilciler-->
            <li class="treeview">
                <a href="#">
                    <i class="fa  fa-odnoklassniki"></i>
                    <span>Temsilciler</span>
                </a>
            </li>
            <!--Temsilciler-->

            <!--kullanıcılar-->
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-users"></i> <span>Kullanıcılar</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url("users");?>"><i class="fa fa-circle-o"></i>Personel</a></li>
                    <li><a href="<?php echo base_url("");?>"><i class="fa fa-circle-o"></i>Müşteriler</a></li>
                </ul>
            </li>
            <!--kullanıcılar-->

            <!--Ayarlar-->
            <li class="treeview">
            <li><a href="<?php echo base_url("settings");?>"><i class="fa fa-cogs"></i> Site Ayarları</a></li>
            </li>
            <!--Ayarlar-->

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-wrench"></i> <span>Ürün Seçenekleri</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?php echo base_url("stocks");?>"><i class="fa fa-info-circle"></i>Stok Durumu</a></li>
                    <li><a href="<?php echo base_url("categories");?>"><i class="fa fa-folder-open-o"></i>Kategoriler</a></li>
                    <li><a href="<?php echo base_url("materials");?>"><i class="fa fa-cubes"></i>Malzeme</a></li>
                    <li><a href="<?php echo base_url("bulbs");?>"><i class="fa fa-lightbulb-o"></i>Ampül Sayısı</a></li>
                    <li><a href="<?php echo base_url("usagearea");?>"><i class="fa fa-building"></i>Kullanım Alanı</a></li>
                    <li><a href="<?php echo base_url("colors");?>"><i class="fa fa-paint-brush"></i>Renkler</a></li>

                </ul>
            </li>








            <!--popups-->
            <li class="treeview">
            <li><a href="<?php echo base_url("popups");?>"><i class="fa fa-podcast"></i> PopUps Modülü</a></li>
            </li>
            <!--popups-->
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>