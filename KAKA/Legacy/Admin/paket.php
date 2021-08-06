<?php
require_once('konfigurasi/koneksi.php');
$id = $_POST['id'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

//sql untuk insert
$sql = "INSERT INTO paket VALUES ('$id', '$kategori','$harga','$deskripsi')";
if (mysqli_query($con, $sql)) {
    header('location:indexpaket.php');
} else {
    echo "Gagal";
}
mysqli_close($con);
