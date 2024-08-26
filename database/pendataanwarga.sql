-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 15, 2023 at 08:58 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dw_penduduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `username` varchar(12) NOT NULL,
  `password` varchar(12) NOT NULL,
  `nama` text NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `status` enum('sekretaris','admin','user') NOT NULL DEFAULT 'sekretaris',
  `pendidikan` text NOT NULL,
  `gambar` varchar(255) NOT NULL DEFAULT 'default.png'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`username`, `password`, `nama`, `alamat`, `no_hp`, `status`, `pendidikan`, `gambar`) VALUES
('admin', 'admin', 'Admin', '-', '-', 'admin', '-', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` varchar(16) NOT NULL,
  `tanggal` date NOT NULL,
  `pukul` varchar(6) NOT NULL,
  `kegiatan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penduduk`
--

CREATE TABLE `penduduk` (
  `nik` varchar(16) NOT NULL,
  `no_kk` varchar(16) NOT NULL,
  `nama` text NOT NULL,
  `tempatLahir` text NOT NULL,
  `tglLahir` date NOT NULL,
  `gender` enum('Laki-Laki','Perempuan') NOT NULL,
  `alamat` text NOT NULL,
  `bantuan` enum('PKH','BPNT Kabupaten/Provinsi/Kemensos','BLT Dana Desa','BLT Dana Desa','BLT Kemensos','BST Kementerian/kemensos','Jaminan Lanjut Usia') NOT NULL,
  `rt` varchar(3) NOT NULL,
  `rw` varchar(3) NOT NULL,
  `dusun` text NOT NULL,
  `desa` text NOT NULL,
  `agama` enum('Islam','Protestan','Katolik','Buddha','Hindu','Kong Hu Cu') NOT NULL,
  `pekerjaan` enum('Belum Bekerja','Swasta','ASN','Wiraswasta','Pelajar') NOT NULL,
  `no_telepon` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `penduduk`
--

INSERT INTO `penduduk` (`nik`, `no_kk`, `nama`, `tempatLahir`, `tglLahir`, `gender`, `alamat`, `bantuan`, `rt`, `rw`, `dusun`, `desa`, `agama`, `pekerjaan`, `no_telepon`) VALUES
('12312312', '12411112', 'dimas', 'dumai', '2003-09-08', 'Laki-Laki', 'dumai', 'Jaminan Lanjut Usia', '001', '003', 'jambon', 'konoha', 'Protestan', 'Wiraswasta', '082291827718'),
('124123123123', '1241241222421', 'kiki', 'lombok', '2004-10-30', 'Laki-Laki', 'bali', 'BLT Kemensos', '019', '020', 'manado', 'kristal', 'Islam', 'ASN', '082991882711'),
('13123123', '444123', 'tesa', 'rangau', '1998-12-20', 'Perempuan', 'rangau', 'BLT Dana Desa', '024', '001', 'jeli', 'yupi', 'Islam', 'Pelajar', '08229188277112'),
('193702931241', '222212312412412', 'julia', 'bengkalis', '2001-01-20', 'Perempuan', 'bengkalis', 'BST Kementerian/kemensos', '009', '010', 'mangga', 'jeruk', 'Katolik', 'Swasta', '082991828812'),
('201928192019280', '29182738192038', 'james', 'duri', '1999-01-15', 'Laki-Laki', 'sontang', 'PKH', '008', '002', 'rokan', 'lubuk bendahara', 'Buddha', 'Belum Bekerja', '088291829918'),
('21094829382910', '11123123123', 'dian', 'pasir', '2001-08-16', 'Laki-Laki', 'universitas pasir pengaraian', 'BPNT Kabupaten/Provinsi/Kemensos', '4', '4', 'pasir', 'rohul', 'Islam', 'Wiraswasta', '082112231123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `penduduk`
--
ALTER TABLE `penduduk`
  ADD PRIMARY KEY (`nik`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
