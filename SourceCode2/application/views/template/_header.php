   <!-- CSS Tempalte -->
   <?php require_once('application\views\template\_css.php'); ?>

   <!-- ======= Header ======= -->
   <header id="header" class="fixed-top">
       <div class="container d-flex align-items-center ">
           <a class="navbar-brand mr-auto" href="<?php echo site_url('Home') ?>" style="text-decoration: none; color : black;">
               <img src="<?= base_url("assets\image\LogoIDNFT.png") ?>" width="40" height="40" style="margin: -9px 7px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
               IDNFT
           </a>
           <nav class="nav-menu d-none d-lg-block mx-auto">
               <ul>
                   <li class="active"><a href="<?php echo site_url('Home') ?>">Home</a></li>
                   <li><a href="<?php echo site_url('Home/DeeraView') ?>">DEERA PROJECT</a></li>
                   <li><a href="<?php echo site_url('Home/BlogView') ?>">Blog</a></li>
                   <li><a href="<?php echo site_url('Home/ShopView1') ?>">Shop & Merch</a></li>
                   <li><a href="https://discord.gg/aDtCQEE7">Join Our Discord</a></li>
                   <li><a href="<?php echo site_url('Home') ?>#contact">Contact</a></li>
                   <?php if ($this->session->userdata('is_login')) { ?>
                       <li><a href="<?php echo site_url('Login/logout') ?>">Logout</a></li>

                   <?php } ?>
               </ul>
           </nav>
           <!-- .nav-menu -->
           
           <!-- Profile -->
           <?php if ($this->session->userdata('is_login')) { ?>
                   <a class="navbar-brand ml-auto" href="<?php echo site_url('/profile') ?>" style="text-decoration: none; color : black;">
                       <img src="https://img.icons8.com/ios/50/000000/user-male-circle.png" width="30" height="30" style="margin: -5px 5px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                       <label for="nama" style="font-size: small;"><?= $user->nama; ?></label>
                   </a>
               <?php } else { ?>
                   <a href="<?= site_url() ?>/Login" class="get-started-btn scrollto ml-auto">Login</a>
                   <a href="<?= site_url() ?>/SignUp" class="get-started-btn scrollto ml-auto">Registrasi</a>
               <?php } ?>
           

           <!-- End Profile -->
       </div>
   </header>
   <!-- End Header -->