<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit User | IDNFT </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/LogoIDNFT.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/LogoIDNFT.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets\css\styleHome.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\styleHeader.css" rel="stylesheet">

    <!-- Bootsrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>



<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top" style="background-color:white">
        <div class="container d-flex align-items-center ">
            <a class="navbar-brand mr-auto" href="<?php echo site_url('Home') ?>" style="text-decoration: none; color : black;">
                <img src="<?= base_url("assets\img\LogoIDNFT.png") ?>" width="40" height="40" style="margin: -9px 7px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                <strong>IDNFT</strong> <span style="font-size: 10px;">Beta</span>
            </a>
            <nav class="nav-menu d-none d-lg-block mx-auto">
                <ul>
                    <li class="active"><a href="<?php echo site_url('Home') ?>" style="text-decoration: none;"><strong>HOME</strong></a></li>
                    <li><a href="<?php echo site_url('Home/DeeraView') ?>" style="text-decoration: none;"><strong>DEERA
                                NFT</strong></a></li>
                    <li><a href="<?php echo site_url('Home/BlogView') ?>" style="text-decoration: none;"><strong>BLOG</strong></a></li>
                    <!-- <li><a href="<?php echo site_url('Home/ShopView1') ?>">Shop & Merch</a></li> -->
                    <li><a href="https://discord.gg/DMMF7bVYrh" style="text-decoration: none;" target="_blank"><strong>JOIN OUR DISCORD</strong></a></li>
                    <li><a href="<?php echo site_url('Home') ?>#contact" style="text-decoration: none;"><strong>CONTACT</strong></a></li>
                    <?php if ($this->session->userdata('is_login')) { ?>
                        <li><a href="<?php echo site_url('Login/logout') ?>" style="text-decoration: none;"><strong>LOGOUT</strong></a></li>
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
                    <img src="<?= base_url("assets\img\profile.png") ?>" width="35" height="35" style="margin: -5px 3px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                    <label for="nama" style="font-size: 13px;font-weight: normal; color:#5f687b; font-family: Open Sans, sans-serif;"><?= $user->nama; ?></label>
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

    <h1>Edit User</h1>

    <div class="container" style="margin-top: 100px;">
        <form method="POST" action="<?php echo site_url('Admin/ProsesAddArtikel'); ?>">
            <!-- <div class="form-group">
                <label for="exampleInputEmail1">ID</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="id" value="">

            </div> -->
            <div class="form-group">
                <label for="exampleInputEmail1">Judul</label>
                <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="judul">

            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Paragraf 1</label>
                <textarea name="paragraf1" class="form-control" id="" cols="30" rows="10" name="paragraf1"> </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Paragraf 2</label>
                <textarea name="paragraf2" class="form-control" id="" cols="30" rows="10" name="paragraf2"> </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Paragraf 3</label>
                <textarea name="paragraf3" class="form-control" id="" cols="30" rows="10" name="paragraf3"> </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Paragraf 4</label>
                <textarea name="paragraf4" class="form-control" id="" cols="30" rows="10" name="paragraf4"> </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Paragraf 5</label>
                <textarea name="paragraf5" class="form-control" id="" cols="30" rows="10" name="paragraf5"> </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Paragraf 6</label>
                <textarea name="paragraf6" class="form-control" id="" cols="30" rows="10" name="paragraf6"> </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Paragraf 7</label>
                <textarea name="paragraf7" class="form-control" id="" cols="30" rows="10" name="paragraf7"> </textarea>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Gambar</label>
                <?php echo form_open_multipart('Admin/upload'); ?>
                <input type='file' name='profile_pic' size='20'>
                <input type='submit' name='submit' value='Upload'>

                <!-- <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="gambar" placeholder=""> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>
</body>

</html>