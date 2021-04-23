DROP DATABASE IF EXISTS `fruitcart`;
CREATE DATABASE IF NOT EXISTS `fruitcart`;
USE `fruitcart`;

-- Dumping structure for table shoppingcart.tblproducts
DROP TABLE IF EXISTS `tblproducts`;
CREATE TABLE IF NOT EXISTS `tblproducts` (
  `ProductID` int(11) NOT NULL AUTO_INCREMENT,
  `ProductCode` varchar(50) NOT NULL DEFAULT '0',
  `ProductName` varchar(50) NOT NULL DEFAULT '0',
  `Price` double(10,2) NOT NULL DEFAULT 0.00,
  `imagepath` VARCHAR(150) NOT NULL,
  PRIMARY KEY (`ProductID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

INSERT INTO `tblproducts` (`ProductID`, `ProductCode`, `ProductName`, `Price`, `imagepath`) VALUES
	(1, 'App001', 'Green Apple', 0.60, 'Product-images/Green-Apple.jpg'),
	(2, 'Ora001', 'Orange', 0.25, 'Product-images/Orange.jpg');
    

