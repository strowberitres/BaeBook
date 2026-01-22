-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2023 at 01:44 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `baebook`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `pp` varchar(255) NOT NULL DEFAULT 'default-pp.png',
  `bio` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `username`, `password`, `pp`, `bio`) VALUES
(1, 'Danea Ellery', 'sswsw', '$2y$10$0czvxpqYCnJAc79PqpohmuXfn7TMYvnawdbzXUc9Zk9p6HTmBG6va', 'sswsw6576d3b6d86925.75676530.jpg', ''),
(2, 'Elle', 'Z', '$2y$10$GOZxdIKZRwWB2BXFJywzDeZAggizUiQckcX6FSB35yqBXh3I3rxhO', 'Z6576e489e72247.53367335.jpg', ''),
(3, 'Danea Ellery', 'Pao', '$2y$10$4hy5bi1IKubwjCxTNXBerOdEmqia0ouBIJK7DketEtZnCTRx6UD5u', 'default-pp.png', ''),
(5, 'Elle', 'Noe', '$2y$10$Z1h.mfNkr75CddWxymWZM.IqM.aPLDMhFDpNYN.TsMh1UAei/M.dS', 'Noe6576fd84befd44.82272118.jpg', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
