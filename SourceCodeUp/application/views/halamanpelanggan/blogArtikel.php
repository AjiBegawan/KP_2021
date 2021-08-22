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
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

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
</head>

<body>

  <!-- ======= Header ======= -->
  <?php require_once('application\views\template\_header.php'); ?>
  <!-- End Header -->

  <main id="main">
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

        <!-- CARD 1 -->
        <div class="card-group">
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets\img\Artikel\ApaItuNFT.png") ?>" alt="Apa Itu NFT Art atau Crypto Art">
            <div class="card-body">
              <h3 class="card-title"><strong>Apa Itu NFT Art atau Crypto Art ?</strong></h3>
              <p class="card-text">NFT Art/ Crypto Art adalah sebuah aset digital yang tersedia mulai dari seni grafik digital sampai musik dengan menggunakan ekosistem blockchain, dapat...</p>
              <p><a href="<?php echo site_url('Blog/Artikel2') ?>" class="btn btn-danger">Baca Lengkap</a></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Posted August 2, 2021</small>
            </div>
          </div>


          <!-- CARD 2 -->
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets\img\Artikel1_1.png") ?>" alt="Cara Masuk ke NFT Art">

            <div class="card-body">
              <h3 class="card-title"><strong>Cara Masuk ke NFT Art</strong></h3>
              <p class="card-text">Hampir semua transaksi dalam NFT marketplace memerlukan pembayaran yang disebut “gas fee”, jadi wajib untuk kita memiliki saldo didalam wallet kita. Untuk marketplace berbasis Ethereum bisa menggunakan Metamask atau Wallet Connect...</p>
              <p><a href="<?php echo site_url('Blog/Artikel1') ?>" class="btn btn-danger">Baca Lengkap</a></p>
            </div>

            <div class="card-footer">
              <small class="text-muted">Posted August 2, 2021</small>
            </div>
          </div>

          <!-- CARD 3 -->
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets\img\Artikel\artikel3.jpeg") ?>" alt="Tips Untuk Memulai Berkarir di NFT Art Bagi Pemula">
            <div class="card-body">
              <h3 class="card-title"><strong>Tips Untuk Memulai Berkarir di NFT Art Bagi Pemula</strong></h3>
              <p class="card-text">Menjadi kreator atau seniman NFT berarti kita memasuki dunia baru yang berbeda dengan dunia seni tradisional pada umumnya. Disini seniman harus bisa memasarkan karyanya kedalam pasar...</p>
              <p><a href="<?php echo site_url('Blog/Artikel3') ?>" class="btn btn-danger">Baca Lengkap</a></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Posted August 2, 2021</small>
            </div>
          </div>
        </div>

        <br>
        <br>
        <div class="card-group">

          <!-- CARD 4 -->
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets\img\Artikel4.png") ?>" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title"><strong>Rekomendasi Platform NFT Art Untuk Pemula</strong></h3>
              <p class="card-text">Hi Fams, ada banyak sekali marketplace NFT yang beredar saat ini, dari yang sifatnya umum sampai dengan eksklusif. Jika kamu baru masuk dunia NFT dan ingin memulai karir sebagai...</p>
              <p><a href="<?php echo site_url('Blog/Artikel5') ?>" class="btn btn-danger">Baca Lengkap</a></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Posted August 2, 2021</small>
            </div>
          </div>

          <!-- CARD 5 -->
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets\img\Meta2.png") ?>" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title"><strong>Cara Membuat Digital Wallet : Metamask</strong></h3>
              <p class="card-text">Hi Fams, Digital wallet sangat diperlukan untuk NFT Art. Saat ingin memperoleh cryptocurrency, baik membeli ataupun menerima, pengirim akan mengarahkan ke alamat kriptografik unik yang...</p>
              <p><a href="<?php echo site_url('Blog/Artikel4') ?>" class="btn btn-danger">Baca Lengkap</a></p>
            </div>
            <div class="card-footer">
              <small class="text-muted">Posted August 2, 2021</small>
            </div>
          </div>

          <!-- CARD 6 -->
          <div class="card">
            <img class="card-img-top" src="<?= base_url("assets\img\Artikel\comingsoon.jpg") ?>" alt="Card image cap">
            <div class="card-body">
              <h3 class="card-title"></h3>
              <p class="card-text"></p>

            </div>
            <div class="card-footer">
              <small class="text-muted">This post will be post soon!!! See you</small>
            </div>
          </div>
        </div>

    </section>
  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php require_once('application\views\template\_footer.php'); ?>



</body>

</html>