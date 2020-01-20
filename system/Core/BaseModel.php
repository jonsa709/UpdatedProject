<?php


namespace System\Core;


abstract class BaseModel
{
    protected $table;
    protected $pk = 'id';

    public function getTable()
{
    return $this->table;
}

public function getPk()
{
    return $this->pk;
}
}