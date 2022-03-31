-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2018 at 06:38 PM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gpssdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminid` int(11) NOT NULL,
  `adminname` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminid`, `adminname`, `password`) VALUES
(1, 'pyaetunoo', '1bbd886460827015e5d605ed44252251');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryid` int(11) NOT NULL,
  `categoryname` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryid`, `categoryname`) VALUES
(1, 'Phone'),
(2, 'Labtop'),
(3, 'Tablet');

-- --------------------------------------------------------

--
-- Table structure for table `deliveryrecord`
--

CREATE TABLE `deliveryrecord` (
  `recordid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `deliveryname` varchar(30) NOT NULL,
  `deliveryphone` varchar(15) NOT NULL,
  `deliveryaddress` varchar(255) NOT NULL,
  `orderdate` date NOT NULL,
  `senddate` date NOT NULL,
  `orderid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deliveryrecord`
--

INSERT INTO `deliveryrecord` (`recordid`, `customerid`, `deliveryname`, `deliveryphone`, `deliveryaddress`, `orderdate`, `senddate`, `orderid`) VALUES
(4, 3, 'pyae', '09421108312', 'Yangon', '2018-02-05', '2018-02-06', 0),
(5, 3, 'pyae', '09421108312', 'Yangon', '2018-02-05', '2018-02-06', 3),
(6, 3, 'pyae', '09421108312', 'Yangon', '2018-02-05', '2018-02-06', 4),
(7, 3, 'pyae', '09421108312', 'Yangon', '2018-02-05', '2018-02-06', 5),
(8, 3, 'pyae', '09421108312', 'Yangon', '2018-02-07', '2018-02-07', 13),
(9, 4, 'pyaetun', '31232131321312', 'Yangon', '2018-02-07', '2018-02-07', 14),
(10, 5, 'kyawpainghtoo', '09950660248', 'USA', '2018-02-07', '2018-02-07', 15),
(11, 3, 'pyae', '09421108312', 'Yangon', '2018-02-06', '2018-02-07', 12),
(12, 3, 'pyae', '09421108312', 'Yangon', '2018-02-06', '2018-02-07', 11);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedbackid` int(11) NOT NULL,
  `date` date NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `comment` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackid`, `date`, `name`, `email`, `comment`) VALUES
(1, '2018-02-05', 'ddsadsd', 'saaaaaaaaa', 'aaaaaaaaaaaaa'),
(2, '2018-02-05', 'Mg Mg', 'maung@gmail.com', 'Good site for buying mobile de'),
(3, '2018-02-05', 'su su', 'su@gmail.com', 'Good......'),
(4, '2018-02-05', 'aye aye', 'aye@gmail.com', 'Some text...'),
(5, '2018-02-05', 'ant', 'a@gmail.com', 'Good....'),
(6, '2018-02-05', 'Nyi Nyi', 'nyi@gmail.com', 'Good shopping site...'),
(7, '2018-02-07', 'kyawpainghtoo', 'kyaw@gmail.com', 'Nice');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orderid` int(11) NOT NULL,
  `customerid` int(11) NOT NULL,
  `deliveryname` varchar(30) NOT NULL,
  `deliveryphone` varchar(15) NOT NULL,
  `deliveryaddress` varchar(100) NOT NULL,
  `orderdate` date NOT NULL,
  `status` int(11) NOT NULL,
  `senddate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orderid`, `customerid`, `deliveryname`, `deliveryphone`, `deliveryaddress`, `orderdate`, `status`, `senddate`) VALUES
