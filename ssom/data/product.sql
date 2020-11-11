-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 08, 2020 at 11:25 PM
-- Server version: 5.6.49-cll-lve
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ssom_wnm608`
--

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `url` varchar(256) NOT NULL,
  `price` decimal(9,0) NOT NULL,
  `date_create` datetime NOT NULL,
  `date_modify` datetime NOT NULL,
  `category` varchar(64) NOT NULL,
  `image_main` varchar(256) NOT NULL,
  `image_other` varchar(512) NOT NULL,
  `image_thumb` varchar(256) NOT NULL,
  `description` text NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `url`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_other`, `image_thumb`, `description`, `quantity`) VALUES
(1, 'Sweat shirts', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=1', 60, '2020-11-08 22:49:03', '2020-11-08 22:49:03', 'Clothes', 'clothes_sweat.jpg', 'clothes_sweat_1.jpg,clothes_sweat_2.jpg,clothes_sweat_3.jpg', 'clothes_sweat_m.jpg', 'Kirsh’s Care bear Neon Pink Sweatshirts S/M/L', 40),
(2, 'Sherpa Hoodie', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=2', 65, '2020-11-08 22:53:48', '2020-11-08 22:53:48', 'Clothes', 'clothes_hoodie.jpg', 'clothes_hoodie_1.jpg,clothes_hoodie_2.jpg,clothes_hoodie_3.jpg', 'clothes_hoodie_m.jpg', 'Topshop’s Sherpa Hoodie S/M/L/XL', 40),
(3, 'Stripe Shirts', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=3', 45, '2020-11-08 22:57:55', '2020-11-08 22:57:55', 'Clothes', 'clothes_shirts.jpg', 'clothes_shirts_1.jpg,clothes_shirts_2.jpg,clothes_shirts_3.jpg', 'clothes_shirts_m.jpg', 'Collusion’s Unisex Stripe Shirts S/M/L/XL', 50),
(4, 'Tartan plaid Dress', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=4', 30, '2020-11-08 22:57:55', '2020-11-08 22:57:55', 'Clothes', 'clothes_dress.jpg', 'clothes_dress_1.jpg,clothes_dress_2.jpg,clothes_dress_3.jpg', 'clothes_dress_m.jpg', 'H&M’s Pink checked Dress 0-12', 50),
(5, 'Heart Blush', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=5', 10, '2020-11-08 23:00:22', '2020-11-08 23:00:22', 'Cosmetics', 'cosmetics_blush.jpg', 'cosmetics_blush_1.jpg,cosmetics_blush_2.jpg,cosmetics_blush_3.jpg', 'cosmetics_blush_m.jpg', 'Half Caked’s heart blush (two different shades)', 35),
(6, 'Dasique Shadow Palette', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=6', 31, '2020-11-08 23:00:22', '2020-11-08 23:00:22', 'Cosmetics', 'cosmetics_eyeshadow.jpg', 'cosmetics_eyeshadow_1.jpg,cosmetics_eyeshadow_2.jpg,cosmetics_eyeshadow_3.jpg', 'cosmetics_eyeshadow_m.jpg', 'Dasique’s nine hole eye palette', 40),
(9, 'Moschino Perfume', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=9', 68, '2020-11-08 23:05:04', '2020-11-08 23:05:04', 'Cosmetics', 'cosmetics_perfume.jpg', 'cosmetics_perfume_1.jpg,cosmetics_perfume_2.jpg,cosmetics_perfume_3.jpg', 'cosmetics_perfume_m.jpg', 'Moschino’s Pink Spray Perfume ', 10),
(10, 'Etude Piglet Blush', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=10', 10, '2020-11-08 23:05:04', '2020-11-08 23:05:04', 'Cosmetics', 'cosmetics_etude_blush.jpg', 'cosmetics_etude_blush_1.jpg,cosmetics_etude_blush_2.jpg,cosmetics_etude_blush_3.jpg', 'cosmetics_etude_blush_m.jpg', 'Etude house’s Piglet blush', 15),
(13, 'Sanrio Lip balm', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=7', 10, '2020-11-08 23:11:13', '2020-11-08 23:11:13', 'Cosmetics', 'cosmetics_lip.jpg', 'cosmetics_lip_1.jpg,cosmetics_lip_2.jpg,cosmetics_lip_3.jpg', 'cosmetics_lip_m.jpg', 'Sanrio’s My Melody Lip balm', 50),
(14, 'Sanrio Ribbon Pen', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=8', 12, '2020-11-08 23:11:13', '2020-11-08 23:11:13', 'Stationary', 'stationary_pen1.jpg', 'stationary_pen1_1.jpg,stationary_pen1_2.jpg,stationary_pen1_3.jpg', 'stationary_pen1_m.jpg', 'Sanrio’s My Melody Two colored pen', 50),
(17, 'Kakao Friends Pen', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=11', 7, '2020-11-08 23:15:49', '2020-11-08 23:15:49', 'Stationary', 'stationary_pen2.jpg', 'stationary_pen2_1.jpg,stationary_pen2_2.jpg,stationary_pen2_3.jpg', 'stationary_pen2_m.jpg', 'Kakao Friends’s Apeach big head Pen', 45),
(18, 'Tulip Pen holder', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=12', 5, '2020-11-08 23:15:49', '2020-11-08 23:15:49', 'Stationary', 'stationary_penholder.jpg', 'stationary_penholder_1.jpg,stationary_penholder_2.jpg,stationary_penholder_3.jpg', 'stationary_penholder_m.jpg', 'Tulip shape Pen holder', 35),
(19, 'Sanrio Memo Pad', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=13', 9, '2020-11-08 23:18:25', '2020-11-08 23:18:25', 'Stationary', 'stationary_memo.jpg', 'stationary_memo_1.jpg,stationary_memo_2.jpg,stationary_memo_3.jpg', 'stationary_memo_m.jpg', 'Sanrio’s My Melody Memo pad', 30),
(20, '20” Carebear Plush', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=14', 17, '2020-11-08 23:18:25', '2020-11-08 23:18:25', 'Toy', 'toy_20inch.jpg', 'toy_20inch_1.jpg,toy_20inch_2.jpg,toy_20inch_3.jpg', 'toy_20inch_m.jpg', '20 inch size Care Bear Plush', 30),
(21, '10” Carebear Plush', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=15', 13, '2020-11-08 23:21:05', '2020-11-08 23:21:05', 'Toy', 'toy_10inch.jpg', 'toy_10inch_1.jpg,toy_10inch_2.jpg,toy_10inch_3.jpg', 'toy_10inch_m.jpg', 'Plush', 30),
(22, 'Smallest Carebear plush', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=16', 7, '2020-11-08 23:21:05', '2020-11-08 23:21:05', 'Toy', 'toy_smallest.jpg', 'toy_smallest_1.jpg,toy_smallest_2.jpg,toy_smallest_3.jpg', 'toy_smallest_m.jpg', 'Plush', 30),
(23, 'My little pony figure', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=17', 13, '2020-11-08 23:23:30', '2020-11-08 23:23:30', 'Toy', 'toy_pony.jpg', 'toy_pony_1.jpg,toy_pony_2.jpg,toy_pony_3.jpg', 'toy_pony_m.jpg', 'Figure', 35),
(24, 'Disney Piglet Tsum Tsum', 'http://somin-lee.com/aau/wnm608_202090_01/ssom/pinkypromiseclub/product_item.php?id=18', 14, '2020-11-08 23:23:30', '2020-11-08 23:23:30', 'Toy', 'toy_piglet.jpg', 'toy_piglet_1.jpg,toy_piglet_2.jpg,toy_piglet_3.jpg', 'toy_piglet_m.jpg', 'Plush', 35);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
