-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 19, 2023 at 10:11 PM
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
  `booking_id` int(11) NOT NULL,
  `customer-name` varchar(255) NOT NULL,
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

INSERT INTO `booking` (`booking_id`, `customer-name`, `movieTitle`, `genre-type`, `theater-name`, `ticket-type`, `seat-type`, `Total-seat`, `show-time`, `show-date`, `status`) VALUES
(1, 'Sana', 'Knives Out\r\n', 'Comedy', 'Atrium Cinemas', 'Platinum ', 'Adult', '4', '50:20:40', '2023-03-03', 'Pending'),
(2, 'Ali', 'The Boss Baby', 'Kids Animation', 'Atrium Cinemas', 'Silver', 'Child', '3', '50:10:25', '2023-03-02', 'Confirmed');

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
(4, 'Action'),
(2, 'Comedy'),
(1, 'Horror'),
(3, 'Kids Animation'),
(5, 'Mystry');

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movie_id` int(11) NOT NULL,
  `theater-id` int(55) NOT NULL,
  `movieTitle` varchar(255) NOT NULL,
  `movie_pic` varchar(255) NOT NULL,
  `Movie_Trailers` varchar(1000) NOT NULL,
  `genre_type` varchar(255) DEFAULT NULL,
  `release` date NOT NULL,
  `duration` time NOT NULL,
  `description` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movie_id`, `theater-id`, `movieTitle`, `movie_pic`, `Movie_Trailers`, `genre_type`, `release`, `duration`, `description`) VALUES
