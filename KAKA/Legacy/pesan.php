<?php
require_once('Admin/konfigurasi/koneksi.php');

// tambahkan get untuk total untuk disimpan
$total = $_POST['total'];
// batas bawah
$id_pesanan = $_POST['id_pesanan'];
$nama = $_POST['nama'];
$no_telp = $_POST['no_telp'];
$alamat = $_POST['alamat'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];
$jam = $_POST['jam'];
$id = implode(', ', $_POST['id']);

// Ambil Data yang Dikirim dari Form
$nama_file = $_FILES['gambar']['name'];
$ukuran_file = $_FILES['gambar']['size'];
$tipe_file = $_FILES['gambar']['type'];
$tmp_file = $_FILES['gambar']['tmp_name'];

$path = "images/".$nama_file;

if($tipe_file == "image/jpeg" || $tipe_file == "image/png"){ // Cek apakah tipe file yang diupload adalah JPG / JPEG / PNG
    // Jika tipe file yang diupload JPG / JPEG / PNG, lakukan :
    if($ukuran_file <= 1000000){ // Cek apakah ukuran file yang diupload kurang dari sama dengan 1MB
      // Jika ukuran file kurang dari sama dengan 1MB, lakukan :
      // Proses upload
      if(move_uploaded_file($tmp_file, $path)){ // Cek apakah gambar berhasil diupload atau tidak
        // Jika gambar berhasil diupload, Lakukan :  
        // Proses simpan ke Database
        //sql untuk insert

        //Lalu masukan vaiable total di bagian akhir di query insert setelah variable tipe_file
        $sql = "INSERT INTO pesanan VALUES ('$id_pesanan', '$nama','$no_telp','$alamat', '$tanggal', '$keterangan', '$jam', '$id', '$nama_file', '$ukuran_file', '$tipe_file', '$total')";
        if (mysqli_query($con, $sql)) {
            header('location:indexpesan.php');
        } else {
            echo "Gagal";
        }
        mysqli_close($con);
      }
    }
  }

