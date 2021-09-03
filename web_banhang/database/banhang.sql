-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th9 03, 2021 lúc 07:47 PM
-- Phiên bản máy phục vụ: 10.4.20-MariaDB
-- Phiên bản PHP: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `banhang`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `date_order` timestamp NULL DEFAULT current_timestamp(),
  `status` varchar(200) NOT NULL,
  `quantity` int(20) NOT NULL,
  `total` float NOT NULL,
  `payment` varchar(200) DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bills`
--

INSERT INTO `bills` (`id`, `customer_id`, `date_order`, `status`, `quantity`, `total`, `payment`, `note`, `created_at`, `updated_at`) VALUES
(9, 18, '2021-09-01 22:08:20', '0', 2, 24090000, 'tienMat', 'det', '2021-09-02 05:08:20', '2021-09-02 05:08:20'),
(11, 20, '2021-09-01 22:45:21', '1', 2, 24800000, 'tienMat', 'vbhjnk', '2021-09-02 05:45:21', '2021-09-02 05:45:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `bill_details`
--

CREATE TABLE `bill_details` (
  `id` int(11) NOT NULL,
  `bill_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `bill_details`
--

INSERT INTO `bill_details` (`id`, `bill_id`, `product_id`, `quantity`, `price`, `created_at`, `updated_at`) VALUES
(18, 9, 4, 1, 6500000, '2021-09-02 05:08:20', '2021-09-02 05:08:20'),
(19, 9, 1, 1, 17590000, '2021-09-02 05:08:20', '2021-09-02 05:08:20'),
(20, 10, 1, 1, 17590000, '2021-09-02 05:19:48', '2021-09-02 05:19:48'),
(21, 10, 2, 1, 33190000, '2021-09-02 05:19:48', '2021-09-02 05:19:48'),
(22, 11, 3, 2, 5900000, '2021-09-02 05:45:21', '2021-09-02 05:45:21'),
(23, 11, 4, 2, 6500000, '2021-09-02 05:45:21', '2021-09-02 05:45:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `Users`
--

CREATE TABLE `brands` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `logo` varchar(200) DEFAULT NULL,
  `description` varchar(50) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `Users`
--

INSERT INTO `brands` (`id`, `name`, `logo`, `description`, `created_at`, `updated_at`) VALUES
(1, 'lenovo', NULL, 'LENOVO', '2021-08-21 21:37:02', '2021-08-21 21:37:02'),
(2, 'samsung', NULL, 'SAM SUNG', '2021-08-21 21:37:02', '2021-08-21 21:37:02'),
(3, 'xiaomi', NULL, 'XIAOMI', '2021-08-21 21:37:02', '2021-08-21 21:37:02'),
(4, 'hp', NULL, 'HP', '2021-08-21 21:37:02', '2021-08-21 21:37:02'),
(5, 'oppo', NULL, 'OPPO', '2021-08-21 21:37:02', '2021-08-21 21:37:02'),
(6, 'asus', NULL, 'ASUS', '2021-08-21 21:37:02', '2021-08-21 21:37:02');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `note` varchar(200) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `address`, `phone`, `note`, `created_at`, `updated_at`) VALUES
(18, 'sdfe', 'thanh@gmail.com', 'fverf', 'wfe', 'det', '2021-09-02 05:08:20', '2021-09-02 05:08:20'),
(19, 'sdfvef', 'thanh@gmail.com', 'sdfvsd', 'dvvvv', 'dvdv', '2021-09-02 05:19:48', '2021-09-02 05:19:48'),
(20, 'cgvhbjnk', 'thanh@gmail.com', 'rtybjn', 'vbhjnkm', 'vbhjnk', '2021-09-02 05:45:21', '2021-09-02 05:45:21');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `permissions`
--

CREATE TABLE `permissions` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `description`) VALUES
(1, 'view', 'xem trang ban hang'),
(2, 'manager', 'quan ly he thong');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `unit_price` int(11) NOT NULL,
  `promotion_price` int(11) NOT NULL,
  `description` text NOT NULL,
  `cpu` varchar(30) NOT NULL,
  `ram` varchar(30) NOT NULL,
  `oCung` varchar(30) NOT NULL,
  `win` varchar(50) NOT NULL,
  `manHinh` varchar(50) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `type_id` int(11) NOT NULL,
  `image` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `products`
--

