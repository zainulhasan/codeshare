-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2015 at 02:44 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `codeshare`
--

-- --------------------------------------------------------

--
-- Table structure for table `code`
--

CREATE TABLE IF NOT EXISTS `code` (
  `iid` int(11) NOT NULL AUTO_INCREMENT,
  `data` longtext NOT NULL,
  `subject` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `date` varchar(30) NOT NULL,
  PRIMARY KEY (`iid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `code`
--

INSERT INTO `code` (`iid`, `data`, `subject`, `email`, `date`) VALUES
(1, 'function foo(items) {\n    var i;\n    for (i = 0; i < items.length; i++) {\n        alert("value " + items[i]);\n    }\n}', 'Testing Post', 'zain@zain.com', 'March 10, 2001, 5:16 pm'),
(13, 'function foo(items) {\n    var i;\n    for (i = 0; i < items.length; i++) {\n        alert("value " + items[i]);\n    }\n}', 'testApp.php', 'zain@zain.com', 'March 10, 2001, 5:16 pm'),
(14, 'function foo(items) {\n    var i;\n    for (i = 0; i < items.length; i++) {\n        alert("value " + items[i]);\n    }\n}', 'Test Post 2', 'zain@zain.com', 'March 10, 2001, 5:16 pm'),
(15, 'amaan is here', 'Amaan test post', 'admin@admin.com', 'March 10, 2001, 5:16 pm'),
(16, '//Write Your Code Here......', 'My FirstName', 'admin@admin.com', 'December 20, 2015, 1:32 pm'),
(17, '//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......//Write Your Code Here......\n\n//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......//Write Your Code Here......\n', 'Test Page', 'admin@admin.com', 'December 20, 2015, 1:40 pm'),
(18, '//Write Your Code Here......', 'zz', 'lol@lol.com', 'December 20, 2015, 2:07 pm'),
(19, '//Write Your Code Here......', 'aaa', 'zain@zain.com', 'December 20, 2015, 2:10 pm'),
(20, '//Write Your Code Here......\n//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......//Write Your Code Here......\n\n//Write Your Code Here......//Write Your Code Here......//Write Your Code Here......\n//Write Your Code Here......', 'aaa', 'zain@zain.com', 'December 20, 2015, 2:10 pm');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `password`) VALUES
(4, 'Syed Zain UL Hasan', 'zain@zain.com', 'zain'),
(12, 'Syed Amaan ALi', 'admin@admin.com', 'admin'),
(13, 'lol', 'lol@lol.com', 'lol');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
