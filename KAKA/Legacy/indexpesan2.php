<!DOCTYPE html>
<html lang="en">
<?php include("menu.php"); ?>

<head>
    <meta charset="utf-8">
    <title>Form Pesanan</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Custom styles for this template -->

    <style>
    .nav-vertical.nav-tabs > li.active > a, .scroll-to-bullets a.active, .nav-pagination > li > .current, .nav-pagination > li > span:hover, .nav-pagination > li > a:hover, .has-hover:hover .badge-outline .badge-inner, .accordion-title.active, .featured-table, .is-outline:hover, .tagcloud a:hover, blockquote, .has-border, .cart-icon strong:after, .cart-icon strong, .blockUI:before, .processing:before, .loading-spin, .slider-nav-circle .flickity-prev-next-button:hover svg, .slider-nav-circle .flickity-prev-next-button:hover .arrow, .primary.is-outline:hover
    {
        border-color: #000000;
    }
    .has-border {
        border: 2px solid #446084;
        padding: 15px 30px 30px;
    }
    .col-inner {
        position: relative;
        margin-left: auto;
        margin-right: auto;
        width: 100%;
        background-position: 50% 50%;
        background-size: cover;
        background-repeat: no-repeat;
        -ms-flex: 1 0 auto;
        flex: 1 0 auto;
    }
    *, *:before, *:after {
    box-sizing: border-box;
    }
    * {
         -webkit-tap-highlight-color: transparent!important;
    }
    form.checkout h3 {
        font-size: 1.1em;
        overflow: hidden;
        padding-top: 10px;
        font-weight: bolder;
        text-transform: uppercase;
    }

    .container{
    	width:400px;
	    height:400px;
	    padding : 5px;
	    /* position: static; */
	    /* top: 100%;
	    left: 50%; */
	    margin-top: -300px;
	    margin-left: 10px;
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }
    </style>
</head>

<body>
    <table border = "1" class="center">
        <td>
            <?php
            require_once('Admin/konfigurasi/koneksi.php');
            // mengambil data barang dengan kode paling besar
            $query = mysqli_query($con, "SELECT max(id_pesanan) as kodeTerbesar FROM pesanan");
            $data = mysqli_fetch_array($query);
            $kodePemesanan = $data['kodeTerbesar'];

            $urutan = (int) substr($kodePemesanan, 3, 3);
            // bilangan yang diambil ini ditambah 1 untuk menentukan nomor urut berikutnya
            $urutan++;
            $tanggal = date("dmy");
            $huruf = "PSN";
            $kodePemesanan = $huruf . sprintf("%03s", $urutan);
            ?>
            <form method="post" action="pesan.php" enctype="multipart/form-data">
                <table class="table table-striped">
                    <div class='alert alert-info' role='alert'>
                        <center>Masukkan Data Diri Anda</center>
                    </div>
                    <tr>
                        <th scope="row">ID Pesanan</th>
                        <td><input type="text" class="form-control" name="id_pesanan" required="required" value="<?php echo $kodePemesanan ?>" readonly></td>
                    </tr>
                    <tr>
                        <th scope="row">Nama</th>
                        <td><input type="text" class="form-control" name="nama" placeholder="masukkan nama anda" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Alamat lengkap</th>
                        <td><input type="text" class="form-control" rows="3" name="alamat" placeholder="masukan alamat lengkap" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Nomor HP</th>
                        <td><input type="text" class="form-control" name="no_telp" placeholder="masukkan nomor hp" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Tanggal</th>
                        <td><input type="date" class="form-control" name="tanggal" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Jam</th>
                        <td><input type="time" class="form-control" name="jam" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Keterangan</th>
                        <td><input type="text" class="form-control" name="keterangan" placeholder="nama bayi, tanggal lahir" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Bukti Pembayaran</th>
                        <td>
                            <input type="file" name="gambar" required></input>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">Paket</th>
                        <td>
                            <label><input type="checkbox" name="id[]" value="PKT 01"> Paket Premium</label><br>
                            <label><input type="checkbox" name="id[]" value="PKT 02"> Paket Standar</label><br>
                            <label><input type="checkbox" name="id[]" value="PKT 03"> Paket Basic</label><br>
                            <label><input type="checkbox" name="id[]" value="PKT 04"> Paket Hemat</label><br>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="submit" class="btn btn-info" name="simpan" value="Simpan"></td>
                        <td>Lihat terlebih dahulu tanggal pada tabel data pesanan <font color="red">dibawah</font>, agar tidak bentrok</td>
                    </tr>
                </table>
            </form>
        </td>
        <td>
        <!-- <div class="card bg-primary text-white">
        <div class="card-header"> -->
             <div class ="col-inner has border">
                <h3 id="order_review_heading">Informasi Pesanan Anda</h3>

                <?php
                        if (isset($_POST['submit'])) {
                        -    echo '<li>ID Pesanan: ' . $_GET['id_pesanan'] . '</li>';
                         
                            
                        //     $list_pesan = array();
                        //     foreach ($program as $skill) {
                        //         if ( isset($_POST['skill_' . $skill]) )
                        //         {
                        //             $list_pesan[] = $skill;
                        //         }
                        //     }
                        // echo '<li>Skill: ' . ($list_pesan ? join($list_pesan, ', ') : '-') . '</li>';
                        // echo '</ul>';
                    }?>
             </div> 
        </td>
</table>
    <br />
    <div class='alert alert-info' role='alert'>
        <center>Tabel Data Pesanan</center>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>ID pesanan</th>
                <th>Nama Pemesan</th>
                <th>Jadwal</th>
                <th>Cetak</th>
            </tr>
        </thead>

        <?php
        require_once('Admin/konfigurasi/koneksi.php');
        $sql = "SELECT * FROM pesanan";
        $result = mysqli_query($con, $sql);
        $no = 1;
        while ($row = mysqli_fetch_assoc($result)) { ?>
            <tr>
                <td> <?php echo $no++ ?> </td>
                <td> <?php echo $row['id_pesanan'] ?> </td>
                <td> <?php echo $row['nama'] ?></td>
                <td> Tanggal : <?php echo $row['tanggal'] ?> / Waktu : <?php echo $row['jam'] ?></td>
                <td><a href="nota.php?id_pesanan=<?php echo $row['id_pesanan'] ?>" target="_BLANK">PRINT</a>
                <td>
            </tr>
        <?php
        } ?>
    </table>
    <div class="footer">
        <div class="footer">
            <?php include("footer.php"); ?>
        </div>
    </div>
</body>
</html>