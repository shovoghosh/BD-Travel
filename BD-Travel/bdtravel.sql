-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2018 at 04:51 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bdtravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `fullname` varchar(40) NOT NULL,
  `username` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `fullname`, `username`, `email`, `password`, `phone`, `address`, `image`) VALUES
(1, 'S.M.AL Mahin', 'ikaras', 'mahin.ikaras123@gmial.com', '123', '00', 'aaaa', '');

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(200) NOT NULL,
  `fullname` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `email` varchar(500) NOT NULL,
  `password` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `fullname`, `username`, `email`, `password`, `image`) VALUES
(1, 'samiur khan', 'samin', 'samin@gmail.com', '123', ''),
(2, 'shuvo ghosh', 'shuvo', 'shuvo@gmail.com', '123', '');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `gid` int(20) NOT NULL,
  `gprice` int(20) NOT NULL,
  `hid` int(20) NOT NULL,
  `hprice` int(20) NOT NULL,
  `tid` int(20) NOT NULL,
  `tprice` int(20) NOT NULL,
  `totalprice` int(20) NOT NULL,
  `provideprice` int(20) NOT NULL,
  `profit` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guide`
--

CREATE TABLE `guide` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `address` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `status` int(10) NOT NULL,
  `price` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `id` int(11) NOT NULL,
  `uid` int(20) NOT NULL,
  `hid` int(20) NOT NULL,
  `tid` int(20) NOT NULL,
  `gid` int(20) NOT NULL,
  `pid` int(20) NOT NULL,
  `bid` int(20) NOT NULL,
  `totalprice` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `hotel`
--

CREATE TABLE `hotel` (
  `id` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL,
  `hname` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hotel`
--

INSERT INTO `hotel` (`id`, `pname`, `hname`, `price`, `phone`, `address`, `image`) VALUES
(1, 'Dhaka', 'Westin Dhaka', 10000, '01712.....', 'Dhaka,Bangladesh', 'westin.jpg'),
(2, 'khulna', 'Hotel Royal Int.', 8000, '0191......', 'Khulna,Bangladesh', 'royal.jpg'),
(3, 'sylhet', 'noorjahan Grand', 5000, '0193.....', 'Sylhet,Bangladesh', 'noorjahan.jpg'),
(4, 'Barisal', 'Grand Park', 6000, '0186.....', 'Barisal,Bangladesh', 'grandpark.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `subject` varchar(100) NOT NULL,
  `message` varchar(3000) NOT NULL,
  `time` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `name`, `email`, `subject`, `message`, `time`) VALUES
