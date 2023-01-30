-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 29, 2023 at 09:18 PM
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
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `chat_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chats`
--

INSERT INTO `chats` (`id`, `sender_id`, `receiver_id`, `message`, `status`, `ride_id`, `created_at`, `updated_at`, `chat_type`) VALUES
(1, 23, 22, 'hi i am admin2', 0, 15, '2023-01-04 11:59:08', '2023-01-04 11:59:08', 'group'),
(2, 23, 22, 'i am make a deal and i am admin2', 0, 15, '2023-01-04 11:59:33', '2023-01-04 11:59:33', 'group'),
(3, 24, 22, 'hi i am admin3 and i am sendig message', 0, 15, '2023-01-04 12:01:58', '2023-01-04 12:01:58', 'group'),
(4, 23, 22, 'hi admin 1 i am admin 2 and i am sending message personally', 0, 15, '2023-01-04 12:02:55', '2023-01-04 12:02:55', 'p'),
(5, 22, 23, 'sender is admin1', 0, 15, '2023-01-04 18:11:49', '2023-01-04 18:11:49', 'group'),
(6, 24, 23, 'hi i am admin and i am sending it personnaly', 0, 16, '2023-01-04 13:38:17', '2023-01-04 13:38:17', 'p'),
(7, 22, 23, 'hi i am admin', 0, 16, '2023-01-08 06:23:06', '2023-01-08 06:23:06', 'p'),
(8, 22, 22, 'aaa', 0, 17, '2023-01-13 06:37:38', '2023-01-13 06:37:38', 'group');

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
(5, '2022_12_24_110309_ride', 1),
(6, '2023_01_19_101040_create_password_resets_table', 2);

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
  `title` varchar(100) NOT NULL,
  `status` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `message`, `ride_id`, `user_id`, `created_at`, `updated_at`, `title`, `status`) VALUES
(1, 'chat', 'hi admin1', 15, 22, '2023-01-08 10:08:30', '2023-01-08 05:54:48', 'Message', 0),
(2, 'chat', 'hi i am admin', 16, 23, '2023-01-08 06:23:06', '2023-01-08 06:23:06', 'You receive a new message', NULL),
(3, 'chat', 'aaa', 17, 22, '2023-01-13 06:37:38', '2023-01-13 06:37:38', 'You receive a new message', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
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
  `price` varchar(255) DEFAULT NULL,
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
(15, 'Ride 1', 'Admin 1', '123', '22', 'germeny', 'moraco', '21', '8', '0', '0', '2023-01-27 19:00:00', '2023-01-04 11:55:28', '[]'),
(16, 'ride 2', 'admin2 ride', '897', '23', 'moraco', 'jehlem', '6', '5', '0', '0', '2023-01-27 19:02:24', '2023-01-08 09:35:04', '[\"24\"]'),
(17, 'ride 3', 'great ride', '897', '22', 'jehlem', 'islamabad', '6', '7', '1', '0', '2023-01-06 05:59:46', '2023-01-08 09:31:53', '[\"23\",\"24\"]'),
(18, 'ride 4', 'great is great', '450', '22', 'gujrat', 'gujranwala', '8', '6', '4', '0', '2023-01-06 06:00:25', '2023-01-06 06:00:25', '[]'),
(19, 'ride by admin 5', 'great ride is', '789', '26', 'jehlem', 'pindi', '22', '8', '4', '0', '2023-01-08 06:08:32', '2023-01-08 06:18:42', '[]'),
(20, 'Ride by ghulam dastgeer', 'great ride', '769', '27', 'moraco', 'china', '4', '8', '2', '0', '2023-01-08 09:42:18', '2023-01-08 10:02:47', '[\"24\"]'),
(21, 'ride by user1', 'ride by user 1', 'TPA', '30', 'jehlem', 'moraco', '7', '8', '5', '0', '2023-01-12 04:18:11', '2023-01-12 04:18:11', '[]'),
(22, 'ride by driver1', 'great ride by driver 1', '800', '29', 'pindi', 'lahore', '8', '7', '5', '0', '2023-01-12 04:19:20', '2023-01-12 04:19:20', '[]'),
(23, 'Ride by m', 'great ride', 'TPA', '32', 'moraco', 'englan', '9', '9', '4', '0', '2023-01-13 06:42:56', '2023-01-13 06:50:51', '[\"22\"]'),
(24, 'ride by me', 'great ride', '778', '51', 'moraco', 'gujarki', '22', '8', '4', '1', '2023-01-28 07:57:13', '2023-01-27 11:55:13', '[]'),
(25, 'ride 2 by me', 'great ride', '890', '51', 'moraco', 'lahore', '21', '8', '6', '0', '2022-01-31 12:08:45', '2023-01-27 12:08:45', '[]'),
(26, 'ride by gd', 'jdksjsjha', '6777', '55', 'moeaco', 'malysia', '23', '5', '3', '1', '2023-01-29 12:39:32', '2023-01-29 12:39:32', '[]');

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
  `notification_status` int(11) DEFAULT NULL,
  `photo` varchar(500) DEFAULT NULL,
  `verified` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `google_id`, `notification_status`, `photo`, `verified`) VALUES
