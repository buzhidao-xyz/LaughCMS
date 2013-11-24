/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50528
Source Host           : localhost:3306
Source Database       : soehi

Target Server Type    : MYSQL
Target Server Version : 50528
File Encoding         : 65001

Date: 2013-11-07 17:03:02
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `wx_media`
-- ----------------------------
DROP TABLE IF EXISTS `wx_media`;
CREATE TABLE `wx_media` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `path` varchar(200) NOT NULL COMMENT '媒体文件路径',
  `type` varchar(50) NOT NULL COMMENT '媒体文件类型 分别有图片（image）、语音（voice）、视频（video）和缩略图（thumb，主要用于视频与音乐格式的缩略图） ',
  `mediaid` varchar(100) NOT NULL COMMENT '媒体文件ID',
  `expiretime` int(10) NOT NULL DEFAULT '252000' COMMENT '过期时间 秒',
  `createtime` int(10) NOT NULL DEFAULT '0' COMMENT '时间戳',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of wx_media
-- ----------------------------
