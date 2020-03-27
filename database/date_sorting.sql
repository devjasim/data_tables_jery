-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 09:27 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `date_sorting`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `id` int(11) NOT NULL,
  `customer_name` varchar(191) NOT NULL,
  `item` varchar(191) NOT NULL,
  `debit` int(11) NOT NULL,
  `credit` int(11) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `customer_name`, `item`, `debit`, `credit`, `date`) VALUES
(1, 'Segufa Taranjum', 'otto', 100, 20, '2020-03-18'),
(2, 'Will Smith', 'abcd', 900, 600, '2020-03-19'),
(3, 'jhon', 'jhon product', 105, 80, '2020-03-20'),
(4, 'smith', 'smith item', 950, 100, '2020-03-21'),
(5, 'Bako Doe', 'Example item', 1223, 212, '2020-03-19'),
(6, 'David Backham ', 'Example data item', 233, 543, '2020-03-11'),
(7, 'Ontu Anjuman', 'Anjuman all accessories ', 545, 879, '2020-04-20'),
(8, 'Ontu Anjuman', 'Anjuman all accessories ', 545, 879, '2020-04-20'),
(10, 'Amelia', 'Graff Diamonds Hallucination watch', 4565, 6789, '2020-03-11'),
(12, 'Sophia', '1963 Ferrari 250 GTO', 57423, 23423, '2020-03-26'),
(14, 'Isabella', 'Manhattan parking spot', 86342, 87673, '2020-03-30'),
(16, 'Thomas Joe', 'Leonardo da Vinci\'s Salvator Mundi', 45678, 23475, '2020-03-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
