<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Manage Project | IDNFT </title>
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

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets\js\jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>assets\bootstrap\js\bootstrap.js"></script>
    <script src="<?= base_url() ?>assets\js\sweetalert2.all.min.js"></script>

    <script>
        $(document).ready(function() {
            const flashData = $('.flash-data').data('flashdata');
            const flashDataError = $('.flash-data-error').data('flashdata');
            console.log(flashData);
            console.log(flashDataError);

            if (flashData) {
                Swal.fire({
                    icon: 'success',
                    title: flashData,
                    backdrop: 'rgba(255,0,0,0.1) ',
                });
            }
            if (flashDataError) {
                Swal.fire({
                    icon: 'warning',
                    title: flashDataError,
                    showConfirmButton: false,
                    backdrop: 'rgba(255,0,0,0.1) ',
                });
            }
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
        <div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

    </header>
    <!-- End Header -->

    <div class="wadah">
        <div class="container">
            <!-- Section Portfolio / Karya -->
            <div class="d-flex justify-content-center">
                <h1>Karya</h1>
            </div>
            <div class="row">
                <div class="col-lg-11">
                    <?= $this->pagination->create_links(); ?>
                </div>
                <div class="col-lg-1">
                    <a href="<?= site_url('/Profile/profilePortfolio/') ?>"><button type="button" class="btn btn-danger"><i class="icofont-plus"></i></button></a>
                </div>
            </div>
            <div class="row gutters-sm">
                <?php foreach ($portfolio->result() as $row) {  ?>
                    <div class="col-sm-3 mb-3">
                        <div class="card h-100">
                            <img class="card-img-top" style="height: 300px;object-fit: contain;" src="<?php echo base_url('upload/portfolio/' . $row->gambar); ?>" />
                            <div class="card-body">
                                <h5 class="card-title"><?php echo $row->judul; ?></h5>
                                <p class="card-text"><?php echo $row->deskripsi; ?></p>
                                <a href="<?= site_url('/Profile/EditPortfolio/' . $row->id) ?>">
                                    <button type="button" class="btn btn-danger"><i class="icofont-ui-edit"></i></button>
                                </a>
                                <a href="#" class="btn-delete"  data-id="<?= $row->id; ?>">
                                    <button type="button" class="btn btn-danger"><i class="icofont-garbage"></i></button>
                                </a>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>


            <!-- Modal Delete Project-->
        <form action="<?php echo site_url('/Profile/deletePortfolio/'); ?>" method="post">
            <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Hapus Project</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label hidden>Id</label>
                                <input type="text" class="form-control id" name="id" hidden>
                            </div>
                            <h4>Apakah Anda yakin akan menghapus Project Anda?</h4>
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
        <!-- End Modal Delete Project-->
        </div>
    </div>

</body>

</html>