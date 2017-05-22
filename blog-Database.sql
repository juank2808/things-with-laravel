-- MySQL dump 10.13  Distrib 5.5.53, for debian-linux-gnu (x86_64)
--
-- Host: 0.0.0.0    Database: blog
-- ------------------------------------------------------
-- Server version	5.5.53-0ubuntu0.14.04.1

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
-- Table structure for table `article_tag`
--

DROP TABLE IF EXISTS `article_tag`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `article_tag` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `article_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `article_tag_article_id_foreign` (`article_id`),
  KEY `article_tag_tag_id_foreign` (`tag_id`),
  CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`),
  CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `article_tag`
--

LOCK TABLES `article_tag` WRITE;
/*!40000 ALTER TABLE `article_tag` DISABLE KEYS */;
/*!40000 ALTER TABLE `article_tag` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `articles`
--

DROP TABLE IF EXISTS `articles`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `articles_user_id_foreign` (`user_id`),
  KEY `articles_category_id_foreign` (`category_id`),
  CONSTRAINT `articles_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  CONSTRAINT `articles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `articles`
--

LOCK TABLES `articles` WRITE;
/*!40000 ALTER TABLE `articles` DISABLE KEYS */;
INSERT INTO `articles` VALUES (7,'Amo esto','<h1>Hola</h1>\r\n<p>Yo amo esto</p>',2,2,'2017-05-16 07:31:13','2017-05-16 07:31:13'),(8,'Cagate lorito','<p>Ola ke ase</p>',2,4,'2017-05-16 08:44:56','2017-05-16 08:44:56'),(9,'Laravel','<h2>Laravel</h2>\r\n<p>Este blog informativo / de entretenimiento esta hecho con laravel</p>',1,5,'2017-05-18 10:16:31','2017-05-18 10:16:31'),(10,'Experimentos','<p><strong>Hago experimentos&nbsp;</strong> con dise&ntilde;o web&nbsp;</p>',1,4,'2017-05-19 09:31:11','2017-05-19 09:31:11');
/*!40000 ALTER TABLE `articles` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(60) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'PHP7','2017-05-11 07:31:19','2017-05-11 07:31:19'),(2,'Node.js','2017-05-11 07:31:26','2017-05-11 07:31:26'),(3,'Android','2017-05-11 07:31:41','2017-05-11 07:31:41'),(4,'Programación','2017-05-12 12:21:53','2017-05-12 12:21:53'),(5,'Laravel','2017-05-18 10:14:06','2017-05-18 10:14:06'),(6,'Angular','2017-05-19 11:36:54','2017-05-19 11:36:54');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `images`
--

DROP TABLE IF EXISTS `images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `images_article_id_foreign` (`article_id`),
  CONSTRAINT `images_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `images`
--

LOCK TABLES `images` WRITE;
/*!40000 ALTER TABLE `images` DISABLE KEYS */;
INSERT INTO `images` VALUES (8,'BlogTeach_1494919873.jpg',7,'2017-05-16 07:31:13','2017-05-16 07:31:13'),(9,'BlogTeach_1494924296.jpg',8,'2017-05-16 08:44:56','2017-05-16 08:44:56'),(10,'BlogTeach_1495102591.jpg',9,'2017-05-18 10:16:31','2017-05-18 10:16:31'),(11,'BlogTeach_1495186271.jpg',10,'2017-05-19 09:31:11','2017-05-19 09:31:11');
/*!40000 ALTER TABLE `images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES (1,'2014_10_12_000000_create_users_table',1),(2,'2014_10_12_100000_create_password_resets_table',1),(3,'2017_01_22_142037_add_categories_table',1),(4,'2017_01_22_144006_add_articles_table',1),(5,'2017_01_22_145005_add_images_table',1),(6,'2017_01_22_145600_add_tags_table',1);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
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
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags`
--

LOCK TABLES `tags` WRITE;
/*!40000 ALTER TABLE `tags` DISABLE KEYS */;
INSERT INTO `tags` VALUES (1,'Juan','2017-05-11 07:31:51','2017-05-11 07:31:51'),(2,'Making','2017-05-11 07:31:58','2017-05-11 07:31:58'),(3,'Pruebas','2017-05-11 10:52:29','2017-05-11 10:52:29'),(4,'no coje los tags','2017-05-12 07:36:01','2017-05-12 07:36:01'),(5,'Programación','2017-05-12 12:22:10','2017-05-12 12:22:10'),(6,'Laravel','2017-05-18 10:17:44','2017-05-18 10:17:53'),(7,'PHP','2017-05-22 09:29:58','2017-05-22 09:29:58');
/*!40000 ALTER TABLE `tags` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('member','admin') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'member',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Camilo','prueba@quefuncione.com','$2y$10$uWaGwUtpR2v2aA1RZbxda.Fge9Y.FOWDY/hVRgmgumm./fWayEXJC','admin','hQXMizfpOrFzeDECgdBndDKrjyCaFxrm0k2MtazYFBDx8cvDFygN1CcwpLXA','2017-05-11 07:30:43','2017-05-11 07:30:43'),(2,'Rosendo','Rosendoslacontra@gmail.com','$2y$10$Jd6R6b/DP/YXm/oI7ViOF.LUjnOrFD/vGlxzwXSzEN0WQUthK2C0C','member','1Fu7vsrZabkYINrowxKflQ9G7zuwHUZPGOMmFURub1fTtv8ogPpATAsPQq2t','2017-05-12 12:00:11','2017-05-12 12:00:11'),(3,'Sra.maider','maider@maider.com','$2y$10$2o5RQrG3VS/xe1Nr6jDTx.56TV8UhE4dSExGCV96g.lfR3BJ5cnqi','member','EKQCXR5RMjhdrB9bkh5T7WicFqo1UKDuu1aOMxrFTi77nnfxw0LX8HQosNZg','2017-05-16 09:38:39','2017-05-16 09:38:39'),(4,'Prueba seed','seeder@prueba.com','$2y$10$IFZntZFPw50F4ijSRj6dROaThkA3iurieMra3TVzQeaqMtvOy9a.y','admin',NULL,NULL,'2017-05-17 09:00:03'),(5,'Deven Schuppe','johan83@hotmail.com','$2y$10$JGxrwmjvKapduUGDwhZ7Y.hy7mvg3my0fxDBbaaVAh2Y5y0OOTpJG','member',NULL,'2017-05-17 09:09:31','2017-05-17 09:09:31'),(6,'Francesco Kihn','nitzsche.cristopher@yahoo.com','$2y$10$jlSuTKT.Xm/iGMpPWPpZMucwAT2a5eulRRh2YI/aWPQ30lPJkoK5C','member',NULL,'2017-05-17 09:09:31','2017-05-17 09:09:31'),(7,'Holly Lowe','eileen97@gmail.com','$2y$10$GEed9Uu0Q1wpI0uuie5qQe/hfXZHXPB3V1k0Pj9/.JdL.Gc6EuU3y','member',NULL,'2017-05-17 09:09:31','2017-05-17 09:09:31'),(8,'Leonora Senger IV','thiel.kassandra@gmail.com','$2y$10$AndyrnmwaVYJpUVpjOdZ1OJX7rc0IGkvArk0mnHDGmdmzXPWh3FOe','member',NULL,'2017-05-17 09:09:31','2017-05-17 09:09:31'),(9,'Carole Jacobs III','gottlieb.mariane@swift.com','$2y$10$yC3DIe4XnMn9cv5HW5Dcme22lrR2SxXSCTbcyckFufhlPFi2NQ6d2','member',NULL,'2017-05-17 09:09:31','2017-05-17 09:09:31');
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

-- Dump completed on 2017-05-22 11:03:54
