-- phpMyAdmin SQL Dump
-- version 4.3.8
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 07, 2016 at 12:23 PM
-- Server version: 5.5.42-37.1
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wwworker_bazazio`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(10) unsigned NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `permissions` text COLLATE utf8_unicode_ci,
  `activated` tinyint(1) NOT NULL DEFAULT '0',
  `activation_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `activated_at` timestamp NULL DEFAULT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `persist_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reset_password_code` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `first_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `last_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `email`, `password`, `permissions`, `activated`, `activation_code`, `activated_at`, `last_login`, `persist_code`, `reset_password_code`, `remember_token`, `first_name`, `last_name`, `created_at`, `updated_at`) VALUES
(1, 'dev1@brodywebdesign.com', '$2y$10$ALT4AGPEzqOdr0zoBqEzEO4O3YNqZbO8HdEczotI1ERLOD0QGjk22', NULL, 0, NULL, NULL, NULL, NULL, NULL, 'WJXgKx66SgaAZ1QybXdKRUxhVy9GSAASPjP1zc3GlMet3bNN6f9S0wLAcBYb', 'Bob', 'Brody', '2015-10-23 14:32:35', '2015-10-23 17:37:41');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE IF NOT EXISTS `banners` (
  `id` int(10) NOT NULL,
  `title` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `type` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `path` text COLLATE utf8_unicode_ci NOT NULL,
  `adspot` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `bannerlink` text COLLATE utf8_unicode_ci NOT NULL,
  `clicks` int(10) NOT NULL,
  `order` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint(20) unsigned NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 1, '2015-10-30 16:41:04', '2015-10-30 16:41:04');

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE IF NOT EXISTS `chats` (
  `id` int(10) NOT NULL,
  `user1` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user2` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `user1_is_typing` tinyint(1) NOT NULL DEFAULT '0',
  `user2_is_typing` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `user1`, `user2`, `user1_is_typing`, `user2_is_typing`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'no name', 0, 0, '2015-10-23 18:08:07', '2015-10-23 18:08:07'),
(2, 'Admin', 'no name', 0, 0, '2015-10-23 18:08:26', '2015-10-23 18:08:26'),
(3, 'Admin', 'no name', 0, 0, '2015-10-23 18:09:05', '2015-10-23 18:09:05'),
(4, '', 'no name', 0, 0, '2015-10-23 18:09:13', '2015-10-23 18:09:13'),
(5, '', 'no name', 0, 0, '2015-10-23 18:09:36', '2015-10-23 18:09:36'),
(6, 'Abhimanyu', 'no name', 0, 0, '2015-10-23 18:09:57', '2015-10-23 18:09:57'),
(7, 'Abhimanyu', 'no name', 0, 0, '2015-10-23 18:09:59', '2015-10-23 18:09:59'),
(8, 'Abhimanyu', 'no name', 0, 0, '2015-10-23 18:10:34', '2015-10-23 18:10:34'),
(9, 'Abhimanyu', 'no name', 0, 0, '2015-10-23 18:11:02', '2015-10-23 18:11:02'),
(10, 'Abhimanyu', 'no name', 0, 0, '2015-10-23 18:11:04', '2015-10-23 18:11:04'),
(11, 'Abhimanyu', 'no name', 0, 0, '2015-10-23 18:14:17', '2015-10-23 18:14:17'),
(12, 'Abhimanyu', 'no name', 0, 0, '2015-10-23 18:14:42', '2015-10-23 18:14:42'),
(13, 'Abhimanyu', 'no name', 0, 0, '2015-10-23 18:15:07', '2015-10-23 18:15:07'),
(14, '', 'no name', 0, 0, '2015-10-23 18:15:18', '2015-10-23 18:15:18'),
(15, 'Ema', 'no name', 0, 0, '2015-10-23 18:15:35', '2015-10-23 18:15:35'),
(16, 'Ema', 'no name', 0, 0, '2015-10-23 18:15:38', '2015-10-23 18:15:38'),
(17, 'Ema', 'no name', 0, 0, '2015-10-23 18:19:52', '2015-10-23 18:19:52'),
(18, 'Ema', 'no name', 0, 0, '2015-10-23 18:20:22', '2015-10-23 18:20:22'),
(19, '', 'no name', 0, 0, '2015-10-23 18:20:36', '2015-10-23 18:20:36'),
(20, 'deepika', 'no name', 0, 0, '2015-10-23 18:21:13', '2015-10-23 18:21:13'),
(21, 'deepika', 'no name', 0, 0, '2015-10-23 18:21:25', '2015-10-23 18:21:25'),
(22, 'deepika', 'no name', 0, 0, '2015-10-23 18:21:34', '2015-10-23 18:21:34'),
(23, 'deepika', 'no name', 0, 0, '2015-10-23 18:44:13', '2015-10-23 18:44:13'),
(24, 'deepika', 'no name', 0, 0, '2015-10-23 19:04:15', '2015-10-23 19:04:15'),
(25, 'deepika', 'no name', 0, 0, '2015-10-23 19:04:52', '2015-10-23 19:04:52'),
(26, 'deepika', 'no name', 0, 0, '2015-10-23 19:05:17', '2015-10-23 19:05:17'),
(27, 'Abhimanyu', 'no name', 0, 0, '2015-10-23 19:05:24', '2015-10-23 19:05:24'),
(28, 'Abhimanyu', 'no name', 0, 0, '2015-10-23 19:05:38', '2015-10-23 19:05:38'),
(29, 'Abhimanyu', 'no name', 0, 0, '2015-10-23 19:05:45', '2015-10-23 19:05:45'),
(30, 'Abhimanyu', 'no name', 0, 0, '2015-10-23 19:06:03', '2015-10-23 19:06:03'),
(31, 'deepika', 'no name', 0, 0, '2015-10-23 19:06:10', '2015-10-23 19:06:10'),
(32, 'deepika', 'no name', 0, 0, '2015-10-23 19:06:16', '2015-10-23 19:06:16'),
(33, 'deepika', 'no name', 0, 0, '2015-10-23 19:06:23', '2015-10-23 19:06:23'),
(34, 'deepika', 'no name', 0, 0, '2015-10-23 19:06:41', '2015-10-23 19:06:41'),
(35, 'deepika', 'no name', 0, 0, '2015-10-23 19:07:04', '2015-10-23 19:07:04'),
(36, 'deepika', 'no name', 0, 0, '2015-10-23 19:11:53', '2015-10-23 19:11:53'),
(37, 'deepika', 'no name', 0, 0, '2015-10-23 19:13:53', '2015-10-23 19:13:53'),
(38, 'deepika', 'no name', 0, 0, '2015-10-23 19:16:12', '2015-10-23 19:16:12'),
(39, 'deepika', 'no name', 0, 0, '2015-10-23 19:18:50', '2015-10-23 19:18:50'),
(40, 'deepika', 'no name', 0, 0, '2015-10-23 19:19:13', '2015-10-23 19:19:13'),
(41, 'deepika', 'no name', 0, 0, '2015-10-23 19:20:55', '2015-10-23 19:20:55'),
(42, 'deepika', 'no name', 0, 0, '2015-10-23 19:21:04', '2015-10-23 19:21:04'),
(43, 'deepika', 'no name', 0, 0, '2015-10-23 19:21:13', '2015-10-23 19:21:13'),
(44, 'deepika', 'no name', 0, 0, '2015-10-23 19:21:20', '2015-10-23 19:21:20'),
(45, 'deepika', 'no name', 0, 0, '2015-10-23 19:25:33', '2015-10-23 19:25:33'),
(46, 'deepika', 'no name', 0, 0, '2015-10-23 19:26:27', '2015-10-23 19:26:27'),
(47, 'Admin', 'no name', 0, 0, '2015-10-27 17:46:22', '2015-10-27 17:46:22'),
(48, 'Admin', 'no name', 0, 0, '2015-10-27 17:55:43', '2015-10-27 17:55:43'),
(49, 'Admin', 'no name', 0, 0, '2015-10-29 20:26:19', '2015-10-29 20:26:19'),
(50, 'Admin', 'no name', 0, 0, '2015-10-30 16:07:12', '2015-10-30 16:07:12');

-- --------------------------------------------------------

--
-- Table structure for table `chat_messages`
--

CREATE TABLE IF NOT EXISTS `chat_messages` (
  `id` int(10) NOT NULL,
  `sender_username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `read` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE IF NOT EXISTS `coupons` (
  `id` int(10) unsigned NOT NULL,
  `code` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `value` decimal(20,2) DEFAULT NULL,
  `discount` decimal(3,2) DEFAULT NULL,
  `active` int(11) NOT NULL DEFAULT '1',
  `expires_at` datetime DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE IF NOT EXISTS `friends` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `friend_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_id`, `friend_id`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 2, '2015-10-26 06:14:17', '2015-10-26 05:18:24'),
(4, 2, 1, '2015-10-26 06:14:17', '2015-10-26 06:14:17');

-- --------------------------------------------------------

--
-- Table structure for table `games`
--

CREATE TABLE IF NOT EXISTS `games` (
  `id` int(10) NOT NULL,
  `author` int(10) NOT NULL,
  `title` varchar(200) NOT NULL,
  `image` text NOT NULL,
  `path` text NOT NULL,
  `gametype` varchar(20) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `games`
--

INSERT INTO `games` (`id`, `author`, `title`, `image`, `path`, `gametype`, `created_at`, `updated_at`) VALUES
(1, 1, 'test es', 'application/storage/games/test-es/1445986368-2048-open-source-game.png', 'application/storage/games/test-es/2048-master', '', '2015-10-27 22:52:48', '2015-10-27 22:52:48'),
(2, 1, 'test es', 'application/storage/games/test-es/1445986707-2048-open-source-game.png', 'application/storage/games/test-es/2048-master', '', '2015-10-27 22:58:27', '2015-10-27 22:58:27');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE IF NOT EXISTS `items` (
  `id` bigint(20) unsigned NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `cart_id` bigint(20) unsigned DEFAULT NULL,
  `order_id` bigint(20) unsigned DEFAULT NULL,
  `sku` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(20,2) NOT NULL,
  `tax` float(20,2) NOT NULL DEFAULT '0.00',
  `shipping` decimal(20,2) NOT NULL DEFAULT '0.00',
  `currency` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `quantity` int(10) unsigned NOT NULL,
  `class` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `reference_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `user_id`, `cart_id`, `order_id`, `sku`, `price`, `tax`, `shipping`, `currency`, `quantity`, `class`, `reference_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 1, 'tst123', 200.00, 20.00, '0.00', 'USD', 40, NULL, NULL, '2015-10-30 19:06:45', '2015-10-30 21:29:40'),
(2, 1, NULL, 5, 'tst123', 200.00, 20.00, '0.00', 'USD', 10, NULL, NULL, '2015-11-02 15:20:36', '2015-11-02 15:21:05'),
(3, 1, NULL, 7, 'tst123', 200.00, 20.00, '0.00', 'USD', 10, NULL, NULL, '2015-11-02 17:36:14', '2015-11-02 17:36:26'),
(4, 1, NULL, 8, 'tst123', 200.00, 20.00, '0.00', 'USD', 10, NULL, NULL, '2015-11-02 18:32:41', '2015-11-02 18:40:41'),
(5, 1, NULL, 17, 'tst123', 200.00, 20.00, '0.00', 'USD', 10, NULL, NULL, '2015-11-02 19:03:03', '2015-11-02 19:03:16'),
(6, 1, 1, NULL, 'tst123', 200.00, 20.00, '0.00', 'USD', 10, NULL, NULL, '2015-11-02 19:13:20', '2015-11-02 19:13:20');

-- --------------------------------------------------------

--
-- Table structure for table `links`
--

CREATE TABLE IF NOT EXISTS `links` (
  `id` int(10) unsigned NOT NULL,
  `display` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `main` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `links`
--

INSERT INTO `links` (`id`, `display`, `url`, `created_at`, `updated_at`, `main`) VALUES
(1, 'Links', 'Link', '2015-10-23 14:32:36', '2015-10-23 14:32:36', 1),
(2, 'Posts', 'Post', '2015-10-23 16:07:25', '2015-10-23 16:07:25', NULL),
(3, 'Videos', 'Video', '2015-10-27 22:54:38', '2015-10-27 22:54:38', NULL),
(4, 'Games', 'Game', '2015-10-27 22:54:38', '2015-10-27 22:54:38', NULL),
(5, 'Banners', 'Banner', '2015-10-27 22:54:38', '2015-10-27 22:54:38', NULL),
(6, 'Products', 'Product', '2015-10-26 11:14:17', '2015-10-26 11:14:17', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE IF NOT EXISTS `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_11_16_205658_create_admins_table', 1),
('2014_12_02_152920_create_password_reminders_table', 1),
('2015_02_20_130902_create_url_table', 1),
('2015_03_15_123956_edit_url_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE IF NOT EXISTS `orders` (
  `id` bigint(20) unsigned NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `statusCode` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `statusCode`, `created_at`, `updated_at`) VALUES
(1, 1, 'pending', '2015-10-30 21:29:40', '2015-10-30 21:29:40'),
(2, 1, 'completed', '2015-10-30 22:07:37', '2015-10-30 22:07:37'),
(3, 1, 'completed', '2015-10-30 22:09:04', '2015-10-30 22:09:04'),
(4, 1, 'completed', '2015-10-30 22:09:45', '2015-10-30 22:09:45'),
(5, 1, 'pending', '2015-11-02 15:21:04', '2015-11-02 15:21:04'),
(6, 1, 'completed', '2015-11-02 15:45:19', '2015-11-02 15:45:19'),
(7, 1, 'pending', '2015-11-02 17:36:26', '2015-11-02 17:36:26'),
(8, 1, 'pending', '2015-11-02 18:40:41', '2015-11-02 18:40:41'),
(9, 1, 'pending', '2015-11-02 18:41:44', '2015-11-02 18:41:44'),
(10, 1, 'pending', '2015-11-02 18:42:32', '2015-11-02 18:42:32'),
(11, 1, 'pending', '2015-11-02 18:43:57', '2015-11-02 18:43:57'),
(12, 1, 'pending', '2015-11-02 18:45:14', '2015-11-02 18:45:14'),
(13, 1, 'pending', '2015-11-02 18:53:06', '2015-11-02 18:53:06'),
(14, 1, 'pending', '2015-11-02 18:59:42', '2015-11-02 18:59:42'),
(15, 1, 'pending', '2015-11-02 19:01:39', '2015-11-02 19:01:39'),
(16, 1, 'failed', '2015-11-02 19:02:22', '2015-11-02 19:02:26'),
(17, 1, 'pending', '2015-11-02 19:03:16', '2015-11-02 19:03:16');

-- --------------------------------------------------------

--
-- Table structure for table `order_status`
--

CREATE TABLE IF NOT EXISTS `order_status` (
  `code` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `order_status`
--

INSERT INTO `order_status` (`code`, `name`, `description`, `created_at`, `updated_at`) VALUES
('canceled', 'Canceled', 'Canceled order.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('completed', 'Completed', 'Completed order. Payment and other processes have been made.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('failed', 'Failed', 'Failed order. Payment or other process failed.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('in_creation', 'In creation', 'Order being created.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('in_process', 'In process', 'Completed order in process of shipping or revision.', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('pending', 'Pending', 'Created / placed order pending payment or similar.', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `password_reminders`
--

CREATE TABLE IF NOT EXISTS `password_reminders` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) NOT NULL,
  `author` int(10) NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 4, 'Went for a Run this Morning', 'Was met by this amazing view. I just had to stop and take a pic. I feel so fortunate and blessed to be alive.\r\n\r\n    #blessed\r\n    #loving-life\r\n    #health-and-exercise', '1445627090-running_pic.jpg', '2015-10-23 19:04:50', '2015-10-23 19:04:50'),
(2, 4, 'Venenatis arcu consectetur', 'Venenatis arcu consectetur accumsan hendrerit et fringilla torquent viverra facilisis, porta convallis orci a curabitur placerat viverra mauris, vivamus ad aliquam curae sociosqu risus et praesent curabitur hac vulputate varius mollis himenaeos nisi, tortor cursus cubilia ad nulla potenti neque, porttitor curabitur eget orci convallis congue hac leo suscipit hendrerit praesent urna dui sed ultricies eros, etiam eget id curae aliquam porta curabitur eleifend vestibulum convallis, varius blandit ad cubilia dictumst duis ullamcorper nibh torquent felis amet ornare est mollis.', '', '2015-10-23 19:13:51', '2015-10-23 19:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE IF NOT EXISTS `post_comments` (
  `id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `comment_author` int(10) NOT NULL,
  `comments` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `post_id`, `comment_author`, `comments`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 'Wow! That does look amazing! Where is this at?!', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(2, 1, 4, 'Wow! That does look amazing! Where is this at?!', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(3, 1, 4, 'Life really does have its ways for surprising you. #life-is-a-gift', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, 2, 4, 'Wow! That does look amazing! Where is this at?!', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 2, 4, 'Awesome! You will have to take me running with you, sometime! ;-)', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 2, 4, 'Life really does have its ways for surprising you. #life-is-a-gift', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `post_like`
--

CREATE TABLE IF NOT EXISTS `post_like` (
  `id` int(10) NOT NULL,
  `post_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(10) NOT NULL,
  `author` int(10) NOT NULL,
  `name` text NOT NULL,
  `sku` varchar(50) NOT NULL,
  `price` float(20,2) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  `tax` float(20,2) DEFAULT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `author`, `name`, `sku`, `price`, `image`, `tax`, `slug`, `created_at`, `updated_at`) VALUES
(1, 1, 'test product', 'tst123', 200.00, 'main_profile_pic.jpg', 20.00, '1', '2015-10-29 22:09:16', '2015-10-29 23:24:27');

-- --------------------------------------------------------

--
-- Table structure for table `social_login`
--

CREATE TABLE IF NOT EXISTS `social_login` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `provider` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `social_id` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE IF NOT EXISTS `transactions` (
  `id` bigint(20) unsigned NOT NULL,
  `order_id` bigint(20) unsigned NOT NULL,
  `gateway` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `transaction_id` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `detail` varchar(1024) COLLATE utf8_unicode_ci DEFAULT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `order_id`, `gateway`, `transaction_id`, `detail`, `token`, `created_at`, `updated_at`) VALUES
(1, 4, 'paypalExpress', '5633f1b1eed34', 'Order total is 0; no PayPal transaction required.', '5633f1b164308', '2015-10-30 22:09:46', '2015-10-30 22:09:46'),
(2, 6, 'paypalExpress', '56377e07942e6', 'Order total is 0; no PayPal transaction required.', '56377e06997bd', '2015-11-02 15:45:19', '2015-11-02 15:45:19'),
(3, 17, 'paypalExpress', '5637ac6be9a31', 'Pending approval: https://www.sandbox.paypal.com/cgi-bin/webscr?cmd=_express-checkout&token=EC-5HM388968X151461F', '5637ac6be9a46', '2015-11-02 19:03:22', '2015-11-02 19:03:22');

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE IF NOT EXISTS `userdata` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_key` varchar(50) NOT NULL,
  `user_value` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL,
  `firstname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `lastname` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `username` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `dob` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `password` text COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `city` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `country` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `terms` tinyint(4) NOT NULL DEFAULT '0',
  `profile_pic` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `facebook_fed` text COLLATE utf8_unicode_ci NOT NULL,
  `kik_feed` text COLLATE utf8_unicode_ci NOT NULL,
  `linkedin_feed` text COLLATE utf8_unicode_ci NOT NULL,
  `instagram_feed` text COLLATE utf8_unicode_ci NOT NULL,
  `google_feed` text COLLATE utf8_unicode_ci NOT NULL,
  `tumbler_feed` text COLLATE utf8_unicode_ci NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `username`, `dob`, `email`, `password`, `location`, `city`, `state`, `country`, `terms`, `profile_pic`, `facebook_fed`, `kik_feed`, `linkedin_feed`, `instagram_feed`, `google_feed`, `tumbler_feed`, `updated_at`, `created_at`) VALUES
(1, 'developer', 'developer', 'Admin', '10/07/2015', 'dev1@brodywebdesign.com', '$2y$10$yKGuBC4Q4we0rrQpUeTTfOxm1L7R5cUhcSgbCBE/UZkvxDpeZFgr.', 'Phoenix', 'Phoenix', 'Arizona', 'USA', 1, '1445623421-katrina.jpg', '', '', '', '', '', '', '2015-10-23 23:03:41', '2015-10-15 23:21:04'),
(2, 'abhimanyu', 'mithun', 'Abhimanyu', '2015-10-23', 'dev2@brodywebdesign.com', '$2y$10$Ek5wnJGNOp5Lzqm2EmPnMu9XyvVfsPq1mCOXmtDySgCoWj81RXHb.', 'Phoenix', 'Phoenix', 'Arizona', 'USA', 1, '1445623775-Abhimanyu.jpg', '', '', '', '', '', '', '2015-10-23 23:09:56', '2015-10-23 18:09:04'),
(3, 'ema', 'watson', 'Ema', '2015-10-23', 'dev3@brodywebdesign.com', '$2y$10$pue47VDuft6Wau6LsUKAS.yZVecw69s48eBMkgXCySGRu4lIQx3rC', 'Phoenix', 'Phoenix', 'Arizona', 'USA', 1, '', '', '', '', '', '', '', '2015-10-23 23:15:34', '2015-10-23 18:15:06'),
(4, 'deepika', 'padukon', 'deepika', '2015-10-23', 'dev4@brodywebdesign.com', '$2y$10$L3gvgFOZTudS351uozdA6.v3wdFiu7aCOIAJITiEg8ly6770e3CxO', 'Phoenix', 'Phoenix', 'Arizona', 'USA', 1, '1445624483-deepika.jpg', '', '', '', '', '', '', '2015-10-23 23:21:23', '2015-10-23 18:20:20');

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE IF NOT EXISTS `videos` (
  `id` int(10) NOT NULL,
  `author` int(10) NOT NULL,
  `videolink` text NOT NULL,
  `imagelink` text NOT NULL,
  `info` text NOT NULL,
  `publish` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `admins_email_unique` (`email`), ADD KEY `admins_activation_code_index` (`activation_code`), ADD KEY `admins_reset_password_code_index` (`reset_password_code`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `cart_user_id_unique` (`user_id`);

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat_messages`
--
ALTER TABLE `chat_messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `coupons_code_unique` (`code`), ADD KEY `coupons_code_expires_at_index` (`code`,`expires_at`), ADD KEY `coupons_code_active_index` (`code`,`active`), ADD KEY `coupons_code_active_expires_at_index` (`code`,`active`,`expires_at`), ADD KEY `coupons_sku_index` (`sku`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `games`
--
ALTER TABLE `games`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `items_sku_cart_id_unique` (`sku`,`cart_id`), ADD UNIQUE KEY `items_sku_order_id_unique` (`sku`,`order_id`), ADD KEY `items_cart_id_foreign` (`cart_id`), ADD KEY `items_user_id_sku_index` (`user_id`,`sku`), ADD KEY `items_user_id_sku_cart_id_index` (`user_id`,`sku`,`cart_id`), ADD KEY `items_user_id_sku_order_id_index` (`user_id`,`sku`,`order_id`), ADD KEY `items_reference_id_index` (`reference_id`);

--
-- Indexes for table `links`
--
ALTER TABLE `links`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`), ADD KEY `orders_statuscode_foreign` (`statusCode`), ADD KEY `orders_user_id_statuscode_index` (`user_id`,`statusCode`), ADD KEY `orders_id_user_id_statuscode_index` (`id`,`user_id`,`statusCode`);

--
-- Indexes for table `order_status`
--
ALTER TABLE `order_status`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `password_reminders`
--
ALTER TABLE `password_reminders`
  ADD KEY `password_reminders_email_index` (`email`), ADD KEY `password_reminders_token_index` (`token`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_like`
--
ALTER TABLE `post_like`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `social_login`
--
ALTER TABLE `social_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`), ADD KEY `transactions_order_id_index` (`order_id`), ADD KEY `transactions_gateway_transaction_id_index` (`gateway`,`transaction_id`), ADD KEY `transactions_order_id_token_index` (`order_id`,`token`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=51;
--
-- AUTO_INCREMENT for table `chat_messages`
--
ALTER TABLE `chat_messages`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `games`
--
ALTER TABLE `games`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `links`
--
ALTER TABLE `links`
  MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `post_like`
--
ALTER TABLE `post_like`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `social_login`
--
ALTER TABLE `social_login`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
