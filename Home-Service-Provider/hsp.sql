-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2021 at 04:03 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `homeservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `Name` varchar(30) DEFAULT NULL,
  `Mobile_Number` bigint(10) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`Name`, `Mobile_Number`, `Password`) VALUES
('Admin', 6376981347, 'admin@1234');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE `city` (
  `id` int(11) NOT NULL,
  `Name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`id`, `Name`) VALUES
(1, 'vadodara '),
(2, 'jaipur '),
(3, 'ahmedabad'),
(4, 'jalore');

-- --------------------------------------------------------

--
-- Table structure for table `complain`
--

CREATE TABLE `complain` (
  `id` int(10) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Mobile_Number` bigint(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Status` int(10) DEFAULT NULL,
  `User_id` int(10) DEFAULT NULL,
  `Provider_id` int(10) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Discription` varchar(100) DEFAULT NULL,
  `Service` varchar(30) DEFAULT NULL,
  `Sub_Service` varchar(30) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `Date_Service` date DEFAULT NULL,
  `price` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complain`
--

INSERT INTO `complain` (`id`, `Name`, `Mobile_Number`, `Email`, `Status`, `User_id`, `Provider_id`, `Address`, `Discription`, `Service`, `Sub_Service`, `City`, `Date_Service`, `price`) VALUES
(5, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 3, 6, 1, 'Gf 39, Rajpath Complex Opp. Essar Petrol Pump, Vasna - Bhayli Main Rd, nr. Bright Day School, Vadoda', 'ok', 'electrician', 'Switch & Socket', 'vadodara ', '2021-03-07', 10),
(6, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 1, 6, 1, 'Gf 39, Rajpath Complex Opp. Essar Petrol Pump, Vasna - Bhayli Main Rd, nr. Bright Day School, Vadoda', 'we', 'electrician', 'Switch & Socket', 'vadodara ', '2021-03-14', 0),
(7, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 1, 6, 1, 'Gf 39, Rajpath Complex Opp. Essar Petrol Pump, Vasna - Bhayli Main Rd, nr. Bright Day School, Vadoda', 'nics', 'electrician', 'Fan', 'vadodara ', '2021-03-07', 0),
(8, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 3, 6, 1, '39 Rajpath Complex Opp Essar Petrol Pump', 'ok', 'electrician', 'Switch & Socket', 'vadodara ', '2021-03-14', 0),
(9, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 3, 6, 1, 'Gf 39, Rajpath Complex Opp. Essar Petrol Pump, Vasna - Bhayli Main Rd, nr. Bright Day School, Vadoda', 'ok', 'electrician', 'Switch & Socket', 'vadodara ', '2021-03-17', 1),
(10, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 1, 6, 1, 'Gf 39, Rajpath Complex Opp. Essar Petrol Pump, Vasna - Bhayli Main Rd, nr. Bright Day School, Vadoda', 'ok', 'electrician', 'Switch & Socket', 'vadodara ', '2021-03-17', 0),
(11, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 3, 6, 1, 'Gf 39, Rajpath Complex Opp. Essar Petrol Pump, Vasna - Bhayli Main Rd, nr. Bright Day School, Vadoda', 'ok', 'electrician', 'Switch & Socket', 'vadodara ', '2021-03-17', 10),
(12, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 3, 6, 1, 'Gf 39, Rajpath Complex Opp. Essar Petrol Pump, Vasna - Bhayli Main Rd, nr. Bright Day School, Vadoda', 'ok', 'electrician', 'Switch & Socket', 'vadodara ', '2021-03-17', 30),
(13, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 2, 6, 1, 'Gf 39, Rajpath Complex Opp. Essar Petrol Pump, Vasna - Bhayli Main Rd, nr. Bright Day School, Vadoda', 'ok', 'electrician', 'Switch & Socket', 'vadodara ', '2021-03-17', 100),
(14, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 3, 6, 1, 'Gf 39, Rajpath Complex Opp. Essar Petrol Pump, Vasna - Bhayli Main Rd, nr. Bright Day School, Vadoda', 'ok', 'electrician', 'Switch & Socket', 'vadodara ', '2021-03-17', 10),
(15, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 3, 6, 1, 'Gf 39, Rajpath Complex Opp. Essar Petrol Pump, Vasna - Bhayli Main Rd, nr. Bright Day School, Vadoda', 'ok', 'electrician', 'Switch & Socket', 'vadodara ', '2021-03-17', 50),
(16, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 3, 6, 1, 'Gf 39, Rajpath Complex Opp. Essar Petrol Pump, Vasna - Bhayli Main Rd, nr. Bright Day School, Vadoda', 'ok', 'electrician', 'Switch & Socket', 'vadodara ', '2021-03-17', 20),
(17, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 4, 6, 1, '39 Rajpath Complex Opp Essar Petrol Pump', 'eefn. sgrkj zgsekf', 'electrician', 'Fan', 'vadodara ', '2021-03-12', 0),
(18, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 4, 6, 1, 'hjjghcbds', 'dhgvfs', 'electrician', 'Fan', 'vadodara ', '2021-03-20', 0),
(20, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 3, 6, 1, 'fejkhj', 'ewfdefcv', 'electrician', 'Switch & Socket', 'vadodara ', '2021-03-18', 10),
(21, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 3, 6, 2, 'zfdbg', 'sadfvbnvc', 'plumber', 'Sink Hose', 'jaipur ', '2018-05-09', 20),
(22, 'Vibhuti Patel', 8511233957, 'Vibhu219.vp@gmail.com', 3, 12, 1, 'c-104,', 'vande ', 'electrician', 'Drill & Hang', 'vadodara ', '2021-03-16', 120),
(23, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 3, 6, 1, '39 Rajpath Complex Opp Essar Petrol Pump', 'qwerty', 'electrician', 'Fan', 'vadodara ', '2021-03-20', 500),
(24, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 3, 6, 1, '39 Rajpath Complex Opp Essar Petrol Pump', 'ff', 'electrician', 'Fan', 'vadodara ', '2021-03-12', 500),
(25, 'Vibhuti Patel', 8511233958, 'Vibhu219.vp@gmail.com', 3, 13, 4, 'primi', 'ok', 'Ac Repair', 'ac', 'vadodara ', '2021-03-25', 100);

-- --------------------------------------------------------

--
-- Table structure for table `feedback_system`
--

CREATE TABLE `feedback_system` (
  `id` int(10) NOT NULL,
  `User_id` int(10) DEFAULT NULL,
  `Description` varchar(100) DEFAULT NULL,
  `Provider_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback_system`
--

INSERT INTO `feedback_system` (`id`, `User_id`, `Description`, `Provider_id`) VALUES
(3, 7, 'nice', 0),
(4, 7, 'ur', 0),
(5, 11, 'DFhdF', 0),
(6, 6, 'iwelf', 0),
(7, 7, 'not good', 0),
(8, 0, 'best website', 1),
(9, 0, 'UTTAM', 1),
(10, NULL, 'hello', 1),
(11, 6, 'chirag', NULL),
(12, NULL, 'uttam', 1),
(13, 13, 'vibhuti', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `payment_user`
--

CREATE TABLE `payment_user` (
  `id` int(10) NOT NULL,
  `Pay` int(10) DEFAULT NULL,
  `User_id` int(10) DEFAULT NULL,
  `Date_Payment` date DEFAULT NULL,
  `Service_id` int(10) DEFAULT NULL,
  `Provider_id` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment_user`
--

INSERT INTO `payment_user` (`id`, `Pay`, `User_id`, `Date_Payment`, `Service_id`, `Provider_id`) VALUES
(1, 20, 6, '0000-00-00', 16, 1),
(2, 30, 6, '0000-00-00', 12, 1),
(3, 120, 12, '0000-00-00', 22, 1),
(4, 0, 12, '0000-00-00', 0, 0),
(5, 0, 12, '0000-00-00', 0, 0),
(6, 50, 6, '0000-00-00', 15, 1),
(7, 10, 6, '0000-00-00', 11, 1),
(8, 10, 6, '2021-03-18', 11, 1),
(9, 10, 6, '2021-03-18', 14, 1),
(10, 0, 6, '2021-03-20', 0, 0),
(11, 500, 6, '2021-03-22', 24, 1),
(12, 100, 13, '2021-03-22', 25, 4),
(13, 500, 6, '2021-03-24', 23, 1);

-- --------------------------------------------------------

--
-- Table structure for table `provider_data`
--

CREATE TABLE `provider_data` (
  `id` int(10) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Mobile_Number` bigint(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Address` varchar(100) DEFAULT NULL,
  `Status` int(10) DEFAULT NULL,
  `Technician` varchar(30) DEFAULT NULL,
  `City` varchar(30) DEFAULT NULL,
  `key_id` varchar(50) DEFAULT NULL,
  `key_secret` varchar(50) DEFAULT NULL,
  `Subscriptions_date` date DEFAULT NULL,
  `pro_b` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `provider_data`
--

INSERT INTO `provider_data` (`id`, `Name`, `Mobile_Number`, `Email`, `Password`, `Address`, `Status`, `Technician`, `City`, `key_id`, `key_secret`, `Subscriptions_date`, `pro_b`) VALUES
(1, 'ankit nath', 6376981347, 'uttamgoswami422@gmail.com', 'uttams35', '40 raj', 1, 'electrician', 'vadodara ', 'rzp_test_p1GHuWKHu533FF', 'qfrlTqLPo9Px3O41LZHg7Iad', '2021-03-22', 0),
(2, 'Uttam nath', 637698134, 'tecmanic@gmail.com', 'goswami', '39 Rajpath Complex Opp Essar Petrol Pump', 1, 'plumber', 'jaipur ', 'rzp_test_p1GHuWKHu533FF', 'qfrlTqLPo9Px3O41LZHg7Iad', '2021-03-22', 0),
(3, 'Vikram nath', 8488045995, 'Vibhu219.vp@gmail.com', 'vikram35', '39 Rajpath Complex Opp Essar Petrol Pump', 1, 'plumber', 'vadodara ', 'rzp_test_p1GHuWKHu533FF', 'qfrlTqLPo9Px3O41LZHg7Iad', '2021-03-22', 0),
(4, 'Vikram nath', 1234567890, 'Vibhu219.vp@gmail.com', 'uttams35', '39 Rajpath Complex Opp Essar Petrol Pump', 0, 'Ac Repair', 'vadodara ', 'rzp_test_p1GHuWKHu533FF', 'qfrlTqLPo9Px3O41LZHg7Iad', NULL, 0),
(5, 'Vikram nath', 987654321, 'Vibhu219.vp@gmail.com', 'uttams35', '39 Rajpath Complex Opp Essar Petrol Pump', 0, 'Ac Repair', 'vadodara ', 'rzp_test_p1GHuWKHu533FF', 'qfrlTqLPo9Px3O41LZHg7Iad', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `Name` varchar(30) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`Name`, `id`) VALUES
('plumber', 11),
('electrician', 12),
('Ac Repair', 16),
('ankit', 17);

-- --------------------------------------------------------

--
-- Table structure for table `subscriptions`
--

CREATE TABLE `subscriptions` (
  `id` int(10) NOT NULL,
  `Provider_id` int(10) NOT NULL,
  `Pay` int(10) NOT NULL,
  `Date_pay` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subscriptions`
--

INSERT INTO `subscriptions` (`id`, `Provider_id`, `Pay`, `Date_pay`) VALUES
(1, 1, 5000, '2021-03-20'),
(2, 1, 5000, '2021-03-20'),
(3, 1, 5000, '2021-03-20'),
(4, 1, 5000, '2021-03-20'),
(5, 1, 5000, '2021-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `sub_service`
--

CREATE TABLE `sub_service` (
  `id` int(10) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Service` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sub_service`
--

INSERT INTO `sub_service` (`id`, `Name`, `Service`) VALUES
(2, 'Switch & Socket', 'Electrician'),
(3, 'Lighting', 'Electrician'),
(4, 'wiring', 'Electrician'),
(5, 'MCB & RCCB/ELCB', 'Electrician'),
(6, 'Drill & Hang', 'Electrician'),
(7, 'Geyder', 'Electrician'),
(8, 'Inverter', 'Electrician'),
(10, 'Sink Hose', 'Plumber'),
(11, ' Drill and Hole', 'Plumber'),
(12, 'Tap and Shower Filter', 'Plumber'),
(16, 'ac', 'Ac Repair'),
(17, 'Fan', 'electrician'),
(18, 'an', 'ankit');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id` int(10) NOT NULL,
  `Name` varchar(30) DEFAULT NULL,
  `Mobile_Number` bigint(10) DEFAULT NULL,
  `Email` varchar(30) DEFAULT NULL,
  `Password` varchar(30) DEFAULT NULL,
  `Account` int(10) DEFAULT NULL,
  `pro_b` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id`, `Name`, `Mobile_Number`, `Email`, `Password`, `Account`, `pro_b`) VALUES
(6, 'Uttam nath', 6376981347, 'uttamgoswamis35@gmail.com', 'uttams35', 0, 0),
(7, 'admin@un', 987654321, 'admin@gmail.com', 'admin@un', 0, 0),
(11, 'Uttam nath', 9929311040, 'uttamgoswami422@gmail.com', 'goswamis35', 0, 0),
(12, 'Vibhuti Patel', 8511233957, 'Vibhu219.vp@gmail.com', 'VIbhu@@', 0, 0),
(13, 'Vibhuti Patel', 8511233958, 'Vibhu219.vp@gmail.com', 'abcd12345', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `city`
--
ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `complain`
--
ALTER TABLE `complain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback_system`
--
ALTER TABLE `feedback_system`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment_user`
--
ALTER TABLE `payment_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provider_data`
--
ALTER TABLE `provider_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subscriptions`
--
ALTER TABLE `subscriptions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sub_service`
--
ALTER TABLE `sub_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `city`
--
ALTER TABLE `city`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `complain`
--
ALTER TABLE `complain`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `feedback_system`
--
ALTER TABLE `feedback_system`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `payment_user`
--
ALTER TABLE `payment_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `provider_data`
--
ALTER TABLE `provider_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `subscriptions`
--
ALTER TABLE `subscriptions`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sub_service`
--
ALTER TABLE `sub_service`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
