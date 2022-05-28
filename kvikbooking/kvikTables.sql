-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 25, 2022 at 09:18 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mxm9894`
--

-- --------------------------------------------------------

--
-- Table structure for table `kvikApartments`
--

CREATE TABLE `kvikApartments` (
  `id` int NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `price` int NOT NULL,
  `balconies` int NOT NULL,
  `rooms` int NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `city` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `country` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kvikApartments`
--

INSERT INTO `kvikApartments` (`id`, `title`, `description`, `img`, `price`, `balconies`, `rooms`, `owner`, `address`, `city`, `country`) VALUES
(5, 'Riverview Apartment', 'Riverview Apartment is located next to the the river Rjecina. It has an amazing view of the lake as well as being an spacious apartment for its price.', NULL, 60, 2, 4, 'Joe Doe', 'Ruziceva Ul. 22', 'rijeka', 'Croatia'),
(10, 'Jon penthouse ', 'Nice view good wine for all the guests', NULL, 50, 0, 2, 'Jon Kutllovci', 'Aleja Pomoraca 25', 'zagreb', 'Croatia'),
(16, 'Monty Split', 'Monty is an apartment chain which brings an elitist Villas to you in one click! While the prices are high the Villas can be used for generaly enjoyment or for creating content!', NULL, 130, 3, 7, 'Monty', 'Trumbiceva Obala 4', 'split', 'Croatia'),
(17, 'Bucky', 'Cheap single room apartment.', NULL, 20, 0, 2, 'Boris Sreng', 'Put kotarskih serenda 3', 'zadar', 'Croatia'),
(18, 'Love Patrol', 'Love Patrol is a heaven for lovers, offering a welcome set for all our attenders.', NULL, 35, 1, 2, 'Boris Kovac', 'Lovćenska 69', 'zagreb', 'Croatia'),
(24, 'Alpha', 'Alpha is for the biggest of chads, offering every imaginable exercise and gym equipment known to man!', NULL, 40, 1, 3, 'Gym Baja', 'Gym4U', 'zagreb', 'Croatia'),
(25, 'Pepega Mansion', 'The mansion which was constructed by Pepegas for your pleasure!', NULL, 22, 1, 1, 'Dumb Zlane', 'Ulica Mateo We', 'zagreb', 'Croatia'),
(26, ' Villa Kristina ', 'Nice apartment with a nice view.', NULL, 100, 4, 4, 'John Smith', 'Jadave ul, 29', 'pula', 'Croatia'),
(27, 'Pula center apartment', 'Apartment in the city center', NULL, 50, 1, 1, 'John Doe', 'Mletačka ul. 10', 'pula', 'Croatia'),
(28, 'Romance apartment', 'Excellent location and a perfect name :)', NULL, 60, 1, 1, 'Smith Williams', 'Miroslava Krleze', 'pula', 'Croatia'),
(29, 'Rijeka apartment ', 'Excellent location and sea side view', NULL, 100, 1, 1, 'William Doe', 'Mletačka ul. 10', 'rijeka', 'Croatia'),
(30, 'Rijeka city apartment', 'Apartment located in the city center with a excellent price', NULL, 50, 1, 1, 'John Doe', 'City center', 'rijeka', 'Croatia'),
(31, 'Split ocean view', 'Apartment near the sea, excellent ratings ', NULL, 150, 1, 1, 'Nikola Nikola', 'Near Ocean ', 'split', 'Croatia'),
(32, 'Central Split Apartment', 'Luxurious and cozy apartment in split center.', NULL, 50, 1, 1, 'John Smith', 'Viskotina ul. 5', 'split', 'Croatia'),
(33, 'Apartments Klanac Zadar', 'Apartment near the Church of St. Donatus as well as Zadar Airport', NULL, 30, 4, 4, 'Smith Williams', 'Kijevska ul. 25A', 'zadar', 'Croatia'),
(34, 'Apartmani Borik', 'Vacation apartment 16 min by car from the Church of St. Donatus', NULL, 40, 1, 1, 'Nikola Nikola', 'Ul. Hasana Kikića 5', 'zadar', 'Croatia');

-- --------------------------------------------------------

--
-- Table structure for table `kvikComments`
--

