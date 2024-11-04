-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 04, 2024 at 07:51 PM
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
-- Database: `clientconnect`
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
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `p_numb` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `p_numb`, `address`, `notes`, `created_at`, `updated_at`) VALUES
(11241, 'Name64', 'user1811@example.com', '012345678997', 'Address 31', 'Note 67', '2024-08-23 01:55:32', '2024-10-31 01:55:32'),
(17957, 'Name20', 'user7807@example.com', '012345678927', 'Address 3', 'Note 36', '2024-06-30 01:55:32', '2024-08-16 01:55:32'),
(20089, 'Name21', 'user7539@example.com', '012345678911', 'Address 31', 'Note 23', '2024-09-26 01:55:32', '2024-08-23 01:55:32'),
(22494, 'Name44', 'user8233@example.com', '012345678977', 'Address 39', 'Note 65', '2024-10-22 01:55:32', '2024-08-21 01:55:32'),
(23928, 'Name83', 'user7223@example.com', '01234567899', 'Address 33', 'Note 36', '2024-06-12 01:55:32', '2024-05-14 01:55:32'),
(27029, 'Name77', 'user3269@example.com', '012345678929', 'Address 50', 'Note 65', '2024-06-25 01:55:32', '2024-06-27 01:55:32'),
(29942, 'Name14', 'user571@example.com', '012345678985', 'Address 9', 'Note 90', '2024-09-23 01:55:32', '2024-08-10 01:55:32'),
(30143, 'Name62', 'user4683@example.com', '012345678945', 'Address 88', 'Note 4', '2024-07-20 01:55:32', '2024-06-09 01:55:32'),
(30745, 'Name68', 'user7436@example.com', '012345678965', 'Address 5', 'Note 30', '2024-09-04 01:55:32', '2024-06-12 01:55:32'),
(32722, 'Name75', 'user416@example.com', '012345678992', 'Address 51', 'Note 80', '2024-08-11 01:55:32', '2024-05-16 01:55:32'),
(34952, 'Name74', 'user8985@example.com', '012345678925', 'Address 57', 'Note 12', '2024-06-01 01:55:32', '2024-05-10 01:55:32'),
(35351, 'Name33', 'user8273@example.com', '012345678913', 'Address 18', 'Note 52', '2024-10-26 01:55:32', '2024-07-02 01:55:32'),
(38354, 'Name59', 'user459@example.com', '012345678943', 'Address 3', 'Note 88', '2024-09-13 01:55:32', '2024-06-10 01:55:32'),
(39420, 'Name67', 'user3792@example.com', '012345678988', 'Address 26', 'Note 68', '2024-07-17 01:55:32', '2024-10-31 01:55:32'),
(39919, 'Name56', 'user8476@example.com', '012345678953', 'Address 11', 'Note 97', '2024-07-31 01:55:32', '2024-06-23 01:55:32'),
(39959, 'Name5', 'user2925@example.com', '012345678928', 'Address 56', 'Note 94', '2024-10-26 01:55:32', '2024-08-20 01:55:32'),
(40096, 'Name20', 'user24@example.com', '012345678940', 'Address 3', 'Note 96', '2024-07-03 01:55:32', '2024-07-24 01:55:32'),
(41950, 'Name79', 'user9078@example.com', '012345678915', 'Address 5', 'Note 80', '2024-06-02 01:55:32', '2024-05-27 01:55:32'),
(42124, 'Name53', 'user6213@example.com', '012345678949', 'Address 59', 'Note 49', '2024-07-02 01:55:32', '2024-05-10 01:55:32'),
(42784, 'Name94', 'user6437@example.com', '012345678937', 'Address 95', 'Note 63', '2024-09-07 01:55:32', '2024-06-29 01:55:32'),
(43195, 'Name62', 'user116@example.com', '012345678918', 'Address 90', 'Note 94', '2024-10-28 01:55:32', '2024-09-02 01:55:32'),
(46663, 'Name86', 'user1123@example.com', '012345678996', 'Address 46', 'Note 45', '2024-06-01 01:55:32', '2024-05-11 01:55:32'),
(46804, 'Name14', 'user4758@example.com', '012345678995', 'Address 36', 'Note 92', '2024-07-25 01:55:32', '2024-10-27 01:55:32'),
(47391, 'Name30', 'user2860@example.com', '012345678951', 'Address 69', 'Note 94', '2024-07-13 01:55:32', '2024-09-02 01:55:32'),
(49185, 'Name6', 'user388@example.com', '012345678998', 'Address 81', 'Note 13', '2024-09-28 01:55:32', '2024-07-11 01:55:32'),
(49717, 'Name4', 'user9136@example.com', '012345678942', 'Address 38', 'Note 66', '2024-10-10 01:55:32', '2024-06-27 01:55:32'),
(50156, 'Name95', 'user4303@example.com', '012345678929', 'Address 16', 'Note 93', '2024-09-30 01:55:32', '2024-10-05 01:55:32'),
(57080, 'Name11', 'user291@example.com', '012345678978', 'Address 84', 'Note 87', '2024-06-10 01:55:32', '2024-08-08 01:55:32'),
(57169, 'Name13', 'user1186@example.com', '012345678917', 'Address 53', 'Note 15', '2024-10-09 01:55:32', '2024-09-16 01:55:32'),
(58651, 'Name55', 'user1621@example.com', '012345678914', 'Address 21', 'Note 65', '2024-07-15 01:55:32', '2024-10-07 01:55:32'),
(59087, 'Name46', 'user6958@example.com', '01234567897', 'Address 31', 'Note 31', '2024-07-09 01:55:32', '2024-09-05 01:55:32'),
(64224, 'Name7', 'user5659@example.com', '012345678960', 'Address 33', 'Note 83', '2024-10-02 01:55:32', '2024-08-21 01:55:32'),
(64275, 'Name86', 'user5280@example.com', '01234567893', 'Address 60', 'Note 91', '2024-06-23 01:55:32', '2024-11-03 01:55:32'),
(66713, 'Name83', 'user2881@example.com', '012345678993', 'Address 80', 'Note 21', '2024-07-09 01:55:32', '2024-07-09 01:55:32'),
(67496, 'Name13', 'user7781@example.com', '012345678947', 'Address 3', 'Note 75', '2024-07-07 01:55:32', '2024-10-19 01:55:32'),
(70062, 'Name44', 'user2308@example.com', '012345678981', 'Address 37', 'Note 45', '2024-10-11 01:55:32', '2024-09-09 01:55:32'),
(71940, 'Name0', 'user9361@example.com', '012345678968', 'Address 59', 'Note 92', '2024-06-08 01:55:32', '2024-08-27 01:55:32'),
(74532, 'Name56', 'user6923@example.com', '012345678975', 'Address 70', 'Note 23', '2024-10-20 01:55:32', '2024-06-29 01:55:32'),
(80547, 'Name90', 'user1520@example.com', '01234567895', 'Address 83', 'Note 99', '2024-08-12 01:55:32', '2024-08-30 01:55:32'),
(82674, 'Name30', 'user1156@example.com', '012345678965', 'Address 93', 'Note 68', '2024-07-14 01:55:32', '2024-10-17 01:55:32'),
(85870, 'Name16', 'user2853@example.com', '012345678993', 'Address 83', 'Note 35', '2024-09-17 01:55:32', '2024-09-12 01:55:32'),
(88274, 'Name37', 'user2641@example.com', '012345678919', 'Address 19', 'Note 36', '2024-09-18 01:55:32', '2024-09-27 01:55:32'),
(88894, 'Name12', 'user9819@example.com', '012345678954', 'Address 76', 'Note 21', '2024-06-21 01:55:32', '2024-10-07 01:55:32'),
(91089, 'Name81', 'user3551@example.com', '012345678934', 'Address 63', 'Note 17', '2024-05-16 01:55:32', '2024-09-19 01:55:32'),
(91109, 'Name43', 'user4466@example.com', '012345678994', 'Address 37', 'Note 4', '2024-10-14 01:55:32', '2024-08-15 01:55:32'),
(92230, 'Name20', 'user2721@example.com', '012345678975', 'Address 94', 'Note 48', '2024-07-24 01:55:32', '2024-08-22 01:55:32'),
(92344, 'Name10', 'user7714@example.com', '012345678954', 'Address 42', 'Note 47', '2024-10-18 01:55:32', '2024-10-22 01:55:32'),
(94594, 'Name87', 'user5430@example.com', '01234567899', 'Address 85', 'Note 0', '2024-08-18 01:55:32', '2024-10-06 01:55:32'),
(96157, 'Name51', 'user7061@example.com', '012345678998', 'Address 80', 'Note 5', '2024-06-02 01:55:32', '2024-10-06 01:55:32'),
(99071, 'Name47', 'user4107@example.com', '012345678962', 'Address 89', 'Note 60', '2024-09-05 01:55:32', '2024-06-01 01:55:32');

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
-- Table structure for table `logs`
--

