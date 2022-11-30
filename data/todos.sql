-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2022 at 05:31 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `api`
--

-- --------------------------------------------------------

--
-- Table structure for table `todos`
--

CREATE TABLE `todos` (
  `todo_id` int(11) NOT NULL,
  `todo_name_todo` varchar(50) NOT NULL,
  `todo_tag` varchar(20) NOT NULL,
  `todo_date` date NOT NULL,
  `todo_is` tinyint(1) NOT NULL,
  `todo_comment` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `todos`
--

INSERT INTO `todos` (`todo_id`, `todo_name_todo`, `todo_tag`, `todo_date`, `todo_is`, `todo_comment`) VALUES
(1, 'Robinet d lma eau nordin', 'Perso', '2022-11-23', 0, ''),
(2, 'Youtube app', 'Browser', '2022-11-23', 1, ''),
(4, 'Deplay Heroku ', 'Heroku', '2022-11-24', 0, ''),
(5, 'Snipet: Json,JS,PHP,PYthon,React,Html ', 'Vscode', '2022-11-24', 0, ''),
(6, 'Script Python from mysql to .database', 'Python', '2022-11-24', 0, ''),
(7, ' FbMarket: Cocote,Table ..', 'Facebook', '2022-11-24', 0, ''),
(8, 'Linux Virtualbox', 'Linux', '2022-11-24', 0, ''),
(9, 'Teraf spadrie\r\n', 'Life', '2022-11-25', 0, ''),
(10, 'Sport in la Cave', 'Perso', '2022-12-05', 0, ''),
(11, 'Fix Php Apach Autorisation', 'Php', '2022-11-24', 0, ''),
(12, 'Git & GitHub', 'Gitub', '2022-11-25', 0, '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `todos`
--
ALTER TABLE `todos`
  ADD PRIMARY KEY (`todo_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `todos`
--
ALTER TABLE `todos`
  MODIFY `todo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
