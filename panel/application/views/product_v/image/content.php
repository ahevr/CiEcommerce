<div class="box">
    <div class="box-body">
        <form data-url="<?php echo base_url("product/refresh_image_list/$item->id");?>" action="<?php echo base_url("product/image_upload/$item->id");?>" id="dropzone" class="dropzone">
            <div class="fallback">
                <input name="file" type="file" multiple />
            </div>
        </form>
    </div>
</div>

<div class="box">
    <div class="box-header">
        <h3 class="box-title"><b><?php echo $item->product_name;?></b> Kaydına Ait Fotoğraflar</h3>
    </div>
    <div class="box-body image_list_container">
        <?php $this->load->view("{$viewFolder}/{$subViewFolder}/render_elements/image_list_v");?>
    </div>
</div>
