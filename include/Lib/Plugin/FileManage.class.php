<?php
/**
 * PHP文件系统管理器 插件
 * by buzhidao 2012-01-17
 */
class FileManage
{
	//要管理的文件夹
	private $_folder = null;

	//初始化构造函数
	public function __construct($_folder=null)
	{
		if (!$_folder) return flase;

		$this->_folder = $_folder;
	}

	//主入口
	public function index($dir=null)
	{
		return $this->_getDirFile($dir);
	}

	//获取某个目录的下级文件夹和文件
	private function _getDirFile($dir=null)
	{
		$return1 = array();
		$return2 = array();
		$dir = $dir ? $dir : $this->_folder;
		if (is_dir($dir)) {
			$dh = opendir($dir);
			while (($file = readdir($dh)) !== false) {
				if (!in_array($file, array('.','..'))) {
		            $filedir = $dir . '/' . $file;
		            if (is_dir($filedir)) {
			            $return1[] = array(
			            	'filename' => $file,
			            	'filetype' => 'dir',
			            	'filesize' => '',
			            	'filemtime'=> ''
			            );
			        } else {
		            	$fileInfo = pathinfo($filedir);
			        	$fileInfo["extension"] = isset($fileInfo["extension"]) ? $fileInfo["extension"] : 'unknow';
			        	$return2[] = array(
			            	'filename' => $file,
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
}