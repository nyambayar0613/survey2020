-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 06, 2019 at 07:47 AM
-- Server version: 5.7.24
-- PHP Version: 7.2.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `survey`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `id` int(11) NOT NULL,
  `email` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`id`, `email`) VALUES
(1, 'hjson@koje.ac.kr'),
(2, 'test@koje.ac.kr'),
(3, 'test2@koje.ac.kr'),
(4, 'test3@koje.ac.kr'),
(5, 'test4@koje.ac.kr'),
(6, 'test5@koje.ac.kr'),
(7, 'test6@koje.ac.kr');

-- --------------------------------------------------------

--
-- Table structure for table `graduates`
--

CREATE TABLE `graduates` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graduates`
--

INSERT INTO `graduates` (`id`, `email`) VALUES
(1, 'hjson@koje.ac.kr'),
(2, 'test@koje.ac.kr');

-- --------------------------------------------------------

--
-- Table structure for table `poll_branch_votes`
--

CREATE TABLE `poll_branch_votes` (
  `id` int(11) NOT NULL,
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
  `q4_2` varchar(255) DEFAULT NULL,
  `q4_3` varchar(255) DEFAULT NULL,
  `q4_4` varchar(255) DEFAULT NULL,
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
  `q5_3_nemelt` varchar(255) DEFAULT NULL,
  `q5_4` int(11) DEFAULT NULL,
  `q5_5` int(11) DEFAULT NULL,
  `q5_6` int(11) DEFAULT NULL,
  `q5_7` int(11) DEFAULT NULL,
  `q5_8` varchar(255) DEFAULT NULL,
  `q5_9` varchar(255) DEFAULT NULL,
  `q5_10` varchar(255) DEFAULT NULL,
  `q5_10_nemelt` varchar(255) DEFAULT NULL,
  `q6_1` varchar(255) DEFAULT NULL,
  `q6_2` varchar(255) DEFAULT NULL,
  `q6_2_nemelt` varchar(255) DEFAULT NULL,
  `q6_3` varchar(255) DEFAULT NULL,
  `q6_4` varchar(255) DEFAULT NULL,
  `q6_4_nemelt` varchar(255) DEFAULT NULL,
  `q8_1` varchar(255) DEFAULT NULL,
  `q8_2` varchar(255) DEFAULT NULL,
  `q8_3` varchar(255) DEFAULT NULL,
  `q8_4` varchar(255) DEFAULT NULL,
  `q8_5` varchar(255) DEFAULT NULL,
  `q8_5_nemelt` varchar(255) DEFAULT NULL,
  `q8_6` varchar(255) DEFAULT NULL,
  `q8_6_nemelt` varchar(255) DEFAULT NULL,
  `q8_7` varchar(255) DEFAULT NULL,
  `q8_7_nemelt` varchar(255) DEFAULT NULL,
  `q8_8` varchar(255) DEFAULT NULL,
  `q8_8_nemelt` varchar(255) DEFAULT NULL,
  `q8_9` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poll_branch_votes`
--

