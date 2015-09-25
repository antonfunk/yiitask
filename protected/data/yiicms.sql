-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server Version:               5.6.26 - MySQL Community Server (GPL)
-- Server Betriebssystem:        Win32
-- HeidiSQL Version:             9.3.0.4993
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Exportiere Datenbank Struktur für yiicms
CREATE DATABASE IF NOT EXISTS `yiicms` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `yiicms`;


-- Exportiere Struktur von Tabelle yiicms.article
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `tree_id` int(10) NOT NULL,
  `status` enum('0','1') DEFAULT '0',
  `title` varchar(255) DEFAULT NULL,
  `teaser` text,
  `text` text,
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `edited` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  KEY `tree_id` (`tree_id`),
  CONSTRAINT `FK_article_tree` FOREIGN KEY (`tree_id`) REFERENCES `tree` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- Exportiere Daten aus Tabelle yiicms.article: ~12 rows (ungefähr)
DELETE FROM `article`;
/*!40000 ALTER TABLE `article` DISABLE KEYS */;
INSERT INTO `article` (`id`, `tree_id`, `status`, `title`, `teaser`, `text`, `created`, `edited`, `deleted`) VALUES
	(1, 4, '0', 'Über uns wird viel gesagt', 'Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. ', 'Setting Merge Var arrays that include the GROUPINGS array when using HTTP GET/POST URL strings. This example shows you how nested/multi-dimensional arrays should be passed in. This example\'s list has two Groupings, Pets and Food, and we have selected the Cat and Dog options for the Pets group, and the Meat and Kibble options for the Food group. Note that the 0 and 1 keys are not actually used for anything, but they need to be included to identify which data belongs in the arrays which are being passed.', '2015-09-25 14:51:05', '2015-09-25 14:51:05', NULL),
	(2, 4, '1', 'Über uns wird viel gesagt', 'Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. ', 'Setting Merge Var arrays that include the GROUPINGS array when using HTTP GET/POST URL strings. This example shows you how nested/multi-dimensional arrays should be passed in. This example\'s list has two Groupings, Pets and Food, and we have selected the Cat and Dog options for the Pets group, and the Meat and Kibble options for the Food group. Note that the 0 and 1 keys are not actually used for anything, but they need to be included to identify which data belongs in the arrays which are being passed.', '2015-09-25 14:51:05', '2015-09-25 14:51:05', NULL),
	(3, 4, '1', 'Über uns wird viel gesagt', 'Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. ', 'Setting Merge Var arrays that include the GROUPINGS array when using HTTP GET/POST URL strings. This example shows you how nested/multi-dimensional arrays should be passed in. This example\'s list has two Groupings, Pets and Food, and we have selected the Cat and Dog options for the Pets group, and the Meat and Kibble options for the Food group. Note that the 0 and 1 keys are not actually used for anything, but they need to be included to identify which data belongs in the arrays which are being passed.', '2015-09-25 14:51:05', '2015-09-25 14:51:05', NULL),
	(4, 4, '1', 'Über uns wird viel gesagt', 'Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. ', 'Setting Merge Var arrays that include the GROUPINGS array when using HTTP GET/POST URL strings. This example shows you how nested/multi-dimensional arrays should be passed in. This example\'s list has two Groupings, Pets and Food, and we have selected the Cat and Dog options for the Pets group, and the Meat and Kibble options for the Food group. Note that the 0 and 1 keys are not actually used for anything, but they need to be included to identify which data belongs in the arrays which are being passed.', '2015-09-25 14:51:05', '2015-09-25 14:51:05', NULL),
	(5, 4, '1', 'Über uns wird viel gesagt', 'Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. ', 'Setting Merge Var arrays that include the GROUPINGS array when using HTTP GET/POST URL strings. This example shows you how nested/multi-dimensional arrays should be passed in. This example\'s list has two Groupings, Pets and Food, and we have selected the Cat and Dog options for the Pets group, and the Meat and Kibble options for the Food group. Note that the 0 and 1 keys are not actually used for anything, but they need to be included to identify which data belongs in the arrays which are being passed.', '2015-09-25 14:51:05', '2015-09-25 14:51:05', NULL),
	(6, 4, '0', 'Über uns wird viel gesagt', 'Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. ', 'Setting Merge Var arrays that include the GROUPINGS array when using HTTP GET/POST URL strings. This example shows you how nested/multi-dimensional arrays should be passed in. This example\'s list has two Groupings, Pets and Food, and we have selected the Cat and Dog options for the Pets group, and the Meat and Kibble options for the Food group. Note that the 0 and 1 keys are not actually used for anything, but they need to be included to identify which data belongs in the arrays which are being passed.', '2015-09-25 14:51:05', '2015-09-25 14:51:05', NULL),
	(7, 4, '0', 'Über uns wird viel gesagt', 'Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. ', 'Setting Merge Var arrays that include the GROUPINGS array when using HTTP GET/POST URL strings. This example shows you how nested/multi-dimensional arrays should be passed in. This example\'s list has two Groupings, Pets and Food, and we have selected the Cat and Dog options for the Pets group, and the Meat and Kibble options for the Food group. Note that the 0 and 1 keys are not actually used for anything, but they need to be included to identify which data belongs in the arrays which are being passed.', '2015-09-25 14:51:05', '2015-09-25 14:51:05', NULL),
	(8, 4, '0', 'Über uns wird viel gesagt', 'Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. ', 'Setting Merge Var arrays that include the GROUPINGS array when using HTTP GET/POST URL strings. This example shows you how nested/multi-dimensional arrays should be passed in. This example\'s list has two Groupings, Pets and Food, and we have selected the Cat and Dog options for the Pets group, and the Meat and Kibble options for the Food group. Note that the 0 and 1 keys are not actually used for anything, but they need to be included to identify which data belongs in the arrays which are being passed.', '2015-09-25 14:51:05', '2015-09-25 14:51:05', NULL),
	(9, 4, '0', 'Über uns wird viel gesagt', 'Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. ', 'Setting Merge Var arrays that include the GROUPINGS array when using HTTP GET/POST URL strings. This example shows you how nested/multi-dimensional arrays should be passed in. This example\'s list has two Groupings, Pets and Food, and we have selected the Cat and Dog options for the Pets group, and the Meat and Kibble options for the Food group. Note that the 0 and 1 keys are not actually used for anything, but they need to be included to identify which data belongs in the arrays which are being passed.', '2015-09-25 14:51:05', '2015-09-25 14:51:05', NULL),
	(10, 4, '1', 'Über uns wird viel gesagt', 'Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. ', 'Setting Merge Var arrays that include the GROUPINGS array when using HTTP GET/POST URL strings. This example shows you how nested/multi-dimensional arrays should be passed in. This example\'s list has two Groupings, Pets and Food, and we have selected the Cat and Dog options for the Pets group, and the Meat and Kibble options for the Food group. Note that the 0 and 1 keys are not actually used for anything, but they need to be included to identify which data belongs in the arrays which are being passed.', '2015-09-25 14:51:05', '2015-09-25 14:51:05', NULL),
	(11, 4, '0', 'Über uns wird viel gesagt', 'Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. ', 'Setting Merge Var arrays that include the GROUPINGS array when using HTTP GET/POST URL strings. This example shows you how nested/multi-dimensional arrays should be passed in. This example\'s list has two Groupings, Pets and Food, and we have selected the Cat and Dog options for the Pets group, and the Meat and Kibble options for the Food group. Note that the 0 and 1 keys are not actually used for anything, but they need to be included to identify which data belongs in the arrays which are being passed.', '2015-09-25 14:51:05', '2015-09-25 14:51:05', NULL),
	(12, 4, '1', 'Über uns wird viel gesagt', 'Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. Das ist ein kleiner Teaser. ', 'Setting Merge Var arrays that include the GROUPINGS array when using HTTP GET/POST URL strings. This example shows you how nested/multi-dimensional arrays should be passed in. This example\'s list has two Groupings, Pets and Food, and we have selected the Cat and Dog options for the Pets group, and the Meat and Kibble options for the Food group. Note that the 0 and 1 keys are not actually used for anything, but they need to be included to identify which data belongs in the arrays which are being passed.', '2015-09-25 14:51:05', '2015-09-25 14:51:05', NULL);
