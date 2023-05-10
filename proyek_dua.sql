-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Jan 2023 pada 02.13
-- Versi server: 10.4.24-MariaDB
-- Versi PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `proyek_dua`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_11_08_100923_table_penyakit', 1),
(6, '2022_11_17_152206_table_gejala', 2),
(7, '2022_11_20_131242_table_datapasien', 3),
(8, '2022_11_21_104141_add_role_to_users_table', 4),
(9, '2022_11_24_162652_add_kode_gejala_to_t_gejala_table', 5),
(10, '2022_11_24_163144_add_kode_penyakit_to_t_penyakit_table', 6),
(11, '2022_11_26_154517_create_detail_penyakit_gejala_table', 7),
(12, '2022_11_27_155124_create_t_gejala_table', 8),
(13, '2022_11_28_040809_create_t_dpgejala_table', 9),
(14, '2022_12_01_161021_add_timestamp_to_t_dpgejala_table', 10),
(15, '2022_12_03_130450_create_t_penyebab_table', 11),
(16, '2022_12_03_140825_create_t_solusi_penyekit_table', 12),
(18, '2022_12_04_151621_create_t_dppenyebab_table', 13),
(19, '2022_12_06_142511_create_t_dpsolusi_table', 14),
(20, '2022_12_15_225145_add_deskripsi_and_gejala_utama_to_t_penyakit_table', 15),
(21, '2022_12_18_155957_create_t_diagnosa_table', 15);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_datapasien`
--

CREATE TABLE `t_datapasien` (
  `id` varchar(32) CHARACTER SET utf8mb4 NOT NULL,
  `nama` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `no_telp` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jenis_kelamin` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_datapasien`
--

INSERT INTO `t_datapasien` (`id`, `nama`, `tanggal_lahir`, `email`, `no_telp`, `jenis_kelamin`, `created_at`, `updated_at`) VALUES
('071ddf6795164bd0a8d1f55fc8ff6c56', 'kdwdw', '2022-12-12', 'ibnusaiful1922@gmail.com', '08766654343554', 'L', '2022-12-22 09:33:53', '2022-12-22 09:33:53'),
('1', 'ibnu', '2022-12-04', 'Cahyoganteng@gmail.com', '08766654343554', 'L', '2022-12-21 04:54:16', '2022-12-21 04:54:16'),
('2', 'ibnu', '2022-12-15', 'isalganteng@gmail.com', '08766654343554', 'L', '2022-12-21 04:57:29', '2022-12-21 04:57:29'),
('2a20ffc6112e4a86a4a13e1320a5fc4e', 'sd', '2001-06-05', 'isalgaming786@gmail.com', '08766654343554', 'L', '2023-01-01 08:51:58', '2023-01-01 08:51:58'),
('3', 'ibnu saiful', '2003-08-29', 'ibnusaiful1922@gmail.com', '08766654343554', 'L', '2022-12-21 05:23:52', '2022-12-21 05:23:52'),
('4415b539857344fd9a70ef5bb82698c0', 'cahyono', '2022-12-12', 'Cahyoganteng@gmail.com', '08766654343554', 'P', '2022-12-21 06:01:55', '2022-12-21 06:01:55'),
('61f029c3a87c4a599fe32396314019d0', 'vermail', '2022-12-05', 'Cahyoganteng@gmail.com', '08766654343554', 'L', '2022-12-21 09:19:51', '2022-12-21 09:19:51'),
('6a4b7b2eb6014675b9f4c0d060150e93', 'kdwdw', '2022-12-12', 'isalgaming786@gmail.com', '08766654343554', 'L', '2022-12-21 10:04:31', '2022-12-21 10:04:31'),
('7a65b2d816304238ae1973025a145ee2', 'cahyono', '2022-12-12', 'Cahyoganteng@gmail.com', '08766654343554', 'P', '2022-12-21 06:00:38', '2022-12-21 06:00:38'),
('857f4d9d1c5b4d49861b08806006948c', 'ibnu', '2022-12-04', 'isalganteng@gmail.com', '08766654343554', 'L', '2022-12-21 09:49:58', '2022-12-21 09:49:58'),
('95fd63266774432f96338eed6d79229c', 'ibnu', '1991-06-11', 'Cahyoganteng@gmail.com', '08766654343554', 'L', '2022-12-22 09:01:32', '2022-12-22 09:01:32'),
('9fce0a7d0f5c4246908bb4c116d421eb', 'kdwdw', '2022-12-23', 'isalgaming786@gmail.com', '08766654343554', 'L', '2022-12-21 09:52:53', '2022-12-21 09:52:53'),
('af5df0f972a74ebeb68fd9fc7661561d', 'ibnu', '2022-12-07', 'ibnusaiful@gmail.com', '08766654343554', 'L', '2022-12-21 18:04:46', '2022-12-21 18:04:46'),
('c9dc20b43c2b407aab2630c38319aca6', 'ibnu', '2022-12-04', 'isalganteng@gmail.com', '08766654343554', 'L', '2022-12-21 09:42:13', '2022-12-21 09:42:13'),
('d8f2f547ec354205b4e6a656bfb81aab', 'cahyono', '2008-06-18', 'ibnusaiful1922@gmail.com', '08766654343554', 'L', '2023-01-03 17:51:13', '2023-01-03 17:51:13'),
('d95a330898c34cdc81bceb1b7431e18d', 'ibnu', '2022-12-14', 'Cahyoganteng@gmail.com', '08766654343554', 'L', '2022-12-26 06:59:46', '2022-12-26 06:59:46'),
('e9f94b6b4739478ea6f257a189b35e61', 'kdwdw', '2022-12-01', 'vermeilsirius77@gmail.com', '08766654343554', 'P', '2022-12-30 07:27:51', '2022-12-30 07:27:51'),
('f4d95152d63842d09763bdf6a69af151', 'ibnu', '2022-12-05', 'isalgaming786@gmail.com', '08766654343554', 'L', '2022-12-21 05:57:07', '2022-12-21 05:57:07'),
('fdd014012e434e1ab8b69a635f91868f', 'kdwdw', '2023-01-24', 'isalganteng@gmail.com', '08766654343554', 'L', '2023-01-01 08:44:25', '2023-01-01 08:44:25');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_diagnosa`
--

