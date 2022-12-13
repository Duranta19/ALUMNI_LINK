-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2022 at 06:44 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alumni_linked`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `user_name` varchar(20) NOT NULL,
  `user_id` varchar(15) NOT NULL,
  `user_password` varchar(20) NOT NULL,
  `category` varchar(10) NOT NULL,
  `acc_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`user_name`, `user_id`, `user_password`, `category`, `acc_id`) VALUES
('Abu Sayem Md Siam', '011201033', '11201033', 'Alumni', 1),
('Admin', 'admin', '1111', 'Admin', 2),
('Md. Zidan', '011201049', '011201049', 'Alumni', 3);

-- --------------------------------------------------------

--
-- Table structure for table `user_experiance`
--

CREATE TABLE `user_experiance` (
  `acc_id` int(11) NOT NULL,
  `company_name` varchar(11) NOT NULL,
  `join_date` date NOT NULL,
  `position` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_experiance`
--

INSERT INTO `user_experiance` (`acc_id`, `company_name`, `join_date`, `position`) VALUES
(1, 'abc', '2022-12-01', 'Jr. Softwar'),
(1, 'xyz', '2022-03-01', 'Intern');

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `acc_id` int(11) NOT NULL,
  `age` int(11) NOT NULL,
  `about_me` varchar(200) NOT NULL,
  `address` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone_num` varchar(15) NOT NULL,
  `photo_loc` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `uni_ug` varchar(50) NOT NULL,
  `uni_gr` varchar(50) NOT NULL,
  `uni_pg` varchar(50) NOT NULL,
  `ssc_year` varchar(5) NOT NULL,
  `hsc_year` varchar(5) NOT NULL,
  `ug_year` varchar(5) NOT NULL,
  `gr_year` varchar(5) NOT NULL,
  `pg_year` varchar(5) NOT NULL,
  `ssc_result` varchar(5) NOT NULL,
  `hsc_result` varchar(5) NOT NULL,
  `ug_result` varchar(5) NOT NULL,
  `pg_result` varchar(5) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `language` varchar(50) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `massenger` varchar(100) NOT NULL,
  `whatsapp` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`acc_id`, `age`, `about_me`, `address`, `email`, `phone_num`, `photo_loc`, `school`, `college`, `uni_ug`, `uni_gr`, `uni_pg`, `ssc_year`, `hsc_year`, `ug_year`, `gr_year`, `pg_year`, `ssc_result`, `hsc_result`, `ug_result`, `pg_result`, `skills`, `language`, `facebook`, `massenger`, `whatsapp`) VALUES
(1, 0, 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe similique obcaecati quisquam, aliquam in ut quis distinctio, esse voluptate dignissimos nesciunt iusto dolore fugiat et doloremque sed qu', '145,Dhaka,bangladesh', 'sayemsiam198@gmail.com', '01884928033', 'img_avatar.png', 'Motijheel Model school and College', 'St. Gregory School and College', 'United Internatinal University', 'N/A', 'N/A', '2017', '2019', '2024', 'N/A', 'N/A', '5.00', '4.42', '3.50', 'N/A', 'Python,C++,C,HTML,CSS,PHP', 'Bangla,English,Hindi', 'https://www.facebook.com/duronto.sayem.7', 'https://www.facebook.com/messages/t/100010296760824', 'N/A'),
(2, 0, 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a', 'a'),
(3, 0, 'waw', 'waw', 'awwer@gmail.com', 'waw', 'dump.jpg', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`acc_id`),
  ADD UNIQUE KEY `user_name` (`user_name`);

--
-- Indexes for table `user_experiance`
--
ALTER TABLE `user_experiance`
  ADD KEY `acc_id` (`acc_id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD KEY `acc_id` (`acc_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_experiance`
--
ALTER TABLE `user_experiance`
  ADD CONSTRAINT `user_experiance_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`acc_id`);

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`acc_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
