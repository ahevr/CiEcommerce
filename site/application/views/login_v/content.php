<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(https://picsum.photos/id/350/1920/340);">
    <h2 class="l-text2 t-center">
        Giriş Yap
    </h2>
</section>

<p class="text-center">
    <b><?php echo $this->session->flashdata('inf');?></b>
</p>
<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">
            <div class="container">
                <div class="row">
                    <div id="content" class="col-sm-12">
                        <!-- Yeni Müşteri  -->
                        <div class="row">
                            <div class="alert alert-danger" style="display:none;">
                                <i class="fa fa-exclamation-circle"></i>
                                E-Posta Adresi ve / veya Şifre ile eşleşmiyor.
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="well">
                                    <h2>Yeni Üye</h2>
                                    <br>
                                    <p><strong>Kayıt Ol</strong></p>
                                    <p>Bir hesap oluşturarak daha hızlı alışveriş yapabilir, bir siparişin durumunu takip edebilir ve daha önce yapmış olduğunuz siparişleri takip edebilirsiniz..</p>
                                    <br>
                                    <a href="<?php echo base_url("kayit-ol");?>" id"="button-account" class="btn btn-primary">Kayıt Ol</a>
                                </div>
                            </div>
                            <!-- Yeni Müşteri END  -->

                            <div class="col-sm-6">
                                <div class="well">
                                    <h2>Giriş Yap</h2>
                                    <br>

                                    <form method="post" action="<?php echo base_url("home/do_login");?>">
                                        <div class="form-group">
                                            <label class="control-label" for="customer_email">Email</label>
                                            <input type="text" name="email"  placeholder="Email" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label" for="customer_password">Şifre</label>
                                            <input class="form-control" type="password" name="password" placeholder="Şifre">
                                            <br>
                                            <a rel="nofollow" href="#">Şifremi Unuttum?</a>
                                        </div>
                                        <p class="submit">
                                            <input type="submit" value="Giriş Yap" class="btn btn-primary">
                                        </p>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Müşteri Giriş END -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>