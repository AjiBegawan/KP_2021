<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Edit Profile | IDNFT </title>
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


    <!-- CSS Tempalte -->
    <link href="<?= base_url() ?>assets\css\styleFooter.css" rel="stylesheet">

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

    <!-- Section Edit Profile -->
    <div class="wadah">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex flex-column align-items-center imgDp">
                        <img src=" <?= base_url('upload/photoProfile/' . $login->dp) ?>" alt="Display Picture"> <br><br>
                        <?php echo form_open_multipart('Profile/uploadDisplayPicture/' . $this->session->userdata('username')); ?>
                        <fieldset>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="gambar">
                                <label class="custom-file-label" for="customFile">Choose Photo</label> <br><br>
                            </div>
                            <input type="submit" value="Add" class="form-control btn btn-danger" />
                        </fieldset>
                        <?php echo form_close(); ?>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="d-flex flex-column align-items-left">
                        <div class="mt-3">
                            <form method="POST"
                                action="<?php echo site_url('Profile/editUserData/' . $this->session->userdata('username')); ?>">
                                <div class="form-group">
                                    <i class="icofont-people"></i>&emsp;
                                    <label>Full Name</label>
                                    <input type="text" class="form-control" value="<?= $user->nama; ?>" name="nama">
                                </div>
                                <div class="form-group">
                                    <span><i class="icofont-id"></i></span>&emsp;
                                    <label>ID IDNFT</label>
                                    <input type="text" class="form-control" value="IDNFT<?= $user->idnft; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <span><i class="icofont-paint"></i></span>&emsp;
                                    <label for="nama">Jenis Aliran Seni</label>
                                    <select class="form-select form-control" name="aliran_seni">
                                        <option value="" selected disabled><?= $user->aliran_seni; ?></option>
                                        <option value="" disabled>
                                            ________________________________________________________________________________________________
                                        </option>
                                        <option value="2D">2D</option>
                                        <option value="3D">3D</option>
                                        <option value="Motion">Motion</option>
                                        <option value="Fotografi">Fotografi</option>
                                        <option value="Lain - Lain">Lain-lain</option>
                                    </select>
                                </div>
                                <hr>
                                <h5><strong>Contact Information</strong></h5><br>
                                <div class="form-group">
                                    <span><i class="icofont-ui-email"></i></span>&emsp;
                                    <label>Email Address</label>
                                    <input type="text" class="form-control" value="<?= $user->email; ?>" disabled>
                                </div>
                                <div class="form-group">
                                    <span><i class="icofont-phone"></i></span>&emsp;
                                    <label>Phone Number</label>
                                    <input type="text" class="form-control" value="<?= $user->phone; ?>" name="phone">
                                </div>
                                <div class="form-group">
                                    <span><i class="icofont-location-pin"></i></span>&emsp;
                                    <label>Location</label>
                                    <input type="text" class="form-control" value="<?= $user->alamat; ?>" name="alamat">
                                </div>
                                <div class="form-group">
                                    <span><i class="icofont-twitter"></i></span>&emsp;
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" value="<?= $user->twitter; ?>"
                                        name="twitter">
                                </div>
                                <div class="form-group">
                                    <span><i class="icofont-instagram"></i></span>&emsp;
                                    <label>Instagram</label>
                                    <input type="text" class="form-control" value="<?= $user->instagram; ?>"
                                        name="instagram">
                                </div>
                                <div class="form-group">
                                    <span><i class="icofont-web"></i></span>&emsp;
                                    <label>Website</label>
                                    <input type="text" class="form-control" value="">
                                </div>

                                <button type="submit" class="btn btn-danger btn-block">Update</button><br><br><br>
                            </form>

                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg-1">
                    <a href="<?= site_url('Profile/editProfile') ?>">
                        <button type="button" class="btn btn-danger"><i class="icofont-ui-edit"></i></button>
                    </a>
                </div> -->
            </div>
        </div>
    </div>


</body>

</html>