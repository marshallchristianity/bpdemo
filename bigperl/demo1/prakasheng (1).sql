-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2015 at 08:55 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prakasheng`
--
CREATE DATABASE IF NOT EXISTS `prakasheng` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `prakasheng`;

-- --------------------------------------------------------

--
-- Table structure for table `adminuser`
--

CREATE TABLE IF NOT EXISTS `adminuser` (
  `admin_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `original_pwd` varchar(50) NOT NULL,
  `created_date` datetime NOT NULL,
  `updated_date` datetime NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `adminuser`
--

INSERT INTO `adminuser` (`admin_id`, `name`, `email`, `password`, `original_pwd`, `created_date`, `updated_date`) VALUES
(1, 'prakash engineers', 'bigpearl@bigpearl.com', '21232f297a57a5a743894a0e4a801fc3', 'admin', '2014-02-19 00:00:00', '2014-09-18 14:59:04');

-- --------------------------------------------------------

--
-- Table structure for table `career`
--

CREATE TABLE IF NOT EXISTS `career` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `position` varchar(50) NOT NULL,
  `detail` varchar(1000) NOT NULL,
  `prerequisites` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `career`
--

INSERT INTO `career` (`id`, `position`, `detail`, `prerequisites`) VALUES
(1, 'Senior Consultant, SOA', '<p><span style="color:rgb(0, 0, 0); font-family:open sans,sans-serif; font-size:14px">5+ years of experience in the architecture, design and implementation of mission critical business applications using Object Oriented methodologies. 5+ years of hands on experience in implementing systems using Java, XML, JMS, JDBC and other Java EE technologies 2+ years of hands on experience in implementing systems using Web Services, BPEL Experience with Oracle SOA Suite</span></p>\r\n', '<p><span style="color:rgb(0, 0, 0); font-family:open sans,sans-serif; font-size:14px">Qualifications: Graduate from recognized IT Institute with good communication skill. Experience: 6+ Year Extra Skills: Candidate should be &ndash; Self motivator, Able to manage multiple tasks and deadlines.</span></p>\r\n'),
(2, 'Offshore Project Manager, Software Development', '<p><span style="color:rgb(0, 0, 0); font-family:open sans,sans-serif; font-size:14px">5+ years of experience in the architecture, design and implementation of mission critical business applications using Object Oriented methodologies. 5+ years of hands on experience in implementing systems using Java, XML, JMS, JDBC and other Java EE technologies 2+ years of hands on experience in implementing systems using Web Services, BPEL Experience with Oracle SOA Suite</span></p>\r\n', '<p><span style="color:rgb(0, 0, 0); font-family:open sans,sans-serif; font-size:14px">Qualifications: Graduate from recognized IT Institute with good communication skill. Experience: 6+ Year Extra Skills: Candidate should be &ndash; Self motivator, Able to manage multiple tasks and deadlines.</span></p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `type` varchar(100) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=48 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `title`, `image`, `type`, `created_date`, `updated_date`) VALUES
(44, '', '6748web_des_1.jpg', 'Portfolio', '2015-01-17', '2015-01-17'),
(45, '', '29029web_des_2.jpg', 'Portfolio', '2015-01-17', '2015-01-17'),
(46, '', '15930web_des_3.jpg', 'Portfolio', '2015-01-17', '2015-01-17'),
(47, '', '19214web_des_4.jpg', 'Portfolio', '2015-01-17', '2015-01-17');

-- --------------------------------------------------------

--
-- Table structure for table `pagescontent`
--

CREATE TABLE IF NOT EXISTS `pagescontent` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `pagesequence` int(11) NOT NULL,
  `pagetitle` varchar(200) NOT NULL,
  `pagecontent` longtext NOT NULL,
  `image` varchar(50) DEFAULT NULL,
  `parentpage` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `pagescontent`
--

INSERT INTO `pagescontent` (`id`, `pagesequence`, `pagetitle`, `pagecontent`, `image`, `parentpage`) VALUES
(1, 1, 'About Us', '<p>BigPerl is one of the most fast-progressing technology based firms situated at Bangalore. We are not only equipped with advanced technology, but we also provide customers with cogent and intelligent solutions that helps them face tricky situations and mangled problems that they might encounter in their business. Our zeal and enthusiasm for solving customer issues demonstrates our devotion towards our customers.</p>\r\n\r\n<p style="text-align:justify">Our highly qualified and experienced staff makes it easy for us to understand issues and provide customers with effective solutions. We provide solutions that are not only effectual, but also authentic and guarantee a reversal in business keeping in mind factors like privacy and security&nbsp;<br />\r\nAccording to us, it is not only passion and dedication towards customer satisfaction that keeps us going. It is the way we infuse life into our mode of communication with customers that makes us stand where we are. We not only have inbound call centres that helps us solve customer problems and queries, but also the use of emails and chats to communicate with customers makes communication a lot more easier and transparent.</p>\r\n\r\n<p style="text-align:justify">We possess the strong ability and desire to solve all your problems and provide you with the best solutions that will help you prosper. Our aim is to provide the best customized service that will help to upgrade our client&#39;s status and cause a turnaround in their business at an economical rate.</p>\r\n\r\n<div style="text-align: justify;">\r\n<p>&nbsp;</p>\r\n</div>\r\n', 'about2.jpg', 0),
(2, 2, 'services', '<p>The process of recruitment doesn&#39;t end at hiring the right individuals for a job. It ends when the skills of those individuals are enhanced in accordance to the requirements of the industry. An intensive work process is the need of the hour to tap the enormous potential that exists in this vast&nbsp; competitive industry. At BigPerl Solutions, we intend to make the chosen personnel realize their true strengths and work on their weaknesses.</p>\r\n\r\n<p>In this fast paced world, change is the only constant. And our aim is to constantly adapt to the changing times through unique training programs and strategies. Each training program is customised, based on the demands and requirements of that particular area of work.&nbsp; At the end of the day, it is the productivity of the employees that gives an organization their desired results. Through comprehensive workshops and various training programs, we wish to produce young leaders who are capable of tackling the most challenging tasks effortlessly.&nbsp;</p>\r\n\r\n<div>&nbsp;</div>\r\n', '255391.gif', 0),
(4, 3, 'Portfolio', '<h1><span style="color:#0000FF"><strong>CRM (customer relationship management)</strong></span></h1>\r\n\r\n<p>CRM (customer relationship management) is an information industry term for methodologies, software, and usually Internet capabilities that help an enterprise manage customer relationships in an organized way.</p>\r\n\r\n<p>- Helping an enterprise to enable its marketing departments to identify and target their best customers, manage marketing campaigns and generate quality leads for the sales team.</p>\r\n\r\n<p>- Assisting the organization to improve telesales, account, and sales management by optimizing information shared by multiple employees, and streamlining existing processes (for example, taking orders using mobile devices)</p>\r\n\r\n<p>- Allowing the formation of individualized relationships with customers, with the aim of improving customer satisfaction and maximizing profits; identifying the most profitable customers and providing them the highest level of service.</p>\r\n\r\n<p>- Providing employees with the information and processes necessary to know their customers, understand and identify customer needs and effectively build relationships between the company, its customer base, and distribution partners.</p>\r\n\r\n<p>- Many organizations turn to CRM software to help them manage their customer relationships. CRM technology is offered on-premise, on-demand or through Software as a Service</p>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<h3>Our key features</h3>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h4>&nbsp;</h4>\r\n\r\n<p>1. Sales automation and forecasting</p>\r\n\r\n<p>2. Marketing automation</p>\r\n\r\n<p>3. Support automation</p>\r\n\r\n<p>4. Call center automation</p>\r\n\r\n<p>5. Reporting &amp; Dashboards</p>\r\n\r\n<p>6. BigPerl CRM Mobile</p>\r\n\r\n<p>7. Cloud or on-premise deployment</p>\r\n\r\n<p>8. Enterprise opportunity management</p>\r\n\r\n<p>9. Enterprise forecasting</p>\r\n\r\n<p>10.Customer self-service portal</p>\r\n\r\n<p>11. Custom Activity Streams</p>\r\n\r\n<p>12. SMS Support</p>\r\n\r\n<p>13. 24x7 support</p>\r\n\r\n<p>14. Assigned Technical Account Manager</p>\r\n\r\n<ul>\r\n</ul>\r\n', '30877portfolio.jpg', 0),
(5, 4, 'Careers', '<h1>Current Opening List</h1>\r\n\r\n<p><strong>Discover limitless opportunities</strong><br />\r\nMore than qualifications and experience, we are looking for an attitude - an attitude to innovate, create &amp; transcend beyond the ordinary. We invite you to join the leading software development company &amp; set new goals for the others.</p>\r\n\r\n<ul>\r\n	<li>&nbsp;</li>\r\n	<li><a href="http://www.bigperl.com/job-view.php?id=41" style="padding: 0px 0px 0px 15px; margin: 0px; outline: 0px; color: rgb(0, 102, 204); text-decoration: none; font-weight: bold; background-image: url(http://www.bigperl.com/images/arrow.jpg); background-position: 0% 50%; background-repeat: no-repeat;">Senior Consultant, SOA</a></li>\r\n	<li><a href="http://www.bigperl.com/job-view.php?id=40" style="padding: 0px 0px 0px 15px; margin: 0px; outline: 0px; color: rgb(0, 102, 204); text-decoration: none; font-weight: bold; background-image: url(http://www.bigperl.com/images/arrow.jpg); background-position: 0% 50%; background-repeat: no-repeat;">Offshore Project Manager, Software Development</a></li>\r\n	<li><a href="http://www.bigperl.com/job-view.php?id=39" style="padding: 0px 0px 0px 15px; margin: 0px; outline: 0px; color: rgb(0, 102, 204); text-decoration: none; font-weight: bold; background-image: url(http://www.bigperl.com/images/arrow.jpg); background-position: 0% 50%; background-repeat: no-repeat;">Offshore Project Manager, Database Migration</a></li>\r\n	<li><a href="http://www.bigperl.com/job-view.php?id=38" style="padding: 0px 0px 0px 15px; margin: 0px; outline: 0px; color: rgb(0, 102, 204); text-decoration: none; font-weight: bold; background-image: url(http://www.bigperl.com/images/arrow.jpg); background-position: 0% 50%; background-repeat: no-repeat;">Senior Consultant, Java EE</a></li>\r\n	<li><a href="http://www.bigperl.com/job-view.php?id=37" style="padding: 0px 0px 0px 15px; margin: 0px; outline: 0px; color: rgb(0, 102, 204); text-decoration: none; font-weight: bold; background-image: url(http://www.bigperl.com/images/arrow.jpg); background-position: 0% 50%; background-repeat: no-repeat;">Staff Consultant, Database Migration &amp; Upgrade</a></li>\r\n	<li><a href="http://www.bigperl.com/job-view.php?id=36" style="padding: 0px 0px 0px 15px; margin: 0px; outline: 0px; color: rgb(0, 102, 204); text-decoration: none; font-weight: bold; background-image: url(http://www.bigperl.com/images/arrow.jpg); background-position: 0% 50%; background-repeat: no-repeat;">Principal Consultant, Database Migration &amp; Upgrade</a></li>\r\n	<li><a href="http://www.bigperl.com/job-view.php?id=35" style="padding: 0px 0px 0px 15px; margin: 0px; outline: 0px; color: rgb(0, 102, 204); text-decoration: none; font-weight: bold; background-image: url(http://www.bigperl.com/images/arrow.jpg); background-position: 0% 50%; background-repeat: no-repeat;">Business Development Manager</a></li>\r\n	<li><a href="http://www.bigperl.com/job-view.php?id=34" style="padding: 0px 0px 0px 15px; margin: 0px; outline: 0px; color: rgb(0, 102, 204); text-decoration: none; font-weight: bold; background-image: url(http://www.bigperl.com/images/arrow.jpg); background-position: 0% 50%; background-repeat: no-repeat;">Administration Executive</a></li>\r\n	<li><a href="http://www.bigperl.com/job-view.php?id=33" style="padding: 0px 0px 0px 15px; margin: 0px; outline: 0px; color: rgb(0, 102, 204); text-decoration: none; font-weight: bold; background-image: url(http://www.bigperl.com/images/arrow.jpg); background-position: 0% 50%; background-repeat: no-repeat;">Administration Manager</a></li>\r\n	<li><a href="http://www.bigperl.com/job-view.php?id=32" style="padding: 0px 0px 0px 15px; margin: 0px; outline: 0px; color: rgb(0, 102, 204); text-decoration: none; font-weight: bold; background-image: url(http://www.bigperl.com/images/arrow.jpg); background-position: 0% 50%; background-repeat: no-repeat;">IT Recruiter</a></li>\r\n</ul>\r\n', '15072career.jpg', 0),
(6, 5, 'Contact us', '<table align="right" border="0" cellpadding="0" cellspacing="0" style="background-color:rgb(248, 248, 248); color:rgb(86, 86, 86); font-family:arial,trebuchet ms,sans-serif; font-size:12px; line-height:normal; margin:0px; outline:0px; padding:0px; width:100%">\r\n	<tbody>\r\n		<tr>\r\n			<td style="width:192px">\r\n			<h2>&nbsp;</h2>\r\n\r\n			<h3>India Offices</h3>\r\n\r\n			<h4>BigPerl Solutions Pvt. Ltd</h4>\r\n\r\n			<p>Golden square prime business centerDavanam Sarovar Portico Suites, Hosur Main Road, Bangalore - 560068 Fax : +91-9019118266</p>\r\n			<a href="http://www.bigperl.com/contactus.php#" style="padding: 0px; margin: 0px; outline: 0px; color: rgb(86, 86, 86); text-decoration: none;"><u>View Map</u></a></td>\r\n			<td style="width:0px">&nbsp;</td>\r\n			<td style="width:0px">&nbsp;</td>\r\n			<td style="width:0px">&nbsp;</td>\r\n			<td style="width:0px">&nbsp;</td>\r\n			<td style="width:0px">&nbsp;</td>\r\n			<td style="width:0px">&nbsp;</td>\r\n			<td style="width:0px">&nbsp;</td>\r\n			<td style="width:0px">&nbsp;</td>\r\n			<td style="width:114px">\r\n			<h4>&nbsp;</h4>\r\n			<strong>BigPerl Solutions Pvt. Ltd.</strong>\r\n\r\n			<p>#1444,1<sup>st</sup>floor,above Titan showroom, 100 ft.road,Hoysala circle,KSTown, Bangalore - 560060</p>\r\n			<a href="http://www.bigperl.com/mapcopy.php" style="padding: 0px; margin: 0px; outline: 0px; color: rgb(86, 86, 86); text-decoration: none;"><u>View Map</u></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:192px">\r\n			<h4>&nbsp;</h4>\r\n			<strong>BigPerl Solutions Pvt.Ltd.</strong>\r\n\r\n			<p>27/2114,East Patel Nagar, New Delhi - 110008<br />\r\n			Phone : +91-7042517271<br />\r\n			email : connect@bigperl.com</p>\r\n			<a href="http://www.bigperl.com/contactus.php#" style="padding: 0px; margin: 0px; outline: 0px; color: rgb(86, 86, 86); text-decoration: none;"><u>View Map</u></a></td>\r\n		</tr>\r\n		<tr>\r\n			<td style="width:192px">\r\n			<hr />\r\n			<h3>Canada Offices</h3>\r\n			<strong>BigPerl Solutions</strong>\r\n\r\n			<p>331 Elmwood Drive Unit 4-111 Moncton NB E1A 7Y1<br />\r\n			email:connect@bigperl.com</p>\r\n			</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '', 0),
(7, 1, 'Software Development', '<p>The process of recruitment doesn&#39;t end at hiring the right individuals for a job. It ends when the skills of those individuals are enhanced in accordance to the requirements of the industry. An intensive work process is the need of the hour to tap the enormous potential that exists in this vast&nbsp; competitive industry. At BigPerl Solutions, we intend to make the chosen personnel realize their true strengths and work on their weaknesses.</p>\r\n\r\n<p>In this fast paced world, change is the only constant. And our aim is to constantly adapt to the changing times through unique training programs and strategies. Each training program is customised, based on the demands and requirements of that particular area of work.&nbsp; At the end of the day, it is the productivity of the employees that gives an organization their desired results. Through comprehensive workshops and various training programs, we wish to produce young leaders who are capable of tackling the most challenging tasks effortlessly.&nbsp;</p>\r\n', '139575.jpg', 2),
(8, 2, 'Web Development', '<p><span style="background-color:rgb(248, 248, 248); color:rgb(86, 86, 86); font-family:arial,trebuchet ms,sans-serif; font-size:12px">We at Bigperl have some of the most efficient and trustworthy IT professionals. These IT consultants are the most reliable and most experienced professionals in this industry and possess the best skills and knowledge about the business. They can help you enhance your business with the excellent services they provide. Not only that, they also offer you customized solutions that are designed by them to suit your every need and capability. They also help you think &#39;out of the box&#39; to enhance your business and to accelerate its success, double-fold.</span></p>\r\n', '312614.jpg', 2),
(9, 2, 'Web Designing', '<p>Background verification is the need of the hour. From well-established companies to new initiated firms, every employer needs to conduct a background check before hiring their employees. A good background check process includes the verification of the candidate&#39;s educational qualifications, their previous work experience and their character. Background verification is essential to choose the right candidate for sensitive positions, as a good employee not only earns profits to your business, but also helps curb tension.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>A background check is more important than you may think. Inadequate verification may lead to hiring of the wrong candidate that could have an adverse effect on your social image and the growth of your business. Hiring wrong candidates, may also tamper one&#39;s brand image and may invite legal pressures. Background verification also saves time and money. Wondering how? Well, think about the screening, training, termination and employee replacement procedure. Thinking wise and taking the right decision saves not only money, but also your valuable time.</p>\r\n\r\n<p>&nbsp;</p>\r\n', '278663.jpg', 2),
(10, 3, 'Application Development', '<p>The driving force of any organization is, its human capital. It is an aspect of the company which should be invested in cautiously. Thus, we at BigPerl Solutions strive to render our customers with manpower that will further enrich their organization&#39;s vision. There is no denying the fact that the employees are responsible for carving a niche for their company. Thus, it makes sense to identify the right potential in individuals who, in the future will prove to be your biggest assets.</p>\r\n\r\n<p>With the help of cutting edge technology and the necessary expertise, we ensure that the most competent and qualified personnel are provided to our clients. Our team of HR Consultants are driven by the sheer abundance of talent in the industry, and seek to convert prospective opportunities into champion league of individuals. An amalgamation of unique skills and knowledge ensures that the decisions made by our team of experts is nothing but the best. Not only do we provide the employees the right platform to showcase their abilities, we also make sure our clients are provided the best of quality that comes in the form of the work undertaken by our efficient employees.&nbsp;</p>\r\n', '11702.jpg', 2),
(11, 5, 'search Engine Optimization', '<table align="center" border="0" cellpadding="0" cellspacing="0" style="font-family:times new roman; width:95%">\r\n	<tbody>\r\n		<tr>\r\n			<td><strong>Search Engine Optimization</strong></td>\r\n		</tr>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Search Engines Promotion/ Optimization / Top Ranking is the latest result oriented technique to promote websites to buyer&#39;s world over. The process calls for an extensive research on the viewing habits and the popularly used keywords by buyers to source suppliers and products on the Internet. By a planned strategic submission on the popularly used keywords, your website is promoted to the priority listing on Search Engines. Resultant of which, whenever a buyer types a keyword in your related industry to source products he gets to view your website profile before other listed websites. This not only improves the traffic of genuine buyers to your website but also multiplies your opportunity to do better business.</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n', '216981.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE IF NOT EXISTS `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(250) NOT NULL,
  `showon_homepage` int(11) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `description`, `image`, `showon_homepage`, `created_date`, `updated_date`) VALUES
(2, 'E-Commerce Solution', '&lt;p&gt;&lt;span style=&quot;background-color:rgb(255, 255, 255); font-family:open sans,sans-serif; font-size:14px&quot;&gt;Competition today is not so much Product versus Product, but traditional business design versus e-Business design.&lt;/span&gt;&lt;/p&gt;\r\n', '18900icon-ecom.png', 1, '2014-11-27', '2015-01-15'),
(3, 'Business E-Mail Solutions', '&lt;p&gt;&lt;span style=&quot;background-color:rgb(255, 255, 255); font-family:open sans,sans-serif; font-size:14px&quot;&gt;Business email solution that connects you to people, business applications and resources across the enterprise and Internet.&lt;/span&gt;&lt;/p&gt;\r\n', '14205icon-email-solution.png', 1, '2014-09-19', '2015-01-15'),
(5, 'App Development', '&lt;div class=&quot;onethree-right&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: Open Sans, sans-serif; font-size: 15px; width: 255.59375px; line-height: 16px; background: rgb(255, 255, 255);&quot;&gt;\r\n&lt;div class=&quot;onethree-right&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; width: 255.59375px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;&quot;&gt;\r\n&lt;p style=&quot;text-align:justify&quot;&gt;Mobile Application development will help you reach out to your customers who are on the move&lt;/p&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;div class=&quot;clearfix&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; background-image: initial; background-attachment: initial; background-size: initial; background-origin: initial; background-clip: initial; background-position: initial; background-repeat: initial;&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n&lt;/div&gt;\r\n\r\n&lt;div class=&quot;clearfix&quot; style=&quot;box-sizing: border-box; margin: 0px; padding: 0px; border: 0px; outline: 0px; font-family: Open Sans, sans-serif; font-size: 15px; line-height: 16px; background: rgb(255, 255, 255);&quot;&gt;&amp;nbsp;&lt;/div&gt;\r\n', '26226icon-app.png', 0, '2014-09-27', '2015-01-15'),
(6, 'Web Promotion (SEO)', '&lt;p&gt;&lt;span style=&quot;background-color:rgb(255, 255, 255); font-family:open sans,sans-serif; font-size:14px&quot;&gt;SEO allows your target customer to find your site using search terms, or keywords, that are most relevant to your product or service.&lt;/span&gt;&lt;/p&gt;\r\n', '2755icon-seo.png', 0, '2014-09-27', '2015-01-15'),
(7, 'Website design', '&lt;p&gt;Person/persons having right of erection on a plot of land, or who is the owner of a plot of land having deed of conveyance and mutation certificate and has no dues towards property&lt;/p&gt;\r\n', '25383icon-web-design.png', 0, '2014-09-27', '2015-01-15'),
(8, 'Website Maintenance', '&lt;p&gt;&lt;span style=&quot;background-color:rgb(255, 255, 255); font-family:open sans,sans-serif; font-size:14px&quot;&gt;Website maintenance services ensures that your website remains up to date with the latest web trends and technologies and caters.&lt;/span&gt;&lt;/p&gt;\r\n', '12096icon-web-maintanance.png', 0, '2014-11-13', '2015-01-15'),
(9, 'Web Development', '&lt;p&gt;&lt;span style=&quot;background-color:rgb(255, 255, 255); font-family:open sans,sans-serif; font-size:14px&quot;&gt;For over 10 years, from early days of the Internet going mainstream in India, we have been delivering the highest quality of web solutions.&lt;/span&gt;&lt;/p&gt;\r\n', '20089icon-web-development.png', 1, '2015-01-14', '2015-01-15');

-- --------------------------------------------------------

--
-- Table structure for table `service_images`
--

CREATE TABLE IF NOT EXISTS `service_images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `images` varchar(250) NOT NULL,
  `created_date` date NOT NULL,
  `updated_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=38 ;

--
-- Dumping data for table `service_images`
--

INSERT INTO `service_images` (`id`, `service_id`, `images`, `created_date`, `updated_date`) VALUES
(8, 4, '1811983099construction_on_a_hirise_200287.jpg', '2014-09-26', '2014-09-26'),
(11, 4, '31268274612333871-urban-industrial-sign-with-skyscraper-and-construction-crane.jpg', '2014-09-26', '2014-09-26'),
(13, 2, '2006144290figure_hd_picture_of_the_effect_of_construction_works_168686.jpg', '2014-09-26', '2014-09-26'),
(15, 6, '924671257pkbc.jpg', '2014-09-27', '2014-09-27'),
(16, 5, '1434469692pksd.jpg', '2014-09-27', '2014-09-27'),
(17, 3, '1336491175rain_water.jpg', '2014-09-27', '2014-09-27'),
(18, 7, '7594159831.jpg', '2014-11-12', '2014-11-12'),
(19, 7, '20250035142.jpg', '2014-11-12', '2014-11-12'),
(21, 7, '11065523023.jpg', '2014-11-12', '2014-11-12'),
(22, 7, '12047971024.jpg', '2014-11-12', '2014-11-12'),
(23, 7, '18298573295.jpg', '2014-11-12', '2014-11-12'),
(26, 7, '13155457026.jpg', '2014-11-12', '2014-11-12'),
(27, 7, '3016869107.jpg', '2014-11-12', '2014-11-12'),
(28, 7, '8631698198.jpg', '2014-11-12', '2014-11-12'),
(32, 2, 'IMG_20141115_102541_-_Copy1.JPG', '2014-11-26', '2014-11-26'),
(33, 2, 'Picture0001.jpg', '2014-11-27', '2014-11-27'),
(34, 2, 'IMG_20141115_102541.JPG', '2014-11-27', '2014-11-27'),
(35, 2, 'IMG_20141115_1025411.JPG', '2014-11-27', '2014-11-27'),
(36, 2, 'IMG_20141115_1025412.JPG', '2014-11-27', '2014-11-27'),
(37, 2, 'Picture00014.jpg', '2014-11-29', '2014-11-29');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
