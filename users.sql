-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2024 at 07:10 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `php_crud`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `emailAddress` varchar(255) DEFAULT NULL,
  `mobileNumber` int(10) DEFAULT NULL,
  `subjects` varchar(255) DEFAULT NULL,
  `gender` enum('male','female') DEFAULT NULL,
  `digree` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `emailAddress`, `mobileNumber`, `subjects`, `gender`, `digree`) VALUES
(20, 'Januli ', 'Nanayakkara', 'jn@example.com', 766103503, 'Chemistry,Physics,Combined Mathematics', 'female', 'IS'),
(21, 'Navindu', 'Thilakshana', 'nt@example.com', 775723246, 'Chemistry,Physics,Combined Mathematics', 'male', 'IS'),
(22, 'Chamudi', 'Upeka', 'cu@example.com', 767105536, 'Physics,information Communicaton Technology', 'female', 'CS'),
(23, 'Noji', 'Yudara', 'ny@example.com', 703517563, 'Chemistry,Physics,Combined Mathematics', 'female', 'IS'),
(24, 'Kavindi', 'Basnayake', 'kb@example.com', 763281362, 'Chemistry,Physics,Combined Mathematics', 'female', 'IS'),
(25, 'Hamdhi', 'Hamza', 'hh@example.com', 770378393, 'Physics,Combined Mathematics,information Communicaton Technology', 'male', 'IS'),
(26, 'Kaviru', 'Hapuarachchi', 'kh@example.com', 717779334, 'Physics,Combined Mathematics,information Communicaton Technology', 'male', 'IS'),
(27, 'Jaith', 'Lomitha', 'jl@example.com', 767120123, 'Chemistry,Physics,information Communicaton Technology', 'male', 'CS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`),
  ADD UNIQUE KEY `emailAddress_2` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
