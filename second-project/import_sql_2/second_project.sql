-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2024 at 09:36 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `second_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `commissioners`
--

CREATE TABLE `commissioners` (
  `commissioner_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commissioners`
--

INSERT INTO `commissioners` (`commissioner_id`, `name`, `phone_number`) VALUES
(1, 'sudip', '+1 (983) 868-2451');

-- --------------------------------------------------------

--
-- Table structure for table `prarthis`
--

CREATE TABLE `prarthis` (
  `prarthi_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `protik_name` varchar(100) NOT NULL,
  `protik_photo` varchar(100) NOT NULL DEFAULT 'default-protik_photo.jpg',
  `election_zila` varchar(100) NOT NULL,
  `gotten_vote` int(11) NOT NULL DEFAULT 0,
  `delete_status` varchar(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `prarthis`
--

INSERT INTO `prarthis` (`prarthi_id`, `name`, `protik_name`, `protik_photo`, `election_zila`, `gotten_vote`, `delete_status`) VALUES
(3, 'Nomlanga Montoya', 'Isabella Faulkner', 'Isabella Faulkner.webp', 'Rerum cupidatat et s', 1, '0'),
(4, 'Jaden Goff', 'Helen Juarez', 'Helen Juarez.jpg', 'Ab-iure-dolorem-sed ', 0, '0');

-- --------------------------------------------------------

--
-- Table structure for table `voters`
--

CREATE TABLE `voters` (
  `voter_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `date_of_birth` varchar(100) NOT NULL,
  `address` varchar(200) NOT NULL,
  `zila` varchar(100) NOT NULL,
  `upzila` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `phone_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `voter_photo` varchar(100) NOT NULL DEFAULT 'default_voter_photo.jpg',
  `given_vote` varchar(10) NOT NULL DEFAULT 'no',
  `delete_status` varchar(10) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `voters`
--

INSERT INTO `voters` (`voter_id`, `name`, `father_name`, `mother_name`, `date_of_birth`, `address`, `zila`, `upzila`, `gender`, `phone_number`, `email`, `voter_photo`, `given_vote`, `delete_status`) VALUES
(2, 'Ulysses Knight', 'Abra Durham', 'Portia Thornton', '1974-08-16', 'Aliquip similique ab', 'Aut explicabo Neque', 'Mollitia nihil volup', 'Male', '+1 (425) 726-7996', 'dibewig@mailinator.com', '2.jpg', 'yes', '1'),
(3, 'Basil Manning', 'Hayden Crane', 'Daryl Joyce', '1996-09-07', 'Libero fugiat sed qu', 'Elit iusto dolor od', 'Porro aspernatur ius', 'Male', '+1 (128) 112-8105', 'cipix@mailinator.com', '3.jpg', 'no', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commissioners`
--
ALTER TABLE `commissioners`
  ADD PRIMARY KEY (`commissioner_id`);

--
-- Indexes for table `prarthis`
--
ALTER TABLE `prarthis`
  ADD PRIMARY KEY (`prarthi_id`);

--
-- Indexes for table `voters`
--
ALTER TABLE `voters`
  ADD PRIMARY KEY (`voter_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `commissioners`
--
ALTER TABLE `commissioners`
  MODIFY `commissioner_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `prarthis`
--
ALTER TABLE `prarthis`
  MODIFY `prarthi_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `voters`
--
ALTER TABLE `voters`
  MODIFY `voter_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
