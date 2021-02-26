-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2020 at 08:51 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `test9`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `sumary` varchar(255) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `prioty` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `sumary`, `link`, `status`, `prioty`, `created_at`, `updated_at`, `image`) VALUES
(1, '1', '1', '1', 0, 1, '2020-12-20 23:04:15', '2020-12-20 23:04:15', '1608530655-1.jpg'),
(2, '2', '2', '2', 0, 2, '2020-12-20 23:04:25', '2020-12-20 23:04:25', '1608530665-2.jpg'),
(3, '3', '3', '3', 0, 3, '2020-12-20 23:04:37', '2020-12-20 23:04:37', '1608530677-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `title` varchar(150) NOT NULL,
  `sumary` varchar(255) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `status` tinyint(4) DEFAULT 1,
  `prioty` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `sumary`, `link`, `status`, `prioty`, `created_at`, `updated_at`, `image`) VALUES
(1, '1', '1', '1', 0, 1, '2020-12-20 23:05:06', '2020-12-20 23:05:06', '1608530706-1.png'),
(2, '2', '2', '2', 1, 2, '2020-12-20 23:05:21', '2020-12-20 23:05:21', '1608530721-2.png'),
(3, '3', '3', '3', 0, 3, '2020-12-20 23:05:36', '2020-12-20 23:05:36', '1608530736-3.png'),
(4, '4', '4', '4', 0, 4, '2020-12-20 23:06:09', '2020-12-20 23:06:09', '1608530769-4.png'),
(5, '5', '5', '5', 0, 5, '2020-12-20 23:06:50', '2020-12-20 23:06:50', '1608530810-5.png'),
(6, '6', '6', '6', 0, 6, '2020-12-20 23:07:11', '2020-12-20 23:07:11', '1608530831-6.png'),
(7, '7', '7', '7', 0, 7, '2020-12-20 23:07:24', '2020-12-20 23:07:24', '1608530844-7.png');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `link` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(4) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `link`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Men wallet', 'Men wallet', '', 0, '2020-12-17 15:37:58', '2020-12-17 15:37:58'),
(2, 'Wallet', 'Wallet', '', 0, '2020-12-17 15:39:49', '2020-12-17 15:39:49'),
(3, 'Bags', 'bags', '', NULL, '2020-12-17 15:40:00', '2020-12-17 15:40:00'),
(4, 'Backpack', 'Backpack', '', NULL, '2020-12-17 15:42:12', '2020-12-17 15:42:12'),
(5, 'Hand bag', 'Hand bag', '', NULL, '2020-12-17 15:42:44', '2020-12-17 15:42:44'),
(6, 'Office bag', 'Office bag', '', 0, '2020-12-17 15:44:33', '2020-12-19 20:22:48');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(11) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2020_06_04_000001_create_permissions_table', 1),
(8, '2020_06_04_000002_create_roles_table', 1),
(9, '2020_06_04_000003_create_users_table', 1),
(10, '2020_06_04_000007_create_permission_role_pivot_table', 1),
(11, '2020_06_04_000008_create_role_user_pivot_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `address` varchar(200) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `payment_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_detail`
--

CREATE TABLE `order_detail` (
  `id` int(11) NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `size` varchar(50) NOT NULL,
  `color` varchar(50) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `status` tinyint(4) DEFAULT 1,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'paypal', 1, '2020-12-23 01:11:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'user_management_access', NULL, NULL, NULL),
(2, 'permission_create', NULL, NULL, NULL),
(3, 'permission_edit', NULL, NULL, NULL),
(4, 'permission_show', NULL, NULL, NULL),
(5, 'permission_delete', NULL, NULL, NULL),
(6, 'permission_access', NULL, NULL, NULL),
(7, 'role_create', NULL, NULL, NULL),
(8, 'role_edit', NULL, NULL, NULL),
(9, 'role_show', NULL, NULL, NULL),
(10, 'role_delete', NULL, NULL, NULL),
(11, 'role_access', NULL, NULL, NULL),
(12, 'user_create', NULL, NULL, NULL),
(13, 'user_edit', NULL, NULL, NULL),
(14, 'user_show', NULL, NULL, NULL),
(15, 'user_delete', NULL, NULL, NULL),
(16, 'user_access', NULL, NULL, NULL),
(32, 'profile_password_edit', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(1, 6),
(1, 7),
(1, 8),
(1, 9),
(1, 10),
(1, 11),
(1, 12),
(1, 13),
(1, 14),
(1, 15),
(1, 16),
(1, 32),
(2, 32);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `categories_id` int(11) NOT NULL,
  `p_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sumary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `sale_price` double NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `categories_id`, `p_name`, `p_code`, `description`, `sumary`, `price`, `sale_price`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 'Wallet handmade', 'wallet-handmade', 'Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains’ signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.\r\n\r\n- Casual unisex fit\r\n\r\n- 64% polyester, 36% polyurethane\r\n\r\n- Water column pressure: 4000 mm\r\n\r\n- Model is 187cm tall and wearing a size S / M\r\n\r\n- Unisex fit\r\n\r\n- Drawstring hood with built-in cap\r\n\r\n- Front placket with snap buttons\r\n\r\n- Ventilation under armpit\r\n\r\n- Adjustable cuffs\r\n\r\n- Double welted front pockets\r\n\r\n- Adjustable elastic string at hempen\r\n\r\n- Ultrasonically welded seams\r\n\r\nThis is a unisex item, please check our clothing & footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.', 'dsada', 232.00, 312, '1608572388-wallet-handmade.jpg', '2020-12-19 20:46:41', '2020-12-21 10:39:48'),
(2, 3, 'Clutch handmade', 'clutch-handmade', 'Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.\r\nShort Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains’ signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.\r\n\r\n- Casual unisex fit\r\n\r\n- 64% polyester, 36% polyurethane\r\n\r\n- Water column pressure: 4000 mm\r\n\r\n- Model is 187cm tall and wearing a size S / M\r\n\r\n- Unisex fit\r\n\r\n- Drawstring hood with built-in cap\r\n\r\n- Front placket with snap buttons\r\n\r\n- Ventilation under armpit\r\n\r\n- Adjustable cuffs\r\n\r\n- Double welted front pockets\r\n\r\n- Adjustable elastic string at hempen\r\n\r\n- Ultrasonically welded seams\r\n\r\nThis is a unisex item, please check our clothing & footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.', '', 402.00, 0, '1608436495-clutch-handmade.jpg', '2020-12-19 20:54:55', '2020-12-19 20:54:55'),
(3, 1, 'Gucci Zip Around Wallet', 'GZ', 'Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.\r\nShort Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains’ signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.\r\n\r\n- Casual unisex fit\r\n\r\n- 64% polyester, 36% polyurethane\r\n\r\n- Water column pressure: 4000 mm\r\n\r\n- Model is 187cm tall and wearing a size S / M\r\n\r\n- Unisex fit\r\n\r\n- Drawstring hood with built-in cap\r\n\r\n- Front placket with snap buttons\r\n\r\n- Ventilation under armpit\r\n\r\n- Adjustable cuffs\r\n\r\n- Double welted front pockets\r\n\r\n- Adjustable elastic string at hempen\r\n\r\n- Ultrasonically welded seams\r\n\r\nThis is a unisex item, please check our clothing & footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.', '', 236.00, 0, '1608436691-gucci-zip-around-wallet.jpg', '2020-12-19 20:58:11', '2020-12-19 20:58:11'),
(4, 2, 'Snapshot Standard', 'snapshot-standard', 'Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains’ signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.\r\n\r\n- Casual unisex fit\r\n\r\n- 64% polyester, 36% polyurethane\r\n\r\n- Water column pressure: 4000 mm\r\n\r\n- Model is 187cm tall and wearing a size S / M\r\n\r\n- Unisex fit\r\n\r\n- Drawstring hood with built-in cap\r\n\r\n- Front placket with snap buttons\r\n\r\n- Ventilation under armpit\r\n\r\n- Adjustable cuffs\r\n\r\n- Double welted front pockets\r\n\r\n- Adjustable elastic string at hempen\r\n\r\n- Ultrasonically welded seams\r\n\r\nThis is a unisex item, please check our clothing & footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.', '', 257.00, 0, '1608436911-snapshot-standard.jpg', '2020-12-19 21:01:52', '2020-12-19 21:01:52'),
(5, 3, 'Joan Mini Camera Bag', 'JMCB', 'Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.\r\nShort Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains’ signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.\r\n\r\n- Casual unisex fit\r\n\r\n- 64% polyester, 36% polyurethane\r\n\r\n- Water column pressure: 4000 mm\r\n\r\n- Model is 187cm tall and wearing a size S / M\r\n\r\n- Unisex fit\r\n\r\n- Drawstring hood with built-in cap\r\n\r\n- Front placket with snap buttons\r\n\r\n- Ventilation under armpit\r\n\r\n- Adjustable cuffs\r\n\r\n- Double welted front pockets\r\n\r\n- Adjustable elastic string at hempen\r\n\r\n- Ultrasonically welded seams\r\n\r\nThis is a unisex item, please check our clothing & footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.', '', 90.00, 0, '1608437632-joan-mini-camera-bag.jpg', '2020-12-19 21:13:53', '2020-12-19 21:13:53'),
(6, 3, 'bagsad', 'dasd', 'Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.\r\nShort Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains’ signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.\r\n\r\n- Casual unisex fit\r\n\r\n- 64% polyester, 36% polyurethane\r\n\r\n- Water column pressure: 4000 mm\r\n\r\n- Model is 187cm tall and wearing a size S / M\r\n\r\n- Unisex fit\r\n\r\n- Drawstring hood with built-in cap\r\n\r\n- Front placket with snap buttons\r\n\r\n- Ventilation under armpit\r\n\r\n- Adjustable cuffs\r\n\r\n- Double welted front pockets\r\n\r\n- Adjustable elastic string at hempen\r\n\r\n- Ultrasonically welded seams\r\n\r\nThis is a unisex item, please check our clothing & footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.', '', 123.00, 0, '1608438201-bagsad.jpg', '2020-12-19 21:23:21', '2020-12-19 21:23:21'),
(7, 5, 'handbag', 'handbag', 'Short Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline.\r\nShort Hooded Coat features a straight body, large pockets with button flaps, ventilation air holes, and a string detail along the hemline. The style is completed with a drawstring hood, featuring Rains’ signature built-in cap. Made from waterproof, matte PU, this lightweight unisex rain jacket is an ode to nostalgia through its classic silhouette and utilitarian design details.\r\n\r\n- Casual unisex fit\r\n\r\n- 64% polyester, 36% polyurethane\r\n\r\n- Water column pressure: 4000 mm\r\n\r\n- Model is 187cm tall and wearing a size S / M\r\n\r\n- Unisex fit\r\n\r\n- Drawstring hood with built-in cap\r\n\r\n- Front placket with snap buttons\r\n\r\n- Ventilation under armpit\r\n\r\n- Adjustable cuffs\r\n\r\n- Double welted front pockets\r\n\r\n- Adjustable elastic string at hempen\r\n\r\n- Ultrasonically welded seams\r\n\r\nThis is a unisex item, please check our clothing & footwear sizing guide for specific Rains jacket sizing information. RAINS comes from the rainy nation of Denmark at the edge of the European continent, close to the ocean and with prevailing westerly winds; all factors that contribute to an average of 121 rain days each year. Arising from these rainy weather conditions comes the attitude that a quick rain shower may be beautiful, as well as moody- but first and foremost requires the right outfit. Rains focus on the whole experience of going outside on rainy days, issuing an invitation to explore even in the most mercurial weather.', '', 123.00, 0, '1608438234-handbag.jpg', '2020-12-19 21:23:54', '2020-12-19 21:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `product_att`
--

CREATE TABLE `product_att` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `sku` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `stock` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_att`
--

INSERT INTO `product_att` (`id`, `products_id`, `sku`, `size`, `p_color`, `price`, `stock`, `created_at`, `updated_at`) VALUES
(35, 52, 'sadad', 'S', 'S', 13.00, 13, '2020-12-19 05:32:15', '2020-12-19 05:32:15'),
(36, 1, 'wallet-handmade-black-m', 'M', 'Black', 0.00, 4, '2020-12-19 20:49:25', '2020-12-19 20:49:25'),
(37, 1, 'wallet-handmade-green-m', 'M', 'Green', 0.00, 4, '2020-12-19 20:49:42', '2020-12-19 20:49:42'),
(38, 2, 'clutch-handmade-red-s', 'S', 'Red', 12.00, 15, '2020-12-19 20:56:20', '2020-12-19 20:56:20'),
(39, 3, 'GZ-green-s', 'S', 'Green', 32.00, 12, '2020-12-19 20:59:23', '2020-12-19 20:59:23'),
(40, 3, 'GZ-blue-s', 'S', 'Blue', 12.00, 13, '2020-12-19 20:59:55', '2020-12-19 20:59:55'),
(41, 3, 'GZ-Red-s', 'S', 'Red', 13.00, 13, '2020-12-19 21:00:18', '2020-12-19 21:00:18'),
(43, 5, 'HS-165-A0', 'XXL', 'Black', 13.00, 31, '2020-12-19 21:14:54', '2020-12-19 21:14:54'),
(44, 8, '13', 'S', 'Green', 1.00, 1, '2020-12-21 10:06:54', '2020-12-21 10:06:54');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', NULL, NULL, NULL),
(2, 'User', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`user_id`, `role_id`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `tblgallery`
--

CREATE TABLE `tblgallery` (
  `id` int(10) UNSIGNED NOT NULL,
  `products_id` int(11) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tblgallery`
--

INSERT INTO `tblgallery` (`id`, `products_id`, `image`, `created_at`, `updated_at`) VALUES
(35, 49, '4929541608375024.jpg', '2020-12-19 03:50:24', '2020-12-19 03:50:24'),
(36, 49, '5092711608375024.jpg', '2020-12-19 03:50:24', '2020-12-19 03:50:24'),
(37, 49, '1738181608375024.jpg', '2020-12-19 03:50:24', '2020-12-19 03:50:24'),
(38, 49, '6064251608375024.jpg', '2020-12-19 03:50:24', '2020-12-19 03:50:24'),
(39, 49, '4750551608375024.jpg', '2020-12-19 03:50:24', '2020-12-19 03:50:24'),
(40, 50, '6071611608375190.jpg', '2020-12-19 03:53:11', '2020-12-19 03:53:11'),
(41, 50, '9391731608375191.jpg', '2020-12-19 03:53:11', '2020-12-19 03:53:11'),
(42, 50, '6771931608375191.jpg', '2020-12-19 03:53:11', '2020-12-19 03:53:11'),
(43, 50, '3283011608375191.jpg', '2020-12-19 03:53:11', '2020-12-19 03:53:11'),
(44, 51, '5129871608375817.jpg', '2020-12-19 04:03:37', '2020-12-19 04:03:37'),
(45, 51, '4566681608375817.jpg', '2020-12-19 04:03:37', '2020-12-19 04:03:37'),
(46, 51, '9557891608375817.jpg', '2020-12-19 04:03:37', '2020-12-19 04:03:37'),
(47, 51, '3631441608375817.jpg', '2020-12-19 04:03:37', '2020-12-19 04:03:37'),
(48, 1, '8173591608436068.jpg', '2020-12-19 20:47:48', '2020-12-19 20:47:48'),
(49, 1, '3161451608436068.jpg', '2020-12-19 20:47:48', '2020-12-19 20:47:48'),
(50, 2, '1569931608436510.jpg', '2020-12-19 20:55:10', '2020-12-19 20:55:10'),
(51, 2, '9031261608436510.jpg', '2020-12-19 20:55:10', '2020-12-19 20:55:10'),
(52, 2, '5866311608436510.jpg', '2020-12-19 20:55:10', '2020-12-19 20:55:10'),
(53, 2, '1603991608436510.jpg', '2020-12-19 20:55:11', '2020-12-19 20:55:11'),
(54, 3, '4426551608436714.jpg', '2020-12-19 20:58:34', '2020-12-19 20:58:34'),
(55, 3, '8859791608436714.jpg', '2020-12-19 20:58:35', '2020-12-19 20:58:35'),
(56, 3, '7173641608436715.jpg', '2020-12-19 20:58:35', '2020-12-19 20:58:35'),
(57, 3, '528181608436715.jpg', '2020-12-19 20:58:35', '2020-12-19 20:58:35'),
(58, 4, '6617771608436929.jpg', '2020-12-19 21:02:09', '2020-12-19 21:02:09'),
(59, 4, '5816061608436929.jpg', '2020-12-19 21:02:10', '2020-12-19 21:02:10'),
(60, 4, '4039601608436930.jpg', '2020-12-19 21:02:10', '2020-12-19 21:02:10'),
(61, 5, '5395211608437652.jpg', '2020-12-19 21:14:12', '2020-12-19 21:14:12'),
(62, 5, '2965561608437652.jpg', '2020-12-19 21:14:12', '2020-12-19 21:14:12'),
(63, 5, '8196731608437652.jpg', '2020-12-19 21:14:12', '2020-12-19 21:14:12'),
(64, 8, '2622301608438300.jpg', '2020-12-19 21:25:00', '2020-12-19 21:25:00'),
(65, 6, '246961608438326.jpg', '2020-12-19 21:25:26', '2020-12-19 21:25:26'),
(66, 6, '1213371608438326.jpg', '2020-12-19 21:25:26', '2020-12-19 21:25:26'),
(67, 7, '6387301608438337.jpg', '2020-12-19 21:25:38', '2020-12-19 21:25:38'),
(68, 7, '138801608438338.jpg', '2020-12-19 21:25:38', '2020-12-19 21:25:38'),
(69, 7, '2507131608438338.jpg', '2020-12-19 21:25:38', '2020-12-19 21:25:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$XH232IuTQCcPEkbswdv4UeGvuvnj26M1HLKkXtN4Dgx5gyI1WCIMi', NULL, NULL, NULL, NULL),
(2, 'customer', 'customer@email.com', NULL, '$2y$10$FCrx4rrfn8Vs2b8v01gyY.6DOzLJZ3J7wkqE19ERFgFPTx2cTTwf6', 'IiliMal62mYjFENsjCAY0Dg8Q9F5Sue6A7o3zQ3Lb0fqI8ynfPJzRWexjm1O', '2020-12-16 23:41:57', '2020-12-16 23:41:57', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `slug` (`name`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_1586949` (`role_id`),
  ADD KEY `permission_id_fk_1586949` (`permission_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_att`
--
ALTER TABLE `product_att`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_1586958` (`user_id`),
  ADD KEY `role_id_fk_1586958` (`role_id`);

--
-- Indexes for table `tblgallery`
--
ALTER TABLE `tblgallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_detail`
--
ALTER TABLE `order_detail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_att`
--
ALTER TABLE `product_att`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tblgallery`
--
ALTER TABLE `tblgallery`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`payment_id`) REFERENCES `payment` (`id`);

--
-- Constraints for table `order_detail`
--
ALTER TABLE `order_detail`
  ADD CONSTRAINT `order_detail_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`);

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_1586949` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_1586949` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_id_fk_1586958` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `user_id_fk_1586958` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
