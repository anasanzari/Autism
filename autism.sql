-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2016 at 03:21 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `autism`
--

-- --------------------------------------------------------

--
-- Table structure for table `autism_articles`
--

CREATE TABLE `autism_articles` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autism_articles`
--

INSERT INTO `autism_articles` (`id`, `name`, `author`, `published_at`, `content`) VALUES
(6, 'My Fav Article', 'Shyam Krishnan', '2016-01-30 18:05:08', 'This is my favorite article.'),
(7, 'Depression', 'Salman', '2016-01-31 06:56:03', 'Sample article. Need to work on it''s content.'),
(8, 'New Boy', 'Azeem', '2016-01-31 06:56:39', 'Hello world.'),
(9, 'Quinton', 'Morgan', '2016-01-31 06:57:14', 'Article content.'),
(10, 'Nutshell', 'Prasad', '2016-01-31 06:57:43', 'Article');

-- --------------------------------------------------------

--
-- Table structure for table `autism_users`
--

CREATE TABLE `autism_users` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autism_users`
--

INSERT INTO `autism_users` (`id`, `name`, `type`, `phone`, `address`, `email`, `password`) VALUES
(2, 'Test', 3, '9874563214', 'Test address', 'test@ac.com', '1234'),
(8, 'Anas M', 2, '9567212800', 'Thaiparamb Kottayam', 'anas@ac.com', '1234'),
(9, 'Admin', 1, '9496120742', 'admins address', 'admin@ac.com', '1234'),
(10, 'Jobin', 3, '9496120741', 'My Address', 'jobinar007@gmail.com', ''),
(11, 'Dr Anas', 4, '8759641230', 'Address of Anas ', 'anas@gmail.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `autism_videos`
--

CREATE TABLE `autism_videos` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `link` varchar(250) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autism_videos`
--

INSERT INTO `autism_videos` (`id`, `name`, `link`, `type`) VALUES
(19, 'Bezubaan', '[HD] Bezubaan Phir Se HD Video Song ABCD 2 [2015] - Varun Dhawan - Shraddha Kapoor.mp4', 'video/mp4'),
(20, 'Offo', '[HD] 2 States - Offo 720o Arjun Kapoor Alia Bhatt (Official HD Music Video)(1).mp4', 'video/mp4'),
(21, 'Dhoom', 'Dhoom 3 - Dhoom Machale Dhoom English Sub HD Video (HD).mp4', 'video/mp4'),
(22, 'Badtameez', 'Badtameez Dil Full Song HD Yeh Jawaani Hai Deewani  Ranbir Kapoor, Deepika Padukone (HD).mp4', 'video/mp4'),
(24, 'Mass', 'Therikkudhu Masss  Full Video Song  Masss (HD).mp4', 'video/mp4'),
(26, 'Bang Bang', 'Bang Bang The Song  Bang Bang  Hrithik Roshan & Katrina Kaif  HD (HD).mp4', 'video/mp4'),
(28, 'Shandaar', '---Shaam Shaandaar - Official Video - Shaandaar - Shahid Kapoor -u0026 Alia Bhatt  - Amit Trivedi - YouTube.mp4', 'video/mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autism_articles`
--
ALTER TABLE `autism_articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autism_users`
--
ALTER TABLE `autism_users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `autism_videos`
--
ALTER TABLE `autism_videos`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autism_articles`
--
ALTER TABLE `autism_articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `autism_users`
--
ALTER TABLE `autism_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `autism_videos`
--
ALTER TABLE `autism_videos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
