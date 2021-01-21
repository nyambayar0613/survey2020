-- MySQL dump 10.13  Distrib 8.0.21, for Win64 (x86_64)
--
-- Host: 127.0.0.1    Database: survey
-- ------------------------------------------------------
-- Server version	5.7.24

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
-- Table structure for table `branch`
--

DROP TABLE IF EXISTS `branch`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `branch`
--

LOCK TABLES `branch` WRITE;
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
INSERT INTO `branch` VALUES (1,'branch1@koje.ac.kr'),(2,'branch2@koje.ac.kr');
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `graduates`
--

DROP TABLE IF EXISTS `graduates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `graduates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `graduates`
--

LOCK TABLES `graduates` WRITE;
/*!40000 ALTER TABLE `graduates` DISABLE KEYS */;
INSERT INTO `graduates` VALUES (1,'graduate1@koje.ac.kr'),(2,'graduate2@koje.ac.kr');
/*!40000 ALTER TABLE `graduates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poll_graduate_education_stat_votes`
--

DROP TABLE IF EXISTS `poll_graduate_education_stat_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poll_graduate_education_stat_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q1_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1_2_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_1` text COLLATE utf8_unicode_ci,
  `sq5_1_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_2` text COLLATE utf8_unicode_ci,
  `sq5_2_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_3` text COLLATE utf8_unicode_ci,
  `sq5_3_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poll_graduate_education_stat_votes`
--

LOCK TABLES `poll_graduate_education_stat_votes` WRITE;
/*!40000 ALTER TABLE `poll_graduate_education_stat_votes` DISABLE KEYS */;
INSERT INTO `poll_graduate_education_stat_votes` VALUES (1,'','test','1','2','sq1','1','2, 3, ','sq2-1-2','1, 3, 5, 7, ','sq5-1-1 nemelt','1, 5, 2, 6, 9, ','sq5-1-2 nemelt','2, 6, 5, 1, ','sq5-1-3 nemelt','2020-12-15 08:40:43'),(5,'','werwerwer','1','2','xfgdrfgdfgdfg','1','2, 4, 3, 1, ','ertertert','1, 4, 5, 7, 3, 2, ','','1, 3, 5, 7, ','','7, 5, 3, 1, ','','2020-12-22 12:40:47');
/*!40000 ALTER TABLE `poll_graduate_education_stat_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poll_graduate_education_votes`
--

DROP TABLE IF EXISTS `poll_graduate_education_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poll_graduate_education_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q1_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1_2_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_1` text COLLATE utf8_unicode_ci,
  `sq5_1_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_2` text COLLATE utf8_unicode_ci,
  `sq5_2_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_3` text COLLATE utf8_unicode_ci,
  `sq5_3_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poll_graduate_education_votes`
--

LOCK TABLES `poll_graduate_education_votes` WRITE;
/*!40000 ALTER TABLE `poll_graduate_education_votes` DISABLE KEYS */;
INSERT INTO `poll_graduate_education_votes` VALUES (1,'','test','남성','30대','sq1','예','2. 토요일 강좌, 3. 비대면(온라인) 강좌','sq2-1-2','[1. 영농계획 수립, 입지선정, 시설 유형 선택, 시설구조 설계, 부대시설 설계 등], [3. 센서노드(온도, 습도, CO2, 토양, 양액 등 측정 센서), 제어기노드(환기, 난방, 차광, 보온, 관수, 관비 등 장치 구동 제어), 정보관리 시스템 등], [5. 식물(작물)에 따른 수경재배, 양액조제, 토양관리, 근권부생육환경 관리 등의 복합환경제어 및 관리], [7. 식물(작물)에 따른 상토제조, 파종, 접목, 묘 환경관리 등],','sq5-1-1 nemelt','1. 실무 적합형 이론, 5. 조직 적응력 및 커뮤니케이션 능력, 2. 현장 적합형 실무능력, 6. 컴퓨터 활용 능력 탁월, 9. 체계적인 실험 및 실습,','sq5-1-2 nemelt','2. 교육 교재 및 교보재 개선, 6. 다양한 학생 평가방법 도입, 5. 전공분야 최신 기술의 신속 도입, 1. 다양한 교수법의 도입,','sq5-1-3 nemelt','2020-12-15 08:40:43'),(5,'','werwerwer','1','2','xfgdrfgdfgdfg','1','2, 4, 3, 1,','ertertert','[1], [4], [5], [7], [3], [2],','','1, 3, 5, 7,','','7, 5, 3, 1,','','2020-12-22 12:40:47');
/*!40000 ALTER TABLE `poll_graduate_education_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poll_graduates_votes`
--

DROP TABLE IF EXISTS `poll_graduates_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poll_graduates_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) DEFAULT NULL,
  `q1_1_1` int(11) DEFAULT NULL,
  `q1_1_2` int(11) DEFAULT NULL,
  `q1_1_3` int(11) DEFAULT NULL,
  `q1_1_4` int(11) DEFAULT NULL,
  `q1_1_5` int(11) DEFAULT NULL,
  `q1_2_1` int(11) DEFAULT NULL,
  `q1_2_2` int(11) DEFAULT NULL,
  `q1_2_3` int(11) DEFAULT NULL,
  `q1_2_4` int(11) DEFAULT NULL,
  `q1_2_5` int(11) DEFAULT NULL,
  `q1_2_6` int(11) DEFAULT NULL,
  `q1_2_7` int(11) DEFAULT NULL,
  `q1_2_8` int(11) DEFAULT NULL,
  `q1_2_9` int(11) DEFAULT NULL,
  `q1_2_10` int(11) DEFAULT NULL,
  `q1_2_11` int(11) DEFAULT NULL,
  `q1_2_12` int(11) DEFAULT NULL,
  `q1_2_13` int(11) DEFAULT NULL,
  `q1_2_14` int(11) DEFAULT NULL,
  `q1_2_15` int(11) DEFAULT NULL,
  `q1_3_1` int(11) DEFAULT NULL,
  `q1_3_2` int(11) DEFAULT NULL,
  `q1_3_3` int(11) DEFAULT NULL,
  `q1_3_4` int(11) DEFAULT NULL,
  `q1_3_5` int(11) DEFAULT NULL,
  `q1_3_6` int(11) DEFAULT NULL,
  `q1_3_7` int(11) DEFAULT NULL,
  `q1_3_8` int(11) DEFAULT NULL,
  `q1_3_9` int(11) DEFAULT NULL,
  `q1_3_10` int(11) DEFAULT NULL,
  `q1_3_11` int(11) DEFAULT NULL,
  `q1_3_12` int(11) DEFAULT NULL,
  `q1_3_13` int(11) DEFAULT NULL,
  `q1_3_14` int(11) DEFAULT NULL,
  `q1_3_15` int(11) DEFAULT NULL,
  `q2_1_1` int(11) DEFAULT NULL,
  `q2_1_2` int(11) DEFAULT NULL,
  `q2_1_3` int(11) DEFAULT NULL,
  `q2_2_1` int(11) DEFAULT NULL,
  `q2_2_2` int(11) DEFAULT NULL,
  `q3_1` int(11) DEFAULT NULL,
  `q3_2` int(11) DEFAULT NULL,
  `q3_3` int(11) DEFAULT NULL,
  `q4_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q4_2` varchar(255) DEFAULT NULL,
  `q4_3` varchar(255) DEFAULT NULL,
  `q5_0` varchar(255) DEFAULT NULL,
  `q5_1` varchar(255) DEFAULT NULL,
  `q5_2` varchar(255) DEFAULT NULL,
  `q5_2_nemelt` varchar(255) DEFAULT NULL,
  `q5_3` varchar(255) DEFAULT NULL,
  `q5_4` varchar(255) DEFAULT NULL,
  `q5_6_nemelt` varchar(255) DEFAULT NULL,
  `q5_5` varchar(255) DEFAULT NULL,
  `q5_6` varchar(255) DEFAULT NULL,
  `q5_4_nemelt` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poll_graduates_votes`
--

LOCK TABLES `poll_graduates_votes` WRITE;
/*!40000 ALTER TABLE `poll_graduates_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `poll_graduates_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poll_industry_education_stat_votes`
--

DROP TABLE IF EXISTS `poll_industry_education_stat_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poll_industry_education_stat_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q1_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq1` text COLLATE utf8_unicode_ci,
  `sq1_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq2_1` text COLLATE utf8_unicode_ci,
  `sq3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_1_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_2_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq4_1_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq4_1_2` text COLLATE utf8_unicode_ci,
  `sq4_1_2_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_1` text COLLATE utf8_unicode_ci,
  `sq5_1_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_2` text COLLATE utf8_unicode_ci,
  `sq5_2_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_3` text COLLATE utf8_unicode_ci,
  `sq5_3_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poll_industry_education_stat_votes`
--

LOCK TABLES `poll_industry_education_stat_votes` WRITE;
/*!40000 ALTER TABLE `poll_industry_education_stat_votes` DISABLE KEYS */;
INSERT INTO `poll_industry_education_stat_votes` VALUES (1,'','test 1','1','2','1','10, ','','1','1) 비닐온실 1 평, 2) 유리온실 2 평, 3) 식물공장 3 평,','3','','','','','2','','','4, ',NULL,'8, ','','8, ','','2020-12-22 10:10:41'),(2,'','test 2','2','3','1','10, ','tes t23','1','3) 식물공장 4 평, 4) 기타:  88 평,','3','','','','','2','','','7, ',NULL,'8, ','','8, ','','2020-12-22 10:10:41'),(3,'','test 3','1','2','1','1, ','','1','1) 비닐온실 1 평, 4) 기타: test 5 평,','3','','','','','2','','','1, ',NULL,'8, ','','2, ','','2020-12-22 10:10:41'),(8,'','tesettesettesetteset','2','2','2','1, 3, 5, 7, 9, 10, 8, 6, 4, 2, ','','1','1) 비닐온실 4 평, 2) 유리온실 2 평, 3) 식물공장 6 평, 4) 기타: test 3 평,','2','','','1','','1','4, 2, 1, 3, ','rrrrrrrrrr','1, 2, 4, 3, 5, 6, 7, 8, ','gggggggggggggggggg','1, 3, 5, 7, 9, 8, 6, 4, 2, ','bbbbbbbbbbbbbbbbb','6, 8, 4, 2, 1, 3, 5, 7, ','bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb','2020-12-22 10:10:41'),(9,'','wer','1','3','1','10, 4, 5, ','','2',NULL,'3','','','','','2','','','1, 2, 3, 4, 6, ',NULL,'5, 6, 7, 1, 9, ','','2, 8, ','','2020-12-22 10:10:41');
/*!40000 ALTER TABLE `poll_industry_education_stat_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poll_industry_education_votes`
--

DROP TABLE IF EXISTS `poll_industry_education_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poll_industry_education_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q1_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_4` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_5` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq1` text COLLATE utf8_unicode_ci,
  `sq1_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq2_1` text COLLATE utf8_unicode_ci,
  `sq3` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_1_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_2` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_2_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq4_1_1` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq4_1_2` text COLLATE utf8_unicode_ci,
  `sq4_1_2_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_1` text COLLATE utf8_unicode_ci,
  `sq5_1_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_2` text COLLATE utf8_unicode_ci,
  `sq5_2_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_3` text COLLATE utf8_unicode_ci,
  `sq5_3_nemelt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poll_industry_education_votes`
--

LOCK TABLES `poll_industry_education_votes` WRITE;
/*!40000 ALTER TABLE `poll_industry_education_votes` DISABLE KEYS */;
INSERT INTO `poll_industry_education_votes` VALUES (1,'','test 1','남성','30대','소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)','10. 식물공장,','','있음','1) 비닐온실 1 평, 2) 유리온실 2 평, 3) 식물공장 3 평,','관계없음','','','','','아니오',NULL,'','[4.식물(작물)에 따른 온도, 습도, 광, CO2시비 등의 복합환경제어 및 관리], [3. 센서노드(온도, 습도, CO2, 토양, 양액 등 측정 센서), 제어기노드(환기, 난방, 차광, 보온, 관수, 관비 등 장치 구동 제어), 정보관리 시스템 등],',NULL,'8. 최신 기술 트렌드,','','8. 다양한 교육 매체의 활용,','','2020-12-16 06:08:04'),(2,'','test 2','여성','40대','소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)','10. 식물공장,','tes t23','있음','3) 식물공장 4 평, 4) 기타:  88 평,','관계없음','','','','','아니오',NULL,'','[7. 식물(작물)에 따른 상토제조, 파종, 접목, 묘 환경관리 등],',NULL,'8. 최신 기술 트렌드,','','8. 다양한 교육 매체의 활용,','','2020-12-16 06:09:59'),(3,'','test 3','남성','30대','소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)','1. 종자·종묘,','','있음','1) 비닐온실 1 평, 4) 기타: test 5 평,','관계없음','','','','','아니오',NULL,'','[1. 영농계획 수립, 입지선정, 시설 유형 선택, 시설구조 설계, 부대시설 설계 등],',NULL,'8. 최신 기술 트렌드,','','2. 교육 교재 및 교보재 개선,','','2020-12-16 06:10:52'),(8,'','tesettesettesetteset','2','2','2','1, 3, 5, 7, 9, 10, 8, 6, 4, 2,','','1','1) 비닐온실 4 평, 2) 유리온실 2 평, 3) 식물공장 6 평, 4) 기타: test 3 평,','2','','','1','','1','4, 2, 1, 3,','rrrrrrrrrr','[1], [2], [4], [3], [5], [6], [7], [8],','gggggggggggggggggg','1, 3, 5, 7, 9, 8, 6, 4, 2,','bbbbbbbbbbbbbbbbb','6, 8, 4, 2, 1, 3, 5, 7,','bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb','2020-12-22 09:22:36'),(9,'','wer','1','3','1','10, 4, 5,','','2',NULL,'3','','','','','2',NULL,'','[1], [2], [3], [4], [6],',NULL,'5, 6, 7, 1, 9,','','2, 8,','','2020-12-22 09:47:33');
/*!40000 ALTER TABLE `poll_industry_education_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poll_industry_votes`
--

DROP TABLE IF EXISTS `poll_industry_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poll_industry_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) DEFAULT NULL,
  `q1_1` varchar(255) DEFAULT NULL,
  `q1_2` varchar(255) DEFAULT NULL,
  `q1_3` varchar(255) DEFAULT NULL,
  `q1_4` varchar(255) DEFAULT NULL,
  `q1_5` varchar(255) DEFAULT NULL,
  `q1_6` varchar(255) DEFAULT NULL,
  `q1_6_nemelt` varchar(255) DEFAULT NULL,
  `q1_7` varchar(255) DEFAULT NULL,
  `q2_1` varchar(255) DEFAULT NULL,
  `q2_2` varchar(255) DEFAULT NULL,
  `q2_3` varchar(255) DEFAULT NULL,
  `q2_4` varchar(255) DEFAULT NULL,
  `q2_5` varchar(255) DEFAULT NULL,
  `q2_5_nemelt` varchar(255) DEFAULT NULL,
  `q2_6` varchar(255) DEFAULT NULL,
  `q2_7` varchar(255) DEFAULT NULL,
  `q2_7_nemelt` varchar(255) DEFAULT NULL,
  `q2_8` varchar(255) DEFAULT NULL,
  `q2_8_nemelt` varchar(255) DEFAULT NULL,
  `q3_1` int(11) DEFAULT NULL,
  `q3_2` int(11) DEFAULT NULL,
  `q3_3` int(11) DEFAULT NULL,
  `q3_4` int(11) DEFAULT NULL,
  `q3_5` int(11) DEFAULT NULL,
  `q3_6` int(11) DEFAULT NULL,
  `q3_7` int(11) DEFAULT NULL,
  `q3_8` int(11) DEFAULT NULL,
  `q3_9` int(11) DEFAULT NULL,
  `q3_10` int(11) DEFAULT NULL,
  `q3_11` int(11) DEFAULT NULL,
  `q3_12` int(11) DEFAULT NULL,
  `q3_13` int(11) DEFAULT NULL,
  `q3_14` int(11) DEFAULT NULL,
  `q3_15` int(11) DEFAULT NULL,
  `q4_1` varchar(255) DEFAULT NULL,
  `q4_1_nemelt` varchar(255) DEFAULT NULL,
  `q4_5` int(11) DEFAULT NULL,
  `q4_6` int(11) DEFAULT NULL,
  `q4_7` int(11) DEFAULT NULL,
  `q4_8` int(11) DEFAULT NULL,
  `q4_9` int(11) DEFAULT NULL,
  `q4_10` int(11) DEFAULT NULL,
  `q4_11` int(11) DEFAULT NULL,
  `q4_12` int(11) DEFAULT NULL,
  `q5_1` int(11) DEFAULT NULL,
  `q5_2` int(11) DEFAULT NULL,
  `q5_3` int(11) DEFAULT NULL,
  `q5_4` int(11) DEFAULT NULL,
  `q5_5` int(11) DEFAULT NULL,
  `q5_6` int(11) DEFAULT NULL,
  `q5_7` int(11) DEFAULT NULL,
  `q8_6` varchar(255) DEFAULT NULL,
  `q8_6_nemelt` varchar(255) DEFAULT NULL,
  `q8_7` varchar(255) DEFAULT NULL,
  `q8_7_nemelt` varchar(255) DEFAULT NULL,
  `q8_8` varchar(255) DEFAULT NULL,
  `q8_8_nemelt` varchar(255) DEFAULT NULL,
  `q8_9` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poll_industry_votes`
--

LOCK TABLES `poll_industry_votes` WRITE;
/*!40000 ALTER TABLE `poll_industry_votes` DISABLE KEYS */;
INSERT INTO `poll_industry_votes` VALUES (1,NULL,'','tttttttttt','사원 이하','','20대','농업/임업/어업/광업','','소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)','관계없음 (설문종료)','','',NULL,NULL,'','','계열 및 전공 학과,','',NULL,'',5,4,2,3,4,5,4,3,2,1,1,1,1,1,1,'외국어구사능력, 문화이해능력, 문제해결능력,','oooooooooooooo',5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,'조직 적응력 및 커뮤니케이션 능력, 자격증 보유 등의 전문성,','rtyrty','자격증 보유 여부, 지역 및 거주지,','yrtyrtyrtyr','협동심,','rtyrtyrt','rtyrty','2020-12-18 11:04:29',NULL);
/*!40000 ALTER TABLE `poll_industry_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poll_staff_votes`
--

DROP TABLE IF EXISTS `poll_staff_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poll_staff_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) DEFAULT NULL,
  `q1_1_1` int(11) DEFAULT NULL,
  `q1_1_2` int(11) DEFAULT NULL,
  `q1_1_3` int(11) DEFAULT NULL,
  `q1_1_4` int(11) DEFAULT NULL,
  `q1_1_5` int(11) DEFAULT NULL,
  `q2_1_1` int(11) DEFAULT NULL,
  `q2_1_2` int(11) DEFAULT NULL,
  `q2_1_1_1` text,
  `q2_1_1_other` varchar(255) DEFAULT NULL,
  `q2_2_1` int(11) DEFAULT NULL,
  `q2_2_1_1` text,
  `q2_2_1_other` varchar(255) DEFAULT NULL,
  `q2_3_1` int(11) DEFAULT NULL,
  `q2_3_2` int(11) DEFAULT NULL,
  `q2_3_3` int(11) DEFAULT NULL,
  `q2_3_4` int(11) DEFAULT NULL,
  `q2_3_5` int(11) DEFAULT NULL,
  `q2_4_1` int(11) DEFAULT NULL,
  `q2_4_1_1` text,
  `q2_4_1_other` varchar(255) DEFAULT NULL,
  `q2_4_2_1` text,
  `q2_4_2_other` varchar(255) DEFAULT NULL,
  `q3_1_1` int(11) DEFAULT NULL,
  `q3_1_2` int(11) DEFAULT NULL,
  `q3_1_3` int(11) DEFAULT NULL,
  `q3_1_4` int(11) DEFAULT NULL,
  `q3_2_1` int(11) DEFAULT NULL,
  `q3_2_2` int(11) DEFAULT NULL,
  `q3_2_3` int(11) DEFAULT NULL,
  `q3_2_1_1` text,
  `q3_2_1_other` varchar(255) DEFAULT NULL,
  `q3_3_1` int(11) DEFAULT NULL,
  `q3_3_2` int(11) DEFAULT NULL,
  `q3_3_3` int(11) DEFAULT NULL,
  `q3_3_1_1` text,
  `q3_4_1` int(11) DEFAULT NULL,
  `q3_4_2` int(11) DEFAULT NULL,
  `q3_4_3` int(11) DEFAULT NULL,
  `q3_4_4` int(11) DEFAULT NULL,
  `q4_1_1` int(11) DEFAULT NULL,
  `q4_1_2` int(11) DEFAULT NULL,
  `q4_2_1` int(11) DEFAULT NULL,
  `q4_2_2` int(11) DEFAULT NULL,
  `q4_2_3` int(11) DEFAULT NULL,
  `q4_3_1` int(11) DEFAULT NULL,
  `q4_3_2` int(11) DEFAULT NULL,
  `q4_3_3` int(11) DEFAULT NULL,
  `q4_3_4` int(11) DEFAULT NULL,
  `q5_1_1` int(11) DEFAULT NULL,
  `q5_1_2` int(11) DEFAULT NULL,
  `q5_1_3` int(11) DEFAULT NULL,
  `q5_1_4` int(11) DEFAULT NULL,
  `q6_1_1` int(11) DEFAULT NULL,
  `q6_1_2` int(11) DEFAULT NULL,
  `q6_1_3` int(11) DEFAULT NULL,
  `q6_2_1` int(11) DEFAULT NULL,
  `q6_2_2` int(11) DEFAULT NULL,
  `q6_2_3` int(11) DEFAULT NULL,
  `q6_3_1` int(11) DEFAULT NULL,
  `q6_3_2` int(11) DEFAULT NULL,
  `q6_3_3` int(11) DEFAULT NULL,
  `q6_4_1` int(11) DEFAULT NULL,
  `q6_4_2` int(11) DEFAULT NULL,
  `q6_4_3` int(11) DEFAULT NULL,
  `q6_5_1` int(11) DEFAULT NULL,
  `q6_5_2` int(11) DEFAULT NULL,
  `q6_6_1` int(11) DEFAULT NULL,
  `q6_6_2` int(11) DEFAULT NULL,
  `q6_6_3` int(11) DEFAULT NULL,
  `q6_7_1` text,
  `q6_7_other` varchar(255) DEFAULT NULL,
  `q7_1_1` int(11) DEFAULT NULL,
  `q7_1_2` int(11) DEFAULT NULL,
  `q8_1_1` int(11) DEFAULT NULL,
  `q8_1_2` int(11) DEFAULT NULL,
  `q8_1_1_1` text,
  `q9_1_1` int(11) DEFAULT NULL,
  `q9_1_2` int(11) DEFAULT NULL,
  `q9_1_3` int(11) DEFAULT NULL,
  `q9_1_4` int(11) DEFAULT NULL,
  `q9_1_5` int(11) DEFAULT NULL,
  `q9_1_6` int(11) DEFAULT NULL,
  `q9_1_7` int(11) DEFAULT NULL,
  `q9_1_8` int(11) DEFAULT NULL,
  `q9_2_1` int(11) DEFAULT NULL,
  `q9_2_2` int(11) DEFAULT NULL,
  `q9_2_3` int(11) DEFAULT NULL,
  `q9_2_4` int(11) DEFAULT NULL,
  `q9_2_5` int(11) DEFAULT NULL,
  `q9_2_6` int(11) DEFAULT NULL,
  `q9_2_7` int(11) DEFAULT NULL,
  `q10_1` int(11) DEFAULT NULL,
  `q10_2` int(11) DEFAULT NULL,
  `q10_3` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `ip_address` varchar(255) NOT NULL DEFAULT '0.0.0.0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poll_staff_votes`
--

LOCK TABLES `poll_staff_votes` WRITE;
/*!40000 ALTER TABLE `poll_staff_votes` DISABLE KEYS */;
INSERT INTO `poll_staff_votes` VALUES (1,NULL,1,1,1,1,1,1,1,'낮은 수준의 교육과정, 실험 및 실습 교육의 부족,','kita',1,'융복합 교육방법의 도입,','kita',2,2,2,2,2,1,'현장 적합형 실무능력, 직업관, 윤리관 등의 인성,','kita','창의적인 업무 처리 능력, 조직 적응력 및 커뮤니케이션 능력,','kita',1,1,1,1,1,1,1,'신속, 정확한 행정 서비스 처리, 행정 업무 협력 체계 강화,','rty',2,2,2,'test',3,3,3,3,2,2,3,3,3,4,4,4,4,3,3,3,3,1,1,1,2,2,2,3,3,3,4,4,4,5,5,3,3,3,'학생지원 활동의 체계 고도화, 대학의 행재정적 지원 강화,','rtyutyuuoi',1,1,1,1,'werwer wer sdf sdf hfgh fgh ',5,5,5,4,4,4,4,5,5,5,5,5,5,5,5,1,1,2,'2020-12-18 06:56:17','0.0.0.0');
/*!40000 ALTER TABLE `poll_staff_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `poll_teacher_votes`
--

DROP TABLE IF EXISTS `poll_teacher_votes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `poll_teacher_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_email` varchar(255) DEFAULT NULL,
  `q1_1_1` int(11) DEFAULT NULL,
  `q1_1_2` int(11) DEFAULT NULL,
  `q1_1_3` int(11) DEFAULT NULL,
  `q1_1_4` int(11) DEFAULT NULL,
  `q1_1_5` int(11) DEFAULT NULL,
  `q2_1_1` int(11) DEFAULT NULL,
  `q2_1_2` int(11) DEFAULT NULL,
  `q2_1_3` int(11) DEFAULT NULL,
  `q2_1_4` int(11) DEFAULT NULL,
  `q2_1_5` int(11) DEFAULT NULL,
  `q2_1_1_1` varchar(255) DEFAULT NULL,
  `q2_1_nemelt` varchar(255) DEFAULT NULL,
  `q2_2_1` int(11) DEFAULT NULL,
  `q2_2_2` int(11) DEFAULT NULL,
  `q2_2_3` int(11) DEFAULT NULL,
  `q2_2_4` int(11) DEFAULT NULL,
  `q2_2_1_1` varchar(255) DEFAULT NULL,
  `q2_2_nemelt` varchar(255) DEFAULT NULL,
  `q2_3_1` int(11) DEFAULT NULL,
  `q2_3_2` int(11) DEFAULT NULL,
  `q2_3_3` int(11) DEFAULT NULL,
  `q2_3_4` int(11) DEFAULT NULL,
  `q2_3_5` int(11) DEFAULT NULL,
  `q2_3_6` int(11) DEFAULT NULL,
  `q2_4_1` int(11) DEFAULT NULL,
  `q2_4_2` int(11) DEFAULT NULL,
  `q2_4_3` int(11) DEFAULT NULL,
  `q2_4_1_1` varchar(255) DEFAULT NULL,
  `q2_4_1_nemelt` varchar(255) DEFAULT NULL,
  `q2_4_2_1` varchar(255) DEFAULT NULL,
  `q2_4_2_nemelt` varchar(255) DEFAULT NULL,
  `q3_1_1` int(11) DEFAULT NULL,
  `q3_1_2` int(11) DEFAULT NULL,
  `q3_1_3` int(11) DEFAULT NULL,
  `q3_1_4` int(11) DEFAULT NULL,
  `q3_1_5` int(11) DEFAULT NULL,
  `q3_1_6` int(11) DEFAULT NULL,
  `q3_2_1` int(11) DEFAULT NULL,
  `q3_2_2` int(11) DEFAULT NULL,
  `q3_2_3` int(11) DEFAULT NULL,
  `q3_2_1_1` varchar(255) DEFAULT NULL,
  `q3_2_nemelt` varchar(255) DEFAULT NULL,
  `q3_3_1` int(11) DEFAULT NULL,
  `q3_3_2` int(11) DEFAULT NULL,
  `q3_3_3` int(11) DEFAULT NULL,
  `q3_3_1_1` varchar(255) DEFAULT NULL,
  `q3_4_1` int(11) DEFAULT NULL,
  `q3_4_2` int(11) DEFAULT NULL,
  `q3_4_3` int(11) DEFAULT NULL,
  `q3_4_4` int(11) DEFAULT NULL,
  `q4_1_1` int(11) DEFAULT NULL,
  `q4_1_2` int(11) DEFAULT NULL,
  `q4_1_3` int(11) DEFAULT NULL,
  `q4_1_4` int(11) DEFAULT NULL,
  `q4_2_1` int(11) DEFAULT NULL,
  `q4_2_2` int(11) DEFAULT NULL,
  `q4_2_3` int(11) DEFAULT NULL,
  `q4_2_4` int(11) DEFAULT NULL,
  `q4_3_1` int(11) DEFAULT NULL,
  `q4_3_2` int(11) DEFAULT NULL,
  `q4_3_3` int(11) DEFAULT NULL,
  `q4_3_4` int(11) DEFAULT NULL,
  `q5_1_1` int(11) DEFAULT NULL,
  `q5_1_2` int(11) DEFAULT NULL,
  `q5_1_3` int(11) DEFAULT NULL,
  `q5_1_4` int(11) DEFAULT NULL,
  `q6_1_1` int(11) DEFAULT NULL,
  `q6_1_2` int(11) DEFAULT NULL,
  `q6_1_3` int(11) DEFAULT NULL,
  `q6_2_1` int(11) DEFAULT NULL,
  `q6_2_2` int(11) DEFAULT NULL,
  `q6_2_3` int(11) DEFAULT NULL,
  `q6_3_1` int(11) DEFAULT NULL,
  `q6_3_2` int(11) DEFAULT NULL,
  `q6_3_3` int(11) DEFAULT NULL,
  `q6_4_1` int(11) DEFAULT NULL,
  `q6_4_2` int(11) DEFAULT NULL,
  `q6_4_3` int(11) DEFAULT NULL,
  `q6_5_1` int(11) DEFAULT NULL,
  `q6_5_2` int(11) DEFAULT NULL,
  `q6_6_1` int(11) DEFAULT NULL,
  `q6_6_2` int(11) DEFAULT NULL,
  `q6_6_3` int(11) DEFAULT NULL,
  `q6_7` varchar(255) DEFAULT NULL,
  `q6_7_nemelt` varchar(255) DEFAULT NULL,
  `q7_1_2` int(11) DEFAULT NULL,
  `q7_1_3` int(11) DEFAULT NULL,
  `q8_1_1` int(11) DEFAULT NULL,
  `q8_1_2` int(11) DEFAULT NULL,
  `q8_2` varchar(255) DEFAULT NULL,
  `qc9_1_1` int(11) DEFAULT NULL,
  `qc9_1_2` int(11) DEFAULT NULL,
  `qc9_1_3` int(11) DEFAULT NULL,
  `qc9_1_4` int(11) DEFAULT NULL,
  `qc9_1_5` int(11) DEFAULT NULL,
  `qc9_1_6` int(11) DEFAULT NULL,
  `qc9_1_7` int(11) DEFAULT NULL,
  `qc9_1_8` int(11) DEFAULT NULL,
  `qc9_2_1` int(11) DEFAULT NULL,
  `qc9_2_2` int(11) DEFAULT NULL,
  `qc9_2_3` int(11) DEFAULT NULL,
  `qc9_2_4` int(11) DEFAULT NULL,
  `qc9_2_5` int(11) DEFAULT NULL,
  `qc9_3_1` int(11) DEFAULT NULL,
  `qc9_3_2` int(11) DEFAULT NULL,
  `qc9_3_3` int(11) DEFAULT NULL,
  `qc9_3_4` int(11) DEFAULT NULL,
  `q9_1` varchar(255) DEFAULT NULL,
  `q9_2` varchar(255) DEFAULT NULL,
  `q9_3` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `poll_teacher_votes`
--

LOCK TABLES `poll_teacher_votes` WRITE;
/*!40000 ALTER TABLE `poll_teacher_votes` DISABLE KEYS */;
INSERT INTO `poll_teacher_votes` VALUES (1,NULL,5,5,5,5,5,5,5,5,5,5,'최신기술 교육의 부족, 실험 및 실습 교육의 부족,','',5,5,5,5,'교육 교재 및 교보재 개선, 실험실습 비중의 확대, 다양한 학생 평가방법 도입,','',5,5,5,5,5,5,5,5,5,'조직 적응력 및 커뮤니케이션 능력, 창의적인 업무 처리 능력, 직업관, 윤리관 등의 인성,','','직업관, 윤리관 등의 인성, 조직 적응력 및 커뮤니케이션 능력, 창의적인 업무 처리 능력,','',5,5,5,5,5,5,5,5,5,'행정 직원의 전문성 강화,','',5,5,5,'rtyrty',5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,'학생지원 활동의 체계 고도화,','',5,5,5,5,'ppppp',5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,5,'1','1','2','2020-12-18 08:50:07',NULL);
/*!40000 ALTER TABLE `poll_teacher_votes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `staff`
--

LOCK TABLES `staff` WRITE;
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
INSERT INTO `staff` VALUES (1,'staff1@koje.ac.kr'),(2,'staff2@koje.ac.kr');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `teachers`
--

DROP TABLE IF EXISTS `teachers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `division` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(33) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `teachers`
--

LOCK TABLES `teachers` WRITE;
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
INSERT INTO `teachers` VALUES (1,'기계공학과','손호재','교원','010-4875-0678','hjson@koje.ac.kr',1),(2,'test','2test','3test','111111111','test@koje.ac.kr',2);
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2021-01-21  9:00:41
