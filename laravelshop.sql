-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th7 14, 2022 lúc 05:18 AM
-- Phiên bản máy phục vụ: 5.7.36
-- Phiên bản PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `laravelshop`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(21, '2014_10_12_000000_create_users_table', 1),
(22, '2014_10_12_100000_create_password_resets_table', 1),
(23, '2022_05_14_095844_create_tbl_admin_table', 1),
(24, '2022_05_17_140501_create_tbl_category_products', 1),
(25, '2022_05_20_134451_create_tbl_products', 1),
(26, '2022_06_17_103019_tbl_customer', 2),
(27, '2022_06_30_120804_tbl_shipping', 3),
(28, '2022_06_30_145831_tbl_payment', 4),
(29, '2022_06_30_150115_tbl_order', 4),
(30, '2022_06_30_150229_tbl_order_details', 4),
(31, '2022_07_09_153253_create_table_comments_table', 5),
(32, '2022_07_09_154037_tbl_comments', 6),
(33, '2022_07_09_154134_tbl_comments', 7),
(34, '2022_07_09_154358_tbl_comments', 8),
(35, '2022_07_12_165520_tbl_sendmessage', 9),
(36, '2022_07_12_165830_tbl_sendmessage', 10);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_admin`
--

DROP TABLE IF EXISTS `tbl_admin`;
CREATE TABLE IF NOT EXISTS `tbl_admin` (
  `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `admin_mail` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_mail`, `admin_password`, `admin_name`, `admin_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@xemaygialai.com', 'e10adc3949ba59abbe56e057f20f883e', 'Minh Le', '0909472846', '2022-06-16 13:13:51', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_category_products`
--

