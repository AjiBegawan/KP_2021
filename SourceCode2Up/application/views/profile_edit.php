<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Profile Edit | IDNFT</title>
    <link href='<?php echo base_url("assets\image\LogoIDNFT.png"); ?>' rel='shortcut icon' type='image/x-icon' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\styleProfile.css'); ?>" media="all" />
</head>

<body>
    <div class="container">
        <div class="main-body">
            <!-- HEADER -->
            <nav class="navbar  navbar-expand-lg navbar-light bg-light">
                <a class="navbar-brand mr-auto" href="<?php echo site_url('Home') ?>"
                    style="text-decoration: none; color : black;">
                    <img src="<?= base_url("assets\img\LogoIDNFT.png") ?>" width="35" height="35"
                        style="margin: -3px 7px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                    <strong>IDNFT</strong><span style="font-size: 12px;">Beta</span>
                </a>
                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="<?php echo site_url('Home') ?>"><strong>HOME</strong><span
                                    class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item"><a class="nav-link"
                                href="<?php echo site_url('Home/BlogView') ?>"><strong>BLOG</strong></a></li>
                        <!-- <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Home/ShopView1') ?>">Shop & Merch</a></li> -->
                        <li class="nav-item"><a class="nav-link" href="https://discord.gg/DMMF7bVYrh"><strong>JOIN OUR
                                    DISCORD</strong></a></li>
                        <li class="nav-item"><a class="nav-link"
                                href="<?php echo site_url('Home') ?>#contact"><strong>CONTACT</strong></a></li>
                        <?php if ($this->session->userdata('is_login')) { ?>
                        <li class="nav-item"><a class="nav-link"
                                href="<?php echo site_url('Login/logout') ?>"><strong>LOGOUT</strong></a></li>
                        <?php } ?>
                    </ul>
                </div>
                <nav class="navbar-nav mr-auto">
                    <?php if ($this->session->userdata('is_login')) { ?>
                    <a class="navbar-brand ml-auto" href="<?php echo site_url('/profile') ?>"
                        style="text-decoration: none; color : black;">
                        <img src="<?= base_url("assets\img\profile.png") ?>" width="35" height="35"
                            style="margin: 0px 3px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                        <label for="nama"
                            style="font-size: 15px;font-weight: normal; color:#5f687b; font-family: Open Sans, sans-serif;"><?= $login->nama; ?></label>
                    </a>
                    <?php } else { ?>
                    <a href="<?= site_url() ?>/Login"
                        class="get-started-btn scrollto ml-auto"><strong>LOGIN</strong></a>
                    <a href="<?= site_url() ?>/SignUp"
                        class="get-started-btn scrollto ml-auto"><strong>REGISTER</strong></a>
                    <?php } ?>
                </nav>
                <!-- End Profile -->
                <!-- End Menu -->
                <button class="navbar-toggler " type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon "></span>
                </button>
                <!-- Profile -->
            </nav>
            <!-- End HEADER -->
            <br>

            <!-- Breadcrumb -->

            <!-- /Breadcrumb -->
            <div class="row">
                <div class="col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src=" <?= base_url('upload/photoProfile/'.$login->dp) ?>" alt="<?= ($login->dp) ?>"
                                    class="rounded-circle p-1 " style="width: 200px;height:200px">
                                <div>
                                    <br>
                                    <?php echo form_open_multipart('uploadPhotoProfile/upload/'.$login->username) ?>
                                    <?php echo "<input type='file' name='profile_pic' size='20' class='btn btn-danger' style='width: 200px;'/>"; ?><br><br>
                                    <?php echo "<input type='submit' name='submit' value='Upload'  class='btn btn-danger'/> "; ?>
                                    <?php echo "</form>" ?>
                                </div>
                                <div class="mt-3">
                                    <h4><?= $login->nama; ?></h4>
                                    <p class="text-dark mb-1"><?= $login->aliran_seni; ?></p>
                                    <p class="text-dark font-size-sm"><?= $login->alamat; ?></p>
                                    <button class="btn btn-danger">Follow</button>
                                    <button class="btn btn-outline-danger">Message</button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <form method="POST" action="<?php echo site_url('Profile/editUserData'); ?>">
                        <div class="card">
                            <div class="card-body">

                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Twitter</h6>
                                    </div>
                                    <div class="col-sm-9 text-dark">
                                        <input type="text" class="form-control" value="<?= $login->twitter; ?>"
                                            name="twitter">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Instagram</h6>
                                    </div>
                                    <div class="col-sm-9 text-dark">
                                        <input type="text" class="form-control" value="<?= $login->instagram; ?>"
                                            name="instagram">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Full Name</h6>
                                    </div>
                                    <div class="col-sm-9 text-dark">
                                        <input type="text" class="form-control" value="<?= $login->nama; ?>"
                                            name="nama">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Email</h6>
                                    </div>
                                    <div class="col-sm-9 text-dark">
                                        <input type="text" class="form-control" value="<?= $login->email; ?>"
                                            name="email">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Phone</h6>
                                    </div>
                                    <div class="col-sm-9 text-dark">
                                        <input type="text" class="form-control" value="<?= $login->phone; ?>"
                                            name="phone">
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <div class="col-sm-3">
                                        <h6 class="mb-0">Address</h6>
                                    </div>
                                    <div class="col-sm-9 text-dark">
                                        <input type="text" class="form-control" value="<?= $login->alamat; ?>"
                                            name="alamat">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3"></div>
                                    <div class="col-sm-9 text-dark">
                                        <input type="submit" class="btn btn-danger px-4 btn-center"
                                            value="Save Changes">
                                    </div>
                                </div>
                            </div>

                        </div>

                    </form>
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="card">
                                <div class="card-body">
                                    <img class="img-thumbnail"
                                        src="<?php echo base_url("assets\img\Dftr_nft.jpg"); ?>" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script type="text/javascript">

    </script>
</body>

</html>