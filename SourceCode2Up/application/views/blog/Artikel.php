<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Blog | IDNFT</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/LogoIDNFT.png" rel="icon">
    <link href="assets\img\LogoIDNFT.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="<?= base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/icofont/icofont.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/venobox/venobox.css" rel="stylesheet">
    <link href="<?= base_url() ?>assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

    <!-- TAMBAHAN -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Vidaloka" rel="stylesheet">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/css/mixins/_text-hide.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/css/bootstrap-reboot.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/aos.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/ionicons.min.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/jquery.timepicker.css">


    <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/icomoon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- <script type="text/javascript" src="<?= base_url() ?>assets\js\jquery.paginate.js"></script>
    <script type="text/javascript" src="<?= base_url() ?>assets\js\jquery.paginate.min.js"></script>

    <script src="//code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <script src="//raw.github.com/botmonster/jquery-bootpag/master/lib/jquery.bootpag.min.js"></script>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
 -->
    <script src="<?= base_url('assets\js\jquery-3.6.0.min.js') ?>"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" />
    <style>
    .pagination ul {
        align-items: center;
        margin: auto;
        width: 100%;
        display: flex;
        flex-wrap: wrap;
        background: #fff;
        padding: 8px;
        border-radius: 50px;
        box-shadow: 0px 10px 15px rgba(0, 0, 0, 0.1);
    }

    .pagination ul li {
        color: #20B2AA;
        list-style: none;
        line-height: 45px;
        text-align: center;
        font-size: 18px;
        font-weight: 500;
        cursor: pointer;
        user-select: none;
        transition: all 0.3s ease;
    }

    .pagination ul li.numb {
        list-style: none;
        height: 45px;
        width: 45px;
        margin: 0 3px;
        line-height: 45px;
        border-radius: 50%;
    }

    .pagination ul li.numb.first {
        margin: 0px 3px 0 -5px;
    }

    .pagination ul li.numb.last {
        margin: 0px -5px 0 3px;
    }

    .pagination ul li.dots {
        font-size: 22px;
        cursor: default;
    }

    .pagination ul li.btn {
        padding: 0 20px;
        border-radius: 50px;
    }

    .pagination li.active,
    .pagination ul li.numb:hover,
    .pagination ul li:first-child:hover,
    .pagination ul li:last-child:hover {
        color: #fff;
        background: #20B2AA;
    }
    </style>

    <script>
    // selecting required element
    const element = document.querySelector(".pagination ul");
    let totalPages = 20;
    let page = 10;
    //calling function with passing parameters and adding inside element which is ul tag
    element.innerHTML = createPagination(totalPages, page);

    function createPagination(totalPages, page) {
        let liTag = '';
        let active;
        let beforePage = page - 1;
        let afterPage = page + 1;
        if (page > 1) { //show the next button if the page value is greater than 1
            liTag +=
                `<li class="btn prev" onclick="createPagination(totalPages, ${page - 1})"><span><i class="fas fa-angle-left"></i> Prev</span></li>`;
        }
        if (page > 2) { //if page value is less than 2 then add 1 after the previous button
            liTag += `<li class="first numb" onclick="createPagination(totalPages, 1)"><span>1</span></li>`;
            if (page > 3) { //if page value is greater than 3 then add this (...) after the first li or page
                liTag += `<li class="dots"><span>...</span></li>`;
            }
        }
        // how many pages or li show before the current li
        if (page == totalPages) {
            beforePage = beforePage - 2;
        } else if (page == totalPages - 1) {
            beforePage = beforePage - 1;
        }
        // how many pages or li show after the current li
        if (page == 1) {
            afterPage = afterPage + 2;
        } else if (page == 2) {
            afterPage = afterPage + 1;
        }
        for (var plength = beforePage; plength <= afterPage; plength++) {
            if (plength > totalPages) { //if plength is greater than totalPage length then continue
                continue;
            }
            if (plength == 0) { //if plength is 0 than add +1 in plength value
                plength = plength + 1;
            }
            if (page == plength) { //if page is equal to plength than assign active string in the active variable
                active = "active";
            } else { //else leave empty to the active variable
                active = "";
            }
            liTag +=
                `<li class="numb ${active}" onclick="createPagination(totalPages, ${plength})"><span>${plength}</span></li>`;
        }
        if (page < totalPages - 1) { //if page value is less than totalPage value by -1 then show the last li or page
            if (page < totalPages -
                2) { //if page value is less than totalPage value by -2 then add this (...) before the last li or page
                liTag += `<li class="dots"><span>...</span></li>`;
            }
            liTag +=
                `<li class="last numb" onclick="createPagination(totalPages, ${totalPages})"><span>${totalPages}</span></li>`;
        }
        if (page < totalPages) { //show the next button if the page value is less than totalPage(20)
            liTag +=
                `<li class="btn next" onclick="createPagination(totalPages, ${page + 1})"><span>Next <i class="fas fa-angle-right"></i></span></li>`;
        }
        element.innerHTML = liTag; //add li tag inside ul tag
        return liTag; //reurn the li tag
    }
    </script>
