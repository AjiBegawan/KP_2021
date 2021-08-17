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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">

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
    <!-- Header -->
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
        </section><!-- End Breadcrumbs -->

        <div>
            <div class="wsite-image wsite-image-border-medium " style="padding-top:5px;padding-bottom:10px;margin-left:0px;margin-right:10px;text-align:center">
                <a>
                    <img src="<?= base_url() ?>assets\img\NFT.png" alt="NFT ART" style="width:100%;max-width:100%;">
                </a>
                <h6>Ini Caption</h6>
            </div>
        </div>
        <h1 style="text-align:center;">Cara Masuk ke NFT Art</h1>
        <div class="container">
            <section class="inner-page">
                <div class="paragraph" style="text-align:left">
                    <font size="4">Semua orang bisa mengakses NFT Art marketplace, namun untuk bisa melakukan transaksi penjualan atau pembelian ada beberapa tahapan yang harus dilalui :&nbsp;<br>&nbsp;
                        <ol>
                            <li><strong>Membuat Crypto Digital Wallet</strong></li>
                            <p> Hampir semua transaksi dalam NFT marketplace memerlukan pembayaran yang disebut “gas fee”, jadi wajib untuk kita memiliki saldo didalam wallet kita. Untuk marketplace berbasis Ethereum bisa menggunakan Metamask atau Wallet Connect yang bisa dipasang di “adds-on” browser kita (Google Chrome atau Firefox). Untuk marketplace berbasis Tezos bisa menggunakan Temple Wallet, dll. Untuk mengisi saldonya bisa melakukan pembelian secara langsung menggunakan Credit Card, atau bisa beli di Crypto Market dan melakukan transfer ke wallet kita secara manual.</p>
                            <li><strong>Menentukan Crypto Marketplace (Jenis Blockchain)</strong></li>
                            <p> Setiap blockchain memiliki standar token NFTnya tersendiri maka bijaklah dalam memilih blockchain yang akan digunakan. Karya hanya dapat dijual di platform yang mendukung blockchain yang sama.Salah Satu ekosistem NFT terbesar saat ini adalah Ethereum blockchain. Ada beberapa marketplace populer yang bisa kita coba untuk dapat memasuki NFT Art seperti: Open Sea, Rarible, Foundation, Nifty Gateway, Super Rare, Makers Place, dll. Setiap marketplace memiliki ketentuan tersendiri, termasuk ketentuan besaran biaya pembayaran gas fee. Selain Ethereum ada juga blockchain lain yang biaya gas fee-nya jauh lebih murah seperti Tezos dan juga Binance. Platform di blockchain ini bisa menjadi pilihan yang lebih baik jika ingin mencoba masuk dalam NFT Art dengan biaya yang relatif lebih murah. Beberapa Nft marketplace berbasis Tezoz antara lain; Hic Et Nunc (HEN), Async Art, Kalamint, dll. </p>
                            <li><strong>Mendaftar di NFT Marketplace</strong></li>
                            <p>Setelah menentukan platform blockchain mana yang sesuai, selanjutnya bisa mendaftarkan diri di NFT marketplace yang ada didalamnya. Caranya relatif mudah selama kita sudah memiliki Wallet yang sudah berisi saldo. Masuk ke marketplace dan hubungkan (connect) wallet kita dengan marketplace tersebut lalu ikuti pengisian data sesuai dengan yang dibutuhkan.Untuk menjadi kreator atau seniman di marketplace premium diperlukan kuratorial, jika lolos kita bisa masuk ke dalamnya seperti Nifty Gateway, Super Rare, Makers Place. Bagi pemula bisa masuk ke marketplace populer yang tidak memerlukan kuratorial seperti Open sea, Rarible, atau Hic Et Nunc.</p>
                            <li><strong>Melakukan proses Minting dan Listing</strong></li>
                            <p>Setelah berhasil masuk kedalam marketplace kita bisa menyiapkan karya yang akan diupload ke dalam blockchain (minting), setelah berhasil kita bisa melakukan proses listing (penjualan) dan menentukan harga dan juga edisi/copy dari karya kita. Setelah itu bisa menentukan sistem penjualan seperti jual dengan fix price, auction (lelang) dan lainnya sesuai dengan fasilitas yang tersedia dari masing-masing platform. </p>
                            <li><strong>Menerima pembayaran</strong></li>
                            <p>Setelah produk kita terjual, secara otomatis pembayaran akan masuk ke wallet kita, dan status kepemilikan dari karya akan berpindah ke pembeli. Semua transaksi akan secara terbuka tercatat dalam blockchain dan siapa saja bisa melihatnya. Dalam proses ini ada beberapa marketplace yang mengharuskan seniman melakukan pembayaran gas fee untuk bisa menerima pembayaran (auction settle).</p>
                        </ol>
                    </font>
                </div>
        </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <?php require_once('application\views\template\_footer.php'); ?>


</body>

</html>