<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Tambah Artikel | IDNFT </title>
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
    <link href="<?= base_url() ?>assets\css\styleFooter.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\admin\styleAdmin.css" rel="stylesheet">

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets\js\jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>assets\js\sweetalert2.all.min.js"></script>

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
                    <li><a class="aclass" href="<?php echo site_url('Home') ?>">HOME</a>
                    </li>
                    <li><a class="aclass" href="<?php echo site_url('Admin/member') ?>">MEMBER</a></li>
                    <li><a class="aclass" href="<?php echo site_url('Admin/sosmed') ?>">CONTACT
                        </a></li>
                    <li><a class="aclass" href="<?php echo site_url('Admin/contact') ?>">MESSAGE</a>
                    </li>
                    <li><a class="aclass" href="<?php echo site_url('Admin/artikel') ?>">ARTIKEL</a>
                    </li>
                    <?php if ($this->session->userdata('is_login')) { ?>
                    <li><a class="aclass" href="<?php echo site_url('Login/logout') ?>">LOGOUT</a></li>
                    <?php } ?>
                    <?php if (!$this->session->userdata('is_login')) { ?>
                    <li><a class="aclass" href="<?= site_url() ?>/Login">LOGIN</a></li>
                    <li><a class="aclass" href="<?= site_url() ?>/SignUp">REGISTER</a>
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
            <?php } ?>
            <!-- End Profile -->
            <br><br>
        </div>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
    </header>
    <!-- End Header -->


    <div class="wadah">
        <div class="container" style="margin-top: 100px;">
            <h1>Tambah Artikel</h1><hr>
            <a href="<?php echo site_url('Admin/artikel'); ?>"><button type="submit" class="btn btn-warning"><i class="icofont-swoosh-left"></i></button></a><br><br>
            <?php echo form_open_multipart('Admin/ProsesAddArtikel'); ?>
            <fieldset>
                <div class="form-group">
                    <label for="exampleInputEmail1">Judul</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        name="judul">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Paragraf 1</label>
                    <textarea name="paragraf1" class="form-control" cols="20" rows="5" name="paragraf1"> </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Paragraf 2</label>
                    <textarea name="paragraf2" class="form-control" cols="20" rows="5" name="paragraf2"> </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Paragraf 3</label>
                    <textarea name="paragraf3" class="form-control" cols="20" rows="5" name="paragraf3"> </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Paragraf 4</label>
                    <textarea name="paragraf4" class="form-control" cols="20" rows="5" name="paragraf4"> </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Paragraf 5</label>
                    <textarea name="paragraf5" class="form-control" cols="20" rows="5" name="paragraf5"> </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Paragraf 6</label>
                    <textarea name="paragraf6" class="form-control" cols="20" rows="5" name="paragraf6"> </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Paragraf 7</label>
                    <textarea name="paragraf7" class="form-control" cols="20" rows="5" name="paragraf7"> </textarea>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Upload Gambar Header</label>
                    <input type='file' class="form-control" name='gambar' size='20'>
                </div>

                <input type="submit" value="Add" class="form-control btn btn-primary" />
            </fieldset>
            <?php echo form_close(); ?>
            <br>
        </div>
    </div>

</body>

</html>