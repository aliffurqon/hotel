-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 12, 2018 at 07:44 AM
-- Server version: 10.1.29-MariaDB
-- PHP Version: 7.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `finance_income`
--

CREATE TABLE `finance_income` (
  `id_finance_income` int(5) NOT NULL,
  `nomor_invoice` varchar(20) NOT NULL,
  `jenis_income` varchar(100) NOT NULL,
  `jumlah` int(20) NOT NULL,
  `tanggal_pembayaran` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `finance_income`
--

INSERT INTO `finance_income` (`id_finance_income`, `nomor_invoice`, `jenis_income`, `jumlah`, `tanggal_pembayaran`) VALUES
(1, '2', '', 0, '2018-12-20'),
(2, '2', '', 0, '2018-12-20'),
(3, '2', '', 0, '2018-12-20'),
(4, '2', '', 0, '2018-12-19'),
(5, '3', '', 0, '2018-12-13'),
(6, '2', '', 0, '2018-12-14'),
(7, '2', '', 0, '2018-12-14'),
(8, '2', '', 0, '2018-12-14'),
(9, '3', '', 0, '2018-12-14'),
(10, '2', '', 0, '2018-12-13');

-- --------------------------------------------------------

--
-- Table structure for table `kamar`
--

CREATE TABLE `kamar` (
  `id_kamar` int(3) NOT NULL,
  `nomor_kamar` int(3) NOT NULL,
  `id_kamar_tipe` int(3) NOT NULL,
  `max_dewasa` int(11) NOT NULL,
  `max_anak` int(11) NOT NULL,
  `status_kamar` varchar(20) NOT NULL DEFAULT 'TERSEDIA'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar`
--

INSERT INTO `kamar` (`id_kamar`, `nomor_kamar`, `id_kamar_tipe`, `max_dewasa`, `max_anak`, `status_kamar`) VALUES
(129, 102, 2, 2, 2, 'TERSEDIA'),
(130, 103, 3, 3, 3, 'TERSEDIA'),
(132, 104, 2, 2, 2, 'TIDAK TERSEDIA'),
(137, 102, 2, 2, 2, 'TIDAK TERSEDIA'),
(138, 123, 3, 3, 3, 'TIDAK TERSEDIA'),
(139, 101, 3, 3, 3, 'TIDAK TERSEDIA'),
(140, 150, 3, 2, 3, 'TIDAK TERSEDIA'),
(141, 108, 3, 3, 3, 'TERSEDIA');

-- --------------------------------------------------------

--
-- Table structure for table `kamar_tipe`
--

CREATE TABLE `kamar_tipe` (
  `id_kamar_tipe` int(3) NOT NULL,
  `nama_kamar_tipe` varchar(50) NOT NULL,
  `harga_malam` int(3) NOT NULL,
  `harga_orang` int(3) NOT NULL,
  `keterangan` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kamar_tipe`
--

INSERT INTO `kamar_tipe` (`id_kamar_tipe`, `nama_kamar_tipe`, `harga_malam`, `harga_orang`, `keterangan`) VALUES
(2, 'STANDART', 100000, 75000, '							fasilitas yang didapat \r\n1. bathub \r\n2. sarapan\r\n3. Peralatan mandi\r\n4. AC,pemanas air \r\n 																		'),
(3, 'SUPERIOR', 400000, 120000, 'fasilitas yang didapat \r\n1. bathub \r\n2. sarapan\r\n3. Peralatan mandi\r\n4. AC,pemanas  air ,kulkas\r\n5. Lunch\r\n6. SPA \r\n7. Souvenir hotel\r\n																																																															');

-- --------------------------------------------------------

--
-- Table structure for table `master`
--

CREATE TABLE `master` (
  `id_master` int(11) NOT NULL,
  `nama_user` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(59) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master`
--

INSERT INTO `master` (`id_master`, `nama_user`, `username`, `pass`, `level`) VALUES
(2453, 'Arfifa Rahman', 'rahman', '202cb962ac59075b964b07152d234b70', 'manajer'),
(13124, 'Alif Hidayatulloh', 'alif', '81dc9bdb52d04dc20036dbd8313ed055', 'admin'),
(13264, 'Krisnanda Dellspiro', 'RazorBeats', '8db9264228dc48fbf47535e888c02ae0', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tamu`
--

CREATE TABLE `tamu` (
  `id_tamu` int(3) NOT NULL,
  `prefix` varchar(5) NOT NULL,
  `nama_depan` varchar(100) NOT NULL,
  `nama_belakang` varchar(100) NOT NULL,
  `tipe_identitas` varchar(20) NOT NULL,
  `nomor_identitas` varchar(20) NOT NULL,
  `warga_negara` varchar(100) NOT NULL DEFAULT 'Indonesia',
  `alamat_jalan` text NOT NULL,
  `alamat_kabupaten` varchar(100) NOT NULL,
  `alamat_provinsi` varchar(100) NOT NULL,
  `nomor_telp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tamu`
--

INSERT INTO `tamu` (`id_tamu`, `prefix`, `nama_depan`, `nama_belakang`, `tipe_identitas`, `nomor_identitas`, `warga_negara`, `alamat_jalan`, `alamat_kabupaten`, `alamat_provinsi`, `nomor_telp`, `email`) VALUES
(5, 'Mr', 'arfifa', 'rahman', 'KTP', '5425323524', 'indonesia', 'rawa lumbu', 'bekasi', 'jawa barat', '085847487584', 'arfifarahman509@gmail.com'),
(6, 'Ms', 'veni', 'melankolbri', 'SIM', '12341241432', 'Indonesia', '								Jl. Pasir Putih D 							', 'Bekasi', 'Jawa Barat', '085847487584', 'venimelandri@gmail.com'),
(7, 'Mr', 'Bobby', 'Rakan', 'KTP', '19971213', 'Indonesia', 'Jalan Pasir Putih', 'Bekasi', 'Jawa Barat', '085701130884', 'bobby.rackan97@gmail.com'),
(8, 'Ms', 'Lalajo', 'Laura', 'KTP', '19961029', 'Indonesia', 'Pulo Gebang', 'Jakarta Timur', 'jawa barat', '087881200877', 'lalajo.laura@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_kamar`
--

CREATE TABLE `transaksi_kamar` (
  `id_transaksi_kamar` int(3) NOT NULL,
  `id_user` int(3) NOT NULL,
  `nomor_invoice` varchar(20) NOT NULL,
  `tanggal` date NOT NULL,
  `id_tamu` int(3) NOT NULL,
  `id_kamar` int(3) NOT NULL,
  `jumlah_dewasa` int(3) NOT NULL,
  `jumlah_anak` int(3) NOT NULL,
  `tanggal_checkin` date NOT NULL,
  `waktu_checkin` time NOT NULL,
  `tanggal_checkout` date NOT NULL,
  `waktu_checkout` time NOT NULL,
  `total_biaya_kamar` int(20) NOT NULL,
  `deposit` int(20) NOT NULL,
  `status` varchar(50) NOT NULL DEFAULT 'CHECK IN'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi_kamar`
--

INSERT INTO `transaksi_kamar` (`id_transaksi_kamar`, `id_user`, `nomor_invoice`, `tanggal`, `id_tamu`, `id_kamar`, `jumlah_dewasa`, `jumlah_anak`, `tanggal_checkin`, `waktu_checkin`, `tanggal_checkout`, `waktu_checkout`, `total_biaya_kamar`, `deposit`, `status`) VALUES
(57, 6, 'INV-20181212-89', '2012-12-18', 6, 138, 1, 1, '2018-12-12', '00:12:00', '2018-12-13', '00:12:00', 590000, 100000, 'CHECK IN'),
(64, 8, 'INV-20181212-76', '2012-12-18', 7, 139, 1, 1, '2018-12-13', '12:09:00', '2018-12-14', '12:09:00', 590000, 100000, 'CHECK IN'),
(65, 8, 'INV-20181212-59', '2018-12-12', 7, 137, 1, 1, '2018-12-12', '12:19:00', '2018-12-13', '12:19:00', 202500, 50000, 'CHECK IN'),
(66, 8, 'INV-20181212-73', '2018-12-12', 5, 132, 1, 0, '2018-12-12', '12:20:00', '2018-12-13', '12:20:00', 170000, 50000, 'CHECK IN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `finance_income`
--
ALTER TABLE `finance_income`
  ADD PRIMARY KEY (`id_finance_income`);

--
-- Indexes for table `kamar`
--
ALTER TABLE `kamar`
  ADD PRIMARY KEY (`id_kamar`);

--
-- Indexes for table `kamar_tipe`
--
ALTER TABLE `kamar_tipe`
  ADD PRIMARY KEY (`id_kamar_tipe`);

--
-- Indexes for table `master`
--
ALTER TABLE `master`
  ADD PRIMARY KEY (`id_master`);

--
-- Indexes for table `tamu`
--
ALTER TABLE `tamu`
  ADD PRIMARY KEY (`id_tamu`);

--
-- Indexes for table `transaksi_kamar`
--
ALTER TABLE `transaksi_kamar`
  ADD PRIMARY KEY (`id_transaksi_kamar`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `finance_income`
--
ALTER TABLE `finance_income`
  MODIFY `id_finance_income` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `kamar`
--
ALTER TABLE `kamar`
  MODIFY `id_kamar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `kamar_tipe`
--
ALTER TABLE `kamar_tipe`
  MODIFY `id_kamar_tipe` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `master`
--
ALTER TABLE `master`
  MODIFY `id_master` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13265;

--
-- AUTO_INCREMENT for table `tamu`
--
ALTER TABLE `tamu`
  MODIFY `id_tamu` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `transaksi_kamar`
--
ALTER TABLE `transaksi_kamar`
  MODIFY `id_transaksi_kamar` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
