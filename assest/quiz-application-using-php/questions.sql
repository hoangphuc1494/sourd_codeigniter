-- - Database: `phpquiz`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `questions`
-- 

CREATE TABLE `questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `question_name` text CHARACTER SET utf8 NOT NULL,
  `answer1` varchar(50) NOT NULL,
  `answer2` varchar(50) NOT NULL,
  `answer3` varchar(50) NOT NULL,
  `answer4` varchar(50) NOT NULL,
  `answer` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

-- 
-- Dumping data for table `questions`
-- 

INSERT INTO `questions` VALUES (1, 'PHP là chữ viết tắt của?', 'Personal Home Page', 'Personal Hypertext Processor', 'Private Home Page', 'PHP: Hypertext Preprocessor', '4');
INSERT INTO `questions` VALUES (2, 'Hiển thị chữ "Hello World" ra màn hình trong  PHP', 'Document.Write("Hello World");', 'echo "Hello World";', '"Hello World";', '"Hello World";', '2');
INSERT INTO `questions` VALUES (3, 'PHP có cú pháp tương tự như :', 'VBScript', 'JavaScript', 'Perl & C', 'Pascal', '3');
INSERT INTO `questions` VALUES (4, 'Câu lệnh nào lấy dữ liệu khi submit form bằng  phương thức "get" trong PHP?', 'Request.Form;', '$_GET[];', 'Request.QueryString;', 'Request.QueryString;', '2');
