-- MariaDB dump 10.19  Distrib 10.11.2-MariaDB, for Android (aarch64)
--
-- Host: localhost    Database: kuis
-- ------------------------------------------------------
-- Server version	10.11.2-MariaDB

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `answers` (
  `id_answer` int(2) NOT NULL AUTO_INCREMENT,
  `id_question` int(2) NOT NULL,
  `answer` text NOT NULL,
  `correct_answer` tinyint(1) NOT NULL,
  PRIMARY KEY (`id_answer`),
  KEY `id_question` (`id_question`),
  CONSTRAINT `answers_ibfk_1` FOREIGN KEY (`id_question`) REFERENCES `questions` (`id_question`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `answers`
--

LOCK TABLES `answers` WRITE;
/*!40000 ALTER TABLE `answers` DISABLE KEYS */;
INSERT INTO `answers` VALUES
(1,1,'A. Negara',1),
(2,1,'B. Komunitas',0),
(3,1,'C. Remas (Remaja Masjid)',0),
(4,2,'A. Penawaran dan permintaan',0),
(5,2,'B. Kewajiban dan hak',1),
(6,3,'A. Teori Marxis',0),
(7,3,'B. Teori Sintesis',0),
(8,3,'C. Teori Pluralis',1),
(9,4,'A. Tentara Nasional Indonesia terdiri atas Angkatan Darat, Angkatan Laut, dan Angkatan Udara sebagai alat negara bertugas mempertahankan, melindungi, dan memelihara keutuhan dan kedaulatan negara',1),
(10,4,'B. Untuk pertahanan dan keaman negara dilaksanakan melalui sistem pertahanan dan keamanan rakyat semesta oleh Tentara Nasioal Indonesia dan Kepolisian Negara Republik Indonesia, sebagai kekuatan utama, dan rakyat, sebagai kekuatan pendukung ',0),
(11,5,'A. Pasal 28B ayat 2\r\n',0),
(12,5,'B. Pasal 24 ayat 1',0),
(13,5,'C. Pasal 27 ayat 2',1),
(14,6,'A. Benar',1),
(15,6,'B. Sunnah Muakad',0),
(16,7,'A. Teori Aktif',0),
(17,7,'B. Teori Sintetis',1),
(18,7,'C. Teori Relasi',0),
(19,8,'A. Peran pasif',0),
(20,8,'B. Peran positif',1),
(21,8,'C. Peran aktif',0),
(22,9,'A. Penyalahgunaan Kekuasaan',1),
(23,9,'B. Sikap Acuh tak acuh',0),
(24,9,'C. Sikap intoleran',0),
(25,10,'A. Tentu saja',1),
(26,10,'B. Tidak, masih ada yang lain',0),
(27,11,'A. Yakni merupakan kepatuhan terhadap peraturan perudnang-undangan yang berlaku sebagai cermin dari seorang warga negara yang taat dan patuh kepada negara.\r\n',0),
(28,11,'B. Aktivitas warga negara untuk ikut serta mengambil bagian dalam kehidupan bangsa dan Negara.\r\n',1),
(29,11,'C. Aktivitas warga negara untuk meminta  pelayanan dari negara / pemerintah sebagai konskeuensi dari fungsi pemerintah sebagai pelayanan umum (public service). \r\n',0),
(30,12,'A. Adi Ghan Theng Poll',0),
(31,12,'B. Wr.Supratman',0),
(32,12,'C. Kusbini',1);
/*!40000 ALTER TABLE `answers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `questions`
--

DROP TABLE IF EXISTS `questions`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `questions` (
  `id_question` int(2) NOT NULL AUTO_INCREMENT,
  `status` tinyint(1) NOT NULL,
  `question` text NOT NULL,
  `difficult` varchar(8) NOT NULL,
  PRIMARY KEY (`id_question`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `questions`
--

LOCK TABLES `questions` WRITE;
/*!40000 ALTER TABLE `questions` DISABLE KEYS */;
INSERT INTO `questions` VALUES
(1,0,'Sebuah organisasi  atau badan tertinggi yang memiliki  kewenangan untuk mengatur perihal yang berhubungan dengan kepentingan masyarakat secara luas serta memiliki  kewajiban  untuk  mensejahterakan,melindungi dan mencerdaskan kehidupan bangsa adalah pengertian dari....\n','easy'),
(2,0,'Hubungan negara dan warga negara berkaitan dengan.....\n','easy'),
(3,0,'Pandangan bahwa kekuasaan di masyarakat didistribusikan secara merata di antara berbagai kelompok kepentingan yang berbeda, dan tidak terpusat pada satu kelompok atau individu tertentu. merupakan teori dari...\n','medium'),
(4,0,'Manakah dibawah ini yang merupakan isi dari pasal 30 ayat 3 ?','hard'),
(5,0,'Pekerjaan dan penghidupan yang layak merupakan hak warga negara indonesia yang terdapat pada pasal...','hard'),
(6,0,'Benarkah ikut serta dalam usaha pertahanan dan keamanan negara adalah kewajiban warga negara ?\n','easy'),
(7,0,'Teori yang merupakan gabungan antara teori marxis dan pluralis adalah...','medium'),
(8,0,'Warga negara mendirikan lembaga sosial masyarakat LSM), merupakan bentuk wujud dari hubungan negara dan warga negara yang disebut dengan...\n','hard'),
(9,0,'Seseorang yang melakukan tindak pidana korupsi, tidak pantas disebut sebagai manusia, pelanggaran tersebut diakibatkan adanya....','easy'),
(10,0,'Benarkah hubungan negara dan warga negara hanya sebatas hak dan kewajiban ?','medium'),
(11,0,'Peran aktif adalah...','medium'),
(12,0,'Siapa pengaran lagu Bagimu Negeri','easy');
/*!40000 ALTER TABLE `questions` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-03-13  9:11:40
