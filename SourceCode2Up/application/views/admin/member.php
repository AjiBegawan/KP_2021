<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Home | IDNFT </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/LogoIDNFT.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/LogoIDNFT.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets\css\styleHome.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\styleHeader.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\admin\styleAdmin.css" rel="stylesheet">

    <!-- Bootsrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Jquery Table -->
    <script src="<?= base_url() ?>assets\js\jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">ð

    <!-- CSS Tempalte -->
    <link href="<?= base_url() ?>assets\css\styleFooter.css" rel="stylesheet">

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>

    <script>
        $(document).ready(function() {
            $('#portfolio').DataTable();

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
                    <li><a class="aclass" href="<?php echo site_url('Home') ?>"><strong>HOME</strong></a>
                    </li>
                    <li><a class="aclass" href="<?php echo site_url('Home/DeeraView') ?>"><strong>DEERA
                                NFT</strong></a></li>
                    <li><a class="aclass" href="<?php echo site_url('Home/BlogView') ?>"><strong>BLOG</strong></a></li>
                    <!-- <li><a href="<?php echo site_url('Home/ShopView1') ?>">Shop & Merch</a></li> -->
                    <li><a class="aclass" href="https://discord.gg/DMMF7bVYrh" target="_blank"><strong>JOIN OUR
                                DISCORD</strong></a></li>
                    <li><a class="aclass" href="<?php echo site_url('Home') ?>#contact"><strong>CONTACT</strong></a>
                    </li>
                    <?php if ($this->session->userdata('is_login')) { ?>
                        <li><a class="aclass" href="<?php echo site_url('Login/logout') ?>"><strong>LOGOUT</strong></a></li>
                    <?php } ?>
                    <?php if (!$this->session->userdata('is_login')) { ?>
                        <li><a class="aclass" href="<?= site_url() ?>/Login"><strong>LOGIN</strong></a></li>
                        <li><a class="aclass" href="<?= site_url() ?>/SignUp"><strong>REGISTER</strong></a>
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
                    <label for="nama" style="font-size: 13px;font-weight: normal; color:#5f687b; font-family: Open Sans, sans-serif;"><?= $login->nama; ?></label>
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

    <!-- ======= Second Header ======= -->
    <header class="fixed-top" style="background-color:white;margin-top:75px;">
        <div class="container d-flex align-items-center ">
            <nav class="nav-menu d-none d-lg-block mx-auto">
                <hr>
                <ul>
                    <li><a class="aclass" href="<?php echo site_url('Admin/member') ?>"><strong>MEMBER</strong></a></li>
                    <li><a class="aclass" href="<?php echo site_url('Admin/sosmed') ?>"><strong>SOCIAL MEDIA
                            </strong></a></li>
                    <li><a class="aclass" href="<?php echo site_url('Admin/contact') ?>"><strong>CONTACT</strong></a>
                    </li>
                    <li><a class="aclass" href="<?php echo site_url('Admin/artikel') ?>"><strong>ARTIKEL</strong></a>
                    </li>
                </ul>
                <hr>
            </nav>
            <!-- .nav-menu -->
    </header>
    <!-- End Second Header -->

    <!-- Test Table -->

    <div class="wadah">
        <h1>Data Member</h1>
        <hr>
        <div class="d-flex justify-content-center">
            <?= $this->pagination->create_links(); ?>
        </div>
        <table class="table table-condensed table-hover table-striped" style="max-width: 100%; ">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Alamat</th>
                    <th>Aliran Seni</th>
                    <th>ID IDNFT</th>
                    <th>Instagram</th>
                    <th>Twitter</th>
                    <th>Facebook</th>
                    <th>Role</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($user->result() as $row) { ?>
                    <tr>
                        <td><?php echo $row->username; ?></td>
                        <!-- <td><?php echo $row->password; ?></td> -->
                        <td class="tabel_member"><?php echo $row->nama; ?></td>
                        <td class="tabel_member"><?php echo $row->email; ?></td>
                        <td class="tabel_member"><?php echo $row->phone; ?></td>
                        <td class="tabel_member"><?php echo $row->alamat; ?></td>
                        <td class="tabel_member"><?php echo $row->aliran_seni; ?></td>
                        <td class="tabel_member"><?php echo $row->idnft; ?></td>
                        <td class="tabel_member"><?php echo $row->instagram; ?></td>
                        <td class="tabel_member"><?php echo $row->twitter; ?></td>
                        <td class="tabel_member"><?php echo $row->facebook; ?></td>
                        <td class="tabel_member"><?php echo $row->role; ?></td>
                        <td class="tabel_member"><a href="<?php echo site_url('/admin/editUser/') . $row->username ?>"><button type="button" class="btn btn-success">Edit</button></a></td>
                        <td><a href="<?php echo site_url('/admin/deleteUser/') . $row->username ?>"><button type="button" class="btn btn-danger">Delete</button></a></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>
    <!-- End Test Table -->


</body>

</html>