<?php
/**
 * 数据库驱动基类
 * by wbq 2011-12-13
 * edit by buzhidao 2012-12-13
 * 提供读取配置并初始化连接数据库操作
 */
interface DBDriver_Interface
{
    
}
class DBDriver implements DBDriver_Interface
{
    //选择要连接的数据库
    private $dbs;
    //DB连接对象
    static protected $db;
    
    /**
     * 数据库连接信息
     */
    private $host;
    private $username;
    private $password;
    private $database;
    
    static protected $_prefix;   //表前缀
    static protected $_tbf = "#@__";   //表缓存前缀

    //表名
    static public $_table = '';
    //联合查询表
    static public $_join_table = '';
    
    //insert update delete 所影响的记录数 默认值为0
    static protected $_count = 0;

    public function __construct()
    {
        $this->setDBS();
        $this->setHost();
        $this->setUsername();
        $this->setPassword();
        $this->setDatabase();
        $this->setTablePre();
        $this->connect();
    }
    
    /**
     * 设置选择哪个配置项 默认选择配置文件中的第一个库
     * 配置文件 /include/config/database.config.php
     */
    private function setDBS()
    {
        try {
            $this->dbs = C('DB');
            $this->dbs = $this->dbs['db0'];

            if (empty($this->dbs)) {
                throw new MyException("Databse is null", 1);
                exit;
            }
        } catch (MyException $e) {
            echo $e;
        }
    }

    /**
     * 设置连接字符串中的host值
     */
    private function setHost()
    {
        try {
            $this->host = $this->dbs['host'];

            if (!trim($this->host)) {
                throw new MyException("The DataBase Host can't be null", 1);
                exit;
            }
        } catch (MyException $e) {
            echo $e;
        }
    }

    /**
     * 设置访问数据库的账号
     */
    private function setUsername()
    {
        try {
            $this->username = $this->dbs['username'];

            if (!trim($this->username)) {
                throw new MyException("The username can't be null", 1);
                exit;
            }
        } catch (MyException $e) {
            echo $e;
        }
    }

    /**
     * 设置访问数据库的账号密码
     */
    private function setPassword()
    {
        try {
            $this->password = $this->dbs['password'];

            if (!trim($this->password)) {
                //throw new MyException("The password can't be null", 3);exit;
            }
        }  catch (MyException $e) {
            echo $e;
        }
    }

    /**
     * 设置要访问的库
     */
    private function setDatabase()
    {
        try {
            $this->database = $this->dbs['database'];

            if (!trim($this->database)) {
                throw new MyException("The database can't be null", 1);
                exit;
            }
        } catch (MyException $e) {
            echo $e;
        }
    }
    
    /**
     * 设置数据库表的表前缀
     */
    private function setTablePre()
    {
        try {
            self::$_prefix = $this->dbs['prefix'];
            
            if (!trim(self::$_prefix)) {
                throw new MyException("The Prefix can't be null", 1);
                exit;
            }
        } catch (MyException $e) {
            echo $e;
        }
    }
    
    //连接数据库
    private function connect()
    {
        try {
            $this->_initConnect($this->host, $this->username, $this->password, $this->database);
        } catch(PDOException $e) {
            echo $e;
            die('DB Connect Error!');
        }

        return self::$db;
    }

	static protected function tablePR($sql)
	{
		return str_replace(self::$_tbf, self::$_prefix, $sql);
	}
    
    /**
     * 获取orm映射字段值 如果ORM里面配置的key获取该配置的key 没有配置直接返回key
     * @param $key 字段值
     */
    protected function orm($key)
    {
        global $orm;
        if (!$key) return $orm[self::$_table];

        if (preg_match("/^a\./", $key)) {
            $key = str_replace('a.', '', $key);
            $pos = strpos($key, ' ');
            $alias = $pos !== false ? substr($key, $pos) : '';
            $key = $pos !== false ? substr($key, 0, $pos) : $key;
            if (!is_array($orm) || empty($orm) || !array_key_exists(self::$_table, $orm) || !array_key_exists($key, $orm[self::$_table])) {
                return 'a.`'.$key.$alias.'`';
            } else {
                return 'a.`'.$orm[self::$_table][$key].$alias.'`';
            }
        }
        if (preg_match("/^b\./", $key)) {
            $key = str_replace('b.', '', $key);
            $pos = strpos($key, ' ');
            $alias = $pos !== false ? substr($key, $pos) : '';
            $key = $pos !== false ? substr($key, 0, $pos) : $key;
            if (!is_array($orm) || empty($orm) || !array_key_exists(self::$_join_table, $orm) || !array_key_exists($key, $orm[self::$_join_table])) {
                return 'a.`'.$key.$alias.'`';
            } else {
                return 'b.`'.$orm[self::$_join_table][$key].$alias.'`';
            }
        }

        if (!is_array($orm) || empty($orm) || !array_key_exists(self::$_join_table, $orm) || !array_key_exists($key, $orm[self::$_join_table])) {
            return '`'.$key.'`';
        } else {
            return '`'.$orm[self::$_table][$key].'`';
        }
    }
    
    /**
     * 设置要查询的字段
     * @param $field(mixed)
     * 查询某个字段直接传字段名
     * 查询多个字段用,隔开或以数组形式传递参数
     */
    public function field($fields = '*')
    {
        if (!is_array($fields)) {
            $fields = explode(',', $fields);
        }
        
        foreach ($fields as $k=>$v) {
            if (isset($field)) {
                $field .= ','.$this->orm($v);
            } else {
                $field = strpos($v,'*') !== false ? $v : $this->orm($v);
            }
        }
        
        $this->_field = $field;

        return $this;
    }

    protected function _before_sql($options)
    {
        $this->_parse_options($options);
    }

    protected function _after_sql()
    {
        $this->_field = '*';
        $this->_join = '';
        $this->_where = '';
        $this->_order = '';
        $this->_limit = '';
        //$this->sql = null;
    }

    protected function _parse_options($options)
    {

    }

    /**
     * 插入数据到数据库中
     * @param $data 要插入的数据
     * @param $m false:插入一条数据 true:插入多条数据 默认为false
     */
    public function add($data,$m=false)
    {
        if ($m === true) {
            return $this->insertAll($data);
        } else if ($m === false) {
            return $this->insertOne($data);
        }

        return false;
    }

    /**
     * 执行一条sql语句
     * @param $sql 要执行的语句
     */
    public function exec($sql=null)
    {
        $sql = !empty($sql) ? $sql : $this->sql;
        
        return $this->Execute($sql);
    }

    public function getSql()
    {
        return $this->sql;
    }

	/**
     * 关闭数据库连接
     */
    public function DBClose()
    {
		self::$db = null;
	}
}
?>
