-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2019 at 12:00 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `blocked_friends`
--

CREATE TABLE `blocked_friends` (
  `id` int(11) NOT NULL,
  `blocker_id` int(11) NOT NULL,
  `user_blocked` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `credit_cards`
--

CREATE TABLE `credit_cards` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `package_id` int(11) DEFAULT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `last_4_digit` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `credit_cards`
--

INSERT INTO `credit_cards` (`id`, `name`, `user_id`, `package_id`, `customer_id`, `last_4_digit`) VALUES
(1, '', 2, NULL, 'cus_AVeoxvmxcq9DQj', 4242),
(2, '', 2, NULL, 'cus_AtDTUqBwiM3Hjg', 4242),
(11, '', 4, NULL, 'cus_BmL8ncwgGRinXq', 4242);

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `email` varchar(155) DEFAULT NULL,
  `sender_id` int(11) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0:pending, 1:Accepted, 2: Reject',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT NULL,
  `type` enum('friend','guest') DEFAULT 'friend'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `email`, `sender_id`, `status`, `created_at`, `updated_at`, `type`) VALUES
(1, 4, NULL, 11, 1, '2018-01-19 02:16:11', NULL, 'friend'),
(2, 5, NULL, 4, 1, '2018-01-19 02:16:11', NULL, 'friend');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sender_id` int(11) DEFAULT NULL,
  `plan_id` int(11) DEFAULT NULL COMMENT '0, friends chat',
  `message` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `user_id`, `sender_id`, `plan_id`, `message`, `created_at`) VALUES
(1, 11, 4, 0, 'hi  hajra', NULL),
(2, 5, 4, 0, 'hi addell', NULL),
(3, 4, 5, 0, 'hi naeem', NULL),
(4, 5, 4, 0, 'segew', NULL),
(5, 11, 4, 0, 'hi test', NULL),
(6, 5, 4, 0, 'ji', NULL),
(7, NULL, 4, 0, NULL, NULL),
(8, NULL, 4, 0, NULL, NULL),
(9, NULL, 4, 0, NULL, NULL),
(10, 11, 4, 0, 'yes going', NULL),
(15, 11, 4, 0, 'hi', NULL),
(16, NULL, 4, 0, NULL, NULL),
(17, NULL, 4, 0, NULL, NULL),
(18, 11, 4, 0, 'ji', NULL),
(19, 11, 4, 0, NULL, NULL),
(20, 11, 4, 0, NULL, NULL),
(21, 11, 4, 0, 'efew', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `sender_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `email` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(1) DEFAULT '0',
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `user_id`, `sender_id`, `plan_id`, `email`, `created_at`, `updated_at`, `status`, `type`) VALUES
(2, 11, 4, 1, NULL, '2018-01-19 07:00:05', '2018-01-19 07:00:05', 1, NULL),
(4, 11, 4, 3, NULL, NULL, NULL, 0, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `price` double(20,2) NOT NULL DEFAULT '0.00',
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL,
  `time_period` varchar(100) NOT NULL DEFAULT 'Monthly'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `price`, `name`, `created_at`, `updated_at`, `time_period`) VALUES
(1, 100.00, 'Bronze', '2017-11-09 05:22:30', '2017-12-06 13:06:03', 'Monthly'),
(2, 1000.00, 'Silver', '2017-11-09 05:23:24', '0000-00-00 00:00:00', 'Monthly'),
(3, 10000.00, 'Gold', '2017-11-09 05:23:24', '0000-00-00 00:00:00', 'Monthly'),
(4, 50000.00, 'Platinum', '2017-11-09 05:24:26', '0000-00-00 00:00:00', 'Monthly'),
(5, 100000.00, 'Obsidian', '2017-11-09 05:24:26', '0000-00-00 00:00:00', 'Monthly'),
(7, 4646.00, 'new', '2017-12-06 08:06:29', '0000-00-00 00:00:00', 'Yearly');

-- --------------------------------------------------------

--
-- Table structure for table `partners`
--

