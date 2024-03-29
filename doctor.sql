-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2022 at 03:04 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `doctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_appointment`
--

CREATE TABLE `tbl_appointment` (
  `a_id` int(11) NOT NULL,
  `a_status` varchar(10) DEFAULT NULL,
  `s_id` int(11) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_appointment`
--

INSERT INTO `tbl_appointment` (`a_id`, `a_status`, `s_id`, `l_id`) VALUES
(1, '1', 2, 13),
(3, '1', 1, 17),
(4, '1', 3, 17),
(5, '1', 4, 27),
(6, '1', 3, 27);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `c_id` int(11) NOT NULL,
  `c_name` varchar(50) DEFAULT NULL,
  `c_email` varchar(50) DEFAULT NULL,
  `c_subject` varchar(100) DEFAULT NULL,
  `c_phone` varchar(20) DEFAULT NULL,
  `c_message` varchar(200) DEFAULT NULL,
  `c_status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`c_id`, `c_name`, `c_email`, `c_subject`, `c_phone`, `c_message`, `c_status`) VALUES
(2, 'Doctor 20', 'doctor20@gmail.com', 'xyz', '9898989898', 'sdsd', '1'),
(3, 'Doctor 21', 'doctor21@gmail.com', 'Enquiry for Doctor', '9898989898', 'I want to join as a Doctor', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_doctor`
--

CREATE TABLE `tbl_doctor` (
  `d_id` int(11) NOT NULL,
  `d_dept` varchar(50) DEFAULT NULL,
  `d_exp` varchar(300) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_doctor`
--

INSERT INTO `tbl_doctor` (`d_id`, `d_dept`, `d_exp`, `l_id`) VALUES
(1, 'psychiatrist', '5 years', 14),
(2, 'dental', '3 years', 18),
(3, 'dental', '11 Years', 19),
(4, 'dental', '3 years', 20),
(5, 'dental', '1 year', 21),
(6, 'dental', '8 years', 22),
(7, 'neurology', '6 years', 23),
(8, 'heart', '3 years of experience', 24),
(9, 'body', '9 years', 25);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_feedback`
--

CREATE TABLE `tbl_feedback` (
  `f_id` int(11) NOT NULL,
  `feedback` varchar(255) DEFAULT NULL,
  `f_status` int(10) NOT NULL,
  `a_id` int(11) DEFAULT NULL,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_feedback`
--

INSERT INTO `tbl_feedback` (`f_id`, `feedback`, `f_status`, `a_id`, `l_id`) VALUES
(1, 'Nice', 1, 1, 13),
(3, 'happy', 1, 4, 17),
(4, 'Satified with the Service. Thank You', 1, 5, 27);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `l_id` int(11) NOT NULL,
  `l_name` varchar(50) DEFAULT NULL,
  `l_email` varchar(50) DEFAULT NULL,
  `l_phone` varchar(15) DEFAULT NULL,
  `l_pass` varchar(50) DEFAULT NULL,
  `l_add` varchar(200) DEFAULT NULL,
  `l_img` varchar(50) DEFAULT NULL,
  `l_role` varchar(10) DEFAULT NULL,
  `l_status` varchar(10) DEFAULT NULL,
  `l_active` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`l_id`, `l_name`, `l_email`, `l_phone`, `l_pass`, `l_add`, `l_img`, `l_role`, `l_status`, `l_active`) VALUES
(13, 'user1', 'thakkarzeel237@gmail.com', '9898989898', 'User1234', '  abad', 'photos/user1.jpg', '2', '1', '1'),
(14, 'doctor1', 'doctor1@gmail.com', '9898989898', 'Doctor123', 'abad', 'photos/d1.png', '3', '2', '1'),
(16, 'admin', 'admin@gmail.com', '9999999999', 'Admin123', 'abad', 'photos/user2.jpg', '1', '1', '1'),
(17, 'user2', 'user2@gmail.com', '9999999999', 'User1234', 'abad', 'photos/user3.jpg', '2', '1', '1'),
(18, 'doctor2', 'doctor2@gmail.com', '9999999999', 'Doctor123', 'abad', 'photos/d2.png', '3', '2', '1'),
(19, 'doctor3', 'doctor3@gmail.com', '9898989898', 'Doctor123', 'abad', 'photos/Default.png', '3', '2', '1'),
(20, 'doctor4', 'doctor4@gmail.com', '9898989898', 'Doctor123', 'abad', 'photos/d3.jpg', '3', '1', '1'),
(21, 'doctor5', 'doctor5@gmail.com', '9898989898', 'Doctor123', 'abad', 'photos/d1.png', '3', '2', '1'),
(22, 'doctor6', 'doctor6@gmail.com', '9898989898', 'Doctor123', 'abad', 'photos/d2.png', '3', '2', '1'),
(23, 'doctor7', 'doctor7@gmail.com', '9898989898', 'Doctor123', 'abad', 'photos/d1.png', '3', '2', '1'),
(24, 'doctor8', 'doctor8@gmail.com', '9898989898', 'Doctor123', 'abad', 'photos/d2.png', '3', '2', '1'),
(25, 'doctor9', 'doctor9@gmail.com', '9898989898', 'Doctor123', 'abad', 'photos/d3.jpg', '3', '2', '1'),
(27, 'user3', 'user3@gmail.com', '9898989898', 'User1234', 'abad', 'photos/user5.png', '2', '1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

CREATE TABLE `tbl_otp` (
  `o_id` int(11) NOT NULL,
  `otp` varchar(10) DEFAULT NULL,
  `o_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `l_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_otp`
--

INSERT INTO `tbl_otp` (`o_id`, `otp`, `o_time`, `l_id`) VALUES
(20, '234580', '2022-01-26 12:43:58', 13),
(21, '481647', '2022-01-26 13:03:45', 13),
(22, '608739', '2022-01-26 13:07:24', 13),
(23, '967807', '2022-01-26 13:11:01', 13),
(24, '902310', '2022-01-26 13:15:21', 13),
(25, '962306', '2022-01-26 13:19:38', 13),
(26, '975853', '2022-01-26 13:34:24', 13);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slot`
--

CREATE TABLE `tbl_slot` (
  `s_id` int(11) NOT NULL,
  `s_date` varchar(50) DEFAULT NULL,
  `s_start_time` varchar(50) DEFAULT NULL,
  `s_end_time` varchar(50) DEFAULT NULL,
  `s_status` varchar(10) DEFAULT NULL,
  `d_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_slot`
--

INSERT INTO `tbl_slot` (`s_id`, `s_date`, `s_start_time`, `s_end_time`, `s_status`, `d_id`) VALUES
(1, '2022-01-25', '10:00', '12:30', '1', 1),
(2, '2022-01-25', '16:00', '19:00', '1', 1),
(3, '2022-01-26', '10:00', '19:15', '1', 2),
(4, '2022-01-26', '09:00', '11:30', '1', 9),
(5, '2022-01-26', '18:21', '20:00', '1', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`c_id`);

--
-- Indexes for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`l_id`);

--
-- Indexes for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD PRIMARY KEY (`o_id`);

--
-- Indexes for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  ADD PRIMARY KEY (`s_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_appointment`
--
ALTER TABLE `tbl_appointment`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_doctor`
--
ALTER TABLE `tbl_doctor`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_feedback`
--
ALTER TABLE `tbl_feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `l_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  MODIFY `o_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_slot`
--
ALTER TABLE `tbl_slot`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
