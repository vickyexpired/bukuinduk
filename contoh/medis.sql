-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2016 at 03:42 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `medis`
--

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `kd_dokter` int(11) NOT NULL AUTO_INCREMENT,
  `kd_user` int(11) NOT NULL,
  `kd_poli` int(11) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `nm_dokter` varchar(300) NOT NULL,
  `sip` enum('pagi','siang','malam','') NOT NULL,
  `tmpat_lhr` varchar(300) NOT NULL,
  `no_tlp` varchar(14) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  PRIMARY KEY (`kd_dokter`),
  KEY `kd_poli` (`kd_poli`),
  KEY `kd_kunjungan` (`kd_user`),
  KEY `kd_kunjungan_2` (`kd_user`),
  KEY `kd_user` (`kd_user`),
  KEY `tgl_kunjungan` (`tgl_kunjungan`),
  KEY `tgl_kunjungan_2` (`tgl_kunjungan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`kd_dokter`, `kd_user`, `kd_poli`, `tgl_kunjungan`, `nm_dokter`, `sip`, `tmpat_lhr`, `no_tlp`, `alamat`) VALUES
(3, 9, 1, '2016-01-05', 'dr. Fadell', 'pagi', 'Medan, 12 Maret 1998', '0856123123432', 'Kost'),
(4, 9, 2, '2016-01-02', 'dr. Netro', 'siang', 'Yogya, 11 Maret 1985', '08191112233', 'Yogya'),
(5, 9, 1, '2016-01-08', 'dr. Seichan', 'malam', 'bantul, 01 Juni 1980', '3232322332323', 'bantul projotamansari');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE IF NOT EXISTS `kunjungan` (
  `kd_kunjungan` int(12) NOT NULL AUTO_INCREMENT,
  `no_pasien` int(11) NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `jam_kunjungan` time NOT NULL,
  `kd_poli` int(11) NOT NULL,
  PRIMARY KEY (`kd_kunjungan`),
  KEY `no_pasien` (`no_pasien`),
  KEY `kd_poli` (`kd_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `kunjungan`
--

INSERT INTO `kunjungan` (`kd_kunjungan`, `no_pasien`, `tgl_kunjungan`, `jam_kunjungan`, `kd_poli`) VALUES
(1, 4, '2016-01-05', '03:53:00', 3),
(6, 2, '2016-01-08', '04:04:00', 2),
(7, 3, '2016-01-08', '04:04:00', 5),
(8, 4, '2016-01-08', '04:19:00', 4),
(9, 5, '2016-01-08', '04:19:00', 6),
(10, 7, '2016-01-08', '04:20:00', 1),
(11, 1, '2016-01-08', '04:35:00', 1),
(12, 6, '2016-01-08', '06:48:00', 6);

-- --------------------------------------------------------

--
-- Table structure for table `laboratorium`
--

CREATE TABLE IF NOT EXISTS `laboratorium` (
  `kd_lab` int(11) NOT NULL AUTO_INCREMENT,
  `no_rm` int(11) NOT NULL,
  `hasil_lab` varchar(300) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`kd_lab`),
  KEY `hasil_lab` (`hasil_lab`),
  KEY `no_rm` (`no_rm`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `laboratorium`
--

INSERT INTO `laboratorium` (`kd_lab`, `no_rm`, `hasil_lab`, `ket`) VALUES
(1, 3, 'positif', 'positif');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `kd_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL,
  PRIMARY KEY (`kd_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`) VALUES
(9, 'admin', 'admin'),
(10, 'fadel', 'fadel');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `kd_obat` int(11) NOT NULL AUTO_INCREMENT,
  `nm_obat` varchar(300) NOT NULL,
  `jml_obat` int(11) NOT NULL,
  `ukuran` int(11) NOT NULL,
  `harga` int(25) NOT NULL,
  PRIMARY KEY (`kd_obat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`kd_obat`, `nm_obat`, `jml_obat`, `ukuran`, `harga`) VALUES
(1, 'Parasetanmol', 10, 250, 10000),
(2, 'Amoxcillin', 10, 200, 10000),
(3, 'CTM', 10, 100, 7000);

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `no_pasien` int(11) NOT NULL AUTO_INCREMENT,
  `nm_pasien` varchar(300) NOT NULL,
  `j_kel` varchar(100) NOT NULL,
  `agama` varchar(100) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tgl_lhr` date NOT NULL,
  `usia` int(3) NOT NULL,
  `no_tlp` int(14) NOT NULL,
  `nm_kk` varchar(300) NOT NULL,
  `hub_kel` varchar(100) NOT NULL,
  `foto` text NOT NULL,
  PRIMARY KEY (`no_pasien`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`no_pasien`, `nm_pasien`, `j_kel`, `agama`, `alamat`, `tgl_lhr`, `usia`, `no_tlp`, `nm_kk`, `hub_kel`, `foto`) VALUES
(1, 'Andi Marwati', 'Wanita', 'kristen', 'Karangtengan RT01 RW01 kel. Tengahkarang kec. Karang Kab. Tengah', '1990-01-15', 25, 812345678, 'Wartono', 'Tidak Kandung', '6882608640_688250bd4a_o.jpg'),
(2, 'Dangil', 'pria', 'islam', 'Rendengan RT10 RW 10 Kacangan  kec Titen Kab Kedele', '2000-01-11', 15, 851234678, 'Slamet', 'Anak Kandung', '7028706339_f3ce38fcd4_o.jpg'),
(3, 'Avian ', 'Pria', 'islam', 'Jl Gejayang jembatan merah', '2000-01-26', 15, 2147483647, 'Marwoto', 'Tidak Kandung', '7028718841_6b5dd29ed3_o.jpg'),
(4, 'Fadel', 'Pria', 'islam', 'Jl. Mawar Merah no 20', '1991-10-18', 24, 2147483647, 'M Ginting', 'Anak Kandung', 'fadell.jpg'),
(5, 'Bagus', 'Pria', 'islam', 'Jl Barang Lapangan Klebengan no 12', '1980-06-11', 35, 2147483647, 'Bapak Bagus', 'Anak Kandung', 'bagus.jpg'),
(6, 'Santosa', 'Pria', 'islam', 'Jl. Utara Hotel Quality Yogya', '1998-12-07', 27, 2147483647, 'Aris', 'Anak Kandung', 'aris.jpg'),
(7, 'Anjel', 'Wanita', 'islam', 'Jl. Belakang Polda DIY No. 007', '1991-03-22', 24, 2147483647, 'Bapaknya Anjel', 'Anak Kandung', 'anjel.jpg'),
(8, 'Ana', 'Wanita', 'kristen', 'Jl. Barat East Flyover Ringroad', '1986-02-12', 29, 2147483647, 'Bapak Jimmy', 'Tidak Kandung', 'jo.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `poliklinik`
--

CREATE TABLE IF NOT EXISTS `poliklinik` (
  `kd_poli` int(11) NOT NULL AUTO_INCREMENT,
  `nm_poli` varchar(300) NOT NULL,
  `lantai` int(11) NOT NULL,
  PRIMARY KEY (`kd_poli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `poliklinik`
--

INSERT INTO `poliklinik` (`kd_poli`, `nm_poli`, `lantai`) VALUES
(1, 'Poli Umum', 1),
(2, 'Poli Gigi', 1),
(3, 'Poli Mata', 1),
(4, 'Poli THT', 2),
(5, 'Poli Syaraf', 1),
(6, 'poli Anak', 1),
(7, 'Poli Si', 3),
(8, 'Poli Pantai', 1);

-- --------------------------------------------------------

--
-- Table structure for table `rekam_medis`
--

CREATE TABLE IF NOT EXISTS `rekam_medis` (
  `no_rm` int(11) NOT NULL AUTO_INCREMENT,
  `kd_tindakan` int(11) NOT NULL,
  `kd_obat` int(11) NOT NULL,
  `no_pasien` int(11) NOT NULL,
  `kd_user` int(11) NOT NULL,
  `diagnosa` varchar(300) NOT NULL,
  `resep` varchar(300) NOT NULL,
  `keluhan` varchar(300) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`no_rm`),
  KEY `no_pasien` (`no_pasien`),
  KEY `kd_tindakan` (`kd_tindakan`),
  KEY `kd_obat` (`kd_obat`),
  KEY `kd_user` (`kd_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `rekam_medis`
--

INSERT INTO `rekam_medis` (`no_rm`, `kd_tindakan`, `kd_obat`, `no_pasien`, `kd_user`, `diagnosa`, `resep`, `keluhan`, `tgl_pemeriksaan`, `ket`) VALUES
(3, 1, 1, 1, 9, 'Gejala', '3 x sehari 1 tablet sesudah makan', 'Kepala senut-senut', '2016-01-08', 'pasien bpjs');

-- --------------------------------------------------------

--
-- Table structure for table `tindakan`
--

CREATE TABLE IF NOT EXISTS `tindakan` (
  `kd_tindakan` int(11) NOT NULL AUTO_INCREMENT,
  `nm_tindakan` varchar(300) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`kd_tindakan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `tindakan`
--

INSERT INTO `tindakan` (`kd_tindakan`, `nm_tindakan`, `ket`) VALUES
(1, 'Rawat jalan', 'dirawat di jalan'),
(2, 'Rawat Inap', 'Dirawat menginap');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dokter`
--
ALTER TABLE `dokter`
  ADD CONSTRAINT `dokter_ibfk_1` FOREIGN KEY (`kd_poli`) REFERENCES `poliklinik` (`kd_poli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `dokter_ibfk_2` FOREIGN KEY (`kd_user`) REFERENCES `login` (`kd_user`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD CONSTRAINT `kunjungan_ibfk_2` FOREIGN KEY (`kd_poli`) REFERENCES `poliklinik` (`kd_poli`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `kunjungan_ibfk_1` FOREIGN KEY (`no_pasien`) REFERENCES `pasien` (`no_pasien`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `laboratorium`
--
ALTER TABLE `laboratorium`
  ADD CONSTRAINT `laboratorium_ibfk_1` FOREIGN KEY (`no_rm`) REFERENCES `rekam_medis` (`no_rm`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `rekam_medis`
--
ALTER TABLE `rekam_medis`
  ADD CONSTRAINT `rekam_medis_ibfk_1` FOREIGN KEY (`no_pasien`) REFERENCES `pasien` (`no_pasien`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medis_ibfk_3` FOREIGN KEY (`kd_tindakan`) REFERENCES `tindakan` (`kd_tindakan`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medis_ibfk_4` FOREIGN KEY (`kd_obat`) REFERENCES `obat` (`kd_obat`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rekam_medis_ibfk_5` FOREIGN KEY (`kd_user`) REFERENCES `login` (`kd_user`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
