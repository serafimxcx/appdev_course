-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2024 at 10:57 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_appdev`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `description` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `description`) VALUES
(1, 'Drinks'),
(2, 'Meal'),
(3, 'Desserts'),
(4, 'Appetizer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

CREATE TABLE `tbl_course` (
  `id` int(11) NOT NULL,
  `fld_course` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`id`, `fld_course`) VALUES
(1, 'BS in Computer Science'),
(3, 'BS in Computer Engineering'),
(4, 'BS in Nursing'),
(46, 'BA in Hospitality Management'),
(47, 'BA in Tourism Management'),
(49, 'BS in Architecture'),
(50, 'BS in Education'),
(51, 'BS in IT');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_employees`
--

CREATE TABLE `tbl_employees` (
  `employee_id` int(11) NOT NULL,
  `employee_number` int(11) DEFAULT NULL,
  `last_name` varchar(250) DEFAULT NULL,
  `first_name` varchar(250) DEFAULT NULL,
  `middle_name` varchar(250) DEFAULT NULL,
  `monthly_salary` float(8,2) UNSIGNED DEFAULT 0.00,
  `birth_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_employees`
--

INSERT INTO `tbl_employees` (`employee_id`, `employee_number`, `last_name`, `first_name`, `middle_name`, `monthly_salary`, `birth_date`) VALUES
(13, 213, 'Coronado', 'John Gabriel', 'Reyes', 75000.50, '2003-04-22'),
(14, 167, 'Esguerra', 'Babylyn', 'Aragon', 55000.59, '2002-12-02'),
(15, 187, 'De Leon', 'Triceann', 'Palma', 45000.00, '2001-12-11'),
(16, 587, 'Solis', 'Jake', 'Montalban', 65000.00, '1999-02-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_products`
--

CREATE TABLE `tbl_products` (
  `id` int(11) NOT NULL,
  `product_code` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `category` varchar(255) DEFAULT NULL,
  `price` float(8,2) UNSIGNED DEFAULT 0.00
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_products`
--

INSERT INTO `tbl_products` (`id`, `product_code`, `description`, `category`, `price`) VALUES
(4, 'M1', 'Mango Pie', 'Desserts', 60.00),
(5, 'S1', 'Spaghetti', 'Meal', 98.75),
(8, 'B1', 'bURGER', 'Meal', 123.00),
(11, 'S2', 'Sundae', 'Meal', 50.00),
(12, 'c\'1', 'wok', 'Drinks', 0.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_students`
--

CREATE TABLE `tbl_students` (
  `id` int(11) NOT NULL,
  `fld_studentno` varchar(255) NOT NULL,
  `fld_lastname` varchar(255) DEFAULT NULL,
  `fld_firstname` varchar(255) NOT NULL,
  `fld_middlename` varchar(255) NOT NULL,
  `fld_course` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_students`
--

INSERT INTO `tbl_students` (`id`, `fld_studentno`, `fld_lastname`, `fld_firstname`, `fld_middlename`, `fld_course`) VALUES
(1, '22-00417', 'Coronado', 'Gabriel', 'Reyes', 'BS in Computer Science'),
(3, '22-0018', 'Solis', 'Jake Roland', 'Maniyogin', 'BS in Computer Science'),
(4, '22-0045', 'Ico ', 'Babylyn', 'Navarro', 'BA in Tourism Management'),
(6, '22-00675', 'De Leon', 'Triceanne', 'Deveza', 'BA in Hospitality Management'),
(7, '21-02834', 'Atilano', 'Mark Steven', 'Dechavez', 'BS in Computer Science'),
(8, '21-00912', 'Virtucio', 'Julia', 'Sarmiento', 'BS in Computer Engineering'),
(9, '23-00584', 'Alvarez', 'Jansen', 'Dorado', 'BS in Computer Engineering'),
(10, '23-84382', 'Morada', 'Rhenber', 'Lomeda', 'BA in Tourism Management'),
(11, '22-2873', 'Guerra', 'Kristine', 'Badet', 'BS in Nursing'),
(12, '21-00493', 'Manalo', 'Benedict', 'Luntian', 'BS in Nursing'),
(13, '20-03495', 'Fababaer', 'Kyle', 'Reno', 'BA in Hospitality Management'),
(14, '20-49343', 'Esguerra', 'Chris John ', 'Bondad', 'BS in Computer Science'),
(15, '21-00493', 'Rigor', 'Raven', 'Leyesa', 'BA in Tourism Management');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_useracc`
--

CREATE TABLE `tbl_useracc` (
  `id` int(11) NOT NULL,
  `fld_name` varchar(255) NOT NULL,
  `fld_username` varchar(255) DEFAULT NULL,
  `fld_password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_useracc`
--

INSERT INTO `tbl_useracc` (`id`, `fld_name`, `fld_username`, `fld_password`) VALUES
(1, 'Gabriel', 'admin_gab', 'coronado01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `tbl_course`
--
ALTER TABLE `tbl_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  ADD PRIMARY KEY (`employee_id`);

--
-- Indexes for table `tbl_products`
--
ALTER TABLE `tbl_products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_students`
--
ALTER TABLE `tbl_students`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_useracc`
--
ALTER TABLE `tbl_useracc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_course`
--
ALTER TABLE `tbl_course`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `tbl_employees`
--
ALTER TABLE `tbl_employees`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_products`
--
ALTER TABLE `tbl_products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_students`
--
ALTER TABLE `tbl_students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `tbl_useracc`
--
ALTER TABLE `tbl_useracc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
