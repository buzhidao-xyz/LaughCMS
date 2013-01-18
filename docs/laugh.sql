/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : laugh

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2013-01-18 17:38:33
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
  `ukey` char(6) NOT NULL,
  `createtime` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  `ustate` varchar(32) NOT NULL DEFAULT '',
  `lastlogintime` int(10) DEFAULT NULL,
  `lastloginip` int(11) DEFAULT NULL,
  `logincount` tinyint(6) NOT NULL,
  `super` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_admin
-- ----------------------------
INSERT INTO `la_admin` VALUES ('1', 'admin', '206423eb45af33c046db62575e2522b2', 'gmk4r2', '1323910052', '1', '206423eb45af33c046db62575e2522b2', '1358406147', '2130706433', '91', '1');
INSERT INTO `la_admin` VALUES ('2', 'luochuan', '624879b3fff70462132a21eb1cd8eb75', 'u1itx6', '1324265773', '1', 'a1cb0b77413638a2974af70f948e16d8', '1355368421', '2130706433', '12', '0');

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
  `title` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '文档标题',
  `author` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '文档作者',
  `columnid` int(10) NOT NULL,
  `thumbimage` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '文章缩略图',
  `tag` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `source` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seotitle` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '文章状态 0:回收站 1:正常发布 2:草稿箱',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '评论状态 0:禁止评论 1:允许评论',
  `clicknum` int(6) DEFAULT '0',
  `commentnum` int(6) DEFAULT '0',
  `publishtime` int(10) DEFAULT NULL COMMENT '发布时间',
  `updatetime` int(10) DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `catalog` (`author`) USING BTREE
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_article
-- ----------------------------
INSERT INTO `la_article` VALUES ('1', '这是一篇测试文章', 'admin', '1', null, '测试,文章', '', '', '', '', '1', '1', '0', '0', '1357699990', '1357699990');
INSERT INTO `la_article` VALUES ('2', '第二篇测试文章', 'admin', '2', null, '文章', '', '', '', '', '1', '1', '0', '0', '2013', '1357701202');

-- ----------------------------
-- Table structure for `la_article_index`
-- ----------------------------
DROP TABLE IF EXISTS `la_article_index`;
CREATE TABLE `la_article_index` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `articleid` int(10) NOT NULL COMMENT '文档ID',
  `content` mediumtext COMMENT '文档内容',
  `updatetime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_article_index
