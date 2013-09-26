SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


CREATE TABLE IF NOT EXISTS `users` (
  `idUsers` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(45) DEFAULT NULL,
  `password` char(40) DEFAULT NULL,
  PRIMARY KEY (`idUsers`)
)ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


INSERT INTO `users` VALUES (1,'admin','d033e22ae348aeb5660fc2140aec35850c4da997');


CREATE TABLE IF NOT EXISTS `order` (
  `idOrder` int(11) NOT NULL AUTO_INCREMENT,   
  `User` int(11) NOT NULL,
  PRIMARY KEY (`idOrder`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `packing_list` (
  `idPacking_List` int(11) NOT NULL AUTO_INCREMENT,
  `Shipment_Number` mediumtext NOT NULL,
  `Shipment_Date` datetime NOT NULL,
  `Delivery_Note` mediumtext NOT NULL,
  `Sender_Name` varchar(50) NOT NULL,
  `Sender_Code` varchar(50) NOT NULL,
  `Receiver_Name` varchar(50) NOT NULL,
  `Receiver_Code` varchar(50) NOT NULL,
  `Order` int(11) NULL,
  PRIMARY KEY (`idPacking_List`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `palete` (
  `idPalete` int(11) NOT NULL AUTO_INCREMENT,
  `GS1_Code` mediumtext NOT NULL,
  `Item_Type` varchar(45) DEFAULT NULL,
  `Order` int(11) NULL,  
  PRIMARY KEY (`idPalete`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `artupal` (
  `idArtupal` int(11) NOT NULL AUTO_INCREMENT,
  `Product_Code` varchar(45) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Lot_Number` varchar(45) NOT NULL,
  `Quantity` decimal(2,0) NOT NULL,
  `Unit_of_Measure` varchar(45) NULL,
  `Count_of_Units` int(11) NOT NULL,
  `Palete` int(11) NULL,
  PRIMARY KEY (`idArtupal`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `jedinicno` (
  `idJedinicno` int(11) NOT NULL AUTO_INCREMENT,
  `Item_Number` mediumtext DEFAULT NULL,
  `Item_Type` varchar(45) DEFAULT NULL,
  `GS1_Code` mediumtext DEFAULT NULL,
  `Country_Code` varchar(45) DEFAULT NULL,
  `Site_Code` varchar(45) DEFAULT NULL,
  `Unique_Number` mediumtext DEFAULT NULL,
  `Product_Code` varchar(45) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `Production_Date` datetime DEFAULT NULL,
  `Quantity` varchar(45) DEFAULT NULL,
  `Unit_of_Measure` varchar(45) DEFAULT NULL,
  `Count_of_Units` int(11) DEFAULT NULL,
  `Number_of_Items` int(11) DEFAULT NULL,
  `Mikro` int(11) NULL,
  PRIMARY KEY (`idJedinicno`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


CREATE TABLE IF NOT EXISTS `mikro` (
  `idMikro` int(11) NOT NULL AUTO_INCREMENT,
  `Item_Number`mediumtext NOT NULL,
  `Item_Type` varchar(45) DEFAULT NULL,
  `GS1_Code` mediumtext NOT NULL,
  `Country_Code` varchar(45) NOT NULL,
  `Site_Code` varchar(45) NOT NULL,
  `Unique_Number` mediumtext NOT NULL,
  `Product_Code` varchar(45) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Production_Date` datetime NOT NULL,
  `Quantity` mediumtext NOT NULL,
  `Unit_of_Measure` varchar(45) NULL,
  `Count_of_Units` mediumtext NOT NULL,
  `Number_of_Items` int(11) NOT NULL,
  `Paketi` int(11) NULL,
  PRIMARY KEY (`idMikro`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `paketi` (
  `idPaketi` int(11) NOT NULL AUTO_INCREMENT,
  `Item_Type` varchar(45) DEFAULT NULL,
  `Item_Number` mediumtext NOT NULL,
  `Unique_Number` mediumtext NOT NULL,
  `Product_Code` varchar(45) NOT NULL,
  `Description` mediumtext NOT NULL,
  `Production_Date` datetime NOT NULL,
  `Quantity` decimal(2,0) NOT NULL,
  `Unit_of_Measure` varchar(45) NULL,
  `Count_of_Units` decimal(2,0) NOT NULL,
  `Number_of_Items` int(11) NOT NULL,
  `GS1_Code` mediumtext DEFAULT NULL,
  `Country_Code` varchar(45) DEFAULT NULL,
  `Site_Code` varchar(45) DEFAULT NULL,
  `Artupal` int(11) NULL,
  PRIMARY KEY (`idPaketi`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

