<?php

namespace System\Core;


use System\DB\Mysql;

abstract class BaseModel
{
    protected $table;
    protected $pk = 'id';
    protected $db;
    protected $orderBy;
    protected $select = '*';
    protected $conditions;
    protected $offset = 0;
    protected $limit;

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

    public function orderBy($column, $direction = "ASC")
    {
        if(empty($this->orderBy)){
            $this->orderBy ="{$column} {$direction}";
        }
        else {
            $this->orderBy .=", {$column} {$direction}";
        }

        return $this;
    }

    public function offset($value)
    {
        $this->offset = $value;
        return $this;
    }

    public function limit($value)
    {
        $this->limit = $value;
        return $this;
    }
}