<?php

namespace app\models;

class User extends Model
{
    public $id;
    public $name;
    public $login;
    public $password;

    /**
     * @return mixed
     */
    protected function getTableName():string
    {
        return 'users';
    }
}
