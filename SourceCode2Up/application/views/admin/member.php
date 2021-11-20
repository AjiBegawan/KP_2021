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

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets\css\styleHome.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\styleHeader.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\styleFooter.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\admin\styleAdmin.css" rel="stylesheet">

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets\js\jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>assets\bootstrap\js\bootstrap.js"></script>
    <script src="<?= base_url() ?>assets\js\sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {
            const flashData = $('.flash-data').data('flashdata');
            const flashDataError = $('.flash-data-error').data('flashdata');

            if (flashData) {
                Swal.fire({
                    icon: 'success',
                    // title: flashData,
                    text: flashData,
                    backdrop: 'rgba(255,0,0,0.1) ',
                });
            }
            if (flashDataError) {
                Swal.fire({
                    icon: 'warning',
                    // title: flashData,
                    text: flashDataError,
                    backdrop: 'rgba(255,0,0,0.1) ',
                });
            }

            // get Edit Product
            $('.btn-lihat').on('click', function() {
                // get data from button edit
                const username = $(this).data('username');
                const nama = $(this).data('nama');
                const email = $(this).data('email');
                const phone = $(this).data('phone');
                const alamat = $(this).data('alamat');
                const aliran_seni = $(this).data('aliran_seni');
                const instagram = $(this).data('instagram');
                const twitter = $(this).data('twitter');
                const facebook = $(this).data('facebook');
                // Set data to Form Edit
                $('.username').val(username);
                $('.nama').val(nama);
                $('.email').val(email);
                $('.phone').val(phone);
                $('.alamat').val(alamat);
                $('.aliran_seni').val(aliran_seni);
                $('.instagram').val(instagram);
                $('.twitter').val(twitter);
                $('.facebook').val(facebook);
                // Call Modal Edit
                $('#lihatModal').modal('toggle');
            });
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
            <?php if ($this->session->userdata('is_admin')) { ?>
                <a class="navbar-brand ml-auto" href="<?php echo site_url('/profile') ?>" style="text-decoration: none;">
                    <img src="<?= base_url("assets\img\profile.png") ?>" width="35" height="35" style="margin: -5px 3px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                    <label for="nama" style="font-size: 13px;font-weight: normal; color:#5f687b;"><?= $login->nama; ?></label>
                </a>
            <?php } else if ($this->session->userdata('is_login')) { ?>
                <a class="navbar-brand ml-auto" href="<?php echo site_url('/profile') ?>" style="text-decoration: none;">
                    <img src="<?= base_url("assets\img\profile.png") ?>" width="35" height="35" style="margin: -5px 3px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                    <label for="nama" style="font-size: 13px;font-weight: normal; color:#5f687b;"><?= $login->nama; ?></label>
                </a>
            <?php } else { ?>
            <?php } ?>
            <!-- End Profile -->
            <br><br>
        </div>
        <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message') ?>"></div>
        <div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error') ?>"></div>
    </header>
    <!-- End Header -->

    <!--Table Member-->
    <div class="wadah">
        <div class="container">
            <h1>Member IDNFT</h1>
            <hr>
            <div class="row">
                <div class="d-flex justify-content-center col-sm-7">
                    <?= $this->pagination->create_links(); ?>
                </div>
                <div class="d-flex justify-content-end col-sm-5">
                    <form action="<?php echo site_url('Admin/member'); ?>" method="POST">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Search Keyword..." name="keyword" autocomplete="off" autofocus>
                            <div class="input-group-append">
                                <input class="btn btn-outline-danger" type="submit" name="submit">

                            </div>
                        </div>
                    </form>
                </div>
                <!-- <div class="d-flex justify-content-end col-sm-4">
                    <a href="<?php echo site_url('/admin/manageAdmin') ?>"><button type="button" class="btn btn-danger"><i class="icofont-gear"></i> Manage Admin</button></a>
                </div> -->
            </div>
            <div>
                <h6>Hasil pencarian : <?= $total_rows; ?></h6>
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
                            <!-- <td class="tabel_member"><a href="<?php echo site_url('/admin/editUser/') . $row->username ?>"><button type="button" class="btn btn-success"><i class="icofont-eye-alt"></i></button></a></td> -->
                            <td class="tabel_member"><a href="#" class="btn-lihat" data-username="<?= $row->username; ?>" data-nama="<?= $row->nama; ?>" data-email="<?= $row->email; ?>" data-phone="<?= $row->phone; ?>" data-alamat="<?= $row->alamat; ?>" data-aliran_seni="<?= $row->aliran_seni; ?>" data-instagram="<?= $row->instagram; ?>" data-twitter="<?= $row->twitter; ?>" data-facebook="<?= $row->facebook; ?>"><button type="button" class="btn btn-success"><i class="icofont-eye-alt"></i></button></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Table Member-->

    <!-- Modal Lihat Artikel-->
    <form action="<?php echo site_url('Admin/addAdmin'); ?>" method="post">
        <div class="modal fade" id="lihatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Lihat Member IDNFT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control username" name="id">
                        </div>
                        <div class="form-group">
                            <label>Nama</label>
                            <input type="text" class="form-control nama" name="judul">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" class="form-control email" name="paragraf1">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" class="form-control phone" name="paragraf2">
                        </div>
                        <div class="form-group">
                            <label>Alamat</label>
                            <input type="text" class="form-control alamat" name="paragraf3">
                        </div>
                        <div class="form-group">
                            <label>Aliran Seni</label>
                            <input type="text" class="form-control aliran_seni" name="paragraf4">
                        </div>
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control instagram" name="paragraf5">
                        </div>
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control twitter" name="paragraf6">
                        </div>
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control facebook" name="paragraf7">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Lihat Artikel-->


</body>

</html>