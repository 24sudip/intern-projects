-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2024 at 02:19 AM
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
-- Database: `fourth_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `format` varchar(255) NOT NULL,
  `subject_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `author` varchar(255) NOT NULL,
  `publication_date` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `rack_number` varchar(255) NOT NULL,
  `number_of_copy` int(11) NOT NULL,
  `book_photo` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `format`, `subject_id`, `title`, `author`, `publication_date`, `price`, `rack_number`, `number_of_copy`, `book_photo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Journal', 6, 'Citationem in ocexer', 'Voluptas eum dolorem', '1997-03-22', 557, '823', 3, '202405041248271.jpg', '2024-05-04 06:48:27', '2024-05-04 09:50:56', NULL),
(2, 'eBook', 1, 'Aliquip laborum Min', 'Quis eaque tenetur v', '2022-03-17', 787, '807', 3, '202405041255162.jpg', '2024-05-04 06:55:16', '2024-05-04 06:55:16', NULL),
(3, 'Paperback', 2, 'Ea aperiam dolores u', 'Ad nemo voluptas asp', '1996-10-20', 76, '337', 2, '202405041545443.jpg', '2024-05-04 09:42:47', '2024-05-05 05:30:19', NULL),
(4, 'Newspaper', 5, 'Excepturi incidunt', 'Dolores dolores libe', '2015-11-26', 174, '524', 2, '202405051024274.jpg', '2024-05-05 04:24:27', '2024-05-05 05:30:46', '2024-05-05 05:30:46'),
(6, 'Paperback', 4, 'Utplicabo Consequat', 'Sunt enim veritatis', '1987-05-26', 96, '718', 2, '202405051026376.jpg', '2024-05-05 04:26:37', '2024-05-05 05:09:35', '2024-05-05 05:09:35'),
(8, 'Journal', 5, 'Ut Nam non eos autem', 'Corporis eum adipisc', '2019-03-03', 407, '326', 2, '202405051524228.jpg', '2024-05-05 09:24:21', '2024-05-05 09:24:22', NULL);

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
-- Table structure for table `inventories`
--

CREATE TABLE `inventories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_status` varchar(255) NOT NULL,
  `borrow_date` varchar(255) DEFAULT NULL,
  `due_date` varchar(255) DEFAULT NULL,
  `return_date` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `inventories`
--

INSERT INTO `inventories` (`id`, `book_id`, `user_id`, `user_status`, `borrow_date`, `due_date`, `return_date`, `created_at`, `updated_at`) VALUES
(1, 8, 2, 'borrowed', '2024-05-10 14:25:38', '2024-05-12 23:59:59', '2024-05-10 14:25:23', '2024-05-07 09:31:56', '2024-05-10 08:25:38'),
(2, 8, 3, 'borrowed', '2024-05-08 14:37:39', '2024-05-10 23:59:59', NULL, '2024-05-08 08:37:39', NULL),
(3, 3, 5, 'returned', '2024-05-08 14:45:24', '2024-05-10 23:59:59', '2024-05-08 15:07:35', '2024-05-08 08:45:24', '2024-05-08 09:07:35'),
(4, 3, 6, 'returned', '2024-05-08 14:45:51', '2024-05-09 23:59:59', '2024-05-11 11:56:56', '2024-05-08 08:45:51', '2024-05-11 05:56:56'),
(5, 1, 5, 'borrowed', '2024-05-08 15:40:42', '2024-05-10 23:59:59', NULL, '2024-05-08 09:40:42', NULL),
(6, 1, 7, 'returned', '2024-05-08 15:42:30', '2024-05-10 23:59:59', '2024-05-11 11:57:03', '2024-05-08 09:41:07', '2024-05-11 05:57:03'),
(7, 2, 1, 'returned', '2024-05-08 15:49:16', '2024-05-10 23:59:59', '2024-05-11 11:57:07', '2024-05-08 09:49:16', '2024-05-11 05:57:07'),
(8, 2, 2, 'returned', '2024-05-08 15:50:37', '2024-05-10 23:59:59', '2024-05-10 14:34:37', '2024-05-08 09:49:28', '2024-05-10 08:34:38'),
(9, 3, 2, 'borrowed', '2024-05-10 14:22:48', '2024-05-12 23:59:59', NULL, '2024-05-10 08:22:48', NULL),
(10, 2, 6, 'borrowed', '2024-05-10 14:39:26', '2024-05-12 23:59:59', NULL, '2024-05-10 08:39:26', NULL);

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
(4, '2024_04_30_110320_add_role_to_users', 2),
(6, '2024_05_02_114554_add_profile_photo_to_users', 3),
(7, '2024_05_03_113617_create_subjects_table', 4),
(8, '2024_05_03_151652_create_books_table', 5),
(9, '2024_05_03_154715_add_deleted_at_to_books_table', 6),
(10, '2024_05_07_120903_create_inventories_table', 7);

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
('fwcJMqUsz8invcMdN1d0ilpg5bGQCRwOXQmBT6Ge', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVzZCVEJHMXZLbFBVNlRqemFFSmFBMURTOUQ5VUlWaXlYSkp6ZzZMbiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1717152732);

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `subject_name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `subject_name`, `created_at`, `updated_at`) VALUES
(1, 'Novel', '2024-05-03 06:00:41', NULL),
(2, 'Poem', '2024-05-03 06:14:04', '2024-05-03 07:45:46'),
(4, 'Short Story', '2024-05-03 07:57:33', NULL),
(5, 'Essay', '2024-05-03 07:57:57', NULL),
(6, 'Drama', '2024-05-03 07:58:17', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'member',
  `profile_photo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `role`, `profile_photo`) VALUES
(1, 'Cadman Francis', 'jehequza@mailinator.com', NULL, '$2y$12$.F5IOaUUr5qUrRKG6Njo9OiM0WKzB8mrSku7qDOmuSZ.Ha7Lm672q', 'FUSTyzWa4XReIgBzZLt0gIHF92oqMhDRRoFx08LslMDJZpGDWmRbEVK9R06Q', '2024-04-28 23:38:28', '2024-05-02 05:54:57', 'librarian', '1.jpg'),
(2, 'Melissa Lara', 'larap@mailinator.com', NULL, '$2y$12$mdYuXyLzPvtibw/VF2XR..TCMnOSqnzt6noKSVQmR5cqPXZW3IfDG', 'hYKGgCv69RoSl1Jp2sn4Qu40RJItxnCiJu1VBCZdwrHsEuQhJnEleGIjvxwk', '2024-04-29 00:56:49', '2024-05-05 07:46:26', 'member', NULL),
(3, 'Daphne Webb', 'pevolokoha@mailinator.com', NULL, '$2y$12$5pbeuiuit3wvsR70G.4zvO78LpdE1thAvVIVrMYeyuJA9sBlTQEk6', 'WGNKWLZyyrQwNOaDnRQ4kqD8lxPOY9ctCjMbqwjq8W1yzhdjT47f6Jb2ZWUy', '2024-04-29 01:19:09', '2024-04-29 01:19:09', 'member', NULL),
(5, 'Jonas Craft', 'hohuf@mailinator.com', NULL, '$2y$12$5RZ3SXpIl7es60kJ.wo5z.LgUxU2xdq8gAZxUZ21At3eZ2qzUaBnO', NULL, '2024-04-29 07:25:31', '2024-05-05 07:46:44', 'member', NULL),
(6, 'Bevis Navarro', 'webotekefa@mailinator.com', NULL, '$2y$12$DMVNa3qHiZRDwbn5j9J.luTMQcRGxBEl0STGWVv8/gDXDJwEPzBsK', NULL, '2024-05-02 09:46:53', '2024-05-02 09:46:53', 'member', NULL),
(7, 'Tashya Richard', 'kuxeci@mailinator.com', NULL, '$2y$12$Ee2S/Qzmik/0dqDmUHKTKuIUsBopaO4MEYj359EtCP3eMcYuRIH8.', NULL, '2024-05-05 06:33:16', '2024-05-05 06:33:16', 'member', NULL),
(8, 'Philip Alvarado', 'tohapozar@mailinator.com', NULL, '$2y$12$HXz8FfjZ..k2EElKMZY42OjDjqbALCnKnYH9GHdQKTKb8E74qRfCq', NULL, '2024-05-05 06:33:45', '2024-05-05 07:46:18', 'canceled', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `inventories`
--
ALTER TABLE `inventories`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `inventories`
--
ALTER TABLE `inventories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
