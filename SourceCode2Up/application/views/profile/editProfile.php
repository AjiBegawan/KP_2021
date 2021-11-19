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

    <!-- Section Edit Profile -->
    <div class="wadah">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="d-flex flex-column align-items-center imgDp">
                        <?php  if ($login->dp == "") { ?>
                            <img src="<?= base_url('upload\photoProfile\blankDP.png') ?>" class="card-img-top" alt="...">
                        <?php } else { ?>
                            <img src=" <?= base_url('upload/photoProfile/' . $login->dp) ?>" alt="">
                        <?php } ?> <br><br>
                        <?php echo form_open_multipart('Profile/uploadDisplayPicture/' . $this->session->userdata('username')); ?>
                        <fieldset>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="customFile" name="gambar">
                                <label class="custom-file-label" for="customFile">Choose Photo</label> <br><br>
                            </div>
                            <input type="submit" value="Upload" class="form-control btn btn-danger" />
                        </fieldset>
                        <?php echo form_close(); ?>

                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="d-flex flex-column align-items-left">
                        <div class="mt-3">
                            <form method="POST" action="<?php echo site_url('Profile/editUserData/' . $this->session->userdata('username')); ?>">
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
                                    <input type="phone" class="form-control" value="<?= $user->phone; ?>" name="phone">
                                </div>
                                <div class="form-group">
                                    <span><i class="icofont-location-pin"></i></span>&emsp;
                                    <label for="nama">Location</label>
                                    <select class="form-select form-control" name="alamat">
                                        <option value="" selected disabled><?= $user->alamat; ?></option>
                                        <option value="" disabled>
                                            ________________________________________________________________________________________________
                                        </option>
                                        <option value="Ambon">Ambon</option>
                                        <option value="Balikpapan">Balikpapan</option>
                                        <option value="Banda Aceh">Banda Aceh</option>
                                        <option value="Bandar Lampung">Bandar Lampung</option>
                                        <option value="Bandung">Bandung</option>
                                        <option value="Banjar">Banjar</option>
                                        <option value="Banjabaru">Banjabaru</option>
                                        <option value="Banjarmasin">Banjarmasin</option>
                                        <option value="Batam">Batam</option>
                                        <option value="Batu">Batu</option>
                                        <option value="Baubau">Baubau</option>
                                        <option value="Bekasi">Bekasi</option>
                                        <option value="Bengkulu">Bengkulu</option>
                                        <option value="Bima">Bima</option>
                                        <option value="Bitung">Bitung</option>
                                        <option value="Blitar">Blitar</option>
                                        <option value="Bogor">Bogor</option>
                                        <option value="Bontang">Bontang</option>
                                        <option value="Bukittinggi">Bukittinggi</option>
                                        <option value="Cilegon">Cilegon</option>
                                        <option value="Cimahi">Cimahi</option>
                                        <option value="Cirebon">Cirebon</option>
                                        <option value="Denpasar">Denpasar</option>
                                        <option value="Depok">Depok</option>
                                        <option value="Dumai">Dumai</option>
                                        <option value="Gorontalo">Gorontalo</option>
                                        <option value="Gunugnsitoli">Gunugnsitoli</option>
                                        <option value="Jambi">Jambi</option>
                                        <option value="Jayapura">Jayapura</option>
                                        <option value="Kediri">Kediri</option>
                                        <option value="Kendari">Kendari</option>
                                        <option value="Jakarta Barat">Jakarta Barat</option>
                                        <option value="Jakarta Pusat">Jakarta Pusat</option>
                                        <option value="Jakarta Selatan">Jakarta Selatan</option>
                                        <option value="Jakarta Timur">Jakarta Timur</option>
                                        <option value="Jakarta Utara">Jakarta Utara</option>
                                        <option value="Kotamobagu">Kotamobagu</option>
                                        <option value="Kupang">Kupang</option>
                                        <option value="Langsa">Langsa</option>
                                        <option value="Lhokseumawe">Lhokseumawe</option>
                                        <option value="Lubuklinggau">Lubuklinggau</option>
                                        <option value="Madiun">Madiun</option>
                                        <option value="Magelang">Magelang</option>
                                        <option value="Makassar">Makassar</option>
                                        <option value="Malang">Malang</option>
                                        <option value="Manado">Manado</option>
                                        <option value="Mataram">Mataram</option>
                                        <option value="Medan">Medan</option>
                                        <option value="Metro">Metro</option>
                                        <option value="Mojokerto">Mojokerto</option>
                                        <option value="Padang">Padang</option>
                                        <option value="Padang Panjang">Padang Panjang</option>
                                        <option value="Padang Sidempuan">Padang Sidempuan</option>
                                        <option value="Pagar Alam">Pagar Alam</option>
                                        <option value="Palangkaraya">Palangkaraya</option>
                                        <option value="Palembang">Palembang</option>
                                        <option value="Palopo">Palopo</option>
                                        <option value="Palu">Palu</option>
                                        <option value="Pangkalpinang">Pangkalpinang</option>
                                        <option value="Parepare">Parepare</option>
                                        <option value="Pariaman">Pariaman</option>
                                        <option value="Pasuruan">Pasuruan</option>
                                        <option value="Payakumbuh">Payakumbuh</option>
                                        <option value="Pekalongan">Pekalongan</option>
                                        <option value="Pekanbaru">Pekanbaru</option>
                                        <option value="Pematangsiantar">Pematangsiantar</option>
                                        <option value="Pontianak">Pontianak</option>
                                        <option value="Prabumulih">Prabumulih</option>
                                        <option value="Probolinggo">Probolinggo</option>
                                        <option value="Sabang">Sabang</option>
                                        <option value="Salatiga">Salatiga</option>
                                        <option value="Samarinda">Samarinda</option>
                                        <option value="Sawahlunto">Sawahlunto</option>
                                        <option value="Sekayu">Sekayu</option>
                                        <option value="Semarang">Semarang</option>
                                        <option value="Serang">Serang</option>
                                        <option value="Sibolga">Sibolga</option>
                                        <option value="Singkawang">Singkawang</option>
                                        <option value="Solok">Solok</option>
                                        <option value="Sorong">Sorong</option>
                                        <option value="Subulussalam">Subulussalam</option>
                                        <option value="Sukabumi">Sukabumi</option>
                                        <option value="Sungai Penuh">Sungai Penuh</option>
                                        <option value="Surabaya">Surabaya</option>
                                        <option value="Surakarta">Surakarta</option>
                                        <option value="Tangerang">Tangerang</option>
                                        <option value="Tangerang Selatan">Tangerang Selatan</option>
                                        <option value="Tanjungbalai">Tanjungbalai</option>
                                        <option value="Tanjungpinang">Tanjungpinang</option>
                                        <option value="Tarakan">Tarakan</option>
                                        <option value="Tasikmalaya">Tasikmalaya</option>
                                        <option value="Tebing Tinggi">Tebing Tinggi</option>
                                        <option value="Tegal">Tegal</option>
                                        <option value="Ternate">Ternate</option>
                                        <option value="Tidore Kepulauan">Tidore Kepulauan</option>
                                        <option value="Tomohon">Tomohon</option>
                                        <option value="Tual">Tual</option>
                                        <option value="Yogyakarta">Yogyakarta</option>
                                    </select>
                                </div>
                                <!-- <div class="form-group">
                                    <span><i class="icofont-location-pin"></i></span>&emsp;
                                    <label>Location</label>
                                    <input type="text" class="form-control" value="<?= $user->alamat; ?>" name="alamat">
                                </div> -->
                                <div class="form-group">
                                    <span><i class="icofont-twitter"></i></span>&emsp;
                                    <label>Twitter</label>
                                    <input type="text" class="form-control" value="<?= $user->twitter; ?>" name="twitter">
                                </div>
                                <div class="form-group">
                                    <span><i class="icofont-instagram"></i></span>&emsp;
                                    <label>Instagram</label>
                                    <input type="text" class="form-control" value="<?= $user->instagram; ?>" name="instagram">
                                </div>
                                <div class="form-group">
                                    <span><i class="icofont-web"></i></span>&emsp;
                                    <label>Website</label>
                                    <input type="text" class="form-control" value="" disabled>
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