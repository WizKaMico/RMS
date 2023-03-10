-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 10, 2023 at 08:04 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `turtle_new_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_credentials`
--

CREATE TABLE `admin_credentials` (
  `user_id` int(11) NOT NULL,
  `eid` int(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_credentials`
--

INSERT INTO `admin_credentials` (`user_id`, `eid`, `email`, `status`) VALUES
(1, 101213, 'tricore012@gmail.com', 'VALID'),
(2, 8532, 'gmfacistol@outlook.com', 'VALID');

-- --------------------------------------------------------

--
-- Table structure for table `admin_pass`
--

CREATE TABLE `admin_pass` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `password` varchar(250) NOT NULL,
  `configuration` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_pass`
--

INSERT INTO `admin_pass` (`id`, `user_id`, `password`, `configuration`) VALUES
(1, 1, 'admin', 'OFFLINE'),
(2, 1, '21232f297a57a5a743894a0e4a801fc3', 'ONLINE');

-- --------------------------------------------------------

--
-- Table structure for table `client_security`
--

CREATE TABLE `client_security` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `code` int(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `client_security`
--

INSERT INTO `client_security` (`id`, `email`, `code`, `status`, `date`) VALUES
(1, 'tricore012@gmail.com', 6750, 'USED', '2023-03-10'),
(2, 'tricore012@gmail.com', 8665, 'USED', '2023-03-10'),
(3, 'tricore012@gmail.com', 7716, 'USED', '2023-03-10'),
(4, 'tricore012@gmail.com', 8742, 'USED', '2023-03-10'),
(5, 'tricore012@gmail.com', 7500, 'USED', '2023-03-10');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `code` varchar(200) NOT NULL,
  `fname` varchar(150) NOT NULL,
  `mname` varchar(150) NOT NULL,
  `lname` varchar(150) NOT NULL,
  `address` text NOT NULL,
  `dob` date NOT NULL,
  `age` int(50) NOT NULL,
  `contact` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ref` varchar(200) NOT NULL,
  `sponmem` varchar(200) NOT NULL,
  `category` varchar(200) NOT NULL,
  `type` varchar(200) NOT NULL,
  `shirt` varchar(100) NOT NULL,
  `size` varchar(100) NOT NULL,
  `status` varchar(200) NOT NULL,
  `qr` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `code`, `fname`, `mname`, `lname`, `address`, `dob`, `age`, `contact`, `email`, `ref`, `sponmem`, `category`, `type`, `shirt`, `size`, `status`, `qr`) VALUES
(1, '6826679', 'Gerald', 'Mico', 'Facistol', '10 U206 TARRAVILLE SUBDIVISION', '1995-10-02', 28, '09166513189', 'tricore012@gmail.com', '', '', 'INTERMEDIATE RUN (3k)', 'Senior Mens (60 &amp; above)', 'Adults', 'XL', 'VALID', ''),
(2, '9788106', 'Gerald', 'Mico', 'Facistol', '10 U206 TARRAVILLE SUBDIVISION', '1995-10-02', 28, '09166513189', 'tricore012@gmail.com', '', '', 'KIDDIE RUN (400m)', 'Boys (6 years old &amp; below)', 'Kids', '10', 'VALID', ''),
(3, '8784688', 'Gerald', 'Mico', 'Facistol', '10 U206 TARRAVILLE SUBDIVISION', '2008-10-02', 15, '09166513189', 'tricore012@gmail.com', '', '', 'SHORT RUN (1k)', 'Pre-Teen Boys (10-12 years old)', 'Adults', 'M', 'VALID', ''),
(4, '7065632', 'Gerald', 'Mico', 'Facistol', '10 U206 TARRAVILLE SUBDIVISION', '2009-10-06', 14, '09166513189', 'tricore012@gmail.com', '', '', 'OPEN RUN (5k)', 'Mens', 'Adults', '2XL', 'VALID', ''),
(5, '8684793', 'Gerald', 'Mico', 'Facistol', '10 U206 TARRAVILLE SUBDIVISION', '2020-10-02', 0, '09166513189', 'tricore012@gmail.com', '', '', 'KIDDIE RUN (400m)', 'Boys (6 years old &amp; below)', 'Kids', '8', 'VALID', '');

-- --------------------------------------------------------

--
-- Table structure for table `runner`
--

CREATE TABLE `runner` (
  `id` int(11) NOT NULL,
  `code` int(50) NOT NULL,
  `start` datetime NOT NULL,
  `end` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `runner`
--

INSERT INTO `runner` (`id`, `code`, `start`, `end`) VALUES
(18, 9788106, '2023-03-11 01:45:04', '2023-03-11 01:46:22'),
(19, 8684793, '2023-03-11 01:45:04', '2023-03-11 03:02:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `admin_pass`
--
ALTER TABLE `admin_pass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `client_security`
--
ALTER TABLE `client_security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `runner`
--
ALTER TABLE `runner`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_credentials`
--
ALTER TABLE `admin_credentials`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin_pass`
--
ALTER TABLE `admin_pass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `client_security`
--
ALTER TABLE `client_security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `runner`
--
ALTER TABLE `runner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
