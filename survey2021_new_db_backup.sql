-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               8.0.16 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             11.0.0.5919
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for survey
DROP DATABASE IF EXISTS `survey`;
CREATE DATABASE IF NOT EXISTS `survey` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `survey`;

-- Dumping structure for table survey.branch
DROP TABLE IF EXISTS `branch`;
CREATE TABLE IF NOT EXISTS `branch` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table survey.branch: ~2 rows (approximately)
/*!40000 ALTER TABLE `branch` DISABLE KEYS */;
REPLACE INTO `branch` (`id`, `email`) VALUES
	(1, 'branch1@koje.ac.kr'),
	(2, 'branch2@koje.ac.kr');
/*!40000 ALTER TABLE `branch` ENABLE KEYS */;

-- Dumping structure for table survey.graduates
DROP TABLE IF EXISTS `graduates`;
CREATE TABLE IF NOT EXISTS `graduates` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table survey.graduates: ~2 rows (approximately)
/*!40000 ALTER TABLE `graduates` DISABLE KEYS */;
REPLACE INTO `graduates` (`id`, `email`) VALUES
	(1, 'graduate1@koje.ac.kr'),
	(2, 'graduate2@koje.ac.kr');
/*!40000 ALTER TABLE `graduates` ENABLE KEYS */;