CREATE TABLE `partners` (
  `id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `plan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `partner_cities`
--

CREATE TABLE `partner_cities` (
  `id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('muhammadnaeem482@gmail.com', '$2y$10$jRaXelkahu5ZhHj51q3DUOmcj//ZrOW.RqoC8uFcd9PigRDWLmKBm', '2017-12-06 01:28:58');

-- --------------------------------------------------------

--
-- Table structure for table `plans`
--

CREATE TABLE `plans` (
  `id` int(11) NOT NULL,
  `title` varchar(100) NOT NULL DEFAULT 'My Plan',
  `user_id` int(11) NOT NULL,
  `status` tinyint(1) DEFAULT '0' COMMENT '0: Draft   1 : Active   2 : Archived 3 : Completed',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plans`
--

INSERT INTO `plans` (`id`, `title`, `user_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 'My Plan', 4, 1, '2018-01-22 08:08:27', '2018-01-21 15:08:27'),
(2, 'My Plan', 3, 0, '2018-01-18 15:06:39', NULL),
(3, 'My Plan', 4, 0, '2018-01-18 15:10:29', NULL),
(4, 'test', 4, 0, '2018-01-22 07:51:59', '2018-01-22 02:51:59');

-- --------------------------------------------------------

--
-- Table structure for table `plan_dates`
--

CREATE TABLE `plan_dates` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `departure_date` date DEFAULT NULL,
  `arrival_date` date DEFAULT NULL,
  `duration` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan_dates`
--

INSERT INTO `plan_dates` (`id`, `plan_id`, `city_id`, `departure_date`, `arrival_date`, `duration`) VALUES
(8, 1, 4165, NULL, NULL, 23);

-- --------------------------------------------------------

--
-- Table structure for table `plan_how`
--

CREATE TABLE `plan_how` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `type` enum('air','sea','land') DEFAULT 'air',
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan_how`
--

INSERT INTO `plan_how` (`id`, `plan_id`, `city_id`, `type`, `created_at`, `updated_at`) VALUES
(11, 1, 4165, 'air', NULL, NULL),
(12, 1, 385, 'air', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_packages`
--

CREATE TABLE `plan_packages` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `name` varchar(55) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `plan_packages`
--

INSERT INTO `plan_packages` (`id`, `plan_id`, `city_id`, `name`) VALUES
(31, 1, 385, 'Hotel Dietz'),
(32, 1, 385, 'Ferienwohnungen Prinz'),
(33, 1, 385, 'Bärbel Kaufmann'),
(34, 1, 385, 'Adler'),
(35, 1, 385, 'Naturfreundehaus am Hahnenschnabel');

-- --------------------------------------------------------

--
-- Table structure for table `plan_where`
--

CREATE TABLE `plan_where` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `city_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `udpated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `plan_where`
--

INSERT INTO `plan_where` (`id`, `plan_id`, `city_id`, `created_at`, `udpated_at`) VALUES
(13, 2, 628, NULL, NULL),
(14, 2, 607, NULL, NULL),
(15, 2, 4165, NULL, NULL),
(16, 3, 628, NULL, NULL),
(17, 3, 4165, NULL, NULL),
(18, 3, 607, NULL, NULL),
(23, 4, 4165, NULL, NULL),
(24, 4, 385, NULL, NULL),
(31, 1, 385, NULL, NULL),
(32, 1, 607, NULL, NULL),
(33, 1, 4165, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `plan_who`
--

CREATE TABLE `plan_who` (
  `id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `udpated_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `privacy_table`
--

CREATE TABLE `privacy_table` (
  `id` int(11) NOT NULL,
  `question` varchar(255) DEFAULT NULL,
  `answers` varchar(55) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `privacy_table`
--

INSERT INTO `privacy_table` (`id`, `question`, `answers`, `created_at`, `updated_at`) VALUES
(1, 'Who can see my profile?', NULL, '2017-10-23 07:32:15', '0000-00-00 00:00:00'),
(2, 'Who can invite me to travel?', NULL, '2017-10-23 07:34:48', '0000-00-00 00:00:00'),
(3, 'Who can find me using my email address?', NULL, '2017-10-23 07:34:48', '0000-00-00 00:00:00'),
(4, 'Who can see my friends?', NULL, '2017-10-23 07:35:06', '0000-00-00 00:00:00'),
(5, 'Who can see my traveling schedule?', NULL, '2017-10-23 07:35:06', '0000-00-00 00:00:00'),
(6, 'Who can see my visited cities?', NULL, '2017-10-23 07:35:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `plan_id` int(11) NOT NULL,
  `rating` float(7,1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`id`, `user_id`, `sender_id`, `plan_id`, `rating`, `created_at`) VALUES
(1, 4, 11, 1, 4.5, '2018-01-19 00:10:21');

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `subscribed_at` datetime NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_role` int(1) NOT NULL DEFAULT '0',
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `api_token` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `package_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `points` double NOT NULL DEFAULT '0',
  `referrer` int(11) NOT NULL DEFAULT '0',
  `status` int(1) NOT NULL DEFAULT '0',
  `privacy` longtext COLLATE utf8mb4_unicode_ci,
  `hint` int(11) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `user_role`, `phone`, `email`, `password`, `api_token`, `remember_token`, `package_id`, `created_at`, `updated_at`, `points`, `referrer`, `status`, `privacy`, `hint`, `id`) VALUES
('Muhammad Naeem', 1, '03478407800', 'muhammadnaeem482@gmail.com', '$2y$10$srJPrJeimpFociJGNo9XMuTZSbQOPDCy2NenU/.Ty/9cgx0A9RuUu', '65TH4LfEyCjoKYU1507107844yC9pIWNNlpePOjy', 'QmDXJDf158uQjR4Q8YyMWuTa7G4AUWsYE3O8syWKIgxsY6EF2kzs7KVEr0NL', 2, '2017-10-03 23:04:04', '2018-05-03 00:49:43', 0, 0, 1, '{\"profile\":{\"Everybody\":true,\"Friends\":true,\"Nobody\":true},\"invite\":{\"Everybody\":true,\"Friends\":false,\"Nobody\":false},\"find\":{\"Everybody\":true,\"Friends\":true,\"Nobody\":true},\"friends\":{\"Everybody\":true,\"Friends\":false,\"Nobody\":true},\"tvs\":{\"Everybody\":true,\"Friends\":true,\"Nobody\":true},\"vc\":{\"Everybody\":true,\"Friends\":true,\"Nobody\":true}}', 29, 1),
('adeel', 0, '436437347457', 'adeel@gmail.com', '$2y$10$ixPsJnhRvkJHLH07j2Wk2O1Vlp2CQASs1DhhWwvXr0BDxlFojWPui', '17l0gMm873iuwOz150720531716vrQT8idME9m3p', NULL, 0, '2017-10-05 02:08:37', '2017-12-06 03:31:02', 0, 0, 1, NULL, 0, 2),
('naeem', 0, '6346346346346', 'muhammadnaeem@gmail.com', '$2y$10$x9eaA9YUQ2r3z0hOD6txQu8T2DZNWw3w4aGu8RexOo4FMXvunC.tG', 'RwKbC2NqM1yCyhn1508236521BxkuigNLuPyXc1B', NULL, 0, '2017-10-17 00:35:21', '2017-12-06 03:30:57', 0, 0, 0, NULL, 0, 3),
('naeem', 0, '23453263463464', 'naeem@gmail.com', '$2y$10$AVR5GAaGT6WDvd3jdeI5luWSV2K0ApQeFasDQTLM7hy3CKr1KCiJi', '5TfNWJj57L1sXqT1508236561q1CKzpLF5DgH1cH', NULL, 0, '2017-10-17 00:36:01', '2017-12-06 03:30:05', 0, 0, 1, NULL, 0, 4),
('Test User', 0, NULL, 'naeem.41811@yahoo.com', '$2y$10$srJPrJeimpFociJGNo9XMuTZSbQOPDCy2NenU/.Ty/9cgx0A9RuUu', 'jrwabFfXEGMCnRS1510224172CI04HQFkv46DFtg', NULL, 1, '2017-11-09 00:42:52', '2018-01-19 03:05:34', 0, 0, 1, NULL, 2, 5);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blocked_friends`
--
ALTER TABLE `blocked_friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `credit_cards`
--
ALTER TABLE `credit_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partners`
--
ALTER TABLE `partners`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `partner_cities`
--
ALTER TABLE `partner_cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `plans`
--
ALTER TABLE `plans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_dates`
--
ALTER TABLE `plan_dates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_how`
--
ALTER TABLE `plan_how`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_packages`
--
ALTER TABLE `plan_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_where`
--
ALTER TABLE `plan_where`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `plan_who`
--
ALTER TABLE `plan_who`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `plans`
--
ALTER TABLE `plans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `plan_dates`
--
ALTER TABLE `plan_dates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `plan_how`
--
ALTER TABLE `plan_how`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `plan_packages`
--
ALTER TABLE `plan_packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `plan_where`
--
ALTER TABLE `plan_where`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `plan_who`
--
ALTER TABLE `plan_who`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
