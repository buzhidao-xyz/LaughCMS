/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : laugh

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2013-04-23 14:17:27
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
INSERT INTO `la_admin` VALUES ('1', 'admin', '206423eb45af33c046db62575e2522b2', 'gmk4r2', '1323910052', '1', '206423eb45af33c046db62575e2522b2', '1366617125', '2130706433', '127', '1');
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
-- Table structure for `la_archive`
-- ----------------------------
DROP TABLE IF EXISTS `la_archive`;
CREATE TABLE `la_archive` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) CHARACTER SET utf8 NOT NULL COMMENT '文档标题',
  `author` varchar(50) CHARACTER SET utf8 NOT NULL COMMENT '文档作者',
  `columnid` int(10) NOT NULL COMMENT '栏目ID',
  `thumbimage` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL COMMENT '文章缩略图',
  `tag` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `source` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `seotitle` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_archive
-- ----------------------------
INSERT INTO `la_archive` VALUES ('1', '这是一篇测试文章', 'admin', '2', null, '测试,文章', '', '', '', '', '1', '1', '1352', '0', '1364457012', '1364874377');
INSERT INTO `la_archive` VALUES ('2', '确认在左，取消在右?', 'admin', '4', null, '文章', '', '', '', '', '1', '1', '233', '0', '1357701202', '1364183357');
INSERT INTO `la_archive` VALUES ('3', '企业用网站进行网络宣传的优势', 'admin', '4', null, '网站,宣传', '', '', '', '传统媒体是二维的，而网络宣传则是多维的，它能将文字、图像和声音有机的组合在一起，传递多感官的信息，让顾客如身临其境般感受商品或服务', '1', '1', '132', '0', '1363854365', '1363854382');
INSERT INTO `la_archive` VALUES ('4', 'MongoDB:下一代MySQL？', 'admin', '13', null, '', '', '', '', '', '1', '1', '0', '0', '1363856271', '1363856783');
INSERT INTO `la_archive` VALUES ('5', '页面(PAGE)标记(TAGS)', 'admin', '5', null, '', '', '', '', '', '1', '1', '0', '0', '1364196108', '1364197889');
INSERT INTO `la_archive` VALUES ('6', 'PHP基本点知识', 'admin', '4', null, '', '', '', '', '', '1', '1', '0', '0', '1364201027', '1364201480');
INSERT INTO `la_archive` VALUES ('7', 'PHP实现异步操作', 'admin', '12', null, '', '', '', '', '', '1', '1', '0', '0', '1364262615', '1364262717');
INSERT INTO `la_archive` VALUES ('8', 'PHP单例模式经典讲解', 'admin', '3', null, 'PHP,单利模式', '', '', '', '', '1', '1', '0', '0', '1364537100', '1364537721');
INSERT INTO `la_archive` VALUES ('9', 'Web服务攻击反侦查痕迹检测', 'admin', '15', '/Uploads/Image/201304/02/1364884203_zxvkaj_4664.png', '', '', 'Web服务攻击反侦查痕迹检测', '', '', '1', '1', '0', '0', '1364884203', '1364884478');
INSERT INTO `la_archive` VALUES ('10', 'Web服务攻击反侦查痕迹检测', 'admin', '12', null, '', '', 'Web服务攻击反侦查痕迹检测', '', '', '1', '1', '0', '0', '1364796550', '1364799883');
INSERT INTO `la_archive` VALUES ('11', '4 款 Linux 下开源的个人日记管理软件', 'admin', '14', '/Uploads/Image/201304/02/1364884636_tpajd4_786.png', '', '', '4 款 Linux 下开源的个人日记管理软件', '', '4 款 Linux 下开源的个人日记管理软件', '1', '1', '0', '0', '1364804934', '1364884636');
INSERT INTO `la_archive` VALUES ('12', 'Vim文本编辑器 v7.3 正式版', 'admin', '14', '/Uploads/Image/201304/02/1364884946_37uz4d_4967.png', '', '', 'Vim文本编辑器 v7.3 正式版', '', 'Vim文本编辑器 v7.3 正式版', '1', '1', '0', '0', '1364805949', '1364884946');
INSERT INTO `la_archive` VALUES ('13', 'DNS污染【备忘】', 'admin', '4', null, '', '', 'DNS污染【备忘】', '', 'DNS污染【备忘】', '1', '1', '0', '0', '1364885413', '1364885467');
INSERT INTO `la_archive` VALUES ('14', '客户案例一', 'admin', '7', '/Uploads/Image/201304/08/1365413072_9nqiqs_5725.jpeg', '', '', '客户案例一', '客户案例一', '客户案例一', '1', '1', '0', '0', '1365670157', '1365670284');
INSERT INTO `la_archive` VALUES ('15', '客户案例二', 'admin', '7', '/Uploads/Image/201304/08/1365414070_zo95z4_7377.jpg', '', '', '客户案例二', '客户案例二', '客户案例二', '1', '1', '0', '0', '1365413256', '1365414070');
INSERT INTO `la_archive` VALUES ('16', 'LaughCMS', 'admin', '8', null, '', '', '', '', '', '1', '1', '0', '0', '1365646227', '1365646325');
INSERT INTO `la_archive` VALUES ('17', 'SCWS中文分词软件', 'admin', '8', null, '', '', '', '', '', '1', '1', '0', '0', '1365668840', '1365669678');
INSERT INTO `la_archive` VALUES ('18', 'VI命令大全', 'admin', '3', '/Uploads/Image/201304/12/1365748740_8oo39v_3510_vi_tutorial.png', 'VI', '', '', '', '', '1', '1', '0', '0', '1365748679', '1365748740');

-- ----------------------------
-- Table structure for `la_area`
-- ----------------------------
DROP TABLE IF EXISTS `la_area`;
CREATE TABLE `la_area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `county` varchar(50) DEFAULT NULL COMMENT '区县',
  `cid` int(11) DEFAULT NULL COMMENT 'city_id',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3765 DEFAULT CHARSET=utf8 COMMENT='区县';

-- ----------------------------
-- Records of la_area
-- ----------------------------
INSERT INTO `la_area` VALUES ('613', '铁东', '1');
INSERT INTO `la_area` VALUES ('614', '铁西', '1');
INSERT INTO `la_area` VALUES ('615', '立山', '1');
INSERT INTO `la_area` VALUES ('616', '千山', '1');
INSERT INTO `la_area` VALUES ('617', '海城', '1');
INSERT INTO `la_area` VALUES ('618', '台安', '1');
INSERT INTO `la_area` VALUES ('619', '岫岩', '1');
INSERT INTO `la_area` VALUES ('620', '北关', '2');
INSERT INTO `la_area` VALUES ('621', '文峰', '2');
INSERT INTO `la_area` VALUES ('622', '殷都', '2');
INSERT INTO `la_area` VALUES ('623', '龙安', '2');
INSERT INTO `la_area` VALUES ('624', '林州', '2');
INSERT INTO `la_area` VALUES ('625', '安阳县', '2');
INSERT INTO `la_area` VALUES ('626', '汤阴', '2');
INSERT INTO `la_area` VALUES ('627', '滑县', '2');
INSERT INTO `la_area` VALUES ('628', '内黄', '2');
INSERT INTO `la_area` VALUES ('629', '迎江', '3');
INSERT INTO `la_area` VALUES ('630', '大观', '3');
INSERT INTO `la_area` VALUES ('631', '宜秀', '3');
INSERT INTO `la_area` VALUES ('632', '桐城', '3');
INSERT INTO `la_area` VALUES ('633', '怀宁', '3');
INSERT INTO `la_area` VALUES ('634', '枞阳', '3');
INSERT INTO `la_area` VALUES ('635', '潜山', '3');
INSERT INTO `la_area` VALUES ('636', '太湖', '3');
INSERT INTO `la_area` VALUES ('637', '宿松', '3');
INSERT INTO `la_area` VALUES ('638', '望江', '3');
INSERT INTO `la_area` VALUES ('639', '岳西', '3');
INSERT INTO `la_area` VALUES ('640', '汉滨', '4');
INSERT INTO `la_area` VALUES ('641', '汉阴', '4');
INSERT INTO `la_area` VALUES ('642', '石泉', '4');
INSERT INTO `la_area` VALUES ('643', '宁陕', '4');
INSERT INTO `la_area` VALUES ('644', '紫阳', '4');
INSERT INTO `la_area` VALUES ('645', '岚皋', '4');
INSERT INTO `la_area` VALUES ('646', '平利', '4');
INSERT INTO `la_area` VALUES ('647', '镇坪', '4');
INSERT INTO `la_area` VALUES ('648', '旬阳', '4');
INSERT INTO `la_area` VALUES ('649', '白河', '4');
INSERT INTO `la_area` VALUES ('650', '阿克苏市', '5');
INSERT INTO `la_area` VALUES ('651', '温宿', '5');
INSERT INTO `la_area` VALUES ('652', '库车', '5');
INSERT INTO `la_area` VALUES ('653', '沙雅', '5');
INSERT INTO `la_area` VALUES ('654', '新和', '5');
INSERT INTO `la_area` VALUES ('655', '拜城', '5');
INSERT INTO `la_area` VALUES ('656', '乌什', '5');
INSERT INTO `la_area` VALUES ('657', '阿瓦提', '5');
INSERT INTO `la_area` VALUES ('658', '柯坪', '5');
INSERT INTO `la_area` VALUES ('659', '西秀', '6');
INSERT INTO `la_area` VALUES ('660', '平坝', '6');
INSERT INTO `la_area` VALUES ('661', '普定', '6');
INSERT INTO `la_area` VALUES ('662', '镇宁', '6');
INSERT INTO `la_area` VALUES ('663', '关岭', '6');
INSERT INTO `la_area` VALUES ('664', '紫云', '6');
INSERT INTO `la_area` VALUES ('665', '阿勒泰市', '7');
INSERT INTO `la_area` VALUES ('666', '布尔津', '7');
INSERT INTO `la_area` VALUES ('667', '富蕴', '7');
INSERT INTO `la_area` VALUES ('668', '福海', '7');
INSERT INTO `la_area` VALUES ('669', '哈巴河', '7');
INSERT INTO `la_area` VALUES ('670', '青河', '7');
INSERT INTO `la_area` VALUES ('671', '吉木乃', '7');
INSERT INTO `la_area` VALUES ('672', '阿拉善左', '8');
INSERT INTO `la_area` VALUES ('673', '阿拉善右', '8');
INSERT INTO `la_area` VALUES ('674', '额济纳', '8');
INSERT INTO `la_area` VALUES ('675', '马尔康', '9');
INSERT INTO `la_area` VALUES ('676', '汶川', '9');
INSERT INTO `la_area` VALUES ('677', '理县', '9');
INSERT INTO `la_area` VALUES ('678', '茂县', '9');
INSERT INTO `la_area` VALUES ('679', '松潘', '9');
INSERT INTO `la_area` VALUES ('680', '九寨沟', '9');
INSERT INTO `la_area` VALUES ('681', '金川', '9');
INSERT INTO `la_area` VALUES ('682', '小金', '9');
INSERT INTO `la_area` VALUES ('683', '黑水', '9');
INSERT INTO `la_area` VALUES ('684', '壤塘', '9');
INSERT INTO `la_area` VALUES ('685', '阿坝县', '9');
INSERT INTO `la_area` VALUES ('686', '若尔盖', '9');
INSERT INTO `la_area` VALUES ('687', '红原', '9');
INSERT INTO `la_area` VALUES ('688', '噶尔', '10');
INSERT INTO `la_area` VALUES ('689', '普兰', '10');
INSERT INTO `la_area` VALUES ('690', '札达', '10');
INSERT INTO `la_area` VALUES ('691', '日土', '10');
INSERT INTO `la_area` VALUES ('692', '革吉', '10');
INSERT INTO `la_area` VALUES ('693', '改则', '10');
INSERT INTO `la_area` VALUES ('694', '措勤', '10');
INSERT INTO `la_area` VALUES ('695', '金银川路街道', '11');
INSERT INTO `la_area` VALUES ('696', '幸福路街道', '11');
INSERT INTO `la_area` VALUES ('697', '青松路街道', '11');
INSERT INTO `la_area` VALUES ('698', '南口街道', '11');
INSERT INTO `la_area` VALUES ('699', '团场', '11');
INSERT INTO `la_area` VALUES ('700', '阿拉尔周边', '11');
INSERT INTO `la_area` VALUES ('701', '花地玛堂', '12');
INSERT INTO `la_area` VALUES ('702', '圣安多尼堂', '12');
INSERT INTO `la_area` VALUES ('703', '大堂', '12');
INSERT INTO `la_area` VALUES ('704', '望德堂', '12');
INSERT INTO `la_area` VALUES ('705', '风顺堂', '12');
INSERT INTO `la_area` VALUES ('706', '嘉模堂', '12');
INSERT INTO `la_area` VALUES ('707', '圣方济各堂', '12');
INSERT INTO `la_area` VALUES ('708', '其他堂区', '12');
INSERT INTO `la_area` VALUES ('709', '海淀', '13');
INSERT INTO `la_area` VALUES ('710', '朝阳', '13');
INSERT INTO `la_area` VALUES ('711', '东城', '13');
INSERT INTO `la_area` VALUES ('712', '西城', '13');
INSERT INTO `la_area` VALUES ('713', '崇文', '13');
INSERT INTO `la_area` VALUES ('714', '宣武', '13');
INSERT INTO `la_area` VALUES ('715', '丰台', '13');
INSERT INTO `la_area` VALUES ('716', '石景山', '13');
INSERT INTO `la_area` VALUES ('717', '昌平', '13');
INSERT INTO `la_area` VALUES ('718', '通州', '13');
INSERT INTO `la_area` VALUES ('719', '大兴', '13');
INSERT INTO `la_area` VALUES ('720', '顺义', '13');
INSERT INTO `la_area` VALUES ('721', '房山', '13');
INSERT INTO `la_area` VALUES ('722', '密云', '13');
INSERT INTO `la_area` VALUES ('723', '门头沟', '13');
INSERT INTO `la_area` VALUES ('724', '怀柔', '13');
INSERT INTO `la_area` VALUES ('725', '平谷', '13');
INSERT INTO `la_area` VALUES ('726', '延庆', '13');
INSERT INTO `la_area` VALUES ('727', '燕郊', '13');
INSERT INTO `la_area` VALUES ('728', '北京周边', '13');
INSERT INTO `la_area` VALUES ('729', '新市区', '14');
INSERT INTO `la_area` VALUES ('730', '北市区', '14');
INSERT INTO `la_area` VALUES ('731', '南市区', '14');
INSERT INTO `la_area` VALUES ('732', '涿州', '14');
INSERT INTO `la_area` VALUES ('733', '定州', '14');
INSERT INTO `la_area` VALUES ('734', '安国', '14');
INSERT INTO `la_area` VALUES ('735', '高碑店', '14');
INSERT INTO `la_area` VALUES ('736', '满城', '14');
INSERT INTO `la_area` VALUES ('737', '清苑', '14');
INSERT INTO `la_area` VALUES ('738', '涞水', '14');
INSERT INTO `la_area` VALUES ('739', '阜平', '14');
INSERT INTO `la_area` VALUES ('740', '徐水', '14');
INSERT INTO `la_area` VALUES ('741', '定兴', '14');
INSERT INTO `la_area` VALUES ('742', '唐县', '14');
INSERT INTO `la_area` VALUES ('743', '高阳', '14');
INSERT INTO `la_area` VALUES ('744', '容城', '14');
INSERT INTO `la_area` VALUES ('745', '涞源', '14');
INSERT INTO `la_area` VALUES ('746', '望都', '14');
INSERT INTO `la_area` VALUES ('747', '安新', '14');
INSERT INTO `la_area` VALUES ('748', '易县', '14');
INSERT INTO `la_area` VALUES ('749', '曲阳', '14');
INSERT INTO `la_area` VALUES ('750', '蠡县', '14');
INSERT INTO `la_area` VALUES ('751', '顺平', '14');
INSERT INTO `la_area` VALUES ('752', '博野', '14');
INSERT INTO `la_area` VALUES ('753', '雄县', '14');
INSERT INTO `la_area` VALUES ('754', '高开区', '14');
INSERT INTO `la_area` VALUES ('755', '滨城', '15');
INSERT INTO `la_area` VALUES ('756', '惠民', '15');
INSERT INTO `la_area` VALUES ('757', '阳信', '15');
INSERT INTO `la_area` VALUES ('758', '无棣', '15');
INSERT INTO `la_area` VALUES ('759', '沾化', '15');
INSERT INTO `la_area` VALUES ('760', '博兴', '15');
INSERT INTO `la_area` VALUES ('761', '邹平', '15');
INSERT INTO `la_area` VALUES ('762', '昆都仑', '16');
INSERT INTO `la_area` VALUES ('763', '东河', '16');
INSERT INTO `la_area` VALUES ('764', '青山', '16');
INSERT INTO `la_area` VALUES ('765', '石拐', '16');
INSERT INTO `la_area` VALUES ('766', '白云矿', '16');
INSERT INTO `la_area` VALUES ('767', '九原', '16');
INSERT INTO `la_area` VALUES ('768', '土默特右', '16');
INSERT INTO `la_area` VALUES ('769', '固阳', '16');
INSERT INTO `la_area` VALUES ('770', '达茂', '16');
INSERT INTO `la_area` VALUES ('771', '渭滨', '17');
INSERT INTO `la_area` VALUES ('772', '金台', '17');
INSERT INTO `la_area` VALUES ('773', '陈仓', '17');
INSERT INTO `la_area` VALUES ('774', '凤翔', '17');
INSERT INTO `la_area` VALUES ('775', '岐山', '17');
INSERT INTO `la_area` VALUES ('776', '扶风', '17');
INSERT INTO `la_area` VALUES ('777', '眉县', '17');
INSERT INTO `la_area` VALUES ('778', '陇县', '17');
INSERT INTO `la_area` VALUES ('779', '千阳', '17');
INSERT INTO `la_area` VALUES ('780', '麟游', '17');
INSERT INTO `la_area` VALUES ('781', '凤县', '17');
INSERT INTO `la_area` VALUES ('782', '太白', '17');
INSERT INTO `la_area` VALUES ('783', '陇县|陇州之窗', '17');
INSERT INTO `la_area` VALUES ('784', '平山', '18');
INSERT INTO `la_area` VALUES ('785', '溪湖', '18');
INSERT INTO `la_area` VALUES ('786', '明山', '18');
INSERT INTO `la_area` VALUES ('787', '南芬', '18');
INSERT INTO `la_area` VALUES ('788', '本溪县', '18');
INSERT INTO `la_area` VALUES ('789', '桓仁', '18');
INSERT INTO `la_area` VALUES ('790', '蚌山', '19');
INSERT INTO `la_area` VALUES ('791', '龙子湖', '19');
INSERT INTO `la_area` VALUES ('792', '禹会', '19');
INSERT INTO `la_area` VALUES ('793', '淮上', '19');
INSERT INTO `la_area` VALUES ('794', '怀远', '19');
INSERT INTO `la_area` VALUES ('795', '五河', '19');
INSERT INTO `la_area` VALUES ('796', '固镇', '19');
INSERT INTO `la_area` VALUES ('797', '海城', '20');
INSERT INTO `la_area` VALUES ('798', '银海', '20');
INSERT INTO `la_area` VALUES ('799', '铁山港', '20');
INSERT INTO `la_area` VALUES ('800', '合浦', '20');
INSERT INTO `la_area` VALUES ('801', '临河', '21');
INSERT INTO `la_area` VALUES ('802', '五原', '21');
INSERT INTO `la_area` VALUES ('803', '磴口', '21');
INSERT INTO `la_area` VALUES ('804', '乌拉特前', '21');
INSERT INTO `la_area` VALUES ('805', '乌拉特中', '21');
INSERT INTO `la_area` VALUES ('806', '乌拉特后', '21');
INSERT INTO `la_area` VALUES ('807', '杭锦后', '21');
INSERT INTO `la_area` VALUES ('808', '洮北区', '22');
INSERT INTO `la_area` VALUES ('809', '洮南', '22');
INSERT INTO `la_area` VALUES ('810', '大安', '22');
INSERT INTO `la_area` VALUES ('811', '镇赉', '22');
INSERT INTO `la_area` VALUES ('812', '通榆', '22');
INSERT INTO `la_area` VALUES ('813', '八道江区', '23');
INSERT INTO `la_area` VALUES ('814', '江源区', '23');
INSERT INTO `la_area` VALUES ('815', '临江市', '23');
INSERT INTO `la_area` VALUES ('816', '抚松县', '23');
INSERT INTO `la_area` VALUES ('817', '靖宇县', '23');
INSERT INTO `la_area` VALUES ('818', '长白', '23');
INSERT INTO `la_area` VALUES ('819', '谯城', '24');
INSERT INTO `la_area` VALUES ('820', '涡阳', '24');
INSERT INTO `la_area` VALUES ('821', '蒙城', '24');
INSERT INTO `la_area` VALUES ('822', '利辛', '24');
INSERT INTO `la_area` VALUES ('823', '巴州', '25');
INSERT INTO `la_area` VALUES ('824', '通江', '25');
INSERT INTO `la_area` VALUES ('825', '南江', '25');
INSERT INTO `la_area` VALUES ('826', '平昌', '25');
INSERT INTO `la_area` VALUES ('827', '白银区', '26');
INSERT INTO `la_area` VALUES ('828', '平川', '26');
INSERT INTO `la_area` VALUES ('829', '靖远', '26');
INSERT INTO `la_area` VALUES ('830', '会宁', '26');
INSERT INTO `la_area` VALUES ('831', '景泰', '26');
INSERT INTO `la_area` VALUES ('832', '右江', '27');
INSERT INTO `la_area` VALUES ('833', '田阳', '27');
INSERT INTO `la_area` VALUES ('834', '田东', '27');
INSERT INTO `la_area` VALUES ('835', '平果', '27');
INSERT INTO `la_area` VALUES ('836', '德保', '27');
INSERT INTO `la_area` VALUES ('837', '靖西', '27');
INSERT INTO `la_area` VALUES ('838', '那坡', '27');
INSERT INTO `la_area` VALUES ('839', '凌云', '27');
INSERT INTO `la_area` VALUES ('840', '乐业', '27');
INSERT INTO `la_area` VALUES ('841', '田林', '27');
INSERT INTO `la_area` VALUES ('842', '西林', '27');
INSERT INTO `la_area` VALUES ('843', '隆林', '27');
INSERT INTO `la_area` VALUES ('844', '毕节市', '28');
INSERT INTO `la_area` VALUES ('845', '大方', '28');
INSERT INTO `la_area` VALUES ('846', '黔西', '28');
INSERT INTO `la_area` VALUES ('847', '金沙', '28');
INSERT INTO `la_area` VALUES ('848', '织金', '28');
INSERT INTO `la_area` VALUES ('849', '纳雍', '28');
INSERT INTO `la_area` VALUES ('850', '赫章', '28');
INSERT INTO `la_area` VALUES ('851', '威宁', '28');
INSERT INTO `la_area` VALUES ('852', '库尔勒', '29');
INSERT INTO `la_area` VALUES ('853', '轮台', '29');
INSERT INTO `la_area` VALUES ('854', '尉犁', '29');
INSERT INTO `la_area` VALUES ('855', '若羌', '29');
INSERT INTO `la_area` VALUES ('856', '且末', '29');
INSERT INTO `la_area` VALUES ('857', '焉耆', '29');
INSERT INTO `la_area` VALUES ('858', '和静', '29');
INSERT INTO `la_area` VALUES ('859', '和硕', '29');
INSERT INTO `la_area` VALUES ('860', '博湖', '29');
INSERT INTO `la_area` VALUES ('861', '隆阳', '30');
INSERT INTO `la_area` VALUES ('862', '施甸', '30');
INSERT INTO `la_area` VALUES ('863', '腾冲', '30');
INSERT INTO `la_area` VALUES ('864', '龙陵', '30');
INSERT INTO `la_area` VALUES ('865', '昌宁', '30');
INSERT INTO `la_area` VALUES ('866', '博乐', '31');
INSERT INTO `la_area` VALUES ('867', '精河', '31');
INSERT INTO `la_area` VALUES ('868', '温泉', '31');
INSERT INTO `la_area` VALUES ('869', '武侯', '32');
INSERT INTO `la_area` VALUES ('870', '青羊', '32');
INSERT INTO `la_area` VALUES ('871', '金牛', '32');
INSERT INTO `la_area` VALUES ('872', '锦江', '32');
INSERT INTO `la_area` VALUES ('873', '成华', '32');
INSERT INTO `la_area` VALUES ('874', '高新', '32');
INSERT INTO `la_area` VALUES ('875', '双流', '32');
INSERT INTO `la_area` VALUES ('876', '温江', '32');
INSERT INTO `la_area` VALUES ('877', '郫县', '32');
INSERT INTO `la_area` VALUES ('878', '高新西区', '32');
INSERT INTO `la_area` VALUES ('879', '龙泉驿', '32');
INSERT INTO `la_area` VALUES ('880', '新都', '32');
INSERT INTO `la_area` VALUES ('881', '青白江', '32');
INSERT INTO `la_area` VALUES ('882', '金堂', '32');
INSERT INTO `la_area` VALUES ('883', '都江堰', '32');
INSERT INTO `la_area` VALUES ('884', '彭州', '32');
INSERT INTO `la_area` VALUES ('885', '新津', '32');
INSERT INTO `la_area` VALUES ('886', '崇州', '32');
INSERT INTO `la_area` VALUES ('887', '大邑', '32');
INSERT INTO `la_area` VALUES ('888', '邛崃', '32');
INSERT INTO `la_area` VALUES ('889', '蒲江', '32');
INSERT INTO `la_area` VALUES ('890', '其他', '32');
INSERT INTO `la_area` VALUES ('891', '渝中', '33');
INSERT INTO `la_area` VALUES ('892', '大渡口', '33');
INSERT INTO `la_area` VALUES ('893', '江北', '33');
INSERT INTO `la_area` VALUES ('894', '沙坪坝', '33');
INSERT INTO `la_area` VALUES ('895', '九龙坡', '33');
INSERT INTO `la_area` VALUES ('896', '南岸', '33');
INSERT INTO `la_area` VALUES ('897', '北碚', '33');
INSERT INTO `la_area` VALUES ('898', '万盛', '33');
INSERT INTO `la_area` VALUES ('899', '双桥', '33');
INSERT INTO `la_area` VALUES ('900', '渝北', '33');
INSERT INTO `la_area` VALUES ('901', '两江新区', '33');
INSERT INTO `la_area` VALUES ('902', '巴南', '33');
INSERT INTO `la_area` VALUES ('903', '万州', '33');
INSERT INTO `la_area` VALUES ('904', '涪陵', '33');
INSERT INTO `la_area` VALUES ('905', '黔江', '33');
INSERT INTO `la_area` VALUES ('906', '长寿', '33');
INSERT INTO `la_area` VALUES ('907', '其他市县', '33');
INSERT INTO `la_area` VALUES ('908', '江津', '33');
INSERT INTO `la_area` VALUES ('909', '合川', '33');
INSERT INTO `la_area` VALUES ('910', '永川', '33');
INSERT INTO `la_area` VALUES ('911', '南川', '33');
INSERT INTO `la_area` VALUES ('912', '綦江', '33');
INSERT INTO `la_area` VALUES ('913', '潼南', '33');
INSERT INTO `la_area` VALUES ('914', '铜梁', '33');
INSERT INTO `la_area` VALUES ('915', '大足', '33');
INSERT INTO `la_area` VALUES ('916', '荣昌', '33');
INSERT INTO `la_area` VALUES ('917', '璧山', '33');
INSERT INTO `la_area` VALUES ('918', '梁平', '33');
INSERT INTO `la_area` VALUES ('919', '城口', '33');
INSERT INTO `la_area` VALUES ('920', '丰都', '33');
INSERT INTO `la_area` VALUES ('921', '垫江', '33');
INSERT INTO `la_area` VALUES ('922', '武隆', '33');
INSERT INTO `la_area` VALUES ('923', '忠县', '33');
INSERT INTO `la_area` VALUES ('924', '开县', '33');
INSERT INTO `la_area` VALUES ('925', '云阳', '33');
INSERT INTO `la_area` VALUES ('926', '奉节', '33');
INSERT INTO `la_area` VALUES ('927', '巫山', '33');
INSERT INTO `la_area` VALUES ('928', '巫溪', '33');
INSERT INTO `la_area` VALUES ('929', '石柱', '33');
INSERT INTO `la_area` VALUES ('930', '秀山', '33');
INSERT INTO `la_area` VALUES ('931', '酉阳', '33');
INSERT INTO `la_area` VALUES ('932', '彭水', '33');
INSERT INTO `la_area` VALUES ('933', '芙蓉', '34');
INSERT INTO `la_area` VALUES ('934', '岳麓', '34');
INSERT INTO `la_area` VALUES ('935', '天心', '34');
INSERT INTO `la_area` VALUES ('936', '雨花', '34');
INSERT INTO `la_area` VALUES ('937', '开福', '34');
INSERT INTO `la_area` VALUES ('938', '长沙县', '34');
INSERT INTO `la_area` VALUES ('939', '经济开发区', '34');
INSERT INTO `la_area` VALUES ('940', '望城', '34');
INSERT INTO `la_area` VALUES ('941', '宁乡', '34');
INSERT INTO `la_area` VALUES ('942', '浏阳', '34');
INSERT INTO `la_area` VALUES ('943', '其他', '34');
INSERT INTO `la_area` VALUES ('944', '朝阳', '35');
INSERT INTO `la_area` VALUES ('945', '南关', '35');
INSERT INTO `la_area` VALUES ('946', '宽城', '35');
INSERT INTO `la_area` VALUES ('947', '二道', '35');
INSERT INTO `la_area` VALUES ('948', '绿园', '35');
INSERT INTO `la_area` VALUES ('949', '汽车城', '35');
INSERT INTO `la_area` VALUES ('950', '高新', '35');
INSERT INTO `la_area` VALUES ('951', '经开', '35');
INSERT INTO `la_area` VALUES ('952', '净月', '35');
INSERT INTO `la_area` VALUES ('953', '双阳', '35');
INSERT INTO `la_area` VALUES ('954', '德惠', '35');
INSERT INTO `la_area` VALUES ('955', '九台', '35');
INSERT INTO `la_area` VALUES ('956', '榆树', '35');
INSERT INTO `la_area` VALUES ('957', '农安', '35');
INSERT INTO `la_area` VALUES ('958', '其他', '35');
INSERT INTO `la_area` VALUES ('959', '钟楼', '36');
INSERT INTO `la_area` VALUES ('960', '天宁', '36');
INSERT INTO `la_area` VALUES ('961', '戚墅堰', '36');
INSERT INTO `la_area` VALUES ('962', '新北', '36');
INSERT INTO `la_area` VALUES ('963', '武进', '36');
INSERT INTO `la_area` VALUES ('964', '溧阳', '36');
INSERT INTO `la_area` VALUES ('965', '金坛', '36');
INSERT INTO `la_area` VALUES ('966', '运河区', '37');
INSERT INTO `la_area` VALUES ('967', '新华区', '37');
INSERT INTO `la_area` VALUES ('968', '泊头', '37');
INSERT INTO `la_area` VALUES ('969', '任丘', '37');
INSERT INTO `la_area` VALUES ('970', '黄骅', '37');
INSERT INTO `la_area` VALUES ('971', '河间', '37');
INSERT INTO `la_area` VALUES ('972', '沧县', '37');
INSERT INTO `la_area` VALUES ('973', '青县', '37');
INSERT INTO `la_area` VALUES ('974', '东光', '37');
INSERT INTO `la_area` VALUES ('975', '海兴', '37');
INSERT INTO `la_area` VALUES ('976', '盐山', '37');
INSERT INTO `la_area` VALUES ('977', '肃宁', '37');
INSERT INTO `la_area` VALUES ('978', '南皮', '37');
INSERT INTO `la_area` VALUES ('979', '吴桥', '37');
INSERT INTO `la_area` VALUES ('980', '献县', '37');
INSERT INTO `la_area` VALUES ('981', '孟村', '37');
INSERT INTO `la_area` VALUES ('982', '红山', '38');
INSERT INTO `la_area` VALUES ('983', '元宝山', '38');
INSERT INTO `la_area` VALUES ('984', '松山', '38');
INSERT INTO `la_area` VALUES ('985', '阿鲁科尔沁', '38');
INSERT INTO `la_area` VALUES ('986', '巴林左', '38');
INSERT INTO `la_area` VALUES ('987', '巴林右', '38');
INSERT INTO `la_area` VALUES ('988', '林西', '38');
INSERT INTO `la_area` VALUES ('989', '克什克腾', '38');
INSERT INTO `la_area` VALUES ('990', '翁牛特', '38');
INSERT INTO `la_area` VALUES ('991', '喀喇沁', '38');
INSERT INTO `la_area` VALUES ('992', '宁城', '38');
INSERT INTO `la_area` VALUES ('993', '敖汉', '38');
INSERT INTO `la_area` VALUES ('994', '双桥区', '39');
INSERT INTO `la_area` VALUES ('995', '双滦区', '39');
INSERT INTO `la_area` VALUES ('996', '鹰手营子', '39');
INSERT INTO `la_area` VALUES ('997', '承德县', '39');
INSERT INTO `la_area` VALUES ('998', '兴隆', '39');
INSERT INTO `la_area` VALUES ('999', '平泉', '39');
INSERT INTO `la_area` VALUES ('1000', '滦平', '39');
INSERT INTO `la_area` VALUES ('1001', '隆化', '39');
INSERT INTO `la_area` VALUES ('1002', '丰宁', '39');
INSERT INTO `la_area` VALUES ('1003', '宽城', '39');
INSERT INTO `la_area` VALUES ('1004', '围场', '39');
INSERT INTO `la_area` VALUES ('1005', '武陵', '40');
INSERT INTO `la_area` VALUES ('1006', '鼎城', '40');
INSERT INTO `la_area` VALUES ('1007', '津市', '40');
INSERT INTO `la_area` VALUES ('1008', '安乡', '40');
INSERT INTO `la_area` VALUES ('1009', '汉寿', '40');
INSERT INTO `la_area` VALUES ('1010', '澧县', '40');
INSERT INTO `la_area` VALUES ('1011', '临澧', '40');
INSERT INTO `la_area` VALUES ('1012', '桃源', '40');
INSERT INTO `la_area` VALUES ('1013', '石门', '40');
INSERT INTO `la_area` VALUES ('1014', '城区', '41');
INSERT INTO `la_area` VALUES ('1015', '郊区', '41');
INSERT INTO `la_area` VALUES ('1016', '长治县', '41');
INSERT INTO `la_area` VALUES ('1017', '襄垣', '41');
INSERT INTO `la_area` VALUES ('1018', '屯留', '41');
INSERT INTO `la_area` VALUES ('1019', '平顺', '41');
INSERT INTO `la_area` VALUES ('1020', '黎城', '41');
INSERT INTO `la_area` VALUES ('1021', '壶关', '41');
INSERT INTO `la_area` VALUES ('1022', '长子', '41');
INSERT INTO `la_area` VALUES ('1023', '武乡', '41');
INSERT INTO `la_area` VALUES ('1024', '沁县', '41');
INSERT INTO `la_area` VALUES ('1025', '沁源', '41');
INSERT INTO `la_area` VALUES ('1026', '潞城', '41');
INSERT INTO `la_area` VALUES ('1027', '北湖', '42');
INSERT INTO `la_area` VALUES ('1028', '苏仙', '42');
INSERT INTO `la_area` VALUES ('1029', '资兴', '42');
INSERT INTO `la_area` VALUES ('1030', '桂阳', '42');
INSERT INTO `la_area` VALUES ('1031', '宜章', '42');
INSERT INTO `la_area` VALUES ('1032', '永兴', '42');
INSERT INTO `la_area` VALUES ('1033', '嘉禾', '42');
INSERT INTO `la_area` VALUES ('1034', '临武', '42');
INSERT INTO `la_area` VALUES ('1035', '汝城', '42');
INSERT INTO `la_area` VALUES ('1036', '桂东', '42');
INSERT INTO `la_area` VALUES ('1037', '安仁', '42');
INSERT INTO `la_area` VALUES ('1038', '琅琊', '43');
INSERT INTO `la_area` VALUES ('1039', '南谯', '43');
INSERT INTO `la_area` VALUES ('1040', '天长', '43');
INSERT INTO `la_area` VALUES ('1041', '明光', '43');
INSERT INTO `la_area` VALUES ('1042', '来安', '43');
INSERT INTO `la_area` VALUES ('1043', '全椒', '43');
INSERT INTO `la_area` VALUES ('1044', '定远', '43');
INSERT INTO `la_area` VALUES ('1045', '凤阳', '43');
INSERT INTO `la_area` VALUES ('1046', '居巢', '44');
INSERT INTO `la_area` VALUES ('1047', '庐江', '44');
INSERT INTO `la_area` VALUES ('1048', '无为', '44');
INSERT INTO `la_area` VALUES ('1049', '含山', '44');
INSERT INTO `la_area` VALUES ('1050', '和县', '44');
INSERT INTO `la_area` VALUES ('1051', '湘桥', '45');
INSERT INTO `la_area` VALUES ('1052', '潮安', '45');
INSERT INTO `la_area` VALUES ('1053', '饶平', '45');
INSERT INTO `la_area` VALUES ('1054', '昌吉市', '46');
INSERT INTO `la_area` VALUES ('1055', '米泉', '46');
INSERT INTO `la_area` VALUES ('1056', '阜康', '46');
INSERT INTO `la_area` VALUES ('1057', '呼图壁', '46');
INSERT INTO `la_area` VALUES ('1058', '玛纳斯', '46');
INSERT INTO `la_area` VALUES ('1059', '奇台', '46');
INSERT INTO `la_area` VALUES ('1060', '吉木萨尔', '46');
INSERT INTO `la_area` VALUES ('1061', '木垒', '46');
INSERT INTO `la_area` VALUES ('1062', '贵池', '47');
INSERT INTO `la_area` VALUES ('1063', '东至', '47');
INSERT INTO `la_area` VALUES ('1064', '石台', '47');
INSERT INTO `la_area` VALUES ('1065', '青阳', '47');
INSERT INTO `la_area` VALUES ('1066', '楚雄市', '48');
INSERT INTO `la_area` VALUES ('1067', '双柏', '48');
INSERT INTO `la_area` VALUES ('1068', '牟定', '48');
INSERT INTO `la_area` VALUES ('1069', '南华', '48');
INSERT INTO `la_area` VALUES ('1070', '姚安', '48');
INSERT INTO `la_area` VALUES ('1071', '大姚', '48');
INSERT INTO `la_area` VALUES ('1072', '永仁', '48');
INSERT INTO `la_area` VALUES ('1073', '元谋', '48');
INSERT INTO `la_area` VALUES ('1074', '武定', '48');
INSERT INTO `la_area` VALUES ('1075', '禄丰', '48');
INSERT INTO `la_area` VALUES ('1076', '江州', '49');
INSERT INTO `la_area` VALUES ('1077', '凭祥', '49');
INSERT INTO `la_area` VALUES ('1078', '扶绥', '49');
INSERT INTO `la_area` VALUES ('1079', '宁明', '49');
INSERT INTO `la_area` VALUES ('1080', '龙州', '49');
INSERT INTO `la_area` VALUES ('1081', '大新', '49');
INSERT INTO `la_area` VALUES ('1082', '天等', '49');
INSERT INTO `la_area` VALUES ('1083', '昌都县', '50');
INSERT INTO `la_area` VALUES ('1084', '江达', '50');
INSERT INTO `la_area` VALUES ('1085', '贡觉', '50');
INSERT INTO `la_area` VALUES ('1086', '类乌齐', '50');
INSERT INTO `la_area` VALUES ('1087', '丁青', '50');
INSERT INTO `la_area` VALUES ('1088', '察雅', '50');
INSERT INTO `la_area` VALUES ('1089', '八宿', '50');
INSERT INTO `la_area` VALUES ('1090', '左贡', '50');
INSERT INTO `la_area` VALUES ('1091', '芒康', '50');
INSERT INTO `la_area` VALUES ('1092', '洛隆', '50');
INSERT INTO `la_area` VALUES ('1093', '边坝', '50');
INSERT INTO `la_area` VALUES ('1094', '西岗', '51');
INSERT INTO `la_area` VALUES ('1095', '中山', '51');
INSERT INTO `la_area` VALUES ('1096', '沙河口', '51');
INSERT INTO `la_area` VALUES ('1097', '甘井子', '51');
INSERT INTO `la_area` VALUES ('1098', '高新园区', '51');
INSERT INTO `la_area` VALUES ('1099', '旅顺口', '51');
INSERT INTO `la_area` VALUES ('1100', '开发区', '51');
INSERT INTO `la_area` VALUES ('1101', '金州', '51');
INSERT INTO `la_area` VALUES ('1102', '普兰店', '51');
INSERT INTO `la_area` VALUES ('1103', '瓦房店', '51');
INSERT INTO `la_area` VALUES ('1104', '庄河', '51');
INSERT INTO `la_area` VALUES ('1105', '长海', '51');
INSERT INTO `la_area` VALUES ('1106', '莞城', '52');
INSERT INTO `la_area` VALUES ('1107', '南城', '52');
INSERT INTO `la_area` VALUES ('1108', '东城', '52');
INSERT INTO `la_area` VALUES ('1109', '万江', '52');
INSERT INTO `la_area` VALUES ('1110', '厚街', '52');
INSERT INTO `la_area` VALUES ('1111', '虎门', '52');
INSERT INTO `la_area` VALUES ('1112', '长安', '52');
INSERT INTO `la_area` VALUES ('1113', '常平', '52');
INSERT INTO `la_area` VALUES ('1114', '寮步', '52');
INSERT INTO `la_area` VALUES ('1115', '大朗', '52');
INSERT INTO `la_area` VALUES ('1116', '东坑', '52');
INSERT INTO `la_area` VALUES ('1117', '黄江', '52');
INSERT INTO `la_area` VALUES ('1118', '樟木头', '52');
INSERT INTO `la_area` VALUES ('1119', '塘厦', '52');
INSERT INTO `la_area` VALUES ('1120', '凤岗', '52');
INSERT INTO `la_area` VALUES ('1121', '清溪', '52');
INSERT INTO `la_area` VALUES ('1122', '石碣', '52');
INSERT INTO `la_area` VALUES ('1123', '石龙', '52');
INSERT INTO `la_area` VALUES ('1124', '石排', '52');
INSERT INTO `la_area` VALUES ('1125', '茶山', '52');
INSERT INTO `la_area` VALUES ('1126', '横沥', '52');
INSERT INTO `la_area` VALUES ('1127', '企石', '52');
INSERT INTO `la_area` VALUES ('1128', '桥头', '52');
INSERT INTO `la_area` VALUES ('1129', '谢岗', '52');
INSERT INTO `la_area` VALUES ('1130', '大岭山', '52');
INSERT INTO `la_area` VALUES ('1131', '松山湖', '52');
INSERT INTO `la_area` VALUES ('1132', '沙田', '52');
INSERT INTO `la_area` VALUES ('1133', '高埗', '52');
INSERT INTO `la_area` VALUES ('1134', '中堂', '52');
INSERT INTO `la_area` VALUES ('1135', '麻涌', '52');
INSERT INTO `la_area` VALUES ('1136', '望牛墩', '52');
INSERT INTO `la_area` VALUES ('1137', '洪梅', '52');
INSERT INTO `la_area` VALUES ('1138', '道滘', '52');
INSERT INTO `la_area` VALUES ('1139', '德城', '53');
INSERT INTO `la_area` VALUES ('1140', '乐陵', '53');
INSERT INTO `la_area` VALUES ('1141', '禹城', '53');
INSERT INTO `la_area` VALUES ('1142', '陵县', '53');
INSERT INTO `la_area` VALUES ('1143', '宁津', '53');
INSERT INTO `la_area` VALUES ('1144', '庆云', '53');
INSERT INTO `la_area` VALUES ('1145', '临邑', '53');
INSERT INTO `la_area` VALUES ('1146', '齐河', '53');
INSERT INTO `la_area` VALUES ('1147', '平原', '53');
INSERT INTO `la_area` VALUES ('1148', '夏津', '53');
INSERT INTO `la_area` VALUES ('1149', '武城', '53');
INSERT INTO `la_area` VALUES ('1150', '东营区', '54');
INSERT INTO `la_area` VALUES ('1151', '河口', '54');
INSERT INTO `la_area` VALUES ('1152', '垦利', '54');
INSERT INTO `la_area` VALUES ('1153', '利津', '54');
INSERT INTO `la_area` VALUES ('1154', '广饶', '54');
INSERT INTO `la_area` VALUES ('1155', '萨尔图', '55');
INSERT INTO `la_area` VALUES ('1156', '龙凤', '55');
INSERT INTO `la_area` VALUES ('1157', '让胡路', '55');
INSERT INTO `la_area` VALUES ('1158', '红岗', '55');
INSERT INTO `la_area` VALUES ('1159', '大同', '55');
INSERT INTO `la_area` VALUES ('1160', '肇州', '55');
INSERT INTO `la_area` VALUES ('1161', '肇源', '55');
INSERT INTO `la_area` VALUES ('1162', '林甸', '55');
INSERT INTO `la_area` VALUES ('1163', '杜尔伯特', '55');
INSERT INTO `la_area` VALUES ('1164', '城区', '56');
INSERT INTO `la_area` VALUES ('1165', '矿区', '56');
INSERT INTO `la_area` VALUES ('1166', '南郊', '56');
INSERT INTO `la_area` VALUES ('1167', '新荣', '56');
INSERT INTO `la_area` VALUES ('1168', '阳高', '56');
INSERT INTO `la_area` VALUES ('1169', '天镇', '56');
INSERT INTO `la_area` VALUES ('1170', '广灵', '56');
INSERT INTO `la_area` VALUES ('1171', '灵丘', '56');
INSERT INTO `la_area` VALUES ('1172', '浑源', '56');
INSERT INTO `la_area` VALUES ('1173', '左云', '56');
INSERT INTO `la_area` VALUES ('1174', '大同县', '56');
INSERT INTO `la_area` VALUES ('1175', '振兴', '57');
INSERT INTO `la_area` VALUES ('1176', '元宝', '57');
INSERT INTO `la_area` VALUES ('1177', '振安', '57');
INSERT INTO `la_area` VALUES ('1178', '东港', '57');
INSERT INTO `la_area` VALUES ('1179', '凤城', '57');
INSERT INTO `la_area` VALUES ('1180', '宽甸', '57');
INSERT INTO `la_area` VALUES ('1181', '旌阳', '58');
INSERT INTO `la_area` VALUES ('1182', '广汉', '58');
INSERT INTO `la_area` VALUES ('1183', '什邡', '58');
INSERT INTO `la_area` VALUES ('1184', '绵竹', '58');
INSERT INTO `la_area` VALUES ('1185', '罗江', '58');
INSERT INTO `la_area` VALUES ('1186', '中江', '58');
INSERT INTO `la_area` VALUES ('1187', '通川', '59');
INSERT INTO `la_area` VALUES ('1188', '万源', '59');
INSERT INTO `la_area` VALUES ('1189', '达县', '59');
INSERT INTO `la_area` VALUES ('1190', '宣汉', '59');
INSERT INTO `la_area` VALUES ('1191', '开江', '59');
INSERT INTO `la_area` VALUES ('1192', '大竹', '59');
INSERT INTO `la_area` VALUES ('1193', '渠县', '59');
INSERT INTO `la_area` VALUES ('1194', '大理市', '60');
INSERT INTO `la_area` VALUES ('1195', '祥云', '60');
INSERT INTO `la_area` VALUES ('1196', '宾川', '60');
INSERT INTO `la_area` VALUES ('1197', '弥渡', '60');
INSERT INTO `la_area` VALUES ('1198', '永平', '60');
INSERT INTO `la_area` VALUES ('1199', '云龙', '60');
INSERT INTO `la_area` VALUES ('1200', '洱源', '60');
INSERT INTO `la_area` VALUES ('1201', '剑川', '60');
INSERT INTO `la_area` VALUES ('1202', '鹤庆', '60');
INSERT INTO `la_area` VALUES ('1203', '漾濞', '60');
INSERT INTO `la_area` VALUES ('1204', '南涧', '60');
INSERT INTO `la_area` VALUES ('1205', '巍山', '60');
INSERT INTO `la_area` VALUES ('1206', '呼玛', '61');
INSERT INTO `la_area` VALUES ('1207', '塔河', '61');
INSERT INTO `la_area` VALUES ('1208', '漠河', '61');
INSERT INTO `la_area` VALUES ('1209', '加格达奇', '61');
INSERT INTO `la_area` VALUES ('1210', '松岭', '61');
INSERT INTO `la_area` VALUES ('1211', '新林', '61');
INSERT INTO `la_area` VALUES ('1212', '呼中', '61');
INSERT INTO `la_area` VALUES ('1213', '安定', '62');
INSERT INTO `la_area` VALUES ('1214', '通渭', '62');
INSERT INTO `la_area` VALUES ('1215', '陇西', '62');
INSERT INTO `la_area` VALUES ('1216', '渭源', '62');
INSERT INTO `la_area` VALUES ('1217', '临洮', '62');
INSERT INTO `la_area` VALUES ('1218', '漳县', '62');
INSERT INTO `la_area` VALUES ('1219', '岷县', '62');
INSERT INTO `la_area` VALUES ('1220', '潞西', '63');
INSERT INTO `la_area` VALUES ('1221', '瑞丽', '63');
INSERT INTO `la_area` VALUES ('1222', '梁河', '63');
INSERT INTO `la_area` VALUES ('1223', '盈江', '63');
INSERT INTO `la_area` VALUES ('1224', '陇川', '63');
INSERT INTO `la_area` VALUES ('1225', '香格里拉', '64');
INSERT INTO `la_area` VALUES ('1226', '德钦', '64');
INSERT INTO `la_area` VALUES ('1227', '维西', '64');
INSERT INTO `la_area` VALUES ('1228', '东胜', '65');
INSERT INTO `la_area` VALUES ('1229', '达拉特', '65');
INSERT INTO `la_area` VALUES ('1230', '准格尔', '65');
INSERT INTO `la_area` VALUES ('1231', '鄂托克前', '65');
INSERT INTO `la_area` VALUES ('1232', '鄂托克', '65');
INSERT INTO `la_area` VALUES ('1233', '杭锦', '65');
INSERT INTO `la_area` VALUES ('1234', '乌审', '65');
INSERT INTO `la_area` VALUES ('1235', '伊金霍洛', '65');
INSERT INTO `la_area` VALUES ('1236', '恩施市', '66');
INSERT INTO `la_area` VALUES ('1237', '利川', '66');
INSERT INTO `la_area` VALUES ('1238', '建始', '66');
INSERT INTO `la_area` VALUES ('1239', '巴东', '66');
INSERT INTO `la_area` VALUES ('1240', '宣恩', '66');
INSERT INTO `la_area` VALUES ('1241', '咸丰', '66');
INSERT INTO `la_area` VALUES ('1242', '来凤', '66');
INSERT INTO `la_area` VALUES ('1243', '鹤峰', '66');
INSERT INTO `la_area` VALUES ('1244', '鄂城', '67');
INSERT INTO `la_area` VALUES ('1245', '梁子湖', '67');
INSERT INTO `la_area` VALUES ('1246', '华容', '67');
INSERT INTO `la_area` VALUES ('1247', '鼓楼', '68');
INSERT INTO `la_area` VALUES ('1248', '台江', '68');
INSERT INTO `la_area` VALUES ('1249', '晋安', '68');
INSERT INTO `la_area` VALUES ('1250', '仓山', '68');
INSERT INTO `la_area` VALUES ('1251', '马尾', '68');
INSERT INTO `la_area` VALUES ('1252', '闽侯', '68');
INSERT INTO `la_area` VALUES ('1253', '福清', '68');
INSERT INTO `la_area` VALUES ('1254', '长乐', '68');
INSERT INTO `la_area` VALUES ('1255', '连江', '68');
INSERT INTO `la_area` VALUES ('1256', '罗源', '68');
INSERT INTO `la_area` VALUES ('1257', '闽清', '68');
INSERT INTO `la_area` VALUES ('1258', '永泰', '68');
INSERT INTO `la_area` VALUES ('1259', '平潭', '68');
INSERT INTO `la_area` VALUES ('1260', '其他', '68');
INSERT INTO `la_area` VALUES ('1261', '禅城', '69');
INSERT INTO `la_area` VALUES ('1262', '南海', '69');
INSERT INTO `la_area` VALUES ('1263', '顺德', '69');
INSERT INTO `la_area` VALUES ('1264', '三水', '69');
INSERT INTO `la_area` VALUES ('1265', '高明', '69');
INSERT INTO `la_area` VALUES ('1266', '顺城', '70');
INSERT INTO `la_area` VALUES ('1267', '新抚', '70');
INSERT INTO `la_area` VALUES ('1268', '东洲', '70');
INSERT INTO `la_area` VALUES ('1269', '望花', '70');
INSERT INTO `la_area` VALUES ('1270', '抚顺县', '70');
INSERT INTO `la_area` VALUES ('1271', '新宾', '70');
INSERT INTO `la_area` VALUES ('1272', '清原', '70');
INSERT INTO `la_area` VALUES ('1273', '颍州', '71');
INSERT INTO `la_area` VALUES ('1274', '颍东', '71');
INSERT INTO `la_area` VALUES ('1275', '颍泉', '71');
INSERT INTO `la_area` VALUES ('1276', '界首', '71');
INSERT INTO `la_area` VALUES ('1277', '临泉', '71');
INSERT INTO `la_area` VALUES ('1278', '太和', '71');
INSERT INTO `la_area` VALUES ('1279', '阜南', '71');
INSERT INTO `la_area` VALUES ('1280', '颍上', '71');
INSERT INTO `la_area` VALUES ('1281', '海州', '72');
INSERT INTO `la_area` VALUES ('1282', '新邱', '72');
INSERT INTO `la_area` VALUES ('1283', '太平', '72');
INSERT INTO `la_area` VALUES ('1284', '清河门', '72');
INSERT INTO `la_area` VALUES ('1285', '细河', '72');
INSERT INTO `la_area` VALUES ('1286', '阜新县', '72');
INSERT INTO `la_area` VALUES ('1287', '彰武', '72');
INSERT INTO `la_area` VALUES ('1288', '临川', '73');
INSERT INTO `la_area` VALUES ('1289', '南城', '73');
INSERT INTO `la_area` VALUES ('1290', '黎川', '73');
INSERT INTO `la_area` VALUES ('1291', '南丰', '73');
INSERT INTO `la_area` VALUES ('1292', '崇仁', '73');
INSERT INTO `la_area` VALUES ('1293', '乐安', '73');
INSERT INTO `la_area` VALUES ('1294', '宜黄', '73');
INSERT INTO `la_area` VALUES ('1295', '金溪', '73');
INSERT INTO `la_area` VALUES ('1296', '资溪', '73');
INSERT INTO `la_area` VALUES ('1297', '东乡', '73');
INSERT INTO `la_area` VALUES ('1298', '广昌', '73');
INSERT INTO `la_area` VALUES ('1299', '港口', '74');
INSERT INTO `la_area` VALUES ('1300', '防城', '74');
INSERT INTO `la_area` VALUES ('1301', '东兴', '74');
INSERT INTO `la_area` VALUES ('1302', '上思', '74');
INSERT INTO `la_area` VALUES ('1303', '天河', '75');
INSERT INTO `la_area` VALUES ('1304', '海珠', '75');
INSERT INTO `la_area` VALUES ('1305', '越秀', '75');
INSERT INTO `la_area` VALUES ('1306', '白云', '75');
INSERT INTO `la_area` VALUES ('1307', '荔湾', '75');
INSERT INTO `la_area` VALUES ('1308', '番禺', '75');
INSERT INTO `la_area` VALUES ('1309', '黄埔', '75');
INSERT INTO `la_area` VALUES ('1310', '花都', '75');
INSERT INTO `la_area` VALUES ('1311', '萝岗', '75');
INSERT INTO `la_area` VALUES ('1312', '南沙', '75');
INSERT INTO `la_area` VALUES ('1313', '经济开发区', '75');
INSERT INTO `la_area` VALUES ('1314', '增城', '75');
INSERT INTO `la_area` VALUES ('1315', '从化', '75');
INSERT INTO `la_area` VALUES ('1316', '南明', '76');
INSERT INTO `la_area` VALUES ('1317', '云岩', '76');
INSERT INTO `la_area` VALUES ('1318', '小河', '76');
INSERT INTO `la_area` VALUES ('1319', '花溪', '76');
INSERT INTO `la_area` VALUES ('1320', '乌当', '76');
INSERT INTO `la_area` VALUES ('1321', '白云', '76');
INSERT INTO `la_area` VALUES ('1322', '金阳新区', '76');
INSERT INTO `la_area` VALUES ('1323', '小河片', '76');
INSERT INTO `la_area` VALUES ('1324', '清镇', '76');
INSERT INTO `la_area` VALUES ('1325', '修文', '76');
INSERT INTO `la_area` VALUES ('1326', '息烽', '76');
INSERT INTO `la_area` VALUES ('1327', '开阳', '76');
INSERT INTO `la_area` VALUES ('1328', '象山', '77');
INSERT INTO `la_area` VALUES ('1329', '秀峰', '77');
INSERT INTO `la_area` VALUES ('1330', '叠彩', '77');
INSERT INTO `la_area` VALUES ('1331', '七星', '77');
INSERT INTO `la_area` VALUES ('1332', '雁山', '77');
INSERT INTO `la_area` VALUES ('1333', '阳朔', '77');
INSERT INTO `la_area` VALUES ('1334', '临桂', '77');
INSERT INTO `la_area` VALUES ('1335', '灵川', '77');
INSERT INTO `la_area` VALUES ('1336', '兴安', '77');
INSERT INTO `la_area` VALUES ('1337', '全州', '77');
INSERT INTO `la_area` VALUES ('1338', '资源', '77');
INSERT INTO `la_area` VALUES ('1339', '荔浦', '77');
INSERT INTO `la_area` VALUES ('1340', '平乐', '77');
INSERT INTO `la_area` VALUES ('1341', '恭城', '77');
INSERT INTO `la_area` VALUES ('1342', '永福', '77');
INSERT INTO `la_area` VALUES ('1343', '龙胜', '77');
INSERT INTO `la_area` VALUES ('1344', '灌阳', '77');
INSERT INTO `la_area` VALUES ('1345', '章贡', '78');
INSERT INTO `la_area` VALUES ('1346', '瑞金', '78');
INSERT INTO `la_area` VALUES ('1347', '南康', '78');
INSERT INTO `la_area` VALUES ('1348', '赣县', '78');
INSERT INTO `la_area` VALUES ('1349', '信丰', '78');
INSERT INTO `la_area` VALUES ('1350', '大余', '78');
INSERT INTO `la_area` VALUES ('1351', '上犹', '78');
INSERT INTO `la_area` VALUES ('1352', '崇义', '78');
INSERT INTO `la_area` VALUES ('1353', '安远', '78');
INSERT INTO `la_area` VALUES ('1354', '龙南', '78');
INSERT INTO `la_area` VALUES ('1355', '定南', '78');
INSERT INTO `la_area` VALUES ('1356', '全南', '78');
INSERT INTO `la_area` VALUES ('1357', '宁都', '78');
INSERT INTO `la_area` VALUES ('1358', '于都', '78');
INSERT INTO `la_area` VALUES ('1359', '兴国', '78');
INSERT INTO `la_area` VALUES ('1360', '会昌', '78');
INSERT INTO `la_area` VALUES ('1361', '寻乌', '78');
INSERT INTO `la_area` VALUES ('1362', '石城', '78');
INSERT INTO `la_area` VALUES ('1363', '市中', '79');
INSERT INTO `la_area` VALUES ('1364', '元坝', '79');
INSERT INTO `la_area` VALUES ('1365', '朝天', '79');
INSERT INTO `la_area` VALUES ('1366', '旺苍', '79');
INSERT INTO `la_area` VALUES ('1367', '青川', '79');
INSERT INTO `la_area` VALUES ('1368', '剑阁', '79');
INSERT INTO `la_area` VALUES ('1369', '苍溪', '79');
INSERT INTO `la_area` VALUES ('1370', '广安区', '80');
INSERT INTO `la_area` VALUES ('1371', '华蓥', '80');
INSERT INTO `la_area` VALUES ('1372', '岳池', '80');
INSERT INTO `la_area` VALUES ('1373', '武胜', '80');
INSERT INTO `la_area` VALUES ('1374', '邻水', '80');
INSERT INTO `la_area` VALUES ('1375', '广安城南', '80');
INSERT INTO `la_area` VALUES ('1376', '广安城北', '80');
INSERT INTO `la_area` VALUES ('1377', '港北', '81');
INSERT INTO `la_area` VALUES ('1378', '港南', '81');
INSERT INTO `la_area` VALUES ('1379', '覃塘', '81');
INSERT INTO `la_area` VALUES ('1380', '桂平', '81');
INSERT INTO `la_area` VALUES ('1381', '平南', '81');
INSERT INTO `la_area` VALUES ('1382', '原州', '82');
INSERT INTO `la_area` VALUES ('1383', '西吉', '82');
INSERT INTO `la_area` VALUES ('1384', '隆德', '82');
INSERT INTO `la_area` VALUES ('1385', '泾源', '82');
INSERT INTO `la_area` VALUES ('1386', '彭阳', '82');
INSERT INTO `la_area` VALUES ('1387', '合作', '83');
INSERT INTO `la_area` VALUES ('1388', '临潭', '83');
INSERT INTO `la_area` VALUES ('1389', '卓尼', '83');
INSERT INTO `la_area` VALUES ('1390', '舟曲', '83');
INSERT INTO `la_area` VALUES ('1391', '迭部', '83');
INSERT INTO `la_area` VALUES ('1392', '玛曲', '83');
INSERT INTO `la_area` VALUES ('1393', '碌曲', '83');
INSERT INTO `la_area` VALUES ('1394', '夏河', '83');
INSERT INTO `la_area` VALUES ('1395', '康定', '84');
INSERT INTO `la_area` VALUES ('1396', '泸定', '84');
INSERT INTO `la_area` VALUES ('1397', '丹巴', '84');
INSERT INTO `la_area` VALUES ('1398', '九龙', '84');
INSERT INTO `la_area` VALUES ('1399', '雅江', '84');
INSERT INTO `la_area` VALUES ('1400', '道孚', '84');
INSERT INTO `la_area` VALUES ('1401', '炉霍', '84');
INSERT INTO `la_area` VALUES ('1402', '甘孜县', '84');
INSERT INTO `la_area` VALUES ('1403', '新龙', '84');
INSERT INTO `la_area` VALUES ('1404', '德格', '84');
INSERT INTO `la_area` VALUES ('1405', '白玉', '84');
INSERT INTO `la_area` VALUES ('1406', '石渠', '84');
INSERT INTO `la_area` VALUES ('1407', '色达', '84');
INSERT INTO `la_area` VALUES ('1408', '理塘', '84');
INSERT INTO `la_area` VALUES ('1409', '巴塘', '84');
INSERT INTO `la_area` VALUES ('1410', '乡城', '84');
INSERT INTO `la_area` VALUES ('1411', '稻城', '84');
INSERT INTO `la_area` VALUES ('1412', '得荣', '84');
INSERT INTO `la_area` VALUES ('1413', '玛沁', '85');
INSERT INTO `la_area` VALUES ('1414', '班玛', '85');
INSERT INTO `la_area` VALUES ('1415', '甘德', '85');
INSERT INTO `la_area` VALUES ('1416', '达日', '85');
INSERT INTO `la_area` VALUES ('1417', '久治', '85');
INSERT INTO `la_area` VALUES ('1418', '玛多', '85');
INSERT INTO `la_area` VALUES ('1419', '拱墅', '86');
INSERT INTO `la_area` VALUES ('1420', '西湖', '86');
INSERT INTO `la_area` VALUES ('1421', '上城', '86');
INSERT INTO `la_area` VALUES ('1422', '下城', '86');
INSERT INTO `la_area` VALUES ('1423', '江干', '86');
INSERT INTO `la_area` VALUES ('1424', '滨江', '86');
INSERT INTO `la_area` VALUES ('1425', '萧山', '86');
INSERT INTO `la_area` VALUES ('1426', '余杭', '86');
INSERT INTO `la_area` VALUES ('1427', '临安', '86');
INSERT INTO `la_area` VALUES ('1428', '富阳', '86');
INSERT INTO `la_area` VALUES ('1429', '桐庐', '86');
INSERT INTO `la_area` VALUES ('1430', '建德', '86');
INSERT INTO `la_area` VALUES ('1431', '淳安', '86');
INSERT INTO `la_area` VALUES ('1432', '南岗', '87');
INSERT INTO `la_area` VALUES ('1433', '道里', '87');
INSERT INTO `la_area` VALUES ('1434', '道外', '87');
INSERT INTO `la_area` VALUES ('1435', '香坊', '87');
INSERT INTO `la_area` VALUES ('1436', '江北', '87');
INSERT INTO `la_area` VALUES ('1437', '开发区', '87');
INSERT INTO `la_area` VALUES ('1438', '平房', '87');
INSERT INTO `la_area` VALUES ('1439', '阿城', '87');
INSERT INTO `la_area` VALUES ('1440', '双城', '87');
INSERT INTO `la_area` VALUES ('1441', '尚志', '87');
INSERT INTO `la_area` VALUES ('1442', '五常', '87');
INSERT INTO `la_area` VALUES ('1443', '依兰', '87');
INSERT INTO `la_area` VALUES ('1444', '方正', '87');
INSERT INTO `la_area` VALUES ('1445', '宾县', '87');
INSERT INTO `la_area` VALUES ('1446', '巴彦', '87');
INSERT INTO `la_area` VALUES ('1447', '木兰', '87');
INSERT INTO `la_area` VALUES ('1448', '通河', '87');
INSERT INTO `la_area` VALUES ('1449', '延寿', '87');
INSERT INTO `la_area` VALUES ('1450', '庐阳', '88');
INSERT INTO `la_area` VALUES ('1451', '瑶海', '88');
INSERT INTO `la_area` VALUES ('1452', '蜀山', '88');
INSERT INTO `la_area` VALUES ('1453', '包河', '88');
INSERT INTO `la_area` VALUES ('1454', '经开', '88');
INSERT INTO `la_area` VALUES ('1455', '高新', '88');
INSERT INTO `la_area` VALUES ('1456', '新站', '88');
INSERT INTO `la_area` VALUES ('1457', '政务', '88');
INSERT INTO `la_area` VALUES ('1458', '滨湖', '88');
INSERT INTO `la_area` VALUES ('1459', '肥东', '88');
INSERT INTO `la_area` VALUES ('1460', '肥西', '88');
INSERT INTO `la_area` VALUES ('1461', '长丰', '88');
INSERT INTO `la_area` VALUES ('1462', '合肥房地产网', '88');
INSERT INTO `la_area` VALUES ('1463', '新城', '89');
INSERT INTO `la_area` VALUES ('1464', '赛罕', '89');
INSERT INTO `la_area` VALUES ('1465', '回民', '89');
INSERT INTO `la_area` VALUES ('1466', '玉泉', '89');
INSERT INTO `la_area` VALUES ('1467', '金桥开发区', '89');
INSERT INTO `la_area` VALUES ('1468', '如意开发区', '89');
INSERT INTO `la_area` VALUES ('1469', '金川开发区', '89');
INSERT INTO `la_area` VALUES ('1470', '金山开发区', '89');
INSERT INTO `la_area` VALUES ('1471', '土默特左', '89');
INSERT INTO `la_area` VALUES ('1472', '托克托', '89');
INSERT INTO `la_area` VALUES ('1473', '和林格尔', '89');
INSERT INTO `la_area` VALUES ('1474', '清水河', '89');
INSERT INTO `la_area` VALUES ('1475', '武川', '89');
INSERT INTO `la_area` VALUES ('1476', '龙华', '90');
INSERT INTO `la_area` VALUES ('1477', '美兰', '90');
INSERT INTO `la_area` VALUES ('1478', '秀英', '90');
INSERT INTO `la_area` VALUES ('1479', '琼山', '90');
INSERT INTO `la_area` VALUES ('1480', '其他', '90');
INSERT INTO `la_area` VALUES ('1481', '丛台区', '91');
INSERT INTO `la_area` VALUES ('1482', '邯山区', '91');
INSERT INTO `la_area` VALUES ('1483', '复兴区', '91');
INSERT INTO `la_area` VALUES ('1484', '峰峰矿区', '91');
INSERT INTO `la_area` VALUES ('1485', '武安区', '91');
INSERT INTO `la_area` VALUES ('1486', '邯郸县', '91');
INSERT INTO `la_area` VALUES ('1487', '临漳', '91');
INSERT INTO `la_area` VALUES ('1488', '成安', '91');
INSERT INTO `la_area` VALUES ('1489', '大名', '91');
INSERT INTO `la_area` VALUES ('1490', '涉县', '91');
INSERT INTO `la_area` VALUES ('1491', '磁县', '91');
INSERT INTO `la_area` VALUES ('1492', '肥乡', '91');
INSERT INTO `la_area` VALUES ('1493', '永年', '91');
INSERT INTO `la_area` VALUES ('1494', '邱县', '91');
INSERT INTO `la_area` VALUES ('1495', '鸡泽', '91');
INSERT INTO `la_area` VALUES ('1496', '广平', '91');
INSERT INTO `la_area` VALUES ('1497', '馆陶', '91');
INSERT INTO `la_area` VALUES ('1498', '魏县', '91');
INSERT INTO `la_area` VALUES ('1499', '曲周', '91');
INSERT INTO `la_area` VALUES ('1500', '惠城', '92');
INSERT INTO `la_area` VALUES ('1501', '惠阳', '92');
INSERT INTO `la_area` VALUES ('1502', '博罗', '92');
INSERT INTO `la_area` VALUES ('1503', '惠东', '92');
INSERT INTO `la_area` VALUES ('1504', '龙门', '92');
INSERT INTO `la_area` VALUES ('1505', '大亚湾区', '92');
INSERT INTO `la_area` VALUES ('1506', '仲恺区', '92');
INSERT INTO `la_area` VALUES ('1507', '牡丹', '93');
INSERT INTO `la_area` VALUES ('1508', '曹县', '93');
INSERT INTO `la_area` VALUES ('1509', '单县', '93');
INSERT INTO `la_area` VALUES ('1510', '成武', '93');
INSERT INTO `la_area` VALUES ('1511', '巨野', '93');
INSERT INTO `la_area` VALUES ('1512', '郓城', '93');
INSERT INTO `la_area` VALUES ('1513', '鄄城', '93');
INSERT INTO `la_area` VALUES ('1514', '定陶', '93');
INSERT INTO `la_area` VALUES ('1515', '东明', '93');
INSERT INTO `la_area` VALUES ('1516', '桃城区', '94');
INSERT INTO `la_area` VALUES ('1517', '开发区', '94');
INSERT INTO `la_area` VALUES ('1518', '冀州', '94');
INSERT INTO `la_area` VALUES ('1519', '深州', '94');
INSERT INTO `la_area` VALUES ('1520', '枣强', '94');
INSERT INTO `la_area` VALUES ('1521', '武邑', '94');
INSERT INTO `la_area` VALUES ('1522', '武强', '94');
INSERT INTO `la_area` VALUES ('1523', '饶阳', '94');
INSERT INTO `la_area` VALUES ('1524', '安平', '94');
INSERT INTO `la_area` VALUES ('1525', '故城', '94');
INSERT INTO `la_area` VALUES ('1526', '景县', '94');
INSERT INTO `la_area` VALUES ('1527', '阜城', '94');
INSERT INTO `la_area` VALUES ('1528', '清河', '95');
INSERT INTO `la_area` VALUES ('1529', '清浦', '95');
INSERT INTO `la_area` VALUES ('1530', '楚州', '95');
INSERT INTO `la_area` VALUES ('1531', '淮阴', '95');
INSERT INTO `la_area` VALUES ('1532', '涟水', '95');
INSERT INTO `la_area` VALUES ('1533', '洪泽', '95');
INSERT INTO `la_area` VALUES ('1534', '盱眙', '95');
INSERT INTO `la_area` VALUES ('1535', '金湖', '95');
INSERT INTO `la_area` VALUES ('1536', '珠晖', '96');
INSERT INTO `la_area` VALUES ('1537', '雁峰', '96');
INSERT INTO `la_area` VALUES ('1538', '石鼓', '96');
INSERT INTO `la_area` VALUES ('1539', '蒸湘', '96');
INSERT INTO `la_area` VALUES ('1540', '南岳', '96');
INSERT INTO `la_area` VALUES ('1541', '耒阳', '96');
INSERT INTO `la_area` VALUES ('1542', '常宁', '96');
INSERT INTO `la_area` VALUES ('1543', '衡阳县', '96');
INSERT INTO `la_area` VALUES ('1544', '衡南', '96');
INSERT INTO `la_area` VALUES ('1545', '衡山', '96');
INSERT INTO `la_area` VALUES ('1546', '衡东', '96');
INSERT INTO `la_area` VALUES ('1547', '祁东', '96');
INSERT INTO `la_area` VALUES ('1548', '龙港', '97');
INSERT INTO `la_area` VALUES ('1549', '连山', '97');
INSERT INTO `la_area` VALUES ('1550', '南票', '97');
INSERT INTO `la_area` VALUES ('1551', '兴城', '97');
INSERT INTO `la_area` VALUES ('1552', '绥中', '97');
INSERT INTO `la_area` VALUES ('1553', '建昌', '97');
INSERT INTO `la_area` VALUES ('1554', '田家庵', '98');
INSERT INTO `la_area` VALUES ('1555', '大通', '98');
INSERT INTO `la_area` VALUES ('1556', '谢家集', '98');
INSERT INTO `la_area` VALUES ('1557', '八公山', '98');
INSERT INTO `la_area` VALUES ('1558', '潘集', '98');
INSERT INTO `la_area` VALUES ('1559', '凤台', '98');
INSERT INTO `la_area` VALUES ('1560', '汉台', '99');
INSERT INTO `la_area` VALUES ('1561', '南郑', '99');
INSERT INTO `la_area` VALUES ('1562', '城固', '99');
INSERT INTO `la_area` VALUES ('1563', '洋县', '99');
INSERT INTO `la_area` VALUES ('1564', '西乡', '99');
INSERT INTO `la_area` VALUES ('1565', '勉县', '99');
INSERT INTO `la_area` VALUES ('1566', '宁强', '99');
INSERT INTO `la_area` VALUES ('1567', '略阳', '99');
INSERT INTO `la_area` VALUES ('1568', '镇巴', '99');
INSERT INTO `la_area` VALUES ('1569', '留坝', '99');
INSERT INTO `la_area` VALUES ('1570', '佛坪', '99');
INSERT INTO `la_area` VALUES ('1571', '鹤城', '100');
INSERT INTO `la_area` VALUES ('1572', '洪江', '100');
INSERT INTO `la_area` VALUES ('1573', '沅陵', '100');
INSERT INTO `la_area` VALUES ('1574', '辰溪', '100');
INSERT INTO `la_area` VALUES ('1575', '溆浦', '100');
INSERT INTO `la_area` VALUES ('1576', '中方', '100');
INSERT INTO `la_area` VALUES ('1577', '会同', '100');
INSERT INTO `la_area` VALUES ('1578', '麻阳', '100');
INSERT INTO `la_area` VALUES ('1579', '新晃', '100');
INSERT INTO `la_area` VALUES ('1580', '芷江', '100');
INSERT INTO `la_area` VALUES ('1581', '靖州', '100');
INSERT INTO `la_area` VALUES ('1582', '通道', '100');
INSERT INTO `la_area` VALUES ('1583', '相山', '101');
INSERT INTO `la_area` VALUES ('1584', '杜集', '101');
INSERT INTO `la_area` VALUES ('1585', '烈山', '101');
INSERT INTO `la_area` VALUES ('1586', '濉溪', '101');
INSERT INTO `la_area` VALUES ('1587', '黄州', '102');
INSERT INTO `la_area` VALUES ('1588', '麻城', '102');
INSERT INTO `la_area` VALUES ('1589', '武穴', '102');
INSERT INTO `la_area` VALUES ('1590', '团风', '102');
INSERT INTO `la_area` VALUES ('1591', '红安', '102');
INSERT INTO `la_area` VALUES ('1592', '罗田', '102');
INSERT INTO `la_area` VALUES ('1593', '英山', '102');
INSERT INTO `la_area` VALUES ('1594', '浠水', '102');
INSERT INTO `la_area` VALUES ('1595', '蕲春', '102');
INSERT INTO `la_area` VALUES ('1596', '黄梅', '102');
INSERT INTO `la_area` VALUES ('1597', '吴兴', '103');
INSERT INTO `la_area` VALUES ('1598', '南浔', '103');
INSERT INTO `la_area` VALUES ('1599', '德清', '103');
INSERT INTO `la_area` VALUES ('1600', '长兴', '103');
INSERT INTO `la_area` VALUES ('1601', '安吉', '103');
INSERT INTO `la_area` VALUES ('1602', '黄石港', '104');
INSERT INTO `la_area` VALUES ('1603', '西塞山', '104');
INSERT INTO `la_area` VALUES ('1604', '下陆', '104');
INSERT INTO `la_area` VALUES ('1605', '铁山', '104');
INSERT INTO `la_area` VALUES ('1606', '大冶', '104');
INSERT INTO `la_area` VALUES ('1607', '阳新', '104');
INSERT INTO `la_area` VALUES ('1608', '海拉尔', '105');
INSERT INTO `la_area` VALUES ('1609', '满洲里', '105');
INSERT INTO `la_area` VALUES ('1610', '牙克石', '105');
INSERT INTO `la_area` VALUES ('1611', '扎兰屯', '105');
INSERT INTO `la_area` VALUES ('1612', '额尔古纳', '105');
INSERT INTO `la_area` VALUES ('1613', '根河', '105');
INSERT INTO `la_area` VALUES ('1614', '阿荣', '105');
INSERT INTO `la_area` VALUES ('1615', '鄂伦春自治', '105');
INSERT INTO `la_area` VALUES ('1616', '鄂温克族自治', '105');
INSERT INTO `la_area` VALUES ('1617', '陈巴尔虎', '105');
INSERT INTO `la_area` VALUES ('1618', '新巴尔虎左', '105');
INSERT INTO `la_area` VALUES ('1619', '新巴尔虎右', '105');
INSERT INTO `la_area` VALUES ('1620', '莫力达瓦达翰尔族', '105');
INSERT INTO `la_area` VALUES ('1621', '源城', '106');
INSERT INTO `la_area` VALUES ('1622', '紫金', '106');
INSERT INTO `la_area` VALUES ('1623', '龙川', '106');
INSERT INTO `la_area` VALUES ('1624', '连平', '106');
INSERT INTO `la_area` VALUES ('1625', '和平', '106');
INSERT INTO `la_area` VALUES ('1626', '东源', '106');
INSERT INTO `la_area` VALUES ('1627', '淇滨', '107');
INSERT INTO `la_area` VALUES ('1628', '山城', '107');
INSERT INTO `la_area` VALUES ('1629', '鹤山', '107');
INSERT INTO `la_area` VALUES ('1630', '浚县', '107');
INSERT INTO `la_area` VALUES ('1631', '淇县', '107');
INSERT INTO `la_area` VALUES ('1632', '兴山', '108');
INSERT INTO `la_area` VALUES ('1633', '向阳', '108');
INSERT INTO `la_area` VALUES ('1634', '工农', '108');
INSERT INTO `la_area` VALUES ('1635', '南山', '108');
INSERT INTO `la_area` VALUES ('1636', '兴安', '108');
INSERT INTO `la_area` VALUES ('1637', '东山', '108');
INSERT INTO `la_area` VALUES ('1638', '萝北', '108');
INSERT INTO `la_area` VALUES ('1639', '绥滨', '108');
INSERT INTO `la_area` VALUES ('1640', '屯溪', '109');
INSERT INTO `la_area` VALUES ('1641', '黄山区', '109');
INSERT INTO `la_area` VALUES ('1642', '徽州', '109');
INSERT INTO `la_area` VALUES ('1643', '歙县', '109');
INSERT INTO `la_area` VALUES ('1644', '休宁', '109');
INSERT INTO `la_area` VALUES ('1645', '黟县', '109');
INSERT INTO `la_area` VALUES ('1646', '祁门', '109');
INSERT INTO `la_area` VALUES ('1647', '蒙自', '110');
INSERT INTO `la_area` VALUES ('1648', '个旧', '110');
INSERT INTO `la_area` VALUES ('1649', '开远', '110');
INSERT INTO `la_area` VALUES ('1650', '绿春', '110');
INSERT INTO `la_area` VALUES ('1651', '建水', '110');
INSERT INTO `la_area` VALUES ('1652', '石屏', '110');
INSERT INTO `la_area` VALUES ('1653', '弥勒', '110');
INSERT INTO `la_area` VALUES ('1654', '泸西', '110');
INSERT INTO `la_area` VALUES ('1655', '元阳', '110');
INSERT INTO `la_area` VALUES ('1656', '红河县', '110');
INSERT INTO `la_area` VALUES ('1657', '金平', '110');
INSERT INTO `la_area` VALUES ('1658', '河口', '110');
INSERT INTO `la_area` VALUES ('1659', '屏边', '110');
INSERT INTO `la_area` VALUES ('1660', '金城江', '111');
INSERT INTO `la_area` VALUES ('1661', '宜州', '111');
INSERT INTO `la_area` VALUES ('1662', '南丹', '111');
INSERT INTO `la_area` VALUES ('1663', '天峨', '111');
INSERT INTO `la_area` VALUES ('1664', '凤山', '111');
INSERT INTO `la_area` VALUES ('1665', '东兰', '111');
INSERT INTO `la_area` VALUES ('1666', '罗城', '111');
INSERT INTO `la_area` VALUES ('1667', '环江', '111');
INSERT INTO `la_area` VALUES ('1668', '巴马', '111');
INSERT INTO `la_area` VALUES ('1669', '都安', '111');
INSERT INTO `la_area` VALUES ('1670', '大化', '111');
INSERT INTO `la_area` VALUES ('1671', '哈密市', '112');
INSERT INTO `la_area` VALUES ('1672', '伊吾', '112');
INSERT INTO `la_area` VALUES ('1673', '巴里坤', '112');
INSERT INTO `la_area` VALUES ('1674', '爱辉', '113');
INSERT INTO `la_area` VALUES ('1675', '北安', '113');
INSERT INTO `la_area` VALUES ('1676', '五大连池', '113');
INSERT INTO `la_area` VALUES ('1677', '嫩江', '113');
INSERT INTO `la_area` VALUES ('1678', '逊克', '113');
INSERT INTO `la_area` VALUES ('1679', '孙吴', '113');
INSERT INTO `la_area` VALUES ('1680', '八步', '114');
INSERT INTO `la_area` VALUES ('1681', '昭平', '114');
INSERT INTO `la_area` VALUES ('1682', '钟山', '114');
INSERT INTO `la_area` VALUES ('1683', '富川', '114');
INSERT INTO `la_area` VALUES ('1684', '德令哈', '115');
INSERT INTO `la_area` VALUES ('1685', '格尔木', '115');
INSERT INTO `la_area` VALUES ('1686', '乌兰', '115');
INSERT INTO `la_area` VALUES ('1687', '都兰', '115');
INSERT INTO `la_area` VALUES ('1688', '天峻', '115');
INSERT INTO `la_area` VALUES ('1689', '冷湖行委', '115');
INSERT INTO `la_area` VALUES ('1690', '大柴旦行委', '115');
INSERT INTO `la_area` VALUES ('1691', '茫崖行委', '115');
INSERT INTO `la_area` VALUES ('1692', '和田市', '116');
INSERT INTO `la_area` VALUES ('1693', '和田县', '116');
INSERT INTO `la_area` VALUES ('1694', '墨玉', '116');
INSERT INTO `la_area` VALUES ('1695', '皮山', '116');
INSERT INTO `la_area` VALUES ('1696', '洛浦', '116');
INSERT INTO `la_area` VALUES ('1697', '策勒', '116');
INSERT INTO `la_area` VALUES ('1698', '于田', '116');
INSERT INTO `la_area` VALUES ('1699', '民丰', '116');
INSERT INTO `la_area` VALUES ('1700', '海晏', '117');
INSERT INTO `la_area` VALUES ('1701', '祁连', '117');
INSERT INTO `la_area` VALUES ('1702', '刚察', '117');
INSERT INTO `la_area` VALUES ('1703', '门源', '117');
INSERT INTO `la_area` VALUES ('1704', '平安', '118');
INSERT INTO `la_area` VALUES ('1705', '乐都', '118');
INSERT INTO `la_area` VALUES ('1706', '民和', '118');
INSERT INTO `la_area` VALUES ('1707', '互助', '118');
INSERT INTO `la_area` VALUES ('1708', '化隆', '118');
INSERT INTO `la_area` VALUES ('1709', '循化', '118');
INSERT INTO `la_area` VALUES ('1710', '同仁', '119');
INSERT INTO `la_area` VALUES ('1711', '尖扎', '119');
INSERT INTO `la_area` VALUES ('1712', '泽库', '119');
INSERT INTO `la_area` VALUES ('1713', '河南', '119');
INSERT INTO `la_area` VALUES ('1714', '历下', '120');
INSERT INTO `la_area` VALUES ('1715', '市中', '120');
INSERT INTO `la_area` VALUES ('1716', '天桥', '120');
INSERT INTO `la_area` VALUES ('1717', '历城', '120');
INSERT INTO `la_area` VALUES ('1718', '槐荫', '120');
INSERT INTO `la_area` VALUES ('1719', '高新', '120');
INSERT INTO `la_area` VALUES ('1720', '长清', '120');
INSERT INTO `la_area` VALUES ('1721', '平阴', '120');
INSERT INTO `la_area` VALUES ('1722', '章丘', '120');
INSERT INTO `la_area` VALUES ('1723', '济阳', '120');
INSERT INTO `la_area` VALUES ('1724', '商河', '120');
INSERT INTO `la_area` VALUES ('1725', '其他', '120');
INSERT INTO `la_area` VALUES ('1726', '市中', '121');
INSERT INTO `la_area` VALUES ('1727', '任城', '121');
INSERT INTO `la_area` VALUES ('1728', '曲阜', '121');
INSERT INTO `la_area` VALUES ('1729', '兖州', '121');
INSERT INTO `la_area` VALUES ('1730', '邹城', '121');
INSERT INTO `la_area` VALUES ('1731', '微山', '121');
INSERT INTO `la_area` VALUES ('1732', '鱼台', '121');
INSERT INTO `la_area` VALUES ('1733', '金乡', '121');
INSERT INTO `la_area` VALUES ('1734', '嘉祥', '121');
INSERT INTO `la_area` VALUES ('1735', '汶上', '121');
INSERT INTO `la_area` VALUES ('1736', '泗水', '121');
INSERT INTO `la_area` VALUES ('1737', '梁山', '121');
INSERT INTO `la_area` VALUES ('1738', '船营区', '122');
INSERT INTO `la_area` VALUES ('1739', '昌邑区', '122');
INSERT INTO `la_area` VALUES ('1740', '龙潭区', '122');
INSERT INTO `la_area` VALUES ('1741', '丰满区', '122');
INSERT INTO `la_area` VALUES ('1742', '经开区', '122');
INSERT INTO `la_area` VALUES ('1743', '高新区', '122');
INSERT INTO `la_area` VALUES ('1744', '蛟河', '122');
INSERT INTO `la_area` VALUES ('1745', '桦甸', '122');
INSERT INTO `la_area` VALUES ('1746', '舒兰', '122');
INSERT INTO `la_area` VALUES ('1747', '磐石', '122');
INSERT INTO `la_area` VALUES ('1748', '永吉', '122');
INSERT INTO `la_area` VALUES ('1749', '太和', '123');
INSERT INTO `la_area` VALUES ('1750', '古塔', '123');
INSERT INTO `la_area` VALUES ('1751', '凌河', '123');
INSERT INTO `la_area` VALUES ('1752', '凌海', '123');
INSERT INTO `la_area` VALUES ('1753', '北宁', '123');
INSERT INTO `la_area` VALUES ('1754', '黑山', '123');
INSERT INTO `la_area` VALUES ('1755', '义县', '123');
INSERT INTO `la_area` VALUES ('1756', '婺城', '124');
INSERT INTO `la_area` VALUES ('1757', '金东', '124');
INSERT INTO `la_area` VALUES ('1758', '兰溪', '124');
INSERT INTO `la_area` VALUES ('1759', '义乌', '124');
INSERT INTO `la_area` VALUES ('1760', '东阳', '124');
INSERT INTO `la_area` VALUES ('1761', '永康', '124');
INSERT INTO `la_area` VALUES ('1762', '武义', '124');
INSERT INTO `la_area` VALUES ('1763', '浦江', '124');
INSERT INTO `la_area` VALUES ('1764', '磐安', '124');
INSERT INTO `la_area` VALUES ('1765', '南湖', '125');
INSERT INTO `la_area` VALUES ('1766', '秀洲', '125');
INSERT INTO `la_area` VALUES ('1767', '海宁', '125');
INSERT INTO `la_area` VALUES ('1768', '平湖', '125');
INSERT INTO `la_area` VALUES ('1769', '桐乡', '125');
INSERT INTO `la_area` VALUES ('1770', '嘉善', '125');
INSERT INTO `la_area` VALUES ('1771', '海盐', '125');
INSERT INTO `la_area` VALUES ('1772', '经济开发区', '125');
INSERT INTO `la_area` VALUES ('1773', '江海', '126');
INSERT INTO `la_area` VALUES ('1774', '蓬江', '126');
INSERT INTO `la_area` VALUES ('1775', '新会', '126');
INSERT INTO `la_area` VALUES ('1776', '台山', '126');
INSERT INTO `la_area` VALUES ('1777', '开平', '126');
INSERT INTO `la_area` VALUES ('1778', '鹤山', '126');
INSERT INTO `la_area` VALUES ('1779', '恩平', '126');
INSERT INTO `la_area` VALUES ('1780', '沙市', '127');
INSERT INTO `la_area` VALUES ('1781', '荆州区', '127');
INSERT INTO `la_area` VALUES ('1782', '石首', '127');
INSERT INTO `la_area` VALUES ('1783', '洪湖', '127');
INSERT INTO `la_area` VALUES ('1784', '松滋', '127');
INSERT INTO `la_area` VALUES ('1785', '公安', '127');
INSERT INTO `la_area` VALUES ('1786', '监利', '127');
INSERT INTO `la_area` VALUES ('1787', '江陵', '127');
INSERT INTO `la_area` VALUES ('1788', '山阳', '128');
INSERT INTO `la_area` VALUES ('1789', '解放', '128');
INSERT INTO `la_area` VALUES ('1790', '中站', '128');
INSERT INTO `la_area` VALUES ('1791', '马村', '128');
INSERT INTO `la_area` VALUES ('1792', '沁阳', '128');
INSERT INTO `la_area` VALUES ('1793', '孟州', '128');
INSERT INTO `la_area` VALUES ('1794', '修武', '128');
INSERT INTO `la_area` VALUES ('1795', '博爱', '128');
INSERT INTO `la_area` VALUES ('1796', '武陟', '128');
INSERT INTO `la_area` VALUES ('1797', '温县', '128');
INSERT INTO `la_area` VALUES ('1798', '高新', '128');
INSERT INTO `la_area` VALUES ('1799', '榆次', '129');
INSERT INTO `la_area` VALUES ('1800', '榆社', '129');
INSERT INTO `la_area` VALUES ('1801', '左权', '129');
INSERT INTO `la_area` VALUES ('1802', '和顺', '129');
INSERT INTO `la_area` VALUES ('1803', '昔阳', '129');
INSERT INTO `la_area` VALUES ('1804', '寿阳', '129');
INSERT INTO `la_area` VALUES ('1805', '太谷', '129');
INSERT INTO `la_area` VALUES ('1806', '祁县', '129');
INSERT INTO `la_area` VALUES ('1807', '平遥', '129');
INSERT INTO `la_area` VALUES ('1808', '灵石', '129');
INSERT INTO `la_area` VALUES ('1809', '介休', '129');
INSERT INTO `la_area` VALUES ('1810', '前进', '130');
INSERT INTO `la_area` VALUES ('1811', '向阳', '130');
INSERT INTO `la_area` VALUES ('1812', '东风', '130');
INSERT INTO `la_area` VALUES ('1813', '郊区', '130');
INSERT INTO `la_area` VALUES ('1814', '同江', '130');
INSERT INTO `la_area` VALUES ('1815', '富锦', '130');
INSERT INTO `la_area` VALUES ('1816', '桦南', '130');
INSERT INTO `la_area` VALUES ('1817', '桦川', '130');
INSERT INTO `la_area` VALUES ('1818', '汤原', '130');
INSERT INTO `la_area` VALUES ('1819', '抚远', '130');
INSERT INTO `la_area` VALUES ('1820', '浔阳', '131');
INSERT INTO `la_area` VALUES ('1821', '庐山', '131');
INSERT INTO `la_area` VALUES ('1822', '瑞昌', '131');
INSERT INTO `la_area` VALUES ('1823', '九江县', '131');
INSERT INTO `la_area` VALUES ('1824', '武宁', '131');
INSERT INTO `la_area` VALUES ('1825', '修水', '131');
INSERT INTO `la_area` VALUES ('1826', '永修', '131');
INSERT INTO `la_area` VALUES ('1827', '德安', '131');
INSERT INTO `la_area` VALUES ('1828', '星子', '131');
INSERT INTO `la_area` VALUES ('1829', '都昌', '131');
INSERT INTO `la_area` VALUES ('1830', '湖口', '131');
INSERT INTO `la_area` VALUES ('1831', '彭泽', '131');
INSERT INTO `la_area` VALUES ('1832', '城区', '132');
INSERT INTO `la_area` VALUES ('1833', '沁水', '132');
INSERT INTO `la_area` VALUES ('1834', '阳城', '132');
INSERT INTO `la_area` VALUES ('1835', '陵川', '132');
INSERT INTO `la_area` VALUES ('1836', '泽州', '132');
INSERT INTO `la_area` VALUES ('1837', '高平', '132');
INSERT INTO `la_area` VALUES ('1838', '东宝', '133');
INSERT INTO `la_area` VALUES ('1839', '掇刀', '133');
INSERT INTO `la_area` VALUES ('1840', '钟祥', '133');
INSERT INTO `la_area` VALUES ('1841', '京山', '133');
INSERT INTO `la_area` VALUES ('1842', '沙洋', '133');
INSERT INTO `la_area` VALUES ('1843', '鸡冠', '134');
INSERT INTO `la_area` VALUES ('1844', '恒山', '134');
INSERT INTO `la_area` VALUES ('1845', '滴道', '134');
INSERT INTO `la_area` VALUES ('1846', '梨树', '134');
INSERT INTO `la_area` VALUES ('1847', '城子河', '134');
INSERT INTO `la_area` VALUES ('1848', '麻山', '134');
INSERT INTO `la_area` VALUES ('1849', '虎林', '134');
INSERT INTO `la_area` VALUES ('1850', '密山', '134');
INSERT INTO `la_area` VALUES ('1851', '鸡东', '134');
INSERT INTO `la_area` VALUES ('1852', '吉州', '135');
INSERT INTO `la_area` VALUES ('1853', '青原', '135');
INSERT INTO `la_area` VALUES ('1854', '井冈山', '135');
INSERT INTO `la_area` VALUES ('1855', '吉安县', '135');
INSERT INTO `la_area` VALUES ('1856', '吉水', '135');
INSERT INTO `la_area` VALUES ('1857', '峡江', '135');
INSERT INTO `la_area` VALUES ('1858', '新干', '135');
INSERT INTO `la_area` VALUES ('1859', '永丰', '135');
INSERT INTO `la_area` VALUES ('1860', '泰和', '135');
INSERT INTO `la_area` VALUES ('1861', '遂川', '135');
INSERT INTO `la_area` VALUES ('1862', '万安', '135');
INSERT INTO `la_area` VALUES ('1863', '安福', '135');
INSERT INTO `la_area` VALUES ('1864', '永新', '135');
INSERT INTO `la_area` VALUES ('1865', '榕城', '136');
INSERT INTO `la_area` VALUES ('1866', '普宁', '136');
INSERT INTO `la_area` VALUES ('1867', '揭东', '136');
INSERT INTO `la_area` VALUES ('1868', '揭西', '136');
INSERT INTO `la_area` VALUES ('1869', '惠来', '136');
INSERT INTO `la_area` VALUES ('1870', '珠山', '137');
INSERT INTO `la_area` VALUES ('1871', '昌江', '137');
INSERT INTO `la_area` VALUES ('1872', '乐平', '137');
INSERT INTO `la_area` VALUES ('1873', '浮梁', '137');
INSERT INTO `la_area` VALUES ('1874', '沁园', '138');
INSERT INTO `la_area` VALUES ('1875', '济水', '138');
INSERT INTO `la_area` VALUES ('1876', '北海', '138');
INSERT INTO `la_area` VALUES ('1877', '天坛', '138');
INSERT INTO `la_area` VALUES ('1878', '克井', '138');
INSERT INTO `la_area` VALUES ('1879', '五龙口', '138');
INSERT INTO `la_area` VALUES ('1880', '轵城', '138');
INSERT INTO `la_area` VALUES ('1881', '承留', '138');
INSERT INTO `la_area` VALUES ('1882', '邵原', '138');
INSERT INTO `la_area` VALUES ('1883', '坡头', '138');
INSERT INTO `la_area` VALUES ('1884', '黎林', '138');
INSERT INTO `la_area` VALUES ('1885', '大峪', '138');
INSERT INTO `la_area` VALUES ('1886', '玉泉', '138');
INSERT INTO `la_area` VALUES ('1887', '思礼', '138');
INSERT INTO `la_area` VALUES ('1888', '王屋', '138');
INSERT INTO `la_area` VALUES ('1889', '下冶', '138');
INSERT INTO `la_area` VALUES ('1890', '肃州', '139');
INSERT INTO `la_area` VALUES ('1891', '玉门', '139');
INSERT INTO `la_area` VALUES ('1892', '敦煌', '139');
INSERT INTO `la_area` VALUES ('1893', '金塔', '139');
INSERT INTO `la_area` VALUES ('1894', '瓜州', '139');
INSERT INTO `la_area` VALUES ('1895', '肃北', '139');
INSERT INTO `la_area` VALUES ('1896', '阿克塞', '139');
INSERT INTO `la_area` VALUES ('1897', '金川', '140');
INSERT INTO `la_area` VALUES ('1898', '永昌', '140');
INSERT INTO `la_area` VALUES ('1899', '长城区', '141');
INSERT INTO `la_area` VALUES ('1900', '雄关区', '141');
INSERT INTO `la_area` VALUES ('1901', '镜铁区', '141');
INSERT INTO `la_area` VALUES ('1902', '五华', '142');
INSERT INTO `la_area` VALUES ('1903', '盘龙', '142');
INSERT INTO `la_area` VALUES ('1904', '官渡', '142');
INSERT INTO `la_area` VALUES ('1905', '西山', '142');
INSERT INTO `la_area` VALUES ('1906', '安宁', '142');
INSERT INTO `la_area` VALUES ('1907', '呈贡', '142');
INSERT INTO `la_area` VALUES ('1908', '宜良', '142');
INSERT INTO `la_area` VALUES ('1909', '石林', '142');
INSERT INTO `la_area` VALUES ('1910', '晋宁', '142');
INSERT INTO `la_area` VALUES ('1911', '东川', '142');
INSERT INTO `la_area` VALUES ('1912', '富民', '142');
INSERT INTO `la_area` VALUES ('1913', '嵩明', '142');
INSERT INTO `la_area` VALUES ('1914', '寻甸', '142');
INSERT INTO `la_area` VALUES ('1915', '禄劝', '142');
INSERT INTO `la_area` VALUES ('1916', '鼓楼', '143');
INSERT INTO `la_area` VALUES ('1917', '龙亭', '143');
INSERT INTO `la_area` VALUES ('1918', '顺河', '143');
INSERT INTO `la_area` VALUES ('1919', '禹王台', '143');
INSERT INTO `la_area` VALUES ('1920', '金明', '143');
INSERT INTO `la_area` VALUES ('1921', '杞县', '143');
INSERT INTO `la_area` VALUES ('1922', '通许', '143');
INSERT INTO `la_area` VALUES ('1923', '尉氏', '143');
INSERT INTO `la_area` VALUES ('1924', '开封县', '143');
INSERT INTO `la_area` VALUES ('1925', '兰考', '143');
INSERT INTO `la_area` VALUES ('1926', '喀什市', '144');
INSERT INTO `la_area` VALUES ('1927', '疏附', '144');
INSERT INTO `la_area` VALUES ('1928', '疏勒', '144');
INSERT INTO `la_area` VALUES ('1929', '英吉沙', '144');
INSERT INTO `la_area` VALUES ('1930', '泽普', '144');
INSERT INTO `la_area` VALUES ('1931', '莎车', '144');
INSERT INTO `la_area` VALUES ('1932', '叶城', '144');
INSERT INTO `la_area` VALUES ('1933', '麦盖提', '144');
INSERT INTO `la_area` VALUES ('1934', '岳普湖', '144');
INSERT INTO `la_area` VALUES ('1935', '伽师', '144');
INSERT INTO `la_area` VALUES ('1936', '巴楚', '144');
INSERT INTO `la_area` VALUES ('1937', '塔什库尔', '144');
INSERT INTO `la_area` VALUES ('1938', '克拉玛依区', '145');
INSERT INTO `la_area` VALUES ('1939', '独山子', '145');
INSERT INTO `la_area` VALUES ('1940', '白碱滩', '145');
INSERT INTO `la_area` VALUES ('1941', '乌尔禾', '145');
INSERT INTO `la_area` VALUES ('1942', '博湖', '146');
INSERT INTO `la_area` VALUES ('1943', '和静', '146');
INSERT INTO `la_area` VALUES ('1944', '和硕', '146');
INSERT INTO `la_area` VALUES ('1945', '轮台', '146');
INSERT INTO `la_area` VALUES ('1946', '且末', '146');
INSERT INTO `la_area` VALUES ('1947', '若羌', '146');
INSERT INTO `la_area` VALUES ('1948', '尉犁', '146');
INSERT INTO `la_area` VALUES ('1949', '焉耆', '146');
INSERT INTO `la_area` VALUES ('1950', '库尔勒周边', '146');
INSERT INTO `la_area` VALUES ('1951', '阿图什', '147');
INSERT INTO `la_area` VALUES ('1952', '阿克陶', '147');
INSERT INTO `la_area` VALUES ('1953', '阿合奇', '147');
INSERT INTO `la_area` VALUES ('1954', '乌恰', '147');
INSERT INTO `la_area` VALUES ('1955', '城关', '148');
INSERT INTO `la_area` VALUES ('1956', '七里河', '148');
INSERT INTO `la_area` VALUES ('1957', '西固', '148');
INSERT INTO `la_area` VALUES ('1958', '安宁', '148');
INSERT INTO `la_area` VALUES ('1959', '红古', '148');
INSERT INTO `la_area` VALUES ('1960', '榆中', '148');
INSERT INTO `la_area` VALUES ('1961', '永登', '148');
INSERT INTO `la_area` VALUES ('1962', '皋兰', '148');
INSERT INTO `la_area` VALUES ('1963', '城关', '149');
INSERT INTO `la_area` VALUES ('1964', '堆龙德庆', '149');
INSERT INTO `la_area` VALUES ('1965', '达孜', '149');
INSERT INTO `la_area` VALUES ('1966', '林周', '149');
INSERT INTO `la_area` VALUES ('1967', '当雄', '149');
INSERT INTO `la_area` VALUES ('1968', '墨竹工卡', '149');
INSERT INTO `la_area` VALUES ('1969', '曲水', '149');
INSERT INTO `la_area` VALUES ('1970', '尼木', '149');
INSERT INTO `la_area` VALUES ('1971', '安次区', '150');
INSERT INTO `la_area` VALUES ('1972', '广阳区', '150');
INSERT INTO `la_area` VALUES ('1973', '开发区', '150');
INSERT INTO `la_area` VALUES ('1974', '霸州', '150');
INSERT INTO `la_area` VALUES ('1975', '三河', '150');
INSERT INTO `la_area` VALUES ('1976', '固安', '150');
INSERT INTO `la_area` VALUES ('1977', '永清', '150');
INSERT INTO `la_area` VALUES ('1978', '香河', '150');
INSERT INTO `la_area` VALUES ('1979', '大城', '150');
INSERT INTO `la_area` VALUES ('1980', '文安', '150');
INSERT INTO `la_area` VALUES ('1981', '大厂', '150');
INSERT INTO `la_area` VALUES ('1982', '燕郊', '150');
INSERT INTO `la_area` VALUES ('1983', '兰山', '151');
INSERT INTO `la_area` VALUES ('1984', '罗庄', '151');
INSERT INTO `la_area` VALUES ('1985', '河东', '151');
INSERT INTO `la_area` VALUES ('1986', '沂南', '151');
INSERT INTO `la_area` VALUES ('1987', '郯城', '151');
INSERT INTO `la_area` VALUES ('1988', '沂水', '151');
INSERT INTO `la_area` VALUES ('1989', '苍山', '151');
INSERT INTO `la_area` VALUES ('1990', '费县', '151');
INSERT INTO `la_area` VALUES ('1991', '平邑', '151');
INSERT INTO `la_area` VALUES ('1992', '莒南', '151');
INSERT INTO `la_area` VALUES ('1993', '蒙阴', '151');
INSERT INTO `la_area` VALUES ('1994', '临沭', '151');
INSERT INTO `la_area` VALUES ('1995', '北城新区', '151');
INSERT INTO `la_area` VALUES ('1996', '开发区', '151');
INSERT INTO `la_area` VALUES ('1997', '高新区', '151');
INSERT INTO `la_area` VALUES ('1998', '临港', '151');
INSERT INTO `la_area` VALUES ('1999', '西工', '152');
INSERT INTO `la_area` VALUES ('2000', '老城', '152');
INSERT INTO `la_area` VALUES ('2001', '瀍河', '152');
INSERT INTO `la_area` VALUES ('2002', '涧西', '152');
INSERT INTO `la_area` VALUES ('2003', '吉利', '152');
INSERT INTO `la_area` VALUES ('2004', '洛龙', '152');
INSERT INTO `la_area` VALUES ('2005', '偃师', '152');
INSERT INTO `la_area` VALUES ('2006', '孟津', '152');
INSERT INTO `la_area` VALUES ('2007', '新安', '152');
INSERT INTO `la_area` VALUES ('2008', '栾川', '152');
INSERT INTO `la_area` VALUES ('2009', '嵩县', '152');
INSERT INTO `la_area` VALUES ('2010', '汝阳', '152');
INSERT INTO `la_area` VALUES ('2011', '宜阳', '152');
INSERT INTO `la_area` VALUES ('2012', '洛宁', '152');
INSERT INTO `la_area` VALUES ('2013', '伊川', '152');
INSERT INTO `la_area` VALUES ('2014', '东昌府', '153');
INSERT INTO `la_area` VALUES ('2015', '临清', '153');
INSERT INTO `la_area` VALUES ('2016', '阳谷', '153');
INSERT INTO `la_area` VALUES ('2017', '莘县', '153');
INSERT INTO `la_area` VALUES ('2018', '茌平', '153');
INSERT INTO `la_area` VALUES ('2019', '东阿', '153');
INSERT INTO `la_area` VALUES ('2020', '冠县', '153');
INSERT INTO `la_area` VALUES ('2021', '高唐', '153');
INSERT INTO `la_area` VALUES ('2022', '城中', '154');
INSERT INTO `la_area` VALUES ('2023', '鱼峰', '154');
INSERT INTO `la_area` VALUES ('2024', '柳南', '154');
INSERT INTO `la_area` VALUES ('2025', '柳北', '154');
INSERT INTO `la_area` VALUES ('2026', '柳江', '154');
INSERT INTO `la_area` VALUES ('2027', '柳城', '154');
INSERT INTO `la_area` VALUES ('2028', '鹿寨', '154');
INSERT INTO `la_area` VALUES ('2029', '融安', '154');
INSERT INTO `la_area` VALUES ('2030', '融水', '154');
INSERT INTO `la_area` VALUES ('2031', '三江', '154');
INSERT INTO `la_area` VALUES ('2032', '新浦', '155');
INSERT INTO `la_area` VALUES ('2033', '连云', '155');
INSERT INTO `la_area` VALUES ('2034', '海州', '155');
INSERT INTO `la_area` VALUES ('2035', '赣榆', '155');
INSERT INTO `la_area` VALUES ('2036', '东海', '155');
INSERT INTO `la_area` VALUES ('2037', '灌云', '155');
INSERT INTO `la_area` VALUES ('2038', '灌南', '155');
INSERT INTO `la_area` VALUES ('2039', '尧都', '156');
INSERT INTO `la_area` VALUES ('2040', '曲沃', '156');
INSERT INTO `la_area` VALUES ('2041', '翼城', '156');
INSERT INTO `la_area` VALUES ('2042', '襄汾', '156');
INSERT INTO `la_area` VALUES ('2043', '洪洞', '156');
INSERT INTO `la_area` VALUES ('2044', '古县', '156');
INSERT INTO `la_area` VALUES ('2045', '安泽', '156');
INSERT INTO `la_area` VALUES ('2046', '浮山', '156');
INSERT INTO `la_area` VALUES ('2047', '吉县', '156');
INSERT INTO `la_area` VALUES ('2048', '乡宁', '156');
INSERT INTO `la_area` VALUES ('2049', '大宁', '156');
INSERT INTO `la_area` VALUES ('2050', '隰县', '156');
INSERT INTO `la_area` VALUES ('2051', '永和', '156');
INSERT INTO `la_area` VALUES ('2052', '蒲县', '156');
INSERT INTO `la_area` VALUES ('2053', '汾西', '156');
INSERT INTO `la_area` VALUES ('2054', '侯马', '156');
INSERT INTO `la_area` VALUES ('2055', '霍州', '156');
INSERT INTO `la_area` VALUES ('2056', '源汇', '157');
INSERT INTO `la_area` VALUES ('2057', '郾城', '157');
INSERT INTO `la_area` VALUES ('2058', '召陵', '157');
INSERT INTO `la_area` VALUES ('2059', '舞阳', '157');
INSERT INTO `la_area` VALUES ('2060', '临颍', '157');
INSERT INTO `la_area` VALUES ('2061', '白塔', '158');
INSERT INTO `la_area` VALUES ('2062', '文圣', '158');
INSERT INTO `la_area` VALUES ('2063', '宏伟', '158');
INSERT INTO `la_area` VALUES ('2064', '弓长岭', '158');
INSERT INTO `la_area` VALUES ('2065', '太子河', '158');
INSERT INTO `la_area` VALUES ('2066', '灯塔', '158');
INSERT INTO `la_area` VALUES ('2067', '辽阳县', '158');
INSERT INTO `la_area` VALUES ('2068', '市中', '159');
INSERT INTO `la_area` VALUES ('2069', '沙湾', '159');
INSERT INTO `la_area` VALUES ('2070', '五通桥', '159');
INSERT INTO `la_area` VALUES ('2071', '金口河', '159');
INSERT INTO `la_area` VALUES ('2072', '峨眉山', '159');
INSERT INTO `la_area` VALUES ('2073', '犍为', '159');
INSERT INTO `la_area` VALUES ('2074', '井研', '159');
INSERT INTO `la_area` VALUES ('2075', '夹江', '159');
INSERT INTO `la_area` VALUES ('2076', '沐川', '159');
INSERT INTO `la_area` VALUES ('2077', '峨边', '159');
INSERT INTO `la_area` VALUES ('2078', '马边', '159');
INSERT INTO `la_area` VALUES ('2079', '江阳', '160');
INSERT INTO `la_area` VALUES ('2080', '纳溪', '160');
INSERT INTO `la_area` VALUES ('2081', '龙马潭', '160');
INSERT INTO `la_area` VALUES ('2082', '泸县', '160');
INSERT INTO `la_area` VALUES ('2083', '合江', '160');
INSERT INTO `la_area` VALUES ('2084', '叙永', '160');
INSERT INTO `la_area` VALUES ('2085', '古蔺', '160');
INSERT INTO `la_area` VALUES ('2086', '金安', '161');
INSERT INTO `la_area` VALUES ('2087', '裕安', '161');
INSERT INTO `la_area` VALUES ('2088', '寿县', '161');
INSERT INTO `la_area` VALUES ('2089', '霍邱', '161');
INSERT INTO `la_area` VALUES ('2090', '舒城', '161');
INSERT INTO `la_area` VALUES ('2091', '金寨', '161');
INSERT INTO `la_area` VALUES ('2092', '霍山', '161');
INSERT INTO `la_area` VALUES ('2093', '娄星', '162');
INSERT INTO `la_area` VALUES ('2094', '冷水江', '162');
INSERT INTO `la_area` VALUES ('2095', '涟源', '162');
INSERT INTO `la_area` VALUES ('2096', '双峰', '162');
INSERT INTO `la_area` VALUES ('2097', '新化', '162');
INSERT INTO `la_area` VALUES ('2098', '莱城', '163');
INSERT INTO `la_area` VALUES ('2099', '钢城', '163');
INSERT INTO `la_area` VALUES ('2100', '新罗', '164');
INSERT INTO `la_area` VALUES ('2101', '长汀', '164');
INSERT INTO `la_area` VALUES ('2102', '永定', '164');
INSERT INTO `la_area` VALUES ('2103', '上杭', '164');
INSERT INTO `la_area` VALUES ('2104', '武平', '164');
INSERT INTO `la_area` VALUES ('2105', '连城', '164');
INSERT INTO `la_area` VALUES ('2106', '漳平', '164');
INSERT INTO `la_area` VALUES ('2107', '离石', '165');
INSERT INTO `la_area` VALUES ('2108', '文水', '165');
INSERT INTO `la_area` VALUES ('2109', '交城', '165');
INSERT INTO `la_area` VALUES ('2110', '兴县', '165');
INSERT INTO `la_area` VALUES ('2111', '临县', '165');
INSERT INTO `la_area` VALUES ('2112', '柳林', '165');
INSERT INTO `la_area` VALUES ('2113', '石楼', '165');
INSERT INTO `la_area` VALUES ('2114', '岚县', '165');
INSERT INTO `la_area` VALUES ('2115', '方山', '165');
INSERT INTO `la_area` VALUES ('2116', '中阳', '165');
INSERT INTO `la_area` VALUES ('2117', '交口', '165');
INSERT INTO `la_area` VALUES ('2118', '孝义', '165');
INSERT INTO `la_area` VALUES ('2119', '汾阳', '165');
INSERT INTO `la_area` VALUES ('2120', '莲都', '166');
INSERT INTO `la_area` VALUES ('2121', '龙泉', '166');
INSERT INTO `la_area` VALUES ('2122', '青田', '166');
INSERT INTO `la_area` VALUES ('2123', '缙云', '166');
INSERT INTO `la_area` VALUES ('2124', '遂昌', '166');
INSERT INTO `la_area` VALUES ('2125', '松阳', '166');
INSERT INTO `la_area` VALUES ('2126', '云和', '166');
INSERT INTO `la_area` VALUES ('2127', '庆元', '166');
INSERT INTO `la_area` VALUES ('2128', '景宁', '166');
INSERT INTO `la_area` VALUES ('2129', '西昌', '167');
INSERT INTO `la_area` VALUES ('2130', '盐源', '167');
INSERT INTO `la_area` VALUES ('2131', '德昌', '167');
INSERT INTO `la_area` VALUES ('2132', '会理', '167');
INSERT INTO `la_area` VALUES ('2133', '会东', '167');
INSERT INTO `la_area` VALUES ('2134', '宁南', '167');
INSERT INTO `la_area` VALUES ('2135', '普格', '167');
INSERT INTO `la_area` VALUES ('2136', '布拖', '167');
INSERT INTO `la_area` VALUES ('2137', '金阳', '167');
INSERT INTO `la_area` VALUES ('2138', '昭觉', '167');
INSERT INTO `la_area` VALUES ('2139', '喜德', '167');
INSERT INTO `la_area` VALUES ('2140', '冕宁', '167');
INSERT INTO `la_area` VALUES ('2141', '越西', '167');
INSERT INTO `la_area` VALUES ('2142', '甘洛', '167');
INSERT INTO `la_area` VALUES ('2143', '美姑', '167');
INSERT INTO `la_area` VALUES ('2144', '雷波', '167');
INSERT INTO `la_area` VALUES ('2145', '木里', '167');
INSERT INTO `la_area` VALUES ('2146', '古城', '168');
INSERT INTO `la_area` VALUES ('2147', '永胜', '168');
INSERT INTO `la_area` VALUES ('2148', '华坪', '168');
INSERT INTO `la_area` VALUES ('2149', '玉龙', '168');
INSERT INTO `la_area` VALUES ('2150', '宁蒗', '168');
INSERT INTO `la_area` VALUES ('2151', '钟山', '169');
INSERT INTO `la_area` VALUES ('2152', '六枝特区', '169');
INSERT INTO `la_area` VALUES ('2153', '水城', '169');
INSERT INTO `la_area` VALUES ('2154', '盘县', '169');
INSERT INTO `la_area` VALUES ('2155', '龙山区', '170');
INSERT INTO `la_area` VALUES ('2156', '西安区', '170');
INSERT INTO `la_area` VALUES ('2157', '东丰', '170');
INSERT INTO `la_area` VALUES ('2158', '东辽', '170');
INSERT INTO `la_area` VALUES ('2159', '兴宾', '171');
INSERT INTO `la_area` VALUES ('2160', '合山', '171');
INSERT INTO `la_area` VALUES ('2161', '忻城', '171');
INSERT INTO `la_area` VALUES ('2162', '象州', '171');
INSERT INTO `la_area` VALUES ('2163', '武宣', '171');
INSERT INTO `la_area` VALUES ('2164', '金秀', '171');
INSERT INTO `la_area` VALUES ('2165', '临翔', '172');
INSERT INTO `la_area` VALUES ('2166', '凤庆', '172');
INSERT INTO `la_area` VALUES ('2167', '云县', '172');
INSERT INTO `la_area` VALUES ('2168', '永德', '172');
INSERT INTO `la_area` VALUES ('2169', '镇康', '172');
INSERT INTO `la_area` VALUES ('2170', '双江', '172');
INSERT INTO `la_area` VALUES ('2171', '耿马', '172');
INSERT INTO `la_area` VALUES ('2172', '沧源', '172');
INSERT INTO `la_area` VALUES ('2173', '武都', '173');
INSERT INTO `la_area` VALUES ('2174', '成县', '173');
INSERT INTO `la_area` VALUES ('2175', '文县', '173');
INSERT INTO `la_area` VALUES ('2176', '宕昌', '173');
INSERT INTO `la_area` VALUES ('2177', '康县', '173');
INSERT INTO `la_area` VALUES ('2178', '西和', '173');
INSERT INTO `la_area` VALUES ('2179', '礼县', '173');
INSERT INTO `la_area` VALUES ('2180', '徽县', '173');
INSERT INTO `la_area` VALUES ('2181', '两当', '173');
INSERT INTO `la_area` VALUES ('2182', '临夏市', '174');
INSERT INTO `la_area` VALUES ('2183', '康乐', '174');
INSERT INTO `la_area` VALUES ('2184', '永靖', '174');
INSERT INTO `la_area` VALUES ('2185', '广河', '174');
INSERT INTO `la_area` VALUES ('2186', '和政', '174');
INSERT INTO `la_area` VALUES ('2187', '东乡', '174');
INSERT INTO `la_area` VALUES ('2188', '积石山', '174');
INSERT INTO `la_area` VALUES ('2189', '林芝县', '175');
INSERT INTO `la_area` VALUES ('2190', '工布江达', '175');
INSERT INTO `la_area` VALUES ('2191', '米林', '175');
INSERT INTO `la_area` VALUES ('2192', '墨脱', '175');
INSERT INTO `la_area` VALUES ('2193', '波密', '175');
INSERT INTO `la_area` VALUES ('2194', '察隅', '175');
INSERT INTO `la_area` VALUES ('2195', '朗县', '175');
INSERT INTO `la_area` VALUES ('2196', '涪城', '176');
INSERT INTO `la_area` VALUES ('2197', '游仙', '176');
INSERT INTO `la_area` VALUES ('2198', '江油', '176');
INSERT INTO `la_area` VALUES ('2199', '三台', '176');
INSERT INTO `la_area` VALUES ('2200', '盐亭', '176');
INSERT INTO `la_area` VALUES ('2201', '安县', '176');
INSERT INTO `la_area` VALUES ('2202', '梓潼', '176');
INSERT INTO `la_area` VALUES ('2203', '平武', '176');
INSERT INTO `la_area` VALUES ('2204', '北川', '176');
INSERT INTO `la_area` VALUES ('2205', '爱民', '177');
INSERT INTO `la_area` VALUES ('2206', '东安', '177');
INSERT INTO `la_area` VALUES ('2207', '阳明', '177');
INSERT INTO `la_area` VALUES ('2208', '西安', '177');
INSERT INTO `la_area` VALUES ('2209', '绥芬河', '177');
INSERT INTO `la_area` VALUES ('2210', '海林', '177');
INSERT INTO `la_area` VALUES ('2211', '宁安', '177');
INSERT INTO `la_area` VALUES ('2212', '穆棱', '177');
INSERT INTO `la_area` VALUES ('2213', '东宁', '177');
INSERT INTO `la_area` VALUES ('2214', '林口', '177');
INSERT INTO `la_area` VALUES ('2215', '茂南', '178');
INSERT INTO `la_area` VALUES ('2216', '茂港', '178');
INSERT INTO `la_area` VALUES ('2217', '高州', '178');
INSERT INTO `la_area` VALUES ('2218', '化州', '178');
INSERT INTO `la_area` VALUES ('2219', '信宜', '178');
INSERT INTO `la_area` VALUES ('2220', '电白', '178');
INSERT INTO `la_area` VALUES ('2221', '梅江', '179');
INSERT INTO `la_area` VALUES ('2222', '兴宁', '179');
INSERT INTO `la_area` VALUES ('2223', '梅县', '179');
INSERT INTO `la_area` VALUES ('2224', '大埔', '179');
INSERT INTO `la_area` VALUES ('2225', '丰顺', '179');
INSERT INTO `la_area` VALUES ('2226', '五华', '179');
INSERT INTO `la_area` VALUES ('2227', '平远', '179');
INSERT INTO `la_area` VALUES ('2228', '蕉岭', '179');
INSERT INTO `la_area` VALUES ('2229', '雨山', '180');
INSERT INTO `la_area` VALUES ('2230', '金家庄', '180');
INSERT INTO `la_area` VALUES ('2231', '花山', '180');
INSERT INTO `la_area` VALUES ('2232', '当涂', '180');
INSERT INTO `la_area` VALUES ('2233', '东坡', '181');
INSERT INTO `la_area` VALUES ('2234', '仁寿', '181');
INSERT INTO `la_area` VALUES ('2235', '彭山', '181');
INSERT INTO `la_area` VALUES ('2236', '洪雅', '181');
INSERT INTO `la_area` VALUES ('2237', '丹棱', '181');
INSERT INTO `la_area` VALUES ('2238', '青神', '181');
INSERT INTO `la_area` VALUES ('2239', '玄武', '182');
INSERT INTO `la_area` VALUES ('2240', '鼓楼', '182');
INSERT INTO `la_area` VALUES ('2241', '建邺', '182');
INSERT INTO `la_area` VALUES ('2242', '白下', '182');
INSERT INTO `la_area` VALUES ('2243', '秦淮', '182');
INSERT INTO `la_area` VALUES ('2244', '雨花台', '182');
INSERT INTO `la_area` VALUES ('2245', '江宁', '182');
INSERT INTO `la_area` VALUES ('2246', '栖霞', '182');
INSERT INTO `la_area` VALUES ('2247', '下关', '182');
INSERT INTO `la_area` VALUES ('2248', '浦口', '182');
INSERT INTO `la_area` VALUES ('2249', '大厂', '182');
INSERT INTO `la_area` VALUES ('2250', '六合', '182');
INSERT INTO `la_area` VALUES ('2251', '溧水', '182');
INSERT INTO `la_area` VALUES ('2252', '高淳', '182');
INSERT INTO `la_area` VALUES ('2253', '南京周边', '182');
INSERT INTO `la_area` VALUES ('2254', '海曙', '183');
INSERT INTO `la_area` VALUES ('2255', '江东', '183');
INSERT INTO `la_area` VALUES ('2256', '江北', '183');
INSERT INTO `la_area` VALUES ('2257', '鄞州', '183');
INSERT INTO `la_area` VALUES ('2258', '北仑', '183');
INSERT INTO `la_area` VALUES ('2259', '镇海', '183');
INSERT INTO `la_area` VALUES ('2260', '慈溪', '183');
INSERT INTO `la_area` VALUES ('2261', '余姚', '183');
INSERT INTO `la_area` VALUES ('2262', '奉化', '183');
INSERT INTO `la_area` VALUES ('2263', '宁海', '183');
INSERT INTO `la_area` VALUES ('2264', '象山', '183');
INSERT INTO `la_area` VALUES ('2265', '甬江', '183');
INSERT INTO `la_area` VALUES ('2266', '青秀', '184');
INSERT INTO `la_area` VALUES ('2267', '兴宁', '184');
INSERT INTO `la_area` VALUES ('2268', '西乡塘', '184');
INSERT INTO `la_area` VALUES ('2269', '江南', '184');
INSERT INTO `la_area` VALUES ('2270', '良庆', '184');
INSERT INTO `la_area` VALUES ('2271', '邕宁', '184');
INSERT INTO `la_area` VALUES ('2272', '武鸣', '184');
INSERT INTO `la_area` VALUES ('2273', '宾阳', '184');
INSERT INTO `la_area` VALUES ('2274', '横县', '184');
INSERT INTO `la_area` VALUES ('2275', '隆安', '184');
INSERT INTO `la_area` VALUES ('2276', '马山', '184');
INSERT INTO `la_area` VALUES ('2277', '上林', '184');
INSERT INTO `la_area` VALUES ('2278', '其他', '184');
INSERT INTO `la_area` VALUES ('2279', '东湖', '185');
INSERT INTO `la_area` VALUES ('2280', '西湖', '185');
INSERT INTO `la_area` VALUES ('2281', '青云谱', '185');
INSERT INTO `la_area` VALUES ('2282', '青山湖', '185');
INSERT INTO `la_area` VALUES ('2283', '高新区', '185');
INSERT INTO `la_area` VALUES ('2284', '红谷滩新区', '185');
INSERT INTO `la_area` VALUES ('2285', '昌北', '185');
INSERT INTO `la_area` VALUES ('2286', '新建', '185');
INSERT INTO `la_area` VALUES ('2287', '湾里', '185');
INSERT INTO `la_area` VALUES ('2288', '南昌县', '185');
INSERT INTO `la_area` VALUES ('2289', '进贤', '185');
INSERT INTO `la_area` VALUES ('2290', '安义', '185');
INSERT INTO `la_area` VALUES ('2291', '崇川', '186');
INSERT INTO `la_area` VALUES ('2292', '港闸', '186');
INSERT INTO `la_area` VALUES ('2293', '启东', '186');
INSERT INTO `la_area` VALUES ('2294', '如皋', '186');
INSERT INTO `la_area` VALUES ('2295', '通州', '186');
INSERT INTO `la_area` VALUES ('2296', '海门', '186');
INSERT INTO `la_area` VALUES ('2297', '海安', '186');
INSERT INTO `la_area` VALUES ('2298', '如东', '186');
INSERT INTO `la_area` VALUES ('2299', '开发区', '186');
INSERT INTO `la_area` VALUES ('2300', '卧龙', '187');
INSERT INTO `la_area` VALUES ('2301', '宛城', '187');
INSERT INTO `la_area` VALUES ('2302', '邓州', '187');
INSERT INTO `la_area` VALUES ('2303', '南召', '187');
INSERT INTO `la_area` VALUES ('2304', '方城', '187');
INSERT INTO `la_area` VALUES ('2305', '西峡', '187');
INSERT INTO `la_area` VALUES ('2306', '镇平', '187');
INSERT INTO `la_area` VALUES ('2307', '内乡', '187');
INSERT INTO `la_area` VALUES ('2308', '淅川', '187');
INSERT INTO `la_area` VALUES ('2309', '社旗', '187');
INSERT INTO `la_area` VALUES ('2310', '唐河', '187');
INSERT INTO `la_area` VALUES ('2311', '新野', '187');
INSERT INTO `la_area` VALUES ('2312', '桐柏', '187');
INSERT INTO `la_area` VALUES ('2313', '油田', '187');
INSERT INTO `la_area` VALUES ('2314', '顺庆', '188');
INSERT INTO `la_area` VALUES ('2315', '高坪', '188');
INSERT INTO `la_area` VALUES ('2316', '嘉陵', '188');
INSERT INTO `la_area` VALUES ('2317', '阆中', '188');
INSERT INTO `la_area` VALUES ('2318', '南部', '188');
INSERT INTO `la_area` VALUES ('2319', '营山', '188');
INSERT INTO `la_area` VALUES ('2320', '蓬安', '188');
INSERT INTO `la_area` VALUES ('2321', '仪陇', '188');
INSERT INTO `la_area` VALUES ('2322', '西充', '188');
INSERT INTO `la_area` VALUES ('2323', '市中', '189');
INSERT INTO `la_area` VALUES ('2324', '东兴', '189');
INSERT INTO `la_area` VALUES ('2325', '威远', '189');
INSERT INTO `la_area` VALUES ('2326', '资中', '189');
INSERT INTO `la_area` VALUES ('2327', '隆昌', '189');
INSERT INTO `la_area` VALUES ('2328', '延平', '190');
INSERT INTO `la_area` VALUES ('2329', '顺昌', '190');
INSERT INTO `la_area` VALUES ('2330', '浦城', '190');
INSERT INTO `la_area` VALUES ('2331', '光泽', '190');
INSERT INTO `la_area` VALUES ('2332', '松溪', '190');
INSERT INTO `la_area` VALUES ('2333', '政和', '190');
INSERT INTO `la_area` VALUES ('2334', '邵武', '190');
INSERT INTO `la_area` VALUES ('2335', '武夷山', '190');
INSERT INTO `la_area` VALUES ('2336', '建瓯', '190');
INSERT INTO `la_area` VALUES ('2337', '建阳', '190');
INSERT INTO `la_area` VALUES ('2338', '蕉城', '191');
INSERT INTO `la_area` VALUES ('2339', '霞浦', '191');
INSERT INTO `la_area` VALUES ('2340', '古田', '191');
INSERT INTO `la_area` VALUES ('2341', '屏南', '191');
INSERT INTO `la_area` VALUES ('2342', '寿宁', '191');
INSERT INTO `la_area` VALUES ('2343', '周宁', '191');
INSERT INTO `la_area` VALUES ('2344', '柘荣', '191');
INSERT INTO `la_area` VALUES ('2345', '福安', '191');
INSERT INTO `la_area` VALUES ('2346', '福鼎', '191');
INSERT INTO `la_area` VALUES ('2347', '泸水', '192');
INSERT INTO `la_area` VALUES ('2348', '福贡', '192');
INSERT INTO `la_area` VALUES ('2349', '贡山', '192');
INSERT INTO `la_area` VALUES ('2350', '兰坪', '192');
INSERT INTO `la_area` VALUES ('2351', '那曲县', '193');
INSERT INTO `la_area` VALUES ('2352', '嘉黎', '193');
INSERT INTO `la_area` VALUES ('2353', '比如', '193');
INSERT INTO `la_area` VALUES ('2354', '聂荣', '193');
INSERT INTO `la_area` VALUES ('2355', '安多', '193');
INSERT INTO `la_area` VALUES ('2356', '申扎', '193');
INSERT INTO `la_area` VALUES ('2357', '索县', '193');
INSERT INTO `la_area` VALUES ('2358', '班戈', '193');
INSERT INTO `la_area` VALUES ('2359', '巴青', '193');
INSERT INTO `la_area` VALUES ('2360', '尼玛', '193');
INSERT INTO `la_area` VALUES ('2361', '双湖', '193');
INSERT INTO `la_area` VALUES ('2362', '新华', '194');
INSERT INTO `la_area` VALUES ('2363', '卫东', '194');
INSERT INTO `la_area` VALUES ('2364', '湛河', '194');
INSERT INTO `la_area` VALUES ('2365', '石龙', '194');
INSERT INTO `la_area` VALUES ('2366', '舞钢', '194');
INSERT INTO `la_area` VALUES ('2367', '汝州', '194');
INSERT INTO `la_area` VALUES ('2368', '宝丰', '194');
INSERT INTO `la_area` VALUES ('2369', '叶县', '194');
INSERT INTO `la_area` VALUES ('2370', '鲁山', '194');
INSERT INTO `la_area` VALUES ('2371', '郏县', '194');
INSERT INTO `la_area` VALUES ('2372', '华龙', '195');
INSERT INTO `la_area` VALUES ('2373', '清丰', '195');
INSERT INTO `la_area` VALUES ('2374', '南乐', '195');
INSERT INTO `la_area` VALUES ('2375', '范县', '195');
INSERT INTO `la_area` VALUES ('2376', '台前', '195');
INSERT INTO `la_area` VALUES ('2377', '濮阳县', '195');
INSERT INTO `la_area` VALUES ('2378', '高新', '195');
INSERT INTO `la_area` VALUES ('2379', '兴隆台', '196');
INSERT INTO `la_area` VALUES ('2380', '双台子', '196');
INSERT INTO `la_area` VALUES ('2381', '大洼', '196');
INSERT INTO `la_area` VALUES ('2382', '盘山', '196');
INSERT INTO `la_area` VALUES ('2383', '城厢', '197');
INSERT INTO `la_area` VALUES ('2384', '涵江', '197');
INSERT INTO `la_area` VALUES ('2385', '荔城', '197');
INSERT INTO `la_area` VALUES ('2386', '秀屿', '197');
INSERT INTO `la_area` VALUES ('2387', '仙游', '197');
INSERT INTO `la_area` VALUES ('2388', '东区', '198');
INSERT INTO `la_area` VALUES ('2389', '西区', '198');
INSERT INTO `la_area` VALUES ('2390', '仁和', '198');
INSERT INTO `la_area` VALUES ('2391', '米易', '198');
INSERT INTO `la_area` VALUES ('2392', '盐边', '198');
INSERT INTO `la_area` VALUES ('2393', '安源', '199');
INSERT INTO `la_area` VALUES ('2394', '湘东', '199');
INSERT INTO `la_area` VALUES ('2395', '莲花', '199');
INSERT INTO `la_area` VALUES ('2396', '芦溪', '199');
INSERT INTO `la_area` VALUES ('2397', '上栗', '199');
INSERT INTO `la_area` VALUES ('2398', '崆峒', '200');
INSERT INTO `la_area` VALUES ('2399', '泾川', '200');
INSERT INTO `la_area` VALUES ('2400', '灵台', '200');
INSERT INTO `la_area` VALUES ('2401', '崇信', '200');
INSERT INTO `la_area` VALUES ('2402', '华亭', '200');
INSERT INTO `la_area` VALUES ('2403', '庄浪', '200');
INSERT INTO `la_area` VALUES ('2404', '静宁', '200');
INSERT INTO `la_area` VALUES ('2405', '思茅', '201');
INSERT INTO `la_area` VALUES ('2406', '宁洱', '201');
INSERT INTO `la_area` VALUES ('2407', '墨江', '201');
INSERT INTO `la_area` VALUES ('2408', '景东', '201');
INSERT INTO `la_area` VALUES ('2409', '景谷', '201');
INSERT INTO `la_area` VALUES ('2410', '镇沅', '201');
INSERT INTO `la_area` VALUES ('2411', '江城', '201');
INSERT INTO `la_area` VALUES ('2412', '孟连', '201');
INSERT INTO `la_area` VALUES ('2413', '澜沧', '201');
INSERT INTO `la_area` VALUES ('2414', '西盟', '201');
INSERT INTO `la_area` VALUES ('2415', '市南', '202');
INSERT INTO `la_area` VALUES ('2416', '市北', '202');
INSERT INTO `la_area` VALUES ('2417', '四方', '202');
INSERT INTO `la_area` VALUES ('2418', '城阳', '202');
INSERT INTO `la_area` VALUES ('2419', '李沧', '202');
INSERT INTO `la_area` VALUES ('2420', '崂山', '202');
INSERT INTO `la_area` VALUES ('2421', '黄岛', '202');
INSERT INTO `la_area` VALUES ('2422', '即墨', '202');
INSERT INTO `la_area` VALUES ('2423', '胶州', '202');
INSERT INTO `la_area` VALUES ('2424', '胶南', '202');
INSERT INTO `la_area` VALUES ('2425', '平度', '202');
INSERT INTO `la_area` VALUES ('2426', '莱西', '202');
INSERT INTO `la_area` VALUES ('2427', '海港区', '203');
INSERT INTO `la_area` VALUES ('2428', '山海关区', '203');
INSERT INTO `la_area` VALUES ('2429', '北戴河区', '203');
INSERT INTO `la_area` VALUES ('2430', '昌黎', '203');
INSERT INTO `la_area` VALUES ('2431', '抚宁', '203');
INSERT INTO `la_area` VALUES ('2432', '卢龙', '203');
INSERT INTO `la_area` VALUES ('2433', '青龙', '203');
INSERT INTO `la_area` VALUES ('2434', '鲤城', '204');
INSERT INTO `la_area` VALUES ('2435', '丰泽', '204');
INSERT INTO `la_area` VALUES ('2436', '洛江', '204');
INSERT INTO `la_area` VALUES ('2437', '泉港', '204');
INSERT INTO `la_area` VALUES ('2438', '惠安', '204');
INSERT INTO `la_area` VALUES ('2439', '安溪', '204');
INSERT INTO `la_area` VALUES ('2440', '永春', '204');
INSERT INTO `la_area` VALUES ('2441', '德化', '204');
INSERT INTO `la_area` VALUES ('2442', '金门', '204');
INSERT INTO `la_area` VALUES ('2443', '石狮', '204');
INSERT INTO `la_area` VALUES ('2444', '晋江', '204');
INSERT INTO `la_area` VALUES ('2445', '南安', '204');
INSERT INTO `la_area` VALUES ('2446', '龙沙', '205');
INSERT INTO `la_area` VALUES ('2447', '建华', '205');
INSERT INTO `la_area` VALUES ('2448', '铁锋', '205');
INSERT INTO `la_area` VALUES ('2449', '昂昂溪', '205');
INSERT INTO `la_area` VALUES ('2450', '富拉尔基', '205');
INSERT INTO `la_area` VALUES ('2451', '碾子山', '205');
INSERT INTO `la_area` VALUES ('2452', '梅里斯', '205');
INSERT INTO `la_area` VALUES ('2453', '讷河', '205');
INSERT INTO `la_area` VALUES ('2454', '龙江', '205');
INSERT INTO `la_area` VALUES ('2455', '依安', '205');
INSERT INTO `la_area` VALUES ('2456', '泰来', '205');
INSERT INTO `la_area` VALUES ('2457', '甘南', '205');
INSERT INTO `la_area` VALUES ('2458', '富裕', '205');
INSERT INTO `la_area` VALUES ('2459', '克山', '205');
INSERT INTO `la_area` VALUES ('2460', '克东', '205');
INSERT INTO `la_area` VALUES ('2461', '拜泉', '205');
INSERT INTO `la_area` VALUES ('2462', '清城', '206');
INSERT INTO `la_area` VALUES ('2463', '英德', '206');
INSERT INTO `la_area` VALUES ('2464', '连州', '206');
INSERT INTO `la_area` VALUES ('2465', '佛冈', '206');
INSERT INTO `la_area` VALUES ('2466', '阳山', '206');
INSERT INTO `la_area` VALUES ('2467', '清新', '206');
INSERT INTO `la_area` VALUES ('2468', '连山', '206');
INSERT INTO `la_area` VALUES ('2469', '连南', '206');
INSERT INTO `la_area` VALUES ('2470', '麒麟', '207');
INSERT INTO `la_area` VALUES ('2471', '宣威', '207');
INSERT INTO `la_area` VALUES ('2472', '马龙', '207');
INSERT INTO `la_area` VALUES ('2473', '陆良', '207');
INSERT INTO `la_area` VALUES ('2474', '师宗', '207');
INSERT INTO `la_area` VALUES ('2475', '罗平', '207');
INSERT INTO `la_area` VALUES ('2476', '富源', '207');
INSERT INTO `la_area` VALUES ('2477', '会泽', '207');
INSERT INTO `la_area` VALUES ('2478', '沾益', '207');
INSERT INTO `la_area` VALUES ('2479', '柯城', '208');
INSERT INTO `la_area` VALUES ('2480', '衢江', '208');
INSERT INTO `la_area` VALUES ('2481', '江山', '208');
INSERT INTO `la_area` VALUES ('2482', '常山', '208');
INSERT INTO `la_area` VALUES ('2483', '开化', '208');
INSERT INTO `la_area` VALUES ('2484', '龙游', '208');
INSERT INTO `la_area` VALUES ('2485', '西峰', '209');
INSERT INTO `la_area` VALUES ('2486', '庆城', '209');
INSERT INTO `la_area` VALUES ('2487', '环县', '209');
INSERT INTO `la_area` VALUES ('2488', '华池', '209');
INSERT INTO `la_area` VALUES ('2489', '合水', '209');
INSERT INTO `la_area` VALUES ('2490', '正宁', '209');
INSERT INTO `la_area` VALUES ('2491', '宁县', '209');
INSERT INTO `la_area` VALUES ('2492', '镇原', '209');
INSERT INTO `la_area` VALUES ('2493', '桃山', '210');
INSERT INTO `la_area` VALUES ('2494', '新兴', '210');
INSERT INTO `la_area` VALUES ('2495', '茄子河', '210');
INSERT INTO `la_area` VALUES ('2496', '勃利', '210');
INSERT INTO `la_area` VALUES ('2497', '钦南', '211');
INSERT INTO `la_area` VALUES ('2498', '钦北', '211');
INSERT INTO `la_area` VALUES ('2499', '灵山', '211');
INSERT INTO `la_area` VALUES ('2500', '浦北', '211');
INSERT INTO `la_area` VALUES ('2501', '园林', '212');
INSERT INTO `la_area` VALUES ('2502', '泽口', '212');
INSERT INTO `la_area` VALUES ('2503', '广华', '212');
INSERT INTO `la_area` VALUES ('2504', '周矶', '212');
INSERT INTO `la_area` VALUES ('2505', '杨市', '212');
INSERT INTO `la_area` VALUES ('2506', '竹根滩', '212');
INSERT INTO `la_area` VALUES ('2507', '渔洋', '212');
INSERT INTO `la_area` VALUES ('2508', '老新', '212');
INSERT INTO `la_area` VALUES ('2509', '龙湾', '212');
INSERT INTO `la_area` VALUES ('2510', '张金', '212');
INSERT INTO `la_area` VALUES ('2511', '浩口', '212');
INSERT INTO `la_area` VALUES ('2512', '熊口', '212');
INSERT INTO `la_area` VALUES ('2513', '积玉口', '212');
INSERT INTO `la_area` VALUES ('2514', '王场', '212');
INSERT INTO `la_area` VALUES ('2515', '高石碑', '212');
INSERT INTO `la_area` VALUES ('2516', '凯里', '213');
INSERT INTO `la_area` VALUES ('2517', '黄平', '213');
INSERT INTO `la_area` VALUES ('2518', '施秉', '213');
INSERT INTO `la_area` VALUES ('2519', '三穗', '213');
INSERT INTO `la_area` VALUES ('2520', '镇远', '213');
INSERT INTO `la_area` VALUES ('2521', '岑巩', '213');
INSERT INTO `la_area` VALUES ('2522', '天柱', '213');
INSERT INTO `la_area` VALUES ('2523', '锦屏', '213');
INSERT INTO `la_area` VALUES ('2524', '剑河', '213');
INSERT INTO `la_area` VALUES ('2525', '台江', '213');
INSERT INTO `la_area` VALUES ('2526', '黎平', '213');
INSERT INTO `la_area` VALUES ('2527', '榕江', '213');
INSERT INTO `la_area` VALUES ('2528', '从江', '213');
INSERT INTO `la_area` VALUES ('2529', '雷山', '213');
INSERT INTO `la_area` VALUES ('2530', '麻江', '213');
INSERT INTO `la_area` VALUES ('2531', '丹寨', '213');
INSERT INTO `la_area` VALUES ('2532', '都匀', '214');
INSERT INTO `la_area` VALUES ('2533', '福泉', '214');
INSERT INTO `la_area` VALUES ('2534', '荔波', '214');
INSERT INTO `la_area` VALUES ('2535', '贵定', '214');
INSERT INTO `la_area` VALUES ('2536', '瓮安', '214');
INSERT INTO `la_area` VALUES ('2537', '独山', '214');
INSERT INTO `la_area` VALUES ('2538', '平塘', '214');
INSERT INTO `la_area` VALUES ('2539', '罗甸', '214');
INSERT INTO `la_area` VALUES ('2540', '长顺', '214');
INSERT INTO `la_area` VALUES ('2541', '龙里', '214');
INSERT INTO `la_area` VALUES ('2542', '惠水', '214');
INSERT INTO `la_area` VALUES ('2543', '三都', '214');
INSERT INTO `la_area` VALUES ('2544', '兴义', '215');
INSERT INTO `la_area` VALUES ('2545', '兴仁', '215');
INSERT INTO `la_area` VALUES ('2546', '普安', '215');
INSERT INTO `la_area` VALUES ('2547', '晴隆', '215');
INSERT INTO `la_area` VALUES ('2548', '贞丰', '215');
INSERT INTO `la_area` VALUES ('2549', '望谟', '215');
INSERT INTO `la_area` VALUES ('2550', '册亨', '215');
INSERT INTO `la_area` VALUES ('2551', '安龙', '215');
INSERT INTO `la_area` VALUES ('2552', '东港', '216');
INSERT INTO `la_area` VALUES ('2553', '岚山', '216');
INSERT INTO `la_area` VALUES ('2554', '五莲', '216');
INSERT INTO `la_area` VALUES ('2555', '莒县', '216');
INSERT INTO `la_area` VALUES ('2556', '日喀则市', '217');
INSERT INTO `la_area` VALUES ('2557', '南木林', '217');
INSERT INTO `la_area` VALUES ('2558', '江孜', '217');
INSERT INTO `la_area` VALUES ('2559', '定日', '217');
INSERT INTO `la_area` VALUES ('2560', '萨迦', '217');
INSERT INTO `la_area` VALUES ('2561', '拉孜', '217');
INSERT INTO `la_area` VALUES ('2562', '昂仁', '217');
INSERT INTO `la_area` VALUES ('2563', '谢通门', '217');
INSERT INTO `la_area` VALUES ('2564', '白朗', '217');
INSERT INTO `la_area` VALUES ('2565', '仁布', '217');
INSERT INTO `la_area` VALUES ('2566', '康马', '217');
INSERT INTO `la_area` VALUES ('2567', '定结', '217');
INSERT INTO `la_area` VALUES ('2568', '仲巴', '217');
INSERT INTO `la_area` VALUES ('2569', '亚东', '217');
INSERT INTO `la_area` VALUES ('2570', '吉隆', '217');
INSERT INTO `la_area` VALUES ('2571', '聂拉木', '217');
INSERT INTO `la_area` VALUES ('2572', '萨嘎', '217');
INSERT INTO `la_area` VALUES ('2573', '岗巴', '217');
INSERT INTO `la_area` VALUES ('2574', '浦东', '218');
INSERT INTO `la_area` VALUES ('2575', '闵行', '218');
INSERT INTO `la_area` VALUES ('2576', '徐汇', '218');
INSERT INTO `la_area` VALUES ('2577', '长宁', '218');
INSERT INTO `la_area` VALUES ('2578', '普陀', '218');
INSERT INTO `la_area` VALUES ('2579', '静安', '218');
INSERT INTO `la_area` VALUES ('2580', '卢湾', '218');
INSERT INTO `la_area` VALUES ('2581', '黄浦', '218');
INSERT INTO `la_area` VALUES ('2582', '闸北', '218');
INSERT INTO `la_area` VALUES ('2583', '虹口', '218');
INSERT INTO `la_area` VALUES ('2584', '杨浦', '218');
INSERT INTO `la_area` VALUES ('2585', '宝山', '218');
INSERT INTO `la_area` VALUES ('2586', '嘉定', '218');
INSERT INTO `la_area` VALUES ('2587', '青浦', '218');
INSERT INTO `la_area` VALUES ('2588', '松江', '218');
INSERT INTO `la_area` VALUES ('2589', '金山', '218');
INSERT INTO `la_area` VALUES ('2590', '奉贤', '218');
INSERT INTO `la_area` VALUES ('2591', '南汇', '218');
INSERT INTO `la_area` VALUES ('2592', '崇明', '218');
INSERT INTO `la_area` VALUES ('2593', '上海周边', '218');
INSERT INTO `la_area` VALUES ('2594', '福田', '219');
INSERT INTO `la_area` VALUES ('2595', '罗湖', '219');
INSERT INTO `la_area` VALUES ('2596', '南山', '219');
INSERT INTO `la_area` VALUES ('2597', '宝安', '219');
INSERT INTO `la_area` VALUES ('2598', '龙岗', '219');
INSERT INTO `la_area` VALUES ('2599', '盐田', '219');
INSERT INTO `la_area` VALUES ('2600', '光明新区', '219');
INSERT INTO `la_area` VALUES ('2601', '坪山新区', '219');
INSERT INTO `la_area` VALUES ('2602', '和平', '220');
INSERT INTO `la_area` VALUES ('2603', '沈河', '220');
INSERT INTO `la_area` VALUES ('2604', '大东', '220');
INSERT INTO `la_area` VALUES ('2605', '皇姑', '220');
INSERT INTO `la_area` VALUES ('2606', '铁西', '220');
INSERT INTO `la_area` VALUES ('2607', '东陵', '220');
INSERT INTO `la_area` VALUES ('2608', '浑南', '220');
INSERT INTO `la_area` VALUES ('2609', '沈北', '220');
INSERT INTO `la_area` VALUES ('2610', '于洪', '220');
INSERT INTO `la_area` VALUES ('2611', '苏家屯', '220');
INSERT INTO `la_area` VALUES ('2612', '新民', '220');
INSERT INTO `la_area` VALUES ('2613', '辽中', '220');
INSERT INTO `la_area` VALUES ('2614', '法库', '220');
INSERT INTO `la_area` VALUES ('2615', '康平', '220');
INSERT INTO `la_area` VALUES ('2616', '长安', '221');
INSERT INTO `la_area` VALUES ('2617', '桥东', '221');
INSERT INTO `la_area` VALUES ('2618', '桥西', '221');
INSERT INTO `la_area` VALUES ('2619', '新华', '221');
INSERT INTO `la_area` VALUES ('2620', '裕华', '221');
INSERT INTO `la_area` VALUES ('2621', '井陉矿区', '221');
INSERT INTO `la_area` VALUES ('2622', '开发区', '221');
INSERT INTO `la_area` VALUES ('2623', '井陉', '221');
INSERT INTO `la_area` VALUES ('2624', '正定', '221');
INSERT INTO `la_area` VALUES ('2625', '栾城', '221');
INSERT INTO `la_area` VALUES ('2626', '行唐', '221');
INSERT INTO `la_area` VALUES ('2627', '灵寿', '221');
INSERT INTO `la_area` VALUES ('2628', '高邑', '221');
INSERT INTO `la_area` VALUES ('2629', '深泽', '221');
INSERT INTO `la_area` VALUES ('2630', '赞皇', '221');
INSERT INTO `la_area` VALUES ('2631', '无极', '221');
INSERT INTO `la_area` VALUES ('2632', '平山', '221');
INSERT INTO `la_area` VALUES ('2633', '元氏', '221');
INSERT INTO `la_area` VALUES ('2634', '赵县', '221');
INSERT INTO `la_area` VALUES ('2635', '辛集', '221');
INSERT INTO `la_area` VALUES ('2636', '藁城', '221');
INSERT INTO `la_area` VALUES ('2637', '晋州', '221');
INSERT INTO `la_area` VALUES ('2638', '新乐', '221');
INSERT INTO `la_area` VALUES ('2639', '鹿泉', '221');
INSERT INTO `la_area` VALUES ('2640', '园区', '222');
INSERT INTO `la_area` VALUES ('2641', '新区', '222');
INSERT INTO `la_area` VALUES ('2642', '平江', '222');
INSERT INTO `la_area` VALUES ('2643', '沧浪', '222');
INSERT INTO `la_area` VALUES ('2644', '金阊', '222');
INSERT INTO `la_area` VALUES ('2645', '相城', '222');
INSERT INTO `la_area` VALUES ('2646', '吴中', '222');
INSERT INTO `la_area` VALUES ('2647', '昆山', '222');
INSERT INTO `la_area` VALUES ('2648', '太仓', '222');
INSERT INTO `la_area` VALUES ('2649', '常熟', '222');
INSERT INTO `la_area` VALUES ('2650', '张家港', '222');
INSERT INTO `la_area` VALUES ('2651', '吴江', '222');
INSERT INTO `la_area` VALUES ('2652', '金平', '223');
INSERT INTO `la_area` VALUES ('2653', '龙湖', '223');
INSERT INTO `la_area` VALUES ('2654', '濠江', '223');
INSERT INTO `la_area` VALUES ('2655', '潮阳', '223');
INSERT INTO `la_area` VALUES ('2656', '潮南', '223');
INSERT INTO `la_area` VALUES ('2657', '澄海', '223');
INSERT INTO `la_area` VALUES ('2658', '南澳', '223');
INSERT INTO `la_area` VALUES ('2659', '梁园', '224');
INSERT INTO `la_area` VALUES ('2660', '睢阳', '224');
INSERT INTO `la_area` VALUES ('2661', '永城', '224');
INSERT INTO `la_area` VALUES ('2662', '民权', '224');
INSERT INTO `la_area` VALUES ('2663', '睢县', '224');
INSERT INTO `la_area` VALUES ('2664', '宁陵', '224');
INSERT INTO `la_area` VALUES ('2665', '柘城', '224');
INSERT INTO `la_area` VALUES ('2666', '虞城', '224');
INSERT INTO `la_area` VALUES ('2667', '夏邑', '224');
INSERT INTO `la_area` VALUES ('2668', '河西', '225');
INSERT INTO `la_area` VALUES ('2669', '河东', '225');
INSERT INTO `la_area` VALUES ('2670', '海棠湾', '225');
INSERT INTO `la_area` VALUES ('2671', '田独', '225');
INSERT INTO `la_area` VALUES ('2672', '凤凰', '225');
INSERT INTO `la_area` VALUES ('2673', '三亚湾', '225');
INSERT INTO `la_area` VALUES ('2674', '亚龙湾', '225');
INSERT INTO `la_area` VALUES ('2675', '大东海', '225');
INSERT INTO `la_area` VALUES ('2676', '凤凰岛', '225');
INSERT INTO `la_area` VALUES ('2677', '崖城', '225');
INSERT INTO `la_area` VALUES ('2678', '天涯', '225');
INSERT INTO `la_area` VALUES ('2679', '育才', '225');
INSERT INTO `la_area` VALUES ('2680', '宿城区', '226');
INSERT INTO `la_area` VALUES ('2681', '宿豫', '226');
INSERT INTO `la_area` VALUES ('2682', '沭阳', '226');
INSERT INTO `la_area` VALUES ('2683', '泗阳', '226');
INSERT INTO `la_area` VALUES ('2684', '泗洪', '226');
INSERT INTO `la_area` VALUES ('2685', '越城', '227');
INSERT INTO `la_area` VALUES ('2686', '诸暨', '227');
INSERT INTO `la_area` VALUES ('2687', '上虞', '227');
INSERT INTO `la_area` VALUES ('2688', '嵊州', '227');
INSERT INTO `la_area` VALUES ('2689', '绍兴县', '227');
INSERT INTO `la_area` VALUES ('2690', '新昌', '227');
INSERT INTO `la_area` VALUES ('2691', '茅箭', '228');
INSERT INTO `la_area` VALUES ('2692', '张湾', '228');
INSERT INTO `la_area` VALUES ('2693', '丹江口', '228');
INSERT INTO `la_area` VALUES ('2694', '郧县', '228');
INSERT INTO `la_area` VALUES ('2695', '郧西', '228');
INSERT INTO `la_area` VALUES ('2696', '竹山', '228');
INSERT INTO `la_area` VALUES ('2697', '竹溪', '228');
INSERT INTO `la_area` VALUES ('2698', '房县', '228');
INSERT INTO `la_area` VALUES ('2699', '铁西区', '229');
INSERT INTO `la_area` VALUES ('2700', '铁东区', '229');
INSERT INTO `la_area` VALUES ('2701', '公主岭', '229');
INSERT INTO `la_area` VALUES ('2702', '双辽', '229');
INSERT INTO `la_area` VALUES ('2703', '梨树', '229');
INSERT INTO `la_area` VALUES ('2704', '伊通', '229');
INSERT INTO `la_area` VALUES ('2705', '湖滨', '230');
INSERT INTO `la_area` VALUES ('2706', '义马', '230');
INSERT INTO `la_area` VALUES ('2707', '灵宝', '230');
INSERT INTO `la_area` VALUES ('2708', '渑池', '230');
INSERT INTO `la_area` VALUES ('2709', '陕县', '230');
INSERT INTO `la_area` VALUES ('2710', '卢氏', '230');
INSERT INTO `la_area` VALUES ('2711', '双清', '231');
INSERT INTO `la_area` VALUES ('2712', '大祥', '231');
INSERT INTO `la_area` VALUES ('2713', '北塔', '231');
INSERT INTO `la_area` VALUES ('2714', '武冈', '231');
INSERT INTO `la_area` VALUES ('2715', '邵东', '231');
INSERT INTO `la_area` VALUES ('2716', '新邵', '231');
INSERT INTO `la_area` VALUES ('2717', '邵阳县', '231');
INSERT INTO `la_area` VALUES ('2718', '隆回', '231');
INSERT INTO `la_area` VALUES ('2719', '洞口', '231');
INSERT INTO `la_area` VALUES ('2720', '绥宁', '231');
INSERT INTO `la_area` VALUES ('2721', '新宁', '231');
INSERT INTO `la_area` VALUES ('2722', '城步', '231');
INSERT INTO `la_area` VALUES ('2723', '信州', '232');
INSERT INTO `la_area` VALUES ('2724', '德兴', '232');
INSERT INTO `la_area` VALUES ('2725', '上饶县', '232');
INSERT INTO `la_area` VALUES ('2726', '广丰', '232');
INSERT INTO `la_area` VALUES ('2727', '玉山', '232');
INSERT INTO `la_area` VALUES ('2728', '铅山', '232');
INSERT INTO `la_area` VALUES ('2729', '横峰', '232');
INSERT INTO `la_area` VALUES ('2730', '弋阳', '232');
INSERT INTO `la_area` VALUES ('2731', '余干', '232');
INSERT INTO `la_area` VALUES ('2732', '鄱阳', '232');
INSERT INTO `la_area` VALUES ('2733', '万年', '232');
INSERT INTO `la_area` VALUES ('2734', '婺源', '232');
INSERT INTO `la_area` VALUES ('2735', '船山', '233');
INSERT INTO `la_area` VALUES ('2736', '安居', '233');
INSERT INTO `la_area` VALUES ('2737', '蓬溪', '233');
INSERT INTO `la_area` VALUES ('2738', '射洪', '233');
INSERT INTO `la_area` VALUES ('2739', '大英', '233');
INSERT INTO `la_area` VALUES ('2740', '梅列', '234');
INSERT INTO `la_area` VALUES ('2741', '三元', '234');
INSERT INTO `la_area` VALUES ('2742', '明溪', '234');
INSERT INTO `la_area` VALUES ('2743', '清流', '234');
INSERT INTO `la_area` VALUES ('2744', '宁化', '234');
INSERT INTO `la_area` VALUES ('2745', '大田', '234');
INSERT INTO `la_area` VALUES ('2746', '尤溪', '234');
INSERT INTO `la_area` VALUES ('2747', '沙县', '234');
INSERT INTO `la_area` VALUES ('2748', '将乐', '234');
INSERT INTO `la_area` VALUES ('2749', '泰宁', '234');
INSERT INTO `la_area` VALUES ('2750', '建宁', '234');
INSERT INTO `la_area` VALUES ('2751', '永安', '234');
INSERT INTO `la_area` VALUES ('2752', '北林', '235');
INSERT INTO `la_area` VALUES ('2753', '安达', '235');
INSERT INTO `la_area` VALUES ('2754', '肇东', '235');
INSERT INTO `la_area` VALUES ('2755', '海伦', '235');
INSERT INTO `la_area` VALUES ('2756', '望奎', '235');
INSERT INTO `la_area` VALUES ('2757', '兰西', '235');
INSERT INTO `la_area` VALUES ('2758', '青冈', '235');
INSERT INTO `la_area` VALUES ('2759', '庆安', '235');
INSERT INTO `la_area` VALUES ('2760', '明水', '235');
INSERT INTO `la_area` VALUES ('2761', '绥棱', '235');
INSERT INTO `la_area` VALUES ('2762', '老街', '236');
INSERT INTO `la_area` VALUES ('2763', '红山', '236');
INSERT INTO `la_area` VALUES ('2764', '新城', '236');
INSERT INTO `la_area` VALUES ('2765', '向阳', '236');
INSERT INTO `la_area` VALUES ('2766', '东城', '236');
INSERT INTO `la_area` VALUES ('2767', '北泉', '236');
INSERT INTO `la_area` VALUES ('2768', '石河子乡', '236');
INSERT INTO `la_area` VALUES ('2769', '埇桥', '237');
INSERT INTO `la_area` VALUES ('2770', '砀山', '237');
INSERT INTO `la_area` VALUES ('2771', '萧县', '237');
INSERT INTO `la_area` VALUES ('2772', '灵璧', '237');
INSERT INTO `la_area` VALUES ('2773', '泗县', '237');
INSERT INTO `la_area` VALUES ('2774', '浈江', '238');
INSERT INTO `la_area` VALUES ('2775', '武江', '238');
INSERT INTO `la_area` VALUES ('2776', '曲江', '238');
INSERT INTO `la_area` VALUES ('2777', '乐昌', '238');
INSERT INTO `la_area` VALUES ('2778', '南雄', '238');
INSERT INTO `la_area` VALUES ('2779', '始兴', '238');
INSERT INTO `la_area` VALUES ('2780', '仁化', '238');
INSERT INTO `la_area` VALUES ('2781', '翁源', '238');
INSERT INTO `la_area` VALUES ('2782', '新丰', '238');
INSERT INTO `la_area` VALUES ('2783', '乳源', '238');
INSERT INTO `la_area` VALUES ('2784', '宁江区', '239');
INSERT INTO `la_area` VALUES ('2785', '长岭', '239');
INSERT INTO `la_area` VALUES ('2786', '乾安', '239');
INSERT INTO `la_area` VALUES ('2787', '扶余', '239');
INSERT INTO `la_area` VALUES ('2788', '前郭尔罗斯', '239');
INSERT INTO `la_area` VALUES ('2789', '曾都', '240');
INSERT INTO `la_area` VALUES ('2790', '广水', '240');
INSERT INTO `la_area` VALUES ('2791', '城区', '241');
INSERT INTO `la_area` VALUES ('2792', '陆丰', '241');
INSERT INTO `la_area` VALUES ('2793', '海丰', '241');
INSERT INTO `la_area` VALUES ('2794', '陆河', '241');
INSERT INTO `la_area` VALUES ('2795', '尖山', '242');
INSERT INTO `la_area` VALUES ('2796', '岭东', '242');
INSERT INTO `la_area` VALUES ('2797', '四方台', '242');
INSERT INTO `la_area` VALUES ('2798', '宝山', '242');
INSERT INTO `la_area` VALUES ('2799', '集贤', '242');
INSERT INTO `la_area` VALUES ('2800', '友谊', '242');
INSERT INTO `la_area` VALUES ('2801', '宝清', '242');
INSERT INTO `la_area` VALUES ('2802', '饶河', '242');
INSERT INTO `la_area` VALUES ('2803', '朔城', '243');
INSERT INTO `la_area` VALUES ('2804', '平鲁', '243');
INSERT INTO `la_area` VALUES ('2805', '山阴', '243');
INSERT INTO `la_area` VALUES ('2806', '应县', '243');
INSERT INTO `la_area` VALUES ('2807', '右玉', '243');
INSERT INTO `la_area` VALUES ('2808', '怀仁', '243');
INSERT INTO `la_area` VALUES ('2809', '大武口', '244');
INSERT INTO `la_area` VALUES ('2810', '惠农', '244');
INSERT INTO `la_area` VALUES ('2811', '平罗', '244');
INSERT INTO `la_area` VALUES ('2812', '宁夏网虫', '244');
INSERT INTO `la_area` VALUES ('2813', '商州', '245');
INSERT INTO `la_area` VALUES ('2814', '洛南', '245');
INSERT INTO `la_area` VALUES ('2815', '丹凤', '245');
INSERT INTO `la_area` VALUES ('2816', '商南', '245');
INSERT INTO `la_area` VALUES ('2817', '山阳', '245');
INSERT INTO `la_area` VALUES ('2818', '镇安', '245');
INSERT INTO `la_area` VALUES ('2819', '柞水', '245');
INSERT INTO `la_area` VALUES ('2820', '松柏', '246');
INSERT INTO `la_area` VALUES ('2821', '阳日', '246');
INSERT INTO `la_area` VALUES ('2822', '红坪', '246');
INSERT INTO `la_area` VALUES ('2823', '木鱼', '246');
INSERT INTO `la_area` VALUES ('2824', '新华', '246');
INSERT INTO `la_area` VALUES ('2825', '宋洛', '246');
INSERT INTO `la_area` VALUES ('2826', '九湖', '246');
INSERT INTO `la_area` VALUES ('2827', '下谷平', '246');
INSERT INTO `la_area` VALUES ('2828', '乃东', '247');
INSERT INTO `la_area` VALUES ('2829', '扎囊', '247');
INSERT INTO `la_area` VALUES ('2830', '贡嘎', '247');
INSERT INTO `la_area` VALUES ('2831', '桑日', '247');
INSERT INTO `la_area` VALUES ('2832', '琼结', '247');
INSERT INTO `la_area` VALUES ('2833', '曲松', '247');
INSERT INTO `la_area` VALUES ('2834', '措美', '247');
INSERT INTO `la_area` VALUES ('2835', '洛扎', '247');
INSERT INTO `la_area` VALUES ('2836', '加查', '247');
INSERT INTO `la_area` VALUES ('2837', '隆子', '247');
INSERT INTO `la_area` VALUES ('2838', '错那', '247');
INSERT INTO `la_area` VALUES ('2839', '浪卡子', '247');
INSERT INTO `la_area` VALUES ('2840', '和平', '248');
INSERT INTO `la_area` VALUES ('2841', '河东', '248');
INSERT INTO `la_area` VALUES ('2842', '河西', '248');
INSERT INTO `la_area` VALUES ('2843', '南开', '248');
INSERT INTO `la_area` VALUES ('2844', '河北', '248');
INSERT INTO `la_area` VALUES ('2845', '红桥', '248');
INSERT INTO `la_area` VALUES ('2846', '塘沽', '248');
INSERT INTO `la_area` VALUES ('2847', '汉沽', '248');
INSERT INTO `la_area` VALUES ('2848', '大港', '248');
INSERT INTO `la_area` VALUES ('2849', '开发区', '248');
INSERT INTO `la_area` VALUES ('2850', '东丽', '248');
INSERT INTO `la_area` VALUES ('2851', '西青', '248');
INSERT INTO `la_area` VALUES ('2852', '北辰', '248');
INSERT INTO `la_area` VALUES ('2853', '津南', '248');
INSERT INTO `la_area` VALUES ('2854', '武清', '248');
INSERT INTO `la_area` VALUES ('2855', '宝坻', '248');
INSERT INTO `la_area` VALUES ('2856', '蓟县', '248');
INSERT INTO `la_area` VALUES ('2857', '静海', '248');
INSERT INTO `la_area` VALUES ('2858', '宁河', '248');
INSERT INTO `la_area` VALUES ('2859', '小店', '249');
INSERT INTO `la_area` VALUES ('2860', '迎泽', '249');
INSERT INTO `la_area` VALUES ('2861', '杏花岭', '249');
INSERT INTO `la_area` VALUES ('2862', '尖草坪', '249');
INSERT INTO `la_area` VALUES ('2863', '万柏林', '249');
INSERT INTO `la_area` VALUES ('2864', '晋源', '249');
INSERT INTO `la_area` VALUES ('2865', '清徐', '249');
INSERT INTO `la_area` VALUES ('2866', '阳曲', '249');
INSERT INTO `la_area` VALUES ('2867', '古交', '249');
INSERT INTO `la_area` VALUES ('2868', '娄烦', '249');
INSERT INTO `la_area` VALUES ('2869', '路北区', '250');
INSERT INTO `la_area` VALUES ('2870', '路南区', '250');
INSERT INTO `la_area` VALUES ('2871', '古冶区', '250');
INSERT INTO `la_area` VALUES ('2872', '开平区', '250');
INSERT INTO `la_area` VALUES ('2873', '丰南区', '250');
INSERT INTO `la_area` VALUES ('2874', '丰润区', '250');
INSERT INTO `la_area` VALUES ('2875', '高新区', '250');
INSERT INTO `la_area` VALUES ('2876', '遵化', '250');
INSERT INTO `la_area` VALUES ('2877', '迁安', '250');
INSERT INTO `la_area` VALUES ('2878', '滦县', '250');
INSERT INTO `la_area` VALUES ('2879', '滦南', '250');
INSERT INTO `la_area` VALUES ('2880', '乐亭', '250');
INSERT INTO `la_area` VALUES ('2881', '迁西', '250');
INSERT INTO `la_area` VALUES ('2882', '玉田', '250');
INSERT INTO `la_area` VALUES ('2883', '唐海', '250');
INSERT INTO `la_area` VALUES ('2884', '南堡开发区', '250');
INSERT INTO `la_area` VALUES ('2885', '曹妃甸', '250');
INSERT INTO `la_area` VALUES ('2886', '海港开发区', '250');
INSERT INTO `la_area` VALUES ('2887', '汉沽农场', '250');
INSERT INTO `la_area` VALUES ('2888', '芦台农场', '250');
INSERT INTO `la_area` VALUES ('2889', '泰山', '251');
INSERT INTO `la_area` VALUES ('2890', '岱岳', '251');
INSERT INTO `la_area` VALUES ('2891', '新泰', '251');
INSERT INTO `la_area` VALUES ('2892', '肥城', '251');
INSERT INTO `la_area` VALUES ('2893', '宁阳', '251');
INSERT INTO `la_area` VALUES ('2894', '东平', '251');
INSERT INTO `la_area` VALUES ('2895', '椒江', '252');
INSERT INTO `la_area` VALUES ('2896', '黄岩', '252');
INSERT INTO `la_area` VALUES ('2897', '路桥', '252');
INSERT INTO `la_area` VALUES ('2898', '温岭', '252');
INSERT INTO `la_area` VALUES ('2899', '临海', '252');
INSERT INTO `la_area` VALUES ('2900', '玉环', '252');
INSERT INTO `la_area` VALUES ('2901', '三门', '252');
INSERT INTO `la_area` VALUES ('2902', '天台', '252');
INSERT INTO `la_area` VALUES ('2903', '仙居', '252');
INSERT INTO `la_area` VALUES ('2904', '海陵', '253');
INSERT INTO `la_area` VALUES ('2905', '高港', '253');
INSERT INTO `la_area` VALUES ('2906', '姜堰', '253');
INSERT INTO `la_area` VALUES ('2907', '泰兴', '253');
INSERT INTO `la_area` VALUES ('2908', '靖江', '253');
INSERT INTO `la_area` VALUES ('2909', '兴化', '253');
INSERT INTO `la_area` VALUES ('2910', '银州', '254');
INSERT INTO `la_area` VALUES ('2911', '清河', '254');
INSERT INTO `la_area` VALUES ('2912', '调兵山', '254');
INSERT INTO `la_area` VALUES ('2913', '开原', '254');
INSERT INTO `la_area` VALUES ('2914', '铁岭县', '254');
INSERT INTO `la_area` VALUES ('2915', '西丰', '254');
INSERT INTO `la_area` VALUES ('2916', '昌图', '254');
INSERT INTO `la_area` VALUES ('2917', '科尔沁', '255');
INSERT INTO `la_area` VALUES ('2918', '霍林郭勒', '255');
INSERT INTO `la_area` VALUES ('2919', '科尔沁左翼中', '255');
INSERT INTO `la_area` VALUES ('2920', '科尔沁左翼后', '255');
INSERT INTO `la_area` VALUES ('2921', '开鲁', '255');
INSERT INTO `la_area` VALUES ('2922', '库伦', '255');
INSERT INTO `la_area` VALUES ('2923', '奈曼', '255');
INSERT INTO `la_area` VALUES ('2924', '扎鲁特', '255');
INSERT INTO `la_area` VALUES ('2925', '东昌区', '256');
INSERT INTO `la_area` VALUES ('2926', '二道江区', '256');
INSERT INTO `la_area` VALUES ('2927', '梅河口', '256');
INSERT INTO `la_area` VALUES ('2928', '集安', '256');
INSERT INTO `la_area` VALUES ('2929', '通化县', '256');
INSERT INTO `la_area` VALUES ('2930', '辉南', '256');
INSERT INTO `la_area` VALUES ('2931', '柳河', '256');
INSERT INTO `la_area` VALUES ('2932', '秦城', '257');
INSERT INTO `la_area` VALUES ('2933', '北道', '257');
INSERT INTO `la_area` VALUES ('2934', '清水', '257');
INSERT INTO `la_area` VALUES ('2935', '秦安', '257');
INSERT INTO `la_area` VALUES ('2936', '甘谷', '257');
INSERT INTO `la_area` VALUES ('2937', '武山', '257');
INSERT INTO `la_area` VALUES ('2938', '张家川', '257');
INSERT INTO `la_area` VALUES ('2939', '铜官山', '258');
INSERT INTO `la_area` VALUES ('2940', '狮子山', '258');
INSERT INTO `la_area` VALUES ('2941', '郊区', '258');
INSERT INTO `la_area` VALUES ('2942', '铜陵县', '258');
INSERT INTO `la_area` VALUES ('2943', '耀州', '259');
INSERT INTO `la_area` VALUES ('2944', '王益', '259');
INSERT INTO `la_area` VALUES ('2945', '印台', '259');
INSERT INTO `la_area` VALUES ('2946', '宜君', '259');
INSERT INTO `la_area` VALUES ('2947', '铜仁市', '260');
INSERT INTO `la_area` VALUES ('2948', '江口', '260');
INSERT INTO `la_area` VALUES ('2949', '石阡', '260');
INSERT INTO `la_area` VALUES ('2950', '思南', '260');
INSERT INTO `la_area` VALUES ('2951', '德江', '260');
INSERT INTO `la_area` VALUES ('2952', '玉屏', '260');
INSERT INTO `la_area` VALUES ('2953', '印江', '260');
INSERT INTO `la_area` VALUES ('2954', '沿河', '260');
INSERT INTO `la_area` VALUES ('2955', '松桃', '260');
INSERT INTO `la_area` VALUES ('2956', '万山', '260');
INSERT INTO `la_area` VALUES ('2957', '竟陵', '261');
INSERT INTO `la_area` VALUES ('2958', '岳口', '261');
INSERT INTO `la_area` VALUES ('2959', '候口', '261');
INSERT INTO `la_area` VALUES ('2960', '杨林', '261');
INSERT INTO `la_area` VALUES ('2961', '多宝', '261');
INSERT INTO `la_area` VALUES ('2962', '拖市', '261');
INSERT INTO `la_area` VALUES ('2963', '张港', '261');
INSERT INTO `la_area` VALUES ('2964', '蒋场', '261');
INSERT INTO `la_area` VALUES ('2965', '汪场', '261');
INSERT INTO `la_area` VALUES ('2966', '渔薪', '261');
INSERT INTO `la_area` VALUES ('2967', '黄潭', '261');
INSERT INTO `la_area` VALUES ('2968', '横林', '261');
INSERT INTO `la_area` VALUES ('2969', '彭市', '261');
INSERT INTO `la_area` VALUES ('2970', '麻洋', '261');
INSERT INTO `la_area` VALUES ('2971', '多祥', '261');
INSERT INTO `la_area` VALUES ('2972', '干驿', '261');
INSERT INTO `la_area` VALUES ('2973', '马湾', '261');
INSERT INTO `la_area` VALUES ('2974', '卢市', '261');
INSERT INTO `la_area` VALUES ('2975', '小板', '261');
INSERT INTO `la_area` VALUES ('2976', '九真', '261');
INSERT INTO `la_area` VALUES ('2977', '皂市', '261');
INSERT INTO `la_area` VALUES ('2978', '胡市', '261');
INSERT INTO `la_area` VALUES ('2979', '石河', '261');
INSERT INTO `la_area` VALUES ('2980', '佛子山', '261');
INSERT INTO `la_area` VALUES ('2981', '净潭', '261');
INSERT INTO `la_area` VALUES ('2982', '塔城市', '262');
INSERT INTO `la_area` VALUES ('2983', '乌苏', '262');
INSERT INTO `la_area` VALUES ('2984', '额敏', '262');
INSERT INTO `la_area` VALUES ('2985', '沙湾', '262');
INSERT INTO `la_area` VALUES ('2986', '托里', '262');
INSERT INTO `la_area` VALUES ('2987', '裕民', '262');
INSERT INTO `la_area` VALUES ('2988', '和布克赛尔', '262');
INSERT INTO `la_area` VALUES ('2989', '吐鲁番市', '263');
INSERT INTO `la_area` VALUES ('2990', '鄯善', '263');
INSERT INTO `la_area` VALUES ('2991', '托克逊', '263');
INSERT INTO `la_area` VALUES ('2992', '图木舒克市区', '264');
INSERT INTO `la_area` VALUES ('2993', '喀拉拜勒镇', '264');
INSERT INTO `la_area` VALUES ('2994', '永安坝', '264');
INSERT INTO `la_area` VALUES ('2995', '盖米里克', '264');
INSERT INTO `la_area` VALUES ('2996', '金墩', '264');
INSERT INTO `la_area` VALUES ('2997', '皮恰克松地', '264');
INSERT INTO `la_area` VALUES ('2998', '其盖麦旦', '264');
INSERT INTO `la_area` VALUES ('2999', '图木休克', '264');
INSERT INTO `la_area` VALUES ('3000', '图木舒克周边', '264');
INSERT INTO `la_area` VALUES ('3001', '江汉', '265');
INSERT INTO `la_area` VALUES ('3002', '江岸', '265');
INSERT INTO `la_area` VALUES ('3003', '硚口', '265');
INSERT INTO `la_area` VALUES ('3004', '武昌', '265');
INSERT INTO `la_area` VALUES ('3005', '洪山', '265');
INSERT INTO `la_area` VALUES ('3006', '青山', '265');
INSERT INTO `la_area` VALUES ('3007', '汉阳', '265');
INSERT INTO `la_area` VALUES ('3008', '沌口开发区', '265');
INSERT INTO `la_area` VALUES ('3009', '东西湖', '265');
INSERT INTO `la_area` VALUES ('3010', '蔡甸', '265');
INSERT INTO `la_area` VALUES ('3011', '黄陂', '265');
INSERT INTO `la_area` VALUES ('3012', '新洲', '265');
INSERT INTO `la_area` VALUES ('3013', '江夏', '265');
INSERT INTO `la_area` VALUES ('3014', '汉南', '265');
INSERT INTO `la_area` VALUES ('3015', '崇安', '266');
INSERT INTO `la_area` VALUES ('3016', '南长', '266');
INSERT INTO `la_area` VALUES ('3017', '北塘', '266');
INSERT INTO `la_area` VALUES ('3018', '滨湖', '266');
INSERT INTO `la_area` VALUES ('3019', '新区', '266');
INSERT INTO `la_area` VALUES ('3020', '锡山', '266');
INSERT INTO `la_area` VALUES ('3021', '惠山', '266');
INSERT INTO `la_area` VALUES ('3022', '江阴', '266');
INSERT INTO `la_area` VALUES ('3023', '宜兴', '266');
INSERT INTO `la_area` VALUES ('3024', '天山', '267');
INSERT INTO `la_area` VALUES ('3025', '沙依巴克', '267');
INSERT INTO `la_area` VALUES ('3026', '新市', '267');
INSERT INTO `la_area` VALUES ('3027', '水磨沟', '267');
INSERT INTO `la_area` VALUES ('3028', '开发', '267');
INSERT INTO `la_area` VALUES ('3029', '头屯河', '267');
INSERT INTO `la_area` VALUES ('3030', '米东', '267');
INSERT INTO `la_area` VALUES ('3031', '东山', '267');
INSERT INTO `la_area` VALUES ('3032', '乌鲁木齐县', '267');
INSERT INTO `la_area` VALUES ('3033', '达坂城', '267');
INSERT INTO `la_area` VALUES ('3034', '环翠', '268');
INSERT INTO `la_area` VALUES ('3035', '高区', '268');
INSERT INTO `la_area` VALUES ('3036', '经区', '268');
INSERT INTO `la_area` VALUES ('3037', '文登', '268');
INSERT INTO `la_area` VALUES ('3038', '乳山', '268');
INSERT INTO `la_area` VALUES ('3039', '荣成', '268');
INSERT INTO `la_area` VALUES ('3040', '潍城', '269');
INSERT INTO `la_area` VALUES ('3041', '寒亭', '269');
INSERT INTO `la_area` VALUES ('3042', '坊子', '269');
INSERT INTO `la_area` VALUES ('3043', '奎文', '269');
INSERT INTO `la_area` VALUES ('3044', '高新区', '269');
INSERT INTO `la_area` VALUES ('3045', '滨海新区', '269');
INSERT INTO `la_area` VALUES ('3046', '经开区', '269');
INSERT INTO `la_area` VALUES ('3047', '青州', '269');
INSERT INTO `la_area` VALUES ('3048', '诸城', '269');
INSERT INTO `la_area` VALUES ('3049', '寿光', '269');
INSERT INTO `la_area` VALUES ('3050', '安丘', '269');
INSERT INTO `la_area` VALUES ('3051', '高密', '269');
INSERT INTO `la_area` VALUES ('3052', '昌邑', '269');
INSERT INTO `la_area` VALUES ('3053', '临朐', '269');
INSERT INTO `la_area` VALUES ('3054', '昌乐', '269');
INSERT INTO `la_area` VALUES ('3055', '鹿城', '270');
INSERT INTO `la_area` VALUES ('3056', '龙湾', '270');
INSERT INTO `la_area` VALUES ('3057', '瓯海', '270');
INSERT INTO `la_area` VALUES ('3058', '瑞安', '270');
INSERT INTO `la_area` VALUES ('3059', '乐清', '270');
INSERT INTO `la_area` VALUES ('3060', '洞头', '270');
INSERT INTO `la_area` VALUES ('3061', '永嘉', '270');
INSERT INTO `la_area` VALUES ('3062', '平阳', '270');
INSERT INTO `la_area` VALUES ('3063', '苍南', '270');
INSERT INTO `la_area` VALUES ('3064', '文成', '270');
INSERT INTO `la_area` VALUES ('3065', '泰顺', '270');
INSERT INTO `la_area` VALUES ('3066', '镜湖', '271');
INSERT INTO `la_area` VALUES ('3067', '弋江', '271');
INSERT INTO `la_area` VALUES ('3068', '鸠江', '271');
INSERT INTO `la_area` VALUES ('3069', '三山', '271');
INSERT INTO `la_area` VALUES ('3070', '芜湖县', '271');
INSERT INTO `la_area` VALUES ('3071', '繁昌', '271');
INSERT INTO `la_area` VALUES ('3072', '南陵', '271');
INSERT INTO `la_area` VALUES ('3073', '临渭', '272');
INSERT INTO `la_area` VALUES ('3074', '韩城', '272');
INSERT INTO `la_area` VALUES ('3075', '华阴', '272');
INSERT INTO `la_area` VALUES ('3076', '华县', '272');
INSERT INTO `la_area` VALUES ('3077', '潼关', '272');
INSERT INTO `la_area` VALUES ('3078', '大荔', '272');
INSERT INTO `la_area` VALUES ('3079', '合阳', '272');
INSERT INTO `la_area` VALUES ('3080', '澄城', '272');
INSERT INTO `la_area` VALUES ('3081', '蒲城', '272');
INSERT INTO `la_area` VALUES ('3082', '白水', '272');
INSERT INTO `la_area` VALUES ('3083', '富平', '272');
INSERT INTO `la_area` VALUES ('3084', '海勃湾', '273');
INSERT INTO `la_area` VALUES ('3085', '海南', '273');
INSERT INTO `la_area` VALUES ('3086', '乌达', '273');
INSERT INTO `la_area` VALUES ('3087', '万秀', '274');
INSERT INTO `la_area` VALUES ('3088', '蝶山', '274');
INSERT INTO `la_area` VALUES ('3089', '长洲', '274');
INSERT INTO `la_area` VALUES ('3090', '岑溪', '274');
INSERT INTO `la_area` VALUES ('3091', '苍梧', '274');
INSERT INTO `la_area` VALUES ('3092', '藤县', '274');
INSERT INTO `la_area` VALUES ('3093', '蒙山', '274');
INSERT INTO `la_area` VALUES ('3094', '集宁', '275');
INSERT INTO `la_area` VALUES ('3095', '丰镇', '275');
INSERT INTO `la_area` VALUES ('3096', '卓资', '275');
INSERT INTO `la_area` VALUES ('3097', '化德', '275');
INSERT INTO `la_area` VALUES ('3098', '商都', '275');
INSERT INTO `la_area` VALUES ('3099', '兴和', '275');
INSERT INTO `la_area` VALUES ('3100', '凉城', '275');
INSERT INTO `la_area` VALUES ('3101', '察哈尔右翼前', '275');
INSERT INTO `la_area` VALUES ('3102', '察哈尔右翼中', '275');
INSERT INTO `la_area` VALUES ('3103', '察哈尔右翼后', '275');
INSERT INTO `la_area` VALUES ('3104', '四子王', '275');
INSERT INTO `la_area` VALUES ('3105', '凉州', '276');
INSERT INTO `la_area` VALUES ('3106', '民勤', '276');
INSERT INTO `la_area` VALUES ('3107', '古浪', '276');
INSERT INTO `la_area` VALUES ('3108', '天祝', '276');
INSERT INTO `la_area` VALUES ('3109', '文山市', '277');
INSERT INTO `la_area` VALUES ('3110', '砚山', '277');
INSERT INTO `la_area` VALUES ('3111', '西畴', '277');
INSERT INTO `la_area` VALUES ('3112', '麻栗坡', '277');
INSERT INTO `la_area` VALUES ('3113', '马关', '277');
INSERT INTO `la_area` VALUES ('3114', '丘北', '277');
INSERT INTO `la_area` VALUES ('3115', '广南', '277');
INSERT INTO `la_area` VALUES ('3116', '富宁', '277');
INSERT INTO `la_area` VALUES ('3117', '利通', '278');
INSERT INTO `la_area` VALUES ('3118', '盐池', '278');
INSERT INTO `la_area` VALUES ('3119', '同心', '278');
INSERT INTO `la_area` VALUES ('3120', '青铜峡', '278');
INSERT INTO `la_area` VALUES ('3121', '军垦路街道', '279');
INSERT INTO `la_area` VALUES ('3122', '青湖路街道', '279');
INSERT INTO `la_area` VALUES ('3123', '人民路街道', '279');
INSERT INTO `la_area` VALUES ('3124', '101团', '279');
INSERT INTO `la_area` VALUES ('3125', '102团', '279');
INSERT INTO `la_area` VALUES ('3126', '103团', '279');
INSERT INTO `la_area` VALUES ('3127', '五家渠周边', '279');
INSERT INTO `la_area` VALUES ('3128', '冲山镇', '280');
INSERT INTO `la_area` VALUES ('3129', '南圣镇', '280');
INSERT INTO `la_area` VALUES ('3130', '毛阳镇', '280');
INSERT INTO `la_area` VALUES ('3131', '番阳镇', '280');
INSERT INTO `la_area` VALUES ('3132', '五指山周边', '280');
INSERT INTO `la_area` VALUES ('3133', '莲湖', '281');
INSERT INTO `la_area` VALUES ('3134', '新城', '281');
INSERT INTO `la_area` VALUES ('3135', '碑林', '281');
INSERT INTO `la_area` VALUES ('3136', '雁塔', '281');
INSERT INTO `la_area` VALUES ('3137', '灞桥', '281');
INSERT INTO `la_area` VALUES ('3138', '蓝田', '281');
INSERT INTO `la_area` VALUES ('3139', '未央', '281');
INSERT INTO `la_area` VALUES ('3140', '阎良', '281');
INSERT INTO `la_area` VALUES ('3141', '临潼', '281');
INSERT INTO `la_area` VALUES ('3142', '长安', '281');
INSERT INTO `la_area` VALUES ('3143', '高新', '281');
INSERT INTO `la_area` VALUES ('3144', '沣渭新区', '281');
INSERT INTO `la_area` VALUES ('3145', '曲江新区', '281');
INSERT INTO `la_area` VALUES ('3146', '高陵', '281');
INSERT INTO `la_area` VALUES ('3147', '户县', '281');
INSERT INTO `la_area` VALUES ('3148', '周至', '281');
INSERT INTO `la_area` VALUES ('3149', '浐灞', '281');
INSERT INTO `la_area` VALUES ('3150', '其他', '281');
INSERT INTO `la_area` VALUES ('3151', '思明', '282');
INSERT INTO `la_area` VALUES ('3152', '湖里', '282');
INSERT INTO `la_area` VALUES ('3153', '集美', '282');
INSERT INTO `la_area` VALUES ('3154', '海沧', '282');
INSERT INTO `la_area` VALUES ('3155', '同安', '282');
INSERT INTO `la_area` VALUES ('3156', '翔安', '282');
INSERT INTO `la_area` VALUES ('3157', '城东', '283');
INSERT INTO `la_area` VALUES ('3158', '城中', '283');
INSERT INTO `la_area` VALUES ('3159', '城西', '283');
INSERT INTO `la_area` VALUES ('3160', '城北', '283');
INSERT INTO `la_area` VALUES ('3161', '大通自治县', '283');
INSERT INTO `la_area` VALUES ('3162', '湟中', '283');
INSERT INTO `la_area` VALUES ('3163', '湟源', '283');
INSERT INTO `la_area` VALUES ('3164', '云龙', '284');
INSERT INTO `la_area` VALUES ('3165', '鼓楼', '284');
INSERT INTO `la_area` VALUES ('3166', '九里', '284');
INSERT INTO `la_area` VALUES ('3167', '贾汪', '284');
INSERT INTO `la_area` VALUES ('3168', '泉山', '284');
INSERT INTO `la_area` VALUES ('3169', '新沂', '284');
INSERT INTO `la_area` VALUES ('3170', '邳州', '284');
INSERT INTO `la_area` VALUES ('3171', '丰县', '284');
INSERT INTO `la_area` VALUES ('3172', '沛县', '284');
INSERT INTO `la_area` VALUES ('3173', '铜山', '284');
INSERT INTO `la_area` VALUES ('3174', '睢宁', '284');
INSERT INTO `la_area` VALUES ('3175', '金山桥开发区', '284');
INSERT INTO `la_area` VALUES ('3176', '新城区', '284');
INSERT INTO `la_area` VALUES ('3177', '秦都', '285');
INSERT INTO `la_area` VALUES ('3178', '杨陵', '285');
INSERT INTO `la_area` VALUES ('3179', '渭城', '285');
INSERT INTO `la_area` VALUES ('3180', '兴平', '285');
INSERT INTO `la_area` VALUES ('3181', '三原', '285');
INSERT INTO `la_area` VALUES ('3182', '泾阳', '285');
INSERT INTO `la_area` VALUES ('3183', '乾县', '285');
INSERT INTO `la_area` VALUES ('3184', '礼泉', '285');
INSERT INTO `la_area` VALUES ('3185', '永寿', '285');
INSERT INTO `la_area` VALUES ('3186', '彬县', '285');
INSERT INTO `la_area` VALUES ('3187', '长武', '285');
INSERT INTO `la_area` VALUES ('3188', '旬邑', '285');
INSERT INTO `la_area` VALUES ('3189', '淳化', '285');
INSERT INTO `la_area` VALUES ('3190', '武功', '285');
INSERT INTO `la_area` VALUES ('3191', '桥东区', '286');
INSERT INTO `la_area` VALUES ('3192', '桥西区', '286');
INSERT INTO `la_area` VALUES ('3193', '南宫', '286');
INSERT INTO `la_area` VALUES ('3194', '沙河', '286');
INSERT INTO `la_area` VALUES ('3195', '邢台县', '286');
INSERT INTO `la_area` VALUES ('3196', '临城', '286');
INSERT INTO `la_area` VALUES ('3197', '内丘', '286');
INSERT INTO `la_area` VALUES ('3198', '柏乡', '286');
INSERT INTO `la_area` VALUES ('3199', '隆尧', '286');
INSERT INTO `la_area` VALUES ('3200', '任县', '286');
INSERT INTO `la_area` VALUES ('3201', '南和', '286');
INSERT INTO `la_area` VALUES ('3202', '宁晋', '286');
INSERT INTO `la_area` VALUES ('3203', '巨鹿', '286');
INSERT INTO `la_area` VALUES ('3204', '新河', '286');
INSERT INTO `la_area` VALUES ('3205', '广宗', '286');
INSERT INTO `la_area` VALUES ('3206', '平乡', '286');
INSERT INTO `la_area` VALUES ('3207', '威县', '286');
INSERT INTO `la_area` VALUES ('3208', '清河', '286');
INSERT INTO `la_area` VALUES ('3209', '临西', '286');
INSERT INTO `la_area` VALUES ('3210', '襄城', '287');
INSERT INTO `la_area` VALUES ('3211', '樊城', '287');
INSERT INTO `la_area` VALUES ('3212', '襄州', '287');
INSERT INTO `la_area` VALUES ('3213', '老河口', '287');
INSERT INTO `la_area` VALUES ('3214', '枣阳', '287');
INSERT INTO `la_area` VALUES ('3215', '宜城', '287');
INSERT INTO `la_area` VALUES ('3216', '南漳', '287');
INSERT INTO `la_area` VALUES ('3217', '谷城', '287');
INSERT INTO `la_area` VALUES ('3218', '保康', '287');
INSERT INTO `la_area` VALUES ('3219', '卫滨', '288');
INSERT INTO `la_area` VALUES ('3220', '红旗', '288');
INSERT INTO `la_area` VALUES ('3221', '凤泉', '288');
INSERT INTO `la_area` VALUES ('3222', '牧野', '288');
INSERT INTO `la_area` VALUES ('3223', '卫辉', '288');
INSERT INTO `la_area` VALUES ('3224', '辉县', '288');
INSERT INTO `la_area` VALUES ('3225', '新乡县', '288');
INSERT INTO `la_area` VALUES ('3226', '获嘉', '288');
INSERT INTO `la_area` VALUES ('3227', '原阳', '288');
INSERT INTO `la_area` VALUES ('3228', '延津', '288');
INSERT INTO `la_area` VALUES ('3229', '封丘', '288');
INSERT INTO `la_area` VALUES ('3230', '长垣', '288');
INSERT INTO `la_area` VALUES ('3231', '雨湖', '289');
INSERT INTO `la_area` VALUES ('3232', '岳塘', '289');
INSERT INTO `la_area` VALUES ('3233', '湘乡', '289');
INSERT INTO `la_area` VALUES ('3234', '韶山', '289');
INSERT INTO `la_area` VALUES ('3235', '湘潭县', '289');
INSERT INTO `la_area` VALUES ('3236', '魏都', '290');
INSERT INTO `la_area` VALUES ('3237', '禹州', '290');
INSERT INTO `la_area` VALUES ('3238', '长葛', '290');
INSERT INTO `la_area` VALUES ('3239', '许昌县', '290');
INSERT INTO `la_area` VALUES ('3240', '鄢陵', '290');
INSERT INTO `la_area` VALUES ('3241', '襄城', '290');
INSERT INTO `la_area` VALUES ('3242', '浉河', '291');
INSERT INTO `la_area` VALUES ('3243', '平桥', '291');
INSERT INTO `la_area` VALUES ('3244', '罗山', '291');
INSERT INTO `la_area` VALUES ('3245', '光山', '291');
INSERT INTO `la_area` VALUES ('3246', '新县', '291');
INSERT INTO `la_area` VALUES ('3247', '商城', '291');
INSERT INTO `la_area` VALUES ('3248', '固始', '291');
INSERT INTO `la_area` VALUES ('3249', '潢川', '291');
INSERT INTO `la_area` VALUES ('3250', '淮滨', '291');
INSERT INTO `la_area` VALUES ('3251', '息县', '291');
INSERT INTO `la_area` VALUES ('3252', '孝南', '292');
INSERT INTO `la_area` VALUES ('3253', '应城', '292');
INSERT INTO `la_area` VALUES ('3254', '安陆', '292');
INSERT INTO `la_area` VALUES ('3255', '汉川', '292');
INSERT INTO `la_area` VALUES ('3256', '孝昌', '292');
INSERT INTO `la_area` VALUES ('3257', '大悟', '292');
INSERT INTO `la_area` VALUES ('3258', '云梦', '292');
INSERT INTO `la_area` VALUES ('3259', '忻府', '293');
INSERT INTO `la_area` VALUES ('3260', '定襄', '293');
INSERT INTO `la_area` VALUES ('3261', '五台', '293');
INSERT INTO `la_area` VALUES ('3262', '代县', '293');
INSERT INTO `la_area` VALUES ('3263', '繁峙', '293');
INSERT INTO `la_area` VALUES ('3264', '宁武', '293');
INSERT INTO `la_area` VALUES ('3265', '静乐', '293');
INSERT INTO `la_area` VALUES ('3266', '神池', '293');
INSERT INTO `la_area` VALUES ('3267', '五寨', '293');
INSERT INTO `la_area` VALUES ('3268', '岢岚', '293');
INSERT INTO `la_area` VALUES ('3269', '河曲', '293');
INSERT INTO `la_area` VALUES ('3270', '保德', '293');
INSERT INTO `la_area` VALUES ('3271', '偏关', '293');
INSERT INTO `la_area` VALUES ('3272', '原平', '293');
INSERT INTO `la_area` VALUES ('3273', '咸安', '294');
INSERT INTO `la_area` VALUES ('3274', '赤壁', '294');
INSERT INTO `la_area` VALUES ('3275', '嘉鱼', '294');
INSERT INTO `la_area` VALUES ('3276', '通城', '294');
INSERT INTO `la_area` VALUES ('3277', '崇阳', '294');
INSERT INTO `la_area` VALUES ('3278', '通山', '294');
INSERT INTO `la_area` VALUES ('3279', '渝水', '295');
INSERT INTO `la_area` VALUES ('3280', '分宜', '295');
INSERT INTO `la_area` VALUES ('3281', '宣州', '296');
INSERT INTO `la_area` VALUES ('3282', '宁国', '296');
INSERT INTO `la_area` VALUES ('3283', '郎溪', '296');
INSERT INTO `la_area` VALUES ('3284', '广德', '296');
INSERT INTO `la_area` VALUES ('3285', '泾县', '296');
INSERT INTO `la_area` VALUES ('3286', '绩溪', '296');
INSERT INTO `la_area` VALUES ('3287', '旌德', '296');
INSERT INTO `la_area` VALUES ('3288', '沙嘴', '297');
INSERT INTO `la_area` VALUES ('3289', '干河', '297');
INSERT INTO `la_area` VALUES ('3290', '龙华山', '297');
INSERT INTO `la_area` VALUES ('3291', '郑场', '297');
INSERT INTO `la_area` VALUES ('3292', '毛嘴', '297');
INSERT INTO `la_area` VALUES ('3293', '剅河', '297');
INSERT INTO `la_area` VALUES ('3294', '三伏潭', '297');
INSERT INTO `la_area` VALUES ('3295', '胡场', '297');
INSERT INTO `la_area` VALUES ('3296', '长埫口', '297');
INSERT INTO `la_area` VALUES ('3297', '西流河', '297');
INSERT INTO `la_area` VALUES ('3298', '彭场', '297');
INSERT INTO `la_area` VALUES ('3299', '沙湖', '297');
INSERT INTO `la_area` VALUES ('3300', '杨林尾', '297');
INSERT INTO `la_area` VALUES ('3301', '张沟', '297');
INSERT INTO `la_area` VALUES ('3302', '郭河', '297');
INSERT INTO `la_area` VALUES ('3303', '沔城', '297');
INSERT INTO `la_area` VALUES ('3304', '通海口', '297');
INSERT INTO `la_area` VALUES ('3305', '陈场', '297');
INSERT INTO `la_area` VALUES ('3306', '工业园', '297');
INSERT INTO `la_area` VALUES ('3307', '二连浩特', '298');
INSERT INTO `la_area` VALUES ('3308', '锡林浩特', '298');
INSERT INTO `la_area` VALUES ('3309', '阿巴嘎', '298');
INSERT INTO `la_area` VALUES ('3310', '苏尼特左', '298');
INSERT INTO `la_area` VALUES ('3311', '苏尼特右', '298');
INSERT INTO `la_area` VALUES ('3312', '东乌珠穆沁', '298');
INSERT INTO `la_area` VALUES ('3313', '西乌珠穆沁', '298');
INSERT INTO `la_area` VALUES ('3314', '太仆寺', '298');
INSERT INTO `la_area` VALUES ('3315', '镶黄', '298');
INSERT INTO `la_area` VALUES ('3316', '正镶白', '298');
INSERT INTO `la_area` VALUES ('3317', '正蓝', '298');
INSERT INTO `la_area` VALUES ('3318', '多伦', '298');
INSERT INTO `la_area` VALUES ('3319', '吉首', '299');
INSERT INTO `la_area` VALUES ('3320', '泸溪', '299');
INSERT INTO `la_area` VALUES ('3321', '凤凰', '299');
INSERT INTO `la_area` VALUES ('3322', '花垣', '299');
INSERT INTO `la_area` VALUES ('3323', '保靖', '299');
INSERT INTO `la_area` VALUES ('3324', '古丈', '299');
INSERT INTO `la_area` VALUES ('3325', '永顺', '299');
INSERT INTO `la_area` VALUES ('3326', '龙山', '299');
INSERT INTO `la_area` VALUES ('3327', '乌兰浩特', '300');
INSERT INTO `la_area` VALUES ('3328', '阿尔山', '300');
INSERT INTO `la_area` VALUES ('3329', '科尔沁右翼前', '300');
INSERT INTO `la_area` VALUES ('3330', '科尔沁右翼中', '300');
INSERT INTO `la_area` VALUES ('3331', '扎赉特', '300');
INSERT INTO `la_area` VALUES ('3332', '突泉', '300');
INSERT INTO `la_area` VALUES ('3333', '景洪', '301');
INSERT INTO `la_area` VALUES ('3334', '勐海', '301');
INSERT INTO `la_area` VALUES ('3335', '勐腊', '301');
INSERT INTO `la_area` VALUES ('3336', '中西区', '302');
INSERT INTO `la_area` VALUES ('3337', '东区', '302');
INSERT INTO `la_area` VALUES ('3338', '九龙城区', '302');
INSERT INTO `la_area` VALUES ('3339', '观塘区', '302');
INSERT INTO `la_area` VALUES ('3340', '南区', '302');
INSERT INTO `la_area` VALUES ('3341', '深水埗区', '302');
INSERT INTO `la_area` VALUES ('3342', '黄大仙区', '302');
INSERT INTO `la_area` VALUES ('3343', '湾仔区', '302');
INSERT INTO `la_area` VALUES ('3344', '油尖旺区', '302');
INSERT INTO `la_area` VALUES ('3345', '离岛区', '302');
INSERT INTO `la_area` VALUES ('3346', '葵青区', '302');
INSERT INTO `la_area` VALUES ('3347', '北区', '302');
INSERT INTO `la_area` VALUES ('3348', '西贡区', '302');
INSERT INTO `la_area` VALUES ('3349', '沙田区', '302');
INSERT INTO `la_area` VALUES ('3350', '屯门区', '302');
INSERT INTO `la_area` VALUES ('3351', '大埔区', '302');
INSERT INTO `la_area` VALUES ('3352', '荃湾区', '302');
INSERT INTO `la_area` VALUES ('3353', '元朗区', '302');
INSERT INTO `la_area` VALUES ('3354', '兴庆', '303');
INSERT INTO `la_area` VALUES ('3355', '金凤', '303');
INSERT INTO `la_area` VALUES ('3356', '西夏', '303');
INSERT INTO `la_area` VALUES ('3357', '贺兰', '303');
INSERT INTO `la_area` VALUES ('3358', '永宁', '303');
INSERT INTO `la_area` VALUES ('3359', '灵武', '303');
INSERT INTO `la_area` VALUES ('3360', '西陵', '304');
INSERT INTO `la_area` VALUES ('3361', '伍家岗', '304');
INSERT INTO `la_area` VALUES ('3362', '东山开发区', '304');
INSERT INTO `la_area` VALUES ('3363', '点军', '304');
INSERT INTO `la_area` VALUES ('3364', '猇亭', '304');
INSERT INTO `la_area` VALUES ('3365', '夷陵', '304');
INSERT INTO `la_area` VALUES ('3366', '宜都', '304');
INSERT INTO `la_area` VALUES ('3367', '当阳', '304');
INSERT INTO `la_area` VALUES ('3368', '枝江', '304');
INSERT INTO `la_area` VALUES ('3369', '远安', '304');
INSERT INTO `la_area` VALUES ('3370', '兴山', '304');
INSERT INTO `la_area` VALUES ('3371', '秭归', '304');
INSERT INTO `la_area` VALUES ('3372', '长阳', '304');
INSERT INTO `la_area` VALUES ('3373', '五峰', '304');
INSERT INTO `la_area` VALUES ('3374', '芝罘', '305');
INSERT INTO `la_area` VALUES ('3375', '福山', '305');
INSERT INTO `la_area` VALUES ('3376', '牟平', '305');
INSERT INTO `la_area` VALUES ('3377', '莱山', '305');
INSERT INTO `la_area` VALUES ('3378', '开发区', '305');
INSERT INTO `la_area` VALUES ('3379', '龙口', '305');
INSERT INTO `la_area` VALUES ('3380', '莱阳', '305');
INSERT INTO `la_area` VALUES ('3381', '莱州', '305');
INSERT INTO `la_area` VALUES ('3382', '蓬莱', '305');
INSERT INTO `la_area` VALUES ('3383', '招远', '305');
INSERT INTO `la_area` VALUES ('3384', '栖霞', '305');
INSERT INTO `la_area` VALUES ('3385', '海阳', '305');
INSERT INTO `la_area` VALUES ('3386', '长岛', '305');
INSERT INTO `la_area` VALUES ('3387', '广陵', '306');
INSERT INTO `la_area` VALUES ('3388', '邗江', '306');
INSERT INTO `la_area` VALUES ('3389', '维扬', '306');
INSERT INTO `la_area` VALUES ('3390', '开发区', '306');
INSERT INTO `la_area` VALUES ('3391', '仪征', '306');
INSERT INTO `la_area` VALUES ('3392', '高邮', '306');
INSERT INTO `la_area` VALUES ('3393', '江都', '306');
INSERT INTO `la_area` VALUES ('3394', '宝应', '306');
INSERT INTO `la_area` VALUES ('3395', '亭湖', '307');
INSERT INTO `la_area` VALUES ('3396', '盐都', '307');
INSERT INTO `la_area` VALUES ('3397', '东台', '307');
INSERT INTO `la_area` VALUES ('3398', '大丰', '307');
INSERT INTO `la_area` VALUES ('3399', '响水', '307');
INSERT INTO `la_area` VALUES ('3400', '滨海', '307');
INSERT INTO `la_area` VALUES ('3401', '阜宁', '307');
INSERT INTO `la_area` VALUES ('3402', '射阳', '307');
INSERT INTO `la_area` VALUES ('3403', '建湖', '307');
INSERT INTO `la_area` VALUES ('3404', '站前', '308');
INSERT INTO `la_area` VALUES ('3405', '西市', '308');
INSERT INTO `la_area` VALUES ('3406', '鲅鱼圈', '308');
INSERT INTO `la_area` VALUES ('3407', '老边', '308');
INSERT INTO `la_area` VALUES ('3408', '盖州', '308');
INSERT INTO `la_area` VALUES ('3409', '大石桥', '308');
INSERT INTO `la_area` VALUES ('3410', '岳阳楼', '309');
INSERT INTO `la_area` VALUES ('3411', '云溪', '309');
INSERT INTO `la_area` VALUES ('3412', '君山', '309');
INSERT INTO `la_area` VALUES ('3413', '汨罗', '309');
INSERT INTO `la_area` VALUES ('3414', '临湘', '309');
INSERT INTO `la_area` VALUES ('3415', '岳阳县', '309');
INSERT INTO `la_area` VALUES ('3416', '华容', '309');
INSERT INTO `la_area` VALUES ('3417', '湘阴', '309');
INSERT INTO `la_area` VALUES ('3418', '平江', '309');
INSERT INTO `la_area` VALUES ('3419', '盐湖', '310');
INSERT INTO `la_area` VALUES ('3420', '临猗', '310');
INSERT INTO `la_area` VALUES ('3421', '万荣', '310');
INSERT INTO `la_area` VALUES ('3422', '闻喜', '310');
INSERT INTO `la_area` VALUES ('3423', '稷山', '310');
INSERT INTO `la_area` VALUES ('3424', '新绛', '310');
INSERT INTO `la_area` VALUES ('3425', '绛县', '310');
INSERT INTO `la_area` VALUES ('3426', '垣曲', '310');
INSERT INTO `la_area` VALUES ('3427', '夏县', '310');
INSERT INTO `la_area` VALUES ('3428', '平陆', '310');
INSERT INTO `la_area` VALUES ('3429', '芮城', '310');
INSERT INTO `la_area` VALUES ('3430', '永济', '310');
INSERT INTO `la_area` VALUES ('3431', '河津', '310');
INSERT INTO `la_area` VALUES ('3432', '榆阳', '311');
INSERT INTO `la_area` VALUES ('3433', '神木', '311');
INSERT INTO `la_area` VALUES ('3434', '府谷', '311');
INSERT INTO `la_area` VALUES ('3435', '横山', '311');
INSERT INTO `la_area` VALUES ('3436', '靖边', '311');
INSERT INTO `la_area` VALUES ('3437', '定边', '311');
INSERT INTO `la_area` VALUES ('3438', '绥德', '311');
INSERT INTO `la_area` VALUES ('3439', '米脂', '311');
INSERT INTO `la_area` VALUES ('3440', '佳县', '311');
INSERT INTO `la_area` VALUES ('3441', '吴堡', '311');
INSERT INTO `la_area` VALUES ('3442', '清涧', '311');
INSERT INTO `la_area` VALUES ('3443', '子洲', '311');
INSERT INTO `la_area` VALUES ('3444', '翠屏', '312');
INSERT INTO `la_area` VALUES ('3445', '宜宾县', '312');
INSERT INTO `la_area` VALUES ('3446', '南溪', '312');
INSERT INTO `la_area` VALUES ('3447', '江安', '312');
INSERT INTO `la_area` VALUES ('3448', '长宁', '312');
INSERT INTO `la_area` VALUES ('3449', '高县', '312');
INSERT INTO `la_area` VALUES ('3450', '珙县', '312');
INSERT INTO `la_area` VALUES ('3451', '筠连', '312');
INSERT INTO `la_area` VALUES ('3452', '兴文', '312');
INSERT INTO `la_area` VALUES ('3453', '屏山', '312');
INSERT INTO `la_area` VALUES ('3454', '城区', '313');
INSERT INTO `la_area` VALUES ('3455', '矿区', '313');
INSERT INTO `la_area` VALUES ('3456', '郊区', '313');
INSERT INTO `la_area` VALUES ('3457', '平定', '313');
INSERT INTO `la_area` VALUES ('3458', '盂县', '313');
INSERT INTO `la_area` VALUES ('3459', '宝塔', '314');
INSERT INTO `la_area` VALUES ('3460', '延长', '314');
INSERT INTO `la_area` VALUES ('3461', '延川', '314');
INSERT INTO `la_area` VALUES ('3462', '子长', '314');
INSERT INTO `la_area` VALUES ('3463', '安塞', '314');
INSERT INTO `la_area` VALUES ('3464', '志丹', '314');
INSERT INTO `la_area` VALUES ('3465', '吴起', '314');
INSERT INTO `la_area` VALUES ('3466', '甘泉', '314');
INSERT INTO `la_area` VALUES ('3467', '富县', '314');
INSERT INTO `la_area` VALUES ('3468', '洛川', '314');
INSERT INTO `la_area` VALUES ('3469', '宜川', '314');
INSERT INTO `la_area` VALUES ('3470', '黄龙', '314');
INSERT INTO `la_area` VALUES ('3471', '黄陵', '314');
INSERT INTO `la_area` VALUES ('3472', '资阳', '315');
INSERT INTO `la_area` VALUES ('3473', '赫山', '315');
INSERT INTO `la_area` VALUES ('3474', '沅江', '315');
INSERT INTO `la_area` VALUES ('3475', '南县', '315');
INSERT INTO `la_area` VALUES ('3476', '桃江', '315');
INSERT INTO `la_area` VALUES ('3477', '安化', '315');
INSERT INTO `la_area` VALUES ('3478', '零陵', '316');
INSERT INTO `la_area` VALUES ('3479', '冷水滩', '316');
INSERT INTO `la_area` VALUES ('3480', '祁阳', '316');
INSERT INTO `la_area` VALUES ('3481', '东安', '316');
INSERT INTO `la_area` VALUES ('3482', '双牌', '316');
INSERT INTO `la_area` VALUES ('3483', '道县', '316');
INSERT INTO `la_area` VALUES ('3484', '江永', '316');
INSERT INTO `la_area` VALUES ('3485', '宁远', '316');
INSERT INTO `la_area` VALUES ('3486', '蓝山', '316');
INSERT INTO `la_area` VALUES ('3487', '新田', '316');
INSERT INTO `la_area` VALUES ('3488', '江华', '316');
INSERT INTO `la_area` VALUES ('3489', '玉州', '317');
INSERT INTO `la_area` VALUES ('3490', '北流', '317');
INSERT INTO `la_area` VALUES ('3491', '容县', '317');
INSERT INTO `la_area` VALUES ('3492', '陆川', '317');
INSERT INTO `la_area` VALUES ('3493', '博白', '317');
INSERT INTO `la_area` VALUES ('3494', '兴业', '317');
INSERT INTO `la_area` VALUES ('3495', '袁州', '318');
INSERT INTO `la_area` VALUES ('3496', '丰城', '318');
INSERT INTO `la_area` VALUES ('3497', '樟树', '318');
INSERT INTO `la_area` VALUES ('3498', '高安', '318');
INSERT INTO `la_area` VALUES ('3499', '奉新', '318');
INSERT INTO `la_area` VALUES ('3500', '万载', '318');
INSERT INTO `la_area` VALUES ('3501', '上高', '318');
INSERT INTO `la_area` VALUES ('3502', '宜丰', '318');
INSERT INTO `la_area` VALUES ('3503', '靖安', '318');
INSERT INTO `la_area` VALUES ('3504', '铜鼓', '318');
INSERT INTO `la_area` VALUES ('3505', '江城', '319');
INSERT INTO `la_area` VALUES ('3506', '阳春', '319');
INSERT INTO `la_area` VALUES ('3507', '阳西', '319');
INSERT INTO `la_area` VALUES ('3508', '阳东', '319');
INSERT INTO `la_area` VALUES ('3509', '延吉', '320');
INSERT INTO `la_area` VALUES ('3510', '图们', '320');
INSERT INTO `la_area` VALUES ('3511', '敦化', '320');
INSERT INTO `la_area` VALUES ('3512', '珲春', '320');
INSERT INTO `la_area` VALUES ('3513', '龙井', '320');
INSERT INTO `la_area` VALUES ('3514', '和龙', '320');
INSERT INTO `la_area` VALUES ('3515', '汪清', '320');
INSERT INTO `la_area` VALUES ('3516', '安图', '320');
INSERT INTO `la_area` VALUES ('3517', '红塔', '321');
INSERT INTO `la_area` VALUES ('3518', '江川', '321');
INSERT INTO `la_area` VALUES ('3519', '澄江', '321');
INSERT INTO `la_area` VALUES ('3520', '通海', '321');
INSERT INTO `la_area` VALUES ('3521', '华宁', '321');
INSERT INTO `la_area` VALUES ('3522', '易门', '321');
INSERT INTO `la_area` VALUES ('3523', '峨山', '321');
INSERT INTO `la_area` VALUES ('3524', '新平', '321');
INSERT INTO `la_area` VALUES ('3525', '元江', '321');
INSERT INTO `la_area` VALUES ('3526', '伊宁', '322');
INSERT INTO `la_area` VALUES ('3527', '奎屯', '322');
INSERT INTO `la_area` VALUES ('3528', '霍城', '322');
INSERT INTO `la_area` VALUES ('3529', '巩留', '322');
INSERT INTO `la_area` VALUES ('3530', '新源', '322');
INSERT INTO `la_area` VALUES ('3531', '昭苏', '322');
INSERT INTO `la_area` VALUES ('3532', '特克斯', '322');
INSERT INTO `la_area` VALUES ('3533', '尼勒克', '322');
INSERT INTO `la_area` VALUES ('3534', '察布', '322');
INSERT INTO `la_area` VALUES ('3535', '云城', '323');
INSERT INTO `la_area` VALUES ('3536', '罗定', '323');
INSERT INTO `la_area` VALUES ('3537', '新兴', '323');
INSERT INTO `la_area` VALUES ('3538', '郁南', '323');
INSERT INTO `la_area` VALUES ('3539', '云安', '323');
INSERT INTO `la_area` VALUES ('3540', '伊春区', '324');
INSERT INTO `la_area` VALUES ('3541', '南岔', '324');
INSERT INTO `la_area` VALUES ('3542', '友好', '324');
INSERT INTO `la_area` VALUES ('3543', '西林', '324');
INSERT INTO `la_area` VALUES ('3544', '翠峦', '324');
INSERT INTO `la_area` VALUES ('3545', '新青', '324');
INSERT INTO `la_area` VALUES ('3546', '美溪', '324');
INSERT INTO `la_area` VALUES ('3547', '金山屯', '324');
INSERT INTO `la_area` VALUES ('3548', '五营', '324');
INSERT INTO `la_area` VALUES ('3549', '乌马河', '324');
INSERT INTO `la_area` VALUES ('3550', '汤旺河', '324');
INSERT INTO `la_area` VALUES ('3551', '带岭', '324');
INSERT INTO `la_area` VALUES ('3552', '乌伊岭', '324');
INSERT INTO `la_area` VALUES ('3553', '红星', '324');
INSERT INTO `la_area` VALUES ('3554', '上甘岭', '324');
INSERT INTO `la_area` VALUES ('3555', '铁力', '324');
INSERT INTO `la_area` VALUES ('3556', '嘉荫', '324');
INSERT INTO `la_area` VALUES ('3557', '雨城', '325');
INSERT INTO `la_area` VALUES ('3558', '名山', '325');
INSERT INTO `la_area` VALUES ('3559', '荥经', '325');
INSERT INTO `la_area` VALUES ('3560', '汉源', '325');
INSERT INTO `la_area` VALUES ('3561', '石棉', '325');
INSERT INTO `la_area` VALUES ('3562', '天全', '325');
INSERT INTO `la_area` VALUES ('3563', '芦山', '325');
INSERT INTO `la_area` VALUES ('3564', '宝兴', '325');
INSERT INTO `la_area` VALUES ('3565', '月湖', '326');
INSERT INTO `la_area` VALUES ('3566', '贵溪', '326');
INSERT INTO `la_area` VALUES ('3567', '余江', '326');
INSERT INTO `la_area` VALUES ('3568', '玉树县', '327');
INSERT INTO `la_area` VALUES ('3569', '杂多', '327');
INSERT INTO `la_area` VALUES ('3570', '称多', '327');
INSERT INTO `la_area` VALUES ('3571', '治多', '327');
INSERT INTO `la_area` VALUES ('3572', '囊谦', '327');
INSERT INTO `la_area` VALUES ('3573', '曲麻莱', '327');
INSERT INTO `la_area` VALUES ('3574', '金水', '328');
INSERT INTO `la_area` VALUES ('3575', '管城', '328');
INSERT INTO `la_area` VALUES ('3576', '二七', '328');
INSERT INTO `la_area` VALUES ('3577', '中原', '328');
INSERT INTO `la_area` VALUES ('3578', '高新区', '328');
INSERT INTO `la_area` VALUES ('3579', '惠济', '328');
INSERT INTO `la_area` VALUES ('3580', '郑东', '328');
INSERT INTO `la_area` VALUES ('3581', '经开区', '328');
INSERT INTO `la_area` VALUES ('3582', '中牟', '328');
INSERT INTO `la_area` VALUES ('3583', '新郑', '328');
INSERT INTO `la_area` VALUES ('3584', '荥阳', '328');
INSERT INTO `la_area` VALUES ('3585', '上街', '328');
INSERT INTO `la_area` VALUES ('3586', '巩义', '328');
INSERT INTO `la_area` VALUES ('3587', '新密', '328');
INSERT INTO `la_area` VALUES ('3588', '登封', '328');
INSERT INTO `la_area` VALUES ('3589', '香洲', '329');
INSERT INTO `la_area` VALUES ('3590', '斗门', '329');
INSERT INTO `la_area` VALUES ('3591', '金湾', '329');
INSERT INTO `la_area` VALUES ('3592', '张店', '330');
INSERT INTO `la_area` VALUES ('3593', '淄川', '330');
INSERT INTO `la_area` VALUES ('3594', '博山', '330');
INSERT INTO `la_area` VALUES ('3595', '临淄', '330');
INSERT INTO `la_area` VALUES ('3596', '周村', '330');
INSERT INTO `la_area` VALUES ('3597', '桓台', '330');
INSERT INTO `la_area` VALUES ('3598', '高青', '330');
INSERT INTO `la_area` VALUES ('3599', '沂源', '330');
INSERT INTO `la_area` VALUES ('3600', '石岐', '331');
INSERT INTO `la_area` VALUES ('3601', '西区', '331');
INSERT INTO `la_area` VALUES ('3602', '东区', '331');
INSERT INTO `la_area` VALUES ('3603', '南区', '331');
INSERT INTO `la_area` VALUES ('3604', '火炬', '331');
INSERT INTO `la_area` VALUES ('3605', '黄圃', '331');
INSERT INTO `la_area` VALUES ('3606', '阜沙', '331');
INSERT INTO `la_area` VALUES ('3607', '三角', '331');
INSERT INTO `la_area` VALUES ('3608', '民众', '331');
INSERT INTO `la_area` VALUES ('3609', '南朗', '331');
INSERT INTO `la_area` VALUES ('3610', '五桂山', '331');
INSERT INTO `la_area` VALUES ('3611', '板芙', '331');
INSERT INTO `la_area` VALUES ('3612', '神湾', '331');
INSERT INTO `la_area` VALUES ('3613', '坦洲', '331');
INSERT INTO `la_area` VALUES ('3614', '古镇', '331');
INSERT INTO `la_area` VALUES ('3615', '小榄', '331');
INSERT INTO `la_area` VALUES ('3616', '东升', '331');
INSERT INTO `la_area` VALUES ('3617', '东凤', '331');
INSERT INTO `la_area` VALUES ('3618', '南头', '331');
INSERT INTO `la_area` VALUES ('3619', '横栏', '331');
INSERT INTO `la_area` VALUES ('3620', '大涌', '331');
INSERT INTO `la_area` VALUES ('3621', '沙溪', '331');
INSERT INTO `la_area` VALUES ('3622', '三乡', '331');
INSERT INTO `la_area` VALUES ('3623', '港口', '331');
INSERT INTO `la_area` VALUES ('3624', '市中', '332');
INSERT INTO `la_area` VALUES ('3625', '薛城', '332');
INSERT INTO `la_area` VALUES ('3626', '峄城', '332');
INSERT INTO `la_area` VALUES ('3627', '台儿庄', '332');
INSERT INTO `la_area` VALUES ('3628', '山亭', '332');
INSERT INTO `la_area` VALUES ('3629', '滕州', '332');
INSERT INTO `la_area` VALUES ('3630', '桥西区', '333');
INSERT INTO `la_area` VALUES ('3631', '桥东区', '333');
INSERT INTO `la_area` VALUES ('3632', '宣化区', '333');
INSERT INTO `la_area` VALUES ('3633', '下花园区', '333');
INSERT INTO `la_area` VALUES ('3634', '宣化', '333');
INSERT INTO `la_area` VALUES ('3635', '张北', '333');
INSERT INTO `la_area` VALUES ('3636', '康保', '333');
INSERT INTO `la_area` VALUES ('3637', '沽源', '333');
INSERT INTO `la_area` VALUES ('3638', '尚义', '333');
INSERT INTO `la_area` VALUES ('3639', '蔚县', '333');
INSERT INTO `la_area` VALUES ('3640', '阳原', '333');
INSERT INTO `la_area` VALUES ('3641', '怀安', '333');
INSERT INTO `la_area` VALUES ('3642', '万全', '333');
INSERT INTO `la_area` VALUES ('3643', '怀来', '333');
INSERT INTO `la_area` VALUES ('3644', '涿鹿', '333');
INSERT INTO `la_area` VALUES ('3645', '赤城', '333');
INSERT INTO `la_area` VALUES ('3646', '崇礼', '333');
INSERT INTO `la_area` VALUES ('3647', '高新区', '333');
INSERT INTO `la_area` VALUES ('3648', '荷塘', '334');
INSERT INTO `la_area` VALUES ('3649', '芦淞', '334');
INSERT INTO `la_area` VALUES ('3650', '石峰', '334');
INSERT INTO `la_area` VALUES ('3651', '天元', '334');
INSERT INTO `la_area` VALUES ('3652', '醴陵', '334');
INSERT INTO `la_area` VALUES ('3653', '株洲县', '334');
INSERT INTO `la_area` VALUES ('3654', '攸县', '334');
INSERT INTO `la_area` VALUES ('3655', '茶陵', '334');
INSERT INTO `la_area` VALUES ('3656', '炎陵', '334');
INSERT INTO `la_area` VALUES ('3657', '京口', '335');
INSERT INTO `la_area` VALUES ('3658', '润州', '335');
INSERT INTO `la_area` VALUES ('3659', '丹徒', '335');
INSERT INTO `la_area` VALUES ('3660', '镇江新区', '335');
INSERT INTO `la_area` VALUES ('3661', '丹阳', '335');
INSERT INTO `la_area` VALUES ('3662', '扬中', '335');
INSERT INTO `la_area` VALUES ('3663', '句容', '335');
INSERT INTO `la_area` VALUES ('3664', '川汇', '336');
INSERT INTO `la_area` VALUES ('3665', '项城', '336');
INSERT INTO `la_area` VALUES ('3666', '扶沟', '336');
INSERT INTO `la_area` VALUES ('3667', '西华', '336');
INSERT INTO `la_area` VALUES ('3668', '商水', '336');
INSERT INTO `la_area` VALUES ('3669', '沈丘', '336');
INSERT INTO `la_area` VALUES ('3670', '郸城', '336');
INSERT INTO `la_area` VALUES ('3671', '淮阳', '336');
INSERT INTO `la_area` VALUES ('3672', '太康', '336');
INSERT INTO `la_area` VALUES ('3673', '鹿邑', '336');
INSERT INTO `la_area` VALUES ('3674', '赤坎', '337');
INSERT INTO `la_area` VALUES ('3675', '霞山', '337');
INSERT INTO `la_area` VALUES ('3676', '开发区', '337');
INSERT INTO `la_area` VALUES ('3677', '坡头', '337');
INSERT INTO `la_area` VALUES ('3678', '麻章', '337');
INSERT INTO `la_area` VALUES ('3679', '廉江', '337');
INSERT INTO `la_area` VALUES ('3680', '雷州', '337');
INSERT INTO `la_area` VALUES ('3681', '吴川', '337');
INSERT INTO `la_area` VALUES ('3682', '遂溪', '337');
INSERT INTO `la_area` VALUES ('3683', '徐闻', '337');
INSERT INTO `la_area` VALUES ('3684', '驿城', '338');
INSERT INTO `la_area` VALUES ('3685', '西平', '338');
INSERT INTO `la_area` VALUES ('3686', '上蔡', '338');
INSERT INTO `la_area` VALUES ('3687', '平舆', '338');
INSERT INTO `la_area` VALUES ('3688', '正阳', '338');
INSERT INTO `la_area` VALUES ('3689', '确山', '338');
INSERT INTO `la_area` VALUES ('3690', '泌阳', '338');
INSERT INTO `la_area` VALUES ('3691', '汝南', '338');
INSERT INTO `la_area` VALUES ('3692', '遂平', '338');
INSERT INTO `la_area` VALUES ('3693', '新蔡', '338');
INSERT INTO `la_area` VALUES ('3694', '端州', '339');
INSERT INTO `la_area` VALUES ('3695', '鼎湖', '339');
INSERT INTO `la_area` VALUES ('3696', '高要', '339');
INSERT INTO `la_area` VALUES ('3697', '四会', '339');
INSERT INTO `la_area` VALUES ('3698', '广宁', '339');
INSERT INTO `la_area` VALUES ('3699', '怀集', '339');
INSERT INTO `la_area` VALUES ('3700', '封开', '339');
INSERT INTO `la_area` VALUES ('3701', '德庆', '339');
INSERT INTO `la_area` VALUES ('3702', '自流井', '340');
INSERT INTO `la_area` VALUES ('3703', '贡井', '340');
INSERT INTO `la_area` VALUES ('3704', '大安', '340');
INSERT INTO `la_area` VALUES ('3705', '沿滩', '340');
INSERT INTO `la_area` VALUES ('3706', '荣县', '340');
INSERT INTO `la_area` VALUES ('3707', '富顺', '340');
INSERT INTO `la_area` VALUES ('3708', '红花岗', '341');
INSERT INTO `la_area` VALUES ('3709', '汇川', '341');
INSERT INTO `la_area` VALUES ('3710', '赤水', '341');
INSERT INTO `la_area` VALUES ('3711', '仁怀', '341');
INSERT INTO `la_area` VALUES ('3712', '遵义县', '341');
INSERT INTO `la_area` VALUES ('3713', '桐梓', '341');
INSERT INTO `la_area` VALUES ('3714', '绥阳', '341');
INSERT INTO `la_area` VALUES ('3715', '正安', '341');
INSERT INTO `la_area` VALUES ('3716', '凤冈', '341');
INSERT INTO `la_area` VALUES ('3717', '湄潭', '341');
INSERT INTO `la_area` VALUES ('3718', '余庆', '341');
INSERT INTO `la_area` VALUES ('3719', '习水', '341');
INSERT INTO `la_area` VALUES ('3720', '道真', '341');
INSERT INTO `la_area` VALUES ('3721', '务川', '341');
INSERT INTO `la_area` VALUES ('3722', '芗城', '342');
INSERT INTO `la_area` VALUES ('3723', '龙文', '342');
INSERT INTO `la_area` VALUES ('3724', '云霄', '342');
INSERT INTO `la_area` VALUES ('3725', '漳浦', '342');
INSERT INTO `la_area` VALUES ('3726', '诏安', '342');
INSERT INTO `la_area` VALUES ('3727', '长泰', '342');
INSERT INTO `la_area` VALUES ('3728', '东山', '342');
INSERT INTO `la_area` VALUES ('3729', '南靖', '342');
INSERT INTO `la_area` VALUES ('3730', '平和', '342');
INSERT INTO `la_area` VALUES ('3731', '华安', '342');
INSERT INTO `la_area` VALUES ('3732', '龙海', '342');
INSERT INTO `la_area` VALUES ('3733', '定海', '343');
INSERT INTO `la_area` VALUES ('3734', '普陀', '343');
INSERT INTO `la_area` VALUES ('3735', '岱山', '343');
INSERT INTO `la_area` VALUES ('3736', '嵊泗', '343');
INSERT INTO `la_area` VALUES ('3737', '甘州', '344');
INSERT INTO `la_area` VALUES ('3738', '民乐', '344');
INSERT INTO `la_area` VALUES ('3739', '临泽', '344');
INSERT INTO `la_area` VALUES ('3740', '高台', '344');
INSERT INTO `la_area` VALUES ('3741', '山丹', '344');
INSERT INTO `la_area` VALUES ('3742', '肃南', '344');
INSERT INTO `la_area` VALUES ('3743', '雁江', '345');
INSERT INTO `la_area` VALUES ('3744', '简阳', '345');
INSERT INTO `la_area` VALUES ('3745', '安岳', '345');
INSERT INTO `la_area` VALUES ('3746', '乐至', '345');
INSERT INTO `la_area` VALUES ('3747', '永定', '346');
INSERT INTO `la_area` VALUES ('3748', '武陵源', '346');
INSERT INTO `la_area` VALUES ('3749', '慈利', '346');
INSERT INTO `la_area` VALUES ('3750', '桑植', '346');
INSERT INTO `la_area` VALUES ('3751', '昭阳', '347');
INSERT INTO `la_area` VALUES ('3752', '鲁甸', '347');
INSERT INTO `la_area` VALUES ('3753', '巧家', '347');
INSERT INTO `la_area` VALUES ('3754', '盐津', '347');
INSERT INTO `la_area` VALUES ('3755', '大关', '347');
INSERT INTO `la_area` VALUES ('3756', '永善', '347');
INSERT INTO `la_area` VALUES ('3757', '绥江', '347');
INSERT INTO `la_area` VALUES ('3758', '镇雄', '347');
INSERT INTO `la_area` VALUES ('3759', '彝良', '347');
INSERT INTO `la_area` VALUES ('3760', '威信', '347');
INSERT INTO `la_area` VALUES ('3761', '水富', '347');
INSERT INTO `la_area` VALUES ('3762', '沙坡头', '348');
INSERT INTO `la_area` VALUES ('3763', '中宁', '348');
INSERT INTO `la_area` VALUES ('3764', '海原', '348');

-- ----------------------------
-- Table structure for `la_article`
-- ----------------------------
DROP TABLE IF EXISTS `la_article`;
CREATE TABLE `la_article` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `archiveid` int(10) NOT NULL COMMENT '文档ID',
  `content` longtext COMMENT '文档内容',
  `updatetime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_article
-- ----------------------------
INSERT INTO `la_article` VALUES ('1', '1', '&lt;p&gt;&lt;br /&gt;&lt;img src=&quot;/Uploads/Image/201212/25/1356405476_fzagmz_6513.jpg&quot; /&gt;&lt;/p&gt;&lt;p&gt;测试文章&lt;br /&gt;&lt;/p&gt;', '1364874377');
INSERT INTO `la_article` VALUES ('2', '2', '&lt;p&gt;开篇 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　确认框，顾名思义，就是对用户的关键行为进行确认。比如在Windows操作系统中，删除某个文件的时候，都会询问&ldquo;确实要把此文件放入回收站吗?&rdquo;，用户可以选择&ldquo;是&rdquo;或&ldquo;否&rdquo;。 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　大家对于确认框的感觉大抵如此，觉得非常多余，打断了我的操作。这就像我着急上厕所，却被告知要先收费一样让人不爽。不能否认，确认框是一种打断，有时甚至是打扰。 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　所以这里要把握住一个原则：能不用确认框就尽量不要用。除非用户的操作具有很大的风险，一定需要他来确认一下。 &lt;/p&gt;&lt;p&gt;　　&lt;strong&gt;确认在左，取消在右?&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　根据windows多年培养的用户习惯，大家都已经默认一个原则，就是确认在左，取消在右。但是，这样做是否真的合理呢?我们今天就来探讨一下这个问题。 &lt;span style=&quot;color:#ffffff;&quot;&gt;一些事&lt;/span&gt;&lt;/p&gt;&lt;p&gt;　　如果不是误操作，相信用户做事情前都是经过了一定思考。所以当弹出确认框的时候，我们猜测大部分用户都会去选择&ldquo;确认&rdquo;/&rdquo;是&rdquo;，继续之前的操作。之后本文的探讨，都讲建立在这样一种假设的基础上，即用户是想去选择&ldquo;确认&rdquo;/&rdquo;是&rdquo;。 &lt;/p&gt;&lt;p&gt;　　&lt;strong&gt;以视觉流的角度分析&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　如果将&ldquo;确认&rdquo;放在左边，&ldquo;取消&rdquo;放在右边。 &lt;/p&gt;&lt;p&gt; 　　我们相信大部分用户在决定采取哪一个操作之前，都会把所有可以选择的操作都看一遍，以免做出错误的操作(当然不排除会有专家级用户 选择只看自己想进行的操作)。根据从左到右的阅读习惯，用户会首先看到左侧的&ldquo;确认&rdquo;，然后看一下在它旁边的&ldquo;取消&rdquo;，了解到所有可以进行的操作后，再回到&ldquo;确认&rdquo;按钮上，最后点击。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', null);
INSERT INTO `la_article` VALUES ('3', '3', '&lt;div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传是多维宣传 &lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　传统媒体是二维的，而网络宣传则是多维的，它能将文字、图像和声音有机的组合在一起，传递多感官的信息，让顾客如身临其境般感受商品或服务。使消费者能亲身体验产品、服务与品牌。这种图、文、声、像相结合的宣传形式，增强了网络宣传的实效。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传拥有最有活力的消费群体&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　互联网用户70.54%集中在经济较为发达地区，64%家庭人均月收入高于1000元，85.8%年龄在18岁到35岁之间，83%受过大学以上教育。因此，网络宣传的目标群体是目前社会上层次最高、收入最高、消费能力最高的最具活力的消费群体。这一群体的消费总额往往大于其他消费层次之和。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传制作成本低，速度快，更改灵活&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　网络宣传制作周期短，即使在较短的周期进行投放，也可以根据客户的需求很快完成制作，而传统宣传制作成本高，投放周期固定。另外，在传统媒体上做宣传发布后很难更改即使可以改动往往也须付出很大的经济代价。而在互联网上做宣传能够按照客户需要及时变更宣传内容。这样，经营决策的变化就能及时实施和推广。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传具有交互性和纵深性&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　交互性强是互联网络媒体的最大的优势，它不同于传统媒体的信息单向传播，而是信息互动传播。通过链接，用户只需简单地点击鼠标，就可以从厂商的相关站点中得到更多、更详尽的信息。另外，用户可以通过网络直接填写并提交在线表单信息，厂商可以随时得到宝贵的用户反馈信息，进一步减少了用户和宣传客户之间的距离。同时，网络宣传可以提供进一步的产品查询需求。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传能进行完善的统计&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　&amp;quot;无法衡量的东西就无法管理。&amp;quot;网络宣传通过及时和精确的统计机制，使用户能够直接对信息的发布进行在线监控。而传统的信息发布形式只能通过并不精确的收视率、发行量等来统计投放的受众数量。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传可以跟踪和衡量宣传的效果&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　用户能通过Internet即时衡量宣传的效果。通过监视宣传的浏览量、点击率等指标，用户可以统计出多少人看到了发布的信息，其中有多少人对发布的信息感兴趣进而进一步了解了信息的详细信息。因此，较之其他任何宣传，网络宣传使用户能够更好地跟踪受众的反应，及时了解用户和潜在用户的情况。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传的投放更具有针对性&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;　　通过提供众多的免费服务，网站一般都能建立完整的用户数据库，包括用户的地域分布、年龄、性别、收入、职业、婚姻状况、爱好等。这些资料可帮助用户分析市场与受众，根据信息发布目标受众的特点，有针对性地进行信息发布，并根据用户特点作定点投放和跟踪分析，对投放效果作出客观准确的评价。&lt;/div&gt;&lt;div&gt;&lt;p&gt;另外，网络宣传还可以提供有针对性的内容环境。不同的网站或者是同一网站不同的频道所提供的服务是不同质且具有很强的类分别的，这就为密切迎合用户的兴趣提供了可能。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传的受众关注度高&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　据资料显示，电视并不能集中人的注意力，电视观众40%的人同时在阅读，21%的人同时在做家务，13%的人在吃喝，12%的人在玩赏它物，10%在烹饪，9%在写作，8%在打电话。而网上用户55%在使用计算机时不做任何它事，只有6%同时在打电话，只有5%在吃喝，只有4%在写作。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传缩短了媒体投放的进程&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　用户在传统媒体上进行市场推广一般要经过三个阶段：市场开发期、市场巩固期和市场维持期。在这三个阶段中，厂商要首先获取注意力，创立品牌知名度；在消费者获得品牌的初步信息后，推广更为详细的产品信息。然后是建立和消费者之间较为牢固的联系，以建立品牌忠诚。而互联网将这三个阶段合并在一次信息发布中实现：消费者看到网络宣传，点击后获得详细信息，并填写用户资料或直接参与用户的市场活动甚至直接在网上实施购买行为。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;strong&gt;网络宣传传播范围广、不受时空限制&lt;/strong&gt;&lt;/span&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　通过国际互联网络，网络宣传可以将信息24小时不间断地传播到世界的每一个角落。只要具备上网条件，任何人，在任何地点都可以阅读。这是传统媒体无法达到的。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传具有可重复性和可检索性&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　网络宣传可以将文字、声音、画面完美地结合之后供用户主动检索，重复观看。而与之相比电视宣传却是让用户被动地接受宣传内容。如果错过宣传时间，就不能再得到发布信息。另外，显而易见，较之网络宣传的检索平面宣传的检索要费时、费事的多。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传具有价格优势&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;　　从价格方面考虑，与报纸杂志或电视宣传相比，目前网络宣传费用还是较为低廉的。获得同等的宣传效应，网络宣传的有效千人成本远远低于传统宣传媒体。一个宣传主页一年的费用大致为几千元人民币，而且主页内容可以随企业经营决策的变更随时改变，这是传统宣传媒体不可想像的。网络宣传将成为企业市场推广必不可少的高效途径。&lt;/div&gt;&lt;/div&gt;', null);
INSERT INTO `la_article` VALUES ('4', '4', '&lt;p&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;MongoDB的特性&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;简单的查询语句，没有Join操作&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;文档型存储，其数据是用二进制的Json格式Bson存储的。其数据就像Ruby的hashes，或者Python的字典，或者PHP的数组&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;Sharding，MongoDB提供auto-sharding实现数据的扩展性&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;GridFS，MongoDB的提供的文件存储API&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;数组索引，你可以对文档中的某个数组属性建立索引&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MapReduce，可以用于进行复杂的统计和并行计算&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;高性能，通过使用mmap和定时fsync的方法，避免了频繁IO，使其性能更高&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;MongoDB的优点&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;高性能，速度非常快（如果你的内存足够的话）&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;没有固定的表结构，不用为了修改表结构而进行数据迁移&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;查询语言简单，容易上手&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;使用Sharding实现水平扩展&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;部署方便&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;使用MongoDB，你得记住以下几点：&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你有大磁盘空间&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你的内存也足够大于放下你的热数据&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你是部署在64位系统上的（32位有2G的限制，试用还可以）&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你的系统是little-endian的&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你有多台机器（并不专注于单机可靠性）&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你希望用安全换性能，同时允许你用性能换安全&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;MongoDB在下面领域不太擅长&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;不太稳定，特别是auto-sharding目前还有很多问题&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;不支持SQL，这意味着你很多通过SQL接口的工具不再适用&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;持久化，MongoDB单机可靠性不太好，宕机可能丢失一段时间的数据&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;相关文档比较少，新功能都有这个问题&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;相关人才比较难找，这也是新功能的问题之一&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;/p&gt;', null);
INSERT INTO `la_article` VALUES ('5', '5', '&lt;h2&gt;HTML 文件结构(Document Structures)&lt;/h2&gt;&lt;h3&gt;&amp;lt;html&amp;gt;...&amp;lt;/html&amp;gt;&lt;br /&gt;&amp;lt;head&amp;gt;...&amp;lt;/head&amp;gt;&lt;br /&gt;&amp;lt;body&amp;gt;...&amp;lt;/body&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;pre&gt;&amp;lt;HTML&amp;gt;\r\n&amp;lt;HEAD&amp;gt;\r\n     &amp;lt;title&amp;gt;, &amp;lt;base&amp;gt;, &amp;lt;link&amp;gt;, &amp;lt;isindex&amp;gt;, &amp;lt;meta&amp;gt;\r\n&amp;lt;/HEAD&amp;gt;\r\n&amp;lt;BODY&amp;gt;\r\n    HTML 文件的正文写在这里... ... \r\n&amp;lt;/BODY&amp;gt;\r\n&amp;lt;/HTML&amp;gt;\r\n&lt;/pre&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;&lt;a name=&quot;lang&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;语言字符集(Charsets)的信息&lt;/h2&gt;&lt;h3&gt;&amp;lt;meta http-equiv=&amp;quot;Content-Type&amp;quot; &amp;nbsp; &amp;nbsp; &amp;nbsp; content=&amp;quot;text/html;charset=#&amp;quot;&amp;gt;&lt;br /&gt;&lt;/h3&gt;&lt;dl compact=&quot;compact&quot;&gt;&lt;dt&gt;#= &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dt&gt;&lt;dd&gt;us-ascii, iso-8859-1, x-mac-roman, iso-8859-2, &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; x-mac-ce,&lt;br /&gt;iso-2022-jp, x-sjis, x-euc-jp,&lt;br /&gt;euc-kr, &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; iso-2022-kr,&lt;br /&gt;gb2312, gb_2312-80,&lt;br /&gt;x-euc-tw, x-cns11643-1, &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; x-cns11643-2, big5 &lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;可在 HTML 文件中设置 MIME 字符集信息。&lt;br /&gt;您在浏览主页时，最好自己在浏览器的选项菜单内选择相应的语言(language &amp;nbsp; &amp;nbsp; &amp;nbsp; encoding)。&lt;br /&gt;但是如果 HTML 文件里写明了设置，浏览器就会自动设置语言选项。&lt;br /&gt;尤其是主页里用到了&lt;a href=&quot;http://www.php100.com/cover/html/entities.html&quot;&gt;字符实体(entities)&lt;/a&gt;，则该主页就应该写明字符集信息。&lt;br /&gt;否则，您在浏览该主页时，若未正确设置语言选项，显示将可能混乱。&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;bgcolor&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;背景色彩和文字色彩&lt;/h2&gt;&lt;h3&gt;&amp;lt;body bgcolor=# text=# link=# alink=# vlink=#&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;bgcolor --- 背景色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;text --- 非可链接文字的色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;link --- 可链接文字的色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;alink --- 正被点击的可链接文字的色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;vlink --- 已经点击(访问)过的可链接文字的色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;&lt;h3&gt;#=rrggbb&lt;/h3&gt;&lt;/dd&gt;&lt;dd&gt;色彩是用 16 进制的 红－绿－蓝(red-green-blue, RGB) 值来表示。&lt;br /&gt;16 进制的数码有: &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; 0,1,2,3,4,5,6,7,8,9,a,b,c,d,e,f. &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;　 &lt;/dd&gt;&lt;/dl&gt;&lt;h3&gt;背景图象 &amp;lt;body background=&amp;quot;image-URL&amp;quot;&amp;gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;Non Scrolling Background &amp;lt;body bgproperties=FIXED&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;a name=&quot;margin&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;页面空白(Margin)&lt;/h2&gt;&lt;h3&gt;页面左边的空白 &amp;lt;body leftmargin=#&amp;gt;&lt;br /&gt;页面上方的空白(天头) &amp;lt;body &amp;nbsp; &amp;nbsp; &amp;nbsp; topmargin=#&amp;gt; #=margin amount&lt;/h3&gt;&lt;p&gt;&lt;a name=&quot;link&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;链接(Link)&lt;/h2&gt;&lt;h3&gt;基本语法 &amp;lt;a href=&amp;quot;URL&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;tt&gt;这是一个&lt;br /&gt;&amp;lt;a href=&amp;quot;samp/link.html&amp;quot;&amp;gt;链接的例子&amp;lt;/a&amp;gt;。 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;br /&gt;点一下带下划线的文字!&lt;/tt&gt;&lt;br /&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;这是一个&lt;a href=&quot;http://www.php100.com/cover/html/samp/link.html&quot;&gt;链接的例子&lt;/a&gt;。点一下带下划线的文字!&lt;/p&gt;&lt;h3&gt;跳转到页面的另外一个地方&lt;br /&gt;&amp;lt;a href=&amp;quot;#name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt;&lt;br /&gt;&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; name=&amp;quot;name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt; &lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;tt&gt;&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; href=&amp;quot;#jump-test&amp;quot;&amp;gt;跳转到下一个&amp;quot;链接点&amp;quot;&amp;lt;/a&amp;gt;&amp;lt;P&amp;gt;&lt;br /&gt;&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; name=&amp;quot;jump-test&amp;quot;&amp;gt;下一个链接点&amp;lt;/a&amp;gt; &lt;/tt&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;&lt;a href=&quot;http://www.php100.com/cover/html/page.htm#jump-test&quot;&gt;跳转到下一个&amp;quot;链接点&amp;quot;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;jump-test&quot;&gt;&lt;/a&gt;下一个链接点&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;jump2&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h3&gt;跳转到另一个页面的某个地方&lt;br /&gt;&amp;lt;a href=&amp;quot;URL#name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt;&lt;br /&gt;&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; name=&amp;quot;name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt; &lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;tt&gt;跳转到另一个页面的&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; href=&amp;quot;samp/link.html#jump-test&amp;quot;&amp;gt;某个地方&amp;lt;/a&amp;gt;。&lt;br /&gt;&lt;/tt&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;跳转到另一个页面的&lt;a href=&quot;http://www.php100.com/cover/html/samp/link.html#jump-test&quot;&gt;某个地方&lt;/a&gt;。&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;window&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;开一个新的(浏览器)窗口 (Target Window) &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/h2&gt;&lt;h3&gt;&amp;lt;a href=&amp;quot;URL&amp;quot; target=&amp;quot;Window_Name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;tt&gt;&amp;lt;a href=&amp;quot;samp/window.html&amp;quot; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; target=&amp;quot;window_name&amp;quot;&amp;gt;&lt;br /&gt;开一个新窗口!&lt;br /&gt;&amp;lt;/a&amp;gt; &lt;/tt&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;&lt;a href=&quot;http://www.php100.com/cover/html/samp/window.html&quot; target=&quot;window_name&quot;&gt;开一个新窗口!&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;hr&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;标尺线&lt;/h2&gt;&lt;h3&gt;&amp;lt;hr&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;hr /&gt;&lt;h3&gt;&amp;lt;hr size=#&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr size=10&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;hr size=&quot;10&quot; /&gt;&lt;h3&gt;&amp;lt;hr width=#&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr width=50&amp;gt;&lt;br /&gt;&amp;lt;hr width=50%&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;hr width=&quot;50&quot; /&gt;&lt;hr width=&quot;50%&quot; /&gt;&lt;h3&gt;&amp;lt;hr align=#&amp;gt; #=left, right&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr width=50% align=left&amp;gt;&lt;br /&gt;&amp;lt;hr width=50% align=right&amp;gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/tt&gt;&lt;/p&gt;&lt;hr align=&quot;left&quot; width=&quot;50%&quot; /&gt;&lt;hr align=&quot;right&quot; width=&quot;50%&quot; /&gt;&lt;h3&gt;&amp;lt;hr noshade&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr noshade&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;hr noshade=&quot;noshade&quot; /&gt;&lt;h3&gt;&amp;lt;hr color=#&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;#=rrggbb 16 进制 RGB 数码，或者是下列预定义色彩：&lt;br /&gt;&lt;span style=&quot;color:#000000;&quot;&gt;Black&lt;/span&gt;, &lt;span style=&quot;color:#808000;&quot;&gt;Olive&lt;/span&gt;, &lt;span style=&quot;color:#008080;&quot;&gt;Teal&lt;/span&gt;, &lt;span style=&quot;color:#ff0000;&quot;&gt;Red&lt;/span&gt;, &lt;span style=&quot;color:#0000ff;&quot;&gt;Blue&lt;/span&gt;, &lt;span style=&quot;color:#800000;&quot;&gt;Maroon&lt;/span&gt;, &lt;span style=&quot;color:#000080;&quot;&gt;Navy&lt;/span&gt;, &lt;span style=&quot;color:#808080;&quot;&gt;Gray&lt;/span&gt;, &lt;span style=&quot;color:#00ff00;&quot;&gt;Lime&lt;/span&gt;, &lt;br /&gt;&lt;span style=&quot;color:#ff00ff;&quot;&gt;Fuchsia&lt;/span&gt;, &lt;span style=&quot;color:#ffffff;&quot;&gt;White&lt;/span&gt;, &lt;span style=&quot;color:#008000;&quot;&gt;Green&lt;/span&gt;, &lt;span style=&quot;color:#800080;&quot;&gt;Purple&lt;/span&gt;, &lt;span style=&quot;color:#c0c0c0;&quot;&gt;Silver&lt;/span&gt;, &lt;span style=&quot;color:#ffff00;&quot;&gt;Yellow&lt;/span&gt;, &lt;span style=&quot;color:#00ffff;&quot;&gt;Aqua&lt;/span&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr color=&amp;quot;red&amp;quot;&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', null);
INSERT INTO `la_article` VALUES ('6', '6', '&lt;p&gt;&lt;span class=&quot;top11&quot;&gt;&lt;p&gt;二. 各取所需&lt;/p&gt;&lt;p&gt;1.善于使用&ldquo;引用&rdquo;,它能直接影响到程序的效率。&lt;/p&gt;&lt;p&gt;2.善于用三元运算子,可以让程式较精简有效率。&lt;br /&gt;比如:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;if ($data[$i][&amp;#39;nickname&amp;#39;]){&lt;br /&gt; &amp;nbsp; &amp;nbsp;$nickname = &amp;nbsp;$data[$i][&amp;#39;nickname&amp;#39;];&lt;br /&gt;}&lt;br /&gt;else{&lt;br /&gt; &amp;nbsp; &amp;nbsp;$nickname = &amp;nbsp;$data[$i][&amp;#39;ip&amp;#39;];&lt;br /&gt;}&lt;/p&gt;&lt;p&gt;可以写成:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$nickname = &amp;nbsp;$data[$i][&amp;#39;nickname&amp;#39;] ? $data[$i][&amp;#39;nickname&amp;#39;] : $data[$i][&amp;#39;ip&amp;#39;];&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;3.善于组织if...else...回圈&lt;br /&gt;比如:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$ext_name = strtolower(str_replace(&amp;quot;.&amp;quot;, &amp;quot;&amp;quot;, strrchr($upfilename, &amp;quot;.&amp;quot;)));&lt;br /&gt;if (!empty($type))&lt;br /&gt;{&lt;br /&gt; &amp;nbsp; &amp;nbsp;if (!strpos($type, $ext_name))&lt;br /&gt; &amp;nbsp; &amp;nbsp;{&lt;br /&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;echo &amp;quot;Please upload the file of $type form.&amp;quot;;&lt;br /&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;exit(); &lt;br /&gt; &amp;nbsp; }&lt;br /&gt;}&lt;/p&gt;&lt;p&gt;上面的代码你应该写成这样:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$ext_name = strtolower(str_replace(&amp;quot;.&amp;quot;, &amp;quot;&amp;quot;, strrchr($upfilename, &amp;quot;.&amp;quot;)));&lt;br /&gt;if (!($type===&amp;#39;&amp;#39;) &amp;amp;&amp;amp; strpos($type, $ext_name)===false)&lt;br /&gt;{&lt;br /&gt; &amp;nbsp; &amp;nbsp;echo &amp;quot;Please upload the file of $type form.&amp;quot;;&lt;br /&gt; &amp;nbsp; &amp;nbsp;exit();&lt;br /&gt;}&lt;/p&gt;&lt;p&gt;4.尽量让你的代码清淅些,如果写成这样，是比较让人头痛的:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$foo=$_post[&amp;quot;foo&amp;quot;];&lt;br /&gt; &amp;nbsp; $username=$_post[&amp;quot;user&amp;quot;];&lt;br /&gt; $group=$_POST[&amp;quot;group&amp;quot;];&lt;br /&gt;if ($group==&amp;quot;wheel&amp;quot;)&lt;br /&gt;{&lt;br /&gt;$username=$username.&amp;quot;wheel&amp;quot;;&lt;br /&gt;}&lt;/p&gt;&lt;p&gt;同样的代码，这样就比较让人看得舒服了:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$foo &amp;nbsp; &amp;nbsp; &amp;nbsp;= $_post[&amp;quot;foo&amp;quot;];&lt;br /&gt;$username = $_post[&amp;quot;username&amp;quot;];&lt;br /&gt;$group &amp;nbsp; &amp;nbsp;= $_POST[&amp;quot;group&amp;quot;];&lt;br /&gt;if ($group==&amp;quot;wheel&amp;quot;)&lt;br /&gt;{&lt;br /&gt; &amp;nbsp; &amp;nbsp;$username = $username.&amp;quot;wheel&amp;quot;;&lt;br /&gt;}&lt;/p&gt;&lt;p&gt;当然，有一定基础后，你应该要写成这样:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$foo &amp;nbsp; &amp;nbsp; &amp;nbsp;= &amp;amp;$_POST[&amp;#39;foo&amp;#39;];&lt;br /&gt;$username = &amp;nbsp;$_POST[&amp;quot;group&amp;quot;]!=&amp;#39;wheel&amp;#39; ? $_POST[&amp;quot;username&amp;quot;] : $_POST[&amp;quot;username&amp;quot;].&amp;#39;wheel&amp;#39;;&lt;/p&gt;&lt;p&gt;5.编写规范的mysql 语句。&lt;/p&gt;&lt;p&gt;字段和表名用&amp;quot;`&amp;quot;引起来，避免保留字的影响。&lt;br /&gt;如果看到下面这样的一个sql query，会让人比较头痛:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$query=&amp;quot;select `flash_comment`.`content` , `flash_comment`.`nickname` , `flash_comment`.`date` , `flash_comment`.`ip` , `product`.`p_name` , `sgflash`.`fid` from `flash_comment` left join `product` on ( `flash_comment`.`p_no` = `product`.`p_no` ) left join `sgflash` on ( `product`.`p_name` = `sgflash`.`f_name` ) where `flash_comment`.`p_no` != &amp;#39;&amp;#39; order by `flash_comment`.`date`&amp;quot;;&lt;/p&gt;&lt;p&gt;同样的一个query,写成这样就令人看得明白得多了:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$query = &amp;quot;SELECT `flash_comment`.`content` , `flash_comment`.`nickname` , `flash_comment`.`date` , `flash_comment`.`ip` , `product`.`p_name` , `sgflash`.`fid` &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; FROM `flash_comment` &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; LEFT JOIN `product` ON ( `flash_comment`.`p_no` = `product`.`p_no` ) &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; LEFT JOIN `sgflash` ON ( `product`.`p_name` = `sgflash`.`f_name` ) &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; WHERE `flash_comment`.`p_no` != &amp;#39;&amp;#39; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;ORDER BY `flash_comment`.`date`&amp;quot;;&lt;/p&gt;&lt;/span&gt;&lt;br /&gt;&lt;/p&gt;', null);
INSERT INTO `la_article` VALUES ('7', '7', '&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;1.为啥PHP需要异步操作？&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;一般来说PHP适用的场合是web页面展示等耗时比较短的任务，如果对于比较花时间的操作如resize图片、大数据导入、批量发送EDM、SMS等，就很容易出现操作超时情况。你可以说我可以设置无限超时时间，等等你也要知道PHP有一个工作模式是fastcgi，PHP无限不超时，不代表 fastcgi相应不超时&hellip;&hellip;如果你还想说要fastcgi相应永不超时，我建议你应该跟你们的运维人员讨论去&hellip;&hellip;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;这个时候异步的操作就发挥他的作用了，由于是非阻塞操作，操作会即时返回，然后在后台再慢慢干活。管你超时不超时的，我就没有在当前的进程/线程下干活。看吧是不是很美好，不过其实这也是个坑&hellip;&hellip;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;2.PHP可以实现异步操作吗？&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;答案是肯定的，不过网上各种的纯PHP实现得就有点别扭了。socket模式、挂起进程模式、有的还直接fork进程。很好，各路神仙各显神通。如果运维人员看到的话，一定会&times;&times;&times;&times;&times;你们的，不把web server跑死才怪&hellip;&hellip;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;那还有其他更好的方法去实现这个异步操作的可能么？有，现在我们只有想怎么开外挂了。查一下PECL主流的外挂方案有一堆的&times;&times;MQ（消息队列），其中有个用于任务分配的外挂进入了我们的视线&lt;a href=&quot;http://www.cnblogs.com/cocowool/archive/2011/08/18/2145144.html&quot; style=&quot;padding:0px;margin:0px;color:#626f91;text-decoration:initial;&quot; target=&quot;_blank&quot;&gt;Gearman&lt;/a&gt;(其实这家伙才是角，我就不详细介绍了，点连接看介绍)。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;3.为啥选择Gearman?&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;别的不说，就说他的client多，支持很多语言的client，你可以使用大部分你喜欢的语言去写worker。我个人是很烦语言之争，你喜欢用神码语言写worker都随你喜欢。有数据持久化支持（就是把队列保存到数据库介质中，那故障恢复也好做），有群集支持（其实很多&times;&times;MQ都有这些功能）。 PECL上有扩展，也有纯PHP实现扩展。反正这个Gearman也活了很久了，杂七杂八的问题都基本上解决了。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;4.基本思路&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;有了Gearman这外挂就简单多了。就是向gearman发送一个任务，把执行的任务发出去，然后等待worker去调用PHP cli去运行我们的php代码。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;我就写了一下一个python的worker（别问我为啥用python，1.我会python，2.linux下不用装runtime），你可以自己根据思路写一个PHP的worker，不过嘛，本人是不太信得过PHP跑的worker。其他语言饭可以用java、node.js 或者其他语言实现一个worker试试。对用Golang写worker有兴趣的朋友可以找我。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;&lt;a href=&quot;http://code.google.com/p/phpasync-for-gearman/downloads/detail?name=phpasync_worker_py.zip&amp;amp;can=2&amp;amp;q=&quot; style=&quot;padding:0px;margin:0px;color:#626f91;text-decoration:initial;&quot; target=&quot;_blank&quot;&gt;phpasync_worker_py&lt;/a&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;不好意思，里面是没有注释的。一个配置文件，一个py脚本。基本的功能也就是分析一下调用的参数，然后调用PHP Cli，就是那样子而已。要让py脚本跑起来请自行安装python的gearman模块。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;然后到PHP的部分先上测试代码：&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;ol style=&quot;margin:0px;border-width:0px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;padding-right:0px;padding-left:0px;&quot;&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;pre style=&quot;padding:0px;font-family:&amp;#39;courier new&amp;#39;, monospace;font-size:12px;width:650.421875px;word-wrap:break-word;word-break:break-all;background-color:#f7f7f7;margin-top:0px;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;&amp;lt;?php &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/pre&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;require_once &amp;#39;PHPAsyncClient.php&amp;#39;; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;date_default_timezone_set(&amp;#39;Asia/Shanghai&amp;#39;); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt; &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;class AsyncTest { &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt; &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;const &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;LOG_FILE = &amp;#39;/debug.log&amp;#39;; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt; &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;static public function run() { &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;if (PHPAsyncClient::in_callback(__FILE__)) { &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;self::log(&amp;#39;php Async callback&amp;#39;); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;PHPAsyncClient::parse(); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;return; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;} &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;if (PHPAsyncClient::is_main(__FILE__)) { &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;self::log(&amp;#39;main run&amp;#39;); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;$async_call = PHPAsyncClient::getInstance(); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;$async_call-&amp;gt;AsyncCall(&amp;#39;AsyncTest&amp;#39;, &amp;#39;callback&amp;#39;, array( &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;#39;content&amp;#39; =&amp;gt; &amp;#39;Hello World!!!&amp;#39;, &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;), array( &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;#39;class&amp;#39; =&amp;gt; &amp;#39;AsyncTest&amp;#39;, &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;#39;method&amp;#39; =&amp;gt; &amp;#39;callback&amp;#39;, &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;#39;params&amp;#39; =&amp;gt; array( &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;#39;content&amp;#39; =&amp;gt; &amp;#39;Hello Callback!&amp;#39;, &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;), &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;), __FILE__); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;return; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;} &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;} &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt; &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;static public function callback($args) { &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;self::log(&amp;#39;AsyncTest callback run&amp;#39;); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;self::log(&amp;#39;AsyncTest callback args:&amp;#39;.print_r($args, true)); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;} &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt; &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;static public function log($content) { &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;$fullname = dirname(__FILE__).self::LOG_FILE; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;$content = date(&amp;#39;[Y-m-d H:i:s]&amp;#39;).$content.&amp;quot;&amp;quot;; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;file_put_contents($fullname, $content, FILE_APPEND); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;} &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;} &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt; &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;AsyncTest::run(); &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;/ol&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;就3个静态方法，一个是用于调试的log方法，其他都是字面意思。这个例子是对这种调用方式有个初步印象。然后直接上PHP的所有源码：&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;&lt;a href=&quot;http://code.google.com/p/phpasync-for-gearman/downloads/detail?name=php_async.zip&amp;amp;can=2&amp;amp;q=&quot; style=&quot;padding:0px;margin:0px;color:#626f91;text-decoration:initial;&quot; target=&quot;_blank&quot;&gt;php_async.zip&lt;/a&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;然后应该会有很多人会说，win下安装不了gearman&hellip;&hellip;所以我把java版的gearman server也放上去吧。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;&lt;a href=&quot;http://code.google.com/p/phpasync-for-gearman/downloads/detail?name=java-gearman-service-0.6.6.zip&amp;amp;can=2&amp;amp;q=&quot; style=&quot;padding:0px;margin:0px;color:#626f91;text-decoration:initial;&quot; target=&quot;_blank&quot;&gt;java-gearman-service-0.6.6.zip&lt;/a&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;5.结论&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;经过以上配置犀牛一样大的家伙后（要装一个Gearman，还要跑个Py脚本），我们基本上就使PHP拥有了异步调用功能，当然其中还有一个状态维护神马的要自己去实现。所以发现，其实这个方案不咋样，太复杂了。还是使用一些web service的方式去做web callback会好点（问题是web callback一样会超时&hellip;&hellip;），这个请留意后续。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', null);
INSERT INTO `la_article` VALUES ('8', '8', '&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;首先我们要知道明确单例模式这个概念，那么什么是单例模式呢？&lt;br /&gt;单例模式顾名思义，就是只有一个实例。&lt;br /&gt;作为对象的创建模式， 单例模式确保某一个类只有一个实例，而且自行实例化并向整个系统提供这个实例，&lt;br /&gt;这个类我们称之为单例类。&lt;br /&gt;单例模式的要点有三个：&lt;br /&gt;一是某个类只能有一个实例；&lt;br /&gt;二是它必须自行创建这个实例；&lt;br /&gt;三是它必须自行向整个系统提供这个实例。&lt;br /&gt;下面我们讨论下为什么要使用PHP单例模式？&lt;br /&gt;多数 人都是从单例模式的字面上的意思来理解它的用途, 认为这是对系统资源的节省, 可以避免重复实例化, 是一种&rdquo;计划生育&rdquo;. 而PHP每次执行完页面都是会从内存中清理掉所有的资源. 因而PHP中的单例实际每次运行都是需要重新实例化的, 这样就失去了单例重复实例化的意义了. 单单从这个方面来说, PHP的单例的确有点让各位失望. 但是单例仅仅只有这个功能和应用吗? 答案是否定的,我们一起来看看。&lt;br /&gt;1. php的应用主要在于数据库应用, 所以一个应用中会存在大量的数据库操作, 在使用面向对象的方式开发时(废话), 如果使用单例模式, 则可以避免大量的new 操作消耗的资源。&lt;br /&gt;2. 如果系统中需要有一个类来全局控制某些配置信息, 那么使用单例模式可以很方便的实现. 这个可以参看zend Framework的FrontController部分。&lt;br /&gt;3. 在一次页面请求中, 便于进行调试, 因为所有的代码(例如数据库操作类db)都集中在一个类中, 我们可以在类中设置钩子, 输出日志，从而避免到处var_dump, echo。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;pre class=&quot;brush:php;toolbar:false;&quot;&gt;/**\r\n* 设计模式之单例模式\r\n* $_instance必须声明为静态的私有变量\r\n* 构造函数和析构函数必须声明为私有,防止外部程序new\r\n* 类从而失去单例模式的意义\r\n* getInstance()方法必须设置为公有的,必须调用此方法\r\n* 以返回实例的一个引用\r\n* ::操作符只能访问静态变量和静态函数\r\n* new对象都会消耗内存\r\n* 使用场景:最常用的地方是数据库连接。\r\n* 使用单例模式生成一个对象后，\r\n* 该对象可以被其它众多对象所使用。\r\n*/\r\nclass Example\r\n{\r\n    //保存例实例在此属性中\r\n    private static $_instance;\r\n                    \r\n    //构造函数声明为private,防止直接创建对象\r\n    private function __construct()\r\n    {\r\n        echo &lsquo;I am Construceted&rsquo;;\r\n    }\r\n                    \r\n    //单例方法\r\n    public static function singleton()\r\n    {\r\n        if(!isset(self::$_instance))\r\n        {\r\n            $c=__CLASS__;\r\n            self::$_instance=new $c;\r\n        }\r\n        return self::$_instance;\r\n    }\r\n                    \r\n    //阻止用户复制对象实例\r\n    public function __clone()\r\n    {\r\n        trigger_error(&lsquo;Clone is not allow&rsquo; ,E_USER_ERROR);\r\n    }\r\n                    \r\n    function test()\r\n    {\r\n        echo(&ldquo;test&rdquo;);\r\n    }\r\n}\r\n                \r\n// 这个写法会出错，因为构造方法被声明为private\r\n$test = new Example;\r\n                \r\n// 下面将得到Example类的单例对象\r\n$test = Example::singleton();\r\n$test-&amp;gt;test();\r\n                \r\n// 复制对象将导致一个E_USER_ERROR.\r\n$test_clone = clone $test;&lt;/pre&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', '1364537721');
INSERT INTO `la_article` VALUES ('9', '10', '&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;web站点默认80为服务端口，关于它的各种安全问题不断的发布出来，这些漏洞中一些甚至允许攻击者获得系统管理员的权限进入站点内部，以下是Zenomorph对一些80端口攻击方式的痕迹的研究，和告诉你怎样从日志记录中发现问题。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;&lt;strong style=&quot;text-align:center;&quot;&gt;详细描述&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;下面部分通过一些列子，展示对web服务器和其上的应用程序普遍的攻击，和其留下的痕迹，这些列子仅仅是代表了主要的攻击方式，并没有列出所有的攻击形式，这部分将详细描述每种攻击的作用，和其怎样利用这些漏洞进行攻击。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（1）&rdquo;.&rdquo; &ldquo;..&rdquo; 和 &ldquo;&hellip;&rdquo; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这些攻击痕迹是非常普遍的用于web应用程序和web服务器，它用于允许攻击者或者蠕虫病毒程序改变web服务器的路径，获得访问非公开的区域。大多数的CGI程序漏洞含有这些&rdquo;..&rdquo;请求。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Example:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?file=../../../../etc/motd&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这个列子展示了攻击者请求mosd这个文件，如果攻击者有能力突破web服务器根目录，那么可以获得更多的信息，并进一步的获得特权。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（2）&rdquo;%20&Prime; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;%20是表示空格的16进制数值，虽然这个并不代表你能够利用什么，但是在你浏览日志的时候会发现它，一些web服务器上运行的应用程序中这个字符可能会被有效的执行，所以，你应该仔细的查看日志。另一方面，这个请求有时可以帮助执行一些命令。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Example:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=ls%20-al│&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这个列子展示了攻击者执行了一个unix的命令，列出请求的整个目录的文件，导致攻击者访问你系统中重要的文件，帮助他进一步取得特权提供条件。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（3）&rdquo;%00&Prime; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;%00表示16进制的空字节，他能够用于愚弄web应用程序，并请求不同类型的文件。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Examples:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=index.html&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这可能是个有效的请求在这个机子上，如果攻击者注意到这个请求动作成功，他会进一步寻找这个cgi程序的问题。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=../../../../etc/motd&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;也许这个cgi程序不接受这个请求，原因在于它要检查这个请求文件的后缀名，如：html.shtml或者其他类型的文件。大多数的程序会告诉你所请求的文件类型无效，这个时候它会告诉攻击者请求的文件必须是一某个字符后缀的文件类型，这样，攻击者可以获得系统的路径，文件名，导致在你的系统获得更多的敏感信息&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=../../../../etc/motd%00html&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;注意这个请求，它将骗取cgi程序认为这个文件是个确定的可接受的文件类型，一些应用程序由于愚蠢的检查有效的请求文件，这是攻击者常用的方法。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（4）&rdquo;│&rdquo; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这是个管道字符，在unix系统用于帮助在一个请求中同时执行多个系统命令。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Example:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;# cat access_log│ grep -i &ldquo;..&rdquo;&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（这个命令将显示日志中的&ldquo;..&ldquo;请求，常用于发现攻击者和蠕虫攻击）&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;常可以看到有很多web应用程序用这个字符，这也导致IDS日志中错误的报警。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;在你的程序仔细的检查中，这样是有好处的，可以降低错误的警报在入侵检测系统中。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;下面给出一些列子：&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=../../../../bin/ls│&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这个请求命令执行，下面是一些变化的列子&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=../../../../bin/ls%20-al%20/etc│&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这个请求在unix系统中列出/etc目录的所有文件&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://host/cgi-bin/lame.cgi?page=cat%20access_log│grep%20-i%20&Prime;lame&rdquo;&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这个请求cat命令的执行并且grep命令也将执行，查询出&rdquo;lame&rdquo;&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;(5)&rdquo;;&rdquo; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;在unix系统，这个字符允许多个命令在一行执行&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Example:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;# id;uname -a&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（执行id命令后，紧跟着执行uname命令）&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;一些web程序用这个字符，可能导致在你的IDS日志中失败的警告，你应该仔细的检查你的web程序，让你的IDS警报失败的几率降低。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（6）&rdquo;&amp;quot; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;应该检查你的日志记录中这两个字符，众多的原因中，首要的一个是这个字符表明了添加数据在文件中&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Example 1:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;# echo &ldquo;your hax0red h0 h0&Prime; &amp;gt;&amp;gt; /etc/motd （请求写信息在motd这个文件中)&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;一个攻击者可以容易的用象上面的这个请求篡改你的web页面。比如著名的RDS exploit常被攻击者用于更改web主页面。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;Example 2:&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;http://www.2cto.com /something.php=Hi%20mom%20Im%20Bold!&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;你会注意到这里html语言的标志，他同样用了&ldquo;〈&rdquo;，&ldquo;〉&rdquo;字符，这种攻击不能导致攻击者对系统进行访问，它迷惑人们认为这是个合法的信息在web 站点中（导致人们在访问这个联结的时候访问到攻击者设定的地址，这种请求可能会被转变成16进制的编码字符形式，使攻击的痕迹不那么明显）&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（7）&rdquo;!&rdquo;请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这种字符请求常用语对SS(Server Side Include) I进行攻击，如果攻击者迷惑用户点击被攻击者设定的联结，和上面的一样。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', '1364799883');
INSERT INTO `la_article` VALUES ('10', '13', '&lt;p&gt;DNS污染，又称为&lt;strong&gt;域名服务器缓存污染&lt;/strong&gt;（DNS cache pollution）或&lt;strong&gt;域名服务器缓存投毒&lt;/strong&gt;（DNS cache poisoning）&lt;/p&gt;&lt;p&gt;是指一些刻意制造或无意中制造出来的域名服务器&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E5%B0%81%E5%8C%85&quot; title=&quot;分组&quot; class=&quot;mw-redirect&quot;&gt;分组&lt;/a&gt;，把域名指往不正确的IP地址。一般来说，外间在&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E4%BA%92%E8%81%AF%E7%B6%B2&quot; title=&quot;互联网&quot; class=&quot;mw-redirect&quot;&gt;互联网&lt;/a&gt;上一般都有可信赖的&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E5%9F%9F%E5%90%8D%E6%9C%8D%E5%8A%A1%E5%99%A8&quot; title=&quot;域名服务器&quot; class=&quot;mw-redirect&quot;&gt;域名服务器&lt;/a&gt;，但为减免网络上的交通，一般的域名都会把外间的域名服务器数据暂存起来，待下次有其他机器要求解析域名时，可以立即提供服务。一旦有关网域的局域域名服务器的缓存受到污染，就会把网域内的电脑导引往错误的服务器或服务器的网址。&lt;/p&gt;&lt;p&gt;域名服务器缓存污染可能是通过域名服务器软件上的设计错误而产生，但亦可能由别有用心者通过研究&lt;a href=&quot;http://zh.wikipedia.org/w/index.php?title=%E9%96%8B%E6%94%BE%E6%9E%B6%E6%A7%8B&amp;amp;action=edit&amp;amp;redlink=1&quot; class=&quot;new&quot; title=&quot;开放架构（页面不存在）&quot;&gt;开放架构&lt;/a&gt;的域名服务器系统来利用当中的漏洞。&lt;/p&gt;&lt;h2&gt;&lt;a name=&quot;t0&quot;&gt;&lt;/a&gt;&lt;span class=&quot;mw-headline&quot; id=&quot;.E7.B7.A9.E5.AD.98.E6.B1.A1.E6.9F.93.E6.94.BB.E6.93.8A&quot;&gt;缓存污染攻击&lt;/span&gt;&lt;/h2&gt;&lt;p&gt;一般来说，一部连上了互联网的电脑都会使用&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E4%BA%92%E8%81%AF%E7%B6%B2%E6%9C%8D%E5%8B%99%E4%BE%9B%E6%87%89%E5%95%86&quot; title=&quot;互联网服务提供商&quot; class=&quot;mw-redirect&quot;&gt;互联网服务提供商&lt;/a&gt;提供的域名服务器。这个服务器一般只会为供应商的客户来服务，通常都会储蓄起部分客户曾经请求过的域名的缓存。缓存污染攻击就是针对这一种服务器，以影响服务器的用户或下游服务。&lt;/p&gt;&lt;h2&gt;&lt;a name=&quot;t1&quot;&gt;&lt;/a&gt;&lt;span class=&quot;mw-headline&quot; id=&quot;.E9.98.B2.E7.81.AB.E9.95.B7.E5.9F.8E.E7.9A.84.E7.B7.A9.E5.AD.98.E6.B1.A1.E6.9F.93.E6.94.BB.E6.93.8A&quot;&gt;防火长城的缓存污染攻击&lt;/span&gt;&lt;/h2&gt;&lt;p&gt;在中国大陆，对于所有经过&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E9%98%B2%E7%81%AB%E9%95%B7%E5%9F%8E&quot; title=&quot;防火长城&quot; class=&quot;mw-redirect&quot;&gt;防火长城&lt;/a&gt;的在UDP的53端口上的域名查询进行IDS&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E5%85%A5%E4%BE%B5%E6%A3%80%E6%B5%8B&quot; title=&quot;入侵检测&quot; class=&quot;mw-redirect&quot;&gt;入侵检测&lt;/a&gt;，一经发现与黑名单关键词相匹配的域名查询请求，其会马上伪装成目标域名的解析服务器给查询者返回虚假结果。由于通常的域名查询没有任何认证机制，而且域名查询通常基于的UDP协议是无连接不可靠的协议，查询者只能接受最先到达的格式正确结果，并丢弃之后的结果。&lt;sup id=&quot;cite_ref-gfw_2-0&quot; class=&quot;reference&quot;&gt;&lt;a href=&quot;http://zh.wikipedia.org/wiki/DNS%E6%B1%A1%E6%9F%93#cite_note-gfw-2&quot;&gt;[2]&lt;/a&gt;&lt;/sup&gt;&lt;/p&gt;&lt;ul class=&quot; list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;对于不了解相关知识的网民来说也就是，由于系统默认使用的&lt;a href=&quot;http://zh.wikipedia.org/wiki/ISP&quot; title=&quot;ISP&quot;&gt;ISP&lt;/a&gt;提供的域名查询服务器查询国外的权威服务器时即被防火长城被污染，使其缓存受到污染，因而默认情况下查询ISP的服务器就会获得虚假IP地址；而用户直接查询境外域名查询服务器（比如&lt;a href=&quot;http://zh.wikipedia.org/wiki/Google_Public_DNS&quot; title=&quot;Google Public DNS&quot;&gt;Google Public DNS&lt;/a&gt;）有可能会被防火长城污染，从而在没有任何防范机制的情况下仍然不能获得目标网站正确的IP地址。&lt;sup id=&quot;cite_ref-gfw_2-1&quot; class=&quot;reference&quot;&gt;&lt;a href=&quot;http://zh.wikipedia.org/wiki/DNS%E6%B1%A1%E6%9F%93#cite_note-gfw-2&quot;&gt;[2]&lt;/a&gt;&lt;/sup&gt;&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;ul class=&quot; list-paddingleft-2&quot;&gt;&lt;li&gt;&lt;p&gt;防火长城暂时未对TCP协议下的域名查询进行污染，故现在能通过强制使用TCP协议查询真实的IP地址：Windows下打开&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E5%91%BD%E4%BB%A4%E6%8F%90%E7%A4%BA%E7%AC%A6&quot; title=&quot;命令提示符&quot; class=&quot;mw-redirect&quot;&gt;命令提示符&lt;/a&gt;，输入nslookup -vc 要查询的域名 境外DNS服务器的IP地址（必须支持TCP协议查询，否则不会返回查询结果），回车后能返回正确的目标服务器IP地址。而现实的情况是，防火长城对于真实的IP地址也可能会采取其它的手段进行封锁，故能否真正访问可能还需要其它&lt;a href=&quot;http://zh.wikipedia.org/wiki/%E7%BF%BB%E5%A2%99&quot; title=&quot;翻墙&quot; class=&quot;mw-redirect&quot;&gt;翻墙&lt;/a&gt;的手段。&lt;/p&gt;&lt;/li&gt;&lt;/ul&gt;&lt;h2 class=&quot;headline-1 bk-sidecatalog-title&quot;&gt;&lt;a name=&quot;t2&quot;&gt;&lt;/a&gt;&lt;span class=&quot;headline-content&quot;&gt;验证DNS污染的办法&lt;/span&gt;&lt;/h2&gt;&lt;div class=&quot;para&quot;&gt;我们在命令行下通过这样一条命令 nslookup 域名 144.223.234.234，即可判断该域名是否被污染，由于144.223.234.234不存在，理应没有任何返回。但我们却得到了一个错误的IP（不确定）。即可证明这个域名已经被DNS污染了。&lt;/div&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;div&gt;&lt;span style=&quot;font-size:14px&quot;&gt;&lt;strong&gt;解决DNS污染方案&lt;/strong&gt;&lt;/span&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;1、修改hosts文件，操作系统中Hosts文件的优先级高于DNS服务器，操作系统在访问某个域名时，会先检测HOSTS文件，然后再查询DNS服务器。可以在hosts添加受到污染的DNS地址来解决DNS污染和DNS劫持。&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;2、如果你是Firefox only用户，并且只用Firefox，又懒得折腾，直接打开Firefox的远程DNS解析就行了。在地址栏中输入about:config找到network.proxy.socks_remote_dns一项改成true。&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;3、使用各种SSH加密代理，在加密代理里进行远程DNS解析，或者使用VPN上网。&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;4、通过一些软件编程处理，可以直接忽略返回结果是虚假IP地址的数据包，直接解决DNS污染的问题。&lt;/div&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', '1364885467');
INSERT INTO `la_article` VALUES ('11', '18', '&lt;p&gt; &amp;nbsp; &amp;nbsp;进入vi的命令&lt;br /&gt; &amp;nbsp; &amp;nbsp;vi filename :打开或新建文件，并将光标置于第一行首&lt;br /&gt; &amp;nbsp; &amp;nbsp;vi +n filename ：打开文件，并将光标置于第n行首&lt;br /&gt; &amp;nbsp; &amp;nbsp;vi + filename ：打开文件，并将光标置于最后一行首&lt;br /&gt; &amp;nbsp; &amp;nbsp;vi +/pattern filename：打开文件，并将光标置于第一个与pattern匹配的串处&lt;br /&gt; &amp;nbsp; &amp;nbsp;vi -r filename ：在上次正用vi编辑时发生系统崩溃，恢复filename&lt;br /&gt; &amp;nbsp; &amp;nbsp;vi filename&hellip;.filename ：打开多个文件，依次编辑&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;移动光标类命令&lt;br /&gt; &amp;nbsp; &amp;nbsp;h ：光标左移一个字符&lt;br /&gt; &amp;nbsp; &amp;nbsp;l ：光标右移一个字符&lt;br /&gt; &amp;nbsp; &amp;nbsp;space：光标右移一个字符&lt;br /&gt; &amp;nbsp; &amp;nbsp;Backspace：光标左移一个字符&lt;br /&gt; &amp;nbsp; &amp;nbsp;k或Ctrl+p：光标上移一行&lt;br /&gt; &amp;nbsp; &amp;nbsp;j或Ctrl+n ：光标下移一行&lt;br /&gt; &amp;nbsp; &amp;nbsp;Enter ：光标下移一行&lt;br /&gt; &amp;nbsp; &amp;nbsp;w或W ：光标右移一个字至字首&lt;br /&gt; &amp;nbsp; &amp;nbsp;b或B ：光标左移一个字至字首&lt;br /&gt; &amp;nbsp; &amp;nbsp;e或E ：光标右移一个字j至字尾&lt;br /&gt; &amp;nbsp; &amp;nbsp;) ：光标移至句尾&lt;br /&gt; &amp;nbsp; &amp;nbsp;( ：光标移至句首&lt;br /&gt; &amp;nbsp; &amp;nbsp;}：光标移至段落开头&lt;br /&gt; &amp;nbsp; &amp;nbsp;{：光标移至段落结尾&lt;br /&gt; &amp;nbsp; &amp;nbsp;nG：光标移至第n行首&lt;br /&gt; &amp;nbsp; &amp;nbsp;n+：光标下移n行&lt;br /&gt; &amp;nbsp; &amp;nbsp;n-：光标上移n行&lt;br /&gt; &amp;nbsp; &amp;nbsp;n$：光标移至第n行尾&lt;br /&gt; &amp;nbsp; &amp;nbsp;H ：光标移至屏幕顶行&lt;br /&gt; &amp;nbsp; &amp;nbsp;M ：光标移至屏幕中间行&lt;br /&gt; &amp;nbsp; &amp;nbsp;L ：光标移至屏幕最后行&lt;br /&gt; &amp;nbsp; &amp;nbsp;0：（注意是数字零）光标移至当前行首&lt;br /&gt; &amp;nbsp; &amp;nbsp;$：光标移至当前行尾&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;屏幕翻滚类命令&lt;br /&gt; &amp;nbsp; &amp;nbsp;Ctrl+u：向文件首翻半屏&lt;br /&gt; &amp;nbsp; &amp;nbsp;Ctrl+d：向文件尾翻半屏&lt;br /&gt; &amp;nbsp; &amp;nbsp;Ctrl+f：向文件尾翻一屏&lt;br /&gt; &amp;nbsp; &amp;nbsp;Ctrl＋b；向文件首翻一屏&lt;br /&gt; &amp;nbsp; &amp;nbsp;nz：将第n行滚至屏幕顶部，不指定n时将当前行滚至屏幕顶部。&lt;br /&gt; &amp;nbsp; &amp;nbsp;插入文本类命令&lt;br /&gt; &amp;nbsp; &amp;nbsp;i ：在光标前&lt;br /&gt; &amp;nbsp; &amp;nbsp;I ：在当前行首&lt;br /&gt; &amp;nbsp; &amp;nbsp;a：光标后&lt;br /&gt; &amp;nbsp; &amp;nbsp;A：在当前行尾&lt;br /&gt; &amp;nbsp; &amp;nbsp;o：在当前行之下新开一行&lt;br /&gt; &amp;nbsp; &amp;nbsp;O：在当前行之上新开一行&lt;br /&gt; &amp;nbsp; &amp;nbsp;r：替换当前字符&lt;br /&gt; &amp;nbsp; &amp;nbsp;R：替换当前字符及其后的字符，直至按ESC键&lt;br /&gt; &amp;nbsp; &amp;nbsp;s：从当前光标位置处开始，以输入的文本替代指定数目的字符&lt;br /&gt; &amp;nbsp; &amp;nbsp;S：删除指定数目的行，并以所输入文本代替之&lt;br /&gt; &amp;nbsp; &amp;nbsp;ncw或nCW：修改指定数目的字&lt;br /&gt; &amp;nbsp; &amp;nbsp;nCC：修改指定数目的行&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;删除命令&lt;br /&gt; &amp;nbsp; &amp;nbsp;ndw或ndW：删除光标处开始及其后的n-1个字&lt;br /&gt; &amp;nbsp; &amp;nbsp;do：删至行首&lt;br /&gt; &amp;nbsp; &amp;nbsp;d$：删至行尾&lt;br /&gt; &amp;nbsp; &amp;nbsp;ndd：删除当前行及其后n-1行&lt;br /&gt; &amp;nbsp; &amp;nbsp;dd：删除当前行&lt;br /&gt; &amp;nbsp; &amp;nbsp;x或X：删除一个字符，x删除光标后的，而X删除光标前的&lt;br /&gt; &amp;nbsp; &amp;nbsp;Ctrl+u：删除输入方式下所输入的文本&lt;br /&gt; &amp;nbsp; &amp;nbsp;dnl:向右删除n个字母&lt;br /&gt; &amp;nbsp; &amp;nbsp;dnh:向左删除n个字母&lt;br /&gt; &amp;nbsp; &amp;nbsp;dnj:向下删除n行&lt;br /&gt; &amp;nbsp; &amp;nbsp;dnk:向上删除n行&lt;br /&gt; &amp;nbsp; &amp;nbsp;搜索及替换命令 :&lt;br /&gt; &amp;nbsp; &amp;nbsp;/pattern：从光标开始处向文件尾搜索pattern&lt;br /&gt; &amp;nbsp; &amp;nbsp;?pattern：从光标开始处向文件首搜索pattern&lt;br /&gt; &amp;nbsp; &amp;nbsp;n：在同一方向重复上一次搜索命令&lt;br /&gt; &amp;nbsp; &amp;nbsp;N：在反方向上重复上一次搜索命令&lt;br /&gt; &amp;nbsp; &amp;nbsp;：s/p1/p2/g：将当前行中所有p1均用p2替代&lt;br /&gt; &amp;nbsp; &amp;nbsp;：n1,n2s/p1/p2/g：将第n1至n2行中所有p1均用p2替代&lt;br /&gt; &amp;nbsp; &amp;nbsp;：g/p1/s//p2/g：将文件中所有p1均用p2替换&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;选项设置&lt;br /&gt; &amp;nbsp; &amp;nbsp;all：列出所有选项设置情况&lt;br /&gt; &amp;nbsp; &amp;nbsp;term：设置终端类型&lt;br /&gt; &amp;nbsp; &amp;nbsp;ignorance：在搜索中忽略大小写&lt;br /&gt; &amp;nbsp; &amp;nbsp;list：显示制表位(Ctrl+I)和行尾标志（$)&lt;br /&gt; &amp;nbsp; &amp;nbsp;number：显示行号&lt;br /&gt; &amp;nbsp; &amp;nbsp;report：显示由面向行的命令修改过的数目&lt;br /&gt; &amp;nbsp; &amp;nbsp;terse：显示简短的警告信息&lt;br /&gt; &amp;nbsp; &amp;nbsp;warn：在转到别的文件时若没保存当前文件则显示NO write信息&lt;br /&gt; &amp;nbsp; &amp;nbsp;nomagic：允许在搜索模式中，使用前面不带&ldquo;&rdquo;的特殊字符&lt;br /&gt; &amp;nbsp; &amp;nbsp;nowrapscan：禁止vi在搜索到达文件两端时，又从另一端开始&lt;br /&gt; &amp;nbsp; &amp;nbsp;mesg：允许vi显示其他用户用write写到自己终端上的信息&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;最后行方式命令&lt;br /&gt; &amp;nbsp; &amp;nbsp;：n1,n2 co n3：将n1行到n2行之间的内容拷贝到第n3行下&lt;br /&gt; &amp;nbsp; &amp;nbsp;：n1,n2 m n3：将n1行到n2行之间的内容移至到第n3行下&lt;br /&gt; &amp;nbsp; &amp;nbsp;：n1,n2 d ：将n1行到n2行之间的内容删除&lt;br /&gt; &amp;nbsp; &amp;nbsp;：w ：保存当前文件&lt;br /&gt; &amp;nbsp; &amp;nbsp;：e filename：打开文件filename进行编辑&lt;br /&gt; &amp;nbsp; &amp;nbsp;：x：保存当前文件并退出&lt;br /&gt; &amp;nbsp; &amp;nbsp;：q：退出vi&lt;br /&gt; &amp;nbsp; &amp;nbsp;：q!：不保存文件并退出vi&lt;br /&gt; &amp;nbsp; &amp;nbsp;：!command：执行shell命令command&lt;br /&gt; &amp;nbsp; &amp;nbsp;：n1,n2 w!command：将文件中n1行至n2行的内容作为command的输入并执行之，若不指&lt;br /&gt; &amp;nbsp; &amp;nbsp;定n1，n2，则表示将整个文件内容作为command的输入&lt;br /&gt; &amp;nbsp; &amp;nbsp;：r!command：将命令command的输出结果放到当前行。&lt;/p&gt;', '1365748740');

-- ----------------------------
-- Table structure for `la_attachment`
-- ----------------------------
DROP TABLE IF EXISTS `la_attachment`;
CREATE TABLE `la_attachment` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `archiveid` int(10) NOT NULL DEFAULT '0',
  `filepath` varchar(100) NOT NULL COMMENT '文件路径',
  `filename` varchar(100) NOT NULL COMMENT '原文件名',
  `savename` varchar(100) DEFAULT NULL COMMENT '文件保存名称',
  `filesize` int(10) NOT NULL DEFAULT '0',
  `filetype` varchar(20) DEFAULT NULL COMMENT '文件类型(后缀名)',
  `downloadnum` int(10) NOT NULL DEFAULT '0' COMMENT '下载次数',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_attachment
-- ----------------------------
INSERT INTO `la_attachment` VALUES ('1', '16', '/Uploads/Attachment/201304/11/1365646326_7obyrl_5499.zip', 'LaughCMS.zip', '1365646326_7obyrl_5499.zip', '168', 'zip', '0', '1365646325');
INSERT INTO `la_attachment` VALUES ('2', '17', '/Uploads/Attachment/201304/11/1365669678_81n8ga_1108-scws-1.2.0.tar.bz2', 'scws-1.2.0.tar.bz2', '1365669678_81n8ga_1108-scws-1.2.0.tar.bz2', '373566', 'bz2', '0', '1365669678');

-- ----------------------------
-- Table structure for `la_city`
-- ----------------------------
DROP TABLE IF EXISTS `la_city`;
CREATE TABLE `la_city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL COMMENT '市',
  `pid` int(11) DEFAULT '1' COMMENT 'province_id',
  `pinyin` varchar(50) DEFAULT NULL COMMENT '拼音',
  `pinyin_tongcheng` varchar(50) NOT NULL,
  `pinyin_baixing` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=349 DEFAULT CHARSET=utf8 COMMENT='市';

-- ----------------------------
-- Records of la_city
-- ----------------------------
INSERT INTO `la_city` VALUES ('1', '鞍山市', '9', 'anshan', 'as', 'anshan');
INSERT INTO `la_city` VALUES ('2', '安阳市', '13', 'anyang', 'ay', 'anyang');
INSERT INTO `la_city` VALUES ('3', '安庆市', '17', 'anqing', 'anqing', 'anqing');
INSERT INTO `la_city` VALUES ('4', '安康市', '24', 'ankang', 'ankang', 'ankang');
INSERT INTO `la_city` VALUES ('5', '阿克苏市', '30', 'akesu', 'aks', 'akesu');
INSERT INTO `la_city` VALUES ('6', '安顺市', '8', 'anshun', 'anshun', 'anshun');
INSERT INTO `la_city` VALUES ('7', '阿勒泰市', '30', 'aletai', '', 'aletai');
INSERT INTO `la_city` VALUES ('8', '阿拉善市', '20', 'alashan', '', 'alashan');
INSERT INTO `la_city` VALUES ('9', '阿坝市', '6', 'aba', 'ab', 'aba');
INSERT INTO `la_city` VALUES ('10', '阿里市', '31', 'ali', 'al', 'ali');
INSERT INTO `la_city` VALUES ('11', '阿拉尔市', '33', 'alaer', 'ale', 'alaer');
INSERT INTO `la_city` VALUES ('12', '澳门市', '32', 'aomen', 'am', '');
INSERT INTO `la_city` VALUES ('13', '北京市', '1', 'bj', 'bj', 'beijing');
INSERT INTO `la_city` VALUES ('14', '保定市', '12', 'baoding', 'bd', 'baoding');
INSERT INTO `la_city` VALUES ('15', '滨州市', '16', 'binzhou', 'bz', 'binzhou');
INSERT INTO `la_city` VALUES ('16', '包头市', '20', 'baotou', 'bt', 'baotou');
INSERT INTO `la_city` VALUES ('17', '宝鸡市', '24', 'baoji', 'baoji', 'baoji');
INSERT INTO `la_city` VALUES ('18', '本溪市', '9', 'benxi', 'benxi', 'benxi');
INSERT INTO `la_city` VALUES ('19', '蚌埠市', '17', 'bengbu', 'bengbu', 'bengbu');
INSERT INTO `la_city` VALUES ('20', '北海市', '18', 'beihai', 'bh', 'beihai');
INSERT INTO `la_city` VALUES ('21', '巴彦淖尔市', '20', 'bayannaoer', 'bycem', 'bayannaoer');
INSERT INTO `la_city` VALUES ('22', '白城市', '14', 'baicheng', 'bc', 'baicheng');
INSERT INTO `la_city` VALUES ('23', '白山市', '14', 'baishan', 'baishan', 'baishan');
INSERT INTO `la_city` VALUES ('24', '亳州市', '17', 'bozhou', 'bozhou', 'bozhou');
INSERT INTO `la_city` VALUES ('25', '巴中市', '6', 'bazhong', 'bazhong', 'bazhong');
INSERT INTO `la_city` VALUES ('26', '白银市', '23', 'baiyin', 'by', 'baiyin');
INSERT INTO `la_city` VALUES ('27', '百色市', '18', 'baise', 'baise', 'bose');
INSERT INTO `la_city` VALUES ('28', '毕节市', '8', 'bijie', 'bijie', 'bijie');
INSERT INTO `la_city` VALUES ('29', '巴音郭楞市', '30', 'bayinguoleng', 'bygl', 'bayinguoleng');
INSERT INTO `la_city` VALUES ('30', '保山市', '29', 'baoshan', 'bs', 'baoshan');
INSERT INTO `la_city` VALUES ('31', '博尔塔拉市', '30', 'boertala', 'betl', 'boertala');
INSERT INTO `la_city` VALUES ('32', '成都市', '6', 'cd', 'cd', 'chengdu');
INSERT INTO `la_city` VALUES ('33', '重庆市', '4', 'cq', 'cq', 'chongqing');
INSERT INTO `la_city` VALUES ('34', '长沙市', '27', 'cs', 'cs', 'changsha');
INSERT INTO `la_city` VALUES ('35', '长春市', '14', 'cc', 'cc', 'changchun');
INSERT INTO `la_city` VALUES ('36', '常州市', '10', 'changzhou', 'cz', 'changzhou');
INSERT INTO `la_city` VALUES ('37', '沧州市', '12', 'cangzhou', 'cangzhou', 'cangzhou');
INSERT INTO `la_city` VALUES ('38', '赤峰市', '20', 'chifeng', 'chifeng', 'chifeng');
INSERT INTO `la_city` VALUES ('39', '承德市', '12', 'chengde', 'chengde', 'chengde');
INSERT INTO `la_city` VALUES ('40', '常德市', '27', 'changde', 'changde', 'changde');
INSERT INTO `la_city` VALUES ('41', '长治市', '21', 'changzhi', 'changzhi', 'changzhi');
INSERT INTO `la_city` VALUES ('42', '郴州市', '27', 'chenzhou', 'chenzhou', 'chenzhou');
INSERT INTO `la_city` VALUES ('43', '滁州市', '17', 'chuzhou', 'chuzhou', 'chuzhou');
INSERT INTO `la_city` VALUES ('44', '巢湖市', '17', 'chaohu', 'ch', 'chaohu');
INSERT INTO `la_city` VALUES ('45', '潮州市', '5', 'chaozhou', 'chaozhou', 'chaozhou');
INSERT INTO `la_city` VALUES ('46', '昌吉市', '30', 'changji', 'changji', 'changji');
INSERT INTO `la_city` VALUES ('47', '池州市', '17', 'chizhou', 'chizhou', 'chizhou');
INSERT INTO `la_city` VALUES ('48', '楚雄市', '29', 'chuxiong', 'cx', 'chuxiong');
INSERT INTO `la_city` VALUES ('49', '崇左市', '18', 'chongzuo', 'chongzuo', 'chongzuo');
INSERT INTO `la_city` VALUES ('50', '昌都市', '31', 'changdu', 'changdu', 'changdu');
INSERT INTO `la_city` VALUES ('51', '大连市', '9', 'dl', 'dl', 'dalian');
INSERT INTO `la_city` VALUES ('52', '东莞市', '5', 'dg', 'dg', 'dongguan');
INSERT INTO `la_city` VALUES ('53', '德州市', '16', 'dezhou', 'dz', 'dezhou');
INSERT INTO `la_city` VALUES ('54', '东营市', '16', 'dongying', 'dy', 'dongying');
INSERT INTO `la_city` VALUES ('55', '大庆市', '15', 'daqing', 'dq', 'daqing');
INSERT INTO `la_city` VALUES ('56', '大同市', '21', 'datong', 'dt', 'datong');
INSERT INTO `la_city` VALUES ('57', '丹东市', '9', 'dandong', 'dandong', 'dandong');
INSERT INTO `la_city` VALUES ('58', '德阳市', '6', 'deyang', 'deyang', 'deyang');
INSERT INTO `la_city` VALUES ('59', '达州市', '6', 'dazhou', 'dazhou', 'dazhou');
INSERT INTO `la_city` VALUES ('60', '大理市', '29', 'dali', 'dali', 'dali');
INSERT INTO `la_city` VALUES ('61', '大兴安岭市', '20', 'daxinganling', 'dxal', 'xingan');
INSERT INTO `la_city` VALUES ('62', '定西市', '23', 'dingxi', 'dx', 'dingxi');
INSERT INTO `la_city` VALUES ('63', '德宏市', '29', 'dehong', 'dh', 'dehong');
INSERT INTO `la_city` VALUES ('64', '迪庆市', '29', 'diqing', 'diqing', 'diqing');
INSERT INTO `la_city` VALUES ('65', '鄂尔多斯市', '20', 'eerduosi', 'erds', 'eerduosi');
INSERT INTO `la_city` VALUES ('66', '恩施市', '26', 'enshi', 'es', 'enshi');
INSERT INTO `la_city` VALUES ('67', '鄂州市', '26', 'ezhou', 'ez', 'ezhou');
INSERT INTO `la_city` VALUES ('68', '福州市', '11', 'fz', 'fz', 'fuzhou');
INSERT INTO `la_city` VALUES ('69', '佛山市', '5', 'foshan', 'fs', 'foshan');
INSERT INTO `la_city` VALUES ('70', '抚顺市', '9', 'fushun', 'fushun', 'fushun');
INSERT INTO `la_city` VALUES ('71', '阜阳市', '17', 'fuyang', 'fy', 'fuyang');
INSERT INTO `la_city` VALUES ('72', '阜新市', '9', 'fuxin', 'fx', 'fuxin');
INSERT INTO `la_city` VALUES ('73', '抚州市', '28', 'jxfuzhou', 'fuzhou', 'fz');
INSERT INTO `la_city` VALUES ('74', '防城港市', '18', 'fangchenggang', 'fcg', 'fangchenggang');
INSERT INTO `la_city` VALUES ('75', '广州市', '5', 'gz', 'gz', 'guangzhou');
INSERT INTO `la_city` VALUES ('76', '贵阳市', '8', 'gy', 'gy', 'guiyang');
INSERT INTO `la_city` VALUES ('77', '桂林市', '18', 'gl', 'gl', 'guilin');
INSERT INTO `la_city` VALUES ('78', '赣州市', '28', 'ganzhou', 'ganzhou', 'ganzhou');
INSERT INTO `la_city` VALUES ('79', '广元市', '6', 'guangyuan', 'guangyuan', 'guangyuan');
INSERT INTO `la_city` VALUES ('80', '广安市', '6', 'guangan', 'ga', 'guangan');
INSERT INTO `la_city` VALUES ('81', '贵港市', '18', 'guigang', 'gg', 'guigang');
INSERT INTO `la_city` VALUES ('82', '固原市', '22', 'guyuan', 'guyuan', 'guyuan');
INSERT INTO `la_city` VALUES ('83', '甘南市', '23', 'gannan', 'gn', 'gannan');
INSERT INTO `la_city` VALUES ('84', '甘孜市', '6', 'ganzi', 'ganzi', 'ganzi');
INSERT INTO `la_city` VALUES ('85', '果洛市', '25', 'guoluo', 'guoluo', 'guoluo');
INSERT INTO `la_city` VALUES ('86', '杭州市', '7', 'hz', 'hz', 'hangzhou');
INSERT INTO `la_city` VALUES ('87', '哈尔滨市', '15', 'hrb', 'hrb', 'haerbin');
INSERT INTO `la_city` VALUES ('88', '合肥市', '17', 'hf', 'hf', 'hefei');
INSERT INTO `la_city` VALUES ('89', '呼和浩特市', '20', 'nmg', 'hu', 'huhehaote');
INSERT INTO `la_city` VALUES ('90', '海口市', '19', 'hn', 'haikou', 'haikou');
INSERT INTO `la_city` VALUES ('91', '邯郸市', '12', 'handan', 'hd', 'handan');
INSERT INTO `la_city` VALUES ('92', '惠州市', '5', 'huizhou', 'huizhou', 'huizhou');
INSERT INTO `la_city` VALUES ('93', '菏泽市', '16', 'heze', 'heze', 'heze');
INSERT INTO `la_city` VALUES ('94', '衡水市', '12', 'hengshui', 'hs', 'hengshui');
INSERT INTO `la_city` VALUES ('95', '淮安市', '10', 'huaian', 'ha', 'huaian');
INSERT INTO `la_city` VALUES ('96', '衡阳市', '27', 'hengyang', 'hy', 'hengyang');
INSERT INTO `la_city` VALUES ('97', '葫芦岛市', '9', 'huludao', 'hld', 'huludao');
INSERT INTO `la_city` VALUES ('98', '淮南市', '17', 'huainan', 'hn', 'huainan');
INSERT INTO `la_city` VALUES ('99', '汉中市', '24', 'hanzhong', 'hanzhong', 'hanzhong');
INSERT INTO `la_city` VALUES ('100', '怀化市', '27', 'huaihua', 'hh', 'huaihua');
INSERT INTO `la_city` VALUES ('101', '淮北市', '17', 'huaibei', 'huaibei', 'huaibei');
INSERT INTO `la_city` VALUES ('102', '黄冈市', '26', 'huanggang', 'hg', 'huanggang');
INSERT INTO `la_city` VALUES ('103', '湖州市', '7', 'huzhou', 'huzhou', 'huzhou');
INSERT INTO `la_city` VALUES ('104', '黄石市', '26', 'huangshi', 'hshi', 'huangshi');
INSERT INTO `la_city` VALUES ('105', '呼伦贝尔市', '20', 'hulunbeier', 'hlbe', 'hulunbeier');
INSERT INTO `la_city` VALUES ('106', '河源市', '5', 'heyuan', 'heyuan', 'heyuan');
INSERT INTO `la_city` VALUES ('107', '鹤壁市', '13', 'hebi', 'hb', 'hebi');
INSERT INTO `la_city` VALUES ('108', '鹤岗市', '15', 'hegang', 'hegang', 'hegang');
INSERT INTO `la_city` VALUES ('109', '黄山市', '17', 'huangshan', 'huangshan', 'huangshan');
INSERT INTO `la_city` VALUES ('110', '红河市', '29', 'honghe', 'honghe', 'honghe');
INSERT INTO `la_city` VALUES ('111', '河池市', '18', 'hechi', 'hc', 'hechi');
INSERT INTO `la_city` VALUES ('112', '哈密市', '30', 'hami', 'hami', 'hami');
INSERT INTO `la_city` VALUES ('113', '黑河市', '15', 'heihe', 'heihe', 'heihe');
INSERT INTO `la_city` VALUES ('114', '贺州市', '18', 'hezhou', 'hezhou', 'hezhou');
INSERT INTO `la_city` VALUES ('115', '海西市', '25', 'haixi', 'hx', 'haixi');
INSERT INTO `la_city` VALUES ('116', '和田市', '30', 'hetian', 'ht', 'hetian');
INSERT INTO `la_city` VALUES ('117', '海北市', '25', 'haibei', 'haibei', 'haibei');
INSERT INTO `la_city` VALUES ('118', '海东市', '25', 'haidong', 'haidong', 'haidong');
INSERT INTO `la_city` VALUES ('119', '黄南市', '25', 'huangnan', 'huangnan', 'huangnan');
INSERT INTO `la_city` VALUES ('120', '济南市', '16', 'jn', 'jn', 'jinan');
INSERT INTO `la_city` VALUES ('121', '济宁市', '16', 'jining', 'jining', 'jining');
INSERT INTO `la_city` VALUES ('122', '吉林市', '14', 'jilin', 'jl', 'jilin');
INSERT INTO `la_city` VALUES ('123', '锦州市', '9', 'jinzhou', 'jinzhou', 'jinzhou');
INSERT INTO `la_city` VALUES ('124', '金华市', '7', 'jinhua', 'jh', 'jinhua');
INSERT INTO `la_city` VALUES ('125', '嘉兴市', '7', 'jiaxing', 'jx', 'jiaxing');
INSERT INTO `la_city` VALUES ('126', '江门市', '5', 'jiangmen', 'jm', 'jiangmen');
INSERT INTO `la_city` VALUES ('127', '荆州市', '26', 'jingzhou', 'jingzhou', 'jingzhou');
INSERT INTO `la_city` VALUES ('128', '焦作市', '13', 'jiaozuo', 'jiaozuo', 'jiaozuo');
INSERT INTO `la_city` VALUES ('129', '晋中市', '21', 'jinzhong', 'jz', 'jinzhong');
INSERT INTO `la_city` VALUES ('130', '佳木斯市', '15', 'jiamusi', 'jms', 'jiamusi');
INSERT INTO `la_city` VALUES ('131', '九江市', '28', 'jiujiang', 'jj', 'jiujiang');
INSERT INTO `la_city` VALUES ('132', '晋城市', '21', 'jincheng', 'jincheng', 'jincheng');
INSERT INTO `la_city` VALUES ('133', '荆门市', '26', 'jingmen', 'jingmen', 'jingmen');
INSERT INTO `la_city` VALUES ('134', '鸡西市', '15', 'jixi', 'jixi', 'jixi');
INSERT INTO `la_city` VALUES ('135', '吉安市', '28', 'jian', 'ja', 'jian');
INSERT INTO `la_city` VALUES ('136', '揭阳市', '5', 'jieyang', 'jy', 'jieyang');
INSERT INTO `la_city` VALUES ('137', '景德镇市', '28', 'jingdezhen', 'jdz', 'jingdezhen');
INSERT INTO `la_city` VALUES ('138', '济源市', '13', 'jiyuan', 'jiyuan', 'jiyuan');
INSERT INTO `la_city` VALUES ('139', '酒泉市', '23', 'jiuquan', 'jq', 'jiuquan');
INSERT INTO `la_city` VALUES ('140', '金昌市', '23', 'jinchang', 'jinchang', 'jinchang');
INSERT INTO `la_city` VALUES ('141', '嘉峪关市', '23', 'jiayuguan', 'jyg', 'jiayuguan');
INSERT INTO `la_city` VALUES ('142', '昆明市', '29', 'km', 'km', 'kunming');
INSERT INTO `la_city` VALUES ('143', '开封市', '13', 'kaifeng', 'kaifeng', 'kaifeng');
INSERT INTO `la_city` VALUES ('144', '喀什市', '30', 'kashi', 'ks', 'kashi');
INSERT INTO `la_city` VALUES ('145', '克拉玛依市', '30', 'kelamayi', 'klmy', 'kelamayi');
INSERT INTO `la_city` VALUES ('146', '库尔勒市', '33', 'kuerle', 'kel', '');
INSERT INTO `la_city` VALUES ('147', '克孜勒苏市', '30', 'kezilesu', 'kzls', 'kezilesu');
INSERT INTO `la_city` VALUES ('148', '兰州市', '23', 'lz', 'lz', 'lanzhou');
INSERT INTO `la_city` VALUES ('149', '拉萨市', '31', 'xz', 'lasa', 'lasa');
INSERT INTO `la_city` VALUES ('150', '廊坊市', '12', 'langfang', 'lf', 'langfang');
INSERT INTO `la_city` VALUES ('151', '临沂市', '16', 'linyi', 'linyi', 'linyi');
INSERT INTO `la_city` VALUES ('152', '洛阳市', '13', 'luoyang', 'luoyang', 'luoyang');
INSERT INTO `la_city` VALUES ('153', '聊城市', '16', 'liaocheng', 'lc', 'liaocheng');
INSERT INTO `la_city` VALUES ('154', '柳州市', '18', 'liuzhou', 'liuzhou', 'liuzhou');
INSERT INTO `la_city` VALUES ('155', '连云港市', '10', 'lianyungang', 'lyg', 'lianyungang');
INSERT INTO `la_city` VALUES ('156', '临汾市', '21', 'linfen', 'linfen', 'linfen');
INSERT INTO `la_city` VALUES ('157', '漯河市', '13', 'luohe', 'luohe', 'luohe');
INSERT INTO `la_city` VALUES ('158', '辽阳市', '9', 'liaoyang', 'liaoyang', 'liaoyang');
INSERT INTO `la_city` VALUES ('159', '乐山市', '6', 'leshan', 'ls', 'leshan');
INSERT INTO `la_city` VALUES ('160', '泸州市', '6', 'luzhou', 'luzhou', 'luzhou');
INSERT INTO `la_city` VALUES ('161', '六安市', '17', 'luan', 'la', 'luan');
INSERT INTO `la_city` VALUES ('162', '娄底市', '27', 'loudi', 'ld', 'loudi');
INSERT INTO `la_city` VALUES ('163', '莱芜市', '16', 'laiwu', 'lw', 'laiwu');
INSERT INTO `la_city` VALUES ('164', '龙岩市', '11', 'longyan', 'ly', 'longyan');
INSERT INTO `la_city` VALUES ('165', '吕梁市', '21', 'lvliang', 'lvliang', 'lvliang');
INSERT INTO `la_city` VALUES ('166', '丽水市', '7', 'lishui', 'lishui', 'lishui');
INSERT INTO `la_city` VALUES ('167', '凉山市', '6', 'liangshan', 'liangshan', 'liangshan');
INSERT INTO `la_city` VALUES ('168', '丽江市', '29', 'lijiang', 'lj', 'lijiang');
INSERT INTO `la_city` VALUES ('169', '六盘水市', '8', 'liupanshui', 'lps', 'liupanshui');
INSERT INTO `la_city` VALUES ('170', '辽源市', '14', 'liaoyuan', 'liaoyuan', 'liaoyuan');
INSERT INTO `la_city` VALUES ('171', '来宾市', '18', 'laibin', 'lb', 'laibin');
INSERT INTO `la_city` VALUES ('172', '临沧市', '29', 'lincang', 'lincang', 'lincang');
INSERT INTO `la_city` VALUES ('173', '陇南市', '23', 'longnan', 'ln', 'longnan');
INSERT INTO `la_city` VALUES ('174', '临夏市', '23', 'linxia', 'linxia', 'linxia');
INSERT INTO `la_city` VALUES ('175', '林芝市', '31', 'linzhi', 'linzhi', 'linzhi');
INSERT INTO `la_city` VALUES ('176', '绵阳市', '6', 'mianyang', 'mianyang', 'mianyang');
INSERT INTO `la_city` VALUES ('177', '牡丹江市', '15', 'mudanjiang', 'mdj', 'mudanjiang');
INSERT INTO `la_city` VALUES ('178', '茂名市', '5', 'maoming', 'mm', 'maoming');
INSERT INTO `la_city` VALUES ('179', '梅州市', '5', 'meizhou', 'mz', 'meizhou');
INSERT INTO `la_city` VALUES ('180', '马鞍山市', '17', 'maanshan', 'mas', 'maanshan');
INSERT INTO `la_city` VALUES ('181', '眉山市', '6', 'meishan', 'ms', 'meishan');
INSERT INTO `la_city` VALUES ('182', '南京市', '10', 'nj', 'nj', 'nanjing');
INSERT INTO `la_city` VALUES ('183', '宁波市', '7', 'nb', 'nb', 'ningbo');
INSERT INTO `la_city` VALUES ('184', '南宁市', '18', 'nn', 'nn', 'nanning');
INSERT INTO `la_city` VALUES ('185', '南昌市', '28', 'nc', 'nc', 'nanchang');
INSERT INTO `la_city` VALUES ('186', '南通市', '10', 'nantong', 'nt', 'nantong');
INSERT INTO `la_city` VALUES ('187', '南阳市', '13', 'nanyang', 'ny', 'nanyang');
INSERT INTO `la_city` VALUES ('188', '南充市', '6', 'nanchong', 'nanchong', 'nanchong');
INSERT INTO `la_city` VALUES ('189', '内江市', '6', 'neijiang', 'scnj', 'neijiang');
INSERT INTO `la_city` VALUES ('190', '南平市', '11', 'nanping', 'np', 'nanping');
INSERT INTO `la_city` VALUES ('191', '宁德市', '11', 'ningde', 'nd', 'ningde');
INSERT INTO `la_city` VALUES ('192', '怒江市', '29', 'nujiang', 'nujiang', 'nujiang');
INSERT INTO `la_city` VALUES ('193', '那曲市', '31', 'naqu', 'nq', 'naqu');
INSERT INTO `la_city` VALUES ('194', '平顶山市', '13', 'pingdingshan', 'pds', 'pingdingshan');
INSERT INTO `la_city` VALUES ('195', '濮阳市', '13', 'puyang', 'puyang', 'puyang');
INSERT INTO `la_city` VALUES ('196', '盘锦市', '9', 'panjin', 'pj', 'panjin');
INSERT INTO `la_city` VALUES ('197', '莆田市', '11', 'putian', 'pt', 'putian');
INSERT INTO `la_city` VALUES ('198', '攀枝花市', '6', 'panzhihua', 'panzhihua', 'panzhihua');
INSERT INTO `la_city` VALUES ('199', '萍乡市', '28', 'pingxiang', 'px', 'pingxiang');
INSERT INTO `la_city` VALUES ('200', '平凉市', '23', 'pingliang', 'pl', 'pingliang');
INSERT INTO `la_city` VALUES ('201', '普洱市', '29', 'puer', 'pe', 'puer');
INSERT INTO `la_city` VALUES ('202', '青岛市', '16', 'qd', 'qd', 'qingdao');
INSERT INTO `la_city` VALUES ('203', '秦皇岛市', '12', 'qinhuangdao', 'qhd', 'qinhuangdao');
INSERT INTO `la_city` VALUES ('204', '泉州市', '11', 'quanzhou', 'qz', 'quanzhou');
INSERT INTO `la_city` VALUES ('205', '齐齐哈尔市', '15', 'qiqihaer', 'qqhr', 'qiqihaer');
INSERT INTO `la_city` VALUES ('206', '清远市', '5', 'qingyuan', 'qingyuan', 'qingyuan');
INSERT INTO `la_city` VALUES ('207', '曲靖市', '29', 'qujing', 'qj', 'qujing');
INSERT INTO `la_city` VALUES ('208', '衢州市', '7', 'quzhou', 'quzhou', 'quzhou');
INSERT INTO `la_city` VALUES ('209', '庆阳市', '23', 'qingyang', 'qingyang', 'qingyang');
INSERT INTO `la_city` VALUES ('210', '七台河市', '15', 'qitaihe', 'qth', 'qitaihe');
INSERT INTO `la_city` VALUES ('211', '钦州市', '18', 'qinzhou', 'qinzhou', 'qinzhou');
INSERT INTO `la_city` VALUES ('212', '潜江市', '26', 'qianjiang', 'qianjiang', 'qianjiang');
INSERT INTO `la_city` VALUES ('213', '黔东南市', '8', 'qiandongnan', 'qdn', 'qiandongnan');
INSERT INTO `la_city` VALUES ('214', '黔南市', '8', 'qiannan', 'qn', 'qiannan');
INSERT INTO `la_city` VALUES ('215', '黔西南市', '8', 'qianxinan', 'qxn', 'qianxinan');
INSERT INTO `la_city` VALUES ('216', '日照市', '16', 'rizhao', 'rizhao', 'rizhao');
INSERT INTO `la_city` VALUES ('217', '日喀则市', '31', 'rikaze', 'rkz', 'rikaze');
INSERT INTO `la_city` VALUES ('218', '上海市', '2', 'sh', 'sh', 'shanghai');
INSERT INTO `la_city` VALUES ('219', '深圳市', '5', 'sz', 'sz', 'shenzhen');
INSERT INTO `la_city` VALUES ('220', '沈阳市', '9', 'sy', 'sy', 'shenyang');
INSERT INTO `la_city` VALUES ('221', '石家庄市', '12', 'sjz', 'sjz', 'shijiazhuang');
INSERT INTO `la_city` VALUES ('222', '苏州市', '10', 'su', 'su', 'suzhou');
INSERT INTO `la_city` VALUES ('223', '汕头市', '5', 'shantou', 'st', 'shantou');
INSERT INTO `la_city` VALUES ('224', '商丘市', '13', 'shangqiu', 'sq', 'shangqiu');
INSERT INTO `la_city` VALUES ('225', '三亚市', '19', 'sanya', 'sanya', 'sanya');
INSERT INTO `la_city` VALUES ('226', '宿迁市', '10', 'suqian', 'suqian', 'suqian');
INSERT INTO `la_city` VALUES ('227', '绍兴市', '7', 'shaoxing', 'sx', 'shaoxing');
INSERT INTO `la_city` VALUES ('228', '十堰市', '26', 'shiyan', 'shiyan', 'shiyan');
INSERT INTO `la_city` VALUES ('229', '四平市', '14', 'siping', 'sp', 'siping');
INSERT INTO `la_city` VALUES ('230', '三门峡市', '13', 'sanmenxia', 'smx', 'sanmenxia');
INSERT INTO `la_city` VALUES ('231', '邵阳市', '27', 'shaoyang', 'shaoyang', 'shaoyang');
INSERT INTO `la_city` VALUES ('232', '上饶市', '28', 'shangrao', 'sr', 'shangrao');
INSERT INTO `la_city` VALUES ('233', '遂宁市', '6', 'suining', 'suining', 'suining');
INSERT INTO `la_city` VALUES ('234', '三明市', '11', 'sanming', 'sm', 'sanming');
INSERT INTO `la_city` VALUES ('235', '绥化市', '15', 'suihua', 'suihua', 'suihua');
INSERT INTO `la_city` VALUES ('236', '石河子市', '30', 'shihezi', 'shz', 'shihezi');
INSERT INTO `la_city` VALUES ('237', '宿州市', '17', 'ahsuzhou', 'suzhou', 'sz');
INSERT INTO `la_city` VALUES ('238', '韶关市', '5', 'shaoguan', 'sg', 'shaoguan');
INSERT INTO `la_city` VALUES ('239', '松原市', '14', 'songyuan', 'songyuan', 'songyuan');
INSERT INTO `la_city` VALUES ('240', '随州市', '26', 'suizhou', 'suizhou', 'suizhou');
INSERT INTO `la_city` VALUES ('241', '汕尾市', '5', 'shanwei', 'sw', 'shanwei');
INSERT INTO `la_city` VALUES ('242', '双鸭山市', '15', 'shuangyashan', 'sys', 'shuangyashan');
INSERT INTO `la_city` VALUES ('243', '朔州市', '21', 'shuozhou', 'shuozhou', 'shuozhou');
INSERT INTO `la_city` VALUES ('244', '石嘴山市', '22', 'shizuishan', 'szs', 'shizuishan');
INSERT INTO `la_city` VALUES ('245', '商洛市', '24', 'shangluo', 'sl', 'shangluo');
INSERT INTO `la_city` VALUES ('246', '神农架市', '26', 'shennongjia', 'snj', 'shennongjia');
INSERT INTO `la_city` VALUES ('247', '山南市', '31', 'shannan', 'sn', 'shannan');
INSERT INTO `la_city` VALUES ('248', '天津市', '3', 'tj', 'tj', 'tianjin');
INSERT INTO `la_city` VALUES ('249', '太原市', '21', 'ty', 'ty', 'taiyuan');
INSERT INTO `la_city` VALUES ('250', '唐山市', '12', 'tangshan', 'ts', 'tangshan');
INSERT INTO `la_city` VALUES ('251', '泰安市', '16', 'taian', 'ta', 'taian');
INSERT INTO `la_city` VALUES ('252', '台州市', '7', 'zjtaizhou', 'tz', 'taizhou');
INSERT INTO `la_city` VALUES ('253', '泰州市', '10', 'jstaizhou', 'taizhou', 'tz');
INSERT INTO `la_city` VALUES ('254', '铁岭市', '9', 'tieling', 'tl', 'tieling');
INSERT INTO `la_city` VALUES ('255', '通辽市', '20', 'tongliao', 'tongliao', 'tongliao');
INSERT INTO `la_city` VALUES ('256', '通化市', '14', 'tonghua', 'th', 'tonghua');
INSERT INTO `la_city` VALUES ('257', '天水市', '23', 'tianshui', 'tianshui', 'tianshui');
INSERT INTO `la_city` VALUES ('258', '铜陵市', '17', 'tongling', 'tongling', 'tongling');
INSERT INTO `la_city` VALUES ('259', '铜川市', '24', 'tongchuan', 'tc', 'tongchuan');
INSERT INTO `la_city` VALUES ('260', '铜仁市', '8', 'tongren', 'tr', 'tongren');
INSERT INTO `la_city` VALUES ('261', '天门市', '33', 'tianmen', 'tm', 'tianmen');
INSERT INTO `la_city` VALUES ('262', '塔城市', '30', 'tacheng', '', 'tacheng');
INSERT INTO `la_city` VALUES ('263', '吐鲁番市', '30', 'tulufan', 'tlf', 'tulufan');
INSERT INTO `la_city` VALUES ('264', '图木舒克市', '33', 'tumushuke', 'tmsk', 'tumushuke');
INSERT INTO `la_city` VALUES ('265', '武汉市', '26', 'wh', 'wh', 'wuhan');
INSERT INTO `la_city` VALUES ('266', '无锡市', '10', 'wx', 'wx', 'wuxi');
INSERT INTO `la_city` VALUES ('267', '乌鲁木齐市', '30', 'xj', 'xj', 'wulumuqi');
INSERT INTO `la_city` VALUES ('268', '威海市', '16', 'wei', 'weihai', 'weihai');
INSERT INTO `la_city` VALUES ('269', '潍坊市', '16', 'weifang', 'wf', 'weifang');
INSERT INTO `la_city` VALUES ('270', '温州市', '7', 'wenzhou', 'wz', 'wenzhou');
INSERT INTO `la_city` VALUES ('271', '芜湖市', '17', 'wuhu', 'wuhu', 'wuhu');
INSERT INTO `la_city` VALUES ('272', '渭南市', '24', 'weinan', 'wn', 'weinan');
INSERT INTO `la_city` VALUES ('273', '乌海市', '20', 'wuhai', 'wuhai', 'wuhai');
INSERT INTO `la_city` VALUES ('274', '梧州市', '18', 'wuzhou', 'wuzhou', 'wuzhou');
INSERT INTO `la_city` VALUES ('275', '乌兰察布市', '20', 'wulanchabu', 'wlcb', 'wulanchabu');
INSERT INTO `la_city` VALUES ('276', '武威市', '23', 'wuwei', 'wuwei', 'wuwei');
INSERT INTO `la_city` VALUES ('277', '文山市', '29', 'wenshan', 'ws', 'wenshan');
INSERT INTO `la_city` VALUES ('278', '吴忠市', '22', 'wuzhong', 'wuzhong', 'wuzhong');
INSERT INTO `la_city` VALUES ('279', '五家渠市', '33', 'wujiaqu', 'wjq', 'wujiaqu');
INSERT INTO `la_city` VALUES ('280', '五指山市', '33', 'wuzhishan', 'wzs', 'wuzhishan');
INSERT INTO `la_city` VALUES ('281', '西安市', '24', 'xa', 'xa', 'xian');
INSERT INTO `la_city` VALUES ('282', '厦门市', '11', 'xm', 'xm', 'xiamen');
INSERT INTO `la_city` VALUES ('283', '西宁市', '25', 'xn', 'xn', 'xining');
INSERT INTO `la_city` VALUES ('284', '徐州市', '10', 'xuzhou', 'xz', 'xuzhou');
INSERT INTO `la_city` VALUES ('285', '咸阳市', '24', 'xianyang', 'xianyang', 'xianyang');
INSERT INTO `la_city` VALUES ('286', '邢台市', '12', 'xingtai', 'xt', 'xingtai');
INSERT INTO `la_city` VALUES ('287', '襄阳市', '26', 'xiangyang', 'xf', 'xiangfan');
INSERT INTO `la_city` VALUES ('288', '新乡市', '13', 'xinxiang', 'xx', 'xinxiang');
INSERT INTO `la_city` VALUES ('289', '湘潭市', '27', 'xiangtan', 'xiangtan', 'xiangtan');
INSERT INTO `la_city` VALUES ('290', '许昌市', '13', 'xuchang', 'xc', 'xuchang');
INSERT INTO `la_city` VALUES ('291', '信阳市', '13', 'xinyang', 'xy', 'xinyang');
INSERT INTO `la_city` VALUES ('292', '孝感市', '26', 'xiaogan', 'xiaogan', 'xiaogan');
INSERT INTO `la_city` VALUES ('293', '忻州市', '21', 'xinzhou', 'xinzhou', 'xinzhou');
INSERT INTO `la_city` VALUES ('294', '咸宁市', '26', 'xianning', 'xianning', 'xianning');
INSERT INTO `la_city` VALUES ('295', '新余市', '28', 'xinyu', 'xinyu', 'xinyu');
INSERT INTO `la_city` VALUES ('296', '宣城市', '17', 'xuancheng', 'xuancheng', 'xuancheng');
INSERT INTO `la_city` VALUES ('297', '仙桃市', '26', 'xiantao', 'xiantao', 'xiantao');
INSERT INTO `la_city` VALUES ('298', '锡林郭勒市', '20', 'xilinguole', '', 'xilinguole');
INSERT INTO `la_city` VALUES ('299', '湘西市', '27', 'xiangxi', 'xiangxi', 'xiangxi');
INSERT INTO `la_city` VALUES ('300', '兴安市', '20', 'xingan', '', '');
INSERT INTO `la_city` VALUES ('301', '西双版纳市', '29', 'xishuangbanna', 'bn', 'xishuangbanna');
INSERT INTO `la_city` VALUES ('302', '香港市', '33', 'xianggang', 'hk', '');
INSERT INTO `la_city` VALUES ('303', '银川市', '22', 'yc', 'yinchuan', 'yinchuan');
INSERT INTO `la_city` VALUES ('304', '宜昌市', '26', 'yichang', 'yc', 'yichang');
INSERT INTO `la_city` VALUES ('305', '烟台市', '16', 'yantai', 'yt', 'yantai');
INSERT INTO `la_city` VALUES ('306', '扬州市', '10', 'yangzhou', 'yz', 'yangzhou');
INSERT INTO `la_city` VALUES ('307', '盐城市', '10', 'yancheng', 'yancheng', 'yancheng');
INSERT INTO `la_city` VALUES ('308', '营口市', '9', 'yingkou', 'yk', 'yingkou');
INSERT INTO `la_city` VALUES ('309', '岳阳市', '27', 'yueyang', 'yy', 'yueyang');
INSERT INTO `la_city` VALUES ('310', '运城市', '21', 'yuncheng', 'yuncheng', 'yuncheng');
INSERT INTO `la_city` VALUES ('311', '榆林市', '24', 'sxyulin', 'yl', 'yulin');
INSERT INTO `la_city` VALUES ('312', '宜宾市', '6', 'yibin', 'yb', 'yibin');
INSERT INTO `la_city` VALUES ('313', '阳泉市', '21', 'yangquan', 'yq', 'yangquan');
INSERT INTO `la_city` VALUES ('314', '延安市', '24', 'yanan', 'yanan', 'yanan');
INSERT INTO `la_city` VALUES ('315', '益阳市', '27', 'yiyang', 'yiyang', 'yiyang');
INSERT INTO `la_city` VALUES ('316', '永州市', '27', 'yongzhou', 'yongzhou', 'yongzhou');
INSERT INTO `la_city` VALUES ('317', '玉林市', '18', 'gxyulin', 'yulin', 'yl');
INSERT INTO `la_city` VALUES ('318', '宜春市', '28', 'jxyichun', 'yichun', 'yc');
INSERT INTO `la_city` VALUES ('319', '阳江市', '5', 'yangjiang', 'yj', 'yangjiang');
INSERT INTO `la_city` VALUES ('320', '延边市', '14', 'yanbian', 'yanbian', 'yanbian');
INSERT INTO `la_city` VALUES ('321', '玉溪市', '29', 'yuxi', 'yx', 'yuxi');
INSERT INTO `la_city` VALUES ('322', '伊犁市', '30', 'yili', 'yili', 'yili');
INSERT INTO `la_city` VALUES ('323', '云浮市', '5', 'yunfu', 'yf', 'yunfu');
INSERT INTO `la_city` VALUES ('324', '伊春市', '15', 'hljyichun', 'yich', 'yichun');
INSERT INTO `la_city` VALUES ('325', '雅安市', '6', 'yaan', 'ya', 'yaan');
INSERT INTO `la_city` VALUES ('326', '鹰潭市', '28', 'yingtan', 'yingtan', 'yingtan');
INSERT INTO `la_city` VALUES ('327', '玉树市', '25', 'yushu', 'ys', 'yushu');
INSERT INTO `la_city` VALUES ('328', '郑州市', '13', 'zz', 'zz', 'zhengzhou');
INSERT INTO `la_city` VALUES ('329', '珠海市', '5', 'zhuhai', 'zh', 'zhuhai');
INSERT INTO `la_city` VALUES ('330', '淄博市', '16', 'zibo', 'zb', 'zibo');
INSERT INTO `la_city` VALUES ('331', '中山市', '5', 'zhongshan', 'zs', 'zhongshan');
INSERT INTO `la_city` VALUES ('332', '枣庄市', '16', 'zaozhuang', 'zaozhuang', 'zaozhuang');
INSERT INTO `la_city` VALUES ('333', '张家口市', '12', 'zhangjiakou', 'zjk', 'zhangjiakou');
INSERT INTO `la_city` VALUES ('334', '株洲市', '27', 'zhuzhou', 'zhuzhou', 'zhuzhou');
INSERT INTO `la_city` VALUES ('335', '镇江市', '10', 'zhenjiang', 'zj', 'zhenjiang');
INSERT INTO `la_city` VALUES ('336', '周口市', '13', 'zhoukou', 'zk', 'zhoukou');
INSERT INTO `la_city` VALUES ('337', '湛江市', '5', 'zhanjiang', 'zhanjiang', 'zhanjiang');
INSERT INTO `la_city` VALUES ('338', '驻马店市', '13', 'zhumadian', 'zmd', 'zhumadian');
INSERT INTO `la_city` VALUES ('339', '肇庆市', '5', 'zhaoqing', 'zq', 'zhaoqing');
INSERT INTO `la_city` VALUES ('340', '自贡市', '6', 'zigong', 'zg', 'zigong');
INSERT INTO `la_city` VALUES ('341', '遵义市', '8', 'zunyi', 'zunyi', 'zunyi');
INSERT INTO `la_city` VALUES ('342', '漳州市', '11', 'zhangzhou', 'zhangzhou', 'zhangzhou');
INSERT INTO `la_city` VALUES ('343', '舟山市', '7', 'zhoushan', 'zhoushan', 'zhoushan');
INSERT INTO `la_city` VALUES ('344', '张掖市', '23', 'zhangye', 'zhangye', 'zhangye');
INSERT INTO `la_city` VALUES ('345', '资阳市', '6', 'ziyang', 'zy', 'ziyang');
INSERT INTO `la_city` VALUES ('346', '张家界市', '27', 'zhangjiajie', 'zjj', 'zhangjiajie');
INSERT INTO `la_city` VALUES ('347', '昭通市', '29', 'zhaotong', 'zt', 'zhaotong');
INSERT INTO `la_city` VALUES ('348', '中卫市', '22', 'zhongwei', 'zw', 'zhongwei');

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
  `action` varchar(50) DEFAULT NULL,
  `sortrank` int(4) NOT NULL DEFAULT '0' COMMENT '排序位置',
  `title` varchar(100) DEFAULT NULL COMMENT '标题',
  `keyword` varchar(1000) DEFAULT NULL COMMENT '关键字',
  `description` varchar(3000) DEFAULT NULL COMMENT '描述',
  `content` text,
  `template_index` varchar(50) DEFAULT NULL,
  `template_list` varchar(50) DEFAULT NULL,
  `template_body` varchar(50) DEFAULT NULL,
  `isshow` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0隐藏1显示',
  `createtime` int(10) NOT NULL,
  `updatetime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_column
-- ----------------------------
INSERT INTO `la_column` VALUES ('1', '网站首页', '0', '1', '1', null, null, 'index', '1', 'Laugh CMS 内容管理系统', '', '', '', null, null, null, '1', '1356402068', '1359689666');
INSERT INTO `la_column` VALUES ('2', '新闻资讯', '0', '2', '1', '1', null, 'index', '2', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1356405490', '1363673576');
INSERT INTO `la_column` VALUES ('3', 'IT知识', '2', '2', '1', '1', null, 'index', '1', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1356406231', '1363856604');
INSERT INTO `la_column` VALUES ('4', '网络知识', '2', '2', '1', '1', null, 'index', '2', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1356414942', '1363856617');
INSERT INTO `la_column` VALUES ('5', '前端知识', '4', '2', '1', '1', null, 'index', '1', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1359689764', '1363856760');
INSERT INTO `la_column` VALUES ('6', '产品展示', '0', '6', '1', '6', null, 'index', '3', '', '', '', '', 'Product/index.html', 'Product/list.html', 'Product/body.html', '1', '1359690256', '1359690256');
INSERT INTO `la_column` VALUES ('7', '客户案例', '0', '7', '1', '2', null, 'index', '4', '', '', '', '', null, null, null, '1', '1359690270', '1359690270');
INSERT INTO `la_column` VALUES ('8', '下载中心', '0', '8', '1', '3', null, 'index', '5', '', '', '', '', 'Download/index.html', 'Download/list.html', 'Download/body.html', '1', '1359690280', '1359690280');
INSERT INTO `la_column` VALUES ('9', '招贤纳士', '0', '9', '1', '9', null, 'Cooperate', '6', '', '', '', '', null, null, null, '1', '1359690294', '1365668528');
INSERT INTO `la_column` VALUES ('10', '关于我们', '0', '10', '1', '8', null, 'AboutUS', '7', '', '', '', '&lt;p&gt;&lt;span class=&quot;text&quot;&gt; &amp;nbsp; &amp;nbsp;LaughCMS企业网站管理系统，是一款代码完全开源免费的PHP+MYSQL系统。&lt;/span&gt;&lt;span class=&quot;text&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span class=&quot;text&quot;&gt; &amp;nbsp; &amp;nbsp;程序内置SEO优化机制，使企业网站更容易被推广。拥有企业网站常用的模块功能（企业简介模块、新闻模块、产品模块、下载模块、图片模块、招聘模块、在线留言、友情链接、会员与权限管理）。强大灵活的后台管理功能、静态页面生成功能、自定义模型功能、自制插件安装管理功能等可为企业打造出大气漂亮且具有营销力的精品网站&lt;/span&gt;&lt;br /&gt;&lt;/p&gt;', null, null, null, '1', '1359690307', '1364356336');
INSERT INTO `la_column` VALUES ('11', '联系我们', '0', '11', '1', '8', null, 'ContactUS', '8', '', '', '', '', null, null, null, '1', '1359690316', '1359690316');
INSERT INTO `la_column` VALUES ('12', 'PHP知识', '3', '2', '1', '1', null, 'index', '1', '', '', '', '', null, null, null, '1', '1364262577', '1364262577');
INSERT INTO `la_column` VALUES ('13', '数据库知识', '2', '2', '1', '1', null, 'index', '1', '', '', '', '', null, null, null, '1', '1364452588', '1364452588');
INSERT INTO `la_column` VALUES ('14', '网络产品', '6', '6', '1', '6', null, 'index', '1', '', '', '', '', 'Product/index.html', 'Product/list.html', 'Product/body.html', '1', '1364804231', '1364960571');
INSERT INTO `la_column` VALUES ('15', '电子产品', '6', '6', '1', '6', null, 'index', '1', '', '', '', '', 'Product/index.html', 'Product/list.html', 'Product/body.html', '1', '1364894217', '1364960612');

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
  `template_index` varchar(50) DEFAULT NULL COMMENT '模型主页模板',
  `template_add` varchar(50) DEFAULT NULL COMMENT '型模列表页模板',
  `template_edit` varchar(50) DEFAULT NULL COMMENT '模型内容页模板',
  `status` tinyint(1) DEFAULT '1' COMMENT '0禁用1启用',
  `createtime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_column_model
-- ----------------------------
INSERT INTO `la_column_model` VALUES ('1', '文章模型', '文章模型', '0', '0', 'article', '', 'Article', 'Article/index.html', 'Article/add.html', 'Article/edit.html', '1', null);
INSERT INTO `la_column_model` VALUES ('2', '图片模型', '图集模型', '0', '0', 'image', '', 'Image', 'Image/index.html', 'Image/add.html', 'Image/edit.html', '1', null);
INSERT INTO `la_column_model` VALUES ('3', '下载模型', '下载模型', '0', '0', 'download', '', 'Download', 'Download/index.html', 'Download/add.html', 'Download/edit.html', '1', null);
INSERT INTO `la_column_model` VALUES ('4', '专题模型', '专题模型', '0', '0', 'topic', '', 'Topic', 'Topic/index.html', 'Topic/add.html', 'Topic/edit.html', '1', '1363315175');
INSERT INTO `la_column_model` VALUES ('5', '软件模型', '', '0', '0', 'soft', '', 'Soft', null, null, null, '1', '1363315203');
INSERT INTO `la_column_model` VALUES ('6', '产品模型', '', '0', '0', 'product', '', 'Product', 'Product/index.html', 'Product/add.html', 'Product/edit.html', '1', '1363315247');
INSERT INTO `la_column_model` VALUES ('7', '分类信息模型', '', '0', '0', 'info', '', 'Info', null, null, null, '1', '1363315306');
INSERT INTO `la_column_model` VALUES ('8', '公共模型', '公共模型 关于我们、联系我们等', '0', '0', 'public', '', 'Public', null, null, null, '1', '1364969716');
INSERT INTO `la_column_model` VALUES ('9', '插件模型', '所有使用插件的栏目的模型控制器入口', '0', '0', 'plugin', '', 'Plugin', null, null, null, '1', '1365668493');

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
  `columnid` int(10) DEFAULT NULL COMMENT '栏目ID',
  `author` varchar(50) DEFAULT NULL COMMENT '作者',
  `validitytime` varchar(50) DEFAULT NULL COMMENT '有效期',
  `publishtime` int(10) NOT NULL COMMENT '发布时间',
  `updatetime` int(10) NOT NULL COMMENT '更新时间',
  `state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '文章状态 0:删除 1:正常',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_cooperate
-- ----------------------------
INSERT INTO `la_cooperate` VALUES ('1', 'PHP工程师', '10', '大专', '三年以上', '苏州', '全职', '8000-9999', '&lt;p&gt;1.熟练掌握 PHP、MySQL，对 Web 性能、安全有了解和实践经验，了解 HTML、CSS 等前端开发语言&lt;br /&gt;2.熟悉面向对象编程，至少掌握一种 PHP 框架的使用&lt;br /&gt;3.在一年内具有项目经验，开发代码在 3 万行以上&lt;br /&gt;4.熟悉 Kohana、CodeIgniter 等 MVC 框架优先&lt;br /&gt;5.有 Linux 服务器运维经验优先&lt;br /&gt;6.有 Python、Ruby、Java 编程经验优先&lt;/p&gt;', '9', 'admin', '长期有效', '1365738825', '1365752259', '1');
INSERT INTO `la_cooperate` VALUES ('2', 'PHP工程师', '10', '本科', '三年以上', '苏州', '全职', '6000-7999', '&lt;p&gt;1.熟练掌握 PHP、MySQL，对 Web 性能、安全有了解和实践经验，了解 HTML、CSS 等前端开发语言&lt;br /&gt;2.熟悉面向对象编程，至少掌握一种 PHP 框架的使用&lt;br /&gt;3.在一年内具有项目经验，开发代码在 3 万行以上&lt;br /&gt;4.熟悉 Kohana、CodeIgniter 等 MVC 框架优先&lt;br /&gt;5.有 Linux 服务器运维经验优先&lt;br /&gt;6.有 Python、Ruby、Java 编程经验优先&lt;/p&gt;', '9', 'admin', '长期有效', '1365749895', '1365750651', '1');
INSERT INTO `la_cooperate` VALUES ('3', 'PHP工程师', '10', '本科', '三年以上', '苏州', '全职', '6000-7999', '&lt;p&gt;1.熟练掌握 PHP、MySQL，对 Web 性能、安全有了解和实践经验，了解 HTML、CSS 等前端开发语言&lt;br /&gt;2.熟悉面向对象编程，至少掌握一种 PHP 框架的使用&lt;br /&gt;3.在一年内具有项目经验，开发代码在 3 万行以上&lt;br /&gt;4.熟悉 Kohana、CodeIgniter 等 MVC 框架优先&lt;br /&gt;5.有 Linux 服务器运维经验优先&lt;br /&gt;6.有 Python、Ruby、Java 编程经验优先&lt;/p&gt;', '9', 'admin', '长期有效', '1365749895', '1365750640', '1');
INSERT INTO `la_cooperate` VALUES ('4', 'UI设计师', '2', '本科', '三年以上', '苏州', '全职', '6000-7999', '&lt;p&gt;&lt;span class=&quot;content&quot;&gt;1.熟练掌握 PHP、MySQL，对 Web 性能、安全有了解和实践经验，了解 HTML、CSS 等前端开发语言&lt;br /&gt;2.熟悉面向对象编程，至少掌握一种 PHP 框架的使用&lt;br /&gt;3.在一年内具有项目经验，开发代码在 3 万行以上 &lt;br /&gt;4.熟悉 Kohana、CodeIgniter 等 MVC 框架优先&lt;br /&gt;5.有 Linux 服务器运维经验优先&lt;br /&gt;6.有 Python、Ruby、Java 编程经验优先&lt;/span&gt;&lt;/p&gt;', '9', 'admin', '长期有效', '1365751752', '1365751792', '1');

-- ----------------------------
-- Table structure for `la_flink`
-- ----------------------------
DROP TABLE IF EXISTS `la_flink`;
CREATE TABLE `la_flink` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `linkname` varchar(50) NOT NULL COMMENT '链接名称',
  `linkurl` varchar(300) NOT NULL COMMENT '链接地址',
  `catalogid` int(10) NOT NULL COMMENT '链接所属分类',
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_flink
-- ----------------------------
INSERT INTO `la_flink` VALUES ('1', '百度', 'http://www.baidu.com/', '1', '1366104064');
INSERT INTO `la_flink` VALUES ('2', '新浪微博', 'http://www.weibo.com/', '2', '1366104182');

-- ----------------------------
-- Table structure for `la_flink_catalog`
-- ----------------------------
DROP TABLE IF EXISTS `la_flink_catalog`;
CREATE TABLE `la_flink_catalog` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `catalogname` varchar(50) NOT NULL COMMENT '分类名称',
  `sort` int(10) NOT NULL DEFAULT '0' COMMENT '分类排序位置',
  `state` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1正常0已删除',
  `createtime` int(10) NOT NULL COMMENT '分类目录创建时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_flink_catalog
-- ----------------------------
INSERT INTO `la_flink_catalog` VALUES ('1', '分类一', '1', '1', '1366003664');
INSERT INTO `la_flink_catalog` VALUES ('2', '分类二', '2', '0', '1366003673');

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
INSERT INTO `la_group` VALUES ('2', '会员中心', '1332390538', '1332390538', '2', '1');
INSERT INTO `la_group` VALUES ('3', '核心内容', '1332390538', '1332390538', '3', '1');
INSERT INTO `la_group` VALUES ('4', '网站更新', '1332390538', '1332390538', '4', '1');
INSERT INTO `la_group` VALUES ('5', '系统插件', '1332390538', '1332390538', '5', '1');
INSERT INTO `la_group` VALUES ('6', '系统设置', '1353316335', '0', '0', '1');

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
  `createtime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_images
-- ----------------------------
INSERT INTO `la_images` VALUES ('1', '/Uploads/Image/201304/02/1364882233_qub9zq_7492.png', '/Uploads/Image/201304/02/thumb_1364882233_qub9zq_7492.png', '产品图片1', '', '9', '1364786738_wenxt9_5426.png', '1364882233_qub9zq_7492.png', '91534', '0', '0', '0');
INSERT INTO `la_images` VALUES ('2', '/Uploads/Image/201304/02/1364884393_6la56e_1669.png', '/Uploads/Image/201304/02/thumb_1364884393_6la56e_1669.png', '产品图片2', '', '9', '1364798467_mkuf4d_7892.png', '1364884393_6la56e_1669.png', '151105', '0', '0', '0');
INSERT INTO `la_images` VALUES ('3', '/Uploads/Image/201304/02/1364884421_fzpdzx_9668.JPG', '/Uploads/Image/201304/02/thumb_1364884421_fzpdzx_9668.JPG', '图3', '', '9', '1364799441_521vxq_2144.JPG', '1364884421_fzpdzx_9668.JPG', '79411', '0', '0', '0');
INSERT INTO `la_images` VALUES ('4', '/Uploads/Image/201304/02/1364884599_fye754_8577.png', '/Uploads/Image/201304/02/thumb_1364884599_fye754_8577.png', '图1', '', '11', '1364804860_l8bsl5_8498.png', '1364884599_fye754_8577.png', '25100', '0', '0', '0');
INSERT INTO `la_images` VALUES ('5', '/Uploads/Image/201304/02/1364884614_qub9zq_7492.png', '/Uploads/Image/201304/02/thumb_1364884614_qub9zq_7492.png', '图2', '', '11', '1364804873_t1i5pc_4672.png', '1364884614_qub9zq_7492.png', '257763', '0', '0', '0');
INSERT INTO `la_images` VALUES ('6', '/Uploads/Image/201304/02/1364884625_dxb7k2_7142.jpg', '/Uploads/Image/201304/02/thumb_1364884625_dxb7k2_7142.jpg', '图3', '', '11', '1364804885_e9klbt_932.jpg', '1364884625_dxb7k2_7142.jpg', '77270', '0', '0', '0');
INSERT INTO `la_images` VALUES ('7', '/Uploads/Image/201304/02/1364884923_r8r51t_4822.png', '/Uploads/Image/201304/02/thumb_1364884923_r8r51t_4822.png', '预览图1', '', '12', '20130116052215497.png', '1364884923_r8r51t_4822.png', '55677', '0', '0', '0');
INSERT INTO `la_images` VALUES ('8', '/Uploads/Image/201304/08/1365413191_mxqbx6_8132.jpg', '/Uploads/Image/201304/08/thumb_1365413191_mxqbx6_8132.jpg', '案例图片一', '', '0', 'detail_img1.jpg', '1365413191_mxqbx6_8132.jpg', '61293', '0', '0', '1365413191');
INSERT INTO `la_images` VALUES ('9', '/Uploads/Image/201304/08/1365413198_7mvw2a_8076.jpg', '/Uploads/Image/201304/08/thumb_1365413198_7mvw2a_8076.jpg', '案例图片一', '', '0', 'detail_img1.jpg', '1365413198_7mvw2a_8076.jpg', '61293', '0', '0', '1365413198');
INSERT INTO `la_images` VALUES ('10', '/Uploads/Image/201304/08/1365413238_ba18vv_4128.jpg', '/Uploads/Image/201304/08/thumb_1365413238_ba18vv_4128.jpg', '案例图片一', '', '15', 'detail_img1.jpg', '1365413238_ba18vv_4128.jpg', '61293', '700', '438', '1365413238');
INSERT INTO `la_images` VALUES ('11', '/Uploads/Image/201304/08/1365413254_szckqh_6029.jpg', '/Uploads/Image/201304/08/thumb_1365413254_szckqh_6029.jpg', '案例图片二', '', '15', 'detail_img2.jpg', '1365413254_szckqh_6029.jpg', '113916', '700', '438', '1365413254');
INSERT INTO `la_images` VALUES ('12', '/Uploads/Image/201304/08/1365413641_bydp7p_7088.jpg', '/Uploads/Image/201304/08/thumb_1365413641_bydp7p_7088.jpg', '案例图片一', '', '14', 'detail_img3.jpg', '1365413641_bydp7p_7088.jpg', '141070', '730', '300', '1365413641');
INSERT INTO `la_images` VALUES ('13', '/Uploads/Image/201304/09/1365474374_4s7jxa_5777.jpg', '/Uploads/Image/201304/09/thumb_1365474374_4s7jxa_5777.jpg', '案例图片二', '', '14', 'detail_img1.jpg', '1365474374_4s7jxa_5777.jpg', '61293', '700', '438', '1365474374');
INSERT INTO `la_images` VALUES ('14', '/Uploads/Image/201304/09/1365474384_lld6f7_2865.jpg', '/Uploads/Image/201304/09/thumb_1365474384_lld6f7_2865.jpg', '案例图片三', '', '14', 'detail_img2.jpg', '1365474384_lld6f7_2865.jpg', '113916', '700', '438', '1365474384');
INSERT INTO `la_images` VALUES ('15', '/Uploads/Image/201304/09/1365474406_tzcrus_885.jpg', '/Uploads/Image/201304/09/thumb_1365474406_tzcrus_885.jpg', '案例图片四', '', '14', 'detail_img2.jpg', '1365474406_tzcrus_885.jpg', '113916', '700', '438', '1365474406');
INSERT INTO `la_images` VALUES ('16', '/Uploads/Image/201304/09/1365474438_z5r3pz_3874.jpg', '/Uploads/Image/201304/09/thumb_1365474438_z5r3pz_3874.jpg', '案例图片五', '', '14', 'avatar_wang.jpg', '1365474438_z5r3pz_3874.jpg', '400072', '602', '602', '1365474438');
INSERT INTO `la_images` VALUES ('17', '/Uploads/Image/201304/09/1365474465_e4anmy_3273.jpg', '/Uploads/Image/201304/09/thumb_1365474465_e4anmy_3273.jpg', '案例图片六', '', '14', '震撼！精选立体设计壁纸.jpg', '1365474465_e4anmy_3273.jpg', '42231', '640', '480', '1365474465');
INSERT INTO `la_images` VALUES ('18', '/Uploads/Image/201304/09/1365474477_zuf1eo_2534.JPG', '/Uploads/Image/201304/09/thumb_1365474477_zuf1eo_2534.JPG', '案例图片七', '', '14', '未命名1231.JPG', '1365474477_zuf1eo_2534.JPG', '91042', '571', '338', '1365474477');
INSERT INTO `la_images` VALUES ('19', '/Uploads/Image/201304/09/1365474490_nc8o3r_168.jpg', '/Uploads/Image/201304/09/thumb_1365474490_nc8o3r_168.jpg', '案例图片八', '', '14', '大道.jpg', '1365474490_nc8o3r_168.jpg', '234678', '640', '480', '1365474490');
INSERT INTO `la_images` VALUES ('20', '/Uploads/Image/201304/09/1365487039_z77rqj_6345.jpg', '/Uploads/Image/201304/09/thumb_1365487039_z77rqj_6345.jpg', '案例图片九', '', '14', 'Winter.jpg', '1365487039_z77rqj_6345.jpg', '105542', '800', '600', '1365487039');
INSERT INTO `la_images` VALUES ('21', '/Uploads/Image/201304/09/1365487318_rkq34w_7563.jpg', '/Uploads/Image/201304/09/thumb_1365487318_rkq34w_7563.jpg', '案例图片十', '', '14', 'Sunset.jpg', '1365487318_rkq34w_7563.jpg', '71189', '800', '600', '1365487318');
INSERT INTO `la_images` VALUES ('22', '/Uploads/Image/201304/11/1365669924_2hipez_2103_detail_img2.jpg', '/Uploads/Image/201304/11/thumb_1365669924_2hipez_2103_detail_img2.jpg', '案例图片十一', '', '14', 'detail_img2.jpg', '1365669924_2hipez_2103_detail_img2.jpg', '113916', '700', '438', '1365669924');
INSERT INTO `la_images` VALUES ('23', '/Uploads/Image/201304/11/1365669932_izjy7b_2076_detail_img2.jpg', '/Uploads/Image/201304/11/thumb_1365669932_izjy7b_2076_detail_img2.jpg', '案例图片十二', '', '14', 'detail_img2.jpg', '1365669932_izjy7b_2076_detail_img2.jpg', '113916', '700', '438', '1365669932');
INSERT INTO `la_images` VALUES ('24', '/Uploads/Image/201304/11/1365669941_zmcmy6_4831_detail_img3.jpg', '/Uploads/Image/201304/11/thumb_1365669941_zmcmy6_4831_detail_img3.jpg', '案例图片十三', '', '14', 'detail_img3.jpg', '1365669941_zmcmy6_4831_detail_img3.jpg', '141070', '730', '300', '1365669941');
INSERT INTO `la_images` VALUES ('25', '/Uploads/Image/201304/11/1365669950_t6lrha_3058_detail_img1.jpg', '/Uploads/Image/201304/11/thumb_1365669950_t6lrha_3058_detail_img1.jpg', '案例图片十四', '', '14', 'detail_img1.jpg', '1365669950_t6lrha_3058_detail_img1.jpg', '61293', '700', '438', '1365669950');
INSERT INTO `la_images` VALUES ('26', '/Uploads/Image/201304/11/1365669960_nlj53u_6460_detail_img3.jpg', '/Uploads/Image/201304/11/thumb_1365669960_nlj53u_6460_detail_img3.jpg', '案例图片十五', '', '14', 'detail_img3.jpg', '1365669960_nlj53u_6460_detail_img3.jpg', '141070', '730', '300', '1365669959');
INSERT INTO `la_images` VALUES ('27', '/Uploads/Image/201304/11/1365670139_fkau11_4797_Blue hills哈.jpg', '', '案例图片十六', '', '0', 'Blue hills哈.jpg', '1365670139_fkau11_4797_Blue hills哈.jpg', '28521', '0', '0', '1365670139');
INSERT INTO `la_images` VALUES ('28', '/Uploads/Image/201304/11/1365670154_tayltz_3123_震撼！精选立体设计壁纸.jpg', '', '案例图片十六', '', '0', '震撼！精选立体设计壁纸.jpg', '1365670154_tayltz_3123_震撼！精选立体设计壁纸.jpg', '42231', '640', '480', '1365670154');
INSERT INTO `la_images` VALUES ('29', '/Uploads/Image/201304/11/1365670200_32r2k9_6143_asdsad123.jpg', '/Uploads/Image/201304/11/thumb_1365670200_32r2k9_6143_asdsad123.jpg', '案例图片十六', '', '14', 'asdsad123.jpg', '1365670200_32r2k9_6143_asdsad123.jpg', '42231', '640', '480', '1365670200');
INSERT INTO `la_images` VALUES ('30', '/Uploads/Image/201304/11/1365670224_8y1f39_9460_dadao.jpg', '/Uploads/Image/201304/11/thumb_1365670224_8y1f39_9460_dadao.jpg', '案例图片十七', '', '14', 'dadao.jpg', '1365670224_8y1f39_9460_dadao.jpg', '234678', '640', '480', '1365670224');
INSERT INTO `la_images` VALUES ('31', '/Uploads/Image/201304/11/1365670248_wzu5aq_7689_3333qqq1231.JPG', '/Uploads/Image/201304/11/thumb_1365670248_wzu5aq_7689_3333qqq1231.JPG', '案例图片十八', '', '14', '3333qqq1231.JPG', '1365670248_wzu5aq_7689_3333qqq1231.JPG', '91042', '571', '338', '1365670248');
INSERT INTO `la_images` VALUES ('32', '/Uploads/Image/201304/11/1365670265_69ph52_7034_detail_img2.jpg', '/Uploads/Image/201304/11/thumb_1365670265_69ph52_7034_detail_img2.jpg', '案例图片十九', '', '14', 'detail_img2.jpg', '1365670265_69ph52_7034_detail_img2.jpg', '113916', '700', '438', '1365670265');
INSERT INTO `la_images` VALUES ('33', '/Uploads/Image/201304/11/1365670282_xnd5ls_4777_detail_img1.jpg', '/Uploads/Image/201304/11/thumb_1365670282_xnd5ls_4777_detail_img1.jpg', '案例图片二十', '', '14', 'detail_img1.jpg', '1365670282_xnd5ls_4777_detail_img1.jpg', '61293', '700', '438', '1365670282');

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
  `pid` smallint(6) unsigned NOT NULL,
  `groupid` tinyint(3) unsigned DEFAULT '0',
  `createtime` int(10) NOT NULL,
  `updatetime` int(10) NOT NULL,
  `isshow` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=51 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_node
-- ----------------------------
INSERT INTO `la_node` VALUES ('1', '角色管理', '管理角色信息 可编辑角色权限/改变用户的角色', '', '', '0', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('2', '添加角色', '', 'Role', 'newRole', '1', '0', '0', '0', '1');
INSERT INTO `la_node` VALUES ('3', '管理角色', '', 'Role', 'manageRole', '1', '0', '0', '0', '1');
INSERT INTO `la_node` VALUES ('4', '日志管理', '', '', '', '0', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('5', '日志列表', '', 'Log', 'Index', '4', '0', '0', '0', '1');
INSERT INTO `la_node` VALUES ('6', '组管理', '', '', '', '0', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('7', '管理组', '', 'Group', 'manageGroup', '6', '0', '0', '0', '1');
INSERT INTO `la_node` VALUES ('8', '节点管理', null, '', '', '0', '1', '0', '0', '1');
INSERT INTO `la_node` VALUES ('9', '添加节点', '', 'Node', 'newNode', '8', '0', '1352711650', '0', '1');
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
INSERT INTO `la_node` VALUES ('31', '留言板', '', 'Plugin', '', '30', '0', '1358999272', '1358999272', '1');
INSERT INTO `la_node` VALUES ('32', '人才招聘', '', 'Plugin', 'CooperateIndex', '30', '0', '1359010748', '1359010748', '1');
INSERT INTO `la_node` VALUES ('33', '友情链接', '', 'Plugin', 'FlinkIndex', '30', '0', '1359010791', '1359010791', '1');
INSERT INTO `la_node` VALUES ('34', '基本设置', '', '', '', '0', '6', '1359011153', '1359011153', '1');
INSERT INTO `la_node` VALUES ('35', '系统基本参数', '', 'System', 'setInfo', '34', '0', '1359011177', '1359011177', '1');
INSERT INTO `la_node` VALUES ('36', '系统日志管理', '', 'System', 'sysLog', '34', '0', '1359011220', '1359011220', '1');
INSERT INTO `la_node` VALUES ('37', '图片水印设置', '', 'System', 'imageMark', '34', '0', '1359011294', '1359011294', '1');
INSERT INTO `la_node` VALUES ('38', '数据库管理', '', '', '', '0', '6', '1359011349', '1359011349', '1');
INSERT INTO `la_node` VALUES ('39', '数据库备份', '', 'DataBase', 'backUp', '38', '0', '1359011410', '1359011410', '1');
INSERT INTO `la_node` VALUES ('40', '数据库还原', '', 'DataBase', 'restore', '38', '0', '1359015999', '1359015999', '1');
INSERT INTO `la_node` VALUES ('41', 'SQL命令行工具', '', 'DataBase', 'SQLClient', '38', '0', '1359016018', '1359016018', '1');
INSERT INTO `la_node` VALUES ('42', '广告管理', '', '', '', '0', '5', '1364263938', '1364263938', '1');
INSERT INTO `la_node` VALUES ('43', '顶部广告', '', 'Advertise', 'TopAd', '42', '0', '1364263985', '1364263985', '1');
INSERT INTO `la_node` VALUES ('44', '首页中部banner', '', 'Advertise', 'HomeCenterAd', '42', '0', '1364264199', '1364264199', '1');
INSERT INTO `la_node` VALUES ('45', '图片管理', '', '', '', '0', '3', '1364265992', '1364265992', '1');
INSERT INTO `la_node` VALUES ('46', '首页轮播图片', '', 'Image', 'HomeScrollImage', '45', '0', '1364266173', '1364266173', '1');
INSERT INTO `la_node` VALUES ('47', '下载管理', '', 'Download', 'index', '20', '0', '1365562641', '1365562641', '1');
INSERT INTO `la_node` VALUES ('48', '文件管理器', '', 'Plugin', 'fileManage', '30', '0', '1365562785', '1365562785', '1');
INSERT INTO `la_node` VALUES ('49', '专题管理', '', 'Topic', 'index', '20', '0', '1365562964', '1365562964', '1');
INSERT INTO `la_node` VALUES ('50', '软件管理', '', 'Soft', 'index', '20', '0', '1365563043', '1365563043', '1');

-- ----------------------------
-- Table structure for `la_product`
-- ----------------------------
DROP TABLE IF EXISTS `la_product`;
CREATE TABLE `la_product` (
  `id` int(10) NOT NULL AUTO_INCREMENT COMMENT '产品id',
  `archiveid` int(10) DEFAULT NULL,
  `model` varchar(100) DEFAULT NULL,
  `brand` varchar(100) DEFAULT NULL,
  `color` varchar(100) DEFAULT NULL,
  `material` varchar(100) DEFAULT NULL,
  `size` varchar(100) DEFAULT NULL,
  `price` varchar(100) DEFAULT NULL,
  `total` varchar(50) DEFAULT NULL,
  `instruction` mediumtext,
  `updatetime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_product
-- ----------------------------
INSERT INTO `la_product` VALUES ('1', '9', 'ASDWCVDFG', 'PHP', '黑色', '123', '1', '2', '3', '&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;web站点默认80为服务端口，关于它的各种安全问题不断的发布出来，这些漏洞中一些甚至允许攻击者获得系统管理员的权限进入站点内部，以下是Zenomorph对一些80端口攻击方式的痕迹的研究，和告诉你怎样从日志记录中发现问题。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;&lt;strong style=&quot;text-align:center;&quot;&gt;详细描述&lt;/strong&gt;&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;下面部分通过一些列子，展示对web服务器和其上的应用程序普遍的攻击，和其留下的痕迹，这些列子仅仅是代表了主要的攻击方式，并没有列出所有的攻击形式，这部分将详细描述每种攻击的作用，和其怎样利用这些漏洞进行攻击。&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;（1）&rdquo;.&rdquo; &ldquo;..&rdquo; 和 &ldquo;&hellip;&rdquo; 请求&lt;/p&gt;&lt;p style=&quot;margin:10px 0px;padding:0px;color:#333333;background-color:#f8f8f8;text-indent:28px;font-family:宋体;font-size:14px;line-height:28px;&quot;&gt;这些攻击痕迹是非常普遍的用于web应用程序和web服务器，它用于允许攻击者或者蠕虫病毒程序改变web服务器的路径，获得访问非公开的区域。大多数的CGI程序漏洞含有这些&rdquo;..&rdquo;请求。&lt;/p&gt;', '1364884478');
INSERT INTO `la_product` VALUES ('2', '11', '1234', '222', '333', '', '123', '', '', '&lt;p&gt;1. RedNotebook&lt;/p&gt;&lt;p&gt;　　RedNotebook 是一款不错的可以运行在Linux环境桌面日记本，不论是拿来写日记，还是写些简单的每日计划，都非常适用。&lt;/p&gt;&lt;p&gt;　　界面还是很简洁的。 右边的边栏是个单独的区域，可以在里面建立分类的文本，非常适合来记录计划、灵感，或者今日大事&lt;/p&gt;&lt;p&gt;2. Lifeograph&lt;/p&gt;&lt;p&gt;　　Lifeograph 是一个开源的离线和私人的日志和记事应用软件。提供作为一个日记应用的所有标准工具。&lt;/p&gt;&lt;p&gt;　　功能：&lt;/p&gt;&lt;p&gt;　　支持加密和非加密日记&lt;/p&gt;&lt;p&gt;　　长时间未使用自动退出登录&lt;/p&gt;&lt;p&gt;　　自动格式化条目标题和子标题&lt;/p&gt;&lt;p&gt;　　类似 Wiki 风格的富文本格式化 (*bold*, _italic_, =strikeout=, etc&hellip;)&lt;/p&gt;&lt;p&gt;　　基本的搜索、过滤和替换文本功能&lt;/p&gt;&lt;p&gt;　　编辑器支持主题&lt;/p&gt;&lt;p&gt;　　可收藏日记&lt;/p&gt;&lt;p&gt;　　支持标签&lt;/p&gt;&lt;p&gt;　　拼写检查&lt;/p&gt;&lt;p&gt;　　条目之间的链接&lt;/p&gt;&lt;p&gt;　　支持多种 URI 格式(http://, file://, mailto://, etc&hellip;)&lt;/p&gt;&lt;p&gt;　　自动备份&lt;/p&gt;&lt;p&gt;　　打印&lt;/p&gt;&lt;p&gt;　　基本统计图表&lt;/p&gt;&lt;p&gt;　　图像缩略图&lt;/p&gt;&lt;p&gt;3. Kontact&lt;/p&gt;&lt;p&gt;　　Kontact 是KDE的个人信息管理和套装软件。提供日历、通讯簿、笔记、待办事项、新闻和电子邮件的功能。使用KPart来嵌入各种应用程式(KMail、KAddressBook、Akregator等)放入到容器应用程序。&lt;/p&gt;&lt;p&gt;4. ThotKeeper&lt;/p&gt;&lt;p&gt;　　ThotKeeper 是一个使用 Python 编写的跨平台的个人日记管理程序。&lt;/p&gt;&lt;p&gt;　　功能：&lt;/p&gt;&lt;p&gt;　　跨平台支持&lt;/p&gt;&lt;p&gt;　　简单易于浏览的接口&lt;/p&gt;&lt;p&gt;　　XML 存储格式&lt;/p&gt;&lt;p&gt;　　支持每天多篇日记&lt;/p&gt;&lt;p&gt;　　支持不同的日记作者&lt;/p&gt;&lt;p&gt;　　层次化标签&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', '1364884636');
INSERT INTO `la_product` VALUES ('3', '12', 'VIM', '开源软件', '黑色', '', '', '', '1', '&lt;p&gt;&lt;span style=&quot;font-family:&amp;#39;comic sans ms&amp;#39;, cursive;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;Vim是一个类似于Vi的文本编辑器，不过在Vi的基础上增加了很多新的特性，Vim普遍被推崇为类Vi编辑器中最好的一个，事实上真正的劲敌来自Emacs的不同变体。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span style=&quot;font-family:&amp;#39;comic sans ms&amp;#39;, cursive;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;1999 年Emacs被选为Linuxworld文本编辑分类的优胜者，Vim屈居第二。但在2000年2月Vim赢得了Slashdot Beanie的最佳开放源代码文本编辑器大奖，又将Emacs推至二线， 总的来看， Vim和Emacs同样都是非常优秀的文本编辑器。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', '1364884946');

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
INSERT INTO `la_scrollimage` VALUES ('1', '/Uploads/ScrollImage/1364279943_qg83i3_3808.jpg', '剑侠情缘叁明教', '#', '1', '0');
INSERT INTO `la_scrollimage` VALUES ('2', '/Uploads/ScrollImage/1364280038_2l6n4e_8019.jpg', '绿色屏保', '#', '1', '0');
INSERT INTO `la_scrollimage` VALUES ('3', '/Uploads/ScrollImage/1364280067_duvmp8_5013.jpg', '豪车', '#', '1', '0');

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
  `clicknum` int(10) NOT NULL DEFAULT '0',
  `commentnum` int(10) NOT NULL DEFAULT '0',
  `publishtime` int(10) NOT NULL DEFAULT '0',
  `updatetime` int(10) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_singlepage
-- ----------------------------
INSERT INTO `la_singlepage` VALUES ('1', '关于我们页面123', '', 'admin', null, '关于我们页面123', '', '关于我们页面123', '/a/index1.html', '/SinglePage/singlepage.html', '&lt;p&gt;关于我们页面123&lt;/p&gt;', '1', '1', '0', '0', '1364975265', '1364979339');
INSERT INTO `la_singlepage` VALUES ('2', '关于我们页面', '', 'admin', null, '关于我们页面', '', '关于我们页面', '/a/index1.html', '/SinglePage/singlepage.html', '&lt;p&gt;关于我们页面&lt;/p&gt;', '1', '1', '0', '0', '1364975265', '1364979252');
INSERT INTO `la_singlepage` VALUES ('3', '关于我们页面1', '', 'admin', null, '关于我们页面', '', '关于我们页面', '/a/index1.html', '/SinglePage/singlepage.html', '&lt;p&gt;关于我们页面123&lt;/p&gt;', '0', '1', '0', '0', '1364975265', '1364979268');
INSERT INTO `la_singlepage` VALUES ('4', '关于我们页面', '', 'admin', null, '关于我们页面', '', '关于我们页面', '/a/index1.html', '/SinglePage/singlepage.html', '&lt;p&gt;关于我们页面&lt;/p&gt;', '1', '1', '0', '0', '1364975265', '1364979277');

-- ----------------------------
-- Table structure for `la_soft`
-- ----------------------------
DROP TABLE IF EXISTS `la_soft`;
CREATE TABLE `la_soft` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `archiveid` int(10) NOT NULL,
  `filetype` varchar(50) DEFAULT NULL COMMENT '软件类型',
  `authorization` varchar(50) DEFAULT NULL COMMENT '授权方式',
  `language` varchar(50) DEFAULT NULL COMMENT '界面语言',
  `filesize` int(10) DEFAULT '0',
  `fileext` varchar(50) DEFAULT NULL COMMENT '文件类型',
  `environment` varchar(50) DEFAULT NULL COMMENT '运行环境',
  `officialsite` varchar(50) DEFAULT NULL COMMENT '官方网站',
  `createtime` int(10) DEFAULT NULL,
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
  `tagname` varchar(10) NOT NULL,
  `createtime` int(20) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `tag` (`tagname`)
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
