-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2018 at 12:08 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stamp_collection`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(111) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`) VALUES
(1, 'zakia', 'zakia@yahoo.com', '123'),
(2, 'jeme', 'jeme@yahoo.com', '456'),
(3, 'nijhum', 'nijhum_jawad2000@yahoo.com', '369');

-- --------------------------------------------------------

--
-- Table structure for table `collection`
--

CREATE TABLE `collection` (
  `id` int(11) NOT NULL,
  `stamp_name` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `size` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `stamp_count` int(11) NOT NULL,
  `country` varchar(50) NOT NULL,
  `year_issued` varchar(10) NOT NULL,
  `admin` int(111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`id`, `stamp_name`, `image`, `size`, `status`, `stamp_count`, `country`, `year_issued`, `admin`) VALUES
(1, 'a', 'img/girl.jpg', '30mm x 42mm', 'No', 2, 'United States', '1850', 2),
(2, 'Crown', 'img/rani.jpg', '32 mm x 45 mm', 'No', 1, 'Australia', '1915', 2),
(3, 'c', 'img/peanut.jpg', '42mm x 42mm', 'No', 2, 'London', '1854', 2),
(4, 'Definitive', 'img/definitive.jpg', '32mm x 42mm', 'Yes', 4, 'Bangladesh', '1880', 1),
(5, 'Independence', 'img/independence.jpg', '40mm x 32mm', 'Yes', 3, 'United States', '1946', 1),
(6, 'Jingle', 'img/jingle.png', '30mm x 42mm', 'Yes', 4, 'Australia', '1940', 1),
(7, 'Jubilee', 'img/jubilee.jpg', '42mm x 32mm', 'No', 2, 'London', '1930', 1),
(8, 'Unique', 'img/unique.jpg', '32mm x 42mm', 'Yes', 4, 'Bangladesh', '1750', 1),
(9, 'Horerider', 'img/horserider.jpg', '30mm x 42mm', 'Yes', 1, 'United States', '1963', 1),
(10, 'Jhorna', 'img/jhorna.jpg', '42mm x 32mm', 'Yes', 2, 'Bangladesh', '1860', 1),
(11, 'Basel', 'img/basel.jpg', '32mm x 42mm', 'No', 1, 'Australia', '1890', 1),
(12, 'Washington', 'img/washington.jpg', '32mm x 42mm', 'Yes', 1, 'United States', '1970', 1),
(13, 'Health', 'img/health.jpg', '32mm x 32mm', 'Yes', 3, 'Bangladesh', '1910', 1),
(14, 'Penny', 'img/penny.jpg', '30mm x 42mm', 'Yes', 1, 'London', '1983', 1),
(15, 'Doyel', 'img/doyel.jpg', '34mm x 42mm', 'Yes', 3, 'Bangladesh', '1875', 1),
(16, 'Britain', 'img/britain.jpg', '42mm x 32mm', 'Yes', 1, 'London', '1967', 1),
(17, 'Washington2', 'img/washington2.jpg', '32mm x 42mm', 'Yes', 1, 'United States', '1943', 1),
(18, 'Christmas', 'img/christmas2.png', '30mm x 42mm', 'Yes', 1, 'London', '1894', 1),
(19, 'George', 'img/george.jpg', '42mm x 32mm', 'Yes', 2, 'United States', '1890', 1),
(20, 'Ballons', 'img/ballons.png', '30mm x 42mm', 'No', 2, 'Australia', '1999', 1),
(21, 'Freedom', 'img/freedom.jpg', '42mm x 32mm', 'Yes', 1, 'United States', '1945', 1),
(22, 'Village', 'img/Village.jpg', '42mm x 32mm', 'No', 1, 'Bangladesh', '1862', 2),
(23, 'Airmail', 'img/airmail.jpg', '42mm x 42mm', 'Yes', 2, 'United States', '1887', 1),
(24, 'Christmas2', 'img/christmas.png', '32mm x 42mm', 'Yes', 2, 'Australia', '1995', 1),
(25, 'Spiny', 'img/spiny.png', '32mm x 42mm', 'Yes', 1, 'London', '1972', 1),
(26, 'Cake', 'img/cake.png', '42mm x 42mm', 'No', 1, 'Australia', '1833', 2),
(27, 'War', 'img/war.jpg', '42mm x 32mm', 'Yes', 2, 'United States', '1820', 2),
(28, 'Beer', 'img/beer.png', '32mm x 42mm', 'Yes', 4, 'Australia', '1770', 1),
(29, 'gg', 'img/swan.jpg', '32mm x 42mm', 'Yes', 2, 'London', '1855', 2),
(30, 'Tiger', 'img/tiger.jpg', '42 mm x 42 mm', 'Yes', 2, 'Bangladesh', '1820', 2),
(31, 'Stadium', 'img/united.jpg', '32 mm x 42 mm', 'Yes', 1, 'London', '1880', 1),
(32, 'Duck', 'img/duck.jpg', '42 mm x 42 mm', 'Yes', 2, 'United States', '1948', 2),
(33, 'China', 'img/china.jpg', '32 mm x 42 mm', 'No', 1, 'United States', '1870', 1),
(34, 'Boat', 'img/boat.jpg', '42 mm x 42 mm', 'No', 1, 'Bangladesh', '1953', 2),
(35, 'Edited', 'img/edited.jpg', '42 mm x 42 mm', 'No', 1, 'London', '1888', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `collection`
--
ALTER TABLE `collection`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
