-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 29, 2018 lúc 02:49 PM
-- Phiên bản máy phục vụ: 10.1.36-MariaDB
-- Phiên bản PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `herofood`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cate_active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `categories`
--

INSERT INTO `categories` (`id`, `cate_name`, `cate_slug`, `cate_active`, `created_at`, `updated_at`) VALUES
(1, 'Danh muc 11111', 'danh-muc-11111', 0, NULL, '2018-10-29 06:48:58'),
(2, 'Danh muc 2', 'danh-muc-2', 0, NULL, NULL),
(3, 'Danh muc 3', 'danh-muc-3', 1, NULL, NULL),
(4, 'Danh muc 4', 'danh-muc-4', 0, NULL, NULL),
(5, 'Danh muc 1weqweqwe', 'danh-muc-1weqweqwe', 0, NULL, '2018-10-29 06:46:45'),
(6, 'Danh muc 5', 'danh-muc-5', 1, NULL, NULL),
(7, 'tetsssasdadsasdasdasd', 'tetsssasdadsasdasdasd', 0, '2018-10-29 06:36:34', '2018-10-29 06:36:34'),
(8, 'Danh muc 13', 'danh - muc - 1', 0, '2018-10-29 06:36:53', '2018-10-29 06:36:53'),
(9, 'Danh muc 22', 'danh-muc-22', 0, '2018-10-29 06:37:59', '2018-10-29 06:37:59'),
(10, '231231231232313212313', '231231231232313212313', 0, '2018-10-29 06:47:07', '2018-10-29 06:47:07'),
(11, 'Danh muc 53333', 'danh-muc-53333', 0, '2018-10-29 06:48:43', '2018-10-29 06:48:43');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_10_22_043515_create_categories_table', 1),
(4, '2018_10_24_162403_create_shopfoods_table', 1),
(5, '2018_10_24_163514_create_products_table', 1),
(6, '2018_10_24_185537_create_categoriedetails_table', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `thumb_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_active` int(11) NOT NULL DEFAULT '0',
  `price` int(11) NOT NULL,
  `sell_price` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `views` int(11) NOT NULL DEFAULT '0',
  `like` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `product_name`, `description`, `product_slug`, `image`, `thumb_image`, `product_active`, `price`, `sell_price`, `amount`, `views`, `like`, `created_at`, `updated_at`) VALUES
(1, 'san pham thu 1', 'description 1', 'san-pham-1', '', '', 0, 200000, 0, 10, 0, 0, NULL, NULL),
(2, 'san pham thu 2', 'description 2', 'san-pham-2', '', '', 0, 180000, 160000, 3, 0, 0, NULL, NULL),
(3, 'san pham thu 3', 'description 3', 'san-pham-3', '', '', 0, 10000, 8000, 10, 0, 0, NULL, NULL),
(4, 'san pham thu 4', 'description 4', 'san-pham-4', '', '', 0, 500000, 0, 1, 0, 0, NULL, NULL),
(5, 'san pham thu 5', 'description 5', 'san-pham-5', '', '', 0, 200000, 0, 2, 0, 0, NULL, NULL),
(6, 'san pham thu 6', 'description 6', 'san-pham-6', '', '', 0, 650000, 560000, 5, 0, 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shopfoods`
--

CREATE TABLE `shopfoods` (
  `id` int(10) UNSIGNED NOT NULL,
  `shopfood_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopfood_slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopfood_title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopfood_content` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `shopfood_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shopfood_active` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `shopfoods`
--

INSERT INTO `shopfoods` (`id`, `shopfood_name`, `shopfood_slug`, `shopfood_title`, `shopfood_content`, `shopfood_address`, `shopfood_active`, `created_at`, `updated_at`) VALUES
(1, 'shop1', 'shop-1', NULL, NULL, '', 0, NULL, NULL),
(2, 'shop2', 'shop-2', NULL, NULL, '', 0, NULL, NULL),
(3, 'shop3', 'shop-3', NULL, NULL, '', 1, NULL, NULL),
(4, 'shop4', 'shop-4', NULL, NULL, '', 0, NULL, NULL),
(5, 'shop5', 'shop-5', NULL, NULL, '', 0, NULL, NULL),
(6, 'shop6', 'shop-6', NULL, NULL, '', 0, NULL, NULL),
(7, 'shop7', 'shop-7', NULL, NULL, '', 0, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `shop_key_product`
--

CREATE TABLE `shop_key_product` (
  `id` int(10) UNSIGNED NOT NULL,
  `shopfood_id` int(11) NOT NULL,
  `categorie_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shop_id` int(11) NOT NULL DEFAULT '0',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `role` int(11) NOT NULL DEFAULT '0',
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `active` int(11) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `shop_id`, `email`, `avatar`, `email_verified_at`, `role`, `password`, `active`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 0, 'admin@gmail.com', '', NULL, 2, '$2y$10$NQs0m3MBEkrCFCyu8v/AAOhfGDb5SRfjeGVs9olKZvCuHqn9qdVNy', 0, 'CtIcSHktozXxKiNxOF8Qzrr6WGmsqqMCEVl3Baj42i2dfMUAMQ6KL57mZsHJ', NULL, NULL),
(2, 'Mod', 0, 'mod@gmail.com', '', NULL, 1, '$2y$10$ohMbGzQakQU1g4nuyNkGxeUbWviK9eD1bo5GIC1VpRLcUhtItMWVW', 0, NULL, NULL, NULL),
(3, 'test1', 0, 'test1f@gmail.com', '', NULL, 0, '$2y$10$8Qk0g3197K0k26KyeqTBNOl5MW9ruqkfew5Im4yZEhf1iH9K0/FZK', 0, NULL, NULL, NULL),
(4, 'test2', 0, 'test2f@gmail.com', '', NULL, 0, '$2y$10$OJAVigVnu2idgQQWCAF7qOvXGYmKbCLqMPxdPEMgYxs5/xKOcd0uy', 0, NULL, NULL, NULL),
(5, 'test3', 0, 'test3f@gmail.com', '', NULL, 0, '$2y$10$GvE4bFOh0SWrY7PJk6hsweefe73hHOnehXuapCyQc6H73qHMmeR2q', 0, NULL, NULL, NULL);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_cate_name_unique` (`cate_name`),
  ADD UNIQUE KEY `categories_cate_slug_unique` (`cate_slug`);

--
-- Chỉ mục cho bảng `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_product_slug_unique` (`product_slug`);

--
-- Chỉ mục cho bảng `shopfoods`
--
ALTER TABLE `shopfoods`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `shopfoods_shopfood_name_unique` (`shopfood_name`),
  ADD UNIQUE KEY `shopfoods_shopfood_slug_unique` (`shopfood_slug`);

--
-- Chỉ mục cho bảng `shop_key_product`
--
ALTER TABLE `shop_key_product`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `shopfoods`
--
ALTER TABLE `shopfoods`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT cho bảng `shop_key_product`
--
ALTER TABLE `shop_key_product`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
