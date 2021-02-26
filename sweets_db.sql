-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Feb 26, 2021 at 01:26 PM
-- Server version: 5.7.32
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sweets_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_info`
--

CREATE TABLE `cart_info` (
  `cart_id` int(11) NOT NULL,
  `c_itemname` int(100) NOT NULL,
  `c_itemprice` int(100) NOT NULL,
  `c_quantity` int(100) NOT NULL,
  `c_subtotal` int(100) NOT NULL,
  `c_total` int(100) NOT NULL,
  `c_shippngfee` int(100) NOT NULL,
  `c_sett_effort` int(100) NOT NULL,
  `c_bigtotal` int(100) NOT NULL,
  `c_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_form`
--

CREATE TABLE `contact_form` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(100) NOT NULL,
  `con_mail` varchar(100) NOT NULL,
  `con_category` varchar(100) NOT NULL,
  `con_coment` varchar(100) NOT NULL,
  `con_day` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `contact_list`
--

CREATE TABLE `contact_list` (
  `con_id` int(11) NOT NULL,
  `con_name` varchar(100) NOT NULL,
  `con_mail` varchar(100) NOT NULL,
  `con_category` varchar(100) NOT NULL,
  `con_coment` varchar(100) NOT NULL,
  `con_day` date NOT NULL,
  `con_reply` varchar(100) NOT NULL,
  `con_replyday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lessons_addcan`
--

CREATE TABLE `lessons_addcan` (
  `add_le_id` int(11) NOT NULL,
  `add_lemember` varchar(100) NOT NULL,
  `member_tel` varchar(100) NOT NULL,
  `member_mail` varchar(100) NOT NULL,
  `add_lename` varchar(100) NOT NULL,
  `lessons_time` date NOT NULL,
  `add_leprice` varchar(100) NOT NULL,
  `cancel_date` varchar(100) NOT NULL,
  `payment_lemethod` varchar(100) NOT NULL,
  `add_lepayment` varchar(100) NOT NULL,
  `lessons_coment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `lessons_list`
--

CREATE TABLE `lessons_list` (
  `lessons_id` int(11) NOT NULL,
  `lessons_category` varchar(100) NOT NULL,
  `lessons_name` varchar(100) NOT NULL,
  `lessons_price` varchar(100) NOT NULL,
  `course_status` varchar(100) NOT NULL,
  `regis_date` date NOT NULL,
  `lessons_info` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `lessons_list`
--

INSERT INTO `lessons_list` (`lessons_id`, `lessons_category`, `lessons_name`, `lessons_price`, `course_status`, `regis_date`, `lessons_info`) VALUES
(1, 'beginner', 'Milk France', '3,000', 'open', '2021-02-17', 'Lesson time: 2 hours'),
(2, 'beginner', 'Olive Cheese Bread ', '3,000', 'open', '2021-02-17', 'Lesson time: 2 hours'),
(3, 'beginner', 'Anko Bread', '3,000', 'open', '2021-02-17', '  Lesson time: 2 hours'),
(4, 'intermediate', 'Nut Campagne', '3,000', 'open', '2021-02-17', 'Lesson time: 2 hours         '),
(5, 'advanced', 'Cinnamon Roll', '3,000', 'open', '2021-02-17', 'Lesson time: 2 hours         ');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `a_id` int(11) NOT NULL,
  `a_fname` varchar(100) NOT NULL,
  `a_lname` varchar(100) NOT NULL,
  `a_password` varchar(100) NOT NULL,
  `a_age` varchar(100) NOT NULL,
  `a_bday` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`a_id`, `a_fname`, `a_lname`, `a_password`, `a_age`, `a_bday`) VALUES
(1, 'ai', 'ukisu', '0522', '27', '1993-05-22'),
(2, 'asami', 'ukisu', '0826', '30', '2021-02-05');

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `m_id` int(11) NOT NULL,
  `m_username` varchar(100) NOT NULL,
  `m_bday` date NOT NULL,
  `m_password` varchar(11) NOT NULL,
  `m_mail` varchar(100) NOT NULL,
  `m_tel` varchar(100) NOT NULL,
  `m_address` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`m_id`, `m_username`, `m_bday`, `m_password`, `m_mail`, `m_tel`, `m_address`) VALUES
(1, 'ukisu_ai', '2021-02-22', '0522', 'ai.r.churo@gmail.com', '00000010001', 'akita'),
(2, 'Aethelstan', '2021-02-26', 'admin', 'aethelstan@admin', '12345', 'Cebu City'),
(3, 'asami', '2021-02-26', 'admin', 'asami@gmail', '1111', 'Japan');

-- --------------------------------------------------------

--
-- Table structure for table `order_list`
--

