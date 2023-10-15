    <!-- page-title -->
    <section class="page-title" style="background-image: url(<?= base_url('assets/') ?>images/background/pagetitle-bg.png);">
        <div class="anim-icons">
            <div class="icon icon-1"><img src="<?= base_url('assets/') ?>images/icons/anim-icon-17.png" alt=""></div>
            <div class="icon icon-2 rotate-me"><img src="<?= base_url('assets/') ?>images/icons/anim-icon-18.png" alt=""></div>
            <div class="icon icon-3 rotate-me"><img src="<?= base_url('assets/') ?>images/icons/anim-icon-19.png" alt=""></div>
            <div class="icon icon-4"></div>
        </div>
        <div class="container">
            <div class="content-box clearfix">
                <div class="title-box pull-left">
                    <h1>Profile</h1>
                    <p>Halaman ini berisi tentang profil kami.</p>
                </div>
                <!-- <ul class="bread-crumb pull-right">
                    <li>About</li>
                    <li><a href="index.html">Home</a></li>
                </ul> -->
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- our-history -->
    <section class="our-history">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div id="content_block_53">
                        <div class="content-box wow fadeInLeft" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="sec-title"><h2>Our Profile</h2></div>
                            <div class="text">
                                <p><?= $setting['profile_desc']?></p>
                            </div>
                            <!-- <h5>M. Ronica, CEO Colin.</h5>
                            <figure class="signatur"><img src="<?= base_url('assets/') ?>images/icons/signatur.png" alt=""></figure> -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                    <div id="image_block_47">
                        <div class="image-box js-tilt">
                            <figure class="image wow slideInRight" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="<?= base_url('assets/images/'.$setting['profile_image'])?>" alt=""></figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our-history end -->