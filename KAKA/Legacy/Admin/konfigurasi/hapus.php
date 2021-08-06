<?php
include ("koneksi.php");
$id_pesanan=$_GET['id_pesanan'];

$simpan=mysqli_query($con,"DELETE FROM pesanan WHERE id_pesanan='$id_pesanan'");
header('location:../home.php');
?>