-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2018 at 07:31 PM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simurat`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_disposisi`
--

CREATE TABLE `tb_disposisi` (
  `id_disposisi` int(11) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `keterangan` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_disposisi`
--

INSERT INTO `tb_disposisi` (`id_disposisi`, `jabatan`, `keterangan`, `status`) VALUES
(1, 'Kepala Dinas', 'Hadiri', 'Terdisposisi'),
(2, 'Kepala Dinas', 'Tindak Lanjuti', 'Terdisposisi');

-- --------------------------------------------------------

--
-- Table structure for table `tb_jabatan`
--

CREATE TABLE `tb_jabatan` (
  `kode_jabatan` varchar(15) NOT NULL,
  `nama_jabatan` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_skeluar`
--

CREATE TABLE `tb_skeluar` (
  `id_suratkeluar` int(11) NOT NULL,
  `kode_user` varchar(15) NOT NULL,
  `id_fotosurat` varchar(50) NOT NULL,
  `kode_surat` varchar(15) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `tujuan_surat` varchar(20) NOT NULL,
  `lampiran` varchar(10) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_skeluar`
--

INSERT INTO `tb_skeluar` (`id_suratkeluar`, `kode_user`, `id_fotosurat`, `kode_surat`, `tanggal_surat`, `nomor_surat`, `tujuan_surat`, `lampiran`, `perihal`, `status`) VALUES
(1, 'US1', 'SR2', '005-Undangan', '2018-09-06', '01/HK/09/2018', 'Camat ABS', '1', 'Undangan Rapat Kepada Camat', 'Terkirim');

-- --------------------------------------------------------

--
-- Table structure for table `tb_smasuk`
--

CREATE TABLE `tb_smasuk` (
  `id_suratmasuk` int(11) NOT NULL,
  `kode_user` varchar(11) NOT NULL,
  `kode_surat` varchar(11) NOT NULL,
  `id_foto_surat` varchar(11) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `nomor_surat` varchar(20) NOT NULL,
  `asal_surat` varchar(20) NOT NULL,
  `lampiran` varchar(10) NOT NULL,
  `perihal` varchar(50) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `jam` varchar(20) NOT NULL,
  `tempat` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_smasuk`
--

INSERT INTO `tb_smasuk` (`id_suratmasuk`, `kode_user`, `kode_surat`, `id_foto_surat`, `tanggal_surat`, `nomor_surat`, `asal_surat`, `lampiran`, `perihal`, `tanggal_acara`, `jam`, `tempat`, `status`) VALUES
(1, '1', '005-Undang', 'S01', '2018-09-06', '01/HK/09/2018', 'Dinas Perikanan', '1', 'Undangan Mmbahas RAPERDA PERIKANAN', '2018-09-29', '19.00 Wita', 'Ruang Rapat Dinas Perikanan', 'Diproses'),
(2, '2', '005-Undang', 'S02', '2018-09-06', '02/HK/09/2018', 'Dinas Pendidikan', '-', 'Undangan Mmbahas Pendidikan SMP', '2018-09-29', '19.00 Wita', 'Ruang Rapat Dinas Pendidikan', 'Diproses');

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `kode_user` varchar(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jabatan` varchar(50) NOT NULL,
  `nip` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `levelUser` varchar(50) NOT NULL,
  `statusUser` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`kode_user`, `username`, `password`, `nama`, `jabatan`, `nip`, `email`, `levelUser`, `statusUser`) VALUES
('USR001', 'darmawan', 'sumberair', 'Made Darmawan', 'Kepala Dinas', '15101735', 'mddarmawan@gmail.com', 'Kadis', 'Aktif'),
('USR002', 'dayukalpika', 'badung', 'Ida Ayu Komang Kalpika', 'Kasubab Umum & Kepegawaian', '15101736', 'ayukalpika@gmail.com', 'Administrasi', 'Aktif'),
('USR003', 'darmawan13', 'password123', 'Darmawan', 'Kepala Seksi Sejarah', '34567879785675634', 'mddarma97@gmail.com', 'Bagian Umum', 'Aktif'),
('USR004', 'ahends', 'asdfgh', 'Agus', 'Kepala Seksi Adat dan Awig', '534656563', 'premawaisnawa@gmail.com', 'Kepala Dinas', 'Aktif'),
('USR005', 'adminmantap', '1234567', 'Dosen Mantep', 'Tenaga Kontrak', '324252525252', 'dinaskebudayaanbadung@gmail.com', 'Petugas Administrasi', 'Aktif');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  ADD PRIMARY KEY (`id_disposisi`);

--
-- Indexes for table `tb_skeluar`
--
ALTER TABLE `tb_skeluar`
  ADD PRIMARY KEY (`id_suratkeluar`);

--
-- Indexes for table `tb_smasuk`
--
ALTER TABLE `tb_smasuk`
  ADD PRIMARY KEY (`id_suratmasuk`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`kode_user`),
  ADD UNIQUE KEY `kode_user` (`kode_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_disposisi`
--
ALTER TABLE `tb_disposisi`
  MODIFY `id_disposisi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tb_skeluar`
--
ALTER TABLE `tb_skeluar`
  MODIFY `id_suratkeluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tb_smasuk`
--
ALTER TABLE `tb_smasuk`
  MODIFY `id_suratmasuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
