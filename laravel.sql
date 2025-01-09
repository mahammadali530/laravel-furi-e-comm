-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2025 at 07:16 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` bigint(20) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'mahammad', 'ma@gmail.com', '$2y$12$DyIsuceGJys4uuHEM1WN0.Ox2d/sBrGL9ZQ29K5en2Vt3Nz3IExfi', '2024-12-30', '2024-12-30'),
(4, 'hasanali', 'hasan@gmail.com', '$2y$12$uYa62XqoCj7gDpLvkuH6q.MXh889ptxCBkX4hh4kTXeCyLoSWaKC2', '2025-01-02', '2025-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `payment_method` varchar(255) NOT NULL,
  `payment_status` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pincode` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `product_id`, `user_id`, `status`, `payment_method`, `payment_status`, `name`, `number`, `address`, `pincode`, `created_at`, `updated_at`) VALUES
(24, 19, 1, 'pending', 'cash', 'pending', 'Mahammadali Kadiwala', '4343253534', 'Sidhhpur', '384265', '2025-01-01', '2025-01-01'),
(25, 19, 4, 'pending', 'cash', 'pending', 'Mahammadali Kadiwala', '9499867540', 'ahemdabad kalupur welcome hotal', '384265', '2025-01-02', '2025-01-02');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `u_id` int(11) NOT NULL,
  `f_name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image_1` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`u_id`, `f_name`, `price`, `image_1`, `description`, `created_at`, `updated_at`) VALUES
(17, 'U.s.Polo Canvas Shoes', '1500', 'images/GlvIc9Lozx6hZJdHURNlYlPZilvRGDtQoWdD4dFZ.jpg', 'best product', '2024-12-28', '2024-12-28'),
(18, 'U.s.Polo  Shoes', '1200', 'images/YmKxQo7YqThKXgWFSrRgvg0bOrQJeM5EtmSQNLe3.jpg', 'best product', '2024-12-28', '2024-12-28'),
(19, 'iphone', '40000', 'uploads/lfns2yLAZovtncIlyoP3gylAQLsU2ztIKLjBG7Fk.webp', 'best products', '2024-12-28', '2024-12-28'),
(20, 'iphone', '50000', 'uploads/tjjpZf3eTQ4mMZUunWoncP1vrUb3f4eiE4gt060m.webp', 'best products', '2024-12-28', '2024-12-28'),
(21, 'iphone', '30000', 'uploads/lDkQDsaWjpNNFszqnClwGcj2EqlBfHIc5yVL4fAk.webp', 'best products', '2024-12-28', '2024-12-28'),
(22, 'iphone', '30000', 'uploads/wyvoMLQJcIFNd3KQnWLRusnVFqdDF9L6oo8NiT1R.webp', 'best products', '2024-12-28', '2024-12-28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(13) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `number`, `email`, `password`) VALUES
(1, 'Mahammadali Kadiwala', '9316471634', 'hasan@gmail.com', '12345678'),
(2, 'hasanali', '9876543211', 'ma@gmail.com', '$2y$12$DyIsuceGJys4uuHEM1WN0.Ox2d/sBrGL9ZQ29K5en2Vt3Nz3IExfi'),
(3, 'Mahammadali Kadiwala', '9499867540', 'hasn@gmail.com', '$2y$12$o.dCiZrX4MaUhwTAeZs1kuuYRCUFLB0Doq2Kc63AqlCeqQ4c45wVu'),
(4, 'Mahammadali Kadiwala', '9499867540', 'hasn@gmail.com', '$2y$12$1aJ8njQpV9pqMJh.iER8xuUA3WuJ5CsjSNzWv76A/uBcOChwcAoeW'),
(5, 'Ingrid Willis', '1234567890', 'bipuqeveke@mailinator.com', '$2y$12$hNYfOSuyk6fI71M33NDvIeu4F8LuyOLbAkWg7ihr23eX475q5j3VS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`u_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
