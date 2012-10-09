-- phpMyAdmin SQL Dump
-- version 3.4.5
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2012 年 10 月 09 日 11:03
-- 服务器版本: 5.5.16
-- PHP 版本: 5.3.8

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `laugh`
--

-- --------------------------------------------------------

--
-- 表的结构 `la_admin`
--

CREATE TABLE IF NOT EXISTS `la_admin` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `la_admin`
--

INSERT INTO `la_admin` (`id`, `username`, `password`, `nickname`, `email`, `remark`, `ukey`, `createtime`, `status`, `ustate`, `permission`, `lastlogintime`, `lastloginip`, `logincount`) VALUES
(1, 'admin', 'db03e4cae5bb7ae5046b97c9b1eaa2d3', NULL, NULL, NULL, 'gmk4r2', 1323910052, 1, '206423eb45af33c046db62575e2522b2', '1', 0, NULL, 0),
(2, 'luochuan', 'dfd154b410395ccac8cede2eb850667a', NULL, NULL, NULL, 'u1itx6', 1324265773, 1, 'a1cb0b77413638a2974af70f948e16d8', '1', 0, NULL, 0),
(3, 'test', 'a2907812388492fdf0f488bd5a3dc26d', NULL, NULL, NULL, '2fcy4o', 1325211617, 1, '', '0', 0, NULL, 0);

-- --------------------------------------------------------

--
-- 表的结构 `la_admin_access`
--

