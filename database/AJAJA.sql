-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 06 Jan 2024 pada 04.10
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adajasa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_utama`
--

CREATE TABLE `layanan_utama` (
  `id_LU` int(20) NOT NULL,
  `imgLU` varchar(255) NOT NULL,
  `nameLU` varchar(255) NOT NULL,
  `desk` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan_utama`
--

INSERT INTO `layanan_utama` (`id_LU`, `imgLU`, `nameLU`, `desk`, `price`, `created_at`, `updated_at`) VALUES
(1, 'asset/komputer.png', 'Service komputer', 'normal', '120000', NULL, NULL),
(2, 'asset/laptop.png', 'Service laptop', 'normal', '110000', NULL, NULL);

INSERT INTO `layanan_tambahan` (`id_LT`, `imgLT`, `nameLT`, `desk`, `price`, `created_at`, `updated_at`) VALUES (1, 'asset/fast.png', 'garansi', 'normal', '20000', NULL, NULL), (2, 'asset/slow.png', 'non-garansi', 'normal', '10000', NULL, NULL);
--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `layanan_utama`
--
ALTER TABLE `layanan_utama`
  ADD PRIMARY KEY (`id_LU`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `layanan_utama`
--
ALTER TABLE `layanan_utama`
  MODIFY `id_LU` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
