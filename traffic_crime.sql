-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 10:30 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `traffic_crime`
--

-- --------------------------------------------------------

--
-- Table structure for table `driver_crimes`
--

CREATE TABLE `driver_crimes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `crime_id` bigint(20) UNSIGNED DEFAULT NULL,
  `driver_id` bigint(20) UNSIGNED DEFAULT NULL,
  `points` int(11) NOT NULL,
  `officer_id` bigint(20) UNSIGNED DEFAULT NULL,
  `license_id` bigint(20) UNSIGNED DEFAULT NULL,
  `checkpoint_id` bigint(20) UNSIGNED DEFAULT NULL,
  `vehicle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driver_crimes`
--

INSERT INTO `driver_crimes` (`id`, `crime_id`, `driver_id`, `points`, `officer_id`, `license_id`, `checkpoint_id`, `vehicle`, `created_at`, `updated_at`) VALUES
(1, 1, 9, 5, 2, 3, 1, 'KCB997TP', '2021-12-12 17:12:52', '2021-12-12 17:12:52'),
(2, 3, 9, 10, 2, 3, 1, 'KCB997TP', '2021-12-12 17:12:52', '2021-12-12 17:12:52'),
(3, 1, 10, 5, 2, 4, 1, 'KCB997TL', '2021-12-12 17:53:12', '2021-12-12 17:53:12'),
(4, 3, 10, 10, 2, 4, 1, 'KCB997TL', '2021-12-12 17:53:13', '2021-12-12 17:53:13'),
(5, 4, 10, 10, 2, 4, 1, 'KCB997TL', '2021-12-12 17:53:13', '2021-12-12 17:53:13'),
(6, 1, 12, 5, 11, 5, 1, 'KCB997TA', '2021-12-15 05:58:00', '2021-12-15 05:58:00'),
(7, 4, 12, 10, 11, 5, 1, 'KCB997TA', '2021-12-15 05:58:00', '2021-12-15 05:58:00'),
(8, 1, 12, 5, 11, 5, 1, 'KCB997TA', '2021-12-15 06:00:18', '2021-12-15 06:00:18'),
(9, 3, 12, 10, 11, 5, 1, 'KCB997TA', '2021-12-15 06:00:18', '2021-12-15 06:00:18'),
(10, 4, 12, 10, 11, 5, 1, 'KCB997TA', '2021-12-15 06:00:18', '2021-12-15 06:00:18');

-- --------------------------------------------------------

--
-- Table structure for table `driving_licenses`
--

CREATE TABLE `driving_licenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_names` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `license_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_issue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_expiry` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `county_of_residence` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `plate_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uploaded_vehicle` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driving_license` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `driver_points` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `offense_points` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `driver_verification` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `driving_licenses`
--

