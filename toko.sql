-- phpMyAdmin SQL Dump
-- version 4.2.12deb2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 18, 2015 at 07:30 AM
-- Server version: 5.6.24-0ubuntu2
-- PHP Version: 5.6.4-4ubuntu6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `toko`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
`idbarang` int(11) NOT NULL,
  `idkategori` int(11) NOT NULL,
  `nmbarang` varchar(45) NOT NULL,
  `ketbarang` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `detilpenjualan`
--

CREATE TABLE IF NOT EXISTS `detilpenjualan` (
`iddetilpenjualan` int(11) NOT NULL,
  `idpenjualan` int(11) DEFAULT NULL,
  `idbarang` int(11) DEFAULT NULL,
  `jmlbarang` int(11) DEFAULT NULL,
  `hrgsatuan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `kategoribarang`
--

CREATE TABLE IF NOT EXISTS `kategoribarang` (
`idkategoribarang` int(11) NOT NULL,
  `kategoribarang` varchar(45) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `kategoribarang`
--

INSERT INTO `kategoribarang` (`idkategoribarang`, `kategoribarang`) VALUES
(1, 'Pakaian'),
(2, 'Elektronik'),
(3, 'Makanan'),
(4, 'Minuman'),
(5, 'Kebutuhan Rumah Tangga');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE IF NOT EXISTS `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1434534614),
('m130524_201442_init', 1434534616);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE IF NOT EXISTS `pelanggan` (
`idpelanggan` int(11) NOT NULL,
  `pelanggancol` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `penjualan`
--

CREATE TABLE IF NOT EXISTS `penjualan` (
`idpenjualan` int(11) NOT NULL,
  `tglpenjualan` datetime DEFAULT NULL,
  `jmlbarang` int(11) DEFAULT NULL,
  `ttlbayar` int(11) DEFAULT NULL,
  `idpelanggan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE IF NOT EXISTS `suplier` (
`idsuplier` int(11) NOT NULL,
  `nmsuplier` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'arif', 'ualZsxVaqPIjwEbE0N2GSi7uHSRZ6lU7', '$2y$13$0SnC3CB6FxTorwptC9KdG.Hs3mKfjurPp3YxkCDb0C7Hu3smA39vS', NULL, 'arif@gmail.com', 10, 1434534692, 1434534692);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
 ADD PRIMARY KEY (`idbarang`);

--
-- Indexes for table `detilpenjualan`
--
ALTER TABLE `detilpenjualan`
 ADD PRIMARY KEY (`iddetilpenjualan`), ADD KEY `fk_detilpenjualan_1_idx` (`idbarang`), ADD KEY `fk_detilpenjualan_2_idx` (`idpenjualan`);

--
-- Indexes for table `kategoribarang`
--
ALTER TABLE `kategoribarang`
 ADD PRIMARY KEY (`idkategoribarang`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
 ADD PRIMARY KEY (`version`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
 ADD PRIMARY KEY (`idpelanggan`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
 ADD PRIMARY KEY (`idpenjualan`), ADD KEY `fk_penjualan_1_idx` (`idpelanggan`);

--
-- Indexes for table `suplier`
--
ALTER TABLE `suplier`
 ADD PRIMARY KEY (`idsuplier`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
MODIFY `idbarang` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detilpenjualan`
--
ALTER TABLE `detilpenjualan`
MODIFY `iddetilpenjualan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `kategoribarang`
--
ALTER TABLE `kategoribarang`
MODIFY `idkategoribarang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
MODIFY `idpelanggan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
MODIFY `idpenjualan` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `suplier`
--
ALTER TABLE `suplier`
MODIFY `idsuplier` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
ADD CONSTRAINT `fk_barang_1` FOREIGN KEY (`idbarang`) REFERENCES `kategoribarang` (`idkategoribarang`);

--
-- Constraints for table `detilpenjualan`
--
ALTER TABLE `detilpenjualan`
ADD CONSTRAINT `fk_detilpenjualan_1` FOREIGN KEY (`idbarang`) REFERENCES `barang` (`idbarang`),
ADD CONSTRAINT `fk_detilpenjualan_2` FOREIGN KEY (`idpenjualan`) REFERENCES `penjualan` (`idpenjualan`);

--
-- Constraints for table `penjualan`
--
ALTER TABLE `penjualan`
ADD CONSTRAINT `fk_penjualan_1` FOREIGN KEY (`idpelanggan`) REFERENCES `pelanggan` (`idpelanggan`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
