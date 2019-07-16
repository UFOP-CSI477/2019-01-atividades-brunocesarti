-- MySQL dump 10.13  Distrib 5.7.26, for Linux (x86_64)
--
-- Host: 127.0.0.1    Database: prova1financeiro
-- ------------------------------------------------------
-- Server version	5.7.26-0ubuntu0.16.04.1

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `clientes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Bruno','2019-07-15 21:16:47','2019-07-15 21:16:47'),(2,'Julio','2019-07-15 23:00:05','2019-07-15 23:00:05'),(3,'Jose','2019-07-15 23:01:25','2019-07-15 23:01:25'),(4,'Juquinha','2019-07-16 02:06:46','2019-07-16 02:06:46'),(5,'Chico','2019-07-16 02:08:12','2019-07-16 02:08:12'),(6,'Joãozinho','2019-07-16 02:46:13','2019-07-16 02:46:13'),(7,'Miguel','2019-07-16 02:53:27','2019-07-16 02:53:27'),(8,'Juliano','2019-07-16 02:56:14','2019-07-16 02:56:14'),(9,'Agnaldo','2019-07-16 03:13:06','2019-07-16 03:13:06'),(10,'Batman','2019-07-16 03:17:12','2019-07-16 03:17:12'),(11,'Carlos','2019-07-16 03:18:43','2019-07-16 03:18:43');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2019_07_12_1_create_clientes_table',1),(4,'2019_07_12_2_create_tipos_table',1),(5,'2019_07_12_3_create_trans_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tipos`
--

DROP TABLE IF EXISTS `tipos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tipos` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tipos`
--

LOCK TABLES `tipos` WRITE;
/*!40000 ALTER TABLE `tipos` DISABLE KEYS */;
INSERT INTO `tipos` VALUES (1,'Compra','2019-07-15 21:16:40','2019-07-15 21:16:40'),(2,'Venda','2019-07-15 22:58:35','2019-07-15 22:58:35'),(3,'Transferencia','2019-07-15 22:58:45','2019-07-15 22:58:45'),(4,'Deposito','2019-07-15 22:58:55','2019-07-15 22:58:55'),(5,'Pagamento Boleto','2019-07-15 22:59:08','2019-07-15 22:59:08'),(6,'Pagamento Cheque','2019-07-15 22:59:18','2019-07-15 22:59:18'),(7,'Pagamento Cheque Especial','2019-07-15 22:59:30','2019-07-15 22:59:30'),(8,'Pagamento Cartao Credito','2019-07-15 22:59:43','2019-07-15 22:59:43'),(9,'Pagamento Cartao Debito','2019-07-15 22:59:51','2019-07-15 22:59:51'),(10,'Câmbio','2019-07-16 01:57:13','2019-07-16 01:57:13'),(11,'Transferencia Internacional','2019-07-16 02:06:20','2019-07-16 02:06:20'),(12,'Migração bancaria','2019-07-16 02:07:31','2019-07-16 02:07:31'),(13,'Aplicação','2019-07-16 02:45:55','2019-07-16 02:45:55'),(14,'Consorcio Normal','2019-07-16 02:52:35','2019-07-16 02:52:35'),(15,'Consorcio Consignado','2019-07-16 02:52:55','2019-07-16 02:52:55'),(16,'Migracao Internacional','2019-07-16 02:56:00','2019-07-16 02:56:00'),(17,'Trasnporte Malote Aplicado','2019-07-16 02:56:37','2019-07-16 02:56:37'),(18,'Transferencia Comercial','2019-07-16 02:57:21','2019-07-16 02:57:21'),(19,'Financeiro Variavel','2019-07-16 03:16:51','2019-07-16 03:16:51'),(20,'Taixa Tributaria','2019-07-16 03:19:11','2019-07-16 03:19:11');
/*!40000 ALTER TABLE `tipos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `trans`
--

DROP TABLE IF EXISTS `trans`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `trans` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `cliente_id` int(10) unsigned NOT NULL,
  `tipo_id` int(10) unsigned NOT NULL,
  `data` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` decimal(10,2) NOT NULL,
  `credito` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `trans_cliente_id_foreign` (`cliente_id`),
  KEY `trans_tipo_id_foreign` (`tipo_id`),
  CONSTRAINT `trans_cliente_id_foreign` FOREIGN KEY (`cliente_id`) REFERENCES `clientes` (`id`),
  CONSTRAINT `trans_tipo_id_foreign` FOREIGN KEY (`tipo_id`) REFERENCES `tipos` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `trans`
--

LOCK TABLES `trans` WRITE;
/*!40000 ALTER TABLE `trans` DISABLE KEYS */;
INSERT INTO `trans` VALUES (1,2,5,'01/03/2019',300.00,0,'2019-07-15 23:00:36','2019-07-15 23:00:36'),(2,1,6,'10/03/2019',200.00,1,'2019-07-15 23:01:06','2019-07-15 23:01:06'),(3,3,9,'11/03/2019',500.00,0,'2019-07-15 23:01:53','2019-07-15 23:01:53'),(4,1,7,'15/06/2019',350.00,0,'2019-07-16 01:45:27','2019-07-16 01:45:27'),(5,4,11,'21//06/2019',506.00,1,'2019-07-16 02:08:01','2019-07-16 02:08:01'),(6,1,13,'13/07/2019',120.00,1,'2019-07-16 02:52:08','2019-07-16 02:52:08'),(7,7,14,'10/03/2019',280.00,0,'2019-07-16 02:53:49','2019-07-16 02:53:49'),(8,5,4,'10/03/2019',140.00,0,'2019-07-16 02:55:29','2019-07-16 02:55:29'),(9,8,15,'01/06/2019',650.00,0,'2019-07-16 02:57:40','2019-07-16 02:57:40'),(10,4,12,'10/05/2019',560.00,0,'2019-07-16 02:58:15','2019-07-16 02:58:15'),(11,3,14,'10/07/2019',365.00,0,'2019-07-16 02:59:08','2019-07-16 02:59:08'),(12,9,13,'10/03/2019',124.00,0,'2019-07-16 03:15:14','2019-07-16 03:15:14'),(13,11,17,'10/04/2019',546.00,1,'2019-07-16 03:19:41','2019-07-16 03:19:41'),(14,10,13,'10/03/2019',250.00,1,'2019-07-16 03:41:23','2019-07-16 03:41:23'),(15,4,16,'15/04/2019',865.00,0,'2019-07-16 03:42:41','2019-07-16 03:42:41'),(16,7,2,'10/02/2019',200.00,1,'2019-07-16 03:43:16','2019-07-16 03:43:16'),(17,6,13,'10/03/2019',52.00,1,'2019-07-16 04:02:33','2019-07-16 04:02:33');
/*!40000 ALTER TABLE `trans` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `type` tinyint(4) NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,1,'Bruno Cesar','brunocesarmg@gmail.com',NULL,'$2y$10$V7/LYwoZAj7ej5t8o7lDS.wou3JZJBnSqfiUp7lwS1wIdbgYfDBha',NULL,'2019-07-15 21:16:02','2019-07-15 21:16:02'),(2,2,'joao','joao@gmail.com',NULL,'$2y$10$Er0qpbunet2Aqswlax1vIuJnEYZdPYskCe85Hi8q6Yarmdif0ihKW',NULL,'2019-07-15 22:45:31','2019-07-15 22:45:31');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2019-07-15 22:05:53
