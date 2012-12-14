<?php
/**
 * 数据库操作类 执行add delete update select操作
 * by wbq 2011-12-30
 */
class DBmysqli extends DBDriver
{
    protected $_field = '*';
    protected $_join = '';
    protected $_where = '';
    protected $_order = '';
    protected $_limit = '';
    
    //sql语句
    protected $sql = null;
    
    static protected $_sql;

    //调用父类初始化数据库连接
    public function __construct()
    {
        parent::__construct();
    }

    /************************************以下方法必须实现************************************/

    //连接数据库
    public function _initConnect($host,$username,$password,$database)
    {
        //mysqli connect
        if (!(@self::$db = new mysqli($host, $username, $password, $database))) {
            throw new MyException("The connect is unvaliable", 1);
            exit;
        }
        self::Execute("SET NAMES UTF8");
    }

    /**
     * 执行一条sql
     * @param sql语句
     * @return 成功返回true 失败返回false
     */
    static public function Execute($sql)
    {
        $sql = self::tablePR($sql);

        self::$db->query($sql);
        return self::$db->affected_rows ? true : false;
    }

    /**
     * 获取语句执行所影响的记录数
     * @param $sql 要执行的sql语句
     * @return 执行语句所影响的记录数，为空返回0
     */
    static public function GetCount($sql)
    {
        $sql = self::tablePR($sql);

        $sth = self::$db->prepare($sql);
        $sth->execute();
        $res = $sth->get_result();
        return $res->num_rows;
    }

    /**
     * 从数据库中获取一条记录
     * @param $sql 要执行的查询select语句
     * @return 结果集数组
     */
    static public function GetOne($sql)
    {
        $sql = self::tablePR($sql);

        $sth = self::$db->prepare($sql);
        $sth->execute();
        $res = $sth->get_result();
        return $res->num_rows ? $res->fetch_assoc() : array();
    }

    /**
     * 获取需要的全部数据库记录
     * @param $sql 要执行的查询select语句
     * @return 结果集数组
     */
    static public function GetAll($sql)
    {
        $sql = self::tablePR($sql);

        $sth = self::$db->prepare($sql);
        $sth->execute();
        $res = $sth->get_result();
        // MYSQLI_ASSOC 以字段/值关联模式返回数据格式
        return $res->num_rows ? $res->fetch_all(MYSQLI_ASSOC) : array();
    }

    /**
     * 获取最近一次insert操作的id
     * @param Null
     * @return id
     */
    static public function GetInsertID()
    {
        return self::$db->insert_id;
    }

    /************************************以上方法必须实现************************************/
    
    //开始事务
    static public function beginTransaction()
    {
        self::$db->autocommit(FALSE);
    }

    //提交事务
    static public function commitTransaction()
    {
        self::$db->commit();
    }

    //回滚事务
    static public function rollBackTransaction()
    {
        self::$db->rollback();
    }
    
    /**
     * 查询一条数据
     * @param $options array 参数数组
     */
    public function find($options=array())
    {
        $this->_before_sql($options);
        $this->sql = "SELECT ".$this->_field." FROM ".self::$_tbf.self::$_table." as a ".$this->_join.$this->_where.$this->_order.$this->_limit;
        $this->_after_sql();
        $return = $this->GetOne($this->sql);
        return $return;
    }

    /**
     * 查询多条数据
     * @param $options array 参数数组
     */
    public function select($options=array())
    {
        $this->_before_sql($options);
        $this->sql = "SELECT ".$this->_field." FROM ".self::$_tbf.self::$_table." as a ".$this->_join.$this->_where.$this->_order.$this->_limit;
        $this->_after_sql();
        $return = $this->GetAll($this->sql);
        return $return;
    }

    /**
     * 计算数据条数
     */
    public function count($options=array())
    {
        $this->_before_sql($options);
        $this->sql = "SELECT COUNT(".$this->_field.") as la_num FROM ".self::$_tbf.self::$_table." as a ".$this->_join.$this->_where;
        $this->_after_sql();
        $data = $this->GetOne($this->sql);

        return $data['la_num'];
    }

    /**
     * update更新sql操作
     * @param $data(mixed) 要更新的字段的键值数组
     */
    public function update($data,$options=array())
    {
        if (!is_array($data)) return false;
        
        foreach ($data as $k=>$v) {
            if (isset($ups)) {
                $ups .= " , ".$this->orm($k)."='".$v."' ";
            } else {
                $ups = $this->orm($k)."='".$v."' ";
            }
        }
        
        $this->_before_sql($options);
        $this->sql = "UPDATE ".self::$_tbf.self::$_table." SET ".$ups.$this->_where;
        $this->_after_sql();
        return $this->exec();
    }

    /**
     * delete删除操作
     */
    public function delete($options=array())
    {
        $this->_before_sql($options);
        $this->sql = "DELETE FROM ".self::$_tbf.self::$_table." ".$this->_where.$this->_order.$this->_limit;
        $this->_after_sql();
        return $this->exec($this->sql);
    }
        
    /**
     * join字句
     * @param $join 联合查询字符串 
     * @param $flag 联合方式 0左连接 1右连接 默认0
     */
    public function join($join=null,$flag=0)
    {
        if (!$join) return $this;
        $joinArray = explode(" ", $join);
        self::$_join_table = $joinArray[0] ? $joinArray[0] : $joinArray[1];
        self::$_join_table = str_replace(self::$_tbf, '', self::$_join_table);

        if (!$flag) {
            $join = ' LEFT JOIN '.$join.' ';
        } else {
            $join = ' RIGHT JOIN '.$join.' ';
        }

        $this->_join = $join;

        return $this;
    }
    
    /**
     * 查找数据
     * @param $start 数据结果的开始位置偏移 默认从0开始
     * @param $length 数据结果的长度 默认取1条数据
     */
    public function limit($start = 0, $length = 1, $flag = null)
    {
        $this->_limit = " limit ".$start." , ".$length;
        
        return $this;
    }

    /**
     * 全文检索
     * @param $fields mixed 需要被检索出的字段
     * @param $match string 全文索引字段
     * @param $value 要检索的内容
     */
    public function fulltext($fields='*',$match,$value)
    {
        if (!is_array($fields)) {
            $fields = explode(',', $fields);
        }
        
        foreach ($fields as $k=>$v) {
            if (isset($field)) {
                $field .= ','.$this->orm($v);
            } else {
                $field = ($v=='*')?$v:$this->orm($v);
            }
        }

        $this->sql = "SELECT ".$field.", MATCH(".$match.") AGAINST('".$value."' IN BOOLEAN MODE) AS score FROM ".self::$_tbf.self::$_table." WHERE MATCH(".$match.") AGAINST('".$value."' IN BOOLEAN MODE) ORDER BY score DESC ";

        return $this;
    }
}
