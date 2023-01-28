-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 01, 2022 at 03:10 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wapex`
--

-- --------------------------------------------------------

--
-- Table structure for table `std`
--

CREATE TABLE `std` (
  `ssr` int(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sfname` varchar(255) NOT NULL,
  `sclass` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `sdob` varchar(255) NOT NULL,
  `smail` varchar(255) NOT NULL,
  `scnic` varchar(255) NOT NULL,
  `spnum` varchar(255) NOT NULL,
  `sgen` varchar(255) NOT NULL,
  `saddress` varchar(255) NOT NULL,
  `spic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std`
--

INSERT INTO `std` (`ssr`, `sname`, `sfname`, `sclass`, `sid`, `sdob`, `smail`, `scnic`, `spnum`, `sgen`, `saddress`, `spic`) VALUES
(66, 'Mirza', 'Hisham', 'BSCS', '21', '1998-06-17', 'hisham@gmail.com', '340218274781', '03471739472', 'Male', 'Faisalabad', '1.jpg'),
(67, 'Abubakar', 'Junaid', 'BSCS', '22', '1999-07-09', 'abubakar@gmail.com', '3746201846299', '03471739872', 'Male', 'Lahore', '2.jpg'),
(68, 'Saad', 'Ali', 'BSCS', '23', '2000-08-12', 'saad@gmali.com', '3746209996284', '03001739872', 'Male', 'Sahiwal', '3.jpg'),
(69, 'Tariq', 'Maqsood', 'BS Physics', '24', '1998-12-08', 'tariq@yahoo.com', '3746201846284', '03001739882', 'Male', 'Karachi', '4.jpg'),
(70, 'Abubakar', 'Raza', 'BSCS', '25', '2005-09-08', 'abubakar009@gmail.com', '35403827477281', '03101739872', 'Male', 'Faisalabad', '5.jpeg'),
(71, 'Minahid', 'Akram', 'BS Physics', '26', '1999-09-30', 'minahil@gmail.com', '3746201846994', '03001734132', 'Female', 'Faisalabad', '6.jpg'),
(72, 'Sobia', 'Akram', 'BSCS', '27', '2008-09-20', 'sobia@gmail.com', '3746201846284', '03011739872', 'Female', 'Lahore', '7.jpg'),
(73, 'Mirza', 'Hanan', 'BS Chemistry', '28', '1998-09-08', 'hanan@gmail.com', '3540382747996', '03001739142', 'Male', 'Lahore', '8.jpg'),
(74, 'Kamran', 'Ali', 'BSCS', '29', '1999-09-04', 'kamran@gmail.com', '3540382747982', '03211940994', 'Male', 'Sahiwal', '9.jpg'),
(75, 'Zubair', 'Ali', 'BSCS', '30', '1998-11-25', 'zubair@gmail.com', '3746201843284', '03001739898', 'Male', 'Shahkot', '10.jpg'),
(76, 'Saad', 'Ali', 'BS Physics', '31', '2000-01-21', 'saad@gmali.com', '3540382747764', '03211760274', 'Male', 'Nankana Sahib', '11.jpg'),
(77, 'Shaan', 'Ali', 'BSCS', '32', '1998-02-22', 'shaan21@gmail.com', '3746201846998', '03421739872', 'Male', 'Faisalabad', '12.jpg'),
(78, 'Fareed', 'Ali', 'BS Physics', '33', '1999-11-22', 'fareed@gmail.com', '3746201846554', '03111940274', 'Male', 'Lahore', '13.jpg'),
(79, 'Kanwal', 'Aftab', 'BSCS', '34', '1998-08-16', 'kanwal@gmail.com', '340218274991', '03001739832', 'Female', 'Faisalabad', '14.jpg'),
(80, 'Mirza', 'Tanveer', 'BS Physics', '35', '1999-06-09', 'tanveer@gmail.com', '3540382747612', '03411739872', 'Male', 'Lahore', '16.jpg'),
(81, 'Hina', 'Shaheen', 'BSCS', '36', '1999-03-05', 'hina@gmail.com', '3746201833284', '03171739872', 'Female', 'Faisalabad', '15.jpg'),
(82, 'Mirza', 'yaseen', 'BS Chemistry', '37', '2000-09-21', 'yaseen@yahoo.com', '3746201849984', '03111940274', 'Male', 'Sahiwal', '19.jpg'),
(83, 'Minahil', 'Akram', 'BSCS', '38', '1998-02-21', 'minahil221@gmail.com', '3542201846284', '03011940274', 'Female', 'Lahore', '17.jpg'),
(84, 'Tariq', 'Ali', 'BS Physics', '39', '1998-09-19', 'tariq21@gmail.com', '3746201899284', '03111000274', 'Male', 'Sahiwal', '20.jpeg'),
(85, 'Amina', 'Aftab', 'BSCS', '40', '1999-09-30', 'amina@gmail.com', '3746201840084', '0300170032', 'Female', 'Lahore', '21.jpg'),
(86, 'Nimra', 'Ali', 'BS Physics', '41', '1999-09-19', 'nimra@gmail.com', '3746201982284', '03334443823', 'Female', 'Shahkot', '22.jpg'),
(87, 'Laiba', 'Shakeel', 'BSCS', '42', '1999-08-17', 'laiba@gmail.com', '374620199984', '03127043823', 'Female', 'Faisalabad', '23.jpg'),
(88, 'Ali', 'Raza', 'BSCS', '43', '2000-03-09', 'aliraza@gmail.com', '340218270081', '03211940094', 'Male', 'Lahore', '24.jpg'),
(89, 'Asif', 'Ali', 'BS Physics', '44', '2000-08-21', 'asif@gmail.com', '340218270091', '03327043823', 'Male', 'Lahore', '28.jpeg'),
(90, 'Sehar', 'Hayat', 'BSCS', '45', '1998-02-20', 'seharhayat@gmail.com', '374620199884', '03337040093', 'Female', 'Sahiwal', '26.jpg'),
(91, 'Jameela', 'Hayat', 'BS Physics', '46', '1999-09-22', 'jameelahayat@yahoo.com', '3402182799891', '0311194998', 'Female', 'Lahore', '29.jpg'),
(92, 'javeria', 'Akram', 'BS Physics', '47', '1999-11-22', 'javeria@gmail.com', '3746201846777', '03337049983', 'Female', 'Faisalabad', '30.jpg'),
(93, 'Laraib', 'Ali', 'BSCS', '48', '2000-02-11', 'laraib@gmail.com', '3746201846222', '03211945142', 'Female', 'Shahkot', '31.jpg'),
(94, 'Aqsa', 'Ali', 'BSCS', '49', '2000-11-01', 'aqsa@gmail.com', '3746201846284', '03211940274', 'Female', 'Lahore', '6.jpg'),
(95, 'Sonia', 'Ali', 'BS Chemistry', '50', '1999-05-21', 'sonia@yahoo.com', '3746201846284', '03211940994', 'Female', 'Faisalabad', '7.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `std2`
--

CREATE TABLE `std2` (
  `ssr` int(255) NOT NULL,
  `sname` varchar(255) NOT NULL,
  `sfname` varchar(255) NOT NULL,
  `sclass` varchar(255) NOT NULL,
  `sid` varchar(255) NOT NULL,
  `sdob` varchar(255) NOT NULL,
  `smail` varchar(255) NOT NULL,
  `scnic` varchar(255) NOT NULL,
  `spnum` varchar(255) NOT NULL,
  `sgen` varchar(255) NOT NULL,
  `saddress` varchar(255) NOT NULL,
  `spic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std2`
--

INSERT INTO `std2` (`ssr`, `sname`, `sfname`, `sclass`, `sid`, `sdob`, `smail`, `scnic`, `spnum`, `sgen`, `saddress`, `spic`) VALUES
(7, 'Mirza', 'Ali', 'BSCS', '51', '1990-01-09', 'ali@gmail.com', '3746201846776', '03211921994', 'Male', 'Sialkot', '1.jpg,2.jpg,3.jpg'),
(8, 'Abubakar', 'Ali', 'BS Physics', '52', '1991-09-11', 'abubakar@gmail.com', '340218274781', '03211940994', 'Male', 'Sialkot', '4.jpg,5.jpeg,img5.jpg'),
(9, 'Shehnaz', 'Fatima', 'BS Chemistry', '53', '1990-04-27', 'saad@gmali.com', '340218270081', '03211940274', 'Female', 'Faisalabad', '6.jpg,7.jpg,26.jpg'),
(10, 'Tariq', 'Maqsood', 'BS Physics', '54', '1998-09-11', 'tariq@yahoo.com', '340218270081', '03471739472', 'Male', 'Sialkot', '8.jpg,9.jpg'),
(11, 'Mahnoor', 'Aftab', 'BSCS', '55', '1998-08-16', 'mahnoor@yahoo.com', '340218270091', '03471739472', 'Female', 'Faisalabad', '21.jpg,26.jpg,30.jpg,31.jpg'),
(12, 'Hisham', 'Ali', 'BSCS', '56', '1999-08-22', 'hisham@gmail.com', '340218274781', '03471739472', 'Male', 'Faisalabad', '10.jpg,11.jpg,12.jpg'),
(13, 'Tariq', 'Ali', 'BS Physics', '57', '1999-01-18', 'tariq21@gmail.com', '340218274887', '03337043823', 'Male', 'Sialkot', '13.jpg,16.jpg,19.jpg'),
(14, 'javeria', 'Qayyum', 'BSCS', '58', '1998-08-15', 'javeria@gmail.com', '3746201846554', '03211940994', 'Female', 'Sialkot', '17.jpg,18.jpg,31.jpg'),
(15, 'Jameela', 'Fatima', 'BSCS', '59', '2000-06-11', 'jameelaf@yahoo.com', '3540382747766', '03111940274', 'Female', 'Lahore', '27.jpg,29.jpg,30.jpg'),
(16, 'Ali', 'Akram', 'BS Physics', '60', '1999-06-11', 'aliakram@gmail.com', '3356201846284', '03311940994', 'Male', 'Lahore', '11.jpg,12.jpg,24.jpg'),
(17, 'Ali', 'Ahmad', 'BS Chemistry', '61', '1998-07-12', 'aliahmad@gmail.com', '340218270081', '03001700321', 'Male', 'Lahore', '16.jpg,19.jpg,20.jpeg'),
(18, 'Aqsa', 'Ali', 'BS Physics', '62', '1997-07-18', 'aqsa@gmail.com', '340218270081', '03231940994', 'Female', 'Sialkot', '14.jpg,15.jpg,17.jpg'),
(19, 'Laiba', 'kanwal', 'BSCS', '63', '1998-04-18', 'laiba@gmail.com', '340218271181', '03337013823', 'Female', 'Faisalabad', '23.jpg,26.jpg,27.jpg'),
(20, 'Zahoor', 'Ali', 'BSCS', '64', '1992-08-12', 'zahoorali@gmail.com', '340218279981', '03411940274', 'Male', 'Karachi', '24.jpg,25.jpg,28.jpeg'),
(21, 'Saad', 'Afzal', 'BS Chemistry', '65', '1993-08-04', 'saadafzal@yahoo.com', '3746201846284', '03211940274', 'Male', 'Karachi', '1.jpg,2.jpg,16.jpg'),
(22, 'Maria', 'Anwar', 'BSCS', '66', '1997-02-21', 'maria@gmail.com', '340218274781', '03211940274', 'Female', 'Faisalabad', '6.jpg,21.jpg,22.jpg'),
(23, 'Abubakar', 'ijaz', 'BS Physics', '67', '1999-09-21', 'abubakar009@gmail.com', '3746201846284', '03211949974', 'Male', 'Karachi', '5.jpeg,9.jpg,10.jpg'),
(24, 'Kamran', 'Ali', 'BSCS', '68', '1998-07-22', 'kamran@gmail.com', '340218270091', '03337043823', 'Male', 'Sialkot', '16.jpg,19.jpg,28.jpeg'),
(25, 'Hisham', 'Ali', 'BS Physics', '69', '1994-06-30', 'hisham@gmail.com', '3746201843384', '03441739472', 'Male', 'Faisalabad', '13.jpg,16.jpg,24.jpg'),
(26, 'Hamza', 'Jabbar', 'BS Chemistry', '70', '1990-08-17', 'hamza@yahoo.com', '3746201846004', '03471799472', 'Male', 'Karachi', '1.jpg,5.jpeg,7.jpg'),
(27, 'Samina', 'Afzal', 'BSCS', '71', '2000-08-12', 'samina12@gmail.com', '340218274701', '03171739472', 'Female', 'Sialkot', '6.jpg,7.jpg,31.jpg'),
(28, 'Javeria', 'Liaqat', 'BS Physics', '72', '1995-09-23', 'javerialiaqat@gmail.com', '340218274999', '03071739472', 'Female', 'Faisalabad', '14.jpg,15.jpg,17.jpg'),
(29, 'Mahira ', 'Ali', 'BS Physics', '73', '2000-03-12', 'mahira@gmail.com', '340218274001', '03111940274', 'Female', 'Karachi', '6.jpg,7.jpg,23.jpg'),
(30, 'Mehwish', 'Hayat', 'BSCS', '74', '1995-06-09', 'mehwish@gmail.com', '3746201846009', '03411940274', 'Female', 'Sialkot', '29.jpg,30.jpg,31.jpg'),
(31, 'Shan', 'Ali', 'BS Chemistry', '75', '1997-09-21', 'shanali@gmail.com', '340218270091', '03261940274', 'Male', 'Faisalabad', '3.jpg,4.jpg,5.jpeg'),
(32, 'Awais', 'Ali', 'BSCS', '76', '1996-03-15', 'awaisali221@gmail.com', '3746201846284', '03211949974', 'Male', 'Karachi', '3.jpg,8.jpg,9.jpg'),
(33, 'Asad', 'Ali', 'BS Chemistry', '77', '1997-05-17', 'asadali@gmail.com', '3746201846284', '03111940274', 'Male', 'Sialkot', '1.jpg,13.jpg,28.jpeg'),
(35, 'Javad', 'Ali', 'BS Physics', '78', '1999-09-21', 'javadali@gmaill.com', '3746201846284', '03201940274', 'Male', 'Faisalabad', '8.jpg,9.jpg,10.jpg'),
(36, 'Sehar', 'Hayat', 'BSCS', '79', '2000-07-03', 'seharhayat@gmail.com', '3402182700852', '03337043823', 'Female', 'Sialkot', '29.jpg,30.jpg,31.jpg'),
(37, 'Nimra', 'Afzal', 'BSCS', '80', '1999-08-15', 'nimraafzal@yahoo.com', '3540218270081', '03191940274', 'Female', 'Faisalabad', '6.jpg,17.jpg,29.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `std`
--
ALTER TABLE `std`
  ADD PRIMARY KEY (`ssr`);

--
-- Indexes for table `std2`
--
ALTER TABLE `std2`
  ADD PRIMARY KEY (`ssr`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `std`
--
ALTER TABLE `std`
  MODIFY `ssr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=97;

--
-- AUTO_INCREMENT for table `std2`
--
ALTER TABLE `std2`
  MODIFY `ssr` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
