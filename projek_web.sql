-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 27 Mei 2018 pada 05.41
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projek_web`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ambil_judul_dosen`
--

CREATE TABLE `ambil_judul_dosen` (
  `Id_ambil` int(11) NOT NULL,
  `Id_usulan` int(11) NOT NULL,
  `Id_judul_dosen` int(11) NOT NULL,
  `NIM` varchar(9) NOT NULL,
  `Tgl_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_dosen`
--

CREATE TABLE `data_dosen` (
  `NIP` varchar(16) NOT NULL,
  `Nama_Dosen` char(100) NOT NULL,
  `Hak_Akses` int(1) NOT NULL,
  `Prodi` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_dosen`
--

INSERT INTO `data_dosen` (`NIP`, `Nama_Dosen`, `Hak_Akses`, `Prodi`) VALUES
('12345', 'coba', 1, 'TKK');

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_mahasiswa`
--

CREATE TABLE `data_mahasiswa` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `prodi` varchar(3) NOT NULL,
  `golongan` varchar(2) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `data_mahasiswa`
--

INSERT INTO `data_mahasiswa` (`nim`, `nama`, `prodi`, `golongan`, `password`) VALUES
('e31160395', 'Dinda Ayu Pujiningtiyas', 'MIF', 'A', 'dinda');

-- --------------------------------------------------------

--
-- Struktur dari tabel `hak_akses`
--

CREATE TABLE `hak_akses` (
  `Id_HA` int(1) NOT NULL,
  `Keterangan` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `penentuan_dospem`
--

CREATE TABLE `penentuan_dospem` (
  `Id_penentuan_dospem` int(11) NOT NULL,
  `Id_review_mhs` int(11) NOT NULL,
  `Dosen_Pembimbing` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `review_ta`
--

CREATE TABLE `review_ta` (
  `Id_review_mhs` int(11) NOT NULL,
  `Id_usulan` int(11) NOT NULL,
  `NIP` varchar(16) NOT NULL,
  `Status` char(50) NOT NULL,
  `Deskripsi_Review` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usulan_final`
--

CREATE TABLE `usulan_final` (
  `Id_usulan_final` int(11) NOT NULL,
  `NIM` varchar(9) NOT NULL,
  `Prodi` char(3) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Dosen_Pembimbing` varchar(16) NOT NULL,
  `Tgl_Input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usulan_judul_dosen`
--

CREATE TABLE `usulan_judul_dosen` (
  `Id_judul_dosen` int(11) NOT NULL,
  `NIP` varchar(16) NOT NULL,
  `Judul_dosen` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Kuota` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `usulan_ta_mhs`
--

CREATE TABLE `usulan_ta_mhs` (
  `Id_usulan` int(11) NOT NULL,
  `NIM` varchar(9) NOT NULL,
  `Judul` varchar(100) NOT NULL,
  `Deskripsi` text NOT NULL,
  `Dosen_Pembimbing` varchar(16) NOT NULL,
  `Tgl_Input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ambil_judul_dosen`
--
ALTER TABLE `ambil_judul_dosen`
  ADD PRIMARY KEY (`Id_ambil`),
  ADD KEY `Id_usulan` (`Id_usulan`),
  ADD KEY `Id_judul_dosen` (`Id_judul_dosen`),
  ADD KEY `NIM` (`NIM`);

--
-- Indexes for table `data_dosen`
--
ALTER TABLE `data_dosen`
  ADD PRIMARY KEY (`NIP`),
  ADD KEY `Hak Akses` (`Hak_Akses`);

--
-- Indexes for table `data_mahasiswa`
--
ALTER TABLE `data_mahasiswa`
  ADD PRIMARY KEY (`nim`);

--
-- Indexes for table `hak_akses`
--
ALTER TABLE `hak_akses`
  ADD PRIMARY KEY (`Id_HA`),
  ADD KEY `Id_HA` (`Id_HA`);

--
-- Indexes for table `penentuan_dospem`
--
ALTER TABLE `penentuan_dospem`
  ADD PRIMARY KEY (`Id_penentuan_dospem`),
  ADD KEY `Dosen_Pembimbing` (`Dosen_Pembimbing`),
  ADD KEY `Id_review_mhs` (`Id_review_mhs`);

--
-- Indexes for table `review_ta`
--
ALTER TABLE `review_ta`
  ADD PRIMARY KEY (`Id_review_mhs`),
  ADD KEY `Id_usulan` (`Id_usulan`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `usulan_final`
--
ALTER TABLE `usulan_final`
  ADD PRIMARY KEY (`Id_usulan_final`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `Dosen Pembimbing` (`Dosen_Pembimbing`);

--
-- Indexes for table `usulan_judul_dosen`
--
ALTER TABLE `usulan_judul_dosen`
  ADD PRIMARY KEY (`Id_judul_dosen`),
  ADD KEY `NIP` (`NIP`);

--
-- Indexes for table `usulan_ta_mhs`
--
ALTER TABLE `usulan_ta_mhs`
  ADD PRIMARY KEY (`Id_usulan`),
  ADD KEY `NIM` (`NIM`),
  ADD KEY `Dosen Pembimbing` (`Dosen_Pembimbing`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ambil_judul_dosen`
--
ALTER TABLE `ambil_judul_dosen`
  MODIFY `Id_ambil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hak_akses`
--
ALTER TABLE `hak_akses`
  MODIFY `Id_HA` int(1) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `penentuan_dospem`
--
ALTER TABLE `penentuan_dospem`
  MODIFY `Id_penentuan_dospem` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `review_ta`
--
ALTER TABLE `review_ta`
  MODIFY `Id_review_mhs` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usulan_final`
--
ALTER TABLE `usulan_final`
  MODIFY `Id_usulan_final` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usulan_judul_dosen`
--
ALTER TABLE `usulan_judul_dosen`
  MODIFY `Id_judul_dosen` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `usulan_ta_mhs`
--
ALTER TABLE `usulan_ta_mhs`
  MODIFY `Id_usulan` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
