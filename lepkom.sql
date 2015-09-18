-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 18, 2015 at 01:59 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lepkom`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(3) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `npm` varchar(25) NOT NULL,
  `satu` varchar(25) NOT NULL,
  `dua` varchar(25) NOT NULL,
  `tiga` varchar(25) NOT NULL,
  `empat` varchar(25) NOT NULL,
  `waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama`, `npm`, `satu`, `dua`, `tiga`, `empat`, `waktu`) VALUES
(4, 'Rahmat Burhanudin', '58414797', 'DESKTOP', 'NETWORKING', 'VB.NET', 'CISCO', '2015-09-18 03:35:16'),
(5, 'Rahmat Burhanudin', '58414797', 'DESKTOP', 'NETWORKING', 'VB.NET', 'MIKROTIK', '2015-09-18 03:45:53'),
(6, 'Rahmat Burhanudin', '58414797', 'DESKTOP', 'NETWORKING', 'VB.NET', 'JAVA', '2015-09-18 03:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `dbms`
--

CREATE TABLE IF NOT EXISTS `dbms` (
  `id` int(1) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dbms`
--

INSERT INTO `dbms` (`id`, `nama`) VALUES
(1, 'ORACLE'),
(2, 'SQL SERVER');

-- --------------------------------------------------------

--
-- Table structure for table `desktop`
--

CREATE TABLE IF NOT EXISTS `desktop` (
  `id` int(1) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `desktop`
--

INSERT INTO `desktop` (`id`, `nama`) VALUES
(3, 'VB.NET'),
(4, 'JAVA');

-- --------------------------------------------------------

--
-- Table structure for table `erp`
--

CREATE TABLE IF NOT EXISTS `erp` (
  `id` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `erp`
--

INSERT INTO `erp` (`id`, `nama`) VALUES
(1, 'NAV'),
(2, 'ADEMPIERE');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE IF NOT EXISTS `mahasiswa` (
  `id` int(2) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `npm` varchar(30) NOT NULL,
  `satu` varchar(30) NOT NULL,
  `dua` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=40 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`id`, `nama`, `npm`, `satu`, `dua`) VALUES
(38, 'Rahmat Burhanudin', '58414797', 'desktop', 'networking'),
(39, 'Rahmat erp', '58414798', 'erp', 'server os');

-- --------------------------------------------------------

--
-- Table structure for table `networking`
--

CREATE TABLE IF NOT EXISTS `networking` (
  `no` int(1) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `networking`
--

INSERT INTO `networking` (`no`, `nama`) VALUES
(1, 'CISCO'),
(2, 'MIKROTIK');

-- --------------------------------------------------------

--
-- Table structure for table `server os`
--

CREATE TABLE IF NOT EXISTS `server os` (
  `id` int(1) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `server os`
--

INSERT INTO `server os` (`id`, `nama`) VALUES
(1, 'LINUX'),
(2, 'WINDOWS SERVER');

-- --------------------------------------------------------

--
-- Table structure for table `web`
--

CREATE TABLE IF NOT EXISTS `web` (
  `id` int(1) NOT NULL,
  `nama` varchar(15) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `web`
--

INSERT INTO `web` (`id`, `nama`) VALUES
(1, 'J2EE'),
(2, 'C#');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dbms`
--
ALTER TABLE `dbms`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `desktop`
--
ALTER TABLE `desktop`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `erp`
--
ALTER TABLE `erp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `networking`
--
ALTER TABLE `networking`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `server os`
--
ALTER TABLE `server os`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web`
--
ALTER TABLE `web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `dbms`
--
ALTER TABLE `dbms`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `desktop`
--
ALTER TABLE `desktop`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `erp`
--
ALTER TABLE `erp`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id` int(2) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=40;
--
-- AUTO_INCREMENT for table `networking`
--
ALTER TABLE `networking`
  MODIFY `no` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `server os`
--
ALTER TABLE `server os`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `web`
--
ALTER TABLE `web`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
