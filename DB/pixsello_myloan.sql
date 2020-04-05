-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2016 at 06:45 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pixsello_myloan`
--

-- --------------------------------------------------------

--
-- Table structure for table `agency_sms_settings`
--

CREATE TABLE IF NOT EXISTS `agency_sms_settings` (
  `agency_sms_settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `agency_name` varchar(250) NOT NULL,
  `mobile` int(21) NOT NULL,
  `email` varchar(250) NOT NULL,
  `sr_state_id` int(11) NOT NULL,
  `cities_of_state_id` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `status` varchar(10) NOT NULL,
  `sms_lead` int(11) NOT NULL,
  PRIMARY KEY (`agency_sms_settings_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `bank`
--

CREATE TABLE IF NOT EXISTS `bank` (
  `bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(200) NOT NULL,
  `bank_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bank_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `bank`
--

INSERT INTO `bank` (`bank_id`, `bank_name`, `bank_created`) VALUES
(1, 'ICICI', '2016-10-18 11:10:42'),
(2, 'AXIS', '2016-10-18 11:10:46'),
(3, 'HDFC', '2016-10-18 11:10:49'),
(4, 'CITI', '2016-10-18 11:10:52'),
(5, 'SBI', '2016-10-18 11:10:55'),
(6, 'BAJAJ FINSERV', '2016-10-18 11:10:58'),
(7, 'ING Vysya', '2016-10-18 11:11:02');

-- --------------------------------------------------------

--
-- Table structure for table `business_loan`
--

CREATE TABLE IF NOT EXISTS `business_loan` (
  `business_loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `bussiness_loan_bank_id` int(11) NOT NULL,
  `turn_over` varchar(250) NOT NULL,
  `profit` varchar(250) NOT NULL,
  `loan_amount` varchar(250) NOT NULL,
  `own_house_office` varchar(250) NOT NULL,
  `irr` varchar(250) NOT NULL,
  `pf` varchar(250) NOT NULL,
  `min_exp` varchar(250) NOT NULL,
  `age` varchar(250) NOT NULL,
  `insurance` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`business_loan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `business_loan`
--

INSERT INTO `business_loan` (`business_loan_id`, `bussiness_loan_bank_id`, `turn_over`, `profit`, `loan_amount`, `own_house_office`, `irr`, `pf`, `min_exp`, `age`, `insurance`, `created_on`) VALUES
(2, 2, '40LACKS +', '2LACKS +', '1LACKS -40LACKS', 'SHOULD BE IN BLR', '16.7--22%', '2--2.5%', '3YEARS', '25YEARS', 'MANDATORY FR PROP. SHIP COMPANY & INDIVIDUAL', '2016-10-19 01:15:22'),
(3, 3, '30LACKS+', '2LACKS +', '1LACKS -40LACKS', 'ANY WHERE IN INDIA ICICI  LOCATION', '16.6-22%', '2--2.25%\r\nCASE TO CASE BASIS', '5YEARS', '25YEARS', 'NOT MANDATORY', '2016-10-19 01:18:11'),
(4, 4, '1CR +', '2LACKS+', '5LACKS--1.25CR', 'ANY WHERE IN INDIA KOTAK  LOCATION', '18.5--23%', '2%', '3YEARS', '25YEARS', 'MANDATORY', '2016-10-19 01:19:40'),
(5, 5, '1CR+', '2LACKS+', '5LACKS--1CR', 'ANY WHERE IN INDIA RELIGARE   LOCATION', '19.25--20%', '2.15%', '5YEARS', '25YEARS', 'MANDATORY', '2016-10-19 01:21:37');

-- --------------------------------------------------------

--
-- Table structure for table `bussiness_loan_bank`
--

CREATE TABLE IF NOT EXISTS `bussiness_loan_bank` (
  `bussiness_loan_bank_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_name` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`bussiness_loan_bank_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `bussiness_loan_bank`
--

INSERT INTO `bussiness_loan_bank` (`bussiness_loan_bank_id`, `bank_name`, `created_on`) VALUES
(1, 'Axis Bank', '2016-10-19 00:54:32'),
(2, 'HDFC', '2016-10-19 01:05:46'),
(3, 'ICICI', '2016-10-19 01:16:14'),
(4, 'KOTAK', '2016-10-19 01:18:36'),
(5, 'RELIGARE', '2016-10-19 01:20:11');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `categories_name` varchar(200) NOT NULL,
  `categories_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categories_name`, `categories_created`) VALUES
(1, 'Home Loan', '2016-07-26 09:59:37'),
(2, 'Technical', '2016-07-26 10:00:09'),
(3, 'CIBIL', '2016-07-26 10:00:19'),
(4, 'Eligibility', '2016-08-03 12:47:49'),
(5, 'Legal', '2016-08-03 12:48:09'),
(6, 'Disbursement', '2016-08-03 12:48:57'),
(7, 'Registration', '2016-08-03 12:49:07'),
(8, 'Banks', '2016-08-03 12:49:53');

-- --------------------------------------------------------

--
-- Table structure for table `cities_of_state`
--

