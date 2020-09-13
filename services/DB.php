<?php

class DB implements IDB
{
    public function find($sql)
    {
        return 'find ' . $sql;
    }
    public function findAll($sql)
    {
//        self::TEST_ERROR;
        return 'findAll ' . $sql;
    }
}