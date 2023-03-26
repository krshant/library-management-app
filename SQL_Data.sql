/*
SQLyog Community v13.1.6 (64 bit)
MySQL - 5.1.53-community-log : Database - atpl
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`atpl` /*!40100 DEFAULT CHARACTER SET latin1 */;

USE `atpl`;

/*Table structure for table `bookissue` */

DROP TABLE IF EXISTS `bookissue`;

CREATE TABLE `bookissue` (
  `bno` int(11) NOT NULL AUTO_INCREMENT,
  `mid` int(11) DEFAULT NULL,
  `isbn` varchar(20) DEFAULT NULL,
  `date_issue` date DEFAULT NULL,
  PRIMARY KEY (`bno`),
  KEY `c15` (`mid`),
  KEY `c16` (`isbn`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

/*Data for the table `bookissue` */

insert  into `bookissue`(`bno`,`mid`,`isbn`,`date_issue`) values 
(6,3,'EP15','2021-09-07'),
(5,2,'EP13','2021-12-11'),
(7,1,'EP11','2021-11-10');

/*Table structure for table `books` */

DROP TABLE IF EXISTS `books`;

CREATE TABLE `books` (
  `ISBN` varchar(20) NOT NULL,
  `title` varchar(20) DEFAULT NULL,
  `author` varchar(20) DEFAULT NULL,
  `edition` int(11) DEFAULT NULL,
  `publication` varchar(20) DEFAULT NULL,
  `category` varchar(20) DEFAULT NULL,
  `date_purchase` date DEFAULT NULL,
  `price` float DEFAULT NULL,
  PRIMARY KEY (`ISBN`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

/*Data for the table `books` */

insert  into `books`(`ISBN`,`title`,`author`,`edition`,`publication`,`category`,`date_purchase`,`price`) values 
('EP13','The Train','Rushkin Bond',2000,'Rupa','Commedy','2021-08-21',500);

/*Table structure for table `memberinfo` */

DROP TABLE IF EXISTS `memberinfo`;

CREATE TABLE `memberinfo` (
  `mid` int(11) NOT NULL AUTO_INCREMENT,
  `member_name` varchar(20) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `member_date` date DEFAULT NULL,
  `password` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`mid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

/*Data for the table `memberinfo` */

insert  into `memberinfo`(`mid`,`member_name`,`email`,`phone`,`member_date`,`password`) values 
(2,'shant','s@gmail.com','8910244147','2021-02-03','12345'),
(3,'Rahul','b@ymail.com','9821578936','0000-00-00','ff'),
(4,'Raja','ra@gmail.com','891276059','2021-09-06','11111'),
(5,'','','','0000-00-00',''),
(6,'','','','0000-00-00',''),
(7,'','','','0000-00-00',''),
(8,'','','','0000-00-00',''),
(9,'Ranjeet','rj@gmail.com','8914523698','2021-09-07','232323'),
(10,'Ranjeet','rj@gmail.com','8914523698','2021-09-07','232323');

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `uname` varchar(20) DEFAULT NULL,
  `upassword` varchar(20) DEFAULT NULL,
  `typeUser` varchar(20) DEFAULT NULL,
  `create_Date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

/*Data for the table `user` */

insert  into `user`(`id`,`uname`,`upassword`,`typeUser`,`create_Date`) values 
(1,'ss','ss','admin','2021-09-01 16:12:25'),
(2,'shant','123','admin','2021-09-01 16:13:07');

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
