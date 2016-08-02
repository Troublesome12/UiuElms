-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 02, 2016 at 08:50 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 7.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uiu_elms`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(50) CHARACTER SET latin1 NOT NULL,
  `image` varchar(50) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`, `email`, `image`) VALUES
(1, 'Shariful Islam', 'arafat', 'shariful@bscse.uiu.ac.bd', 'troublesome.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `code` varchar(8) CHARACTER SET latin1 NOT NULL,
  `name` varchar(55) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`code`, `name`) VALUES
('CSE123', 'Electronics'),
('CSE124', 'Electronics Lab'),
('CSE236', 'Assembly Programming Lab'),
('CSE313', 'Computer Architecture'),
('CSE315', 'Data Communication'),
('CSE323', 'Computer Networks'),
('CSE324', 'Computer Networks Lab'),
('CSE425', 'Microprocessor, Microcontroller and Interfacing'),
('CSE426', 'Microprocessor, Microcontroller and Interfacing Lab'),
('CSE429', 'Digital System Design'),
('CSE430', 'Digital System Design Lab'),
('CSI211', 'Object Oriented Programming'),
('CSI212', 'Object Oriented Programming Lab'),
('CSI221', 'Database Management System'),
('CSI222', 'Database Management System Lab'),
('CSI225', 'Digital Logic Design'),
('CSI226', 'Digital Logic Design Lab'),
('CSI227', 'Algorithms'),
('CSI228', 'Algorithms Lab'),
('CSI229', 'Numerical Methods'),
('CSI233', 'Theory of Computing'),
('CSI309', 'Operating Systems Concept'),
('CSI310', 'Operating Systems Concept Lab'),
('CSI311', 'System Analysis and Design'),
('CSI312', 'System Analysis and Design Lab'),
('CSI321', 'Software Engineering'),
('CSI322', 'Software Engineering Lab'),
('CSI341', 'Artificial Intelligence'),
('CSI342', 'Artificial Intelligence Lab'),
('CSI411', 'Compiler'),
('CSI412', 'Compiler Lab');

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `id` int(11) NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `designation` varchar(150) CHARACTER SET latin1 NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `image` varchar(50) CHARACTER SET latin1 DEFAULT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`id`, `name`, `designation`, `email`, `image`, `password`) VALUES
(1, 'Mohammad Nurul Huda', 'Professor & Coordinator - MSCSE', 'mnh@cse.uiu.ac.bd', 'mnh.jpg', '12345'),
(2, 'Chowdhury Mofizur Rahman', 'Professor & Pro-Vice Chancellor', 'cmr@uiu.ac.bd', 'cmr.jpg', '12345'),
(3, 'Hasan Sarwar', 'Professor', 'hsarwar@cse.uiu.ac.bd', 'hs.jpg', '12345'),
(4, 'Khondaker Abdullah Al Mamun', 'Associate Professor & Director - AIMS Lab', 'mamun@cse.uiu.ac.bd', 'kalm.jpg', '12345'),
(5, 'Salekul Islam', 'Associate Professor & Head of the CSE Dept.', 'salekul@cse.uiu.ac.bd', 'si.jpg', '12345'),
(6, 'Swakkhar Shatabda', 'Asst. Professor & Undergraduate Program Coordinator', 'swakkhar@cse.uiu.ac.bd', 'ss.jpg', '12345'),
(7, 'Suman Ahmmed', 'Asst. Professor', 'suman@cse.uiu.ac.bd', 'sa.jpg', '12345'),
(8, 'Mohammad Mamun Elahi', 'Asst. Professor', 'mmelahi@cse.uiu.ac.bd', 'me.jpg', '12345'),
(9, 'Md. Benzir Ahmed', 'Asst. Professor', 'benzir@cse.uiu.ac.bd', 'ba.jpg', '12345'),
(10, 'Novia Nurain', 'Asst. Professor', 'novia@cse.uiu.ac.bd', 'nn.jpg', '12345'),
(11, 'Tanjina Helaly', 'Sr. Lecturer', 'tanjina@cse.uiu.ac.bd', 'th.jpg', '12345'),
(12, 'Abu Shafin Mohammad Mahdee Jameel', 'Sr. Lecturer', 'mahdee@cse.uiu.ac.bd', 'shafin.jpg', '12345'),
(13, 'Sanjay Saha', 'Lecturer', 'sanjay@cse.uiu.ac.bd', 'sanjay.jpg', '12345'),
(14, 'Nasif Muslim', 'Lecturer', 'nasif@cse.uiu.ac.bd', 'nasif.png', '12345'),
(15, 'Muhammad Tasnim Mohiuddin', 'Lecturer', 'tasnim@cse.uiu.ac.bd', 'tasnim.jpg', '12345'),
(16, 'Khandokar Md. Nayem', 'Lecturer', 'nayem@cse.uiu.ac.bd', 'kmn.jpg', '12345'),
(17, 'Samiha Samrose', 'Lecturer', 'samiha@cse.uiu.ac.bd', 'samiha.jpg', '12345'),
(18, 'Md. Kamrul Hasan', 'Lecturer', 'kamrul@cse.uiu.ac.bd', 'kh.jpg', '12345'),
(19, 'Md. Nasim', 'Lecturer', 'nasim@cse.uiu.ac.bd', 'nasim.jpg', '12345'),
(20, 'Samia Kabir', 'Lecturer', 'samia@cse.uiu.ac.bd', 'sk.jpg', '12345'),
(21, 'Maitraye Das', 'Lecturer', 'maitraye@cse.uiu.ac.bd', 'md.jpg', '12345'),
(22, 'Khairul Mottakin', 'Lecturer', 'mottakin@cse.uiu.ac.bd', 'km.jpg', '12345'),
(23, 'Imtiaz Ahmad', 'Lecturer', 'imtiaz@cse.uiu.ac.bd', 'imtiaz.jpg', '12345'),
(24, 'Mahbuba Afrin', 'Lecturer', 'mahbuba@cse.uiu.ac.bd', 'afrin.jpg', '12345'),
(25, 'Md. Mofijul Islam', 'Lecturer', 'mofijul@cse.uiu.ac.bd', 'mofijul.jpeg', '12345'),
(26, 'Md. Rizwan Parvez', 'Lecturer', 'parvez@cse.uiu.ac.bd', 'parvez.jpg', '12345'),
(27, 'Md. Mahmudur Rahman', 'Lecturer', '	mahmudur@cse.uiu.ac.bd', 'mr.jpg', '12345'),
(28, 'Zarrin Tasnim Sworna', 'Lecturer', 'sworna@cse.uiu.ac.bd', 'sworna.jpg', '12345');