(22, 1, 'Admin1', 'admin1@gmail.com', NULL, '$2y$10$H5dCK8IemPekG3R6FTWtOufRJaXF/0swkRpIF1TcoqTDaODjXsGPS', 'WCwsiWqzrFozTbMMXmBS8kUjifjAuCS0ID8qJiBQLy0WFEP9fw9yvEva69U7', '2023-01-04 11:52:56', '2023-01-08 09:09:37', NULL, 1, '1672851382.jpg', NULL),
(23, 1, 'Admin2', 'Admin2@gmail.com', NULL, '$2y$10$lensjyWlJrwjv7im5FqErePgT/Xhx5p0rJYWFDOwX.NbNQ437dLUC', 'urjgFtcB3zo7Jxhicu47fnS1eTOZV8MPK2WwhIqxfL8EJYbggdNPYjLkqf8d', '2023-01-04 11:57:05', '2023-01-08 09:00:24', NULL, 1, NULL, NULL),
(24, 1, 'admin3', 'admin3@gmail.com', NULL, '$2y$10$qgqCvkAwkhQaOpxIf5OwLuuWr/llljKWxcPLkCO9fhgbOwlNFWSPy', 'uey2wtkrblcMVfnWpiOstPNq5lTIgDim4i7kY7HTaIH4xkfr3ggGE2nh2tlO', '2023-01-04 12:00:06', '2023-01-04 14:00:07', NULL, 1, NULL, NULL),
(25, 1, 'Admin4', 'Admin4@gmail.com', NULL, '$2y$10$b6OZrCrHQBr3bwFcW0KQReN8abCYHkjGcLs7N50Ty2.v.pRraP/n2', 'xUGhoBeCF744KD2V904cWRV5eOyKw5fli5F5G0Ert9EloO6eM1mMVB6N1jKW', '2023-01-04 14:00:42', '2023-01-06 09:09:59', NULL, NULL, NULL, NULL),
(26, 2, 'Admin5', 'admin5@gmail.com', NULL, '$2y$10$W4.mgXMYJRn6iYCpgpcIsOm.LgPWJTszfLZfd4vUJv6yAnPge1dXi', 'sROtRrTMeFRhhmBMN4i45r6pHDM9yyb1kJJG3cMKz1wqxR4GX1AP7HlydAwW', '2023-01-07 09:35:14', '2023-01-08 06:19:04', NULL, NULL, NULL, NULL),
(29, 2, 'driver1', 'driver1@gmail.com', NULL, '$2y$10$eUHxkkt55dqNsFDCfTetjOuXrtrSlqiU.MtcX/jPIhf6NpRftJ3Lq', 'E5lecQ2uBI7v1JrJwoo4oLQ3HzmUS9P8QpoHlTlyuamxHo6vEAFgkMTM7jRb', '2023-01-12 04:13:47', '2023-01-12 04:13:47', NULL, NULL, NULL, NULL),
(30, 3, 'user1', 'user1@gmail.com', NULL, '$2y$10$.ETeEleccrKVbXcl5yPevO6M4SVOO6i8vcH3u0Mrf7P1TO62vukPy', 'JQHD7V20VCj6naMgW8LZsswGci6xhYYvKU1Z1CcjeLUmPqt0XYBeqnZnFQqX', '2023-01-12 04:15:25', '2023-01-12 04:15:25', NULL, NULL, NULL, NULL),
(57, 2, 'Ghulam Dastgeer', 'gdastgeer349@gmail.com', NULL, '$2y$10$18y7ZxDTdJgaZrHiJZvc/.dc40kg97htpDqeRm.vbo9MfI.7FmPMG', 'clWy8PI0RbfZ8UEClGBsqKQsxy9vIx696LtOJv0QP2PBh03YtoS44Hf7iymO', '2023-01-29 15:10:19', '2023-01-29 15:15:10', '107629543759405883358', 0, NULL, 1);

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
  ADD PRIMARY KEY (`id`),
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
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `password_resets`
--
ALTER TABLE `password_resets`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rides`
--
ALTER TABLE `rides`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
