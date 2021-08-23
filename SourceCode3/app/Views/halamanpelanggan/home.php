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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <!-- Vendor CSS Files -->
  <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url() ?>assets\css\styleHome.css" rel="stylesheet">

  <!-- Bootsrap -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</head>

<body>
  <?php if ($this->session->flashdata('message')) { ?>
    <div class="alert alert-success">
      <?php echo $this->session->flashdata('message') ?>
    </div>
  <?php } ?>

  <!-- Header -->
  <?php require_once('application\views\template\_header.php'); ?>


  <!-- Carousel Section -->

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <!-- <li data-target="#myCarousel" data-slide-to="2"></li> -->
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?= base_url() ?>assets\img\Home\Header.jpg" alt="carousel1" style="width: 100%;min-width: 100%;">

      </div>

      <div class="item">
        <img src="<?= base_url() ?>assets\img\Home\Header02.jpg" alt="carousel2" style="width: 100%;">
      </div>
<!-- 
      <div class="item">
        <img src="<?= base_url() ?>assets\img\Home\Header.jpg" alt="carousel3" style="width: 100%;">
      </div> -->
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- End Carousel -->

  <main id="main">

    <!-- ======= Artist of the weeks Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <!-- <span>Artist of The Month</span> -->
          <h2>Artist of The Month</h2>
          <h5>The First Indonesian NFT Artists</h5>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-4 d-flex justify-content-between">
            <div class="member">
              <img src="<?= base_url("assets\img\AOTM\RifqiRubahHitam.png") ?>" alt="" height="75%">
              <h3>Rifqi Rubah Hitam</h3>
              <span>
                <h5>Motion Designer | 2D Animator | 3D Artist</h5>
              </span>
              <span><i class="icofont-location-pin"></i>Yogjakarta, Indonesia</span>
              <p>

              </p>
              <div class="social">
                <a href="https://twitter.com/rubahitam" target="blank"><i class="icofont-twitter"></i></a>
                <a href="https://www.instagram.com/rubahitam_/" target="blank"><i class="icofont-instagram"></i></a>
                <a href="https://superrare.com/rubahitam" target="blank"><i class="icofont-web"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
            <div class="member">
              <img src="<?= base_url("assets\img\AOTM\Suryanto.png") ?>" alt="" height="75%">
              <h3>Suryanto Sur</h3>
              <span>
                <h5>3D Artist</h5>
              </span>
              <span><i class="icofont-location-pin"></i>Indonesia</span>
              <div class="social">
                <a href="https://twitter.com/Suryanto_sur234" target="blank"><i class="icofont-twitter"></i></a>
                <a href="https://www.instagram.com/suryanto123/" target="blank"><i class="icofont-instagram"></i></a>
                <a href="https://superrare.com/suryanto_nft" target="blank"><i class="icofont-web"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-4 d-flex align-items-stretch">
            <div class="member">
              <img src="<?= base_url("assets\img\AOTM\Tagpaw.png") ?>" alt="" height="75%">
              <h3>Tagpaw</h3>
              <span>
                <h5>3D Artist</h5>
              </span>
              <span><i class="icofont-location-pin"></i>Jakarta, Indonesia</span>
              <div class="social">
              <a href="https://twitter.com/TAGAPAW" target="blank"><i class="icofont-twitter"></i></a>
                <a href="https://www.instagram.com/tagapaw/" target="blank"><i class="icofont-instagram"></i></a>
                <a href="https://superrare.com/tagapaw" target="blank"><i class="icofont-web"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Artist of the weeks Section -->

    <!-- ======= Benefit Section ======= -->
    <section id="about" class="about">
      <div class="container">
        <div class="row ">
          <div class="col-lg-6">
            <img src="<?= base_url() ?>assets/img/Benefit.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 d-flex justify-content-center content">
            <div>
              <h3>OUR  PROGRAMS</h3>
              <p class="subjudul">
                Help Indonesian artists start their journey on NFT
              </p>
              <ul>
                <li><i class="icofont-check-circled"></i>Learn from 0 to join NFT ART</li>
                <li><i class="icofont-check-circled"></i>Promotion of works</li>
                <li><i class="icofont-check-circled"></i>Collaboration forum</li>
                <li><i class="icofont-check-circled"></i>Access to the Exhibition</li>
                <li><i class="icofont-check-circled"></i>Special access to collectors</li>
                <li><i class="icofont-check-circled"></i>The latest update in the NFT world</li>
                <li><i class="icofont-check-circled"></i>Classes and workshops with senior artists</li>
                <li><i class="icofont-check-circled"></i>Free Gas fee fund program</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section><!-- Benefit Section -->

    <div class="container">
      <div class="row d-flex justify-content-around">
        <?php if (!$this->session->userdata('is_login')) { ?>
              <div class="col-lg-6 col-md-12  " style="margin:16px 0">
                <a href="<?php echo site_url('https://forms.gle/MtH5ZQwyRetxFpYj7')?>" class=" ">
                  <img class="card-img-top" src="<?= base_url("assets\img\Home\Website 01_.jpg") ?>" alt="Card image cap">
                </a>
              </div>
              <div class="col-lg-6 col-md-12" style="margin:16px 0">
                <a href="<?php echo site_url('Home/BlogView') ?>" class=" ">
                  <img class="card-img-top" src="<?= base_url("assets\img\Home\web02.jpg") ?>" alt="Card image cap">
                </a>

              </div>
        <?php } else { ?>
              <div class="col-lg-12 col-md-12" style="margin:16px 0">
                <a href="https://forms.gle/MtH5ZQwyRetxFpYj7" target=”_blank”>
                  <img class="card-img-top" src="<?= base_url("assets\img\Home\Web03.jpg") ?>" alt="Card image cap">
                </a>
              </div>
        <?php } ?>

      </div>
    </div>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once('application\views\template\_footer.php'); ?>


</body>

</html>