-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 03, 2023 at 08:46 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `booking_site`
--

-- --------------------------------------------------------

--
-- Table structure for table `chats`
--

CREATE TABLE `chats` (
  `id` bigint(20) NOT NULL,
  `sender_id` bigint(20) UNSIGNED NOT NULL,
  `receiver_id` bigint(20) UNSIGNED NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `ride_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `sender_id`, `receiver_id`, `message`, `status`, `ride_id`, `created_at`, `updated_at`) VALUES
(58, 1, 5, 'nadeem', 0, 8, '2022-12-30 12:05:21', '2022-12-30 12:05:21'),
(59, 5, 1, 'nadeem', 0, 8, '2022-12-30 12:06:30', '2022-12-30 12:06:30'),
(60, 1, 5, 'nadeem', 0, 8, '2022-12-30 12:07:11', '2022-12-30 12:07:11'),
(61, 1, 5, 'nadeem', 0, 8, '2022-12-30 12:07:41', '2022-12-30 12:07:41'),
(62, 1, 5, 'nadeem', 0, 8, '2022-12-30 12:08:13', '2022-12-30 12:08:13'),
(63, 1, 5, 'nadeem', 0, 8, '2022-12-30 12:10:01', '2022-12-30 12:10:01'),
(64, 1, 5, 'nadeem', 0, 8, '2022-12-30 12:11:00', '2022-12-30 12:11:00'),
(65, 1, 5, 'nadeem', 0, 8, '2022-12-30 12:11:51', '2022-12-30 12:11:51'),
(66, 1, 5, 'nadeem', 0, 8, '2022-12-30 12:12:46', '2022-12-30 12:12:46'),
(67, 1, 5, 'ff', 0, 8, '2022-12-31 04:59:43', '2022-12-31 04:59:43'),
(68, 1, 5, 'ff', 0, 8, '2022-12-31 05:33:14', '2022-12-31 05:33:14'),
(69, 1, 5, 'hi', 0, 8, '2023-01-02 08:33:45', '2023-01-02 08:33:45'),
(70, 1, 5, 'hi i am admin 1 and also send notification', 0, 8, '2023-01-02 08:35:02', '2023-01-02 08:35:02'),
(71, 1, 5, 'hiii', 0, 8, '2023-01-02 08:36:02', '2023-01-02 08:36:02'),
(72, 1, 5, 'jjjj', 0, 8, '2023-01-02 08:36:52', '2023-01-02 08:36:52'),
(73, 1, 5, 'jjjj', 0, 8, '2023-01-02 09:35:29', '2023-01-02 09:35:29'),
(74, 1, 5, 'jjjj', 0, 8, '2023-01-02 09:35:43', '2023-01-02 09:35:43'),
(75, 1, 5, 'jjjj', 0, 8, '2023-01-02 09:36:49', '2023-01-02 09:36:49'),
(76, 1, 5, 'jjjj', 0, 8, '2023-01-02 09:37:52', '2023-01-02 09:37:52'),
(77, 1, 5, 'jjjj', 0, 8, '2023-01-02 09:38:13', '2023-01-02 09:38:13'),
(78, 1, 5, 'jjjj', 0, 8, '2023-01-02 09:38:39', '2023-01-02 09:38:39'),
(79, 1, 5, 'jjjj', 0, 8, '2023-01-02 09:39:21', '2023-01-02 09:39:21'),
(80, 1, 5, 'jjjj', 0, 8, '2023-01-02 09:39:54', '2023-01-02 09:39:54'),
(81, 1, 5, 'jjjj', 0, 8, '2023-01-02 09:40:57', '2023-01-02 09:40:57'),
(82, 1, 5, 'am sending notifi', 0, 8, '2023-01-02 09:41:43', '2023-01-02 09:41:43'),
(83, 1, 5, 'am sending notifi', 0, 8, '2023-01-02 09:42:47', '2023-01-02 09:42:47'),
(84, 1, 5, 'no notifi', 0, 8, '2023-01-02 09:44:14', '2023-01-02 09:44:14'),
(85, 1, 5, 'jjkk', 0, 8, '2023-01-02 09:47:01', '2023-01-02 09:47:01'),
(86, 1, 5, 'jjkk', 0, 8, '2023-01-02 09:48:34', '2023-01-02 09:48:34'),
(87, 1, 5, 'aaa', 0, 8, '2023-01-02 09:49:09', '2023-01-02 09:49:09'),
(88, 1, 5, 'aaa', 0, 8, '2023-01-02 09:49:42', '2023-01-02 09:49:42'),
(89, 1, 5, 'aaa', 0, 8, '2023-01-02 14:24:48', '2023-01-02 14:24:48'),
(90, 1, 5, 'aaa', 0, 8, '2023-01-02 14:31:29', '2023-01-02 14:31:29'),
(91, 1, 5, 'hiii', 0, 8, '2023-01-02 14:31:49', '2023-01-02 14:31:49'),
(92, 1, 15, 'hi', 0, 11, '2023-01-02 14:51:46', '2023-01-02 14:51:46'),
(93, 1, 15, 'how are you', 0, 11, '2023-01-02 14:54:24', '2023-01-02 14:54:24');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_24_110309_ride', 1);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `message` varchar(100) NOT NULL,
  `ride_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `title` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `message`, `ride_id`, `user_id`, `created_at`, `updated_at`, `title`) VALUES
