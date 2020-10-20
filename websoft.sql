-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 20, 2020 at 01:34 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `websoft`
--

-- --------------------------------------------------------

--
-- Table structure for table `reg_info`
--

CREATE TABLE `reg_info` (
  `id` int(10) NOT NULL,
  `fname` text NOT NULL,
  `lname` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `gender` text NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reg_info`
--

INSERT INTO `reg_info` (`id`, `fname`, `lname`, `email`, `pass`, `gender`, `image`) VALUES
(6, 'Atikur ', 'Rahman', 'atik@gmail.com', '1234567', 'male', '16030891954a47a0db6e60853dedfcfdf08a5ca249.png'),
(7, 'MD. NAZMUL', 'SHARIF', 'atik@gmail.com', '123456', 'male', '16031655864efdd2f969559e8b1c92e99f32ded48e.jpg'),
(8, 'Moinul', 'Hasan', 'moinul@gmail.com', '123456', 'male', '16031658547fdc1a630c238af0815181f9faa190f5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mname` varchar(50) NOT NULL,
  `roll` int(10) NOT NULL,
  `bangla` float NOT NULL,
  `english` float NOT NULL,
  `math` float NOT NULL,
  `fname` varchar(50) NOT NULL,
  `inst` varchar(100) NOT NULL,
  `board` varchar(20) NOT NULL,
  `science` float NOT NULL,
  `social` float NOT NULL,
  `religion` float NOT NULL,
  `bangla_g` varchar(10) NOT NULL,
  `bangla_gp` float NOT NULL,
  `english_g` varchar(10) NOT NULL,
  `english_gp` float NOT NULL,
  `math_g` varchar(10) NOT NULL,
  `math_gp` float NOT NULL,
  `science_g` varchar(10) NOT NULL,
  `science_gp` float NOT NULL,
  `social_g` varchar(10) NOT NULL,
  `social_gp` float NOT NULL,
  `religion_g` varchar(10) NOT NULL,
  `religion_gp` float NOT NULL,
  `total_marks` float NOT NULL,
  `f_gpa` varchar(10) NOT NULL,
  `f_grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `name`, `mname`, `roll`, `bangla`, `english`, `math`, `fname`, `inst`, `board`, `science`, `social`, `religion`, `bangla_g`, `bangla_gp`, `english_g`, `english_gp`, `math_g`, `math_gp`, `science_g`, `science_gp`, `social_g`, `social_gp`, `religion_g`, `religion_gp`, `total_marks`, `f_gpa`, `f_grade`) VALUES
(2, 'Nazmul', 'Jharna AKter', 114307, 80, 80, 90, 'MD. NAZMUL HASAN SHARIF', 'Chandina Pilot ', 'Cumilla', 89, 80, 89, 'A+', 5, 'A+', 5, 'A+', 5, 'A+', 5, 'A+', 5, 'A+', 5, 508, '5', 'A+'),
(3, 'Atikur Rahman', 'jani na', 12345, 90, 80, 70, 'jani na', 'jani na', 'Dhaka', 89, 80, 89, 'A+', 5, 'A+', 5, 'A', 4, 'A+', 5, 'A+', 5, 'A+', 5, 498, '4.83333333', 'A');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reg_info`
--
ALTER TABLE `reg_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `reg_info`
--
ALTER TABLE `reg_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