DROP TABLE IF EXISTS `tbl_category_products`;
CREATE TABLE IF NOT EXISTS `tbl_category_products` (
  `category_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_category_products`
--

INSERT INTO `tbl_category_products` (`category_id`, `category_name`, `category_desc`, `category_status`, `created_at`, `updated_at`) VALUES
(1, 'Yamaha', 'xe may hang yamaha nhat ban', 1, NULL, NULL),
(2, 'Honda', 'eqw', 1, NULL, NULL),
(3, 'Kawasaki', 'qweq', 1, NULL, NULL),
(4, 'Suzuki', 'rwqrwqe', 1, NULL, NULL),
(6, 'BMW', 'Xe moto phân khối lớn của Đức', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_comments`
--

DROP TABLE IF EXISTS `tbl_comments`;
CREATE TABLE IF NOT EXISTS `tbl_comments` (
  `comment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `product_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_text` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`comment_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_customers`
--

DROP TABLE IF EXISTS `tbl_customers`;
CREATE TABLE IF NOT EXISTS `tbl_customers` (
  `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customer_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_name`, `customer_email`, `customer_password`, `customer_phone`, `created_at`, `updated_at`) VALUES
(14, 'cxcxzc', 'cxzcxzc', '1234', 'fsdfdsfsd', NULL, NULL),
(32, 'test345', 'test345@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9547396843', NULL, NULL),
(6, 'le nhat minh 3', 'leca@gmail.com', '202cb962ac59075b964b07152d234b70', '09941321512', NULL, NULL),
(7, 'test', 'test@gmail.com', '202cb962ac59075b964b07152d234b70', '13231', NULL, NULL),
(8, 'nnhh', 'dsadda@gmail.com', '202cb962ac59075b964b07152d234b70', '534522', NULL, NULL),
(12, 'minh le', 'leminh123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '345344353434', NULL, NULL),
(13, 'fdfdsfsd', 'fsfsfd', '4ff772b41b4067f9c2d047588232a09e', 'sfsffdsf', NULL, NULL),
(11, 'minh test', 'munh@gmail.com', '93279e3308bdbbeed946fc965017f67a', '1231231312', NULL, NULL),
(15, 'le nhat minh', '2321dsada', 'e10adc3949ba59abbe56e057f20f883e', '987545646', NULL, NULL),
(16, 'dsdadsdad', 'dsadadad', 'e10adc3949ba59abbe56e057f20f883e', '654645645', NULL, NULL),
(20, 'le minh', 'minhle99@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '765746446', NULL, NULL),
(19, 'minh moc', 'minhmoc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '543644353', NULL, NULL),
(22, 'hung le', 'hungle13@gmail.com', '96e79218965eb72c92a549dd5a330112', '45435343', NULL, NULL),
(23, 'adcqa', 'le1@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '4325325', NULL, NULL),
(24, 'nguyen van loi', 'vanloi@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '403298', NULL, NULL),
(25, 'tran van phuc', 'vanphuc@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '432589554', NULL, NULL),
(26, 'tran van minh', 'vanminh@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '9546803', NULL, NULL),
(27, 'david', 'david@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '95348503', NULL, NULL),
(28, 'phuc du', 'phucdu@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '049354353', NULL, NULL),
(29, 'ko biet', 'kobiet12@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '49328752790', NULL, NULL),
(30, 'test123', 'test123@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '043985', NULL, NULL),
(31, 'test234', 'test234@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', '90584359030', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order`
--

DROP TABLE IF EXISTS `tbl_order`;
CREATE TABLE IF NOT EXISTS `tbl_order` (
  `order_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `order_total` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order`
--

INSERT INTO `tbl_order` (`order_id`, `customer_id`, `shipping_id`, `payment_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 23, 6, 1, '495000000', 'Đã duyệt đơn hàng', NULL, NULL),
(2, 20, 8, 2, '440000000', 'Đã duyệt đơn hàng', NULL, NULL),
(3, 20, 8, 3, '440000000', 'Đã duyệt đơn hàng', NULL, NULL),
(4, 20, 6, 4, '82500000', 'Đã duyệt đơn hàng', NULL, NULL),
(5, 20, 9, 5, '1936000000', 'Đã duyệt đơn hàng', NULL, NULL),
(6, 20, 9, 6, '55000000', 'Đã duyệt đơn hàng', NULL, NULL),
(7, 20, 9, 7, '165000000', 'Từ chối đơn hàng', NULL, NULL),
(8, 20, 9, 8, '165000000', 'Từ chối đơn hàng', NULL, NULL),
(9, 20, 9, 9, '165000000', 'Từ chối đơn hàng', NULL, NULL),
(10, 20, 9, 10, '1925000000', 'Đã duyệt đơn hàng', NULL, NULL),
(11, 20, 9, 11, '2227500000', 'Dang cho xu ly', NULL, NULL),
(12, 20, 9, 12, '2227500000', 'Dang cho xu ly', NULL, NULL),
(13, 20, 9, 13, '935000000', 'Dang cho xu ly', NULL, NULL),
(14, 20, 9, 14, '1402500000', 'Đã duyệt đơn hàng', NULL, NULL),
(15, 20, 9, 15, '31900000', 'Dang cho xu ly', NULL, NULL),
(16, 20, 10, 16, '176000000', 'Dang cho xu ly', NULL, NULL),
(17, 20, 11, 17, '55000000', 'Dang cho xu ly', NULL, NULL),
(18, 20, 12, 18, '110000000', 'Dang cho xu ly', NULL, NULL),
(19, 23, 12, 19, '27500000', 'Dang cho xu ly', NULL, NULL),
(20, 23, 13, 20, '55000000', 'Dang cho xu ly', NULL, NULL),
(21, 23, 14, 21, '27500000', 'Dang cho xu ly', NULL, NULL),
(23, 24, 16, 23, '258500000', 'Dang cho xu ly', NULL, NULL),
(24, 24, 16, 24, '258500000', 'Dang cho xu ly', NULL, NULL),
(25, 24, 16, 25, '258500000', 'Từ chối đơn hàng', NULL, NULL),
(26, 28, 18, 26, '176000000', 'Dang cho xu ly', NULL, NULL),
(27, 28, 19, 27, '176000000', 'Dang cho xu ly', NULL, NULL),
(28, 28, 20, 28, '1760000000', 'Dang cho xu ly', NULL, NULL),
(29, 20, 21, 29, '176000000', 'Từ chối đơn hàng', NULL, NULL),
(30, 5, 22, 30, '638000000', 'Đã duyệt đơn hàng', NULL, NULL),
(31, 28, 24, 31, '9504000000', 'Đang chờ xử lý', NULL, NULL),
(32, 28, 24, 32, '9504000000', 'Đang chờ xử lý', NULL, NULL),
(33, 28, 24, 33, '9504000000', 'Từ chối đơn hàng', NULL, NULL),
(34, 28, 24, 34, '9504000000', 'Đã duyệt đơn hàng', NULL, NULL),
(35, 5, 25, 35, '343200000', 'Đang chờ xử lý', NULL, NULL),
(36, 5, 26, 36, '231000000', 'Đang chờ xử lý', NULL, NULL),
(37, 32, 27, 37, '1760000000', 'Đang chờ xử lý', NULL, NULL),
(38, 32, 28, 38, '31900000', 'Đang chờ xử lý', NULL, NULL),
(39, 32, 28, 39, '31900000', 'Đang chờ xử lý', NULL, NULL),
(40, 32, 29, 40, '31900000', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_order_details`
--

DROP TABLE IF EXISTS `tbl_order_details`;
CREATE TABLE IF NOT EXISTS `tbl_order_details` (
  `order_details_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_sales_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=MyISAM AUTO_INCREMENT=61 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_order_details`
--

INSERT INTO `tbl_order_details` (`order_details_id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_sales_quantity`, `created_at`, `updated_at`) VALUES
(1, 3, 1, 'Winner V1', '400000000', 1, NULL, NULL),
(2, 4, 7, 'Air Blade', '50000000', 1, NULL, NULL),
(3, 4, 2, 'Wave 110', '25000000', 1, NULL, NULL),
(4, 5, 17, 'Kawasaki ninja 300', '1600000000', 1, NULL, NULL),
(5, 5, 16, 'Honda cbr', '160000000', 1, NULL, NULL),
(6, 6, 7, 'Air Blade', '50000000', 1, NULL, NULL),
(7, 7, 7, 'Air Blade', '50000000', 3, NULL, NULL),
(8, 8, 7, 'Air Blade', '50000000', 3, NULL, NULL),
(9, 9, 7, 'Air Blade', '50000000', 3, NULL, NULL),
(10, 10, 7, 'Air Blade', '50000000', 3, NULL, NULL),
(11, 10, 17, 'Kawasaki ninja 300', '1600000000', 1, NULL, NULL),
(12, 11, 17, 'Kawasaki ninja 300', '1600000000', 1, NULL, NULL),
(13, 11, 2, 'Wave 110', '25000000', 1, NULL, NULL),
(14, 11, 1, 'Winner V1', '400000000', 1, NULL, NULL),
(15, 12, 17, 'Kawasaki ninja 300', '1600000000', 1, NULL, NULL),
(16, 12, 2, 'Wave 110', '25000000', 1, NULL, NULL),
(17, 12, 1, 'Winner V1', '400000000', 1, NULL, NULL),
(18, 13, 2, 'Wave 110', '25000000', 2, NULL, NULL),
(19, 13, 1, 'Winner V1', '400000000', 2, NULL, NULL),
(20, 14, 2, 'Wave 110', '25000000', 3, NULL, NULL),
(21, 14, 1, 'Winner V1', '400000000', 3, NULL, NULL),
(22, 15, 6, 'Sym 125', '29000000', 1, NULL, NULL),
(23, 16, 16, 'Honda cbr', '160000000', 1, NULL, NULL),
(24, 17, 7, 'Air Blade', '50000000', 1, NULL, NULL),
(25, 18, 2, 'Wave 110', '25000000', 4, NULL, NULL),
(26, 19, 2, 'Wave 110', '25000000', 1, NULL, NULL),
(27, 20, 7, 'Air Blade', '50000000', 1, NULL, NULL),
(28, 21, 2, 'Wave 110', '25000000', 1, NULL, NULL),
(30, 23, 2, 'Wave 110', '25000000', 1, NULL, NULL),
(31, 23, 7, 'Air Blade', '50000000', 1, NULL, NULL),
(32, 23, 16, 'Honda cbr', '160000000', 1, NULL, NULL),
(33, 24, 2, 'Wave 110', '25000000', 1, NULL, NULL),
(34, 24, 7, 'Air Blade', '50000000', 1, NULL, NULL),
(35, 24, 16, 'Honda cbr', '160000000', 1, NULL, NULL),
(36, 25, 2, 'Wave 110', '25000000', 1, NULL, NULL),
(37, 25, 7, 'Air Blade', '50000000', 1, NULL, NULL),
(38, 25, 16, 'Honda cbr', '160000000', 1, NULL, NULL),
(39, 26, 16, 'Honda cbr', '160000000', 1, NULL, NULL),
(40, 27, 16, 'Honda cbr', '160000000', 1, NULL, NULL),
(41, 28, 17, 'Kawasaki ninja 300', '1600000000', 1, NULL, NULL),
(42, 29, 16, 'Honda cbr', '160000000', 1, NULL, NULL),
(43, 30, 16, 'Honda cbr', '160000000', 3, NULL, NULL),
(44, 30, 7, 'Air Blade', '50000000', 2, NULL, NULL),
(45, 31, 16, 'Honda cbr', '160000000', 4, NULL, NULL),
(46, 31, 17, 'Kawasaki ninja 300', '1600000000', 5, NULL, NULL),
(47, 32, 16, 'Honda cbr', '160000000', 4, NULL, NULL),
(48, 32, 17, 'Kawasaki ninja 300', '1600000000', 5, NULL, NULL),
(49, 33, 16, 'Honda cbr', '160000000', 4, NULL, NULL),
(50, 33, 17, 'Kawasaki ninja 300', '1600000000', 5, NULL, NULL),
(51, 34, 16, 'Honda cbr', '160000000', 4, NULL, NULL),
(52, 34, 17, 'Kawasaki ninja 300', '1600000000', 5, NULL, NULL),
(53, 35, 2, 'Wave 110', '25000000', 9, NULL, NULL),
(54, 35, 6, 'Sym 125', '29000000', 3, NULL, NULL),
(55, 36, 7, 'Air Blade', '50000000', 1, NULL, NULL),
(56, 36, 16, 'Honda cbr', '160000000', 1, NULL, NULL),
(57, 37, 17, 'Kawasaki ninja 300', '1600000000', 1, NULL, NULL),
(58, 38, 6, 'Sym 125', '29000000', 1, NULL, NULL),
(59, 39, 6, 'Sym 125', '29000000', 1, NULL, NULL),
(60, 40, 6, 'Sym 125', '29000000', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_payment`
--

DROP TABLE IF EXISTS `tbl_payment`;
CREATE TABLE IF NOT EXISTS `tbl_payment` (
  `payment_id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `payment_method` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) CHARACTER SET utf8 NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=41 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_payment`
--

INSERT INTO `tbl_payment` (`payment_id`, `payment_method`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, '1', 'Chấp nhận thanh toán', NULL, NULL),
(2, '2', 'Dang cho xu ly', NULL, NULL),
(3, '3', 'Dang cho xu ly', NULL, NULL),
(4, '1', 'Dang cho xu ly', NULL, NULL),
(5, '1', 'Dang cho xu ly', NULL, NULL),
(6, '2', 'Dang cho xu ly', NULL, NULL),
(7, '2', 'Dang cho xu ly', NULL, NULL),
(8, '2', 'Dang cho xu ly', NULL, NULL),
(9, '2', 'Dang cho xu ly', NULL, NULL),
(10, '2', 'Chấp nhận thanh toán', NULL, NULL),
(11, '2', 'Dang cho xu ly', NULL, NULL),
(12, '2', 'Dang cho xu ly', NULL, NULL),
(13, '2', 'Dang cho xu ly', NULL, NULL),
(14, '2', 'Chấp nhận thanh toán', NULL, NULL),
(15, '2', 'Dang cho xu ly', NULL, NULL),
(16, '2', 'Dang cho xu ly', NULL, NULL),
(17, '2', 'Dang cho xu ly', NULL, NULL),
(18, '2', 'Dang cho xu ly', NULL, NULL),
(19, '2', 'Dang cho xu ly', NULL, NULL),
(20, '2', 'Dang cho xu ly', NULL, NULL),
(21, '2', 'Dang cho xu ly', NULL, NULL),
(23, '3', 'Dang cho xu ly', NULL, NULL),
(24, '3', 'Dang cho xu ly', NULL, NULL),
(25, '2', 'Từ chối thanh toán', NULL, NULL),
(26, '2', 'Dang cho xu ly', NULL, NULL),
(27, '2', 'Dang cho xu ly', NULL, NULL),
(28, '2', 'Dang cho xu ly', NULL, NULL),
(29, '2', 'Từ chối thanh toán', NULL, NULL),
(30, '2', 'Chấp nhận thanh toán', NULL, NULL),
(31, '1', 'Đang chờ xử lý', NULL, NULL),
(32, '3', 'Đang chờ xử lý', NULL, NULL),
(33, '1', 'Từ chối thanh toán', NULL, NULL),
(34, '2', 'Chấp nhận thanh toán', NULL, NULL),
(35, '2', 'Đang chờ xử lý', NULL, NULL),
(36, '2', 'Đang chờ xử lý', NULL, NULL),
(37, '2', 'Đang chờ xử lý', NULL, NULL),
(38, '1', 'Đang chờ xử lý', NULL, NULL),
(39, '2', 'Đang chờ xử lý', NULL, NULL),
(40, '3', 'Đang chờ xử lý', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_products`
--

DROP TABLE IF EXISTS `tbl_products`;
CREATE TABLE IF NOT EXISTS `tbl_products` (
  `product_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` int(255) NOT NULL,
  `product_image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=MyISAM AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_products`
--

INSERT INTO `tbl_products` (`product_id`, `category_id`, `product_name`, `product_desc`, `product_price`, `product_image`, `product_status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Winner V1', 'Về kích thước, Honda Winner 150 có các thông số dài x rộng x cao lần lượt là 2.025 x 725 x 1.102 mm, chiều cao yên đạt 780 mm. Trong đó, khoảng sáng gầm xe 167 mm, cao hơn Exciter 150 32 mm là một điểm lợi thế giúp xe không bị cạ gầm và vượt địa hình tốt hơn. Song, chiều cao yên xe so với mặt đất là 780 mm lại gây khó khăn cho những người có chiều cao khiêm tốn trong việc chống chân.', 400000000, '470.jfif', 1, NULL, NULL),
(2, 2, 'Wave 110', 'xe may wave', 25000000, '615.jpg', 1, NULL, NULL),
(7, 2, 'Air Blade', 'xe may air blade', 50000000, '445.jpg', 1, NULL, NULL),
(6, 4, 'Sym 125', 'xe may sym', 29000000, '391.jpg', 1, NULL, NULL),
(17, 3, 'Kawasaki ninja 300', 'Kawasaki Ninja 300 phiên bản ABS được xem là kẻ dẫn đầu trong phân khúc xe mô tô hạng nhỏ bởi cả 2 yếu tố sức mạnh lẫn ngoại hình. Xe được trang bị động cơ xy-lanh kép 296cc cho công suất 39 mã lực và 27 Nm momen xoắn. Đối thủ trực tiếp của Ninja 300 là HondaCBR300R tuy cũng mới được ra mắt cách đây không lâu nhưng lại thua kém về mặt công suất tới gần 10 mã lực và chỉ sử dụng xy-lanh đơn. Giá xe Kawasaki Ninja 300 phiên bản có ABS đời 2013 là 5.499 USD, bản không có ABS là 4.799 USD. Còn giá của CBR300R tuy chưa được công bố nhưng chắc chắn sẽ thấp hơn mức giá này.', 1600000000, '741.png', 1, NULL, NULL),
(16, 2, 'Honda cbr', 'Honda CBR xe may the thao 2022', 160000000, '87.png', 1, NULL, NULL),
(19, 6, 'BMW S1000RR', 'BMW S1000RR 2020 | Giá xe S1000RR | Xe Mô tô BMW S1000RR mới nhất hôm nay 2020\r\n\r\nBMW S1000RR mẫu superbike đầy sức mạnh đến từ hãng xe Đức, với thiết kế thể thao, hầm hố với nhiều góc cạnh, sau nhiều năm BMW S1000RR 2020 nay đã được nâng cấp toàn diện với việc trang bị khối động cơ mạnh mẽ với công suất cực đại 207 mã lực hoàn toàn mới, hệ thống treo cùng thiết kế ngắn gọn và nhẹ hơn so với phiên bản tiền nhiệm. \r\n\r\nTại Việt Nam S1000RR 2020 được phân phối chính hãng bởi BMW Motorrad với 2 phiên bản cùng giá bán là 949 triệu đồng cho phiên bản BMW S1000RR Race và giá bán 1,099 tỷ đồng cho phiên bản BMW S1000RR M Performance, với chế độ bảo hành 3 năm không giới hạn số km.', 999000000, '698.webp', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_sendmessage`
--

DROP TABLE IF EXISTS `tbl_sendmessage`;
CREATE TABLE IF NOT EXISTS `tbl_sendmessage` (
  `message_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `message_content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_sendmessage`
--

INSERT INTO `tbl_sendmessage` (`message_id`, `message_content`, `created_at`, `updated_at`) VALUES
(1, 'shop uy tín, trả lời tin nhắn nhanh :)', NULL, NULL),
(2, 'shop lừa đảo làm ăn thất đức', NULL, NULL),
(3, 'omg xe re qua', NULL, NULL),
(4, 'Mình mua 200 chiếc xe ở đây rồi, rất oke', NULL, NULL),
(5, 'Shop này chủ shop đẹp trai lắm', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbl_shipping`
--

DROP TABLE IF EXISTS `tbl_shipping`;
CREATE TABLE IF NOT EXISTS `tbl_shipping` (
  `shipping_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `shipping_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipping_notes` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`shipping_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tbl_shipping`
--

INSERT INTO `tbl_shipping` (`shipping_id`, `shipping_name`, `shipping_address`, `shipping_phone`, `shipping_email`, `shipping_notes`, `created_at`, `updated_at`) VALUES
(1, 'minh le', 'cdc8773b0f1541ecfdbb5465a66f184d', '0909472846', 'minhle99@gmail.com', 'ko co', NULL, NULL),
(2, 'minh le le', '72e2aa9cb4d4f78f71824fd41e8cc13d', '984324523', 'minhle1991@gmail.com', 'ghi cai gi', NULL, NULL),
(3, 'minh le42342', 'eaf67f723b7bd3dc34a309f28e70bcb5', '252424', 'dads@gmail.com', '24242424', NULL, NULL),
(4, 'alo ola', 'aa1ec43f2eb5ea78b33ea04d56e1c7d4', 'fsafegasf', 'dsadadad@gmail.com', 'fasfas', NULL, NULL),
(5, 'em gai minh', 'fa40e14ae356eddaefcb3159c643e77d', '953845292', 'minhle99@gmail.com', 'dat hang cho em gai', NULL, NULL),
(6, '423432424', '4a06d868d044c50af0cf9bc82d2fc19f', '24242', 'dsda@gmail.com', '4242', NULL, NULL),
(7, 'ko co gi', 'd40eeb18c434b3124d5191cd42a12937', 'ko co', 'kocogi@gmail.com', 'ko', NULL, NULL),
(8, 'le nhat minh', '72e2aa9cb4d4f78f71824fd41e8cc13d', '0909472846', 'minhle99@gmail.com', 'khong co', NULL, NULL),
(9, 'gdgggdfd', '6346840dc6d39489588f6cb30164f051', 'd436436346', 'dsfsfsds@gmail.com', '45433', NULL, NULL),
(10, 'fjdsk', '8b8db13c3882abc6f99db22ea799400d', '9543803', 'jgdhfik@gmail.com', 'lgfdd', NULL, NULL),
(11, 'jfs', '0419278a05944778f4d231553fe0f1ed', '9583', 'idfks@gmail.com', 'kdf', NULL, NULL),
(12, 'olfdjsflsj', 'a7da243f84029dc25715f2c3619d83f1', '0438', 'ksdn@gmail.com', 'lfkds', NULL, NULL),
(13, 'kfsjjf', 'b47adeb9f9e3ab77c881761a5bc9d167', '9438', 'dsad@gmail.com', 'kjdflfss', NULL, NULL),
(14, 'gks', '1d40d824ce913091e36a5e8cef309615', '9453', '654@gmail.com', 'kds', NULL, NULL),
(15, 'jfds', 'cfaa160b67c70d5a637d22128726e59c', '934', 'd2@gmail.com', 'jfd', NULL, NULL),
(16, 'nguyen van loi', 'e8caea2e9a64776c077c4cd6614f70c0', '94538598402', 'vanloi@gmail.com', 'ké', NULL, NULL),
(17, 'kìds', 'b849daa0b72fc59ea24879c0b6764680', '45748634', 'dsadsado@Gmail.com', 'fsdfdsfs', NULL, NULL),
(18, 'phuc du', '0386dd01e47c5de4a1711684d3f13f23', '09483', 'phucdu@gmail.com', 'ofds', NULL, NULL),
(19, 'jrweioo3924urf', '2f0a9fc0a16c58e2ad55f45960bde160', 'kfdsio34t', 'das@gmail.com', 'opfjepsd', NULL, NULL),
(20, 'kfjidls', '228caf5b9cb0cf491a0eab2ccbd9e201', 'fjdso', 'fdsgsg@gmail.com', 'fnlsd', NULL, NULL),
(21, 'le minh hoai an', '72e2aa9cb4d4f78f71824fd41e8cc13d', '9348593', 'emgai@gmail.com', '95043dvs', NULL, NULL),
(22, 'kfjdsk', '9ef841f33be102a2bbe6649e32f563c5', 'kfkjdsfskh', 'kobkiet@gmail.com', 'hjkgdf', NULL, NULL),
(23, 'fkds', 'a2648bfa8a941b6fdccb599f383cb711', 'kgdfsjkdshfkdshskj', 'kfsdjflk@gmail.com', 'kgds', NULL, NULL),
(24, 'kfnds', '6472581a4b8b0f3f88a0a8900922dc68', 'klflkdsjkl', 'đasa@gmail.com', 'dsfl', NULL, NULL),
(25, 'le van test', 'fb31e7154466ac752ccc994b8ff3840d', '9825901', 'alo@gmail.com', '908534io', NULL, NULL),
(26, 'nksak', 'd00e7f464ab0a60e7cfcbe5099f951f8', '309', 'test2@gmail.com', 'kfds', NULL, NULL),
(27, 'le ifaj', '30641a0e1124793900891714aa31a795', '9043585', 'test123@gmail.com', 'kijgfd', NULL, NULL),
(28, 'rjeorwihhg`gdhgd', '0f66665fbf151db3b183ef88a0a42550', '9875981kjgfdkg', 'test234@gmail.com', 'jkfkfs', NULL, NULL),
(29, 'alo', '0b983d6ea81a80c6479f437af29af1bd', '5438', 'kobiet@gmail.com', 'idfshiofs', NULL, NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
