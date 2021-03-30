-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 03, 2018 at 02:58 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simmi`
--

-- --------------------------------------------------------

--
-- Table structure for table `feed`
--

CREATE TABLE `feed` (
  `id` varchar(255) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feed`
--

INSERT INTO `feed` (`id`, `text`, `photo`) VALUES
('rai@gmail.com', 'hello', ''),
('rai@gmail.com', '', 'Aburame Shino.jpg'),
('rai@gmail.com', 'yo\r\n', ''),
('rai@gmail.com', '', 'Hatake Kakashi.jpg'),
('ann@gmail.com', 'hi', ''),
('ann@gmail.com', '', 'Haruno Sakura.jpg'),
('bisht@gmail.com', '', 'Akimichi Chouji.jpg'),
('bisht@gmail.com', 'yello', ''),
('bisht@gmail.com', 'yo', '');

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `name` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `skill` varchar(255) NOT NULL,
  `school` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `home` varchar(255) NOT NULL,
  `place` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL,
  `phone` bigint(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `language` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `other` varchar(255) NOT NULL,
  `quote` varchar(255) NOT NULL,
  `pro_pic` varchar(255) NOT NULL,
  `cov_pic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`name`, `dob`, `gender`, `skill`, `school`, `city`, `home`, `place`, `mail`, `phone`, `website`, `language`, `about`, `other`, `quote`, `pro_pic`, `cov_pic`) VALUES
('Ann Cherian', '11/11/1995', 'female', 'Teaching', 'St. Stevens High School', 'Faridabad', 'Faridabad', 'Kerala', 'ann@gmail.com', 9999999999, 'www.dilna.com', 'English, Hindi, Malyalam', 'Caring person', 'Dilna', 'Keep going', 'images (1).jpg', 'default.png'),
('Manisha Bisht', '1/1/1996', 'female', 'Content Wriring', 'Vidya Niketan School No.2', 'Faridabad', 'Faridabad', 'Faridabad', 'bisht@gmail.com', 8888888888, 'www.mani.com', 'English, Hindi', 'Sweet person', 'Manni', 'Live happy', 'Hangout.png', 'default.png'),
('Simran Kaur', '21/4/1997', 'female', 'Designing', 'Vidya Niketan School No.2', 'Faridabad', 'Faridabad', 'Punjab', 'kaur@gmail.com', 7777777777, 'www.simo.com', 'English, Hindi, Punjabi', 'Beautiful person', 'Simmi', 'Be awesome', 'Superman.jpg', 'default.png'),
('Rohit Rai', '3/12/1996', 'male', 'web development, C, C++', 'vidya mandir public school', 'faridabad', 'faridabad', 'bihar', 'rai@gmail.com', 8826791481, 'www.kuroanime.com', 'english, hindi, bhojpuri', 'boring person', 'Rai', 'We have to live till the end', 'full_size_20160226193327.png', 'default.png'),
('Simran Kaur', '21/4/1997', 'female', '', '', '', '', '', 'sim@gmail.com', 0, '', '', '', '', '', 'FairyTail.jpg', 'default.png');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `fullname` varchar(255) NOT NULL,
  `mail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`fullname`, `mail`) VALUES
('Rohit Rai', 'rai@gmail.com'),
('Ann Cherian', 'ann@gmail.com'),
('Manisha Bisht', 'bisht@gmail.com'),
('Simran Kaur', 'kaur@gmail.com'),
('Simran Kaur', 'sim@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mail` varchar(100) NOT NULL,
  `pass` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `day` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `pro_pic` varchar(225) NOT NULL,
  `cov_pic` varchar(1999) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`fname`, `lname`, `mail`, `pass`, `day`, `month`, `year`, `gender`, `pro_pic`, `cov_pic`) VALUES
('Ann', 'Cherian', 'ann@gmail.com', 'ann', 11, 11, 1995, 'female', 'images (1).jpg', 'default.png'),
('Manisha', 'Bisht', 'bisht@gmail.com', 'bisht', 1, 1, 1996, 'female', 'Hangout.png', 'default.png'),
('Simran', 'Kaur', 'kaur@gmail.com', 'kaur', 21, 4, 1997, 'female', 'Superman.jpg', 'default.png'),
('Rohit', 'Rai', 'rai@gmail.com', 'rai', 3, 12, 1996, 'male', 'full_size_20160226193327.png', 'default.png'),
('Simran', 'Kaur', 'sim@gmail.com', 'sim', 21, 4, 1997, 'female', 'FairyTail.jpg', 'default.png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`mail`),
  ADD UNIQUE KEY `mail` (`mail`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
