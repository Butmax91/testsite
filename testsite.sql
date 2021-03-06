/*
Navicat MySQL Data Transfer

Source Server         : testsite
Source Server Version : 50725
Source Host           : testsite:3306
Source Database       : testsite

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-03-27 17:42:19
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for colors
-- ----------------------------
DROP TABLE IF EXISTS `colors`;
CREATE TABLE `colors` (
  `colorId` int(11) NOT NULL AUTO_INCREMENT,
  `colorTitle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`colorId`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of colors
-- ----------------------------
INSERT INTO `colors` VALUES ('1', 'black');
INSERT INTO `colors` VALUES ('2', 'gray');
INSERT INTO `colors` VALUES ('3', 'blue');
INSERT INTO `colors` VALUES ('4', 'beige');
INSERT INTO `colors` VALUES ('5', 'red');
INSERT INTO `colors` VALUES ('6', 'burgundy');
INSERT INTO `colors` VALUES ('7', 'dark blue');
INSERT INTO `colors` VALUES ('8', 'pink');
INSERT INTO `colors` VALUES ('9', 'brown');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `orderID` int(11) NOT NULL AUTO_INCREMENT,
  `userID` int(11) NOT NULL,
  `orderDate` int(11) NOT NULL,
  `shoesID` int(11) NOT NULL,
  `orderCount` int(11) NOT NULL,
  `orderPrice` decimal(10,2) NOT NULL,
  `orderPayment` varchar(255) NOT NULL,
  `orderDelivery` varchar(255) NOT NULL,
  `orderAdress` varchar(255) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '28', '1553692918', '2', '1', '30.00', 'cashless', 'bySelf', 'ololo                uih');
INSERT INTO `orders` VALUES ('2', '32', '1553693337', '2', '2', '30.00', 'cashless', 'bySelf', 'dfg dfg dfg dfg dfg');

-- ----------------------------
-- Table structure for shoes
-- ----------------------------
DROP TABLE IF EXISTS `shoes`;
CREATE TABLE `shoes` (
  `shoesID` int(10) NOT NULL AUTO_INCREMENT,
  `shoesTitle` varchar(255) DEFAULT NULL,
  `shoesUtensils` varchar(255) DEFAULT NULL,
  `shoesComposition` varchar(255) DEFAULT NULL,
  `shoesWeight` varchar(255) DEFAULT NULL,
  `shoesImg` varchar(255) DEFAULT NULL,
  `shoesProducer` varchar(255) DEFAULT NULL,
  `shoesColor` varchar(255) DEFAULT NULL,
  `shoesPrice` decimal(10,0) DEFAULT NULL,
  `shoesBrand` varchar(255) DEFAULT NULL,
  `imgCount` int(10) NOT NULL,
  PRIMARY KEY (`shoesID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of shoes
-- ----------------------------
INSERT INTO `shoes` VALUES ('1', 'sneakers', '2', 'top/textile inside/texttile bot/polimer', '100', '1', 'Moldova', '1', '20', 'Oldcom', '4');
INSERT INTO `shoes` VALUES ('2', 'Slipons', '2', 'top/textile inside/velours bot/PVC', '50', '2', 'Moldova', '2', '30', 'Oldcom', '4');
INSERT INTO `shoes` VALUES ('3', 'makasins', '2', 'top/textile inside/texttile bot/polimer', '50', '3', 'Moldova', '1', '15', 'Oldcom', '4');
INSERT INTO `shoes` VALUES ('4', 'sneakers', '1', 'top/textile inside/texttile bot/polimer', '300', '4', 'Moldova', '1', '30', 'Oldcom', '4');

-- ----------------------------
-- Table structure for sizes
-- ----------------------------
DROP TABLE IF EXISTS `sizes`;
CREATE TABLE `sizes` (
  `sizeID` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`sizeID`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of sizes
-- ----------------------------
INSERT INTO `sizes` VALUES ('25');
INSERT INTO `sizes` VALUES ('26');
INSERT INTO `sizes` VALUES ('27');
INSERT INTO `sizes` VALUES ('28');
INSERT INTO `sizes` VALUES ('29');
INSERT INTO `sizes` VALUES ('30');
INSERT INTO `sizes` VALUES ('31');
INSERT INTO `sizes` VALUES ('32');
INSERT INTO `sizes` VALUES ('33');
INSERT INTO `sizes` VALUES ('34');
INSERT INTO `sizes` VALUES ('35');
INSERT INTO `sizes` VALUES ('36');
INSERT INTO `sizes` VALUES ('37');
INSERT INTO `sizes` VALUES ('38');
INSERT INTO `sizes` VALUES ('39');
INSERT INTO `sizes` VALUES ('40');
INSERT INTO `sizes` VALUES ('41');
INSERT INTO `sizes` VALUES ('42');
INSERT INTO `sizes` VALUES ('43');
INSERT INTO `sizes` VALUES ('44');
INSERT INTO `sizes` VALUES ('45');
INSERT INTO `sizes` VALUES ('46');

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `login` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `phonenumber` int(10) DEFAULT NULL,
  `adress` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('28', 'butmax91', 'butmax1991@gmail.com', '123qwe', '1234567891', 'ololo                uih');
INSERT INTO `users` VALUES ('29', '', 'butmax1991@gmail.comm', '123qwe', null, null);
INSERT INTO `users` VALUES ('30', 'butmax91', '', null, '634001804', '');
INSERT INTO `users` VALUES ('31', 'butmax1991', 'butmax1991@gmail.commol', '123qwe', '634001805', 'sdfsdfsdfsd');
INSERT INTO `users` VALUES ('32', 'butmax91', 'butmax1991@gmail.com93', '123qwe', null, null);

-- ----------------------------
-- Table structure for utensils
-- ----------------------------
DROP TABLE IF EXISTS `utensils`;
CREATE TABLE `utensils` (
  `unsetilsID` int(10) NOT NULL AUTO_INCREMENT,
  `insetilsTitle` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`unsetilsID`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of utensils
-- ----------------------------
INSERT INTO `utensils` VALUES ('1', 'men');
INSERT INTO `utensils` VALUES ('2', 'women');
INSERT INTO `utensils` VALUES ('3', 'girl');
INSERT INTO `utensils` VALUES ('4', 'boy');
SET FOREIGN_KEY_CHECKS=1;