INSERT INTO `poll_branch_votes` (`id`, `q1_1`, `q1_2`, `q1_3`, `q1_4`, `q1_5`, `q1_6`, `q1_6_nemelt`, `q1_7`, `q2_1`, `q2_2`, `q2_3`, `q2_4`, `q2_5`, `q2_5_nemelt`, `q2_6`, `q2_7`, `q2_7_nemelt`, `q2_8`, `q2_8_nemelt`, `q3_1`, `q3_2`, `q3_3`, `q3_4`, `q3_5`, `q3_6`, `q3_7`, `q3_8`, `q3_9`, `q3_10`, `q3_11`, `q3_12`, `q3_13`, `q3_14`, `q3_15`, `q4_1`, `q4_1_nemelt`, `q4_2`, `q4_3`, `q4_4`, `q4_5`, `q4_6`, `q4_7`, `q4_8`, `q4_9`, `q4_10`, `q4_11`, `q4_12`, `q5_1`, `q5_2`, `q5_3`, `q5_3_nemelt`, `q5_4`, `q5_5`, `q5_6`, `q5_7`, `q5_8`, `q5_9`, `q5_10`, `q5_10_nemelt`, `q6_1`, `q6_2`, `q6_2_nemelt`, `q6_3`, `q6_4`, `q6_4_nemelt`, `q8_1`, `q8_2`, `q8_3`, `q8_4`, `q8_5`, `q8_5_nemelt`, `q8_6`, `q8_6_nemelt`, `q8_7`, `q8_7_nemelt`, `q8_8`, `q8_8_nemelt`, `q8_9`, `created_at`) VALUES
(1, 'asd', 'asdasd', '사원 이하', '남성', '20대', '사업서비스업(여행사, 경비업체 등)', 'asdasd', '소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)', '연암대학교 학생 근무 중', 'asdasd', '', NULL, NULL, '', '채용한 적이 있다.', '계열 및 전공 학과, 지역 및 거주지, 현장실습 및 설계 프로젝트 수행경험, 자격증 보유여부, 면접태도,', 'asdasd', NULL, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '전공분야 전문지식', 'asd', '자기관리 및 개발능력', '문제해결능력', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 1, 1, 1, '예', '좋음', '전공 이론 교육의 부족', 'asd', '예', '현장 적합형 실무능력 충실', '', '예', '너무 이론적 지식에 치우침', '', '예', '축산계열', '예', '예', '주 중 2일', '', '실무 적합형 이론, 자격증 보유 등의 전문성, 조직 적응력 및 커뮤니케이션 능력,', '', '전공계열 및 학과, 현장실습 및 설계 프로젝트 수행경험,', 'asdasdasd', '책임감,', 'asdasd', 'asdas', '2019-12-04 02:10:45'),
(2, 'asdasd', 'asdasd', '사원 이하', '남성', '20대', '전기, 가스 및 수도사업', '', '소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)', '산학협력을 맺음(현장실습, 실습학기, 취업연계 약정 등)', '', '', '인력양성,', '산업 육성을 위한 센터 구축,', '', '채용한 적이 있다.', '계열 및 전공 학과,', '', NULL, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '전공분야 전문지식', '', '의사소통능력', '문제해결능력', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 1, 1, 1, '예', '좋음', '전공 이론 교육의 부족', '', '예', '실무 적합형 이론교육 충실', '', '예', '너무 이론적 지식에 치우침', '', '예', '축산계열', '예', '예', '주 중 2일', '', '실무 적합형 이론,', '', '전공계열 및 학과,', '', '책임감,', '', 'fghfghfgh', '2019-12-04 03:09:37'),
(3, 'dfgdfg', 'dfgdfg', '사원 이하', '남성', '20대', '도매 및 소매업', '', '소기업 (광업, 제조업, 건설업, 운송업 종업원 <50인, 그외 업종 <10인)', '관계없음 (설문종료)', '', '', NULL, NULL, '', '', NULL, '', NULL, '', 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '전공분야 전문지식', 'dfgdfg', '문제해결능력', '조직이해능력', '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 1, 1, 1, '예', '좋음', '전공 이론 교육의 부족', '', '예', '실무 적합형 이론교육 충실', '', '예', '너무 이론적 지식에 치우침', '', '예', '축산계열', '예', '예', '주 중 2일', '', NULL, 'srdtry', NULL, ' gdfgdfgdf', NULL, 'asd', 'asdasd', '2019-12-04 05:26:04');

-- --------------------------------------------------------

--
-- Table structure for table `poll_graduates_votes`
--

CREATE TABLE `poll_graduates_votes` (
  `id` int(11) NOT NULL,
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
  `q4_1` varchar(255) DEFAULT NULL,
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
  `ip_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `poll_staff_votes`
--

CREATE TABLE `poll_staff_votes` (
  `id` int(11) NOT NULL,
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
  `q3_1_5` int(11) DEFAULT NULL,
  `q3_2_1` int(11) DEFAULT NULL,
  `q3_2_2` int(11) DEFAULT NULL,
  `q3_2_3` int(11) DEFAULT NULL,
  `q3_2_1_1` text,
  `q3_2_1_other` varchar(255) DEFAULT NULL,
  `q3_3_1` int(11) DEFAULT NULL,
  `q3_3_2` int(11) DEFAULT NULL,
  `q3_3_3` int(11) DEFAULT NULL,
  `q3_3_4` int(11) DEFAULT NULL,
  `q3_3_1_1` text,
  `q4_1_1` int(11) DEFAULT NULL,
  `q4_1_2` int(11) DEFAULT NULL,
  `q4_1_1_1` text,
  `q4_2_1` int(11) DEFAULT NULL,
  `q4_2_2` int(11) DEFAULT NULL,
  `q4_2_3` int(11) DEFAULT NULL,
  `q4_2_4` int(11) DEFAULT NULL,
  `q4_2_1_1` text,
  `q4_3_1` int(11) DEFAULT NULL,
  `q4_3_2` int(11) DEFAULT NULL,
  `q4_3_3` int(11) DEFAULT NULL,
  `q4_3_4` int(11) DEFAULT NULL,
  `q4_3_1_1` text,
  `q5_1_1` int(11) DEFAULT NULL,
  `q5_1_2` int(11) DEFAULT NULL,
  `q5_1_3` int(11) DEFAULT NULL,
  `q5_1_4` int(11) DEFAULT NULL,
  `q5_1_1_1` text,
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
  `q6_5_1_1` text,
  `q6_6_1` int(11) DEFAULT NULL,
  `q6_6_2` int(11) DEFAULT NULL,
  `q6_6_3` int(11) DEFAULT NULL,
  `q6_7_1` text,
  `q6_7_other` varchar(255) DEFAULT NULL,
  `q6_8_1` text,
  `q7_1_1` int(11) DEFAULT NULL,
  `q7_1_2` int(11) DEFAULT NULL,
  `q7_1_3` int(11) DEFAULT NULL,
  `q8_1_1` int(11) DEFAULT NULL,
  `q8_1_2` int(11) DEFAULT NULL,
  `q8_1_3` int(11) DEFAULT NULL,
  `q8_1_1_1` text,
  `q9_1` int(11) DEFAULT NULL,
  `q9_2` int(11) DEFAULT NULL,
  `q9_3` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poll_staff_votes`
--

INSERT INTO `poll_staff_votes` (`id`, `q1_1_1`, `q1_1_2`, `q1_1_3`, `q1_1_4`, `q1_1_5`, `q2_1_1`, `q2_1_2`, `q2_1_1_1`, `q2_1_1_other`, `q2_2_1`, `q2_2_1_1`, `q2_2_1_other`, `q2_3_1`, `q2_3_2`, `q2_3_3`, `q2_3_4`, `q2_3_5`, `q2_4_1`, `q2_4_1_1`, `q2_4_1_other`, `q2_4_2_1`, `q2_4_2_other`, `q3_1_1`, `q3_1_2`, `q3_1_3`, `q3_1_4`, `q3_1_5`, `q3_2_1`, `q3_2_2`, `q3_2_3`, `q3_2_1_1`, `q3_2_1_other`, `q3_3_1`, `q3_3_2`, `q3_3_3`, `q3_3_4`, `q3_3_1_1`, `q4_1_1`, `q4_1_2`, `q4_1_1_1`, `q4_2_1`, `q4_2_2`, `q4_2_3`, `q4_2_4`, `q4_2_1_1`, `q4_3_1`, `q4_3_2`, `q4_3_3`, `q4_3_4`, `q4_3_1_1`, `q5_1_1`, `q5_1_2`, `q5_1_3`, `q5_1_4`, `q5_1_1_1`, `q6_1_1`, `q6_1_2`, `q6_1_3`, `q6_2_1`, `q6_2_2`, `q6_2_3`, `q6_3_1`, `q6_3_2`, `q6_3_3`, `q6_4_1`, `q6_4_2`, `q6_4_3`, `q6_5_1`, `q6_5_2`, `q6_5_1_1`, `q6_6_1`, `q6_6_2`, `q6_6_3`, `q6_7_1`, `q6_7_other`, `q6_8_1`, `q7_1_1`, `q7_1_2`, `q7_1_3`, `q8_1_1`, `q8_1_2`, `q8_1_3`, `q8_1_1_1`, `q9_1`, `q9_2`, `q9_3`, `created_at`) VALUES
(6, 1, 1, 1, 1, 1, 1, 1, '자격증 시험 중심의 교육운영, 전공 이론 교육의 부족,', 'asdasdasd', 1, '다양한 교수법의 도입, 학생 참여 수업 확대,', 'asdasdasd', 1, 1, 1, 1, 1, 1, '실무 적합형 이론, 자격증 보유 등의 전문성,', '', '실무 적합형 이론, 자격증 보유 등의 전문성, 체계적인 실험 및 실습,', '', 1, 1, 1, 1, 1, 1, 1, 1, '행정 업무 협력 체계 강화, 신속, 정확한 행정 서비스 ', 'asdasd', 1, 1, 1, 1, 'asdasdasdasd', 1, 1, 'asdasdasd', 1, 1, 1, 1, 'asdasd', 1, 1, 1, 1, 'asdasdasd', 1, 1, 1, 1, 'asdasdasd', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 1, 1, '학생지원 활동의 홍보 강화, 학생지원 활동의 선', 'asdasd', 'asdasd', 1, 1, 1, 1, 1, NULL, 'asdasd', 1, 1, 1, '2019-12-04 01:57:28'),
(7, 1, 1, 1, 1, 1, 1, 1, NULL, 'asdasd', 1, NULL, 'asd', 1, 1, 1, 1, 1, 1, NULL, 'asd', NULL, 'asdasd', 1, 1, 1, 1, 1, 1, 1, 1, '신속, 정확한 행정 서비스 처리,', 'asdasdasd', 1, 1, 2, 3, 'asdasdasd', 1, 1, 'asdasd', 1, 1, 1, 1, 'asdasd', 1, 1, 1, 1, 'asdasdasd', 1, 1, 1, 1, 'asdasd', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'asdasdasd', 1, 1, 1, NULL, 'asdasd', 'asdasd', 1, 1, 1, 1, 1, NULL, 'asdasd', 1, 1, 1, '2019-12-04 05:56:29');

-- --------------------------------------------------------

--
-- Table structure for table `poll_teacher_votes`
--

CREATE TABLE `poll_teacher_votes` (
  `id` int(11) NOT NULL,
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
  `q2_2_1` int(11) DEFAULT NULL,
  `q2_2_2` int(11) DEFAULT NULL,
  `q2_2_3` int(11) DEFAULT NULL,
  `q2_2_4` int(11) DEFAULT NULL,
  `q2_2_1_1` varchar(255) DEFAULT NULL,
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
  `q2_4_2_1` varchar(255) DEFAULT NULL,
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
  `q3_3_1` int(11) DEFAULT NULL,
  `q3_3_2` int(11) DEFAULT NULL,
  `q3_3_3` int(11) DEFAULT NULL,
  `q3_3_4` int(11) DEFAULT NULL,
  `q3_3_1_1` varchar(255) DEFAULT NULL,
  `q4_1_1` int(11) DEFAULT NULL,
  `q4_1_2` int(11) DEFAULT NULL,
  `q4_1_3` int(11) DEFAULT NULL,
  `q4_1_4` int(11) DEFAULT NULL,
  `q4_1_1_1` varchar(255) DEFAULT NULL,
  `q4_2_1` int(11) DEFAULT NULL,
  `q4_2_2` int(11) DEFAULT NULL,
  `q4_2_3` int(11) DEFAULT NULL,
  `q4_2_4` int(11) DEFAULT NULL,
  `q4_2_1_1` varchar(255) DEFAULT NULL,
  `q4_3_1` int(11) DEFAULT NULL,
  `q4_3_2` int(11) DEFAULT NULL,
  `q4_3_3` int(11) DEFAULT NULL,
  `q4_3_4` int(11) DEFAULT NULL,
  `q4_3_1_1` varchar(255) DEFAULT NULL,
  `q5_1_1` int(11) DEFAULT NULL,
  `q5_1_2` int(11) DEFAULT NULL,
  `q5_1_3` int(11) DEFAULT NULL,
  `q5_1_4` int(11) DEFAULT NULL,
  `q5_1_1_1` varchar(255) DEFAULT NULL,
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
  `q6_5_1_1` varchar(255) DEFAULT NULL,
  `q6_6_1` int(11) DEFAULT NULL,
  `q6_6_2` int(11) DEFAULT NULL,
  `q6_6_3` int(11) DEFAULT NULL,
  `q6_7` varchar(255) DEFAULT NULL,
  `q6_8` varchar(255) DEFAULT NULL,
  `q7_1_1` int(11) DEFAULT NULL,
  `q7_1_2` int(11) DEFAULT NULL,
  `q7_1_3` int(11) DEFAULT NULL,
  `q8_1_1` int(11) DEFAULT NULL,
  `q8_1_2` int(11) DEFAULT NULL,
  `q8_2` varchar(255) DEFAULT NULL,
  `q9_1` varchar(255) DEFAULT NULL,
  `q9_2` varchar(255) DEFAULT NULL,
  `q9_3` varchar(255) DEFAULT NULL,
  `q2_1_nemelt` varchar(255) DEFAULT NULL,
  `q2_2_nemelt` varchar(255) DEFAULT NULL,
  `q2_4_1_nemelt` varchar(255) DEFAULT NULL,
  `q2_4_2_nemelt` varchar(255) DEFAULT NULL,
  `q3_2_nemelt` varchar(255) DEFAULT NULL,
  `q6_7_nemelt` varchar(255) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `ip_address` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `poll_teacher_votes`
--

INSERT INTO `poll_teacher_votes` (`id`, `user_email`, `q1_1_1`, `q1_1_2`, `q1_1_3`, `q1_1_4`, `q1_1_5`, `q2_1_1`, `q2_1_2`, `q2_1_3`, `q2_1_4`, `q2_1_5`, `q2_1_1_1`, `q2_2_1`, `q2_2_2`, `q2_2_3`, `q2_2_4`, `q2_2_1_1`, `q2_3_1`, `q2_3_2`, `q2_3_3`, `q2_3_4`, `q2_3_5`, `q2_3_6`, `q2_4_1`, `q2_4_2`, `q2_4_3`, `q2_4_1_1`, `q2_4_2_1`, `q3_1_1`, `q3_1_2`, `q3_1_3`, `q3_1_4`, `q3_1_5`, `q3_1_6`, `q3_2_1`, `q3_2_2`, `q3_2_3`, `q3_2_1_1`, `q3_3_1`, `q3_3_2`, `q3_3_3`, `q3_3_4`, `q3_3_1_1`, `q4_1_1`, `q4_1_2`, `q4_1_3`, `q4_1_4`, `q4_1_1_1`, `q4_2_1`, `q4_2_2`, `q4_2_3`, `q4_2_4`, `q4_2_1_1`, `q4_3_1`, `q4_3_2`, `q4_3_3`, `q4_3_4`, `q4_3_1_1`, `q5_1_1`, `q5_1_2`, `q5_1_3`, `q5_1_4`, `q5_1_1_1`, `q6_1_1`, `q6_1_2`, `q6_1_3`, `q6_2_1`, `q6_2_2`, `q6_2_3`, `q6_3_1`, `q6_3_2`, `q6_3_3`, `q6_4_1`, `q6_4_2`, `q6_4_3`, `q6_5_1`, `q6_5_2`, `q6_5_1_1`, `q6_6_1`, `q6_6_2`, `q6_6_3`, `q6_7`, `q6_8`, `q7_1_1`, `q7_1_2`, `q7_1_3`, `q8_1_1`, `q8_1_2`, `q8_2`, `q9_1`, `q9_2`, `q9_3`, `q2_1_nemelt`, `q2_2_nemelt`, `q2_4_1_nemelt`, `q2_4_2_nemelt`, `q3_2_nemelt`, `q6_7_nemelt`, `created_at`, `ip_address`) VALUES
(1, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '교육 교재 및 교보재 개선,', 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, NULL, 1, 1, 1, 1, 1, 1, 1, 1, 1, NULL, 1, 1, 1, 1, '', 1, 1, 1, 1, '', 1, 1, 1, 1, '', 1, 1, 1, 1, '', 1, 1, 1, 1, '', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, '', 1, 1, 1, NULL, '', 1, 1, 1, 1, 1, '', '1', '1', '1', 'asdasd', 'asdasd', 'asd', 'asd', 'asdasd', 'asd', '2019-12-06 05:18:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL,
  `email` varchar(45) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `email`) VALUES
(1, 'hjson@koje.ac.kr'),
(2, 'test@koje.ac.kr'),
(3, 'test1@koje.ac.kr'),
(4, 'test2@koje.ac.kr');

-- --------------------------------------------------------

--
-- Table structure for table `teachers`
--

CREATE TABLE `teachers` (
  `id` int(11) NOT NULL,
  `department` text COLLATE utf8_unicode_ci NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `division` text COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(33) COLLATE utf8_unicode_ci NOT NULL,
  `email` text COLLATE utf8_unicode_ci NOT NULL,
  `type` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `teachers`
--

INSERT INTO `teachers` (`id`, `department`, `name`, `division`, `phone`, `email`, `type`) VALUES
(1, '기계공학과', '손호재', '교원', '010-4875-0678', 'hjson@koje.ac.kr', 1),
(2, 'test', '2test', '3test', '111111111', 'test@koje.ac.kr', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graduates`
--
ALTER TABLE `graduates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll_branch_votes`
--
ALTER TABLE `poll_branch_votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll_graduates_votes`
--
ALTER TABLE `poll_graduates_votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll_staff_votes`
--
ALTER TABLE `poll_staff_votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `poll_teacher_votes`
--
ALTER TABLE `poll_teacher_votes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teachers`
--
ALTER TABLE `teachers`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `graduates`
--
ALTER TABLE `graduates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `poll_branch_votes`
--
ALTER TABLE `poll_branch_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `poll_graduates_votes`
--
ALTER TABLE `poll_graduates_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `poll_staff_votes`
--
ALTER TABLE `poll_staff_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `poll_teacher_votes`
--
ALTER TABLE `poll_teacher_votes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `teachers`
--
ALTER TABLE `teachers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
