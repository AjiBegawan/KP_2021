<?php
include ("koneksi.php");
$id=$_GET['id'];

$simpan=mysqli_query($con,"DELETE FROM paket WHERE id='$id'");
header('location:../indexpaket.php');
?>