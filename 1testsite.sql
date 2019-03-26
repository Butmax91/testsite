/*
Navicat MySQL Data Transfer

Source Server         : testsite
Source Server Version : 50725
Source Host           : testsite:3306
Source Database       : testsite

Target Server Type    : MYSQL
Target Server Version : 50725
File Encoding         : 65001

Date: 2019-03-26 18:01:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for Clothes
-- ----------------------------
DROP TABLE IF EXISTS `Clothes`;
CREATE TABLE `Clothes` (
  `clothID` int(255) NOT NULL AUTO_INCREMENT,
  `cloth_title` varchar(255) NOT NULL,
  `cloth_price` decimal(10,2) NOT NULL,
  `cloth_kind` varchar(255) NOT NULL,
  `cloth_img` varchar(255) NOT NULL,
  `cloth_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`clothID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of Clothes
-- ----------------------------
INSERT INTO `Clothes` VALUES ('1', 'boots', '200.00', 'sport', 'img/boots.jpeg', 'good shoes');
INSERT INTO `Clothes` VALUES ('2', 'shirt', '300.00', 'buisnes', 'img/boots.jpeg', 'good shoes');
INSERT INTO `Clothes` VALUES ('3', 'bootsw', '300.00', 'sport', 'img/boots.jpeg', 'good shoes');
INSERT INTO `Clothes` VALUES ('4', 'ololo', '3456.00', '5464', 'img/boots.jpeg', 'good shoes');
INSERT INTO `Clothes` VALUES ('5', 'sdfsdf', '524.00', '5645', 'img/boots.jpeg', 'good shoes');
INSERT INTO `Clothes` VALUES ('6', 'shorts', '6546.00', '32464', 'img/boots.jpeg', 'good shoes');
INSERT INTO `Clothes` VALUES ('7', 'ked', '1446.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('8', 'ked', '622.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('9', 'ked', '1169.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('10', 'ked', '1484.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('11', 'ked', '1328.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('12', 'ked', '533.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('13', 'ked', '1002.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('14', 'ked', '1482.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('15', 'boot', '914.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('16', 'boot', '988.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('17', 'boot', '1314.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('18', 'boot', '737.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('19', 'boot', '556.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('20', 'boot', '620.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('21', 'boot', '740.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('22', 'boot', '797.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('23', 'boot', '1155.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('24', 'boot', '1004.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('25', 'boot', '1309.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');
INSERT INTO `Clothes` VALUES ('26', 'boot', '726.00', '', 'img/boots.jpeg', 'it a very good stuf from ololo whre is something for somthing to do it');

-- ----------------------------
-- Table structure for orders
-- ----------------------------
DROP TABLE IF EXISTS `orders`;
CREATE TABLE `orders` (
  `orderID` int(10) NOT NULL AUTO_INCREMENT,
  `orderDate` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
  `userID` int(10) NOT NULL,
  `city` varchar(255) NOT NULL,
  `street` varchar(255) NOT NULL,
  `building` varchar(255) NOT NULL,
  `apartment` varchar(255) NOT NULL,
  `clothesID` int(11) NOT NULL,
  `orderCount` int(11) NOT NULL,
  `orderPrice` decimal(10,2) NOT NULL,
  `orderDelivery` varchar(255) NOT NULL,
  `orderPayment` varchar(255) NOT NULL,
  PRIMARY KEY (`orderID`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of orders
-- ----------------------------
INSERT INTO `orders` VALUES ('1', '0000-00-00 00:00:00', '28', 'ololo', 'asdasd', 'fsdf', 'sdf', '0', '3', '300.00', 'bySelf', 'cash');
INSERT INTO `orders` VALUES ('2', '0000-00-00 00:00:00', '28', 'ololo', 'asdasd', 'fsdf', 'sdf', '0', '4', '300.00', 'bySelf', 'cash');
INSERT INTO `orders` VALUES ('3', '0000-00-00 00:00:00', '28', 'ololo', 'asdasd', 'fsdf', 'sdf', '0', '1', '300.00', 'bySelf', 'cash');
INSERT INTO `orders` VALUES ('4', '0000-00-00 00:00:00', '28', 'ololo', 'asdasd', 'fsdf', 'sdf', '8', '1', '622.00', 'bySelf', 'cash');
INSERT INTO `orders` VALUES ('5', '0000-00-00 00:00:00', '28', 'ololo', 'asdasd', 'fsdf', 'sdf', '8', '1', '622.00', 'bySelf', 'cash');
INSERT INTO `orders` VALUES ('6', '0000-00-00 00:00:00', '28', 'ololo', 'asdasd', 'fsdf', 'sdf', '8', '1', '622.00', 'bySelf', 'cash');
INSERT INTO `orders` VALUES ('7', '0000-00-00 00:00:00', '28', 'ololo', 'asdasd', 'fsdf', 'sdf', '5', '1', '524.00', 'bySelf', 'cash');
INSERT INTO `orders` VALUES ('8', '0000-00-00 00:00:00', '28', 'ololo', 'asdasd', 'fsdf', 'sdf', '8', '1', '622.00', 'bySelf', 'cash');
INSERT INTO `orders` VALUES ('9', '0000-00-00 00:00:00', '28', 'ololo', 'asdasd', 'fsdf', 'sdf', '5', '1', '524.00', 'bySelf', 'cash');
INSERT INTO `orders` VALUES ('10', '0000-00-00 00:00:00', '0', 'ololo', 'asdasd', 'fsdf', 'sdf', '8', '1', '622.00', 'bySelf', 'cash');
INSERT INTO `orders` VALUES ('11', '0000-00-00 00:00:00', '0', 'ololo', 'asdasd', 'fsdf', 'sdf', '5', '1', '524.00', 'bySelf', 'cash');
INSERT INTO `orders` VALUES ('12', '0000-00-00 00:00:00', '0', 'ololo', 'asdasd', 'fsdf', 'sdf', '3', '1', '300.00', 'bySelf', 'cash');

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
  `city` varchar(255) DEFAULT NULL,
  `street` varchar(255) DEFAULT NULL,
  `building` varchar(255) DEFAULT NULL,
  `appartment` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('28', 'butmax91', 'butmax1991@gmail.com', '123qwe', '1234567891', 'ololo', 'asdasd', 'fsdf', 'sdf');
INSERT INTO `users` VALUES ('29', '', 'butmax1991@gmail.comm', '123qwe', null, null, null, null, null);
INSERT INTO `users` VALUES ('30', 'butmax91', '', null, '634001804', '', '', '', '');
INSERT INTO `users` VALUES ('31', 'butmax1991', 'butmax1991@gmail.commol', '123qwe', '634001805', 'sdfsdfsdfsd', 'sdfsdfsdf', 'sdfsdfsdf', 'asdasd');
SET FOREIGN_KEY_CHECKS=1;
