<?php
require_once('koneksi.php');
$id = $_POST['id'];
$kategori = $_POST['kategori'];
$harga = $_POST['harga'];
$deskripsi = $_POST['deskripsi'];

$query = "UPDATE paket set id='$id',kategori='$kategori',harga='$harga',deskripsi='$deskripsi' where id='$id'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
header("location:../indexpaket.php");