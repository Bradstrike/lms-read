-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Anamakine: 127.0.0.1
-- Üretim Zamanı: 11 Eki 2022, 18:09:28
-- Sunucu sürümü: 10.4.24-MariaDB
-- PHP Sürümü: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Veritabanı: `lms`
--

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `activity_log`
--

CREATE TABLE `activity_log` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint(20) UNSIGNED DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `properties` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`properties`)),
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `activity_log`
--

INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
(1, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-22 04:54:58', '2022-09-22 04:54:58'),
(2, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 21, '[]', NULL, '2022-09-22 04:56:41', '2022-09-22 04:56:41'),
(3, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-22 11:18:07', '2022-09-22 11:18:07'),
(4, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-23 07:07:59', '2022-09-23 07:07:59'),
(5, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2022-09-23 07:18:44', '2022-09-23 07:18:44'),
(6, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-23 11:11:24', '2022-09-23 11:11:24'),
(7, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-24 05:36:10', '2022-09-24 05:36:10'),
(8, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2022-09-24 10:11:43', '2022-09-24 10:11:43'),
(9, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-26 05:03:37', '2022-09-26 05:03:37'),
(10, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2022-09-26 05:14:34', '2022-09-26 05:14:34'),
(11, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-26 09:07:55', '2022-09-26 09:07:55'),
(12, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-27 04:28:07', '2022-09-27 04:28:07'),
(13, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-27 04:28:39', '2022-09-27 04:28:39'),
(14, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2022-09-27 04:28:46', '2022-09-27 04:28:46'),
(15, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-27 10:28:50', '2022-09-27 10:28:50'),
(16, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2022-09-27 10:29:00', '2022-09-27 10:29:00'),
(17, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 6, '[]', NULL, '2022-09-27 10:29:18', '2022-09-27 10:29:18'),
(18, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 6, '[]', NULL, '2022-09-28 05:22:14', '2022-09-28 05:22:14'),
(19, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 6, '[]', NULL, '2022-09-28 09:41:30', '2022-09-28 09:41:30'),
(20, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 6, '[]', NULL, '2022-09-28 09:42:26', '2022-09-28 09:42:26'),
(21, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 6, '[]', NULL, '2022-09-28 09:43:32', '2022-09-28 09:43:32'),
(22, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-28 09:43:38', '2022-09-28 09:43:38'),
(23, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 3, '[]', NULL, '2022-09-28 10:33:04', '2022-09-28 10:33:04'),
(24, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-29 05:00:13', '2022-09-29 05:00:13'),
(25, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-09-30 06:22:35', '2022-09-30 06:22:35'),
(26, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-01 09:11:47', '2022-10-01 09:11:47'),
(27, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-04 09:05:08', '2022-10-04 09:05:08'),
(28, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-05 06:24:08', '2022-10-05 06:24:08'),
(29, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-05 06:24:25', '2022-10-05 06:24:25'),
(30, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-05 06:24:50', '2022-10-05 06:24:50'),
(31, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-05 06:25:09', '2022-10-05 06:25:09'),
(32, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-05 09:13:47', '2022-10-05 09:13:47'),
(33, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-05 09:28:40', '2022-10-05 09:28:40'),
(34, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-05 10:39:08', '2022-10-05 10:39:08'),
(35, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-05 10:39:22', '2022-10-05 10:39:22'),
(36, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-05 10:45:07', '2022-10-05 10:45:07'),
(37, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-05 10:51:07', '2022-10-05 10:51:07'),
(38, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 11, '[]', NULL, '2022-10-05 10:51:13', '2022-10-05 10:51:13'),
(39, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-05 10:56:23', '2022-10-05 10:56:23'),
(40, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-05 12:24:44', '2022-10-05 12:24:44'),
(41, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 11, '[]', NULL, '2022-10-06 05:28:15', '2022-10-06 05:28:15'),
(42, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 11, '[]', NULL, '2022-10-06 09:57:27', '2022-10-06 09:57:27'),
(43, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-06 09:57:34', '2022-10-06 09:57:34'),
(44, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-06 09:58:46', '2022-10-06 09:58:46'),
(45, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 9, '[]', NULL, '2022-10-06 09:58:54', '2022-10-06 09:58:54'),
(46, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-06 10:32:00', '2022-10-06 10:32:00'),
(47, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-06 10:58:19', '2022-10-06 10:58:19'),
(48, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-06 11:00:05', '2022-10-06 11:00:05'),
(49, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-06 11:00:11', '2022-10-06 11:00:11'),
(50, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-06 11:21:49', '2022-10-06 11:21:49'),
(51, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 12, '[]', NULL, '2022-10-06 11:22:56', '2022-10-06 11:22:56'),
(52, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-06 11:27:22', '2022-10-06 11:27:22'),
(53, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-06 11:38:17', '2022-10-06 11:38:17'),
(54, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 05:51:05', '2022-10-07 05:51:05'),
(55, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 9, '[]', NULL, '2022-10-07 05:54:27', '2022-10-07 05:54:27'),
(56, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 9, '[]', NULL, '2022-10-07 08:42:34', '2022-10-07 08:42:34'),
(57, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 08:42:41', '2022-10-07 08:42:41'),
(58, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 09:19:31', '2022-10-07 09:19:31'),
(59, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-07 10:49:14', '2022-10-07 10:49:14'),
(60, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 9, '[]', NULL, '2022-10-07 10:50:05', '2022-10-07 10:50:05'),
(61, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 04:48:12', '2022-10-08 04:48:12'),
(62, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 06:54:23', '2022-10-08 06:54:23'),
(63, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 06:54:35', '2022-10-08 06:54:35'),
(64, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 06:54:56', '2022-10-08 06:54:56'),
(65, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 9, '[]', NULL, '2022-10-08 06:55:03', '2022-10-08 06:55:03'),
(66, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 9, '[]', NULL, '2022-10-08 06:57:07', '2022-10-08 06:57:07'),
(67, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-08 06:57:12', '2022-10-08 06:57:12'),
(68, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-08 07:08:39', '2022-10-08 07:08:39'),
(69, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 07:08:44', '2022-10-08 07:08:44'),
(70, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 07:19:51', '2022-10-08 07:19:51'),
(71, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-08 07:19:57', '2022-10-08 07:19:57'),
(72, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-08 07:20:32', '2022-10-08 07:20:32'),
(73, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 07:20:38', '2022-10-08 07:20:38'),
(74, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 9, '[]', NULL, '2022-10-08 11:34:33', '2022-10-08 11:34:33'),
(75, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-08 12:17:35', '2022-10-08 12:17:35'),
(76, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-10 05:48:38', '2022-10-10 05:48:38'),
(77, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-10 05:49:05', '2022-10-10 05:49:05'),
(78, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 9, '[]', NULL, '2022-10-10 05:49:10', '2022-10-10 05:49:10'),
(79, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 9, '[]', NULL, '2022-10-10 05:54:52', '2022-10-10 05:54:52'),
(80, 'default', 'çıkış yaptı', NULL, NULL, NULL, 'App\\Models\\User', 9, '[]', NULL, '2022-10-10 05:55:09', '2022-10-10 05:55:09'),
(81, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-10 05:55:15', '2022-10-10 05:55:15'),
(82, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-11 05:18:44', '2022-10-11 05:18:44'),
(83, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2022-10-11 06:46:50', '2022-10-11 06:46:50'),
(84, 'default', 'oturum açtı', NULL, NULL, NULL, 'App\\Models\\User', 2, '[]', NULL, '2022-10-11 11:51:04', '2022-10-11 11:51:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_category_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `language` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `word_count` int(11) NOT NULL,
  `download_link` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `book_categories`
--

CREATE TABLE `book_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `classroom_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `branches`
--

CREATE TABLE `branches` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Ön Ödemeli',
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_department` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tax_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `balance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ppn` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `branches`
--

INSERT INTO `branches` (`id`, `type`, `title`, `address`, `name`, `surname`, `phone`, `email`, `tax_department`, `tax_number`, `balance`, `ppn`, `created_at`, `updated_at`) VALUES
(1, 'Ön Ödemeli', 'Bogan-Prosacco', '2634 D\'Amore Villages\nLake Maximillia, SD 42585', 'Ayden', 'Johnson', '+19294669931', 'steuber.norbert@example.com', 'Pennsylvania', '4710235', '68658', '1', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(2, 'Ön Ödemeli', 'Carter and Sons', '13982 Alphonso Avenue Suite 578\nNolanview, SD 98272-3487', 'Marilie', 'Maggio', '+13308051160', 'una.effertz@example.org', 'Nebraska', '9605985', '54810', '1', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(3, 'Ön Ödemeli', 'Pfeffer Group', '5689 Stephon Shoal Apt. 427\nNew Reedberg, NE 55393-6904', 'Jimmy', 'Gerlach', '+16573536608', 'krista.ryan@example.net', 'Virginia', '5863562', '93553', '1', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(4, 'Ön Ödemeli', 'Becker, Steuber and Bashirian', '38243 Casper Curve Apt. 090\nAminafort, DE 19155-2393', 'Krystel', 'Schoen', '+17759543857', 'rebekah.pagac@example.com', 'Vermont', '5891434', '79321', '1', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(5, 'Ön Ödemeli', 'Hoeger Group', '4088 Block Passage Suite 353\nVirgilside, MA 17511', 'Hulda', 'Kuvalis', '+19862342642', 'jacinto.osinski@example.net', 'Alaska', '1635017', '45617', '1', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(6, 'Ön Ödemeli', 'Stamm-Dickinson', '41476 Gavin Cove\nNorth Maci, AL 04276-2706', 'Kenneth', 'Renner', '+17819307079', 'ldicki@example.net', 'Nebraska', '6759419', '86025', '1', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(7, 'Ön Ödemeli', 'Heller, Ullrich and Leannon', '7011 Wilderman Summit Suite 969\nNew Lucas, TN 61943-8501', 'Terrence', 'Bergstrom', '+13477948464', 'aimee.koss@example.net', 'Washington', '3447448', '19173', '1', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(8, 'Ön Ödemeli', 'Ferry-Oberbrunner', '6883 Judy Key\nNorth Rhodamouth, CT 67015', 'Dorothea', 'Reichert', '+16189833661', 'meaghan97@example.net', 'Tennessee', '8354985', '29361', '1', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(9, 'Ön Ödemeli', 'Graham-Purdy', '5142 Kamron Isle\nDionview, CT 53607', 'Natasha', 'Auer', '+14693034287', 'ykessler@example.org', 'Montana', '7996053', '82706', '1', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(10, 'Ön Ödemeli', 'Maggio-Stoltenberg', '13398 Hoppe Crossroad Apt. 420\nKhalidhaven, OK 06234', 'Stefanie', 'Schinner', '+12537924527', 'arianna28@example.org', 'Massachusetts', '2303412', '86517', '1', '2022-09-21 11:29:03', '2022-09-21 11:29:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `classrooms`
--

CREATE TABLE `classrooms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `creditcards`
--

CREATE TABLE `creditcards` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `holder_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `card_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `month` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `year` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cvv` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `exercises`
--

CREATE TABLE `exercises` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `exercises`
--

INSERT INTO `exercises` (`id`, `name`, `path`, `type`, `config`, `created_at`, `updated_at`) VALUES
(1, 'Block Reading', 'games/BlockReading/index.php', 'Makale', '[\'hiz\'=>\'Hız\',\'kelime\'=>\'Kelime\',\'sure\'=>\'Süre\']', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(2, 'Kelime Bulma', 'games/FindWord/index.php', 'Makale', '[\'kelimesayisi\'=>\'Kelime Sayısı\',\'kelime\'=>\'Kelime\',\'sure\'=>\'Süre\']', '2022-09-23 11:29:23', '2022-09-23 11:29:23'),
(4, 'Tek mi Çift mi', 'games/SingleOrDouble/tekmiciftmi.html', 'Makale', '[\'sure\'=>\'Süre\',\'sayi\'=>\'Sayı\',\'tek\'=>\'Tek\',\'cift\'=>\'Çift\']', '2022-09-28 09:48:17', '2022-09-28 09:48:17'),
(5, 'Dairesel Göz Egzersizi', 'games/CircleEyeExercise/index.html', 'Eş Anlamlı', '[\'sure\'=>\'Süre\']', '2022-09-28 09:50:35', '2022-09-28 09:50:35'),
(6, 'Takistoskop', 'games/t-scope/Takistoskop.html', 'Makale', '[\'kelime\'=>\'Kelime\',\'harfsayisi\'=>\'HarfSayısı\',\'kelimesayisi\'=>\'Kelime Sayısı\']', '2022-09-28 09:54:11', '2022-09-28 09:54:11'),
(7, 'Silinmeden Blok Okuma', 'games/SilinmedenBO/asilindex.htm', 'Makale', '[\'kelime\'=>\'Kelime\',\'hiz\',\'Hız\']', '2022-09-28 10:30:51', '2022-09-28 10:30:51'),
(8, 'Dikey ZigZag', 'games/VerticalZigzag/dikeyzigzag.html', 'Makale', '[\'hiz\'=>\'Hız\']', '2022-09-30 07:36:02', '2022-09-30 07:36:02'),
(9, 'Yatay ZigZag', 'games/HorizontalZigzag/yatayzigzag.htm', 'Makale', '[\'hiz\'=>\'Hız\']', '2022-09-30 08:06:33', '2022-09-30 08:06:33'),
(10, 'Kare Görme Alanı', 'games/Square/karegormealani.htm', 'Makale', '[\'skor\'=>\'Skor\',\'seviye\'=>\'Seviye\']', '2022-09-30 10:25:19', '2022-09-30 10:25:19'),
(11, 'Gölgeleme çalışması', 'games/Golgeleme/index.htm', 'Makale', '[\'hiz\'=>\'Hız\',\'kelime\'=>\'Kelime\',\'metin\'=>\'Metin\']', '2022-10-01 09:28:45', '2022-10-01 09:28:45'),
(12, 'Altıgen nokta göz egzersizi', 'games/AltigenAnimasyon/index.htm', 'Eş Anlamlı', '[\'none\']', '2022-10-01 09:58:54', '2022-10-01 09:58:54'),
(13, '13 nokta göz egzersizi', 'games/13point/index.html', 'Eş Anlamlı', '[\'none\']', '2022-10-01 10:13:25', '2022-10-01 10:13:25'),
(14, 'Daire Göz Egzersizi', 'games/CricleExercise/daireanimate.htm', 'Makale', '[\'hiz\'=>\'Hız\']', '2022-10-01 10:26:58', '2022-10-01 10:26:58');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `failed_jobs`
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
-- Tablo için tablo yapısı `games`
--

CREATE TABLE `games` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parameters` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `integrations`
--

CREATE TABLE `integrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `definition_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `integrations`
--

INSERT INTO `integrations` (`id`, `definition_type`, `name`, `config`, `created_at`, `updated_at`) VALUES
(1, 'SMS', 'NetGSM Sms', '{}', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(2, 'EMAIL', 'Mailchimp', '{}', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(3, 'POS', 'PayTR', '{}', '2022-09-21 11:29:04', '2022-09-21 11:29:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `json_definitions`
--

CREATE TABLE `json_definitions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `json_definitions`
--

INSERT INTO `json_definitions` (`id`, `title`, `content`, `type`, `created_at`, `updated_at`) VALUES
(1, 'Test JSON', '\n            <div id=\'lipsum\'>\n            <p>\n            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras accumsan nibh imperdiet, elementum nisl ornare, efficitur arcu. Suspendisse fringilla pharetra pulvinar. Integer consectetur lectus non sapien finibus, ac aliquam neque facilisis. Cras scelerisque id mauris sit amet rutrum. Donec lacinia suscipit ligula, eu tristique nulla interdum quis. Maecenas id faucibus lectus. In et est tincidunt, facilisis nisl in, bibendum nibh. Morbi augue ante, consequat quis arcu ut, fringilla imperdiet metus. Proin eget nunc ac orci finibus sodales. Pellentesque vel lectus quis leo porta sagittis. Curabitur lorem nunc, porta sit amet semper eget, condimentum in leo. Phasellus rhoncus ullamcorper sollicitudin.\n            </p>\n            <p>\n            Mauris fermentum blandit lobortis. Nam condimentum accumsan nisi, pellentesque efficitur ipsum ullamcorper eget. Donec facilisis vulputate massa nec faucibus. Etiam rhoncus, elit nec pretium ullamcorper, dui sapien dictum leo, sit amet auctor magna nisi eget lorem. Aliquam eu ullamcorper sem. Sed nibh ante, ultrices sit amet tristique quis, volutpat sed risus. Phasellus ornare at turpis sed vulputate. Ut semper quam justo. Cras malesuada est in ipsum interdum pulvinar. Vestibulum fermentum, dui eu pulvinar iaculis, turpis nisl egestas nisi, sit amet faucibus arcu lectus dapibus diam. Nulla facilisi. Maecenas semper finibus nisi non dictum. Proin sed aliquet velit, quis egestas sapien.\n            </p>\n            <p>\n            Pellentesque maximus diam quis finibus vehicula. Sed vitae scelerisque leo, vel sodales risus. Integer sit amet enim a diam pretium eleifend ut non nunc. Nulla facilisi. Maecenas felis sapien, malesuada vel dui vehicula, accumsan imperdiet ligula. Donec interdum varius cursus. Cras quis neque venenatis, porttitor eros eu, molestie eros. Ut laoreet ante sem, eu euismod leo ullamcorper quis. Sed rhoncus eleifend enim, ut vestibulum libero vulputate sit amet.\n            </p>\n            <p>\n            Phasellus placerat dui augue, ut finibus magna venenatis in. Morbi vitae odio vehicula, tempor mauris a, tempus elit. Pellentesque placerat lacus eu mi mollis congue. Morbi risus lacus, interdum vitae erat non, elementum accumsan elit. Maecenas aliquam risus et eleifend feugiat. Pellentesque sed nunc eleifend velit vulputate dignissim. Curabitur tincidunt tellus vel ipsum pulvinar, non condimentum urna venenatis. Proin egestas elit et lorem vestibulum, vel bibendum leo interdum. Donec placerat mi vel nibh malesuada, ac rutrum justo hendrerit. Fusce vitae quam at magna molestie porta. Mauris tristique nec augue eu sollicitudin. Aenean maximus nunc non aliquam pretium. In eu dolor eu risus faucibus vestibulum. Duis ante nisl, convallis sit amet viverra ut, vestibulum id mi. Curabitur vehicula mi et est sollicitudin blandit.\n            </p>\n            <p>\n            Aenean sed finibus massa, ut vulputate erat. Praesent accumsan eleifend risus, a vehicula velit blandit nec. Donec eget nisl vehicula, maximus odio a, placerat augue. Vestibulum justo est, pulvinar nec turpis sed, sagittis viverra est. Sed at mauris tortor. Maecenas tincidunt orci vel purus hendrerit gravida. Proin at orci sit amet mauris porttitor placerat. Maecenas a urna eu nulla imperdiet ultricies vel eu tellus. Ut id sodales mauris, ut molestie lectus. Quisque consequat pharetra pretium. Quisque sodales non lacus vitae ultricies. Integer et orci risus. Aliquam ligula nisl, fermentum et lorem euismod, dapibus luctus ex. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc pretium cursus rutrum.\n            </p>\n            </div>\n            ', 'Makale', '2022-09-21 11:29:04', '2022-09-21 11:29:04');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lectures`
--

CREATE TABLE `lectures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `exercise_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `icon` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `config` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `placement` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `lectures`
--

INSERT INTO `lectures` (`id`, `lesson_id`, `exercise_id`, `name`, `description`, `icon`, `config`, `placement`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'Hızlı okumaya giriş', 'Hızlı okuma teknikleri ile tanışma eğitimi.', '', '', 0, '2022-09-22 08:20:35', '2022-09-24 09:53:31'),
(2, 1, 2, 'Lecture 1', 'Lecture açıklaması', 'bi bi-book', '{\"hiz\":\"100\",\"kelime\":\"200\",\"sure\":\"300\"}', 1, '2022-09-24 09:53:09', '2022-09-24 09:53:31'),
(4, 1, 4, 'Lecture 2', 'Lecture 2 açıklaması', '', '', 0, '2022-09-29 08:21:52', '2022-09-28 21:00:00'),
(5, 1, 5, 'Lecture 3', 'Lecture 3 açıklaması', '', '', 0, NULL, NULL),
(6, 1, 6, 'Lecture 4', 'Lecture 4 açıklaması', '', '', 0, NULL, NULL),
(7, 1, 7, 'Lecture 5', 'Lecture 5 açıklaması', '', '', 0, NULL, NULL),
(8, 1, 8, 'Lecture 6', 'Lecture 6 açıklaması', '', '', 0, NULL, NULL),
(9, 1, 9, 'Lecture 7', 'Lecture 7 açıklaması', '', '', 0, NULL, NULL),
(10, 1, 10, 'Lecture 8', 'Lecture 8 açıklaması', '', '', 0, NULL, NULL),
(11, 1, 11, 'Lecture 9', 'Lecture 9 açıklaması', '', '', 0, NULL, NULL),
(12, 1, 12, 'Lecture 10', 'Lecture 10 açıklaması', '', '', 0, NULL, NULL),
(13, 1, 13, 'Lecture 11', 'Lecture 11 açıklaması', '', '', 0, NULL, NULL),
(14, 1, 14, 'Lecture 12', 'Lecture 12 açıklaması', '', '', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lecture_user`
--

CREATE TABLE `lecture_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `lecture_id` int(10) UNSIGNED NOT NULL,
  `duration` int(11) DEFAULT 0,
  `is_completed` tinyint(1) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `lecture_user`
--

INSERT INTO `lecture_user` (`id`, `user_id`, `lecture_id`, `duration`, `is_completed`, `created_at`, `updated_at`) VALUES
(2, 2, 1, 181, 1, NULL, NULL),
(3, 2, 2, 12031, 1, NULL, NULL),
(9, 2, 4, 595, 1, NULL, NULL),
(10, 2, 5, 221, 1, NULL, NULL),
(13, 2, 6, 5092, 1, NULL, NULL),
(16, 2, 7, 4384, 1, NULL, NULL),
(17, 2, 8, 765, 1, NULL, NULL),
(18, 2, 9, 244, 1, NULL, NULL),
(19, 2, 10, 310, 1, NULL, NULL),
(20, 2, 11, 1850, 1, NULL, NULL),
(21, 2, 12, 235, 1, NULL, NULL),
(22, 2, 13, 168, 1, NULL, NULL),
(23, 2, 14, 578, 1, NULL, NULL),
(24, 2, 5, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lessons`
--

CREATE TABLE `lessons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumbnail` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` int(11) NOT NULL,
  `tags` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `lessons`
--

INSERT INTO `lessons` (`id`, `name`, `description`, `image`, `thumbnail`, `price`, `state`, `tags`, `created_at`, `updated_at`) VALUES
(1, 'İlk Öğretim Seviyesi Hızlı Okuma', 'İlk öğretim öğrencileri için okuma ve öğrenme hızını iki katına çıkaracak, interaktif eğitim.', 'images/uEum4DzuVN5FRze4rFTdjboPHwpZ8TyQcS510N0J.jpg', 'thumbnails/BJkXZWhAHn6JYyW7c6mneaUEpiwQ8xDwUUwt18V9.jpg', '90.99', 1, 'Eğitim, Hızlı Okuma', '2022-09-21 11:29:04', '2022-09-24 11:34:12'),
(3, 'Lise Seviyesi Hızlı Okuma Eğitimi', 'Lise seviyesi hızlı okuma eğitimi', 'images/M6ekg2pN1Y99q08dLh4KkwTsQZFNO7nDyc0vLxlB.png', 'thumbnails/7AZ67QLHYHdGFhTtfkrbd2VUtz9TFCPwiOcctxev.jpg', '0.99', 1, 'Eğitim, Hızlı Okuma, Lise', '2022-09-24 11:26:04', '2022-09-24 11:30:09');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `lesson_user`
--

CREATE TABLE `lesson_user` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `lesson_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `lesson_user`
--

INSERT INTO `lesson_user` (`id`, `user_id`, `lesson_id`, `created_at`, `updated_at`) VALUES
(1, 21, 1, '2022-09-21 11:45:56', '2022-09-21 11:45:56'),
(18, 3, 1, '2022-09-24 11:39:35', '2022-09-24 11:39:35'),
(19, 3, 3, '2022-09-24 11:39:37', '2022-09-24 11:39:37'),
(20, 3, 1, '2022-09-24 11:39:37', '2022-09-24 11:39:37'),
(21, 6, 1, '2022-09-27 10:30:03', '2022-09-27 10:30:03'),
(22, 2, 1, '2022-10-05 06:26:38', '2022-10-05 06:26:38');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_10_103725_games', 1),
(6, '2022_08_10_120902_books', 1),
(7, '2022_08_10_121308_book_categories', 1),
(8, '2022_08_18_140213_create_branchs_table', 1),
(9, '2022_08_18_141127_create_classrooms_table', 1),
(10, '2022_08_18_141636_create_permission_tables', 1),
(11, '2022_08_24_121856_create_creditcards_table', 1),
(12, '2022_08_30_122222_create_integrations_table', 1),
(13, '2022_08_31_121630_create_orders_table', 1),
(14, '2022_08_31_123901_create_lessons_table', 1),
(15, '2022_08_31_123923_create_lectures_table', 1),
(16, '2022_08_31_125733_create_exercises_table', 1),
(17, '2022_08_31_141622_create_json_definitions_table', 1),
(18, '2022_09_12_124435_create_activity_log_table', 1),
(19, '2022_09_12_124436_add_event_column_to_activity_log_table', 1),
(20, '2022_09_12_124437_add_batch_uuid_column_to_activity_log_table', 1),
(21, '2022_09_12_124504_create_tickets_table', 1),
(22, '2022_09_12_124524_create_ticket_messages_table', 1),
(23, '2022_09_14_104618_create_users_lessons_table', 1),
(24, '2022_09_14_104739_create_payments_table', 1),
(25, '2022_09_20_072641_create_products_table', 1),
(29, '2022_09_26_121803_create_lecture_users_table', 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(2, 'App\\Models\\User', 11),
(3, 'App\\Models\\User', 9),
(5, 'App\\Models\\User', 2),
(5, 'App\\Models\\User', 3),
(5, 'App\\Models\\User', 4),
(5, 'App\\Models\\User', 5),
(5, 'App\\Models\\User', 6),
(5, 'App\\Models\\User', 7),
(5, 'App\\Models\\User', 8),
(5, 'App\\Models\\User', 10),
(5, 'App\\Models\\User', 12),
(5, 'App\\Models\\User', 13),
(5, 'App\\Models\\User', 14),
(5, 'App\\Models\\User', 15),
(5, 'App\\Models\\User', 16),
(5, 'App\\Models\\User', 17),
(5, 'App\\Models\\User', 18),
(5, 'App\\Models\\User', 19),
(5, 'App\\Models\\User', 20),
(5, 'App\\Models\\User', 21),
(5, 'App\\Models\\User', 22),
(5, 'App\\Models\\User', 23),
(5, 'App\\Models\\User', 24),
(5, 'App\\Models\\User', 25),
(5, 'App\\Models\\User', 26),
(5, 'App\\Models\\User', 27),
(5, 'App\\Models\\User', 28),
(5, 'App\\Models\\User', 29),
(5, 'App\\Models\\User', 30),
(5, 'App\\Models\\User', 31);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `lesson_id` int(11) NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `causer` int(11) NOT NULL,
  `method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'manage.menu', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(2, 'manage.branches.menu', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(3, 'manage.branches.list', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(4, 'manage.branches.show', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(5, 'manage.branches.edit', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(6, 'manage.branches.create', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(7, 'manage.branches.addcredit', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(8, 'manage.education.menu', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(9, 'manage.education.lessons.menu', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(10, 'manage.education.lessons.list', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(11, 'manage.education.lessons.create', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(12, 'manage.branches.lessons.edit', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(13, 'manage.branches.lessons.sales', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(14, 'manage.education.lessons.lectures.list', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(15, 'manage.education.lessons.lectures.update', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(16, 'manage.education.exams.menu', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(17, 'manage.users.menu', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(18, 'manage.users.list', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(19, 'manage.users.all', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(20, 'manage.users.create', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(21, 'manage.users.edit', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(22, 'manage.teachers.list', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(23, 'manage.teachers.all', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(24, 'manage.teachers.create', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(25, 'manage.teachers.edit', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(26, 'manage.authorization.menu', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(27, 'manage.authorization.roles.list', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(28, 'manage.authorization.roles.edit', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(29, 'manage.authorization.perms.list', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(30, 'manage.auth.perms.edit', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(31, 'users.menu', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(32, 'users.create', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(33, 'users.list', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(34, 'users.edit', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(35, 'users.all', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(36, 'sales.menu', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(37, 'sales.show', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(38, 'sales.all', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(39, 'sales.list', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(40, 'definitions.menu', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(41, 'interface.menu', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `personal_access_tokens`
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
-- Tablo için tablo yapısı `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Superadmin', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(2, 'Kurum Yöneticisi', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(3, 'Kurum Yetkilisi', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(4, 'Öğretmen', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(5, 'Öğrenci', 'web', '2022-09-21 11:29:03', '2022-09-21 11:29:03');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `role_has_permissions`
--

INSERT INTO `role_has_permissions` (`permission_id`, `role_id`) VALUES
(1, 2),
(3, 2),
(18, 2),
(22, 2);

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `title`, `state`, `created_at`, `updated_at`) VALUES
(7, 9, 'Deneme Başlığı', 'open', '2022-10-07 10:51:01', '2022-10-07 10:51:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `ticket_messages`
--

CREATE TABLE `ticket_messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `ticket_messages`
--

INSERT INTO `ticket_messages` (`id`, `ticket_id`, `user_id`, `content`, `created_at`, `updated_at`) VALUES
(3, 7, 9, 'Bu bir deneme yazısıdır mikemmel muntazam şekilde çalışıyor Superadmin e düşüyor mesajlar harika şekilde hallediyoruz.', '2022-10-07 10:51:01', '2022-10-07 10:51:01');

-- --------------------------------------------------------

--
-- Tablo için tablo yapısı `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `branch_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logged_at` timestamp NULL DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Tablo döküm verisi `users`
--

INSERT INTO `users` (`id`, `branch_id`, `firstname`, `lastname`, `phone`, `email`, `password`, `birthday`, `address`, `avatar`, `logged_at`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '0', 'Murat', 'Güven', '+15128701547', 'murat@klynapps.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1991-04-03 06:42:57', '55223 Beatty Mission Suite 569\nWest Hughborough, MS 37969-5236', 'default.jpg', '2022-10-11 06:46:50', 1, '9lFN7Sz9JGoVjwv3Pr0I5B1Z05Q3fHDF4FdtsNegZJtaKckAGMnuV4XiRIO7', '2022-09-21 11:29:03', '2022-10-11 06:46:50'),
(2, '6', 'Salvatore', 'Pfeffer', '+18202257275', 'ernser.mose@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1979-07-12 17:16:49', '583 Rippin Way Apt. 693\nPort Soniabury, NE 22514-2494', 'default.jpg', '2022-10-11 11:51:04', 1, 'U9LQ6XdWZbOBT16pGZsqUHd6mP0EQSHkNBbRQgUymymcTJPxusfMtqT5y4AY', '2022-09-21 11:29:03', '2022-10-11 11:51:04'),
(3, '1', 'Erin', 'Krajcik', '+15154167431', 'nbednar@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1974-05-27 08:58:39', '60593 Steuber Highway\nSouth Maiaside, DC 56432-3677', 'default.jpg', '2022-09-28 10:33:04', 1, 'QcjGt2QKg29Nu9EfXMC6r7NTncA9oZQUxLSsb7LrqJuCGblzKh6uG4RQ6pKX', '2022-09-21 11:29:03', '2022-09-28 10:33:04'),
(4, '4', 'Kian', 'McKenzie', '+16785852659', 'dayna04@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1981-09-30 23:55:48', '5101 Eldon Garden Suite 801\nWuckertmouth, PA 45970', 'default.jpg', NULL, 1, 'mVymWbeCXJ', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(5, '4', 'Harold', 'Rosenbaum', '+19296664909', 'sigmund.kub@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1976-03-02 19:03:47', '167 Schmitt Hollow\nDaynestad, VA 21768-8594', 'default.jpg', NULL, 1, 'hkzvDuGdMD', '2022-09-21 11:29:03', '2022-09-21 11:29:03'),
(6, '0', 'Sonya', 'Schmitt', '+12839981166', 'vheathcote@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1986-06-17 07:03:43', '90646 Abigale Key Suite 970\nWest Jesus, TN 72634', 'default.jpg', '2022-09-28 09:42:26', 1, 'ewPyAbcgrI54auY0RFLk9yDLIaHD9uofsb7iHJ2RxYazI3KGPzfv5Nb94nAH', '2022-09-21 11:29:03', '2022-09-28 09:42:26'),
(7, '8', 'Madonna', 'Sauer', '+17344710102', 'aimee.sawayn@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1991-07-15 14:42:42', '8296 Alana Summit Apt. 877\nNorth Orphaville, AK 66570', 'default.jpg', NULL, 1, '4YyBEwlQUS', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(8, '4', 'Abbigail', 'Gleason', '+16108848149', 'taurean83@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1990-07-03 14:29:47', '864 Von Rest Suite 804\nCortezburgh, KS 85566-3060', 'default.jpg', NULL, 1, '0ORxxkCxIh', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(9, '2', 'Enrico', 'Lehner', '+19073606992', 'imills@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1987-08-11 20:19:34', '64809 Hane Rue Suite 195\nWest Aryanna, IL 09706-0483', 'default.jpg', '2022-10-10 05:54:52', 1, 'giGUSrLvjPQAm8NSEjA6SwH6WxmbbY7ic8KWYCvEQTe027ST5XXelmhEv9AF', '2022-09-21 11:29:04', '2022-10-10 05:54:52'),
(10, '4', 'Alec', 'Deckow', '+15207163631', 'fadel.casey@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1990-03-03 00:27:43', '84792 Micaela Ranch\nEast Elsa, SC 56075', 'default.jpg', NULL, 1, 'BMhcodG4N1', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(11, '1', 'Mose', 'Koss', '+14234617378', 'rowe.anderson@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1988-10-06 11:23:20', '7320 McKenzie Fork Suite 729\nSouth Mossie, AK 92872-5446', 'default.jpg', '2022-10-06 05:28:14', 1, 'DF5Jnn3lfOJYzdbRXMb8lIzrRuP52fQhRV8aUHN3i9zzfrZveogi3M9S0lAJ', '2022-09-21 11:29:04', '2022-10-06 05:28:14'),
(12, '9', 'June', 'DuBuque', '+16286826186', 'dayne04@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1978-08-29 07:30:53', '35873 Durgan Union Suite 025\nSouth Moseston, NJ 29496-8166', 'default.jpg', '2022-10-06 11:22:56', 1, '8EvEn7b5gk', '2022-09-21 11:29:04', '2022-10-06 11:22:56'),
(13, '5', 'Vincenzo', 'Jones', '+17018257713', 'wyman.enos@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1978-10-08 15:12:33', '9889 Abdul Mews\nHowellbury, UT 42605', 'default.jpg', NULL, 1, 'VBekq0ULXi', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(14, '7', 'Hilario', 'Veum', '+19013894045', 'trystan.feeney@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1986-06-10 13:04:02', '92059 Kameron Meadow\nWolfffort, MD 94216-7211', 'default.jpg', NULL, 1, 'H5TK13dhqU', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(15, '2', 'Nils', 'Crooks', '+17263538894', 'toy57@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1980-09-10 18:33:08', '9387 Luisa Prairie Suite 843\nNorth Margareteburgh, NM 18042', 'default.jpg', NULL, 1, 'p9LjAncS2p', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(16, '8', 'Scarlett', 'Grimes', '+19139691115', 'milton.spencer@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1977-11-28 19:55:18', '470 Blake Mountain\nPercyville, CA 33937-0547', 'default.jpg', NULL, 1, 'HkTEMHpvtq', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(17, '9', 'Gia', 'Kutch', '+12086728196', 'marvin.cletus@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1982-01-13 04:12:28', '50618 Balistreri Union Apt. 068\nSydneeburgh, ME 65009', 'default.jpg', NULL, 1, '7jNXDzEI8d', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(18, '8', 'Moises', 'Turner', '+13214763719', 'rebeka09@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1974-04-07 14:08:06', '821 Bahringer Burg\nNew Rutheport, AZ 54841', 'default.jpg', NULL, 1, 'D2wqgzVQIl', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(19, '1', 'Enos', 'Eichmann', '+13519766396', 'ybarton@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1984-01-08 03:19:00', '2480 Cristina Plaza\nWest Hector, AL 99850', 'default.jpg', NULL, 1, 'ex5YV30Jdy', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(20, '7', 'Marvin', 'Kozey', '+15019569686', 'johns.rozella@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1983-12-10 11:20:37', '781 Kozey Prairie\nRunolfsdottirview, NC 92715', 'default.jpg', NULL, 1, 'fSYAyUaRtg', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(21, '3', 'Eileen', 'Hill', '+14793728658', 'chase.streich@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1976-03-01 16:31:17', '43190 Lynn Fork\nPort Marjory, PA 72861-4584', 'default.jpg', '2022-09-22 04:56:41', 1, '56Dp6nL9AC', '2022-09-21 11:29:04', '2022-09-22 04:56:41'),
(22, '6', 'Litzy', 'Kshlerin', '+17477634876', 'hills.mara@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1981-01-11 17:04:09', '31915 Marks Loop Apt. 442\nPort Warrenhaven, OK 42675', 'default.jpg', NULL, 1, 'Rk4cWKyhCQ', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(23, '3', 'Edison', 'Daugherty', '+12146962075', 'sabryna.zboncak@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1984-08-23 10:54:57', '5000 Muller Harbor\nLake Eunice, NE 20581', 'default.jpg', NULL, 1, 'nl1diUWFyQ', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(24, '9', 'Kiera', 'Kunze', '+13347685364', 'quitzon.foster@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1974-09-19 04:52:02', '11984 Conroy Branch\nTerryshire, OH 93862-4665', 'default.jpg', NULL, 1, 'UkkEUZoaJi', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(25, '2', 'Webster', 'Renner', '+13513544866', 'brandi41@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1980-05-31 05:16:09', '385 King Mountain\nLake Lolitahaven, NM 87246-3129', 'default.jpg', NULL, 1, 'ze8CnujNFe', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(26, '2', 'Unique', 'Wyman', '+19068174425', 'trowe@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1983-08-14 12:30:38', '9324 Colt Freeway\nEast Maggieton, OR 51860', 'default.jpg', NULL, 1, 'hrA4g6taNE', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(27, '3', 'Carmela', 'Sawayn', '+17792589955', 'temard@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1980-01-17 11:27:06', '422 Mario Haven\nJacobiberg, WY 86879', 'default.jpg', NULL, 1, 'czDHjq9nWW', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(28, '9', 'Cristian', 'Kling', '+19152924484', 'burdette40@example.com', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1979-12-21 02:55:37', '50518 Haley Junction\nEast Marisaburgh, MI 35129-1457', 'default.jpg', NULL, 1, 'gFRGPa8UH7', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(29, '4', 'Teresa', 'Kulas', '+14246932864', 'fisher.kennedi@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1978-07-17 00:41:12', '598 Turner Rapids Apt. 495\nSouth Shanelchester, NJ 28907-0355', 'default.jpg', NULL, 1, '6yq1S6uzHF', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(30, '6', 'Mack', 'Bergnaum', '+14459211869', 'greenholt.maximo@example.org', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1984-06-25 05:11:12', '388 Waldo Lock\nChrisborough, TN 06258', 'default.jpg', NULL, 1, 'v1tbl8HSO1', '2022-09-21 11:29:04', '2022-09-21 11:29:04'),
(31, '4', 'Morgan', 'Cormier', '+13468247019', 'jan.reynolds@example.net', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', '1988-12-22 09:43:39', '9130 O\'Keefe Trail Suite 599\nSpencerside, SC 77491-8027', 'default.jpg', NULL, 1, 'vQ5W3CNxPp', '2022-09-21 11:29:04', '2022-09-21 11:29:04');

--
-- Dökümü yapılmış tablolar için indeksler
--

--
-- Tablo için indeksler `activity_log`
--
ALTER TABLE `activity_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `subject` (`subject_type`,`subject_id`),
  ADD KEY `causer` (`causer_type`,`causer_id`),
  ADD KEY `activity_log_log_name_index` (`log_name`);

--
-- Tablo için indeksler `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `book_categories`
--
ALTER TABLE `book_categories`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `branches`
--
ALTER TABLE `branches`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `classrooms`
--
ALTER TABLE `classrooms`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `creditcards`
--
ALTER TABLE `creditcards`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `exercises`
--
ALTER TABLE `exercises`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Tablo için indeksler `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `integrations`
--
ALTER TABLE `integrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `json_definitions`
--
ALTER TABLE `json_definitions`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `lectures`
--
ALTER TABLE `lectures`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `lecture_user`
--
ALTER TABLE `lecture_user`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `lessons`
--
ALTER TABLE `lessons`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `lesson_user`
--
ALTER TABLE `lesson_user`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Tablo için indeksler `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Tablo için indeksler `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Tablo için indeksler `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Tablo için indeksler `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Tablo için indeksler `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Tablo için indeksler `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Tablo için indeksler `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `ticket_messages`
--
ALTER TABLE `ticket_messages`
  ADD PRIMARY KEY (`id`);

--
-- Tablo için indeksler `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Dökümü yapılmış tablolar için AUTO_INCREMENT değeri
--

--
-- Tablo için AUTO_INCREMENT değeri `activity_log`
--
ALTER TABLE `activity_log`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- Tablo için AUTO_INCREMENT değeri `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `book_categories`
--
ALTER TABLE `book_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `branches`
--
ALTER TABLE `branches`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Tablo için AUTO_INCREMENT değeri `classrooms`
--
ALTER TABLE `classrooms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `creditcards`
--
ALTER TABLE `creditcards`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `exercises`
--
ALTER TABLE `exercises`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `games`
--
ALTER TABLE `games`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `integrations`
--
ALTER TABLE `integrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `json_definitions`
--
ALTER TABLE `json_definitions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Tablo için AUTO_INCREMENT değeri `lectures`
--
ALTER TABLE `lectures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- Tablo için AUTO_INCREMENT değeri `lecture_user`
--
ALTER TABLE `lecture_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Tablo için AUTO_INCREMENT değeri `lessons`
--
ALTER TABLE `lessons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Tablo için AUTO_INCREMENT değeri `lesson_user`
--
ALTER TABLE `lesson_user`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Tablo için AUTO_INCREMENT değeri `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- Tablo için AUTO_INCREMENT değeri `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- Tablo için AUTO_INCREMENT değeri `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Tablo için AUTO_INCREMENT değeri `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Tablo için AUTO_INCREMENT değeri `ticket_messages`
--
ALTER TABLE `ticket_messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Tablo için AUTO_INCREMENT değeri `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- Dökümü yapılmış tablolar için kısıtlamalar
--

--
-- Tablo kısıtlamaları `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Tablo kısıtlamaları `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
