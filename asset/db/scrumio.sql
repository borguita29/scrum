-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2021 at 11:39 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `scrumio`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bulletin`
--

CREATE TABLE `tbl_bulletin` (
  `id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `client_id` int(11) NOT NULL,
  `account_id` int(11) NOT NULL,
  `team_id` int(11) NOT NULL,
  `sprint_number` int(11) NOT NULL,
  `sprint_title` int(11) NOT NULL,
  `sprint_description` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `created_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client`
--

CREATE TABLE `tbl_client` (
  `id` int(11) NOT NULL,
  `client_id` int(55) NOT NULL,
  `client_image_id` varchar(25) NOT NULL,
  `client_project_id` int(25) NOT NULL,
  `client_name` varchar(255) NOT NULL,
  `client_birthdate` date NOT NULL,
  `client_gender` enum('Male','Female') NOT NULL,
  `user_status` enum('Active','Inactive') NOT NULL,
  `account_status` enum('Verified','Not Verified') NOT NULL,
  `verified_by` varchar(55) NOT NULL,
  `verified_at` date NOT NULL,
  `created_by` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_image`
--

CREATE TABLE `tbl_client_image` (
  `id` int(11) NOT NULL,
  `client_image_id` int(55) NOT NULL,
  `client_image_name` varchar(55) NOT NULL,
  `client_image_size` int(55) NOT NULL,
  `created_at` date NOT NULL,
  `udpated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_client_info`
--

CREATE TABLE `tbl_client_info` (
  `id` int(11) NOT NULL,
  `client_id` int(55) NOT NULL,
  `client_username` varchar(55) NOT NULL,
  `client_password` varchar(55) NOT NULL,
  `client_email` varchar(55) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_image_info`
--

CREATE TABLE `tbl_image_info` (
  `id` int(11) NOT NULL,
  `image_id` int(55) NOT NULL,
  `image_name` varchar(55) NOT NULL,
  `image_size` int(55) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_project`
--

CREATE TABLE `tbl_project` (
  `id` int(11) NOT NULL,
  `project_id` int(25) NOT NULL,
  `scrum_id` int(25) NOT NULL,
  `project_name` varchar(255) NOT NULL,
  `project_leader_id` int(25) NOT NULL,
  `project_owner_id` int(25) NOT NULL,
  `project_span` varchar(55) NOT NULL,
  `project_init` date NOT NULL,
  `project_status` enum('On Progress','Hold','Terminated') NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reservation`
--

CREATE TABLE `tbl_reservation` (
  `id` int(11) NOT NULL,
  `account_id` int(55) NOT NULL,
  `client_id` int(55) NOT NULL,
  `room_id` int(55) NOT NULL,
  `sprint_id` int(11) NOT NULL,
  `reservation_id` int(55) NOT NULL,
  `reservation_title` varchar(55) NOT NULL,
  `reservation_type` enum('Client Meeting','Sprint Planning','Sprint Review','Emergency Meeting','Client Meeting','Team Meeting') NOT NULL,
  `reservation_description` varchar(255) NOT NULL,
  `reservation_date` date NOT NULL,
  `reservation_timein` time NOT NULL,
  `reservation_timeout` time NOT NULL,
  `created_by` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room`
--

CREATE TABLE `tbl_room` (
  `id` int(11) NOT NULL,
  `room_id` int(55) NOT NULL,
  `room_image_id` int(55) NOT NULL,
  `room_name` varchar(25) NOT NULL,
  `room_color` varchar(25) NOT NULL,
  `created_at` date NOT NULL,
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_room_image`
--

CREATE TABLE `tbl_room_image` (
  `id` int(11) NOT NULL,
  `room_image_id` int(55) NOT NULL,
  `image_size` int(55) NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sprint`
--

CREATE TABLE `tbl_sprint` (
  `id` int(11) NOT NULL,
  `sprint_id` int(55) NOT NULL,
  `sprint_meeting_id` int(11) NOT NULL,
  `project_id` int(55) NOT NULL,
  `account_id` int(55) NOT NULL,
  `team_id` int(55) NOT NULL,
  `client_id` int(55) NOT NULL,
  `sprint_number` int(55) NOT NULL,
  `sprint_title` varchar(55) NOT NULL,
  `sprint_description` varchar(55) NOT NULL,
  `sprint_init` date NOT NULL,
  `sprint_fin` date NOT NULL,
  `sprint_status` enum('Ongoing','Finished') NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_todo`
--

CREATE TABLE `tbl_todo` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `todo_title` varchar(255) NOT NULL,
  `todo_description` varchar(255) NOT NULL,
  `todo_dateinit` date NOT NULL,
  `todo_datefin` date NOT NULL,
  `todo_rank` enum('Highly Prioritize','Prioritize','Side','Least') NOT NULL,
  `created_at` date NOT NULL,
  `updated_by` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `team_id` int(55) NOT NULL,
  `account_id` int(55) NOT NULL,
  `image_id` int(55) NOT NULL,
  `name` varchar(50) NOT NULL,
  `nickname` varchar(10) NOT NULL,
  `age` int(55) NOT NULL,
  `gender` enum('MALE','FEMALE') NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `user_status` enum('Activated','Inactive') NOT NULL,
  `account_status` enum('Verified','Not Verified') NOT NULL,
  `verified_by` varchar(255) NOT NULL,
  `verified_at` datetime NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user_info`
--

CREATE TABLE `tbl_user_info` (
  `id` int(11) NOT NULL,
  `account_id` int(55) NOT NULL,
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL,
  `access_type` enum('User','Member','Group Leader','Admin','Superadmin') NOT NULL,
  `created_at` date NOT NULL DEFAULT current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_bulletin`
--
ALTER TABLE `tbl_bulletin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client`
--
ALTER TABLE `tbl_client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client_image`
--
ALTER TABLE `tbl_client_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_client_info`
--
ALTER TABLE `tbl_client_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_image_info`
--
ALTER TABLE `tbl_image_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_project`
--
ALTER TABLE `tbl_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room`
--
ALTER TABLE `tbl_room`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_room_image`
--
ALTER TABLE `tbl_room_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_sprint`
--
ALTER TABLE `tbl_sprint`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_bulletin`
--
ALTER TABLE `tbl_bulletin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client`
--
ALTER TABLE `tbl_client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client_image`
--
ALTER TABLE `tbl_client_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_client_info`
--
ALTER TABLE `tbl_client_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_image_info`
--
ALTER TABLE `tbl_image_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_project`
--
ALTER TABLE `tbl_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reservation`
--
ALTER TABLE `tbl_reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_room`
--
ALTER TABLE `tbl_room`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_room_image`
--
ALTER TABLE `tbl_room_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sprint`
--
ALTER TABLE `tbl_sprint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_user_info`
--
ALTER TABLE `tbl_user_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
