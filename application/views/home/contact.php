    <!-- page-title -->
    <section class="page-title" style="background-image: url(<?= base_url('assets/')?>images/background/pagetitle-bg.png);">
        <div class="anim-icons">
            <div class="icon icon-1"><img src="<?= base_url('assets/')?>images/icons/anim-icon-17.png" alt=""></div>
            <div class="icon icon-2 rotate-me"><img src="<?= base_url('assets/')?>images/icons/anim-icon-18.png" alt=""></div>
            <div class="icon icon-3 rotate-me"><img src="<?= base_url('assets/')?>images/icons/anim-icon-19.png" alt=""></div>
            <div class="icon icon-4"></div>
        </div>
        <div class="container">
            <div class="content-box clearfix">
                <div class="title-box pull-left">
                    <h1>Contact Us</h1>
                    <p>Jika ingin menghubungi kami, silahkan hubungi kontak yang tertera di bawah ini.</p>
                </div>
                <!-- <ul class="bread-crumb pull-right">
                    <li>Contact Us</li>
                    <li><a href="index.html">Home</a></li>
                </ul> -->
            </div>
        </div>
    </section>
    <!-- page-title end -->


    <!-- contact-section -->
    <section class="contact-section">
        <!-- <center>
            <h2><?= $setting['contact_title']?></h2>
        </center>
        <br> -->
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 col-sm-12 offset-lg-1 big-column">
                    <div class="info-content centred">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                                <div class="single-info-box">
                                    <figure class="icon-box"><img src="<?= base_url('assets/')?>images/icons/info-icon-1.png" alt=""></figure>
                                    <h2>Phone</h2>
                                    <!-- <div class="text">Start working with Landrick that can provide everything</div> -->
                                    <div class="phone"><a href="tel:<?= $setting['contact_phone']?>"><?= $setting['contact_phone']?></a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                                <div class="single-info-box">
                                    <figure class="icon-box"><img src="<?= base_url('assets/')?>images/icons/info-icon-1.png" alt=""></figure>
                                    <h2>Fax</h2>
                                    <!-- <div class="text">Start working with Landrick that can provide everything</div> -->
                                    <div class="phone"><a href="tel:<?= $setting['contact_fax']?>"><?= $setting['contact_fax']?></a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                                <div class="single-info-box">
                                    <figure class="icon-box"><img src="<?= base_url('assets/')?>images/icons/info-icon-2.png" alt=""></figure>
                                    <h2>E-mail</h2>
                                    <!-- <div class="text">Start working with Landrick that can provide everything</div> -->
                                    <div class="phone"><a href="mailto:<?= $setting['contact_email']?>"><?= $setting['contact_email']?></a></div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-12 info-column">
                                <div class="single-info-box">
                                    <figure class="icon-box"><img src="<?= base_url('assets/')?>images/icons/info-icon-3.png" alt=""></figure>
                                    <h2>Address</h2>
                                    <div class="text"><?= $setting['contact_address']?></div>
                                    <!-- <div class="phone"><a href="#">View on Google map</a></div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact-section end -->


    <!-- map-section -->
    <center>

        <section class="map-section">
            <!-- <div class="google-map-area"> -->
                <iframe src="<?= $setting['contact_map']?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    <!-- </div> -->
        </section>
            <!-- </div> -->
            <!-- map-section end -->
    </center>