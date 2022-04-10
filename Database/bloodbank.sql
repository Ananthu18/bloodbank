-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 26, 2020 at 06:00 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bloodbank`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_donation_camp`
--

CREATE TABLE `blood_donation_camp` (
  `C_Id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Address for Camp` varchar(50) NOT NULL,
  `City` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_donation_camp`
--

INSERT INTO `blood_donation_camp` (`C_Id`, `Name`, `Address for Camp`, `City`, `Date`, `Time`) VALUES
(1, 'Admin', 'T Nagar,Bhandra Street', 'Mumbai', '2020-10-01', '08:00:00'),
(3, 'vcscvs', 'dfsdbvsdhv', 'vssv', '2020-10-14', '17:17:00'),
(4, 'vcscvs', 'dfsdbvsdhv', 'vssv', '2020-10-01', '17:17:00'),
(5, 'vcscvs', 'dfsdbvsdhv', 'vssv', '2020-10-01', '17:17:00'),
(6, 'aa', 'aa', 'aa', '2020-10-29', '08:35:00'),
(7, 'Blood donation', 'dsd', 'dad', '2020-10-16', '09:42:00');

-- --------------------------------------------------------

--
-- Table structure for table `blood_table`
--

CREATE TABLE `blood_table` (
  `B_id` int(5) NOT NULL,
  `Blood Group` varchar(5) NOT NULL,
  `ph` float NOT NULL,
  `Quantity in Units` float NOT NULL,
  `Expiry date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `blood_table`
--

INSERT INTO `blood_table` (`B_id`, `Blood Group`, `ph`, `Quantity in Units`, `Expiry date`) VALUES
(1, 'A+', 7.42, 24, '2020-11-26'),
(2, 'A-', 7.42, 18, '2020-12-09'),
(3, 'B+', 7.43, 14, '2020-10-31'),
(4, 'B-', 7.41, 30, '2020-12-23'),
(5, 'O+', 7.42, 42, '2020-11-25'),
(6, 'O-', 7.45, 22, '2021-01-15'),
(7, 'AB+', 7.44, 37, '2020-11-30'),
(8, 'AB-', 7.42, 15, '2020-10-20');

-- --------------------------------------------------------

--
-- Table structure for table `donor_table`
--

CREATE TABLE `donor_table` (
  `d_id` int(11) NOT NULL,
  `First_Name` varchar(50) NOT NULL,
  `Last_Name` varchar(50) NOT NULL,
  `DOB` date NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `Blood_grp` varchar(10) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `City` varchar(10) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Suitable_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donor_table`
--

INSERT INTO `donor_table` (`d_id`, `First_Name`, `Last_Name`, `DOB`, `Gender`, `Blood_grp`, `Address`, `City`, `Mobile`, `Suitable_date`) VALUES
(1, 'Shane ', 'V Jose', '2001-06-22', 'male', 'A+', 'A-10 ,DWRA', 'Hyderabad', '9446313812', '2020-11-12'),
(2, 'Ananthu', 'Murali', '2001-08-26', 'male', 'B+', '6-C,Skyline Apartments', 'Delhi', '9876543210', '2020-11-20'),
(3, 'Abiram', 'Ajith', '2001-06-08', 'male', 'O+', '1-C Marriot Apartment', 'Chennai', '9193943211', '2020-10-18'),
(4, 'Leo ', 'Anil', '2001-01-12', 'male', 'O-', '1-F,Marriot Apartments', 'Mumbai', '9654236790', '2020-10-31'),
(5, 'Kevin', 'Shaju', '2001-01-10', 'male', 'AB+', '3-D,Skyline Apartments', 'Banglore', '9446313811', '2020-10-31'),
(6, 'Gracy', 'Annie', '1999-11-08', 'female', 'A+', 'C-8,Wexco Apartments', 'Hyderabad', '9446315877', '2020-12-23'),
(10, 'Mary', 'Abraham', '1999-02-20', 'female', 'B-', '8-D,M C Apartments', 'Chennai', '9911456781', '2020-12-12'),
(11, 'Karthik', 'K', '2001-12-24', 'male', 'AB-', '8-D,N D Apartments', 'Delhi', '9911451281', '2020-12-05'),
(18, 'Latha', 'Samson', '2000-09-23', 'female', 'A+', 'S Nagar,Kochi', 'Banglore', '8462319752', '2020-10-22'),
(19, 'Deepika', 'Singh', '1989-01-14', 'female', 'A+', 'G Nagar', 'Mumbai', '7461895234', '2020-11-18'),
(20, 'Raju', 'Takur', '2000-06-02', 'male', 'A+', 'Tea Naagar', 'Palakkad', '7934628931', '2020-10-18'),
(21, 'dzfdf', 'vssgvg', '2001-06-23', 'male', 'B+', 'dd', 'dddd', '6789345218', '2020-10-24'),
(22, 'Ram', 'sharan', '2000-08-26', 'male', 'A+', 'ddd', 'dd', '9995546769', '2020-10-17'),
(23, 'aa', 'aa', '2001-08-26', 'male', 'A+', 'a', 'a', '9995546769', '2020-10-24');

-- --------------------------------------------------------

--
-- Table structure for table `transfer_table`
--

CREATE TABLE `transfer_table` (
  `B_id` int(11) NOT NULL,
  `Blood_bank` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transfer_table`
--

INSERT INTO `transfer_table` (`B_id`, `Blood_bank`, `Email`) VALUES
(1, 'Blood Cross Society', 'iamananthu18@gmail.com'),
(2, 'The Blood Association', 'ananthumurali2014@gmail.com'),
(3, 'Athar Blood Bank', 'shanejose.v2019@vitstudent.ac.in');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `u_id` int(11) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Ph_no` varchar(10) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`u_id`, `Name`, `Email`, `Ph_no`, `Username`, `Password`) VALUES
(1, 'Shane', 'ananthumurali2014@gmail.com', '8627014567', 'shanev', 'abc123'),
(5, 'Ananthu', 'iamananthu18@gmail.com', '7890654321', 'ananthu', 'abc123'),
(12, 'hari', 'abc@gmail.com', '9995546769', 'abc', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_donation_camp`
--
ALTER TABLE `blood_donation_camp`
  ADD PRIMARY KEY (`C_Id`);

--
-- Indexes for table `blood_table`
--
ALTER TABLE `blood_table`
  ADD PRIMARY KEY (`B_id`);

--
-- Indexes for table `donor_table`
--
ALTER TABLE `donor_table`
  ADD PRIMARY KEY (`d_id`);

--
-- Indexes for table `transfer_table`
--
ALTER TABLE `transfer_table`
  ADD PRIMARY KEY (`B_id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blood_donation_camp`
--
ALTER TABLE `blood_donation_camp`
  MODIFY `C_Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `blood_table`
--
ALTER TABLE `blood_table`
  MODIFY `B_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `donor_table`
--
ALTER TABLE `donor_table`
  MODIFY `d_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `transfer_table`
--
ALTER TABLE `transfer_table`
  MODIFY `B_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
