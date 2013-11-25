/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50530
Source Host           : localhost:3306
Source Database       : laugh

Target Server Type    : MYSQL
Target Server Version : 50530
File Encoding         : 65001

Date: 2013-11-25 23:47:16
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `la_admin`
-- ----------------------------
DROP TABLE IF EXISTS `la_admin`;
CREATE TABLE `la_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `ukey` char(6) NOT NULL COMMENT '混淆加密字符串6位',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否启用',
  `ustate` varchar(32) NOT NULL DEFAULT '' COMMENT '登录状态码',
  `lastlogintime` int(10) DEFAULT '0',
  `lastloginip` int(11) DEFAULT '0',
  `logincount` tinyint(6) NOT NULL DEFAULT '0',
  `super` tinyint(1) DEFAULT '0' COMMENT '是否超级管理员0否1是',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `updatetime` int(10) DEFAULT '0' COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`adminname`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_admin
-- ----------------------------
INSERT INTO `la_admin` VALUES ('1', 'admin', '206423eb45af33c046db62575e2522b2', 'gmk4r2', '1', '206423eb45af33c046db62575e2522b2', '1368775182', '2130706433', '127', '1', '1323910052', '1381052443');

-- ----------------------------
-- Table structure for `la_adminloginlog`
-- ----------------------------
DROP TABLE IF EXISTS `la_adminloginlog`;
CREATE TABLE `la_adminloginlog` (
  `logid` int(10) NOT NULL AUTO_INCREMENT,
  `adminname` varchar(20) NOT NULL,
  `loginip` bigint(15) DEFAULT NULL,
  `logintime` int(10) DEFAULT NULL,
  PRIMARY KEY (`logid`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_adminloginlog
-- ----------------------------
INSERT INTO `la_adminloginlog` VALUES ('1', 'admin', '0', '1381906598');
INSERT INTO `la_adminloginlog` VALUES ('2', 'admin', '0', '1382233905');
INSERT INTO `la_adminloginlog` VALUES ('3', 'admin', '0', '1382271602');
INSERT INTO `la_adminloginlog` VALUES ('4', 'admin', '0', '1385286259');
INSERT INTO `la_adminloginlog` VALUES ('5', 'admin', '0', '1385394361');

-- ----------------------------
-- Table structure for `la_admin_access`
-- ----------------------------
DROP TABLE IF EXISTS `la_admin_access`;
CREATE TABLE `la_admin_access` (
  `adminid` int(10) NOT NULL DEFAULT '0',
  `nodeid` mediumint(6) NOT NULL DEFAULT '0',
  KEY `userid` (`adminid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_admin_access
-- ----------------------------

-- ----------------------------
-- Table structure for `la_advertise`
-- ----------------------------
DROP TABLE IF EXISTS `la_advertise`;
CREATE TABLE `la_advertise` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `path` varchar(100) DEFAULT NULL COMMENT '图片路径',
  `flag` tinyint(1) DEFAULT '0' COMMENT '1:首页中部banner 2:栏目顶部广告',
  `status` tinyint(1) DEFAULT '1' COMMENT '0:禁用1:启用',
  `createtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_advertise
-- ----------------------------
INSERT INTO `la_advertise` VALUES ('1', '1', '#', '/uploads/AdImage/1381906677_6kn443_3809_1368168836_w2hsg2_8994_ad_banner2.png', '1', '1', '1381906677');
INSERT INTO `la_advertise` VALUES ('2', '1', '#', '/uploads/AdImage/1381906690_dgrwc8_9888_1368168836_w2hsg2_8994_ad_banner2.png', '2', '1', '1381906690');

-- ----------------------------
-- Table structure for `la_archive`
-- ----------------------------
DROP TABLE IF EXISTS `la_archive`;
CREATE TABLE `la_archive` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '文档标题',
  `author` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '文档作者',
  `columnid` int(10) NOT NULL DEFAULT '0' COMMENT '栏目ID',
  `thumbimage` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '文章缩略图',
  `tag` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `source` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seotitle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `keyword` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '文章状态 0:回收站 1:正常发布 2:草稿箱',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '评论状态 0:禁止评论 1:允许评论',
  `clicknum` int(6) DEFAULT '0' COMMENT '点击数',
  `commentnum` int(6) DEFAULT '0' COMMENT '评论数',
  `publishtime` int(10) DEFAULT '0' COMMENT '发布时间',
  `updatetime` int(10) DEFAULT '0' COMMENT '修改时间',
  PRIMARY KEY (`id`),
  KEY `catalog` (`author`) USING BTREE
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_archive
-- ----------------------------

-- ----------------------------
-- Table structure for `la_article`
-- ----------------------------
DROP TABLE IF EXISTS `la_article`;
CREATE TABLE `la_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `archiveid` int(10) NOT NULL DEFAULT '0' COMMENT '文档ID',
  `content` longtext COMMENT '文档内容',
  `updatetime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_article
-- ----------------------------

-- ----------------------------
-- Table structure for `la_attachment`
-- ----------------------------
DROP TABLE IF EXISTS `la_attachment`;
CREATE TABLE `la_attachment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `archiveid` int(10) NOT NULL DEFAULT '0' COMMENT '文档ID',
  `filepath` varchar(100) NOT NULL COMMENT '文件路径',
  `filename` varchar(100) NOT NULL COMMENT '原文件名',
  `savename` varchar(100) DEFAULT NULL COMMENT '文件保存名称',
  `filesize` int(10) NOT NULL DEFAULT '0' COMMENT '附件大小',
  `filetype` varchar(20) DEFAULT NULL COMMENT '文件类型(后缀名)',
  `downloadnum` int(10) NOT NULL DEFAULT '0' COMMENT '下载次数',
  `createtime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_attachment
-- ----------------------------

-- ----------------------------
-- Table structure for `la_class`
-- ----------------------------
DROP TABLE IF EXISTS `la_class`;
CREATE TABLE `la_class` (
  `id` int(10) NOT NULL,
  `classname` varchar(15) NOT NULL,
  `createtime` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `class` (`classname`)
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
  `parentid` int(11) DEFAULT '0',
  `topid` int(11) NOT NULL DEFAULT '0',
  `columntype` tinyint(1) DEFAULT '1' COMMENT '栏目类型123',
  `columnmodel` int(3) DEFAULT '1' COMMENT '栏目内容模型',
  `columnpath` varchar(100) DEFAULT NULL,
  `action` varchar(50) DEFAULT NULL,
  `sortrank` int(4) DEFAULT '0' COMMENT '排序位置',
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `keyword` varchar(1000) DEFAULT NULL COMMENT '关键字',
  `description` varchar(3000) DEFAULT NULL COMMENT '描述',
  `content` text,
  `template_index` varchar(50) DEFAULT NULL,
  `template_list` varchar(50) DEFAULT NULL,
  `template_body` varchar(50) DEFAULT NULL,
  `isshow` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0隐藏1显示',
  `createtime` int(10) NOT NULL DEFAULT '0',
  `updatetime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_column
