-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 09, 2025 at 10:56 AM
-- Server version: 9.1.0
-- PHP Version: 8.3.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecomm`
--

-- --------------------------------------------------------

--
-- Table structure for table `about_tbl`
--

DROP TABLE IF EXISTS `about_tbl`;
CREATE TABLE IF NOT EXISTS `about_tbl` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `description_1` varchar(255) NOT NULL,
  `description_2` varchar(255) NOT NULL,
  `description_3` varchar(255) NOT NULL,
  `description_4` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about_tbl`
--

INSERT INTO `about_tbl` (`id`, `title`, `description`, `description_1`, `description_2`, `description_3`, `description_4`, `image`, `created_at`, `updated_at`) VALUES
(2, 'Why Choose Us', 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.', 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.', 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.', 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.', 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.', 'images/MIKwH0d7d7uBUrwkJtYKk2RwZJCl9sdepNjFnTX4.jpg', '2025-01-07 04:54:36', '2025-01-07 04:54:36');

-- --------------------------------------------------------

--
-- Table structure for table `about_tbl_2`
--

DROP TABLE IF EXISTS `about_tbl_2`;
CREATE TABLE IF NOT EXISTS `about_tbl_2` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `about_tbl_2`
--

INSERT INTO `about_tbl_2` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(4, 'images/Wr8nqZbbmdKdKuyWbN8v1OZ12vWjAoVXvhSmu6fF.jpg', 'Jeremy Walker', 'Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', '2025-01-08 06:21:16', '2025-01-08 06:21:16'),
(3, 'images/of5MfIHGa14J9ctQeyd3gySNtTAIs1oMoyPxlisj.jpg', 'Lawson Arnold', 'Separated they live in.             Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean', '2025-01-07 12:29:43', '2025-01-07 12:29:43'),
(5, 'images/rnYvwbN0J5Lzm1zVamu1mmw4kX0gHNrBV3wY48eS.jpg', 'Patrik White', 'Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean', '2025-01-08 06:26:44', '2025-01-08 06:26:44'),
(6, 'images/aBHAxshCgxrn5X053IZK7rQGkUtcvUUVoXxPinSC.jpg', 'Kathryn Ryan', 'Separated they live in. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.', '2025-01-08 06:27:30', '2025-01-08 06:27:30');

-- --------------------------------------------------------

--
-- Table structure for table `blog`
--

DROP TABLE IF EXISTS `blog`;
CREATE TABLE IF NOT EXISTS `blog` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `blog`
--

INSERT INTO `blog` (`id`, `image`, `description`, `created_at`, `updated_at`) VALUES
(3, 'images/muJ7EqIsMXSaoWCbNAHzhlDX22i4GKXQEjMUT9fo.jpg', 'How To Keep Your Furniture Clean by Robert Fox on Dec 15, 2021', '2025-01-08 11:19:09', '2025-01-08 11:19:09'),
(4, 'images/05AOSTNFjcng3N5Qfp2vgr9qDKk8trNH7PZUNUZi.jpg', 'Small Space Furniture Apartment Ideas by Kristin Watson on Dec 12, 2021', '2025-01-08 11:19:22', '2025-01-08 11:19:22'),
(5, 'images/UOxgNqq7AI3NTtUf6RJoWxIlBfzkFMvm2MBuUmiu.jpg', 'First Time Home Owner Ideas by Kristin Watson on Dec 19, 2021', '2025-01-08 11:19:32', '2025-01-08 11:19:32'),
(6, 'images/dJCaPnjeQv1byrMFHz4uwhcD6RbzLdX4mGXhz0t6.jpg', 'How To Keep Your Furniture Clean by Robert Fox on Dec 15, 2021', '2025-01-08 11:19:56', '2025-01-08 11:19:56'),
(9, 'images/HTnnxGgbdQRkm2I8JFhnqiVViUAJJlj4QMdeOElR.jpg', 'How To Keep Your Furniture Clean by Robert Fox on Dec 15, 2021', '2025-01-08 11:20:36', '2025-01-08 11:20:36'),
(10, 'images/42iTUleMZh3Jby0Ak8At9a7kvFcJErVEZQMQ83uF.jpg', 'Small Space Furniture Apartment Ideas by Kristin Watson on Dec 12, 2021', '2025-01-08 11:21:07', '2025-01-08 11:21:07'),
(12, 'uploads_4/J0xW5oMkMWqwdNHnQFK2aygxwy52kVDrKz5HfQBx.jpg', 'Small Space Furniture Apartment Ideas by Kristin Watson on Dec 12, 2021', '2025-01-08 11:38:38', '2025-01-08 11:38:38'),
(13, 'images/VAPMAu1Qtd33Ffd5hYEsktwzNvJ7uhJz7gzI70c0.jpg', 'First Time Home Owner Ideas by Kristin Watson on Dec 19, 2021', '2025-01-08 11:39:43', '2025-01-08 11:39:43'),
(11, 'images/clXerFWMz9Iu7EjGbykMQFarZzvFJUcbLTuLwUf2.jpg', 'How To Keep Your Furniture Clean by Robert Fox on Dec 15, 2021', '2025-01-08 11:38:14', '2025-01-08 11:38:14');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

DROP TABLE IF EXISTS `cart`;
CREATE TABLE IF NOT EXISTS `cart` (
  `id` bigint NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `contact_msg`
--

DROP TABLE IF EXISTS `contact_msg`;
CREATE TABLE IF NOT EXISTS `contact_msg` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `l_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `messge` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_msg`
--

INSERT INTO `contact_msg` (`id`, `name`, `l_name`, `email`, `messge`, `created_at`, `updated_at`) VALUES
(5, 'kadiwala', 'eryiyriwrrtrt', 'kadi@gmail.com', 'tretrt', '2025-01-09 10:11:33', '2025-01-09 10:11:33'),
(2, 'kadiwala', 'eryiyriwrrtretrt', 'kadi@gmail.com', 'TTTRTRSTRDR Dfd dttdtstrststrsrsr s', '2025-01-09 08:22:40', '2025-01-09 08:22:40'),
(3, 'kadiwala', 'eryiyriwr', 'kadi@gmail.com', 'errerrtetrtrtrt', '2025-01-09 08:22:57', '2025-01-09 08:22:57'),
(6, 'kadiwala', 'eryiyriwr', 'kadi@gmail.com', 'tytete', '2025-01-09 10:13:19', '2025-01-09 10:13:19'),
(7, 'kadiwala', 'eryiyriwr', 'kadi@gmail.com', 'errwrwer', '2025-01-09 10:27:28', '2025-01-09 10:27:28');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tbl`
--

DROP TABLE IF EXISTS `contact_tbl`;
CREATE TABLE IF NOT EXISTS `contact_tbl` (
  `id` int NOT NULL AUTO_INCREMENT,
  `location` varchar(255) NOT NULL,
  `gmail` varchar(255) NOT NULL,
  `number` varchar(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `contact_tbl`
--

INSERT INTO `contact_tbl` (`id`, `location`, `gmail`, `number`, `created_at`, `updated_at`) VALUES
(3, 'Sidhpur Tavdiya chokadi 384151', 'mahammad@gmail.com', '9954239810', '2025-01-09 06:23:27', '2025-01-09 06:23:27');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

DROP TABLE IF EXISTS `footer`;
CREATE TABLE IF NOT EXISTS `footer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `image`, `created_at`, `updated_at`) VALUES
(3, 'images/kYg2VlCSbm7RR6rls0ggeSHSTDDAmBnh2gWwWGyo.png', '2025-01-07 08:11:46', '2025-01-07 08:11:46');

-- --------------------------------------------------------

--
-- Table structure for table `hedaer`
--

DROP TABLE IF EXISTS `hedaer`;
CREATE TABLE IF NOT EXISTS `hedaer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `hedaer`
--

INSERT INTO `hedaer` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(3, 'Modern Interior Design Studio', 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.', 'images/cvJkSWpT3VbwMxlSSuXCNwAT2WcVzgIAYB3jNKBO.png', '2025-01-07 12:21:36', '2025-01-07 12:21:36');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
CREATE TABLE IF NOT EXISTS `login` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`) VALUES
(1, 'kadiwala', 'kadi@gmail.com', '$2y$12$tSFpJJSmv68Io9RMz4ZZqeJb9FsCUQ2IrIm9n2rnhQUMBZRCMdtsu');

