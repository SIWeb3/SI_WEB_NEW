-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2018 at 01:24 PM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
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
-- Table structure for table `ambil_judul_dosen`
--

CREATE TABLE `ambil_judul_dosen` (
  `id_ambil` int(11) NOT NULL,
  `id_usulan` int(11) NOT NULL,
  `id_judul_dosen` int(11) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_dosen`
--

CREATE TABLE `data_dosen` (
  `nip` varchar(30) NOT NULL,
  `nama_dosen` char(100) NOT NULL,
  `hak_akses` enum('1','2','3') NOT NULL,
  `password` varchar(15) NOT NULL,
  `prodi` char(3) NOT NULL,
  `no_hp` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`nip`, `nama_dosen`, `hak_akses`, `password`, `prodi`, `no_hp`) VALUES
('19710408 200112 1 003', 'Wahyu Kurnia Dewanto, S.Kom., M.T.\r\n', '1', '311', 'MIF', '081 252 449 69'),
('19711115 199802 1 001', 'Adi Heru Utomo, S.Kom., M.Kom.\r\n', '1', '311', 'MIF', '085 236 010 820'),
('19770929 200501 1 003', 'Didit Rahmat Hartadi S.Kom., M.T.\r\n', '1', '311', 'MIF', '085 234 609 168'),
('19780819 200502 2 001', 'Ika Widiastuti, S.ST., M.T.\r\n', '1', '311', 'MIF', '081 249 794 912'),
('19800517 200812 1 002', 'Dwi Putro Sarwo S, S.Kom., M.Kom.\r\n', '2', '311', 'MIF', '085 641 500 007'),
('19810615 200604 1 002', 'Syamsul Arifin, S.Kom., M.Cs.\r\n', '2', '311', 'MIF', '081 249 515 151'),
('19830203 200604 1 003', 'Hendra Yufit Riskiawan, S.Kom., M.Cs.\r\n', '1', '311', 'MIF', '085 649 222 290'),
('19860609 200812 2 004', 'Nanik Anita M. ,S.ST.,M.T.\r\n', '1', '311', 'MIF', '081 234 909 509');

-- --------------------------------------------------------

--
-- Table structure for table `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `nim` varchar(9) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` char(3) NOT NULL,
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
-- Table structure for table `kuota_dosen`
--

CREATE TABLE `kuota_dosen` (
  `nip` varchar(30) NOT NULL,
  `kuota` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pendaftaran_proposal`
--

CREATE TABLE `pendaftaran_proposal` (
  `id_daftar` int(11) NOT NULL,
  `upload_file` varchar(200) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `judul` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendaftaran_proposal`
--

INSERT INTO `pendaftaran_proposal` (`id_daftar`, `upload_file`, `nim`, `nip`, `judul`) VALUES
(1, 'Activity Diagram 1.pdf', 'e31160395', '19860609 200812 2 004', 'eeee'),
(2, 'jurnal-bab2-ciframework.pdf', 'e31160395', '19711115 199802 1 001', 'ee'),
(3, 'jurnal-bab2-ci.pdf', 'E31160395', '19711115 199802 1 001', 'fff');

-- --------------------------------------------------------

--
-- Table structure for table `penentuan_dospem`
--

CREATE TABLE `penentuan_dospem` (
  `id_penentuan_dospem` int(11) NOT NULL,
  `id_review_mhs` int(11) NOT NULL,
  `dosen_pembimbing` varchar(16) NOT NULL,
  `kuota` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_ta`
--

CREATE TABLE `review_ta` (
  `id_review_mhs` int(11) NOT NULL,
  `id_usulan` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `status` char(50) NOT NULL,
  `deskripsi_review` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usulan_final`
--

CREATE TABLE `usulan_final` (
  `id_usulan_final` int(11) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `prodi` char(3) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengerjaan` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `dosen_pembimbing` varchar(16) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usulan_judul_dosen`
--

CREATE TABLE `usulan_judul_dosen` (
  `id_judul_dosen` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `judul_dosen` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `kuota` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `usulan_ta_mhs`
--

CREATE TABLE `usulan_ta_mhs` (
  `id_usulan` int(11) NOT NULL,
  `nim` varchar(9) NOT NULL,
  `prodi` char(3) NOT NULL,
  `golongan` varchar(1) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `pengerjaan` varchar(10) NOT NULL,
  `deskripsi` text NOT NULL,
  `dosen_pembimbing` varchar(30) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usulan_ta_mhs`
--

INSERT INTO `usulan_ta_mhs` (`id_usulan`, `nim`, `prodi`, `golongan`, `judul`, `pengerjaan`, `deskripsi`, `dosen_pembimbing`, `tgl_input`) VALUES
(1, 'e31160395', 'mif', 'a', 'ee', 'individu', 'ee', '19710408 200112 1 003', '2018-05-29');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambil_judul_dosen`
--
ALTER TABLE `ambil_judul_dosen`
  ADD PRIMARY KEY (`id_ambil`),
  ADD KEY `Id_usulan` (`id_usulan`),
  ADD KEY `Id_judul_dosen` (`id_judul_dosen`),
  ADD KEY `NIM` (`nim`);

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `Hak Akses` (`hak_akses`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `Prodi` (`prodi`);

--
-- Indexes for table `kuota_dosen`
--
ALTER TABLE `kuota_dosen`
  ADD KEY `kuota` (`kuota`),
  ADD KEY `NIP` (`nip`);

--
-- Indexes for table `pendaftaran_proposal`
--
ALTER TABLE `pendaftaran_proposal`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `NIM` (`nim`),
  ADD KEY `NIP` (`nip`);

--
-- Indexes for table `penentuan_dospem`
--
ALTER TABLE `penentuan_dospem`
  ADD PRIMARY KEY (`id_penentuan_dospem`),
  ADD KEY `Dosen_Pembimbing` (`dosen_pembimbing`),
  ADD KEY `Id_review_mhs` (`id_review_mhs`),
  ADD KEY `kuota` (`kuota`);

--
-- Indexes for table `review_ta`
--
ALTER TABLE `review_ta`
  ADD PRIMARY KEY (`id_review_mhs`),
  ADD KEY `Id_usulan` (`id_usulan`),
  ADD KEY `NIP` (`nip`);

--
-- Indexes for table `usulan_final`
--
ALTER TABLE `usulan_final`
  ADD PRIMARY KEY (`id_usulan_final`),
  ADD KEY `NIM` (`nim`),
  ADD KEY `Dosen Pembimbing` (`dosen_pembimbing`),
  ADD KEY `Prodi` (`prodi`);

--
-- Indexes for table `usulan_judul_dosen`
--
ALTER TABLE `usulan_judul_dosen`
  ADD PRIMARY KEY (`id_judul_dosen`),
  ADD KEY `NIP` (`nip`);

--
-- Indexes for table `usulan_ta_mhs`
--
ALTER TABLE `usulan_ta_mhs`
  ADD PRIMARY KEY (`id_usulan`),
  ADD UNIQUE KEY `dosen_pembimbing` (`dosen_pembimbing`),
  ADD KEY `NIM` (`nim`),
  ADD KEY `Dosen Pembimbing` (`dosen_pembimbing`),
  ADD KEY `Prodi` (`prodi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambil_judul_dosen`
--
ALTER TABLE `ambil_judul_dosen`
  MODIFY `id_ambil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pendaftaran_proposal`
--
ALTER TABLE `pendaftaran_proposal`
  MODIFY `id_daftar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `penentuan_dospem`
--
ALTER TABLE `penentuan_dospem`
  MODIFY `id_penentuan_dospem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_ta`
--
ALTER TABLE `review_ta`
  MODIFY `id_review_mhs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usulan_final`
--
ALTER TABLE `usulan_final`
  MODIFY `id_usulan_final` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usulan_judul_dosen`
--
ALTER TABLE `usulan_judul_dosen`
  MODIFY `id_judul_dosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usulan_ta_mhs`
--
ALTER TABLE `usulan_ta_mhs`
  MODIFY `id_usulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ambil_judul_dosen`
--
ALTER TABLE `ambil_judul_dosen`
  ADD CONSTRAINT `ambil_judul_dosen_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `usulan_ta_mhs` (`nim`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `ambil_judul_dosen_ibfk_2` FOREIGN KEY (`id_judul_dosen`) REFERENCES `usulan_judul_dosen` (`id_judul_dosen`);

--
-- Constraints for table `kuota_dosen`
--
ALTER TABLE `kuota_dosen`
  ADD CONSTRAINT `kuota_dosen_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `data_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `pendaftaran_proposal`
--
ALTER TABLE `pendaftaran_proposal`
  ADD CONSTRAINT `pendaftaran_proposal_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `data_mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_proposal_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `data_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `penentuan_dospem`
--
ALTER TABLE `penentuan_dospem`
  ADD CONSTRAINT `penentuan_dospem_ibfk_1` FOREIGN KEY (`id_review_mhs`) REFERENCES `review_ta` (`id_review_mhs`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `penentuan_dospem_ibfk_2` FOREIGN KEY (`dosen_pembimbing`) REFERENCES `usulan_final` (`dosen_pembimbing`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `review_ta`
--
ALTER TABLE `review_ta`
  ADD CONSTRAINT `review_ta_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `data_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `review_ta_ibfk_2` FOREIGN KEY (`id_usulan`) REFERENCES `usulan_ta_mhs` (`id_usulan`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `usulan_final`
--
ALTER TABLE `usulan_final`
  ADD CONSTRAINT `usulan_final_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `usulan_ta_mhs` (`nim`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `usulan_final_ibfk_2` FOREIGN KEY (`dosen_pembimbing`) REFERENCES `usulan_ta_mhs` (`dosen_pembimbing`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `usulan_final_ibfk_3` FOREIGN KEY (`prodi`) REFERENCES `usulan_ta_mhs` (`prodi`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `usulan_judul_dosen`
--
ALTER TABLE `usulan_judul_dosen`
  ADD CONSTRAINT `usulan_judul_dosen_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `data_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `usulan_ta_mhs`
--
ALTER TABLE `usulan_ta_mhs`
  ADD CONSTRAINT `usulan_ta_mhs_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `data_mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `usulan_ta_mhs_ibfk_2` FOREIGN KEY (`dosen_pembimbing`) REFERENCES `data_dosen` (`nip`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
