-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2015 at 07:04 PM
-- Server version: 5.6.21
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
-- Table structure for table `privilege`
--

CREATE TABLE IF NOT EXISTS `privilege` (
`id` int(11) NOT NULL,
  `nama_privilege` varchar(50) NOT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `atc_obat_read` varchar(4) NOT NULL DEFAULT 'off',
  `atc_obat_write` varchar(4) NOT NULL DEFAULT 'off',
  `atc_obat_delete` varchar(4) NOT NULL DEFAULT 'off',
  `keterangan_atc_obat_read` varchar(4) NOT NULL DEFAULT 'off',
  `keterangan_atc_obat_write` varchar(4) NOT NULL DEFAULT 'off',
  `keterangan_atc_obat_delete` varchar(4) NOT NULL DEFAULT 'off',
  `obat_kombinasi_read` varchar(4) NOT NULL DEFAULT 'off',
  `obat_kombinasi_write` varchar(4) NOT NULL DEFAULT 'off',
  `obat_kombinasi_delete` varchar(4) NOT NULL DEFAULT 'off',
  `kelas_terapi_read` varchar(4) NOT NULL DEFAULT 'off',
  `kelas_terapi_write` varchar(4) NOT NULL DEFAULT 'off',
  `kelas_terapi_delete` varchar(4) NOT NULL DEFAULT 'off',
  `sub_kelas_terapi_read` varchar(4) NOT NULL DEFAULT 'off',
  `sub_kelas_terapi_write` varchar(4) NOT NULL DEFAULT 'off',
  `sub_kelas_terapi_delete` varchar(4) NOT NULL DEFAULT 'off',
  `sub_kelas_terapi2_read` varchar(4) NOT NULL DEFAULT 'off',
  `sub_kelas_terapi2_write` varchar(4) NOT NULL DEFAULT 'off',
  `sub_kelas_terapi2_delete` varchar(4) NOT NULL DEFAULT 'off',
  `sub_kelas_terapi3_read` varchar(4) NOT NULL DEFAULT 'off',
  `sub_kelas_terapi3_write` varchar(4) NOT NULL DEFAULT 'off',
  `sub_kelas_terapi3_delete` varchar(4) NOT NULL DEFAULT 'off',
  `fornas_read` varchar(4) NOT NULL DEFAULT 'off',
  `fornas_write` varchar(4) NOT NULL DEFAULT 'off',
  `fornas_delete` varchar(4) NOT NULL DEFAULT 'off',
  `sediaan_read` varchar(4) NOT NULL DEFAULT 'off',
  `sediaan_write` varchar(4) NOT NULL DEFAULT 'off',
  `sediaan_delete` varchar(4) NOT NULL DEFAULT 'off',
  `satuan_read` varchar(4) NOT NULL DEFAULT 'off',
  `satuan_write` varchar(4) NOT NULL DEFAULT 'off',
  `satuan_delete` varchar(4) NOT NULL DEFAULT 'off',
  `kekuatan_read` varchar(4) NOT NULL DEFAULT 'off',
  `kekuatan_write` varchar(4) NOT NULL DEFAULT 'off',
  `kekuatan_delete` varchar(4) NOT NULL DEFAULT 'off',
  `usulan_terbaru_read` varchar(4) NOT NULL DEFAULT 'off',
  `usulan_terbaru_write` varchar(4) NOT NULL DEFAULT 'off',
  `usulan_obat_baru_read` varchar(4) NOT NULL DEFAULT 'off',
  `usulan_obat_baru_write` varchar(4) NOT NULL DEFAULT 'off',
  `daftar_usulan_lengkap_read` varchar(4) NOT NULL DEFAULT 'off',
  `daftar_usulan_tidak_lengkap_read` varchar(4) NOT NULL DEFAULT 'off',
  `users_read` varchar(4) NOT NULL DEFAULT 'off',
  `users_write` varchar(4) NOT NULL DEFAULT 'off',
  `users_delete` varchar(4) NOT NULL DEFAULT 'off',
  `privilege_read` varchar(4) NOT NULL DEFAULT 'off',
  `privilege_write` varchar(4) NOT NULL DEFAULT 'off',
  `privilege_delete` varchar(4) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `nama_privilege`, `deleted`, `atc_obat_read`, `atc_obat_write`, `atc_obat_delete`, `keterangan_atc_obat_read`, `keterangan_atc_obat_write`, `keterangan_atc_obat_delete`, `obat_kombinasi_read`, `obat_kombinasi_write`, `obat_kombinasi_delete`, `kelas_terapi_read`, `kelas_terapi_write`, `kelas_terapi_delete`, `sub_kelas_terapi_read`, `sub_kelas_terapi_write`, `sub_kelas_terapi_delete`, `sub_kelas_terapi2_read`, `sub_kelas_terapi2_write`, `sub_kelas_terapi2_delete`, `sub_kelas_terapi3_read`, `sub_kelas_terapi3_write`, `sub_kelas_terapi3_delete`, `fornas_read`, `fornas_write`, `fornas_delete`, `sediaan_read`, `sediaan_write`, `sediaan_delete`, `satuan_read`, `satuan_write`, `satuan_delete`, `kekuatan_read`, `kekuatan_write`, `kekuatan_delete`, `usulan_terbaru_read`, `usulan_terbaru_write`, `usulan_obat_baru_read`, `usulan_obat_baru_write`, `daftar_usulan_lengkap_read`, `daftar_usulan_tidak_lengkap_read`, `users_read`, `users_write`, `users_delete`, `privilege_read`, `privilege_write`, `privilege_delete`) VALUES
