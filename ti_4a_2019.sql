-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 22, 2019 at 10:58 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ti_4a_2019`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `number1` ()  BEGIN
SELECT
	pr.kd_prody,
	pr.nm_prody,
	jur.nm_jur
FROM
	jurusan jur,
	prody pr
WHERE
	jur.kd_jur = pr.kd_jur
	;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `number2` ()  BEGIN
SELECT
	ms.nim, ms.nama, ms.tgl_lahir, ms.agama, jur.nm_jur
FROM
	jurusan jur,
	mhs ms,
	prody pr
WHERE
	jur.kd_jur = pr.kd_jur
	AND
	pr.kd_prody = ms.kd_prody
	;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE `jurusan` (
  `kd_jur` char(2) NOT NULL,
  `nm_jur` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`kd_jur`, `nm_jur`) VALUES
('AP', 'Administration'),
('HC', 'Hacker'),
('IO', 'Internet of Thing'),
('PA', 'Pariwisata'),
('SC', 'Security Network'),
('TI', 'Teknologi Informasi');

-- --------------------------------------------------------

--
-- Table structure for table `mhs`
--

CREATE TABLE `mhs` (
  `nim` varchar(8) NOT NULL,
  `nama` varchar(25) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(12) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kd_prody` char(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mhs`
--

INSERT INTO `mhs` (`nim`, `nama`, `tgl_lahir`, `agama`, `alamat`, `kd_prody`) VALUES
('16610231', 'Yahanana Yahanana', '2019-03-21', 'ISLAM', 'Merkurius', 'PAP'),
('16910231', 'Systemo Arif Magento', '2019-03-21', 'ISLAM', 'Matahari', 'TI'),
('17591231', 'YugiOh', '2019-03-21', 'ISLAM', 'Bumi', 'HCI'),
('17612310', 'Mangemin Yahanana', '2019-03-21', 'ISLAM', 'Venus', 'PAP'),
('17614002', 'Magento', '2019-03-21', 'ISLAM', 'Bumi', 'HCI'),
('17615001', 'Riah', '2019-03-21', 'ISLAM', 'Mars', 'APB'),
('17615006', 'Yogi Arif Widodo', '2019-03-21', 'ISLAM', 'Bumi', 'SCF'),
('17615888', 'Yahanana', '2019-03-21', 'ISLAM', 'Merkurius', 'APB'),
('17616008', 'Roboto Arif Widodo', '2019-03-21', 'ISLAM', 'Pluto', 'IOT'),
('18123012', 'Master ofit', '2019-03-21', 'ISLAM', 'Saturnus', 'HCS');

-- --------------------------------------------------------

--
-- Table structure for table `prody`
--

CREATE TABLE `prody` (
  `kd_prody` char(3) NOT NULL,
  `nm_prody` varchar(50) NOT NULL,
  `kd_jur` char(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prody`
--

INSERT INTO `prody` (`kd_prody`, `nm_prody`, `kd_jur`) VALUES
('APB', 'Administration Bisnis', 'AP'),
('APM', 'Administration Management', 'AP'),
('HCI', 'Hacker Cracker', 'HC'),
('HCS', 'Hacking Sword', 'HC'),
('IOT', 'Arduino IoT', 'IO'),
('PAP', 'Pariwisata Polnes', 'PA'),
('SCF', 'Firewall Security', 'SC'),
('TI', 'Teknik Informatika', 'TI');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`kd_jur`);

--
-- Indexes for table `mhs`
--
ALTER TABLE `mhs`
  ADD PRIMARY KEY (`nim`),
  ADD KEY `FK_Mhs_prody` (`kd_prody`);

--
-- Indexes for table `prody`
--
ALTER TABLE `prody`
  ADD PRIMARY KEY (`kd_prody`),
  ADD KEY `FK_Prody_jurusan` (`kd_jur`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `mhs`
--
ALTER TABLE `mhs`
  ADD CONSTRAINT `FK_Mhs_prody` FOREIGN KEY (`kd_prody`) REFERENCES `prody` (`kd_prody`);

--
-- Constraints for table `prody`
--
ALTER TABLE `prody`
  ADD CONSTRAINT `FK_Prody_jurusan` FOREIGN KEY (`kd_jur`) REFERENCES `jurusan` (`kd_jur`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
