-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 16, 2016 at 08:32 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `full_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `user_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `avatar` varchar(300) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `phone` int(40) NOT NULL,
  `password` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=18 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `full_name`, `user_name`, `avatar`, `email`, `phone`, `password`, `level`) VALUES
(3, 'Khiem ngu si', 'khiem', 'cho.png', 'gaconchaylu@gmail.com', 1664567, '40bd001563085fc35165329ea1ff5c5ecbdbbeef', 2),
(4, 'Khiem sida', 'banthan', 'cho.png', '12345678@gmail.com', 12345454, 'd2f75e8204fedf2eacd261e2461b2964e3bfd5be', 2),
(5, 'Duong Thu Van Anh', 'Mon beo', 'cho.png', 'beo@gmail.com', 166862004, '7c222fb2927d828af22f592134e8932480637c0d', 1),
(6, 'Tran Thi Phuong Hai', 'PuHa', '13435607_1070733649659028_1928836069_n.jpg', 'thieu@gmail.com', 987654, '49224cbb8961faced56065bca492e895415a1c51', 1),
(7, 'Trinh The Hoang', 'Hoang beo', 'cho.png', 'hoangbeo@gmail.com', 98463754, '', 3),
(10, 'Nguyen Cong Hoan', 'ban than', 'cho.png', 'hoan @gmail.com', 9837453, 'a7d579ba76398070eae654c30ff153a4c273272a', 1),
(13, 'Tran Duc Nhuan', 'nhuan', 'cho.png', 'nhuantd@gmail.com', 123456, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 3),
(14, 'Mai Hoang Anh', 'anh', '13435607_1070733649659028_1928836069_n.jpg', 'anhhoang@gmail.com', 1234, '7110eda4d09e062aa5e4a390b0a572ac0d2c0220', 2),
(16, 'Doan Hoa Khiem', 'khiemsida', '13435607_1070733649659028_1928836069_n.jpg', 'khiem@gmail.com', 98765, '6df73cc169278dd6daab5fe7d6cacb1fed537131', 3),
(17, 'Doan Hoa Khiem', 'khiemsida', 'cho.png', 'khiem@gmail.com', 1111, '011c945f30ce2cbafc452f39840f025693339c42', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