(1, 'superadmin', 0, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(3, 'adoh', 0, 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
(4, 'admin1', 0, 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'on', 'off', 'on', 'off', 'on', 'on', 'off', 'off', 'off', 'off', 'off', 'off');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
`id` int(9) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(255) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `no_telp` varchar(20) NOT NULL,
  `type` tinyint(4) NOT NULL,
  `id_provinsi` varchar(5) NOT NULL,
  `id_kabkota` varchar(5) NOT NULL,
  `id_faskes` varchar(5) NOT NULL,
  `id_privilege` int(11) DEFAULT NULL,
  `flag` tinyint(4) NOT NULL DEFAULT '0',
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `date_login` datetime DEFAULT NULL,
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `email`, `no_telp`, `type`, `id_provinsi`, `id_kabkota`, `id_faskes`, `id_privilege`, `flag`, `deleted`, `date_login`, `date_created`, `date_modified`) VALUES
(1, 'Julius Cesario', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'lixus.julius17@gmail.com', '081288540387', 3, '11', '1', '1', 1, 1, 0, '2015-11-22 18:55:27', '2015-11-12 04:13:58', NULL),
(2, 'ade', 'ade', '0192023a7bbd73250516f069df18b500', 'ade.shinz@gmail.com', '081213713696', 1, '11', '1', '1', NULL, 0, 0, NULL, NULL, NULL),
(6, 'Julius Cesario', 'julius', '30e6d8432ce54710f9c09f305e7b9829', 'ade.shinz@gmail.com', '1278127812', 1, '12', '2', '3', NULL, 0, 0, '2015-11-22 18:55:24', NULL, NULL),
(8, 'Ade Julianto', 'adeanjenk', 'a562cfa07c2b1213b3a5c99b756fc206', 'ade.shinz@gmail.com', '918271817121', 3, '', '', '', 3, 0, 0, NULL, NULL, NULL),
(9, 'Ade Julianto', 'adebbaik', 'a562cfa07c2b1213b3a5c99b756fc206', 'ade.shinz@gmail.com', '918201918201', 3, '', '', '', 4, 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_type`
--

CREATE TABLE IF NOT EXISTS `users_type` (
`id` int(9) NOT NULL,
  `name` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_type`
--

INSERT INTO `users_type` (`id`, `name`) VALUES
(1, 'Rumah Sakit'),
(2, 'Dokter Praktek'),
(3, 'Administrator'),
(4, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `usulan`
--

CREATE TABLE IF NOT EXISTS `usulan` (
`id` int(9) NOT NULL,
  `id_provinsi` varchar(10) NOT NULL,
  `id_kabkota` varchar(10) NOT NULL,
  `id_faskes` varchar(10) NOT NULL,
  `id_user` int(11) NOT NULL,
  `nomor_efornas` varchar(150) NOT NULL,
  `type` tinyint(4) NOT NULL DEFAULT '1',
  `surat_pengantar` text,
  `daftar_usulan_obat` text,
  `status` varchar(30) NOT NULL DEFAULT 'BELUM',
  `tipe_form` varchar(10) NOT NULL DEFAULT 'atc',
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `date_apply` datetime NOT NULL,
  `apply_by` varchar(100) NOT NULL,
  `date_approve` date DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `usulan`
--

INSERT INTO `usulan` (`id`, `id_provinsi`, `id_kabkota`, `id_faskes`, `id_user`, `nomor_efornas`, `type`, `surat_pengantar`, `daftar_usulan_obat`, `status`, `tipe_form`, `deleted`, `date_apply`, `apply_by`, `date_approve`) VALUES
(14, '11', '1', '1', 0, 'e-fornas/1111/14/11/2015/212996', 1, 'uploads/1111/14/11/2015/212996/Test_document_PDF.pdf', 'uploads/1111/14/11/2015/212996/Test_document_PDF_2.pdf', 'LENGKAP', 'atc', 0, '2015-11-15 01:18:05', 'Ade', '2015-11-20'),
(15, '11', '1', '1', 0, 'e-fornas/1111/14/11/2015/212996', 1, 'uploads/1111/14/11/2015/212996/Test_document_PDF.pdf', 'uploads/1111/14/11/2015/212996/Test_document_PDF_2.pdf', 'LENGKAP', 'atc', 0, '2015-11-15 01:18:05', 'Ade', '2015-11-20'),
(16, '11', '1', '1', 0, 'e-fornas/1111/14/11/2015/250962', 1, 'uploads/1111/14/11/2015/250962/Test_document_PDF.pdf', 'uploads/1111/14/11/2015/250962/Test_document_PDF_2.pdf', 'LENGKAP', 'atc', 0, '2015-11-14 19:46:07', 'Ade', '2015-11-14'),
(17, '11', '1', '1', 0, 'e-fornas/1111/20/11/2015/244403', 1, 'uploads/1111/20/11/2015/244403/Test_document_PDF.pdf', 'uploads/1111/20/11/2015/244403/Test_document_PDF_2.pdf', 'TIDAK LENGKAP', 'atc', 0, '2015-11-20 19:04:57', 'Ade', '2015-11-20'),
(18, '12', '2', '3', 6, 'e-fornas/1223/22/11/2015/246696', 1, 'uploads/1223/22/11/2015/246696/Test_document_PDF.pdf', 'uploads/1223/22/11/2015/246696/Test_document_PDF_2.pdf', 'LENGKAP', 'atc', 0, '2015-11-22 17:56:49', 'Julius Cesario', '2015-11-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_type`
--
ALTER TABLE `users_type`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usulan`
--
ALTER TABLE `usulan`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users_type`
--
ALTER TABLE `users_type`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `usulan`
--
ALTER TABLE `usulan`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
