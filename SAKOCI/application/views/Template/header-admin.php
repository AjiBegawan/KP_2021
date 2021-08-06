<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>SAKOCI-Admin</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <link href="<?php echo base_url('assets/img/Kota Cimahi.png') ?>" rel="icon">
  <link href="<?php echo base_url('assets/img/Kota Cimahi.png')?>" rel="apple-touch-icon">

  <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">
 
  <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/animate/animate.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/ionicons/css/ionicons.min.css')?>"rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/assets/owl.carousel.min.css')?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/lightbox/css/lightbox.min.css')?>"rel="stylesheet">
  <link href="<?php echo base_url('assets/css/style.css')?>" rel="stylesheet">


</head>
<body id="page-top">
  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Admin</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Kendaraanserver');?>">Kendaraan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('InfoUmum');?>">Halaman update</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Krisar_admin');?>">Kritik dan Saran</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo site_url('Home/logout')?>">Logout</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>