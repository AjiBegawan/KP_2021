<!-- HEADER -->
<nav class="navbar  navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand mr-auto" href="<?php echo site_url('Home') ?>" style="text-decoration: none; color : black;">
        <img src="<?= base_url("assets\img\LogoIDNFT.png") ?>" width="35" height="35" style="margin: -3px 7px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
        <strong>IDNFT</strong><span style="font-size: 12px;">Beta</span>
    </a>
    <!-- Menu -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item active">
                <a class="nav-link" href="<?php echo site_url('Home') ?>"><strong>HOME</strong><span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Home/BlogView') ?>"><strong>BLOG</strong></a></li>
            <!-- <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Home/ShopView1') ?>">Shop & Merch</a></li> -->
            <li class="nav-item"><a class="nav-link" href="https://discord.gg/DMMF7bVYrh"><strong>JOIN OUR DISCORD</strong></a></li>
            <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Home') ?>#contact"><strong>CONTACT</strong></a></li>
            <?php if ($this->session->userdata('is_login')) { ?>
                <li class="nav-item"><a class="nav-link" href="<?php echo site_url('Login/logout') ?>"><strong>LOGOUT</strong></a></li>
            <?php } ?>
        </ul>
    </div>
    <nav class="navbar-nav mr-auto">
        <?php if ($this->session->userdata('is_login')) { ?>
            <a class="navbar-brand ml-auto" href="<?php echo site_url('/profile') ?>" style="text-decoration: none; color : black;">
                <img src="<?= base_url("assets\img\profile.png") ?>" width="35" height="35" style="margin: 0px 3px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                <label for="nama" style="font-size: 15px;font-weight: normal; color:#5f687b; font-family: Open Sans, sans-serif;"><?= $user->nama; ?></label>
            </a>
        <?php } else { ?>
            <a href="<?= site_url() ?>/Login" class="get-started-btn scrollto ml-auto"><strong>LOGIN</strong></a>
            <a href="<?= site_url() ?>/SignUp" class="get-started-btn scrollto ml-auto"><strong>REGISTER</strong></a>
        <?php } ?>
    </nav>
    <!-- End Profile -->
    <!-- End Menu -->
    <button class="navbar-toggler " type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon "></span>
    </button>
    <!-- Profile -->
</nav>
<!-- End HEADER -->