-- --------------------------------------------------------

--
-- Table structure for table `modern`
--

DROP TABLE IF EXISTS `modern`;
CREATE TABLE IF NOT EXISTS `modern` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `image_2` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `modern`
--

INSERT INTO `modern` (`id`, `image`, `image_1`, `image_2`, `title`, `description`, `created_at`, `updated_at`) VALUES
(5, 'images/qw8Sr3dryAjFl5REfZjsHgkOl5D1mXHy1U2RAX8B.jpg', 'images/GAQmOOljVR1ZBUImwK7tLk4C7XzRO1D3bWNdJDSY.jpg', 'images/mu9xYyqMZdiIxP9YWIHb2eUlhLVzzuIU6ptJS3EM.jpg', 'We Help You Make Modern Interior Design', 'Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique. Pellentesque habitant morbi tristique senectus et netus et malesuada', '2025-01-07 11:23:46', '2025-01-07 11:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `id` int NOT NULL AUTO_INCREMENT,
  `product_id` int NOT NULL,
  `user_id` int NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `c_fname` varchar(255) NOT NULL,
  `c_lname` varchar(255) NOT NULL,
  `c_companyname` varchar(255) NOT NULL,
  `c_address` varchar(255) NOT NULL,
  `c_state_country` varchar(255) NOT NULL,
  `c_postal_zip` varchar(10) NOT NULL,
  `c_email_address` varchar(255) NOT NULL,
  `c_phone` varchar(13) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `payment_method`, `c_fname`, `c_lname`, `c_companyname`, `c_address`, `c_state_country`, `c_postal_zip`, `c_email_address`, `c_phone`, `created_at`, `updated_at`) VALUES
