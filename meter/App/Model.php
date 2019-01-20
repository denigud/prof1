<?php

namespace App;

abstract class Model
{
    public $id;

    public const TABLE = '';
    public const SUBSTRING_SQL_QUERY = '';

    public static function getAllData()
    {
        $dbh = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE .' '. static::SUBSTRING_SQL_QUERY;

        return $dbh->query($sql, [],static::class);
    }

    /**
     * @return boolean
     */
    public function isNew()
    {
        return empty($this->id);
    }

    public function insert()
    {
        $object_vars = get_object_vars($this);
        unset($object_vars['id']);

        $cols = [];
        $data = [];
        foreach ($object_vars as $key => $value) {
            $cols[] = $key;
            $data[':'.$key] = $value;
        }

        $dbh = new Db();
        $sql = 'INSERT INTO ' . static::TABLE . '('. implode(',', $cols) . ') VALUES ( ' . implode(',', array_keys($data)) . ' )';
        if ($dbh->execute($sql, $data)){
            $this->id = $dbh->lastId();
        }

    }

    public function update()
    {
        $object_vars = get_object_vars($this);

        $params = [];
        $paramsStr = '';
        foreach ($object_vars as $key => $value) {
            $params[':'.$key] = $value;

            if('id' == $key){
                continue;
            }
            if(!empty($paramsStr)){
                $paramsStr .= ',';
            }
            $paramsStr .= $key . '=:' . $key;
        }

        $dbh = new Db();
        $sql = 'UPDATE ' . static::TABLE . ' SET '. $paramsStr . ' WHERE id=:id';
        $dbh->execute($sql, $params);
    }

    public function save()
    {
        if($this->isNew()){
            $this->insert();
        }else{
            $this->update();
        };

        return $this;
    }

    public static function delete($id)
    {
        $dbh = new Db();
        $params = [':id' => $id];

        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';

        return $dbh->execute($sql, $params);
    }

    public static function findById($id)
    {
        $dbh = new Db();
        $params = [':id' => $id];

        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $data = $dbh->query($sql, $params,static::class);

        return count($data) === 1 ? $data[0] : false;
    }


}