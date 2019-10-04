-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 18, 2017 at 10:04 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `quiz_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `answer` text COLLATE utf8mb4_persian_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci AUTO_INCREMENT=34 ;

--
-- Dumping data for table `answers`
--

INSERT INTO `answers` (`id`, `question_id`, `user_id`, `answer`, `created_at`, `updated_at`) VALUES
(16, 35, 1, 'پاسخ اول من', '2016-02-02 10:20:43', '2016-02-02 10:20:43'),
(17, 36, 1, 'پاسخ اول من', '2016-02-02 10:20:43', '2016-02-02 10:20:43'),
(18, 37, 1, 'پاسخ اول من', '2016-02-02 10:20:43', '2016-02-02 10:20:43'),
(19, 38, 1, 'پاسخ اول من', '2016-02-02 10:20:43', '2016-02-02 10:20:43'),
(20, 39, 1, 'پاسخ اول من', '2016-02-02 10:20:43', '2016-02-02 10:20:43'),
(21, 40, 1, 'پاسخ اول من', '2016-02-02 10:20:43', '2016-02-02 10:20:43'),
(22, 41, 1, 'پاسخ اول من', '2016-02-02 10:20:43', '2016-02-02 10:20:43'),
(23, 42, 1, '', '2016-02-02 10:20:44', '2016-02-02 10:20:44'),
(24, 43, 1, '', '2016-02-02 10:20:44', '2016-02-02 10:20:44'),
(25, 45, 1, '', '2016-02-02 11:24:49', '2016-02-02 11:24:49'),
(26, 46, 1, 'پاسخ به سوال اول پرسشنامه جدید', '2016-02-02 11:26:56', '2016-02-02 11:26:56'),
(27, 47, 1, 'پاسخ به سوال دوم پرسشنامه جدید', '2016-02-02 11:26:56', '2016-02-02 11:26:56'),
(28, 48, 1, 'پاسخ به سوال سوم پرسشنامه جدید', '2016-02-02 11:26:56', '2016-02-02 11:26:56'),
(29, 49, 1, 'پاسخ به سوال چهارم پرسشنامه جدید', '2016-02-02 11:26:57', '2016-02-02 11:26:57'),
(30, 50, 1, '', '2016-02-02 11:26:57', '2016-02-02 11:26:57'),
(31, 51, 1, '', '2016-02-02 11:26:57', '2016-02-02 11:26:57'),
(32, 52, 1, 'جواب سوال ۱', '2016-02-03 08:22:55', '2016-02-03 08:22:55'),
(33, 53, 1, 'جواب سوال ۲', '2016-02-03 08:22:55', '2016-02-03 08:22:55');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `question` text COLLATE utf8mb4_persian_ci NOT NULL,
  `multi_ans_1` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `multi_ans_2` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `multi_ans_3` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `multi_ans_4` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `created_by` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci AUTO_INCREMENT=54 ;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `title`, `question`, `multi_ans_1`, `multi_ans_2`, `multi_ans_3`, `multi_ans_4`, `created_by`, `created_at`, `updated_at`) VALUES
(35, 'پرسشنامه اول', 'سوال اول پرسشنامه اول', '', '', '', '', 'modir', '2016-02-02 10:18:14', '2016-02-02 10:18:14'),
(36, 'پرسشنامه اول', 'سوال دوم پرسشنامه اول', '', '', '', '', 'modir', '2016-02-02 10:18:19', '2016-02-02 10:18:19'),
(37, 'پرسشنامه اول', 'سوال سوم پرسشنامه اول', '', '', '', '', 'modir', '2016-02-02 10:18:24', '2016-02-02 10:18:24'),
(38, 'پرسشنامه اول', 'سوال چهارم پرسشنامه اول', '', '', '', '', 'modir', '2016-02-02 10:18:29', '2016-02-02 10:18:29'),
(39, 'پرسشنامه اول', 'سوال پنجم پرسشنامه اول', '', '', '', '', 'modir', '2016-02-02 10:18:35', '2016-02-02 10:18:35'),
(40, 'پرسشنامه اول', 'سوال ششم پرسشنامه اول', '', '', '', '', 'modir', '2016-02-02 10:18:42', '2016-02-02 10:18:42'),
(41, 'پرسشنامه اول', 'سوال هفتم پرسشنامه اول', '', '', '', '', 'modir', '2016-02-02 10:18:49', '2016-02-02 10:18:49'),
(42, 'پرسشنامه اول', 'سوال هشتم', '', '', '', '', 'modir', '2016-02-02 10:19:01', '2016-02-02 10:19:01'),
(43, 'پرسشنامه اول', 'سوال نهم', '', '', '', '', 'modir', '2016-02-02 10:19:08', '2016-02-02 10:19:08'),
(45, 'جدید', 'سوال \r\n', '', '', '', '', 'modir', '2016-02-02 10:36:33', '2016-02-02 10:36:33'),
(46, 'پرسشنامه جدید', 'سوال اول پرسشنامه جدید', '', '', '', '', 'modir', '2016-02-02 11:25:19', '2016-02-02 11:25:19'),
(47, 'پرسشنامه جدید', 'سوال دوم پرسشنامه جدید', '', '', '', '', 'modir', '2016-02-02 11:25:23', '2016-02-02 11:25:23'),
(48, 'پرسشنامه جدید', 'سوال سوم پرسشنامه جدید', '', '', '', '', 'modir', '2016-02-02 11:25:28', '2016-02-02 11:25:28'),
(49, 'پرسشنامه جدید', 'سوال چهارم پرسشنامه جدید', '', '', '', '', 'modir', '2016-02-02 11:25:33', '2016-02-02 11:25:33'),
(50, 'پرسشنامه جدید', 'سوال پنجم پرسشنامه جدید', '', '', '', '', 'modir', '2016-02-02 11:25:39', '2016-02-02 11:25:39'),
(51, 'پرسشنامه جدید', 'سوال ششم پرسشنامه جدید', '', '', '', '', 'modir', '2016-02-02 11:25:43', '2016-02-02 11:25:43'),
(52, 'پرسشنامه', 'سوال اول', '', '', '', '', 'modir', '2016-02-03 08:22:07', '2016-02-03 08:22:07'),
(53, 'پرسشنامه', 'سوال دوم', '', '', '', '', 'modir', '2016-02-03 08:22:12', '2016-02-03 08:22:12');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8mb4_persian_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_persian_ci NOT NULL,
  `role` enum('a','u') COLLATE utf8mb4_persian_ci NOT NULL DEFAULT 'u',
  `remember_token` varchar(101) COLLATE utf8mb4_persian_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_persian_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'alireza', '$2a$10$P4Kc6xsrocao3qhGliU/gOZxizfwDwE165jODM3OB7qDtW2lbFG/u', 'alireza@razavi.me', 'u', 'r0w9PyFix9dLapihJyaR2yZ4x5ATGKGIn7683GXSOsGxw7DaYaXYcFXSFXJ3', '0000-00-00 00:00:00', '2016-02-03 08:47:24'),
(2, 'modir', '$2a$10$wCUv5Eo4jQHu6sansx5iHugSlGBEnRIL.rJEkjXrs.WzTcKklwlni', '', 'a', 'lMPMVCbblf6xhoYRJ24jtRBTIqvjGwZJhFBSRPVnS9e3Bx6kOUFTm39jPpNr', '0000-00-00 00:00:00', '2016-02-03 09:52:26');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
