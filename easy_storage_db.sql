-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2024 at 02:59 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `easy_storage_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `abouts`
--

CREATE TABLE `abouts` (
  `id` int(10) UNSIGNED NOT NULL,
  `content` text NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `abouts`
--

INSERT INTO `abouts` (`id`, `content`, `image`, `created_at`, `updated_at`) VALUES
(1, 'مرحبًا بكم في نظام إدارة المخزون والمبيعات المبتكر الخاص بنا، الذي صمم خصيصًا للمتاجر الصغيرة والمتوسطة في الكويت. نحن ندرك التحديات التي تواجهها التجار في إدارة عمليات المخزون والمبيعات بكفاءة. نظامنا المخصص مصمم لتبسيط العمليات، وتعزيز الكفاءة، وتمكين الأعمال التجارية من الازدهار في السوق التنافسي اليوم. من خلال وظائف سهلة الاستخدام وأدوات تقارير شاملة، نهدف إلى تحويل طريقة إدارة المخزون والمبيعات في المتاجر، مما يدفع بالنمو والنجاح', 'about-us.png', '2024-04-05 08:08:41', '2024-04-14 09:25:04');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `c_number` varchar(12) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `image`, `c_number`, `created_at`, `updated_at`) VALUES
(1, 'ادمن', 'admin@easystorage.com', '$2y$10$8VBAYt9Vs.HcQ76/L23.sO5eNuwE7NEclt/B0kH/8zrkGxakAveFe', 'banner-3-2.jpg', '121365219857', '2024-03-26 06:51:19', '2024-04-05 10:00:45');

-- --------------------------------------------------------

--
-- Table structure for table `cashiers`
--

CREATE TABLE `cashiers` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `password` varchar(191) NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `email` varchar(191) NOT NULL,
  `phone` varchar(191) DEFAULT NULL,
  `c_number` varchar(12) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cashiers`
--

INSERT INTO `cashiers` (`id`, `name`, `password`, `image`, `email`, `phone`, `c_number`, `created_at`, `updated_at`) VALUES
(2, 'عبدالله خالد', '$2y$10$9.tB7E8MPfGvYXcp0MB9JuLP3XcWGohDEGNm0fm2PQ3nqhc3ldKSO', '14_01_about-us1.jpg', 'cashier@easystorage.com', '96532523', '123456789963', '2024-04-05 08:47:52', '2024-04-06 08:07:59');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(3, 'البان', '2024-04-06 06:26:46', '2024-04-06 06:26:46'),
(4, 'لحوم', '2024-04-06 07:26:02', '2024-04-06 07:26:02'),
(5, 'مشروبات', '2024-04-06 07:29:21', '2024-04-06 07:29:21'),
(6, 'الكتورنيات', '2024-04-23 00:37:53', '2024-04-23 00:37:53');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `email` varchar(191) NOT NULL,
  `message` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'عبدالله', 'abadalla@easystorage.com', 'الموقع جميل جدا', '2024-04-05 08:38:45', '2024-04-05 08:38:45'),
(2, 'طلال عابد', 'user@easystorage.com', 'موقع جميل', '2024-04-23 00:29:40', '2024-04-23 00:29:40');

-- --------------------------------------------------------

--
-- Table structure for table `gallaries`
--

CREATE TABLE `gallaries` (
  `id` int(10) UNSIGNED NOT NULL,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gallaries`
--

INSERT INTO `gallaries` (`id`, `image`, `created_at`, `updated_at`) VALUES
(1, '1.png', '2024-04-14 09:45:46', '2024-04-14 09:45:46'),
(2, '2.png', '2024-04-14 09:46:49', '2024-04-14 09:46:49'),
(3, '3.png', '2024-04-14 09:47:41', '2024-04-14 09:47:41'),
(4, '4.png', '2024-04-14 09:47:49', '2024-04-14 09:47:49'),
(5, '5.png', '2024-04-14 09:47:55', '2024-04-14 09:47:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(2, '2023_03_15_053119_create_admins_table', 1),
(3, '2023_12_08_034120_create_contacts_table', 1),
(4, '2023_12_14_182911_create_abouts_table', 1),
(5, '2023_12_14_183104_create_sliders_table', 1),
(6, '2024_03_25_172555_create_cashiers_table', 1),
(7, '2024_03_25_172755_create_categories_table', 1),
(8, '2024_03_25_172755_create_products_table', 1),
(9, '2024_03_25_172756_create_orders_table', 1),
(10, '2024_03_25_172758_create_order_products_table', 1),
(11, '2024_03_26_002519_create_gallaries_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `phone` varchar(8) DEFAULT NULL,
  `total_price` decimal(8,2) DEFAULT 0.00,
  `status` tinyint(1) NOT NULL,
  `added_at` timestamp NULL DEFAULT NULL,
  `cashier_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `phone`, `total_price`, `status`, `added_at`, `cashier_id`, `created_at`, `updated_at`) VALUES
(5, 'طلال عابد', '69512535', 56.50, 0, '2024-04-07 01:04:50', 2, '2024-04-06 09:40:26', '2024-04-07 01:04:50'),
(7, 'طلال عابد', '96532152', 17.50, 0, '2024-04-23 00:53:55', 2, '2024-04-07 01:04:50', '2024-04-23 00:53:55'),
(8, NULL, NULL, 0.00, 1, NULL, 2, '2024-04-23 00:53:55', '2024-04-23 00:53:55');

