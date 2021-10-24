<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>ADMIN | IDNFT </title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/LogoIDNFT.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/LogoIDNFT.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
    <!-- <link href="<?= base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet"> -->

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets\css\styleHome.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets\css\style.css" rel="stylesheet">

    <!-- Bootsrap -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <!-- Jquery Table -->
    <script src="https://code.jquery.com/jquery-3.1.0.js"></script>
    <script src="//cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"
        integrity="sha512-ut+jq2MDKjyWKK7rpEbyHjJ2kDBDO58DLFw4xJobqvS2kUgx4DJbj3OLjwk4F0pKtcxUoUIRS6esQVhh4fmWNA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.css"
        integrity="sha512-CF1ovh2vRt2kC4JJ/Hl7VC7a+tu/NTO8iW+iltdfvIjvsb45t/6NkRNSrOe6HBxCTVplYLHW5GdlbtRLlCUp2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <script>
    $(document).ready(function() {
        $('#table-id').DataTable();
        $('#table_id').DataTable();
        $('#table_pesan').DataTable();
        $('#table_artikel').DataTable();
    });
    </script>
    <script>
    $(document).ready(function() {
        $("#grid").bootgrid({
        });
    });
    </script>

</head>

<body>
    <div class="container">
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
                        <li><a href="<?php echo site_url('Home/DeeraView') ?>"
                                style="text-decoration: none;"><strong>DEERA NFT</strong></a></li>
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
                        <li><a href="<?= site_url() ?>/Login" style="text-decoration: none;"><strong>LOGIN</strong></a>
                        </li>
                        <li><a href="<?= site_url() ?>/SignUp"
                                style="text-decoration: none;"><strong>REGISTER</strong></a></li>
                        <?php } else { ?>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- .nav-menu -->
                <!-- Profile -->
                <?php if ($this->session->userdata('is_login')) { ?>
                <a class="navbar-brand ml-auto" href="<?php echo site_url('/profile') ?>"
                    style="text-decoration: none;">
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

    </div>

    <div>
        <div class="float-left ">

            <!-- Test Table -->

            <div style="margin: 100px ">

                <h1>Data Member</h1>
                <hr>

                <table id="table-id" class="table table-condensed table-hover table-striped">
                    <thead>
                        <tr>
                            <th data-column-id="username">Username</th>
                            <!-- <th>Password</th> -->
                            <th data-column-id="nama">Nama</th>
                            <th data-column-id="email">Email</th>
                            <th data-column-id="phone">Phone</th>
                            <th data-column-id="alamat">Alamat</th>
                            <th data-column-id="aliranseni">Aliran Seni</th>
                            <th data-column-id="idnft">ID IDNFT</th>
                            <th data-column-id="instagram">Instagram</th>
                            <th data-column-id="twitter">Twitter</th>
                            <th data-column-id="Facebook">Facebook</th>
                            <th data-column-id="role">Role</th>
                            <th data-column-id="edit">Edit</th>
                            <th data-column-id="delete">Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            foreach ($user->result() as $row) {
            ?>
                        <tr>
                            <td><?php echo $row->username; ?></td>
                            <!-- <td><?php echo $row->password; ?></td> -->
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->phone; ?></td>
                            <td><?php echo $row->alamat; ?></td>
                            <td><?php echo $row->aliran_seni; ?></td>
                            <td><?php echo $row->idnft; ?></td>
                            <td><?php echo $row->instagram; ?></td>
                            <td><?php echo $row->twitter; ?></td>
                            <td><?php echo $row->facebook; ?></td>
                            <td><?php echo $row->role; ?></td>
                            <td><button type="button" class="btn btn-success"><a
                                        href="<?php echo site_url('/admin/editUser/') . $row->username ?>">Edit</a></button>
                            </td>
                            <td><button type="button" class="btn btn-danger"><a
                                        href="<?php echo site_url('/admin/deleteUser/') . $row->username ?>">Delete</a></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <!-- End Test Table -->

        </div>

        <div class="float-left ">



            <!-- Contact IDNFT -->
            <div style="margin: 100px ">

                <h1>Data Sosmed IDNFT</h1>
                <hr>

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Instagram</th>
                            <th>Twitter</th>
                            <th>Discord</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            foreach ($sosmed->result() as $row) {
            ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->instagram; ?></td>
                            <td><?php echo $row->twitter; ?></td>
                            <td><?php echo $row->discord; ?></td>
                            <td><button type="button" class="btn btn-success"><a
                                        href="<?php echo site_url('/admin/editSosmed/') . $row->id ?>">Edit</a></button>
                            </td>
                            <td><button type="button" class="btn btn-danger"><a
                                        href="<?php echo site_url('/admin/deleteSosmed/') . $row->id ?>">Delete</a></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>

            <!-- End Contact IDNFT -->
        </div>

        <div class="float-left ">



            <!-- Data Pesan Table -->
            <div style="margin: 100px ">

                <h1>Data Pesan</h1>
                <hr>

                <table id="table_pesan" class="display">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Message</th>
                            <th>Status</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            foreach ($pesan->result() as $row) {
            ?>
                        <tr>
                            <td><?php echo $row->id; ?></td>
                            <td><?php echo $row->nama; ?></td>
                            <td><?php echo $row->email; ?></td>
                            <td><?php echo $row->subject; ?></td>
                            <td><?php echo $row->message; ?></td>
                            <td><?php echo $row->status; ?></td>
                            <td><button type="button" class="btn btn-success"><a
                                        href="<?php echo site_url('/admin/editPesan/') . $row->id ?>">Edit</a></button>
                            </td>
                            <td><button type="button" class="btn btn-danger"><a
                                        href="<?php echo site_url('/admin/deletePesan/') . $row->id ?>">Delete</a></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>

            <!-- End Table Table -->
        </div>

        <!-- End Of Artikel -->

        <div class="float-left ">


            <!-- Tabel Artikel -->

            <div style="margin: 100px ">



                <h1>Data Artikel</h1>
                <hr>
                <button type="button" class="btn btn-success"><a href="<?php echo site_url('/admin/addArtikel/') ?>"
                        style="text-decoration: none;">Tambah Artikel</a></button></button> <br><br>
                <table id="table_artikel" class="table table-condensed table-hover table-striped">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul</th>
                            <th>Paragraf 1</th>
                            <th>Paragraf 2</th>
                            <th>Paragraf 3</th>
                            <th>Paragraf 4</th>
                            <th>Paragraf 5</th>
                            <th>Paragraf 6</th>
                            <th>Paragraf 7</th>
                            <th>Upload Gambar</th>
                            <th>Nama File Gambar</th>
                            <th>Gambar</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
            foreach ($artikel->result() as $row) {
            ?>
                        <tr>
                            <td><?php echo $row->Id; ?></td>
                            <td><?php echo $row->Judul; ?></td>
                            <td><?php echo $row->Paragraf1; ?></td>
                            <td><?php echo $row->Paragraf2; ?></td>
                            <td><?php echo $row->Paragraf3; ?></td>
                            <td><?php echo $row->Paragraf4; ?></td>
                            <td><?php echo $row->Paragraf5; ?></td>
                            <td><?php echo $row->Paragraf6; ?></td>
                            <td><?php echo $row->Paragraf7; ?></td>
                            <td><?php echo form_open_multipart('uploadGambarArtikel/upload/'.$row->Id); ?>
                                <?php echo "<input type='file' name='profile_pic' size='20' />"; ?>
                                <?php echo "<input type='submit' name='submit' value='upload'  class='btn btn-success'/> "; ?>
                                <?php echo "</form>" ?></td>
                            <td><?php echo $row->gambar; ?></td>
                            <td><img src=" <?= ('upload/' . $row->gambar) ?>" alt="<?= $row->gambar ?>"
                                    style="width: 150px;height:150px"></td>
                            <td><button type="button" class="btn btn-success"><a
                                        href="<?php echo site_url('/admin/editArtikel/') . $row->Id ?>">Edit</a></button></button>
                            </td>
                            <td><button type="button" class="btn btn-danger"><a
                                        href="<?php echo site_url('/admin/deleteArtikel/') . $row->Id ?>">Delete</a></button></button>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>


            </div>



            <!-- End Of Tabel Artikel -->

        </div>

    </div>






</body>

</html>