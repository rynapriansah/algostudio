-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 06, 2020 at 10:49 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `algostudio`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualan`
--

CREATE TABLE `detail_penjualan` (
  `id_details` int(15) NOT NULL,
  `id_penjualan` int(15) NOT NULL,
  `id_brg` int(15) NOT NULL,
  `jumlah` varchar(100) NOT NULL,
  `harga_satuan` varchar(100) NOT NULL,
  `harga_total` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_penjualan`
--

INSERT INTO `detail_penjualan` (`id_details`, `id_penjualan`, `id_brg`, `jumlah`, `harga_satuan`, `harga_total`) VALUES
(1, 1, 1, '3', '10000000', '30000000'),
(2, 2, 2, '2', '3000000', '6000000'),
(3, 3, 5, '4', '13000000', '40000000'),
(4, 4, 6, '2', '2000000', '3000000'),
(5, 5, 7, '2', '3000000', '4000000'),
(6, 6, 8, '3', '5000000', '12000000'),
(7, 7, 9, '2', '5000000', '8000000'),
(8, 8, 10, '2', '6000000', '10000000'),
(9, 9, 11, '3', '7000000', '18000000'),
(10, 10, 12, '2', '9000000', '16000000');

-- --------------------------------------------------------

--
-- Table structure for table `master_brg`
--

CREATE TABLE `master_brg` (
  `id_brg` int(15) NOT NULL,
  `nama_brg` varchar(100) NOT NULL,
  `harga_jual` varchar(100) NOT NULL,
  `harga_beli` varchar(100) NOT NULL,
  `stok` varchar(100) NOT NULL,
  `kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `master_brg`
--

INSERT INTO `master_brg` (`id_brg`, `nama_brg`, `harga_jual`, `harga_beli`, `stok`, `kategori`) VALUES
(1, 'iphone X ', '12000000', '10000000', '3', 'Handphone'),
(2, 'acer  ES 14', '6000000', '3000000', '2', 'Laptop'),
(5, 'Macbook 13 pro', '13000000', '10000000', '4', 'Laptop'),
(6, 'Xiomi X', '2000000', '1500000', '2', 'Handphone'),
(7, 'Iphone 5', '3000000', '2000000', '2', 'Handpone'),
(8, 'iphone 6', '5000000', '4000000', '3', 'Handphone'),
(9, 'iphone 7', '5000000', '4000000', '2', 'Handphone'),
(10, 'Iphone 8', '6000000', '5000000', '2', 'Handphone'),
(11, 'Iphone 9', '7000000', '6000000', '3', 'Handphone'),
(12, 'Iphone X', '9000000', '8000000', '2', 'Handphone');

-- --------------------------------------------------------

--
-- Table structure for table `tb_penjualan`
--

CREATE TABLE `tb_penjualan` (
  `id_penjualan` int(15) NOT NULL,
  `tgl_jual` date NOT NULL,
  `nama_konsumen` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_penjualan`
--

INSERT INTO `tb_penjualan` (`id_penjualan`, `tgl_jual`, `nama_konsumen`, `alamat`) VALUES
(1, '2020-08-06', 'Ryanapsh', 'Jambi'),
(2, '2020-08-07', 'zoro', 'weast blue'),
(3, '2020-08-01', 'Nami', 'Jepang'),
(4, '2020-08-02', 'Sanji', 'Jepang'),
(5, '2020-08-03', 'Luffy', 'Jepang'),
(6, '2020-08-04', 'Usop', 'Jepang'),
(7, '2020-08-05', 'Franky', 'Jepang'),
(8, '2020-08-08', 'Brook', 'Jepang'),
(9, '2020-08-09', 'Robbin', 'Jepang'),
(10, '2020-08-09', 'Jinbe', 'Jepang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  ADD PRIMARY KEY (`id_details`);

--
-- Indexes for table `master_brg`
--
ALTER TABLE `master_brg`
  ADD PRIMARY KEY (`id_brg`);

--
-- Indexes for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  ADD PRIMARY KEY (`id_penjualan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_penjualan`
--
ALTER TABLE `detail_penjualan`
  MODIFY `id_details` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `master_brg`
--
ALTER TABLE `master_brg`
  MODIFY `id_brg` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tb_penjualan`
--
ALTER TABLE `tb_penjualan`
  MODIFY `id_penjualan` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
