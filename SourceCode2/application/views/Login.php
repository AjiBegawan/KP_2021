<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='<?php echo base_url("assets\image\LogoIDNFT.png"); ?>' rel='shortcut icon' type='image/x-icon' />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets\css\style1.css'); ?>" media="all" />
    <title>Login IDNFT</title>
</head>

<body>
    <?php if ($this->session->flashdata('message')) { ?>
        <div class="alert alert-success">
            <?php echo $this->session->flashdata('message') ?>
        </div>
    <?php } ?>
    <div>
        <button type="button" class="close" aria-label="Close" style="margin: -50px 13px 0 0 ;" >
            <a href="<?php echo site_url('Home'); ?>"><span aria-hidden="true">&times;</span></a>
        </button>
    </div>
    <div class="container contact-form">

        <div class="contact-image">
            <img src="<?= base_url('assets\image\LogoIDNFT.png') ?>" alt="rocket_contact" />
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
                    <button type="submit" name="register" class="btn btn-danger btn-center">Login</button>
                </div>
                <div class="form-group">
                    <label for="nama">Don't have an Account?</label>
                    <a href="<?php echo site_url('SignUp'); ?>">Register Now</a>
                </div>
            </div>
        </form>

    </div>


    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>


</body>

</html>