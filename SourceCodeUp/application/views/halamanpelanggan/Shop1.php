<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Shop & Merch |  IDNFT</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/LogoIDNFT.png" rel="icon">
  <link href="assets/img/LogoIDNFT.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url()?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="<?= base_url()?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url()?>assets/css/style.css" rel="stylesheet">

   <!-- Styles -->
   <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,700&display=swap" rel="stylesheet">
    <link href="<?= base_url()?>css/Countdown/bootstrap.css" rel="stylesheet">
    <link href="<?= base_url()?>css/Countdown/fontawesome-all.css" rel="stylesheet">
	<link href="<?= base_url()?>css/Countdown/styles.css" rel="stylesheet">

</head>

<body>

 <!-- ======= Header ======= -->
 <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo mr-auto"><a href="<?php echo site_url('Home')?>">IDNFT</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo mr-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="<?php echo site_url('Home')?>">Home</a></li>
          <li><a href="<?php echo site_url('Home/BlogView')?>">Blog</a></li>
          <li><a href="<?php echo site_url('Home/ShopView1')?>">Shop & Merch</a></li>
		  <li><a href="https://discord.gg/aDtCQEE7">Join Our Discord</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav><!-- .nav-menu -->

      <a href="<?=site_url()?>/Login" class="get-started-btn scrollto">Login</a>

    </div>
  </header> 
  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Shop & Merch Page</h2>
          <ol>
            <li><a href="<?php echo site_url('Home')?>">Home</a></li>
            <li>Shop & Merch Page</li>
          </ol>
        </div>

      </div>
    </section>
	<!-- End Breadcrumbs -->

    <section class="inner-page">
	<div class="text-container">
                        <div class="countdown">
                            <span id="clock"></span>
                        </div> <!-- end of countdown -->

                        <h1>Project Coming Soon</h1>
                        <p class="p-large">We love to create dependable business solutions for companies of all sizes and any industry. Our goal is to improve accuracy and efficiency to reduce operational costs</p>
                        
                        <!-- Sign Up Form -->
                        <form id="signUpForm">
                            <div class="form-group">
                                <input type="email" class="form-control-input" id="semail" required>
                                <label class="label-control" for="semail">Email address</label>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="form-control-submit-button">SIGN UP</button>
                            </div>
                        </form>
                        <!-- end of sign up form -->

                    </div> <!-- end of text-container -->
                </div> <!-- end of col -->
            </div> <!-- end of row -->
        </div> <!-- end of container -->
	</section>

  </main><!-- End #main -->

   <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">

      <div class="container">

        <div class="row  justify-content-center">
          <div class="col-lg-6">
            <h3>IDNFT</h3>
            <p>Let’s Make Art Alive !
				Have questions?</p>
          </div>
        </div>

        <div class="row footer-newsletter justify-content-center">
          <div class="col-lg-6">
            <form action="" method="post">
              <input type="email" name="email" placeholder="Enter your Email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>

        <div class="social-links">
          <a href="https://twitter.com/idnft_" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="https://www.instagram.com/id.nft/" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://discord.gg/aDtCQEE7" class="google-plus"><i class="bx bxl-discord"></i></a>
        
        </div>

      </div>
    </div>

    <div class="container footer-bottom clearfix">
      <div class="copyright">
        &copy;<script>document.write(new Date().getFullYear());</script> Copyright <strong><span>IDNFT</span></strong>. All Rights Reserved
      </div>
    </div>
  </footer><!-- End Footer -->


  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="<?= base_url()?>assets/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/php-email-form/validate.js"></script>
  <script src="<?= base_url()?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/counterup/counterup.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/venobox/venobox.min.js"></script>
  <script src="<?= base_url()?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
     <!-- Scripts -->
	<script src="<?= base_url()?>js/Countdown/jquery.min.js"></script> <!-- jQuery for Bootstrap's JavaScript plugins -->
    <script src="<?= base_url()?>js/Countdown/bootstrap.min.js"></script> <!-- Bootstrap framework -->
    <script src="<?= base_url()?>js/Countdown/jquery.easing.min.js"></script> <!-- jQuery Easing for smooth scrolling between anchors -->
    <script src="<?= base_url()?>js/Countdown/jquery.countdown.min.js"></script> <!-- The Final Countdown plugin for jQuery -->
    <script src="<?= base_url()?>js/Countdown/scripts.js"></script> <!-- Custom scripts -->

</body>

</html>