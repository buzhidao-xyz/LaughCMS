<?php
/**
 * 文档控制器
 * by buzhidao 2012-12-26
 */
class ArticleControl extends CommonControl
{
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
		list($start,$length) = $this->getPages();
        $articleList = M("Article")->getArticle(null,$start,$length);
        $this->assign("total", $articleList['total']);
        $this->assign("dataList", $articleList['data']);

        $this->assign("page", getPage($articleList['total'],$this->_pagesize));
		$this->display("Article/index.html");
	}

	//新文档
	public function newArticle()
	{
		$this->assign("timestamp",TIMESTAMP);
		$this->assign("userInfo",$this->userInfo);
		$this->assign("columnTree", D("Column")->getColumnTree());
		$this->display("Article/newarticle.html");
	}

	/**
	 * 保存文档入库
	 * @param $title string 文章标题 必须
	 */
	public function saveArticle()
	{
		$title = $this->_getTitle();
		$tag = $this->_getTag();
		$source = $this->_getsource();
		$author = $this->_getauthor();
		$columnid = $this->_getcolumnid();
		$publishtime = $this->_getpublishtime();
		$status = $this->_getstatus();
		$seotitle = $this->_getseotitle();
		$keyword = $this->_getkeyword();
		$description = $this->_getdescription();
		$content = $this->_getcontent();
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
			'publishtime' => $publishtime,
			'updatetime'  => TIMESTAMP
		);
		if ($image) $data['thumbimage'] = $image;

		$articleid = M('Article')->saveArticle($data);
		if ($articleid) {
			$arcdata = array(
				'articleid' => $articleid,
				'content'   => $content
			);
			$return = M('Article')->saveArticleContent($arcdata);
			if ($return) {
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
		$this->display("Article/uparticle.html");
	}

	//保存更新文档信息
	public function saveUpArticle()
	{
		
	}
}