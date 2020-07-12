-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2020 at 05:37 PM
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
-- Table structure for table `matric`
--

DROP TABLE IF EXISTS `matric`;
CREATE TABLE IF NOT EXISTS `matric` (
  `mid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `track` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `english` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urdu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `islamiyat_Ethics` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pakistan_Studies` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mathematics` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `physics` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chemistry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biology` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `computer` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `general_sciences` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `economics` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `business_studies` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `matric`
--

INSERT INTO `matric` (`mid`, `uid`, `track`, `english`, `urdu`, `islamiyat_Ethics`, `pakistan_Studies`, `mathematics`, `physics`, `chemistry`, `biology`, `computer`, `general_sciences`, `economics`, `business_studies`, `created_at`, `updated_at`) VALUES
(1, 1, 'Medical', '52', '67', '75', '45', '85', '75', '85', '76', 'null', 'null', 'null', 'null', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
