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

    <script>
        $(document).ready(function() {
            const flashData = $('.flash-data').data('flashdata');

            if (flashData) {
                Swal.fire({
                    icon: 'success',
                    // title: flashData,
                    text: flashData,
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
                    <li><a class="aclass" href="<?php echo site_url('Home') ?>">HOME</a>
                    </li>
                    <li><a class="aclass text-danger" href="<?php echo site_url('Admin/member') ?>">MEMBER</a></li>
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
                    <img src="<?= base_url("assets\img\profile.png") ?>" width="35" height="35" style="margin: -5px 3px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                    <label for="nama" style="font-size: 13px;font-weight: normal; color:#5f687b; font-family: Open Sans, sans-serif;"><?= $login->nama; ?></label>
                </a>
            <?php } else { ?>
            <?php } ?>
            <!-- End Profile -->
            <br><br>
        </div>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
    </header>
    <!-- End Header -->

    <!--Table Member-->
    <div class="wadah">
        <div class="container">
            <h1>Member IDNFT</h1>
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
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($user->result() as $row) { ?>
                        <tr>
                            <td><?php echo $row->username; ?></td>
                            <td class="tabel_member"><?php echo $row->nama; ?></td>
                            <td class="tabel_member"><?php echo $row->email; ?></td>
                            <td class="tabel_member"><a href="<?php echo site_url('/admin/editUser/') . $row->username ?>"><button type="button" class="btn btn-success"><i class="icofont-eye-alt"></i></button></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>


        </div>
    </div>
    <!-- End Table Member-->


</body>

</html>