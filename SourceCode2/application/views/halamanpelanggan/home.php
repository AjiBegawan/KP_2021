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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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

  <!-- Header -->
  <?php require_once('application\views\template\_header.php'); ?>


  <!-- Carousel Section -->

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="<?= base_url() ?>assets\img\Header04.jpg" alt="carousel1" style="width: 100%;min-width: 100%;">
      
      </div>

      <div class="item">
        <img src="<?= base_url() ?>assets\img\Header04.jpg" alt="carousel2" style="width: 100%;">
      </div>

      <div class="item">
        <img src="<?= base_url() ?>assets\img\Header04.jpg" alt="carousel3" style="width: 100%;">
      </div>
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

  <!-- ======= Hero Section ======= -->
  <!-- <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Indonesian NFT Community</h1>
          <h5>Help Indonesian artists start their journey on NFT by Embrace, Educate and, Empower.</h5>
          <div class="d-flex">
            <a href="<?= site_url() ?>/SignUp" class="btn-get-started scrollto">Join Our Member</a>
            <a href="https://www.youtube.com/watch?v=v_DKf-J8qrc&t=4s" class="venobox btn-watch-video" data-vbtype="video" data-autoplay="true"> Watch Video <i class="icofont-play-alt-2"></i></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="<?= base_url() ?>assets/img/LogoIDNFT.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section> -->
  <!-- End Hero -->

  <main id="main">

    <!-- ======= Artist of the weeks Section ======= -->
    <section id="team" class="team section-bg">
      <div class="container">

        <div class="section-title">
          <span>Artist of The Month</span>
          <h2>Artist of The Month</h2>
          <p>Text Text Text Text Text Text Text Text Text Text Text</p>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?= base_url() ?>assets/img/team/Person2.jpg" alt="">
              <h4>Diandra Syarrofa</h4>
              <span>Mural Art Designer</span>
              <span>Yogjakarta, DIY</span>
              <p>

              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href="https://instagram.com/dvtadwitama"><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?= base_url() ?>assets/img/team/Person1.jpg" alt="">
              <h4>Devita Dwitama Putri Baron</h4>
              <span>Digital Illuslator</span>
              <span>Surabaya, Jawa Tengah</span>
              <p>

              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href="https://instagram.com/dvtadwitama"><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="member">
              <img src="<?= base_url() ?>assets/img/team/Person2.jpg" alt="">
              <h4>Indiarto Aji Begawan</h4>
              <span>Artist</span>
              <span>Bandung, Jawa Barat</span>
              <p>

              </p>
              <div class="social">
                <a href=""><i class="icofont-twitter"></i></a>
                <a href=""><i class="icofont-facebook"></i></a>
                <a href="https://instagram.com/ajibegawan"><i class="icofont-instagram"></i></a>
                <a href=""><i class="icofont-linkedin"></i></a>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- Artist of the weeks Section -->

    <!-- ======= Benefit Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <img src="<?= base_url() ?>assets/img/Benefit.png" class="img-fluid" alt="">
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0 content">
            <h3>Benefits Join with Our Community</h3>
            <p class="font-italic">
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
              <li><i class="icofont-check-circled"></i>Cryptocurrency exchange</li>
            </ul>
          </div>
        </div>
      </div>
    </section><!-- Benefit Section -->
  </main><!-- End #main -->


  <!-- ======= Footer ======= -->
  <?php require_once('application\views\template\_footer.php'); ?>


</body>

</html>