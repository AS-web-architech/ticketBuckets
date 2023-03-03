-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2023 at 10:32 PM
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
-- Database: `mtb-data`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `booking-id` int(11) NOT NULL,
  `customer-name` varchar(255) NOT NULL,
  `movie-id` int(11) NOT NULL,
  `movieTitle` varchar(255) NOT NULL,
  `genre-type` varchar(255) NOT NULL,
  `theater-name` varchar(255) NOT NULL,
  `ticket-type` varchar(255) NOT NULL,
  `seat-type` varchar(50) NOT NULL,
  `Total-seat` varchar(255) NOT NULL,
  `show-time` time NOT NULL,
  `show-date` date NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`booking-id`, `customer-name`, `movie-id`, `movieTitle`, `genre-type`, `theater-name`, `ticket-type`, `seat-type`, `Total-seat`, `show-time`, `show-date`, `status`) VALUES
(1, 'Sana', 3, 'Knives Out\r\n', 'comedy', 'Atrium Cinemas', 'Platinum ', 'Adult', '4', '50:20:40', '2023-03-03', 'Pending'),
(2, 'Ali', 5, 'The Boss Baby', 'kids animation', 'Atrium Cinemas', 'Silver', 'Child', '3', '50:10:25', '2023-03-02', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `book_status`
--

CREATE TABLE `book_status` (
  `id` int(11) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `book_status`
--

INSERT INTO `book_status` (`id`, `status`) VALUES
(3, 'Cancelled'),
(2, 'Confirmed'),
(1, 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `register-id` int(11) NOT NULL,
  `customer-id` int(11) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `contact` varchar(12) NOT NULL,
  `Address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`register-id`, `customer-id`, `customer_name`, `contact`, `Address`) VALUES
(3, 1, 'Sana', '03434546457', 'north nazimabad karachi,sindh '),
(4, 2, 'Ali', '0343423232', 'nazimabad no4. karchi, sindh');

-- --------------------------------------------------------

--
-- Table structure for table `genre`
--

CREATE TABLE `genre` (
  `genere-id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `genre`
--

INSERT INTO `genre` (`genere-id`, `type`) VALUES
(4, 'action'),
(2, 'comedy'),
(1, 'horror'),
(3, 'kids animation'),
(5, 'mystry');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie-id` int(11) NOT NULL,
  `movieTitle` varchar(255) NOT NULL,
  `movie_pic` varchar(255) NOT NULL,
  `genre_type` varchar(255) NOT NULL,
  `genre-id` int(11) DEFAULT NULL,
  `year` year(4) NOT NULL,
  `duration` time NOT NULL,
  `reviews` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie-id`, `movieTitle`, `movie_pic`, `genre_type`, `genre-id`, `year`, `duration`, `reviews`) VALUES
(1, 'Kingsman: The Secret Service', 'kingsman.PNG', 'action', 4, 2015, '02:10:00', 'great Action Movie... '),
(2, 'Enola Holmes', 'EnolaHolmes.PNG', 'mystry', 5, 2020, '02:03:00', ''),
(3, 'Knives Out\r\n', 'knivesOut.PNG', 'comedy', 2, 2020, '02:10:00', ''),
(4, 'Now You See Me', 'NYSM.PNG', 'action', 4, 2013, '01:13:34', ''),
(5, 'The Boss Baby', 'BossBaby.PNG', 'kids animation', 3, 2017, '01:17:34', ''),
(6, 'Lights Out', 'LightOut.PNG', 'horror', 1, 2016, '01:21:34', ''),
(7, 'Annabelle: Creation\r\n', 'Annabelle.PNG', 'horror', 1, 2017, '01:39:56', ''),
(8, 'Resident Evil: Welcome to Raccoon City\r\n', 'ResidentEvil.PNG', 'horror', 1, 2021, '01:21:34', ''),
(9, 'Spider-Man: Homecoming\r\n', 'spiderman.jpeg', 'action', 4, 2021, '02:03:00', ''),
(10, 'Zombieland', 'zombieLand.PNG', 'horror', 1, 2009, '01:21:34', ''),
(12, 'Pixels', 'pixels.PNG', 'comedy', 2, 2015, '01:13:34', ''),
(13, 'Free Guy', 'Free_Guy.PNG', 'action', 4, 2020, '01:21:34', ''),
(14, 'Love and Monsters', 'L&M.PNG', 'comedy', 2, 2020, '01:13:34', ''),
(15, 'Orphan', 'Orphan.PNG', 'horror', 1, 2016, '01:39:56', '');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `Amount` varchar(255) NOT NULL,
  `Timestamp` datetime(6) NOT NULL,
  `Discount` varchar(250) NOT NULL,
  `Payment_Method` varchar(255) NOT NULL,
  `booking-id` int(11) NOT NULL,
  `custome-id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `register-id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Apassword` varchar(255) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`register-id`, `full_name`, `email`, `Apassword`, `picture`, `role`) VALUES
(1, 'Aqsa Ashfaq', 'aqsa510@gmail.com', 'Ashfaq', 'f-adminicon.jpg', 'Admin'),
(2, 'Areeba Shafi', 'ariba2001.dev@gmail.com', 'Areeba', 'userdp.png', 'Admin'),
(3, 'Sana Tariq', 'sanatariq@gmail.com', 'Sana', 'UserPic2.png', 'User'),
(4, 'Ali Ahmed', 'aliahmed@gmail.com', 'AliAhmed', 'user3.png', 'User'),
(5, 'Taha Ashraf ', 'taha10@gmail.com', 'Taha', 'user5.jpg', 'User'),
(6, 'Ammar Khan', 'ammar@gmail.com', 'Ammar', 'user4.png', 'User');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `ID` int(11) NOT NULL,
  `customer-name` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`ID`, `customer-name`, `message`) VALUES
(1, 'Sana', 'great Action Movie... ');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `Role_id` int(10) NOT NULL,
  `Role_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`Role_id`, `Role_name`) VALUES
(1, 'Admin'),
(2, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `seat-id` int(11) NOT NULL,
  `theater-no` int(11) NOT NULL,
  `seat-type` varchar(50) NOT NULL,
  `No_of_seat` varchar(74) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat-id`, `theater-no`, `seat-type`, `No_of_seat`) VALUES
(1, 1, 'Adult', '1'),
(2, 1, 'Child', '1');

-- --------------------------------------------------------

--
-- Table structure for table `seat_categories`
--

CREATE TABLE `seat_categories` (
  `id` int(11) NOT NULL,
  `categories` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat_categories`
--

INSERT INTO `seat_categories` (`id`, `categories`) VALUES
(1, 'Adult'),
(2, 'Child');

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `theater-id` int(11) NOT NULL,
  `theater-title` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `Hall-1` time NOT NULL,
  `Hall-2` time NOT NULL,
  `Hall-3` time NOT NULL,
  `capacity` varchar(74) NOT NULL,
  `Location` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`theater-id`, `theater-title`, `country`, `Hall-1`, `Hall-2`, `Hall-3`, `capacity`, `Location`) VALUES
(1, 'Atrium Cinemas', 'Pakistan', '27:12:00', '50:45:15', '30:20:05', '74 seats', 'V24J+C24, MBL Panorama Karachi Cantonment, Karachi, Karachi City, Sindh');

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `T-id` int(11) NOT NULL,
  `booking-id` int(11) NOT NULL,
  `ticket-type` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ticket`
--

INSERT INTO `ticket` (`T-id`, `booking-id`, `ticket-type`, `price`) VALUES
(1, 1, 'Gold', 'PKR 1000'),
(2, 2, 'Silver', 'PKR 500'),
(3, 2, 'Platinum ', 'PKR 250');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`booking-id`),
  ADD KEY `moviet` (`movieTitle`),
  ADD KEY `c-id` (`customer-name`),
  ADD KEY `movie-id` (`movie-id`),
  ADD KEY `genre-id` (`genre-type`),
  ADD KEY `seat` (`seat-type`);

--
-- Indexes for table `book_status`
--
ALTER TABLE `book_status`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `status` (`status`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`customer-id`),
  ADD UNIQUE KEY `customer_name` (`customer_name`),
  ADD KEY `test` (`register-id`);

--
-- Indexes for table `genre`
--
ALTER TABLE `genre`
  ADD PRIMARY KEY (`genere-id`),
  ADD UNIQUE KEY `type` (`type`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movie-id`),
  ADD UNIQUE KEY `movieTitle` (`movieTitle`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `book` (`booking-id`),
  ADD KEY `customer` (`custome-id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`register-id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user-password` (`Apassword`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `message` (`message`),
  ADD KEY `name` (`customer-name`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`Role_id`),
  ADD UNIQUE KEY `Role_name` (`Role_name`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`seat-id`),
  ADD KEY `test` (`theater-no`),
  ADD KEY `type` (`seat-type`);

--
-- Indexes for table `seat_categories`
--
ALTER TABLE `seat_categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories` (`categories`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`theater-id`),
  ADD UNIQUE KEY `theater-title` (`theater-title`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`T-id`),
  ADD UNIQUE KEY `ticket-type` (`ticket-type`),
  ADD KEY `booking` (`booking-id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `booking-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `book_status`
--
ALTER TABLE `book_status`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `customer-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `genre`
--
ALTER TABLE `genre`
  MODIFY `genere-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movie-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `register-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `Role_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `seat-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `seat_categories`
--
ALTER TABLE `seat_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `theater-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `T-id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`movie-id`) REFERENCES `movie` (`movie-id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gener` FOREIGN KEY (`genre-type`) REFERENCES `genre` (`type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seat` FOREIGN KEY (`seat-type`) REFERENCES `seat` (`seat-type`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`register-id`) REFERENCES `registration` (`register-id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `book` FOREIGN KEY (`booking-id`) REFERENCES `booking` (`booking-id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer` FOREIGN KEY (`custome-id`) REFERENCES `customer` (`customer-id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `name` FOREIGN KEY (`customer-name`) REFERENCES `customer` (`customer_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `test` FOREIGN KEY (`theater-no`) REFERENCES `theatre` (`theater-id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `type` FOREIGN KEY (`seat-type`) REFERENCES `seat_categories` (`categories`);

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `booking` FOREIGN KEY (`booking-id`) REFERENCES `booking` (`booking-id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
