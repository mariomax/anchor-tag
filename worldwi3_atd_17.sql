-- phpMyAdmin SQL Dump
-- version 4.7.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 02, 2017 at 12:59 PM
-- Server version: 10.0.33-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `worldwi3_atd_17`
--

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `c_email` text NOT NULL,
  `c_phone` text NOT NULL,
  `comments` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `c_name`, `c_email`, `c_phone`, `comments`) VALUES
(4, 'Mario', 'shitdog@gmail.com', '503-234-6896', 'This field still isn\'t showing the \"placeholder text\" like it used to. Let\'s check another browser...            '),
(5, 'Mario', 'mariojames211@gmail.com', '503-351-3640', 'Still not seeing the \"placeholder text\" in this field. Is it worth worrying about? And you need to fix the success page, FYI.       '),
(9, 'Mario', 'shitdog@gmail.com', '503-351-3640', 'This is a final test. It looks like everything is working for now... This should show up in the shitdog email and my standard email. Good job on this so far - it\'s been a good amount of work in a short session. Pat yourself on the back!            ');

-- --------------------------------------------------------

--
-- Table structure for table `process_section`
--

CREATE TABLE `process_section` (
  `id` int(11) NOT NULL,
  `meet` text NOT NULL,
  `assets` text NOT NULL,
  `design` text NOT NULL,
  `deploy` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `work_section`
--

CREATE TABLE `work_section` (
  `id` int(11) NOT NULL,
  `thumb` text NOT NULL,
  `title` text NOT NULL,
  `stats` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `work_section`
--

INSERT INTO `work_section` (`id`, `thumb`, `title`, `stats`) VALUES
(1, '/images/coyote.png', 'Urban Coyote Project', 'This is a mobile first project based on the presence of urban coyotes in Portland, OR.'),
(2, '/images/maynard.png', 'The Range Finder', 'This is Craig Maynard Scott\'s photography portfolio. He\'s an all around creative fellow.'),
(3, '/images/beers.png', 'Beer with me a sec.', 'Utilizing the Brewery DB API, this is a mobile first site which serves as a beer encyclopedia and finder.'),
(4, 'images/burrito.png', 'Burrito Masala', 'Hypothetically, one of the greatest food carts in Portland. Realistically, it\'s a tight mobile first website.'),
(5, '/images/ace.png', 'Ace in the Hole MultiSports', '\"MultiSports for Every Body.\" The Pacific Northwest\'s most inclusive and fun weekend event. Use the PHP form to register!'),
(6, '/images/bridge.png', 'PCC: The Bridge', 'The Bridge is the student newspaper of Portland Community College. Their new WordPress site is ready for prime time.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `process_section`
--
ALTER TABLE `process_section`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `work_section`
--
ALTER TABLE `work_section`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `process_section`
--
ALTER TABLE `process_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `work_section`
--
ALTER TABLE `work_section`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
