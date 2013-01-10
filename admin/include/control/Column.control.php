<?php
/**
 * 网站栏目管理器
 * by buzhidao 2012-11-19
 */
class ColumnControl extends CommonControl
{
	public function __construct()
	{
		parent::__construct();
	}

	//获取栏目ID
	private function _getColumnID()
	{
		$columnid = q('columnid');

		return $columnid;
	}

	private function _getparentid()
	{
		$parentid = q("parentid");
		return $parentid;
	}

	private function _getColumnName()
	{
		$columnname = q("columnname");
		if (!$columnname) return false;
		return $columnname;
	}

	private function _getsortrank()
	{
		$sortrank = q("sortrank");
		if (!$sortrank) return false;
		return $sortrank;
	}

	private function _getcolumntype()
	{
		$columntype = q("columntype");
		return $columntype;
	}

	private function _getisshow()
	{
		$isshow = q("isshow");
		return $isshow;
	}

	private function _gettitle()
	{
		$title = q("title");
		return $title;
	}

	private function _getkeyword()
	{
		$keyword = q("keyword");
		return $keyword;
	}

	private function _getdescription()
	{
		$description = q("description");
		return $description;
	}

	private function _getcontent()
	{
		$content = q("content");
		return $content;
	}

	/**
	 * 获取最顶级父栏目的栏目ID
	 */
	private function getTopID($parentid)
	{
		$topid = 0;
		if ($parentid) {
			$columnInfo = M("Column")->getColumn($parentid);
			if ($columnInfo[0]['parentid'] == 0) {
				return $parentid;
			} else {
				return $this->getTopID($columnInfo[0]['parentid']);
			}
		}

		return $topid;
	}

	//主入口
	public function index()
	{
		$columnList = M("Column")->getTopColumn();
		$this->assign("dataList",$columnList);
		$this->display("Column/column.html");
	}

	//添加栏目
	public function newColumn()
	{
		$this->assign("columnTree", $this->getColumnTree());
		$this->display("Column/newcolumn.html");
	}

	//保存栏目信息
	public function saveColumn()
	{
		$columnname  = $this->_getColumnName();
		$parentid    = $this->_getparentid();
		$sortrank    = $this->_getsortrank();
		$columntype  = $this->_getcolumntype();
		$isshow      = $this->_getisshow();
		$title       = $this->_gettitle();
		$keyword     = $this->_getkeyword();
		$description = $this->_getdescription();
		$content     = $this->_getcontent();

		$topid = $this->getTopID($parentid);

		$data = array(
			'columnname'  => $columnname,
			'parentid'    => $parentid,
			'topid'       => $topid,
			'sortrank'    => $sortrank,
			'columntype'  => $columntype,
			'isshow'      => $isshow,
			'title'       => $title,
			'keyword'     => $keyword,
			'description' => $description,
			'content'     => $content,
			'createtime'  => TIMESTAMP,
			'updatetime'  => TIMESTAMP
		);

		$return = M("Column")->addColumn($data);
		if ($return) {
			$this->display("Common/success.html");
		} else {
			$this->display("Common/error.html");
		}
	}

	//获取栏目树
	public function getColumnTree()
	{
		$data = M("Column")->getTopColumn();

		$dataTree  = null;
        $dataTree .= '<option value="">|-请选择栏目...</option>';
        if (is_array($data) && !empty($data)) {
	        foreach ($data as $v) {
	            $dataTree .= '<option value="'.$v['id'].'">&nbsp;&nbsp;|-'.$v['columnname'].'</option>';
	            $dataTree .= $this->getSubColumnTree($v['id'],2);
	        }
	    }

		return $dataTree;
	}

	//获取子栏目树
	public function getSubColumnTree($columnid=null,$depth=0)
	{
		if (!$columnid) return null;
		$nbsp = array_fill(0, $depth, "&nbsp;&nbsp;");
		$data = M("Column")->getSubColumn($columnid);

		$dataTree  = null;
        if (is_array($data) && !empty($data)) {
	        foreach ($data as $v) {
	            $dataTree .= '<option value="'.$v['id'].'" >'.implode($nbsp,"").'|-'.$v['columnname'].'</option>';
	            $dataTree .= $this->getSubColumnTree($v['id'],$depth+1);
	        }
	    }

		return $dataTree;
	}

	//AJAX获取子栏目
	public function getSubColumn()
	{
		$columnid = $this->_getColumnID();
		if (!FilterHelper::C_Int($columnid)) $this->ajaxReturn(1,'栏目ID错误！');
		$data = M("Column")->getSubColumn($columnid);

		$dataTree  = null;
        if (is_array($data) && !empty($data)) {
	        foreach ($data as $v) {
	        	$isshow = $v['isshow']==1 ? '<font color="green"></font>' : '<font color="red">[隐]</font>';
	        	$dataTree .= '<div class="ul columnlistd">
								<div class="li columnplusmius columnplus" columnid="'.$v['id'].'"></div>
								<div class="li columnListd700" flag="columnTableList">
									<a href="'.__APP__.'/index.php?s=Column/columnContent">'.$v['columnname'].'</a>
									'.$isshow.'
								</div>
								<div class="li columnListd300" flag="columnTableList">
									<a href="javascript:;">预览</a> |
									<a href="javascript:;">栏目文档</a> |
									<a href="javascript:;">增加子栏目</a> |
									<a href="javascript:;">编辑</a> |
									<a delurl="'.__APP__.'/index.php?s=Column/deleteColumn&columnid='.$v['id'].'" href="javascript:;" name="del" msg="确定删除该栏目吗？">删除</a>
								</div>
							</div>';
	        }
	        $dataTree .= '<div class="ul columnSubList"></div>';
	    }
	    $this->ajaxReturn(0,1,$dataTree);
	}

	public function columnContent()
	{
		$columnid = $this->_getColumnID();
	}

	//删除栏目
	public function deleteColumn()
	{
		$columnid = $this->_getColumnID();
		if (!$columnid) $this->ajaxReturn(1,"栏目ID错误！");

		if (T("Column")->where(array("parentid"=>$columnid))->count())
			$this->ajaxReturn(1,"删除失败！该栏目非空！");

		$return = M("Column")->delete($columnid);
		if ($return) {
			$this->ajaxReturn(0,"删除成功！");
		} else {
			$this->ajaxReturn(1,"删除失败！");
		}
	}
}