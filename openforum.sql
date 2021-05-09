-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 09, 2021 at 09:27 PM
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
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
(8, 1, 'Hai apa kabar ?', 'General', '2021-05-02 11:08:22'),
(9, 1, 'bisa bantu saya untuk mengatasi C:\\xampp\\htdocs\\mvc-forum\\app\\views\\dashboard\\index.php on line\r\n70\r\n\">', 'Programming', '2021-05-02 11:09:05'),
(10, 1, 'Bisa bantu aku naik ke mmr 7000 ?', 'Gaming', '2021-05-02 11:12:54'),
(12, 1, 'hai kamu wibu ', 'Movie', '2021-05-02 11:14:24'),
(15, 2, 'Ada mau berkenalan denganku ?', 'General', '2021-05-02 11:19:47'),
(16, 2, 'Bagaimana caranya menggunakan pointer pada C++ ?', 'Programming', '2021-05-02 11:20:14'),
(17, 2, 'Ada yang mau join sama team ML ? -1 mid', 'Gaming', '2021-05-02 11:20:50'),
(18, 2, 'apakah ada yang menjual tiket konser Ed Sheeran', 'Music', '2021-05-02 11:21:15'),
(19, 2, 'ada kah disini yang mau nonton malam ini ?\r\n', 'Movie', '2021-05-02 11:22:17'),
(20, 2, 'Aku sedang mencari davinci code', 'Book', '2021-05-02 11:22:43'),
(21, 2, 'ada yang menjual kanvas ukuran 30x30 cm ?', 'Art', '2021-05-02 11:23:18'),
(22, 3, 'hai semua selamat pagi', 'General', '2021-05-02 11:26:42'),
(23, 3, 'Aku butuh desain web segera', 'Programming', '2021-05-02 11:27:05'),
(24, 3, 'ada yang main Fifa21 ?', 'Gaming', '2021-05-02 11:27:37'),
(25, 3, 'Ada yang nonton konser tipe-x ?', 'Music', '2021-05-02 11:27:57'),
(26, 3, 'apakah kita sama tak mengerti dengan drama korea ?', 'Movie', '2021-05-02 11:28:26'),
(27, 3, 'Aku butuh editor untuk buku ku ', 'Book', '2021-05-02 11:28:49'),
(28, 3, 'ada yang mau lukisan pantai ku ?', 'General', '2021-05-02 11:29:09'),
(29, 4, 'aku butuh tukang tambal ban', 'General', '2021-05-02 11:30:58'),
(30, 4, 'ajarin aku dasar programing dong', 'Programming', '2021-05-02 11:31:21'),
(31, 4, 'butuh member clan CoC -2 ', 'Gaming', '2021-05-02 11:31:50'),
(32, 4, 'ada yang suka blues ?', 'Music', '2021-05-02 11:32:08'),
(33, 4, 'aku sangat suka titanic', 'Movie', '2021-05-02 11:32:19'),
(34, 4, 'aku ngga bisa paham tentang buku matemtika diskrit', 'Book', '2021-05-02 11:32:48'),
(35, 4, 'apakah rambutku bagus ?', 'Art', '2021-05-02 11:33:04'),
(36, 5, 'aku mencari pria sixpack ', 'General', '2021-05-02 11:34:31'),
(37, 5, 'aku ingin belajar mengenai html,css,javascript, ui ux. Ada yang bisa bantu ?', 'Programming', '2021-05-02 11:35:19'),
(38, 5, 'ayo join party dota -1 offline mmr 8500', 'Gaming', '2021-05-02 11:35:52'),
(39, 5, 'aku ingin nonton konser', 'Music', '2021-05-02 11:36:08'),
(40, 5, 'uuuuuuuu ada yang sama sama pensaran dengan lanjutan sinetron kemarin ?', 'Movie', '2021-05-02 11:36:51'),
(41, 5, 'aku sangat suka komik', 'Book', '2021-05-02 11:37:04'),
(42, 5, 'aku ingin belajar melukis di atas batu', 'Art', '2021-05-02 11:37:26'),
(43, 6, 'hai selamat malam para ilmuan', 'General', '2021-05-02 11:39:19'),
(44, 6, 'ada yang mau belajar pemrograman robot ?', 'Programming', '2021-05-02 11:39:44'),
(45, 6, 'aku ingin membuat team e-sport. Butuh mid laner dota mmr 9000 up', 'Gaming', '2021-05-02 11:40:20'),
(46, 6, 'wow orkestra kemarin di italia sanagat menyenangkan', 'Music', '2021-05-02 11:40:50'),
(47, 6, 'aku butuh orang sebagai subjek buku ku yang terbaru', 'Book', '2021-05-02 11:41:22'),
(48, 6, 'ada yang pernah ke vatikan melihat karya michelangelo ?', 'Art', '2021-05-02 11:41:56'),
(49, 7, 'ada rekomendasi tempat cukur rambut ?', 'General', '2021-05-02 11:44:10'),
(50, 7, 'bagaimana cara membuat klasifikasi dengan K-NN ?', 'Programming', '2021-05-02 11:44:58'),
(51, 7, 'ayo berlayar di steam', 'Gaming', '2021-05-02 11:45:09'),
(52, 7, 'ada yang jual tiket konser tulus ?', 'Music', '2021-05-02 11:45:27'),
(53, 7, 'dijual tiket stand by me 2. Ga jadi nonton nih aku', 'Movie', '2021-05-02 11:45:50'),
(54, 7, 'ada lomba bedah buku ni di granmedia', 'Book', '2021-05-02 11:46:12'),
(55, 7, 'seni adalah ledakan ahhahahahha', 'Art', '2021-05-02 11:46:33'),
(56, 8, 'gimana jenggotku ?', 'General', '2021-05-02 11:47:15'),
(57, 8, 'aku butuh private belajar python', 'Programming', '2021-05-02 11:47:37'),
(58, 8, 'aku tidak suka bermain game kecuali minecraft', 'Gaming', '2021-05-02 11:48:02'),
(59, 8, 'yo yooooooo duckdown at 10 a.m', 'Music', '2021-05-02 11:48:41'),
(60, 8, 'ada yang tau jual dvd national geo wild ?', 'Movie', '2021-05-02 11:49:09'),
(61, 8, 'ada yang tempat jual buku kiloan ?', 'Book', '2021-05-02 11:49:28'),
(62, 8, 'uuuuuu aku menjual cat pilok warna hitam merah biru', 'Art', '2021-05-02 11:50:00'),
(63, 9, 'aw aw ih ih gelay', 'General', '2021-05-02 11:51:21'),
(64, 9, 'butuh programing android untuk lomba', 'Programming', '2021-05-02 11:51:48'),
(65, 9, 'ayoo bantu aku main harvestmoon', 'Gaming', '2021-05-02 11:52:02'),
(66, 9, 'nonton nadien lagi nihhh', 'Music', '2021-05-02 11:52:17'),
(67, 9, 'twilight mau diulang berpa kali pun tetep suka, setuju ?', 'Movie', '2021-05-02 11:52:45'),
(68, 9, 'bumi bulan matahri bintang the best novel ever form tere liye', 'Book', '2021-05-02 11:53:14'),
(69, 9, 'aku mau mencoba melukis gitarku sendiri, ada saran gambar ?', 'Art', '2021-05-02 11:53:37'),
(70, 10, 'im the best from the best ever ', 'General', '2021-05-02 11:55:26'),
(71, 10, 'ternyata belajar C itu seru ya', 'Programming', '2021-05-02 11:55:55'),
(72, 10, 'aku butuh support ML aku main safelane', 'Gaming', '2021-05-02 11:56:24'),
(73, 10, 'wawwww 90\'s music no debat', 'Music', '2021-05-02 11:56:44'),
(74, 10, 'ayo nonton bareng OVJ', 'Movie', '2021-05-02 11:57:13'),
(75, 10, 'need IEEE biomedis paper', 'Book', '2021-05-02 11:58:11'),
(76, 10, 'ada yang tau teori konspirasi lukisan jamuan terkahir davinci ?', 'Art', '2021-05-02 11:58:55'),
(77, 11, 'nice day good night', 'General', '2021-05-02 11:59:39'),
(78, 11, 'aduhhh stackoverflow thank you banget dah pokoknya', 'Programming', '2021-05-02 12:00:02'),
(79, 11, 'game moba buat newbie dong', 'Gaming', '2021-05-02 12:00:21'),
(80, 11, 'ga sabar nunggu java jazz 2021', 'Music', '2021-05-02 12:00:39'),
(81, 11, 'jhon wick so handsome', 'Movie', '2021-05-02 12:00:57'),
(82, 11, 'ketemu siapa ya besok waktu tand tangan dee lestari', 'Book', '2021-05-02 12:01:33'),
(83, 11, 'aku suka dengan karya seni masa reinanse', 'Art', '2021-05-02 12:02:04'),
(84, 12, 'ada apa dengan aku yang pemalas gini ?', 'Programming', '2021-05-02 12:03:00'),
(85, 12, 'tensorflow.keras is good liblary right ?', 'Programming', '2021-05-02 12:03:33'),
(86, 12, 'uninstall game ??', 'Gaming', '2021-05-02 12:03:51'),
(87, 12, 'rock rock and roll, any suggest ?', 'Music', '2021-05-02 12:04:18'),
(88, 12, 'documentary film is my favorite', 'Movie', '2021-05-02 12:04:34'),
(89, 12, 'buku apa ya yang bagus untuk dibaca no romance ?', 'Book', '2021-05-02 12:04:59'),
(90, 12, 'need more art', 'Art', '2021-05-02 12:05:28'),
(91, 13, 'mimpi apa kalian semalam ?', 'General', '2021-05-02 12:08:08'),
(92, 13, 'module belajar javascript dong', 'Programming', '2021-05-02 12:08:33'),
(93, 13, 'masih ada yang main tetris ?', 'Gaming', '2021-05-02 12:08:46'),
(94, 13, 'slow music good vibes', 'Music', '2021-05-02 12:09:04'),
(95, 13, '2020 - 2021 deat film ?', 'Movie', '2021-05-02 12:09:29'),
(96, 13, 'apa ada yang suka juga baca buku anak anak ?', 'Book', '2021-05-02 12:10:07'),
(97, 13, 'galeleo tuh seniman bukan sih ?', 'Art', '2021-05-02 12:10:29'),
(98, 1, 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 'General', '2021-05-07 00:07:08'),
(99, 1, 'xdcfvghyujikolp', 'General', '2021-05-07 00:39:58'),
(100, 1, 'wibu bau bawang', 'Art', '2021-05-07 18:33:13'),
(101, 1, 'Wibu baru\r\n', 'Gaming', '2021-05-08 22:29:52');

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
  `rank` enum('Newbie','Helper','Ambitious','Educated','Expert','Professional','Genius','Brilliant') NOT NULL DEFAULT 'Newbie',
  `points` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullname`, `username`, `email`, `password`, `photo`, `register_date`, `rank`, `points`) VALUES
(1, 'Fikri Miftah Akmaludin', 'PisangBenyek', 'fikri.droid16@gmail.com', '$2y$10$c8X5Moi2YaELTbPEaHZr4OcCSkpwqAUsPFKKDH.Te/YNbOqRE5vxa', 'usr1.jpeg', '2021-04-01 00:00:00', 'Helper', 881),
(2, 'Nadira Reskika', 'MustikaNadira', 'must.nadira@gmail.com', '$2y$10$P.Jdf8QmA/WaxH9T1PbC0.mPMo4aKZxUv.Sh/c6Tjsx8K0VFSKvAS', 'usr11.jpeg', '2021-04-11 00:00:00', 'Ambitious', 444),
(3, 'Robby Sandy Prayoga', 'rosaPro1999', 'rosapro@gmail.com', '$2y$10$Sj4hNZ37cHChi2NZkNp3OO0DE0dInpt0GUrHmNk1DLQkyJyNjZ/6i', 'usr2.jpeg', '2021-04-24 00:00:00', 'Helper', 224),
(4, 'Fahri Ahmad', 'theblueboy99', 'fahriahmad@smktelkom-jkt.sch.id', '$2y$10$xAAJSHUegiUAXMxXNwGwV./xjNcCFUbnyStKsF8A9qsHWMTaH5zgS', 'usr6.jpeg', '2021-04-14 00:00:00', 'Newbie', 64),
(5, 'Yosia Nindra', 'yost', 'yostronaut99@ugm.ac.id', '$2y$10$pkBszHIme6DdadfP/lBRvudKUVGRVc38y./ba4G8rBCtYGy3YwhEW', 'usr8.jpeg', '2021-04-25 00:00:00', 'Ambitious', 480),
(6, 'Adhly Hasbi ', 'adhlyhasb1', 'adhlyhasbee@uny.ac.id', '$2y$10$m.NeRlgGLtcqvjv0Os.FYONCj38/UhFJc0DuerZmIj6EXKVDUZdIG', 'usr9.jpeg', '2021-04-06 00:00:00', 'Educated', 680),
(7, 'Ghazy Timor Prihanda', 'ghazytp', 'ghazytp@harvard.edu', '$2y$10$3y6ehHD/DPc9FJIY4pm1AeZo71BA0wSvsPttmaDwezfusFnvVsXKq', 'usr10.jpeg', '2021-04-10 00:00:00', 'Helper', 296),
(8, 'Aulia Zhafran', 'zhafran0456', 'auliazhaf@yahoo.co.id', '$2y$10$oYN/HESXEUi9xBFtMDXbR.cXc6p.c8ror388j/IVlM/it3hxaoiQO', 'usr13.jpeg', '2021-04-26 00:00:00', 'Newbie', 16),
(9, 'Putri Ayu Wulandari', 'AW.Putriii', 'wulandayutri@student.ub.ac.id', '$2y$10$K5WQL3/r6M9s46g3d2NUUuduuaQOabRaU1BWAolgJd9vj2iG0plXS', 'usr12.jpeg', '2021-04-04 00:00:00', 'Ambitious', 416),
(10, 'Zanna Kirania', 'zania.nakira', 'zania.nakira@google.com', '$2y$10$jxYc/KXaaUtHAnhCEH2qNOGr8V9x5GPBpjhed6f8h0HR9FEjwkyL6', 'usr5.jpeg', '2021-04-19 00:00:00', 'Expert', 1516),
(11, 'Aura Amalia', 'amalia0202', 'aurachan@net.tv', '$2y$10$Uor/lGoxEBfAc8sKMwgC5uL07OeVDvYqkA/J3.c95JO8ZuvTd/XSO', 'usr4.jpeg', '2021-04-21 00:00:00', 'Helper', 384),
(12, 'Vanila Ayu Devara', 'coklat_ayu', 'vanilacoklat@sft-management.co.id', '$2y$10$MIdRR43kkQq.h1/KqC5tLOAk5HJfJIaL6eHA3kUQiWARgdegsVGvm', 'usr7.jpeg', '2021-04-07 00:00:00', 'Ambitious', 564),
(13, 'Hadi Rosyidin', 'kodokTerbang19', 'flyingfrog@sft-management.co.id', '$2y$10$5UzSCEOGnYcx2Uof8tKFO.c.oeOlC1tup3OQcBxvtAycotZILQrki', 'usr3.jpeg', '2021-04-23 00:00:00', 'Newbie', 44),
(14, 'Achuuuu', 'kucingGarang', 'kucingTerbang@gmail.com', '$2y$10$b.sZW5wPStgkd065mJurburq9eDT7p417U48.iQTGRjsc2QHdLdvK', 'kucingGarang.png', '2021-05-10 02:25:53', 'Newbie', 0);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
