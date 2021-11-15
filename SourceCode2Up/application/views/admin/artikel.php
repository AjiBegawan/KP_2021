<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Artikel | IDNFT </title>
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
    <link href="<?= base_url() ?>assets\css\admin\styleAdmin.css" rel="stylesheet">

    <!-- CSS Tempalte -->
    <link href="<?= base_url() ?>assets\css\styleFooter.css" rel="stylesheet">

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
                    text: flashData,
                    backdrop: 'rgba(255,0,0,0.1) ',
                });
            }
            if (flashDataError) {
                Swal.fire({
                    icon: 'warning',
                    text: flashDataError,
                    backdrop: 'rgba(255,0,0,0.1) ',
                });
            }
            // get Edit Product
            $('.btn-lihat').on('click', function() {
                // get data from button edit
                const id = $(this).data('id');
                const judul = $(this).data('judul');
                const paragraf1 = $(this).data('paragraf1');
                const paragraf2 = $(this).data('paragraf2');
                const paragraf3 = $(this).data('paragraf3');
                const paragraf4 = $(this).data('paragraf4');
                const paragraf5 = $(this).data('paragraf5');
                const paragraf6 = $(this).data('paragraf6');
                const paragraf7 = $(this).data('paragraf7');
                const gambar = $(this).data('gambar');
                // Set data to Form Edit
                $('.id').val(id);
                $('.judul').val(judul);
                $('.paragraf1').val(paragraf1);
                $('.paragraf2').val(paragraf2);
                $('.paragraf3').val(paragraf3);
                $('.paragraf4').val(paragraf4);
                $('.paragraf5').val(paragraf5);
                $('.paragraf6').val(paragraf6);
                $('.paragraf7').val(paragraf7);
                // Call Modal Edit
                $('#lihatModal').modal('toggle');
            });
            // get Delete
            $('.btn-delete').on('click', function() {
                // get data from button edit
                const id = $(this).data('id');
                // Set data to Form Edit
                $('.id').val(id);
                // Call Modal Edit
                $('#deleteModal').modal('show');
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
                    <li><a class="aclass" href="<?php echo site_url('Admin/member') ?>">MEMBER</a></li>
                    <li><a class="aclass" href="<?php echo site_url('Admin/sosmed') ?>">CONTACT
                        </a></li>
                    <li><a class="aclass" href="<?php echo site_url('Admin/contact') ?>">MESSAGE</a>
                    </li>
                    <li><a class="aclass text-danger" href="<?php echo site_url('Admin/artikel') ?>">ARTIKEL</a>
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
        <div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error') ?>"></div>
    </header>
    <!-- End Header -->

    <div class="wadah">
        <div class="container">
            <div class="">
                <!-- Tabel Artikel -->
                <div style="width:1300px; ">
                    <h1>Artikel</h1>
                    <div class="d-flex justify-content-center">
                        <?= $this->pagination->create_links(); ?>
                    </div>
                    <hr>
                    <a href="<?php echo site_url('/admin/addArtikel/') ?>" style="text-decoration: none;"><button type="button" class="btn btn-success"><i class="icofont-plus"></i></button></button></a> <br><br>
                    <table id="table_artikel" class="table table-condensed table-hover table-striped">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th>
                                <th>Paragraf 1</th>
                                <th>Paragraf 2</th>
                                <th>Paragraf 3</th>
                                <th></th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($artikel->result() as $row) {
                            ?>
                                <tr>
                                    <td class="tabel_artikel"><?php echo $row->Id; ?></td>
                                    <td class="tabel_artikel"><?php echo $row->Judul; ?></td>
                                    <td class="tabel_artikel"><?php echo $row->Paragraf1; ?></td>
                                    <td class="tabel_artikel"><?php echo $row->Paragraf2; ?></td>
                                    <td class="tabel_artikel"><?php echo $row->Paragraf3; ?></td>
                                    <td class="tabel_artikel"><a href="<?php echo site_url('/admin/editArtikel/') . $row->Id ?>"><button type="button" class="btn btn-success"><i class="icofont-edit"></i></button></a></td>
                                    <td class="tabel_artikel"><a href="#" class="btn-lihat" data-id="<?= $row->Id; ?>" data-judul="<?= $row->Judul; ?>" data-paragraf1="<?= $row->Paragraf1; ?>" data-paragraf2="<?= $row->Paragraf2; ?>" data-paragraf3="<?= $row->Paragraf3; ?>" data-paragraf4="<?= $row->Paragraf4; ?>" data-paragraf5="<?= $row->Paragraf5; ?>" data-paragraf6="<?= $row->Paragraf6; ?>" data-paragraf7="<?= $row->Paragraf7; ?>" data-gambar="<?= $row->gambar; ?>"><button type="button" class="btn btn-primary"><i class="icofont-eye-alt"></i></button></a></td>
                                    <td class="tabel_artikel"><a href="#" class="btn-delete" data-id="<?= $row->Id; ?>"><button type="button" class="btn btn-danger"><i class="icofont-garbage"></i></button></a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <!-- End Of Tabel Artikel -->

        <!-- Modal Lihat Artikel-->
        <form action="<?php echo site_url('Admin/addAdmin'); ?>" method="post">
            <div class="modal fade" id="lihatModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Lihat Artikel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>ID</label>
                                <input type="text" class="form-control id" name="id">
                            </div>
                            <div class="form-group">
                                <label>Judul</label>
                                <input type="text" class="form-control judul" name="judul">
                            </div>
                            <div class="form-group">
                                <label>Paragraf 1</label>
                                <input type="text" class="form-control paragraf1" name="paragraf1">
                            </div>
                            <div class="form-group">
                                <label>Paragraf 2</label>
                                <input type="text" class="form-control paragraf2" name="paragraf2">
                            </div>
                            <div class="form-group">
                                <label>Paragraf 3</label>
                                <input type="text" class="form-control paragraf3" name="paragraf3">
                            </div>
                            <div class="form-group">
                                <label>Paragraf 4</label>
                                <input type="text" class="form-control paragraf4" name="paragraf4">
                            </div>
                            <div class="form-group">
                                <label>Paragraf 5</label>
                                <input type="text" class="form-control paragraf5" name="paragraf5">
                            </div>
                            <div class="form-group">
                                <label>Paragraf 6</label>
                                <input type="text" class="form-control paragraf6" name="paragraf6">
                            </div>
                            <div class="form-group">
                                <label>Paragraf 7</label>
                                <input type="text" class="form-control paragraf7" name="paragraf7">
                            </div>
                            <!-- <div class="form-group">
                                <label>Gambar</label>
                                <img src="" class="gambar" alt="">
                                <input type="text" class="form-control gambar" name="gambar">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Modal Lihat Artikel-->

        <!-- Modal Delete Product-->
        <form action="<?php echo site_url('Admin/deleteArtikel'); ?>" method="post">
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Artikel</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label hidden>Id</label>
                                <input type="text" class="form-control id" name="id" hidden>
                            </div>
                            <h4>Apakah Anda yakin akan menghapus Artikel?</h4>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="product_id" class="productID">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                            <button type="submit" class="btn btn-primary">Yes</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <!-- End Modal Delete Product-->
    </div>
</body>

</html>