-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2020 at 06:32 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbs_backend`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_costumer`
--

CREATE TABLE `tbl_costumer` (
  `kd_costumer` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_costumer`
--

INSERT INTO `tbl_costumer` (`kd_costumer`, `foto`) VALUES
(14, 'Agrinesia.png'),
(15, 'PT__Prima_Top_Boga.png'),
(16, 'Kafe_Betawi.png'),
(17, '71.jpg'),
(18, 'RSUD_Cibinong.jpg'),
(19, 'RS__BMC.png'),
(20, 'Dapur_Cokelat.jpg'),
(21, 'Geprek_Bensu.png'),
(22, 'Hotel_Savero.png'),
(23, 'Hotel_Permata.png'),
(24, 'Hotel_Whiz_Prime.png'),
(25, 'Hotel_Zest.png'),
(26, 'Hotel_DAnaya.png'),
(27, 'PT__Global_Dairi_Alami.png'),
(28, 'Tan_Ek_Tjoan_2.jpg'),
(29, 'Ayam_Asix.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jenis_produk`
--

CREATE TABLE `tbl_jenis_produk` (
  `kd_jenis` int(11) NOT NULL,
  `jenis_produk` varchar(50) NOT NULL,
  `kd_kategori` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jenis_produk`
--

INSERT INTO `tbl_jenis_produk` (`kd_jenis`, `jenis_produk`, `kd_kategori`) VALUES
(10, 'Papper Core Brown Craft', 4),
(11, 'Papper Core White Craft', 4),
(12, 'Papper Core Non-Craft', 4),
(13, 'Papper Core Celengan', 4),
(14, 'Papper Core Mill Core (PMC)', 4),
(15, 'Seamles Coated Core', 4),
(16, 'Seamles Non-Coated Core', 4),
(17, 'Honeycomb', 5),
(18, 'Karton Box', 6),
(19, 'Layer Bundar', 6),
(20, 'Paper Pallet', 7),
(21, 'Edge Protector', 8);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kategori`
--

CREATE TABLE `tbl_kategori` (
  `kd_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kategori`
--

INSERT INTO `tbl_kategori` (`kd_kategori`, `nama_kategori`) VALUES
(4, 'Papper Core'),
(5, 'Honeycomb'),
(6, 'Karton'),
(7, 'Papper Pallet'),
(8, 'Edge Protector');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_principal`
--

CREATE TABLE `tbl_principal` (
  `kd_principal` int(11) NOT NULL,
  `foto` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produk`
--

CREATE TABLE `tbl_produk` (
  `kd_produk` int(11) NOT NULL,
  `nama_produk` text NOT NULL,
  `foto` text NOT NULL,
  `keterangan` text NOT NULL,
  `kd_jenis_produk` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_quotation`
--

CREATE TABLE `tbl_quotation` (
  `id` int(11) NOT NULL,
  `nama` text NOT NULL,
  `perusahaan` text NOT NULL,
  `email` text NOT NULL,
  `number` int(11) NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_quotation`
--

INSERT INTO `tbl_quotation` (`id`, `nama`, `perusahaan`, `email`, `number`, `subject`, `message`) VALUES
(70, 'Bagus Suhendri', 'asdasdas', 'bagussuhendri19@gmail.com', 8888888, 'asdasdas', 'j');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slide`
--

CREATE TABLE `tbl_slide` (
  `kd_slide` int(11) NOT NULL,
  `foto` text NOT NULL,
  `judul` text NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slide`
--

INSERT INTO `tbl_slide` (`kd_slide`, `foto`, `judul`, `deskripsi`) VALUES
(4, '3.jpg', 'A', '\r\n									'),
(5, '4.jpg', 'A', '\r\n									'),
(6, '5.jpg', 'Selamat Datang BOR', 'Jaman Now&nbsp;');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `kd_user` int(11) NOT NULL,
  `username` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `foto` text NOT NULL,
  `acc_lvl` varchar(30) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`kd_user`, `username`, `password`, `foto`, `acc_lvl`, `is_active`) VALUES
(1, 'Admin', 'silarisfood', 'download.png', 'admin', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_costumer`
--
ALTER TABLE `tbl_costumer`
  ADD PRIMARY KEY (`kd_costumer`);

--
-- Indexes for table `tbl_jenis_produk`
--
ALTER TABLE `tbl_jenis_produk`
  ADD PRIMARY KEY (`kd_jenis`);

--
-- Indexes for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  ADD PRIMARY KEY (`kd_kategori`);

--
-- Indexes for table `tbl_principal`
--
ALTER TABLE `tbl_principal`
  ADD PRIMARY KEY (`kd_principal`);

--
-- Indexes for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD PRIMARY KEY (`kd_produk`),
  ADD KEY `kd_jenis_produk` (`kd_jenis_produk`);

--
-- Indexes for table `tbl_quotation`
--
ALTER TABLE `tbl_quotation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  ADD PRIMARY KEY (`kd_slide`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`kd_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_costumer`
--
ALTER TABLE `tbl_costumer`
  MODIFY `kd_costumer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tbl_jenis_produk`
--
ALTER TABLE `tbl_jenis_produk`
  MODIFY `kd_jenis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tbl_kategori`
--
ALTER TABLE `tbl_kategori`
  MODIFY `kd_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_principal`
--
ALTER TABLE `tbl_principal`
  MODIFY `kd_principal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  MODIFY `kd_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `tbl_quotation`
--
ALTER TABLE `tbl_quotation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `tbl_slide`
--
ALTER TABLE `tbl_slide`
  MODIFY `kd_slide` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_produk`
--
ALTER TABLE `tbl_produk`
  ADD CONSTRAINT `tbl_produk_ibfk_1` FOREIGN KEY (`kd_jenis_produk`) REFERENCES `tbl_jenis_produk` (`kd_jenis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
