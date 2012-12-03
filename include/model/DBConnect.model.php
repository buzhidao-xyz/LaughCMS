<?php
/**
 * 数据库连接类模型
 * by wbq 2011-12-13
 * PDO连接操作数据库
 */
interface DBConnect_Interface
{
    
}
class DBConnect implements DBConnect_Interface
{
    /**
     * 选择要连接的数据库
     */
    private $dbs;
    
    /**
     * 数据库连接信息
     */
    private $host;
    private $username;
    private $password;
    private $database;
    
    static private $prefix;
    
    /**
     * 要替换的表前缀 与配置文件中保持一致
     */
    static private $_prefix = "#@__";
    
    /**
     * 生成的数据库连接句柄
     */
    static private $db;
    
    /**
     * 通过哪种连接方式连接数据库
     * 默认通过pdo 其他方式为mysqli
     */
    static private $_db_type = "pdo";
    
    /**
     * insert update delete 所影响的记录数
     * 默认值为0
     */
    static private $_count = 0;

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

            //设置DB_TYPE数据库连接类型
            self::$_db_type = $this->dbs['db_type'] ? $this->dbs['db_type'] : self::$_db_type;
            
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
            self::$prefix = $this->dbs['prefix'];
            
            if (!trim(self::$prefix)) {
                throw new MyException("The Prefix can't be null", 1);
                exit;
            }
        } catch (MyException $e) {
            echo $e;
        }
    }
    
    private function connect()
    {
        if (self::$_db_type == "pdo") {
            try {
                $this->_initPDO();
            } catch(PDOException $e) {
                $this->_initMysqli();
            }
        } else if (self::$_db_type == "mysqli") {
            $this->_initMysqli();
        }
        self::Execute("SET NAMES 'UTF8'");
        
        if (self::$db) $this->setAttributes();
    }

    /**
     * 初始化PDO连接
     */
    private function _initPDO()
    {
        //pdo_mysql connect
        $dsn = "mysql:host=".$this->host.";dbname=".$this->database;

        if (!(@self::$db = new PDO($dsn, $this->username, $this->password))) {
            throw new PDOException("The connect is unvaliable", 1);
            exit;
        };
        self::$_db_type = "pdo";
    }

    /**
     * 初始化Mysqli连接
     */
    private function _initMysqli()
    {
        try {
            if (!(@self::$db = new mysqli($this->host, $this->username, $this->password, $this->database))) {
                throw new MyException("The connect is unvaliable", 1);
                exit;
            }
            self::$_db_type = "mysqli";
        } catch(MyException $e) {
            echo $e;
        }
    }
    
    /**
     * 设置数据的fetch方式
     */
    private function setAttributes()
    {
        switch (self::$_db_type) {
            case 'pdo':
                /**
                 * 仅返回以键值作为下标的查询结果集
                 */
                self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NAMED);
                break;
            case 'mysqli':
                break;
        }
    }

	static private function tablePR($sql)
	{
		return str_replace(self::$_prefix, self::$prefix, $sql);
	}

    /**
     * 执行一条sql
     * @param sql语句
     * @return 成功返回true 失败返回false
     */
	static public function Execute($sql)
	{
		$sql = self::tablePR($sql);

		switch (self::$_db_type) {
            case 'pdo':
                $count = self::$db->exec($sql);
                break;
            case 'mysqli':
                self::$db->query($sql);
                $count = self::$db->affected_rows;
                break;
            default:
                $count = 0;
		}

		return $count ? true : false;
	}

    /**
     * 获取语句执行所影响的记录数
     * @param $sql 要执行的sql语句
     * @return 执行语句所影响的记录数，为空返回0
     */
	static public function GetCount($sql)
	{
		$count = 0;
        $sql = self::tablePR($sql);

        $sth = self::$db->prepare($sql);
        $sth->execute();
        
        switch (self::$_db_type) {
            case 'pdo':
                $count = $sth->rowCount();
                break;
            case 'mysqli':
                $res = $sth->get_result();
                $count = $res->num_rows;
                break;
            default:
                break;
        }

        return $count;
	}

    /**
     * 从数据库中获取一条记录
     * @param $sql 要执行的查询select语句
     * @return 结果集数组
     */
	static public function GetOne($sql)
	{
		$result = array();
        
		$sql = self::tablePR($sql);

        $sth = self::$db->prepare($sql);
        $sth->execute();
        
        switch (self::$_db_type) {
            case 'pdo':
                $return = $sth->rowCount() ? $sth->fetch(0) : $result;
                break;
            case 'mysqli':
                $res = $sth->get_result();
                $return = $res->num_rows ? $res->fetch_assoc() : $result;
                break;
            default:
                $return = $result;
		}

		return $return;
	}

    /**
     * 获取需要的全部数据库记录
     * @param $sql 要执行的查询select语句
     * @return 结果集数组
     */
	static public function GetAll($sql)
	{
		$result = array();
		$sql = self::tablePR($sql);

		$sth = self::$db->prepare($sql);
		$sth->execute();
        
        switch (self::$_db_type) {
            case 'pdo':
                $return = $sth->rowCount() ? $sth->fetchAll() : $result;
                break;
            case 'mysqli':
                $res = $sth->get_result();
                // MYSQLI_ASSOC 以字段/值关联模式返回数据格式
                $return = $res->num_rows ? $res->fetch_all(MYSQLI_ASSOC) : $result;
                break;
            default:
                $return = $result;
		}
        
		return $return;
	}

    /**
     * 获取最近一次insert操作的id
     * @param Null
     * @return id
     */
	static public function GetInsertID()
	{
	    switch (self::$_db_type) {
            case 'pdo':
                $return = self::$db->lastInsertId();
                break;
            case 'mysqli':
                $return = self::$db->insert_id;
                break;
            default:
                $return = '';
	    }
        
		return $return;
	}
    
    /**
     * 事务处理 update/delete
     * @param 要执行的sql语句
     * @return 返回值 true/false
     */
    static public function Transaction($sql)
    {
        $sql = self::tablePR($sql);
        
        switch (self::$_db_type) {
            case 'pdo':
                self::$db->beginTransaction();
                $count = self::$db->exec($sql);
                break;
            case 'mysqli':
                self::$db->autocommit(false);
                self::$db->query($sql);
                $count = self::$db->affected_rows;
                break;
        }
        
        if ($count) {
            self::$db->commit();
            self::$db->closeCommit();
            return true;
        } else {
            self::$db->rollBack();
            self::$db->closeCommit();
            return false;
        }
    }
    
    static private function closeCommit()
    {
        switch (self::$_db_type) {
            case 'pdo':
                
                break;
            case 'mysqli':
                self::$db->autocommit(true);
                break;
        }
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
