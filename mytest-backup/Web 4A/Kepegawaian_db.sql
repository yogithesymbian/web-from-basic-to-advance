-- phpMyAdmin SQL Dump
-- version 2.11.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Waktu pembuatan: 22. Mei 2019 jam 08:40
-- Versi Server: 5.0.51
-- Versi PHP: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `kepegawaian`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `departemen`
--

CREATE TABLE IF NOT EXISTS `departemen` (
  `id_dept` int(2) NOT NULL auto_increment,
  `nm_dept` varchar(25) NOT NULL,
  `id_divisi` int(2) NOT NULL,
  PRIMARY KEY  (`id_dept`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `departemen`
--

INSERT INTO `departemen` (`id_dept`, `nm_dept`, `id_divisi`) VALUES
(1, 'Technical Support Softwar', 1),
(2, 'Technical Support Hardwar', 1),
(3, 'Networking', 1),
(4, 'Finance', 2),
(5, 'Accounting', 2),
(6, 'HRD Dept', 3),
(7, 'Pusdiklat', 3),
(8, 'Finish Good', 4),
(9, 'Non Finish Good', 4);

-- --------------------------------------------------------

--
-- Struktur dari tabel `divisi`
--

CREATE TABLE IF NOT EXISTS `divisi` (
  `id_divisi` int(2) NOT NULL auto_increment,
  `nm_divisi` varchar(25) NOT NULL,
  PRIMARY KEY  (`id_divisi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `divisi`
--

INSERT INTO `divisi` (`id_divisi`, `nm_divisi`) VALUES
(1, 'Information Tecknologi'),
(2, 'Finance & Accounting'),
(3, 'HRDS'),
(4, 'Logistic');

-- --------------------------------------------------------

--
-- Struktur dari tabel `kab_kota`
--

CREATE TABLE IF NOT EXISTS `kab_kota` (
  `kd_kabkota` int(5) NOT NULL auto_increment,
  `nm_kabkota` varchar(20) NOT NULL,
  `kd_provinsi` int(5) NOT NULL,
  PRIMARY KEY  (`kd_kabkota`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `kab_kota`
--

INSERT INTO `kab_kota` (`kd_kabkota`, `nm_kabkota`, `kd_provinsi`) VALUES
(1, 'Samarinda', 2),
(2, 'Balikpapan', 2),
(3, 'Bontang', 2),
(4, 'Kutai Kartanegara', 2),
(5, 'Kutai Timur', 2),
(6, 'Penajam Paser Utara', 2),
(7, 'Banjarmasin', 3),
(8, 'Tanjung', 3),
(9, 'Surabaya', 5),
(10, 'Sidoarjo', 5),
(11, 'Gresik', 5),
(12, 'Lamongan', 5),
(13, 'Semarang', 6),
(14, 'Kudus', 6);

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` varchar(8) NOT NULL,
  `nm_pegawai` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `id_pendidikan` int(1) NOT NULL,
  `agama` varchar(1) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `kd_kabkota` int(5) NOT NULL,
  `kd_provinsi` int(5) NOT NULL,
  `id_dept` int(2) NOT NULL,
  `id_divisi` int(2) NOT NULL,
  `status` varchar(1) NOT NULL,
  `jml_anak` varchar(1) NOT NULL,
  PRIMARY KEY  (`id_pegawai`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nm_pegawai`, `tgl_lahir`, `id_pendidikan`, `agama`, `alamat`, `kd_kabkota`, `kd_provinsi`, `id_dept`, `id_divisi`, `status`, `jml_anak`) VALUES
('12345', 'Abdul Najib', '1992-05-11', 8, '1', 'J. Juanda 8', 1, 2, 3, 1, '2', '2');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `id_pendidikan` int(1) NOT NULL auto_increment,
  `nm_pendidikan` varchar(20) NOT NULL,
  PRIMARY KEY  (`id_pendidikan`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data untuk tabel `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `nm_pendidikan`) VALUES
(1, 'Sekolah Dasar'),
(2, 'Sekolah Menengah Per'),
(3, 'Sekolah Menengah Ata'),
(4, 'Diploma 1'),
(5, 'Diploma 2'),
(6, 'Diploma 3'),
(7, 'Sarjana (S1/D4)'),
(8, 'Strata 2'),
(9, 'Strata 3');

-- --------------------------------------------------------

--
-- Struktur dari tabel `provinsi`
--

CREATE TABLE IF NOT EXISTS `provinsi` (
  `kd_provinsi` int(5) NOT NULL auto_increment,
  `nm_provinsi` varchar(20) NOT NULL,
  PRIMARY KEY  (`kd_provinsi`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `provinsi`
--

INSERT INTO `provinsi` (`kd_provinsi`, `nm_provinsi`) VALUES
(1, 'DKI Jakarta'),
(2, 'Kalimantan Timur'),
(3, 'Kalimantan Selatan'),
(4, 'Kalimantan Tengah'),
(5, 'Jawa Timur'),
(6, 'Jawa Tengah'),
(7, 'Jawa Barat'),
(8, 'Banten');
