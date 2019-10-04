-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 30, 2019 at 09:54 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_tamu`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_tamu`
--

CREATE TABLE `data_tamu` (
  `id` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `alamat` varchar(256) NOT NULL,
  `no_telp` char(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_tamu`
--

INSERT INTO `data_tamu` (`id`, `nama`, `alamat`, `no_telp`) VALUES
(1, 'Alfa', 'Plendungan', '082260757'),
(2, 'Alfa', 'Plendungan', '082260757'),
(3, 'Alfa', 'Plendungan', '082260757'),
(6, 'ASu', 'sdfdd', '678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_tamu`
--
ALTER TABLE `data_tamu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_tamu`
--
ALTER TABLE `data_tamu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
