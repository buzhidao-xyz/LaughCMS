<?php
/**
 * 文件上传类 控制文件上传流程 包括文件安全性检测 BUG检测等
 * by wbq 2012-02-22
 */
class UploadHelper
{
	/**
	 * 类名
	 */
	private $_helper_name = "Upload Helper";

	/**
	 * 允许上传的文件类型
	 * 0:所有类型
	 * 1:图像类型
	 */
	private $_type = array(
		array('jpg','jpeg','png','gif','rar','zip','doc'),
		array('jpg','jpeg','png','gif')
	);
	
	/**
	 * 待处理的文件
	 */
	private $_file = null;

	/**
	 * 允许上传的图片类型，根据用户传的参数定义内容
	 */
    private $_ext = array();

    /**
     * 允许上传的文件大小
     */
    private $_byte = 2000000;

    /**
     * 上传文件的存储路径
     */
    private $_path = 'upload';

	public function __construct($file,$type=0)
	{
		$this->_set($file,$type);
	}

	/**
	 * 获取上传的文件 POST方式
	 * @param $file 客户端提交的文件(图片/多媒体)
	 */
	private function _set($file,$type)
	{
		$this->_file = $file;

		$this->_ext = $this->_type[$type];
	}

	/**
	 * 执行具体上传的方法，创建类对象之后，要调用此方法
	 */
	public function _upload()
    {
        $error = false;

        if (!$this->_checkType()) {
            $error = true;
            $retutn = '文件类型错误！';
        }

        if (!$error && !$this->_checkByte()) {
            $error = true;
            $return = '文件大小错误！';
        }

        $upfile = ROOT_DIR.'/'.$this->_path.'/'.$this->_file['name'];
        if (!$error && move_uploaded_file($this->_file['tmp_name'], $upfile)) {
            $return = '文件上传成功！';
        } else {
            $return = '文件上传失败！';
        }

        return $return;
	}

	/**
	 * 检测文件来源并验证文件安全性
	 */
	private function _checkType()
    {
        $error = false;

        if (!is_uploaded_file($this->_file['tmp_name'])) {
            $error = true;
        }

        if (!$error) $path = pathinfo($this->_file['name']);
        if (!$error && in_array($path['extension'],$this->_ext)) {
            if (in_array($path['extension'],$this->_type[1])) {
                if (!$this->checkImage()) {
                    $error = true;
                }
            } else {
                if (!$this->checkFile()) {
                    $error = true;
                }
            }
        } else {
            $error = true;
        }

        return $error?false:true;
	}

	/**
	 * 检测文件来源并验证文件安全性
	 */
	private function checkImage()
	{
        $size = getimagesize($this->_file['tmp_name']);
        if (!empty($size)) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 检测文件安全性
     */
    private function checkFile()
    {
        if (!is_executable($this->_file['tmp_name'])) {
            return true;
        } else {
            return false;
        }
    }

    /**
     * 检测文件大小
     */
    private function _checkByte()
    {
        if ($this->_file['size'] < $this->_byte) {
            return true;
        } else {
            return false;
        }
    }
}
