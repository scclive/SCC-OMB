-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 30, 2020 at 12:53 PM
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
-- Table structure for table `alevels`
--

DROP TABLE IF EXISTS `alevels`;
CREATE TABLE IF NOT EXISTS `alevels` (
  `aid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `uid` int(11) NOT NULL,
  `accounting` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aICT` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `art` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `biology` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `businessStudies` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `chemistry` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `computerScience` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `economics` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `englishLanguage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `englishLiterature` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `environmentalManagement` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `globalPerspectives` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `governmentPolitics` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `history` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `law` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mathematics` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mathematicsFurther` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mediaStudies` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `physics` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `psychology` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sociology` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `urdu` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `alevels`
--

INSERT INTO `alevels` (`aid`, `uid`, `accounting`, `aICT`, `art`, `biology`, `businessStudies`, `chemistry`, `computerScience`, `economics`, `englishLanguage`, `englishLiterature`, `environmentalManagement`, `globalPerspectives`, `governmentPolitics`, `history`, `law`, `mathematics`, `mathematicsFurther`, `mediaStudies`, `physics`, `psychology`, `sociology`, `urdu`, `created_at`, `updated_at`) VALUES
(1, 1, 'null', 'null', 'null', 'null', 'null', '65', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', 'null', '65', 'null', 'null', '75', 'null', 'null', 'null', NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
