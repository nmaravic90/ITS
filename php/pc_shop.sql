-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 24, 2015 at 06:16 PM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pc_shop`
--
CREATE DATABASE IF NOT EXISTS `pc_shop` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pc_shop`;

-- --------------------------------------------------------

--
-- Table structure for table `akcije`
--

CREATE TABLE IF NOT EXISTS `akcije` (
  `id` int(11) NOT NULL,
  `slika` varchar(100) NOT NULL,
  `opis` varchar(100) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `akcije`
--

INSERT INTO `akcije` (`id`, `slika`, `opis`, `cena`) VALUES
(1, 'images/racunari/01.png', '*Intel Core i5\r\n*Asus M5A97\r\n*GeForce GTX750\r\n*Corsair  4GB\r\n', 500),
(2, 'images/racunari/10.png', '*Intel Core i3\r\n*Asus 5A\r\n*GeForce GT250\r\n*Corsair  2GB\r\n\r\n', 450),
(3, 'images/racunari/12.png', '*Intel Core i7\n*Asus M5A97\n*GeForce GTX750\n*Corsair  2x2GB\n', 800),
(4, 'images/racunari/16.png', '*Intel Core i3\n*Asus 5A\n*GeForce GT250\n*Corsair  2GB\n\n', 450),
(5, 'images/racunari/15.png', '*Intel 3.2GHz\n*2GB Ram\n*500 GB HDD\n*Asus GH721\n\n', 630),
(10, 'images/racunari/10.png', '*AMD FX-6300 *Gigabyte GA *AMD Radeon 5450 *Kingstron - 8GB', 450);

-- --------------------------------------------------------

--
-- Table structure for table `box`
--

CREATE TABLE IF NOT EXISTS `box` (
  `id` int(11) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `box`
--

INSERT INTO `box` (`id`, `naziv`, `cena`) VALUES
(1, 'Cooler Master 690 III', 40),
(2, 'Cooler Master Elite 330U', 46),
(3, 'Fractal Design R5 Titan', 50),
(4, 'Fractal Design R5', 40);

-- --------------------------------------------------------

--
-- Table structure for table `cpu`
--

CREATE TABLE IF NOT EXISTS `cpu` (
  `id` int(11) NOT NULL,
  `naziv` varchar(50) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cpu`
--

INSERT INTO `cpu` (`id`, `naziv`, `cena`) VALUES
(1, 'Intel Core i5-4460', 50),
(2, 'Intel Core i7-4790K', 100),
(4, 'Intel Core i5-4690K', 60),
(5, 'AMD FX-6300', 60),
(6, 'AMD A4-7300', 30),
(7, 'AMD A6-6400K', 100);

-- --------------------------------------------------------

--
-- Table structure for table `gcard`
--

CREATE TABLE IF NOT EXISTS `gcard` (
  `id` int(11) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gcard`
--

INSERT INTO `gcard` (`id`, `naziv`, `cena`) VALUES
(1, 'GeForce GTX750 - 1GB', 130),
(2, 'AMD Radeon 5450 - 1GB', 40),
(3, 'AMD Radeon R5 230 - 512MB', 40),
(4, 'GeForce GT210 - 512MB', 45);

-- --------------------------------------------------------

--
-- Table structure for table `hard`
--

CREATE TABLE IF NOT EXISTS `hard` (
  `id` int(11) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hard`
--

INSERT INTO `hard` (`id`, `naziv`, `cena`) VALUES
(1, 'HDD SATA3 7200 1TB', 60),
(2, 'HDD SATA3 7200 500GB ', 100);

-- --------------------------------------------------------

--
-- Table structure for table `korpa`
--

CREATE TABLE IF NOT EXISTS `korpa` (
  `id` int(11) NOT NULL,
  `slika` varchar(100) NOT NULL,
  `opis` varchar(100) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `id` int(11) NOT NULL,
  `ime` varchar(20) NOT NULL,
  `prezime` varchar(20) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `ime`, `prezime`, `username`, `pass`) VALUES
(1, 'nikola', 'maravic', 'admin', 'admin'),
(2, 'pera', 'peric', 'pera', 'pera'),
(12, 'ana', 'peric', 'ana', 'ana');

-- --------------------------------------------------------

--
-- Table structure for table `mboard`
--

CREATE TABLE IF NOT EXISTS `mboard` (
  `id` int(11) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mboard`
--

INSERT INTO `mboard` (`id`, `naziv`, `cena`) VALUES
(1, 'Gigabyte GA-970A-DS3P', 80),
(2, 'Gigabyte GA-F2A68HM-S1', 50),
(4, 'Asus M5A97 R2.0', 100),
(5, 'Asus H81M-K', 60);

-- --------------------------------------------------------

--
-- Table structure for table `napon`
--

CREATE TABLE IF NOT EXISTS `napon` (
  `id` int(11) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `napon`
--

INSERT INTO `napon` (`id`, `naziv`, `cena`) VALUES
(1, '500W Cooler Master ', 50),
(2, '600W Cooler Master ', 60),
(3, '500W LC Power', 30),
(4, '600W LC Power', 40);

-- --------------------------------------------------------

--
-- Table structure for table `racunari`
--

CREATE TABLE IF NOT EXISTS `racunari` (
  `id` int(11) NOT NULL,
  `slika` varchar(100) NOT NULL,
  `opis` varchar(100) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `racunari`
--

INSERT INTO `racunari` (`id`, `slika`, `opis`, `cena`) VALUES
(7, 'images/racunari/01.png', '*Intel Core i5 *Asus M5A97 *GeForce GTX750 *Corsair 4GB', 580),
(8, 'images/racunari/06.png', '*Intel Core i5\r\n*Asus M5A97\r\n*GeForce GTX750\r\n*Corsair  2GB\r\n', 600),
(9, 'images/racunari/18.png', '*Intel Core i7\n*Asus M5A97\n*GeForce GTX750\n*Corsair  2x2GB\n', 590),
(10, 'images/racunari/12.png', '*Intel Core i7\n*Asus M5A97\n*GeForce GTX750\n*Corsair  2x2GB\n\n', 800),
(11, 'images/racunari/17.png', '*AMD FX-9600\n*Gigabyte GA\n*AMD Radeon 5450\n*Corsair  2GB\n', 780),
(12, 'images/racunari/03.png', '*Intel Core i7\n*Gigabyte GTXi\n*AMD Radeon 600\n*Corsair  2x2GB\n', 1000),
(13, 'images/racunari/05.png', '*Intel Core i5\n*Asus F1\n*GeForce GTX950\n*Corsair  8GB\n', 600),
(15, 'images/racunari/16.png', '*AMD FX-6300\n*Gigabyte GA\n*AMD Radeon 5450\n*Kingstron - 8GB\n', 570),
(16, 'images/racunari/08.png', '*AMD FX-6300\n*ASUS MATX\n*AMD Radeon 3200\n*Kingstron - 2GB\n', 300);

-- --------------------------------------------------------

--
-- Table structure for table `ram`
--

CREATE TABLE IF NOT EXISTS `ram` (
  `id` int(11) NOT NULL,
  `naziv` varchar(30) NOT NULL,
  `cena` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ram`
--

INSERT INTO `ram` (`id`, `naziv`, `cena`) VALUES
(1, 'Kingstron - 4GB', 60),
(2, 'Kingstron - 8GB', 110),
(3, 'Corsair  2GB', 30),
(4, 'Corsair 2x2GB', 55);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akcije`
--
ALTER TABLE `akcije`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `box`
--
ALTER TABLE `box`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cpu`
--
ALTER TABLE `cpu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gcard`
--
ALTER TABLE `gcard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hard`
--
ALTER TABLE `hard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `korpa`
--
ALTER TABLE `korpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mboard`
--
ALTER TABLE `mboard`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `napon`
--
ALTER TABLE `napon`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `racunari`
--
ALTER TABLE `racunari`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ram`
--
ALTER TABLE `ram`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akcije`
--
ALTER TABLE `akcije`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `box`
--
ALTER TABLE `box`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `cpu`
--
ALTER TABLE `cpu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `gcard`
--
ALTER TABLE `gcard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hard`
--
ALTER TABLE `hard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `korpa`
--
ALTER TABLE `korpa`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `mboard`
--
ALTER TABLE `mboard`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `napon`
--
ALTER TABLE `napon`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `racunari`
--
ALTER TABLE `racunari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `ram`
--
ALTER TABLE `ram`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