INSERT INTO `products` (`id`, `name`, `unit_price`, `promotion_price`, `description`, `cpu`, `ram`, `oCung`, `win`, `manHinh`, `brand_id`, `type_id`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Lenovo IdeaPad 3', 17590000, 0, '', 'AMD Ryzen 3-3250U', '4GB', '256GB SSD', 'Window 10 Home', '21 inch', 1, 1, 'lap1.png', '2021-08-21 21:45:49', '2021-08-21 21:45:49'),
(2, 'Asus VivoBook A515EA', 34990000, 33190000, '', 'Intel Pentium', '8 GB', '256GB SSD', 'Window 10 Home', '21 inch', 6, 1, 'lap2.jpg', '2021-08-21 21:45:49', '2021-08-21 21:45:49'),
(3, 'oppo f5', 6500000, 5900000, '', '', '', '', '', '', 5, 2, '', '2021-08-21 21:48:34', '2021-08-21 21:48:34'),
(4, 'samsung A350', 7990000, 6500000, '', '', '', '', '', '', 2, 2, '', '2021-08-21 21:48:34', '2021-08-21 21:48:34'),
(5, 'tai nghe samsung', 250000, 200000, '', '', '', '', '', '', 2, 3, '', '2021-08-21 21:48:34', '2021-08-21 21:48:34');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `roles`
--

INSERT INTO `roles` (`id`, `name`, `description`) VALUES
(1, 'admin', 'quan tri vien'),
(2, 'user', 'nguoi dung');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `role_permissions`
--

CREATE TABLE `role_permissions` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `permission_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `role_permissions`
--

INSERT INTO `role_permissions` (`id`, `role_id`, `permission_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `type_products`
--

CREATE TABLE `type_products` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `type_products`
--

INSERT INTO `type_products` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'laptop', 'MÁY TÍNH', '2021-08-21 21:34:41', '2021-08-21 21:34:41'),
(2, 'smartphone', 'ĐIỆN THOẠI', '2021-08-21 21:34:41', '2021-08-21 21:34:41'),
(3, 'phukien', 'PHỤ KIỆN', '2021-08-21 21:34:41', '2021-08-21 21:34:41');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `money` int(11) DEFAULT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role_id`, `money`, `remember_token`, `created_at`, `updated_at`) VALUES
(5, 'long', 'long@gmail.com', '$2y$10$UrsKiqtna6B5nSR44ICHNOUKeVzZbtJXneHIOXDSHlM6wCr25rmV.', NULL, 1785080001, 'yTrEyrm9ufQClzO6P5ynH39VFgXS8IlgIe1JSDq8iab5oqvoPhQHserKBtut', '2021-08-27 00:21:17', '2021-09-01 08:42:32'),
(18, 'thanh', 'thanh@gmail.com', '$2y$10$rCLvHcc03lhBBVY4dxm9GeyG0OrObxbonl9LcQXodGm/mJpdE4D1m', NULL, NULL, NULL, '2021-08-29 05:12:36', '2021-08-29 05:12:36');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `customer_id` (`customer_id`);

--
-- Chỉ mục cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`),
  ADD KEY `bill_id` (`bill_id`);

--
-- Chỉ mục cho bảng `Users`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD KEY `brand_id` (`brand_id`),
  ADD KEY `type_id` (`type_id`);

--
-- Chỉ mục cho bảng `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`),
  ADD KEY `permission_id` (`permission_id`);

--
-- Chỉ mục cho bảng `type_products`
--
ALTER TABLE `type_products`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `users_ibfk_1` (`role_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT cho bảng `Users`
--
ALTER TABLE `brands`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT cho bảng `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT cho bảng `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT cho bảng `role_permissions`
--
ALTER TABLE `role_permissions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `type_products`
--
ALTER TABLE `type_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT cho bảng `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `bills`
--
ALTER TABLE `bills`
  ADD CONSTRAINT `bills_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `bill_details`
--
ALTER TABLE `bill_details`
  ADD CONSTRAINT `bill_details_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `bill_details_ibfk_2` FOREIGN KEY (`bill_id`) REFERENCES `bills` (`id`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_ibfk_1` FOREIGN KEY (`brand_id`) REFERENCES `brands` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `products_ibfk_2` FOREIGN KEY (`type_id`) REFERENCES `type_products` (`id`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `role_permissions`
--
ALTER TABLE `role_permissions`
  ADD CONSTRAINT `role_permissions_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `role_permissions_ibfk_2` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE NO ACTION;

--
-- Các ràng buộc cho bảng `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
