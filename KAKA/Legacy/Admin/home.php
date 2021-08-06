<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Legacy</title>
</head>

<body>
    <?php
        require_once('konfigurasi/koneksi.php');
        $query = mysqli_query($con, "SELECT * FROM pesanan");
        $data = mysqli_fetch_array($query);
    ?>
  <div class="menu">
    <?php include("dashboard.php"); ?>
  </div>
  <center>
    <div class="col-xs-10 c0l-md-5">
      <h3>
        <font face="Times New Roman, Times, serif">Data Pesanan
      </h3>
      <div>
        <br />
      </div>
    </div>
    <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID pesanan</th>
                    <th>Nama</th>
                    <th>No_Telp</th>
                    <th>Alamat</th>
                    <th>Jadwal</th>
                    <th>Paket</th>
                    <th>Keterangan</th>
                    <th>Bukti Pembayaran</th>
                    <th>Status</th>
                </tr>
            </thead>

            <?php
            require_once('konfigurasi/koneksi.php');
            // $id_pesanan = $_GET['id_pesanan'];
            $sql = "SELECT * FROM pesanan";
            $result = mysqli_query($con, $sql);
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $row['id_pesanan'] ?> </td>
                    <td> <?php echo $row['nama'] ?></td>
                    <td> <?php echo $row['no_telp'] ?></td>
                    <td> <?php echo $row['alamat'] ?></td>
                    <td> Tanggal : <?php echo $row['tanggal'] ?> / Waktu : <?php echo $row['jam'] ?></td>
                    <td> <?php echo $row['id'] ?> </td>
                    <td> <?php echo $row['keterangan'] ?></td>
                    <td> <?php echo "<img src='images/".$row['nama_file']."' width='100' height='100'>"?></td>
                    <td>
                      <a href="pembayaran.php" target="_BLANK">BAYAR</a>
                      <a href="konfigurasi/hapus.php?id_pesanan=<?php echo $data['id_pesanan'];?>">HAPUS</a>
                    </td>
                </tr>
            <?php
            } ?>
        </table>
</body>

</html>