-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 14, 2019 at 05:23 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apriori_perpus`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `id_buku` int(11) NOT NULL,
  `judul_buku` varchar(100) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_penulis` int(11) NOT NULL,
  `id_penerbit` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`id_buku`, `judul_buku`, `id_kategori`, `id_penulis`, `id_penerbit`) VALUES
(1, 'Sherlock Holmes', 1, 11, 1),
(2, 'Mikrotik Kungfu kitab 1', 2, 2, 2),
(3, 'Modul Melakukan Instalasi Sistem Operasi Jaringan', 1, 1, 1),
(4, 'Matematika Untuk Smk', 3, 4, 4),
(5, 'Rangkaian Listrik', 6, 1, 1),
(6, 'ande ande lumut', 1, 6, 6),
(7, 'Komunikasi Digital', 2, 7, 7),
(8, 'Sistem Operasi Jaringan', 2, 7, 7),
(9, 'IPS 2', 5, 1, 1),
(10, 'Teknik Perawatan dan Perbaikan Otomotif', 7, 6, 3),
(11, 'Pemeliharaan Sasis Sepeda Motor 2', 7, 4, 4),
(12, 'Geografi', 5, 7, 3),
(13, 'Kamus Bahasa Inggris', 9, 5, 6),
(14, 'Bahasa Indonesia 2', 9, 3, 5),
(15, 'Dasar Pengukuran Listrik', 6, 3, 6),
(16, 'Atlas', 1, 1, 1),
(17, 'Ensiklopedia Sains', 8, 7, 7),
(18, 'Moonlight In Hamburg', 1, 9, 9),
(19, 'Matematika 2', 3, 4, 4),
(20, 'Fiqih', 4, 1, 9),
(21, 'Surgamu Dari Sang Nabi', 4, 10, 10);

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_transaksi` int(11) NOT NULL,
  `id_transaksi` int(11) NOT NULL,
  `id_buku` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_transaksi`, `id_transaksi`, `id_buku`) VALUES
(1, 1110001, 1),
(2, 1110001, 14),
(3, 1110002, 19),
(4, 1110002, 2),
(5, 1110002, 17),
(6, 1110003, 18),
(7, 1110003, 1),
(8, 1110003, 13),
(9, 1110004, 19),
(10, 1110004, 10),
(11, 1110004, 17),
(12, 1110005, 20),
(13, 1110005, 18),
(14, 1110005, 21),
(15, 1110006, 16),
(16, 1110006, 12),
(17, 1110006, 6),
(18, 1110007, 11),
(19, 1110007, 19),
(20, 1110007, 10),
(21, 1110008, 7),
(22, 1110008, 4),
(23, 1110008, 5),
(24, 1110009, 9),
(25, 1110009, 17),
(26, 1110010, 12),
(27, 1110010, 14),
(28, 1110011, 2),
(29, 1110011, 7),
(30, 1110011, 4),
(31, 1110012, 20),
(32, 1110012, 18),
(33, 1110012, 21),
(34, 1110013, 13),
(35, 1110013, 9),
(36, 1110013, 1),
(37, 1110014, 5),
(38, 1110014, 6),
(39, 1110014, 13),
(40, 1110015, 3),
(41, 1110015, 17),
(42, 1110015, 4),
(43, 1110016, 19),
(44, 1110016, 10),
(45, 1110016, 11),
(46, 1110017, 15),
(47, 1110017, 5),
(48, 1110017, 4),
(49, 1110018, 20),
(50, 1110018, 12),
(51, 1110019, 13),
(52, 1110019, 1),
(53, 1110019, 17),
(54, 1110020, 17),
(55, 1110020, 19),
(56, 1110020, 3),
(57, 1110021, 17),
(58, 1110021, 2),
(59, 1110022, 19),
(60, 1110023, 20),
(61, 1110023, 16),
(62, 1110023, 9),
(63, 1110024, 18),
(64, 1110024, 6),
(65, 1110025, 10),
(66, 1110025, 11),
(67, 1110026, 16),
(68, 1110026, 8),
(69, 1110027, 19),
(70, 1110027, 16),
(71, 1110028, 20),
(72, 1110028, 21),
(73, 1110029, 4),
(74, 1110029, 15),
(75, 1110030, 3),
(76, 1110030, 8),
(77, 1110030, 19),
(78, 1110031, 4),
(79, 1110031, 18),
(80, 1110031, 20),
(81, 1110032, 16),
(82, 1110032, 12),
(83, 1110033, 11),
(84, 1110033, 4),
(85, 1110033, 5),
(86, 1110034, 15),
(87, 1110034, 19),
(88, 1110034, 10),
(89, 1110035, 3),
(90, 1110035, 18);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(11) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(1, 'Novel'),
(2, 'Komputer'),
(3, 'Matematika'),
(4, 'Agama'),
(5, 'Sosial dan Geologi'),
(6, 'Elektronika'),
(7, 'Otomotif'),
(8, 'Sains'),
(9, 'Bahasa dan Sastra');

-- --------------------------------------------------------

--
-- Table structure for table `penerbit`
--

