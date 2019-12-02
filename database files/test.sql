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
-- Database: `test`
--

-- --------------------------------------------------------

--
-- Table structure for table `gpa`
--

CREATE TABLE `gpa` (
  `class` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `m` varchar(30) NOT NULL,
  `s` varchar(30) NOT NULL,
  `e` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gpa`
--

INSERT INTO `gpa` (`class`, `id`, `m`, `s`, `e`) VALUES
('Six', 1, 'A', 'A+', 'A+'),
('Six', 2, 'A', 'A+', 'A+'),
('Six', 3, 'A', 'A+', 'A+'),
('Six', 4, 'B', 'A+', 'A+'),
('Six', 17, 'A+', 'A+', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `gpa1`
--

CREATE TABLE `gpa1` (
  `class` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `m` varchar(30) DEFAULT NULL,
  `s` varchar(30) DEFAULT NULL,
  `e` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gpa1`
--

INSERT INTO `gpa1` (`class`, `id`, `m`, `s`, `e`) VALUES
('Seven', 1, 'A+', 'A+', 'A+'),
('Seven', 2, 'A+', 'A+', 'A+'),
('Seven', 3, 'A+', 'A+', 'A+'),
('Seven', 4, 'A+', 'A', 'A'),
('Seven', 5, 'A+', 'A+', 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `gpa2`
--

CREATE TABLE `gpa2` (
  `class` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `m` varchar(30) DEFAULT NULL,
  `s` varchar(30) DEFAULT NULL,
  `e` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gpa2`
--

INSERT INTO `gpa2` (`class`, `id`, `m`, `s`, `e`) VALUES
('Eight', 1, 'A+', 'A+', 'A+'),
('Eight', 2, 'A+', 'A+', 'A+'),
('Eight', 3, 'A+', 'A+', 'A+'),
('Eight', 4, 'A+', 'A', 'A'),
('Eight', 5, 'A+', 'A+', 'A-');

-- --------------------------------------------------------

--
-- Table structure for table `point`
--

CREATE TABLE `point` (
  `class` varchar(30) NOT NULL,
  `id` int(11) NOT NULL,
  `ma` int(11) DEFAULT NULL,
  `en` int(11) DEFAULT NULL,
  `sc` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `point`
--

INSERT INTO `point` (`class`, `id`, `ma`, `en`, `sc`) VALUES
('Six', 1, 4, 5, 5),
('Six', 2, 4, 5, 5),
('Six', 3, 4, 5, 5),
('Six', 4, 3, 5, 5),
('Six', 17, 5, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `point1`
--

CREATE TABLE `point1` (
  `class` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `ma` float DEFAULT NULL,
  `en` float DEFAULT NULL,
  `sc` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `point1`
--

INSERT INTO `point1` (`class`, `id`, `ma`, `en`, `sc`) VALUES
('Seven', 1, 5, 5, 5),
('Seven', 2, 5, 5, 5),
('Seven', 3, 5, 5, 5),
('Seven', 4, 5, 4, 4),
('Seven', 5, 5, 5, 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `point2`
--

CREATE TABLE `point2` (
  `class` varchar(30) DEFAULT NULL,
  `id` int(11) NOT NULL,
  `ma` float DEFAULT NULL,
  `en` float DEFAULT NULL,
  `sc` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `point2`
--

INSERT INTO `point2` (`class`, `id`, `ma`, `en`, `sc`) VALUES
('Eight', 1, 5, 5, 5),
('Eight', 2, 5, 5, 5),
('Eight', 3, 5, 5, 5),
('Eight', 4, 5, 4, 4),
('Eight', 5, 5, 5, 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `stu`
--

CREATE TABLE `stu` (
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
-- Dumping data for table `stu`
--

INSERT INTO `stu` (`roll`, `school_class`, `first_name`, `middle_name`, `last_name`, `father_name`, `mother_name`, `sex`, `email`, `dob`, `password`) VALUES
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
(1, 'Six', 'Tasmuma', 'Maria', 'Dyuti', 'rokibul hasan', 'samiha begum', 'female', 'vegaworld@gmail.com', '2012-02-15', 'palindrome'),
(5, 'Six', 'Robert', 'John', 'Cena', 'harvart cena', 'mary cena', 'male', 'ajohn@gmail.com', '2011-11-20', 'validworld');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Class` varchar(30) DEFAULT NULL,
  `sr` int(20) UNSIGNED NOT NULL,
  `stud_name` varchar(15) NOT NULL DEFAULT '',
  `age` int(3) NOT NULL DEFAULT '0',
  `math` int(3) NOT NULL DEFAULT '0',
  `eng` int(3) NOT NULL DEFAULT '0',
  `sci` int(3) NOT NULL DEFAULT '0',
  `total` int(5) NOT NULL DEFAULT '0',
  `per` float NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Class`, `sr`, `stud_name`, `age`, `math`, `eng`, `sci`, `total`, `per`) VALUES
('Six', 1, 'Maria', 15, 76, 85, 90, 204, 68),
('Six', 2, 'Bob', 15, 76, 85, 90, 246, 82),
('Six', 3, 'Riaan', 15, 76, 88, 90, 213, 71),
('Six', 4, 'Pooja', 21, 55, 85, 85, 225, 75),
('Six', 5, 'John', 16, 39, 60, 70, 169, 56.3333),
('Six', 6, 'Ria', 16, 78, 68, 80, 226, 75.3333),
('Six', 7, 'Zain', 14, 90, 94, 96, 280, 93.3333),
('Six', 8, 'Zain', 14, 90, 94, 96, 280, 93.3333),
('Six', 9, 'Lucy', 14, 28, 40, 40, 108, 36),
('Six', 10, 'Lisa', 15, 40, 46, 50, 136, 45.3333),
('Six', 11, 'Manali', 15, 77, 97, 76, 250, 83.3333),
('Six', 12, 'Zoya', 15, 50, 65, 72, 187, 62.3333),
('Six', 13, 'Pradnya', 14, 70, 85, 56, 211, 70.3333),
('Six', 16, 'samiul', 14, 88, 88, 88, 264, 88),
('Six', 17, 'aaaaa', 12, 90, 90, 90, 270, 90);

-- --------------------------------------------------------

--
-- Table structure for table `student1`
--

CREATE TABLE `student1` (
  `class` varchar(30) NOT NULL,
  `sr` int(11) NOT NULL,
  `stud_name` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `math` int(11) DEFAULT NULL,
  `eng` int(11) DEFAULT NULL,
  `sci` int(11) DEFAULT NULL,
  `total` decimal(11,0) DEFAULT NULL,
  `per` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student1`
--

INSERT INTO `student1` (`class`, `sr`, `stud_name`, `age`, `math`, `eng`, `sci`, `total`, `per`) VALUES
('Seven', 1, 'Mehedi', 14, 98, 99, 100, '297', 99),
('Seven', 2, 'Rahul', 14, 85, 94, 96, '275', 92),
('Seven', 3, 'Rifat', 15, 94, 95, 93, '282', 94),
('Seven', 4, 'Tashik', 14, 98, 76, 77, '251', 84),
('Seven', 5, 'Shuvo', 14, 87, 82, 65, '234', 78);

-- --------------------------------------------------------

--
-- Table structure for table `student2`
--

CREATE TABLE `student2` (
  `class` varchar(30) DEFAULT NULL,
  `sr` int(11) NOT NULL,
  `stud_name` varchar(30) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `math` int(11) DEFAULT NULL,
  `eng` int(11) DEFAULT NULL,
  `sci` int(11) DEFAULT NULL,
  `total` int(5) DEFAULT NULL,
  `per` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student2`
--

INSERT INTO `student2` (`class`, `sr`, `stud_name`, `age`, `math`, `eng`, `sci`, `total`, `per`) VALUES
('Eight', 1, 'Rashed', 14, 98, 99, 100, 297, 99),
('Eight', 2, 'Rafi', 15, 85, 94, 85, 264, 88),
('Eight', 3, 'Rimon', 15, 94, 95, 93, 282, 94),
('Eight', 4, 'Rahat', 14, 98, 76, 77, 251, 84),
('Eight', 5, 'Rana', 14, 87, 82, 65, 234, 78),
('Eight', 6, 'Mubin', 16, 87, 87, 87, 261, 87);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `gpa`
--
ALTER TABLE `gpa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpa1`
--
ALTER TABLE `gpa1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gpa2`
--
ALTER TABLE `gpa2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `point`
--
ALTER TABLE `point`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `point1`
--
ALTER TABLE `point1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `point2`
--
ALTER TABLE `point2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stu`
--
ALTER TABLE `stu`
  ADD PRIMARY KEY (`password`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `student1`
--
ALTER TABLE `student1`
  ADD PRIMARY KEY (`sr`);

--
-- Indexes for table `student2`
--
ALTER TABLE `student2`
  ADD PRIMARY KEY (`sr`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
