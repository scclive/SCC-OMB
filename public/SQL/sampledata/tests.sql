-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 03, 2020 at 01:16 PM
-- Server version: 5.7.19
-- PHP Version: 7.2.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laraquiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

DROP TABLE IF EXISTS `tests`;
CREATE TABLE IF NOT EXISTS `tests` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `result` text COLLATE utf8_unicode_ci,
  `subject` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `total` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `percent` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `EnglishScore` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `AnalyticalScore` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `QuantitativeScore` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subjectScore1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subjectScore2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `subjectScore3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `tests_deleted_at_index` (`deleted_at`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `user_id`, `result`, `subject`, `total`, `percent`, `EnglishScore`, `AnalyticalScore`, `QuantitativeScore`, `subjectScore1`, `subjectScore2`, `subjectScore3`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '60', 'NAT-IE', '90', '60', '5', '3', '3', '4', '3', '3', '2020-07-03 08:02:40', '2020-07-03 08:02:40', NULL),
(2, 1, '5', 'English', '40', '80', NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-03 08:04:56', '2020-07-03 08:04:57', NULL),
(3, 1, '7', 'Analytical', '40', '70', NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-03 08:06:08', '2020-07-03 08:06:08', NULL),
(4, 1, '12', 'Quantitative', '40', '60', NULL, NULL, NULL, NULL, NULL, NULL, '2020-07-03 08:07:07', '2020-07-03 08:07:07', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