-- ----------------------------
INSERT INTO `la_column` VALUES ('1', '网站首页', '0', '1', '1', '0', null, 'index', '1', 'Laugh CMS 内容管理系统', '', '', '', null, null, null, '1', '1356402068', '1367060209');
INSERT INTO `la_column` VALUES ('2', '新闻资讯', '0', '2', '2', '1', null, 'lists', '2', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1356405490', '1368947565');
INSERT INTO `la_column` VALUES ('3', 'IT知识', '2', '2', '2', '1', null, 'lists', '1', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1356406231', '1363856604');
INSERT INTO `la_column` VALUES ('4', '网络知识', '2', '2', '2', '1', null, 'lists', '2', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1356414942', '1363856617');
INSERT INTO `la_column` VALUES ('5', '前端知识', '4', '2', '2', '1', null, 'lists', '1', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1359689764', '1363856760');
INSERT INTO `la_column` VALUES ('6', '产品展示', '0', '6', '2', '6', null, 'lists', '3', '', '', '', '', 'Product/index.html', 'Product/list.html', 'Product/body.html', '1', '1359690256', '1359690256');
INSERT INTO `la_column` VALUES ('7', '客户案例', '0', '7', '2', '2', null, 'lists', '4', '', '', '', '', 'Image/index.html', 'Image/list.html', 'Image/body.html', '1', '1359690270', '1359690270');
INSERT INTO `la_column` VALUES ('8', '下载中心', '0', '8', '2', '3', null, 'lists', '5', '', '', '', '', 'Download/index.html', 'Download/list.html', 'Download/body.html', '1', '1359690280', '1359690280');
INSERT INTO `la_column` VALUES ('9', '招贤纳士', '0', '9', '1', '9', null, 'Cooperate', '6', '', '', '', '', null, null, null, '1', '1359690294', '1365668528');
INSERT INTO `la_column` VALUES ('10', '关于我们', '0', '10', '1', '8', null, 'index', '7', '', '', '', '&lt;p style=&quot;line-height:1.5em;&quot;&gt;&lt;span class=&quot;text&quot;&gt;&lt;span style=&quot;font-size:13px;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; LaughCMS企业网站管理系统，是一款代码完全开源免费的PHP+MYSQL系统。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;span class=&quot;text&quot;&gt;&lt;span style=&quot;font-size:13px;&quot;&gt;&lt;/span&gt;&lt;/span&gt;&lt;span class=&quot;text&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;line-height:1.5em;&quot;&gt;&lt;span style=&quot;font-size:13px;&quot; class=&quot;text&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; 程序内置SEO优化机制，使企业网站更容易被推广。拥有企业网站常用的模块功能（企业简介模块、新闻模块、产品模块、下载模块、图片模块、招聘模块、在线留言、友情链接、会员与权限管理）。强大灵活的后台管理功能、静态页面生成功能、自定义模型功能、自制插件安装管理功能等可为企业打造出大气漂亮且具有营销力的精品网站&lt;/span&gt;&lt;span style=&quot;font-size:13px;&quot;&gt;。&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', 'Public/aboutus.html', 'Public/list.html', 'Public/body.html', '1', '1359690307', '1367915449');
INSERT INTO `la_column` VALUES ('11', '联系我们', '0', '11', '1', '8', null, 'index', '8', '', '', '', '&lt;p style=&quot;line-height:1.5em;&quot;&gt;电 话: XXXXXXXX&lt;br /&gt;邮 编: XXXXXXXX&lt;br /&gt;网 址: www.xxx.com&lt;br /&gt;Email: admin@admin.com&lt;br /&gt;联系地址: 江苏省苏州市工业园区若水路1号&lt;br /&gt;联系人: XXX&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;color:#E36C09;&quot;&gt;Laugh CMS 软件科技公司&lt;/span&gt;&lt;/strong&gt;&lt;/p&gt;', 'Public/contactus.html', 'Public/list.html', 'Public/body.html', '1', '1359690316', '1367915430');
INSERT INTO `la_column` VALUES ('12', 'PHP知识', '3', '2', '2', '1', null, 'lists', '1', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1364262577', '1364262577');
INSERT INTO `la_column` VALUES ('13', '数据库知识', '2', '2', '2', '1', null, 'lists', '1', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1364452588', '1364452588');
INSERT INTO `la_column` VALUES ('14', '网络产品', '6', '6', '2', '6', null, 'lists', '1', '', '', '', '', 'Product/index.html', 'Product/list.html', 'Product/body.html', '1', '1364804231', '1364960571');
INSERT INTO `la_column` VALUES ('15', '电子产品', '6', '6', '2', '6', null, 'lists', '1', '', '', '', '', 'Product/index.html', 'Product/list.html', 'Product/body.html', '1', '1364894217', '1364960612');

-- ----------------------------
-- Table structure for `la_column_model`
-- ----------------------------
DROP TABLE IF EXISTS `la_column_model`;
CREATE TABLE `la_column_model` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `description` varchar(200) DEFAULT NULL,
  `type` tinyint(1) DEFAULT '0',
  `issystem` tinyint(1) DEFAULT '0',
  `table` varchar(50) DEFAULT NULL,
  `usefields` varchar(300) DEFAULT '*' COMMENT '前台调用字段',
  `control` varchar(50) DEFAULT NULL,
  `column_index` varchar(100) DEFAULT NULL COMMENT '后台-栏目文档列表模板',
  `column_add` varchar(100) DEFAULT NULL COMMENT '后台-添加栏目模板',
  `column_edit` varchar(100) DEFAULT NULL COMMENT '后台-编辑栏目模板',
  `template_index` varchar(100) DEFAULT NULL COMMENT '前台-栏目封面页模板',
  `template_list` varchar(100) DEFAULT NULL COMMENT '前台-栏目文档列表模板',
  `template_body` varchar(100) DEFAULT NULL COMMENT '前台-栏目文档详细页模板',
  `status` tinyint(1) DEFAULT '1' COMMENT '0禁用1启用',
  `createtime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_column_model
-- ----------------------------
INSERT INTO `la_column_model` VALUES ('1', '文章模型', '文章模型', '0', '0', 'article', '', 'Article', 'Article/index.html', 'Article/add.html', 'Article/edit.html', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1363315175');
INSERT INTO `la_column_model` VALUES ('2', '图片模型', '图集模型', '0', '0', 'image', '', 'Image', 'Image/index.html', 'Image/add.html', 'Image/edit.html', 'Image/index.html', 'Image/list.html', 'Image/body.html', '1', '1363315175');
INSERT INTO `la_column_model` VALUES ('3', '下载模型', '下载模型', '0', '0', 'download', '', 'Download', 'Download/index.html', 'Download/add.html', 'Download/edit.html', 'Download/index.html', 'Download/list.html', 'Download/body.html', '1', '1363315175');
INSERT INTO `la_column_model` VALUES ('4', '专题模型', '专题模型', '0', '0', 'topic', '', 'Topic', 'Topic/index.html', 'Topic/add.html', 'Topic/edit.html', 'Topic/index.html', 'Topic/list.html', 'Topic/body.html', '1', '1363315175');
INSERT INTO `la_column_model` VALUES ('5', '软件模型', '软件模型', '0', '0', 'soft', '', 'Soft', 'Soft/index.html', 'Soft/add.html', 'Soft/edit.html', 'Soft/index.html', 'Soft/list.html', 'Soft/body.html', '1', '1363315203');
INSERT INTO `la_column_model` VALUES ('6', '产品模型', '产品模型', '0', '0', 'product', '', 'Product', 'Product/index.html', 'Product/add.html', 'Product/edit.html', 'Product/index.html', 'Product/list.html', 'Product/body.html', '1', '1363315247');
INSERT INTO `la_column_model` VALUES ('7', '分类信息模型', '分类信息模型', '0', '0', 'info', '', 'Info', null, null, null, null, null, null, '1', '1363315306');
INSERT INTO `la_column_model` VALUES ('8', '公共模型', '公共模型 关于我们、联系我们等', '0', '0', 'public', '', 'Public', null, null, null, null, null, null, '1', '1364969716');
INSERT INTO `la_column_model` VALUES ('9', '插件模型', '所有使用插件的栏目的模型控制器入口', '0', '0', 'plugin', '', 'Plugin', null, null, null, null, null, null, '1', '1365668493');

-- ----------------------------
-- Table structure for `la_comment`
-- ----------------------------
DROP TABLE IF EXISTS `la_comment`;
CREATE TABLE `la_comment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) DEFAULT NULL,
  `content` varchar(200) NOT NULL,
  `createtime` int(20) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_comment
-- ----------------------------

-- ----------------------------
-- Table structure for `la_cooperate`
-- ----------------------------
DROP TABLE IF EXISTS `la_cooperate`;
CREATE TABLE `la_cooperate` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '记录ID',
  `position` varchar(100) NOT NULL COMMENT '招聘职位',
  `quantity` int(10) NOT NULL DEFAULT '0' COMMENT '招聘人数',
  `education` varchar(50) DEFAULT NULL COMMENT '学历要求',
  `experience` varchar(100) DEFAULT NULL COMMENT '工作经验',
  `place` varchar(50) DEFAULT NULL COMMENT '工作地点',
  `nature` varchar(50) DEFAULT NULL COMMENT '工作性质',
  `salary` varchar(50) DEFAULT NULL COMMENT '工资待遇',
  `description` text COMMENT '职位描述',
  `columnid` int(10) DEFAULT '0' COMMENT '栏目ID',
  `author` varchar(50) DEFAULT NULL COMMENT '作者',
  `validitytime` varchar(50) DEFAULT NULL COMMENT '有效期',
  `publishtime` int(10) NOT NULL DEFAULT '0' COMMENT '发布时间',
  `updatetime` int(10) NOT NULL DEFAULT '0' COMMENT '更新时间',
  `state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '文章状态 0:删除 1:正常',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_cooperate
-- ----------------------------

-- ----------------------------
-- Table structure for `la_flink`
-- ----------------------------
DROP TABLE IF EXISTS `la_flink`;
CREATE TABLE `la_flink` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `linkname` varchar(50) NOT NULL COMMENT '链接名称',
  `linkurl` varchar(300) NOT NULL COMMENT '链接地址',
  `catalogid` int(10) NOT NULL DEFAULT '0' COMMENT '链接所属分类',
  `createtime` int(10) NOT NULL DEFAULT '0' COMMENT '创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_flink
-- ----------------------------

-- ----------------------------
-- Table structure for `la_flink_catalog`
-- ----------------------------
DROP TABLE IF EXISTS `la_flink_catalog`;
CREATE TABLE `la_flink_catalog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `catalogname` varchar(50) NOT NULL COMMENT '分类名称',
  `sort` int(10) NOT NULL DEFAULT '0' COMMENT '分类排序位置',
  `state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1正常0已删除',
  `createtime` int(10) NOT NULL DEFAULT '0' COMMENT '分类目录创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_flink_catalog
-- ----------------------------

-- ----------------------------
-- Table structure for `la_group`
-- ----------------------------
DROP TABLE IF EXISTS `la_group`;
CREATE TABLE `la_group` (
  `id` smallint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `sort` smallint(3) DEFAULT '0',
  `isshow` tinyint(1) unsigned NOT NULL DEFAULT '1' COMMENT '是否显示0否1是',
  `createtime` int(11) unsigned DEFAULT '0',
  `updatetime` int(11) unsigned DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_group
-- ----------------------------
INSERT INTO `la_group` VALUES ('1', '系统管理', '1', '1', '1332390538', '1381051070');
INSERT INTO `la_group` VALUES ('2', '会员中心', '2', '1', '1332390538', '1332390538');
INSERT INTO `la_group` VALUES ('3', '核心内容', '3', '1', '1332390538', '1332390538');
INSERT INTO `la_group` VALUES ('4', '网站更新', '4', '1', '1332390538', '1332390538');
INSERT INTO `la_group` VALUES ('5', '系统插件', '5', '1', '1332390538', '1332390538');
INSERT INTO `la_group` VALUES ('6', '系统设置', '0', '1', '1353316335', '1353316335');

-- ----------------------------
-- Table structure for `la_images`
-- ----------------------------
DROP TABLE IF EXISTS `la_images`;
CREATE TABLE `la_images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(100) NOT NULL,
  `thumbpath` varchar(100) DEFAULT NULL,
  `imagetitle` varchar(100) DEFAULT NULL,
  `imagelink` varchar(100) DEFAULT NULL,
  `archiveid` int(10) NOT NULL DEFAULT '0' COMMENT '文档id',
  `imagename` varchar(100) DEFAULT NULL COMMENT '图片的原始名称',
  `savename` varchar(100) DEFAULT NULL COMMENT '图片的保存名称',
  `imagesize` int(10) DEFAULT '0' COMMENT '图片大小',
  `width` int(10) NOT NULL DEFAULT '0' COMMENT '图片宽度',
  `height` int(10) NOT NULL DEFAULT '0' COMMENT '图片高度',
  `createtime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_images
-- ----------------------------

-- ----------------------------
-- Table structure for `la_message_board`
-- ----------------------------
DROP TABLE IF EXISTS `la_message_board`;
CREATE TABLE `la_message_board` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL COMMENT '留言者名称',
  `email` varchar(100) DEFAULT NULL,
  `content` varchar(600) DEFAULT NULL,
  `createtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_message_board
-- ----------------------------

-- ----------------------------
-- Table structure for `la_navigation`
-- ----------------------------
DROP TABLE IF EXISTS `la_navigation`;
CREATE TABLE `la_navigation` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `link` varchar(100) NOT NULL,
  `sort` int(10) DEFAULT '0',
  `flag` tinyint(1) DEFAULT '0' COMMENT '导航位置 1:底部 2:快捷导航',
  `createtime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_navigation
-- ----------------------------
INSERT INTO `la_navigation` VALUES ('1', '招贤纳士', 'http://localhost:82/laugh/index.php?s=Plugin/Cooperate&amp;columnid=9', '0', '1', '1368675893');
INSERT INTO `la_navigation` VALUES ('2', '新闻资讯', 'http://localhost:82/laugh/index.php?s=Article/index&amp;columnid=2', '0', '2', '1368676692');
INSERT INTO `la_navigation` VALUES ('3', '关于我们', 'http://localhost:82/laugh/index.php?s=Public/AboutUS&amp;columnid=10', '0', '1', '1368781020');
INSERT INTO `la_navigation` VALUES ('4', '联系我们', 'http://localhost:82/laugh/index.php?s=Public/ContactUS&amp;columnid=11', '0', '1', '1368781037');
INSERT INTO `la_navigation` VALUES ('5', '在线手册', 'javascript:;', '0', '1', '1368781072');
INSERT INTO `la_navigation` VALUES ('6', '帮助中心', 'javascript:;', '0', '1', '1368781088');

-- ----------------------------
-- Table structure for `la_node`
-- ----------------------------
DROP TABLE IF EXISTS `la_node`;
CREATE TABLE `la_node` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `control` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `pid` smallint(6) unsigned NOT NULL DEFAULT '0' COMMENT '父节点ID',
  `groupid` tinyint(3) unsigned DEFAULT '0' COMMENT '分组id',
  `createtime` int(10) NOT NULL DEFAULT '0' COMMENT '创建日期',
  `updatetime` int(10) NOT NULL DEFAULT '0' COMMENT '更新日期',
  `isshow` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否显示0否1是',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=55 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_node
-- ----------------------------
INSERT INTO `la_node` VALUES ('1', '角色管理', '管理角色信息 可编辑角色权限/改变用户的角色', '', '', '0', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('2', '添加角色', '', 'Role', 'newRole', '1', '0', '0', '0', '1');
INSERT INTO `la_node` VALUES ('3', '管理角色', '', 'Role', 'manageRole', '1', '0', '0', '0', '1');
INSERT INTO `la_node` VALUES ('4', '日志管理', '', '', '', '0', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('5', '管理员登录日志', '', 'Log', 'AdminLoginLog', '4', '0', '0', '0', '1');
INSERT INTO `la_node` VALUES ('6', '组管理', '', '', '', '0', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('7', '管理组', '', 'Group', 'manageGroup', '6', '0', '0', '0', '1');
INSERT INTO `la_node` VALUES ('8', '节点管理', null, '', '', '0', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('9', '添加节点', '', 'Node', 'newNode', '8', '0', '1352711650', '1381051169', '1');
INSERT INTO `la_node` VALUES ('10', '管理节点', '', 'Node', 'manageNode', '8', '0', '1352856214', '0', '1');
INSERT INTO `la_node` VALUES ('11', '管理员用户管理', '管理员账号管理中心', '', '', '0', '1', '1352856238', '0', '1');
INSERT INTO `la_node` VALUES ('12', '新管理员', '', 'Admin', 'newAdmin', '11', '0', '1352857554', '0', '1');
INSERT INTO `la_node` VALUES ('13', '管理员列表', '', 'Admin', 'adminList', '11', '0', '1352858914', '0', '1');
INSERT INTO `la_node` VALUES ('14', '会员管理', '', '', '', '0', '2', '1352944271', '0', '1');
INSERT INTO `la_node` VALUES ('15', '会员列表', '', 'User', 'userList', '14', '0', '1353313113', '0', '1');
INSERT INTO `la_node` VALUES ('16', '会员级别', '', 'User', 'userRank', '14', '0', '1353313186', '0', '1');
INSERT INTO `la_node` VALUES ('17', '栏目管理', '管理网站栏目', '', '', '0', '3', '1353316137', '0', '1');
INSERT INTO `la_node` VALUES ('18', '添加栏目', '', 'Column', 'newColumn', '17', '0', '1353316212', '0', '1');
INSERT INTO `la_node` VALUES ('19', '网站栏目', '', 'Column', 'index', '17', '0', '1353316369', '0', '1');
INSERT INTO `la_node` VALUES ('20', '内容管理', '', '', '', '0', '3', '1353316415', '0', '1');
INSERT INTO `la_node` VALUES ('21', '文章管理', '', 'Article', 'index', '20', '0', '1353316474', '0', '1');
INSERT INTO `la_node` VALUES ('22', '产品管理', '', 'Product', 'index', '20', '0', '1353316554', '0', '1');
INSERT INTO `la_node` VALUES ('23', '图集管理', '', 'Image', 'index', '20', '0', '1353316597', '0', '1');
INSERT INTO `la_node` VALUES ('24', '模型管理', '', '', '', '0', '3', '1353316622', '0', '1');
INSERT INTO `la_node` VALUES ('25', '单页模型', '', 'CTModel', 'singlePage', '24', '0', '1353316736', '0', '1');
INSERT INTO `la_node` VALUES ('26', '内容模型', '', 'CTModel', 'ColumnModel', '24', '0', '1355898117', '1355898117', '1');
INSERT INTO `la_node` VALUES ('27', '自动更新', '', '', '', '0', '4', '1356507108', '1356507108', '1');
INSERT INTO `la_node` VALUES ('28', '一键更新网站', '', 'Cache', 'updateAll', '27', '0', '1357722182', '1357722182', '1');
INSERT INTO `la_node` VALUES ('29', '更新系统缓存', '', 'Cache', 'systemCache', '27', '0', '1358997259', '1358997259', '1');
INSERT INTO `la_node` VALUES ('30', '常规插件', '', '', '', '0', '5', '1358999125', '1358999125', '1');
INSERT INTO `la_node` VALUES ('31', '留言板', '', 'Plugin', 'messageList', '30', '0', '1358999272', '1358999272', '1');
INSERT INTO `la_node` VALUES ('32', '人才招聘', '', 'Plugin', 'CooperateIndex', '30', '0', '1359010748', '1359010748', '1');
INSERT INTO `la_node` VALUES ('33', '友情链接', '', 'Plugin', 'FlinkIndex', '30', '0', '1359010791', '1359010791', '1');
INSERT INTO `la_node` VALUES ('34', '基本设置', '', '', '', '0', '6', '1359011153', '1359011153', '1');
INSERT INTO `la_node` VALUES ('35', '系统基本参数', '', 'System', 'systemInfo', '34', '0', '1359011177', '1359011177', '1');
INSERT INTO `la_node` VALUES ('36', '系统日志管理', '', 'System', 'sysLog', '34', '0', '1359011220', '1359011220', '1');
INSERT INTO `la_node` VALUES ('37', '图片水印设置', '', 'System', 'imageMark', '34', '0', '1359011294', '1359011294', '1');
INSERT INTO `la_node` VALUES ('38', '数据库管理', '', '', '', '0', '6', '1359011349', '1359011349', '1');
INSERT INTO `la_node` VALUES ('39', '数据库备份', '', 'DataBase', 'BackUp', '38', '0', '1359011410', '1359011410', '1');
INSERT INTO `la_node` VALUES ('40', '数据库', '', 'DataBase', '', '38', '0', '1359015999', '1359015999', '0');
INSERT INTO `la_node` VALUES ('41', 'SQL命令行工具', '', 'DataBase', 'SQLClient', '38', '0', '1359016018', '1359016018', '1');
INSERT INTO `la_node` VALUES ('42', '广告管理', '', '', '', '0', '5', '1364263938', '1364263938', '1');
INSERT INTO `la_node` VALUES ('43', '首页中部banner', '', 'Advertise', 'HomeCenterAd', '42', '0', '1364263985', '1364263985', '1');
INSERT INTO `la_node` VALUES ('44', '栏目顶部广告', '', 'Advertise', 'TopAd', '42', '0', '1364264199', '1364264199', '1');
INSERT INTO `la_node` VALUES ('45', '图片管理', '', '', '', '0', '3', '1364265992', '1364265992', '1');
INSERT INTO `la_node` VALUES ('46', '首页轮播图片', '', 'Image', 'HomeScrollImage', '45', '0', '1364266173', '1364266173', '1');
INSERT INTO `la_node` VALUES ('47', '下载管理', '', 'Download', 'index', '20', '0', '1365562641', '1365562641', '1');
INSERT INTO `la_node` VALUES ('48', '文件管理器', '', 'Plugin', 'fileManage', '30', '0', '1365562785', '1365562785', '1');
INSERT INTO `la_node` VALUES ('49', '专题管理', '', 'Topic', 'index', '20', '0', '1365562964', '1365562964', '1');
INSERT INTO `la_node` VALUES ('50', '软件管理', '', 'Soft', 'index', '20', '0', '1365563043', '1365563043', '1');
INSERT INTO `la_node` VALUES ('51', '导航管理', '', 'Plugin', '', '0', '5', '1368669985', '1368669985', '1');
INSERT INTO `la_node` VALUES ('52', '底部导航', '', 'Plugin', 'footNavigation', '51', '0', '1368670035', '1368670035', '1');
INSERT INTO `la_node` VALUES ('53', '快捷导航', '', 'Plugin', 'sideNavigation', '51', '0', '1368670088', '1368670088', '1');

-- ----------------------------
-- Table structure for `la_product`
-- ----------------------------
DROP TABLE IF EXISTS `la_product`;
CREATE TABLE `la_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '产品id',
  `archiveid` int(10) DEFAULT '0',
  `model` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `material` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `instruction` mediumtext,
  `updatetime` int(10) DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_product
-- ----------------------------

-- ----------------------------
-- Table structure for `la_role`
-- ----------------------------
DROP TABLE IF EXISTS `la_role`;
CREATE TABLE `la_role` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `status` tinyint(1) unsigned DEFAULT '1' COMMENT '是否启用0否1是',
  `remark` varchar(255) DEFAULT NULL,
  `createtime` int(11) unsigned NOT NULL DEFAULT '0',
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `status` (`status`),
  KEY `id` (`id`),
  KEY `id_2` (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_role
-- ----------------------------

-- ----------------------------
-- Table structure for `la_role_admin`
-- ----------------------------
DROP TABLE IF EXISTS `la_role_admin`;
CREATE TABLE `la_role_admin` (
  `roleid` smallint(6) NOT NULL DEFAULT '0',
  `adminid` int(11) NOT NULL DEFAULT '0',
  KEY `userid` (`adminid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_role_admin
-- ----------------------------

-- ----------------------------
-- Table structure for `la_role_node`
-- ----------------------------
DROP TABLE IF EXISTS `la_role_node`;
CREATE TABLE `la_role_node` (
  `roleid` smallint(6) NOT NULL DEFAULT '0',
  `nodeid` smallint(6) unsigned NOT NULL DEFAULT '0',
  `access` tinyint(4) DEFAULT '0' COMMENT '是否具有操作权限 0只读 1操作',
  KEY `groupId` (`roleid`),
  KEY `nodeId` (`nodeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_role_node
-- ----------------------------

-- ----------------------------
-- Table structure for `la_scrollimage`
-- ----------------------------
DROP TABLE IF EXISTS `la_scrollimage`;
CREATE TABLE `la_scrollimage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `path` varchar(200) NOT NULL,
  `title` varchar(50) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `isshow` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0隐藏1显示',
  `isdelete` tinyint(1) NOT NULL DEFAULT '0' COMMENT '0正常1已删除',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_scrollimage
-- ----------------------------
INSERT INTO `la_scrollimage` VALUES ('1', '/uploads/ScrollImage/1381906619_jcpao4_791_1364279943_qg83i3_3808.jpg', '1', '#', '1', '0');
INSERT INTO `la_scrollimage` VALUES ('2', '/uploads/ScrollImage/1381906636_divy61_1524_1364280038_2l6n4e_8019.jpg', '2', '#', '1', '0');
INSERT INTO `la_scrollimage` VALUES ('3', '/uploads/ScrollImage/1381906650_bz59w8_6658_1364280067_duvmp8_5013.jpg', '3', '#', '1', '0');

-- ----------------------------
-- Table structure for `la_singlepage`
-- ----------------------------
DROP TABLE IF EXISTS `la_singlepage`;
CREATE TABLE `la_singlepage` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) NOT NULL COMMENT '单页页面标题',
  `tag` varchar(50) DEFAULT NULL COMMENT '单页页面标签',
  `author` varchar(50) DEFAULT NULL,
  `thumbimage` varchar(100) DEFAULT NULL COMMENT '缩略图',
  `seotitle` varchar(100) DEFAULT NULL,
  `keyword` varchar(100) DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL,
  `filename` varchar(100) DEFAULT NULL,
  `template` varchar(50) DEFAULT NULL,
  `content` longtext COMMENT '页面内容',
  `state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '文章状态 0:回收站 1:正常发布 2:草稿箱',
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '评论状态 0:禁止评论 1:允许评论',
  `clicknum` int(10) NOT NULL DEFAULT '0' COMMENT '点击数',
  `commentnum` int(10) NOT NULL DEFAULT '0' COMMENT '评论数',
  `publishtime` int(10) NOT NULL DEFAULT '0',
  `updatetime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_singlepage
-- ----------------------------

-- ----------------------------
-- Table structure for `la_soft`
-- ----------------------------
DROP TABLE IF EXISTS `la_soft`;
CREATE TABLE `la_soft` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `archiveid` int(10) NOT NULL DEFAULT '0' COMMENT '文档ID',
  `filetype` varchar(50) DEFAULT NULL COMMENT '软件类型',
  `authorization` varchar(50) DEFAULT NULL COMMENT '授权方式',
  `language` varchar(50) DEFAULT NULL COMMENT '界面语言',
  `filesize` int(10) DEFAULT '0' COMMENT '软件大小',
  `fileext` varchar(50) DEFAULT NULL COMMENT '文件类型',
  `environment` varchar(50) DEFAULT NULL COMMENT '运行环境',
  `officialsite` varchar(50) DEFAULT NULL COMMENT '官方网站',
  `createtime` int(10) DEFAULT '0' COMMENT '添加日期',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_soft
-- ----------------------------

-- ----------------------------
-- Table structure for `la_system`
-- ----------------------------
DROP TABLE IF EXISTS `la_system`;
CREATE TABLE `la_system` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'primarykey',
  `cfgname` varchar(50) NOT NULL COMMENT '参数名称',
  `cfginfo` varchar(100) NOT NULL COMMENT '参数描述',
  `cfgtype` varchar(20) DEFAULT NULL COMMENT '参数类型',
  `cfggroupid` int(1) DEFAULT '0' COMMENT '参数所属分组',
  `cfgvalue` varchar(500) DEFAULT NULL COMMENT '参数值',
  `cfgtime` int(10) NOT NULL DEFAULT '0' COMMENT '添加时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_system
-- ----------------------------
INSERT INTO `la_system` VALUES ('1', 'host', '网站地址', 'string', '1', 'http://localhost:82/laugh', '1368437340');
INSERT INTO `la_system` VALUES ('2', 'sitename', '网站名称', 'string', '1', 'LaughCMS', '1368437340');
INSERT INTO `la_system` VALUES ('3', 'keywords', '网站关键字', 'text', '1', 'Laugh,CMS', '1368437340');
INSERT INTO `la_system` VALUES ('4', 'admin_path', '管理中心目录', 'string', '2', 'admin', '1368437340');
INSERT INTO `la_system` VALUES ('5', 'archive_recover', '文章回收站(是/否)开启', 'boolean', '2', '1', '1368437340');
INSERT INTO `la_system` VALUES ('6', 'description', '网站描述', 'text', '1', 'LaughCMS', '1368528355');
INSERT INTO `la_system` VALUES ('7', 'HomeSiteTitle', '首页网站标题', 'string', '1', 'LaughCMS', '1369803326');
INSERT INTO `la_system` VALUES ('8', 'AboutUs', '联系我们基本信息', 'text', '2', '', '1369830358');
INSERT INTO `la_system` VALUES ('9', 'Version', '系统版本', 'string', '1', '1.0', '1369830358');

-- ----------------------------
-- Table structure for `la_tag`
-- ----------------------------
DROP TABLE IF EXISTS `la_tag`;
CREATE TABLE `la_tag` (
  `id` int(10) NOT NULL,
  `tagname` varchar(10) NOT NULL,
  `usecount` int(20) DEFAULT '0' COMMENT '使用次数',
  PRIMARY KEY (`id`),
  KEY `tag` (`tagname`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_tag
-- ----------------------------

-- ----------------------------
-- Table structure for `la_topic`
-- ----------------------------
DROP TABLE IF EXISTS `la_topic`;
CREATE TABLE `la_topic` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `archiveid` int(10) NOT NULL,
  `content` longtext,
  `updatetime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_topic
-- ----------------------------

-- ----------------------------
-- Table structure for `la_topic_article`
-- ----------------------------
DROP TABLE IF EXISTS `la_topic_article`;
CREATE TABLE `la_topic_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `archiveid` int(10) NOT NULL,
  `topicid` int(10) DEFAULT NULL COMMENT '专题ID',
  `topiccardid` int(10) DEFAULT NULL COMMENT '专题项ID',
  `content` longtext,
  `updatetime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_topic_article
-- ----------------------------

-- ----------------------------
-- Table structure for `la_topic_card`
-- ----------------------------
DROP TABLE IF EXISTS `la_topic_card`;
CREATE TABLE `la_topic_card` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `archiveid` int(10) NOT NULL COMMENT '专题ID',
  `title` varchar(50) NOT NULL COMMENT '专题项名称',
  `thumbimage` varchar(100) DEFAULT NULL,
  `description` longtext COMMENT '描述',
  `createtime` int(10) DEFAULT NULL,
  `updatetime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_topic_card
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
  `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '是否正常用户 0已删除 1正常',
  `ustate` varchar(32) NOT NULL DEFAULT '',
  `urank` varchar(50) NOT NULL DEFAULT '0',
  `lastlogintime` int(10) DEFAULT '0' COMMENT '上次登录日期',
  `lastloginip` int(10) DEFAULT '0' COMMENT '上次登录IP',
  `logincount` int(10) DEFAULT '0' COMMENT '登录次数',
  `createtime` int(10) NOT NULL DEFAULT '0' COMMENT '创建日期',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_user
-- ----------------------------
