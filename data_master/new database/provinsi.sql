-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Nov 2015 pada 12.41
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fornas`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
`id` int(9) NOT NULL,
  `id_provinsi` varchar(5) NOT NULL,
  `provinsi` varchar(150) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`id`, `id_provinsi`, `provinsi`, `deleted`) VALUES
(1, '11', 'Aceh', 0),
(2, '12', 'Sumatera Utara', 0),
(3, '13', 'Sumatera Barat', 0),
(4, '14', 'Riau', 0),
(5, '15', 'Jambi', 0),
(6, '16', 'Sumatera Selatan', 0),
(7, '17', 'Bengkulu', 0),
(8, '18', 'Lampung', 0),
(9, '19', 'Kepulauan Bangka Belitung', 0),
(10, '20', 'Kepulauan Riau', 0),
(11, '31', 'DKI Jakarta', 0),
(12, '32', 'Jawa Barat', 0),
(13, '33', 'Jawa Tengah', 0),
(14, '34', 'DI Yogyakarta', 0),
(15, '35', 'Jawa Timur', 0),
(16, '36', 'Banten', 0),
(17, '51', 'Bali', 0),
(18, '52', 'Nusa Tenggara Barat', 0),
(19, '53', 'Nusa Tenggara Timur', 0),
(20, '61', 'Kalimantan Barat', 0),
(21, '62', 'Kalimantan Tengah', 0),
(22, '63', 'Kalimantan Selatan', 0),
(23, '64', 'Kalimantan Timur & Kalimantan Utara', 0),
(24, '71', 'Sulawesi Utara', 0),
(25, '72', 'Sulawesi Tengah', 0),
(26, '73', 'Sulawesi Selatan', 0),
(27, '74', 'Sulawesi Tenggara', 0),
(28, '75', 'Gorontalo', 0),
(29, '76', 'Sulawesi Barat', 0),
(30, '81', 'Maluku', 0),
(31, '82', 'Maluku Utara', 0),
(32, '91', 'Papua Barat', 0),
(33, '92', 'Papua', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `provinsi`
--
ALTER TABLE `provinsi`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `provinsi`
--
ALTER TABLE `provinsi`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=34;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
