<?php
/**
 * 全文检索控制器 sphinx
 * by leecen 2012-2-29 
 */
class SearchControl extends CommonControl
{
	/**
	 * 控制器名
	 */
    static private $_class_name = 'Search Control';

    static private $_sphinx = null;

	public function __construct()
	{
        self::$_sphinx = new Sphinx();
    }

    /**
     * 主搜索程序 调用sphinx模型里_getFT方法
     */
    static public function index()
    {
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        $search = iconv('GB2312', 'UTF-8', $search);

        $begin_time = microtime();
        $res = self::$_sphinx->_getFT($search);
        $end_time = microtime();

        echo "<p>搜索字符串：".$search."</p><p>执行时间：".runtime($begin_time, $end_time)."S</p><p>搜索结果：</p>";
        if (!empty($res)) {
            foreach ($res as $v) {
                echo "<p><a href=".$v['link'].">".$v['title']."</a></p>";
            }
        } else {
            echo '结果为空！';
        }
    }

    /**
     * 调用sphinx进行索引查询
     */
    static public function sindex()
    {
        $search = isset($_GET['search']) ? $_GET['search'] : '';
        //$search = iconv('GB2312', 'UTF-8', $search);

        //设置连接Sphinx主机名与端口
        self::$_sphinx->setServer('localhost', 9312);

        //可选，为每一个全文检索字段设置权重，主要根据你在sql_query中定义的字段的顺序，Sphinx系统以后会调整，可以按字段名称来设定权重
        self::$_sphinx->SetWeights(array(100, 1));

        //设定搜索模式,SPH_MATCH_ALL,SPH_MATCH_ANY,SPH_MATCH_BOOLEAN,SPH_MATCH_EXTENDED,SPH_MATCH_PHRASE
        self::$_sphinx->SetMatchMode(SPH_MATCH_ALL);

        /**
         * 设定过滤条件
         * $attribute 属性名，相当于字段名（用SPH_MATCH_EXTENDED时）
         * $value 值
         * $exclude是布尔型，当为true时，相当于$attribute!=$value，默认值是false
         */
        //self::$_sphinx->SetFilter($attribute, $values, $exclude);

        /**
         * 设定group by
         * 根据分组方法，匹配的记录集被分流到不同的组，每个组都记录着组的匹配记录数以及根据当前排序方法本组中的最佳匹配记录。
         * 最后的结果集包含各组的一个最佳匹配记录，和匹配数量以及分组函数值
         * 结果集分组可以采用任意一个排序语句，包括文档的属性以及sphinx的下面几个内部属性
         * @id--匹配文档ID
         * @weight, @rank, @relevance--匹配权重
         * @group--group by 函数值
         * @count--组内记录数量
         * $groupsort的默认排序方法是@group desc，就是按分组函数值大小倒序排列
         */
        //self::$_sphinx->SetGroupBy($attribute, $func, $groupsort);

        /**
         * 设定order by的内容，第一个参数是排序方法名，值有
         * SPH_SORT_RELEVANCE,SPH_SORT_ATTR_DESC,SPH_SORT_ATTR_ASC,SPH_SORT_TIME_SEGMENTS,SPH_SORT_EXTENDED
         * $sortby的值如"HITS desc"
         */
        //self::$_sphinx->SetSortMode(SPH_SORT_EXTENDED, $sortby);

        //set count-distinct attribute for group-by queries,$distinct为字符串
        //self::$_sphinx->SetGroupDistinct($distinct);

        //$start 开始值 $offset 偏移量
        //self::$_sphinx->SetLimits($start,$offset)
        
        $begin_time = microtime();
        $res = self::$_sphinx->query($search,'laugh');
        $end_time = microtime();
        echo "<pre>";print_r($res);exit;
        echo "<p>搜索字符串：".$search."</p><p>执行时间：".runtime($begin_time, $end_time)."S</p><p>搜索结果：</p>";
        if (!empty($res)) {
            foreach ($res as $v) {
                echo "<p><a href=".$v['link'].">".$v['title']."</a></p>";
            }
        } else {
            echo '结果为空！';
        }
    }

    /**
     * 采集程序 博客标题和链接信息
     */
	static public function pick()
	{
		$host = "http://blog.csdn.net";
		$blog = "luochuan/article/list/2";

        $pickExp = "/<a href=\"([\/0-9a-z]+)\">\s(([^<.]|\.)+)<\/a>/";
		$content = file_get_contents($host."/".$blog);

        preg_match_all($pickExp, $content, $link);
        foreach ($link[2] as $l=>$d) {
            $pagedata[] = array($d,$host.$link[1][$l]);
        }

        //self::_push($pagedata);
	}

    /**
     * 入库方法调用
     */
	static private function _push($data)
	{
        self::$_sphinx->_push($data);
    }

    /**
     * 循环设置article_index表的article_id
     */
    static public function upartid()
    {
        for ($i= 1; $i<= 30; $i++) {
            Table('article_index')->update(array('article_id' => $i))->where(array(array('id', $i)))->exec();
        }
    }
}
