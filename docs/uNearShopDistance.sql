-- ----------------------------------------------------------------
-- UNearShopDistance
-- @param lat 纬度
-- @param lng 经度
-- @return  DISTANCE 距离(KM)
-- 计算两个经纬度坐标之间的距离
-- baoqing wang 
-- 2013-11-08
-- ----------------------------------------------------------------
DELIMITER $$
DROP FUNCTION IF EXISTS `mishiwang`.`uNearShopDistance` $$
CREATE FUNCTION `mishiwang`.`uNearShopDistance`(Lat1 DOUBLE(10,6),Lng1 DOUBLE(10,6),Lat2 DOUBLE(10,6),Lng2 DOUBLE(10,6)) RETURNS DOUBLE(10,6)
BEGIN

#赤道半径 6378.137KM
set @EARTH_RADIUS = 6378.137;

set @DISTANCE = 2 * @EARTH_RADIUS * ASIN(SQRT(POW(SIN(PI() * (Lat1-Lat2)/360),2) + COS(PI() * Lat1/180) * COS(Lat2*PI()/180) * POW(SIN(PI() * (Lng1-Lng2)/360),2)));

RETURN @DISTANCE;

END $$
DELIMITER;