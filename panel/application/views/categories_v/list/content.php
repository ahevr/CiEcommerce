
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Kategori Listesi</h3>
        <a href="<?php echo base_url("categories/new_form");?>" class="btn btn-success pull-right"><i class="fa fa-plus"></i> Yeni Ekle</a>
    </div>
    <div class="box-body">
        <?php if (empty($items)) { ?>

            <div class="callout callout-danger text-center">
                <h4>Kayıt Bulunamadı!</h4>
                <p>Burada herhangi bir veri bulunamadı. Eklemek için lütfen <a href="<?php echo base_url("categories/new_form");?>">tıklayınız</a></p>
            </div>
        <?php } else { ?>
            <table id="table" class="table table-hover table-bordered table-striped">
                <thead>
                <tr>
                    <th style="text-align: center;">#id</th>
                    <th style="text-align: center;">Kategori Adı</th>
                    <th style="text-align: center;">Görsel</th>
                    <th style="text-align: center;">İşlem</th>
                    <th style="text-align: center;">Durumu</th>
                </tr>
                </thead>
                <tbody style="text-align: center">

                <?php foreach ($items as $item ) { ?>

                    <tr>
                        <td>#<?php echo $item->id;?></td>
                        <td><?php echo $item->category_name;?></td>
                        <td>
                            <img width="75" src="<?php echo get_picture($viewFolder,$item->img_url,"600x800");?>"
                                 alt=""
                                 class="img-rounded">
                        </td>
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
                            <button data-url="<?php echo base_url("categories/delete/$item->id");?>" class="btn btn-danger btn-sm remove-btn"><i class="fa fa-trash"></i> Sil</button>
                        </td>
                    </tr>
                <?php }?>
                </tbody>
            </table>
        <?php } ?>
    </div>
</div>