(2, 3, 'pyae', '09421108312', 'Yangon', '2018-02-05', 1, '2018-02-06'),
(3, 3, 'pyae', '09421108312', 'Yangon', '2018-02-05', 1, '2018-02-06'),
(4, 3, 'pyae', '09421108312', 'Yangon', '2018-02-05', 1, '2018-02-06'),
(5, 3, 'pyae', '09421108312', 'Yangon', '2018-02-05', 1, '2018-02-06'),
(6, 3, 'pyae', '09421108312', 'Yangon', '2018-02-05', 0, '0000-00-00'),
(7, 3, 'pyae', '09421108312', 'Yangon', '2018-02-05', 0, '0000-00-00'),
(8, 3, 'pyae', '09421108312', 'Yangon', '2018-02-06', 0, '0000-00-00'),
(9, 3, 'pyae', '09421108312', 'Yangon', '2018-02-06', 0, '0000-00-00'),
(10, 3, 'pyae', '09421108312', 'Yangon', '2018-02-06', 0, '0000-00-00'),
(11, 3, 'pyae', '09421108312', 'Yangon', '2018-02-06', 1, '2018-02-07'),
(12, 3, 'pyae', '09421108312', 'Yangon', '2018-02-06', 1, '2018-02-07'),
(13, 3, 'pyae', '09421108312', 'Yangon', '2018-02-07', 1, '2018-02-07'),
(14, 4, 'pyaetun', '31232131321312', 'Yangon', '2018-02-07', 1, '2018-02-07'),
(15, 5, 'kyawpainghtoo', '09950660248', 'USA', '2018-02-07', 1, '2018-02-07');

-- --------------------------------------------------------

--
-- Table structure for table `ordersdetail`
--

CREATE TABLE `ordersdetail` (
  `orderid` int(11) NOT NULL,
  `productid` int(11) NOT NULL,
  `productqty` int(11) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ordersdetail`
--

INSERT INTO `ordersdetail` (`orderid`, `productid`, `productqty`, `amount`) VALUES
(0, 2, 1, 950),
(0, 2, 2, 1900),
(0, 3, 1, 569),
(2, 2, 2, 1900),
(3, 2, 2, 1900),
(3, 4, 1, 1199),
(4, 2, 1, 950),
(4, 5, 1, 399),
(5, 2, 3, 2850),
(5, 7, 1, 724),
(5, 11, 1, 230),
(6, 2, 1, 950),
(6, 5, 1, 399),
(7, 2, 2, 1900),
(7, 3, 1, 569),
(8, 18, 3, 447),
(9, 18, 2, 298),
(10, 17, 2, 1098),
(11, 7, 2, 1448),
(11, 8, 2, 1698),
(12, 2, 1, 950),
(12, 17, 2, 1098),
(13, 17, 2, 1098),
(14, 17, 10, 5490),
(15, 4, 6, 7194);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `productid` int(11) NOT NULL,
  `productname` varchar(30) NOT NULL,
  `categoryid` int(11) NOT NULL,
  `series` varchar(30) NOT NULL,
  `price` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `info` varchar(255) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productid`, `productname`, `categoryid`, `series`, `price`, `qty`, `info`, `photo`) VALUES
