-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2020 at 12:51 PM
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
-- Table structure for table `olevels`
--

DROP TABLE IF EXISTS `olevels`;
CREATE TABLE IF NOT EXISTS `olevels` (
  `oid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `art` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biology` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `businessStudies` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chemistry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `computerStudies` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `economics` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `englishLanguage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `islamiyat` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mathematicsAdditional` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mathematicsD` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pakistanStudies` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `religiousStudies` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sociology` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urduFirstLanguage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urduSecondLanguage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`oid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `olevels`
--

INSERT INTO `olevels` (`oid`, `uid`, `art`, `biology`, `businessStudies`, `chemistry`, `computerStudies`, `economics`, `englishLanguage`, `islamiyat`, `mathematicsAdditional`, `mathematicsD`, `pakistanStudies`, `religiousStudies`, `sociology`, `urduFirstLanguage`, `urduSecondLanguage`, `created_at`, `updated_at`) VALUES
(1, 1, 'null', 'null', 'null', '75', '75', 'null', '75', '75', 'null', '85', '85', '85', 'null', '85', 'null', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
