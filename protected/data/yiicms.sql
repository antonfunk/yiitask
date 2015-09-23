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
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- Exportiere Daten aus Tabelle yiicms.tree: 3 rows
DELETE FROM `tree`;
/*!40000 ALTER TABLE `tree` DISABLE KEYS */;
INSERT INTO `tree` (`id`, `parent_id`, `sort`, `label`, `status`, `path`, `created`, `edited`, `deleted`) VALUES
	(1, 0, 0, 'Deutsch', '1', 'de', '2015-09-23 17:12:59', '2015-09-23 17:12:59', '2015-09-23 17:13:10'),
	(2, 0, 0, 'Englisch', '1', 'en', '2015-09-23 17:12:59', '2015-09-23 17:12:59', '2015-09-23 17:13:10'),
	(3, 0, 0, 'Espanol', '1', 'es', '2015-09-23 17:12:59', '2015-09-23 17:12:59', '2015-09-23 17:13:10');
/*!40000 ALTER TABLE `tree` ENABLE KEYS */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
