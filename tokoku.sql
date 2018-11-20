-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2018 at 09:13 AM
-- Server version: 10.1.24-MariaDB
-- PHP Version: 7.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tokoku`
--

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id_produk` int(11) NOT NULL,
  `nama_produk` varchar(50) NOT NULL,
  `harga_produk` int(11) NOT NULL,
  `berat` int(11) NOT NULL,
  `foto_produk` varchar(100) NOT NULL,
  `deskripsi_produk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id_produk`, `nama_produk`, `harga_produk`, `berat`, `foto_produk`, `deskripsi_produk`) VALUES
(1, 'Gilda Dress Zoya', 200000, 2000, '3.jpg', 'Gamis dengan bahan katun yang sangat nyaman digunakan'),
(2, 'Indira Tunik Setelan Zoya', 1359200, 2000, '4.jpg', 'Gamis yang best seller ini wajib kamu miliki'),
(3, 'Naladhipa Dress Setelan Zoya', 1359200, 1000, '5.jpg', ''),
(4, 'Rainfores Dress Zoya', 319200, 1000, '6.jpg', ''),
(5, 'Sembawang Dress Zoya', 367200, 1000, '7.jpg', ''),
(6, 'Shatia Dress Zoya', 959200, 1000, '8.jpg', ''),
(9, 'Dhuma Dress', 1699000, 1000, '12.jpg', ''),
(10, 'Elenos Dress', 367200, 1000, '13.jpg', ''),
(11, 'Kayani Dress', 199000, 1000, '14.jpg', ''),
(13, 'Mohan Dress', 489000, 1000, '16.jpg', ''),
(14, 'Shabir Dress', 367200, 1000, '17.jpg', ''),
(15, 'Zabet Dress', 459000, 1000, '18.jpg', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id_produk`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id_produk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
