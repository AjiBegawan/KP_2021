<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Data Paket
    <?php 
        include "../judul.php";
    ?>
    </title>
</head>

<body>
    <div class="menu">
        <?php include("dashboard.php") ?>
    </div>
    
    <center>
    <form method="post" action="paket.php">
        <h3>
					<font face="Times New Roman, Times, serif">Input Paket
		</h3>
        <table>
            <tr>
                <th scope="row">ID Paket</th>
                <td><input type="text" class="form-control" name="id" required="required"></td>
            </tr>
            <tr>
                <th scope="row">Kategori</th>
                <td><input type="text" class="form-control" name="kategori" placeholder="masukkan kategori" required="required"></td>
            </tr>
            <tr>
                <th scope="row">Harga</th>
                <td><input type="text" class="form-control" name="harga" placeholder="masukkan harga" required></td>
            </tr>
            <tr>
                <th scope="row">Deskripsi</th>
                <td>
                <textarea class="form-control" rows="3" name="deskripsi" placeholder ="masukkan deskripsi"required></textarea>
                </td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-info" name="simpan"></td>
            </tr>
        </table>
        <br />
        <div class='alert alert-info' role='alert'>
            <center>Tabel Data Paket</center>
        </div>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>No</th>
                    <th>ID Paket</th>
                    <th>Kategori</th>
                    <th>Harga</th>
                    <th>Deskripsi</th>
                </tr>
            </thead>

            <?php
            require_once('konfigurasi/koneksi.php');
            $result = mysqli_query($con, "SELECT * FROM paket");
            $no = 1;
            while ($row = mysqli_fetch_assoc($result)) { ?>
                <tr>
                    <td> <?php echo $no++ ?> </td>
                    <td> <?php echo $row['id'] ?> </td>
                    <td> <?php echo $row['kategori'] ?> </td>
                    <td> <?php echo $row['harga'] ?> </td>
                    <td> <?php echo $row['deskripsi'] ?> </td>
                    <td>
						<a href="FEPaket.php?id=<?php echo $row['id']; ?>">Edit</a>
                        <a href="konfigurasi/HPaket.php?id=<?php echo $row['id']; ?>">Hapus</a>
					</td>
                </tr>
            <?php
            } ?>
            <tr>
                <td><font color="red">Hanya dapat melakukan pengeditan harga dan deskripsi</font></td>
            </tr>
</body>

</html>