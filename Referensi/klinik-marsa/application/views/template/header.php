<!DOCTYPE html>
<html lang="en">
   <!-- Basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- Mobile Metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- Site Metas -->
   <title>Klinik Marsa</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- Site Icons -->
   
   
   <link rel="shortcut icon" href="<?php echo base_url();?>/asset/images/frevicon.png" type="image/x-icon" />
   <link rel="apple-touch-icon" href="<?php echo base_url(); ?>/asset/images/apple-touch-icon.png">
   <!-- Bootstrap CSS -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/bootstrap.min.css">
   <!-- Site CSS -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/style.css">
   <!-- Colors CSS -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/colors.css">
   <!-- ALL VERSION CSS -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/versions.css">
   <!-- Responsive CSS -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/responsive.css">
   <!-- Custom CSS -->
   <link rel="stylesheet" href="<?php echo base_url(); ?>/asset/css/custom.css">
   <!-- Modernizer for Portfolio -->
   <script src="js/modernizer.js"></script>
   <!-- [if lt IE 9] -->
   </head>
   <body class="clinic_version">

      <header>
         <div class="header-top wow fadeIn">
            <div class="container">
               <a class="header" href=""><img src="<?php echo base_url(''); ?>/asset/images/logoklinik.png" style="width:190px; padding-left: 50px"; alt="image"></a>
               <div class="right-header">
                  <div class="header-info">
                     <div class="info-inner">
                        <span class="icontop"><img src="<?php echo base_url(); ?>/asset/images/phone-icon.png" alt="#"></span>
                        <span class="iconcont"><a href="tel:800 123 456">(022) 6610901</a></span>  
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-envelope" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="mailto:info@yoursite.com">info@klinikmarsa.com</a></span> 
                     </div>
                     <div class="info-inner">
                        <span class="icontop"><i class="fa fa-clock-o" aria-hidden="true"></i></span>
                        <span class="iconcont"><a data-scroll href="#">08.00-12.00 / 16.00-20.00 WIB</a></span>
                  
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="header-bottom wow fadeIn">
            <div class="container">
               <nav class="main-menu">
                  <div class="navbar-header">
                     <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"><i class="fa fa-bars" aria-hidden="true"></i></button>
                  </div>
                  <div id="navbar" class="navbar-collapse collapse">
                     <ul class="nav navbar-nav">
                        <li><a class="" href="<?= site_url('Home')?>">Beranda</a></li>

                        <li><a data-scroll href="<?= site_url('Home/tampil_visi')?>">Tentang Kami</a></li>
                        <li><a data-scroll href="#service">Layanan Klinik</a></li>
                        <li><a data-scroll href="<?= site_url('Home/tampil_tdokter')?>">Tim Dokter</a></li>
                        <li><a data-scroll href="<?= site_url('Home/tampil_info')?>">Informasi Booking</a></li>
                        <li><a data-scroll href="<?= site_url('Login')?>">Login</a></li>
                        <li><a data-scroll href="<?= site_url('Login/registrasi')?>">Daftar</a></li>                       
                     </ul>
                  </div>
                  </div>
               </div>
               </nav>
            </div>
         </div>
      </header>
      <div id="preloader">
         <img class="preloader" src="<?php echo base_url(); ?>/asset/images/loaders/loading.gif" alt="">
      </div>
      <!-- END LOADER -->
      
      <div id="home" class="parallax first-section wow fadeIn" data-stellar-background-ratio="0.4" style="background-image:url('<?php echo base_url(); ?>/asset/images/slider-bg.png');">
         <div class="container">
            <div class="row">
               <div class="col-md-12 col-sm-12">
                  <div class="text-contant">
                     <h2>
                        <span class="center"><span class="icon"><img src="<?php echo base_url(); ?>/asset/images/icon.png" alt="#" /></span></span>
                        <a href="" class="typewrite" data-period="2000" data-type='[ "Selamat Datang di Klinik Marsa", "Kesehatan anda prioritas kami" ]'>
                        <span class="wrap"></span>
                        </a>
                     </h2>
                  </div>
               </div>
            </div>
            <!-- end row -->
         </div>
         <!-- end container -->
      </div>