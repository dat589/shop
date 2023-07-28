-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 28, 2023 at 01:30 AM
-- Server version: 10.5.20-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id19749968_qlbh`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `name`) VALUES
(1, 'Áo'),
(2, 'Quần'),
(3, 'Giày & Dép'),
(4, 'Đầm');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `product_id`, `name`, `created`) VALUES
(2, 1, 'balloon1.jfif', '2022-10-02 16:30:00'),
(3, 1, 'balloon2.jfif', '2022-10-02 16:30:00'),
(4, 1, 'balloon3.jfif', '2022-10-02 16:30:00'),
(5, 1, 'balloon4.jfif', '2022-10-02 16:30:00'),
(6, 1, 'balloon5.jfif', '2022-10-02 16:30:00'),
(7, 1, 'balloon6.jfif', '2022-10-02 16:30:00'),
(49, 2, '1-a-1665995191.jpg', '2022-10-17 15:26:31'),
(50, 2, '1-b-1665995191.jpg', '2022-10-17 15:26:31'),
(51, 2, '3b66ae280ab70da47bc92e5e75fc8760-1665995191.jpg', '2022-10-17 15:26:31'),
(52, 2, '4d62fd1567c60f162a1d184c0c07b10b-1665995191.jpg', '2022-10-17 15:26:31'),
(53, 2, '96b03e5192643475dfa7deb3f618a4f2-1665995191.jpg', '2022-10-17 15:26:31'),
(54, 2, 'ac74d1ad98bee37dc3f258232744c1ff-1665995191.jpg', '2022-10-17 15:26:31'),
(55, 4, '2.a.jpg', '2022-10-17 15:38:42'),
(56, 4, '2.b.jpg', '2022-10-17 15:38:42'),
(57, 4, '5e44953850d99e50a80d6ce4dc62d3eb.jpg', '2022-10-17 15:38:42'),
(58, 4, '323d15982553faaae8456ddf676d7f7e.jpg', '2022-10-17 15:38:42'),
(59, 4, '5695eed06196a96d0257ea0eee0791cb.jpg', '2022-10-17 15:38:42'),
(60, 4, '227453e498fa16d9978fc62ca84a4c9b.jpeg', '2022-10-17 15:38:42'),
(61, 5, '3.a.jpg', '2022-10-17 15:41:10'),
(62, 5, '3.b.jpg', '2022-10-17 15:41:10'),
(63, 5, '6d2469855b33d15c1d4d6b763b65de19.jpg', '2022-10-17 15:41:10'),
(64, 5, '56d847f834e4aa69b91583f3076f701b.jpg', '2022-10-17 15:41:10'),
(65, 5, '92a80457e15897fa270f11816597a260.jpeg', '2022-10-17 15:41:10'),
(66, 5, 'c13d55c1f0224902d0623beed54e3cbb.jpg', '2022-10-17 15:41:10'),
(67, 6, '4.a.jpg', '2022-10-17 15:41:30'),
(68, 6, '4.b.jpg', '2022-10-17 15:41:30'),
(69, 6, '4a4fbd3bd2c2357d249955f9638d175b.jpg', '2022-10-17 15:41:30'),
(70, 6, '4fe5a8a8916b63b129810461a9d4ebea.jpg', '2022-10-17 15:41:30'),
(71, 6, '907a14221deaddb44a8f5dc79f65918e.jpg', '2022-10-17 15:41:30'),
(72, 6, '8303e50650f79e8e13bf4323768b4b20.jpg', '2022-10-17 15:41:30'),
(73, 7, '5.a.jpg', '2022-10-17 15:42:53'),
(74, 7, '5.b.jpg', '2022-10-17 15:42:53'),
(75, 7, '7b0f8b357cc648379ded55ac05af4970.jpg', '2022-10-17 15:42:53'),
(76, 7, '90f948377fddccf1eb6f924eca123713.jpg', '2022-10-17 15:42:53'),
(77, 7, 'bd8f385ca2e7964bd7e5d1dbe7411766.jpg', '2022-10-17 15:42:53'),
(78, 7, 'cb40e22e52c5b02f158f73058d10f348.jpg', '2022-10-17 15:42:53'),
(79, 8, '1.a.jpg', '2022-10-17 15:46:20'),
(80, 8, '1.b.jpg', '2022-10-17 15:46:20'),
(81, 8, '3a27071fdd47505285057c507ead40e2.jpg', '2022-10-17 15:46:20'),
(82, 8, '05fa4f696a71dc586a2b99a00e43b5d0.jpg', '2022-10-17 15:46:20'),
(83, 8, '6d93c412fd55cd03905fc5a065a2a797.jpg', '2022-10-17 15:46:20'),
(84, 8, '50790800443b54f13dc9dd357775856a.jpg', '2022-10-17 15:46:20'),
(85, 9, '6.a.jpg', '2022-10-17 15:46:49'),
(86, 9, '6.b.jpg', '2022-10-17 15:46:49'),
(87, 9, '10cea1ee37957037f3da6a11ef798285b.jpg', '2022-10-17 15:46:49'),
(88, 9, '20f5379f4a31a8409c16d6da08f07562b.jpg', '2022-10-17 15:46:49'),
(89, 9, '0975435bf41b9d6d4ba8245d30bb5d93.jpg', '2022-10-17 15:46:49'),
(90, 9, '0975435bf41b9d6d4ba8245d30bb5d931.jpg', '2022-10-17 15:46:49'),
(91, 10, '06ee03c356c22073f19ec97c7327ffa3.jfif', '2022-10-17 15:47:26'),
(92, 10, '6b433d91ea128d31946bd18cffacf281.jfif', '2022-10-17 15:47:26'),
(93, 10, '9.a.jpg', '2022-10-17 15:47:26'),
(94, 10, '9.b.jpg', '2022-10-17 15:47:26'),
(95, 10, '129466a718e17a7b15f6cab93f9befb2.jfif', '2022-10-17 15:47:26'),
(96, 10, 'b7ad3655bb4368be05cbd7289b3cc2a0.jfif', '2022-10-17 15:47:26'),
(97, 11, '0bb9d769adf65581b8aa3022d035db1b.jfif', '2022-10-17 15:53:30'),
(98, 11, '2a635cbc88e0b334aa45b3c7df23a2de.jfif', '2022-10-17 15:53:30'),
(99, 11, '5d9668c4018402e1f605c64477122efe.jfif', '2022-10-17 15:53:30'),
(100, 11, '8ce61d9febcb0fe05531ac0f313030ee.jfif', '2022-10-17 15:53:30'),
(101, 11, '10.a.jpg', '2022-10-17 15:53:30'),
(102, 11, '10.b.jpg', '2022-10-17 15:53:30'),
(103, 12, '11.a.jpg', '2022-10-17 15:53:57'),
(104, 12, '11.b.jpg', '2022-10-17 15:53:57'),
(105, 12, '041bc605ae6f51206513ad3d795b368a.jfif', '2022-10-17 15:53:57'),
(106, 12, '885de4daddaf2be743584c0a89e0690b.jfif', '2022-10-17 15:53:57'),
(107, 12, 'cb29021d2e4a0e2cec898f5ea56e2441.jfif', '2022-10-17 15:53:57'),
(108, 12, 'dcd926d6bac969010080aa9f3f41f7eb.jfif', '2022-10-17 15:53:57'),
(109, 13, '12.a.jpg', '2022-10-17 15:54:11'),
(110, 13, '12.b.jpg', '2022-10-17 15:54:11'),
(111, 13, '82a7c580fd04433e26beafd86bf68388.jfif', '2022-10-17 15:54:11'),
(112, 13, '93a95854d8449f165a59aa57bd4d03bb.jfif', '2022-10-17 15:54:11'),
(113, 13, '95e4fa85effc54eea2bcb10679d22c22.jfif', '2022-10-17 15:54:11'),
(114, 13, 'e33770f18647e80c750f5aa823216f9a.jfif', '2022-10-17 15:54:11'),
(115, 14, '13.a.jpg', '2022-10-17 15:54:31'),
(116, 14, '13.b.jpg', '2022-10-17 15:54:31'),
(117, 14, '78b9539f5bf45f706c5ac9e2d442612a.jfif', '2022-10-17 15:54:31'),
(118, 14, '86101e6169df67aaf778dd88d556e1b7.jfif', '2022-10-17 15:54:31'),
(119, 14, 'd6b988e01849a7f8bffcdd3b15b18baf.jfif', '2022-10-17 15:54:31'),
(120, 14, 'e94ac6fe63071a986811cb683e53cc22.jfif', '2022-10-17 15:54:31'),
(121, 15, '04da2adfd0130d6ad71af02a1a6af6a3.jfif', '2022-10-17 15:54:48'),
(122, 15, '9a23b9d458e27f93007c68f5f39ed94d.jfif', '2022-10-17 15:54:48'),
(123, 15, '14.a.jpg', '2022-10-17 15:54:48'),
(124, 15, '14.b.jpg', '2022-10-17 15:54:48'),
(125, 15, '947cf2db2f3830fdbbf8ed837b615390.jfif', '2022-10-17 15:54:48'),
(126, 15, 'ed06661136bc103c446956cb0f180181.jfif', '2022-10-17 15:54:48'),
(127, 16, '15.a.jpg', '2022-10-17 15:55:05'),
(128, 16, '15.b.jpg', '2022-10-17 15:55:05'),
(129, 16, '019a79767034907f734db13d26a64f6e.jfif', '2022-10-17 15:55:05'),
(130, 16, 'ccaa6bdbf7b71d19b2f6e0c1bb0678a6.jfif', '2022-10-17 15:55:05'),
(131, 16, 'd94bef04c1bcd9ee235d171279e4a69a.jfif', '2022-10-17 15:55:05'),
(132, 16, 'e8b7bd4c2ce28c782710a824eb9b0e62.jfif', '2022-10-17 15:55:05'),
(133, 17, '0a71ae9b269da60128035d3fb58f97fa.jfif', '2022-10-17 15:55:36'),
(134, 17, '17.a.jpg', '2022-10-17 15:55:36'),
(135, 17, '17.b.jpg', '2022-10-17 15:55:36'),
(136, 17, '889a12fe66628acf80ad27493a7bd3d6.jfif', '2022-10-17 15:55:36'),
(137, 17, 'b8aea8a5e58a1334c9cd1390a9b735d9.jfif', '2022-10-17 15:55:36'),
(138, 17, 'c2501de3e00885fd1da256a239395645.jfif', '2022-10-17 15:55:36'),
(139, 18, '18.a.jpg', '2022-10-17 15:55:50'),
(140, 18, '18.b.jpg', '2022-10-17 15:55:50'),
(141, 18, '178c1fa4c82c168e43e58ae3f1df2e14.jfif', '2022-10-17 15:55:50'),
(142, 18, '9828f721f9a1d8fda267374435dcf5d8.jfif', '2022-10-17 15:55:50'),
(143, 18, 'a8b3afc46f4f1c00519539875ae51688.jfif', '2022-10-17 15:55:50'),
(144, 18, 'ea5554f850d1a6164dc4c148cfe80f90.jfif', '2022-10-17 15:55:50'),
(145, 19, '22.a.jpg', '2022-10-17 15:56:05'),
(146, 19, '22.b.jpg', '2022-10-17 15:56:05'),
(147, 19, '65122b78fd3d820116d60372c0833111.jfif', '2022-10-17 15:56:05'),
(148, 19, 'b70fb439a842bb253520130814c2fe98.jfif', '2022-10-17 15:56:05'),
(149, 19, 'd4fd1b196a8003e21d97bf1f1cfc7a22.jfif', '2022-10-17 15:56:05'),
(150, 19, 'f99c227d9bc0b3647cd448d3a09645d2.jfif', '2022-10-17 15:56:05'),
(151, 20, '20.a.jpg', '2022-10-17 15:56:18'),
(152, 20, '20.b.jpg', '2022-10-17 15:56:18'),
(153, 20, '34a194042216494093386d671b3d3e91.jfif', '2022-10-17 15:56:18'),
(154, 20, '65b49ee82e3dd5631ff657cc9b017dd9.jfif', '2022-10-17 15:56:18'),
(155, 20, '8399cfdf72a3a1b24912b5607d189ed9.jfif', '2022-10-17 15:56:18'),
(156, 20, 'a4f8a49a60065de744c5f3dfce6e1cf8.jfif', '2022-10-17 15:56:18'),
(157, 21, '18.a.jpg', '2022-10-17 15:56:36'),
(158, 21, '18.b.jpg', '2022-10-17 15:56:36'),
(159, 21, '178c1fa4c82c168e43e58ae3f1df2e14.jfif', '2022-10-17 15:56:36'),
(160, 21, '9828f721f9a1d8fda267374435dcf5d8.jfif', '2022-10-17 15:56:36'),
(161, 21, 'a8b3afc46f4f1c00519539875ae51688.jfif', '2022-10-17 15:56:36'),
(162, 21, 'ea5554f850d1a6164dc4c148cfe80f90.jfif', '2022-10-17 15:56:36'),
(163, 22, '6e4f83d96c7fb981654f53cac66baa8b.jfif', '2022-10-17 15:56:52'),
(164, 22, '7d497671c4511c3e08e50d900ebc80b2.jfif', '2022-10-17 15:56:52'),
(165, 22, '23.a.jpg', '2022-10-17 15:56:52'),
(166, 22, '23.b.jpg', '2022-10-17 15:56:52'),
(167, 22, 'b35ccf484d0ad14490fa2e6769c27805.jfif', '2022-10-17 15:56:52'),
(168, 22, 'cecb9c81a6a397bf0069429a5465e206.jfif', '2022-10-17 15:56:52'),
(169, 23, '18.a.jpg', '2022-10-17 15:57:37'),
(170, 23, '18.b.jpg', '2022-10-17 15:57:37'),
(171, 23, '178c1fa4c82c168e43e58ae3f1df2e14.jfif', '2022-10-17 15:57:37'),
(172, 23, '9828f721f9a1d8fda267374435dcf5d8.jfif', '2022-10-17 15:57:37'),
(173, 23, 'a8b3afc46f4f1c00519539875ae51688.jfif', '2022-10-17 15:57:37'),
(174, 23, 'ea5554f850d1a6164dc4c148cfe80f90.jfif', '2022-10-17 15:57:37'),
(175, 24, '21.a.jpg', '2022-10-17 15:58:00'),
(176, 24, '21.b.jpg', '2022-10-17 15:58:00'),
(177, 24, '21ba716b2164e478442c4bc4bd72d430.jfif', '2022-10-17 15:58:00'),
(178, 24, '15434bb0323dbb3b96d4d4434eecf10d.jfif', '2022-10-17 15:58:00'),
(179, 24, 'b26c7370f629ef7ca887ecccca6d54ad.jfif', '2022-10-17 15:58:00'),
(180, 24, 'e73139d4e6a3620589b6d1c9fcf50bed.jfif', '2022-10-17 15:58:00'),
(181, 25, '1b5e77fd2fbff12ca770286b4774907b.jfif', '2022-10-17 15:58:43'),
(182, 25, '8e68dadbae33faf76107f13d0d62e607.jfif', '2022-10-17 15:58:43'),
(183, 25, '19.a.jpg', '2022-10-17 15:58:43'),
(184, 25, '19.b.jpg', '2022-10-17 15:58:43'),
(185, 25, '6278ba4f421769921adadabe61a5d80b.jfif', '2022-10-17 15:58:43'),
(186, 25, 'ba574a2bbe7587b9c76cf26291426922.jfif', '2022-10-17 15:58:43'),
(187, 29, '6dc3cdd34bb251e2bca5f6682d567050.jfif', '2022-10-17 16:21:40'),
(188, 29, '9bdfef96fa98edfc68919d8a7b97feaa.jfif', '2022-10-17 16:21:40'),
(189, 29, '16.a.jpg', '2022-10-17 16:21:40'),
(190, 29, '16.b.jpg', '2022-10-17 16:21:40'),
(191, 29, '0623cea2b649b536fc023f01128ed04c.jfif', '2022-10-17 16:21:40'),
(192, 29, 'c72852cc49d335ecce7e2ccc16121ed3.jfif', '2022-10-17 16:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `order`
--

CREATE TABLE `order` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) DEFAULT NULL,
  `tel` varchar(15) NOT NULL,
  `address` varchar(250) NOT NULL,
  `note` varchar(50) DEFAULT NULL,
  `order_date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(4) DEFAULT NULL,
  `total_money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order`
