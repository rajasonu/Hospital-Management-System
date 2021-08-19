-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 08, 2021 at 10:31 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hospital`
--
CREATE DATABASE IF NOT EXISTS `hospital` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `hospital`;

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`sno`, `id`, `password`) VALUES
(1, 'doctor', 'doctor123'),
(2, 'garima', 'garima123'),
(3, 'deepti', 'deepti123');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_detail`
--

CREATE TABLE IF NOT EXISTS `doctor_detail` (
  `doc_id` int(10) NOT NULL AUTO_INCREMENT,
  `doc_name` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `contact_no` varchar(20) NOT NULL,
  `specialist` varchar(100) NOT NULL,
  `doc_image` varchar(100) NOT NULL,
  `other_att` varchar(100) NOT NULL,
  PRIMARY KEY (`doc_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=71 ;

--
-- Dumping data for table `doctor_detail`
--

INSERT INTO `doctor_detail` (`doc_id`, `doc_name`, `address`, `city`, `contact_no`, `specialist`, `doc_image`, `other_att`) VALUES
(29, 'Dr. Shekar Shrivastava ', 'Shekhar Hospital,A/69 Shekar Hospital,Nr Manisha Market, Shahpura Arera Colony ', 'Bhopal', '2777347, 4294295, 24', 'ENT', 'noimage.jpg', ''),
(28, 'Dr. Jaspal Ubeja ', 'B/4 Budhwara Chambers,Charbatti, Shivaji Nagar ', 'Bhopal', '2557957, 2546547, 25', 'ENT', 'noimage.jpg', ''),
(27, 'Dr. Pradeep Choure ', 'E 4/62 Bittan Market,Arera Colony ', 'Bhopal', '2464445, 9827013379 ', 'ENT', 'noimage.jpg', ''),
(26, 'Dr. Paresh Tankwala ', 'ENT Care Centre,78 Moti Talab, ', 'Bhopal', '4284425, 4956667, 98', 'ENT', 'noimage.jpg', ''),
(25, 'Dr. Navin Bhatia ', 'A 58,Shahpura, Shahpura Arora Colony ', 'Bhopal', '2421616 ', 'ENT', 'noimage.jpg', ''),
(23, 'Dr. Sudhindu Chakrawarti', 'Ayush Hospital,Opp Apsara Talkies ', 'Bhopal', '4260600 ', 'ENT', 'noimage.jpg', ''),
(24, 'Dr. Deepesh Kumar Verma ', '21 Vaishali,Kotra ', 'Bhopal', '2670443, 9827261094 ', 'ENT', 'noimage.jpg', ''),
(22, 'Dr. M Saeed Khan ', 'Central Homeo Hall, New Market ', 'Bhopal', '0755-2556099 ', 'Homeopathy', 'noimage.jpg', ''),
(21, 'Dr. Khan Tajwar Mhod Bsc B H M S', '13, Thana Rd, T T Nagar', 'Bhopal', '0755-2553169', 'Homeopathy', 'noimage.jpg', ''),
(1, 'Dr. Nupur Chakravarty ', 'Bhopal Memorial Hospital & Research Centre ', 'Bhopal', '', 'Anaesthesia', 'noimage.jpg', ''),
(18, 'Dr. R. C. Agarwal ', 'Bhopal Memorial Hospital & Research Centre ', 'Bhopal', '', 'Anaesthesia', 'noimage.jpg', ''),
(19, 'Dr. P. K. Bhattacharya ', 'Bhopal Memorial Hospital & Research Centre ', 'Bhopal', '', 'Anaesthesia', 'noimage.jpg', ''),
(14, 'Dr. Amit Ganguli', '57 Mla Quarters,Jawahar Chowk', 'Bhopal', '0755-2764260', 'ENT', 'noimage.jpg', ''),
(17, 'Dr. R. K. Jain ', 'Bhopal Memorial Hospital & Research Centre ', 'Bhopal', '', 'Anaesthesia', 'noimage.jpg', ''),
(30, 'Dr. Ashok Nigam ', 'Charak Hospital And Research CenterJahangirabad, ', 'Bhopal', '2574156, 4253157, 42', 'ENT', 'noimage.jpg', ''),
(31, 'Dr. Gopesh Modi ', 'Nirmaya Hospital, E2/13,Opp Habibganj Railway Station, Arera Colony ', 'Bhopal', '2463316, 2413913 ', 'ENT', 'noimage.jpg', ''),
(32, 'Dr. S P Dubey ', 'Chirayu Hospital,6 Malipura,Hawa Mahal Rd, Near Nagar Nigam Bhopal, Peergate ', 'Bhopal', '2531122, 2531777, 25', 'ENT', 'noimage.jpg', ''),
(34, 'Dr. R. C. Agarwal', 'Bhopal Memorial Hospital & Research Centre ', 'Bhopal', '', 'Anaesthesia', 'noimage.jpg', ''),
(35, 'Dr. Vandana Nigam', 'M- 287, Gautam Nagar Near Chetak Bridge, Govindpura ', 'Bhopal', '', 'Anaesthesia', 'noimage.jpg', ''),
(40, 'Dr. Naresh Himthani, ', 'A-Ward-Old Barrak No. 18, ', 'Bhopal', '2521737 ', 'Cardiologist ', 'noimage.jpg', ''),
(41, 'Dr. H.A.Insaf, ', 'Saifia College Road, Near Saifia College, ', 'Bhopal', '263644', 'Cardiologist', 'noimage.jpg', ''),
(42, 'Dr. Sanjay Jain, ', 'F1/10, 1100 Quater, Arera Colony, ', 'Bhopal', '2512037', 'Cardiologist', 'noimage.jpg', ''),
(43, 'Dr. Anwar Ahmed Khan, ', 'E-1/155, Area Colony,â€“ 462 016 ', 'Bhopal', '2564412', 'Cardiologist', 'noimage.jpg', ''),
(44, 'Dr. N.P.Misra, ', 'Parivar, 30, Civil Lines, (M.P.) ', 'Bhopal', '531757', 'Cardiologist', 'noimage.jpg', ''),
(45, 'Dr. Sharad Kumar Parashar, ', 'Chief Medical Officer in CHS, 132, B Sector, Vidya Nagar, Hoshangabad Road, ', 'Bhopal', '0755-2418361, 942537', 'Cardiologist', 'noimage.jpg', ''),
(46, 'Dr. S.V.M.Patil, ', 'Chief Medical Officer in CHS, 132, "B", Sector, Vidya ;Nagar, Hoshangabad Road, ', 'Bhopal', '', 'Cardiologist', 'noimage.jpg', ''),
(47, 'Dr. Rajesh Kumar Shrivastava, ', 'Sr. Divisional Medical Officer, Central Rly. Hospital, Nishatpura, (M.P.) ', 'Bhopal', '', 'Cardiologist', 'noimage.jpg', ''),
(49, 'Dr. Rajiv Gupta ', 'Gupta Clinic, Near Mangalwara Thana ', 'Bhopal', '534212', 'Cardiologist', 'noimage.jpg', ''),
(50, 'Dr. B S Yadav ', '114/18 Shivaji Nagar, Opp No 6 Stop, ', 'Bhopal', '572220', 'Cardiologist', 'noimage.jpg', ''),
(52, 'Dr. Arushi Shastri', 'Shastri"s Dental Clinic, A-Sector-12, Mansarover Colony, Shahpura, ', 'Bhopal', '2426589', 'Dentist', 'noimage.jpg', ''),
(54, 'Dr. Akhilesh Jain ', 'Jain Dental Clinic, Plot No. 22, North T.T.Nagar, Behind Archana Pathology, ', 'Bhopal', '0755-2779977, 255112', 'Dentist', 'noimage.jpg', ''),
(55, 'Dr. Anand Verma ', 'C-12/30, Civil Lines, Shymala Hills, Kilol Park Road, ', 'Bhopal', '2660040,5234797, 989', 'Dentist', 'noimage.jpg', ''),
(56, 'Dr. Anjali Singh ', '341, Rachna Nagar, Govindpura, ', 'Bhopal', '0755-2600700, 260040', 'Dentist', 'noimage.jpg', ''),
(57, 'Dr. Anju R. Moolchandani ', 'E/3-281, Aera Colony, ', 'Bhopal', '09827542111 ', 'Dentist', 'noimage.jpg', ''),
(58, 'Dr. Anupama Gupta ', 'M - 233, Gautam Nagar, Govindpura, ', 'Bhopal', '2789614, 9303131714 ', 'Dentist', 'noimage.jpg', ''),
(59, 'Dr. Aparna Paliwal ', 'Paliwal Dental Clinic, E-4/54, Opp. Bhojpur Club, Arera Colony, ', 'Bhopal', '2468034,2499979', 'Dentist', 'noimage.jpg', ''),
(60, 'Dr. Archana S. Upadhyay ', '181-A, Rohit Nagar, Phase - I, E-8 Extension, ', 'Bhopal', '2427816, 9425463905,', 'Dentist', 'noimage.jpg', ''),
(61, 'Dr. Arun M. S. ', 'Dental Surgeon, A/4-9, Habibganj Doctor Colony, B.H.E.L, ', 'Bhopal', '', 'Dentist', 'noimage.jpg', ''),
(63, 'Agrawal Aditya ', 'Shakti Eye Hospital, 313,Jawahar Marg,', 'Bhopal', '2532514', 'Eye', '', ''),
(64, 'Agrawal Rajendra Kumar ', '115-Jawahar Marg, Near Goradevi Hospital', 'Bhopal', '2340299', 'Eye ', '', ''),
(65, 'Anurag Shrivastava', 'Devraj Complex, 1St Floor Sapna Sangeeta Road', 'Bhopal', '2555472', 'Eye', '', ''),
(66, 'Dharampal Palyani ', '15 Palsikar Colony', 'Bhopal', '2365844', 'Eye', '', ''),
(67, 'Hardia Rajeev ', '5-3 and 5-4,Residency Area, A B Road', 'Bhopal', '2705351', 'Eye', '', ''),
(68, 'Kishan Verma ', '127-Kanchan Bagh, Opp.Hotel Crown Palace', 'Bhopal', '2527385', 'Eye', '', ''),
(69, 'Preeti Rawat M S', '55/B Sudama Nagar', 'Bhopal', '2103730', 'Eye', '', ''),
(70, 'Surbhi Gupta ', '101 New Palasia,', 'Bhopal', '2490392', 'eye', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE IF NOT EXISTS `patient` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `gname` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `problem` text NOT NULL,
  `id` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`sno`, `name`, `gname`, `age`, `gender`, `address`, `problem`, `id`, `password`) VALUES
(2, 'rahul agrawal', 'mr. anuj agrawal', '22', 'Male', 'bhopal mp', 'i have blood pressure problem and high sugar last three month', 'rahul', 'rahul123'),
(3, 'vikas dubey', 'anuj dubey', '34', 'Male', 'sakti nagar chhatarpur', 'i have ear problem since last 4 days', 'vikas', 'vikas123');

-- --------------------------------------------------------

--
-- Table structure for table `patientdetail`
--

CREATE TABLE IF NOT EXISTS `patientdetail` (
  `sno` int(10) NOT NULL AUTO_INCREMENT,
  `docid` int(10) NOT NULL,
  `patientid` int(10) NOT NULL,
  `suggestion` varchar(500) NOT NULL,
  `appointment` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `patientdetail`
--

INSERT INTO `patientdetail` (`sno`, `docid`, `patientid`, `suggestion`, `appointment`) VALUES
(1, 29, 2, 'you have get daily three medician by cipla ducline and keep in rest for three month', 'YES');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