CREATE TABLE IF NOT EXISTS `cities_of_state` (
  `cities_of_state_id` int(11) NOT NULL AUTO_INCREMENT,
  `sr_state_id` int(11) NOT NULL,
  `city_name` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`cities_of_state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `cities_of_state`
--

INSERT INTO `cities_of_state` (`cities_of_state_id`, `sr_state_id`, `city_name`, `created_on`) VALUES
(1, 2, 'Bangalore', '2016-08-11 07:04:52'),
(2, 2, 'mysore', '2016-10-24 07:16:15'),
(3, 2, 'tumkur', '2016-10-24 07:16:24'),
(4, 1, 'Another_Andra', '2016-10-24 07:18:59'),
(5, 1, 'Telengana', '2016-10-24 07:19:11');

-- --------------------------------------------------------

--
-- Table structure for table `ci_sessions`
--

CREATE TABLE IF NOT EXISTS `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  PRIMARY KEY (`id`),
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ci_sessions`
--

INSERT INTO `ci_sessions` (`id`, `ip_address`, `timestamp`, `data`) VALUES
('04ef003f0a2e6a81b0580b647bed62ca41f413ed', '::1', 1474959603, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343935393333393b61697c733a313a2232223b61657c733a373a226140672e636f6d223b61757c733a363a224167656e6379223b),
('12c83ef672a91e05f8cf78cf32b0b2db740ea703', '::1', 1475130030, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353133303033303b),
('1fba6ae6d53202cf94407d794814da98dc099a09', '::1', 1475129844, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353132393635323b75697c733a33323a226535333765333630323737646538626131393034393936303939623838633866223b657c4e3b697c733a33323a226562613531303462383739333130303134663831333739656665313437616262223b757c733a353a2261646d696e223b727c733a313a2241223b767c733a373a2257656273697465223b6e7c733a31343a2272616d2073687265656b616e7468223b627c4e3b),
('206dfea76b6dd32308392f186ac2427ba43f3819', '::1', 1476335260, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363333353235393b),
('2b8c09e306e875345c26dcc89fa8d3ca44fd07bf', '::1', 1475146210, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353134363137383b75697c733a33323a226535333765333630323737646538626131393034393936303939623838633866223b657c4e3b697c733a33323a226562613531303462383739333130303134663831333739656665313437616262223b757c733a353a2261646d696e223b727c733a313a2241223b767c733a373a2257656273697465223b6e7c733a31343a2272616d2073687265656b616e7468223b627c4e3b),
('2caa1c5fa49599d7a32481b5aa26b139faeb57b0', '::1', 1475129652, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353132393635323b),
('2d59ab1bb43c82b052797a3bfd0da47ad47b5692', '::1', 1474960603, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343936303532343b61697c733a313a2232223b61657c733a373a226140672e636f6d223b61757c733a363a224167656e6379223b),
('3128b6589492e0e842315ad89e5787197ccf0b32', '::1', 1474971224, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343937313232333b),
('36a72259cfac8ceb45b02388378e1cc455000eae', '::1', 1475152803, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353135323732343b75697c733a33323a226535333765333630323737646538626131393034393936303939623838633866223b657c4e3b697c733a33323a226562613531303462383739333130303134663831333739656665313437616262223b757c733a353a2261646d696e223b727c733a313a2241223b767c733a373a2257656273697465223b6e7c733a31343a2272616d2073687265656b616e7468223b627c4e3b),
('3bcd27b4e16adb9088dc6b612917f99ed69f6366', '::1', 1476333479, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363333333233363b),
('459bbf449649e3d7953120c9600908c7cf1534ae', '::1', 1475842380, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353834323336323b),
('561588d79f504f2c259ad84b0fa617f3208951b9', '::1', 1475150693, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353135303635343b75697c733a33323a226535333765333630323737646538626131393034393936303939623838633866223b657c4e3b697c733a33323a226562613531303462383739333130303134663831333739656665313437616262223b757c733a353a2261646d696e223b727c733a313a2241223b767c733a373a2257656273697465223b6e7c733a31343a2272616d2073687265656b616e7468223b627c4e3b),
('7849e6535bbf9e0f5ceafeac4f60153980d07929', '::1', 1476185823, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363138353535393b),
('7b5882c69de70b92475cb34e21e55b42cd0353f2', '::1', 1476334948, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363333343635363b75697c733a33323a226535333765333630323737646538626131393034393936303939623838633866223b657c4e3b697c733a33323a226562613531303462383739333130303134663831333739656665313437616262223b757c733a353a2261646d696e223b727c733a313a2241223b767c733a373a2257656273697465223b6e7c733a31343a2272616d2073687265656b616e7468223b627c4e3b),
('adee2759c682b37df48e20f848a4b62886655740', '::1', 1474955943, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343935353735313b75697c733a33323a226535333765333630323737646538626131393034393936303939623838633866223b657c4e3b697c733a33323a226562613531303462383739333130303134663831333739656665313437616262223b757c733a353a2261646d696e223b727c733a313a2241223b767c733a373a2257656273697465223b6e7c733a31343a2272616d2073687265656b616e7468223b627c4e3b),
('ae145cff81018b86292da6e3c93b0abee00d62c0', '::1', 1476335997, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437363333353936333b),
('ca526e4c1d1c4a9587e12aeddefd1961ca0f038c', '::1', 1474960132, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343936303132353b61697c733a313a2232223b61657c733a373a226140672e636f6d223b61757c733a363a224167656e6379223b),
('d2c6527c6dc2c8e2db689e2aaf0d8285e2499885', '::1', 1474960056, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437343935393738383b61697c733a313a2232223b61657c733a373a226140672e636f6d223b61757c733a363a224167656e6379223b),
('d9999cb5fd869fcf44a65cacc903cef537618645', '::1', 1475310421, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353331303431393b),
('f2d2040b212ac676a1d583066b429e37f1d70718', '::1', 1475133466, 0x5f5f63695f6c6173745f726567656e65726174657c693a313437353133333436353b);

-- --------------------------------------------------------

--
-- Table structure for table `disbursment_document`
--

CREATE TABLE IF NOT EXISTS `disbursment_document` (
  `disbursment_document_id` int(11) NOT NULL AUTO_INCREMENT,
  `role` varchar(20) NOT NULL,
  `income_source_id` varchar(3) NOT NULL,
  `generate_file_id` int(11) NOT NULL,
  `file_disbursment_details_id` int(11) NOT NULL,
  `disbursment_document_name` varchar(250) NOT NULL,
  `status` int(3) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`disbursment_document_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `disbursment_document`
--

INSERT INTO `disbursment_document` (`disbursment_document_id`, `role`, `income_source_id`, `generate_file_id`, `file_disbursment_details_id`, `disbursment_document_name`, `status`, `created_on`) VALUES
(1, 'emp', 'R', 1, 1, 'Driving Licence', 1, '2016-10-25 10:23:32'),
(2, 'emp', 'R', 1, 1, 'Voter ID', 0, '2016-10-25 10:23:46');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=27 ;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id`, `group_id`, `email`) VALUES
(1, 2, 'hemanthraj2009@gmail.com'),
(2, 1, 'preem@gmail.com'),
(3, 3, 'one@gmail.com'),
(4, 1, 'more@gmail.com'),
(5, 1, 'home@g.com'),
(6, 2, 'email@g.com'),
(7, 4, 'friend@g.com'),
(8, 2, 'friends@g.com'),
(9, 3, 'pixsello@g.com'),
(10, 3, 'p@gmaoc.om'),
(11, 4, 'testi@g.com'),
(12, 4, 'testis@gmal.com'),
(24, 5, 't@gmail.com'),
(25, 5, 'e@gmail.com'),
(26, 5, 'dsa@gamil.com');

-- --------------------------------------------------------

--
-- Table structure for table `faq_answer`
--

CREATE TABLE IF NOT EXISTS `faq_answer` (
  `faq_answer_id` int(11) NOT NULL AUTO_INCREMENT,
  `faq_question_id` int(11) NOT NULL,
  `answer` text NOT NULL,
  `answered_by` varchar(200) NOT NULL,
  `rating` varchar(200) NOT NULL DEFAULT '0',
  PRIMARY KEY (`faq_answer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `faq_answer`
--

INSERT INTO `faq_answer` (`faq_answer_id`, `faq_question_id`, `answer`, `answered_by`, `rating`) VALUES
(1, 1, '<p>Here is my Answer for ur question</p>', 'admin', '0'),
(2, 4, '<p>Hello Prashanth here is answer for ur question any time u can mail me for ur clarification</p>', 'admin', '0'),
(3, 3, '<p>Testing Data for home loan</p>', 'admin', '0'),
(4, 2, '<p>Here is my Answer for ur question</p>', 'admin', '0');

-- --------------------------------------------------------

--
-- Table structure for table `faq_question`
--

CREATE TABLE IF NOT EXISTS `faq_question` (
  `faq_question_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_id` int(11) NOT NULL,
  `categories_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email_id` varchar(200) NOT NULL,
  `question` text NOT NULL,
  `status` varchar(250) NOT NULL,
  PRIMARY KEY (`faq_question_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `faq_question`
--

INSERT INTO `faq_question` (`faq_question_id`, `bank_id`, `categories_id`, `name`, `email_id`, `question`, `status`) VALUES
(1, 1, 1, 'Hemanth', 'hemanthraj2009@gmail.com', 'Testing query', '0'),
(2, 2, 2, 'Madhu', 'madhu@gmail.com', 'Technical QUery', '0'),
(3, 2, 2, 'Madhu', 'madhu@gmail.com', 'Another QUery for Technial issue for home loan', '0'),
(4, 3, 3, 'prashanth', 'prashanth@gmail.com', 'i have query on cibil report can anybody help me out for my bussiness loan', '0'),
(5, 4, 4, 'punith', 'punith@gmail.com', 'what is my eligibality im working for mnc company', '1');

-- --------------------------------------------------------

--
-- Table structure for table `file_disbursment_details`
--

CREATE TABLE IF NOT EXISTS `file_disbursment_details` (
  `file_disbursment_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `income_source_id` varchar(3) NOT NULL,
  `role` varchar(20) NOT NULL,
  `generate_file_id` int(11) NOT NULL,
  `file_process_id` int(11) NOT NULL,
  `remarks` text NOT NULL,
  `amount` int(11) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`file_disbursment_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `file_disbursment_details`
--

INSERT INTO `file_disbursment_details` (`file_disbursment_details_id`, `income_source_id`, `role`, `generate_file_id`, `file_process_id`, `remarks`, `amount`, `created_on`) VALUES
(1, 'R', 'emp', 1, 1, 'Some Documents are Pending Please Update soon', 4000, '2016-10-25 10:23:19');

-- --------------------------------------------------------

--
-- Table structure for table `file_generated_details`
--

CREATE TABLE IF NOT EXISTS `file_generated_details` (
  `file_generated_details_id` int(11) NOT NULL AUTO_INCREMENT,
  `generate_file_id` varchar(250) NOT NULL,
  `role` varchar(20) NOT NULL,
  `income_source_id` varchar(3) NOT NULL,
  `app_process_process_type_id` int(11) NOT NULL,
  `co_process_process_type_id` int(11) NOT NULL,
  `file_process_app_status` int(11) NOT NULL,
  `file_process_co_status` int(11) NOT NULL,
  `app_remarks` text NOT NULL,
  `co_remarks` text NOT NULL,
  `eli_app_process_type_process_id` int(11) NOT NULL,
  `eli_co_process_type_process_id` int(11) NOT NULL,
  `eli_file_process_app_status` int(11) NOT NULL,
  `eli_file_process_co_status` int(11) NOT NULL,
  `eli_app_remarks` text NOT NULL,
  `eli_co_remarks` text NOT NULL,
  `eli_app_amount` int(11) NOT NULL,
  `eli_co_amount` int(11) NOT NULL,
  `leg_app_process_type_process_id` int(11) NOT NULL,
  `leg_co_process_type_process_id` int(11) NOT NULL,
  `leg_file_process_app_status` int(11) NOT NULL,
  `leg_file_process_co_status` int(11) NOT NULL,
  `leg_app_remarks` text NOT NULL,
  `leg_co_remarks` text NOT NULL,
  `leg_app_amount` int(11) NOT NULL,
  `leg_co_amount` int(11) NOT NULL,
  PRIMARY KEY (`file_generated_details_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `file_generated_details`
--

INSERT INTO `file_generated_details` (`file_generated_details_id`, `generate_file_id`, `role`, `income_source_id`, `app_process_process_type_id`, `co_process_process_type_id`, `file_process_app_status`, `file_process_co_status`, `app_remarks`, `co_remarks`, `eli_app_process_type_process_id`, `eli_co_process_type_process_id`, `eli_file_process_app_status`, `eli_file_process_co_status`, `eli_app_remarks`, `eli_co_remarks`, `eli_app_amount`, `eli_co_amount`, `leg_app_process_type_process_id`, `leg_co_process_type_process_id`, `leg_file_process_app_status`, `leg_file_process_co_status`, `leg_app_remarks`, `leg_co_remarks`, `leg_app_amount`, `leg_co_amount`) VALUES
(2, '1', 'emp', 'R', 4, 15, 12, 4, 'Not Applicable', 'Triggered', 8, 9, 1, 3, 'Pending', 'Completed', 1000, 2000, 10, 11, 1, 3, 'Pending ', 'Completed', 1500, 2000);

-- --------------------------------------------------------

--
-- Table structure for table `file_process`
--

CREATE TABLE IF NOT EXISTS `file_process` (
  `file_process_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_status_name` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`file_process_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `file_process`
--

INSERT INTO `file_process` (`file_process_id`, `file_status_name`, `created_on`) VALUES
(1, 'Pending', '2016-09-02 11:00:11'),
(2, 'Under Process', '2016-09-02 12:05:32'),
(3, 'Completed', '2016-09-02 11:00:38'),
(4, 'Triggred', '2016-09-02 11:00:46'),
(5, 'Recommended', '2016-09-02 11:00:53'),
(6, 'Not recomended', '2016-09-02 11:01:03'),
(7, 'Mail Sent', '2016-09-02 11:01:11'),
(8, 'Positive', '2016-09-02 11:01:18'),
(9, 'Negative', '2016-09-02 11:01:25'),
(10, 'Need clarification', '2016-09-02 11:01:33'),
(11, 'Refer', '2016-09-02 11:01:40'),
(12, 'NA (Not applicable)', '2016-09-02 11:01:59'),
(13, 'Disbursed', '2016-09-02 11:02:05'),
(14, 'Logged in', '2016-09-02 11:02:13'),
(15, 'Hold', '2016-09-02 11:02:20'),
(16, 'Rejected', '2016-09-02 11:02:26'),
(17, 'Login pending', '2016-09-02 11:02:36'),
(18, 'Completed but Rejected', '2016-09-02 11:02:47'),
(19, 'Query', '2016-09-02 11:02:55'),
(20, 'Documents Required', '2016-09-02 11:03:02'),
(21, 'Initiated', '2016-09-02 11:03:25');

-- --------------------------------------------------------

--
-- Table structure for table `foir_setting`
--

CREATE TABLE IF NOT EXISTS `foir_setting` (
  `foir_setting_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_id` varchar(25) NOT NULL,
  `income_source_id` varchar(25) NOT NULL,
  `liabilities` varchar(200) NOT NULL,
  `from_amount` decimal(10,2) NOT NULL,
  `to_amount` decimal(10,2) NOT NULL,
  `percentage` decimal(10,2) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`foir_setting_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `foir_setting`
--

INSERT INTO `foir_setting` (`foir_setting_id`, `bank_id`, `income_source_id`, `liabilities`, `from_amount`, `to_amount`, `percentage`, `created_on`) VALUES
(1, '2', 'R', '1', '0.00', '10000.00', '1000000.00', '2016-10-15 08:04:36'),
(2, '1', 'N', '2', '10000.00', '100000.00', '10000000.00', '2016-10-15 08:06:28'),
(3, '1', 'R', '1', '0.00', '10000.00', '45.00', '2016-10-28 05:49:37'),
(4, '1', 'R', '1', '10001.00', '20000.00', '50.00', '2016-10-28 05:50:23'),
(5, '1', 'R', '1', '20001.00', '35000.00', '55.00', '2016-10-28 05:50:58'),
(6, '1', 'R', '2', '0.00', '10000.00', '40.00', '2016-10-28 05:52:14'),
(7, '1', 'R', '1', '10001.00', '20000.00', '45.00', '2016-10-28 05:52:39'),
(8, '1', 'R', '1', '20001.00', '35000.00', '50.00', '2016-10-28 05:53:27'),
(9, '2', 'R', '2', '0.00', '10000.00', '40.00', '2016-10-28 05:54:07'),
(10, '2', 'R', '2', '25001.00', '35000.00', '55.00', '2016-10-28 05:55:21'),
(11, '2', 'R', '1', '0.00', '10000.00', '45.00', '2016-10-28 05:55:49'),
(12, '2', 'R', '1', '10001.00', '25000.00', '55.00', '2016-10-28 05:56:16'),
(13, '1', 'N', '1', '0.00', '10000.00', '45.00', '2016-10-28 05:58:39'),
(14, '1', 'N', '1', '0.00', '0.00', '55.00', '2016-10-28 05:59:24'),
(15, '1', 'N', '2', '0.00', '0.00', '50.00', '2016-10-28 06:00:09'),
(16, '2', 'N', '1', '0.00', '0.00', '50.00', '2016-10-28 06:00:41'),
(17, '1', 'S', '1', '0.00', '10000.00', '45.00', '2016-10-28 06:01:28'),
(18, '1', 'S', '1', '10001.00', '20000.00', '50.00', '2016-10-28 06:02:05'),
(19, '1', 'S', '1', '20001.00', '35000.00', '55.00', '2016-10-28 06:02:45'),
(20, '1', 'S', '2', '0.00', '10000.00', '40.00', '2016-10-28 06:03:28'),
(21, '1', 'S', '2', '20001.00', '35000.00', '50.00', '2016-10-28 06:04:04'),
(22, '2', 'S', '1', '0.00', '10000.00', '40.00', '2016-10-28 06:04:43'),
(23, '2', 'S', '1', '10001.00', '25000.00', '55.00', '2016-10-28 06:05:30'),
(24, '2', 'S', '2', '0.00', '100000.00', '40.00', '2016-10-28 06:05:56'),
(25, '2', 'S', '2', '25001.00', '35000.00', '55.00', '2016-10-28 06:06:28');

-- --------------------------------------------------------

--
-- Table structure for table `generate_file`
--

CREATE TABLE IF NOT EXISTS `generate_file` (
  `generate_file_id` int(11) NOT NULL AUTO_INCREMENT,
  `income_source_id` varchar(3) NOT NULL,
  `emp_agn_name` varchar(250) NOT NULL,
  `emp_agn_email` varchar(250) NOT NULL,
  `emp_agn_mob` varchar(250) NOT NULL,
  `sr_bank_id` int(11) NOT NULL,
  `sr_state_id` int(11) NOT NULL,
  `cities_of_state_id` int(11) NOT NULL,
  `sr_loan_id` int(11) NOT NULL,
  `a_title` varchar(10) NOT NULL,
  `co_title` varchar(10) NOT NULL,
  `a_res_land` varchar(50) NOT NULL,
  `co_res_land` varchar(50) NOT NULL,
  `a_time` varchar(250) NOT NULL,
  `co_time` varchar(250) NOT NULL,
  `a_timmings` varchar(10) NOT NULL,
  `co_timmings` varchar(10) NOT NULL,
  `role` varchar(20) NOT NULL,
  `applicant_name` varchar(250) NOT NULL,
  `local_contact_name` varchar(250) NOT NULL,
  `a_country` varchar(250) NOT NULL,
  `co_applicant_name` varchar(250) NOT NULL,
  `a_father_name` varchar(250) NOT NULL,
  `co_father_name` varchar(250) NOT NULL,
  `a_spouse_name` varchar(250) NOT NULL,
  `co_spouse_name` varchar(250) NOT NULL,
  `a_gender` varchar(25) NOT NULL,
  `co_gender` varchar(25) NOT NULL,
  `a_present_address` text NOT NULL,
  `co_present_address` text NOT NULL,
  `a_permanent_address` text NOT NULL,
  `co_permanent_address` text NOT NULL,
  `a_dob` varchar(250) NOT NULL,
  `co_dob` varchar(250) NOT NULL,
  `a_pan_number` varchar(250) NOT NULL,
  `co_pan_number` varchar(250) NOT NULL,
  `a_personal_email` varchar(250) NOT NULL,
  `co_personal_email` varchar(250) NOT NULL,
  `a_mob` varchar(255) NOT NULL,
  `co_mob` varchar(255) NOT NULL,
  `a_city` varchar(250) NOT NULL,
  `co_city` varchar(250) NOT NULL,
  `a_adhar_no` varchar(250) NOT NULL,
  `co_adhar_no` varchar(250) NOT NULL,
  `a_employer_bussiness_name` varchar(250) NOT NULL,
  `co_employer_bussiness_name` varchar(250) NOT NULL,
  `a_employeer_address` text NOT NULL,
  `co_employeer_address` text NOT NULL,
  `a_office_phone` varchar(250) NOT NULL,
  `co_office_phone` varchar(250) NOT NULL,
  `a_office_email` varchar(250) NOT NULL,
  `co_office_email` varchar(250) NOT NULL,
  `a_hr_email` varchar(250) NOT NULL,
  `co_hr_email` varchar(250) NOT NULL,
  `property_address` varchar(250) NOT NULL,
  `seller_address` varchar(250) NOT NULL,
  `flat_plot_no` varchar(100) NOT NULL,
  `area` varchar(250) NOT NULL,
  `area_length` varchar(100) NOT NULL,
  `constructed_area` varchar(250) NOT NULL,
  `constructed_area_length` varchar(100) NOT NULL,
  `property_cost` int(255) NOT NULL,
  `loan_amount` int(255) NOT NULL,
  `processing_fee` int(20) NOT NULL,
  `tenure` int(11) NOT NULL,
  `cheque_no` varchar(250) NOT NULL,
  `interest_rate` decimal(10,0) NOT NULL,
  `bank_name` varchar(250) NOT NULL,
  `branch_name` varchar(250) NOT NULL,
  `urc_no` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`generate_file_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `generate_file`
--

INSERT INTO `generate_file` (`generate_file_id`, `income_source_id`, `emp_agn_name`, `emp_agn_email`, `emp_agn_mob`, `sr_bank_id`, `sr_state_id`, `cities_of_state_id`, `sr_loan_id`, `a_title`, `co_title`, `a_res_land`, `co_res_land`, `a_time`, `co_time`, `a_timmings`, `co_timmings`, `role`, `applicant_name`, `local_contact_name`, `a_country`, `co_applicant_name`, `a_father_name`, `co_father_name`, `a_spouse_name`, `co_spouse_name`, `a_gender`, `co_gender`, `a_present_address`, `co_present_address`, `a_permanent_address`, `co_permanent_address`, `a_dob`, `co_dob`, `a_pan_number`, `co_pan_number`, `a_personal_email`, `co_personal_email`, `a_mob`, `co_mob`, `a_city`, `co_city`, `a_adhar_no`, `co_adhar_no`, `a_employer_bussiness_name`, `co_employer_bussiness_name`, `a_employeer_address`, `co_employeer_address`, `a_office_phone`, `co_office_phone`, `a_office_email`, `co_office_email`, `a_hr_email`, `co_hr_email`, `property_address`, `seller_address`, `flat_plot_no`, `area`, `area_length`, `constructed_area`, `constructed_area_length`, `property_cost`, `loan_amount`, `processing_fee`, `tenure`, `cheque_no`, `interest_rate`, `bank_name`, `branch_name`, `urc_no`, `created_on`) VALUES
(1, 'R', 'punith', 'punith@gmail.com', '8799099888', 1, 2, 1, 1, 'mr', 'mrs', '09022209009', '09099989889', '19', '10', 'pm', 'am', 'emp', 'hemanth', '', '', 'spoorthy', 'devaraj', 'basappa', 'spoorthy', 'hemanth', 'male', 'female', 'Bangalore', 'Bangalore', 'Bangalore', 'Bangalore', '10/05/2016', '10/04/2016', '123', '456', 'hemant@gmail.com', 'spoo@gmail.com', '0900900999', '0900909999', 'bangalore', 'bangalore', '456', '789', 'pixsello', 'nippon express', 'Bangalore', 'Bangalore', '08022291882', '99900992', 'hemant@office.com', 'spoo@office.com', 'hr@pix.com', 'hr@nip.com', 'Bangalore', 'Bangalore', '909', '300', 'guntas', '4000', 'sq_metrs', 400000, 400000, 30, 4, 'kil1234', '9', 'Axis', 'jaynagar', 'hema100520161', '2016-10-24 12:16:01'),
(25, 'N', 'theertha', 'theertha@gmail.com', '9099099888', 1, 2, 2, 1, 'Mr.', '', '09099900998', '', '10', '', 'am', '', 'admin', 'Devaraju', 'Madhumathi', 'india', '', '', '', '', '', '', '', '', '', 'Bangalore', '', '10/04/2016', '', '', '', 'hemanthraj2009@gmail.com', '', '8988988999', '', 'bangalore', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 400000, 0, 0, '', '0', '', '', 'Deva1004201625', '2016-10-24 12:16:22'),
(30, 'R', 'Raj', 'raj@gmail.com', '2288988222', 1, 2, 1, 1, 'Mrs.', '', '09099900998', '', '10', '', 'pm', '', 'admin', 'Madhu', '', '', '', '', '', '', '', '', '', '', '', 'Bangalore', '', '10/04/2016', '', '', '', 'hemanthraj2009@gmail.com', '', '9099899000', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 400000, 0, 0, '', '0', '', '', 'Madh1004201630', '2016-10-24 12:16:42');

-- --------------------------------------------------------

--
-- Table structure for table `group_system`
--

CREATE TABLE IF NOT EXISTS `group_system` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `group_name` varchar(100) NOT NULL,
  `group_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `group_system`
--

INSERT INTO `group_system` (`group_id`, `group_name`, `group_created`) VALUES
(1, 'Home', '2016-07-16 07:56:05'),
(2, 'Friend', '2016-07-16 08:37:25'),
(3, 'Pixsello', '2016-07-15 07:21:06'),
(4, 'Testing', '2016-07-15 15:37:22'),
(5, 'Subscribe', '2016-10-15 08:17:33');

-- --------------------------------------------------------

--
-- Table structure for table `income_source`
--

CREATE TABLE IF NOT EXISTS `income_source` (
  `income_source_id` int(11) NOT NULL AUTO_INCREMENT,
  `income_source_name` varchar(250) NOT NULL,
  PRIMARY KEY (`income_source_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `income_source`
--

INSERT INTO `income_source` (`income_source_id`, `income_source_name`) VALUES
(1, 'Gross Income'),
(2, 'Net Income');

-- --------------------------------------------------------

--
-- Table structure for table `loan_documents`
--

CREATE TABLE IF NOT EXISTS `loan_documents` (
  `loan_document_id` int(11) NOT NULL AUTO_INCREMENT,
  `income_source_id` varchar(2) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL,
  PRIMARY KEY (`loan_document_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `loan_documents`
--

INSERT INTO `loan_documents` (`loan_document_id`, `income_source_id`, `bank_id`, `loan_id`) VALUES
(1, 'R', 1, 1),
(2, 'R', 2, 1),
(3, 'N', 1, 1),
(4, 'N', 2, 1),
(5, 'S', 1, 1),
(6, 'S', 2, 1),
(7, 'N', 2, 1),
(8, 'R', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `loan_documents_list`
--

CREATE TABLE IF NOT EXISTS `loan_documents_list` (
  `loan_document_list_id` int(11) NOT NULL AUTO_INCREMENT,
  `loan_document_id` int(11) NOT NULL,
  `document_id` int(11) NOT NULL,
  PRIMARY KEY (`loan_document_list_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `loan_documents_list`
--

INSERT INTO `loan_documents_list` (`loan_document_list_id`, `loan_document_id`, `document_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(6, 2, 2),
(7, 2, 3),
(8, 3, 19),
(9, 3, 20),
(10, 3, 21),
(11, 4, 19),
(12, 4, 20),
(13, 4, 21),
(14, 5, 46),
(15, 5, 47),
(16, 5, 48),
(17, 6, 46),
(18, 6, 47),
(19, 6, 48),
(20, 7, 45),
(21, 7, 19),
(22, 7, 20),
(23, 7, 21),
(24, 8, 1),
(25, 8, 2),
(26, 8, 3),
(27, 8, 4),
(28, 8, 5);

-- --------------------------------------------------------

--
-- Table structure for table `mail_configuration`
--

CREATE TABLE IF NOT EXISTS `mail_configuration` (
  `config_id` int(11) NOT NULL AUTO_INCREMENT,
  `id` char(32) NOT NULL,
  `protocal` varchar(100) NOT NULL,
  `charset` varchar(100) NOT NULL,
  `smtp_host` varchar(100) NOT NULL,
  `smtp_user` varchar(100) NOT NULL,
  `smtp_password` varchar(100) NOT NULL,
  `smtp_port` int(100) NOT NULL,
  `smtp_timeout` int(100) NOT NULL,
  `web_email` varchar(100) NOT NULL,
  `role` varchar(100) NOT NULL,
  PRIMARY KEY (`config_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `mail_configuration`
--

INSERT INTO `mail_configuration` (`config_id`, `id`, `protocal`, `charset`, `smtp_host`, `smtp_user`, `smtp_password`, `smtp_port`, `smtp_timeout`, `web_email`, `role`) VALUES
(1, 'eba5104b879310014f81379efe147abb', 'smtp', 'iso-8859-1', 'ssl://smtp.googlemail.com', 'hemanthraj2009@gmail.com', '123', 1, 1, 'hemanthraj2009@gmail.com', 'Admin'),
(2, 'eba5104b879310014f81379efe147abb', 'smtp', 'iso-8859-1', 'ssl://smtps.googlemails.com', 'hemanthraj2009@gmail.com', '123', 1, 1, 'hemanthraj2009@gmail.com', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `main_value_settings`
--

CREATE TABLE IF NOT EXISTS `main_value_settings` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tax_exemption_amount` decimal(10,2) NOT NULL,
  `tds` decimal(10,2) NOT NULL,
  `max_age_of_resident` int(11) NOT NULL,
  `max_age_of_nri` int(11) NOT NULL,
  `max_age_of_self_employee` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `main_value_settings`
--

INSERT INTO `main_value_settings` (`id`, `tax_exemption_amount`, `tds`, `max_age_of_resident`, `max_age_of_nri`, `max_age_of_self_employee`) VALUES
(1, '250000.00', '20.00', 60, 58, 65);

-- --------------------------------------------------------

--
-- Table structure for table `manage_file_process`
--

CREATE TABLE IF NOT EXISTS `manage_file_process` (
  `manage_file_process_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_process_id` int(11) NOT NULL,
  `process_id` int(11) NOT NULL,
  `income_source_id` varchar(3) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`manage_file_process_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=120 ;

--
-- Dumping data for table `manage_file_process`
--

INSERT INTO `manage_file_process` (`manage_file_process_id`, `file_process_id`, `process_id`, `income_source_id`, `created_on`) VALUES
(1, 14, 16, 'R', '2016-09-12 09:46:44'),
(2, 15, 16, 'R', '2016-09-12 09:46:47'),
(3, 16, 16, 'R', '2016-09-12 09:46:49'),
(4, 17, 16, 'R', '2016-09-12 09:46:52'),
(5, 20, 16, 'R', '2016-09-12 09:46:54'),
(6, 4, 1, 'R', '2016-09-12 09:48:47'),
(7, 5, 1, 'R', '2016-09-12 09:48:48'),
(8, 6, 1, 'R', '2016-09-12 09:48:48'),
(9, 12, 1, 'R', '2016-09-12 09:48:48'),
(10, 4, 2, 'R', '2016-09-12 09:50:13'),
(11, 5, 2, 'R', '2016-09-12 09:50:13'),
(12, 6, 2, 'R', '2016-09-12 09:50:13'),
(13, 12, 2, 'R', '2016-09-12 09:50:13'),
(14, 4, 14, 'R', '2016-09-12 09:51:44'),
(15, 5, 14, 'R', '2016-09-12 09:51:44'),
(16, 6, 14, 'R', '2016-09-12 09:51:44'),
(17, 12, 14, 'R', '2016-09-12 09:51:44'),
(18, 4, 4, 'R', '2016-09-12 09:52:43'),
(19, 5, 4, 'R', '2016-09-12 09:52:43'),
(20, 6, 4, 'R', '2016-09-12 09:52:43'),
(21, 12, 4, 'R', '2016-09-12 09:52:43'),
(22, 4, 13, 'R', '2016-09-12 09:54:10'),
(23, 7, 13, 'R', '2016-09-12 09:54:10'),
(24, 8, 13, 'R', '2016-09-12 09:54:10'),
(25, 9, 13, 'R', '2016-09-12 09:54:10'),
(26, 10, 13, 'R', '2016-09-12 09:54:10'),
(27, 12, 13, 'R', '2016-09-12 09:54:10'),
(28, 4, 15, 'R', '2016-09-12 09:55:01'),
(29, 8, 15, 'R', '2016-09-12 09:55:02'),
(30, 9, 15, 'R', '2016-09-12 09:55:02'),
(31, 10, 15, 'R', '2016-09-12 09:55:02'),
(32, 12, 15, 'R', '2016-09-12 09:55:02'),
(33, 14, 16, 'N', '2016-09-12 10:11:09'),
(34, 15, 16, 'N', '2016-09-12 10:11:09'),
(35, 16, 16, 'N', '2016-09-12 10:11:09'),
(36, 17, 16, 'N', '2016-09-12 10:11:09'),
(37, 20, 16, 'N', '2016-09-12 10:11:09'),
(38, 4, 1, 'N', '2016-09-12 10:33:38'),
(39, 5, 1, 'N', '2016-09-12 10:33:38'),
(40, 6, 1, 'N', '2016-09-12 10:33:38'),
(41, 12, 1, 'N', '2016-09-12 10:33:38'),
(42, 4, 2, 'N', '2016-09-12 10:34:19'),
(43, 5, 2, 'N', '2016-09-12 10:34:20'),
(44, 6, 2, 'N', '2016-09-12 10:34:20'),
(45, 12, 2, 'N', '2016-09-12 10:34:20'),
(46, 4, 14, 'N', '2016-09-12 10:34:48'),
(47, 5, 14, 'N', '2016-09-12 10:34:49'),
(48, 6, 14, 'N', '2016-09-12 10:34:49'),
(49, 12, 14, 'N', '2016-09-12 10:34:49'),
(50, 4, 4, 'N', '2016-09-12 10:35:16'),
(51, 5, 4, 'N', '2016-09-12 10:35:16'),
(52, 6, 4, 'N', '2016-09-12 10:35:16'),
(53, 12, 4, 'N', '2016-09-12 10:35:16'),
(54, 1, 5, 'N', '2016-09-12 10:35:51'),
(55, 3, 5, 'N', '2016-09-12 10:35:51'),
(56, 4, 13, 'N', '2016-09-12 10:36:31'),
(57, 7, 13, 'N', '2016-09-12 10:36:31'),
(58, 8, 13, 'N', '2016-09-12 10:36:31'),
(59, 9, 13, 'N', '2016-09-12 10:36:31'),
(60, 10, 13, 'N', '2016-09-12 10:36:31'),
(61, 12, 13, 'N', '2016-09-12 10:36:31'),
(62, 4, 15, 'N', '2016-09-12 10:36:59'),
(63, 8, 15, 'N', '2016-09-12 10:36:59'),
(64, 9, 15, 'N', '2016-09-12 10:36:59'),
(65, 10, 15, 'N', '2016-09-12 10:36:59'),
(66, 12, 15, 'N', '2016-09-12 10:36:59'),
(67, 14, 16, 'S', '2016-09-12 10:38:02'),
(68, 15, 16, 'S', '2016-09-12 10:38:02'),
(69, 16, 16, 'S', '2016-09-12 10:38:02'),
(70, 17, 16, 'S', '2016-09-12 10:38:02'),
(71, 20, 16, 'S', '2016-09-12 10:38:02'),
(72, 4, 1, 'S', '2016-09-12 10:38:24'),
(73, 5, 1, 'S', '2016-09-12 10:38:24'),
(74, 6, 1, 'S', '2016-09-12 10:38:24'),
(75, 12, 1, 'S', '2016-09-12 10:38:24'),
(76, 4, 2, 'S', '2016-09-12 10:38:46'),
(77, 5, 2, 'S', '2016-09-12 10:38:46'),
(78, 6, 2, 'S', '2016-09-12 10:38:46'),
(79, 12, 2, 'S', '2016-09-12 10:38:46'),
(80, 4, 3, 'S', '2016-09-12 10:39:18'),
(81, 5, 3, 'S', '2016-09-12 10:39:18'),
(82, 6, 3, 'S', '2016-09-12 10:39:18'),
(83, 12, 3, 'S', '2016-09-12 10:39:18'),
(84, 1, 6, 'S', '2016-09-12 10:40:12'),
(85, 3, 6, 'S', '2016-09-12 10:40:13'),
(86, 5, 6, 'S', '2016-09-12 10:40:13'),
(87, 6, 6, 'S', '2016-09-12 10:40:13'),
(88, 12, 6, 'S', '2016-09-12 10:40:13'),
(89, 1, 7, 'S', '2016-09-12 10:40:39'),
(90, 3, 7, 'S', '2016-09-12 10:40:39'),
(91, 5, 7, 'S', '2016-09-12 10:40:39'),
(92, 6, 7, 'S', '2016-09-12 10:40:39'),
(93, 12, 7, 'S', '2016-09-12 10:40:39'),
(94, 4, 15, 'S', '2016-09-12 10:41:19'),
(95, 8, 15, 'S', '2016-09-12 10:41:19'),
(96, 9, 15, 'S', '2016-09-12 10:41:19'),
(97, 10, 15, 'S', '2016-09-12 10:41:19'),
(98, 12, 15, 'S', '2016-09-12 10:41:19'),
(99, 1, 8, '', '2016-09-14 08:01:12'),
(100, 3, 8, '', '2016-09-14 08:01:12'),
(101, 12, 8, '', '2016-09-14 08:03:20'),
(102, 15, 8, '', '2016-09-14 08:03:20'),
(103, 16, 8, '', '2016-09-14 08:03:35'),
(104, 2, 9, '', '2016-09-14 08:06:24'),
(105, 1, 9, '', '2016-09-14 08:06:24'),
(106, 3, 9, '', '2016-09-14 08:06:51'),
(107, 15, 9, '', '2016-09-14 08:06:51'),
(108, 16, 9, '', '2016-09-14 08:07:03'),
(109, 1, 10, '', '2016-09-14 08:12:55'),
(110, 3, 10, '', '2016-09-14 08:12:55'),
(111, 4, 10, '', '2016-09-14 08:13:15'),
(112, 16, 10, '', '2016-09-14 08:13:15'),
(113, 19, 10, '', '2016-09-14 08:13:37'),
(114, 20, 10, '', '2016-09-14 08:13:37'),
(115, 1, 11, '', '2016-09-14 08:15:39'),
(116, 3, 11, '', '2016-09-14 08:15:39'),
(117, 4, 11, '', '2016-09-14 08:16:03'),
(118, 16, 11, '', '2016-09-14 08:16:03'),
(119, 18, 11, '', '2016-09-14 08:16:17');

-- --------------------------------------------------------

--
-- Table structure for table `offer`
--

CREATE TABLE IF NOT EXISTS `offer` (
  `offer_id` int(11) NOT NULL AUTO_INCREMENT,
  `offer_name` text NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`offer_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `offer`
--

INSERT INTO `offer` (`offer_id`, `offer_name`, `created_on`) VALUES
(1, 'Here is some Offer', '2016-10-15 10:48:28'),
(2, 'offer Here', '2016-10-15 10:56:07');

-- --------------------------------------------------------

--
-- Table structure for table `personal_loan`
--

CREATE TABLE IF NOT EXISTS `personal_loan` (
  `personal_loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_id` int(11) NOT NULL,
  `salary1` varchar(250) NOT NULL,
  `salary2` varchar(250) NOT NULL,
  `salary3` varchar(250) NOT NULL,
  `salary4` varchar(250) NOT NULL,
  `cat_a1` varchar(250) NOT NULL,
  `cat_a2` varchar(250) NOT NULL,
  `cat_a3` varchar(250) NOT NULL,
  `cat_a4` varchar(250) NOT NULL,
  `cat_b1` varchar(250) NOT NULL,
  `cat_b2` varchar(250) NOT NULL,
  `cat_b3` varchar(250) NOT NULL,
  `cat_b4` varchar(250) NOT NULL,
  `cat_c1` varchar(250) NOT NULL,
  `cat_c2` varchar(250) NOT NULL,
  `cat_c3` varchar(250) NOT NULL,
  `cat_c4` varchar(250) NOT NULL,
  `self_employee1` varchar(250) NOT NULL,
  `self_employee2` varchar(250) NOT NULL,
  `processing_fee1` varchar(250) NOT NULL,
  `processing_fee2` varchar(250) NOT NULL,
  `tenure1` varchar(250) NOT NULL,
  `preclosure_charge1` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`personal_loan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `personal_loan`
--

INSERT INTO `personal_loan` (`personal_loan_id`, `bank_id`, `salary1`, `salary2`, `salary3`, `salary4`, `cat_a1`, `cat_a2`, `cat_a3`, `cat_a4`, `cat_b1`, `cat_b2`, `cat_b3`, `cat_b4`, `cat_c1`, `cat_c2`, `cat_c3`, `cat_c4`, `self_employee1`, `self_employee2`, `processing_fee1`, `processing_fee2`, `tenure1`, `preclosure_charge1`, `created_on`) VALUES
(1, 1, 'Upto 25000', '35000 to 50000', '50000 to 75000', 'Above 75000', '17%', '17%', '16%', '15.50%', '17.50%', '17%', '16.50%', '16%', '18%', '17.50%', '16.50%', '16%', '16 - 18%', '', 'Cat A - 1%  , Cat B & C - 2%', 'Self-employed 2%', 'Min 1 Year Max 4 Years', '2%', '2016-09-26 05:27:43'),
(2, 2, 'Upto 25000', '35000 to 50000', '50000 to 75000', 'Above 75000', '17.50%', '16%', '15.50%', '15%', '17.50%', '16.50%', '16%', '15.50%', '18%', '17%', '16.50%', '16%', '16 - 18%', '', 'Salaried 2%', 'Self-employed 2%', 'Min 1 Years  Max 5 Years', 'Nill', '2016-09-26 05:33:17'),
(4, 3, 'Upto 25000', '35000 to 50000', '50000 to 75000', 'Above 75000', '17%', '16.50%', '15.50%', '15.50%', '17.50%', '17%', '16%', '15%', '18%', '17%', '16.50%', '16%', '16 - 17.50%', '', 'Cat A - 1%  , Cat B & C - 2%', 'Self-employed 2%', 'Min 1 Year Max 4  Years', '2% - 4%', '2016-09-26 05:38:10'),
(5, 4, 'Upto 25000', '35000 to 50000', '50000 to 75000', 'Above 75000', '16.50%', '16%', '15%', '15%', '16.50%', '16.50%', '16%', '16%', '17.50%', '17.50%', '17%', '17%', '16 - 18%', '', 'Cat A - 1%  , Cat B & C - 2%', 'Self-employed 2%', 'Min 1 Year Max 4 Years', 'Min 2% - 4 %', '2016-09-26 05:40:38'),
(6, 5, 'Upto 25000', '35000 to 50000', '50000 to 75000', 'Above 75000', '18%', '17.50%', '17.50%', '18%', '18%', '18%', '17%', '17%', '18%', '18%', '18%', '18%', 'Self Employed 18%', 'SBI Salary Credit Customers 15.50%', 'Nill', '', 'Min 1 Year Max 4 Years', 'Nill', '2016-09-26 06:20:05'),
(7, 6, 'Upto 25000', '35000 to 50000', '50000 to 75000', 'Above 75000', '16%', '16%', '15%', '15%', '16.50%', '16.50%', '15.50%', '15.50%', '16.50%', '16.50%', '16.50%', '16.50%', '17%', '', '2%', '', 'Min 1 Year Max 4 Years', 'Nill', '2016-09-26 06:22:09'),
(8, 7, 'Upto 25000', '35000 to 50000', '50000 to 75000', 'Above 75000', '15.50%', '15%', '14.50%', '14%', '16.50%', '16%', '15.50%', '15%', '17.50%', '17.25%', '17%', '17%', '17.50%', '', '1% - 2%', '', 'Min 1 Year Max 4 Years', 'Nill', '2016-09-26 06:28:28');

-- --------------------------------------------------------

--
-- Table structure for table `process`
--

CREATE TABLE IF NOT EXISTS `process` (
  `process_id` int(11) NOT NULL AUTO_INCREMENT,
  `process_name` varchar(255) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`process_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `process`
--

INSERT INTO `process` (`process_id`, `process_name`, `created_on`) VALUES
(1, 'Residence', '2016-09-02 12:19:56'),
(2, 'Office', '2016-09-02 12:28:38'),
(3, 'IT-Returns', '2016-09-02 12:20:27'),
(4, 'Bank Statement', '2016-09-02 12:20:46'),
(5, 'Bank Statement (Local)', '2016-09-02 12:20:56'),
(6, 'Bank Statement (CA)', '2016-09-02 12:21:05'),
(7, 'Bank Statement (SB)', '2016-09-02 12:21:13'),
(8, 'Eligibility Process', '2016-09-02 12:21:23'),
(9, 'Sanction Status', '2016-09-02 12:21:31'),
(10, 'Legal Scrutiny', '2016-09-02 12:21:38'),
(11, 'Technical Verification', '2016-09-02 12:21:49'),
(12, 'Disbursement Process Stage', '2016-09-02 12:21:57'),
(13, 'HR-Mail Response', '2016-09-02 12:22:03'),
(14, 'Payslip', '2016-09-02 12:22:11'),
(15, 'Cibil', '2016-09-02 12:22:21'),
(16, 'Login', '2016-09-02 12:22:29'),
(17, 'Personal Discussion(PD)', '2016-09-02 12:22:37');

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE IF NOT EXISTS `profiles` (
  `id` char(32) NOT NULL DEFAULT '',
  `userId` char(32) NOT NULL DEFAULT '',
  `firstName` varchar(100) NOT NULL DEFAULT '',
  `lastName` varchar(100) NOT NULL DEFAULT '',
  `gender` varchar(10) DEFAULT '',
  `dob` varchar(250) DEFAULT NULL,
  `mobile` varchar(20) DEFAULT NULL,
  `alternative_mob` varchar(20) DEFAULT NULL,
  `address` text,
  `country` varchar(50) DEFAULT 'INDIA',
  `region` varchar(100) DEFAULT NULL,
  `city` varchar(100) DEFAULT NULL,
  `zipcode` varchar(20) DEFAULT NULL,
  `photoUrl` text,
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `userId`, `firstName`, `lastName`, `gender`, `dob`, `mobile`, `alternative_mob`, `address`, `country`, `region`, `city`, `zipcode`, `photoUrl`, `createdOn`, `updatedOn`) VALUES
('eba5104b879310014f81379efe147abb', 'e537e360277de8ba1904996099b88c8f', 'hemanth', 'kumar', 'Male', '10/04/2016', '8722800999', '08022299009', 'Banalore', 'india', 'karnataka', 'bangalore', '560078', '13095915_1188741744517915_5682074321101394058_n.jpg', '2015-11-21 13:16:41', '2016-10-17 05:28:59');

-- --------------------------------------------------------

--
-- Table structure for table `sr_agency`
--

CREATE TABLE IF NOT EXISTS `sr_agency` (
  `sr_agency_id` int(11) NOT NULL AUTO_INCREMENT,
  `sr_state_id` int(11) NOT NULL,
  `cities_of_state_id` int(11) NOT NULL,
  `bank_id` int(11) NOT NULL,
  `agency_name` varchar(255) NOT NULL,
  `agency_address` text NOT NULL,
  `contact_person` varchar(255) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `sms_approve` varchar(10) NOT NULL,
  `email_approve` varchar(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sr_agency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sr_agency`
--

INSERT INTO `sr_agency` (`sr_agency_id`, `sr_state_id`, `cities_of_state_id`, `bank_id`, `agency_name`, `agency_address`, `contact_person`, `phone`, `mobile`, `email`, `username`, `password`, `status`, `sms_approve`, `email_approve`, `created_on`) VALUES
(1, 2, 2, 2, 'Pixsello', '# 4008 2nd stage 10th main 16th cross kumarswamy layout bangalore-78', 'Hemanth', '8722800555', '8722800555', 'hemanthraj2009@gmail.com', 'hemanthraj', '202cb962ac59075b964b07152d234b70', '1', '1', '1', '2016-11-02 05:05:11'),
(2, 2, 2, 2, 'Testing Name', 'Bangalore', 'Raj', '8988988999', '8988788777', 'Testing@Email.com', 'dsa', '202cb962ac59075b964b07152d234b70', '1', '1', '1', '2016-11-02 05:05:23');

-- --------------------------------------------------------

--
-- Table structure for table `sr_agency_profile`
--

CREATE TABLE IF NOT EXISTS `sr_agency_profile` (
  `sr_agency_profile` int(11) NOT NULL AUTO_INCREMENT,
  `sr_agency_id` int(11) NOT NULL,
  `agency_name` varchar(250) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `photoUrl` text NOT NULL,
  `alternative_mob` varchar(20) NOT NULL,
  `dob` varchar(250) NOT NULL,
  `parmenent_address` text NOT NULL,
  `present_address` text NOT NULL,
  `city` varchar(250) NOT NULL,
  `region` varchar(250) NOT NULL,
  `zipcode` varchar(20) NOT NULL,
  `country` varchar(250) NOT NULL,
  `mobile` int(20) NOT NULL,
  `email` varchar(250) NOT NULL,
  `username` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sr_agency_profile`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sr_agency_profile`
--

INSERT INTO `sr_agency_profile` (`sr_agency_profile`, `sr_agency_id`, `agency_name`, `gender`, `photoUrl`, `alternative_mob`, `dob`, `parmenent_address`, `present_address`, `city`, `region`, `zipcode`, `country`, `mobile`, `email`, `username`, `created_on`) VALUES
(1, 1, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '2016-10-26 10:27:55'),
(2, 2, '', '', '', '', '', '', '', '', '', '', '', 0, '', '', '2016-10-26 10:47:49');

-- --------------------------------------------------------

--
-- Table structure for table `sr_bank`
--

CREATE TABLE IF NOT EXISTS `sr_bank` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `BankCode` varchar(200) NOT NULL,
  `BankName` varchar(250) NOT NULL,
  `Computeon` varchar(2) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sr_bank`
--

INSERT INTO `sr_bank` (`id`, `BankCode`, `BankName`, `Computeon`, `created_on`) VALUES
(1, 'Gross Income', 'Banks Considering Gross Income', 'G', '2016-08-04 06:11:31'),
(2, 'Net Income', 'Banks Considering Net Income', 'N', '2016-08-04 06:11:43');

-- --------------------------------------------------------

--
-- Table structure for table `sr_bank_loan`
--

CREATE TABLE IF NOT EXISTS `sr_bank_loan` (
  `sr_bank_loan_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_id` int(11) NOT NULL,
  `loan_id` int(11) NOT NULL,
  `res_min_interest` decimal(10,2) NOT NULL,
  `res_max_interest` decimal(10,2) NOT NULL,
  `res_max_tenure` int(11) NOT NULL,
  `add_bank_it` decimal(10,2) NOT NULL,
  `nri_min_interest` decimal(10,2) NOT NULL,
  `nri_max_interest` decimal(10,2) NOT NULL,
  `nri_max_tenure` int(11) NOT NULL,
  `applicable_to_nri` varchar(250) NOT NULL,
  PRIMARY KEY (`sr_bank_loan_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=22 ;

--
-- Dumping data for table `sr_bank_loan`
--

INSERT INTO `sr_bank_loan` (`sr_bank_loan_id`, `bank_id`, `loan_id`, `res_min_interest`, `res_max_interest`, `res_max_tenure`, `add_bank_it`, `nri_min_interest`, `nri_max_interest`, `nri_max_tenure`, `applicable_to_nri`) VALUES
(1, 1, 1, '9.60', '10.25', 25, '4000.00', '9.60', '10.25', 15, 'True'),
(2, 1, 2, '9.60', '10.25', 25, '4000.00', '9.60', '10.25', 15, 'True'),
(3, 1, 3, '9.60', '10.25', 25, '0.00', '9.60', '10.25', 10, 'True'),
(4, 1, 5, '12.50', '13.75', 10, '0.00', '12.50', '13.75', 10, 'True'),
(5, 1, 6, '9.60', '10.25', 25, '4000.00', '9.60', '10.25', 15, 'True'),
(6, 1, 7, '9.60', '10.25', 25, '4000.00', '9.60', '10.25', 15, 'True'),
(7, 1, 14, '9.75', '10.25', 25, '4000.00', '9.75', '10.25', 15, 'True'),
(8, 1, 15, '9.75', '10.25', 15, '0.00', '9.75', '10.25', 10, 'True'),
(9, 2, 1, '9.30', '10.25', 25, '4000.00', '9.30', '10.25', 15, 'True'),
(10, 2, 2, '9.30', '10.25', 25, '4000.00', '9.30', '10.25', 15, 'True'),
(11, 2, 3, '9.30', '10.25', 15, '0.00', '9.30', '10.25', 10, 'True'),
(12, 2, 5, '12.50', '13.50', 15, '0.00', '0.00', '0.00', 0, 'False'),
(13, 2, 6, '9.30', '10.25', 25, '4000.00', '9.30', '10.25', 15, 'True'),
(14, 2, 7, '9.30', '10.25', 25, '4000.00', '9.30', '10.25', 15, 'True'),
(15, 2, 9, '13.00', '14.50', 10, '0.00', '0.00', '0.00', 0, 'False'),
(16, 2, 10, '9.30', '10.25', 25, '4000.00', '9.30', '10.25', 15, 'True'),
(17, 2, 11, '13.00', '14.50', 10, '0.00', '0.00', '0.00', 0, 'False'),
(18, 2, 14, '9.50', '10.25', 20, '4000.00', '9.50', '10.25', 10, 'True'),
(19, 2, 15, '9.50', '10.25', 10, '0.00', '9.50', '10.25', 10, 'True'),
(20, 1, 0, '0.00', '0.00', 0, '0.00', '0.00', '0.00', 0, 'True'),
(21, 0, 0, '0.00', '0.00', 0, '0.00', '0.00', '0.00', 0, 'True');

-- --------------------------------------------------------

--
-- Table structure for table `sr_documents`
--

CREATE TABLE IF NOT EXISTS `sr_documents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `doc_code` varchar(250) NOT NULL,
  `doc_name` varchar(250) NOT NULL,
  `income_source` varchar(2) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=66 ;

--
-- Dumping data for table `sr_documents`
--

INSERT INTO `sr_documents` (`id`, `doc_code`, `doc_name`, `income_source`, `created_on`) VALUES
(1, 'ID & Age Proof', 'PAN Card,Passport,Driving License,Voter ID', 'R', '2016-08-03 08:19:18'),
(2, 'Address Proof', 'Passport,Voter ID,HR Letter,Salary Credited Bank Statement,Rental Agreement,Electricity Bill,Gas Bill & Bond', 'R', '2016-08-08 13:44:22'),
(3, 'Income Proof', 'Latest 3 Months Pay slips', 'R', '2016-08-08 13:44:39'),
(4, 'HR Mail Id', 'HR Mail ID for Employment Verification', 'R', '2016-08-08 13:44:53'),
(5, 'Form 16', 'Latest 2 Years Form 16.', 'R', '2016-08-08 13:45:13'),
(6, 'If Work Experience is less than 2 years in present company', 'Previous Company releaving letter, Experience Letter, Present Company appoinment Letter', 'R', '2016-08-08 13:45:27'),
(7, 'Photograph', 'One photograph of Applicant and Co-applicant with self attestation.', 'R', '2016-08-08 13:46:10'),
(8, 'Property Documents- Flat or Independent', 'Agreement of Sale in favour of Applicants, Link Documents For last 15 Years(Past registration deeds and documents), Municipal / Grampanchayat / UDA Approved plan, Encumbrance Certificate(EC)', 'R', '2016-08-08 13:46:30'),
(9, 'Signature proof', 'One cheque from the salary A/c of the applicant', 'R', '2016-08-08 13:46:52'),
(10, 'Property Documents - Plot', 'Agreement of sale infavour of Applicants, Link Documents for Last 15 years(Past registration deeds and Pahanis), Attested Lay Out copy , Encumberance Certificate (EC).', 'R', '2016-08-08 13:47:15'),
(11, 'Balance Transfer Additional Documents', 'One year track record, List of Documents deposited, Current outstanding letter', 'R', '2016-08-08 13:47:34'),
(12, 'Property Documents', 'Sale Deed, Link Documents for last 15 years (Previous registration deeds and pahanais), Municipal Approved Plan, Encumberance certificate(EC), Latest tax paid reciept', 'R', '2016-08-08 13:47:45'),
(13, 'Property Documents- Resale (Flat or Independent)', 'Agreement of sale in favour of Applicants, Link documents for last 15 years, Municipal / Grampanchayat /UDA Approved Plan, Encumberance certificate(EC) for last 15 years, Latest Tax paid reciepts.', 'R', '2016-08-08 13:48:03'),
(14, 'Estimations', 'Abstract and detailed estimations for the house being constructed(Projected cost of construction).', 'R', '2016-08-08 13:48:20'),
(15, 'Additional Documents (Vendor Liability)', 'Vendor Loan Account statement,Outstanding Letter, List of Documents Deposited with the Bank', 'R', '2016-08-08 13:48:42'),
(16, 'Property Documents (PLOT)', 'Sale Deed, Link Documents for last 15 years (Past registration deed and documents), Encumburance Certificate till date, Approved Layout Copy', 'R', '2016-08-08 13:49:02'),
(17, 'Additional Estimations', 'Abstract and Detailed Estimations of the additional works.', 'R', '2016-08-08 13:49:12'),
(18, 'Secondary ID Proof', 'Aadhar,Driving License,Voter Id,Passport', 'R', '2016-08-08 13:49:34'),
(19, 'Pay Slips', 'Last 3 months payslips (i.e 6 pay slips of 15 days each)', 'N', '2016-08-08 13:50:08'),
(20, 'Bank Statement', 'Six months Bank statement where salary is being credited (every month summary and complete transactions)', 'N', '2016-08-08 13:50:43'),
(21, 'NRE / NRO (India ) Account statement', 'Six months bank statement of NRE/NRO account where amounts are frequently transferred from abroad', 'N', '2016-08-08 13:51:10'),
(22, 'Passport', 'Complete 32 pages of Passport photocopy.', 'N', '2016-08-08 13:51:27'),
(23, 'Visa', 'Latest Visa photo Copy', 'N', '2016-08-08 13:51:45'),
(24, 'Resume', 'Complete profile of applicant with previous experiences', 'N', '2016-08-08 13:52:02'),
(25, 'Company profile', 'Company profile ( Nature of Business, no of employees and other useful data)', 'N', '2016-08-08 13:52:22'),
(26, 'W2 forms', 'W2 forms of last 3 years (Employer Tax deducted copy)', 'N', '2016-08-08 13:52:38'),
(27, 'Address proof', 'Abroad address proof', 'N', '2016-08-08 13:52:54'),
(28, 'GPA format', 'GPA copy which is to be notarised there', 'N', '2016-08-08 14:01:09'),
(29, 'HR Mail ID', 'HR mail ID for employment verification', 'N', '2016-08-08 14:01:29'),
(30, 'Appointment letter', 'Appointment letter and confirmation letter of service', 'N', '2016-08-08 14:01:57'),
(31, 'If work experience is less than 2 years in present company', 'Then previous company Releaving letter, Experience letter, Present company appointment Letter.', 'N', '2016-08-08 14:07:15'),
(32, 'Qualifications', 'All Qualification certificates.', 'N', '2016-08-08 14:07:36'),
(33, 'One cheaque', 'One cheaque leaf towards the processing fee from NRE/NRO Account.', 'N', '2016-08-08 14:08:00'),
(34, 'Photographs', '2 photographs of applicant and co-applicant.', 'N', '2016-08-08 14:08:35'),
(35, 'Property Documents (New - Flat Or Independent)', 'Flat Or Independent)	Agreement of sale infavour of Applicants, Link Documents For last 15 years, Encumberance Certificate for last 15 Years, Municipal/Grampanchayat/ UDA Approved Plan.', 'N', '2016-08-08 14:12:29'),
(36, 'Property Documents(Resale- Flat or Independent)', 'Agreement of Sale infavour of applicants, Link Documents for Last 15 Years, Municipal /Grampanchayat / UDA Approved plan, Encumberance for last 15 years, Latest Tax paid reciept', 'N', '2016-08-08 14:12:33'),
(37, 'Property documents', 'Sale Deed infavour of applicants, Link Documents for last 15 years, Encumberance certificate for last 15 years, Municipal / Grampanchayat / UDA approved plan, Latest Tax paid reciept', 'N', '2016-08-08 14:12:36'),
(38, 'Estimations', 'Abstract and detailed estimations required for the house being constructed(Projected cost of construction)', 'N', '2016-08-08 14:12:39'),
(39, 'Balance transfer(BT) Additional Documents', 'One year track record, List Of documents deposited, Outstanding letter', 'N', '2016-08-08 14:12:43'),
(40, 'Property documents- Plot', 'Agreement of sale, Link documents for last 15 years, Lay out copy,Encumberance certificate(EC)', 'N', '2016-08-08 14:12:44'),
(41, 'ID proof- GPA', 'PAN Card, Passport, Driving License, Voters ID', 'N', '2016-08-08 14:12:47'),
(42, 'Residential Proof -GPA', 'Latest Telephone bill, Electricity bill, Passport, Driving license, Lease agreement, Sale deed', 'N', '2016-08-08 14:12:49'),
(43, 'Additional Documents (Vendor Liability)', 'Vendor Loan Account statement,Outstanding Letter, List of Documents Deposited with the Bank', 'N', '2016-08-08 14:12:54'),
(44, 'Additional Estimations', 'Abstract and Detailed Estimations of the additional works.', 'N', '2016-08-08 14:12:56'),
(45, 'ID & Age Proof', 'Passport,PAN Card,Abroad Driving License,Company ID Cards', 'N', '2016-08-08 14:12:59'),
(46, 'ID Proof', 'PAN Card, Passport, Voter ID, Driving License', 'S', '2016-08-08 14:20:31'),
(47, 'Residential Proof', 'Latest Electricity Bill, Latest Telephone Bill, Passport, Voter ID, Driving License', 'S', '2016-08-08 14:20:34'),
(48, 'Age Proof', 'PAN Card, Passport, Driving License, SSC Memo, Birth Certificate', 'S', '2016-08-08 14:20:36'),
(49, 'Income proof - Company', 'Latest 3 years IT returns of the company with CA attestation.', 'S', '2016-08-08 14:20:38'),
(50, 'Banking - Current Account(CA)', 'Original till date banks statement required for the last one year', 'S', '2016-08-08 14:20:40'),
(51, 'Banking Savings Account(SB)', 'Original till date bank statement required for the last one year', 'S', '2016-08-08 14:20:45'),
(52, 'Business Proof', 'Latest 3 years municipal registration proofs', 'S', '2016-08-08 14:20:46'),
(53, 'Photographs', 'One photograph of applicant and co-applicant.', 'S', '2016-08-08 14:20:49'),
(54, 'Additional Documents- Balance transfer(BT)', 'One year track record,List of documents deposited, Current outstanding letter', 'S', '2016-08-08 14:20:51'),
(55, 'Property Documents', 'Sale deed infavour of applicants, Link documents for last 15 years, Municipal Approved Plan, Encumberance certificate(EC), Latest Tax paid reciept.', 'S', '2016-08-08 14:20:53'),
(56, 'Property Documents- New Flat or independent house', 'Agreement of sale infavour of applicants, Link documents for last 15 years, Encumberance certificate(EC), Municipal / Grampanchayat / UDA Approved plan', 'S', '2016-08-08 14:20:55'),
(57, 'Property Documents - Resale Flat or Independent house', 'Agreement of sale infavour of applicants, Link documents for last 15 years, Municipal approved plan, Encumberance certificate(EC), Latest tax paid reciept.', 'S', '2016-08-08 14:20:57'),
(58, 'Property Documents- Plot', 'Agreement of sale infavour of applicants, Link documents for last 15 years, Encumberance certificate, Approved Lay out copy.', 'S', '2016-08-08 14:21:00'),
(59, 'Estimations', 'Abstract and detailed estimations required for the house being constructed(Projected cost of construction)', 'S', '2016-08-08 14:21:02'),
(60, 'Signature proof', 'One cheaque from CA or SB account of applicant', 'S', '2016-08-08 14:21:04'),
(61, 'Profile', 'Detailed report of Company profile and the nature of business', 'S', '2016-08-08 14:21:06'),
(62, 'Income Proof - Personal', 'Latest 3 years IT returns with CA attestation.', 'S', '2016-08-08 14:21:13'),
(63, 'Additional Documents (Vendor Liability)', 'Vendor Loan Account statement,Outstanding Letter, List of Documents Deposited with the Bank.', 'S', '2016-08-08 14:21:10'),
(64, 'Property Documents (PLOT)', 'Sale Deed infavour of applicants, Link Documents for last 15 years (Past registration deed and documents), Encumburance Certificate till date, Approved Layout Copy.', 'S', '2016-08-08 14:21:15'),
(65, 'Additional Estimations', 'Abstract and Detailed Estimations of the additional works.', 'S', '2016-08-08 14:21:17');

-- --------------------------------------------------------

--
-- Table structure for table `sr_draft`
--

CREATE TABLE IF NOT EXISTS `sr_draft` (
  `sr_draft_id` int(11) NOT NULL AUTO_INCREMENT,
  `draft_category_name` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sr_draft_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sr_draft`
--

INSERT INTO `sr_draft` (`sr_draft_id`, `draft_category_name`, `created_on`) VALUES
(1, 'Agreement of Sale', '2016-09-21 05:45:27'),
(2, 'Deed of Partnership', '2016-09-20 08:11:33'),
(3, 'Agreement of sale Cum General Power of Attorney(AGPA)', '2016-09-20 08:12:17'),
(4, 'Construction Agreement', '2016-09-20 08:12:17'),
(5, 'Rental Agreement', '2016-09-20 08:12:36'),
(6, 'FLAT - Drafts', '2016-09-20 08:12:36'),
(7, 'Independent House - Drafts', '2016-09-20 08:12:59'),
(8, 'PLOT - Drafts', '2016-09-20 08:12:59');

-- --------------------------------------------------------

--
-- Table structure for table `sr_draft_settings`
--

CREATE TABLE IF NOT EXISTS `sr_draft_settings` (
  `sr_draft_settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `sr_draft_id` int(11) NOT NULL,
  `draft_agreement_title` varchar(250) NOT NULL,
  `select_draft_file` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sr_draft_settings_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `sr_draft_settings`
--

INSERT INTO `sr_draft_settings` (`sr_draft_settings_id`, `sr_draft_id`, `draft_agreement_title`, `select_draft_file`, `created_on`) VALUES
(1, 1, 'For Flats', 'Agreement_of_sale_-_Flat.doc', '2016-09-21 05:47:31'),
(2, 1, 'For Plots', 'Agreement_of_sale_-_Plot.doc', '2016-09-20 11:45:45'),
(3, 1, 'For Independent Houses/ Dupelex / Villas', 'Agreement_of_sale_-_Independent_House.doc', '2016-09-20 11:46:24'),
(4, 1, 'For Independent Houses/ Dupelex / Villas by GPA or AGPA seller', 'Agreement_of_sale_-_GPA_or_AGPA.doc', '2016-09-20 11:47:18'),
(5, 2, 'Deed of Partnership', 'DEED_OF_PARTNERSHIP.doc', '2016-09-20 11:58:39'),
(6, 3, 'Agreement of sale Cum General Power of Attorney(AGPA)', 'AGREEMENT_OF_SALE_CUM_GPA.doc', '2016-09-20 11:59:36'),
(7, 4, 'Construction Agreement', 'Construction_Agreement.doc', '2016-09-20 11:59:56'),
(8, 5, 'Rental Agreement', 'Rental_Agreement.doc', '2016-09-20 12:00:23'),
(9, 6, 'Gift Deed', 'Pure_Gift-_Flat.doc', '2016-10-18 05:52:37'),
(10, 6, 'Gift to Charitable Trust', 'Gift_to_charitable-Flat.doc', '2016-10-18 05:52:53'),
(11, 6, 'Gift to Family Members', 'Gift_to_family-Flat.doc', '2016-10-18 05:53:09'),
(12, 6, 'Gift to other than Family Members', 'Giftto_other_family-Flat.doc', '2016-10-18 05:53:29'),
(13, 6, 'Lease Agreement', 'Lease_Agreement_-_Flat.doc', '2016-10-18 05:54:03'),
(14, 6, 'Mortgage with out posession', 'Mortgage_with_out_Posession_-_Flat.doc', '2016-10-18 05:54:28'),
(15, 6, 'Mortgage with posession', 'Mortgage_with_Posession_Flat.doc', '2016-10-18 05:55:01'),
(16, 6, 'Release Deed', 'Release_deed_-_Flat.doc', '2016-10-18 05:55:24'),
(17, 6, 'Sale Deed - Sold by a Builder', 'Sale_Deed_Flat-_Builder.doc', '2016-10-18 05:55:39'),
(18, 6, 'Sale Deed - Sold by an Individual', 'SALE_DEED_Flat.doc', '2016-10-18 05:55:52'),
(19, 7, 'Gift Deed', 'Pure_Gift_Independent-_House.doc', '2016-10-18 05:56:27'),
(20, 7, 'Gift to Charitable Trust', 'Gift_to_charitable_trust-_House.doc', '2016-10-18 05:56:55'),
(21, 7, 'Gift to family', 'Gift_to_other_than_family.doc', '2016-10-18 05:57:05'),
(22, 7, 'Gift to other than family', 'Lease_Agreement_-_House.doc', '2016-10-18 05:57:13'),
(23, 7, 'Lease Agreement', 'Mortgage_with_out_-_House.doc', '2016-10-18 05:57:22'),
(24, 7, 'Mortgage with out posession', 'Mortgage_with_posession-_House.doc', '2016-10-18 05:57:30'),
(25, 7, 'Mortgage with posession', 'Release_deed_indepen-_House.doc', '2016-10-18 05:57:38'),
(26, 7, 'Release Deed', 'Sale_deed_House_by_GPA-_House.doc', '2016-10-18 05:57:48'),
(27, 7, 'Sale Deed - Sold by a GPA Holder', 'Sale_deed_direct-_House.doc', '2016-10-18 05:58:29'),
(28, 8, 'PLOT - Drafts', 'Pure_Gift_Deed-Plot.doc', '2016-09-20 12:45:37'),
(29, 8, 'PLOT - Drafts', 'Gift_to_charitable-_Plot.doc', '2016-09-20 12:45:55'),
(30, 8, 'PLOT - Drafts', 'Gift_to_family-_Plot.doc', '2016-09-20 12:46:19'),
(31, 8, 'PLOT - Drafts', 'Gift_to_other_than_family-_Plot.doc', '2016-09-20 12:46:41'),
(32, 8, 'PLOT - Drafts', 'Lease_agreement-Plot.doc', '2016-09-20 12:47:02'),
(33, 8, 'PLOT - Drafts', 'Mortgage_with_out-Plot.doc', '2016-09-20 12:47:19'),
(34, 8, 'PLOT - Drafts', 'Mortgage_with_posession_-Plot.doc', '2016-09-20 12:47:45'),
(35, 8, 'PLOT - Drafts', 'Release_deed_plot.doc', '2016-09-20 12:48:03'),
(36, 8, 'PLOT - Drafts', 'Sale_deed-Plot.doc', '2016-09-20 12:48:15'),
(37, 8, 'PLOT - Drafts', 'Sale_Deed_Plot_GPA.doc', '2016-09-20 12:48:30');

-- --------------------------------------------------------

--
-- Table structure for table `sr_employee`
--

CREATE TABLE IF NOT EXISTS `sr_employee` (
  `sr_employee_id` int(11) NOT NULL AUTO_INCREMENT,
  `emp_name` varchar(255) NOT NULL,
  `father_name` varchar(255) NOT NULL,
  `photoUrl` text NOT NULL,
  `dob` varchar(250) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `parmenent_address` text NOT NULL,
  `present_address` text NOT NULL,
  `city` varchar(250) NOT NULL,
  `region` varchar(250) NOT NULL,
  `zipcode` int(20) NOT NULL,
  `country` varchar(250) NOT NULL,
  `mobile` int(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sr_employee_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `sr_employee`
--

INSERT INTO `sr_employee` (`sr_employee_id`, `emp_name`, `father_name`, `photoUrl`, `dob`, `gender`, `parmenent_address`, `present_address`, `city`, `region`, `zipcode`, `country`, `mobile`, `email`, `username`, `password`, `status`, `created_on`) VALUES
(1, 'Hemanthraj', 'devaraju', '13015414_1188741811184575_8423868786076664449_n.jpg', '2016-10-05', 'Male', 'Bangalore', 'bangalore', 'bangalore', 'Karnataka', 560078, 'India', 2147483647, 'hemanthraj2009@gmail.com', 'hemanthraj', '202cb962ac59075b964b07152d234b70', '1', '2016-11-02 04:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `sr_interest_rate`
--

CREATE TABLE IF NOT EXISTS `sr_interest_rate` (
  `intrest_rate_id` int(11) NOT NULL AUTO_INCREMENT,
  `bank_id` int(11) NOT NULL,
  `interest_rate` text NOT NULL,
  `photoUrl` text NOT NULL,
  `tenure` varchar(250) NOT NULL,
  `about` text NOT NULL,
  `feature` text NOT NULL,
  `title` varchar(250) NOT NULL,
  `description` text NOT NULL,
  `keyword` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`intrest_rate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `sr_interest_rate`
--

INSERT INTO `sr_interest_rate` (`intrest_rate_id`, `bank_id`, `interest_rate`, `photoUrl`, `tenure`, `about`, `feature`, `title`, `description`, `keyword`, `created_on`) VALUES
(1, 2, '<p>,Base Rate 9.50%,Floating Rate-Salaried,Upto 28 Lacs 9.60% - EMI @ 939,Above 28 Lacs 9.65% - EMI @ 942,For Self Employed,Upto 28 Lacs 9.70% - EMI @ 945, Above 28 Lacs 9.75% - EMI @ 949Fixed 11.75% - EMI @ 1084,</p>', 'Axis-Bank.png', '<p>Min 1 Year - Max 20 Years</p>', '<p>Axis Bank was the first of the new private banks to have begun operations in 1994, after the Government of India allowed new private banks to be established. The Bank was promoted jointly by the Administrator of the specified undertaking of the Unit Trust of India (UTI - I), Life Insurance Corporation of India (LIC) and General Insurance Corporation of India (GIC) and other four PSU insurance companies, i.e. National Insurance Company Ltd., The New India Assurance Company Ltd., The Oriental Insurance Company Ltd. and United India Insurance Company Ltd.</p>\r\n<p>The Bank today is capitalized to the extent of Rs. 359.00 crores with the public holding (other than promoters) at 57.60%.</p>\r\n<p>The Bank''s Registered Office is at Ahmadabad and its Central Office is located at Mumbai. The Bank has a very wide network of more than 827 branches and Extension Counters (as on 31st March 2009). The Bank has a network of over 3595 ATMs (as on 31st March 2009) providing 24 hrs a day banking convenience to its customers. This is one of the largest ATM networks in the country.</p>\r\n<p>The Bank has strengths in both retail and corporate banking and is committed to adopting the best industry practices internationally in order to achieve excellence.</p>', '<ul>\r\n<ul type="disc">\r\n<li>Loans to all types of purchase and construction needs</li>\r\n<li>Flexible product to suit your needs</li>\r\n<li>Easy repayment options</li>\r\n<li>Quick and Easy documentation</li>\r\n<li>Personalized services</li>\r\n<li>Top-up loans and Renovation loans at 12.00% ROI.</li>\r\n<li>Switching between Floating to Fixed and vice versa.</li>\r\n</ul>\r\n</ul>', 'Axis Bank Home Loan Interest Rates, Axis Bank Home Loan Rates, axis home loans, axis bank home loans', 'Axis Bank was the first of the new private banks to have begun operations in 1994, after the Government of India allowed new private banks to be established.The Bank today is capitalized to the extent of Rs. 359.00 crores with the public holding (other than promoters) at 57.60%.', 'axis home loan rates, axis home loan details, axis housing loan rates, axis bank housing loan details', '2016-10-22 06:17:59'),
(2, 4, '<p>Fixed 10.10% - EMI @ 972/Lac(Till Sep 2014), Floating - 10.25% - EMI @ 982.00</p>', 'citibank.png', '<p>Min 1 Year - Max 25 Years</p>', '<p style="margin: 0px; text-align: justify;"><span style="line-height: 115%; font-family: ''verdana'',''sans-serif''; font-size: 8.5pt;">Citibank represents the consumer banking operations of financial services and leading its way in banking industry accross the globe.&nbsp;It has more than 1,000 branches in&nbsp;US states and 300 international locations in&nbsp;40 countries in Asia, Latin America, and Central and Eastern Europe. Citibank provides&nbsp;services deposit accounts, credit cards, and loans to consumers and small businesses. </span></p>', '<ul type="disc">\r\n<li>Loans up to 5 Crs</li>\r\n<li>No Processing fee, only admin fee and stamp duty charge</li>\r\n<li>Credit Shield &amp; Property Insurance to Protect your loved ones</li>\r\n<li>Balance Transfer of your existing loan to save on interest costs</li>\r\n</ul>\r\n<p><strong>Citibank Property Power (Mortgage)</strong></p>\r\n<ul type="disc">\r\n<li>Loan up to 70% on your Residential and 60% of your Commercial Property value</li>\r\n<li>Loan for purchase of Commercial Property</li>\r\n<li>Overdraft Against Commercial &amp; Residential Property</li>\r\n<li>Loan Against Rental Receipts</li>\r\n<li>Transfer your existing loan save on interest costs</li>\r\n<li>Flexible repayment tenure upto 15 Years*</li>\r\n<li>Citibank Home Credit for your transactional needs &amp; to park your Excess/idle funds to reduce interest cost</li>\r\n<li>Credit Shield &amp; Property Insurance to protect your loved ones</li>\r\n</ul>', 'Citi Bank Home Loans,Citi Bank Home Loan Rates,Citi Bank home loan details,Citi Bank Housing Loan details,Citi Bank Housing Loan Rates', 'Citibank represents the consumer banking operations of financial services and leading its way in banking industry accross the globe. It has more than 1,000 branches in US states and 300 international locations in 40 countries in Asia, Latin America, and Central and Eastern Europe. Citibank provides services deposit accounts, credit cards, and loans to consumers and small businesses. ', 'Citi Bank Home Loans, Citi Bank Home Loan Rates, Citi Bank home loan details, Citi Bank Housing Loan details, Citi Bank Housing Loan Rates', '2016-10-22 06:19:34');

-- --------------------------------------------------------

--
-- Table structure for table `sr_loan`
--

CREATE TABLE IF NOT EXISTS `sr_loan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `LoanCode` varchar(250) NOT NULL,
  `LoanName` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `sr_loan`
--

INSERT INTO `sr_loan` (`id`, `LoanCode`, `LoanName`, `created_on`) VALUES
(1, 'New Purchase', 'New Purchase (Flat or Independent)', '2016-08-02 14:09:52'),
(2, 'Resale Purchase', 'Resale Puchase (Flat or Independent House)', '2016-08-02 13:15:37'),
(3, 'Plot Purchase', 'Plot Purchase', '2016-08-03 06:04:50'),
(5, 'Mortgage', 'Mortgage', '2016-08-03 06:05:15'),
(6, 'Plot cum Construction', 'Plot + Construction', '2016-08-03 06:05:33'),
(7, 'BT', 'Balance Transfer', '2016-08-03 06:05:45'),
(8, 'Resale', 'Resale purchase( Vendor already has a loan )', '2016-08-03 06:05:59'),
(9, 'Commercial', 'Commercial Mortgage', '2016-08-03 06:06:29'),
(10, 'Resale (VL)', 'Resale Purchase (Vendor Liability)', '2016-08-03 06:06:44'),
(11, 'Plot Mortgage', 'PLOT Mortgage', '2016-08-03 06:07:00'),
(12, 'BT + Mortgage', 'Balance Transfer(BT) + Mortgage', '2016-08-03 06:07:16'),
(13, 'BT + Top-up', 'Balance Transfer(BT) + Top-up', '2016-08-03 06:07:29'),
(14, 'Extension', 'Loan Extension', '2016-08-03 06:07:40'),
(15, 'Top Up', 'Top Up', '2016-08-03 06:07:51'),
(16, 'Testing Loan', 'Testing Loan', '2016-08-06 11:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `sr_product_description`
--

CREATE TABLE IF NOT EXISTS `sr_product_description` (
  `sr_product_description_id` int(11) NOT NULL AUTO_INCREMENT,
  `income_source_id` varchar(2) NOT NULL,
  `sr_bank_id` int(11) NOT NULL,
  `sr_loan_id` int(11) NOT NULL,
  `adminprocessingfee` text NOT NULL,
  `description` text NOT NULL,
  `sanction_conditions` text NOT NULL,
  `legal_technical` text NOT NULL,
  `disbursement` text NOT NULL,
  `pre_closure` text NOT NULL,
  PRIMARY KEY (`sr_product_description_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `sr_product_description`
--

INSERT INTO `sr_product_description` (`sr_product_description_id`, `income_source_id`, `sr_bank_id`, `sr_loan_id`, `adminprocessingfee`, `description`, `sanction_conditions`, `legal_technical`, `disbursement`, `pre_closure`) VALUES
(1, 'R', 2, 1, '<p>0.5 % of Loan Amount + 14% Service Tax</p>', '<p>This product is applicable to the applicants who wants to buy a property which is under construction or in ready to occupy position. The property may be builder or an individual constructed.</p>', '<p>Min age 21 Max 58, 60 Years for central Govt Employees. Min Income <span style="font-weight: bold;">10,000/month</span>. <br /><br />Property should be located with in the geo limits of the bank. Banks will verify all the details mentioned in the application form.</p>', '<p>All the legal Documents will be scrutinized by the panel advocates and the property will be evaluated by the technical valuers. Bank reserves the right to ask for additional documents to clear the title of the property if needed.If the property is a semi finished one, then the loan will be disbursed depending on the stage of construction. Banks do not accept any Deviations in the construction.</p>', '<p>Funding will be done up to a maximum of <span style="font-weight: bold;">80%</span> of the Agreement of sale value, Technical value or the Sanctioned amount which ever is less subject to all legal and technical verification being positive. <br /><br />All the original documents should be verified with the bank before disbursement only. Part payments will be accepted after 6 months of complete loan disbursement. Margin money should be paid through bank only. <br /><br />Tax exemption under section <span style="font-weight: bold;">80(c)</span> of Income Tax act is applicable to this loan product.</p>', '<p>Nil If paid from own sources.<br /><br /></p>'),
(2, 'R', 1, 1, '<p>0.5 % - 1% of Loan Amount + 14% Service Tax</p>', '<p>This loan will be provided to those applicants who want to buy a Flat or Independent house which is under construction or which is in ready to occupy position. The property may be a builder or an individual constructed.</p>', '<p>Age Min 21 Max 58, 60 Years (Central Govt) Income Min 10,000/month.Banks will verify the details mentioned in the application form.If the property is having any deviations then applied BRS copy(Building Regularization) or approved BRS should be submitted at the time of loan processing.</p>', '<p>All the registered Documents will be scrutinized by the panel advocates and the property will be evaluated by the valuers. Bank reserves the right to ask for additional documents if needed to clear the title of the property. If the property is a semi-finished one then funding will done depending on the construction stage.</p>', '<p>Funding will be done upto a maximum of 80% of the agreement of sale value, technical value or the sanctioned amount which ever is less subject to all legal and technical verifications being positive. All the original documents will be verified before disbursement.Part paymets will be accepted after 6 months of complete loan disbursement. Tax exemption is applicable to this loan.</p>', '<p>Nill if paid from own sources for both pre payments and part payments.2% - 4% of the outstanding principle for Transfers.</p>'),
(3, 'S', 1, 1, '<p>0.5 % of Loan Amount + 14% Service Tax</p>', '<p>This product is applicable to those applicants who wants to buy a property which is under construction or in ready to occupy position. The property may be a builder or an individual construction.</p>', '<p>Min age 21 Max 65, Min Income 10,000/ month. The property should be located with in the geo limits of the bank. Bank will verify all the details mentioned in the application form.</p>', '<p>All the legal Documents will be scrutinized by the panel advocates and the property will be evaluated by the technical valuers. Bank reserves the right to ask for additional documents if needed, to clear the title of the property. If the property is a semi finished one, then the loan will be disbursed depending on the stage of construction.</p>', '<p>Funding will be done upto a max of 80% of the agreement of sale value, technical value or the sanctioned amount which ever is less subject to all legal and technical verifications being positive. All the original documents should be verified with the bank before disbursement only. Part payments will be done after 6 months of complete loan disbursement. Tax exemption is applicable to this loan.</p>', '<p>Nil if paid from own sources for both pre payments and part payments.</p>'),
(4, 'S', 2, 1, '<p>0.5 % of Loan Amount + 14% Service Tax</p>', '<p>This product is applicable to those applicants who wants to buy a property which is under construction or in ready to occupy position and it may be a builder constructed or an individual constructed.</p>', '<p>Min age 21 Max 65, Min Income 10,000/ month. Banks will verify the details mentioned in the application form.</p>', '<p>All the legal Documents will be scrutinized by the panel advocates and the property will be evaluated by the technical valuers. If the property is a semi finished one then funding will be done depending on construction stage. Bank reserve the right to ask for additional documents if needed, to clear the title of the property.</p>', '<p>Subject to all legal and technical verifications being positive the funding will be done up to a maximum of 80% of agreement of sale value, technical value or the sanctioned amount which ever is less. All the original documents should be verified before disbursement. Part payments will be accepted after 6 months of complete loan disbursement. Tax exemption is applicable to this loan.</p>', '<p>Nil if paid from own sources for both pre payments and part payments.</p>'),
(5, 'N', 1, 1, '<p>0.5 % - 1% of Loan Amount + 12.36% Service Tax</p>', '<p>This product is applicable to the applicants who want to buy a property which is under construction or in ready to occupy position. The property may be a builder constructed or an individual constructed.</p>', '<p>Min age 21 Max 58, min income 2000$ / month. Banks will take employment conformation from the HR of the applicants company.</p>', '<p>All the legal Documents will be scrutinised by the panel advocates and the property will be evaluated by the technical valuers. Bank reserves the right to ask for additional documents if needed, to clear the title of the property. If the property is a semi finished one then the funding will be done depending on the stage of construction.</p>', '<p>Subject to all legal and technical verifications being positive the Funding will be done upto a maximum of 80% of the agreement of sale value, technical value or the sanctioned amount which ever is less. All the original documents should be verified before disbursement. Part payments will be accepted after 6 months of complete loan disbursement.</p>', '<p>Nill if paid from own sources for both pre payments and part payments. 2% - 4% of outstanding principal for Balance Transfer.</p>'),
(6, 'N', 2, 1, '<p>0.5 % - 1% of Loan Amount + 12.36% Service Tax</p>', '<p>This loan will be provided to the applicants who wants to buy a Flat or Independent House which is underconstruction or which is in ready to occupy position. It may be a builder constructed or an individual constructed.</p>', '<p>Age-Min 21 Max 58, min income 2000$ / Month. Banks will take employment conformation from the HR of the applicants company.</p>', '<p>All the registered Documents will be scrutinised by the panel advocates and the property will be evaluated by the valuers. Bank reserves the right to ask for additional documents if needed, to clear the title of the property. If the property is a semi finished one then funding will be done depending on the stage of construction.</p>', '<p>Funding will be done upto a maximum of 80% of the agreement of sale value, technical value or the sanctioned amount which ever is less subject to all the legal and technical verifications being positive. All the original documents should be verified before disbursement only. Part payments will be accpeted after 6 months of complete loan disbursement.</p>', '<p>Nill if paid from own sources for both pre payments and part payments. 2% - 4% of outstanding principal for Balance Transfer.</p>');

-- --------------------------------------------------------

--
-- Table structure for table `sr_state`
--

CREATE TABLE IF NOT EXISTS `sr_state` (
  `sr_state_id` int(11) NOT NULL AUTO_INCREMENT,
  `state_name` varchar(250) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`sr_state_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `sr_state`
--

INSERT INTO `sr_state` (`sr_state_id`, `state_name`, `created_on`) VALUES
(1, 'Andhra Pradesh', '2016-08-03 11:00:18'),
(2, 'Karnataka', '2016-08-03 11:01:01'),
(3, 'Tamilnadu', '2016-08-03 11:01:07'),
(4, 'Delhi', '2016-08-03 11:01:13'),
(5, 'Maharashtra', '2016-08-03 11:01:19'),
(6, 'West Bengal', '2016-08-03 11:01:28'),
(7, 'Gujarat', '2016-08-03 11:01:35'),
(8, 'Telangana', '2016-08-03 11:01:41');

-- --------------------------------------------------------

--
-- Table structure for table `state_banks`
--

CREATE TABLE IF NOT EXISTS `state_banks` (
  `state_banks_id` int(11) NOT NULL AUTO_INCREMENT,
  `sr_state_id` int(11) NOT NULL,
  `income_source_id` int(11) NOT NULL,
  PRIMARY KEY (`state_banks_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `state_banks`
--

INSERT INTO `state_banks` (`state_banks_id`, `sr_state_id`, `income_source_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 2, 1),
(5, 3, 1),
(6, 2, 1),
(7, 2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` char(32) NOT NULL DEFAULT '',
  `username` varchar(100) NOT NULL DEFAULT '',
  `password` char(32) DEFAULT NULL,
  `role` char(2) NOT NULL DEFAULT '',
  `status` tinyint(1) NOT NULL,
  `via` varchar(20) NOT NULL DEFAULT '',
  `reset` tinyint(1) NOT NULL DEFAULT '0',
  `createdOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updatedOn` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `emailIDX` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `role`, `status`, `via`, `reset`, `createdOn`, `updatedOn`, `email`) VALUES
('e537e360277de8ba1904996099b88c8f', 'admin', '202cb962ac59075b964b07152d234b70', 'A', 1, 'Website', 0, '2015-11-21 13:16:41', '2016-07-08 06:59:46', 'hemanthraj2009@gmail.com');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
