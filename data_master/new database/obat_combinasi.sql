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
-- Struktur dari tabel `obat_combinasi`
--

CREATE TABLE IF NOT EXISTS `obat_combinasi` (
`id_obat_combinasi` int(11) NOT NULL,
  `nama_obat_combinasi` varchar(100) NOT NULL,
  `deleted` tinyint(4) DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `obat_combinasi`
--

INSERT INTO `obat_combinasi` (`id_obat_combinasi`, `nama_obat_combinasi`, `deleted`) VALUES
(1, 'test1', 0),
(2, 'test2', 0),
(3, 'test3', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat_combinasi`
--
ALTER TABLE `obat_combinasi`
 ADD PRIMARY KEY (`id_obat_combinasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat_combinasi`
--
ALTER TABLE `obat_combinasi`
MODIFY `id_obat_combinasi` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
