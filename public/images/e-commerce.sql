-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 07, 2021 at 05:48 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-commerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(3, 'rohit parashar', 'parasharjirohit@gmail.com', 'Rohit*9542@#', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `url`, `image`, `created_at`, `updated_at`) VALUES
(15, 'Hungry?? Order Fast....', 'http://jmgmedico.epizy.com/?i=1', 'image1618229103.jpg', '2021-04-12 06:35:03', '2021-04-12 06:35:03'),
(16, 'Just Don\'t wait.....Ooooorder Fast!!!!', 'http://foodbuddy.epizy.com/?i=1', 'image1618229404.jpg', '2021-04-12 06:40:04', '2021-04-12 06:40:04');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` int(11) DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `session_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `product_name`, `product_size`, `product_price`, `product_image`, `product_quantity`, `user_email`, `session_id`, `created_at`, `updated_at`) VALUES
(16, 3, 'pizza', NULL, '134', 'product_image1617714069.jpg', '1', NULL, 's34QksGU2Crji0XoUgeSIiiPJitmO2eGE660g1ig', '2021-05-04 06:30:57', '2021-05-04 06:30:57'),
(18, 4, 'burger', NULL, '120', 'product_image1617714156.jpg', '1', 'rohitaman293@gmail.com', 'u9W1WoMXVeM9yyMEGB02oOiMe9odMjPMWkcu72qG', '2021-05-06 08:01:00', '2021-05-06 08:01:00'),
(19, 4, 'burger', NULL, '120', 'product_image1617714156.jpg', '3', 'rohitaman293@gmail.com', 'OtFyvDSTjqYcROoa81p4QFUsN4pEQ182mNjogxWP', '2021-05-07 07:42:47', '2021-05-07 07:42:47'),
(20, 4, 'burger', NULL, '120', 'product_image1617714156.jpg', '2', 'rohitaman293@gmail.com', 'hV1V4o1uPlPIQKfHaQ8n7m82Nns6KP2PGc2lAnLG', '2021-05-07 07:59:33', '2021-05-07 07:59:33');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `status`, `created_at`, `updated_at`) VALUES
(14, 'Non-veg Food', 'dfhdh', 'image1617783211.jpg', 1, '2021-04-07 02:43:31', '2021-04-07 02:43:31'),
(15, 'Chinese', 'dgsdgds', 'image1617783234.jpg', 1, '2021-04-07 02:43:54', '2021-04-07 02:43:54');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `amount` int(11) NOT NULL,
  `amount_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `expiry_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `coupon_code`, `amount`, `amount_type`, `status`, `expiry_date`, `created_at`, `updated_at`) VALUES
(1, 'secret', 1212, 'percentage', '1', '2000-12-24', '2021-03-31 23:54:25', '2021-04-03 02:01:39'),
(2, 'qwer1234', 1234567, 'percentage', '1', '2090-12-12', '2021-04-01 06:08:35', '2021-04-03 02:00:03'),
(3, 'secret', 1234, 'percentage', '1', '2001-12-12', '2021-04-03 01:55:35', '2021-04-03 01:55:35'),
(4, 'qwerty1234', 12345678, 'percentage', '1', '2009-12-12', '2021-04-03 01:56:47', '2021-04-03 01:56:47'),
(5, 'qwertyuiop', 1234, 'percentage', '1', '2012-12-12', '2021-04-06 00:13:42', '2021-04-06 00:13:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` int(255) NOT NULL DEFAULT 0,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `email`, `status`, `password`, `created_at`, `updated_at`) VALUES
(3, 'parasharjirohit@gmail.com', 0, 'Rohitpaaji', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_03_27_035153_create_admins_table', 2),
(5, '2021_03_27_041359_create_categories_table', 2),
(7, '2021_03_28_063837_create_logins_table', 4),
(8, '2021_03_28_082702_create_admins_table', 5),
(9, '2021_03_28_090406_create_categories_table', 6),
(11, '2021_03_31_135708_create_coupons_table', 8),
(12, '2021_04_01_133906_create_banners_table', 9),
(14, '2021_04_06_122934_create_products_table', 11),
(15, '2021_04_07_134404_create_carts_table', 12),
(16, '2021_04_07_135133_create_carts_table', 13),
(17, '2021_04_21_120722_create_admins_table', 14),
(18, '2021_04_26_141119_create_orders_table', 15),
(19, '2021_04_26_141723_create_order_products_table', 16),
(20, '2021_05_03_145138_google_id_column', 17),
(21, '2021_05_03_152322_facebook_id_column', 18);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `useremail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pincode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shipping_charges` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `coupon_amount` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `grand_total` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `useremail`, `name`, `address`, `city`, `state`, `country`, `pincode`, `phone`, `shipping_charges`, `coupon_code`, `coupon_amount`, `order_status`, `payment_method`, `grand_total`, `created_at`, `updated_at`) VALUES
(1, 'parasharjirohit@gmail.com', 'Rohit Parashar', 'ayoydhya', 'gwalior', '3', 'United States', '474001', '09340821225', NULL, NULL, NULL, NULL, 'Cash on delivery', '240', '2021-05-01 05:59:56', '2021-05-01 05:59:56'),
(2, 'parasharjirohit@gmail.com', 'Rohit Parashar ji', 'ayoydhya', 'gwalior', '3', 'United States', '474001', '09340821225', NULL, NULL, NULL, NULL, 'Cash on delivery', '150', '2021-05-04 08:21:59', '2021-05-04 08:21:59');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `useremail` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `order_id` int(11) DEFAULT NULL,
  `product_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` int(11) DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `useremail`, `order_id`, `product_id`, `product_name`, `product_size`, `product_price`, `product_image`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 'parasharjirohit@gmail.com', 1, 4, 'burger', NULL, '120', 'product_image1617714156.jpg', '2', '2021-05-01 05:59:56', '2021-05-01 05:59:56'),
