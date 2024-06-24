-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               10.4.28-MariaDB - mariadb.org binary distribution
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- Dumping database structure for ecommerce
CREATE DATABASE IF NOT EXISTS `ecommerce` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;
USE `ecommerce`;

-- Dumping structure for table ecommerce.tip
CREATE TABLE IF NOT EXISTS `tip` (
  `tip_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tip` varchar(255) NOT NULL,
  PRIMARY KEY (`tip_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ecommerce.tip: ~3 rows (approximately)
INSERT INTO `tip` (`tip_id`, `tip`) VALUES
	(1, 'Akusticna'),
	(2, 'Elektricna'),
	(3, 'Klasicna');

-- Dumping structure for table ecommerce.gitara
CREATE TABLE IF NOT EXISTS `gitara` (
  `gitara_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tip_id` int(10) unsigned NOT NULL,
  `cena` int(10) unsigned NOT NULL,
  `ime` varchar(255) NOT NULL,
  PRIMARY KEY (`gitara_id`),
  KEY `fk_gitara_tip_id` (`tip_id`),
  CONSTRAINT `fk_gitara_tip_id` FOREIGN KEY (`tip_id`) REFERENCES `tip` (`tip_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ecommerce.gitara: ~2 rows (approximately)
INSERT INTO `gitara` (`gitara_id`, `tip_id`, `cena`, `ime`) VALUES
	(2, 2, 222, 'Gitara1'),
	(3, 1, 100, 'Gitara4');

-- Dumping structure for table ecommerce.uloga
CREATE TABLE IF NOT EXISTS `uloga` (
  `uloga_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uloga` varchar(255) NOT NULL,
  PRIMARY KEY (`uloga_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ecommerce.uloga: ~2 rows (approximately)
INSERT INTO `uloga` (`uloga_id`, `uloga`) VALUES
	(1, 'Administrator'),
	(2, 'Korisnik');

-- Dumping structure for table ecommerce.user
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `uloga_id` int(10) unsigned NOT NULL,
  `ime_prezime` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `is_active` int(10) NOT NULL DEFAULT 0,
  PRIMARY KEY (`user_id`),
  KEY `fk_user_uloga_id` (`uloga_id`),
  CONSTRAINT `fk_user_uloga_id` FOREIGN KEY (`uloga_id`) REFERENCES `uloga` (`uloga_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ecommerce.user: ~2 rows (approximately)
INSERT INTO `user` (`user_id`, `uloga_id`, `ime_prezime`, `email`, `password_hash`, `is_active`) VALUES
	(1, 1, 'luka', 'luka@gmail.com', 'luka123', 1),
	(2, 2, 'ogi', 'ogi@gmail.com', 'ogi123', 1);

-- Dumping structure for table ecommerce.korpa
CREATE TABLE IF NOT EXISTS `korpa` (
  `korpa_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(10) unsigned NOT NULL,
  `gitara_id` int(10) unsigned NOT NULL,
  `kolicina` int(10) unsigned NOT NULL,
  PRIMARY KEY (`korpa_id`),
  KEY `fk_korpa_user_id` (`user_id`),
  KEY `fk_korpa_gitara_id` (`gitara_id`),
  CONSTRAINT `fk_korpa_gitara_id` FOREIGN KEY (`gitara_id`) REFERENCES `gitara` (`gitara_id`) ON UPDATE CASCADE,
  CONSTRAINT `fk_korpa_user_id` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- Dumping data for table ecommerce.korpa: ~1 rows (approximately)
INSERT INTO `korpa` (`korpa_id`, `user_id`, `gitara_id`, `kolicina`) VALUES
	(2, 2, 3, 5);

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;