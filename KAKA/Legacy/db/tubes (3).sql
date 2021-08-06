-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 07, 2021 at 03:46 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tubes`
--

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `id` int(11) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`id`, `judul`, `isi`) VALUES
(10, 'Legacy', 'Legacy Photo Studio merupakan sebuah studio foto yang beralamat di Gang Lestari Utama, Kecamatan Cimahi Selatan, yang menyediakan jasa fotografi dan videografi. Khususnya untuk pelanggan yang ingin mengabadikan momen kelahiran anak atau new baby born.\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(155) NOT NULL,
  `keterangan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `keterangan`) VALUES
(4, 'Premium Packet', '1. Print 4 R (3)\r\n2. 10 foto Soft file\r\n3. 4 kostum baby\r\n4. Figura\r\n5. Free kostum semdiri'),
(5, 'Standart Packet', '1. Print 4 R (2)\r\n2. 7 foto soft file\r\n3. 3 kostum baby\r\n4. Figura'),
(6, 'Basic Packet', '1. Print 4 R (2)\r\n2. 5 foto soft file\r\n3. 2 kostum baby'),
(7, 'Paket Hemat', '1. Print 4 R (1)\r\n2. 1 kostum Baby');

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id` int(12) NOT NULL,
  `alamat` text NOT NULL,
  `mobile` varchar(12) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id`, `alamat`, `mobile`, `email`) VALUES
(1, 'Jl.Mahar Martanegara RT.03 RW.05 Kel.Utama Kec.Cimahi Selatan Kota Cimahi', '082122413816', 'LegacyStudio@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` varchar(15) NOT NULL,
  `kategori` varchar(10) NOT NULL,
  `harga` int(11) NOT NULL,
  `deskripsi` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `kategori`, `harga`, `deskripsi`) VALUES
('PKT01', 'Premium', 400000, 'Print 4R (3), 10 Foto Soft File, 4 Kostum Baby, Figura, Free Kostum Sendiri\r\n'),
('PKT02', 'Standar', 320000, 'Print 4R (2), 7 Foto Soft File, 3 Kostum Baby, Figura'),
('PKT03', 'Basic', 260000, 'Print 4R (2), 5 Foto Soft File, 2 Kostum Baby'),
('PKT04', 'Hemat', 100000, 'Print 4 R(1), 1 Kostum Baby');

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran`
--

CREATE TABLE `pembayaran` (
  `id_pembayaran` varchar(12) COLLATE latin1_spanish_ci NOT NULL,
  `id_pesanan` varchar(12) COLLATE latin1_spanish_ci NOT NULL,
  `id` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `tanggal` varchar(15) COLLATE latin1_spanish_ci NOT NULL,
  `total_bayar` int(15) NOT NULL,
  `bayar` int(15) NOT NULL,
  `status_bayar` varchar(15) COLLATE latin1_spanish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_spanish_ci;

--
-- Dumping data for table `pembayaran`
--

INSERT INTO `pembayaran` (`id_pembayaran`, `id_pesanan`, `id`, `tanggal`, `total_bayar`, `bayar`, `status_bayar`) VALUES
('PBY050421001', 'PSN050421001', 'PKT01', '05-04-2021', 500000, 600000, 'Lunas'),
('PBY070421002', 'PSN070421001', 'PKT02', '07-04-2021', 300000, 600000, 'Lunas'),
('PBY080421003', 'PSN080421001', 'PKT01', '08-04-2021', 500000, 750000, 'Lunas');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` varchar(10) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `no_telp` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `tanggal` date NOT NULL,
  `keterangan` varchar(100) NOT NULL,
  `jam` time NOT NULL,
  `id` varchar(30) NOT NULL,
  `nama_file` varchar(100) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `tipe` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `sosmed`
--

CREATE TABLE `sosmed` (
  `id` int(11) NOT NULL,
  `ig` text NOT NULL,
  `fb` text NOT NULL,
  `twitter` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sosmed`
--

INSERT INTO `sosmed` (`id`, `ig`, `fb`, `twitter`) VALUES
(1, 'https://www.instagram.com/legacyphotostudio/?hl=en', 'https://www.facebook.com/Legacypstudio', 'https://twitter.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `namaL` varchar(40) NOT NULL,
  `username` varchar(40) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jk` varchar(15) NOT NULL,
  `telp` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`namaL`, `username`, `password`, `email`, `jk`, `telp`) VALUES
('Angga Putera', 'angga', '8479c86c7afcb56631104f5ce5d6de62', 'anggaputeraramadhan@gmail.com', 'Laki-Laki', '085659935055'),
('Azwar Tri E', 'Azwar', 'c846fdd073e09118a5a7f42c4ae6dca2', 'azwartriendrayadi18@if.unjani.ac.id', 'Laki-Laki', '087564231622'),
('Yesi sofia', 'yesi', '486c0fab3c41e24f913b02a2cfcd26b3', 'yessisf09@gmail.com', 'Perempuan', '089671875269');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran`
--
ALTER TABLE `pembayaran`
  ADD PRIMARY KEY (`id_pembayaran`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `sosmed`
--
ALTER TABLE `sosmed`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `info`
--
ALTER TABLE `info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sosmed`
--
ALTER TABLE `sosmed`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
