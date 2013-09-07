-- MySQL dump 10.11
--
-- Host: localhost    Database: deemspro_research_app
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

--
-- Table structure for table `admin_log_activity_table`
--

DROP TABLE IF EXISTS `admin_log_activity_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_log_activity_table` (
  `log_id` int(100) NOT NULL auto_increment,
  `admin_id` int(100) NOT NULL,
  `ip_address` varchar(100) NOT NULL,
  `admin_date_time` datetime NOT NULL,
  `admin_desc` varchar(100) NOT NULL,
  PRIMARY KEY  (`log_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_log_activity_table`
--

LOCK TABLES `admin_log_activity_table` WRITE;
/*!40000 ALTER TABLE `admin_log_activity_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `admin_log_activity_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_log_ip_table`
--

DROP TABLE IF EXISTS `admin_log_ip_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_log_ip_table` (
  `admin_log_id` int(50) NOT NULL auto_increment,
  `admin_log_admin_id` int(100) NOT NULL,
  `admin_log_ip_used` varchar(100) NOT NULL,
  `admin_log_time` datetime NOT NULL,
  `admin_log_desc` text NOT NULL,
  PRIMARY KEY  (`admin_log_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_log_ip_table`
--

LOCK TABLES `admin_log_ip_table` WRITE;
/*!40000 ALTER TABLE `admin_log_ip_table` DISABLE KEYS */;
INSERT INTO `admin_log_ip_table` (`admin_log_id`, `admin_log_admin_id`, `admin_log_ip_used`, `admin_log_time`, `admin_log_desc`) VALUES (1,3,'182.72.224.10','2012-12-13 11:37:18',''),(2,3,'182.72.224.10','2012-12-14 12:51:17',''),(3,3,'182.72.224.10','2012-12-14 12:52:26',''),(4,3,'174.103.245.173','2012-12-14 08:25:06',''),(5,3,'182.72.224.10','2012-12-14 08:25:51',''),(6,3,'174.103.245.173','2012-12-14 08:38:58',''),(7,3,'174.103.245.173','2012-12-14 08:58:58',''),(8,3,'140.254.45.32','2012-12-14 09:28:06',''),(9,3,'140.254.45.32','2013-02-22 12:50:35',''),(10,3,'182.72.224.10','2013-05-22 12:48:33',''),(11,3,'182.72.224.10','2013-05-22 12:55:08',''),(12,3,'174.103.245.173','2013-05-22 05:44:39','');
/*!40000 ALTER TABLE `admin_log_ip_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `admin_log_table`
--

DROP TABLE IF EXISTS `admin_log_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin_log_table` (
  `admin_id` int(50) NOT NULL auto_increment,
  `admin_username` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_email` varchar(100) NOT NULL,
  `admin_mobile` varchar(100) NOT NULL,
  `admin_address` varchar(100) NOT NULL,
  `previlages` varchar(300) NOT NULL,
  `date` datetime NOT NULL,
  `status` int(50) NOT NULL,
  PRIMARY KEY  (`admin_id`)
) ENGINE=MyISAM AUTO_INCREMENT=99 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin_log_table`
--

LOCK TABLES `admin_log_table` WRITE;
/*!40000 ALTER TABLE `admin_log_table` DISABLE KEYS */;
INSERT INTO `admin_log_table` (`admin_id`, `admin_username`, `admin_password`, `admin_email`, `admin_mobile`, `admin_address`, `previlages`, `date`, `status`) VALUES (3,'Testuser','c3284d0f94606de1fd2af172aba15bf3','testing@deemsysinc.com','9688117337','kumar','addstream,editstream,deletestream,broadcaststream,addparticipant,editparticipant,deleteparticipant,addadminuser,edituser,deleteuser,modifysettings,mailtemplate','0000-00-00 00:00:00',1);
/*!40000 ALTER TABLE `admin_log_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `broad_cast_table`
--

DROP TABLE IF EXISTS `broad_cast_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `broad_cast_table` (
  `br_id` int(100) NOT NULL auto_increment,
  `broad_id` varchar(100) NOT NULL,
  `steam_id` int(100) NOT NULL,
  `group_id` int(100) NOT NULL,
  `frequency` varchar(100) NOT NULL,
  `start_date` datetime NOT NULL,
  `fstream_time` varchar(50) NOT NULL,
  `sstream_time` varchar(100) NOT NULL,
  `stream_week_day` varchar(100) NOT NULL,
  `status` int(50) NOT NULL COMMENT '0=>on,1=>off',
  PRIMARY KEY  (`br_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `broad_cast_table`
--

LOCK TABLES `broad_cast_table` WRITE;
/*!40000 ALTER TABLE `broad_cast_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `broad_cast_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `group_table`
--

DROP TABLE IF EXISTS `group_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `group_table` (
  `group_id` int(50) NOT NULL auto_increment,
  `group_name` varchar(100) NOT NULL,
  `group_scope` int(50) NOT NULL,
  `group_decs` text NOT NULL,
  `select_local_group` text NOT NULL,
  `local_city` text NOT NULL,
  `local_dojfrom` varchar(50) NOT NULL,
  `local_dojto` varchar(50) NOT NULL,
  `local_age` int(10) NOT NULL,
  `local_educations` varchar(100) NOT NULL,
  PRIMARY KEY  (`group_id`)
) ENGINE=MyISAM AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `group_table`
--

LOCK TABLES `group_table` WRITE;
/*!40000 ALTER TABLE `group_table` DISABLE KEYS */;
INSERT INTO `group_table` (`group_id`, `group_name`, `group_scope`, `group_decs`, `select_local_group`, `local_city`, `local_dojfrom`, `local_dojto`, `local_age`, `local_educations`) VALUES (16,'Test',0,'Test group','','','','',0,'School');
/*!40000 ALTER TABLE `group_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mail_template`
--

DROP TABLE IF EXISTS `mail_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mail_template` (
  `mail_id` int(100) NOT NULL auto_increment,
  `mail_template_name` varchar(100) NOT NULL,
  `mail_subject` varchar(100) NOT NULL,
  `from_name` varchar(100) NOT NULL,
  `from_mail` varchar(100) NOT NULL,
  `replay_mail` varchar(100) NOT NULL,
  `smtp_servername` varchar(100) NOT NULL,
  `port` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `message` text character set latin1 collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`mail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mail_template`
--

LOCK TABLES `mail_template` WRITE;
/*!40000 ALTER TABLE `mail_template` DISABLE KEYS */;
INSERT INTO `mail_template` (`mail_id`, `mail_template_name`, `mail_subject`, `from_name`, `from_mail`, `replay_mail`, `smtp_servername`, `port`, `username`, `password`, `message`) VALUES (1,'forgetpassword','Forget password','admin','kumarappan@ajsquare.net','kumarappan@ajsquare.net','smtpout.secureserver.net','25','syssupport@ajsquare.net','test1234','<table width=\"650\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"padding:10px; border: rgb(241, 250, 252) 1px solid;\">\r\n  <tr>\r\n    <td align=\"left\" valign=\"top\" style=\"background-color: rgb(19, 19, 19); padding:10px; border-bottom: rgb(153, 153, 153) 5px solid; \"><logo></td>\r\n  </tr>\r\n  <tr valign=\"top\"><td align=\"left\" style=\"background-color: rgb(241, 250, 252); padding:20px;\"><h1 style=\"color: rgb(68, 68, 68); font-size:20px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; margin:0; padding:0; font-weight:normal;\">Welcomes You!</h1>\r\n  <p style=\"color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; margin:0; padding:0; font-weight:bold;\">Your New Password...</p>\r\n  <h5 style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:20px 0 5px 0; padding:0;\">Hi <username>,</h5>\r\n  <p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;\">Your New Password.</p>\r\n  </td></tr>\r\n  <tr><td align=\"left\" valign=\"top\" style=\"background-color: rgb(241, 250, 252); padding:5px 20px 15px 20px;\">\r\n  <table width=\"500\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"background-color: rgb(255, 255, 255); margin:auto; border: rgb(214, 230, 234) 1px solid; padding:10px;\">\r\n  <tr>\r\n    <td style=\"padding:10px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(85, 85, 85); font-weight:bold; border-bottom: rgb(204, 204, 204) 1px dotted;\">Your Password Details </td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\"padding:10px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(85, 85, 85);\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;\">User Name : <span style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; font-weight:bold; color:rgb(11, 152, 198)\"><username></span></p></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\"padding:10px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(85, 85, 85);\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;\">Password : <span style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; font-weight:bold; color:rgb(11, 152, 198)\"><password></span></p></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\"padding:10px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(85, 85, 85);\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;\"><a href=\"<url>\" style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(228, 32, 33)\">Click Here</a> to login your account</p></td>\r\n  </tr>\r\n</table>\r\n</td></tr>\r\n \r\n<tr><td style=\"background-color: rgb(241, 250, 252); padding:5px 20px;\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0; font-style:italic;\">Thanks & Regards,</p>\r\n<p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(49, 148, 204); font-size:12px; margin:5px 0 10px 0; padding:0; font-style:italic; font-weight:bold;\">Research App  <span style=\"color: rgb(222, 72, 69);\">Team</span></p>\r\n</td></tr>\r\n<tr><td align=\"center\" valign=\"top\" style=\"background-color:#555; padding:5px 20px;\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(255, 255, 255); font-size:11px; margin:5px 0; padding:0;\">If you have any queries, please feel free to contact us at support@researchapp.com or </p>\r\n<p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(255, 255, 255); font-size:11px; margin:5px 0; padding:0;\">by phone at (0452) xxxx - xx - xxxx.</p>\r\n<p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(255, 255, 255); font-size:11px; margin:0 0 5px 0; padding:0; text-align:center;\">© Research App. 2012. All rights reserved.</p>\r\n</td></tr>\r\n\r\n</table>'),(11,'welcomeadminuser','Your Account successfully registered','admin','benjamin@deemsysinc.com','arulben@gmail.com','smtpout.secureserver.net','25','testing@deemsysinc.com','admin','<table border=\"\\&quot;0\\&quot;\" cellspacing=\"\\&quot;0\\&quot;\" cellpadding=\"\\&quot;0\\&quot;\" width=\"\\&quot;650\\&quot;\" align=\"\\&quot;center\\&quot;\">   <tbody><tr>     <td align=\"\\&quot;left\\&quot;\" valign=\"\\&quot;top\\&quot;\">&nbsp;</td>   </tr>   <tr valign=\"\\&quot;top\\&quot;\"><td align=\"\\&quot;left\\&quot;\"><h1>Welcomes You!</h1>   <p>Your Account successfully registered...</p>   <h5>Hi ,</h5>   <p>This is to confirm that you have successfully register.</p>   </td></tr>   <tr><td align=\"\\&quot;left\\&quot;\" valign=\"\\&quot;top\\&quot;\">   <table border=\"\\&quot;0\\&quot;\" cellspacing=\"\\&quot;0\\&quot;\" cellpadding=\"\\&quot;0\\&quot;\" width=\"\\&quot;500\\&quot;\">   <tbody><tr>     <td>Your Account Details </td>   </tr>   <tr>     <td><p>User Name : </p></td>   </tr>   <tr>     <td><p>Password : </p></td>   </tr>   <tr>     <td><p><a href=\"%5C%22%3Curl%3E%5C%22\">Click Here</a> to active your account</p></td>   </tr> </tbody></table> </td></tr>   <tr><td><p>Thanks &amp; Regards,</p> <p>Research App  <span>Team</span></p> </td></tr> <tr><td align=\"\\&quot;center\\&quot;\" valign=\"\\&quot;top\\&quot;\"><p>If you have any queries, please feel free to contact us at support@researchapp.com or </p> <p>by phone at (0452) xxxx - xx - xxxx.</p> <p>ï¿½ Research App. 2012. All rights reserved.</p> </td></tr>  </tbody></table>'),(3,'youraccountactivated','Your Account Has Been  Activated','admin','kumarappan@ajsquare.net','kumarappan@ajsquare.net','smtpout.secureserver.net','25','syssupport@ajsquare.net','test1234','<table width=\"650\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"padding:10px; border: rgb(241, 250, 252) 1px solid;\">\r\n  <tr>\r\n    <td align=\"left\" valign=\"top\" style=\"background-color: rgb(19, 19, 19); padding:10px; border-bottom: rgb(153, 153, 153) 5px solid; \"><logo></td>\r\n  </tr>\r\n  <tr valign=\"top\"><td align=\"left\" style=\"background-color: rgb(241, 250, 252); padding:20px;\"><h1 style=\"color: rgb(68, 68, 68); font-size:20px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; margin:0; padding:0; font-weight:normal;\">Welcomes You!</h1>\r\n  <p style=\"color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; margin:0; padding:0; font-weight:bold;\">Your Account successfully Activated...</p>\r\n  <h5 style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:20px 0 5px 0; padding:0;\">Hi <username>,</h5>\r\n  <p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;\">This is to confirm that you account has been activated successfully.</p>\r\n  </td></tr>\r\n  <tr><td align=\"left\" valign=\"top\" style=\"background-color: rgb(241, 250, 252); padding:5px 20px 15px 20px;\">\r\n  <table width=\"500\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"background-color: rgb(255, 255, 255); margin:auto; border: rgb(214, 230, 234) 1px solid; padding:10px;\">\r\n  <tr>\r\n    <td style=\"padding:10px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(85, 85, 85); font-weight:bold; border-bottom: rgb(204, 204, 204) 1px dotted;\">Your Account Details </td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\"padding:10px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(85, 85, 85);\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;\">User Name : <span style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; font-weight:bold; color:rgb(11, 152, 198)\"><username></span></p></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\"padding:10px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(85, 85, 85);\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;\">Info : <span style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; font-weight:bold; color:rgb(11, 152, 198)\"><message></span></p></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\"padding:10px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(85, 85, 85);\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;\"><a href=\"<url>\" style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(228, 32, 33)\">Click Here</a> to login your account</p></td>\r\n  </tr>\r\n</table>\r\n</td></tr>\r\n \r\n<tr><td style=\"background-color: rgb(241, 250, 252); padding:5px 20px;\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0; font-style:italic;\">Thanks & Regards,</p>\r\n<p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(49, 148, 204); font-size:12px; margin:5px 0 10px 0; padding:0; font-style:italic; font-weight:bold;\">Research App  <span style=\"color: rgb(222, 72, 69);\">Team</span></p>\r\n</td></tr>\r\n<tr><td align=\"center\" valign=\"top\" style=\"background-color:#555; padding:5px 20px;\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(255, 255, 255); font-size:11px; margin:5px 0; padding:0;\">If you have any queries, please feel free to contact us at support@researchapp.com or </p>\r\n<p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(255, 255, 255); font-size:11px; margin:5px 0; padding:0;\">by phone at (0452) xxxx - xx - xxxx.</p>\r\n<p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(255, 255, 255); font-size:11px; margin:0 0 5px 0; padding:0; text-align:center;\">© Research App. 2012. All rights reserved.</p>\r\n</td></tr>\r\n\r\n</table>'),(4,'youraccountsuspend','Your Account Has Been Suspended','admin','kumarappan@ajsquare.net','kumarappan@ajsquare.net','smtpout.secureserver.net','25','syssupport@ajsquare.net','test1234','<table width=\"650\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" align=\"center\" style=\"padding:10px; border: rgb(241, 250, 252) 1px solid;\">\r\n  <tr>\r\n    <td align=\"left\" valign=\"top\" style=\"background-color: rgb(19, 19, 19); padding:10px; border-bottom: rgb(153, 153, 153) 5px solid; \"><logo></td>\r\n  </tr>\r\n  <tr valign=\"top\"><td align=\"left\" style=\"background-color: rgb(241, 250, 252); padding:20px;\"><h1 style=\"color: rgb(68, 68, 68); font-size:20px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; margin:0; padding:0; font-weight:normal;\">Welcomes You!</h1>\r\n  <p style=\"color: rgb(126, 149, 1); font-size:18px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; margin:0; padding:0; font-weight:bold;\">Your Account suspended...</p>\r\n  <h5 style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:20px 0 5px 0; padding:0;\">Hi <username>,</h5>\r\n  <p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;\">This is to confirm that you account has been suspended.</p>\r\n  </td></tr>\r\n  <tr><td align=\"left\" valign=\"top\" style=\"background-color: rgb(241, 250, 252); padding:5px 20px 15px 20px;\">\r\n  <table width=\"500\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" style=\"background-color: rgb(255, 255, 255); margin:auto; border: rgb(214, 230, 234) 1px solid; padding:10px;\">\r\n  <tr>\r\n    <td style=\"padding:10px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(85, 85, 85); font-weight:bold; border-bottom: rgb(204, 204, 204) 1px dotted;\">Your Account Details </td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\"padding:10px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(85, 85, 85);\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;\">User Name : <span style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; font-weight:bold; color:rgb(11, 152, 198)\"><username></span></p></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\"padding:10px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(85, 85, 85);\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;\">Info : <span style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; font-weight:bold; color:rgb(11, 152, 198)\"><message></span></p></td>\r\n  </tr>\r\n  <tr>\r\n    <td style=\"padding:10px; font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(85, 85, 85);\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0;\"><a href=\"<url>\" style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; font-size:12px; color: rgb(228, 32, 33)\">Click Here</a> to login your account</p></td>\r\n  </tr>\r\n</table>\r\n</td></tr>\r\n \r\n<tr><td style=\"background-color: rgb(241, 250, 252); padding:5px 20px;\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(85, 85, 85); font-size:12px; margin:0; padding:0; font-style:italic;\">Thanks & Regards,</p>\r\n<p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(49, 148, 204); font-size:12px; margin:5px 0 10px 0; padding:0; font-style:italic; font-weight:bold;\">Research App  <span style=\"color: rgb(222, 72, 69);\">Team</span></p>\r\n</td></tr>\r\n<tr><td align=\"center\" valign=\"top\" style=\"background-color:#555; padding:5px 20px;\"><p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(255, 255, 255); font-size:11px; margin:5px 0; padding:0;\">If you have any queries, please feel free to contact us at support@researchapp.com or </p>\r\n<p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(255, 255, 255); font-size:11px; margin:5px 0; padding:0;\">by phone at (0452) xxxx - xx - xxxx.</p>\r\n<p style=\"font-family:Arial, Helvetica, sans-serif, \'Myriad Pro\', Calibri; color: rgb(255, 255, 255); font-size:11px; margin:0 0 5px 0; padding:0; text-align:center;\">© Research App. 2012. All rights reserved.</p>\r\n</td></tr>\r\n\r\n</table>'),(10,'youraccountdeletes','Your Account Has Been Deleted','admin','kumarappan@ajsquare.net','kumarappan@ajsquare.net','smtpout.secureserver.net','25','syssupport@ajsquare.net','test1234','<table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"650\" align=\"center\" style=\"padding: 10px; border: 1px solid #f1fafc\">   <tbody><tr>     <td align=\"left\" valign=\"top\" style=\"background-color: #131313; padding: 10px; border-bottom: 5px solid #999999\">&nbsp;</td>   </tr>   <tr valign=\"top\"><td align=\"left\" style=\"background-color: #f1fafc; padding: 20px\"><h1 style=\"color: #444444; font-size: 20px; font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; margin: 0pt; padding: 0pt; font-weight: normal\">Welcomes You!</h1>   <p style=\"color: #7e9501; font-size: 18px; font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; margin: 0pt; padding: 0pt; font-weight: bold\">Your Account Has Been Deleted...</p>   <h5 style=\"font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; color: #555555; font-size: 12px; margin: 20px 0pt 5px; padding: 0pt\">Hi ,</h5>   <p style=\"font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt\">Your Account Has Been Deleted.</p>   </td></tr>   <tr><td align=\"left\" valign=\"top\" style=\"background-color: #f1fafc; padding: 5px 20px 15px\">   <table border=\"0\" cellspacing=\"0\" cellpadding=\"0\" width=\"500\" style=\"background-color: #ffffff; margin: auto; border: 1px solid #d6e6ea; padding: 10px\">   <tbody><tr>     <td style=\"padding: 10px; font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; font-size: 12px; color: #555555; font-weight: bold; border-bottom: 1px dotted #cccccc\">Your Account Details </td>   </tr>   <tr>     <td style=\"padding: 10px; font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; font-size: 12px; color: #555555\"><p style=\"font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt\">User Name : </p></td>   </tr>   <tr>     <td style=\"padding: 10px; font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; font-size: 12px; color: #555555\"><p style=\"font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt\">Info : </p></td>   </tr>   <tr>     <td style=\"padding: 10px; font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; font-size: 12px; color: #555555\"><p style=\"font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt\"><a style=\"font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; font-size: 12px; color: #e42021\" href=\"%3Curl%3E\">Click Here</a> to login your account</p></td>   </tr> </tbody></table> </td></tr>   <tr><td style=\"background-color: #f1fafc; padding: 5px 20px\"><p style=\"font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; color: #555555; font-size: 12px; margin: 0pt; padding: 0pt; font-style: italic\">Thanks &amp; Regards,</p> <p style=\"font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; color: #3194cc; font-size: 12px; margin: 5px 0pt 10px; padding: 0pt; font-style: italic; font-weight: bold\">Research App  <span style=\"color: #de4845\">Team</span></p> </td></tr> <tr><td align=\"center\" valign=\"top\" style=\"background-color: #555555; padding: 5px 20px\"><p style=\"font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">If you have any queries, please feel free to contact us at support@researchapp.com or </p> <p style=\"font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; color: #ffffff; font-size: 11px; margin: 5px 0pt; padding: 0pt\">by phone at (0452) xxxx - xx - xxxx.</p> <p style=\"font-family: Arial,Helvetica,sans-serif,\'Myriad Pro\',Calibri; color: #ffffff; font-size: 11px; margin: 0pt 0pt 5px; padding: 0pt; text-align: center\">ï¿½ Research App. 2012. All rights reserved.</p> </td></tr>  </tbody></table>');
/*!40000 ALTER TABLE `mail_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message_stream`
--

DROP TABLE IF EXISTS `message_stream`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message_stream` (
  `message_id` int(100) NOT NULL auto_increment,
  `stream_id` int(100) NOT NULL,
  `stream_message` text NOT NULL,
  `msg_count` int(100) NOT NULL,
  PRIMARY KEY  (`message_id`)
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message_stream`
--

LOCK TABLES `message_stream` WRITE;
/*!40000 ALTER TABLE `message_stream` DISABLE KEYS */;
INSERT INTO `message_stream` (`message_id`, `stream_id`, `stream_message`, `msg_count`) VALUES (11,1012,'Wishing you miles of smiles in the coming years.',2),(10,1012,'Happy Birthday, you\'re not getting older you\'re just a little closer to death.',1),(9,1013,'Test message1',1),(12,1012,'May the best of your wishes be the least of what you get.',3),(13,1014,'Message 1 of Nov28 test.',1),(14,1014,'Message 2 of the Nov28 test.',2);
/*!40000 ALTER TABLE `message_stream` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `msg_send_table`
--

DROP TABLE IF EXISTS `msg_send_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `msg_send_table` (
  `id` int(100) NOT NULL auto_increment,
  `broad_id` varchar(100) NOT NULL,
  `participant_id` int(100) NOT NULL,
  `msg_send_id` int(100) NOT NULL,
  `stream_id` int(100) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `msg_send_table`
--

LOCK TABLES `msg_send_table` WRITE;
/*!40000 ALTER TABLE `msg_send_table` DISABLE KEYS */;
/*!40000 ALTER TABLE `msg_send_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `participants_table`
--

DROP TABLE IF EXISTS `participants_table`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `participants_table` (
  `participants_id` int(50) NOT NULL auto_increment,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `mobile_num` varchar(100) NOT NULL,
  `gender` int(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `education` varchar(100) NOT NULL,
  `note` varchar(100) NOT NULL,
  `medical_details` text NOT NULL,
  `messaging_frequency` varchar(100) NOT NULL,
  `group_name` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `date_of_join` datetime NOT NULL,
  `email_id` varchar(100) NOT NULL,
  `created_by` int(100) NOT NULL,
  PRIMARY KEY  (`participants_id`)
) ENGINE=MyISAM AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `participants_table`
--

LOCK TABLES `participants_table` WRITE;
/*!40000 ALTER TABLE `participants_table` DISABLE KEYS */;
INSERT INTO `participants_table` (`participants_id`, `fname`, `lname`, `mobile_num`, `gender`, `city`, `education`, `note`, `medical_details`, `messaging_frequency`, `group_name`, `age`, `date_of_join`, `email_id`, `created_by`) VALUES (11,'Prabu','David','6145952325',0,'Pullman','School','Note','Med Details','Daily Twice','16','Above 60','2012-11-20 05:11:42','prabu.david@wsu.edu',0);
/*!40000 ALTER TABLE `participants_table` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stream`
--

DROP TABLE IF EXISTS `stream`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `stream` (
  `stream_id` int(100) NOT NULL auto_increment,
  `admin_name` varchar(100) NOT NULL,
  `stream_name` varchar(100) NOT NULL,
  `stream_description` varchar(500) NOT NULL,
  PRIMARY KEY  (`stream_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stream`
--

LOCK TABLES `stream` WRITE;
/*!40000 ALTER TABLE `stream` DISABLE KEYS */;
/*!40000 ALTER TABLE `stream` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `text_msg_api`
--

DROP TABLE IF EXISTS `text_msg_api`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `text_msg_api` (
  `msg_id` int(50) NOT NULL auto_increment,
  `account_sid` varchar(100) NOT NULL,
  `auth_token` varchar(100) NOT NULL,
  `mob_num` varchar(100) NOT NULL,
  PRIMARY KEY  (`msg_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `text_msg_api`
--

LOCK TABLES `text_msg_api` WRITE;
/*!40000 ALTER TABLE `text_msg_api` DISABLE KEYS */;
INSERT INTO `text_msg_api` (`msg_id`, `account_sid`, `auth_token`, `mob_num`) VALUES (1,'AC786e7d442679f6354ffad69c823e8293','1fa46f72637ea7c1f51b758c486f9e66','+16142598990');
/*!40000 ALTER TABLE `text_msg_api` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-07-14  9:16:18
