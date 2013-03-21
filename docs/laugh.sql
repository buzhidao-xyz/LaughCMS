/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : laugh

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2013-03-21 17:24:57
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
INSERT INTO `la_admin` VALUES ('1', 'admin', '206423eb45af33c046db62575e2522b2', 'gmk4r2', '1323910052', '1', '206423eb45af33c046db62575e2522b2', '1363591844', '2130706433', '119', '1');
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
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_article
-- ----------------------------
INSERT INTO `la_article` VALUES ('1', '这是一篇测试文章', 'admin', '2', null, '测试,文章', '', '', '', '', '1', '1', '1352', '0', '1357699990', '1363856577');
INSERT INTO `la_article` VALUES ('2', '第二篇测试文章', 'admin', '2', null, '文章', '', '', '', '', '1', '1', '233', '0', '1357799990', '1357701202');
INSERT INTO `la_article` VALUES ('3', '企业用网站进行网络宣传的优势', 'admin', '2', null, '网站,宣传', '', '', '', '传统媒体是二维的，而网络宣传则是多维的，它能将文字、图像和声音有机的组合在一起，传递多感官的信息，让顾客如身临其境般感受商品或服务', '1', '1', '132', '0', '1363854365', '1363854382');
INSERT INTO `la_article` VALUES ('4', 'MongoDB:下一代MySQL？', 'admin', '3', null, '', '', '', '', '', '1', '1', '0', '0', '1363856271', '1363856783');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_article_index
-- ----------------------------
INSERT INTO `la_article_index` VALUES ('1', '1', '&lt;p&gt;&lt;br /&gt;&lt;img src=&quot;/Uploads/Image/201212/25/1356405476_fzagmz_6513.jpg&quot; /&gt;&lt;/p&gt;&lt;p&gt;测试文章&lt;br /&gt;&lt;/p&gt;', '1363856577');
INSERT INTO `la_article_index` VALUES ('2', '2', '&lt;p&gt;开篇 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　确认框，顾名思义，就是对用户的关键行为进行确认。比如在Windows操作系统中，删除某个文件的时候，都会询问&ldquo;确实要把此文件放入回收站吗?&rdquo;，用户可以选择&ldquo;是&rdquo;或&ldquo;否&rdquo;。 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　大家对于确认框的感觉大抵如此，觉得非常多余，打断了我的操作。这就像我着急上厕所，却被告知要先收费一样让人不爽。不能否认，确认框是一种打断，有时甚至是打扰。 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　所以这里要把握住一个原则：能不用确认框就尽量不要用。除非用户的操作具有很大的风险，一定需要他来确认一下。 &lt;/p&gt;&lt;p&gt;　　&lt;strong&gt;确认在左，取消在右?&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　根据windows多年培养的用户习惯，大家都已经默认一个原则，就是确认在左，取消在右。但是，这样做是否真的合理呢?我们今天就来探讨一下这个问题。 &lt;span style=&quot;color:#ffffff;&quot;&gt;一些事&lt;/span&gt;&lt;/p&gt;&lt;p&gt;　　如果不是误操作，相信用户做事情前都是经过了一定思考。所以当弹出确认框的时候，我们猜测大部分用户都会去选择&ldquo;确认&rdquo;/&rdquo;是&rdquo;，继续之前的操作。之后本文的探讨，都讲建立在这样一种假设的基础上，即用户是想去选择&ldquo;确认&rdquo;/&rdquo;是&rdquo;。 &lt;/p&gt;&lt;p&gt;　　&lt;strong&gt;以视觉流的角度分析&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　如果将&ldquo;确认&rdquo;放在左边，&ldquo;取消&rdquo;放在右边。 &lt;/p&gt;&lt;p&gt; 　　我们相信大部分用户在决定采取哪一个操作之前，都会把所有可以选择的操作都看一遍，以免做出错误的操作(当然不排除会有专家级用户 选择只看自己想进行的操作)。根据从左到右的阅读习惯，用户会首先看到左侧的&ldquo;确认&rdquo;，然后看一下在它旁边的&ldquo;取消&rdquo;，了解到所有可以进行的操作后，再回到&ldquo;确认&rdquo;按钮上，最后点击。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', '1357701202');
INSERT INTO `la_article_index` VALUES ('3', '3', '&lt;div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传是多维宣传 &lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　传统媒体是二维的，而网络宣传则是多维的，它能将文字、图像和声音有机的组合在一起，传递多感官的信息，让顾客如身临其境般感受商品或服务。使消费者能亲身体验产品、服务与品牌。这种图、文、声、像相结合的宣传形式，增强了网络宣传的实效。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传拥有最有活力的消费群体&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　互联网用户70.54%集中在经济较为发达地区，64%家庭人均月收入高于1000元，85.8%年龄在18岁到35岁之间，83%受过大学以上教育。因此，网络宣传的目标群体是目前社会上层次最高、收入最高、消费能力最高的最具活力的消费群体。这一群体的消费总额往往大于其他消费层次之和。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传制作成本低，速度快，更改灵活&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　网络宣传制作周期短，即使在较短的周期进行投放，也可以根据客户的需求很快完成制作，而传统宣传制作成本高，投放周期固定。另外，在传统媒体上做宣传发布后很难更改即使可以改动往往也须付出很大的经济代价。而在互联网上做宣传能够按照客户需要及时变更宣传内容。这样，经营决策的变化就能及时实施和推广。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传具有交互性和纵深性&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　交互性强是互联网络媒体的最大的优势，它不同于传统媒体的信息单向传播，而是信息互动传播。通过链接，用户只需简单地点击鼠标，就可以从厂商的相关站点中得到更多、更详尽的信息。另外，用户可以通过网络直接填写并提交在线表单信息，厂商可以随时得到宝贵的用户反馈信息，进一步减少了用户和宣传客户之间的距离。同时，网络宣传可以提供进一步的产品查询需求。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传能进行完善的统计&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　&amp;quot;无法衡量的东西就无法管理。&amp;quot;网络宣传通过及时和精确的统计机制，使用户能够直接对信息的发布进行在线监控。而传统的信息发布形式只能通过并不精确的收视率、发行量等来统计投放的受众数量。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传可以跟踪和衡量宣传的效果&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　用户能通过Internet即时衡量宣传的效果。通过监视宣传的浏览量、点击率等指标，用户可以统计出多少人看到了发布的信息，其中有多少人对发布的信息感兴趣进而进一步了解了信息的详细信息。因此，较之其他任何宣传，网络宣传使用户能够更好地跟踪受众的反应，及时了解用户和潜在用户的情况。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传的投放更具有针对性&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;　　通过提供众多的免费服务，网站一般都能建立完整的用户数据库，包括用户的地域分布、年龄、性别、收入、职业、婚姻状况、爱好等。这些资料可帮助用户分析市场与受众，根据信息发布目标受众的特点，有针对性地进行信息发布，并根据用户特点作定点投放和跟踪分析，对投放效果作出客观准确的评价。&lt;/div&gt;&lt;div&gt;&lt;p&gt;另外，网络宣传还可以提供有针对性的内容环境。不同的网站或者是同一网站不同的频道所提供的服务是不同质且具有很强的类分别的，这就为密切迎合用户的兴趣提供了可能。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传的受众关注度高&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　据资料显示，电视并不能集中人的注意力，电视观众40%的人同时在阅读，21%的人同时在做家务，13%的人在吃喝，12%的人在玩赏它物，10%在烹饪，9%在写作，8%在打电话。而网上用户55%在使用计算机时不做任何它事，只有6%同时在打电话，只有5%在吃喝，只有4%在写作。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传缩短了媒体投放的进程&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　用户在传统媒体上进行市场推广一般要经过三个阶段：市场开发期、市场巩固期和市场维持期。在这三个阶段中，厂商要首先获取注意力，创立品牌知名度；在消费者获得品牌的初步信息后，推广更为详细的产品信息。然后是建立和消费者之间较为牢固的联系，以建立品牌忠诚。而互联网将这三个阶段合并在一次信息发布中实现：消费者看到网络宣传，点击后获得详细信息，并填写用户资料或直接参与用户的市场活动甚至直接在网上实施购买行为。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;strong&gt;网络宣传传播范围广、不受时空限制&lt;/strong&gt;&lt;/span&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　通过国际互联网络，网络宣传可以将信息24小时不间断地传播到世界的每一个角落。只要具备上网条件，任何人，在任何地点都可以阅读。这是传统媒体无法达到的。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传具有可重复性和可检索性&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　网络宣传可以将文字、声音、画面完美地结合之后供用户主动检索，重复观看。而与之相比电视宣传却是让用户被动地接受宣传内容。如果错过宣传时间，就不能再得到发布信息。另外，显而易见，较之网络宣传的检索平面宣传的检索要费时、费事的多。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传具有价格优势&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;　　从价格方面考虑，与报纸杂志或电视宣传相比，目前网络宣传费用还是较为低廉的。获得同等的宣传效应，网络宣传的有效千人成本远远低于传统宣传媒体。一个宣传主页一年的费用大致为几千元人民币，而且主页内容可以随企业经营决策的变更随时改变，这是传统宣传媒体不可想像的。网络宣传将成为企业市场推广必不可少的高效途径。&lt;/div&gt;&lt;/div&gt;', '1363854382');
INSERT INTO `la_article_index` VALUES ('4', '4', '&lt;p&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;MongoDB的特性&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;简单的查询语句，没有Join操作&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;文档型存储，其数据是用二进制的Json格式Bson存储的。其数据就像Ruby的hashes，或者Python的字典，或者PHP的数组&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;Sharding，MongoDB提供auto-sharding实现数据的扩展性&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;GridFS，MongoDB的提供的文件存储API&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;数组索引，你可以对文档中的某个数组属性建立索引&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MapReduce，可以用于进行复杂的统计和并行计算&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;高性能，通过使用mmap和定时fsync的方法，避免了频繁IO，使其性能更高&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;MongoDB的优点&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;高性能，速度非常快（如果你的内存足够的话）&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;没有固定的表结构，不用为了修改表结构而进行数据迁移&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;查询语言简单，容易上手&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;使用Sharding实现水平扩展&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;部署方便&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;使用MongoDB，你得记住以下几点：&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你有大磁盘空间&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你的内存也足够大于放下你的热数据&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你是部署在64位系统上的（32位有2G的限制，试用还可以）&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你的系统是little-endian的&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你有多台机器（并不专注于单机可靠性）&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你希望用安全换性能，同时允许你用性能换安全&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;MongoDB在下面领域不太擅长&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;不太稳定，特别是auto-sharding目前还有很多问题&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;不支持SQL，这意味着你很多通过SQL接口的工具不再适用&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;持久化，MongoDB单机可靠性不太好，宕机可能丢失一段时间的数据&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;相关文档比较少，新功能都有这个问题&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;相关人才比较难找，这也是新功能的问题之一&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;/p&gt;', '1363856783');

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
  `isshow` tinyint(1) NOT NULL DEFAULT '1' COMMENT '0隐藏1显示',
  `createtime` int(10) NOT NULL,
  `updatetime` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_column