-- --------------------------------------------------------

--
-- Table structure for table `order_products`
--

CREATE TABLE `order_products` (
  `id` int(10) UNSIGNED NOT NULL,
  `order_id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED NOT NULL,
  `quantity` int(11) NOT NULL,
  `total` decimal(8,2) NOT NULL,
  `price` decimal(8,2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_products`
--

INSERT INTO `order_products` (`id`, `order_id`, `product_id`, `quantity`, `total`, `price`, `created_at`, `updated_at`) VALUES
(2, 5, 3, 6, 30.00, 5.00, '2024-04-06 12:23:54', '2024-04-06 12:23:54'),
(4, 5, 2, 7, 14.00, 2.00, '2024-04-06 12:28:03', '2024-04-06 12:28:03'),
(5, 5, 1, 5, 12.50, 2.50, '2024-04-07 00:58:23', '2024-04-07 00:58:23'),
(7, 7, 2, 5, 10.00, 2.00, '2024-04-23 00:52:14', '2024-04-23 00:52:14'),
(8, 7, 1, 3, 7.50, 2.50, '2024-04-23 00:53:37', '2024-04-23 00:53:37');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(191) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `image` varchar(191) DEFAULT NULL,
  `price` decimal(8,2) NOT NULL,
  `code` varchar(191) NOT NULL,
  `details` text DEFAULT NULL,
  `quantity` int(11) NOT NULL DEFAULT 0,
  `quantity_sold` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `category_id`, `image`, `price`, `code`, `details`, `quantity`, `quantity_sold`, `created_at`, `updated_at`) VALUES
(1, 'لبن رايب 1 لتر المراعى', 3, 'image.jpg', 2.50, '125321', 'لبن رايب المراعى 1 لتر', 32, 8, '2024-04-06 06:35:30', '2024-04-23 00:53:37'),
(2, 'فيروز 1 لتر', 5, 'فيروز.jpg', 2.00, '123654', 'فيروز', 18, 12, '2024-04-06 07:34:21', '2024-04-23 00:52:14'),
(3, 'بلوبيف', 4, 'بلوبيف.jpg', 5.00, '9653214', 'بلوبيف', 34, 6, '2024-04-06 07:38:25', '2024-04-07 00:57:26');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) NOT NULL,
  `content` text NOT NULL,
  `image` text DEFAULT NULL,
  `video` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `content`, `image`, `video`, `created_at`, `updated_at`) VALUES
(1, 'التحكم في المخزون بسلاسة', 'إدارة المخزون بسهولة من خلال نظامنا البديهي. تتبع كميات المنتجات والفئات ومستويات المخزون في الوقت الفعلي، مما يضمن عدم نفاد المواد الأساسية.', '1.png', NULL, '2024-04-05 08:27:16', '2024-04-14 09:26:43'),
(2, 'عمليات المبيعات الفعالة', 'زيادة الإنتاجية في نقطة البيع مع ميزات تسجيل الكاشير وعملية البيع لدينا. تمكين الكاشير من معالجة ', '2.png', NULL, '2024-04-05 08:27:16', '2024-04-14 09:26:52'),
(3, 'أدوات التقارير المخصصة', 'منح المسؤولين أدوات تقارير مفيدة للحصول على رؤى قيمة حول أداء المبيعات واتجاهات المخزون. إنشاء تقارير شاملة مع تحليل مفصل، مما يسمح باتخاذ القرارات المستنيرة والتخطيط الاستراتيجي.', '3.png', NULL, '2024-04-05 08:27:53', '2024-04-14 09:27:02'),
(4, 'واجهة سهلة الاستخدام', 'تجربة التصفح بدون عناء والوظائف السلسة من خلال واجهة مستخدم سهلة الاستخدام لدينا. سواء كنت مسؤولًا أو كاشيرًا، فإن نظامنا مصمم لتبسيط المهام وتعزيز الكفاءة العامة.', '4.png', NULL, '2024-04-05 08:28:12', '2024-04-14 09:27:11'),
(5, 'أمان وموثوقية البيانات', 'اطمئن إلى أن بياناتك آمنة ومأمونة مع نظام إدارة قاعدة بياناتنا القوي. استمتع بالطمأنينة مع العلم بأن جميع المعاملات والمعلومات الحساسة مشفرة ومحمية ضد الوصول غير المصرح به.', '5.png', NULL, '2024-04-05 08:28:31', '2024-04-14 09:27:19');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abouts`
--
ALTER TABLE `abouts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`),
  ADD UNIQUE KEY `admins_c_number_unique` (`c_number`);

--
-- Indexes for table `cashiers`
--
ALTER TABLE `cashiers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cashiers_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallaries`
--
ALTER TABLE `gallaries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `orders_cashier_id_foreign` (`cashier_id`);

--
-- Indexes for table `order_products`
--
ALTER TABLE `order_products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_products_order_id_foreign` (`order_id`),
  ADD KEY `order_products_product_id_foreign` (`product_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_code_unique` (`code`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abouts`
--
ALTER TABLE `abouts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cashiers`
--
ALTER TABLE `cashiers`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `gallaries`
--
ALTER TABLE `gallaries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `order_products`
--
ALTER TABLE `order_products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_cashier_id_foreign` FOREIGN KEY (`cashier_id`) REFERENCES `cashiers` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_products`
--
ALTER TABLE `order_products`
  ADD CONSTRAINT `order_products_order_id_foreign` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_products_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
