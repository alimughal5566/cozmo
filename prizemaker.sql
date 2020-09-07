-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 26, 2019 at 08:22 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prizemaker`
--

-- --------------------------------------------------------

--
-- Table structure for table `aboutuses`
--

CREATE TABLE `aboutuses` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `slug` varchar(255) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `aboutuses`
--

INSERT INTO `aboutuses` (`id`, `title`, `description`, `status`, `slug`, `user_id`, `created_at`, `updated_at`) VALUES
(5, 'its about title', 'all about descriptions.', 1, 'slugpage', NULL, '2019-04-05 06:05:16', '2019-04-05 15:37:56');

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `label` varchar(255) NOT NULL,
  `attribute` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `package_id`, `label`, `attribute`, `created_at`, `updated_at`) VALUES
(1, 1, 'Color', 'Black', '2019-04-02 17:29:53', '2019-04-02 17:29:53'),
(2, 1, 'Modal', '2019', '2019-04-02 17:30:08', '2019-04-02 17:30:08'),
(3, 1, 'Tyres', '4', '2019-04-02 17:30:17', '2019-04-02 17:30:17'),
(4, 1, 'Seats', '4', '2019-04-02 17:34:04', '2019-04-02 17:34:04'),
(5, 2, 'Color', 'White', '2019-04-02 18:31:35', '2019-04-02 18:31:35'),
(6, 2, 'Color', 'White', '2019-04-02 18:31:35', '2019-04-02 18:31:35'),
(7, 3, 'Color', 'White', '2019-04-02 18:33:24', '2019-04-02 18:33:24'),
(8, 3, 'Color', 'White', '2019-04-02 18:33:24', '2019-04-02 18:33:24'),
(9, 4, 'Color', 'blue', '2019-04-02 18:35:39', '2019-04-02 18:35:39'),
(10, 5, 'Color', 'red', '2019-04-02 18:37:30', '2019-04-02 18:37:30'),
(11, 6, 'Color', 'Black', '2019-04-02 18:39:00', '2019-04-02 18:39:00'),
(12, 7, 'Color', 'White', '2019-04-02 18:40:26', '2019-04-02 18:40:26'),
(13, 8, 'Color', 'Black', '2019-04-02 18:41:50', '2019-04-02 18:41:50'),
(14, 9, 'Color', 'Black', '2019-04-02 18:43:01', '2019-04-02 18:43:01'),
(15, 10, 'Color', 'Black', '2019-04-02 18:48:31', '2019-04-02 18:48:31');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `description` longtext NOT NULL,
  `image` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(2, 'History about ferrari.', 'the company was founded in 1947 and is headquartered in Munich. ferrari produces vehicles in Germany,India,UK and the US. In 2015, BMW was the world\'s twelfth largest producer of motor vehicles.', '1554466967.jpg', '2019-04-05 04:49:51', '2019-04-05 07:25:00'),
(3, 'History about Audi.', 'the company was founded in 1970 and is headquartered in Munich. It produces vehicles in Germany,India,UK and the US. In 2015, BMW was the world\'s twelfth largest producer of motor vehicles.', '1554466953.png', '2019-04-05 04:49:51', '2019-04-05 07:23:56'),
(4, 'History about Racer.', 'the company was founded in 1916 and is headquartered in Munich. It produces vehicles in Germany,India,UK and the US. In 2015, BMW was the world\'s twelfth largest producer of motor vehicles.', '1554466941.jpg', '2019-04-05 04:49:51', '2019-04-05 07:23:38'),
(13, 'History about BMW.', '<p>The company was founded in 1916 and is headquartered in Munich. BMW produces vehicles in Germany,India,UK and the US. In 2015, BMW was the world\'s twelfth largest producer of motor vehicles.</p><p>\r\n								</p>', '1554459191.jpg', '2019-04-05 04:49:51', '2019-05-03 06:36:32');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `ticket_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `competitions`
--

CREATE TABLE `competitions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `date_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` double NOT NULL,
  `discount` int(11) NOT NULL,
  `paid_price` double NOT NULL,
  `winner` tinyint(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Collapsible', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod.', '2019-04-05 01:24:46', '2019-04-05 07:27:40'),
(2, 'Collapsible', 'Anim Pariatur Cliche Reprehenderit, Enim Eiusmod High Life Accusamus Terry Richardson Ad Squid. 3 Wolf Moon Officia Aute, Non Cupidatat Skateboard Dolor Brunch. Food Truck Quinoa Nesciunt Laborum Eiusmod. Brunch 3 Wolf Moon Tempor, Sunt Aliqua Put A Bird On It Squid Single-Origin Coffee Nulla Assumenda Shoreditch Et. Nihil Anim Keffiyeh Helvetica, Craft Beer Labore Wes Anderson Cred Nesciunt Sapiente Ea Proident. Ad Vegan Excepteur Butcher Vice Lomo. Leggings Occaecat Craft Beer Farm-To-Table, Raw Denim Aesthetic Synth Nesciunt You Probably Haven\'t Heard Of Them Accusamus Labore Sustainable VHS number 2.&nbsp;Ad Vegan Excepteur Butcher Vice Lomo. Leggings Occaecat Craft Beer Farm-To-Table, Raw Denim Aesthetic Synth Nesciunt You Probably Haven\'t Heard Of Them Accusamus Labore Sustainable VHS number 2.', '2019-04-05 07:38:56', '2019-04-05 07:27:28'),
(3, 'Collapsible Group.', 'Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin.', '2019-04-05 01:24:46', '2019-04-05 07:27:02'),
(4, 'Collapsible Group Item number', 'Anim Pariatur Cliche Reprehenderit, Enim Eiusmod High Life Accusamus Terry Richardson Ad Squid. 3 Wolf Moon Officia Aute, Non Cupidatat Skateboard Dolor Brunch. Food Truck Quinoa Nesciunt Laborum Eiusmod. Brunch 3 Wolf Moon Tempor, Sunt Aliqua Put A Bird On It Squid Single-Origin Coffee Nulla Assumenda Shoreditch Et. Nihil Anim Keffiyeh Helvetica, Craft Beer Labore Wes Anderson Cred Nesciunt Sapiente Ea Proident. Ad Vegan Excepteur Butcher Vice Lomo. Leggings Occaecat Craft Beer Farm-To-Table, Raw Denim Aesthetic Synth Nesciunt You Probably Haven\'t Heard Of Them Accusamus Labore Sustainable VHS number 2.', '2019-04-05 07:38:56', '2019-04-05 07:54:01');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `uniqid` varchar(255) DEFAULT NULL,
  `price` double(20,2) NOT NULL DEFAULT '0.00',
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `max_tickets` int(11) NOT NULL DEFAULT '0',
  `start_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `description` longtext,
  `featured` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `uniqid`, `price`, `name`, `created_at`, `updated_at`, `max_tickets`, `start_date`, `description`, `featured`) VALUES