(2, 'Samsung Note 8', 1, 'Note', 950, 19, '-Processor-   \r\n Octa-Core 2.45GHz(Quad)\r\n            +\r\n 1.9GHz(Quad)\r\n\r\n- Resolution- \r\n 2960 x 1440 (Quad HD+)\r\n\r\n-Display size-\r\n 6.3\" (full rec', '5.png'),
(3, 'Samsung S7', 1, 'S', 569, 50, '-Internal Memory   -\r\n 32\r\n\r\n-Available Memory-\r\nMicroSD(Up to 256GB)\r\n\r\n-Camera resolution(Front) -\r\n CMOS 5.0\r\n\r\nCamera resolution(Rear)               ', 'a (4).png'),
(4, 'Notebook 9', 2, 'Notebook', 1199, 64, '-Processor-  \r\n Intel Core i7 \r\n\r\n-OS -\r\nWindow 10Home\r\n\r\n-Display-\r\n30.3\" LED QHD\r\n          +\r\nDisplay(3200x1800 dots)\r\n\r\n-Battery-\r\n2cell/Li-Po', 'q (2).png'),
(5, 'Samsumg Tab S2', 3, 'Tab', 399, 40, '-Fingerprint Scanner-\r\n Yes\r\n\r\n-Processor Speed,Type-\r\n Octa-core (1.8GHz Quad \r\n                   +\r\n 1.4GHz Quad) APQ8076\r\n\r\n-Camera resolution (Front)-\r\n 2.1 MP\r\n\r\n-Camera resolution (Rear)-\r\n 8.0 MP\r\n', '1.png'),
(6, 'Tab E8.0', 3, 'Tab', 249, 44, '-Internal Memory-\r\n 1.5GBRAM, 16GB ROM\r\n\r\n-External Memory-\r\n Up to 128GB (microSDTM card\r\n\r\n-Main Display Resolution-\r\n 1280 x 800\r\n\r\n-Main Display Size-\r\n 8.0\r\n\r\n-Processor Speed, Type-\r\nQuad 1.3G, Exyn053475(|sland)\r\n\r\nBattery T', 'h (3).png'),
(7, 'S8', 1, 'S', 724, 58, '-OS-\r\nAndroid 7.0\r\n\r\n-Internal Memory\r\n64GB ROM, 4GB RAM\r\n\r\n-Camera resolution(Front,Rear)\r\n8MP,Dual pixel12.0MP\r\n\r\n-Battery\r\n3000mAh\r\n\r\n-Sensor Type\r\nFingerprint,Face lock\r\n', 'o (3).png'),
(8, 'S8 Active', 1, 'S', 849, 68, '-OS-\r\nAndroid 7.0\r\n\r\n-Internal Memory\r\n64GB\r\n\r\n-Camera resolution(Front,Rear)\r\n8MP,12MP\r\n\r\n-Battery\r\n4000mAh\r\n\r\n-Sensor Type\r\nFingerprint', 'p (1).png'),
(9, 'S7edge', 1, 'S', 669, 62, '-Processor-\r\nQuad-Core 2.15GHz\r\n\r\n-OS-\r\nAndroid 7.0\r\n\r\n-Battery \r\n3600mAh\r\n\r\n-Camera resolution(Front,Rear)\r\n5MP, Dual Pixel12.0 MP\r\n\r\n-Internal Memory\r\n32GB\r\n\r\n-Sensor Type \r\nFingerprint\r\n', 'i (1).png'),
(10, 'Samsumg S6 Edge', 1, 'S', 349, 45, '-Processor-\r\nOcta-Core 2.1GHz\r\n\r\n-OS-\r\nAndroid 5.0 Lollipop\r\n\r\n-Camera resolution(Front,Rear)\r\n5MP,16MP\r\n\r\n-Battery\r\n2600mAh\r\n\r\n-Internal Memory\r\n32GB\r\n\r\n-Sensor Type\r\nFingerprint ', 'u (2).png'),
(11, 'Tab E7.0', 3, 'Tab', 230, 35, '-Processor-\r\nQuad-Core 1.3GHz\r\n\r\n-OS-\r\n Android 4.4 KitKat\r\n\r\n-Camera resolution(Front,Rear)\r\nN/A, 2MP\r\n\r\n-Battery\r\n3600mAh\r\n\r\n-Internal Memory\r\n1GB RAM, 8GB ROM\r\n\r\n', 'g (4).png'),
(12, 'Tab A10.1', 3, 'Tab', 329, 42, '-Processor-\r\nOcta-Core 1.6GHz\r\n\r\n-OS-\r\nAndroid 6.0 Marshmellow\r\n\r\n-Camera resolution(Front,Rear)-\r\n2.0MP,8.0MP\r\n\r\n-Battery-\r\nLi-Lon 7300mAh\r\n\r\n-Internal Memory \r\n3GB RAM, 16GB ROM', 'f (4).png'),
(13, 'Tab A8.0', 3, 'Tab', 229, 35, '-Processor-\r\nQuad-Core 1.4GHz \r\n\r\n-OS-\r\nAndroid 7.1\r\n\r\n-Battery\r\nLi-Lon 5000mAh\r\n\r\n-Camera resolution(Front,Rear)\r\n5MP,8MP \r\n\r\n-Internal Memory\r\n2GB RAM,32GB ROM\r\n', 'd (3).png'),
(14, 'Notebook Odyssey', 2, 'Notebook', 1399, 75, '-Processor-\r\n7th Gen Intel Core i7\r\n\r\n-OS-\r\nWindow 10Home\r\n\r\n-Internal Memory\r\n8GB\r\n\r\n-Battery \r\n4cell Li-ion', 'y (1).png'),
(15, 'Notebook 9pro', 2, 'Notebook', 1099, 70, '-Windows 10 Home\r\n\r\n-IntelÂ® Coreâ„¢ i7 Processor\r\n\r\n- 13.3\" LED Display (1920x1080 dots)\r\n\r\n-256GB SSD Storage  ', 't (3).png'),
(16, 'Galaxy Book', 2, 'Notebook', 729, 69, '-Processor-\r\n1.0GHz Core m3\r\n\r\n-OS-\r\nWindow 10Home\r\n\r\n-Camera resolution(Front)\r\n5MP\r\n\r\n-Battery\r\n4000mAh\r\n\r\n-Internal Memory\r\n4GB RAM+128GB', 'w (1).png'),
(17, 'Galaxy View', 2, 'Notebook        ', 549, 29, '-Processor-\r\nOcta-Core 1.6GHz\r\n\r\n-OS-\r\nAndroid 5.1 Lollipop\r\n\r\n-Internal Memory-\r\n2GB RAM,32GBROM\r\n\r\n-Camera resolution(Front)\r\n2.1\r\n\r\n-Battery-\r\n5700mAh', 'e (4).png'),
(18, 'Samsumg J3', 1, 'J', 149, 29, '-Processor-\r\nQuad Core 1.4GHz\r\n\r\n-Display-\r\n5.0\"\r\n\r\n-Camera resolution(Front,Rear)-\r\n2MP,5MP\r\n\r\n-Internal Memory-\r\n16GB\r\n\r\n-Battery-\r\n2600mAh', 'r (5).png');