(1, 'mahin', 'mahin.ikaras123@gmail.com', 'meal  management system', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', '2:5'),
(2, 'tonmoy', 'aaa@gmail.com', 'meal  management systemmm', 'asdasdasdasdweqevcvfhhgfhfghfgh', '10:3'),
(10, 'mahin', 'mahin.ikaras123@gmail.com', 'atp 3', 'project defense ............................................', '11:44');

-- --------------------------------------------------------

--
-- Table structure for table `messagefromadmin`
--

CREATE TABLE `messagefromadmin` (
  `id` int(11) NOT NULL,
  `mfrom` varchar(200) NOT NULL,
  `mto` varchar(200) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `message` varchar(200) NOT NULL,
  `time` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messagefromadmin`
--

INSERT INTO `messagefromadmin` (`id`, `mfrom`, `mto`, `subject`, `message`, `time`) VALUES
(1, 'ikaras', 'mahin.ikaras123@gmail.com', 'meal  management system', 'aaaa', 'Thu Nov 01 2018 21:06:13 GMT+0600 (Bangladesh Standard Time)'),
(13, 'aa', 'ss', 'aa', 'ssss', '14:49'),
(14, 'aa', 'ss', 'aa', 'ssss', '14:50'),
(15, 'aa', 'aaa@gmail.com', 'meal  management systemmm', 'aaaaaa', '14:55'),
(16, 'ikaras', 'aaa@gmail.com', 'aasdasdasdas', 'your request has been accepted', '14:1');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `number` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE `place` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL,
  `image1` varchar(40) NOT NULL,
  `image2` varchar(40) NOT NULL,
  `image3` varchar(40) NOT NULL,
  `description` varchar(3000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`id`, `name`, `image1`, `image2`, `image3`, `description`) VALUES
(1, 'rangamati', 'rangamati1.png', '', '', ''),
(2, 'chittagong', '', '', '', ''),
(3, 'sylhet', '', '', '', ''),
(4, 'dhaka', 'dhaka1.jpg', '', '', ''),
(5, 'comilla', '', '', '', ''),
(6, 'barisal', '', '', '', ''),
(7, 'khulna', 'khulna1.jpg', '', '', ''),
(8, 'saintmartin', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `search`
--

CREATE TABLE `search` (
  `id` int(200) NOT NULL,
  `searchitem` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `search`
--

INSERT INTO `search` (`id`, `searchitem`) VALUES
(2, 'dhaka'),
(3, 'khulna'),
(4, 'khulna'),
(5, 'khulna'),
(6, 'rangamati'),
(7, 'dhaka'),
(8, 'saintmartin'),
(9, 'chittagong'),
(10, 'chittagong'),
(11, 'saintmartin'),
(12, 'saintmartin'),
(13, 'barisal'),
(14, 'adasd'),
(15, 'rangamati'),
(16, 'khulna'),
(17, 'dhaka'),
(18, 'khulna'),
(19, 'khulna'),
(20, 'khulna'),
(21, 'khulna'),
(22, 'dhaka'),
(23, 'rangamati'),
(24, 'barisal'),
(25, 'dhaka'),
(26, 'sylhet'),
(27, 'sylhet'),
(28, 'khulna'),
(29, 'khulna'),
(30, 'barisal'),
(31, 'barisal'),
(32, 'barisal');

-- --------------------------------------------------------

--
-- Table structure for table `subplace`
--

CREATE TABLE `subplace` (
  `id` int(200) NOT NULL,
  `placename` varchar(5000) NOT NULL,
  `subplacename` varchar(500) NOT NULL,
  `image` varchar(500) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `price` varchar(500) NOT NULL,
  `agentid` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subplace`
--

INSERT INTO `subplace` (`id`, `placename`, `subplacename`, `image`, `description`, `price`, `agentid`) VALUES
(1, 'dhaka', 'zinda park', 'zindapark.jpg', 'nice place to hang out with family and friends.', '1000 BDT', 1),
(2, 'Dhaka', 'Panam City', 'panamcity.jpg', 'Historical place', '1500 BDT', 2),
(3, 'Dhaka', 'Lalbag Kella', 'lalbagkella.jpg', 'Historical place', '2000 BDT', 2),
(4, 'Khulna', 'Sundarban', 'sundarban.jpg', 'World largest mangrove forest', '5000 BDT', 1),
(5, 'Khulna', 'Khanjahan Ali Mazar', 'khanjahanalimajar.jpg', 'histoircal place', '4000 BDT', 1);

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `type` varchar(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `price` int(20) NOT NULL,
  `status` int(5) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `username` varchar(30) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `image` varchar(500) DEFAULT NULL,
  `registrationdate` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `phone`, `username`, `firstname`, `lastname`, `password`, `address`, `image`, `registrationdate`) VALUES
(2, 'karim@gmail.com', '112', 'karim', 'sss', 'sss', '147', 'aaaa', NULL, '2018-01-09'),
(3, 'mahin.ikaras123@gmail.com', '121212', 'mahin', 'mahin', 'Shurid', '11111111', 'asdfsadf', '328337272_1972062946154753_6177129038360257684_o.jpg', '2018-05-22'),
(4, 'rahman@gmail.com', '123', 'Rahman', 'Md.', 'Rahman', '11111111', 'asdasd', NULL, '2018-10-08'),
(5, 'dipon@gmail.com', '1234', 'dipon', 'dipon', 'kumar', '111111111', 'asdfadsf', NULL, '2018-11-12'),
(8, 'zxcx@sdfds.com', '23232', 'fdfsd', 'czczxc', 'zxczxczx', 'asdasdas', 'sdfsdfsdf', NULL, '2018-12-14'),
(9, 'sajid@gmail.com', '0172323', 'sajid', 'sajid', 'abdullah', '11111111', 'sdfsdfasdf', NULL, '2018-12-14');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `guide`
--
ALTER TABLE `guide`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hotel`
--
ALTER TABLE `hotel`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messagefromadmin`
--
ALTER TABLE `messagefromadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `place`
--
ALTER TABLE `place`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `search`
--
ALTER TABLE `search`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subplace`
--
ALTER TABLE `subplace`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
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
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `guide`
--
ALTER TABLE `guide`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hotel`
--
ALTER TABLE `hotel`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `messagefromadmin`
--
ALTER TABLE `messagefromadmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `place`
--
ALTER TABLE `place`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `search`
--
ALTER TABLE `search`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `subplace`
--
ALTER TABLE `subplace`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
