-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2023 at 04:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `website`
--

-- --------------------------------------------------------

--
-- Table structure for table `codes`
--

CREATE TABLE `codes` (
  `id` int(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `code` varchar(250) NOT NULL,
  `expire` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `codes`
--

INSERT INTO `codes` (`id`, `email`, `code`, `expire`) VALUES
(1, 'johncarlaguibay01@gmail.com', '76112', '1676753236'),
(2, 'johncarlaguibay01@gmail.com', '59209', '1676753307'),
(3, 'johncarlaguibay01@gmail.com', '44134', '1676753417'),
(4, 'jhairus123@gmail.com', '19310', '1676753498'),
(5, 'johncarlaguibay01@gmail.com', '47622', '1676753509'),
(6, 'johncarlaguibay01@gmail.com', '36997', '1676753600'),
(7, 'jhairus123@gmail.com', '54175', '1676753890'),
(8, 'johncarlaguibay01@gmail.com', '87588', '1676754104'),
(9, 'johncarlaguibay01@gmail.com', '96918', '1677175128'),
(10, 'johncarlaguibay14@gmail.com', '81565', '1677180748'),
(11, 'johncarlaguibay01@gmail.com', '71388', '1677181001'),
(12, 'johncarlaguibay01@gmail.com', '15110', '1677854364'),
(13, 'johncarlaguibay01@gmail.com', '27797', '1677854516'),
(14, 'johncarlaguibay01@gmail.com', '39335', '1677855423'),
(15, 'johncarlaguibay01@gmail.com', '93644', '1677858093'),
(16, 'asd@gmail.com', '76338', '1677858343'),
(17, 'johncarlaguibay01@gmail.com', '62648', '1678649666');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `msg_id` int(11) NOT NULL,
  `incoming_msg_id` int(255) NOT NULL,
  `outgoing_msg_id` int(255) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`msg_id`, `incoming_msg_id`, `outgoing_msg_id`, `msg`) VALUES
(1, 1357001309, 1236391685, 'asd.'),
(2, 1357001309, 1236391685, 'ad'),
(3, 1357001309, 1236391685, 'asd'),
(4, 1357001309, 1236391685, 'asd'),
(5, 1357001309, 1236391685, 'sd'),
(6, 1357001309, 1236391685, 'asd'),
(7, 1343965103, 1236391685, 'asd'),
(8, 1236391685, 1343965103, 'asd'),
(9, 1357001309, 1236391685, 'asd'),
(10, 1343965103, 1236391685, 'e');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `lastname` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `firstname`, `middlename`, `lastname`, `username`, `email`, `password`) VALUES
(3, 'RODLYN', 'MAYGON', 'ABRIL', 'rodlyn', 'rodlynabril2@gmail.com', '$2y$10$LiCSQuNkwlFJFQxnGtIdGOAmvg3//oSs4QB7ksXYPjRRsaDF6/gO6'),
(4, 'John Carl', 'Aguibay', 'Rey', 'johncarlaguibay', 'johncarlaguibay@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `contact_id` int(250) NOT NULL,
  `con_name` varchar(250) NOT NULL,
  `con_number` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `message` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`contact_id`, `con_name`, `con_number`, `email`, `message`) VALUES