--
-- Triggers `faculty`
--
DELIMITER $$
CREATE TRIGGER `faculty_delete_trigger` BEFORE DELETE ON `faculty` FOR EACH ROW DELETE FROM skill WHERE id = OLD.id
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `faculty_insert_trigger` AFTER INSERT ON `faculty` FOR EACH ROW INSERT INTO skill VALUES(NEW.id, 4, 4, 4, 1)
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `course_code` varchar(8) CHARACTER SET latin1 NOT NULL,
  `sec` varchar(3) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`course_code`, `sec`) VALUES
('CSE236', 'NA'),
('CSE236', 'NB'),
('CSE236', 'NC'),
('CSE313', 'A'),
('CSE313', 'B'),
('CSI222', 'A'),
('CSI227', 'A'),
('CSI227', 'B'),
('CSI227', 'C'),
('CSI228', 'A'),
('CSI341', 'A'),
('CSI341', 'B'),
('CSI342', 'A'),
('CSI411', 'A'),
('CSI411', 'B'),
('CSI411', 'C'),
('CSI412', 'A'),
('CSI412', 'B'),
('CSI412', 'C');

-- --------------------------------------------------------

--
-- Table structure for table `skill`
--

CREATE TABLE `skill` (
  `id` int(11) NOT NULL,
  `helpfulness` int(11) NOT NULL,
  `clarity` int(11) NOT NULL,
  `easiness` int(11) NOT NULL,
  `voter` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skill`
--

INSERT INTO `skill` (`id`, `helpfulness`, `clarity`, `easiness`, `voter`) VALUES
(1, 116, 116, 115, 24),
(2, 85, 86, 79, 20),
(3, 92, 93, 91, 22),
(4, 58, 59, 61, 16),
(5, 82, 85, 80, 23),
(6, 109, 106, 102, 23),
(7, 70, 69, 69, 17),
(8, 46, 45, 44, 12),
(9, 46, 48, 44, 14),
(10, 105, 104, 105, 22),
(11, 69, 65, 63, 17),
(12, 61, 60, 65, 17),
(13, 66, 60, 54, 20),
(14, 55, 51, 53, 14),
(15, 58, 58, 55, 15),
(16, 49, 47, 45, 12),
(17, 75, 71, 70, 18),
(18, 82, 77, 75, 21),
(19, 41, 39, 38, 13),
(20, 65, 67, 63, 16),
(21, 41, 38, 38, 14),
(22, 58, 57, 58, 14),
(23, 50, 48, 47, 16),
(24, 4, 4, 4, 1),
(25, 4, 4, 4, 1),
(26, 4, 4, 4, 1),
(27, 4, 4, 4, 1),
(28, 4, 4, 4, 1);

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` varchar(9) CHARACTER SET latin1 NOT NULL,
  `name` varchar(50) CHARACTER SET latin1 NOT NULL,
  `password` varchar(100) CHARACTER SET latin1 NOT NULL,
  `email` varchar(30) CHARACTER SET latin1 DEFAULT NULL,
  `image` varchar(40) CHARACTER SET latin1 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `name`, `password`, `email`, `image`) VALUES
