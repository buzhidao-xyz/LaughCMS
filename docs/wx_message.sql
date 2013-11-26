/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : soehi

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2013-11-26 15:06:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `wx_message`
-- ----------------------------
DROP TABLE IF EXISTS `wx_message`;
CREATE TABLE `wx_message` (
  `messageid` int(10) NOT NULL AUTO_INCREMENT,
  `fromuser` varchar(50) NOT NULL COMMENT '发送者',
  `touser` varchar(50) NOT NULL COMMENT '接收者',
  `type` tinyint(1) DEFAULT '1' COMMENT '类型 1文本',
  `content` varchar(500) DEFAULT NULL,
  `createtime` int(10) NOT NULL DEFAULT '0' COMMENT '发送时间',
  PRIMARY KEY (`messageid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_message
-- ----------------------------
