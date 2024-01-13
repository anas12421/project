-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2024 at 03:13 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `protfoliock-1`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner_text` varchar(255) NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `banner_text`, `image`, `created_at`, `updated_at`) VALUES
(3, 'GET OUR APP - 20% OFF', 'admin/banner-image/274778634.jpg', '2023-12-16 16:30:53', '2023-12-29 12:57:12');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` int(11) NOT NULL,
  `text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `number`, `text`, `created_at`, `updated_at`) VALUES
(3, 'Naimur', 'naimur.rahman.durjoy18@gmail.com', 1700661792, 'fgjegfdoijnnjou iocuetwrnhc iouyervn9t ioujio8yunbvwe uy97ywbnevtnu9weut0v8wpeut90vrweut0897nretuv4053op 987ywe98v5rt08pwevn09875v4', '2023-12-31 12:03:09', '2023-12-31 12:03:09');

-- --------------------------------------------------------

--
-- Table structure for table `currencies`
--

CREATE TABLE `currencies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `EUR` varchar(255) NOT NULL,
  `GEP` varchar(255) NOT NULL,
  `AUD` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `currencies`
--

INSERT INTO `currencies` (`id`, `EUR`, `GEP`, `AUD`, `created_at`, `updated_at`) VALUES
(1, '.90', '30.80', '1.46', NULL, '2023-12-27 10:59:28');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `address` text DEFAULT NULL,
  `date_of_birth` varchar(255) DEFAULT NULL,
  `nid` varchar(255) DEFAULT NULL,
  `image` text DEFAULT NULL,
  `blood_group` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `mobile`, `password`, `address`, `date_of_birth`, `nid`, `image`, `blood_group`, `created_at`, `updated_at`) VALUES
(5, 'Naimur', 'Rahman', 'naimur.rahman18@northsouth.edu', '0', '$2y$12$hSnT8HijcMtb9y8vtUIGm.cB.yQQrDgIsLrJeEeO5mnxQRalsTa7O', NULL, NULL, NULL, 'admin/profile-image/1701486117.jpg', NULL, '2023-12-20 14:01:45', '2023-12-20 15:24:16'),
(6, 'Alamin', 'Rahman', 'naimur.rahman.durjoy18@gmail.com', '+8801700661792', '$2y$12$CTGS2vz7w8qVaqV2w7VRq.Gzbr/stobeDPjGHs9DLoctBQfTLvHbO', NULL, NULL, NULL, 'admin/profile-image/2114007794.png', NULL, '2023-12-21 10:34:09', '2023-12-21 10:35:12'),
(7, 'Rakib', 'Rahman', 'rakib11@gmail.com', '+8801500661711', '$2y$12$lvquE68C/lxDZFTDuRTJDOOMS4Gp5uAOlzMabfruXLXTiERasUAf2', NULL, NULL, NULL, 'admin/profile-image/1336815691.jpg', NULL, '2023-12-22 15:03:58', '2023-12-22 15:04:30');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `journeys`
--

CREATE TABLE `journeys` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `journey_text` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `link` text NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `journeys`
--

