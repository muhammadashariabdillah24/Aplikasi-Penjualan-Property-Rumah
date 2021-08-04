-- phpMyAdmin SQL Dump
-- version 4.5.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2017 at 04:03 PM
-- Server version: 5.7.11
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rumah`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(10) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` text,
  `nama_lengkap` varchar(100) DEFAULT NULL,
  `alamat` text,
  `no_hp` varchar(20) DEFAULT NULL,
  `foto` text NOT NULL,
  `tentang` text NOT NULL,
  `level` enum('admin') NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `alamat`, `no_hp`, `foto`, `tentang`, `level`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'aw', 'sdfdsgdsg', '09808', 'foto-lastgooglenews-facebookdeepweb2.jpeg', 'Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik Baik baik', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` int(10) NOT NULL,
  `judul` varchar(100) DEFAULT NULL,
  `isi` text,
  `gambar` text,
  `url` text,
  `view` int(100) DEFAULT NULL,
  `tgl_artikel` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_barang`
--

CREATE TABLE `tbl_barang` (
  `id_barang` int(10) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `id_kat` int(10) NOT NULL,
  `status` enum('DI JUAL','DI SEWA') NOT NULL,
  `lokasi` text NOT NULL,
  `luas_tanah` varchar(300) NOT NULL,
  `luas_bangunan` varchar(300) NOT NULL,
  `kamar_tidur` varchar(300) NOT NULL,
  `lantai` varchar(300) NOT NULL,
  `kamar_mandi` varchar(300) NOT NULL,
  `sertifikat` enum('hak guna bangunan','hak milik') NOT NULL,
  `listrik` varchar(100) NOT NULL,
  `deskripsi` text NOT NULL,
  `harga` double NOT NULL,
  `gambar` text NOT NULL,
  `gambar2` text NOT NULL,
  `gambar3` text NOT NULL,
  `gambar4` text NOT NULL,
  `ket` enum('nego','net') NOT NULL,
  `view` int(11) NOT NULL,
  `tgl_barang` varchar(12) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_barang`
--

INSERT INTO `tbl_barang` (`id_barang`, `judul`, `id_kat`, `status`, `lokasi`, `luas_tanah`, `luas_bangunan`, `kamar_tidur`, `lantai`, `kamar_mandi`, `sertifikat`, `listrik`, `deskripsi`, `harga`, `gambar`, `gambar2`, `gambar3`, `gambar4`, `ket`, `view`, `tgl_barang`) VALUES
(4, 'asdfdsf', 1, 'DI JUAL', 'Jambi 1', 'sdjf', 'sljdnfgdjsl', 'sjldfnjdl', 'sldjf', 'sljdnf', 'hak guna bangunan', '', '', 120000000, 'img/barang/1.png', '', '', '', 'nego', 2, '12-11-2017'),
(5, 'yjgfsdf', 2, 'DI SEWA', 'Jambi 2', 'skdjngfdj', 'sljdfgnl', 'skijhgfi', 'lsdnglkd', 'sljdghlds', 'hak guna bangunan', '', '', 190300000, 'img/barang/fb2016_-_Copy.png', '', '', '', 'nego', 2, '12-11-2017'),
(6, 'sefij', 3, 'DI JUAL', 'Jambi 3', 'lsdjfdl', 'sdljfndslf', 'sdklfnhdslkf', 'sldjfndsjlkf', 'sljdnfgdsl', 'hak milik', '1000', 'sdjfhl', 1320000000, 'img/barang/foto-lastgooglenews-facebookdeepweb2.jpeg', 'img/barang/11.png', 'img/barang/fb2016.png', '', 'net', 33, '12-11-2017');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kat`
--

CREATE TABLE `tbl_kat` (
  `id_kat` int(11) NOT NULL,
  `nama_kat` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kat`
--

INSERT INTO `tbl_kat` (`id_kat`, `nama_kat`) VALUES
(1, 'Rumah'),
(2, 'Ruko'),
(3, 'Apartement'),
(4, 'Pabrik'),
(5, 'Gudang'),
(6, 'Tanah Kavling');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kontak`
--

CREATE TABLE `tbl_kontak` (
  `id_kontak` int(11) NOT NULL,
  `nama` text,
  `email` text,
  `komentar` text,
  `tgl_kontak` varchar(12) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_member`
--

CREATE TABLE `tbl_member` (
  `id_member` int(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` text NOT NULL,
  `tgl_daftar` date NOT NULL,
  `terakhir_login` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_member`
--

INSERT INTO `tbl_member` (`id_member`, `nama`, `email`, `no_hp`, `alamat`, `username`, `password`, `tgl_daftar`, `terakhir_login`) VALUES
(2, 'Anwar-kun', 'asd@sdfg.com', 'sdfdsf', 'sdfsdfg', 'member', 'aa08769cdcb26674c6706093503ff0a3', '2017-11-13', '2017-11-15 08:11:01');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web`
--

CREATE TABLE `tbl_web` (
  `id_web` int(10) NOT NULL,
  `nama_web` varchar(100) DEFAULT NULL,
  `telp` text,
  `twitter` text,
  `fb` text,
  `google_plus` text,
  `email` text,
  `alamat` text,
  `embed_lokasi` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_web`
--

INSERT INTO `tbl_web` (`id_web`, `nama_web`, `telp`, `twitter`, `fb`, `google_plus`, `email`, `alamat`, `embed_lokasi`) VALUES
(1, 'E-Property', '08xxxx', 'https://twitter.com/', 'https://facebook.com/', 'https://plus.google.com/', 'email@ordodev.com', 'jambi, xxxxxx', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.2309938548005!2d103.59047141400866!3d-1.6162502365291318!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e25888bda00f9a9%3A0xf31d2243e1bce25c!2sSTMIK+NH+JAMBI!5e0!3m2!1sen!2sid!4v1492084244131');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`);

--
-- Indexes for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `tbl_kat`
--
ALTER TABLE `tbl_kat`
  ADD PRIMARY KEY (`id_kat`);

--
-- Indexes for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `tbl_member`
--
ALTER TABLE `tbl_member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `tbl_web`
--
ALTER TABLE `tbl_web`
  ADD PRIMARY KEY (`id_web`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  MODIFY `id_artikel` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_barang`
--
ALTER TABLE `tbl_barang`
  MODIFY `id_barang` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tbl_kat`
--
ALTER TABLE `tbl_kat`
  MODIFY `id_kat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tbl_kontak`
--
ALTER TABLE `tbl_kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_member`
--
ALTER TABLE `tbl_member`
  MODIFY `id_member` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `tbl_web`
--
ALTER TABLE `tbl_web`
  MODIFY `id_web` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