-- ----------------------------
INSERT INTO `la_column` VALUES ('1', '网站首页', '0', '0', '1', null, null, 'index', '1', 'Laugh CMS 内容管理系统', '', '', '', '1', '1356402068', '1359689666');
INSERT INTO `la_column` VALUES ('2', '新闻资讯', '0', '0', '1', '1', null, 'index', '2', '', '', '', '', '1', '1356405490', '1363673576');
INSERT INTO `la_column` VALUES ('3', 'IT知识', '2', '2', '1', '1', null, 'index', '1', '', '', '', '', '1', '1356406231', '1363856604');
INSERT INTO `la_column` VALUES ('4', '网络知识', '2', '2', '1', '1', null, 'index', '2', '', '', '', '', '1', '1356414942', '1363856617');
INSERT INTO `la_column` VALUES ('5', '前端知识', '4', '2', '1', '1', null, 'index', '1', '', '', '', '', '1', '1359689764', '1363856760');
INSERT INTO `la_column` VALUES ('6', '产品展示', '0', '0', '1', '6', null, 'index', '3', '', '', '', '', '1', '1359690256', '1359690256');
INSERT INTO `la_column` VALUES ('7', '客户案例', '0', '0', '1', '2', null, 'index', '4', '', '', '', '', '1', '1359690270', '1359690270');
INSERT INTO `la_column` VALUES ('8', '下载中心', '0', '0', '1', '3', null, 'index', '5', '', '', '', '', '1', '1359690280', '1359690280');
INSERT INTO `la_column` VALUES ('9', '招贤纳士', '0', '0', '1', '8', null, 'index', '6', '', '', '', '', '1', '1359690294', '1359690294');
INSERT INTO `la_column` VALUES ('10', '关于我们', '0', '0', '1', '9', null, 'AboutUS', '7', '', '', '', '', '1', '1359690307', '1359690307');
INSERT INTO `la_column` VALUES ('11', '联系我们', '0', '0', '1', '9', null, 'ContactUS', '8', '', '', '', '', '1', '1359690316', '1359690316');

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
  `status` tinyint(1) DEFAULT '1' COMMENT '0禁用1启用',
  `createtime` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_column_model
