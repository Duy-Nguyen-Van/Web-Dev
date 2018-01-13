-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 13, 2018 at 03:51 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `data_master`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `level` tinyint(1) NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf32 COLLATE=utf32_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `level`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', '$2y$10$inET1p7.GEg41nLgIF19POkGQNVI4nPgr3niDAsGcSXWhe7tI7OkW', 0, 'YK7632GHXlIBk8zaInlhbggNMwkCmJQD4zq4NwRHLkOl0ih4SB9lo5GiOLuL', '2018-01-13 03:35:34', '2018-01-11 10:30:34'),
(2, 'Admin', '$2y$10$J2HU1HEz.17bAtg/r0AISe3qqTEP0UbLsc4skDFfMYwm3Ez6HnaSK', 1, 'Q4Lei9Y93dyEJal06NulFbuc2NuFrwQuWy2faYQhHXab6vKrOJg5ggsyd9FG', '2018-01-12 08:34:41', '2018-01-12 01:22:22'),
(8, 'admin 3', '$2y$10$eMUf0V0t8/67vtkw7pZt5.2Wv7bT0/pMYqJ4FA8Gex/niXj9nWEVm', 1, NULL, '2018-01-12 01:33:56', '2018-01-12 01:33:56');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_customer` int(10) NOT NULL,
  `date_order` date NOT NULL,
  `total` double NOT NULL,
  `note` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bill_detail`
--

