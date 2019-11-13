<?php if (empty($item_images)) { ?>
    <div class="callout callout-danger text-center">
        <h4>Kayıt Bulunamadı!</h4>
        <p>Burada herhangi bir fotoğraf bulunamadı</a></p>
    </div>
<?php } else { ?>
    <table class="table table-striped table-bordered table-hover ">
        <thead>
        <th class="text-center">#id</th>
        <th class="text-center">Fotoğraf</th>
        <th class="text-center">Fotoğraf Adı</th>
        <th class="text-center">İşlem</th>
        </thead>
        <tbody>
        <?php foreach ($item_images as $image){ ?>
            <tr>
                <td style="width: 15px;"class="text-center"><?php echo $image->id;?></td>
                <td style="width: 20px;">
                    <img width="100"
                         src="<?php echo get_picture($viewFolder,$image->img_url,"600x800");?>"
                         alt="<?php echo $image->img_url;?>"
                         class="img responsive">
                </td>
                <td class="text-center" style="width: 400px;"><?php echo $image->img_url;?></td>
                <td style="width: 100px;">
                    <button data-url="<?php echo base_url("product/imageDelete/$image->id/$image->product_id");?>" class="btn btn-danger btn-sm btn-block remove-btn"><i class="fa fa-trash"></i> Sil</button>
                </td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
<?php } ?>