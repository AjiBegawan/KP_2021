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
    <title>Registrasi IDNFT</title>
</head>

<body>
<?php if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-success">
                <?php echo $this->session->flashdata('message') ?>
            </div>
        <?php } ?>
    <div class="container contact-form">
        <div class="contact-image">
            <img src="<?= base_url('assets\image\LogoIDNFT.png') ?>" alt="rocket_contact" />
        </div>
        <form method="POST" action="<?php echo site_url('SignUp/prosesSignUp'); ?>">
            <h3>Registrasi IDNFT</h3>
            <div class="row">
                <div class="form-group">
                    <label for="nama">Name</label>
                    <input type="text" name="nama" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="nama">Username</label>
                    <input type="text" name="username" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="nama">Password</label>
                    <input type="password" name="password" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="nama">Email</label>
                    <input type="email" name="email" class="form-control" required />
                </div>
                <div class="form-group">
                    <label for="nama">Jenis Aliran Seni</label>
                    <select class="form-select" aria-label="Default select example" name="aliran_seni">
                        <option selected>--- Pilih Jenis Aliran Seni Anda ---</option>
                        <option value="1">One</option>
                        <option value="2">Two</option>
                        <option value="3">Three</option>
                    </select>
                </div>
                
                <div class="form-group">
                    <button type="submit" name="register" class="btn btn-primary btn-center">Register</button>
                </div>

            </div>
        </form>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>