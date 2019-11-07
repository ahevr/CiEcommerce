
<div class="box">
        <div class="box-header">
            <h3 class="box-title">Slider Listesi</h3>
            <a href="<?php echo base_url("slides/new_form");?>" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a>
        </div>
        <div class="box-body">
            <?php if (empty($items)) { ?>

            <div class="callout callout-danger text-center">
                <h4>Kayıt Bulunamadı!</h4>
                <p>Burada herhangi bir veri bulunamadı. Eklemek için lütfen <a href="<?php echo base_url("slides/new_form");?>">tıklayınız</a></p>
            </div>
            <?php } else { ?>
            <table id="table" class="table table-hover table-bordered table-striped">
                <thead>
                <tr>
                    <th style="text-align: center;">#id</th>
                    <th style="text-align: center;">Başlık</th>
                    <th style="text-align: center;">Açıklama</th>
                    <th style="text-align: center;">İşlem</th>
                    <th style="text-align: center;">Durumu</th>
                </tr>
                </thead>
                <tbody style="text-align: center">

                    <?php foreach ($items as $item ) { ?>

                        <tr>
                            <td>#<?php echo $item->id;?></td>
                            <td><?php echo $item->title;?></td>
                            <td><?php echo $item->description;?></td>
                            <td>
                                <input
                                        class="toggle_event"
                                        type="checkbox"
                                        data-toggle="toggle"
                                        data-size="small"
                                        data-onstyle="success"
                                        data-size ="mini"
                                        data-on="Aktif"
                                        data-off="Pasif"
                                        data-offstyle="danger"
                                        dataID="<?php echo $item->id;?>"
                                    <?php echo ($item->isActive == 1) ? "checked" : "";?>
                                />
                            </td>
                            <td>
                                <button data-url="<?php echo base_url("slides/delete/$item->id");?>" class="btn btn-danger btn-sm remove-btn"><i class="fa fa-trash"></i> Sil</button>
                            </td>
                        </tr>
                    <?php }?>
                </tbody>
            </table>
            <?php } ?>
        </div>
</div>
