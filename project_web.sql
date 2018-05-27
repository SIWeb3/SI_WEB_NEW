-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 27, 2018 at 09:17 AM
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
  `prodi` char(3) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_dosen`
--

INSERT INTO `data_dosen` (`nip`, `nama_dosen`, `hak_akses`, `prodi`, `password`) VALUES
('19700831 199803 1 001', 'Moh. Munih Dian W, S.Kom.,M.T.', '', 'TIF', ''),
('19700929 200312 1 001', 'Yogiswara, S.T., M.T.', '', 'TKK', ''),
('19701128 200312 1 001', 'Hariyono Rakhmad, S.Pd., M.Kom.', '', 'TKK', ''),
('19710408 200112 1 003', 'Wahyu Kurnia Dewanto, S.Kom., M.T.\r\n', '', 'MIF', ''),
('19711009 200312 1 001', 'Denny Trias Utomo, S.Si., M.T.', '', 'TIF', ''),
('19711115 199802 1 001', 'Adi Heru Utomo, S.Kom., M.Kom.\r\n', '', 'MIF', ''),
('19730831 200801 1 003', 'Agus Purwadi, S.T., M.T.', '', 'TKK', ''),
('19740519 200312 1 002', 'Nugroho Setyo Wibowo, S.T.,M.T.', '', 'TIF', ''),
('19770929 200501 1 003', 'Didit Rahmat Hartadi S.Kom., M.T.\r\n', '', 'MIF', ''),
('19780816 200501 1 002', 'Beni Widiawan, S.ST., M.T.', '', 'TKK', ''),
('19780817 200312 1 005', 'Agus Hariyanto, S.T., M.Kom.', '', 'TKK', ''),
('19780819 200502 2 001', 'Ika Widiastuti, S.ST., M.T.\r\n', '', 'MIF', ''),
('19780908 200501 1 001', 'Denny Wijanarko, S.T.,M.T.', '', 'TKK', ''),
('19781011 200501 2 002', 'Elly Antika, S.T., M.Kom', '', 'TIF', ''),
('19790703 200312 1 001', 'Surateno, S.Kom.,M.Kom.', '', 'TKK', ''),
('19790921 200501 1 001', 'I Putu Dody Lesmana, S.T.,M.T.', '', 'TIF', ''),
('19800517 200812 1 002', 'Dwi Putro Sarwo S, S.Kom., M.Kom.\r\n', '', 'MIF', ''),
('19801212 200501 1 001', 'Prawidya Destarianto, S.Kom.,M.T.', '', 'TIF', ''),
('19810115 200501 1 001', 'Nurul Zainal Fanani, S.ST, M.T.', '', 'TKK', ''),
('19810615 200604 1 002', 'Syamsul Arifin, S.Kom., M.Cs.\r\n', '1', 'MIF', 'saya'),
('19830109 201803 1 001', 'Hermawan Arief Putranto, S.T., M.T.\r\n', '2', 'MIF', 'aku'),
('19830203 200604 1 003', 'Hendra Yufit Riskiawan, S.Kom., M.Cs.\r\n', '3', 'MIF', 'dia'),
('19840625 201504 1 004', 'Bekti Maryuni S., S.Pd.,M.Kom.', '', 'TKK', ''),
('19851031 201803 1 001', 'Victor Phoa ST.,MCs.', '', 'TKK', ''),
('19851128 200812 1 002', 'Aji Seto Arfianto, S.ST., M.T.', '', 'TIF', ''),
('19860319 201403 1 001', 'Fendik Eko Purnomo, S.Pd.,M.T.', '', 'TKK', ''),
('19860609 200812 2 004', 'Nanik Anita M. ,S.ST.,M.T.\r\n', '', 'MIF', ''),
('19860802 201504 2 002', 'Ratih Ayuninghemi, S.ST., M.Kom.', '', 'TIF', ''),
('19880702 201610 1 001', 'Husin, S.Kom., M.MT.\r\n', '', 'MIF', ''),
('19890329 201503 1 001', 'Taufiq Rizaldi, S.ST.,M.T.\r\n', '', 'MIF', ''),
('19890710 201509 1 001', 'Ery Setiawan Julev Atmaji, S.Kom.,M.Cs.', '', 'TIF', ''),
('19900227 201803 2 001', 'Trismayanti Dwi P, S.Kom., M,Cs.', '', 'TIF', ''),
('19910315 201703 1 001', 'Syamsiar Kautsar, S.ST., M.T.', '', 'TKK', ''),
('19910429 201710 1 001', 'Faisal Lutfi Afriansyah, S.Kom., M.T.\r\n', '', 'MIF', ''),
('19911211 201803 1 001', 'Khafidurohman A., S.Pd., M.Eng.', '', 'TIF', ''),
('19920302 201803 2 001', 'Zilvanhisna Emka Fitri, S.T., M.T.', '', 'TIF', ''),
('19920528 201803 2 001', 'Bety Etikasari, S.Pd., M.Pd.', '', 'TIF', '');

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
  `nip` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  `judul` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `dosen_pembimbing` varchar(16) NOT NULL,
  `tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
  ADD PRIMARY KEY (`nip`);

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
  MODIFY `id_usulan` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ambil_judul_dosen`
--
ALTER TABLE `ambil_judul_dosen`
  ADD CONSTRAINT `ambil_judul_dosen_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `usulan_ta_mhs` (`nim`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
  ADD CONSTRAINT `penentuan_dospem_ibfk_1` FOREIGN KEY (`id_review_mhs`) REFERENCES `review_ta` (`id_review_mhs`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
  ADD CONSTRAINT `usulan_judul_dosen_ibfk_1` FOREIGN KEY (`id_judul_dosen`) REFERENCES `ambil_judul_dosen` (`id_judul_dosen`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `usulan_judul_dosen_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `data_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `usulan_ta_mhs`
--
ALTER TABLE `usulan_ta_mhs`
  ADD CONSTRAINT `usulan_ta_mhs_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `data_mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
