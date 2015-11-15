-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Nov 2015 pada 12.42
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
-- Struktur dari tabel `satuan`
--

CREATE TABLE IF NOT EXISTS `satuan` (
`id` int(9) NOT NULL,
  `id_satuan` varchar(10) NOT NULL,
  `nama_satuan` varchar(150) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `satuan`
--

INSERT INTO `satuan` (`id`, `id_satuan`, `nama_satuan`, `keterangan`, `deleted`) VALUES
(1, 'A0', 'MICROGRAM', '0', 0),
(2, 'B0', 'MILIGRAM', 'mg', 0),
(3, 'C0', 'GRAM ', 'g', 0),
(4, 'D0', 'MICROLITER', '0', 0),
(5, 'E0', 'MILILITER', 'ml', 0),
(6, 'F0', 'LITER', 'L', 0),
(7, 'G0', 'MICROMOL', '0', 0),
(8, 'H0', 'MILIMOL', 'mmol', 0),
(9, 'I0', 'MOL', 'mol', 0),
(10, 'J0', 'BECQUEREL', 'Bq', 0),
(11, 'K0', 'KILOBECQUEREL', 'KBq', 0),
(12, 'L0', 'GIGABECQUEREL', 'GBq', 0),
(13, 'M0', 'MEGABECQUEREL', 'MBq', 0),
(14, 'N0', 'PICOCURIE', 'pCi', 0),
(15, 'O0', 'NANOCURIE', '?Ci', 0),
(16, 'P0', 'MICROCURIE', '0', 0),
(17, 'Q0', 'CURIE', 'Ci', 0),
(18, 'R0', 'MILIGRAM EKIVALEN', 'mgrek', 0),
(19, 'S0', 'EKIVALEN', 'grek', 0),
(20, 'T0', '%', '%', 0),
(21, 'U0', 'INTERNASIONAL UNIT', 'IU', 0),
(22, 'V0', 'VIAL', 'vial', 0),
(23, 'W0', 'AMPUL', 'Amp', 0),
(24, 'X0', 'PUFF', 'puff', 0),
(25, 'Y0', 'MENIT', 'Mnt', 0),
(26, 'Z0', 'JAM', 'Jam', 0),
(27, 'BC', 'MILIGRAM / GRAM', 'mg/g', 0),
(28, 'BW', 'MILIGRAM / AMPUL', 'mg/amp', 0),
(29, 'BV', 'MILIGRAM / VIAL', 'mg/vial', 0),
(30, 'BZ', 'MILIGRAM / JAM', 'mg/jam', 0),
(31, 'CF', 'GRAM / LITER', 'g/l', 0),
(32, 'CE', 'GRAM / MILILITER', 'g/ml', 0),
(33, 'CV', 'GRAM / VIAL', 'g/vial', 0),
(34, 'AE', 'MICROGRAM / MILILITER', '0', 0),
(35, 'AW', 'MICROGRAM / AMPUL', '0', 0),
(36, 'AV', 'MICROGRAM / VIAL', '0', 0),
(37, 'AZ', 'MICROGRAM / JAM', '0', 0),
(38, 'HE', 'MILIMOL / MILILITER', 'mmol/ml', 0),
(39, 'UC', 'INTERNASIONAL UNIT / GRAM', 'IU/g', 0),
(40, 'UE', 'INTERNASIONAL UNIT / MILILITER', 'IU/ml', 0),
(41, 'UW', 'INTERNASIONAL UNIT / AMPUL', 'IU/amp', 0),
(42, 'UV', 'INTERNASIONAL UNIT / VIAL', 'IU/vial', 0),
(43, 'ME', 'MEGABEQUEREL / MILILITER', 'MBq/ml', 0),
(44, 'MV', 'MEGABEQUEREL / VIAL', 'MBq/vial', 0),
(45, '111', '111', '111', 1),
(46, '123', '12333', '12333', 1),
(47, '12', '12', '12', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `satuan`
--
ALTER TABLE `satuan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `satuan`
--
ALTER TABLE `satuan`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=48;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