(8, 'chat', 'ff', 7, 1, '2022-12-30 07:23:16', '2022-12-30 07:23:16', 'You receive a new message'),
(9, 'chat', 'gg', 7, 1, '2022-12-30 07:23:21', '2022-12-30 07:23:21', 'You receive a new message'),
(10, 'chat', 'qq', 7, 4, '2022-12-30 07:23:39', '2022-12-30 07:23:39', 'You receive a new message'),
(11, 'chat', 'hh', 7, 4, '2022-12-30 07:40:29', '2022-12-30 07:40:29', 'You receive a new message'),
(12, 'chat', 'hhh', 8, 5, '2022-12-30 07:41:45', '2022-12-30 07:41:45', 'You receive a new message'),
(13, 'chat', 'kk', 8, 5, '2022-12-30 07:41:51', '2022-12-30 07:41:51', 'You receive a new message'),
(14, 'chat', 'kk', 8, 5, '2022-12-30 07:43:30', '2022-12-30 07:43:30', 'You receive a new message'),
(15, 'chat', 'ggg', 8, 5, '2022-12-30 08:29:28', '2022-12-30 08:29:28', 'You receive a new message'),
(16, 'chat', 'eee', 8, 5, '2022-12-30 08:29:36', '2022-12-30 08:29:36', 'You receive a new message'),
(17, 'chat', 'eeee', 8, 5, '2022-12-30 08:29:43', '2022-12-30 08:29:43', 'You receive a new message'),
(18, 'chat', 'qqqq', 8, 5, '2022-12-30 08:29:48', '2022-12-30 08:29:48', 'You receive a new message'),
(19, 'chat', 'qqqq', 8, 5, '2022-12-30 08:32:28', '2022-12-30 08:32:28', 'You receive a new message'),
(20, 'chat', 'aaaa', 8, 5, '2022-12-30 10:05:52', '2022-12-30 10:05:52', 'You receive a new message'),
(21, 'chat', 'hh', 7, 4, '2022-12-30 10:06:07', '2022-12-30 10:06:07', 'You receive a new message'),
(22, 'chat', 'hh', 7, 4, '2022-12-30 10:12:17', '2022-12-30 10:12:17', 'You receive a new message'),
(23, 'chat', 'hh', 7, 4, '2022-12-30 10:14:02', '2022-12-30 10:14:02', 'You receive a new message'),
(24, 'chat', 'hh', 7, 4, '2022-12-30 10:15:27', '2022-12-30 10:15:27', 'You receive a new message'),
(25, 'chat', 'nadeem', 7, 4, '2022-12-30 11:15:14', '2022-12-30 11:15:14', 'You receive a new message'),
(26, 'chat', 'aaa', 7, 4, '2022-12-30 11:19:21', '2022-12-30 11:19:21', 'You receive a new message'),
(27, 'chat', 'aaa', 7, 4, '2022-12-30 11:20:47', '2022-12-30 11:20:47', 'You receive a new message'),
(28, 'chat', 'aaa', 7, 4, '2022-12-30 11:44:22', '2022-12-30 11:44:22', 'You receive a new message'),
(29, 'chat', 'aaa', 7, 4, '2022-12-30 11:45:15', '2022-12-30 11:45:15', 'You receive a new message'),
(32, 'chat', 'hi i am admin 1', 8, 5, '2022-12-30 11:49:31', '2022-12-30 11:49:31', 'You receive a new message'),
(33, 'chat', 'hi i am admin 1', 8, 5, '2022-12-30 11:49:49', '2022-12-30 11:49:49', 'You receive a new message'),
(34, 'chat', 'hi i am admin 1', 8, 5, '2022-12-30 11:50:28', '2022-12-30 11:50:28', 'You receive a new message'),
(35, 'chat', 'hi', 8, 5, '2022-12-30 11:52:53', '2022-12-30 11:52:53', 'You receive a new message'),
(36, 'chat', 'hi', 8, 5, '2022-12-30 11:53:10', '2022-12-30 11:53:10', 'You receive a new message'),
(37, 'chat', 'bbbb', 8, 5, '2022-12-30 11:58:24', '2022-12-30 11:58:24', 'You receive a new message'),
(38, 'chat', 'bbbb', 8, 5, '2022-12-30 11:58:33', '2022-12-30 11:58:33', 'You receive a new message'),
(39, 'chat', 'vvv', 8, 5, '2022-12-30 11:59:17', '2022-12-30 11:59:17', 'You receive a new message'),
(40, 'chat', 'nadeem', 8, 5, '2022-12-30 12:00:06', '2022-12-30 12:00:06', 'You receive a new message'),
(41, 'chat', 'nadeem', 8, 5, '2022-12-30 12:05:21', '2022-12-30 12:05:21', 'You receive a new message'),
(42, 'chat', 'nadeem', 8, 5, '2022-12-30 12:06:30', '2022-12-30 12:06:30', 'You receive a new message'),
(43, 'chat', 'nadeem', 8, 5, '2022-12-30 12:07:11', '2022-12-30 12:07:11', 'You receive a new message'),
(44, 'chat', 'nadeem', 8, 5, '2022-12-30 12:07:41', '2022-12-30 12:07:41', 'You receive a new message'),
(45, 'chat', 'nadeem', 8, 5, '2022-12-30 12:08:13', '2022-12-30 12:08:13', 'You receive a new message'),
(46, 'chat', 'nadeem', 8, 5, '2022-12-30 12:10:01', '2022-12-30 12:10:01', 'You receive a new message'),
(47, 'chat', 'nadeem', 8, 5, '2022-12-30 12:11:00', '2022-12-30 12:11:00', 'You receive a new message'),
(48, 'chat', 'nadeem', 8, 5, '2022-12-30 12:11:51', '2022-12-30 12:11:51', 'You receive a new message'),
(49, 'chat', 'nadeem', 8, 5, '2022-12-30 12:12:46', '2022-12-30 12:12:46', 'You receive a new message'),
(50, 'chat', 'ff', 8, 5, '2022-12-31 04:59:43', '2022-12-31 04:59:43', 'You receive a new message'),
(51, 'chat', 'ff', 8, 5, '2022-12-31 05:33:14', '2022-12-31 05:33:14', 'You receive a new message'),
(59, 'chat', 'aaa', 8, 5, '2023-01-02 14:24:48', '2023-01-02 14:24:48', 'You receive a new message'),
(60, 'chat', 'aaa', 8, 5, '2023-01-02 14:31:29', '2023-01-02 14:31:29', 'You receive a new message'),
(61, 'chat', 'hiii', 8, 5, '2023-01-02 14:31:49', '2023-01-02 14:31:49', 'You receive a new message'),
(62, 'chat', 'hi', 11, 15, '2023-01-02 14:51:46', '2023-01-02 14:51:46', 'You receive a new message'),
(63, 'chat', 'how are you', 11, 15, '2023-01-02 14:54:24', '2023-01-02 14:54:24', 'You receive a new message');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `rides`
--

