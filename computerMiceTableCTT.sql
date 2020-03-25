# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.29)
# Database: collectionproject
# Generation Time: 2020-03-25 14:12:08 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table computerMice
# ------------------------------------------------------------

DROP TABLE IF EXISTS `computerMice`;

CREATE TABLE `computerMice` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `brand` varchar(50) DEFAULT NULL,
  `weight` smallint(4) DEFAULT NULL,
  `is_wireless` tinyint(2) DEFAULT NULL,
  `image` varchar(255) NOT NULL DEFAULT 'https://i.imgur.com/yvzx8H8.jpg',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

LOCK TABLES `computerMice` WRITE;
/*!40000 ALTER TABLE `computerMice` DISABLE KEYS */;

INSERT INTO `computerMice` (`id`, `name`, `brand`, `weight`, `is_wireless`, `image`)
VALUES
	(1,'Razer Viper','Razer',70,0,'https://images.maxgaming.com/data/product/1200f960/razer_viper_ambidextrios_gamingmus_6.png'),
	(2,'Razer Viper Ultimate','Razer',74,1,'https://images.maxgaming.com/data/product/1200f960/razer_viper_ultimate_tradlos_gamingmus_med_laddningsstation.jpg'),
	(3,'G Pro Wireless','Logitech',80,1,'https://images.maxgaming.com/data/product/1200f960/logitech_g_pro_tradlos.jpg'),
	(4,'Zowie FK1+','Zowie\n',94,0,'https://images.maxgaming.com/data/product/1200f960/zowie_by_benq_fk1_mouse_6.jpg'),
	(5,'Finalmouse Ultralight 2 - Cape Town','Finalmouse',47,0,'https://images.maxgaming.com/data/product/600f480/finalmouse_ultralight_2_-_cape_town.png');

/*!40000 ALTER TABLE `computerMice` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
