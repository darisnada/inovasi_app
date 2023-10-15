<!doctype html>
<html lang="en">

<head>

    <meta charset="utf-8" />
    <title><?= $title ?> | PUSAT INOVASI DAERAH</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- App favicon -->
    <link rel="shortcut icon" href="<?= base_url('assets/') ?>images/<?= $setting['icon']?>">

    <!-- Bootstrap Css -->
    <link href="<?=base_url('assets/')?>css/bootstrap.min.css" id="bootstrap-style" rel="stylesheet" type="text/css" />
    <!-- Icons Css -->
    <link href="<?=base_url('assets/')?>css/icons.min.css" rel="stylesheet" type="text/css" />
    <!-- App Css-->
    <link href="<?=base_url('assets/')?>css/app.min.css" id="app-style" rel="stylesheet" type="text/css" />

</head>

<body>
    <?php $this->load->view($content)?>

    <!-- JAVASCRIPT -->
    <!-- JAVASCRIPT -->
    <script src="<?=base_url('assets/')?>libs/jquery/jquery.min.js"></script>
    <script src="<?=base_url('assets/')?>libs/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?=base_url('assets/')?>libs/metismenu/metisMenu.min.js"></script>
    <script src="<?=base_url('assets/')?>libs/simplebar/simplebar.min.js"></script>
    <script src="<?=base_url('assets/')?>libs/node-waves/waves.min.js"></script>
    <script src="<?=base_url('assets/')?>libs/jquery-sparkline/jquery.sparkline.min.js"></script>

    <script src="<?=base_url('assets/')?>js/app.js"></script>

</body>

</html>