-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2024 at 04:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sbd_monitoring`
--

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL,
  `dosis` varchar(50) DEFAULT NULL,
  `instruksi_penggunaan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_pemeriksaan`, `id_obat`, `nama_obat`, `deskripsi`, `dosis`, `instruksi_penggunaan`) VALUES
(101, 301, 'Bumetanide', 'Obat untuk mengurangi penumpukan cairan berlebih dalam tubuh (edema)', '0.25 mg', '2x1 '),
(102, 302, 'Meclizine', 'Obat untuk mencegah serta mengobati gejala mual, muntah, dan pusing', '45 mg', '1x1'),
(103, 303, 'Omeprazole', ' Obat ini umumnya digunakan untuk mengatasi gastroesophageal reflux disease (GERD), sakit maag (gastritis), atau tukak lambung.', '20 mg', '1x1'),
(104, 304, 'Voltaren Emulgel', 'Gel emulsi yang memungkinkan bahan aktif (diklofenak) menyerap ke dalam kulit dengan cepat untuk meredakan nyeri dan peradangan', '10 mg', 'Oleskan dibagian nyeri sendi'),
(105, 305, 'Amlodipine', 'Obat untuk menurunkan tekanan darah pada penderita hipertensi.', '5 mg', '1x1'),
(106, 306, 'Counterpain ', 'Krim pereda nyeri untuk meringankan rasa sakit pada otot, nyeri sendi, keseleo, dan nyeri akibat encok.', '10 mg', 'Oleskan dibagian nyeri sendi'),
(107, 307, 'Dizine', 'Obat yang biasa digunakan untuk pencegahan vertigo (pusing yang berputar)', '10 mg', '1x1'),
(108, 308, 'Metformin', 'Obat antidiabetes generik yang dapat mengontrol dan menurunkan kadar gula darah ', '500 mg', '1x1'),
(109, 309, 'Mertigo', 'Obat untuk mengurangi keluhan pusing berputar atau vertigo', '6 mg', '3x1'),
(109, 310, 'Nufapreg', 'Obat untuk mengatasi alergi, mual dan muntah, vertigo akibat sindrom meniere.', '12 mg', '3x1');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE `pasien` (
  `id_pasien` int(6) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenis_kelamin` char(10) NOT NULL,
  `no_telp` varchar(12) NOT NULL,
  `desa` varchar(50) NOT NULL,
  `RT` varchar(50) NOT NULL,
  `RW` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `nama`, `tgl_lahir`, `jenis_kelamin`, `no_telp`, `desa`, `RT`, `RW`) VALUES
(1001, 'Khoiriy', '1966-09-28', 'Perempuan', '8716525132', 'Patemon', '1', '1'),
(1002, 'Putra', '1964-01-08', 'Laki-laki', '0987654387', 'Kalisegoro', '7', '1'),
(1003, 'Astrada', '1958-11-29', 'Perempuan', '08664678564', 'Patemon', '3', '4'),
(1004, 'Rayanza', '1968-06-22', 'Laki-laki', '0897545676', 'Sukorejo', '10', '2'),
(1005, 'Ariana', '1961-06-05', 'Perempuan', '08153672527', 'Pongangan', '5', '2');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_kesehatan`
--

CREATE TABLE `petugas_kesehatan` (
  `id_petugas` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `spesialis` char(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `petugas_kesehatan`
--

INSERT INTO `petugas_kesehatan` (`id_petugas`, `nama`, `spesialis`) VALUES
(1, 'dr.Anindya', 'Jantung'),
(2, 'dr.Dito', 'Kulit'),
(3, 'dr.Wikan', 'Penyakit dalam'),
(4, 'dr.Mattew', 'Saraf');

-- --------------------------------------------------------

--
-- Table structure for table `registrasi`
--

CREATE TABLE `registrasi` (
  `id_pasien` int(11) NOT NULL,
  `id_petugas` int(11) NOT NULL,
  `id_registrasi` int(11) NOT NULL,
  `tgl_temu` date NOT NULL,
  `waktu_temu` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registrasi`
--

INSERT INTO `registrasi` (`id_pasien`, `id_petugas`, `id_registrasi`, `tgl_temu`, `waktu_temu`) VALUES
(1001, 2, 201, '2023-10-07', '07:05:00'),
(1002, 1, 202, '2023-10-09', '07:54:00'),
(1004, 4, 203, '2023-10-10', '08:00:00'),
(1005, 1, 204, '2023-10-18', '07:45:00'),
(1001, 3, 205, '2023-11-09', '11:07:00'),
(1002, 2, 206, '2023-11-13', '10:14:00'),
(1005, 3, 207, '2023-11-20', '09:10:00'),
(1003, 4, 208, '2023-11-27', '09:00:00'),
(1002, 1, 209, '2023-12-10', '00:50:00'),
(1001, 1, 987, '2023-12-16', '07:57:00');

