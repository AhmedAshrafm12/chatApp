-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2021 at 12:13 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatapp`
--

-- --------------------------------------------------------

--
-- Table structure for table `massages`
--

CREATE TABLE `massages` (
  `income_id` int(11) NOT NULL,
  `outgo_id` int(11) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `massages`
--

INSERT INTO `massages` (`income_id`, `outgo_id`, `msg`) VALUES
(2, 1, 'sdf'),
(2, 1, '\'wet4'),
(1, 2, 'zxv'),
(1, 2, ',sdg'),
(1, 2, ',xcv'),
(2, 1, 'xcm'),
(2, 1, 'xcb'),
(2, 1, 'sdfg'),
(2, 1, 'ازيك يا صاحبي'),
(1, 2, 'الحمدلله'),
(2, 1, 'انت عامل ايه'),
(2, 2, 'ئ'),
(2, 2, 'ضص'),
(2, 2, 'xv'),
(1, 2, 'aa'),
(1, 2, 'رءؤ'),
(1, 2, 'ؤء'),
(1, 2, 'السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم السلام عليكم '),
(2, 1, ',g'),
(2, 1, 'xcv'),
(2, 1, 'xdv'),
(2, 1, 'sdf'),
(5, 4, '1'),
(4, 5, '..'),
(4, 5, 'hello'),
(5, 4, ' ىى'),
(5, 4, '            '),
(5, 4, '                             '),
(5, 4, 'zxv'),
(5, 4, 'qwe'),
(5, 4, 'zxc'),
(5, 4, 'x'),
(5, 4, 'zxv'),
(5, 4, 'a'),
(5, 4, 'zxc'),
(5, 4, 'zxc'),
(5, 6, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(350) NOT NULL,
  `avatar` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `avatar`) VALUES
(1, 'Ahmed Naseem', 'ahmednaseem663@yahoo.com', '123', '101_photo5855051168147944785.jpg');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
