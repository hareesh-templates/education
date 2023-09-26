-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 28, 2014 at 12:21 PM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `fieldatc`
--
CREATE DATABASE IF NOT EXISTS `fieldatc` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `fieldatc`;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE IF NOT EXISTS `application` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `middlename` varchar(30) NOT NULL,
  `surname` varchar(30) NOT NULL,
  `phone` int(20) NOT NULL,
  `email` varchar(300) NOT NULL,
  `programme` varchar(100) NOT NULL,
  `education` varchar(50) NOT NULL,
  `mathematics` text NOT NULL,
  `physics` text NOT NULL,
  `chemistry` text NOT NULL,
  `biology` text NOT NULL,
  `english` text NOT NULL,
  `certificate` varchar(50) NOT NULL,
  `relationship` varchar(50) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `firstname`, `middlename`, `surname`, `phone`, `email`, `programme`, `education`, `mathematics`, `physics`, `chemistry`, `biology`, `english`, `certificate`, `relationship`) VALUES
(1, 'florian', 'ephraim', 'kipeta', 654507180, 'florianephraim@gmail.com', 'Computer Science', 'form four', 'D', 'D', 'D', 'D', 'D', 'note.txt', 'Married'),
(2, 'Agatha', 'Ephraim', 'kipeta', 654507180, 'agathakipeta@gmail.com', 'Civil Engineering', 'form four', 'A', 'A', 'A', 'A', 'A', 'projects.txt', 'Single'),
(4, 'Felix', 'Ephraim', 'Kipeta', 654507180, 'felixangelo@gmail.com', 'Telecommunication Engineering', 'Form six', 'A', 'A', 'A', 'A', 'A', 'wampmanager.exe', 'Single'),
(5, 'Faraja', 'J', 'January', 98765556, 'faraja12@gmail.com', 'Mechanical ENgineering', 'form four', 'A', 'A', 'A', 'A', 'A', 'tabley.jpg', 'Single');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE IF NOT EXISTS `contents` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `full_contents` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=30 ;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `full_contents`) VALUES
(1, 'home page'),
(2, 'Addmission page is under construction'),
(3, 'We offer the following programs<br>\r\n		We offer the following programs<br>\r\n		1.DIPLOMA IN CIVIL ENGINEERING (D.C.E.)<br>2.DIPLOMA IN MECHANICAL ENGINEERING (D.M.E.)<br>3.DIPLOMA IN ELECTRICAL &amp; ELECTRONIC ENGINEERING (D.E.E.E.)<br>4.DIPLOMA IN ELECTRONICS &amp; COMMUNICATION ENGINEERING (D.E.C.E.)<br>5.DIPLOMA IN COMPUTER TECHNOLOGY (D.C.T.)<br>6.DIPLOMA IN INFORMATION TECHNOLOGY (D.I.T.)'),
(4, 'you can visit the following page:<br>For Examination Regulation visit <a href="examination_reg.php"><i>Here</i></a><br>For Appearing visit <a href="appear_exams.php"><i>Here</i>'),
(5, 'Getting around the Campus<br><br>  Walking and cycling are the most popular ways to get  around the SJUIT campus. And with state-of-the-art security  and 24 hour emergency services, it''s the safest place to be.  The St.Joseph group runs a fleet of buses for transporting students  to and from the city and to other areas. Public transport buses and  trains also ply to points near the campuses.<br><br>  Campus Lifestyle<br><br>  It''s a diverse community of students at SJUIT, and  the activities on offer are as diverse and varied too.  From entertainment to extra-curricular or even religious  pursuits, there''s never a dull moment on campus. There''s never  a dull moment on campus, as the activities on offer are as diverse and  varied too - from entertainment to extra-curricular or even religious pursuits.<br><br>  Student Affairs<br><br>  All activity related to extracurricular programs,  forums, clubs, community service, and entrepreneurship  cell and students council are managed by the st'),
(6, 'Our college was opened in 1999 and we have 50 campus all over the country.some of our campus located at:<br><ol><li>Dar es salaam</li><li>Arusha</li><li>Dodoma</li><li>Mwanza</li><li>Mbeya</li><li>Iringa</li><br>We have more than 1,500 students all over the country and the principal of our college is Mr. *******</ol>'),
(7, 'Contact us:<br><p>St Joseph University Of Tanzania<br>P.O BOX 111<br>Dar es salaam Tanzania'),
(10, 'Requirement for joining  :<br>We need at least Division four point 28 with tha pass of Mathematics,Chenistry,Physics and English.'),
(11, 'Download our application form <i><a href=''#''>Here</a></i>'),
(12, 'Regulation'),
(13, 'fee'),
(14, 'you can visit the following page:<br>For Examination Regulation visit <a href="examination_reg.php"><i>Here</i></a><br>For Appearing visit <a href="appear_exams.php"><i>Here</i>'),
(15, 'In order to appeal Examination you need to follow the following procedure:<br><ol><li>Fill the application form from the registrar office</li><li>Pay appearing fee to the Bursar office</li><li>Wait for your result</li></ol>'),
(16, 'Download 2013/2014 prospectus <a href=''#''>here</a>'),
(17, 'Policy'),
(18, 'Our college provide scholarship for girl only who want to study Engineering field.</br>This scholarship include<ol>'),
(19, 'Laboratories'),
(20, 'Computer lab'),
(21, 'Workshop'),
(22, 'This the library page'),
(23, 'We have good hostel'),
(24, 'Canteen ndio hii xaxa'),
(25, 'Medical'),
(26, 'This is news page'),
(27, 'Result'),
(28, 'Timetable'),
(29, 'Graduation day comming soon');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `heading` varchar(400) NOT NULL,
  `full_news` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `heading`, `full_news`) VALUES
(1, 'Registration form is now available in our college campus. come now to be registerd', 'Registration form is available in our college so if you want to join our in our college please come with 20000Tsh for that registration form'),
(2, 'Wanafunzi wote mnatakiwa muangalie matokeo yenu katika ARIS kwa maelezo fika ofisini.', 'Wanafunzi wote mnatakiwa muangalie matokeo yenu katika ARIS kwa maelezo fika ofisini.'),
(3, 'Kutakuwa na kikao cha wanafunzi hapo kesho asubuhi ya saa mbili', 'Kutakuwa na kikao cha wanafunzi hapo kesho asubuhi ya saa mbili'),
(4, 'Kesho kutakua na kikao kati ya wanafunzi na...', 'Kesho kutakua na kikao kati ya wanafunzi na uongozi wa chuo mapema kabisa asubuhi wanafunzi wote mnatakiwa kuwahi mkiwa na vitambulisho vyenu.\r\n\r\nTusilaumiane kama ukikosa kuja.\r\nBy admin'),
(5, 'Mobile Application started soon', 'Mobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobile Application started soonMobi');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `password`) VALUES
(1, 'florian', 'fieldatc'),
(2, 'kipeta', 'atcict'),
(3, 'gasto', 'kipeta'),
(4, 'Elimbingi', 'qwerty'),
(5, 'Nathan', 'nathan'),
(6, 'Felix', 'felix'),
(7, 'john', 'kisiri');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
