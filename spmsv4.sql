-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 27, 2023 at 06:41 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spmsv4`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer`
--

CREATE TABLE `answer` (
  `answerID` int(6) NOT NULL,
  `answerDetails` varchar(10000) NOT NULL,
  `marksObtained` int(11) NOT NULL,
  `qID` int(6) NOT NULL,
  `studentID` int(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `co`
--

CREATE TABLE `co` (
  `coID` int(6) NOT NULL,
  `coNumber` int(11) NOT NULL,
  `coDescription` varchar(1000) NOT NULL,
  `courseID` char(6) NOT NULL,
  `ploID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `co`
--

INSERT INTO `co` (`coID`, `coNumber`, `coDescription`, `courseID`, `ploID`) VALUES
(911111, 1, 'CO1 of CSE303. students will learn design of web app. ', 'CSE303', 123458),
(911112, 2, 'C02 of CSE303. students will learn IDE and framework.', 'CSE303', 123654),
(911113, 3, 'CO3 of CSE303. students will learn SQl', 'CSE303', 123451),
(912345, 1, 'CO1 of CSE101. this will give the students idea of IDE', 'CSE101', 123654),
(912346, 2, 'CO2 of CSE101. in this CO students learn programming language.', 'CSE101', 123457),
(912347, 1, 'CO1 of CSE216. this is related to IDE', 'CSE216', 123654),
(912348, 2, 'CO2 of CSE216. This will teach student application design using fxml.', 'CSE216', 123458),
(912349, 3, 'CO3 of CSE216. students will learn java.', 'CSE216', 123457),
(922221, 1, 'CO1 of CSE309. students will master ide use', 'CSE309', 123654),
(922222, 2, 'CO2 of CSE309. students will learn more about database and it\'s uses in the backend ', 'CSE309', 123451),
(922223, 3, 'CO3 of CSE309. students will learn about html, css and framework of css', 'CSE309', 123458),
(922224, 4, 'CO4 of CSE309. students will learn javascripts and php ', 'CSE309', 123451);

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `courseID` char(6) NOT NULL,
  `courseName` varchar(50) NOT NULL,
  `numofCredits` int(1) NOT NULL,
  `courseType` varchar(50) NOT NULL,
  `programmeID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `courseName`, `numofCredits`, `courseType`, `programmeID`) VALUES
('CSE101', 'SPL', 4, 'Theory and Lab', 123456),
('CSE216', 'OOP', 4, 'Theory and Lab', 123456),
('CSE303', 'DBMS', 4, 'Theory and Lab', 123456),
('CSE309', 'Web App ', 3, 'Theory', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `course_prereq`
--

CREATE TABLE `course_prereq` (
  `courseID` char(6) NOT NULL,
  `prereqCourse` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `course_prereq`
--

INSERT INTO `course_prereq` (`courseID`, `prereqCourse`) VALUES
('CSE216', 'CSE101'),
('CSE303', 'CSE216'),
('CSE309', 'CSE216'),
('CSE309', 'CSE303');

-- --------------------------------------------------------

--
-- Table structure for table `curr_user`
--

CREATE TABLE `curr_user` (
  `userID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `curr_user`
--

INSERT INTO `curr_user` (`userID`) VALUES
(2021367);

-- --------------------------------------------------------

--
-- Table structure for table `dean`
--

CREATE TABLE `dean` (
  `dEmployeeID` int(4) NOT NULL,
  `schoolID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dean`
--

INSERT INTO `dean` (`dEmployeeID`, `schoolID`) VALUES
(1000, 10000),
(2000, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

CREATE TABLE `department` (
  `departmentID` int(5) NOT NULL,
  `departmentName` varchar(50) NOT NULL,
  `schoolID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentID`, `departmentName`, `schoolID`) VALUES
(12345, 'CSE', 10000),
(54321, 'ELT', 20000);

-- --------------------------------------------------------

--
-- Table structure for table `departmenthead`
--

CREATE TABLE `departmenthead` (
  `hEmployeeID` int(4) NOT NULL,
  `departmentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `departmenthead`
--

INSERT INTO `departmenthead` (`hEmployeeID`, `departmentID`) VALUES
(1000, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employeeID` int(4) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `startDate` date NOT NULL,
  `endDate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employeeID`, `firstName`, `lastName`, `password`, `startDate`, `endDate`) VALUES
(1000, 'Mahady', 'Hasan', '12345678', '2022-11-18', '2025-04-09'),
(2000, 'Taiabur', 'Rahman', '12345678', '2021-02-17', '2026-04-15');

-- --------------------------------------------------------

--
-- Table structure for table `exam`
--

CREATE TABLE `exam` (
  `examID` int(6) NOT NULL,
  `examName` varchar(20) NOT NULL,
  `sectionID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `exam`
--

INSERT INTO `exam` (`examID`, `examName`, `sectionID`) VALUES
(100001, 'mid', 400001),
(100002, 'final', 400001),
(100003, 'mid', 400002),
(100004, 'final', 400002),
(100005, 'mid', 400003),
(100006, 'final', 400003),
(100007, 'mid', 400004),
(100008, 'final', 400004),
(100009, 'mid', 400005),
(100010, 'final', 400005),
(100011, 'mid', 400006),
(100012, 'final', 400006),
(100013, 'mid', 400007),
(100014, 'final', 400007),
(100015, 'mid', 400008),
(100016, 'final', 400008);

-- --------------------------------------------------------

--
-- Table structure for table `faculty`
--

CREATE TABLE `faculty` (
  `fEmployeeID` int(4) NOT NULL,
  `departmentID` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `faculty`
--

INSERT INTO `faculty` (`fEmployeeID`, `departmentID`) VALUES
(1000, 12345);

-- --------------------------------------------------------

--
-- Table structure for table `plo`
--

CREATE TABLE `plo` (
  `ploID` int(6) NOT NULL,
  `ploNuber` int(11) NOT NULL,
  `ploDescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `plo`
--

INSERT INTO `plo` (`ploID`, `ploNuber`, `ploDescription`) VALUES
(123451, 4, 'This is plo 4. Students will learn about SQL in this plo. '),
(123457, 2, 'This is plo 2. In this plo students of the computer science programme will learn about different programming languages. '),
(123458, 3, 'This is plo 3. students of computer science learn about web applications and design in this part.'),
(123654, 1, 'this is plo 1 of computer science programme. In this plo student will learn about IDE. ');

-- --------------------------------------------------------

--
-- Table structure for table `programme`
--

CREATE TABLE `programme` (
  `programmeID` int(6) NOT NULL,
  `departmentID` int(5) NOT NULL,
  `programmeName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programme`
--

INSERT INTO `programme` (`programmeID`, `departmentID`, `programmeName`) VALUES
(123456, 12345, 'Computer Science'),
(654321, 12345, 'Computer Engineering ');

-- --------------------------------------------------------

--
-- Table structure for table `programme_plo`
--

CREATE TABLE `programme_plo` (
  `programmeID` int(6) NOT NULL,
  `ploID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `programme_plo`
--

INSERT INTO `programme_plo` (`programmeID`, `ploID`) VALUES
(123456, 123451),
(123456, 123457),
(123456, 123458),
(123456, 123654);

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `qID` int(6) NOT NULL,
  `qNumber` varchar(2) NOT NULL,
  `marks` int(11) NOT NULL,
  `coID` int(6) NOT NULL,
  `examID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `school`
--

CREATE TABLE `school` (
  `schoolID` int(5) NOT NULL,
  `schoolName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school`
--

INSERT INTO `school` (`schoolID`, `schoolName`) VALUES
(10000, 'SETS'),
(20000, 'SLASS');

-- --------------------------------------------------------

--
-- Table structure for table `section`
--

CREATE TABLE `section` (
  `sectionID` int(6) NOT NULL,
  `sectionNumber` int(11) NOT NULL,
  `semester` varchar(6) NOT NULL,
  `year` int(4) NOT NULL,
  `facultyID` int(4) NOT NULL,
  `courseID` char(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `section`
--

INSERT INTO `section` (`sectionID`, `sectionNumber`, `semester`, `year`, `facultyID`, `courseID`) VALUES
(400001, 1, 'Summer', 2018, 1000, 'CSE101'),
(400002, 2, 'Summer', 2018, 1000, 'CSE101'),
(400003, 1, 'Autumn', 2018, 1000, 'CSE216'),
(400004, 2, 'Autumn', 2018, 1000, 'CSE216'),
(400005, 1, 'Spring', 2019, 1000, 'CSE303'),
(400006, 2, 'Spring', 2019, 1000, 'CSE303'),
(400007, 1, 'Summer', 2019, 1000, 'CSE309'),
(400008, 2, 'Summer', 2019, 1000, 'CSE309');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `studentID` int(7) NOT NULL,
  `firstName` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `DOB` date NOT NULL,
  `gender` varchar(6) NOT NULL,
  `email` varchar(40) NOT NULL,
  `phone` char(11) NOT NULL,
  `password` varchar(20) NOT NULL,
  `programmeID` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`studentID`, `firstName`, `lastName`, `DOB`, `gender`, `email`, `phone`, `password`, `programmeID`) VALUES
(2010235, 'Ayesha', 'Hasan', '2000-06-17', 'Female', '2010235@iub.edu.bd', '01236547891', '12345678', 123456),
(2021367, 'Akib', 'Raihan', '2000-06-17', 'Male', '2021367@iub.edu.bd', '01234567891', '12345678', 123456),
(2030183, 'Jaima', 'Jahan', '2001-09-29', 'Female', '2030183@iub.edu.bd', '03214569871', '12345678', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `student_section`
--

CREATE TABLE `student_section` (
  `studentID` int(7) NOT NULL,
  `sectionID` int(6) NOT NULL,
  `marksObtained` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_section`
--

INSERT INTO `student_section` (`studentID`, `sectionID`, `marksObtained`) VALUES
(2010235, 400001, NULL),
(2010235, 400002, NULL),
(2010235, 400004, NULL),
(2010235, 400005, NULL),
(2010235, 400007, NULL),
(2021367, 400001, 97),
(2021367, 400004, NULL),
(2021367, 400006, NULL),
(2021367, 400007, NULL),
(2030183, 400003, NULL),
(2030183, 400005, NULL),
(2030183, 400007, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `answer`
--
ALTER TABLE `answer`
  ADD PRIMARY KEY (`answerID`),
  ADD KEY `qID` (`qID`),
  ADD KEY `studentID` (`studentID`);

--
-- Indexes for table `co`
--
ALTER TABLE `co`
  ADD PRIMARY KEY (`coID`),
  ADD KEY `courseID` (`courseID`),
  ADD KEY `ploID` (`ploID`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseID`),
  ADD KEY `programmeID` (`programmeID`);

--
-- Indexes for table `course_prereq`
--
ALTER TABLE `course_prereq`
  ADD PRIMARY KEY (`courseID`,`prereqCourse`),
  ADD KEY `prereqCourse` (`prereqCourse`);

--
-- Indexes for table `curr_user`
--
ALTER TABLE `curr_user`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `dean`
--
ALTER TABLE `dean`
  ADD PRIMARY KEY (`dEmployeeID`),
  ADD KEY `schoolID` (`schoolID`);

--
-- Indexes for table `department`
--
ALTER TABLE `department`
  ADD PRIMARY KEY (`departmentID`),
  ADD KEY `schoolidfk` (`schoolID`);

--
-- Indexes for table `departmenthead`
--
ALTER TABLE `departmenthead`
  ADD PRIMARY KEY (`hEmployeeID`),
  ADD KEY `departmentidfk` (`departmentID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employeeID`);

--
-- Indexes for table `exam`
--
ALTER TABLE `exam`
  ADD PRIMARY KEY (`examID`),
  ADD KEY `sectionID` (`sectionID`);

--
-- Indexes for table `faculty`
--
ALTER TABLE `faculty`
  ADD PRIMARY KEY (`fEmployeeID`),
  ADD KEY `departmentID` (`departmentID`);

--
-- Indexes for table `plo`
--
ALTER TABLE `plo`
  ADD PRIMARY KEY (`ploID`);

--
-- Indexes for table `programme`
--
ALTER TABLE `programme`
  ADD PRIMARY KEY (`programmeID`),
  ADD KEY `departmentID` (`departmentID`);

--
-- Indexes for table `programme_plo`
--
ALTER TABLE `programme_plo`
  ADD PRIMARY KEY (`programmeID`,`ploID`),
  ADD KEY `ploID` (`ploID`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`qID`),
  ADD KEY `coID` (`coID`),
  ADD KEY `examID` (`examID`);

--
-- Indexes for table `school`
--
ALTER TABLE `school`
  ADD PRIMARY KEY (`schoolID`);

--
-- Indexes for table `section`
--
ALTER TABLE `section`
  ADD PRIMARY KEY (`sectionID`),
  ADD KEY `courseID` (`courseID`),
  ADD KEY `facultyID` (`facultyID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`studentID`),
  ADD KEY `programmeID` (`programmeID`);

--
-- Indexes for table `student_section`
--
ALTER TABLE `student_section`
  ADD PRIMARY KEY (`studentID`,`sectionID`),
  ADD KEY `sectionID` (`sectionID`),
  ADD KEY `studentID` (`studentID`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `answer`
--
ALTER TABLE `answer`
  ADD CONSTRAINT `answer_ibfk_1` FOREIGN KEY (`qID`) REFERENCES `question` (`qID`),
  ADD CONSTRAINT `answer_ibfk_2` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);

--
-- Constraints for table `co`
--
ALTER TABLE `co`
  ADD CONSTRAINT `co_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`),
  ADD CONSTRAINT `co_ibfk_2` FOREIGN KEY (`ploID`) REFERENCES `plo` (`ploID`);

--
-- Constraints for table `course`
--
ALTER TABLE `course`
  ADD CONSTRAINT `course_ibfk_1` FOREIGN KEY (`programmeID`) REFERENCES `programme` (`programmeID`);

--
-- Constraints for table `course_prereq`
--
ALTER TABLE `course_prereq`
  ADD CONSTRAINT `course_prereq_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`),
  ADD CONSTRAINT `course_prereq_ibfk_2` FOREIGN KEY (`prereqCourse`) REFERENCES `course` (`courseID`);

--
-- Constraints for table `dean`
--
ALTER TABLE `dean`
  ADD CONSTRAINT `dean_ibfk_1` FOREIGN KEY (`dEmployeeID`) REFERENCES `employee` (`employeeID`),
  ADD CONSTRAINT `dean_ibfk_2` FOREIGN KEY (`schoolID`) REFERENCES `school` (`schoolID`);

--
-- Constraints for table `department`
--
ALTER TABLE `department`
  ADD CONSTRAINT `schoolidfk` FOREIGN KEY (`schoolID`) REFERENCES `school` (`schoolID`);

--
-- Constraints for table `departmenthead`
--
ALTER TABLE `departmenthead`
  ADD CONSTRAINT `departmentidfk` FOREIGN KEY (`departmentID`) REFERENCES `department` (`departmentID`),
  ADD CONSTRAINT `employeeidfk` FOREIGN KEY (`hEmployeeID`) REFERENCES `employee` (`employeeID`);

--
-- Constraints for table `exam`
--
ALTER TABLE `exam`
  ADD CONSTRAINT `exam_ibfk_1` FOREIGN KEY (`sectionID`) REFERENCES `section` (`sectionID`);

--
-- Constraints for table `faculty`
--
ALTER TABLE `faculty`
  ADD CONSTRAINT `faculty_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `department` (`departmentID`),
  ADD CONSTRAINT `faculty_ibfk_2` FOREIGN KEY (`fEmployeeID`) REFERENCES `employee` (`employeeID`);

--
-- Constraints for table `programme`
--
ALTER TABLE `programme`
  ADD CONSTRAINT `programme_ibfk_1` FOREIGN KEY (`departmentID`) REFERENCES `department` (`departmentID`);

--
-- Constraints for table `programme_plo`
--
ALTER TABLE `programme_plo`
  ADD CONSTRAINT `programme_plo_ibfk_1` FOREIGN KEY (`ploID`) REFERENCES `plo` (`ploID`),
  ADD CONSTRAINT `programme_plo_ibfk_2` FOREIGN KEY (`programmeID`) REFERENCES `programme` (`programmeID`);

--
-- Constraints for table `question`
--
ALTER TABLE `question`
  ADD CONSTRAINT `question_ibfk_1` FOREIGN KEY (`coID`) REFERENCES `co` (`coID`),
  ADD CONSTRAINT `question_ibfk_2` FOREIGN KEY (`examID`) REFERENCES `exam` (`examID`);

--
-- Constraints for table `section`
--
ALTER TABLE `section`
  ADD CONSTRAINT `section_ibfk_1` FOREIGN KEY (`courseID`) REFERENCES `course` (`courseID`),
  ADD CONSTRAINT `section_ibfk_2` FOREIGN KEY (`facultyID`) REFERENCES `faculty` (`fEmployeeID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`programmeID`) REFERENCES `programme` (`programmeID`);

--
-- Constraints for table `student_section`
--
ALTER TABLE `student_section`
  ADD CONSTRAINT `student_section_ibfk_1` FOREIGN KEY (`sectionID`) REFERENCES `section` (`sectionID`),
  ADD CONSTRAINT `student_section_ibfk_2` FOREIGN KEY (`studentID`) REFERENCES `student` (`studentID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
