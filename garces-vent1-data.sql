-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2014 at 05:21 PM
-- Server version: 5.6.16
-- PHP Version: 5.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `garces-vent1`
--

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`ID`, `Title`, `Slug`) VALUES
(1, 'Personal Information', 'personal-information'),
(2, 'At School ', 'at-school '),
(3, 'Friends & Family', 'friends-and-family'),
(4, 'Health', 'health'),
(5, 'Around Town', 'around-town'),
(6, 'Time', 'time'),
(7, 'Shopping', 'shopping'),
(8, 'Work', 'work'),
(9, 'Daily Living ', 'daily-living'),
(10, 'Leisure', 'leisure');

--
-- Dumping data for table `words`
--

INSERT INTO `words` (`ID`, `UnitID`, `Word`, `Slug`, `Pronunciation`) VALUES
(1, 5, 'park', 'park', 'parc'),
(2, 5, 'museum', 'museum', 'miusíum'),
(3, 5, 'library', 'library', 'láibrari'),
(4, 5, 'hospital', 'hospital', 'jóspital'),
(5, 5, 'street', 'street', 'strit'),
(6, 5, 'bus stop', 'bus-stop', 'bas stap'),
(7, 5, 'drugstore', 'drugstore', 'stóar'),
(8, 5, 'post office', 'post-office', 'post office'),
(9, 5, 'restaurant', 'restaurant', 'restaurant'),
(10, 5, 'school', 'school', 'school'),
(11, 6, 'buy a snack', 'buy a snack', ''),
(12, 6, 'catch the bus', 'catch the bus', ''),
(13, 6, 'drink coffee', 'drink coffee', ''),
(14, 6, 'eat dinner', 'eat dinner', ''),
(15, 6, 'get home', 'get home', ''),
(16, 6, 'leave for work ', 'leave for work ', ''),
(17, 6, 'start work', 'start work', ''),
(18, 6, 'take a break', 'take a break', ''),
(19, 6, 'take a nap', 'take a nap', ''),
(20, 6, 'eat breakfast', 'eat breakfast', ''),
(21, 6, 'eat lunch', 'eat lunch', ''),
(22, 6, 'get dressed', 'get dressed', ''),
(23, 6, 'get up', 'get up', ''),
(24, 6, 'go to bed', 'go to bed', ''),
(25, 6, 'take a shower', 'take a shower', ''),
(26, 6, 'take the children to school ', 'take the children to school', ''),
(27, 6, 'walk the dog', 'walk the dog', ''),
(28, 7, 'apples', 'apples', ''),
(29, 7, 'bananas', 'bananas', ''),
(30, 7, 'bread ', 'bread', ''),
(31, 7, 'cheese', 'cheese', ''),
(32, 7, 'cookies', 'cookies', ''),
(33, 7, 'milk', 'milk', ''),
(34, 7, 'onions', 'onions', ''),
(35, 7, 'potatoes', 'potatoes ', ''),
(36, 7, 'rice', 'rice', ''),
(37, 7, 'tomatoes', 'tomatoes', ''),
(38, 7, 'atm card', 'atm-card', ''),
(39, 7, 'check', 'check', ''),
(40, 7, 'credit card', 'credit-card', ''),
(41, 7, 'dime', 'dime', ''),
(42, 7, 'five-dollar bill', 'five-dollar-bill', ''),
(44, 7, 'nickel', 'nickel', ''),
(45, 7, 'one-dollar bill', 'one-dollar-bill', ''),
(46, 7, 'penny', 'penny', ''),
(47, 7, 'quarter', 'quarter', ''),
(48, 7, 'ten-dollar bill', 'ten-dollar-bill', ''),
(49, 7, 'twenty-dollar bill', 'twenty-dollar-bill ', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
