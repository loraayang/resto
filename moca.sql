-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 02, 2023 at 01:55 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `moca`
--

-- --------------------------------------------------------

--
-- Table structure for table `kasir`
--

CREATE TABLE `kasir` (
  `id_kasir` int(15) NOT NULL,
  `nama_kasir` varchar(30) NOT NULL,
  `shift` enum('Pagi','Siang','Malam') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kasir`
--

INSERT INTO `kasir` (`id_kasir`, `nama_kasir`, `shift`) VALUES
(1, 'opi', 'Malam');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) NOT NULL,
  `level` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `level`) VALUES
(1, 'admin'),
(2, 'manager'),
(3, 'kasir\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id_menu` int(11) NOT NULL,
  `nama_menu` varchar(99) NOT NULL,
  `jenis_menu` varchar(99) NOT NULL,
  `harga_menu` varchar(99) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `tanggal` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id_menu`, `nama_menu`, `jenis_menu`, `harga_menu`, `gambar`, `tanggal`) VALUES
(1, 'Kopi Liong', 'Coffe', '5000', 'KOPI REMPAH.jpeg', '2023-03-02'),
(2, 'TEH BASI', 'Non Coffe', '5000', 'Tea.jpeg', '2023-03-02');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `id_kasir` int(6) NOT NULL,
  `nama_kasir` varchar(30) NOT NULL,
  `waktu_transaksi` datetime NOT NULL,
  `id_pesanan` int(6) NOT NULL,
  `nama_pesanan` varchar(99) NOT NULL,
  `harga_pemesanan` int(11) NOT NULL,
  `jumlah_pemesanan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaksi_2`
--

CREATE TABLE `transaksi_2` (
  `id_meja` int(11) NOT NULL,
  `tanggal` date NOT NULL,
  `harga` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `no_meja` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi_2`
--

INSERT INTO `transaksi_2` (`id_meja`, `tanggal`, `harga`, `qty`, `no_meja`) VALUES
(8, '2023-02-15', 100000, 4, '09'),
(9, '2023-02-15', 100000, 4, 'A09'),
(10, '2023-02-21', 200, 4, '08'),
(11, '0000-00-00', 150000, 4, '08');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `nama` varchar(32) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `alamat`, `no_hp`, `password`, `level`) VALUES
(1, 'claudy', 'claudy anaya', 'jln. raya bogor', '081245678909', 'claudy123', 'Admin'),
(2, 'meta', 'meta fora', 'jln. jalan', '081232149980', 'meta123', 'Kasir'),
(3, 'fora', 'fora anatasya', 'jln. rambutan', '089132445788', 'fora123', 'Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kasir`
--
ALTER TABLE `kasir`
  ADD PRIMARY KEY (`id_kasir`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `transaksi_2`
--
ALTER TABLE `transaksi_2`
  ADD PRIMARY KEY (`id_meja`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id_menu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transaksi_2`
--
ALTER TABLE `transaksi_2`
  MODIFY `id_meja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
