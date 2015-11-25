-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 25 Nov 2015 pada 20.46
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
-- Struktur dari tabel `privilege`
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
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `privilege`
--

INSERT INTO `privilege` (`id`, `nama_privilege`, `deleted`, `atc_obat_read`, `atc_obat_write`, `atc_obat_delete`, `keterangan_atc_obat_read`, `keterangan_atc_obat_write`, `keterangan_atc_obat_delete`, `obat_kombinasi_read`, `obat_kombinasi_write`, `obat_kombinasi_delete`, `kelas_terapi_read`, `kelas_terapi_write`, `kelas_terapi_delete`, `sub_kelas_terapi_read`, `sub_kelas_terapi_write`, `sub_kelas_terapi_delete`, `sub_kelas_terapi2_read`, `sub_kelas_terapi2_write`, `sub_kelas_terapi2_delete`, `sub_kelas_terapi3_read`, `sub_kelas_terapi3_write`, `sub_kelas_terapi3_delete`, `fornas_read`, `fornas_write`, `fornas_delete`, `sediaan_read`, `sediaan_write`, `sediaan_delete`, `satuan_read`, `satuan_write`, `satuan_delete`, `kekuatan_read`, `kekuatan_write`, `kekuatan_delete`, `usulan_terbaru_read`, `usulan_terbaru_write`, `usulan_obat_baru_read`, `usulan_obat_baru_write`, `daftar_usulan_lengkap_read`, `daftar_usulan_tidak_lengkap_read`, `users_read`, `users_write`, `users_delete`, `privilege_read`, `privilege_write`, `privilege_delete`) VALUES
(1, 'superadmin', 0, 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on', 'on'),
(3, 'adoh', 1, 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off'),
(4, 'admin1', 1, 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'on', 'off', 'on', 'off', 'on', 'on', 'off', 'off', 'off', 'off', 'off', 'off'),
(5, 'Tim Verifikasi Fornas', 1, 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'off', 'on', 'on', 'on', 'on', 'off', 'off', 'off', 'off', 'off', 'off'),
(6, 'Prof  Iwan', 1, 'on', 'off', 'off', 'on', 'off', 'off', 'on', 'off', 'off', 'on', 'off', 'off', 'on', 'off', 'off', 'on', 'off', 'off', 'on', 'off', 'off', 'on', 'off', 'off', 'on', 'off', 'off', 'on', 'off', 'off', 'on', 'off', 'off', 'on', 'off', 'on', 'off', 'on', 'on', 'off', 'off', 'off', 'off', 'off', 'off');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `privilege`
--
ALTER TABLE `privilege`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `privilege`
--
ALTER TABLE `privilege`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
