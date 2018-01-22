-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 22 Jan 2018 pada 15.17
-- Versi Server: 5.5.27
-- Versi PHP: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `db_projectwork`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `USERNAME` varchar(500) NOT NULL,
  `PASSWORD` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`USERNAME`)
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

CREATE TABLE IF NOT EXISTS `customer` (
  `NAMA_CUST` varchar(500) DEFAULT NULL,
  `KD_BOOKING` varchar(30) NOT NULL,
  `TELP` varchar(15) DEFAULT NULL,
  `TANGGAL` date NOT NULL,
  `USERNAME` varchar(500) DEFAULT NULL,
  `JENIS_ACARA` varchar(500) DEFAULT NULL,
  `JAM` varchar(500) DEFAULT NULL,
  `email` varchar(50) NOT NULL,
  `KETERANGAN` text,
  `READ` enum('unread','read') NOT NULL DEFAULT 'unread',
  PRIMARY KEY (`TANGGAL`),
  KEY `FK_MEMESAN` (`USERNAME`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `customer`
--

INSERT INTO `customer` (`NAMA_CUST`, `KD_BOOKING`, `TELP`, `TANGGAL`, `USERNAME`, `JENIS_ACARA`, `JAM`, `email`, `KETERANGAN`, `READ`) VALUES
('hfjdh', 'K8Czh8p', '9832759235', '1010-10-10', NULL, 'Acara Umum', '11:11', 'malajung2410@gmail.com', 'tggertg', 'read'),
('yufyudyf', 's3vxnUH', '8374972', '1090-11-10', NULL, 'Acara Sosial', '10:10', 'salsabilaputrirayieningtyas@gmail.com', 'hdfhvihv', 'read'),
('lalaland', 'p627jqh', '081292938913', '1098-08-14', NULL, 'Acara Umum', '05:05', 'malajung2410@gmail.com', 'uekjtkrjt', 'read'),
('fhjhff', 'hm9T7ml', '924890234802', '1997-09-18', NULL, 'Acara Umum', '08:09', 'malajung2410@gmail.com', 'ksdgjdfh', 'read'),
('kdfjhidf', 'E0ZhByG', '03249734', '1998-09-10', NULL, 'Acara Umum', '09:09', 'malajung2410@gmail.com', 'egetget', 'read'),
('salsaaaa', 'BoSpw5K', '081257711574', '2010-10-10', NULL, 'Acara Umum', '08:00', 'salsabilaputrirayieningtyas@gmail.com', 'bismillah', 'read'),
('Ridha', '', '989898', '2018-01-10', 'admin', 'Umum', '09.00', '', 'pesan gedung tanpa pintu tanpa dinding', 'read'),
('qweq', '', '12345', '2018-01-12', NULL, 'acara sosial', '12.00', '', '', 'read'),
('Diraf', '', '123456', '2018-01-13', 'admin', 'Sosial', '10.00', '', 'Kursi dan sound ', 'read'),
('Rehan', '', '8888888', '2018-01-14', NULL, 'acara sosial', '09.00', '', '', 'read'),
('qwerty', '', '90900', '2018-01-15', NULL, 'acara umum', '12.00', '', '', 'read'),
('lisa', 'PYfvFmg', '08555555555', '2018-01-21', NULL, 'Acara Umum', '10:00', '', 'siap nikah', 'read'),
('malaaku', 'eFajP1U', '888', '2018-01-24', NULL, 'Acara Umum', '10:00', '', 'SIAP NIKAH', 'read'),
('salsaaaaa', 'bygJv8Q', '99999999', '2018-01-25', NULL, 'Acara Sosial', '10:58', '', 'whskqllhwsdwd', 'read'),
('qwertyuiopsdfghjkl', '0UNdNNx', '99999999', '2018-01-26', NULL, 'acara umum', '10.00', '', '', 'read'),
('faris', 'bVTCRzK', '99999999', '2018-01-27', NULL, 'Acara Umum', '11:00', '', 'mau sunatan', 'read'),
('riri', '', '89089', '2018-01-28', NULL, 'acara sosial', '09.00', '', '', 'read'),
('Salsabila Putri Rayieningtyas', 'UemO8oe', '99999999', '2018-01-29', NULL, 'acara sosial', '18.00', '', 'hdashdkj', 'read'),
('qwww', '', '123467', '2018-01-31', NULL, 'acara sosial', '12.00', '', '', 'read'),
('jajaja', 'IsqqW5c', '888', '2018-02-02', NULL, 'Acara Umum', '10:10', '', 'hjhkhkdhajhhas', 'read'),
('asihdishdei', 'g56nzNo', '889979', '2018-02-03', NULL, 'Acara Umum', '00:00', '', 'shsdsakhdka', 'read'),
('nyenyeney', 'pJFZ2Ai', '99999999', '2018-02-10', NULL, 'acara umum', '14.00', '', 'hihihih', 'read'),
('iqbal', '', '1111', '2018-12-30', NULL, 'acara umum', '12.01', '', 'asdsa', 'read');

-- --------------------------------------------------------

--
-- Struktur dari tabel `konfirmasi_pembayaran`
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
-- Dumping data untuk tabel `konfirmasi_pembayaran`
--

INSERT INTO `konfirmasi_pembayaran` (`KD_BOOKING`, `TANGGAL`, `USERNAME`, `NAMA_KONFIR`, `NO_REKENING`, `JML_UANG`, `STATUS`) VALUES
('0UNdNNx', '2018-01-26', NULL, 'qwertyuiopsdfghjkl', 1234567, 99999999, 'lunas'),
('asd123', '2018-01-10', 'admin', 'Febyani', 989, 99999999, NULL),
('BoSpw5K', '2010-10-10', NULL, NULL, NULL, NULL, 'Selesai'),
('bVTCRzK', '2018-01-27', NULL, 'wulan', 99999999, 80000, 'Selesai'),
('bygJv8Q', '2018-01-25', NULL, NULL, NULL, NULL, NULL),
('E0ZhByG', '1998-09-10', NULL, NULL, NULL, NULL, NULL),
('eFajP1U', '2018-01-24', NULL, NULL, NULL, NULL, NULL),
('g56nzNo', '2018-02-03', NULL, NULL, NULL, NULL, NULL),
('gh', NULL, NULL, 'ridha', 99999999, 800000, NULL),
('hm9T7ml', '1997-09-18', NULL, NULL, NULL, NULL, 'Lunas'),
('IsqqW5c', '2018-02-02', NULL, NULL, NULL, NULL, NULL),
('K8Czh8p', '1010-10-10', NULL, NULL, NULL, NULL, 'Lunas'),
('p627jqh', '1098-08-14', NULL, NULL, NULL, NULL, 'Lunas'),
('pJFZ2Ai', '2018-02-10', NULL, 'nyenyeney', NULL, NULL, 'Selesai'),
('PYfvFmg', '2018-01-21', NULL, 'louisa', 99999999, 10000, NULL),
('s3vxnUH', '1090-11-10', NULL, NULL, NULL, NULL, 'Selesai'),
('UemO8oe', '2018-01-29', NULL, NULL, NULL, NULL, NULL);

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

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
