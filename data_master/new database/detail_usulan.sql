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
-- Struktur dari tabel `detail_usulan`
--

CREATE TABLE IF NOT EXISTS `detail_usulan` (
`id` int(9) NOT NULL,
  `nomor_efornas` varchar(50) NOT NULL,
  `id_terapi` varchar(10) NOT NULL,
  `id_atc_obat` varchar(10) NOT NULL,
  `id_sediaan` varchar(10) NOT NULL,
  `id_kekuatan` varchar(5) NOT NULL,
  `id_satuan` varchar(10) NOT NULL,
  `alasan` text,
  `restriksi` text,
  `jurnal` text,
  `file_jurnal` text,
  `tipe_usulan` varchar(80) DEFAULT NULL,
  `id_tingkat` varchar(3) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `detail_usulan`
--

INSERT INTO `detail_usulan` (`id`, `nomor_efornas`, `id_terapi`, `id_atc_obat`, `id_sediaan`, `id_kekuatan`, `id_satuan`, `alasan`, `restriksi`, `jurnal`, `file_jurnal`, `tipe_usulan`, `id_tingkat`, `deleted`) VALUES
(1, 'e-fornas/1111/12/11/2015/135610', '', 'A01AA01', 'CA01', '0001', 'A0', 'test1', 'test1', 'test1', NULL, 'test1', '', 0),
(2, 'e-fornas/1111/12/11/2015/135610', '', 'A01AA01', 'CA02', '0003', 'B0', 'test2', 'test2', 'test2', NULL, NULL, '', 0),
(3, 'e-fornas/1111/12/11/2015/82486', '', 'A01AA01', 'CA01', '0001', 'A0', 'test1', 'test1', 'test1', NULL, 'test1', '', 0),
(4, 'e-fornas/1111/12/11/2015/127801', '', 'A01AA01', 'CA03', '0006', 'D0', 'test3', 'test3', 'test3', NULL, 'test3', '', 0),
(5, 'e-fornas/1111/12/11/2015/127801', '', 'A01AA02', 'CA01', '0001', 'A0', 'test4', 'test4', 'test4', NULL, NULL, '', 0),
(7, 'e-fornas/1111/12/11/2015/69019', '', 'A01AB11', 'CA02', '0003', 'A0', 'Test6', 'Test6', 'Test6', NULL, 'Test6', '', 0),
(8, 'e-fornas/1111/12/11/2015/69019', '', 'A01AA01', 'CA01', '0001', 'A0', 'Test7', 'Test7', 'Test7', NULL, NULL, '', 0),
(9, 'e-fornas/1111/12/11/2015/63618', '', 'A01AA01', 'CA18', '0017', 'C0', 'test7', 'test7', 'test7', NULL, '', '', 0),
(10, 'e-fornas/1111/12/11/2015/63618', '', 'A01AA04', 'CA05', '0015', 'BZ', 'test8', 'test8', 'test8', NULL, NULL, '', 0),
(11, 'e-fornas/1111/12/11/2015/62092', '', 'A01AA01', 'CA01', '0001', 'A0', 'test9', 'test9', 'test9', NULL, 'test9', '', 0),
(12, 'e-fornas/1111/12/11/2015/62092', '', 'A01AA04', 'CA05', '0004', 'E0', 'test10', 'test10', 'test10', NULL, NULL, '', 0),
(13, 'e-fornas/1111/12/11/2015/81531', '', 'A01AA01', 'CA01', '0001', 'A0', 'asdasda', 'asdasda', '<p>asdasdasdasda</p>', NULL, 'asdasdasdas', '', 0),
(14, 'e-fornas/1111/12/11/2015/81531', '', 'A01AA01', 'CA01', '0005', 'A0', 'adfasdfdsaga', 'adgdasgasdgdsa', '<p>asdasdasda</p>', NULL, 'adfdafdafdfafa', '', 0),
(15, 'e-fornas/1111/13/11/2015/71095', 'AN', 'A01AA03', 'CA02', '0005', 'C0', 'test', 'test', '<p>test</p>', NULL, 'test', '', 0),
(16, 'e-fornas/1111/13/11/2015/71095', 'AA', 'A01AA01', 'CA01', '0001', 'A0', 'test2', 'test2', '<p>test2</p>', NULL, 'test2', '', 0),
(17, 'e-fornas/1111/13/11/2015/182031', 'AA', 'A01AA01', 'CA01', '0001', 'A0', 'testing', 'testing', '<p>testing</p>', NULL, 'testing', '', 0),
(18, 'e-fornas/1111/13/11/2015/183402', 'AA', 'A01AA01', 'CA01', '0001', 'B0', 'testing4', 'testing4', '<p>testing4</p>', NULL, 'testing4', '', 0),
(19, 'e-fornas/1111/13/11/2015/258482', 'AA', 'A01AA03', 'CA01', '0001', 'A0', 'test5', 'test5', '<p>test5</p>', NULL, 'test5', '', 0),
(24, 'e-fornas/1111/14/11/2015/180216', 'AA', 'A01AA01', 'CA01', '0001', 'A0', '1', '1', '<p>1</p>', NULL, '1', '1', 0),
(25, 'e-fornas/1111/14/11/2015/180216', 'AA', 'A01AA01', 'CA01', '0001', 'A0', '2', '2', '<p>2</p>', NULL, '2', '2', 0),
(26, 'e-fornas/1111/12/11/2015/139787', 'AA', 'A01AA03', 'CA04', '0006', 'F0', 'test5 Revisi', 'test5 ', '<p>test Revisi</p>', NULL, 'test5', '1', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_usulan`
--
ALTER TABLE `detail_usulan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_usulan`
--
ALTER TABLE `detail_usulan`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=27;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
