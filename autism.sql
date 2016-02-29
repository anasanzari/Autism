-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 29, 2016 at 05:16 PM
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
  `content` longtext NOT NULL,
  `level` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autism_articles`
--

INSERT INTO `autism_articles` (`id`, `name`, `author`, `published_at`, `content`, `level`, `user_id`) VALUES
(6, 'My Fav Article', 'Shyam Krishnan', '2016-01-30 18:05:08', '<img class="responsive-img" src="../../static/images/articles/ar5_1.jpg" />\r\n\r\n<p>The Rift is a virtual reality head-mounted display developed by Oculus VR. During its period as an independent company, Oculus VR raised US $2.4 million for the development of the Rift.</p>\r\n\r\n<p>The consumer version of the product will be released in 2016. Based on the Crescent Bay prototype, it features an improved tracking system that accommodates seated and standing experiences, along with updated ergonomics and a tweaked industrial design. Oculus released two ''development kits'', DK1 in late 2012 and DK2 in mid 2014, to give developers a chance to develop content in time for the Rift''s release; these have also been purchased by many virtual reality enthusiasts for general usage. Oculus has stated that there will not be a DK3 but will instead release the consumer version next.</p>\r\n\r\n<p>Gamers will have to wait until early 2016 to actually play with the immersive headset at home. But according to its makers Oculus Rift will be "unlike anything you''ve ever experienced”. Facebook was so excited about the technology it paid $2bn for it last year. Its founder Mark Zuckerberg posted: "When you put on the Rift, you''ll be able to experience immersive virtual environments that create the feeling of ''presence'' - like you''re actually there."</p>\r\n\r\n<img class="responsive-img" src="../../static/images/articles/ar5_2.jpg" />\r\n\r\n<p>"You''ll be able to play games, watch movies and connect with your friends, all in ways that you''ve never experienced before.”</p>\r\n\r\n<h1>So what''s different about it?</h1>\r\n<p>Oculus Rift''s designers say building the Rift meant "solving a lot of really hard engineering challenges". "We integrated high quality VR audio into the Rift to convince your ears that you''re really there," according to Zuckerberg. "We invested a lot of effort in making the headset light, comfortable and easy to wear."</p>\r\n\r\n<p>Oculus Touch, a pair of wireless controllers designed to "let you reach out and interact naturally with objects in the virtual world", was also unveiled. The touch controllers will enable gamers to pick up guns, throw frisbees or carry out other actions within the fantasy scenes they see through the virtual reality headset. </p>\r\n\r\n<p>"We really think Oculus Touch is going to surprise you," 22-year-old founder Palmer Luckey said. "We think they are going to deliver an entirely new set of virtual reality experiences.”\r\nThen there''s the deal with Microsoft. As well as being able to use the Xbox One controller, users will be able to stream Xbox One games to the headset and see them as if they are being viewed on a huge "home cinema" screen.</p>\r\n\r\n\r\n<h1>How much will it cost?</h1>\r\n\r\n<p>t''s estimated it will cost $1,500 - that''s around Rs.90,000 - to buy a headset. That price includes the computer that powers the technology.\r\nThe Rift package will also include a wireless controller and adaptor for the new alliance with Microsoft.</p>\r\n\r\n<img class="responsive-img" src="../../static/images/articles/ar5_3.jpg" />\r\n\r\n<h1>Applications outside gaming</h1>\r\n<p>Those behind Oculus Rift believe the technology will eventually extend far beyond video games and be used to hold business meetings.</p>\r\n\r\n<p>They also reckon it''ll bring together friends and families living miles apart in "virtual living rooms”. Movie buffs might even be able to insert themselves as characters in their favourite films.</p>\r\n<h1>Motion sickness</h1>\r\n<p>Newsbeat''s gaming reporter Steffan Powell says developers are trying not to make you feel sick. He says the initial models lacked a certain sophistication. The amount of content available for it was very less too. "Since then things have changed a lot. One of the major issues that games developers have been working on since then is how to avoid the motion sickness that affects some people when they wear and play with Oculus and other VR headsets."</p>\r\n<p>It can feel really weird looking at something and walking towards it - but your legs aren''t moving. VR has the potential to create really immersive worlds that gamers will love exploring. But making sure they can enjoy them without feeling queasy could be the key to the success of virtual reality gaming."</p>\r\n<p>Other VR headsets coming onto the market before Oculus include, Project Morpheus by Sony and HTC''s Vive headset developed in conjunction with Valve.</p>\r\n', 2, 2),
(7, 'Depression', 'Salman', '2016-01-31 06:56:03', 'Sample article. Need to work on it''s content.', 2, 2),
(8, 'New Boy', 'Azeem', '2016-01-31 06:56:39', 'Hello world.', 1, 2),
(9, 'Quinton', 'Morgan', '2016-01-31 06:57:14', 'Article content.', 1, 2),
(10, 'Nutshell', 'Prasad', '2016-01-31 06:57:43', 'Article', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `autism_chat`
--

CREATE TABLE IF NOT EXISTS `autism_chat` (
`id` int(11) NOT NULL,
  `from_id` int(11) NOT NULL,
  `to_id` int(11) NOT NULL,
  `message` varchar(256) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autism_chat`
