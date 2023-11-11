    <!-- banner-section -->
    <section class="banner-section">
        <div class="bg-layer" style="background-image: url(<?= base_url('assets/frontend/') ?>images/icons/banner-1.png);"></div>
        <div class="pattern-bg" style="background-image: url(<?= base_url('assets/frontend/') ?>images/icons/vactor-1.png);"></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                    <div class="content-box">
                        <h1><?= ucfirst($setting['banner_title'])?></h1>
                        <div class="text"><?= ucfirst($setting['banner_desc'])?></div>
                        <div class="btn-box"><a href="<?= base_url('auth/signUp')?>">Daftar Inovasi Masyarakat</a></div>
                        <div class="btn-box"><a href="<?= base_url('auth')?>">Login</a></div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 image-column">

                <div id="carouselExampleControlsNoTouching" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <?php foreach ($sliderField as $key => $d): ?>
                            <div class="carousel-item <?= $key === 0 ? 'active' : '' ?>">
                                <img src="<?= base_url('assets/sliders/').$d->image ?>" class="d-block w-200" style="border-radius: 10px;" alt="...">
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControlsNoTouching" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button> -->
                </div>

                

                    
                    <!-- <div class="image-box float-bob-y clearfix">
                        <figure class="image image-1 wow fadeInUp" data-wow-delay="900ms" data-wow-duration="1500ms"><img src="<?= base_url('assets/frontend/') ?>images/resource/phone-1.png" alt=""></figure>
                        <figure class="image image-2 wow fadeInUp" data-wow-delay="1500ms" data-wow-duration="1500ms"><img src="<?= base_url('assets/frontend/') ?>images/resource/phone-2.png" alt=""></figure>
                    </div> -->
                </div>
            </div>
        </div>
    </section>
    <!-- banner-section end -->
    <section class="feature-section" style="margin-top: -350px;">

        <div class="container" >
            <div id="content_block_01">
                <div class="content-box">
                    <div class="sec-title">
                        <!-- <h2>Fokus Bidang Inovasi</h2> -->
                        <!-- <p>Cumque adipisci anim quisque provident posuere blandit accumsan delectus quam quos interdum sociosqu.</p> -->
                    </div>
                    <div class="inner-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <a href="<?= base_url('home/innovationP')?>?category=MASYARAKAT&typeInno=1&page=1" class="text-dark">
                                    <div class="single-item bg-light card-innov">
                                        <div class="bg-layer" style="background-image: url(<?= base_url('assets/frontend/') ?>images/resource/case-1-copy.png);"></div>
                                        <div class="icon-box"><i class="mdi mdi-inbox-full"></i></div>
                                        <h3>Inovasi Masyarakat</h3>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                <a href="<?= base_url('home/innovationP')?>?category=ASN&typeInno=1&page=1" class="text-dark">
                                    <div class="single-item bg-light card-innov">
                                        <div class="bg-layer" style="background-image: url(<?= base_url('assets/frontend/') ?>images/resource/case-1-copy.png);"></div>
                                        <div class="icon-box"><i class="mdi mdi-inbox-full"></i></div>
                                        <h3>Inovasi ASN</h3>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- feature-section -->
    <section class="feature-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 image-column">
                    <div id="iamge_block_01">
                        <div class="image-box float-bob-y">
                            <figure class="image wow slideInLeft" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="<?= base_url('assets/frontend/') ?>images/resource/phone-3.png" alt=""></figure>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 content-column">
                    <div id="content_block_01">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>Fokus Bidang Inovasi</h2>
                                <!-- <p>Cumque adipisci anim quisque provident posuere blandit accumsan delectus quam quos interdum sociosqu.</p> -->
                            </div>
                            <div class="inner-box wow fadeInUp" data-wow-delay="00ms" data-wow-duration="1500ms">
                                <div class="row">

                                <?php
                                foreach ($innovationField as $key => $value) :
                                ?>
                                    <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                        <div class="single-item">
                                            <div class="bg-layer" style="background-image: url(<?= base_url('assets/frontend/') ?>images/resource/case-1.png);"></div>
                                            <div class="icon-box"><i class="<?= $value->icon?>"></i></div>
                                            <h5><a href="#"><?= $value->name?></a></h5>
                                            <div class="text"><?= $value->description?></div>
                                        </div>
                                    </div>
                                <?php
                                endforeach;
                                ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- feature-section -->

    <!-- inside-software -->
    <section class="inside-software">
        <div class="image-layer" ></div>
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12 col-sm-12 content-column">
                    <div id="content_block_13">
                        <div class="content-box">
                            <div class="sec-title">
                                <h2>Pusat Informasi Inovasi</h2>
                            </div>
                            <div class="text">Sistem informasi ini merupakan perwujudan efektivitas dan efisiensi pelaksanaan reformasi birokrasi, dalam upaya peningkatan inovasi pelayanan publik. Langkah ini diambil sebagai upaya melaksanakan konsep society 5.0, yang tengah dikembangkan dengan tujuan membuat manusia lebih nyaman dalam beraktivitas dengan bantuan akan teknologi dalam keseharian.</div>
                            <!-- <div class="btn-box"><a href="#" class="theme-btn">See More<i class="fas fa-angle-right"></i></a></div> -->
                            <div class="image-box js-tilt">
                                <figure class="image"><img src="<?= base_url('assets/frontend/') ?>images/resource/illustration-5.png" alt=""></figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12 inner-column">
                    <div id="content_block_14">
                        <div class="inner-content">
                            <div class="row">
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="feature-block-one js-tilt" >
                                        <div class="inner-box" style="border-radius: 4%;">
                                            <div class="hover-content"></div>
                                            <div class="icon-box"><i class="flaticon-profit"></i></div>
                                            <h5><a href="<?= base_url('home/innovation')?>">Data Inovasi</a></h5>
                                            <!-- <div class="text">Keyword research & ranking sure every step of you SEO Campaign is taken care.</div> -->
                                        </div>
                                    </div>
                                    <div class="feature-block-one js-tilt" >
                                        <div class="inner-box" style="border-radius: 4%;">
                                            <div class="hover-content"></div>
                                            <div class="icon-box"><i class="flaticon-search"></i></div>
                                            <h5><a href="#">Penataan</a></h5>
                                            <!-- <div class="text">Keyword research & ranking sure every step of you SEO Campaign is taken care.</div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12 single-column">
                                    <div class="feature-block-one js-tilt" >
                                        <div class="inner-box" style="border-radius: 4%;">
                                            <div class="hover-content"></div>
                                            <div class="icon-box"><i class="flaticon-check-box"></i></div>
                                            <h5><a href="#">Layanan</a></h5>
                                            <!-- <div class="text">Keyword research & ranking sure every step of you SEO Campaign is taken care.</div> -->
                                        </div>
                                    </div>
                                    <div class="feature-block-one js-tilt">
                                        <div class="inner-box" style="border-radius: 4%;">
                                            <div class="hover-content"></div>
                                            <div class="icon-box"><i class="flaticon-atom"></i></div>
                                            <h5><a href="#">Penghargaan</a></h5>
                                            <!-- <div class="text">Keyword research & ranking sure every step of you SEO Campaign is taken care.</div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- inside-software end -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 content-column">
                    <div id="content_block_01">
                        <div id="content_block_13">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h2>Video</h2>
                                </div>
                                <div>
                                    <div class="row">
                                        <?php foreach ($videoField as $key) : ?>
                                        <div class="col-lg-12 mb-3">
                                            <div class="embed-responsive embed-responsive-16by9">
                                                <iframe class="embed-responsive-item" src="<?= $key->link?>" style="border-radius: 5px;" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <?php endforeach;?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-9 col-sm-12 content-column">
                    <div id="content_block_01">
                        <div id="content_block_13">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h2>Berita</h2>
                                </div>
                                <div>
                                    
                                <div class="row">
                                    <?php foreach ($newsField as $key): ?>
                                        <div class="col-lg-12 col-md-12 col-sm-12 mb-3 inner-content" >
                                            <a href="javascript:void(0);" onclick="newsShow('<?=$key->id?>')">
                                            <div class="card">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-5 col-md-5 col-sm-5 image-column">
                                                            <figure class="image-box" style='border-radius:10px;'><a href="javascript:void(0);" onclick="newsShow('<?=$key->id?>')"><img src="<?= base_url('assets/news/'.( $key->images ?? 'no-image.png')) ?>" style="object-fit: cover; width: 150px; height: 150px;" alt=""></a></figure>
                                                        </div>
                                                        <div class="col-lg-7 col-md-7 col-sm-7">
                                                            <div class="">
                                                                <span style="font-size: 12px;" class="badge badge-primary">Tanggal : <?= $key->date?></span>
                                                                <h4><?= $key->title?></h4>
                                                                <div class="card-text">
                                                                    <?= substr($key->description,0,100)."...."?>
                                                                </div>
                                                                <!-- <ul class="team-social">
                                                                    <li><a href="javascript:void(0);" data-id="" class=" edit-data"><i class="fas fa-search"></i> Detail</a></li>
                                                                </ul> -->
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                        </div>
                                    <?php endforeach;?>
                                </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3 col-sm-12 content-column">
                    <div id="content_block_01">
                        <div id="content_block_13">
                            <div class="content-box">
                                <div class="sec-title">
                                    <h2>Sosial Media</h2>
                                </div>
                                    <!-- 4:3 aspect ratio -->
                                    <div>
                                    <!-- <iframe class="embed-responsive-item" src="https://www.instagram.com/<?=$setting['instagram']?>"></iframe> -->
                                        <iframe width="350" height="440" src="https://www.instagram.com/<?= $setting['instagram']?>/embed/" frameborder="0"></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


<div class="modal fade" id="modalVid" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Berita
                </h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-5 col-md-5 col-sm-12" id='view-news-img'>
                        
                    </div>
                    <div class="col-lg-7 col-md-7 col-sm-12">
                        <div id="news-date"></div>
                        <div id="news-title"></div>
                        <div id="news-description"></div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" onclick="tutupMod()" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>


<script>
    function newsShow(a){
        // alert('tesss')
        $.ajax({
            url: "<?= base_url('news/show/') ?>" + a,
            method: "GET",
            success: function(result) {
                let obj = JSON.parse(result)
                $('#view-news-img').html(`<figure class="image-box" style='border-radius:10px;'><a href="#"><img src="<?= base_url('assets/news/') ?>${obj.images}" style="object-fit: cover; width: 250px; height: 250px;" alt=""></a></figure>`)
                $('#news-title').html(`<h3>${obj.title}</h3>`)
                $('#news-date').html(`<span style="font-size: 12px;" class="badge badge-primary">Tanggal : ${obj.date}</span>`)
                $('#news-description').html(`${obj.description}`)
            }
        })
        $('#modalVid').modal('show');
    }

    function tutupMod(){
        // $('#myModal').modal('hide');
        $('#modalVid').modal('hide');
    }
</script>