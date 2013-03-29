/*
Navicat MySQL Data Transfer

Source Server         : root
Source Server Version : 50516
Source Host           : localhost:3306
Source Database       : laugh

Target Server Type    : MYSQL
Target Server Version : 50516
File Encoding         : 65001

Date: 2013-03-29 17:38:56
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
INSERT INTO `la_admin` VALUES ('1', 'admin', '206423eb45af33c046db62575e2522b2', 'gmk4r2', '1323910052', '1', '206423eb45af33c046db62575e2522b2', '1364364355', '2130706433', '127', '1');
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
  `author` varchar(20) CHARACTER SET utf8 NOT NULL COMMENT '文档作者',
  `columnid` int(10) NOT NULL,
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
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of la_archive
-- ----------------------------
INSERT INTO `la_archive` VALUES ('1', '这是一篇测试文章', 'admin', '2', null, '测试,文章', '', '', '', '', '1', '1', '1352', '0', '1363856577', '1364457012');
INSERT INTO `la_archive` VALUES ('2', '确认在左，取消在右?', 'admin', '2', null, '文章', '', '', '', '', '1', '1', '233', '0', '1357701202', '1364183357');
INSERT INTO `la_archive` VALUES ('3', '企业用网站进行网络宣传的优势', 'admin', '2', null, '网站,宣传', '', '', '', '传统媒体是二维的，而网络宣传则是多维的，它能将文字、图像和声音有机的组合在一起，传递多感官的信息，让顾客如身临其境般感受商品或服务', '1', '1', '132', '0', '1363854365', '1363854382');
INSERT INTO `la_archive` VALUES ('4', 'MongoDB:下一代MySQL？', 'admin', '3', null, '', '', '', '', '', '1', '1', '0', '0', '1363856271', '1363856783');
INSERT INTO `la_archive` VALUES ('5', '页面(PAGE)标记(TAGS)', 'admin', '5', null, '', '', '', '', '', '1', '1', '0', '0', '1364196108', '1364197889');
INSERT INTO `la_archive` VALUES ('6', 'PHP基本点知识', 'admin', '3', null, '', '', '', '', '', '1', '1', '0', '0', '1364201027', '1364201480');
INSERT INTO `la_archive` VALUES ('7', 'PHP实现异步操作', 'admin', '12', null, '', '', '', '', '', '1', '1', '0', '0', '1364262615', '1364262717');
INSERT INTO `la_archive` VALUES ('8', 'PHP单例模式经典讲解', 'admin', '3', null, 'PHP,单利模式', '', '', '', '', '1', '1', '0', '0', '1364537100', '1364537721');

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
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_article
-- ----------------------------
INSERT INTO `la_article` VALUES ('1', '1', '&lt;p&gt;&lt;br /&gt;&lt;img src=&quot;/Uploads/Image/201212/25/1356405476_fzagmz_6513.jpg&quot; /&gt;&lt;/p&gt;&lt;p&gt;测试文章&lt;br /&gt;&lt;/p&gt;', '1364457012');
INSERT INTO `la_article` VALUES ('2', '2', '&lt;p&gt;开篇 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　确认框，顾名思义，就是对用户的关键行为进行确认。比如在Windows操作系统中，删除某个文件的时候，都会询问&ldquo;确实要把此文件放入回收站吗?&rdquo;，用户可以选择&ldquo;是&rdquo;或&ldquo;否&rdquo;。 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　大家对于确认框的感觉大抵如此，觉得非常多余，打断了我的操作。这就像我着急上厕所，却被告知要先收费一样让人不爽。不能否认，确认框是一种打断，有时甚至是打扰。 &amp;nbsp;&lt;/p&gt;&lt;p&gt;　　所以这里要把握住一个原则：能不用确认框就尽量不要用。除非用户的操作具有很大的风险，一定需要他来确认一下。 &lt;/p&gt;&lt;p&gt;　　&lt;strong&gt;确认在左，取消在右?&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　根据windows多年培养的用户习惯，大家都已经默认一个原则，就是确认在左，取消在右。但是，这样做是否真的合理呢?我们今天就来探讨一下这个问题。 &lt;span style=&quot;color:#ffffff;&quot;&gt;一些事&lt;/span&gt;&lt;/p&gt;&lt;p&gt;　　如果不是误操作，相信用户做事情前都是经过了一定思考。所以当弹出确认框的时候，我们猜测大部分用户都会去选择&ldquo;确认&rdquo;/&rdquo;是&rdquo;，继续之前的操作。之后本文的探讨，都讲建立在这样一种假设的基础上，即用户是想去选择&ldquo;确认&rdquo;/&rdquo;是&rdquo;。 &lt;/p&gt;&lt;p&gt;　　&lt;strong&gt;以视觉流的角度分析&lt;/strong&gt;&lt;/p&gt;&lt;p&gt;　　如果将&ldquo;确认&rdquo;放在左边，&ldquo;取消&rdquo;放在右边。 &lt;/p&gt;&lt;p&gt; 　　我们相信大部分用户在决定采取哪一个操作之前，都会把所有可以选择的操作都看一遍，以免做出错误的操作(当然不排除会有专家级用户 选择只看自己想进行的操作)。根据从左到右的阅读习惯，用户会首先看到左侧的&ldquo;确认&rdquo;，然后看一下在它旁边的&ldquo;取消&rdquo;，了解到所有可以进行的操作后，再回到&ldquo;确认&rdquo;按钮上，最后点击。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', null);
INSERT INTO `la_article` VALUES ('3', '3', '&lt;div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传是多维宣传 &lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　传统媒体是二维的，而网络宣传则是多维的，它能将文字、图像和声音有机的组合在一起，传递多感官的信息，让顾客如身临其境般感受商品或服务。使消费者能亲身体验产品、服务与品牌。这种图、文、声、像相结合的宣传形式，增强了网络宣传的实效。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传拥有最有活力的消费群体&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　互联网用户70.54%集中在经济较为发达地区，64%家庭人均月收入高于1000元，85.8%年龄在18岁到35岁之间，83%受过大学以上教育。因此，网络宣传的目标群体是目前社会上层次最高、收入最高、消费能力最高的最具活力的消费群体。这一群体的消费总额往往大于其他消费层次之和。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传制作成本低，速度快，更改灵活&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　网络宣传制作周期短，即使在较短的周期进行投放，也可以根据客户的需求很快完成制作，而传统宣传制作成本高，投放周期固定。另外，在传统媒体上做宣传发布后很难更改即使可以改动往往也须付出很大的经济代价。而在互联网上做宣传能够按照客户需要及时变更宣传内容。这样，经营决策的变化就能及时实施和推广。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传具有交互性和纵深性&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　交互性强是互联网络媒体的最大的优势，它不同于传统媒体的信息单向传播，而是信息互动传播。通过链接，用户只需简单地点击鼠标，就可以从厂商的相关站点中得到更多、更详尽的信息。另外，用户可以通过网络直接填写并提交在线表单信息，厂商可以随时得到宝贵的用户反馈信息，进一步减少了用户和宣传客户之间的距离。同时，网络宣传可以提供进一步的产品查询需求。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传能进行完善的统计&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　&amp;quot;无法衡量的东西就无法管理。&amp;quot;网络宣传通过及时和精确的统计机制，使用户能够直接对信息的发布进行在线监控。而传统的信息发布形式只能通过并不精确的收视率、发行量等来统计投放的受众数量。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传可以跟踪和衡量宣传的效果&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　用户能通过Internet即时衡量宣传的效果。通过监视宣传的浏览量、点击率等指标，用户可以统计出多少人看到了发布的信息，其中有多少人对发布的信息感兴趣进而进一步了解了信息的详细信息。因此，较之其他任何宣传，网络宣传使用户能够更好地跟踪受众的反应，及时了解用户和潜在用户的情况。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传的投放更具有针对性&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;　　通过提供众多的免费服务，网站一般都能建立完整的用户数据库，包括用户的地域分布、年龄、性别、收入、职业、婚姻状况、爱好等。这些资料可帮助用户分析市场与受众，根据信息发布目标受众的特点，有针对性地进行信息发布，并根据用户特点作定点投放和跟踪分析，对投放效果作出客观准确的评价。&lt;/div&gt;&lt;div&gt;&lt;p&gt;另外，网络宣传还可以提供有针对性的内容环境。不同的网站或者是同一网站不同的频道所提供的服务是不同质且具有很强的类分别的，这就为密切迎合用户的兴趣提供了可能。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传的受众关注度高&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　据资料显示，电视并不能集中人的注意力，电视观众40%的人同时在阅读，21%的人同时在做家务，13%的人在吃喝，12%的人在玩赏它物，10%在烹饪，9%在写作，8%在打电话。而网上用户55%在使用计算机时不做任何它事，只有6%同时在打电话，只有5%在吃喝，只有4%在写作。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传缩短了媒体投放的进程&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　用户在传统媒体上进行市场推广一般要经过三个阶段：市场开发期、市场巩固期和市场维持期。在这三个阶段中，厂商要首先获取注意力，创立品牌知名度；在消费者获得品牌的初步信息后，推广更为详细的产品信息。然后是建立和消费者之间较为牢固的联系，以建立品牌忠诚。而互联网将这三个阶段合并在一次信息发布中实现：消费者看到网络宣传，点击后获得详细信息，并填写用户资料或直接参与用户的市场活动甚至直接在网上实施购买行为。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;strong&gt;网络宣传传播范围广、不受时空限制&lt;/strong&gt;&lt;/span&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　通过国际互联网络，网络宣传可以将信息24小时不间断地传播到世界的每一个角落。只要具备上网条件，任何人，在任何地点都可以阅读。这是传统媒体无法达到的。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传具有可重复性和可检索性&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;&lt;p&gt;　　网络宣传可以将文字、声音、画面完美地结合之后供用户主动检索，重复观看。而与之相比电视宣传却是让用户被动地接受宣传内容。如果错过宣传时间，就不能再得到发布信息。另外，显而易见，较之网络宣传的检索平面宣传的检索要费时、费事的多。&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;/div&gt;&lt;div&gt;&lt;/div&gt;&lt;div&gt;&lt;strong&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;网络宣传具有价格优势&lt;/span&gt;&lt;/strong&gt;&lt;/div&gt;&lt;div&gt;　　从价格方面考虑，与报纸杂志或电视宣传相比，目前网络宣传费用还是较为低廉的。获得同等的宣传效应，网络宣传的有效千人成本远远低于传统宣传媒体。一个宣传主页一年的费用大致为几千元人民币，而且主页内容可以随企业经营决策的变更随时改变，这是传统宣传媒体不可想像的。网络宣传将成为企业市场推广必不可少的高效途径。&lt;/div&gt;&lt;/div&gt;', null);
INSERT INTO `la_article` VALUES ('4', '4', '&lt;p&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;MongoDB的特性&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;简单的查询语句，没有Join操作&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;文档型存储，其数据是用二进制的Json格式Bson存储的。其数据就像Ruby的hashes，或者Python的字典，或者PHP的数组&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;Sharding，MongoDB提供auto-sharding实现数据的扩展性&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;GridFS，MongoDB的提供的文件存储API&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;数组索引，你可以对文档中的某个数组属性建立索引&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MapReduce，可以用于进行复杂的统计和并行计算&lt;/p&gt;&lt;p&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;高性能，通过使用mmap和定时fsync的方法，避免了频繁IO，使其性能更高&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;MongoDB的优点&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;高性能，速度非常快（如果你的内存足够的话）&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;没有固定的表结构，不用为了修改表结构而进行数据迁移&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;查询语言简单，容易上手&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;使用Sharding实现水平扩展&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;部署方便&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;使用MongoDB，你得记住以下几点：&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你有大磁盘空间&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你的内存也足够大于放下你的热数据&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你是部署在64位系统上的（32位有2G的限制，试用还可以）&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你的系统是little-endian的&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你有多台机器（并不专注于单机可靠性）&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;MongoDB 假设你希望用安全换性能，同时允许你用性能换安全&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;br /&gt;&lt;strong&gt;&lt;span style=&quot;font-size:20px;&quot;&gt;MongoDB在下面领域不太擅长&lt;/span&gt;&lt;/strong&gt;&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;不太稳定，特别是auto-sharding目前还有很多问题&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;不支持SQL，这意味着你很多通过SQL接口的工具不再适用&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;持久化，MongoDB单机可靠性不太好，宕机可能丢失一段时间的数据&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;相关文档比较少，新功能都有这个问题&lt;br /&gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp;相关人才比较难找，这也是新功能的问题之一&lt;br /&gt;&lt;br /&gt;&lt;br /&gt;&lt;/p&gt;', null);
INSERT INTO `la_article` VALUES ('5', '5', '&lt;h2&gt;HTML 文件结构(Document Structures)&lt;/h2&gt;&lt;h3&gt;&amp;lt;html&amp;gt;...&amp;lt;/html&amp;gt;&lt;br /&gt;&amp;lt;head&amp;gt;...&amp;lt;/head&amp;gt;&lt;br /&gt;&amp;lt;body&amp;gt;...&amp;lt;/body&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;pre&gt;&amp;lt;HTML&amp;gt;\r\n&amp;lt;HEAD&amp;gt;\r\n     &amp;lt;title&amp;gt;, &amp;lt;base&amp;gt;, &amp;lt;link&amp;gt;, &amp;lt;isindex&amp;gt;, &amp;lt;meta&amp;gt;\r\n&amp;lt;/HEAD&amp;gt;\r\n&amp;lt;BODY&amp;gt;\r\n    HTML 文件的正文写在这里... ... \r\n&amp;lt;/BODY&amp;gt;\r\n&amp;lt;/HTML&amp;gt;\r\n&lt;/pre&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;&lt;a name=&quot;lang&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;语言字符集(Charsets)的信息&lt;/h2&gt;&lt;h3&gt;&amp;lt;meta http-equiv=&amp;quot;Content-Type&amp;quot; &amp;nbsp; &amp;nbsp; &amp;nbsp; content=&amp;quot;text/html;charset=#&amp;quot;&amp;gt;&lt;br /&gt;&lt;/h3&gt;&lt;dl compact=&quot;compact&quot;&gt;&lt;dt&gt;#= &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dt&gt;&lt;dd&gt;us-ascii, iso-8859-1, x-mac-roman, iso-8859-2, &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; x-mac-ce,&lt;br /&gt;iso-2022-jp, x-sjis, x-euc-jp,&lt;br /&gt;euc-kr, &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; iso-2022-kr,&lt;br /&gt;gb2312, gb_2312-80,&lt;br /&gt;x-euc-tw, x-cns11643-1, &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; x-cns11643-2, big5 &lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;可在 HTML 文件中设置 MIME 字符集信息。&lt;br /&gt;您在浏览主页时，最好自己在浏览器的选项菜单内选择相应的语言(language &amp;nbsp; &amp;nbsp; &amp;nbsp; encoding)。&lt;br /&gt;但是如果 HTML 文件里写明了设置，浏览器就会自动设置语言选项。&lt;br /&gt;尤其是主页里用到了&lt;a href=&quot;http://www.php100.com/cover/html/entities.html&quot;&gt;字符实体(entities)&lt;/a&gt;，则该主页就应该写明字符集信息。&lt;br /&gt;否则，您在浏览该主页时，若未正确设置语言选项，显示将可能混乱。&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;bgcolor&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;背景色彩和文字色彩&lt;/h2&gt;&lt;h3&gt;&amp;lt;body bgcolor=# text=# link=# alink=# vlink=#&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;bgcolor --- 背景色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;text --- 非可链接文字的色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;link --- 可链接文字的色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;alink --- 正被点击的可链接文字的色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;vlink --- 已经点击(访问)过的可链接文字的色彩 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;&lt;h3&gt;#=rrggbb&lt;/h3&gt;&lt;/dd&gt;&lt;dd&gt;色彩是用 16 进制的 红－绿－蓝(red-green-blue, RGB) 值来表示。&lt;br /&gt;16 进制的数码有: &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; 0,1,2,3,4,5,6,7,8,9,a,b,c,d,e,f. &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/dd&gt;&lt;dd&gt;　 &lt;/dd&gt;&lt;/dl&gt;&lt;h3&gt;背景图象 &amp;lt;body background=&amp;quot;image-URL&amp;quot;&amp;gt;&lt;br /&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;Non Scrolling Background &amp;lt;body bgproperties=FIXED&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;a name=&quot;margin&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;页面空白(Margin)&lt;/h2&gt;&lt;h3&gt;页面左边的空白 &amp;lt;body leftmargin=#&amp;gt;&lt;br /&gt;页面上方的空白(天头) &amp;lt;body &amp;nbsp; &amp;nbsp; &amp;nbsp; topmargin=#&amp;gt; #=margin amount&lt;/h3&gt;&lt;p&gt;&lt;a name=&quot;link&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;链接(Link)&lt;/h2&gt;&lt;h3&gt;基本语法 &amp;lt;a href=&amp;quot;URL&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;tt&gt;这是一个&lt;br /&gt;&amp;lt;a href=&amp;quot;samp/link.html&amp;quot;&amp;gt;链接的例子&amp;lt;/a&amp;gt;。 &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;br /&gt;点一下带下划线的文字!&lt;/tt&gt;&lt;br /&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;这是一个&lt;a href=&quot;http://www.php100.com/cover/html/samp/link.html&quot;&gt;链接的例子&lt;/a&gt;。点一下带下划线的文字!&lt;/p&gt;&lt;h3&gt;跳转到页面的另外一个地方&lt;br /&gt;&amp;lt;a href=&amp;quot;#name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt;&lt;br /&gt;&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; name=&amp;quot;name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt; &lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;tt&gt;&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; href=&amp;quot;#jump-test&amp;quot;&amp;gt;跳转到下一个&amp;quot;链接点&amp;quot;&amp;lt;/a&amp;gt;&amp;lt;P&amp;gt;&lt;br /&gt;&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; name=&amp;quot;jump-test&amp;quot;&amp;gt;下一个链接点&amp;lt;/a&amp;gt; &lt;/tt&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;&lt;a href=&quot;http://www.php100.com/cover/html/page.htm#jump-test&quot;&gt;跳转到下一个&amp;quot;链接点&amp;quot;&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;jump-test&quot;&gt;&lt;/a&gt;下一个链接点&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;jump2&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h3&gt;跳转到另一个页面的某个地方&lt;br /&gt;&amp;lt;a href=&amp;quot;URL#name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt;&lt;br /&gt;&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; name=&amp;quot;name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt; &lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;tt&gt;跳转到另一个页面的&amp;lt;a &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; href=&amp;quot;samp/link.html#jump-test&amp;quot;&amp;gt;某个地方&amp;lt;/a&amp;gt;。&lt;br /&gt;&lt;/tt&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;跳转到另一个页面的&lt;a href=&quot;http://www.php100.com/cover/html/samp/link.html#jump-test&quot;&gt;某个地方&lt;/a&gt;。&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;window&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;开一个新的(浏览器)窗口 (Target Window) &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/h2&gt;&lt;h3&gt;&amp;lt;a href=&amp;quot;URL&amp;quot; target=&amp;quot;Window_Name&amp;quot;&amp;gt; ... &amp;lt;/a&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;&lt;tt&gt;&amp;lt;a href=&amp;quot;samp/window.html&amp;quot; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; target=&amp;quot;window_name&amp;quot;&amp;gt;&lt;br /&gt;开一个新窗口!&lt;br /&gt;&amp;lt;/a&amp;gt; &lt;/tt&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;&lt;a href=&quot;http://www.php100.com/cover/html/samp/window.html&quot; target=&quot;window_name&quot;&gt;开一个新窗口!&lt;/a&gt;&lt;/p&gt;&lt;p&gt;&lt;a name=&quot;hr&quot;&gt;&lt;/a&gt;&lt;/p&gt;&lt;h2&gt;标尺线&lt;/h2&gt;&lt;h3&gt;&amp;lt;hr&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;hr /&gt;&lt;h3&gt;&amp;lt;hr size=#&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr size=10&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;hr size=&quot;10&quot; /&gt;&lt;h3&gt;&amp;lt;hr width=#&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr width=50&amp;gt;&lt;br /&gt;&amp;lt;hr width=50%&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;hr width=&quot;50&quot; /&gt;&lt;hr width=&quot;50%&quot; /&gt;&lt;h3&gt;&amp;lt;hr align=#&amp;gt; #=left, right&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr width=50% align=left&amp;gt;&lt;br /&gt;&amp;lt;hr width=50% align=right&amp;gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &lt;/tt&gt;&lt;/p&gt;&lt;hr align=&quot;left&quot; width=&quot;50%&quot; /&gt;&lt;hr align=&quot;right&quot; width=&quot;50%&quot; /&gt;&lt;h3&gt;&amp;lt;hr noshade&amp;gt;&lt;/h3&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr noshade&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;hr noshade=&quot;noshade&quot; /&gt;&lt;h3&gt;&amp;lt;hr color=#&amp;gt;&lt;/h3&gt;&lt;dl&gt;&lt;dd&gt;#=rrggbb 16 进制 RGB 数码，或者是下列预定义色彩：&lt;br /&gt;&lt;span style=&quot;color:#000000;&quot;&gt;Black&lt;/span&gt;, &lt;span style=&quot;color:#808000;&quot;&gt;Olive&lt;/span&gt;, &lt;span style=&quot;color:#008080;&quot;&gt;Teal&lt;/span&gt;, &lt;span style=&quot;color:#ff0000;&quot;&gt;Red&lt;/span&gt;, &lt;span style=&quot;color:#0000ff;&quot;&gt;Blue&lt;/span&gt;, &lt;span style=&quot;color:#800000;&quot;&gt;Maroon&lt;/span&gt;, &lt;span style=&quot;color:#000080;&quot;&gt;Navy&lt;/span&gt;, &lt;span style=&quot;color:#808080;&quot;&gt;Gray&lt;/span&gt;, &lt;span style=&quot;color:#00ff00;&quot;&gt;Lime&lt;/span&gt;, &lt;br /&gt;&lt;span style=&quot;color:#ff00ff;&quot;&gt;Fuchsia&lt;/span&gt;, &lt;span style=&quot;color:#ffffff;&quot;&gt;White&lt;/span&gt;, &lt;span style=&quot;color:#008000;&quot;&gt;Green&lt;/span&gt;, &lt;span style=&quot;color:#800080;&quot;&gt;Purple&lt;/span&gt;, &lt;span style=&quot;color:#c0c0c0;&quot;&gt;Silver&lt;/span&gt;, &lt;span style=&quot;color:#ffff00;&quot;&gt;Yellow&lt;/span&gt;, &lt;span style=&quot;color:#00ffff;&quot;&gt;Aqua&lt;/span&gt;&lt;/dd&gt;&lt;/dl&gt;&lt;p&gt;&lt;tt&gt;&amp;lt;hr color=&amp;quot;red&amp;quot;&amp;gt; &lt;/tt&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', null);
INSERT INTO `la_article` VALUES ('6', '6', '&lt;p&gt;&lt;span class=&quot;top11&quot;&gt;&lt;p&gt;二. 各取所需&lt;/p&gt;&lt;p&gt;1.善于使用&ldquo;引用&rdquo;,它能直接影响到程序的效率。&lt;/p&gt;&lt;p&gt;2.善于用三元运算子,可以让程式较精简有效率。&lt;br /&gt;比如:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;if ($data[$i][&amp;#39;nickname&amp;#39;]){&lt;br /&gt; &amp;nbsp; &amp;nbsp;$nickname = &amp;nbsp;$data[$i][&amp;#39;nickname&amp;#39;];&lt;br /&gt;}&lt;br /&gt;else{&lt;br /&gt; &amp;nbsp; &amp;nbsp;$nickname = &amp;nbsp;$data[$i][&amp;#39;ip&amp;#39;];&lt;br /&gt;}&lt;/p&gt;&lt;p&gt;可以写成:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$nickname = &amp;nbsp;$data[$i][&amp;#39;nickname&amp;#39;] ? $data[$i][&amp;#39;nickname&amp;#39;] : $data[$i][&amp;#39;ip&amp;#39;];&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;&lt;p&gt;3.善于组织if...else...回圈&lt;br /&gt;比如:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$ext_name = strtolower(str_replace(&amp;quot;.&amp;quot;, &amp;quot;&amp;quot;, strrchr($upfilename, &amp;quot;.&amp;quot;)));&lt;br /&gt;if (!empty($type))&lt;br /&gt;{&lt;br /&gt; &amp;nbsp; &amp;nbsp;if (!strpos($type, $ext_name))&lt;br /&gt; &amp;nbsp; &amp;nbsp;{&lt;br /&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;echo &amp;quot;Please upload the file of $type form.&amp;quot;;&lt;br /&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;exit(); &lt;br /&gt; &amp;nbsp; }&lt;br /&gt;}&lt;/p&gt;&lt;p&gt;上面的代码你应该写成这样:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$ext_name = strtolower(str_replace(&amp;quot;.&amp;quot;, &amp;quot;&amp;quot;, strrchr($upfilename, &amp;quot;.&amp;quot;)));&lt;br /&gt;if (!($type===&amp;#39;&amp;#39;) &amp;amp;&amp;amp; strpos($type, $ext_name)===false)&lt;br /&gt;{&lt;br /&gt; &amp;nbsp; &amp;nbsp;echo &amp;quot;Please upload the file of $type form.&amp;quot;;&lt;br /&gt; &amp;nbsp; &amp;nbsp;exit();&lt;br /&gt;}&lt;/p&gt;&lt;p&gt;4.尽量让你的代码清淅些,如果写成这样，是比较让人头痛的:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$foo=$_post[&amp;quot;foo&amp;quot;];&lt;br /&gt; &amp;nbsp; $username=$_post[&amp;quot;user&amp;quot;];&lt;br /&gt; $group=$_POST[&amp;quot;group&amp;quot;];&lt;br /&gt;if ($group==&amp;quot;wheel&amp;quot;)&lt;br /&gt;{&lt;br /&gt;$username=$username.&amp;quot;wheel&amp;quot;;&lt;br /&gt;}&lt;/p&gt;&lt;p&gt;同样的代码，这样就比较让人看得舒服了:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$foo &amp;nbsp; &amp;nbsp; &amp;nbsp;= $_post[&amp;quot;foo&amp;quot;];&lt;br /&gt;$username = $_post[&amp;quot;username&amp;quot;];&lt;br /&gt;$group &amp;nbsp; &amp;nbsp;= $_POST[&amp;quot;group&amp;quot;];&lt;br /&gt;if ($group==&amp;quot;wheel&amp;quot;)&lt;br /&gt;{&lt;br /&gt; &amp;nbsp; &amp;nbsp;$username = $username.&amp;quot;wheel&amp;quot;;&lt;br /&gt;}&lt;/p&gt;&lt;p&gt;当然，有一定基础后，你应该要写成这样:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$foo &amp;nbsp; &amp;nbsp; &amp;nbsp;= &amp;amp;$_POST[&amp;#39;foo&amp;#39;];&lt;br /&gt;$username = &amp;nbsp;$_POST[&amp;quot;group&amp;quot;]!=&amp;#39;wheel&amp;#39; ? $_POST[&amp;quot;username&amp;quot;] : $_POST[&amp;quot;username&amp;quot;].&amp;#39;wheel&amp;#39;;&lt;/p&gt;&lt;p&gt;5.编写规范的mysql 语句。&lt;/p&gt;&lt;p&gt;字段和表名用&amp;quot;`&amp;quot;引起来，避免保留字的影响。&lt;br /&gt;如果看到下面这样的一个sql query，会让人比较头痛:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$query=&amp;quot;select `flash_comment`.`content` , `flash_comment`.`nickname` , `flash_comment`.`date` , `flash_comment`.`ip` , `product`.`p_name` , `sgflash`.`fid` from `flash_comment` left join `product` on ( `flash_comment`.`p_no` = `product`.`p_no` ) left join `sgflash` on ( `product`.`p_name` = `sgflash`.`f_name` ) where `flash_comment`.`p_no` != &amp;#39;&amp;#39; order by `flash_comment`.`date`&amp;quot;;&lt;/p&gt;&lt;p&gt;同样的一个query,写成这样就令人看得明白得多了:&lt;/p&gt;&lt;p&gt;PHP代码:&lt;/p&gt;&lt;p&gt;$query = &amp;quot;SELECT `flash_comment`.`content` , `flash_comment`.`nickname` , `flash_comment`.`date` , `flash_comment`.`ip` , `product`.`p_name` , `sgflash`.`fid` &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; FROM `flash_comment` &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; LEFT JOIN `product` ON ( `flash_comment`.`p_no` = `product`.`p_no` ) &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; LEFT JOIN `sgflash` ON ( `product`.`p_name` = `sgflash`.`f_name` ) &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; WHERE `flash_comment`.`p_no` != &amp;#39;&amp;#39; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;ORDER BY `flash_comment`.`date`&amp;quot;;&lt;/p&gt;&lt;/span&gt;&lt;br /&gt;&lt;/p&gt;', null);
INSERT INTO `la_article` VALUES ('7', '7', '&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;1.为啥PHP需要异步操作？&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;一般来说PHP适用的场合是web页面展示等耗时比较短的任务，如果对于比较花时间的操作如resize图片、大数据导入、批量发送EDM、SMS等，就很容易出现操作超时情况。你可以说我可以设置无限超时时间，等等你也要知道PHP有一个工作模式是fastcgi，PHP无限不超时，不代表 fastcgi相应不超时&hellip;&hellip;如果你还想说要fastcgi相应永不超时，我建议你应该跟你们的运维人员讨论去&hellip;&hellip;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;这个时候异步的操作就发挥他的作用了，由于是非阻塞操作，操作会即时返回，然后在后台再慢慢干活。管你超时不超时的，我就没有在当前的进程/线程下干活。看吧是不是很美好，不过其实这也是个坑&hellip;&hellip;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;2.PHP可以实现异步操作吗？&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;答案是肯定的，不过网上各种的纯PHP实现得就有点别扭了。socket模式、挂起进程模式、有的还直接fork进程。很好，各路神仙各显神通。如果运维人员看到的话，一定会&times;&times;&times;&times;&times;你们的，不把web server跑死才怪&hellip;&hellip;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;那还有其他更好的方法去实现这个异步操作的可能么？有，现在我们只有想怎么开外挂了。查一下PECL主流的外挂方案有一堆的&times;&times;MQ（消息队列），其中有个用于任务分配的外挂进入了我们的视线&lt;a href=&quot;http://www.cnblogs.com/cocowool/archive/2011/08/18/2145144.html&quot; style=&quot;padding:0px;margin:0px;color:#626f91;text-decoration:initial;&quot; target=&quot;_blank&quot;&gt;Gearman&lt;/a&gt;(其实这家伙才是角，我就不详细介绍了，点连接看介绍)。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;3.为啥选择Gearman?&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;别的不说，就说他的client多，支持很多语言的client，你可以使用大部分你喜欢的语言去写worker。我个人是很烦语言之争，你喜欢用神码语言写worker都随你喜欢。有数据持久化支持（就是把队列保存到数据库介质中，那故障恢复也好做），有群集支持（其实很多&times;&times;MQ都有这些功能）。 PECL上有扩展，也有纯PHP实现扩展。反正这个Gearman也活了很久了，杂七杂八的问题都基本上解决了。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;4.基本思路&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;有了Gearman这外挂就简单多了。就是向gearman发送一个任务，把执行的任务发出去，然后等待worker去调用PHP cli去运行我们的php代码。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;我就写了一下一个python的worker（别问我为啥用python，1.我会python，2.linux下不用装runtime），你可以自己根据思路写一个PHP的worker，不过嘛，本人是不太信得过PHP跑的worker。其他语言饭可以用java、node.js 或者其他语言实现一个worker试试。对用Golang写worker有兴趣的朋友可以找我。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;&lt;a href=&quot;http://code.google.com/p/phpasync-for-gearman/downloads/detail?name=phpasync_worker_py.zip&amp;amp;can=2&amp;amp;q=&quot; style=&quot;padding:0px;margin:0px;color:#626f91;text-decoration:initial;&quot; target=&quot;_blank&quot;&gt;phpasync_worker_py&lt;/a&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;不好意思，里面是没有注释的。一个配置文件，一个py脚本。基本的功能也就是分析一下调用的参数，然后调用PHP Cli，就是那样子而已。要让py脚本跑起来请自行安装python的gearman模块。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;然后到PHP的部分先上测试代码：&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;ol style=&quot;margin:0px;border-width:0px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;padding-right:0px;padding-left:0px;&quot;&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;pre style=&quot;padding:0px;font-family:&amp;#39;courier new&amp;#39;, monospace;font-size:12px;width:650.421875px;word-wrap:break-word;word-break:break-all;background-color:#f7f7f7;margin-top:0px;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;&amp;lt;?php &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/pre&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;require_once &amp;#39;PHPAsyncClient.php&amp;#39;; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;date_default_timezone_set(&amp;#39;Asia/Shanghai&amp;#39;); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt; &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;class AsyncTest { &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt; &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;const &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;LOG_FILE = &amp;#39;/debug.log&amp;#39;; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt; &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;static public function run() { &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;if (PHPAsyncClient::in_callback(__FILE__)) { &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;self::log(&amp;#39;php Async callback&amp;#39;); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;PHPAsyncClient::parse(); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;return; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;} &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;if (PHPAsyncClient::is_main(__FILE__)) { &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;self::log(&amp;#39;main run&amp;#39;); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;$async_call = PHPAsyncClient::getInstance(); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;$async_call-&amp;gt;AsyncCall(&amp;#39;AsyncTest&amp;#39;, &amp;#39;callback&amp;#39;, array( &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;#39;content&amp;#39; =&amp;gt; &amp;#39;Hello World!!!&amp;#39;, &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;), array( &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;#39;class&amp;#39; =&amp;gt; &amp;#39;AsyncTest&amp;#39;, &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;#39;method&amp;#39; =&amp;gt; &amp;#39;callback&amp;#39;, &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;#39;params&amp;#39; =&amp;gt; array( &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;&amp;#39;content&amp;#39; =&amp;gt; &amp;#39;Hello Callback!&amp;#39;, &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;), &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;), __FILE__); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;return; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;} &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;} &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt; &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;static public function callback($args) { &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;self::log(&amp;#39;AsyncTest callback run&amp;#39;); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;self::log(&amp;#39;AsyncTest callback args:&amp;#39;.print_r($args, true)); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;} &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt; &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;static public function log($content) { &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;$fullname = dirname(__FILE__).self::LOG_FILE; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;$content = date(&amp;#39;[Y-m-d H:i:s]&amp;#39;).$content.&amp;quot;&amp;quot;; &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp; &amp;nbsp; &amp;nbsp;file_put_contents($fullname, $content, FILE_APPEND); &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt; &amp;nbsp; &amp;nbsp;} &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;} &amp;nbsp;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt; &lt;/p&gt;&lt;/li&gt;&lt;li style=&quot;padding:0px;margin:0px;border-width:0px;list-style-position:outside;list-style-type:none;&quot;&gt;&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;AsyncTest::run(); &lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;/li&gt;&lt;/ol&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;就3个静态方法，一个是用于调试的log方法，其他都是字面意思。这个例子是对这种调用方式有个初步印象。然后直接上PHP的所有源码：&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;&lt;a href=&quot;http://code.google.com/p/phpasync-for-gearman/downloads/detail?name=php_async.zip&amp;amp;can=2&amp;amp;q=&quot; style=&quot;padding:0px;margin:0px;color:#626f91;text-decoration:initial;&quot; target=&quot;_blank&quot;&gt;php_async.zip&lt;/a&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;然后应该会有很多人会说，win下安装不了gearman&hellip;&hellip;所以我把java版的gearman server也放上去吧。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;&lt;a href=&quot;http://code.google.com/p/phpasync-for-gearman/downloads/detail?name=java-gearman-service-0.6.6.zip&amp;amp;can=2&amp;amp;q=&quot; style=&quot;padding:0px;margin:0px;color:#626f91;text-decoration:initial;&quot; target=&quot;_blank&quot;&gt;java-gearman-service-0.6.6.zip&lt;/a&gt;&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;5.结论&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p style=&quot;padding:0px;margin:0px 0px 22px;color:#000000;font-family:verdana, arial, tahoma;font-size:14px;line-height:25px;background-color:#eff4fa;&quot;&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;经过以上配置犀牛一样大的家伙后（要装一个Gearman，还要跑个Py脚本），我们基本上就使PHP拥有了异步调用功能，当然其中还有一个状态维护神马的要自己去实现。所以发现，其实这个方案不咋样，太复杂了。还是使用一些web service的方式去做web callback会好点（问题是web callback一样会超时&hellip;&hellip;），这个请留意后续。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', null);
INSERT INTO `la_article` VALUES ('8', '8', '&lt;p&gt;&lt;span style=&quot;font-size:14px;&quot;&gt;&lt;span style=&quot;font-family:arial, helvetica, sans-serif;&quot;&gt;首先我们要知道明确单例模式这个概念，那么什么是单例模式呢？&lt;br /&gt;单例模式顾名思义，就是只有一个实例。&lt;br /&gt;作为对象的创建模式， 单例模式确保某一个类只有一个实例，而且自行实例化并向整个系统提供这个实例，&lt;br /&gt;这个类我们称之为单例类。&lt;br /&gt;单例模式的要点有三个：&lt;br /&gt;一是某个类只能有一个实例；&lt;br /&gt;二是它必须自行创建这个实例；&lt;br /&gt;三是它必须自行向整个系统提供这个实例。&lt;br /&gt;下面我们讨论下为什么要使用PHP单例模式？&lt;br /&gt;多数 人都是从单例模式的字面上的意思来理解它的用途, 认为这是对系统资源的节省, 可以避免重复实例化, 是一种&rdquo;计划生育&rdquo;. 而PHP每次执行完页面都是会从内存中清理掉所有的资源. 因而PHP中的单例实际每次运行都是需要重新实例化的, 这样就失去了单例重复实例化的意义了. 单单从这个方面来说, PHP的单例的确有点让各位失望. 但是单例仅仅只有这个功能和应用吗? 答案是否定的,我们一起来看看。&lt;br /&gt;1. php的应用主要在于数据库应用, 所以一个应用中会存在大量的数据库操作, 在使用面向对象的方式开发时(废话), 如果使用单例模式, 则可以避免大量的new 操作消耗的资源。&lt;br /&gt;2. 如果系统中需要有一个类来全局控制某些配置信息, 那么使用单例模式可以很方便的实现. 这个可以参看zend Framework的FrontController部分。&lt;br /&gt;3. 在一次页面请求中, 便于进行调试, 因为所有的代码(例如数据库操作类db)都集中在一个类中, 我们可以在类中设置钩子, 输出日志，从而避免到处var_dump, echo。&lt;/span&gt;&lt;/span&gt;&lt;/p&gt;&lt;pre class=&quot;brush:php;toolbar:false;&quot;&gt;/**\r\n* 设计模式之单例模式\r\n* $_instance必须声明为静态的私有变量\r\n* 构造函数和析构函数必须声明为私有,防止外部程序new\r\n* 类从而失去单例模式的意义\r\n* getInstance()方法必须设置为公有的,必须调用此方法\r\n* 以返回实例的一个引用\r\n* ::操作符只能访问静态变量和静态函数\r\n* new对象都会消耗内存\r\n* 使用场景:最常用的地方是数据库连接。\r\n* 使用单例模式生成一个对象后，\r\n* 该对象可以被其它众多对象所使用。\r\n*/\r\nclass Example\r\n{\r\n    //保存例实例在此属性中\r\n    private static $_instance;\r\n                    \r\n    //构造函数声明为private,防止直接创建对象\r\n    private function __construct()\r\n    {\r\n        echo &lsquo;I am Construceted&rsquo;;\r\n    }\r\n                    \r\n    //单例方法\r\n    public static function singleton()\r\n    {\r\n        if(!isset(self::$_instance))\r\n        {\r\n            $c=__CLASS__;\r\n            self::$_instance=new $c;\r\n        }\r\n        return self::$_instance;\r\n    }\r\n                    \r\n    //阻止用户复制对象实例\r\n    public function __clone()\r\n    {\r\n        trigger_error(&lsquo;Clone is not allow&rsquo; ,E_USER_ERROR);\r\n    }\r\n                    \r\n    function test()\r\n    {\r\n        echo(&ldquo;test&rdquo;);\r\n    }\r\n}\r\n                \r\n// 这个写法会出错，因为构造方法被声明为private\r\n$test = new Example;\r\n                \r\n// 下面将得到Example类的单例对象\r\n$test = Example::singleton();\r\n$test-&amp;gt;test();\r\n                \r\n// 复制对象将导致一个E_USER_ERROR.\r\n$test_clone = clone $test;&lt;/pre&gt;&lt;p&gt;&lt;br /&gt;&lt;/p&gt;', '1364537721');

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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_column
-- ----------------------------
INSERT INTO `la_column` VALUES ('1', '网站首页', '0', '1', '1', null, null, 'index', '1', 'Laugh CMS 内容管理系统', '', '', '', null, null, null, '1', '1356402068', '1359689666');
INSERT INTO `la_column` VALUES ('2', '新闻资讯', '0', '2', '1', '1', null, 'index', '2', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1356405490', '1363673576');
INSERT INTO `la_column` VALUES ('3', 'IT知识', '2', '2', '1', '1', null, 'index', '1', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1356406231', '1363856604');
INSERT INTO `la_column` VALUES ('4', '网络知识', '2', '2', '1', '1', null, 'index', '2', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1356414942', '1363856617');
INSERT INTO `la_column` VALUES ('5', '前端知识', '4', '2', '1', '1', null, 'index', '1', '', '', '', '', 'Article/index.html', 'Article/list.html', 'Article/body.html', '1', '1359689764', '1363856760');
INSERT INTO `la_column` VALUES ('6', '产品展示', '0', '6', '1', '6', null, 'index', '3', '', '', '', '', null, null, null, '1', '1359690256', '1359690256');
INSERT INTO `la_column` VALUES ('7', '客户案例', '0', '7', '1', '2', null, 'index', '4', '', '', '', '', null, null, null, '1', '1359690270', '1359690270');
INSERT INTO `la_column` VALUES ('8', '下载中心', '0', '8', '1', '3', null, 'index', '5', '', '', '', '', null, null, null, '1', '1359690280', '1359690280');
INSERT INTO `la_column` VALUES ('9', '招贤纳士', '0', '9', '1', '8', null, 'index', '6', '', '', '', '', null, null, null, '1', '1359690294', '1359690294');
INSERT INTO `la_column` VALUES ('10', '关于我们', '0', '10', '1', '9', null, 'AboutUS', '7', '', '', '', '&lt;p&gt;&lt;span class=&quot;text&quot;&gt; &amp;nbsp; &amp;nbsp;LaughCMS企业网站管理系统，是一款代码完全开源免费的PHP+MYSQL系统。&lt;/span&gt;&lt;span class=&quot;text&quot;&gt;&lt;/span&gt;&lt;/p&gt;&lt;p&gt;&lt;span class=&quot;text&quot;&gt; &amp;nbsp; &amp;nbsp;程序内置SEO优化机制，使企业网站更容易被推广。拥有企业网站常用的模块功能（企业简介模块、新闻模块、产品模块、下载模块、图片模块、招聘模块、在线留言、友情链接、会员与权限管理）。强大灵活的后台管理功能、静态页面生成功能、自定义模型功能、自制插件安装管理功能等可为企业打造出大气漂亮且具有营销力的精品网站&lt;/span&gt;&lt;br /&gt;&lt;/p&gt;', null, null, null, '1', '1359690307', '1364356336');
INSERT INTO `la_column` VALUES ('11', '联系我们', '0', '11', '1', '9', null, 'ContactUS', '8', '', '', '', '', null, null, null, '1', '1359690316', '1359690316');
INSERT INTO `la_column` VALUES ('12', 'PHP知识', '3', '2', '1', '1', null, 'index', '1', '', '', '', '', null, null, null, '1', '1364262577', '1364262577');
INSERT INTO `la_column` VALUES ('13', '数据库知识', '2', '2', '1', '1', null, 'index', '1', '', '', '', '', null, null, null, '1', '1364452588', '1364452588');

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
INSERT INTO `la_column_model` VALUES ('2', '图片模型', '图集模型', '0', '0', 'image', '', 'Image', null, null, null, '1', null);
INSERT INTO `la_column_model` VALUES ('3', '下载模型', '下载模型', '0', '0', 'download', '', 'Download', null, null, null, '1', null);
INSERT INTO `la_column_model` VALUES ('4', '专题模型', '专题模型', '0', '0', 'spec', '', 'Special', null, null, null, '1', '1363315175');
INSERT INTO `la_column_model` VALUES ('5', '软件模型', '', '0', '0', 'soft', '', 'Soft', null, null, null, '1', '1363315203');
INSERT INTO `la_column_model` VALUES ('6', '产品模型', '', '0', '0', 'product', '', 'Product', 'Product/index.html', 'Product/add.html', 'Product/edit.html', '1', '1363315247');
INSERT INTO `la_column_model` VALUES ('7', '分类信息模型', '', '0', '0', 'info', '', 'Info', null, null, null, '1', '1363315306');
INSERT INTO `la_column_model` VALUES ('8', '人才招聘模型', '', '0', '0', 'cooperate', '', 'Cooperate', null, null, null, '1', '1363597871');
INSERT INTO `la_column_model` VALUES ('9', '公共模型', '', '0', '0', 'public', '', 'Public', null, null, null, '1', '1363598752');

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
-- Table structure for `la_images`
-- ----------------------------
DROP TABLE IF EXISTS `la_images`;
CREATE TABLE `la_images` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `imagepath` varchar(100) NOT NULL,
  `imagetitle` varchar(100) DEFAULT NULL,
  `imagelink` varchar(100) DEFAULT NULL,
  `archiveid` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of la_images
-- ----------------------------

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
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=utf8;

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
INSERT INTO `la_node` VALUES ('42', '广告管理', '', '', '', '0', '5', '1364263938', '1364263938', '1');
INSERT INTO `la_node` VALUES ('43', '顶部广告', '', 'Advertise', 'TopAd', '42', '0', '1364263985', '1364263985', '1');
INSERT INTO `la_node` VALUES ('44', '首页中部banner', '', 'Advertise', 'HomeCenterAd', '42', '0', '1364264199', '1364264199', '1');
INSERT INTO `la_node` VALUES ('45', '图片管理', '', '', '', '0', '3', '1364265992', '1364265992', '1');
INSERT INTO `la_node` VALUES ('46', '首页轮播图片', '', 'Image', 'HomeScrollImage', '45', '0', '1364266173', '1364266173', '1');

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
  `instruction` varchar(2000) DEFAULT NULL,
  `updatetime` int(10) DEFAULT NULL,
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
