--
-- Version: 1.1 Mysql SQL
-- DO NOT modify this file
--
-- Create: 2013-09-24 13:46:05
--

-- ----------------------------
-- Records of *_system
-- ----------------------------
UPDATE `pre_system` SET `cfgtime`=1368437340 WHERE `cfgname`='host';
UPDATE `pre_system` SET `cfgtime`=1368437340 WHERE `cfgname`='sitename';
UPDATE `pre_system` SET `cfgtime`=1368437340 WHERE `cfgname`='keywords';
UPDATE `pre_system` SET `cfgtime`=1368437340 WHERE `cfgname`='admin_path';

-- 
-- 更新system表版本号Version字段
--
UPDATE `pre_system` SET `cfgvalue`=1.1 WHERE `cfgname`='Version';