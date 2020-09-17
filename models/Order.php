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
    protected function getTableName():string
    {
        return 'orders';
    }
}
