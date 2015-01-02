-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2015 at 01:04 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lokasi`
--

-- --------------------------------------------------------

--
-- Table structure for table `lokasi`
--

CREATE TABLE IF NOT EXISTS `lokasi` (
  `idlokasi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(100) DEFAULT NULL,
  `lat` varchar(50) DEFAULT NULL,
  `lng` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`idlokasi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `lokasi`
--

INSERT INTO `lokasi` (`idlokasi`, `nama`, `lat`, `lng`) VALUES
(1, 'Universitas Sebelas Maret Surakarta', '-7.5561', '110.8317'),
(2, 'SPBU Pasar Kliwon', '-7.586234', '110.834028'),
(3, 'SPBU Serengan', '-7.580368', '110.815149'),
(4, 'SPBU Bhayangkara', '-7.573744', '110.81021'),
(5, 'SPBU Sebelum Jongke', '-7.571043', '110.801261'),
(6, 'SPBU Setelah Jongke', '-7.568149', '110.788981'),
(7, 'SPBU Manahan', '-7.554116', '110.798659'),
(8, 'SPBU Dekat Saba Buana', '-7.545539', '110.807606'),
(9, 'SPBU Banyuagung', '-7.541817', '110.815645'),
(10, 'SPBU Mojosongo', '-7.543845', '110.840098'),
(11, 'SPBU Depan SMA 5', '-7.550622', '110.829888'),
(12, 'SPBU Sekarpace', '-7.559439', '110.848787'),
(13, 'SPBU Pucangsawit', '-7.569422', '110.851913'),
(14, 'SPBU Balapan', '-7.557285', '110.823425'),
(15, 'SPBU Gondang', '-7.555021', '110.811533'),
(16, 'SPBU Jurug', '-7.56485', '110.857867'),
(17, 'SPBU Sekarpace', '-7.559439', '110.848787');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
