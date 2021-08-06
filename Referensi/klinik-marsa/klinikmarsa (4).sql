-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Des 2020 pada 06.03
-- Versi server: 10.1.36-MariaDB
-- Versi PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinikmarsa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id_berita` int(50) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `judul_berita` varchar(100) NOT NULL,
  `isi_berita` text NOT NULL,
  `tanggal_berita` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `berita`
--

INSERT INTO `berita` (`id_berita`, `gambar`, `judul_berita`, `isi_berita`, `tanggal_berita`) VALUES
(3, 'about_034.jpg', 'Program CSR (Corporate Social Responsibility) dari Klinik Marsa Untuk Masyarakat', 'Selain memberikan layanan untuk pemeriksaan kesehatan di Klinik, Klinik Marsa memiliki program CSR (Corporate Social Responsibility) untuk mendukung visi nya dengan memberikan layanan sosial seperti kegiatan penyuluhan kesehatan kepada masyarakat, layanan sosial untuk penyandang Tuna netra di Cimahi dan dapat bekerjasama untuk pemeriksaan kesehatan dengan lembaga yang sudah bekerja sama maupun belum bekerja sama. ', '2020-11-11');

-- --------------------------------------------------------

--
-- Struktur dari tabel `dokter`
--

CREATE TABLE `dokter` (
  `id_dokter` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `nama_dokter` varchar(125) NOT NULL,
  `no_telepon` varchar(15) NOT NULL,
  `status_dokter` varchar(125) NOT NULL,
  `gambar` varchar(125) NOT NULL,
  `tempat_praktek` varchar(125) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `id_poli`, `nama_dokter`, `no_telepon`, `status_dokter`, `gambar`, `tempat_praktek`) VALUES
(16, 0, 'dr.Gabriela', '08965324567', 'Tetap', 'clinic_04.jpg', 'Klinik Marsa'),
(19, 0, 'dr. Farisyaliana Rizkia Sidik', '08532146770', 'Tetap', 'icon-service2.png', 'Klinik Marsa'),
(20, 0, 'dr. Suwanda Wahyudin', '081176098243', 'Tetap', 'about_033.jpg', 'Klinik Marsa'),
(21, 0, 'dr. Sasmita ', '08345611234', 'Tidak Tetap', 'icon-service3.png', 'Klinik Marsa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_dokter` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `hari` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_dokter`, `id_waktu`, `id_poli`, `hari`) VALUES
(2, 2, 2, 0, 'Senin'),
(3, 1, 3, 0, 'Senin'),
(4, 12, 2, 0, 'Selasa'),
(5, 12, 3, 0, 'Rabu'),
(7, 0, 2, 0, 'Senin'),
(9, 0, 1, 0, 'Senin'),
(10, 13, 2, 0, 'Selasa'),
(11, 0, 2, 0, 'Selasa'),
(12, 0, 1, 0, 'Selasa'),
(13, 0, 1, 0, 'Selasa'),
(16, 0, 2, 0, 'Selasa'),
(17, 0, 2, 0, 'Senin'),
(18, 0, 1, 0, 'Kamis'),
(20, 16, 1, 0, 'Senin'),
(21, 19, 2, 0, 'Senin'),
(22, 16, 1, 0, 'Selasa'),
(23, 21, 2, 0, 'Selasa'),
(24, 16, 1, 0, 'Rabu'),
(25, 21, 2, 0, 'Rabu'),
(26, 19, 1, 0, 'Kamis'),
(27, 20, 2, 0, 'Kamis'),
(28, 19, 1, 0, 'Jumat'),
(30, 16, 1, 0, 'Jumat'),
(31, 19, 2, 0, 'Jumat'),
(32, 0, 0, 0, 'Senin'),
(33, 20, 1, 0, 'Rabu');

-- --------------------------------------------------------

--
-- Struktur dari tabel `jam_layanan`
--

CREATE TABLE `jam_layanan` (
  `id_jamlayanan` int(12) NOT NULL,
  `id_waktu` int(12) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `jam_layanan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `jam_layanan`
--

INSERT INTO `jam_layanan` (`id_jamlayanan`, `id_waktu`, `id_poli`, `jam_layanan`) VALUES
(1, 1, 0, '08.00'),
(2, 1, 0, '08.20'),
(3, 1, 0, '08.40'),
(4, 1, 0, '09.00'),
(5, 2, 0, '16.00'),
(6, 2, 0, '16.20'),
(7, 2, 0, '16.40'),
(8, 2, 0, '17.00'),
(9, 1, 0, '09.20'),
(10, 1, 0, '09.40'),
(11, 1, 0, '10.00'),
(12, 1, 0, '10.20'),
(13, 1, 0, '10.40'),
(14, 1, 0, '11.00'),
(15, 1, 0, '11.20'),
(16, 1, 0, '11.40'),
(17, 1, 0, '12.00'),
(18, 2, 0, '17.20'),
(19, 2, 0, '17.40'),
(20, 2, 0, '18.00'),
(21, 2, 0, '18.20'),
(22, 2, 0, '18.40'),
(23, 2, 0, '19.00'),
(24, 2, 0, '19.20'),
(25, 2, 0, '19.40'),
(26, 2, 0, '20.00');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengajuan_booking`
--

CREATE TABLE `pengajuan_booking` (
  `id_booking` int(11) NOT NULL,
  `id_pengguna` int(11) NOT NULL,
  `id_waktu` int(11) NOT NULL,
  `id_jamlayanan` int(11) NOT NULL,
  `id_poli` int(11) NOT NULL,
  `nama_calon_pasien` varchar(100) NOT NULL,
  `no_telepon` varchar(100) NOT NULL,
  `noRekmed_noId` int(100) NOT NULL,
  `tanggal` date NOT NULL,
  `alamat` text NOT NULL,
  `persetujuan` enum('setuju','tidak setuju','proses') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengajuan_booking`