CREATE TABLE `t_diagnosa` (
  `id` varchar(32) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pasien_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_penyakit` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tanggal_konsultasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_diagnosa`
--

INSERT INTO `t_diagnosa` (`id`, `pasien_id`, `kode_penyakit`, `tanggal_konsultasi`, `deleted_at`, `created_at`, `updated_at`) VALUES
('0d72ab17a5f5410cb6ff9494c562adc3', 'fdd014012e434e1ab8b69a635f91868f', 'P02', '2023-01-01 15:44:48', NULL, '2023-01-01 08:44:48', '2023-01-01 08:44:48'),
('198810c524314315b8cdeee673bb5d57', '95fd63266774432f96338eed6d79229c', 'P02', '2022-12-22 16:03:26', NULL, '2022-12-22 09:03:26', '2022-12-22 09:03:26'),
('393d2a9073bd4249b0c2baa0e536bf5f', '2a20ffc6112e4a86a4a13e1320a5fc4e', 'P02', '2023-01-01 15:54:13', NULL, '2023-01-01 08:54:13', '2023-01-01 08:54:13'),
('39a72faa36f7450f8dee1ef3bd5ec8a5', '95fd63266774432f96338eed6d79229c', 'P02', '2022-12-22 16:02:31', '2022-12-27 23:00:22', '2022-12-22 09:02:31', '2022-12-27 23:00:22'),
('48aceecdb3924a87b415ba8069d37df3', '2a20ffc6112e4a86a4a13e1320a5fc4e', 'P02', '2023-01-01 15:54:50', NULL, '2023-01-01 08:54:50', '2023-01-01 08:54:50'),
('86749f4989fa404196a415b5111b648e', '2a20ffc6112e4a86a4a13e1320a5fc4e', 'P02', '2023-01-01 15:54:35', NULL, '2023-01-01 08:54:35', '2023-01-01 08:54:35'),
('ad5cb99068b54acbb68ca371ad8f5880', 'd8f2f547ec354205b4e6a656bfb81aab', 'P02', '2023-01-04 00:51:48', NULL, '2023-01-03 17:51:48', '2023-01-03 17:51:48'),
('d81ec051f81c4395b55f449373d3676c', '2a20ffc6112e4a86a4a13e1320a5fc4e', 'P02', '2023-01-01 15:52:14', NULL, '2023-01-01 08:52:14', '2023-01-01 08:52:14'),
('e5481153c9084c489b93339b04787f6b', 'e9f94b6b4739478ea6f257a189b35e61', 'P16', '2022-12-30 14:29:28', NULL, '2022-12-30 07:29:28', '2022-12-30 07:29:28'),
('ef093cfd03d341c19497c5c53e8d46e0', '071ddf6795164bd0a8d1f55fc8ff6c56', 'P01', '2022-12-22 16:34:14', '2022-12-27 23:00:34', '2022-12-22 09:34:14', '2022-12-27 23:00:34'),
('ef99b5bbf0bf472aa4bec0f50161a2a4', '2a20ffc6112e4a86a4a13e1320a5fc4e', 'P02', '2023-01-01 15:54:00', NULL, '2023-01-01 08:54:00', '2023-01-01 08:54:00'),
('f346ea2cd252427bbc5ee3a964ffb3d4', 'd95a330898c34cdc81bceb1b7431e18d', 'P01', '2022-12-26 14:00:05', NULL, '2022-12-26 07:00:05', '2022-12-26 07:00:05'),
('fab766d5815a461489bc8557c98c52aa', '95fd63266774432f96338eed6d79229c', 'P02', '2022-12-22 16:01:43', NULL, '2022-12-22 09:01:43', '2022-12-22 09:01:43'),
('fea86ce1823f491e8abef53e01ddd7f0', 'd95a330898c34cdc81bceb1b7431e18d', 'P01', '2022-12-26 14:05:40', NULL, '2022-12-26 07:05:40', '2022-12-26 07:05:40');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dpgejala`
--

CREATE TABLE `t_dpgejala` (
  `id` int(10) UNSIGNED NOT NULL,
  `kode_penyakit` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kode_gejala` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_dpgejala`
--

INSERT INTO `t_dpgejala` (`id`, `kode_penyakit`, `kode_gejala`, `created_at`, `updated_at`) VALUES
(6, 'P01', 'G01', '2022-12-25 00:54:22', '2022-12-25 00:54:22'),
(7, 'P01', 'G02', '2022-12-25 00:54:38', '2022-12-25 00:54:38'),
(8, 'P01', 'G03', '2022-12-25 00:54:54', '2022-12-25 00:54:54'),
(9, 'P01', 'G04', '2022-12-25 00:55:11', '2022-12-25 00:55:11'),
(10, 'P01', 'G05', '2022-12-25 01:03:33', '2022-12-25 01:03:33'),
(11, 'P01', 'G06', '2022-12-25 01:03:43', '2022-12-25 01:03:43'),
(12, 'P02', 'G01', '2022-12-25 05:31:02', '2022-12-25 05:31:02'),
(13, 'P02', 'G07', '2022-12-25 05:31:25', '2022-12-25 05:31:25'),
(14, 'P02', 'G04', '2022-12-25 05:31:56', '2022-12-25 05:31:56'),
(15, 'P02', 'G08', '2022-12-25 05:32:20', '2022-12-25 05:32:20'),
(16, 'P02', 'G09', '2022-12-25 05:32:56', '2022-12-25 05:32:56'),
(17, 'P02', 'G10', '2022-12-25 05:33:23', '2022-12-25 05:33:23'),
(18, 'P04', 'G01', '2022-12-25 05:34:10', '2022-12-25 05:34:10'),
(19, 'P04', 'G11', '2022-12-25 05:34:30', '2022-12-25 05:34:30'),
(20, 'P04', 'G12', '2022-12-25 05:34:44', '2022-12-25 05:34:44'),
(21, 'P04', 'G13', '2022-12-25 05:34:56', '2022-12-25 05:34:56'),
(22, 'P03', 'G14', '2022-12-25 07:20:04', '2022-12-25 07:20:04'),
(23, 'P03', 'G15', '2022-12-25 07:20:16', '2022-12-25 07:20:16'),
(24, 'P03', 'G16', '2022-12-25 07:20:30', '2022-12-25 07:20:30'),
(25, 'P05', 'G17', '2022-12-29 07:39:30', '2022-12-29 07:39:30'),
(26, 'P05', 'G18', '2022-12-29 07:39:48', '2022-12-29 07:39:48'),
(27, 'P05', 'G19', '2022-12-29 07:40:34', '2022-12-29 07:40:34'),
(28, 'P06', 'G20', '2022-12-29 07:46:00', '2022-12-29 07:46:00'),
(29, 'P06', 'G21', '2022-12-29 07:46:19', '2022-12-29 07:46:19'),
(30, 'P06', 'G22', '2022-12-29 07:46:39', '2022-12-29 07:46:39'),
(31, 'P07', 'G23', '2022-12-29 08:23:25', '2022-12-29 08:23:25'),
(32, 'P07', 'G24', '2022-12-29 08:23:47', '2022-12-29 08:23:47'),
(33, 'P07', 'G25', '2022-12-29 08:24:03', '2022-12-29 08:24:03'),
(34, 'P08', 'G23', '2022-12-29 08:24:22', '2022-12-29 08:24:22'),
(35, 'P08', 'G26', '2022-12-29 08:24:40', '2022-12-29 08:24:40'),
(36, 'P08', 'G27', '2022-12-29 08:25:02', '2022-12-29 08:25:02'),
(37, 'P08', 'G28', '2022-12-29 08:25:19', '2022-12-29 08:25:19'),
(38, 'P09', 'G23', '2022-12-29 08:56:06', '2022-12-29 08:56:06'),
(39, 'P09', 'G32', '2022-12-29 08:56:46', '2022-12-29 08:58:14'),
(40, 'P09', 'G25', '2022-12-29 08:58:34', '2022-12-29 08:58:34'),
(41, 'P09', 'G29', '2022-12-29 08:59:03', '2022-12-29 08:59:03'),
(42, 'P09', 'G30', '2022-12-29 08:59:24', '2022-12-29 08:59:24'),
(43, 'P09', 'G31', '2022-12-29 08:59:44', '2022-12-29 08:59:44'),
(44, 'P10', 'G33', '2022-12-30 01:39:27', '2022-12-30 01:39:27'),
(45, 'P10', 'G34', '2022-12-30 01:39:48', '2022-12-30 01:39:48'),
(46, 'P10', 'G35', '2022-12-30 01:40:06', '2022-12-30 01:40:06'),
(47, 'P10', 'G36', '2022-12-30 01:40:20', '2022-12-30 01:40:20'),
(48, 'P11', 'G33', '2022-12-30 01:43:51', '2022-12-30 01:43:51'),
(49, 'P11', 'G37', '2022-12-30 01:44:16', '2022-12-30 01:44:16'),
(50, 'P11', 'G38', '2022-12-30 01:44:32', '2022-12-30 01:44:32'),
(51, 'P11', 'G39', '2022-12-30 01:44:54', '2022-12-30 01:44:54'),
(52, 'P11', 'G35', '2022-12-30 01:45:18', '2022-12-30 01:45:18'),
(53, 'P12', 'G38', '2022-12-30 01:48:59', '2022-12-30 01:48:59'),
(54, 'P12', 'G39', '2022-12-30 01:49:17', '2022-12-30 01:49:17'),
(55, 'P12', 'G40', '2022-12-30 01:49:31', '2022-12-30 01:49:31'),
(56, 'P12', 'G41', '2022-12-30 01:49:49', '2022-12-30 01:49:49'),
(57, 'P12', 'G33', '2022-12-30 01:50:11', '2022-12-30 01:50:11'),
(58, 'P13', 'G08', '2022-12-30 01:56:49', '2022-12-30 01:56:49'),
(59, 'P13', 'G33', '2022-12-30 01:57:08', '2022-12-30 01:57:08'),
(60, 'P13', 'G42', '2022-12-30 01:57:31', '2022-12-30 01:57:31'),
(61, 'P13', 'G44', '2022-12-30 01:57:47', '2022-12-30 01:57:47'),
(62, 'P13', 'G43', '2022-12-30 01:58:05', '2022-12-30 01:58:05'),
(63, 'P14', 'G45', '2022-12-30 02:15:04', '2022-12-30 02:15:04'),
(64, 'P14', 'G46', '2022-12-30 02:15:22', '2022-12-30 02:15:22'),
(65, 'P14', 'G47', '2022-12-30 02:15:38', '2022-12-30 02:15:38'),
(66, 'P14', 'G48', '2022-12-30 02:15:55', '2022-12-30 02:15:55'),
(67, 'P15', 'G45', '2022-12-30 02:27:56', '2022-12-30 02:27:56'),
(68, 'P15', 'G49', '2022-12-30 02:28:16', '2022-12-30 02:28:16'),
(69, 'P15', 'G50', '2022-12-30 02:28:40', '2022-12-30 02:28:40'),
(70, 'P15', 'G51', '2022-12-30 02:29:06', '2022-12-30 02:29:06'),
(71, 'P15', 'G52', '2022-12-30 02:29:33', '2022-12-30 02:29:33'),
(72, 'P15', 'G53', '2022-12-30 02:30:01', '2022-12-30 02:30:01'),
(73, 'P15', 'G54', '2022-12-30 02:46:10', '2022-12-30 02:46:10'),
(74, 'P16', 'G45', '2022-12-30 02:48:20', '2022-12-30 02:48:20'),
(75, 'P16', 'G54', '2022-12-30 02:48:34', '2022-12-30 02:48:34'),
(76, 'P16', 'G50', '2022-12-30 02:49:21', '2022-12-30 02:49:21'),
(77, 'P16', 'G47', '2022-12-30 02:50:15', '2022-12-30 02:50:15'),
(78, 'P16', 'G55', '2022-12-30 02:52:38', '2022-12-30 02:52:38'),
(79, 'P16', 'G56', '2022-12-30 02:52:56', '2022-12-30 02:52:56'),
(80, 'P17', 'G57', '2022-12-30 03:10:58', '2022-12-30 03:10:58'),
(81, 'P17', 'G58', '2022-12-30 03:11:14', '2022-12-30 03:11:14'),
(82, 'P17', 'G45', '2022-12-30 03:11:31', '2022-12-30 03:11:31'),
(83, 'P17', 'G56', '2022-12-30 03:11:48', '2022-12-30 03:11:48'),
(84, 'P17', 'G51', '2022-12-30 03:12:16', '2022-12-30 03:12:16'),
(85, 'P17', 'G46', '2022-12-30 03:12:55', '2022-12-30 03:12:55'),
(86, 'P17', 'G50', '2022-12-30 03:13:36', '2022-12-30 03:13:36'),
(87, 'P18', 'G56', '2022-12-30 07:35:30', '2022-12-30 07:35:30'),
(88, 'P18', 'G59', '2022-12-30 07:40:26', '2022-12-30 07:40:26'),
(89, 'P18', 'G60', '2022-12-30 07:40:45', '2022-12-30 07:40:45'),
(90, 'P18', 'G61', '2022-12-30 07:41:01', '2022-12-30 07:41:01'),
(91, 'P18', 'G62', '2022-12-30 07:41:24', '2022-12-30 07:41:24'),
(92, 'P18', 'G01', '2022-12-30 07:42:35', '2022-12-30 07:42:35'),
(93, 'P19', 'G56', '2022-12-30 07:48:21', '2022-12-30 07:48:21'),
(94, 'P19', 'G53', '2022-12-30 07:49:35', '2022-12-30 07:49:35'),
(95, 'P19', 'G61', '2022-12-30 07:50:03', '2022-12-30 07:50:03'),
(96, 'P19', 'G62', '2022-12-30 07:50:25', '2022-12-30 07:50:25'),
(97, 'P19', 'G52', '2022-12-30 07:50:50', '2022-12-30 07:50:50'),
(98, 'P19', 'G63', '2022-12-30 07:51:09', '2022-12-30 07:51:09'),
(99, 'P20', 'G56', '2022-12-30 07:57:45', '2022-12-30 07:57:45'),
(100, 'P20', 'G64', '2022-12-30 07:58:05', '2022-12-30 07:58:05'),
(101, 'P20', 'G65', '2022-12-30 07:58:29', '2022-12-30 07:58:29'),
(102, 'P20', 'G66', '2022-12-30 07:58:44', '2022-12-30 07:58:44'),
(103, 'P20', 'G01', '2022-12-30 07:59:05', '2022-12-30 07:59:05'),
(104, 'P20', 'G60', '2022-12-30 07:59:40', '2022-12-30 07:59:40'),
(105, 'P20', 'G47', '2022-12-30 08:00:33', '2022-12-30 08:00:33'),
(106, 'P21', 'G67', '2022-12-30 08:01:38', '2022-12-30 08:01:38'),
(107, 'P21', 'G68', '2022-12-30 08:05:02', '2022-12-30 08:05:02'),
(108, 'P21', 'G69', '2022-12-30 08:05:21', '2022-12-30 08:05:21'),
(109, 'P21', 'G70', '2022-12-30 08:05:41', '2022-12-30 08:05:41'),
(110, 'P21', 'G71', '2022-12-30 08:05:58', '2022-12-30 08:05:58'),
(111, 'P21', 'G47', '2022-12-30 08:07:02', '2022-12-30 08:07:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dppenyebab`
--

CREATE TABLE `t_dppenyebab` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penyakit` bigint(20) UNSIGNED NOT NULL,
  `id_penyebab` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_dppenyebab`
--

INSERT INTO `t_dppenyebab` (`id`, `id_penyakit`, `id_penyebab`, `created_at`, `updated_at`) VALUES
(2, 4, 6, '2022-12-28 00:02:22', '2022-12-28 00:02:22'),
(3, 4, 7, '2022-12-28 00:02:34', '2022-12-28 00:02:34'),
(4, 5, 8, '2022-12-28 00:05:48', '2022-12-28 00:05:48'),
(5, 5, 9, '2022-12-28 00:05:59', '2022-12-28 00:05:59'),
(6, 5, 10, '2022-12-28 00:06:21', '2022-12-28 00:06:21'),
(7, 6, 11, '2022-12-28 00:09:28', '2022-12-28 00:09:28'),
(8, 6, 12, '2022-12-28 00:09:42', '2022-12-28 00:09:42'),
(9, 8, 13, '2022-12-31 09:58:17', '2022-12-31 09:58:17'),
(10, 9, 14, '2022-12-31 10:02:43', '2022-12-31 10:02:43'),
(11, 10, 15, '2022-12-31 10:10:12', '2022-12-31 10:10:12'),
(12, 11, 16, '2022-12-31 10:11:04', '2022-12-31 10:11:04'),
(13, 12, 17, '2022-12-31 10:12:34', '2022-12-31 10:12:34'),
(14, 17, 18, '2022-12-31 10:21:04', '2022-12-31 10:21:04'),
(15, 18, 19, '2022-12-31 10:22:38', '2022-12-31 10:22:38'),
(16, 16, 20, '2023-01-03 07:34:28', '2023-01-03 07:34:28'),
(17, 24, 21, '2023-01-03 07:38:32', '2023-01-03 07:38:32'),
(18, 24, 22, '2023-01-03 07:38:49', '2023-01-03 07:38:49'),
(19, 24, 23, '2023-01-03 07:39:25', '2023-01-03 07:39:25'),
(20, 24, 24, '2023-01-03 07:39:45', '2023-01-03 07:39:45'),
(21, 24, 25, '2023-01-03 07:39:58', '2023-01-03 07:39:58'),
(24, 21, 28, '2023-01-03 07:57:47', '2023-01-03 07:57:47'),
(25, 21, 29, '2023-01-03 07:58:15', '2023-01-03 07:58:15'),
(26, 21, 30, '2023-01-03 07:58:30', '2023-01-03 07:58:30'),
(27, 21, 31, '2023-01-03 07:58:43', '2023-01-03 07:58:43'),
(28, 22, 32, '2023-01-03 08:07:19', '2023-01-03 08:07:19'),
(29, 22, 33, '2023-01-03 08:07:54', '2023-01-03 08:07:54'),
(30, 21, 34, '2023-01-03 08:08:56', '2023-01-03 08:08:56'),
(31, 22, 34, '2023-01-03 08:09:19', '2023-01-03 08:09:19'),
(32, 23, 34, '2023-01-03 08:10:23', '2023-01-03 08:10:23'),
(33, 23, 35, '2023-01-03 08:10:36', '2023-01-03 08:10:36'),
(34, 23, 31, '2023-01-03 08:10:50', '2023-01-03 08:10:50'),
(35, 23, 30, '2023-01-03 08:11:13', '2023-01-03 08:11:13');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_dpsolusi`
--

CREATE TABLE `t_dpsolusi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_penyakit` bigint(20) UNSIGNED NOT NULL,
  `id_solusi` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_gejala`
--

CREATE TABLE `t_gejala` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_gejala` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_gejala` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_gejala`
--

INSERT INTO `t_gejala` (`id`, `kode_gejala`, `nama_gejala`, `created_at`, `updated_at`) VALUES
(1, 'G01', 'Nyeri pada Tangan', '2022-12-25 00:50:14', '2022-12-25 00:50:14'),
(2, 'G02', 'Nyeri Siku Bagian Luar', '2022-12-25 00:50:35', '2022-12-25 00:50:35'),
(3, 'G03', 'Nyeri menjalar sampai pergelangan tangan', '2022-12-25 00:51:05', '2022-12-25 00:51:05'),
(4, 'G04', 'Nyeri saat menggenggam sesuatu', '2022-12-25 00:51:43', '2022-12-25 00:51:43'),
(5, 'G05', 'Nyeri di bagian luar siku, yang mungkin menjalar ke lengan bawah saat mengangkat atau menekuk lengan', '2022-12-25 01:00:34', '2022-12-25 01:00:34'),
(6, 'G06', 'Nyeri dan kaku saat merentangkan lengan sepenuhnya', '2022-12-25 01:02:02', '2022-12-25 01:02:02'),
(7, 'G07', 'Nyeri siku bagian dalam', '2022-12-25 01:07:20', '2022-12-25 01:07:20'),
(8, 'G08', 'Kesemutan di tangan', '2022-12-25 01:08:07', '2022-12-25 01:08:07'),
(9, 'G09', 'Nyeri saat mengepalkan tangan', '2022-12-25 01:09:23', '2022-12-25 01:09:23'),
(10, 'G10', 'Rasa baal/kesemutan yang menjalar ke jari tangan', '2022-12-25 01:11:26', '2022-12-25 01:11:26'),
(11, 'G11', 'Persendiaan tangan terasa kaku dan nyeri apabila digerakkan', '2022-12-25 05:08:59', '2022-12-25 05:08:59'),
(12, 'G12', 'Nyeri Hilang timbul ketika tangan digerakan.', '2022-12-25 05:22:03', '2022-12-25 05:22:03'),
(13, 'G13', 'Adanya benjolan berisi cairan, di dekat sendi ujung jari.', '2022-12-25 05:27:03', '2022-12-25 05:27:03'),
(14, 'G14', 'Nyeri pangkal ibu jari', '2022-12-25 05:56:33', '2022-12-25 05:56:33'),
(15, 'G15', 'Gangguan gerak ibu jari', '2022-12-25 07:18:24', '2022-12-25 07:18:24'),
(16, 'G16', 'Bengkak/kemerahan dipangkal ibu jari', '2022-12-25 07:18:55', '2022-12-25 07:18:55'),
(17, 'G17', 'Nyeri bahu bagian depan', '2022-12-29 07:36:43', '2022-12-29 07:36:43'),
(18, 'G18', 'Nyeri bahu saat mengangkat atau menurunkan lengan', '2022-12-29 07:37:03', '2022-12-29 07:37:03'),
(19, 'G19', 'Bahu mengalami kekakuan', '2022-12-29 07:38:10', '2022-12-29 07:38:10'),
(20, 'G20', 'Nyeri pada bagian punggung atas dan tulang rusuk', '2022-12-29 07:42:40', '2022-12-29 07:42:40'),
(21, 'G21', 'Nyeri saat menarik nafas dalam, batuk dan bersin', '2022-12-29 07:43:27', '2022-12-29 07:43:27'),
(22, 'G22', 'Nyeri saat di sentuh pada bagian dada', '2022-12-29 07:44:12', '2022-12-29 07:44:12'),
(23, 'G23', 'Nyeri pada Kaki', '2022-12-29 08:08:51', '2022-12-29 08:08:51'),
(24, 'G24', 'Nyeri setelah aktivitas pada lutut', '2022-12-29 08:09:29', '2022-12-29 08:09:29'),
(25, 'G25', 'Kekakuan pada lutut', '2022-12-29 08:10:12', '2022-12-29 08:10:12'),
(26, 'G26', 'Nyeri pada Tumit', '2022-12-29 08:21:12', '2022-12-29 08:21:12'),
(27, 'G27', 'Nyeri dan  kaku pada pergelangan kaki', '2022-12-29 08:21:51', '2022-12-29 08:21:51'),
(28, 'G28', 'Bengkak area pergelangan kaki', '2022-12-29 08:22:32', '2022-12-29 08:22:32'),
(29, 'G29', 'Terasa hangat ketika diraba', '2022-12-29 08:30:23', '2022-12-29 08:30:23'),
(30, 'G30', 'Keterbatasan gerakan lutut', '2022-12-29 08:30:44', '2022-12-29 08:30:44'),
(31, 'G31', 'Adanya pembengkakan/peradangan pada persendiaan lutut', '2022-12-29 08:31:51', '2022-12-29 08:31:51'),
(32, 'G32', 'Nyeri pada lutut', '2022-12-29 08:57:43', '2022-12-29 08:57:43'),
(33, 'G33', 'Nyeri pada Leher', '2022-12-29 09:35:05', '2022-12-29 09:35:05'),
(34, 'G34', 'Terasa kaku pada Leher', '2022-12-30 01:37:41', '2022-12-30 01:37:41'),
(35, 'G35', 'Nyeri menjalar sampai ke bahu, lengan dan tangan', '2022-12-30 01:38:13', '2022-12-30 01:38:13'),
(36, 'G36', 'Kebas pada bahu/lengan/tangan', '2022-12-30 01:38:43', '2022-12-30 01:38:43'),
(37, 'G37', 'Nyeri pada area antara leher ke bahu.', '2022-12-30 01:42:19', '2022-12-30 01:42:19'),
(38, 'G38', 'Sakit Kepala', '2022-12-30 01:42:57', '2022-12-30 01:42:57'),
(39, 'G39', 'Kram/Tegang pada otot leher yang hilang dan timbul', '2022-12-30 01:43:22', '2022-12-30 01:43:22'),
(40, 'G40', 'Kekakuan bagian leher', '2022-12-30 01:47:41', '2022-12-30 01:47:41'),
(41, 'G41', 'Rasa sakit bertambah saat melakukan pekerjaan dalam waktu yang lama', '2022-12-30 01:48:09', '2022-12-30 01:48:09'),
(42, 'G42', 'Nyeri menjalar muncul mulai dari leher hingga jari-jari tangan', '2022-12-30 01:53:20', '2022-12-30 01:53:20'),
(43, 'G43', 'Adanya rasa Baal pada tangan', '2022-12-30 01:53:44', '2022-12-30 01:53:44'),
(44, 'G44', 'Kelemahan dari otot-otot lengan atas sampai bawah', '2022-12-30 01:55:22', '2022-12-30 01:55:22'),
(45, 'G45', 'Nyeri pada Pinggang', '2022-12-30 02:01:11', '2022-12-30 02:01:11'),
(46, 'G46', 'Nyeri seperti menusuk dari bokong sampai ke kaki', '2022-12-30 02:02:38', '2022-12-30 02:02:38'),
(47, 'G47', 'Kram atau kelemahan pada kaki', '2022-12-30 02:04:02', '2022-12-30 02:04:02'),
(48, 'G48', 'Mati rasa di antara kaki, paha bagian dalam, dan bagian belakang kaki', '2022-12-30 02:14:22', '2022-12-30 02:14:22'),
(49, 'G49', 'Pegal pada pinggang', '2022-12-30 02:17:47', '2022-12-30 02:17:47'),
(50, 'G50', 'Kram otot pada punggung bawah dan pinggang', '2022-12-30 02:18:12', '2022-12-30 02:18:12'),
(51, 'G51', 'Linu pada panggul', '2022-12-30 02:25:47', '2022-12-30 02:25:47'),
(52, 'G52', 'Kaku, kesulitan berjalan dan berdiri dalam waktu yang lama', '2022-12-30 02:27:00', '2022-12-30 02:27:00'),
(53, 'G53', 'Nyeri/sakit ketika punggung dan pinggang bergerak.', '2022-12-30 02:27:29', '2022-12-30 02:27:29'),
(54, 'G54', 'Kehilangan kontrol BAK dan BAB', '2022-12-30 02:41:08', '2022-12-30 02:41:08'),
(55, 'G55', 'Mati rasa pada selangkangan', '2022-12-30 02:51:58', '2022-12-30 02:51:58'),
(56, 'G56', 'Nyeri pada punggung', '2022-12-30 02:52:16', '2022-12-30 02:52:16'),
(57, 'G57', 'Kesulitan mengangkat kaki saat berjalan atau aktifitas', '2022-12-30 03:10:10', '2022-12-30 03:10:10'),
(58, 'G58', 'Nyeri pinggang/punggunng bawah bertambah saat bergerak', '2022-12-30 03:10:31', '2022-12-30 03:10:31'),
(59, 'G59', 'Nyeri pada punggung atas atau tengah.', '2022-12-30 07:27:10', '2022-12-30 07:27:10'),
(60, 'G60', 'Nyeri menjalar ke dinding dada, tulang dada, tulang rusuk dan perut', '2022-12-30 07:31:13', '2022-12-30 07:31:13'),
(61, 'G61', 'Ada kram otot pada sekitar punggung', '2022-12-30 07:33:43', '2022-12-30 07:33:43'),
(62, 'G62', 'Kehilangan rentang gerak dengan berkurangnya kemampuan untuk menggerakkan batang tubuh', '2022-12-30 07:34:21', '2022-12-30 07:34:21'),
(63, 'G63', 'Rasa tidak nyaman saat berdiri', '2022-12-30 07:47:31', '2022-12-30 07:47:31'),
(64, 'G64', 'Adanya kelumpuhan pada kaki', '2022-12-30 07:56:26', '2022-12-30 07:56:26'),
(65, 'G65', 'Nyeri menjalar sampai kebagian selangkangan', '2022-12-30 07:56:45', '2022-12-30 07:56:45'),
(66, 'G66', 'Adanya tremor dan kontraksi yang berlebihan pada kaki', '2022-12-30 07:57:12', '2022-12-30 07:57:12'),
(67, 'G67', 'Nyeri pada Seluruh Badan', '2022-12-30 08:01:14', '2022-12-30 08:01:14'),
(68, 'G68', 'Rasa sakit yang menyebar.', '2022-12-30 08:02:29', '2022-12-30 08:02:29'),
(69, 'G69', 'Gangguan kecemasan', '2022-12-30 08:03:09', '2022-12-30 08:04:02'),
(70, 'G70', 'Kesulitan berkonsentrasi dan fokus', '2022-12-30 08:03:28', '2022-12-30 08:03:28'),
(71, 'G71', 'Otot kram dan berkedut', '2022-12-30 08:04:37', '2022-12-30 08:04:37');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_penyakit`
--

CREATE TABLE `t_penyakit` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_penyakit` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyakit` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_penyakit`
--

INSERT INTO `t_penyakit` (`id`, `kode_penyakit`, `nama_penyakit`, `deskripsi`, `created_at`, `updated_at`) VALUES
(4, 'P01', 'Tennis Elbow ( Lateral Epicondylitis )', 'Kondisi medis ketika siku bagian luar terasa sakit. Ini juga bisa menyebar ke lengan bagian bawah hingga pergelangan tangan', '2022-12-25 00:45:12', '2022-12-25 00:45:12'),
(5, 'P02', 'Golfer\'s Elbow ( Medial Epicondilytis )', 'Suatu kondisi yang menyebabkan rasa sakit pada bagian tendon otot lengan bawah yang menempel pada tonjolan tulang di bagian dalam siku', '2022-12-25 00:46:58', '2022-12-25 00:46:58'),
(6, 'P03', 'De Quervain Tenosynovitis', 'Kondisi nyeri yang mempengaruhi tendon di sisi ibu jari pergelangan tangan dan merasakan sakit saat memutar pergelangan tangan, menggenggam sesuatu, atau mengepalkan tangan', '2022-12-25 00:47:42', '2022-12-25 00:47:42'),
(7, 'P04', 'Osteoarthritis Tangan', 'Peradangan yang menyebabkan nyeri dan kekakuan pada persendian tangan. Osteoarthritis dapat terjadi di banyak area tangan dan pergelangan tangan. Di tangan yang sehat, persendian terbentuk dari dua permukaan tulang halus yang dilapisi tulang rawan, jaringan licin yang menyediakan landasan rata yang ideal untuk meluncur dan memungkinkan permukaan tulang menyatu dengan baik. Jika tulang rawan aus, maka pergerakan menjadi tidak sempurna. Hasilnya adalah kontak tulang-ke-tulang, yang menyebabkan rasa sakit, kaku dan kesulitan ketika menggerakan tangan.', '2022-12-25 00:48:57', '2022-12-25 00:48:57'),
(8, 'P05', 'Rotator Cuff Tendinitis', 'Peradangan pada tendon rotator cuff, yaitu supraspinatus, infraspinatus, teres minor, dan subscapularis', '2022-12-25 04:14:14', '2022-12-25 04:14:14'),
(9, 'P06', 'Intercostal Muscle Strain', 'Otot interkostal adalah otot yang ada di dalam tulang rusuk. Terdiri dari tiga lapisan otot lapisan luar, dalam, dan terdalam yang mengisi ruang di antara tulang rusuk. Seperti otot lainnya, otot interkostal dapat kram/kontraksi yang tiba-tiba atau berulang, menyebabkan rasa sakit, sesak pada dada, dan kesulitan melakukan aktivitas sehari-hari.', '2022-12-25 04:19:35', '2022-12-25 04:19:35'),
(10, 'P07', 'Jumper\'s Knee ( Patellar Tendonitis )', 'Nyeri pada bagian patellar tendon akibat gerakan melompat yang berulang sehingga perlahan dapat meregangkan tendon patela sehingga patellar tendon mengalami peradangan. Seiring berjalannya waktu, jika dibiarkan akan terjadi banyak keregangan kecil pada tendon dan robekan kecil dan akhirnya jaringan pada tendon lemah dan sakit.', '2022-12-25 04:42:00', '2022-12-25 04:42:00'),
(11, 'P08', 'Achilles Tendinitis', 'Cedera akibat penggunaan yang berlebihan pada tendon Achilles. Tendon Achilles adalah jaringan yang menghubungkan otot betis di bagian belakang kaki bagian bawah ke tulang tumit', '2022-12-25 04:46:41', '2022-12-25 04:46:41'),
(12, 'P09', 'Osteoarthritis Knee (Lutut)', 'Osteoarthritis lutut terjadi ketika tulang rawan di sendi lutut rusak. Osteoarthritis lutut terjadi karena tergerusnya tulang rawan sehingga tulang rawan pada lutut bergesekan. Gesekan tersebut membuat lutut terasa sakit, menjadi kaku dan terkadang membengkak', '2022-12-25 04:53:11', '2022-12-25 04:53:11'),
(13, 'P10', 'Neck Pain (Degenerative disc disease/Cervical radiculopathy/Nerve compression)', 'Seiring bertambahnya usia, keadaan discuss di tulang belakang dan leher akan mulai menurun. Keadaan seperti itu yang menyebabkan penyakit degenerative disc disease, yang merupakan istilah yang digunakan untuk menggambarkan perubahan normal pada disc tulang belakang karena bertambahnya usia.\r\nResiko Degenerasi discuss/Cervical radiculopathy/Nerve compression lebih besar terjadi pada orang yang merokok, obesitas, dan orang yang sering melakukan angkat berat.', '2022-12-29 09:28:34', '2022-12-29 09:28:34'),
(14, 'P11', 'Tension Neck Syndrome', 'Tension neck syndrome adalah kondisi yang menyebabkan kekakuan pada leher, nyeri pada leher dan sakit kepala dari leher. Sering disebut ketegangan leher atau sindrom cervicobrachial, dan kadang-kadang disertai dengan myalgia trapezius.', '2022-12-29 09:32:15', '2022-12-29 09:32:15'),
(15, 'P12', 'Cervical facet syndrome', 'Jenis osteoartritis/peradangan pada tulang Cervical yang terjadi pada struktur satu atau lebih sendi facet vertebral.', '2022-12-29 09:32:52', '2022-12-29 09:32:52'),
(16, 'P13', 'Cervical Herniated Disc', 'Kondisi ketika bantalan atau discuss (soft gel disc atau nucleus pulposus) di antara vertebra (tulang belakang) keluar dari posisi semula atau robek dan menjepit saraf ada pada posisi belakang', '2022-12-29 09:33:38', '2022-12-29 09:33:38'),
(17, 'P14', 'Lumbar Canal Stenosi', 'Stenosis tulang belakang terjadi ketika ruas tulang belakang terlalu kecil. Hal ini dapat memberi tekanan pada sumsum tulang belakang dan saraf yang melewati antara tulang belakang. Stenosis tulang belakang paling sering terjadi di punggung bawah dan leher.', '2022-12-29 09:38:10', '2022-12-29 09:38:10'),
(18, 'P15', 'Lower Back Muscle Strain', 'Cedera pada punggung bagian bawah sehingga menyebabkan tendon dan otot yang rusak dan pada akhirnya otot menjadi tegang dan terasa sakit.', '2022-12-29 09:38:40', '2022-12-29 09:38:40'),
(19, 'P16', 'Spondylolisthesis', 'Spondylolysis adalah adanya retakan kecil, atau patah tulang, antara dua vertebra (tulang di tulang belakang).', '2022-12-29 09:39:26', '2022-12-29 09:39:26'),
(20, 'P17', 'Lumbar Herniated Disc', 'Fragmen dari inti diskus yang keluar dari anulus, ke dalam kanal tulang belakang melalui robekan atau ruptur di anulus. Discuss yang mengalami herniasi biasanya berada pada tahap awal degenerasi/penuaan.\r\nKanal tulang belakang memiliki ruang yang terbatas, yang tidak memadai untuk saraf tulang belakang dan fragmen diskus hernia dalam satu kanal sehingga menekan saraf tulang belakang yang akan menimbulkan rasa sakit.', '2022-12-29 09:40:26', '2022-12-29 09:40:26'),
(21, 'P18', 'Thoracic Degenerative disc disease', 'Penyakit ini adalah suatu kondisi yang dihasilkan dari perubahan keausan pada discuss tulang belakang dan dapat terjadi di bagian tulang vertebra thoracal sehingga terjadinya penekanan pada syaraf yang berada di antara tulang belakang.', '2022-12-29 09:43:29', '2022-12-29 09:43:29'),
(22, 'P19', 'Thoracic Muscle tension or strain', 'Suatu kondisi cedera pada otot dan tendon pada bagian punggung. \r\nPunggung adalah struktur tulang dan otot yang kompleks, didukung oleh tulang rawan, tendon dan ligamen, Punggung menanggung sebagian besar berat tubuh selama berjalan, berlari, mengangkat, dan aktivitas lainnya. Maka, hal ini menjadi wajar jika kram/ketegangan otot terjadi.', '2022-12-29 09:44:07', '2022-12-29 09:44:07'),
(23, 'P20', 'Thoracic Herniated Disc', 'Suatu kondisi dimana bagian luar discuss pada tulang vertebra thoracal robek/rusak sehingga bagian dalam dari tulang tersebut keluar. Ketika hal ini terjadi maka dapat terjadi penekanan pada syaraf, radang dan mengiritasi badan syaraf sehingga timbul rasa seperti kesemutan, mati rasa ada bagian tertentu dan juga kelemahan pada anggota gerak bawah', '2022-12-29 09:44:34', '2022-12-29 09:44:34'),
(24, 'P21', 'Fibromyalgia', 'Fibromyalgia adalah gangguan/penyakit yang ditandai dengan nyeri muskuloskeletal yang meluas disertai dengan kelelahan anggota tubuh, gangguan tidur, gangguan memori dan masalah suasana hati/mood issues.', '2022-12-29 09:45:12', '2022-12-29 09:45:12');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_penyebab`
--

CREATE TABLE `t_penyebab` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_penyebab` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_penyebab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_penyebab`
--

INSERT INTO `t_penyebab` (`id`, `kode_penyebab`, `nama_penyebab`, `created_at`, `updated_at`) VALUES
(6, 'PE001', 'Beban aktifitas yang berlebihan', '2022-12-27 23:57:08', '2022-12-27 23:58:06'),
(7, 'PE002', 'Tindakan berulang dari otot-otot lengan bawah di dekat sendi siku.', '2022-12-27 23:58:35', '2022-12-27 23:58:35'),
(8, 'PE003', 'Adanya stress/beban gerakan yang berlebihan atau berulang terutama gerakan pergelangan tangan dan jari', '2022-12-28 00:04:04', '2022-12-28 00:04:04'),
(9, 'PE004', 'Kurang pemanasan ketika ingin berolahraga', '2022-12-28 00:04:53', '2022-12-28 00:04:53'),
(10, 'PE005', 'Posisi tangan salah ketika melakukan sesuatu', '2022-12-28 00:05:26', '2022-12-28 00:05:26'),
(11, 'PE006', 'Penyebab pasti de Quervain tenosynovitis tidak diketahui', '2022-12-28 00:07:55', '2022-12-28 00:07:55'),
(12, 'PE007', 'Aktivitas apa pun yang bergantung pada gerakan tangan atau pergelangan tangan yang berulang - seperti bekerja di kebun, bermain golf atau olahraga raket, atau mengangkat bayi - dapat memperburuk kondisi', '2022-12-28 00:09:12', '2022-12-28 00:09:12'),
(13, 'PE008', 'Aktivitas berulang bahu/tangan yang berada di atas kepala seperti melempar, menyapu, mencuci mobil atau jendela dan banyak jenis gerakan yang sangat berulang lainnya', '2022-12-31 09:57:40', '2022-12-31 09:57:40'),
(14, 'PE009', 'Otot melemah, kelelahan, trauma langsung seperti jatuh atau kecelakaan mobil, atau olahraga seperti hoki, atau gerakan dengan memutar secara berulang', '2022-12-31 10:02:24', '2022-12-31 10:02:24'),
(15, 'PE010', 'Gerakan melompat yang berulang sehingga perlahan dapat meregangkan tendon patela sehingga patellar tendon mengalami peradangan.', '2022-12-31 10:09:45', '2022-12-31 10:09:45'),
(16, 'PE011', 'penggunaan yang berlebihan pada tendon Achilles', '2022-12-31 10:10:45', '2022-12-31 10:10:45'),
(17, 'PE012', 'Tergerusnya tulang rawan sehingga tulang rawan pada lutut bergesekan', '2022-12-31 10:12:02', '2022-12-31 10:12:02'),
(18, 'PE013', 'Perubahan struktur pada tulang belakang yang berhubungan dengan arthritis.', '2022-12-31 10:20:29', '2022-12-31 10:20:29'),
(19, 'PE014', 'Penggunaan otot yang berlebihan seperti mengangkat beban berat, kesalahan posisi cara mengangkat beban, gerakan yang tiba-tiba, olahraga dan postur tubuh yang buruk', '2022-12-31 10:21:44', '2022-12-31 10:21:44'),
(20, 'PE015', 'Melakukan pekerjaan yang sering membungkuk dan mengangkat benda berat atau mengoperasikan mesin dengan daya getar, dan cedera', '2023-01-03 07:33:31', '2023-01-03 07:33:31'),
(21, 'PE016', 'Penyebab fibromyalgia belum diketahui secara pasti', '2023-01-03 07:36:52', '2023-01-03 07:36:52'),
(22, 'PE017', 'Perubahan genetik', '2023-01-03 07:37:10', '2023-01-03 07:37:10'),
(23, 'PE018', 'Riwayat cedera, infeksi, operasi, atau kejadian traumatis', '2023-01-03 07:37:39', '2023-01-03 07:37:39'),
(24, 'PE019', 'Gangguan tidur', '2023-01-03 07:37:54', '2023-01-03 07:37:54'),
(25, 'PE020', 'Gangguan senyawa kimia di dalam otak', '2023-01-03 07:38:10', '2023-01-03 07:38:10'),
(28, 'PE021', 'Penuaan/usia', '2023-01-03 07:55:25', '2023-01-03 07:55:25'),
(29, 'PE022', 'Cedera/trauma pada tulang belakang', '2023-01-03 07:55:57', '2023-01-03 07:59:32'),
(30, 'PE023', 'Mengangkat beban berlebih', '2023-01-03 07:57:05', '2023-01-03 07:57:05'),
(31, 'PE024', 'Osteoporosis yang terjadi di tulang belakang dan posisi yang salah ketika beraktifitas', '2023-01-03 07:57:22', '2023-01-03 07:57:22'),
(32, 'PE025', 'Sering membungkuk berlebihan', '2023-01-03 08:06:14', '2023-01-03 08:06:14'),
(33, 'PE026', 'Kelemahan pada otot punggung atau perut', '2023-01-03 08:06:45', '2023-01-03 08:06:45'),
(34, 'PE027', 'Kelebihan berat badan', '2023-01-03 08:08:28', '2023-01-03 08:08:28'),
(35, 'PE028', 'Cedera/trauma pada tulang belakang', '2023-01-03 08:09:56', '2023-01-03 08:09:56');

-- --------------------------------------------------------

--
-- Struktur dari tabel `t_solusi`
--

CREATE TABLE `t_solusi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `kode_solusi` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_solusi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `t_solusi`
--

INSERT INTO `t_solusi` (`id`, `kode_solusi`, `nama_solusi`, `created_at`, `updated_at`) VALUES
(3, 'S001', 'Mengkonsumsi makanan berkalsium', '2022-12-06 07:43:42', '2022-12-06 07:43:42'),
(4, 'S002', 'Berjemur setiap pagi', '2022-12-06 07:44:08', '2022-12-06 07:44:08');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'vermeil', 'vermeilsirius77@gmail.com', NULL, '$2y$10$5h0Efcyh62XkxkuKHJCN9uD5JkkVl95GrcAC3QQ/rW4ypsRoUhrky', 'Admin', 'gJC1Nzogorc80CpDPOiK9JGGbFLcmXgvUSwcttMhXHUeoBVWsy7T74zbhAHu', '2022-11-09 17:59:15', '2022-11-09 17:59:15'),
(6, 'Faisal NurIbrahim', 'isalganteng@gmail.com', NULL, '$2y$10$iyRG8LXGYPT6xPsHQGSqNek9Kt7x6cdbocS91z2jZk7gbhIbjhL8K', 'Admin', NULL, '2022-11-29 09:53:09', '2022-11-29 09:53:09'),
(7, 'sqwdq', 'wednesday@gmail.com', NULL, '$2y$10$88d5xmiljFZAGQy8k6VqAOyUxh3MBkSUhom/OJvPxtdjdc0FZkBEi', 'Admin', NULL, '2022-11-29 10:00:15', '2022-11-29 10:00:15'),
(9, 'darsini', 'darsini@gmail.com', NULL, '$2y$10$VpUaqUpkSWnNIpIpcCs5X.Yf3nPH9zxauo.FZtzqLnoNmi6Vawtc6', 'Admin', NULL, '2022-11-29 10:09:32', '2022-11-29 10:09:32'),
(13, 'wednesday', 'wednesday@gamail.com', NULL, '$2y$10$nxwrAVVtlgY/9JwKgHZJ1OvSutO9js.7uKVI988wkMCNpFdmnKfd6', 'Admin', NULL, '2022-11-29 10:23:30', '2022-11-29 10:23:30'),
(15, 'friday', 'friday@gmail.com', NULL, '$2y$10$K3/oTVIwfTngkF1M7ka8M.GtJ.qDlH7OznxJlsq1WmEeYH9CHuvti', 'Admin', NULL, '2022-11-29 10:34:18', '2022-11-29 10:34:18');

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
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `t_datapasien`
--
ALTER TABLE `t_datapasien`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_diagnosa`
--
ALTER TABLE `t_diagnosa`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `t_dpgejala`
--
ALTER TABLE `t_dpgejala`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_penyakit` (`kode_penyakit`,`kode_gejala`),
  ADD KEY `kode_gejala` (`kode_gejala`);

--
-- Indeks untuk tabel `t_dppenyebab`
--
ALTER TABLE `t_dppenyebab`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_dppenyebab_id_penyakit_foreign` (`id_penyakit`),
  ADD KEY `t_dppenyebab_id_penyebab_foreign` (`id_penyebab`);

--
-- Indeks untuk tabel `t_dpsolusi`
--
ALTER TABLE `t_dpsolusi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `t_dpsolusi_id_penyakit_foreign` (`id_penyakit`),
  ADD KEY `t_dpsolusi_id_solusi_foreign` (`id_solusi`);

--
-- Indeks untuk tabel `t_gejala`
--
ALTER TABLE `t_gejala`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_gejala` (`kode_gejala`),
  ADD UNIQUE KEY `id` (`kode_gejala`);

--
-- Indeks untuk tabel `t_penyakit`
--
ALTER TABLE `t_penyakit`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `kode_penyakit` (`kode_penyakit`);

--
-- Indeks untuk tabel `t_penyebab`
--
ALTER TABLE `t_penyebab`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `t_penyebab_kode_penyebab_unique` (`kode_penyebab`);

--
-- Indeks untuk tabel `t_solusi`
--
ALTER TABLE `t_solusi`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `t_solusi_kode_solusi_unique` (`kode_solusi`);

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
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_dpgejala`
--
ALTER TABLE `t_dpgejala`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT untuk tabel `t_dppenyebab`
--
ALTER TABLE `t_dppenyebab`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `t_dpsolusi`
--
ALTER TABLE `t_dpsolusi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `t_gejala`
--
ALTER TABLE `t_gejala`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT untuk tabel `t_penyakit`
--
ALTER TABLE `t_penyakit`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT untuk tabel `t_penyebab`
--
ALTER TABLE `t_penyebab`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT untuk tabel `t_solusi`
--
ALTER TABLE `t_solusi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `t_dpgejala`
--
ALTER TABLE `t_dpgejala`
  ADD CONSTRAINT `t_dpgejala_ibfk_1` FOREIGN KEY (`kode_penyakit`) REFERENCES `t_penyakit` (`kode_penyakit`),
  ADD CONSTRAINT `t_dpgejala_ibfk_2` FOREIGN KEY (`kode_gejala`) REFERENCES `t_gejala` (`kode_gejala`);

--
-- Ketidakleluasaan untuk tabel `t_dppenyebab`
--
ALTER TABLE `t_dppenyebab`
  ADD CONSTRAINT `t_dppenyebab_id_penyakit_foreign` FOREIGN KEY (`id_penyakit`) REFERENCES `t_penyakit` (`id`),
  ADD CONSTRAINT `t_dppenyebab_id_penyebab_foreign` FOREIGN KEY (`id_penyebab`) REFERENCES `t_penyebab` (`id`);

--
-- Ketidakleluasaan untuk tabel `t_dpsolusi`
--
ALTER TABLE `t_dpsolusi`
  ADD CONSTRAINT `t_dpsolusi_id_penyakit_foreign` FOREIGN KEY (`id_penyakit`) REFERENCES `t_penyakit` (`id`),
  ADD CONSTRAINT `t_dpsolusi_id_solusi_foreign` FOREIGN KEY (`id_solusi`) REFERENCES `t_solusi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
