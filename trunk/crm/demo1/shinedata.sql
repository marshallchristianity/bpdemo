-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 19, 2014 at 09:00 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bigperlt_bpearl`
--

-- --------------------------------------------------------

--
-- Table structure for table `shinedata`
--

CREATE TABLE IF NOT EXISTS `shinedata` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `dob` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `contact` int(11) NOT NULL,
  `type` varchar(10) NOT NULL,
  `location` varchar(100) NOT NULL,
  `work_exp` varchar(40) NOT NULL,
  `current_industry` varchar(50) NOT NULL,
  `current_company` varchar(50) NOT NULL,
  `highest_edu_level` varchar(50) NOT NULL,
  `highest_edu_stream` varchar(200) NOT NULL,
  `highest_edu_inst` varchar(50) NOT NULL,
  `duration` int(4) NOT NULL,
  `resume` varchar(150) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  `student_type` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36660 ;

--
-- Dumping data for table `shinedata`
--

INSERT INTO `shinedata` (`id`, `name`, `gender`, `dob`, `email`, `contact`, `type`, `location`, `work_exp`, `current_industry`, `current_company`, `highest_edu_level`, `highest_edu_stream`, `highest_edu_inst`, `duration`, `resume`, `created_date`, `updated_date`, `student_type`) VALUES
(36610, 'X Y', '', '28-Jan-80', 'shishira1991@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Law', 'Visveshwaraiah University', 0, 'http://recruiter.shine.com/resume/download/?resume=53b2a4d1350d9db4ce6d09aa\r\n', '0000-00-00', '0000-00-00', ''),
(36611, 'shantkumar metre', '', '21-Feb-92', 'mshantkumar@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Diploma / Vocational Course', 'Other', 'anjuman e islam polytechnic gadag', 0, 'http://recruiter.shine.com/resume/download/?resume=53c790c3a9b16e3e226d368e\r\n', '0000-00-00', '0000-00-00', ''),
(36612, 'Siddharth Singh', '', '01-Sep-88', 'siddharthr53@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'PG or Equivalent', 'Aeronautics Engineering', '"IIAEM', 0, '17-07-2014 17:06', '0000-00-00', '0000-00-00', ''),
(36613, 'maruti ', '', '06-Jun-92', 'maruti49@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Mechanical Engineering', 'university visvesvaraya college of engineering', 0, 'http://recruiter.shine.com/resume/download/?resume=522ebc56252df462ef3877d0\r\n', '0000-00-00', '0000-00-00', ''),
(36614, 'P Venkateswarlu ', '', '', 'venkat.p.549@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Computers / IT / Software - Science', '"Vikas college of Arts', 0, '', '0000-00-00', '0000-00-00', ''),
(36615, 'parthi parthi', '', '', 'parthiparthi06@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Diploma / Vocational Course', 'Architecture Engineering', 'adhiyamaan polytechnic college', 0, 'http://recruiter.shine.com/resume/download/?resume=53ca9393a9b16e508a8ba45f\r\n', '0000-00-00', '0000-00-00', ''),
(36616, 'Subrata patra', '', '19-Mar-92', 'subratapatra747@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Electronics and Communication Engineering', 'Bhubaneswar Engineering College', 0, 'http://recruiter.shine.com/resume/download/?resume=53ca0dfc6cca0703bfcc04ff\r\n', '0000-00-00', '0000-00-00', ''),
(36617, 'syed abdul muqsith ', '', '', 'sam.khurram@yahoo.co.in', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Education', '"Govt Jr.college', 0, '', '0000-00-00', '0000-00-00', ''),
(36618, 'Hitesh Kumar yadav', '', '', 'hiteshyadav90@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Computer / IT / Software Engineering', 'Vijaya Vittala  Institute of Technology', 0, 'http://recruiter.shine.com/resume/download/?resume=53ccaa1e252df435b907cb0f\r\n', '0000-00-00', '0000-00-00', ''),
(36619, 'Gopi Nadh', '', '', 'bobba.gopi007@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Diploma / Vocational Course', 'ALTP', 'institute of aricraft maintenance engineering', 0, 'http://recruiter.shine.com/resume/download/?resume=53ccab68350d9d6592bf6697\r\n', '0000-00-00', '0000-00-00', ''),
(36620, 'chandrakala m', '', '11-Mar-93', 'bhoomi.2012@rediffmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', '10+2 or Below', 'Biology - Zoology', 'national college jayanagar', 0, 'http://recruiter.shine.com/resume/download/?resume=505983df89c25e266f000025\r\n', '0000-00-00', '0000-00-00', ''),
(36621, 'kapilketan Ganju', '', '', 'kapil22.maxx@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Law', 'CMR LAW SCHOOL', 0, 'http://recruiter.shine.com/resume/download/?resume=53ca73af7dc3ec7b57ca90f2\r\n', '0000-00-00', '0000-00-00', ''),
(36622, 'Cadd Centre ', '', '', 'pww.blr@caddcentre.ws', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Mechanical Engineering', 'CADD Centre Training services', 0, 'http://recruiter.shine.com/resume/download/?resume=52a06e0953941a4f1af315ce\r\n', '0000-00-00', '0000-00-00', ''),
(36623, 'Chaitanya ', '', '', 'chaitanya85.n@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Computers / IT / Software - Science', 'Bangalore University', 0, 'http://recruiter.shine.com/resume/download/?resume=53cca5057dc3ec4e776c60f4\r\n', '0000-00-00', '0000-00-00', ''),
(36624, 'Pavan kulkarni', '', '', 'pavankulkarni028@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Diploma / Vocational Course', 'Other', 'bvvs polytechnic', 0, 'http://recruiter.shine.com/resume/download/?resume=53a13038350d9d38b694fdd7\r\n', '0000-00-00', '0000-00-00', ''),
(36625, 'shivakumar patil', '', '30-Jul-91', 'shivakumar.patil743@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'PG or Equivalent', 'Mechanical Engineering', 'Basaveshwar Engineering collage', 0, 'http://recruiter.shine.com/resume/download/?resume=53cccf2b252df402ea9c1185\r\n', '0000-00-00', '0000-00-00', ''),
(36626, 'Private Profile', '', '02-May-91', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'Graduation', 'Computer / IT / Software Engineering', 'REC BBSR', 0, 'Hidden\r\n', '0000-00-00', '0000-00-00', ''),
(36627, 'Private Profile', '', '12-Oct-87', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'PG or Equivalent', 'Other Engineering', 'M.V.J.College of Engineering', 0, 'Hidden\r\n', '0000-00-00', '0000-00-00', ''),
(36628, 'Private Profile', '', '02-Feb-91', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'Graduation', 'Computer / IT / Software Engineering', 'rural engineering college bhalki', 0, 'Hidden\r\n', '0000-00-00', '0000-00-00', ''),
(36629, 'Private Profile', '', '', 'Hidden', 0, '', 'Bangalore', '0 Yr 10 Months', 'Aviation / Airline', 'Hidden', 'Graduation', 'Electronics and Communication Engineering', '"Bhajarang Engineering College', 0, '30-04-2014 18:52', '0000-00-00', '0000-00-00', ''),
(36630, 'Private Profile', '', '16-Oct-88', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'Graduation', 'BCA /MCA', 'Karnataka University', 0, 'Hidden\r\n', '0000-00-00', '0000-00-00', ''),
(36631, 'Private Profile', '', '', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'Graduation', 'Computer / IT / Software Engineering', 'K.O.R.M ce(Ap)', 0, 'Hidden\r\n', '0000-00-00', '0000-00-00', ''),
(36632, 'Private Profile', '', '20-Apr-91', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'Graduation', 'Law', 'National University of Advanced Legal Studies', 0, 'Hidden\r\n', '0000-00-00', '0000-00-00', ''),
(36633, 'Private Profile', '', '30-Jan-80', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'Graduation', 'Commerce', '"Hasnath College For Women', 0, '', '0000-00-00', '0000-00-00', ''),
(36634, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', ''),
(36635, 'X Y', '', '28-Jan-80', 'shishira1991@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Law', 'Visveshwaraiah University', 0, 'http://recruiter.shine.com/resume/download/?resume=53b2a4d1350d9db4ce6d09aa\r\n', '0000-00-00', '0000-00-00', ''),
(36636, 'shantkumar metre', '', '21-Feb-92', 'mshantkumar@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Diploma / Vocational Course', 'Other', 'anjuman e islam polytechnic gadag', 0, 'http://recruiter.shine.com/resume/download/?resume=53c790c3a9b16e3e226d368e\r\n', '0000-00-00', '0000-00-00', ''),
(36637, 'Siddharth Singh', '', '01-Sep-88', 'siddharthr53@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'PG or Equivalent', 'Aeronautics Engineering', '"IIAEM', 0, '17-07-2014 17:06', '0000-00-00', '0000-00-00', ''),
(36638, 'maruti ', '', '06-Jun-92', 'maruti49@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Mechanical Engineering', 'university visvesvaraya college of engineering', 0, 'http://recruiter.shine.com/resume/download/?resume=522ebc56252df462ef3877d0\r\n', '0000-00-00', '0000-00-00', ''),
(36639, 'P Venkateswarlu ', '', '', 'venkat.p.549@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Computers / IT / Software - Science', '"Vikas college of Arts', 0, '', '0000-00-00', '0000-00-00', ''),
(36640, 'parthi parthi', '', '', 'parthiparthi06@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Diploma / Vocational Course', 'Architecture Engineering', 'adhiyamaan polytechnic college', 0, 'http://recruiter.shine.com/resume/download/?resume=53ca9393a9b16e508a8ba45f\r\n', '0000-00-00', '0000-00-00', ''),
(36641, 'Subrata patra', '', '19-Mar-92', 'subratapatra747@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Electronics and Communication Engineering', 'Bhubaneswar Engineering College', 0, 'http://recruiter.shine.com/resume/download/?resume=53ca0dfc6cca0703bfcc04ff\r\n', '0000-00-00', '0000-00-00', ''),
(36642, 'syed abdul muqsith ', '', '', 'sam.khurram@yahoo.co.in', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Education', '"Govt Jr.college', 0, '', '0000-00-00', '0000-00-00', ''),
(36643, 'Hitesh Kumar yadav', '', '', 'hiteshyadav90@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Computer / IT / Software Engineering', 'Vijaya Vittala  Institute of Technology', 0, 'http://recruiter.shine.com/resume/download/?resume=53ccaa1e252df435b907cb0f\r\n', '0000-00-00', '0000-00-00', ''),
(36644, 'Gopi Nadh', '', '', 'bobba.gopi007@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Diploma / Vocational Course', 'ALTP', 'institute of aricraft maintenance engineering', 0, 'http://recruiter.shine.com/resume/download/?resume=53ccab68350d9d6592bf6697\r\n', '0000-00-00', '0000-00-00', ''),
(36645, 'chandrakala m', '', '11-Mar-93', 'bhoomi.2012@rediffmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', '10+2 or Below', 'Biology - Zoology', 'national college jayanagar', 0, 'http://recruiter.shine.com/resume/download/?resume=505983df89c25e266f000025\r\n', '0000-00-00', '0000-00-00', ''),
(36646, 'kapilketan Ganju', '', '', 'kapil22.maxx@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Law', 'CMR LAW SCHOOL', 0, 'http://recruiter.shine.com/resume/download/?resume=53ca73af7dc3ec7b57ca90f2\r\n', '0000-00-00', '0000-00-00', ''),
(36647, 'Cadd Centre ', '', '', 'pww.blr@caddcentre.ws', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Mechanical Engineering', 'CADD Centre Training services', 0, 'http://recruiter.shine.com/resume/download/?resume=52a06e0953941a4f1af315ce\r\n', '0000-00-00', '0000-00-00', ''),
(36648, 'Chaitanya ', '', '', 'chaitanya85.n@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Graduation', 'Computers / IT / Software - Science', 'Bangalore University', 0, 'http://recruiter.shine.com/resume/download/?resume=53cca5057dc3ec4e776c60f4\r\n', '0000-00-00', '0000-00-00', ''),
(36649, 'Pavan kulkarni', '', '', 'pavankulkarni028@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'Diploma / Vocational Course', 'Other', 'bvvs polytechnic', 0, 'http://recruiter.shine.com/resume/download/?resume=53a13038350d9d38b694fdd7\r\n', '0000-00-00', '0000-00-00', ''),
(36650, 'shivakumar patil', '', '30-Jul-91', 'shivakumar.patil743@gmail.com', 91, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', '', 'PG or Equivalent', 'Mechanical Engineering', 'Basaveshwar Engineering collage', 0, 'http://recruiter.shine.com/resume/download/?resume=53cccf2b252df402ea9c1185\r\n', '0000-00-00', '0000-00-00', ''),
(36651, 'Private Profile', '', '02-May-91', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'Graduation', 'Computer / IT / Software Engineering', 'REC BBSR', 0, 'Hidden\r\n', '0000-00-00', '0000-00-00', ''),
(36652, 'Private Profile', '', '12-Oct-87', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'PG or Equivalent', 'Other Engineering', 'M.V.J.College of Engineering', 0, 'Hidden\r\n', '0000-00-00', '0000-00-00', ''),
(36653, 'Private Profile', '', '02-Feb-91', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'Graduation', 'Computer / IT / Software Engineering', 'rural engineering college bhalki', 0, 'Hidden\r\n', '0000-00-00', '0000-00-00', ''),
(36654, 'Private Profile', '', '', 'Hidden', 0, '', 'Bangalore', '0 Yr 10 Months', 'Aviation / Airline', 'Hidden', 'Graduation', 'Electronics and Communication Engineering', '"Bhajarang Engineering College', 0, '30-04-2014 18:52', '0000-00-00', '0000-00-00', ''),
(36655, 'Private Profile', '', '16-Oct-88', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'Graduation', 'BCA /MCA', 'Karnataka University', 0, 'Hidden\r\n', '0000-00-00', '0000-00-00', ''),
(36656, 'Private Profile', '', '', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'Graduation', 'Computer / IT / Software Engineering', 'K.O.R.M ce(Ap)', 0, 'Hidden\r\n', '0000-00-00', '0000-00-00', ''),
(36657, 'Private Profile', '', '20-Apr-91', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'Graduation', 'Law', 'National University of Advanced Legal Studies', 0, 'Hidden\r\n', '0000-00-00', '0000-00-00', ''),
(36658, 'Private Profile', '', '30-Jan-80', 'Hidden', 0, '', 'Bangalore', '0 Yr 0 Month', 'Fresher (No Industry)', 'Hidden', 'Graduation', 'Commerce', '"Hasnath College For Women', 0, '', '0000-00-00', '0000-00-00', ''),
(36659, '', '', '', '', 0, '', '', '', '', '', '', '', '', 0, '', '0000-00-00', '0000-00-00', '');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
