/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : laugh

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2012-10-26 17:06:29
*/

SET FOREIGN_KEY_CHECKS=0;
-- ----------------------------
-- Table structure for `la_admin`
-- ----------------------------
DROP TABLE IF EXISTS `la_admin`;
CREATE TABLE `la_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `ukey` char(6) NOT NULL,
  `createtime` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `ustate` varchar(32) NOT NULL DEFAULT '',
  `permission` varchar(50) NOT NULL DEFAULT '0',
  `lastlogintime` int(11) DEFAULT NULL,
  `lastloginip` int(40) DEFAULT NULL,
  `logincount` tinyint(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_admin
-- ----------------------------
INSERT INTO `la_admin` VALUES ('1', 'admin', 'db03e4cae5bb7ae5046b97c9b1eaa2d3', null, null, null, 'gmk4r2', '1323910052', '1', '206423eb45af33c046db62575e2522b2', '1', '0', null, '0');
INSERT INTO `la_admin` VALUES ('2', 'luochuan', 'dfd154b410395ccac8cede2eb850667a', null, null, null, 'u1itx6', '1324265773', '1', 'a1cb0b77413638a2974af70f948e16d8', '1', '0', null, '0');
INSERT INTO `la_admin` VALUES ('3', 'test', 'a2907812388492fdf0f488bd5a3dc26d', null, null, null, '2fcy4o', '1325211617', '1', '', '0', '0', null, '0');

-- ----------------------------
-- Table structure for `la_admin_access`
-- ----------------------------
DROP TABLE IF EXISTS `la_admin_access`;
CREATE TABLE `la_admin_access` (
  `userid` int(10) NOT NULL,
  `nodeid` mediumint(6) NOT NULL,
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_admin_access
-- ----------------------------

-- ----------------------------
-- Table structure for `la_article`
-- ----------------------------
DROP TABLE IF EXISTS `la_article`;
CREATE TABLE `la_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) CHARACTER SET utf8 NOT NULL,
  `author` varchar(20) CHARACTER SET utf8 NOT NULL,
  `state` int(1) NOT NULL DEFAULT '1' COMMENT '文章状态 0:已删除 1:正常发布 2:草稿箱',
  `comment_state` int(1) NOT NULL DEFAULT '1' COMMENT '评论状态 0:禁止评论 1:允许评论',
  `comment_num` int(10) NOT NULL DEFAULT '0' COMMENT '评论数量',
  `publish_date` int(20) NOT NULL COMMENT '发布时间',
  `modify_date` int(20) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `catalog` (`author`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_article
-- ----------------------------

-- ----------------------------
-- Table structure for `la_article_class`
-- ----------------------------
DROP TABLE IF EXISTS `la_article_class`;
CREATE TABLE `la_article_class` (
  `id` int(10) NOT NULL,
  `article_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class` (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_article_class
-- ----------------------------

-- ----------------------------
-- Table structure for `la_article_comment`
-- ----------------------------
DROP TABLE IF EXISTS `la_article_comment`;
CREATE TABLE `la_article_comment` (
  `id` int(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `content` varchar(200) NOT NULL,
  `create_time` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_article_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `la_article_index`
-- ----------------------------
DROP TABLE IF EXISTS `la_article_index`;
CREATE TABLE `la_article_index` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `article_id` int(10) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `link` varchar(100) DEFAULT NULL COMMENT 'title链接地址',
  `sindex` text NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `fulltext` (`sindex`)
) ENGINE=MyISAM AUTO_INCREMENT=31 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_article_index
-- ----------------------------
INSERT INTO `la_article_index` VALUES ('1', '1', '        PHP中文分词算法及代码实现\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7298300', 'PHP 54484636 46362354 23542042 20424367 43672308 23082816 28162090 20903475 34754221 42214754');
INSERT INTO `la_article_index` VALUES ('2', '2', '\n        MySQL全文检索中文搜索\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7284016', 'MySQL 40114636 46362876 28764387 43875448 54484636 46364349 43494387');
INSERT INTO `la_article_index` VALUES ('3', '3', '\n        nginx负载均衡session共享解决方案\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7288171', 'nginx session 24265256 52563089 30892666 25184777 47772966 29663086 30862329 23291624');
INSERT INTO `la_article_index` VALUES ('4', '4', '\n        PHP安全基础学习与总结\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7276135', 'PHP 16184011 40112789 27892001 20014907 49074716 47165175 51755560 55602965');
INSERT INTO `la_article_index` VALUES ('5', '5', '\n        求24点表达式的php实现\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7258907', '24 php 3983 21671777 17772079 20794229 42292136 42214754');
INSERT INTO `la_article_index` VALUES ('6', '6', '\n        MAC OS下配置PHP的高效IDE - MACVIM\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7252299', 'MAC OS PHP IDE MACVIM 47343768 37685435 21362463 24634807');
INSERT INTO `la_article_index` VALUES ('7', '7', '\n        MACVIM的配置文件.gvimrc备份\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7252916', 'MACVIM gvimrc 21363768 37685435 54354636 46362894 17242361');
INSERT INTO `la_article_index` VALUES ('8', '8', '\n        vim代码颜色配置-PHP版\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7250163', 'vim PHP 20903475 34754953 49534111 41113768 37685435 1670');
INSERT INTO `la_article_index` VALUES ('9', '9', '\n        nginx+PHP服务器环境安装与配置学习（一） - windows系统基础环境搭建\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7244286', 'nginx PHP windows 23944681 46813887 38872723 27233019 30191618 16185516 55165175 51753768 37685435 54354907 49074716 5027 47214519 45192789 27892001 20012723 27233019 30192078 20782908');
INSERT INTO `la_article_index` VALUES ('10', '10', '\n        20个数据库设计值得遵循的规则\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7236728', '20 24864293 42933061 30613166 31664172 41722838 28385421 54212135 21355581 55814913 49132136 21362570 25705282');
INSERT INTO `la_article_index` VALUES ('11', '11', '\n        PHP的pack方法总结备忘\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7230853', 'PHP pack 2136 23292308 23085560 55602965 29651724 17244592');
INSERT INTO `la_article_index` VALUES ('12', '12', '\n        PHP中错误报告值参数及说明的查询备忘\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7220196', 'PHP 54482077 20774683 46831708 17082470 24705421 54211846 18464293 42932816 28164321 43213587 35872136 21361873 18734915 49151724 17244592');
INSERT INTO `la_article_index` VALUES ('13', '13', '\n        关于反向代理\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7217837', '25565158 51582320 23204782 47822090 20903277');
INSERT INTO `la_article_index` VALUES ('14', '14', '\n        HTML5新功能websocket的学习与备忘-PHP版（二）\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198624', '5 HTML websocket PHP 48342506 25063660 21364907 49074716 47165175 51751724 17244592 1670 2294');
INSERT INTO `la_article_index` VALUES ('15', '15', '\n        HTML5新功能websocket的学习与备忘-PHP版（一）\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198619', '5 HTML websocket PHP 48342506 25063660 21364907 49074716 47165175 51751724 17244592 1670 5027');
INSERT INTO `la_article_index` VALUES ('16', '16', '\n        每个程序员都该阅读的书【转载】\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198017', '35312486 24861944 19444882 48825217 52172228 22282435 24355236 52362233 22332136 21364273 55105256');
INSERT INTO `la_article_index` VALUES ('17', '17', '\n        为macos的php配置memcache\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198012', 'macos php memcache 4610 2136 37685435');
INSERT INTO `la_article_index` VALUES ('18', '18', '\n        为macos的php配置pdo_mysql扩展\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198007', 'macos php pdo mysql 4610 2136 37685435 _ 32095325');
INSERT INTO `la_article_index` VALUES ('19', '19', '\n        在Mac OS X中配置Apache ＋ PHP ＋ MySQL + PHPMYADMIN\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198002', 'Mac OS X Apache PHP MySQL PHPMYADMIN 5258 54483768 37685435 0311 0311');
INSERT INTO `la_article_index` VALUES ('20', '20', '\n        新浪微博技术架构演讲 - 网上转载\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198000', '48343243 32434602 46021809 18092828 28284285 42852860 28602525 25254961 49612918 45884147 41475510 55105256');
INSERT INTO `la_article_index` VALUES ('21', '21', '\n        vim、gvim在windows下中文乱码的解决方案\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197995', 'vim gvim windows 5258 47345448 54484636 46363450 34503475 34752136 21362966 29663086 30862329 23291624');
INSERT INTO `la_article_index` VALUES ('22', '22', '\n        redis的介绍与使用(二) - 测试命令\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197993', 'redis 21362973 29734160 41605175 51754225 42255135 2294 18664252 42523592 35923378');
INSERT INTO `la_article_index` VALUES ('23', '23', '\n        redis的介绍与使用(一) - benchmark等\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197982', 'redis benchmark 21362973 29734160 41605175 51754225 42255135 5027 2140');
INSERT INTO `la_article_index` VALUES ('24', '24', '\n        MACOS系统中查看隐藏文件\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197965', 'MACOS 47214519 45195448 54481873 18733120 31205094 50941856 18564636 46362894');
INSERT INTO `la_article_index` VALUES ('25', '25', '\n        关于MEMCACHE的学习与备忘(二)\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197962', 'MEMCACHE 25565158 21364907 49074716 47165175 51751724 17244592 2294');
INSERT INTO `la_article_index` VALUES ('26', '26', '\n        关于MEMCACHE的学习与备忘(一)\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197952', 'MEMCACHE 25565158 21364907 49074716 47165175 51751724 17244592 5027');
INSERT INTO `la_article_index` VALUES ('27', '27', '\n        用xdebug分析PHP以及结果分析程序webgrind的使用\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197943', 'xdebug PHP webgrind 5135 23544686 50522816 28162965 29652591 25912354 23544686 46861944 19444882 21364225 42255135');
INSERT INTO `la_article_index` VALUES ('28', '28', '\n        ApacheBench(ab)测试工具介绍 - 备忘与学习\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197929', 'ApacheBench ab 18664252 42522504 25043063 30632973 29734160 17244592 45925175 51754907 49074716');
INSERT INTO `la_article_index` VALUES ('29', '29', '\n        关于PHP的static(静态)变量\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197891', 'PHP static 25565158 2136 30184412 17683331');
INSERT INTO `la_article_index` VALUES ('30', '30', '\n        仿googletoolbar导航菜单\r\n        ', 'http://blog.csdn.net/luochuan/article/details/3634825', 'googletoolbar 2334 21282629 26291843 18432105');

-- ----------------------------
-- Table structure for `la_article_tag`
-- ----------------------------
DROP TABLE IF EXISTS `la_article_tag`;
CREATE TABLE `la_article_tag` (
  `id` int(10) NOT NULL,
  `article_id` int(10) NOT NULL,
  `tag_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `article` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_article_tag
-- ----------------------------

-- ----------------------------
-- Table structure for `la_class`
-- ----------------------------
DROP TABLE IF EXISTS `la_class`;
CREATE TABLE `la_class` (
  `id` int(10) NOT NULL,
  `class` varchar(15) NOT NULL,
  `create_time` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class` (`class`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_class
-- ----------------------------

-- ----------------------------
-- Table structure for `la_group`
-- ----------------------------
DROP TABLE IF EXISTS `la_group`;
CREATE TABLE `la_group` (
  `id` smallint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `createtime` int(11) unsigned NOT NULL,
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0',
  `sort` smallint(3) NOT NULL,
  `isshow` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_group
-- ----------------------------
INSERT INTO `la_group` VALUES ('1', '系统管理', '1332390538', '1332390538', '1', '1');
INSERT INTO `la_group` VALUES ('2', '用户中心', '1332390538', '1332390538', '2', '1');
INSERT INTO `la_group` VALUES ('3', '文章管理', '1332390538', '1332390538', '3', '1');
INSERT INTO `la_group` VALUES ('4', '网站设置', '1332390538', '1332390538', '4', '1');
INSERT INTO `la_group` VALUES ('5', '系统工具', '1332390538', '1332390538', '5', '1');

-- ----------------------------
-- Table structure for `la_node`
-- ----------------------------
DROP TABLE IF EXISTS `la_node`;
CREATE TABLE `la_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `control` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `sort` int(5) unsigned DEFAULT '0',
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `groupid` tinyint(3) unsigned DEFAULT '0',
  `createtime` int(10) NOT NULL,
  `updatetime` int(10) NOT NULL,
  `isshow` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_node
-- ----------------------------
INSERT INTO `la_node` VALUES ('1', '注册与访问控制', '注册与访问控制 管理注册与访客的信息', '', '', '1', '0', '1', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('2', '角色管理', '管理角色信息 可编辑角色权限/改变用户的角色', '', '', '2', '0', '1', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('3', '日志管理', '日志模块', '', '', '3', '0', '1', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('4', '组管理', '节点组管理', '', '', '4', '0', '1', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('5', '节点管理', '管理模块下的节点信息', '', '', '5', '0', '1', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('6', '管理员用户管理', '管理员账号管理中心', '', '', '6', '0', '1', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('7', '用户搜索', '搜索用户信息', '', '', '1', '0', '1', '2', '0', '0', '1');
INSERT INTO `la_node` VALUES ('8', '管理组', '', 'Group', 'manageGroup', '2', '4', '2', '0', '0', '0', '1');
INSERT INTO `la_node` VALUES ('9', '添加节点', null, 'Node', 'newNode', '1', '5', '0', '0', '0', '0', '1');
INSERT INTO `la_node` VALUES ('10', '管理节点', null, 'Node', 'manageNode', '2', '5', '0', '0', '0', '0', '1');

-- ----------------------------
-- Table structure for `la_role`
-- ----------------------------
DROP TABLE IF EXISTS `la_role`;
CREATE TABLE `la_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `pid` smallint(6) DEFAULT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `parentId` (`pid`),
  KEY `status` (`status`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_role
-- ----------------------------
INSERT INTO `la_role` VALUES ('1', '超级管理员', '0', '1', '超级管理员 具有全站管理权限', '1332391671', '1332391671');
INSERT INTO `la_role` VALUES ('2', '管理员', '0', '1', '普通管理员 管理某些模块', '1332391671', '1332391671');
INSERT INTO `la_role` VALUES ('3', '普通用户', '0', '1', '普通用户', '1332391671', '1332391671');

-- ----------------------------
-- Table structure for `la_role_node`
-- ----------------------------
DROP TABLE IF EXISTS `la_role_node`;
CREATE TABLE `la_role_node` (
  `roleid` smallint(6) unsigned NOT NULL,
  `nodeid` smallint(6) unsigned NOT NULL,
  KEY `groupId` (`roleid`),
  KEY `nodeId` (`nodeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_role_node
-- ----------------------------
INSERT INTO `la_role_node` VALUES ('1', '1');
INSERT INTO `la_role_node` VALUES ('1', '2');
INSERT INTO `la_role_node` VALUES ('1', '3');
INSERT INTO `la_role_node` VALUES ('1', '4');
INSERT INTO `la_role_node` VALUES ('1', '5');
INSERT INTO `la_role_node` VALUES ('2', '5');

-- ----------------------------
-- Table structure for `la_role_user`
-- ----------------------------
DROP TABLE IF EXISTS `la_role_user`;
CREATE TABLE `la_role_user` (
  `roleid` smallint(6) NOT NULL,
  `userid` int(11) NOT NULL,
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_role_user
-- ----------------------------
INSERT INTO `la_role_user` VALUES ('1', '1');
INSERT INTO `la_role_user` VALUES ('2', '1');
INSERT INTO `la_role_user` VALUES ('3', '3');

-- ----------------------------
-- Table structure for `la_system`
-- ----------------------------
DROP TABLE IF EXISTS `la_system`;
CREATE TABLE `la_system` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'primarykey',
  `cfgname` varchar(30) NOT NULL,
  `cfginfo` varchar(50) NOT NULL,
  `cfggroupid` int(1) DEFAULT NULL,
  `cfgtype` varchar(20) DEFAULT NULL,
  `cfgvalue` varchar(500) NOT NULL,
  `cfgtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_system
-- ----------------------------
INSERT INTO `la_system` VALUES ('1', 'host', '网站地址', '1', 'string', 'http://localhost/laugh', '0');
INSERT INTO `la_system` VALUES ('2', 'name', '网站名称', '1', 'string', 'laugh', '0');
INSERT INTO `la_system` VALUES ('3', 'keywords', '网站关键字', '1', 'string', '步知道', '0');
INSERT INTO `la_system` VALUES ('4', 'style', '网站theme', '1', 'string', 'default', '0');
INSERT INTO `la_system` VALUES ('5', 'admin_style', '管理中心theme', '2', 'string', 'default', '0');
INSERT INTO `la_system` VALUES ('6', 'admin_path', '管理中心路径', '1', 'string', 'admin', '0');

-- ----------------------------
-- Table structure for `la_tag`
-- ----------------------------
DROP TABLE IF EXISTS `la_tag`;
CREATE TABLE `la_tag` (
  `id` int(10) NOT NULL,
  `tag` varchar(10) NOT NULL,
  `create_time` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_tag
-- ----------------------------

-- ----------------------------
-- Table structure for `la_user`
-- ----------------------------
DROP TABLE IF EXISTS `la_user`;
CREATE TABLE `la_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nickname` varchar(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `ukey` char(6) NOT NULL,
  `createtime` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `ustate` varchar(32) NOT NULL DEFAULT '',
  `permission` varchar(50) NOT NULL DEFAULT '0',
  `lastlogintime` int(11) DEFAULT NULL,
  `lastloginip` int(40) DEFAULT NULL,
  `logincount` tinyint(5) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_user
-- ----------------------------
INSERT INTO `la_user` VALUES ('1', 'admin', 'db03e4cae5bb7ae5046b97c9b1eaa2d3', null, null, null, 'gmk4r2', '1323910052', '1', '206423eb45af33c046db62575e2522b2', '1', '0', null, '0');
INSERT INTO `la_user` VALUES ('2', 'luochuan', 'dfd154b410395ccac8cede2eb850667a', null, null, null, 'u1itx6', '1324265773', '1', 'a1cb0b77413638a2974af70f948e16d8', '1', '0', null, '0');
INSERT INTO `la_user` VALUES ('3', 'test', 'a2907812388492fdf0f488bd5a3dc26d', null, null, null, '2fcy4o', '1325211617', '1', '', '0', '0', null, '0');
