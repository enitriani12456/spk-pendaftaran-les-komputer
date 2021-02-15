-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2021 at 07:22 AM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

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
-- Table structure for table `tb_kwitansi`
--

CREATE TABLE `tb_kwitansi` (
  `id_kwitansi` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `nik` varchar(25) NOT NULL,
  `jumlah_pembayaran` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_kwitansi`
--

INSERT INTO `tb_kwitansi` (`id_kwitansi`, `tanggal`, `nik`, `jumlah_pembayaran`) VALUES
(5, '2021-01-12', '12091447079500034', 300000),
(6, '2021-01-13', '1209144707950003', 150000),
(7, '2021-01-19', '1234123412341235', 250000),
(8, '2021-01-19', '1209101920192019', 320000);

-- --------------------------------------------------------

--
-- Table structure for table `tb_siswa`
--

CREATE TABLE `tb_siswa` (
  `id` int(11) NOT NULL,
  `nik` varchar(50) NOT NULL,
  `nama_siswa` varchar(25) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `no_hp` varchar(12) NOT NULL,
  `jenis_kelamin` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_siswa`
--

INSERT INTO `tb_siswa` (`id`, `nik`, `nama_siswa`, `alamat`, `no_hp`, `jenis_kelamin`) VALUES
(6, '1234123412341235', 'putra', 'kisaran timur', '081231231231', 'Perempuan'),
(7, '1209101920192019', 'Khan', 'Khana@gmail.com', '082164515561', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `paswd` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `level` int(1) NOT NULL,
  `ket` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `paswd`, `email`, `nama`, `level`, `ket`) VALUES
(5, 'admin', 'admin', 'admin', 'admin', 1, 'Staf Administrasi'),
(6, 'pelanggan 1', 'pelanggan1', 'pelanggan1@gmail.com', 'pelanggan 1', 0, 'Pelanggan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_kwitansi`
--
ALTER TABLE `tb_kwitansi`
  ADD PRIMARY KEY (`id_kwitansi`);

--
-- Indexes for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_kwitansi`
--
ALTER TABLE `tb_kwitansi`
  MODIFY `id_kwitansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_siswa`
--
ALTER TABLE `tb_siswa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
