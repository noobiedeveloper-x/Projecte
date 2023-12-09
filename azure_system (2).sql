-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2023 at 07:28 AM
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
-- Database: `azure_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `azure`
--

CREATE TABLE `azure` (
  `id` int(11) NOT NULL,
  `serialkey` int(15) NOT NULL,
  `name` varchar(12) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `card` varchar(16) DEFAULT NULL,
  `expiry` varchar(5) DEFAULT NULL,
  `cvv` varchar(3) DEFAULT NULL,
  `bought` varchar(255) DEFAULT NULL,
  `new_datetime` date DEFAULT curdate()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `azure`
--

INSERT INTO `azure` (`id`, `serialkey`, `name`, `email`, `card`, `expiry`, `cvv`, `bought`, `new_datetime`) VALUES
(15, 0, 'qceqecqw', 'titaniumxp45@gmail.com', '5416541654654', '3245', '123', 'CCENTY-TOOL', '2023-11-24'),
(16, 0, 'kael', 'qweqweqwecqwe', '4124124', '123', '123', 'CCENTY-TOOL', '2023-11-24'),
(18, 2147483647, 'qwevqwei', 'qwveqwev', 'qqwe123123', '12312', '123', 'CCENTY-TOOL', '2023-11-24'),
(21, 2147483647, 'kle', 'kleinlacastesantos13@gmail.com', '453345334', '1244', '232', 'CCENTY-TOOL', '2023-12-05'),
(24, 2147483647, 'kle', 'kleinlacastesantos13@gmail.com', '2344', '44', '44', 'Starter', '2023-12-05'),
(25, 2147483647, 'qweqwe', 'qweqweqwe', 'qwe23213', '12312', '312', 'Starter-Android', '2023-12-05'),
(26, 2147483647, 'kle', 'kleinlacastesantos13@gmail.com', '4124124', '1245', '123', 'Quick-Help-300', '2023-12-06'),
(29, 2147483647, 'qceqecqw', 'titaniumxp45@gmail.com', '2344', '1234', '123', 'Quick-Help-300', '2023-12-09');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `NewDateColumn` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`, `NewDateColumn`) VALUES
(2, 'doctor', 'titaniumxp45@gmail.com', 'qwevqwevqwevqwev', '2023-12-02 01:34:03'),
(3, 'doctor', 'titaniumxp45@gmail.com', 'qvweqwevqwevqe', '2023-12-02 01:34:03'),
(4, 'Doctor', 'titaniumxp45@gmail.com', 'cwqeqecqwce', '2023-12-02 01:34:03'),
(6, 'klein', 'klein', 'qwevqwevqwevqwev', '2023-12-05 11:55:00'),
(8, 'titaniumxp45@gmail.com', 'titaniumxp45@gmail.com', 'qwveqwevqwevqwevqwevqevqwevqwev', '2023-12-09 06:21:45'),
(9, 'elkropvwekrpowekropwk', 'kreopswrkvweopkrv', 'asdcasdcasdcasdcascd', '2023-12-09 06:22:20');

-- --------------------------------------------------------

--
-- Table structure for table `useraccounts`
--

CREATE TABLE `useraccounts` (
  `id` int(11) NOT NULL,
  `username` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `useraccounts`
--

INSERT INTO `useraccounts` (`id`, `username`, `password`) VALUES
(1, 'Clyde', 'Clyde');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `azure`
--
ALTER TABLE `azure`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useraccounts`
--
ALTER TABLE `useraccounts`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `azure`
--
ALTER TABLE `azure`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `useraccounts`
--
ALTER TABLE `useraccounts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
