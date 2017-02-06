-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 06, 2017 at 02:51 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 7.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `supervisor_id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(500) NOT NULL,
  `total_budget` int(11) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `supervisor_id`, `name`, `description`, `total_budget`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'Campaigns', 'Campaign sensitization', 10000, 0, '2017-02-06 12:44:44', '0000-00-00 00:00:00'),
(2, 2, 'Production', 'Something cool', 20000, 0, '2017-02-06 13:09:52', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `supervisor`
--

CREATE TABLE `supervisor` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(300) NOT NULL,
  `salt` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `supervisor`
--

INSERT INTO `supervisor` (`id`, `names`, `email`, `phone`, `password`, `salt`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Director Supervisor', 'admin@supervisor.com', 2147483647, 'P1HzRbPXy8C2faR1nRuVV51N6/c1MmQ0OTc2MTZi', '52d497616b', 1, '2017-02-05 15:58:26', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `travel_plan`
--

CREATE TABLE `travel_plan` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `project_id` int(11) NOT NULL,
  `venue` varchar(500) NOT NULL,
  `travel_date` datetime NOT NULL,
  `days_away` int(11) NOT NULL,
  `justification` varchar(500) NOT NULL,
  `estimated_cost` decimal(10,0) NOT NULL,
  `funds_allocated` decimal(10,0) NOT NULL,
  `funds_spent` decimal(10,0) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `regional_office_destination` varchar(100) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `travel_plan`
--

INSERT INTO `travel_plan` (`id`, `user_id`, `project_id`, `venue`, `travel_date`, `days_away`, `justification`, `estimated_cost`, `funds_allocated`, `funds_spent`, `status`, `regional_office_destination`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '0', '2017-02-23 15:00:01', 20, 'Enjoy while there''s time', '20000', '0', '0', 0, 'Voi', '2017-02-06 15:31:09', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `names` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(11) NOT NULL,
  `password` varchar(300) NOT NULL,
  `salt` varchar(20) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `names`, `email`, `phone`, `password`, `salt`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Jack Bauer', 'bauer@gmail.com', 8390303, 'lIlDbTDnQsYrOk8kj3tZuDV2B/41NTcwOTg0NjA2', '5570984606', 1, '2017-02-05 17:54:29', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supervisor`
--
ALTER TABLE `supervisor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `travel_plan`
--
ALTER TABLE `travel_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `supervisor`
--
ALTER TABLE `supervisor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `travel_plan`
--
ALTER TABLE `travel_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
