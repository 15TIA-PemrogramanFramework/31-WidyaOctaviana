-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2017 at 12:00 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kangenwater`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal_lahir` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL,
  `waktu_regis` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `foto` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`, `nama`, `tanggal_lahir`, `email`, `status`, `waktu_regis`, `foto`) VALUES
('dia', 'a', 'dia', '12-10-1997', 'dia@gmail.com', 'admin', '2017-11-19 09:23:50', 'profile-pic.jpg'),
('jewe', 'jewe', 'Jaswenny Huang', '06-12-1997', 'jewe@gmail.com', 'pemilik', '2017-11-19 09:29:40', 'admin_1511266333.jpg'),
('kamu', 'kamu', 'kamu', '25-10-1997', 'kamu@gmail.com', 'admin', '2017-11-19 09:14:04', 'profile-pic.jpg'),
('vonny', 'vonny', 'vonnnya', '20-05-18', 'vonnya@gmail.com', 'pemilik', '2017-11-13 13:47:43', 'admin_1511061157.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `harga_barang` int(6) NOT NULL,
  `gambar_barang` varchar(50) NOT NULL,
  `stok_barang` int(6) NOT NULL,
  `detail_barang` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `gambar_barang`, `stok_barang`, `detail_barang`) VALUES
(1, 'Beauty Water', 30000, 'barang_BeautyWater.jpg', 24, 'Digunakan sebagai toner\r\nSebagai isi nano spray\r\nmelembabkan wajah\r\nmeremajakan kulit\r\nmengecilkan pori pori'),
(2, 'Strong Kangen', 12000, 'barang_1511304728.jpg', 29, 'Sebagai CleanserSebagai Make up removerMengurangi minyak berlebih pada wajahmembersihkan mata yang teriritasi');

-- --------------------------------------------------------

--
-- Table structure for table `komentar`
--

CREATE TABLE `komentar` (
  `id_komentar` int(4) NOT NULL,
  `tanggal_komentar` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isi_komentar` varchar(1000) NOT NULL,
  `username` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `komentar`
--

INSERT INTO `komentar` (`id_komentar`, `tanggal_komentar`, `isi_komentar`, `username`) VALUES
(1, '2017-11-10 15:39:12', 'aa bbdasdasdasdas', 'meme');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `tanggal_lahir` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_hp` varchar(14) NOT NULL,
  `waktu_regis` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`username`, `password`, `email`, `foto`, `nama`, `tanggal_lahir`, `alamat`, `no_hp`, `waktu_regis`) VALUES
('a', 'a', 'a', 'MemberFile1510370668.png', 'a', '1', 'a', '1', '2017-11-12 13:47:04'),
('meme', 'meme', 'meme@gmail.com', 'memberfile_1511266150.jpg', 'Erdina Sari', '25/11/1997', 'Rumbai, umban sari atas', '0822 2222 2222', '2017-11-13 13:57:03'),
('yati', 'yati', 'yati@gmail.com', 'member_1511265888.jpg', 'Nurhediyati', '18/08/1997', 'Jalan Alamayang', '0888 8383 1297', '2017-11-13 13:47:04');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id_order` int(4) NOT NULL,
  `id_transaksi` int(4) NOT NULL,
  `id_barang` int(4) NOT NULL,
  `jumlah` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id_order`, `id_transaksi`, `id_barang`, `jumlah`) VALUES
(5, 9, 1, 5),
(6, 9, 2, 1),
(7, 10, 1, 1),
(8, 11, 1, 2),
(9, 12, 1, 2),
(10, 13, 2, 1),
(11, 14, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

CREATE TABLE `testimoni` (
  `id_testimoni` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `waktu_testimoni` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `isi_testimoni` varchar(200) NOT NULL,
  `id_barang` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `testimoni`
--

INSERT INTO `testimoni` (`id_testimoni`, `username`, `waktu_testimoni`, `isi_testimoni`, `id_barang`) VALUES
(3, 'meme', '2017-11-19 14:16:02', 'bagus ,, jerawat hilang semua, muka makin bersih bebas minyak', 1),
(5, 'yati', '2017-11-19 17:32:32', 'BEst EVERR', 1),
(7, 'yati', '2017-11-21 22:36:12', 'mantap abis,, muka serasa lembab dan sehat', 2);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal_transaksi` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `total_transaksi` int(11) NOT NULL,
  `bukti_transaksi` varchar(30) NOT NULL,
  `validasi_bukti` varchar(30) NOT NULL,
  `alamat_tujuan` varchar(30) NOT NULL,
  `nohp` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `kode_pembayaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `total_transaksi`, `bukti_transaksi`, `validasi_bukti`, `alamat_tujuan`, `nohp`, `username`, `kode_pembayaran`) VALUES
(9, '2017-11-05 06:48:54', 62000, 'send2_171028_0007.jpg', 'valid', 'sungaipakning', '082288278801', 'yati', '678863780'),
(10, '2017-11-12 12:21:22', 10000, 'TransaksiFile_1511111453.png', 'valid', 'pakning', '0888', 'meme', '8190467945'),
(11, '2017-11-18 05:09:05', 20000, 'belum', 'belum', 'pakning kuu', '0888', 'meme', '964810694'),
(12, '2017-11-19 18:26:34', 60000, 'belum', 'belum', 'Rumbai Umban Sari', '0888', 'yati', '6209080626'),
(13, '2017-11-21 14:47:24', 30000, 'belum', 'belum', 'Rumbai, umban sari atas', '0822 2222 2222', 'meme', '343388306'),
(14, '2017-11-21 14:47:30', 30000, 'belum', 'belum', 'Rumbai, umban sari atas', '0822 2222 2222', 'meme', '0354974139');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `komentar`
--
ALTER TABLE `komentar`
  ADD PRIMARY KEY (`id_komentar`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id_order`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD UNIQUE KEY `kode_pembayaran` (`kode_pembayaran`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `komentar`
--
ALTER TABLE `komentar`
  MODIFY `id_komentar` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id_order` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
