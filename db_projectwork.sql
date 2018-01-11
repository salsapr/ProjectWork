-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 11 Jan 2018 pada 13.43
-- Versi Server: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_projectwork`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE `admin` (
  `USERNAME` varchar(500) NOT NULL,
  `PASSWORD` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`USERNAME`, `PASSWORD`) VALUES
('admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `customer`
--

CREATE TABLE `customer` (
  `NAMA_CUST` varchar(500) DEFAULT NULL,
  `KD_BOOKING` varchar(30) NOT NULL,
  `TELP` decimal(8,0) DEFAULT NULL,
  `TANGGAL` date NOT NULL,
  `USERNAME` varchar(500) DEFAULT NULL,
  `JENIS_ACARA` varchar(500) DEFAULT NULL,
  `JAM` varchar(500) DEFAULT NULL,
  `KETERANGAN` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`NAMA_CUST`, `KD_BOOKING`, `TELP`, `TANGGAL`, `USERNAME`, `JENIS_ACARA`, `JAM`, `KETERANGAN`) VALUES
('Ridha', '', '989898', '2018-01-10', 'admin', 'Umum', '09.00', 'pesan gedung tanpa pintu tanpa dinding'),
('qweq', '', '12345', '2018-01-12', NULL, 'acara sosial', '12.00', ''),
('Diraf', '', '123456', '2018-01-13', 'admin', 'Sosial', '10.00', 'Kursi dan sound '),
('Rehan', '', '8888888', '2018-01-14', NULL, 'acara sosial', '09.00', ''),
('qwerty', '', '90900', '2018-01-15', NULL, 'acara umum', '12.00', ''),
('qwertyuiopsdfghjkl', '0UNdNNx', '99999999', '2018-01-26', NULL, 'acara umum', '10.00', ''),
('riri', '', '89089', '2018-01-28', NULL, 'acara sosial', '09.00', ''),
('qwww', '', '123467', '2018-01-31', NULL, 'acara sosial', '12.00', ''),
('nyenyeney', 'pJFZ2Ai', '99999999', '2018-02-10', NULL, 'acara umum', '14.00', 'hihihih'),
('iqbal', '', '1111', '2018-12-30', NULL, 'acara umum', '12.01', 'asdsa');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_pembayaran`
--

CREATE TABLE `konfirmasi_pembayaran` (
  `KD_BOOKING` varchar(500) NOT NULL,
  `TANGGAL` date DEFAULT NULL,
  `USERNAME` varchar(500) DEFAULT NULL,
  `NAMA_KONFIR` varchar(500) DEFAULT NULL,
  `NO_REKENING` decimal(8,0) DEFAULT NULL,
  `JML_UANG` decimal(8,0) DEFAULT NULL,
  `STATUS` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `konfirmasi_pembayaran`
--

INSERT INTO `konfirmasi_pembayaran` (`KD_BOOKING`, `TANGGAL`, `USERNAME`, `NAMA_KONFIR`, `NO_REKENING`, `JML_UANG`, `STATUS`) VALUES
('0UNdNNx', '2018-01-26', NULL, 'qwertyuiopsdfghjkl', '1234567', '99999999', 'lunas'),
('asd123', '2018-01-10', 'admin', 'Febyani', '989', '99999999', NULL),
('gh', NULL, NULL, 'ridha', '99999999', '800000', NULL),
('pJFZ2Ai', '2018-02-10', NULL, 'nyenyeney', NULL, NULL, 'nyicil');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`USERNAME`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`TANGGAL`),
  ADD KEY `FK_MEMESAN` (`USERNAME`);

--
-- Indexes for table `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD PRIMARY KEY (`KD_BOOKING`),
  ADD KEY `FK_MENGECEK` (`USERNAME`),
  ADD KEY `FK_MENGONFIRMASI` (`TANGGAL`);

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `FK_MEMESAN` FOREIGN KEY (`USERNAME`) REFERENCES `admin` (`USERNAME`);

--
-- Ketidakleluasaan untuk tabel `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD CONSTRAINT `FK_MENGECEK` FOREIGN KEY (`USERNAME`) REFERENCES `admin` (`USERNAME`),
  ADD CONSTRAINT `FK_MENGONFIRMASI` FOREIGN KEY (`TANGGAL`) REFERENCES `customer` (`TANGGAL`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
