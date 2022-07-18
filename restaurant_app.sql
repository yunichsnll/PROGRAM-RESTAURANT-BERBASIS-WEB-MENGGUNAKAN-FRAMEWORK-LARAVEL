-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 15, 2022 at 04:13 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `restaurant_app`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameCustomer` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `emailCustomer` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phoneCustomer` varchar(13) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `nameCustomer`, `emailCustomer`, `phoneCustomer`, `member`, `created_at`, `updated_at`) VALUES
(1, 'yuni chusnul khotimah', 'yunichsnlll@gmail.com', '08987409468', 1, '2022-03-15 21:22:33', '2022-03-15 21:22:45'),
(7, 'Sabrina Fadia Arrayan', 'fadia@gmail.com', '081834762518', 1, '2022-03-17 19:54:48', '2022-03-17 19:54:48'),
(8, 'Latifa Hanum Indriyani', 'hanum@gmail.com', '083761259764', 1, '2022-03-17 19:56:10', '2022-03-17 19:56:10'),
(9, 'Kaila Alifia Azzahra', 'kailaa@gmail.com', '089837512947', 1, '2022-03-17 19:57:20', '2022-03-17 19:57:20'),
(10, 'Annisa Aprilia Nur Azizah', 'anisa@gmail.com', '081847526917', 1, '2022-03-17 19:58:35', '2022-03-17 19:58:35'),
(11, 'Diah Tri Aprilia', 'diah@gmail.com', '085317603420', 1, '2022-03-17 19:59:39', '2022-03-17 19:59:39'),
(12, 'Zulfa Al-Qodariah Putri', 'zulfa@gmail.com', '089583175012', 1, '2022-03-17 20:01:58', '2022-03-17 20:01:58');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nameMenu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descMenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photoMenu` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `nameMenu`, `descMenu`, `photoMenu`, `price`, `created_at`, `updated_at`) VALUES
(17, 'Pecal Lele', 'Sambal Extra Pedas', 'images/FLLr5cOMFyyYo70JfbccnuuwZtwnkqpw9q9lQ3HQ.jpg', 10000, '2022-03-18 02:01:57', '2022-03-19 04:41:47'),
(18, 'Ayam Geprek', 'level 1-15', 'images/VUMP7sL1zdHXkzRjPIpaDtyKQKNRQDA13MFIixF4.jpg', 15000, '2022-03-18 02:28:18', '2022-03-19 04:41:35'),
(19, 'Sate', 'Sate Ayam', 'images/hDO8KYIGxdGEfW9MBlGRCDt3Iro3br29XYZYbuhm.jpg', 25000, '2022-03-19 04:42:26', '2022-03-19 04:42:26'),
(20, 'Bakso Mercon', 'Level 1-10', 'images/ziLLo6ksgyrnSneGjqQHBNigvdYlvj7IQnEkjNdD.jpg', 20000, '2022-03-19 04:43:21', '2022-03-19 04:43:21'),
(21, 'Sop Iga', 'Sop Iga Sapi', 'images/FCNmEMBZu37DL7jf87makKq71H2V06TIOw0wMV5M.jpg', 45000, '2022-03-19 04:44:05', '2022-03-19 04:44:05'),
(23, 'mie ayam', 'mie ayam', 'images/CLxUVY6VY7vKIz2zkQIqywgS1jt7a4G2QFchKABj.jpg', 12000, '2022-03-19 12:13:15', '2022-03-19 12:13:15');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_03_06_135618_create_customer_table', 1),
(6, '2022_03_06_135800_create_menu_table', 1),
(7, '2022_03_06_140150_create_order_table', 1),
(8, '2022_03_16_003224_create_order_item_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customerId` int(11) NOT NULL,
  `code` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `customerId`, `code`, `total`, `created_at`, `updated_at`) VALUES
(12, 1, '1803222849', 108900, '2022-03-18 02:28:49', '2022-03-19 00:53:47'),
(13, 8, '1803223825', 78300, '2022-03-18 02:38:25', '2022-03-19 00:54:19'),
(14, 7, '1903225438', 21600, '2022-03-19 00:54:38', '2022-03-19 00:54:38'),
(15, 9, '1903225514', 45000, '2022-03-19 00:55:14', '2022-07-14 14:21:08');

-- --------------------------------------------------------

--
-- Table structure for table `order_item`
--

CREATE TABLE `order_item` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `orderId` int(11) NOT NULL,
  `menuId` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `subTotal` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_item`
--

INSERT INTO `order_item` (`id`, `orderId`, `menuId`, `quantity`, `subTotal`, `created_at`, `updated_at`) VALUES
(8, 4, 8, 4, 508, '2022-03-16 08:35:52', '2022-03-16 08:35:52'),
(14, 6, 8, 2, 254, '2022-03-16 09:21:18', '2022-03-16 09:21:18'),
(18, 5, 8, 5, 635, '2022-03-16 22:56:34', '2022-03-16 22:56:34'),
(22, 7, 8, 9, 1143, '2022-03-17 00:30:50', '2022-03-17 00:30:50'),
(27, 9, 9, 5, 635, '2022-03-17 20:10:33', '2022-03-17 20:10:33'),
(28, 9, 10, 3, 381, '2022-03-17 20:10:33', '2022-03-17 20:10:33'),
(42, 12, 17, 5, 85000, '2022-03-19 00:53:48', '2022-03-19 00:53:48'),
(43, 12, 18, 3, 36000, '2022-03-19 00:53:48', '2022-03-19 00:53:48'),
(44, 13, 18, 3, 36000, '2022-03-19 00:54:19', '2022-03-19 00:54:19'),
(45, 13, 17, 3, 51000, '2022-03-19 00:54:19', '2022-03-19 00:54:19'),
(46, 14, 18, 2, 24000, '2022-03-19 00:54:38', '2022-03-19 00:54:38'),
(53, 15, 17, 2, 20000, '2022-07-14 14:21:08', '2022-07-14 14:21:08'),
(54, 15, 18, 2, 30000, '2022-07-14 14:21:08', '2022-07-14 14:21:08');

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$Yf5NzMP6pYm9BMeC/OljGO9gX5.OIjv4x5idvybv.hyjsV5ReQh2a', 'admin', NULL, '2022-03-15 17:43:36', '2022-03-15 17:43:36'),
(2, 'kasir', 'kasir@gmail.com', NULL, '$2y$10$qwWbid5WVr0aBrhNvwz7PeqCzOkS1S8xyFiLp1Cgn.Way4a2jbGcK', 'kasir', NULL, '2022-03-15 17:43:37', '2022-03-15 17:43:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_item`
--
ALTER TABLE `order_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `order_item`
--
ALTER TABLE `order_item`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
