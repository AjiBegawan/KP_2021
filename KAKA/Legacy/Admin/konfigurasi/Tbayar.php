<?php
require_once('koneksi.php');
$id_pembayaran = $_POST['id_pembayaran'];
$id_pesanan = $_POST['id_pesanan'];
$id = ($_POST['id']);
$tanggal = $_POST['tanggal'];
$total_bayar = $_POST['total_bayar'];
$bayar = $_POST['bayar'];
$status_bayar = $_POST['status_bayar'];
mysqli_query($con, "INSERT INTO pembayaran VALUES('$id_pembayaran','$id_pesanan','$id','$tanggal','$total_bayar','$bayar','$status_bayar')");
header("location:../pembayaran.php");
