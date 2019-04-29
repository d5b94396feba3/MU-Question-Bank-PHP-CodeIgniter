-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 28, 2019 at 07:26 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mu_question_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_info`
--

CREATE TABLE `admin_info` (
  `user_no` int(12) NOT NULL,
  `ad_user_name` varchar(120) NOT NULL,
  `ad_user_pass` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_info`
--

INSERT INTO `admin_info` (`user_no`, `ad_user_name`, `ad_user_pass`) VALUES
(2, 'shahibur66', '7c497868c9e6d3e4cf2e87396372cd3b');

-- --------------------------------------------------------

--
-- Table structure for table `question_info`
--

CREATE TABLE `question_info` (
  `q_id` int(12) NOT NULL,
  `q_year` year(4) NOT NULL,
  `q_type` varchar(120) NOT NULL,
  `q_code` varchar(120) NOT NULL,
  `q_title` varchar(225) NOT NULL,
  `q_dept` varchar(120) NOT NULL,
  `q_file` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question_info`
--

INSERT INTO `question_info` (`q_id`, `q_year`, `q_type`, `q_code`, `q_title`, `q_dept`, `q_file`) VALUES
(2, 2017, 'Class Test', 'CSE 165', 'Algorithms', 'CSE', 'Basic LR.pdf'),
(3, 2018, 'Midterm', 'CSE 237', 'Data Structure16554', 'CSE', 'Basic LR.pdf'),
(4, 2017, 'Class Test', 'CSE 235', 'Computer Networking', 'CSE 321', 'Basic LR.pdf'),
(5, 2016, 'Class Test', 'CSE 345', 'Programming ', 'CSE', 'Basic LR.pdf'),
(6, 2016, 'Midterm', 'CSE 125', 'Physics I', 'EEE', 'Basic LR.pdf'),
(7, 2017, 'Final', 'CSE 215', 'Physics II', 'EEE', 'Basic LR.pdf'),
(8, 2018, 'Midterm', 'CSE 732', 'English I', 'CSE', 'Basic LR.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_no` int(12) NOT NULL,
  `batch_id` varchar(25) NOT NULL,
  `dept` varchar(120) NOT NULL,
  `user_name` varchar(120) NOT NULL,
  `user_pass` varchar(225) NOT NULL,
  `uesr_email` varchar(120) NOT NULL,
  `phone` text NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_no`, `batch_id`, `dept`, `user_name`, `user_pass`, `uesr_email`, `phone`, `created_date`) VALUES
(1, '161-115-061', 'CSE', 'shahibur55', '25d55ad283aa400af464c76d713c07ad\r\n', 'koexample514@gmail.com', '01762XXXXXX', '2019-03-28'),
(4, '161-115-061', 'CSE', 'shahibur66', '7c497868c9e6d3e4cf2e87396372cd3b', 'koexample514@gmail.com', '01762XXXXXX', '2019-04-01'),
(5, '161-115-061', 'CSE', 'srs66', '7c497868c9e6d3e4cf2e87396372cd3b', 'koexample514@gmail.com', '01762XXXXXX', '2019-04-01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_info`
--
ALTER TABLE `admin_info`
  ADD PRIMARY KEY (`user_no`);

--
-- Indexes for table `question_info`
--
ALTER TABLE `question_info`
  ADD PRIMARY KEY (`q_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_info`
--
ALTER TABLE `admin_info`
  MODIFY `user_no` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question_info`
--
ALTER TABLE `question_info`
  MODIFY `q_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_no` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
