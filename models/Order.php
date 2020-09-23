<?php

namespace app\models;

class Order extends Model
{
    public $id;
    public $user_id;
    public $items;
    public $status;

    /**
     * @return mixed
     */
    protected static function getTableName():string
    {
        return 'orders';
    }
}
