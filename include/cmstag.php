<?php
/**
 * CMS触发标签解析 自定义函数注册到Smarty模板
 * by wbq 2013-05-15
 */

/**
 * 获取某个栏目下的文档列表
 * @param int $columnid 栏目id
 */
function CMSTagArchive($params=array(),$content=null,&$smarty,&$repeat)
{
	if (!isset($params['columnid'])) return false;
	$html = null;

	extract($params);
	$columnid = isset($columnid) ? $columnid : null;
	$ArticleList = D("Archive")->getAllArchive($columnid,5);
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