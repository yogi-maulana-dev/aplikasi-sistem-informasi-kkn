-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 15, 2024 at 07:43 PM
-- Server version: 8.2.0
-- PHP Version: 8.1.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kknlo`
--

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswas`
--

DROP TABLE IF EXISTS `mahasiswas`;
CREATE TABLE IF NOT EXISTS `mahasiswas` (
  `id` char(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `npm` varchar(17) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `namalengkap` varchar(180) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jk` varchar(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fakultas` char(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `jurusan` char(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `aktif` enum('0','1','2') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambar` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `token` char(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gambarbayar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sizebaju` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pembayaran` varchar(220) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tahun` varchar(36) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `mahasiswa_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mahasiswas`
--

INSERT INTO `mahasiswas` (`id`, `npm`, `namalengkap`, `email`, `jk`, `password`, `nohp`, `alamat`, `fakultas`, `jurusan`, `aktif`, `gambar`, `token`, `gambarbayar`, `sizebaju`, `pembayaran`, `tahun`, `remember_token`, `created_at`, `updated_at`) VALUES
('8bae5825-ecd8-4fbc-bbcc-ffb92fd6dae1', '1311010063', 'Yogi Maulana', 'admin1@projectyai.com', 'Laki - Laki', NULL, '089631031235', 'jalanxx', 'FAKULTAS TEKNIKx', 'Ilmu Komunikasix', NULL, 'uploads/mahasiswa/1311010063_1708018245.png', NULL, '', '', NULL, NULL, NULL, '2024-02-13 21:59:46', '2024-02-15 03:30:45'),
('8bae5825-ecd8-4fbc-bbcc-ffb92fd6dad3', '1311010063', 'yogi maulanax', 'admin11@projectyai.com', 'Laki - Laki', NULL, '089631031235', 'jalanxx', 'FAKULTAS TEKNIKx', 'Ilmu Komunikasix', NULL, 'uploads/mahasiswa/1311010063_1708018245.png', NULL, '', '', NULL, NULL, NULL, '2024-02-14 04:59:46', '2024-02-15 10:30:45'),
('640ed4f5-b714-4f2e-9b28-8a601a496481', '1311010099', 'sdasd', 'yogimaulana281@gmail.com', 'Laki - Laki', '$2y$12$qzgwoS8vL6PXyfL6btpI6egWeiD9206xG59T/TqKxfIqVwHwnE.M.', '089631031235', 'fsfsdf', 'FAKULTAS TEKNIK', 'Pendidikan Luar Biasa', NULL, 'uploads/mahasiswa/foto/1311010099_1710355904.jpeg', NULL, 'uploads/mahasiswa/bukti/1311010099_1710355904.jpeg', 's', '0', NULL, NULL, '2024-03-13 11:51:45', '2024-03-13 11:51:45'),
('fde9bbd4-781c-4be4-b84e-c5b451ce88f5', '1311010063', 'yogi maulanax', 'admin@projectyai.com', 'Laki - Laki', '$2y$12$2eNMN5pdvkuX4jJNYebbe.pVJV/OdZ83SJHNYrOJ7V.tTjlXIHdEe', '089631031235', 'eqwewq', 'FAKULTAS TEKNIK', 'Pendidikan Luar Biasa', NULL, 'uploads/mahasiswa/1311010063_1710515994.png', NULL, 'uploads/mahasiswa/bukti/1311010063_1710515994.jpeg', 'xl', NULL, NULL, NULL, '2024-03-15 08:19:55', '2024-03-15 08:19:55'),
('0b1a0629-bc63-4e9d-8f89-c87c36c4fec9', '1311010123', 'yogi maulanax', 'admin88@projectyai.com', 'Laki - Laki', '$2y$12$a74Ty9a4n5mtqnz65aRB3enY9ZPZ5VQvgTuC1TFizCdNSvPJesF22', '089631031235', 'cvcvc', 'FAKULTAS PSIKOLOGI', 'Ilmu Komunikasi', NULL, 'uploads/mahasiswa/foto/1311010123_1710516557.png', NULL, 'uploads/mahasiswa/bukti/1311010123_1710516557.jpeg', 'xl', NULL, NULL, NULL, '2024-03-15 08:29:17', '2024-03-15 08:29:17');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
