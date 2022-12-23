-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2022 at 08:18 PM
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
('sifat', 'ddd', 'ddd', 'Alumni', 14),
('Md. Sabbir', '011211033', '011211033', 'Student', 15),
('xyz', '1111', '1111', 'Alumni', 16),
('Robi', 'robi', 'robi', 'Organizati', 17),
('Banglalink', 'bl', 'bl', 'Organizati', 18);

-- --------------------------------------------------------

--
-- Table structure for table `blog_info`
--

CREATE TABLE `blog_info` (
  `blog_title` varchar(100) NOT NULL,
  `blogs_short_des` varchar(1000) NOT NULL,
  `blog_des` varchar(10000) NOT NULL,
  `blog_img` varchar(200) NOT NULL,
  `blog_id` int(50) NOT NULL,
  `blog_datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blog_info`
--

INSERT INTO `blog_info` (`blog_title`, `blogs_short_des`, `blog_des`, `blog_img`, `blog_id`, `blog_datetime`) VALUES
('A TIME WHEN YOU USED LOGIC TO SOLVE A PROBLEM (EXAMPLES)', 'Sharing a time when you used logic and good judgment to solve a problem seems easy, but many job-seekers get stumped when asked this during an interview.', 'Why Interviewers Want to Hear an Example of Solving a Problem with Logic\r\nIt doesn’t matter whether you work in finance or are applying to become a top-level marketing executive. You’ll face numerous challenges that don’t have an easy fix. Some obstacles you’ll encounter require creative thinking and an out-of-the-box approach to resolve.\r\n\r\nInterviewers want to know that you’re up for the challenge and capable of using your critical-thinking skills to tackle anything the position might throw at you. This question gives interviewers more insight into how you think and what approaches you use to solve problems. Providing a compelling answer will show hiring managers how you will perform in this role and what you have to bring to the company.\r\n\r\nThis question might seem overly generic or irrelevant, but it provides a deep look into how you work and what you do to overcome unanticipated challenges. No job is smooth sailing, and you often don’t know what problems will occur until you face them. How you respond and what you do to move forward makes a huge difference.\r\n\r\nCompanies want people who can analyze a situation and apply solid logic to every unexpected issue. They want to hire individuals who approach those moments logically and clearly, making your response more important than you might think.', 'logic-good-judgment-to-solve-a-problem (1).png', 5, '2022-12-17 23:14:47'),
('Answering Interview Questions About Organizational Skills', 'Answering questions about your organizational skills in a job interview is something that everyone needs to do. Staying organized is an essential part of being a productive employee, so hiring managers will always bring this up!', 'How to Answer Interview Questions About Organizational Skills\r\nQuestions about your organizational skills are bound to come up during a job interview, regardless of the field or position. Organizational skills are valuable and a key trait many hiring managers look for when considering applicants. When responding to these questions, it’s important to put your skills on full display while highlighting how you can apply them to the job at hand.\r\n\r\nHere are a few tips to help you do just that.  \r\n\r\n1. Demonstrate That Staying Organized is Important to You\r\nHiring managers and interviewers are always interested in your unique organizational methods. Every employee has an approach they prefer, and it’s usually fine to do whatever works for you. But the most crucial thing they want to hear is that you value staying organized when you work. \r\n\r\nThey want to see that your organizational skills are effortless and second nature. You’d be surprised how many people approach their work without a method to keep them on track. While those individuals might cross the finish line and successfully finish a task that they’re working on, they often take longer, work inefficiently, and get side-tracked.\r\n\r\nWhen answering interview questions about your organizational skills, your goal is to show that it’s vital to your success. Demonstrate why staying organized matters and how it makes a difference in your professional life.', 'organizational-skills-interview-questions.png', 6, '2022-12-17 23:16:57'),
('Two Weeks After An Interview With No Response: Quick Tips', 'If it has been two weeks after an interview with no response, it’s only natural to wonder what that means for you. Are you officially out of the running? Has the hiring process been delayed? Should you follow up?', 'Potential Reasons Why You Haven’t Heard Back\r\nWaiting for a response after an interview can have you on the edge of your seat, and the longer time goes on, the more worried you might get. Hiring processes are complex, and there are many possible reasons why you have yet to receive that coveted call.\r\n\r\nHere are a few common potential reasons why it’s been two weeks after an interview with no response. \r\n\r\n1. Someone Else Was Chosen, and You Weren’t Notified\r\nIf it’s been two weeks after your interview and you haven’t heard back, it could mean they chose someone else and the job is no longer up for grabs. This reason might be the worst-case scenario playing in your head, and it’s a reality that many job-seekers face. When there’s only one position to fill and stiff competition trying to land it, the odds aren’t always in your favor.\r\n\r\nGenerally, it’s considered courteous for the hiring manager to inform you that you didn’t get the job. But while that’s standard practice, it’s not a legal requirement. Sometimes, things slip through the cracks, and companies forget to notify the applicants that didn’t make the cut.', 'two-weeks-after-an-interview-with-no-response.png', 7, '2022-12-17 23:18:19'),
('What To Do When You Get Laid Off From Work: A Full Guide', 'Figuring out what to do when you get laid off from work can be a challenge. You’re suddenly in a completely different situation than you were the day before, and the emotions from this shakeup certainly don’t make things any easier!', '1. Understand Your Severance Package\r\nSeverance packages, while not guaranteed, are common if you’ve been laid off (it all depends on the company). They’re usually offered when positions or jobs are eliminated entirely or when budget cuts force companies to downsize. \r\n\r\nThese offers often undergo intense legal review, and there’s usually little room to negotiate. But even still, it’s important that you fully understand the severance package before signing anything. Packages may come with strict stipulations about what you can do next.\r\n\r\nIt’s also important to remember that signing those severance package documents could prevent you from taking action if you feel that the layoff gives you a legal claim.\r\n\r\nIt’s wise to take some time to review the contracts and details of the package. Don’t be afraid to contact a lawyer specializing in labor law if something raises a red flag.\r\n\r\nEven if you feel comfortable accepting it, ensure you fully understand what it includes and what signing any contract entails.', 'what-to-do-when-you-get-laid-off-from-work-1.png', 8, '2022-12-17 23:20:00'),
('“Why Do You Want To Work Here?” How To Answer + Examples', '“Why do you want to work here?” is an interview question that seems easy to answer, but trips up applicants all the time.  And we can guarantee that you’ll have to answer it at some point in your job search.', 'Why Interviewers Ask This Question\r\n“Why do you want to work here?” is a question that’s almost guaranteed to come up during a job interview. Whether you’re meeting with a hiring manager about an entry-level job or a C-suite executive position, they want an answer to this question.\r\n\r\nBut why?\r\n\r\n“Why do you want to work here?” seems incredibly simple at face value, but it unveils more crucial information about you than you might realize. It’s a quintessential question that highlights your inherent motivations.\r\n\r\nEveryone wants a well-paying job that offers security and plenty of perks. But that doesn’t mean that people are genuinely dedicated to the job. Some are there to work for the weekend, doing the bare minimum to get by.\r\n\r\nThose aren’t the type of employees that companies want to hire. The best candidates are those who show genuine interest in the role, a natural motivation to support the company’s bottom line, and a desire to perform their very best.\r\n\r\nAsking this question is a creative way to pull that information out of you. It lifts the veil, uncovers your motivations for applying, and helps the hiring manager choose the best candidate possible.\r\n\r\nThat’s a lot of weight for one question. And while it seems straightforward, your answer can make or break your chances of making it to the next step in the interview process and thus getting a job offer.', 'why-do-you-want-to-work-here.png', 9, '2022-12-17 23:22:41');

-- --------------------------------------------------------

--
-- Table structure for table `cmnt_notification`
--

CREATE TABLE `cmnt_notification` (
  `sl` int(100) NOT NULL,
  `post_id` varchar(100) NOT NULL,
  `post_by` int(100) NOT NULL,
  `text` varchar(1000) NOT NULL,
  `cmnt_by` varchar(100) NOT NULL,
  `date` datetime(6) NOT NULL DEFAULT current_timestamp(6),
  `status` int(10) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmnt_notification`
--

INSERT INTO `cmnt_notification` (`sl`, `post_id`, `post_by`, `text`, `cmnt_by`, `date`, `status`) VALUES
(1, '1', 15, 'Sifat Bin Hossain Comment on your post.', '1', '0000-00-00 00:00:00.000000', 0),
(2, '1', 15, 'Sifat Bin Hossain Comment on your post.', '1', '2022-12-22 22:49:26.761929', 0),
(3, '6', 1, 'Abu Sayem Md Siam Comment on your post.', '1', '2022-12-23 01:03:44.543204', 1),
(4, '6', 1, 'Abu Sayem Md Siam Comment on your post.', '1', '2022-12-23 01:09:05.819197', 1),
(5, '6', 1, 'Abu Sayem Md Siam Comment on your post.', '1', '2022-12-23 01:33:57.580677', 1),
(6, '3', 15, 'Sifat Bin Hossain Comment on your post.', '1', '2022-12-24 01:05:22.931151', 0),
(7, '5', 1, 'Abu Sayem Md Siam Comment on your post.', '1', '2022-12-24 01:06:27.191192', 1);

-- --------------------------------------------------------

--
-- Table structure for table `communitycomment`
--

CREATE TABLE `communitycomment` (
  `userName` varchar(50) NOT NULL,
  `acc_id` int(50) NOT NULL,
  `userPic` varchar(50) NOT NULL,
  `post_id` int(50) NOT NULL,
  `comment_id` int(50) NOT NULL,
  `comment` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `communitycomment`
--

INSERT INTO `communitycomment` (`userName`, `acc_id`, `userPic`, `post_id`, `comment_id`, `comment`) VALUES
('Jalal', 0, '', 0, 1, 'dddddddddd'),
('Sifat Bin Hossain', 15, 'WhatsApp Image 2022-11-05 at', 0, 2, 'vvv'),
('Sifat Bin Hossain', 15, 'WhatsApp Image 2022-11-05 at', 0, 3, 'cccc'),
('Sifat Bin Hossain', 15, 'WhatsApp Image 2022-11-05 at', 0, 4, 'cccc'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 0, 5, 'thanks'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 0, 6, 'well done'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 0, 7, 'well done'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 0, 8, 'well done'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 0, 9, 'well done'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 0, 10, 'cccc'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 0, 11, 'cccc'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 0, 12, ''),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 0, 13, ''),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 0, 14, ''),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 0, 15, 'bbb'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 0, 16, 'bbb'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 2, 17, 'hahaa'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 1, 18, 'jajaaa'),
('Sifat Bin Hossain', 15, 'WhatsApp Image 2022-11-05 at', 1, 19, 'okk\r\n'),
('Sifat Bin Hossain', 15, 'WhatsApp Image 2022-11-05 at', 2, 20, 'naah\r\n'),
('Sifat Bin Hossain', 15, 'WhatsApp Image 2022-11-05 at', 4, 21, 'done\r\n'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 1, 22, 'fsfsdv'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 1, 23, 'try this one\r\n'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 1, 24, 'done'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 6, 25, 'dadwdada'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 6, 26, 'gignoih9hhu9h'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 6, 27, 'Learn html first'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 3, 28, 'Thank You\r\n'),
('Abu Sayem Md Siam', 1, 'img_avatar.png', 5, 29, 'C');

-- --------------------------------------------------------

--
-- Table structure for table `communitypost`
--

CREATE TABLE `communitypost` (
  `acc_id` int(11) NOT NULL,
  `userName` varchar(50) NOT NULL,
  `userPic` varchar(50) NOT NULL,
  `communityPost_titel` varchar(100) NOT NULL,
  `communityPost_details` varchar(500) NOT NULL,
  `dateTime` datetime NOT NULL DEFAULT current_timestamp(),
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `communitypost`
--

INSERT INTO `communitypost` (`acc_id`, `userName`, `userPic`, `communityPost_titel`, `communityPost_details`, `dateTime`, `post_id`) VALUES
(15, 'Sifat Bin Hossain', 'WhatsApp Image 2022-11-05 at 19.31.57.jpg', 'PayPal and SpaceX', 'Musk attended Queen’s University in Kingston, Ontario, and in 1992 he transferred to the University of Pennsylvania, Philadelphia, where he received bachelor’s degrees in physics and economics in 1997. He enrolled in graduate school in physics at Stanford University in California, but he left after only two days because he felt that the Internet had much more potential to change society than work in physics. In 1995 he founded Zip2, a company that provided maps and business directories to online', '2022-12-22 13:52:16', 1),
(1, 'Abu Sayem Md Siam', 'img_avatar.png', 'Webb Glimpses Field of Extragalactic PEARLS, Studded With Galactic Diamonds', 'NASA’s James Webb Space Telescope has captured one of the first medium-deep wide-field images of the cosmos, featuring a region of the sky known as the North Ecliptic Pole. The image, which accompanies a paper published in the Astronomical Journal, is from the Prime Extragalactic Areas for Reionization and Lensing Science (PEARLS) GTO program.\r\n\r\n“Medium-deep” refers to the faintest objects that can be seen in this image, which are about 29th magnitude (1 billion times fainter than what can be s', '2022-12-22 14:13:21', 2),
(15, 'Sifat Bin Hossain', 'WhatsApp Image 2022-11-05 at 19.31.57.jpg', '', 'The Department of EEE, BUET, IEEE EDS/SSCS Bangladesh Chapter, and IEEE EDS BUET Student branch are jointly organizing 𝐕𝐋𝐒𝐈 𝐃𝐞𝐬𝐢𝐠𝐧 𝐂𝐨𝐦𝐩𝐞𝐭𝐢𝐭𝐢𝐨𝐧 𝟐𝟎𝟐𝟐 ⁣ The primary objective of the competition is to grow interest in Very Large Scale Integration (VLSI) simply known as chip design among the students and make them aware of the tremendous potentiality of this sector.⁣ ⁣ 𝐄𝐥𝐢𝐠𝐢𝐛𝐢𝐥𝐢𝐭𝐲: The participant must be an undergraduate student of EEE/CSE of any University in Bangladesh.⁣ ⁣', '2022-12-22 14:18:24', 3),
(15, 'Sifat Bin Hossain', 'WhatsApp Image 2022-11-05 at 19.31.57.jpg', 'Webb Glimpses Field of Extragalactic PEARLS, Studded With Galactic Diamonds', 'NASA’s James Webb Space Telescope has captured one of the first medium-deep wide-field images of the cosmos, featuring a region of the sky known as the North Ecliptic Pole. The image, which accompanies a paper published in the Astronomical Journal, is from the Prime Extragalactic Areas for Reionization and Lensing Science (PEARLS) GTO program.\r\n\r\n“Medium-deep” refers to the faintest objects that can be seen in this image, which are about 29th magnitude (1 billion times fainter than what can be s', '2022-12-22 14:50:57', 4),
(1, 'Abu Sayem Md Siam', 'img_avatar.png', 'Python or Java?', 'Which one shoud I learn First', '2022-12-23 01:02:31', 5),
(1, 'Abu Sayem Md Siam', 'img_avatar.png', 'Python or Java?', 'Which one shoud I learn First', '2022-12-23 01:03:27', 6);

-- --------------------------------------------------------

--
-- Table structure for table `companyinfo`
--

CREATE TABLE `companyinfo` (
  `acc_id` int(50) NOT NULL,
  `com_id` int(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `companyDetails` varchar(500) NOT NULL,
  `companyLocation` varchar(100) NOT NULL,
  `websiteLink` varchar(50) NOT NULL,
  `photo_loc` varchar(50) NOT NULL,
  `founded` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `companyinfo`
--

INSERT INTO `companyinfo` (`acc_id`, `com_id`, `companyName`, `companyDetails`, `companyLocation`, `websiteLink`, `photo_loc`, `founded`) VALUES
(17, 4, 'Robi', 'Robi represents a world of opportunity, challenge and fulfillment. This is a performance-driven organization which believes that performance comes from belongingness and ownership and we always reward the performers in all aspects.', 'Gulshan, Dhaka', 'robi.com.bd', 'robi.png', '2022-12-09'),
(18, 5, 'Banglalink', 'Jole Uthun apon Soktite', 'Banani, Dhaka', 'https://www.banglalink.net/en', 'banglalink.png', '2022-12-02');

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
-- Table structure for table `jobs_alumni`
--

CREATE TABLE `jobs_alumni` (
  `sl` int(100) NOT NULL,
  `job_title` varchar(200) NOT NULL,
  `deadline` date NOT NULL,
  `vacency` varchar(100) NOT NULL,
  `experiance` varchar(100) NOT NULL,
  `job_description` text NOT NULL,
  `education` varchar(500) NOT NULL,
  `skills` varchar(500) NOT NULL,
  `job_requirements` varchar(500) NOT NULL,
  `job_type` varchar(100) NOT NULL,
  `sallary` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `company` varchar(100) NOT NULL,
  `apply_link` varchar(100) NOT NULL,
  `post_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs_alumni`
--

INSERT INTO `jobs_alumni` (`sl`, `job_title`, `deadline`, `vacency`, `experiance`, `job_description`, `education`, `skills`, `job_requirements`, `job_type`, `sallary`, `location`, `company`, `apply_link`, `post_date`) VALUES
(1, 'Specialist, IT & IS Procurement', '2022-12-30', '1', '1', '1.IT & IS Procurement 1. Managing implementation of functional procedures, procurement plan in terms of overall IT & IS related procurements through: \r\n\r\n- Conducting RFI/ RFQ/ RFP process in response to users’ requisition as per approved budget, appropriate process to select appropriate partner(s)/ supplier(s). \r\n\r\n- Preparing bid summary, comparative statements and negotiation planning/strategy to acquire right products at the right time from right sources with reasonably right price. - Arranging and conducting negotiation with the qualified partners/ suppliers to ensure reasonably right price and right & appropriate terms for Robi. \r\n\r\n- Raising Procurement Approval Note and obtaining Management Approval \r\n\r\n- Creating PO (Purchase Order) / LOI / LOA as per the approval. \r\n\r\n- Follow-up with the vendor for on-time delivery. \r\n\r\n- Preserving all documents, keeping track of Cost-savings. \r\n\r\n- Monitoring supplier performance and resolving issues and concerns. \r\n\r\n- Seek alternate vendors and competitive pricing when advantageous. \r\n\r\n2. Coordinating with APC (Axiata Procurement Center) and across the Axiata OpCo’s for Global products benchmarking and procurement tactic. \r\n\r\n3. Manage to formulate effective and fit for purpose RFI/ RFQ/ RFP strategy to maximize cost efficiency and minimizing business risk. Conduct fast, fair and transparent RFI/ RFQ/ RFP while complying with process and policies \r\n\r\n4. Manage to coordinate with end users for enforcement of new contract, renewal of existing contract and modification of clauses of contract as and when required basis. \r\n\r\n5. Ensure that periodic review and assessment are carried out to manage risk exposure of all the active contracts and necessary recommendation are made to management as risk mitigation strategy or action plan \r\n\r\n6. Manage procurement spending, identify trends, plan and negotiate cost reduction and efficiency programs \r\n\r\n7. Manage different kind of periodical and regular Procurement related Performance Report for the responsible area/ categories \r\n\r\n8. Manage planning and development of procurement categories and ensure correct communication flow between multiple internal stakeholders. \r\n\r\n9. Manage to develop and ensure procurement plan, Partner/ Supplier management strategies, category management and fit for purpose procurement plan to mitigate delivery, implementation and performance risk. \r\n\r\n10. Manage to develop and maintain Partner/ Supplier market intelligence technique and adequate number of Partners/ Suppliers to ensure competition. \r\n\r\n11. Identify, develop and manage improvement Projects in SCM to strengthen the Procurement as well as SCM activities. 12. Manage to develop, generate and manage Reporting functions (relevant to Procurement) for Robi Management and Group as and when required basis. \r\n\r\n13. Ensure Continuous Improvement of Customer satisfaction Level and Partner/ Supplier satisfaction Level and overall Internal and external stakeholders Relationship Management. \r\n\r\n14. Manage to ensure Process Compliance and Assurance, where possible use templates to streamline/reduce procurement and contracting cycles, minimize risk and maximize compliance. \r\n\r\n15. Guide, supervise and coordinate with end users and Vendors for enforcement new policy, process, procedure and practices. \r\n\r\n16. Facilitating and assisting all audits conducted over the years by Internal/ External/ Group Audit.', ' Bachelor’s degree / Master’s degree or equivalent preferably in Business Management or Finance from an UGC ap-proved renowned university. Experience in SAP & eProcurement tools will provide added advantage to the applicants\r\n\r\n', 'Great relationship management.\r\nStrong negotiation skills. \r\nImpeccable time-management.\r\nStrategic thinking. \r\nChange positive.', 'Microsoft Exel, Word, PowerPoint\r\nProject Management & Coordination\r\nMicrosoft Excel, Word, PowerPoint\r\nIT\r\nMS Word, EXCEL, power Point\r\nMicrosoft Windows\r\nPatience', 'Full-Time', 'Negotiable', 'Dhaka,Bangladesh', 'Robi Axita Ltd.', 'https://www.robicareer.com/auth/login?returnUrl=job-portal%2Fjobs%2Fjob-detail%2F4685', '2022-12-22 00:00:00'),
(3, 'abc', '2022-12-30', '1', '2', 'adadwqwdad', 'wdadwad', 'wdadwad', 'dwdad', 'wdwa', 'adw', 'adawd', 'xyz', 'wdaw', '2022-12-22 00:00:00'),
(4, 'xyz', '2022-12-28', '2', '2', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Officiis similique quis doloribus laudantium delectus iure culpa obcaecati! Totam, provident, nobis facilis exercitationem aliquid molestias nisi assumenda mollitia iste odit ea doloribus commodi optio. Corrupti quibusdam totam, dolore atque cupiditate illum quisquam eos vitae. Modi fuga praesentium quae placeat et nulla cupiditate suscipit ad? Quidem nemo iure ducimus aliquid suscipit modi explicabo sed molestias architecto a earum, cum vero odit est voluptatum possimus unde qui enim dignissimos autem animi. Suscipit fugit quod aperiam alias eligendi, ipsum consequatur quidem odio beatae culpa dignissimos, dicta aliquid dolor architecto fuga! Commodi, sit cupiditate eum assumenda voluptate eaque corporis provident nulla iure perspiciatis aperiam itaque, qui voluptatem debitis accusamus quae neque rem officiis voluptatibus rerum aspernatur sapiente? Incidunt ut sunt adipisci quae, ad quibusdam exercitationem velit vero impedit illo. Deserunt alias ad ea facere voluptatibus laudantium, libero aliquid odit delectus blanditiis sapiente nostrum labore repellendus?', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, culpa saepe perferendis obcaecati harum fugit vel temporibus omnis aspernatur, quae quo magni? Voluptatibus et laudantium maxime dolor. Distinctio esse in atque excepturi facere architecto tempora dolorum ipsa quos voluptatum! Dignissimos illum error ducimus quaerat. Recusandae eum tempora vitae alias. Praesentium.', 'sefsfada,wdad,wdwdada', 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, culpa saepe perferendis obcaecati harum fugit vel temporibus omnis aspernatur, quae quo magni? Voluptatibus et laudantium maxime dolor. Distinctio esse in atque excepturi facere architecto tempora dolorum ipsa quos voluptatum! Dignissimos illum error ducimus quaerat. Recusandae eum tempora vitae alias. Praesentium.', 'Full-Time', 'Negotiable', 'Dhaka', 'xyz', 'www.youtube.com', '2022-12-22 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `job_applicant`
--

CREATE TABLE `job_applicant` (
  `acc_id` int(50) NOT NULL,
  `com_id` int(50) NOT NULL,
  `applicant_id` int(50) NOT NULL,
  `photo` varchar(50) NOT NULL,
  `applicantName` varchar(50) NOT NULL,
  `applicantEmail` varchar(50) NOT NULL,
  `applicantPhone` int(11) NOT NULL,
  `applicantDes` varchar(500) NOT NULL,
  `websiteLink` varchar(100) NOT NULL,
  `applicantCV` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_applicant`
--

INSERT INTO `job_applicant` (`acc_id`, `com_id`, `applicant_id`, `photo`, `applicantName`, `applicantEmail`, `applicantPhone`, `applicantDes`, `websiteLink`, `applicantCV`) VALUES
(15, 4, 3, '', '', '', 0, '', '', ''),
(15, 4, 4, 'WhatsApp Image 2022-11-05 at 19.31.57.jpg', 'Md. Sabbir', 'sabbir@gmail.com', 1722556699, ' I am Sabbir', 'sabbir.com', 'WhatsApp Image 2022-11-05 at 19.31.57.jpg'),
(13, 5, 5, '', 'Arafat BIn Hossain', 'arafat@gmail.com', 1225566, 'about.me is a personal web hosting service co-founded by Ryan Freitas, Tony Conrad and Tim Young in October 2009. The site offers registered users a simple platform from which to link multiple online identities, relevant external sites, and popular social networking websites such as Facebook, Flickr, and', 'arfat.com', 'achievement.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `job_info`
--

CREATE TABLE `job_info` (
  `job_title` varchar(100) NOT NULL,
  `vacancy` int(3) NOT NULL,
  `experience` int(2) NOT NULL,
  `job_des` varchar(5000) NOT NULL,
  `edu_req` varchar(1000) NOT NULL,
  `job_requirement` varchar(500) NOT NULL,
  `skill_req` varchar(200) NOT NULL,
  `employment_status` varchar(100) NOT NULL,
  `salary` int(10) NOT NULL,
  `job_loc` varchar(100) NOT NULL,
  `job_id` int(10) NOT NULL,
  `company_id` int(11) NOT NULL,
  `deadline` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `job_info`
--

INSERT INTO `job_info` (`job_title`, `vacancy`, `experience`, `job_des`, `edu_req`, `job_requirement`, `skill_req`, `employment_status`, `salary`, `job_loc`, `job_id`, `company_id`, `deadline`) VALUES
('Senior software engineer ', 3, 0, 'We are looking for Software Engineer having good knowledge on any of the major programming language, like C/C++, C#, Java, PHP, Python, etc', '• B.Sc or M.Sc in Computer Science/Engineering or equivalent.', '• Design, code, test and implement according to software design specifications following standard coding styles and practices.\r\n• Analyze the requirements and understand the deliverables.\r\n• Develop software solutions by studying information needs, systems flow, data usage, and work processes.', '• Must have strong knowledge of any major programming language, like C/C++, C#, Java, PHP, Python, etc.\r\n• Must be familiar with any relational database, like Microsoft SQL Server, MySQL, Oracle, etc.', '', 60000, 'Gulshan, Dhaka', 13, 4, 2022),
('User Interface Designer', 1, 0, 'We are looking for a dynamic UI/UX designer who will be responsible for the user experience (UX) and user interface (UI) design of our various digital assets. You will ensure that all elements of the online user experience are optimized for improved usability, usefulness, and exceptional visual design.', '· Graduate in in Computer Science & Engineering or in Fine Arts with strong concepts of UI-UX Design.', '• Investigating user experience design requirements for our suite of digital assets.\r\n• Developing and conceptualizing a comprehensive UI/UX design strategy for the brand.\r\n• Producing high-quality UX design solutions through wireframes, visual and graphic designs, flow diagrams, storyboards, site maps, and prototypes.\r\n• Designing UI elements and tools such as navigation menus search boxes, tabs, and widgets for our digital assets.\r\n• Testing UI elements such as CTAs, banners, page layouts, pag', '· Skills Required: Adobe XD, Figma, Framer, Adobe Photoshop, and Adobe Illustrator.', 'N/A', 20000, 'Banani, Dhaka', 15, 5, 2022);

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
(15, 0, 'Hi, Its me Sabbir', 'Dhanmondi, Dhaka', 'sabbir@gmail.com', '147856', 'WhatsApp Image 2022-11-05 at 19.31.57.jpg', 'habc', 'awe', 'UIU', '', '', '2017', '2019', '2024', '', '', '5.00', '5.00', '3.70', '', 'Python,Java', 'English,Hindi', 'N/A', 'N/A', 'N/A'),
(16, 0, 'Hi aaaa', 'Demra', 'asiam201033@bscse.uiu.ac.bd', '1814689066', 'WhatsApp Image 2022-11-05 at 19.31.57.jpg', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A', 'N/A'),
(13, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '');

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
-- Indexes for table `blog_info`
--
ALTER TABLE `blog_info`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `cmnt_notification`
--
ALTER TABLE `cmnt_notification`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `communitycomment`
--
ALTER TABLE `communitycomment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `communitypost`
--
ALTER TABLE `communitypost`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- Indexes for table `companyinfo`
--
ALTER TABLE `companyinfo`
  ADD PRIMARY KEY (`com_id`),
  ADD KEY `acc_id` (`acc_id`);

--
-- Indexes for table `event_info`
--
ALTER TABLE `event_info`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `jobs_alumni`
--
ALTER TABLE `jobs_alumni`
  ADD PRIMARY KEY (`sl`);

--
-- Indexes for table `job_applicant`
--
ALTER TABLE `job_applicant`
  ADD PRIMARY KEY (`applicant_id`),
  ADD KEY `acc_id` (`acc_id`),
  ADD KEY `com_id` (`com_id`);

--
-- Indexes for table `job_info`
--
ALTER TABLE `job_info`
  ADD PRIMARY KEY (`job_id`),
  ADD KEY `company_id` (`company_id`);

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
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `blog_info`
--
ALTER TABLE `blog_info`
  MODIFY `blog_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `cmnt_notification`
--
ALTER TABLE `cmnt_notification`
  MODIFY `sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `communitycomment`
--
ALTER TABLE `communitycomment`
  MODIFY `comment_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `communitypost`
--
ALTER TABLE `communitypost`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `companyinfo`
--
ALTER TABLE `companyinfo`
  MODIFY `com_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `event_info`
--
ALTER TABLE `event_info`
  MODIFY `event_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `jobs_alumni`
--
ALTER TABLE `jobs_alumni`
  MODIFY `sl` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `job_applicant`
--
ALTER TABLE `job_applicant`
  MODIFY `applicant_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `job_info`
--
ALTER TABLE `job_info`
  MODIFY `job_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
-- Constraints for table `companyinfo`
--
ALTER TABLE `companyinfo`
  ADD CONSTRAINT `companyinfo_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`acc_id`);

--
-- Constraints for table `job_applicant`
--
ALTER TABLE `job_applicant`
  ADD CONSTRAINT `job_applicant_ibfk_1` FOREIGN KEY (`acc_id`) REFERENCES `accounts` (`acc_id`),
  ADD CONSTRAINT `job_applicant_ibfk_2` FOREIGN KEY (`com_id`) REFERENCES `companyinfo` (`com_id`);

--
-- Constraints for table `job_info`
--
ALTER TABLE `job_info`
  ADD CONSTRAINT `job_info_ibfk_1` FOREIGN KEY (`company_id`) REFERENCES `companyinfo` (`com_id`);

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
