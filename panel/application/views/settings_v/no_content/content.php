<div class="box">
        <div class="box-header">
            <h3 class="box-title">Site Ayarları</h3>
            <a href="<?php echo base_url("settings/new_form");?>" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a>
        </div>
        <div class="box-body">
            <?php if (empty($items)) { ?>
                <div class="callout callout-danger text-center">
                    <h4>Kayıt Bulunamadı!</h4>
                    <p>Burada herhangi bir veri bulunamadı. Eklemek için lütfen <a href="<?php echo base_url("settings/new_form");?>">tıklayınız</a></p>
                </div>
            <?php } ?>
        </div>
</div>
