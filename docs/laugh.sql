/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : laugh

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2013-04-15 17:30:42
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
INSERT INTO `la_admin` VALUES ('1', 'admin', '206423eb45af33c046db62575e2522b2', 'gmk4r2', '1323910052', '1', '206423eb45af33c046db62575e2522b2', '1365991799', '2130706433', '127', '1');
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
INSERT INTO `la_archive` VALUES ('4', 'MongoDB:下一代MySQL？', 'admin', '3', null, '', '', '', '', '', '1', '1', '0', '0', '1363856271', '1363856783');
INSERT INTO `la_archive` VALUES ('5', '页面(PAGE)标记(TAGS)', 'admin', '5', null, '', '', '', '', '', '1', '1', '0', '0', '1364196108', '1364197889');
INSERT INTO `la_archive` VALUES ('6', 'PHP基本点知识', 'admin', '4', null, '', '', '', '', '', '1', '1', '0', '0', '1364201027', '1364201480');
INSERT INTO `la_archive` VALUES ('7', 'PHP实现异步操作', 'admin', '12', null, '', '', '', '', '', '1', '1', '0', '0', '1364262615', '1364262717');
INSERT INTO `la_archive` VALUES ('8', 'PHP单例模式经典讲解', 'admin', '3', null, 'PHP,单利模式', '', '', '', '', '1', '1', '0', '0', '1364537100', '1364537721');
INSERT INTO `la_archive` VALUES ('9', 'Web服务攻击反侦查痕迹检测', 'admin', '15', '/Uploads/Image/201304/02/1364884203_zxvkaj_4664.png', '', '', 'Web服务攻击反侦查痕迹检测', '', '', '1', '1', '0', '0', '1364884203', '1364884478');
INSERT INTO `la_archive` VALUES ('10', 'Web服务攻击反侦查痕迹检测', 'admin', '12', null, '', '', 'Web服务攻击反侦查痕迹检测', '', '', '1', '1', '0', '0', '1364796550', '1364799883');
INSERT INTO `la_archive` VALUES ('11', '4 款 Linux 下开源的个人日记管理软件', 'admin', '15', '/Uploads/Image/201304/02/1364884636_tpajd4_786.png', '', '', '4 款 Linux 下开源的个人日记管理软件', '', '4 款 Linux 下开源的个人日记管理软件', '1', '1', '0', '0', '1364804934', '1364884636');
INSERT INTO `la_archive` VALUES ('12', 'Vim文本编辑器 v7.3 正式版', 'admin', '14', '/Uploads/Image/201304/02/1364884946_37uz4d_4967.png', '', '', 'Vim文本编辑器 v7.3 正式版', '', 'Vim文本编辑器 v7.3 正式版', '1', '1', '0', '0', '1364805949', '1364884946');
INSERT INTO `la_archive` VALUES ('13', 'DNS污染【备忘】', 'admin', '4', null, '', '', 'DNS污染【备忘】', '', 'DNS污染【备忘】', '1', '1', '0', '0', '1364885413', '1364885467');
INSERT INTO `la_archive` VALUES ('14', '客户案例一', 'admin', '7', '/Uploads/Image/201304/08/1365413072_9nqiqs_5725.jpeg', '', '', '客户案例一', '客户案例一', '客户案例一', '1', '1', '0', '0', '1365670157', '1365670284');
INSERT INTO `la_archive` VALUES ('15', '客户案例二', 'admin', '7', '/Uploads/Image/201304/08/1365414070_zo95z4_7377.jpg', '', '', '客户案例二', '客户案例二', '客户案例二', '1', '1', '0', '0', '1365413256', '1365414070');
INSERT INTO `la_archive` VALUES ('16', 'LaughCMS', 'admin', '8', null, '', '', '', '', '', '1', '1', '0', '0', '1365646227', '1365646325');
INSERT INTO `la_archive` VALUES ('17', 'SCWS中文分词软件', 'admin', '8', null, '', '', '', '', '', '1', '1', '0', '0', '1365668840', '1365669678');
INSERT INTO `la_archive` VALUES ('18', 'VI命令大全', 'admin', '4', '/Uploads/Image/201304/12/1365748740_8oo39v_3510_vi_tutorial.png', 'VI', '', '', '', '', '1', '1', '0', '0', '1365748679', '1365748740');

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
