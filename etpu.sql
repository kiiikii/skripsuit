-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 14, 2020 at 05:48 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.3.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `etpu`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `idad` int(11) NOT NULL,
  `namauser` varchar(100) NOT NULL,
  `sandiuser` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`idad`, `namauser`, `sandiuser`) VALUES
(1, 'admin', '12345');

-- --------------------------------------------------------

--
-- Table structure for table `kecamatan`
--

CREATE TABLE `kecamatan` (
  `idkec` int(11) NOT NULL,
  `kode` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `gjkec` varchar(100) NOT NULL,
  `warkec` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kecamatan`
--

INSERT INTO `kecamatan` (`idkec`, `kode`, `nama`, `gjkec`, `warkec`) VALUES
(1, '33.72.05', 'Banjarsari', '22020420090231.geojson', '#80ff00'),
(2, '33.72.04', 'Jebres', '53310320022202.geojson', '#555555'),
(3, '33.72.01', 'Laweyan', '19310320022142.geojson', '#00ffff'),
(4, '33.72.03', 'Pasar Kliwon', '72310320022240.geojson', '#d63c3c'),
(5, '33.72.02', 'Serengan', '83010420085442.geojson', '#e0de48');

-- --------------------------------------------------------

--
-- Table structure for table `kuburan`
--

CREATE TABLE `kuburan` (
  `idkub` int(11) NOT NULL,
  `idkec` int(11) NOT NULL,
  `namakub` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `lat` float(9,6) NOT NULL,
  `lng` float(9,6) NOT NULL,
  `deskripsi` text NOT NULL,
  `marker` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kuburan`
--

INSERT INTO `kuburan` (`idkub`, `idkec`, `namakub`, `alamat`, `lat`, `lng`, `deskripsi`, `marker`) VALUES
(1, 1, 'TPU Bonoloyo', 'Jl. Sumpah Pemuda, Kadipiro, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57136', -7.538867, 110.824203, '<p>TPU Bonoloyo merupakan salah satu TPU terbesar di Surakarta yang lokasinya berada di Kadipiro berdekatan dengan Kampus UNISRI dan kantor Kecamatan Banjarsari</p>', ''),
(2, 1, 'Astana Bibis Luhur', ' Jl. Walanda Maramis No.56, Nusukan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57135', -7.547939, 110.831863, '<p><span style=\"color: rgb(51, 51, 51); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Makam Kerabat Mangkunegara</span><br style=\"color: rgb(51, 51, 51); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\"><span style=\"color: rgb(51, 51, 51); font-family: \"Helvetica Neue\", Helvetica, Arial, sans-serif; font-size: 14px;\">Makam Kyai Setroketu dan kerabat Mangkunegara lainnya.</span><br></p>', ''),
(3, 1, 'Astana Oetara', 'Nusukan, Kec. Banjarsari, Kota Surakarta, Jawa Tengah 57135', -7.548031, 110.821365, '<p>nothing to display</p>', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`idad`);

--
-- Indexes for table `kecamatan`
--
ALTER TABLE `kecamatan`
  ADD PRIMARY KEY (`idkec`);

--
-- Indexes for table `kuburan`
--
ALTER TABLE `kuburan`
  ADD PRIMARY KEY (`idkub`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `idad` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kecamatan`
--
ALTER TABLE `kecamatan`
  MODIFY `idkec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `kuburan`
--
ALTER TABLE `kuburan`
  MODIFY `idkub` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