CREATE TABLE `penerbit` (
  `id_penerbit` int(11) NOT NULL,
  `nama_penerbit` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penerbit`
--

INSERT INTO `penerbit` (`id_penerbit`, `nama_penerbit`, `alamat`) VALUES
(1, 'gramedia pustaka', 'jln gelatik no 13 sleman'),
(2, 'Jasakom', 'Lubuk Gadang Tim., Sangir, Kabupaten Solok Selatan, Sumatera Barat'),
(3, 'Erlangga', 'Jl. H. Baping No. 100, Ciracas, Jakarta Timur, Indonesia'),
(4, 'Gelatik', 'jl. Padjajaran no 19 bandung'),
(5, 'Andi ', 'Jl. Beo No.38-40, Mrican, Caturtunggal, Kec. Depok, Kabupaten Sleman'),
(6, 'Karya Agung', ' TB. Aiman Jl. A.Yani No. 433 Bandung'),
(7, 'graha pustaka', 'jl tentara pelajar bandung'),
(8, 'Atlas Media', 'jln padega marta no 19 ungaran'),
(9, 'Zahra', 'JL. Palagan Tentara Pelajar, No. 100 C, Gg. Gambir Jongkang Sariharjo, Mudal, Sariharjo, Yogyakarta'),
(10, 'Pustaka Anggrek', 'Jl. Mawar Tengah No.72, Baciro, Yogyakarta');

-- --------------------------------------------------------

--
-- Table structure for table `penulis`
--

CREATE TABLE `penulis` (
  `id_penulis` int(11) NOT NULL,
  `nama_penulis` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis`
--

INSERT INTO `penulis` (`id_penulis`, `nama_penulis`) VALUES
(1, 'didin suprihatin'),
(2, 'Towidjodjo, Rendra'),
(3, 'Andi Novianto & Muh. Kasmadi'),
(4, 'Endri'),
(5, 'Cekmas Cekdin dan Taufik Barlian'),
(6, 'TIRA IKRANEGARA'),
(7, 'sudirman'),
(8, 'Toni Suprapto'),
(9, 'Ika Yunia Fauzia'),
(10, 'Kahlil Gibran'),
(11, 'Sir Arthur Conan Doyle');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal`) VALUES
(1110001, '2018-12-01'),
(1110002, '2018-12-02'),
(1110003, '2018-12-02'),
(1110004, '2018-12-03'),
(1110005, '2018-12-03'),
(1110006, '2018-12-03'),
(1110007, '2018-12-04'),
(1110008, '2018-12-05'),
(1110009, '2018-12-05'),
(1110010, '2018-12-06'),
(1110011, '2018-12-06'),
(1110012, '2018-12-06'),
(1110013, '2018-12-07'),
(1110014, '2018-12-07'),
(1110015, '2018-12-07'),
(1110016, '2018-12-08'),
(1110017, '2018-12-10'),
(1110018, '2018-12-10'),
(1110019, '2018-12-10'),
(1110020, '2018-12-11'),
(1110021, '2018-12-11'),
(1110022, '2018-12-11'),
(1110023, '2018-12-12'),
(1110024, '2018-12-12'),
(1110025, '2018-12-12'),
(1110026, '2018-12-13'),
(1110027, '2018-12-14'),
(1110028, '2018-12-15'),
(1110029, '2018-12-15'),
(1110030, '2018-12-15'),
(1110031, '2018-12-17'),
(1110032, '2018-12-18'),
(1110033, '2018-12-18'),
(1110034, '2018-12-19'),
(1110035, '2018-12-19');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`id_buku`),
  ADD KEY `id_penulis` (`id_penulis`),
  ADD KEY `id_penerbit` (`id_penerbit`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_transaksi`),
  ADD KEY `detail_transaksi_ibfk_2` (`id_buku`),
  ADD KEY `detail_transaksi_ibfk_1` (`id_transaksi`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `penerbit`
--
ALTER TABLE `penerbit`
  ADD PRIMARY KEY (`id_penerbit`);

--
-- Indexes for table `penulis`
--
ALTER TABLE `penulis`
  ADD PRIMARY KEY (`id_penulis`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buku`
--
ALTER TABLE `buku`
  MODIFY `id_buku` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=91;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `penerbit`
--
ALTER TABLE `penerbit`
  MODIFY `id_penerbit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `penulis`
--
ALTER TABLE `penulis`
  MODIFY `id_penulis` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1110036;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buku`
--
ALTER TABLE `buku`
  ADD CONSTRAINT `buku_ibfk_1` FOREIGN KEY (`id_penulis`) REFERENCES `penulis` (`id_penulis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buku_ibfk_2` FOREIGN KEY (`id_penerbit`) REFERENCES `penerbit` (`id_penerbit`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `buku_ibfk_3` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id_kategori`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD CONSTRAINT `detail_transaksi_ibfk_1` FOREIGN KEY (`id_transaksi`) REFERENCES `transaksi` (`id_transaksi`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_transaksi_ibfk_2` FOREIGN KEY (`id_buku`) REFERENCES `buku` (`id_buku`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
