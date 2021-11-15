<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Manage Admin </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/LogoIDNFT.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/LogoIDNFT.png" rel="apple-touch-icon">

    <!-- Bootsrap -->
    <link href="<?= base_url() ?>assets\bootstrap\css\bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets\css\styleHome.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\styleHeader.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\styleFooter.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\admin\styleAdmin.css" rel="stylesheet">
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
            $('.btn-edit').on('click', function() {
                // get data from button edit
                const id = $(this).data('id');
                const username = $(this).data('username');
                const name = $(this).data('name');
                const email = $(this).data('email');
                // Set data to Form Edit
                $('.id').val(id);
                $('.username').val(username);
                $('.name').val(name);
                $('.email').val(email);
                // Call Modal Edit
                console.log(username);
                $('#editModal').modal('toggle');
            });

            // get Delete Product
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
        <div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error') ?>"></div>
    </header>
    <!-- End Header -->

    <!--Table Member-->
    <div class="wadah">
        <div class="container">
            <h1>Manage Admin</h1>
            <hr>
            <div class="row">
                <div class="d-flex justify-content-center col-sm-8">
                    <?= $this->pagination->create_links(); ?>
                </div>
                <div class="d-flex justify-content-end col-sm-4">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addModal"><i class="icofont-plus"></i></button>
                </div>
            </div><br>
            <table class="table table-condensed table-hover table-striped" style="max-width: 100%; ">
                <thead>
                    <tr>
                        <th>Username</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($admin->result() as $row) { ?>
                        <tr>
                            <td><?php echo $row->username; ?></td>
                            <td class=""><?php echo $row->nama; ?></td>
                            <td class=""><?php echo $row->email; ?></td>
                            <!-- <td class=""><?php echo $row->id; ?></td> -->
                            <td class=""><a href="#" class="btn-edit" data-id="<?= $row->id; ?>" data-username="<?= $row->username; ?>" data-name="<?= $row->nama; ?>" data-email="<?= $row->email; ?>"><button type="button" class="btn btn-success"><i class="icofont-pencil"></i></button></a></td>
                            <td class=""><a href="#" class="btn-delete" data-id="<?= $row->id; ?>"><button type="button" class="btn btn-danger"><i class="icofont-garbage"></i></button></a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
    <!-- End Table Member-->

    <!-- Modal Add Product-->
    <form action="<?php echo site_url('Admin/addAdmin'); ?>" method="post">
        <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Tambah Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control" name="username">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control" name="password">
                        </div>
                        <div class="form-group">
                            <label>Confirm Password</label>
                            <input type="password" class="form-control" name="confirm_password">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal Add Product-->


    <!-- Modal Update Product-->
    <form action="<?php echo site_url('Admin/updateAdmin'); ?>" method="post">
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Edit Admin</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label hidden>Id</label>
                            <input type="text" class="form-control id" name="id" hidden>
                        </div>
                        <div class="form-group">
                            <label>Username</label>
                            <input type="text" class="form-control username" name="username">
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" class="form-control name" name="name">
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <input type="password" class="form-control name" name="password">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control email" name="email">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!-- End Modal update Product-->

    <!-- Modal Delete Product-->
    <form action="<?php echo site_url('Admin/deleteAdmin'); ?>" method="post">
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Delete Product</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label hidden>Id</label>
                            <input type="text" class="form-control id" name="id" hidden>
                        </div>
                        <h4>Hapus data Admin?</h4>
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
</body>

</html>