(1, '5ca39c111a526', 456.00, 'Car', '2019-05-04 06:12:28', '2019-05-04 01:12:28', 500, '2019-04-01 19:00:00', '<span style=\"color: rgb(162, 162, 162); font-family: Arial, Helvetica, sans-serif; font-size: 16px;\">Well here it is – the all-new 8th Generation Porsche 911. No really, we promise it’s the new one! As is always the case with Porsche’s 911, it’s a case of evolution rather than revolution so we have a car that to the casual observer looks almost identical to the previous 911, but is comprehensively improved in every area. As seems to be the trend, the new 911 grows – the wheelbase in longer and crucially all 911’s now have the wide body previously reserved for the 4WD models. But power is also up across the board, with this Carrera S model’s 3.0 litre turbocharged flat-six now producing 444bhp and 530Nm – that’s enough for 0-62mph in just 3.7 seconds or 3.5 seconds if you choose the Sport Chrono option</span>', 1),
(2, '5ca3aa86ec902', 56.00, '2019 range rover sport range', '2019-05-04 06:13:59', '2019-05-04 01:13:59', 560, '2019-04-16 19:00:00', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>', 1),
(3, '5ca3aaf43b6b8', 56.00, '2019 range rover sport range', '2019-04-02 13:33:24', '2019-04-02 13:33:24', 56, '2019-04-08 19:00:00', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>', 1),
(4, '5ca3ab7b939a2', 56.00, '2019 range rover sport range', '2019-04-02 13:35:39', '2019-04-02 13:35:39', 5, '2019-04-01 19:00:00', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>', 1),
(5, '5ca3abea415c1', 56.00, '2019 range rover sport range', '2019-04-02 18:37:33', '2019-04-02 13:37:33', 4, '2019-04-09 19:00:00', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>', 1),
(6, '5ca3ac445bce4', 45.00, '2019 range rover sport range', '2019-04-02 13:39:00', '2019-04-02 13:39:00', 5, '2019-04-01 19:00:00', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>', 1),
(7, '5ca3ac9a07fc3', 45.00, '2019 range rover sport range', '2019-04-04 18:42:34', '2019-04-04 13:42:34', 100, '2019-04-08 19:00:00', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>', 0),
(8, '5ca3acee93989', 4.00, '2019 range rover sport range', '2019-04-02 13:41:50', '2019-04-02 13:41:50', 4, '2019-04-16 19:00:00', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>', 0),
(9, '5ca3ad35c4f79', 4.00, '2019 range rover sport range', '2019-04-02 13:43:01', '2019-04-02 13:43:01', 4, '2019-04-08 19:00:00', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>', 0),
(10, '5ca3ae7f2904a', 5.00, '2019 range rover sport range', '2019-04-02 13:48:31', '2019-04-02 13:48:31', 5, '2019-04-08 19:00:00', '<span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; text-align: justify;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</span>', 0),
(11, '5ccd2de0b3088', 100.00, 'test', '2019-05-04 01:14:56', '2019-05-04 01:14:56', 500, '2019-05-20 19:00:00', NULL, 1),
(12, '5d35a35549d93', 45.00, 'Test', '2019-07-22 06:51:49', '2019-07-22 06:51:49', 567, '2019-07-23 19:00:00', 'sdfdsf', 0);

-- --------------------------------------------------------

--
-- Table structure for table `package_images`
--

CREATE TABLE `package_images` (
  `package_id` int(11) NOT NULL,
  `name` longtext,
  `id` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `package_images`
--

INSERT INTO `package_images` (`package_id`, `name`, `id`) VALUES
(1, '5ca39c6cca47d.jpg', 1),
(1, '5ca39c6ccaf8d.png', 2),
(1, '5ca39c6ccb80f.png', 3),
(1, '5ca39c6ccbf33.jpg', 4),
(1, '5ca39c6cccdb2.jpg', 5),
(1, '5ca39c6ccdae7.jpg', 6),
(1, '5ca39c6ccdfd1.jpg', 7),
(1, '5ca39c6cce465.jpg', 8),
(1, '5ca39c6ccea82.png', 9),
(1, '5ca39c6ccee26.jpg', 10),
(2, '5ca3aa9a752d3.jpg', 11),
(3, '5ca3ab0b6c872.png', 12),
(3, '5ca3ab4935d42.png', 13),
(3, '5ca3ab49364e1.png', 14),
(3, '5ca3ab4936908.jpg', 15),
(3, '5ca3ab4936c77.jpg', 16),
(3, '5ca3ab4937475.jpg', 17),
(3, '5ca3ab4937f20.jpg', 18),
(3, '5ca3ab4938303.jpg', 19),
(3, '5ca3ab49386cf.jpg', 20),
(3, '5ca3ab4938c4b.png', 21),
(4, '5ca3ab93431ef.png', 22),
(4, '5ca3abb25e9f4.jpg', 23),
(4, '5ca3abb25efee.jpg', 24),
(4, '5ca3abb25fa03.jpg', 25),
(5, '5ca3ac04c8d8e.png', 26),
(5, '5ca3ac26d7a1f.jpg', 27),
(5, '5ca3ac26d819f.png', 28),
(6, '5ca3ac52168e5.png', 29),
(6, '5ca3ac7fbacfa.jpg', 30),
(6, '5ca3ac7fbb2af.jpg', 31),
(6, '5ca3ac7fbbcef.jpg', 32),
(7, '5ca3aca8aa0ac.png', 33),
(8, '5ca3ad19a8e57.png', 34),
(9, '5ca3ad3d91843.png', 35),
(10, '5ca3ae95b599a.png', 36),
(11, '5ccd2df0a4e7a.jpg', 37),
(12, '5d35a3801c6cf.png', 38),
(12, '5d35a3801cf4d.png', 39),
(12, '5d35a3801d41d.png', 40),
(12, '5d35a3801d882.jpeg', 41);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `card_number` varchar(16) NOT NULL,
  `ticket_id` varchar(255) NOT NULL,
  `customer_id` varchar(100) DEFAULT NULL,
  `price` double(16,8) NOT NULL DEFAULT '0.00000000',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `related_products`
--

CREATE TABLE `related_products` (
  `id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `related_product_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `related_products`
--

INSERT INTO `related_products` (`id`, `package_id`, `related_product_id`, `created_at`, `updated_at`) VALUES
(4, 3, 8, '2019-04-05 08:50:10', '2019-04-05 08:50:10'),
(5, 3, 9, '2019-04-05 08:50:10', '2019-04-05 08:50:10'),
(6, 5, 7, '2019-04-05 09:19:04', '2019-04-05 09:19:04'),
(20, 11, 2, '2019-07-18 06:59:37', '2019-07-18 06:59:37'),
(21, 11, 8, '2019-07-18 06:59:37', '2019-07-18 06:59:37'),
(22, 11, 10, '2019-07-18 06:59:37', '2019-07-18 06:59:37');

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `code` varchar(100) NOT NULL,
  `date_purchased` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `paid_price` bigint(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `purchase_type` varchar(30) NOT NULL COMMENT '1 bonus, 0 purchased',
  `status` int(1) NOT NULL COMMENT '0 available, 1 sold , 2 cart,3 payment pending',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `user_id`, `product_id`, `code`, `date_purchased`, `paid_price`, `discount`, `purchase_type`, `status`, `created_at`, `updated_at`) VALUES
(1, 0, 1, '1', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(2, 0, 1, '2', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(3, 0, 1, '3', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(4, 0, 1, '4', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(5, 0, 1, '5', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(6, 0, 1, '6', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(7, 0, 1, '7', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(8, 0, 1, '8', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(9, 0, 1, '9', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(10, 0, 1, '10', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(11, 0, 1, '11', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(12, 0, 1, '12', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(13, 0, 1, '13', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(14, 0, 1, '14', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(15, 0, 1, '15', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(16, 0, 1, '16', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(17, 0, 1, '17', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(18, 0, 1, '18', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(19, 0, 1, '19', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(20, 0, 1, '20', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(21, 0, 1, '21', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(22, 0, 1, '22', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(23, 0, 1, '23', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(24, 0, 1, '24', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(25, 0, 1, '25', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(26, 0, 1, '26', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(27, 0, 1, '27', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(28, 0, 1, '28', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(29, 0, 1, '29', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(30, 0, 1, '30', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(31, 0, 1, '31', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(32, 0, 1, '32', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(33, 0, 1, '33', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(34, 0, 1, '34', '2019-04-02 12:29:53', 456, 0, '0', 0, '2019-04-02 12:29:53', '2019-07-24 07:27:11'),
(35, 0, 2, '1', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(36, 0, 2, '2', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(37, 0, 2, '3', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(38, 0, 2, '4', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(39, 0, 2, '5', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(40, 0, 2, '6', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-18 07:49:20'),
(41, 0, 2, '7', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(42, 0, 2, '8', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-18 07:49:20'),
(43, 0, 2, '9', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(44, 0, 2, '10', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(45, 0, 2, '11', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(46, 0, 2, '12', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(47, 0, 2, '13', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(48, 0, 2, '14', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(49, 0, 2, '15', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(50, 0, 2, '16', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(51, 0, 2, '17', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(52, 0, 2, '18', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(53, 0, 2, '19', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(54, 0, 2, '20', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(55, 0, 2, '21', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(56, 0, 2, '22', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(57, 0, 2, '23', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(58, 0, 2, '24', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(59, 0, 2, '25', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(60, 0, 2, '26', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(61, 0, 2, '27', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(62, 0, 2, '28', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(63, 0, 2, '29', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(64, 0, 2, '30', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(65, 0, 2, '31', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(66, 0, 2, '32', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(67, 0, 2, '33', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(68, 0, 2, '34', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(69, 0, 2, '35', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(70, 0, 2, '36', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(71, 0, 2, '37', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(72, 0, 2, '38', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(73, 0, 2, '39', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(74, 0, 2, '40', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(75, 0, 2, '41', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(76, 0, 2, '42', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-04-02 13:31:34'),
(77, 0, 2, '43', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(78, 0, 2, '44', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:34', '2019-07-24 07:27:11'),
(79, 0, 2, '45', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:35', '2019-04-02 13:31:35'),
(80, 0, 2, '46', '2019-04-02 13:31:34', 56, 0, '0', 0, '2019-04-02 13:31:35', '2019-04-02 13:31:35'),
(81, 0, 2, '47', '2019-04-02 13:31:35', 56, 0, '0', 0, '2019-04-02 13:31:35', '2019-04-02 13:31:35'),
(82, 0, 2, '48', '2019-04-02 13:31:35', 56, 0, '0', 0, '2019-04-02 13:31:35', '2019-04-02 13:31:35'),
(83, 0, 2, '49', '2019-04-02 13:31:35', 56, 0, '0', 0, '2019-04-02 13:31:35', '2019-04-02 13:31:35'),
(84, 0, 2, '50', '2019-04-02 13:31:35', 56, 0, '0', 0, '2019-04-02 13:31:35', '2019-04-02 13:31:35'),
(85, 0, 2, '51', '2019-04-02 13:31:35', 56, 0, '0', 0, '2019-04-02 13:31:35', '2019-04-02 13:31:35'),
(86, 0, 2, '52', '2019-04-02 13:31:35', 56, 0, '0', 0, '2019-04-02 13:31:35', '2019-04-02 13:31:35'),
(87, 0, 2, '53', '2019-04-02 13:31:35', 56, 0, '0', 0, '2019-04-02 13:31:35', '2019-04-02 13:31:35'),
(88, 0, 2, '54', '2019-04-02 13:31:35', 56, 0, '0', 0, '2019-04-02 13:31:35', '2019-04-02 13:31:35'),
(89, 0, 2, '55', '2019-04-02 13:31:35', 56, 0, '0', 0, '2019-04-02 13:31:35', '2019-04-02 13:31:35'),
(90, 0, 2, '56', '2019-04-02 13:31:35', 56, 0, '0', 0, '2019-04-02 13:31:35', '2019-05-04 01:14:26'),
(91, 0, 3, '1', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(92, 0, 3, '2', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(93, 0, 3, '3', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(94, 0, 3, '4', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-17 06:22:56'),
(95, 0, 3, '5', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-17 05:05:14'),
(96, 0, 3, '6', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(97, 0, 3, '7', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-17 04:36:36'),
(98, 0, 3, '8', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(99, 0, 3, '9', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-17 04:36:37'),
(100, 0, 3, '10', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-05 09:18:11'),
(101, 0, 3, '11', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-05 09:18:12'),
(102, 0, 3, '12', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-17 06:22:54'),
(103, 0, 3, '13', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(104, 0, 3, '14', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(105, 0, 3, '15', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(106, 0, 3, '16', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(107, 0, 3, '17', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(108, 0, 3, '18', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(109, 0, 3, '19', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(110, 0, 3, '20', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(111, 0, 3, '21', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-17 06:22:55'),
(112, 0, 3, '22', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-17 06:23:12'),
(113, 0, 3, '23', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-17 06:23:07'),
(114, 0, 3, '24', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-17 06:23:08'),
(115, 0, 3, '25', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(116, 0, 3, '26', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(117, 0, 3, '27', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-17 06:22:02'),
(118, 0, 3, '28', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(119, 0, 3, '29', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-17 06:22:57'),
(120, 0, 3, '30', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(121, 0, 3, '31', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(122, 0, 3, '32', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(123, 0, 3, '33', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(124, 0, 3, '34', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(125, 0, 3, '35', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(126, 0, 3, '36', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(127, 0, 3, '37', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(128, 0, 3, '38', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(129, 0, 3, '39', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(130, 0, 3, '40', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(131, 0, 3, '41', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-17 06:22:54'),
(132, 0, 3, '42', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(133, 0, 3, '43', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(134, 0, 3, '44', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(135, 0, 3, '45', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(136, 0, 3, '46', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(137, 0, 3, '47', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-05 08:38:26'),
(138, 0, 3, '48', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(139, 0, 3, '49', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(140, 0, 3, '50', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(141, 0, 3, '51', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(142, 0, 3, '52', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(143, 0, 3, '53', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-07-24 07:27:11'),
(144, 0, 3, '54', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(145, 0, 3, '55', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(146, 0, 3, '56', '2019-04-02 13:33:24', 56, 0, '0', 0, '2019-04-02 13:33:24', '2019-04-02 13:33:24'),
(147, 0, 4, '1', '2019-04-02 13:35:39', 56, 0, '0', 0, '2019-04-02 13:35:39', '2019-07-24 07:27:11'),
(148, 0, 4, '2', '2019-04-02 13:35:39', 56, 0, '0', 0, '2019-04-02 13:35:39', '2019-07-24 07:27:11'),
(149, 0, 4, '3', '2019-04-02 13:35:39', 56, 0, '0', 0, '2019-04-02 13:35:39', '2019-07-24 07:27:11'),
(150, 0, 4, '4', '2019-04-02 13:35:39', 56, 0, '0', 0, '2019-04-02 13:35:39', '2019-07-24 07:27:11'),
(151, 0, 4, '5', '2019-04-02 13:35:39', 56, 0, '0', 0, '2019-04-02 13:35:39', '2019-07-24 07:27:11'),
(152, 0, 5, '1', '2019-04-02 13:37:30', 56, 0, '0', 0, '2019-04-02 13:37:30', '2019-07-24 07:27:11'),
(153, 0, 5, '2', '2019-04-02 13:37:30', 56, 0, '0', 0, '2019-04-02 13:37:30', '2019-07-24 07:27:11'),
(154, 0, 5, '3', '2019-04-02 13:37:30', 56, 0, '0', 0, '2019-04-02 13:37:30', '2019-07-24 07:27:11'),
(155, 0, 5, '4', '2019-04-02 13:37:30', 56, 0, '0', 0, '2019-04-02 13:37:30', '2019-07-24 07:27:11'),
(156, 0, 6, '1', '2019-04-02 13:39:00', 45, 0, '0', 0, '2019-04-02 13:39:00', '2019-07-24 07:27:11'),
(157, 0, 6, '2', '2019-04-02 13:39:00', 45, 0, '0', 0, '2019-04-02 13:39:00', '2019-07-24 07:27:11'),
(158, 0, 6, '3', '2019-04-02 13:39:00', 45, 0, '0', 0, '2019-04-02 13:39:00', '2019-07-24 07:27:11'),
(159, 0, 6, '4', '2019-04-02 13:39:00', 45, 0, '0', 0, '2019-04-02 13:39:00', '2019-07-24 07:27:11'),
(160, 0, 6, '5', '2019-04-02 13:39:00', 45, 0, '0', 0, '2019-04-02 13:39:00', '2019-07-24 07:27:11'),
(161, 0, 7, '1', '2019-04-02 13:40:26', 45, 0, '0', 0, '2019-04-02 13:40:26', '2019-04-19 08:18:34'),
(162, 0, 7, '2', '2019-04-02 13:40:26', 45, 0, '0', 0, '2019-04-02 13:40:26', '2019-07-24 07:27:11'),
(163, 0, 7, '3', '2019-04-02 13:40:26', 45, 0, '0', 0, '2019-04-02 13:40:26', '2019-04-19 08:18:35'),
(164, 0, 8, '1', '2019-04-02 13:41:50', 4, 0, '0', 0, '2019-04-02 13:41:50', '2019-07-24 07:27:11'),
(165, 0, 8, '2', '2019-04-02 13:41:50', 4, 0, '0', 0, '2019-04-02 13:41:50', '2019-07-24 07:27:11'),
(166, 0, 8, '3', '2019-04-02 13:41:50', 4, 0, '0', 0, '2019-04-02 13:41:50', '2019-07-24 07:27:11'),
(167, 0, 8, '4', '2019-04-02 13:41:50', 4, 0, '0', 0, '2019-04-02 13:41:50', '2019-07-24 07:27:11'),
(168, 0, 9, '1', '2019-04-02 13:43:01', 4, 0, '0', 0, '2019-04-02 13:43:01', '2019-07-17 04:53:34'),
(169, 0, 9, '2', '2019-04-02 13:43:01', 4, 0, '0', 0, '2019-04-02 13:43:01', '2019-07-17 04:53:35'),
(170, 0, 9, '3', '2019-04-02 13:43:01', 4, 0, '0', 0, '2019-04-02 13:43:01', '2019-07-17 04:55:10'),
(171, 0, 9, '4', '2019-04-02 13:43:01', 4, 0, '0', 0, '2019-04-02 13:43:01', '2019-07-24 07:27:11'),
(172, 0, 10, '1', '2019-04-02 13:48:31', 5, 0, '0', 0, '2019-04-02 13:48:31', '2019-04-02 13:48:31'),
(173, 0, 10, '2', '2019-04-02 13:48:31', 5, 0, '0', 0, '2019-04-02 13:48:31', '2019-04-05 08:38:28'),
(174, 0, 10, '3', '2019-04-02 13:48:31', 5, 0, '0', 0, '2019-04-02 13:48:31', '2019-04-05 08:38:28'),
(175, 0, 10, '4', '2019-04-02 13:48:31', 5, 0, '0', 0, '2019-04-02 13:48:31', '2019-07-24 07:27:11'),
(176, 0, 10, '5', '2019-04-02 13:48:31', 5, 0, '0', 0, '2019-04-02 13:48:31', '2019-07-24 07:27:11'),
(177, 0, 11, '1', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(178, 0, 11, '2', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-20 07:49:09'),
(179, 0, 11, '3', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(180, 0, 11, '4', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(181, 0, 11, '5', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(182, 0, 11, '6', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-20 07:49:08'),
(183, 0, 11, '7', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-20 07:49:07'),
(184, 0, 11, '8', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(185, 0, 11, '9', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(186, 0, 11, '10', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(187, 0, 11, '11', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 15:23:06'),
(188, 0, 11, '12', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 15:23:06'),
(189, 0, 11, '13', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(190, 0, 11, '14', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(191, 0, 11, '15', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 15:23:07'),
(192, 0, 11, '16', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 15:23:13'),
(193, 0, 11, '17', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(194, 0, 11, '18', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(195, 0, 11, '19', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(196, 0, 11, '20', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(197, 0, 11, '21', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(198, 0, 11, '22', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(199, 0, 11, '23', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(200, 0, 11, '24', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(201, 0, 11, '25', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(202, 0, 11, '26', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(203, 0, 11, '27', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(204, 0, 11, '28', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(205, 0, 11, '29', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(206, 0, 11, '30', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(207, 0, 11, '31', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-22 00:49:41'),
(208, 0, 11, '32', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-22 00:49:45'),
(209, 0, 11, '33', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(210, 0, 11, '34', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(211, 0, 11, '35', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(212, 0, 11, '36', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(213, 0, 11, '37', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-22 00:49:42'),
(214, 0, 11, '38', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-22 00:49:44'),
(215, 0, 11, '39', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 07:00:21'),
(216, 0, 11, '40', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(217, 0, 11, '41', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-22 00:49:46'),
(218, 0, 11, '42', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-22 00:49:45'),
(219, 0, 11, '43', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(220, 0, 11, '44', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(221, 0, 11, '45', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(222, 0, 11, '46', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(223, 0, 11, '47', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(224, 0, 11, '48', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(225, 0, 11, '49', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(226, 0, 11, '50', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(227, 0, 11, '51', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(228, 0, 11, '52', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 07:49:29'),
(229, 0, 11, '53', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(230, 0, 11, '54', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 07:00:24'),
(231, 0, 11, '55', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(232, 0, 11, '56', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 07:00:22'),
(233, 0, 11, '57', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(234, 0, 11, '58', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(235, 0, 11, '59', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 01:58:10'),
(236, 0, 11, '60', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(237, 0, 11, '61', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(238, 0, 11, '62', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(239, 0, 11, '63', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(240, 0, 11, '64', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(241, 0, 11, '65', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(242, 0, 11, '66', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(243, 0, 11, '67', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(244, 0, 11, '68', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(245, 0, 11, '69', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(246, 0, 11, '70', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(247, 0, 11, '71', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(248, 0, 11, '72', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(249, 0, 11, '73', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(250, 0, 11, '74', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(251, 0, 11, '75', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 07:49:25'),
(252, 0, 11, '76', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 01:24:16'),
(253, 0, 11, '77', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(254, 0, 11, '78', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 01:58:14'),
(255, 0, 11, '79', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(256, 0, 11, '80', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(257, 0, 11, '81', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(258, 0, 11, '82', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(259, 0, 11, '83', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(260, 0, 11, '84', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(261, 0, 11, '85', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(262, 0, 11, '86', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(263, 0, 11, '87', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 07:16:05'),
(264, 0, 11, '88', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(265, 0, 11, '89', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(266, 0, 11, '90', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 07:00:23'),
(267, 0, 11, '91', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(268, 0, 11, '92', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(269, 0, 11, '93', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(270, 0, 11, '94', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(271, 0, 11, '95', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(272, 0, 11, '96', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(273, 0, 11, '97', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 01:58:15'),
(274, 0, 11, '98', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(275, 0, 11, '99', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 01:58:15'),
(276, 0, 11, '100', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(277, 0, 11, '101', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(278, 0, 11, '102', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(279, 0, 11, '103', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(280, 0, 11, '104', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(281, 0, 11, '105', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(282, 0, 11, '106', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-24 07:27:11'),
(283, 0, 11, '107', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(284, 0, 11, '108', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(285, 0, 11, '109', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 10:45:02'),
(286, 0, 11, '110', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(287, 0, 11, '111', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 07:00:22'),
(288, 0, 11, '112', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(289, 0, 11, '113', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 15:23:08'),
(290, 0, 11, '114', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(291, 0, 11, '115', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(292, 0, 11, '116', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 15:23:11'),
(293, 0, 11, '117', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 15:23:10'),
(294, 0, 11, '118', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(295, 0, 11, '119', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(296, 0, 11, '120', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(297, 0, 11, '121', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-07-18 10:45:38'),
(298, 0, 11, '122', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(299, 0, 11, '123', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(300, 0, 11, '124', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(301, 0, 11, '125', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(302, 0, 11, '126', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(303, 0, 11, '127', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(304, 0, 11, '128', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(305, 0, 11, '129', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(306, 0, 11, '130', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(307, 0, 11, '131', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(308, 0, 11, '132', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(309, 0, 11, '133', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(310, 0, 11, '134', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(311, 0, 11, '135', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(312, 0, 11, '136', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(313, 0, 11, '137', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(314, 0, 11, '138', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(315, 0, 11, '139', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(316, 0, 11, '140', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(317, 0, 11, '141', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(318, 0, 11, '142', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(319, 0, 11, '143', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(320, 0, 11, '144', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(321, 0, 11, '145', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(322, 0, 11, '146', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(323, 0, 11, '147', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(324, 0, 11, '148', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(325, 0, 11, '149', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(326, 0, 11, '150', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(327, 0, 11, '151', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(328, 0, 11, '152', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(329, 0, 11, '153', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(330, 0, 11, '154', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(331, 0, 11, '155', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(332, 0, 11, '156', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(333, 0, 11, '157', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(334, 0, 11, '158', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(335, 0, 11, '159', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(336, 0, 11, '160', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(337, 0, 11, '161', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(338, 0, 11, '162', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(339, 0, 11, '163', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(340, 0, 11, '164', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(341, 0, 11, '165', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(342, 0, 11, '166', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(343, 0, 11, '167', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(344, 0, 11, '168', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(345, 0, 11, '169', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(346, 0, 11, '170', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(347, 0, 11, '171', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(348, 0, 11, '172', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(349, 0, 11, '173', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(350, 0, 11, '174', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(351, 0, 11, '175', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(352, 0, 11, '176', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(353, 0, 11, '177', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(354, 0, 11, '178', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(355, 0, 11, '179', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(356, 0, 11, '180', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(357, 0, 11, '181', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(358, 0, 11, '182', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(359, 0, 11, '183', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(360, 0, 11, '184', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(361, 0, 11, '185', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(362, 0, 11, '186', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(363, 0, 11, '187', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(364, 0, 11, '188', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(365, 0, 11, '189', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(366, 0, 11, '190', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(367, 0, 11, '191', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(368, 0, 11, '192', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(369, 0, 11, '193', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(370, 0, 11, '194', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(371, 0, 11, '195', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(372, 0, 11, '196', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(373, 0, 11, '197', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(374, 0, 11, '198', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(375, 0, 11, '199', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(376, 0, 11, '200', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(377, 0, 11, '201', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(378, 0, 11, '202', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(379, 0, 11, '203', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(380, 0, 11, '204', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(381, 0, 11, '205', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(382, 0, 11, '206', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(383, 0, 11, '207', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(384, 0, 11, '208', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(385, 0, 11, '209', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(386, 0, 11, '210', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(387, 0, 11, '211', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(388, 0, 11, '212', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(389, 0, 11, '213', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(390, 0, 11, '214', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(391, 0, 11, '215', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(392, 0, 11, '216', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(393, 0, 11, '217', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(394, 0, 11, '218', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(395, 0, 11, '219', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(396, 0, 11, '220', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(397, 0, 11, '221', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(398, 0, 11, '222', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(399, 0, 11, '223', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(400, 0, 11, '224', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(401, 0, 11, '225', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(402, 0, 11, '226', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(403, 0, 11, '227', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(404, 0, 11, '228', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(405, 0, 11, '229', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(406, 0, 11, '230', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(407, 0, 11, '231', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(408, 0, 11, '232', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(409, 0, 11, '233', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(410, 0, 11, '234', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(411, 0, 11, '235', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(412, 0, 11, '236', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(413, 0, 11, '237', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(414, 0, 11, '238', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(415, 0, 11, '239', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(416, 0, 11, '240', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(417, 0, 11, '241', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(418, 0, 11, '242', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(419, 0, 11, '243', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(420, 0, 11, '244', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(421, 0, 11, '245', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(422, 0, 11, '246', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(423, 0, 11, '247', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(424, 0, 11, '248', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(425, 0, 11, '249', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(426, 0, 11, '250', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(427, 0, 11, '251', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(428, 0, 11, '252', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(429, 0, 11, '253', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(430, 0, 11, '254', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(431, 0, 11, '255', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(432, 0, 11, '256', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(433, 0, 11, '257', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(434, 0, 11, '258', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(435, 0, 11, '259', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(436, 0, 11, '260', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(437, 0, 11, '261', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(438, 0, 11, '262', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(439, 0, 11, '263', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(440, 0, 11, '264', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(441, 0, 11, '265', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(442, 0, 11, '266', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(443, 0, 11, '267', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(444, 0, 11, '268', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(445, 0, 11, '269', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(446, 0, 11, '270', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(447, 0, 11, '271', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(448, 0, 11, '272', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(449, 0, 11, '273', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(450, 0, 11, '274', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(451, 0, 11, '275', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(452, 0, 11, '276', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(453, 0, 11, '277', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(454, 0, 11, '278', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(455, 0, 11, '279', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(456, 0, 11, '280', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(457, 0, 11, '281', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(458, 0, 11, '282', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(459, 0, 11, '283', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(460, 0, 11, '284', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(461, 0, 11, '285', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(462, 0, 11, '286', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(463, 0, 11, '287', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(464, 0, 11, '288', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(465, 0, 11, '289', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(466, 0, 11, '290', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(467, 0, 11, '291', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(468, 0, 11, '292', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(469, 0, 11, '293', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(470, 0, 11, '294', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(471, 0, 11, '295', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(472, 0, 11, '296', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(473, 0, 11, '297', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(474, 0, 11, '298', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(475, 0, 11, '299', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(476, 0, 11, '300', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(477, 0, 11, '301', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(478, 0, 11, '302', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(479, 0, 11, '303', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(480, 0, 11, '304', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(481, 0, 11, '305', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(482, 0, 11, '306', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(483, 0, 11, '307', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(484, 0, 11, '308', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(485, 0, 11, '309', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(486, 0, 11, '310', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56');
INSERT INTO `tickets` (`id`, `user_id`, `product_id`, `code`, `date_purchased`, `paid_price`, `discount`, `purchase_type`, `status`, `created_at`, `updated_at`) VALUES
(487, 0, 11, '311', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(488, 0, 11, '312', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(489, 0, 11, '313', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(490, 0, 11, '314', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(491, 0, 11, '315', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(492, 0, 11, '316', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(493, 0, 11, '317', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(494, 0, 11, '318', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(495, 0, 11, '319', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(496, 0, 11, '320', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(497, 0, 11, '321', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(498, 0, 11, '322', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(499, 0, 11, '323', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(500, 0, 11, '324', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(501, 0, 11, '325', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(502, 0, 11, '326', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(503, 0, 11, '327', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(504, 0, 11, '328', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(505, 0, 11, '329', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(506, 0, 11, '330', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(507, 0, 11, '331', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(508, 0, 11, '332', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(509, 0, 11, '333', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(510, 0, 11, '334', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(511, 0, 11, '335', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(512, 0, 11, '336', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(513, 0, 11, '337', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(514, 0, 11, '338', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(515, 0, 11, '339', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(516, 0, 11, '340', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(517, 0, 11, '341', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(518, 0, 11, '342', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(519, 0, 11, '343', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(520, 0, 11, '344', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(521, 0, 11, '345', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(522, 0, 11, '346', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(523, 0, 11, '347', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(524, 0, 11, '348', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(525, 0, 11, '349', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(526, 0, 11, '350', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(527, 0, 11, '351', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(528, 0, 11, '352', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(529, 0, 11, '353', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(530, 0, 11, '354', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(531, 0, 11, '355', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(532, 0, 11, '356', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(533, 0, 11, '357', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(534, 0, 11, '358', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(535, 0, 11, '359', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(536, 0, 11, '360', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(537, 0, 11, '361', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(538, 0, 11, '362', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(539, 0, 11, '363', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(540, 0, 11, '364', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(541, 0, 11, '365', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(542, 0, 11, '366', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(543, 0, 11, '367', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(544, 0, 11, '368', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(545, 0, 11, '369', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(546, 0, 11, '370', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(547, 0, 11, '371', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(548, 0, 11, '372', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(549, 0, 11, '373', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(550, 0, 11, '374', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(551, 0, 11, '375', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(552, 0, 11, '376', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(553, 0, 11, '377', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(554, 0, 11, '378', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(555, 0, 11, '379', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(556, 0, 11, '380', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(557, 0, 11, '381', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(558, 0, 11, '382', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(559, 0, 11, '383', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(560, 0, 11, '384', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(561, 0, 11, '385', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(562, 0, 11, '386', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(563, 0, 11, '387', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(564, 0, 11, '388', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(565, 0, 11, '389', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(566, 0, 11, '390', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(567, 0, 11, '391', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(568, 0, 11, '392', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(569, 0, 11, '393', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(570, 0, 11, '394', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(571, 0, 11, '395', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(572, 0, 11, '396', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(573, 0, 11, '397', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(574, 0, 11, '398', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(575, 0, 11, '399', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(576, 0, 11, '400', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(577, 0, 11, '401', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(578, 0, 11, '402', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(579, 0, 11, '403', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(580, 0, 11, '404', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(581, 0, 11, '405', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(582, 0, 11, '406', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(583, 0, 11, '407', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(584, 0, 11, '408', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(585, 0, 11, '409', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(586, 0, 11, '410', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(587, 0, 11, '411', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(588, 0, 11, '412', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(589, 0, 11, '413', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(590, 0, 11, '414', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(591, 0, 11, '415', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(592, 0, 11, '416', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(593, 0, 11, '417', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(594, 0, 11, '418', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(595, 0, 11, '419', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(596, 0, 11, '420', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(597, 0, 11, '421', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(598, 0, 11, '422', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(599, 0, 11, '423', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(600, 0, 11, '424', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(601, 0, 11, '425', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(602, 0, 11, '426', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(603, 0, 11, '427', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:56', '2019-05-04 01:14:56'),
(604, 0, 11, '428', '2019-05-04 01:14:56', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(605, 0, 11, '429', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(606, 0, 11, '430', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(607, 0, 11, '431', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(608, 0, 11, '432', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(609, 0, 11, '433', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(610, 0, 11, '434', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(611, 0, 11, '435', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(612, 0, 11, '436', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(613, 0, 11, '437', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(614, 0, 11, '438', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(615, 0, 11, '439', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(616, 0, 11, '440', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(617, 0, 11, '441', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(618, 0, 11, '442', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(619, 0, 11, '443', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(620, 0, 11, '444', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(621, 0, 11, '445', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(622, 0, 11, '446', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(623, 0, 11, '447', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(624, 0, 11, '448', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(625, 0, 11, '449', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(626, 0, 11, '450', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(627, 0, 11, '451', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(628, 0, 11, '452', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(629, 0, 11, '453', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(630, 0, 11, '454', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(631, 0, 11, '455', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(632, 0, 11, '456', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(633, 0, 11, '457', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(634, 0, 11, '458', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(635, 0, 11, '459', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(636, 0, 11, '460', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(637, 0, 11, '461', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(638, 0, 11, '462', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(639, 0, 11, '463', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(640, 0, 11, '464', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(641, 0, 11, '465', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(642, 0, 11, '466', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(643, 0, 11, '467', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(644, 0, 11, '468', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(645, 0, 11, '469', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(646, 0, 11, '470', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(647, 0, 11, '471', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(648, 0, 11, '472', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(649, 0, 11, '473', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(650, 0, 11, '474', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(651, 0, 11, '475', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(652, 0, 11, '476', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(653, 0, 11, '477', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(654, 0, 11, '478', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(655, 0, 11, '479', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(656, 0, 11, '480', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(657, 0, 11, '481', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(658, 0, 11, '482', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(659, 0, 11, '483', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(660, 0, 11, '484', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(661, 0, 11, '485', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(662, 0, 11, '486', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(663, 0, 11, '487', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(664, 0, 11, '488', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(665, 0, 11, '489', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(666, 0, 11, '490', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(667, 0, 11, '491', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(668, 0, 11, '492', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(669, 0, 11, '493', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(670, 0, 11, '494', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(671, 0, 11, '495', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(672, 0, 11, '496', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(673, 0, 11, '497', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(674, 0, 11, '498', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(675, 0, 11, '499', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(676, 0, 11, '500', '2019-05-04 01:14:57', 100, 0, '0', 0, '2019-05-04 01:14:57', '2019-05-04 01:14:57'),
(677, 1, 12, '1', '2019-07-22 06:51:49', 45, 0, '0', 1, '2019-07-22 06:51:49', '2019-07-24 06:10:28'),
(678, 1, 12, '2', '2019-07-22 06:51:49', 45, 0, '0', 1, '2019-07-22 06:51:49', '2019-07-24 06:10:28'),
(679, 1, 12, '3', '2019-07-22 06:51:49', 45, 0, '0', 1, '2019-07-22 06:51:49', '2019-07-24 06:10:28'),
(680, 1, 12, '4', '2019-07-22 06:51:49', 45, 0, '0', 1, '2019-07-22 06:51:49', '2019-07-24 06:10:28'),
(681, 1, 12, '5', '2019-07-22 06:51:49', 45, 0, '0', 1, '2019-07-22 06:51:49', '2019-07-24 06:10:28'),
(682, 0, 12, '6', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(683, 0, 12, '7', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(684, 0, 12, '8', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(685, 0, 12, '9', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(686, 0, 12, '10', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(687, 1, 12, '11', '2019-07-22 06:51:49', 45, 0, '0', 1, '2019-07-22 06:51:49', '2019-07-24 06:38:55'),
(688, 1, 12, '12', '2019-07-22 06:51:49', 45, 0, '0', 1, '2019-07-22 06:51:49', '2019-07-24 06:38:55'),
(689, 1, 12, '13', '2019-07-22 06:51:49', 45, 0, '0', 1, '2019-07-22 06:51:49', '2019-07-24 06:38:55'),
(690, 0, 12, '14', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(691, 1, 12, '15', '2019-07-22 06:51:49', 45, 0, '0', 1, '2019-07-22 06:51:49', '2019-07-24 06:38:55'),
(692, 1, 12, '16', '2019-07-22 06:51:49', 45, 0, '0', 1, '2019-07-22 06:51:49', '2019-07-24 06:38:55'),
(693, 0, 12, '17', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(694, 0, 12, '18', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(695, 0, 12, '19', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(696, 0, 12, '20', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(697, 0, 12, '21', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(698, 0, 12, '22', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(699, 0, 12, '23', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(700, 0, 12, '24', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(701, 0, 12, '25', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(702, 0, 12, '26', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(703, 0, 12, '27', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(704, 0, 12, '28', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(705, 0, 12, '29', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(706, 0, 12, '30', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(707, 0, 12, '31', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(708, 0, 12, '32', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(709, 0, 12, '33', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(710, 0, 12, '34', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(711, 0, 12, '35', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(712, 0, 12, '36', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(713, 0, 12, '37', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(714, 0, 12, '38', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(715, 0, 12, '39', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(716, 0, 12, '40', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(717, 0, 12, '41', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 07:27:11'),
(718, 0, 12, '42', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(719, 0, 12, '43', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(720, 0, 12, '44', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(721, 0, 12, '45', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(722, 0, 12, '46', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(723, 0, 12, '47', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(724, 0, 12, '48', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(725, 0, 12, '49', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(726, 0, 12, '50', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(727, 0, 12, '51', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(728, 0, 12, '52', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(729, 0, 12, '53', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(730, 0, 12, '54', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(731, 0, 12, '55', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(732, 0, 12, '56', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(733, 0, 12, '57', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(734, 0, 12, '58', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(735, 0, 12, '59', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(736, 0, 12, '60', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 07:27:11'),
(737, 0, 12, '61', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(738, 0, 12, '62', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(739, 0, 12, '63', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(740, 0, 12, '64', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 07:27:11'),
(741, 0, 12, '65', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(742, 0, 12, '66', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(743, 0, 12, '67', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(744, 0, 12, '68', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(745, 0, 12, '69', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(746, 0, 12, '70', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(747, 0, 12, '71', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(748, 0, 12, '72', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-24 11:06:32'),
(749, 0, 12, '73', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(750, 0, 12, '74', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(751, 0, 12, '75', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(752, 0, 12, '76', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(753, 0, 12, '77', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(754, 0, 12, '78', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(755, 0, 12, '79', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(756, 0, 12, '80', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(757, 0, 12, '81', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(758, 0, 12, '82', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(759, 0, 12, '83', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(760, 0, 12, '84', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(761, 0, 12, '85', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(762, 0, 12, '86', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(763, 0, 12, '87', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(764, 0, 12, '88', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(765, 0, 12, '89', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(766, 0, 12, '90', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(767, 0, 12, '91', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(768, 0, 12, '92', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(769, 0, 12, '93', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(770, 0, 12, '94', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(771, 0, 12, '95', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(772, 0, 12, '96', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(773, 0, 12, '97', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(774, 0, 12, '98', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(775, 0, 12, '99', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(776, 0, 12, '100', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(777, 0, 12, '101', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(778, 0, 12, '102', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(779, 0, 12, '103', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(780, 0, 12, '104', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(781, 0, 12, '105', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(782, 0, 12, '106', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(783, 0, 12, '107', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(784, 0, 12, '108', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(785, 0, 12, '109', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(786, 0, 12, '110', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(787, 0, 12, '111', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(788, 0, 12, '112', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(789, 0, 12, '113', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(790, 0, 12, '114', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(791, 0, 12, '115', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(792, 0, 12, '116', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(793, 0, 12, '117', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(794, 0, 12, '118', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(795, 0, 12, '119', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(796, 0, 12, '120', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(797, 0, 12, '121', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(798, 0, 12, '122', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(799, 0, 12, '123', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(800, 0, 12, '124', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(801, 0, 12, '125', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(802, 0, 12, '126', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(803, 0, 12, '127', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(804, 0, 12, '128', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(805, 0, 12, '129', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(806, 0, 12, '130', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(807, 0, 12, '131', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(808, 0, 12, '132', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(809, 0, 12, '133', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(810, 0, 12, '134', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(811, 0, 12, '135', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(812, 0, 12, '136', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(813, 0, 12, '137', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(814, 0, 12, '138', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(815, 0, 12, '139', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(816, 0, 12, '140', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(817, 0, 12, '141', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(818, 0, 12, '142', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(819, 0, 12, '143', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(820, 0, 12, '144', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(821, 0, 12, '145', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(822, 0, 12, '146', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(823, 0, 12, '147', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(824, 0, 12, '148', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(825, 0, 12, '149', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(826, 0, 12, '150', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(827, 0, 12, '151', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(828, 0, 12, '152', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(829, 0, 12, '153', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(830, 0, 12, '154', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(831, 0, 12, '155', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(832, 0, 12, '156', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(833, 0, 12, '157', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(834, 0, 12, '158', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(835, 0, 12, '159', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(836, 0, 12, '160', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(837, 0, 12, '161', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(838, 0, 12, '162', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(839, 0, 12, '163', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(840, 0, 12, '164', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(841, 0, 12, '165', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(842, 0, 12, '166', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(843, 0, 12, '167', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(844, 0, 12, '168', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(845, 0, 12, '169', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(846, 0, 12, '170', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(847, 0, 12, '171', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(848, 0, 12, '172', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(849, 0, 12, '173', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(850, 0, 12, '174', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(851, 0, 12, '175', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(852, 0, 12, '176', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(853, 0, 12, '177', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(854, 0, 12, '178', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(855, 0, 12, '179', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(856, 0, 12, '180', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(857, 0, 12, '181', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(858, 0, 12, '182', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(859, 0, 12, '183', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(860, 0, 12, '184', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(861, 0, 12, '185', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(862, 0, 12, '186', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(863, 0, 12, '187', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(864, 0, 12, '188', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(865, 0, 12, '189', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(866, 0, 12, '190', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(867, 0, 12, '191', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(868, 0, 12, '192', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(869, 0, 12, '193', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(870, 0, 12, '194', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(871, 0, 12, '195', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(872, 0, 12, '196', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(873, 0, 12, '197', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(874, 0, 12, '198', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(875, 0, 12, '199', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(876, 0, 12, '200', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(877, 0, 12, '201', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(878, 0, 12, '202', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(879, 0, 12, '203', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(880, 0, 12, '204', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(881, 0, 12, '205', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(882, 0, 12, '206', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(883, 0, 12, '207', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(884, 0, 12, '208', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(885, 0, 12, '209', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(886, 0, 12, '210', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(887, 0, 12, '211', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(888, 0, 12, '212', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(889, 0, 12, '213', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(890, 0, 12, '214', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(891, 0, 12, '215', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(892, 0, 12, '216', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(893, 0, 12, '217', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(894, 0, 12, '218', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(895, 0, 12, '219', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(896, 0, 12, '220', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(897, 0, 12, '221', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(898, 0, 12, '222', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(899, 0, 12, '223', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(900, 0, 12, '224', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(901, 0, 12, '225', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(902, 0, 12, '226', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(903, 0, 12, '227', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(904, 0, 12, '228', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(905, 0, 12, '229', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(906, 0, 12, '230', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(907, 0, 12, '231', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(908, 0, 12, '232', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(909, 0, 12, '233', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(910, 0, 12, '234', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(911, 0, 12, '235', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(912, 0, 12, '236', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(913, 0, 12, '237', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(914, 0, 12, '238', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(915, 0, 12, '239', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(916, 0, 12, '240', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(917, 0, 12, '241', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(918, 0, 12, '242', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(919, 0, 12, '243', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(920, 0, 12, '244', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(921, 0, 12, '245', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(922, 0, 12, '246', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(923, 0, 12, '247', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(924, 0, 12, '248', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(925, 0, 12, '249', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(926, 0, 12, '250', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(927, 0, 12, '251', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(928, 0, 12, '252', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(929, 0, 12, '253', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(930, 0, 12, '254', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(931, 0, 12, '255', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(932, 0, 12, '256', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(933, 0, 12, '257', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(934, 0, 12, '258', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(935, 0, 12, '259', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(936, 0, 12, '260', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(937, 0, 12, '261', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(938, 0, 12, '262', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(939, 0, 12, '263', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(940, 0, 12, '264', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(941, 0, 12, '265', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(942, 0, 12, '266', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(943, 0, 12, '267', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(944, 0, 12, '268', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(945, 0, 12, '269', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(946, 0, 12, '270', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(947, 0, 12, '271', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(948, 0, 12, '272', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(949, 0, 12, '273', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(950, 0, 12, '274', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(951, 0, 12, '275', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(952, 0, 12, '276', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(953, 0, 12, '277', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(954, 0, 12, '278', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(955, 0, 12, '279', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(956, 0, 12, '280', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(957, 0, 12, '281', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(958, 0, 12, '282', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(959, 0, 12, '283', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(960, 0, 12, '284', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(961, 0, 12, '285', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(962, 0, 12, '286', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(963, 0, 12, '287', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(964, 0, 12, '288', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(965, 0, 12, '289', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(966, 0, 12, '290', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(967, 0, 12, '291', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(968, 0, 12, '292', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(969, 0, 12, '293', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49');
INSERT INTO `tickets` (`id`, `user_id`, `product_id`, `code`, `date_purchased`, `paid_price`, `discount`, `purchase_type`, `status`, `created_at`, `updated_at`) VALUES
(970, 0, 12, '294', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(971, 0, 12, '295', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(972, 0, 12, '296', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(973, 0, 12, '297', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(974, 0, 12, '298', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(975, 0, 12, '299', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(976, 0, 12, '300', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(977, 0, 12, '301', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(978, 0, 12, '302', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(979, 0, 12, '303', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(980, 0, 12, '304', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(981, 0, 12, '305', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(982, 0, 12, '306', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(983, 0, 12, '307', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(984, 0, 12, '308', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(985, 0, 12, '309', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(986, 0, 12, '310', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(987, 0, 12, '311', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(988, 0, 12, '312', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(989, 0, 12, '313', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(990, 0, 12, '314', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(991, 0, 12, '315', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(992, 0, 12, '316', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(993, 0, 12, '317', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(994, 0, 12, '318', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(995, 0, 12, '319', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(996, 0, 12, '320', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(997, 0, 12, '321', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(998, 0, 12, '322', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(999, 0, 12, '323', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1000, 0, 12, '324', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1001, 0, 12, '325', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1002, 0, 12, '326', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1003, 0, 12, '327', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1004, 0, 12, '328', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1005, 0, 12, '329', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1006, 0, 12, '330', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1007, 0, 12, '331', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1008, 0, 12, '332', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1009, 0, 12, '333', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1010, 0, 12, '334', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1011, 0, 12, '335', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1012, 0, 12, '336', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1013, 0, 12, '337', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1014, 0, 12, '338', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1015, 0, 12, '339', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1016, 0, 12, '340', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1017, 0, 12, '341', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1018, 0, 12, '342', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1019, 0, 12, '343', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1020, 0, 12, '344', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1021, 0, 12, '345', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1022, 0, 12, '346', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1023, 0, 12, '347', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1024, 0, 12, '348', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1025, 0, 12, '349', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1026, 0, 12, '350', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1027, 0, 12, '351', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1028, 0, 12, '352', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1029, 0, 12, '353', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1030, 0, 12, '354', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1031, 0, 12, '355', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1032, 0, 12, '356', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1033, 0, 12, '357', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1034, 0, 12, '358', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1035, 0, 12, '359', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1036, 0, 12, '360', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1037, 0, 12, '361', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1038, 0, 12, '362', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1039, 0, 12, '363', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1040, 0, 12, '364', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1041, 0, 12, '365', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1042, 0, 12, '366', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1043, 0, 12, '367', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1044, 0, 12, '368', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1045, 0, 12, '369', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1046, 0, 12, '370', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1047, 0, 12, '371', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1048, 0, 12, '372', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1049, 0, 12, '373', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1050, 0, 12, '374', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1051, 0, 12, '375', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1052, 0, 12, '376', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1053, 0, 12, '377', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1054, 0, 12, '378', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1055, 0, 12, '379', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1056, 0, 12, '380', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1057, 0, 12, '381', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1058, 0, 12, '382', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1059, 0, 12, '383', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1060, 0, 12, '384', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1061, 0, 12, '385', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1062, 0, 12, '386', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1063, 0, 12, '387', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1064, 0, 12, '388', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1065, 0, 12, '389', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1066, 0, 12, '390', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1067, 0, 12, '391', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1068, 0, 12, '392', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1069, 0, 12, '393', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1070, 0, 12, '394', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1071, 0, 12, '395', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1072, 0, 12, '396', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1073, 0, 12, '397', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1074, 0, 12, '398', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1075, 0, 12, '399', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1076, 0, 12, '400', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1077, 0, 12, '401', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1078, 0, 12, '402', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1079, 0, 12, '403', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1080, 0, 12, '404', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1081, 0, 12, '405', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1082, 0, 12, '406', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1083, 0, 12, '407', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1084, 0, 12, '408', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1085, 0, 12, '409', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1086, 0, 12, '410', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1087, 0, 12, '411', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1088, 0, 12, '412', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1089, 0, 12, '413', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1090, 0, 12, '414', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1091, 0, 12, '415', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1092, 0, 12, '416', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1093, 0, 12, '417', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1094, 0, 12, '418', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1095, 0, 12, '419', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1096, 0, 12, '420', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1097, 0, 12, '421', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1098, 0, 12, '422', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1099, 0, 12, '423', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1100, 0, 12, '424', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1101, 0, 12, '425', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1102, 0, 12, '426', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1103, 0, 12, '427', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1104, 0, 12, '428', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1105, 0, 12, '429', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1106, 0, 12, '430', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1107, 0, 12, '431', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1108, 0, 12, '432', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1109, 0, 12, '433', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1110, 0, 12, '434', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1111, 0, 12, '435', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1112, 0, 12, '436', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1113, 0, 12, '437', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1114, 0, 12, '438', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1115, 0, 12, '439', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1116, 0, 12, '440', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1117, 0, 12, '441', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1118, 0, 12, '442', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1119, 0, 12, '443', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1120, 0, 12, '444', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1121, 0, 12, '445', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1122, 0, 12, '446', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1123, 0, 12, '447', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1124, 0, 12, '448', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1125, 0, 12, '449', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1126, 0, 12, '450', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1127, 0, 12, '451', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1128, 0, 12, '452', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1129, 0, 12, '453', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1130, 0, 12, '454', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1131, 0, 12, '455', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1132, 0, 12, '456', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1133, 0, 12, '457', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1134, 0, 12, '458', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1135, 0, 12, '459', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1136, 0, 12, '460', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1137, 0, 12, '461', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1138, 0, 12, '462', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1139, 0, 12, '463', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1140, 0, 12, '464', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1141, 0, 12, '465', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1142, 0, 12, '466', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1143, 0, 12, '467', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1144, 0, 12, '468', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1145, 0, 12, '469', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1146, 0, 12, '470', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1147, 0, 12, '471', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1148, 0, 12, '472', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1149, 0, 12, '473', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1150, 0, 12, '474', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1151, 0, 12, '475', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1152, 0, 12, '476', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1153, 0, 12, '477', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1154, 0, 12, '478', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1155, 0, 12, '479', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1156, 0, 12, '480', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1157, 0, 12, '481', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1158, 0, 12, '482', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1159, 0, 12, '483', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1160, 0, 12, '484', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1161, 0, 12, '485', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1162, 0, 12, '486', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1163, 0, 12, '487', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1164, 0, 12, '488', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1165, 0, 12, '489', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1166, 0, 12, '490', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1167, 0, 12, '491', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1168, 0, 12, '492', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1169, 0, 12, '493', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1170, 0, 12, '494', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1171, 0, 12, '495', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1172, 0, 12, '496', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1173, 0, 12, '497', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1174, 0, 12, '498', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1175, 0, 12, '499', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1176, 0, 12, '500', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1177, 0, 12, '501', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1178, 0, 12, '502', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1179, 0, 12, '503', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1180, 0, 12, '504', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1181, 0, 12, '505', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1182, 0, 12, '506', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1183, 0, 12, '507', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1184, 0, 12, '508', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1185, 0, 12, '509', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1186, 0, 12, '510', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1187, 0, 12, '511', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1188, 0, 12, '512', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1189, 0, 12, '513', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1190, 0, 12, '514', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1191, 0, 12, '515', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1192, 0, 12, '516', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1193, 0, 12, '517', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1194, 0, 12, '518', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1195, 0, 12, '519', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1196, 0, 12, '520', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1197, 0, 12, '521', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1198, 0, 12, '522', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1199, 0, 12, '523', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1200, 0, 12, '524', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1201, 0, 12, '525', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1202, 0, 12, '526', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1203, 0, 12, '527', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1204, 0, 12, '528', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1205, 0, 12, '529', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1206, 0, 12, '530', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1207, 0, 12, '531', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1208, 0, 12, '532', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1209, 0, 12, '533', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1210, 0, 12, '534', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1211, 0, 12, '535', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1212, 0, 12, '536', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1213, 0, 12, '537', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1214, 0, 12, '538', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1215, 0, 12, '539', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1216, 0, 12, '540', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1217, 0, 12, '541', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1218, 0, 12, '542', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1219, 0, 12, '543', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1220, 0, 12, '544', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1221, 0, 12, '545', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1222, 0, 12, '546', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1223, 0, 12, '547', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1224, 0, 12, '548', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1225, 0, 12, '549', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1226, 0, 12, '550', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1227, 0, 12, '551', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1228, 0, 12, '552', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1229, 0, 12, '553', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1230, 0, 12, '554', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1231, 0, 12, '555', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1232, 0, 12, '556', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1233, 0, 12, '557', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1234, 0, 12, '558', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1235, 0, 12, '559', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1236, 0, 12, '560', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1237, 0, 12, '561', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1238, 0, 12, '562', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1239, 0, 12, '563', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1240, 0, 12, '564', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1241, 0, 12, '565', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1242, 0, 12, '566', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49'),
(1243, 0, 12, '567', '2019-07-22 06:51:49', 45, 0, '0', 0, '2019-07-22 06:51:49', '2019-07-22 06:51:49');

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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `referrer` int(1) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`name`, `user_role`, `phone`, `email`, `password`, `api_token`, `remember_token`, `created_at`, `updated_at`, `status`, `referrer`, `id`) VALUES
('Admin', 1, '456456', 'admin@admin.com', '$2y$10$1Oy3bQitkGEs1UH8HipkV.2BbyHfFpqRbjnFo16zFljW033GObldy', NULL, 'rqc7UB1cyuJcANiTFD3WSkG2tg1ke1zBTbPfOPyyygPSkZzNmW72yxClLWmh', NULL, NULL, 1, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aboutuses`
--
ALTER TABLE `aboutuses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `competitions`
--
ALTER TABLE `competitions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package_images`
--
ALTER TABLE `package_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`(191));

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `related_products`
--
ALTER TABLE `related_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
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
-- AUTO_INCREMENT for table `aboutuses`
--
ALTER TABLE `aboutuses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `competitions`
--
ALTER TABLE `competitions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `package_images`
--
ALTER TABLE `package_images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `related_products`
--
ALTER TABLE `related_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `tickets`
--
ALTER TABLE `tickets`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1244;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