CREATE TABLE `kvikComments` (
  `id` int NOT NULL,
  `userID` int NOT NULL,
  `apartmentID` int NOT NULL,
  `comment` varchar(1000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timestamp` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kvikComments`
--

INSERT INTO `kvikComments` (`id`, `userID`, `apartmentID`, `comment`, `timestamp`) VALUES
(1, 2, 24, 'Nice view!', '2022-04-25 23:25:28'),
(10, 2, 24, 'asdas', '2022-04-26 01:02:02'),
(11, 2, 10, 'Same love', '2022-04-26 01:03:59'),
(12, 2, 10, 'Cant recommend this ENOUGH!!! It was an amazing stay.', '2022-04-26 01:04:08'),
(13, 2, 18, 'Not at all what it is trying to be, 0/10', '2022-04-26 01:06:25'),
(15, 2, 29, 'Very nice apartment ', '2022-04-26 01:08:40'),
(16, 2, 16, 'Very very nice enjoyable stay', '2022-04-26 01:08:55'),
(17, 2, 17, 'Its very bucky', '2022-04-26 01:09:09'),
(18, 2, 25, 'best place ever very cheap', '2022-04-26 01:10:34'),
(19, 2, 26, 'Nice place i love it!!&lt;3\r\n', '2022-04-26 01:11:04'),
(20, 2, 27, 'The view is amazing', '2022-04-26 01:11:19'),
(21, 2, 28, 'I love this apartment ', '2022-04-26 01:11:34'),
(22, 2, 5, 'Everything is nice here ', '2022-04-26 01:11:55'),
(23, 2, 30, 'Vey enjoyable no wifi', '2022-04-26 01:12:26'),
(24, 2, 31, 'Ocean ', '2022-04-26 01:12:47'),
(25, 2, 32, 'Center in split is amazing hope to visit soon!!!', '2022-04-26 01:13:23'),
(26, 2, 33, 'I love it &lt;3', '2022-04-26 01:13:44'),
(27, 2, 34, 'Very nice place ', '2022-04-26 01:15:04'),
(28, 2, 25, 'Trully ran by a pepega', '2022-04-26 01:17:00');

-- --------------------------------------------------------

--
-- Table structure for table `kvikExtra`
--

CREATE TABLE `kvikExtra` (
  `id` int NOT NULL,
  `apartmentID` int NOT NULL,
  `wifi` tinyint(1) DEFAULT NULL,
  `parking` tinyint(1) DEFAULT NULL,
  `pets` tinyint(1) DEFAULT NULL,
  `ac` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kvikExtra`
--

INSERT INTO `kvikExtra` (`id`, `apartmentID`, `wifi`, `parking`, `pets`, `ac`) VALUES
(1, 10, 1, 1, 0, 0),
(2, 17, 0, 0, 1, 1),
(5, 24, 1, 0, 0, 1),
(6, 25, 1, 0, 0, 1),
(7, 26, 1, 1, 1, 1),
(8, 27, 1, 1, 0, 1),
(9, 28, 1, 0, 1, 1),
(10, 29, 1, 1, 0, 1),
(11, 30, 0, 1, 1, 1),
(12, 31, 1, 1, 1, 1),
(13, 32, 1, 1, 0, 1),
(14, 33, 1, 1, 1, 1),
(15, 34, 1, 1, 0, 1);

-- --------------------------------------------------------

--
-- Table structure for table `kvikowners`
--

CREATE TABLE `kvikowners` (
  `userID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kvikowners`
--

INSERT INTO `kvikowners` (`userID`) VALUES
(2),
(2);

-- --------------------------------------------------------

--
-- Table structure for table `kvikRoles`
--

CREATE TABLE `kvikRoles` (
  `id` int NOT NULL,
  `role` varchar(10) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kvikRoles`
--

INSERT INTO `kvikRoles` (`id`, `role`) VALUES
(1, 'user'),
(2, 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `kvikUploader`
--

CREATE TABLE `kvikUploader` (
  `id` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kvikusers`
--

CREATE TABLE `kvikusers` (
  `id` int NOT NULL,
  `username` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(16) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(32) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `roleID` int NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kvikusers`
--

INSERT INTO `kvikusers` (`id`, `username`, `password`, `email`, `roleID`) VALUES
(2, 'xoxo', 'password', 'yourmother@myplace.cum', 2),
(5, 'deadlines', '23232323', 'sampleaccount@gmail.com', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kvikApartments`
--
ALTER TABLE `kvikApartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kvikComments`
--
ALTER TABLE `kvikComments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userID` (`userID`),
  ADD KEY `apartmentID` (`apartmentID`);

--
-- Indexes for table `kvikExtra`
--
ALTER TABLE `kvikExtra`
  ADD PRIMARY KEY (`id`),
  ADD KEY `apartmentID` (`apartmentID`);

--
-- Indexes for table `kvikowners`
--
ALTER TABLE `kvikowners`
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `kvikRoles`
--
ALTER TABLE `kvikRoles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kvikUploader`
--
ALTER TABLE `kvikUploader`
  ADD KEY `id` (`id`);

--
-- Indexes for table `kvikusers`
--
ALTER TABLE `kvikusers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `roleID` (`roleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kvikApartments`
--
ALTER TABLE `kvikApartments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `kvikComments`
--
ALTER TABLE `kvikComments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `kvikExtra`
--
ALTER TABLE `kvikExtra`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `kvikRoles`
--
ALTER TABLE `kvikRoles`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kvikusers`
--
ALTER TABLE `kvikusers`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `kvikComments`
--
ALTER TABLE `kvikComments`
  ADD CONSTRAINT `kvikComments_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `kvikusers` (`id`),
  ADD CONSTRAINT `kvikComments_ibfk_2` FOREIGN KEY (`apartmentID`) REFERENCES `kvikApartments` (`id`);

--
-- Constraints for table `kvikExtra`
--
ALTER TABLE `kvikExtra`
  ADD CONSTRAINT `kvikExtra_ibfk_1` FOREIGN KEY (`apartmentID`) REFERENCES `kvikApartments` (`id`);

--
-- Constraints for table `kvikowners`
--
ALTER TABLE `kvikowners`
  ADD CONSTRAINT `kvikowners_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `kvikusers` (`id`);

--
-- Constraints for table `kvikUploader`
--
ALTER TABLE `kvikUploader`
  ADD CONSTRAINT `kvikUploader_ibfk_1` FOREIGN KEY (`id`) REFERENCES `kvikusers` (`id`);

--
-- Constraints for table `kvikusers`
--
ALTER TABLE `kvikusers`
  ADD CONSTRAINT `kvikusers_ibfk_1` FOREIGN KEY (`roleID`) REFERENCES `kvikRoles` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
