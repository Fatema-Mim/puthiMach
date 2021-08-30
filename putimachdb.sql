-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 09, 2021 at 03:27 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `putimachdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `date_reg`
--

CREATE TABLE `date_reg` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `phone` int(11) NOT NULL,
  `dating_date` date NOT NULL,
  `dating_time` time NOT NULL,
  `location` varchar(100) NOT NULL,
  `nid` varchar(14) NOT NULL,
  `reg_date` datetime NOT NULL DEFAULT current_timestamp(),
  `partner_name` varchar(20) NOT NULL,
  `partner_phone` varchar(12) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `date_reg`
--

INSERT INTO `date_reg` (`id`, `name`, `phone`, `dating_date`, `dating_time`, `location`, `nid`, `reg_date`, `partner_name`, `partner_phone`, `status`) VALUES
(1, 'Samim Sarkar Sammu', 1559101030, '2021-02-16', '06:30:00', 'gfdg', '222222222222', '2021-02-07 06:28:57', 'Samim Sarkar Sammu', '01559101030', 0),
(2, 'Samim Sarkar Sammu', 1559101030, '2021-02-16', '06:33:00', 'Badda, Dhaka', '123', '2021-02-07 06:30:37', 'Samim Sarkar Sammu', '01559101030', 0);

-- --------------------------------------------------------

--
-- Table structure for table `followers`
--

CREATE TABLE `followers` (
  `id` int(11) NOT NULL,
  `user` varchar(11) NOT NULL,
  `follower` varchar(11) NOT NULL,
  `status` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `followers`
--

INSERT INTO `followers` (`id`, `user`, `follower`, `status`) VALUES
(2, '01559101030', '01559101030', 1),
(3, '01850349030', '01559101030', 1),
(4, '01559101030', '01627596665', 1),
(5, '01850349030', '01627596665', 1),
(6, '01559101030', '01850349030', 1);

-- --------------------------------------------------------

--
-- Table structure for table `hook_image`
--

CREATE TABLE `hook_image` (
  `id` int(11) NOT NULL,
  `chat` text DEFAULT NULL,
  `image1` varchar(50) DEFAULT NULL,
  `phone` varchar(11) NOT NULL,
  `date_image` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hook_image`
--

INSERT INTO `hook_image` (`id`, `chat`, `image1`, `phone`, `date_image`) VALUES
(25, 'mim', NULL, '01850349030', '2021-02-08 15:40:17'),
(26, '', NULL, '01850349030', '2021-02-08 15:54:30'),
(29, 'mim', '1612780466.jpg', '01850349030', '2021-02-08 16:34:26'),
(33, 'mnbvgcfvbjmklmknb okjhgfcvhjm', '1612780916.jpg', '01850349030', '2021-02-08 16:41:56'),
(35, 'testt', '1612839328.jpg', '01559101030', '2021-02-09 08:55:28'),
(36, '015', '1612839411.jpg', '01559101030', '2021-02-09 08:56:51'),
(37, 'heeeeeeeeeeeeeeeeeeeeeee', '1612839591.jpg', '01559101030', '2021-02-09 08:59:51'),
(38, 'তুমি', '1612840219.jpg', '01559101030', '2021-02-09 09:10:19'),
(39, 'anothar test', '1612840250.jpg', '01559101030', '2021-02-09 09:10:50'),
(40, '', NULL, '01559101030', '2021-02-09 09:41:23'),
(41, '', NULL, '01559101030', '2021-02-09 09:41:24'),
(42, '', '1612842111.png', '01559101030', '2021-02-09 09:41:51'),
(43, 'test', '1612842124.png', '01559101030', '2021-02-09 09:42:04'),
(44, '', NULL, '01559101030', '2021-02-09 09:42:17');

-- --------------------------------------------------------

--
-- Table structure for table `hook_video`
--

CREATE TABLE `hook_video` (
  `id` int(11) NOT NULL,
  `video` varchar(100) NOT NULL,
  `chat` text NOT NULL,
  `phone` varchar(11) NOT NULL,
  `date_video` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hook_video`
--

INSERT INTO `hook_video` (`id`, `video`, `chat`, `phone`, `date_video`) VALUES
(8, '$video_new_name', '$chat', '$phone', '2021-02-09 14:58:33'),
(9, '1612863140.mp4', '', '01559101030', '2021-02-09 15:32:20'),
(10, '1612863620.mp4', '', '01559101030', '2021-02-09 15:40:20'),
(11, '1612863654.mp4', '', '01559101030', '2021-02-09 15:40:54'),
(12, '1612866899.mp4', '', '01850349030', '2021-02-09 16:34:59'),
(13, '1612880188.mp4', 'tssfc', '01559101030', '2021-02-09 20:16:28');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `Id` int(11) NOT NULL,
  `FromUser` int(100) NOT NULL,
  `ToUser` int(100) NOT NULL,
  `Message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`Id`, `FromUser`, `ToUser`, `Message`) VALUES
