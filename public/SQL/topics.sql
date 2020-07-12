-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 14, 2020 at 03:04 PM
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
-- Table structure for table `topics`
--

DROP TABLE IF EXISTS `topics`;
CREATE TABLE IF NOT EXISTS `topics` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `topics_deleted_at_index` (`deleted_at`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `topics`
--

INSERT INTO `topics` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'English', NULL, NULL, NULL),
(2, 'Analytical', NULL, NULL, NULL),
(3, 'Quantitative', NULL, NULL, NULL),
(4, 'Physics', NULL, NULL, NULL),
(5, 'Chemistry', NULL, NULL, NULL),
(6, 'Mathematics', NULL, NULL, NULL),
(7, 'Biology', NULL, NULL, NULL),
(8, 'Computer', NULL, NULL, NULL),
(9, 'Statistics', NULL, NULL, NULL),
(10, 'Economics', NULL, NULL, NULL),
(11, 'Personality', NULL, NULL, NULL),
(12, 'Accounting', NULL, NULL, NULL),
(13, 'Commerce', NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
