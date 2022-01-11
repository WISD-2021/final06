-- Adminer 4.7.6 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admins`;
CREATE TABLE `admins` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `carts`;
CREATE TABLE `carts` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` bigint(20) unsigned NOT NULL,
  `products_id` bigint(20) unsigned NOT NULL,
  `amount` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `carts_users_id_foreign` (`users_id`),
  KEY `carts_products_id_foreign` (`products_id`),
  CONSTRAINT `carts_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
  CONSTRAINT `carts_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `carts` (`id`, `users_id`, `products_id`, `amount`, `created_at`, `updated_at`) VALUES
(1,	2,	1,	4,	'2022-01-10 02:57:08',	'2022-01-10 02:57:08');

DROP TABLE IF EXISTS `details`;
CREATE TABLE `details` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` bigint(20) unsigned NOT NULL,
  `orders_id` bigint(20) unsigned NOT NULL,
  `products_id` bigint(20) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `details_users_id_foreign` (`users_id`),
  KEY `details_orders_id_foreign` (`orders_id`),
  KEY `details_products_id_foreign` (`products_id`),
  CONSTRAINT `details_orders_id_foreign` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`),
  CONSTRAINT `details_products_id_foreign` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
  CONSTRAINT `details_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE `failed_jobs` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `orders_id` bigint(20) unsigned NOT NULL,
  `products_id` bigint(20) unsigned NOT NULL,
  `amount` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `items_orders_id_foreign` (`orders_id`),
  KEY `products_id` (`products_id`),
  CONSTRAINT `items_ibfk_1` FOREIGN KEY (`products_id`) REFERENCES `products` (`id`),
  CONSTRAINT `items_orders_id_foreign` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `items` (`orders_id`, `products_id`, `amount`, `total`, `created_at`, `updated_at`) VALUES
(9,	2,	4,	150,	'2022-01-09 07:30:58',	'2022-01-09 07:30:58'),
(9,	6,	4,	320,	'2022-01-09 07:33:32',	'2022-01-09 07:33:32'),
(9,	7,	2,	450,	'2022-01-09 07:33:32',	'2022-01-09 07:33:32'),
(11,	2,	3,	150,	'2022-01-09 07:37:39',	'2022-01-09 07:37:39'),
(12,	3,	5,	120,	'2022-01-09 07:38:52',	'2022-01-09 07:38:52'),
(12,	8,	1,	1980,	'2022-01-09 07:38:52',	'2022-01-09 07:38:52'),
(13,	1,	3,	320,	'2022-01-09 08:58:43',	'2022-01-09 08:58:43'),
(14,	6,	5,	320,	'2022-01-09 09:05:09',	'2022-01-09 09:05:09'),
(14,	5,	1,	380,	'2022-01-09 09:05:09',	'2022-01-09 09:05:09');

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1,	'2014_10_12_000000_create_users_table',	1),
(2,	'2014_10_12_100000_create_password_resets_table',	1),
(3,	'2014_10_12_200000_add_two_factor_columns_to_users_table',	1),
(4,	'2019_08_19_000000_create_failed_jobs_table',	1),
(5,	'2019_12_14_000001_create_personal_access_tokens_table',	1),
(6,	'2021_12_14_052926_create_sessions_table',	1),
(7,	'2021_12_15_015754_create_orders_table',	1),
(8,	'2021_12_17_032232_create_products_table',	1),
(9,	'2021_12_17_061832_create_admins_table',	1),
(10,	'2021_12_17_064020_create_details_table',	1);

DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `users_id` bigint(20) unsigned NOT NULL,
  `number` int(11) NOT NULL,
  `sum` int(11) NOT NULL,
  `date` date NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `orders_users_id_foreign` (`users_id`),
  CONSTRAINT `orders_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `orders` (`id`, `users_id`, `number`, `sum`, `date`, `status`, `created_at`, `updated_at`) VALUES
(9,	2,	6,	2180,	'2022-01-09',	'未完成',	'2022-01-09 07:30:58',	'2022-01-09 07:33:32'),
(11,	2,	0,	450,	'2022-01-09',	'未完成',	'2022-01-09 07:37:39',	'2022-01-09 07:37:39'),
(12,	2,	0,	2580,	'2022-01-09',	'未完成',	'2022-01-09 07:38:52',	'2022-01-09 07:38:52'),
(13,	2,	0,	960,	'2022-01-09',	'未完成',	'2022-01-09 08:58:43',	'2022-01-09 08:58:43'),
(14,	2,	0,	1980,	'2022-01-09',	'未完成',	'2022-01-09 09:05:09',	'2022-01-09 09:05:09');

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `date` date NOT NULL,
  `year` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `introduce` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `products` (`id`, `name`, `sort`, `price`, `capacity`, `date`, `year`, `stock`, `introduce`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1,	'荔枝黑豆醬油清',	'經典系列',	320,	420,	'2019-12-17',	2,	10,	'水、黑豆、荔枝、海鹽、二砂糖',	'已上架',	'荔枝黑豆醬油清.jpg',	NULL,	NULL),
