-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2017 at 05:31 PM
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
-- Table structure for table `coursereview`
--

CREATE TABLE `coursereview` (
  `coursecode` varchar(6) NOT NULL,
  `difficultyLevel` int(11) NOT NULL,
  `recoCourse` char(5) NOT NULL,
  `courseComment` text NOT NULL,
  `name` varchar(25) NOT NULL,
  `jobTitle` varchar(30) NOT NULL,
  `company` varchar(25) NOT NULL,
  `profUsability` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coursereview`
--

INSERT INTO `coursereview` (`coursecode`, `difficultyLevel`, `recoCourse`, `courseComment`, `name`, `jobTitle`, `company`, `profUsability`) VALUES
('IST659', 3, 'Yes', 'Introduces students to languages, applications and programming used for the design and maintenance of business databases.', 'Diana Keaton', 'Data Analyst', 'comScore', 4),
('IST565', 3, 'Yes', 'Important for data analytics career', 'Jane Doe', 'Data Analyst', 'comScore', 3),
('IST346', 4, 'Yes', 'Basic Course ', 'Tifa', 'Song', 'comScore', 4),
('IST346', 3, 'Yes', 'Great course for data administration career', 'Tony', 'Stark', 'publicis', 4),
('IST233', 4, 'Yes', 'Builts a strong base of networking concepts', 'Brian Lewis', 'Network Engineer', 'vmWare', 5),
('IST346', 5, 'Yes', 'A difficult level course that where you can learn about some advanced networking concepts', 'Stephen Strange', 'IT Networking Manager', 'Adobe', 4),
('IST359', 3, 'Yes', 'Very important course where you can learn basics of DB mgmt. Definitely recommended irrespective of career path!\r\n', 'Wade Wilson', 'Database Administartor', 'Oracle', 4),
('IST335', 4, 'No', 'Very basic course. Can skip for better niche courses', 'Thor Odinson', 'Platform Executive', 'Twitter', 2),
('IST445', 3, 'Yes', 'Great course to get acquainted with basics of project management!', 'Carol Danvers', 'Product Manager', 'AVG', 4),
('IST687', 5, 'Yes', 'Difficult course if you dont have a background in database management. You will learn R and shiny apps.', 'Robert Banner', 'Decision Scientist', 'Oracle', 4),
('IST718', 5, 'Yes', 'Recommend to pair it up with easy courses as the assignments will take a huge chunk of your time. Nevertheless, the course is very helpful.', 'Matthew Murdock', 'Data Scientist', 'comScore', 4),
('MBC638', 3, 'Yes', 'Good learning outcomes that can be applied if you want to pursue a career in marketing analytics', 'Peter Parker', 'Manager, Brand MArketing', 'EnY', 4),
('SCM651', 4, 'Yes', 'The program teaches you various concepts a manager needs in their roles for the first 4 months – Customer Relationship Management, Finance, Marketing, etc. Post this phase, the course starts introducing statistical concepts and business analytics concepts', 'Natasha Romanova', 'Marketing Strategist', 'adidas', 3),
('IST233', 2, 'Yes', 'Good course to get introduced to basics of networking', 'Jill', 'McEvoy', 'Cisco Meraki', 4),
('IST359', 3, 'Yes', 'Interesting course to learn the basics of database management', 'NA', 'NA', 'NA', 3),
('IST346', 0, '', '', '', '', '', 4),
('IST522', 5, 'Yes', 'High level course that teaches you advanced topics in Information Security', 'Harley Quinn', 'Risk Analyst', 'pwc', 5),
('IST565', 3, 'Yes', 'Great Course!', 'Farah Thesler', 'Data Engineer', 'CT Technologies', 3);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
