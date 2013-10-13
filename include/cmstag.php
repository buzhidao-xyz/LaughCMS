<?php
/**
 * CMS触发标签解析 自定义函数注册到Smarty模板
 * by wbq 2013-05-15
 */

/*********************************block标签*********************************/

/**
 * 获取某个栏目下的文档列表
 * @param int $columnid 栏目id
 */
function CMSTagArchive($params=array(),$content=null,&$smarty,&$repeat)
{
	if (!isset($params['columnid'])) return false;

	//释放数组变量
	extract($params);

	//设置要获取的文档数目 默认5
	$number = isset($number) ? $number : 5;

	$html = null;
	$columnid = isset($columnid) ? $columnid : null;
	$ArticleList = D("Archive")->getAllArchive($columnid,$number);
	if (!empty($ArticleList['data'])) {
		foreach ($ArticleList['data'] as $d) {
			$search = array(
		    	'[field.columnid]','[field.id]','[field.title]'
		    );
		    $replace = array(
		    	$d['columnid'],$d['id'],$d['title']
		    );
		    $html .= str_replace($search, $replace, $content);
		}
	}

	if(!$repeat) return $html;
}

/**
 * 获取专题列表
 * @param int $columnid 栏目id
 * @param string orderby 排序字段
 * @param string orderway 排序方式
 * @param string number 数量
 */
function CMSTagTopic($params=array(),$content=null,&$smarty,&$repeat)
{
	if (!isset($params['columnid'])) return false;

	//释放数组变量
	extract($params);

	$html = null;
	//设置要获取的文档数目 默认3
	$number = isset($number) ? $number : 3;

	//构造where条件数组
	$where = array();
	$columnid = isset($columnid) ? $columnid : null;
	$orderby = isset($orderby) ? $orderby : "publishtime";
	$orderway = isset($orderway) ? $orderway : "asc";
	$ArchiveList = D("Archive")->getAllArchive($columnid,$number,$orderby,$orderway);
	if (!empty($ArchiveList['data'])) {
		foreach ($ArchiveList['data'] as $d) {
			//获取专题内容
			$TopicInfo = M("Topic")->getTopicContent($d['id']);
			$TopicInfo = $TopicInfo[0];

			$search = array(
		    	'[field.columnid]','[field.id]','[field.title]','[field.thumbimage]','[field.content]'
		    );
		    $replace = array(
		    	$d['columnid'],$d['id'],$d['title'],$d['thumbimage'],html_entity_decode($TopicInfo['content'])
		    );
		    $html .= str_replace($search, $replace, $content);
		}
	}

	if(!$repeat) return $html;
}

/**
 * 获取导航
 * @param int $flag 导航位置 1:底部导航 2:右侧导航
 */
function CMSTagNavigation($params=array(),$content=null,&$smarty,&$repeat)
{
	if (!isset($params['flag'])) return false;
	extract($params);

	$html = null;
	$where = array(
		'flag' => $flag
	);
    $result = T("navigation")->where($where)->order('createtime','desc')->select();
    if (is_array($result)&&!empty($result)) {
    	foreach ($result as $d) {
			$search = array(
		    	'[field.title]','[field.link]'
		    );
		    $replace = array(
		    	$d['title'],$d['title']
		    );
		    $html .= str_replace($search, $replace, $content);
		}
    }

	if(!$repeat) return $html;
}

/*********************************function标签*********************************/

/**
 * 广告标签解析
 * @param string $flag 广告位置 1:首页中部 2:栏目页顶部
 * @param html $html 解析的html模板
 */
function CMSTagAdvertise($params=array())
{
	if (!isset($params['flag'])) return false;
	extract($params);

    $where = array(
    	'flag' => $flag,
    	'status' => 1
    );
    $result = T("advertise")->where($where)->order('createtime','desc')->select();
    $result = $result[array_rand($result)];

    $search = array(
    	'[field.link]','[field.path]'
    );
    $replace = array(
    	$result['link'],__APP__.$result['path']
    );
    $html = str_replace($search, $replace, $html);
    
    return $html;
}