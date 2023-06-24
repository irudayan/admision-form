-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2023 at 01:53 PM
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
-- Database: `admision-form`
--

-- --------------------------------------------------------

--
-- Table structure for table `admisionforms`
--

CREATE TABLE `admisionforms` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `mobileno` varchar(255) DEFAULT NULL,
  `bloodgroup` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `dateofbirth` varchar(255) DEFAULT NULL,
  `fathername` varchar(255) DEFAULT NULL,
  `mothername` varchar(255) DEFAULT NULL,
  `religion` varchar(255) DEFAULT NULL,
  `motherphone` varchar(255) DEFAULT NULL,
  `fatherphone` varchar(255) DEFAULT NULL,
  `fatheroccupation` varchar(255) DEFAULT NULL,
  `motheroccupation` varchar(255) DEFAULT NULL,
  `permanentaddress` varchar(255) DEFAULT NULL,
  `correspondentaddress` varchar(255) DEFAULT NULL,
  `localguardianname` varchar(255) DEFAULT NULL,
  `localguardianno` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `tribe` varchar(255) DEFAULT NULL,
  `postcode` varchar(255) DEFAULT NULL,
  `gender` varchar(255) DEFAULT NULL,
  `country` varchar(255) DEFAULT NULL,
  `state` varchar(255) DEFAULT NULL,
  `hslcyear` varchar(255) DEFAULT NULL,
  `hslcrollno` varchar(255) DEFAULT NULL,
  `hslcdivision` varchar(255) DEFAULT NULL,
  `hslcpercentage` varchar(255) DEFAULT NULL,
  `hslcboard` varchar(255) DEFAULT NULL,
  `hsslcyear` varchar(255) DEFAULT NULL,
  `hsslcrollno` varchar(255) DEFAULT NULL,
  `hsslcdivision` varchar(255) DEFAULT NULL,
  `hsslcpercentage` varchar(255) DEFAULT NULL,
  `hsslcboard` varchar(255) DEFAULT NULL,
  `schoolname` varchar(255) DEFAULT NULL,
  `collegename` varchar(255) DEFAULT NULL,
  `schoollastattended` varchar(255) DEFAULT NULL,
  `collegelastattended` varchar(255) DEFAULT NULL,
  `boarduniversity` varchar(255) DEFAULT NULL,
  `cerificateno` varchar(255) DEFAULT NULL,
  `certificatedate` varchar(255) DEFAULT NULL,
  `subject1` varchar(255) DEFAULT NULL,
  `subject2` varchar(255) DEFAULT NULL,
  `subject3` varchar(255) DEFAULT NULL,
  `subject4` varchar(255) DEFAULT NULL,
  `subject5` varchar(255) DEFAULT NULL,
  `previouspercentage` varchar(255) DEFAULT NULL,
  `previousgrade` varchar(255) DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `hsslcmarksheet` varchar(255) DEFAULT NULL,
  `hsslcadmitcard` varchar(255) DEFAULT NULL,
  `birthcertificate` varchar(255) DEFAULT NULL,
  `communitycertificate` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admisionforms`
--

INSERT INTO `admisionforms` (`id`, `user_id`, `fullname`, `mobileno`, `bloodgroup`, `email`, `dateofbirth`, `fathername`, `mothername`, `religion`, `motherphone`, `fatherphone`, `fatheroccupation`, `motheroccupation`, `permanentaddress`, `correspondentaddress`, `localguardianname`, `localguardianno`, `category`, `tribe`, `postcode`, `gender`, `country`, `state`, `hslcyear`, `hslcrollno`, `hslcdivision`, `hslcpercentage`, `hslcboard`, `hsslcyear`, `hsslcrollno`, `hsslcdivision`, `hsslcpercentage`, `hsslcboard`, `schoolname`, `collegename`, `schoollastattended`, `collegelastattended`, `boarduniversity`, `cerificateno`, `certificatedate`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `previouspercentage`, `previousgrade`, `photo`, `hsslcmarksheet`, `hsslcadmitcard`, `birthcertificate`, `communitycertificate`, `created_at`, `updated_at`) VALUES
(9, 8, 'irudayan raj', '08760870314', 'B+', 'irudayan111@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Thripattur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '', '2023-06-23 23:20:23', '2023-06-24 01:42:27'),
(10, 9, 'savari savari', '08760870314', 'AB+', 'irudayan111@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Thripattur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'C:\\xampp\\tmp\\php6FAA.tmp', NULL, NULL, NULL, 'C:\\xampp\\tmp\\php6FAB.tmp', '2023-06-24 01:53:24', '2023-06-24 06:19:53'),
(18, 10, 'savari savari', '08760870314', 'B+', 'irudayan111@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Thripattur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'C:\\xampp\\tmp\\phpF2E9.tmp', 'imresizer-1685107347457 (1).jpg', NULL, 'WhatsApp Image 2023-05-16 at 2.52.18 PM.jpeg', 'C:\\xampp\\tmp\\phpF2EA.tmp', '2023-06-24 04:57:04', '2023-06-24 06:18:15');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(8, '2023_06_22_091156_create_admisionforms_table', 2);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `usertype` enum('Users','Admin') DEFAULT 'Users',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `usertype`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'irudayan111@gmail.com', 'Admin', NULL, '$2y$10$BSYB/r.5z7av3sdK9ADqgejLHt80nyewQDYPcDtQdzE9/CO5dFlqa', NULL, '2023-06-19 23:52:38', '2023-06-21 06:20:48'),
(8, 'raj', 'raj@gamil.com', 'Users', NULL, '$2y$10$MHxo/a1SRcp2ud8awDQr7.p4Cyly0rT47/07uQOjdTRTzZ7pNue7K', NULL, '2023-06-23 11:42:28', '2023-06-23 11:42:28'),
(9, 'an', 'and@gmail.com', 'Users', NULL, '$2y$10$HnOwa.XLXKImK4GjhKnLl.UFv.Up32MLn0PHGLA8Nxmc/NxBGdBkC', NULL, '2023-06-23 23:30:29', '2023-06-23 23:30:29'),
(10, 'sr', 'sr@gmail.com', 'Users', NULL, '$2y$10$kq4deVVFVDGlMA6HPDaYKun9/jWBp6aAGUtqTwcUVZyXk1yUyUMkW', NULL, '2023-06-24 01:58:50', '2023-06-24 01:58:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admisionforms`
--
ALTER TABLE `admisionforms`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admisionforms`
--
ALTER TABLE `admisionforms`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
