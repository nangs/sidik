-- MySQL dump 10.13  Distrib 5.6.27, for debian-linux-gnu (x86_64)
--
-- Host: localhost    Database: mias
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
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `alamat_calon_siswa`
--

LOCK TABLES `alamat_calon_siswa` WRITE;
/*!40000 ALTER TABLE `alamat_calon_siswa` DISABLE KEYS */;
INSERT INTO `alamat_calon_siswa` VALUES (15,50,0,'REUMA','02','02','','KERSAMANAH','KERSAMANAH','GARUT','JAWA BARAT','','',1,1,'','2015-12-21 02:07:24','2015-12-21 03:45:19'),(16,52,0,'DUSUN KARANG KAMIRI','06','02','04639','KARANG KAMIRI','LANGKAP LANCAR','CIAMIS','JAWA BARAT','','085221316457',60,2,'','2015-12-21 02:21:47','2015-12-21 02:21:47'),(17,51,0,'PERUM BAMBU KUNING BLOK A6 NO.07','03','01','29422','BUKIT TEMPAYAN','BATU AJI','BATAM','KEPULAUAN RIAU','','08566520355',1,1,'','2015-12-21 02:40:35','2015-12-21 02:40:35'),(18,49,1,'WANASARI','01','01','45466','CILANGCANG','CIKIJING','MAJALENGKA','Jawa Barat','','082128212014',1,1,'','2015-12-21 02:40:45','2015-12-21 06:06:21'),(19,48,1,'SIDOREJO','37','09','','SIDOREJO','SEKAMPUNG UDIK','LAMPUNG TIMUR','Lampung','','082306185089',0,1,'','2015-12-21 03:29:02','2015-12-21 03:29:02'),(20,54,1,'LAREH NAN PANJANG','-','-','-','PADANG LIMAU','KOTO','PADANG PARIAMAN','SUMATERA BARAT','','081296032300',1,1,'','2015-12-21 03:56:44','2015-12-22 06:03:20'),(21,74,1,'BANJARANYAR','01','01','46383','BANJAANYAR','BANJARSARI','CIAMIS','Jawa Barat','','085294119722',1,1,'','2015-12-21 04:25:02','2015-12-21 05:12:28'),(22,75,1,'PERUM PURI KOSAMBI','02','15','41371','DUREN','KLARI','KARAWANG','JAWA BARAT','','081380809717',1,1,'','2015-12-21 04:34:59','2015-12-21 04:34:59'),(23,98,1,'KP. CIPICUNG','04','02','46192','TANJUNGSARI','SALOPA','TASIKMALAYA','Jawa Barat','','085314629143',1,1,'','2015-12-21 07:34:59','2015-12-21 07:34:59'),(24,99,1,'GARDENIA I BLOK XG 16 NO. 36','03','11','99999','MEKARSARI','PANONGAN','TANGERANG','BANTEN','','082111237028',1,2,'','2015-12-21 07:45:07','2015-12-21 07:45:07'),(25,175,1,'JL. LETJEN IBRAHIM ADJI','2','5','46151','INDIHIANG','INDIHIANG','KOTA TASIKMALAYA','Jawa Barat','','085223172854',10,2,'','2015-12-22 04:04:41','2015-12-22 04:04:41');
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
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `asal_sekolah`
--

LOCK TABLES `asal_sekolah` WRITE;
/*!40000 ALTER TABLE `asal_sekolah` DISABLE KEYS */;
INSERT INTO `asal_sekolah` VALUES (1,'SDIT-TQ IHYA AS SUNNAH','1234567890','1234567890','Cihideung','Tasikmalaya','Jawa Barat','2015-12-16 04:12:00','2015-12-16 04:12:00',''),(2,'asdasd','vjhkgjhgg','jhjhgjhg','jhgjhgjh','hghjgj','jhghjgh','2015-12-16 09:23:28','2015-12-16 09:23:28',''),(3,'SMAIT-TQ Ihya Assunnah Tasikma','1322','123','sdfs','sdff','qsdfs','2015-12-18 07:59:53','2015-12-18 07:59:53',''),(4,'SD USWATUN HASANAH','202327801026','20268226','TAWANG','TASIKMALAYA','JAWA BARAT','2015-12-19 06:58:27','2015-12-19 06:58:27',''),(5,'SDN SUKAMAJU 6','','','','','','2015-12-21 02:07:24','2015-12-21 02:07:24',''),(6,'DARUL HUDA','','','','','','2015-12-21 02:21:47','2015-12-21 02:21:47',''),(7,'SMPIT IMAM SYAFI\'I','','','NONGSA','BATAM','KEPULAUAN RIAU','2015-12-21 02:40:35','2015-12-21 02:40:35','JLN. HANG LEKIU NO.03 '),(8,'SDN CILANCANG','','','','','','2015-12-21 02:40:45','2015-12-21 02:40:45',''),(9,'MI MUHAMMADIYAH','','','','','','2015-12-21 03:29:02','2015-12-21 03:29:02',''),(10,'SDN 16 PADANG PARIAMAN','','','Padang Pariaman','Padang','Sumatra Barat','2015-12-21 03:56:44','2015-12-22 06:01:58',''),(11,'SDN BANJAR ANYAR','','','','','','2015-12-21 04:25:03','2015-12-21 04:25:03',''),(12,'SDIT ANNAJAH MAKARIMS','','','','','','2015-12-21 04:34:59','2015-12-21 04:34:59',''),(13,'MI CIPICUNG','','','','','','2015-12-21 07:34:59','2015-12-21 07:34:59',''),(14,'SDN MEKAR BARU I','','','','','','2015-12-21 07:45:07','2015-12-21 07:45:07','');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bagian`
--

LOCK TABLES `bagian` WRITE;
/*!40000 ALTER TABLE `bagian` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beasiswa_calon_siswa`
--

