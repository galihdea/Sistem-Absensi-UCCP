-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 21, 2019 at 04:28 AM
-- Server version: 5.7.19
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sauccp`
--

-- --------------------------------------------------------

--
-- Table structure for table `absensi`
--

CREATE TABLE `absensi` (
  `id_absensi` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `status_absensi` varchar(191) NOT NULL,
  `status_acc` varchar(191) NOT NULL,
  `keterangan` varchar(191) DEFAULT NULL,
  `tanggal` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `ip_address` varchar(15) DEFAULT NULL,
  `dibaca` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `absensi`
--

INSERT INTO `absensi` (`id_absensi`, `id_user`, `status_absensi`, `status_acc`, `keterangan`, `tanggal`, `ip_address`, `dibaca`) VALUES
(1, 5, 'masuk', 'Approved', '. . .', '0000-00-00 00:00:00', NULL, 'dibaca'),
(3, 6, 'cuti', 'Decline', 'mager', '0000-00-00 00:00:00', NULL, 'dibaca'),
(5, 5, 'izin', 'Decline', 'k', '2019-01-17 03:20:26', NULL, ''),
(14, 1, 'cuti', 'Decline', '2019-01-11 - 2019-01-26', '2019-01-17 05:10:21', '::1', ''),
(15, 1, 'sakit', 'Approved', 'Mager', '2019-01-17 05:13:24', '::1', ''),
(18, 6, 'izin', 'Decline', 'Mager Juga', '2019-01-21 03:04:38', '::1', 'belum'),
(19, 6, 'izin', 'Decline', 'Males gan', '2019-01-21 03:53:17', '::1', 'belum'),
(20, 6, 'cuti', 'Pending', '2019-01-21 - 2019-03-21', '2019-01-21 03:54:11', '::1', 'belum'),
(21, 1, 'masuk', 'Approved', NULL, '2019-01-21 04:18:41', '10.101.47.167', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `user_admin` varchar(191) NOT NULL,
  `nama_admin` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `user_admin`, `nama_admin`) VALUES
(1, 'admin1', 'DeX');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) NOT NULL,
  `user_pegawai` varchar(191) NOT NULL,
  `nama_pegawai` varchar(191) NOT NULL,
  `divisi_pegawai` varchar(191) NOT NULL,
  `jabatan_pegawai` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `user_pegawai`, `nama_pegawai`, `divisi_pegawai`, `jabatan_pegawai`) VALUES
(1, '24010314130080', 'Galih Dea Pratama', 'IT', 'Intern'),
(2, 'admin2', 'DeX999', 'C', 'Intern'),
(3, '24010314130079', 'Deoxys', 'B', 'Intern');

-- --------------------------------------------------------

--
-- Table structure for table `super_admin`
--

CREATE TABLE `super_admin` (
  `id_sadmin` int(11) NOT NULL,
  `user_sadmin` varchar(191) NOT NULL,
  `nama_sadmin` varchar(191) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `super_admin`
--

INSERT INTO `super_admin` (`id_sadmin`, `user_sadmin`, `nama_sadmin`) VALUES
(1, 'presdir', 'Bu Fitri');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `status` varchar(191) NOT NULL,
  `id_luar` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `status`, `id_luar`) VALUES
(1, '24010314130080', 'adb24d1db374242c77182e77036cc3fd', 'Pegawai', 1),
(2, 'presdir', '1c8a462f469d40485156325672b6e76d', 'Super Admin', 1),
(4, 'admin1', 'e00cf25ad42683b3df678c61f42c6bda', 'Admin', 1),
(5, 'admin2', 'c84258e9c39059a89ab77d846ddab909', 'Pegawai', 2),
(6, '24010314130079', 'abce7884af85af7b7c19ba304b5b8ead', 'Pegawai', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `absensi`
--
ALTER TABLE `absensi`
  ADD PRIMARY KEY (`id_absensi`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `super_admin`
--
ALTER TABLE `super_admin`
  ADD PRIMARY KEY (`id_sadmin`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `absensi`
--
ALTER TABLE `absensi`
  MODIFY `id_absensi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `super_admin`
--
ALTER TABLE `super_admin`
  MODIFY `id_sadmin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
