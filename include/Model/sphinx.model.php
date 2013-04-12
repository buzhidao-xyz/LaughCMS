<?php
/**
 * sphinx数据检索模型 全文检索
 * by wbq 2012-02-29
 */
class Sphinx extends SphinxClient
{
	private $_class_name = "Sphinx Model";

	/**
	 * 中文字符串 - 作为被分词的对象
	 */
	private $_string = '';

    /**
     * 需要被过滤的标点符号
     */
	private $_marks = array(",", "/", "\\", ".", ";", ":", "\"", "!", "~", "`", "^", "(", ")", "?", "-", "\t", "\n", "'", "<", ">", "\r", "\r\n", "{1}quot;", "&", "%", "#", "@", "+", "=", "{", "}", "[", "]", "：", "）", "（", "(", ")", "．", "。", "，", "！", "；", "“", "”", "‘", "’", "［", "］", "、", "—", "　", "《", "》", "－", "…", "【", "】",);

	public function __construct()
	{
        parent::__construct();
    }

    /**
     * 根据查询字符串查询全文索引表
     * @param $string 搜索字符串
     */
    public function _getFT($string)
    {
        $gbstr = '';

        $this->_setString($string);
        $word = $this->spString2();

        foreach ($word as $w) {
            if ($gbstr) {
                $gbstr .= " ".$this->gbCode($w);
            } else {
                $gbstr = $this->gbCode($w);
            }
        }
        
        $res = Table('article_index')->fulltext('title,link', 'sindex', $gbstr)->limit(0,5)->find(1);

        return is_array($res)&&!empty($res) ? $res : array();
    }

    /**
     * 将采集到的标题跟链接经过分词转区位码之后入库
     * @param $data 采集到的数据array($title,$link)
     */
	public function _push($data)
    {
        foreach ($data as $string) {
            $gbstr = '';
            $this->_setString($string[0]);

            $word = $this->spString2();

            foreach ($word as $w) {
                if ($gbstr) {
                    $gbstr .= " ".$this->gbCode($w);
                } else {
                    $gbstr = $this->gbCode($w);
                }
            }

            $record[] = array('title'=>$string[0], 'link'=>$string[1], 'sindex'=>$gbstr);
        }

        $return = Table('article_index')->insert($record,1);
        return $return?'OK':'FALSE';
    }

    private function _setString($string)
    {
        $this->_string = $string;
    }
	
	/**
	 * 中文二元分词方法 UTF-8编码
	 */
	private function spString2()
	{
		$str = $this->_string;
		$cstr = array();
	  
		$str = str_replace($this->_marks, " ", $str);  
		preg_match_all("/[a-zA-Z]+/", $str, $estr);  
		preg_match_all("/[0-9]+/", $str, $nstr);  
	  
		$str = preg_replace("/[0-9a-zA-Z]+/", " ", $str);  
		$str = preg_replace("/\s{2,}/", " ", $str);  
	  
		$str = explode(" ", trim($str));  
	  
		foreach ($str as $s) {  
			$l = strlen($s);  
	  
			$bf = null;  
			for ($i= 0; $i< $l; $i=$i+3) {  
				$ns1 = $s{$i}.$s{$i+1}.$s{$i+2};  
				if (isset($s{$i+3})) {  
					$ns2 = $s{$i+3}.$s{$i+4}.$s{$i+5};  
					if (preg_match("/[\x80-\xff]{3}/",$ns2)) $cstr[] = $ns1.$ns2;  
				} else if ($i == 0) {  
					$cstr[] = $ns1;  
				}  
			}  
		}  
	  
		$estr = isset($estr[0])?$estr[0]:array();  
		$nstr = isset($nstr[0])?$nstr[0]:array();  
	  
		return array_merge($nstr,$estr,$cstr); 
	}

	/**
	 * 中文转区位码方法 GB2312编码
	 * @param $str 中文词元
	 */
	private function gbCode($str)
	{
		$return = null;
  
        if (!preg_match("/^[\x80-\xff]{2,}$/",$str)) return $str;

        $str = iconv('UTF-8', 'GB2312', $str);
	  
		$len = strlen($str);
		for ($i= 0; $i< $len; $i=$i+2) {
			$return .= sprintf("%02d%02d",ord($str{$i})-160,ord($str{$i+1})-160);
		}

		return $return;
	}
}
