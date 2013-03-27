<?php
/**
 * 文章控制器
 * by buzhidao 2012-12-26
 */
class ArticleControl extends CommonControl
{
	//控制器名
	static protected $_Control = "Article";

	public function __construct()
	{
		parent::__construct();
	}

	private function _getArticleID()
	{
		$articleid = q("articleid");

		return $articleid;
	}

	private function _getTitle()
	{
		$title = q("title");

		return $title;
	}

	private function _getTag()
	{
		$tag = q("tag");

		return $tag;
	}

	private function _getsource()
	{
		$source = q("source");

		return $source;
	}

	private function _getauthor()
	{
		$author = q("author");

		return $author;
	}

	private function _getcolumnid()
	{
		$columnid = q("columnid");

		return $columnid;
	}

	private function _getpublishtime()
	{
		$publishtime = q("publishtime");
		$publishtime = explode(" ", $publishtime);
		$publishtime1 = explode("-", $publishtime[0]);
		$publishtime2 = explode(":", $publishtime[1]);
		$publishtime = mktime($publishtime2[0],$publishtime2[1],$publishtime2[2],$publishtime1[1],$publishtime1[2],$publishtime1[0]);

		return $publishtime;
	}

	private function _getstatus()
	{
		$status = q("status");

		return $status;
	}

