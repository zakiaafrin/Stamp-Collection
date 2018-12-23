-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2018 at 06:17 AM
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
(1, 'Zakia', 'zakia@yahoo.com', '123'),
(2, 'Jeme', 'jeme@yahoo.com', '456'),
(3, 'Nijhum', 'nijhum@yahoo.com', '789'),
(4, 'Afrin', 'afrin@yahoo.com', '147'),
(5, 'Jawad', 'jawad@yahoo.com', '258');

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
  `admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `collection`
--

INSERT INTO `collection` (`id`, `stamp_name`, `image`, `size`, `status`, `stamp_count`, `country`, `year_issued`, `admin`) VALUES
(1, 'Partying', 'img/girl.jpg', '30mm x 42mm', 'No', 2, 'United States', '1850', 'Jeme'),
(2, 'Crown', 'img/rani.jpg', '32 mm x 45 mm', 'No', 1, 'Australia', '1915', 'Afrin'),
(3, 'Peanuts', 'img/peanut.jpg', '42mm x 42mm', 'No', 2, 'London', '1854', 'Jeme'),
(4, 'Definitive', 'img/definitive.jpg', '32mm x 42mm', 'Yes', 4, 'Bangladesh', '1880', 'Zakia'),
(5, 'Independence', 'img/independence.jpg', '40mm x 32mm', 'Yes', 3, 'United States', '1946', 'Nijhum'),
(6, 'Jingle', 'img/jingle.png', '30mm x 42mm', 'Yes', 4, 'Australia', '1940', 'Zakia'),
(7, 'Jubilee', 'img/jubilee.jpg', '42mm x 32mm', 'No', 2, 'London', '1930', 'Afrin'),
(8, 'Unique', 'img/unique.jpg', '32mm x 42mm', 'Yes', 4, 'Bangladesh', '1750', 'Zakia'),
(9, 'Horerider', 'img/horserider.jpg', '30mm x 42mm', 'Yes', 1, 'United States', '1963', 'Zakia'),
(10, 'Jhorna', 'img/jhorna.jpg', '42mm x 32mm', 'Yes', 2, 'Bangladesh', '1860', 'Jawad'),
(11, 'Basel', 'img/basel.jpg', '32mm x 42mm', 'No', 1, 'Australia', '1890', 'Zakia'),
(12, 'Washington', 'img/washington.jpg', '32mm x 42mm', 'Yes', 1, 'United States', '1970', 'Jeme'),
(13, 'Health', 'img/health.jpg', '32mm x 32mm', 'Yes', 3, 'Bangladesh', '1910', 'Zakia'),
(14, 'Penny', 'img/penny.jpg', '30mm x 42mm', 'Yes', 1, 'London', '1983', 'Afrin'),
(15, 'Doyel', 'img/doyel.jpg', '34mm x 42mm', 'Yes', 3, 'Bangladesh', '1875', 'Zakia'),
(16, 'Britain', 'img/britain.jpg', '42mm x 32mm', 'Yes', 1, 'London', '1967', 'Zakia'),
(17, 'Washington2', 'img/washington2.jpg', '32mm x 42mm', 'Yes', 1, 'United States', '1943', 'Zakia'),
(18, 'Christmas', 'img/christmas2.png', '30mm x 42mm', 'Yes', 1, 'London', '1894', 'Jeme'),
(19, 'George', 'img/george.jpg', '42mm x 32mm', 'Yes', 2, 'United States', '1890', 'Zakia'),
(20, 'Ballons', 'img/ballons.png', '30mm x 42mm', 'No', 2, 'Australia', '1999', 'Zakia'),
(21, 'Freedom', 'img/freedom.jpg', '42mm x 32mm', 'Yes', 1, 'United States', '1945', 'Zakia'),
(22, 'Village', 'img/Village.jpg', '42mm x 32mm', 'No', 1, 'Bangladesh', '1862', 'Jeme'),
(23, 'Airmail', 'img/airmail.jpg', '42mm x 42mm', 'Yes', 2, 'United States', '1887', 'Zakia'),
(24, 'Christmas2', 'img/christmas.png', '32mm x 42mm', 'Yes', 2, 'Australia', '1995', 'Zakia'),
(25, 'Spiny', 'img/spiny.png', '32mm x 42mm', 'Yes', 1, 'London', '1972', 'Zakia'),
(26, 'Cake', 'img/cake.png', '42mm x 42mm', 'No', 1, 'Australia', '1833', 'Jeme'),
(27, 'War', 'img/war.jpg', '42mm x 32mm', 'Yes', 2, 'United States', '1820', 'Jeme'),
(28, 'Beer', 'img/beer.png', '32mm x 42mm', 'Yes', 4, 'Australia', '1770', 'Zakia'),
(29, 'Castle', 'img/swan.jpg', '32mm x 42mm', 'Yes', 2, 'London', '1855', 'Jeme'),
(30, 'Tiger', 'img/tiger.jpg', '42 mm x 42 mm', 'Yes', 2, 'Bangladesh', '1820', 'Jeme'),
(31, 'Stadium', 'img/united.jpg', '32 mm x 42 mm', 'Yes', 1, 'London', '1880', 'Zakia'),
(32, 'Duck', 'img/duck.jpg', '42 mm x 42 mm', 'Yes', 2, 'United States', '1948', 'Jeme'),
(33, 'Captain', 'img/78.jpg', '30 mm x 42 mm', 'No', 3, 'United States', '1892', 'Afrin'),
(34, 'Boat', 'img/boat.jpg', '42 mm x 42 mm', 'No', 1, 'Bangladesh', '1953', 'Jeme'),
(35, 'Edited', 'img/edited.jpg', '42 mm x 42 mm', 'No', 1, 'London', '1888', 'Jeme'),
(40, 'Manpower', 'img/china.jpg', '32 mm x 45 mm', 'No', 2, 'United States', '1864', 'Zakia'),
(48, 'Transport', 'img/25.jpg', '42 mm x 42 mm', 'No', 1, 'Bangladesh', '1867', 'Zakia'),
(49, 'Creating', 'img/67.jpg', '42 mm x 42 mm', 'Yes', 1, 'Bangladesh', '1987', 'Nijhum'),
(50, 'Capital', 'img/28.jpg', '42 mm x 32 mm', 'No', 2, 'Bangladesh', '1944', 'Nijhum'),
(51, 'All', 'img/21.jpg', '32 mm x 45 mm', 'No', 3, 'London', '1876', 'Nijhum'),
(52, 'Now', 'img/31.jpg', '42 mm x 42 mm', 'No', 4, 'Australia', '1922', 'Nijhum'),
(53, 'Map', 'img/13.jpg', '42 mm x 42 mm', 'Yes', 2, 'London', '1973', 'Afrin'),
(55, 'First', 'img/56.jpg', '42 mm x 42 mm', 'No', 2, 'United states', '1982', 'Jawad'),
(57, 'Words', 'img/79.jpg', '32 mm x 42 mm', 'No', 2, 'London', '1987', 'Jawad'),
(60, 'Check', 'img/profile.jpg', '42 mm x 32 mm', 'Yes', 2, 'London', '1997', 'Zakia'),
(62, 'Other Country', 'img/19.jpg', '32 mm x 42 mm', 'No', 2, 'Saudi Arabia', '1874', 'Zakia'),
(64, 'Dhdnh', 'img/27.jpg', '32 mm x 42 mm', 'Yes', 1, 'London', '1864', 'Afrin'),
(65, 'Other', 'img/33.jpg', '32 mm x 45 mm', 'No', 2, 'Oman', '1867', 'Afrin'),
(66, 'Ausmap', 'img/13.jpg', '42 mm x 42 mm', 'No', 1, 'Australia', '1986', 'Jawad'),
(68, 'Arob', 'img/17.jpg', '42 mm x 42 mm', 'No', 3, 'England', '1867', 'Jawad');

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
  MODIFY `id` int(111) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `collection`
--
ALTER TABLE `collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