CREATE TABLE `logs` (
  `id` bigint(20) NOT NULL,
  `cust_id` bigint(20) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logs`
--

INSERT INTO `logs` (`id`, `cust_id`, `type`, `notes`, `created_at`, `updated_at`) VALUES
(21996, 43195, 'Call', 'Hello', '2024-11-04 10:24:55', '2024-11-04 10:24:55'),
(46693, 34952, 'Email', 'hello', '2024-11-04 06:32:05', '2024-11-04 06:32:05'),
(76938, 39420, 'Meeting', 'hello', '2024-11-04 06:32:13', '2024-11-04 06:32:13'),
(97685, 30143, 'Call', 'hello', '2024-11-04 06:31:58', '2024-11-04 06:31:58');

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
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
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
('POdgFQu8gD30cl8KcYjcBOUCx6s9AQjURsQHwS5p', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/130.0.0.0 Safari/537.36 Edg/130.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoickdyZEZyWGxBcTYxTjMzbEN1ZEM4dll5cnJncVZBdVhuMXY1SjZvZyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1730745474);

-- --------------------------------------------------------

--
-- Table structure for table `tickets`
--

CREATE TABLE `tickets` (
  `id` bigint(20) NOT NULL,
  `cust_id` bigint(20) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tickets`
--

INSERT INTO `tickets` (`id`, `cust_id`, `user_id`, `title`, `description`, `status`, `priority`, `created_at`, `updated_at`) VALUES
(28717, 71940, 69567, 'Hello', 'Hello', 'Open', 'Medium', '2024-11-04 10:23:16', '2024-11-04 10:24:02'),
(62311, 38354, 69567, 'hello', 'hello', 'Open', 'Medium', '2024-11-04 06:32:27', '2024-11-04 06:32:27'),
(72647, 11241, 69567, 'AAA', 'AAA', 'Resolved', 'Low', '2024-11-04 07:31:45', '2024-11-04 07:44:42'),
(98479, 38354, 69567, 'Hello', 'Hello', 'Open', 'High', '2024-11-04 07:31:01', '2024-11-04 07:31:01');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `p_numb` varchar(255) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `role` text DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `p_numb`, `password`, `role`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
(69567, 'Danish Haikal', 'userdanish@example.com', '0123456789', '$2y$12$ijKwOlq9uDL4AO1zcKxZ3ODPNbBGIrCkPUAwY24FzF5sLc6bU2qVW', 'support', NULL, NULL, '2024-11-04 02:42:41', '2024-11-04 02:42:41'),
(72334, 'Izzat Saifullah', 'userizzat@example.com', '0123456789', '$2y$12$377f9seMh7qbjSqsF4jl4ekvp7YFGl1TSBKuWLJRPnDAUdHwrBYHa', 'admin', NULL, NULL, '2024-11-02 04:40:26', '2024-11-03 10:40:47');

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
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `logs`
--
ALTER TABLE `logs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`cust_id`),
  ADD KEY `cust_id` (`cust_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `tickets`
--
ALTER TABLE `tickets`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`cust_id`),
  ADD KEY `cust_id` (`cust_id`),
  ADD KEY `user_id` (`user_id`);

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72335;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `logs`
--
ALTER TABLE `logs`
  ADD CONSTRAINT `fk_logs_customers` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tickets`
--
ALTER TABLE `tickets`
  ADD CONSTRAINT `fk_tickets_customers` FOREIGN KEY (`cust_id`) REFERENCES `customers` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_tickets_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
