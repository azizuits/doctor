-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2020 at 08:57 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `chambers`
--

CREATE TABLE `chambers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `chamber_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doctors_name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `chambers`
--

INSERT INTO `chambers` (`id`, `chamber_name`, `doctors_name`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Aziz', 'Dr. Mazed', NULL, NULL),
(2, 'Abdul Aziz', 'Dr. Mazed', NULL, NULL),
(3, 'North', 'Dr. Kibria', NULL, NULL),
(4, '031', 'Kheled', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `doctor_fees`
--

CREATE TABLE `doctor_fees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `schedule` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fee` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_fees`
--

INSERT INTO `doctor_fees` (`id`, `doctor_id`, `schedule`, `fee`, `created_at`, `updated_at`) VALUES
(1, 0, '5 pm', '500', NULL, NULL),
(2, 1, '6 PM', '600', NULL, NULL),
(3, 1, '7PM', '600', NULL, NULL),
(4, 1, '8 PM', '1000', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `dorctor_informations`
--

CREATE TABLE `dorctor_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degree` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `dorctor_informations`
--

INSERT INTO `dorctor_informations` (`id`, `name`, `phone`, `degree`, `experience`, `field`, `image`, `created_at`, `updated_at`) VALUES
(8, 'Md.Abdul Aziz Khan', '01557366852', 'MBBS', 'Surgery', 'No', '119846168_105348864662408_4263297434723374855_n.jpg', NULL, NULL),
(10, 'Johir', '01727990512', 'MBBS', 'hello', 'MBBS', '124060563_733683727222412_3285777236192866012_n.jpg', NULL, NULL),
(11, 'Md.Abdul Aziz Khan', '01876065631', 'MBBS', 'Surgery', 'MBBS', '124060563_733683727222412_3285777236192866012_n.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `employee_informations`
--

CREATE TABLE `employee_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `designation` varchar(25) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employee_informations`
--

INSERT INTO `employee_informations` (`id`, `name`, `phone`, `designation`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Md.Abdul', '01876065631', 'Assistant', '124060563_733683727222412_3285777236192866012_n.jpg', '2020-11-13 03:40:18', '2020-11-13 03:40:18'),
(3, 'Asraful Alam', '01557355455', 'Director', '124060563_733683727222412_3285777236192866012_n.jpg', '2020-11-21 10:25:58', '2020-11-21 10:27:44'),
(4, 'Kamal Uddin', '01727885225', 'Director', '124060563_733683727222412_3285777236192866012_n.jpg', '2020-11-22 08:20:47', '2020-11-22 08:20:47');

-- --------------------------------------------------------

--
-- Table structure for table `medicines`
--

CREATE TABLE `medicines` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `doz` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `medicines`
--

INSERT INTO `medicines` (`id`, `name`, `doz`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Napa', '3', 'Napa', NULL, NULL),
(2, 'Muhammed Abdul Aziz Khan', '5', 'No', NULL, NULL),
(3, 'Md. Shamim Reza', '3', 'no', NULL, NULL),
(4, 'Md. Shamim Reza', '5', 'No Descritpion', NULL, NULL);

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
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2016_06_01_000001_create_oauth_auth_codes_table', 1),
(3, '2016_06_01_000002_create_oauth_access_tokens_table', 1),
(4, '2016_06_01_000003_create_oauth_refresh_tokens_table', 1),
(5, '2016_06_01_000004_create_oauth_clients_table', 1),
(6, '2016_06_01_000005_create_oauth_personal_access_clients_table', 1),
(7, '2019_09_10_000000_create_permissions_table', 1),
(8, '2019_09_10_000001_create_roles_table', 1),
(9, '2019_09_10_000002_create_users_table', 1),
(10, '2019_09_10_000003_create_permission_role_pivot_table', 1),
(11, '2019_09_10_000004_create_role_user_pivot_table', 1),
(12, '2020_11_10_084323_create_dorctor_informations_table', 1),
(13, '2020_11_10_085428_create_employee_informations_table', 1),
(14, '2020_11_10_085814_create_patient_informations_table', 1),
(15, '2020_11_10_090025_create_chambers_table', 1),
(16, '2020_11_10_090817_create_schedules_table', 2),
(17, '2020_11_10_091201_create_prescriptions_table', 2),
(18, '2020_11_10_091721_create_medicines_table', 2),
(19, '2020_11_10_091913_create_tests_table', 2),
(20, '2020_11_10_092007_create_doctor_fees_table', 3),
(21, '2020_11_10_092955_create_order_schedule_books_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `oauth_access_tokens`
--

CREATE TABLE `oauth_access_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_auth_codes`
--

CREATE TABLE `oauth_auth_codes` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `scopes` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_clients`
--

CREATE TABLE `oauth_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `secret` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `redirect` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `personal_access_client` tinyint(1) NOT NULL,
  `password_client` tinyint(1) NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_personal_access_clients`
--

CREATE TABLE `oauth_personal_access_clients` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `client_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `oauth_refresh_tokens`
--

CREATE TABLE `oauth_refresh_tokens` (
  `id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `access_token_id` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `revoked` tinyint(1) NOT NULL,
  `expires_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `order_schedule_books`
--

CREATE TABLE `order_schedule_books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `patient_informations`
--

CREATE TABLE `patient_informations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `main_disease` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `patient_informations`
--

INSERT INTO `patient_informations` (`id`, `name`, `phone`, `main_disease`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Abdul Aziz', '01876065555', 'Fever', '124060563_733683727222412_3285777236192866012_n.jpg', NULL, NULL),
(3, 'Sohel Rana', '01557366558', 'Fever, Cough', '124060563_733683727222412_3285777236192866012_n.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `role_id` int(10) UNSIGNED NOT NULL,
  `permission_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `prescriptions`
--

CREATE TABLE `prescriptions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` int(11) NOT NULL,
  `patient_id` int(11) NOT NULL,
  `description` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `prescriptions`
--

INSERT INTO `prescriptions` (`id`, `doctor_id`, `patient_id`, `description`, `created_at`, `updated_at`) VALUES
(1, 0, 0, 'fd', NULL, NULL),
(2, 1, 1, 'Hello, Hello, Hello', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `schedules`
--

CREATE TABLE `schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `schedule_1` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule_2` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule_3` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `schedule_4` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `schedules`
--

INSERT INTO `schedules` (`id`, `schedule_1`, `schedule_2`, `schedule_3`, `schedule_4`, `date`, `created_at`, `updated_at`) VALUES
(1, '3-4 PM', '4-5 PM', '6-7 PM', '7-8 PM', '2020-11-18', '2020-11-12 12:42:05', '2020-11-12 12:42:05'),
(2, '3-4 PM', '4-5 PM', '6-7 PM', '7-8 PM', '2020-11-16', '2020-11-12 19:24:30', '2020-11-12 19:24:30'),
(3, '3-4 PM', '4-5 PM', '6-7 PM', '7-8 PM', '2020-11-16', '2020-11-12 19:24:39', '2020-11-12 19:24:39'),
(4, '3-4 PM', '4-5 PM', '6-7 PM', '7-8 PM', '2020-11-24', '2020-11-12 22:32:32', '2020-11-12 22:32:32'),
(5, '3-4 PM', '4-5 PM', '6-7 PM', NULL, '2020-11-10', '2020-11-22 09:56:57', '2020-11-22 09:56:57'),
(6, NULL, NULL, '6-7 PM', NULL, '2020-12-25', '2020-11-22 09:57:53', '2020-11-22 09:57:53');

-- --------------------------------------------------------

--
-- Table structure for table `tests`
--

CREATE TABLE `tests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tests`
--

INSERT INTO `tests` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Muhammed Abdul Aziz Khan', 'jhjhjk', '2020-11-12 20:18:11', '2020-11-12 20:18:11'),
(2, 'Muhammed Abdul Aziz Khan', 'hhhj', '2020-11-12 20:19:42', '2020-11-12 20:19:42'),
(3, 'Muhammed Abdul Aziz Khan', 'kjkjl', '2020-11-12 20:20:14', '2020-11-12 20:20:14'),
(4, 'Johir', 'Hello', '2020-11-12 20:28:49', '2020-11-12 20:28:49'),
(5, 'Abdul', 'Hello', '2020-11-12 20:32:49', '2020-11-12 20:32:49'),
(6, 'Muhammed Abdul Aziz Khan', 'Critical', '2020-11-22 09:17:37', '2020-11-22 09:17:37'),
(7, 'Muhammed Abdul Aziz Khan', 'no Comment', '2020-11-22 13:00:35', '2020-11-22 13:00:35');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` datetime DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@admin.com', NULL, '$2y$10$qyxYm.2dlaXROvs0OrGHseo4qbeissRMqNWdhlcr/vUqE62vN94Fi', NULL, '2019-09-10 08:00:26', '2019-09-10 08:00:26', NULL),
(2, 'tipu', 'tipu@gmail.com', NULL, '$2y$10$sOMb/ylifUP2DeJ7ZEnJe.M5pk8k63xbuney7Msk5x.He3figDlJy', NULL, '2020-10-13 02:58:29', '2020-10-13 02:58:29', NULL),
(3, 'jewel', 'ad@ad', NULL, '$2y$10$rRQ6Eu1TvrNLhVIh9LNMPeOcYSCggA22PvhI7ZdFumrC1eS88N/46', NULL, '2020-10-22 05:42:50', '2020-10-22 05:42:50', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chambers`
--
ALTER TABLE `chambers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `doctor_fees`
--
ALTER TABLE `doctor_fees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dorctor_informations`
--
ALTER TABLE `dorctor_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee_informations`
--
ALTER TABLE `employee_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `medicines`
--
ALTER TABLE `medicines`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_access_tokens`
--
ALTER TABLE `oauth_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_access_tokens_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_auth_codes`
--
ALTER TABLE `oauth_auth_codes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_auth_codes_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_clients_user_id_index` (`user_id`);

--
-- Indexes for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `oauth_refresh_tokens`
--
ALTER TABLE `oauth_refresh_tokens`
  ADD PRIMARY KEY (`id`),
  ADD KEY `oauth_refresh_tokens_access_token_id_index` (`access_token_id`);

--
-- Indexes for table `order_schedule_books`
--
ALTER TABLE `order_schedule_books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `patient_informations`
--
ALTER TABLE `patient_informations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD KEY `role_id_fk_6744` (`role_id`),
  ADD KEY `permission_id_fk_6744` (`permission_id`);

--
-- Indexes for table `prescriptions`
--
ALTER TABLE `prescriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD KEY `user_id_fk_6753` (`user_id`),
  ADD KEY `role_id_fk_6753` (`role_id`);

--
-- Indexes for table `schedules`
--
ALTER TABLE `schedules`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tests`
--
ALTER TABLE `tests`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chambers`
--
ALTER TABLE `chambers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `doctor_fees`
--
ALTER TABLE `doctor_fees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `dorctor_informations`
--
ALTER TABLE `dorctor_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `employee_informations`
--
ALTER TABLE `employee_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `medicines`
--
ALTER TABLE `medicines`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `oauth_clients`
--
ALTER TABLE `oauth_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `oauth_personal_access_clients`
--
ALTER TABLE `oauth_personal_access_clients`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_schedule_books`
--
ALTER TABLE `order_schedule_books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `patient_informations`
--
ALTER TABLE `patient_informations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prescriptions`
--
ALTER TABLE `prescriptions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `schedules`
--
ALTER TABLE `schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tests`
--
ALTER TABLE `tests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_id_fk_6744` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_id_fk_6744` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