-- ----------------------------
INSERT INTO `la_column_model` VALUES ('1', '文章模型', '文章模型', '0', '0', 'article', '', 'Article', '1', null);
INSERT INTO `la_column_model` VALUES ('2', '图片模型', '图集模型', '0', '0', 'image', '', 'Image', '1', null);
INSERT INTO `la_column_model` VALUES ('3', '下载模型', '下载模型', '0', '0', 'download', '', 'Download', '1', null);
INSERT INTO `la_column_model` VALUES ('4', '专题模型', '专题模型', '0', '0', 'spec', '', 'Special', '1', '1363315175');
INSERT INTO `la_column_model` VALUES ('5', '软件模型', '', '0', '0', 'soft', '', 'Soft', '1', '1363315203');
INSERT INTO `la_column_model` VALUES ('6', '产品模型', '', '0', '0', 'product', '', 'Product', '1', '1363315247');
INSERT INTO `la_column_model` VALUES ('7', '分类信息模型', '', '0', '0', 'info', '', 'Info', '1', '1363315306');
INSERT INTO `la_column_model` VALUES ('8', '人才招聘模型', '', '0', '0', 'cooperate', '', 'Cooperate', '1', '1363597871');
INSERT INTO `la_column_model` VALUES ('9', '公共模型', '', '0', '0', 'public', '', 'Public', '1', '1363598752');

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
INSERT INTO `la_group` VALUES ('2', '会员中心', '1332390538', '1332390538', '2', '1');
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
  `pid` smallint(6) unsigned NOT NULL,
  `groupid` tinyint(3) unsigned DEFAULT '0',
  `createtime` int(10) NOT NULL,
  `updatetime` int(10) NOT NULL,
  `isshow` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `pid` (`pid`)
) ENGINE=MyISAM AUTO_INCREMENT=42 DEFAULT CHARSET=utf8;

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
INSERT INTO `la_node` VALUES ('20', '文档管理', '', '', '', '0', '3', '1353316415', '0', '1');
INSERT INTO `la_node` VALUES ('21', '发布新文档', '', 'Article', 'newArticle', '20', '0', '1353316474', '0', '1');
INSERT INTO `la_node` VALUES ('22', '文档列表', '', 'Article', 'index', '20', '0', '1353316554', '0', '1');
INSERT INTO `la_node` VALUES ('23', '文档回收站', '', 'Article', 'recover', '20', '0', '1353316597', '0', '1');
INSERT INTO `la_node` VALUES ('24', '模型管理', '', '', '', '0', '3', '1353316622', '0', '1');
INSERT INTO `la_node` VALUES ('25', '单页模型', '', 'CTModel', 'singlePage', '24', '0', '1353316736', '0', '1');
INSERT INTO `la_node` VALUES ('26', '内容模型', '', 'CTModel', 'ColumnModel', '24', '0', '1355898117', '1355898117', '1');
INSERT INTO `la_node` VALUES ('27', '自动更新', '', '', '', '0', '4', '1356507108', '1356507108', '1');
INSERT INTO `la_node` VALUES ('28', '一键更新网站', '', 'Cache', 'updateAll', '27', '0', '1357722182', '1357722182', '1');
INSERT INTO `la_node` VALUES ('29', '更新系统缓存', '', 'Cache', 'systemCache', '27', '0', '1358997259', '1358997259', '1');
INSERT INTO `la_node` VALUES ('30', '系统插件', '', '', '', '0', '5', '1358999125', '1358999125', '1');
INSERT INTO `la_node` VALUES ('31', '留言板', '', 'Plugin', '', '30', '0', '1358999272', '1358999272', '1');
INSERT INTO `la_node` VALUES ('32', '友情链接', '', 'Plugin', 'flinkManage', '30', '0', '1359010748', '1359010748', '1');
INSERT INTO `la_node` VALUES ('33', '文件管理器', '', 'Plugin', 'fileManage', '30', '0', '1359010791', '1359010791', '1');
INSERT INTO `la_node` VALUES ('34', '基本设置', '', '', '', '0', '6', '1359011153', '1359011153', '1');
INSERT INTO `la_node` VALUES ('35', '系统基本参数', '', 'System', 'setInfo', '34', '0', '1359011177', '1359011177', '1');
INSERT INTO `la_node` VALUES ('36', '系统日志管理', '', 'System', 'sysLog', '34', '0', '1359011220', '1359011220', '1');
INSERT INTO `la_node` VALUES ('37', '图片水印设置', '', 'System', 'imageMark', '34', '0', '1359011294', '1359011294', '1');
INSERT INTO `la_node` VALUES ('38', '数据库管理', '', '', '', '0', '6', '1359011349', '1359011349', '1');
INSERT INTO `la_node` VALUES ('39', '数据库备份', '', 'DataBase', 'backUp', '38', '0', '1359011410', '1359011410', '1');
INSERT INTO `la_node` VALUES ('40', '数据库还原', '', 'DataBase', 'restore', '38', '0', '1359015999', '1359015999', '1');
INSERT INTO `la_node` VALUES ('41', 'SQL命令行工具', '', 'DataBase', 'SQLClient', '38', '0', '1359016018', '1359016018', '1');

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
