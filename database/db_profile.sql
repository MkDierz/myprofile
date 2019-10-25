-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 25, 2019 at 09:27 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_profile`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', '10406c1d7b7421b1a56f0d951e952a95');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_edu`
--

CREATE TABLE `tbl_edu` (
  `edu_id` int(3) NOT NULL,
  `edu_name` varchar(20) NOT NULL,
  `edu_yearin` int(4) NOT NULL,
  `edu_yearout` int(4) NOT NULL,
  `edu_score` varchar(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_edu`
--

INSERT INTO `tbl_edu` (`edu_id`, `edu_name`, `edu_yearin`, `edu_yearout`, `edu_score`) VALUES
(1, 'SDIT ALMUHAJIRIN', 2006, 2010, '0'),
(2, 'SMK PENERBANGAN', 2015, 2018, '9,8');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_id`
--

CREATE TABLE `tbl_id` (
  `id_id` int(2) NOT NULL,
  `id_name` varchar(30) NOT NULL,
  `id_nim` int(9) NOT NULL,
  `id_phone` int(12) NOT NULL,
  `id_email` varchar(40) NOT NULL,
  `id_ig` varchar(40) NOT NULL,
  `id_fb` varchar(30) NOT NULL,
  `id_twitter` varchar(40) NOT NULL,
  `id_address` varchar(200) NOT NULL,
  `id_github` varchar(40) NOT NULL,
  `id_profile` varchar(255) NOT NULL DEFAULT 'default.jpg'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_id`
--

INSERT INTO `tbl_id` (`id_id`, `id_name`, `id_nim`, `id_phone`, `id_email`, `id_ig`, `id_fb`, `id_twitter`, `id_address`, `id_github`, `id_profile`) VALUES
(1, 'SYIBBRAN MULAESYI', 190170066, 852085209, 'msyibbraan24@gmail.com', '@syibb.exe', 'Syibbran.Mulaesyi', '@Syib_exe', 'Aceh', 'MkDierz', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_skill`
--

CREATE TABLE `tbl_skill` (
  `skill_id` int(11) NOT NULL,
  `skill_name` varchar(40) NOT NULL,
  `skill_method` varchar(40) NOT NULL,
  `skill_time` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_skill`
--

INSERT INTO `tbl_skill` (`skill_id`, `skill_name`, `skill_method`, `skill_time`) VALUES
(1, 'MOBILE PROGRAMMING', 'FREE CLASS', '6 MONTH');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_work`
--

CREATE TABLE `tbl_work` (
  `work_id` int(4) NOT NULL,
  `work_place` varchar(40) NOT NULL,
  `work_yearin` int(4) NOT NULL,
  `work_yearout` int(4) NOT NULL,
  `work_division` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_work`
--

INSERT INTO `tbl_work` (`work_id`, `work_place`, `work_yearin`, `work_yearout`, `work_division`) VALUES
(1, 'PT. IAS', 1029, 2019, 'MAINTENACE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_edu`
--
ALTER TABLE `tbl_edu`
  ADD PRIMARY KEY (`edu_id`);

--
-- Indexes for table `tbl_id`
--
ALTER TABLE `tbl_id`
  ADD PRIMARY KEY (`id_id`);

--
-- Indexes for table `tbl_skill`
--
ALTER TABLE `tbl_skill`
  ADD PRIMARY KEY (`skill_id`);

--
-- Indexes for table `tbl_work`
--
ALTER TABLE `tbl_work`
  ADD PRIMARY KEY (`work_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_edu`
--
ALTER TABLE `tbl_edu`
  MODIFY `edu_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_id`
--
ALTER TABLE `tbl_id`
  MODIFY `id_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_skill`
--
ALTER TABLE `tbl_skill`
  MODIFY `skill_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_work`
--
ALTER TABLE `tbl_work`
  MODIFY `work_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
