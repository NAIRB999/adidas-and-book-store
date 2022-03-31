-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 15, 2018 at 10:52 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `addidas`
--

-- --------------------------------------------------------

--
-- Table structure for table `ad_order`
--

CREATE TABLE `ad_order` (
  `orderid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `deliveryname` varchar(30) NOT NULL,
  `deliveryphone` varchar(20) NOT NULL,
  `deliveryaddress` varchar(255) NOT NULL,
  `orderdate` date NOT NULL,
  `status` int(11) NOT NULL,
  `sentdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ad_order`
--

INSERT INTO `ad_order` (`orderid`, `customerid`, `deliveryname`, `deliveryphone`, `deliveryaddress`, `orderdate`, `status`, `sentdate`) VALUES
(1, 3, 'winener', '29384747', 'ygn', '2018-02-09', 0, '0000-00-00'),
(2, 3, 'winener', '29384747', 'ygn', '2018-02-09', 0, '0000-00-00'),
(3, 0, 'winener', '29384747', 'ygn', '2018-02-09', 0, '0000-00-00'),
(4, 0, 'winener', '29384747', 'ygn', '2018-02-09', 0, '0000-00-00'),
(5, 3, 'winener', '29384747', 'ygn', '2018-02-09', 0, '0000-00-00'),
(6, 3, 'winener', '29384747', 'ygn', '2018-02-09', 0, '0000-00-00'),
(7, 3, 'winener', '29384747', 'ygn', '2018-02-09', 0, '0000-00-00'),
(8, 3, 'winener', '29384747', 'ygn', '2018-02-09', 0, '0000-00-00'),
(9, 3, 'winener', '29384747', 'ygn', '2018-02-09', 0, '0000-00-00'),
(10, 3, 'winener', '29384747', 'ygn', '2018-02-09', 0, '0000-00-00'),
(11, 3, 'winener', '29384747', 'ygn', '2018-02-09', 0, '0000-00-00'),
(12, 3, 'winener', '29384747', 'ygn', '2018-02-11', 0, '0000-00-00'),
(13, 3, 'winener', '29384747', 'ygn', '2018-02-11', 0, '0000-00-00'),
(14, 3, 'winener', '29384747', 'ygn', '2018-02-11', 0, '0000-00-00'),
(15, 3, 'winener', '29384747', 'ygn', '2018-02-11', 0, '0000-00-00'),
(16, 3, 'winener', '29384747', 'ygn', '2018-02-13', 0, '0000-00-00'),
(17, 3, 'winener', '29384747', 'ygn', '2018-02-13', 0, '0000-00-00'),
(18, 3, 'winener', '29384747', 'ygn', '2018-02-13', 0, '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `catname` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `catname`) VALUES
(1, 'Shoes'),
(2, 'T-Shirt'),
(3, 'Back-Bag'),
(4, 'Jacket'),
(5, 'Hat');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `fbid` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `fbdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fbid`, `email`, `comment`, `fbdate`) VALUES
(1, 'winer.win@gmail.com', 'aefsrfgdf', '2018-02-13'),
(2, 'winer.win@gmail.com', 'aefsrfgdf', '2018-02-13'),
(3, 'sdfgdf', 'Plz give more discount! Plz give more discount! Plz give more discount! Plz give more discount!Plz give more discount!Plz give more discount!Plz give more discount!', '2018-02-13');

-- --------------------------------------------------------

--
-- Table structure for table `orderdetail`
--

CREATE TABLE `orderdetail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productqty` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orderdetail`
--

INSERT INTO `orderdetail` (`orderid`, `productid`, `productqty`, `amount`) VALUES
(1, 5, 2, 50000),
(14, 5, 1, 25000),
(15, 1, 1, 35000),
(16, 1, 1, 35000),
(17, 1, 1, 35000),
(18, 2, 1, 40000);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `size` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `categoryid`, `price`, `qty`, `photo`, `size`) VALUES
(1, 'T-0001', 2, 35000, 67, 'Untitled-4.png', 'S,M,L'),
(2, 'T-0002', 2, 40000, 49, 'Untitled-50.png', 'S,M,L'),
(3, 'T-0003', 2, 37000, 39, 'Untitled-40.png', 'S,M,L'),
(4, 'T-0004', 2, 39000, 60, 'Untitled-14.png', 'S,M,L'),
(5, 'T-0005', 2, 25000, 43, 'Untitled-6.png', 'S,M,L'),
(6, 'T-0006', 2, 36000, 60, 'Untitled-9.png', 'S,M,L'),
(7, 'T-0007', 2, 35000, 80, 'Untitled-11.png', 'S,M,L'),
(8, 'T-0008', 2, 45000, 49, 'Untitled-10.png', 'S,M,L'),
(9, 'J-0001', 4, 35000, 70, 'Untitled-29.png', 'S,M,L');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `address` varchar(80) NOT NULL,
  `role` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `email`, `phone`, `address`, `role`) VALUES
(1, 'admin ', '202cb962ac59075b964b07152d234b70', '', '', '', 'Admin'),
(2, 'win', '202cb962ac59075b964b07152d234b70', '', '', '', 'Admin'),
(3, 'winener', '202cb962ac59075b964b07152d234b70', 'wsdkvidj@gmail.com', '29384747', 'ygn', 'user'),
(4, 'kyaw', '202cb962ac59075b964b07152d234b70', '', '', '', 'Admin'),
(5, 'win kyaw', '202cb962ac59075b964b07152d234b70', 'dfs@gmail.com', '09-4232323', 'Mdy', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ad_order`
--
ALTER TABLE `ad_order`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`fbid`);

--
-- Indexes for table `orderdetail`
--
ALTER TABLE `orderdetail`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ad_order`
--
ALTER TABLE `ad_order`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `fbid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orderdetail`
--
ALTER TABLE `orderdetail`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
