<!-- Title Page -->
<section class="bg-title-page p-t-40 p-b-50 flex-col-c-m" style="background-image: url(https://picsum.photos/id/555/1920/400);">
    <h2 class="l-text2 t-center">
        <?php echo $settings->company_name;?>
    </h2>
</section>

<!-- content page -->
<section class="bgwhite p-t-66 p-b-38">
    <div class="container">
        <div class="row">
            <div class="col-md-4 p-b-30">
                <div class="hov-img-zoom">
                    <img src="https://picsum.photos/id/988/720/866" alt="IMG-ABOUT">
                </div>
            </div>

            <div class="col-md-8 p-b-30">
                <h3 class="m-text26 p-t-15 p-b-16">
                   Hakkımızda
                </h3>

                <p class="p-b-28">

                    <?php echo $settings->about_us;?>
                </p>

                <p class="p-b-28">

                <br>
                    <?php echo $settings->mission;?>
                </p>

                <div class="bo13 p-l-29 m-l-9 p-b-10">
                    <p class="p-b-11">

                    <?php echo $settings->vision;?>
                    </p>

                </div>
            </div>
        </div>
    </div>
</section>