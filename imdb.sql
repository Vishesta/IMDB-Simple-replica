-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 08, 2019 at 06:47 PM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

DROP TABLE IF EXISTS `actor`;
CREATE TABLE IF NOT EXISTS `actor` (
  `sl` int(50) NOT NULL AUTO_INCREMENT,
  `name` varchar(2000) COLLATE utf8_unicode_ci NOT NULL,
  `sex` enum('male','female','others','') COLLATE utf8_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `movie_name` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `bio` varchar(800) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`sl`),
  KEY `movie_name` (`movie_name`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`sl`, `name`, `sex`, `dob`, `movie_name`, `bio`) VALUES
(1, 'Theo James', 'male', '1984-12-16', 'A', 'English actor,director, producer and model.'),
(2, 'Benedict Cumberbatch', 'male', '1976-07-19', 'B', 'Benedict Timothy Carlton Cumberbatch  is an English actor who has performed in film, television, theatre and radio.'),
(3, 'Leo Sahr', 'male', '1980-06-04', 'C', 'An oscar winning actor'),
(4, 'Casio libert', 'male', '1996-05-07', 'D', 'a guy'),
(5, 'Noah Whitman', 'female', '1996-05-04', 'e', 'wonderful');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
CREATE TABLE IF NOT EXISTS `movies` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `poster` varchar(600) COLLATE utf8_unicode_ci DEFAULT NULL,
  `movie_name` varchar(300) COLLATE utf8_unicode_ci DEFAULT NULL,
  `year` date DEFAULT NULL,
  `plot` varchar(1000) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cast` varchar(3444) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `movie_name` (`movie_name`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `poster`, `movie_name`, `year`, `plot`, `cast`) VALUES
(1, 'posters/2461.jpeg', 'A', '2019-07-10', 'adventure all around', ''),
(2, 'posters/2795.jpg', 'B', '2019-07-10', 'a fairy tale', ''),
(3, 'posters/6145.jpg', 'C', '2019-07-24', 'A romanctic movie', ''),
(4, 'posters/7819.jpg', 'V', '2019-07-15', 'RWE', NULL),
(5, 'posters/6177.jpg', 'e', '2019-07-23', 'Horror', 'Sherry'),
(6, 'posters/7361.jpg', 'r', '2019-07-10', 'Umiam', NULL),
(7, 'posters/9611.jpg', 'w', '2019-07-03', 'deeee', NULL),
(8, 'posters/6414.jpg', 'D', '2019-07-02', 'A plot twist', ''),
(9, 'posters/9652.jpg', 'F', '2019-07-03', 'ghgh', NULL);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `actor`
--
ALTER TABLE `actor`
  ADD CONSTRAINT `movie_name` FOREIGN KEY (`movie_name`) REFERENCES `movies` (`movie_name`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
