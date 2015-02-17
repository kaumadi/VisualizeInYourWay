-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 17, 2015 at 03:17 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `visualizeinyourway`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_set`
--

CREATE TABLE IF NOT EXISTS `data_set` (
  `data_set_id` int(11) NOT NULL AUTO_INCREMENT,
  `data_set_name` varchar(100) NOT NULL,
  PRIMARY KEY (`data_set_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `data_set_type`
--

CREATE TABLE IF NOT EXISTS `data_set_type` (
  `data_set_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `data_set_type_name` varchar(100) DEFAULT 'SQL',
  `data_set_type_description` varchar(400) NOT NULL,
  PRIMARY KEY (`data_set_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `privilege`
--

CREATE TABLE IF NOT EXISTS `privilege` (
  `privilege_code` int(11) NOT NULL AUTO_INCREMENT,
  `privilege_master_code` int(11) NOT NULL,
  `privilege` varchar(100) NOT NULL,
  `privilege_description` varchar(1000) NOT NULL,
  `privilege_code_HF` varchar(100) NOT NULL,
  `assign_for` enum('1','2','3','4') NOT NULL,
  PRIMARY KEY (`privilege_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `privilege_master`
--

CREATE TABLE IF NOT EXISTS `privilege_master` (
  `privilege_master_code` int(11) NOT NULL AUTO_INCREMENT,
  `master_privilege` varchar(100) NOT NULL,
  `master_privilege_description` varchar(1000) NOT NULL,
  `system_code` int(11) NOT NULL,
  PRIMARY KEY (`privilege_master_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `statistics`
--

CREATE TABLE IF NOT EXISTS `statistics` (
  `statistic_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `action` varchar(300) NOT NULL,
  `date` int(11) NOT NULL,
  `uri` varchar(255) NOT NULL,
  `post_data` text NOT NULL,
  `ip` varchar(300) DEFAULT NULL,
  `browser` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`statistic_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `statistics`
--

INSERT INTO `statistics` (`statistic_id`, `user_id`, `action`, `date`, `uri`, `post_data`, `ip`, `browser`) VALUES
(12, 0, 'authenticate_user', 1423993486, 'login/login_controller/authenticate_user', '{"login_username":"rachini","login_password":"abc123@#"}', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(11, 0, 'authenticate_user', 1423993430, 'login/login_controller/authenticate_user', '{"login_username":"rachini","login_password":"abc123@#"}', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(10, 0, 'login_controller', 1423993409, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(9, 0, 'authenticate_user', 1423992991, 'login/login_controller/authenticate_user', '{"login_username":"Rachini","login_password":"abc123"}', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(8, 0, 'login_controller', 1423992936, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(13, 0, 'authenticate_user', 1423993560, 'login/login_controller/authenticate_user', '{"login_username":"rachini94perera@gmail.com","login_password":"abc123@#"}', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(14, 0, 'login_controller', 1423993867, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(15, 0, 'login_controller', 1423994524, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(16, 0, 'login_controller', 1423994536, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(17, 0, 'login_controller', 1423994875, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(18, 0, 'login_controller', 1423994881, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(19, 0, 'login_controller', 1423995009, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(20, 0, 'login_controller', 1423995346, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(21, 0, 'login_controller', 1423995463, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(22, 0, 'authenticate_user', 1423995507, 'login/login_controller/authenticate_user', '{"login_username":"Rachini","login_password":"abc123@#"}', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(23, 0, 'authenticate_user', 1423995526, 'login/login_controller/authenticate_user', '{"login_username":"Rachini","login_password":"abc123@#"}', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(24, 0, 'authenticate_user', 1423995879, 'login/login_controller/authenticate_user', '{"login_username":"Rachini","login_password":"abc123@#"}', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(25, 0, 'authenticate_user', 1423996106, 'login/login_controller/authenticate_user', '{"login_username":"rachini94perera@gmail.com","login_password":"abc123@#"}', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(26, 0, 'login_controller', 1423996114, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(27, 0, 'login_controller', 1423996121, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(28, 0, 'login_controller', 1423996123, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(29, 0, 'login_controller', 1423996124, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(30, 0, 'login_controller', 1423996500, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(31, 0, 'authenticate_user', 1423996551, 'login/login_controller/authenticate_user', '{"login_username":"rachini94perera@gmail.com","login_password":"abc123@#"}', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(32, 0, 'login_controller', 1423997924, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(33, 0, 'authenticate_user', 1423997949, 'login/login_controller/authenticate_user', '{"login_username":"rachini94perera@gmail.com","login_password":"abc123@#"}', '::1', 'Mozilla/5.0 (Windows NT 6.2; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(34, 0, 'login_controller', 1424093972, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(35, 0, 'authenticate_user', 1424094011, 'login/login_controller/authenticate_user', '{"login_username":"rachini94perera@gmail.com","login_password":"abc123@#"}', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36'),
(36, 0, 'login_controller', 1424094034, '', '', '::1', 'Mozilla/5.0 (Windows NT 6.1) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/40.0.2214.111 Safari/537.36');

-- --------------------------------------------------------

--
-- Table structure for table `system`
--

CREATE TABLE IF NOT EXISTS `system` (
  `system_code` int(11) NOT NULL AUTO_INCREMENT,
  `system` varchar(100) NOT NULL,
  `dashboard_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`system_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `upload_files`
--

CREATE TABLE IF NOT EXISTS `upload_files` (
  `file_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `file_name` varchar(100) NOT NULL,
  `file_desc` text NOT NULL,
  `del_ind` enum('1','0') NOT NULL,
  `added_by` int(11) DEFAULT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`file_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `upload_files_stuff`
--

CREATE TABLE IF NOT EXISTS `upload_files_stuff` (
  `upload_file_stuff_id` int(11) NOT NULL AUTO_INCREMENT,
  `stuff_name` varchar(200) NOT NULL,
  `file_id` int(11) NOT NULL,
  `del_ind` enum('1','0') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  PRIMARY KEY (`upload_file_stuff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `upload_files_stuff_temp`
--

CREATE TABLE IF NOT EXISTS `upload_files_stuff_temp` (
  `upload_file_stuff_id` int(11) NOT NULL AUTO_INCREMENT,
  `stuff_name` varchar(200) NOT NULL,
  `user_id` int(11) NOT NULL,
  `del_ind` enum('1','0') NOT NULL DEFAULT '0',
  `added_date` timestamp NULL DEFAULT NULL,
  `added_by` int(11) NOT NULL,
  PRIMARY KEY (`upload_file_stuff_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_avatar` varchar(100) DEFAULT NULL,
  `user_cover_image` varchar(400) DEFAULT NULL,
  `account_activation_code` varchar(100) NOT NULL,
  `user_job` varchar(100) NOT NULL,
  `user_company_name` varchar(100) NOT NULL,
  `is_online` enum('Y','N') DEFAULT 'N' COMMENT 'Online =Y,Offline=N',
  `added_by` int(11) DEFAULT NULL,
  `added_date` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `updated_date` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_password`, `user_email`, `user_avatar`, `user_cover_image`, `account_activation_code`, `user_job`, `user_company_name`, `is_online`, `added_by`, `added_date`, `updated_by`, `updated_date`) VALUES
(1, 'Rachini', 'c4961b067d274050e43e26beb9d7d19c', 'rachini94perera@gmail.com', 'avatar.jpg', 'default_cover_pic.png', '', 'Employee', 'ABC', 'Y', NULL, '2015-02-11 18:30:00', NULL, NULL),
(2, 'Kaumadi', 'c4961b067d274050e43e26beb9d7d19c', 'kaumadi2014@gmail.com', 'avatar.jpg', 'default_cover_pic.png', '', 'Employee', 'ABC', 'Y', NULL, '2015-02-11 18:30:00', NULL, NULL),
(3, 'Dahami', 'c4961b067d274050e43e26beb9d7d19c', 'dahamiyh@ymail.com', 'avatar.jpg', 'default_cover_Pic.png', '', 'Employee', 'ABC', 'Y', NULL, '2015-02-11 18:30:00', NULL, NULL),
(4, 'Dilupa', 'c4961b067d274050e43e26beb9d7d19c', 'dila.june@ymail.com', 'avatar.jpg', 'default_cover_pic.png', '', 'Employee', 'ABC', 'Y', NULL, '2015-02-11 18:30:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_data_set`
--

CREATE TABLE IF NOT EXISTS `user_data_set` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `data_set_id` int(11) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user_privileges`
--

CREATE TABLE IF NOT EXISTS `user_privileges` (
  `user_privilege_code` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `privilege_code` int(11) NOT NULL,
  `added_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`user_privilege_code`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
