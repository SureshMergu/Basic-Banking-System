-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2023 at 04:18 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bankingsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `current_balance` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `name`, `email`, `current_balance`) VALUES
(1, 'Kanchana Mergu', 'kanchanamergu12@gmail.com', 66000),
(2, 'Suresh Mergu', 'sureshmergu@gmail.com', 40000),
(3, 'Sagar Mergu', 'sagarmergu@gmail.com', 50000),
(4, 'Sangeeta Mergu', 'sangeetamergu@gmail.com', 30000),
(5, 'Sailu', 'salaja@gmail.com', 13000),
(6, 'Sachin Halnor', 'sachinhalnor@gamil.com', 5000),
(7, 'Abhishek Dasari', 'abhishekdasari@gmail.com', 10000),
(8, 'kiran Gundla', 'kirangundla@gmail.com', 8000),
(9, 'Sanskar Doijode', 'sanskardoijode@gmail.com', 2000),
(10, 'Shrikant Mergu', 'shrikantmergu@gmail.com', 9000);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
