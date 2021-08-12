-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 10, 2021 at 04:53 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `LikeOrDislike`
--

-- --------------------------------------------------------

--
-- Table structure for table `LOD`
--

CREATE TABLE `LOD` (
  `ID` int(255) NOT NULL COMMENT 'ID',
  `name` varchar(255) NOT NULL COMMENT 'アイテムの名前',
  `good` int(11) NOT NULL COMMENT 'Like',
  `bad` int(11) NOT NULL COMMENT 'Dislike'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `LOD`
--

INSERT INTO `LOD` (`ID`, `name`, `good`, `bad`) VALUES
(226, '1', 1, 0),
(227, '2', 1, 0),
(228, '3', 1, 0),
(229, '1', 1, 0),
(230, '1', 1, 0),
(231, '1', 1, 0),
(232, '3', 1, 0),
(233, '2', 1, 0),
(234, '1', 1, 0),
(235, '2', 1, 0),
(236, '1', 1, 0),
(237, '3', 1, 0),
(238, '2', 1, 0),
(239, '2', 1, 0),
(240, '2', 1, 0),
(241, '3', 1, 0),
(242, '1', 1, 0),
(243, '1', 1, 0),
(244, '2', 1, 0),
(245, '3', 1, 0),
(246, '3', 1, 0),
(247, '2', 1, 0),
(248, '1', 1, 0),
(249, '1', 1, 0),
(250, '1', 1, 0),
(251, '1', 1, 0),
(252, '6', 1, 0),
(253, '1', 1, 0),
(254, '3', 1, 0),
(255, '5', 0, 1),
(256, '4', 0, 1),
(257, '10', 1, 0),
(258, '5', 1, 0),
(259, '7', 1, 0),
(260, '8', 1, 0),
(261, '1', 1, 0),
(262, '3', 0, 1),
(263, '1', 0, 1),
(264, '5', 0, 1),
(265, '4', 0, 1),
(266, '4', 0, 1),
(267, '4', 1, 0),
(268, '8', 1, 0),
(269, '2', 1, 0),
(270, '9', 1, 0),
(271, '4', 1, 0),
(272, '1', 0, 1),
(273, '1', 0, 1),
(274, '8', 0, 1),
(275, '8', 0, 1),
(276, '2', 0, 1),
(277, '8', 1, 0),
(278, '9', 1, 0),
(279, '4', 1, 0),
(280, '1', 1, 0),
(281, '3', 1, 0),
(282, '8', 1, 0),
(283, '8', 1, 0),
(284, '9', 1, 0),
(285, '9', 1, 0),
(286, '6', 1, 0),
(287, '10', 1, 0),
(288, '2', 0, 1),
(289, '5', 1, 0),
(290, '5', 0, 1),
(291, '4', 0, 1),
(292, '8', 1, 0),
(293, '7', 1, 0),
(294, '7', 0, 1),
(295, '9', 0, 1),
(296, '5', 1, 0),
(297, '8', 1, 0),
(298, '2', 1, 0),
(299, '10', 1, 0),
(300, '6', 1, 0),
(301, '1', 1, 0),
(302, '1', 1, 0),
(303, '9', 1, 0),
(304, '10', 1, 0),
(305, '3', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `Membership`
--

CREATE TABLE `Membership` (
  `id` int(8) NOT NULL COMMENT 'システム内番号',
  `your_name` varchar(64) NOT NULL COMMENT '名前',
  `tel` varchar(16) NOT NULL COMMENT '電話番号',
  `mail` varchar(32) NOT NULL COMMENT 'メールアドレス',
  `password` varchar(255) NOT NULL COMMENT 'パスワード',
  `year` int(4) NOT NULL COMMENT '生まれ年',
  `gender` int(2) NOT NULL COMMENT '性別',
  `magazine` int(2) NOT NULL COMMENT 'メルマガ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Membership`
--

INSERT INTO `Membership` (`id`, `your_name`, `tel`, `mail`, `password`, `year`, `gender`, `magazine`) VALUES
(5, 'キヨカワリョウタ', '09075724974', 'kingofmerry@gmail.com', '$2y$10$3gz2ZxIUIYFzlkMKOp8d9.yZj9tNe60ERRMUgJbg0nrhwlZP12RxW', 1902, 1, 1),
(6, 'キヨカワリョウタ', '09075724974', 'kingofmerry@gmail.com', '$2y$10$S6GT0j1.0LRn6Kv60HJyb.nHQupEmKlNpNtcL..tdV2qDd.Ub3rRm', 1902, 1, 1),
(7, 'キヨカワリョウタ', '09075724974', 'kingofmerry@gmail.com', '$2y$10$1rwJqIdL6yxc.Vj5M.QE/OWg5KqH65XocGbcJv90zXoLrwQdPRU1K', 1902, 1, 1),
(8, 'キヨカワリョウタ', '09075724974', 'kingofmerry@gmail.com', '$2y$10$7nwj1ILiTvaxB4OuPZeD0e6EFVwIqCiQRAxZvh.1lUWeu7MG0Qf0W', 1902, 1, 1),
(9, 'キヨカワリョウタ', '09075724974', 'kingofmerry@gmail.com', '$2y$10$SZgY9o3E/0EU66jEPniIqes5ZWnwL.ONHuaM8N4wHgA4y2ws37R8C', 1904, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `Product`
--

CREATE TABLE `Product` (
  `ID` int(11) NOT NULL,
  `PRODUCT_NAME` varchar(128) NOT NULL COMMENT '商品名',
  `IMAGE` varchar(255) NOT NULL COMMENT '商品画面'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `Product`
--

INSERT INTO `Product` (`ID`, `PRODUCT_NAME`, `IMAGE`) VALUES
(1, 'a', '1.jpg'),
(2, 'b', '2.jpg'),
(3, 'c', '3.jpg'),
(4, 'd', '4.jpg'),
(5, 'e', '5.jpg'),
(6, 'f', '6.jpg'),
(7, 'g', '7.jpg'),
(8, 'h', '8.jpg'),
(9, 'i', '9.jpg'),
(10, 'j', '10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `LOD`
--
ALTER TABLE `LOD`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `Membership`
--
ALTER TABLE `Membership`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `Product`
--
ALTER TABLE `Product`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `LOD`
--
ALTER TABLE `LOD`
  MODIFY `ID` int(255) NOT NULL AUTO_INCREMENT COMMENT 'ID', AUTO_INCREMENT=306;

--
-- AUTO_INCREMENT for table `Membership`
--
ALTER TABLE `Membership`
  MODIFY `id` int(8) NOT NULL AUTO_INCREMENT COMMENT 'システム内番号', AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `Product`
--
ALTER TABLE `Product`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
