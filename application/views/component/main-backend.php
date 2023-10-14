<!doctype html>
<html lang="en">

<head>

	<meta charset="utf-8" />
	<title><?= $title ?> | PUSAT INOVASI DAERAH</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- App favicon -->
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>images/favicon.ico">
	<script src="<?= base_url('assets/') ?>libs/jquery/jquery.min.js"></script>

	<!-- Bootstrap Css -->
	<link href="<?= base_url('assets/') ?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
	<!-- Icons Css -->
	<link href="<?= base_url('assets/') ?>css/icons.min.css" rel="stylesheet" type="text/css" />
	<!-- App Css-->
	<link href="<?= base_url('assets/') ?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/') ?>libs/datatables.net-bs4/css/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css" />
	<link href="<?= base_url('assets/') ?>libs/datatables.net-buttons-bs4/css/buttons.bootstrap4.min.css" rel="stylesheet" type="text/css" />

	<!-- Responsive datatable examples -->
	<link href="<?= base_url('assets/') ?>libs/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css" rel="stylesheet" type="text/css" />

</head>

<body data-layout="detached" data-topbar="colored">



	<!-- <body data-layout="horizontal" data-topbar="dark"> -->

	<div class="container-fluid">
		<!-- Begin page -->
		<div id="layout-wrapper">

			<header id="page-topbar">
				<div class="navbar-header">
					<div class="container-fluid">
						<div class="float-end">

							<div class="dropdown d-none d-lg-inline-block ms-1">
								<button type="button" class="btn header-item noti-icon waves-effect" data-toggle="fullscreen">
									<i class="mdi mdi-fullscreen"></i>
								</button>
							</div>

							<div class="dropdown d-inline-block">
								<button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
									<img class="rounded-circle header-profile-user" src="<?= base_url('assets/') ?>images/users/default-users.png" alt="Header Avatar">
									<span class="d-none d-xl-inline-block ms-1"><?= $user['name'] ?></span>
									<i class="mdi mdi-chevron-down d-none d-xl-inline-block"></i>
								</button>
								<div class="dropdown-menu dropdown-menu-end">
									<!-- item-->
									<a class="dropdown-item d-block" href="<?= base_url('user/changePassword') ?>"><i class="bx bx-key font-size-16 align-middle me-1"></i> Update Password</a>
									<div class="dropdown-divider"></div>
									<a class="dropdown-item text-danger" href="<?= base_url('auth/logout') ?>"><i class="bx bx-power-off font-size-16 align-middle me-1 text-danger"></i> Logout</a>
								</div>
							</div>

						</div>
						<div>
							<!-- LOGO -->
							<div class="navbar-brand-box">
								<a href="index.html" class="logo logo-dark">
									<span class="logo-sm">
										<img src="<?= base_url('assets/') ?>images/<?= $setting['logo']?>" alt="" height="20">
									</span>
									<span class="logo-lg">
										<img src="<?= base_url('assets/') ?>images/<?= $setting['logo']?>" alt="" height="17">
									</span>
								</a>

								<a href="index.html" class="logo logo-light">
									<span class="logo-sm">
										<img src="<?= base_url('assets/') ?>images/<?= $setting['logo']?>" alt="" height="20">
									</span>
									<span class="logo-lg">
										<img src="<?= base_url('assets/') ?>images/<?= $setting['logo']?>" alt="" height="19">
									</span>
								</a>
							</div>

							<button type="button" class="btn btn-sm px-3 font-size-16 header-item toggle-btn waves-effect" id="vertical-menu-btn">
								<i class="fa fa-fw fa-bars"></i>
							</button>
						</div>

					</div>
				</div>
			</header> <!-- ========== Left Sidebar Start ========== -->
			<div class="vertical-menu">

				<div class="h-100">

					<div class="user-wid text-center py-4">
						<div class="user-img">
							<img src="<?= base_url('assets/') ?>images/users/default-users.png" alt="" class="avatar-md mx-auto rounded-circle">
						</div>

						<div class="mt-3">

							<a href="#" class="text-reset fw-medium font-size-16"><?= $user['name'] ?></a>
							<p class="text-muted mt-1 mb-0 font-size-13"><?= $user['role'] ?></p>

						</div>
					</div>

					<!--- Sidemenu -->
					<div id="sidebar-menu">
						<!-- Left Menu Start for admin -->
						<ul class="metismenu list-unstyled" id="side-menu">
							<li class="menu-title">Menu</li>
							<li>
								<a href="<?= base_url('dashboard') ?>" class="waves-effect">
									<i class="mdi mdi-speedometer"></i>
									<span>Dashboard</span>
								</a>
							</li>
							<li>
								<a href="javascript: void(0);" class="has-arrow waves-effect">
									<i class="mdi mdi-inbox-full"></i>
									<span>Master Data</span>
								</a>
								<ul class="sub-menu" aria-expanded="false">
									<li><a href="<?= base_url('opd') ?>">Data OPD</a></li>
									<li><a href="<?= base_url('innovation_field') ?>">Data Fokus Bidang</a></li>
									<li><a href="<?= base_url('masyarakat') ?>">Data Masyarakat</a></li>
									<li><a href="<?= base_url('asn') ?>">Data ASN</a></li>
								</ul>
							</li>
							<li>
								<a href="<?= base_url('innovation') ?>" class="waves-effect">
									<i class="mdi mdi-trophy-award"></i>
									<span>Data Inovasi</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url('user') ?>" class="waves-effect">
									<i class="mdi mdi-shield-account-outline"></i>
									<span>Manajemen User</span>
								</a>
							</li>
							<li>
								<a href="<?= base_url('setting') ?>" class="waves-effect">
									<i class="mdi mdi-cog-clockwise"></i>
									<span>Pengaturan</span>
								</a>
							</li>

						</ul>

					</div>
					<!-- Sidebar -->
				</div>
			</div>
			<!-- Left Sidebar End -->

			<!-- ============================================================== -->
			<!-- Start right Content here -->
			<!-- ============================================================== -->
			<div class="main-content">

				<?php $this->load->view($content) ?>
				<!-- End Page-content -->

				<footer class="footer">
					<div class="container-fluid">
						<div class="row">
							<div class="col-sm-6">
								<script>
									document.write(new Date().getFullYear())
								</script> © PUSAT INOVASI DAERAH.
							</div>
							<div class="col-sm-6">
								<div class="text-sm-end d-none d-sm-block">
									Design & Develop by Themesbrand
								</div>
							</div>
						</div>
					</div>
				</footer>
			</div>
			<!-- end main content-->

		</div>
		<!-- END layout-wrapper -->
	</div>
	<!-- end container-fluid -->

	<!-- Right Sidebar -->
	<!-- /Right-bar -->

	<!-- Right bar overlay-->
	<div class="rightbar-overlay"></div>
	<!-- JAVASCRIPT -->
	<!-- JAVASCRIPT -->

	<script src="<?= base_url('assets/') ?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?= base_url('assets/') ?>libs/metismenu/metisMenu.min.js"></script>
	<script src="<?= base_url('assets/') ?>libs/simplebar/simplebar.min.js"></script>
	<script src="<?= base_url('assets/') ?>libs/node-waves/waves.min.js"></script>
	<script src="<?= base_url('assets/') ?>libs/jquery-sparkline/jquery.sparkline.min.js"></script>

	<!-- apexcharts -->
	<script src="<?= base_url('assets/') ?>libs/apexcharts/apexcharts.min.js"></script>

	<!--tinymce js-->
	<script src="<?= base_url('assets/') ?>libs/tinymce/tinymce.min.js"></script>
	<script src="<?= base_url('assets/') ?>js/pages/form-editor.init.js"></script>
	<script src="<?= base_url('assets/') ?>libs/dropzone/min/dropzone.min.js"></script>


	<script src="<?= base_url('assets/') ?>js/app.js"></script>
	<!-- Required datatable js -->
	<script src="<?= base_url('assets/') ?>libs/datatables.net/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url('assets/') ?>libs/datatables.net-bs4/js/dataTables.bootstrap4.min.js"></script>
	<!-- Buttons examples -->
	<script src="<?= base_url('assets/') ?>libs/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
	<script src="<?= base_url('assets/') ?>libs/datatables.net-buttons-bs4/js/buttons.bootstrap4.min.js"></script>
	<script src="<?= base_url('assets/') ?>libs/datatables.net-buttons/js/buttons.html5.min.js"></script>
	<script src="<?= base_url('assets/') ?>libs/datatables.net-buttons/js/buttons.print.min.js"></script>
	<script src="<?= base_url('assets/') ?>libs/datatables.net-buttons/js/buttons.colVis.min.js"></script>
	<!-- Responsive examples -->
	<script src="<?= base_url('assets/') ?>libs/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
	<script src="<?= base_url('assets/') ?>libs/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js"></script>
	<script>
		$(function() {
			$('.dataTable').DataTable();
		})
	</script>

	<script>
		tinymce.init({
		selector: 'textarea#elm2'
		});
		tinymce.init({
		selector: 'textarea#elm3'
		});
	</script>

</body>

</html>