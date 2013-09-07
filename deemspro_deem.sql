-- MySQL dump 10.11
--
-- Host: localhost    Database: deemspro_deem
-- ------------------------------------------------------
-- Server version	5.0.96-community

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `USER_ID` INT(10) UNSIGNED NOT NULL,
  `USERNAME` VARCHAR(45) NOT NULL,
  `PASSWORD` VARCHAR(45) NOT NULL,
  `ENABLED` tinyint(1) NOT NULL,
  PRIMARY KEY (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

DROP TABLE IF EXISTS `user_roles`;

CREATE TABLE `user_roles` (
  `USER_ROLE_ID` INT(10) UNSIGNED NOT NULL,
  `USER_ID` INT(10) UNSIGNED NOT NULL,
  `AUTHORITY` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`USER_ROLE_ID`),
  KEY `FK_user_roles` (`USER_ID`),
  CONSTRAINT `FK_user_roles` FOREIGN KEY (`USER_ID`) REFERENCES `users` (`USER_ID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Table structure for table `admin_log_ip_table`
--

DROP TABLE IF EXISTS `admin_log_ip_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_log_ip_table` (
  `admin_log_admin_id` int(50) NOT NULL,
  `admin_log_ip_used` varchar(100) NOT NULL,
  `admin_log_time` datetime NOT NULL,
  `company_id` int(100) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_log_ip_table`
--

LOCK TABLES `admin_log_ip_table` WRITE;
/*!40000 ALTER TABLE `admin_log_ip_table` DISABLE KEYS */;
INSERT INTO `admin_log_ip_table` (`admin_log_admin_id`, `admin_log_ip_used`, `admin_log_time`, `company_id`) VALUES (1,'127.0.0.1','2012-07-13 03:32:48',0),(1,'127.0.0.1','2012-07-13 03:44:44',0),(1,'127.0.0.1','2012-07-16 10:01:20',0),(1,'127.0.0.1','2012-07-16 10:01:37',0),(1,'127.0.0.1','2012-07-16 10:01:52',0),(1,'127.0.0.1','2012-07-16 10:24:29',0),(1,'192.168.1.137','2012-07-16 10:30:59',0),(1,'192.168.1.137','2012-07-16 10:31:37',0),(1,'127.0.0.1','2012-07-16 10:39:40',0),(1,'192.168.1.137','2012-07-16 11:01:25',0),(1,'127.0.0.1','2012-07-16 12:43:21',0),(1,'127.0.0.1','2012-07-16 12:44:01',0),(1,'127.0.0.1','2012-07-16 02:31:40',0),(1,'127.0.0.1','2012-07-16 04:24:44',0),(1,'127.0.0.1','2012-07-16 04:55:13',0),(1,'127.0.0.1','2012-07-17 09:33:30',0),(1,'127.0.0.1','2012-07-17 09:39:12',0),(1,'127.0.0.1','2012-07-17 09:48:05',0),(1,'127.0.0.1','2012-07-17 09:49:07',0),(1,'192.168.1.137','2012-07-17 11:14:41',0),(1,'127.0.0.1','2012-07-17 11:37:46',0),(1,'127.0.0.1','2012-07-17 01:06:54',0),(1,'127.0.0.1','2012-07-17 04:26:21',0),(1,'192.168.1.90','2012-07-18 09:57:29',0),(1,'127.0.0.1','2012-07-18 10:16:12',0),(1,'127.0.0.1','2012-07-18 10:29:07',0),(1,'127.0.0.1','2012-07-19 09:47:47',0),(1,'127.0.0.1','2012-07-19 12:53:13',0),(1,'127.0.0.1','2012-07-19 06:18:51',0),(1,'127.0.0.1','2012-07-20 10:24:40',0),(1,'127.0.0.1','2012-07-21 09:51:08',0),(1,'127.0.0.1','2012-07-21 04:24:21',0),(1,'127.0.0.1','2012-07-24 09:44:42',0),(1,'127.0.0.1','2012-07-24 10:55:26',0),(1,'127.0.0.1','2012-07-24 12:24:06',0),(1,'127.0.0.1','2012-07-24 12:40:40',0),(1,'192.168.1.82','2012-07-24 01:34:53',0),(1,'192.168.1.82','2012-07-24 03:08:49',0),(1,'127.0.0.1','2012-07-25 10:16:53',0),(1,'127.0.0.1','2012-07-25 02:49:54',0),(1,'192.168.1.102','2012-07-25 04:03:13',0),(1,'127.0.0.1','2012-07-25 04:53:23',0),(1,'127.0.0.1','2012-07-26 09:47:57',0),(1,'127.0.0.1','2012-07-26 09:53:05',0),(1,'192.168.1.102','2012-07-26 10:49:04',0),(1,'192.168.1.51','2012-07-26 12:05:32',0),(1,'192.168.1.137','2012-07-26 12:30:47',0),(1,'127.0.0.1','2012-07-26 02:41:05',0),(1,'192.168.1.102','2012-07-26 03:36:44',0),(1,'127.0.0.1','2012-07-27 09:42:54',0),(1,'127.0.0.1','2012-07-27 09:42:55',0),(1,'127.0.0.1','2012-07-27 09:43:07',0),(1,'127.0.0.1','2012-07-27 09:43:07',0),(1,'127.0.0.1','2012-07-27 09:44:47',0),(1,'127.0.0.1','2012-07-27 09:46:51',0),(1,'127.0.0.1','2012-07-27 10:45:17',0),(1,'127.0.0.1','2012-07-27 12:36:57',0),(1,'192.168.1.51','2012-07-27 05:48:43',0),(1,'192.168.1.137','2012-07-27 06:07:31',0),(1,'192.168.1.137','2012-07-27 06:07:40',0),(1,'127.0.0.1','2012-07-28 09:44:23',0),(1,'192.168.1.102','2012-07-28 10:29:38',0),(1,'127.0.0.1','2012-07-28 10:50:23',0),(1,'192.168.1.137','2012-07-28 11:15:42',0),(1,'192.168.1.90','2012-07-28 11:51:59',0),(1,'127.0.0.1','2012-07-28 04:08:55',0),(1,'127.0.0.1','2012-07-28 04:09:46',0),(1,'127.0.0.1','2012-07-28 04:11:06',0),(1,'127.0.0.1','2012-07-28 04:12:44',0),(1,'127.0.0.1','2012-07-28 04:13:50',0),(1,'127.0.0.1','2012-07-28 04:14:17',0),(1,'127.0.0.1','2012-07-28 04:15:10',0),(1,'127.0.0.1','2012-07-28 04:16:46',0),(1,'127.0.0.1','2012-07-28 04:19:19',0),(1,'127.0.0.1','2012-07-28 04:20:41',0),(1,'127.0.0.1','2012-07-28 04:20:58',0),(1,'127.0.0.1','2012-07-28 04:27:54',0),(1,'127.0.0.1','2012-07-28 04:32:05',0),(1,'127.0.0.1','2012-07-28 04:32:22',0),(1,'127.0.0.1','2012-07-28 04:33:17',0),(1,'127.0.0.1','2012-07-28 04:33:52',0),(1,'127.0.0.1','2012-07-28 04:35:08',0),(1,'127.0.0.1','2012-07-28 04:36:10',0),(1,'127.0.0.1','2012-07-28 04:40:37',0),(1,'127.0.0.1','2012-07-28 04:41:04',0),(1,'127.0.0.1','2012-07-28 04:41:58',0),(1,'127.0.0.1','2012-07-28 04:42:05',0),(1,'127.0.0.1','2012-07-28 04:42:41',0),(1,'127.0.0.1','2012-07-28 04:42:47',0),(1,'127.0.0.1','2012-07-28 04:53:33',0),(1,'127.0.0.1','2012-07-28 06:04:14',0),(1,'127.0.0.1','2012-07-28 06:04:18',0),(1,'127.0.0.1','2012-07-28 06:06:25',0),(1,'127.0.0.1','2012-07-28 06:07:05',0),(1,'127.0.0.1','2012-07-28 06:07:29',0),(1,'127.0.0.1','2012-07-28 06:07:36',0),(1,'127.0.0.1','2012-07-28 06:07:58',0),(1,'127.0.0.1','2012-07-28 06:08:21',0),(1,'127.0.0.1','2012-07-28 06:09:12',0),(1,'127.0.0.1','2012-07-28 06:09:39',0),(1,'127.0.0.1','2012-08-01 09:38:44',0),(1,'127.0.0.1','2012-08-01 09:38:46',0),(1,'192.168.1.88','2012-08-01 01:27:07',0),(1,'192.168.1.88','2012-08-01 01:27:13',0),(1,'127.0.0.1','2012-08-02 09:56:51',0),(1,'127.0.0.1','2012-08-02 09:56:51',0),(1,'127.0.0.1','2012-08-02 09:56:53',0),(1,'192.168.1.51','2012-08-02 11:33:01',0),(1,'192.168.1.51','2012-08-02 11:33:06',0),(1,'127.0.0.1','2012-08-02 12:16:01',0),(1,'127.0.0.1','2012-08-02 12:16:06',0),(1,'127.0.0.1','2012-08-02 12:16:11',0),(1,'127.0.0.1','2012-08-02 12:16:22',0),(1,'127.0.0.1','2012-08-02 12:16:40',0),(1,'127.0.0.1','2012-08-02 12:16:50',0),(1,'127.0.0.1','2012-08-02 12:17:28',0),(1,'127.0.0.1','2012-08-02 12:18:03',0),(1,'127.0.0.1','2012-08-02 12:18:29',0),(1,'127.0.0.1','2012-08-02 12:18:39',0),(1,'127.0.0.1','2012-08-02 12:18:49',0),(1,'127.0.0.1','2012-08-02 12:19:48',0),(1,'127.0.0.1','2012-08-02 12:20:08',0),(1,'127.0.0.1','2012-08-02 12:21:24',0),(1,'127.0.0.1','2012-08-02 12:26:12',0),(1,'127.0.0.1','2012-08-02 12:26:19',0),(1,'127.0.0.1','2012-08-02 12:26:37',0),(1,'127.0.0.1','2012-08-02 12:26:55',0),(1,'127.0.0.1','2012-08-02 12:27:29',0),(1,'127.0.0.1','2012-08-02 12:27:54',0),(1,'127.0.0.1','2012-08-02 12:27:58',0),(1,'127.0.0.1','2012-08-02 12:27:58',0),(1,'192.168.1.137','2012-08-02 04:11:03',0),(1,'192.168.1.137','2012-08-02 04:11:17',0),(1,'192.168.1.137','2012-08-02 04:11:43',0),(1,'192.168.1.137','2012-08-02 04:12:01',0),(1,'192.168.1.137','2012-08-02 04:12:24',0),(1,'127.0.0.1','2012-08-02 04:13:58',0),(1,'127.0.0.1','2012-08-02 04:14:14',0),(1,'127.0.0.1','2012-08-02 04:14:43',0),(1,'127.0.0.1','2012-08-02 04:16:03',0),(1,'127.0.0.1','2012-08-02 04:17:27',0),(1,'127.0.0.1','2012-08-02 04:19:03',0),(1,'127.0.0.1','2012-08-02 04:20:04',0),(1,'127.0.0.1','2012-08-02 04:52:20',0),(1,'192.168.1.51','2012-08-02 05:02:52',0),(1,'127.0.0.1','2012-08-03 09:39:54',0),(1,'127.0.0.1','2012-08-03 09:39:54',0),(1,'192.168.1.94','2012-08-03 10:08:31',0),(1,'192.168.1.137','2012-08-03 01:29:26',0),(1,'192.168.1.88','2012-08-03 02:31:06',0),(1,'192.168.1.88','2012-08-03 02:33:38',0),(1,'192.168.1.51','2012-08-03 02:34:54',0),(1,'127.0.0.1','2012-08-03 05:09:40',0),(1,'127.0.0.1','2012-08-03 05:09:49',0),(1,'127.0.0.1','2012-08-03 05:11:34',0),(1,'127.0.0.1','2012-08-04 09:47:08',0),(1,'192.168.1.88','2012-08-04 10:12:37',0),(1,'127.0.0.1','2012-08-04 10:45:21',0),(1,'192.168.1.94','2012-08-04 11:40:08',0),(1,'127.0.0.1','2012-08-04 11:44:34',0),(1,'127.0.0.1','2012-08-04 03:01:52',0),(1,'127.0.0.1','2012-08-06 10:05:08',0),(1,'127.0.0.1','2012-08-06 05:17:18',0),(1,'127.0.0.1','2012-08-07 03:00:22',0),(1,'127.0.0.1','2012-08-08 09:49:44',0),(1,'127.0.0.1','2012-08-08 01:12:57',0),(1,'127.0.0.1','2012-08-09 03:06:54',0),(1,'127.0.0.1','2012-08-13 09:41:18',0),(1,'127.0.0.1','2012-08-13 11:03:49',0),(1,'192.168.1.51','2012-08-13 11:06:52',0),(1,'127.0.0.1','2012-08-16 10:28:42',0),(1,'127.0.0.1','2012-08-16 12:10:16',0),(1,'127.0.0.1','2012-09-07 03:10:21',0),(1,'127.0.0.1','2012-09-13 12:28:05',0),(1,'127.0.0.1','2012-11-17 03:52:14',0),(1,'127.0.0.1','2012-11-19 04:52:01',0),(1,'192.168.1.108','2012-11-19 04:56:08',0),(1,'127.0.0.1','2012-11-20 05:40:32',0),(1,'127.0.0.1','2012-11-21 09:39:45',0),(1,'127.0.0.1','2012-11-21 09:52:05',0),(1,'127.0.0.1','2012-11-21 05:29:13',0),(1,'127.0.0.1','2012-11-29 09:19:55',0),(1,'127.0.0.1','2012-11-29 09:52:44',0),(1,'127.0.0.1','2012-11-29 10:24:58',0),(1,'127.0.0.1','2002-01-01 05:39:19',0),(1,'127.0.0.1','2002-01-01 08:43:53',0),(1,'127.0.0.1','2002-01-01 02:06:26',0),(1,'127.0.0.1','2002-01-01 01:21:48',0),(1,'127.0.0.1','2002-01-01 05:37:14',0),(1,'127.0.0.1','2002-01-01 01:30:45',0),(1,'127.0.0.1','2002-01-01 09:04:57',0),(1,'127.0.0.1','2012-12-14 01:22:14',0),(1,'127.0.0.1','2012-12-14 04:45:38',0),(1,'127.0.0.1','2012-12-15 09:14:01',0),(1,'127.0.0.1','2012-12-16 10:13:12',0),(1,'127.0.0.1','2012-12-16 02:23:52',0),(19,'127.0.0.1','2012-12-16 02:56:28',0),(1,'127.0.0.1','2012-12-16 03:35:20',0),(19,'127.0.0.1','2012-12-16 03:45:39',0),(19,'127.0.0.1','2012-12-16 03:58:22',0),(1,'127.0.0.1','2012-12-16 03:58:33',0),(1,'127.0.0.1','2012-12-17 10:16:55',0),(1,'192.168.1.124','2012-12-17 10:20:57',0),(19,'127.0.0.1','2012-12-17 05:46:05',0),(1,'127.0.0.1','2012-12-17 05:49:39',0),(19,'127.0.0.1','2012-12-17 05:52:14',0),(1,'127.0.0.1','2012-12-17 05:53:08',0),(1,'127.0.0.1','2012-12-17 06:55:07',0),(19,'127.0.0.1','2012-12-17 06:55:45',0),(19,'127.0.0.1','2012-12-17 06:57:40',0),(1,'127.0.0.1','2012-12-17 07:01:18',0),(19,'127.0.0.1','2012-12-18 11:15:30',0),(1,'127.0.0.1','2012-12-18 11:19:41',0),(1,'127.0.0.1','2012-12-18 11:23:04',0),(19,'127.0.0.1','2012-12-18 11:23:16',0),(1,'127.0.0.1','2012-12-18 05:05:57',0),(19,'127.0.0.1','2012-12-18 05:09:34',0),(1,'127.0.0.1','2012-12-19 09:50:34',0),(1,'127.0.0.1','2012-12-19 10:32:46',0),(1,'192.168.1.125','2012-12-19 10:58:41',0),(1,'127.0.0.1','2012-12-19 11:40:34',0),(1,'192.168.1.124','2012-12-19 12:33:42',0),(1,'127.0.0.1','2012-12-19 12:50:30',0),(19,'127.0.0.1','2012-12-19 01:28:02',0),(1,'127.0.0.1','2012-12-19 01:35:34',0),(19,'127.0.0.1','2012-12-19 01:37:23',0),(1,'127.0.0.1','2012-12-19 01:47:14',0),(1,'192.168.1.124','2012-12-19 02:28:45',0),(1,'192.168.1.71','2012-12-19 05:34:37',0),(1,'127.0.0.1','2012-12-20 09:35:30',0),(1,'192.168.1.124','2012-12-20 10:41:38',0),(1,'127.0.0.1','2012-12-21 09:39:10',0),(1,'127.0.0.1','2012-12-21 10:56:04',0),(19,'127.0.0.1','2012-12-21 11:48:01',0),(1,'127.0.0.1','2012-12-21 11:52:40',0),(1,'127.0.0.1','2012-12-21 12:17:24',0),(1,'127.0.0.1','2012-12-21 01:18:03',0),(19,'127.0.0.1','2012-12-21 01:18:31',0),(1,'127.0.0.1','2012-12-21 01:22:54',0),(19,'127.0.0.1','2012-12-21 01:24:53',0),(1,'127.0.0.1','2012-12-21 01:25:25',0),(19,'127.0.0.1','2012-12-21 02:45:28',0),(1,'127.0.0.1','2012-12-21 02:52:13',0),(19,'127.0.0.1','2012-12-21 02:57:58',0),(1,'192.168.1.166','2012-12-21 03:00:37',0),(1,'192.168.1.166','2012-12-21 03:32:14',0),(19,'192.168.1.166','2012-12-21 03:46:42',0),(19,'192.168.1.166','2012-12-21 03:47:41',0),(1,'127.0.0.1','2012-12-22 09:18:54',0),(1,'127.0.0.1','2012-12-22 02:31:16',0),(1,'192.168.1.195','2012-12-22 03:12:59',0),(1,'192.168.1.195','2012-12-22 03:38:32',0),(1,'127.0.0.1','2012-12-26 09:36:46',0),(1,'127.0.0.1','2012-12-26 11:38:18',0),(1,'127.0.0.1','2012-12-26 12:31:11',0),(1,'127.0.0.1','2012-12-26 12:57:08',0),(1,'127.0.0.1','2012-12-26 12:59:02',0),(1,'127.0.0.1','2012-12-26 01:00:11',0),(1,'127.0.0.1','2012-12-26 01:01:26',0),(1,'127.0.0.1','2012-12-26 01:02:08',0),(1,'127.0.0.1','2012-12-26 01:03:49',0),(1,'127.0.0.1','2012-12-26 01:12:55',0),(1,'127.0.0.1','2012-12-26 01:18:27',0),(1,'127.0.0.1','2012-12-26 01:19:01',0),(1,'127.0.0.1','2012-12-26 01:19:43',0),(1,'127.0.0.1','2012-12-26 02:55:35',0),(1,'127.0.0.1','2012-12-26 04:23:37',0),(1,'127.0.0.1','2012-12-26 05:47:32',0),(1,'127.0.0.1','2012-12-26 05:48:32',0),(1,'127.0.0.1','2012-12-26 05:49:56',0),(1,'127.0.0.1','2012-12-26 05:50:30',0),(1,'127.0.0.1','2012-12-27 01:40:52',0),(1,'127.0.0.1','2012-12-27 02:24:18',0),(1,'127.0.0.1','2012-12-27 02:25:32',0),(1,'127.0.0.1','2012-12-27 02:26:35',0),(1,'127.0.0.1','2012-12-27 02:30:11',0),(1,'127.0.0.1','2012-12-27 02:53:09',0),(1,'127.0.0.1','2012-12-27 02:53:47',0),(1,'127.0.0.1','2012-12-27 02:54:14',0),(1,'127.0.0.1','2012-12-27 03:09:09',0),(1,'127.0.0.1','2012-12-27 03:10:10',0),(1,'127.0.0.1','2012-12-27 03:10:38',0),(1,'127.0.0.1','2012-12-27 03:11:29',0),(1,'127.0.0.1','2012-12-27 03:12:22',0),(1,'127.0.0.1','2012-12-27 03:15:03',0),(1,'127.0.0.1','2012-12-27 03:20:41',0),(1,'127.0.0.1','2012-12-27 03:43:28',0),(1,'192.168.1.195','2012-12-27 03:44:54',0),(1,'127.0.0.1','2012-12-27 03:55:20',0),(1,'127.0.0.1','2012-12-27 04:59:56',0),(1,'127.0.0.1','2012-12-28 04:25:15',0),(22,'127.0.0.1','2012-12-28 05:52:57',0),(22,'127.0.0.1','2012-12-28 05:53:15',0),(22,'127.0.0.1','2012-12-28 05:53:59',0),(23,'127.0.0.1','2012-12-28 06:02:09',0),(28,'127.0.0.1','2012-12-28 06:53:26',0),(29,'127.0.0.1','2012-12-29 06:38:19',0),(30,'127.0.0.1','2013-01-05 04:07:48',0),(33,'192.168.1.111','2013-01-05 06:29:11',0),(34,'192.168.1.166','2013-01-05 06:51:41',0),(34,'192.168.1.166','2013-01-05 07:16:58',0),(35,'127.0.0.1','2013-01-07 09:35:35',0),(35,'127.0.0.1','2013-01-07 11:07:21',0),(35,'192.168.1.78','2013-01-07 11:21:15',0),(35,'192.168.1.78','2013-01-07 12:36:16',0),(35,'192.168.1.78','2013-01-09 10:14:19',0),(35,'127.0.0.1','2013-01-09 01:19:00',0),(35,'127.0.0.1','2013-01-09 01:20:05',0),(35,'192.168.1.78','2013-01-09 02:16:07',0),(35,'127.0.0.1','2013-01-10 11:49:25',0),(38,'127.0.0.1','2013-01-10 06:10:53',0),(40,'127.0.0.1','2013-01-11 12:41:41',0),(41,'127.0.0.1','2013-01-12 06:22:06',0),(42,'182.72.224.10','2013-01-16 06:40:03',0),(42,'182.72.224.10','2013-01-17 11:16:11',0),(42,'182.72.224.10','2013-01-17 12:17:29',0),(42,'182.72.224.10','2013-01-17 01:13:12',0),(42,'182.72.224.10','2013-01-18 05:40:43',0),(42,'182.72.224.10','2013-01-18 06:22:05',0),(44,'182.72.224.10','2013-01-21 02:03:51',0),(44,'182.72.224.10','2013-01-21 02:04:36',0),(45,'182.72.224.10','2013-01-22 11:29:27',0),(46,'182.72.224.10','2013-02-01 12:04:30',0),(46,'182.72.224.10','2013-02-01 12:15:02',0),(40,'182.72.224.10','2013-02-11 04:48:46',0),(40,'182.72.224.10','2013-02-11 05:28:42',0),(41,'182.72.224.10','2013-02-11 06:16:20',0),(40,'182.72.224.10','2013-02-11 06:17:33',0),(40,'182.72.224.10','2013-02-12 10:34:26',0),(40,'182.72.224.10','2013-02-12 11:55:44',0),(40,'182.72.224.10','2013-02-12 12:23:47',0),(40,'182.72.224.10','2013-02-12 01:01:23',0),(40,'182.72.224.10','2013-02-13 04:22:08',0);
/*!40000 ALTER TABLE `admin_log_ip_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_table`
--

DROP TABLE IF EXISTS `admin_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_table` (
  `admin_id` int(50) NOT NULL auto_increment,
  `username` varchar(100) NOT NULL,
  `admin_pwd` varchar(100) NOT NULL,
  `first_name` varchar(100) NOT NULL,
  `last_name` varchar(100) NOT NULL,
  `join_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `email` varchar(100) NOT NULL,
  `user_effective_date` datetime NOT NULL,
  `user_expiry_date` datetime NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_table`
--

LOCK TABLES `admin_table` WRITE;
/*!40000 ALTER TABLE `admin_table` DISABLE KEYS */;
INSERT INTO `admin_table` (`admin_id`, `username`, `admin_pwd`, `first_name`, `last_name`, `join_date`, `email`, `user_effective_date`, `user_expiry_date`, `status`) VALUES (1,'admin','c3284d0f94606de1fd2af172aba15bf3','','','2012-08-03 22:02:56','','0000-00-00 00:00:00','0000-00-00 00:00:00',1);
/*!40000 ALTER TABLE `admin_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `approval_type_table`
--

DROP TABLE IF EXISTS `approval_type_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `approval_type_table` (
  `app_id` int(50) NOT NULL auto_increment,
  `app_name` varchar(100) NOT NULL,
  `app_user` varchar(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`app_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `approval_type_table`
--

LOCK TABLES `approval_type_table` WRITE;
/*!40000 ALTER TABLE `approval_type_table` DISABLE KEYS */;
INSERT INTO `approval_type_table` (`app_id`, `app_name`, `app_user`, `company_id`) VALUES (1,'First_Approval','[\"1\",\"19\"]',0),(2,'Karthick QA','[\"1\",\"10\",\"11\",\"19\"]',0),(3,'emp','[\"35\",\"37\"]',37);
/*!40000 ALTER TABLE `approval_type_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `cms_demo_table`
--

DROP TABLE IF EXISTS `cms_demo_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `cms_demo_table` (
  `cms_demo_id` int(20) NOT NULL auto_increment,
  `company_name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `no_of_employees` varchar(20) NOT NULL,
  `no_of_users` varchar(20) NOT NULL,
  `type_of_iso_qualification` varchar(50) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`cms_demo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `cms_demo_table`
--

LOCK TABLES `cms_demo_table` WRITE;
/*!40000 ALTER TABLE `cms_demo_table` DISABLE KEYS */;
INSERT INTO `cms_demo_table` (`cms_demo_id`, `company_name`, `phone`, `no_of_employees`, `no_of_users`, `type_of_iso_qualification`, `company_id`) VALUES (1,'Company name','Phonenumber','No Of Employees','No Of Users','Type of Iso Qualification',0);
/*!40000 ALTER TABLE `cms_demo_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `company_logos`
--

DROP TABLE IF EXISTS `company_logos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `company_logos` (
  `logo_id` int(100) NOT NULL auto_increment,
  `company_logo` varchar(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`logo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `company_logos`
--

LOCK TABLES `company_logos` WRITE;
/*!40000 ALTER TABLE `company_logos` DISABLE KEYS */;
INSERT INTO `company_logos` (`logo_id`, `company_logo`, `company_id`) VALUES (1,'uploadimage/ajsquare1/2013021320130213british shorthair kitten wide.jpg',1);
/*!40000 ALTER TABLE `company_logos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `customer_feedback`
--

DROP TABLE IF EXISTS `customer_feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customer_feedback` (
  `cust_feedback_id` int(100) NOT NULL auto_increment,
  `cust_name` varchar(100) NOT NULL,
  `emp_name` varchar(100) NOT NULL,
  `feedback_type` varchar(100) NOT NULL,
  `feedback_memo` text NOT NULL,
  `document_name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `attachment` varchar(100) NOT NULL,
  `feedback_time` varchar(100) NOT NULL,
  `complaint_to` int(100) NOT NULL,
  `complaint_type` varchar(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`cust_feedback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customer_feedback`
--

LOCK TABLES `customer_feedback` WRITE;
/*!40000 ALTER TABLE `customer_feedback` DISABLE KEYS */;
INSERT INTO `customer_feedback` (`cust_feedback_id`, `cust_name`, `emp_name`, `feedback_type`, `feedback_memo`, `document_name`, `description`, `attachment`, `feedback_time`, `complaint_to`, `complaint_type`, `company_id`) VALUES (18,'walal','seetha','bad service','gfdgf','fdgfdg','yy','attach/20120804 15:43:18_Change Control Register(TP 2502).doc','01-01-2002',0,'0',0),(19,'walal','sindhuja','good customer care','karthikadevi','karthikadevi','karthikadevi','attach/20120804 15:49:34_qms_project.doc','08-04-2012',0,'0',0),(20,'suganya','suganya','good in maintance','ghj','','','','02-12-2013',3,'test process',1),(21,'suganya','suganya','good in maintance','gjghj','','','','02-12-2013',2,'suganya',1);
/*!40000 ALTER TABLE `customer_feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `doc_assign_table`
--

DROP TABLE IF EXISTS `doc_assign_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `doc_assign_table` (
  `doc_assign_id` int(100) NOT NULL auto_increment,
  `docu_auto_id` int(100) NOT NULL,
  `doc_authored_by` int(100) NOT NULL,
  `assign_to` int(100) NOT NULL,
  `assign_status` int(100) NOT NULL COMMENT 'no use',
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`doc_assign_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `doc_assign_table`
--

LOCK TABLES `doc_assign_table` WRITE;
/*!40000 ALTER TABLE `doc_assign_table` DISABLE KEYS */;
INSERT INTO `doc_assign_table` (`doc_assign_id`, `docu_auto_id`, `doc_authored_by`, `assign_to`, `assign_status`, `company_id`) VALUES (1,1,19,1,0,0),(2,1,19,19,0,0),(3,2,35,35,0,37),(4,2,35,37,0,37);
/*!40000 ALTER TABLE `doc_assign_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `document_table`
--

DROP TABLE IF EXISTS `document_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `document_table` (
  `docu_auto_id` int(100) NOT NULL auto_increment,
  `docu_gen_id` varchar(100) NOT NULL,
  `folder_id` int(100) NOT NULL,
  `count_of_doc` int(100) NOT NULL,
  `media_type` int(10) NOT NULL,
  `approval_type` int(100) NOT NULL,
  `document_save_type` int(100) NOT NULL,
  `doc_authored_by` int(100) NOT NULL,
  `posted_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`docu_auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `document_table`
--

LOCK TABLES `document_table` WRITE;
/*!40000 ALTER TABLE `document_table` DISABLE KEYS */;
INSERT INTO `document_table` (`docu_auto_id`, `docu_gen_id`, `folder_id`, `count_of_doc`, `media_type`, `approval_type`, `document_save_type`, `doc_authored_by`, `posted_date`, `company_id`) VALUES (1,'',1,3,0,1,1,19,'2012-12-21 21:20:56',0),(2,'',5,1,0,3,1,35,'2013-01-07 18:34:51',37);
/*!40000 ALTER TABLE `document_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `feedback` (
  `feedback_id` int(100) NOT NULL auto_increment,
  `feedback` varchar(200) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`feedback_id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `feedback`
--

LOCK TABLES `feedback` WRITE;
/*!40000 ALTER TABLE `feedback` DISABLE KEYS */;
INSERT INTO `feedback` (`feedback_id`, `feedback`, `company_id`) VALUES (3,'late replay',0),(4,'not delivered',0),(5,'bad service',0),(7,'no customer support',0),(8,'not working',0),(11,'good customer care',0),(10,'late in door delivery',0),(12,'good prodect',0),(15,'good in maintance',1);
/*!40000 ALTER TABLE `feedback` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `folder_table`
--

DROP TABLE IF EXISTS `folder_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `folder_table` (
  `folder_id` int(100) NOT NULL auto_increment,
  `folder_name` varchar(100) NOT NULL,
  `folder_desc` text NOT NULL,
  `read_access` varchar(100) NOT NULL,
  `write_access` varchar(100) NOT NULL,
  `company_id` int(35) NOT NULL,
  PRIMARY KEY  (`folder_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `folder_table`
--

LOCK TABLES `folder_table` WRITE;
/*!40000 ALTER TABLE `folder_table` DISABLE KEYS */;
INSERT INTO `folder_table` (`folder_id`, `folder_name`, `folder_desc`, `read_access`, `write_access`, `company_id`) VALUES (1,'Test','Test  Description','1,19','1,19',0),(2,'Admin','Description','1,5,9,10','1,5,9,10,11,12,13,14,15,16,18,19',0),(3,'karthick','Folder Created by karthik','1,9,11,19','1,9,19',37),(4,'testfolderss','testfolderss','35','35',37),(5,'raja','doc emp','37,35','35,37',37);
/*!40000 ALTER TABLE `folder_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_table`
--

DROP TABLE IF EXISTS `group_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_table` (
  `group_id` int(100) NOT NULL auto_increment,
  `group_name` varchar(100) NOT NULL,
  `group_read` int(50) NOT NULL COMMENT '0=>unread,1=>read',
  `group_write` int(50) NOT NULL COMMENT '0=>unwrite,1=>write',
  `group_status` int(50) NOT NULL COMMENT '1=>enable,0=>disable',
  `admin_id` int(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_table`
--

LOCK TABLES `group_table` WRITE;
/*!40000 ALTER TABLE `group_table` DISABLE KEYS */;
INSERT INTO `group_table` (`group_id`, `group_name`, `group_read`, `group_write`, `group_status`, `admin_id`, `company_id`) VALUES (2,'Medical',1,1,1,1,0),(23,'grafix',1,0,1,1,0),(21,'maya',1,0,1,1,0),(22,'animation',1,0,1,1,0),(8,'airtel',1,0,1,1,0),(10,'BSNL',1,0,1,1,0),(11,'call center',1,0,1,1,0),(12,'doctor',1,0,1,1,0),(13,'Engg',1,0,1,1,0),(14,'Factory',1,0,1,1,0),(15,'gold',1,0,0,1,0),(24,'ukkjhk',2,0,1,1,0),(25,'klkl',1,0,1,1,0),(26,'newgroup',1,0,1,23,25),(27,'php',1,0,1,35,37),(28,'Group1',0,0,1,42,3),(29,'admin',0,0,1,40,1);
/*!40000 ALTER TABLE `group_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `job_title_table`
--

DROP TABLE IF EXISTS `job_title_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `job_title_table` (
  `job_id` int(100) NOT NULL auto_increment,
  `job_name` varchar(100) NOT NULL,
  `job_desc` text NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`job_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `job_title_table`
--

LOCK TABLES `job_title_table` WRITE;
/*!40000 ALTER TABLE `job_title_table` DISABLE KEYS */;
INSERT INTO `job_title_table` (`job_id`, `job_name`, `job_desc`, `company_id`) VALUES (6,'rtretret','ertertert',1),(7,'rtreterter','etertertret',1),(3,'shivaddfdfdsf','sdfsdfsdfsdif  sdfhsdafa s asdfhas ffdhdusfjdksgh gddfdsfdsfdsfsdfdsfsdf fdsggdgdfgg gdsf fgjh dfgdfgdfg',0),(4,'fdrtqiueiotjejg','ij dfgjisdfj g d fsgjsijgs dsfgsg fdsf gsdgjkfdgfg',0);
/*!40000 ALTER TABLE `job_title_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `location_details`
--

DROP TABLE IF EXISTS `location_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `location_details` (
  `location_id` int(255) NOT NULL auto_increment,
  `location` varchar(255) NOT NULL,
  `location_description` varchar(255) NOT NULL,
  `company_id` int(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY  (`location_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `location_details`
--

LOCK TABLES `location_details` WRITE;
/*!40000 ALTER TABLE `location_details` DISABLE KEYS */;
INSERT INTO `location_details` (`location_id`, `location`, `location_description`, `company_id`, `status`) VALUES (1,'test location','',1,1),(7,'demo location','demo location',1,1),(8,'Lab','Computer Lab\r\n',1,1);
/*!40000 ALTER TABLE `location_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manage_companies_table`
--

DROP TABLE IF EXISTS `manage_companies_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manage_companies_table` (
  `com_id` int(100) NOT NULL auto_increment,
  `com_name` varchar(100) NOT NULL,
  `com_address` varchar(300) NOT NULL,
  `com_address1` varchar(300) NOT NULL,
  `com_address2` varchar(300) NOT NULL,
  `com_city` varchar(100) NOT NULL,
  `com_zip` int(100) NOT NULL,
  `com_country` varchar(100) NOT NULL,
  `com_phone` int(10) NOT NULL,
  `com_email` varchar(100) NOT NULL,
  `com_fax` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `admin_id` int(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`com_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1022 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manage_companies_table`
--

LOCK TABLES `manage_companies_table` WRITE;
/*!40000 ALTER TABLE `manage_companies_table` DISABLE KEYS */;
INSERT INTO `manage_companies_table` (`com_id`, `com_name`, `com_address`, `com_address1`, `com_address2`, `com_city`, `com_zip`, `com_country`, `com_phone`, `com_email`, `com_fax`, `status`, `admin_id`, `company_id`) VALUES (1004,'solo solo solo solo ','solo solo solo solo','solo solo solo solo','solo solo solo solo','solo solo solo solo',1111,'Barbados',2123121212,'k@gmail.com','dfgdfg',1,1,0),(1005,'wala wala wala wala wala wala wala wala wala','wala wala wala wala wala wala wala wala wala wala','wala','wala','sdf',1111,'Afghanistan',2123121212,'k@gmail.com','wala',1,1,0),(1006,'add company','add company','add company','add company','add company',1111,'Albania',2123121212,'k@gmail.com','1212',0,1,0),(1007,'bag door','bag door','bag door','bag door','bag door',1212,'Algeria',2123121212,'k@gmail.com','1212',0,1,0),(1008,'core java','core java','core java','core java','core java',1212,'American',2123,'k@gmail.com','1212',0,1,0),(1009,'dog care','dog care','dog care','dog care','dog care',1212,'Andorra',2123121212,'k@gmail.com','1212',0,1,0),(1010,'egg store','egg store','egg store','egg store','egg store',1212,'Angola',2123121212,'k@gmail.com','1212',0,1,0),(1011,'fox pro','fox pro','fox pro','fox pro','fox pro',1212,'Anguilla',2123,'k@gmail.com','1212',0,1,0),(1012,'glitter','glitter','glitter','glitter','glitter',1212,'Antarctica',2123121212,'k@gmail.com','1212',0,1,0),(1013,'honeywell','honeywell','honeywell','honeywell','honeywell',1212,'Aruba',2123121212,'k@gmail.com','1212',0,1,0),(1014,'soda','soda','','','soda',123456,'Afghanistan',1213346565,'soda@gmail.com','',0,1,0),(1001,'ajsquare','madurai','','madurai','sdfds',4556556,'Andorra',445545,'karthika@fg.net','vbdgb',0,35,37),(1015,'test','test','','','madurai',0,'India',1234567890,'suganya@ajsquare.net','',0,40,1);
/*!40000 ALTER TABLE `manage_companies_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manage_customer_table`
--

DROP TABLE IF EXISTS `manage_customer_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manage_customer_table` (
  `cus_id` int(100) NOT NULL auto_increment,
  `cus_title` varchar(100) NOT NULL,
  `cus_name` varchar(100) NOT NULL,
  `cus_name1` varchar(100) NOT NULL,
  `cus_address` varchar(300) NOT NULL,
  `cus_address1` varchar(300) NOT NULL,
  `cus_address2` varchar(300) NOT NULL,
  `cus_city` varchar(100) NOT NULL,
  `cus_zip` int(100) NOT NULL,
  `cus_country` varchar(100) NOT NULL,
  `cus_phone` int(10) NOT NULL,
  `cus_email` varchar(100) NOT NULL,
  `cus_job` varchar(100) NOT NULL,
  `cus_com_name` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `admin_id` int(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`cus_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1015 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manage_customer_table`
--

LOCK TABLES `manage_customer_table` WRITE;
/*!40000 ALTER TABLE `manage_customer_table` DISABLE KEYS */;
INSERT INTO `manage_customer_table` (`cus_id`, `cus_title`, `cus_name`, `cus_name1`, `cus_address`, `cus_address1`, `cus_address2`, `cus_city`, `cus_zip`, `cus_country`, `cus_phone`, `cus_email`, `cus_job`, `cus_com_name`, `status`, `admin_id`, `company_id`) VALUES (1010,'wala','walal','walal','sda','adasd','asd','wala',11212,'Afghanistan',1313121212,'k@hmai.com','wala','1008',1,1,0),(1011,'kodak','kodak','kodak','kodak','kodak','kodak','kodak',11212,'Bahamas',1313121212,'k@hmai.com','wala','1007',0,1,0),(1012,'aj-customer','aj-customer','aj-customer','aj-customer','','aj-customer','aj-customer',45345,'Azerbaijan',56363463,'ajcustomer@aj.net','aj-customer','1001',0,35,37),(1013,'ajsquare','raja','raja','madurai','','madurai','madurai',623526,'India',422333355,'ajsquare@gmail.com','php','1001',0,35,37),(1014,'test','suganya','','test','','','madurai',0,'Barbados',1234567890,'suganya@ajsquare.net','','1015',1,40,1);
/*!40000 ALTER TABLE `manage_customer_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manage_employees_table`
--

DROP TABLE IF EXISTS `manage_employees_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manage_employees_table` (
  `emp_id` int(10) NOT NULL auto_increment,
  `title` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `address1` varchar(50) NOT NULL,
  `address2` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `zip` varchar(25) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `job_title` int(50) NOT NULL,
  `date_of_join` date NOT NULL,
  `status` int(10) NOT NULL,
  `admin_id` int(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`emp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manage_employees_table`
--

LOCK TABLES `manage_employees_table` WRITE;
/*!40000 ALTER TABLE `manage_employees_table` DISABLE KEYS */;
INSERT INTO `manage_employees_table` (`emp_id`, `title`, `first_name`, `last_name`, `address1`, `address2`, `city`, `zip`, `phone`, `email`, `job_title`, `date_of_join`, `status`, `admin_id`, `company_id`) VALUES (2,'ssssss','sindhuja','s','rrrrrrrrrr','yyyyyyyyy','Madurai','623556','985641235','sindhuja@ajsquare.net',3,'2012-07-17',1,1,0),(3,'ppppppppp','seetha','a','fghj','hjgjk','Madurai','623556','985641235','seetha@ajsquare.net',0,'2012-07-18',0,0,0),(4,'sss','lakshmi','r','ttt','hhh','Madurai','623556','985641235','lakshmi@ajsquare.net',0,'2012-07-01',0,1,0),(5,'test','suganya','','test','','madurai','','1234567890','suganya@ajsquare.net',7,'2013-02-12',1,40,1);
/*!40000 ALTER TABLE `manage_employees_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manage_supplier_table`
--

DROP TABLE IF EXISTS `manage_supplier_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manage_supplier_table` (
  `sup_id` int(100) NOT NULL auto_increment,
  `sup_name` varchar(100) NOT NULL,
  `sup_address` varchar(300) NOT NULL,
  `sup_address1` varchar(300) NOT NULL,
  `sup_address2` varchar(300) NOT NULL,
  `sup_city` varchar(100) NOT NULL,
  `sup_zip` int(100) NOT NULL,
  `sup_country` varchar(100) NOT NULL,
  `sup_phone` int(10) NOT NULL,
  `sup_email` varchar(100) NOT NULL,
  `sup_fax` varchar(100) NOT NULL,
  `sup_web` varchar(100) NOT NULL,
  `supc_title` varchar(100) NOT NULL,
  `supc_name` varchar(100) NOT NULL,
  `supc_name1` varchar(100) NOT NULL,
  `supc_address` varchar(300) NOT NULL,
  `supc_address1` varchar(300) NOT NULL,
  `supc_address2` varchar(300) NOT NULL,
  `supc_city` varchar(100) NOT NULL,
  `supc_zip` int(100) NOT NULL,
  `supc_country` varchar(255) NOT NULL,
  `supc_phone` int(100) NOT NULL,
  `supc_email` varchar(100) NOT NULL,
  `status` int(11) NOT NULL,
  `admin_id` int(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`sup_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1008 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manage_supplier_table`
--

LOCK TABLES `manage_supplier_table` WRITE;
/*!40000 ALTER TABLE `manage_supplier_table` DISABLE KEYS */;
INSERT INTO `manage_supplier_table` (`sup_id`, `sup_name`, `sup_address`, `sup_address1`, `sup_address2`, `sup_city`, `sup_zip`, `sup_country`, `sup_phone`, `sup_email`, `sup_fax`, `sup_web`, `supc_title`, `supc_name`, `supc_name1`, `supc_address`, `supc_address1`, `supc_address2`, `supc_city`, `supc_zip`, `supc_country`, `supc_phone`, `supc_email`, `status`, `admin_id`, `company_id`) VALUES (1003,'dfsdf','awrrer','','','walac',1212,'Albania',1323232323,'k@G.COM','SDFFD','http://www.wala.com','asd','sdasd','dasdasd','dfg','dfg','dfg','walac',23132,'Albania',1223431234,'k@G.COM',0,1,0),(1002,'sdf','sf','sf','sfd','sdf',1212,'Bangladesh',1323232323,'k@G.COM','SDFFD','http://www.wala.com','asd','sdasd','dasdasd','sdf','sdf','sf','walac',23132,'Bangladesh',1223431234,'k@G.COM',1,1,0);
/*!40000 ALTER TABLE `manage_supplier_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `manage_users_table`
--

DROP TABLE IF EXISTS `manage_users_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `manage_users_table` (
  `user_id` int(50) NOT NULL auto_increment,
  `user_name` varchar(100) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `job_title` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `effective_date` date NOT NULL,
  `expiry_date` date NOT NULL,
  `signature` varchar(100) NOT NULL,
  `status` int(50) NOT NULL COMMENT '1=>enable,0=>disable ',
  `folder` varchar(100) NOT NULL,
  `access_documents` varchar(100) NOT NULL,
  `assign_group` varchar(100) NOT NULL,
  `profile` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  `company_name` varchar(100) NOT NULL,
  PRIMARY KEY  (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `manage_users_table`
--

LOCK TABLES `manage_users_table` WRITE;
/*!40000 ALTER TABLE `manage_users_table` DISABLE KEYS */;
INSERT INTO `manage_users_table` (`user_id`, `user_name`, `pwd`, `fname`, `lname`, `job_title`, `email`, `effective_date`, `expiry_date`, `signature`, `status`, `folder`, `access_documents`, `assign_group`, `profile`, `address`, `company_id`, `company_name`) VALUES (1,'admin','c3284d0f94606de1fd2af172aba15bf3','karthikadevi','karthikadevi','karthikadevi','karthika@ajsquare.net','2012-07-04','2012-07-19','karthikadevi',1,'','','2','22','karthikadevikarthikadevi',1,''),(5,'xml language','c3284d0f94606de1fd2af172aba15bf3','xml language','admin','xml language','karthika@ajsquare.ne','2012-07-04','2012-07-03','xcvvxcv',1,'xcvxv','xcvxcv','2','17','xml language',0,''),(9,'bat man','c3284d0f94606de1fd2af172aba15bf3','bat man','bat man','bat man','Admin@gmail.com','2012-07-27','2012-07-28','bat man',1,'bat man','','2','16','bat man',0,''),(10,'cat and mouse','5b1b546f149522fd0ad400b17889c3c9','cat and mouse','cat and mouse','cat and mouse','karthika@ajsquare.neto','2012-07-27','2012-07-28','cat and mouse',1,'cat and mouse','','2','16','cat and mouse',0,''),(11,'doll care','8aa26238140aaa9e8aa2e18d37d433df','doll care','doll care','doll care','Admin@gmail.co','2012-07-28','2012-07-31','doll care',1,'doll care','Admin','13','17','doll care',0,''),(12,'eagl','19101a88c896bb29a5b8860da92529be','eagl','eagl','eagl','eagl@gmail.com','2012-07-27','2012-07-31','eagl',1,'eagl','','2','16','eagl',0,''),(13,'fox fat','3759d9c53610e593682bb694c36b2905','fox fat','fox fat','fox fat','foxfat@ajsquare.ne','2012-07-27','2012-07-28','fox fat',1,'fox fat','Admin','12','25','fox fat',0,''),(14,'grill','619fec9bd8c09235667ac4808b180764','grill','grill','grill','grill@gmail.com','2012-07-27','2012-07-28','grill',1,'grill','Admin','11','22','grill',0,''),(15,'hill','a1dc9f4aa744abfb2e0754a658d4581e','hill','hill','hill','hill@gmail.com','2012-07-28','2012-07-31','hill',1,'hill','Admin','10','18','hill',0,''),(16,'jakea','3bd6fe40f0dcc8ef9ebf9b2eee24dd48','jakea','jakea','jakea','jakea@gmail.com','2012-07-27','2012-07-28','jakea',1,'jakea','Admin','8','17','jakea',0,''),(18,'karthikaaa','c3284d0f94606de1fd2af172aba15bf3','karthikaaa','karthikaaa','karthikaaa','karthikaaa@gmail.com','2012-08-04','2012-08-05','karthikaaa',1,'karthikaaa','','2','18','karthikaaa',0,''),(19,'testuser','85f0fb9cc2792a9b87e3b3facccedc40','testuser','testuser','testuser','testuser@ajsquare.net','2012-12-17','2012-12-31','testuser',1,'','','2','18','Madurai',0,''),(20,'testing','a9a22a16d1b7b2894f597e6b464b886e','','','','dsfdsf','0000-00-00','0000-00-00','',1,'','','','','',22,''),(21,'sindhuja','e8b03e68dfe9bcc76a47fae77908b177','','','','karthika@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',23,''),(22,'chavanss','0b33fef0bc3cf73c1b7b670895e04cac','','','','karthikass@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',24,''),(23,'shiva','a432b02b4b4db740bf68ab4bc29c3212','','','','shiva@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',25,'shivaa1140'),(24,'admin','cf4e0ae1c29c14e279113a6a8e62fadc','','','','ewq','0000-00-00','0000-00-00','',1,'','','','','',26,'chavanc22ab'),(25,'karthikass@ajsquare.net','e6153591405676c72ec09da0d85da319','','','','sdfdsf','0000-00-00','0000-00-00','',1,'','','','','',27,'dfdsffc800'),(26,'dsfds','74be16979710d4c4e7c6647856088456','','','','','0000-00-00','0000-00-00','',1,'','','','','',28,'fsdfdsf084b6'),(27,'','74be16979710d4c4e7c6647856088456','','','','','0000-00-00','0000-00-00','',1,'','','','','',29,'30ef3'),(28,'ajsquare','841d66afabb7219158d763f92bd17f95','','','','karthika@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',30,'ajsquarefa3a3'),(29,'superadmin','f1195166c1d689872441ada1a7a125ab','','','','karthika@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',31,'Company51ef1'),(30,'robin','80bdf0f29ff93c1e33d308971bc5a7b3','','','','karthikaas@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',32,'ajsquare362e8'),(31,'manakalam','f1195166c1d689872441ada1a7a125ab','','','','karthikasd@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',33,'manakalamd3d94'),(32,'malathy','ec18c34878afa8f0cbcb5556c29d7739','','','','kartdfdhika@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',34,'malathy94f6d'),(33,'Bronston','8089d565d3bb5151ad4cc09df995e5b7','','','','bronston@aj.net','0000-00-00','0000-00-00','',1,'','','','','',35,'ajsquare40008'),(34,'Karthick','fb469d7ef430b0baf0cab6c436e70375','','','','karthickkumar.aj@gmail.com','0000-00-00','0000-00-00','',1,'','','','','',36,'ajs9cfdf'),(35,'karthikadevi','d771a691fcb2bd0382c475e3b93faa3e','','','','karthikadevi@aj.net','0000-00-00','0000-00-00','',1,'','','','','',37,'karthikadevi2bb23'),(36,'robinrobin','3fd3603798162a854e4738445b25cf31','','','','karthikasdsdevi@aj.net','0000-00-00','0000-00-00','',1,'','','','','',38,'ajsquareaba3b'),(37,'raja','cf87fe99ea5b1c702a38bb2ec5da3e07','raja','raja','php','raja@gmail.com','2013-01-01','2013-01-30','raja',1,'','','27','31','madurai',37,''),(38,'superadmindsad','2544809bcd73c1dfa8e6d1601bd61240','','','','karthikaassa@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',39,'ajsquaredsfds39'),(39,'karthikaassa@ajsquare.net','f1195166c1d689872441ada1a7a125ab','','','','karthikas@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',40,'ajsquare40'),(40,'chavan','05c55b9566a86bedd70f7e74f5e8a039','','','','chavan@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',1,'ajsquare1'),(41,'karthika','f1195166c1d689872441ada1a7a125ab','','','','karthika@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',2,'ajsquare2'),(44,'admin','c3284d0f94606de1fd2af172aba15bf3','','','','admin@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',4,'ajsquare4'),(43,'testuser','85f0fb9cc2792a9b87e3b3facccedc40','testuser','testuser','testuser','testuser@ajsquare.net','2013-01-30','2013-02-21','testuser',1,'','','28','32','dsfdsfds',3,''),(45,'qmsadmin','a705e8cf60d772ef8a9ff4379624eb52','','','','qmsadmin@ajsquare.net','0000-00-00','0000-00-00','',1,'','','','','',5,'qms5'),(46,'karthika','1be08e781e087ff046c9c55080ec9502','','','','qmscompany@aj.net','0000-00-00','0000-00-00','',1,'','','','','',6,'qmscompany6'),(47,'suganya','825ebb674a6040f705e1b0970e23d049','','','','suganya@ajsquare.net','2013-02-11','2013-03-13','',1,'','','','','',7,'test7');
/*!40000 ALTER TABLE `manage_users_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mul_document_table`
--

DROP TABLE IF EXISTS `mul_document_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mul_document_table` (
  `mul_doc_id` int(100) NOT NULL auto_increment,
  `docu_auto_id` int(100) NOT NULL,
  `user_doc_id` varchar(100) NOT NULL,
  `doc_title` varchar(100) NOT NULL,
  `doc_type` varchar(100) NOT NULL,
  `hard_copy` text NOT NULL,
  `media_type` varchar(50) NOT NULL,
  `electronic_doc_path` varchar(100) NOT NULL,
  `elc_num` int(100) NOT NULL,
  `elc_key` varchar(100) NOT NULL,
  `linking_doc` varchar(100) NOT NULL,
  `support_doc` varchar(100) NOT NULL,
  `doc_count` int(100) NOT NULL COMMENT 'document increment id',
  `doc_authored_by` int(100) NOT NULL,
  `cmd` text NOT NULL,
  `new_old__status` int(50) NOT NULL COMMENT '0=>new 1=>old',
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`mul_doc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mul_document_table`
--

LOCK TABLES `mul_document_table` WRITE;
/*!40000 ALTER TABLE `mul_document_table` DISABLE KEYS */;
INSERT INTO `mul_document_table` (`mul_doc_id`, `docu_auto_id`, `user_doc_id`, `doc_title`, `doc_type`, `hard_copy`, `media_type`, `electronic_doc_path`, `elc_num`, `elc_key`, `linking_doc`, `support_doc`, `doc_count`, `doc_authored_by`, `cmd`, `new_old__status`, `company_id`) VALUES (1,1,'WO-Testing','Testing Doc','Work Instruction','Lab','2','classes/Lib/dynamic_folders/Test/bea59_2012-12-21__2012102910a7cChangeRequestmaas.doc',1234,'abcddsafdsf','','',1,19,' Comments 1   Comments 1  Comments 1  Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1',1,0),(2,1,'ST-afsadsadsf435','Secondss File','Standard','Lab','2','classes/Lib/dynamic_folders/Test/a4f23_2012-12-21__AllianceadherencetextmessageHIVstudy.pdf',2147483647,'aser4355','','',2,19,'',0,0),(3,1,'PR-fdsfdsff345sadsa','karthikasds','Procedure','Lab','1','classes/Lib/dynamic_folders/Test/a4f23_2012-12-21__AllianceadherencetextmessageHIVstudy.pdf',0,'','','',3,19,'Comments 2  Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 ',0,0),(4,2,'MA-1','emp detail','Manual','Lab','1','',0,'','','',1,35,'',0,37);
/*!40000 ALTER TABLE `mul_document_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `my_documnet_table`
--

DROP TABLE IF EXISTS `my_documnet_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `my_documnet_table` (
  `my_doc_id` int(50) NOT NULL auto_increment,
  `user_doc_id` varchar(50) NOT NULL,
  `doc_title` varchar(100) NOT NULL,
  `doc_type` varchar(50) NOT NULL,
  `hard_copy` varchar(50) NOT NULL,
  `media_type` int(50) NOT NULL,
  `doc_path` varchar(100) NOT NULL,
  `elc_num` varchar(100) NOT NULL,
  `elc_key` varchar(100) NOT NULL,
  `doc_authored_by` int(50) NOT NULL,
  `folder_id` int(50) NOT NULL,
  `posted_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `cmd` text NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`my_doc_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `my_documnet_table`
--

LOCK TABLES `my_documnet_table` WRITE;
/*!40000 ALTER TABLE `my_documnet_table` DISABLE KEYS */;
INSERT INTO `my_documnet_table` (`my_doc_id`, `user_doc_id`, `doc_title`, `doc_type`, `hard_copy`, `media_type`, `doc_path`, `elc_num`, `elc_key`, `doc_authored_by`, `folder_id`, `posted_date`, `cmd`, `company_id`) VALUES (1,'WO-Testing','Testing Doc','Work Instruction','Lab',2,'classes/Lib/dynamic_folders/Test/bea59_2012-12-21__2012102910a7cChangeRequestmaas.doc','1234','abcddsafdsf',19,1,'2012-12-21 21:20:56',' Comments 1   Comments 1  Comments 1  Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1 Comments 1',0),(2,'ST-afsadsadsf435','Secondss File','Standard','Lab',2,'classes/Lib/dynamic_folders/Test/a4f23_2012-12-21__AllianceadherencetextmessageHIVstudy.pdf','563464532432','aser4355',19,1,'2012-12-21 21:20:56','',0),(3,'PR-fdsfdsff345sadsa','karthikasds','Procedure','Lab',1,'classes/Lib/dynamic_folders/Test/a4f23_2012-12-21__AllianceadherencetextmessageHIVstudy.pdf','','',19,1,'2012-12-21 21:20:56','Comments 2  Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 Comments 2 ',0),(4,'ST-4353453453','Test Doc by Karthick','Standard','Lab',2,'classes/Lib/dynamic_folders/karthick/d240e_2012-12-21__AJSquareProductKeywordReports.doc','1','test',1,3,'2012-12-21 21:37:04','Test ',0),(5,'MA-1','emp detail','Manual','Lab',1,'','','',35,5,'2013-01-07 18:34:51','',37);
/*!40000 ALTER TABLE `my_documnet_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `payment_history_table`
--

DROP TABLE IF EXISTS `payment_history_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `payment_history_table` (
  `his_id` int(50) NOT NULL auto_increment,
  `trans_id` varchar(100) NOT NULL,
  `plan_id` int(50) NOT NULL,
  `trans_amount` varchar(50) NOT NULL,
  `payment_mode` varchar(50) NOT NULL,
  `payment_statue` int(50) NOT NULL COMMENT '0=>paid,1=>not paid',
  `payment_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`his_id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `payment_history_table`
--

LOCK TABLES `payment_history_table` WRITE;
/*!40000 ALTER TABLE `payment_history_table` DISABLE KEYS */;
INSERT INTO `payment_history_table` (`his_id`, `trans_id`, `plan_id`, `trans_amount`, `payment_mode`, `payment_statue`, `payment_date`) VALUES (2,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(3,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(4,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(5,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(6,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(7,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(8,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(9,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(10,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(11,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(12,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(13,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(14,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(15,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(16,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(17,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(18,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(19,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(20,'4RA93365H54918405',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(21,'',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(22,'',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(23,'',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(24,'',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(25,'',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(26,'',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(27,'',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(28,'',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(29,'',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(30,'3YG35661SB0046441',2,'3500','Paypal',0,'0000-00-00 00:00:00'),(31,'0GL15270S8052524R',1,'1500','Paypal',0,'0000-00-00 00:00:00'),(32,'7VT259171N185091J',3,'3500','Paypal',0,'0000-00-00 00:00:00'),(33,'5WB6968525215563P',3,'3500','Paypal',0,'2013-01-13 00:20:18');
/*!40000 ALTER TABLE `payment_history_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `plan_settings_table`
--

DROP TABLE IF EXISTS `plan_settings_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `plan_settings_table` (
  `plan_id` int(50) NOT NULL auto_increment,
  `plan_name` varchar(50) NOT NULL,
  `no_of_user` int(100) NOT NULL,
  `plan_amount` varchar(100) NOT NULL,
  `plan_duration` int(50) NOT NULL,
  `document_module` int(10) NOT NULL COMMENT '0=>active,1=>suspend',
  `customer_feedback` int(10) NOT NULL COMMENT '0=>active,1=>suspend',
  `supplier_performance` int(10) NOT NULL COMMENT '0=>active,1=>suspend',
  `nonconformance` int(10) NOT NULL COMMENT '0=>active,1=>suspend',
  `internal_audits` int(10) NOT NULL COMMENT '0=>active,1=>suspend',
  `adminstration` int(10) NOT NULL COMMENT '0=>active,1=>suspend',
  `plan_status` int(50) NOT NULL COMMENT '0=>active, 1=>suspend',
  PRIMARY KEY  (`plan_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `plan_settings_table`
--

LOCK TABLES `plan_settings_table` WRITE;
/*!40000 ALTER TABLE `plan_settings_table` DISABLE KEYS */;
INSERT INTO `plan_settings_table` (`plan_id`, `plan_name`, `no_of_user`, `plan_amount`, `plan_duration`, `document_module`, `customer_feedback`, `supplier_performance`, `nonconformance`, `internal_audits`, `adminstration`, `plan_status`) VALUES (1,'Plan A',100,'1500',3,0,0,0,0,0,0,0),(2,'Plan B',200,'3500',6,0,1,0,1,0,1,1),(3,'Plan C',300,'3500',12,0,0,0,0,0,0,0);
/*!40000 ALTER TABLE `plan_settings_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `process_details`
--

DROP TABLE IF EXISTS `process_details`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `process_details` (
  `process_id` int(255) NOT NULL auto_increment,
  `process` varchar(100) NOT NULL,
  `process_owner` int(255) NOT NULL,
  `status` tinyint(2) NOT NULL,
  `company_id` int(255) NOT NULL,
  PRIMARY KEY  (`process_id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `process_details`
--

LOCK TABLES `process_details` WRITE;
/*!40000 ALTER TABLE `process_details` DISABLE KEYS */;
INSERT INTO `process_details` (`process_id`, `process`, `process_owner`, `status`, `company_id`) VALUES (10,'demo process',4,1,1),(9,'test process',2,1,1);
/*!40000 ALTER TABLE `process_details` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `process_doc_table`
--

DROP TABLE IF EXISTS `process_doc_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `process_doc_table` (
  `auto_id` int(50) NOT NULL auto_increment,
  `mul_doc_id` int(50) NOT NULL,
  `version` varchar(50) NOT NULL,
  `re_upload_poth` varchar(100) NOT NULL,
  `after_review_doc` varchar(100) NOT NULL COMMENT 'if only review the document',
  `doc_status` int(50) NOT NULL COMMENT '0=>new 1=>approval 2=>review 3=> reject',
  `new_old_doc` int(50) NOT NULL COMMENT '0=>new 1=>old',
  `Comment` text NOT NULL,
  `updated_by` int(50) NOT NULL,
  `autherd_by` int(50) NOT NULL,
  `modify_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`auto_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `process_doc_table`
--

LOCK TABLES `process_doc_table` WRITE;
/*!40000 ALTER TABLE `process_doc_table` DISABLE KEYS */;
INSERT INTO `process_doc_table` (`auto_id`, `mul_doc_id`, `version`, `re_upload_poth`, `after_review_doc`, `doc_status`, `new_old_doc`, `Comment`, `updated_by`, `autherd_by`, `modify_date`, `company_id`) VALUES (1,1,'0.1','classes/Lib/dynamic_folders/Test/bea59_2012-12-21__2012102910a7cChangeRequestmaas.doc','',1,1,'I approve this',1,19,'2012-12-21 21:47:19',0);
/*!40000 ALTER TABLE `process_doc_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `profile_table`
--

DROP TABLE IF EXISTS `profile_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `profile_table` (
  `profile_id` int(100) NOT NULL auto_increment,
  `profile_name` varchar(100) NOT NULL,
  `group_id` int(50) NOT NULL,
  `status` int(10) NOT NULL COMMENT '0=>disable,1=>active',
  `admin_id` int(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`profile_id`)
) ENGINE=MyISAM AUTO_INCREMENT=33 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `profile_table`
--

LOCK TABLES `profile_table` WRITE;
/*!40000 ALTER TABLE `profile_table` DISABLE KEYS */;
INSERT INTO `profile_table` (`profile_id`, `profile_name`, `group_id`, `status`, `admin_id`, `company_id`) VALUES (20,'CAD',13,1,1,0),(17,'Mech',2,1,1,0),(18,'Electric',2,1,1,0),(19,'Electronic',14,1,1,0),(22,'Civil',11,1,1,0),(23,'mobile comm',8,1,1,0),(24,'tele com',10,1,1,0),(25,'Medical',12,1,1,0),(26,'store',15,1,1,0),(29,'fthrtyrtyr',11,1,1,0),(30,'szfsdfsf',15,1,1,0),(31,'php develop',27,1,35,37),(32,'profile1',28,1,42,3);
/*!40000 ALTER TABLE `profile_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `qms_cms_table`
--

DROP TABLE IF EXISTS `qms_cms_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `qms_cms_table` (
  `cms_id` int(20) NOT NULL auto_increment,
  `meta_title` varchar(20) NOT NULL,
  `meta_keywords` varchar(20) NOT NULL,
  `meta_description` varchar(20) NOT NULL,
  `page_title` varchar(20) NOT NULL,
  `page_content` mediumtext NOT NULL,
  `published` varchar(20) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`cms_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `qms_cms_table`
--

LOCK TABLES `qms_cms_table` WRITE;
/*!40000 ALTER TABLE `qms_cms_table` DISABLE KEYS */;
INSERT INTO `qms_cms_table` (`cms_id`, `meta_title`, `meta_keywords`, `meta_description`, `page_title`, `page_content`, `published`, `company_id`) VALUES (1,'Madules ','raja4raja','Description','Modules','<h1 id=\"firstHeading\" class=\"firstHeading\"><font color=\"#800000\"><span>Article</span></font></h1><p>An <strong>article</strong> (<a href=\"http://en.wikipedia.org/wiki/List_of_glossing_abbreviations\" title=\"List of glossing abbreviations\">abbreviated</a> <span class=\"smallcaps\"><span style=\"font-variant: small-caps\" class=\"SMALLCAPS\"><span style=\"text-transform: lowercase\" class=\"NOCAPS\"><strong>ART</strong></span></span></span>) is a <a href=\"http://en.wikipedia.org/wiki/Word\" title=\"Word\">word</a> (or <a href=\"http://en.wikipedia.org/wiki/Prefix\" title=\"Prefix\">prefix</a> or <a href=\"http://en.wikipedia.org/wiki/Suffix\" title=\"Suffix\">suffix</a>) that is with a <a href=\"http://en.wikipedia.org/wiki/Noun\" title=\"Noun\">noun</a> to indicate the type of reference being made by the noun. Articles specify the grammatical <a href=\"http://en.wikipedia.org/wiki/Definiteness\" title=\"Definiteness\">definiteness</a> of the noun, in some languages extending to volume or numerical scope. The articles in the <a href=\"http://en.wikipedia.org/wiki/English_language\" title=\"English language\">English language</a> are <em>the</em> and <em>a/an</em>, and (in some contexts) <em>some</em>. <a href=\"http://en.wikipedia.org/wiki/A_and_an#Indefinite_article\" title=\"A and an\" class=\"mw-redirect\">\'An\' and \'a\'</a>  are modern forms of the Old English \'an\', which in Anglian dialects was  the number \'one\' (compare \'on\', in Saxon dialects) and survived into  Modern Scots as the number \'ane\'. Both \'on\' (respelled \'one\' by the  Normans) and \'an\' survived into Modern English, with \'one\' used as the  number and \'an\' (\'a\', before nouns that begin with a consonant sound) as  an indefinite article.</p> <p><a href=\"http://en.wikipedia.org/wiki/Parts_of_speech#English\" title=\"Parts of speech\" class=\"mw-redirect\">Traditionally in English</a>, an article is usually considered to be a type of <a href=\"http://en.wikipedia.org/wiki/Adjective\" title=\"Adjective\">adjective</a>.  In some languages, articles are a special part of speech, which cannot  easily be combined with other parts of speech. It is also possible for  articles to be part of another part of speech category such as a <a href=\"http://en.wikipedia.org/wiki/Determiner_%28linguistics%29\" title=\"Determiner (linguistics)\" class=\"mw-redirect\">determiner</a>, an English part of speech category that combines articles and demonstratives (such as \'this\' and \'that\').</p> In languages that employ articles, every <a href=\"http://en.wikipedia.org/wiki/Common_noun\" title=\"Common noun\" class=\"mw-redirect\">common noun</a>, with some exceptions, is expressed with a certain <a href=\"http://en.wikipedia.org/wiki/Definiteness\" title=\"Definiteness\">definiteness</a> (e.g., definite or indefinite), just as many languages express every noun with a certain <a href=\"http://en.wikipedia.org/wiki/Grammatical_number\" title=\"Grammatical number\">grammatical number</a> (e.g., singular or plural). Every noun <em>must</em> be accompanied by the article, if any, corresponding to its definiteness, and the lack of an article (considered a <em><a href=\"http://en.wikipedia.org/wiki/Zero_article\" title=\"Zero article\" class=\"mw-redirect\">zero article</a></em>)  itself specifies a certain definiteness. This is in contrast to other  adjectives and determiners, which are typically optional. This  obligatory nature of articles makes them among the most common words in  many languages&mdash;in English, for example, the most frequent word is <em>the</em>.','1',0),(2,'about us','about us keywords','Keywords','ABOUTUS','<h1><font color=\"#808000\">This is about us page</font></h1>','1',0),(3,'features','Keywords','Keywords','Features','<h1 id=\"firstHeading\" class=\"firstHeading\"><font size=\"5\"><span>Current events</span></font></h1><p>&nbsp;</p><dl><dt>Armed conflict and attacks</dt></dl> <ul><li>Two people are injured in two blasts outside al-Amin mosque in the <a href=\"http://en.wikipedia.org/wiki/Somali_people\" title=\"Somali people\">Somali</a>-dominated <a href=\"http://en.wikipedia.org/wiki/Eastleigh,_Nairobi\" title=\"Eastleigh, Nairobi\">Eastleigh</a> district of <a href=\"http://en.wikipedia.org/wiki/Nairobi\" title=\"Nairobi\">Nairobi</a> during the evening rush hour. <a rel=\"nofollow\" href=\"http://www.aljazeera.com/news/africa/2012/12/20121219172758769966.html\" class=\"external text\">(Al Jazeera)</a></li><li><a href=\"http://en.wikipedia.org/wiki/Chad\" title=\"Chad\">Chad</a> sends troops to the <a href=\"http://en.wikipedia.org/wiki/Central_African_Republic\" title=\"Central African Republic\">Central African Republic</a> to help defend the town of <a href=\"http://en.wikipedia.org/wiki/Bria\" title=\"Bria\">Bria</a> from the Seleka rebel coalition. <a rel=\"nofollow\" href=\"http://www.bbc.co.uk/news/world-africa-20777922\" class=\"external text\">(BBC)</a></li><li><a href=\"http://en.wikipedia.org/wiki/Israeli%E2%80%93Palestinian_conflict\" title=\"Israeli&ndash;Palestinian conflict\">Israeli&ndash;Palestinian conflict</a>: <a href=\"http://en.wikipedia.org/wiki/Israel\" title=\"Israel\">Israel</a> presses on with the construction of thousands of new homes in the occupied <a href=\"http://en.wikipedia.org/wiki/West_Bank\" title=\"West Bank\">West Bank</a> and <a href=\"http://en.wikipedia.org/wiki/East_Jerusalem\" title=\"East Jerusalem\">East Jerusalem</a>, despite worldwide criticism and suggestions that officials in <a href=\"http://en.wikipedia.org/wiki/Palestine\" title=\"Palestine\">Palestine</a> may go to the <a href=\"http://en.wikipedia.org/wiki/International_Criminal_Court\" title=\"International Criminal Court\">International Criminal Court</a>. <a rel=\"nofollow\" href=\"http://www.aljazeera.com/news/middleeast/2012/12/201212191395430251.html\" class=\"external text\">(Al Jazeera)</a></li></ul> <dl><dt>Business and economy</dt></dl> <ul><li>Banking giant <a href=\"http://en.wikipedia.org/wiki/UBS\" title=\"UBS\">UBS</a> is fined $1.5 billion for attempting to manipulate the <a href=\"http://en.wikipedia.org/wiki/Libor\" title=\"Libor\">Libor</a> interbank lending rate, becoming the second international bank, after <a href=\"http://en.wikipedia.org/wiki/Barclays\" title=\"Barclays\">Barclays</a>, to be fined over the <a href=\"http://en.wikipedia.org/wiki/Libor_scandal\" title=\"Libor scandal\">Libor scandal</a>. <a rel=\"nofollow\" href=\"http://www.aljazeera.com/news/europe/2012/12/2012121964142608595.html\" class=\"external text\">(Al Jazeera)</a></li></ul> <dl><dt>Disasters and accidents</dt></dl> <ul><li>A 35-year-old <a href=\"http://en.wikipedia.org/wiki/Australian\" title=\"Australian\" class=\"mw-redirect\">Australian</a> man tries to headbutt a pilot over the <a href=\"http://en.wikipedia.org/wiki/Atlantic_Ocean\" title=\"Atlantic Ocean\">Atlantic Ocean</a>, causing the diversion of a <a href=\"http://en.wikipedia.org/wiki/British_Airways\" title=\"British Airways\">British Airways</a> transatlantic flight from <a href=\"http://en.wikipedia.org/wiki/New_York\" title=\"New York\">New York</a>\'s <a href=\"http://en.wikipedia.org/wiki/JFK_airport\" title=\"JFK airport\" class=\"mw-redirect\">JFK airport</a> to <a href=\"http://en.wikipedia.org/wiki/London_City_Airport\" title=\"London City Airport\">London City Airport</a>. <a rel=\"nofollow\" href=\"http://www.rte.ie/news/2012/1219/court-damian-kingston.html\" class=\"external text\">(RT&Eacute; News)</a></li><li>A <a href=\"http://en.wikipedia.org/wiki/Multiple-vehicle_collision\" title=\"Multiple-vehicle collision\">multiple-vehicle collision</a> on the <a href=\"http://en.wikipedia.org/wiki/Long_Island_Expressway\" title=\"Long Island Expressway\" class=\"mw-redirect\">Long Island Expressway</a> in <a href=\"http://en.wikipedia.org/wiki/Shirley,_New_York\" title=\"Shirley, New York\">Shirley</a>, <a href=\"http://en.wikipedia.org/wiki/Suffolk_County,_New_York\" title=\"Suffolk County, New York\">Suffolk County</a>, <a href=\"http://en.wikipedia.org/wiki/New_York\" title=\"New York\">New York</a>, <a href=\"http://en.wikipedia.org/wiki/United_States\" title=\"United States\">United States</a> leaves one person dead and at least 32 injured. <a rel=\"nofollow\" href=\"http://abcnews.go.com/US/wireStory/pileup-shuts-nys-long-island-expressway-18018929\" class=\"external text\">(AP via ABC News)</a></li></ul> <dl><dt>International relations</dt></dl> <ul><li>Following the <a href=\"http://en.wikipedia.org/wiki/Magnitsky_bill\" title=\"Magnitsky bill\">Magnitsky bill</a>, the <a href=\"http://en.wikipedia.org/wiki/U.S.\" title=\"U.S.\" class=\"mw-redirect\">U.S.</a> sanctions designed to punish <a href=\"http://en.wikipedia.org/wiki/Russia\" title=\"Russia\">Russia</a> for its rights record, <a href=\"http://en.wikipedia.org/wiki/Russia\" title=\"Russia\">Russia</a> is to ban <a href=\"http://en.wikipedia.org/wiki/Americans\" title=\"Americans\">Americans</a> from adopting their children. <a rel=\"nofollow\" href=\"http://www.aljazeera.com/news/europe/2012/12/20121219151717690939.html\" class=\"external text\">(Al Jazeera)</a></li></ul> <dl><dt>Law and crime</dt></dl> <ul><li>The gang rape of a woman on a bus in <a href=\"http://en.wikipedia.org/wiki/India\" title=\"India\">India</a> leads to nationwide outrage; three of the four accused confess in court. <a rel=\"nofollow\" href=\"http://www.aljazeera.com/news/asia/2012/12/20121219991194318.html\" class=\"external text\">(Al Jazeera)</a> <a rel=\"nofollow\" href=\"http://www.guardian.co.uk/world/2012/dec/19/delhi-bus-gang-rape\" class=\"external text\">(<em>The Guardian</em>)</a></li><li><a href=\"http://en.wikipedia.org/wiki/Robert_Bork\" title=\"Robert Bork\">Robert Bork</a>, a former federal judge and conservative legal theorist, best known for his losing nomination battle for the <a href=\"http://en.wikipedia.org/wiki/Supreme_Court_of_the_United_States\" title=\"Supreme Court of the United States\">Supreme Court of the United States</a>, dies at 85 in <a href=\"http://en.wikipedia.org/wiki/Arlington,_Virginia\" title=\"Arlington, Virginia\" class=\"mw-redirect\">Arlington, Virginia</a>. <a rel=\"nofollow\" href=\"http://www.nytimes.com/2012/12/20/us/robert-h-bork-conservative-jurist-dies-at-85.html\" class=\"external text\">(<em>The New York Times</em>)</a></li></ul> <dl><dt>Media</dt></dl> <ul><li><a href=\"http://en.wikipedia.org/wiki/U.S.\" title=\"U.S.\" class=\"mw-redirect\">U.S.</a> news magazine <a href=\"http://en.wikipedia.org/wiki/Time_%28magazine%29\" title=\"Time (magazine)\"><em>Time</em></a> selects <a href=\"http://en.wikipedia.org/wiki/President_of_the_United_States\" title=\"President of the United States\">U.S. President</a> <a href=\"http://en.wikipedia.org/wiki/Barack_Obama\" title=\"Barack Obama\">Barack Obama</a> as its 2012 <a href=\"http://en.wikipedia.org/wiki/Time_Person_of_the_Year\" title=\"Time Person of the Year\">Person of the Year</a>, following on from his 2008 award, and those of his predecessors <a href=\"http://en.wikipedia.org/wiki/George_W._Bush\" title=\"George W. Bush\">George W. Bush</a> in 2000 and 2004, <a href=\"http://en.wikipedia.org/wiki/Bill_Clinton\" title=\"Bill Clinton\">Bill Clinton</a> in 1992 and 1998, <a href=\"http://en.wikipedia.org/wiki/George_H._W._Bush\" title=\"George H. W. Bush\">George H. W. Bush</a> in 1990, <a href=\"http://en.wikipedia.org/wiki/Ronald_Reagan\" title=\"Ronald Reagan\">Ronald Reagan</a> in 1980 and 1983, <a href=\"http://en.wikipedia.org/wiki/Jimmy_Carter\" title=\"Jimmy Carter\">Jimmy Carter</a> in 1976, <a href=\"http://en.wikipedia.org/wiki/Richard_Nixon\" title=\"Richard Nixon\">Richard Nixon</a> in 1971 and 1972 and <a href=\"http://en.wikipedia.org/wiki/Lyndon_B._Johnson\" title=\"Lyndon B. Johnson\">Lyndon B. Johnson</a> in 1964 and 1967. <a rel=\"nofollow\" href=\"http://poy.time.com/2012/12/19/person-of-the-year-barack-obama/\" class=\"external text\">(<em>Time</em>)</a> <a rel=\"nofollow\" href=\"http://www.telegraph.co.uk/news/worldnews/barackobama/9755732/Barack-Obama-named-Time-Person-of-the-Year-for-2012.html\" class=\"external text\">(<em>The Daily Telegraph</em>)</a></li></ul> <dl><dt>Politics and elections</dt></dl> <ul><li><a href=\"http://en.wikipedia.org/wiki/South_Korean_presidential_election,_2012\" title=\"South Korean presidential election, 2012\">South Korean presidential election, 2012</a>: <ul><li>Voters in <a href=\"http://en.wikipedia.org/wiki/South_Korea\" title=\"South Korea\">South Korea</a> go to the polls with <a href=\"http://en.wikipedia.org/wiki/Exit_poll\" title=\"Exit poll\">exit polls</a> showing a very close race expected between <a href=\"http://en.wikipedia.org/wiki/Park_Geun-hye\" title=\"Park Geun-hye\">Park Geun-hye</a> of the conservative <a href=\"http://en.wikipedia.org/wiki/Saenuri_Party\" title=\"Saenuri Party\">Saenuri Party</a> and <a href=\"http://en.wikipedia.org/wiki/Moon_Jae-in\" title=\"Moon Jae-in\">Moon Jae-in</a> of the left-of-centre <a href=\"http://en.wikipedia.org/wiki/Democratic_United_Party\" title=\"Democratic United Party\">Democratic United Party</a>. <a rel=\"nofollow\" href=\"http://www.themalaysianinsider.com/world/article/south-korea-votes-in-tight-race-on-economy-and-jobs/\" class=\"external text\">(Reuters via the <em>Malaysian Insider</em>)</a> <a rel=\"nofollow\" href=\"http://www.bbc.co.uk/news/world-asia-20780282\" class=\"external text\">(BBC)</a></li><li>The South Korean electoral commission declares <a href=\"http://en.wikipedia.org/wiki/Park_Geun-hye\" title=\"Park Geun-hye\">Park Geun-hye</a> the winner of the presidential election with 84% of the votes counted and will become South Korea\'s first female president. <a href=\"http://en.wikipedia.org/wiki/Moon_Jae-in\" title=\"Moon Jae-in\">Moon Jae-in</a> has conceded. <a rel=\"nofollow\" href=\"http://english.yonhapnews.co.kr/national/2012/12/18/44/0301000000AEN20121218008800315F.HTML\" class=\"external text\">(Yonhap)</a> <a rel=\"nofollow\" href=\"http://www.bbc.co.uk/news/world-asia-20780282\" class=\"external text\">(BBC)</a></li></ul> </li><li>The <a href=\"http://en.wikipedia.org/wiki/BBC\" title=\"BBC\">BBC</a> reports that <a href=\"http://en.wikipedia.org/wiki/David_Cameron\" title=\"David Cameron\">David Cameron</a>, the <a href=\"http://en.wikipedia.org/wiki/Prime_Minister_of_the_United_Kingdom\" title=\"Prime Minister of the United Kingdom\">Prime Minister of the United Kingdom</a>, is to announce the withdrawal of 4,000 <a href=\"http://en.wikipedia.org/wiki/British_people\" title=\"British people\">British</a> soldiers from <a href=\"http://en.wikipedia.org/wiki/Afghanistan\" title=\"Afghanistan\">Afghanistan</a>. <a rel=\"nofollow\" href=\"http://www.bbc.co.uk/news/uk-20778561\" class=\"external text\">(BBC)</a></li></ul> <dl><dt>Science and technology</dt></dl> <ul><li>The <a href=\"http://en.wikipedia.org/wiki/Russia\" title=\"Russia\">Russian</a> <a href=\"http://en.wikipedia.org/wiki/Soyuz_TMA-07M\" title=\"Soyuz TMA-07M\">Soyuz TMA-07M</a> spacecraft launches from the <a href=\"http://en.wikipedia.org/wiki/Baikonur_Cosmodrome\" title=\"Baikonur Cosmodrome\">Baikonur Cosmodrome</a> in <a href=\"http://en.wikipedia.org/wiki/Kazakhstan\" title=\"Kazakhstan\">Kazakhstan</a>, carrying <a href=\"http://en.wikipedia.org/wiki/Roman_Romanenko\" title=\"Roman Romanenko\">Roman Romanenko</a>, <a href=\"http://en.wikipedia.org/wiki/Chris_Hadfield\" title=\"Chris Hadfield\">Chris Hadfield</a> and <a href=\"http://en.wikipedia.org/wiki/Thomas_Marshburn\" title=\"Thomas Marshburn\">Thomas Marshburn</a> for the <a href=\"http://en.wikipedia.org/wiki/ISS\" title=\"ISS\" class=\"mw-redirect\">ISS</a>\' <a href=\"http://en.wikipedia.org/wiki/Expedition_34\" title=\"Expedition 34\">Expedition 34</a> and <a href=\"http://en.wikipedia.org/wiki/Expedition_35\" title=\"Expedition 35\">35</a> crews. <a rel=\"nofollow\" href=\"http://news.cnet.com/8301-11386_3-57559952-76/soyuz-blasts-off-for-space-station-with-three-man-crew/\" class=\"external text\">(CNet)</a> <a rel=\"nofollow\" href=\"http://www.nasaspaceflight.com/2012/12/soyuz-tma-07m-three-new-crewmembers-iss/\" class=\"external text\">(NASA Spaceflight)</a> <a rel=\"nofollow\" href=\"http://www.reuters.com/article/2012/12/19/kazakhstan-space-launch-idUSL5E8NJ8BK20121219\" class=\"external text\">(Reuters)</a></li></ul><p>&nbsp;<img src=\"http://s3.evcdn.com/images/edpborder500/I0-001/012/531/398-5.jpeg_/zeds-dead-showbox-market-98.jpeg\" alt=\"img\" title=\"mayan\" width=\"500\" height=\"500\" /></p>','1',0),(4,'pricing','Keywords','Keywords','Pricing','<li><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"100%\"><tbody><tr><td>&nbsp;</td><td>&nbsp;</td></tr></tbody></table></li><br /><li>               <h2 style=\"padding-top: 15px\">               Lorem Ipsum               </h2>               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>               <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. </p>             </li>','1',0),(5,'QMS HOME ','QMS HOME ','QMS HOME ','Quality ManagementS','<div class=\"middle\">   <div class=\"container\">     <div class=\"row-fluid\">       <div class=\"span8\">         <ul class=\"cont_left\">           <li> </li>           <li>             <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>             <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>           </li>           <li>             <div class=\"box\">               <div class=\"box-heading\"><span>qms&trade; Quality Standard Compliance</span></div>             </div>           </li>           <li>             <div class=\"compliance\"> <span>ISO 9001:2012 Compliance</span> <span>ISO 10085:2012 Compliance</span> <span>AS9100 Compliance</span> </div>           </li>           <li>             <div class=\"box\">               <div class=\"box-heading\"><span>Modules Overview</span></div>             </div>           </li>           <li>             <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"90%\">               <tbody><tr class=\"modules_ico\">                 <td width=\"8%\" align=\"left\" valign=\"middle\"><img src=\"assets/img/ico_01.gif\" alt=\"\" /></td>                 <td width=\"34%\" align=\"left\" valign=\"middle\">Document Control</td>                 <td width=\"8%\" align=\"left\" valign=\"middle\"><img src=\"assets/img/ico_04.gif\" alt=\"\" /></td>                 <td width=\"50%\" align=\"left\" valign=\"middle\">Nonconformance</td>               </tr>               <tr class=\"modules_ico\">                 <td align=\"left\" valign=\"middle\"><img src=\"assets/img/ico_02.gif\" alt=\"\" /></td>                 <td align=\"left\" valign=\"middle\">Customer Feedback</td>                 <td align=\"left\" valign=\"middle\"><img src=\"assets/img/ico_05.gif\" alt=\"\" /></td>                 <td align=\"left\" valign=\"middle\">Internal Audits</td>               </tr>               <tr class=\"modules_ico\">                 <td align=\"left\" valign=\"middle\"><img src=\"assets/img/ico_03.gif\" alt=\"\" /></td>                 <td align=\"left\" valign=\"middle\">Supplier Performance</td>                 <td align=\"left\" valign=\"middle\"><img src=\"assets/img/ico_06.gif\" alt=\"\" /></td>                 <td align=\"left\" valign=\"middle\">Adminstration</td>               </tr>             </tbody></table>           </li>           <li>             <div class=\"box\">               <div class=\"box-heading\"><span>Software Features</span></div>             </div>           </li>           <li>             <ul class=\"modules_ico1\">               <li>Sed ut perspiciatis unde omnis</li>               <li>Sed ut perspiciatis unde omnis</li>             </ul>             <ul class=\"modules_ico1\">               <li>Sed ut perspiciatis unde omnis</li>               <li>Sed ut perspiciatis unde omnis</li>             </ul>             <ul class=\"modules_ico1\">               <li>Sed ut perspiciatis unde omnis</li>               <li>Sed ut perspiciatis unde omnis</li>             </ul>             <ul class=\"modules_ico1\">               <li>Sed ut perspiciatis unde omnis</li>               <li>Sed ut perspiciatis unde omnis</li>             </ul>             <ul class=\"modules_ico1\">               <li>Sed ut perspiciatis unde omnis</li>               <li>Sed ut perspiciatis unde omnis</li>             </ul>             <ul class=\"modules_ico1\">               <li>Sed ut perspiciatis unde omnis</li>               <li>Sed ut perspiciatis unde omnis</li>             </ul>                         </li>         </ul>       </div></div></div></div>','1',0);
/*!40000 ALTER TABLE `qms_cms_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `site_settings`
--

DROP TABLE IF EXISTS `site_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `site_settings` (
  `setting_id` int(11) NOT NULL auto_increment,
  `site_name` varchar(255) NOT NULL,
  `time_zone` varchar(100) NOT NULL,
  `copy_info` varchar(100) NOT NULL,
  `site_url` varchar(255) NOT NULL,
  `site_logo` varchar(255) NOT NULL,
  `admin_mail_id` varchar(255) NOT NULL,
  `company_name` varchar(255) NOT NULL,
  `company_address` varchar(255) NOT NULL,
  `site_meta_title` varchar(255) NOT NULL,
  `site_meta_keyword` varchar(255) NOT NULL,
  `site_meta_description` varchar(255) NOT NULL,
  `site_status` int(4) NOT NULL,
  `admin_id` int(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  `currency_code` varchar(50) NOT NULL,
  PRIMARY KEY  (`setting_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `site_settings`
--

LOCK TABLES `site_settings` WRITE;
/*!40000 ALTER TABLE `site_settings` DISABLE KEYS */;
INSERT INTO `site_settings` (`setting_id`, `site_name`, `time_zone`, `copy_info`, `site_url`, `site_logo`, `admin_mail_id`, `company_name`, `company_address`, `site_meta_title`, `site_meta_keyword`, `site_meta_description`, `site_status`, `admin_id`, `company_id`, `currency_code`) VALUES (1,'Qms','','Copyright Â© 2012, All Rights Reserved.','http://localhost/qms_updated/promotional_site','uploadimages/20120727logo.png','admin@ajsquare.com','vcbvcbvcbvc','6546546gfhgfhgfhgf','','','',0,40,0,'USD');
/*!40000 ALTER TABLE `site_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `super_admin_contactus_table`
--

DROP TABLE IF EXISTS `super_admin_contactus_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `super_admin_contactus_table` (
  `contact_id` int(20) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `purpose` varchar(100) NOT NULL,
  `query` varchar(255) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`contact_id`)
) ENGINE=MyISAM AUTO_INCREMENT=74 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `super_admin_contactus_table`
--

LOCK TABLES `super_admin_contactus_table` WRITE;
/*!40000 ALTER TABLE `super_admin_contactus_table` DISABLE KEYS */;
INSERT INTO `super_admin_contactus_table` (`contact_id`, `name`, `phone`, `email_id`, `purpose`, `query`, `company_id`) VALUES (7,'superadmin',2147483647,'rajha@gmail.com','hai','rtdytrdy',0),(6,'admin',2147483647,'rajha@gmail.com','hai','hfggh',0),(8,'superadmin',2147483647,'rajha@gmail.com','gufgu','hfd',0),(29,'admin',2147483647,'rajha@gmail.com','hai','hello',0),(35,'RAJA',2147483647,'rajha@gmail.com','hai','hello',0),(36,'superadmin',2147483647,'rajha@gmail.com','hai','hello',0),(37,'raja',56565656,'rajha@gmail.com','hai','hello',0),(38,'admin',2147483647,'rajha@gmail.com','hai','demorequest',0),(39,'admin',2147483647,'rajha@gmail.com','hai','demorequest',0),(40,'raja',2147483647,'rajha@gmail.com','hai','demorequest',0),(41,'RAJA',2147483647,'rajha@gmail.com','hai','demorequest',0),(42,'malar',56565656,'karthick@ajsquare.com','hai','demorequest',0),(43,'RAJAmaral',2147483647,'karthick@ajsquare.com','hai.. testing msg','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupta',0),(44,'RAJAmaral',2147483647,'karthick@ajsquare.com','hai','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupta',0),(45,'admin',2147483647,'rajha@gmail.com','hai','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupta',0),(46,'karthckraja',2147483647,'karaja@yahoo.com','some details','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupta',0),(47,'raoaj',2147483647,'rajamalar@gmail.com','some details','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupta',0),(48,'RAJA',2147483647,'karthick@ajsquare.com','hai.. testing msg','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupta',0),(49,'superadmin',2147483647,'rajha@gmail.com','hai','Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia volupta',0),(55,'arasu',2147483647,'roja@ajsquare.com','hai','testing',0),(56,'bala',2147483647,'bala@gmail.com','hai welcome','hai bala how r u?',0),(57,'cat',2147483647,'cat@gmail.com','hai.. testing msg','hai testing',0),(58,'devi',2147483647,'devi@ajsquare.com','some details','tesing',0),(59,'elavan',2147483647,'elavan@gmail.com','hai.. testing msg','tesing',0),(60,'father',2147483647,'fatal@ajsquare.com','saw the news','Current events',0),(66,'test',1234567890,'suganya@ajsquare.net','ttttttttttttt','ttttttttttttt?',0),(67,'suganya',1234567890,'suganya@ajsquare.net','suganya','suganya?',0),(68,'',0,'','','',0),(69,'suganya',1234567890,'suganya@ajsquare.net','suganya','xfdf',0),(70,'',0,'','','',0),(71,'ramalakshmi',1234567890,'ramalakshmi@ajsquare.net','test','test Query?',0),(72,'suganya',1234567890,'suganya@ajsquare.net','test','test Query?',0),(73,'suganya',1234567890,'suganya@ajsquare.net','test','hghghgjuhg',0);
/*!40000 ALTER TABLE `super_admin_contactus_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `super_admin_demo_tables`
--

DROP TABLE IF EXISTS `super_admin_demo_tables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `super_admin_demo_tables` (
  `demo_id` int(20) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `no_of_employees` int(20) NOT NULL,
  `no_of_users` int(20) NOT NULL,
  `type_of_iso_qualification` varchar(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  PRIMARY KEY  (`demo_id`)
) ENGINE=MyISAM AUTO_INCREMENT=126 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `super_admin_demo_tables`
--

LOCK TABLES `super_admin_demo_tables` WRITE;
/*!40000 ALTER TABLE `super_admin_demo_tables` DISABLE KEYS */;
INSERT INTO `super_admin_demo_tables` (`demo_id`, `name`, `phone`, `no_of_employees`, `no_of_users`, `type_of_iso_qualification`, `company_id`, `email_id`) VALUES (99,'raja',2147483647,343,43,'good',0,''),(98,'rajarojaraja',56565656,454,78,'very good',0,''),(33,'raja',2147483647,343,43,'good',0,''),(34,'raja',2147483647,343,43,'good',0,''),(35,'raja',2147483647,343,43,'good',0,''),(36,'raja',2147483647,343,43,'good',0,''),(37,'raja',2147483647,343,43,'good',0,''),(38,'raja',2147483647,343,43,'good',0,''),(39,'raja',2147483647,343,43,'good',0,''),(40,'raja',2147483647,343,43,'good',0,''),(41,'raja',2147483647,343,43,'good',0,''),(42,'raja',2147483647,343,43,'good',0,''),(43,'raja',2147483647,343,43,'good',0,''),(44,'raja',2147483647,343,43,'good',0,''),(45,'raja',2147483647,343,43,'good',0,''),(59,'raja',2147483647,343,43,'good',0,''),(48,'raja',2147483647,343,43,'good',0,''),(49,'raja',2147483647,343,43,'good',0,''),(50,'raja',2147483647,343,43,'good',0,''),(51,'raja',2147483647,343,43,'good',0,''),(52,'raja',2147483647,343,43,'good',0,''),(53,'raja',2147483647,343,43,'good',0,''),(54,'raja',2147483647,343,43,'good',0,''),(55,'raja',2147483647,343,43,'good',0,''),(56,'raja',2147483647,343,43,'good',0,''),(57,'raja',2147483647,343,43,'good',0,''),(58,'raja',2147483647,343,43,'good',0,''),(60,'raja',2147483647,343,43,'good',0,''),(61,'raja',2147483647,343,43,'good',0,''),(62,'raja',2147483647,343,43,'good',0,''),(63,'raja',2147483647,343,43,'good',0,''),(64,'raja',2147483647,343,43,'good',0,''),(65,'raja',2147483647,343,43,'good',0,''),(66,'raja',2147483647,343,43,'good',0,''),(67,'raja',2147483647,343,43,'good',0,''),(68,'raja',2147483647,343,43,'good',0,''),(69,'raja',2147483647,343,43,'good',0,''),(70,'raja',2147483647,343,43,'good',0,''),(71,'raja',2147483647,343,43,'good',0,''),(72,'raja',2147483647,343,43,'good',0,''),(73,'raja',2147483647,343,43,'good',0,''),(74,'raja',2147483647,343,43,'good',0,''),(75,'raja',2147483647,343,43,'good',0,''),(76,'raja',2147483647,343,43,'good',0,''),(77,'raja',2147483647,343,43,'good',0,''),(78,'raja',2147483647,343,43,'good',0,''),(79,'raja',2147483647,343,43,'good',0,''),(80,'raja',2147483647,343,43,'good',0,''),(81,'raja',2147483647,343,43,'good',0,''),(82,'raja',2147483647,343,43,'good',0,''),(83,'raja',2147483647,343,43,'good',0,''),(84,'raja',2147483647,343,43,'good',0,''),(97,'raja',2147483647,343,43,'good',0,''),(95,'rajaroja',2147483647,343,43,'good',0,''),(96,'rajaroja',2147483647,343,43,'good',0,''),(89,'rajaroja',2147483647,343,43,'good',0,''),(90,'rajaroja',2147483647,343,43,'good',0,''),(91,'raja',2147483647,343,43,'good',0,''),(92,'raja',2147483647,343,43,'good',0,''),(93,'raja',2147483647,343,43,'good',0,''),(94,'raja',2147483647,343,43,'good',0,''),(100,'rajarojaraja',2147483647,454,43,'good',0,''),(101,'rajarojaraja',2147483647,454,43,'good',0,''),(102,'rajarojaraja',2147483647,343,43,'good',0,''),(120,'aaaaa',54545646,545,545,'good',0,''),(121,'admin',2147483647,56,34,'good',0,''),(122,'karthick',2147483647,5,65,'verygood',0,''),(123,'arasu',2147483647,56,34,'very good',0,''),(124,'jane',2147483647,33,43,'qualified',0,''),(125,'suganya',1234567890,120,240,'Fine',0,'suganya@ajsquare.net');
/*!40000 ALTER TABLE `super_admin_demo_tables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `super_admin_news_tables`
--

DROP TABLE IF EXISTS `super_admin_news_tables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `super_admin_news_tables` (
  `news_id` int(20) NOT NULL auto_increment,
  `news_title` varchar(20) NOT NULL,
  `news_description` text NOT NULL,
  `news_updated_date` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  `news_status` int(50) NOT NULL COMMENT '1=>active,0=>suspend ',
  PRIMARY KEY  (`news_id`)
) ENGINE=MyISAM AUTO_INCREMENT=43 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `super_admin_news_tables`
--

LOCK TABLES `super_admin_news_tables` WRITE;
/*!40000 ALTER TABLE `super_admin_news_tables` DISABLE KEYS */;
INSERT INTO `super_admin_news_tables` (`news_id`, `news_title`, `news_description`, `news_updated_date`, `news_status`) VALUES (39,'title1','An article (abbreviated ART) is a word (or prefix or suffix) that is with a noun to indicate the type of reference being made by the noun. Articles specify the grammatical definiteness of the noun, in some languages extending to volume or numerical scope. The articles in the English language are the and a/an, and (in some contexts) some. \'An\' and \'a\' are modern forms of the Old English \'an\', which in Anglian dialects was the number \'one\' (compare \'on\', in Saxon dialects) and survived into Modern Scots as the number \'ane\'. Both \'on\' (respelled \'one\' by the Normans) and \'an\' survived into Modern English, with \'one\' used as the number and \'an\' (\'a\', before nouns that begin with a consonant sound) as an indefinite article.','2013-01-06 00:40:24',0),(40,'title2','An article (abbreviated ART) is a word (or prefix or suffix) that is with a noun to indicate the type of reference being made by the noun. Articles specify the grammatical definiteness of the noun, in some languages extending to volume or numerical scope. The articles in the English language are the and a/an, and (in some contexts) some. \'An\' and \'a\' are modern forms of the Old English \'an\', which in Anglian dialects was the number \'one\' (compare \'on\', in Saxon dialects) and survived into Modern Scots as the number \'ane\'. Both \'on\' (respelled \'one\' by the Normans) and \'an\' survived into Modern English, with \'one\' used as the number and \'an\' (\'a\', before nouns that begin with a consonant sound) as an indefinite article.','2013-01-06 00:40:40',0),(41,'title3','An article (abbreviated ART) is a word (or prefix or suffix) that is with a noun to indicate the type of reference being made by the noun. Articles specify the grammatical definiteness of the noun, in some languages extending to volume or numerical scope. The articles in the English language are the and a/an, and (in some contexts) some. \'An\' and \'a\' are modern forms of the Old English \'an\', which in Anglian dialects was the number \'one\' (compare \'on\', in Saxon dialects) and survived into Modern Scots as the number \'ane\'. Both \'on\' (respelled \'one\' by the Normans) and \'an\' survived into Modern English, with \'one\' used as the number and \'an\' (\'a\', before nouns that begin with a consonant sound) as an indefinite article.','2013-01-06 00:40:54',0),(42,'title4','An article (abbreviated ART) is a word (or prefix or suffix) that is with a noun to indicate the type of reference being made by the noun. Articles specify the grammatical definiteness of the noun, in some languages extending to volume or numerical scope. The articles in the English language are the and a/an, and (in some contexts) some. \'An\' and \'a\' are modern forms of the Old English \'an\', which in Anglian dialects was the number \'one\' (compare \'on\', in Saxon dialects) and survived into Modern Scots as the number \'ane\'. Both \'on\' (respelled \'one\' by the Normans) and \'an\' survived into Modern English, with \'one\' used as the number and \'an\' (\'a\', before nouns that begin with a consonant sound) as an indefinite article.','2013-01-06 00:41:05',0);
/*!40000 ALTER TABLE `super_admin_news_tables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `super_admin_payment_settings_table`
--

DROP TABLE IF EXISTS `super_admin_payment_settings_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `super_admin_payment_settings_table` (
  `payment_id` int(20) NOT NULL auto_increment,
  `authorize_status` int(50) NOT NULL COMMENT '0->active,1->suspend',
  `authorize_image` varchar(255) NOT NULL,
  `authorize_id` varchar(50) NOT NULL,
  `authorize_password` varchar(50) NOT NULL,
  `paypal_id` varchar(50) NOT NULL,
  `paypal_status` int(20) NOT NULL COMMENT '0->active,1->suspend',
  `paypal_image` varchar(255) NOT NULL,
  `bank_wire_status` int(20) NOT NULL COMMENT '0->active,1->suspend',
  `bank_wire_account_name` varchar(50) NOT NULL,
  `bank_wire_account_number` varchar(50) NOT NULL,
  `bank_wire_bank_address` varchar(100) NOT NULL,
  `bank_wire_bank_swift_code` varchar(100) NOT NULL,
  `bank_wire_bank_route` varchar(50) NOT NULL,
  `pay_by_cheque_status` int(20) NOT NULL COMMENT '0->active,1->suspend',
  `pay_by_cheque_In_favour_of` varchar(50) NOT NULL,
  `pay_by_cheque_In_payable_at` varchar(50) NOT NULL,
  PRIMARY KEY  (`payment_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `super_admin_payment_settings_table`
--

LOCK TABLES `super_admin_payment_settings_table` WRITE;
/*!40000 ALTER TABLE `super_admin_payment_settings_table` DISABLE KEYS */;
INSERT INTO `super_admin_payment_settings_table` (`payment_id`, `authorize_status`, `authorize_image`, `authorize_id`, `authorize_password`, `paypal_id`, `paypal_status`, `paypal_image`, `bank_wire_status`, `bank_wire_account_name`, `bank_wire_account_number`, `bank_wire_bank_address`, `bank_wire_bank_swift_code`, `bank_wire_bank_route`, `pay_by_cheque_status`, `pay_by_cheque_In_favour_of`, `pay_by_cheque_In_payable_at`) VALUES (1,1,'super_uploadimages/imagess.jpg','Authorize@ajsquare.net','Authorize','paypal@paypal.com',1,'super_uploadimages/images.jpg',0,'','','','','',0,'','');
/*!40000 ALTER TABLE `super_admin_payment_settings_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `super_admin_site_settings`
--

DROP TABLE IF EXISTS `super_admin_site_settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `super_admin_site_settings` (
  `site_settings_id` int(20) NOT NULL auto_increment,
  `site_logo` varchar(255) NOT NULL,
  `copywrite_url` varchar(100) NOT NULL,
  `facebook_url` varchar(100) NOT NULL,
  `twitter_url` varchar(100) NOT NULL,
  `youtube_url` varchar(100) NOT NULL,
  PRIMARY KEY  (`site_settings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `super_admin_site_settings`
--

LOCK TABLES `super_admin_site_settings` WRITE;
/*!40000 ALTER TABLE `super_admin_site_settings` DISABLE KEYS */;
INSERT INTO `super_admin_site_settings` (`site_settings_id`, `site_logo`, `copywrite_url`, `facebook_url`, `twitter_url`, `youtube_url`) VALUES (1,'super_uploadimages/logo.png','','','','');
/*!40000 ALTER TABLE `super_admin_site_settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `super_admin_table`
--

DROP TABLE IF EXISTS `super_admin_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `super_admin_table` (
  `super_admin_id` int(50) NOT NULL auto_increment,
  `super_admin_firstname` varchar(100) NOT NULL,
  `super_admin_lastname` varchar(100) NOT NULL,
  `super_admin_username` varchar(100) NOT NULL,
  `super_admin_pwd` varchar(100) NOT NULL,
  `super_admin_email` varchar(100) NOT NULL,
  `date_of_birth` varchar(50) NOT NULL,
  `super_admin_country` int(50) NOT NULL,
  `super_admin_state` varchar(100) NOT NULL,
  `super_admin_city` varchar(50) NOT NULL,
  `super_admin_address1` varchar(100) NOT NULL,
  `super_admin_address2` varchar(100) NOT NULL,
  `super_admin_zipcode` int(50) NOT NULL,
  `super_admin_phone_number` int(50) NOT NULL,
  `super_admin_status` int(50) NOT NULL,
  PRIMARY KEY  (`super_admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `super_admin_table`
--

LOCK TABLES `super_admin_table` WRITE;
/*!40000 ALTER TABLE `super_admin_table` DISABLE KEYS */;
INSERT INTO `super_admin_table` (`super_admin_id`, `super_admin_firstname`, `super_admin_lastname`, `super_admin_username`, `super_admin_pwd`, `super_admin_email`, `date_of_birth`, `super_admin_country`, `super_admin_state`, `super_admin_city`, `super_admin_address1`, `super_admin_address2`, `super_admin_zipcode`, `super_admin_phone_number`, `super_admin_status`) VALUES (1,'raja','raja','superadmin','1e0d5d98e358f0fb84716b91dea68b24','suganya@ajsquare.net','2011-Mar-2',21,'tamilnadu','madurai','madurai','madurai',43343434,786786765,1);
/*!40000 ALTER TABLE `super_admin_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `super_admin_trial_tables`
--

DROP TABLE IF EXISTS `super_admin_trial_tables`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `super_admin_trial_tables` (
  `trial_id` int(20) NOT NULL auto_increment,
  `trial_name` varchar(50) NOT NULL,
  `trial_company` varchar(50) NOT NULL,
  `trial_phone` int(50) NOT NULL,
  `trial_email_address` varchar(100) NOT NULL,
  `trial_password` varchar(100) NOT NULL,
  `test_pwd` varchar(100) NOT NULL,
  `trial_start_date` datetime NOT NULL,
  `trial_end_date` datetime NOT NULL,
  `company_status` int(50) NOT NULL COMMENT '1=>suspend,0=>active',
  `trial_url` varchar(500) NOT NULL,
  `upgrade_status` int(50) NOT NULL COMMENT '0=>no upgrade,1=> plana,2=>paln B ,3=>plan c',
  PRIMARY KEY  (`trial_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `super_admin_trial_tables`
--

LOCK TABLES `super_admin_trial_tables` WRITE;
/*!40000 ALTER TABLE `super_admin_trial_tables` DISABLE KEYS */;
INSERT INTO `super_admin_trial_tables` (`trial_id`, `trial_name`, `trial_company`, `trial_phone`, `trial_email_address`, `trial_password`, `test_pwd`, `trial_start_date`, `trial_end_date`, `company_status`, `trial_url`, `upgrade_status`) VALUES (1,'chavan','ajsquare1',2147483647,'chavan@ajsquare.net','05c55b9566a86bedd70f7e74f5e8a039','chavan','2013-01-11 12:41:05','2014-01-12 12:00:00',0,'http://localhost/qms_updated/ajsquare1/cpanel/',3),(2,'karthika','ajsquare2',2147483647,'karthika@ajsquare.net','f1195166c1d689872441ada1a7a125ab','karthika','2013-01-12 06:21:34','2013-02-11 12:00:00',0,'http://localhost/qms/ajsquare2/cpanel/',0),(3,'testadmin','ajsquare3',2147483647,'testadmin@ajsquare.net','512c60592355d617df009b5837a571fb','testadmin','2013-01-16 06:24:19','2013-02-15 12:00:00',0,'http://www.deemsprojects.com/qms/ajsquare3/cpanel/',0),(4,'admin','ajsquare4',2147483647,'admin@ajsquare.net','c3284d0f94606de1fd2af172aba15bf3','admin','2013-01-21 02:03:36','2013-02-20 12:00:00',0,'http://www.deemsprojects.com/qms/ajsquare4/cpanel/',0),(5,'qmsadmin','qms5',2147483647,'qmsadmin@ajsquare.net','a705e8cf60d772ef8a9ff4379624eb52','qmsadmin','2013-01-22 11:29:07','2013-02-21 12:00:00',0,'http://www.deemsprojects.com/qms/qms5/cpanel/',0),(6,'karthika','qmscompany6',2147483647,'qmscompany@aj.net','1be08e781e087ff046c9c55080ec9502','qmscompany','2013-02-01 12:03:03','2013-03-03 12:00:00',0,'http://www.deemsprojects.com/qms/qmscompany6/cpanel/',0),(7,'suganya','test7',1234567890,'suganya@ajsquare.net','825ebb674a6040f705e1b0970e23d049','suganya','2013-02-11 05:50:40','2013-03-13 12:00:00',0,'http://www.deemsprojects.com/qms_updated/test7/cpanel/',0);
/*!40000 ALTER TABLE `super_admin_trial_tables` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `superadmin_email_templates`
--

DROP TABLE IF EXISTS `superadmin_email_templates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `superadmin_email_templates` (
  `temp_id` int(255) NOT NULL auto_increment,
  `mail_subject` varchar(255) NOT NULL,
  `mail_from` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `template` text NOT NULL,
  `status` tinyint(1) NOT NULL,
  PRIMARY KEY  (`temp_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `superadmin_email_templates`
--

LOCK TABLES `superadmin_email_templates` WRITE;
/*!40000 ALTER TABLE `superadmin_email_templates` DISABLE KEYS */;
INSERT INTO `superadmin_email_templates` (`temp_id`, `mail_subject`, `mail_from`, `title`, `template`, `status`) VALUES (1,'Demo Request','suganya@ajsquare.net','Demo Request','<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"650\" align=\"center\" style=\"padding: 10px; border: 1px solid #d2d2d2\">   <tbody><tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 20px; border-bottom: 5px solid #050505\"><img style=\"border: 1px solid #cccccc\" src=\"[logo]\" alt=\"QMS Logo\" /></td>   </tr>   <tr valign=\"top\">     <td align=\"left\" style=\"background-color: #f2f2f2; padding: 20px\"><h2 style=\"color: #000000; font-size: 16px; font-family: Georgia,\'Times New Roman\',Times,serif; margin: 0pt; padding: 0pt\">Dear Sir/Madam !</h2>       <p style=\"color: #1175c9; font-size: 14px; font-weight: bold; font-family: \'Lucida Sans Unicode\',\'Lucida Grande\',sans-serif; margin: 0pt; padding: 5px 0pt; line-height: 24px\">Am requesting to you for demo in your promotional site.</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Details are given below.</p></td>   </tr>   <tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 15px 20px\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\" style=\"background-color: #ffffff; margin: auto; border: 1px solid #d2d2d2; padding: 10px\">         <tbody><tr>           <td colspan=\"3\" align=\"left\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #050505; font-weight: bold; border-bottom: 1px dotted #050505\">Company Info</td>         </tr>         <tr>           <td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Company Name</p></td>           <td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> <strong>[username]</strong></span></td>         </tr>         <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Email Id </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[email]</span></td>         </tr> <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Phone Number </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[phone]</span></td>         </tr>  <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">No Of Employees </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[noe]</span></td>         </tr>  <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">No Of Users </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[nou]</span></td>         </tr>  <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Type of Iso Qualification </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[typeiso]</span></td>         </tr>     </tbody></table></td>   </tr>   <tr>     <td style=\"background-color: #f2f2f2; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt; font-style: italic\">Thanks</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #1175c9; font-size: 12px; margin: 5px 0pt 10px; padding: 0pt; font-weight: bold\">QMS Team</p></td>   </tr>   <tr>     <td align=\"center\" valign=\"top\" style=\"background-color: #050505; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">For more details about Quality Management System, please feel free to contact our support team</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 0pt 0pt 5px; padding: 0pt; text-align: center\">&copy; Quality Management System. 2013. All rights reserved.</p></td>   </tr> </tbody></table>',1),(3,'Trial Request','admin@qms.com','Trial Request','<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"650\" align=\"center\" style=\"padding: 10px; border: 1px solid #d2d2d2\"><tbody><tr><td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 20px; border-bottom: 5px solid #050505\"><img style=\"border: 1px solid #cccccc\" src=\"[logo]\" alt=\"QMS Logo\" /></td></tr><tr valign=\"top\"><td align=\"left\" style=\"background-color: #f2f2f2; padding: 20px\"><h2 style=\"color: #000000; font-size: 16px; font-family: Georgia,\'Times New Roman\',Times,serif; margin: 0pt; padding: 0pt\">Dear Sir/Madam !</h2><p style=\"color: #1175c9; font-size: 14px; font-weight: bold; font-family: \'Lucida Sans Unicode\',\'Lucida Grande\',sans-serif; margin: 0pt; padding: 5px 0pt; line-height: 24px\">Am requesting to you for demo in your promotional site.</p><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Details are given below.</p></td></tr><tr><td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 15px 20px\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\" style=\"background-color: #ffffff; margin: auto; border: 1px solid #d2d2d2; padding: 10px\"><tbody><tr><td colspan=\"3\" align=\"left\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #050505; font-weight: bold; border-bottom: 1px dotted #050505\">Company Info</td></tr><tr><td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">&nbsp;Company Name</p></td><td width=\"48\" align=\"center\" valign=\"middle\">&nbsp;</td><td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> [company]</span></td></tr><tr><td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Name </p></td><td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td><td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> [username]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Email Id</p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[email]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Phone Number</p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[phone]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Trial Link</p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[url]</span></td></tr></tbody></table></td>  </tr><tr><td style=\"background-color: #f2f2f2; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt; font-style: italic\">Thanks</p><p style=\"font-family: Verdana,Geneva,sans-serif; color: #1175c9; font-size: 12px; margin: 5px 0pt 10px; padding: 0pt; font-weight: bold\">QMS Team</p></td></tr><tr><td align=\"center\" valign=\"top\" style=\"background-color: #050505; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">For more details about Quality Management System, please feel free to contact our support team</p>      <p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 0pt 0pt 5px; padding: 0pt; text-align: center\">&copy; Quality Management System. 2013. All rights reserved.</p></td></tr></tbody></table>',1),(4,'Trial response','admin@qms.com','Trial response','<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"650\" align=\"center\" style=\"padding: 10px; border: 1px solid #d2d2d2\"><tbody><tr><td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 20px; border-bottom: 5px solid #050505\"><img style=\"border: 1px solid #cccccc\" src=\"[logo]\" alt=\"QMS Logo\" /></td></tr><tr valign=\"top\"><td align=\"left\" style=\"background-color: #f2f2f2; padding: 20px\"><h2 style=\"color: #000000; font-size: 16px; font-family: Georgia,\'Times New Roman\',Times,serif; margin: 0pt; padding: 0pt\">Dear <span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[username]</span> !</h2><p style=\"color: #1175c9; font-size: 14px; font-weight: bold; font-family: \'Lucida Sans Unicode\',\'Lucida Grande\',sans-serif; margin: 0pt; padding: 5px 0pt; line-height: 24px\">Thank you for submitting you request with us.</p><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Details are given below.</p></td></tr><tr><td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 15px 20px\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\" style=\"background-color: #ffffff; margin: auto; border: 1px solid #d2d2d2; padding: 10px\"><tbody><tr><td colspan=\"3\" align=\"left\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #050505; font-weight: bold; border-bottom: 1px dotted #050505\">Company Info</td></tr><tr><td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Company Name</p></td><td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td><td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> [company]</span></td></tr><tr><td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Name </p></td><td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td><td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> [username]</span></td></tr><tr><td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Password</p></td><td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td><td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[password]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Email Id </p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[email]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Phone Number </p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[phone]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Trial Link </p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[url]</span></td></tr></tbody></table></td></tr><tr><td style=\"background-color: #f2f2f2; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt; font-style: italic\">Thanks</p><p style=\"font-family: Verdana,Geneva,sans-serif; color: #1175c9; font-size: 12px; margin: 5px 0pt 10px; padding: 0pt; font-weight: bold\">QMS Team</p></td></tr><tr><td align=\"center\" valign=\"top\" style=\"background-color: #050505; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">For more details about Quality Management System, please feel free to contact our support team</p> <p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 0pt 0pt 5px; padding: 0pt; text-align: center\">&copy; Quality Management System. 2013. All rights reserved.</p></td></tr></tbody></table>',1),(5,'Demo Response','admin@qms.com','Demo Response','<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"650\" align=\"center\" style=\"padding: 10px; border: 1px solid #d2d2d2\">   <tbody><tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 20px; border-bottom: 5px solid #050505\"><img style=\"border: 1px solid #cccccc\" src=\"[logo]\" alt=\"QMS Logo\" /></td>   </tr>   <tr valign=\"top\">     <td align=\"left\" style=\"background-color: #f2f2f2; padding: 20px\"><h2 style=\"color: #000000; font-size: 16px; font-family: Georgia,\'Times New Roman\',Times,serif; margin: 0pt; padding: 0pt\">Dear Sir/Madm !</h2>       <p style=\"color: #1175c9; font-size: 14px; font-weight: bold; font-family: \'Lucida Sans Unicode\',\'Lucida Grande\',sans-serif; margin: 0pt; padding: 5px 0pt; line-height: 24px\">Thank you for submitting your request with us.. </p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Details are given below.</p></td>   </tr>   <tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 15px 20px\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\" style=\"background-color: #ffffff; margin: auto; border: 1px solid #d2d2d2; padding: 10px\">         <tbody><tr>           <td colspan=\"3\" align=\"left\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #050505; font-weight: bold; border-bottom: 1px dotted #050505\">Company Info</td>         </tr>         <tr>           <td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Company Name</p></td>           <td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> <strong>[username]</strong></span></td>         </tr>         <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Email Id </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[email]</span></td>         </tr> <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Phone Number </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[phone]</span></td>         </tr>  <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">No Of Employees </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[noe]</span></td>         </tr>  <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">No Of Users </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[nou]</span></td>         </tr>  <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Type of Iso Qualification </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[typeiso]</span></td>         </tr>     </tbody></table></td>   </tr>   <tr>     <td style=\"background-color: #f2f2f2; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt; font-style: italic\">Thanks</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #1175c9; font-size: 12px; margin: 5px 0pt 10px; padding: 0pt; font-weight: bold\">QMS Team</p></td>   </tr>   <tr>     <td align=\"center\" valign=\"top\" style=\"background-color: #050505; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">For more details about Quality Management System, please feel free to contact our support team</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 0pt 0pt 5px; padding: 0pt; text-align: center\">&copy; Quality Management System. 2013. All rights reserved.</p></td>   </tr> </tbody></table>',1),(6,'Payment ','admin@qms.com','Payment','   <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"650\" align=\"center\" style=\"padding: 10px; border: 1px solid #d2d2d2\">   <tbody><tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 20px; border-bottom: 5px solid #050505\"><img style=\"border: 1px solid #cccccc\" src=\"[logo]\" alt=\"QMS Logo\" /></td>   </tr>   <tr valign=\"top\">     <td align=\"left\" style=\"background-color: #f2f2f2; padding: 20px\"><h2 style=\"color: #000000; font-size: 16px; font-family: Georgia,\'Times New Roman\',Times,serif; margin: 0pt; padding: 0pt\">Dear Sir/Madam!</h2>       <p style=\"color: #1175c9; font-size: 14px; font-weight: bold; font-family: \'Lucida Sans Unicode\',\'Lucida Grande\',sans-serif; margin: 0pt; padding: 5px 0pt; line-height: 24px\">Congratulations... <br />         Your Upgradation Done Successfully.</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Your&nbsp; Information are given below.</p></td>   </tr>   <tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 15px 20px\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\" style=\"background-color: #ffffff; margin: auto; border: 1px solid #d2d2d2; padding: 10px\">         <tbody><tr>           <td colspan=\"3\" align=\"left\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #050505; font-weight: bold; border-bottom: 1px dotted #050505\">Upgradation Info</td>         </tr>         <tr>           <td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">User Name</p></td>           <td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> [username]</span></td>         </tr>         <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Password </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[password]</span></td>         </tr> <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">URL </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[url]</span></td>         </tr>  <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Plan </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[plan]</span></td>         </tr>       </tbody></table></td>   </tr>   <tr>     <td style=\"background-color: #f2f2f2; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt; font-style: italic\">Thanks</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #1175c9; font-size: 12px; margin: 5px 0pt 10px; padding: 0pt; font-weight: bold\">QMS Team</p></td>   </tr>   <tr>     <td align=\"center\" valign=\"top\" style=\"background-color: #050505; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">For more details about Quality Management System, please feel free to contact our support team</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 0pt 0pt 5px; padding: 0pt; text-align: center\">&copy; Quality Management System. 2013. All rights reserved.</p></td>   </tr> </tbody></table>',1),(2,'Contact Us Request','admin@qms.com','Contact Us','<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"650\" align=\"center\" style=\"padding: 10px; border: 1px solid #d2d2d2\">   <tbody><tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 20px; border-bottom: 5px solid #050505\"><img style=\"border: 1px solid #cccccc\" src=\"[logo]\" alt=\"QMS Logo\" /></td>   </tr>   <tr valign=\"top\">     <td align=\"left\" style=\"background-color: #f2f2f2; padding: 20px\"><h2 style=\"color: #000000; font-size: 16px; font-family: Georgia,\'Times New Roman\',Times,serif; margin: 0pt; padding: 0pt\">Dear Sir/Madam!</h2>       <p style=\"color: #1175c9; font-size: 14px; font-weight: bold; font-family: \'Lucida Sans Unicode\',\'Lucida Grande\',sans-serif; margin: 0pt; padding: 5px 0pt; line-height: 24px\">&nbsp;&nbsp;&nbsp; Can you please contact me once you receive my request? </p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Details are given below.</p></td></tr><tr><td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 15px 20px\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\" style=\"background-color: #ffffff; margin: auto; border: 1px solid #d2d2d2; padding: 10px\"><tbody><tr><td colspan=\"3\" align=\"left\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #050505; font-weight: bold; border-bottom: 1px dotted #050505\">Contact Info</td></tr><tr><td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">&nbsp;Name</p></td><td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td><td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> [username]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Email Id </p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[email]</span></td></tr> <tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Phone Number </p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[phone]</span></td>         </tr>  <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Purpose&nbsp;Of&nbsp;Contact </p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[purpose]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Query</p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[query]</span></td></tr></tbody></table></td></tr><tr><td style=\"background-color: #f2f2f2; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt; font-style: italic\">Thanks</p><p style=\"font-family: Verdana,Geneva,sans-serif; color: #1175c9; font-size: 12px; margin: 5px 0pt 10px; padding: 0pt; font-weight: bold\">QMS Team</p></td></tr><tr><td align=\"center\" valign=\"top\" style=\"background-color: #050505; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">For more details about Quality Management System, please feel free to contact our support team</p><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 0pt 0pt 5px; padding: 0pt; text-align: center\">&copy; Quality Management System. 2013. All rights reserved.</p></td>   </tr> </tbody></table>',1),(7,'Contact Us Response','admin@qms.com','Contact Us Response','<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"650\" align=\"center\" style=\"padding: 10px; border: 1px solid #d2d2d2\">   <tbody><tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 20px; border-bottom: 5px solid #050505\"><img style=\"border: 1px solid #cccccc\" src=\"[logo]\" alt=\"QMS Logo\" /></td>   </tr>   <tr valign=\"top\">     <td align=\"left\" style=\"background-color: #f2f2f2; padding: 20px\"><h2 style=\"color: #000000; font-size: 16px; font-family: Georgia,\'Times New Roman\',Times,serif; margin: 0pt; padding: 0pt\">Dear Sir/Madam!</h2>       <p style=\"color: #1175c9; font-size: 14px; font-weight: bold; font-family: \'Lucida Sans Unicode\',\'Lucida Grande\',sans-serif; margin: 0pt; padding: 5px 0pt; line-height: 24px\">&nbsp;&nbsp; Thank you for submitting your request with us. </p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Details are given below.</p></td></tr><tr><td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 15px 20px\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\" style=\"background-color: #ffffff; margin: auto; border: 1px solid #d2d2d2; padding: 10px\"><tbody><tr><td colspan=\"3\" align=\"left\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #050505; font-weight: bold; border-bottom: 1px dotted #050505\">Contact Info</td></tr><tr><td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">&nbsp;Name</p></td><td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td><td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> [username]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Email Id </p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[email]</span></td></tr> <tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Phone Number </p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[phone]</span></td>         </tr>  <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Purpose&nbsp;Of&nbsp;Contact </p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[purpose]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Query</p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[query]</span></td></tr></tbody></table></td></tr><tr><td style=\"background-color: #f2f2f2; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt; font-style: italic\">Thanks</p><p style=\"font-family: Verdana,Geneva,sans-serif; color: #1175c9; font-size: 12px; margin: 5px 0pt 10px; padding: 0pt; font-weight: bold\">QMS Team</p></td></tr><tr><td align=\"center\" valign=\"top\" style=\"background-color: #050505; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">For more details about Quality Management System, please feel free to contact our support team</p><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 0pt 0pt 5px; padding: 0pt; text-align: center\">&copy; Quality Management System. 2013. All rights reserved.</p></td>   </tr> </tbody></table>',1),(8,'Registration','admin@qms.com','Registration','<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"650\" align=\"center\" style=\"padding: 10px; border: 1px solid #d2d2d2\"><tbody><tr><td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 20px; border-bottom: 5px solid #050505\"><img style=\"border: 1px solid #cccccc\" src=\"[logo]\" alt=\"QMS Logo\" /></td></tr><tr valign=\"top\"><td align=\"left\" style=\"background-color: #f2f2f2; padding: 20px\"><h2 style=\"color: #000000; font-size: 16px; font-family: Georgia,\'Times New Roman\',Times,serif; margin: 0pt; padding: 0pt\">Dear <span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[username]</span> !</h2><p style=\"color: #1175c9; font-size: 14px; font-weight: bold; font-family: \'Lucida Sans Unicode\',\'Lucida Grande\',sans-serif; margin: 0pt; padding: 5px 0pt; line-height: 24px\">Thank you for submitting you request with us.</p><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Details are given below.</p></td></tr><tr><td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 15px 20px\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\" style=\"background-color: #ffffff; margin: auto; border: 1px solid #d2d2d2; padding: 10px\"><tbody><tr><td colspan=\"3\" align=\"left\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #050505; font-weight: bold; border-bottom: 1px dotted #050505\">Company Info</td></tr><tr><td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Company Name</p></td><td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td><td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> [company]</span></td></tr><tr><td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Name </p></td><td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td><td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> [username]</span></td></tr><tr><td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Password</p></td><td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td><td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[password]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Email Id </p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[email]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Phone Number </p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[phone]</span></td></tr><tr><td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Trial Link </p></td><td align=\"center\" valign=\"middle\"><strong>:</strong></td><td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[url]</span></td></tr></tbody></table></td></tr><tr><td style=\"background-color: #f2f2f2; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt; font-style: italic\">Thanks</p><p style=\"font-family: Verdana,Geneva,sans-serif; color: #1175c9; font-size: 12px; margin: 5px 0pt 10px; padding: 0pt; font-weight: bold\">QMS Team</p></td></tr><tr><td align=\"center\" valign=\"top\" style=\"background-color: #050505; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">For more details about Quality Management System, please feel free to contact our support team</p> <p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 0pt 0pt 5px; padding: 0pt; text-align: center\">&copy; Quality Management System. 2013. All rights reserved.</p></td></tr></tbody></table>',1),(9,'Registration Verification','admin@qms.com','Registration Verification','   <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"650\" align=\"center\" style=\"padding: 10px; border: 1px solid #d2d2d2\">   <tbody><tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 20px; border-bottom: 5px solid #050505\"><img style=\"border: 1px solid #cccccc\" src=\"[logo]\" alt=\"QMS Logo\" /></td>   </tr>   <tr valign=\"top\">     <td align=\"left\" style=\"background-color: #f2f2f2; padding: 20px\"><h2 style=\"color: #000000; font-size: 16px; font-family: Georgia,\'Times New Roman\',Times,serif; margin: 0pt; padding: 0pt\">Dear [username] !</h2>       <p style=\"color: #1175c9; font-size: 14px; font-weight: bold; font-family: \'Lucida Sans Unicode\',\'Lucida Grande\',sans-serif; margin: 0pt; padding: 5px 0pt; line-height: 24px\">Congratulations... <br />         Your Registration completed Successfully.</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Your Registration Information are given below.</p></td>   </tr>   <tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 15px 20px\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\" style=\"background-color: #ffffff; margin: auto; border: 1px solid #d2d2d2; padding: 10px\">         <tbody><tr>           <td colspan=\"3\" align=\"left\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #050505; font-weight: bold; border-bottom: 1px dotted #050505\">Registration Info</td>         </tr>         <tr>           <td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">User Name</p></td>           <td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> [username]</span></td>         </tr>         <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Password </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[password]</span></td>         </tr>       </tbody></table></td>   </tr>   <tr>     <td style=\"background-color: #f2f2f2; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt; font-style: italic\">Thanks</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #1175c9; font-size: 12px; margin: 5px 0pt 10px; padding: 0pt; font-weight: bold\">QMS Team</p></td>   </tr>   <tr>     <td align=\"center\" valign=\"top\" style=\"background-color: #050505; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">For more details about Quality Management System, please feel free to contact our support team</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 0pt 0pt 5px; padding: 0pt; text-align: center\">&copy; Quality Management System. 2013. All rights reserved.</p></td>   </tr> </tbody></table>',1),(10,'Registration Verification','admin@qms.com','Registration Verification','   <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"650\" align=\"center\" style=\"padding: 10px; border: 1px solid #d2d2d2\">   <tbody><tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 20px; border-bottom: 5px solid #050505\"><img style=\"border: 1px solid #cccccc\" src=\"[logo]\" alt=\"QMS Logo\" /></td>   </tr>   <tr valign=\"top\">     <td align=\"left\" style=\"background-color: #f2f2f2; padding: 20px\"><h2 style=\"color: #000000; font-size: 16px; font-family: Georgia,\'Times New Roman\',Times,serif; margin: 0pt; padding: 0pt\">Dear [username] !</h2>       <p style=\"color: #1175c9; font-size: 14px; font-weight: bold; font-family: \'Lucida Sans Unicode\',\'Lucida Grande\',sans-serif; margin: 0pt; padding: 5px 0pt; line-height: 24px\">Congratulations... <br />         Your Registration completed Successfully.</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Your Registration Information are given below.</p></td>   </tr>   <tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 15px 20px\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\" style=\"background-color: #ffffff; margin: auto; border: 1px solid #d2d2d2; padding: 10px\">         <tbody><tr>           <td colspan=\"3\" align=\"left\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #050505; font-weight: bold; border-bottom: 1px dotted #050505\">Registration Info</td>         </tr>         <tr>           <td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">User Name</p></td>           <td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> [username]</span></td>         </tr>         <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Password </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[password]</span></td>         </tr>       </tbody></table></td>   </tr>   <tr>     <td style=\"background-color: #f2f2f2; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt; font-style: italic\">Thanks</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #1175c9; font-size: 12px; margin: 5px 0pt 10px; padding: 0pt; font-weight: bold\">QMS Team</p></td>   </tr>   <tr>     <td align=\"center\" valign=\"top\" style=\"background-color: #050505; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">For more details about Quality Management System, please feel free to contact our support team</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 0pt 0pt 5px; padding: 0pt; text-align: center\">&copy; Quality Management System. 2013. All rights reserved.</p></td>   </tr> </tbody></table>',1),(11,'Registration Verification','admin@qms.com','Registration Verification','   <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"650\" align=\"center\" style=\"padding: 10px; border: 1px solid #d2d2d2\">   <tbody><tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 20px; border-bottom: 5px solid #050505\"><img style=\"border: 1px solid #cccccc\" src=\"[logo]\" alt=\"QMS Logo\" /></td>   </tr>   <tr valign=\"top\">     <td align=\"left\" style=\"background-color: #f2f2f2; padding: 20px\"><h2 style=\"color: #000000; font-size: 16px; font-family: Georgia,\'Times New Roman\',Times,serif; margin: 0pt; padding: 0pt\">Dear [username] !</h2>       <p style=\"color: #1175c9; font-size: 14px; font-weight: bold; font-family: \'Lucida Sans Unicode\',\'Lucida Grande\',sans-serif; margin: 0pt; padding: 5px 0pt; line-height: 24px\">Congratulations... <br />         Your Registration completed Successfully.</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Your Registration Information are given below.</p></td>   </tr>   <tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #f2f2f2; padding: 15px 20px\"><table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\" style=\"background-color: #ffffff; margin: auto; border: 1px solid #d2d2d2; padding: 10px\">         <tbody><tr>           <td colspan=\"3\" align=\"left\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #050505; font-weight: bold; border-bottom: 1px dotted #050505\">Registration Info</td>         </tr>         <tr>           <td width=\"116\" align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">User Name</p></td>           <td width=\"48\" align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td width=\"334\" align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\"> [username]</span></td>         </tr>         <tr>           <td align=\"right\" valign=\"middle\" style=\"padding: 10px; font-family: Verdana,Geneva,sans-serif; font-size: 12px; color: #555555\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #050505; font-size: 12px; margin: 0pt; padding: 0pt\">Password </p></td>           <td align=\"center\" valign=\"middle\"><strong>:</strong></td>           <td align=\"left\" valign=\"middle\"><span style=\"font-family: Verdana,Geneva,sans-serif; font-size: 12px; font-weight: bold; color: #050505\">[password]</span></td>         </tr>       </tbody></table></td>   </tr>   <tr>     <td style=\"background-color: #f2f2f2; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt; font-style: italic\">Thanks</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #1175c9; font-size: 12px; margin: 5px 0pt 10px; padding: 0pt; font-weight: bold\">QMS Team</p></td>   </tr>   <tr>     <td align=\"center\" valign=\"top\" style=\"background-color: #050505; padding: 5px 20px\"><p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">For more details about Quality Management System, please feel free to contact our support team</p>       <p style=\"font-family: Verdana,Geneva,sans-serif; color: #ffffff; font-size: 11px; margin: 0pt 0pt 5px; padding: 0pt; text-align: center\">&copy; Quality Management System. 2013. All rights reserved.</p></td>   </tr> </tbody></table>',1);
/*!40000 ALTER TABLE `superadmin_email_templates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `supplierperform`
--

DROP TABLE IF EXISTS `supplierperform`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `supplierperform` (
  `supplier_perform_id` int(100) NOT NULL auto_increment,
  `supplier_name` varchar(100) NOT NULL,
  `supplier_perform` varchar(100) NOT NULL,
  `receipt_date` varchar(100) NOT NULL,
  `type_of_problem` varchar(100) NOT NULL,
  `problem` varchar(100) NOT NULL,
  `problem_details` text NOT NULL,
  `problem_found_at` varchar(100) NOT NULL,
  `deduction_for_issue` varchar(100) NOT NULL,
  `request_corrective_action` varchar(100) NOT NULL,
  `date_action` varchar(100) NOT NULL,
  `company_id` int(100) NOT NULL,
  PRIMARY KEY  (`supplier_perform_id`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `supplierperform`
--

LOCK TABLES `supplierperform` WRITE;
/*!40000 ALTER TABLE `supplierperform` DISABLE KEYS */;
INSERT INTO `supplierperform` (`supplier_perform_id`, `supplier_name`, `supplier_perform`, `receipt_date`, `type_of_problem`, `problem`, `problem_details`, `problem_found_at`, `deduction_for_issue`, `request_corrective_action`, `date_action`, `company_id`) VALUES (7,'ramu','not a gud suppller','08/07/2012','qua','qua2','not a gud suppller','rec','','yes','08/07/2012',0),(8,'','moder supplier','08/06/2012','qua','qua3','moder supplier','cus','moder supplier','no','',0),(9,'','new style supplier','08/16/2012','nop','','new style supplier','inp','','yes','08/05/2012',0),(10,'','chennai supplier','08/08/2012','nop','','chennai supplier','cus','chennai supplier','yes','08/07/2012',0),(11,'','madurai supplier','08/09/2012','deliv','del1','madurai supplier','rec','madurai supplier','no','',0),(12,'','trichy supplier','08/10/2012','deliv','del2','trichy supplier','inp','trichy supplier','no','',0),(15,'','kodumudi supplier','08/13/2012','cust','cus2','kodumudi supplier','inp','kodumudi supplier','no','',0),(16,'','pondi supplier','08/15/2012','cust','cus3','pondi supplier','cus','pondi supplier','no','',0),(17,'ramu','gud supplier','08/06/2012','nop','','gud supplier','rec','gud supplier','no','',0),(18,'karthikass','karthika','10-10-2012','deliv','del2','fgfdg','inp','fdgdfg fggvdgfvv hfjsdf','yes','12-10-2012',37);
/*!40000 ALTER TABLE `supplierperform` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_country_master`
--

DROP TABLE IF EXISTS `tbl_country_master`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_country_master` (
  `country_master_id` int(20) NOT NULL auto_increment,
  `country_master_name` varchar(50) character set latin1 collate latin1_general_ci default NULL,
  PRIMARY KEY  (`country_master_id`)
) ENGINE=MyISAM AUTO_INCREMENT=240 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_country_master`
--

LOCK TABLES `tbl_country_master` WRITE;
/*!40000 ALTER TABLE `tbl_country_master` DISABLE KEYS */;
INSERT INTO `tbl_country_master` (`country_master_id`, `country_master_name`) VALUES (1,'Afghanistan'),(2,'Albania'),(3,'Algeria'),(4,'American Samoa'),(5,'Andorra'),(6,'Angola'),(7,'Anguilla'),(8,'Antarctica'),(9,'Antigua And Barbuda'),(10,'Argentina'),(11,'Armenia'),(12,'Aruba'),(13,'Australia'),(14,'Austria'),(15,'Azerbaijan'),(16,'Bahamas'),(17,'Bahrain'),(18,'Bangladesh'),(19,'Barbados'),(20,'Belarus'),(21,'Belgium'),(22,'Belize'),(23,'Benin'),(24,'Bermuda'),(25,'Bhutan'),(26,'Bolivia'),(27,'Bosnia and Herzegovina'),(28,'Botswana'),(29,'Bouvet Island'),(30,'Brazil'),(31,'British Indian Ocean Territory'),(32,'Brunei'),(33,'Bulgaria'),(34,'Burkina Faso'),(35,'Burundi'),(36,'Cambodia'),(37,'Cameroon'),(38,'Canada'),(39,'Cape verde'),(40,'Cayman Islands'),(41,'Central African Republic'),(42,'Chad'),(43,'Chile'),(44,'China'),(45,'Christmas Island'),(46,'Cocos (keeling) Islands'),(47,'Colombia'),(48,'Comoros'),(49,'Congo'),(50,'Cook Islands'),(51,'Costa Rica'),(52,'Croatia'),(53,'Cuba'),(54,'Cyprus'),(55,'Czech Republic'),(56,'Dem Rep of Congo (Zaire)'),(57,'Denmark'),(58,'Djibouti'),(59,'Dominica'),(60,'Dominican Republic'),(61,'East Timor'),(62,'Ecuador'),(63,'Egypt'),(64,'El Salvador'),(65,'England'),(66,'Equatorial Guinea'),(67,'Eritrea'),(68,'Estonia'),(69,'Ethiopia'),(70,'Falkland Islands'),(71,'Faroe Islands'),(72,'Fiji'),(73,'Finland'),(74,'France'),(75,'French Guiana'),(76,'French Polynesia'),(77,'French Southern Territories'),(78,'Gabon'),(79,'Gambia'),(80,'Georgia'),(81,'Germany'),(82,'Ghana'),(83,'Gibraltar'),(84,'Greece'),(85,'Greenland'),(86,'Grenada'),(87,'Guadeloupe'),(88,'Guam'),(89,'Guatemala'),(90,'Guinea'),(91,'Guinea-Bissau'),(92,'Guyana'),(93,'Haiti'),(94,'Heard and McDonald Islands'),(95,'Honduras'),(96,'Hungary'),(97,'Iceland'),(98,'India'),(99,'Indonesia'),(100,'Iran'),(101,'Iraq'),(102,'Ireland'),(103,'Israel'),(104,'Italy'),(105,'Ivory Coast'),(106,'Jamaica'),(107,'Japan'),(108,'Jordan'),(109,'Kazakhstan'),(110,'Kenya'),(111,'Kiribati'),(112,'Korea'),(113,'Korea (D.P.R.)'),(114,'Kuwait'),(115,'Kyrgyzstan'),(116,'Lao'),(117,'Latvia'),(118,'Lebanon'),(119,'Lesotho'),(120,'Liberia'),(121,'Libya'),(122,'Liechtenstein'),(123,'Lithuania'),(124,'Luxembourg'),(125,'Macedonia'),(126,'Madagascar'),(127,'Malawi'),(128,'Malaysia'),(129,'Maldives'),(130,'Mali'),(131,'Malta'),(132,'Marshall Islands'),(133,'Martinique'),(134,'Mauritania'),(135,'Mauritius'),(136,'Mayotte'),(137,'Mexico'),(138,'Micronesia'),(139,'Moldova'),(140,'Monaco'),(141,'Mongolia'),(142,'Montserrat'),(143,'Morocco'),(144,'Mozambique'),(145,'Myanmar'),(146,'Namibia'),(147,'Nauru'),(148,'Nepal'),(149,'Netherlands'),(153,'Nicaragua'),(154,'Niger'),(155,'Nigeria'),(156,'Niue'),(157,'Norfolk Island'),(158,'Northern Mariana Islands'),(159,'Norway'),(160,'Oman'),(161,'Other'),(162,'Pakistan'),(163,'Palau'),(164,'Palestinian Territory, Occupie'),(165,'Panama'),(166,'Papua new Guinea'),(167,'Paraguay'),(168,'Peru'),(169,'Philippines'),(170,'Pitcairn Island'),(171,'Poland'),(172,'Portugal'),(173,'Puerto Rico'),(174,'Qatar'),(175,'Reunion'),(176,'Romania'),(177,'Russia'),(178,'Rwanda'),(179,'Saint Kitts And Nevis'),(180,'Saint Lucia'),(181,'Saint Vincent And The Grenadin'),(182,'Samoa'),(183,'San Marino'),(184,'Sao Tome and Principe'),(185,'Saudi Arabia'),(186,'Scotland'),(187,'Senegal'),(188,'Seychelles'),(189,'Sierra Leone'),(190,'Singapore'),(191,'Slovak Republic'),(192,'Slovenia'),(193,'Solomon Islands'),(194,'Somalia'),(195,'South Africa'),(196,'South Georgia, Sth Sandwich Islands'),(197,'Spain'),(198,'Sri Lanka'),(199,'St Helena'),(200,'St Pierre and Miquelon'),(201,'Sudan'),(202,'Suriname'),(203,'Svalbard And Jan Mayen Islands'),(204,'Swaziland'),(205,'Sweden'),(206,'Switzerland'),(207,'Syria'),(208,'Taiwan'),(209,'Tajikistan'),(210,'Tanzania'),(211,'Thailand'),(212,'Togo'),(213,'Tokelau'),(214,'Tonga'),(215,'Trinidad And Tobago'),(216,'Tunisia'),(217,'Turkey'),(218,'Turkmenistan'),(219,'Turks And Caicos Islands'),(220,'Tuvalu'),(221,'Uganda'),(222,'Ukraine'),(223,'United Arab Emirates'),(224,'United States'),(225,'Uruguay'),(226,'Uzbekistan'),(227,'Vanuatu'),(228,'Vatican City State (Holy See)'),(229,'Venezuela'),(230,'Vietnam'),(231,'Virgin Islands (British)'),(232,'Virgin Islands (US)'),(233,'Wales'),(234,'Wallis And Futuna Islands'),(235,'Western Sahara'),(236,'Yemen'),(237,'Zambia'),(238,'Zimbabwe');
/*!40000 ALTER TABLE `tbl_country_master` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-07-14  9:16:32
