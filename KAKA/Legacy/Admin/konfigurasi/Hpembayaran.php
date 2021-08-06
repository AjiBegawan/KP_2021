<?php
include ("koneksi.php");
$id_pembayaran=$_GET['id_pembayaran'];

$simpan=mysqli_query($con,"DELETE FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
header('location:../pembayaran.php');
?>