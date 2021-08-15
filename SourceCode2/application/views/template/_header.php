   <!-- CSS Tempalte -->
   <?php require_once('application\views\template\_css.php'); ?>
 
 <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center ">
          <a class="navbar-brand mr-auto" href="<?php echo site_url('Home') ?>" style="text-decoration: none; color : black;" >
              <img src="<?= base_url("assets\image\LogoIDNFT.png") ?>" width="40" height="40" style="margin: -9px 7px 0 0 ;"  class="d-inline-block align-top" alt="Logo IDNFT">
              IDNFT
          </a>
          <nav class="nav-menu d-none d-lg-block mx-auto">
              <ul>
                  <li class="active"><a href="<?php echo site_url('Home')?>">Home</a></li>
                  <li><a href="<?php echo site_url('Home/DeeraView') ?>">DEERA PROJECT</a></li>
                  <li><a href="<?php echo site_url('Home/BlogView') ?>">Blog</a></li>
                  <li><a href="<?php echo site_url('Home/ShopView1') ?>">Shop & Merch</a></li>
                  <li><a href="https://discord.gg/aDtCQEE7">Join Our Discord</a></li>
                  <li><a href="<?php echo site_url('Home') ?>#contact">Contact</a></li>
              </ul>
          </nav><!-- .nav-menu -->

          <a href="<?= site_url() ?>/Login" class="get-started-btn scrollto ml-auto">Login</a>

      </div>
  </header>
  <!-- End Header -->