INSERT INTO `journeys` (`id`, `journey_text`, `date`, `link`, `image`, `created_at`, `updated_at`) VALUES
(1, 'IFMH Logo Made for My Youtube Banner I made IFMH logo and vlog intro video then changed all my social media handles to @ifindmyselfhere', 'December 2022', 'https://www.youtube.com/watch?v=5Kh5cAYCWFc&list=RDN7hRliNblZ4&index=17', 'admin/journey-image/1520885788.jpg', '2023-12-29 12:14:30', '2023-12-29 12:14:30'),
(3, 'IFMH Logo Made for My Youtube Banner I made IFMH logo and vlog intro video then changed all myfsgfshgfsh social media handles to @ifindmyselfhere', 'December 2023', 'https://www.youtube.com/watch?v=DbEAi_hlHc0&list=RDIADNLugD6nE&index=7', 'admin/journey-image/1523521012.jpg', '2023-12-29 12:21:42', '2023-12-29 12:37:28');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(7, '2023_12_01_080201_create_slides_table', 1),
(8, '2014_10_12_000000_create_users_table', 2),
(9, '2014_10_12_100000_create_password_reset_tokens_table', 2),
(10, '2014_10_12_200000_add_two_factor_columns_to_users_table', 2),
(11, '2019_08_19_000000_create_failed_jobs_table', 2),
(12, '2019_12_14_000001_create_personal_access_tokens_table', 2),
(13, '2023_11_30_212321_create_sessions_table', 2),
(14, '2023_12_16_213009_create_banners_table', 2),
(15, '2023_12_16_215209_create_products_table', 2),
(16, '2023_12_17_112947_create_customers_table', 3),
(17, '2023_12_17_175652_create_missions_table', 4),
(18, '2023_12_22_195521_create_orders_table', 5),
(21, '2023_12_22_203241_create_order_details_table', 6),
(22, '2023_12_27_154458_create_currencies_table', 7),
(23, '2023_12_29_175611_create_journeys_table', 8),
(24, '2023_12_31_045439_create_social__media_table', 9),
(25, '2023_12_31_073304_create_contacts_table', 10),
(26, '2023_12_31_181934_create_subscribes_table', 11),
(27, '2024_01_01_171212_create_reviews_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `missions`
--

CREATE TABLE `missions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `mission_text` longtext NOT NULL,
  `image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `missions`
--

INSERT INTO `missions` (`id`, `mission_text`, `image`, `created_at`, `updated_at`) VALUES
(1, '<h2>Paraphrasing Tool — Free paraphrasing tool: rewrite any paragraph or article. Try 8 different rewriting modes. Write better, faster, and clearer with the free paraphrasing tool millions trust. Paraphrase Generator. Used by Millions.<br></h2><br><br>I Find Myself Here is the story of the journey of life. Here is what you made it and what you make it. Harvest “Here” is the manifestation of your seed “I Find” and time “Myself”. Like the seasons for a farmer – Seed, Time, Harvest; our unique circumstances and journeys will always lead us here – at our current location and state of mind. If you feel lost, being found is a easy as planting new seeds. These seeds can be positive conversations and declarations or new routines and expectations. Then, give yourself time to adapt and grow. I Find Myself Here is for everyone who desires to live their best life in every season.<br>', 'admin/mission-image/1494270133.png', '2023-12-17 13:21:47', '2023-12-17 16:54:16');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `order_date` text NOT NULL,
  `order_timestamp` text NOT NULL,
  `order_total` int(11) NOT NULL,
  `order_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `tax_total` double(10,2) DEFAULT NULL,
  `shipping_total` double(10,2) DEFAULT NULL,
  `delivery_address` text NOT NULL,
  `delivery_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `payment_status` varchar(255) NOT NULL DEFAULT 'Pending',
  `currency` varchar(255) NOT NULL DEFAULT 'USD',
  `transaction_id` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `order_date`, `order_timestamp`, `order_total`, `order_status`, `tax_total`, `shipping_total`, `delivery_address`, `delivery_status`, `payment_status`, `currency`, `transaction_id`, `created_at`, `updated_at`) VALUES
(8, 7, '2023-12-22', '1703221200', 5000, 'Pending', NULL, NULL, 'Bashundhara', 'Pending', 'Pending', 'USD', NULL, '2023-12-22 15:03:58', '2023-12-22 15:03:58'),
(9, 7, '2023-12-22', '1703221200', 5000, 'Cencel', NULL, NULL, 'Khulna', 'Processing', 'Pending', 'USD', NULL, '2023-12-22 15:16:02', '2024-01-01 09:53:00'),
(10, 7, '2023-12-22', '1703221200', 3750, 'Processing', NULL, NULL, 'Bashundhara', 'Complete', 'Pending', 'USD', NULL, '2023-12-22 15:16:49', '2023-12-22 15:31:54'),
(11, 5, '2023-12-28', '1703739600', 7500, 'Complete', NULL, NULL, 'Bashundhara', 'Complete', 'Pending', 'USD', NULL, '2023-12-28 10:26:19', '2024-01-01 09:52:36'),
(21, 5, '2024-01-01', '1704085200', 2500, 'Complete', NULL, NULL, 'Bashundhara', 'Complete', 'Pending', 'USD', NULL, '2024-01-01 11:25:04', '2024-01-01 11:25:35'),
(23, 5, '2024-01-01', '1704085200', 6250, 'Complete', NULL, NULL, 'Bashundhara', 'Complete', 'Pending', 'USD', NULL, '2024-01-01 13:21:11', '2024-01-01 13:21:23');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_price` int(11) NOT NULL,
  `product_color` varchar(225) DEFAULT NULL,
  `product_size` varchar(255) DEFAULT 'Aviable',
  `review` int(11) NOT NULL DEFAULT 0,
  `product_qty` int(11) NOT NULL,
  `product_image` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_color`, `product_size`, `review`, `product_qty`, `product_image`, `created_at`, `updated_at`) VALUES
