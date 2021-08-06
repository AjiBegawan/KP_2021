<?php
require_once('koneksi.php');
$id_pembayaran = $_POST['id_pembayaran'];
$id_pesanan = $_POST['id_pesanan'];
$id = $_POST['id'];
$tanggal = $_POST['tanggal'];
$total_bayar = $_POST['total_bayar'];
$bayar = $_POST['bayar'];
$status_bayar = $_POST['status_bayar'];

$query = "UPDATE pembayaran set id_pesanan='$id_pesanan',id='$id',tanggal='$tanggal',total_bayar='$total_bayar',bayar='$bayar',status_bayar='$status_bayar'  where id_pembayaran='$id_pembayaran'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
header("location:../pembayaran.php");