--

INSERT INTO `pengajuan_booking` (`id_booking`, `id_pengguna`, `id_waktu`, `id_jamlayanan`, `id_poli`, `nama_calon_pasien`, `no_telepon`, `noRekmed_noId`, `tanggal`, `alamat`, `persetujuan`, `created_at`) VALUES
(1, 17, 1, 16, 0, 'Novanda dina', '081321453333', 120, '2020-11-19', 'Kab bandung Jawa barat', 'tidak setuju', '2020-11-17 02:32:51'),
(2, 17, 2, 8, 0, 'Bayu Maulana', '081321145768', 120, '2020-11-20', 'Cihanjuang parongpong kabupaten bandung barat', 'proses', '2020-11-17 05:53:15'),
(3, 15, 1, 15, 0, 'sri mulyani azhar', '083211675876', 15, '2020-11-18', 'cimahi', 'setuju', '2020-11-17 06:27:57'),
(4, 15, 1, 16, 0, 'diana', '08965324567', 1234566, '2020-12-18', 'cimahi', 'proses', '2020-12-17 02:08:46');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pengguna`
--

CREATE TABLE `pengguna` (
  `id_pengguna` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `level` enum('superadmin','administrasi','pasien','minisment') NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pengguna`
--

INSERT INTO `pengguna` (`id_pengguna`, `username`, `password`, `nama`, `level`, `date_created`) VALUES
(5, 'superadmin', 'adminsuper', 'Super Admin', 'superadmin', '2020-10-28 04:29:53'),
(6, 'administrasi', 'adminklinik', 'hana', 'administrasi', '2020-11-16 18:09:13'),
(13, 'minismentKlinik', 'klinikmarsa', 'minisment', 'minisment', '2020-11-16 18:08:51'),
(15, 'srimazhar', 'srimazhar29', 'Sri Mulyani Azhar', 'pasien', '2020-11-11 21:35:30'),
(17, 'marsauser', 'akunsaya', 'Marsa', 'pasien', '2020-11-16 18:17:07');

-- --------------------------------------------------------

--
-- Struktur dari tabel `poli`
--

CREATE TABLE `poli` (
  `id_poli` int(11) NOT NULL,
  `nama_poli` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `poli`
--

INSERT INTO `poli` (`id_poli`, `nama_poli`, `keterangan`) VALUES
(7, 'spesialis', 'jnkm');

-- --------------------------------------------------------

--
-- Struktur dari tabel `waktu`
--

CREATE TABLE `waktu` (
  `id_waktu` int(11) NOT NULL,
  `waktu_layanan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `waktu`
--

INSERT INTO `waktu` (`id_waktu`, `waktu_layanan`) VALUES
(1, 'Pagi'),
(2, 'Sore');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id_berita`);

--
-- Indeks untuk tabel `dokter`
--
ALTER TABLE `dokter`
  ADD PRIMARY KEY (`id_dokter`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indeks untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_dokter` (`id_dokter`),
  ADD KEY `id_waktu` (`id_waktu`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indeks untuk tabel `jam_layanan`
--
ALTER TABLE `jam_layanan`
  ADD PRIMARY KEY (`id_jamlayanan`),
  ADD KEY `id_waktu` (`id_waktu`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indeks untuk tabel `pengajuan_booking`
--
ALTER TABLE `pengajuan_booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_pengguna` (`id_pengguna`),
  ADD KEY `id_waktu` (`id_waktu`),
  ADD KEY `id_jamlayanan` (`id_jamlayanan`),
  ADD KEY `id_poli` (`id_poli`);

--
-- Indeks untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`id_pengguna`);

--
-- Indeks untuk tabel `poli`
--
ALTER TABLE `poli`
  ADD PRIMARY KEY (`id_poli`);

--
-- Indeks untuk tabel `waktu`
--
ALTER TABLE `waktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id_berita` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `dokter`
--
ALTER TABLE `dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT untuk tabel `jam_layanan`
--
ALTER TABLE `jam_layanan`
  MODIFY `id_jamlayanan` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT untuk tabel `pengajuan_booking`
--
ALTER TABLE `pengajuan_booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `pengguna`
--
ALTER TABLE `pengguna`
  MODIFY `id_pengguna` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT untuk tabel `poli`
--
ALTER TABLE `poli`
  MODIFY `id_poli` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `waktu`
--
ALTER TABLE `waktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
