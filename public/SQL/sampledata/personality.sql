-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2020 at 09:45 PM
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
-- Table structure for table `personality`
--

DROP TABLE IF EXISTS `personality`;
CREATE TABLE IF NOT EXISTS `personality` (
  `pid` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `result` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `conventional` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `enterprising` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `social` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `artistic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `investigative` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `realistic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `personality`
--

INSERT INTO `personality` (`pid`, `user_id`, `result`, `conventional`, `enterprising`, `social`, `artistic`, `investigative`, `realistic`, `created_at`, `updated_at`) VALUES
(1, '1', 'conventional', '41', '36', '27', '26', '31', '34', '2020-07-02 16:44:44', '2020-07-02 16:44:44');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
