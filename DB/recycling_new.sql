-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2024 at 06:41 AM
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
-- Database: `recycling_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `card_info`
--

CREATE TABLE `card_info` (
  `card_holder` varchar(500) NOT NULL,
  `card_number` int(16) NOT NULL,
  `card_expiry` int(4) NOT NULL,
  `card_cvv` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `card_info`
--

INSERT INTO `card_info` (`card_holder`, `card_number`, `card_expiry`, `card_cvv`) VALUES
('iughuj', 2147483647, 2354, 4544),
('ohu', 2147483647, 2354, 4544);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `cities_id` int(11) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`cities_id`, `city`, `state`) VALUES
(1, 'Alexandria', 'Alexandria'),
(2, 'Borg El Arab', 'Alexandria'),
(3, 'Abu Qir', 'Alexandria'),
(4, 'El Dekheila', 'Alexandria'),
(5, 'El Max', 'Alexandria'),
(6, 'Aswan', 'Aswan'),
(7, 'Kom Ombo', 'Aswan'),
(8, 'Edfu', 'Aswan'),
(9, 'Abu Simbel', 'Aswan'),
(10, 'Daraw', 'Aswan'),
(11, 'Asyut', 'Asyut'),
(12, 'Abu Hummus', 'Beheira'),
(13, 'Abu al-Matamir', 'Beheira'),
(14, 'Damanhur', 'Beheira'),
(15, 'Kafr El Dawwar', 'Beheira'),
(16, 'Rosetta (Rashid)', 'Beheira'),
(17, 'Beni Suef', 'Beni Suef'),
(18, 'Abu El Nomros', 'Cairo'),
(19, 'Abu Sir', 'Cairo'),
(20, 'Ain Shams', 'Cairo'),
(21, 'Dar El Salaam', 'Cairo'),
(22, 'Dokki', 'Cairo'),
(23, 'El Basatin', 'Cairo'),
(24, 'El Darb El Ahmar', 'Cairo'),
(25, 'El Gamaleya', 'Cairo'),
(26, 'El Helmeya El Gedida', 'Cairo'),
(27, 'El Khalifa', 'Cairo'),
(28, 'El Manial', 'Cairo'),
(29, 'El Marg', 'Cairo'),
(30, 'El Matariya', 'Cairo'),
(31, 'El Mokattam', 'Cairo'),
(32, 'El Manyal', 'Cairo'),
(33, 'El Nozha', 'Cairo'),
(34, 'El Nozha El Gedida', 'Cairo'),
(35, 'El Qatameya', 'Cairo'),
(36, 'El Rehab City', 'Cairo'),
(37, 'El Salam', 'Cairo'),
(38, 'El Salam City', 'Cairo'),
(39, 'El Sayeda Aisha', 'Cairo'),
(40, 'El Sayeda Zeinab', 'Cairo'),
(41, 'El Sheikh Zayed City', 'Cairo'),
(42, 'El Sharabiya', 'Cairo'),
(43, 'El Shorouk City', 'Cairo'),
(44, 'El Tahrir', 'Cairo'),
(45, 'El Tebbin', 'Cairo'),
(46, 'El Tebeen', 'Cairo'),
(47, 'El Tebeen El Asly', 'Cairo'),
(48, 'El Tebeen El Khames', 'Cairo'),
(49, 'El Waily', 'Cairo'),
(50, 'El Zahraa El Maadi', 'Cairo'),
(51, 'Garden City', 'Cairo'),
(52, 'Hada’iq El Qobbah', 'Cairo'),
(53, 'Heliopolis', 'Cairo'),
(54, 'Helmeya', 'Cairo'),
(55, 'Hikr', 'Cairo'),
(56, 'Imbaba', 'Cairo'),
(57, 'Kirdasah', 'Cairo'),
(58, 'Khanka', 'Cairo'),
(59, 'Kubbah Gardens', 'Cairo'),
(60, 'Maadi', 'Cairo'),
(61, 'Manshiyat Naser', 'Cairo'),
(62, 'Manial', 'Cairo'),
(63, 'Masaken Sheraton', 'Cairo'),
(64, 'May 15', 'Cairo'),
(65, 'Mohandiseen', 'Cairo'),
(66, 'Nasr City', 'Cairo'),
(67, 'New Cairo (Cairo\'s 5th Settlement)', 'Cairo'),
(68, 'Qalyub', 'Cairo'),
(69, 'Qasr El Nil', 'Cairo'),
(70, 'Ramsis', 'Cairo'),
(71, 'Rod El Farag', 'Cairo'),
(72, 'Salam City', 'Cairo'),
(73, 'Sayeda Zeinab', 'Cairo'),
(74, 'Shubra', 'Cairo'),
(75, 'Shubra El-Kheima', 'Cairo'),
(76, 'Shubra El-Khima', 'Cairo'),
(77, 'Shubra Masr', 'Cairo'),
(78, 'Shubra Qima', 'Cairo'),
(79, 'Tura', 'Cairo'),
(80, 'Warraq Island', 'Cairo'),
(81, 'Zamalek', 'Cairo'),
(82, 'Aga', 'Dakahlia'),
(83, 'Al Manzalah', 'Dakahlia'),
(84, 'Bilqas', 'Dakahlia'),
(85, 'El Matareya', 'Dakahlia'),
(86, 'Mit Ghamr', 'Dakahlia'),
(87, 'Mansoura', 'Dakahlia'),
(88, 'Talkha', 'Dakahlia'),
(89, 'Sherbin', 'Dakahlia'),
(90, 'Sinbillawein', 'Dakahlia'),
(91, 'Damietta', 'Damietta'),
(92, 'Faiyum', 'Faiyum'),
(93, 'Kafr El Zayat', 'Gharbia'),
(94, 'Mahalla El Kubra', 'Gharbia'),
(95, 'Tanta', 'Gharbia'),
(96, 'Giza', 'Giza'),
(97, 'Imbaba', 'Giza'),
(98, 'Ismailia', 'Ismailia'),
(99, 'Kafr El Sheikh', 'Kafr El Sheikh'),
(100, 'Luxor', 'Luxor'),
(101, 'Marsa Matrouh', 'Matrouh'),
(102, 'Siwa Oasis', 'Matrouh'),
(103, 'Minya', 'Minya'),
(104, 'Shibin El Kom', 'Monufia'),
(105, 'Kharga Oasis', 'New Valley'),
(106, 'Dakhla Oasis', 'New Valley'),
(107, 'Farafra Oasis', 'New Valley'),
(108, 'Arish', 'North Sinai'),
(109, 'Bir al-Abed', 'North Sinai'),
(110, 'Rafah', 'North Sinai'),
(111, 'Sheikh Zuweid', 'North Sinai'),
(112, 'Port Said', 'Port Said'),
(113, 'Banha', 'Qalyubia'),
(114, 'Khanka', 'Qalyubia'),
(115, 'Shibin El Qanater', 'Qalyubia'),
(116, 'Qalyub', 'Qalyubia'),
(117, 'Qena', 'Qena'),
(118, 'Hurghada', 'Red Sea'),
(119, 'Safaga', 'Red Sea'),
(120, 'Zagazig', 'Sharqia'),
(121, 'Al Husseiniya', 'Sharqia'),
(122, 'Bilbeis', 'Sharqia'),
(123, 'Minya al-Qamh', 'Sharqia'),
(124, 'Sohag', 'Sohag'),
(125, 'Sharm El Sheikh', 'South Sinai'),
(126, 'Dahab', 'South Sinai'),
(127, 'Nuweiba', 'South Sinai'),
(128, 'Saint Catherine', 'South Sinai'),
(129, 'Taba', 'South Sinai'),
(130, 'Suez', 'Suez'),
(131, '6th of October City', 'Giza'),
(132, 'Abu Rawash', 'Giza'),
(133, 'Al Badrasheen', 'Giza'),
(134, 'Al Ayat', 'Giza'),
(135, 'Al Bawiti', 'Giza'),
(136, 'Al Gharbaniyat', 'Giza'),
(137, 'Al Hawamidiyah', 'Giza'),
(138, 'Al Khankah', 'Giza'),
(139, 'Al Motamayez District', 'Giza'),
(140, 'Al Saf District', 'Giza'),
(141, 'Al Wahat District', 'Giza'),
(142, 'Atfih', 'Giza'),
(143, 'Awsim', 'Giza'),
(144, 'Banha El Oula', 'Giza'),
(145, 'Dokki', 'Giza'),
(146, 'Embaba', 'Giza'),
(147, 'Haram', 'Giza'),
(148, 'Helwan', 'Giza'),
(149, 'Kerdasa', 'Giza'),
(150, 'Maadi', 'Giza'),
(151, 'Moneeb', 'Giza'),
(152, 'Nazlet El Samman', 'Giza'),
(153, 'Omrania', 'Giza'),
(154, 'Pyramids', 'Giza'),
(155, 'Sakkara', 'Giza'),
(156, 'Shubra El-Kheima', 'Giza'),
(157, 'Shubra Khit', 'Giza'),
(158, 'Sphinx', 'Giza'),
(159, 'Talaat Harb', 'Giza'),
(160, 'Tersa', 'Giza'),
(161, 'Warraq Island', 'Giza'),
(162, 'El Quseir', 'Red Sea'),
(163, 'Marsa Alam', 'Red Sea'),
(164, 'Ras Gharib', 'Red Sea'),
(165, 'Ras Sudr', 'Red Sea'),
(166, 'Shalateen', 'Red Sea'),
(167, 'Halayeb', 'Red Sea'),
(168, 'Marsa Allam', 'Red Sea'),
(169, 'Soma Bay', 'Red Sea'),
(170, 'Wadi Lahami', 'Red Sea');

-- --------------------------------------------------------

--
-- Table structure for table `jn_user_tasks`
--

CREATE TABLE `jn_user_tasks` (
  `user_id` int(5) NOT NULL,
  `task_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `location_id` int(5) NOT NULL,
  `location_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `user_id` int(50) NOT NULL,
  `First_name` varchar(50) NOT NULL,
  `Last_name` varchar(50) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `messager_email` varchar(50) NOT NULL,
  `message_message` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reward`
