<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Template | IDNFT </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/LogoIDNFT.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/LogoIDNFT.png" rel="apple-touch-icon">

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets\css\styleHome.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\styleHeader.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\profile\styleProfile.css" rel="stylesheet">

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style="background-color:white">
        <div class="container d-flex align-items-center ">
            <a class="navbar-brand mr-auto" href="<?php echo site_url('Home') ?>"
                style="text-decoration: none; color : black;">
                <img src="<?= base_url("assets\img\LogoIDNFT.png") ?>" width="40" height="40"
                    style="margin: -9px 7px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                <strong>IDNFT</strong> <span style="font-size: 10px;">Beta</span>
            </a>
            <nav class="nav-menu d-none d-lg-block mx-auto">
                <ul>
                    <li class="active"><a href="<?php echo site_url('Home') ?>"
                            style="text-decoration: none;"><strong>HOME</strong></a></li>
                    <li><a href="<?php echo site_url('Home/DeeraView') ?>" style="text-decoration: none;"><strong>DEERA
                                NFT</strong></a></li>
                    <li><a href="<?php echo site_url('Home/BlogView') ?>"
                            style="text-decoration: none;"><strong>BLOG</strong></a></li>
                    <!-- <li><a href="<?php echo site_url('Home/ShopView1') ?>">Shop & Merch</a></li> -->
                    <li><a href="https://discord.gg/DMMF7bVYrh" style="text-decoration: none;"
                            target="_blank"><strong>JOIN OUR DISCORD</strong></a></li>
                    <li><a href="<?php echo site_url('Home') ?>#contact"
                            style="text-decoration: none;"><strong>CONTACT</strong></a></li>
                    <?php if ($this->session->userdata('is_login')) { ?>
                    <li><a href="<?php echo site_url('Login/logout') ?>"
                            style="text-decoration: none;"><strong>LOGOUT</strong></a></li>
                    <?php } ?>
                    <?php if (!$this->session->userdata('is_login')) { ?>
                    <li><a href="<?= site_url() ?>/Login" style="text-decoration: none;"><strong>LOGIN</strong></a></li>
                    <li><a href="<?= site_url() ?>/SignUp" style="text-decoration: none;"><strong>REGISTER</strong></a>
                    </li>
                    <?php } else { ?>
                    <?php } ?>
                </ul>
            </nav>
            <!-- .nav-menu -->
            <!-- Profile -->
            <?php if ($this->session->userdata('is_login')) { ?>
            <a class="navbar-brand ml-auto" href="<?php echo site_url('/profile') ?>" style="text-decoration: none;">
                <img src="<?= base_url("assets\img\profile.png") ?>" width="35" height="35"
                    style="margin: -5px 3px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                <label for="nama"
                    style="font-size: 13px;font-weight: normal; color:#5f687b; font-family: Open Sans, sans-serif;"><?= $login->nama; ?></label>
            </a>
            <?php } else { ?>
            <!-- <a href="<?= site_url() ?>/Login" class="get-started-btn scrollto ml-auto btn-danger">Login</a>
               <a href="<?= site_url() ?>/SignUp" class="get-started-btn scrollto ml-auto btn-danger">Registrasi</a> -->
            <?php } ?>
            <!-- End Profile -->
            <br><br>
        </div>
        <?php if ($this->session->flashdata('message')) { ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('message') ?>
        </div>
        <?php } ?>
    </header>
    <!-- End Header -->

    <div class="wadah">
        <div class="container">
            <!-- Section Portfolio / Karya -->
            <div class="d-flex justify-content-center">
                <h1>Karya</h1>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <?= $this->pagination->create_links(); ?>
                </div>
                <div class="col-lg-1">
                    <a href="<?= site_url('/Profile/profilePortfolio/') ?>"><button type="button"
                            class="btn btn-danger"><i class="icofont-plus"></i></button></a>
                </div>
            </div>
            <div class="row gutters-sm">
                <?php foreach ($portfolio->result() as $row) {  ?>
                <div class="col-sm-3 mb-3">
                    <div class="card h-100">
                        <img class="card-img-top" style="height: 300px;object-fit: contain;"
                            src="<?php echo base_url('upload/portfolio/'.$row->gambar); ?>" />
                        <div class="card-body">
                            <h5 class="card-title"><?php echo $row->judul; ?></h5>
                            <p class="card-text"><?php echo $row->deskripsi; ?></p>
                            <a href="<?= site_url('/Profile/EditPortfolio/'.$row->id) ?>">
                                <button type="button" class="btn btn-danger"><i class="icofont-ui-edit"></i></button>
                            </a>
                            <a href="<?= site_url('/Profile/deletePortfolio/'.$row->id) ?>">
                                <button type="button" class="btn btn-danger"><i class="icofont-garbage"></i></button>
                            </a>
                        </div>
                    </div>
                </div>
                <?php } ?>
            </div>
        </div>
    </div>

</body>

</html>