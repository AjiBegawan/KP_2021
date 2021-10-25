<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Profile Edit | IDNFT</title>
    <link href='<?php echo base_url("assets\image\LogoIDNFT.png"); ?>' rel='shortcut icon' type='image/x-icon' />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\styleProfile.css'); ?>" media="all" />


</head>

<body>
    <div class="container">
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
                        style="font-size: 15px;font-weight: normal; color:#5f687b; font-family: Open Sans, sans-serif;"><?= $user->nama; ?></label>
                </a>
                <?php } else { ?>
                <a href="<?= site_url() ?>/Login" class="get-started-btn scrollto ml-auto"><strong>LOGIN</strong></a>
                <a href="<?= site_url() ?>/SignUp"
                    class="get-started-btn scrollto ml-auto"><strong>REGISTER</strong></a>
                <?php } ?>
            </nav>
            <!-- End Profile -->
            <!-- End Menu -->
            <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon "></span>
            </button>
            <!-- Profile -->
        </nav>
        <!-- End HEADER -->
        <div class="main-body">



            <!-- Breadcrumb -->
            <!-- <nav aria-label="breadcrumb" class="main-breadcrumb">
        <ol class="breadcrumb" >
          <li class="breadcrumb-item"><a href="<?php echo site_url('Home') ?>">Home</a></li>
          <li class="breadcrumb-item"><a href="<?php echo site_url('Profile') ?>">User Profile</a></li>
        </ol>
      </nav> -->
            <!-- /Breadcrumb -->

            <div class="row gutters-sm">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex flex-column align-items-center text-center">
                                <img src=" <?= base_url('upload/photoProfile/'.$login->dp) ?>" alt="Admin"
                                    class="rounded-circle" style="width: 200px;height:200px">
                                <div class="mt-3">
                                    <h4><?= $user->nama; ?></h4>
                                    <h6>IDNFT<?= $user->idnft; ?></h6>
                                    <p class="text-dark mb-1"><?= $user->aliran_seni; ?></p>
                                    <p class="text-dark font-size-sm"><?= $user->alamat; ?></p>
                                    <button class="btn btn-danger">Follow</button>
                                    <button class="btn btn-outline-danger">Message</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-3">
                        <ul class="list-group list-group-flush">

                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><img
                                        src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAB4AAAAeCAYAAAA7MK6iAAAABmJLR0QA/wD/AP+gvaeTAAACxUlEQVRIie2WzWtUZxSHn997Mxqr4EIkE7GWQKXVQEFTaGVmSgpRiDOiKEUXGkvX4kIQ3AhZ+AfUlgqCuBBBaBbaJlOxi2ZIxi6l1MQu/Yozo6DRKprEzHtcmNjJnRnnpmalPqt7z3vOed77wbkX3vO2o4Vocr2zs7l5WTmD+AzvzZz7e/JxkG3L5SYq80a/aV/U3jc6VSUubk+tn1BQaLuQexhVWkwnvkY6A6wOLd1C6pmemr4axFw3pv2xwHat/PXy42pxJnkGaGtytnU24XWUtiW+NNMg0FwzQTzHcICT2NvSnz8nMAAXSt0IJKe9Bse6O8NXUIUZJ+pKAYwY4AS/mNFxN506MLsUEmvxzEFHEJT/KqVTe+r1LKS/Wgfa0GhzgAx2AGtaPoifqCk286MVZytMdq6YSQ4XM4mtFnosjvLaCNKXnbBT8c/zu9XXV56NNc1txmmD7aG6JChbyiRvF+C8jLzhRgwrzzyuhsj0u3rxIdd/tJQmLkp2tk79h4KDiJ8lfw3ZQCQrgNO9qlDlSal1yRUzedD9yE0jUC5bMRybc6sRNzF6ot7CiDx5tHT8Rjg49+Xy+nEhjTMMzk6ruuJV2eFLgmMLqjVdrBUODxDiA/mjwH7BnQXQjjcFvubLWiW2XpxhKQ//AJNvKP6h3uitEqsXjzEq6AIW16iJhODOlHG83nqVGKA1e/k48NP/lQIeuZ6PsvnxeYkF1jqQP+CMzUA/MDYvrdmxeP/QH69LafgjUNi26VPng1MmElGckr5v6R8+pAbDoKa4tGXLUh97lhT2HWIn4UFTm0mZDsezw5FmwStxIZ1ISe4Isk+ANTPf0miIQXl/MJ79cyR6SQUPurqWTzY/2wf6FuhoUPuvwQDenVz129BQ5E3WEldS7E6tVJN94b197KQVJmKgp/I2ZtJI/ElwRbnc9HyF73l3eAHAsPOROmKcIQAAAABJRU5ErkJggg==">
                                    Twitter</h6>
                                <span class="text-dark"><a href="https://twitter.com/<?= $user->twitter; ?>"
                                        target="_blank"><?= $user->twitter; ?></a></span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between align-items-center flex-wrap">
                                <h6 class="mb-0"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round"
                                        class="feather feather-instagram mr-2 icon-inline text-danger">
                                        <rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect>
                                        <path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path>
                                        <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line>
                                    </svg>Instagram</h6>
                                <span class="text-dark"><a href=""><?= $user->instagram; ?></a></span>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Full Name</h6>
                                </div>
                                <div class="col-sm-9 text-dark">
                                    <?= $user->nama; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Email</h6>
                                </div>
                                <div class="col-sm-9 text-dark">
                                    <?= $user->email; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Phone</h6>
                                </div>
                                <div class="col-sm-9 text-dark">
                                    <?= $user->phone; ?>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <h6 class="mb-0">Domicile</h6>
                                </div>
                                <div class="col-sm-9 text-dark">
                                    <?= $user->alamat; ?>
                                </div>
                            </div>
                            <hr>

                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-danger px-4 btn-center"
                                        href="<?= site_url("/Profile/profile_edit") ?>">Edit</a>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-sm-12">
                                    <a class="btn btn-danger px-4 btn-center"
                                        href="<?= site_url("/Profile/profilePortfolio") ?>">Tambah Portfolio</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?= $this->pagination->create_links(); ?>
                    <div class="row gutters-sm">
                        <?php foreach ($portfolio->result() as $row) {  ?>
                        <div class="col-sm-6 mb-3">
                            <div class="card h-100">
                                <img class="card-img-top" style="height: 300px;object-fit: contain;"
                                    src="<?php echo base_url('upload/portfolio/'.$row->gambar); ?>" />
                                <div class="card-body">
                                    <h5 class="card-title"><?php echo $row->judul; ?></h5>
                                    <p class="card-text"><?php echo $row->deskripsi; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                    

</html>