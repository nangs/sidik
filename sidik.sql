-- MySQL dump 10.13  Distrib 5.6.27, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: sekolah
-- ------------------------------------------------------
-- Server version	5.6.27-0ubuntu1

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
-- Table structure for table `alamat_calon_siswa`
--

DROP TABLE IF EXISTS `alamat_calon_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `alamat_calon_siswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calon_siswa_id` int(10) unsigned NOT NULL,
  `jenis_tinggal` tinyint(1) NOT NULL,
  `alamat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rt` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `rw` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `kelurahan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `kecamatan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `provinsi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telepon_rumah` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `jarak_tempat_tinggal_ke_sekolah` smallint(5) unsigned NOT NULL,
  `alat_transportasi_ke_sekolah` smallint(5) unsigned NOT NULL,
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alamat_calon_siswa`
--

LOCK TABLES `alamat_calon_siswa` WRITE;
/*!40000 ALTER TABLE `alamat_calon_siswa` DISABLE KEYS */;
INSERT INTO `alamat_calon_siswa` VALUES (1,6,1,'jakarta','006','009','67565','jakarta','jakarta','jnfckwjfw','fwefewf','fwefewf','ewfwef',1,1,'','2015-12-10 10:45:27','2015-12-10 13:43:10'),(4,9,1,'kljdhwge','jgh','ghf','ghfhg','ghfghf','fghfgh','fghf','hgf','ghf','ghf',1,1,'dd@fggh.com','2015-12-10 23:08:12','2015-12-11 06:26:24'),(7,12,1,'wdwfq','dqw','fqw','fqwfw','fqwfq','fwqfwqf','qwfwqf','fqwfqw','qwfqwf','fwqfqwf',0,3,'','2015-12-11 07:22:02','2015-12-11 07:28:16'),(8,13,1,'fwefwe','few','fqe','fewfw','ewfwef','fwefwe','fwefew','fwefw','fwefwe','fwefwe',1,2,'','2015-12-11 07:37:20','2015-12-11 09:37:53'),(9,14,1,'dgfrb','1','2','gr','vgfrtg','frf','frdef','grg','12568','0853789444',457,99,'shfvbfj@yahoo.com','2015-12-11 13:28:10','2015-12-11 13:35:19'),(10,15,1,'kandri','01','01','50111','kandri','Gunungati','semarang','jawa tengah','767866767','6567567',1,2,'bagas@gmail.com','2015-12-11 23:37:07','2015-12-11 23:39:38'),(11,16,1,'fbdfbdfb','001','002','78567','njbn je','nbjbjhbj','jkhbkbj','jhbjhb','jhbjhb','hbjhb',0,0,'','2015-12-16 01:33:29','2015-12-16 01:33:29'),(13,18,1,'fbdfbdfb','001','002','78567','njbn je','nbjbjhbj','jkhbkbj','jhbjhb','jhbjhb','hbjhb',0,0,'','2015-12-16 01:35:00','2015-12-16 01:35:00'),(14,19,1,'cewgerg','009','008','hbhjb','jhbjkhbk','jhbhjb','hjbhjb','jhbjhb','jhbjhb','jhbjhb',0,0,'','2015-12-16 02:57:01','2015-12-16 02:57:01'),(15,20,1,'dwegfuw','fhw','dge','dwefw','duygewfu','dquyfgeug','fewfew','fwefw','fwefw','fwefw',0,0,'','2015-12-16 03:07:11','2015-12-16 03:07:11'),(16,21,1,'jkjgj','jkh','jhj','kjhjk','kjhjkh','jkhjkh','jkhkjh','jkhkjh','kjhkjh','kjhkj',1,1,'fwefwe@fwefw.com','2015-12-16 03:14:52','2015-12-16 03:23:25'),(17,33,1,'grgr','gtr','hrt','hrthr','hrthtr','hrth','hrthtr','hrt','hrth','hrth',2,7,'grg@freg.com','2015-12-18 04:42:22','2015-12-18 04:42:22'),(18,35,1,'tmg','2','3','56261','tbr','tbr','tmg','Jawa Tengah','456123','085123456',200,1,'','2016-01-03 11:06:32','2016-01-03 11:09:46'),(19,36,1,'fwefwe','few','fwe','fwefe','fwef','ftyf','fwef','Jawa Barat','fwefwe','fewfew',10,2,'fwefw@fef.com','2016-01-03 12:04:03','2016-01-03 15:31:44');
/*!40000 ALTER TABLE `alamat_calon_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `asal_sekolah`
--

DROP TABLE IF EXISTS `asal_sekolah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `asal_sekolah` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nss` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `npsn` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `kecamatan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `propinsi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asal_sekolah`
--

LOCK TABLES `asal_sekolah` WRITE;
/*!40000 ALTER TABLE `asal_sekolah` DISABLE KEYS */;
INSERT INTO `asal_sekolah` VALUES (1,'','','','','','','2015-12-10 14:03:45','2015-12-10 14:03:45',''),(2,'','','','','','','2015-12-10 14:04:44','2015-12-10 14:04:44',''),(3,'','','','','','','2015-12-10 22:55:51','2015-12-10 22:55:51',''),(4,'ini nama sekolah saya','jhjkh','jkhjkh','jkhjk','jkhjk','jkhkj','2015-12-10 23:18:40','2015-12-10 23:18:40',''),(5,'gerge','gerge','gerge','gerge','gergre','gerger','2015-12-11 07:28:16','2015-12-11 07:28:16',''),(6,'fwfwe','fwefw','fewfw','fewfw','fwefwe','fwefwe','2015-12-11 07:44:34','2015-12-11 07:44:34',''),(7,'dvred','fegerg','gergeg','gerger','gregre','gregre','2015-12-11 07:54:47','2015-12-11 07:54:47',''),(8,'egreg','gerg','gergeg','gerg','greg','gerge','2015-12-11 07:58:30','2015-12-11 07:58:30',''),(9,'trhtrh','hrthrt','hrthrt','thrhr','hrthr','hrthrthrh','2015-12-11 09:33:59','2015-12-11 09:33:59',''),(10,'fregrg','hrthr','hrthrg','bxcbxcb','bcxbxc','bcxbxb','2015-12-11 09:37:53','2015-12-11 09:37:53',''),(11,'cdvfdvf','12345','34456','bdfgfhf','fgfg','fdbfdbfdbbf','2015-12-11 13:35:19','2015-12-11 13:35:19',''),(12,'fbfedrbed','bdfbdf','bdfbd','bdfbd','bdfbfdb','bdfbdfb','2015-12-11 23:39:38','2015-12-11 23:39:38',''),(13,'fewfw','fwefw','feefw','fwefw','fwefw','fwefwf','2015-12-16 03:23:25','2015-12-16 03:23:25',''),(14,'eferg','ggerge','gerge','gerge','gergre','gergerg','2015-12-17 02:17:59','2015-12-17 02:17:59',''),(15,'ghrth','grtgtr','grtgr','grtgtr','gregtr','grtgrt','2015-12-18 04:42:22','2015-12-18 04:42:22',''),(16,'tk a','567','123','tbr','tmg','jateng','2016-01-03 11:06:32','2016-01-03 11:06:32','tmg'),(17,'sekolah abc','ghfhf','hgfhgfh','gfhg','ghfhgf','Jawa Barat','2016-01-03 12:04:03','2016-01-03 12:04:03','hgfhgf');
/*!40000 ALTER TABLE `asal_sekolah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bagian`
--

DROP TABLE IF EXISTS `bagian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bagian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bagian`
--

LOCK TABLES `bagian` WRITE;
/*!40000 ALTER TABLE `bagian` DISABLE KEYS */;
INSERT INTO `bagian` VALUES (1,'TU','Tata Usaha','2015-11-24 15:05:10','2015-11-24 15:05:10'),(2,'HR','Human Resource','2015-11-24 15:06:34','2015-11-24 15:06:34');
/*!40000 ALTER TABLE `bagian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beasiswa_calon_siswa`
--

DROP TABLE IF EXISTS `beasiswa_calon_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beasiswa_calon_siswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calon_siswa_id` int(10) unsigned NOT NULL,
  `jenis` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `sumber` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tahun_mulai` smallint(5) unsigned NOT NULL,
  `tahun_selesai` smallint(5) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beasiswa_calon_siswa`
--

LOCK TABLES `beasiswa_calon_siswa` WRITE;
/*!40000 ALTER TABLE `beasiswa_calon_siswa` DISABLE KEYS */;
INSERT INTO `beasiswa_calon_siswa` VALUES (1,0,'1','',0,0,'2015-12-11 07:44:34','2015-12-11 07:44:34'),(2,0,'1','efwef',2000,2001,'2015-12-11 07:54:48','2015-12-11 07:54:48'),(3,0,'3','grege',2002,2003,'2015-12-11 07:54:48','2015-12-11 07:54:48'),(4,13,'1','erger',2001,2002,'2015-12-11 07:58:30','2015-12-11 07:58:30'),(5,13,'2','gerger',2004,2005,'2015-12-11 07:58:30','2015-12-11 07:58:30'),(6,14,'1','bcdhsbc',1988,2001,'2015-12-11 13:35:19','2015-12-11 13:35:19'),(7,15,'2','bfdbfd',2312,32131,'2015-12-11 23:39:38','2015-12-11 23:39:38'),(8,21,'1','dfwqfwf',2001,2002,'2015-12-16 03:23:25','2015-12-16 03:23:25'),(9,35,'1','dinsos',2006,2005,'2016-01-03 11:06:32','2016-01-03 11:06:32'),(10,35,'1','jhghj',2006,2008,'2016-01-03 11:09:46','2016-01-03 11:09:46'),(12,36,'4','cdewfwef',2003,2004,'2016-01-03 12:10:48','2016-01-03 12:10:48'),(14,0,'4','apa aja',2012,2013,'2016-01-03 18:00:00','2016-01-03 18:00:00'),(15,0,'4','apa aja',2012,2013,'2016-01-03 18:00:49','2016-01-03 18:00:49'),(16,36,'3','semarmendem',2012,2013,'2016-01-03 18:04:48','2016-01-03 18:04:48');
/*!40000 ALTER TABLE `beasiswa_calon_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `calon_siswa`
--

DROP TABLE IF EXISTS `calon_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `calon_siswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `asal_sekolah_id` int(10) unsigned NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jenis_kelamin` tinyint(1) NOT NULL,
  `nisn` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nis` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nik` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tinggi_badan` smallint(5) unsigned NOT NULL,
  `berat_badan` smallint(5) unsigned NOT NULL,
  `berkebutuhan_khusus` smallint(5) unsigned NOT NULL,
  `jumlah_saudara` smallint(5) unsigned NOT NULL,
  `psb_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calon_siswa`
--

LOCK TABLES `calon_siswa` WRITE;
/*!40000 ALTER TABLE `calon_siswa` DISABLE KEYS */;
INSERT INTO `calon_siswa` VALUES (1,0,'Yasmina Hafshah',0,'124242','523523','543543','Temanggung','2015-05-01',120,20,12,2,1,'2015-12-09 09:14:24','2015-12-09 09:14:24'),(2,0,'Hamzah',1,'12424235','4364646','4364363','Semarang','2015-05-05',168,60,13,2,2,'2015-12-09 09:53:15','2015-12-09 09:53:15'),(3,0,'Bagas Udi Sahsangka',1,'123456789','','','Semarang','1997-04-10',120,30,1,3,3,'2015-12-09 18:46:16','2015-12-09 18:46:16'),(5,0,'Aisyah',0,'4654757575','','','Jakarta','2000-02-10',140,40,12,4,5,'2015-12-10 10:41:50','2015-12-10 10:41:50'),(6,0,'Aisyah',0,'4654757575','deferf','fwefwe','Jakarta','2000-02-10',140,40,12,4,6,'2015-12-10 10:45:27','2015-12-10 13:43:10'),(9,4,'kjnhjkhk',1,'','','','fgrgege','2002-12-12',180,80,1,2,9,'2015-12-10 23:08:12','2015-12-11 06:26:24'),(12,5,'hthrth',1,'vwevwevw','','','rthrh','2010-12-08',124,34,1,2,12,'2015-12-11 07:22:02','2015-12-11 07:28:16'),(13,10,'fwefwef',0,'fwefwe','fwefwe','fwefwefw','fwefwe','2010-12-08',120,23,1,4,13,'2015-12-11 07:37:20','2015-12-11 09:37:53'),(14,11,'Yasmina Hafshah',0,'123456789','87654321','9751','temabbv','2010-12-01',123,22,1,4,14,'2015-12-11 13:28:10','2015-12-11 13:35:19'),(15,12,'Bagas Udi Sahsangka',1,'125456455667','','','Semarang','2006-12-14',130,54,13,2,15,'2015-12-11 23:37:06','2015-12-11 23:39:38'),(16,0,'Yasmina Hafshah',0,'124242','','','Temanggung','2010-12-01',120,30,1,4,16,'2015-12-16 01:33:29','2015-12-16 01:33:29'),(18,0,'Yasmina Hafshah',0,'124242','','','Temanggung','2010-12-01',120,30,1,4,18,'2015-12-16 01:35:00','2015-12-16 01:35:00'),(19,0,'jjjjjjjjj jjjjj',0,'jkbhj','','','hgghfgh','2010-12-08',140,60,1,5,19,'2015-12-16 02:57:01','2015-12-16 02:57:01'),(20,0,'kkk kkk',1,'jkhjhgj','','','vwgehf','2010-12-08',140,88,1,7,20,'2015-12-16 03:07:11','2015-12-16 03:07:11'),(21,13,'jkbhjh',1,'u67576565','','','dwedcwe','2010-12-15',160,66,2,6,21,'2015-12-16 03:14:52','2015-12-16 03:23:25'),(22,0,'Bagas Udi Sahsangka',1,'','','','','0000-00-00',0,0,0,0,22,'2015-12-16 13:23:03','2015-12-16 13:23:03'),(24,0,'Bagas Udi Sahsangka',1,'','','','','0000-00-00',0,0,0,0,24,'2015-12-17 06:17:47','2015-12-17 06:17:47'),(25,0,'test aja kok',1,'','','','','0000-00-00',0,0,0,0,25,'2015-12-17 06:37:28','2015-12-17 06:37:28'),(27,0,'coba jajal',1,'','','','','0000-00-00',0,0,0,0,27,'2015-12-17 13:46:04','2015-12-17 13:46:04'),(30,0,'putri',0,'','','','','0000-00-00',0,0,0,0,30,'2015-12-17 13:59:13','2015-12-17 13:59:13'),(31,0,'hafshah',0,'','','','','0000-00-00',0,0,0,0,31,'2015-12-17 14:13:04','2015-12-17 14:13:04'),(32,0,'thalhah',0,'','','','','0000-00-00',0,0,0,0,32,'2015-12-18 01:14:25','2015-12-18 01:14:25'),(33,15,'zubair',1,'dfbdf','fvvd','vdfvdf','vdfvdf','2010-12-17',120,30,11,3,33,'2015-12-18 01:44:48','2015-12-18 04:42:23'),(34,0,'fwefw',1,'','fwefw','','','0000-00-00',0,0,0,0,34,'2016-01-02 06:11:39','2016-01-02 06:11:39'),(35,16,'uya sukunyil',1,'254','897621','678','Temanggung','2002-01-02',118,20,0,5,35,'2016-01-03 10:55:46','2016-01-03 11:09:46'),(36,17,'bagus',1,'kjbjhg','8767867','hghjg','jhghj','2011-01-02',110,20,1,2,36,'2016-01-03 12:00:35','2016-01-03 15:31:44');
/*!40000 ALTER TABLE `calon_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catatan_wawancara_calon_santri`
--

DROP TABLE IF EXISTS `catatan_wawancara_calon_santri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catatan_wawancara_calon_santri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `siswa_id` int(10) unsigned NOT NULL,
  `hasil_wawancara` tinyint(1) NOT NULL,
  `catatan` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catatan_wawancara_calon_santri`
--

LOCK TABLES `catatan_wawancara_calon_santri` WRITE;
/*!40000 ALTER TABLE `catatan_wawancara_calon_santri` DISABLE KEYS */;
/*!40000 ALTER TABLE `catatan_wawancara_calon_santri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catatan_wawancara_orangtua_calon_santri`
--

DROP TABLE IF EXISTS `catatan_wawancara_orangtua_calon_santri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catatan_wawancara_orangtua_calon_santri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `siswa_id` int(10) unsigned NOT NULL,
  `hasil_wawancara` tinyint(1) NOT NULL,
  `catatan` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catatan_wawancara_orangtua_calon_santri`
--

LOCK TABLES `catatan_wawancara_orangtua_calon_santri` WRITE;
/*!40000 ALTER TABLE `catatan_wawancara_orangtua_calon_santri` DISABLE KEYS */;
/*!40000 ALTER TABLE `catatan_wawancara_orangtua_calon_santri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `dokumen_calon_siswa`
--

DROP TABLE IF EXISTS `dokumen_calon_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `dokumen_calon_siswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calon_siswa_id` int(10) unsigned NOT NULL,
  `file` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nama` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokumen_calon_siswa`
--

LOCK TABLES `dokumen_calon_siswa` WRITE;
/*!40000 ALTER TABLE `dokumen_calon_siswa` DISABLE KEYS */;
INSERT INTO `dokumen_calon_siswa` VALUES (1,13,'1449826673-bagasktp.png','2015-12-11 09:37:53','2015-12-11 09:37:53',''),(2,13,'1449826673-image001.png','2015-12-11 09:37:53','2015-12-11 09:37:53',''),(3,13,'1449826673-dude.png','2015-12-11 09:37:53','2015-12-11 09:37:53',''),(4,13,'1449826673-blibliricecooker.png','2015-12-11 09:37:53','2015-12-11 09:37:53',''),(5,13,'1449826673-graph_image-duri.png','2015-12-11 09:37:53','2015-12-11 09:37:53',''),(6,15,'1449877178-graph_image-duri.png','2015-12-11 23:39:38','2015-12-11 23:39:38',''),(7,15,'1449877178-pisau.jpg','2015-12-11 23:39:38','2015-12-11 23:39:38',''),(8,15,'1449877178-graph_image-perawang.png','2015-12-11 23:39:38','2015-12-11 23:39:38',''),(9,15,'1449877179-sotoayam.png','2015-12-11 23:39:39','2015-12-11 23:39:39',''),(10,15,'1449877179-setting password.jpg','2015-12-11 23:39:39','2015-12-11 23:39:39',''),(11,21,'1450236205-bagasktp.png','2015-12-16 03:23:25','2015-12-16 03:23:25',''),(12,21,'1450236205-graph_image-perawang.png','2015-12-16 03:23:25','2015-12-16 03:23:25',''),(13,21,'1450236205-gamis.png','2015-12-16 03:23:25','2015-12-16 03:23:25',''),(14,21,'1450236205-khansa.jpg','2015-12-16 03:23:25','2015-12-16 03:23:25',''),(15,21,'1450236205-Transmitter Setting Siron.png','2015-12-16 03:23:25','2015-12-16 03:23:25','');
/*!40000 ALTER TABLE `dokumen_calon_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_wawancara_calon_santri`
--

DROP TABLE IF EXISTS `form_wawancara_calon_santri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_wawancara_calon_santri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `indikator_variable` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sub_indikator_variable` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=76 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_wawancara_calon_santri`
--

LOCK TABLES `form_wawancara_calon_santri` WRITE;
/*!40000 ALTER TABLE `form_wawancara_calon_santri` DISABLE KEYS */;
INSERT INTO `form_wawancara_calon_santri` VALUES (1,'Motivasi ','Motivasi belajar di MIAS','Apa yang mendorong anda bersekolah di MIAS?','0000-00-00 00:00:00','2016-01-02 15:12:59'),(7,'Motivasi ','Pengetahuan tentang MIAS','Apa yang anda ketahui tentang MIAS?','0000-00-00 00:00:00','2016-01-02 15:15:25'),(12,'Motivasi ','Cita-cita/Tujuan hidup','Apa cita-cita anda? Dan apa yang anda rencanakan untuk meraihnya?  ','0000-00-00 00:00:00','0000-00-00 00:00:00'),(18,'Latar belakang','Latar belakang keluarga ','Bisakah anda menceritakan tentang keluarga anda di rumah?','0000-00-00 00:00:00','0000-00-00 00:00:00'),(23,'Latar belakang','Track record','Bisakah anda menceritakan tentang kehidupan anda di sekolah dan lingkungan rumah?','0000-00-00 00:00:00','0000-00-00 00:00:00'),(32,'Latar belakang','Track record','Apakah anda senang menonton televisi atau games ?','0000-00-00 00:00:00','0000-00-00 00:00:00'),(34,'Latar belakang','Track record','Apakah anda senang mendengarkan musik atau film2 bioskop ?','0000-00-00 00:00:00','0000-00-00 00:00:00'),(40,'Latar belakang','Ekonomi','Apakah keluarga anda selalu memenuhi kebutuhan sekolah anda ?','0000-00-00 00:00:00','0000-00-00 00:00:00'),(45,'Latar belakang','Ekonomi','Apakah orang tua sering memberi uang bekal/jajan kepada anda ?','0000-00-00 00:00:00','0000-00-00 00:00:00'),(46,'Latar belakang','Kesehatan','Apakah anda mengalami penyakit yang berat/menular atau menetap ? ','0000-00-00 00:00:00','0000-00-00 00:00:00'),(52,'Keagamaan','Ibadah','Apakah anda suka sholat berjamaah di masjid dan orang tua anda suka memerintahkan','0000-00-00 00:00:00','0000-00-00 00:00:00'),(56,'Keagamaan','Menuntut ilmu','Apakah anda suka ikut pengajian dan orang tua suka mengajak ?','0000-00-00 00:00:00','0000-00-00 00:00:00'),(60,'Daya tahan ',' Keuletan ','Apa yang terjadi dengan diri anda jika anda mengalami kegagalan','0000-00-00 00:00:00','0000-00-00 00:00:00'),(66,'Daya tahan ','Daya tahan terhadap stress ','Bagaimana cara menghadpi masalah yang sedang di hadapi?berikan contoh kongkrit masalah terbesar yang pernah di hadapi!','0000-00-00 00:00:00','0000-00-00 00:00:00'),(71,'Kemandirian ','Partisipasi kegiatan rumah ','Apakah anda memiliki tugas dalam rumah?','0000-00-00 00:00:00','0000-00-00 00:00:00'),(75,'Potensi  ','Fleksibilitas untuk berubah','Bagaimana sikap anda dalam menghadapi hal baru?  ','0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `form_wawancara_calon_santri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `form_wawancara_orangtua_calon_santri`
--

DROP TABLE IF EXISTS `form_wawancara_orangtua_calon_santri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `form_wawancara_orangtua_calon_santri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `indikator_variable` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pertanyaan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `form_wawancara_orangtua_calon_santri`
--

LOCK TABLES `form_wawancara_orangtua_calon_santri` WRITE;
/*!40000 ALTER TABLE `form_wawancara_orangtua_calon_santri` DISABLE KEYS */;
INSERT INTO `form_wawancara_orangtua_calon_santri` VALUES (1,'Latar Belakang','Apa pekerjaan bapak ?','2016-01-03 04:11:06','2016-01-03 04:11:06'),(2,'Latar Belakang','Berapa penghasilan rata-rata perbulan ?','2016-01-03 04:12:02','2016-01-03 04:12:02'),(3,'Latar Belakang','Berapa orang yang menjadi tanggungan Bapak ?','2016-01-03 04:13:02','2016-01-03 04:13:02'),(4,'Latar Belakang','Berapa pengeluaran rata-rata perbulan ?','2016-01-03 04:15:58','2016-01-03 04:15:58'),(5,'Latar Belakang','Adakah dukungan dari orang lain, baik keluarga maupun di luar keluarga ?','2016-01-03 04:16:51','2016-01-03 04:16:51'),(6,'Latar Belakang','Jika ada, apa bentuk dukungan tersebut ?','2016-01-03 04:17:38','2016-01-03 04:17:38'),(7,'Latar Belakang','Apakah sudah mempunyai tempat tinggal sendiri ?','2016-01-03 04:18:19','2016-01-03 04:18:19'),(8,'Latar Belakang','Bisakah anda menceritakan tentang keluarga anda di rumah?','2016-01-03 04:19:23','2016-01-03 04:19:23'),(9,'Motivasi','Apakah anak Bapak mendaftar di MIAS atas  keinginan sendiri atau keinginan orang tua ?','2016-01-03 04:20:12','2016-01-03 04:20:12'),(10,'Motivasi','Apa yang memotivasi Bapak memasukkan anaknya di MIAS ?','2016-01-03 04:21:14','2016-01-03 04:21:14'),(11,'Motivasi','Apa  yang Bapak lakukan agar anak Bapak mau belajar di MIAS ?','2016-01-03 04:22:22','2016-01-03 04:22:22'),(12,'Motivasi','Apa tindakan Bapak apabila anak Bapak ingin keluar dari MIAS sebelum waktunya ?','2016-01-03 04:23:02','2016-01-03 04:23:02'),(13,'Daya dukung terhadap proses pendidikan MIAS','Apakah anda selalu memenuhi kebutuhan sekolah anak anda ?','2016-01-03 04:24:02','2016-01-03 04:24:02'),(14,'Daya dukung terhadap proses pendidikan MIAS','Apakah Bapak siap membayar lunas biaya masuk pada waktu yang telah ditetapkan ?','2016-01-03 04:25:01','2016-01-03 04:25:01'),(15,'Daya dukung terhadap proses pendidikan MIAS','Apakah bapak siap membayar SPP bulanan tepat pada wakunya, maksimal tanggal 5 setiap   bulannya ?','2016-01-03 04:26:06','2016-01-03 04:26:06'),(16,'Daya dukung terhadap proses pendidikan MIAS','Apakah Bapak setuju dan mendukung semua program yang ditetapkan MIAS ? a. Program wajib asrama bagi santri SMP ke atas b. Program wajib khidmah bagi yang telah lulus SMA, TD & PGBA','2016-01-03 04:27:12','2016-01-03 04:27:12'),(17,'Daya dukung terhadap proses pendidikan MIAS','Apa tindakan bapak jika anaknya mengalami masalah disiplin/melanggara peraturan di MIAS ?','2016-01-03 04:28:10','2016-01-03 04:28:10'),(18,'Daya dukung terhadap proses pendidikan MIAS','Apa tindakan bapak jika mendapatkan sesuatu yang janggal/tidak layak terjadi di MIAS ?','2016-01-03 04:29:12','2016-01-03 04:29:12'),(19,'Daya dukung terhadap proses pendidikan MIAS','Apakah Bapak siap menerima setiap kebijakan/keputusan yang diambil oleh MIAS, terutama dalam masalah penegakkan disiplin ?','2016-01-03 04:30:17','2016-01-03 04:30:17'),(20,'Pengetahuan tentang anak','Bisakah anda menceritakan tentang kehidupan anak anda di sekolah dan lingkungan rumah?','2016-01-03 04:32:11','2016-01-03 04:32:11'),(21,'Pengetahuan tentang anak','Apakah anak anda senang menonton televisi atau main games/Internet ?','2016-01-03 04:33:24','2016-01-03 04:33:24'),(22,'Pengetahuan tentang anak','Apakah anak anda senang mendengarkan musik atau menonton film2 bioskop ?','2016-01-03 04:34:30','2016-01-03 04:34:30'),(23,'Pengetahuan tentang anak','Apakah anak anda mengalami penyakit yang berat/menular atau menetap ?','2016-01-03 04:35:32','2016-01-03 04:35:32'),(24,'Keagamaan','Apakah anda suka sholat berjamaah di masjid dan memerintahkan anak anda untuk sholat ?','2016-01-03 04:36:36','2016-01-03 04:36:36'),(25,'Keagamaan','Apakah anda suka ikut pengajian dan mengajak anak  ?','2016-01-03 04:37:32','2016-01-03 04:37:32');
/*!40000 ALTER TABLE `form_wawancara_orangtua_calon_santri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `guru_mapel`
--

DROP TABLE IF EXISTS `guru_mapel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `guru_mapel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(10) unsigned NOT NULL,
  `mapel_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guru_mapel`
--

LOCK TABLES `guru_mapel` WRITE;
/*!40000 ALTER TABLE `guru_mapel` DISABLE KEYS */;
INSERT INTO `guru_mapel` VALUES (7,1,6),(8,1,4),(9,1,2),(13,2,5),(14,2,6),(15,3,3);
/*!40000 ALTER TABLE `guru_mapel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_bangunan`
--

DROP TABLE IF EXISTS `inv_bangunan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_bangunan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tanah_id` int(10) unsigned NOT NULL,
  `kode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `luas` int(10) unsigned NOT NULL,
  `jumlah_lantai` smallint(5) unsigned NOT NULL,
  `tahun_pembangunan` smallint(6) NOT NULL,
  `tahun_selesai` smallint(6) NOT NULL,
  `tahun_pakai` smallint(6) NOT NULL,
  `nomor_imb` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_imb` date NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `asal_perolehan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `asal_dana` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `nomor_bukti_perolehan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rekanan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kondisi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `nilai_asset` double NOT NULL,
  `material_lantai` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `material_tembok` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `material_atap` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_bangunan`
--

LOCK TABLES `inv_bangunan` WRITE;
/*!40000 ALTER TABLE `inv_bangunan` DISABLE KEYS */;
INSERT INTO `inv_bangunan` VALUES (1,1,'BG-001','bangunan sekolah',200,2,2010,2014,2015,'uuyuyug','2010-09-09','jakarta','pembelian','donatur','hugtutug','PT Bangun Persada','Rusak Ringan',300000000,'keramik','beton','genteng','2015-11-29 08:46:42','2015-11-29 08:47:03');
/*!40000 ALTER TABLE `inv_bangunan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `inv_tanah`
--

DROP TABLE IF EXISTS `inv_tanah`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `inv_tanah` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `luas_total` int(10) unsigned NOT NULL,
  `luas_bangunan` int(10) unsigned NOT NULL,
  `luas_kosong` int(10) unsigned NOT NULL,
  `lokasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batas_utara` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `batas_selatan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `batas_barat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `batas_timur` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `asal_perolehan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `asal_dana` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sertifikat_hak` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sertifikat_nomor` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `sertifikat_tgl` date NOT NULL,
  `njop` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_dapat` date NOT NULL,
  `nilai_asset` double NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_tanah`
--

LOCK TABLES `inv_tanah` WRITE;
/*!40000 ALTER TABLE `inv_tanah` DISABLE KEYS */;
INSERT INTO `inv_tanah` VALUES (1,'TA-001','Tanah Abang',320,300,20,'jakarta','-','-','-','-','wakaf','donatur','Milik','123456','2000-09-09','123456','2000-01-01',2000000000,'2015-11-29 07:19:27','2015-11-29 07:21:24');
/*!40000 ALTER TABLE `inv_tanah` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jabatan`
--

DROP TABLE IF EXISTS `jabatan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jabatan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bagian_id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tugas` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatan`
--

LOCK TABLES `jabatan` WRITE;
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
INSERT INTO `jabatan` VALUES (1,1,'Tukang ngetik','1. Ngetik terus sampe kriting\r\n2. Ngetik terus sampe kriting\r\n3. Ngetik terus sampe kriting\r\n4. Ngetik terus sampe kriting\r\n5. Ngetik terus sampe kriting'),(2,1,'Tukang Pukul','Mukulin orang'),(3,1,'Tukang Palak','Malakin orang');
/*!40000 ALTER TABLE `jabatan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jadwal_pelajaran`
--

DROP TABLE IF EXISTS `jadwal_pelajaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jadwal_pelajaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ta_id` int(10) unsigned NOT NULL,
  `tingkat_id` int(10) unsigned NOT NULL,
  `kelas_id` int(10) unsigned NOT NULL,
  `hari` tinyint(1) NOT NULL,
  `guru_id` int(10) unsigned NOT NULL,
  `mapel_id` int(10) unsigned NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jam_id` int(10) unsigned NOT NULL,
  `ruang_id` int(10) unsigned NOT NULL,
  `jenjang_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal_pelajaran`
--

LOCK TABLES `jadwal_pelajaran` WRITE;
/*!40000 ALTER TABLE `jadwal_pelajaran` DISABLE KEYS */;
INSERT INTO `jadwal_pelajaran` VALUES (8,3,1,1,4,2,8,'n','2015-12-03 06:02:50','2015-12-03 06:11:43',1,1,3),(9,3,1,1,4,1,7,'m','2015-12-03 06:02:50','2015-12-04 06:48:55',2,1,3),(10,3,1,1,4,3,5,'a','2015-12-03 06:02:50','2015-12-03 06:11:44',4,1,3),(11,3,1,1,4,1,6,'s','2015-12-03 06:02:50','2015-12-03 06:11:44',5,1,3),(12,3,1,1,2,2,8,'n','2015-12-03 06:07:32','2015-12-03 06:11:44',1,1,3),(13,3,1,1,2,1,7,'m','2015-12-03 06:07:32','2015-12-04 06:48:55',2,1,3),(14,3,1,1,2,3,5,'a','2015-12-03 06:07:32','2015-12-03 06:11:44',4,1,3),(15,3,1,1,2,1,6,'s','2015-12-03 06:07:32','2015-12-03 06:11:44',5,1,3);
/*!40000 ALTER TABLE `jadwal_pelajaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jadwal_ujian`
--

DROP TABLE IF EXISTS `jadwal_ujian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jadwal_ujian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ujian_id` int(10) unsigned NOT NULL,
  `mapel_id` int(10) unsigned NOT NULL,
  `tanggal` date NOT NULL,
  `dari` time NOT NULL,
  `sampai` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal_ujian`
--

LOCK TABLES `jadwal_ujian` WRITE;
/*!40000 ALTER TABLE `jadwal_ujian` DISABLE KEYS */;
/*!40000 ALTER TABLE `jadwal_ujian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jam_pelajaran`
--

DROP TABLE IF EXISTS `jam_pelajaran`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jam_pelajaran` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tingkat_id` int(10) unsigned NOT NULL,
  `jam` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `dari` time NOT NULL,
  `sampai` time NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jenjang_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jam_pelajaran`
--

LOCK TABLES `jam_pelajaran` WRITE;
/*!40000 ALTER TABLE `jam_pelajaran` DISABLE KEYS */;
INSERT INTO `jam_pelajaran` VALUES (1,1,'1','07:00:00','09:00:00','2015-12-02 06:19:55','2015-12-03 05:41:01',3),(2,1,'2','09:00:00','10:00:00','2015-12-02 06:21:17','2015-12-03 05:41:14',3),(4,1,'3','10:15:00','11:15:00','2015-12-02 06:22:23','2015-12-03 05:41:32',3),(5,1,'5','12:00:00','13:00:00','2015-12-02 06:22:49','2015-12-03 05:41:46',3),(6,2,'1','08:00:00','09:00:00','2015-12-02 09:14:08','2015-12-03 05:42:00',3);
/*!40000 ALTER TABLE `jam_pelajaran` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jawaban_wawancara_calon_santri`
--

DROP TABLE IF EXISTS `jawaban_wawancara_calon_santri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jawaban_wawancara_calon_santri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pertanyaan_id` int(10) unsigned NOT NULL,
  `jawaban` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nilai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=124 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jawaban_wawancara_calon_santri`
--

LOCK TABLES `jawaban_wawancara_calon_santri` WRITE;
/*!40000 ALTER TABLE `jawaban_wawancara_calon_santri` DISABLE KEYS */;
INSERT INTO `jawaban_wawancara_calon_santri` VALUES (46,7,'Saya banyak tahu tentang MIAS dan saya sangat tertarik','9-10','2016-01-02 15:15:25','2016-01-02 15:15:25'),(47,7,'Saya sedikit tahu tentang MIAS dan saya sangat tertarik','7-8','2016-01-02 15:15:25','2016-01-02 15:15:25'),(48,7,'Saya sedikit  tahu tentang MIAS dan saya tertarik','5-6','2016-01-02 15:15:26','2016-01-02 15:15:26'),(49,7,'Saya tidak  tahu tentang MIAS dan saya ingin tahu','3-4','2016-01-02 15:15:26','2016-01-02 15:15:26'),(50,7,'Saya tidak tahu sama sekali tentang MIAS dan saya tidak tertarik untuk tahu','0-2','2016-01-02 15:15:26','2016-01-02 15:15:26'),(51,1,'Keinginan pribadi dan dukungan orang tua','9-10','2016-01-02 15:19:47','2016-01-02 15:19:47'),(52,1,'Keinginan pribadi dan orang tua tidak melarang','7-8','2016-01-02 15:19:47','2016-01-02 15:19:47'),(53,1,'Keinginan pribadi dan tidak didukung orang tua','5-6','2016-01-02 15:19:47','2016-01-02 15:19:47'),(54,1,'Anjuran orang tua dan saya ridho','5-6','2016-01-02 15:19:47','2016-01-02 15:19:47'),(55,1,'Dipaksa  orang tua dan saya berat untuk mematuhinya','3-4','2016-01-02 15:19:47','2016-01-02 15:19:47'),(56,1,'Dipaksa orang tua dan saya tidak  mau menurutinya','0-2','2016-01-02 15:19:47','2016-01-03 15:32:45'),(57,12,'Memiliki cita-cita untuk kepentingan banyak orang (menjadi ulama, da’i, dll)  dengan perencanaan terperinci','10','2016-01-02 15:25:39','2016-01-02 15:25:39'),(58,12,'Memiliki cita-cita untuk kepentingan banyak orang (menjadi ulama, da’i, dll)  dengan perencanaan global','8-9','2016-01-02 15:25:40','2016-01-02 15:25:40'),(59,12,'Memiliki cita-cita  yang hanya untuk kepentingan pribadi dan keluarganya (misal ingin membahagiakan orang tuanya setelah lulus kuliah)  dengan perencanaan global.','6-7','2016-01-02 15:25:40','2016-01-02 15:25:40'),(60,12,'Memiliki cita-cita  yang hanya untuk kepentingan pribadi dan keluarganya (misal ingin membahagiakan orang tuanya setelah lulus kuliah) tanpa perencanaan sama sekali','3-5','2016-01-02 15:25:40','2016-01-02 15:25:40'),(61,12,'Memiliki cita-cita yang tidak jelas (misal :ingin jadi orang yang berguna bagi nusa dan bangsa)','1-2','2016-01-02 15:25:40','2016-01-02 15:25:40'),(62,18,'Keluarga ngaji yang harmonis','9-10','2016-01-03 03:23:41','2016-01-03 03:23:41'),(63,18,'Keluarga awam yang harmonis','6-8','2016-01-03 03:23:41','2016-01-03 03:23:41'),(64,18,'Keluarga ngaji yang tidak harmonis','3-5','2016-01-03 03:23:41','2016-01-03 03:23:41'),(65,18,'Keluarga awam yang tidak harmonis','0-2','2016-01-03 03:23:42','2016-01-03 03:23:42'),(66,23,'Tidak merokok tidak narkoba punya prestasi','9-10','2016-01-03 03:27:01','2016-01-03 03:27:01'),(67,23,'Tidak merokok tidak narkoba tidak punya prestasi','7-8','2016-01-03 03:28:28','2016-01-03 03:28:28'),(68,23,'Pernah merokok tapi sudah berhenti','5-6','2016-01-03 03:28:28','2016-01-03 03:28:28'),(69,23,'Masih merokok','4','2016-01-03 03:28:28','2016-01-03 03:28:28'),(70,23,'Pecandu  merokok dan belum berhenti','3','2016-01-03 03:28:28','2016-01-03 03:28:28'),(71,23,'Terlibat dalam kegiatan geng motor (merokok, narkotika,   kekerasan)','2','2016-01-03 03:28:29','2016-01-03 03:28:29'),(72,23,'Pernah dikeluarkan sekolah sebelumnya karena melakukan pelanggaran berat.','1','2016-01-03 03:28:29','2016-01-03 03:28:29'),(73,23,'Pernah dikeluarkan dari sekolah sebelumnya karena terlibat kasus kriminal','0','2016-01-03 03:28:29','2016-01-03 03:28:29'),(74,32,'Tidak pernah sama sekali','10','2016-01-03 03:37:05','2016-01-03 03:37:05'),(75,32,'Terkadang kalau hari libur atau sesekali','7-9','2016-01-03 03:37:05','2016-01-03 03:37:05'),(76,32,'Sering tapi waktunya tidak lama','4-6','2016-01-03 03:37:05','2016-01-03 03:37:05'),(77,32,'Sering sekali hampir setiap waktu','1-3','2016-01-03 03:37:05','2016-01-03 03:37:05'),(78,34,'Tidak pernah sama sekali','10','2016-01-03 03:38:04','2016-01-03 03:38:04'),(79,34,'Pernah tapi tidak sering','7-9','2016-01-03 03:38:04','2016-01-03 03:38:04'),(80,34,'Kadang-kadang kalau lagi ingin aja','4-6','2016-01-03 03:38:04','2016-01-03 03:38:04'),(81,34,'Sering sekali','1-3','2016-01-03 03:38:04','2016-01-03 03:38:04'),(82,40,'Selalu memenuhi bahkan selalu bertanya tentang kebutuhan yang diperlukan','10','2016-01-03 03:38:48','2016-01-03 03:38:48'),(83,40,'Dipenuhi bila ada informasi atau diminta','6-9','2016-01-03 03:38:48','2016-01-03 03:38:48'),(84,40,'Terkadang dipenuhi bila ada uang untuk membayarnya','1-5','2016-01-03 03:38:48','2016-01-03 03:38:48'),(85,40,'Tidak pernah memenuhi sama sekali','0','2016-01-03 03:39:17','2016-01-03 03:39:17'),(86,45,'Sering memberi tanpa diminta sekali pun','10','2016-01-03 03:40:21','2016-01-03 03:40:21'),(87,45,'Bertanya dulu apakah saya butuh uang jajan/bekal','6-9','2016-01-03 03:40:21','2016-01-03 03:40:21'),(88,45,'Memberi kalau diminta','1-5','2016-01-03 03:40:21','2016-01-03 03:40:21'),(89,45,'Tidak pernah memberi sama sekali','0','2016-01-03 03:40:21','2016-01-03 03:40:21'),(90,46,'Tidak ada sama sekali','10','2016-01-03 03:41:15','2016-01-03 03:41:15'),(91,46,'Dulu pernah tapi sudah tidak muncul lagi','7-9','2016-01-03 03:41:15','2016-01-03 03:41:15'),(92,46,'Terkadang suka kambuh','4-6','2016-01-03 03:41:15','2016-01-03 03:41:15'),(93,46,'Ada dan masih suka kambuh','1-3','2016-01-03 03:41:15','2016-01-03 03:41:15'),(94,52,'Shalat berjamaah atas kemauan sendiri','9-10','2016-01-03 03:42:51','2016-01-03 03:42:51'),(95,52,'Shalat berjamaah karena sering disuruh orang tua','7-8','2016-01-03 03:42:51','2016-01-03 03:42:51'),(96,52,'Shalat berjamaah terpaksa karena disuruh orang tua','5-6','2016-01-03 03:42:51','2016-01-03 03:42:51'),(97,52,'Shalat di rumah dan orang tua tidak menyuruh','4','2016-01-03 03:42:51','2016-01-03 03:42:51'),(98,52,'Tidak pernah sholat dan orang tua suka mengingatkan','1-3','2016-01-03 03:42:51','2016-01-03 03:42:51'),(99,52,'Tidak pernah sholat dan orang tua tidak pernah mengingatkan','0','2016-01-03 03:42:51','2016-01-03 03:42:51'),(100,56,'Sering ikut pengajian dan orang tua suka mengajak','10','2016-01-03 03:43:58','2016-01-03 03:43:58'),(101,56,'Kadang-kadang ikut pengajian kalau diajak orang tua','6-9','2016-01-03 03:43:59','2016-01-03 03:43:59'),(102,56,'Pernah ikut pengajian sesekali','1-5','2016-01-03 03:43:59','2016-01-03 03:43:59'),(103,56,'Tidak pernah ikut pengajian dan orang tua tidak pernah mengajak','0','2016-01-03 03:43:59','2016-01-03 03:43:59'),(104,60,'Tegar dalam menghadapi kegagalan, memiliki evaluasi, perencanaan untuk memperbaiki kegagalan, tindakan yang mampu merubah kegagalan menjadi keberhasilan','10','2016-01-03 03:45:12','2016-01-03 03:45:12'),(105,60,'Tegar dalam menghadapi kegagalan, memiliki evaluasi, perencanaan untuk memperbaiki kegagalan, tetapi belum memiliki kemampuan untuk merubah kegagalan menjad keberhasilan','7-9','2016-01-03 03:45:12','2016-01-03 03:45:12'),(106,60,'Tegar dalam menghadapi kegagalan, tidak memiliki evaluasi, perencanaan untuk memperbaiki kegagalan, tetapi memiliki kemampuan untuk merubah kegagalan menjad keberhasilan','5-6','2016-01-03 03:45:12','2016-01-03 03:45:12'),(107,60,'Hanya tegar saja dalam menghadapi kegagalan','3-4','2016-01-03 03:45:12','2016-01-03 03:45:12'),(108,60,'Merasa putus asa dan mencoba untuk bangkit','1-2','2016-01-03 03:45:12','2016-01-03 03:45:12'),(109,60,'Putus asa dan belum mencoba untuk bangkit','0','2016-01-03 03:45:12','2016-01-03 03:45:12'),(110,66,'Tenang dan memiliki solusi untuk mengatasi masalahnya','8-10','2016-01-03 03:46:12','2016-01-03 03:46:12'),(111,66,'Tenang dan sabar menghadapi masalahnya, mampu mengutarakan masalahnya kepada orang lain','5-7','2016-01-03 03:46:13','2016-01-03 03:46:13'),(112,66,'Tenang dan belum memiliki solusi untuk mengatasi masalahnya','3-4','2016-01-03 03:46:13','2016-01-03 03:46:13'),(113,66,'Tenang tetapi tidak sadar bahwa dia harus segera mengatasi masalahnya tersebut','1-2','2016-01-03 03:46:13','2016-01-03 03:46:13'),(114,66,'Cenderung emosi dalam menghadapi masalahnya (misal: suka marah - marah)','0','2016-01-03 03:46:13','2016-01-03 03:46:13'),(115,71,'Punya dan saya selalu mengerjakannya','9-10','2016-01-03 03:47:10','2016-01-03 03:47:10'),(116,71,'Punya dan terkadang saya mengerjakannya','6-8','2016-01-03 03:47:10','2016-01-03 03:47:10'),(117,71,'Tidak punya tapi saya terkadang membantu pekerjaan rumah','1-5','2016-01-03 03:47:10','2016-01-03 03:47:10'),(118,71,'Tidak punya dan saya tidak berinisiatif membantu pekerjaan rumah','0','2016-01-03 03:47:10','2016-01-03 03:47:10'),(119,75,'Saya terima semua kebenaran dan akan saya bela mati-matian jika memang sesuai kebenaran','8-10','2016-01-03 03:48:12','2016-01-03 03:48:12'),(120,75,'Saya terima semua perubahan asalkan itu sesuai dengan kebenaran.','6-7','2016-01-03 03:48:12','2016-01-03 03:48:12'),(121,75,'Saya menerima perubahan yang sejalan dengan kebanyakan orang','4-5','2016-01-03 03:48:12','2016-01-03 03:48:12'),(122,75,'Saya menerima perubahan yang menguntungkan saya','2-3','2016-01-03 03:48:12','2016-01-03 03:48:12'),(123,75,'Saya menolak perubahan yang tidak sesuai dengan prinsip saya.','0-1','2016-01-03 03:48:13','2016-01-03 03:48:13');
/*!40000 ALTER TABLE `jawaban_wawancara_calon_santri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jawaban_wawancara_orangtua_calon_santri`
--

DROP TABLE IF EXISTS `jawaban_wawancara_orangtua_calon_santri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jawaban_wawancara_orangtua_calon_santri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `pertanyaan_id` int(10) unsigned NOT NULL,
  `jawaban` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nilai` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=88 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jawaban_wawancara_orangtua_calon_santri`
--

LOCK TABLES `jawaban_wawancara_orangtua_calon_santri` WRITE;
/*!40000 ALTER TABLE `jawaban_wawancara_orangtua_calon_santri` DISABLE KEYS */;
INSERT INTO `jawaban_wawancara_orangtua_calon_santri` VALUES (1,1,'Pegawai Tetap Swasta/PNS atau pengusaha besar','10','2016-01-03 04:11:06','2016-01-03 04:11:06'),(2,1,'Buruh tani atau pedagang kecil','5-9','2016-01-03 04:11:06','2016-01-03 04:11:06'),(3,1,'Masih menganggur atau serabutan','1-4','2016-01-03 04:11:06','2016-01-03 04:11:06'),(4,2,'4 Juta Keatas','10','2016-01-03 04:12:02','2016-01-03 04:12:02'),(5,2,'2- 4 Juta','5-9','2016-01-03 04:12:02','2016-01-03 04:12:02'),(6,2,'Kurang dari 2 Juta','1-4','2016-01-03 04:12:02','2016-01-03 04:12:02'),(7,3,'4 Orang dan hanya keluarga sendiri','10','2016-01-03 04:13:02','2016-01-03 04:13:02'),(8,3,'Lebih dari 4 orang dan hanya keluarga sendiri','5-9','2016-01-03 04:13:02','2016-01-03 04:13:02'),(9,3,'Lebih dari 4 orang dan keluarga besar','1-4','2016-01-03 04:13:03','2016-01-03 04:13:03'),(10,4,'Kurang dari pendapatan dan masih bisa menabung','10','2016-01-03 04:15:58','2016-01-03 04:15:58'),(11,4,'Sesuai dengan pendapatan dan cukup','5-9','2016-01-03 04:15:59','2016-01-03 04:15:59'),(12,4,'Melebihi pendapatan dan kurang','1-4','2016-01-03 04:15:59','2016-01-03 04:15:59'),(13,5,'Ada dan banyak yang mendukung','10','2016-01-03 04:16:51','2016-01-03 04:16:51'),(14,5,'Mendukung hanya lingkungan keluarga sendiri','5-9','2016-01-03 04:16:52','2016-01-03 04:16:52'),(15,5,'Tidak ada yang menndukung','1-4','2016-01-03 04:16:52','2016-01-03 04:16:52'),(16,6,'Materi termasuk seluruh kebutuhan dan biaya sekolah','10','2016-01-03 04:17:38','2016-01-03 04:17:38'),(17,6,'Dorongan moril tapi terkadang suka memberi bantuan materi','5-9','2016-01-03 04:17:38','2016-01-03 04:17:38'),(18,6,'Hanya dorongan moril dan semangat aja','1-4','2016-01-03 04:17:38','2016-01-03 04:17:38'),(19,7,'Sudah punya','10','2016-01-03 04:18:19','2016-01-03 04:18:19'),(20,7,'Belum punya dan masih mengontrak','5-9','2016-01-03 04:18:19','2016-01-03 04:18:19'),(21,7,'Ikut mertua atau orang tua','1-4','2016-01-03 04:18:19','2016-01-03 04:18:19'),(22,8,'Keluarga ngaji yang harmonis','10','2016-01-03 04:19:23','2016-01-03 04:19:23'),(23,8,'Keluarga awam yang harmonis','6-9','2016-01-03 04:19:23','2016-01-03 04:19:23'),(24,8,'Keluarga ngaji yang tidak harmonis','1-5','2016-01-03 04:19:23','2016-01-03 04:19:23'),(25,8,'Keluarga awam yang tidak harmonis','0','2016-01-03 04:19:23','2016-01-03 04:19:23'),(26,9,'Atas kemauan anak sendiri','10','2016-01-03 04:20:12','2016-01-03 04:20:12'),(27,9,'Kemauan anak dan dibujuk dulu sebelumnya','5-9','2016-01-03 04:20:12','2016-01-03 04:20:12'),(28,9,'Dibujuk dan agak dipaksa','1-4','2016-01-03 04:20:13','2016-01-03 04:20:13'),(29,10,'Agar menjada anak yang sholih dan memiliki pemahaman agama yang benar','10','2016-01-03 04:21:14','2016-01-03 04:21:14'),(30,10,'Biar memiliki pengetahuan yang tinggi dan berprestasi','5-9','2016-01-03 04:21:14','2016-01-03 04:21:14'),(31,10,'Agar tidak terpengaruh dunia luar dan atas saran dari orang lain','1-4','2016-01-03 04:21:14','2016-01-03 04:21:14'),(32,11,'Tidak melakukan apapun karena kemauan sendiri','10','2016-01-03 04:22:23','2016-01-03 04:22:23'),(33,11,'Dibujuk agar mau masuk pondok','5-9','2016-01-03 04:22:23','2016-01-03 04:22:23'),(34,11,'Agak dipaksa agar mau masuk pondok','1-4','2016-01-03 04:22:23','2016-01-03 04:22:23'),(35,12,'Saya akan bekerjasama dengan pondok agar dapat membuat anak saya betah','10','2016-01-03 04:23:02','2016-01-03 04:23:02'),(36,12,'Saya akan paksa anak saya tetap di pondok bagaimanapun','5-9','2016-01-03 04:23:02','2016-01-03 04:23:02'),(37,12,'Saya akan ikuti keinginan anak saya','1-4','2016-01-03 04:23:02','2016-01-03 04:23:02'),(38,13,'Selalu memenuhi bahkan selalu bertanya tentang kebutuhan yang diperlukan','10','2016-01-03 04:24:02','2016-01-03 04:24:02'),(39,13,'Dipenuhi bila ada informasi atau diminta','6-9','2016-01-03 04:24:02','2016-01-03 04:24:02'),(40,13,'Terkadang dipenuhi bila ada uang untuk membayarnya','1-5','2016-01-03 04:24:02','2016-01-03 04:24:02'),(41,13,'Tidak pernah memenuhi sama sekali','0','2016-01-03 04:24:02','2016-01-03 04:24:02'),(42,14,'Saya siap','10','2016-01-03 04:25:01','2016-01-03 04:25:01'),(43,14,'Saya siap tapi dengan tempo yang lebih lama','5-9','2016-01-03 04:25:01','2016-01-03 04:25:01'),(44,14,'Saya mau minta keringanan dari pondok','1-4','2016-01-03 04:25:01','2016-01-03 04:25:01'),(45,15,'Saya siap','10','2016-01-03 04:26:06','2016-01-03 04:26:06'),(46,15,'Saya siap tapi tergantung kondisi keuangan','5-9','2016-01-03 04:26:06','2016-01-03 04:26:06'),(47,15,'Saya akan bayar kalau ada uang atau dibayar dengan dirapel','1-4','2016-01-03 04:26:06','2016-01-03 04:26:06'),(48,16,'Saya setuju','10','2016-01-03 04:27:12','2016-01-03 04:27:12'),(49,16,'Saya setuju dengan beberapa pertimbangan','5-9','2016-01-03 04:27:12','2016-01-03 04:27:12'),(50,16,'Saya lihat kondisi dan keadaan dulu kedepannya','1-4','2016-01-03 04:27:12','2016-01-03 04:27:12'),(51,17,'Saya siap menerima kebijakan pondok pada anak saya','10','2016-01-03 04:28:11','2016-01-03 04:28:11'),(52,17,'Saya akan bekerjasama dengan pondok agar anak saya tetap di pondok','5-9','2016-01-03 04:28:11','2016-01-03 04:28:11'),(53,17,'Saya akan paksa anak tetap di pondok','1-4','2016-01-03 04:28:11','2016-01-03 04:28:11'),(54,18,'Saya akan menyampaikan kepada pihak yang berwenang dengan bijak','10','2016-01-03 04:29:12','2016-01-03 04:29:12'),(55,18,'Saya akan minta agar kekurangan tersebut untuk segera diperbaiki','5-9','2016-01-03 04:29:12','2016-01-03 04:29:12'),(56,18,'Saya minta segera diperbaiki dan akan menuntut bila tetap tidak berubah','1-4','2016-01-03 04:29:12','2016-01-03 04:29:12'),(57,19,'Saya sangat setuju','10','2016-01-03 04:30:17','2016-01-03 04:30:17'),(58,19,'Saya akan pertimbangkan dulu dengan keadaan','5-9','2016-01-03 04:30:17','2016-01-03 04:30:17'),(59,19,'Saya akan menolak karena tidak sesuai dengan hati nurani','1-4','2016-01-03 04:30:17','2016-01-03 04:30:17'),(60,20,'Tidak merokok tidak narkoba punya prestasi','9-10','2016-01-03 04:32:11','2016-01-03 04:32:11'),(61,20,'Tidak merokok tidak narkoba tidak punya prestasi','7-8','2016-01-03 04:32:11','2016-01-03 04:32:11'),(62,20,'Pernah merokok tapi sudah berhenti','5-6','2016-01-03 04:32:11','2016-01-03 04:32:11'),(63,20,'Masih merokok','4','2016-01-03 04:32:11','2016-01-03 04:32:11'),(64,20,'Pecandu  merokok dan belum berhenti','3','2016-01-03 04:32:11','2016-01-03 04:32:11'),(65,20,'Terlibat dalam kegiatan geng motor (merokok, narkotika,   kekerasan)','2','2016-01-03 04:32:11','2016-01-03 04:32:11'),(66,20,'Pernah dikeluarkan sekolah sebelumnya karena melakukan pelanggaran berat.','1','2016-01-03 04:32:11','2016-01-03 04:32:11'),(67,20,'Pernah dikeluarkan dari sekolah sebelumnya karena terlibat kasus kriminal','0','2016-01-03 04:32:11','2016-01-03 04:32:11'),(68,21,'Tidak pernah sama sekali','10','2016-01-03 04:33:25','2016-01-03 04:33:25'),(69,21,'Terkadang kalau hari libur atau sesekali','6-9','2016-01-03 04:33:25','2016-01-03 04:33:25'),(70,21,'Sering tapi waktunya tidak lama','1-5','2016-01-03 04:33:25','2016-01-03 04:33:25'),(71,21,'Sering sekali hampir setiap waktu','0','2016-01-03 04:33:25','2016-01-03 04:33:25'),(72,22,'Tidak pernah sama sekali','10','2016-01-03 04:34:30','2016-01-03 04:34:30'),(73,22,'Terkadang kalau hari libur atau sesekali','6-9','2016-01-03 04:34:30','2016-01-03 04:34:30'),(74,22,'Sering tapi waktunya tidak lama','1-5','2016-01-03 04:34:30','2016-01-03 04:34:30'),(75,22,'Sering sekali hampir setiap waktu','0','2016-01-03 04:34:30','2016-01-03 04:34:30'),(76,23,'Tidak ada sama sekali','10','2016-01-03 04:35:32','2016-01-03 04:35:32'),(77,23,'Dulu pernah tapi sudah tidak muncul lagi','7-9','2016-01-03 04:35:32','2016-01-03 04:35:32'),(78,23,'Terkadang suka kambuh','4-6','2016-01-03 04:35:32','2016-01-03 04:35:32'),(79,23,'Ada dan masih suka kambuh','1-3','2016-01-03 04:35:32','2016-01-03 04:35:32'),(80,24,'Shalat berjamaah dan suka mengajak anak sholat/berjamaah','10','2016-01-03 04:36:36','2016-01-03 04:36:36'),(81,24,'Shalat berjamaah dan memaksa anak untuk sholat/berjamaah','6-9','2016-01-03 04:36:36','2016-01-03 04:36:36'),(82,24,'Shalat di rumah dan mengajak anak meskipun tidak mau','1-5','2016-01-03 04:36:36','2016-01-03 04:36:36'),(83,24,'Shalat di rumah dan tidak mengajak anak untuk sholat','0','2016-01-03 04:36:36','2016-01-03 04:36:36'),(84,25,'Sering ikut pengajian dan suka mengajak anak','10','2016-01-03 04:37:32','2016-01-03 04:37:32'),(85,25,'Kadang-kadang ikut pengajian dan mengajak anak','6-9','2016-01-03 04:37:32','2016-01-03 04:37:32'),(86,25,'Pernah ikut pengajian sesekali dan tidak mengajak anak','1-5','2016-01-03 04:37:33','2016-01-03 04:37:33'),(87,25,'Tidak pernah ikut pengajian dan tidak pernah mengajak','0','2016-01-03 04:37:33','2016-01-03 04:37:33');
/*!40000 ALTER TABLE `jawaban_wawancara_orangtua_calon_santri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis_dokumen_psb`
--

DROP TABLE IF EXISTS `jenis_dokumen_psb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_dokumen_psb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_dokumen_psb`
--

LOCK TABLES `jenis_dokumen_psb` WRITE;
/*!40000 ALTER TABLE `jenis_dokumen_psb` DISABLE KEYS */;
/*!40000 ALTER TABLE `jenis_dokumen_psb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis_inventaris`
--

DROP TABLE IF EXISTS `jenis_inventaris`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_inventaris` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_inventaris`
--

LOCK TABLES `jenis_inventaris` WRITE;
/*!40000 ALTER TABLE `jenis_inventaris` DISABLE KEYS */;
INSERT INTO `jenis_inventaris` VALUES (1,'TA','Tanah','-'),(2,'GD','Gedung','Asset bangunan gedung'),(3,'PM','Peralatan Mesin','Peralatan mesin dan elektronik'),(4,'JI','Jalan - Irigasi - Jaringan','Jalan, listrik, internet, saluran air, dsb'),(5,'RU','Ruangan','-'),(6,'LL','Aset Tetap Lainnya',''),(7,'BRG','Barang','-'),(8,'ATK','Alat Tulis Kantor','-'),(9,'HP','Habis Pakai','Barang habis pakai semua kategori');
/*!40000 ALTER TABLE `jenis_inventaris` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenis_ujian`
--

DROP TABLE IF EXISTS `jenis_ujian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenis_ujian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bobot` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_ujian`
--

LOCK TABLES `jenis_ujian` WRITE;
/*!40000 ALTER TABLE `jenis_ujian` DISABLE KEYS */;
INSERT INTO `jenis_ujian` VALUES (1,'TGS','Tugas Harian',1),(2,'UL','Ulangan Harian',2),(3,'UTS','Ujian Tengah Semester',3),(4,'UAS','Ujian Akhir Semester',4),(5,'US','Ujian Sekolah',5),(6,'UN','Ujian Nasional',6);
/*!40000 ALTER TABLE `jenis_ujian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `jenjang`
--

DROP TABLE IF EXISTS `jenjang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `jenjang` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenjang`
--

LOCK TABLES `jenjang` WRITE;
/*!40000 ALTER TABLE `jenjang` DISABLE KEYS */;
INSERT INTO `jenjang` VALUES (1,'PAUD','Pendidikan Anak Usia Dini','2015-12-03 03:27:13','2015-12-03 03:27:13'),(2,'TK','Taman Kanak-Kanak','2015-12-03 03:27:30','2015-12-03 03:27:30'),(3,'SD','Sekolah Dasar','2015-12-03 03:27:41','2015-12-03 03:27:41'),(4,'SMP','Sekolah Menengah Pertama','2015-12-03 03:27:56','2015-12-03 03:27:56'),(5,'SMA','Sekolah Menengah Atas','2015-12-03 03:28:09','2015-12-03 03:28:25');
/*!40000 ALTER TABLE `jenjang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kalender_akademik`
--

DROP TABLE IF EXISTS `kalender_akademik`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kalender_akademik` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ta_id` int(10) unsigned NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `kegiatan` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `warna` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kalender_akademik`
--

LOCK TABLES `kalender_akademik` WRITE;
/*!40000 ALTER TABLE `kalender_akademik` DISABLE KEYS */;
INSERT INTO `kalender_akademik` VALUES (1,2,'2015-09-09','2015-09-12','Ujian Tengah Semester','yellow','2015-11-29 03:32:41','2015-11-29 03:32:41'),(2,2,'2015-12-01','2015-12-10','Ujian Akhir Semester','blue','2015-11-29 03:33:58','2015-11-29 03:33:58');
/*!40000 ALTER TABLE `kalender_akademik` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `karyawan`
--

DROP TABLE IF EXISTS `karyawan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `karyawan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nik` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kota_asal` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` tinyint(4) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nikah` tinyint(1) NOT NULL,
  `jml_anak` smallint(6) NOT NULL,
  `gol_darah` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `agama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `guru` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `karyawan`
--

LOCK TABLES `karyawan` WRITE;
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
INSERT INTO `karyawan` VALUES (1,'123456','Bagas Udi sahsangka','GUnungpati','Semarang','udibagas@gmail.com','0218888','Semarang','1987-04-01',1,'2015-11-24 08:16:20','2015-12-02 07:59:43','1448549024-loco.jpg',1,1,'A','IA','',1),(2,'65566','Dewiyati Prayitna Putri','Tembarak','Temanggung','putri@gmail.com','087767','Temanggung','1988-01-03',0,'2015-11-24 08:17:34','2015-12-02 08:00:04','1448546577-bunga1.jpg',1,1,'O','IA','',1),(3,'7656776567','Tubagus Arifyanto','Kalisari','Jakarta','bagus@lintasmandiri.net','088887676575','Jakarta','1981-09-09',1,'2015-11-26 09:17:02','2015-12-02 08:01:59','1448554622-ny.jpg',1,2,'A','IA','',1),(4,'gewgw','qwfweg','gergeg','ferfre','gerge@gergr.com','grege','gewgw','1987-09-09',0,'2015-11-28 05:36:06','2015-12-04 06:46:01','1448714166-2cgzh29.jpg',1,1,'A','IA','',0);
/*!40000 ALTER TABLE `karyawan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kategori_buku`
--

DROP TABLE IF EXISTS `kategori_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kategori_buku` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_buku`
--

LOCK TABLES `kategori_buku` WRITE;
/*!40000 ALTER TABLE `kategori_buku` DISABLE KEYS */;
INSERT INTO `kategori_buku` VALUES (1,'PKT','Buku Paket',''),(2,'MJ','Majalah','');
/*!40000 ALTER TABLE `kategori_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas`
--

DROP TABLE IF EXISTS `kelas`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ta_id` int(10) unsigned NOT NULL,
  `tingkat_id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wali_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `ruang_id` int(10) unsigned NOT NULL,
  `jenjang_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
INSERT INTO `kelas` VALUES (1,3,1,'I A Ikhwan',2,'2015-11-25 08:47:23','2015-12-03 03:43:39',1,3),(2,2,1,'I A Akhwat',1,'2015-11-25 08:47:59','2015-12-03 03:43:56',2,3);
/*!40000 ALTER TABLE `kelas` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `kelas_siswa`
--

DROP TABLE IF EXISTS `kelas_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `kelas_siswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kelas_id` int(10) unsigned NOT NULL,
  `siswa_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas_siswa`
--

LOCK TABLES `kelas_siswa` WRITE;
/*!40000 ALTER TABLE `kelas_siswa` DISABLE KEYS */;
INSERT INTO `kelas_siswa` VALUES (2,1,2,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(4,1,1,'0000-00-00 00:00:00','0000-00-00 00:00:00'),(5,1,3,'0000-00-00 00:00:00','0000-00-00 00:00:00');
/*!40000 ALTER TABLE `kelas_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `keluarga_karyawan`
--

DROP TABLE IF EXISTS `keluarga_karyawan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `keluarga_karyawan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(10) unsigned NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hub_keluarga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jns_kelamin` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tempat_lahir` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keluarga_karyawan`
--

LOCK TABLES `keluarga_karyawan` WRITE;
/*!40000 ALTER TABLE `keluarga_karyawan` DISABLE KEYS */;
INSERT INTO `keluarga_karyawan` VALUES (1,2,'Bagas Udi Sahsangka','Suami',1,0,'2015-11-26 07:36:40','2015-11-26 07:41:11','','0000-00-00'),(2,2,'Yasmina Hafshah','Anak',0,0,'2015-11-26 07:36:59','2015-11-26 07:36:59','','0000-00-00'),(3,2,'Prayitno','Ayah',1,0,'2015-11-26 07:37:14','2015-11-26 07:38:02','','0000-00-00'),(4,2,'Suyanti','Ibu',0,0,'2015-11-26 07:38:26','2015-11-26 07:38:26','','0000-00-00'),(6,1,'Yasmina Hafshah','Anak',0,1,'2015-11-26 07:47:25','2015-11-28 03:18:47','Temanggung','2013-05-01'),(7,1,'Dewiyati Prayitna Putri','Istri',0,1,'2015-11-26 07:47:38','2015-11-28 03:19:04','','0000-00-00'),(8,1,'Slamet Suryadi','Ayah',1,1,'2015-11-26 07:47:53','2015-11-28 03:19:13','','0000-00-00'),(9,1,'Endang Praseti','Ibu',0,1,'2015-11-26 07:48:11','2015-11-28 03:19:24','','0000-00-00');
/*!40000 ALTER TABLE `keluarga_karyawan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `mapel`
--

DROP TABLE IF EXISTS `mapel`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `mapel` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapel`
--

LOCK TABLES `mapel` WRITE;
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
INSERT INTO `mapel` VALUES (1,'TJ','Tajwiddd','2015-11-24 15:15:34','2015-11-24 15:16:05'),(2,'ADB','Adab','2015-11-24 15:16:18','2015-11-24 15:16:18'),(3,'MTK','Matematika','2015-11-28 04:49:16','2015-11-28 04:49:16'),(4,'BIND','Bahasa Indonesia','2015-11-28 04:49:27','2015-11-28 04:49:27'),(5,'BING','Bahasa Inggris','2015-11-28 04:49:41','2015-11-28 04:49:41'),(6,'BA','Bahasa Arab','2015-11-28 04:49:51','2015-11-28 04:49:51'),(7,'IPA','Ilmu Pengetahuan Alam','2015-11-28 04:50:01','2015-11-28 04:50:01'),(8,'IPS','Ilmu Pengetahuan SOsial','2015-11-28 04:50:14','2015-11-28 04:50:14');
/*!40000 ALTER TABLE `mapel` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_11_24_143135_create_table_karyawan',2),('2015_11_24_153515_create_tahun_ajaran',3),('2015_11_24_215003_create_table_bagian',4),('2015_11_24_220823_create_mapel',5),('2015_11_24_221942_create_table_wali',6),('2015_11_24_224016_create_table_siswa',7),('2015_11_25_151335_create_kelas',8),('2015_11_25_151659_create_tingkat',9),('2015_11_26_103528_create_riwayat_pendidikan',10),('2015_11_26_115348_create_riwayat_kepegawaian',11),('2015_11_26_135755_add_foto_on_karyawan',12),('2015_11_26_141035_create_kelaurga_karyawan',13),('2015_11_26_152732_add_field_karyawan',14),('2015_11_26_162930_add_fields_on_siswa',15),('2015_11_26_220227_rename_transportasi',16),('2015_11_27_222425_add_fields_riwayat_pendidikan',17),('2015_11_27_231853_create_riwayat_mengajar',18),('2015_11_28_092157_create_table_pengalaman_kerja',19),('2015_11_28_100429_add_lama_on_riwayat_pendidikian',20),('2015_11_28_101058_add_ttl_on_keluarga_karyawan',21),('2015_11_28_112314_create_guru_mapel',22),('2015_11_28_132411_add_guru_in_karyawan',23),('2015_11_28_133309_create_tablle_jabatan',24),('2015_11_28_220817_create_table_jenis_tagihan',25),('2015_11_29_061655_add_jenis_ujian',26),('2015_11_29_064255_create_jns_inventaris',27),('2015_11_29_071000_create_kattegori_buku',28),('2015_11_29_071904_create_tags_buku',29),('2015_11_29_085340_create_calender_akademik',30),('2015_11_29_134048_create_tbl_tanah',31),('2015_11_29_144049_create_inv_bangunan',32),('2015_11_30_002328_create_tbl_ruangan',33),('2015_11_30_132340_add_fields_on_wali',34),('2015_11_30_140323_add_ruang_on_kelas',35),('2015_11_30_141508_create_tbl_jadwal_pelajaran',36),('2015_12_01_130412_add_column_ayah_id_ibu_id_on_siswa',37),('2015_12_01_143938_create_kelas_siswa',38),('2015_12_02_125836_create_jampelajaran',39),('2015_12_02_142126_drop_dari_sampai_add_jam_id',40),('2015_12_03_101754_create_table_jenjang',41),('2015_12_03_103017_add_jenjang_on_tingkat',42),('2015_12_03_103947_add_jenjang_on_kelas',43),('2015_12_03_104706_add_jenjang_on_jadwal_pelajaran',44),('2015_12_03_123708_add_jenjang_on_jam_pelajaran',45),('2015_12_03_135748_create_jadwal_ujian',46),('2015_12_05_110059_create_calon_siswa',47),('2015_12_09_134433_update_table_psb',48),('2015_12_09_141723_change_jenjang_and_tingkat',49),('2015_12_09_141925_add_tahun_ajaran',50),('2015_12_09_144657_change_atas_nama_to_pemegang',51),('2015_12_09_145142_create_table_rekening',52),('2015_12_09_150722_change_rekening_tujuan',53),('2015_12_10_015040_add_email_on_ortu_calon_siswa',54),('2015_12_11_063533_add_verifikasi_wawancara_on_psb',55),('2015_12_11_070454_add_test_wawancara_on_psb',56),('2015_12_11_084341_change_transportasion_on_alamat',56),('2015_12_11_160818_change_jenis_id_on_dokumen',57),('2015_12_12_175122_add_role_on_users',57),('2015_12_16_085106_add_user_id_on_psb',57),('2015_12_18_111953_add_dokumen_on_psb',57),('2015_12_20_035717_bikin_statuses',57),('2015_12_20_154551_add_alamat_on_asal_sekolah',57),('2015_12_21_053520_add_status_progress',57),('2015_12_21_150035_add_intern_on_psb',57),('2015_12_21_195839_add_tanggal_daftar_on_psb',57),('2015_12_30_115246_create_form_wawancara_calon_santri',57),('2016_01_02_154205_create_jawaban_wawancara_calon_santri',58);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai_ujian`
--

DROP TABLE IF EXISTS `nilai_ujian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai_ujian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ta_id` int(10) unsigned NOT NULL,
  `jenjang_id` int(10) unsigned NOT NULL,
  `tingkat_id` int(10) unsigned NOT NULL,
  `jenis_id` int(10) unsigned NOT NULL,
  `mapel_id` int(10) unsigned NOT NULL,
  `siswa_id` int(10) unsigned NOT NULL,
  `nilai` decimal(3,2) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai_ujian`
--

LOCK TABLES `nilai_ujian` WRITE;
/*!40000 ALTER TABLE `nilai_ujian` DISABLE KEYS */;
/*!40000 ALTER TABLE `nilai_ujian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai_wawancara_calon_santri`
--

DROP TABLE IF EXISTS `nilai_wawancara_calon_santri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai_wawancara_calon_santri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `siswa_id` int(10) unsigned NOT NULL,
  `pertanyaan_id` int(10) unsigned NOT NULL,
  `nilai` smallint(5) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jawaban_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai_wawancara_calon_santri`
--

LOCK TABLES `nilai_wawancara_calon_santri` WRITE;
/*!40000 ALTER TABLE `nilai_wawancara_calon_santri` DISABLE KEYS */;
INSERT INTO `nilai_wawancara_calon_santri` VALUES (1,36,1,8,'2016-01-03 14:43:18','2016-01-03 14:43:18',51),(2,36,7,8,'2016-01-03 14:43:18','2016-01-03 14:43:18',46),(3,36,12,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',57),(4,36,18,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',62),(5,36,23,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',66),(6,36,32,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',74),(7,36,34,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',78),(8,36,40,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',82),(9,36,45,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',86),(10,36,46,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',90),(11,36,52,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',94),(12,36,56,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',100),(13,36,60,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',104),(14,36,66,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',110),(15,36,71,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',115),(16,36,75,8,'2016-01-03 14:43:19','2016-01-03 14:43:19',119);
/*!40000 ALTER TABLE `nilai_wawancara_calon_santri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `nilai_wawancara_orangtua_calon_santri`
--

DROP TABLE IF EXISTS `nilai_wawancara_orangtua_calon_santri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `nilai_wawancara_orangtua_calon_santri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `siswa_id` int(10) unsigned NOT NULL,
  `pertanyaan_id` int(10) unsigned NOT NULL,
  `nilai` smallint(5) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jawaban_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `nilai_wawancara_orangtua_calon_santri`
--

LOCK TABLES `nilai_wawancara_orangtua_calon_santri` WRITE;
/*!40000 ALTER TABLE `nilai_wawancara_orangtua_calon_santri` DISABLE KEYS */;
INSERT INTO `nilai_wawancara_orangtua_calon_santri` VALUES (1,36,1,6,'2016-01-03 15:29:53','2016-01-03 15:29:53',3),(2,36,2,6,'2016-01-03 15:29:53','2016-01-03 15:29:53',4),(3,36,3,6,'2016-01-03 15:29:53','2016-01-03 15:29:53',7),(4,36,4,6,'2016-01-03 15:29:53','2016-01-03 15:29:53',10),(5,36,5,6,'2016-01-03 15:29:53','2016-01-03 15:29:53',13),(6,36,6,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',16),(7,36,7,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',19),(8,36,8,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',22),(9,36,9,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',26),(10,36,10,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',29),(11,36,11,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',32),(12,36,12,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',35),(13,36,13,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',38),(14,36,14,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',42),(15,36,15,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',45),(16,36,16,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',48),(17,36,17,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',51),(18,36,18,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',54),(19,36,19,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',57),(20,36,20,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',60),(21,36,21,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',68),(22,36,22,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',72),(23,36,23,6,'2016-01-03 15:29:54','2016-01-03 15:29:54',76),(24,36,24,6,'2016-01-03 15:29:55','2016-01-03 15:29:55',80),(25,36,25,6,'2016-01-03 15:29:55','2016-01-03 15:29:55',84);
/*!40000 ALTER TABLE `nilai_wawancara_orangtua_calon_santri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orang_tua_calon_siswa`
--

DROP TABLE IF EXISTS `orang_tua_calon_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orang_tua_calon_siswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calon_siswa_id` int(10) unsigned NOT NULL,
  `hubungan` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `tahun_lahir` smallint(5) unsigned NOT NULL,
  `pendidikan` smallint(5) unsigned NOT NULL,
  `pekerjaan` smallint(5) unsigned NOT NULL,
  `penghasilan_bulanan` tinyint(1) NOT NULL,
  `alamat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rt` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `rw` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `kode_pos` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `kelurahan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `kecamatan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `provinsi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `telepon_rumah` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `agama` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `is_wali` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `email` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=72 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orang_tua_calon_siswa`
--

LOCK TABLES `orang_tua_calon_siswa` WRITE;
/*!40000 ALTER TABLE `orang_tua_calon_siswa` DISABLE KEYS */;
INSERT INTO `orang_tua_calon_siswa` VALUES (1,1,'Wali','Bagas Udi Sahsangka',1987,5,6,0,'Kel. Kandri','01','01','50222','Kandri','Gunung Pati','Semarang','Jawa Tengah','0888888','98989798','Islam',1,'2015-12-09 09:14:24','2015-12-09 09:14:24',''),(2,2,'Wali','Bagas Udi Sahsangka',1987,5,6,0,'Kel. Kandri','01','01','50222','Kandri','Gunung Pati','Semarang','Jawa Tengah','0888888','98989798','Islam',1,'2015-12-09 09:53:15','2015-12-09 09:53:15',''),(3,3,'Wali','Slamet',1956,3,10,0,'Jalan Kandri No. 111','01','01','50222','Kandri','Gunung Pati','Semarang','Jawa Tengah','876767','085776884114','Islam',1,'2015-12-09 18:46:16','2015-12-09 18:46:16',''),(5,5,'Wali','Bagas',1987,3,2,2,'jakarta','006','009','67565','jakarta','jakarta','jnfckwjfw','fwefewf','fwefewf','ewfwef','Islam',0,'2015-12-10 10:41:50','2015-12-10 10:41:50','dfwef@ferfer.com'),(6,6,'Wali','Bagas',1987,3,2,2,'jakarta','006','009','67565','jakarta','jakarta','jnfckwjfw','fwefewf','fwefewf','ewfwef','Islam',0,'2015-12-10 10:45:27','2015-12-10 13:43:10','dfwef@ferfer.com'),(7,6,'Wali','Bagas',1987,3,2,2,'jakarta','006','009','67565','jakarta','jakarta','jnfckwjfw','fwefewf','fwefewf','ewfwef','Islam',0,'2015-12-10 13:33:21','2015-12-10 13:43:10','dfwef@ferfer.com'),(8,6,'Wali','Bagas',1987,3,2,2,'jakarta','006','009','67565','jakarta','jakarta','jnfckwjfw','fwefewf','fwefewf','ewfwef','Islam',0,'2015-12-10 13:33:21','2015-12-10 13:43:10','dfwef@ferfer.com'),(9,6,'Wali','Bagas',1987,3,2,2,'jakarta','006','009','67565','jakarta','jakarta','jnfckwjfw','fwefewf','fwefewf','ewfwef','Islam',0,'2015-12-10 13:37:29','2015-12-10 13:43:10','dfwef@ferfer.com'),(10,6,'Wali','Bagas',1987,3,2,2,'jakarta','006','009','67565','jakarta','jakarta','jnfckwjfw','fwefewf','fwefewf','ewfwef','Islam',0,'2015-12-10 13:37:29','2015-12-10 13:43:10','dfwef@ferfer.com'),(11,6,'Wali','Bagas',1987,3,2,2,'jakarta','006','009','67565','jakarta','jakarta','jnfckwjfw','fwefewf','fwefewf','ewfwef','Islam',0,'2015-12-10 13:41:36','2015-12-10 13:43:10','dfwef@ferfer.com'),(12,6,'Wali','Bagas',1987,3,2,2,'jakarta','006','009','67565','jakarta','jakarta','jnfckwjfw','fwefewf','fwefewf','ewfwef','Islam',0,'2015-12-10 13:41:36','2015-12-10 13:43:10','dfwef@ferfer.com'),(13,6,'Ayah','Bagas',1987,3,2,2,'jakarta','006','009','67565','jakarta','jakarta','jnfckwjfw','fwefewf','fwefewf','ewfwef','Islam',0,'2015-12-10 13:43:11','2015-12-10 13:43:11','dfwef@ferfer.com'),(14,6,'Ibu','Putri',1988,9,2,0,'jakarta','006','009','67565','jakarta','jakarta','jnfckwjfw','fwefewf','fwefewf','ewfwef','Islam',0,'2015-12-10 13:43:11','2015-12-10 13:43:11','dfwef@ferfer.com'),(21,9,'Wali','efhjwevfhjv',1986,4,3,3,'kljdhwge','jgh','ghf','ghfhg','ghfghf','fghfgh','fghf','hgf','ghf','ghf','Islam',0,'2015-12-10 23:08:12','2015-12-11 06:26:24','hgf@fr4ef43.com'),(22,9,'Ayah','efhjwevfhjv',1986,4,3,3,'kljdhwge','jgh','ghf','ghfhg','ghfghf','fghfgh','fghf','hgf','ghf','ghf','Islam',0,'2015-12-10 23:08:12','2015-12-11 06:26:24','hgf@fr4ef43.com'),(23,9,'Ibu','Yanti',1989,4,1,0,'kljdhwge','jgh','ghf','ghfhg','ghfghf','fghfgh','fghf','hgf','ghf','ghf','Islam',0,'2015-12-10 23:08:12','2015-12-11 06:26:24','hgf@fr4ef43.com'),(30,12,'Wali','rgrg',1987,2,2,2,'wdwfq','dqw','fqw','fqwfw','fqwfq','fwqfwqf','qwfwqf','fqwfqw','qwfqwf','fwqfqwf','Islam',0,'2015-12-11 07:22:02','2015-12-11 07:28:16','dwqd@fwef.com'),(31,12,'Ayah','rgrg',1987,2,2,2,'wdwfq','dqw','fqw','fqwfw','fqwfq','fwqfwqf','qwfwqf','fqwfqw','qwfqwf','fwqfqwf','Islam',0,'2015-12-11 07:22:02','2015-12-11 07:28:16','dwqd@fwef.com'),(32,12,'Ibu','ibu kami kartini',1987,2,2,2,'wdwfq','dqw','fqw','fqwfw','fqwfq','fwqfwqf','qwfwqf','fqwfqw','qwfqwf','fwqfqwf','Islam',0,'2015-12-11 07:22:02','2015-12-11 07:28:16','dwqd@fwef.com'),(33,13,'Wali','fwefew',1977,9,8,3,'fwefwe','few','fqe','fewfw','ewfwef','fwefwe','fwefew','fwefw','fwefwe','fwefwe','Islam',0,'2015-12-11 07:37:20','2015-12-11 09:37:52','fewfwe@fwefe.com'),(34,13,'Ayah','fwefew',1977,9,8,3,'fwefwe','few','fqe','fewfw','ewfwef','fwefwe','fwefew','fwefw','fwefwe','fwefwe','Islam',0,'2015-12-11 07:37:20','2015-12-11 09:37:52','fewfwe@fwefe.com'),(35,13,'Ibu','Nama Ibu saya',1977,9,1,0,'fwefwe','few','fqe','fewfw','ewfwef','fwefwe','fwefew','fwefw','fwefwe','fwefwe','Islam',0,'2015-12-11 07:37:20','2015-12-11 09:37:53','fewfwe@fwefe.com'),(36,14,'Wali','fsf',1988,9,1,0,'dgfrb','1','2','gr','vgfrtg','frf','frdef','grg','12568','0853789444','Islam',0,'2015-12-11 13:28:10','2015-12-11 13:35:18','dypp@yahoo.com'),(37,14,'Ayah','fsf',1988,9,1,0,'dgfrb','1','2','gr','vgfrtg','frf','frdef','grg','12568','0853789444','Islam',0,'2015-12-11 13:28:10','2015-12-11 13:35:19','dypp@yahoo.com'),(38,14,'Ibu','Nama Ibu',1988,9,1,0,'dgfrb','1','2','gr','vgfrtg','frf','frdef','grg','12568','0853789444','Islam',0,'2015-12-11 13:28:10','2015-12-11 13:35:19','dypp@yahoo.com'),(39,15,'Wali','Slamet',1967,5,5,3,'kandri','01','01','50111','kandri','Gunungati','semarang','jawa tengah','767866767','6567567','Islam',0,'2015-12-11 23:37:06','2015-12-11 23:39:38','ada@dewdfw.com'),(40,15,'Ayah','Slamet',1967,5,5,3,'kandri','01','01','50111','kandri','Gunungati','semarang','jawa tengah','767866767','6567567','Islam',0,'2015-12-11 23:37:07','2015-12-11 23:39:38','ada@dewdfw.com'),(41,15,'Ibu','Endang',1967,5,1,0,'kandri','01','01','50111','kandri','Gunungati','semarang','jawa tengah','767866767','6567567','Islam',0,'2015-12-11 23:37:07','2015-12-11 23:39:38','ada@dewdfw.com'),(42,16,'Wali','Bagas',1987,2,6,4,'fbdfbdfb','001','002','78567','njbn je','nbjbjhbj','jkhbkbj','jhbjhb','jhbjhb','hbjhb','Islam',0,'2015-12-16 01:33:29','2015-12-16 01:33:29','jhbj@dewfw.com'),(43,16,'Ayah','Bagas',1987,2,6,4,'fbdfbdfb','001','002','78567','njbn je','nbjbjhbj','jkhbkbj','jhbjhb','jhbjhb','hbjhb','Islam',0,'2015-12-16 01:33:29','2015-12-16 01:33:29','jhbj@dewfw.com'),(44,16,'Ibu','Nama Ibu',1987,2,6,4,'fbdfbdfb','001','002','78567','njbn je','nbjbjhbj','jkhbkbj','jhbjhb','jhbjhb','hbjhb','Islam',0,'2015-12-16 01:33:29','2015-12-16 01:33:29','jhbj@dewfw.com'),(48,18,'Wali','Bagas',1987,2,6,4,'fbdfbdfb','001','002','78567','njbn je','nbjbjhbj','jkhbkbj','jhbjhb','jhbjhb','hbjhb','Islam',0,'2015-12-16 01:35:00','2015-12-16 01:35:00','jhbj@dewfw.com'),(49,18,'Ayah','Bagas',1987,2,6,4,'fbdfbdfb','001','002','78567','njbn je','nbjbjhbj','jkhbkbj','jhbjhb','jhbjhb','hbjhb','Islam',0,'2015-12-16 01:35:00','2015-12-16 01:35:00','jhbj@dewfw.com'),(50,18,'Ibu','Nama Ibu',1987,2,6,4,'fbdfbdfb','001','002','78567','njbn je','nbjbjhbj','jkhbkbj','jhbjhb','jhbjhb','hbjhb','Islam',0,'2015-12-16 01:35:00','2015-12-16 01:35:00','jhbj@dewfw.com'),(51,19,'Wali','jhghughug',1987,3,1,3,'cewgerg','009','008','hbhjb','jhbjkhbk','jhbhjb','hjbhjb','jhbjhb','jhbjhb','jhbjhb','Islam',0,'2015-12-16 02:57:01','2015-12-16 02:57:01','jhbjhb@wedwe.com'),(52,19,'Ayah','jhghughug',1987,3,1,3,'cewgerg','009','008','hbhjb','jhbjkhbk','jhbhjb','hjbhjb','jhbjhb','jhbjhb','jhbjhb','Islam',0,'2015-12-16 02:57:01','2015-12-16 02:57:01','jhbjhb@wedwe.com'),(53,19,'Ibu','Nama Ibu',1987,3,1,3,'cewgerg','009','008','hbhjb','jhbjkhbk','jhbhjb','hjbhjb','jhbjhb','jhbjhb','jhbjhb','Islam',0,'2015-12-16 02:57:01','2015-12-16 02:57:01','jhbjhb@wedwe.com'),(54,20,'Wali','jhvwfdeh',1988,2,2,2,'dwegfuw','fhw','dge','dwefw','duygewfu','dquyfgeug','fewfew','fwefw','fwefw','fwefw','Islam',0,'2015-12-16 03:07:11','2015-12-16 03:07:11','fwef@fwefwe.com'),(55,20,'Ayah','jhvwfdeh',1988,2,2,2,'dwegfuw','fhw','dge','dwefw','duygewfu','dquyfgeug','fewfew','fwefw','fwefw','fwefw','Islam',0,'2015-12-16 03:07:11','2015-12-16 03:07:11','fwef@fwefwe.com'),(56,20,'Ibu','Nama Ibu',1988,2,2,2,'dwegfuw','fhw','dge','dwefw','duygewfu','dquyfgeug','fewfew','fwefw','fwefw','fwefw','Islam',0,'2015-12-16 03:07:11','2015-12-16 03:07:11','fwef@fwefwe.com'),(57,21,'Wali','dewfw',1977,2,2,2,'jkjgj','jkh','jhj','kjhjk','kjhjkh','jkhjkh','jkhkjh','jkhkjh','kjhkjh','kjhkj','Islam',0,'2015-12-16 03:14:52','2015-12-16 03:23:24','jkhkjh@dewfw.com'),(58,21,'Ayah','dewfw',1977,2,2,2,'jkjgj','jkh','jhj','kjhjk','kjhjkh','jkhjkh','jkhkjh','jkhkjh','kjhkjh','kjhkj','Islam',0,'2015-12-16 03:14:52','2015-12-16 03:23:24','jkhkjh@dewfw.com'),(59,21,'Ibu','Nama Ibu',1977,2,2,2,'jkjgj','jkh','jhj','kjhjk','kjhjkh','jkhjkh','jkhkjh','jkhkjh','kjhkjh','kjhkj','Islam',0,'2015-12-16 03:14:52','2015-12-16 03:23:25','jkhkjh@dewfw.com'),(62,33,'Wali','grtgrt',1987,2,10,3,'frege','ger','gre','gerge','gergre','greger','greg','gergre','gerger','gerg','Islam',0,'2015-12-18 04:42:22','2015-12-18 04:42:22','greger'),(63,33,'Ayah','grtgrt',1987,2,10,3,'frege','ger','gre','gerge','gergre','greger','greg','gergre','gerger','gerg','Islam',0,'2015-12-18 04:42:22','2015-12-18 04:42:22','greger@fref.com'),(64,33,'Ibu','gerg',1987,6,9,2,'gerger','ger','reg','gerge','gerger','gergre','gerger','greg','gerge','gerger','Islam',0,'2015-12-18 04:42:22','2015-12-18 04:42:22','gergre@freg.com'),(65,35,'Wali','prayit',1962,5,11,1,'tmg','2','3','56261','tbr','tbr','tmg','Jawa Tengah','','085123456','Islam',0,'2016-01-03 11:06:32','2016-01-03 11:06:32',''),(66,35,'Ayah','prayit',1962,5,11,1,'tmg','2','3','56261','tbr','tbr','tmg','Jawa Tengah','','085123456','Islam',0,'2016-01-03 11:06:32','2016-01-03 11:06:32',''),(67,35,'Ayah','yanti',1969,5,7,1,'tmg','2','3','56261','tbr','tbr','tmg','Jawa Tengah','','085123456','Islam',0,'2016-01-03 11:06:32','2016-01-03 11:06:32',''),(68,0,'Ayah','Yanti',1962,5,11,1,'tmg','2','3','56261','tbr','tbr','tmg','Jawa Tengah','','085123456','Islam',0,'2016-01-03 11:09:46','2016-01-03 11:09:46',''),(69,36,'Wali','ayah calon siswa',1987,2,2,1,'fwefwe','few','fwe','fwefe','fwef','ftyf','fwef','Jawa Barat','fwefwe','fewfew','Islam',0,'2016-01-03 12:04:03','2016-01-03 12:04:03','fwefw@fef.com'),(70,36,'Ayah','ayah calon siswa',1987,2,2,1,'fwefwe','few','fwe','fwefe','fwef','ftyf','fwef','Jawa Barat','fwefwe','fewfew','Islam',0,'2016-01-03 12:04:03','2016-01-03 12:04:03','fwefw@fef.com'),(71,36,'Ibu','ibi calon siswa edited',1987,2,2,1,'fwefwe','few','fwe','fwefe','fwef','ftyf','fwef','Jawa Barat','fwefwe','fewfew','Islam',0,'2016-01-03 12:04:03','2016-01-03 12:10:48','fwefw@fef.com');
/*!40000 ALTER TABLE `orang_tua_calon_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengalaman_kerja`
--

DROP TABLE IF EXISTS `pengalaman_kerja`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pengalaman_kerja` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(10) unsigned NOT NULL,
  `institusi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tugas` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengalaman_kerja`
--

LOCK TABLES `pengalaman_kerja` WRITE;
/*!40000 ALTER TABLE `pengalaman_kerja` DISABLE KEYS */;
INSERT INTO `pengalaman_kerja` VALUES (1,1,'PT Kembang Kempis Rindu Kaya','2000-09-09','2002-09-09','supercisor','- kjhfewkjf\r\n- fwefw\r\n- fwefw\r\n- aaaaaa','2015-11-28 02:48:13','2015-11-28 02:54:52'),(2,1,'PT BKU','2006-09-09','2010-09-09','IT','apa aja','2015-11-28 02:59:35','2015-11-28 02:59:35');
/*!40000 ALTER TABLE `pengalaman_kerja` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `peserta_ujian`
--

DROP TABLE IF EXISTS `peserta_ujian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `peserta_ujian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ujian_id` int(10) unsigned NOT NULL,
  `ruangan_id` int(10) unsigned NOT NULL,
  `siswa_id` int(10) unsigned NOT NULL,
  `no_peserta` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `peserta_ujian`
--

LOCK TABLES `peserta_ujian` WRITE;
/*!40000 ALTER TABLE `peserta_ujian` DISABLE KEYS */;
/*!40000 ALTER TABLE `peserta_ujian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prestasi_calon_siswa`
--

DROP TABLE IF EXISTS `prestasi_calon_siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prestasi_calon_siswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `calon_siswa_id` int(10) unsigned NOT NULL,
  `tahun` smallint(5) unsigned NOT NULL,
  `lomba` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `juara_ke` tinyint(1) NOT NULL,
  `tingkat` tinyint(1) NOT NULL,
  `jenis` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestasi_calon_siswa`
--

LOCK TABLES `prestasi_calon_siswa` WRITE;
/*!40000 ALTER TABLE `prestasi_calon_siswa` DISABLE KEYS */;
INSERT INTO `prestasi_calon_siswa` VALUES (1,0,2001,'fef',3,1,3,'2015-12-11 07:54:48','2015-12-11 07:54:48'),(2,0,2002,'fefwe',3,3,2,'2015-12-11 07:54:48','2015-12-11 07:54:48'),(3,13,2001,'fewfew',1,2,3,'2015-12-11 07:58:30','2015-12-11 07:58:30'),(4,13,2002,'deferg',2,4,2,'2015-12-11 07:58:30','2015-12-11 07:58:30'),(5,14,1996,'njvnjdn',1,6,4,'2015-12-11 13:35:19','2015-12-11 13:35:19'),(6,15,1213,'dfvdf',1,1,1,'2015-12-11 23:39:38','2015-12-11 23:39:38'),(7,21,2001,'fbhegwh',1,1,1,'2015-12-16 03:23:25','2015-12-16 03:23:25'),(8,35,2007,'lcc',1,5,4,'2016-01-03 11:06:32','2016-01-03 11:06:32'),(9,35,2008,'sains',1,6,1,'2016-01-03 11:09:46','2016-01-03 11:09:46'),(11,36,2003,'jhbfgehjfe',2,3,2,'2016-01-03 12:10:48','2016-01-03 12:10:48'),(12,36,2014,'jhvgfherv',3,4,2,'2016-01-03 15:31:44','2016-01-03 15:31:44');
/*!40000 ALTER TABLE `prestasi_calon_siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `psb`
--

DROP TABLE IF EXISTS `psb`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `psb` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `jenjang` tinyint(1) NOT NULL,
  `tingkat` tinyint(1) NOT NULL,
  `step` tinyint(1) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tanggal_pembayaran` date NOT NULL,
  `bank_asal` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `rekening_asal` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pemegang_rekening_asal` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `metode_pembayaran` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `jumlah_pembayaran` double NOT NULL,
  `bukti_pembayaran` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `status_pembayaran` tinyint(1) NOT NULL,
  `waktu_verifikasi_pembayaran` datetime NOT NULL,
  `tahun_ajaran` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `rekening_tujuan_id` int(10) unsigned NOT NULL,
  `status_verifikasi_data` tinyint(1) NOT NULL,
  `waktu_verifikasi_data` datetime NOT NULL,
  `status_test` tinyint(1) NOT NULL,
  `waktu_test` datetime NOT NULL,
  `waktu_verifikasi_test` datetime NOT NULL,
  `status_wawancara` tinyint(1) NOT NULL,
  `waktu_wawancara` datetime NOT NULL,
  `user_id` int(10) unsigned NOT NULL,
  `rapor` tinyint(1) unsigned NOT NULL,
  `kk` tinyint(1) unsigned NOT NULL,
  `akta` tinyint(1) unsigned NOT NULL,
  `foto` tinyint(1) unsigned NOT NULL,
  `sk_sehat` tinyint(1) unsigned NOT NULL,
  `status_formulir` tinyint(1) unsigned NOT NULL,
  `status_berkas` tinyint(1) unsigned NOT NULL,
  `status_wawancara_ortu` tinyint(1) unsigned NOT NULL,
  `status_tkd` tinyint(1) unsigned NOT NULL,
  `status_penerimaan` tinyint(1) unsigned NOT NULL,
  `status_progress` smallint(5) unsigned NOT NULL,
  `intern` tinyint(1) unsigned NOT NULL,
  `tanggal_daftar` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=37 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `psb`
--

LOCK TABLES `psb` WRITE;
/*!40000 ALTER TABLE `psb` DISABLE KEYS */;
INSERT INTO `psb` VALUES (1,1,1,4,1,'','2015-12-09 09:14:24','2016-01-02 06:21:00','2015-12-20','BCA','1234545665','Bagas Udi Sahsangka','Intenet Banking',13000000,'',1,'2015-12-10 05:18:07','2016/2017',1,1,'2015-12-11 06:42:47',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(2,2,7,0,0,'','2015-12-09 09:53:15','2016-01-02 06:21:00','2015-12-20','BCA','1234545665','Bagas Udi Sahsangka','Transfer ATM',15000000,'',1,'2015-12-11 06:13:37','2016/2017',1,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(3,1,2,4,1,'','2015-12-09 18:46:16','2016-01-02 06:21:00','2015-12-12','MAndiri','765654455','Dewiyati Putri','SMS Banking',12000000,'',1,'2015-12-10 12:20:53','2016/2017',1,1,'2015-12-11 20:10:02',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(5,2,7,4,0,'','2015-12-10 10:41:50','2016-01-02 06:21:00','2015-10-12','CIMB Niaga','87567567','Bagas Udi Sahsangka','Transfer ATM',250000,'',1,'2015-12-17 21:23:58','2016/2017',2,1,'2015-12-17 21:43:36',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(6,2,7,4,0,'','2015-12-10 10:45:27','2016-01-02 06:21:00','2015-10-12','CIMB Niaga','87567567','Bagas Udi Sahsangka','Transfer ATM',250000,'',1,'2015-12-10 17:51:10','2016/2017',2,1,'2015-12-17 21:43:39',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(9,3,10,4,2,'','2015-12-10 23:08:12','2016-01-02 06:21:00','2015-12-09','kjbkjbk','kjbkbk','kjbkb','Transfer ATM',250000,'',1,'2015-12-11 06:08:31','2016/2017',2,1,'2015-12-11 06:56:10',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(12,2,7,4,2,'','2015-12-11 07:22:02','2016-01-02 06:21:00','2015-12-09','rgrgr','hrthr','hrthtrh','Transfer ATM',250000,'',1,'2015-12-11 14:26:32','2016/2017',1,1,'2015-12-18 08:07:23',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(13,3,10,4,1,'','2015-12-11 07:37:20','2016-01-02 06:21:00','2015-12-11','djhgewfg','jhgjhg','jhghjg','Transfer ATM',250000,'',1,'2015-12-11 14:37:44','2016/2017',2,1,'2015-12-11 23:43:23',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(14,3,10,4,1,'','2015-12-11 13:28:09','2016-01-02 06:21:00','2015-12-11','bca','123456','putri','Setor Tunai Bank',250000,'',1,'2015-12-11 20:28:48','2016/2017',1,1,'2015-12-11 20:36:38',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(15,2,7,4,1,'','2015-12-11 23:37:06','2016-01-02 06:21:00','2015-12-11','Mandiri','145656','Banagas ','Intenet Banking',250000,'',1,'2015-12-12 06:37:41','2016/2017',2,1,'2015-12-12 06:40:09',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(16,1,1,4,0,'','2015-12-16 01:33:29','2016-01-02 06:21:00','2015-12-15','Mandiri','756765765','Bagas Udi Sahsangka','Transfer ATM',250000,'',1,'2015-12-17 20:43:01','2016/2017',1,1,'2015-12-17 21:47:12',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(18,1,1,2,0,'','2015-12-16 01:35:00','2016-01-02 06:21:00','2015-12-15','Mandiri','756765765','Bagas Udi Sahsangka','Transfer ATM',250000,'',1,'2015-12-16 08:55:57','2016/2017',1,1,'2015-12-17 21:47:18',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(19,2,7,4,1,'','2015-12-16 02:57:01','2016-01-02 06:21:00','2015-12-16','jkjhghj','jhbhjbj','jhhjb','Setor Tunai Bank',250000,'',1,'2015-12-17 21:24:33','2016/2017',1,1,'2015-12-18 07:58:37',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(20,3,13,4,1,'','2015-12-16 03:07:11','2016-01-02 06:21:00','2015-12-10','Mandiri','675756567','Bagas Udi Sahsangka','Transfer ATM',250000,'',1,'2015-12-17 16:57:17','2016/2017',2,1,'2015-12-17 16:57:31',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(21,3,10,4,1,'','2015-12-16 03:14:52','2016-01-02 06:21:00','2015-12-10','CIMB Niaga','7656757','ghfgh','Transfer ATM',250000,'',1,'2015-12-16 10:19:14','2016/2017',1,1,'2015-12-16 10:24:36',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(22,3,13,4,1,'','2015-12-16 13:23:02','2016-01-02 06:21:00','2015-12-16','','','','Tunai',250000,'',1,'2015-12-17 21:24:58','2016/2017',0,1,'2015-12-17 21:34:50',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(24,5,14,4,1,'','2015-12-17 06:17:47','2016-01-02 06:21:00','2015-12-17','','','','Tunai',250000,'',1,'2015-12-17 21:26:07','2016/2017',0,1,'2015-12-18 08:38:36',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(25,2,7,2,0,'','2015-12-17 06:37:28','2016-01-02 06:21:00','2015-12-16','','','','Tunai',250000,'',1,'2015-12-17 13:37:59','2016/2017',0,1,'2015-12-18 08:08:59',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(27,1,1,4,1,'','2015-12-17 13:46:04','2016-01-02 06:21:00','2015-12-17','','','','Tunai',250000,'',1,'2015-12-17 20:46:56','2016/2017',0,1,'2015-12-17 21:34:28',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(30,1,1,4,1,'','2015-12-17 13:59:13','2016-01-02 06:21:00','2015-12-17','','','','Tunai',250000,'',1,'2015-12-17 21:01:52','2016/2017',0,1,'2015-12-17 21:43:13',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(31,4,14,4,2,'','2015-12-17 14:13:04','2016-01-02 06:21:00','2015-12-17','','','','Tunai',250000,'',1,'2015-12-17 21:13:41','2016/2017',0,1,'2015-12-17 21:43:56',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(32,4,14,4,1,'','2015-12-18 01:14:25','2016-01-02 06:21:00','2015-12-18','','','','Tunai',250000,'',1,'2015-12-18 08:14:57','2016/2017',0,1,'2015-12-18 08:38:56',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(33,3,13,3,0,'','2015-12-18 01:44:48','2016-01-02 06:21:00','2015-12-18','','','','Tunai',250000,'',1,'2015-12-18 08:54:02','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'0000-00-00'),(34,1,1,0,0,'','2016-01-02 06:11:38','2016-01-02 06:21:00','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2016-01-02'),(35,1,1,0,0,'','2016-01-03 10:55:46','2016-01-03 11:06:32','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,1,1,1,1,0,0,0,0,0,3,0,'2016-01-03'),(36,2,7,0,0,'','2016-01-03 12:00:35','2016-01-03 12:13:30','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,'0000-00-00 00:00:00',0,1,1,1,1,1,1,0,1,0,2,11,1,'2016-01-03');
/*!40000 ALTER TABLE `psb` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rekening`
--

DROP TABLE IF EXISTS `rekening`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rekening` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bank` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pemegang` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nomor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rekening`
--

LOCK TABLES `rekening` WRITE;
/*!40000 ALTER TABLE `rekening` DISABLE KEYS */;
INSERT INTO `rekening` VALUES (1,'Muammalat','Ma\'had Ihya\' As Sunnah','12345678','Rekening Utana','2015-12-09 08:03:05','2015-12-09 08:03:05'),(2,'BCA','Ma\'had Ihya\' As Sunnah','764564566','','2015-12-09 20:04:40','2015-12-09 20:04:40');
/*!40000 ALTER TABLE `rekening` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riwayat_kepegawaian`
--

DROP TABLE IF EXISTS `riwayat_kepegawaian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riwayat_kepegawaian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(10) unsigned NOT NULL,
  `jenis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nomor_sk` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_sk` date NOT NULL,
  `tmt` date NOT NULL,
  `masa_kerja` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `golongan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gapok` double NOT NULL,
  `tempat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jabatan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayat_kepegawaian`
--

LOCK TABLES `riwayat_kepegawaian` WRITE;
/*!40000 ALTER TABLE `riwayat_kepegawaian` DISABLE KEYS */;
INSERT INTO `riwayat_kepegawaian` VALUES (1,2,'CPNS','421414','2001-09-09','2001-09-09','1 tahun 2 bulan','IVC',2000000,'perpus','penanggungjawab','2015-11-26 06:40:22','2015-11-26 06:40:22'),(2,1,'PNS','123456','2010-09-09','2010-09-09','2 tahun 4 bulan','IIB',3000000,'hhh','Manager','2015-11-26 07:49:19','2015-11-26 07:49:19');
/*!40000 ALTER TABLE `riwayat_kepegawaian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riwayat_mengajar`
--

DROP TABLE IF EXISTS `riwayat_mengajar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riwayat_mengajar` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(10) unsigned NOT NULL,
  `mapel` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tingkat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institusi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dari` smallint(5) unsigned NOT NULL,
  `sampai` smallint(5) unsigned NOT NULL,
  `durasi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayat_mengajar`
--

LOCK TABLES `riwayat_mengajar` WRITE;
/*!40000 ALTER TABLE `riwayat_mengajar` DISABLE KEYS */;
INSERT INTO `riwayat_mengajar` VALUES (1,1,'Bahasa Arab','1 SD','SDN Cepoko 01',1999,2001,'1 tahun','magang aja','2015-11-28 02:14:14','2015-11-28 02:15:03');
/*!40000 ALTER TABLE `riwayat_mengajar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `riwayat_pendidikan`
--

DROP TABLE IF EXISTS `riwayat_pendidikan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `riwayat_pendidikan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `karyawan_id` int(10) unsigned NOT NULL,
  `jenjang` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `institusi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kota` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `fakultas` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jurusan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lulus` smallint(5) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `masuk` smallint(5) unsigned NOT NULL,
  `formal` tinyint(1) NOT NULL,
  `siswa_id` int(10) unsigned NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `lama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayat_pendidikan`
--

LOCK TABLES `riwayat_pendidikan` WRITE;
/*!40000 ALTER TABLE `riwayat_pendidikan` DISABLE KEYS */;
INSERT INTO `riwayat_pendidikan` VALUES (1,1,'SD','SDN Kandri','Semarang','','',1999,'2015-11-26 04:29:41','2015-11-28 03:07:34',1993,1,0,'','6 tahun'),(3,1,'SMP','SMPN 22','Semarang','','',2001,'2015-11-26 04:34:58','2015-11-28 03:08:00',1998,1,0,'','3 tahun'),(4,1,'SD','SMKN 7','Semarang','Teknik Elektronika','Elektronika Industri',2006,'2015-11-26 04:35:37','2015-11-28 03:08:24',2002,1,0,'','4 tahun'),(5,1,'S1','Universitas Mercubuana','Jakarta','Ilmu Komputer','Sistem Informasi',2012,'2015-11-26 04:38:11','2015-11-28 01:55:49',2011,1,0,'DO',''),(6,2,'SD','SDN Tembarak','Temanggung','','',1998,'2015-11-26 06:16:18','2015-11-27 16:16:13',0,1,0,'',''),(7,2,'SMP','SMP 01','Temanggung','','',2001,'2015-11-26 06:20:38','2015-11-27 16:16:13',0,1,0,'',''),(11,1,'','wegrege','gergerg','','',2010,'2015-11-27 16:08:54','2015-11-28 03:08:45',2010,0,0,'gergreg brtgrtbr','6 bulan');
/*!40000 ALTER TABLE `riwayat_pendidikan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ruangan`
--

DROP TABLE IF EXISTS `ruangan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ruangan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `kode` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `penanggungjawab_id` int(10) unsigned NOT NULL,
  `bangunan_id` int(10) unsigned NOT NULL,
  `luas` smallint(5) unsigned NOT NULL,
  `kapasitas` smallint(5) unsigned NOT NULL,
  `penggunaan` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `kondisi` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ruangan`
--

LOCK TABLES `ruangan` WRITE;
/*!40000 ALTER TABLE `ruangan` DISABLE KEYS */;
INSERT INTO `ruangan` VALUES (1,'R-001','Ruang 1',1,1,16,20,'ruang kelas','Baik','2015-11-30 05:46:48','2015-11-30 05:50:30'),(2,'R-002','Ruang 2',1,1,16,30,'ruang kelas','Baik','2015-11-30 05:55:01','2015-11-30 05:55:01'),(3,'R-003','Ruang 3',1,1,20,30,'kelas','Baik','2015-11-30 06:14:06','2015-11-30 06:14:38');
/*!40000 ALTER TABLE `ruangan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ruangan_ujian`
--

DROP TABLE IF EXISTS `ruangan_ujian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ruangan_ujian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ujian_id` int(10) unsigned NOT NULL,
  `jadwal_id` int(10) unsigned NOT NULL,
  `ruangan_id` int(10) unsigned NOT NULL,
  `pengawas1_id` int(10) unsigned NOT NULL,
  `pengawas2_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ruangan_ujian`
--

LOCK TABLES `ruangan_ujian` WRITE;
/*!40000 ALTER TABLE `ruangan_ujian` DISABLE KEYS */;
/*!40000 ALTER TABLE `ruangan_ujian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `siswa`
--

DROP TABLE IF EXISTS `siswa`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `siswa` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nis` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tempat_lahir` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jns_kelamin` tinyint(1) NOT NULL,
  `wali_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `nisn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `wn` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `status_anak` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `gol_darah` varchar(2) COLLATE utf8_unicode_ci NOT NULL,
  `riwayat_penyakit` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `kelainan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `hobby` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `tinggi` mediumint(8) unsigned NOT NULL,
  `berat` mediumint(8) unsigned NOT NULL,
  `panggilan` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `agama` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `anak_ke` smallint(5) unsigned NOT NULL,
  `sdr_kandung` smallint(5) unsigned NOT NULL,
  `sdr_tiri` smallint(5) unsigned NOT NULL,
  `sdr_angkat` smallint(5) unsigned NOT NULL,
  `bahasa` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat_kos` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tinggal_dengan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jarak_ke_sekolah` mediumint(8) unsigned NOT NULL,
  `transportasi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `suku` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `ayah_id` int(10) unsigned NOT NULL,
  `ibu_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
INSERT INTO `siswa` VALUES (1,'5435','Yasmina Hafshah','Temanggung','2013-05-01',0,1,'2015-11-24 15:59:31','2015-12-01 06:42:59','2323','WNI','Kandung','O','-','-','Mambaca',120,12,'Yasmin','',1,0,0,0,'Jawa, Indonesia','1448662698-sx1.jpg',1,'Jakarta','-','0988768','Orang Tua (Ayah & Ibu)',1,'Jalan kaki','Jawa',1,2),(2,'7676567','Hamzah','Semarang','2015-09-09',1,1,'2015-11-26 09:23:04','2015-12-01 08:44:39','1342342','WNI','Kandung','A','-','-','Menulis',150,30,'Hamzah','',1,2,0,0,'Jawa, Indonesia','1448585628-woltz_landscape.jpg',1,'Jakarta','-','0676575','Orang Tua (Ayah & Ibu)',1,'Motor','Jawa',1,2),(3,'123456','Qanitah','Semarang','2015-09-09',0,1,'2015-11-26 15:15:30','2015-11-27 07:06:52','123456','WNI','Kandung','A','-','-','Mambaca',120,30,'Nita','',3,2,0,0,'Jawa, Indonesia','1448576130-WaterDrop Beauty.jpg',1,'Jakarta','-','085765677','Orang Tua (Ayah & Ibu)',2,'Jalan kaki','Jawa',0,0);
/*!40000 ALTER TABLE `siswa` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ta`
--

DROP TABLE IF EXISTS `ta`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ta` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `periode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `start` date NOT NULL,
  `end` date NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ta`
--

LOCK TABLES `ta` WRITE;
/*!40000 ALTER TABLE `ta` DISABLE KEYS */;
INSERT INTO `ta` VALUES (2,'2015 - 2016','2015-01-01','2016-01-02',0,'2015-11-24 08:53:23','2015-12-09 20:50:16'),(3,'2014 - 2015','2014-01-01','2015-01-01',0,'2015-11-24 08:58:21','2015-12-09 21:06:02'),(4,'2016/2017','2016-07-01','2017-06-30',1,'2015-12-09 20:50:07','2015-12-09 21:05:55');
/*!40000 ALTER TABLE `ta` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tagihan`
--

DROP TABLE IF EXISTS `tagihan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tagihan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nomor` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `jenis` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ta_id` int(10) unsigned NOT NULL,
  `siswa_id` int(10) unsigned NOT NULL,
  `semester` tinyint(4) NOT NULL,
  `bulan` smallint(5) unsigned NOT NULL,
  `jumlah` double NOT NULL,
  `jatuh_tempo` date NOT NULL,
  `tanggal_bayar` date NOT NULL,
  `status` tinyint(1) NOT NULL,
  `last_reminder` datetime NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tagihan`
--

LOCK TABLES `tagihan` WRITE;
/*!40000 ALTER TABLE `tagihan` DISABLE KEYS */;
INSERT INTO `tagihan` VALUES (1,'1234234252','Tagihan Bulanan',2,1,2,8,2000000,'2010-09-09','2010-09-09',1,'0000-00-00 00:00:00','lunas bro..','2015-11-28 16:07:25','2015-12-01 08:21:36');
/*!40000 ALTER TABLE `tagihan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tags_buku`
--

DROP TABLE IF EXISTS `tags_buku`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tags_buku` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags_buku`
--

LOCK TABLES `tags_buku` WRITE;
/*!40000 ALTER TABLE `tags_buku` DISABLE KEYS */;
INSERT INTO `tags_buku` VALUES (1,'IPA'),(2,'IPS'),(3,'Bahasa Arab'),(4,'Bahasa Indonesia'),(5,'Matematika'),(7,'test'),(8,'jajal');
/*!40000 ALTER TABLE `tags_buku` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tingkat`
--

DROP TABLE IF EXISTS `tingkat`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tingkat` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `keterangan` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `jenjang_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tingkat`
--

LOCK TABLES `tingkat` WRITE;
/*!40000 ALTER TABLE `tingkat` DISABLE KEYS */;
INSERT INTO `tingkat` VALUES (1,'I','Tingkat 1 SD','2015-11-25 08:30:03','2015-12-03 03:35:33',3),(2,'II','Tingkat 2 SD','2015-11-25 08:30:19','2015-12-03 03:35:44',3),(3,'III','Tingkat 3 SD','2015-11-25 08:30:36','2015-12-03 03:35:55',3),(4,'IV','Tingkat 4 SD','2015-11-29 06:34:25','2015-12-03 03:36:06',3),(5,'V','Tingkat 5 SD','2015-11-29 06:34:37','2015-12-03 03:36:16',3),(6,'VI','Tingkat 6 SD','2015-11-29 06:34:50','2015-12-03 03:36:27',3),(7,'VII','Tingkat 7 SMP','2015-11-29 06:35:06','2015-12-03 03:36:40',4),(8,'VIII','Tingkat 8 SMP','2015-11-29 06:35:23','2015-12-03 03:36:55',4),(9,'IX','Tingkat 9 SMP','2015-11-29 06:35:41','2015-12-03 03:37:10',4),(10,'X','Tingkat 10 SMA','2015-11-29 06:35:56','2015-12-03 03:37:24',5),(11,'XI','Tingkat 11 SMA','2015-11-29 06:36:17','2015-12-03 03:37:34',5),(12,'XII','Tingkat 12 SMA','2015-11-29 06:36:42','2015-12-03 03:37:44',5);
/*!40000 ALTER TABLE `tingkat` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ujian`
--

DROP TABLE IF EXISTS `ujian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `ujian` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `ta_id` int(10) unsigned NOT NULL,
  `jenjang_id` int(10) unsigned NOT NULL,
  `tingkat_id` int(10) unsigned NOT NULL,
  `jenis_id` int(10) unsigned NOT NULL,
  `dari` date NOT NULL,
  `sampai` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ujian`
--

LOCK TABLES `ujian` WRITE;
/*!40000 ALTER TABLE `ujian` DISABLE KEYS */;
/*!40000 ALTER TABLE `ujian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `role` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Bagas','udibagas@gmail.com','$2y$10$PJqW8Zf88GWA07mov89tA.6zK417ef8C1Evnxp66BOmWYdj7K/tDS','MJgc92YYzq5cdc0UK5PgNuQjow50qdXnXSd2OLijNKBTrQeMoL6t8xctdFJR','2015-11-24 07:14:19','2016-01-02 06:00:35','admin'),(2,'Bagas Udi Sahsangka','bagas@yahoo.com','$2y$10$NWYVuQnTpwspcoPUdEnAr.MdxAe30/JpPWUEnyMtXME6pWIp9Nscq',NULL,'2015-12-16 01:34:23','2015-12-16 01:34:23',''),(3,'Bagas Udi Sahsangka','putri@yahoo.com','$2y$10$Ihl8sulzaRKRRZXJNtc.fOJyjkFx1315NPwqrvwZAXUBCj2twL8yK','6Fea46E6734VZ23Uqilpq57oHX9HAnpC6lq5E62B9bHSGILgI7BmWU6NHMAm','2015-12-16 01:35:01','2015-12-16 02:13:16',''),(4,'Putra','putra@yahoo.com','$2y$10$0T3YvgaUn4eKOdTJ0m3jLeRwe00pIFMFpcUe3cUV8StRI/ttKRuw2','wV37aOcAj4b2kPx9fHh0XZ5kbk1g7eOONYD5BJs7SJXLNppiG2Lw1hKyXqJW','2015-12-16 02:57:01','2015-12-16 13:22:04',''),(5,'Bagas Udi Sahsangka','Bagas Udi Sahsangka','$2y$10$RCPwGvilJL1AmcIxFror6urpKotbw1ZO9N5Xf9HSpP.sDCXeATukm','PtfuxOKwjhOaZYKXUA3QQwQdcdDj0FbdUJDoVvfnsIuOTHbSZGdF1NGQHto7','2015-12-16 13:23:03','2015-12-16 13:56:40',''),(6,'keuangan','keuangan','$2y$10$XPfhqHjCbI/i1WmaVwgsjevOYo2VjULbMG.VzAS2D.w.IulRtHXPe','78RbJrAJ8J77R23hwfCXJLK4osH35eNEqo9A0CT9WmWshBi6iSgKKcCDXXAh','2015-12-17 00:34:21','2015-12-17 07:48:38',''),(9,'test aja kok','test aja kok','$2y$10$WiE7j1Jt9ar/uxFdYAaS0epjeCjkcUM8T80gyLFlRWc/LBb..LicW',NULL,'2015-12-17 06:37:28','2015-12-17 06:37:28',''),(10,'data','data','$2y$10$kTDFyv3KKhe80tiNha1i1OCRLiWSSbeMEHpuu.nz0i0mun7Brij/.','qKUxsDcR0VwNDKFRBMIKsXeBxqZVg7gM7qhRMHiSZjyKXcYvHAs7ntLlLctk','2015-12-17 07:48:15','2015-12-17 07:50:26',''),(11,'test','test','$2y$10$CQ.hwT2aQqrMvbflTd7etuU61sKPtc8AQ4bdDMZKO0yJjTYBdTsbq','ZEDZmQonIQuS3I6gp2ttzu74RsRwd5hYHlHUxLhyo4xQIqoII5ncrWzWioY0','2015-12-17 07:48:58','2015-12-17 07:51:16',''),(12,'seleksi','seleksi','$2y$10$vS.la2OyR3T/94FB/yRBp.SVnPKRHpTODYBkJwok.ICcwo7hNHWH6','g4UR85AhL17Kti59oaC5vjfzHitmPKqvHTxuVz2Xt2iT2RCrBs7ZDveFROic','2015-12-17 07:49:18','2015-12-17 09:56:40',''),(14,'coba jajal','coba jajal','$2y$10$4t9Bt0UEQiHHx5F.3q3TouOcqIZtApvdE1pKOP37mmoF2OxoFISay','TuMA71wyPb6xskTt6l1p1P6K0B6c3Vj3iqjgKijMXpaGuSzZf62lgF07IdMl','2015-12-17 13:46:05','2015-12-17 13:49:33',''),(16,'yasmintul','yasmintul','$2y$10$IBUy91CDDuLNe9C0J9r8ieeU/m/AZl8LjKgF5ig654AoshU9wdIja','rQ7Opny3MVdld8xnjb6ydMC5yTtMBf3zlNuf9gh2N15Ndefhf3Yh5krgkzfY','2015-12-17 13:56:39','2015-12-17 13:58:56',''),(17,'putri','putri','$2y$10$/MSV0mkDZTe0rsf2RAXHiee5XEPfwiV0oXXVvxq6KGuhuBYNWHU/.','mtJvr3IYtt6rXcOiNtWF6XGgrd79ZzwNjuolgqZzKJgq6mypt2iYMx6ACFMg','2015-12-17 13:59:13','2015-12-17 14:12:10',''),(18,'hafshah','hafshah','$2y$10$gl.dcCllsqdSAEHCbuNklO4ksYrEXk64nV3.MQwt1.I90XZdEUAHC',NULL,'2015-12-17 14:13:04','2015-12-17 14:13:04',''),(19,'thalhah','thalhah','$2y$10$hqZPHSOp4.zH4DqsTwBmkeqwxbBqlqD/murQf.bQr0/Ph2Nb1LOzm',NULL,'2015-12-18 01:14:25','2015-12-18 01:14:25',''),(20,'zubair','zubair','$2y$10$HWFhjEUrjSlFiMfrIBZjGeIjTaRW.fWkS9qj.2eKC.8dmFdaNwXRK','wAQ4nPk7TXNjSTcU0on5abXVdfX0N8lr84eMjauUbYei9bR5Gtc3wSyJCXNu','2015-12-18 01:44:48','2015-12-18 01:53:05','');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wali`
--

DROP TABLE IF EXISTS `wali`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wali` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `jns_kelamin` tinyint(1) NOT NULL,
  `hub_keluarga` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `tempat_lahir` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `tgl_lahir` date NOT NULL,
  `agama` varchar(10) COLLATE utf8_unicode_ci NOT NULL,
  `wn` varchar(3) COLLATE utf8_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pekerjaan` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `penghasilan` double NOT NULL,
  `status` tinyint(1) NOT NULL,
  `is_wali` tinyint(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wali`
--

LOCK TABLES `wali` WRITE;
/*!40000 ALTER TABLE `wali` DISABLE KEYS */;
INSERT INTO `wali` VALUES (1,'Bagas Udi sahsangka','tangerang','udibagas@gmail.com','0887767',1,'Ayah','2015-11-24 15:35:15','2015-11-30 07:00:45','Semarang','1987-04-01','Islam','WNI','SMK (SMKN 7 Semarang)','Programmer',7000000,1,1),(2,'Dewiyati Prayitna Putri','Temanggung','putri@gmail.com','0775667',0,'Ibu','2015-11-24 15:36:24','2015-11-30 06:59:52','Temanggung','1988-01-03','Islam','WNI','S1 (UNNES)','Ibu rumah tangga',0,1,1);
/*!40000 ALTER TABLE `wali` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wawancara_calon_santri`
--

DROP TABLE IF EXISTS `wawancara_calon_santri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wawancara_calon_santri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `siswa_id` int(10) unsigned NOT NULL,
  `hasil_wawancara` tinyint(1) NOT NULL,
  `catatan` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wawancara_calon_santri`
--

LOCK TABLES `wawancara_calon_santri` WRITE;
/*!40000 ALTER TABLE `wawancara_calon_santri` DISABLE KEYS */;
INSERT INTO `wawancara_calon_santri` VALUES (1,36,1,'ok bro.. lulus','2016-01-03 14:42:10','2016-01-03 14:42:10'),(2,36,1,'ok bro.. lulus','2016-01-03 14:42:35','2016-01-03 14:42:35'),(3,36,1,'ok bro.. lulus','2016-01-03 14:43:18','2016-01-03 14:43:18');
/*!40000 ALTER TABLE `wawancara_calon_santri` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wawancara_orangtua_calon_santri`
--

DROP TABLE IF EXISTS `wawancara_orangtua_calon_santri`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wawancara_orangtua_calon_santri` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `siswa_id` int(10) unsigned NOT NULL,
  `hasil_wawancara` tinyint(1) NOT NULL,
  `catatan` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wawancara_orangtua_calon_santri`
--

LOCK TABLES `wawancara_orangtua_calon_santri` WRITE;
/*!40000 ALTER TABLE `wawancara_orangtua_calon_santri` DISABLE KEYS */;
INSERT INTO `wawancara_orangtua_calon_santri` VALUES (1,36,1,'jiofiuew ufgyweu fw','2016-01-03 15:29:53','2016-01-03 15:29:53');
/*!40000 ALTER TABLE `wawancara_orangtua_calon_santri` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2016-01-04 17:29:39