(2,	'古早味手工柴燒醬油膏',	'經典系列',	150,	420,	'2019-12-15',	2,	10,	'水、黑豆、糯米、海鹽、糖、天然甘草、5＇-次黃嘌呤核苷磷酸二鈉、5＇-鳥嘌呤核苷磷酸二鈉、玉米糖膠、胺基丙酸',	'已上架',	'古早味手工柴燒醬油膏.jpg',	NULL,	NULL),
(3,	'玉露柴燒醬油清',	'經典系列',	120,	420,	'2019-12-15',	2,	10,	'成份：水、黑豆、海鹽、糖、5＇-次黃嘌呤核苷磷酸二鈉、5＇-鳥嘌呤核苷磷酸二鈉、胺基丙酸',	'已上架',	'玉露柴燒醬油清.jpg',	NULL,	NULL),
(4,	'米粒原燉醬油膏',	'米粒醬油',	350,	350,	'2019-12-10',	2,	10,	'水、臺灣黑豆、濁水米、糖、澳洲海鹽',	'已上架',	'米粒原燉醬油膏.jpg',	NULL,	NULL),
(5,	'味噌御露醬油膏',	'味噌醬油',	380,	420,	'2019-12-15',	2,	9,	'御鼎興醬油(水、國產無毒黑豆、海鹽、糖、濁水米、甘草)、禾乃川味噌(花蓮羅山有機米、國產履歷黃豆、海鹽、水)',	'已上架',	'味噌御露醬油膏.jpg',	NULL,	NULL),
(6,	'濁水琥珀-常鹽',	'濁水琥珀',	320,	300,	'2019-12-17',	2,	10,	'水、台灣黑豆、海鹽、糖',	'已上架',	'濁水琥珀-常鹽.jpg',	NULL,	NULL),
(7,	'濁水琥珀-原鹽',	'濁水琥珀',	450,	300,	'2019-12-15',	2,	10,	'水、台灣黑豆、海鹽、糖',	'已上架',	'濁水琥珀-原鹽.jpg',	NULL,	NULL),
(8,	'裸醬',	'裸醬',	1980,	500,	'2018-11-20',	3,	5,	'水、黑豆、海鹽',	'已上架',	'裸醬.jpg',	NULL,	NULL);

DROP TABLE IF EXISTS `sessions`;
CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4zsNjMc4WOXTTHVxV5EU758vJQhraA9EEC12NwLl',	2,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36',	'YTo2OntzOjY6Il90b2tlbiI7czo0MDoiTHVFbmhDNDQ1U0tidVBJclRQY05sRFVDdjU1amRUWkNwR1ZLYlhMZCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9vcmRlci9oaXN0b3J5Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJC9veEdxRGxqVGVTcDUyT3JKc1BXck9ra1VUd1JxLmQvaDBYUFVvVVNrVDhEWGkzRHFBRjUyIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQvb3hHcURsalRlU3A1Mk9ySnNQV3JPa2tVVHdScS5kL2gwWFBVb1VTa1Q4RFhpM0RxQUY1MiI7fQ==',	1641812272),
('zI72ppnyoFumDEM6g9y9FlGVlirIrbL2nVGQzwZt',	2,	'::1',	'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/95.0.4638.69 Safari/537.36',	'YTo2OntzOjY6Il90b2tlbiI7czo0MDoicTFkYlhITVMyZzlXT2VlN3J1UzBhUVNFc252eG5oVXgzUTUweW1HcyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly9sb2NhbGhvc3Q6ODAwMC9vcmRlci9pdGVtLzE0Ijt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6MjtzOjE3OiJwYXNzd29yZF9oYXNoX3dlYiI7czo2MDoiJDJ5JDEwJC9veEdxRGxqVGVTcDUyT3JKc1BXck9ra1VUd1JxLmQvaDBYUFVvVVNrVDhEWGkzRHFBRjUyIjtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCQvb3hHcURsalRlU3A1Mk9ySnNQV3JPa2tVVHdScS5kL2gwWFBVb1VTa1Q4RFhpM0RxQUY1MiI7fQ==',	1641747915);

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `two_factor_secret` text COLLATE utf8mb4_unicode_ci,
  `two_factor_recovery_codes` text COLLATE utf8mb4_unicode_ci,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

INSERT INTO `users` (`id`, `name`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `address`, `phone`, `birthday`, `email`, `created_at`, `updated_at`) VALUES
(1,	'aaa',	'$2y$10$lFBmjxnZe69CgCPVoLN.w.Q9bREr.oPDgq8uowhRZPB/66NFlR8Ue',	NULL,	NULL,	'台中市',	'0988121211',	'2022-01-20',	'aaa@gmail.com',	'2022-01-04 09:31:50',	'2022-01-04 09:31:50'),
(2,	'陳沛安',	'$2y$10$/oxGqDljTeSp52OrJsPWrOkkUTwRq.d/h0XPUoUSkT8DXi3DqAF52',	NULL,	NULL,	'台中市',	'0979936607',	'2022-01-08',	'a905182120611@gmail.com',	'2022-01-08 06:35:02',	'2022-01-08 06:35:02');

-- 2022-01-10 16:32:14
