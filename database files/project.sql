-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2018 at 09:30 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `academic_calendar`
--

CREATE TABLE `academic_calendar` (
  `serial_no` int(11) NOT NULL,
  `type` varchar(40) DEFAULT NULL,
  `date` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academic_calendar`
--

INSERT INTO `academic_calendar` (`serial_no`, `type`, `date`) VALUES
(1, 'academic session begins', '1-jan'),
(2, 'fateha-e-yazdaham', '11-jan'),
(3, 'annual sports', '21-jan'),
(4, 'swaroswati puja', '1-feb'),
(5, 'maghi purnima', '10-feb'),
(6, 'inner house debate', '11-feb'),
(7, 'study tour', '18-feb'),
(8, 'independance day', '26-mar'),
(9, 'victory day', '16-dec'),
(10, 'eid ul fitr', '15-jun'),
(11, 'eid-ul-azha', '27-aug');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `fullname` varchar(30) DEFAULT NULL,
  `username` varchar(30) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`fullname`, `username`, `password`) VALUES
('Samiul hoque', 'samiul', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `administration`
--

CREATE TABLE `administration` (
  `id` int(11) NOT NULL,
  `name` varchar(15) DEFAULT NULL,
  `post` varchar(15) DEFAULT NULL,
  `salary` int(11) DEFAULT NULL,
  `subject` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `administration`
--

INSERT INTO `administration` (`id`, `name`, `post`, `salary`, `subject`) VALUES
(22005, 'md. aminul hoqu', 'principal', 70000, 'math'),
(22012, 'md. tahsib ahme', 'senior teacher', 70000, 'sociology'),
(22050, 'md. rakibul has', 'junior teacher', 70000, 'science'),
(22110, 'md. refat amin', 'vice principal', 70000, 'english'),
(22181, 'md. al galib', 'senior teacher', 70000, 'bangla');

-- --------------------------------------------------------

--
-- Table structure for table `class_routine`
--

CREATE TABLE `class_routine` (
  `day` varchar(30) NOT NULL,
  `class` varchar(100) NOT NULL,
  `period_1` varchar(30) DEFAULT NULL,
  `period_2` varchar(30) DEFAULT NULL,
  `period_3` varchar(30) DEFAULT NULL,
  `period_4` varchar(30) DEFAULT NULL,
  `period_5` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `class_routine`
--

INSERT INTO `class_routine` (`day`, `class`, `period_1`, `period_2`, `period_3`, `period_4`, `period_5`) VALUES
('sun', 'Five', 'bangla', 'math', 'physics', 'chemistry', 'english'),
('thursday', 'Six', 'math', 'bangla', 'english', 'physics', 'chemistry'),
('wednesday', 'Six', 'bangla', 'math', 'english', 'physics', 'chemistry');

-- --------------------------------------------------------

--
-- Table structure for table `homework`
--

CREATE TABLE `homework` (
  `no` int(11) NOT NULL,
  `question` varchar(150) DEFAULT NULL,
  `ans_1` varchar(150) DEFAULT NULL,
  `ans_2` varchar(150) DEFAULT NULL,
  `ans_3` varchar(150) DEFAULT NULL,
  `right_ans` varchar(150) DEFAULT NULL,
  `subject` varchar(30) DEFAULT NULL,
  `class` varchar(10) DEFAULT NULL,
  `exam_id` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `homework`
--

INSERT INTO `homework` (`no`, `question`, `ans_1`, `ans_2`, `ans_3`, `right_ans`, `subject`, `class`, `exam_id`) VALUES
(51, 'National fruit of bd?', 'mango', 'jackfruit', 'lichi', 'jackfruit', 'general knowledge', 'Eight', '789'),
(52, 'National bird of bd?', 'sparrow', 'hummingbird', 'wagtail', 'wagtail', 'general knowledge', 'Eight', '789'),
(53, 'National sport of bd?', 'cricket', 'kabadi', 'football', 'kabadi', 'general knowledge', 'Eight', '789'),
(54, 'Capital of India?', 'Chennai', 'Hyderabad', 'New delhi', 'New delhi', 'general knowledge', 'Eight', '789'),
(55, 'Prime Minister of bd?', 'Begum Khalida Zia', 'Shikh Hasina', 'Hossain Mohammad Ershad', 'Shikh Hasina', 'general knowledge', 'Eight', '789'),
(56, 'Fastest swimmer of the world?', 'Neil Armstrong', 'Michael Phelps', 'Stephen Jerrard', 'Michael Phelps', 'general knowledge', 'Eight', '789'),
(57, 'National flower of bd?', 'Water lily', 'Rose', 'Marrigold', 'Water lily', 'general knowledge', 'Eight', '789'),
(58, 'Topest summit of the world?', 'Mount Kilimanzaro', 'Mount Everest', 'Mount Visuvious', 'Mount Everest', 'general knowledge', 'Eight', '789'),
(59, 'Fastest car of the world?', 'Porsche Carera GT', 'Mclaren F1', 'Hennssey Venom GT', 'Hennssey Venom GT', 'general knowledge', 'Eight', '789'),
(60, 'How many continents are in the world?', 'five', 'six', 'seven', 'seven', 'general knowledge', 'Eight', '789');

-- --------------------------------------------------------

--
-- Table structure for table `jsc_result`
--

CREATE TABLE `jsc_result` (
  `roll_no` int(11) NOT NULL,
  `registration_no` int(11) DEFAULT NULL,
  `passing_year` int(11) NOT NULL,
  `gpa` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jsc_result`
--

INSERT INTO `jsc_result` (`roll_no`, `registration_no`, `passing_year`, `gpa`) VALUES
(201215, 545651, 2016, '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `notice`
--

CREATE TABLE `notice` (
  `no` int(11) NOT NULL,
  `type` varchar(500) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notice`
--

INSERT INTO `notice` (`no`, `type`, `date`) VALUES
(1, 'due to management of the internal board all classes wil be suspended on 25th dec.', '2017-11-22'),
(2, 'one student has fallen a victim to a road accident.so all students of our school are earnestly requested to express their helping hand financially.', '2017-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `ssc_result`
--

CREATE TABLE `ssc_result` (
  `roll_no` int(11) NOT NULL,
  `registration_no` int(11) DEFAULT NULL,
  `passing_year` int(11) NOT NULL,
  `gpa` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ssc_result`
--

INSERT INTO `ssc_result` (`roll_no`, `registration_no`, `passing_year`, `gpa`) VALUES
(15155, 596559, 2016, '5.00'),
(15156, 596560, 2016, '5.00');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `roll` int(11) NOT NULL,
  `school_class` varchar(11) NOT NULL,
  `first_name` varchar(20) DEFAULT NULL,
  `middle_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `father_name` varchar(20) DEFAULT NULL,
  `mother_name` varchar(20) DEFAULT NULL,
  `sex` varchar(10) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `dob` date DEFAULT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`roll`, `school_class`, `first_name`, `middle_name`, `last_name`, `father_name`, `mother_name`, `sex`, `email`, `dob`, `password`) VALUES
(5, 'Seven', 'Md.', 'Rana', 'Ahmed', 'moinul islam', 'tania hasan', 'male', 'rana222@gmail.com', '2010-05-13', 'bullethunter'),
(4, 'Six', 'Archi', 'Pooja', 'Saha', 'krishno saha', 'loti karmakar', 'female', 'ovi@gmail.com', '2011-12-12', 'daylight'),
(2, 'Eight', 'Abdul', 'Rafi', 'Hannan', 'kabirul islam', 'ayesha mahbuba', 'male', 'rafi@gmail.com', '2012-03-26', 'defense'),
(2, 'Seven', 'Tahsib', 'Rahul', 'Chowdhury', 'shoaib chowdhury', 'roshni chowdhury', 'male', 'ahad@gmai.com', '2013-04-16', 'hummingbird'),
(1, 'Seven', 'Md.', 'Mehedi', 'Mazumdar', 'ajad mazumdar', 'ivy mazumdar', 'male', 'mehedi12@gmail.com', '2013-05-09', 'kamov'),
(3, 'Eight', 'Rk', 'Rimon', 'Das', 'golap chandra das', 'tropa das', 'male', 'aveda@gmail.com', '2013-06-01', 'kedavra'),
(4, 'Eight', 'Md.', 'Rahat', 'Fazle', 'mubinur rahman', 'mishorin rahman', 'male', 'fazil@gmail.com', '2011-02-14', 'laserfire'),
(4, 'Seven', 'Shahriar', 'Tashik', 'Chowdhury', 'darby khan', 'dipty chowdhury', 'male', 'tashik@gmail.com', '2013-01-21', 'louisiana'),
(1, 'Eight', 'Md.', 'Rashed', 'Rahman', 'amanullah sayeem', 'sadia sayeem', 'male', 'rashed@gmail.com', '2013-05-04', 'mi34hind'),
(2, 'Six', 'Aj', 'Bob', 'Dilan', 'faruk ahamad', 'ajaira khatun', 'male', 'rocket@gmail.com', '2011-02-16', 'night'),
(5, 'Seven', 'Krishno', 'Shuvro', 'Datta', 'potro datta', 'shama datta', 'male', 'shuvro@gmail.com', '2013-03-11', 'nighthawk'),
(3, 'Seven', 'Md.', 'Rifat', 'Amin', 'asadul amin', 'mayisha amin', 'male', 'rifat@gmail.com', '2012-12-01', 'oregon'),
(3, 'Six', 'Abu', 'Riaan', 'Khan', 'julfiqar ali', 'majeda nahar', 'male', 'agami@gmail.com', '2012-01-29', 'origami'),
(5, 'Six', 'Robert', 'John', 'Cena', 'harvart cena', 'mary cena', 'male', 'ajohn@gmail.com', '2011-11-20', 'validworld');

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `teacher_id` int(9) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `userName` varchar(40) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `age` varchar(30) DEFAULT NULL,
  `pass` varchar(40) DEFAULT NULL,
  `teaching_subject` varchar(40) DEFAULT NULL,
  `educational_qualification` varchar(50) DEFAULT NULL,
  `gender` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teacher`
--

INSERT INTO `teacher` (`teacher_id`, `fullname`, `userName`, `email`, `age`, `pass`, `teaching_subject`, `educational_qualification`, `gender`) VALUES
(1, 'afif bin kamrul', 'sdfs', 'afifawon@gmail.com', '22', 'apache', 'math', 'bsc', 'male'),
(2, 'faruk ahamad imon', 'aveda', 'faruk@gmail.com', '32', 'omni', 'physics', 'bsc', 'male'),
(5, '', '', '', '', '', '', '', ''),
(6, '', '', '', '', '', '', '', ''),
(7, '', '', '', '', '', '', '', 'female'),
(8, 'md. samiul hoque', 'samiul123', 'samiulhoque67@gmail.com', '23', 'qwer', 'agriculture', 'expert in ploughing without cow', 'female'),
(9, 'Mehedi Hassan Mazumder', 'mazumder', 'ddddddd@gmail.com', '22', 'mehedi', 'DBMS', 'Phd,MSc,BSc,HSC,SSC,Scholarship,primary.', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academic_calendar`
--
ALTER TABLE `academic_calendar`
  ADD PRIMARY KEY (`serial_no`);

--
-- Indexes for table `administration`
--
ALTER TABLE `administration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_routine`
--
ALTER TABLE `class_routine`
  ADD PRIMARY KEY (`day`,`class`) USING BTREE;

--
-- Indexes for table `homework`
--
ALTER TABLE `homework`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `jsc_result`
--
ALTER TABLE `jsc_result`
  ADD PRIMARY KEY (`roll_no`,`passing_year`);

--
-- Indexes for table `notice`
--
ALTER TABLE `notice`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `ssc_result`
--
ALTER TABLE `ssc_result`
  ADD PRIMARY KEY (`roll_no`,`passing_year`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`password`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`teacher_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `homework`
--
ALTER TABLE `homework`
  MODIFY `no` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;
--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `teacher_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
