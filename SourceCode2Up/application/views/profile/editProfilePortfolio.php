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

    <script>
        $(document).ready(function() {
            const flashData = $('.flash-data').data('flashdata');
            console.log(flashData);

            if (flashData) {
                Swal.fire({
                    // icon: 'success',
                    title: flashData,
                    // text: flashData,
                    showConfirmButton: false,
                    backdrop: 'rgba(255,0,0,0.1) ',
                });
            }
        });
    </script>
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
                    <li><a href="<?php echo site_url('Home') ?>">HOME</a></li>
                    <li><a href="<?php echo site_url('Home/DeeraView') ?>">DEERA
                            NFT</a></li>
                    <li><a href="<?php echo site_url('Artikel') ?>">BLOG</a></li>
                    <li><a href="<?php echo site_url('Portfolio') ?>">PROJECT</a></li>
                    <li><a href="https://discord.gg/DMMF7bVYrh" target="_blank">JOIN OUR DISCORD</a></li>
                    <li><a href="<?php echo site_url('Home') ?>#contact">CONTACT</a></li>
                    <?php if ($this->session->userdata('is_login')) { ?>
                        <li><a href="<?php echo site_url('Login/logout') ?>">LOGOUT</a></li>
                    <?php } ?>
                    <?php if (!$this->session->userdata('is_login')) { ?>
                        <li><a href="<?= site_url() ?>/Login">LOGIN</a></li>
                        <li><a href="<?= site_url() ?>/SignUp">REGISTER</a>
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
                    <label for="nama" style="font-size: 13px;font-weight: normal; color:#5f687b;"><?= $login->nama; ?></label>
                </a>
            <?php } ?>
            <br><br>
        </div>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    </header>
    <!-- End Header -->

    <h1>Edit User</h1>

    <div class="container" style="margin-top: 100px;">
        <?php echo form_open_multipart('Profile/updatePortfolio/'.$portfolio->id); ?>
        <fieldset>
            <div class="form-group">
                <label for="exampleInputEmail1">Nama Portfolio</label>
                <input type="text" class="form-control" name="judul" value="<?= $portfolio->judul; ?>">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Deskripsi</label>
                <textarea class="form-control" id="" cols="30" rows="10" name="deskripsi" ><?= $portfolio->deskripsi; ?></textarea>
            </div>

            <div class="form-group">
                <label for="exampleInputEmail1">File Gambar</label>
                <input type='file' class="form-control" name='gambar' size='20' placeholder="<?= $portfolio->gambar; ?>">
            </div>
            <input type="submit" value="Update" class="form-control btn btn-primary" />
        </fieldset>
        <?php echo form_close(); ?>
    </div>
</body>

</html>