-- ----------------------------
INSERT INTO `la_article_index` VALUES ('1', '1', '&lt;p&gt;&lt;br /&gt;&lt;img src=&quot;/Uploads/Image/201212/25/1356405476_fzagmz_6513.jpg&quot; /&gt;&lt;/p&gt;&lt;p&gt;测试文章&lt;br /&gt;&lt;/p&gt;', '1357699990');
INSERT INTO `la_article_index` VALUES ('2', '2', '&lt;p&gt;开篇 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　确认框，顾名思义，就是对用户的关键行为进行确认。比如在Windows操作系统中，删除某个文件的时候，都会询问&ldquo;确实要把此文件放入回收站吗?&rdquo;，用户可以选择&ldquo;是&rdquo;或&ldquo;否&rdquo;。 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　大家对于确认框的感觉大抵如此，觉得非常多余，打断了我的操作。这就像我着急上厕所，却被告知要先收费一样让人不爽。不能否认，确认框是一种打断，有时甚至是打扰。 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　所以这里要把握住一个原则：能不用确认框就尽量不要用。除非用户的操作具有很大的风险，一定需要他来确认一下。 &lt;/p&gt;&lt;p&gt;　　&lt;strong&gt;确认在左，取消在右?&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　根据windows多年培养的用户习惯，大家都已经默认一个原则，就是确认在左，取消在右。但是，这样做是否真的合理呢?我们今天就来探讨一下这个问题。 &lt;span style=&quot;color:#ffffff;&quot;&gt;一些事&lt;/span&gt;&lt;/p&gt;&lt;p&gt;　　如果不是误操作，相信用户做事情前都是经过了一定思考。所以当弹出确认框的时候，我们猜测大部分用户都会去选择&ldquo;确认&rdquo;/&rdquo;是&rdquo;，继续之前的操作。之后本文的探讨，都讲建立在这样一种假设的基础上，即用户是想去选择&ldquo;确认&rdquo;/&rdquo;是&rdquo;。 &lt;/p&gt;&lt;p&gt;　　&lt;strong&gt;以视觉流的角度分析&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　如果将&ldquo;确认&rdquo;放在左边，&ldquo;取消&rdquo;放在右边。 &lt;/p&gt;&lt;p&gt; 　　我们相信大部分用户在决定采取哪一个操作之前，都会把所有可以选择的操作都看一遍，以免做出错误的操作(当然不排除会有专家级用户 选择只看自己想进行的操作)。根据从左到右的阅读习惯，用户会首先看到左侧的&ldquo;确认&rdquo;，然后看一下在它旁边的&ldquo;取消&rdquo;，了解到所有可以进行的操作后，再回到&ldquo;确认&rdquo;按钮上，最后点击。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', '1357701202');

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
-- Table structure for `la_column`
-- ----------------------------
DROP TABLE IF EXISTS `la_column`;
CREATE TABLE `la_column` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `columnname` varchar(50) NOT NULL,
  `parentid` int(11) NOT NULL DEFAULT '0',
  `topid` int(11) NOT NULL,
  `columntype` tinyint(1) DEFAULT '1' COMMENT '栏目类型123',
  `columnmodel` int(3) DEFAULT NULL COMMENT '栏目内容模型',
  `columnpath` varchar(100) DEFAULT NULL,
  `sortrank` int(4) NOT NULL DEFAULT '0' COMMENT '排序位置',
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `keyword` varchar(1000) DEFAULT NULL COMMENT '关键字',
  `description` varchar(3000) DEFAULT NULL COMMENT '描述',
  `content` text,
  `isshow` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0隐藏1显示',
  `createtime` int(10) NOT NULL,
  `updatetime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_column
-- ----------------------------
INSERT INTO `la_column` VALUES ('1', '栏目1', '0', '0', '1', null, null, '1', '栏目1', '', '', '&lt;p&gt;栏目一&lt;strong&gt;&lt;img src=&quot;/Uploads/Scrawl/201212/25/1356406180_tkbjyl_4121.png&quot; /&gt;&lt;/strong&gt;内容&lt;br /&gt;&lt;/p&gt;', '1', '1356402068', '1358325807');
INSERT INTO `la_column` VALUES ('2', '子栏目1', '1', '1', '1', null, null, '1', '', '', '', '&lt;p&gt;子栏目1&lt;br /&gt;&lt;/p&gt;', '1', '1356405490', '1358325833');
INSERT INTO `la_column` VALUES ('3', '子子栏目1', '2', '1', '1', null, null, '1', '', '', '', '&lt;p&gt;子子&lt;strong&gt;&lt;img src=&quot;/Uploads/Scrawl/201212/25/1356406180_tkbjyl_4121.png&quot; /&gt;&lt;/strong&gt;&lt;br /&gt;&lt;/p&gt;', '1', '1356406231', '1356406231');
INSERT INTO `la_column` VALUES ('4', '栏目2', '0', '0', '1', null, null, '2', '', '', '', '&lt;p&gt;栏目2&lt;br /&gt;&lt;/p&gt;', '1', '1356414942', '1356414942');

-- ----------------------------
-- Table structure for `la_comment`
-- ----------------------------
DROP TABLE IF EXISTS `la_comment`;
CREATE TABLE `la_comment` (
  `id` int(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `content` varchar(200) NOT NULL,
  `createtime` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_comment
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
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_group
-- ----------------------------
INSERT INTO `la_group` VALUES ('1', '系统管理', '1332390538', '1332390538', '1', '1');
INSERT INTO `la_group` VALUES ('2', '用户中心', '1332390538', '1332390538', '2', '1');
INSERT INTO `la_group` VALUES ('3', '核心内容', '1332390538', '1332390538', '3', '1');
INSERT INTO `la_group` VALUES ('4', '网站更新', '1332390538', '1332390538', '4', '1');
INSERT INTO `la_group` VALUES ('5', '系统插件', '1332390538', '1332390538', '5', '1');
INSERT INTO `la_group` VALUES ('6', '系统设置', '1353316335', '0', '0', '1');

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
  `level` tinyint(1) unsigned DEFAULT NULL,
  `groupid` tinyint(3) unsigned DEFAULT '0',
  `createtime` int(10) NOT NULL,
  `updatetime` int(10) NOT NULL,
  `isshow` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_node
-- ----------------------------
INSERT INTO `la_node` VALUES ('2', '角色管理', '管理角色信息 可编辑角色权限/改变用户的角色', '', '', '2', '0', '1', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('3', '日志管理', '日志模块', '', '', '3', '0', '1', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('4', '组管理', '节点组管理', '', '', '4', '0', '1', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('5', '节点管理', '管理模块下的节点信息', '', '', '5', '0', '1', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('6', '管理员用户管理', '管理员账号管理中心', '', '', '6', '0', '1', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('7', '用户搜索', '搜索用户信息', '', '', '1', '0', '1', '2', '0', '0', '1');
INSERT INTO `la_node` VALUES ('8', '管理组', '', 'Group', 'manageGroup', '2', '4', '2', '0', '0', '0', '1');
INSERT INTO `la_node` VALUES ('9', '添加节点', null, 'Node', 'newNode', '1', '5', '0', '0', '0', '0', '1');
INSERT INTO `la_node` VALUES ('10', '管理节点', '', 'Node', 'manageNode', '0', '5', '0', '0', '1352711650', '0', '1');
INSERT INTO `la_node` VALUES ('11', '添加角色', '', 'Role', 'newRole', '0', '2', '0', '0', '1352856214', '0', '1');
INSERT INTO `la_node` VALUES ('12', '管理角色', '', 'Role', 'manageRole', '0', '2', '0', '0', '1352856238', '0', '1');
INSERT INTO `la_node` VALUES ('13', '日志列表', '', 'Log', 'Index', '0', '3', '0', '0', '1352857554', '0', '1');
INSERT INTO `la_node` VALUES ('14', '新管理员', '', 'Admin', 'newAdmin', '0', '6', '0', '0', '1352858914', '0', '1');
INSERT INTO `la_node` VALUES ('15', '管理员列表', '', 'Admin', 'adminList', '0', '6', '0', '0', '1352944271', '0', '1');
INSERT INTO `la_node` VALUES ('16', '栏目管理', '管理网站栏目', '', '', '0', '0', '0', '3', '1353313113', '0', '1');
INSERT INTO `la_node` VALUES ('17', '添加栏目', '', 'Column', 'newColumn', '0', '16', '0', '0', '1353313186', '0', '1');
INSERT INTO `la_node` VALUES ('18', '文档管理', '', '', '', '0', '0', '0', '3', '1353316137', '0', '1');
INSERT INTO `la_node` VALUES ('19', '发布新文档', '', 'Article', 'newArticle', '0', '18', '0', '0', '1353316212', '0', '1');
INSERT INTO `la_node` VALUES ('20', '自动更新', '', '', '', '0', '0', '0', '4', '1353316369', '0', '1');
INSERT INTO `la_node` VALUES ('21', '一键更新网站', '', 'Make', 'makeHtml', '0', '20', '0', '0', '1353316415', '0', '1');
INSERT INTO `la_node` VALUES ('22', '更新系统缓存', '', 'System', 'upSystemCache', '0', '20', '0', '0', '1353316474', '0', '1');
INSERT INTO `la_node` VALUES ('25', '基本设置', '', '', '', '0', '0', '0', '6', '1353316554', '0', '1');
INSERT INTO `la_node` VALUES ('26', '数据库', '', '', '', '0', '0', '0', '6', '1353316597', '0', '1');
INSERT INTO `la_node` VALUES ('23', '辅助插件', '', '', '', '0', '0', '0', '5', '1353316622', '0', '1');
INSERT INTO `la_node` VALUES ('24', '文件管理器', '', 'Plugin', 'fileManage', '0', '23', '0', '0', '1353316736', '0', '1');
INSERT INTO `la_node` VALUES ('27', '网站栏目', '', 'Column', 'index', '0', '16', null, '0', '1355898117', '1355898117', '1');
INSERT INTO `la_node` VALUES ('28', '文档列表', '', 'Article', 'index', '0', '18', null, '0', '1356507108', '1356507108', '1');
INSERT INTO `la_node` VALUES ('29', '回收站', '文档回收站', 'Article', 'recover', '0', '18', null, '0', '1357722182', '1357722182', '1');

-- ----------------------------
-- Table structure for `la_role`
-- ----------------------------
DROP TABLE IF EXISTS `la_role`;
CREATE TABLE `la_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) unsigned DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_role
-- ----------------------------
INSERT INTO `la_role` VALUES ('1', '总管理员', '1', '总管理员 具有大部分管理权限', '1332391671', '1355303602');
INSERT INTO `la_role` VALUES ('2', '管理员', '1', '普通管理员 管理某些模块', '1332391671', '1355303868');

