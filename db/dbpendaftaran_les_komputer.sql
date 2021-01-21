-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 16, 2018 at 03:38 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbpendaftaran_les_komputer`
--

-- --------------------------------------------------------

--
-- Table structure for table `dbpendaftaran_les_komputer`
--

CREATE TABLE `tb_siswa` (
  `nik` int(5) NOT NULL,
  `nama_siswa` varchar(100) NOT NULL,
  `alamat` Varchar(50) NOT NULL,
  `no_hp` int(5) NOT NULL,
  `jenis_kelamin` Varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`nik`, `nama_siswa`, `alamat`, `no_hp`, `jenis_kelamin` ) VALUES
(192203,   'Rafa', 'Aek Kenopan', '08123456829', 'Laki-laki'),
(1984235,  'Eko',  'Tanjung Balai','08527615390','Laki-laki'),
(19234517, 'Mifta','Kisaran Barat','08234517890', 'Perempuan'),
(190231679,'Eni',  'Aek Loba', '08229820377', 'Perempuan'),
(194609213,'Anggi','Batu Bara', '09125639086', 'Perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(25) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `nama`, `level`, `ket`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3', 'devk@gmail.com', 'Developer Kampoeng', 1, 'Staff Kepaniteraan Hukum');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
