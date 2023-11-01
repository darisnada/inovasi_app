<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <title><?= $title ?> - PUSAT INOVASI DAERAH</title>

    <!-- Fav Icon -->
    <link rel="icon" href="<?= base_url('assets/') ?>images/<?= $setting['icon']?>" type="image/x-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:300,300i,400,400i,500,500i,700,700i&display=swap" rel="stylesheet">

    <!-- Stylesheets -->
    <link href="<?= base_url('assets/frontend/') ?>css/font-awesome-all.css" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/') ?>css/flaticon.css" rel="stylesheet">
    <!-- Icons Css -->
	<link href="<?= base_url('assets/') ?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url('assets/frontend/') ?>css/owl.css" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/') ?>css/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/') ?>css/jquery.fancybox.min.css" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/') ?>css/animate.css" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/') ?>css/imagebg.css" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/') ?>css/style.css" rel="stylesheet">
    <link href="<?= base_url('assets/frontend/') ?>css/responsive.css" rel="stylesheet">

    <link href="<?= base_url('assets/') ?>libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />

    <style>
        .card-innov:hover {
            color: white;
        }
    </style>
    <script src="<?= base_url('assets/frontend/') ?>js/jquery.js"></script>

</head>


<!-- page wrapper -->

<body class="boxed_wrapper">

    <!-- preloader -->
    <div class="preloader"></div>
    <!-- preloader -->

    <!-- main header -->
    <header class="main-header home-1">
        <div class="outer-container">
            <div class="container">
                <div class="main-box clearfix">
                    <div class="logo-box pull-left">
                        <figure class="logo"><a href="index.html"><img src="<?= base_url('assets/') ?>images/<?= $setting['logo']?>" width="100px" alt=""></a></figure>
                    </div>
                    <div class="menu-area pull-right">
                        <!--Mobile Navigation Toggler-->
                        <div class="mobile-nav-toggler">
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                            <i class="icon-bar"></i>
                        </div>
                        <nav class="main-menu navbar-expand-md navbar-light">
                            <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="<?= base_url('home')?>">Home</a></li>
                                    <li><a href="<?= base_url('home/profile')?>">Profil</a></li>
                                    <li class="dropdown"><a href="#">Inovasi</a>
                                        <ul>
                                            <li><a href="<?= base_url('home/innovation')?>?category=MASYARAKAT">Masyarakat</a></li>
                                            <li><a href="<?= base_url('home/innovation')?>?category=ASN">ASN</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="<?= base_url('home/contact')?>">Kontak</a></li>
                                </ul>
                            </div>
                        </nav>
                    </div>
                </div>
            </div>
        </div>

        <!--sticky Header-->
        <div class="sticky-header">
            <div class="container clearfix">
                <figure class="logo-box"><a href="index.html"><img src="<?= base_url('assets/') ?>images/<?= $setting['logo']?>" width="100px" alt=""></a></figure>
                <div class="menu-area">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- main-header end -->

    <!-- Mobile Menu  -->
    <div class="mobile-menu">
        <div class="menu-backdrop"></div>
        <div class="close-btn"><i class="fas fa-times"></i></div>

        <nav class="menu-box">
            <div class="nav-logo"><a href="index.html"><img src="<?= base_url('assets/') ?>images/<?= $setting['logo']?>" alt="" title=""></a></div>
            <div class="menu-outer">
                <!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header-->
            </div>
        </nav>
    </div><!-- End Mobile Menu -->

    <?php $this->load->view($content) ?>

    <!-- main-footer -->
    <footer class="main-footer">
        <div class="image-layer" style="background-image: url(<?= base_url('assets/frontend/') ?>images/icons/footer-bg.png);"></div>
        <div class="container">
            <div class="footer-top">
                <div class="widget-section">
                    <div class="row">
                        <div class="col-lg-7 col-md-6 col-sm-12 footer-column">
                            <div class="about-widget footer-widget">
                                <figure class="footer-logo"><a href="#"><img src="<?= base_url('assets/') ?>images/<?= $setting['logo']?>" alt="" width="200px"></a></figure>
                                <div class="text"><?= $setting['contact_address']?>
                                    Telp. : <?= $setting['contact_phone']?>, Fax. : <?= $setting['contact_fax']?>
                                    Email : <?= $setting['contact_email']?></div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">Daftar</h4>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="#">Inovasi Masyarakat</a></li>
                                        <li><a href="#">Inovasi Perangkat Daerah</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-6 col-sm-12 footer-column">
                            <div class="links-widget footer-widget">
                                <h4 class="widget-title">Navigasi</h4>
                                <div class="widget-content">
                                    <ul class="list clearfix">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Profil</a></li>
                                        <li><a href="#">Inovasi Masyarakat</a></li>
                                        <li><a href="#">Inovasi Perangkat Daerah</a></li>
                                        <li><a href="#">Kontak</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="copyright">&copy; 2023 <a href="#">PUSAT INOVASI DAERAH</a>. All rights reserved</div>
            </div>
        </div>
    </footer>
    <!-- main-footer end -->



    <!--Scroll to top-->
    <button class="scroll-top scroll-to-target" data-target="html">
        <span class="fa fa-arrow-up"></span>
    </button>


    <!-- jequery plugins -->
    <script src="<?= base_url('assets/frontend/') ?>js/popper.min.js"></script>
    <script src="<?= base_url('assets/frontend/') ?>js/bootstrap.min.js"></script>
    <script src="<?= base_url('assets/frontend/') ?>js/owl.js"></script>
    <script src="<?= base_url('assets/frontend/') ?>js/wow.js"></script>
    <script src="<?= base_url('assets/frontend/') ?>js/validation.js"></script>
    <script src="<?= base_url('assets/frontend/') ?>js/jquery.fancybox.js"></script>
    <script src="<?= base_url('assets/frontend/') ?>js/appear.js"></script>
    <script src="<?= base_url('assets/frontend/') ?>js/scrollbar.js"></script>
    <script src="<?= base_url('assets/frontend/') ?>js/tilt.jquery.js"></script>

    <!-- main-js -->
    <script src="<?= base_url('assets/frontend/') ?>js/script.js"></script>

    <!-- Required datatable js -->
	<script src="<?= base_url('assets/') ?>libs/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('assets/') ?>libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script>
		$(function() {
			$('.dataTable').DataTable();
		})
	</script>

</body><!-- End of .page_wrapper -->

</html>