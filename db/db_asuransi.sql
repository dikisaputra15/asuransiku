-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2024 at 04:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_asuransi`
--

-- --------------------------------------------------------

--
-- Table structure for table `detailperiksas`
--

CREATE TABLE `detailperiksas` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_periksa` int(11) NOT NULL,
  `nama_ternak` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `berat` varchar(255) NOT NULL,
  `umur` varchar(255) NOT NULL,
  `hasil_pemeriksaan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `detailperiksas`
--

INSERT INTO `detailperiksas` (`id`, `id_periksa`, `nama_ternak`, `nomor`, `berat`, `umur`, `hasil_pemeriksaan`, `created_at`, `updated_at`) VALUES
(1, 1, 'sapi betina', 'SB001', '10 kg', '20', 'baik', '2024-08-20 19:41:18', '2024-08-20 19:41:18'),
(2, 1, 'sapi betina', 'SB002', '20 kg', '13', 'baik', '2024-08-20 19:41:36', '2024-08-20 19:41:36');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2024_06_21_065529_create_suratpengantars_table', 1),
(7, '2024_06_24_040909_create_pesertaasuransis_table', 1),
(8, '2024_06_25_065703_create_periksakesehatans_table', 1),
(9, '2024_06_26_092854_create_detailperiksas_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `periksakesehatans`
--

CREATE TABLE `periksakesehatans` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_peserta` int(11) NOT NULL,
  `tgl_pemeriksaan` date NOT NULL,
  `pemeriksa1` varchar(255) NOT NULL,
  `pemeriksa2` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `periksakesehatans`
--

INSERT INTO `periksakesehatans` (`id`, `id_peserta`, `tgl_pemeriksaan`, `pemeriksa1`, `pemeriksa2`, `created_at`, `updated_at`) VALUES
(1, 2, '2024-08-21', 'Tono', 'Tini', '2024-08-20 19:40:58', '2024-08-20 19:40:58');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `pesertaasuransis`
--

CREATE TABLE `pesertaasuransis` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `tgl_pengajuan` date NOT NULL,
  `no_hp` varchar(255) NOT NULL,
  `desa` varchar(255) NOT NULL,
  `kecamatan` varchar(255) NOT NULL,
  `kabupaten_kota` varchar(255) NOT NULL,
  `jenis_ternak` varchar(255) NOT NULL,
  `jumlah_ternak` int(11) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `ktp` varchar(255) NOT NULL,
  `foto_ternak` varchar(255) NOT NULL,
  `surat_pengantar` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pesertaasuransis`
--

INSERT INTO `pesertaasuransis` (`id`, `id_user`, `tgl_pengajuan`, `no_hp`, `desa`, `kecamatan`, `kabupaten_kota`, `jenis_ternak`, `jumlah_ternak`, `keterangan`, `ktp`, `foto_ternak`, `surat_pengantar`, `created_at`, `updated_at`) VALUES
(1, 2, '2024-08-21', '0853453', 'kopo', 'kopo', 'kabupaten serang', 'sapi', 12, 'diterima', '1807963079713831.jpg', '1807963079713831.jpg', '1807963079713831.jpg', '2024-08-20 19:39:14', '2024-08-20 19:39:14');

-- --------------------------------------------------------

--
-- Table structure for table `suratpengantars`
--

CREATE TABLE `suratpengantars` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `kepala_surat` varchar(255) NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `tanggal` date NOT NULL,
  `tujuan` varchar(255) NOT NULL,
  `nama_surat` varchar(255) NOT NULL,
  `nomor` varchar(255) NOT NULL,
  `jenis_surat` varchar(255) NOT NULL,
  `volume` varchar(255) NOT NULL,
  `keterangan` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `roles` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `roles`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$12$4A3BGWXFTvhA1uMgUSnmK.ajMoyoPnpLrr4BID6NKLgNoOPiI39rW', NULL, NULL, NULL, 'admin', NULL, '2024-08-20 19:36:00', '2024-08-20 19:36:00'),
(2, 'Peternak', 'peternak@gmail.com', NULL, '$2y$12$nX692yInPAT6le6qdHKXsOR3uHPeVRp0XDSK/jlw2B.AMmGO0L.8q', NULL, NULL, NULL, 'peternak', NULL, '2024-08-20 19:36:00', '2024-08-20 19:36:00'),
(3, 'Staff Bagian Bencana', 'staff@gmail.com', NULL, '$2y$12$/ga2u.wo2CRsxiIdHFMB4eRaYq9HH8kLNqu.S3SHf0Mwadr0Ta1b.', NULL, NULL, NULL, 'staff', NULL, '2024-08-20 19:36:00', '2024-08-20 19:36:00'),
(4, 'Kepala Bagian', 'kepala@gmail.com', NULL, '$2y$12$yTdXNzlt4SBo0Fu.6LtmgOef4ygPGgbGrMqIRogBqsiuxmRutQsae', NULL, NULL, NULL, 'kepala', NULL, '2024-08-20 19:36:00', '2024-08-20 19:36:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detailperiksas`
--
ALTER TABLE `detailperiksas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `periksakesehatans`
--
ALTER TABLE `periksakesehatans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `pesertaasuransis`
--
ALTER TABLE `pesertaasuransis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suratpengantars`
--
ALTER TABLE `suratpengantars`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detailperiksas`
--
ALTER TABLE `detailperiksas`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `periksakesehatans`
--
ALTER TABLE `periksakesehatans`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `pesertaasuransis`
--
ALTER TABLE `pesertaasuransis`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `suratpengantars`
--
ALTER TABLE `suratpengantars`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