</head>

<body>

    <main id="main">
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center ">
                <a class="navbar-brand mr-auto" href="<?php echo site_url('Home') ?>"
                    style="text-decoration: none; color : black;">
                    <img src="<?= base_url("assets\img\LogoIDNFT.png") ?>" width="40" height="40"
                        style="margin: -9px 7px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                    <strong>IDNFT</strong> <span style="font-size: 10px;">Beta</span>
                </a>
                <nav class="nav-menu d-none d-lg-block mx-auto">
                    <ul>
                        <li class="active"><a href="<?php echo site_url('Home') ?>"
                                style="text-decoration: none;"><strong>HOME</strong></a></li>
                        <li><a href="<?php echo site_url('Home/DeeraView') ?>"
                                style="text-decoration: none;"><strong>DEERA NFT</strong></a></li>
                        <li><a href="<?php echo site_url('Home/BlogView') ?>"
                                style="text-decoration: none;"><strong>BLOG</strong></a></li>
                        <!-- <li><a href="<?php echo site_url('Home/ShopView1') ?>">Shop & Merch</a></li> -->
                        <li><a href="https://discord.gg/DMMF7bVYrh" style="text-decoration: none;"
                                target="_blank"><strong>JOIN OUR DISCORD</strong></a></li>
                        <li><a href="<?php echo site_url('Home') ?>#contact"
                                style="text-decoration: none;"><strong>CONTACT</strong></a></li>
                        <?php if ($this->session->userdata('is_login')) { ?>
                        <li><a href="<?php echo site_url('Login/logout') ?>"
                                style="text-decoration: none;"><strong>LOGOUT</strong></a></li>
                        <?php } ?>
                        <?php if (!$this->session->userdata('is_login')) { ?>
                        <li><a href="<?= site_url() ?>/Login" style="text-decoration: none;"><strong>LOGIN</strong></a>
                        </li>
                        <li><a href="<?= site_url() ?>/SignUp"
                                style="text-decoration: none;"><strong>REGISTER</strong></a></li>
                        <?php } else { ?>
                        <?php } ?>
                    </ul>
                </nav>
                <!-- .nav-menu -->
                <!-- Profile -->
                <?php if ($this->session->userdata('is_login')) { ?>
                <a class="navbar-brand ml-auto" href="<?php echo site_url('/profile') ?>"
                    style="text-decoration: none;">
                    <img src="<?= base_url("assets\img\profile.png") ?>" width="35" height="35"
                        style="margin: -5px 3px 0 0 ;" class="d-inline-block align-top" alt="Logo IDNFT">
                    <label for="nama"
                        style="font-size: 13px;font-weight: normal; color:#5f687b; font-family: Open Sans, sans-serif;"><?= $user->nama; ?></label>
                </a>
                <?php } else { ?>
                <!-- <a href="<?= site_url() ?>/Login" class="get-started-btn scrollto ml-auto btn-danger">Login</a>
               <a href="<?= site_url() ?>/SignUp" class="get-started-btn scrollto ml-auto btn-danger">Registrasi</a> -->
                <?php } ?>
                <!-- End Profile -->
            </div>
        </header>
        <!-- End Header -->
        <!-- ======= Breadcrumbs ======= -->
        <section class="breadcrumbs">
            <div class="container">

                <div class="d-flex justify-content-between align-items-center">
                    <h2>Blog Page</h2>
                </div>

            </div>
        </section>
        <!-- End Breadcrumbs -->

        <section class="inner-page">
            <div class="container ">
                <!-- Menampilkan card masing masing blog yang ada pada halaman -->

                <div class="row" id="page-selection">
                    <div id="content">Dynamic Content goes here</div>

                    <!-- CARD -->
                    <div class="card-group">
                        <?php
                      foreach ($artikel->result() as $row) {
                      ?>
                        <div class="card">
                            <img class="card-img-top" src="<?= base_url('upload/'.$row->gambar) ?>" alt=""
                                style="width: auto;height: 300px;">
                            <div class="card-body">
                                <h3 class="card-title"><strong><?php echo $row->Judul; ?></strong></h3>
                                <!-- <p class="card-text" ><?php echo $row->Paragraf1; ?></p> -->
                                <p><a href="<?php echo site_url('PageArtikel/LoadArtikelDetail/').$row->Id ?>"
                                        class="btn btn-danger">Baca Lengkap</a>
                                </p>
                            </div>
                            <div class="card-footer">
                                <small class="text-muted">Posted August 2, 2021</small>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
            </div>


        </section>

        <div class="pagination">
            <ul>
                <li><span><i class="fas fa-angle-left"></i>prev</span></li>
                <li class="numb"><span>1</span></li>
                <li class="numb"><span>2</span></li>
                <li class="dots"><span>...</span></li>
                <li class="numb"><span>4</span></li>
                <li class="numb"><span>5</span></li>
                <li class="dots"><span>...</span></li>
                <li class="numb"><span>7</span></li>
                <li><span><i class="fas fa-angle-right"></i>next</span></li>
            </ul>
        </div>



    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <!-- CSS Tempalte -->
    <link href="<?= base_url() ?>assets\css\styleFooter.css" rel="stylesheet">

    <!-- Vendor JS Files -->
    <script src="<?= base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/jquery.easing/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/php-email-form/validate.js"></script>
    <script src="<?= base_url() ?>assets/vendor/waypoints/jquery.waypoints.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/counterup/counterup.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/venobox/venobox.min.js"></script>
    <script src="<?= base_url() ?>assets/vendor/owl.carousel/owl.carousel.min.js"></script>

    <!-- Template Main JS File -->
    <script src="<?= base_url() ?>assets/js/main.js"></script>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
        <div class="container">
            <div class="section-title">
                <h2>Contact</h2>
                <p>Stay Update With Our Community!</p>
            </div>
            <!-- Sosmed -->
            <div class="info">
                <div class="row">
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="address">
                            <i class="icofont-twitter"></i>
                            <h4>Twitter</h4>
                            <a href="https://twitter.com/idnft_" style="text-decoration: none;" target="blank">
                                <p>@idnft_</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="email">
                            <i class="icofont-instagram"></i>
                            <h4>Instagram </h4>
                            <a href="https://www.instagram.com/id.nft/" style="text-decoration: none;" target="blank">
                                <p>id.nft</p>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 d-flex justify-content-center">
                        <div class="phone">
                            <i class=""><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30"
                                    viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1"
                                        stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10"
                                        stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none"
                                        font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#e74c3c">
                                            <path
                                                d="M144.02133,39.82373c-13.8976,-11.16853 -35.87347,-13.06053 -36.80227,-13.1408c-1.46773,-0.12613 -2.86093,0.7052 -3.46293,2.0468c-0.02293,0.04587 -1.24987,3.60627 -2.43667,7.04053c16.1508,2.82653 27.1244,9.0988 27.7092,9.4428c2.74053,1.59387 3.65787,5.1084 2.05827,7.8432c-1.06067,1.8232 -2.98133,2.84373 -4.9536,2.84373c-0.9804,0 -1.96653,-0.24653 -2.8724,-0.774c-0.16053,-0.09747 -16.25973,-9.25933 -37.24947,-9.25933c-20.99547,0 -37.1004,9.1676 -37.26093,9.25933c-2.7348,1.58813 -6.2436,0.6536 -7.83173,-2.08693c-1.58813,-2.72907 -0.66507,-6.23213 2.064,-7.826c0.5848,-0.344 11.59853,-6.6392 27.7952,-9.46c-1.24987,-3.4744 -2.5112,-6.97747 -2.53413,-7.02333c-0.602,-1.34733 -1.9952,-2.19587 -3.46293,-2.0468c-0.9288,0.07453 -22.90467,1.96653 -36.98573,13.28987c-7.3616,6.79973 -22.06187,46.55467 -22.06187,80.926c0,0.60773 0.1548,1.19827 0.45867,1.72573c10.15373,17.83067 37.83427,22.4976 44.14093,22.69827c0.04013,0.00573 0.07453,0.00573 0.10893,0.00573c1.11227,0 2.16147,-0.5332 2.8208,-1.43333l6.82267,-9.24213c-14.964,-3.60627 -22.876,-9.27653 -23.35187,-9.62627c-2.5456,-1.8748 -3.096,-5.46387 -1.2212,-8.0152c1.86907,-2.53987 5.44667,-3.10173 7.99227,-1.2384c0.21213,0.1376 14.81493,10.36013 42.49547,10.36013c27.78947,0 42.35213,-10.26267 42.49547,-10.36587c2.5456,-1.84613 6.13467,-1.29 7.998,1.26707c1.8576,2.5456 1.31867,6.11173 -1.21547,7.9808c-0.47587,0.34973 -8.34773,6.00853 -23.27733,9.6148l6.73667,9.25933c0.65933,0.90587 1.70853,1.43333 2.8208,1.43333c0.04013,0 0.07453,0 0.10893,-0.00573c6.3124,-0.20067 33.99293,-4.8676 44.14093,-22.69827c0.30387,-0.52747 0.45867,-1.118 0.45867,-1.72573c0,-34.3656 -14.70027,-74.12053 -22.24533,-81.06933zM63.06667,108.93333c-6.33533,0 -11.46667,-6.4156 -11.46667,-14.33333c0,-7.91773 5.13133,-14.33333 11.46667,-14.33333c6.33533,0 11.46667,6.4156 11.46667,14.33333c0,7.91773 -5.13133,14.33333 -11.46667,14.33333zM108.93333,108.93333c-6.33533,0 -11.46667,-6.4156 -11.46667,-14.33333c0,-7.91773 5.13133,-14.33333 11.46667,-14.33333c6.33533,0 11.46667,6.4156 11.46667,14.33333c0,7.91773 -5.13133,14.33333 -11.46667,14.33333z">
                                            </path>
                                        </g>
                                    </g>
                                </svg>
                                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt"
                                    stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray=""
                                    stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none"
                                    text-anchor="none" style="mix-blend-mode: normal">
                                    <path d="M0,172v-172h172v172z" fill="none"></path>
                                    <g fill="#2ecc71">
                                        <path
                                            d="M144.02133,39.82373c-13.8976,-11.16853 -35.87347,-13.06053 -36.80227,-13.1408c-1.46773,-0.12613 -2.86093,0.7052 -3.46293,2.0468c-0.02293,0.04587 -1.24987,3.60627 -2.43667,7.04053c16.1508,2.82653 27.1244,9.0988 27.7092,9.4428c2.74053,1.59387 3.65787,5.1084 2.05827,7.8432c-1.06067,1.8232 -2.98133,2.84373 -4.9536,2.84373c-0.9804,0 -1.96653,-0.24653 -2.8724,-0.774c-0.16053,-0.09747 -16.25973,-9.25933 -37.24947,-9.25933c-20.99547,0 -37.1004,9.1676 -37.26093,9.25933c-2.7348,1.58813 -6.2436,0.6536 -7.83173,-2.08693c-1.58813,-2.72907 -0.66507,-6.23213 2.064,-7.826c0.5848,-0.344 11.59853,-6.6392 27.7952,-9.46c-1.24987,-3.4744 -2.5112,-6.97747 -2.53413,-7.02333c-0.602,-1.34733 -1.9952,-2.19587 -3.46293,-2.0468c-0.9288,0.07453 -22.90467,1.96653 -36.98573,13.28987c-7.3616,6.79973 -22.06187,46.55467 -22.06187,80.926c0,0.60773 0.1548,1.19827 0.45867,1.72573c10.15373,17.83067 37.83427,22.4976 44.14093,22.69827c0.04013,0.00573 0.07453,0.00573 0.10893,0.00573c1.11227,0 2.16147,-0.5332 2.8208,-1.43333l6.82267,-9.24213c-14.964,-3.60627 -22.876,-9.27653 -23.35187,-9.62627c-2.5456,-1.8748 -3.096,-5.46387 -1.2212,-8.0152c1.86907,-2.53987 5.44667,-3.10173 7.99227,-1.2384c0.21213,0.1376 14.81493,10.36013 42.49547,10.36013c27.78947,0 42.35213,-10.26267 42.49547,-10.36587c2.5456,-1.84613 6.13467,-1.29 7.998,1.26707c1.8576,2.5456 1.31867,6.11173 -1.21547,7.9808c-0.47587,0.34973 -8.34773,6.00853 -23.27733,9.6148l6.73667,9.25933c0.65933,0.90587 1.70853,1.43333 2.8208,1.43333c0.04013,0 0.07453,0 0.10893,-0.00573c6.3124,-0.20067 33.99293,-4.8676 44.14093,-22.69827c0.30387,-0.52747 0.45867,-1.118 0.45867,-1.72573c0,-34.3656 -14.70027,-74.12053 -22.24533,-81.06933zM63.06667,108.93333c-6.33533,0 -11.46667,-6.4156 -11.46667,-14.33333c0,-7.91773 5.13133,-14.33333 11.46667,-14.33333c6.33533,0 11.46667,6.4156 11.46667,14.33333c0,7.91773 -5.13133,14.33333 -11.46667,14.33333zM108.93333,108.93333c-6.33533,0 -11.46667,-6.4156 -11.46667,-14.33333c0,-7.91773 5.13133,-14.33333 11.46667,-14.33333c6.33533,0 11.46667,6.4156 11.46667,14.33333c0,7.91773 -5.13133,14.33333 -11.46667,14.33333z">
                                        </path>
                                    </g>
                                </g>
                                </svg>
                            </i>
                            <h4>Discord</h4>
                            <a href="https://discord.gg/DMMF7bVYrh" style="text-decoration: none;" target="blank">
                                <p>IDNFT</p>
                            </a>
                        </div>
                    </div>
                </div>


                <!-- Form Email -->
                <form action="<?php echo site_url('Home/contact'); ?>" method="post" role="form" class="php-email-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="name">Your Name</label>
                            <input type="text" name="nama" class="form-control" id="name" data-rule="minlen:4"
                                data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="name">Your Email</label>
                            <input type="email" class="form-control" name="email" id="email" data-rule="email"
                                data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="name">Subject</label>
                        <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4"
                            data-msg="Please enter at least 8 chars of subject" />
                        <div class="validate"></div>
                    </div>
                    <div class="form-group">
                        <label for="name">Message</label>
                        <textarea class="form-control" name="message" rows="3" data-rule="required"
                            data-msg="Please write something for us"></textarea>
                        <div class="validate"></div>
                    </div>
                    <div class="mb-3">
                        <div class="loading">Loading</div>
                        <div class="error-message"></div>
                        <div class="sent-message">Your message has been sent. Thank you!</div>
                    </div>
                    <div class="text-center"><button type="submit">Send Message</button></div>
                </form>


            </div>

            <div class="container footer-bottom clearfix">
                <div class="copyright">
                    &copy;<script>
                    document.write(new Date().getFullYear());
                    </script> Copyright <strong><span>IDNFT</span></strong>. All Rights Reserved
                </div>
            </div>
    </section>
    <!-- End Contact Section -->
    <!-- ======= End Footer ======= -->




</body>

</html>