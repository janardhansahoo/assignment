-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 02, 2020 at 09:26 AM
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
-- Database: `travelportal`
--

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `noofpeople` int(11) NOT NULL,
  `aadhar` varchar(12) NOT NULL,
  `fromstate` varchar(255) NOT NULL,
  `fromdistrict` varchar(255) NOT NULL,
  `todistrict` varchar(255) NOT NULL,
  `traveldatefrom` date NOT NULL,
  `traveldateto` date NOT NULL,
  `viastate1` varchar(255) NOT NULL,
  `viastate2` varchar(255) NOT NULL,
  `viastate3` varchar(255) NOT NULL,
  `applicationno` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `name`, `phone`, `noofpeople`, `aadhar`, `fromstate`, `fromdistrict`, `todistrict`, `traveldatefrom`, `traveldateto`, `viastate1`, `viastate2`, `viastate3`, `applicationno`, `status`) VALUES
(1, 'Janardhan Sahoo', '+917852967546', 12, '902563478123', 'Odisha', 'Cuttacl', 'kerala', '2020-02-25', '2020-02-24', 'Ladakh', '', '', 1872848158, ''),
(2, 'Janardhan Sadangi', '9638527418', 12, '258963754612', 'Andaman and Nicobar', 'Portblair', 'Nicobar Island', '2020-02-25', '2020-02-19', 'Andaman and Nicobar', '', '', 1706127705, 'Open'),
(4, 'Janardhan Sahoo', '7852967546', 12, '123698547852', 'Odisha', 'Portblair', 'Kerala', '2020-02-02', '2020-02-02', 'Andaman and Nicobar', '', '', 1546525085, 'Open'),
(5, 'Janardhan Sahoo', '7852967546', 12, '625489654785', 'Odisha', 'Delhi', 'Delhi', '2020-02-02', '2020-02-02', 'Andaman and Nicobar', '', '', 811834975, 'Accepted'),
(6, 'Banshidhar Sahoo', '9980223633', 3, '258963457815', 'Maharashtra', 'Mankhurd', 'Jagatsinghpur', '2020-06-02', '2020-06-05', 'Telangana', '', '', 404468274, 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1590385540),
('m130524_201442_init', 1590385542),
('m190124_110200_add_verification_token_column_to_user_table', 1590385543);

-- --------------------------------------------------------

--
-- Table structure for table `reset`
--

CREATE TABLE `reset` (
  `id` int(11) NOT NULL,
  `code` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`) VALUES
(1, 'Andaman and Nicobar'),
(2, 'Andhra Pradesh'),
(3, 'Arunachal Pradesh'),
(4, 'Assam'),
(5, 'Bihar'),
(6, 'Chandigarh'),
(7, 'Chattisgarh'),
(8, 'Dadar and Nagar Haveli and Daman and Diu'),
(9, 'Delhi'),
(10, 'Goa'),
(11, 'Gujarat'),
(12, 'Haryana'),
(13, 'Himachal Pradesh'),
(14, 'Jammu and Kashmir'),
(15, 'Jharkhand'),
(16, 'Karnataka'),
(17, 'Kerala'),
(18, 'Ladakh'),
(19, 'Lakshadweep'),
(20, 'Madhya Pradesh'),
(21, 'Maharashtra'),
(22, 'Manipur'),
(23, 'Meghalaya'),
(24, 'Mizoram'),
(25, 'Nagaland'),
(26, 'Odisha'),
(27, 'Puducherry'),
(28, 'Rajasthan'),
(29, 'Sikkim'),
(30, 'Tamil Nadu'),
(31, 'Telangana'),
(32, 'Tripura'),
(33, 'Uttar Pradesh'),
(34, 'Uttarakhand'),
(35, 'West Bengal');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `auth_key` varchar(32) COLLATE utf8_unicode_ci NOT NULL,
  `password_hash` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password_reset_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `role` varchar(25) COLLATE utf8_unicode_ci NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT 10,
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL,
  `verification_token` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `phone`, `email`, `role`, `state`, `status`, `created_at`, `updated_at`, `verification_token`) VALUES
(21, 'Janardhan Sahoo', '', '$2y$13$G4dYuUNc444B1HbLaX63DeenMbmUqMhmXmIijkP5gmSkvTdV8HwX2', NULL, '+917852967546', 'sahoojanardhan97@gmail.com', 'admin', '1590481057140', 10, 1590481057, 1590481057, NULL),
(23, 'JanardhanSahoo', '', '$2y$13$hAPKEvLKoW60Dzn57.bA7ujtoglyszZqIN9XDVTcQx4EAqHehuT/e', NULL, '7852967546', 'mailmejanardhansahoo@gmail.com', 'supervisor', 'Andaman and Nicobar', 10, 1590481114, 1590481114, NULL),
(35, 'admindfsdfsdfsdfsdfsdf', '', '$2y$13$LS/75z2h0yP5zDzNFWHvcu5B4RtmRsf7Giegc4D/7YYmwHPZJPMMm', NULL, '764846546846846846', 'sahoojanadasdasdasrdhan97@gmail.com', 'supervisor', '', 10, 1590729338, 1590729338, NULL),
(37, 'Surya Narayan Behera', '', '$2y$13$eKQzxZEBuI453up.G2lRpeAb9HoNFiv60fGDgmcMhqLWq5YHLysZm', NULL, '9438369018', 'ssuryanarayan33@gmail.com', 'supervisor', 'Odisha', 10, 1591006852, 1591006852, NULL),
(40, 'admin123', '', '$2y$13$rMvk.lUcKluXjffPJIRWQedmKw2faUYyBYc5rz2jDOlajKQrt3oZW', NULL, '+917852967546', 'sahoojanard123han97@gmail.com', 'supervisor', 'Lakshadweep', 10, 1591008857, 1591008857, NULL),
(76, 'admin', '', '$2y$13$kCZYuOhpQyKMTCI9/xLKOO0etgMCWq5dk4u3qVFJMAo0IB7PBcGYW', NULL, '+917852967546', 'sahoodasdasdsajanardhan97@gmail.com', 'supervisor', 'Himachal Pradesh', 10, 1591082695, 1591082695, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `reset`
--
ALTER TABLE `reset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `state` (`state`),
  ADD UNIQUE KEY `password_reset_token` (`password_reset_token`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reset`
--
ALTER TABLE `reset`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
