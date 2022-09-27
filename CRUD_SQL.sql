-- MariaDB dump 10.19  Distrib 10.4.24-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: crud
-- ------------------------------------------------------
-- Server version	10.4.24-MariaDB

--
-- Table structure for table `employees`
--

DROP TABLE IF EXISTS `employees`;
CREATE TABLE `employees` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `addedProject` int(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employees`
--

LOCK TABLES `employees` WRITE;
INSERT INTO `employees` VALUES (1,'Jonas','Jonaitis',12),(2,'Antanas','Antanaitis',3),(3,'Petras','Petraitis',9),(4,'Rasa','Rasienė',11),(5,'Kazys','Kazaitis',6),(6,'Mukas','Mukaitis',8),(7,'Lukas','Lukaitis',9),(8,'Juozas','Juozaitis',5),(10,'Rokas',' Rokaitis',9);
UNLOCK TABLES;

--
-- Table structure for table `projects`
--

DROP TABLE IF EXISTS `projects`;
CREATE TABLE `projects` (
  `Project_id` int(50) NOT NULL AUTO_INCREMENT,
  `Project_name` varchar(255) NOT NULL,
  PRIMARY KEY (`Project_id`,`Project_name`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `projects`
--

LOCK TABLES `projects` WRITE;
INSERT INTO `projects` VALUES (3,'HTML'),(5,'React'),(6,'Laravel'),(8,'PHP'),(9,'SQL'),(11,'JavaScript'),(12,'CSS'),(15,'Python');
UNLOCK TABLES;


-- Dump completed on 2022-09-26 22:10:46
