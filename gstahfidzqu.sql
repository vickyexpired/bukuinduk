-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2016 at 04:24 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gstahfidzqu`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `kd_user` int(11) NOT NULL,
  `username` varchar(300) NOT NULL,
  `password` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`kd_user`, `username`, `password`) VALUES
(9, 'admin', 'admin'),
(10, 'fadel', 'fadel');

-- --------------------------------------------------------

--
-- Table structure for table `tagama`
--

CREATE TABLE `tagama` (
  `id_agama` int(2) NOT NULL,
  `nama_agama` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tagama`
--

INSERT INTO `tagama` (`id_agama`, `nama_agama`) VALUES
(3, 'Kristen Katolik'),
(5, 'Hindu'),
(6, 'Budha'),
(7, 'Atheis'),
(8, 'Kristen Protestan'),
(9, 'Shinto');

-- --------------------------------------------------------

--
-- Table structure for table `tedu`
--

CREATE TABLE `tedu` (
  `id_edu` int(2) NOT NULL,
  `level_edu` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
-- Table structure for table `tgoldar`
--

CREATE TABLE `tgoldar` (
  `id_goldar` int(1) NOT NULL,
  `goldar` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tgoldar`
--

INSERT INTO `tgoldar` (`id_goldar`, `goldar`) VALUES
(1, 'A'),
(2, 'B'),
(3, 'AB'),
(4, 'O');

-- --------------------------------------------------------

--
-- Table structure for table `tjob`
--

CREATE TABLE `tjob` (
  `id_job` int(2) NOT NULL,
  `nama_job` text NOT NULL,
  `ket_job` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tjob`
--

INSERT INTO `tjob` (`id_job`, `nama_job`, `ket_job`) VALUES
(4, 'PNS', 'Pegawai Negeri Sipil'),
(5, 'Karyawan Swasta', 'Karyawan perusahaan swasta'),
(6, 'Wiraswasta', 'Pengusaha');

-- --------------------------------------------------------

--
-- Table structure for table `tortu`
--

CREATE TABLE `tortu` (
  `id_ortu` int(4) NOT NULL,
  `nama_a` varchar(20) NOT NULL,
  `job_a` int(2) NOT NULL,
  `agama_a` varchar(20) NOT NULL,
  `edu_a` varchar(20) NOT NULL,
  `usia_a` varchar(20) NOT NULL,
  `status_a` varchar(20) NOT NULL,
  `nama_i` varchar(20) NOT NULL,
  `job_i` int(2) NOT NULL,
  `agama_i` varchar(20) NOT NULL,
  `edu_i` varchar(20) NOT NULL,
  `usia_i` varchar(20) NOT NULL,
  `status_i` varchar(20) NOT NULL,
  `alamat_ortu` varchar(20) NOT NULL,
  `telp_ortu` varchar(20) NOT NULL,
  `hp_ortu` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tortu`
--

INSERT INTO `tortu` (`id_ortu`, `nama_a`, `job_a`, `agama_a`, `edu_a`, `usia_a`, `status_a`, `nama_i`, `job_i`, `agama_i`, `edu_i`, `usia_i`, `status_i`, `alamat_ortu`, `telp_ortu`, `hp_ortu`) VALUES
(1, 'Bambang', 1, 'Islam', 'Cool', 'asdasd', 'asdasd', 'Sumarti', 3, 'sadasd', 'as;ldka;dlk', 'asdasd;k', 'qwsda;slkda[123', 'asdad;as', 'qas;da;dak', 'asld;asdl');

-- --------------------------------------------------------

--
-- Table structure for table `tprestasi`
--

CREATE TABLE `tprestasi` (
  `id_prestasi` int(3) NOT NULL,
  `prestasi` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tsd`
--

CREATE TABLE `tsd` (
  `id_sd` int(4) NOT NULL,
  `nama_sd` text NOT NULL,
  `alamat_sd` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

CREATE TABLE `tsiswa` (
  `id_siswa` int(5) NOT NULL,
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
  `nisn` int(5) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `hp` varchar(15) NOT NULL,
  `foto` text NOT NULL,
  `id_ortu` int(4) NOT NULL,
  `tinggi` varchar(3) NOT NULL,
  `berat` int(11) NOT NULL,
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
  `id_sd` int(4) NOT NULL,
  `baca_quran` varchar(11) NOT NULL,
  `tempat_belajar` varchar(11) NOT NULL,
  `hafalan` varchar(11) NOT NULL,
  `informasi` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COMMENT='Table Data Siswa - bangodell.com | Godspeed Digital';

--
-- Dumping data for table `tsiswa`
--

INSERT INTO `tsiswa` (`id_siswa`, `nama_lengkap`, `nama_panggilan`, `no_pendaftaran`, `t4_lahir`, `tgl_lahir`, `jk`, `anakke`, `kandung`, `tiri`, `angkat`, `alamat`, `kelas`, `nisn`, `telp`, `hp`, `foto`, `id_ortu`, `tinggi`, `berat`, `id_goldar`, `badan`, `telinga`, `mata_kanan_plus`, `mata_kanan_min`, `mata_kiri_plus`, `mata_kiri_min`, `hidung`, `penyakit_sering`, `penyakit_kronis`, `penyakit_kronis_lama`, `opname`, `opname_sakit`, `opname_sakit_lama`, `pantangan`, `hobi`, `mapel`, `olahraga`, `citacita`, `penghasilan`, `sekolah`, `not_sekolah`, `penanggung`, `indonesia`, `daerah`, `asing`, `id_tk`, `id_sd`, `baca_quran`, `tempat_belajar`, `hafalan`, `informasi`) VALUES
(32, 'Fadhel Muhammad Gintings', 'Fadhel', '123456789', 'Banjarmasin', '0000-00-00', 'L', '1', '4', '5', '1', 'Jalan Rawa Cangkuk Bumi No.88 Sukaramai Medan', '3 TS 1', 123456789, '021-1234567890', '081234567890', 'path', 1, '185', 70, 1, 0, 0, 5, 5, 5, 5, 5, 0, 0, 1, 0, 0, 1, 0, '111', '111', '111', '111', '111', 111, 111, '111', '111', '111', '111', 18, 8, '111', '111', '111', '111'),
(33, 'Bambang Saras Yulistiawan', 'Bambang', '123456789', 'Banjarmasin', '0000-00-00', 'L', '1', '4', '5', '1', 'Jalan Rawa Cangkuk Bumi No.88 Sukaramai Medan', '3 TS 1', 123456789, '021-1234567890', '081234567890', 'path', 1, '185', 70, 1, 0, 0, 5, 5, 5, 5, 5, 0, 0, 1, 0, 0, 1, 0, '111', '111', '111', '111', '111', 111, 111, '111', '111', '111', '111', 18, 8, '111', '111', '111', '111'),
(34, 'Rafael Mujiwijaya', 'Mujijaya', '123456789', 'Banjarmasin', '0000-00-00', 'L', '1', '4', '5', '1', 'Jalan Rawa Cangkuk Bumi No.88 Sukaramai Medan', '3 TS 1', 123456789, '021-1234567890', '081234567890', 'path', 1, '185', 70, 1, 0, 0, 5, 5, 5, 5, 5, 0, 0, 1, 0, 0, 1, 0, '111', '111', '111', '111', '111', 111, 111, '111', '111', '111', '111', 19, 12, '111', '111', '111', '111');

-- --------------------------------------------------------

--
-- Table structure for table `ttk`
--

CREATE TABLE `ttk` (
  `id_tk` int(4) NOT NULL,
  `nama_tk` text NOT NULL,
  `alamat_tk` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttk`
--

INSERT INTO `ttk` (`id_tk`, `nama_tk`, `alamat_tk`) VALUES
(18, 'TK NEGERI 2 SEWON', 'Jl. Parangtritis'),
(19, 'TK NEGERI 4 SEWON', 'Banyon, Pendowo'),
(20, 'TK MUHAMMADIYAH IMOGIRI', 'Jalan Raya Imogiri Pos Imogiri'),
(21, 'TK MUHAMMADIYAH 2 DLINGO', 'Seropan Muntuk Dlingo Bantul'),
(22, 'TK NEGERI 1 DLINGO', 'Jln. Dlingo'),
(23, 'TK PERTIWI 51', 'Mangunan, Dlingo,bantul'),
(24, 'TK ABA MULYODADI II', 'Ngaran'),
(25, 'TK PKK 81 AMONGSIWI', 'Nglarang, Mulyodadi, Bambanglipuro'),
(26, 'TK ABA MULYODADI I PETE', 'Jl. Ir. Juanda Bantul Timur Bantul Trirenggo Bantul 55714'),
(27, 'TK ABA JOGODAYOH II', 'Kadek Wijirejo Pandak Bantul'),
(28, 'TK ABA SIDOMULYO II', 'PLEBENGAN'),
(29, 'TK LKMD NGAMBAH', 'NGAMBAH'),
(30, 'TK ABA NGLAREN', 'BRAJAN'),
(31, 'TK ABA TEGALSARI', 'TEGALSARI'),
(32, 'TK PKK MUTIHAN', 'MUTIHAN RT 03');

-- --------------------------------------------------------

--
-- Table structure for table `tuser`
--

CREATE TABLE `tuser` (
  `id_user` int(10) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`kd_user`);

--
-- Indexes for table `tagama`
--
ALTER TABLE `tagama`
  ADD PRIMARY KEY (`id_agama`);

--
-- Indexes for table `tedu`
--
ALTER TABLE `tedu`
  ADD PRIMARY KEY (`id_edu`);

--
-- Indexes for table `tgoldar`
--
ALTER TABLE `tgoldar`
  ADD PRIMARY KEY (`id_goldar`);

--
-- Indexes for table `tjob`
--
ALTER TABLE `tjob`
  ADD PRIMARY KEY (`id_job`);

--
-- Indexes for table `tortu`
--
ALTER TABLE `tortu`
  ADD PRIMARY KEY (`id_ortu`),
  ADD UNIQUE KEY `job_i` (`job_i`),
  ADD UNIQUE KEY `job_a` (`job_a`),
  ADD UNIQUE KEY `agama_a` (`agama_a`),
  ADD UNIQUE KEY `agama_i` (`agama_i`),
  ADD UNIQUE KEY `edu_a` (`edu_a`),
  ADD UNIQUE KEY `edu_i` (`edu_i`);

--
-- Indexes for table `tprestasi`
--
ALTER TABLE `tprestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `tsd`
--
ALTER TABLE `tsd`
  ADD PRIMARY KEY (`id_sd`);

--
-- Indexes for table `tsiswa`
--
ALTER TABLE `tsiswa`
  ADD PRIMARY KEY (`id_siswa`),
  ADD KEY `id_sd` (`id_sd`);

--
-- Indexes for table `ttk`
--
ALTER TABLE `ttk`
  ADD PRIMARY KEY (`id_tk`);

--
-- Indexes for table `tuser`
--
ALTER TABLE `tuser`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `kd_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tagama`
--
ALTER TABLE `tagama`
  MODIFY `id_agama` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tedu`
--
ALTER TABLE `tedu`
  MODIFY `id_edu` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tgoldar`
--
ALTER TABLE `tgoldar`
  MODIFY `id_goldar` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tjob`
--
ALTER TABLE `tjob`
  MODIFY `id_job` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tortu`
--
ALTER TABLE `tortu`
  MODIFY `id_ortu` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tprestasi`
--
ALTER TABLE `tprestasi`
  MODIFY `id_prestasi` int(3) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tsd`
--
ALTER TABLE `tsd`
  MODIFY `id_sd` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `tsiswa`
--
ALTER TABLE `tsiswa`
  MODIFY `id_siswa` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `ttk`
--
ALTER TABLE `ttk`
  MODIFY `id_tk` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `tuser`
--
ALTER TABLE `tuser`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
