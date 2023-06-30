-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 30, 2023 at 07:09 AM
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
  `fullname` text DEFAULT NULL,
  `mobileno` text DEFAULT NULL,
  `bloodgroup` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `dateofbirth` text DEFAULT NULL,
  `fathername` text DEFAULT NULL,
  `mothername` text DEFAULT NULL,
  `religion` text DEFAULT NULL,
  `motherphone` text DEFAULT NULL,
  `fatherphone` text DEFAULT NULL,
  `fatheroccupation` text DEFAULT NULL,
  `motheroccupation` text DEFAULT NULL,
  `permanentaddress` text DEFAULT NULL,
  `correspondentaddress` text DEFAULT NULL,
  `localguardianname` text DEFAULT NULL,
  `localguardianno` text DEFAULT NULL,
  `category` text DEFAULT NULL,
  `tribe` text DEFAULT NULL,
  `postcode` text DEFAULT NULL,
  `gender` text DEFAULT NULL,
  `country` text DEFAULT NULL,
  `state` text DEFAULT NULL,
  `hslcyear` text DEFAULT NULL,
  `hslcrollno` text DEFAULT NULL,
  `hslcdivision` text DEFAULT NULL,
  `hslcpercentage` text DEFAULT NULL,
  `hslcboard` text DEFAULT NULL,
  `hsslcyear` text DEFAULT NULL,
  `hsslcrollno` text DEFAULT NULL,
  `hsslcdivision` text DEFAULT NULL,
  `hsslcpercentage` text DEFAULT NULL,
  `hsslcboard` text DEFAULT NULL,
  `schoolname` text DEFAULT NULL,
  `collegename` text DEFAULT NULL,
  `schoollastattended` text DEFAULT NULL,
  `collegelastattended` text DEFAULT NULL,
  `boarduniversity` text DEFAULT NULL,
  `cerificateno` text DEFAULT NULL,
  `certificatedate` text DEFAULT NULL,
  `subject1` text DEFAULT NULL,
  `subject2` text DEFAULT NULL,
  `subject3` text DEFAULT NULL,
  `subject4` text DEFAULT NULL,
  `subject5` text DEFAULT NULL,
  `previouspercentage` text DEFAULT NULL,
  `previousgrade` text DEFAULT NULL,
  `photo` text DEFAULT NULL,
  `hsslcmarksheet` text DEFAULT NULL,
  `hsslcadmitcard` text DEFAULT NULL,
  `birthcertificate` text DEFAULT NULL,
  `communitycertificate` text DEFAULT NULL,
  `DSE_English` text DEFAULT NULL,
  `DSE_History` text DEFAULT NULL,
  `DSE_Philosophy` text DEFAULT NULL,
  `DSE_Pol_Science` text DEFAULT NULL,
  `DSE_Sociology` text DEFAULT NULL,
  `GE_English` text DEFAULT NULL,
  `GE_History` text DEFAULT NULL,
  `GE_Philosophy` text DEFAULT NULL,
  `GE_Pol_Science` text DEFAULT NULL,
  `GE_Pol-Science` text DEFAULT NULL,
  `GE_Sociology` text DEFAULT NULL,
  `SEC_English` text DEFAULT NULL,
  `SEC_History` text DEFAULT NULL,
  `SEC_Philosophy` text DEFAULT NULL,
  `SEC_Pol_Science` text DEFAULT NULL,
  `SEC_Sociology` text DEFAULT NULL,
  `AECC_English` text DEFAULT NULL,
  `AECC_History` text DEFAULT NULL,
  `AECC_Philosophy` text DEFAULT NULL,
  `AECC_Pol_Science` text DEFAULT NULL,
  `AECC_Sociology` text DEFAULT NULL,
  `Hon_Sub_1` text DEFAULT NULL,
  `Hon_Sub_2` text DEFAULT NULL,
  `Hon_Sub_3` text DEFAULT NULL,
  `Hon_Sub_4` text DEFAULT NULL,
  `Hon_Sub_5` text DEFAULT NULL,
  `General_Course_1` text DEFAULT NULL,
  `General_Course_2` text DEFAULT NULL,
  `General_Course_3` text DEFAULT NULL,
  `General_Course_4` text DEFAULT NULL,
  `General_Course_5` text DEFAULT NULL,
  `status` enum('Pending','Approved') NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admisionforms`
--

INSERT INTO `admisionforms` (`id`, `user_id`, `fullname`, `mobileno`, `bloodgroup`, `email`, `dateofbirth`, `fathername`, `mothername`, `religion`, `motherphone`, `fatherphone`, `fatheroccupation`, `motheroccupation`, `permanentaddress`, `correspondentaddress`, `localguardianname`, `localguardianno`, `category`, `tribe`, `postcode`, `gender`, `country`, `state`, `hslcyear`, `hslcrollno`, `hslcdivision`, `hslcpercentage`, `hslcboard`, `hsslcyear`, `hsslcrollno`, `hsslcdivision`, `hsslcpercentage`, `hsslcboard`, `schoolname`, `collegename`, `schoollastattended`, `collegelastattended`, `boarduniversity`, `cerificateno`, `certificatedate`, `subject1`, `subject2`, `subject3`, `subject4`, `subject5`, `previouspercentage`, `previousgrade`, `photo`, `hsslcmarksheet`, `hsslcadmitcard`, `birthcertificate`, `communitycertificate`, `DSE_English`, `DSE_History`, `DSE_Philosophy`, `DSE_Pol_Science`, `DSE_Sociology`, `GE_English`, `GE_History`, `GE_Philosophy`, `GE_Pol_Science`, `GE_Pol-Science`, `GE_Sociology`, `SEC_English`, `SEC_History`, `SEC_Philosophy`, `SEC_Pol_Science`, `SEC_Sociology`, `AECC_English`, `AECC_History`, `AECC_Philosophy`, `AECC_Pol_Science`, `AECC_Sociology`, `Hon_Sub_1`, `Hon_Sub_2`, `Hon_Sub_3`, `Hon_Sub_4`, `Hon_Sub_5`, `General_Course_1`, `General_Course_2`, `General_Course_3`, `General_Course_4`, `General_Course_5`, `status`, `created_at`, `updated_at`) VALUES
(1, 9, 'savari savari', '08760870314', 'O-', 'irudayan111@gmail.com', '30.06.2023', 'savariyappan', 'Thripattur', NULL, '08760870314', '08760870314', NULL, NULL, 'Thripattur', NULL, NULL, NULL, NULL, NULL, NULL, 'Female', 'India', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'வி.மாதேப்பள்ளி.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', '2023-06-29 11:28:21', '2023-06-29 23:02:30'),
(2, 11, 'raj', '08760870314', 'AB-', 'irudayan111@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Thripattur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'India', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'பெரிய ஏறிகோடி.jpg', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Approved', '2023-06-29 11:43:13', '2023-06-29 23:05:27'),
(3, 13, 'noThripattur', '08760870314', 'AB+', 'irudayan111@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Thripattur', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'America', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'bg.png', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'DSE_English', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pending', '2023-06-29 11:43:53', '2023-06-29 12:16:37');

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
(14, '2023_06_22_091156_create_admisionforms_table', 2);

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
(9, 'an', 'and@gmail.com', 'Users', NULL, '$2y$10$HnOwa.XLXKImK4GjhKnLl.UFv.Up32MLn0PHGLA8Nxmc/NxBGdBkC', 'AHZf7J3tQob2DIBZ6U0ZS4uF0CyST1V8j7qxGuPq0afKZQcEQ2xL9IhA4wBB', '2023-06-23 23:30:29', '2023-06-23 23:30:29'),
(11, 'yes@gmail.com', 'yes@gmail.com', 'Users', NULL, '$2y$10$wBKXaQgE4IEl5JIa7fV91OJd1mpl99l0D2DLcprnED4uMTXg6ggPG', NULL, '2023-06-27 04:37:08', '2023-06-27 04:37:08'),
(12, 'savari savari', 'irudayan1@gmail.com', 'Users', NULL, '$2y$10$AhT5MEL/IMsjytUpcLIT6.7GKqWaM9ksTFF6T55x.W3q7JksothlG', NULL, '2023-06-27 04:48:33', '2023-06-27 04:48:33'),
(13, 'savari savari', 'no@gmail.com', 'Users', NULL, '$2y$10$CzZqGfNxS6ppzMicmHcVceIJGUnY1pRCm4R7m5w3Z7fqusrdRlVtS', NULL, '2023-06-27 05:01:56', '2023-06-27 05:01:56');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