-- --------------------------------------------------------

--
-- Table structure for table `riwayat_checkup`
--

CREATE TABLE `riwayat_checkup` (
  `id_pemeriksaan` int(11) NOT NULL,
  `id_registrasi` int(7) DEFAULT NULL,
  `id_pasien` int(11) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `tekanan_darah` varchar(20) DEFAULT NULL,
  `gula_darah` varchar(20) DEFAULT NULL,
  `berat_badan` decimal(5,2) DEFAULT NULL,
  `riwayat_penyakit` char(100) NOT NULL,
  `catatan` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `riwayat_checkup`
--

INSERT INTO `riwayat_checkup` (`id_pemeriksaan`, `id_registrasi`, `id_pasien`, `tgl_pemeriksaan`, `tekanan_darah`, `gula_darah`, `berat_badan`, `riwayat_penyakit`, `catatan`) VALUES
(101, 201, 1001, '2023-10-07', '145/90', '109', 70.20, 'Hipertensi', 'Merasa pusing, sakit kepala, dan susah tidur'),
(102, 202, 1002, '2023-10-09', '123/76', '121', 70.00, 'Vertigo', 'Menghindari makanan tinggi garam'),
(103, 203, 1004, '2023-10-10', '117/78', '101', 65.23, 'Maag', 'Merasa mual'),
(104, 204, 1005, '2023-10-18', '127/80', '206', 89.36, 'Penyakit sendi', 'Sering merasa lelah'),
(105, 205, 1001, '2023-11-09', '120/65', '122', 68.09, 'Hipertensi', 'Merasa kunang-kunang'),
(106, 206, 1005, '2023-11-20', '130/68', '120', 59.45, 'Penyakit sendi', 'Merasa pegal di pergelangan kaki'),
(107, 207, 1002, '2023-11-13', '125/80', '118', 72.12, 'Vertigo', 'Merasa pusing jika kelelahan'),
(108, 208, 1003, '2023-11-27', '130/78', '210', 76.26, 'Diabetes', 'Mudah lemas'),
(109, 209, 1002, '2023-12-10', '130/80', '124', 71.54, 'Vertigo', 'Pusing dan merasa mual');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id_obat`),
  ADD KEY `id_pemeriksaan` (`id_pemeriksaan`);

--
-- Indexes for table `pasien`
--
ALTER TABLE `pasien`
  ADD PRIMARY KEY (`id_pasien`),
  ADD UNIQUE KEY `no_telp` (`no_telp`);

--
-- Indexes for table `petugas_kesehatan`
--
ALTER TABLE `petugas_kesehatan`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD PRIMARY KEY (`id_registrasi`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_petugas` (`id_petugas`);

--
-- Indexes for table `riwayat_checkup`
--
ALTER TABLE `riwayat_checkup`
  ADD PRIMARY KEY (`id_pemeriksaan`),
  ADD KEY `id_pasien` (`id_pasien`),
  ADD KEY `id_regist` (`id_registrasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id_obat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=988;

--
-- AUTO_INCREMENT for table `pasien`
--
ALTER TABLE `pasien`
  MODIFY `id_pasien` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=198776;

--
-- AUTO_INCREMENT for table `petugas_kesehatan`
--
ALTER TABLE `petugas_kesehatan`
  MODIFY `id_petugas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=344;

--
-- AUTO_INCREMENT for table `registrasi`
--
ALTER TABLE `registrasi`
  MODIFY `id_registrasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2002;

--
-- AUTO_INCREMENT for table `riwayat_checkup`
--
ALTER TABLE `riwayat_checkup`
  MODIFY `id_pemeriksaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2358;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `obat`
--
ALTER TABLE `obat`
  ADD CONSTRAINT `obat_ibfk_1` FOREIGN KEY (`id_pemeriksaan`) REFERENCES `riwayat_checkup` (`id_pemeriksaan`);

--
-- Constraints for table `registrasi`
--
ALTER TABLE `registrasi`
  ADD CONSTRAINT `registrasi_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`),
  ADD CONSTRAINT `registrasi_ibfk_2` FOREIGN KEY (`id_petugas`) REFERENCES `petugas_kesehatan` (`id_petugas`);

--
-- Constraints for table `riwayat_checkup`
--
ALTER TABLE `riwayat_checkup`
  ADD CONSTRAINT `id_regist` FOREIGN KEY (`id_registrasi`) REFERENCES `registrasi` (`id_registrasi`),
  ADD CONSTRAINT `riwayat_checkup_ibfk_1` FOREIGN KEY (`id_pasien`) REFERENCES `pasien` (`id_pasien`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
