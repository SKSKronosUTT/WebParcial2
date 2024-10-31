-- MySQL dump 10.13  Distrib 9.0.1, for Linux (x86_64)
--
-- Host: localhost    Database: bienesraices2
-- ------------------------------------------------------
-- Server version	9.0.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `prop_status`
--

DROP TABLE IF EXISTS `prop_status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `prop_status` (
  `code` varchar(8) NOT NULL,
  `description` varchar(16) DEFAULT NULL,
  PRIMARY KEY (`code`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prop_status`
--

LOCK TABLES `prop_status` WRITE;
/*!40000 ALTER TABLE `prop_status` DISABLE KEYS */;
INSERT INTO `prop_status` VALUES ('ONSA','On sale'),('SOLD','Sold');
/*!40000 ALTER TABLE `prop_status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `propierties`
--

DROP TABLE IF EXISTS `propierties`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `propierties` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(32) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image` varchar(256) DEFAULT NULL,
  `description` longtext,
  `rooms` int DEFAULT NULL,
  `wc` int DEFAULT NULL,
  `garage` int DEFAULT NULL,
  `timestamp` date DEFAULT NULL,
  `id_seller` int NOT NULL,
  `status` varchar(8) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id_seller` (`id_seller`),
  KEY `status` (`status`),
  CONSTRAINT `propierties_ibfk_1` FOREIGN KEY (`id_seller`) REFERENCES `sellers` (`id`),
  CONSTRAINT `propierties_ibfk_2` FOREIGN KEY (`status`) REFERENCES `prop_status` (`code`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `propierties`
--

LOCK TABLES `propierties` WRITE;
/*!40000 ALTER TABLE `propierties` DISABLE KEYS */;
INSERT INTO `propierties` VALUES (4,'Casa de lujo en el lago',11111111.00,'https://img.freepik.com/fotos-premium/casa-lujo-lago-diseno-moderno-grandes-ventanas-patio-al-aire-libre_778780-64399.jpg','Casa de lujo cerca del lago de Chapala con puerto para actividades recreativas acuaticas. Cuenta con herramienta de pesca.',3,3,2,'2024-10-15',1001,'ONSA'),(5,'Casa Terminados de Lujo',22211111.00,'https://mx.habcdn.com/photos/project/medium/interiores-con-acabados-de-lujo-en-casa-en-venta-en-fraccionamiento-arauca-residencial-zapopan-778788.jpg','Casa de lujo cerca de la ciudad con muebles de ultimo modelo y gadgets de alta tecnologia',5,4,3,'2024-10-15',1001,'ONSA'),(6,'Casa con Alberca',33311111.00,'https://mx.habcdn.com/photos/project/medium/casa-con-alberca-127741.jpg','Casa de lujo con alberca en el patio. Alta tecnologia en toda la casa con sistemas inteligentes',10,3,4,'2024-10-15',1005,'ONSA'),(7,'Casa en Villa del Real',800000.00,'https://definicion.de/wp-content/uploads/2011/01/casa-2.jpg','Casa de madera con atico. Techo de madera. Pasto en el frente de la casa y garage cerrado',5,3,2,'2024-10-23',1006,'ONSA');
/*!40000 ALTER TABLE `propierties` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sellers`
--

DROP TABLE IF EXISTS `sellers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `sellers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(32) NOT NULL,
  `email` varchar(32) NOT NULL,
  `phone` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1008 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sellers`
--

LOCK TABLES `sellers` WRITE;
/*!40000 ALTER TABLE `sellers` DISABLE KEYS */;
INSERT INTO `sellers` VALUES (1001,'Foo Bar','foo@bar.com','1234567890'),(1002,'Bar Foo','bar@foo.com','1234567890'),(1005,'Andres Cuevas','andres@cuevas.com','6641234567'),(1006,'Gustavo Tello','zorthon@gmail.com','2223334444');
/*!40000 ALTER TABLE `sellers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-31 12:49:07
