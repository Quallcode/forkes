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
-- Struktur dari tabel `sub_kelasterapi`
--

CREATE TABLE IF NOT EXISTS `sub_kelasterapi` (
  `id_terapi` varchar(2) DEFAULT NULL,
  `id_sub_kelasterapi` int(11) DEFAULT NULL,
  `Sub_Kelas_Terapi` varchar(32) DEFAULT NULL,
  `deleted` int(11) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sub_kelasterapi`
--

INSERT INTO `sub_kelasterapi` (`id_terapi`, `id_sub_kelasterapi`, `Sub_Kelas_Terapi`, `deleted`) VALUES
('AA', 1, 'ANALGESIK NARKOTIK', 0),
('AA', 2, 'ANALGESIK NON NARKOTIK', 0),
('AA', 3, 'ANTIPIRAI', 0),
('AN', 1, 'ANALGESIK NARKOTIK', 0),
('AN', 2, 'ANESTETIK UMUM dan OKSIGEN', 0),
('AN', 3, 'OBAT untuk PROSEDUR PRE OPERATIF', 0),
('AK', 1, 'ANALGESIK NARKOTIK', 0),
('AK', 2, 'UMUM', 0),
('AI', 1, 'ANALGESIK NARKOTIK', 0),
('AI', 1, 'ANALGESIK NARKOTIK', 0),
('AI', 1, 'ANALGESIK NARKOTIK', 0),
('AI', 2, 'ANTIBAKTERI', 0),
('AI', 2, 'ANTIBAKTERI', 0),
('AI', 2, 'ANTIBAKTERI', 0),
('AI', 2, 'ANTIBAKTERI', 0),
('AI', 2, 'ANTIBAKTERI', 0),
('AI', 2, 'ANTIBAKTERI', 0),
('AI', 2, 'ANTIBAKTERI', 0),
('AI', 2, 'ANTIBAKTERI', 0),
('AI', 3, 'ANTIINFEKSI KHUSUS', 0),
('AI', 3, 'ANTIINFEKSI KHUSUS', 0),
('AI', 3, 'ANTIINFEKSI KHUSUS', 0),
('AI', 4, 'ANTIFUNGI', 0),
('AI', 5, 'ANTIPROTOZOA', 0),
('AI', 5, 'ANTIPROTOZOA', 0),
('AI', 5, 'ANTIPROTOZOA', 0),
('AI', 6, 'ANTIVIRUS', 0),
('AK', 123, '1234', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
