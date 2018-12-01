-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 01 Des 2018 pada 05.54
-- Versi Server: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rpl_test`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket_bis`
--

CREATE TABLE `tiket_bis` (
  `no_ktp` int(40) NOT NULL,
  `nm_penumpang` varchar(30) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan','','') NOT NULL,
  `rute` varchar(40) NOT NULL,
  `nama_bis` varchar(20) NOT NULL,
  `kelas_bis` varchar(20) NOT NULL,
  `jumlah_tiket` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket_bis`
--

INSERT INTO `tiket_bis` (`no_ktp`, `nm_penumpang`, `jenis_kelamin`, `rute`, `nama_bis`, `kelas_bis`, `jumlah_tiket`) VALUES
(121212, 'Sabil', '', 'JKTBALI', 'BOS', 'Non AC', 2),
(199228831, 'Rama', 'Laki-laki', 'JKTKUDUS', 'Haryanto', 'VIP', 3),
(2147483647, 'Sigit Stance', 'Laki-laki', 'JKTJOGJA', 'PO.SANTOSO', 'Super', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tiket_bis`
--
ALTER TABLE `tiket_bis`
  ADD PRIMARY KEY (`no_ktp`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
