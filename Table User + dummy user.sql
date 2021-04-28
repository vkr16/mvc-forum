-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2021 at 02:47 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fullname` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'user.png',
  `register_date` date NOT NULL DEFAULT current_timestamp(),
  `rank` enum('Newbie','Helper','Ambitious','Educated','Expert','Professional','Genius') NOT NULL DEFAULT 'Newbie',
  `points` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `photo`, `register_date`, `rank`, `points`) VALUES
(1, 'Fikri Miftah Akmaludin', 'PisangBenyek', 'fikri.droid16@gmail.com', '$2y$10$c8X5Moi2YaELTbPEaHZr4OcCSkpwqAUsPFKKDH.Te/YNbOqRE5vxa', 'usr1.jpeg', '2021-04-01', 'Educated', 864),
(2, 'Nadira Reskika', 'MustikaNadira', 'must.nadira@gmail.com', '$2y$10$P.Jdf8QmA/WaxH9T1PbC0.mPMo4aKZxUv.Sh/c6Tjsx8K0VFSKvAS', 'usr11.jpeg', '2021-04-11', 'Ambitious', 444),
(3, 'Robby Sandy Prayoga', 'rosaPro1999', 'rosapro@gmail.com', '$2y$10$Sj4hNZ37cHChi2NZkNp3OO0DE0dInpt0GUrHmNk1DLQkyJyNjZ/6i', 'usr2.jpeg', '2021-04-24', 'Helper', 224),
(4, 'Fahri Ahmad', 'theblueboy99', 'fahriahmad@smktelkom-jkt.sch.id', '$2y$10$xAAJSHUegiUAXMxXNwGwV./xjNcCFUbnyStKsF8A9qsHWMTaH5zgS', 'usr6.jpeg', '2021-04-14', 'Newbie', 64),
(5, 'Yosia Nindra', 'yost', 'yostronaut99@ugm.ac.id', '$2y$10$pkBszHIme6DdadfP/lBRvudKUVGRVc38y./ba4G8rBCtYGy3YwhEW', 'usr8.jpeg', '2021-04-25', 'Ambitious', 480),
(6, 'Adhly Hasbi ', 'adhlyhasb1', 'adhlyhasbee@uny.ac.id', '$2y$10$m.NeRlgGLtcqvjv0Os.FYONCj38/UhFJc0DuerZmIj6EXKVDUZdIG', 'usr9.jpeg', '2021-04-06', 'Educated', 680),
(7, 'Ghazy Timor Prihanda', 'ghazytp', 'ghazytp@harvard.edu', '$2y$10$3y6ehHD/DPc9FJIY4pm1AeZo71BA0wSvsPttmaDwezfusFnvVsXKq', 'usr10.jpeg', '2021-04-10', 'Helper', 296),
(8, 'Aulia Zhafran', 'zhafran0456', 'auliazhaf@yahoo.co.id', '$2y$10$oYN/HESXEUi9xBFtMDXbR.cXc6p.c8ror388j/IVlM/it3hxaoiQO', 'usr13.jpeg', '2021-04-26', 'Newbie', 16),
(9, 'Putri Ayu Wulandari', 'AW.Putriii', 'wulandayutri@student.ub.ac.id', '$2y$10$K5WQL3/r6M9s46g3d2NUUuduuaQOabRaU1BWAolgJd9vj2iG0plXS', 'usr12.jpeg', '2021-04-04', 'Ambitious', 416),
(10, 'Zanna Kirania', 'zania.nakira', 'zania.nakira@google.com', '$2y$10$jxYc/KXaaUtHAnhCEH2qNOGr8V9x5GPBpjhed6f8h0HR9FEjwkyL6', 'usr5.jpeg', '2021-04-19', 'Expert', 1516),
(11, 'Aura Amalia', 'amalia0202', 'aurachan@net.tv', '$2y$10$Uor/lGoxEBfAc8sKMwgC5uL07OeVDvYqkA/J3.c95JO8ZuvTd/XSO', 'usr4.jpeg', '2021-04-21', 'Helper', 384),
(12, 'Vanila Ayu Devara', 'coklat_ayu', 'vanilacoklat@sft-management.co.id', '$2y$10$MIdRR43kkQq.h1/KqC5tLOAk5HJfJIaL6eHA3kUQiWARgdegsVGvm', 'usr7.jpeg', '2021-04-07', 'Ambitious', 564),
(13, 'Hadi Rosyidin', 'kodokTerbang19', 'flyingfrog@sft-management.co.id', '$2y$10$5UzSCEOGnYcx2Uof8tKFO.c.oeOlC1tup3OQcBxvtAycotZILQrki', 'usr3.jpeg', '2021-04-23', 'Newbie', 44);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