CREATE TABLE `rides` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `userId` varchar(255) NOT NULL,
  `origion` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL,
  `timeOfRide` varchar(255) NOT NULL,
  `totalCapacity` varchar(255) NOT NULL,
  `availableCapacity` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `booked_ids` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rides`
--

INSERT INTO `rides` (`id`, `title`, `description`, `price`, `userId`, `origion`, `destination`, `timeOfRide`, `totalCapacity`, `availableCapacity`, `status`, `created_at`, `updated_at`, `booked_ids`) VALUES
(6, 'ride 1', 'greta ride', '1200', '1', 'moraco', 'germeny', '2:00', '6', '4', '0', '2022-12-30 05:20:04', '2022-12-30 05:20:04', '[]'),
(7, 'ride 2', 'ride 2 from admin2 with user id 4', '300', '4', 'lahore', 'jehlem', '4:00', '5', '0', '0', NULL, '2022-12-30 08:00:42', '[\"1\",\"1\",\"1\",\"1\"]'),
(8, 'ride 3', 'ride 3 from admin3 with user id 5', '300', '5', 'lahore', 'jehlem', '4:00', '5', '0', '0', NULL, '2022-12-30 12:15:17', '[\"1\",\"1\",\"1\",\"1\"]'),
(9, 'ride 4', 'ride 4 from admin4 with user id 6', '600', '6', 'lahore', 'jehlem', '4:00', '5', '4', '0', NULL, NULL, ''),
(11, 'ride by ghulam dastgeer', 'greta booking', '120', '15', 'lahore', 'gujrat', '6:00', '4', '3', '0', '2023-01-02 14:46:27', '2023-01-02 14:46:27', '[]');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `google_id` varchar(500) DEFAULT NULL,
  `notification_status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `notification_status`) VALUES
