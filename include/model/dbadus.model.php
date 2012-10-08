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

    private $_joinStr = '';
    
    /**
     * sql语句
     */
    private $sql;
    
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
            return 'a.'.$orm[self::$_table][$key].$alias;
        }
        if (preg_match("/^b\./", $key)) {
            $key = str_replace('b.', '', $key);
            $pos = strpos($key, ' ');
            $alias = $pos !== false ? substr($key, $pos) : '';
            $key = $pos !== false ? substr($key, 0, $pos) : $key;
            return 'b.'.$orm[self::$_join_table][$key].$alias;
        }

        return $orm[self::$_table][$key];
    }
    
    /**
     * select查询语法
     * @param $fields(mixed)
     * 查询某个字段直接传字段名
     * 查询多个字段用,隔开或以数组形式传递参数
     */
    public function select($fields = '*')
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
        
        $this->sql = "SELECT ".$field." FROM ".self::$_tbf.self::$_table." as a ";

        return $this;
    }

    /**
     * 插入数据到数据库中
     * @param $data 要插入的数据
     * @param $m 0:插入一条数据 1:插入多条数据 默认为0
     */
    public function insert($data,$m=0)
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
     * delete删除操作
     */
    public function delete()
    {
        $this->sql = "DELETE FROM ".self::$_tbf.self::$_table." ";
        
        return $this;
    }
        
    /**
     * join字句
     * @param $table 表名 
     * @param $flag 联合方式 0左连接 1右连接 默认0
     */
    public function join($table,$flag=0)
    {
        if (!$table) return $this;
        self::$_join_table = $table;

        $joinStr = '';

        if (!$flag) {
            $joinStr = ' LEFT JOIN '.self::$_tbf.$table.' as b ';
        } else {
            $joinStr = ' RIGHT JOIN '.self::$_tbf.$table.' as b ';
        }

        $this->_joinStr = $joinStr;

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
     * on子句构造
     * @param $on = array(array(field,field))
     * @param $op 操作符 AND/OR
     */
    public function on($on,$op='AND')
    {
        if (!$on) return $this;

        $onStr = '';
        
        switch ($op) {
            case 'AND':
                foreach ($on as $v) {
                    if ($onStr) {
                        $onStr .= " AND ".$this->orm($v[0])."=".$this->orm($v[1])." ";
                    } else {
                        $onStr = " ".$this->orm($v[0])."=".$this->orm($v[1])." ";
                    }
                }
                break;
            case 'OR':
                foreach ($on as $v) {
                    if ($onStr) {
                        $onStr .= " OR ".$this->orm($v[0])."=".$this->orm($v[1])." ";
                    } else {
                        $onStr = " ".$this->orm($v[0])."=".$this->orm($v[1])." ";
                    }
                }
                break;
        }
        
        $this->sql .= $this->_joinStr." ON ".$onStr;
        
        return $this;
    }

    /**
     * where子句构造
     * @param $where = array(array(field,value))
     * @param $op 操作符 AND/OR/BETWEEN
     */
    public function where($where,$op='AND')
    {
        if (!$where) return $this;

        $whereStr = '';

        switch ($op) {
            case 'AND':
                foreach ($where as $v) {
                    if ($whereStr) {
                        $whereStr .= " AND ".$this->orm($v[0])."='".$v[1]."' ";
                    } else {
                        $whereStr = " ".$this->orm($v[0])."='".$v[1]."' ";
                    }
                }
                break;
            case 'OR':
                foreach ($where as $v) {
                    if ($whereStr) {
                        $whereStr .= " OR ".$this->orm($v[0])."='".$v[1]."' ";
                    } else {
                        $whereStr = " ".$this->orm($v[0])."='".$v[1]."' ";
                    }
                }
                break;
        }

        $this->sql .= " WHERE ".$whereStr;

        return $this;
    }
    
    /**
     * 查找数据
     * @param $start 数据结果的开始位置偏移 默认从0开始
     * @param $length 数据结果的长度 默认取1条数据
     */
    public function limit($start = 0, $length = 1)
    {
        $this->sql .= " limit ".$start." , ".$length;
        
        return $this;
    }
    
    /**
     * 查询一条数据
     * @param $m 0:查询一条数据 1:查询多条数据 默认为0
     */
    public function find($m=0)
    {
        return $m ? $this->GetAll($this->sql) : $this->GetOne($this->sql);
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
