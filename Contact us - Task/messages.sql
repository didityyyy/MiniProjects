-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 21, 2022 at 08:36 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `contact_us`
--

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `email`, `subject`, `firstname`, `lastname`, `message`) VALUES
(13, 'selena99selena@abv.bg', 'Hey', 'Dayana', '-', 'How are you?\n Message sent from: selena99selena@abv.bg, Dayaan '),
(14, 'johndoe@email.com', 'What is Lorem Ipsum?', 'John', 'Doe', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. \r\n Message sent from: johndoe@email.com, John Doe'),
(15, 'dayana@email.com', 'Lorem ipsum dolor sit amet.', 'Dayana', '-', '\"Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...\"\n Message sent from: dayana@email.com, Dayana '),
(17, 'alex@gmail.com', 'School', 'Alex', 'Swift', 'What are your thoughts?\r\n Message sent from: alex@gmail.com, Alex Swift'),
(20, 'george@email.com', 'Question', 'George', 'Smith', 'Can I ask something?\r\n Message sent from: george@email.com, George Smith'),
(47, 'nalovbg@abv.bg', 'Hunting', 'Stoyan', 'Ivanov', 'Do you sell guns?\r\n Message sent from: nalovbg@abv.bg, Stoyan Ivanov'),
(50, 'test@abv.bg', 'Hello', 'Dayana', '-', 'How are you?\n Message sent from: test@abv.bg, Dayana ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
