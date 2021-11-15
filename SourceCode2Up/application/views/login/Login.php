<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <title>Login IDNFT</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='<?php echo base_url("assets\image\LogoIDNFT.png"); ?>' rel='shortcut icon' type='image/x-icon' />

    <!-- Favicons -->
    <link href="<?= base_url() ?>assets/img/LogoIDNFT.png" rel="icon">
    <link href="<?= base_url() ?>assets/img/LogoIDNFT.png" rel="apple-touch-icon">

    <!-- CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\style1.css'); ?>" media="all" />

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets\js\jquery-3.6.0.min.js"></script>
    <script src="<?= base_url() ?>assets\js\sweetalert2.all.min.js"></script>
    <script src='https://www.google.com/recaptcha/api.js'></script>

    <script>
    $(document).ready(function() {
        const flashData = $('.flash-data').data('flashdata');
        const flashDataError = $('.flash-data-error').data('flashdata');
        console.log(flashData);

        if (flashData) {
            Swal.fire({
                icon: 'success',
                text: flashData,
                backdrop: 'rgba(255,0,0,0.1) ',
            });
        }
        if (flashDataError) {
            Swal.fire({
                icon: 'error',
                text: flashDataError,
                backdrop: 'rgba(255,0,0,0.1) ',
            });
        }
    });
    </script>

</head>

<body>
    <div class="flash-data" data-flashdata="<?= $this->session->flashdata('message'); ?>"></div>
    <div class="flash-data-error" data-flashdata="<?= $this->session->flashdata('error'); ?>"></div>

    <div class="container contact-form">
        <div>
            <button type="button" class="close" aria-label="Close" style="margin: 10px 0 0 0 ;">
                <a href="<?php echo site_url('Home'); ?>" style="text-decoration: none;color:red;"><span
                        aria-hidden="true">&times;</span></a>
            </button>
        </div>
        <div class="contact-image">
            <img src="<?= base_url('assets\img\LogoIDNFT.png') ?>" alt="IDNFT Logo" />
        </div>
        <form method="POST" action="<?php echo site_url('Login/prosesLogin'); ?>">
            <h3>Login</h3>
            <div class="row">
                <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" name="username" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="nama">Password</label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                <div class="form-group">
                    <div class="g-recaptcha" data-sitekey="6LenGQkdAAAAAGUwSdHTJvOI-cNRtcN_erTfEYh2"></div>
                </div>
                <div class="form-group">
                    <button type="submit" name="login" class="btn btn-danger btn-center">Login</button>
                </div>
            </div>
        </form>
        <br>
        <div class="form-group text-center">
            <label for="">Don't have an Account?</label>
            <a href="<?php echo site_url('SignUp'); ?>" style="text-decoration: none;color:red;">Register Now</a>
        </div>
    </div>

</body>

</html>