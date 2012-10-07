<?php
/**
 * 数据库操作类 执行add delete update select操作
 * by wbq 2011-12-30
 */
class DBADUS extends DBConnect
{
    /**
     * 表前缀
     */
    static private $_tbf = TBF;
    
    /**
     * 表名
     */
    static public $_table = '';

    //联合查询表
    static public $_join_table = '';

    private $_field = '*';
    private $_join = '';
    private $_where = '';
    private $_order = '';
    private $_limit = '';
    
    //sql语句
    private $sql = null;
    
    static private $_sql;
    
    /**
     * 获取orm映射字段值
     * @param $key 字段值
     */
    private function orm($key)
    {
        global $orm;
        if (!$key) return $orm[self::$_table];

        if (preg_match("/^a\./", $key)) {
            $key = str_replace('a.', '', $key);
            $pos = strpos($key, ' ');
            $alias = $pos !== false ? substr($key, $pos) : '';
            $key = $pos !== false ? substr($key, 0, $pos) : $key;
            return 'a.`'.$orm[self::$_table][$key].$alias.'`';
        }
        if (preg_match("/^b\./", $key)) {
            $key = str_replace('b.', '', $key);
            $pos = strpos($key, ' ');
            $alias = $pos !== false ? substr($key, $pos) : '';
            $key = $pos !== false ? substr($key, 0, $pos) : $key;
            return 'b.`'.$orm[self::$_join_table][$key].$alias.'`';
        }

        return '`'.$orm[self::$_table][$key].'`';
    }

    /**
     * 插入数据到数据库中
     * @param $data 要插入的数据
     * @param $m 0:插入一条数据 1:插入多条数据 默认为0
     */
    public function add($data,$m=0)
    {
        if (isset($m) && $m) {
            return $this->insertAll($data);
        } else {
            return $this->insertOne($data);
        }
    }

    /**
     * insert插入语法
     * @param $data(mixed)
     * 插入一条记录到数据库
     */
    public function insertOne($data)
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

        return $this->Execute($this->sql);
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

        return $this->Execute($this->sql);
    }

    /**
     * delete删除操作
     */
    public function delete()
    {
        $this->sql = "DELETE FROM ".self::$_tbf.self::$_table." ";
        
        return $this;
    }

    /**
     * update更新sql操作
     * @param $data(mixed) 要更新的字段的键值数组
     */
    public function update($data)
    {
        if (!is_array($data)) return false;
        
        foreach ($data as $k=>$v) {
            if (isset($ups)) {
                $ups .= " , ".$this->orm($k)."='".$v."' ";
            } else {
                $ups = $this->orm($k)."='".$v."' ";
            }
        }
        
        $this->sql = "UPDATE ".self::$_tbf.self::$_table." SET ".$ups;
        
        return $this;
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

    /**
     * 计算数据条数
     */
    public function count($options=array())
    {
        $this->_before_sql($options);
        $this->sql = "SELECT COUNT(".$this->_field.") FROM ".self::$_tbf.self::$_table." as a ".$this->_where;
        $this->exec($this->sql);
        return $this->GetNum();
    }
    
    /**
     * 查询一条数据
     * @param $options array 参数数组
     */
    public function find($options=array())
    {
        $this->_before_sql($options);
        $this->sql = "SELECT ".$this->_field." FROM ".self::$_tbf.self::$_table." as a ".$this->_join.$this->_where.$this->_order.$this->_limit;
        $return = $this->GetOne($this->sql);
        $this->_after_sql();
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
        $return = $this->GetAll($this->sql);
        $this->_after_sql();
        return $return;
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

    /**
     * 执行一条sql语句
     * @param $sql 要执行的语句
     */
    public function exec($sql=null)
    {
        $this->sql = !empty($sql)?$sql:$this->sql;
        
        return $this->Execute($this->sql);
    }

    public function getSql()
    {
        return $this->sql;
    }
}
