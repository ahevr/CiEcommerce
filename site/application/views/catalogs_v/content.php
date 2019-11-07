
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(https://picsum.photos/id/190/1920/400);">
    <h2 class="l-text2 t-center">
        Kataloglar
    </h2>
</section>


<section>
    <div class="album py-5 bg-light">
        <div class="container">
            <div class="row">
                <?php foreach ($catalogs as $key) { ?>
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <div class="hov-img-zoom">
                                <img class="card-img-top" src="<?php echo base_url("panel/uploads/catalogs_v/$key->img_url");?>">
                            </div>
                            <div class="card-body">
                                <header>
                                    <p class="card-text text-center"><?php echo $key->catalog_name;?></p>
                                </header>
                                <hr>
                                <br>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a href="<?php echo base_url("katalog-detay/$key->url");?>" class="btn btn-sm btn-outline-secondary">İncele</a>
                                    </div>
                                    <div class="btn-group">
                                        <a href="<?php echo base_url("site/panel/uploads/catalog_v/$key->url");?>"
                                           class="btn btn-sm btn-outline-secondary"
                                           download="">
                                            İndir
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</section>