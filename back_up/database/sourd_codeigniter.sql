-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2017 at 11:22 AM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sourd_codeigniter`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `question_name` text NOT NULL,
  `answer1` varchar(50) CHARACTER SET latin1 NOT NULL,
  `answer2` varchar(50) CHARACTER SET latin1 NOT NULL,
  `answer3` varchar(50) CHARACTER SET latin1 NOT NULL,
  `answer4` varchar(50) CHARACTER SET latin1 NOT NULL,
  `answer` varchar(50) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question_name`, `answer1`, `answer2`, `answer3`, `answer4`, `answer`) VALUES
(1, 'PHP là chữ viết tắt của?', 'Personal Home Page', 'Personal Hypertext Processor', 'Private Home Page', 'PHP: Hypertext Preprocessor', '4'),
(2, 'Hiển thị chữ "Hello World" ra màn hình trong  PHP', 'Document.Write("Hello World");', 'echo "Hello World";', '"Hello World";', '"Hello World";', '2'),
(3, 'PHP có cú pháp tương tự như :', 'VBScript', 'JavaScript', 'Perl & C', 'Pascal', '3'),
(4, 'Câu lệnh nào lấy dữ liệu khi submit form bằng  phương thức "get" trong PHP?', 'Request.Form;', '$_GET[];', 'Request.QueryString;', 'Request.QueryString;', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