LOCK TABLES `beasiswa_calon_siswa` WRITE;
/*!40000 ALTER TABLE `beasiswa_calon_siswa` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `calon_siswa`
--

LOCK TABLES `calon_siswa` WRITE;
/*!40000 ALTER TABLE `calon_siswa` DISABLE KEYS */;
INSERT INTO `calon_siswa` VALUES (43,0,'HASNA AL HUMAIDAH',0,'','','','','0000-00-00',0,0,0,0,43,'2015-12-21 01:36:34','2015-12-21 01:36:34'),(44,0,'MAYSA HADAYANI',0,'','','','','0000-00-00',0,0,0,0,44,'2015-12-21 01:39:36','2015-12-21 01:39:36'),(45,0,'AMR AL USAIDI',1,'','','','','0000-00-00',0,0,0,0,45,'2015-12-21 01:40:47','2015-12-21 01:40:47'),(46,0,'SA\'ADIYAH DAROJAT',0,'','','','','0000-00-00',0,0,0,0,46,'2015-12-21 01:42:03','2015-12-21 01:42:03'),(47,0,'MUHAMMAD JIDDAN AL ANSORY',1,'','','','','0000-00-00',0,0,0,0,47,'2015-12-21 01:43:13','2015-12-21 01:43:13'),(48,9,'DIVA',1,'','161707009','1807121112040004','SIDOREJO','2004-02-12',148,36,0,2,48,'2015-12-21 01:43:32','2015-12-21 03:29:02'),(49,8,'FIQRI NAUVAL FAISHA WIJAYA',1,'0044915122','161707007','3210032602040001','MAJALENGKA','2004-02-26',149,40,0,1,49,'2015-12-21 01:43:59','2015-12-21 06:06:21'),(50,5,'SILAN HIFFI RAHMADANI',0,'','','','GARUT','2004-03-12',0,0,0,0,50,'2015-12-21 01:44:45','2015-12-21 03:45:19'),(51,7,'UMAR ABDUL AZIZ',1,'0016584270','161710001','2171121012019003','BATAM','2001-12-10',168,53,0,0,51,'2015-12-21 01:47:21','2015-12-21 02:40:35'),(52,6,'APRIDAN HUSAINI',1,'0008554007','161710002','3207280904000002','CIAMIS','2000-04-09',170,45,0,1,52,'2015-12-21 01:48:10','2015-12-21 02:21:47'),(53,0,'ANDI MEDIA RAMADHAN',0,'','','','','0000-00-00',0,0,0,0,53,'2015-12-21 01:51:54','2015-12-21 01:51:54'),(54,10,'ALFARISI',1,'','161707010','','JAKARTA','2003-11-27',150,50,0,3,54,'2015-12-21 02:17:06','2015-12-22 06:03:20'),(55,0,'AHMAD FADHILLAH NUR SUSILO',1,'','161710003','','','0000-00-00',0,0,0,0,55,'2015-12-21 03:14:59','2015-12-21 03:14:59'),(56,0,'ALIF MUSLIM HIDAYAT',1,'','161710004','','','0000-00-00',0,0,0,0,56,'2015-12-21 03:16:15','2015-12-21 03:16:15'),(57,0,'ANDRE LAKSANA',1,'','161710005','','','0000-00-00',0,0,0,0,57,'2015-12-21 03:17:04','2015-12-21 03:17:04'),(58,0,'HAEKAL RAMADHAN AGUS SUSENANTO',1,'','161710006','','','0000-00-00',0,0,0,0,58,'2015-12-21 03:20:59','2015-12-21 03:20:59'),(59,0,'MUHAMMAD FIRMAN ALIANSYAH',1,'','161710007','','','0000-00-00',0,0,0,0,59,'2015-12-21 03:22:04','2015-12-21 03:22:04'),(60,0,'MUHAMMAD RIZKI KOHARUDIN',1,'','161710008','','','0000-00-00',0,0,0,0,60,'2015-12-21 03:23:09','2015-12-21 03:23:09'),(61,0,'REFA HARFIARTO',1,'','161710009','','','0000-00-00',0,0,0,0,61,'2015-12-21 03:23:57','2015-12-21 03:23:57'),(62,0,'SAEPULLOH',1,'','161710010','','','0000-00-00',0,0,0,0,62,'2015-12-21 03:24:54','2015-12-21 03:24:54'),(63,0,'SULTON HAFIDAN ABABILAH',1,'','161710011','','','0000-00-00',0,0,0,0,63,'2015-12-21 03:29:51','2015-12-21 03:29:51'),(64,0,'YUSUF ARDHIANSYAH',1,'','161710012','','','0000-00-00',0,0,0,0,64,'2015-12-21 03:30:38','2015-12-21 03:30:38'),(65,0,'EGA SUGIANTO',1,'','161710013','','','0000-00-00',0,0,0,0,65,'2015-12-21 03:31:26','2015-12-21 03:31:26'),(66,0,'FAHMI ULUMUDDIN',1,'','161710014','','','0000-00-00',0,0,0,0,66,'2015-12-21 03:33:25','2015-12-21 03:33:25'),(67,0,'HAIKAL MUHAMMAD RAFI',1,'','161710015','','','0000-00-00',0,0,0,0,67,'2015-12-21 03:34:10','2015-12-21 03:34:10'),(68,0,'HAWARIYAN MUHAMMAD',1,'','161710016','','','0000-00-00',0,0,0,0,68,'2015-12-21 03:34:54','2015-12-21 03:34:54'),(69,0,'IMAM ABDUROHMAN',1,'','161710017','','','0000-00-00',0,0,0,0,69,'2015-12-21 03:35:38','2015-12-21 03:35:38'),(70,0,'KHEDIV JAMALUDDIN FATTAH',1,'','161710018','','','0000-00-00',0,0,0,0,70,'2015-12-21 03:36:27','2015-12-21 03:36:27'),(71,0,'MUHAMMAD RAIHAN AL FAREZ',1,'','161710019','','','0000-00-00',0,0,0,0,71,'2015-12-21 03:37:12','2015-12-21 03:37:12'),(72,0,'SHALIH MUHAMMAD ABDUL \'AZHIM',1,'','161710020','','','0000-00-00',0,0,0,0,72,'2015-12-21 03:38:17','2015-12-21 03:38:17'),(73,0,'FAHMI HAMZAH',1,'','161710021','','','0000-00-00',0,0,0,0,73,'2015-12-21 03:38:50','2015-12-22 02:22:09'),(74,11,'JULPAN ILYAS JAUHARI',1,'','161707011','','CIAMIS','2003-07-31',142,34,0,1,74,'2015-12-21 03:41:21','2015-12-21 05:12:28'),(75,12,'AUFA NUR LATHIFAH',0,'','161707012','','KARAWANG','2004-03-20',152,65,0,1,75,'2015-12-21 03:42:26','2015-12-21 04:34:59'),(76,0,'KARIR ADE TAKAYYASA YAQIIN MUSLIMUN',1,'','161710022','','','0000-00-00',0,0,0,0,76,'2015-12-21 03:51:07','2015-12-21 03:51:07'),(77,0,'RAFFI AHMAD FATHONI',1,'','161710023','','','0000-00-00',0,0,0,0,77,'2015-12-21 03:52:02','2015-12-21 03:52:02'),(78,0,'ABDUL GHANY AT-TIRMIDZI',1,'','161710024','','','0000-00-00',0,0,0,0,78,'2015-12-21 03:55:13','2015-12-21 03:55:13'),(79,0,'ALHAKIM ANNAISABURI',1,'','161710025','','','0000-00-00',0,0,0,0,79,'2015-12-21 03:56:16','2015-12-21 03:56:16'),(80,0,'DAFFA ADLY',1,'','161710026','','','0000-00-00',0,0,0,0,80,'2015-12-21 03:57:09','2015-12-21 03:57:09'),(81,0,'FAATIH SALAHUDDIN',1,'','161710027','','','0000-00-00',0,0,0,0,81,'2015-12-21 03:57:46','2015-12-21 03:57:46'),(82,0,'FAUZAN YAZID',1,'','161710028','','','0000-00-00',0,0,0,0,82,'2015-12-21 03:58:44','2015-12-21 03:58:44'),(83,0,'FERRY ANTONI',1,'','161710029','','','0000-00-00',0,0,0,0,83,'2015-12-21 03:59:28','2015-12-21 03:59:28'),(84,0,'IKHSAN MAULANA ABDUL AZIS',1,'','161710030','','','0000-00-00',0,0,0,0,84,'2015-12-21 04:00:24','2015-12-21 04:00:24'),(85,0,'ALI GUNAWAN',1,'','161710103','','','0000-00-00',0,0,0,0,85,'2015-12-21 04:09:52','2015-12-21 04:09:52'),(86,0,'ILHAM MUHAMMAD SIDIQ',1,'','161710031','','','0000-00-00',0,0,0,0,86,'2015-12-21 06:03:12','2015-12-21 06:03:12'),(87,0,'MUHAMMAD BANGGA ARIFKUSUMA',1,'','161710032','','','0000-00-00',0,0,0,0,87,'2015-12-21 06:09:34','2015-12-21 06:09:34'),(88,0,'MUHAMMAD ILHAM MUJAHID MAULANA INSAN HABIEBIE AL-M',1,'','161710033','','','0000-00-00',0,0,0,0,88,'2015-12-21 06:11:05','2015-12-21 06:15:41'),(89,0,'MUHAMMAD SYAFIQ HILMI',1,'','161710034','','','0000-00-00',0,0,0,0,89,'2015-12-21 06:14:43','2015-12-21 06:14:43'),(90,0,'MUHAMMAD ZAIDAN FAYYADH',1,'','161710035','','','0000-00-00',0,0,0,0,90,'2015-12-21 06:16:36','2015-12-21 06:16:36'),(91,0,'SAEPUDIN INSAN ZAQIUN',1,'','161710036','','','0000-00-00',0,0,0,0,91,'2015-12-21 06:17:48','2015-12-21 06:17:48'),(92,0,'SAHIR ALIYA DZULFARHAN',1,'','161710037','','','0000-00-00',0,0,0,0,92,'2015-12-21 06:19:07','2015-12-21 06:19:07'),(93,0,'SATRIA HADI CAHYA SOLIKIN',1,'','161710038','','','0000-00-00',0,0,0,0,93,'2015-12-21 06:19:48','2015-12-21 06:19:48'),(94,0,'ZAENAL AMBIA',1,'','161710039','','','0000-00-00',0,0,0,0,94,'2015-12-21 06:20:19','2015-12-21 06:20:19'),(95,0,'ALDILA ROSMAWATY',0,'','161710040','','','0000-00-00',0,0,0,0,95,'2015-12-21 06:21:09','2015-12-21 06:21:09'),(96,0,'AZKIA FITRIANIS MULYAWATI',0,'','161710041','','','0000-00-00',0,0,0,0,96,'2015-12-21 06:22:15','2015-12-21 06:22:15'),(97,0,'CINDY WIDIYA PUTRI ',0,'','161710042','','','0000-00-00',0,0,0,0,97,'2015-12-21 06:24:39','2015-12-21 06:24:39'),(98,13,'LELI HURIAH ANAJMIAH',0,'0043154943','161707014','','TASIKMALAYA','2004-04-30',150,53,0,2,98,'2015-12-21 06:27:23','2015-12-21 07:34:59'),(99,14,'KAYLA AZZAHRA',0,'','161707015','','TANGERANG','2004-04-15',145,36,0,3,99,'2015-12-21 06:28:20','2015-12-21 07:45:07'),(100,0,'SHOFIYYAH',0,'','161707013','','','0000-00-00',0,0,0,0,100,'2015-12-21 06:32:58','2015-12-21 06:32:58'),(101,0,'DEA PERMATASARI',0,'','161710043','','','0000-00-00',0,0,0,0,101,'2015-12-21 06:33:55','2015-12-21 06:33:55'),(102,0,'DIANAH SAPIRAH',0,'','161710044','','','0000-00-00',0,0,0,0,102,'2015-12-21 06:34:31','2015-12-21 06:34:31'),(103,0,'DIEN FATIMAH AZZAHRA',0,'','161710045','','','0000-00-00',0,0,0,0,103,'2015-12-21 06:35:14','2015-12-21 06:35:14'),(104,0,'DITA AULIA SABILA',0,'','161710046','','','0000-00-00',0,0,0,0,104,'2015-12-21 06:36:01','2015-12-22 02:15:13'),(105,0,'ELSA AMANAH',0,'','161710047','','','0000-00-00',0,0,0,0,105,'2015-12-21 06:36:58','2015-12-21 06:36:58'),(106,0,'ELSA AULIA AL MEGDANIA SOLIHAH',0,'','161710048','','','0000-00-00',0,0,0,0,106,'2015-12-21 06:37:51','2015-12-21 06:37:51'),(107,0,'NUR ULUL ALBAB',0,'','161710049','','','0000-00-00',0,0,0,0,107,'2015-12-21 06:39:06','2015-12-21 06:39:06'),(108,0,'NURWALIA SUHENDRA',0,'','161710050','','','0000-00-00',0,0,0,0,108,'2015-12-21 06:39:56','2015-12-21 06:39:56'),(109,0,'SALMAA LUSARIYA',0,'','161710051','','','0000-00-00',0,0,0,0,109,'2015-12-21 06:40:31','2015-12-21 06:40:31'),(110,0,'SALSA NABILA',0,'','161710052','','','0000-00-00',0,0,0,0,110,'2015-12-21 06:41:04','2015-12-21 06:41:04'),(111,0,'SHOFIA SALSABILA AZZAHRO',0,'','161710053','','','0000-00-00',0,0,0,0,111,'2015-12-21 06:42:00','2015-12-22 04:52:23'),(112,0,'UMNIYYAH ZAHRA',0,'','161710054','','','0000-00-00',0,0,0,0,112,'2015-12-21 06:42:38','2015-12-21 06:42:38'),(113,0,'WAFIQ NUR AZIZAH',0,'','161710055','','','0000-00-00',0,0,0,0,113,'2015-12-21 06:45:46','2015-12-21 06:45:46'),(114,0,'XIN JIANG QURANIA',0,'','161710056','','','0000-00-00',0,0,0,0,114,'2015-12-21 06:51:49','2015-12-21 06:51:49'),(115,0,'ALISYA AULIA RUSMANA',0,'','161710057','','','0000-00-00',0,0,0,0,115,'2015-12-21 06:53:29','2015-12-21 06:53:29'),(116,0,'ALSADINA RAHMANIA FAHAYYANI',0,'','161710058','','','0000-00-00',0,0,0,0,116,'2015-12-21 06:55:07','2015-12-21 06:55:07'),(117,0,'ANNISA NA\'ILAH ASY-SHAFIYYAH QOLBI',0,'','161710059','','','0000-00-00',0,0,0,0,117,'2015-12-21 06:56:43','2015-12-21 06:56:43'),(119,0,'HANA MEDIANA',0,'','161710060','','','0000-00-00',0,0,0,0,119,'2015-12-21 06:57:30','2015-12-21 06:57:30'),(120,0,'NADHILA NUR SHABRINA',0,'','161710061','','','0000-00-00',0,0,0,0,120,'2015-12-21 06:58:41','2015-12-21 06:58:41'),(121,0,'NISA HANIFAH',0,'','161710062','','','0000-00-00',0,0,0,0,121,'2015-12-21 06:59:21','2015-12-21 06:59:21'),(122,0,'NUR AZIZAH',0,'','161710063','','','0000-00-00',0,0,0,0,122,'2015-12-21 07:00:04','2015-12-21 07:00:04'),(123,0,'SALMA NUR SAADAH',0,'','161710054','','','0000-00-00',0,0,0,0,123,'2015-12-21 07:00:57','2015-12-21 07:00:57'),(124,0,'SHOFWAH MAWADDAH',0,'','161710065','','','0000-00-00',0,0,0,0,124,'2015-12-21 07:01:36','2015-12-21 07:01:36'),(125,0,'SIFA UROHMAN NUURULHAYAT',0,'','161710066','','','0000-00-00',0,0,0,0,125,'2015-12-21 07:02:20','2015-12-21 07:02:20'),(126,0,'SITI SOLIHAH',0,'','161710067','','','0000-00-00',0,0,0,0,126,'2015-12-21 07:03:05','2015-12-21 07:03:05'),(127,0,'SYIFA AISYAH QURROH A\'YUNI',0,'','161710068','','','0000-00-00',0,0,0,0,127,'2015-12-21 07:03:48','2015-12-21 07:03:48'),(128,0,'TIANA NURUL HUDA',0,'','161710069','','','0000-00-00',0,0,0,0,128,'2015-12-21 07:04:17','2015-12-21 07:04:17'),(129,0,'WAFA FAUZIAH',0,'','161710070','','','0000-00-00',0,0,0,0,129,'2015-12-21 07:07:39','2015-12-21 07:07:39'),(130,0,'ADWIYA FITRIA FAZA',0,'','161710071','','','0000-00-00',0,0,0,0,130,'2015-12-21 07:08:10','2015-12-21 07:08:10'),(131,0,'ARINI HUSNA SADILA',0,'','161710072','','','0000-00-00',0,0,0,0,131,'2015-12-21 07:08:48','2015-12-21 07:08:48'),(132,0,'DIZA PAZQUA AZ-ZAHRA',0,'','161710073','','','0000-00-00',0,0,0,0,132,'2015-12-21 07:12:06','2015-12-22 02:15:57'),(133,0,'FIRNA HANIFAH',0,'','161710074','','','0000-00-00',0,0,0,0,133,'2015-12-21 07:12:45','2015-12-21 07:12:45'),(134,0,'FIRNA MONISA',0,'','161710075','','','0000-00-00',0,0,0,0,134,'2015-12-21 07:13:32','2015-12-21 07:13:32'),(135,0,'HAFSHATUL AZIZAH',0,'','161710076','','','0000-00-00',0,0,0,0,135,'2015-12-21 07:14:12','2015-12-21 07:14:12'),(136,0,'HALIMATUSSA\'DIYAH AFIFAH ADAM',0,'','161710077','','','0000-00-00',0,0,0,0,136,'2015-12-21 07:19:55','2015-12-21 07:19:55'),(137,0,'HANI AULIA ROUDOTUL JANNAH',0,'','161710078','','','0000-00-00',0,0,0,0,137,'2015-12-21 07:20:47','2015-12-21 07:20:47'),(138,0,'HANI NUR HASANAH',0,'','161710079','','','0000-00-00',0,0,0,0,138,'2015-12-21 07:21:19','2015-12-21 07:21:19'),(139,0,'IZMY FADILAH',0,'','161710080','','','0000-00-00',0,0,0,0,139,'2015-12-21 07:22:00','2015-12-21 07:22:00'),(140,0,'JIHAN FADILLA',0,'','161710081','','','0000-00-00',0,0,0,0,140,'2015-12-21 07:22:31','2015-12-21 07:22:31'),(141,0,'KHOZAIN KHOIRIYAH',0,'','161710082','','','0000-00-00',0,0,0,0,141,'2015-12-21 07:23:10','2015-12-22 03:34:53'),(142,0,'LYLIN USWATUN KHASANAH',0,'','161710083','','','0000-00-00',0,0,0,0,142,'2015-12-21 07:24:05','2015-12-21 07:24:05'),(143,0,'NURFADHILAH APRILIANTY',0,'','161710084','','','0000-00-00',0,0,0,0,143,'2015-12-21 07:25:09','2015-12-21 07:25:09'),(144,0,'OXSA ANISA PUTRI',0,'','161710085','','','0000-00-00',0,0,0,0,144,'2015-12-21 07:25:50','2015-12-21 07:25:50'),(145,0,'RANI INDRIYANI',0,'','161710086','','','0000-00-00',0,0,0,0,145,'2015-12-21 07:26:24','2015-12-21 07:26:24'),(146,0,'TIA ALIP PASAH',0,'','161710087','','','0000-00-00',0,0,0,0,146,'2015-12-21 07:28:09','2015-12-21 07:28:09'),(147,0,'ADILAH NUR JAHIDAH',0,'','161710088','','','0000-00-00',0,0,0,0,147,'2015-12-21 07:29:07','2015-12-21 07:29:07'),(148,0,'ANDI SOFIYYAH',0,'','161710089','','','0000-00-00',0,0,0,0,148,'2015-12-21 07:30:20','2015-12-21 07:30:20'),(149,0,'ARMITA RIDHO WINARSIH',0,'','161710090','','','0000-00-00',0,0,0,0,149,'2015-12-21 07:30:55','2015-12-22 01:58:04'),(150,0,'GINA SITI NUR AZIZAH',0,'','161710091','','','0000-00-00',0,0,0,0,150,'2015-12-21 07:32:07','2015-12-21 07:32:07'),(152,0,'HANA NAURA IQBAL',0,'','161710092','','','0000-00-00',0,0,0,0,152,'2015-12-21 07:33:49','2015-12-21 07:33:49'),(153,0,'INDRI AGUSTIN',0,'','161710093','','','0000-00-00',0,0,0,0,153,'2015-12-21 07:34:32','2015-12-21 07:34:32'),(154,0,'NADA  \'AZIZAH',0,'','161710094','','','0000-00-00',0,0,0,0,154,'2015-12-21 07:35:39','2015-12-21 07:35:39'),(155,0,'NIDA SALSABILA',0,'','161710095','','','0000-00-00',0,0,0,0,155,'2015-12-21 07:36:11','2015-12-21 07:36:11'),(156,0,'NURUL AFIIFAH',0,'','161710096','','','0000-00-00',0,0,0,0,156,'2015-12-21 07:36:55','2015-12-22 04:37:32'),(157,0,'NURUL ANNISA RIZKA RAMADHAN',0,'','161710097','','','0000-00-00',0,0,0,0,157,'2015-12-21 07:37:45','2015-12-21 07:37:45'),(158,0,'RISA ADINDA KINANTI',0,'','161710098','','','0000-00-00',0,0,0,0,158,'2015-12-21 07:38:24','2015-12-21 07:38:24'),(159,0,'RONA RASYIDAH',0,'','161710099','','','0000-00-00',0,0,0,0,159,'2015-12-21 07:39:32','2015-12-21 07:39:32'),(160,0,'SALFA HIRNI HAZIEFA',0,'','161710100','','','0000-00-00',0,0,0,0,160,'2015-12-21 07:41:15','2015-12-21 07:41:15'),(161,0,'UMMU KULTSUM',0,'','161710101','','','0000-00-00',0,0,0,0,161,'2015-12-21 07:43:22','2015-12-21 07:43:22'),(162,0,'YOAN FIKRI NUR SYA\'BAN',0,'','161710102','','','0000-00-00',0,0,0,0,162,'2015-12-21 07:45:08','2015-12-21 07:45:08'),(163,0,'MAISA AFSA SAJIDIN',0,'','161707016','','','0000-00-00',0,0,0,0,163,'2015-12-22 01:02:17','2015-12-22 01:02:17'),(164,0,'NUR LAILATUL \'AZIZAH',0,'','161707024','','','0000-00-00',0,0,0,0,164,'2015-12-22 01:06:29','2015-12-22 01:06:29'),(165,0,'MUHAMMAD FATHUROHMAN',1,'','161707017','','','0000-00-00',0,0,0,0,165,'2015-12-22 01:08:42','2015-12-22 01:08:42'),(166,0,'IRHAM MUSHOLIH',1,'','161707018','','','0000-00-00',0,0,0,0,166,'2015-12-22 01:10:20','2015-12-22 01:10:20'),(167,0,'IKHSAN TAQWIM',1,'','161707019','','','0000-00-00',0,0,0,0,167,'2015-12-22 01:11:28','2015-12-22 01:11:28'),(168,0,'MUHAMMAD GHIFAR ZAKARIA',1,'','161707020','','','0000-00-00',0,0,0,0,168,'2015-12-22 01:13:05','2015-12-22 01:13:05'),(169,0,'RIDA ULHAQ',0,'','161707021','','','0000-00-00',0,0,0,0,169,'2015-12-22 01:14:00','2015-12-22 01:14:00'),(170,0,'UBAIDILLAH',1,'','161707022','','','0000-00-00',0,0,0,0,170,'2015-12-22 01:14:55','2015-12-22 01:14:55'),(171,0,'HASNA SAMILA',0,'','161707023','','','0000-00-00',0,0,0,0,171,'2015-12-22 01:15:51','2015-12-22 01:15:51'),(172,0,'ZIHAN SITI AMINAH',0,'','161707025','','','0000-00-00',0,0,0,0,172,'2015-12-22 01:22:51','2015-12-22 01:22:51'),(173,0,'ZASKYA SITI KHADIJAH',0,'','161707026','','','0000-00-00',0,0,0,0,173,'2015-12-22 01:23:49','2015-12-22 01:23:49'),(174,0,'ULYA HAMMUDA',0,'','161707027','','','0000-00-00',0,0,0,0,174,'2015-12-22 01:37:42','2015-12-22 01:37:42'),(175,0,'MUHAMMAD FATHUL ISLAM',1,'','161701001','','TASIKMALAYA','2010-03-15',120,20,0,1,175,'2015-12-22 03:01:27','2015-12-22 04:04:41'),(177,0,'ASYFO RAUDAH PUTRI',0,'','161707028','','','0000-00-00',0,0,0,0,177,'2015-12-22 03:32:12','2015-12-22 03:32:12'),(178,0,'MUHAMMAD RIDHO AFRIANSYAH',1,'','161710104','','','0000-00-00',0,0,0,0,178,'2015-12-22 05:45:04','2015-12-22 05:45:04'),(179,0,'FAIRUZ ZHAFIRA FIRDAUS',0,'','161707029','','','0000-00-00',0,0,0,0,179,'2015-12-22 05:46:41','2015-12-22 05:46:41'),(180,0,'ABDULLAH AL-AZKA',1,'','161710105','','','0000-00-00',0,0,0,0,180,'2015-12-22 05:55:48','2015-12-22 05:55:48'),(181,0,'MIMAR ALFIANI',1,'','161710106','','','0000-00-00',0,0,0,0,181,'2015-12-22 06:10:48','2015-12-22 06:10:48'),(182,0,'MUHAMMAD SYAM RIZKY ARSIANTO',1,'','161707030','','','0000-00-00',0,0,0,0,182,'2015-12-22 06:23:23','2015-12-22 06:23:23'),(183,0,'ENCEP SUNJANA',1,'','161710107','','','0000-00-00',0,0,0,0,183,'2015-12-22 06:24:36','2015-12-22 06:24:36'),(184,0,'RIZKI FADHILAH',1,'','161710108','','','0000-00-00',0,0,0,0,184,'2015-12-22 06:25:44','2015-12-22 06:25:44'),(185,0,'MIFTAH AL-BANA',1,'','161710109','','','0000-00-00',0,0,0,0,185,'2015-12-22 06:26:56','2015-12-22 06:26:56'),(186,0,'IIS ISMAIL',1,'','161710110','','','0000-00-00',0,0,0,0,186,'2015-12-22 06:29:16','2015-12-22 06:29:16');
/*!40000 ALTER TABLE `calon_siswa` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `dokumen_calon_siswa`
--

LOCK TABLES `dokumen_calon_siswa` WRITE;
/*!40000 ALTER TABLE `dokumen_calon_siswa` DISABLE KEYS */;
INSERT INTO `dokumen_calon_siswa` VALUES (1,2,'1450239120-SURAT PERNYATAAN.pdf','2015-12-16 04:12:00','2015-12-16 04:12:00','Rapor 2 Semester Terakhir'),(2,2,'1450239120-SURAT PERNYATAAN.pdf','2015-12-16 04:12:00','2015-12-16 04:12:00','Kartu Keluarga'),(3,2,'1450239120-SURAT PERNYATAAN.pdf','2015-12-16 04:12:00','2015-12-16 04:12:00','Akta Kelahiran'),(4,2,'1450239120-SURAT PERNYATAAN.pdf','2015-12-16 04:12:00','2015-12-16 04:12:00','Pas Foto'),(5,2,'1450239120-SURAT PERNYATAAN.pdf','2015-12-16 04:12:00','2015-12-16 04:12:00','Surat Keterangan Sehat'),(6,3,'1450257808-SURAT PERNYATAAN SISWA BARU.docx','2015-12-16 09:23:28','2015-12-16 09:23:28','Rapor 2 Semester Terakhir'),(7,3,'1450257808-SURAT PERNYATAAN SISWA BARU.docx','2015-12-16 09:23:28','2015-12-16 09:23:28','Kartu Keluarga'),(8,3,'1450257808-SURAT PERNYATAAN SISWA BARU.docx','2015-12-16 09:23:28','2015-12-16 09:23:28','Akta Kelahiran'),(9,3,'1450257808-SURAT PERNYATAAN SISWA BARU.docx','2015-12-16 09:23:28','2015-12-16 09:23:28','Pas Foto'),(10,3,'1450257808-SURAT PERNYATAAN SISWA BARU.docx','2015-12-16 09:23:28','2015-12-16 09:23:28','Surat Keterangan Sehat');
/*!40000 ALTER TABLE `dokumen_calon_siswa` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `guru_mapel`
--

LOCK TABLES `guru_mapel` WRITE;
/*!40000 ALTER TABLE `guru_mapel` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_bangunan`
--

LOCK TABLES `inv_bangunan` WRITE;
/*!40000 ALTER TABLE `inv_bangunan` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `inv_tanah`
--

LOCK TABLES `inv_tanah` WRITE;
/*!40000 ALTER TABLE `inv_tanah` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jabatan`
--

LOCK TABLES `jabatan` WRITE;
/*!40000 ALTER TABLE `jabatan` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jadwal_pelajaran`
--

LOCK TABLES `jadwal_pelajaran` WRITE;
/*!40000 ALTER TABLE `jadwal_pelajaran` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jam_pelajaran`
--

LOCK TABLES `jam_pelajaran` WRITE;
/*!40000 ALTER TABLE `jam_pelajaran` DISABLE KEYS */;
/*!40000 ALTER TABLE `jam_pelajaran` ENABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_inventaris`
--

LOCK TABLES `jenis_inventaris` WRITE;
/*!40000 ALTER TABLE `jenis_inventaris` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenis_ujian`
--

LOCK TABLES `jenis_ujian` WRITE;
/*!40000 ALTER TABLE `jenis_ujian` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `jenjang`
--

LOCK TABLES `jenjang` WRITE;
/*!40000 ALTER TABLE `jenjang` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kalender_akademik`
--

LOCK TABLES `kalender_akademik` WRITE;
/*!40000 ALTER TABLE `kalender_akademik` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `karyawan`
--

LOCK TABLES `karyawan` WRITE;
/*!40000 ALTER TABLE `karyawan` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kategori_buku`
--

LOCK TABLES `kategori_buku` WRITE;
/*!40000 ALTER TABLE `kategori_buku` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas`
--

LOCK TABLES `kelas` WRITE;
/*!40000 ALTER TABLE `kelas` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `kelas_siswa`
--

LOCK TABLES `kelas_siswa` WRITE;
/*!40000 ALTER TABLE `kelas_siswa` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `keluarga_karyawan`
--

LOCK TABLES `keluarga_karyawan` WRITE;
/*!40000 ALTER TABLE `keluarga_karyawan` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `mapel`
--

LOCK TABLES `mapel` WRITE;
/*!40000 ALTER TABLE `mapel` DISABLE KEYS */;
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
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_11_24_143135_create_table_karyawan',1),('2015_11_24_153515_create_tahun_ajaran',1),('2015_11_24_215003_create_table_bagian',1),('2015_11_24_220823_create_mapel',1),('2015_11_24_221942_create_table_wali',1),('2015_11_24_224016_create_table_siswa',1),('2015_11_25_151335_create_kelas',1),('2015_11_25_151659_create_tingkat',1),('2015_11_26_103528_create_riwayat_pendidikan',1),('2015_11_26_115348_create_riwayat_kepegawaian',1),('2015_11_26_135755_add_foto_on_karyawan',1),('2015_11_26_141035_create_kelaurga_karyawan',1),('2015_11_26_152732_add_field_karyawan',1),('2015_11_26_162930_add_fields_on_siswa',1),('2015_11_26_220227_rename_transportasi',1),('2015_11_27_222425_add_fields_riwayat_pendidikan',1),('2015_11_27_231853_create_riwayat_mengajar',1),('2015_11_28_092157_create_table_pengalaman_kerja',1),('2015_11_28_100429_add_lama_on_riwayat_pendidikian',1),('2015_11_28_101058_add_ttl_on_keluarga_karyawan',1),('2015_11_28_112314_create_guru_mapel',1),('2015_11_28_132411_add_guru_in_karyawan',1),('2015_11_28_133309_create_tablle_jabatan',1),('2015_11_28_220817_create_table_jenis_tagihan',1),('2015_11_29_061655_add_jenis_ujian',1),('2015_11_29_064255_create_jns_inventaris',1),('2015_11_29_071000_create_kattegori_buku',1),('2015_11_29_071904_create_tags_buku',1),('2015_11_29_085340_create_calender_akademik',1),('2015_11_29_134048_create_tbl_tanah',1),('2015_11_29_144049_create_inv_bangunan',1),('2015_11_30_002328_create_tbl_ruangan',1),('2015_11_30_132340_add_fields_on_wali',1),('2015_11_30_140323_add_ruang_on_kelas',1),('2015_11_30_141508_create_tbl_jadwal_pelajaran',1),('2015_12_01_130412_add_column_ayah_id_ibu_id_on_siswa',1),('2015_12_01_143938_create_kelas_siswa',1),('2015_12_02_125836_create_jampelajaran',1),('2015_12_02_142126_drop_dari_sampai_add_jam_id',1),('2015_12_03_101754_create_table_jenjang',1),('2015_12_03_103017_add_jenjang_on_tingkat',1),('2015_12_03_103947_add_jenjang_on_kelas',1),('2015_12_03_104706_add_jenjang_on_jadwal_pelajaran',1),('2015_12_03_123708_add_jenjang_on_jam_pelajaran',1),('2015_12_03_135748_create_jadwal_ujian',1),('2015_12_05_110059_create_calon_siswa',1),('2015_12_09_134433_update_table_psb',1),('2015_12_09_141723_change_jenjang_and_tingkat',1),('2015_12_09_141925_add_tahun_ajaran',1),('2015_12_09_144657_change_atas_nama_to_pemegang',1),('2015_12_09_145142_create_table_rekening',1),('2015_12_09_150722_change_rekening_tujuan',1),('2015_12_10_015040_add_email_on_ortu_calon_siswa',1),('2015_12_11_063533_add_verifikasi_wawancara_on_psb',2),('2015_12_11_070454_add_test_wawancara_on_psb',2),('2015_12_11_084341_change_transportasion_on_alamat',2),('2015_12_11_160818_change_jenis_id_on_dokumen',3),('2015_12_12_175122_add_role_on_users',4),('2015_12_16_085106_add_user_id_on_psb',4),('2015_12_18_111953_add_dokumen_on_psb',5),('2015_12_20_035717_bikin_statuses',6),('2015_12_20_154551_add_alamat_on_asal_sekolah',7),('2015_12_21_053520_add_status_progress',8),('2015_12_21_150035_add_intern_on_psb',9),('2015_12_21_195839_add_tanggal_daftar_on_psb',10);
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
) ENGINE=InnoDB AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orang_tua_calon_siswa`
--

LOCK TABLES `orang_tua_calon_siswa` WRITE;
/*!40000 ALTER TABLE `orang_tua_calon_siswa` DISABLE KEYS */;
INSERT INTO `orang_tua_calon_siswa` VALUES (43,50,'Wali','DEDEN',0,0,0,0,'','','','','','','','','','','Islam',0,'2015-12-21 02:07:24','2015-12-21 02:07:24',''),(44,50,'Ayah','DEDEN SOLEH ISKANDAR',1961,9,5,3,'REUMA','02','02','44185','MEKARRAYA','KERSAMANAH','GARUT','JAWA BARATA','','085323428524','Islam',0,'2015-12-21 02:07:24','2015-12-21 02:07:24',''),(45,50,'Ibu','NURAENI',0,0,0,0,'','','','','','','','','','','Islam',0,'2015-12-21 02:07:24','2015-12-21 02:07:24',''),(46,52,'Wali','H. SUJANA',1970,9,5,4,'DUSUN KARANG KAMIRI','06','02','04639','KARANG KAMIRI','LANGKAP LANCAR','CIAMIS','JAWA BARAT','','085221316457','Islam',0,'2015-12-21 02:21:47','2015-12-21 02:21:47',''),(47,52,'Ayah','H. SUJANA',1970,9,5,4,'DUSUN KARANG KAMIRI','06','02','04639','KARANG KAMIRI','LANGKAP LANCAR','CIAMIS','JAWA BARAT','','085221316457','Islam',0,'2015-12-21 02:21:47','2015-12-21 02:21:47',''),(48,52,'Ayah','H. SUJANA',1970,9,5,4,'DUSUN KARANG KAMIRI','06','02','04639','KARANG KAMIRI','LANGKAP LANCAR','CIAMIS','JAWA BARAT','','085221316457','Islam',0,'2015-12-21 02:21:47','2015-12-21 02:21:47',''),(49,51,'Wali','HERI SUTANTO',1975,9,9,4,'PERUM BAMBU KUNING BLOK A6 NO.07','03','01','29422','BUKIT TEMPAYAN','BATU AJI','BATAM','KEPULAUAN RIAU','','08566520355','Islam',0,'2015-12-21 02:40:35','2015-12-21 02:40:35',''),(50,51,'Ayah','HERI SUTANTO',1975,9,9,4,'PERUM BAMBU KUNING BLOK A6 NO.07','03','01','29422','BUKIT TEMPAYAN','BATU AJI','BATAM','KEPULAUAN RIAU','','08566520355','Islam',0,'2015-12-21 02:40:35','2015-12-21 02:40:35',''),(51,51,'Ayah','HERI SUTANTO',1975,9,9,4,'PERUM BAMBU KUNING BLOK A6 NO.07','03','01','29422','BUKIT TEMPAYAN','BATU AJI','BATAM','KEPULAUAN RIAU','','08566520355','Islam',0,'2015-12-21 02:40:35','2015-12-21 02:40:35',''),(52,49,'Wali','UJANG WIJAYA',1974,8,6,3,'WANASARI','01','01','45466','CILANGCANG','CIKIJING','MAJALENGKA','Jawa Barat','','082128212014','Islam',0,'2015-12-21 02:40:45','2015-12-21 02:40:45',''),(53,49,'Ayah','UJANG WIJAYA',1974,8,6,3,'WANASARI','01','01','45466','CILANGCANG','CIKIJING','MAJALENGKA','Jawa Barat','','082128212014','Islam',0,'2015-12-21 02:40:45','2015-12-21 02:40:45',''),(54,49,'Ayah','UJANG WIJAYA',1974,8,6,3,'WANASARI','01','01','45466','CILANGCANG','CIKIJING','MAJALENGKA','Jawa Barat','','082128212014','Islam',0,'2015-12-21 02:40:45','2015-12-21 02:40:45',''),(55,48,'Wali','FIRDAUS',1971,4,10,3,'SIDOREJO','37','09','','SIDOREJO','SEKAMPUNG UDIK','LAMPUNG TIMUR','Lampung','','082306185089','Islam',0,'2015-12-21 03:29:02','2015-12-21 03:29:02',''),(56,48,'Ayah','FIRDAUS',1971,4,10,3,'SIDOREJO','37','09','','SIDOREJO','SEKAMPUNG UDIK','LAMPUNG TIMUR','Lampung','','082306185089','Islam',0,'2015-12-21 03:29:02','2015-12-21 03:29:02',''),(57,48,'Ayah','NURIADA',1971,4,10,3,'SIDOREJO','37','09','','SIDOREJO','SEKAMPUNG UDIK','LAMPUNG TIMUR','Lampung','','082306185089','Islam',0,'2015-12-21 03:29:02','2015-12-21 03:29:02',''),(58,54,'Wali','IDRUS',1971,5,9,4,'LAREH NAN PANJANG','-','-','-','PADANG LIMAU','KOTO','PADANG PARIAMAN','SUMATERA BARAT','','081296032300','Islam',0,'2015-12-21 03:56:44','2015-12-21 03:56:44',''),(59,54,'Ayah','IDRUS',1971,5,9,4,'LAREH NAN PANJANG','-','-','-','PADANG LIMAU','KOTO','PADANG PARIAMAN','SUMATERA BARAT','','081296032300','Islam',0,'2015-12-21 03:56:44','2015-12-21 03:56:44',''),(60,54,'Ayah','DESMANIAR',1975,4,9,1,'LAREH NAN PANJANG','-','-','-','PADANG LIMAU','KOTO','PADANG PARIAMAN','SUMATERA BARAT','','081296032300','Islam',0,'2015-12-21 03:56:44','2015-12-21 03:56:44',''),(61,74,'Wali','USUP',1972,3,9,0,'BANJARANYAR','01','01','46383','BANJAANYAR','BANJARSARI','CIAMIS','Jawa Barat','','085294119722','Islam',0,'2015-12-21 04:25:02','2015-12-21 04:25:02',''),(62,74,'Ayah','USUP',1972,3,9,0,'BANJARANYAR','01','01','46383','BANJAANYAR','BANJARSARI','CIAMIS','Jawa Barat','','085294119722','Islam',0,'2015-12-21 04:25:02','2015-12-21 04:25:02',''),(63,74,'Ayah','TATI',1977,3,1,0,'BANJARANYAR','01','01','46383','BANJAANYAR','BANJARSARI','CIAMIS','Jawa Barat','','085294119722','Islam',0,'2015-12-21 04:25:02','2015-12-21 04:25:02',''),(64,75,'Wali','AGUS',1970,5,6,3,'PERUM PURI KOSAMBI','02','15','41371','DUREN','KLARI','KARAWANG','JAWA BARAT','','081380809717','Islam',0,'2015-12-21 04:34:59','2015-12-21 04:34:59',''),(65,75,'Ayah','AGUS',1970,5,6,3,'PERUM PURI KOSAMBI','02','15','41371','DUREN','KLARI','KARAWANG','JAWA BARAT','','081380809717','Islam',0,'2015-12-21 04:34:59','2015-12-21 04:34:59',''),(66,75,'Ayah','SRI LESTARI',1969,5,1,0,'PERUM PURI KOSAMBI','02','15','41371','DUREN','KLARI','KARAWANG','JAWA BARAT','','082112127828','Islam',0,'2015-12-21 04:34:59','2015-12-21 04:34:59',''),(67,0,'Ibu','TATI',1977,0,0,0,'','','','','','','','','','','Islam',0,'2015-12-21 05:12:28','2015-12-21 05:12:28',''),(68,0,'Ayah','ENTIN KARTINI',1979,5,1,0,'WANASARI','01','01','45466','CILANGCANG','CIKIJING','MAJALENGKA','Jawa Barat','','082128212014','Islam',0,'2015-12-21 06:06:21','2015-12-21 06:06:21',''),(69,98,'Wali','CECEP NAJMUDIN',1977,4,3,3,'KP. CIPICUNG','04','02','46192','TANJUNGSARI','SALOPA','TASIKMALAYA','Jawa Barat','','085314629143','Islam',0,'2015-12-21 07:34:59','2015-12-21 07:34:59',''),(70,98,'Ayah','CECEP NAJMUDIN',1977,4,3,3,'KP. CIPICUNG','04','02','46192','TANJUNGSARI','SALOPA','TASIKMALAYA','Jawa Barat','','085314629143','Islam',0,'2015-12-21 07:34:59','2015-12-21 07:34:59',''),(71,98,'Ayah','TUTI SABANIAH',1981,4,1,0,'KP. CIPICUNG','04','02','46192','TANJUNGSARI','SALOPA','TASIKMALAYA','Jawa Barat','','085314629143','Islam',0,'2015-12-21 07:34:59','2015-12-21 07:34:59',''),(72,99,'Wali','KHAIRUL',1976,5,9,4,'GARDENIA I BLOK XG 16 NO. 36','03','11','99999','MEKARSARI','PANONGAN','TANGERANG','BANTEN','','082111237028','Islam',0,'2015-12-21 07:45:07','2015-12-21 07:45:07',''),(73,99,'Ayah','KHAIRUL',1976,5,9,4,'GARDENIA I BLOK XG 16 NO. 36','03','11','99999','MEKARSARI','PANONGAN','TANGERANG','BANTEN','','082111237028','Islam',0,'2015-12-21 07:45:07','2015-12-21 07:45:07',''),(74,99,'Ayah','TITA ROSITA',1976,5,1,0,'GARDENIA I BLOK XG 16 NO. 36','03','11','99999','MEKARSARI','PANONGAN','TANGERANG','BANTEN','','082111237028','Islam',0,'2015-12-21 07:45:07','2015-12-21 07:45:07',''),(75,175,'Wali','SANI ALI ROHMAN',1984,5,6,2,'JL. LETJEN IBRAHIM ADJI','2','5','46151','INDIHIANG','INDIHIANG','KOTA TASIKMALAYA','Jawa Barat','','085223172854','Islam',0,'2015-12-22 04:04:41','2015-12-22 04:04:41',''),(76,175,'Ayah','SANI ALI ROHMAN',1984,5,6,2,'JL. LETJEN IBRAHIM ADJI','2','5','46151','INDIHIANG','INDIHIANG','KOTA TASIKMALAYA','Jawa Barat','','085223172854','Islam',0,'2015-12-22 04:04:41','2015-12-22 04:04:41',''),(77,175,'Ayah','ASRI AISNA NURIA',1989,5,6,2,'JL. LETJEN IBRAHIM ADJI','2','5','46151','INDIHIANG','INDIHIANG','KOTA TASIKMALAYA','Jawa Barat','','085223172854','Islam',0,'2015-12-22 04:04:41','2015-12-22 04:04:41',''),(78,0,'Ayah','DESMANIAR',1974,5,1,0,'LAREH NAN PANJANG','-','-','-','PADANG LIMAU','KOTO','PADANG PARIAMAN','SUMATERA BARAT','','081296032300','Islam',0,'2015-12-22 06:01:58','2015-12-22 06:01:58',''),(79,0,'Ayah','DESMANIAR',1974,3,1,0,'LAREH NAN PANJANG','-','-','-','PADANG LIMAU','KOTO','PADANG PARIAMAN','SUMATERA BARAT','','081296032300','Islam',0,'2015-12-22 06:03:20','2015-12-22 06:03:20','');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengalaman_kerja`
--

