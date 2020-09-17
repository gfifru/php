<?php

namespace app\models;

class Good extends Model
{
    public $id;
    public $name;
    public $price;
    public $info;

    /**
     * @return mixed
     */
    protected function getTableName():string
    {
        return 'goods';
    }
}
