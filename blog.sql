-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 25, 2019 at 04:46 PM
-- Server version: 5.7.23
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'a', '2019-01-25 19:39:06', '2019-01-25 19:39:06'),
(2, 'b', '2019-01-25 19:39:10', '2019-01-25 19:39:10'),
(3, 'c', '2019-01-25 19:39:13', '2019-01-25 19:39:13'),
(4, 'd', '2019-01-25 19:39:15', '2019-01-25 19:39:15');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(19, '2014_10_12_000000_create_users_table', 1),
(20, '2014_10_12_100000_create_password_resets_table', 1),
(21, '2019_01_24_102927_create_posts_table', 1),
(22, '2019_01_24_104112_create_categories_table', 1),
(23, '2019_01_25_120924_create_tags_table', 2),
(24, '2019_01_25_121653_create_post_tag_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `featured` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `category_id`, `featured`, `slug`, `deleted_at`, `created_at`, `updated_at`) VALUES
(14, 'bdfgggd', 'dwqdqqdw', 3, 'uploads/post/15484256553.PNG', 'bdfgggd', NULL, '2019-01-25 22:14:15', '2019-01-25 22:14:15'),
(15, 'bdfgggd', 'dwqdqqdw', 3, 'uploads/post/15484257613.PNG', 'bdfgggd', NULL, '2019-01-25 22:16:01', '2019-01-25 22:16:01'),
(16, 'bdfgggd', 'dwqdqqdw', 3, 'uploads/post/15484257813.PNG', 'bdfgggd', NULL, '2019-01-25 22:16:21', '2019-01-25 22:16:21'),
(2, 'Perspiciatis nesciunt quia omnis.', 'Tempore ut nemo eum dignissimos veniam ea enim aperiam rem eligendi ad eligendi sequi maiores dolore omnis voluptatem eos dolores in voluptates perspiciatis et ea.', 2, 'https://lorempixel.com/400/300/?51636', 'perspiciatis-nesciunt-quia-omnis', NULL, '2019-01-25 19:12:03', '2019-01-25 20:01:10'),
(11, 'aa', 'bbbb', 2, 'uploads/post/15484172445.PNG', 'aa', NULL, '2019-01-25 19:40:28', '2019-01-25 20:01:10'),
(12, 'verv', 'wqwq', 3, 'uploads/post/15484242784.PNG', 'verv', NULL, '2019-01-25 21:51:18', '2019-01-25 21:51:18'),
(13, 'bdfgggd', 'cddc', 3, 'uploads/post/15484249303.PNG', 'bdfgggd', NULL, '2019-01-25 22:02:10', '2019-01-25 22:02:10'),
(4, 'Sint porro dolorem ullam consequatur.', 'Ex temporibus voluptatibus id aut earum est ea corporis quis nulla itaque est nihil perspiciatis omnis voluptatum alias voluptas.', 3, 'https://lorempixel.com/400/300/?31930', 'sint-porro-dolorem-ullam-consequatur', NULL, '2019-01-25 19:12:03', '2019-01-25 20:01:11'),
(5, 'In aliquid consequatur illum tenetur possimus debitis.', 'Exercitationem reiciendis corrupti et qui molestiae aut eum consequatur et sint expedita id tempora sapiente voluptas rem excepturi eligendi libero voluptas placeat exercitationem debitis.', 2, 'https://lorempixel.com/400/300/?42224', 'in-aliquid-consequatur-illum-tenetur-possimus-debitis', NULL, '2019-01-25 19:12:03', '2019-01-25 20:01:11'),
(6, 'Autem explicabo iusto mollitia.', 'Delectus quam est iusto alias pariatur iste ea minima veritatis ut esse corporis est vero eius aspernatur porro.', 2, 'https://lorempixel.com/400/300/?17457', 'autem-explicabo-iusto-mollitia', NULL, '2019-01-25 19:12:03', '2019-01-25 20:01:12'),
(7, 'Numquam incidunt exercitationem qui.', 'Earum ratione fugiat ducimus quod consectetur dignissimos voluptatem illum voluptatem rerum accusamus blanditiis.', 3, 'https://lorempixel.com/400/300/?26331', 'numquam-incidunt-exercitationem-qui', NULL, '2019-01-25 19:12:03', '2019-01-25 20:01:13'),
(8, 'Exercitationem beatae minima est quia.', 'Unde sit vel sapiente rerum quidem perferendis magnam qui sunt tempora velit sapiente quis fugit sint.', 4, 'https://lorempixel.com/400/300/?52571', 'exercitationem-beatae-minima-est-quia', NULL, '2019-01-25 19:12:03', '2019-01-25 20:01:14'),
(9, 'Tempora et amet autem voluptatem.', 'Necessitatibus porro aperiam ad natus reprehenderit error id sed magnam quaerat ipsa odit.', 4, 'https://lorempixel.com/400/300/?48725', 'tempora-et-amet-autem-voluptatem', NULL, '2019-01-25 19:12:03', '2019-01-25 20:01:15'),
(10, 'Et et aut est at ex.', 'Vero quaerat id magnam ut officiis nobis quod pariatur eius neque doloremque non voluptatem illo qui harum excepturi facere eveniet atque in odit et necessitatibus quod.', 3, 'https://lorempixel.com/400/300/?50500', 'et-et-aut-est-at-ex', NULL, '2019-01-25 19:12:03', '2019-01-25 20:01:16'),
(17, 'bdfgggd', 'xsxsaxsa', 2, 'uploads/post/15484258576.PNG', 'bdfgggd', NULL, '2019-01-25 22:17:37', '2019-01-25 22:17:37'),
(18, 'bdfgggd', 'xsxsaxsa', 2, 'uploads/post/15484258896.PNG', 'bdfgggd', NULL, '2019-01-25 22:18:09', '2019-01-25 22:18:09'),
(19, 'verv', 'cdcd', 2, 'uploads/post/15484259464.PNG', 'verv', NULL, '2019-01-25 22:19:06', '2019-01-25 22:19:06'),
(20, 'verv', 'cdcd', 2, 'uploads/post/15484259884.PNG', 'verv', NULL, '2019-01-25 22:19:48', '2019-01-25 22:19:48');

-- --------------------------------------------------------

--
-- Table structure for table `post_tag`
--

DROP TABLE IF EXISTS `post_tag`;
CREATE TABLE IF NOT EXISTS `post_tag` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tag`
--

INSERT INTO `post_tag` (`id`, `post_id`, `tag_id`, `created_at`, `updated_at`) VALUES
(1, 20, 4, NULL, NULL),
(2, 20, 3, NULL, NULL),
(3, 2, 4, NULL, NULL),
(4, 2, 3, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `tag` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag`, `created_at`, `updated_at`) VALUES
(4, 'csdcsdcsd', '2019-01-25 21:12:09', '2019-01-25 21:12:09'),
(3, 'frrccss', '2019-01-25 21:07:14', '2019-01-25 21:11:25');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Arev', 'arev@gmail.com', NULL, '$2y$10$yjAIiyxXg//XNtZkb3BC7eMjhpLC1L1uY.G/u5...r/6cRsb02Kca', NULL, '2019-01-25 19:12:01', '2019-01-25 19:12:01');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
