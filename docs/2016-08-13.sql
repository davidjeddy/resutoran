-- MySQL dump 10.13  Distrib 5.7.9, for osx10.9 (x86_64)
--
-- Host: 192.168.33.11    Database: zeroforksgiven
-- ------------------------------------------------------
-- Server version	5.6.29

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
-- Table structure for table `resu_ambiance_option`
--

DROP TABLE IF EXISTS `resu_ambiance_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_ambiance_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_ambiance_option`
--

LOCK TABLES `resu_ambiance_option` WRITE;
/*!40000 ALTER TABLE `resu_ambiance_option` DISABLE KEYS */;
INSERT INTO `resu_ambiance_option` (`id`, `value`, `created_at`, `created_by`, `updated_at`, `updated_by`, `deleted_at`) VALUES (1,'qwer',1471118198,1,NULL,NULL,NULL);
/*!40000 ALTER TABLE `resu_ambiance_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_boolean_option`
--

DROP TABLE IF EXISTS `resu_boolean_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_boolean_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_boolean_option`
--

LOCK TABLES `resu_boolean_option` WRITE;
/*!40000 ALTER TABLE `resu_boolean_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_boolean_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_contact`
--

DROP TABLE IF EXISTS `resu_contact`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_contact` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `country_code` int(2) NOT NULL,
  `phone1` int(11) NOT NULL,
  `phone2` int(11) DEFAULT NULL,
  `phone3` int(11) DEFAULT NULL,
  `address1` text,
  `address2` text,
  `address3` text,
  `country` text,
  `city` text,
  `prov` varchar(2) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_contact`
--

LOCK TABLES `resu_contact` WRITE;
/*!40000 ALTER TABLE `resu_contact` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_contact` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_cuisine_option`
--

DROP TABLE IF EXISTS `resu_cuisine_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_cuisine_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_cuisine_option`
--

LOCK TABLES `resu_cuisine_option` WRITE;
/*!40000 ALTER TABLE `resu_cuisine_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_cuisine_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_decor_option`
--

DROP TABLE IF EXISTS `resu_decor_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_decor_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_decor_option`
--

LOCK TABLES `resu_decor_option` WRITE;
/*!40000 ALTER TABLE `resu_decor_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_decor_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_dress_code_option`
--

DROP TABLE IF EXISTS `resu_dress_code_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_dress_code_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_dress_code_option`
--

LOCK TABLES `resu_dress_code_option` WRITE;
/*!40000 ALTER TABLE `resu_dress_code_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_dress_code_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_franchise`
--

DROP TABLE IF EXISTS `resu_franchise`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_franchise` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(128) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `idresu_franchise_UNIQUE` (`id`),
  UNIQUE KEY `name_UNIQUE` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_franchise`
--

LOCK TABLES `resu_franchise` WRITE;
/*!40000 ALTER TABLE `resu_franchise` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_franchise` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_hours_option`
--

DROP TABLE IF EXISTS `resu_hours_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_hours_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_hours_option`
--

LOCK TABLES `resu_hours_option` WRITE;
/*!40000 ALTER TABLE `resu_hours_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_hours_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_location`
--

DROP TABLE IF EXISTS `resu_location`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_location` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `resu_franchise_id` int(10) unsigned NOT NULL,
  `resu_contact_id` int(10) unsigned NOT NULL,
  `resu_price_option_id` int(10) unsigned NOT NULL,
  `resu_decor_option_id` int(10) unsigned NOT NULL,
  `resu_ambiance_option_id` int(10) unsigned NOT NULL,
  `resu_map_id` int(11) unsigned NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_resu_location_resu_franchise_idx` (`resu_franchise_id`),
  KEY `fk_resu_location_resu_contact1_idx` (`resu_contact_id`),
  KEY `fk_resu_location_resu_price_option1_idx` (`resu_price_option_id`),
  KEY `fk_resu_location_resu_decor_option1_idx` (`resu_decor_option_id`),
  KEY `fk_resu_location_resu_ambiance_option1_idx` (`resu_ambiance_option_id`),
  KEY `fk_resu_location_resu_map1_idx` (`resu_map_id`),
  CONSTRAINT `fk_resu_location_resu_ambiance_option1` FOREIGN KEY (`resu_ambiance_option_id`) REFERENCES `resu_ambiance_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_resu_contact1` FOREIGN KEY (`resu_contact_id`) REFERENCES `resu_contact` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_resu_decor_option1` FOREIGN KEY (`resu_decor_option_id`) REFERENCES `resu_decor_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_resu_franchise` FOREIGN KEY (`resu_franchise_id`) REFERENCES `resu_franchise` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_resu_map1` FOREIGN KEY (`resu_map_id`) REFERENCES `resu_map` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_resu_price_option1` FOREIGN KEY (`resu_price_option_id`) REFERENCES `resu_price_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_location`
--

LOCK TABLES `resu_location` WRITE;
/*!40000 ALTER TABLE `resu_location` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_location` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_location_boolean`
--

DROP TABLE IF EXISTS `resu_location_boolean`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_location_boolean` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resu_location_id` int(10) unsigned NOT NULL,
  `resu_boolean_option_id` int(10) unsigned NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_resu_location_boolean_resu_location1_idx` (`resu_location_id`),
  KEY `fk_resu_location_boolean_resu_boolean_option1_idx` (`resu_boolean_option_id`),
  CONSTRAINT `fk_resu_location_boolean_resu_boolean_option1` FOREIGN KEY (`resu_boolean_option_id`) REFERENCES `resu_boolean_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_boolean_resu_location1` FOREIGN KEY (`resu_location_id`) REFERENCES `resu_location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_location_boolean`
--

LOCK TABLES `resu_location_boolean` WRITE;
/*!40000 ALTER TABLE `resu_location_boolean` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_location_boolean` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_location_cuisine`
--

DROP TABLE IF EXISTS `resu_location_cuisine`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_location_cuisine` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resu_location_id` int(10) unsigned NOT NULL,
  `resu_cuisine_option_id` int(10) unsigned NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_resu_location_cuisine_resu_location1_idx` (`resu_location_id`),
  KEY `fk_resu_location_cuisine_resu_cuisine_option1_idx` (`resu_cuisine_option_id`),
  CONSTRAINT `fk_resu_location_cuisine_resu_cuisine_option1` FOREIGN KEY (`resu_cuisine_option_id`) REFERENCES `resu_cuisine_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_cuisine_resu_location1` FOREIGN KEY (`resu_location_id`) REFERENCES `resu_location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_location_cuisine`
--

LOCK TABLES `resu_location_cuisine` WRITE;
/*!40000 ALTER TABLE `resu_location_cuisine` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_location_cuisine` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_location_dress_code`
--

DROP TABLE IF EXISTS `resu_location_dress_code`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_location_dress_code` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resu_location_id` int(10) unsigned NOT NULL,
  `resu_dress_code_option_id` int(10) unsigned NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_resu_location_dress_code_resu_location1_idx` (`resu_location_id`),
  KEY `fk_resu_location_dress_code_resu_dress_code_option1_idx` (`resu_dress_code_option_id`),
  CONSTRAINT `fk_resu_location_dress_code_resu_dress_code_option1` FOREIGN KEY (`resu_dress_code_option_id`) REFERENCES `resu_dress_code_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_dress_code_resu_location1` FOREIGN KEY (`resu_location_id`) REFERENCES `resu_location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_location_dress_code`
--

LOCK TABLES `resu_location_dress_code` WRITE;
/*!40000 ALTER TABLE `resu_location_dress_code` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_location_dress_code` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_location_hours`
--

DROP TABLE IF EXISTS `resu_location_hours`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_location_hours` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resu_location_id` int(10) unsigned NOT NULL,
  `resu_hours_option_id` int(10) unsigned NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_resu_location_hours_resu_location1_idx` (`resu_location_id`),
  KEY `fk_resu_location_hours_resu_hours_option1_idx` (`resu_hours_option_id`),
  CONSTRAINT `fk_resu_location_hours_resu_hours_option1` FOREIGN KEY (`resu_hours_option_id`) REFERENCES `resu_hours_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_hours_resu_location1` FOREIGN KEY (`resu_location_id`) REFERENCES `resu_location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_location_hours`
--

LOCK TABLES `resu_location_hours` WRITE;
/*!40000 ALTER TABLE `resu_location_hours` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_location_hours` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_location_media`
--

DROP TABLE IF EXISTS `resu_location_media`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_location_media` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resu_media_option_id` int(10) unsigned NOT NULL,
  `resu_location_id` int(10) unsigned NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_resu_location_media_resu_media_option1_idx` (`resu_media_option_id`),
  KEY `fk_resu_location_media_resu_location1_idx` (`resu_location_id`),
  CONSTRAINT `fk_resu_location_media_resu_location1` FOREIGN KEY (`resu_location_id`) REFERENCES `resu_location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_media_resu_media_option1` FOREIGN KEY (`resu_media_option_id`) REFERENCES `resu_media_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_location_media`
--

LOCK TABLES `resu_location_media` WRITE;
/*!40000 ALTER TABLE `resu_location_media` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_location_media` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_location_menu`
--

DROP TABLE IF EXISTS `resu_location_menu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_location_menu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resu_location_id` int(10) unsigned NOT NULL,
  `resu_menu_option_id` int(10) unsigned NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_resu_location_menu_resu_location1_idx` (`resu_location_id`),
  KEY `fk_resu_location_menu_resu_menu_option1_idx` (`resu_menu_option_id`),
  CONSTRAINT `fk_resu_location_menu_resu_location1` FOREIGN KEY (`resu_location_id`) REFERENCES `resu_location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_menu_resu_menu_option1` FOREIGN KEY (`resu_menu_option_id`) REFERENCES `resu_menu_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_location_menu`
--

LOCK TABLES `resu_location_menu` WRITE;
/*!40000 ALTER TABLE `resu_location_menu` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_location_menu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_location_payment`
--

DROP TABLE IF EXISTS `resu_location_payment`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_location_payment` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resu_payment_option_id` int(10) unsigned NOT NULL,
  `resu_location_id` int(10) unsigned NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_resu_location_payment_resu_payment_option1_idx` (`resu_payment_option_id`),
  KEY `fk_resu_location_payment_resu_location1_idx` (`resu_location_id`),
  CONSTRAINT `fk_resu_location_payment_resu_location1` FOREIGN KEY (`resu_location_id`) REFERENCES `resu_location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_payment_resu_payment_option1` FOREIGN KEY (`resu_payment_option_id`) REFERENCES `resu_payment_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_location_payment`
--

LOCK TABLES `resu_location_payment` WRITE;
/*!40000 ALTER TABLE `resu_location_payment` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_location_payment` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_location_reservation`
--

DROP TABLE IF EXISTS `resu_location_reservation`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_location_reservation` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resu_location_id` int(10) unsigned NOT NULL,
  `resu_reservation_option_id` int(10) unsigned NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_resu_location_reservation_resu_location1_idx` (`resu_location_id`),
  KEY `fk_resu_location_reservation_resu_reservation_option1_idx` (`resu_reservation_option_id`),
  CONSTRAINT `fk_resu_location_reservation_resu_location1` FOREIGN KEY (`resu_location_id`) REFERENCES `resu_location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_reservation_resu_reservation_option1` FOREIGN KEY (`resu_reservation_option_id`) REFERENCES `resu_reservation_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_location_reservation`
--

LOCK TABLES `resu_location_reservation` WRITE;
/*!40000 ALTER TABLE `resu_location_reservation` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_location_reservation` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_location_seating`
--

DROP TABLE IF EXISTS `resu_location_seating`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_location_seating` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resu_location_id` int(10) unsigned NOT NULL,
  `resu_seating_option_id` int(10) unsigned NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_resu_location_seating_resu_location1_idx` (`resu_location_id`),
  KEY `fk_resu_location_seating_resu_seating_option1_idx` (`resu_seating_option_id`),
  CONSTRAINT `fk_resu_location_seating_resu_location1` FOREIGN KEY (`resu_location_id`) REFERENCES `resu_location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_seating_resu_seating_option1` FOREIGN KEY (`resu_seating_option_id`) REFERENCES `resu_seating_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_location_seating`
--

LOCK TABLES `resu_location_seating` WRITE;
/*!40000 ALTER TABLE `resu_location_seating` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_location_seating` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_location_service`
--

DROP TABLE IF EXISTS `resu_location_service`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_location_service` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `resu_location_id` int(10) unsigned NOT NULL,
  `resu_services_option_id` int(10) unsigned NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  KEY `fk_resu_location_service_resu_location1_idx` (`resu_location_id`),
  KEY `fk_resu_location_service_resu_services_option1_idx` (`resu_services_option_id`),
  CONSTRAINT `fk_resu_location_service_resu_location1` FOREIGN KEY (`resu_location_id`) REFERENCES `resu_location` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk_resu_location_service_resu_services_option1` FOREIGN KEY (`resu_services_option_id`) REFERENCES `resu_services_option` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_location_service`
--

LOCK TABLES `resu_location_service` WRITE;
/*!40000 ALTER TABLE `resu_location_service` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_location_service` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_map`
--

DROP TABLE IF EXISTS `resu_map`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_map` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_map`
--

LOCK TABLES `resu_map` WRITE;
/*!40000 ALTER TABLE `resu_map` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_map` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_media_option`
--

DROP TABLE IF EXISTS `resu_media_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_media_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_media_option`
--

LOCK TABLES `resu_media_option` WRITE;
/*!40000 ALTER TABLE `resu_media_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_media_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_menu_option`
--

DROP TABLE IF EXISTS `resu_menu_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_menu_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_menu_option`
--

LOCK TABLES `resu_menu_option` WRITE;
/*!40000 ALTER TABLE `resu_menu_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_menu_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_payment_option`
--

DROP TABLE IF EXISTS `resu_payment_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_payment_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_payment_option`
--

LOCK TABLES `resu_payment_option` WRITE;
/*!40000 ALTER TABLE `resu_payment_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_payment_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_price_option`
--

DROP TABLE IF EXISTS `resu_price_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_price_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` decimal(6,2) NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_price_option`
--

LOCK TABLES `resu_price_option` WRITE;
/*!40000 ALTER TABLE `resu_price_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_price_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_reservation_option`
--

DROP TABLE IF EXISTS `resu_reservation_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_reservation_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_reservation_option`
--

LOCK TABLES `resu_reservation_option` WRITE;
/*!40000 ALTER TABLE `resu_reservation_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_reservation_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_seating_option`
--

DROP TABLE IF EXISTS `resu_seating_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_seating_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_seating_option`
--

LOCK TABLES `resu_seating_option` WRITE;
/*!40000 ALTER TABLE `resu_seating_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_seating_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `resu_services_option`
--

DROP TABLE IF EXISTS `resu_services_option`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `resu_services_option` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `value` text NOT NULL,
  `created_at` int(11) DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `updated_at` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `deleted_at` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `resu_services_option`
--

LOCK TABLES `resu_services_option` WRITE;
/*!40000 ALTER TABLE `resu_services_option` DISABLE KEYS */;
/*!40000 ALTER TABLE `resu_services_option` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping events for database 'zeroforksgiven'
--

--
-- Dumping routines for database 'zeroforksgiven'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-08-13 16:09:32