-- --------------------------------------------------------

--
-- Table structure for table `slidephoto`
--

CREATE TABLE `slidephoto` (
  `slideid` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slidephoto`
--

INSERT INTO `slidephoto` (`slideid`, `photo`) VALUES
(1, 'slide1.png'),
(2, 'slide2.png'),
(3, 'slide3.png'),
(4, 'slide4.png'),
(5, 'slide5.png'),
(6, 'slide6.png');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `userid` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(30) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userid`, `username`, `password`, `email`, `address`, `phone`) VALUES
(3, 'pyae', '1bbd886460827015e5d605ed44252251', 'pyae@gmail.com', 'Yangon', '09421108312'),
(4, 'pyaetun', '1bbd886460827015e5d605ed44252251', 'asa@gmail.com', 'Yangon', '31232131321312'),
(5, 'kyawpainghtoo', 'dd4b21e9ef71e1291183a46b913ae6f2', 'kyaw@gmail.com', 'USA', '09950660248');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminid`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryid`);

--
-- Indexes for table `deliveryrecord`
--
ALTER TABLE `deliveryrecord`
  ADD PRIMARY KEY (`recordid`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackid`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orderid`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`productid`);

--
-- Indexes for table `slidephoto`
--
ALTER TABLE `slidephoto`
  ADD PRIMARY KEY (`slideid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `categoryid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `deliveryrecord`
--
ALTER TABLE `deliveryrecord`
  MODIFY `recordid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orderid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `productid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `slidephoto`
--
ALTER TABLE `slidephoto`
  MODIFY `slideid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
