-- phpMyAdmin SQL Dump
-- version 4.9.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- 생성 시간: 20-12-16 03:56
-- 서버 버전: 5.6.49-cll-lve
-- PHP 버전: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `ssom_wnm608`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(64) NOT NULL,
  `price` decimal(9,2) NOT NULL,
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
-- 테이블의 덤프 데이터 `product`
--

INSERT INTO `product` (`id`, `name`, `price`, `date_create`, `date_modify`, `category`, `image_main`, `image_other`, `image_thumb`, `description`, `quantity`) VALUES
(26, 'Little Twin Star  Memo Pad Set', 15.99, '2020-12-02 10:54:14', '2020-12-02 10:54:14', 'Stationary', 'stationary_memo2.jpg', 'stationary_memo2_1.jpg,stationary_memo2_2.jpg,stationary_memo2_3.jpg', 'stationary_memo2_m.jpg', 'Sanrio’s Little Twin Star Memo pad Set', 30),
(25, 'Marie Tsum Tsum Plush', 13.99, '2020-11-08 23:23:30', '2020-11-08 23:23:30', 'Toy', 'toy_marie.jpg', 'toy_marie_1.jpg,toy_marie_2.jpg,toy_marie_3.jpg', 'toy_marie_m.jpg', 'Disney\'s Tsum Tsum Plush : Marie ', 35),
(5, 'Heart Blush', 9.99, '2020-11-08 23:00:22', '2020-11-08 23:00:22', 'Cosmetics', 'cosmetics_blush.jpg', 'cosmetics_blush_1.jpg,cosmetics_blush_2.jpg,cosmetics_blush_3.jpg', 'cosmetics_blush_m.jpg', 'Half Caked’s heart blush. 100% Vegan and Cruelty free cosmetics.', 35),
(6, 'Dasique Shadow Palette', 30.99, '2020-11-08 23:00:22', '2020-11-08 23:00:22', 'Cosmetics', 'cosmetics_eyeshadow.jpg', 'cosmetics_eyeshadow_1.jpg,cosmetics_eyeshadow_2.jpg,cosmetics_eyeshadow_3.jpg', 'cosmetics_eyeshadow_m.jpg', 'Dasique’s nine hole eye palette', 40),
(17, 'Apeach Big Head Pen', 6.99, '2020-11-08 23:15:49', '2020-11-08 23:15:49', 'Stationary', 'stationary_pen2.jpg', 'stationary_pen2_1.jpg,stationary_pen2_2.jpg,stationary_pen2_3.jpg', 'stationary_pen2_m.jpg', 'Kakao Friends’s Apeach big head Pen', 45),
(18, 'Tulip Pen holder', 5.00, '2020-11-08 23:15:49', '2020-11-08 23:15:49', 'Stationary', 'stationary_penholder.jpg', 'stationary_penholder_1.jpg,stationary_penholder_2.jpg,stationary_penholder_3.jpg', 'stationary_penholder_m.jpg', 'Tulip shape Pen holder', 35),
(9, 'Moschino Perfume', 67.99, '2020-11-08 23:05:04', '2020-11-08 23:05:04', 'Cosmetics', 'cosmetics_perfume.jpg', 'cosmetics_perfume_1.jpg,cosmetics_perfume_2.jpg,cosmetics_perfume_3.jpg', 'cosmetics_perfume_m.jpg', 'Moschino’s Pink Spray Perfume ', 10),
(10, 'Piglet Blush', 9.99, '2020-11-08 23:05:04', '2020-11-08 23:05:04', 'Cosmetics', 'cosmetics_etude_blush.jpg', 'cosmetics_etude_blush_1.jpg,cosmetics_etude_blush_2.jpg,cosmetics_etude_blush_3.jpg', 'cosmetics_etude_blush_m.jpg', 'Etude house’s Piglet blush', 15),
(14, 'My Melody Ribbon Pen', 11.99, '2020-11-08 23:11:13', '2020-11-08 23:11:13', 'Stationary', 'stationary_pen1.jpg', 'stationary_pen1_1.jpg,stationary_pen1_2.jpg,stationary_pen1_3.jpg', 'stationary_pen1_m.jpg', 'Sanrio’s My Melody Two colored pen', 50),
(13, 'My Melody Lip balm', 9.99, '2020-11-08 23:11:13', '2020-11-08 23:11:13', 'Cosmetics', 'cosmetics_lip.jpg', 'cosmetics_lip_1.jpg,cosmetics_lip_2.jpg,cosmetics_lip_3.jpg', 'cosmetics_lip_m.jpg', 'Sanrio’s My Melody Lip balm', 50),
(19, 'My Melody Memo Pad', 8.99, '2020-11-08 23:18:25', '2020-11-08 23:18:25', 'Stationary', 'stationary_memo.jpg', 'stationary_memo_1.jpg,stationary_memo_2.jpg,stationary_memo_3.jpg', 'stationary_memo_m.jpg', 'Sanrio’s My Melody Memo pad', 30),
(20, '20” Carebear Plush', 16.99, '2020-11-08 23:18:25', '2020-11-08 23:18:25', 'Toy', 'toy_20inch.jpg', 'toy_20inch_1.jpg,toy_20inch_2.jpg,toy_20inch_3.jpg', 'toy_20inch_m.jpg', '20 inch size Care Bear Plush : Cheer bear', 30),
(21, '10” Carebear Plush', 12.99, '2020-11-08 23:21:05', '2020-11-08 23:21:05', 'Toy', 'toy_10inch.jpg', 'toy_10inch_1.jpg,toy_10inch_2.jpg,toy_10inch_3.jpg', 'toy_10inch_m.jpg', '10 inch size care bear plush : Cheer bear', 30),
(22, 'Smallest Carebear plush', 6.99, '2020-11-08 23:21:05', '2020-11-08 23:21:05', 'Toy', 'toy_smallest.jpg', 'toy_smallest_1.jpg,toy_smallest_2.jpg,toy_smallest_3.jpg', 'toy_smallest_m.jpg', 'The world smallest Care bear : cheer bear', 30),
(23, 'My little pony Toy', 12.99, '2020-11-08 23:23:30', '2020-11-08 23:23:30', 'Toy', 'toy_pony.jpg', 'toy_pony_1.jpg,toy_pony_2.jpg,toy_pony_3.jpg', 'toy_pony_m.jpg', 'My little pony Figure : Pinkie Pie', 35);
(40, 'Piglet Tsum Tsum Plush', 13.99, '2020-12-16 15:28:00', '2020-12-16 15:28:00', 'Toy', 'toy_piglet.jpg', 'toy_piglet_1.jpg, toy_piglet_2.jpg, toy_piglet_3.jpg', 'toy_piglet_m.jpg', 'Disney Tsum Tsum Plush : Piglet ', 35);

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