-- Dumping structure for table survey.poll_graduates_votes
DROP TABLE IF EXISTS `poll_graduates_votes`;
CREATE TABLE IF NOT EXISTS `poll_graduates_votes` (
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

-- Dumping data for table survey.poll_graduates_votes: ~0 rows (approximately)
/*!40000 ALTER TABLE `poll_graduates_votes` DISABLE KEYS */;
/*!40000 ALTER TABLE `poll_graduates_votes` ENABLE KEYS */;

-- Dumping structure for table survey.poll_graduate_education_stat_votes
DROP TABLE IF EXISTS `poll_graduate_education_stat_votes`;
CREATE TABLE IF NOT EXISTS `poll_graduate_education_stat_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q1_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1_2_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq5_1_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq5_2_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq5_3_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table survey.poll_graduate_education_stat_votes: ~2 rows (approximately)
/*!40000 ALTER TABLE `poll_graduate_education_stat_votes` DISABLE KEYS */;
REPLACE INTO `poll_graduate_education_stat_votes` (`id`, `q1_1`, `q1_2`, `q1_3`, `q1_4`, `q2_1`, `q2_1_1`, `q2_1_2`, `q2_1_2_nemelt`, `sq5_1`, `sq5_1_nemelt`, `sq5_2`, `sq5_2_nemelt`, `sq5_3`, `sq5_3_nemelt`, `created_at`) VALUES
	(1, '', 'test', '1', '2', 'sq1', '1', '2, 3, ', 'sq2-1-2', '1, 3, 5, 7, ', 'sq5-1-1 nemelt', '1, 5, 2, 6, 9, ', 'sq5-1-2 nemelt', '2, 6, 5, 1, ', 'sq5-1-3 nemelt', '2020-12-15 08:40:43'),
	(5, '', 'werwerwer', '1', '2', 'xfgdrfgdfgdfg', '1', '2, 4, 3, 1, ', 'ertertert', '1, 4, 5, 7, 3, 2, ', '', '1, 3, 5, 7, ', '', '7, 5, 3, 1, ', '', '2020-12-22 12:40:47');
/*!40000 ALTER TABLE `poll_graduate_education_stat_votes` ENABLE KEYS */;

-- Dumping structure for table survey.poll_graduate_education_votes
DROP TABLE IF EXISTS `poll_graduate_education_votes`;
CREATE TABLE IF NOT EXISTS `poll_graduate_education_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q1_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q2_1_2_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq5_1_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq5_2_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq5_3_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table survey.poll_graduate_education_votes: ~2 rows (approximately)
/*!40000 ALTER TABLE `poll_graduate_education_votes` DISABLE KEYS */;
REPLACE INTO `poll_graduate_education_votes` (`id`, `q1_1`, `q1_2`, `q1_3`, `q1_4`, `q2_1`, `q2_1_1`, `q2_1_2`, `q2_1_2_nemelt`, `sq5_1`, `sq5_1_nemelt`, `sq5_2`, `sq5_2_nemelt`, `sq5_3`, `sq5_3_nemelt`, `created_at`) VALUES
	(1, '', 'test', '남성', '30대', 'sq1', '예', '2. 토요일 강좌, 3. 비대면(온라인) 강좌', 'sq2-1-2', '[1. 영농계획 수립, 입지선정, 시설 유형 선택, 시설구조 설계, 부대시설 설계 등], [3. 센서노드(온도, 습도, CO2, 토양, 양액 등 측정 센서), 제어기노드(환기, 난방, 차광, 보온, 관수, 관비 등 장치 구동 제어), 정보관리 시스템 등], [5. 식물(작물)에 따른 수경재배, 양액조제, 토양관리, 근권부생육환경 관리 등의 복합환경제어 및 관리], [7. 식물(작물)에 따른 상토제조, 파종, 접목, 묘 환경관리 등],', 'sq5-1-1 nemelt', '1. 실무 적합형 이론, 5. 조직 적응력 및 커뮤니케이션 능력, 2. 현장 적합형 실무능력, 6. 컴퓨터 활용 능력 탁월, 9. 체계적인 실험 및 실습,', 'sq5-1-2 nemelt', '2. 교육 교재 및 교보재 개선, 6. 다양한 학생 평가방법 도입, 5. 전공분야 최신 기술의 신속 도입, 1. 다양한 교수법의 도입,', 'sq5-1-3 nemelt', '2020-12-15 08:40:43'),
	(5, '', 'werwerwer', '1', '2', 'xfgdrfgdfgdfg', '1', '2, 4, 3, 1,', 'ertertert', '[1], [4], [5], [7], [3], [2],', '', '1, 3, 5, 7,', '', '7, 5, 3, 1,', '', '2020-12-22 12:40:47');
/*!40000 ALTER TABLE `poll_graduate_education_votes` ENABLE KEYS */;

-- Dumping structure for table survey.poll_industry_education_stat_votes
DROP TABLE IF EXISTS `poll_industry_education_stat_votes`;
CREATE TABLE IF NOT EXISTS `poll_industry_education_stat_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q1_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_5` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq1_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq2_1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_1_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_2_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq4_1_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq4_1_2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq4_1_2_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq5_1_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq5_2_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq5_3_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table survey.poll_industry_education_stat_votes: ~5 rows (approximately)
/*!40000 ALTER TABLE `poll_industry_education_stat_votes` DISABLE KEYS */;
REPLACE INTO `poll_industry_education_stat_votes` (`id`, `q1_1`, `q1_2`, `q1_3`, `q1_4`, `q1_5`, `sq1`, `sq1_nemelt`, `sq2`, `sq2_1`, `sq3`, `sq3_1`, `sq3_1_nemelt`, `sq3_2`, `sq3_2_nemelt`, `sq4_1_1`, `sq4_1_2`, `sq4_1_2_nemelt`, `sq5_1`, `sq5_1_nemelt`, `sq5_2`, `sq5_2_nemelt`, `sq5_3`, `sq5_3_nemelt`, `created_at`) VALUES
	(1, '', 'test 1', '1', '2', '1', '10, ', '', '1', '1) 비닐온실 1 평, 2) 유리온실 2 평, 3) 식물공장 3 평,', '3', '', '', '', '', '2', '', '', '4, ', NULL, '8, ', '', '8, ', '', '2020-12-22 10:10:41'),
	(2, '', 'test 2', '2', '3', '1', '10, ', 'tes t23', '1', '3) 식물공장 4 평, 4) 기타:  88 평,', '3', '', '', '', '', '2', '', '', '7, ', NULL, '8, ', '', '8, ', '', '2020-12-22 10:10:41'),
	(3, '', 'test 3', '1', '2', '1', '1, ', '', '1', '1) 비닐온실 1 평, 4) 기타: test 5 평,', '3', '', '', '', '', '2', '', '', '1, ', NULL, '8, ', '', '2, ', '', '2020-12-22 10:10:41'),
	(8, '', 'tesettesettesetteset', '2', '2', '2', '1, 3, 5, 7, 9, 10, 8, 6, 4, 2, ', '', '1', '1) 비닐온실 4 평, 2) 유리온실 2 평, 3) 식물공장 6 평, 4) 기타: test 3 평,', '2', '', '', '1', '', '1', '4, 2, 1, 3, ', 'rrrrrrrrrr', '1, 2, 4, 3, 5, 6, 7, 8, ', 'gggggggggggggggggg', '1, 3, 5, 7, 9, 8, 6, 4, 2, ', 'bbbbbbbbbbbbbbbbb', '6, 8, 4, 2, 1, 3, 5, 7, ', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '2020-12-22 10:10:41'),
	(9, '', 'wer', '1', '3', '1', '10, 4, 5, ', '', '2', NULL, '3', '', '', '', '', '2', '', '', '1, 2, 3, 4, 6, ', NULL, '5, 6, 7, 1, 9, ', '', '2, 8, ', '', '2020-12-22 10:10:41');
/*!40000 ALTER TABLE `poll_industry_education_stat_votes` ENABLE KEYS */;

-- Dumping structure for table survey.poll_industry_education_votes
DROP TABLE IF EXISTS `poll_industry_education_votes`;
CREATE TABLE IF NOT EXISTS `poll_industry_education_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q1_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q1_5` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq1_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq2_1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_1_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq3_2_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq4_1_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq4_1_2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq4_1_2_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_1` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq5_1_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_2` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq5_2_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `sq5_3` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `sq5_3_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table survey.poll_industry_education_votes: ~5 rows (approximately)
/*!40000 ALTER TABLE `poll_industry_education_votes` DISABLE KEYS */;
REPLACE INTO `poll_industry_education_votes` (`id`, `q1_1`, `q1_2`, `q1_3`, `q1_4`, `q1_5`, `sq1`, `sq1_nemelt`, `sq2`, `sq2_1`, `sq3`, `sq3_1`, `sq3_1_nemelt`, `sq3_2`, `sq3_2_nemelt`, `sq4_1_1`, `sq4_1_2`, `sq4_1_2_nemelt`, `sq5_1`, `sq5_1_nemelt`, `sq5_2`, `sq5_2_nemelt`, `sq5_3`, `sq5_3_nemelt`, `created_at`) VALUES
	(1, '', 'test 1', '남성', '30대', '소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)', '10. 식물공장,', '', '있음', '1) 비닐온실 1 평, 2) 유리온실 2 평, 3) 식물공장 3 평,', '관계없음', '', '', '', '', '아니오', NULL, '', '[4.식물(작물)에 따른 온도, 습도, 광, CO2시비 등의 복합환경제어 및 관리], [3. 센서노드(온도, 습도, CO2, 토양, 양액 등 측정 센서), 제어기노드(환기, 난방, 차광, 보온, 관수, 관비 등 장치 구동 제어), 정보관리 시스템 등],', NULL, '8. 최신 기술 트렌드,', '', '8. 다양한 교육 매체의 활용,', '', '2020-12-16 06:08:04'),
	(2, '', 'test 2', '여성', '40대', '소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)', '10. 식물공장,', 'tes t23', '있음', '3) 식물공장 4 평, 4) 기타:  88 평,', '관계없음', '', '', '', '', '아니오', NULL, '', '[7. 식물(작물)에 따른 상토제조, 파종, 접목, 묘 환경관리 등],', NULL, '8. 최신 기술 트렌드,', '', '8. 다양한 교육 매체의 활용,', '', '2020-12-16 06:09:59'),
	(3, '', 'test 3', '남성', '30대', '소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)', '1. 종자·종묘,', '', '있음', '1) 비닐온실 1 평, 4) 기타: test 5 평,', '관계없음', '', '', '', '', '아니오', NULL, '', '[1. 영농계획 수립, 입지선정, 시설 유형 선택, 시설구조 설계, 부대시설 설계 등],', NULL, '8. 최신 기술 트렌드,', '', '2. 교육 교재 및 교보재 개선,', '', '2020-12-16 06:10:52'),
	(8, '', 'tesettesettesetteset', '2', '2', '2', '1, 3, 5, 7, 9, 10, 8, 6, 4, 2,', '', '1', '1) 비닐온실 4 평, 2) 유리온실 2 평, 3) 식물공장 6 평, 4) 기타: test 3 평,', '2', '', '', '1', '', '1', '4, 2, 1, 3,', 'rrrrrrrrrr', '[1], [2], [4], [3], [5], [6], [7], [8],', 'gggggggggggggggggg', '1, 3, 5, 7, 9, 8, 6, 4, 2,', 'bbbbbbbbbbbbbbbbb', '6, 8, 4, 2, 1, 3, 5, 7,', 'bbbbbbbbbbbbbbbbbbbbbbbbbbbbbb', '2020-12-22 09:22:36'),
	(9, '', 'wer', '1', '3', '1', '10, 4, 5,', '', '2', NULL, '3', '', '', '', '', '2', NULL, '', '[1], [2], [3], [4], [6],', NULL, '5, 6, 7, 1, 9,', '', '2, 8,', '', '2020-12-22 09:47:33');
/*!40000 ALTER TABLE `poll_industry_education_votes` ENABLE KEYS */;

-- Dumping structure for table survey.poll_industry_votes
DROP TABLE IF EXISTS `poll_industry_votes`;
CREATE TABLE IF NOT EXISTS `poll_industry_votes` (
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

-- Dumping data for table survey.poll_industry_votes: ~0 rows (approximately)
/*!40000 ALTER TABLE `poll_industry_votes` DISABLE KEYS */;
REPLACE INTO `poll_industry_votes` (`id`, `user_email`, `q1_1`, `q1_2`, `q1_3`, `q1_4`, `q1_5`, `q1_6`, `q1_6_nemelt`, `q1_7`, `q2_1`, `q2_2`, `q2_3`, `q2_4`, `q2_5`, `q2_5_nemelt`, `q2_6`, `q2_7`, `q2_7_nemelt`, `q2_8`, `q2_8_nemelt`, `q3_1`, `q3_2`, `q3_3`, `q3_4`, `q3_5`, `q3_6`, `q3_7`, `q3_8`, `q3_9`, `q3_10`, `q3_11`, `q3_12`, `q3_13`, `q3_14`, `q3_15`, `q4_1`, `q4_1_nemelt`, `q4_5`, `q4_6`, `q4_7`, `q4_8`, `q4_9`, `q4_10`, `q4_11`, `q4_12`, `q5_1`, `q5_2`, `q5_3`, `q5_4`, `q5_5`, `q5_6`, `q5_7`, `q8_6`, `q8_6_nemelt`, `q8_7`, `q8_7_nemelt`, `q8_8`, `q8_8_nemelt`, `q8_9`, `created_at`, `ip_address`) VALUES
	(1, NULL, '', 'tttttttttt', '사원 이하', '', '20대', '농업/임업/어업/광업', '', '소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)', '관계없음 (설문종료)', '', '', NULL, NULL, '', '', '계열 및 전공 학과,', '', NULL, '', 5, 4, 2, 3, 4, 5, 4, 3, 2, 1, 1, 1, 1, 1, 1, '외국어구사능력, 문화이해능력, 문제해결능력,', 'oooooooooooooo', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '조직 적응력 및 커뮤니케이션 능력, 자격증 보유 등의 전문성,', 'rtyrty', '자격증 보유 여부, 지역 및 거주지,', 'yrtyrtyrtyr', '협동심,', 'rtyrtyrt', 'rtyrty', '2020-12-18 11:04:29', NULL);
/*!40000 ALTER TABLE `poll_industry_votes` ENABLE KEYS */;

-- Dumping structure for table survey.poll_linc_industries_votes
DROP TABLE IF EXISTS `poll_linc_industries_votes`;
CREATE TABLE IF NOT EXISTS `poll_linc_industries_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q1_1` int(11) DEFAULT NULL,
  `q1_2` int(11) DEFAULT NULL,
  `q1_3` int(11) DEFAULT NULL,
  `q1_4` int(11) DEFAULT NULL,
  `q2_1` int(11) DEFAULT NULL,
  `q2_2` int(11) DEFAULT NULL,
  `q2_3` int(11) DEFAULT NULL,
  `q2_4` int(11) DEFAULT NULL,
  `q3_1` int(11) DEFAULT NULL,
  `q3_2` int(11) DEFAULT NULL,
  `q3_3` int(11) DEFAULT NULL,
  `q3_4` int(11) DEFAULT NULL,
  `q4_1` int(11) DEFAULT NULL,
  `q4_2` int(11) DEFAULT NULL,
  `q4_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q4_3_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q4_4` text CHARACTER SET utf8 COLLATE utf8_unicode_ci,
  `q5_1` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5_2` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5_3` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5_4` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5_5` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5_5_nemelt` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5_6` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5_7` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table survey.poll_linc_industries_votes: ~0 rows (approximately)
/*!40000 ALTER TABLE `poll_linc_industries_votes` DISABLE KEYS */;
REPLACE INTO `poll_linc_industries_votes` (`id`, `q1_1`, `q1_2`, `q1_3`, `q1_4`, `q2_1`, `q2_2`, `q2_3`, `q2_4`, `q3_1`, `q3_2`, `q3_3`, `q3_4`, `q4_1`, `q4_2`, `q4_3`, `q4_3_nemelt`, `q4_4`, `q5_1`, `q5_2`, `q5_3`, `q5_4`, `q5_5`, `q5_5_nemelt`, `q5_6`, `q5_7`, `created_at`) VALUES
	(1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '스마트팜', 'nemelt', 'text area test', 'input test', '사원 이하', '남성', '20대', '농업/임업/어업/광업', 'nemelt test', '소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)', '스마트팜', '2021-01-23 13:49:12'),
	(2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '스마트식물관리', 'nemelt ', 'aaaaaaaaaaaaa', 'qweqweqweqwe', '부장급', '남성', '40대', '제조업', '5 5 nemelt', '중기업 (광업, 제조업, 건설업, 운송업 종업원 50~299인, 그외 업종 10~299인)', '스마트식물관리', '2021-01-23 13:56:13');
/*!40000 ALTER TABLE `poll_linc_industries_votes` ENABLE KEYS */;

-- Dumping structure for table survey.poll_linc_students_votes
DROP TABLE IF EXISTS `poll_linc_students_votes`;
CREATE TABLE IF NOT EXISTS `poll_linc_students_votes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `q1_1` int(11) DEFAULT NULL,
  `q1_2` int(11) DEFAULT NULL,
  `q1_3` int(11) DEFAULT NULL,
  `q1_4` int(11) DEFAULT NULL,
  `q2_1` int(11) DEFAULT NULL,
  `q2_2` int(11) DEFAULT NULL,
  `q2_3` int(11) DEFAULT NULL,
  `q2_4` int(11) DEFAULT NULL,
  `q3_1` int(11) DEFAULT NULL,
  `q3_2` int(11) DEFAULT NULL,
  `q3_3` int(11) DEFAULT NULL,
  `q3_4` int(11) DEFAULT NULL,
  `q4_1` int(11) DEFAULT NULL,
  `q4_2` int(11) DEFAULT NULL,
  `q4_3` int(11) DEFAULT NULL,
  `q5_1` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5_2` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `q5_3` varchar(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table survey.poll_linc_students_votes: ~3 rows (approximately)
/*!40000 ALTER TABLE `poll_linc_students_votes` DISABLE KEYS */;
REPLACE INTO `poll_linc_students_votes` (`id`, `q1_1`, `q1_2`, `q1_3`, `q1_4`, `q2_1`, `q2_2`, `q2_3`, `q2_4`, `q3_1`, `q3_2`, `q3_3`, `q3_4`, `q4_1`, `q4_2`, `q4_3`, `q5_1`, `q5_2`, `q5_3`, `created_at`) VALUES
	(1, 2, 3, 4, 5, 3, 4, 5, 4, 4, 5, 4, 5, 5, 4, 3, '창업(자영업)', '수의간호복지', '2학년', '2021-01-22 11:25:50'),
	(2, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '회사(기관)에 취업', '스마트팜', '1학년', '2021-01-22 11:28:09'),
	(3, 2, 3, 4, 5, 3, 3, 3, 3, 4, 3, 4, 4, 4, 5, 4, '창업(자영업)', '스마트식물관리', '1학년', '2021-01-23 10:01:47'),
	(4, 1, 2, 3, 4, 2, 2, 2, 2, 3, 3, 3, 3, 4, 4, 4, '창업(자영업)', '스마트팜', '1학년', '2021-01-23 14:08:23');
/*!40000 ALTER TABLE `poll_linc_students_votes` ENABLE KEYS */;

-- Dumping structure for table survey.poll_staff_votes
DROP TABLE IF EXISTS `poll_staff_votes`;
CREATE TABLE IF NOT EXISTS `poll_staff_votes` (
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
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- Dumping data for table survey.poll_staff_votes: 2 rows
/*!40000 ALTER TABLE `poll_staff_votes` DISABLE KEYS */;
REPLACE INTO `poll_staff_votes` (`id`, `user_email`, `q1_1_1`, `q1_1_2`, `q1_1_3`, `q1_1_4`, `q1_1_5`, `q2_1_1`, `q2_1_2`, `q2_1_1_1`, `q2_1_1_other`, `q2_2_1`, `q2_2_1_1`, `q2_2_1_other`, `q2_3_1`, `q2_3_2`, `q2_3_3`, `q2_3_4`, `q2_3_5`, `q2_4_1`, `q2_4_1_1`, `q2_4_1_other`, `q2_4_2_1`, `q2_4_2_other`, `q3_1_1`, `q3_1_2`, `q3_1_3`, `q3_1_4`, `q3_2_1`, `q3_2_2`, `q3_2_3`, `q3_2_1_1`, `q3_2_1_other`, `q3_3_1`, `q3_3_2`, `q3_3_3`, `q3_3_1_1`, `q3_4_1`, `q3_4_2`, `q3_4_3`, `q3_4_4`, `q4_1_1`, `q4_1_2`, `q4_2_1`, `q4_2_2`, `q4_2_3`, `q4_3_1`, `q4_3_2`, `q4_3_3`, `q4_3_4`, `q5_1_1`, `q5_1_2`, `q5_1_3`, `q5_1_4`, `q6_1_1`, `q6_1_2`, `q6_1_3`, `q6_2_1`, `q6_2_2`, `q6_2_3`, `q6_3_1`, `q6_3_2`, `q6_3_3`, `q6_4_1`, `q6_4_2`, `q6_4_3`, `q6_5_1`, `q6_5_2`, `q6_6_1`, `q6_6_2`, `q6_6_3`, `q6_7_1`, `q6_7_other`, `q7_1_1`, `q7_1_2`, `q8_1_1`, `q8_1_2`, `q8_1_1_1`, `q9_1_1`, `q9_1_2`, `q9_1_3`, `q9_1_4`, `q9_1_5`, `q9_1_6`, `q9_1_7`, `q9_1_8`, `q9_2_1`, `q9_2_2`, `q9_2_3`, `q9_2_4`, `q9_2_5`, `q9_2_6`, `q9_2_7`, `q10_1`, `q10_2`, `q10_3`, `created_at`, `ip_address`) VALUES
	(1, NULL, 1, 1, 1, 1, 1, 1, 1, '낮은 수준의 교육과정, 실험 및 실습 교육의 부족,', 'kita', 1, '융복합 교육방법의 도입,', 'kita', 2, 2, 2, 2, 2, 1, '현장 적합형 실무능력, 직업관, 윤리관 등의 인성,', 'kita', '창의적인 업무 처리 능력, 조직 적응력 및 커뮤니케이션 능력,', 'kita', 1, 1, 1, 1, 1, 1, 1, '신속, 정확한 행정 서비스 처리, 행정 업무 협력 체계 강화,', 'rty', 2, 2, 2, 'test', 3, 3, 3, 3, 2, 2, 3, 3, 3, 4, 4, 4, 4, 3, 3, 3, 3, 1, 1, 1, 2, 2, 2, 3, 3, 3, 4, 4, 4, 5, 5, 3, 3, 3, '학생지원 활동의 체계 고도화, 대학의 행재정적 지원 강화,', 'rtyutyuuoi', 1, 1, 1, 1, 'werwer wer sdf sdf hfgh fgh ', 5, 5, 5, 4, 4, 4, 4, 5, 5, 5, 5, 5, 5, 5, 5, 1, 1, 2, '2020-12-18 06:56:17', '0.0.0.0'),
	(2, NULL, 2, 3, 3, 4, 4, 3, 3, '최신기술 교육의 부족, 실험 및 실습 교육의 부족,', '', 3, '교육 교재 및 교보재 개선, 실험실습 비중의 확대,', '', 3, 4, 4, 5, 4, 4, '현장 적합형 실무능력, 직업관, 윤리관 등의 인성,', 'aaaa', '현장 적합형 실무능력, 직업관, 윤리관 등의 인성,', 'wwww', 4, 4, 4, 4, 4, 4, 4, '행정 직원의 전문성 강화, 행정 업무 프로세스 효율화,', '', 4, 4, 4, 'aaaqweqweqe', 4, 5, 4, 4, 4, 4, 4, 5, 4, 5, 5, 5, 5, 5, 4, 4, 5, 4, 4, 4, 4, 4, 4, 5, 4, 5, 3, 4, 4, 4, 4, 4, 5, 4, '학생지원 활동의 체계 고도화, 대학의 행재정적 지원 강화,', '', 4, 4, 4, 4, '', 4, 4, 4, 4, 4, 4, 4, 4, 5, 4, 5, 5, 5, 5, 5, 2, 1, 2, '2021-01-22 10:24:39', '0.0.0.0');
/*!40000 ALTER TABLE `poll_staff_votes` ENABLE KEYS */;

-- Dumping structure for table survey.poll_teacher_votes
DROP TABLE IF EXISTS `poll_teacher_votes`;
CREATE TABLE IF NOT EXISTS `poll_teacher_votes` (
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

-- Dumping data for table survey.poll_teacher_votes: ~0 rows (approximately)
/*!40000 ALTER TABLE `poll_teacher_votes` DISABLE KEYS */;
REPLACE INTO `poll_teacher_votes` (`id`, `user_email`, `q1_1_1`, `q1_1_2`, `q1_1_3`, `q1_1_4`, `q1_1_5`, `q2_1_1`, `q2_1_2`, `q2_1_3`, `q2_1_4`, `q2_1_5`, `q2_1_1_1`, `q2_1_nemelt`, `q2_2_1`, `q2_2_2`, `q2_2_3`, `q2_2_4`, `q2_2_1_1`, `q2_2_nemelt`, `q2_3_1`, `q2_3_2`, `q2_3_3`, `q2_3_4`, `q2_3_5`, `q2_3_6`, `q2_4_1`, `q2_4_2`, `q2_4_3`, `q2_4_1_1`, `q2_4_1_nemelt`, `q2_4_2_1`, `q2_4_2_nemelt`, `q3_1_1`, `q3_1_2`, `q3_1_3`, `q3_1_4`, `q3_1_5`, `q3_1_6`, `q3_2_1`, `q3_2_2`, `q3_2_3`, `q3_2_1_1`, `q3_2_nemelt`, `q3_3_1`, `q3_3_2`, `q3_3_3`, `q3_3_1_1`, `q3_4_1`, `q3_4_2`, `q3_4_3`, `q3_4_4`, `q4_1_1`, `q4_1_2`, `q4_1_3`, `q4_1_4`, `q4_2_1`, `q4_2_2`, `q4_2_3`, `q4_2_4`, `q4_3_1`, `q4_3_2`, `q4_3_3`, `q4_3_4`, `q5_1_1`, `q5_1_2`, `q5_1_3`, `q5_1_4`, `q6_1_1`, `q6_1_2`, `q6_1_3`, `q6_2_1`, `q6_2_2`, `q6_2_3`, `q6_3_1`, `q6_3_2`, `q6_3_3`, `q6_4_1`, `q6_4_2`, `q6_4_3`, `q6_5_1`, `q6_5_2`, `q6_6_1`, `q6_6_2`, `q6_6_3`, `q6_7`, `q6_7_nemelt`, `q7_1_2`, `q7_1_3`, `q8_1_1`, `q8_1_2`, `q8_2`, `qc9_1_1`, `qc9_1_2`, `qc9_1_3`, `qc9_1_4`, `qc9_1_5`, `qc9_1_6`, `qc9_1_7`, `qc9_1_8`, `qc9_2_1`, `qc9_2_2`, `qc9_2_3`, `qc9_2_4`, `qc9_2_5`, `qc9_3_1`, `qc9_3_2`, `qc9_3_3`, `qc9_3_4`, `q9_1`, `q9_2`, `q9_3`, `created_at`, `ip_address`) VALUES
	(1, NULL, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '최신기술 교육의 부족, 실험 및 실습 교육의 부족,', '', 5, 5, 5, 5, '교육 교재 및 교보재 개선, 실험실습 비중의 확대, 다양한 학생 평가방법 도입,', '', 5, 5, 5, 5, 5, 5, 5, 5, 5, '조직 적응력 및 커뮤니케이션 능력, 창의적인 업무 처리 능력, 직업관, 윤리관 등의 인성,', '', '직업관, 윤리관 등의 인성, 조직 적응력 및 커뮤니케이션 능력, 창의적인 업무 처리 능력,', '', 5, 5, 5, 5, 5, 5, 5, 5, 5, '행정 직원의 전문성 강화,', '', 5, 5, 5, 'rtyrty', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '학생지원 활동의 체계 고도화,', '', 5, 5, 5, 5, 'ppppp', 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, '1', '1', '2', '2020-12-18 08:50:07', NULL);
/*!40000 ALTER TABLE `poll_teacher_votes` ENABLE KEYS */;

-- Dumping structure for table survey.staff
DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(45) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table survey.staff: ~2 rows (approximately)
/*!40000 ALTER TABLE `staff` DISABLE KEYS */;
REPLACE INTO `staff` (`id`, `email`) VALUES
	(1, 'staff1@koje.ac.kr'),
	(2, 'staff2@koje.ac.kr');
/*!40000 ALTER TABLE `staff` ENABLE KEYS */;

-- Dumping structure for table survey.teachers
DROP TABLE IF EXISTS `teachers`;
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `department` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `name` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `division` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(33) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `email` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `type` int(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table survey.teachers: ~2 rows (approximately)
/*!40000 ALTER TABLE `teachers` DISABLE KEYS */;
REPLACE INTO `teachers` (`id`, `department`, `name`, `division`, `phone`, `email`, `type`) VALUES
	(1, '기계공학과', '손호재', '교원', '010-4875-0678', 'hjson@koje.ac.kr', 1),
	(2, 'test', '2test', '3test', '111111111', 'test@koje.ac.kr', 2);
/*!40000 ALTER TABLE `teachers` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
