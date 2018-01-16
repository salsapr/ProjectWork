-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2018 at 01:48 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_projectwork`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `USERNAME` varchar(500) NOT NULL,
  `PASSWORD` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`USERNAME`, `PASSWORD`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `NAMA_CUST` varchar(500) DEFAULT NULL,
  `KD_BOOKING` varchar(30) NOT NULL,
  `TELP` varchar(15) DEFAULT NULL,
  `TANGGAL` date NOT NULL,
  `USERNAME` varchar(500) DEFAULT NULL,
  `JENIS_ACARA` varchar(500) DEFAULT NULL,
  `JAM` varchar(500) DEFAULT NULL,
  `KETERANGAN` text,
  `READ` enum('unread','read') NOT NULL DEFAULT 'unread',
  PRIMARY KEY (`TANGGAL`),
  KEY `FK_MEMESAN` (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`NAMA_CUST`, `KD_BOOKING`, `TELP`, `TANGGAL`, `USERNAME`, `JENIS_ACARA`, `JAM`, `KETERANGAN`, `READ`) VALUES
('Ridha', '', '989898', '2018-01-10', 'admin', 'Umum', '09.00', 'pesan gedung tanpa pintu tanpa dinding', 'read'),
('qweq', '', '12345', '2018-01-12', NULL, 'acara sosial', '12.00', '', 'read'),
('Diraf', '', '123456', '2018-01-13', 'admin', 'Sosial', '10.00', 'Kursi dan sound ', 'read'),
('Rehan', '', '8888888', '2018-01-14', NULL, 'acara sosial', '09.00', '', 'read'),
('qwerty', '', '90900', '2018-01-15', NULL, 'acara umum', '12.00', '', 'read'),
('lisa', 'PYfvFmg', '08555555555', '2018-01-21', NULL, 'Acara Umum', '10:00', 'siap nikah', 'read'),
('malaaku', 'eFajP1U', '888', '2018-01-24', NULL, 'Acara Umum', '10:00', 'SIAP NIKAH', 'read'),
('salsaaaaa', 'bygJv8Q', '99999999', '2018-01-25', NULL, 'Acara Sosial', '10:58', 'whskqllhwsdwd', 'read'),
('qwertyuiopsdfghjkl', '0UNdNNx', '99999999', '2018-01-26', NULL, 'acara umum', '10.00', '', 'read'),
('faris', 'bVTCRzK', '99999999', '2018-01-27', NULL, 'Acara Umum', '11:00', 'mau sunatan', 'read'),
('riri', '', '89089', '2018-01-28', NULL, 'acara sosial', '09.00', '', 'read'),
('Salsabila Putri Rayieningtyas', 'UemO8oe', '99999999', '2018-01-29', NULL, 'acara sosial', '18.00', 'hdashdkj', 'read'),
('qwww', '', '123467', '2018-01-31', NULL, 'acara sosial', '12.00', '', 'read'),
('jajaja', 'IsqqW5c', '888', '2018-02-02', NULL, 'Acara Umum', '10:10', 'hjhkhkdhajhhas', 'read'),
('asihdishdei', 'g56nzNo', '889979', '2018-02-03', NULL, 'Acara Umum', '00:00', 'shsdsakhdka', 'read'),
('nyenyeney', 'pJFZ2Ai', '99999999', '2018-02-10', NULL, 'acara umum', '14.00', 'hihihih', 'read'),
('iqbal', '', '1111', '2018-12-30', NULL, 'acara umum', '12.01', 'asdsa', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `konfirmasi_pembayaran`
--

CREATE TABLE IF NOT EXISTS `konfirmasi_pembayaran` (
  `KD_BOOKING` varchar(500) NOT NULL,
  `TANGGAL` date DEFAULT NULL,
  `USERNAME` varchar(500) DEFAULT NULL,
  `NAMA_KONFIR` varchar(500) DEFAULT NULL,
  `NO_REKENING` decimal(8,0) DEFAULT NULL,
  `JML_UANG` decimal(8,0) DEFAULT NULL,
  `STATUS` text,
  PRIMARY KEY (`KD_BOOKING`),
  KEY `FK_MENGECEK` (`USERNAME`),
  KEY `FK_MENGONFIRMASI` (`TANGGAL`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `konfirmasi_pembayaran`
--

INSERT INTO `konfirmasi_pembayaran` (`KD_BOOKING`, `TANGGAL`, `USERNAME`, `NAMA_KONFIR`, `NO_REKENING`, `JML_UANG`, `STATUS`) VALUES
('0UNdNNx', '2018-01-26', NULL, 'qwertyuiopsdfghjkl', 1234567, 99999999, 'lunas'),
('asd123', '2018-01-10', 'admin', 'Febyani', 989, 99999999, NULL),
('bVTCRzK', '2018-01-27', NULL, 'wulan', 99999999, 80000, NULL),
('bygJv8Q', '2018-01-25', NULL, NULL, NULL, NULL, NULL),
('eFajP1U', '2018-01-24', NULL, NULL, NULL, NULL, NULL),
('g56nzNo', '2018-02-03', NULL, NULL, NULL, NULL, NULL),
('gh', NULL, NULL, 'ridha', 99999999, 800000, NULL),
('IsqqW5c', '2018-02-02', NULL, NULL, NULL, NULL, NULL),
('pJFZ2Ai', '2018-02-10', NULL, 'nyenyeney', NULL, NULL, 'nyicil'),
('PYfvFmg', '2018-01-21', NULL, 'louisa', 99999999, 10000, NULL),
('UemO8oe', '2018-01-29', NULL, NULL, NULL, NULL, NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `FK_MEMESAN` FOREIGN KEY (`USERNAME`) REFERENCES `admin` (`USERNAME`);

--
-- Constraints for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD CONSTRAINT `FK_MENGECEK` FOREIGN KEY (`USERNAME`) REFERENCES `admin` (`USERNAME`),
  ADD CONSTRAINT `FK_MENGONFIRMASI` FOREIGN KEY (`TANGGAL`) REFERENCES `customer` (`TANGGAL`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