--

INSERT INTO `order` (`id`, `user_id`, `name`, `email`, `tel`, `address`, `note`, `order_date`, `status`, `total_money`) VALUES
(1, 3, 'Van Dat', NULL, '0984696247', 'Ha Noi', NULL, '2022-10-20 10:43:35', NULL, 12330000),
(4, 3, 'Van Dat', NULL, '0984696247', 'Ha Noi', NULL, '2022-10-20 12:03:11', NULL, 3980000),
(5, 3, 'Nam Hải', NULL, '0984696247', 'Sài Gòn', 'Giao hàng tiết kiẹm', '2022-10-20 18:41:24', NULL, 5810000),
(6, 3, 'Tạ Bình', NULL, '0123456789', 'Sài Gòn', NULL, '2022-10-23 12:14:15', NULL, 7170000);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `num` int(11) NOT NULL,
  `total_money` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `price`, `num`, `total_money`) VALUES
(1, 1, 7, 1790000, 5, 8950000),
(2, 1, 8, 1690000, 2, 3380000),
(3, 4, 4, 1990000, 1, 1990000),
(4, 4, 5, 1990000, 1, 1990000),
(5, 5, 4, 1990000, 2, 3980000),
(6, 5, 11, 650000, 1, 650000),
(7, 5, 23, 590000, 2, 1180000),
(8, 6, 6, 1890000, 3, 5670000),
(9, 6, 12, 750000, 2, 1500000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `price` int(11) NOT NULL,
  `discount` int(11) NOT NULL,
  `thumbnail` varchar(250) NOT NULL,
  `thumbnail2` varchar(128) NOT NULL,
  `description` longtext NOT NULL,
  `class` tinyint(4) NOT NULL DEFAULT 1,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `category_id`, `title`, `price`, `discount`, `thumbnail`, `thumbnail2`, `description`, `class`, `created`, `updated`) VALUES
