-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 15 Nov 2015 pada 12.43
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
-- Struktur dari tabel `usulan`
--

CREATE TABLE IF NOT EXISTS `usulan` (
`id` int(9) NOT NULL,
  `id_provinsi` varchar(10) NOT NULL,
  `id_kabkota` varchar(10) NOT NULL,
  `id_faskes` varchar(10) NOT NULL,
  `nomor_efornas` varchar(150) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `surat_pengantar` text,
  `daftar_usulan_obat` text,
  `status` varchar(10) NOT NULL DEFAULT 'BELUM',
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `date_apply` datetime NOT NULL,
  `apply_by` varchar(100) NOT NULL,
  `date_approve` date NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `usulan`
--

INSERT INTO `usulan` (`id`, `id_provinsi`, `id_kabkota`, `id_faskes`, `nomor_efornas`, `type`, `surat_pengantar`, `daftar_usulan_obat`, `status`, `deleted`, `date_apply`, `apply_by`, `date_approve`) VALUES
(1, '11', '1', '1', 'e-fornas/1111/12/11/2015/135610', 1, 'uploads/1111/12/11/2015/135610/fornas.pdf', 'uploads/1111/12/11/2015/135610/fornas2.pdf', 'TIDAK', 0, '0000-00-00 00:00:00', '', '0000-00-00'),
(2, '11', '1', '1', 'e-fornas/1111/12/11/2015/82486', 1, 'uploads/1111/12/11/2015/82486/fornas.pdf', 'uploads/1111/12/11/2015/82486/fornas2.pdf', 'BELUM', 0, '0000-00-00 00:00:00', '', '0000-00-00'),
(3, '11', '1', '1', 'e-fornas/1111/12/11/2015/127801', 1, 'uploads/1111/12/11/2015/127801/fornas.pdf', 'uploads/1111/12/11/2015/127801/fornas2.pdf', 'SUDAH', 0, '0000-00-00 00:00:00', '', '0000-00-00'),
(4, '11', '1', '1', 'e-fornas/1111/12/11/2015/139787', 1, 'uploads/1111/12/11/2015/139787/fornas.pdf', 'uploads/1111/12/11/2015/139787/fornas2.pdf', 'BELUM', 0, '2015-11-15 10:36:14', 'ade', '2015-11-15'),
(5, '11', '1', '1', 'e-fornas/1111/12/11/2015/69019', 1, 'uploads/1111/12/11/2015/69019/fornas.pdf', 'uploads/1111/12/11/2015/69019/fornas2.pdf', 'BELUM', 0, '0000-00-00 00:00:00', '', '0000-00-00'),
(6, '11', '1', '1', 'e-fornas/1111/12/11/2015/63618', 1, 'uploads/1111/12/11/2015/63618/fornas.pdf', 'uploads/1111/12/11/2015/63618/fornas2.pdf', 'BELUM', 0, '0000-00-00 00:00:00', '', '0000-00-00'),
(7, '11', '1', '1', 'e-fornas/1111/12/11/2015/62092', 1, 'uploads/1111/12/11/2015/62092/fornas.pdf', 'uploads/1111/12/11/2015/62092/fornas2.pdf', 'BELUM', 0, '0000-00-00 00:00:00', '', '0000-00-00'),
(8, '11', '1', '1', 'e-fornas/1111/12/11/2015/81531', 1, 'uploads/1111/12/11/2015/81531/fornas.pdf', 'uploads/1111/12/11/2015/81531/fornas2.pdf', 'BELUM', 0, '0000-00-00 00:00:00', '', '0000-00-00'),
(9, '11', '1', '1', 'e-fornas/1111/13/11/2015/71095', 1, 'uploads/1111/13/11/2015/71095/fornas.pdf', 'uploads/1111/13/11/2015/71095/fornas2.pdf', 'BELUM', 0, '0000-00-00 00:00:00', '', '0000-00-00'),
(10, '11', '1', '1', 'e-fornas/1111/13/11/2015/182031', 3, 'uploads/1111/13/11/2015/182031/fornas.pdf', 'uploads/1111/13/11/2015/182031/fornas2.pdf', 'BELUM', 0, '2013-11-15 00:00:00', 'Julius Cesario', '0000-00-00'),
(11, '11', '1', '1', 'e-fornas/1111/13/11/2015/183402', 1, 'uploads/1111/13/11/2015/183402/fornas.pdf', 'uploads/1111/13/11/2015/183402/fornas2.pdf', 'BELUM', 0, '2015-11-13 11:28:08', 'ade', '0000-00-00'),
(12, '11', '1', '1', 'e-fornas/1111/13/11/2015/258482', 3, 'uploads/1111/13/11/2015/258482/fornas.pdf', 'uploads/1111/13/11/2015/258482/fornas2.pdf', 'BELUM', 0, '2015-11-13 17:31:27', 'Julius Cesario', '0000-00-00'),
(22, '11', '1', '1', 'e-fornas/1111/14/11/2015/180216', 3, 'uploads/1111/14/11/2015/180216/fornas.pdf', 'uploads/1111/14/11/2015/180216/fornas2.pdf', 'BELUM', 0, '2015-11-14 16:42:15', 'Julius Cesario', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usulan`
--
ALTER TABLE `usulan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usulan`
--
ALTER TABLE `usulan`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=23;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