	private function _getseotitle()
	{
		$seotitle = q("seotitle");

		return $seotitle;
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

	private function _getImage()
	{
		$upload = new UploadHelper();
		$upload->maxSize  = 2097152; //2M
		$upload->savePath =  C("UPLOAD_PATH")."/Image/".date("Ym/d/");
		if(!$upload->upload()) {
			return false;
		} else {
			$info = $upload->getUploadFileInfo();
			$url = str_replace(ROOT_DIR, "", $info[0]['savepath'].$info[0]['savename']);
			return $url;
		}
	}

	//主控制 文档列表
	public function index()
	{
		$where = array('state'=>1);
		$columnid = q("columnid");
		if ($columnid) {
			$columnids = M("Column")->getSubColumnID($columnid);
			$columnids[] = $columnid;
			$where['columnid'] = array('in', $columnids);
		}

		list($start,$length) = $this->getPages();
        $articleList = M("Article")->getArticle(null,$start,$length,$where);
        $this->assign("total", $articleList['total']);
        $this->assign("dataList", $articleList['data']);

        $this->assign("page", getPage($articleList['total'],$this->_pagesize));
		$this->display("Article/index.html");
	}

	//新文档
	public function add()
	{
		$this->assign("accessStatus",1);
		$this->assign("timestamp",TIMESTAMP);
		$this->assign("userInfo",$this->userInfo);
		$this->assign("columnTree", D("Column")->getColumnTree(self::$_Control));
		$this->display("Article/add.html");
	}

	/**
	 * 处理前端提交过来的文章信息
	 * @param array $filter 被过滤的字段 不需要更新的
	 */
	private function dealArticleSubmit($filter=array())
	{
		$title = $this->_getTitle();
		$tag = $this->_getTag();
		$source = $this->_getsource();
		$author = $this->_getauthor();
		$columnid = $this->_getcolumnid();
		$status = $this->_getstatus();
		$seotitle = $this->_getseotitle();
		$keyword = $this->_getkeyword();
		$description = $this->_getdescription();
		$image = $this->_getImage();

		$data = array(
			'title' => $title,
			'author'=> $this->userInfo['username'],
			'tag'   => $tag,
			'source'   => $source,
			'author'   => $author,
			'columnid' => $columnid,
			'status'   => $status,
			'seotitle' => $seotitle,
			'keyword'  => $keyword,
			'description' => $description,
			'updatetime'  => TIMESTAMP
		);
		if ($image) $data['thumbimage'] = $image;

		if (!in_array("publishtime", $filter)) $data['publishtime'] = $this->_getpublishtime();

		return $data;
	}

	/**
	 * 保存文档入库
	 * @param $title string 文章标题 必须
	 */
	public function saveArticle()
	{
		$data = $this->dealArticleSubmit();
		$articleid = M('Article')->saveArticle($data);
		if ($articleid) {
			$content = $this->_getcontent();
			$arcdata = array(
				'articleid' => $articleid,
				'content'   => $content,
				'updatetime' => TIMESTAMP
			);
			$return = M('Article')->saveArticleContent($arcdata);
			if ($return) {
				$NextOperation = array(
					array('name'=>'查看修改', 'link'=>__APP__.'/index.php?s=Article/upArticle&articleid='.$articleid)
				);
				$this->assign("NextOperation", $NextOperation);
				$this->display("Common/success.html");
			} else {
				$this->display("Common/error.html");
			}
		} else {
			$this->display("Common/error.html");
		}
	}

	//更新文档信息
	public function upArticle()
	{
		$this->assign("accessStatus", 1);

		$articleID = $this->_getArticleID();
		$articleInfo = M("Article")->getArticle($articleID);
		$articleInfo = !empty($articleInfo['data']) ? $articleInfo['data'][0] : array();

		if (empty($articleInfo)) $this->display("Common/error.html");

		$articleInfo['content'] = M("Article")->getArticleContent($articleInfo["id"]);
		$this->assign("articleInfo", $articleInfo);

		$this->assign("columnTree", D("Column")->getColumnTree());
		$this->display("Article/edit.html");
	}

	//保存更新文档信息
	public function saveUpArticle()
	{
		$articleID = $this->_getArticleID();
		$data = $this->dealArticleSubmit();
		$return = M("Article")->upArticle($articleID, $data);
		if ($return) {
			$content = $this->_getcontent();
			$data = array(
				'content' => $content,
				'updatetime' => TIMESTAMP
			);
			$return = M("Article")->upArticleContent($articleID, $data);
			if ($return) {
				$NextOperation = array(
					array('name'=>'查看修改', 'link'=>__APP__.'/index.php?s=Article/upArticle&articleid='.$articleID)
				);
				$this->assign("NextOperation", $NextOperation);
				$this->display("Common/success.html");
			} else {
				$this->display("Common/error.html");
			}
		} else {
			$this->display("Common/error.html");
		}
	}

	//回收文档 进入回收站
	public function recoverArticle()
	{
		$articleID = $this->_getArticleID();
		$articleID = explode(",", $articleID);
		$data = array(
			'state' => 0
		);
		$return = M("Article")->upArticle($articleID, $data);
		if ($return) {
			$this->ajaxReturn(0,"删除成功！");
		} else {
			$this->ajaxReturn(1,"删除失败！");
		}
	}

	//彻底删除文档
	public function deleteArticle()
	{
		$articleID = $this->_getArticleID();
		$articleID = explode(",", $articleID);
		$return = M("Article")->deleteArticle($articleID);
		if ($return) {
			$this->ajaxReturn(0,"删除成功！");
		} else {
			$this->ajaxReturn(1,"删除失败！");
		}
	}

	//文档回收站
	public function recover()
	{
		list($start,$length) = $this->getPages();
        $articleList = M("Article")->getArticle(null,$start,$length,array('state'=>0));
        $this->assign("total", $articleList['total']);
        $this->assign("dataList", $articleList['data']);

        $this->assign("page", getPage($articleList['total'],$this->_pagesize));
		$this->display("Article/recover.html");
	}

	//还原文档
	public function backArticle()
	{
		$articleID = $this->_getArticleID();
		$articleID = explode(",", $articleID);
		$data = array(
			'state' => 1
		);
		$return = M("Article")->upArticle($articleID, $data);
		if ($return) {
			$this->ajaxReturn(0,"还原成功！");
		} else {
			$this->ajaxReturn(1,"还原失败！");
		}
	}

	//移动文档
	public function moveArticle()
	{
		$articleid = $this->_getArticleID();
		$action = isset($_REQUEST['action']) ? $_REQUEST['action'] : '';
		if ($action == 'save') {
			
		} else {
			$this->assign("articleid", $articleid);
			$this->assign("columnTree", D("Column")->getColumnTree());
			$this->display("Article/move.html");
		}
	}
}