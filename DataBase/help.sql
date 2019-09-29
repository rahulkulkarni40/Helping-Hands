-- phpMyAdmin SQL Dump
-- version 4.1.6
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2016 at 06:08 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `help`
--

-- --------------------------------------------------------

--
-- Table structure for table `donate`
--

CREATE TABLE IF NOT EXISTS `donate` (
  `name` varchar(30) NOT NULL,
  `quantity` int(15) NOT NULL,
  `cont` varchar(100) NOT NULL,
  `@.com` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `file` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `draft`
--

CREATE TABLE IF NOT EXISTS `draft` (
  `date` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `draft`
--

INSERT INTO `draft` (`date`) VALUES
('0000-00-00'),
('0000-00-00'),
('0000-00-00'),
('2013-06-09'),
('2013-06-13');

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE IF NOT EXISTS `image` (
  `img_id` int(11) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(200) NOT NULL,
  PRIMARY KEY (`img_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`img_id`, `imagepath`) VALUES
(1, 'Winter.jpg'),
(2, 'Winter.jpg'),
(3, 'Blue hills.jpg'),
(4, 'Winter.jpg'),
(5, ''),
(6, 'Winter.jpg'),
(7, 'Winter.jpg'),
(8, 'Winter.jpg'),
(9, 'Winter.jpg'),
(10, 'Sunset.jpg'),
(11, 'Water lilies.jpg'),
(12, 'Sunset.jpg'),
(13, 'Sunset.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `latestupd`
--

CREATE TABLE IF NOT EXISTS `latestupd` (
  `upd_id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `content` text NOT NULL,
  `image` varchar(200) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`upd_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `latestupd`
--

INSERT INTO `latestupd` (`upd_id`, `title`, `content`, `image`, `date`) VALUES
(1, 'resul', 'mca result is declared.....', 'AboutPlugin.dll', '2013-06-13'),
(2, 'resul', 'mca result is declared.....', 'AboutPlugin.dll', '2013-06-13'),
(3, 'resue', 'resume......', 'Winter.jpg', '2013-06-13'),
(4, 'lkjlj', 'khkjhkh', '', '2013-06-13'),
(5, 'jjjjjjjjj', 'kkkkkkkkkkk', 'Water lilies.jpg', '2013-06-13'),
(6, 'just i did ', 'helped', '55.jpg', '2016-04-26'),
(7, 'avhasg', 'asndbbmnxbcn\r\ncxcd', '2013-02-02 11.22.52-1.jpg', '2016-04-27');

-- --------------------------------------------------------

--
-- Table structure for table `mails`
--

CREATE TABLE IF NOT EXISTS `mails` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(50) NOT NULL,
  `sen_id` varchar(50) NOT NULL,
  `sub` char(50) NOT NULL,
  `msg` text NOT NULL,
  `draft` text NOT NULL,
  `trash` text NOT NULL,
  `attachement` varchar(200) NOT NULL,
  `msgdate` varchar(50) NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `mails`
--

INSERT INTO `mails` (`mail_id`, `rec_id`, `sen_id`, `sub`, `msg`, `draft`, `trash`, `attachement`, `msgdate`) VALUES
(1, 'deepika', 'prabhat', 'hello', 'hello deepika', '', '', '', ''),
(2, 'prabhat', 'prabhat', 'hiiiiiiiii--msg failed', 'hiiiiiiiiiii', '', '', '', ''),
(3, 'prabhat', 'prabhat', 'hiiiiiiiii--msg failed', 'hiiiiiiiiiii', '', '', '', ''),
(4, 'deepika', 'prabhat', 'welcome', 'welcom........', '', '', '', ''),
(5, 'deepika', 'prabhat', 'welcome', 'welcom........', '', '', '', ''),
(6, 'deepika', 'prabhat', 'welcome', 'welcom........', '', '', '', ''),
(7, 'prabhat', '', 'my resume', '', 'dkljfldjlf', '', '', ''),
(8, 'deepika', 'prabhat', 'ldfjld', 'dkfjldj', '', '', '', '2013-03-03 10:57:47'),
(9, 'deepika', 'prabhat', 'ldfjld', 'dkfjldj', '', '', '', '2013-03-03 11:00:13'),
(10, 'rexx', 'prabhat', 'hello', 'hello', '', '', '', '2013-03-03 11:01:22'),
(11, 'rexx', 'prabhat', 'welll', 'welcome.rexx........', '', '', '', '2013-03-03 11:01:34');

-- --------------------------------------------------------

--
-- Table structure for table `trash`
--

CREATE TABLE IF NOT EXISTS `trash` (
  `trash_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(50) NOT NULL,
  `sen_id` varchar(50) NOT NULL,
  `sub` varchar(50) NOT NULL,
  `msg` text NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY (`trash_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `trash`
--

INSERT INTO `trash` (`trash_id`, `rec_id`, `sen_id`, `sub`, `msg`, `date`) VALUES
(1, 'hema', 'ravi', 'hello', 'hello prabhat..........', '2015-06-22'),
(2, 'hema', 'hema', 'hhhhh', 'hello ravi', '2015-06-22'),
(3, 'hema', 'ravi', 'hello', 'hello prabhat..........', '2015-06-22'),
(4, 'hema', 'ravi', 'hello', 'hello deep hows you?......', '2015-06-22');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE IF NOT EXISTS `userinfo` (
  `user_jd` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` char(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` enum('m','f') NOT NULL,
  `hobbies` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `image` varchar(100) NOT NULL,
  PRIMARY KEY (`user_jd`),
  UNIQUE KEY `user_name` (`user_name`,`mobile`,`email`),
  KEY `gender` (`gender`,`dob`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`user_jd`, `user_name`, `password`, `mobile`, `email`, `gender`, `hobbies`, `dob`, `image`) VALUES
(1, 'hema', 'hema123', 222222, '', 'f', 'reading', '1902-03-04', 'Blue hills.jpg'),
(2, 'mehak', 'mehak', 11111, 'mehak@gmail.com', 'f', 'cricket,football', '1917-11-16', ''),
(3, 'sanjeev', 'sanjeev', 55578857878, 'sanjeev@yahoo.com', 'm', 'cricket,football', '0000-00-00', ''),
(4, 'dfdfdfd', 'fdf', 0, 'dfdfd@gmail.lcom', 'm', 'cricket', '0000-00-00', ''),
(5, 'satish@gmail.com', 'satish', 45444, 'sanjeev@yahoo.com', 'm', 'cricket,football', '1902-04-04', 'Winter.jpg'),
(6, 'xyz', 'xyz111', 444444, 'xyz@gmail.com', 'm', 'cricket,football', '1901-04-04', 'Blue hills.jpg'),
(7, 'ravi', 'ravi111', 44444444, 'ravi@gmail.com', 'm', 'cricket,football', '1901-03-03', 'Winter.jpg'),
(8, 'abhishek', 'abhi', 888888888, 'abhishek@gmail.com', 'm', 'cricket,football', '1915-10-16', 'Sunset.jpg'),
(9, 'pradeep', 'paddy', 7204606771, 'p@gmail.com', 'm', 'cricket,football,reading', '1993-05-04', '2013-02-02 11.22.52-1.jpg'),
(10, 'abhi', 'abhi', 7204006929, 'abhi@gmail.com', 'm', 'cricket', '1993-09-19', 'A5.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `usermail`
--

CREATE TABLE IF NOT EXISTS `usermail` (
  `mail_id` int(11) NOT NULL AUTO_INCREMENT,
  `rec_id` varchar(30) NOT NULL,
  `sen_id` varchar(30) NOT NULL,
  `sub` char(30) NOT NULL,
  `msg` text NOT NULL,
  `attachement` text NOT NULL,
  `recDT` date NOT NULL,
  PRIMARY KEY (`mail_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `usermail`
--

INSERT INTO `usermail` (`mail_id`, `rec_id`, `sen_id`, `sub`, `msg`, `attachement`, `recDT`) VALUES
(3, 'ravi', 'ravi', 'welcome--msg failed', 'dljfldjfldj', '', '2013-03-05'),
(4, 'prabhat', 'ravi', 'hiiiii', 'hii prabhat.........', '', '2013-03-06'),
(5, 'prabhat', 'ravi', 'docs', 'project docs.............', '', '2013-03-06');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
