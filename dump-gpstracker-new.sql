-- MySQL dump 10.13  Distrib 5.5.62, for Win64 (AMD64)
--
-- Host: localhost    Database: gpstracker
-- ------------------------------------------------------
-- Server version	5.5.5-10.4.24-MariaDB

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
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `customers` (
  `c_id` int(11) NOT NULL AUTO_INCREMENT,
  `c_name` varchar(256) NOT NULL,
  `c_mobile` varchar(15) NOT NULL,
  `c_email` varchar(100) NOT NULL,
  `c_address` varchar(256) NOT NULL,
  `c_created_date` datetime NOT NULL,
  `c_pwd` varchar(100) DEFAULT NULL,
  `c_isactive` varchar(11) NOT NULL DEFAULT '1',
  `c_modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`c_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `customers`
--

LOCK TABLES `customers` WRITE;
/*!40000 ALTER TABLE `customers` DISABLE KEYS */;
/*!40000 ALTER TABLE `customers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `drivers`
--

DROP TABLE IF EXISTS `drivers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `drivers` (
  `d_id` int(11) NOT NULL AUTO_INCREMENT,
  `d_name` varchar(100) NOT NULL,
  `d_mobile` varchar(15) NOT NULL,
  `d_address` varchar(250) NOT NULL,
  `d_age` varchar(10) NOT NULL,
  `d_licenseno` varchar(100) NOT NULL,
  `d_license_expdate` date NOT NULL,
  `d_total_exp` int(11) NOT NULL,
  `d_doj` date NOT NULL,
  `d_ref` varchar(256) DEFAULT NULL,
  `d_is_active` int(11) NOT NULL DEFAULT 1,
  `d_created_by` varchar(100) NOT NULL,
  `d_created_date` datetime NOT NULL,
  `d_modified_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`d_id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `drivers`
--

LOCK TABLES `drivers` WRITE;
/*!40000 ALTER TABLE `drivers` DISABLE KEYS */;
INSERT INTO `drivers` VALUES (2,'123','Teltonika 1','Testing','Teltonika','','0000-00-00',0,'0000-00-00',NULL,1,'1','2022-06-21 02:34:17','2022-06-21 12:33:36'),(3,'234','Teltonika 2','Testing','Teltonika','','0000-00-00',0,'0000-00-00',NULL,1,'1','2022-06-21 02:34:10','2022-06-21 12:34:05'),(4,'456','Teltonika 3','Testing','Teltonika','','0000-00-00',0,'0000-00-00',NULL,1,'1','2022-06-21 02:34:23','2022-06-21 12:34:35'),(5,'567','Teltonika 4','Testing','Teltonika','','0000-00-00',0,'0000-00-00',NULL,0,'1','2022-06-21 02:34:37','2022-06-21 12:34:51'),(6,'678','Teltonika 5','Testing','Teltonika','','0000-00-00',0,'0000-00-00',NULL,1,'1','2022-06-21 02:34:53','2022-06-21 12:35:05'),(7,'789','Teltonika 7','Testing','Teltonika','','0000-00-00',0,'0000-00-00',NULL,1,'1','2022-06-21 02:35:07','2022-06-21 12:35:22'),(8,'890','Teltonika 6','Testing','Teltonika','','0000-00-00',0,'0000-00-00',NULL,1,'1','2022-06-21 02:35:26','2022-06-21 12:35:38'),(9,'245','Teltonika 8','Testing','Teltonika','','0000-00-00',0,'0000-00-00',NULL,1,'1','2022-06-21 02:35:40','2022-06-21 12:35:55'),(10,'689','Teltonika 9','Testing','Teltonika','','0000-00-00',0,'0000-00-00',NULL,1,'1','2022-06-21 02:35:56','2022-06-21 12:36:07'),(11,'546','Teltonika 10','Testing','Teltonika','','0000-00-00',0,'0000-00-00',NULL,1,'1','2022-06-21 02:36:11','2022-06-21 12:36:25');
/*!40000 ALTER TABLE `drivers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `email_template`
--

DROP TABLE IF EXISTS `email_template`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `email_template` (
  `et_id` int(11) NOT NULL AUTO_INCREMENT,
  `et_name` varchar(256) NOT NULL,
  `et_subject` varchar(100) NOT NULL,
  `et_body` longtext NOT NULL,
  `et_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`et_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `email_template`
--

LOCK TABLES `email_template` WRITE;
/*!40000 ALTER TABLE `email_template` DISABLE KEYS */;
INSERT INTO `email_template` VALUES (1,'booking','Booking Confirmation - VMS','<p>Dear Customer,<p>\r\n\r\n<p>Thank you for choosing VMS<p>\r\n\r\n<p>We look forward to welcoming you to strat trip.<p>\r\n\r\n<p>{{bookingdetails}}<p>\r\n\r\n<p>Our professional and friendly staff are committed to ensuring your travel is both enjoyable and comfortable.<p>\r\n\r\n<p>Should you have any requests prior to your travel, please do not hesitate to contact us and we will endeavor to assist you whenever possible.<p>','2020-07-30 19:47:12'),(2,'tracking','Trip Tracking - VMS','<p>Dear Customer,</p>\r\n\r\n<p>Please use below url to track trip live location.</p>\r\n\r\n<p>URL : {{url}}<p>','2020-07-30 20:09:21');
/*!40000 ALTER TABLE `email_template` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `fuel`
--

DROP TABLE IF EXISTS `fuel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `fuel` (
  `v_fuel_id` int(10) NOT NULL AUTO_INCREMENT,
  `v_id` int(100) NOT NULL,
  `v_fuel_quantity` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_odometerreading` varchar(100) DEFAULT NULL,
  `v_fuelprice` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_fuelfilldate` date NOT NULL,
  `v_fueladdedby` varchar(100) NOT NULL,
  `v_fuelcomments` varchar(256) NOT NULL,
  `v_created_date` datetime NOT NULL,
  PRIMARY KEY (`v_fuel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `fuel`
--

LOCK TABLES `fuel` WRITE;
/*!40000 ALTER TABLE `fuel` DISABLE KEYS */;
/*!40000 ALTER TABLE `fuel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geofence_events`
--

DROP TABLE IF EXISTS `geofence_events`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geofence_events` (
  `ge_id` int(11) NOT NULL AUTO_INCREMENT,
  `ge_v_id` varchar(11) NOT NULL,
  `ge_geo_id` varchar(11) NOT NULL,
  `ge_event` varchar(256) NOT NULL,
  `ge_timestamp` varchar(100) NOT NULL,
  `ge_created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`ge_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geofence_events`
--

LOCK TABLES `geofence_events` WRITE;
/*!40000 ALTER TABLE `geofence_events` DISABLE KEYS */;
INSERT INTO `geofence_events` VALUES (1,'2','4','outside','2022-06-16 10:34:28','2022-06-16 08:34:28'),(2,'1','3','outside','2022-06-16 10:36:05','2022-06-16 08:36:05'),(3,'1','3','inside','2022-06-16 10:37:05','2022-06-16 08:37:05'),(4,'2','4','outside','2022-06-17 10:14:23','2022-06-17 08:14:23'),(5,'1','3','inside','2022-06-17 11:40:47','2022-06-17 09:40:47'),(6,'1','5','inside','2022-06-17 11:40:47','2022-06-17 09:40:47'),(7,'8','6','outside','2022-06-21 03:03:35','2022-06-21 13:03:35'),(8,'7','7','outside','2022-06-22 09:22:18','2022-06-22 07:22:18');
/*!40000 ALTER TABLE `geofence_events` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `geofences`
--

DROP TABLE IF EXISTS `geofences`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `geofences` (
  `geo_id` int(11) NOT NULL AUTO_INCREMENT,
  `geo_name` varchar(128) NOT NULL,
  `geo_description` varchar(128) DEFAULT NULL,
  `geo_area` varchar(4096) NOT NULL,
  `geo_vehicles` varchar(256) NOT NULL,
  `geo_createddate` datetime NOT NULL DEFAULT current_timestamp(),
  `geo_modifieddate` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`geo_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `geofences`
--

LOCK TABLES `geofences` WRITE;
/*!40000 ALTER TABLE `geofences` DISABLE KEYS */;
INSERT INTO `geofences` VALUES (6,'Indosat Office','Only in Indosat','-6.180052,106.82184 , -6.180639,106.82184 , -6.180639,106.822698 , ','8','2022-06-21 20:01:47','0000-00-00 00:00:00'),(7,'Monas','Monas Area','-6.17386,106.825632 , -6.178959,106.825009 , -6.179641,106.832176 , -6.174202,106.832391 , ','7','2022-06-21 20:02:37','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `geofences` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `incomeexpense`
--

DROP TABLE IF EXISTS `incomeexpense`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `incomeexpense` (
  `ie_id` int(11) NOT NULL AUTO_INCREMENT,
  `ie_v_id` varchar(100) NOT NULL,
  `ie_date` date NOT NULL,
  `ie_type` varchar(100) NOT NULL,
  `ie_description` varchar(256) NOT NULL,
  `ie_amount` int(100) NOT NULL,
  `ie_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `ie_modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`ie_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `incomeexpense`
--

LOCK TABLES `incomeexpense` WRITE;
/*!40000 ALTER TABLE `incomeexpense` DISABLE KEYS */;
/*!40000 ALTER TABLE `incomeexpense` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login`
--

DROP TABLE IF EXISTS `login`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login` (
  `u_id` int(11) NOT NULL AUTO_INCREMENT,
  `u_name` varchar(250) NOT NULL,
  `u_username` varchar(250) NOT NULL,
  `u_password` varchar(250) NOT NULL,
  `u_isactive` varchar(100) NOT NULL DEFAULT '1',
  `u_email` varchar(256) NOT NULL,
  `u_created_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`u_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login`
--

LOCK TABLES `login` WRITE;
/*!40000 ALTER TABLE `login` DISABLE KEYS */;
INSERT INTO `login` VALUES (1,'admin','admin@admin.com','21232f297a57a5a743894a0e4a801fc3','1','admin@admin.com','2021-08-14 10:25:18');
/*!40000 ALTER TABLE `login` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `login_roles`
--

DROP TABLE IF EXISTS `login_roles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `login_roles` (
  `lr_id` int(11) NOT NULL AUTO_INCREMENT,
  `lr_u_id` int(11) NOT NULL,
  `lr_vech_list` int(11) NOT NULL DEFAULT 0,
  `lr_vech_list_view` int(11) NOT NULL DEFAULT 0,
  `lr_vech_list_edit` int(11) NOT NULL DEFAULT 0,
  `lr_vech_add` int(11) NOT NULL DEFAULT 0,
  `lr_vech_group` int(11) NOT NULL DEFAULT 0,
  `lr_vech_group_add` int(11) NOT NULL DEFAULT 0,
  `lr_vech_group_action` int(11) NOT NULL DEFAULT 0,
  `lr_drivers_list` int(11) NOT NULL DEFAULT 0,
  `lr_drivers_list_edit` int(11) NOT NULL DEFAULT 0,
  `lr_drivers_add` int(11) NOT NULL DEFAULT 0,
  `lr_trips_list` int(11) NOT NULL DEFAULT 0,
  `lr_trips_list_edit` int(11) NOT NULL DEFAULT 0,
  `lr_trips_add` int(11) NOT NULL DEFAULT 0,
  `lr_cust_list` int(11) NOT NULL DEFAULT 0,
  `lr_cust_edit` int(11) NOT NULL DEFAULT 0,
  `lr_cust_add` int(11) NOT NULL DEFAULT 0,
  `lr_fuel_list` int(11) NOT NULL DEFAULT 0,
  `lr_fuel_edit` int(11) NOT NULL DEFAULT 0,
  `lr_fuel_add` int(11) NOT NULL DEFAULT 0,
  `lr_reminder_list` int(11) NOT NULL DEFAULT 0,
  `lr_reminder_delete` int(11) NOT NULL DEFAULT 0,
  `lr_reminder_add` int(11) NOT NULL DEFAULT 0,
  `lr_ie_list` int(11) NOT NULL DEFAULT 0,
  `lr_ie_edit` int(11) NOT NULL DEFAULT 0,
  `lr_ie_add` int(11) NOT NULL DEFAULT 0,
  `lr_tracking` int(11) NOT NULL DEFAULT 0,
  `lr_liveloc` int(11) NOT NULL DEFAULT 0,
  `lr_geofence_add` int(11) NOT NULL DEFAULT 0,
  `lr_geofence_list` int(11) NOT NULL DEFAULT 0,
  `lr_geofence_delete` int(11) NOT NULL DEFAULT 0,
  `lr_geofence_events` int(11) NOT NULL DEFAULT 0,
  `lr_reports` int(11) NOT NULL DEFAULT 0,
  `lr_settings` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`lr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `login_roles`
--

LOCK TABLES `login_roles` WRITE;
/*!40000 ALTER TABLE `login_roles` DISABLE KEYS */;
INSERT INTO `login_roles` VALUES (1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1,1);
/*!40000 ALTER TABLE `login_roles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `notification`
--

DROP TABLE IF EXISTS `notification`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `notification` (
  `n_id` int(11) NOT NULL AUTO_INCREMENT,
  `n_subject` varchar(256) NOT NULL,
  `n_message` varchar(256) DEFAULT NULL,
  `n_is_read` int(11) NOT NULL DEFAULT 0,
  `n_created_date` datetime NOT NULL,
  PRIMARY KEY (`n_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `notification`
--

LOCK TABLES `notification` WRITE;
/*!40000 ALTER TABLE `notification` DISABLE KEYS */;
/*!40000 ALTER TABLE `notification` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `positions`
--

DROP TABLE IF EXISTS `positions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `positions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `time` timestamp NOT NULL DEFAULT current_timestamp(),
  `v_id` int(11) NOT NULL,
  `latitude` double NOT NULL,
  `longitude` double NOT NULL,
  `altitude` double DEFAULT NULL,
  `speed` double DEFAULT NULL,
  `bearing` double DEFAULT NULL,
  `accuracy` int(11) DEFAULT NULL,
  `provider` varchar(100) DEFAULT NULL,
  `comment` varchar(255) DEFAULT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_panic` tinyint(1) NOT NULL DEFAULT 0,
  `latest` int(11) NOT NULL DEFAULT 0,
  PRIMARY KEY (`id`),
  KEY `index_user_id` (`v_id`)
) ENGINE=InnoDB AUTO_INCREMENT=39 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `positions`
--

LOCK TABLES `positions` WRITE;
/*!40000 ALTER TABLE `positions` DISABLE KEYS */;
INSERT INTO `positions` VALUES (36,'2022-06-20 20:03:35',8,-6.180037,106.822459,NULL,NULL,NULL,NULL,NULL,NULL,'2022-06-21 13:03:35',0,0),(37,'2022-06-22 02:22:10',11,-6.168334,106.774101,NULL,NULL,NULL,NULL,NULL,NULL,'2022-06-22 07:24:24',1,0),(38,'2022-06-22 02:22:18',7,-6.208401,106.981974,NULL,NULL,NULL,NULL,NULL,NULL,'2022-06-22 07:24:24',2,0);
/*!40000 ALTER TABLE `positions` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `reminder`
--

DROP TABLE IF EXISTS `reminder`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `reminder` (
  `r_id` int(11) NOT NULL AUTO_INCREMENT,
  `r_v_id` varchar(11) NOT NULL,
  `r_date` date NOT NULL,
  `r_message` varchar(256) NOT NULL,
  `r_isread` varchar(11) NOT NULL DEFAULT '0',
  `r_created_date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`r_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `reminder`
--

LOCK TABLES `reminder` WRITE;
/*!40000 ALTER TABLE `reminder` DISABLE KEYS */;
INSERT INTO `reminder` VALUES (1,'1','2022-06-12','teas','0','2022-06-12 07:15:20');
/*!40000 ALTER TABLE `reminder` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings`
--

DROP TABLE IF EXISTS `settings`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings` (
  `s_id` int(11) NOT NULL AUTO_INCREMENT,
  `s_companyname` varchar(100) DEFAULT NULL,
  `s_address` varchar(100) DEFAULT NULL,
  `s_inovice_prefix` varchar(100) NOT NULL,
  `s_logo` varchar(100) NOT NULL,
  `s_price_prefix` varchar(100) NOT NULL,
  `s_inovice_termsandcondition` varchar(256) NOT NULL,
  `s_inovice_servicename` varchar(100) NOT NULL,
  `s_googel_api_key` varchar(256) NOT NULL,
  PRIMARY KEY (`s_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings`
--

LOCK TABLES `settings` WRITE;
/*!40000 ALTER TABLE `settings` DISABLE KEYS */;
INSERT INTO `settings` VALUES (1,'Personal Tracking','KPPTI','IOH','1655881449-Indosat_Ooredoo_Hutchison_Logomark.png','IDR','                        ','Personal Tracking','AIzaSyC2E5dRurKfqeED_6jFd2ooR7TYOhVb1Fg');
/*!40000 ALTER TABLE `settings` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `settings_smtp`
--

DROP TABLE IF EXISTS `settings_smtp`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `settings_smtp` (
  `smtp_host` varchar(100) NOT NULL,
  `smtp_auth` varchar(100) NOT NULL,
  `smtp_uname` varchar(100) NOT NULL,
  `smtp_pwd` varchar(100) NOT NULL,
  `smtp_issecure` varchar(100) NOT NULL,
  `smtp_port` varchar(100) NOT NULL,
  `smtp_emailfrom` varchar(100) NOT NULL,
  `smtp_replyto` varchar(100) NOT NULL,
  `smtp_createddate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `settings_smtp`
--

LOCK TABLES `settings_smtp` WRITE;
/*!40000 ALTER TABLE `settings_smtp` DISABLE KEYS */;
/*!40000 ALTER TABLE `settings_smtp` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trip_payments`
--

DROP TABLE IF EXISTS `trip_payments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trip_payments` (
  `tp_id` int(11) NOT NULL AUTO_INCREMENT,
  `tp_trip_id` int(11) NOT NULL,
  `tp_v_id` int(11) NOT NULL,
  `tp_amount` int(100) NOT NULL,
  `tp_notes` varchar(256) DEFAULT NULL,
  `tp_created_date` datetime NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`tp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trip_payments`
--

LOCK TABLES `trip_payments` WRITE;
/*!40000 ALTER TABLE `trip_payments` DISABLE KEYS */;
/*!40000 ALTER TABLE `trip_payments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trips`
--

DROP TABLE IF EXISTS `trips`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trips` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `t_customer_id` varchar(11) NOT NULL,
  `t_vechicle` varchar(100) NOT NULL,
  `t_type` varchar(100) NOT NULL,
  `t_driver` varchar(100) NOT NULL,
  `t_start_date` date NOT NULL,
  `t_end_date` date NOT NULL,
  `t_trip_fromlocation` varchar(100) NOT NULL,
  `t_trip_tolocation` varchar(100) NOT NULL,
  `t_trip_fromlat` varchar(100) DEFAULT NULL,
  `t_trip_fromlog` varchar(100) DEFAULT NULL,
  `t_trip_tolat` varchar(100) DEFAULT NULL,
  `t_trip_tolog` varchar(100) NOT NULL,
  `t_totaldistance` varchar(100) NOT NULL,
  `t_trip_amount` varchar(100) NOT NULL DEFAULT '0',
  `t_trip_status` varchar(50) NOT NULL DEFAULT 'OnGoing',
  `t_trackingcode` varchar(100) DEFAULT NULL,
  `t_created_by` varchar(100) NOT NULL,
  `t_created_date` datetime NOT NULL,
  `t_modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trips`
--

LOCK TABLES `trips` WRITE;
/*!40000 ALTER TABLE `trips` DISABLE KEYS */;
/*!40000 ALTER TABLE `trips` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicle_group`
--

DROP TABLE IF EXISTS `vehicle_group`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicle_group` (
  `gr_id` int(11) NOT NULL AUTO_INCREMENT,
  `gr_name` varchar(256) NOT NULL,
  `gr_desc` varchar(256) NOT NULL,
  `gr_created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`gr_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicle_group`
--

LOCK TABLES `vehicle_group` WRITE;
/*!40000 ALTER TABLE `vehicle_group` DISABLE KEYS */;
INSERT INTO `vehicle_group` VALUES (2,'Salesman Jakarta','Jakarta Area','2022-06-21 11:26:57'),(3,'Salesman Tangerang','Area Tangerang','2022-06-21 12:44:14'),(4,'Salesman Bekasi','Area Bekasi','2022-06-21 12:44:24'),(5,'Salesman Depok','Area Depo','2022-06-21 12:44:37');
/*!40000 ALTER TABLE `vehicle_group` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `vehicles`
--

DROP TABLE IF EXISTS `vehicles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `vehicles` (
  `v_id` int(10) NOT NULL AUTO_INCREMENT,
  `v_registration_no` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_name` varchar(100) NOT NULL,
  `v_model` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_chassis_no` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_engine_no` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_manufactured_by` varchar(255) CHARACTER SET latin1 NOT NULL,
  `v_type` varchar(100) NOT NULL,
  `v_color` varchar(100) NOT NULL,
  `t_driver` varchar(100) NOT NULL DEFAULT '0',
  `v_is_active` int(10) NOT NULL DEFAULT 1,
  `v_group` int(11) NOT NULL,
  `v_reg_exp_date` varchar(100) NOT NULL,
  `v_api_url` varchar(100) NOT NULL,
  `v_api_username` varchar(100) NOT NULL,
  `v_api_password` varchar(100) NOT NULL,
  `v_created_by` varchar(100) NOT NULL,
  `v_created_date` datetime NOT NULL,
  `v_modified_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`v_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `vehicles`
--

LOCK TABLES `vehicles` WRITE;
/*!40000 ALTER TABLE `vehicles` DISABLE KEYS */;
INSERT INTO `vehicles` VALUES (7,'002','Budiman','','','','','','#F399EB','Teltonika 1',1,3,'2022-06-20','','','','1','2022-06-21 02:53:00','2022-06-21 12:53:02'),(8,'001','Rivki','','','','','','#F3D654','Teltonika 2',1,2,'2022-06-16','','','','1','2022-06-21 02:43:49','2022-06-21 12:44:00'),(9,'003','Aston','','','','','','#F32155','Teltonika 3',1,3,'2022-06-15','','','','1','2022-06-21 03:07:32','2022-06-21 13:07:58'),(10,'004','Jaka','','','','','','#1EEFF3','Teltonika 5',1,5,'2022-06-08','','','','1','2022-06-21 03:08:04','2022-06-21 13:08:20'),(11,'007','Andi','','','','','','#4312F3','Teltonika 7',1,4,'2022-06-01','','','','1','2022-06-21 03:08:27','2022-06-21 13:08:43'),(12,'005','Indra','','','','','','#28F3AC','Teltonika 8',1,2,'2022-06-11','','','','1','2022-06-21 03:09:06','2022-06-21 13:09:25');
/*!40000 ALTER TABLE `vehicles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'gpstracker'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-06-29 14:04:38