('011132012', 'Arefeen Choyon', 'arefeen', 'arefeen.choyon@bscse.uiu.ac.bd', ''),
('011132017', 'Shaion Ahmed', 'shaion', 'shaion@bscse.uiu.ac.bd', 'jd.png');

-- --------------------------------------------------------

--
-- Table structure for table `vote`
--

CREATE TABLE `vote` (
  `student_id` varchar(9) CHARACTER SET latin1 NOT NULL,
  `faculty_id` int(11) NOT NULL,
  `helpfulness` int(11) NOT NULL,
  `clarity` int(11) NOT NULL,
  `easiness` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `vote`
--

INSERT INTO `vote` (`student_id`, `faculty_id`, `helpfulness`, `clarity`, `easiness`) VALUES
('011132017', 1, 5, 5, 5),
('011132017', 2, 5, 4, 3),
('011132017', 5, 2, 4, 3),
('011132017', 6, 5, 4, 3),
('011132017', 7, 5, 5, 5),
('011132017', 8, 3, 3, 3),
('011132017', 13, 5, 4, 4),
('011132017', 18, 5, 4, 4);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`code`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`course_code`,`sec`);

--
-- Indexes for table `skill`
--
ALTER TABLE `skill`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `vote`
--
ALTER TABLE `vote`
  ADD PRIMARY KEY (`student_id`,`faculty_id`),
  ADD KEY `faculty_id` (`faculty_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `faculty`
--
ALTER TABLE `faculty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`course_code`) REFERENCES `course` (`code`);

--
-- Constraints for table `skill`
--
ALTER TABLE `skill`
  ADD CONSTRAINT `skill_ibfk_1` FOREIGN KEY (`id`) REFERENCES `faculty` (`id`);

--
-- Constraints for table `vote`
--
ALTER TABLE `vote`
  ADD CONSTRAINT `vote_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student` (`id`),
  ADD CONSTRAINT `vote_ibfk_2` FOREIGN KEY (`faculty_id`) REFERENCES `faculty` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
