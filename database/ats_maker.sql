-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 31, 2022 at 02:27 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ats_maker`
--

-- --------------------------------------------------------

--
-- Table structure for table `ats_form`
--

CREATE TABLE `ats_form` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `no_hp` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `link` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kota` varchar(50) NOT NULL,
  `pendidikan` varchar(100) NOT NULL,
  `keahlian` varchar(50) NOT NULL,
  `keahlian1` varchar(50) NOT NULL,
  `keahlian2` varchar(50) NOT NULL,
  `pengalaman` varchar(50) NOT NULL,
  `pengalaman1` varchar(50) NOT NULL,
  `pengalaman2` varchar(50) NOT NULL,
  `bahasa` varchar(20) NOT NULL,
  `bahasa1` varchar(20) NOT NULL,
  `bahasa2` varchar(20) NOT NULL,
  `sertifikat` varchar(20) NOT NULL,
  `sertifikat1` varchar(20) NOT NULL,
  `sertifikat2` varchar(20) NOT NULL,
  `tanggalMulai` varchar(20) NOT NULL,
  `tanggalMulai1` varchar(20) NOT NULL,
  `tanggalMulai2` varchar(20) NOT NULL,
  `tanggalExpired` varchar(20) NOT NULL,
  `tanggalExpired1` varchar(20) NOT NULL,
  `tanggalExpired2` varchar(20) NOT NULL,
  `ringkasan` text NOT NULL,
  `gambar` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ats_form`
--

INSERT INTO `ats_form` (`id`, `nama`, `pekerjaan`, `no_hp`, `email`, `link`, `alamat`, `kota`, `pendidikan`, `keahlian`, `keahlian1`, `keahlian2`, `pengalaman`, `pengalaman1`, `pengalaman2`, `bahasa`, `bahasa1`, `bahasa2`, `sertifikat`, `sertifikat1`, `sertifikat2`, `tanggalMulai`, `tanggalMulai1`, `tanggalMulai2`, `tanggalExpired`, `tanggalExpired1`, `tanggalExpired2`, `ringkasan`, `gambar`) VALUES
(7, 'Dian Nur Anggraini', 'Manager Marketing', '081234567890', 'diananggraini@gmail.com', 'linkedin.com/diannur_an', 'Jalan Gatot Subroto Barat No. 25x', 'Denpasar', 'S1 Ekonomi', 'Microsoft Office (Excel, Word, Powerpoint)', 'Front-end Website', '', 'Runner Up - Front-end Website Championship', '', '', 'Bahasa Indonesia', 'Bahasa Inggris', '', 'Sertifikasi Akuntan', 'Sertifikasi Microsof', '', '07/09/2020', '01/12/2020', '', '07/09/2030', '11/12/2025', '', 'Seorang Manager Marketing di Perusahaan Tokopedia, telah berkarir selama 5 Tahun sebagai seorang Manager, dan telah mengurus lebih dari 2 Perusahaan dalam kurun 5 tahun. Mahir dalam penggunaan Microsoft Office serta memiliki sertifikasi khusus yang langsung diberikan oleh Perusahaan Microsoft.', 'foto-cv-contoh.png');

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE `pesan` (
  `id` int(11) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `con_password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ats_form`
--
ALTER TABLE `ats_form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesan`
--
ALTER TABLE `pesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ats_form`
--
ALTER TABLE `ats_form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `pesan`
--
ALTER TABLE `pesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
