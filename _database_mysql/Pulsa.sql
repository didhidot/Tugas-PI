
-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Inang: localhost
-- Waktu pembuatan: 15 Jun 2015 pada 02.54
-- Versi Server: 5.1.69
-- Versi PHP: 5.2.17

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `u171842091_pulsa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `bayarsaldo`
--

CREATE TABLE IF NOT EXISTS `bayarsaldo` (
  `NomorByr` varchar(10) NOT NULL,
  `TanggalByr` date NOT NULL,
  `Kodedepositpulsa` varchar(10) NOT NULL,
  `Jumlah` double NOT NULL,
  `Sisa` double NOT NULL,
  `saldo` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`NomorByr`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `belidepositpulsa`
--

CREATE TABLE IF NOT EXISTS `belidepositpulsa` (
  `Kodedepositpulsa` varchar(10) NOT NULL,
  `Tanggaldepositpulsa` date NOT NULL,
  `Kodeoper` varchar(10) NOT NULL,
  `Kodenominal` varchar(10) NOT NULL,
  `Harga` double NOT NULL,
  `UangMuka` double NOT NULL,
  `TelahBayar` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`Kodedepositpulsa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `belidepositpulsa`
--

INSERT INTO `belidepositpulsa` (`Kodedepositpulsa`, `Tanggaldepositpulsa`, `Kodeoper`, `Kodenominal`, `Harga`, `UangMuka`, `TelahBayar`, `Keterangan`) VALUES
('KRD00000', '2015-06-15', 'CUS00005', 'MBL00001', 12000, 12000, 12000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `belipulsa`
--

CREATE TABLE IF NOT EXISTS `belipulsa` (
  `Kodepulsa` varchar(10) NOT NULL,
  `Tanggalpulsa` date NOT NULL,
  `Kodeoper` varchar(10) NOT NULL,
  `Kodenominal` varchar(10) NOT NULL,
  `Harga` double NOT NULL,
  `Bayar` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`Kodepulsa`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `belipulsa`
--

INSERT INTO `belipulsa` (`Kodepulsa`, `Tanggalpulsa`, `Kodeoper`, `Kodenominal`, `Harga`, `Bayar`, `Keterangan`) VALUES
('CSH00000', '2015-05-27', 'CUS00000', 'MBL00000', 7000, 1000, ''),
('CSH00003', '2015-06-15', 'CUS00001', 'MBL00001', 12000, 0, ''),
('CSH00001', '2015-06-15', 'CUS00000', 'MBL00000', 7000, 10000, ''),
('CSH00002', '2015-06-15', 'CUS00000', 'MBL00000', 7000, 10000, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `nominal`
--

CREATE TABLE IF NOT EXISTS `nominal` (
  `Kodenominal` varchar(10) NOT NULL,
  `Nominal` varchar(20) NOT NULL,
  `Warna` varchar(20) NOT NULL,
  `gambar` varchar(200) NOT NULL,
  `Harga` double NOT NULL,
  PRIMARY KEY (`Kodenominal`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `nominal`
--

INSERT INTO `nominal` (`Kodenominal`, `Nominal`, `Warna`, `gambar`, `Harga`) VALUES
('MBL00000', '5000', 'Silver', '4772968_20140709091953.jpg', 7000),
('MBL00001', '10000', '', '', 12000),
('MBL00002', '20000', '', '', 22000),
('MBL00003', '25000', '', '', 27000),
('MBL00004', '50000', '', '', 52000),
('MBL00005', '100000', '', '', 100000),
('MBL00006', '200000', '', '', 200000),
('MBL00007', '250000', '', '', 250000);

-- --------------------------------------------------------

--
-- Struktur dari tabel `operatorpulsa`
--

CREATE TABLE IF NOT EXISTS `operatorpulsa` (
  `Kodeoper` varchar(10) NOT NULL,
  `Nama` varchar(40) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `Telepon` varchar(15) NOT NULL,
  `HP` varchar(15) NOT NULL,
  `NoKTP` varchar(20) NOT NULL,
  `KK` varchar(20) NOT NULL,
  `SlipGaji` double NOT NULL,
  `Keterangan` varchar(50) NOT NULL,
  PRIMARY KEY (`Kodeoper`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `operatorpulsa`
--

INSERT INTO `operatorpulsa` (`Kodeoper`, `Nama`, `Alamat`, `Telepon`, `HP`, `NoKTP`, `KK`, `SlipGaji`, `Keterangan`) VALUES
('CUS00000', 'indosat', 'www.indosat.co.id', '024111111111111', '', '', '', 0, ''),
('CUS00001', 'XL', 'www.xl.co.id', '0271617611', '', '', '', 0, ''),
('CUS00002', 'Telkomsel', 'www.telkomsel.com', '023823', '', '', '', 0, ''),
('CUS00003', 'Tri', 'www.tri.co.id', '02333333', '', '', '', 0, ''),
('CUS00004', 'All Operator', '', '', '', '', '', 0, ''),
('CUS00005', 'axis', 'axis.co.id', '02739232', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `KodeUser` varchar(10) NOT NULL,
  `UserName` varchar(15) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Status` varchar(5) NOT NULL,
  PRIMARY KEY (`KodeUser`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`KodeUser`, `UserName`, `Password`, `Status`) VALUES
('USR00003', 'admin', 'admin', 'admin'),
('USR00004', 'adit', 'adit', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
