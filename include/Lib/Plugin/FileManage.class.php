<?php
/**
 * PHP文件系统管理器 插件
 * by buzhidao 2012-01-17
 */
class FileManage
{
	private $_c = '.';
	//要管理的文件夹
	private $_root = null;
	private $_dir = null;

	private $_encoding = array('UTF-8','UTF-32','GB2312','GBK');

	//管理文件数组返回
	public $_fileArray = array(
		'filelist' => array(),  //下级目录和文件列表
		'pdir'     => null,  //父目录
		'cdir'     => null,  //当前目录
		'perms'    => null
	);

	//文件名过滤
	private $_nameFilter = '#[/\:*;"?<>|]+#';

	//初始化构造函数
	public function __construct($_root=null,$_dir=null)
	{
		if (!$_root) return flase;
		$this->_root = $_root;
		$this->_dir = $_dir;
	}

	//遍历返回
	public function getFilelist($dir=null)
	{
		$mdir = $this->_getMDir($dir);
		$this->_fileArray['filelist'] = $this->_traversalDir($mdir);
	}

	//遍历获取某个目录的下级文件夹和文件
	private function _traversalDir($dir=null)
	{
		$return1 = array();
		$return2 = array();
		if (is_dir($dir)) {
			$dh = opendir($dir);
			while (($filename = readdir($dh)) !== false) {
				if (!in_array($filename, array('.','..'))) {
		            $filedir = $dir . '/' . $filename;
					$filename = $this->_convertCoding($filename,$this->_checkCoding($filename),'UTF-8');
		            if (is_dir($filedir)) {
			            $return1[] = array(
			            	'filename' => $filename,
			            	'filetype' => 'dir',
			            	'filesize' => '',
			            	'filemtime'=> ''
			            );
			        } else {
		            	$fileInfo = pathinfo($filedir);
			        	$fileInfo["extension"] = isset($fileInfo["extension"]) ? $fileInfo["extension"] : 'unknow';
			        	$return2[] = array(
			            	'filename' => $filename,
			            	'filetype' => $fileInfo['extension'],
			            	'filesize' => formatBytes(filesize($filedir)),
			            	'filemtime'=> mkdate(filemtime($filedir))
			            );
			        }
			    }
	        }
	        closedir($dh);
		}

		return array_merge($return1,$return2);
	}

	/**
	 * 获取管理目录
	 * @param $dir string 目录 
	 * @param $flag int 是否自动转码 0否 1是 默认1
	 */
	private function _getMDir($dir=null,$flag=1)
	{
		$dir = $dir ? $dir : $this->_dir;
		$dir = $dir && $dir != $this->_c ? $this->_root."/".substr($dir,2) : $this->_root;

		return $flag ? $this->_makeCoding($dir) : $dir;
	}

	//获取父目录
	public function getPDir()
	{
		$this->_fileArray['pdir'] = $this->_dir && $this->_dir != $this->_c ? substr($this->_dir,0,strrpos($this->_dir, '/')) : $this->_c;
	}

	//获取当前目录
	public function getCDir()
	{
		$this->_fileArray['cdir'] = $this->_dir ? $this->_dir : $this->_c;
	}

