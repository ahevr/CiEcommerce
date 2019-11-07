<div class="box">
    <div class="box-header">
        <h3 class="box-title">Yeni Kullanıcı Ekle</h3>
    </div>
    <div class="box-body">
        <form action="<?php echo base_url("settings/save"); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-12">
                    <div class="nav-tabs-custom">
                        <ul class="nav nav-tabs">
                            <li><a href="#site"       data-toggle="tab">Site Bilgileri</a></li>
                            <li><a href="#adres"      data-toggle="tab">Adres</a></li>
                            <li><a href="#hakkımızda" data-toggle="tab">Hakkımızda</a></li>
                            <li><a href="#misyon"     data-toggle="tab">Misyon</a></li>
                            <li><a href="#vizyon"     data-toggle="tab">Vizyon</a></li>
                            <li><a href="#SosyalMedya"data-toggle="tab">Sosyal Medya</a></li>
                        </ul>
                        <div class="tab-content">
                            <div class="active tab-pane" id="site">
                                <div class="row">
                                    <div class="form-group">
                                        <label>Şirket Adı</label>
                                        <input class="form-control" placeholder="Şirketin ya da Sitenizin adı"
                                               name="company_name"
                                               value="<?php echo isset($form_error) ? set_value("company_name") : $item->company_name; ?>">
                                        <?php if (isset($form_error)) { ?>
                                            <small
                                                    class="pull-right input-form-error"> <?php echo form_error("company_name"); ?></small>
                                        <?php } ?>
                                    </div>
                                </div>



                                <div class="row">
                                    <div class="form-group">
                                        <label>Telefon</label>
                                        <input class="form-control" placeholder="Telefon numaranız"
                                               name="phone"
                                               value="<?php echo isset($form_error) ? set_value("phone") : $item->phone; ?>">
                                        <?php if (isset($form_error)) { ?>
                                            <small
                                                    class="pull-right input-form-error"> <?php echo form_error("phone"); ?></small>
                                        <?php } ?>
                                    </div>

                                </div>

                                <div class="row">
                                    <div class="form-group">
                                        <label>Fax</label>
                                        <input class="form-control" placeholder="Fax numaranız"
                                               name="fax"
                                               value="<?php echo isset($form_error) ? set_value("fax") : $item->fax; ?>">
                                        <?php if (isset($form_error)) { ?>
                                            <small
                                                    class="pull-right input-form-error"> <?php echo form_error("fax"); ?></small>
                                        <?php } ?>
                                    </div>

                                </div>
                            </div>
                            <div class="tab-pane" id="adres">
                                <div class="row">
                                    <label>Adres Bilgisi</label>
                                    <form>
                                        <textarea name="adress" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                             <?php echo isset($form_error) ? set_value("adress") : $item->adress; ?>
                                        </textarea>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="hakkımızda">
                                <div class="row">
                                    <label>Hakkımızda</label>
                                    <form>
                                        <textarea name="about_us" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                            <?php echo isset($form_error) ? set_value("about_us") : $item->about_us; ?>
                                        </textarea>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="misyon">
                                <div class="row">
                                    <label>Misyon</label>
                                    <form>
                                        <textarea name="mission" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                            <?php echo isset($form_error) ? set_value("mission") : $item->mission; ?>
                                        </textarea>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="vizyon">
                                <div class="row">
                                    <label>Vizyon</label>
                                    <form>
                                        <textarea name="vision" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                            <?php echo isset($form_error) ? set_value("vision") : $item->vision; ?>
                                        </textarea>
                                    </form>
                                </div>
                            </div>
                            <div class="tab-pane" id="SosyalMedya">
                                <div class="row">
                                    <div class="form-group col-md-8 ">
                                        <label for="exampleInputEmail1">Email Adresi</label>
                                        <input type="text" class="form-control" name="email"  value="<?php echo isset($form_error) ? set_value("email") : $item->email; ?>">
                                        <?php if (isset($form_error)){ ?>
                                            <small style="color:#ff6c00; font-size: 13px;" class="pull-right"><?php echo form_error("email"); ?></small>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>Facebook</label>
                                        <input class="form-control" placeholder="Facebook Adresi"
                                               name="facebook"
                                               value="<?php echo isset($form_error) ? set_value("facebook") : $item->facebook; ?>">
                                        <?php if (isset($form_error)) { ?>
                                            <small
                                                    class="pull-right input-form-error"> <?php echo form_error("facebook"); ?></small>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Twitter</label>
                                        <input class="form-control" placeholder="Twitter Adresi"
                                               name="twitter"
                                               value="<?php echo isset($form_error) ? set_value("twitter") : $item->twitter; ?>">
                                        <?php if (isset($form_error)) { ?>
                                            <small
                                                    class="pull-right input-form-error"> <?php echo form_error("twitter"); ?></small>
                                        <?php } ?>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-4">
                                        <label>İnstagram</label>
                                        <input class="form-control" placeholder="İnstagram Adresiniz"
                                               name="instagram"
                                               value="<?php echo isset($form_error) ? set_value("instagram") : $item->instagram; ?>">
                                        <?php if (isset($form_error)) { ?>
                                            <small
                                                    class="pull-right input-form-error"> <?php echo form_error("instagram"); ?></small>
                                        <?php } ?>
                                    </div>

                                    <div class="form-group col-md-4">
                                        <label>Linkedin</label>
                                        <input class="form-control" placeholder="Linkedin Adresiniz"
                                               name="linkedin"
                                               value="<?php echo isset($form_error) ? set_value("linkedin") : ""; ?>">
                                        <?php if (isset($form_error)) { ?>
                                            <small
                                                    class="pull-right input-form-error"> <?php echo form_error("linkedin"); ?></small>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kaydet</button>
                    <a href="<?php echo base_url("settings"); ?>" class="btn btn-danger">İptal</a>
        </form>
    </div>
</div>
</div>
</div>
