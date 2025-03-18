-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2024 at 07:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `legalremedies`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('testing', 'test@1234'),
('testing', 'test@1234'),
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `name` varchar(30) NOT NULL,
  `experience` decimal(4,0) NOT NULL,
  `Expertise` varchar(2000) NOT NULL,
  `cases` int(6) NOT NULL,
  `enrolled` varchar(4) NOT NULL,
  `user` varchar(12) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `cpass` varchar(255) NOT NULL,
  `phone` int(10) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`name`, `experience`, `Expertise`, `cases`, `enrolled`, `user`, `pass`, `cpass`, `phone`, `email`) VALUES
('tester1', '3', ' civil, criminal', 34, 'No', 'tester1', ' tester1', ' tester1', 2147483647, 'tester1@gmail.com'),
('tester10', '12', ' civil, criminal', 34, 'Yes', 'tester10', ' tester10', ' tester10', 2147483647, 'tester10@gmail.com'),
('tester11', '17', ' civil,property', 102, 'Yes', 'tester11', ' tester11', ' tester11', 789651230, 'tester11@gmail.com'),
('Tester 12', '6', ' civil, criminal,property', 88, 'Yes', 'tester12', ' tester12', ' tester12', 2147483647, 'tester122@gmail.com'),
('tester 2', '8', ' civil', 3, 'Yes', 'tester2', ' tester2', ' tester2', 2147483647, 'tester2@gmail.com'),
('tester 3', '12', ' property', 34, 'No', 'tester3', ' tester3', ' tester3', 2147483647, 'tester3@gmail.com'),
('tester 4', '12', ' Divorce', 102, 'Yes', 'tester4', ' tester4', ' tester4', 2147483647, 'tester4@gmail.com'),
('tester5', '22', ' Divorce', 112, 'Yes', 'tester5', ' tester5', ' tester5', 2147483647, 'tester5@gmail.com'),
('tester6', '7', ' Divorce', 12, 'Yes', 'tester6', ' tester6', ' tester6', 0, 'tester6@gmail.com'),
('tester9', '7', ' civil,property', 44, 'Yes', 'tester7', ' tester7', ' tester7', 2147483647, 'tester7@gmail.com'),
('tester 8', '3', ' property', 102, 'Yes', 'tester8', ' tester8', ' tester8', 2147483647, 'tester8@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`user`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