(59, 36, 33, 'Kamal'),
(60, 33, 36, 'Sohag kamon aso'),
(64, 33, 36, 'doooo'),
(65, 36, 33, 'kooll'),
(66, 33, 33, 'hhhhhhh'),
(67, 33, 33, 'nnnnn'),
(68, 25, 25, 'gggg'),
(69, 25, 29, 'hhhhhhhhhhhhhhhhhhhhh'),
(70, 25, 72, 'hi'),
(71, 74, 64, 'hello'),
(72, 74, 73, 'hhhhhhh'),
(73, 74, 73, ''),
(74, 74, 73, ''),
(75, 74, 73, ''),
(76, 74, 73, ''),
(77, 74, 73, ''),
(78, 74, 73, ''),
(79, 25, 74, 'hhhhhhhhh'),
(80, 25, 67, 'ji\n'),
(81, 26, 25, 'vxfvxvbx'),
(82, 25, 64, 'hiii'),
(83, 25, 64, ''),
(84, 25, 64, 'kmn asis'),
(85, 25, 25, 'hee');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `username` varchar(30) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `image` varchar(150) NOT NULL,
  `birthday` date NOT NULL,
  `password` varchar(50) NOT NULL,
  `balance` int(6) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `time_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `username`, `phone`, `image`, `birthday`, `password`, `balance`, `gender`, `time_date`) VALUES
(25, 'Samim Sarkar Sammu', '', '01559101030', 'samim sarkar sammu.jpg', '1990-03-20', '20121992', 939, '', '2021-02-04 16:07:00'),
(26, 'Moin Uddin Munna', '', '01627596665', '134520585_2842845212619683_360280724307525618_o.jpg', '1998-01-05', '01627596665', -5, '', '2021-02-04 13:05:37'),
(27, 'Muhammad Sabbir Sarker', '', '01893333036', 'inbound2076109944150577246.jpg', '1998-12-06', 'sabbir036', 0, '', '2021-01-22 01:20:10'),
(29, 'Rakib', '', '01608790086', 'inbound6827835272896266444.jpg', '1997-01-13', 'rakib1997', 0, '', '2021-01-22 01:20:10'),
(30, 'Ridoy', '', '01756829048', 'inbound6140956320756378550.jpg', '1994-03-02', 'asdridoy', 0, '', '2021-01-22 01:20:10'),
(31, 'Rocky', '', '01552389164', 'inbound1773767083097606873.jpg', '1994-05-05', 'qwert12345', 0, '', '2021-01-22 01:20:10'),
(32, 'Sohan', '', '01681485509', 'inbound1700177769217292580.jpg', '1996-10-26', 'sohansohan', 0, '', '2021-01-22 01:20:10'),
(33, 'Azaharul Hoque', '', '01637715689', 'SAVE_20201025_024118.jpg', '1997-08-09', 'rana12', 0, '', '2021-01-22 01:20:10'),
(34, 'Miltan', '', '01946163686', 'inbound888445824431513574.jpg', '1993-06-03', 'miltan123', 0, '', '2021-01-22 01:20:10'),
(35, 'ShuvoO Khan', '', '01771515059', 'IMG_20210111_114254.jpg', '1996-10-25', 'SK311341sk', 0, '', '2021-01-22 01:20:10'),
(36, 'Jarip', '', '01303142209', 'inbound8295089907840030036.jpg', '1993-09-13', 'amar179', 0, '', '2021-01-22 01:20:10'),
(37, 'Azmine Mahtab ', '', '01766942719', '20200229_092547.jpg', '2001-05-13', '01766942719', 0, '', '2021-01-22 01:20:10'),
(38, 'ToriQ', '', '01670974959', 'IMG_20201106_101511.jpg', '1992-12-21', '8508821722', 0, '', '2021-01-22 01:20:10'),
(39, 'Shohan', '', '01833344262', 'CFA780AE-F7FC-4D3F-B7F1-855CEA05DBB0.jpeg', '1998-11-10', 'shohan327', 0, '', '2021-01-22 01:20:10'),
(40, 'Dr Shaikat Roy', '', '01676007506', 'inbound4876848972626162703.jpg', '1995-10-21', 'roy181525', 0, '', '2021-01-22 01:20:10'),
(41, 'Habibur', '', '01716389327', 'inbound498252889372926293.jpg', '1998-02-05', '0000mamun', 0, '', '2021-01-22 01:20:10'),
(42, 'Akash', '', '01632888232', 'IMG_20201110_035425_901.jpg', '1993-02-14', '01632888232', 0, '', '2021-01-22 01:20:10'),
(43, 'Fatema Tuz Zohura Mim', '', '01850349030', 'meem.jpg', '1997-10-29', '12', 0, '', '2021-01-22 01:20:10'),
(44, 'Zhumur Rahman', '', '01778979191', '85130220_2413485392296227_3788113210352074752_n.jpg', '1999-02-14', '01778979191', 0, '', '2021-01-22 01:20:10'),
(45, 'Aisha Zaman', '', '01778970000', '85059437_2413485378962895_4331442670833500160_n.png', '2000-03-06', '01778979191', 0, '', '2021-01-22 01:20:10'),
(46, 'Shahriar Joy', '', '01888706003', 'Joy.jpg', '1999-10-15', 'sopnajoy', 0, '', '2021-01-22 01:20:10'),
(52, 'Touvir Ahmed', '', '01726995212', 'InShot_20201230_214600062-1.jpg', '1992-02-11', '8199281992', 0, '', '2021-01-22 01:20:10'),
(54, 'Fatema  Mim', '', '01642934796', '01642934796.jpg', '1997-10-29', '1', 0, '', '2021-01-22 01:20:10'),
(55, 'Nawrun Islam Toa', '', '01723638919', '01723638919.jpg', '1998-01-14', 'heywhatsup', 0, '', '2021-01-22 01:20:10'),
(57, 'sohel', '', '01318613061', '01318613061.jpg', '1989-01-08', '0040', 0, '', '2021-01-22 01:20:10'),
(58, 'Nafizur Rahman', '', '01764096244', '01764096244.jpg', '1997-08-28', 'Rahman399', 0, '', '2021-01-22 01:20:10'),
(59, 'Rajib', '', '01828646704', '01828646704.jpg', '1996-12-12', '0001723970693', 0, '', '2021-01-22 01:20:10'),
(60, 'Anjum Jarif', '', '01533203419', '01533203419.jpg', '1999-12-02', '123456789', 0, '', '2021-01-22 01:20:10'),
(61, 'SHISHIR', '', '01747390940', '01747390940.jpg', '2021-01-21', 's007', 0, '', '2021-01-22 15:16:27'),
(62, 'Shaikat khan', '', '01770528676', '01770528676.jpg', '2000-01-08', '10105', 0, '', '2021-01-22 19:12:15'),
(63, 'Aman', '', '01889137397', '01889137397.jpg', '1988-10-01', 'Suman4946', 0, '', '2021-01-23 08:06:25'),
(64, 'Hira', '', '1790488994', '1790488994.jpg', '1998-07-11', 'akashbatash', 0, '', '2021-01-23 17:46:21'),
(65, 'Arnob', '', '01649935795', '01649935795.jpg', '1997-01-30', 'mim', 0, '', '2021-01-23 18:48:04'),
(66, 'Dinar khan', '', '01714272001', '01714272001.jpg', '1996-01-23', 'onamika', 0, '', '2021-01-23 19:51:23'),
(67, 'Rajib', '', '01812078651', '01812078651.jpg', '1996-03-11', '11265060', 0, '', '2021-01-24 01:22:52'),
(68, 'Neer', '', '01682968274', 'p.jpeg', '1997-01-05', '@@@NEER@@@', 0, '', '2021-01-26 15:27:11'),
(69, 'Atik bakhtiar ', '', '01765757627', 'p.jpeg', '2000-01-31', 'boktiar123', 0, '', '2021-01-29 15:44:29'),
(70, 'Syed Tanvir', '', '01937295496', 'p.jpeg', '1997-05-07', 'shaju7000', 0, '', '2021-01-29 20:57:39'),
(71, 'Sohag Rahman', '', '01914249273', '01914249273.jpg', '2021-02-03', '1', 0, '', '2021-02-03 13:02:31');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(11) NOT NULL,
  `credit` int(6) NOT NULL,
  `debit` int(6) NOT NULL,
  `date_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`id`, `name`, `phone`, `credit`, `debit`, `date_time`) VALUES
(1, 'Samim Sarkar Sammu', '01559101030', 0, 5, '2021-02-07 06:10:58'),
(2, 'Samim Sarkar Sammu', '01559101030', 0, 5, '2021-02-07 06:13:01'),
(3, 'Samim Sarkar Sammu', '01559101030', 0, 5, '2021-02-07 06:28:57'),
(4, 'Samim Sarkar Sammu', '01559101030', 0, 5, '2021-02-07 06:29:39'),
(5, 'Samim Sarkar Sammu', '01559101030', 0, 5, '2021-02-07 06:30:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `date_reg`
--
ALTER TABLE `date_reg`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `followers`
--
ALTER TABLE `followers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hook_image`
--
ALTER TABLE `hook_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hook_video`
--
ALTER TABLE `hook_video`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`Id`),
  ADD KEY `FromUser` (`FromUser`),
  ADD KEY `ToUser` (`ToUser`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `date_reg`
--
ALTER TABLE `date_reg`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `followers`
--
ALTER TABLE `followers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `hook_image`
--
ALTER TABLE `hook_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `hook_video`
--
ALTER TABLE `hook_video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
