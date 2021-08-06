<?php
require_once('koneksi.php');
$id = $_POST['id'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];

$query = "UPDATE info set judul='$judul',isi='$isi' where id='$id'";
$result = mysqli_query($con, $query) or die(mysqli_error($con));
header("location:../info.php");
