-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2022 at 09:02 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `persebaran_gmit`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`) VALUES
(1, 'Admin', 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `gereja`
--

CREATE TABLE `gereja` (
  `id_gereja` int(11) NOT NULL,
  `nama_gereja` varchar(255) NOT NULL,
  `id_rayon` int(11) NOT NULL,
  `id_klasis` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `lokasi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gereja`
--

INSERT INTO `gereja` (`id_gereja`, `nama_gereja`, `id_rayon`, `id_klasis`, `id_kecamatan`, `lokasi`) VALUES
(41, 'GMIT Jemaat Kota Kupang', 2, 1, 4, '-10.1627254,123.5777664'),
(42, 'GMIT Jemaat Kota Baru', 1, 1, 2, '-10.1557154,123.614981'),
(43, 'Gereja GMIT Jemaat Marturia Oesapa Selatan', 1, 4, 2, '-10.1563607,123.6540377'),
(44, 'Gereja GMIT Jemaat Agape Kupang', 2, 1, 4, '-10.1633091,123.5799852'),
(45, 'Gereja GMIT Jemaat Bet\'el Oesapa', 1, 4, 2, '-10.1467386,123.6502198'),
(46, 'GMIT Jemaat Benyamin Oebufu', 3, 4, 6, '-10.1732045,123.6277426'),
(47, 'GMIT BETLEHEM PENKASE OELETA', 5, 1, 1, '-10.180616,123.5544321'),
(48, 'GMIT Jemaat Betlehem Penkase - Oeleta', 5, 1, 1, '-10.1827587,123.558782'),
(49, 'GMIT Jemaat Bahtera Hayat Osmo', 5, 1, 1, '-10.1823361,123.5562705'),
(50, 'Gereja GMIT Jemaat Kefas Kampung Baru', 2, 1, 6, '-10.1650107,123.5868694'),
(51, 'Gereja GMIT Jemaat Zoar Penkase', 5, 1, 1, '-10.1909198,123.5522431'),
(52, 'GMIT Jemaat Lahai-Roi Namosain', 5, 1, 1, '-10.1732898,123.5580872'),
(53, 'GMIT Jemaat Syalom Airnona', 3, 1, 3, '-10.18272,123.5875369'),
(54, 'GMIT Jemaat Moria Kota Nyonya - Wilayah Moria Alak', 5, 1, 1, '-10.1820948,123.5649322'),
(55, 'Gereja GMIT Jemaat Betlehem Oesapa Barat', 1, 4, 2, '-10.1496388,123.6297952'),
(56, 'GMIT Jemaat Tamariska Maulafa', 3, 4, 5, '-10.1891856,123.6216335'),
(58, 'Gereja GMIT Jemaat Bukit Karang Hoinbala', 2, 1, 1, '-10.1739074,123.5831026'),
(59, 'GMIT Jemaat Anugerah', 3, 1, 3, '-10.1756871,123.6005456'),
(60, 'GMIT Jemaat Batu Karang Kupang', 3, 1, 3, '-10.1697828,123.595413'),
(61, 'Gereja GMIT Jemaat EBENHEIZER, Oeba', 1, 1, 4, '-10.1587681,123.590257'),
(62, 'GMIT Jemaat Imanuel Batukadera', 2, 1, 1, '-10.1707839,123.5770096'),
(63, 'GMIT Jemaat Yegar Sahaduta Osmo', 5, 1, 1, '-10.1750726,123.5549156'),
(64, 'Gereja GMIT Jemaat Sion Oepura', 4, 1, 5, '-10.1962119,123.6107333'),
(65, 'GMIT JEMAAT IMANUEL OEPURA', 4, 1, 5, '-10.1894399,123.6069155'),
(66, 'Gereja GMIT Jemaat Maranatha Oebufu', 3, 4, 6, '-10.176596,123.6224666'),
(67, 'GMIT Jemaat Gloria Kayu Putih', 6, 2, 6, '-10.1656219,123.6230497'),
(68, 'GMIT Jemaat Karmel Fatululi', 1, 1, 6, '-10.1592856,123.6056133'),
(69, 'GMIT Jemaat Koinonia Kuanino', 3, 1, 3, '-10.1716336,123.5899252'),
(70, 'GMIT Jemaat Yarden Labat', 3, 1, 3, '-10.1872928,123.5951738'),
(71, 'Gereja Pniel Oebobo', 1, 1, 6, '-10.1672624,123.5995415'),
(72, 'Gereja GMIT Jemaat Baitel Nunhila', 5, 1, 1, '-10.1693269,123.5684101'),
(73, 'GMIT Jemaat Bukit Zaitun Tenau', 5, 1, 1, '-10.1929547,123.5347819');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `kecamatan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`id_kecamatan`, `kecamatan`) VALUES
(1, 'Alak'),
(2, 'Kelapa Lima'),
(3, 'Kota Raja'),
(4, 'Kota Lama'),
(5, 'Maulafa'),
(6, 'Oebobo');

-- --------------------------------------------------------

--
-- Table structure for table `klasis`
--

CREATE TABLE `klasis` (
  `id_klasis` int(11) NOT NULL,
  `nama_klasis` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klasis`
--

INSERT INTO `klasis` (`id_klasis`, `nama_klasis`) VALUES
(1, 'Kota Kupang'),
(2, 'Tidak diketahui'),
(4, 'Kupang Timur');

-- --------------------------------------------------------

--
-- Table structure for table `rayon`
--

CREATE TABLE `rayon` (
  `id_rayon` int(11) NOT NULL,
  `nama_rayon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rayon`
--

INSERT INTO `rayon` (`id_rayon`, `nama_rayon`) VALUES
(1, 'I'),
(2, 'II'),
(3, 'III'),
(4, 'IV'),
(5, 'V'),
(6, 'Tidak diketahui');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `gereja`
--
ALTER TABLE `gereja`
  ADD PRIMARY KEY (`id_gereja`),
  ADD KEY `gereja_ibfk_1` (`id_rayon`),
  ADD KEY `id_klasis` (`id_klasis`),
  ADD KEY `id_kecamatan` (`id_kecamatan`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `klasis`
--
ALTER TABLE `klasis`
  ADD PRIMARY KEY (`id_klasis`);

--
-- Indexes for table `rayon`
--
ALTER TABLE `rayon`
  ADD PRIMARY KEY (`id_rayon`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gereja`
--
ALTER TABLE `gereja`
  MODIFY `id_gereja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `klasis`
--
ALTER TABLE `klasis`
  MODIFY `id_klasis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rayon`
--
ALTER TABLE `rayon`
  MODIFY `id_rayon` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gereja`
--
ALTER TABLE `gereja`
  ADD CONSTRAINT `gereja_ibfk_1` FOREIGN KEY (`id_rayon`) REFERENCES `rayon` (`id_rayon`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gereja_ibfk_2` FOREIGN KEY (`id_klasis`) REFERENCES `klasis` (`id_klasis`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
