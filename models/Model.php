<?php

namespace app\models;

use app\services\DB;

abstract class Model
{
    /**
     * Метод для
     *
     * @return mixed
     */
    abstract protected function getTableName():string;

    /**
     * @return DB
     */
    protected function getDB()
    {
        return DB::getInstance();
    }

    public function getOne($id)
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName} WHERE id = :id";
        $params = [':id' => $id];
        return $this->getDB()->find($sql, $params);
    }

    public function getAll()
    {
        $tableName = $this->getTableName();
        $sql = "SELECT * FROM {$tableName}";
        return $this->getDB()->findAll($sql);
    }

    protected function insert()
    {
        $tableName = $this->getTableName();
//
//        foreach ($this as $fieldName => $value) {
//            var_dump($fieldName, $value);
//        }

        $sql = "INSERT INTO {$tableName} (`login`, `password`, `name`) VALUES ('123', '123', '123')";
        $this->getDB()->execute($sql);

    }

    public function save()
    {
        if (empty($this->id)) {
            return $this->insert();
        }
        return $this->update();
    }

    public function update()
    {
        $this->id = $id;
        $tableName = $this->getTableName();
//
//        foreach ($this as $fieldName => $value) {
//            var_dump($fieldName, $value);
//        }

        $sql = "UPDATE {$tableName} SET `login` = 'bor2' WHERE {$tableName} . id = :id";
        $params = [':id' => $id];
        return $this->getDB()->find($sql, $params);
    }

    public function delete($id)
    {
        $this->id = $id;
        $tableName = $this->getTableName();
        $sql = "DELETE FROM {$tableName} WHERE {$tableName} . id = :id";
        $params = [':id' => $id];
        return $this->getDB()->find($sql, $params);
    }
}