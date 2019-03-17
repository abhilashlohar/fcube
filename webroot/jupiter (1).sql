-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 17, 2019 at 06:48 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jupiter`
--

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `cover_image` varchar(255) NOT NULL,
  `is_approved` varchar(10) NOT NULL,
  `created_by` int(11) NOT NULL,
  `created_on` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(180) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(240) NOT NULL,
  `role` enum('Admin','Editor','Student') NOT NULL,
  `mobile` varchar(21) DEFAULT NULL,
  `password` varchar(60) NOT NULL,
  `status` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `is_system` tinyint(1) UNSIGNED NOT NULL DEFAULT '0',
  `last_login` datetime DEFAULT NULL,
  `password_token` varchar(50) DEFAULT NULL,
  `token_expiry` datetime DEFAULT NULL,
  `is_deleted` tinyint(1) UNSIGNED DEFAULT '0' COMMENT '0 - Not Deleted, Null - Deleted',
  `created_by` mediumint(8) UNSIGNED DEFAULT NULL,
  `modified_by` mediumint(8) UNSIGNED DEFAULT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `role`, `mobile`, `password`, `status`, `is_system`, `last_login`, `password_token`, `token_expiry`, `is_deleted`, `created_by`, `modified_by`, `created`, `modified`) VALUES
(1, 'admin', 'admin', 'admin@ifwworld.com', 'Admin', '98745632510', '$2y$10$pmXH3Juo4k0Iy9fMgwqetewv1T1H2EvT.c6S63osw3mMiUHWvWLgi', 1, 1, '2019-03-17 18:45:44', NULL, NULL, 0, 1, 1, '2018-06-06 00:00:00', '2019-03-17 18:45:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_is_deleted` (`email`,`is_deleted`),
  ADD KEY `FK_USERS_CREATED_BY_USERS_ID` (`created_by`),
  ADD KEY `FK_USERS_MODIFIED_BY_USERS_ID` (`modified_by`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
