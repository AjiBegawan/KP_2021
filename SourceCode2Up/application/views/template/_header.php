   <!-- CSS Tempalte -->
   <?php require_once('application\views\template\_css.php'); ?>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
       <div class="container d-flex align-items-center ">
           <a class="navbar-brand mr-auto" href="<?php echo site_url('Home') ?>" style="text-decoration: none; color : black;">
               <img src="<?= base_url("assets\img\LogoIDNFT.png") ?>" width="40" height="40" style="margin: -9px 7px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
               <strong>IDNFT</strong> <span style="font-size: 10px;">Beta</span>
           </a>
           <nav class="nav-menu d-none d-lg-block mx-auto">
               <ul>
                   <li class="active"><a href="<?php echo site_url('Home') ?>" style="text-decoration: none;"><strong>HOME</strong></a></li>
                   <li><a href="<?php echo site_url('Home/DeeraView') ?>" style="text-decoration: none;"><strong>DEERA NFT</strong></a></li>
                   <li><a href="<?php echo site_url('Home/BlogView') ?>" style="text-decoration: none;"><strong>BLOG</strong></a></li>
                   <!-- <li><a href="<?php echo site_url('Home/ShopView1') ?>">Shop & Merch</a></li> -->
                   <li><a href="https://discord.gg/DMMF7bVYrh" style="text-decoration: none;" target="_blank"><strong>JOIN OUR DISCORD</strong></a></li>
                   <li><a href="<?php echo site_url('Home') ?>#contact" style="text-decoration: none;"><strong>CONTACT</strong></a></li>
                   <?php if ($this->session->userdata('is_login')) { ?>
                       <li><a href="<?php echo site_url('Login/logout') ?>" style="text-decoration: none;"><strong>LOGOUT</strong></a></li>
                   <?php } ?>
                   <?php if (!$this->session->userdata('is_login')) { ?>
                       <li><a href="<?= site_url() ?>/Login"  style="text-decoration: none;"><strong>LOGIN</strong></a></li>
                       <li><a href="<?= site_url() ?>/SignUp"  style="text-decoration: none;"><strong>REGISTER</strong></a></li>
                   <?php } else { ?>

                   <?php } ?>
               </ul>
           </nav>
           <!-- .nav-menu -->

           <!-- Profile -->
           <?php if ($this->session->userdata('is_login')) { ?>
               <a class="navbar-brand ml-auto" href="<?php echo site_url('/profile') ?>" style="text-decoration: none;">
                   <img src="<?= base_url("assets\img\profile.png") ?>" width="35" height="35" style="margin: -5px 3px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                   <label for="nama" style="font-size: 13px;font-weight: normal; color:#5f687b; font-family: Open Sans, sans-serif;"><?= $user->nama; ?></label>
               </a>
           <?php } else { ?>
               <!-- <a href="<?= site_url() ?>/Login" class="get-started-btn scrollto ml-auto btn-danger">Login</a>
               <a href="<?= site_url() ?>/SignUp" class="get-started-btn scrollto ml-auto btn-danger">Registrasi</a> -->
           <?php } ?>
           <!-- End Profile -->
       </div>
   </header>
   <!-- End Header -->