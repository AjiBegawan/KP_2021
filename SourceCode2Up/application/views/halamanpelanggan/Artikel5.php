<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Blog | IDNFT</title>
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
  <link href="<?= base_url() ?>assets/css/style.css" rel="stylesheet">

  <link rel="icon" type="image/png" href="https://www.weebly.com/uploads/reseller/assets/438585504-favicon.ico">

</head>

<body>

  <main id="main">
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
              <li><a href="<?= site_url() ?>/Login" style="text-decoration: none;"><strong>LOGIN</strong></a></li>
              <li><a href="<?= site_url() ?>/SignUp" style="text-decoration: none;"><strong>REGISTER</strong></a></li>
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
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
      <div class="container">
        <div class="d-flex justify-content-between align-items-center">
          <h2>Blog Page</h2>
        </div>
      </div>
    </section><!-- End Breadcrumbs -->
    <!-- <div class="wsite-image wsite-image-border-medium " style="padding-top:5px;padding-bottom:10px;margin-left:0px;margin-right:10px;text-align:center">
            <a>
                <img src="<?= base_url("assets\img\Artikel\artikel3.jpeg") ?>" alt="Apa itu NFT" style="width:100%;">
            </a>
            <h6>First Emoji dari Beeple, seniman NFT tersukses di dunia saat ini dengan total penjualan mencapai $69M di 2021.</h6>
        </div> -->
    <div class="container">
      <section class="inner-page" style="margin: 0 15% 0 15%;">
        <h1 style="text-align:center;">Rekomendasi Platform NFT Art Untuk Pemula</h1> <br>
        <div class="paragraph" style="text-align:left">
          <font size="4">
            Hi Fams, ada banyak sekali marketplace NFT yang beredar saat ini, dari yang sifatnya umum sampai dengan eksklusif. Jika kamu baru masuk dunia NFT dan ingin memulai karir sebagai seniman NFT berikut beberapa rekomendasi yang bisa dicoba :
            <ol>
              <br>
              <li><strong>OpenSea</strong></li>
              <a>
                <img src="<?= base_url("assets\img\Artikel\Sub\PlatformNFT1.png") ?>" alt="PlatformNFT.png" style="width:100%;"><br>
              </a>
              <p><br>OpenSea merupakan platform marketplace NFT terbesar didunia dengan berbasis blockchain Tezos. Open Sea tidak hanya hanya menyediakan karya seni dan collectible item dalam bentuk token ERC-721, tetapi juga menyediakan token ERC-1155. Menariknya lagi, ada banyak jenis NFT yang bisa diperjual-belikan melalui platform OpenSea. Bahkan,untuk yang tidak memiliki keahlian seni namun tertarik untuk menjajal peruntungan melalui NFT, dapat menjual satu kata dalam bentuk NFT.</p>
              <p>OpenSea merupakan pilihan yang cukup baik bagi pemula, untuk dapat mengupload dan menjual karya disini seniman atau creator cukup membayar biaya Gas sekali saja, untuk upload dan listing berikutnya gratis sampai dengan jumlah yang tak terhingga. Opensea juga memungkinkan para seniman untuk bisa membuat edisi (copy) dalam setiap karyanya. Seniman bisa mengupload satu karya dan bisa memberikan edisi berapapun jumlahnya sesuai dengan yang diharapkan. </p>

              <li><strong>Rarible</strong></li>
              <a>
                <img src="<?= base_url("assets\img\Artikel\Sub\PlatformNFT2.png") ?>" alt="PlatformNFT.png" style="width:100%;">
              </a>
              <br>
              <p><br>Rarible merupakan Marketplace yang memudahkan seniman dan pencipta karya seni digital untuk menerbitkan dan menjual NFTnya. Keunggulan dari Rarible yaitu memiliki native token yang Bernama $RARI untuk melakukan transaksi NFT. Rarible juga mempunyai domain ENS atau Ethereum Name Service. Domain ini digunakan untuk alamat pengiriman Ethereum. Domain ENS ini menggunakan .eth sebagai alamat untuk mengirim dan menerima ETH.</p>
              <p>Beda dengan Opensea, di Rarible dikenakan biaya Gas untuk setiap proses minting dan juga listing. Untuk besaran biaya Gas tidak tentu bisa naik ataupun turun tergantung kepadatan server. Untuk memudahkan memantau tinggi rendahnya biaya Gas bisa cek di sini https://gas.metasync.app/ </p>

              <li><strong>HIC ET NUNC (HEN)</strong></li>
              <a>
                <img src="<?= base_url("assets\img\Artikel\Sub\PlatformNFT3.png") ?>" alt="PlatformNFT.png" style="width:100%;">
              </a>
              <br>
              <p><br>Platform NFT Art yang dibuat dengan jaringan Tesla. Hic Et Nunc (Latin for Here and Now) adalah platform yang memungkinkan untuk membeli, menjual, memperdagangkan, dan mencetak asset digital di Tezos Blockchain yang terdesentralisasi. Blockchain Tezos ini bergantung pada bukti kepemilikan dan bukti kerja untuk beroperasi yang membuatnya jauh lebih murah dan ramah lingkungan. Harga gas fee nya sekitar 10 sen di Tezos vs 100 dolar di Ethereum.</p>
              <p>Saat ini banyak sekali seniman Indonesia yang mulai masuk kedalam NFT melalui platform ini, selain biayanya gas yang murah, terdapat juga komunitas yang cukup besar dengan jumlah transaksi yang sangat banyak setiap harinya. Di platform ini seniman juga bisa mengoleksi karya dari seniman-seniman lain karena biayanya yang relatif terjangkau. Saat ini HEN bisa menjadi pilihan yang cukup baik untuk seniman memulai karir di dalam NFT. </p>
              <p>Kekurangan platform ini mungkin desain interface yang simple dan cukup berbeda dengan desain marketplace lain secara umum. Bagi pengguna baru mungkin akan cukup kesulitan, namun semuanya akan menjadi biasa dan mudah setelah kita beberapa kali mencobanya. Ada juga marketplace sejenis yang memiliki desain interface lebih nyaman yaitu OBJKT beberapa opsi penjualan juga tersedia disini seperti auction dan offer. Secara umum kita bisa juga menghubungkan akun HEN kita ke platform tersebut, very nice!.</p>

              <li><strong>Foundation</strong></li>
              <a>
                <img src="<?= base_url("assets\img\Artikel\Sub\PlatformNFT4.png") ?>" alt="PlatformNFT.png" style="width:100%;">
              </a>
              <p><br>Foundation merupakan salah satu marketplace NFT baru yang keluar di tahun 2020. Saat ini menjadi salah satu platform yang cukup populer dikalangan para seniman. Foundation merupakan platform yang konsepnya hampir sama dengan Rarible, hanya saja semua karya disini hanya memiliki 1/1 edisi, atau seniman hanya bisa menjual karyanya 1 copy saja. Selain itu untuk bisa masuk menjadi creator di marketplace ini, seniman harus mendapatkan invitation code (referral code) yang hanya bisa didapatkan bagi mereka yang sudah bergabung lebih awal dan sudah mendapatkan penjualan dari karyanya. </p>
              <p>Sama dengan Rarible, untuk melakukan upload atau minting dan juga listing seniman harus membayar biaya Gas, untuk memudahkan memantau tinggi rendahnya biaya Gas bisa cek di sini https://gas.metasync.app/. </p>

            </ol>
        </div>
      </section>
    </div>
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
              <i class=""><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30" height="30" viewBox="0 0 172 172" style=" fill:#000000;">
                  <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                    <path d="M0,172v-172h172v172z" fill="none"></path>
                    <g fill="#e74c3c">
                      <path d="M144.02133,39.82373c-13.8976,-11.16853 -35.87347,-13.06053 -36.80227,-13.1408c-1.46773,-0.12613 -2.86093,0.7052 -3.46293,2.0468c-0.02293,0.04587 -1.24987,3.60627 -2.43667,7.04053c16.1508,2.82653 27.1244,9.0988 27.7092,9.4428c2.74053,1.59387 3.65787,5.1084 2.05827,7.8432c-1.06067,1.8232 -2.98133,2.84373 -4.9536,2.84373c-0.9804,0 -1.96653,-0.24653 -2.8724,-0.774c-0.16053,-0.09747 -16.25973,-9.25933 -37.24947,-9.25933c-20.99547,0 -37.1004,9.1676 -37.26093,9.25933c-2.7348,1.58813 -6.2436,0.6536 -7.83173,-2.08693c-1.58813,-2.72907 -0.66507,-6.23213 2.064,-7.826c0.5848,-0.344 11.59853,-6.6392 27.7952,-9.46c-1.24987,-3.4744 -2.5112,-6.97747 -2.53413,-7.02333c-0.602,-1.34733 -1.9952,-2.19587 -3.46293,-2.0468c-0.9288,0.07453 -22.90467,1.96653 -36.98573,13.28987c-7.3616,6.79973 -22.06187,46.55467 -22.06187,80.926c0,0.60773 0.1548,1.19827 0.45867,1.72573c10.15373,17.83067 37.83427,22.4976 44.14093,22.69827c0.04013,0.00573 0.07453,0.00573 0.10893,0.00573c1.11227,0 2.16147,-0.5332 2.8208,-1.43333l6.82267,-9.24213c-14.964,-3.60627 -22.876,-9.27653 -23.35187,-9.62627c-2.5456,-1.8748 -3.096,-5.46387 -1.2212,-8.0152c1.86907,-2.53987 5.44667,-3.10173 7.99227,-1.2384c0.21213,0.1376 14.81493,10.36013 42.49547,10.36013c27.78947,0 42.35213,-10.26267 42.49547,-10.36587c2.5456,-1.84613 6.13467,-1.29 7.998,1.26707c1.8576,2.5456 1.31867,6.11173 -1.21547,7.9808c-0.47587,0.34973 -8.34773,6.00853 -23.27733,9.6148l6.73667,9.25933c0.65933,0.90587 1.70853,1.43333 2.8208,1.43333c0.04013,0 0.07453,0 0.10893,-0.00573c6.3124,-0.20067 33.99293,-4.8676 44.14093,-22.69827c0.30387,-0.52747 0.45867,-1.118 0.45867,-1.72573c0,-34.3656 -14.70027,-74.12053 -22.24533,-81.06933zM63.06667,108.93333c-6.33533,0 -11.46667,-6.4156 -11.46667,-14.33333c0,-7.91773 5.13133,-14.33333 11.46667,-14.33333c6.33533,0 11.46667,6.4156 11.46667,14.33333c0,7.91773 -5.13133,14.33333 -11.46667,14.33333zM108.93333,108.93333c-6.33533,0 -11.46667,-6.4156 -11.46667,-14.33333c0,-7.91773 5.13133,-14.33333 11.46667,-14.33333c6.33533,0 11.46667,6.4156 11.46667,14.33333c0,7.91773 -5.13133,14.33333 -11.46667,14.33333z"></path>
                    </g>
                  </g>
                </svg>
                <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                  <path d="M0,172v-172h172v172z" fill="none"></path>
                  <g fill="#2ecc71">
                    <path d="M144.02133,39.82373c-13.8976,-11.16853 -35.87347,-13.06053 -36.80227,-13.1408c-1.46773,-0.12613 -2.86093,0.7052 -3.46293,2.0468c-0.02293,0.04587 -1.24987,3.60627 -2.43667,7.04053c16.1508,2.82653 27.1244,9.0988 27.7092,9.4428c2.74053,1.59387 3.65787,5.1084 2.05827,7.8432c-1.06067,1.8232 -2.98133,2.84373 -4.9536,2.84373c-0.9804,0 -1.96653,-0.24653 -2.8724,-0.774c-0.16053,-0.09747 -16.25973,-9.25933 -37.24947,-9.25933c-20.99547,0 -37.1004,9.1676 -37.26093,9.25933c-2.7348,1.58813 -6.2436,0.6536 -7.83173,-2.08693c-1.58813,-2.72907 -0.66507,-6.23213 2.064,-7.826c0.5848,-0.344 11.59853,-6.6392 27.7952,-9.46c-1.24987,-3.4744 -2.5112,-6.97747 -2.53413,-7.02333c-0.602,-1.34733 -1.9952,-2.19587 -3.46293,-2.0468c-0.9288,0.07453 -22.90467,1.96653 -36.98573,13.28987c-7.3616,6.79973 -22.06187,46.55467 -22.06187,80.926c0,0.60773 0.1548,1.19827 0.45867,1.72573c10.15373,17.83067 37.83427,22.4976 44.14093,22.69827c0.04013,0.00573 0.07453,0.00573 0.10893,0.00573c1.11227,0 2.16147,-0.5332 2.8208,-1.43333l6.82267,-9.24213c-14.964,-3.60627 -22.876,-9.27653 -23.35187,-9.62627c-2.5456,-1.8748 -3.096,-5.46387 -1.2212,-8.0152c1.86907,-2.53987 5.44667,-3.10173 7.99227,-1.2384c0.21213,0.1376 14.81493,10.36013 42.49547,10.36013c27.78947,0 42.35213,-10.26267 42.49547,-10.36587c2.5456,-1.84613 6.13467,-1.29 7.998,1.26707c1.8576,2.5456 1.31867,6.11173 -1.21547,7.9808c-0.47587,0.34973 -8.34773,6.00853 -23.27733,9.6148l6.73667,9.25933c0.65933,0.90587 1.70853,1.43333 2.8208,1.43333c0.04013,0 0.07453,0 0.10893,-0.00573c6.3124,-0.20067 33.99293,-4.8676 44.14093,-22.69827c0.30387,-0.52747 0.45867,-1.118 0.45867,-1.72573c0,-34.3656 -14.70027,-74.12053 -22.24533,-81.06933zM63.06667,108.93333c-6.33533,0 -11.46667,-6.4156 -11.46667,-14.33333c0,-7.91773 5.13133,-14.33333 11.46667,-14.33333c6.33533,0 11.46667,6.4156 11.46667,14.33333c0,7.91773 -5.13133,14.33333 -11.46667,14.33333zM108.93333,108.93333c-6.33533,0 -11.46667,-6.4156 -11.46667,-14.33333c0,-7.91773 5.13133,-14.33333 11.46667,-14.33333c6.33533,0 11.46667,6.4156 11.46667,14.33333c0,7.91773 -5.13133,14.33333 -11.46667,14.33333z"></path>
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
              <input type="text" name="nama" class="form-control" id="name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group col-md-6">
              <label for="name">Your Email</label>
              <input type="email" class="form-control" name="email" id="email" data-rule="email" data-msg="Please enter a valid email" />
              <div class="validate"></div>
            </div>
          </div>
          <div class="form-group">
            <label for="name">Subject</label>
            <input type="text" class="form-control" name="subject" id="subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
            <div class="validate"></div>
          </div>
          <div class="form-group">
            <label for="name">Message</label>
            <textarea class="form-control" name="message" rows="3" data-rule="required" data-msg="Please write something for us"></textarea>
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

  </main><!-- End #main -->

</body>

</html>