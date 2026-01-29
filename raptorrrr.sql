-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 29, 2026 at 09:01 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `raptorrrr`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `id_mem` int(11) NOT NULL COMMENT 'รหัสสมาชิก',
  `name_mem` varchar(50) NOT NULL COMMENT 'ชื่อสมาชิก',
  `email_mem` varchar(100) NOT NULL COMMENT 'อีเมล์สมาชิก',
  `password_mem` varchar(50) NOT NULL COMMENT 'รหัสผ่านสมาชิก',
  `sex_mem` smallint(2) NOT NULL COMMENT 'เพศสมาชิก',
  `birthday_mem` date NOT NULL COMMENT 'วันเกิดสมาชิก',
  `phone_mem` varchar(20) NOT NULL COMMENT 'เบอร์โทรศัพท์',
  `address_mem` varchar(250) DEFAULT NULL COMMENT 'ที่อยู่',
  `zipcode_mem` varchar(10) DEFAULT NULL COMMENT 'รหัสไปรษณีย์',
  `country_mem` varchar(50) DEFAULT NULL COMMENT 'ประเทศ'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id_mem`, `name_mem`, `email_mem`, `password_mem`, `sex_mem`, `birthday_mem`, `phone_mem`, `address_mem`, `zipcode_mem`, `country_mem`) VALUES
(1, 'Sorawit Anuson', 'std.67122710118@ubru.ac.th', '11401140', 1, '2020-01-15', '0832503084', 'Ubon', '34140', 'Thai'),
(2, 'A', 'A0111@gmail.com', '112233', 1, '2025-06-20', '0832502344', 'A0011address', '34140', 'Thai'),
(3, 'A200011', 'A20011@gmail.com', '11223344', 2, '2020-10-16', '0832503099', 'A2address', '34140', 'Thai');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id_mem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id_mem` int(11) NOT NULL AUTO_INCREMENT COMMENT 'รหัสสมาชิก', AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