(1, 1, 'admin', 'admin@gmail.com', NULL, '$2y$10$LfGwWDuXgG20Gz3C4EQkaeId7xY08TvqoWNziQYzhYpLmTel.kIJi', 'U3UTgHKFxDDsPyi6AbF8CuPoTixU4f5Lh37SohSFov7y4whjSLF3gA6qdptJ', NULL, '2023-01-02 09:49:31', NULL, 1),
(4, 1, 'admin2', 'admin2@gmail.com', NULL, '1234', NULL, NULL, '2023-01-02 08:27:38', NULL, 1),
(5, 1, 'admin3', 'admin3@gmail.com', NULL, '123123', NULL, NULL, '2023-01-02 08:27:43', NULL, 1),
(6, 1, 'admin4', 'admin4@gmail.com', NULL, '123123', NULL, NULL, NULL, NULL, 0),
(14, 2, 'Ghulam Dastgeer', 'gdastgeer349@gmail.com', NULL, '$2y$10$wsSWJBPXRRWgBXL.zvuQ4e9W/Y2WakTpWkB6uxIKYG.BW8VUNVoga', NULL, '2023-01-02 14:32:20', '2023-01-02 14:32:20', '107629543759405883358', 0),
(15, 2, 'ghulam dastgeer', 'ghulam.dastgeer374@gmail.com', NULL, '$2y$10$eCOnYMY6KE1RAsGgm6wtpOsQQ9ff0NR7WytSYvShZL4VVAPQHlN3K', NULL, '2023-01-02 14:45:35', '2023-01-02 14:45:35', '106116847300443102955', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chats`
--
ALTER TABLE `chats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `senderId_foreignKey` (`sender_id`),
  ADD KEY `receiverId_foreignKey` (`receiver_id`),
  ADD KEY `rideId_foreignKey` (`ride_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ride_id_foreignKey` (`ride_id`),
  ADD KEY `user_id_foreignKey` (`user_id`);

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
-- Indexes for table `rides`
--
ALTER TABLE `rides`
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
-- AUTO_INCREMENT for table `chats`
--
ALTER TABLE `chats`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `chats`
--
ALTER TABLE `chats`
  ADD CONSTRAINT `receiverId_foreignKey` FOREIGN KEY (`receiver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `rideId_foreignKey` FOREIGN KEY (`ride_id`) REFERENCES `rides` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `senderId_foreignKey` FOREIGN KEY (`sender_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `ride_id_foreignKey` FOREIGN KEY (`ride_id`) REFERENCES `rides` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_id_foreignKey` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
