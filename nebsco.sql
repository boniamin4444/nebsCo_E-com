-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2025 at 08:34 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nebsco`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `size` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `image` varchar(255) DEFAULT NULL,
  `priority` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `status`, `image`, `priority`, `deleted_at`, `created_at`, `updated_at`) VALUES
(2, 'SHOE', 'shoe', 0, 'categories/utDYfmjmWwMz1t7KNvv4bRHpeVB9GZIODCifldBz.jpg', 1, NULL, '2025-04-09 04:52:28', '2025-04-09 04:52:28'),
(3, 'FURNITURE', 'furniture', 0, 'categories/fY0OfO6BC74K7zAqieZSTNiTjVAYcxnRBgTAMS7z.jpg', 2, NULL, '2025-04-09 04:53:02', '2025-04-09 04:53:02'),
(4, 'CLOTHING', 'clothing', 0, 'categories/umAAaV9k0sRmirz4YCXikU5vgwQWIVV2ukMdE6gI.jpg', 3, NULL, '2025-04-09 04:53:24', '2025-04-09 04:53:24'),
(5, 'ELECTRICS', 'electrics', 0, 'categories/Ko7Fa3pM8cgzxI7KulnfGegWX2BCxsV0ZbrzCnDG.jpg', 4, NULL, '2025-04-09 04:53:52', '2025-04-09 04:53:52'),
(6, 'JACKET', 'jacket', 0, 'categories/UzEK0KFoO4P32UgBgpC1zbPC5auNfVT0QhZcLL7B.jpg', 5, NULL, '2025-04-09 04:54:22', '2025-04-09 04:54:22'),
(7, 'HEADPHONE', 'headphone', 0, 'categories/goHHwYLONSQkhb1DdSsxffk2MFNt4Bm7LiOtkcWz.jpg', 6, NULL, '2025-04-09 04:54:55', '2025-04-09 04:54:55'),
(8, 'SPORTS', 'sports', 0, 'categories/7R3b4A1KRJ1SnmzRJeShx2tEzr0gR9mepGRzocAX.jpg', 7, NULL, '2025-04-09 23:41:10', '2025-04-09 23:41:10'),
(9, 'Apparel & Accessories', 'Apparel & Accessories', 0, 'categories/FcwswWogqBYq0oHGEssx06wJuoLmvsnOZ1mPtJqj.jpg', 8, NULL, '2025-04-09 23:42:03', '2025-04-09 23:42:03');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2025_04_08_162954_create_categories_table', 1),
(5, '2025_04_08_163008_create_products_table', 1),
(6, '2025_04_08_163032_create_cart_items_table', 1),
(7, '2025_04_09_055801_create_product_images_table', 1);

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
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `product_code` varchar(255) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `purchase_price` decimal(8,2) NOT NULL,
  `regular_price` decimal(8,2) NOT NULL,
  `discount_price` decimal(8,2) NOT NULL DEFAULT 0.00,
  `discount_type` enum('fixed','percentage') NOT NULL,
  `stock_qty` int(11) DEFAULT 0,
  `product_thumbnail` varchar(255) DEFAULT NULL,
  `short_description` varchar(255) NOT NULL,
  `long_description` text NOT NULL,
  `sizes` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`sizes`)),
  `colors` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin DEFAULT NULL CHECK (json_valid(`colors`)),
  `is_varient` tinyint(1) NOT NULL DEFAULT 1,
  `is_deals` tinyint(1) NOT NULL DEFAULT 1,
  `status` enum('active','inactive','draft') NOT NULL,
  `tax` decimal(10,2) DEFAULT 0.00,
  `expiration_date` datetime DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `name`, `slug`, `product_code`, `tags`, `purchase_price`, `regular_price`, `discount_price`, `discount_type`, `stock_qty`, `product_thumbnail`, `short_description`, `long_description`, `sizes`, `colors`, `is_varient`, `is_deals`, `status`, `tax`, `expiration_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 2, 'Shoe', 'shoe', 'Shoe', 'Shoe', 900.00, 1140.00, 5.00, 'percentage', 200, 'productthumbnail/n9Tg8eZaEXq5ehBeMgofswGTKluJRx2T0koANddL.jpg', 'Shoe', 'Shoe', '[\"39\",\"40\",\"42\"]', '[\"Red\",\" Blue\"]', 1, 1, 'active', NULL, NULL, '2025-04-09 06:23:15', '2025-04-09 06:23:15', NULL),
