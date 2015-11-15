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
-- Struktur dari tabel `sub_kelasterapi3`
--

CREATE TABLE IF NOT EXISTS `sub_kelasterapi3` (
  `id_terapi` varchar(2) DEFAULT NULL,
  `id_sub_kelasterapi` int(11) DEFAULT NULL,
  `id_sub_kelasterapi2` int(11) DEFAULT NULL,
  `id_sub_kelasterapi3` int(11) DEFAULT NULL,
  `Sub_Kelas_Terapi_3` varchar(54) DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `sub_kelasterapi3`
--

INSERT INTO `sub_kelasterapi3` (`id_terapi`, `id_sub_kelasterapi`, `id_sub_kelasterapi2`, `id_sub_kelasterapi3`, `Sub_Kelas_Terapi_3`, `deleted`) VALUES
('AI', 2, 99, 1, 'Tetrasiklin', 0),
('AI', 2, 99, 2, 'Kloramfenikol', 0),
('AI', 2, 99, 3, 'Sulfa-trimetoprim', 0),
('AI', 2, 99, 4, 'Makrolid', 0),
('AI', 2, 99, 5, 'Aminoglikosida', 0),
('AI', 2, 99, 6, 'Kuinolon', 0),
('AI', 2, 99, 99, 'Lain-Lain', 0),
('AI', 5, 2, 1, 'Untuk Pencegahan', 0),
('AI', 5, 2, 2, 'Untuk Pengobatan', 0),
('AI', 6, 3, 1, 'Nucleoside Reverse Transcriptase Inhibitor (NRTI)', 0),
('AI', 6, 3, 2, 'Non Nucleoside Reverse Transcriptase Inhibitor (NNRTI)', 0),
('AI', 6, 3, 3, 'Protease Inhibitor', 0),
('HO', 3, 4, 1, 'Kontrasepsi, Oral', 0),
('HO', 3, 4, 2, 'Kontrasepsi, Parenteral', 0),
('HO', 3, 4, 3, 'Kontrasepsi, AKDR (IUD)', 0),
('HO', 3, 4, 4, 'Kontrasepsi, Implan', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
