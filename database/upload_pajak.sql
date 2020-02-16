-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 16, 2020 at 01:08 PM
-- Server version: 5.7.26-log
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ranitcom_upload_pajak`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_pajak`
--

CREATE TABLE `tb_pajak` (
  `id` int(15) NOT NULL,
  `no_struk` varchar(50) DEFAULT NULL,
  `no_register` varchar(50) DEFAULT NULL,
  `tanggal` datetime DEFAULT NULL,
  `kasir` varchar(50) DEFAULT NULL,
  `no_kunjungan` varchar(50) DEFAULT NULL,
  `customer` varchar(255) DEFAULT NULL,
  `item` text,
  `qty` int(25) DEFAULT '0',
  `harga` double DEFAULT '0',
  `jumlah` double DEFAULT '0',
  `total_qty` int(15) DEFAULT '0',
  `total_bayar` double DEFAULT '0',
  `promo` double DEFAULT '0',
  `saldo_konsumen` double DEFAULT '0',
  `retur_penjualan` double DEFAULT '0',
  `piutang` double DEFAULT '0',
  `kembalian` double DEFAULT '0',
  `sisa_saldo` double DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_pajak`
--
ALTER TABLE `tb_pajak`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_pajak`
--
ALTER TABLE `tb_pajak`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
