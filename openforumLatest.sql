-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 12, 2021 at 03:03 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `openforum`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `commenter` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `post_id` int(11) NOT NULL,
  `time_commented` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `commenter`, `content`, `post_id`, `time_commented`) VALUES
(1, 2, 'tes', 1, '2021-05-12 19:56:37'),
(2, 2, 'dssddasd', 1, '2021-05-12 20:01:41'),
(3, 2, 'sasas', 1, '2021-05-12 20:03:29'),
(4, 2, 'saas', 1, '2021-05-12 20:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `comment_id` int(11) NOT NULL,
  `sender_username` varchar(255) NOT NULL,
  `sender_photo` varchar(255) NOT NULL,
  `recipient` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `comment_id`, `sender_username`, `sender_photo`, `recipient`, `post_id`, `time`) VALUES
(1, 1, 'AuliaZhafran', 'user.png', 1, 1, '2021-05-12 19:56:37'),
(2, 2, 'AuliaZhafran', 'user.png', 1, 1, '2021-05-12 20:01:41'),
(3, 3, 'AuliaZhafran', 'user.png', 1, 1, '2021-05-12 20:03:29'),
(4, 4, 'AuliaZhafran', 'user.png', 1, 1, '2021-05-12 20:03:32');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `owner` int(11) NOT NULL,
  `content` mediumtext NOT NULL,
  `category` varchar(25) NOT NULL DEFAULT 'General',
  `time_posted` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `owner`, `content`, `category`, `time_posted`) VALUES
(1, 1, 'sjdfgsdfs', 'General', '2021-05-12 19:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'user.png',
  `register_date` datetime NOT NULL DEFAULT current_timestamp(),
  `peringkat` enum('Newbie','Helper','Ambitious','Educated','Expert','Professional','Genius','Brilliant') NOT NULL DEFAULT 'Newbie',
  `points` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `photo`, `register_date`, `peringkat`, `points`) VALUES
(1, 'Fikri Miftah Akmaludin', 'FikriMiftah', 'fikrimiftah@student.ub.ac.id', '$2y$10$uBJPtiiAt3BBX21iLO5hLerzyv0pH.EmuARLyNwa.ICE6koKBESDu', 'FikriMiftah.jpg', '2021-05-12 19:55:46', 'Newbie', 0),
(2, 'Aulia Zhafran', 'AuliaZhafran', 'zhafran@gmail.com', '$2y$10$s5t4845XO4ThjkWcwjA5r.WFWMcoUlImTtb9POUvJADDR9olXotW.', 'user.png', '2021-05-12 19:56:26', 'Newbie', 68);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
