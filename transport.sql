-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 08, 2023 at 09:40 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `add_vehical`
--

CREATE TABLE `add_vehical` (
  `vid` int(10) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `cmp` varchar(50) NOT NULL,
  `vno` varchar(20) NOT NULL,
  `chassi_no` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `capacity` varchar(30) NOT NULL,
  `rc_book` varchar(80) NOT NULL,
  `r_ex` date NOT NULL,
  `licence` varchar(80) NOT NULL,
  `li_ex` date NOT NULL,
  `insuran` varchar(80) NOT NULL,
  `in_ex` date NOT NULL,
  `puc` varchar(80) NOT NULL,
  `puc_ex` date NOT NULL,
  `status` int(10) NOT NULL,
  `rcnumber` varchar(30) NOT NULL,
  `lienceNumber` varchar(30) NOT NULL,
  `insuNumber` varchar(30) NOT NULL,
  `pucnumber` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `add_vehical`
--

INSERT INTO `add_vehical` (`vid`, `tname`, `cmp`, `vno`, `chassi_no`, `date`, `capacity`, `rc_book`, `r_ex`, `licence`, `li_ex`, `insuran`, `in_ex`, `puc`, `puc_ex`, `status`, `rcnumber`, `lienceNumber`, `insuNumber`, `pucnumber`) VALUES
(1, 'Truck1', 'transport', 'MH04FP1629', '002515654AFLF', '2023-02-26', '1000KG', './image/IMG20221009112213.jpg', '2023-07-13', './image/IMG20221009112213.jpg', '2023-06-22', './image/IMG20221009112213.jpg', '2024-08-01', './image/IMG20221009112213.jpg', '2023-07-26', 0, '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'eskay@gmail.com', 'eskay@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `mobile1` varchar(12) NOT NULL,
  `mobile2` varchar(12) NOT NULL,
  `adds` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `adhar` varchar(20) NOT NULL,
  `adhar_img` varchar(80) NOT NULL,
  `lic_no` varchar(20) NOT NULL,
  `lic` varchar(80) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `fname`, `lname`, `mobile1`, `mobile2`, `adds`, `date`, `adhar`, `adhar_img`, `lic_no`, `lic`, `status`) VALUES
(1, 'Akash', 'Jogani', '9742020863', '6362761418', 'main road sambra belgaum', '2023-02-26', '461290579944', './doc/IMG_0628.jpg', 'DFAF8520', './doc/IMG20221009112213.jpg', 'driver'),
(2, 'Sagar', 'Shinde', '6362761418', '6362761418', 'macche', '2023-02-26', '461290579944', './doc/IMG_0628.jpg', 'DFAF8520', './doc/IMG20221009112213.jpg', 'cleaner');

-- --------------------------------------------------------

--
-- Table structure for table `expenses`
--

CREATE TABLE `expenses` (
  `e_id` int(10) NOT NULL,
  `id` int(20) NOT NULL,
  `givenName` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `amount` varchar(10) NOT NULL,
  `payment` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `expenses`
--

INSERT INTO `expenses` (`e_id`, `id`, `givenName`, `date`, `amount`, `payment`) VALUES
(1, 1, 'Sagar Shinde', '0000-00-00', '50000', ''),
(2, 1, 'Suraj', '0000-00-00', '30000', ''),
(3, 1, 'Mahesh', '0000-00-00', '100000', ''),
(4, 1, 'vinayak', '0000-00-00', '50000', '');

-- --------------------------------------------------------

--
-- Table structure for table `fright`
--

CREATE TABLE `fright` (
  `fid` int(10) NOT NULL,
  `id` int(11) NOT NULL,
  `dis_crip` varchar(30) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fright`
--

INSERT INTO `fright` (`fid`, `id`, `dis_crip`, `amount`) VALUES
(1, 1, '1st Amount', 100000),
(2, 1, '2nd Amount', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `maintain`
--

CREATE TABLE `maintain` (
  `id` int(10) NOT NULL,
  `tno` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `Total` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maintain`
--

INSERT INTO `maintain` (`id`, `tno`, `date`, `Total`) VALUES
(1, 'MH04FP1629', '2023-03-29', 0),
(2, 'MH04FP1629', '2023-03-29', 0),
(3, 'MH04FP1629', '2023-03-29', 0),
(4, 'MH04FP1629', '2023-03-31', 0);

-- --------------------------------------------------------

--
-- Table structure for table `maintain_amount`
--

CREATE TABLE `maintain_amount` (
  `mid` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `dis_crip` varchar(100) NOT NULL,
  `amount` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `maintain_amount`
--

INSERT INTO `maintain_amount` (`mid`, `id`, `dis_crip`, `amount`) VALUES
(2, 1, 'Engine Oil', 5000),
(3, 1, 'Break', 1500),
(5, 2, 'top ', 6000),
(6, 2, 'tyre', 3000),
(7, 3, 'tyre', 6000),
(8, 3, 'oil', 5000),
(9, 4, 'Break', 300);

-- --------------------------------------------------------

--
-- Table structure for table `places`
--

CREATE TABLE `places` (
  `pid` int(10) NOT NULL,
  `id` int(10) NOT NULL,
  `fromPlace` varchar(30) NOT NULL,
  `toPlace` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `places`
--

INSERT INTO `places` (`pid`, `id`, `fromPlace`, `toPlace`) VALUES
(1, 1, 'Belgaum', 'Dharwad'),
(2, 1, 'Dharwad', 'Hubali'),
(3, 1, 'Hubali', 'Banglore'),
(4, 1, 'Banglore', 'Indore');

-- --------------------------------------------------------

--
-- Table structure for table `tripsheet`
--

CREATE TABLE `tripsheet` (
  `id` int(10) NOT NULL,
  `truc` varchar(20) NOT NULL,
  `drvr` varchar(30) NOT NULL,
  `fromdate` date NOT NULL,
  `todate` date NOT NULL,
  `kmfrom` varchar(20) NOT NULL,
  `kmto` varchar(20) NOT NULL,
  `totalkm` double NOT NULL,
  `disele` varchar(30) NOT NULL,
  `average` varchar(30) NOT NULL,
  `des_crip` varchar(50) NOT NULL,
  `amount` varchar(30) NOT NULL,
  `payment_mode` varchar(20) NOT NULL,
  `received_name` varchar(30) NOT NULL,
  `balance` varchar(30) NOT NULL,
  `date` date NOT NULL,
  `expenseDate` date NOT NULL,
  `expense_payment` varchar(10) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tripsheet`
--

INSERT INTO `tripsheet` (`id`, `truc`, `drvr`, `fromdate`, `todate`, `kmfrom`, `kmto`, `totalkm`, `disele`, `average`, `des_crip`, `amount`, `payment_mode`, `received_name`, `balance`, `date`, `expenseDate`, `expense_payment`, `status`) VALUES
(1, 'MH04FP1629', 'Akash Jogani', '2023-03-27', '2023-03-31', '1600', '2500', 900, '30', '30', '', '', 'cash', 'Akash Jogani', '80000', '2023-03-31', '2023-03-27', 'cash', 0);

-- --------------------------------------------------------

--
-- Table structure for table `trip_data`
--

CREATE TABLE `trip_data` (
  `id` int(10) NOT NULL,
  `tno` varchar(30) NOT NULL,
  `tdriver` varchar(30) NOT NULL,
  `dateFrom` date NOT NULL,
  `dateTo` date NOT NULL,
  `kmFrom` varchar(30) NOT NULL,
  `kmTo` varchar(30) NOT NULL,
  `Deisel` varchar(30) NOT NULL,
  `vAvg` varchar(30) NOT NULL,
  `dis` varchar(100) NOT NULL,
  `charges` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `truck_asign`
--

CREATE TABLE `truck_asign` (
  `id` int(10) NOT NULL,
  `tname` varchar(30) NOT NULL,
  `tno` varchar(30) NOT NULL,
  `driver` int(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `truck_asign`
--

INSERT INTO `truck_asign` (`id`, `tname`, `tno`, `driver`, `date`) VALUES
(2, 'Truck1', 'MH04FP1629', 1, '2023-03-12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `add_vehical`
--
ALTER TABLE `add_vehical`
  ADD PRIMARY KEY (`vid`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `expenses`
--
ALTER TABLE `expenses`
  ADD PRIMARY KEY (`e_id`);

--
-- Indexes for table `fright`
--
ALTER TABLE `fright`
  ADD PRIMARY KEY (`fid`);

--
-- Indexes for table `maintain`
--
ALTER TABLE `maintain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maintain_amount`
--
ALTER TABLE `maintain_amount`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `places`
--
ALTER TABLE `places`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `tripsheet`
--
ALTER TABLE `tripsheet`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trip_data`
--
ALTER TABLE `trip_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `truck_asign`
--
ALTER TABLE `truck_asign`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `add_vehical`
--
ALTER TABLE `add_vehical`
  MODIFY `vid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `expenses`
--
ALTER TABLE `expenses`
  MODIFY `e_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fright`
--
ALTER TABLE `fright`
  MODIFY `fid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `maintain`
--
ALTER TABLE `maintain`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `maintain_amount`
--
ALTER TABLE `maintain_amount`
  MODIFY `mid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `places`
--
ALTER TABLE `places`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tripsheet`
--
ALTER TABLE `tripsheet`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `trip_data`
--
ALTER TABLE `trip_data`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `truck_asign`
--
ALTER TABLE `truck_asign`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
