-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Oct 12, 2022 at 09:18 AM
-- Server version: 10.3.36-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomelect_ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `attributes`
--

CREATE TABLE `attributes` (
  `id` bigint(20) NOT NULL,
  `attribute_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `attr_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `attr_values` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `attributes`
--

INSERT INTO `attributes` (`id`, `attribute_name`, `slug`, `attr_type`, `attr_values`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Size', 'size', 'default', NULL, 'active', '2022-01-22 12:56:40', '2022-09-13 15:35:26'),
(2, 'Color', 'color', 'default', NULL, 'active', '2022-01-22 13:01:54', '2022-09-13 15:35:26'),
(11, 'Product Size', 'product-size', 'checkbox', 'XXL,XL,L,M,S', 'active', '2022-02-02 07:42:43', '2022-09-13 15:35:26'),
(12, 'Extra Test', 'extra-test', 'number', '', 'active', '2022-02-02 08:30:57', '2022-09-13 15:35:26'),
(13, 'Product Something', 'product-something', 'textarea', '', 'active', '2022-02-03 13:34:44', '2022-09-13 15:35:26'),
(14, 'Product Select', 'product-select', 'select', 'A,B,C,D,E', 'active', '2022-02-08 13:14:38', '2022-09-13 15:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_title` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `offer_price` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `button_link` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `slug`, `photo`, `description`, `offer_title`, `offer_price`, `button_link`, `status`, `created_at`, `updated_at`) VALUES
(13, 'Electronics', 'electronics', '/storage/photos/1/dealmaster020221-800x444.jpg', '<p>all products</p>', 'seasonal offer', '40', 'linktest1', 'inactive', '2022-02-23 18:56:33', '2022-09-13 15:35:26'),
(14, 'Laptop', 'laptop', '/storage/photos/1/laptop-bannner.jpg', '<p>laptop</p>', 'end of sale', '30', 'link', 'active', '2022-02-23 19:06:21', '2022-09-13 15:35:26'),
(15, 'smart watch', 'smart-watch', '/storage/photos/1/7eCyVQ9Ybsc6H9mUkGtxbA.jpg', '<p>smart watch offer</p>', 'limited  offer', '20', 'link', 'active', '2022-02-23 19:52:58', '2022-09-13 15:35:26'),
(16, 'Head phone', 'head-phone', '/storage/photos/1/ps5_3d_audio_compatible_headphones_image1.jpg', '<p>Head phone</p>', 'end of sale', '30', 'link', 'active', '2022-02-23 19:55:45', '2022-09-13 15:35:26'),
(17, 'LED tv', 'led-tv', '/storage/photos/1/LED.jpg', '<p>LED TV</p>', 'end of sale', '30', 'link', 'active', '2022-02-23 19:58:09', '2022-09-13 15:35:26'),
(18, 'etc', 'etc', '/storage/photos/1/etc.jpg', '<p>etc</p>', 'end of sale', '30', 'link', 'active', '2022-02-23 20:12:29', '2022-09-13 15:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Adidas', 'adidas', 'active', '2020-08-14 04:23:00', '2020-08-14 04:23:00'),
(2, 'Nike', 'nike', 'active', '2020-08-14 04:23:08', '2020-08-14 04:23:08'),
(3, 'Kappa', 'kappa', 'active', '2020-08-14 04:23:48', '2020-08-14 04:23:48'),
(4, 'Prada', 'prada', 'active', '2020-08-14 04:24:08', '2020-08-14 04:24:08'),
(6, 'Brand', 'brand', 'active', '2020-08-17 20:50:31', '2020-08-17 20:50:31');

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` bigint(20) NOT NULL,
  `title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_id` int(11) NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `image` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_on` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `end_on` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `title`, `description`, `product_id`, `slug`, `category_id`, `image`, `start_on`, `end_on`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Limited Weekly Deals', '<p>Hurry Up Before Offer Will End<br></p>', 28, 'plimited-ltspan-classf-800-pure-black-color-d-blockgtweekly-dealsltspangtbrp', 2, '/storage/photos/1/blog3.jpg', '17/02/2022 12:00 AM', '25/02/2022 11:59 PM', 'active', '2022-02-09 16:14:38', '2022-09-13 15:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `campaign_categories`
--

CREATE TABLE `campaign_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `campaign_categories`
--

INSERT INTO `campaign_categories` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Travel', 'contrary', 'active', '2020-08-14 01:51:03', '2020-08-14 01:51:39'),
(2, 'Electronics', 'richard', 'active', '2020-08-14 01:51:22', '2020-08-14 01:52:00'),
(3, 'Cloths', 'cloths', 'active', '2020-08-14 01:52:22', '2020-08-14 01:52:22'),
(5, 'Camp Category', 'post-category', 'active', '2020-08-15 06:59:04', '2022-02-11 11:27:42'),
(6, 'New Campaign', 'new-campaign', 'active', '2022-02-09 14:37:10', '2022-02-09 14:37:10');

-- --------------------------------------------------------

--
-- Table structure for table `carts`
--

CREATE TABLE `carts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `order_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `status` enum('new','progress','delivered','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `quantity` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `carts`
--

INSERT INTO `carts` (`id`, `product_id`, `order_id`, `user_id`, `price`, `status`, `quantity`, `amount`, `created_at`, `updated_at`) VALUES
(1, 34, 1, 34, 1191.30, 'new', 1, 1254.00, '2022-02-21 14:23:43', '2022-02-21 14:58:42'),
(3, 28, 2, 34, 21.78, 'new', 4, 87.12, '2022-02-21 17:18:55', '2022-02-21 17:24:25'),
(4, 36, 2, 34, 97.00, 'new', 1, 100.00, '2022-02-21 17:23:19', '2022-02-21 17:24:25');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_parent` tinyint(1) NOT NULL DEFAULT 1,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `added_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `title`, `slug`, `summary`, `photo`, `is_parent`, `parent_id`, `added_by`, `status`, `created_at`, `updated_at`) VALUES
(15, 'Camera', 'camera', '<p>Camera</p>', '/storage/photos/1/camera1.jpeg', 1, NULL, NULL, 'active', '2022-02-23 13:40:43', '2022-02-23 17:22:00'),
(16, 'Desktop', 'desktop', '<p>Desktop</p>', '/storage/photos/1/desktop-.jpeg', 1, NULL, NULL, 'active', '2022-02-23 13:41:44', '2022-02-23 17:23:56'),
(17, 'Headphone', 'headphone', '<p>Headphone<br></p>', '/storage/photos/1/headset.jpeg', 1, NULL, NULL, 'active', '2022-02-23 13:43:43', '2022-02-23 17:24:38'),
(18, 'TV', 'tv', '<p>TV</p>', '/storage/photos/1/mi-original.jpeg', 1, NULL, NULL, 'active', '2022-02-23 14:11:13', '2022-02-23 17:25:19'),
(19, 'Smart watch', 'smart-watch', '<p>Smart watch</p>', '/storage/photos/1/Smart watch.jpeg', 1, NULL, NULL, 'active', '2022-02-23 17:16:32', '2022-02-23 17:16:32'),
(20, 'Laptop', 'laptop', '<p>Laptop</p>', '/storage/photos/1/laptop.jpeg', 1, NULL, NULL, 'active', '2022-02-23 18:10:40', '2022-02-23 18:10:40'),
(21, 'tablet', 'tablet', '<p>Tab</p>', '/storage/photos/1/samsung-Tablet.jpeg', 1, NULL, NULL, 'active', '2022-02-23 18:11:49', '2022-02-23 18:11:49'),
(22, 'Phone', 'phone', '<p>SmartPhone</p>', '/storage/photos/1/phone.jpeg', 1, NULL, NULL, 'active', '2022-02-23 18:16:23', '2022-02-23 18:16:23');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `decription` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `decription`) VALUES
(1, 'demo', 'chitaranjansahoo073@gmail.com', 'demo subject', 'bv'),
(2, 'demo', 'chitaranjansahoo073@gmail.com', 'demo subject', 'c'),
(3, 'Chiku', 'chitaranjansahoo073@gmail.com', 'demo subject', 'uygug'),
(4, 'Chiku', 'chitaranjansahoo073@gmail.com', 'demo subject', 'mail'),
(5, 'Chiku', 'chitaranjansahoo073@gmail.com', 'demo subject', 'mail'),
(6, 'Chiku', 'chitaranjansahoo073@gmail.com', 'demo subject', 'mail');

-- --------------------------------------------------------

--
-- Table structure for table `coupons`
--

CREATE TABLE `coupons` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('fixed','percent') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'fixed',
  `value` decimal(20,2) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `coupons`
--

INSERT INTO `coupons` (`id`, `code`, `type`, `value`, `status`, `created_at`, `updated_at`) VALUES
(1, 'abc123', 'fixed', '300.00', 'active', NULL, NULL),
(2, '111111', 'percent', '10.00', 'active', NULL, NULL),
(5, 'abcd', 'fixed', '250.00', 'active', '2020-08-17 20:54:58', '2020-08-17 20:54:58');

-- --------------------------------------------------------

--
-- Table structure for table `demo`
--

CREATE TABLE `demo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `subject`, `email`, `photo`, `phone`, `message`, `read_at`, `created_at`, `updated_at`) VALUES
(1, 'Prajwal Rai', 'About price', 'prajwal.iar@gmail.com', NULL, '9807009999', 'Hello sir i am from kathmandu nepal.', '2020-08-14 08:25:46', '2020-08-14 08:00:01', '2020-08-14 08:25:46'),
(2, 'Prajwal Rai', 'About Price', 'prajwal.iar@gmail.com', NULL, '9800099000', 'Hello i am Prajwal Rai', '2020-08-18 03:04:15', '2020-08-15 07:52:39', '2020-08-18 03:04:16'),
(3, 'Prajwal Rai', 'lorem ipsum', 'prajwal.iar@gmail.com', NULL, '1200990009', 'hello sir sdfdfd dfdjf ;dfjd fd ldkfd', NULL, '2020-08-17 21:15:12', '2020-08-17 21:15:12');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_07_10_021010_create_brands_table', 1),
(5, '2020_07_10_025334_create_banners_table', 1),
(6, '2020_07_10_112147_create_categories_table', 1),
(7, '2020_07_11_063857_create_products_table', 1),
(8, '2020_07_12_073132_create_post_categories_table', 1),
(9, '2020_07_12_073701_create_post_tags_table', 1),
(10, '2020_07_12_083638_create_posts_table', 1),
(11, '2020_07_13_151329_create_messages_table', 1),
(12, '2020_07_14_023748_create_shippings_table', 1),
(13, '2020_07_15_054356_create_orders_table', 1),
(14, '2020_07_15_102626_create_carts_table', 1),
(15, '2020_07_16_041623_create_notifications_table', 1),
(16, '2020_07_16_053240_create_coupons_table', 1),
(17, '2020_07_23_143757_create_wishlists_table', 1),
(18, '2020_07_24_074930_create_product_reviews_table', 1),
(19, '2020_07_24_131727_create_post_comments_table', 1),
(20, '2020_08_01_143408_create_settings_table', 1),
(21, '2021_12_20_182916_create_demo_table', 2),
(22, '2022_01_08_175840_add_faq_id_to_products', 3),
(23, '2022_01_08_180949_add_faq_id_to_products', 4),
(24, '2022_01_08_185441_create_productfaqs_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `notifiable_id` bigint(20) UNSIGNED NOT NULL,
  `data` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `type`, `notifiable_type`, `notifiable_id`, `data`, `read_at`, `created_at`, `updated_at`) VALUES
('2145a8e3-687d-444a-8873-b3b2fb77a342', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-15 07:31:21', '2020-08-15 07:31:21'),
('3af39f84-cab4-4152-9202-d448435c67de', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/4\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-15 07:54:52', '2020-08-15 07:54:52'),
('49357778-add8-4fb6-91a3-beeb11a05fc7', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/ecommerce.snckapp.com\\/admin\\/order\\/1\",\"fas\":\"fa-file-alt\"}', NULL, '2022-02-21 14:58:42', '2022-02-21 14:58:42'),
('49ee0892-f273-4219-ad1b-88aaaca0ecc1', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"https:\\/\\/ecommerce.snckapp.com\\/product-detail\\/new-product\",\"fas\":\"fa-star\"}', NULL, '2022-02-21 15:27:43', '2022-02-21 15:27:43'),
('4a0afdb0-71ad-4ce6-bc70-c92ef491a525', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage-used-since-the-1500s\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-17 21:13:51', '2020-08-17 21:13:51'),
('540ca3e9-0ff9-4e2e-9db3-6b5abc823422', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', '2020-08-15 07:30:44', '2020-08-14 07:12:28', '2020-08-15 07:30:44'),
('55f6aaba-502a-4256-a864-b43344c6026f', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"https:\\/\\/ecommerce.snckapp.com\\/product-detail\\/testea\",\"fas\":\"fa-star\"}', NULL, '2022-02-21 17:17:49', '2022-02-21 17:17:49'),
('5d64927a-2422-4e0b-bc35-0058cc3936b4', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"https:\\/\\/ecommerce.snckapp.com\\/product-detail\\/new-product\",\"fas\":\"fa-star\"}', NULL, '2022-02-21 15:26:05', '2022-02-21 15:26:05'),
('5da09dd1-3ffc-43b0-aba2-a4260ba4cc76', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-15 07:51:02', '2020-08-15 07:51:02'),
('5e91e603-024e-45c5-b22f-36931fef0d90', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"http:\\/\\/localhost:8000\\/product-detail\\/white-sports-casual-t\",\"fas\":\"fa-star\"}', NULL, '2020-08-15 07:44:07', '2020-08-15 07:44:07'),
('73a3b51a-416a-4e7d-8ca2-53b216d9ad8e', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-14 07:11:03', '2020-08-14 07:11:03'),
('8605db5d-1462-496e-8b5f-8b923d88912c', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/admin\\/order\\/1\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-14 07:20:44', '2020-08-14 07:20:44'),
('a6ec5643-748c-4128-92e2-9a9f293f53b5', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/admin\\/order\\/5\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-17 21:17:03', '2020-08-17 21:17:03'),
('b186a883-42f2-4a05-8fc5-f0d3e10309ff', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/admin\\/order\\/2\",\"fas\":\"fa-file-alt\"}', '2020-08-15 04:17:24', '2020-08-14 22:14:55', '2020-08-15 04:17:24'),
('d2fd7c33-b0fe-47d6-8bc6-f377d404080d', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/blog-detail\\/where-can-i-get-some\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-14 07:08:50', '2020-08-14 07:08:50'),
('d638b6cc-dcbd-445c-b22c-fd954b64c722', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"https:\\/\\/ecommerce.snckapp.com\\/product-detail\\/new-product\",\"fas\":\"fa-star\"}', NULL, '2022-02-21 13:52:47', '2022-02-21 13:52:47'),
('dff78b90-85c8-42ee-a5b1-de8ad0b21be4', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"http:\\/\\/e-shop.loc\\/admin\\/order\\/3\",\"fas\":\"fa-file-alt\"}', NULL, '2020-08-15 06:40:54', '2020-08-15 06:40:54'),
('e28b0a73-4819-4016-b915-0e525d4148f5', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Product Rating!\",\"actionURL\":\"http:\\/\\/localhost:8000\\/product-detail\\/lorem-ipsum-is-simply\",\"fas\":\"fa-star\"}', NULL, '2020-08-17 21:08:16', '2020-08-17 21:08:16'),
('e6fd36c7-5b28-457f-a6f9-5ff72b5c82b0', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New order created\",\"actionURL\":\"https:\\/\\/ecommerce.snckapp.com\\/admin\\/order\\/2\",\"fas\":\"fa-file-alt\"}', NULL, '2022-02-21 17:24:25', '2022-02-21 17:24:25'),
('ffffa177-c54e-4dfe-ba43-27c466ff1f4b', 'App\\Notifications\\StatusNotification', 'App\\User', 1, '{\"title\":\"New Comment created\",\"actionURL\":\"http:\\/\\/localhost:8000\\/blog-detail\\/the-standard-lorem-ipsum-passage-used-since-the-1500s\",\"fas\":\"fas fa-comment\"}', NULL, '2020-08-17 21:13:29', '2020-08-17 21:13:29');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_number` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `sub_total` double(8,2) NOT NULL,
  `shipping_id` bigint(20) UNSIGNED DEFAULT NULL,
  `coupon` double(8,2) DEFAULT NULL,
  `total_amount` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `payment_method` enum('cod','paypal') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'cod',
  `payment_status` enum('paid','unpaid') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'unpaid',
  `status` enum('new','process','delivered','cancel') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'new',
  `first_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `post_code` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `address2` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `order_number`, `user_id`, `sub_total`, `shipping_id`, `coupon`, `total_amount`, `quantity`, `payment_method`, `payment_status`, `status`, `first_name`, `last_name`, `email`, `phone`, `country`, `post_code`, `address1`, `address2`, `created_at`, `updated_at`) VALUES
(1, 'ORD-L9JBDUKZWH', 34, 1254.00, NULL, NULL, 1254.00, 1, 'cod', 'unpaid', 'new', 'chitaranjan', 'sahoo', 'chitaranjansahoo073@gmail.com', '07788822584', 'IN', '751010', 'bbsr', 'cuttack', '2022-02-21 14:58:41', '2022-02-21 14:58:41'),
(2, 'ORD-FLYJ6MS1IV', 34, 187.12, NULL, NULL, 187.12, 5, 'cod', 'unpaid', 'new', 'demo', 'deno/', 'chitaranjansahoo073@gmail.com', '07788822584', 'IN', '751010', 'sasas', 'sasas', '2022-02-21 17:24:25', '2022-02-21 17:24:25');

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quote` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tags` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `post_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_tag_id` bigint(20) UNSIGNED DEFAULT NULL,
  `added_by` bigint(20) UNSIGNED DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `slug`, `summary`, `description`, `quote`, `photo`, `tags`, `post_cat_id`, `post_tag_id`, `added_by`, `status`, `created_at`, `updated_at`) VALUES
(6, 'Lorem Ipsum is simply', 'lorem-ipsum-is-simply', '<p><strong style=\"margin: 0px; padding: 0px; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">Lorem Ipsum</strong><span style=\"font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px; text-align: justify;\">&nbsp;is simply dummy text of the printing and typesetting industry.</span><br></p>', '<h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and</p><hr><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and</p><h2 style=\"margin-right: 0px; margin-bottom: 10px; margin-left: 0px; padding: 0px; font-family: DauphinPlain; font-size: 24px; line-height: 24px;\">What is Lorem Ipsum?</h2><p style=\"margin-right: 0px; margin-bottom: 15px; margin-left: 0px; padding: 0px; text-align: justify; font-family: &quot;Open Sans&quot;, Arial, sans-serif; font-size: 14px;\"><strong style=\"margin: 0px; padding: 0px;\">Lorem Ipsum</strong>&nbsp;is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and</p>', NULL, '/storage/photos/1/Blog/blog3.jpg', 'Enjoy,2020', 2, NULL, 1, 'active', '2020-08-17 20:54:19', '2020-08-17 20:54:19');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Travel', 'contrary', 'active', '2020-08-14 01:51:03', '2020-08-14 01:51:39'),
(2, 'Electronics', 'richard', 'active', '2020-08-14 01:51:22', '2020-08-14 01:52:00'),
(3, 'Cloths', 'cloths', 'active', '2020-08-14 01:52:22', '2020-08-14 01:52:22'),
(4, 'enjoy', 'enjoy', 'active', '2020-08-14 03:16:10', '2020-08-14 03:16:10'),
(5, 'Post Category', 'post-category', 'active', '2020-08-15 06:59:04', '2020-08-15 06:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `post_id` bigint(20) UNSIGNED DEFAULT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `replied_comment` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `parent_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`id`, `user_id`, `post_id`, `comment`, `status`, `replied_comment`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, 1, NULL, 'Testing comment edited', 'active', NULL, NULL, '2020-08-14 07:08:42', '2020-08-15 06:59:58'),
(2, NULL, NULL, 'testing 2', 'active', NULL, 1, '2020-08-14 07:11:03', '2020-08-14 07:11:03'),
(3, 2, NULL, 'That\'s cool', 'active', NULL, 2, '2020-08-14 07:12:27', '2020-08-14 07:12:27'),
(4, 1, NULL, 'nice', 'active', NULL, NULL, '2020-08-15 07:31:19', '2020-08-15 07:31:19'),
(5, NULL, NULL, 'nice blog', 'active', NULL, NULL, '2020-08-15 07:51:01', '2020-08-15 07:51:01'),
(6, 2, NULL, 'nice', 'active', NULL, NULL, '2020-08-17 21:13:29', '2020-08-17 21:13:29'),
(7, 2, NULL, 'really', 'active', NULL, 6, '2020-08-17 21:13:51', '2020-08-17 21:13:51');

-- --------------------------------------------------------

--
-- Table structure for table `post_tags`
--

CREATE TABLE `post_tags` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_tags`
--

INSERT INTO `post_tags` (`id`, `title`, `slug`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Enjoy', 'enjoy', 'active', '2020-08-14 01:53:52', '2020-08-14 01:53:52'),
(2, '2020', '2020', 'active', '2020-08-14 01:54:09', '2020-08-14 01:54:09'),
(3, 'Visit nepal 2020', 'visit-nepal-2020', 'active', '2020-08-14 01:54:33', '2020-08-14 01:54:33'),
(4, 'Tag', 'tag', 'active', '2020-08-15 06:59:31', '2020-08-15 06:59:31');

-- --------------------------------------------------------

--
-- Table structure for table `productfaqs`
--

CREATE TABLE `productfaqs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) DEFAULT NULL,
  `question` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `productfaqs`
--

INSERT INTO `productfaqs` (`id`, `product_id`, `question`, `answer`, `status`, `created_at`, `updated_at`) VALUES
(1, NULL, 'q', 'a', 'active', '2022-01-27 20:54:45', '2022-09-13 15:35:26'),
(2, NULL, 'Qa', 'Aw', 'active', '2022-01-27 20:54:45', '2022-09-13 15:35:26'),
(3, NULL, 'fST', 'aNSWE', 'active', '2022-01-27 20:54:45', '2022-09-13 15:35:26'),
(4, NULL, 'SEC', 'SECaN', 'active', '2022-01-27 20:54:45', '2022-09-13 15:35:26'),
(5, 32, 'qw', 'wq', 'active', '2022-01-27 20:54:45', '2022-09-13 15:35:26'),
(6, 33, 'fs', 'an', 'active', '2022-01-27 20:54:45', '2022-09-13 15:35:26'),
(7, 33, 'qw', 'Answ', 'active', '2022-01-27 20:54:45', '2022-09-13 15:35:26'),
(8, 34, 'Perspiciatis cum as', 'Rerum cillum dolore', 'active', '2022-01-27 20:54:45', '2022-09-13 15:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_code` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `summary` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `photoone` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phototwo` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photothree` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `stock` int(11) NOT NULL DEFAULT 1,
  `condition` enum('default','new','hot') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'inactive',
  `price` double(8,2) NOT NULL,
  `discount` double(8,2) DEFAULT NULL,
  `is_featured` tinyint(1) NOT NULL,
  `attribute_ids` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `specification_ids` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `child_cat_id` bigint(20) UNSIGNED DEFAULT NULL,
  `brand_id` bigint(20) UNSIGNED DEFAULT NULL,
  `seo_title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seo_description` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `faq_id` varchar(10) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `title`, `product_code`, `slug`, `summary`, `description`, `photo`, `photoone`, `phototwo`, `photothree`, `stock`, `condition`, `status`, `price`, `discount`, `is_featured`, `attribute_ids`, `specification_ids`, `cat_id`, `child_cat_id`, `brand_id`, `seo_title`, `seo_description`, `created_at`, `updated_at`, `faq_id`) VALUES
(12, 'Test', NULL, 'test', '<p>Product coder</p>', '<p>coder product</p>', '/storage/photos/1/bc_horizontal.jpg', '/storage/photos/1/blog3.jpg', '/storage/photos/1/rolling_logo.png', '/storage/photos/1/1612870846-feb-14.jpeg', 28, 'new', 'active', 599.00, 5.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-04 08:15:02', '2022-09-13 15:35:26', ''),
(13, 'Tests', NULL, 'tests', '<p>ffddssx</p>', '<p>aa</p>', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/bc_horizontal.jpg', '/storage/photos/1/rolling_logo.png', '/storage/photos/1/blog3.jpg', 22, 'new', 'active', 111.00, 11.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-04 09:44:23', '2022-09-13 15:35:26', ''),
(14, 'Tests', NULL, 'tests-2201041654-230', '<p>s</p>', '<p>d</p>', '/storage/photos/1/rolling_logo.png', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/rolling_logo.png', 2, 'hot', 'active', 33.00, 22.00, 1, '0', NULL, NULL, NULL, 6, '', '', '2022-01-04 09:46:54', '2022-09-13 15:35:26', ''),
(15, 'Testss', NULL, 'testss', '<p>Ss</p>', '<p>Dd</p>', '/storage/photos/1/blog3.jpg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/logo.png', 98, 'hot', 'active', 99.00, 5.00, 1, '0', NULL, NULL, NULL, NULL, '', '', '2022-01-08 07:39:21', '2022-09-13 15:35:26', ''),
(16, 'Title', NULL, 'title', '<p>t</p>', '<p>ts</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/logo.png', '/storage/photos/1/logo.png', 8, 'new', 'active', 11.00, 7.00, 1, '0', NULL, NULL, NULL, 1, '', '', '2022-01-08 07:45:38', '2022-09-13 15:35:26', ''),
(17, 'Tesd', NULL, 'tesd', '<p>s</p>', '<p>dd</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/blog3.jpg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/rolling_logo.png', 22, 'new', 'active', 23.00, 1.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-08 13:38:40', '2022-09-13 15:35:26', NULL),
(18, 'Tesd', NULL, 'tesd-2201080908-922', '<p>s</p>', '<p>dd</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/blog3.jpg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/rolling_logo.png', 22, 'new', 'active', 23.00, 1.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-08 13:39:08', '2022-09-13 15:35:26', NULL),
(19, 'Tesd', NULL, 'tesd-2201081031-701', '<p>s</p>', '<p>dd</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/blog3.jpg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/rolling_logo.png', 22, 'new', 'active', 23.00, 1.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-08 13:40:31', '2022-09-13 15:35:26', NULL),
(20, 'Tesd', NULL, 'tesd-2201081211-160', '<p>s</p>', '<p>dd</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/blog3.jpg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/rolling_logo.png', 22, 'new', 'active', 23.00, 1.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-08 13:42:11', '2022-09-13 15:35:26', NULL),
(21, 'tt', NULL, 'tt', '<p>s</p>', '<p>s</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/logo.png', '/storage/photos/1/rolling_logo.png', 11, 'new', 'active', 22.00, 11.00, 1, '0', NULL, NULL, NULL, 3, '', '', '2022-01-10 12:57:22', '2022-09-13 15:35:26', NULL),
(22, 'a', NULL, 'a', '<p>a</p>', '<p>a</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/bc_horizontal.jpg', '/storage/photos/1/logo.png', 11, 'new', 'active', 22.00, 1.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-10 13:00:50', '2022-09-13 15:35:26', NULL),
(23, 'q', NULL, 'q', '<p>a</p>', '<p>a</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/logo.png', '/storage/photos/1/rolling_logo.png', 11, 'new', 'active', 22.00, 1.00, 1, '0', NULL, NULL, NULL, 4, '', '', '2022-01-10 13:02:53', '2022-09-13 15:35:26', NULL),
(24, 'a', NULL, 'a-2201103846-170', '<p>a</p>', '<p>a</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/logo.png', '/storage/photos/1/logo.png', '/storage/photos/1/rolling_logo.png', 11, 'new', 'active', 22.00, 1.00, 1, '0', NULL, NULL, NULL, 3, '', '', '2022-01-10 13:08:46', '2022-09-13 15:35:26', NULL),
(25, 'w', NULL, 'w', '<p>w</p>', '<p>w</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/blog3.jpg', '/storage/photos/1/rolling_logo.png', '/storage/photos/1/aof-header-logo.png', 11, 'new', 'active', 22.00, 11.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-10 13:15:40', '2022-09-13 15:35:26', NULL),
(26, 'a', NULL, 'a-2201105034-66', '<p>a</p>', '<p>a</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/logo.png', '/storage/photos/1/rolling_logo.png', 11, 'hot', 'active', 11.00, 1.00, 1, '0', NULL, NULL, NULL, 1, '', '', '2022-01-10 13:20:34', '2022-09-13 15:35:26', NULL),
(27, 'wWw', NULL, 'www', '<p>W</p>', '<p>Q</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/blog3.jpg', '/storage/photos/1/rolling_logo.png', 11, 'new', 'active', 22.00, 1.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-10 13:24:03', '2022-09-13 15:35:26', NULL),
(28, 'Testea', NULL, 'testea', '<p>eE</p>', '<p>E</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/blog3.jpg', '/storage/photos/1/rolling_logo.png', 11, 'new', 'active', 22.00, 1.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-10 13:35:32', '2022-09-13 15:35:26', NULL),
(29, 'as', NULL, 'as', '<p>sa</p>', '<p>aa</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/blog3.jpg', '/storage/photos/1/rolling_logo.png', 11, 'new', 'active', 22.00, 1.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-10 15:05:36', '2022-09-13 15:35:26', NULL),
(30, 'q', NULL, 'q-2201104325-538', '<p>q</p>', '<p>q</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/blog3.jpg', '/storage/photos/1/rolling_logo.png', '/storage/photos/1/aof-header-logo.png', 12, 'new', 'active', 12.00, 1.00, 1, '0', NULL, NULL, NULL, 3, '', '', '2022-01-10 15:13:25', '2022-09-13 15:35:26', NULL),
(31, 'q', NULL, 'q-2201104640-142', '<p>q</p>', '<p>q</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/bc_horizontal.jpg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/rolling_logo.png', 11, 'new', 'active', 12.00, 1.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-10 15:16:40', '2022-09-13 15:35:26', NULL),
(32, 'Testes', NULL, 'testes', '<p>s</p>', '<p>s</p>', '/storage/photos/1/1612870846-feb-14.jpeg', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/bc_horizontal.jpg', '/storage/photos/1/rolling_logo.png', 11, 'hot', 'active', 12.00, 1.00, 1, '0', NULL, NULL, NULL, 1, '', '', '2022-01-10 15:22:17', '2022-09-13 15:35:26', NULL),
(33, 's', NULL, 's', '<p>d</p>', '<p>da</p>', '/storage/photos/1/aof-header-logo.png', '/storage/photos/1/blog3.jpg', '/storage/photos/1/rolling_logo.png', '/storage/photos/1/bc_horizontal.jpg', 11, 'hot', 'active', 11.00, 1.00, 1, '0', NULL, NULL, NULL, 2, '', '', '2022-01-10 15:24:20', '2022-09-13 15:35:26', NULL),
(34, 'new product', NULL, 'new-product', '<p>short description</p>', '<p>details description</p>', '/storage/photos/1/1612870846-feb-14.jpeg', NULL, NULL, NULL, 100, 'hot', 'active', 1254.00, 5.00, 1, 'on', NULL, NULL, NULL, 2, 'Dicta voluptatem id', 'Est quae nostrud aut', '2022-01-27 15:21:57', '2022-09-13 15:35:26', NULL),
(36, 'New Attribute Test Product', NULL, 'new-attribute-test-product-2202191214-898', '<p>New Attribute Test Product summary<br></p>', '<p>New Attribute Test Product description<br></p>', '/storage/photos/1/blog3.jpg', NULL, NULL, NULL, 50, 'default', 'active', 100.00, 3.00, 1, '11,12,13,14', NULL, NULL, NULL, 3, 'Page Title', 'page description', '2022-02-19 19:30:23', '2022-09-13 15:35:26', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `product_attributes`
--

CREATE TABLE `product_attributes` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `attribute_id` int(11) NOT NULL,
  `attribute_values` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_attributes`
--

INSERT INTO `product_attributes` (`id`, `product_id`, `attribute_id`, `attribute_values`, `created_at`, `updated_at`) VALUES
(1, 36, 11, '[\"XXL\",\"L\",\"M\"]', '2022-02-19 19:12:15', '2022-09-13 15:35:26'),
(2, 36, 12, '[\"1234\"]', '2022-02-19 19:12:15', '2022-09-13 15:35:26'),
(3, 36, 13, '[\"New Attribute Test Product new attribute field\"]', '2022-02-19 19:12:15', '2022-09-13 15:35:26'),
(4, 36, 14, '[\"C\"]', '2022-02-19 19:12:15', '2022-09-13 15:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `product_reviews`
--

CREATE TABLE `product_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `product_id` bigint(20) UNSIGNED DEFAULT NULL,
  `rate` tinyint(4) NOT NULL DEFAULT 0,
  `review` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_reviews`
--

INSERT INTO `product_reviews` (`id`, `user_id`, `product_id`, `rate`, `review`, `status`, `created_at`, `updated_at`) VALUES
(1, 31, 14, 5, 'nice product', 'active', '2020-08-15 07:44:05', '2020-08-15 07:44:05'),
(2, 2, 15, 5, 'nice', 'active', '2020-08-17 21:08:14', '2020-08-17 21:18:31'),
(3, 34, 34, 3, 'good product', 'active', '2022-02-21 13:52:46', '2022-02-21 13:52:46'),
(4, 34, 34, 1, 'iiiii', 'active', '2022-02-21 15:26:05', '2022-02-21 15:26:05'),
(5, 34, 34, 1, 'kkk', 'active', '2022-02-21 15:27:43', '2022-02-21 15:27:43'),
(6, 34, 28, 2, 'hlo', 'active', '2022-02-21 17:17:49', '2022-02-21 17:17:49');

-- --------------------------------------------------------

--
-- Table structure for table `product_specifications`
--

CREATE TABLE `product_specifications` (
  `id` int(11) NOT NULL,
  `product_id` bigint(20) NOT NULL,
  `specification_id` int(11) NOT NULL,
  `specification_values` varchar(500) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product_types`
--

CREATE TABLE `product_types` (
  `id` bigint(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `types` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `product_types`
--

INSERT INTO `product_types` (`id`, `product_id`, `types`, `status`, `created_at`, `updated_at`) VALUES
(1, 15, 'Trending', 'active', '2022-02-09 16:14:38', '2022-09-13 15:35:26'),
(3, 13, 'Popular', 'active', '2022-02-10 17:01:24', '2022-09-13 15:35:26'),
(4, 20, 'Popular', 'active', '2022-02-17 18:58:21', '2022-09-13 15:35:26'),
(5, 27, 'Trending', 'active', '2022-02-17 18:58:33', '2022-09-13 15:35:26'),
(6, 22, 'Popular', 'active', '2022-02-17 19:01:18', '2022-09-13 15:35:26'),
(7, 28, 'Trending', 'active', '2022-02-17 20:48:12', '2022-09-13 15:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `site_title` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `meta_keywords` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `meta_description`, `meta_keywords`, `logo`, `photo`, `address`, `phone`, `email`, `copyright`, `created_at`, `updated_at`) VALUES
(1, 'AOF || E-COMMERCE', 'AOF description', 'Aof Meta keywords, meta, meta data, all data', '/storage/photos/1/logo.png', '/storage/photos/1/logo.png', '9211 County Road 200 Alvin, Texas-77511', '+1 (409) 739 6346', 'info@aofenggsys.com', '', '2022-01-18 18:12:55', '2022-09-13 15:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `type`, `price`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Kahtmandu', '100.00', 'active', '2020-08-14 04:22:17', '2020-08-14 04:22:17'),
(2, 'Out of valley', '300.00', 'active', '2020-08-14 04:22:41', '2020-08-14 04:22:41'),
(3, 'Pokhara', '400.00', 'active', '2020-08-15 06:54:04', '2020-08-15 06:54:04'),
(4, 'Dharan', '400.00', 'active', '2020-08-17 20:50:48', '2020-08-17 20:50:48');

-- --------------------------------------------------------

--
-- Table structure for table `specifications`
--

CREATE TABLE `specifications` (
  `id` bigint(20) NOT NULL,
  `specification_name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `field_type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'default',
  `field_values` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `specifications`
--

INSERT INTO `specifications` (`id`, `specification_name`, `slug`, `field_type`, `field_values`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Test', 'test', 'default', NULL, 'active', '2022-02-09 16:47:55', '2022-09-13 15:35:26'),
(2, 'New Test Specification', 'new-test-specification', 'checkbox', 'New,Old,Coming', 'active', '2022-02-10 11:15:05', '2022-09-13 15:35:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `provider` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('active','inactive') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'active',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `photo`, `address`, `number`, `pin`, `role`, `provider`, `provider_id`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$Ogcjlv1D5oyLxWGqIb0UteE8CSz8.00.pv0WUq.nM17xXjry5qSAa', '/storage/photos/1/admin.jpg', NULL, NULL, NULL, 'admin', NULL, NULL, 'active', 'iQlkR7fR8Lj1BJRgVYDS62GirUA8euLcDTiywQwBxFRD9mFtWEXBrYUFNNz1', NULL, '2022-02-19 14:16:36'),
(2, 'User', 'user@gmail.com', NULL, '$2y$10$10jB2lupSfvAUfocjguzSeN95LkwgZJUM7aQBdb2Op7XzJ.BhNoHq', '/storage/photos/1/users/user2.jpg', NULL, NULL, NULL, 'user', NULL, NULL, 'active', NULL, NULL, '2020-08-15 07:30:07'),
(30, 'Faiz', 'modassirkhan337@gmail.com', NULL, '$2y$10$jltjCo/cfeRMI62QrtsE1OEgh3CpnDtvenKhu31tzCnAThYqlCV/K', 'http://localhost/storage/photos/1/admin.jpg', NULL, NULL, NULL, 'user', NULL, NULL, 'active', NULL, '2021-12-20 07:30:26', '2021-12-20 07:30:26'),
(31, 'Chiku', 'demos@gmail.com', NULL, '$2y$10$y0UsL9NQk9SidMoH6kbUUeOJ8vKFgJFCe2ryLX68SYgyPCa3f.JxC', NULL, '', '', '', 'user', NULL, NULL, 'active', NULL, '2022-01-19 03:35:12', '2022-01-19 03:35:12'),
(32, 'demo', 'bbb@gmail.com', NULL, '$2y$10$xzsCnzPE.A0pllzHxQCz3.OYveFjqDVsLopHGndn8.Qp7678kUd/.', NULL, '', '', '', 'user', NULL, NULL, 'active', NULL, '2022-01-19 07:04:40', '2022-01-19 07:04:40'),
(33, 'hlo', 'hlo@gmail.com', NULL, '$2y$10$1rqkqnN9vwfWg87VK9hDz.Qr80mK8G5DrQWn2Hrmqfzglw834SLY6', '/storage/photos/33/20170327_164706_2.jpg', 'bhubaneswar', '7788822584', '751017', 'user', NULL, NULL, 'active', NULL, '2022-01-19 07:56:06', '2022-01-22 13:29:02'),
(34, 'Chiku', 'Chiku@gmail.com', NULL, '$2y$10$jWbTx7s5JiAZ9QuDRGOL2epB.geAjNX4yX9/2YqnZQDHdhY8CqJvS', NULL, '', '', '', 'user', NULL, NULL, 'active', NULL, '2022-01-19 10:05:54', '2022-01-19 10:05:54');

-- --------------------------------------------------------

--
-- Table structure for table `wishlists`
--

CREATE TABLE `wishlists` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `product_id` bigint(20) UNSIGNED NOT NULL,
  `cart_id` bigint(20) UNSIGNED DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `price` double(8,2) NOT NULL,
  `quantity` int(11) NOT NULL,
  `amount` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attributes`
--
ALTER TABLE `attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `banners_slug_unique` (`slug`);

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `brands_slug_unique` (`slug`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_categories`
--
ALTER TABLE `campaign_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_categories_slug_unique` (`slug`);

--
-- Indexes for table `carts`
--
ALTER TABLE `carts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `carts_product_id_foreign` (`product_id`),
  ADD KEY `carts_user_id_foreign` (`user_id`),
  ADD KEY `carts_order_id_foreign` (`order_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`),
  ADD KEY `categories_parent_id_foreign` (`parent_id`),
  ADD KEY `categories_added_by_foreign` (`added_by`);

--
-- Indexes for table `coupons`
--
ALTER TABLE `coupons`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `coupons_code_unique` (`code`);

--
-- Indexes for table `demo`
--
ALTER TABLE `demo`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

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
  ADD KEY `notifications_notifiable_type_notifiable_id_index` (`notifiable_type`,`notifiable_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `orders_order_number_unique` (`order_number`),
  ADD KEY `orders_user_id_foreign` (`user_id`),
  ADD KEY `orders_shipping_id_foreign` (`shipping_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`),
  ADD KEY `posts_post_cat_id_foreign` (`post_cat_id`),
  ADD KEY `posts_post_tag_id_foreign` (`post_tag_id`),
  ADD KEY `posts_added_by_foreign` (`added_by`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_categories_slug_unique` (`slug`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_comments_user_id_foreign` (`user_id`),
  ADD KEY `post_comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `post_tags`
--
ALTER TABLE `post_tags`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `post_tags_slug_unique` (`slug`);

--
-- Indexes for table `productfaqs`
--
ALTER TABLE `productfaqs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_slug_unique` (`slug`),
  ADD KEY `products_brand_id_foreign` (`brand_id`),
  ADD KEY `products_cat_id_foreign` (`cat_id`),
  ADD KEY `products_child_cat_id_foreign` (`child_cat_id`);

--
-- Indexes for table `product_attributes`
--
ALTER TABLE `product_attributes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_reviews_user_id_foreign` (`user_id`),
  ADD KEY `product_reviews_product_id_foreign` (`product_id`);

--
-- Indexes for table `product_specifications`
--
ALTER TABLE `product_specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_types`
--
ALTER TABLE `product_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `specifications`
--
ALTER TABLE `specifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `wishlists_product_id_foreign` (`product_id`),
  ADD KEY `wishlists_user_id_foreign` (`user_id`),
  ADD KEY `wishlists_cart_id_foreign` (`cart_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attributes`
--
ALTER TABLE `attributes`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campaign_categories`
--
ALTER TABLE `campaign_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `carts`
--
ALTER TABLE `carts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `coupons`
--
ALTER TABLE `coupons`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `demo`
--
ALTER TABLE `demo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post_tags`
--
ALTER TABLE `post_tags`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `productfaqs`
--
ALTER TABLE `productfaqs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `product_attributes`
--
ALTER TABLE `product_attributes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_reviews`
--
ALTER TABLE `product_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_specifications`
--
ALTER TABLE `product_specifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product_types`
--
ALTER TABLE `product_types`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `specifications`
--
ALTER TABLE `specifications`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `wishlists`
--
ALTER TABLE `wishlists`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `carts`
--
ALTER TABLE `carts`
  ADD CONSTRAINT `carts_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `carts_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `carts_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `categories`
--
ALTER TABLE `categories`
  ADD CONSTRAINT `categories_added_by_foreign` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_shipping_id_foreign` FOREIGN KEY (`shipping_id`) REFERENCES `shippings` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `orders_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_added_by_foreign` FOREIGN KEY (`added_by`) REFERENCES `users` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_post_cat_id_foreign` FOREIGN KEY (`post_cat_id`) REFERENCES `post_categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `posts_post_tag_id_foreign` FOREIGN KEY (`post_tag_id`) REFERENCES `post_tags` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD CONSTRAINT `post_comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `post_comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_cat_id_foreign` FOREIGN KEY (`cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `products_child_cat_id_foreign` FOREIGN KEY (`child_cat_id`) REFERENCES `categories` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `product_reviews`
--
ALTER TABLE `product_reviews`
  ADD CONSTRAINT `product_reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `product_reviews_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `wishlists`
--
ALTER TABLE `wishlists`
  ADD CONSTRAINT `wishlists_cart_id_foreign` FOREIGN KEY (`cart_id`) REFERENCES `carts` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `wishlists_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `wishlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