-- ----------------------------
-- Table structure for `la_role_admin`
-- ----------------------------
DROP TABLE IF EXISTS `la_role_admin`;
CREATE TABLE `la_role_admin` (
  `roleid` smallint(6) NOT NULL,
  `adminid` int(11) NOT NULL,
  KEY `userid` (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_role_admin
-- ----------------------------
INSERT INTO `la_role_admin` VALUES ('1', '3');
INSERT INTO `la_role_admin` VALUES ('2', '3');
INSERT INTO `la_role_admin` VALUES ('1', '2');
INSERT INTO `la_role_admin` VALUES ('2', '2');

-- ----------------------------
-- Table structure for `la_role_node`
-- ----------------------------
DROP TABLE IF EXISTS `la_role_node`;
CREATE TABLE `la_role_node` (
  `roleid` smallint(6) unsigned NOT NULL,
  `nodeid` smallint(6) unsigned NOT NULL,
  `access` tinyint(4) DEFAULT '0',
  KEY `groupId` (`roleid`),
  KEY `nodeId` (`nodeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_role_node
-- ----------------------------
INSERT INTO `la_role_node` VALUES ('2', '12', '1');
INSERT INTO `la_role_node` VALUES ('2', '2', '1');
INSERT INTO `la_role_node` VALUES ('1', '15', '1');
INSERT INTO `la_role_node` VALUES ('1', '14', '1');
INSERT INTO `la_role_node` VALUES ('1', '6', '1');
INSERT INTO `la_role_node` VALUES ('1', '10', '0');
INSERT INTO `la_role_node` VALUES ('1', '9', '0');
INSERT INTO `la_role_node` VALUES ('1', '5', '0');
INSERT INTO `la_role_node` VALUES ('1', '8', '0');
INSERT INTO `la_role_node` VALUES ('1', '4', '1');
INSERT INTO `la_role_node` VALUES ('1', '12', '0');
INSERT INTO `la_role_node` VALUES ('1', '2', '1');

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
  `urank` varchar(50) NOT NULL DEFAULT '0',
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
