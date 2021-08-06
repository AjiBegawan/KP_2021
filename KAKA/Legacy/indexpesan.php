<!DOCTYPE html>
<html lang="en">
<?php include("menu.php"); ?>

<head>
    <meta charset="utf-8">
    <title>Form Pesanan</title>
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Custom styles for this template -->

    <!-- Ini CDN untuk jquery jangan lupa di copy -->
    <script src="https://code.jquery.com/jquery-1.9.1.js" integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA=" crossorigin="anonymous"></script>
    <!--  -->

    <style>

    .container{
    	width:400px;
	    height:400px;
	    padding : 5px;
	    /* position: static; */
	    /* top: 100%;
	    left: 50%; */
	    margin-top: -300px;
	    margin-left: 10px;
        
        /* pada container ditambahkan position relative, agar div total bisa paling bawah div */
        position: relative;
        /*  */
    }
    .center {
        margin-left: auto;
        margin-right: auto;
    }


    /* ini css untuk beberapa content yang dibuat */
    .card {
    box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
    transition: 0.3s;
    width: 100%;
    }

    .card:hover {
    box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }

    .container2 {
    padding: 2px 16px;
    padding-bottom: 20px;
    }

    div.absolute {
        position: absolute;
        width: 50%;
        bottom: -280px;
        /* border: 3px solid #8AC007; */
    } 
    /* samapi sini */
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
                        <td><input type="date" id="tanggal" class="form-control" name="tanggal" required></td>
                    </tr>
                    <tr>
                        <th scope="row">Jam</th>
                        <td><input type="time" class="form-control" name="jam" id="jam" required></td>
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
                            <label><input type="checkbox" id="premium-cek" name="id[]" value="PKT 01"> Paket Premium</label><br>
                            <label><input type="checkbox" id="standar-cek" name="id[]" value="PKT 02"> Paket Standar</label><br>
                            <label><input type="checkbox" id="basic-cek" name="id[]" value="PKT 03"> Paket Basic</label><br>
                            <label><input type="checkbox" id="hemat-cek" name="id[]" value="PKT 04"> Paket Hemat</label><br>
                        </td>
                    </tr>
                    <!-- nambahin input hidden untuk memasukan harga total dari paket mana saja yang dipilih -->
                    <input type="hidden" name="total" id="tot-harga">
                    <!--  -->
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

        <!-- ini yang di tambahin sampai yang ditandai -->
             <div class="container">
                <h1>Informasi Pesanan Anda</h1>
                <hr>
                <div class="card">
                    <div class="container2">
                        <h4><b>ID : <?php echo $kodePemesanan ?></b></h4> 
                        Tanggal : <input type="text" name="" id="t-tanggal" style="width:100%"> 
                        Jam : <input type="text" name="" id="t-jam" style="width:100%"> 
                    </div>
                </div>
                
                <div id="premium">
                    <h4>Paket Premium</h4>
                    <h5>Rp. 400.000</h5>
                    <h6>Print 4R (3), 10 Foto Soft File, 4 Kostum Baby, Figura, Free Kostum Sendiri</h6>
                </div>
                <div id="standar">
                    <h4>Paket Standar</h4>
                    <h5>Rp. 320.000</h5>
                    <h6>Print 4R (2), 7 Foto Soft File, 3 Kostum Baby, Figura </h6>
                </div>
                <div id="basic">
                    <h4>Paket Basic</h4>
                    <h5>Rp. 260.000</h5>
                    <h6>Print 4R (2), 5 Foto Soft File, 2 Kostum Baby</h6>
                </div>
                <div id="hemat">
                    <h4>Paket Hemat</h4>
                    <h5>Rp. 100.000</h5>
                    <h6>Print 4 R(1), 1 Kostum Baby</h6>
                </div>
                <div class="absolute">
                    <h4>Total : <span id="total">0</span></h4>
                </div>
        <!-- sampai sini  -->





                <?php
                        if (isset($_POST['submit'])) {
                            echo '<li>ID Pesanan: ' . $_GET['id_pesanan'] . '</li>';
                         
                            
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
                        <!-- Menampilkan nilai dari form pemesanan yang telah diinput -->
                      
	    </div>
                   
	            <!-- <div class="card-body">
		                Selamat datang di tutorial bootstrap 4 lengkap dari paling dasar sampai mahir, untuk pemula sampai expert.
	            </div>

	            <div class="card-footer">
	            	www.malasngoding.com
	            </div>
            </div>

            <br/>

            <div class="card">
                <div class="card-header bg-danger text-white">
                    Tutorial Bootstrap 4
                </div>

                <div class="card-body bg-secondary text-white">
                    Selamat datang di tutorial bootstrap 4 lengkap dari paling dasar sampai mahir, untuk pemula sampai expert.
                </div>

                <div class="card-footer bg-success text-white">
                    www.malasngoding.com
                </div>
            </div>

            <br/>
            <div class="card border-danger">
                <div class="card-header">
                    Tutorial Bootstrap 4
                </div>

                <div class="card-body ">
                    Selamat datang di tutorial bootstrap 4 lengkap dari paling dasar sampai mahir, untuk pemula sampai expert.
                </div>

                <div class="card-footer">
                    www.malasngoding.com
                </div>
            </div>
            </div> -->
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

<!-- ini javascript untuk menampilkan paket2 yang dipilih dan fungsi2 lainnya -->
<script>

    var harga1 = 0;
    var harga2 = 0;
    var harga3 = 0;
    var harga4 = 0;
    var total = 0;

    $(".card").hide();
    $("#premium").hide();
    $("#standar").hide();
    $("#basic").hide();
    $("#hemat").hide();

    $("#premium-cek").click(function() {
    if($(this).is(":checked")) {
        $("#premium").show();
        harga1 = 400000;
        total = harga1+harga2+harga3+harga4;
        $("#total").text(total);
        $("#tot-harga").val(total);
    } else {
        $("#premium").hide();
        harga1 = 0;
        total = harga1+harga2+harga3+harga4;
        $("#total").text(total);
        $("#tot-harga").val(total);
    }});

    $("#standar-cek").click(function() {
    if($(this).is(":checked")) {
        $("#standar").show();
        harga2 = 320000;
        total = harga1+harga2+harga3+harga4;
        $("#total").text(total);
        $("#tot-harga").val(total);
    } else {
        $("#standar").hide();
        harga2 = 0;
        total = harga1+harga2+harga3+harga4;
        $("#total").text(total);
        $("#tot-harga").val(total);
    }});

    $("#basic-cek").click(function() {
    if($(this).is(":checked")) {
        $("#basic").show();
        harga3 = 260000;
        total = harga1+harga2+harga3+harga4;
        $("#total").text(total);
        $("#tot-harga").val(total);
    } else {
        $("#basic").hide();
        harga3 = 0;
        total = harga1+harga2+harga3+harga4;
        $("#total").text(total);
        $("#tot-harga").val(total);
    }});

    $("#hemat-cek").click(function() {
    if($(this).is(":checked")) {
        $("#hemat").show();
        harga4 = 100000;
        total = harga1+harga2+harga3+harga4;
        $("#total").text(total);
        $("#tot-harga").val(total);
    } else {
        $("#hemat").hide();
        harga4 = 0;
        total = harga1+harga2+harga3+harga4;
        $("#total").text(total);
        $("#tot-harga").val(total);
    }});

    $('#tanggal').on('change', function() {
        $("#t-tanggal").val(this.value);
        $(".card").show();
    });

    $('#jam').on('change', function() {
        $("#t-jam").val(this.value);
    });
</script>
<!-- Sampai sini -->
</html>