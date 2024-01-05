-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 05, 2024 at 10:05 AM
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
-- Database: `ginichat`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatdb`
--

CREATE TABLE `chatdb` (
  `ID` int(10) NOT NULL,
  `tgl` datetime NOT NULL,
  `userID` int(10) NOT NULL,
  `chatID` int(10) NOT NULL,
  `teks` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `chatdb`
--

INSERT INTO `chatdb` (`ID`, `tgl`, `userID`, `chatID`, `teks`) VALUES
(1, '2024-01-05 08:24:08', 1, 0, 'Halo%2C+apa+kabar%3F'),
(2, '2024-01-05 08:27:10', 2, 1, 'kabar+baek.+%0D%0A'),
(3, '2024-01-05 08:28:02', 2, 0, 'Putih-putih+di+kuburan...+kuntilanak.<br>Merah-merah+di+pohonan...+rambutan.<br>Kuning-kuning+di+jalanan...+%3F'),
(4, '2024-01-05 08:29:12', 3, 3, 'Hussss...'),
(5, '2024-01-05 08:29:39', 1, 3, 'Apa+itu%3F%3F%3F+hayooo'),
(6, '2024-01-05 08:30:17', 3, 0, 'Panas+kali+Medan+kelen+ini+woy...'),
(7, '2024-01-05 08:31:34', 3, 3, 'Udah+dibilang+husss+kok+malah+dibahas...');

-- --------------------------------------------------------

--
-- Table structure for table `userdb`
--

CREATE TABLE `userdb` (
  `ID` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(64) NOT NULL,
  `level` int(1) NOT NULL,
  `login` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdb`
--

INSERT INTO `userdb` (`ID`, `username`, `password`, `level`, `login`) VALUES
(1, 'admin1', '202cb962ac59075b964b07152d234b70', 1, '2024-01-05 09:01:29'),
(2, 'budi_darma', '202cb962ac59075b964b07152d234b70', 2, '0000-00-00 00:00:00'),
(3, 'operator', '202cb962ac59075b964b07152d234b70', 2, '0000-00-00 00:00:00'),
(4, 'adi', '202cb962ac59075b964b07152d234b70', 2, '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatdb`
--
ALTER TABLE `chatdb`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `userdb`
--
ALTER TABLE `userdb`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatdb`
--
ALTER TABLE `chatdb`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `userdb`
--
ALTER TABLE `userdb`
  MODIFY `ID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