(8, 9, 1, 'cash', 'mahammad', 'kadiwala', 'hkdkhfkf', 'sidhpur tavdiya chokdi', 'gfdgfjugfd', '535355', 'ma@gmail.com', '54354454545', '2025-01-09 08:28:33', '2025-01-09 08:28:33'),
(9, 9, 1, 'cash', 'mahammad', 'ueruru', 'hkdkhfkf', 'sidhpur tavdiya chokdi', 'gujarat', '384151', 'ma@gmail.com', '54354454545', '2025-01-09 08:30:48', '2025-01-09 08:30:48'),
(10, 8, 1, 'cash', 'mahammad', 'kadiwalarr', 'egefjegfe', 'sidhpur tavdiya chokdi', 'gfdgfjugfd', '535355', 'ma@gmail.com', '7465666879', '2025-01-09 08:36:51', '2025-01-09 08:36:51'),
(6, 9, 1, 'cash', 'mahammad', 'kadiwala aba', 'hkdkhfkftrtt', 'sidhpur tavdiya chokdi', 'gujarat', '384151', 'ma@gmail.com', '54354454545', '2025-01-08 09:31:22', '2025-01-08 09:31:22'),
(7, 9, 1, 'cash', 'mahammad', 'kadiwala', 'hkdkhfkf', 'sidhpur tavdiya chokdi', 'gujarat', '384151', 'ma@gmail.com', '54354454545', '2025-01-08 09:31:22', '2025-01-08 09:31:22'),
(11, 16, 1, 'cash', 'mahammad', 'kadiwala', 'hkdkhfkf', 'sidhpur tavdiya chokdi', 'gujarat', '384265', 'ma@gmail.com', '3232323232323', '2025-01-09 10:45:14', '2025-01-09 10:45:14');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `u_id` int NOT NULL AUTO_INCREMENT,
  `f_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`u_id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`u_id`, `f_name`, `price`, `image_1`, `created_at`, `updated_at`) VALUES
