-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jul 08, 2020 at 04:43 PM
-- Server version: 5.7.28
-- PHP Version: 7.2.25

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
-- Table structure for table `cities`
--

DROP TABLE IF EXISTS `cities`;
CREATE TABLE IF NOT EXISTS `cities` (
  `City_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `Campus_City` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `City_Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Campus_Phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Campus_Email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Campus_Url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Uni_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`City_id`),
  KEY `cities_uni_id_foreign` (`Uni_id`)
) ENGINE=MyISAM AUTO_INCREMENT=35 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`City_id`, `Campus_City`, `City_Name`, `Campus_Phone`, `Campus_Email`, `Campus_Url`, `Uni_id`, `created_at`, `updated_at`) VALUES
(1, 'Islamabad ', 'COMSATS INSTITUTE OF INFORMATION TECHNOLOGY, islamabad  Campus', '+92-51-9049 5032-5, +92-51-9049802', 'admissions@comsats.edu.pk', 'http://islamabad.comsats.edu.pk/', 25, '2020-06-19 10:50:14', '2020-06-21 13:31:55'),
(3, 'Wah', 'COMSATS INSTITUTE OF INFORMATION TECHNOLOGY, Wah Campus', '+92 51 9314382-83', 'info@ciitwah.edu.pk', 'http://cuiwah.edu.pk/', 25, '2020-06-19 16:01:04', '2020-06-19 16:01:04'),
(4, 'Taxila', 'UNIVERSITY OF ENGINEERING &amp; TECHNOLOGY, Taxila Campus', '+92 51-9047-400', 'info@uettaxila.edu.pk', 'http://www.uettaxila.edu.pk', 55, '2020-06-21 08:35:28', '2020-06-21 08:35:28'),
(5, 'Peshawar', 'UNIVERSITY OF ENGINEERING &amp; TECHNOLOGY, Peshawar Campus', '(+92-91)9216796-8', 'registrar@uetpeshawar.edu.pk', 'http://www.uetpeshawar.edu.pk ', 55, '2020-06-21 08:39:11', '2020-06-21 08:39:11'),
(6, 'Abbottabad ', 'COMSATS INSTITUTE OF INFORMATION TECHNOLOGY, Abbottabad  Campus', '0992-383591-6', 'info@cuiatd.edu.pk', 'https://cuiatd.edu.pk/', 25, '2020-06-21 09:04:47', '2020-06-21 09:04:47'),
(7, 'Vehari', 'COMSATS INSTITUTE OF INFORMATION TECHNOLOGY, Vehari Campus', '+92-67-3602803', 'admissions@ciitvehari.edu.pk', 'http://vehari.comsats.edu.pk/', 25, '2020-06-21 09:11:11', '2020-06-21 09:11:11'),
(8, 'Lahore ', 'COMSATS INSTITUTE OF INFORMATION TECHNOLOGY, Lahore  Campus', '+92 (42) 99203104, 99203105, 99203106', 'pro@cuilahore.edu.pk', 'https://lahore.comsats.edu.pk/', 25, '2020-06-21 09:15:26', '2020-06-21 09:15:26'),
(9, 'Sahiwal', 'COMSATS INSTITUTE OF INFORMATION TECHNOLOGY, Sahiwal Campus', '+92-040-4305001-4305002', 'Info@cuisahiwal.edu.pk', 'https://sahiwal.comsats.edu.pk/', 25, '2020-06-21 09:17:07', '2020-06-21 09:17:07'),
(10, 'Attock', 'COMSATS INSTITUTE OF INFORMATION TECHNOLOGY, Attock Campus', '+92-57- 9316330-1', 'info@ciit-attock.edu.pk', 'https://attock.comsats.edu.pk/', 25, '2020-06-21 09:18:53', '2020-06-21 09:18:53'),
(11, 'Lahore ', 'UNIVERSITY OF ENGINEERING &amp; TECHNOLOGY, Lahore  Campus', '+92-42-99250201, +92-42-990292', 'registrar@uet.edu.pk', 'http://www.uet.edu.pk ', 55, '2020-06-25 05:42:19', '2020-06-25 05:42:19'),
(12, 'Islamabad', 'NATIONAL UNIVERSITY OF SCIENCES &amp; TECHNOLOGY, Islamabad Campus', ' +92-51-111-11-6878', 'kp.ude.tsun@ksedplehtneduts', 'http://www.nust.edu.pk/ ', 98, '2020-06-25 08:55:00', '2020-06-25 08:55:00'),
(13, 'Lahore ', 'UNIVERSITY OF THE PUNJAB, Lahore  Campus', '+92-42-99231098-9, +92-42-3584', 'registrar@pu.edu.pk', 'http://www.pu.edu.pk ', 148, '2020-06-25 10:49:55', '2020-06-25 10:49:55'),
(14, 'Islamabad ', 'BAHRIA UNIVERSITY, Islamabad  Campus', '+92-51-111-111-028 ', 'info@bahria.edu.pk', 'http://www.bahria.edu.pk/ ', 9, '2020-07-04 08:18:09', '2020-07-04 08:18:09'),
(17, 'Karachi', 'BAHRIA UNIVERSITY, Karachi Campus', '+92-21-99240002-6', 'info@bahria.edu.pk', 'https://bahria.edu.pk/bukc/', 9, '2020-07-04 08:23:31', '2020-07-04 08:23:31'),
(16, 'Lahore ', '', '+92-42-99233408-15', 'admissions.bulc@bahria.edu.pk', 'https://www.bahria.edu.pk/bulc/', 9, '2020-07-04 08:20:41', '2020-07-04 08:20:41'),
(18, 'Islamabad ', 'AIR UNIVERSITY, Islamabad  Campus', ' +92-51-9262557-9 ', 'ao@mail.au.edu.pk', 'http://www.au.edu.pk/ ', 4, '2020-07-06 04:51:20', '2020-07-06 04:51:20'),
(19, 'Multan ', 'AIR UNIVERSITY, Multan  Campus', '061 – 4780091 – 3', 'ashraf@aumc.edu.pk', 'https://aumc.edu.pk/', 4, '2020-07-06 04:53:03', '2020-07-06 04:53:03'),
(20, 'Karachi', 'INSTITUTE OF BUSINESS ADMINISTRATION, Karachi Campus', '92-21-38104700', 'info@khi.iba.edu.pk', 'http://www.iba.edu.pk', 57, '2020-07-06 05:52:08', '2020-07-06 05:52:08'),
(21, 'Faisalabad', 'GOVERNMENT COLLEGE UNIVERSITY, Faisalabad Campus', '+92-41-9200670, +92-41-9201266', 'info@gcuf.edu.pk', 'http://www.gcuf.edu.pk', 37, '2020-07-07 04:33:57', '2020-07-07 04:33:57'),
(22, 'Lahore ', 'GOVERNMENT COLLEGE UNIVERSITY, LAHORE, Lahore  Campus', '+92-42-111 000 010 ', 'registrar@gcu.edu.pk', 'http://www.gcu.edu.pk', 21, '2020-07-07 04:41:48', '2020-07-07 04:41:48'),
(23, 'Swabi', 'GHULAM ISHAQ KHAN INSTITUTE OF ENGINEERING SCIENCES &amp; TECHNOLOGY, Swabi Campus', '+92-938-271875,+92-938-271897', 'sherali@giki.edu.pk', 'http://www.giki.edu.pk', 35, '2020-07-07 04:52:29', '2020-07-07 04:52:29'),
(24, 'Islamabad ', 'INTERNATIONAL ISLAMIC UNIVERSITY, Islamabad  Campus', '+92-51-9257988, +92-51-9019616', 'khalidmraja@iiu.edu.pk', 'http://www.iiu.edu.pk/', 47, '2020-07-07 13:01:27', '2020-07-07 13:01:27'),
(25, 'Islamabad ', 'QUAID-I-AZAM UNIVERSITY, Islamabad  Campus', '+92-051-9064 0000 ', 'info@qau.edu.pk', 'https://www.qau.edu.pk/ ', 114, '2020-07-08 02:35:35', '2020-07-08 02:35:35'),
(26, 'Islamabad ', 'NATIONAL UNIVERSITY OF MODERN LANGUAGES (NUML), Islamabad  Campus', '+92-51-111-11-6878, +92-51-908', 'info@numl.edu.pk', 'http://www.numl.edu.pk/ ', 75, '2020-07-08 04:56:39', '2020-07-08 04:56:39'),
(27, 'Lahore ', 'NATIONAL UNIVERSITY OF MODERN LANGUAGES (NUML), Lahore  Campus', '+92-42-99204588', 'info-lhr@numl.edu.pk', 'https://www.numl.edu.pk/lahore', 75, '2020-07-08 05:00:25', '2020-07-08 05:00:25'),
(28, 'Multan ', 'NATIONAL UNIVERSITY OF MODERN LANGUAGES (NUML), Multan  Campus', '+92-61-6510595', 'info-mtn@numl.edu.pk', 'https://www.numl.edu.pk/multan', 75, '2020-07-08 05:01:50', '2020-07-08 05:01:50'),
(29, 'Faisalabad', 'NATIONAL UNIVERSITY OF MODERN LANGUAGES (NUML), Faisalabad Campus', '041-9330846', 'rd-fsb@numl.edu.pk', 'https://www.numl.edu.pk/faisalabad', 75, '2020-07-08 05:02:53', '2020-07-08 05:03:16'),
(30, 'Gwadar', 'NATIONAL UNIVERSITY OF MODERN LANGUAGES (NUML), Gwadar Campus', ' 086-4211321', 'info-gwd@numl.edu.pk', 'https://numl.edu.pk/gwadar', 75, '2020-07-08 05:05:00', '2020-07-08 05:05:00'),
(31, 'Hyderabad ', 'NATIONAL UNIVERSITY OF MODERN LANGUAGES (NUML), Hyderabad  Campus', '022-2101166', 'rd-hyd@numl.edu.pk', 'https://www.numl.edu.pk/hyderabad', 75, '2020-07-08 05:06:13', '2020-07-08 05:06:13'),
(32, 'Quetta', 'NATIONAL UNIVERSITY OF MODERN LANGUAGES (NUML), Quetta Campus', '081-2870212', 'info-qta@numl.edu.pk', 'https://www.numl.edu.pk/quetta', 75, '2020-07-08 05:07:01', '2020-07-08 05:07:01'),
(33, 'Karachi', 'NATIONAL UNIVERSITY OF MODERN LANGUAGES (NUML), Karachi Campus', '36721027', 'info-khi@numl.edu.pk', 'https://www.numl.edu.pk/karachi', 75, '2020-07-08 05:08:26', '2020-07-08 05:08:26'),
(34, 'Peshawar', 'NATIONAL UNIVERSITY OF MODERN LANGUAGES (NUML), Peshawar Campus', '091-9218380', 'info-psh@numl.edu.pk', 'https://www.numl.edu.pk/peshawar', 75, '2020-07-08 05:09:24', '2020-07-08 05:09:24');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
