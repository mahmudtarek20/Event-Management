-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 14, 2018 at 10:19 PM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `event_management`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` varchar(64) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `email`, `password`) VALUES
(1, 'Tarek Mahmud', 'tarek', 'mahmudtarek20@gmail.com', '175076f9a90d14a4823d64c7728610ae');

-- --------------------------------------------------------

--
-- Table structure for table `catering`
--

CREATE TABLE `catering` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `price` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `catering`
--

INSERT INTO `catering` (`id`, `name`, `description`, `price`) VALUES
(1, 'Package 1', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.', '20000'),
(2, 'Packhage 2', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.', '22000'),
(3, 'Package 3', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.', '24000'),
(4, 'Packhage 4', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.', '23500');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(64) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `username`, `email`, `password`, `mobile`, `address`) VALUES
(2, 'Tarek Mahmud', 'tarek', 'mahmudtarek2010@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', '01722877840', 'Dhaka');

-- --------------------------------------------------------

--
-- Table structure for table `decoration`
--

CREATE TABLE `decoration` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `decoration`
--

INSERT INTO `decoration` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Package 1', '18000', '', 'Hotel Radisson:\n      Cost: 2,20,000\n        BallRoom : 700-800 Person\n	Uttshob Hall:  300 Person\n	Address: Airport Road, Dhaka Cantonment, Dhaka 1206\n	Phone: 02-9834555'),
(2, 'Package 2', '16000', '', 'PAN PACIFIC   Sonargaon Hotel\n      Cost: 1,50,000\n	Grand BallRoom : 400-800 Person\n	Chitra  100 +\n	Meghna  100 +\n	Address: 107 Kazi Nazrul Islam Avenue, Dhaka 1215\n	Phone: 02-9128008'),
(3, 'Package 1', '15000', '', 'Westin\n      Cost: 2,75,000 \n	Grand BallRoom : 300-700 Person\n	Address: Main Gulshan Avenue, Plot-01, Road 45, Gulshan-2, Dhaka 1212\n	Phone: 02-9891988'),
(4, 'Package 2', '13000', '', 'Le -Meredien Hotel\n      Cost: 1,35,000\n	Grand BallRoom : 300-700 Person\n	Roof-top \n	Address: Road-62, House-N.W.(C)-10, Dhaka\n	Phone: 02-9881042');

-- --------------------------------------------------------

--
-- Table structure for table `entertainment`
--

CREATE TABLE `entertainment` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `entertainment`
--

INSERT INTO `entertainment` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Package 1', '2500', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.'),
(2, 'package 2', '3000', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.'),
(3, 'Package 3', '3500', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.'),
(4, 'package 4', '5000', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `description`, `image`) VALUES
(2, 'Birthday', 'Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.', 'images/1.jpg'),
(5, 'Corporate', 'Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.', ''),
(3, 'Reception', 'Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.', ''),
(4, 'Termenic Ceremony', 'Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.', ''),
(1, 'Wedding', 'Ut purus ipsum, facilisis sit amet sollicitudin eget, maximus convallis metus. Sed tristique dapibus dapibus.', '');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `order_type` varchar(50) NOT NULL,
  `service_id` int(11) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `status` int(11) NOT NULL COMMENT '0=inactive; 1=active; 2=completed'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `username`, `order_type`, `service_id`, `price`, `status`) VALUES
(7, 'tarek', 'venue', 1, '20000', 1),
(8, 'tarek', 'venue', 2, '22000', 1),
(9, 'tarek', 'photography', 1, '0', 1),
(10, 'tarek', 'photography', 2, '0', 1),
(11, 'tarek', 'photography', 3, '0', 1),
(12, 'tarek', 'catering', 1, '0', 1),
(14, 'tarek', 'photography', 4, '0', 1),
(15, 'tarek', 'venue', 1, '0', 1),
(16, 'tarek', 'venue', 1, '0', 1),
(17, 'tarek', 'venue', 1, '0', 1),
(18, 'tarek', 'photography', 1, '0', 1),
(19, 'tarek', 'venue', 1, '0', 1),
(20, 'tarek', 'photography', 1, '0', 1),
(21, 'tarek', 'photography', 1, '0', 1),
(22, 'tarek', 'photography', 1, '0', 1),
(23, 'tarek', 'venue', 1, '0', 1),
(24, 'tarek', 'photography', 2, '0', 1),
(25, 'tarek', 'decoration', 4, '0', 1),
(26, 'tarek', 'venue', 1, '0', 1),
(27, 'tarek', 'photography', 2, '0', 1),
(28, 'tarek', 'catering', 3, '0', 1),
(29, 'tarek', 'decoration', 2, '0', 1);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `order_id` int(11) NOT NULL,
  `sub_total` decimal(10,0) NOT NULL,
  `vat` decimal(10,0) NOT NULL,
  `grand_total` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `photography`
--

CREATE TABLE `photography` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `photography`
--

INSERT INTO `photography` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Photography 1', '12000', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.'),
(2, 'Photography 2', '13000', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.'),
(3, 'Photography 3', '15000', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.'),
(4, 'Photography 4', '18000', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` text NOT NULL,
  `review_date` date NOT NULL,
  `event_name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `security`
--

CREATE TABLE `security` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `security`
--

INSERT INTO `security` (`id`, `name`, `price`, `description`) VALUES
(1, 'Security 1', '5000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.'),
(2, 'Security 2', '5500', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.'),
(3, 'Security 3', '7000', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.'),
(4, 'Security 4', '6500', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image` varchar(255) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `name`, `price`, `image`, `description`) VALUES
(1, 'Venue 1', '20000', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.'),
(2, 'Venue 2', '22000', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.'),
(3, 'Venue 3', '30000', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.'),
(4, 'Venue 4', '25000', '', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet minus eum, incidunt assumenda aspernatur, quisquam quae iusto, adipisci recusandae nam, neque enim. Ullam sint voluptatum delectus expedita veritatis vitae odio.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `catering`
--
ALTER TABLE `catering`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `decoration`
--
ALTER TABLE `decoration`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `entertainment`
--
ALTER TABLE `entertainment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`name`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `service_id` (`service_id`),
  ADD KEY `username` (`username`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `order_id` (`order_id`);

--
-- Indexes for table `photography`
--
ALTER TABLE `photography`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`id`),
  ADD KEY `username` (`username`),
  ADD KEY `event_name` (`event_name`);

--
-- Indexes for table `security`
--
ALTER TABLE `security`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `catering`
--
ALTER TABLE `catering`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `decoration`
--
ALTER TABLE `decoration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `entertainment`
--
ALTER TABLE `entertainment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `photography`
--
ALTER TABLE `photography`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `security`
--
ALTER TABLE `security`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`service_id`) REFERENCES `catering` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `decoration` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_3` FOREIGN KEY (`service_id`) REFERENCES `venue` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_4` FOREIGN KEY (`service_id`) REFERENCES `security` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_5` FOREIGN KEY (`service_id`) REFERENCES `photography` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `orders_ibfk_6` FOREIGN KEY (`username`) REFERENCES `customer` (`username`) ON DELETE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `payment_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `orders` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`username`) REFERENCES `customer` (`username`) ON DELETE CASCADE,
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`event_name`) REFERENCES `event` (`name`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
