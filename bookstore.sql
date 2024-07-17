-- phpMyAdmin SQL Dump
-- version 5.1.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 11, 2022 at 03:30 AM
-- Server version: 5.7.24
-- PHP Version: 8.0.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bookstore`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookcategories`
--

CREATE TABLE `bookcategories` (
  `bookCategoryID` int(11) NOT NULL,
  `bookCategoryName` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bookcategories`
--

INSERT INTO `bookcategories` (`bookCategoryID`, `bookCategoryName`) VALUES
(1, 'Horror'),
(2, 'Romance'),
(3, 'Sci-Fi'),
(4, 'Action'),
(5, 'Comedy');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookID` int(11) NOT NULL,
  `bookCategoryID` int(11) NOT NULL,
  `bookCode` varchar(10) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `bookCategoryID`, `bookCode`, `bookName`, `description`, `price`, `dateAdded`) VALUES
(1, 3, 'as7as9', 'Hunger Games', 'The titular character, Katniss Everdeen, must participate in the Hunger Games, a televised competition in which two teenagers from each of the twelve Districts of Panem are chosen at random to fight to the death', '12.99', '2022-12-08 21:01:00'),
(2, 5, '87asa5d', 'Diary of a Wimpy Kid', 'Greg Heffley writes in his diary about\r\n his time in middle school', '14.99', '2022-12-08 21:01:00'),
(3, 4, 'asaa74', 'The Hobbit', 'Set in the Tolkien Universe, the titular hobbit\r\n must take part on a journey to find treasure', '25.00', '2022-12-08 21:01:00'),
(4, 1, 'fgf565', 'Fahrenheit 451', 'A society where books are burnt', '12.99', '2022-12-09 16:19:49'),
(5, 4, 'fgf566', 'Just Mercy', 'A lawyer tries to help a man on death row find his innocence', '13.99', '2022-12-09 16:22:31'),
(6, 1, 't7677', 'Dear Martin', 'After a traffic stop turns violent at the hands of the police, a young Black teen grapples with racism—and what it means for his future.', '14.99', '2022-12-09 17:49:18'),
(7, 5, '43433g', 'Adult Assembly Required', 'When Laura Costello moves to Los Angeles, trying to escape an overprotective family and the haunting memories of a terrible accident, she doesn’t expect to be homeless after a week.', '12.99', '2022-12-09 23:05:31'),
(8, 2, 'rre737', 'Ten Rules for Faking It', 'On radio producer Everly Dean\'s 30th birthday, she catches her boyfriend in bed with another woman and accidentally rants about it live on air. When the station owner hears her meltdown, he moves to replace Everly, but station manager Chris Jansen, who ha', '15.99', '2022-12-10 22:11:53'),
(9, 4, '434343', 'The Explorer', 'From Boston Globe–Horn Book Award winner Katherine Rundell comes an exciting new novel about a group of kids who must survive in the Amazon after their plane crashes.', '15.99', '2022-12-10 22:26:36');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customerID` int(11) NOT NULL,
  `firstName` varchar(60) NOT NULL,
  `lastName` varchar(60) NOT NULL,
  `emailAddress` varchar(255) NOT NULL,
  `streetAddress` varchar(60) NOT NULL,
  `city` varchar(40) NOT NULL,
  `state` varchar(2) NOT NULL,
  `zipCode` varchar(10) NOT NULL,
  `reference` varchar(60) NOT NULL,
  `dateAdded` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customerID`, `firstName`, `lastName`, `emailAddress`, `streetAddress`, `city`, `state`, `zipCode`, `reference`, `dateAdded`) VALUES
(1, 'Ryan', 'Smith', 'bm7@njit.edu', '123 Bleaker Street', 'Rahway', 'NJ', '08008', 'Google Search', '2022-12-09 16:32:01'),
(2, 'Kyle', 'Decatur', 'kd8@njit.edu', '245 Bleaker Street', 'Piscataway', 'NJ', '08008', 'Friend', '2022-12-09 16:32:01'),
(3, 'Cameron', 'Lawyer', 'cl9@njit.edu', '678 Bleaker Street', 'Parsippany', 'NJ', '08008', 'Yellow Pages', '2022-12-09 16:32:01'),
(4, 'Brian', 'Brian', 'e36@njit.edu', '543 Bleaker Street', 'Jersey City', 'NJ', '893333', 'Google Search', '2022-12-09 17:10:53'),
(5, 'Timothy', 'Smith', 't37@njit.edu', '543 Bleaker Street', 'Pompton Plains', 'NJ', '46646', 'Google Search', '2022-12-09 17:16:53'),
(6, 'Kyle', 'Daniel', 'k65@njit.edu', '987 Durman Road', 'Tulsa', 'OH', '33655', 'Yellow Page', '2022-12-09 18:19:41'),
(7, 'Jacob', 'Danielson', 'jd5@njit.edu', '834 Main Street', 'Columbus', 'OH', '34344', 'Google Search', '2022-12-09 19:15:06'),
(8, 'Daniel', 'Anthony', 'da6@njit.e', '201 Main St', 'Seaside Heights', 'NJ', '56565', 'Google Search', '2022-12-09 23:07:56'),
(9, 'Erick', 'Jansen', 'ej9@njit.edu', '223 Main Street', 'Sacramento', 'CA', '07979', 'Google Search', '2022-12-10 22:19:49'),
(10, 'Teddy', 'Samuels', 'ts8@njit.edu', '298 Main Street', 'San Francisco', 'CA', '34343', 'Google Search', '2022-12-10 22:29:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookcategories`
--
ALTER TABLE `bookcategories`
  ADD PRIMARY KEY (`bookCategoryID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`),
  ADD UNIQUE KEY `bookCode` (`bookCode`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customerID`),
  ADD UNIQUE KEY `emailAddress` (`emailAddress`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookcategories`
--
ALTER TABLE `bookcategories`
  MODIFY `bookCategoryID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customerID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
