-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: curso_24
-- ------------------------------------------------------
-- Server version	5.5.5-10.6.16-MariaDB-0ubuntu0.22.04.1

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
-- Table structure for table `Endereco`
--

DROP TABLE IF EXISTS `Endereco`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Endereco` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `rua` varchar(512) NOT NULL,
  `bairro` varchar(100) NOT NULL,
  `numero` varchar(100) DEFAULT NULL,
  `cep` varchar(10) NOT NULL,
  `complemento` varchar(512) DEFAULT NULL,
  `cidade` varchar(512) NOT NULL,
  `estado` varchar(100) NOT NULL,
  `id_pessoa` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Endereco_Pessoa_FK` (`id_pessoa`),
  CONSTRAINT `Endereco_Pessoa_FK` FOREIGN KEY (`id_pessoa`) REFERENCES `Pessoa` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Endereco`
--

LOCK TABLES `Endereco` WRITE;
/*!40000 ALTER TABLE `Endereco` DISABLE KEYS */;
INSERT INTO `Endereco` VALUES (1,'João Antônio Ferronato','Progresso','49','99530130','203','Bento Gonçalves','RS',1);
/*!40000 ALTER TABLE `Endereco` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Pessoa`
--

DROP TABLE IF EXISTS `Pessoa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Pessoa` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `excluido` tinyint(1) NOT NULL DEFAULT 0,
  `usuario_alteracao` varchar(100) NOT NULL DEFAULT '',
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` datetime NOT NULL DEFAULT '0001-01-01 00:00:00' ON UPDATE current_timestamp(),
  `nome` varchar(500) NOT NULL,
  `sobrenome` varchar(500) NOT NULL,
  `nome_completo` varchar(1000) NOT NULL,
  `sexo` enum('M','F') NOT NULL DEFAULT 'F',
  `email` varchar(255) NOT NULL,
  `cpf` varchar(11) DEFAULT NULL,
  `cnpj` varchar(14) DEFAULT NULL,
  `tipo_pessoa` enum('F','J') NOT NULL,
  `estado_civil` enum('SOLTEIRO','UNIAO ESTAVEL','CASADO','VIUVO') NOT NULL,
  `data_nascimento` datetime NOT NULL,
  `id_usuario` smallint(6) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `Pessoa_Usuario_FK` (`id_usuario`),
  CONSTRAINT `Pessoa_Usuario_FK` FOREIGN KEY (`id_usuario`) REFERENCES `Usuario` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Pessoa`
--

LOCK TABLES `Pessoa` WRITE;
/*!40000 ALTER TABLE `Pessoa` DISABLE KEYS */;
INSERT INTO `Pessoa` VALUES (1,0,'','2024-10-01 20:28:05','2024-10-01 21:01:00','Stephany','Silva','Stephany Silva Ribeiro','F','stephany_silva2000@outlook.com','50325675821',NULL,'F','UNIAO ESTAVEL','2000-12-05 00:00:00',1),(2,0,'','2024-10-01 20:51:40','2024-10-01 20:52:34','Luciana','Rezende','Luciana Rita Silvana Rezende','F','luciana-rezende70@2emesconstrutora.com.br','85994499072',NULL,'F','SOLTEIRO','1999-09-05 00:00:00',3),(3,0,'','2024-10-01 20:28:05','0001-01-01 00:00:00','Cauê','Santos','Cauê Renato Santos','M','caue_santos@azulcargo.com.br','95653982008',NULL,'F','CASADO','2004-03-08 00:00:00',2);
/*!40000 ALTER TABLE `Pessoa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `Usuario`
--

DROP TABLE IF EXISTS `Usuario`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `Usuario` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `cpf` varchar(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` text NOT NULL,
  `excluido` tinyint(1) NOT NULL DEFAULT 0,
  `usuario_alteracao` varchar(100) NOT NULL DEFAULT '',
  `data_criacao` datetime NOT NULL DEFAULT current_timestamp(),
  `data_atualizacao` datetime NOT NULL DEFAULT '0001-01-01 00:00:00' ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `Usuario`
--

LOCK TABLES `Usuario` WRITE;
/*!40000 ALTER TABLE `Usuario` DISABLE KEYS */;
INSERT INTO `Usuario` VALUES (1,'50325675821','stephany_silva2000@outlook.com','1234',0,'','2024-09-24 20:42:15','0001-01-01 00:00:00'),(2,'95653982008','caue_santos@azulcargo.com.br','1234',0,'','2024-10-01 20:25:23','0001-01-01 00:00:00'),(3,'85994499072','luciana-rezende70@2emesconstrutora.com.br','1234',0,'','2024-10-01 20:36:47','2024-10-01 20:49:13');
/*!40000 ALTER TABLE `Usuario` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'curso_24'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-10-01 21:37:43
