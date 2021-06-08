--
-- Database: `mydb`
--
CREATE DATABASE IF NOT EXISTS `mydb1` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb1`;

-- --------------------------------------------------------

--
-- Table structure for table `department`
--

DROP TABLE IF EXISTS `department`;
CREATE TABLE IF NOT EXISTS `department` (
  `departmentCode` varchar(10) NOT NULL,
  `department` varchar(64) DEFAULT NULL,
  PRIMARY KEY (`departmentCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`departmentCode`, `department`) VALUES
('1', 'Information Technology');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staffID` int(11) NOT NULL,
  `givenName` varchar(45) DEFAULT NULL,
  `surname` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`staffID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subjectlecturer`
--

DROP TABLE IF EXISTS `subjectlecturer`;
CREATE TABLE IF NOT EXISTS `subjectlecturer` (
  `Subjects_subjectCode` varchar(10) NOT NULL,
  `Staff_staffID` int(11) NOT NULL,
  PRIMARY KEY (`Subjects_subjectCode`,`Staff_staffID`),
  KEY `fk_Subjects_has_Staff_Staff1` (`Staff_staffID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `subjectCode` varchar(10) NOT NULL,
  `subjectTitle` varchar(80) DEFAULT NULL,
  `subjectDescription` varchar(710) DEFAULT NULL,
  `infoURL` varchar(150) DEFAULT NULL,
  `studyArea` varchar(45) DEFAULT NULL,
  `Department_departmentCode` varchar(10) NOT NULL,
  PRIMARY KEY (`subjectCode`),
  KEY `fk_Subjects_Department1` (`Department_departmentCode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`subjectCode`, `subjectTitle`, `subjectDescription`, `infoURL`, `studyArea`, `Department_departmentCode`) VALUES
('1', 'Certificate IV in Cyber Security', 'Do you have an interest in working in the information technology industry? In this cyber security course you will develop the skills and knowledge for a successful career as a cyber security paraprofessional.', 'https://www.tafesa.edu.au/courses/information-technology/cyber-security', 'cyber/networking', '1'),
('2', 'Certificate IV Program in Information Technology (Networking)', 'This course will equip you with the skills to design, plan, administer and manage IT networks from home and small offices to enterprise-wide network infrastructure. This course provides a high-level IT technical base with the ability to specialise in Microsoft and Linux server operating systems, voice, wireless (Aruba), network infrastructure (Cisco CCNA, Cisco Security), virtualisation technologies (VMware, Hyper V) and sustainability.' , 'https://www.tafesa.edu.au/xml/course/aw/aw_CP00262.aspx?S=AWD&Y=2021' , 'cyber/networking' , '1'),
('3', 'Certificate III in Information Technology' , 'This qualification provides the skills and knowledge for an individual to be competent in a wide range of general Information and Communications Technology (ICT) technical functions and to achieve a degree of self-sufficiency as an advanced ICT user.' , 'https://www.tafesa.edu.au/xml/course/aw/aw_TP01194.aspx?S=AWD&Y=2021' , 'Information_Technology', '1'),
('4', 'Certificate IV in Information Technology' , 'Gain a wide range of general Information and Communications Technology (ICT) skills and knowledge. The general stream provides specialisation in information technology activities across a range of digital media technologies. It builds on the knowledge and will equip you with the expertise to manage the IT requirements of any small business.' , 'https://www.tafesa.edu.au/xml/course/aw/aw_TP01120.aspx?S=AWD&Y=2021' , 'Information_Technology', '1'),
('5', 'Certificate IV Program in Information Technology (Web-Based Technologies)' , 'This course will equip you with skills to design, develop, build and/or manage websites. You will be introduced to new and emerging web technologies including HTML5, online interactive design and development, animation, web programming in JavaScript, PHP/MySQL and ASP.Net, responsive web design for developing mobile-based websites for iPhone/iPad, Android and Windows mobile devices, and Web 2 Tools.<br><br>Note: If you want to continue your study towards a diploma and can&#39;t decide between Web-Based Technologies and Programming, there is a Double Diploma you can enrol in which covers both these areas. Ask your topic coordinator for more information on the Double Diploma if you are interested.' , 'https://www.tafesa.edu.au/xml/course/aw/aw_CP00264.aspx?S=AWD&Y=2021' , 'webdev/software', '1'),
('6', 'Certificate IV in Information Technology (Programming)' , 'This course provides you with the basic skills and knowledge in programming and software development. You will create software products to meet an initial project brief or customise existing software products to meet customer needs. The course has a focus on using C#.NET, PHP/MySQL, Java and Python coding. <br><br>Note: If you want to continue your study towards a diploma and can&#39;t decide between Web-Based Technologies and Programming, there is a Double Diploma you can enrol in which covers both these areas. Ask your topic coordinator for more information on the Double Diploma if you are interested.' , 'https://www.tafesa.edu.au/xml/course/aw/aw_CP00263.aspx?S=AWD&Y=2021' , 'webdev/software', '1');

--
-- Constraints for dumped tables
--
INSERT INTO staff (staffID, givenName, surname, email) VALUES
(1, "Karina", "Miegel", "Karina.Miegel@tafesa.edu.au"), (2, "Alex", "Zhao", "Alex.Zhao@tafesa.edu.au"),
(3, "Danny", "Sarris", "Danny.Sarris@tafesa.edu.au"), (4, "Prem", "Paelchen", "Prem.Paelchen@tafesa.edu.au"),
(5, "Heath", "Barratt", "Heath.Barratt@tafesa.edu.au"), (6, "Julie", "Ruiz", "Julie.Ruiz@tafesa.edu.au");

INSERT INTO subjectlecturer (Subjects_subjectCode, Staff_staffID) VALUES (1, 1) , (2, 2) , (3, 3) , (4, 4) , (5, 5) , (6, 6);
--
-- Constraints for table `subjectlecturer`
--
ALTER TABLE `subjectlecturer`
  ADD CONSTRAINT `fk_Subjects_has_Staff_Staff1` FOREIGN KEY (`Staff_staffID`) REFERENCES `staff` (`staffID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_Subjects_has_Staff_Subjects` FOREIGN KEY (`Subjects_subjectCode`) REFERENCES `subjects` (`subjectCode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `subjects`
--
ALTER TABLE `subjects`
  ADD CONSTRAINT `fk_Subjects_Department1` FOREIGN KEY (`Department_departmentCode`) REFERENCES `department` (`departmentCode`) ON DELETE NO ACTION ON UPDATE NO ACTION;

