<?php

namespace App\Models\Reading;

use App\Models\DB;

class Reading
{

    protected $id = null;
    protected $data = [];

    public function __construct(array $data)
    {
        $this->setData($data);
        if(isset($data['id'])){
            $this->id = $data['id'];
        }
        return $this;
    }

    /**
     * @param array $data
     */
    public function setData(array $data)
    {
        foreach ($data as $key => $value) {
            if($key == 'id'){
                continue;
            }
            $this->data[$key] = $value;
        }

        return $this;
    }

    public function save()
    {
        $dbh = new DB();
        $params = [];
        foreach ($this->data as $key => $value) {
            $params[':'.$key] = $value;
        }

        if ($this->id == null) {
            $dbh->query('INSERT INTO t_reading (meterId, date, reading) VALUES (:meterId, :date, :reading)', $params);

        } else {
            $params['id'] = $this->id;
            $dbh->query('UPDATE t_reading SET meterId=:meterId, date=:date, reading=:reading WHERE id=:id', $params);
        };

        return $this;

    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return array
     */
    public function getData()
    {
        return $this->data;
    }

    public static function delete($id)
    {
        $dbh = new DB();
        $params = [];
        $params [':id'] = $id;

        return $dbh->query('DELETE FROM t_reading WHERE id=:id', $params);;
    }
}