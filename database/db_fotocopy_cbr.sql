-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 11:24 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_fotocopy_cbr`
--

-- --------------------------------------------------------

--
-- Table structure for table `analisa_hasil`
--

CREATE TABLE `analisa_hasil` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` char(10) NOT NULL,
  `merk` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `kd_kerusakan` char(4) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `analisa_hasil`
--

INSERT INTO `analisa_hasil` (`id`, `nama`, `kelamin`, `merk`, `alamat`, `kd_kerusakan`, `tanggal`) VALUES
(1, 'Leny', 'P', 'HP', 'Bekasi', 'P003', '2016-09-29 11:40:13'),
(2, 'Leny', 'P', 'HP', 'Bekasi', 'P003', '2016-09-29 11:40:13'),
(3, 'Leny', 'P', 'HP', 'Bekasi', 'P005', '2016-09-29 11:40:13'),
(17, '', '', '', '', 'P001', '0000-00-00 00:00:00'),
(5, 'Leny', 'P', 'HP', 'Bekasi', 'P005', '2016-09-29 11:40:13'),
(6, '', '', '', '', 'P003', '0000-00-00 00:00:00'),
(7, 'Leny', 'P', 'HP', 'Bekasi', 'P005', '2016-09-29 11:40:13'),
(8, '', '', '', '', 'P003', '0000-00-00 00:00:00'),
(9, 'Leny', 'P', 'HP', 'Bekasi', 'P005', '2016-09-29 11:40:13'),
(10, '', '', '', '', 'P003', '0000-00-00 00:00:00'),
(11, 'Leny', 'P', 'HP', 'Bekasi', 'P005', '2016-09-29 11:40:13'),
(12, 'Leny', 'P', 'HP', 'Bekasi', 'P003', '2016-09-29 11:40:13'),
(13, 'Leny', 'P', 'HP', 'Bekasi', 'P001', '2016-09-29 11:40:13'),
(14, 'Leny', 'P', 'HP', 'Bekasi', 'P003', '2016-09-29 11:40:13'),
(15, 'Fadhil', 'L', 'HP', 'Ciredup', 'P003', '2017-01-24 10:40:48'),
(16, 'Fadhil', 'L', 'HP', 'Ciredup', 'P001', '2017-01-24 10:40:48'),
(18, 'Muttakin', 'L', 'Canon', 'Banda', 'P002', '2017-03-14 11:25:55'),
(19, '', '', '', '', 'P001', '0000-00-00 00:00:00'),
(20, 'Muttakin', 'L', 'Canon', 'Banda', 'P002', '2017-03-14 11:25:55'),
(21, '', '', '', '', 'P001', '0000-00-00 00:00:00'),
(22, 'Muttakin', 'L', 'Canon', 'Banda', 'P002', '2017-03-14 11:25:55'),
(23, '', '', '', '', 'P001', '0000-00-00 00:00:00'),
(24, '', '', '', '', 'P001', '0000-00-00 00:00:00'),
(25, '', '', '', '', 'P001', '0000-00-00 00:00:00'),
(26, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(27, '', '', '', '', 'P001', '0000-00-00 00:00:00'),
(28, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(29, '', '', '', '', 'P001', '0000-00-00 00:00:00'),
(30, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(31, '', '', '', '', 'P001', '0000-00-00 00:00:00'),
(32, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(33, '', '', '', '', 'P001', '0000-00-00 00:00:00'),
(34, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(35, '', '', '', '', 'P001', '0000-00-00 00:00:00'),
(36, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(37, '', '', '', '', '', '0000-00-00 00:00:00'),
(38, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(39, '', '', '', '', '', '0000-00-00 00:00:00'),
(40, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(41, '', '', '', '', '', '0000-00-00 00:00:00'),
(42, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(43, '', '', '', '', '', '0000-00-00 00:00:00'),
(44, 'Rizal', 'L', 'Canon', 'Langsa', 'P002', '2017-07-13 15:59:20'),
(45, '', '', '', '', '', '0000-00-00 00:00:00'),
(46, 'Rudi', 'L', 'Canon', 'Lhoksukon', 'P002', '2017-07-13 16:38:10'),
(47, 'Rudi', 'L', 'Canon', 'Lhoksukon', 'P001', '2017-07-13 16:38:10'),
(48, 'Rudi', 'L', 'Canon', 'Lhoksukon', 'P002', '2017-07-13 16:38:10'),
(49, 'Rudi', 'L', 'Canon', 'Lhoksukon', 'P001', '2017-07-13 16:38:10'),
(50, '', '', '', '', '', '0000-00-00 00:00:00'),
(51, '', '', '', '', '', '0000-00-00 00:00:00'),
(52, 'arif', 'L', 'Canon', 'a', '', '2017-07-17 19:37:41'),
(53, 'arif', 'L', 'Canon', 'a', 'P001', '2017-07-17 19:37:41'),
(54, 'arif', 'L', 'Canon', 'a', 'p004', '2017-07-17 19:37:41'),
(55, 'arif', 'L', 'Canon', 'a', 'P001', '2017-07-17 19:37:41'),
(56, 'arif', 'L', 'Canon', 'a', 'P005', '2017-07-17 19:37:41'),
(57, 'Rudi', 'L', 'Canon', 'Lhok', 'P002', '2017-09-30 19:09:22'),
(58, 'Rudi', 'L', 'Canon', 'Lhok', 'P001', '2017-09-30 19:09:22'),
(59, 'Jamal', 'L', 'Zirex', 'Lhokseumawe', 'P001', '2021-02-22 14:42:33'),
(60, 'Jamal', 'L', 'Canon', 'Lhoksukon', 'P001', '2021-04-05 02:51:00'),
(61, 'Halimah', 'P', 'Canon', 'Geudong', 'K01', '2021-04-08 11:29:41'),
(62, 'Halimah', 'P', 'Canon', 'Geudong', 'K01', '2021-04-08 11:29:41'),
(63, 'Jalml', 'L', 'Canon', 'Mane Kareung', 'K01', '2021-05-04 01:03:43'),
(64, 'Rasi', 'L', 'Canon', 'Grugok', 'K01', '2021-05-09 15:37:24'),
(65, 'Rasi', 'L', 'Canon', 'Grugok', 'K01', '2021-05-09 15:37:24'),
(66, 'Rasi', 'L', 'Canon', 'Grugok', 'K01', '2021-05-09 15:37:24'),
(67, 'Rasi', 'L', 'Canon', 'Grugok', 'K01', '2021-05-09 15:37:24');

-- --------------------------------------------------------

--
-- Table structure for table `gejala`
--

CREATE TABLE `gejala` (
  `kd_gejala` varchar(3) DEFAULT NULL,
  `gejala` varchar(120) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gejala`
--

INSERT INTO `gejala` (`kd_gejala`, `gejala`) VALUES
('G01', 'Kertas tidak jalan dari kaset kertas'),
('G02', 'Kertas ditarik double'),
('G03', 'Perjalanan continiu/berangkap tidak stabil'),
('G04', 'Muncul kode Error 100-002'),
('G05', 'Hasil blank hitam'),
('G06', 'Hasil putih polos'),
('G07', 'Muncul kode Error 061-002'),
('G08', 'Kertas berlipat dibawah drum'),
('G09', 'Muncul kode Error 061-004'),
('G10', 'Hasil buram sebagian/hasil buram membentuk garis lurus'),
('G11', 'Background bintik-bintik pada permukaan kertas'),
('G12', 'Kertastidak lewat dari roll'),
('G13', 'Muncul kode Error 014-005'),
('G14', 'Muncul kode Error 005-001'),
('G15', 'Muncul kode Error 020-001'),
('G16', 'Hasil copyan bergelombang'),
('G17', 'Hasil copyan tidak rata/buram pada sebagian hasil copyan'),
('G18', 'Muncul kode Error 315-001'),
('G19', 'Layar pada monitor tidak tampil'),
('G20', 'Mesin tidak terdeteksi arus'),
('G21', 'Hasil copyan bintik-bintik'),
('G22', 'Hasil bergaris panjang'),
('G23', 'Hasil copyan buram merata'),
('G24', 'Hasil copyan tidak melekat pada kertas'),
('G25', 'Muncul kode Error 350-002'),
('G26', 'Kertastidak lewat dari try ADF'),
('G27', 'Kertas nyangkut di karet delivery'),
('G28', 'Swing duplex tidak berfungsi'),
('G29', 'Muncul kode Jamed paper'),
('G30', 'Mesin tidak hidup/ mati total'),
('G31', 'Muncul kode Error 064-002'),
('G32', 'Muncul beberapa garis pada hasil copyan');

-- --------------------------------------------------------

--
-- Table structure for table `kerusakan`
--

CREATE TABLE `kerusakan` (
  `kd_kerusakan` char(4) NOT NULL,
  `jenis_kerusakan` varchar(200) DEFAULT NULL,
  `definisi` text,
  `solusi` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kerusakan`
--

INSERT INTO `kerusakan` (`kd_kerusakan`, `jenis_kerusakan`, `definisi`, `solusi`) VALUES
('K01', 'Karet delivery/Sponge Roll sudah tidak kasar', 'Roller pick up sendiri merupakan roller yang posisinya berada di paling ujung dari deck paper. Bagian fotocopy ini memiliki fungsi sebagai pengambil atau penarik kertas. Jadi, apabila mesin fotocopy mengalami masalah dalam menarik kertas, mungkin hal tersebut disebabkan oleh roller pick up yang sudah aus dan perlu segera diganti.', 'Mengganti Spong roller, ini juga sangat berpengaruh dalam hal penarikan kertas apbila spong roll ini sudah aus atau kondisinya sudah tidak bagus lagi maka akan menyebabkan terjadinya kertas nyangkut atau malah kertas tidak akan bisa jalan sama sekali, jadi sebaiknya lakukan pergantian pada spongroll ini sebelum mengakibatkan kerusakan pada part yang lainnya. '),
('K02', 'Laser bermasalah', 'Laser bermasalah code eror:E100 Penyebab utama: The BD PCB rusak. Unit laser rusak. Sopir Laser PCB isfaulty. Kabel rusak hubung singkat, rangkaian terbuka The DC controller PCB adalah faulty.', '1.Â Pertama dan utama lakukan clear terlebih dahulu, biasanya penyakit yang belum akut akan sembuh hanya dengan clear error saja.\r\n\r\n2.Â Ada kemungkinan saat anda melepas drum lalu memasangnya kembali, anda mengencangkan bautnya kurang kencang atau ada sedikit kelonggaran pada drum yang tidak tepat pada dudukannya.\r\n\r\n\r\n3.Â Shutter pada komponen laser tidak terbuka oleh drum unit saat mesin dihidupkan, shutter laser adalah unit yang berada tepat diatas unit drum, sebagai media yang akan memberikan sinar kepada drum dengan kode-kode digital.'),
('K03', 'HVT Unit tidak normal', 'Kerusakan hvt tidak terlihat secara fisik, selama kerusakan tersebut tidak disebabkan oleh pihak ketiga seperti tikus yang suka mengigit kabel, namun untuk menunjuk hvt sebagai penyebab kerusakan merupakan pilihan terakhir setelah anda melakukan beberapa analisa dan langkah-langkah perbaikan yang semestinya, namun belum mampu menemukan penyebab kerusakan kualitas hasil fotocopy.', 'Ganti HVT dengan unit yang baru.'),
('K04', 'Corona Wire/ primary carge kotor/putus', '-', '-'),
('K05', 'Primary transfer/separation kotor/putus', '-', '-'),
('K06', 'Gear 52/45 kotor/pecah', '-', '-'),
('K07', 'Cleaning web habis', '-', '-'),
('K08', 'Developping Unit tidak normal', '-', '-'),
('K09', 'Motherboard kotor/tidak normal', '-', '-'),
('K10', 'Permukaan drum bergaris/elemen heater tidak normal', '-', '-'),
('K11', 'Pemanas(heater roll) longgar atau luka', '-', '-');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL DEFAULT '',
  `password` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `relasi`
--

CREATE TABLE `relasi` (
  `id_relasi` int(4) NOT NULL,
  `kd_gejala` char(4) NOT NULL,
  `kd_kerusakan` char(4) NOT NULL,
  `bobot` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `relasi`
--

INSERT INTO `relasi` (`id_relasi`, `kd_gejala`, `kd_kerusakan`, `bobot`) VALUES
(1, 'G01', 'K01', 0.8),
(2, 'G02', 'K01', 0.4),
(3, 'G03', 'K01', 0.6),
(4, 'G04', 'K02', 1),
(5, 'G05', 'K02', 0.6),
(6, 'G06', 'K03', 0.2),
(7, 'G07', 'K03', 1),
(8, 'G08', 'K03', 0.4),
(9, 'G05', 'K04', 0.4),
(10, 'G06', 'K04', 0.6),
(11, 'G09', 'K04', 1),
(12, 'G10', 'K04', 0.8),
(13, 'G06', 'K05', 1),
(14, 'G08', 'K05', 0.6),
(15, 'G11', 'K05', 0.4),
(16, 'G12', 'K06', 1),
(17, 'G13', 'K06', 0.8),
(18, 'G14', 'K07', 1),
(19, 'G15', 'K08', 1),
(20, 'G16', 'K08', 0.6),
(21, 'G17', 'K08', 0.4),
(22, 'G18', 'K09', 1),
(23, 'G19', 'K09', 0.6),
(24, 'G20', 'K09', 0.4),
(25, 'G21', 'K10', 1),
(26, 'G22', 'K10', 0.4),
(27, 'G23', 'K10', 0.4),
(28, 'G22', 'K11', 0.6),
(29, 'G24', 'K11', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_analisa`
--

CREATE TABLE `tmp_analisa` (
  `noip` varchar(30) NOT NULL,
  `kd_penyakit` char(4) NOT NULL,
  `kd_gejala` char(4) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tmp_gejala`
--

CREATE TABLE `tmp_gejala` (
  `noip` int(3) NOT NULL,
  `kd_gejala` char(4) NOT NULL,
  `bobot` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_gejala`
--

INSERT INTO `tmp_gejala` (`noip`, `kd_gejala`, `bobot`) VALUES
(131056, 'G01', 0),
(131057, 'G02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_kerusakan`
--

CREATE TABLE `tmp_kerusakan` (
  `noip` varchar(30) NOT NULL,
  `kd_kerusakan` char(4) NOT NULL,
  `nilai` double NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_kerusakan`
--

INSERT INTO `tmp_kerusakan` (`noip`, `kd_kerusakan`, `nilai`) VALUES
('', 'P001', 0.15789473684211),
('', 'P002', 0.2),
('', 'P003', 0),
('', 'p004', 0),
('', 'P005', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tmp_pasien`
--

CREATE TABLE `tmp_pasien` (
  `id` int(4) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `kelamin` char(10) NOT NULL,
  `merk` varchar(15) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `noip` varchar(30) NOT NULL,
  `tanggal` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tmp_pasien`
--

INSERT INTO `tmp_pasien` (`id`, `nama`, `kelamin`, `merk`, `alamat`, `noip`, `tanggal`) VALUES
(125, 'Halimah', 'P', 'Canon', 'Geudong', '127.0.0.1', '2021-04-08 11:29:41'),
(127, 'Rasi', 'L', 'Canon', 'Grugok', '::1', '2021-05-09 15:37:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kerusakan`
--
ALTER TABLE `kerusakan`
  ADD PRIMARY KEY (`kd_kerusakan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `relasi`
--
ALTER TABLE `relasi`
  ADD PRIMARY KEY (`id_relasi`);

--
-- Indexes for table `tmp_analisa`
--
ALTER TABLE `tmp_analisa`
  ADD PRIMARY KEY (`noip`);

--
-- Indexes for table `tmp_gejala`
--
ALTER TABLE `tmp_gejala`
  ADD PRIMARY KEY (`noip`);

--
-- Indexes for table `tmp_pasien`
--
ALTER TABLE `tmp_pasien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `analisa_hasil`
--
ALTER TABLE `analisa_hasil`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `relasi`
--
ALTER TABLE `relasi`
  MODIFY `id_relasi` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `tmp_gejala`
--
ALTER TABLE `tmp_gejala`
  MODIFY `noip` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=131058;

--
-- AUTO_INCREMENT for table `tmp_pasien`
--
ALTER TABLE `tmp_pasien`
  MODIFY `id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=128;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