/*!40000 ALTER TABLE `article` ENABLE KEYS */;


-- Exportiere Struktur von Tabelle yiicms.tree
CREATE TABLE IF NOT EXISTS `tree` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `sort` int(11) NOT NULL DEFAULT '0',
  `label` varchar(255) NOT NULL DEFAULT '',
  `status` enum('0','1','2','3') NOT NULL DEFAULT '0',
  `path` varchar(255) NOT NULL DEFAULT '',
  `created` datetime DEFAULT CURRENT_TIMESTAMP,
  `edited` datetime DEFAULT CURRENT_TIMESTAMP,
  `deleted` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- Exportiere Daten aus Tabelle yiicms.tree: ~10 rows (ungefähr)
DELETE FROM `tree`;
/*!40000 ALTER TABLE `tree` DISABLE KEYS */;
INSERT INTO `tree` (`id`, `parent_id`, `sort`, `label`, `status`, `path`, `created`, `edited`, `deleted`) VALUES
	(1, 0, 0, 'Deutsch', '1', 'de', '2015-09-23 17:12:59', '2015-09-23 17:12:59', NULL),
	(2, 0, 0, 'Englisch', '1', 'en', '2015-09-23 17:12:59', '2015-09-23 17:12:59', NULL),
	(3, 0, 0, 'Espanol', '1', 'es', '2015-09-23 17:12:59', '2015-09-23 17:12:59', NULL),
	(4, 1, 0, 'Über uns', '0', '', '2015-09-24 14:29:41', '2015-09-24 14:29:41', NULL),
	(5, 2, 0, 'About us', '0', '', '2015-09-24 14:29:53', '2015-09-24 14:29:53', NULL),
	(6, 1, 0, 'Impressum', '0', '', '2015-09-24 15:31:34', '2015-09-24 15:31:34', NULL),
	(7, 1, 0, 'Kontakt', '0', '', '2015-09-24 15:31:53', '2015-09-24 15:31:53', NULL),
	(8, 1, 0, 'Produkte', '0', '', '2015-09-24 15:32:08', '2015-09-24 15:32:08', NULL),
	(9, 8, 0, 'Kleidung', '0', '', '2015-09-24 15:32:08', '2015-09-24 15:32:08', NULL),
	(10, 8, 0, 'Schuhe', '0', '', '2015-09-24 15:32:08', '2015-09-24 15:32:08', NULL);
/*!40000 ALTER TABLE `tree` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
