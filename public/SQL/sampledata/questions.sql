-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Jun 19, 2020 at 05:17 PM
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
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `topic_id` int(10) UNSIGNED DEFAULT NULL,
  `question_text` text COLLATE utf8_unicode_ci,
  `personality_ref` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `question_image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `code_snippet` text COLLATE utf8_unicode_ci,
  `answer_explanation` text COLLATE utf8_unicode_ci,
  `more_info_link` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `fk_256_topic_topic_id_question` (`topic_id`),
  KEY `questions_deleted_at_index` (`deleted_at`)
) ENGINE=MyISAM AUTO_INCREMENT=172 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `topic_id`, `question_text`, `personality_ref`, `question_image`, `code_snippet`, `answer_explanation`, `more_info_link`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 11, 'Create special effects for movies ', 'artistic ', NULL, '', '', '', '2020-05-06 02:54:39', '2020-05-06 02:54:39', NULL),
(2, 11, 'Lay brick or tile ', 'realistic', NULL, '', '', '', '2020-05-06 02:55:33', '2020-05-06 02:55:33', NULL),
(3, 11, 'Perform jazz or tap dance ', 'artistic ', NULL, '', '', '', '2020-05-06 02:56:10', '2020-05-06 02:56:10', NULL),
(4, 11, 'Develop a spreadsheet using computer software ', 'conventional', NULL, '', '', '', '2020-05-06 02:56:44', '2020-05-06 02:56:44', NULL),
(5, 11, 'Play a musical instrument ', 'artistic ', NULL, '', '', '', '2020-05-06 02:57:22', '2020-05-06 02:57:22', NULL),
(6, 11, 'Operate a beauty salon or barber shop ', 'enterprising', NULL, '', '', '', '2020-05-06 02:58:02', '2020-05-06 02:58:02', NULL),
(7, 11, 'Work in a biology lab ', 'investigative', NULL, '', '', '', '2020-05-06 02:58:36', '2020-05-06 02:58:36', NULL),
(8, 11, 'Do laboratory tests to identify diseases ', 'investigative', NULL, '', '', '', '2020-05-06 02:59:17', '2020-05-06 02:59:17', NULL),
(9, 11, 'Manage a clothing store ', 'enterprising', NULL, '', '', '', '2020-05-06 02:59:54', '2020-05-06 02:59:54', NULL),
(10, 11, 'Perform rehabilitation therapy ', 'social', NULL, '', '', '', '2020-05-06 03:00:59', '2020-05-06 03:00:59', NULL),
(11, 11, 'Put out forest fires ', 'realistic', NULL, '', '', '', '2020-05-06 03:01:42', '2020-05-06 03:01:42', NULL),
(12, 11, 'Test the quality of parts before shipment ', 'realistic', NULL, '', '', '', '2020-05-06 03:02:18', '2020-05-06 03:02:18', NULL),
(13, 11, 'Manage a retail store', 'enterprising', NULL, '', '', '', '2020-05-06 03:02:55', '2020-05-06 03:02:55', NULL),
(14, 11, 'Keep shipping and receiving records ', 'conventional', NULL, '', '', '', '2020-05-06 03:03:29', '2020-05-06 03:03:29', NULL),
(15, 11, 'Teach children how to play sports ', 'social', NULL, '', '', '', '2020-05-06 03:04:03', '2020-05-06 03:04:03', NULL),
(16, 11, 'Repair and install locks ', 'realistic', NULL, '', '', '', '2020-05-06 03:04:36', '2020-05-06 03:04:36', NULL),
(17, 11, 'Drive a truck to deliver packages to offices and homes ', 'realistic', NULL, '', '', '', '2020-05-06 03:05:12', '2020-05-06 03:05:12', NULL),
(18, 11, 'Record rent payments ', 'conventional', NULL, '', '', '', '2020-05-06 03:06:23', '2020-05-06 03:06:23', NULL),
(19, 11, 'Negotiate business contracts ', 'enterprising', NULL, '', '', '', '2020-05-06 03:06:52', '2020-05-06 03:06:52', NULL),
(20, 11, 'Teach sign language to people with hearing disabilities ', 'social', NULL, '', '', '', '2020-05-06 03:07:24', '2020-05-06 03:07:24', NULL),
(21, 11, 'Edit movies ', 'artistic ', NULL, '', '', '', '2020-05-06 03:07:53', '2020-05-06 03:07:53', NULL),
(22, 11, 'Help conduct a group therapy session ', 'social', NULL, '', '', '', '2020-05-06 03:08:26', '2020-05-06 03:08:27', NULL),
(23, 11, 'Sell merchandise at a department store ', 'enterprising', NULL, '', '', '', '2020-05-06 03:09:01', '2020-05-06 03:09:01', NULL),
(24, 11, 'Investigate the cause of a fire ', 'investigative', NULL, '', '', '', '2020-05-06 03:09:37', '2020-05-06 03:09:37', NULL),
(25, 11, 'Give career guidance to people ', 'social', NULL, '', '', '', '2020-05-06 03:10:12', '2020-05-06 03:10:12', NULL),
(26, 11, 'Sing in a band ', 'artistic ', NULL, '', '', '', '2020-05-06 03:10:42', '2020-05-06 03:10:42', NULL),
(27, 11, 'Stamp, sort, and distribute mail for an organization ', 'conventional', NULL, '', '', '', '2020-05-06 03:11:14', '2020-05-06 03:11:14', NULL),
(28, 11, 'Do volunteer work at a non-profit organization ', 'social', NULL, '', '', '', '2020-05-06 03:11:46', '2020-05-06 03:11:46', NULL),
(29, 11, 'Develop a way to better predict the weather ', 'investigative', NULL, '', '', '', '2020-05-06 03:12:20', '2020-05-06 03:12:20', NULL),
(30, 11, 'Invent a replacement for sugar ', 'investigative', NULL, '', '', '', '2020-05-06 03:12:56', '2020-05-06 03:12:56', NULL),
(31, 11, 'Represent a client in a lawsuit', 'enterprising', NULL, '', '', '', '2020-05-06 03:13:25', '2020-05-06 03:13:25', NULL),
(32, 11, 'Teach an individual an exercise routine ', 'social', NULL, '', '', '', '2020-05-06 03:14:17', '2020-05-06 03:14:17', NULL),
(33, 11, 'Write books or plays ', 'artistic ', NULL, '', '', '', '2020-05-06 03:14:56', '2020-05-06 03:14:56', NULL),
(34, 11, 'Compose or arrange music ', 'artistic ', NULL, '', '', '', '2020-05-06 03:15:33', '2020-05-06 03:15:33', NULL),
(35, 11, 'Help people with personal or emotional problems ', 'social', NULL, '', '', '', '2020-05-06 03:16:07', '2020-05-06 03:16:07', NULL),
(36, 11, 'Study the movement of planets ', 'investigative', NULL, '', '', '', '2020-05-06 03:18:14', '2020-05-06 03:18:14', NULL),
(37, 11, 'Market a new line of clothing', 'enterprising', NULL, '', '', '', '2020-05-06 03:18:47', '2020-05-06 03:18:47', NULL),
(38, 11, 'Build kitchen cabinets ', 'realistic', NULL, '', '', '', '2020-05-06 03:19:21', '2020-05-06 03:19:21', NULL),
(39, 11, 'Inventory supplies using a hand-held computer ', 'conventional', NULL, '', '', '', '2020-05-06 03:19:57', '2020-05-06 03:19:57', NULL),
(40, 11, 'Write scripts for movies or television shows ', 'artistic ', NULL, '', '', '', '2020-05-06 03:20:33', '2020-05-06 03:20:33', NULL),
(41, 11, 'Examine blood samples using a microscope ', 'investigative', NULL, '', '', '', '2020-05-06 03:23:28', '2020-05-06 03:23:28', NULL),
(42, 11, 'Keep inventory records ', 'conventional', NULL, '', '', '', '2020-05-06 03:24:04', '2020-05-06 03:24:04', NULL),
(43, 11, 'Start your own business ', 'enterprising', NULL, '', '', '', '2020-05-06 03:24:34', '2020-05-06 03:24:34', NULL),
(44, 11, 'Load computer software into a large computer network ', 'conventional', NULL, '', '', '', '2020-05-06 03:27:52', '2020-05-06 03:27:52', NULL),
(45, 11, 'Develop a new medicine ', 'investigative', NULL, '', '', '', '2020-05-06 03:28:34', '2020-05-06 03:28:34', NULL),
(46, 11, 'Operate a calculator ', 'conventional', NULL, '', '', '', '2020-05-06 03:32:52', '2020-05-06 03:32:52', NULL),
(47, 11, 'Take care of children at a day-care center ', 'social', NULL, '', '', '', '2020-05-06 03:33:22', '2020-05-06 03:33:22', NULL),
(48, 11, 'Calculate the wages of employees ', 'conventional', NULL, '', '', '', '2020-05-06 03:33:51', '2020-05-06 03:33:51', NULL),
(49, 11, 'Set up and operate machines to make products ', 'realistic', NULL, '', '', '', '2020-05-06 03:34:19', '2020-05-06 03:34:19', NULL),
(50, 11, 'Raise fish in a fish hatchery ', 'realistic', NULL, '', '', '', '2020-05-06 03:34:53', '2020-05-06 03:34:53', NULL),
(51, 11, 'Repair household appliances ', 'realistic', NULL, '', '', '', '2020-05-06 03:35:38', '2020-05-06 03:35:38', NULL),
(52, 11, 'Buy and sell stocks and bonds ', 'enterprising', NULL, '', '', '', '2020-05-06 03:36:06', '2020-05-06 03:36:06', NULL),
(53, 11, 'Draw pictures ', 'artistic ', NULL, '', '', '', '2020-05-06 03:36:38', '2020-05-06 03:36:38', NULL),
(54, 11, 'Study ways to reduce water pollution ', 'investigative', NULL, '', '', '', '2020-05-06 03:37:07', '2020-05-06 03:37:07', NULL),
(55, 11, 'Paint sets for plays ', 'artistic ', NULL, '', '', '', '2020-05-06 03:37:45', '2020-05-06 03:37:45', NULL),
(56, 11, 'Proofread records or forms ', 'conventional', NULL, '', '', '', '2020-05-06 03:38:51', '2020-05-06 03:38:51', NULL),
(57, 11, 'Assemble electronic parts ', 'realistic', NULL, '', '', '', '2020-05-06 03:39:04', '2020-05-06 03:39:04', NULL),
(58, 11, 'Conduct chemical experiments ', 'investigative', NULL, '', '', '', '2020-05-06 03:39:33', '2020-05-06 03:39:33', NULL),
(59, 11, 'Teach a high-school class', 'social', NULL, '', '', '', '2020-05-06 03:40:03', '2020-05-06 03:40:03', NULL),
(60, 11, 'Manage a department within a large company ', 'enterprising', NULL, '', '', '', '2020-05-06 03:40:35', '2020-05-06 03:40:35', NULL),
(61, 1, 'There is no doubt that one has to keep _______ with the changing times.', 'N/A', NULL, '', '', '', '2020-05-18 05:06:41', '2020-05-18 05:06:41', NULL),
(62, 2, 'A group of dog lovers declare that the principal virtue of the dog is its general friendliness towards all people. But, another group of cat lovers declare that the principal virtue of the cat is its peculiar friendliness towards its provider.\r\nWhich of the following is true of the claims of both dogs and cats lovers?', 'N/A', NULL, '', '', '', '2020-05-18 05:13:25', '2020-05-18 05:13:25', NULL),
(63, 3, 'The circumference of a circle whose diameter is 6 inches is approx:', 'N/A', NULL, '', '', '', '2020-05-18 05:15:18', '2020-05-18 05:15:18', NULL),
(64, 6, 'What is the value of x if 3^(x+1) = 243', 'N/A', NULL, '', '', '', '2020-05-18 05:16:46', '2020-05-18 05:16:46', NULL),
(65, 5, 'Smallest particle of an element which may or may not have independent existence is known as:', 'N/A', NULL, '', '', '', '2020-05-18 05:18:35', '2020-05-18 05:18:35', NULL),
(66, 4, 'Light year is a unit of:', 'N/A', NULL, '', '', '', '2020-05-18 05:19:33', '2020-05-18 05:19:33', NULL),
(67, 8, 'An organic chip is called a:', 'N/A', NULL, '', '', '', '2020-05-18 05:21:50', '2020-05-18 05:21:50', NULL),
(68, 7, 'Which of the following is found in all bacteria', 'N/A', NULL, '', '', '', '2020-05-18 05:26:38', '2020-05-18 05:26:38', NULL),
(69, 9, 'Second moment about mean is:', 'N/A', NULL, '', '', '', '2020-05-18 05:29:23', '2020-05-18 05:29:23', NULL),
(70, 10, 'National income period is:', 'N/A', NULL, '', '', '', '2020-05-18 05:30:45', '2020-05-18 05:30:45', NULL),
(71, 13, 'Through advertisements new goods are', 'N/A', NULL, '', '', '', '2020-05-18 05:32:15', '2020-05-18 05:32:15', NULL),
(72, 12, 'In accounting equation assets are equal to', 'N/A', NULL, '', '', '', '2020-05-18 05:33:44', '2020-05-18 05:33:44', NULL),
(73, 1, 'I have often ______ why he went to live abroad', 'N/A', NULL, '', '', '', '2020-06-07 07:16:12', '2020-06-07 07:16:13', NULL),
(74, 1, 'Kamal\'s friends had nothing to offer him other than__________\r\nin his grief.', 'N/A', NULL, '', '', '', '2020-06-14 02:56:19', '2020-06-14 02:56:19', NULL),
(75, 1, 'There is no doubt t that one has to keep__________ with the changing times.', 'N/A', NULL, '', '', '', '2020-06-14 03:16:44', '2020-06-14 03:16:44', NULL),
(76, 1, 'Belying has mother\'s worries, Amir\'s behavior throughout the function was_________.', 'N/A', NULL, '', '', '', '2020-06-14 04:44:53', '2020-06-14 04:46:00', '2020-06-14 04:46:00'),
(77, 1, 'Belying has mother\'s worries, Amir\'s behavior throughout the function was\r\nImt ginable', 'N/A', NULL, '', '', '', '2020-06-14 04:48:37', '2020-06-14 04:48:37', NULL),
(78, 1, 'After reaching New York, Azhar will have to__________ himself to the new surroundings.', 'N/A', NULL, '', '', '', '2020-06-14 04:54:54', '2020-06-14 04:54:54', NULL),
(79, 1, 'Dowry is no longer permitted by law even in__________ marriage.\r\n', 'N/A', NULL, '', '', '', '2020-06-14 06:11:29', '2020-06-14 06:11:29', NULL),
(80, 1, 'Research has also___________ the illusion that childhood dreams are pure Innocence.', 'N/A', NULL, '', '', '', '2020-06-14 06:13:34', '2020-06-14 06:13:34', NULL),
(81, 1, 'Everyone should_______________himself against illness since medical care has now become expensive.', 'N/A', NULL, '', '', '', '2020-06-14 06:16:06', '2020-06-14 06:16:06', NULL),
(82, 1, 'How much did it___________ to reach Bombay by car.', 'N/A', NULL, '', '', '', '2020-06-14 06:18:26', '2020-06-14 06:18:26', NULL),
(83, 1, 'In the departmental inquiry, it was denied that the police had committed any_________on people under their custody. ', 'N/A', NULL, '', '', '', '2020-06-14 06:43:01', '2020-06-14 06:43:01', NULL),
(84, 1, 'The petition before the Court prayed for___________the appointment orders issued by the\r\nmanagement.', 'N/A', NULL, '', '', '', '2020-06-14 06:45:56', '2020-06-14 06:45:56', NULL),
(85, 1, 'Man power is the__________ means of converting other resources to mankind\'s use and benefits.', 'N/A', NULL, '', '', '', '2020-06-14 07:01:00', '2020-06-14 07:01:00', NULL),
(86, 1, 'I am given to____________that you are going abroad.', 'N/A', NULL, '', '', '', '2020-06-14 07:03:12', '2020-06-14 07:03:12', NULL),
(87, 1, '______________by people \'s perception it seems that democracy succeedes in Pakistan.', 'N/A', NULL, '', '', '', '2020-06-14 07:06:24', '2020-06-14 07:06:24', NULL),
(88, 1, 'The passengers were very happy______________the friendly and warm treatment given to them.', 'N/A', NULL, '', '', '', '2020-06-15 00:32:37', '2020-06-15 00:32:37', NULL),
(89, 1, 'The higher you go, the more difficult it____________to breath.', 'N/A', NULL, '', '', '', '2020-06-15 00:35:10', '2020-06-15 00:35:10', NULL),
(90, 1, 'The children were disappointed because they had hoped_________with us.\r\n', 'N/A', NULL, '', '', '', '2020-06-15 00:37:52', '2020-06-15 00:37:52', NULL),
(91, 1, 'She stood_________Ahsan, but could not utter a single word for quite some time.', 'N/A', NULL, '', '', '', '2020-06-15 00:39:38', '2020-06-15 00:39:38', NULL),
(92, 1, 'he is the friend__________i trust most.', 'N/A', NULL, '', '', '', '2020-06-15 00:47:59', '2020-06-15 00:47:59', NULL),
(93, 1, 'You must dispense__________his service.', 'N/A', NULL, '', '', '', '2020-06-15 00:49:25', '2020-06-15 00:49:25', NULL),
(94, 1, 'I shall not desert him_______all the world.', 'N/A', NULL, '', '', '', '2020-06-15 00:50:47', '2020-06-15 00:50:47', NULL),
(95, 1, 'The telephone___________several times before I answered it.\r\n', 'N/A', NULL, '', '', '', '2020-06-15 00:52:59', '2020-06-15 00:52:59', NULL),
(96, 1, 'I bought a new car last year, but I___________my old car yet, so at present I have two cars.', 'N/A', NULL, '', '', '', '2020-06-15 00:54:44', '2020-06-15 00:54:44', NULL),
(97, 1, 'No sooner did he go in__________he came out.', 'N/A', NULL, '', '', '', '2020-06-15 03:14:54', '2020-06-15 03:14:54', NULL),
(98, 1, 'The judge acquitted the prisoner___________the charge of murder.', 'N/A', NULL, '', '', '', '2020-06-15 03:16:25', '2020-06-15 03:16:25', NULL),
(99, 1, 'An argument_________between the two friends.', 'N/A', NULL, '', '', '', '2020-06-15 03:18:08', '2020-06-15 03:18:08', NULL),
(100, 1, 'When was a child, I___________to school everyday instead of going by cycle.', 'N/A', NULL, '', '', '', '2020-06-16 09:45:41', '2020-06-16 09:45:41', NULL),
(101, 1, 'Nobody has come to see us____________we bought these fierce dogs.', 'N/A', NULL, '', '', '', '2020-06-16 09:46:54', '2020-06-16 09:46:54', NULL),
(102, 1, 'He ran____________.', 'N/A', NULL, '', 'the option was different', '', '2020-06-16 09:48:42', '2020-06-16 09:53:25', NULL),
(103, 1, 'In Bush, Saddam was up___________more than his match.', 'N/A', NULL, '', '', '', '2020-06-16 09:55:12', '2020-06-16 09:55:12', NULL),
(104, 1, 'The doctor advised him to go_________several medical tests.', 'N/A', NULL, '', '', '', '2020-06-16 09:57:34', '2020-06-16 09:57:34', NULL),
(105, 1, 'Purpose relationship________Example____Glove:Balls as', 'N/A', NULL, '', '', '', '2020-06-16 10:27:36', '2020-06-16 10:27:36', NULL),
(106, 1, 'Cause and effect relationship_____Example____Race: Fatigue as:', 'N/A', NULL, '', '', '', '2020-06-16 10:29:39', '2020-06-16 10:29:39', NULL),
(107, 1, 'Part whole relationship__Example___Snake: Reptile as', 'N/A', NULL, '', '', '', '2020-06-16 10:36:18', '2020-06-16 10:36:18', NULL),
(108, 1, 'Action to object and object to action relationship, Examples____Kick: Football as', 'N/A', NULL, '', '', '', '2020-06-16 10:55:25', '2020-06-16 10:55:25', NULL),
(109, 1, 'Action to object and object to action relationship, Examples____Steak: Broil as', 'N/A', NULL, '', '', '', '2020-06-16 10:58:39', '2020-06-16 10:58:39', NULL),
(110, 1, 'Synonym relationship—Enormous: Huge as', 'N/A', NULL, '', '', '', '2020-06-16 11:13:33', '2020-06-16 11:13:33', NULL),
(111, 1, 'Antonym relationship— Example——Purity: Evil as', 'N/A', NULL, '', '', '', '2020-06-16 11:14:44', '2020-06-16 11:14:44', NULL),
(112, 1, 'Place relationship—Example— Faisal Mosque: Islamabad as', 'N/A', NULL, '', '', '', '2020-06-16 11:16:14', '2020-06-16 11:16:14', NULL),
(113, 1, 'Degree relationship—Example— Warm: Hot as', 'N/A', NULL, '', '', '', '2020-06-16 11:17:52', '2020-06-16 11:17:52', NULL),
(114, 1, 'Sequence relationship—Spring: Summer at.', 'N/A', NULL, '', '', '', '2020-06-16 11:19:51', '2020-06-16 11:19:51', NULL),
(115, 1, 'Association relationship—Example—Devil: Wrong as', 'N/A', NULL, '', '', '', '2020-06-16 13:29:01', '2020-06-16 13:29:01', NULL),
(116, 1, 'Oasis: Desert', 'N/A', NULL, '', '', '', '2020-06-16 13:51:29', '2020-06-16 13:51:29', NULL),
(117, 1, 'Sad: Morose', 'N/A', NULL, '', '', '', '2020-06-16 13:53:25', '2020-06-16 13:53:25', NULL),
(118, 1, 'Work: Tired', 'N/A', NULL, '', '', '', '2020-06-16 13:54:36', '2020-06-16 13:54:36', NULL),
(119, 1, 'Thin: Sparse', 'N/A', NULL, '', '', '', '2020-06-16 13:55:40', '2020-06-16 13:55:40', NULL),
(120, 1, 'Sad: Melancholic', 'N/A', NULL, '', '', '', '2020-06-16 13:56:39', '2020-06-16 13:56:39', NULL),
(121, 1, 'Flurry: Confusion', 'N/A', NULL, '', '', '', '2020-06-16 13:57:29', '2020-06-16 13:57:29', NULL),
(122, 1, 'Turbid: Muddy', 'N/A', NULL, '', '', '', '2020-06-16 13:59:17', '2020-06-16 13:59:17', NULL),
(123, 1, 'Fresh: New', 'N/A', NULL, '', '', '', '2020-06-16 14:00:51', '2020-06-16 14:00:51', NULL),
(124, 1, 'Wheel: Hub', 'N/A', NULL, '', '', '', '2020-06-16 14:01:59', '2020-06-16 14:01:59', NULL),
(125, 1, 'Speech: Peroration', 'N/A', NULL, '', '', '', '2020-06-16 14:02:48', '2020-06-16 14:02:48', NULL),
(126, 1, 'Death: Lament', 'N/A', NULL, '', '', '', '2020-06-16 14:03:47', '2020-06-16 14:03:47', NULL),
(127, 1, 'Virus: Disease', 'N/A', NULL, '', '', '', '2020-06-16 14:04:32', '2020-06-16 14:04:32', NULL),
(128, 1, 'Foot: Toe', 'N/A', NULL, '', '', '', '2020-06-16 14:11:11', '2020-06-16 14:11:11', NULL),
(129, 1, 'Zenith: Nadir', 'N/A', NULL, '', '', '', '2020-06-16 14:11:59', '2020-06-16 14:11:59', NULL),
(130, 1, 'Giggle: Chortle', 'N/A', NULL, '', '', '', '2020-06-16 14:13:27', '2020-06-16 14:13:27', NULL),
(131, 1, 'Immaculate: Spotless', 'N/A', NULL, '', '', '', '2020-06-16 14:14:22', '2020-06-16 14:14:22', NULL),
(132, 1, 'Fever: Flush', 'N/A', NULL, '', '', '', '2020-06-16 14:15:13', '2020-06-16 14:15:13', NULL),
(133, 1, 'Pistol: Shoot', 'N/A', NULL, '', '', '', '2020-06-16 14:17:00', '2020-06-16 14:17:00', NULL),
(134, 1, 'Prelude: Symphony', 'N/A', NULL, '', '', '', '2020-06-16 14:19:35', '2020-06-16 14:19:35', NULL),
(135, 1, 'Chains: Clang', 'N/A', NULL, '', '', '', '2020-06-16 14:22:04', '2020-06-16 14:22:04', NULL),
(136, 1, 'Loud: Blatant', 'N/A', NULL, '', '', '', '2020-06-16 14:23:04', '2020-06-16 14:23:04', NULL),
(137, 1, 'Earth: Sun', 'N/A', NULL, '', '', '', '2020-06-16 14:24:09', '2020-06-16 14:24:09', NULL),
(138, 1, 'Room: Cell', 'N/A', NULL, '', '', '', '2020-06-16 14:25:40', '2020-06-16 14:25:40', NULL),
(139, 1, 'Books are, by far, the most lasting product of human effort. Temples crumble into ruin.Pictures and statues decay, but books survive. Time does not destroy the great thoughts which are as fresh today as when they first passed through their author\'s mind. These thoughts speak to us through the printed page. The only effect of time has been to throw out of currency the bad products. Nothing in literature which is not good can live for long. Good books have always helped man in various spheres of life. No wonder that the world keeps its books with great care.\r\nQ) Of the product of human effort, books are the most', 'N/A', NULL, '', '', '', '2020-06-16 14:41:48', '2020-06-16 14:41:48', NULL),
(140, 1, 'Books are, by far, the most lasting product of human effort. Temples crumble into ruin.Pictures and statues decay, but books survive. Time does not destroy the great thoughts which are as fresh today as when they first passed through their author\'s mind. These thoughts speak to us through the printed page. The only effect of time has been to throw out of currency the bad products. Nothing in literature which is not good can live for long. Good books have always helped man in various spheres of life. No wonder that the world keeps its books with great care.\r\nQ) Time does not destroy books because they contain', 'N/A', NULL, '', '', '', '2020-06-16 14:43:33', '2020-06-16 14:43:33', NULL),
(141, 1, 'Books are, by far, the most lasting product of human effort. Temples crumble into ruin.Pictures and statues decay, but books survive. Time does not destroy the great thoughts which are as fresh today as when they first passed through their author\'s mind. These thoughts speak to us through the printed page. The only effect of time has been to throw out of currency the bad products. Nothing in literature which is not good can live for long. Good books have always helped man in various spheres of life. No wonder that the world keeps its books with great care.\r\nQ) \"To throw out of currency\" means', 'N/A', NULL, '', '', '', '2020-06-16 14:46:49', '2020-06-16 14:55:00', '2020-06-16 14:55:00'),
(142, 1, 'Books are, by far, the most lasting product of human effort. Temples crumble into ruin.Pictures and statues decay, but books survive. Time does not destroy the great thoughts which are as fresh today as when they first passed through their author\'s mind. These thoughts speak to us through the printed page. The only effect of time has been to throw out of currency the bad products. Nothing in literature which is not good can live for long. Good books have always helped man in various spheres of life. No wonder that the world keeps its books with great care.\r\nQ) The world keeps its books with care because', 'N/A', NULL, '', '', '', '2020-06-16 14:53:50', '2020-06-16 14:53:50', NULL),
(143, 1, 'Books are, by far, the most lasting product of human effort. Temples crumble into ruin.Pictures and statues decay, but books survive. Time does not destroy the great thoughts which are as fresh today as when they first passed through their author\'s mind. These thoughts speak to us through the printed page. The only effect of time has been to throw out of currency the bad products. Nothing in literature which is not good can live for long. Good books have always helped man in various spheres of life. No wonder that the world keeps its books with great care.\r\nQ) \"To throw out of currency\" means', 'N/A', NULL, '', '', '', '2020-06-16 14:55:59', '2020-06-16 14:55:59', NULL),
(144, 1, 'After submitting his resignation, Albert came out and took the long narrow road leading to the railway station which was one of the busiest roads in the city. Sad and depressed and worried about looking for a new job, Albert looked around for a cigarette shop. He walked up to the end of the road but found no tobacconist. It was odd that such a busy thoroughfare with thousands of people passing through did not even have a single cigarette shop. He suddenly felt that it was no longer necessary for him to hunt for a job. He decided to open a tobacco shop himself. It was bound to be profitable, he felt.\r\nQ) After submitting his resignation, Albert came out worried about', 'N/A', NULL, '', '', '', '2020-06-16 15:08:05', '2020-06-16 15:08:05', NULL),
(145, 1, 'After submitting his resignation, Albert came out and took the long narrow road leading to the railway station which was one of the busiest roads in the city. Sad and depressed and worried about looking for a new job, Albert looked around for a cigarette shop. He walked up to the end of the road but found no tobacconist. It was odd that such a busy thoroughfare with thousands of people passing through did not even have a single cigarette shop. He suddenly felt that it was no longer necessary for him to hunt for a job. He decided to open a tobacco shop himself. It was bound to be profitable, he felt.\r\nQ) Albert was sad and depressed because', 'N/A', NULL, '', '', '', '2020-06-16 15:13:11', '2020-06-16 15:13:11', NULL),
(146, 1, 'After submitting his resignation, Albert came out and took the long narrow road leading to the railway station which was one of the busiest roads in the city. Sad and depressed and worried about looking for a new job, Albert looked around for a cigarette shop. He walked up to the end of the road but found no tobacconist. It was odd that such a busy thoroughfare with thousands of people passing through did not even have a single cigarette shop. He suddenly felt that it was no longer necessary for him to hunt for a job. He decided to open a tobacco shop himself. It was bound to be profitable, he felt.\r\nQ) There was no cigarette shop on that road because', 'N/A', NULL, '', '', '', '2020-06-16 15:15:50', '2020-06-16 15:15:50', NULL),
(147, 1, 'After submitting his resignation, Albert came out and took the long narrow road leading to the railway station which was one of the busiest roads in the city. Sad and depressed and worried about looking for a new job, Albert looked around for a cigarette shop. He walked up to the end of the road but found no tobacconist. kt was odd that such a busy thoroughfare with thousands of people passing through did not even have a single cigarette shop. He suddenly felt that it was no longer necessary for him to hunt for a job. He decided to open a tobacco shop himself. It was bound to be profitable, he felt.\r\nQ)  Albert decided not to look for a new job because', 'N/A', NULL, '', '', '', '2020-06-16 15:18:23', '2020-06-16 15:18:23', NULL),
(148, 1, 'After submitting his resignation, Albert came out and took the long narrow road leading to the railway station which was one of the busiest roads in the city. Sad and depressed and worried about looking for a new job, Albert looked around for a cigarette shop. He walked up to the end of the road but found no tobacconist. kt was odd that such a busy thoroughfare with thousands of people passing through did not even have a single cigarette shop. He suddenly felt that it was no longer necessary for him to hunt for a job. He decided to open a tobacco shop himself. It was bound to be profitable, he felt.\r\nQ) A cigarette shop on a busy road was bound to be profitable because', 'N/A', NULL, '', '', '', '2020-06-16 15:21:28', '2020-06-16 15:21:28', NULL),
(149, 1, 'Voice: Aphasia', 'N/A', NULL, '', '', '', '2020-06-19 09:16:13', '2020-06-19 09:16:13', NULL),
(150, 1, 'Swan: Cygnet', 'N/A', NULL, '', '', '', '2020-06-19 09:17:24', '2020-06-19 09:17:24', NULL),
(151, 1, 'Reaper: Scythe', 'N/A', NULL, '', '', '', '2020-06-19 09:19:04', '2020-06-19 09:19:04', NULL),
(152, 1, 'Hassock: Kneeling', 'N/A', NULL, '', '', '', '2020-06-19 09:20:36', '2020-06-19 09:20:36', NULL),
(153, 1, 'Barometer: Pressure', 'N/A', NULL, '', '', '', '2020-06-19 09:21:46', '2020-06-19 09:21:46', NULL),
(154, 1, 'Bugle: sound', 'N/A', NULL, '', '', '', '2020-06-19 09:23:41', '2020-06-19 09:23:41', NULL),
(155, 1, 'Say: Assert', 'N/A', NULL, '', '', '', '2020-06-19 09:24:50', '2020-06-19 09:24:50', NULL),
(156, 1, 'Grain: Skin', 'N/A', NULL, '', '', '', '2020-06-19 09:26:46', '2020-06-19 09:26:46', NULL),
(157, 1, 'Staircase: Degrees', 'N/A', NULL, '', '', '', '2020-06-19 09:27:47', '2020-06-19 09:27:47', NULL),
(158, 1, 'Mascot: Ominous', 'N/A', NULL, '', '', '', '2020-06-19 09:28:34', '2020-06-19 09:28:34', NULL),
(159, 1, 'Those defenders of the tobacco industry who deny that there is a casual linkage between cigarette smoking and many diseases all but_________the statistical evidence that very clearly demonstrates the connection.', 'N/A', NULL, '', '', '', '2020-06-19 09:43:27', '2020-06-19 09:43:28', NULL),
(160, 1, 'I have come to see the loss, I won \'t see any one_________.', 'N/A', NULL, '', '', '', '2020-06-19 09:44:43', '2020-06-19 09:44:43', NULL),
(161, 1, 'This state is a colony, however, in most matters, it is__________and receives no order from the mother country.', 'N/A', NULL, '', '', '', '2020-06-19 09:46:48', '2020-06-19 09:46:48', NULL),
(162, 1, 'Take any apple________you like.', 'N/A', NULL, '', '', '', '2020-06-19 09:48:35', '2020-06-19 09:48:35', NULL),
(163, 1, 'By the middle of January, the river had become so choked with ice as to be________even for the\r\nsmallest of boats.', 'N/A', NULL, '', '', '', '2020-06-19 09:53:57', '2020-06-19 09:53:57', NULL),
(164, 1, 'They fired upon the enemy from behind the trees, walls and any other________point they could\r\nfind.', 'N/A', NULL, '', '', '', '2020-06-19 09:57:30', '2020-06-19 09:57:30', NULL),
(165, 1, 'The dog is_________faithful animal.', 'N/A', NULL, '', '', '', '2020-06-19 09:58:50', '2020-06-19 09:58:50', NULL),
(166, 1, 'In their most recent report to the shareholders, the directors________financial information on\r\ninternational sales.', 'N/A', NULL, '', '', '', '2020-06-19 10:16:39', '2020-06-19 10:16:39', NULL),
(167, 1, 'Maria has been waiting for you_______morning.', 'N/A', NULL, '', '', '', '2020-06-19 10:22:15', '2020-06-19 10:22:15', NULL),
(168, 1, ' The evil of class and race hatred must be eliminated while it is still in an________state.', 'N/A', NULL, '', '', '', '2020-06-19 10:25:30', '2020-06-19 10:25:30', NULL),
(169, 1, 'Book: Leaves', 'N/A', NULL, '', '', '', '2020-06-19 10:28:29', '2020-06-19 10:28:29', NULL),
(170, 1, 'Peacock: Pride', 'N/A', NULL, '', '', '', '2020-06-19 10:29:33', '2020-06-19 10:29:33', NULL),
(171, 1, 'Wool: Shear', 'N/A', NULL, '', '', '', '2020-06-19 10:30:42', '2020-06-19 10:30:42', NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