LOCK TABLES `pengalaman_kerja` WRITE;
/*!40000 ALTER TABLE `pengalaman_kerja` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prestasi_calon_siswa`
--

LOCK TABLES `prestasi_calon_siswa` WRITE;
/*!40000 ALTER TABLE `prestasi_calon_siswa` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=187 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `psb`
--

LOCK TABLES `psb` WRITE;
/*!40000 ALTER TABLE `psb` DISABLE KEYS */;
INSERT INTO `psb` VALUES (43,2,7,0,0,'','2015-12-21 01:36:34','2015-12-22 06:15:33','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-21'),(44,2,7,0,0,'','2015-12-21 01:39:36','2015-12-22 06:15:33','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-21'),(45,2,7,0,0,'','2015-12-21 01:40:47','2015-12-22 06:15:33','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-21'),(46,2,7,0,0,'','2015-12-21 01:42:03','2015-12-22 06:15:33','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-21'),(47,2,7,0,0,'','2015-12-21 01:43:13','2015-12-22 06:15:33','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-21'),(48,2,7,0,0,'','2015-12-21 01:43:32','2015-12-22 06:15:33','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,'0000-00-00 00:00:00',0,1,1,1,1,0,1,0,0,0,0,7,0,'2015-12-21'),(49,2,7,0,0,'','2015-12-21 01:43:59','2015-12-22 06:15:33','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,'0000-00-00 00:00:00',0,1,1,1,1,1,1,0,0,0,0,7,0,'2015-12-21'),(50,2,7,0,0,'','2015-12-21 01:44:45','2015-12-22 06:15:33','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,1,1,0,0,1,0,0,0,0,4,0,'2015-12-21'),(51,3,10,0,0,'','2015-12-21 01:47:21','2015-12-22 04:56:38','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,1,1,1,1,1,0,0,0,0,4,0,'2015-12-21'),(52,3,10,0,0,'','2015-12-21 01:48:10','2015-12-22 01:55:01','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,'0000-00-00 00:00:00',0,0,1,1,0,0,1,0,1,0,0,7,0,'2015-12-21'),(53,2,7,0,0,'','2015-12-21 01:51:54','2015-12-22 06:15:33','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-21'),(54,2,7,0,0,'','2015-12-21 02:17:06','2015-12-22 06:01:57','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,1,0,0,1,0,0,0,0,4,0,'2015-12-21'),(55,3,10,0,0,'','2015-12-21 03:14:59','2015-12-22 01:44:05','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-11'),(56,3,10,0,0,'','2015-12-21 03:16:15','2015-12-22 01:48:20','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-12'),(57,3,10,0,0,'','2015-12-21 03:17:04','2015-12-22 01:51:52','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-10'),(58,3,10,0,0,'','2015-12-21 03:20:59','2015-12-22 02:38:03','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-13'),(59,3,10,0,0,'','2015-12-21 03:22:04','2015-12-22 03:37:21','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(60,3,10,0,0,'','2015-12-21 03:23:09','2015-12-22 03:47:20','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(61,3,10,0,0,'','2015-12-21 03:23:57','2015-12-22 04:41:24','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-11-12'),(62,3,10,0,0,'','2015-12-21 03:24:54','2015-12-22 04:45:53','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(63,3,10,0,0,'','2015-12-21 03:29:51','2015-12-22 04:54:54','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(64,3,10,0,0,'','2015-12-21 03:30:38','2015-12-22 05:05:33','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(65,3,10,0,0,'','2015-12-21 03:31:26','2015-12-22 02:17:07','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-15'),(66,3,10,0,0,'','2015-12-21 03:33:25','2015-12-22 02:22:39','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-15'),(67,3,10,0,0,'','2015-12-21 03:34:10','2015-12-22 02:39:26','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(68,3,10,0,0,'','2015-12-21 03:34:54','2015-12-22 02:43:16','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-12'),(69,3,10,0,0,'','2015-12-21 03:35:38','2015-12-22 02:45:31','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(70,3,10,0,0,'','2015-12-21 03:36:27','2015-12-22 03:33:58','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-12'),(71,3,10,0,0,'','2015-12-21 03:37:12','2015-12-22 03:46:48','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-10-12'),(72,3,10,0,0,'','2015-12-21 03:38:17','2015-12-22 04:51:49','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(73,3,10,0,0,'','2015-12-21 03:38:50','2015-12-22 02:22:09','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(74,2,7,0,0,'','2015-12-21 03:41:21','2015-12-22 06:15:33','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',1,'0000-00-00 00:00:00','0000-00-00 00:00:00',1,'0000-00-00 00:00:00',0,1,1,1,1,0,1,0,0,0,0,7,0,'2015-12-21'),(75,2,7,0,0,'','2015-12-21 03:42:26','2015-12-22 06:15:33','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,1,1,1,1,1,0,0,0,0,4,0,'2015-12-21'),(76,3,10,0,0,'','2015-12-21 03:51:07','2015-12-22 03:33:28','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-12'),(77,3,10,0,0,'','2015-12-21 03:52:02','2015-12-22 04:40:19','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(78,3,10,0,0,'','2015-12-21 03:55:13','2015-12-22 01:26:47','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-15'),(79,3,10,0,0,'','2015-12-21 03:56:16','2015-12-22 01:45:32','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-11-12'),(80,3,10,0,0,'','2015-12-21 03:57:09','2015-12-22 02:00:38','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-10-12'),(81,3,10,0,0,'','2015-12-21 03:57:46','2015-12-22 02:21:43','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-16'),(82,3,10,0,0,'','2015-12-21 03:58:44','2015-12-22 02:24:17','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-10-12'),(83,3,10,0,0,'','2015-12-21 03:59:28','2015-12-22 02:24:51','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(84,3,10,0,0,'','2015-12-21 04:00:24','2015-12-22 02:47:23','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-15'),(85,3,10,0,0,'','2015-12-21 04:09:52','2015-12-22 01:46:51','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,0,'2015-12-21'),(86,3,10,0,0,'','2015-12-21 06:03:12','2015-12-22 02:48:11','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-12'),(87,3,10,0,0,'','2015-12-21 06:09:34','2015-12-22 03:36:03','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-10'),(88,3,10,0,0,'','2015-12-21 06:11:05','2015-12-22 03:46:05','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-11-12'),(89,3,10,0,0,'','2015-12-21 06:14:43','2015-12-22 04:19:46','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-10-12'),(90,3,10,0,0,'','2015-12-21 06:16:36','2015-12-22 04:20:49','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-13'),(91,3,10,0,0,'','2015-12-21 06:17:48','2015-12-22 04:43:02','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(92,3,10,0,0,'','2015-12-21 06:19:07','2015-12-22 04:46:21','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(93,3,10,0,0,'','2015-12-21 06:19:48','2015-12-22 04:50:28','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-12'),(94,3,10,0,0,'','2015-12-21 06:20:19','2015-12-22 05:05:53','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(95,3,10,0,0,'','2015-12-21 06:21:09','2015-12-22 01:41:56','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(96,3,10,0,0,'','2015-12-21 06:22:15','2015-12-22 01:58:59','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-15'),(97,3,10,0,0,'','2015-12-21 06:24:39','2015-12-22 01:59:36','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(98,2,7,0,0,'','2015-12-21 06:27:23','2015-12-22 06:15:33','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,1,1,0,1,1,0,0,0,0,4,0,'2015-12-21'),(99,2,7,0,0,'','2015-12-21 06:28:20','2015-12-22 06:15:33','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,1,1,1,1,0,1,0,0,0,0,4,0,'2015-12-21'),(100,2,7,0,0,'','2015-12-21 06:32:58','2015-12-22 06:15:33','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-21'),(101,3,10,0,0,'','2015-12-21 06:33:55','2015-12-22 02:45:40','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(102,3,10,0,0,'','2015-12-21 06:34:31','2015-12-22 02:28:46','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-15'),(103,3,10,0,0,'','2015-12-21 06:35:14','2015-12-22 02:14:41','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(104,3,10,0,0,'','2015-12-21 06:36:01','2015-12-22 02:15:13','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(105,3,10,0,0,'','2015-12-21 06:36:58','2015-12-22 02:19:41','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-15'),(106,3,10,0,0,'','2015-12-21 06:37:50','2015-12-22 02:20:04','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-15'),(107,3,10,0,0,'','2015-12-21 06:39:06','2015-12-22 04:35:11','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-10'),(108,3,10,0,0,'','2015-12-21 06:39:56','2015-12-22 04:38:36','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(109,3,10,0,0,'','2015-12-21 06:40:31','2015-12-22 04:49:28','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(110,3,10,0,0,'','2015-12-21 06:41:04','2015-12-22 04:49:56','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(111,3,10,0,0,'','2015-12-21 06:42:00','2015-12-22 04:52:23','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(112,3,10,0,0,'','2015-12-21 06:42:38','2015-12-22 05:02:39','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(113,3,10,0,0,'','2015-12-21 06:45:46','2015-12-22 05:03:13','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(114,3,10,0,0,'','2015-12-21 06:51:49','2015-12-22 05:03:29','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(115,3,10,0,0,'','2015-12-21 06:53:29','2015-12-22 01:49:29','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-15'),(116,3,10,0,0,'','2015-12-21 06:55:07','2015-12-22 01:50:31','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(117,3,10,0,0,'','2015-12-21 06:56:43','2015-12-22 01:52:40','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(119,3,10,0,0,'','2015-12-21 06:57:30','2015-12-22 02:40:37','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(120,3,10,0,0,'','2015-12-21 06:58:41','2015-12-22 04:23:10','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-11-12'),(121,3,10,0,0,'','2015-12-21 06:59:21','2015-12-22 04:33:44','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-12'),(122,3,10,0,0,'','2015-12-21 07:00:04','2015-12-22 04:34:33','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(123,3,10,0,0,'','2015-12-21 07:00:57','2015-12-22 04:48:48','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(124,3,10,0,0,'','2015-12-21 07:01:36','2015-12-22 04:52:59','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-16'),(125,3,10,0,0,'','2015-12-21 07:02:19','2015-12-22 04:53:21','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(126,3,10,0,0,'','2015-12-21 07:03:05','2015-12-22 04:53:44','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-13'),(127,3,10,0,0,'','2015-12-21 07:03:48','2015-12-22 04:55:21','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(128,3,10,0,0,'','2015-12-21 07:04:17','2015-12-22 04:56:06','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-12'),(129,3,10,0,0,'','2015-12-21 07:07:39','2015-12-22 05:01:18','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(130,3,10,0,0,'','2015-12-21 07:08:10','2015-12-22 01:41:17','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-12'),(131,3,10,0,0,'','2015-12-21 07:08:48','2015-12-22 01:56:36','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-12'),(132,3,10,0,0,'','2015-12-21 07:12:06','2015-12-22 02:15:57','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-13'),(133,3,10,0,0,'','2015-12-21 07:12:45','2015-12-22 02:26:10','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-12'),(134,3,10,0,0,'','2015-12-21 07:13:32','2015-12-22 02:26:35','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-17'),(135,3,10,0,0,'','2015-12-21 07:14:12','2015-12-22 02:38:48','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-15'),(136,3,10,0,0,'','2015-12-21 07:19:55','2015-12-22 02:40:11','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-12'),(137,3,10,0,0,'','2015-12-21 07:20:47','2015-12-22 02:42:14','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-15'),(138,3,10,0,0,'','2015-12-21 07:21:19','2015-12-22 02:42:34','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-11'),(139,3,10,0,0,'','2015-12-21 07:22:00','2015-12-22 03:27:39','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(140,3,10,0,0,'','2015-12-21 07:22:31','2015-12-22 03:28:53','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(141,3,10,0,0,'','2015-12-21 07:23:10','2015-12-22 03:34:53','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-11'),(142,3,10,0,0,'','2015-12-21 07:24:05','2015-12-22 03:35:26','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-16'),(143,3,10,0,0,'','2015-12-21 07:25:09','2015-12-22 04:36:29','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-12'),(144,3,10,0,0,'','2015-12-21 07:25:50','2015-12-22 04:39:18','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-13'),(145,3,10,0,0,'','2015-12-21 07:26:24','2015-12-22 04:40:50','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(146,3,10,0,0,'','2015-12-21 07:28:09','2015-12-22 04:55:39','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(147,3,10,0,0,'','2015-12-21 07:29:07','2015-12-22 01:36:55','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-10-12'),(148,3,10,0,0,'','2015-12-21 07:30:20','2015-12-22 01:51:33','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-10'),(149,3,10,0,0,'','2015-12-21 07:30:55','2015-12-22 01:58:04','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-12'),(150,3,10,0,0,'','2015-12-21 07:32:07','2015-12-22 02:45:16','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(152,3,10,0,0,'','2015-12-21 07:33:49','2015-12-22 02:41:19','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,2,1,'2015-12-14'),(153,3,10,0,0,'','2015-12-21 07:34:32','2015-12-22 02:47:19','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-12'),(154,3,10,0,0,'','2015-12-21 07:35:39','2015-12-22 04:21:32','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-11'),(155,3,10,0,0,'','2015-12-21 07:36:11','2015-12-22 04:33:26','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(156,3,10,0,0,'','2015-12-21 07:36:55','2015-12-22 04:37:32','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-12'),(157,3,10,0,0,'','2015-12-21 07:37:44','2015-12-22 04:37:58','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(158,3,10,0,0,'','2015-12-21 07:38:24','2015-12-22 04:42:19','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-12'),(159,3,10,0,0,'','2015-12-21 07:39:32','2015-12-22 04:42:35','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-12'),(160,3,10,0,0,'','2015-12-21 07:41:15','2015-12-22 04:48:30','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(161,3,10,0,0,'','2015-12-21 07:43:22','2015-12-22 04:57:30','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-14'),(162,3,10,0,0,'','2015-12-21 07:45:08','2015-12-22 05:05:11','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(163,2,7,0,0,'','2015-12-22 01:02:17','2015-12-22 01:02:17','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-18'),(164,2,7,0,0,'','2015-12-22 01:06:29','2015-12-22 01:06:29','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-22'),(165,2,7,0,0,'','2015-12-22 01:08:42','2015-12-22 01:08:42','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-16'),(166,2,7,0,0,'','2015-12-22 01:10:20','2015-12-22 01:10:20','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-17'),(167,2,7,0,0,'','2015-12-22 01:11:28','2015-12-22 01:11:28','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-18'),(168,2,7,0,0,'','2015-12-22 01:13:05','2015-12-22 01:13:05','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-18'),(169,2,7,0,0,'','2015-12-22 01:14:00','2015-12-22 01:14:00','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-18'),(170,2,7,0,0,'','2015-12-22 01:14:55','2015-12-22 01:14:55','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-18'),(171,2,7,0,0,'','2015-12-22 01:15:51','2015-12-22 01:15:51','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-18'),(172,2,7,0,0,'','2015-12-22 01:22:51','2015-12-22 01:22:51','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-11-23'),(173,2,7,0,0,'','2015-12-22 01:23:49','2015-12-22 01:23:49','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-11-23'),(174,2,7,0,0,'','2015-12-22 01:37:42','2015-12-22 01:37:42','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-22'),(175,1,1,0,0,'','2015-12-22 03:01:27','2015-12-22 04:04:41','0000-00-00','','','','',0,'',1,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,3,0,'2015-12-22'),(177,2,7,0,0,'','2015-12-22 03:32:12','2015-12-22 03:32:12','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-22'),(178,3,10,0,0,'','2015-12-22 05:45:04','2015-12-22 05:45:04','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-22'),(179,2,7,0,0,'','2015-12-22 05:46:41','2015-12-22 05:46:41','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-22'),(180,3,10,0,0,'','2015-12-22 05:55:48','2015-12-22 05:55:49','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(181,3,10,0,0,'','2015-12-22 06:10:48','2015-12-22 06:10:48','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-11-12'),(182,2,7,0,0,'','2015-12-22 06:23:23','2015-12-22 06:23:23','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,0,'2015-12-22'),(183,3,10,0,0,'','2015-12-22 06:24:36','2015-12-22 06:24:36','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-11-12'),(184,3,10,0,0,'','2015-12-22 06:25:44','2015-12-22 06:25:44','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-13'),(185,3,10,0,0,'','2015-12-22 06:26:56','2015-12-22 06:26:56','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-12-15'),(186,3,10,0,0,'','2015-12-22 06:29:16','2015-12-22 06:29:16','0000-00-00','','','','',0,'',0,'0000-00-00 00:00:00','2016/2017',0,0,'0000-00-00 00:00:00',0,'0000-00-00 00:00:00','0000-00-00 00:00:00',0,'0000-00-00 00:00:00',0,0,0,0,0,0,0,0,0,0,0,1,1,'2015-11-12');
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rekening`
--

LOCK TABLES `rekening` WRITE;
/*!40000 ALTER TABLE `rekening` DISABLE KEYS */;
INSERT INTO `rekening` VALUES (1,'BNI Syariah','SDIT ASSUNNAH','1436 2015 25','Untuk Jenjang SD','2015-12-10 23:30:14','2015-12-10 23:30:14'),(2,'BNI Syariah','SMPIT ASSUNNAH','1436 2015 36','Untuk jenjang SMP','2015-12-10 23:30:48','2015-12-10 23:30:48'),(3,'BNI Syariah','SMAIT ASSUNNAH','1436 2015 47','Untuk jenjang SMA dan TBA','2015-12-10 23:31:38','2015-12-10 23:31:38');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayat_kepegawaian`
--

LOCK TABLES `riwayat_kepegawaian` WRITE;
/*!40000 ALTER TABLE `riwayat_kepegawaian` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayat_mengajar`
--

LOCK TABLES `riwayat_mengajar` WRITE;
/*!40000 ALTER TABLE `riwayat_mengajar` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `riwayat_pendidikan`
--

LOCK TABLES `riwayat_pendidikan` WRITE;
/*!40000 ALTER TABLE `riwayat_pendidikan` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ruangan`
--

LOCK TABLES `ruangan` WRITE;
/*!40000 ALTER TABLE `ruangan` DISABLE KEYS */;
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
  `suku` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
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
  `ayah_id` int(10) unsigned NOT NULL,
  `ibu_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `siswa`
--

LOCK TABLES `siswa` WRITE;
/*!40000 ALTER TABLE `siswa` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ta`
--

LOCK TABLES `ta` WRITE;
/*!40000 ALTER TABLE `ta` DISABLE KEYS */;
INSERT INTO `ta` VALUES (1,'2016/2017','0000-00-00','0000-00-00',1,'2015-12-16 02:10:07','2015-12-16 02:10:07');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tagihan`
--

LOCK TABLES `tagihan` WRITE;
/*!40000 ALTER TABLE `tagihan` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tags_buku`
--

LOCK TABLES `tags_buku` WRITE;
/*!40000 ALTER TABLE `tags_buku` DISABLE KEYS */;
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tingkat`
--

LOCK TABLES `tingkat` WRITE;
/*!40000 ALTER TABLE `tingkat` DISABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=68 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'Bagas Udi Sahsangka','udibagas@gmail.com','$2y$10$YG27FBA71jw1qb7zOnYTUOL8vQlCuYFnrgjHyTyCFzvDDrvJQg056','uIYgo2nHmbzETzXe12YcarsbiDu6hi8vu26Rrq9Ffkp7RaHpJ8enU6I2Bxa8','2015-12-10 06:57:36','2015-12-19 02:15:16','admin'),(2,'Panitia PSB MIAS','panitiapsbmias@gmail.com','$2y$10$woBsqHID3U5g2P7ZdM9cNO/wBcIJ14Jb47i29xsGQ5LWbZ8qh57U2','IOXr4z14l7s0bM7fhzRt3kzEqa4n5Y7yNg80HeCMBT9y0hvcGQEJUYU4yLab','2015-12-11 16:48:01','2015-12-18 07:43:05','admin'),(8,'agus amd','abuhilmi','$2y$10$wU1o8XDfojMXbCWxWHrMe.Ea2TnlX.KHm7h3Ggz1LG3VUKKIlU4a.','uoBXpb4InRNY8xUdTUPELdFLXCy1BDkEVAtFod4mhYthvtjskhoSAZhPwWYF','2015-12-17 04:10:38','2015-12-21 11:00:55','data'),(11,'abuurwah','abuurwah','$2y$10$UGTJZqSOTM9XF5dfxVrbc.etL1tA9fCIbQqSma4RjSVx.Z.6d2vfm','4ZnOWuxHbSvB5l8LBPikeiFQdHGVLkIQe0eKgYTRKXQZN1g3myeiGFoaYYne','2015-12-17 10:31:24','2015-12-21 10:09:47','admin'),(12,'Ali','Ali','$2y$10$bgKzghhLygn6AHO.3FHj5eK0QD9ejtgFAlfDePfBmf4Me0Al7fBoO',NULL,'2015-12-17 10:33:28','2015-12-17 10:33:28','pendaftar'),(14,'Ali','aliali','$2y$10$ypEDKjdZblo8xMTOXurROOYNHLipN0XqtRNbAXOCYz56OizqcN2sK',NULL,'2015-12-17 10:42:53','2015-12-17 10:42:53','pendaftar'),(35,'hamdan yuafi','hamdanyuafi9@gmail.com','$2y$10$8iIRneEiMBW5lj26yF80v.aQgGicZJmBkrUFl3ZDATfqkKe0TidsO','ozFm2u24AD9wqLQU9ZJjgR5luTZV3XBn43M9AWBQugm3tdBhLAJdfOzvaAtd','2015-12-19 03:25:06','2015-12-21 00:56:56','admin'),(36,'Didi Fahrudin','didikeuangan','$2y$10$CtMFe00xa1d40i1UPIGOPec7WEGkoZTdWtNMW/3DshhZ2cJ7iVFSK','vadYyPB4nee048Z3Gc50u4v4JIRbZUpHVQzhSuzQSKNo1JOWveh5tQmXoxf9','2015-12-19 03:29:57','2015-12-20 23:51:06','keuangan'),(37,'dodi oktavendi','dodi123','$2y$10$0GFy89HFzobA52GtfAw57emG5UxG1nmAljrsOWaMmAezH7o7SZQyS','In3wJnIpblRQ16y8VsiRrH0uuVpmuBFwJ9ZYs4TC91CVmAeITbH2HIsAnE9y','2015-12-19 03:32:09','2015-12-21 00:54:30','test-wawancara'),(38,'hafit muhammad fahruzi','hafit123','$2y$10$7YdulUPgygKLzPrHKEEC1eyMY0/LSLGJaZYUAEt.aa1g7JoKg/84e',NULL,'2015-12-19 03:32:55','2015-12-22 01:26:28','admin'),(39,'Hamba Allah','Hamba Allah','$2y$10$udtIVdFWbaIPDLCoeEvfSOW6Pip15RnVnHqjw4z9gKzo/.GPkttlm',NULL,'2015-12-19 03:39:11','2015-12-19 03:39:11','pendaftar'),(40,'ana walad muslim','ana walad muslim','$2y$10$OAAyJPCI5Wf57pL26yI.RuUs.ioEdGCPq9k3cne4rCdJ/Cglcp5UC','upPG4suEdsov4VyUER4TPvfNuQ9A60qb39dOIeMa7cREdnSRA5nAAj0dJlFK','2015-12-19 04:13:44','2015-12-19 04:15:57','pendaftar'),(41,'Herdiaman','uaherher@gmail.com','$2y$10$z2VzJ9FS.ch6uVzVh2VExuhC7OXAInQUXIDvtVB1X5yF0t3L/2FfS','wLHiiVYkb3tiUrSzt3xUw7LcqXrsU0plOoxHXCT3qq2yap6ufEcdUFKeWn78','2015-12-19 06:35:02','2015-12-22 03:11:41','admin'),(42,'AGUS ANWAR HIDAYAT','agus.anwar79@yahoo.co.id','$2y$10$UKezkzMOj6f3hdinTPdHCO0dJUxCWDyaR3WicXjH.VO8jtHQgt73W','xzW08iVTpmSFckRSF8aWkmFlcb5wMJ1JqZwTuqh1c08CcrV6XFAZxvBhwrHJ','2015-12-19 06:36:19','2015-12-22 05:56:31','data'),(44,'ujang soleh','ujang soleh','$2y$10$i/58LEo.8jyOcJpnK5s4kONUnIj5qKmfpUbte5TwE/KHDClZU6Ye2',NULL,'2015-12-19 06:43:25','2015-12-19 06:43:25','pendaftar'),(45,'AHMAD','AHMAD','$2y$10$lFOBQ4cnT8Pun9AodedpLuaEVWn3QAiPIO2NtFz6tYC9UePtYF5qW',NULL,'2015-12-19 06:43:25','2015-12-19 06:43:25','pendaftar'),(46,'AA SANDI MULYADI 2','aasandimulyadi','$2y$10$G/6HCFz9lIbE9X8AFYILSO8dHzS7NVfvGYs6cmosXp4jv4ngBnXfu','2zZw0wGZ0pS08bgQ1FN0pYKP3Mk9aT8gvIISYHobBcFHNIXF2PGJ6piL6MEO','2015-12-19 06:45:57','2015-12-21 01:51:43','data'),(47,'aa sandi','aa sandi','$2y$10$dbfs324UjyUWSWqKZASIk./bFvGerYay.CUvqSwPNF3m.R5/zJogC',NULL,'2015-12-19 06:55:48','2015-12-19 06:55:48','pendaftar'),(49,'Muhammad Firdaus','firdaus123','$2y$10$bcfHRQNsFEJIvQJ9rlTYjuiFstLjAJ/9cjHD4VW1Z6JkRfhQvLUge','JRW9siThyZavuIjTFK0tclNwaoSeSWujm1gYQtGvgCwGKDFIQFX8sPMdQIfE','2015-12-21 00:55:53','2015-12-21 04:43:25','pendaftaran'),(50,'Guntur','guntur123','$2y$10$nRUofLarzSS8q0Ae1SFc.OBSL5WoyiwjjfualAVjThqsD5yfAyVya','S1YetcGYFThb2PMOzPPUnuXhIfCqIPDSDvtMaBm0WcNPMbqglHM4wqThy8yP','2015-12-21 00:56:45','2015-12-22 05:42:17','pendaftaran'),(51,'yudi mulyana','yudikeuangan','$2y$10$459EWbEEgzksm8Jh93f2tuzP4AQOn65pu4Nlwz7o2EH1li7lL2bLC',NULL,'2015-12-21 00:58:37','2015-12-22 01:22:40','keuangan'),(52,'Heri Iman Santoso','heri123','$2y$10$LXdLu7w0NaKxEk2VxuvkO.m.SZ9WVaAZbkN2XlnyuQP7djiyqP.U.',NULL,'2015-12-21 01:02:23','2015-12-22 01:26:39','admin'),(53,'Dedi Permadi','dedi123','$2y$10$yf9jRQ3WtgpGL2w18zEzOeGxXs3tH2lzMZWZ6juR60OYJ7gjZyfAa','F5sSuZPZmmliVckJfArf4Ey9SFt4VkPdwxW9Tmi0p4NfdiGUAik7ej7Cz2Al','2015-12-21 01:02:53','2015-12-21 16:00:48','wawancara-orangtua'),(54,'Suryana','suryana123','$2y$10$pMWVXfGuaYBxc3wYQpEMyOxyP4wGlxLSDZ0U0/AX.OA3Ui6TDqxdy',NULL,'2015-12-21 01:03:26','2015-12-21 01:03:26','wawancara-orangtua'),(55,'Roby Ariyanto','roby123','$2y$10$GpOw04pFczLYbL.CYj2tx.nH3RPCInEfdHogPt/YOAUtR2L.kIe4e',NULL,'2015-12-21 01:04:11','2015-12-21 01:04:11','test-wawancara'),(56,'Usep','usep123','$2y$10$nAbX1lRq651/yTUj1kETN.68lc08lkEU3nIOBv4xoHkYh9xcNaJ6i','0WNA2EgPPeWADgisCEv3Q0R4OQV9HJEc9ty5l351GKHerhcMt0PsZiedqLFd','2015-12-21 01:04:55','2015-12-21 02:04:32','data'),(57,'Admin Input Data','admindata','$2y$10$n0KT0zrSmPY4lSqV1fO8lu4r89YvLthqI/7FUekgXQFvnRUZSAwEG','mHquTtE08J1eV4mtkSDoFgtZhiTcKdRDpuebBHz1oByitoOFuKS0PqMAWpKH','2015-12-21 01:05:27','2015-12-21 02:05:38','admin'),(58,'Abdul Badie','abdulbadi123','$2y$10$sSASJ4eVejAY8tbDnBQ68.AHtiz0DsX2i5dX0roGNPuImRmLHGshK','qoX0Izd7M1RE48wJZEflJclrb74nJuo6YrePWxKYPitJBuSVk0XKNvpazcbf','2015-12-21 01:07:02','2015-12-21 05:54:16','test-wawancara'),(59,'MAYA ISWAHYUNI','maya123','$2y$10$y31DfihiZSlGrFeGmkn7GewOSLW3CMatzi7kPngjIi8fmgDxk1Lte',NULL,'2015-12-22 01:19:41','2015-12-22 01:19:41','test-wawancara'),(60,'Ai Nurina','ainurina123','$2y$10$.45pG6kdyxEqBNKs7qeFzu0S8UYxX6jVxazwy9br/ZTnbzSCMXgEq',NULL,'2015-12-22 01:20:13','2015-12-22 01:20:13','test-wawancara'),(61,'Qurrota A\'ayunin','qurrota123','$2y$10$BzmDBEUvIJ.WeoTxjO12Pek7vqNRbaz6qRtOON.tUlW/jW5Ynics2',NULL,'2015-12-22 01:20:45','2015-12-22 01:20:45','test-wawancara'),(62,'Barkah Ramdhani','barkah123','$2y$10$TMN6kmVvuZp8uHqO30d5BuU/kgz9TbSMls1KiN6d2KSQp0F4NrOoK',NULL,'2015-12-22 01:21:16','2015-12-22 01:21:16','test-wawancara'),(63,'Jerry','jerry123','$2y$10$Z.CwRnh7DuS8zYV9UCDffuN8fh9QfVrPVHXWEpaE/v003WJwHOemO',NULL,'2015-12-22 01:21:43','2015-12-22 01:21:43','test-wawancara'),(64,'Muhammad Muslih','muslih123','$2y$10$9K.OcHfNFESqft6RSZG12emXc5UERn.XziZ8xO3DazkDlt/5oDxAe',NULL,'2015-12-22 01:23:28','2015-12-22 01:23:28','pendaftaran'),(65,'Abu Fawwaz','dani123','$2y$10$e/2kxAnEmJXDfnSjrSxsou0RQ1PH/dm2zkR4VYtj83MlBDht7Zbty',NULL,'2015-12-22 01:24:27','2015-12-22 01:24:27','admin'),(66,'Rijal Arifin','rijal123','$2y$10$NUoeRMoNPGvCzqDuvsNV6.0S547djFEkoRjeP1Px/UrZYsgz52lNO',NULL,'2015-12-22 01:24:51','2015-12-22 01:24:51','admin'),(67,'Arip Rifai','arip123','$2y$10$YAnXNVJXyPh6poXMf9BkY.gOJMQDsk2CTlQJ874ASxVNMjrpjScPC',NULL,'2015-12-22 01:25:19','2015-12-22 01:25:19','admin');
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wali`
--

LOCK TABLES `wali` WRITE;
/*!40000 ALTER TABLE `wali` DISABLE KEYS */;
/*!40000 ALTER TABLE `wali` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-12-22 13:29:24
