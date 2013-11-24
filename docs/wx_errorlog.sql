/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : soehi

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2013-11-06 18:17:05
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `wx_errorlog`
-- ----------------------------
DROP TABLE IF EXISTS `wx_errorlog`;
CREATE TABLE `wx_errorlog` (
  `logid` int(10) NOT NULL AUTO_INCREMENT COMMENT '日志ID 自增',
  `errcode` varchar(10) NOT NULL COMMENT '错误码',
  `errormsg` varchar(20) DEFAULT NULL COMMENT '错误信息',
  `explain` varchar(200) DEFAULT NULL COMMENT '错误码说明',
  `logtime` int(10) DEFAULT '0' COMMENT '日志时间',
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_errorlog
-- ----------------------------
