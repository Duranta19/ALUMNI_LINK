-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2022 at 04:18 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

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
('Md. Zidan', '011201049', '011201049', 'Alumni', 3),
('Rifat Bin Hossain', 'ssss', 'sss', 'Alumni', 5),
('kaka', 'kaka', 'kaka', 'Alumni', 6),
('Sifat Bin Hossain', '011201434', '', 'Student', 12),
('Arafat', '011201', 'aaa', 'Student', 13),
('sifat', 'ddd', 'ddd', 'Alumni', 14);

-- --------------------------------------------------------

--
-- Table structure for table `event_info`
--

CREATE TABLE `event_info` (
  `event_title` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `location` varchar(50) NOT NULL,
  `event_details` varchar(5000) NOT NULL,
  `event_short_details` varchar(2000) NOT NULL,
  `registration_link` varchar(100) NOT NULL,
  `event_id` int(50) NOT NULL,
  `event_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_info`
--

INSERT INTO `event_info` (`event_title`, `date`, `time`, `location`, `event_details`, `event_short_details`, `registration_link`, `event_id`, `event_img`) VALUES
('VLSI Design Competition 2022', '0000-00-00', '00:00:12', 'BUET', 'The Department of EEE, BUET, IEEE EDS/SSCS Bangladesh Chapter, and IEEE EDS BUET Student branch are jointly organizing 𝐕𝐋𝐒𝐈 𝐃𝐞𝐬𝐢𝐠𝐧 𝐂𝐨𝐦𝐩𝐞𝐭𝐢𝐭𝐢𝐨𝐧 𝟐𝟎𝟐𝟐\r\n⁣\r\nThe primary objective of the competition is to grow interest in Very Large Scale Integration (VLSI) simply known as chip design among the students and make them aware of the tremendous potentiality of this sector.⁣\r\n⁣\r\n𝐄𝐥𝐢𝐠𝐢𝐛𝐢𝐥𝐢𝐭𝐲: The participant must be an undergraduate student of EEE/CSE of any University in Bangladesh.⁣\r\n⁣', 'The Department of EEE, BUET, IEEE EDS/SSCS Bangladesh Chapter, and IEEE EDS BUET Student branch are jointly organizing 𝐕𝐋𝐒𝐈 𝐃𝐞𝐬𝐢𝐠𝐧 𝐂𝐨𝐦𝐩𝐞𝐭𝐢𝐭𝐢𝐨𝐧 𝟐𝟎', 'https://pdf2doc.com/', 3, '73523608_2238462189591221_5511379085940490240_n.jpg'),
('Robi Coder Hunt', '0000-00-00', '00:04:30', 'Dhaka', 'we are arranging an event where we are looking for the best Cooder!', 'We are arranging a event to find coder!', 'https://www.robi.com.bd/en/personal/offers', 6, 'robi.png'),
('UIU Project Show', '2022-12-18', '09:40:00', 'UIU', 'Here are some exclusive sneak peeks from our \"CSE Project Show | Summer 22.\" Due to the enthusiastic participation of our students the entire campus took on a joyful atmosphere on this day. This link will take you to a gallery featuring every picture taken that day:', 'Here are some exclusive sneak peeks from our \"CSE Project Show | Summer 22.\"', 'https://www.facebook.com/uiurobotics/posts/pfbid0pVnMrjbYLW284osTbFYiwefsARuZczwjRz3UER7vzv8cfXihoKL', 7, 'uiu project show.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `qus_details`
--

CREATE TABLE `qus_details` (
  `sl` int(11) NOT NULL,
  `qus_code` varchar(100) NOT NULL,
  `ques` varchar(1000) NOT NULL,
  `option1` varchar(200) NOT NULL,
  `option2` varchar(200) NOT NULL,
  `option3` varchar(200) NOT NULL,
  `option4` varchar(200) NOT NULL,
  `corr_option` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qus_details`
--

INSERT INTO `qus_details` (`sl`, `qus_code`, `ques`, `option1`, `option2`, `option3`, `option4`, `corr_option`) VALUES
(1, 'CSE100', 'An electronic tool that allows information to be input, processed, and output is called', 'Operating system', ' \r\nMotherboard', 'CPU', 'Computer', 3),
(2, 'CSE200 ', '_____ is a worldwide network of computers.  ', 'CPU', 'Internet', 'RAM', 'Network', 2),
(3, 'CSE105 ', 'What is the 16-bit compiler allowable range for integer constants?', '-3.4e38 to 3.4e38', '-32767 to 32768', '-32668 to 32667', '-32768 to 32767', 4),
(4, 'CSE105  ', 'What will be the output of this program? main()   {printf(\"javatpoint\");   main();}  ', 'Wrong statement', 'It will keep on printing javatpoint', 'It will Print javatpoint once', 'It will Print javatpoint once', 3),
(5, 'CSE105   ', 'What is required in each C program?', 'The program must have at least one function.', 'The program does not require any function.', 'Input data', 'Output data', 1),
(6, 'CSE105    ', ' Which of the following comment is correct when a macro definition includes arguments?', 'The opening parenthesis should immediately follow the macro name.', 'There should be at least one blank between the macro name and the opening parenthesis.', 'There should be only one blank between the macro name and the opening parenthesis.', 'All the above comments are correct.', 1),
(7, 'CSE105     ', 'What is a lint?', 'C compiler', 'Interactive debugger', 'Analyzing tool', 'C interpreter', 3),
(8, 'CSE105      ', ' What is the output of this statement \"printf(\"%d\", (a++))\"?', 'The value of (a + 1)', 'The current value of a', 'Error message', 'Garbage', 1),
(9, 'CSE2211 ', 'What is java?', 'language', 'database', 'nothing', 'I dont know', 1),
(10, 'CSE2211  ', 'what is html?', 'langual', 'ccc', 'cccccccc', 'ccccccccccc', 1),
(11, 'CSE2211   ', 'name ki?', 'rifat', 'siam', 'rohit', 'jafry', 3),
(12, 'CSE2211    ', 'kam ki', 'kisuna', 'kisui na', 'aaaaaaaaaaa', 'aaaaaaaaaaaaa', 4),
(13, 'CSE2211     ', 'dddddddddddd', 'ddddddddddddd', 'dddddddddd', 'ddddddddddddd', 'dddddddddddddd', 4),
(14, 'xxxxxxxxxxx ', 'xxxxxxxxxxx', 'xxxxxxxxx', 'xxxxxxxxxx', 'xxxxxxxxx', 'xxxxxxxxx', 1),
(15, 'xxxxxxxxxxx  ', 'yyyyyyyyyyy', 'yyyyyyyyyyyyyyy', 'yyyyyyyyyyyyyy', 'yyyyyyyyyyyy', 'yyyyyyyyyyy', 3);

-- --------------------------------------------------------

--
-- Table structure for table `qus_info`
--

CREATE TABLE `qus_info` (
  `qus_code` varchar(100) NOT NULL,
  `sl` int(100) NOT NULL,
  `qus_title` varchar(200) NOT NULL,
  `qus_des` varchar(1500) NOT NULL,
  `total_qus` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qus_info`
--

INSERT INTO `qus_info` (`qus_code`, `sl`, `qus_title`, `qus_des`, `total_qus`) VALUES
('DEMO101', 1, 'Demo', 'Demo Question', 5),
('CSE100 ', 2, 'Basic of Computer Science', 'Basic question of Computer Science this Quiz Contain 10 MCQ', 10),
('CSE101', 4, 'C Quiz', 'Basic question of C this Quiz Contain 10 MCQ', 5),
('CSE200', 7, 'C Quiz', 'Basic question of Computer Science this Quiz Contain 10 MCQ', 5),
('CSE105', 8, 'Basic C Quiz', 'Basic knowledge of C', 6),
('CSE2211', 9, 'Java', 'About java', 3),
('xxxxxxxxxxx', 10, 'xxxxxxxxxx', 'xxxxxxxx', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_achievement`
--

CREATE TABLE `user_achievement` (
  `acc_id` int(11) NOT NULL,
  `achievement` varchar(500) NOT NULL,
  `achievement_titel` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_achievement`
--

INSERT INTO `user_achievement` (`acc_id`, `achievement`, `achievement_titel`) VALUES
(5, '\r\nBootstrap Calendar - FormGethttps://www.formget.com › HTML/CSS\r\nQuick guide to add Bootstrap Calendar on your web page · use predefined codes · Add events, dates, months, year, buttons & more · attractive bootstrap ...\r\n\r\nBootstrap 4 compatible Calendar with Material Design UIhttps://pro.propeller.in › components › calendar\r\nDocumentation and examples for Bootstrap 4 Calendar with Material Design UI. Calendar component allows user to manage events in a calendar.\r\n', 'Big Daddy'),
(5, 'example of calendar is as shown below −\r\n\r\nAngular bootstrap calendar demohttps://mattlewis92.github.io › angular-bootstrap-calendar\r\nAngular Bootstrap Calendar. Examples · Installation · Documentation · Project on GitHub · Hire me! ‍ . Examples. {{ demo.label }} ...\r\n\r\nHow To Make a Calendar using CSS - W3Schoolshttps://www.w3schools.com › howto › howto_css_calen...\r\nWell organized and easy to understand Web building tutorials with lots of examples of how to use HTML, CSS, JavaScript, SQL, Pyth', 'Small daddy'),
(5, '', ''),
(6, 'kakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakakaka', 'kaka');

-- --------------------------------------------------------

--
-- Table structure for table `user_experience`
--

CREATE TABLE `user_experience` (
  `acc_id` int(11) NOT NULL,
  `position` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `joinDate` date NOT NULL,
  `leaveDate` date NOT NULL,
  `description` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_experience`
--

INSERT INTO `user_experience` (`acc_id`, `position`, `company`, `joinDate`, `leaveDate`, `description`) VALUES
(5, 'ceo', 'apple', '2022-12-14', '2022-12-29', 'yaaaaaaaaaaaaaaaa'),
(5, 'ceo', 'apple', '2022-12-14', '2022-12-29', 'yaaaaaaaaaaaaaaaa'),
(5, 'chro', 'google', '2022-12-15', '0000-00-00', 'jaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(5, 'sssssss', 'sssssss', '2022-12-07', '2022-12-26', 'ssssssssssssssssssssssssssssssssssss'),
(5, '', '', '2022-12-14', '0000-00-00', ''),
(5, '', '', '2022-12-14', '0000-00-00', ''),
(5, '', '', '2022-12-14', '0000-00-00', ''),
(5, '', '', '2022-12-14', '0000-00-00', ''),
(6, 'kaka', 'kaka', '2022-12-08', '2022-12-15', 'kakakakakakakakakakakakakakakakaka'),
(6, 'ccc', '', '0000-00-00', '0000-00-00', '');

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
(3, 0, 'waw', 'waw', 'awwer@gmail.com', 'waw', 'dump.jpg', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw', 'waw'),
(6, 0, 'kaka', 'kaka', 'kaka@kaka.com', 'kaka', 'FullSizeRender.jpg', 'kaka', 'kaka', 'kaka', '', '', 'kaka', 'kaka', 'kaka', '', '', 'kaka', 'kaka', 'kaka', '', 'kaka', 'kaka', '', '', ''),
(6, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'c++', '', '', '', '');

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
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `qus_details`
--
ALTER TABLE `qus_details`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `qus_info`
--
ALTER TABLE `qus_info`
  ADD PRIMARY KEY (`sl`,`qus_code`);

--
-- Indexes for table `user_achievement`
--
ALTER TABLE `user_achievement`
  ADD KEY `acc_id` (`acc_id`);

--
-- Indexes for table `user_experience`
--
ALTER TABLE `user_experience`
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
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `event_info`
--
ALTER TABLE `event_info`
  MODIFY `event_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `qus_details`
--
ALTER TABLE `qus_details`
  MODIFY `sl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `qus_info`
--
ALTER TABLE `qus_info`
  MODIFY `sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_achievement`
--
ALTER TABLE `user_achievement`
  ADD CONSTRAINT `user_achievement_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`acc_id`);

--
-- Constraints for table `user_experience`
--
ALTER TABLE `user_experience`
  ADD CONSTRAINT `user_experience_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`acc_id`);

--
-- Constraints for table `user_info`
--
ALTER TABLE `user_info`
  ADD CONSTRAINT `user_info_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`acc_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
