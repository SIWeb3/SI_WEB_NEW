-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2018 at 10:04 AM
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
('19700831 199803 1 001', 'Moh. Munih Dian W, S.Kom.,M.T.\r\n', '1', '311', 'TIF', '081 233 075 06'),
('19700929 200312 1 001', 'Yogiswara, S.T., M.T.\r\n', '1', '311', 'TKK', '081 249 735 955'),
('19701128 200312 1 001', 'Hariyono Rakhmad, S.Pd., M.Kom.\r\n', '1', '311', 'TKK', '081 559 056 16'),
('19710408 200112 1 003', 'Wahyu Kurnia Dewanto, S.Kom., M.T.\r\n', '1', '311', 'MIF', '081 252 449 69'),
('19711009 200312 1 001', 'Denny Trias Utomo, S.Si., M.T.\r\n', '1', '311', 'TIF', '081 136 253 20'),
('19711115 199802 1 001', 'Adi Heru Utomo, S.Kom., M.Kom.\r\n', '1', '311', 'MIF', '085 236 010 820'),
('19730831 200801 1 003', 'Agus Purwadi, S.T., M.T.\r\n', '1', '311', 'TKK', '081 249 147 40'),
('19740519 200312 1 002', 'Nugroho Setyo Wibowo, S.T.,M.T.\r\n', '1', '311', 'TIF', '085 236 329 999'),
('19770929 200501 1 003', 'Didit Rahmat Hartadi S.Kom., M.T.\r\n', '1', '311', 'MIF', '085 234 609 168'),
('19780816 200501 1 002', 'Beni Widiawan, S.ST., M.T.\r\n', '2', '311', 'TKK', '081 336 285 687'),
('19780817 200312 1 005', 'Agus Hariyanto, S.T., M.Kom.\r\n', '2', '311', 'TKK', '085 236 986 278'),
('19780819 200502 2 001', 'Ika Widiastuti, S.ST., M.T.\r\n', '3', '311', 'MIF', '081 249 794 912'),
('19780908 200501 1 001', 'Denny Wijanarko, S.T.,M.T.\r\n', '1', '311', 'TKK', '082 334 417 777'),
('19781011 200501 2 002', 'Elly Antika, S.T., M.Kom\r\n', '1', '311', 'TIF', '081 249 460 73'),
('19790703 200312 1 001', 'Surateno, S.Kom.,M.Kom.\r\n', '1', '311', 'TKK', '085 236 752 542'),
('19790921 200501 1 001', 'I Putu Dody Lesmana, S.T.,M.T.\r\n', '1', '311', 'TIF', '081 250 003 479'),
('19800517 200812 1 002', 'Dwi Putro Sarwo S, S.Kom., M.Kom.\r\n', '2', '311', 'MIF', '085 641 500 007'),
('19801212 200501 1 001', 'Prawidya Destarianto, S.Kom.,M.T.\r\n', '1', '311', 'TIF', '085 236 090 999'),
('19810115 200501 1 001', 'Nurul Zainal Fanani, S.ST, M.T.\r\n', '1', '311', 'TKK', '081 249 254 949'),
('19810615 200604 1 002', 'Syamsul Arifin, S.Kom., M.Cs.\r\n', '2', '311', 'MIF', '081 249 515 151'),
('19830109 201803 1 001', 'Hermawan Arief Putranto, S.T., M.T.', '3', '311', 'MIF', '081 252 465 655'),
('19830203 200604 1 003', 'Hendra Yufit Riskiawan, S.Kom., M.Cs.\r\n', '1', '311', 'MIF', '085 649 222 290'),
('19840625 201504 1 004', 'Bekti Maryuni S., S.Pd.,M.Kom.\r\n', '1', '311', 'TKK', '085 729 491 540'),
('19851031 201803 1 001', 'Victor Phoa ST.,MCs.\r\n', '1', '311', 'TKK', '085 656 067 801'),
('19851128 200812 1 002', 'Aji Seto Arfianto, S.ST., M.T.\r\n', '1', '311', 'TIF', '081 232 534 534'),
('19860319 201403 1 001', 'Fendik Eko Purnomo, S.Pd.,M.T.\r\n', '1', '311', 'TKK', '085 730 672 884'),
('19860609 200812 2 004', 'Nanik Anita M. ,S.ST.,M.T.\r\n', '1', '311', 'MIF', '081 234 909 509'),
('19860802 201504 2 002', 'Ratih Ayuninghemi, S.ST., M.Kom.\r\n', '1', '311', 'TIF', '085 651 152 881'),
('19880702 201610 1 001', 'Husin, S.Kom., M.MT.', '3', '311', 'MIF', '081 338 338 833'),
('19890329 201503 1 001', 'Taufiq Rizaldi, S.ST.,M.T.', '3', '311', 'MIF', '081 332 010 455'),
('19890710 201509 1 001', 'Ery Setiawan Julev Atmaji, S.Kom.,M.Cs.\r\n', '1', '311', 'TIF', '085 648 807 492'),
('19900227 201803 2 001', 'Trismayanti Dwi P, S.Kom., M,Cs.\r\n', '1', '311', 'TIF', '085 859 184 555'),
('19910315 201703 1 001', 'Syamsiar Kautsar, S.ST., M.T.\r\n', '1', '311', 'TKK', '081 217 161 711'),
('19910429 201710 1 001', 'Faisal Lutfi Afriansyah, S.Kom., M.T.', '3', '311', 'MIF', '081 136 205 000'),
('19911211 201803 1 001', 'Khafidurohman A., S.Pd., M.Eng.\r\n', '1', '311', 'TIF', '085 646 418 027'),
('19920302 201803 2 001', 'Zilvanhisna Emka Fitri, S.T., M.T.\r\n', '1', '311', 'TIF', '081 336 959 394'),
('19920528 201803 2 001', 'Bety Etikasari, S.Pd., M.Pd.\r\n', '1', '311', 'TIF', '085 233 975 628');

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
-- Table structure for table `mahasiswa_bimbingan`
--