(1, 4, 'Đầm xòe phối khuy', 1790000, 20, '1.a.png', '1.b.png', 'Đây là mẫu đầm mang lại vẻ cá tính cho các cô nàng. Thiết kế đầm cổ V, vai xếp ly độc đáo, tay áo bo chun tạo độ phồng. Eo chiết cao may chun co giãn thoải mái, tạo độ xòe nhẹ cho phần chân váy. Đầm dài trên đầu gối, chất liệu vải thô mềm mát kết hợp cùng dáng balloon phồng lạ mắt đang trở thành hot trend cho mùa hè.\r\n\r\nThiết kế đầm phù hợp cho nàng diện đi chơi phố hay đi tiệc, không cần mix & match cầu kì trông nàng vẫn thật thu hút.', 1, '2022-09-29 17:58:58', '2022-09-29 18:10:17'),
(2, 4, 'Đầm thun ngực cut-out', 1490000, 20, '1-a-1665993011.jpg', '1-b-1665993011.jpg', 'Đây là mẫu đầm mang lại vẻ cá tính cho các cô nàng. Thiết kế đầm cổ V, vai xếp ly độc đáo, tay áo bo chun tạo độ phồng. Eo chiết cao may chun co giãn thoải mái, tạo độ xòe nhẹ cho phần chân váy. Đầm dài trên đầu gối, chất liệu vải thô mềm mát kết hợp cùng dáng balloon phồng lạ mắt đang trở thành hot trend cho mùa hè.\r\n\r\nThiết kế đầm phù hợp cho nàng diện đi chơi phố hay đi tiệc, không cần mix & match cầu kì trông nàng vẫn thật thu hút.', 1, '2022-09-29 18:01:06', '2022-10-17 15:49:19'),
(4, 4, 'Đầm Voan Đuôi Cá', 1990000, 20, '2.a.jpg', '2.b.jpg', '- Đầm dáng đuôi cá, độ dài qua đầu gối. \r\n\r\n- Chất liệu vải voan bay mát được may 2 lớp kín đáo\r\n\r\n- Thiết kế áo trễ vai 2 lớp, lớp ngoài là kiểu vải dập ly, phần dây áo có thể tùy chỉnh độ dài.\r\n\r\n- Có khóa kéo ẩn sau lưng.\r\n\r\n- Mix đầm cùng túi xách và sandals là hoàn thiện outfit đi chơi dành cho nàng.\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 1, '2022-09-29 18:11:18', '2022-10-17 15:48:54'),
(5, 4, 'Đầm Lụa Xếp Cổ Chéo', 1990000, 20, '3.a.jpg', '3.b.jpg', '- Đầm dáng đuôi cá, độ dài qua đầu gối. \r\n\r\n- Chất liệu vải voan bay mát được may 2 lớp kín đáo\r\n\r\n- Thiết kế áo trễ vai 2 lớp, lớp ngoài là kiểu vải dập ly, phần dây áo có thể tùy chỉnh độ dài.\r\n\r\n- Có khóa kéo ẩn sau lưng.\r\n\r\n- Mix đầm cùng túi xách và sandals là hoàn thiện outfit đi chơi dành cho nàng.\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 1, '2022-09-29 18:14:45', '2022-10-17 15:49:00'),
(6, 4, 'Đầm Ôm Lệch Vai Đính Hoa Nổi', 1890000, 20, '4.a.jpg', '4.b.jpg', '- Đầm dáng đuôi cá, độ dài qua đầu gối. \r\n\r\n- Chất liệu vải voan bay mát được may 2 lớp kín đáo\r\n\r\n- Thiết kế áo trễ vai 2 lớp, lớp ngoài là kiểu vải dập ly, phần dây áo có thể tùy chỉnh độ dài.\r\n\r\n- Có khóa kéo ẩn sau lưng.\r\n\r\n- Mix đầm cùng túi xách và sandals là hoàn thiện outfit đi chơi dành cho nàng.\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 1, '2022-09-29 18:14:45', '2022-10-17 15:49:07'),
(7, 4, 'Đầm Xòe Hạ Eo Xếp Ly', 1790000, 20, '5-a-1665996173.jpg', '5-b-1665996173.jpg', '- Đầm dáng đuôi cá, độ dài qua đầu gối. \r\n\r\n- Chất liệu vải voan bay mát được may 2 lớp kín đáo\r\n\r\n- Thiết kế áo trễ vai 2 lớp, lớp ngoài là kiểu vải dập ly, phần dây áo có thể tùy chỉnh độ dài.\r\n\r\n- Có khóa kéo ẩn sau lưng.\r\n\r\n- Mix đầm cùng túi xách và sandals là hoàn thiện outfit đi chơi dành cho nàng.\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 1, '2022-09-29 18:14:45', '2022-10-17 15:49:13'),
(8, 4, 'Đầm Ôm Bản Cổ Lớn', 1690000, 20, '1-a-1665993537.jpg', '1-b-1665993537.jpg', '- Đầm dáng đuôi cá, độ dài qua đầu gối. \r\n\r\n- Chất liệu vải voan bay mát được may 2 lớp kín đáo\r\n\r\n- Thiết kế áo trễ vai 2 lớp, lớp ngoài là kiểu vải dập ly, phần dây áo có thể tùy chỉnh độ dài.\r\n\r\n- Có khóa kéo ẩn sau lưng.\r\n\r\n- Mix đầm cùng túi xách và sandals là hoàn thiện outfit đi chơi dành cho nàng.\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 1, '2022-09-29 18:14:45', '2022-10-17 15:49:31'),
(9, 4, 'Đầm Thô 1 Lớp Xẻ Eo', 1790000, 20, '6.a.jpg', '6.b.jpg', '- Đầm dáng đuôi cá, độ dài qua đầu gối. \r\n\r\n- Chất liệu vải voan bay mát được may 2 lớp kín đáo\r\n\r\n- Thiết kế áo trễ vai 2 lớp, lớp ngoài là kiểu vải dập ly, phần dây áo có thể tùy chỉnh độ dài.\r\n\r\n- Có khóa kéo ẩn sau lưng.\r\n\r\n- Mix đầm cùng túi xách và sandals là hoàn thiện outfit đi chơi dành cho nàng.\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 1, '2022-09-29 18:14:45', '2022-10-17 15:49:40'),
(10, 1, 'Áo Thun Dập Chữ Nổi', 650000, 20, '9-a-1665993679.jpg', '9-b-1665993679.jpg', '- Áo thun basic dáng regular fit, tay ngắn, cổ tròn. Trước ngực dập nổi chữ METAGENT\r\n\r\n- Chất liệu thun mềm mại, thấm hút mồ hôi tốt\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 2, '2022-09-29 18:17:46', '2022-10-17 15:51:40'),
(11, 1, 'Áo Thun In Hình', 650000, 20, '10-a-1665993698.jpg', '10-b-1665993698.jpg', '- Áo thun basic dáng regular fit, tay ngắn, cổ tròn. Trước ngực dập nổi chữ METAGENT\r\n\r\n- Chất liệu thun mềm mại, thấm hút mồ hôi tốt\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 2, '2022-09-29 18:20:17', '2022-10-17 15:53:30'),
(12, 1, 'Áo Thun Positive', 750000, 20, '11-a-1665993718.jpg', '11-b-1665993718.jpg', '- Áo thun basic dáng regular fit, tay ngắn, cổ tròn. Trước ngực dập nổi chữ METAGENT\r\n\r\n- Chất liệu thun mềm mại, thấm hút mồ hôi tốt\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 2, '2022-09-29 18:20:17', '2022-10-17 15:53:57'),
(13, 1, 'Áo Thun Phối Túi Hộp', 850000, 20, '12-a-1665993739.jpg', '12-b-1665993739.jpg', '- Áo thun basic dáng regular fit, tay ngắn, cổ tròn. Trước ngực dập nổi chữ METAGENT\r\n\r\n- Chất liệu thun mềm mại, thấm hút mồ hôi tốt\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 2, '2022-09-29 18:20:17', '2022-10-17 15:54:11'),
(14, 1, 'Áo Thun Thêu Science', 950000, 20, '13-a-1665993757.jpg', '13-b-1665993757.jpg', '- Áo thun basic dáng regular fit, tay ngắn, cổ tròn. Trước ngực dập nổi chữ METAGENT\r\n\r\n- Chất liệu thun mềm mại, thấm hút mồ hôi tốt\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 2, '2022-09-29 18:20:17', '2022-10-17 15:54:31'),
(15, 1, 'Áo Thun A Journey To Wellness', 650000, 20, '14-a-1665993774.jpg', '14-b-1665993774.jpg', '- Áo thun basic dáng regular fit, tay ngắn, cổ tròn. Trước ngực dập nổi chữ METAGENT\r\n\r\n- Chất liệu thun mềm mại, thấm hút mồ hôi tốt\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 2, '2022-09-29 18:20:17', '2022-10-17 15:54:48'),
(16, 1, 'Áo Thun Symphony', 550000, 20, '15-a-1665993795.jpg', '15-b-1665993795.jpg', '- Áo thun basic dáng regular fit, tay ngắn, cổ tròn. Trước ngực dập nổi chữ METAGENT\r\n\r\n- Chất liệu thun mềm mại, thấm hút mồ hôi tốt\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 2, '2022-09-29 18:20:17', '2022-10-17 15:55:05'),
(17, 1, 'Áo Basic Tee', 750000, 20, '17-a-1665993834.jpg', '17-b-1665993834.jpg', '- Áo thun basic dáng regular fit, tay ngắn, cổ tròn. Trước ngực dập nổi chữ METAGENT\r\n\r\n- Chất liệu thun mềm mại, thấm hút mồ hôi tốt\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.', 3, '2022-09-29 18:20:17', '2022-10-17 15:55:36'),
(18, 1, 'Set Áo 2 Dây', 840000, 20, '18-a-1665993899.jpg', '18-b-1665993899.jpg', 'Áo 2 dây vải thô, thiết kế phối bèo xếp tầng xòe rộng.\r\n\r\nQuần dài dáng lửng, eo chun co giãn.\r\n\r\nSet đồ màu sắc tươi tắn, chất liệu vải thô mềm nhẹ thấm hút mồ hôi tốt giúp bé có một mùa hè vui chơi thoải mái mà vẫn dễ chịu ngay cả khi thời tiết nóng bức nhất.', 3, '2022-09-29 18:24:09', '2022-10-17 15:55:50'),
(19, 1, 'Áo Sơ Mi Bé Trai', 840000, 20, '22-a-1665993943.jpg', '22-b-1665993943.jpg', 'Áo 2 dây vải thô, thiết kế phối bèo xếp tầng xòe rộng.\r\n\r\nQuần dài dáng lửng, eo chun co giãn.\r\n\r\nSet đồ màu sắc tươi tắn, chất liệu vải thô mềm nhẹ thấm hút mồ hôi tốt giúp bé có một mùa hè vui chơi thoải mái mà vẫn dễ chịu ngay cả khi thời tiết nóng bức nhất.', 3, '2022-09-29 18:28:50', '2022-10-17 15:56:05'),
(20, 1, 'Set Áo Thun Kèm Quần', 790000, 20, '20-a-1665994052.jpg', '20-b-1665994052.jpg', 'Áo 2 dây vải thô, thiết kế phối bèo xếp tầng xòe rộng.\r\n\r\nQuần dài dáng lửng, eo chun co giãn.\r\n\r\nSet đồ màu sắc tươi tắn, chất liệu vải thô mềm nhẹ thấm hút mồ hôi tốt giúp bé có một mùa hè vui chơi thoải mái mà vẫn dễ chịu ngay cả khi thời tiết nóng bức nhất.', 3, '2022-09-29 18:28:50', '2022-10-17 15:56:18'),
(21, 1, 'Set 2 Dây Cool', 890000, 20, '18-a-1665994074.jpg', '18-b-1665994074.jpg', 'Áo 2 dây vải thô, thiết kế phối bèo xếp tầng xòe rộng.\r\n\r\nQuần dài dáng lửng, eo chun co giãn.\r\n\r\nSet đồ màu sắc tươi tắn, chất liệu vải thô mềm nhẹ thấm hút mồ hôi tốt giúp bé có một mùa hè vui chơi thoải mái mà vẫn dễ chịu ngay cả khi thời tiết nóng bức nhất.', 3, '2022-09-29 18:28:50', '2022-10-17 15:56:36'),
(22, 1, 'Bộ Đồ Thun Bé Trai', 690000, 20, '23-a-1665994023.jpg', '23-b-1665994023.jpg', 'Áo 2 dây vải thô, thiết kế phối bèo xếp tầng xòe rộng.\r\n\r\nQuần dài dáng lửng, eo chun co giãn.\r\n\r\nSet đồ màu sắc tươi tắn, chất liệu vải thô mềm nhẹ thấm hút mồ hôi tốt giúp bé có một mùa hè vui chơi thoải mái mà vẫn dễ chịu ngay cả khi thời tiết nóng bức nhất.', 3, '2022-09-29 18:28:50', '2022-10-17 15:56:52'),
(23, 1, 'Áo Polo Kẻ Ngang', 590000, 20, '22.a.jpg', '22.b.jpg', 'Áo 2 dây vải thô, thiết kế phối bèo xếp tầng xòe rộng.\r\n\r\nQuần dài dáng lửng, eo chun co giãn.\r\n\r\nSet đồ màu sắc tươi tắn, chất liệu vải thô mềm nhẹ thấm hút mồ hôi tốt giúp bé có một mùa hè vui chơi thoải mái mà vẫn dễ chịu ngay cả khi thời tiết nóng bức nhất.', 3, '2022-09-29 18:28:50', '2022-10-17 15:57:37'),
(24, 1, 'Áo Thun Awesome', 840000, 20, '21-a-1665993999.jpg', '21-b-1665993999.jpg', 'Áo 2 dây vải thô, thiết kế phối bèo xếp tầng xòe rộng.\r\n\r\nQuần dài dáng lửng, eo chun co giãn.\r\n\r\nSet đồ màu sắc tươi tắn, chất liệu vải thô mềm nhẹ thấm hút mồ hôi tốt giúp bé có một mùa hè vui chơi thoải mái mà vẫn dễ chịu ngay cả khi thời tiết nóng bức nhất.', 3, '2022-09-29 18:28:50', '2022-10-17 15:58:00'),
(25, 1, 'Set Thun Họa Tiết Nhí', 990000, 20, '19-a-1665993976.jpg', '19-b-1665993976.jpg', 'Áo 2 dây vải thô, thiết kế phối bèo xếp tầng xòe rộng.\r\n\r\nQuần dài dáng lửng, eo chun co giãn.\r\n\r\nSet đồ màu sắc tươi tắn, chất liệu vải thô mềm nhẹ thấm hút mồ hôi tốt giúp bé có một mùa hè vui chơi thoải mái mà vẫn dễ chịu ngay cả khi thời tiết nóng bức nhất.', 3, '2022-09-29 18:28:50', '2022-10-17 15:58:43'),
(29, 1, 'Áo thun always', 890000, 20, '16-a-1665998500.jpg', '16-b-1665998500.jpg', '- Áo cổ tròn, tay dài. Bo gấu ở cổ và tay áo. In chữ khác màu mặt trước áo.\r\n\r\n- Chất liệu vải thun dày dặn, giữ nhiệt tốt\r\n\r\nLưu ý: Màu sắc sản phẩm thực tế sẽ có sự chênh lệch nhỏ so với ảnh do điều kiện ánh sáng khi chụp và màu sắc hiển thị qua mản hình máy tính/ điện thoại.\r\n\r\nThông tin mẫu:\r\n\r\nChiều cao: 168 cm\r\n\r\nCân nặng: 50 kg\r\n\r\nSố đo 3 vòng:80-62-95 cm\r\n\r\nMẫu mặc size S', 2, '2022-10-04 15:10:57', '2022-10-17 16:21:40');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `address` varchar(250) DEFAULT NULL,
  `tel` varchar(15) DEFAULT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `updated` datetime NOT NULL DEFAULT current_timestamp(),
  `user_level` tinyint(4) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password_hash`, `address`, `tel`, `created`, `updated`, `user_level`) VALUES
(3, 'Đạt Nguyễn Văn', 'nguyenvandat@gmail.com', '$2y$10$Rv3/Cv5mFnucZa.3mgSozuVFCchU6ODsI34DkLSeyRN/BKOx.vj22', NULL, NULL, '2022-10-03 14:39:39', '2022-10-03 14:39:39', 1),
(5, 'Cao Bá Quát', 'lennocnha@gmail.com', '$2y$10$XnErOb11/rVtCKjT4BOZ/.GCAONdPB9hZ.bqASEYSZ0ET.7FKxhW.', NULL, '0123456789', '2022-10-14 00:38:26', '2022-10-14 00:38:26', 1),
(6, 'Bảo', 'nhuthaophap248@gmail.com', '$2y$10$Jzm3/rHimU.Xuw4j7AAgy.O30LqqFpmPtpJ92KhqcxL9lGVpsBS9O', NULL, NULL, '2022-10-14 00:55:01', '2022-10-14 00:55:01', 1),
(10, 'Đáng', 'lennocnha99@gmail.com', '$2y$10$6r1fZBVM.3zLiu5NPX.rReQCvn.RSyRooGvcn3AMl3W/F4hbdBLWe', NULL, NULL, '2022-10-14 01:14:12', '2022-10-14 01:14:12', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `order`
--
ALTER TABLE `order`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=193;

--
-- AUTO_INCREMENT for table `order`
--
ALTER TABLE `order`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `gallery_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `order`
--
ALTER TABLE `order`
  ADD CONSTRAINT `order_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`order_id`) REFERENCES `order` (`id`),
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`category_id`) REFERENCES `category` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
