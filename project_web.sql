-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 06:08 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `ambil judul dosen`
--

CREATE TABLE `ambil judul dosen` (
  `Id_ambil` int(11) NOT NULL,
  `Id_usulan` int(11) NOT NULL,
  `Id_judul_dosen` int(11) NOT NULL,
  `NIM` varchar(9) NOT NULL,
  `Tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data dosen`
--

CREATE TABLE `data dosen` (
  `NIP` varchar(16) NOT NULL,
  `Nama Dosen` char(100) NOT NULL,
  `Hak Akses` int(1) NOT NULL,
  `Prodi` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(3) NOT NULL,
  `golongan` varchar(2) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`nim`, `nama`, `prodi`, `golongan`, `password`) VALUES
('e31160395', 'Dinda Ayu Pujiningtiyas', 'MIF', 'A', 'dinda');

-- --------------------------------------------------------

--
-- Table structure for table `hak akses`
--

CREATE TABLE `hak akses` (
  `Id_HA` int(1) NOT NULL,
  `Keterangan` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `penentuan dospem`
--

CREATE TABLE `penentuan dospem` (
  `Id_penentuan_dospem` int(11) NOT NULL,
  `Id_review_mhs` int(11) NOT NULL,
  `Dosen_Pembimbing` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review ta`
--

CREATE TABLE `review ta` (
  `Id_review_mhs` int(11) NOT NULL,
  `Id_usulan` int(11) NOT NULL,
  `NIP` varchar(16) NOT NULL,
  `Status` char(50) NOT NULL,
  `Deskripsi_Review` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usulan final`
--

CREATE TABLE `usulan final` (
  `Id_usulan_final` int(11) NOT NULL,
  `NIM` varchar(9) NOT NULL,
  `Prodi` char(3) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Dosen Pembimbing` varchar(16) NOT NULL,
  `Tgl Input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usulan judul dosen`
--

CREATE TABLE `usulan judul dosen` (
  `Id_judul_dosen` int(11) NOT NULL,
  `NIP` varchar(16) NOT NULL,
  `Judul_dosen` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Kuota` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usulan ta mhs`
--

CREATE TABLE `usulan ta mhs` (
  `Id_usulan` int(11) NOT NULL,
  `NIM` varchar(9) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Dosen Pembimbing` varchar(16) NOT NULL,
  `Tgl Input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambil judul dosen`
--
ALTER TABLE `ambil judul dosen`
  ADD PRIMARY KEY (`Id_ambil`),
  ADD KEY `Id_usulan` (`Id_usulan`),
  ADD KEY `Id_judul_dosen` (`Id_judul_dosen`),
  ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `data dosen`
--
ALTER TABLE `data dosen`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `Hak Akses` (`Hak Akses`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `hak akses`
--
ALTER TABLE `hak akses`
  ADD PRIMARY KEY (`Id_HA`),
  ADD KEY `Id_HA` (`Id_HA`);

--
-- Indexes for table `penentuan dospem`
--
ALTER TABLE `penentuan dospem`
  ADD PRIMARY KEY (`Id_penentuan_dospem`),
  ADD KEY `Dosen_Pembimbing` (`Dosen_Pembimbing`),
  ADD KEY `Id_review_mhs` (`Id_review_mhs`);

--
-- Indexes for table `review ta`
--
ALTER TABLE `review ta`
  ADD PRIMARY KEY (`Id_review_mhs`),
  ADD KEY `Id_usulan` (`Id_usulan`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `usulan final`
--
ALTER TABLE `usulan final`
  ADD PRIMARY KEY (`Id_usulan_final`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `Dosen Pembimbing` (`Dosen Pembimbing`);

--
-- Indexes for table `usulan judul dosen`
--
ALTER TABLE `usulan judul dosen`
  ADD PRIMARY KEY (`Id_judul_dosen`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `usulan ta mhs`
--
ALTER TABLE `usulan ta mhs`
  ADD PRIMARY KEY (`Id_usulan`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `Dosen Pembimbing` (`Dosen Pembimbing`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambil judul dosen`
--
ALTER TABLE `ambil judul dosen`
  MODIFY `Id_ambil` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `hak akses`
--
ALTER TABLE `hak akses`
  MODIFY `Id_HA` int(1) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penentuan dospem`
--
ALTER TABLE `penentuan dospem`
  MODIFY `Id_penentuan_dospem` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `review ta`
--
ALTER TABLE `review ta`
  MODIFY `Id_review_mhs` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usulan final`
--
ALTER TABLE `usulan final`
  MODIFY `Id_usulan_final` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usulan judul dosen`
--
ALTER TABLE `usulan judul dosen`
  MODIFY `Id_judul_dosen` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usulan ta mhs`
--
ALTER TABLE `usulan ta mhs`
  MODIFY `Id_usulan` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data dosen`
--
ALTER TABLE `data dosen`
  ADD CONSTRAINT `data dosen_ibfk_1` FOREIGN KEY (`Hak Akses`) REFERENCES `hak akses` (`Id_HA`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
