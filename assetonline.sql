# --------------------------------------------------------
# Host:                         127.0.0.1
# Server version:               5.0.51b-community-nt-log
# Server OS:                    Win32
# HeidiSQL version:             6.0.0.3603
# Date/time:                    2013-01-06 11:31:34
# --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

# Dumping database structure for assetonline
DROP DATABASE IF EXISTS `assetonline`;
CREATE DATABASE IF NOT EXISTS `assetonline` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE `assetonline`;


# Dumping structure for table assetonline.asset
DROP TABLE IF EXISTS `asset`;
CREATE TABLE IF NOT EXISTS `asset` (
  `assetNumber` varchar(50) NOT NULL,
  `assetName` varchar(100) NOT NULL,
  `assetDetail` text NOT NULL,
  `assetUnit` varchar(50) NOT NULL,
  `assetPrice` decimal(10,2) NOT NULL,
  `receivedType` varchar(100) NOT NULL,
  `receivedDate` date NOT NULL,
  `budgetYear` int(5) NOT NULL,
  `invoiceNumber` varchar(50) NOT NULL,
  `vendor` varchar(100) NOT NULL,
  `assetStatus` varchar(100) NOT NULL,
  PRIMARY KEY  (`assetNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table assetonline.asset: ~0 rows (approximately)
/*!40000 ALTER TABLE `asset` DISABLE KEYS */;
/*!40000 ALTER TABLE `asset` ENABLE KEYS */;


# Dumping structure for table assetonline.catalog
DROP TABLE IF EXISTS `catalog`;
CREATE TABLE IF NOT EXISTS `catalog` (
  `catalogID` int(10) NOT NULL auto_increment,
  `catalogName` varchar(100) NOT NULL,
  PRIMARY KEY  (`catalogID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table assetonline.catalog: ~0 rows (approximately)
/*!40000 ALTER TABLE `catalog` DISABLE KEYS */;
/*!40000 ALTER TABLE `catalog` ENABLE KEYS */;


# Dumping structure for table assetonline.checkhistory
DROP TABLE IF EXISTS `checkhistory`;
CREATE TABLE IF NOT EXISTS `checkhistory` (
  `checkID` int(10) NOT NULL auto_increment,
  `checkDate` date NOT NULL,
  `checkResult` varchar(50) NOT NULL,
  `note` text NOT NULL,
  `assetNumber` varchar(50) NOT NULL,
  PRIMARY KEY  (`checkID`),
  KEY `FK_checkhistory_asset` (`assetNumber`),
  CONSTRAINT `FK_checkhistory_asset` FOREIGN KEY (`assetNumber`) REFERENCES `asset` (`assetNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table assetonline.checkhistory: ~0 rows (approximately)
/*!40000 ALTER TABLE `checkhistory` DISABLE KEYS */;
/*!40000 ALTER TABLE `checkhistory` ENABLE KEYS */;


# Dumping structure for table assetonline.fixhistory
DROP TABLE IF EXISTS `fixhistory`;
CREATE TABLE IF NOT EXISTS `fixhistory` (
  `fixID` int(10) NOT NULL auto_increment,
  `informDate` date NOT NULL,
  `fixDetail` text NOT NULL,
  `informName` varchar(100) NOT NULL,
  `fixStatus` varchar(50) NOT NULL,
  `fixResult` varchar(50) NOT NULL,
  `note` text NOT NULL,
  `assetNumber` varchar(50) NOT NULL,
  PRIMARY KEY  (`fixID`),
  KEY `FK_fixhistory_asset` (`assetNumber`),
  CONSTRAINT `FK_fixhistory_asset` FOREIGN KEY (`assetNumber`) REFERENCES `asset` (`assetNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table assetonline.fixhistory: ~0 rows (approximately)
/*!40000 ALTER TABLE `fixhistory` DISABLE KEYS */;
/*!40000 ALTER TABLE `fixhistory` ENABLE KEYS */;


# Dumping structure for table assetonline.place
DROP TABLE IF EXISTS `place`;
CREATE TABLE IF NOT EXISTS `place` (
  `placeID` int(10) NOT NULL auto_increment,
  `placeName` varchar(100) NOT NULL,
  PRIMARY KEY  (`placeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table assetonline.place: ~0 rows (approximately)
/*!40000 ALTER TABLE `place` DISABLE KEYS */;
/*!40000 ALTER TABLE `place` ENABLE KEYS */;


# Dumping structure for table assetonline.sell
DROP TABLE IF EXISTS `sell`;
CREATE TABLE IF NOT EXISTS `sell` (
  `sellID` int(10) NOT NULL auto_increment,
  `sellDate` date NOT NULL,
  `sellPrice` decimal(10,2) NOT NULL,
  `buyer` varchar(100) NOT NULL,
  `invoiceNumber` varchar(50) NOT NULL,
  `note` text NOT NULL,
  `assetNumber` varchar(50) NOT NULL,
  PRIMARY KEY  (`sellID`),
  KEY `FK_sell_asset` (`assetNumber`),
  CONSTRAINT `FK_sell_asset` FOREIGN KEY (`assetNumber`) REFERENCES `asset` (`assetNumber`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table assetonline.sell: ~0 rows (approximately)
/*!40000 ALTER TABLE `sell` DISABLE KEYS */;
/*!40000 ALTER TABLE `sell` ENABLE KEYS */;


# Dumping structure for table assetonline.usehistory
DROP TABLE IF EXISTS `usehistory`;
CREATE TABLE IF NOT EXISTS `usehistory` (
  `useID` int(10) NOT NULL auto_increment,
  `useStatus` varchar(100) NOT NULL,
  `useBeginDate` date NOT NULL,
  `useEndDate` date NOT NULL,
  `intendant` varchar(100) NOT NULL,
  `note` text NOT NULL,
  `assetNumber` varchar(50) NOT NULL,
  `placeID` int(10) NOT NULL,
  PRIMARY KEY  (`useID`),
  KEY `FK_usehistory_asset` (`assetNumber`),
  KEY `FK_usehistory_place` (`placeID`),
  CONSTRAINT `FK_usehistory_asset` FOREIGN KEY (`assetNumber`) REFERENCES `asset` (`assetNumber`),
  CONSTRAINT `FK_usehistory_place` FOREIGN KEY (`placeID`) REFERENCES `place` (`placeID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table assetonline.usehistory: ~0 rows (approximately)
/*!40000 ALTER TABLE `usehistory` DISABLE KEYS */;
/*!40000 ALTER TABLE `usehistory` ENABLE KEYS */;


# Dumping structure for table assetonline.user
DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `firstname` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `phoneNumber` varchar(15) NOT NULL,
  `position` varchar(50) NOT NULL,
  PRIMARY KEY  (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

# Dumping data for table assetonline.user: ~0 rows (approximately)
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
