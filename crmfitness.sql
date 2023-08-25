-- Adminer 4.8.0 MySQL 10.11.3-MariaDB-1-log dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `active_users`;
CREATE TABLE `active_users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `key_locker` varchar(255) DEFAULT NULL,
  `solarium` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `active_users_user_id_foreign` (`user_id`),
  CONSTRAINT `active_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `activities`;
CREATE TABLE `activities` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `msg` varchar(255) NOT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activities_user_id_foreign` (`user_id`),
  CONSTRAINT `activities_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `activities` (`id`, `msg`, `user_id`, `created_at`, `updated_at`) VALUES
(1,	'Entrance of user yadav with Key 23',	2,	'2023-08-17 15:01:20',	'2023-08-17 15:01:20'),
(2,	'Solarium was Created  of user yadav for 10 minutes',	2,	'2023-08-17 15:01:24',	'2023-08-17 15:01:24'),
(3,	'Solarium was destoryed of user yadav for 10 minutes',	2,	'2023-08-17 15:01:46',	'2023-08-17 15:01:46'),
(4,	'Departure of user yadav with Key 23',	2,	'2023-08-17 15:01:46',	'2023-08-17 15:01:46'),
(5,	'Entrance of user yadav with Key 50',	2,	'2023-08-17 15:03:26',	'2023-08-17 15:03:26'),
(6,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 15:03:49',	'2023-08-17 15:03:49'),
(7,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 15:03:56',	'2023-08-17 15:03:56'),
(8,	'Entrance of user yadav with Key 50',	2,	'2023-08-17 15:04:10',	'2023-08-17 15:04:10'),
(9,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 15:04:57',	'2023-08-17 15:04:57'),
(10,	'Solarium was Created  of user yadav for 20 minutes',	2,	'2023-08-17 15:05:21',	'2023-08-17 15:05:21'),
(11,	'Departure of user yadav with Key 10',	2,	'2023-08-17 15:05:38',	'2023-08-17 15:05:38'),
(12,	'Departure of user yadav with Key 50',	2,	'2023-08-17 15:05:45',	'2023-08-17 15:05:45'),
(13,	'Departure of user yadav with Key 10',	2,	'2023-08-17 15:05:50',	'2023-08-17 15:05:50'),
(14,	'Departure of user yadav with Key 10',	2,	'2023-08-17 15:05:58',	'2023-08-17 15:05:58'),
(15,	'Solarium was destoryed of user yadav for 20 minutes',	2,	'2023-08-17 15:06:02',	'2023-08-17 15:06:02'),
(16,	'Departure of user yadav with Key 50',	2,	'2023-08-17 15:06:02',	'2023-08-17 15:06:02'),
(17,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 15:09:09',	'2023-08-17 15:09:09'),
(18,	'Departure of user yadav with Key 10',	2,	'2023-08-17 15:14:33',	'2023-08-17 15:14:33'),
(19,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 15:22:17',	'2023-08-17 15:22:17'),
(20,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 15:29:31',	'2023-08-17 15:29:31'),
(21,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 15:36:03',	'2023-08-17 15:36:03'),
(22,	'Entrance of user yadav with Key 110',	2,	'2023-08-17 15:48:04',	'2023-08-17 15:48:04'),
(23,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 15:55:21',	'2023-08-17 15:55:21'),
(24,	'Departure of user yadav with Key 10',	2,	'2023-08-17 15:56:14',	'2023-08-17 15:56:14'),
(25,	'Departure of user yadav with Key 110',	2,	'2023-08-17 15:56:15',	'2023-08-17 15:56:15'),
(26,	'Departure of user yadav with Key 10',	2,	'2023-08-17 15:56:17',	'2023-08-17 15:56:17'),
(27,	'Departure of user yadav with Key 10',	2,	'2023-08-17 15:56:22',	'2023-08-17 15:56:22'),
(28,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 15:56:27',	'2023-08-17 15:56:27'),
(29,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 15:57:50',	'2023-08-17 15:57:50'),
(30,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 15:57:58',	'2023-08-17 15:57:58'),
(31,	'Departure of user yadav with Key 10',	2,	'2023-08-17 16:05:07',	'2023-08-17 16:05:07'),
(32,	'Departure of user yadav with Key 10',	2,	'2023-08-17 16:05:07',	'2023-08-17 16:05:07'),
(33,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 16:05:21',	'2023-08-17 16:05:21'),
(34,	'Departure of user yadav with Key 10',	2,	'2023-08-17 16:06:57',	'2023-08-17 16:06:57'),
(35,	'Departure of user yadav with Key 10',	2,	'2023-08-17 16:06:59',	'2023-08-17 16:06:59'),
(36,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 16:07:07',	'2023-08-17 16:07:07'),
(37,	'Departure of user yadav with Key 10',	2,	'2023-08-17 16:08:10',	'2023-08-17 16:08:10'),
(38,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 16:08:21',	'2023-08-17 16:08:21'),
(39,	'Entrance of user yadav with Key 15',	2,	'2023-08-17 16:10:57',	'2023-08-17 16:10:57'),
(40,	'Departure of user yadav with Key 15',	2,	'2023-08-17 16:11:58',	'2023-08-17 16:11:58'),
(41,	'Departure of user yadav with Key 10',	2,	'2023-08-17 16:13:59',	'2023-08-17 16:13:59'),
(42,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 16:14:50',	'2023-08-17 16:14:50'),
(43,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 16:20:14',	'2023-08-17 16:20:14'),
(44,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 16:21:16',	'2023-08-17 16:21:16'),
(45,	'Entrance of user yadav with Key 14',	2,	'2023-08-17 16:22:31',	'2023-08-17 16:22:31'),
(46,	'Departure of user yadav with Key 10',	2,	'2023-08-17 16:22:44',	'2023-08-17 16:22:44'),
(47,	'Departure of user yadav with Key 10',	2,	'2023-08-17 16:23:54',	'2023-08-17 16:23:54'),
(48,	'Entrance of user yadav with Key 10',	2,	'2023-08-17 16:24:02',	'2023-08-17 16:24:02'),
(49,	'Departure of user yadav with Key 10',	2,	'2023-08-17 16:25:51',	'2023-08-17 16:25:51'),
(50,	'Departure of user yadav with Key 14',	2,	'2023-08-17 16:25:55',	'2023-08-17 16:25:55'),
(51,	'Departure of user yadav with Key 10',	2,	'2023-08-17 16:25:58',	'2023-08-17 16:25:58'),
(52,	'Departure of user yadav with Key 10',	2,	'2023-08-17 16:26:01',	'2023-08-17 16:26:01'),
(53,	'Entrance of user yadav with Key 5',	2,	'2023-08-17 16:26:07',	'2023-08-17 16:26:07'),
(54,	'Entrance of user yadav with Key 5',	2,	'2023-08-17 16:26:18',	'2023-08-17 16:26:18'),
(55,	'Entrance of user yadav with Key 5',	2,	'2023-08-17 16:27:08',	'2023-08-17 16:27:08'),
(56,	'Solarium was Created  of user yadav for 10 minutes',	2,	'2023-08-17 16:27:51',	'2023-08-17 16:27:51'),
(57,	'Solarium was Created  of user yadav for 15 minutes',	2,	'2023-08-17 16:30:11',	'2023-08-17 16:30:11'),
(58,	'Entrance of user yadav with Key 5',	2,	'2023-08-17 16:30:46',	'2023-08-17 16:30:46'),
(59,	'Departure of user yadav with Key 5',	2,	'2023-08-17 16:30:58',	'2023-08-17 16:30:58'),
(60,	'Departure of user yadav with Key 5',	2,	'2023-08-17 16:31:18',	'2023-08-17 16:31:18'),
(61,	'Departure of user yadav with Key 5',	2,	'2023-08-17 16:31:28',	'2023-08-17 16:31:28'),
(62,	'Solarium was destoryed of user yadav for 10 minutes',	2,	'2023-08-17 16:31:34',	'2023-08-17 16:31:34'),
(64,	'Solarium was destoryed of user yadav for 15 minutes',	2,	'2023-08-17 16:31:34',	'2023-08-17 16:31:34'),
(65,	'Departure of user yadav with Key 5',	2,	'2023-08-17 16:31:34',	'2023-08-17 16:31:34'),
(66,	'Entrance of user yadav with Key 50',	2,	'2023-08-17 16:31:48',	'2023-08-17 16:31:48'),
(68,	'Solarium was Created  of user yadav for 10 minutes',	2,	'2023-08-17 16:36:07',	'2023-08-17 16:36:07'),
(69,	'Solarium was Created  of user yadav for 5 minutes',	2,	'2023-08-17 16:36:19',	'2023-08-17 16:36:19'),
(70,	'Solarium was Created  of user yadav for 5 minutes',	2,	'2023-08-17 16:36:31',	'2023-08-17 16:36:31'),
(71,	'Solarium was destoryed of user yadav for 10 minutes',	2,	'2023-08-17 16:37:05',	'2023-08-17 16:37:05'),
(72,	'Solarium was destoryed of user yadav for 5 minutes',	2,	'2023-08-17 16:37:05',	'2023-08-17 16:37:05'),
(73,	'Solarium was destoryed of user yadav for 5 minutes',	2,	'2023-08-17 16:37:05',	'2023-08-17 16:37:05'),
(74,	'Departure of user yadav with Key 50',	2,	'2023-08-17 16:37:05',	'2023-08-17 16:37:05'),
(75,	'Entrance of user yadav with Key 50',	2,	'2023-08-17 16:37:12',	'2023-08-17 16:37:12'),
(76,	'Entrance of user yadav with Key 50',	2,	'2023-08-17 16:37:20',	'2023-08-17 16:37:20'),
(77,	'Solarium was Created  of user yadav for 10 minutes',	2,	'2023-08-17 16:41:04',	'2023-08-17 16:41:04'),
(78,	'Departure of user yadav with Key 50',	2,	'2023-08-17 16:41:21',	'2023-08-17 16:41:21'),
(79,	'Solarium was destoryed of user yadav for 10 minutes',	2,	'2023-08-17 16:41:24',	'2023-08-17 16:41:24'),
(80,	'Departure of user yadav with Key 50',	2,	'2023-08-17 16:41:24',	'2023-08-17 16:41:24'),
(87,	'Entrance of user yadav with Key 10',	2,	'2023-08-18 07:44:20',	'2023-08-18 07:44:20'),
(88,	'Entrance of user yadav with Key 10',	2,	'2023-08-18 07:44:26',	'2023-08-18 07:44:26'),
(89,	'Departure of user yadav with Key 10',	2,	'2023-08-18 07:45:50',	'2023-08-18 07:45:50'),
(90,	'Departure of user yadav with Key 10',	2,	'2023-08-18 08:02:09',	'2023-08-18 08:02:09'),
(91,	'Entrance of user yadav with Key 10',	2,	'2023-08-18 08:02:15',	'2023-08-18 08:02:15'),
(92,	'Departure of user yadav with Key 10',	2,	'2023-08-18 08:03:10',	'2023-08-18 08:03:10'),
(93,	'Entrance of user yadav with Key 10',	2,	'2023-08-18 08:03:15',	'2023-08-18 08:03:15'),
(94,	'Departure of user yadav with Key 10',	2,	'2023-08-18 08:03:31',	'2023-08-18 08:03:31'),
(95,	'Entrance of user yadav with Key 10',	2,	'2023-08-18 08:05:08',	'2023-08-18 08:05:08'),
(103,	'Departure of user yadav with Key 10',	2,	'2023-08-18 08:33:05',	'2023-08-18 08:33:05'),
(116,	'Entrance of user yadav with Key 50',	2,	'2023-08-18 09:11:28',	'2023-08-18 09:11:28'),
(117,	'Entrance of user yadav with Key 50',	2,	'2023-08-18 09:11:37',	'2023-08-18 09:11:37'),
(118,	'Solarium was Created  of user yadav for 10 minutes',	2,	'2023-08-18 09:12:47',	'2023-08-18 09:12:47'),
(120,	'Departure of user yadav with Key 50',	2,	'2023-08-18 09:16:41',	'2023-08-18 09:16:41'),
(121,	'Solarium was destoryed of user yadav for 10 minutes',	2,	'2023-08-18 09:16:46',	'2023-08-18 09:16:46'),
(122,	'Departure of user yadav with Key 50',	2,	'2023-08-18 09:16:46',	'2023-08-18 09:16:46'),
(123,	'Entrance of user yadav with Key 10',	2,	'2023-08-18 09:19:11',	'2023-08-18 09:19:11'),
(158,	'Solarium was Created  of user yadav for 10 minutes',	2,	'2023-08-18 09:37:52',	'2023-08-18 09:37:52'),
(159,	'Solarium was destoryed of user yadav for 10 minutes',	2,	'2023-08-18 09:38:00',	'2023-08-18 09:38:00'),
(160,	'Departure of user yadav with Key 10',	2,	'2023-08-18 09:38:00',	'2023-08-18 09:38:00'),
(162,	'Entrance of user yadav with Key 10',	2,	'2023-08-18 09:38:22',	'2023-08-18 09:38:22'),
(163,	'Departure of user yadav with Key 10',	2,	'2023-08-18 09:43:19',	'2023-08-18 09:43:19'),
(206,	'Solarium was Created  of user yadav for 15 minutes',	2,	'2023-08-18 14:31:00',	'2023-08-18 14:31:00'),
(207,	'Entrance of user yadav with Key 50',	2,	'2023-08-18 14:31:07',	'2023-08-18 14:31:07'),
(208,	'Entrance of user yadav with Key 50',	2,	'2023-08-18 14:31:16',	'2023-08-18 14:31:16'),
(209,	'Entrance of user yadav with Key 50',	2,	'2023-08-18 14:34:28',	'2023-08-18 14:34:28'),
(215,	'Solarium was destoryed of user yadav for 15 minutes',	2,	'2023-08-18 14:47:39',	'2023-08-18 14:47:39'),
(216,	'Departure of user yadav with Key 50',	2,	'2023-08-18 14:47:46',	'2023-08-18 14:47:46'),
(217,	'Departure of user yadav with Key 50',	2,	'2023-08-18 14:47:51',	'2023-08-18 14:47:51'),
(218,	'Departure of user yadav with Key 50',	2,	'2023-08-18 14:47:54',	'2023-08-18 14:47:54'),
(220,	'Order Created  with demo demosurnma',	10,	'2023-08-20 18:11:46',	'2023-08-20 18:11:46'),
(221,	'Order Created  with demo 1 ',	11,	'2023-08-20 19:00:04',	'2023-08-20 19:00:04'),
(232,	'Entrance of demo demosurnma with Key 10',	10,	'2023-08-21 07:59:09',	'2023-08-21 07:59:09'),
(237,	'Order Created  with Dipesh Jethva',	14,	'2023-08-21 08:54:47',	'2023-08-21 08:54:47'),
(238,	'Solarium was Created  of Dipesh Jethva for 5 minutes',	14,	'2023-08-21 08:55:54',	'2023-08-21 08:55:54'),
(239,	'Entrance of Dipesh Jethva with Key 88',	14,	'2023-08-21 08:56:00',	'2023-08-21 08:56:00'),
(245,	'Solarium was destoryed of Dipesh Jethva for 5 minutes',	14,	'2023-08-21 08:59:43',	'2023-08-21 08:59:43'),
(246,	'Departure of Dipesh Jethva with Key 88',	14,	'2023-08-21 08:59:49',	'2023-08-21 08:59:49'),
(247,	'Departure of demo demosurnma with Key 10',	10,	'2023-08-22 11:16:51',	'2023-08-22 11:16:51');

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `histories`;
CREATE TABLE `histories` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `key_locker` varchar(255) DEFAULT NULL,
  `solarium` varchar(255) DEFAULT NULL,
  `start_time` datetime NOT NULL,
  `end_time` datetime NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `histories_user_id_foreign` (`user_id`),
  CONSTRAINT `histories_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `histories` (`id`, `status`, `key_locker`, `solarium`, `start_time`, `end_time`, `created_at`, `updated_at`, `user_id`) VALUES
(1,	0,	NULL,	'10',	'2023-08-17 17:01:24',	'2023-08-17 17:01:46',	'2023-08-17 15:01:46',	'2023-08-17 15:01:46',	2),
(2,	0,	'23',	NULL,	'2023-08-17 17:01:20',	'2023-08-17 17:01:46',	'2023-08-17 15:01:46',	'2023-08-17 15:01:46',	2),
(3,	0,	'10',	NULL,	'2023-08-17 17:04:57',	'2023-08-17 17:05:38',	'2023-08-17 15:05:38',	'2023-08-17 15:05:38',	2),
(4,	0,	'50',	NULL,	'2023-08-17 17:03:26',	'2023-08-17 17:05:45',	'2023-08-17 15:05:45',	'2023-08-17 15:05:45',	2),
(5,	0,	'10',	NULL,	'2023-08-17 17:03:49',	'2023-08-17 17:05:50',	'2023-08-17 15:05:50',	'2023-08-17 15:05:50',	2),
(6,	0,	'10',	NULL,	'2023-08-17 17:03:56',	'2023-08-17 17:05:58',	'2023-08-17 15:05:58',	'2023-08-17 15:05:58',	2),
(7,	0,	NULL,	'20',	'2023-08-17 17:05:21',	'2023-08-17 17:06:02',	'2023-08-17 15:06:02',	'2023-08-17 15:06:02',	2),
(8,	0,	'50',	NULL,	'2023-08-17 17:04:10',	'2023-08-17 17:06:02',	'2023-08-17 15:06:02',	'2023-08-17 15:06:02',	2),
(9,	0,	'10',	NULL,	'2023-08-17 17:09:09',	'2023-08-17 17:14:33',	'2023-08-17 15:14:33',	'2023-08-17 15:14:33',	2),
(10,	0,	'10',	NULL,	'2023-08-17 17:55:21',	'2023-08-17 17:56:14',	'2023-08-17 15:56:14',	'2023-08-17 15:56:14',	2),
(11,	0,	'110',	NULL,	'2023-08-17 17:48:04',	'2023-08-17 17:56:15',	'2023-08-17 15:56:15',	'2023-08-17 15:56:15',	2),
(12,	0,	'10',	NULL,	'2023-08-17 17:36:03',	'2023-08-17 17:56:17',	'2023-08-17 15:56:17',	'2023-08-17 15:56:17',	2),
(13,	0,	'10',	NULL,	'2023-08-17 17:29:31',	'2023-08-17 17:56:22',	'2023-08-17 15:56:22',	'2023-08-17 15:56:22',	2),
(14,	0,	'10',	NULL,	'2023-08-17 17:57:58',	'2023-08-17 18:05:07',	'2023-08-17 16:05:07',	'2023-08-17 16:05:07',	2),
(15,	0,	'10',	NULL,	'2023-08-17 17:57:50',	'2023-08-17 18:05:07',	'2023-08-17 16:05:07',	'2023-08-17 16:05:07',	2),
(16,	0,	'10',	NULL,	'2023-08-17 18:05:21',	'2023-08-17 18:06:57',	'2023-08-17 16:06:57',	'2023-08-17 16:06:57',	2),
(17,	0,	'10',	NULL,	'2023-08-17 17:56:27',	'2023-08-17 18:06:59',	'2023-08-17 16:06:59',	'2023-08-17 16:06:59',	2),
(18,	0,	'10',	NULL,	'2023-08-17 17:22:17',	'2023-08-17 18:08:10',	'2023-08-17 16:08:10',	'2023-08-17 16:08:10',	2),
(19,	0,	'15',	NULL,	'2023-08-17 18:10:57',	'2023-08-17 18:11:58',	'2023-08-17 16:11:58',	'2023-08-17 16:11:58',	2),
(20,	0,	'10',	NULL,	'2023-08-17 18:08:21',	'2023-08-17 18:13:59',	'2023-08-17 16:13:59',	'2023-08-17 16:13:59',	2),
(21,	0,	'10',	NULL,	'2023-08-17 18:07:07',	'2023-08-17 18:22:44',	'2023-08-17 16:22:44',	'2023-08-17 16:22:44',	2),
(22,	0,	'10',	NULL,	'2023-08-17 18:14:50',	'2023-08-17 18:23:54',	'2023-08-17 16:23:54',	'2023-08-17 16:23:54',	2),
(23,	0,	'10',	NULL,	'2023-08-17 18:24:02',	'2023-08-17 18:25:51',	'2023-08-17 16:25:51',	'2023-08-17 16:25:51',	2),
(24,	0,	'14',	NULL,	'2023-08-17 18:22:31',	'2023-08-17 18:25:55',	'2023-08-17 16:25:55',	'2023-08-17 16:25:55',	2),
(25,	0,	'10',	NULL,	'2023-08-17 18:21:16',	'2023-08-17 18:25:57',	'2023-08-17 16:25:57',	'2023-08-17 16:25:57',	2),
(26,	0,	'10',	NULL,	'2023-08-17 18:20:14',	'2023-08-17 18:26:01',	'2023-08-17 16:26:01',	'2023-08-17 16:26:01',	2),
(27,	0,	'5',	NULL,	'2023-08-17 18:26:07',	'2023-08-17 18:30:58',	'2023-08-17 16:30:58',	'2023-08-17 16:30:58',	2),
(28,	0,	'5',	NULL,	'2023-08-17 18:30:46',	'2023-08-17 18:31:18',	'2023-08-17 16:31:18',	'2023-08-17 16:31:18',	2),
(29,	0,	'5',	NULL,	'2023-08-17 18:27:08',	'2023-08-17 18:31:28',	'2023-08-17 16:31:28',	'2023-08-17 16:31:28',	2),
(30,	0,	NULL,	'10',	'2023-08-17 18:27:51',	'2023-08-17 18:31:34',	'2023-08-17 16:31:34',	'2023-08-17 16:31:34',	2),
(31,	0,	NULL,	'15',	'2023-08-17 18:30:11',	'2023-08-17 18:31:34',	'2023-08-17 16:31:34',	'2023-08-17 16:31:34',	2),
(32,	0,	'5',	NULL,	'2023-08-17 18:26:18',	'2023-08-17 18:31:34',	'2023-08-17 16:31:34',	'2023-08-17 16:31:34',	2),
(33,	0,	NULL,	'10',	'2023-08-17 18:36:07',	'2023-08-17 18:37:05',	'2023-08-17 16:37:05',	'2023-08-17 16:37:05',	2),
(34,	0,	NULL,	'5',	'2023-08-17 18:36:19',	'2023-08-17 18:37:05',	'2023-08-17 16:37:05',	'2023-08-17 16:37:05',	2),
(35,	0,	NULL,	'5',	'2023-08-17 18:36:31',	'2023-08-17 18:37:05',	'2023-08-17 16:37:05',	'2023-08-17 16:37:05',	2),
(36,	0,	'50',	NULL,	'2023-08-17 18:31:48',	'2023-08-17 18:37:05',	'2023-08-17 16:37:05',	'2023-08-17 16:37:05',	2),
(37,	0,	'50',	NULL,	'2023-08-17 18:37:20',	'2023-08-17 18:41:21',	'2023-08-17 16:41:21',	'2023-08-17 16:41:21',	2),
(38,	0,	NULL,	'10',	'2023-08-17 18:41:04',	'2023-08-17 18:41:24',	'2023-08-17 16:41:24',	'2023-08-17 16:41:24',	2),
(39,	0,	'50',	NULL,	'2023-08-17 18:37:12',	'2023-08-17 18:41:24',	'2023-08-17 16:41:24',	'2023-08-17 16:41:24',	2),
(43,	0,	'10',	NULL,	'2023-08-18 09:44:26',	'2023-08-18 09:45:50',	'2023-08-18 07:45:50',	'2023-08-18 07:45:50',	2),
(44,	0,	'10',	NULL,	'2023-08-18 09:44:20',	'2023-08-18 10:02:09',	'2023-08-18 08:02:09',	'2023-08-18 08:02:09',	2),
(45,	0,	'10',	NULL,	'2023-08-18 10:02:15',	'2023-08-18 10:03:10',	'2023-08-18 08:03:10',	'2023-08-18 08:03:10',	2),
(46,	0,	'10',	NULL,	'2023-08-18 10:03:15',	'2023-08-18 10:03:31',	'2023-08-18 08:03:31',	'2023-08-18 08:03:31',	2),
(49,	0,	'10',	NULL,	'2023-08-18 10:05:08',	'2023-08-18 10:33:05',	'2023-08-18 08:33:05',	'2023-08-18 08:33:05',	2),
(57,	0,	'50',	NULL,	'2023-08-18 11:11:37',	'2023-08-18 11:16:41',	'2023-08-18 09:16:41',	'2023-08-18 09:16:41',	2),
(58,	0,	NULL,	'10',	'2023-08-18 11:12:47',	'2023-08-18 11:16:46',	'2023-08-18 09:16:46',	'2023-08-18 09:16:46',	2),
(59,	0,	'50',	NULL,	'2023-08-18 11:11:28',	'2023-08-18 11:16:46',	'2023-08-18 09:16:46',	'2023-08-18 09:16:46',	2),
(78,	0,	NULL,	'10',	'2023-08-18 11:37:52',	'2023-08-18 11:38:00',	'2023-08-18 09:38:00',	'2023-08-18 09:38:00',	2),
(79,	0,	'10',	NULL,	'2023-08-18 11:19:11',	'2023-08-18 11:38:00',	'2023-08-18 09:38:00',	'2023-08-18 09:38:00',	2),
(80,	0,	'10',	NULL,	'2023-08-18 11:38:22',	'2023-08-18 11:43:19',	'2023-08-18 09:43:19',	'2023-08-18 09:43:19',	2),
(102,	0,	NULL,	'15',	'2023-08-18 16:31:00',	'2023-08-18 16:31:00',	'2023-08-18 14:47:39',	'2023-08-18 14:47:39',	2),
(103,	0,	'50',	NULL,	'2023-08-18 16:31:07',	'2023-08-18 16:47:46',	'2023-08-18 14:47:46',	'2023-08-18 14:47:46',	2),
(104,	0,	'50',	NULL,	'2023-08-18 16:31:16',	'2023-08-18 16:47:51',	'2023-08-18 14:47:51',	'2023-08-18 14:47:51',	2),
(105,	0,	'50',	NULL,	'2023-08-18 16:34:28',	'2023-08-18 16:47:54',	'2023-08-18 14:47:54',	'2023-08-18 14:47:54',	2),
(114,	0,	NULL,	'5',	'2023-08-21 10:55:54',	'2023-08-21 10:55:54',	'2023-08-21 08:59:43',	'2023-08-21 08:59:43',	14),
(115,	0,	'88',	NULL,	'2023-08-21 10:56:00',	'2023-08-21 10:59:49',	'2023-08-21 08:59:49',	'2023-08-21 08:59:49',	14),
(116,	0,	'10',	NULL,	'2023-08-21 09:59:09',	'2023-08-22 13:16:51',	'2023-08-22 11:16:51',	'2023-08-22 11:16:51',	10);

DROP TABLE IF EXISTS `holidays`;
CREATE TABLE `holidays` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `holiday_name` varchar(255) NOT NULL,
  `holiday_date` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_reset_tokens_table',	1),
(3,	'2019_08_19_000000_create_failed_jobs_table',	1),
(4,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(5,	'2023_08_07_062416_create_notifications_table',	1),
(6,	'2023_08_07_100442_create_setting_plan',	1),
(7,	'2023_08_09_070039_create_active_users_table',	1),
(8,	'2023_08_09_070611_create_histories_table',	1),
(9,	'2023_08_11_183246_create_activities_table',	1),
(10,	'2023_08_17_100250_create_holidays_table',	1);

DROP TABLE IF EXISTS `notifications`;
CREATE TABLE `notifications` (
  `id` char(36) NOT NULL,
  `type` varchar(255) NOT NULL,
  `notifiable_type` varchar(255) NOT NULL,
  `notifiable_id` bigint(20) unsigned NOT NULL,
  `data` text NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('056bab43-792a-4bb5-939f-c45cce300339',	'App\\Notifications\\NewUserRegisterNotification',	'App\\Models\\User',	1,	'{\"name\":\"Kandarp\",\"email\":\"kano.gareja84@gmail.com\",\"surname\":\"Gareja\"}',	'2023-08-21 08:51:06',	'2023-08-21 08:45:05',	'2023-08-21 08:51:06'),
('3be93cf8-2f79-4bf3-821e-8bb4a37dbff3',	'App\\Notifications\\NewUserRegisterNotification',	'App\\Models\\User',	1,	'{\"name\":\"demo1\",\"email\":\"demo@gmail.com\",\"surname\":\"surdemo1\"}',	'2023-08-17 16:33:12',	'2023-08-17 16:31:34',	'2023-08-17 16:33:12'),
('4d661df4-2431-4872-a90b-ad92544531ff',	'App\\Notifications\\NewUserRegisterNotification',	'App\\Models\\User',	1,	'{\"name\":\"Dodiya\",\"email\":\"kandarp@besticoder.com\",\"surname\":\"Vijay\"}',	'2023-08-18 14:37:40',	'2023-08-18 14:35:48',	'2023-08-18 14:37:40'),
('5e972f81-e3f3-4f92-82d9-cd7164ea8680',	'App\\Notifications\\NewUserRegisterNotification',	'App\\Models\\User',	1,	'{\"name\":\"demo1\",\"email\":\"gautam.besticoder@gmail.com\",\"surname\":\"gandhi\"}',	'2023-08-21 07:51:51',	'2023-08-21 07:45:05',	'2023-08-21 07:51:51'),
('6598e43c-0021-47dd-8931-f7f1378b466b',	'App\\Notifications\\NewUserRegisterNotification',	'App\\Models\\User',	1,	'{\"name\":\"utsav\",\"email\":\"user@example.com\",\"surname\":\"xyz\"}',	'2023-08-20 18:11:45',	'2023-08-18 17:15:42',	'2023-08-20 18:11:45'),
('7b6827b9-0f05-4fcb-a903-0a9aa6e7780f',	'App\\Notifications\\NewUserRegisterNotification',	'App\\Models\\User',	1,	'{\"name\":\"dipesh\",\"email\":\"dipesh.besticoder@gmail.com\",\"surname\":\"jethva\"}',	'2023-08-18 14:46:05',	'2023-08-18 14:43:51',	'2023-08-18 14:46:05'),
('b7eac209-8e82-4245-ab6f-2346406140fb',	'App\\Notifications\\NewUserRegisterNotification',	'App\\Models\\User',	1,	'{\"name\":\"Karel\",\"email\":\"ddfg@kjdf.cuf\",\"surname\":\"Kr\\u00e1lik\"}',	'2023-08-17 19:20:38',	'2023-08-17 19:18:21',	'2023-08-17 19:20:38'),
('d3a29b88-621f-44ad-b13a-fbc0c11e6068',	'App\\Notifications\\NewUserRegisterNotification',	'App\\Models\\User',	1,	'{\"name\":\"demo2\",\"email\":\"demo2@gmail.com\",\"surname\":\"surnamedemo2\"}',	'2023-08-17 16:34:25',	'2023-08-17 16:33:47',	'2023-08-17 16:34:25'),
('d3bf1026-fcf8-4e65-8860-0b0785bd8f45',	'App\\Notifications\\NewUserRegisterNotification',	'App\\Models\\User',	1,	'{\"name\":\"demo 1\",\"email\":\"raulgautam447@gmail.com\",\"surname\":\"surname\"}',	'2023-08-20 19:00:04',	'2023-08-20 18:58:42',	'2023-08-20 19:00:04'),
('f0656387-d3fe-49ae-af0a-cbd9c0c5ace7',	'App\\Notifications\\NewUserRegisterNotification',	'App\\Models\\User',	1,	'{\"name\":\"demo\",\"email\":\"raulgautam1435@gmail.com\",\"surname\":\"demosurnma\"}',	'2023-08-20 18:34:31',	'2023-08-20 18:11:46',	'2023-08-20 18:34:31'),
('ff3d3e7d-ad9f-4b1f-9eb7-fe769b0146a2',	'App\\Notifications\\NewUserRegisterNotification',	'App\\Models\\User',	1,	'{\"name\":\"Dipesh\",\"email\":\"dipesh.besticoder@gmail.com\",\"surname\":\"Jethva\"}',	'2023-08-21 08:57:48',	'2023-08-21 08:54:47',	'2023-08-21 08:57:48');

DROP TABLE IF EXISTS `password_reset_tokens`;
CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `setting_plans`;
CREATE TABLE `setting_plans` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `price` varchar(255) NOT NULL,
  `no_entries` varchar(255) DEFAULT NULL,
  `solarium_min` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `user_id` bigint(20) unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `setting_plans_user_id_foreign` (`user_id`),
  CONSTRAINT `setting_plans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `setting_plans` (`id`, `start_date`, `end_date`, `price`, `no_entries`, `solarium_min`, `created_at`, `updated_at`, `user_id`) VALUES
(1,	'2023-08-09',	'2023-08-17',	'101',	'10',	'10',	'2023-08-17 15:00:47',	'2023-08-20 18:34:32',	2),
(8,	'2023-08-18',	'2023-08-21',	'320',	'0',	'100',	'2023-08-20 18:11:46',	'2023-08-21 07:59:02',	10),
(9,	'2023-08-23',	'2023-10-23',	'320',	'30',	'100',	'2023-08-20 19:00:04',	'2023-08-23 10:30:59',	11),
(12,	'2023-08-21',	'2023-12-21',	'40',	'20',	'100',	'2023-08-21 08:54:47',	'2023-08-21 09:02:50',	14);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `surname` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `student` varchar(255) NOT NULL DEFAULT 'adult',
  `gender` varchar(255) NOT NULL,
  `telephone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `note_internal` varchar(255) DEFAULT NULL,
  `note_visible` varchar(255) DEFAULT NULL,
  `fitness` varchar(255) DEFAULT 'labour',
  `active` tinyint(1) DEFAULT 0,
  `wallet_account_status` int(11) DEFAULT NULL,
  `card_number` varchar(16) DEFAULT NULL,
  `card_code` varchar(3) DEFAULT NULL,
  `mark_note` tinyint(1) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `role` varchar(255) NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `surname`, `city`, `student`, `gender`, `telephone`, `email`, `email_verified_at`, `password`, `note_internal`, `note_visible`, `fitness`, `active`, `wallet_account_status`, `card_number`, `card_code`, `mark_note`, `dob`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1,	'John',	'Doe',	'Rajkot',	'student',	'male',	'0123456789',	'admin@gmail.com',	'2023-08-05 18:52:18',	'$2y$10$QiSyaz7x01cizaJE/r.L8uIyVTR7A2M37MeSKHHi.f13TwKOWyY1q',	NULL,	NULL,	'labour',	1,	NULL,	'234534342341',	'012',	NULL,	NULL,	'admin',	'0FaGNynQlru5n5MFlC6sT50M4vuaBmEBK84I0XLgsYNse2PsnNaahuhXASmx',	'2023-08-17 15:00:47',	'2023-08-21 09:00:21'),
(2,	'user',	'yadav',	'Rajkot',	'student',	'male',	'0123456789',	'user@gmail.com',	'2023-08-05 18:52:18',	'$2y$10$71TnxQKmogKJcVlJnmRhzOIn50.MoFDuEq5IMhgBdrdTrLo3MGZM2',	NULL,	NULL,	'Labour',	1,	NULL,	'234534342343',	'012',	0,	'2023-08-11',	'user',	'yaHPzANDZr',	'2023-08-17 15:00:47',	'2023-08-17 16:26:31'),
(10,	'demo',	'demosurnma',	'Rajkot',	'adult',	'female',	'99999999999',	'raulgautam1435@gmail.com',	NULL,	'$2y$10$M8rIZqffimHl8OzH18BL6.oKqQmLr.G.X5yx6AbCYZ6XEjuIvJ9Le',	NULL,	NULL,	'Labour',	1,	121,	'456545454545',	'445',	0,	'2023-08-22',	'user',	NULL,	'2023-08-20 18:11:46',	'2023-08-21 07:54:54'),
(11,	'Gautam',	'xyz',	'Rajkot',	'adult',	'male',	'78787888787',	'gautam.besticoder@gmail.com',	'2023-08-21 08:03:15',	'$2y$10$ZGB9wa5eWEVL3b3Auboz.eGwNxe6tI/ofOBo40P278U0xY..JtJjK',	NULL,	NULL,	'Labour',	1,	56556656,	'1121212212121',	'231',	0,	'2023-08-21',	'user',	NULL,	'2023-08-20 18:58:41',	'2023-08-23 10:30:16'),
(14,	'Dipesh 1',	'Jethva 1',	'Rajkot 1',	'student',	'female',	'1111111112',	'dipesh.besticoder1@gmail.com',	NULL,	'$2y$10$2t7k6vqN2j.r4TdQ8ZoArOJe0CCQxSeAB4QQt/B6ZHK0P4o14dGN2',	NULL,	NULL,	'Labour,Other',	1,	NULL,	'789789789789',	'456',	1,	'1990-12-31',	'user',	NULL,	'2023-08-21 08:54:47',	'2023-08-21 09:02:50');

-- 2023-08-25 12:52:15