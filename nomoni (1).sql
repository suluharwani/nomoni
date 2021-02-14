-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2018 at 11:47 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 7.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nomoni`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `level` int(1) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `hp` varchar(20) NOT NULL,
  `hp2` varchar(20) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `gender` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `level`, `email`, `password`, `nama`, `hp`, `hp2`, `alamat`, `gender`) VALUES
(1, 1, 'suluh@mail.com', 'ddcf8b411a91596292de0ef34cff2ac6', 'Suluh Arwani', '089685032675', '081390942209', 'Yogyakarta', 1),
(2, 2, 'arwani@mail.com', '19ac918c05ae511a2293cf4f804eddde', 'Arwani', '089685032675', '081390942209', 'Yogyakarta', 1),
(6, 2, 'suluharwani007@gmail.com', 'ec0e2603172c73a8b644bb9456c1ff6e', 'batman', '111', '1115', 'gotham', 1);

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE `peserta` (
  `id` int(11) NOT NULL,
  `nomor_identitas` varchar(255) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nama_nbib` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `jenis_kelamin` int(1) NOT NULL,
  `gol_darah` int(1) NOT NULL,
  `tempat_lahir` varchar(255) NOT NULL,
  `alamat` text NOT NULL,
  `kota` varchar(255) NOT NULL,
  `provinsi` varchar(255) NOT NULL,
  `kategori_lomba` int(11) NOT NULL,
  `hp1` varchar(50) NOT NULL,
  `hp2` varchar(50) NOT NULL,
  `riwayat_penyakit` varchar(255) NOT NULL,
  `komunitas` varchar(255) NOT NULL,
  `prediksi_waktu` datetime NOT NULL,
  `kode_unik` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nomor_identitas`, `nama_lengkap`, `nama_nbib`, `email`, `jenis_kelamin`, `gol_darah`, `tempat_lahir`, `alamat`, `kota`, `provinsi`, `kategori_lomba`, `hp1`, `hp2`, `riwayat_penyakit`, `komunitas`, `prediksi_waktu`, `kode_unik`) VALUES
(1, '1234567890', 'Suluh Arwani', '58154', 'suluharwani007@gmail.com', 1, 2, 'Grobogan', 'Grobogan', 'Klambu', 'Jawa Teengah', 1, '0896801545', '085253452154', 'flu', 'komppes', '2018-06-06 10:21:21', '562548718465');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `peserta`
--
ALTER TABLE `peserta`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_unik` (`kode_unik`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `peserta`
--
ALTER TABLE `peserta`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
