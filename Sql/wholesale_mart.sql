-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 22, 2023 at 05:12 AM
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
-- Database: `wholesale_mart`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `product_name` varchar(20) NOT NULL,
  `product_description` varchar(255) NOT NULL,
  `stock` int(100) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `date_ordered` datetime NOT NULL DEFAULT current_timestamp(),
  `product_image` varchar(255) NOT NULL,
  `dealer_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `product_name`, `product_description`, `stock`, `status`, `date_ordered`, `product_image`, `dealer_id`) VALUES
(1, 'Rice', 'Rice is good for health.', 12, 0, '2023-07-18 00:44:38', '350367612_560806862892360_4696717241699965047_n.jpg', 1),
(3, 'Mobile', 'Smartphone Series', 100, 1, '2023-07-18 20:47:03', 'wholesale-mart-logo.png', 1),
(5, 'Book', 'Book Description belongs to here', 200, 0, '2023-07-18 21:13:36', 'wp2234539-coding-wallpapers.jpg', 1),
(7, 'Berk Cole', 'Inventore expedita s', 280, 1, '2023-07-18 21:48:34', '', 1),
(8, 'Mary Hendrix', 'Distinctio Aliquid ', 432, 1, '2023-07-18 21:48:44', '', 1),
(9, 'Quemby Sampson', 'Itaque ut obcaecati ', 252, 1, '2023-07-18 21:48:50', '', 1),
(10, 'Nerea Castro', 'Suscipit necessitati', 249, 0, '2023-07-18 21:48:55', '', 1),
(11, 'Austin Campos', 'Nihil deleniti do et', 737, 1, '2023-07-18 21:49:01', '', 1),
(12, 'Yardley Jarvis', 'Dolor voluptatem Qu', 146, 0, '2023-07-18 22:42:09', '', 1),
(13, 'Phoebe Newton', 'Totam itaque cupidat', 186, 0, '2023-07-18 22:42:18', '', 1),
(14, 'Warren Schwartz', 'Labore exercitatione', 198, 1, '2023-07-19 07:31:07', '', 1);

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
(2, 'Eaton Jimenez', 'Deborah Lambert', 'nucyx@mailinator.com', '9815100588', 'f3ed11bbdb94fd9ebdefbaf646ab94d3', 'Retailer', 'Non officia quo mole', 'Jenna Melton', '354754407_278541934592342_8113638702573633599_n.jpg', 1, '2023-07-17 22:53:48'),
(4, 'Bishal', 'Shrestha', 'playerboy478@gmail.com', '9815100588', '5f4dcc3b5aa765d61d8327deb882cf99', 'Dealer', 'Syangja', 'Kamala Stores', '355212690_565680785642904_5827797170606900152_n.jpg', 1, '2023-07-18 00:52:05'),
(5, 'Saugat ', 'Poudel', 'saugatpoudel@gmail.com', '9846012345', '4b6ed35f0ebe7e6348e718fc44b65738', 'Dealer', 'Pokhara', 'Birauta', '355054003_225718886929287_5428582139209606995_n.jpg', 1, '2023-07-18 20:37:26'),
(6, 'Anushka', 'Thapa', 'anushkathapa@gmail.com', '9811223344', 'b714801b96f39a72bb28e8e70946c3a3', 'Dealer', 'Syangja', 'Anushki Stores', 'wallpaper-mania.com_High_resolution_wallpaper_background_ID_77700724738.jpg', 1, '2023-07-18 22:41:22'),
(7, 'saugat', 'paudel', 'be2020se711@gces.edu.np', '9815100588', 'e87c5fcfbc99dd425dc0c436bd6e5840', 'Dealer', 'Syangja', 'Kamala Stores', '355201941_1725108184606675_2569594426410329000_n.jpg', 1, '2023-07-19 06:50:28'),
(8, 'Success', 'Chhantyal', 'success@gmail.com', '9846072189', '260ca9dd8a4577fc00b7bd5810298076', 'Dealer', 'Pokhara', 'Success', 'Screenshot_20230714_220343.png', 1, '2023-07-19 07:30:02');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
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
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