(1, 1, 'Kingsman: The Secret Service', 'kingsman.PNG', 'https://www.youtube.com/watch?v=kl8F-8tR8to', 'Action', '2015-01-24', '02:10:00', 'Gary \'Eggsy\' Unwin faces several challenges when he gets recruited as a secret agent in a secret spy organisation in order to look for Richmond Valentine, an eco-terrorist.'),
(2, 2, 'Enola Holmes', 'EnolaHolmes.PNG', 'https://www.youtube.com/watch?v=1d0Zf9sXlHk', 'Mystry', '2020-09-23', '02:03:00', 'While searching for her missing mother, intrepid teen Enola Holmes uses her sleuthing skills to outsmart big brother Sherlock and help a runaway lord.'),
(3, 3, 'KNIVES OUT\r\n', 'knivesOut.PNG', 'https://www.youtube.com/watch?v=qGqiHJTsRkQ', 'Mystry', '2019-09-07', '02:10:00', 'Harlan Thrombey, a reputable crime novelist, is found dead after his 85th birthday celebrations. However, as detective Benoit Blanc investigates the case, it unravels a ploy of sinister intentions.'),
(4, 4, 'Now You See Me 2', 'NYSM.PNG', 'https://www.youtube.com/watch?v=kMrUHV0VJe4', 'Action', '2016-06-17', '02:10:00', 'Four street magicians, Daniel, Merritt, Henley and Jack, ransack a huge amount of money belonging to insurance baron Arthur Tressler while being chased by police officers.'),
(5, 5, 'The Boss Baby', 'BossBaby.PNG', 'https://www.youtube.com/watch?v=3cw_-XXGMm0', 'Kids Animation', '2017-03-31', '01:37:00', 'Seven-year-old Tim gets jealous when his parents give all their attention to his little brother. Tim soon learns that the baby can talk and the two team up to foil the plans of the CEO of Puppy Co.'),
(6, 1, 'Lights Out', 'LightOut.PNG', 'https://www.youtube.com/watch?app=desktop&v=6LiKKFZyhRU', 'Horror', '2016-06-08', '01:21:00', 'Rebecca and her boyfriend try to investigate the connection between her mother and her imaginary friend, Diana, after her stepfather is murdered by a supernatural entity.'),
(7, 2, 'ANNABELLE:\r\n', 'Annabelle.PNG', 'https://www.youtube.com/watch?v=KisPhy7T__Q', 'Horror', '2017-08-11', '01:49:00', 'Samuel and Elle embed their daughter\'s spirit into a doll, only to realise it is a demon. Years later, they open their home to a nun and six orphan girls, one of whom finds the doll.'),
(8, 3, 'Resident Evil: Welcome to Raccoon City\r\n', 'ResidentEvil.PNG', 'https://www.youtube.com/watch?v=4q6UGCyHZCI', 'Horror', '2021-11-24', '01:47:00', 'Claire and her brother Chris get caught in a zombie outbreak in the dying Raccoon City. They must band together with others to survive and uncover the truth about the experiments held in the city.'),
(9, 4, 'Spider-Man: Homecoming\r\n', 'spiderman.jpg', 'https://www.youtube.com/watch?v=rk-dF1lIbIg', 'Action', '2017-07-07', '02:13:00', 'Peter Parker tries to stop the Vulture from selling weapons made with advanced Chitauri technology while trying to balance his life as an ordinary high school student.'),
(10, 5, 'Zombieland', 'zombieLand.PNG', 'https://www.youtube.com/watch?v=8m9EVP8X7N8', 'Horror', '2009-10-02', '01:28:00', 'Zombieland is a 2009 American post-apocalyptic zombie comedy film directed by Ruben Fleischer (in his theatrical debut) and written by Rhett Reese and Paul Wernick. It stars Woody Harrelson, Jesse Eisenberg, Emma Stone, Abigail Breslin, and Bill Murray.'),
(11, 2, 'Pixels', 'pixels.PNG', 'https://www.youtube.com/watch?v=eIOcWZOQL5M', 'Comedy', '2015-08-24', '01:46:00', 'A special team of arcade gamers is put together to fight a mysterious alien race that watches classic games of the \'80s and presumes them to be a declaration of war.'),
(12, 4, 'Free Guy', 'Free_Guy.PNG', 'https://www.youtube.com/watch?v=tK6jSOaoVDk', 'Action', '2021-08-13', '01:55:00', 'When Guy, a bank teller, learns that he is a non-player character in a bloodthirsty, open-world video game, he goes on to become the hero of the story and takes the responsibility of saving the world.'),
(13, 1, 'Love And Monsters', 'L&M.PNG', 'https://www.youtube.com/watch?v=-19tBHrZwOM', 'Comedy', '2020-10-16', '01:48:00', 'Seven years after the Monsterpocalypse, Joel Dawson, along with the rest of humanity, has been living underground ever since giant creatures took control of the land. After reconnecting over the radio with his high school girlfriend, Aimee, who is now 80 miles away at a coastal colony, Joel begins to fall for her again.'),
(14, 5, 'Orphan', 'Orphan.PNG', 'https://www.youtube.com/watch?v=m5BSLNAKIZs', 'Horror', '2009-07-24', '02:03:00', 'After losing their baby, a couple adopt a nine-year-old girl. However, they soon make a troubling discovery about her mysterious past and uncover several traits of her disturbing personality.'),
(15, 3, 'THE SUPER MARIO BROS.', 'Mario Bros.jpg', 'https://www.youtube.com/watch?v=TnGl01FkMMo', 'Kids Animation', '2023-04-05', '01:32:00', 'With help from Princess Peach, Mario gets ready to square off against the all-powerful Bowser to stop his plans from conquering the world.');

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
  `register_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `Apassword` varchar(255) NOT NULL,
  `picture` varchar(250) NOT NULL,
  `Urole` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`register_id`, `full_name`, `email`, `Apassword`, `picture`, `Urole`) VALUES
(1, 'Aqsa Ashfaq', 'aqsa510@gmail.com', 'Ashfaq', 'jannat-mirza-intro-pic-2aa.jpg', 'Admin'),
(2, 'Areeba Shafi', 'ariba2001.dev@gmail.com', 'Areeba', 'userdp.png', 'Admin'),
(3, 'Sana Tariq', 'sanatariq@gmail.com', 'Sana', 'UserPic2.png', 'User'),
(4, 'Ali Ahmed', 'aliahmed@gmail.com', 'AliAhmed', 'user3.png', 'User'),
(5, 'Taha Ashraf ', 'taha10@gmail.com', 'Taha', 'user5.jpg', 'User'),
(6, 'Ammar Khan', 'khan@gmail.com', 'Ammar', 'user4.png', 'User'),
(7, 'Dua Khan', 'duakhan@gmail.com', 'duakhan', 'admin.png', 'admin'),
(11, 'Hamza Ahmed', 'hamzaahmed@gmail.com', 'hamzaahmed', 'bg.jpg', 'admin'),
(26, 'Maham Fareed', 'mahamkhan@gmail.com', 'maham20', 'Capture1.JPG', 'User'),
(29, 'Alishba Faheem', 'alishba@gmail.com', 'alishba', 'My project-1 (7).png', 'User'),
(31, 'Wania Malik', 'wania@gmail.com', 'waniamalik', 'Capture1.JPG', 'User');

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
  `theater-title` varchar(255) NOT NULL,
  `seat-type` varchar(50) NOT NULL,
  `No_of_seat` varchar(74) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`seat-id`, `theater-title`, `seat-type`, `No_of_seat`) VALUES
(1, 'Atrium Cinemas', 'Adult', '1'),
(2, 'Capri Cinema', 'Child', '1');

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
  `theater_id` int(11) NOT NULL,
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

INSERT INTO `theatre` (`theater_id`, `theater-title`, `country`, `Hall-1`, `Hall-2`, `Hall-3`, `capacity`, `Location`) VALUES
(1, 'Atrium Cinemas', 'Pakistan', '27:12:00', '50:45:15', '30:20:05', '74 Seat', 'V24J+C24, MBL Panorama Karachi Cantonment.'),
(2, 'Capri Cinema', 'Pakistan', '14:58:21', '41:58:21', '15:58:21', '74 seat', 'M.A Jinnah Rd, Central Jacob Lines Karachi.'),
(3, 'The Arena Karachi', 'Pakistan', '01:20:15', '28:36:13', '10:40:00', '70 seat', 'Bahria Town Tower, Tariq Rd, P.E.C.H.S Block 2 Karachi.'),
(4, 'Mega Multiplex Cinema\r\n', 'Pakistan', '05:07:54', '40:25:08', '46:20:13', '74 Seat', 'Millennium Mall, Rashid Minhas Rd, Gulistan-e-Johar, Karachi.'),
(5, 'Universal Cinemas', 'Pakistan', '05:07:54', '01:20:08', '50:03:29', '80 Seat', ' Abdul Haque Rd، International Expo Centre, Trade Centre Commercial Area Phase 2 Johar Town, Lahore.');

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
  ADD PRIMARY KEY (`booking_id`),
  ADD KEY `moviet` (`movieTitle`),
  ADD KEY `c-id` (`customer-name`),
  ADD KEY `genre-id` (`genre-type`),
  ADD KEY `seat` (`seat-type`),
  ADD KEY `status` (`status`),
  ADD KEY `Ttitle` (`theater-name`);

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
  ADD PRIMARY KEY (`movie_id`),
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
  ADD PRIMARY KEY (`register_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `user-password` (`Apassword`),
  ADD KEY `connect` (`Urole`);

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
  ADD KEY `test` (`theater-title`),
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
  ADD PRIMARY KEY (`theater_id`),
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
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `movie_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `register_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

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
  MODIFY `theater_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

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
  ADD CONSTRAINT `Cname` FOREIGN KEY (`customer-name`) REFERENCES `customer` (`customer_name`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `Ttitle` FOREIGN KEY (`theater-name`) REFERENCES `theatre` (`theater-title`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `gener` FOREIGN KEY (`genre-type`) REFERENCES `genre` (`type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `seat` FOREIGN KEY (`seat-type`) REFERENCES `seat` (`seat-type`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `status` FOREIGN KEY (`status`) REFERENCES `book_status` (`status`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`register-id`) REFERENCES `registration` (`register_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `book` FOREIGN KEY (`booking-id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `customer` FOREIGN KEY (`custome-id`) REFERENCES `customer` (`customer-id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `connect` FOREIGN KEY (`Urole`) REFERENCES `role` (`Role_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `name` FOREIGN KEY (`customer-name`) REFERENCES `customer` (`customer_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `seat`
--
ALTER TABLE `seat`
  ADD CONSTRAINT `type` FOREIGN KEY (`seat-type`) REFERENCES `seat_categories` (`categories`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ticket`
--
ALTER TABLE `ticket`
  ADD CONSTRAINT `booking` FOREIGN KEY (`booking-id`) REFERENCES `booking` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