(12, 3, 'Furniture', 'furniture', 'Furniture', 'Furniture', 1000.00, 1180.00, 20.00, 'fixed', 20, 'productthumbnail/KMXJE7xsNjPsVQZ2lijIAtiz5OckAzOlWBVAp47k.jpg', 'Furniture', 'Furniture', NULL, '[\"red\",\"blue\"]', 1, 1, 'active', NULL, NULL, '2025-04-09 07:35:52', '2025-04-09 07:35:52', NULL),
(13, 4, 'Cloth', 'cloth', 'Cloth', 'Cloth', 300.00, 350.00, 0.00, 'fixed', 50, 'productthumbnail/5cBgkrriGVF90bHC07GHdum4JIq3ZrINwxmCi3GI.jpg', 'Cloth', 'Cloth', '[\"M\",\"L\",\"XL\"]', '[\"red\",\"blue\"]', 1, 1, 'active', NULL, NULL, '2025-04-09 07:37:30', '2025-04-09 07:37:30', NULL),
(14, 5, 'Electric', 'electric', 'ElectricElectric', 'Electric', 100.00, 120.00, 0.00, 'fixed', 40, 'productthumbnail/YJGsbmfFaCdmZrQXuGT3KwTrdSUharxrtBnbHTzS.jpg', 'Electric', 'Electric', NULL, NULL, 1, 1, 'active', NULL, NULL, '2025-04-09 07:38:41', '2025-04-09 07:38:41', NULL),
(15, 6, 'Jacket', 'jacket', 'Jacket', 'Jacket', 250.00, 275.50, 5.00, 'percentage', 20, 'productthumbnail/s6iZmpSeiPeFYVC62qjKEBKrStx2RsaIdyxn8yme.jpg', 'Jacket', 'Jacket', '[\"M\",\"L\",\"XL\"]', '[\"red\",\"blue\"]', 1, 1, 'active', NULL, NULL, '2025-04-09 07:39:44', '2025-04-09 07:39:44', NULL),
(16, 7, 'Headphone', 'headphone', 'Headphone', 'Headphone', 80.00, 100.00, 0.00, 'fixed', NULL, 'productthumbnail/pyaItu8QRFjbcQ4HdWuwQgh5IV4T7YntegPuMjKU.jpg', 'Headphone', 'Headphone', NULL, '[\"red\",\"blue\"]', 1, 1, 'active', NULL, NULL, '2025-04-09 07:40:34', '2025-04-09 07:40:34', NULL),
(17, 9, 'Sunglass', 'sunglass', 'Sunglass', 'Sunglass', 20.00, 40.00, 0.00, 'fixed', 40, 'productthumbnail/aN7zRFuKZ06BIty4bMdivCYxbuNXGDbAwFMdSZ53.jpg', 'Sunglass', 'Sunglass', '[\"S\",\"M\"]', '[\"White\",\"Gold\",\"Blue\",\"Black\"]', 1, 1, 'active', NULL, NULL, '2025-04-09 23:44:13', '2025-04-09 23:44:13', NULL),
(18, 8, 'Football', 'football', 'Football', 'Football', 50.00, 75.00, 5.00, 'fixed', 50, 'productthumbnail/jUQUi4MXL3vwD8ixkHfLHjg2bHamE0f6LIMvXDzz.jpg', 'Football', 'Football', '[\"M\",\"L\"]', NULL, 1, 1, 'active', NULL, NULL, '2025-04-09 23:45:18', '2025-04-09 23:45:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_images`
--

CREATE TABLE `product_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `images` varchar(255) NOT NULL,
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
('es6mEHzSue3GQ3f1z6osYLW3Np9ZQ2GVSI9Q2sar', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/135.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiWmhsbkVQSjRiTlZ6ZVN1RjkzSGZVSDhoR2FUQ1J2WTVJZzVMTGQyNyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzI6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9wcm9kdWN0LzEyIjt9fQ==', 1744266522);

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
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `cart_items_user_id_foreign` (`user_id`),
  ADD KEY `cart_items_product_id_foreign` (`product_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD UNIQUE KEY `products_product_code_unique` (`product_code`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `product_images`
--
ALTER TABLE `product_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_images_product_id_foreign` (`product_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product_images`
--
ALTER TABLE `product_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `cart_items_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `product_images`
--
ALTER TABLE `product_images`
  ADD CONSTRAINT `product_images_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
