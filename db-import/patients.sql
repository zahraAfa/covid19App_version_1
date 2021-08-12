-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2021 at 10:37 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid-19`
--

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `id` int(11) NOT NULL,
  `patients_name` varchar(255) NOT NULL,
  `patients_age` int(255) NOT NULL,
  `patients_sex` varchar(255) NOT NULL,
  `hospital_a_t` date NOT NULL,
  `icu` date DEFAULT NULL,
  `discharge` date DEFAULT NULL,
  `death` date DEFAULT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`id`, `patients_name`, `patients_age`, `patients_sex`, `hospital_a_t`, `icu`, `discharge`, `death`, `status`) VALUES
(1, 'Anisa Fatimah Azzahra', 21, 'Female', '2021-07-09', '0000-00-00', '2021-07-09', '0000-00-00', 'Discharge'),
(2, 'Anisa FA', 21, 'Female', '2021-07-09', NULL, NULL, NULL, 'Admission'),
(3, 'Anisa FA', 21, 'Female', '2021-07-09', NULL, NULL, '0000-00-00', 'Discharge'),
(4, 'Anisa FA', 21, 'Female', '2021-07-09', NULL, NULL, NULL, 'Admission'),
(5, 'Kang Chu Ning ', 23, 'Female', '2021-07-09', NULL, NULL, '0000-00-00', 'Discharge'),
(6, 'Kevin Tan', 18, 'Male', '2021-07-09', NULL, NULL, NULL, 'Admission');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
