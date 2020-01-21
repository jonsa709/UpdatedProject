<?php

namespace System\Core;


use System\DB\Mysql;

abstract class BaseModel
{
    protected $table;
    protected $pk = 'id';
    protected $db;

    protected $select = '*';
    protected $conditions;

    public function __construct()
    {
        $this->db = new Mysql;
    }

    public function getTable()
{
    return $this->table;
}

public function getPk()
{
    return $this->pk;
}

public function select($columns)
{
    $this->select = $columns;

    return $this;
}

public function where($column, $value, $operators = '=')
{
    if(empty($this->conditions)){
        $this->conditions = "{$column} {$operators} '{$value}'";
    }
    else {
        $this->conditions .= " AND {$column} {$operators} '{$value}'";
    }
    return $this;
}
public function orWhere($column, $value, $operator = '=')
{
    $this->conditions .=" OR {$column} {$operator} '{$value}'";

    return $this;
}
}