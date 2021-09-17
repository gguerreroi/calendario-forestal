-- MySQL dump 10.13  Distrib 5.7.29, for Linux (x86_64)
--
-- Host: localhost    Database: inab_calforestal
-- ------------------------------------------------------
-- Server version	5.7.29-0ubuntu0.18.04.1

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
-- Table structure for table `tbActividades`
--

DROP TABLE IF EXISTS `tbActividades`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbActividades` (
  `idActividades` int(11) NOT NULL AUTO_INCREMENT,
  `actividad` varchar(120) NOT NULL,
  `descripcion` varchar(800) DEFAULT NULL,
  `imagen1` varchar(60) DEFAULT NULL,
  `imagen2` varchar(60) DEFAULT NULL,
  `imagen3` varchar(60) DEFAULT NULL,
  `imagen4` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`idActividades`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tbActividadesPadre`
--

DROP TABLE IF EXISTS `tbActividadesPadre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbActividadesPadre` (
  `idActividadesPadre` int(11) NOT NULL AUTO_INCREMENT,
  `Nombre_Padre` varchar(100) NOT NULL,
  `Color` varchar(9) NOT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  `ColorPastel` varchar(9) DEFAULT NULL,
  PRIMARY KEY (`idActividadesPadre`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tbArbol`
--

DROP TABLE IF EXISTS `tbArbol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbArbol` (
  `idArbol` int(11) NOT NULL AUTO_INCREMENT,
  `cicloarbol` varchar(35) NOT NULL,
  PRIMARY KEY (`idArbol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tbCambioSol`
--

DROP TABLE IF EXISTS `tbCambioSol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbCambioSol` (
  `idCambioSol` int(11) NOT NULL AUTO_INCREMENT,
  `idArbol` int(11) NOT NULL,
  `cambio` varchar(55) NOT NULL,
  `inicio` varchar(11) NOT NULL,
  `final` varchar(11) NOT NULL,
  PRIMARY KEY (`idCambioSol`),
  KEY `fk_sol_arbol_idx` (`idArbol`),
  CONSTRAINT `fk_sol_arbol` FOREIGN KEY (`idArbol`) REFERENCES `tbArbol` (`idArbol`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tbCuatrimestre`
--

DROP TABLE IF EXISTS `tbCuatrimestre`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbCuatrimestre` (
  `idCuatrimestre` int(11) NOT NULL AUTO_INCREMENT,
  `cuatrimestre` varchar(25) NOT NULL,
  PRIMARY KEY (`idCuatrimestre`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tbEpoca`
--

DROP TABLE IF EXISTS `tbEpoca`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbEpoca` (
  `idEpoca` int(11) NOT NULL AUTO_INCREMENT,
  `epoca` varchar(8) NOT NULL,
  PRIMARY KEY (`idEpoca`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tbFaseLunar`
--

DROP TABLE IF EXISTS `tbFaseLunar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbFaseLunar` (
  `idFaseLunar` int(11) NOT NULL AUTO_INCREMENT,
  `FaseLuna` varchar(20) NOT NULL,
  `rutaimagen` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idFaseLunar`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tbFechasLuna`
--

DROP TABLE IF EXISTS `tbFechasLuna`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbFechasLuna` (
  `idFechasLuna` int(11) NOT NULL AUTO_INCREMENT,
  `idFaseLunar` int(11) NOT NULL,
  `idCambioSol` int(11) NOT NULL,
  `idMes` int(11) NOT NULL,
  `fecha` date NOT NULL,
  `anio` int(11) DEFAULT NULL,
  PRIMARY KEY (`idFechasLuna`),
  KEY `fk_fechas_fase_idx` (`idFaseLunar`),
  KEY `fk_Fechas_CmabioSol_idx` (`idCambioSol`),
  KEY `fk_fechas_mes_idx` (`idMes`),
  CONSTRAINT `fk_Fechas_CmabioSol` FOREIGN KEY (`idCambioSol`) REFERENCES `tbCambioSol` (`idCambioSol`),
  CONSTRAINT `fk_fechas_fase` FOREIGN KEY (`idFaseLunar`) REFERENCES `tbFaseLunar` (`idFaseLunar`),
  CONSTRAINT `fk_fechas_mes` FOREIGN KEY (`idMes`) REFERENCES `tbMes` (`idMes`)
) ENGINE=InnoDB AUTO_INCREMENT=694 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tbHijo`
--

DROP TABLE IF EXISTS `tbHijo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbHijo` (
  `idHijo` int(11) NOT NULL AUTO_INCREMENT,
  `idFasesLunar` int(11) NOT NULL,
  `idMes` int(11) NOT NULL,
  `idActividadesPadre` int(11) NOT NULL,
  `idActividades` int(11) NOT NULL,
  PRIMARY KEY (`idHijo`),
  KEY `fk_hijo_padre_idx` (`idActividadesPadre`),
  KEY `fk_hijo_actividad_idx` (`idActividades`),
  KEY `fk_hijo_mes_idx` (`idMes`),
  KEY `fk_hijo_fechas_idx` (`idFasesLunar`),
  CONSTRAINT `fk_hijo_actividad` FOREIGN KEY (`idActividades`) REFERENCES `tbActividades` (`idActividades`),
  CONSTRAINT `fk_hijo_fases` FOREIGN KEY (`idFasesLunar`) REFERENCES `tbFaseLunar` (`idFaseLunar`),
  CONSTRAINT `fk_hijo_mes` FOREIGN KEY (`idMes`) REFERENCES `tbMes` (`idMes`),
  CONSTRAINT `fk_hijo_padre` FOREIGN KEY (`idActividadesPadre`) REFERENCES `tbActividadesPadre` (`idActividadesPadre`)
) ENGINE=InnoDB AUTO_INCREMENT=238 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tbMes`
--

DROP TABLE IF EXISTS `tbMes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbMes` (
  `idMes` int(11) NOT NULL AUTO_INCREMENT,
  `idTiempo` int(11) NOT NULL,
  `idEpoca` int(11) NOT NULL,
  `idCuatrimestre` int(11) NOT NULL,
  `mes` varchar(12) NOT NULL,
  `imagen` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idMes`),
  KEY `fk_mes_tiempo_idx` (`idTiempo`),
  KEY `fk_mes_epoca_idx` (`idEpoca`),
  KEY `fk_mes_cuatri_idx` (`idCuatrimestre`),
  CONSTRAINT `fk_mes_cuatri` FOREIGN KEY (`idCuatrimestre`) REFERENCES `tbCuatrimestre` (`idCuatrimestre`),
  CONSTRAINT `fk_mes_epoca` FOREIGN KEY (`idEpoca`) REFERENCES `tbEpoca` (`idEpoca`),
  CONSTRAINT `fk_mes_tiempo` FOREIGN KEY (`idTiempo`) REFERENCES `tbTiempo` (`idTiempo`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tbRol`
--

DROP TABLE IF EXISTS `tbRol`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbRol` (
  `idRol` int(11) NOT NULL AUTO_INCREMENT,
  `rol` varchar(15) NOT NULL,
  PRIMARY KEY (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tbTiempo`
--

DROP TABLE IF EXISTS `tbTiempo`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbTiempo` (
  `idTiempo` int(11) NOT NULL AUTO_INCREMENT,
  `tiempo` varchar(13) NOT NULL,
  PRIMARY KEY (`idTiempo`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Table structure for table `tbUsuario`
--

DROP TABLE IF EXISTS `tbUsuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbUsuario` (
  `idUsu` int(11) NOT NULL AUTO_INCREMENT,
  `idRol` int(11) NOT NULL,
  `Nombre` varchar(60) NOT NULL,
  `Apellido` varchar(60) NOT NULL,
  `Correo` varchar(100) NOT NULL,
  `Pass` varchar(250) NOT NULL,
  PRIMARY KEY (`idUsu`),
  KEY `fk_usuario_rol_idx` (`idRol`),
  CONSTRAINT `tbUsuario_ibfk_1` FOREIGN KEY (`idRol`) REFERENCES `tbRol` (`idRol`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping routines for database 'inab_calforestal'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2020-10-19  3:43:06