CREATE TABLE IF NOT EXISTS `la_admin_access` (
  `userid` int(10) NOT NULL,
  `nodeid` mediumint(6) NOT NULL,
  KEY `userid` (`userid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `la_article`
--

CREATE TABLE IF NOT EXISTS `la_article` (
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
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `la_article_class`
--

CREATE TABLE IF NOT EXISTS `la_article_class` (
  `id` int(10) NOT NULL,
  `article_id` int(10) NOT NULL,
  `class_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class` (`class_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `la_article_comment`
--

CREATE TABLE IF NOT EXISTS `la_article_comment` (
  `id` int(10) NOT NULL,
  `username` varchar(20) DEFAULT NULL,
  `content` varchar(200) NOT NULL,
  `create_time` int(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `la_article_index`
--

CREATE TABLE IF NOT EXISTS `la_article_index` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `article_id` int(10) DEFAULT NULL,
  `title` varchar(200) NOT NULL,
  `link` varchar(100) DEFAULT NULL COMMENT 'title链接地址',
  `sindex` text NOT NULL,
  PRIMARY KEY (`id`),
  FULLTEXT KEY `fulltext` (`sindex`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=31 ;

--
-- 转存表中的数据 `la_article_index`
--

INSERT INTO `la_article_index` (`id`, `article_id`, `title`, `link`, `sindex`) VALUES
(1, 1, '        PHP中文分词算法及代码实现\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7298300', 'PHP 54484636 46362354 23542042 20424367 43672308 23082816 28162090 20903475 34754221 42214754'),
(2, 2, '\n        MySQL全文检索中文搜索\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7284016', 'MySQL 40114636 46362876 28764387 43875448 54484636 46364349 43494387'),
(3, 3, '\n        nginx负载均衡session共享解决方案\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7288171', 'nginx session 24265256 52563089 30892666 25184777 47772966 29663086 30862329 23291624'),
(4, 4, '\n        PHP安全基础学习与总结\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7276135', 'PHP 16184011 40112789 27892001 20014907 49074716 47165175 51755560 55602965'),
(5, 5, '\n        求24点表达式的php实现\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7258907', '24 php 3983 21671777 17772079 20794229 42292136 42214754'),
(6, 6, '\n        MAC OS下配置PHP的高效IDE - MACVIM\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7252299', 'MAC OS PHP IDE MACVIM 47343768 37685435 21362463 24634807'),
(7, 7, '\n        MACVIM的配置文件.gvimrc备份\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7252916', 'MACVIM gvimrc 21363768 37685435 54354636 46362894 17242361'),
(8, 8, '\n        vim代码颜色配置-PHP版\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7250163', 'vim PHP 20903475 34754953 49534111 41113768 37685435 1670'),
(9, 9, '\n        nginx+PHP服务器环境安装与配置学习（一） - windows系统基础环境搭建\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7244286', 'nginx PHP windows 23944681 46813887 38872723 27233019 30191618 16185516 55165175 51753768 37685435 54354907 49074716 5027 47214519 45192789 27892001 20012723 27233019 30192078 20782908'),
(10, 10, '\n        20个数据库设计值得遵循的规则\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7236728', '20 24864293 42933061 30613166 31664172 41722838 28385421 54212135 21355581 55814913 49132136 21362570 25705282'),
(11, 11, '\n        PHP的pack方法总结备忘\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7230853', 'PHP pack 2136 23292308 23085560 55602965 29651724 17244592'),
(12, 12, '\n        PHP中错误报告值参数及说明的查询备忘\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7220196', 'PHP 54482077 20774683 46831708 17082470 24705421 54211846 18464293 42932816 28164321 43213587 35872136 21361873 18734915 49151724 17244592'),
(13, 13, '\n        关于反向代理\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7217837', '25565158 51582320 23204782 47822090 20903277'),
(14, 14, '\n        HTML5新功能websocket的学习与备忘-PHP版（二）\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198624', '5 HTML websocket PHP 48342506 25063660 21364907 49074716 47165175 51751724 17244592 1670 2294'),
(15, 15, '\n        HTML5新功能websocket的学习与备忘-PHP版（一）\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198619', '5 HTML websocket PHP 48342506 25063660 21364907 49074716 47165175 51751724 17244592 1670 5027'),
(16, 16, '\n        每个程序员都该阅读的书【转载】\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198017', '35312486 24861944 19444882 48825217 52172228 22282435 24355236 52362233 22332136 21364273 55105256'),
(17, 17, '\n        为macos的php配置memcache\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198012', 'macos php memcache 4610 2136 37685435'),
(18, 18, '\n        为macos的php配置pdo_mysql扩展\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198007', 'macos php pdo mysql 4610 2136 37685435 _ 32095325'),
(19, 19, '\n        在Mac OS X中配置Apache ＋ PHP ＋ MySQL + PHPMYADMIN\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198002', 'Mac OS X Apache PHP MySQL PHPMYADMIN 5258 54483768 37685435 0311 0311'),
(20, 20, '\n        新浪微博技术架构演讲 - 网上转载\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7198000', '48343243 32434602 46021809 18092828 28284285 42852860 28602525 25254961 49612918 45884147 41475510 55105256'),
(21, 21, '\n        vim、gvim在windows下中文乱码的解决方案\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197995', 'vim gvim windows 5258 47345448 54484636 46363450 34503475 34752136 21362966 29663086 30862329 23291624'),
(22, 22, '\n        redis的介绍与使用(二) - 测试命令\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197993', 'redis 21362973 29734160 41605175 51754225 42255135 2294 18664252 42523592 35923378'),
(23, 23, '\n        redis的介绍与使用(一) - benchmark等\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197982', 'redis benchmark 21362973 29734160 41605175 51754225 42255135 5027 2140'),
(24, 24, '\n        MACOS系统中查看隐藏文件\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197965', 'MACOS 47214519 45195448 54481873 18733120 31205094 50941856 18564636 46362894'),
(25, 25, '\n        关于MEMCACHE的学习与备忘(二)\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197962', 'MEMCACHE 25565158 21364907 49074716 47165175 51751724 17244592 2294'),
(26, 26, '\n        关于MEMCACHE的学习与备忘(一)\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197952', 'MEMCACHE 25565158 21364907 49074716 47165175 51751724 17244592 5027'),
(27, 27, '\n        用xdebug分析PHP以及结果分析程序webgrind的使用\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197943', 'xdebug PHP webgrind 5135 23544686 50522816 28162965 29652591 25912354 23544686 46861944 19444882 21364225 42255135'),
(28, 28, '\n        ApacheBench(ab)测试工具介绍 - 备忘与学习\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197929', 'ApacheBench ab 18664252 42522504 25043063 30632973 29734160 17244592 45925175 51754907 49074716'),
(29, 29, '\n        关于PHP的static(静态)变量\r\n        ', 'http://blog.csdn.net/luochuan/article/details/7197891', 'PHP static 25565158 2136 30184412 17683331'),
(30, 30, '\n        仿googletoolbar导航菜单\r\n        ', 'http://blog.csdn.net/luochuan/article/details/3634825', 'googletoolbar 2334 21282629 26291843 18432105');

-- --------------------------------------------------------

--
-- 表的结构 `la_article_tag`
--

CREATE TABLE IF NOT EXISTS `la_article_tag` (
  `id` int(10) NOT NULL,
  `article_id` int(10) NOT NULL,
  `tag_id` int(10) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `article` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `la_class`
--

CREATE TABLE IF NOT EXISTS `la_class` (
  `id` int(10) NOT NULL,
  `class` varchar(15) NOT NULL,
  `create_time` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `class` (`class`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `la_group`
--

CREATE TABLE IF NOT EXISTS `la_group` (
  `id` smallint(3) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `createtime` int(11) unsigned NOT NULL,
  `updatetime` int(11) unsigned NOT NULL DEFAULT '0',
  `sort` smallint(3) NOT NULL,
  `isshow` tinyint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 转存表中的数据 `la_group`
--

INSERT INTO `la_group` (`id`, `title`, `createtime`, `updatetime`, `sort`, `isshow`) VALUES
(1, '系统管理', 1332390538, 1332390538, 1, 1),
(2, '用户中心', 1332390538, 1332390538, 2, 1),
(3, '文章管理', 1332390538, 1332390538, 3, 1),
(4, '网站设置', 1332390538, 1332390538, 4, 1),
(5, '系统工具', 1332390538, 1332390538, 5, 1);

-- --------------------------------------------------------

--
-- 表的结构 `la_node`
--

CREATE TABLE IF NOT EXISTS `la_node` (
  `id` smallint(6) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) DEFAULT NULL,
  `remark` varchar(255) DEFAULT NULL,
  `control` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `sort` smallint(6) unsigned DEFAULT NULL,
  `pid` smallint(6) unsigned NOT NULL,
  `level` tinyint(1) unsigned NOT NULL,
  `groupid` tinyint(3) unsigned DEFAULT '0',
  `createtime` int(11) NOT NULL,
  `updatetime` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `level` (`level`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=8 ;

--
-- 转存表中的数据 `la_node`
--

INSERT INTO `la_node` (`id`, `title`, `remark`, `control`, `action`, `sort`, `pid`, `level`, `groupid`, `createtime`, `updatetime`) VALUES
(1, '注册与访问控制', '注册与访问控制 管理注册与访客的信息', '', '', 1, 0, 1, 1, 0, 0),
(5, '用户搜索', '搜索用户信息', '', '', 1, 0, 1, 2, 0, 0),
(2, '角色管理', '管理角色信息 可编辑角色权限/改变用户的角色', '', '', 3, 0, 1, 1, 0, 0),
(3, '日志管理', '日志模块', '', '', 5, 0, 1, 1, 0, 0),
(4, '节点管理', '管理模块下的节点信息', '', '', 4, 0, 1, 1, 0, 0),
(6, '管理员用户管理', '管理员账号管理中心', '', '', 2, 0, 1, 1, 0, 0),
(7, '添加节点', '添加新的模块节点', 'Node', 'newNode', 1, 4, 2, 0, 0, 0);

-- --------------------------------------------------------

--
-- 表的结构 `la_role`
--

CREATE TABLE IF NOT EXISTS `la_role` (
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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- 转存表中的数据 `la_role`
--

INSERT INTO `la_role` (`id`, `name`, `pid`, `status`, `remark`, `createtime`, `updatetime`) VALUES
(1, '超级管理员', 0, 1, '超级管理员 具有全站管理权限', 1332391671, 1332391671),
(2, '管理员', 0, 1, '普通管理员 管理某些模块', 1332391671, 1332391671),
(3, '普通用户', 0, 1, '普通用户', 1332391671, 1332391671);

-- --------------------------------------------------------

--
-- 表的结构 `la_role_node`
--

CREATE TABLE IF NOT EXISTS `la_role_node` (
  `roleid` smallint(6) unsigned NOT NULL,
  `nodeid` smallint(6) unsigned NOT NULL,
  KEY `groupId` (`roleid`),
  KEY `nodeId` (`nodeid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `la_role_node`
--

INSERT INTO `la_role_node` (`roleid`, `nodeid`) VALUES
(1, 1),
(1, 2),
(1, 3),
(1, 4),
(1, 5),
(2, 5);

-- --------------------------------------------------------

--
-- 表的结构 `la_role_user`
--

CREATE TABLE IF NOT EXISTS `la_role_user` (
  `roleid` smallint(6) NOT NULL,
  `userid` int(11) NOT NULL,
  KEY `userid` (`userid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 转存表中的数据 `la_role_user`
--

INSERT INTO `la_role_user` (`roleid`, `userid`) VALUES
(1, 1),
(2, 1),
(3, 3);

-- --------------------------------------------------------

--
-- 表的结构 `la_system`
--

CREATE TABLE IF NOT EXISTS `la_system` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'primarykey',
  `cfgname` varchar(30) NOT NULL,
  `cfginfo` varchar(50) NOT NULL,
  `cfggroupid` int(1) DEFAULT NULL,
  `cfgtype` varchar(20) DEFAULT NULL,
  `cfgvalue` varchar(500) NOT NULL,
  `cfgtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=7 ;

--
-- 转存表中的数据 `la_system`
--

INSERT INTO `la_system` (`id`, `cfgname`, `cfginfo`, `cfggroupid`, `cfgtype`, `cfgvalue`, `cfgtime`) VALUES
(1, 'host', '网站地址', 1, 'string', 'http://localhost/laugh', 0),
(2, 'name', '网站名称', 1, 'string', 'laugh', 0),
(3, 'keywords', '网站关键字', 1, 'string', '步知道', 0),
(4, 'style', '网站theme', 1, 'string', 'default', 0),
(5, 'admin_style', '管理中心theme', 2, 'string', 'default', 0),
(6, 'admin_path', '管理中心路径', 1, 'string', 'admin', 0);

-- --------------------------------------------------------

--
-- 表的结构 `la_tag`
--

CREATE TABLE IF NOT EXISTS `la_tag` (
  `id` int(10) NOT NULL,
  `tag` varchar(10) NOT NULL,
  `create_time` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag` (`tag`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- 表的结构 `la_user`
--

CREATE TABLE IF NOT EXISTS `la_user` (
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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 转存表中的数据 `la_user`
--

INSERT INTO `la_user` (`id`, `username`, `password`, `nickname`, `email`, `remark`, `ukey`, `createtime`, `status`, `ustate`, `permission`, `lastlogintime`, `lastloginip`, `logincount`) VALUES
(1, 'admin', 'db03e4cae5bb7ae5046b97c9b1eaa2d3', NULL, NULL, NULL, 'gmk4r2', 1323910052, 1, '206423eb45af33c046db62575e2522b2', '1', 0, NULL, 0),
(2, 'luochuan', 'dfd154b410395ccac8cede2eb850667a', NULL, NULL, NULL, 'u1itx6', 1324265773, 1, 'a1cb0b77413638a2974af70f948e16d8', '1', 0, NULL, 0),
(3, 'test', 'a2907812388492fdf0f488bd5a3dc26d', NULL, NULL, NULL, '2fcy4o', 1325211617, 1, '', '0', 0, NULL, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
