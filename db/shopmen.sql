-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 03, 2023 at 05:48 AM
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
-- Database: `shopmen`
--

-- --------------------------------------------------------

--
-- Table structure for table `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id_loai_sp` int(10) NOT NULL,
  `ten_loai_sp` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `loai_sp`
--

INSERT INTO `loai_sp` (`id_loai_sp`, `ten_loai_sp`) VALUES
(1, 'Áo blazer'),
(2, 'Bộ Suit'),
(3, 'Quần âu'),
(4, 'Quần Kaki');

-- --------------------------------------------------------

--
-- Table structure for table `sp`
--

CREATE TABLE `sp` (
  `id_sp` int(10) NOT NULL,
  `ten_sp` varchar(255) NOT NULL,
  `anh_sp` varchar(255) NOT NULL,
  `gia_sp` varchar(255) DEFAULT NULL,
  `so_luong_sp` int(11) NOT NULL,
  `mo_ta_sp` text NOT NULL,
  `id_loai_sp` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sp`
--

INSERT INTO `sp` (`id_sp`, `ten_sp`, `anh_sp`, `gia_sp`, `so_luong_sp`, `mo_ta_sp`, `id_loai_sp`) VALUES
(2123124, 'Áo balzer', 'Suit1.jpg', '1111', 1, '312312', 1),
(2123127, 'adasdad', '367683276_322371816981890_3135102577652478457_n.jpg', '36 000 ', 1, '1', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UserID` int(11) NOT NULL,
  `UserName` varchar(255) DEFAULT NULL,
  `Email` varchar(255) DEFAULT NULL,
  `Password` varchar(255) DEFAULT NULL,
  `PhoneNumber` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UserID`, `UserName`, `Email`, `Password`, `PhoneNumber`) VALUES
(3, '123', '123', '202cb962ac59075b964b07152d234b70', NULL),
(4, '234', '234@gmail.com', '202cb962ac59075b964b07152d234b70', NULL),
(5, 'asd', '2345@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', NULL),
(6, 'admin', 'binh141023@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id_loai_sp`);

--
-- Indexes for table `sp`
--
ALTER TABLE `sp`
  ADD PRIMARY KEY (`id_sp`),
  ADD KEY `id_loai_sp` (`id_loai_sp`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id_loai_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `sp`
--
ALTER TABLE `sp`
  MODIFY `id_sp` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2123128;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `sp`
--
ALTER TABLE `sp`
  ADD CONSTRAINT `sp_ibfk_1` FOREIGN KEY (`id_loai_sp`) REFERENCES `loai_sp` (`id_loai_sp`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
