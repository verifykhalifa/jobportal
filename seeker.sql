-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2021 at 10:40 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `seeker`
--

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `careerobj` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `companyname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workstart` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `workend` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `Job_levels` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instituename` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fromyear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `toyear` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthplace` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nationality` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `careerobj`, `job_title`, `companyname`, `workstart`, `workend`, `Job_levels`, `instituename`, `fromyear`, `toyear`, `userid`, `qualification`, `birthday`, `birthplace`, `phone`, `nationality`, `gender`, `location`, `cover_image`, `created_at`, `updated_at`) VALUES
(1, 'hafbjsdfjhw', 'Food Services & Catering', 'hbvjfidgvhiu', '2020-10-13', '2020-10-20', 'NCE', 'jhbfsjndfkjfd', '2020-10-13', '2020-10-20', '7', 'ngvbdgkherk', '2020-10-20', 'nxcvbfxvjkdf', '67284362823', 'hcvbdjkvsd', 'Female', 'Ibadan, Nigeria', '08724_mitchell_michael_1601573268.jpg', '2020-10-01 09:27:49', '2020-10-01 09:27:49'),
(2, 'hcjksdjk', 'Human Reasources', 'hchsdvuj', '2020-10-13', '2020-10-13', 'MPhil/PhD', 'gcjsdkjsdjk', '2020-09-29', '2020-10-05', '7', 'bxv fmx', '2020-10-13', 'hbsdjkdsjk', '65765778', 'gchhbbjkj', 'Male', 'Beijing, China', '08724_mitchell_michael_1601573640.jpg', '2020-10-01 09:34:00', '2020-10-01 09:34:00'),
(3, 'ghjjkhg', 'Hospitality/Leisure/Travel', 'dfcgvhbjp', '2020-10-19', '2020-10-26', 'MBA/MSc', 'oiuytrfghj', '2020-10-13', '2020-10-06', '4', 'kjhgbvc', '2020-10-18', 'poiujyhfg', '0987654', 'plkjhgfdc', 'Female', 'Ibadan, Nigeria', '08724_mitchell_michael_1601642072.jpg', '2020-10-02 04:34:32', '2020-10-02 04:34:32'),
(4, 'hjdfhdkj', 'IT & Software', 'ndnjcskjdvhuk', '2020-10-06', '2020-10-13', 'MBA/MSc', 'jdijocjosdcj', '2020-10-07', '2020-10-05', '5', 'nsdcsdjoikcv', '2020-10-12', 'jdcsjv', '9876543', 'jkdsjvklsdvlkjd', 'Male', 'Newyork, USA', '08724_mitchell_michael_1601642452.jpg', '2020-10-02 04:40:53', '2020-10-02 04:40:53'),
(5, 'hcjsdfvoid', 'Engineering', 'jhidfvuhfevio', '2020-10-06', '2020-10-13', 'NCE', 'n dcvjndfvkle', '2020-10-12', '2020-10-19', '6', 'jnsjlvdsklvfkl', '2020-10-12', 'hkdhsfvjhsd', '34567890', 'nxbcnksdckj', 'Male', 'Seoul, Korea', '08724_mitchell_michael_1601642693.jpg', '2020-10-02 04:44:53', '2020-10-02 04:44:53'),
(6, 'nbvjbsvjvjks', 'Human Reasources', 'ncvnjfd', '2020-10-26', '2020-10-20', 'MPhil/PhD', 'n bvsfovs', '2020-10-20', '2020-10-19', '8', 'nxcvbdfsljvesl', '2020-09-29', 'xv skvjdsbv', '82378', 'jdcsdis', 'Male', 'Seoul, Korea', '08724_mitchell_michael_1601645215.jpg', '2020-10-02 05:26:56', '2020-10-02 05:26:56');

-- --------------------------------------------------------

--
-- Table structure for table `employers`
--

CREATE TABLE `employers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_sector` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mission` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `achievement_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `yearofach` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `achdescription` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cover_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employers`
--

