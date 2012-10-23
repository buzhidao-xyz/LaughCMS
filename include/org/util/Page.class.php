<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------
// $Id: Page.class.php 2712 2012-02-06 10:12:49Z liu21st $

class Page {
    // 分页栏每页显示的页数
    public $rollPage = 10;
    // 页数跳转时要带的参数
    public $parameter  ;
    // 默认列表每页显示行数
    public $listRows = 20;
    // 起始行数
    public $firstRow	;
    // 分页总页面数
    protected $totalPages  ;
    // 总行数
    protected $totalRows  ;
    // 当前页数
    protected $nowPage    ;
    // 分页的栏的总页数
    protected $coolPages   ;
    // 分页显示定制
    protected $config  =	array('header'=>'条记录','prev'=>'上一页','next'=>'下一页','first'=>'第一页','last'=>'最后一页','theme'=>' %totalRow% %header% %nowPage%/%totalPage% 页 %upPage% %downPage% %first%  %prePage%  %linkPage%  %nextPage% %end%');
    // 默认分页变量名
    protected $varPage;

    protected $_header_need = 0;

    /**
     +----------------------------------------------------------
     * 架构函数
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     * @param array $totalRows  总的记录数
     * @param array $listRows  每页显示记录数
     * @param array $parameter  分页跳转的参数
     +----------------------------------------------------------
     */
    public function __construct($totalRows,$listRows='',$parameter='') {
        $this->totalRows = $totalRows;
        $this->parameter = empty($parameter) ? '' : $parameter;
        $this->varPage = C('VAR_PAGE') ? C('VAR_PAGE') : 'page' ;
        if(!empty($listRows)) {
            $this->listRows = intval($listRows);
        }
        $this->totalPages = ceil($this->totalRows/$this->listRows);     //总页数
        $this->coolPages  = ceil($this->totalPages/$this->rollPage);
        $this->nowPage  = !empty($_GET[$this->varPage])?intval($_GET[$this->varPage]):1;
        if(!empty($this->totalPages) && $this->nowPage>$this->totalPages) {
            $this->nowPage = $this->totalPages;
            $this->_header_need = 1;
        }
        $this->firstRow = $this->listRows*($this->nowPage-1);
    }

    public function setConfig($name,$value) {
        if(isset($this->config[$name])) {
            $this->config[$name]    =   $value;
        }
    }

    /**
     +----------------------------------------------------------
     * 分页显示输出html
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     */
    public function show() {
        if(0 == $this->totalRows) return '';
        $p = $this->varPage;
        $nowCoolPage      = ceil($this->nowPage/$this->rollPage);
        $url  =  $_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'],'?')?'':"?").$this->parameter;
        $parse = parse_url($url);
        if(isset($parse['query'])) {
            parse_str($parse['query'],$params);
            unset($params[$p]);
            $url   =  $parse['path'].'?'.http_build_query($params);
        }
        //上下翻页字符串
        $upRow   = $this->nowPage-1;
        $downRow = $this->nowPage+1;
        if ($upRow>0){
            $upPage="<a href='".$url."&".$p."=$upRow'>".$this->config['prev']."</a>";
        }else{
            $upPage="";
        }

        if ($downRow <= $this->totalPages){
            $downPage="<a href='".$url."&".$p."=$downRow'>".$this->config['next']."</a>";
        }else{
            $downPage="";
        }
        // << < > >>
        if($nowCoolPage == 1){
            $theFirst = "";
            $prePage = "";
        }else{
            $preRow =  $this->nowPage-$this->rollPage;
            $prePage = "<a href='".$url."&".$p."=$preRow' >上".$this->rollPage."页</a>";
            $theFirst = "<a href='".$url."&".$p."=1' >".$this->config['first']."</a>";
        }
        if($nowCoolPage == $this->coolPages){
            $nextPage = "";
            $theEnd="";
        }else{
            $nextRow = $this->nowPage+$this->rollPage;
            $theEndRow = $this->totalPages;
            $nextPage = "<a href='".$url."&".$p."=$nextRow' >下".$this->rollPage."页</a>";
            $theEnd = "<a href='".$url."&".$p."=$theEndRow' >".$this->config['last']."</a>";
        }
        // 1 2 3 4 5
        $linkPage = "";
        for($i=1;$i<=$this->rollPage;$i++){
            $page=($nowCoolPage-1)*$this->rollPage+$i;
            if($page!=$this->nowPage){
                if($page<=$this->totalPages){
                    $linkPage .= "&nbsp;<a href='".$url."&".$p."=$page'>&nbsp;".$page."&nbsp;</a>";
                }else{
                    break;
                }
            }else{
                if($this->totalPages != 1){
                    $linkPage .= "&nbsp;<span class='current'>".$page."</span>";
                }
            }
        }
        $pageStr	 =	 str_replace(
            array('%header%','%nowPage%','%totalRow%','%totalPage%','%upPage%','%downPage%','%first%','%prePage%','%linkPage%','%nextPage%','%end%'),
            array($this->config['header'],$this->nowPage,$this->totalRows,$this->totalPages,$upPage,$downPage,$theFirst,$prePage,$linkPage,$nextPage,$theEnd),$this->config['theme']);
        return $pageStr;
    }