INSERT INTO `driving_licenses` (`id`, `driver_user_id`, `surname`, `other_names`, `id_number`, `license_number`, `date_of_birth`, `date_of_issue`, `gender`, `phone_number`, `date_of_expiry`, `county_of_residence`, `plate_number`, `uploaded_vehicle`, `driving_license`, `driver_points`, `offense_points`, `driver_verification`, `created_at`, `updated_at`) VALUES
(1, 3, 'Driver', '', '88585757', 'okms76s', '1998-10-01', '2021-11-29', 'Male', '0789654432', '2021-12-30 08:00:00', 'Mombasa', 'okmnbv99', 'Capture-1638761750.PNG', 'Student_-1638761750.pdf', '100', '0', 'pending', '2021-12-06 11:35:50', '2021-12-06 11:35:50'),
(2, 8, 'makori', 'makori ndiragu', '12345678', 'QWE1234', '1998-01-06', '2021-10-12', 'Male', '0720882599', '2022-07-30 21:00:00', 'Mombasa', 'KCB997TT', 'video-1639326659.png', 'Network Topologies-1639326660.pdf', '100', '0', 'pending', '2021-12-12 13:31:00', '2021-12-12 13:31:00'),
(3, 9, 'makori', 'makori ndiragu', '12345679', 'QWE1235', '1998-01-06', '2021-10-12', 'Male', '0720882500', '2022-07-30 21:00:00', 'Mombasa', 'KCB997TP', 'destination-1-3-1639327179.png', 'BBM-115-Introduction-to-Microeconomics-Instructional-Material-1639327179.pdf', '100', '0', 'pending', '2021-12-12 13:39:39', '2021-12-12 13:39:39'),
(4, 10, 'surname', 'ONESMUS MUANGE', '34688148', 'QWE1239', '1993-06-10', '2019-05-22', 'Male', '0720882594', '2021-12-30 21:00:00', 'Mombasa', 'KCB997TL', 'gallery-one-img-1-1639342392.jpg', 'ds-1639342392.pdf', '100', '0', 'pending', '2021-12-12 17:53:12', '2021-12-12 17:53:12'),
(5, 12, 'new driver', 'best driver', '98765432', 'oplksma', '1970-01-01', '1990-01-01', 'Male', '0799889988', '2021-12-15 09:28:48', 'Nairobi', 'KCB997TA', 'gallery-one-img-1-1639556558.jpg', 'Results for KEVIN KYALO-1639556558.pdf', '100', '0', 'pending', '2021-12-15 05:22:38', '2021-12-15 06:28:48');

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
(5, '2021_12_05_093506_laratrust_setup_tables', 1),
(7, '2021_12_05_143033_create_driving_licenses_table', 2),
(9, '2021_12_06_040757_create_traffic_crimes_table', 3),
(13, '2021_12_06_045111_create_traffic_offenses_table', 4),
(14, '2021_12_06_050002_create_traffic_check_points_table', 4),
(15, '2021_12_06_050347_create_traffic_officers_table', 4),
(17, '2021_12_12_140536_create_driver_crimes_table', 5);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'users-create', 'Create Users', 'Create Users', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(2, 'users-read', 'Read Users', 'Read Users', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(3, 'users-update', 'Update Users', 'Update Users', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(4, 'users-delete', 'Delete Users', 'Delete Users', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(5, 'payments-create', 'Create Payments', 'Create Payments', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(6, 'payments-read', 'Read Payments', 'Read Payments', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(7, 'payments-update', 'Update Payments', 'Update Payments', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(8, 'payments-delete', 'Delete Payments', 'Delete Payments', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(9, 'profile-read', 'Read Profile', 'Read Profile', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(10, 'profile-update', 'Update Profile', 'Update Profile', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(11, 'module_1_name-create', 'Create Module_1_name', 'Create Module_1_name', '2021-12-05 17:40:56', '2021-12-05 17:40:56'),
(12, 'module_1_name-read', 'Read Module_1_name', 'Read Module_1_name', '2021-12-05 17:40:56', '2021-12-05 17:40:56'),
(13, 'module_1_name-update', 'Update Module_1_name', 'Update Module_1_name', '2021-12-05 17:40:56', '2021-12-05 17:40:56'),
(14, 'module_1_name-delete', 'Delete Module_1_name', 'Delete Module_1_name', '2021-12-05 17:40:56', '2021-12-05 17:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `permission_role`
--

CREATE TABLE `permission_role` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `permission_role`
--

INSERT INTO `permission_role` (`permission_id`, `role_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(6, 1),
(7, 1),
(8, 1),
(9, 1),
(9, 2),
(9, 3),
(10, 1),
(10, 2),
(10, 3),
(11, 4),
(12, 4),
(13, 4),
(14, 4);

-- --------------------------------------------------------

--
-- Table structure for table `permission_user`
--

CREATE TABLE `permission_user` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL
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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'superadministrator', 'Superadministrator', 'Superadministrator', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(2, 'trafficofficer', 'Trafficofficer', 'Trafficofficer', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(3, 'driver', 'Driver', 'Driver', '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(4, 'role_name', 'Role Name', 'Role Name', '2021-12-05 17:40:56', '2021-12-05 17:40:56');

-- --------------------------------------------------------

--
-- Table structure for table `role_user`
--

CREATE TABLE `role_user` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `team_id` bigint(20) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `role_user`
--

INSERT INTO `role_user` (`role_id`, `user_id`, `user_type`, `team_id`) VALUES
(1, 1, 'App\\Models\\User', NULL),
(2, 2, 'App\\Models\\User', NULL),
(3, 3, 'App\\Models\\User', NULL),
(4, 4, 'App\\Models\\User', NULL),
(2, 5, 'App\\Models\\User', NULL),
(2, 6, 'App\\Models\\User', NULL),
(2, 7, 'App\\Models\\User', NULL),
(2, 11, 'App\\Models\\User', NULL),
(3, 12, 'App\\Models\\User', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `display_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traffic_check_points`
--

CREATE TABLE `traffic_check_points` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `traffic_check_points`
--

INSERT INTO `traffic_check_points` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Nchiru Police Station', '2021-12-06 14:11:09', '2021-12-06 14:11:09');

-- --------------------------------------------------------

--
-- Table structure for table `traffic_crimes`
--

CREATE TABLE `traffic_crimes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `crime_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crime_points` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `crime_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `traffic_crimes`
--

INSERT INTO `traffic_crimes` (`id`, `crime_name`, `crime_points`, `crime_description`, `created_at`, `updated_at`) VALUES
(1, 'overspeeding', '5', 'Not observing the set time speed limit', '2021-12-06 12:32:42', '2021-12-06 12:32:42'),
(3, 'No License', '10', 'No license applied', '2021-12-12 12:51:33', '2021-12-12 12:51:33'),
(4, 'Expired License', '10', 'failed to Renew License', '2021-12-12 12:52:00', '2021-12-12 12:52:00');

-- --------------------------------------------------------

--
-- Table structure for table `traffic_offenses`
--

CREATE TABLE `traffic_offenses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `driver_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `officer_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `offense_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traffic_officers`
--

CREATE TABLE `traffic_officers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `traffic_user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `checkpoint_id` bigint(20) UNSIGNED DEFAULT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `traffic_officers`
--

INSERT INTO `traffic_officers` (`id`, `traffic_user_id`, `checkpoint_id`, `phone_number`, `picture`, `gender`, `created_at`, `updated_at`) VALUES
(1, 2, 1, '0707979695', 'gallery-one-img-5-1639341728.jpg', 'Male', '2021-12-06 14:11:33', '2021-12-12 17:42:08'),
(2, 11, 1, '0722998877', '4-1639553946.jpeg', 'Male', '2021-12-15 04:39:07', '2021-12-15 04:39:07');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `other_names` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `picture` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `surname`, `other_names`, `email`, `picture`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Superadministrator', '', 'superadministrator@app.com', NULL, NULL, '$2y$10$KyvFuXWv9GTctCfNcBp9A.Pv2GkdG4FMrkOMzPz7s6yrZRDhmIUou', NULL, '2021-12-05 17:40:55', '2021-12-05 17:40:55'),
(2, 'Trafficofficer', 'Evans Kimeu', 'trafficofficer@app.com', 'gallery-one-img-5-1639341728.jpg', NULL, '$2y$10$drvDRZw7lqzDxB0OrDIg..Hc1imKVc39bYoduzbLgegnrbQ/OfVBy', NULL, '2021-12-05 17:40:55', '2021-12-15 04:32:31'),
(3, 'Driver', '', 'driver@app.com', NULL, NULL, '$2y$10$OBMoFwis3hlGYIsadsAdxeCO/VoHzpOA4.AZR1Q0B.Ykx1IKiaRyO', NULL, '2021-12-05 17:40:56', '2021-12-05 17:40:56'),
(4, 'Role Name', '', 'role_name@app.com', NULL, NULL, '$2y$10$nH1Ho0mOY6Rh5L/UBrKFGuxj/35U1fngcCNECT8IUKmlfeUC3DmNi', NULL, '2021-12-05 17:40:56', '2021-12-05 17:40:56'),
(7, 'KiNG\'OO', 'ONESMUS MUANGE', 'onestohcoder81@gmail.com', NULL, NULL, '$2y$10$tNJF/5Qm9NwKSl6K/oXd6.Ni2GD0gGZLF/w7rvnywDx/txbtUO9/i', NULL, '2021-12-06 14:11:33', '2021-12-06 14:11:33'),
(8, 'makori', 'makori ndiragu', 'vnsdsmusyoki@gmail.com', NULL, NULL, '$2y$10$Q9ZdXkg89UBRHNOYPeuDhO5hFrjPsMMeP8T.x35cVOT5V5mExtP/2', NULL, '2021-12-12 13:30:59', '2021-12-12 13:30:59'),
(9, 'makori', 'makori ndiragu', 'kimcomputingspecialist@gmail.com', NULL, NULL, '$2y$10$QHlNfXmenVencXW/AeT7wOo75iddbSb6Aq0s0DVlCLRM8tUOXWtEK', NULL, '2021-12-12 13:39:39', '2021-12-12 13:39:39'),
(10, 'surname', 'ONESMUS MUANGE', 'vnsmusyoki@gmail.com', NULL, NULL, '$2y$10$fb6hJNzt8Vhx3eDRhIvBruMFXOw6zlBMEUSJSpphXdSu4TWVwhuq6', NULL, '2021-12-12 17:53:12', '2021-12-12 17:53:12'),
(11, 'captain', 'captain vinnie', 'captain@gmail.com', NULL, NULL, '$2y$10$4aRFO0AO0FF6gKDwYL3L6e5hZzSwVsitjKJClc5DuXfO7x0pz/8Mq', NULL, '2021-12-15 04:39:05', '2021-12-15 04:39:05'),
(12, 'new driver', 'best driver', 'bestdriver@gmail.com', '1-1639556304.jpeg', NULL, '$2y$10$Rsjae.t6iVygubPPtvnr2eeDYmgqS/k8RhXLotcsf5oPi4ZgEujFa', NULL, '2021-12-15 05:18:24', '2021-12-15 05:18:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `driver_crimes`
--
ALTER TABLE `driver_crimes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `driver_crimes_crime_id_foreign` (`crime_id`),
  ADD KEY `driver_crimes_driver_id_foreign` (`driver_id`),
  ADD KEY `driver_crimes_officer_id_foreign` (`officer_id`),
  ADD KEY `driver_crimes_license_id_foreign` (`license_id`),
  ADD KEY `driver_crimes_checkpoint_id_foreign` (`checkpoint_id`);

--
-- Indexes for table `driving_licenses`
--
ALTER TABLE `driving_licenses`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `driving_licenses_id_number_unique` (`id_number`),
  ADD UNIQUE KEY `driving_licenses_license_number_unique` (`license_number`),
  ADD UNIQUE KEY `driving_licenses_plate_number_unique` (`plate_number`),
  ADD KEY `driving_licenses_driver_user_id_foreign` (`driver_user_id`);

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
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_unique` (`name`);

--
-- Indexes for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `permission_role_role_id_foreign` (`role_id`);

--
-- Indexes for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD UNIQUE KEY `permission_user_user_id_permission_id_user_type_team_id_unique` (`user_id`,`permission_id`,`user_type`,`team_id`),
  ADD KEY `permission_user_permission_id_foreign` (`permission_id`),
  ADD KEY `permission_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_unique` (`name`);

--
-- Indexes for table `role_user`
--
ALTER TABLE `role_user`
  ADD UNIQUE KEY `role_user_user_id_role_id_user_type_team_id_unique` (`user_id`,`role_id`,`user_type`,`team_id`),
  ADD KEY `role_user_role_id_foreign` (`role_id`),
  ADD KEY `role_user_team_id_foreign` (`team_id`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `teams_name_unique` (`name`);

--
-- Indexes for table `traffic_check_points`
--
ALTER TABLE `traffic_check_points`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traffic_crimes`
--
ALTER TABLE `traffic_crimes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `traffic_offenses`
--
ALTER TABLE `traffic_offenses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `traffic_offenses_driver_user_id_foreign` (`driver_user_id`),
  ADD KEY `traffic_offenses_officer_user_id_foreign` (`officer_user_id`),
  ADD KEY `traffic_offenses_offense_id_foreign` (`offense_id`);

--
-- Indexes for table `traffic_officers`
--
ALTER TABLE `traffic_officers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `traffic_officers_traffic_user_id_foreign` (`traffic_user_id`),
  ADD KEY `traffic_officers_checkpoint_id_foreign` (`checkpoint_id`);

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
-- AUTO_INCREMENT for table `driver_crimes`
--
ALTER TABLE `driver_crimes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `driving_licenses`
--
ALTER TABLE `driving_licenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `traffic_check_points`
--
ALTER TABLE `traffic_check_points`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `traffic_crimes`
--
ALTER TABLE `traffic_crimes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `traffic_offenses`
--
ALTER TABLE `traffic_offenses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `traffic_officers`
--
ALTER TABLE `traffic_officers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `driver_crimes`
--
ALTER TABLE `driver_crimes`
  ADD CONSTRAINT `driver_crimes_checkpoint_id_foreign` FOREIGN KEY (`checkpoint_id`) REFERENCES `traffic_check_points` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `driver_crimes_crime_id_foreign` FOREIGN KEY (`crime_id`) REFERENCES `traffic_crimes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `driver_crimes_driver_id_foreign` FOREIGN KEY (`driver_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `driver_crimes_license_id_foreign` FOREIGN KEY (`license_id`) REFERENCES `driving_licenses` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `driver_crimes_officer_id_foreign` FOREIGN KEY (`officer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `driving_licenses`
--
ALTER TABLE `driving_licenses`
  ADD CONSTRAINT `driving_licenses_driver_user_id_foreign` FOREIGN KEY (`driver_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `permission_role`
--
ALTER TABLE `permission_role`
  ADD CONSTRAINT `permission_role_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `permission_user`
--
ALTER TABLE `permission_user`
  ADD CONSTRAINT `permission_user_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `permission_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `role_user`
--
ALTER TABLE `role_user`
  ADD CONSTRAINT `role_user_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `role_user_team_id_foreign` FOREIGN KEY (`team_id`) REFERENCES `teams` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `traffic_offenses`
--
ALTER TABLE `traffic_offenses`
  ADD CONSTRAINT `traffic_offenses_driver_user_id_foreign` FOREIGN KEY (`driver_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `traffic_offenses_offense_id_foreign` FOREIGN KEY (`offense_id`) REFERENCES `traffic_crimes` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `traffic_offenses_officer_user_id_foreign` FOREIGN KEY (`officer_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `traffic_officers`
--
ALTER TABLE `traffic_officers`
  ADD CONSTRAINT `traffic_officers_checkpoint_id_foreign` FOREIGN KEY (`checkpoint_id`) REFERENCES `traffic_check_points` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `traffic_officers_traffic_user_id_foreign` FOREIGN KEY (`traffic_user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