	//获取目录权限
	public function getPerms()
	{
		$dir = $this->_getMDir();
		$perms = fileperms($dir);
		if (($perms & 0xC000) == 0xC000) {
		    // Socket
		    $info = 's';
		} elseif (($perms & 0xA000) == 0xA000) {
		    // Symbolic Link
		    $info = 'l';
		} elseif (($perms & 0x8000) == 0x8000) {
		    // Regular
		    $info = '-';
		} elseif (($perms & 0x6000) == 0x6000) {
		    // Block special
		    $info = 'b';
		} elseif (($perms & 0x4000) == 0x4000) {
		    // Directory
		    $info = 'd';
		} elseif (($perms & 0x2000) == 0x2000) {
		    // Character special
		    $info = 'c';
		} elseif (($perms & 0x1000) == 0x1000) {
		    // FIFO pipe
		    $info = 'p';
		} else {
		    // Unknown
		    $info = 'u';
		}

		// Owner
		$info .= (($perms & 0x0100) ? 'r' : '-');
		$info .= (($perms & 0x0080) ? 'w' : '-');
		$info .= (($perms & 0x0040) ?
		            (($perms & 0x0800) ? 's' : 'x' ) :
		            (($perms & 0x0800) ? 'S' : '-'));

		// Group
		$info .= (($perms & 0x0020) ? 'r' : '-');
		$info .= (($perms & 0x0010) ? 'w' : '-');
		$info .= (($perms & 0x0008) ?
		            (($perms & 0x0400) ? 's' : 'x' ) :
		            (($perms & 0x0400) ? 'S' : '-'));

		// World
		$info .= (($perms & 0x0004) ? 'r' : '-');
		$info .= (($perms & 0x0002) ? 'w' : '-');
		$info .= (($perms & 0x0001) ?
		            (($perms & 0x0200) ? 't' : 'x' ) :
		            (($perms & 0x0200) ? 'T' : '-'));

		$this->_fileArray['perms'] = $info;
	}

	//返回fileArray数组
	public function getFileArray()
	{
		$this->getFilelist();
		$this->getPDir();
		$this->getCDir();
		$this->getPerms();

		return $this->_fileArray;
	}

	//检测文件名
	private function _checkFileName($filename=null)
	{
		if (!$filename) return false;
		if (preg_match($this->_nameFilter, $filename)) return false;
		return true;
	}

	//检测文件名编码
	private function _checkCoding($file=null)
	{
		if (!$file) return false;
		foreach ($this->_encoding as $v) {
			if (mb_check_encoding($file, $v)) return $v;
		}
	}

	//编码转换
	private function _convertCoding($file,$incoding=null,$outcoding=null)
	{
		if (!$file) return false;
		$incoding = $incoding ? $incoding : $this->_checkCoding($file);
		$outcoding = $outcoding ? $outcoding : $this->_checkCoding($file);
		return iconv($incoding, $outcoding, $file);
	}

	//得到正确的编码的目录和文件名
	private function _makeCoding($dir=null,$file=null)
	{
		if (!is_dir($dir)) {
			foreach ($this->_encoding as $v) {
				$ndir = $this->_convertCoding($dir,'UTF-8',$v);
				if (is_dir($ndir)) {
					$dir = $ndir; break;
				}
			}
		}
		if ($file && !is_file($dir."/".$file)) {
			foreach ($this->_encoding as $v) {
				$nfile = $this->_convertCoding($file,'UTF-8',$v);
				if (is_file($dir."/".$nfile)) {
					$file = $nfile; break;
				}
			}
		}
		return $file ? $dir."/".$file : $dir;
	}

	/**
	 * 修改文件名
	 * @param $dir string 文件路径
	 * @param $oldfilename string 原文件名
	 * @param $newfilename string 新文件名
	 */
	public function fileRename($dir,$oldfilename,$newfilename)
	{
		if (!$this->_checkFileName($newfilename))
			return array('state'=>0, 'msg'=>'新文件名错误！');

		$mdir = $this->_getMDir($dir);
		$oldfile = $this->_makeCoding($mdir,$oldfilename);
		$newfile = $mdir."/".$newfilename;

		if (rename($oldfile, $newfile))
			return array('state'=>1, 'msg'=>'OK');
		else
			return array('state'=>0, 'msg'=>'修改失败！');
	}

	/**
	 * 删除文件
	 * @param $dir string 文件路径
	 * @param $filename string 文件名
	 */
	public function fileDelete($dir,$filename)
	{
		$mdir = $this->_getMDir($dir);
		if (unlink($mdir."/".$filename))
			return array('state'=>1, 'msg'=>'OK');
		else
			return array('state'=>0, 'msg'=>'删除失败！');
	}
}