(33, 'John Carl R. Aguibay ', '09125158115', 'rodlynabril2@gmail.com', 'HAHAAHAHAHA'),
(34, 'John Carl R. Aguibay ', '09125158115', 'rodlynabril2@gmail.com', 'asdasdasdasd'),
(35, '', '', '', ''),
(36, '', '', '', ''),
(37, '', '', '', ''),
(38, '', '', '', ''),
(39, '', '', '', ''),
(40, '', '', '', ''),
(41, '', '', '', ''),
(42, '', '', '', ''),
(43, '', '', '', ''),
(44, '', '', '', ''),
(45, '', '', '', ''),
(46, '', '', '', ''),
(47, '', '', '', ''),
(48, '', '', '', ''),
(49, '', '', '', ''),
(50, '', '', '', ''),
(51, '', '', '', ''),
(52, '', '', '', ''),
(53, '', '', '', ''),
(54, '', '', '', ''),
(55, '', '', '', ''),
(56, '', '', '', ''),
(57, '', '', '', ''),
(58, '', '', '', ''),
(59, '', '', '', ''),
(60, '', '', '', ''),
(61, '', '', '', ''),
(62, '', '', '', ''),
(63, '', '', '', ''),
(64, '', '', '', ''),
(65, '', '', '', ''),
(66, '', '', '', ''),
(67, '', '', '', ''),
(68, '', '', '', ''),
(69, '', '', '', ''),
(70, '', '', '', ''),
(71, '', '', '', ''),
(72, '', '', '', ''),
(73, '', '', '', ''),
(74, '', '', '', ''),
(75, '', '', '', ''),
(76, '', '', '', ''),
(77, '', '', '', ''),
(78, '', '', '', ''),
(79, '', '', '', ''),
(80, '', '', '', ''),
(81, '', '', '', ''),
(82, '', '', '', ''),
(83, '', '', '', ''),
(84, '', '', '', ''),
(85, '', '', '', ''),
(86, '', '', '', ''),
(87, '', '', '', ''),
(88, '', '', '', ''),
(89, '', '', '', ''),
(90, '', '', '', ''),
(91, '', '', '', ''),
(92, '', '', '', ''),
(93, '', '', '', ''),
(94, '', '', '', ''),
(95, '', '', '', ''),
(96, 'asdakoto', 'asd', 'asd23@gmail.com', 'asd'),
(97, '', '', '', ''),
(98, '', '', '', ''),
(99, '', '', '', ''),
(100, '', '', '', ''),
(101, '', '', '', ''),
(102, '', '', '', ''),
(103, '', '', '', ''),
(104, '', '', '', ''),
(105, '', '', '', ''),
(106, '', '', '', ''),
(107, '', '', '', ''),
(108, '', '', '', ''),
(109, '', '', '', ''),
(110, '', '', '', ''),
(111, '', '', '', ''),
(112, '', '', '', ''),
(113, '', '', '', ''),
(114, '', '', '', ''),
(115, '', '', '', ''),
(116, '', '', '', ''),
(117, '', '', '', ''),
(118, '', '', '', ''),
(119, '', '', '', ''),
(120, '', '', '', ''),
(121, '', '', '', ''),
(122, '', '', '', ''),
(123, '', '', '', ''),
(124, '', '', '', ''),
(125, '', '', '', ''),
(126, '', '', '', ''),
(127, '', '', '', ''),
(128, '', '', '', ''),
(129, '', '', '', ''),
(130, '', '', '', ''),
(131, '', '', '', ''),
(132, '', '', '', ''),
(133, '', '', '', ''),
(134, '', '', '', ''),
(135, '', '', '', ''),
(136, '', '', '', ''),
(137, '', '', '', ''),
(138, '', '', '', ''),
(139, '', '', '', ''),
(140, '', '', '', ''),
(141, '', '', '', ''),
(142, '', '', '', ''),
(143, '', '', '', ''),
(144, '', '', '', ''),
(145, '', '', '', ''),
(146, '', '', '', ''),
(147, '', '', '', ''),
(148, '', '', '', ''),
(149, '', '', '', ''),
(150, '', '', '', ''),
(151, '', '', '', ''),
(152, '', '', '', ''),
(153, '', '', '', ''),
(154, '', '', '', ''),
(155, '', '', '', ''),
(156, '', '', '', ''),
(157, '', '', '', ''),
(158, '', '', '', ''),
(159, '', '', '', ''),
(160, '', '', '', ''),
(161, '', '', '', ''),
(162, '', '', '', ''),
(163, '', '', '', ''),
(164, '', '', '', ''),
(165, '', '', '', ''),
(166, '', '', '', ''),
(167, '', '', '', ''),
(168, '', '', '', ''),
(169, '', '', '', ''),
(170, '', '', '', ''),
(171, '', '', '', ''),
(172, '', '', '', ''),
(173, '', '', '', ''),
(174, '', '', '', ''),
(175, '', '', '', ''),
(176, '', '', '', ''),
(177, '', '', '', ''),
(178, '', '', '', ''),
(179, '', '', '', ''),
(180, '', '', '', ''),
(181, '', '', '', ''),
(182, '', '', '', ''),
(183, '', '', '', ''),
(184, '', '', '', ''),
(185, '', '', '', ''),
(186, '', '', '', ''),
(187, '', '', '', ''),
(188, '', '', '', ''),
(189, '', '', '', ''),
(190, '', '', '', ''),
(191, '', '', '', ''),
(192, '', '', '', ''),
(193, '', '', '', ''),
(194, '', '', '', ''),
(195, '', '', '', ''),
(196, '', '', '', ''),
(197, '', '', '', ''),
(198, '', '', '', ''),
(199, '', '', '', ''),
(200, '', '', '', ''),
(201, '', '', '', ''),
(202, '', '', '', ''),
(203, '', '', '', ''),
(204, '', '', '', ''),
(205, '', '', '', ''),
(206, '', '', '', ''),
(207, '', '', '', ''),
(208, '', '', '', ''),
(209, '', '', '', ''),
(210, '', '', '', ''),
(211, '', '', '', ''),
(212, '', '', '', ''),
(213, '', '', '', ''),
(214, '', '', '', ''),
(215, '', '', '', ''),
(216, '', '', '', ''),
(217, '', '', '', ''),
(218, '', '', '', ''),
(219, '', '', '', ''),
(220, '', '', '', ''),
(221, '', '', '', ''),
(222, '', '', '', ''),
(223, '', '', '', ''),
(224, '', '', '', ''),
(225, '', '', '', ''),
(226, '', '', '', ''),
(227, '', '', '', ''),
(228, '', '', '', ''),
(229, '', '', '', ''),
(230, '', '', '', ''),
(231, '', '', '', ''),
(232, '', '', '', ''),
(233, '', '', '', ''),
(234, '', '', '', ''),
(235, '', '', '', ''),
(236, '', '', '', ''),
(237, '', '', '', ''),
(238, '', '', '', ''),
(239, '', '', '', ''),
(240, '', '', '', ''),
(241, '', '', '', ''),
(242, '', '', '', ''),
(243, '', '', '', ''),
(244, '', '', '', ''),
(245, '', '', '', ''),
(246, '', '', '', ''),
(247, '', '', '', ''),
(248, '', '', '', ''),
(249, '', '', '', ''),
(250, '', '', '', ''),
(251, '', '', '', ''),
(252, '', '', '', ''),
(253, '', '', '', ''),
(254, '', '', '', ''),
(255, '', '', '', ''),
(256, '', '', '', ''),
(257, '', '', '', ''),
(258, '', '', '', ''),
(259, '', '', '', ''),
(260, '', '', '', ''),
(261, '', '', '', ''),
(262, '', '', '', ''),
(263, '', '', '', ''),
(264, '', '', '', ''),
(265, '', '', '', ''),
(266, '', '', '', ''),
(267, '', '', '', ''),
(268, '', '', '', ''),
(269, '', '', '', ''),
(270, '', '', '', ''),
(271, '', '', '', ''),
(272, '', '', '', ''),
(273, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(250) NOT NULL,
  `unique_id` varchar(250) NOT NULL,
  `firstname` varchar(250) NOT NULL,
  `middlename` varchar(250) NOT NULL,
  `name` varchar(250) NOT NULL,
  `txtbirthdate` varchar(250) NOT NULL,
  `txtage` varchar(250) NOT NULL,
  `gender` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `status` int(250) NOT NULL,
  `last_seen` date NOT NULL DEFAULT current_timestamp(),
  `active` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `unique_id`, `firstname`, `middlename`, `name`, `txtbirthdate`, `txtage`, `gender`, `image`, `username`, `email`, `password`, `status`, `last_seen`, `active`) VALUES