(1, 6, 7, 'IFMH Logo 2 Gold - Black $30 (2 for $50)', 2500, NULL, 'l', 0, 1, 'admin/product-image/1314509240.png', '2023-12-22 14:56:06', '2023-12-22 14:56:06'),
(3, 8, 7, 'IFMH Logo 2 Gold - Black $30 (2 for $50)', 2500, NULL, NULL, 0, 2, 'admin/product-image/1314509240.png', '2023-12-22 15:03:58', '2023-12-22 15:03:58'),
(4, 9, 8, 'Premium Gap Deep Green Hoodie', 2500, NULL, 'm', 1, 2, 'admin/product-image/897388375.png', '2023-12-22 15:16:02', '2024-01-01 13:36:13'),
(5, 10, 8, 'Premium Gap Deep Green Hoodie', 2500, NULL, NULL, 0, 1, 'admin/product-image/897388375.png', '2023-12-22 15:16:50', '2023-12-22 15:16:50'),
(6, 10, 9, 'Payra Half Silk Saree', 1250, NULL, NULL, 0, 1, 'admin/product-image/375338585.png', '2023-12-22 15:16:50', '2023-12-22 15:16:50'),
(7, 11, 7, 'IFMH Logo 2 Gold - Black $30 (2 for $50)', 2500, NULL, NULL, 0, 1, 'admin/product-image/1314509240.png', '2023-12-28 10:26:19', '2023-12-28 10:26:19'),
(8, 11, 8, 'Premium Gap Deep Green Hoodie', 2500, NULL, NULL, 1, 2, 'admin/product-image/897388375.png', '2023-12-28 10:26:20', '2024-01-01 13:32:26'),
(18, 21, 7, 'IFMH Logo 2 Gold - Black $30 (2 for $50)', 2500, 'White', 'l', 0, 1, 'admin/product-image/1314509240.png', '2024-01-01 11:25:04', '2024-01-01 11:25:04'),
(21, 23, 8, 'Premium Gap Deep Green Hoodie', 2500, 'Brown', NULL, 1, 1, 'admin/product-image/897388375.png', '2024-01-01 13:21:11', '2024-01-01 13:54:17'),
(22, 23, 7, 'IFMH Logo 2 Gold - Black $30 (2 for $50)', 2500, 'White', 'l', 0, 1, 'admin/product-image/1314509240.png', '2024-01-01 13:21:12', '2024-01-01 13:21:12'),
(23, 23, 9, 'Payra Half Silk Saree', 1250, 'Red', 'm', 0, 1, 'admin/product-image/494911683.jpg', '2024-01-01 13:21:12', '2024-01-01 13:21:12');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `product_stock` int(11) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `product_color` varchar(255) NOT NULL,
  `s` int(11) DEFAULT NULL,
  `m` int(11) DEFAULT NULL,
  `l` int(11) DEFAULT NULL,
  `xl` int(11) DEFAULT NULL,
  `xxl` int(11) DEFAULT NULL,
  `image` text NOT NULL,
  `image_back` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `price`, `product_stock`, `product_code`, `product_color`, `s`, `m`, `l`, `xl`, `xxl`, `image`, `image_back`, `created_at`, `updated_at`) VALUES
