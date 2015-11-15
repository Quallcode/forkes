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
-- Struktur dari tabel `sub_kelasterapi2`
--

CREATE TABLE IF NOT EXISTS `sub_kelasterapi2` (
  `id_terapi` varchar(2) DEFAULT NULL,
  `id_sub_kelasterapi` int(11) DEFAULT NULL,
  `id_sub_kelasterapi2` int(11) DEFAULT NULL,
  `Sub_Kelas_Terapi_2` varchar(27) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sub_kelasterapi2`
--

INSERT INTO `sub_kelasterapi2` (`id_terapi`, `id_sub_kelasterapi`, `id_sub_kelasterapi2`, `Sub_Kelas_Terapi_2`, `deleted`) VALUES
('AI', 1, 1, 'Antelmintik Intestinal', 0),
('AI', 1, 2, 'Antifilaria', 0),
('AI', 1, 3, 'Antisistosomiasis', 0),
('AI', 2, 1, 'Beta laktam', 0),
('AI', 2, 99, 'Antibakteri Lain', 0),
('AI', 2, 99, 'Antibakteri Lain', 0),
('AI', 2, 99, 'Antibakteri Lain', 0),
('AI', 2, 99, 'Antibakteri Lain', 0),
('AI', 2, 99, 'Antibakteri Lain', 0),
('AI', 2, 99, 'Antibakteri Lain', 0),
('AI', 2, 99, 'Antibakteri Lain', 0),
('AI', 3, 1, 'Antilepra', 0),
('AI', 3, 2, 'Antituberkulosis', 0),
('AI', 3, 3, 'Antiseptik Saluran kemih', 0),
('AI', 4, 1, 'Antifungi Sistemik', 0),
('AI', 5, 1, 'Antiamuba dan Antigardiasis', 0),
('AI', 5, 2, 'Antimalaria', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
