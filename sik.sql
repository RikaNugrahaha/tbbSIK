-- Adminer 4.3.1 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `id_karyawan` int(8) NOT NULL AUTO_INCREMENT,
  `nama_admin` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `dokter`;
CREATE TABLE `dokter` (
  `id_karyawan` int(8) NOT NULL AUTO_INCREMENT,
  `nama_dokter` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` text NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  `spesialis` varchar(20) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `hasilrekammedis`;
CREATE TABLE `hasilrekammedis` (
  `id_transaksi` int(5) NOT NULL AUTO_INCREMENT,
  `id_dokter` int(8) NOT NULL,
  `keluhan` text NOT NULL,
  `diagnosa` text NOT NULL,
  `pengobatan` text NOT NULL,
  `pemeriksaan` text NOT NULL,
  `resep` text NOT NULL,
  `alergi_obat` text NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_dokter` (`id_dokter`),
  CONSTRAINT `hasilrekammedis_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksirekammedis` (`id_transaksi`),
  CONSTRAINT `hasilrekammedis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `jadwalkerja`;
CREATE TABLE `jadwalkerja` (
  `id_dokter` int(8) NOT NULL AUTO_INCREMENT,
  `tanggal` date NOT NULL,
  `waktu` time NOT NULL,
  PRIMARY KEY (`id_dokter`),
  CONSTRAINT `jadwalkerja_ibfk_1` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `operator`;
CREATE TABLE `operator` (
  `id_karyawan` int(8) NOT NULL AUTO_INCREMENT,
  `nama_operator` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pasien`;
CREATE TABLE `pasien` (
  `id_pasien` int(5) NOT NULL AUTO_INCREMENT,
  `nama_pasien` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `no_hp` varchar(13) NOT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `ruangan`;
CREATE TABLE `ruangan` (
  `no_ruangan` int(4) NOT NULL AUTO_INCREMENT,
  `nama_ruangan` varchar(20) NOT NULL,
  `id_dokter` int(8) NOT NULL,
  PRIMARY KEY (`no_ruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `spesialis`;
CREATE TABLE `spesialis` (
  `id_spesialis` int(6) NOT NULL AUTO_INCREMENT,
  `nama_spesialis` varchar(20) NOT NULL,
  PRIMARY KEY (`id_spesialis`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `transaksirekammedis`;
CREATE TABLE `transaksirekammedis` (
  `id_transaksi` int(5) NOT NULL AUTO_INCREMENT,
  `id_pasien` int(5) NOT NULL,
  `id_dokter` int(8) NOT NULL,
  `no_ruangan` int(4) NOT NULL,
  `tanggal_pemeriksaan` date NOT NULL,
  `keluhan` text NOT NULL,
  PRIMARY KEY (`id_transaksi`),
  KEY `id_pasien` (`id_pasien`),
  KEY `id_dokter` (`id_dokter`),
  KEY `no_ruangan` (`no_ruangan`),
  CONSTRAINT `transaksirekammedis_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  CONSTRAINT `transaksirekammedis_ibfk_2` FOREIGN KEY (`id_dokter`) REFERENCES `dokter` (`id_karyawan`),
  CONSTRAINT `transaksirekammedis_ibfk_3` FOREIGN KEY (`no_ruangan`) REFERENCES `ruangan` (`no_ruangan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `username` int(8) NOT NULL,
  `password` char(6) NOT NULL,
  KEY `username` (`username`),
  CONSTRAINT `user_ibfk_1` FOREIGN KEY (`username`) REFERENCES `dokter` (`id_karyawan`),
  CONSTRAINT `user_ibfk_2` FOREIGN KEY (`username`) REFERENCES `operator` (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


-- 2017-07-12 07:53:13