INSERT INTO `employers` (`id`, `phone`, `job_sector`, `location`, `mission`, `userid`, `achievement_title`, `yearofach`, `achdescription`, `cover_image`, `created_at`, `updated_at`) VALUES
(1, 'vfuigkj', 'Engineering', 'Seoul, Korea', 'vvhkgkug', '3', 'bbbilkjii', '2020-10-14', 'nhvkjbl', '08724_mitchell_michael_1601634196.jpg', '2020-10-02 02:23:17', '2020-10-02 02:23:17'),
(2, 'hxcjbsjk', 'Customer Service & Support', 'Beijing, China', 'hsvuisdvui', '9', 'hbzcjsk', '2020-10-07', 'hbfuiwef', '08724_mitchell_michael_1602158634.jpg', '2020-10-08 04:03:54', '2020-10-08 04:03:54'),
(5, '98756789', 'Health & Safety', 'Seoul, Korea', 'v gv,khgoiu', '10', 'b j kjbuj', '2020-10-12', 'vbkjhb', 'fcb-building-transparent-998-x-460-3242020_1602166386.png', '2020-10-08 06:13:06', '2020-10-08 06:13:06');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `job_category` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `experience_level` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `requirement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jobsummary` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keyresponsibility` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `qualification` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `agreement` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `job_title`, `job_category`, `location`, `salary`, `experience_level`, `requirement`, `userid`, `jobsummary`, `keyresponsibility`, `qualification`, `agreement`, `created_at`, `updated_at`) VALUES
(1, 'Employability & Soft Skills', 'part-time', 'Rivers, Nigeria', '$82938', 'mid-level', 'nvbdlfvndbd;', '1', 'hjbcdjkvnfeivjo', 'nsbjfvndflvfdkd', 'MBA/MSc', 'on', '2020-09-30 04:22:37', '2020-09-30 04:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(76, '2014_10_12_000000_create_users_table', 1),
(77, '2014_10_12_100000_create_password_resets_table', 1),
(78, '2020_07_07_123010_create_superadmins_table', 1),
(79, '2020_08_05_133450_create_staff_table', 1),
(80, '2020_08_16_141619_create_employers_table', 1),
(81, '2020_08_19_111315_create_jobs_table', 1),
(82, '2020_08_31_113210_create_employees_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `superadmins`
--

CREATE TABLE `superadmins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `website` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `username` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `username`, `role`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Google Inc', 'google@gmail.com', NULL, 'google627', 'employer', '$2y$10$iYCMuYhCOU3zMnvz0KkwbOHs30TWK6OTewtl40PPumGJMZ9O7kZn6', NULL, '2020-09-30 04:20:02', '2020-09-30 04:20:02'),
(2, 'user', 'useme@yahoo.com', NULL, 'useer8327', 'employee', '$2y$10$RhFYMaXSZhr9/A5o.hk1..TA7fjVSPs5eyNhBZYYVnYdTWgtU4Ybm', NULL, '2020-09-30 23:20:26', '2020-09-30 23:20:26'),
(3, 'GALA INC', 'gala@yahoo.com', NULL, 'gala6286', 'employer', '$2y$10$Lq7WIGQxNO.S97Bb7cFPk.ipiTEo1XrJi9rWqanZ/Py6RYHuDFJ1S', NULL, '2020-09-30 23:22:35', '2020-09-30 23:22:35'),
(4, 'jobber seeker', 'jobber26@yahoo.com', NULL, 'jobber5263', 'employee', '$2y$10$Woz5lvGG5fiN2P5MCl8qEeOgC2NiECe5Wr4fxg1O2IfKg3JtA16Yy', NULL, '2020-09-30 23:33:30', '2020-09-30 23:33:30'),
(5, 'jskfjk', 'jckf@yahoo.com', NULL, 'ndmfn273', 'employee', '$2y$10$dhdHNMZIjosPWckdQfPoDOnfdnYvuuLruVbMQiiMBHElY.5eijCR6', NULL, '2020-09-30 23:38:08', '2020-09-30 23:38:08'),
(6, 'yehdhdj', 'hfbjvdjvw@yahopo.com', NULL, 'bgdjhsd57', 'employee', '$2y$10$xIUWSkWQ50CfEQ/MvCVx4.9TwkcvuFvOqZgpGv1KvuPTdLCGpyobK', NULL, '2020-10-01 09:13:18', '2020-10-01 09:13:18'),
(7, 'hbdfjksfjk', 'hjfvhfk@yahopo.com', NULL, 'jndnaj738', 'employee', '$2y$10$apQWn/lKy5iYd65Ve3On1.Uj6EMYibiA7wn/LNZa0ewgQCzo9duGW', NULL, '2020-10-01 09:18:11', '2020-10-01 09:18:11'),
(8, 'hsfhdsf', 'jfkvsfk@yahoo.com', NULL, 'hsjs767', 'employee', '$2y$10$TiKhwPGTzL7kOON/8tyPzu.YziD17MKVSlPfM1HVnAth9l97CgNMW', NULL, '2020-10-02 05:25:59', '2020-10-02 05:25:59'),
(9, 'hsjdh', 'nsksj@yahoo.com', NULL, 'nskdj28', 'employee', '$2y$10$dR72RN1Y6DlEN3vsI.4.6.YpMObCfe89Wfb.vRPEBHAuwW5Hv2a.q', NULL, '2020-10-08 04:02:49', '2020-10-08 04:02:49'),
(10, 'googeh', 'bdchbdfh@yahoo.com', NULL, 'hdfdfuj782', 'employer', '$2y$10$pRW.Y52GKcgEOltjb3qBNOQJzAeTN4Ewb/ARj.oMsNyHxlcqK9M6S', NULL, '2020-10-08 05:52:35', '2020-10-08 05:52:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employers`
--
ALTER TABLE `employers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `superadmins`
--
ALTER TABLE `superadmins`
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
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employers`
--
ALTER TABLE `employers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=83;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `superadmins`
--
ALTER TABLE `superadmins`
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
