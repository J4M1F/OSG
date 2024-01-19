CREATE DATABASE  IF NOT EXISTS `osg` /*!40100 DEFAULT CHARACTER SET utf8mb3 */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `osg`;
-- MySQL dump 10.13  Distrib 8.0.34, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: osg
-- ------------------------------------------------------
-- Server version	8.0.34

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
-- Table structure for table `clientes`
--

DROP TABLE IF EXISTS `clientes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `clientes` (
  `clientes_id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pedidos_id` varchar(45) DEFAULT NULL,
  `contraseña` varchar(45) NOT NULL,
  PRIMARY KEY (`clientes_id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `clientes`
--

LOCK TABLES `clientes` WRITE;
/*!40000 ALTER TABLE `clientes` DISABLE KEYS */;
INSERT INTO `clientes` VALUES (1,'Jose','ose@gmail.com','42','12345'),(2,'miguel','miguel@gmail.com',NULL,'987456'),(3,'maria','maria@gmail.com',NULL,'uygeyg@'),(4,'alfredo','alfredo33@gmail.com',NULL,'782eyuwg#'),(5,'roberto','roberto@hotmail.com',NULL,'jnewiubw12'),(6,'alba','shipo@gmail.com',NULL,'albinator'),(7,'javier','javier54@gmail.com',NULL,'1789468'),(8,'guille','guille@gmail.com',NULL,'acabte56exwcrm'),(9,'vallejo','vallejos@gmail.com',NULL,'infubroei@'),(10,'pedro','pedro@gmail.com',NULL,'uyfit'),(12,'Julian','jujos@gmail.com',NULL,'124578139'),(17,'prueba','prueba@gmail.com',NULL,'prueba'),(18,'Alberto','alberto@gmail.com',NULL,'alberto');
/*!40000 ALTER TABLE `clientes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `detalles_pedido`
--

DROP TABLE IF EXISTS `detalles_pedido`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `detalles_pedido` (
  `pedido_id` int NOT NULL AUTO_INCREMENT,
  `productos_id` varchar(45) NOT NULL,
  `dirreccion` varchar(45) NOT NULL,
  PRIMARY KEY (`pedido_id`)
) ENGINE=InnoDB AUTO_INCREMENT=43 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `detalles_pedido`
--

LOCK TABLES `detalles_pedido` WRITE;
/*!40000 ALTER TABLE `detalles_pedido` DISABLE KEYS */;
INSERT INTO `detalles_pedido` VALUES (42,'1','calle bulgaria');
/*!40000 ALTER TABLE `detalles_pedido` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `empleados`
--

DROP TABLE IF EXISTS `empleados`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `empleados` (
  `empleados_id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `dni` varchar(9) NOT NULL,
  `fecha_contrato` varchar(10) NOT NULL,
  `departamento` varchar(45) NOT NULL,
  PRIMARY KEY (`empleados_id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `empleados`
--

LOCK TABLES `empleados` WRITE;
/*!40000 ALTER TABLE `empleados` DISABLE KEYS */;
INSERT INTO `empleados` VALUES (1,'Alberto muñoz','24754185S','20/12/25','dependiente en tienda fisica'),(2,'Marcos sanchez','27613598Y','07/04/27','dependiente en tienda fisica'),(3,'Miguel Ruiz','50343782W','04/08/24','Marketing'),(4,'David de las heras','34712869F','24/09/25','Marketing/fotografias'),(5,'Diego lopez','98756214V','27/09/30','Logistica'),(6,'Adrian domingez','14759682E','31/08/27','diseño web'),(7,'Marcos Rodrigez','98642351R','12/01/28','dependiente en tienda fisica'),(8,'Alejandro Vallejo','75846921K','24/06/25','Data Analyst');
/*!40000 ALTER TABLE `empleados` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `productos`
--

DROP TABLE IF EXISTS `productos`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `productos` (
  `producto_id` int NOT NULL AUTO_INCREMENT,
  `proveedor_id` varchar(45) NOT NULL,
  `precio` varchar(6) NOT NULL,
  `stock` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `nombre` varchar(45) NOT NULL,
  `descripcion` varchar(140) NOT NULL,
  `es_popular` tinyint(1) DEFAULT '0',
  `imagen` varchar(180) DEFAULT NULL,
  PRIMARY KEY (`producto_id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `productos`
--

LOCK TABLES `productos` WRITE;
/*!40000 ALTER TABLE `productos` DISABLE KEYS */;
INSERT INTO `productos` VALUES (1,'2','3.50','46','MTN 94','400ml de pintura en acabado mate,con 217 colores a la carta',1,'https://www.montanacolors.com/content/thumbs/1024/content/imgsxml/productos/1-mtn94288.jpg'),(2,'1','3.22','12','HARDCORE','400ml de pintura en acabado brillante,con 142 colores a la carta',NULL,'https://www.montanacolors.com/content/imgsxml/productos/1-hardcore879.jpg'),(3,'1','6.50','250','Water Based','300ml de pintura en base agua en acabado mate,con 90 colores a la carta',NULL,'https://www.montanacolors.com/content/imgsxml/productos/water697.jpg'),(4,'1','7','90','Barniz Water Based','300ml de barniz para un secado rapido de la pintura en base agua',NULL,'https://www.montanacolors.com/content/imgsxml/productos/barnizbrillo227.jpg'),(5,'1','16','175','Pack water based','Pack de 3 latas de 300ml de base agua con:una lata negra otra plata y otra blanca',NULL,'https://www.montanacolors.com/content/imgsxml/gamaproductos/wb-family349.jpg'),(6,'1','4.65','200','MEGA PLATA','600ml de pintura plata en acabado brillante',NULL,'https://www.montanacolors.com/content/imgsxml/productos/megaplata553.jpg'),(7,'1','7.30','76','MAD MAX','750ml de pintura en 8 diferentes colores con acabado brillante',1,'https://www.montanacolors.com/content/imgsxml/productos/1-madmaxxx856.jpg'),(8,'1','8','97','K-750','750ml de pintura brillante negra',NULL,'https://www.montanacolors.com/content/imgsxml/productos/krink625.jpg'),(9,'2','1.5','20','ACRILIC MARKERS 1.5 mm','rotuladores acrilicos de punta fina en varios colores',NULL,'https://www.montanacolors.com/content/imgsxml/productos/mtn-acrylic-marcador-1464.jpg'),(10,'2','3.40','15','94 grafic markers','rotulador de base alchol con una punta de 0.5mm y otra de 7mm',NULL,'https://www.montanacolors.com/content/imgsxml/productos/94gmarker511.jpg'),(11,'2','5.50','53','street daber 5mm','rotuladores de punta redonda con un diametro de 5mm,en varios colores',NULL,'https://www.montanacolors.com/content/thumbs/1024/content/imgsxml/galerias/productos/231/street-dabber30-paint851.jpg'),(12,'2','5.80','12','street daber 10 mm','rotuladores de base agua con una punta de 10mm de diametro, en varios colores',1,'https://www.montanacolors.com/content/imgsxml/productos/street-dabber-10-ink-black841.jpg'),(13,'2','6','40','street daber 15 mm','rotuladores de base agua con una punta de 15mm de diametro',NULL,'https://www.montanacolors.com/content/thumbs/1024/content/imgsxml/productos/street-p-15m-cap321.jpg'),(14,'2','1','12','Empty markers','son los rotuladores acrlilicos de 1.5mm,vacios para ser relenados',NULL,'https://www.montanacolors.com/content/imgsxml/productos/empty-1263.jpg'),(15,'2','2.50','27','Empty Daber 10 mm','daber vacios de 10mm,listos para ser recargados',NULL,'https://www.montanacolors.com/content/imgsxml/productos/empty-dabber-30764.jpg'),(16,'2','3.45','32','Empty daber 15mm','Daber de 15mm, listos para ser recargados',NULL,'https://www.montanacolors.com/content/imgsxml/productos/empty-dabber-90281.jpg'),(17,'2','7.80','34','MTN Liquid','pintura multiusos metalizada, disponible en oro, plata y bronce',NULL,'https://www.montanacolors.com/content/thumbs/1024/content/imgsxml/productos/street-p-200-ufo-green632.jpg'),(18,'2','15','9','Water Based Paint Recargas','pintura base agua disponible en 10 colores,200ml',NULL,'https://www.montanacolors.com/content/thumbs/1024/content/imgsxml/productos/waterbased-p-200-prussianblue212.jpg'),(19,'2','11.25','24','Street Paint Recargas','recargas para el daber de base disolvente 200ml, disponible en 10 colores',NULL,'https://www.montanacolors.com/content/imgsxml/productos/street-ink-red364.jpg'),(20,'2','14.99','45','MTN STREET INK','recargas  para daber con base alchol en 10 distintos colores,200ml',NULL,'https://www.montanacolors.com/content/imgsxml/productos/liquidgroup391.jpg'),(21,'2','0.75','76','Puntas Para Markers','puntas limpias de 1.5 mm para reutilizar markers',NULL,'https://www.montanacolors.com/content/imgsxml/productos/puntawb-extrafine-1849.jpg'),(22,'2','1','92','Puntas Para Daber','puntas limpias de 5 mm para la reutilizacion del daber',NULL,'https://www.montanacolors.com/content/imgsxml/productos/30324.jpg'),(23,'2','1.20','72','Puntas Para Daber 10mm','puntas limpias de 10 mm para la reutilizacion del daber',NULL,'https://www.montanacolors.com/content/imgsxml/productos/90767.jpg'),(24,'2','1.50','24','Puntas Para Daber 15mm','puntas limpias de 15 mm para la reutilizacion del daber',NULL,'https://www.montanacolors.com/content/thumbs/1024/content/imgsxml/productos/punta-15mm-acrylic-marcador601.jpg'),(25,'2','1.60','41','Puntas 94 Grafic Markers','puntas limpias para el 94 marker grafic es decir dos puntas una de 0.5mm y otra de 7mm',NULL,'https://www.montanacolors.com/content/imgsxml/productos/graphicmarkerfinetip244.jpg'),(26,'1','22.60','3','Astro Fat Cap cubo de 120 unidades','cubo con 120 boquillas Astro Fat Cap',NULL,'https://www.montanacolors.com/content/imgsxml/gamaproductos/caps-individuales2copia278.jpg'),(27,'1','33.60','2','Hardcore Fat Cap 120 unidades','cubo con 120 boquillas del tipo Hardcore Fat Cap',NULL,'https://www.montanacolors.com/content/imgsxml/productos/hc-medium-cap-120905.jpg'),(28,'3','9.20','74','Tren MTN Systems NYC Redbird','Maqueta de los vagones en NY, preparada para ser pintada ',0,'https://www.montanacolors.com/content/imgsxml/productos/nyredbirdcmyk195.jpg'),(29,'2','5.25','51','Libro de marcadores MTN A4','Cuaderno de bocetos de tamaño A4 que contiene tres tipos de papel diferentes.',0,'https://www.montanacolors.com/content/thumbs/1024/content/imgsxml/productos/markerbooka4643.jpg'),(30,'3','39.99','12','Cinturón de herramientas MTN','Cinturón de herramientas con capacidad para 4 botes de spray.',0,'https://www.montanacolors.com/content/thumbs/1024/content/imgsxml/productos/mtncinturn4lo843.jpg'),(31,'3','29.99','24','Guantes de nitrilo MTN','Caja de 100 unidades de guantes desechables de alta calidad.',0,'https://www.montanacolors.com/content/thumbs/1024/content/imgsxml/productos/guantes-nitrilo2189.jpg');
/*!40000 ALTER TABLE `productos` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `proveedor`
--

DROP TABLE IF EXISTS `proveedor`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `proveedor` (
  `proveedor_id` int NOT NULL AUTO_INCREMENT,
  `nombre` varchar(45) NOT NULL,
  `dirección` varchar(70) NOT NULL,
  `productos_id` varchar(45) NOT NULL,
  PRIMARY KEY (`proveedor_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `proveedor`
--

LOCK TABLES `proveedor` WRITE;
/*!40000 ALTER TABLE `proveedor` DISABLE KEYS */;
INSERT INTO `proveedor` VALUES (1,'Montana Colors','C. del Caballero de garcia 9 28013','1-8,26-27'),(2,'Grafic Markers','C.bulgaria 12 28939','9-25');
/*!40000 ALTER TABLE `proveedor` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-01-19 19:22:39
