-- MySQL dump 10.13  Distrib 8.0.19, for macos10.15 (x86_64)
--
-- Host: localhost    Database: FILMS
-- ------------------------------------------------------
-- Server version	5.7.25

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `acteur`
--

DROP TABLE IF EXISTS `acteur`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `acteur` (
  `idActeur` int(3) NOT NULL,
  `nom` varchar(45) NOT NULL,
  `prenom` varchar(45) NOT NULL,
  PRIMARY KEY (`idActeur`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `acteur`
--

LOCK TABLES `acteur` WRITE;
/*!40000 ALTER TABLE `acteur` DISABLE KEYS */;
INSERT INTO `acteur` VALUES (1,'Johnny','Deep'),(2,'Al','Pacino'),(3,'Suraj','Sharma'),(4,'Brad','Pitt'),(5,'Edward','Norton'),(6,'D\'artagnan','Edourd');
/*!40000 ALTER TABLE `acteur` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `film`
--

DROP TABLE IF EXISTS `film`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `film` (
  `idFilm` int(3) NOT NULL,
  `titre` varchar(85) NOT NULL,
  `realisateur` varchar(45) NOT NULL,
  `annee` date NOT NULL,
  PRIMARY KEY (`idFilm`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `film`
--

LOCK TABLES `film` WRITE;
/*!40000 ALTER TABLE `film` DISABLE KEYS */;
INSERT INTO `film` VALUES (1,'Les évadés','Darabont','1994-00-00'),(2,'Le parrain','Coppola','1972-00-00'),(3,'Le parrain 2','Coppola','1974-00-00'),(4,'L\'odyssée de Pi','Ang Lee','2013-00-00'),(5,'Chocolat','Hallstrom','2000-00-00'),(6,'Scarface','De Palma','1983-00-00'),(7,'Rango','Verbinski','2011-00-00');
/*!40000 ALTER TABLE `film` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `filmographie`
--

DROP TABLE IF EXISTS `filmographie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `filmographie` (
  `idActeur` int(3) NOT NULL,
  `idFilm` int(3) NOT NULL,
  `role` varchar(85) NOT NULL,
  `salaire` decimal(8,2) NOT NULL,
  PRIMARY KEY (`idActeur`,`idFilm`),
  KEY `id_idx` (`idFilm`),
  CONSTRAINT `FKAuteur` FOREIGN KEY (`idActeur`) REFERENCES `acteur` (`idActeur`) ON DELETE CASCADE ON UPDATE NO ACTION,
  CONSTRAINT `id` FOREIGN KEY (`idFilm`) REFERENCES `film` (`idFilm`) ON DELETE CASCADE ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `filmographie`
--

LOCK TABLES `filmographie` WRITE;
/*!40000 ALTER TABLE `filmographie` DISABLE KEYS */;
INSERT INTO `filmographie` VALUES (1,5,'Roux',5000.00),(1,7,'Rango',10000.00),(2,2,'Michael Corleone',10000.00),(2,3,'Michael Corleone',20000.00),(2,6,'Tony Montana',15000.00),(3,4,'Pi',20000.00);
/*!40000 ALTER TABLE `filmographie` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-05 19:00:51
