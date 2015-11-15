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
-- Struktur dari tabel `detail_obat_combinasi`
--

CREATE TABLE IF NOT EXISTS `detail_obat_combinasi` (
`id_detail_combinasi` int(11) NOT NULL,
  `nama_obat_combinasi` varchar(100) NOT NULL,
  `id_atc_obat` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `detail_obat_combinasi`
--

INSERT INTO `detail_obat_combinasi` (`id_detail_combinasi`, `nama_obat_combinasi`, `id_atc_obat`) VALUES
(1, 'test1', 'A01AA01'),
(2, 'test1', 'A01AA02'),
(3, 'test1', 'A01AA03'),
(4, 'test2', 'A01AD11'),
(5, 'test2', 'A01AB19'),
(6, 'test3', 'A01AA04'),
(7, 'test3', 'A01AA30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_obat_combinasi`
--
ALTER TABLE `detail_obat_combinasi`
 ADD PRIMARY KEY (`id_detail_combinasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_obat_combinasi`
--
ALTER TABLE `detail_obat_combinasi`
MODIFY `id_detail_combinasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
