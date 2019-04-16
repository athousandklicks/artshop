-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 16, 2019 at 12:01 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10


SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `afriartdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `addresses`
--

DROP TABLE IF EXISTS `addresses`;
CREATE TABLE IF NOT EXISTS `addresses` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `firstname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address1` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `town` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `state` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addresses`
--

INSERT INTO `addresses` (`id`, `user_id`, `firstname`, `lastname`, `address1`, `address2`, `town`, `city`, `postcode`, `state`, `country`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 1, 'Ernest', 'Itotoh', '5 Giby\'s Garden,', 'Lokogoma, Suncity Road', NULL, 'Abuja', '900001', 'FCT', 'Nigeria', '09099686991', 'omescroll@gmail.com', '2019-04-02 14:35:13', '2019-04-02 14:35:13');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `admins_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ome Itotoh', 'omescroll@gmail.com', NULL, '$2y$10$6D24c1WDkROqP6dlFNamC.tvlr4bjhHJLiv4md36jAhZjvxYqcf1G', 'HX9yLJ7crKW85oEV5u6KZfj1QTVRk21ZeKxq7MLI0VpRTW2OouZznAe6t9B6', '2019-02-05 19:37:57', '2019-02-05 19:37:57');

-- --------------------------------------------------------

--
-- Table structure for table `artists`
--

DROP TABLE IF EXISTS `artists`;
CREATE TABLE IF NOT EXISTS `artists` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `cv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `exhibitions` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `mentors` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artists`
--

INSERT INTO `artists` (`id`, `name`, `about`, `cv`, `exhibitions`, `mentors`, `tags`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Michael Angelo', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'pst and I.jpg', '2019-02-15 19:06:06', '2019-02-15 19:06:06'),
(2, 'Michael Angelo 2', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'KJ Official logo.png', '2019-02-15 19:08:02', '2019-02-15 19:08:02'),
(3, 'Michael Angelo 3', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'IMG-20190210-WA0002.jpg', '2019-02-15 19:10:13', '2019-02-15 19:10:13'),
(4, 'Michael Angelo 4', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'IMG-20190210-WA0002.jpg', '2019-02-15 19:15:53', '2019-02-15 19:15:53'),
(5, 'Michael Angelo 5', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'IMG-20190210-WA0002.jpg', '2019-02-15 19:16:56', '2019-02-15 19:16:56'),
(6, 'Michael Angelo 6', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'IMG-20190210-WA0002.jpg', '2019-02-15 19:17:57', '2019-02-15 19:17:57'),
(7, 'Michael Angelo 7', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'IMG-20190210-WA0002.jpg', '2019-02-15 19:18:38', '2019-02-15 19:18:38'),
(8, 'Michael Angelo 8', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'IMG-20190210-WA0002.jpg', '2019-02-15 19:36:36', '2019-02-15 19:36:36'),
(9, 'Michael Angelo 9', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'IMG-20190210-WA0002.jpg', '2019-02-15 19:37:05', '2019-02-15 19:37:05'),
(10, 'Michael Angelo 9', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'IMG-20190210-WA0002.jpg', '2019-02-15 19:37:43', '2019-02-15 19:37:43'),
(11, 'Michael Angelo 9', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'IMG-20190210-WA0002.jpg', '2019-02-15 19:37:57', '2019-02-15 19:37:57'),
(12, 'Michael Angelo 9', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'IMG-20190210-WA0002.jpg', '2019-02-15 19:44:51', '2019-02-15 19:44:51'),
(13, 'Michael Angelo 9', 'Big boy Mike', 'Best artist', 'World Over', 'Hitler', 'Art', 'IMG-20190210-WA0002.jpg', '2019-02-15 19:47:09', '2019-02-15 19:47:09');

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `flag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `flag`, `created_at`, `updated_at`) VALUES
(1, 'Rwanda', 'KJ Official logo.png', '2019-02-19 16:53:12', '2019-02-19 17:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `frames`
--

DROP TABLE IF EXISTS `frames`;
CREATE TABLE IF NOT EXISTS `frames` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `frames`
--

INSERT INTO `frames` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Yes', '2019-02-16 20:55:04', '2019-02-19 20:26:39'),
(2, 'No', '2019-02-19 20:35:23', '2019-02-19 20:35:23');

-- --------------------------------------------------------

--
-- Table structure for table `hangs`
--

DROP TABLE IF EXISTS `hangs`;
CREATE TABLE IF NOT EXISTS `hangs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hangs`
--

INSERT INTO `hangs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Yes', '2019-02-16 20:57:55', '2019-02-16 20:57:55'),
(2, 'No', '2019-02-19 20:35:45', '2019-02-19 20:35:45');

-- --------------------------------------------------------

--
-- Table structure for table `mediums`
--

DROP TABLE IF EXISTS `mediums`;
CREATE TABLE IF NOT EXISTS `mediums` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `mediums`
--

INSERT INTO `mediums` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ezra', '2019-02-19 13:21:10', '2019-02-19 13:21:10'),
(2, 'Portrait', '2019-02-19 13:21:16', '2019-02-19 13:21:16'),
(3, 'Michael Angelo', '2019-02-19 13:21:20', '2019-02-19 13:21:20'),
(4, 'Ome Itotoh', '2019-02-19 13:21:25', '2019-02-19 13:21:25');

-- --------------------------------------------------------

--
-- Table structure for table `medium_product`
--

DROP TABLE IF EXISTS `medium_product`;
CREATE TABLE IF NOT EXISTS `medium_product` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `medium_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `medium_product_product_id_foreign` (`product_id`),
  KEY `medium_product_medium_id_foreign` (`medium_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medium_product`
--

INSERT INTO `medium_product` (`id`, `product_id`, `medium_id`, `created_at`, `updated_at`) VALUES
(2, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_09_125609_create_admins_table', 1),
(4, '2019_01_09_125640_create_vendors_table', 1),
(5, '2019_02_14_210812_create-product-table', 2),
(6, '2019_02_14_221839_create-type-table', 3),
(7, '2019_02_14_221952_create-support-type-table', 3),
(8, '2019_02_14_222034_create-hangable-table', 3),
(9, '2019_02_14_222116_create-framable-table', 3),
(10, '2019_02_14_222343_create-sign-location-table', 3),
(11, '2019_02_14_222359_create-signs-table', 3),
(12, '2019_02_14_223536_create-artists-table', 3),
(13, '2019_02_14_225802_create-tags-table', 3),
(14, '2019_02_14_225825_create-subjects-table', 3),
(15, '2019_02_14_225841_create-styles-table', 3),
(16, '2019_02_14_225913_create-mediums-table', 3),
(17, '2019_02_14_230207_create-product-tag-table', 3),
(18, '2019_02_14_230224_create-product-style-table', 3),
(19, '2019_02_14_230233_create-product-subject-table', 3),
(20, '2019_02_14_230242_create-medium-product-table', 3),
(21, '2019_02_18_230637_create-table-product_type', 4),
(22, '2019_02_19_171715_add-city-and-country-to-products', 5),
(23, '2019_02_19_172828_create-country-table', 6),
(24, '2019_02_19_202119_add-sku-to-products', 7),
(25, '2019_04_02_144233_create_addresses_table', 8),
(26, '2019_04_02_151421_add_user_id_to_address_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artist` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) DEFAULT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brief_description` text COLLATE utf8mb4_unicode_ci,
  `full_description` text COLLATE utf8mb4_unicode_ci,
  `dimension_description` text COLLATE utf8mb4_unicode_ci,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `support_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `height` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `width` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `depth` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `year_created` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `hangable` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `framed` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signed` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `signature_location` varchar(256) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_full` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_front` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_leftside` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_rightside` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_back` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_hanged` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_gallery` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_1` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_2` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `video` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `artist`, `price`, `sku`, `brief_description`, `full_description`, `dimension_description`, `type`, `support_type`, `height`, `width`, `depth`, `weight`, `year_created`, `hangable`, `framed`, `signed`, `city`, `country`, `signature_location`, `image_full`, `image_front`, `image_leftside`, `image_rightside`, `image_back`, `image_hanged`, `image_gallery`, `image_1`, `image_2`, `video`, `created_at`, `updated_at`) VALUES
(2, 'Green Blue', 'Ome Itotoh', 23333.00, 'PAAG1551476107', 'Bros description Updated', '<p>this is it</p>', NULL, 'drawing', 'Wood', '23', '26', '27', '28', '2000', 'Yes', 'Yes', 'Yes', 'Abuja', 'Rwanda', 'Bottom Left Corner', NULL, 'a.jpeg', 'ass.png', 'b.jpg', 'a.jpg', NULL, NULL, NULL, NULL, NULL, '2019-03-01 20:35:07', '2019-03-01 20:35:07');

-- --------------------------------------------------------

--
-- Table structure for table `product_style`
--

DROP TABLE IF EXISTS `product_style`;
CREATE TABLE IF NOT EXISTS `product_style` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `style_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_style_product_id_foreign` (`product_id`),
  KEY `product_style_style_id_foreign` (`style_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_style`
--

INSERT INTO `product_style` (`id`, `product_id`, `style_id`, `created_at`, `updated_at`) VALUES
(2, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_subject`
--

DROP TABLE IF EXISTS `product_subject`;
CREATE TABLE IF NOT EXISTS `product_subject` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `subject_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_subject_product_id_foreign` (`product_id`),
  KEY `product_subject_subject_id_foreign` (`subject_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_subject`
--

INSERT INTO `product_subject` (`id`, `product_id`, `subject_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_tag`
--

DROP TABLE IF EXISTS `product_tag`;
CREATE TABLE IF NOT EXISTS `product_tag` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `tag_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_tag_product_id_foreign` (`product_id`),
  KEY `product_tag_tag_id_foreign` (`tag_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_tag`
--

INSERT INTO `product_tag` (`id`, `product_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(2, 2, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_type`
--

DROP TABLE IF EXISTS `product_type`;
CREATE TABLE IF NOT EXISTS `product_type` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` int(10) UNSIGNED NOT NULL,
  `type_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `product_type_product_id_foreign` (`product_id`),
  KEY `product_type_type_id_foreign` (`type_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_type`
--

INSERT INTO `product_type` (`id`, `product_id`, `type_id`, `created_at`, `updated_at`) VALUES
(2, 2, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `signs`
--

DROP TABLE IF EXISTS `signs`;
CREATE TABLE IF NOT EXISTS `signs` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signs`
--

INSERT INTO `signs` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Yes', '2019-02-16 21:31:00', '2019-02-19 20:36:02'),
(2, 'No', '2019-02-19 20:36:10', '2019-02-19 20:36:10');

-- --------------------------------------------------------

--
-- Table structure for table `sign_location`
--

DROP TABLE IF EXISTS `sign_location`;
CREATE TABLE IF NOT EXISTS `sign_location` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sign_location`
--

INSERT INTO `sign_location` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Bottom Left Corner', '2019-02-16 21:31:24', '2019-02-16 21:31:24');

-- --------------------------------------------------------

--
-- Table structure for table `styles`
--

DROP TABLE IF EXISTS `styles`;
CREATE TABLE IF NOT EXISTS `styles` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `styles`
--

INSERT INTO `styles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Izehi', '2019-02-19 13:21:59', '2019-02-19 13:21:59'),
(2, 'Michael Angelo', '2019-02-19 13:22:03', '2019-02-19 13:22:03'),
(3, 'Portrait', '2019-02-19 13:22:08', '2019-02-19 13:22:08'),
(4, 'Portrait', '2019-02-19 13:22:13', '2019-02-19 13:22:13');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ezra', '2019-02-19 13:21:35', '2019-02-19 13:21:35'),
(2, 'Portrait', '2019-02-19 13:21:40', '2019-02-19 13:21:40'),
(3, 'Ome Itotoh', '2019-02-19 13:21:45', '2019-02-19 13:21:45'),
(4, 'Izehi', '2019-02-19 13:21:49', '2019-02-19 13:21:49');

-- --------------------------------------------------------

--
-- Table structure for table `supports`
--

DROP TABLE IF EXISTS `supports`;
CREATE TABLE IF NOT EXISTS `supports` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `supports`
--

INSERT INTO `supports` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Wood', '2019-02-16 21:16:59', '2019-02-16 21:31:39');

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Ezra', '2019-02-19 13:20:46', '2019-02-19 13:20:46'),
(2, 'Portrait', '2019-02-19 13:20:51', '2019-02-19 13:20:51'),
(3, 'Michael Angelo', '2019-02-19 13:20:56', '2019-02-19 13:20:56'),
(4, 'Ome Itotoh', '2019-02-19 13:21:02', '2019-02-19 13:21:02');

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

DROP TABLE IF EXISTS `types`;
CREATE TABLE IF NOT EXISTS `types` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(2, 'Landscape', NULL, NULL),
(3, 'Portrait', '2019-02-16 19:06:15', '2019-02-16 19:06:15');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ernest Matthew', 'ernest@gmail.com', NULL, '$2y$10$DQosSGZXDOE.dkqty2/Os.Y8096ngFaQn5qhiPS4SGFvB2rAt5.b2', 'Le2oGvbcB8ZznQquJJPh0sUOM101Rh79TIJtILEjxz9qXW7NFOvVmOIQ6Y5t', '2019-01-09 13:02:48', '2019-01-09 13:02:48'),
(2, 'Izehi', 'izehi@gmail.com', NULL, '$2y$10$SgYcKu.0aBIO2ODNiU3K.OaOH7UKuQKdqNL4KiPVD8ewb/Ge9uQXi', 'goTzB8b0BQAJ5tUwpbHU4ClRHgaWTEJT53D7wt8jEOv3ewjaeN9mmP7USlW5', '2019-01-09 13:03:53', '2019-01-09 13:03:53');

-- --------------------------------------------------------

--
-- Table structure for table `vendors`
--

DROP TABLE IF EXISTS `vendors`;
CREATE TABLE IF NOT EXISTS `vendors` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `flag` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bio` text COLLATE utf8mb4_unicode_ci,
  `dob` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `education` text COLLATE utf8mb4_unicode_ci,
  `awards` text COLLATE utf8mb4_unicode_ci,
  `experience` text COLLATE utf8mb4_unicode_ci,
  `exhibitions` text COLLATE utf8mb4_unicode_ci,
  `mentors` text COLLATE utf8mb4_unicode_ci,
  `status` enum('0','1') COLLATE utf8mb4_unicode_ci DEFAULT '0',
  `admin_control` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `vendors_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
