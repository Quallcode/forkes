-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 22 Nov 2015 pada 13.23
-- Versi Server: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `forkes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
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
  `date_created` datetime DEFAULT NULL,
  `date_modified` datetime DEFAULT NULL,
  `date_login` datetime NOT NULL,
  `flag` varchar(1) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `email`, `no_telp`, `type`, `id_provinsi`, `id_kabkota`, `id_faskes`, `date_created`, `date_modified`, `date_login`, `flag`) VALUES
(1, 'Julius Cesario', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'lixus.julius17@gmail.com', '081288540387', 3, '11', '1', '1', '2015-11-12 04:13:58', NULL, '2015-11-22 10:50:13', '0'),
(2, 'ade', 'ade', '0192023a7bbd73250516f069df18b500', 'ade.shinz@gmail.com', '081213713696', 1, '11', '1', '1', NULL, NULL, '0000-00-00 00:00:00', '0'),
(3, 'adej', 'adej', '8737fab67a6d231acf00e6ab08e5a8d8', 'ade.shinz@gmail.com', '0123456789', 1, '12', '1', '1', NULL, NULL, '0000-00-00 00:00:00', '0'),
(4, 'test1', 'test1', '5a105e8b9d40e1329780d62ea2265d8a', 'test1@gmail.com', '0987654321', 1, '11', '1', '1', NULL, NULL, '0000-00-00 00:00:00', '0'),
(5, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 2, '11', '5', '1', NULL, NULL, '0000-00-00 00:00:00', '0'),
(6, '', '', 'd41d8cd98f00b204e9800998ecf8427e', '', '', 2, '11', '3', '1', NULL, NULL, '0000-00-00 00:00:00', '0'),
(7, 'asdf', 'asdf', '912ec803b2ce49e4a541068d495ab570', 'asdf@gmail.com', '2345678909', 2, '11', '1', '1', NULL, NULL, '0000-00-00 00:00:00', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
MODIFY `id` int(9) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