--

INSERT INTO `autism_chat` (`id`, `from_id`, `to_id`, `message`, `time`) VALUES
(1, 11, 13, 'Hello Doc', '2016-02-29 08:42:25'),
(2, 13, 11, 'Hi there', '2016-02-29 08:42:44'),
(3, 11, 13, 'How are you?', '2016-02-29 08:42:55'),
(4, 13, 11, 'I''m fine', '2016-02-29 08:43:01'),
(5, 11, 13, 'Okay', '2016-02-29 08:43:08'),
(6, 13, 11, 'See you on Monday!!', '2016-02-29 08:43:16'),
(7, 11, 13, 'hi', '2016-02-29 08:47:27'),
(8, 11, 8, 'hey', '2016-02-29 08:49:57'),
(9, 8, 11, 'hello', '2016-02-29 08:50:06'),
(10, 13, 11, 'hello doc', '2016-02-29 08:50:21'),
(11, 11, 13, 'Awesome', '2016-02-29 08:50:46');

-- --------------------------------------------------------

--
-- Table structure for table `autism_level`
--

CREATE TABLE IF NOT EXISTS `autism_level` (
`user_id` int(11) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autism_level`
--

INSERT INTO `autism_level` (`user_id`, `level`) VALUES
(13, 2);

-- --------------------------------------------------------

--
-- Table structure for table `autism_online`
--

CREATE TABLE IF NOT EXISTS `autism_online` (
  `id` int(11) NOT NULL,
  `lastseen` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autism_online`
--

INSERT INTO `autism_online` (`id`, `lastseen`) VALUES
(8, '2016-02-28 20:49:40'),
(13, '2016-02-28 23:37:21');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autism_users`
--

INSERT INTO `autism_users` (`id`, `name`, `type`, `phone`, `address`, `email`, `password`) VALUES
(2, 'Tester', 3, '9874563214', 'Test address', 'test@ac.com', '1234'),
(8, 'Anas M', 2, '9567212800', 'Thaiparamb Kottayam', 'anas@ac.com', '1234'),
(9, 'Admin', 1, '9496120742', 'admins address', 'admin@ac.com', '1234'),
(10, 'Jobin', 3, '9496120741', 'My Address', 'jobinar007@gmail.com', ''),
(11, 'Checker', 4, '8759641230', 'Address of Anas ', 'anas@gmail.com', '123456'),
(12, 'Shyam Krishnan', 4, '9562312545', '', 'shyam@gmail.com', '123456'),
(13, 'Sabith', 2, '9567212875', 'T', 's@gmail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `autism_videos`
--

CREATE TABLE IF NOT EXISTS `autism_videos` (
`id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `link` varchar(250) NOT NULL,
  `type` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `autism_videos`
--

INSERT INTO `autism_videos` (`id`, `name`, `link`, `type`, `level`, `user_id`) VALUES
(29, 'App preview', 'moneyball.mp4', 'video/mp4', 2, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autism_articles`
--
ALTER TABLE `autism_articles`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `autism_chat`
--
ALTER TABLE `autism_chat`
 ADD PRIMARY KEY (`id`), ADD KEY `from` (`from_id`,`to_id`), ADD KEY `from_id` (`from_id`,`to_id`), ADD KEY `to_id` (`to_id`);

--
-- Indexes for table `autism_level`
--
ALTER TABLE `autism_level`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `autism_online`
--
ALTER TABLE `autism_online`
 ADD PRIMARY KEY (`id`), ADD KEY `id` (`id`);

--
-- Indexes for table `autism_users`
--
ALTER TABLE `autism_users`
 ADD PRIMARY KEY (`id`), ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `autism_videos`
--
ALTER TABLE `autism_videos`
 ADD PRIMARY KEY (`id`), ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `autism_articles`
--
ALTER TABLE `autism_articles`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `autism_chat`
--
ALTER TABLE `autism_chat`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `autism_level`
--
ALTER TABLE `autism_level`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `autism_users`
--
ALTER TABLE `autism_users`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `autism_videos`
--
ALTER TABLE `autism_videos`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=31;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `autism_articles`
--
ALTER TABLE `autism_articles`
ADD CONSTRAINT `autism_articles_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `autism_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `autism_chat`
--
ALTER TABLE `autism_chat`
ADD CONSTRAINT `autism_chat_ibfk_1` FOREIGN KEY (`from_id`) REFERENCES `autism_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `autism_chat_ibfk_2` FOREIGN KEY (`to_id`) REFERENCES `autism_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `autism_level`
--
ALTER TABLE `autism_level`
ADD CONSTRAINT `autism_level_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `autism_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `autism_online`
--
ALTER TABLE `autism_online`
ADD CONSTRAINT `autism_online_ibfk_1` FOREIGN KEY (`id`) REFERENCES `autism_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `autism_videos`
--
ALTER TABLE `autism_videos`
ADD CONSTRAINT `autism_videos_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `autism_users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
