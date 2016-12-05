-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2016 at 07:29 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gstahfidzqu`
--
CREATE DATABASE IF NOT EXISTS `gstahfidzqu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `gstahfidzqu`;

-- --------------------------------------------------------

--
-- Table structure for table `tagama`
--

CREATE TABLE IF NOT EXISTS `tagama` (
  `id_agama` int(2) NOT NULL AUTO_INCREMENT,
  `nama_agama` text NOT NULL,
  PRIMARY KEY (`id_agama`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagama`
--

INSERT INTO `tagama` (`id_agama`, `nama_agama`) VALUES
(3, 'Kristen Katolik'),
(5, 'Hindu'),
(6, 'Budha'),
(7, 'Atheis'),
(8, 'Protestan'),
(9, 'Shinto');

-- --------------------------------------------------------

--
-- Table structure for table `tedu`
--

CREATE TABLE IF NOT EXISTS `tedu` (
  `id_edu` int(2) NOT NULL AUTO_INCREMENT,
  `level_edu` text NOT NULL,
  PRIMARY KEY (`id_edu`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tedu`
--

INSERT INTO `tedu` (`id_edu`, `level_edu`) VALUES
(2, 'SMPS'),
(3, 'SMA'),
(4, 'SMK'),
(5, 'D1'),
(6, 'D2'),
(7, 'D3'),
(8, 'S1'),
(9, 'S2'),
(10, 'S3');

-- --------------------------------------------------------

--
-- Table structure for table `tjob`
--

CREATE TABLE IF NOT EXISTS `tjob` (
  `id_job` int(2) NOT NULL AUTO_INCREMENT,
  `nama_job` text NOT NULL,
  `ket_job` text NOT NULL,
  PRIMARY KEY (`id_job`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tjob`
--

INSERT INTO `tjob` (`id_job`, `nama_job`, `ket_job`) VALUES
(4, 'PNS', 'Pegawai Negeri Sindam'),
(5, 'Karyawan Swasta', 'Karyawan perusahaan swasta'),
(6, 'Wiraswasta', 'Pengusaha');

-- --------------------------------------------------------

--
-- Table structure for table `tortu`
--

CREATE TABLE IF NOT EXISTS `tortu` (
  `id_ortu` int(4) NOT NULL AUTO_INCREMENT,
  `nama_a` varchar(20) NOT NULL,
  `job_a` int(11) NOT NULL,
  `agama_a` int(11) NOT NULL,
  `edu_a` int(11) NOT NULL,
  `usia_a` varchar(20) NOT NULL,
  `status_a` varchar(20) NOT NULL,
  `nama_i` varchar(20) NOT NULL,
  `job_i` int(11) NOT NULL,
  `agama_i` int(11) NOT NULL,
  `edu_i` int(11) NOT NULL,
  `usia_i` varchar(20) NOT NULL,
  `status_i` varchar(20) NOT NULL,
  `alamat_ortu` varchar(20) NOT NULL,
  `telp_ortu` varchar(20) NOT NULL,
  `hp_ortu` varchar(20) NOT NULL,
  PRIMARY KEY (`id_ortu`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tortu`
--

INSERT INTO `tortu` (`id_ortu`, `nama_a`, `job_a`, `agama_a`, `edu_a`, `usia_a`, `status_a`, `nama_i`, `job_i`, `agama_i`, `edu_i`, `usia_i`, `status_i`, `alamat_ortu`, `telp_ortu`, `hp_ortu`) VALUES
(5, '2', 4, 3, 2, '2', '2', '2', 4, 3, 2, '2', '2', '2', '2', '2');

-- --------------------------------------------------------

--
-- Table structure for table `tprestasi`
--

CREATE TABLE IF NOT EXISTS `tprestasi` (
  `id_prestasi` int(3) NOT NULL AUTO_INCREMENT,
  `prestasi` varchar(15) NOT NULL,
  PRIMARY KEY (`id_prestasi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tsd`
--

CREATE TABLE IF NOT EXISTS `tsd` (
  `id_sd` int(4) NOT NULL AUTO_INCREMENT,
  `nama_sd` text NOT NULL,
  `alamat_sd` text NOT NULL,
  PRIMARY KEY (`id_sd`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsd`
--

INSERT INTO `tsd` (`id_sd`, `nama_sd`, `alamat_sd`) VALUES
(8, 'SDIT Tembung', 'Tembung Pesisir'),
(9, 'SD Klamazetta', 'Padang Barat'),
(10, 'SD Azimeys', 'Payabundung'),
(12, 'SD Bunda Maria', 'Kodam Bukit Barisan'),
(44, 'SD Bunda', 'Moyudan Lor'),
(45, 'SD PERTIWI 28 POTORONO', 'SALAKAN'),
(46, 'TK QURROTA A''YUN', 'BABADAN'),
(47, 'TK AISYIYAH PEMBINA BANGUNTAPAN', 'PETET'),
(48, 'SD ABA KEPUH WETAN', 'KEPUH WETAN'),
(49, 'SD PERTIWI 21 BABADAN', 'BABADAN Ds. PLUMBON RW 17 RT 21'),
(50, 'SD ''AISYIYAH BUSTANUL ATHFAL KRAGILAN', 'JL. WIROSABAN BARU KRAGILAN');

-- --------------------------------------------------------

--
-- Table structure for table `tsiswa`
--

CREATE TABLE IF NOT EXISTS `tsiswa` (
  `id_siswa` int(5) NOT NULL AUTO_INCREMENT,
  `nama_lengkap` text NOT NULL,
  `nama_panggilan` text NOT NULL,
  `no_pendaftaran` text NOT NULL,
  `t4_lahir` text NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jk` text NOT NULL,
  `anakke` text NOT NULL,
  `kandung` text NOT NULL,
  `tiri` text NOT NULL,
  `angkat` text NOT NULL,
  `alamat` text NOT NULL,
  `kelas` text NOT NULL,
  `nisn` varchar(10) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `id_ortu` int(4) NOT NULL,
  `tinggi` varchar(3) NOT NULL,
  `berat` varchar(3) NOT NULL,
  `id_goldar` int(1) NOT NULL,
  `badan` int(11) NOT NULL,
  `telinga` int(11) NOT NULL,
  `mata_kanan_plus` int(11) NOT NULL,
  `mata_kanan_min` int(11) NOT NULL,
  `mata_kiri_plus` int(11) NOT NULL,
  `mata_kiri_min` int(11) NOT NULL,
  `hidung` int(11) NOT NULL,
  `penyakit_sering` int(11) NOT NULL,
  `penyakit_kronis` int(11) NOT NULL,
  `penyakit_kronis_lama` int(11) NOT NULL,
  `opname` int(11) NOT NULL,
  `opname_sakit` int(11) NOT NULL,
  `opname_sakit_lama` int(11) NOT NULL,
  `pantangan` int(11) NOT NULL,
  `hobi` varchar(15) NOT NULL,
  `mapel` varchar(15) NOT NULL,
  `olahraga` varchar(15) NOT NULL,
  `citacita` varchar(15) NOT NULL,
  `penghasilan` varchar(7) NOT NULL,
  `sekolah` int(2) NOT NULL,
  `not_sekolah` int(2) NOT NULL,
  `penanggung` varchar(5) NOT NULL,
  `indonesia` varchar(5) NOT NULL,
  `daerah` varchar(5) NOT NULL,
  `asing` varchar(5) NOT NULL,
  `id_tk` int(4) NOT NULL,
  `id_sd` int(11) NOT NULL,
  `baca_quran` varchar(11) NOT NULL,
  `tempat_belajar` varchar(11) NOT NULL,
  `hafalan` varchar(11) NOT NULL,
  `informasi` varchar(10) NOT NULL,
  PRIMARY KEY (`id_siswa`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=latin1 COMMENT='Table Data Siswa - bangodell.com | Godspeed Digital';

--
-- Dumping data for table `tsiswa`
--

INSERT INTO `tsiswa` (`id_siswa`, `nama_lengkap`, `nama_panggilan`, `no_pendaftaran`, `t4_lahir`, `tgl_lahir`, `jk`, `anakke`, `kandung`, `tiri`, `angkat`, `alamat`, `kelas`, `nisn`, `telp`, `hp`, `foto`, `id_ortu`, `tinggi`, `berat`, `id_goldar`, `badan`, `telinga`, `mata_kanan_plus`, `mata_kanan_min`, `mata_kiri_plus`, `mata_kiri_min`, `hidung`, `penyakit_sering`, `penyakit_kronis`, `penyakit_kronis_lama`, `opname`, `opname_sakit`, `opname_sakit_lama`, `pantangan`, `hobi`, `mapel`, `olahraga`, `citacita`, `penghasilan`, `sekolah`, `not_sekolah`, `penanggung`, `indonesia`, `daerah`, `asing`, `id_tk`, `id_sd`, `baca_quran`, `tempat_belajar`, `hafalan`, `informasi`) VALUES
(38, 'kamu', '2', '2', '2', '0000-00-00', 'Laki-Laki', '2', '2', '2', '2', '2', '2', '2', '2', '2', '', 5, '2', '2', 1, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '2', '5', '2', '5', '5', 5, 5, '5', '5', '5', '5', 20, 8, '1', '55', '5', '5');

-- --------------------------------------------------------

--
-- Table structure for table `ttk`
--

CREATE TABLE IF NOT EXISTS `ttk` (
  `id_tk` int(4) NOT NULL AUTO_INCREMENT,
  `nama_tk` text NOT NULL,
  `alamat_tk` text NOT NULL,
  PRIMARY KEY (`id_tk`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttk`
--

INSERT INTO `ttk` (`id_tk`, `nama_tk`, `alamat_tk`) VALUES
(20, 'TK MUHAMMADIYAH IMOGIRI', 'Jalan Raya Imogiri Pos Imogiri'),
(21, 'TK MUHAMMADIYAH 2 DLINGO', 'Seropan Muntuk Dlingo Bantul'),
(22, 'TK NEGERI 1 DLINGO', 'Jalan Dlingo'),
(23, 'TK PERTIWI 51', 'Mangunan, Dlingo'),
(24, 'TK ABA MULYODADI II', 'Ngaran'),
(25, 'TK PKK 81 AMONGSIWI', 'Nglarang, Mulyodadi, Bambanglipuro'),
(26, 'TK ABA MULYODADI I PETE', 'Jl. Ir. Juanda Bantul Timur Bantul Trirenggo Bantul 55714'),
(27, 'TK ABA JOGODAYOH II', 'Kadek Wijirejo Pandak Bantul'),
(28, 'TK ABA SIDOMULYO II', 'PLEBENGAN'),
(29, 'TK LKMD NGAMBAH', 'NGAMBAH'),
(30, 'TK ABA NGLAREN', 'BRAJAN'),
(31, 'TK ABA TEGALSARI', 'TEGALSARI'),
(32, 'TK PKK MUTIHAN', 'MUTIHAN RT 03'),
(36, 'TK Tunas Mulia', 'Loa Bakung, Samarinda');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE IF NOT EXISTS `tuser` (
  `id_user` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(25) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tuser`
--

INSERT INTO `tuser` (`id_user`, `username`, `pass`, `level`) VALUES
(1, 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', '1');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