CREATE TABLE `order_list` (
  `order_id` int(11) NOT NULL,
  `or_swname` varchar(100) DEFAULT NULL,
  `or_quantity` varchar(100) DEFAULT NULL,
  `or_subtotal` varchar(100) DEFAULT NULL,
  `or_total_amount` varchar(100) DEFAULT NULL,
  `or_payment` varchar(100) DEFAULT NULL,
  `or_address` varchar(100) DEFAULT NULL,
  `or_comment` varchar(100) DEFAULT NULL,
  `member_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `order_list`
--

INSERT INTO `order_list` (`order_id`, `or_swname`, `or_quantity`, `or_subtotal`, `or_total_amount`, `or_payment`, `or_address`, `or_comment`, `member_id`) VALUES
(1, 'Carrots cake(1piece)', '4', '1800', '3100', 'cash', 'Cebu City', NULL, 1),
(2, 'Raw Chocolate Cake(1piece)', '25', '11250', '12550', 'card', 'Akita,Japan', NULL, 1),
(3, 'Anko Butter Sand（３ pieces）', '1', '500', '1800', 'cash', 'Akita,Japan', NULL, 1),
(4, 'Energy Balls(5 pieces)', '5', '3500', '4800', 'card', 'Cebu City', NULL, 1),
(5, 'Raw Chocolate Cake(1piece)', '24', '10800', '12100', 'cash', 'Cebu City', NULL, 2),
(6, 'Carrots cake(1piece)', '1', '450', '1750', 'cash', 'Cebu City', NULL, 2),
(7, 'Energy Balls(5 pieces)', '100', '70000', '71300', 'card', 'Akita,Japan', NULL, 2),
(8, 'Carrots cake(1piece)', '1', '450', '1750', 'card', 'Akita,Japan', NULL, 3),
(9, 'Anko Butter Sand（３ pieces）', '2', '1000', '2300', 'card', 'Akita,Japan', NULL, 3);

-- --------------------------------------------------------

--
-- Table structure for table `reservation_list`
--

CREATE TABLE `reservation_list` (
  `rese_id` int(11) NOT NULL,
  `rese_lename` varchar(100) NOT NULL,
  `rese_day` date NOT NULL,
  `participation` date NOT NULL,
  `rese_username` varchar(100) NOT NULL,
  `rese_peonum` varchar(100) NOT NULL,
  `rese_price` varchar(100) NOT NULL,
  `rese_comment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `shop_info`
--

CREATE TABLE `shop_info` (
  `shop_id` int(11) NOT NULL,
  `shop_name` varchar(100) NOT NULL,
  `shop_type` varchar(100) NOT NULL,
  `shop_address` varchar(100) NOT NULL,
  `shop_tel` varchar(30) NOT NULL,
  `shop_mail` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sweets_addcan`
--

CREATE TABLE `sweets_addcan` (
  `add_id` int(11) NOT NULL,
  `add_member` varchar(100) NOT NULL,
  `add_swname` varchar(100) NOT NULL,
  `add_quantity` varchar(100) NOT NULL,
  `add_price` varchar(100) NOT NULL,
  `cancel_quantity` varchar(100) NOT NULL,
  `shipping_Method` varchar(100) NOT NULL,
  `add_swshipping` varchar(100) NOT NULL,
  `add_swpayment` varchar(100) NOT NULL,
  `sweets_coment` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `sweets_list`
--

CREATE TABLE `sweets_list` (
  `sw_id` int(11) NOT NULL,
  `sw_type` varchar(100) NOT NULL,
  `sw_name` varchar(100) NOT NULL,
  `sw_price` varchar(100) NOT NULL,
  `sw_ingre` varchar(100) NOT NULL,
  `sw_regiday` date NOT NULL,
  `sw_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `sweets_list`
--

INSERT INTO `sweets_list` (`sw_id`, `sw_type`, `sw_name`, `sw_price`, `sw_ingre`, `sw_regiday`, `sw_status`) VALUES
(1, 'cake', 'Carrots cake(1piece)', '450', 'carrots,rice flour,almond flour  ', '2021-02-17', 'onsale'),
(2, 'anko', 'Anko Butter Sand（３ pieces）', '500', 'azuki beet,sugar,coconut butter,rice flour,almond flour', '2021-02-18', 'onsale'),
(3, 'chocolate', 'Raw Chocolate Cake(1piece)', ' 450', 'chickpeas, cacao, coconut oil, cinnamon powder, dates', '2021-02-18', 'onsale'),
(4, 'other', 'Energy Balls(5 pieces)', ' 700', 'dates, nuts, coconut oil', '2021-02-18', 'onsale'),
(5, 'other', 'Fruit Granola(250g)', '1200', 'oats, sunflower seeds, raisins, walnuts, cashew nuts, coconut', '2021-02-18', 'onsale');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_info`
--
ALTER TABLE `cart_info`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `contact_form`
--
ALTER TABLE `contact_form`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `contact_list`
--
ALTER TABLE `contact_list`
  ADD PRIMARY KEY (`con_id`);

--
-- Indexes for table `lessons_addcan`
--
ALTER TABLE `lessons_addcan`
  ADD PRIMARY KEY (`add_le_id`);

--
-- Indexes for table `lessons_list`
--
ALTER TABLE `lessons_list`
  ADD PRIMARY KEY (`lessons_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`m_id`);

--
-- Indexes for table `order_list`
--
ALTER TABLE `order_list`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `reservation_list`
--
ALTER TABLE `reservation_list`
  ADD PRIMARY KEY (`rese_id`);

--
-- Indexes for table `shop_info`
--
ALTER TABLE `shop_info`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `sweets_addcan`
--
ALTER TABLE `sweets_addcan`
  ADD PRIMARY KEY (`add_id`);

--
-- Indexes for table `sweets_list`
--
ALTER TABLE `sweets_list`
  ADD PRIMARY KEY (`sw_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_info`
--
ALTER TABLE `cart_info`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_form`
--
ALTER TABLE `contact_form`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contact_list`
--
ALTER TABLE `contact_list`
  MODIFY `con_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons_addcan`
--
ALTER TABLE `lessons_addcan`
  MODIFY `add_le_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `lessons_list`
--
ALTER TABLE `lessons_list`
  MODIFY `lessons_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `m_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `order_list`
--
ALTER TABLE `order_list`
  MODIFY `order_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservation_list`
--
ALTER TABLE `reservation_list`
  MODIFY `rese_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_info`
--
ALTER TABLE `shop_info`
  MODIFY `shop_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sweets_addcan`
--
ALTER TABLE `sweets_addcan`
  MODIFY `add_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sweets_list`
--
ALTER TABLE `sweets_list`
  MODIFY `sw_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
