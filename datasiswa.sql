-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 25, 2019 at 04:46 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `datasiswa`
--

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE `nilai` (
  `NIS` varchar(10) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nilai` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`NIS`, `kode`, `nilai`) VALUES
(' 003 ', 'AP2', 90),
(' 005 ', 'AP2', 90),
(' 009 ', 'AP1', 90),
('007', 'BIP1', 90);

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE `pelajaran` (
  `kode` varchar(10) NOT NULL,
  `nama_pelajaran` varchar(40) NOT NULL,
  `semester` int(10) NOT NULL,
  `jp` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`kode`, `nama_pelajaran`, `semester`, `jp`) VALUES
('AP1', 'Alogritma_Pemrogramman1', 1, 4),
('AP2', 'Alogritma_Pemrogramman2', 2, 4),
('BIP1', 'Bahasa_indonesia_penelitian1', 1, 5),
('BIP2', 'Bahasa_indonesia_penelitian2', 2, 3),
('ENG1', ' English1 ', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `pengguna`
--

CREATE TABLE `pengguna` (
  `user` varchar(10) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `tipe` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengguna`
--

INSERT INTO `pengguna` (`user`, `pass`, `tipe`) VALUES
('admin', 'admin', 0),
('ajeng', 'ajeng', 1),
('milla', 'milla', 1),
('su', 'su', 0),
('user', 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `NIS` varchar(10) NOT NULL,
  `user` varchar(10) DEFAULT NULL,
  `Nama` varchar(30) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Tanggal_lahir` date NOT NULL,
  `Tempat_lahir` varchar(20) NOT NULL,
  `Agama` varchar(10) NOT NULL,
  `No_hp` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`NIS`, `user`, `Nama`, `Alamat`, `Tanggal_lahir`, `Tempat_lahir`, `Agama`, `No_hp`) VALUES
(' 003 ', NULL, ' Wayendod ', 'Tamboen ', '2019-07-11', 'Jakarte', 'Islam', '082323212'),
(' 005 ', NULL, 'mAE', 'Korea ', '1999-04-15', 'Bekasi', 'Islam', '082310123123'),
(' 006 ', NULL, ' Mami ', 'Ciakarng ', '2019-07-03', 'Jakarte', 'Islam', '08232321232'),
(' 009 ', 'ajeng', ' ajeng ', 'Cibbitung ', '2019-07-17', 'Nigeria', 'Islam', '0982312321'),
('007', 'milla', 'Milla', 'Regensi1', '2019-07-10', '  Bandung    ', '  Islam  ', '08213123  '),
('008', NULL, 'Mamang', 'Bekasi', '2019-07-04', 'Jakarta', 'Islam', '082323123223');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`NIS`,`kode`),
  ADD KEY `kode` (`kode`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`kode`);

--
-- Indexes for table `pengguna`
--
ALTER TABLE `pengguna`
  ADD PRIMARY KEY (`user`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`NIS`),
  ADD KEY `user` (`user`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `Nilai_ibfk_1` FOREIGN KEY (`NIS`) REFERENCES `siswa` (`NIS`),
  ADD CONSTRAINT `Nilai_ibfk_2` FOREIGN KEY (`kode`) REFERENCES `pelajaran` (`kode`);

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_1` FOREIGN KEY (`user`) REFERENCES `pengguna` (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
