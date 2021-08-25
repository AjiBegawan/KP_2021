-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 20, 2021 at 02:42 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `idnft`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `nama`, `email`, `subject`, `message`) VALUES
(8, 'Aji Begawan', 'test@gmail.com', 'subject', 'test lagi'),
(9, 'Aji Begawan', 'test@gmail.com', 'subject', '123'),
(10, 'Aji Begawan', 'test@gmail.com', 'subject', '123123');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `email` varchar(255) NOT NULL,
  `id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id_role` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id_role`, `nama`, `keterangan`) VALUES
(1, 'Administrator', 'Hak Akses Administrator'),
(2, 'Member', 'Hak Akses member');

-- --------------------------------------------------------

--
-- Table structure for table `test_product`
--

CREATE TABLE `test_product` (
  `id` int(13) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(10) NOT NULL,
  `jumlah` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `test_product`
--

INSERT INTO `test_product` (`id`, `nama`, `harga`, `jumlah`) VALUES
(1, 'Vaseline', 25000, 1),
(2, 'Nature Republic', 98, 1),
(3, 'Seblak', 10000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `aliran_seni` varchar(50) NOT NULL,
  `idnft` varchar(50) NOT NULL,
  `instagram` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `email`, `phone`, `alamat`, `aliran_seni`, `idnft`, `instagram`, `twitter`, `facebook`, `role`) VALUES
('123', '$2y$10$Tm9x6WglNnowcrjMNcutU.KMPlD1bc2CY9Hmgkj3E.SaX2c6ak4xq', '123', 'test@gmail.com', '', '', 'Lain - Lain', '0', '', '', '', 2),
('aji', '$2y$10$lgL02.gDgZP2L7/JfIWyPebxXewWMmIs57cf3ogzmyGE6X8O52GSe', 'Aji Begawan', 'test@gmail.com', '081345518334', 'Bandung', '2D', '0', 'instagram Aji', 'twitter Aji', '', 2),
('ajibegawan', '$2y$10$j.rqKWOmSvBRHjgsOYYmR.HlU9r5MPveVBKNgM.DkQf/uRpa8gPqW', 'Indiarto Aji Begawan', 'indizi130899@gmail.com', '', '', '2D', '61049', '', '', '', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `test_product`
--
ALTER TABLE `test_product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
