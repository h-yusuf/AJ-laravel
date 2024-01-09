-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Jan 2024 pada 16.12
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
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `jasa`
--

CREATE TABLE `jasa` (
  `idJasa` int(20) NOT NULL,
  `img_jasa` varchar(255) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `categories` varchar(255) NOT NULL,
  `id_LU` int(20) NOT NULL,
  `id_LT` int(20) NOT NULL,
  `location` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `jasa`
--

INSERT INTO `jasa` (`idJasa`, `img_jasa`, `product_name`, `categories`, `id_LU`, `id_LT`, `location`, `created_at`, `updated_at`) VALUES
(1, 'asset/jasa/bersih.png', 'clean', 'cs', 1, 2, 'ngaw', '2024-01-07 02:23:10', '2024-01-07 02:23:10'),
(2, 'asset/jasa/IT.png', 'starkom', 'cs', 1, 2, 'ngaw', '2024-01-07 02:24:37', '2024-01-07 02:24:37'),
(3, 'asset/jasa/IT.png', 'starkomasdas', 'cs', 2, 1, 'ngaw', '2024-01-07 05:24:38', '2024-01-07 05:24:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `layanan_tambahan`
--

CREATE TABLE `layanan_tambahan` (                                                               
  `id_LT` int(20) NOT NULL,
  `imgLT` varchar(255) NOT NULL,
  `nameLT` varchar(255) NOT NULL,
  `desk` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `layanan_tambahan`
--

INSERT INTO `layanan_tambahan` (`id_LT`, `imgLT`, `nameLT`, `desk`, `price`, `created_at`, `updated_at`) VALUES
(1, 'asset/fast.png', 'garansi', 'normal', '30000', NULL, NULL),
(2, 'asset/slow.png', 'non-garansi', 'normal', '20000', NULL, NULL);

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

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(9, '2014_10_12_000000_create_users_table', 1),
(10, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(11, '2019_08_19_000000_create_failed_jobs_table', 1),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(13, '2023_12_30_143721_create_Transaksi_table', 1),
(14, '2024_01_04_140623_jasa', 1),
(15, '2024_01_05_095154_layanan_utama', 1),
(16, '2024_01_05_095206_layanan_tambahan', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` varchar(20) NOT NULL,
  `idJasa` int(11) NOT NULL,
  `layanan_utama` int(20) NOT NULL,
  `layanan_tambahan` int(20) NOT NULL,
  `date` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `ciriRumah` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `idJasa`, `layanan_utama`, `layanan_tambahan`, `date`, `time`, `alamat`, `ciriRumah`, `note`, `price`, `created_at`, `updated_at`) VALUES
('D002', 2, 2, 1, '02/07/2024', '10:00 AM', 'condcat/depok/sleman', 'asd', 'adasd', '120000', '2024-01-07 03:36:08', '2024-01-07 03:36:08'),
('D003', 1, 2, 2, '02/07/2024', '10:00 AM', 'condcat/depok/sleman', 'asa', 'asd', '110000', '2024-01-07 05:16:21', '2024-01-07 05:16:21'),
('D004', 3, 2, 1, '02/01/2024', '10:00 AM', 'condcat/depok/sleman', 'asa', 'asdasd', '130000', '2024-01-07 05:30:57', '2024-01-07 05:30:57');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'sach', 'iyadeh37@gmail.com', NULL, '$2y$12$Q2G6UzaIhtKMcJjm..ccNeatvIho/LTt65WtqoDP0PdPXnbU1VL9q', 'awN0IJQ7YkV8EK9d4Bb7K22GUziJuFntwWb39yV5dJmPO7wJjGVQXahhOWpC', '2024-01-04 20:21:13', '2024-01-04 20:21:13');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD PRIMARY KEY (`idJasa`),
  ADD KEY `id_LU` (`id_LU`),
  ADD KEY `id_LT` (`id_LT`);

--
-- Indeks untuk tabel `layanan_tambahan`
--
ALTER TABLE `layanan_tambahan`
  ADD PRIMARY KEY (`id_LT`);

--
-- Indeks untuk tabel `layanan_utama`
--
ALTER TABLE `layanan_utama`
  ADD PRIMARY KEY (`id_LU`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `id_jasa` (`idJasa`),
  ADD KEY `layanan_utama` (`layanan_utama`),
  ADD KEY `layanan_tambahan` (`layanan_tambahan`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `jasa`
--
ALTER TABLE `jasa`
  MODIFY `idJasa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `layanan_tambahan`
--
ALTER TABLE `layanan_tambahan`
  MODIFY `id_LT` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `layanan_utama`
--
ALTER TABLE `layanan_utama`
  MODIFY `id_LU` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `jasa`
--
ALTER TABLE `jasa`
  ADD CONSTRAINT `jasa_ibfk_1` FOREIGN KEY (`id_LU`) REFERENCES `layanan_utama` (`id_LU`),
  ADD CONSTRAINT `jasa_ibfk_2` FOREIGN KEY (`id_LT`) REFERENCES `layanan_tambahan` (`id_LT`);

--
-- Ketidakleluasaan untuk tabel `transaksi`
--
ALTER TABLE `transaksi`
  ADD CONSTRAINT `transaksi_ibfk_1` FOREIGN KEY (`idJasa`) REFERENCES `jasa` (`idJasa`),
  ADD CONSTRAINT `transaksi_ibfk_2` FOREIGN KEY (`layanan_utama`) REFERENCES `layanan_utama` (`id_LU`),
  ADD CONSTRAINT `transaksi_ibfk_3` FOREIGN KEY (`layanan_tambahan`) REFERENCES `layanan_tambahan` (`id_LT`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
