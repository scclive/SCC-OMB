-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 02, 2020 at 09:39 PM
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
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `firstname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gender` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dob` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cnic` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `aboutme` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employed` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `province` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ssc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `hssc` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `role_id` int(10) UNSIGNED DEFAULT NULL,
  `remember_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_253_role_role_id_user` (`role_id`),
  KEY `users_deleted_at_index` (`deleted_at`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `firstname`, `surname`, `gender`, `email`, `password`, `photo`, `phone`, `dob`, `cnic`, `aboutme`, `employed`, `address`, `city`, `province`, `ssc`, `hssc`, `rating`, `role_id`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', '', '', 'Male', 'admin@admin.com', '$2y$10$GdubO8p..1F4Ic60m0e6Nu3H.0T5k6fhRmd3ozDuqaN.dBD83J9ue', NULL, '', '', '', '', 'Employed', '', 'Multān', NULL, 'matric', 'hssc', NULL, 1, '', NULL, NULL, NULL),
(2, 'Ahmed', NULL, NULL, NULL, 'asdasd@gmail.com', '$2y$10$73sD4onSUdMKlL3LeBxBTuwV2k6ckYyVKF9ewvvlwWwbOHbghrn.q', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-28 14:16:10', '2020-06-28 14:16:10', NULL),
(3, 'Admin', NULL, NULL, NULL, 'asdasd2@gmail.com', '$2y$10$4VJkc3KbIKWraCdEKh02qOUaSToH2wOcQ0QAugRmwXBgo8nbc9Fle', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2020-06-28 14:16:55', '2020-06-28 14:16:55', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
