-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 12, 2024 at 12:31 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `immumtazzah`
--

-- --------------------------------------------------------

--
-- Table structure for table `caraousel`
--

CREATE TABLE `caraousel` (
  `id_caraousel` int NOT NULL,
  `judul` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `deskripsi` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `caraousel`
--

INSERT INTO `caraousel` (`id_caraousel`, `judul`, `foto`, `deskripsi`) VALUES
(31, 'IMMUMTAZAH TERAPHY CENTER', '20241112Nov0754.jpg', 'Rumah Terapi Akupuntur, Bekam, Spa dan Estetika yang sudah Memiliki Surat Izin dan Sudah Bersertifikasi.'),
(32, 'IMMUMTAZAH AKUPUNTUR', '20241112Nov1216.jpg', 'Kami Melayani terapi akupunktur untuk kesehatan dan kecantikan,'),
(33, 'MUMTAZ RELAKSASI khusus wanita', '20241112Nov1318.jpg', 'Kami memiliki layanan relaksasi khusus wanita, menghadirkan pengalaman yang penuh kelembutan dan ketenangan untuk memulihkan kesegaran tubuh serta pikiran.'),
(34, 'IMMUMTAZAH HOMECARE', '20241112Nov1402.jpg', 'People : Mau terapi di rumah saja apa bisa ?  Im : Dengan Immumtazah Teraphy kami akan siap melayani anda');

-- --------------------------------------------------------

--
-- Table structure for table `galeri`
--

CREATE TABLE `galeri` (
  `id_galeri` int NOT NULL,
  `judul` varchar(60) NOT NULL,
  `foto` varchar(30) NOT NULL,
  `tanggal` date NOT NULL,
  `isifoto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `galeri`
--

INSERT INTO `galeri` (`id_galeri`, `judul`, `foto`, `tanggal`, `isifoto`) VALUES
(11, 'dalam1', '20241110Nov4823.jpg', '2024-11-10', 'dalam1'),
(12, 'dalam2', '20241110Nov4836.jpg', '2024-11-10', 'dalam2'),
(13, 'luar1', '20241110Nov4857.jpg', '2024-11-10', 'luar1'),
(14, 'pasien1', '20241110Nov0801.jpg', '2024-11-10', 'pasien1'),
(15, 'pasien2', '20241110Nov0828.jpg', '2024-11-10', 'pasien2'),
(16, 'pasien3', '20241110Nov0842.jpg', '2024-11-10', 'pasien3'),
(17, 'pasien4', '20241110Nov0855.jpg', '2024-11-10', 'pasien4'),
(18, 'dalam3', '20241110Nov0942.jpg', '2024-11-10', 'dalam3');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int NOT NULL,
  `nama_kategori` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`) VALUES
(13, 'Akupuntur'),
(14, 'Spa'),
(15, 'Bekam');

-- --------------------------------------------------------

--
-- Table structure for table `konfigurasi`
--

CREATE TABLE `konfigurasi` (
  `id_konfigurasi` int NOT NULL,
  `judul_website` varchar(60) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `profil_website` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `instagram` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `facebook` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `telepon` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `alamat` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konfigurasi`
--

INSERT INTO `konfigurasi` (`id_konfigurasi`, `judul_website`, `profil_website`, `instagram`, `facebook`, `telepon`, `alamat`) VALUES
(1, 'Immumtazah', 'Akupunktur Bekam dan Spa Karanganyar', 'https://instagram.com/immumtazah_teraphycenter', 'https://facebook.com/iimprincessedjatie', 'https://wa.me/+6281225210252', 'https://maps.app.goo.gl/JJijQLeMTyCkst4U7');

-- --------------------------------------------------------

--
-- Table structure for table `konten`
--

CREATE TABLE `konten` (
  `id_konten` int NOT NULL,
  `judul` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `keterangan` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci,
  `foto` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `slug` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `id_kategori` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `konten`
--

INSERT INTO `konten` (`id_konten`, `judul`, `keterangan`, `foto`, `slug`, `id_kategori`, `tanggal`, `username`) VALUES
(48, 'Layanan Bekam', 'Bekam Kering \r\nRp.40.000,-\r\nBekam Basah \r\nRp.50.000,-\r\nBekam Api \r\nRp.50.000,-', '20241110Nov3810.jpg', 'layanan-bekam', '15', '2024-11-10', 'admin'),
(49, 'MUMTAZ BODY SPA', '(Pijat Tuina Badan + Acupresur + Totok Wajah) Rp.170.000,-\r\n(Pijat Tuina Badan + Acupresur + Lulur Badan + Totok Wajah) Rp.220.000,-', '20241110Nov3947.jpg', 'mumtaz-body-spa', '14', '2024-11-10', 'admin'),
(50, 'Layanan Akupuntur', 'Akupuntur Kesehatan Rp.40.000,-\r\nAkupuntur Kecantikan Rp.60.000,-\r\nAkupuntur Interfilitas Rp.75.000,-', '20241110Nov4731.jpg', 'layanan-akupuntur', '13', '2024-11-10', 'admin'),
(51, 'Paket', 'Paket Terapi\r\n\r\nBekam + Akupuntur Rp.60.000,-\r\nFacial + Akupuntur Rp.85.000,-', '20241110Nov0153.jpg', 'paket', '13', '2024-11-10', 'admin'),
(52, 'MUMTAZ BODY SPA RATUS', '(Pijat Tuina Badan + Acupresur + Lulur Badan + Totok Wajah + Ratus) Rp.230.000,-\r\n\r\n', '20241110Nov0425.jpg', 'mumtaz-body-spa-ratus', '14', '2024-11-10', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_team` int NOT NULL,
  `foto` varchar(100) NOT NULL,
  `nama` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `info` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_team`, `foto`, `nama`, `info`) VALUES
(4, '20241110Nov0619.jpg', 'Sekar Ayu Pangesti, A.Md. Akup', 'Terapist'),
(5, '20241110Nov0646.jpg', 'Alfani Yasir Farhani,Amd.Akup', 'Terapist'),
(6, '20241110Nov0711.jpg', ' Isnaini Noor Azizah, S.Tr. Akup', 'Terapist');

-- --------------------------------------------------------

--
-- Table structure for table `testimonial`
--

CREATE TABLE `testimonial` (
  `id_testimonial` int NOT NULL,
  `foto` varchar(100) NOT NULL,
  `judul` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `testimonial`
--

INSERT INTO `testimonial` (`id_testimonial`, `foto`, `judul`) VALUES
(12, '20241110Nov2719.jpg', 'testi3'),
(13, '20241110Nov2748.jpg', 'testi4'),
(14, '20241110Nov2803.jpg', 'testi5'),
(15, '20241110Nov2839.jpg', 'testi6'),
(16, '20241111Nov3431.jpg', 'tets7');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `username` varchar(70) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `nama` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `password` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `level` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci DEFAULT NULL,
  `recent_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `nama`, `password`, `level`, `recent_login`) VALUES
(9, 'kontributor', 'kontributor', '202cb962ac59075b964b07152d234b70', 'Kontributor', NULL),
(12, 'lala', 'lalaaa', '202cb962ac59075b964b07152d234b70', 'Admin', NULL),
(15, 'sasa', 'sasa', 'f45731e3d39a1b2330bbf93e9b3de59e', 'Admin', '2024-11-10 16:44:43'),
(16, 'admin', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', '2024-11-12 18:43:14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `caraousel`
--
ALTER TABLE `caraousel`
  ADD PRIMARY KEY (`id_caraousel`);

--
-- Indexes for table `galeri`
--
ALTER TABLE `galeri`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  ADD PRIMARY KEY (`id_konfigurasi`);

--
-- Indexes for table `konten`
--
ALTER TABLE `konten`
  ADD PRIMARY KEY (`id_konten`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_team`);

--
-- Indexes for table `testimonial`
--
ALTER TABLE `testimonial`
  ADD PRIMARY KEY (`id_testimonial`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `caraousel`
--
ALTER TABLE `caraousel`
  MODIFY `id_caraousel` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `galeri`
--
ALTER TABLE `galeri`
  MODIFY `id_galeri` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `konfigurasi`
--
ALTER TABLE `konfigurasi`
  MODIFY `id_konfigurasi` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `konten`
--
ALTER TABLE `konten`
  MODIFY `id_konten` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_team` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `testimonial`
--
ALTER TABLE `testimonial`
  MODIFY `id_testimonial` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
