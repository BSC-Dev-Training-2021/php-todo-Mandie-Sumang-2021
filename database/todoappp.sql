-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2021 at 12:14 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `todoappp`
--

-- --------------------------------------------------------

--
-- Table structure for table `per_page`
--

CREATE TABLE `per_page` (
  `id` int(255) NOT NULL,
  `taskCom` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(11) NOT NULL,
  `per_page` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todolist`
--

CREATE TABLE `tbl_todolist` (
  `id` int(255) NOT NULL,
  `task` varchar(255) NOT NULL,
  `status` varchar(20) NOT NULL DEFAULT 'PENDING',
  `date_added` datetime NOT NULL DEFAULT current_timestamp(),
  `date_completed` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_todolist`
--

INSERT INTO `tbl_todolist` (`id`, `task`, `status`, `date_added`, `date_completed`) VALUES
(83, 'fghfh', 'COMPLETED', '2021-11-15 09:20:08', NULL),
(89, 'bakla', 'COMPLETED', '2021-11-15 11:31:29', NULL),
(91, 'asdgfh', 'COMPLETED', '2021-11-15 11:47:20', NULL),
(110, 'gfdgdfg', 'PENDING', '2021-11-15 12:57:38', NULL),
(111, 'gfdgdfg', 'PENDING', '2021-11-15 12:57:38', NULL),
(112, 'gfdgdfg', 'PENDING', '2021-11-15 12:57:38', NULL),
(113, 'asdasd', 'PENDING', '2021-11-15 13:07:05', NULL),
(114, 'asdasd', 'PENDING', '2021-11-15 13:40:29', NULL),
(115, 'asdasd', 'PENDING', '2021-11-15 13:40:29', NULL),
(116, 'asdasd', 'PENDING', '2021-11-15 13:40:29', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `per_page`
--
ALTER TABLE `per_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_todolist`
--
ALTER TABLE `tbl_todolist`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `per_page`
--
ALTER TABLE `per_page`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_todolist`
--
ALTER TABLE `tbl_todolist`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=117;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
