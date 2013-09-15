/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50530
Source Host           : localhost:3306
Source Database       : laugh

Target Server Type    : MYSQL
Target Server Version : 50530
File Encoding         : 65001

Date: 2013-09-15 21:29:48
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `la_province`
-- ----------------------------
DROP TABLE IF EXISTS `la_province`;
CREATE TABLE `la_province` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `province` varchar(50) DEFAULT NULL COMMENT '省',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=utf8 COMMENT='省';

-- ----------------------------
-- Records of la_province
-- ----------------------------
INSERT INTO `la_province` VALUES ('1', '北京');
INSERT INTO `la_province` VALUES ('2', '上海');
INSERT INTO `la_province` VALUES ('3', '天津');
INSERT INTO `la_province` VALUES ('4', '重庆');
INSERT INTO `la_province` VALUES ('5', '广东');
INSERT INTO `la_province` VALUES ('6', '四川');
INSERT INTO `la_province` VALUES ('7', '浙江');
INSERT INTO `la_province` VALUES ('8', '贵州');
INSERT INTO `la_province` VALUES ('9', '辽宁');
INSERT INTO `la_province` VALUES ('10', '江苏');
INSERT INTO `la_province` VALUES ('11', '福建');
INSERT INTO `la_province` VALUES ('12', '河北');
INSERT INTO `la_province` VALUES ('13', '河南');
INSERT INTO `la_province` VALUES ('14', '吉林');
INSERT INTO `la_province` VALUES ('15', '黑龙江');
INSERT INTO `la_province` VALUES ('16', '山东');
INSERT INTO `la_province` VALUES ('17', '安徽');
INSERT INTO `la_province` VALUES ('18', '广西');
INSERT INTO `la_province` VALUES ('19', '海南');
INSERT INTO `la_province` VALUES ('20', '内蒙古');
INSERT INTO `la_province` VALUES ('21', '山西');
INSERT INTO `la_province` VALUES ('22', '宁夏');
INSERT INTO `la_province` VALUES ('23', '甘肃');
INSERT INTO `la_province` VALUES ('24', '陕西');
INSERT INTO `la_province` VALUES ('25', '青海');
INSERT INTO `la_province` VALUES ('26', '湖北');
INSERT INTO `la_province` VALUES ('27', '湖南');
INSERT INTO `la_province` VALUES ('28', '江西');
INSERT INTO `la_province` VALUES ('29', '云南');
INSERT INTO `la_province` VALUES ('30', '新疆');
INSERT INTO `la_province` VALUES ('31', '西藏');
INSERT INTO `la_province` VALUES ('32', '澳门');
INSERT INTO `la_province` VALUES ('33', '香港');
