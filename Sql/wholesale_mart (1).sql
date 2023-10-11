-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Oct 11, 2023 at 05:05 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wholesale_mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `cart_item_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `order_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `full_name` varchar(256) NOT NULL,
  `address` varchar(256) NOT NULL,
  `payment_method` varchar(256) NOT NULL,
  `note` varchar(256) NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Pending','Processing','Shipped','Delivered','Cancelled') NOT NULL,
  `total_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`order_id`, `user_id`, `dealer_id`, `full_name`, `address`, `payment_method`, `note`, `order_date`, `status`, `total_amount`) VALUES
(38, 24, 23, 'Saugat Poudel', 'Pokhara', 'cash', 'Pokhara', '2023-10-10 04:06:47', 'Delivered', 1200000.00);

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `order_item_id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `order_items`
--

INSERT INTO `order_items` (`order_item_id`, `order_id`, `product_id`, `dealer_id`, `quantity`, `price`) VALUES
(54, 38, 58, 23, 10, 120000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_description` text NOT NULL,
  `stock` int(100) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `product_image` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_description`, `stock`, `status`, `created`, `product_image`, `price`, `dealer_id`) VALUES
(58, 'I phone 15', 'Apple iPhone 15 is based on iOS 17 and packs 128GB, 256GB, 512GB of inbuilt storage. The Apple iPhone 15 is a dual-SIM (GSM and GSM) mobile that accepts Nano-SIM and Nano-SIM cards. The Apple iPhone 15 measures 147.60 x 71.60 x 7.80mm (height x width x thickness) and weighs 171.00 grams.', 90, 1, '2023-10-10 08:20:07', '6524b85bb2752.webp', 120000, 23),
(59, 'Apple Watch', 'The Apple Watch is a line of smartwatches produced by Apple Inc. It incorporates fitness tracking, health-oriented capabilities, and wireless telecommunication, and integrates with iOS and other Apple products and services.', 50, 1, '2023-10-10 08:21:24', '6524b8a8e3327.jpeg', 50000, 23),
(60, 'Bottles', 'Bottle, narrow-necked, rigid or semirigid container that is primarily used to hold liquids and semiliquids. It usually has a close-fitting stopper or cap to protect the contents from spills, evaporation, or contact with foreign substances.', 200, 1, '2023-10-10 08:24:54', '6524b97a67f1a.jpg', 300, 25),
(61, 'Headphone', 'Headphones are a pair of padded speakers which you wear over your ears in order to listen to a radio or recorded music, or for using a phone without other people hearing it.', 200, 1, '2023-10-10 08:26:27', '6524b9d7968ee.jpeg', 700, 25),
(62, 'Camera', 'A camera is a piece of equipment that is used for taking photographs, making films, or producing television pictures. Many cameras are now included as part of other digital devices such as phones and tablets.', 100, 1, '2023-10-10 08:28:52', '6524ba686dcc7.jpg', 300000, 23);

-- --------------------------------------------------------

--
-- Table structure for table `requested_price`
--

CREATE TABLE `requested_price` (
  `id` int(11) NOT NULL,
  `dealer_id` int(11) NOT NULL,
  `retailer_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `created` datetime DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `requested_price`
--

INSERT INTO `requested_price` (`id`, `dealer_id`, `retailer_id`, `status`, `created`) VALUES
(39, 23, 24, 1, '2023-10-10 07:29:05');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `f_name` varchar(50) NOT NULL,
  `l_name` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `acc_type` varchar(10) NOT NULL,
  `address` varchar(50) NOT NULL,
  `store_name` varchar(50) NOT NULL,
  `image` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `f_name`, `l_name`, `email`, `phone_no`, `password`, `acc_type`, `address`, `store_name`, `image`, `active`, `created_at`) VALUES
(23, 'Bishal', 'Shrestha', 'bishalshrestha133@gmail.com', '9815100588', '1adb27fabdfee91e29a94e3fb02e08bc', 'Dealer', 'Syangja', 'Kamala Stores', '6524a831f2ee3.jpg', 1, '2023-10-10 07:11:09'),
(24, 'Saugat', 'Poudel', 'saugat@gmail.com', '9848259239', '4b6ed35f0ebe7e6348e718fc44b65738', 'Retailer', 'Pokhara', 'Saugat Store', '6524aa0715444.jpg', 1, '2023-10-10 07:18:59'),
(25, 'Success', 'Chhantyal', 'success@gmail.com', '9876543210', '260ca9dd8a4577fc00b7bd5810298076', 'Dealer', 'Pokhara', 'Success Stores', '6524b91e3a1eb.png', 1, '2023-10-10 08:23:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD PRIMARY KEY (`cart_item_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `fk_cart_items_product` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`order_item_id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `fk_order_items_product` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `requested_price`
--
ALTER TABLE `requested_price`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_items`
--
ALTER TABLE `cart_items`
  MODIFY `cart_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `order_item_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `requested_price`
--
ALTER TABLE `requested_price`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`),
  ADD CONSTRAINT `fk_cart_items_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `fk_order_items_product` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `orders` (`order_id`),
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
