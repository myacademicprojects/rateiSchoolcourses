-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 05:32 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `review`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `coursecode` varchar(6) NOT NULL,
  `courseName` varchar(100) NOT NULL,
  `courseDescription` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`coursecode`, `courseName`, `courseDescription`) VALUES
('IST565', 'Data Mining', 'Introduction to data mining techniques, familiarity with particular real-world applications, challenges involved in these applications, and future directions of the field. Optional hands-on experience with commercially available software packages.'),
('IST659', 'Data Administration Concepts and Database Administration', 'Definition, development, and management of databases for information systems. Data analysis techniques, data modeling, and schema design. Query languages and search specifications. Overview of file organization for databases.'),
('IST233', 'Introduction to Computer Networking', 'Overview of technology, standards, implementation and management of digital computer networks. Wired and wireless local and wide area networks, Internet protocols, telecommunications, and network security. Includes weekly labs.'),
('IST346', 'Information Technology Management and Administration', 'Information technology management principles and practices. Administration of computers, operating systems, and applications. Tools and techniques for managing information technology operations. Includes hand-on labs.'),
('IST359', 'Introduction to Database Management Systems', 'Data structure, file organization, and principles and concepts of data bases for information retrieval systems. Data analysis, design, models, management, evaluation, and implementation.'),
('IST335', 'Introduction to Information-Based Organizations', 'Organizational behavior; groups and teams; leadership and management; human resources; organizational development; change management. Interactions between people and technology in work organizations; impacts of information technology on organizational effectiveness.'),
('IST445', 'Managing Information Systems Projects', 'Project management as a professional discipline in information and communication technology. Introduction to roles, activities, methods, and tools. Critical review and application of principles. Additional work required of graduate students.'),
('IST687', 'Introduction to Data Science', 'Introduces fundamentals about data and the standards, technologies, and methods for organizing, managing, curating, preserving, and using data. Discusses broader issues relating to data management and use as well as quality control and publication of data.'),
('IST718', 'Advanced Information Analytics', 'A broad introduction to analytical processing tools and techniques for information professionals. Students will develop a portfolio of resources, demonstrations, recipes, and examples of various analytical techniques.'),
('MBC638', 'Data Analysis and Decision Making', 'Concepts, principles and methods to support scientific approach to managerial problem solving and process improvement. Basic statistical techniques, their appropriateness to situations and assumptions underlying their use.'),
('SCM651', 'Business Analytics', 'Business analytics including advanced spreadsheets; relational database and SQL queries; statistical analysis in R including multi-linear regression, interactions, tests for regression assumptions, logit, probit; neural networks; and dashboards.'),
('IST522', 'Applied Information Security', 'Applications of information security including hands-on experience. Students who successfully complete this course will understand how information security technology is applied to real systems.');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