(10, 'Kurzo Aero Chair', '3000', 'uploads/JOhXhlKkA8RMhdaHT4GRGoFZMLo9vNM1k17y69Ih.png', '2025-01-07 05:31:23', '2025-01-07 05:31:23'),
(8, 'Nordic Chair', '4000', 'images/8rFixwBQ9h398zMnzFdHRxdZDLutyJFlZ2YrJSEp.png', '2025-01-06 07:02:02', '2025-01-06 07:02:02'),
(9, 'Nordic Chair', '4000', 'images/cPz3yjVMGNp9LI2tekGDgqxqgY8xSYBcfyGzRwP8.png', '2025-01-06 08:19:10', '2025-01-06 08:19:10'),
(12, 'Chair', '2000', 'images/AbcIjWzPpeiocmSeCPanaBJCLhvdxVGrEG5RGfUD.png', '2025-01-08 12:38:09', '2025-01-08 12:38:09'),
(13, 'Chair', '2500', 'images/3A8vztMb52tkpHK74rpqLeqOIddHfUdSbbxt7096.png', '2025-01-08 12:38:26', '2025-01-08 12:38:26'),
(15, 'Chair', '2300', 'uploads/4WngrrSJj30zb8VX3T8vUd6VJa6xCyR0UpeXmayv.png', '2025-01-09 04:48:44', '2025-01-09 04:48:44'),
(16, 'Chair', '2100', 'uploads/o2RtcVL37BgpvP6LVDA0HgTmthieNzOlT8z62y8o.png', '2025-01-09 04:51:07', '2025-01-09 04:51:07'),
(17, 'Chair', '2650', 'uploads/3Kd9IlYUKHWJLbJZfh65Nu7q7i4c7ljeiSMopmfg.png', '2025-01-09 04:51:41', '2025-01-09 04:51:41');

-- --------------------------------------------------------

--
-- Table structure for table `reveuse`
--

DROP TABLE IF EXISTS `reveuse`;
CREATE TABLE IF NOT EXISTS `reveuse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `reveuse`
--

INSERT INTO `reveuse` (`id`, `title`, `description`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Testimonials', 'Donec facilisis quam ut purus rutrum lobortis. Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate velit imperdiet dolor tempor tristique.', 'images/SrE2GW0eprKNpaU1uAqfn9pG77sNioP3seYHBTeK.jpg', '2025-01-08 04:23:47', '2025-01-08 04:23:47');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

DROP TABLE IF EXISTS `service`;
CREATE TABLE IF NOT EXISTS `service` (
  `id` int NOT NULL AUTO_INCREMENT,
  `image` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `image`, `title`, `description`, `created_at`, `updated_at`) VALUES
(1, 'images/0H20m1jwXb0cR5r1fO764MsG63cPLbHWQbeJOFts.svg', 'Fast & Free Shipping', 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.', '2025-01-07 06:42:47', '2025-01-07 06:42:47'),
(4, 'uploads_3/ufCjOKoBdL7T9VbO9SlqLiartLEPOxx5xr2a5hs6.svg', 'Easy to Shop', 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.', '2025-01-08 07:25:14', '2025-01-08 07:25:14'),
(5, 'uploads_3/VoYZeWAt9en8YITA6KtuKp8rX9bAuuK7939DnBbL.svg', '24/7 Support', 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.', '2025-01-08 07:26:01', '2025-01-08 07:26:01'),
(6, 'uploads_3/fasUGxuyIXctCsN8Kdsqu50oHthf23Xx0r4xKV07.svg', 'Hassle Free Returns', 'Donec vitae odio quis nisl dapibus malesuada. Nullam ac aliquet velit. Aliquam vulputate.', '2025-01-08 07:26:17', '2025-01-08 07:26:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `number` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `password`) VALUES
(1, 'kadiwala', '4543454355', 'kadi@gmail.com', '$2y$12$uaKF0VBDV82sB0fIu9mPT.eb..e.8DP4ISU.yqOKmfSBN.trNlAhm');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
