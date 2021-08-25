-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 15, 2021 at 03:06 PM
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
  `instagram` varchar(50) NOT NULL,
  `twitter` varchar(50) NOT NULL,
  `facebook` varchar(50) NOT NULL,
  `role` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `nama`, `email`, `phone`, `alamat`, `aliran_seni`, `instagram`, `twitter`, `facebook`, `role`) VALUES
('123', '$2y$10$9CtGj3DyjOXxWKKHd0lvJeuJpbtDoj8nEdh9utrH.YZBRRptLLe3K', 'Test', 'test@gmail.com', '+6281345518334', 'Bandung Cimahi', '1', '', '', '', 2),
('3411181114', '$2y$10$0TOd6PChS9l4hIGGGngVB.ztng/BVWOq8O4QiRyCKwqdZKI8Gk4s6', 'Test', 'admin@mail.com', '+6281345518334', '', '1', '', '', '', 2),
('aji', '$2y$10$kFDuTCfHSo1Gt6vXElpYJuI7.ydXBzAt0TsLVVW1Ob5bJBtAVke6y', 'Indiarto Aji Begawan', 'test@gmail.com', '+6281345518334', 'Bandung', '1', 'instagram Aji', 'twitter Aji', 'facebook Aji', 2),
('aji123', '$2y$10$IOBrzibI9vGBqiX.HLsU8e85KFRxpn..nmymd6gFyWXhjvMVzv7Qa', 'Test', 'mabrurbeef@gmail.com', '+6281345518334', '', '1', '', '', '', 2),
('aji2', '$2y$10$H770wdQBSBG71JsGSuAIcuDzu8s/CEZOZAYh8z7yWETyBEcngGIf.', 'Test', 'admin@mail.com', '+6281345518334', '', '1', '', '', '', 2),
('aji3', '$2y$10$z2QqxTIiwKxDzu2ArbPjvO9AILGzowSnOonviiv6TiJqaT6aJrReu', 'Test', 'test@gmail.com', '+6281345518334', '', '1', '', '', '', 2),
('devita', '$2y$10$sYWMujljG2MXpKrtTmG4yusqqZ2.AVb3FXhGuaZ1I8ojvrgUsI4pS', 'devita', 'test@gmail.com', '+6281345518334', '', '1', 'ig', 'tw', 'fc', 2),
('indiartoaji13@gmail.com', '$2y$10$/f2jmjNa54.NrG0JTCjKXOuDIRKckdLQS2PMEn/98yxppVR2IPv7y', 'Test', 'indiartoaji13@gmail.com', '+6281345518334', '', '', '', '', '', 1);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