--

CREATE TABLE `reward` (
  `reward_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL,
  `task_id` int(5) NOT NULL,
  `reward_creationdate` datetime NOT NULL,
  `reward_amnt` int(4) NOT NULL,
  `reward_method` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tasks`
--

CREATE TABLE `tasks` (
  `task_id` int(5) NOT NULL,
  `task_name` varchar(50) NOT NULL,
  `task_description` varchar(50) NOT NULL,
  `task_location` varchar(100) NOT NULL,
  `task_creationdate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `task_reward` int(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tasks`
--

INSERT INTO `tasks` (`task_id`, `task_name`, `task_description`, `task_location`, `task_creationdate`, `task_reward`) VALUES
(1, 'enviromental Driving(ELECRTIC CARS)', 'Customer uses electric car to save the enviromenta', 'Egypt', '2024-03-02 03:30:03', 0),
(2, 'recycling', 'Help someone recycle by collecting, sorting, and p', 'zayed', '2024-03-02 10:56:20', 100),
(3, 'recycling', 'recycle by collecting, sorting, and processing mat', 'zayed', '2024-03-02 10:57:12', 100),
(4, 'recycling', 'hi', 'october', '2024-03-02 11:03:16', 100),
(5, 'recycling', 'fg', 'zayed', '2024-03-02 11:06:10', 100),
(6, 'planting ', 'i want someone to help me plant my garden', 'giza', '2024-03-02 11:15:33', 100),
(7, 'planting ', '..', 'zayed', '2024-03-02 19:03:57', 1),
(8, 'test', 'test', 'test', '2024-03-03 05:39:19', 100);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(5) NOT NULL,
  `user_profile_picture` blob NOT NULL,
  `user_first_name` varchar(50) NOT NULL,
  `user_last_name` varchar(50) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_age` int(3) NOT NULL,
  `user_phone_number` varchar(11) NOT NULL,
  `user_creation_date` datetime NOT NULL,
  `user_city` varchar(50) NOT NULL,
  `user_username` varchar(50) NOT NULL,
  `tasks_done` varchar(4) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_profile_picture`, `user_first_name`, `user_last_name`, `user_email`, `user_password`, `user_age`, `user_phone_number`, `user_creation_date`, `user_city`, `user_username`, `tasks_done`) VALUES
(1, '', 'mariam', 'akl', '7amada@7amada.com', '1234', 21, '12345678910', '2024-02-19 16:51:17', 'cairo', '7mada', '0'),
(2, '', 'mariam', 'akl', 'mollymomedreams@gmail.com', '1234', 23, '01155222433', '2024-02-24 00:00:00', 'Cairo', 'mariam1234', '0'),
(3, '', 'mohamed', 'hazem', 'mohamed@hazem.com', '1234', 23, '01244333688', '2024-02-24 00:00:00', 'Aswan', 'mohamed123', '0'),
(4, '', 'lara', 'mohamed', 'lara_mohamed@gmail.com', '1234', 2010, '01244333688', '2024-02-24 00:00:00', 'Hurghada', 'lara123', '0'),
(5, '', 'peter', 'parker', 'spiderman@gmail.com', '1234', 1990, '01033111627', '2024-02-24 00:00:00', 'El Arish', 'spiderman', '0'),
(6, '', '7amada2', '7amada2', '7amada2@7amada2.com', '1234', 2024, '0120000000', '2024-02-26 00:00:00', 'Garden City', '7amada2', '0'),
(7, '', '7amada3', '7amada3', '7amada3@7amada3.com', '1234', 2024, '0', '0000-00-00 00:00:00', 'Aswan', '7amada3', '0'),
(8, '', 'dsuf', 'scsdc', '7amada3@7amada3.com', 'daselo0', 1988, '0765', '2024-03-01 19:32:15', 'Maadi', 'cadcjkdc', ''),
(9, '', 'mariam', 'parker', 'mohaed@haem.com', '$2y$10$58uvNA1jibpls99KJlygY./V2/MX03RgzUwL2cFgMNM', 23, '01244333688', '2024-03-01 22:55:47', 'Aswan', 'mariam12345', ''),
(10, '', 'mariam', 'ggs', 'PeterParker_SMFC@gmail.com', '$2y$10$uWXsNfBu24DmtweDGToxq.HzYeO82e9qwb.5vi.BMsE', 21, '01244333688', '2024-03-02 11:59:16', 'Asyut', 'mariam12R4T56', ''),
(11, '', 'peter', 'mohamed', 'mariamakl735qwf@gmail.com', '$2y$10$zkArBqb3mhEYeIl5Mbgg1.oYHBBEwKJFCvSn7VoMmDh', 23, '01033111627', '2024-03-02 12:04:12', 'Kubbah Gardens', 'lara1233243', '0'),
(12, '', 'FVB', 'VASF', 'lara_mohamgwvavsed@gmail.com', '$2y$10$jJvqXMWfdqfDPGsAmT1o.OZYNH1LHDdjxIJ9UIYee0C', 23, '01155222433', '2024-03-02 12:07:58', 'Asyut', 'mome_akld21rq', '0'),
(13, '', 'avdzjc/', 'njvl;bajl?', 'mohamedVBSA@hazem.com', '1234', 2000, '01033111627', '2024-03-02 12:11:33', 'Abu al-Matamir', 'BAHVKLBL', '0'),
(14, '', 'FVB', 'hamed', 'mohamed@hazem.com', '1234', 2000, '01244333688', '2024-03-02 12:12:52', 'Damanhur', 'JTRN', '0'),
(15, '', 'JLBVW;ADSHU;', 'BQWFVK;ASBJSB', 'XGVYICDFASBK@BCHJZB.COM', '1234', 2000, '01155222433', '2024-03-02 12:15:05', 'Abu al-Matamir', 'BWUEAVUI.;F', '0'),
(16, '', 'DWQEFAWZRG', 'DFAVZSG', 'PeterParker_SM@gmail.com', '1234', 2000, '01033111627', '2024-03-02 12:16:59', 'Abu Hummus', '1123ERTFGBRGDFV', '0'),
(17, '', 'VFADZ', 'BKSDVBAK', 'SmoAADhamGASVASFZed@hazeSVAm.com', '1234', 2000, '01033111627', '2024-03-02 12:19:10', 'Abu al-Matamir', 'SXCXSKBVKAJ', '0'),
(18, '', 'fgthrjny', 'wfreg', 'vjasklbkl@bhv.com', '1234', 2000, '01033111627', '2024-03-02 12:22:48', 'Abu al-Matamir', 'ebfssssstrjgs', '0'),
(19, '', 'peter', 'gzgvzf', 'PeterPabfbhaksc@webgfav.com', '$2y$10$Y.Pu.f8ByKzwcaeqiNZrWuETx9gIksN8rIUuhLLzO79', 23, '01244333688', '2024-03-02 13:15:50', 'Abu al-Matamir', 'gavrbb', '0'),
(20, '', 'r3ht', 'erty', 'jvz@vhach.com', '$2y$10$voa4w/JLA6JicK8LDw8UFuNhG4W4D6f0PJjxMVkQHpN', 23, '01155222433', '2024-03-02 13:24:58', 'Qasr El Nil', 'wqdeftrhyu', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`cities_id`);

--
-- Indexes for table `jn_user_tasks`
--
ALTER TABLE `jn_user_tasks`
  ADD KEY `user_fk` (`user_id`),
  ADD KEY `task_fk` (`task_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tasks`
--
ALTER TABLE `tasks`
  ADD PRIMARY KEY (`task_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `cities_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=171;

--
-- AUTO_INCREMENT for table `tasks`
--
ALTER TABLE `tasks`
  MODIFY `task_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jn_user_tasks`
--
ALTER TABLE `jn_user_tasks`
  ADD CONSTRAINT `task_fk` FOREIGN KEY (`task_id`) REFERENCES `tasks` (`task_id`),
  ADD CONSTRAINT `user_fk` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `messages`
--
ALTER TABLE `messages`
  ADD CONSTRAINT `messages_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
