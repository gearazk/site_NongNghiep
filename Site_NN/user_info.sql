-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 02, 2016 at 04:08 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `user_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `info_table`
--

CREATE TABLE IF NOT EXISTS `info_table` (
  `username` text NOT NULL,
  `pass` text NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=armscii8;

--
-- Dumping data for table `info_table`
--

INSERT INTO `info_table` (`username`, `pass`, `name`, `email`) VALUES
('user001', 'pass001', 'nguoidung1', 'user1@abc.com'),
('user002', 'pass002', 'nguoidung2', 'user2@abc.com'),
('user003', 'pass003', 'nguoidung3', 'user3@abc.com'),
('user004', 'pass04', 'nguoi dung 04', 'email4'),
('user', 'pass', 'hoten', 'emial'),
('userddd', 'asfaf', 'hoten', 'emial');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