CREATE TABLE `bill_detail` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_bill` int(10) NOT NULL,
  `id_product` int(10) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` tinyint(4) NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_type` int(10) NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `promotion` double NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `id_type`, `description`, `price`, `promotion`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Áo sơ mi trắng', 6, '&Aacute;o sơ mi trắng', 500, 380, 'quan-kaki-han-quoc-trang-xam-qk148-6549-slide-1.jpg', NULL, '2018-01-12 02:24:15'),
(2, 'Áo sơ mi xanh', 6, 'Sơ mi chất liệu tho&aacute;ng m&aacute;t</p>', 260, 200, '3-ao-thun-nam-co-co-tay-vien-den-r.jpg', NULL, '2018-01-12 02:14:06'),
(30, 'Áo thun update', 7, '<p>&Aacute;o thun</p>', 122, 95, '131_Ao_thun_nam_tay_dai_phoi_vien_mau_trang_a7403.jpg', '2018-01-10 20:39:55', '2018-01-12 02:34:49'),
(31, 'Quần dài', 8, 'a', 20, 12, 'c6c380c2-e90e-0a00-191f-00142b9f72fd.jpg', '2018-01-10 21:13:42', '2018-01-12 02:34:33'),
(32, 'Quần kaki trắng', 8, '1', 12, 0, 'quan-kaki-03.jpg', '2018-01-12 02:00:03', '2018-01-12 02:15:15'),
(33, 'Áo sơ mi xanh nhạt', 6, '<p>Chất liệu tho&aacute;ng m&aacute;t</p>', 100, 50, 'images.jpg', '2018-01-12 02:38:12', '2018-01-12 02:38:12'),
(34, 'Áo sơ mi đen', 6, 'Chất liệu tho&aacute;ng m&aacute;t', 50, 0, 'ao-so-mi-nam-body-titishopvn-sm304-den-1464251589-1528022-e7677d3caf240d57e20c7d0c91473d50.jpg', '2018-01-12 06:35:53', '2018-01-12 06:35:53'),
(35, 'Áo sơ mi ca-rô', 6, 'Sơ mi caro', 48, 0, 'ao_so_mi_caro_03.jpg', '2018-01-12 06:39:01', '2018-01-12 06:39:01'),
(36, 'Sơ mi xám', 6, 'Sơ mi trắng', 60, 0, 'chon-ao-so-mi-nam-cho-nguoi-map-2.jpg', '2018-01-12 06:39:52', '2018-01-12 06:39:52'),
(37, 'Sơ mi tay dài', 6, 'Tay d&agrave;i', 80, 0, 'taydai.jpg', '2018-01-12 06:40:57', '2018-01-12 06:40:57');

-- --------------------------------------------------------

--
-- Table structure for table `type_products`
--

CREATE TABLE `type_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `created_at`, `updated_at`) VALUES
(6, 'Áo sơ mi', NULL, NULL),
(7, 'Áo thun', NULL, NULL),
(8, 'Quần kaki', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `email` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(10) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `remember_token`, `name`, `gender`, `address`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'LeLe@gmail.com', '123', '', 'Le Thanh Luan', 'Nam', '1', '1', '2017-12-31 15:35:48', '0000-00-00 00:00:00'),
(2, 'luan@gmail.com', '123', NULL, 'Khanh', 'Nam', '25/34/4', '01666643732', '2018-01-11 03:20:06', '2018-01-11 03:20:06'),
(3, 'LuanLuan@gmail.com', '123456', NULL, 'Luân', 'Nam', '25/34/4', '01655741825', '2018-01-11 03:21:19', '2018-01-11 03:21:19'),
(4, 'congkhanh0396@gmail.com', '123', NULL, 'Khanh', 'Nam', '25/34/4', '01655741825', '2018-01-11 03:26:35', '2018-01-11 03:26:35'),
(5, 'rem123456798@gmail.com', '$2y$10$mUh/YpR17frT4AGJpBWZTuj3rLxNPbZyK5bqrHiuHMagfx8QtD9cG', NULL, 'Khanh', 'Nam', '25/34/4', '01655741825', '2018-01-11 03:28:49', '2018-01-11 03:28:49'),
(6, 'rem@gmail.com', '$2y$10$GmHMt6AFqRLcyywayEDGiOL1HYjNSUTvOPQspdSmJvYXwOvJVvHl6', NULL, 'Rem', 'Nữ', '25/34/4', '01655741825', '2018-01-11 03:35:27', '2018-01-11 03:35:27'),
(7, 'congkhanh@gmail.com', '$2y$10$2o8wNoCfQdzga.7IWGg8AOGQhIud2R9tv0PvbgG2GSZe11c5s.mCS', NULL, 'Name', NULL, NULL, NULL, '2018-01-11 03:40:30', '2018-01-11 03:40:30'),
(8, 'rem1@gmail.com', '$2y$10$i7Hja94Spa2E9tqHhc9Kp.3ZoBqYnNszJZF3r3SBzv7hFr.GR9ABu', NULL, 'Khanh', 'Nam', '25/34/4', '01655741825', '2018-01-11 03:43:29', '2018-01-11 03:43:29'),
(9, 'rem3@gmail.com', '$2y$10$Xck.jxHZc3Bdnw.L2OiDu..1w26xpSbizDQoK9VdiTEDF7jjVDWEO', NULL, NULL, NULL, NULL, NULL, '2018-01-11 03:46:50', '2018-01-11 03:46:50'),
(10, 'congkhanh11@gmail.com', '$2y$10$NPgfo9B9FTPVWOgmrb2UxOmL7IyX1XpjSF17RpkImE9pEY3DCUwgO', NULL, NULL, NULL, NULL, NULL, '2018-01-11 03:53:58', '2018-01-11 03:53:58'),
(11, 'A@gmail.com', '$2y$10$tZdXNNY7aRKA2ChuI063iOhFGEH55z/4C1JEMmQvN6ylDcGYIx4c2', NULL, NULL, NULL, NULL, NULL, '2018-01-11 03:55:49', '2018-01-11 03:55:49'),
(12, 'B@gmail.com', '$2y$10$PNHhuL95rQO55rO3ZeGgSOMGcZjQUAKfxprC8EuI3in7zfsc2lW8O', NULL, NULL, NULL, NULL, NULL, '2018-01-11 03:56:39', '2018-01-11 03:56:39'),
(13, 'C@gmail.com', '$2y$10$fenqPgwpKENFBU4wxMjiBu/kHDO1twXsZ5/V3AktnpXt6zlZubeCS', NULL, NULL, NULL, NULL, NULL, '2018-01-11 03:57:44', '2018-01-11 03:57:44'),
(14, 'D@gmail.com', '$2y$10$F5A4HhyFRK8T3cQBOeNx9OO.7Gghsa55Q6ZyKkSpUBBHN3voFFhVK', NULL, NULL, NULL, NULL, NULL, '2018-01-11 03:59:21', '2018-01-11 03:59:21'),
(15, 'F@gmail.com', '$2y$10$KzEuLE9fM37n29VbI8ZtYu9DjyaL8Uzs9FfAC5X2CUSR0QnWQllBu', NULL, NULL, NULL, NULL, NULL, '2018-01-11 04:00:12', '2018-01-11 04:00:12'),
(16, 'E@gmail.com', '$2y$10$KjvAOwjjFCOOCUQGc2NY8OzgyqeIn0BQAaYE2KNc86.SsnNOcHYt2', NULL, NULL, NULL, NULL, NULL, '2018-01-11 04:02:42', '2018-01-11 04:02:42'),
(17, 'G@gmail.com', '$2y$10$MkxKi/nzNV2cdig8o6IqSe/YKjN/0I0jWiYZzWg6VFp8z7Np6iXXa', NULL, NULL, NULL, NULL, NULL, '2018-01-11 04:13:05', '2018-01-11 04:13:05'),
(18, 'EE@gmail.com', '$2y$10$LWBF7KOE9R2KwLVu8FGug.Fwp8FaFMNohNjii3x3VaGn79WgiuQ0m', NULL, NULL, NULL, NULL, NULL, '2018-01-11 08:16:45', '2018-01-11 08:16:45'),
(19, 'RR@gmail.com', '$2y$10$1Xlei5MW3Dhn2SFtXZbn4eSlNOG.VUMTi7.czaS658eFaOsv2F1HG', NULL, NULL, NULL, NULL, NULL, '2018-01-11 08:20:45', '2018-01-11 08:20:45'),
(20, 'QQ@gmail.com', '$2y$10$t8Dk2Myth9neYI81eNSSROR53Q9/EkZbPnRibtx.jdtGEpXRUDxlq', NULL, NULL, NULL, NULL, NULL, '2018-01-11 08:22:10', '2018-01-11 08:22:10'),
(21, 'WW@gmail.com', '$2y$10$4vvuiIG2ssoxHztzelttR.hvX9TjgfR7lX.toneuCay8CfeCzHs6C', NULL, NULL, NULL, NULL, NULL, '2018-01-11 08:22:39', '2018-01-11 08:22:39'),
(22, 'TT@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '2018-01-11 08:46:21', '2018-01-11 08:46:21'),
(23, 'YY@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '2018-01-11 08:47:02', '2018-01-11 08:47:02'),
(24, 'SS@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '2018-01-11 08:48:40', '2018-01-11 08:48:40'),
(25, 'FF@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '2018-01-11 08:51:28', '2018-01-11 08:51:28'),
(26, 'JJ@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '2018-01-11 08:52:40', '2018-01-11 08:52:40'),
(27, 'GG@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '2018-01-11 08:53:30', '2018-01-11 08:53:30'),
(28, 'VV@gmail.com', '123', NULL, NULL, NULL, NULL, NULL, '2018-01-11 08:54:18', '2018-01-11 08:54:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bill_detail`
--
ALTER TABLE `bill_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `bill_detail`
--
ALTER TABLE `bill_detail`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
--
-- AUTO_INCREMENT for table `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
