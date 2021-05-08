-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2018 at 04:13 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `registration`
--

-- --------------------------------------------------------

--
-- Table structure for table `choices`
--

CREATE TABLE `choices` (
  `id` int(11) NOT NULL,
  `question_number` int(11) NOT NULL,
  `is_correct` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `choices`
--

INSERT INTO `choices` (`id`, `question_number`, `is_correct`, `image`) VALUES
(1, 1, 1, '3.jpg'),
(2, 1, 0, '11.jpg'),
(3, 1, 0, '9.jpg'),
(4, 1, 0, '2.jpg'),
(5, 2, 0, '5.jpg'),
(6, 2, 1, '12.jpg'),
(7, 2, 0, '10.jpg'),
(8, 2, 0, '1.jpg'),
(9, 3, 0, '7.jpg'),
(10, 3, 0, '14.jpg'),
(11, 3, 1, '10.jpg'),
(12, 3, 0, '15.jpg'),
(13, 4, 0, '8.jpg'),
(14, 4, 0, '9.jpg'),
(15, 4, 0, '11.jpg'),
(16, 4, 1, '6.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `commentimg`
--

CREATE TABLE `commentimg` (
  `cid` int(11) NOT NULL,
  `imgid` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `date_uploaded` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `commentimg`
--

INSERT INTO `commentimg` (`cid`, `imgid`, `uid`, `date_uploaded`, `message`) VALUES
(1, 2, '7', '2018-05-14 23:20:52', 'Please go through this images'),
(2, 1, '7', '2018-05-14 23:22:03', 'Learn this steps'),
(3, 3, '7', '2018-05-14 23:24:51', 'Not to do this '),
(4, 4, '7', '2018-05-14 23:25:54', 'Go through this images'),
(5, 6, '7', '2018-05-14 23:26:30', 'Follow this'),
(6, 1, '21', '2018-05-14 23:38:07', 'Nice picture'),
(7, 3, '21', '2018-05-14 23:38:42', 'ok '),
(8, 4, '21', '2018-05-14 23:39:19', 'Useful images'),
(9, 6, '21', '2018-05-14 23:40:16', 'Please upload more '),
(10, 1, '20', '2018-05-14 23:41:20', 'Helpful image'),
(11, 3, '20', '2018-05-14 23:42:17', 'Nice way of learning'),
(12, 5, '20', '2018-05-14 23:43:27', 'Upload more images'),
(13, 6, '20', '2018-05-14 23:43:54', 'Upload 21st february images'),
(14, 7, '18', '2018-05-15 00:15:28', 'good image');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `cid` int(11) NOT NULL,
  `videoid` int(11) NOT NULL,
  `uid` varchar(128) NOT NULL,
  `date_uploaded` datetime NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`cid`, `videoid`, `uid`, `date_uploaded`, `message`) VALUES
(1, 1, '7', '2018-05-14 23:22:26', 'Useful video for kids'),
(2, 2, '7', '2018-05-14 23:23:12', 'Follow the video'),
(3, 3, '7', '2018-05-14 23:23:59', 'Learn greeting people'),
(4, 5, '7', '2018-05-14 23:26:08', 'Eid day'),
(5, 6, '7', '2018-05-14 23:26:45', 'Baishakh celebrations'),
(6, 1, '21', '2018-05-14 23:38:28', 'Very helpful'),
(7, 3, '21', '2018-05-14 23:38:52', 'Good job'),
(8, 5, '21', '2018-05-14 23:39:37', 'Nice way of teaching'),
(9, 6, '21', '2018-05-14 23:40:29', 'Good video'),
(10, 1, '20', '2018-05-14 23:41:52', 'Give more videoes'),
(11, 3, '20', '2018-05-14 23:42:41', 'Upload more '),
(12, 7, '20', '2018-05-14 23:43:14', 'Nice video'),
(13, 4, '20', '2018-05-15 00:14:13', 'informative video \r\n');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `imageid` int(11) NOT NULL,
  `imagetype` text NOT NULL,
  `imageDescription` text NOT NULL,
  `imageuploaded` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`imageid`, `imagetype`, `imageDescription`, `imageuploaded`) VALUES
(1, 'DailyActivity', 'How to brush teeth', '30180537_1860372280926931_1105269339_n.png'),
(2, 'DailyActivity', 'Steps of washing hands', '30180324_1860372330926926_1926898444_n (1).png'),
(3, 'Manner', 'How to behave in public place', '30179807_1860372204260272_385513339_n.png'),
(4, 'Occasion', 'How to celebrate Eid day', 'PhotoGrid_1523887440846.jpg'),
(5, 'Occasion', 'Birthday Celebrations', 'cb75f1ff15762ccf0357ecfb91766322.jpg'),
(6, 'Culture', '16th December Victory day', 'cor1.jpg'),
(7, 'Culture', 'Pahela Baishakh Bengali new year', 'jsdfwf.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `question_number` int(11) NOT NULL,
  `text` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`question_number`, `text`) VALUES
(1, 'What is the correct picture of Tooth brushing?'),
(2, 'What is the correct picture of Using Dustbin?'),
(3, 'What is the correct picture of washing hand?'),
(4, 'What is the correct picture of birthday celebration?');

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

CREATE TABLE `report` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `score` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`id`, `name`, `score`) VALUES
(1, 'shaila', 4),
(17, 'mist', 3),
(23, 'tonni', 4),
(26, 'arabi', 4),
(27, 'shawon', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `role`) VALUES
(7, 'Add', 'abtaheef@gmail.com', '34ec78fcc91ffb1e54cd85e4a0924332', 'Admin'),
(17, 'mist', 'mist@gmail.com', '33e16c8a3da401a5625838638cc5634b', 'Parent'),
(18, 'Ema', 'ema@gmail.com', '93bdb73b49e88b5ce23da0509da1b8ac', 'Teacher'),
(19, 'Fatema', 'Fatema@gmail.com', 'e98222275fed1ee02bf908216586c63d', 'Admin'),
(20, 'Shaila', 'shaila201514013@gmail.com', 'b36dbf12a07c118d5265b269c423b4f0', 'Parent'),
(21, 'mila', 'mila@gmail.com', 'f562f7f28a039094f7b602c033f106a4', 'Teacher'),
(22, 'abc', 'abc@g.com', '900150983cd24fb0d6963f7d28e17f72', 'Parent'),
(31, 'tonni', 'fcfg@hhj', 'b06f4f189208af2eb96e850c97e13bdc', 'Parent'),
(32, 'arabi', 'gjgh@gh.vom', '271f6876928a7a8b2678fa4bb0b89612', 'Parent'),
(33, 'shawon', 'sdgfd@hghh.vom', 'eb54c0d10f987429551feea863502171', 'Parent');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `vid` int(11) NOT NULL,
  `type` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL,
  `filename` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `video`
--

INSERT INTO `video` (`vid`, `type`, `description`, `filename`) VALUES
(1, 'DailyActivity', 'How to brush teeth step by step', 'BRASHFINALLLL.mp4'),
(2, 'DailyActivity', 'How to wash hands', 'washing hand.mp4'),
(3, 'Manner', 'How to greet with others', 'Greetings.mp4'),
(4, 'Manner', 'How to use dustbin', 'bin.mp4'),
(5, 'Occasion', 'Eid-ul-fiter Celebrations', 'eid.mp4'),
(6, 'Culture', 'How to celebrate Pahela baishakh', 'boishakhfinal.mp4'),
(7, 'Occasion', 'Eid-ul-Azha celebrations', 'Eid_ul_fiter.mp4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `choices`
--
ALTER TABLE `choices`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `commentimg`
--
ALTER TABLE `commentimg`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`imageid`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`question_number`);

--
-- Indexes for table `report`
--
ALTER TABLE `report`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `choices`
--
ALTER TABLE `choices`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `commentimg`
--
ALTER TABLE `commentimg`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `imageid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `report`
--
ALTER TABLE `report`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `vid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
