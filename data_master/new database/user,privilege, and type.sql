-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 21, 2015 at 09:41 PM
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
  `atc_obat_read` varchar(4) NOT NULL DEFAULT 'off',
  `atc_obat_write` varchar(4) NOT NULL DEFAULT 'off',
  `atc_obat_delete` varchar(4) NOT NULL DEFAULT 'off',
  `obat_kombinasi_read` varchar(4) NOT NULL DEFAULT 'off',
  `obat_kombinasi_write` varchar(4) NOT NULL DEFAULT 'off',
  `obat_kombinasi_delete` varchar(4) NOT NULL DEFAULT 'off',
  `kelas_terapi_read` varchar(4) NOT NULL DEFAULT 'off',
  `kelas_terapi_write` varchar(4) NOT NULL DEFAULT 'off',
  `kelas_terapi_delete` varchar(4) NOT NULL DEFAULT 'off',
  `sub_kelas_terapi_read` varchar(4) NOT NULL DEFAULT 'off',
  `sub_kelas_terapi_write` varchar(4) NOT NULL DEFAULT 'off',
  `sub_kelas_terapi_delete` varchar(4) NOT NULL DEFAULT 'off',
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
  `daftar_usulan_lengkap_read` varchar(4) NOT NULL DEFAULT 'off',
  `daftar_usulan_tidak_lengkap_read` varchar(4) NOT NULL DEFAULT 'off'
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privilege`
--

INSERT INTO `privilege` (`id`, `nama_privilege`, `atc_obat_read`, `atc_obat_write`, `atc_obat_delete`, `obat_kombinasi_read`, `obat_kombinasi_write`, `obat_kombinasi_delete`, `kelas_terapi_read`, `kelas_terapi_write`, `kelas_terapi_delete`, `sub_kelas_terapi_read`, `sub_kelas_terapi_write`, `sub_kelas_terapi_delete`, `fornas_read`, `fornas_write`, `fornas_delete`, `sediaan_read`, `sediaan_write`, `sediaan_delete`, `satuan_read`, `satuan_write`, `satuan_delete`, `kekuatan_read`, `kekuatan_write`, `kekuatan_delete`, `usulan_terbaru_read`, `usulan_terbaru_write`, `daftar_usulan_lengkap_read`, `daftar_usulan_tidak_lengkap_read`) VALUES
(1, 'superadmin', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on');

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
  `id_privilage` int(11) DEFAULT NULL,
  `deleted` tinyint(4) NOT NULL DEFAULT '0',
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `email`, `no_telp`, `type`, `id_provinsi`, `id_kabkota`, `id_faskes`, `id_privilage`, `deleted`, `date_created`, `date_modified`) VALUES
(1, 'Julius Cesario', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'lixus.julius17@gmail.com', '081288540387', 3, '11', '1', '1', 1, 0, '2015-11-12 04:13:58', NULL),
(2, 'ade', 'ade', '0192023a7bbd73250516f069df18b500', 'ade.shinz@gmail.com', '081213713696', 1, '11', '1', '1', NULL, 0, NULL, NULL),
(6, 'Julius Cesario', 'julius', '30e6d8432ce54710f9c09f305e7b9829', 'julius.cesario17@hotmail.com', '1278127812', 1, '12', '2', '3', NULL, 0, NULL, NULL);

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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `users_type`
--
ALTER TABLE `users_type`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
