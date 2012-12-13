<?php
/**
 * 数据库操作类 执行add delete update select操作
 * by wbq 2011-12-30
 */
class DBpdosqlserver extends DBDriver
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

    //连接数据库
    public function _initConnect($host,$username,$password,$database)
    {
        //pdo_mysql connect
        $dsn = "mysql:host=".$host.";dbname=".$database;
        $dsn = "sqlsrv:Server=(".$host.");Database=".$database;

        if (!(@self::$db = new PDO($dsn, $username, $password))) {
            throw new PDOException("The connect is unvaliable", 1);
            exit;
        };
        self::Execute("SET NAMES UTF8");

        //指定返回数据的格式化格式（带fieldname）
        self::$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_NAMED);
    }

    /**
     * 执行一条sql
     * @param sql语句
     * @return 成功返回true 失败返回false
     */
    static public function Execute($sql)
    {
        $sql = self::tablePR($sql);

        return self::$db->exec($sql) ? true : false;
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

        return $sth->rowCount();
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
        
        return $sth->rowCount() ? $sth->fetch(0) : array();
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

        return $sth->rowCount() ? $sth->fetchAll() : array();
    }

    /**
     * 获取最近一次insert操作的id
     * @param Null
     * @return id
     */
    static public function GetInsertID()
    {
        return self::$db->lastInsertId();
    }

    //开始事务
    static public function beginTransaction()
    {
        self::$db->beginTransaction();
    }

    //提交事务
    static public function commitTransaction()
    {
        self::$db->commit();
    }

    //回滚事务
    static public function rollBackTransaction()
    {
        self::$db->rollBack();
    }
    
    /**
     * 事务处理 update/delete
     * @param 要执行的sql语句数组 多条sql事务处理
     * @return 返回值 true/false
     */
    static public function Transaction($sql=array())
    {
        if (!is_array($sql) || empty($sql)) return false;
        $sql = self::tablePR($sql);
        
        self::$db->beginTransaction();
        foreach ($sql as $k=>$v) {
            if (!self::$db->exec($sql)) {
                self::$db->rollBack();
                return false;
            }
        }
        self::$db->commit();
        return true;
    }

    /**
     * insert插入语法
     * @param $data(mixed)
     * 插入一条记录到数据库
     */
    protected function insertOne($data)
    {
        if (!is_array($data)) return false;
        
        foreach ($data as $k=>$v) {
            if (isset($keys)) {
                $keys .= ",".$this->orm($k);
                $values .= ",'".$v."'";
            } else {
                $keys = $this->orm($k);
                $values = "'".$v."'";
            }
        }
        
        $this->sql = "INSERT INTO ".self::$_tbf.self::$_table." (".$keys.") VALUES (".$values.")";
        if ($this->Execute($this->sql)) return $this->GetInsertID();
        else return false;
    }
    
    /**
     * insert插入语法
     * @param $data(mixed)
     * 插入多条记录到数据库
     */
    public function insertAll($data)
    {
        if (!is_array($data)) return false;
        
        foreach ($data as $d) {
            foreach ($d as $k=>$v) {
                if (isset($keys)) {
                    $keys .= ','.$this->orm($k);
                    $values .= ",'".$v."'";
                } else {
                    $keys = $this->orm($k);
                    $values = "'".$v."'";
                }
            }
            
            $key = " (".$keys.") ";
            
            if (isset($value)) {
                $value .= ","." (".$values.") ";
            } else {
                $value = " (".$values.") ";
            }
            unset($keys); unset($values);
        }
        
        $this->sql = "INSERT INTO ".self::$_tbf.self::$_table." ".$key." VALUES ".$value;

        if ($this->Execute($this->sql)) return $this->GetInsertID();
        else return false;
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
     * 计算数据条数
     */
    public function count($options=array())
    {
        $this->_before_sql($options);
        $this->sql = "SELECT COUNT(".$this->_field.") as la_num FROM ".self::$_tbf.self::$_table." as a ".$this->_where;
        $this->_after_sql();
        $data = $this->GetOne($this->sql);

        return $data['la_num'];
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

    /**
     * where子句构造
     * @param $where = array('field1'=>value1,'field2'=>valuw2,...,'or'=>array('field3'=>value3,'field4'=>value4,...))
     *        between操作 array('field'=>array('between',array(value1,value2)))
     * @param $op 操作符 AND/OR/BETWEEN
     */
    public function where($where,$op='')
    {
        if (!$where) return $this;

        if (is_array($where) && !empty($where)) {
            $whereArray = array();
            foreach ($where as $k=>$v) {
                if ($v[0] == 'in') {
                    $whereArray[] = " ".$this->orm($k)." IN(".implode(',',$v[1]).") ";
                } else {
                    $whereArray[] = " ".$this->orm($k)."='".$v."' ";
                }
            }
            $where = implode(" AND ",$whereArray);
        }
        $this->_where = " WHERE ".$where;

        return $this;
    }

    /**
     * 排序语句
     * @param $field string 排序字段
     * @param $orderway string ASC/DESC ASC 升序排列
     */
    public function order($field,$way='ASC')
    {
        if (!$field || !$way) return $this;

        $this->_order = ' ORDER BY '.$this->orm($field).' '.strtoupper($way).' ';

        return $this;
    }
    
    /**
     * 查找数据
     * @param $start 数据结果的开始位置偏移 默认从0开始
     * @param $length 数据结果的长度 默认取1条数据
     */
    public function limit($start = 0, $length = 1)
    {
        $this->_limit = " limit ".$start." , ".$length;
        
        return $this;
    }
}