    /**
     +----------------------------------------------------------
     * 分页显示输出数组
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     */
    public function showRes() {
        if(0 == $this->totalRows) return '';
        $p = $this->varPage;
        $nowCoolPage = ceil($this->nowPage/$this->rollPage);
        $url  =  $_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'],'?')?'':"?").$this->parameter;
       
        $parse = parse_url($url);
        if(isset($parse['query'])) {
            parse_str($parse['query'],$params);
            unset($params[$p]);
            $url   =  $parse['path'].'?'.http_build_query($params);
        }
        ($params) && $url .= "&";
        
        $result = array(
//        				'firstpage' => 	array('row' => '1', 'href' => $url.$p."=1"),
//        				'endpage' 	=> 	array('row' => $this->totalPages, 'href' => $url.$p."=".$this->totalPages),
        				'prev' 		=> 	array('row' => '', 'href' => ''),
        				'next' 		=> 	array('row' => '', 'href' => ''),
//        				'prevXpage' => 	array('row' => '', 'href' => ''),
//        				'nextXpage' => 	array('row' => '', 'href' => ''),
        				'page' 		=>	array(),
        				);
        /**
         * upRow 上一页
         * downRow 下一页
         */
        $upRow   = $this->nowPage-1;
        $downRow = $this->nowPage+1;

        if ($upRow>0) $result['prev'] = array('row' => $upRow, 'href' => $url.$p."=".$upRow);

        if ($downRow <= $this->totalPages) $result['next'] = array('row' => $downRow, 'href' => $url.$p."=".$downRow);

        /**
         * 前$rollPage 页
         * 如果$nowCoolPage为1，就说明当前页在rollPage页之间
         */
//        if($nowCoolPage != 1){
//        	$result['prevXpage'] = array('row' => $this->rollPage, 'href' => $url.$p."=".($this->nowPage-$this->rollPage));
//        }
        /**
         * 后$rollPage 页
         * 如果$nowCoolPage == $this->coolPages，则在最后$rollPage页
         */
//        if($nowCoolPage != $this->coolPages){
//            $result['nextXpage'] = array('row' => $this->rollPage, 'href' => $url.$p."=".($this->nowPage + $this->rollPage));
//        }
        // 1 2 3 4 5
        $linkPage = "";
        for($i=1;$i<=$this->rollPage;$i++){
            $page=($nowCoolPage-1)*$this->rollPage+$i;
            if($page!=$this->nowPage){
                if($page<=$this->totalPages){
                	$result['page'][$page] = $url.$p."=".$page;
                }else{
                    break;
                }
            }else{
                $result['page'][$page] = '';
            }
        }
        $result['totalpage'] = $this->totalPages;
        return $result;
    }
    /**
     +----------------------------------------------------------
     * 分页显示输出数组 for 后台使用
     +----------------------------------------------------------
     * @access public
     +----------------------------------------------------------
     */
    public function showResForBackstage() {
        if(0 == $this->totalRows) return '';
        $p = $this->varPage;
        $this->rollPage = 11;
        $nowCoolPage = ceil($this->nowPage/$this->rollPage);
        $parameter = '';
        if (is_array($parameter)) {
            foreach ($this->parameter as $k=>$v) {
                $parameter .= '&'.$k.'='.$v;
            }
        }
        $url  =  $_SERVER['REQUEST_URI'].(strpos($_SERVER['REQUEST_URI'],'?')?'':"?").$parameter;

        $parse = parse_url($url);
        if(isset($parse['query'])) {
            parse_str($parse['query'],$params);
            unset($params[$p]);
            $url   =  $parse['path'].'?'.http_build_query($params);
        }
        ($params) && $url .= "&";
        
        $result = array(
        				'firstpage' => 	array('row' => '1', 'href' => $url.$p."=1"),
        				'endpage' 	=> 	array('row' => $this->totalPages, 'href' => $url.$p."=".$this->totalPages),
        				'prev' 		=> 	array('row' => '', 'href' => ''),
        				'next' 		=> 	array('row' => '', 'href' => ''),
//        				'prevXpage' => 	array('row' => '', 'href' => ''),
//        				'nextXpage' => 	array('row' => '', 'href' => ''),
        				'page' 		=>	array(),
        				);
        /**
         * upRow 上一页
         * downRow 下一页
         */
        $upRow   = $this->nowPage-1;
        $downRow = $this->nowPage+1;

        if ($upRow>0) $result['prev'] = array('row' => $upRow, 'href' => $url.$p."=".$upRow);

        if ($downRow <= $this->totalPages) $result['next'] = array('row' => $downRow, 'href' => $url.$p."=".$downRow);

        /**
         * 前$rollPage 页
         * 如果$nowCoolPage为1，就说明当前页在rollPage页之间
         */
//        if($nowCoolPage != 1){
//        	$result['prevXpage'] = array('row' => $this->rollPage, 'href' => $url.$p."=".($this->nowPage-$this->rollPage));
//        }
        /**
         * 后$rollPage 页
         * 如果$nowCoolPage == $this->coolPages，则在最后$rollPage页
         */
//        if($nowCoolPage != $this->coolPages){
//            $result['nextXpage'] = array('row' => $this->rollPage, 'href' => $url.$p."=".($this->nowPage + $this->rollPage));
//        }
        // 1 2 3 4 5
        $linkPage = "";
        for($i=1;$i<=$this->totalPages;$i++) {
        	$parr[] = $i;
        }
        $yu = $this->totalPages - $this->nowPage;
        if($this->nowPage >6 && $yu > 4) {
        	$newparr = array_slice($parr, array_search(($this->nowPage-5),$parr),11);
        } else if($this->nowPage >6 && $yu <= 4) {
        	$newparr = array_slice($parr, -11);
        } else if($this->nowPage <=6) {
        	$newparr = array_slice($parr, 0, 11);
        }
    	for($i=$newparr[0];$i<=$newparr[count($newparr)-1];$i++){
	        $result['page'][$i] = ($i!=$this->nowPage) ? ($url.$p."=".$i) : '';
	    }
	    $result['totalpage'] = $this->totalPages;
        if ($this->_header_need) header("location:".$result['endpage']['href']);
       	return $result;
    }
}