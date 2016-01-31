-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 31, 2016 at 09:59 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `autism`
--

-- --------------------------------------------------------

--
-- Table structure for table `autism_articles`
--

CREATE TABLE IF NOT EXISTS `autism_articles` (
`id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `author` varchar(100) NOT NULL,
  `published_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `content` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

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

CREATE TABLE IF NOT EXISTS `autism_users` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `type` int(11) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autism_users`
--

INSERT INTO `autism_users` (`id`, `name`, `type`, `phone`, `address`, `email`, `password`) VALUES
(2, 'Test', 3, '9874563214', 'Test address', 'test@ac.com', '1234'),
(8, 'Anas M', 2, '9567212800', 'Thaiparamb Kottayam', 'anas@ac.com', '1234');

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
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autism_articles`
--
ALTER TABLE `autism_articles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `autism_users`
--
ALTER TABLE `autism_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
