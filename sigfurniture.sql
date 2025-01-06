-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 24, 2016 at 12:43 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `umkmpdmw`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `nama_pemilik` varchar(35) NOT NULL,
  `nama_umkm` varchar(50) NOT NULL,
  `alamat` varchar(250) NOT NULL,
  `usaha` varchar(25) NOT NULL,
  `jenis_usaha` varchar(35) NOT NULL,
  `desa` varchar(35) NOT NULL,
  `kriteria` varchar(35) NOT NULL,
  `kontak` varchar(35) NOT NULL,
  `lat` varchar(50) NOT NULL,
  `longi` varchar(50) NOT NULL,
  `keterangan` varchar(250) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=35 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `nama_pemilik`, `nama_umkm`, `alamat`, `usaha`, `jenis_usaha`, `desa`, `kriteria`, `kontak`, `lat`, `longi`, `keterangan`) VALUES
(2, 'Slamet Abu Riyandi', 'Aryans.net', 'Pademawu', 'Jasa', 'Warnet', 'Pademawu Barat', 'Kecil', '068940', '-7.1674851', '113.4820967', 'Percobaan'),
(3, 'Sumiati', 'manis', 'Dsn. Jarin', 'Dagang', 'Peracang', 'Jarin', 'Mikro', '0439589', '-17.18', '113.4835627', ''),
(4, 'Abdul Shofi', 'Jarin Gokil', 'Jarin', 'Industri', 'Meracang', 'Jarin', 'Menengah', '083439492', '-39874339', '39457934', ''),
(6, 'Mohammad Rofik', 'OFIK MEDIA', 'Pantai Prigi', 'Industri', 'Software', 'Majungan', 'Menengah', '083439492', '', '11,203948032', 'test'),
(20, 'Kholiq Abdullah', 'PHP', 'Dusun Batu', 'Industri', 'Mebel', 'Barurambat Timur', 'Kecil', '039840840', '-3849', '374739403', 'coba coba'),
(23, 'Mawaddah', 'Mawaddah Cell', 'Laper', 'Jasa', 'Konter', 'Lemper', 'Mikro', '0123238', '-894793', '-3483749', 'percobaan'),
(24, 'Ulfa Laili Suciati', 'Ulfa L Shoper', 'Sentol', 'Dagang', 'Meracang', 'Sentol', 'Menengah', '08776945799', '948594', '304930', 'coba coba'),
(25, 'Ali Qosim', 'Qosim Studio', 'Jl. Kelinci', 'Jasa', 'Studio Foto', 'Sopaah', 'Mikro', '12345', '-7.159680', '113.4858405', 'Pecobaan Selesai'),
(26, 'Fauziyah', 'PAOSI', 'Tambung City', 'Dagang', 'PAOSI OS', 'Tambung', 'Kecil', '02834934', '-7.189682', '113.5678', 'Percobaan'),
(27, 'Titin Herlyna Agustia', 'AGUS CELL', 'Bun Temur', 'Jasa', 'Konter', 'Pademawu Timur', 'Mikro', '12345', '-7.1235', '112.334049', 'Percobaan'),
(29, 'Ali Wafa', 'Ali Jaya Sukses', 'Jalan Cemara Kembar', 'Jasa', 'Mebel', 'Pademawu Timur', 'Kecil', '12345', '-17.18', '112.84', 'Coba'),
(30, 'Samsul Arifin', 'CobaCoba', 'baddu', 'Industri', 'CobaCoba', 'Baddurih', 'Mikro', '123', '', '113', 'coba'),
(34, 'Imamatur Rohmah', 'IiemChaleem Studio', 'Jl. Chaleem 123', 'Jasa', 'Software House', 'Lemper', 'Menengah', '1234567', '-7.1674851', '112.84', 'Percobaan Tambah');

-- --------------------------------------------------------

--
-- Table structure for table `desa`
--

CREATE TABLE IF NOT EXISTS `desa` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `longi` varchar(150) NOT NULL,
  `lati` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=23 ;

--
-- Dumping data for table `desa`
--

INSERT INTO `desa` (`id`, `nama`, `longi`, `lati`) VALUES
(1, 'Jarin', '113.4909597', '-7.2149781'),
(2, 'Baddurih', '113.4747267', '-7.2155811'),
(3, 'Sentol', '113.4963867', '-7.1392952'),
(4, 'Barurambat Timur', '113.4820967', '-7.1674851'),
(5, 'Buddagan', '113.4969022', '-7.1603622'),
(6, 'Buddih', '', ''),
(7, 'Bunder', '', ''),
(8, 'Dasok', '', ''),
(9, 'Durbuk', '', ''),
(10, 'Lawangan Daya', '', ''),
(11, 'Lemper', '', ''),
(12, 'Majungan', '', ''),
(13, 'Murtajih', '', ''),
(14, 'Padelegan', '', ''),
(15, 'Pademawu Barat', '', ''),
(16, 'Pademawu Timur', '', ''),
(17, 'Pagagan', '', ''),
(18, 'Prekbun', '', ''),
(19, 'Tanjung', '', ''),
(20, 'Sopaah', '', ''),
(21, 'Sumedangan', '', ''),
(22, 'Tambung', '113.83', '-7.84');

-- --------------------------------------------------------

--
-- Table structure for table `profil`
--

CREATE TABLE IF NOT EXISTS `profil` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `judul` varchar(100) NOT NULL,
  `artikel` text NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `profil`
--

INSERT INTO `profil` (`id`, `judul`, `artikel`, `ket`) VALUES
(1, 'Profil Pademawu', '<strong>Gambaran umum Kecamatan Pademawu</strong>\r\n<br>\r\nKecamatan Pademawu merupakan salah satu kecamatan yang berada di pesisir selatan Kabupaten Pamekasan. Wilayah bagian utara kecamatan ini berdampingan dengan Kecamatan Galis, sedangkan bagian selatan dibatasi oleh Selat Madura. Pada wilayah barat, berdampingan dengan dua kecamatan, yaitu Tlanakan dan Pamekasan, sedangkan di wilayah timur berdampingan dengan Kecamatan Galis dan selat Madura.\r\n<br> <br>\r\nSecara astronomis Kecamatan Pademawu berada pada posisi 113019â€™ â€“ 113058â€™ BT dan 6051â€™ â€“ 7031â€™ , sedangkan luas wilayahnya mencapai 7.219 Ha. Menurut tingkat kelerengan, Kecamatan Pademawu seluruh wilayahnya termasuk katagori landai karena  hanya berada dalam rentang 0 - 150.\r\n<br> <br>\r\nPada Tahun 2014 jumlah penduduk Kecamatan Pademawu mencapai 80.430 jiwa dengan rincian 39.520 orang berjenis kelamin laki-laki dan 40.910 orang berjenis kelamin perempuan. Jumlah penduduk terbesar berada di Kelurahan Lawangan Daya sebanyak 6.977 jiwa, sedangkan jumlah terkecil berada di Desa Prekbun sebanyak 1.024 Jiwa. Jumlah penduduk di desa dan kelurahan lainnya berada pada rentang 1.020 sampai 6.133 Jiwa. ', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(35) NOT NULL,
  `jendre` varchar(25) NOT NULL,
  `username` varchar(35) NOT NULL,
  `pass` varchar(35) NOT NULL,
  `ket` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `jendre`, `username`, `pass`, `ket`) VALUES
(1, 'Mohammad Rofik', 'Laki Laki', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Pemegang Kendali');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