CREATE TABLE `mahasiswa_bimbingan` (
  `nim` varchar(9) DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `mhs_bimbingan_sementara`
--

CREATE TABLE `mhs_bimbingan_sementara` (
  `nim` varchar(9) DEFAULT NULL,
  `nip` varchar(30) DEFAULT NULL
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
-- Table structure for table `review_ta`
--

CREATE TABLE `review_ta` (
  `id_review_mhs` int(11) NOT NULL,
  `id_usulan` int(11) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `status` char(50) NOT NULL,
  `deskripsi_review` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_ta`
--

INSERT INTO `review_ta` (`id_review_mhs`, `id_usulan`, `nip`, `status`, `deskripsi_review`) VALUES
(1, 2, '19800517 200812 1 002', 'diterima', 'sudah good');

-- --------------------------------------------------------

--
-- Table structure for table `tanggal`
--

CREATE TABLE `tanggal` (
  `id` int(11) NOT NULL,
  `Tgl_awal` date NOT NULL,
  `Tgl_akhir` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
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

--
-- Dumping data for table `usulan_judul_dosen`
--

INSERT INTO `usulan_judul_dosen` (`id_judul_dosen`, `nip`, `judul_dosen`, `deskripsi`, `kuota`) VALUES
(1, '19710408 200112 1 003', 'judul juduan', 'gatau', 1);

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
  `tgl_input` date NOT NULL,
  `judul_dosen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `usulan_ta_mhs`
--

INSERT INTO `usulan_ta_mhs` (`id_usulan`, `nim`, `prodi`, `golongan`, `judul`, `pengerjaan`, `deskripsi`, `dosen_pembimbing`, `tgl_input`, `judul_dosen`) VALUES
(2, 'e31160395', 'mif', 'a', 'judul tugas akhir', 'individu', 'ini deskripsi', '19710408 200112 1 003', '2018-06-25', 'tidak');

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
-- Indexes for table `mahasiswa_bimbingan`
--
ALTER TABLE `mahasiswa_bimbingan`
  ADD KEY `nim` (`nim`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `mhs_bimbingan_sementara`
--
ALTER TABLE `mhs_bimbingan_sementara`
  ADD KEY `nip` (`nip`),
  ADD KEY `nim` (`nim`);

--
-- Indexes for table `pendaftaran_proposal`
--
ALTER TABLE `pendaftaran_proposal`
  ADD PRIMARY KEY (`id_daftar`),
  ADD KEY `NIM` (`nim`),
  ADD KEY `NIP` (`nip`);

--
-- Indexes for table `review_ta`
--
ALTER TABLE `review_ta`
  ADD PRIMARY KEY (`id_review_mhs`),
  ADD KEY `Id_usulan` (`id_usulan`),
  ADD KEY `NIP` (`nip`);

--
-- Indexes for table `tanggal`
--
ALTER TABLE `tanggal`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `review_ta`
--
ALTER TABLE `review_ta`
  MODIFY `id_review_mhs` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tanggal`
--
ALTER TABLE `tanggal`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usulan_final`
--
ALTER TABLE `usulan_final`
  MODIFY `id_usulan_final` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `usulan_judul_dosen`
--
ALTER TABLE `usulan_judul_dosen`
  MODIFY `id_judul_dosen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `usulan_ta_mhs`
--
ALTER TABLE `usulan_ta_mhs`
  MODIFY `id_usulan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
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
-- Constraints for table `mahasiswa_bimbingan`
--
ALTER TABLE `mahasiswa_bimbingan`
  ADD CONSTRAINT `mahasiswa_bimbingan_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `data_mahasiswa` (`nim`),
  ADD CONSTRAINT `mahasiswa_bimbingan_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `data_dosen` (`nip`);

--
-- Constraints for table `mhs_bimbingan_sementara`
--
ALTER TABLE `mhs_bimbingan_sementara`
  ADD CONSTRAINT `mhs_bimbingan_sementara_ibfk_1` FOREIGN KEY (`nip`) REFERENCES `data_dosen` (`nip`),
  ADD CONSTRAINT `mhs_bimbingan_sementara_ibfk_2` FOREIGN KEY (`nim`) REFERENCES `data_mahasiswa` (`nim`);

--
-- Constraints for table `pendaftaran_proposal`
--
ALTER TABLE `pendaftaran_proposal`
  ADD CONSTRAINT `pendaftaran_proposal_ibfk_1` FOREIGN KEY (`nim`) REFERENCES `data_mahasiswa` (`nim`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `pendaftaran_proposal_ibfk_2` FOREIGN KEY (`nip`) REFERENCES `data_dosen` (`nip`) ON DELETE NO ACTION ON UPDATE CASCADE;

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
