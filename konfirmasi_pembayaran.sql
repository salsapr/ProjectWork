-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 09 Jan 2018 pada 07.05
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
-- Struktur dari tabel `konfirmasi_pembayaran`
--

CREATE TABLE IF NOT EXISTS `konfirmasi_pembayaran` (
  `KD_BOOKING` varchar(500) NOT NULL,
  `TANGGAL` varchar(500) DEFAULT NULL,
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
('9ui456', '21-09-2018', 'admin', 'Ridha Nadhira', 99999999, 600000, 'BELUM'),
('9ui457', '21-09-2018', 'admin', 'Ridha Nadhira', 99999999, 600000, 'BELUM');

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `konfirmasi_pembayaran`
--
ALTER TABLE `konfirmasi_pembayaran`
  ADD CONSTRAINT `FK_MENGONFIRMASI` FOREIGN KEY (`TANGGAL`) REFERENCES `customer` (`TANGGAL`),
  ADD CONSTRAINT `FK_MENGECEK` FOREIGN KEY (`USERNAME`) REFERENCES `admin` (`USERNAME`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