(2, 'parasharjirohit@gmail.com', 2, 6, 'burger', NULL, '150', 'product_image1617714295.jpg', '1', '2021-05-04 08:21:59', '2021-05-04 08:21:59');

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
('parasharjirohit@gmail.com', 'ztOOPB6IZACJEzby1isMdlv9elrQqT1jh0F0WgFb', '2021-05-05 07:14:49'),
('parasharjirohit@gmail.com', 'ubsQLTmdTJ23lX9cUSOp0LZtvwNkaxxq2jprJA9F', '2021-05-05 07:15:23'),
('rohitaman293@gmail.com', '1vZR2qryERIT92CaMIXmTa6sLL2ZQ8wDP9FBFMsy', '2021-05-05 07:22:27'),
('rohitaman293@gmail.com', 'fr70gKyu90slBJrIiAoNxbE7g9tORJ4P3IRHGkBK', '2021-05-05 07:31:38'),
('parasharjirohit@gmail.com', 'A1SC3bY4f0Ej0wik5CE6CklSR97lEsQtt1gXRhRk', '2021-05-05 07:32:49'),
('parasharjirohit@gmail.com', 'aVziA0fgz4Zmsma64weZZKrpCKNT7sybsfKEvfz5', '2021-05-05 07:33:44'),
('parasharjirohit@gmail.com', 'qtouiplUYRXFKvt1MUBXeZdgHX5SET42tPElFqmM', '2021-05-05 07:36:34'),
('parasharjirohit@gmail.com', '7K1SmINv4aR1S7Uuy9QNTTOtnEaChaAZ6bhRoPF4', '2021-05-05 07:44:29'),
('parasharjirohit@gmail.com', 'EPsFhAdJHNgAWfkSmrdbQqTH5sui3DkE4HK6dmiG', '2021-05-05 08:02:25'),
('parasharjirohit@gmail.com', 'zfX50D40kDTHwozKuU8GMaWTsrbZ0vI3JEWtllIY', '2021-05-05 10:07:10'),
('parasharjirohit@gmail.com', 'Nup2kL1hAvnGkFR7wYJrLlQlSFOgxwaX12i8mKn1', '2021-05-05 10:08:54'),
('parasharjirohit@gmail.com', '5JxpFSCj1dSv4MdkSrsbB25W5S7lKCrHNagq8YlE', '2021-05-05 10:10:58'),
('parasharjirohit@gmail.com', 'Xxv2iXerV9V9nrGcP59bjk8uBAHFZ9WlxBdOJVQd', '2021-05-05 10:11:54'),
('parasharjirohit@gmail.com', 'MYqIO96Gh3IfmnM4UDSmzudJDy0tVzO9j4UW6UKo', '2021-05-05 10:13:01'),
('parasharjirohit@gmail.com', 'BA3fnasQoExm4wfXoAVxJcW4BI60OjkWUt1SJj7W', '2021-05-05 10:13:44'),
('parasharjirohit@gmail.com', 'vVoS63ar9mddyThe35v5IYckEKVqiSz4hflTxX9u', '2021-05-05 10:16:37'),
('parasharjirohit@gmail.com', '9d5I3CU4NDSjZWnKXwo1CDnt0nV5QkohDTbZ7Ox3', '2021-05-05 10:17:37'),
('parasharjirohit@gmail.com', 'jXL0RWGZ9nAYwy4721UgyjhRfYvsDbDNkCl8FZpx', '2021-05-05 22:43:41'),
('parasharjirohit@gmail.com', 'd4olRWj1igXS2lecITc7KaMEhRvkbVq5qK9vNxAA', '2021-05-05 22:46:31'),
('parasharjirohit@gmail.com', 'qrTsO1erDWro1YSNmryPV7Df9FJ4ap1EvEFkn1bn', '2021-05-05 23:07:46'),
('rohitaman293@gmail.com', 'cjYW5WUvxW1r2xuYnoktz9t9GN29QXo7CwBiUmqX', '2021-05-05 23:08:20'),
('parasharjirohit@gmail.com', 'Dw9U59V8hYXoJF3T1bKJwxgZZDuOr23RE3xnZKX1', '2021-05-05 23:14:03'),
('parasharjirohit@gmail.com', '12ctI7m9SDHBPLiFctEaB0rivezmxSFm3XuhBT7q', '2021-05-05 23:40:06'),
('parasharjirohit@gmail.com', 'OKDCdAUtMdcPlRFB2Pc4DZ9kB47UFLoAknc8AhOH', '2021-05-06 03:13:08');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_size` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `product_quantity` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `product_name`, `product_code`, `product_size`, `product_description`, `product_image`, `product_price`, `product_quantity`, `status`, `created_at`, `updated_at`) VALUES
(1, 13, 'vegfood', '1234', 'without losing the image quality. With our photo resizer, you can convert the image size in a required width and height in pixels. We also have pre-defined image sizes for social media profile pictures and cover photos that you choose from the drop-down.', 'dggs', 'product_image1617712727.jpg', '1', '2', 1, '2021-04-06 07:08:47', '2021-04-07 05:45:55'),
(3, 12, 'pizza', '12', 'xl', 'dgsdgds', 'product_image1617714069.jpg', '134', '2', 1, '2021-04-06 07:31:09', '2021-04-06 07:31:09'),
(4, 12, 'burger', '1234', 'xxl', 'cgvgsdg', 'product_image1617714156.jpg', '120', '2', 1, '2021-04-06 07:32:36', '2021-04-06 07:32:36'),
(6, 12, 'burger', '1234', 'xl', 'dfsdgsdgs', 'product_image1617714295.jpg', '150', '2', 1, '2021-04-06 07:34:55', '2021-04-06 07:34:55'),
(7, 15, 'Pizza', '1234', 'xl', 'hfhfgh', 'product_image1617784347.jpg', '100', '2', 1, '2021-04-07 03:02:27', '2021-04-07 03:02:27'),
(8, 13, 'Burger', '1234567890', 'xlq', 'gdggsg', 'product_image1617784440.jpg', '120', '2', 1, '2021-04-07 03:04:00', '2021-04-07 03:04:00'),
(9, 13, 'suop', 'fdsf', 'gddgsd', 'gddgsd', 'product_image1617784888.jpg', '345', '1', 1, '2021-04-07 03:11:28', '2021-04-13 11:26:26'),
(16, 14, 'vegfood', '1234567890', 'Normal', 'oooooooooooooooooooooooo', 'product_image1618333230.webp', '234561', '1', 1, '2021-04-13 11:30:30', '2021-04-13 11:30:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `facebook_id`) VALUES
(1, 'Rohit Parashar ji', 'parasharjirohit@gmail.com', NULL, 'eyJpdiI6IlE0WDB4bkNJVDJZQUVXWVRpeFY2OVE9PSIsInZhbHVlIjoiOTJBVzdZS2Zyb2xadFRraGpvLzNPNnowVEJMNVBuNkxsaTduUGN0Und5Zz0iLCJtYWMiOiI0YjAyMWY1NjE2ZTQ5MDQ3OGU4YjBkYjQyMmRkNjAwMWRhYjhlNGFiMjUzOTMwZjc0Y2FjZGVlMzdmYTRhOTBmIn0=', NULL, '2021-05-04 00:23:03', '2021-05-04 00:23:03', '108805836134916228895', NULL),
(2, 'Rohit Parashar', 'rohitaman293@gmail.com', NULL, 'eyJpdiI6IlU3RDh0SmhKOU9aRHBXWHo4M2xJMGc9PSIsInZhbHVlIjoiZUQyMWRWcFozTlk5bmY3STU5UGZydU9JdWppYzVmRVhSeG1YYW9GMjZjMD0iLCJtYWMiOiI2ZjhiMGQ3NTY2YjliZWY4OTFkZGYxZmUyMWFkZTU2MTI3Mzk1YWNjZmU4ZTU3ZThiN2MyNjQ0YWU0NWQ1MTBhIn0=', NULL, '2021-05-04 07:44:03', '2021-05-04 07:44:03', '113087412387077188386', NULL),
(3, 'Rohit Parashar', 'raman.singh95424567@gmail.com', NULL, NULL, NULL, '2021-05-06 03:05:38', '2021-05-06 03:05:38', NULL, '211628654102126');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
