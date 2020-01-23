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
    protected $sql;


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

    public function get()
    {
        $data = [];
        $this->buildSelectQuery();

        if($this->db->run($this->sql)){
            $result = $this->db->fetch();

            $classname = get_class($this);


            foreach($result as $value){
                $obj = new $classname;

                foreach($value as $k => $v){
                    $obj->{$k} = $v;
                }

                $data[] = $obj;
            }
        }
        return $data;
    }

    private function buildSelectQuery()
    {
        $this->sql = "SELECT {$this->select} FROM {$this->table}";

        if(!empty($this->conditions))
        {
            $this->sql .=" WHERE {$this->conditions}";
        }

        if(!empty($this->orderBy))
        {
            $this->sql .=" ORDER BY {$this->orderBy}";
        }

        if(!empty($this->limit))
        {
            $this->sql .=" LIMIT {$this->offset}, {$this->limit}";
        }
    }
}