(7, 'IFMH Logo 2 Gold - Black $30 (2 for $50)', 2500, 15, 'B104', 'White', NULL, 1, 1, 1, 1, 'admin/product-image/1314509240.png', 'admin/product-image/254358001.png', '2023-12-17 03:37:22', '2023-12-31 14:43:14'),
(8, 'Premium Gap Deep Green Hoodie', 2500, 11, 'B103', 'Brown', 1, 1, 1, 1, NULL, 'admin/product-image/897388375.png', 'admin/product-image/529574832.png', '2023-12-17 03:37:55', '2024-01-01 09:30:55'),
(9, 'Payra Half Silk Saree', 1250, 15, 'B103', 'Red', NULL, 1, 1, 1, NULL, 'admin/product-image/494911683.jpg', 'admin/product-image/1361242871.jpg', '2023-12-17 16:38:55', '2024-01-01 09:35:45'),
(10, 'Putul Half Silk Saree', 2500, 10, 'B103', 'Pink', NULL, 1, 1, 1, NULL, 'admin/product-image/1844153914.png', 'admin/product-image/1349876529.png', '2023-12-18 17:35:30', '2023-12-31 13:45:28'),
(11, 'Premium Gap Deep Black Hoodie', 2500, 5, 'B103', 'Black', NULL, 1, 1, NULL, NULL, 'admin/product-image/874046919.png', 'admin/product-image/25124413.jpeg', '2023-12-31 14:43:00', '2023-12-31 14:43:00');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `revire_text` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('0mMn7fIQdG90Sw6lHKBXwZGherPl5tHteOWzRKvv', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWFhzYmt2YXpoaXM5YzFyVVJRR04wTEpBN0l5Tzd1RHlZOXZHNzhRciI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvcHJvdGZvbGlvQ2stMS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1704204575),
('74Jee2jAC9ySag2VDgnthTfGCa1bMYq7nyzOsxZi', 2, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YToxNDp7czo2OiJfdG9rZW4iO3M6NDA6ImprbXlUbWNIb1liWUJGTUtRRkRkMThxUmJTYkhEd0pPQ1BkZHF1YTYiO3M6OToiX3ByZXZpb3VzIjthOjE6e3M6MzoidXJsIjtzOjUyOiJodHRwOi8vbG9jYWxob3N0L3Byb3Rmb2xpb0NrLTEvcHVibGljL2N1c3RvbWVyLW9yZGVyIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czoxMToiY3VzdG9tZXJfaWQiO2k6NTtzOjEzOiJjdXN0b21lcl9uYW1lIjtzOjEzOiJOYWltdXIgUmFobWFuIjtzOjEzOiJzaG9wcGluZ19jYXJ0IjthOjE6e3M6NzoiZGVmYXVsdCI7TzoyOToiSWxsdW1pbmF0ZVxTdXBwb3J0XENvbGxlY3Rpb24iOjI6e3M6ODoiACoAaXRlbXMiO2E6MDp7fXM6Mjg6IgAqAGVzY2FwZVdoZW5DYXN0aW5nVG9TdHJpbmciO2I6MDt9fXM6NToiYWxlcnQiO2E6MDp7fXM6MTE6Im9yZGVyX3RvdGFsIjtpOjYyNTA7czoxMjoib3JkZXJfYW1vdW50IjtpOjYyNTA7czo4OiJvcmRlcl9pZCI7aToyMztzOjM6InVybCI7YTowOnt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMiRNTmtib015Z29sWXFXYXkzb2hKZXdlbkFjZmRHeXpORlBBNy5qOWJROWtKalg2RTcxa0lqZSI7czo4OiJjdXJyZW5jeSI7czozOiJFVVIiO30=', 1704157517),
('hmTCSlPbRfshu3yLrgAiWE265rpPvOpTsTcykJ3X', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiSThKUzJDWkZ2Vmx3YzdLT21za0FCSEpncEpTTnIyczhmRG5FRWxlRiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvcHJvdGZvbGlvQ2stMS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1704204575),
('tauDXjWYUQDH2mzJgXzHDGhZZJlVdQttkGOUfoMa', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoieFVTYnFyaFJkRjNvYUVDV05vMkNPTkFwOThsTE1lZTMxZFFFVThDcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly9sb2NhbGhvc3QvcHJvdGZvbGlvQ2stMS9wdWJsaWMvY3VzdG9tZXItbG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX19', 1704187922),
('tlQzMkqPhv0abcoPMhP13pYdvYUddy8ANMCYTsXP', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo4OntzOjY6Il90b2tlbiI7czo0MDoiQUpwOHM1WnpGSGt0YU5EMXRWak8xSkhLc21DUExFTEUyY1VSOWk3byI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvcHJvdGZvbGlvQ2stMS9wdWJsaWMiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjg6ImN1cnJlbmN5IjtzOjM6IkVVUiI7czo2OiJzZWFyY2giO3M6NToic2FyZWUiO3M6MTM6InNob3BwaW5nX2NhcnQiO2E6MTp7czo3OiJkZWZhdWx0IjtPOjI5OiJJbGx1bWluYXRlXFN1cHBvcnRcQ29sbGVjdGlvbiI6Mjp7czo4OiIAKgBpdGVtcyI7YToxOntzOjMyOiJlZWQ2N2NkZWMyNTZlNGNhZjhkOGI1MzRkZmM4ZWEyMCI7TzozMzoiT3ZlcnRydWVcTGFyYXZlbFNob3BwaW5nQ2FydFxJdGVtIjozOntzOjg6IgAqAGl0ZW1zIjthOjExOntzOjg6Il9fcmF3X2lkIjtzOjMyOiJlZWQ2N2NkZWMyNTZlNGNhZjhkOGI1MzRkZmM4ZWEyMCI7czoyOiJpZCI7aToxMDtzOjQ6Im5hbWUiO3M6MjE6IlB1dHVsIEhhbGYgU2lsayBTYXJlZSI7czozOiJxdHkiO3M6MToiMiI7czo1OiJwcmljZSI7aToyNTAwO3M6NToidG90YWwiO2k6NTAwMDtzOjc6Il9fbW9kZWwiO047czo1OiJpbWFnZSI7czozNDoiYWRtaW4vcHJvZHVjdC1pbWFnZS8xODQ0MTUzOTE0LnBuZyI7czo1OiJjb2xvciI7czo0OiJQaW5rIjtzOjU6ImNoZWNrIjtOO3M6NDoic2l6ZSI7czoxOiJsIjt9czoyODoiACoAZXNjYXBlV2hlbkNhc3RpbmdUb1N0cmluZyI7YjowO3M6ODoiACoAbW9kZWwiO047fX1zOjI4OiIAKgBlc2NhcGVXaGVuQ2FzdGluZ1RvU3RyaW5nIjtiOjA7fX1zOjU6ImFsZXJ0IjthOjA6e31zOjExOiJvcmRlcl90b3RhbCI7aTo1MDAwO30=', 1704204700),
('younOIyJiYAoAS6cMZQwbo06wVsiwvWVGp04bUFD', NULL, '::1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/120.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiZzdVVjF5TnlEYjRsUk1razl3WmJvbUR5Y3oxM2hKTXRmb20zVnd4cSI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NTI6Imh0dHA6Ly9sb2NhbGhvc3QvcHJvdGZvbGlvQ2stMS9wdWJsaWMvY3VzdG9tZXItb3JkZXIiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjExOiJjdXN0b21lcl9pZCI7aTo1O3M6MTM6ImN1c3RvbWVyX25hbWUiO3M6MTM6Ik5haW11ciBSYWhtYW4iO30=', 1704187972);

-- --------------------------------------------------------

--
-- Table structure for table `social__media`
--

CREATE TABLE `social__media` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `instagram` text DEFAULT '#',
  `fb` text DEFAULT '#',
  `youtube` text DEFAULT '#',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `social__media`
--

INSERT INTO `social__media` (`id`, `instagram`, `fb`, `youtube`, `created_at`, `updated_at`) VALUES
(1, '#', 'https://www.facebook.com/NaimurRahmanDurjoy11', '#', NULL, '2023-12-31 00:40:33');

-- --------------------------------------------------------

--
-- Table structure for table `subscribes`
--

CREATE TABLE `subscribes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subscribes`
--

INSERT INTO `subscribes` (`id`, `email`, `created_at`, `updated_at`) VALUES
(3, 'naimur.rahman.durjoy18@gmail.com', '2023-12-31 12:37:03', '2023-12-31 12:37:03'),
(4, 'naimurdurjoy18@gmail.com', '2023-12-31 12:43:10', '2023-12-31 12:43:10');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(2, 'Naimur Rahman', 'naimur.rahman18@northsouth.edu', NULL, '$2y$12$MNkboMygolYqWay3ohJewenAcfdGyzNFPA7.j9bQ9kJjX6E71kIje', NULL, NULL, NULL, NULL, NULL, NULL, '2023-12-29 14:14:43', '2023-12-29 14:14:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `currencies`
--
ALTER TABLE `currencies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `journeys`
--
ALTER TABLE `journeys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `missions`
--
ALTER TABLE `missions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `social__media`
--
ALTER TABLE `social__media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscribes`
--
ALTER TABLE `subscribes`
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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `currencies`
--
ALTER TABLE `currencies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `journeys`
--
ALTER TABLE `journeys`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `missions`
--
ALTER TABLE `missions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `social__media`
--
ALTER TABLE `social__media`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `subscribes`
--
ALTER TABLE `subscribes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