(87, '1236391685', 'JohnCarl', 'Aguibay', 'Rey', '', '', '', '341636687_143673408517487_6436353741370617093_n.jpg', '', 'johncarlaguibay01@gmail.com', '$2y$10$cur5EuneH8aykbCAxPQqrevwN5eMc0IvzgutUcqV.eaBXMHvCL15O', 1, '2023-04-27', 'Offline now'),
(102, '1343965103', 'RODLYN', 'MAYGON', 'Barcela', '', '', '', '343274888_782728759865571_91473939083123638_n.jpg', 'johncarlaguibay', 'j.aguibay20@gmail.com', '$2y$10$Dxkofph551nXeESWBLAZ9ugG0bGp6LJlzGeaS0qpw1F2RNs0rmCy6', 1, '2023-05-07', 'Offline now'),
(106, '1143290732', 'Jomaryl', '', 'Viola', '2001-06-11', '21 years old', 'male', '317340708_1295752234572068_5410453174820755586_n.png', '', 'johncarlaguibay14@gmail.com', '$2y$10$Lz1hcs7QyZB/.5jH5ZXt0O65kQ9rhVvPoyjLU.RoUmiDFXVNGuux.', 1, '2023-05-21', 'Active now');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `codes`
--
ALTER TABLE `codes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`msg_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`contact_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `codes`
--
ALTER TABLE `codes`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `msg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `contact_id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=274;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
