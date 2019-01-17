<?php

namespace App\Models\Meter;

use App\Models\DB;

class Meter
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

    public function save()
    {
        $dbh = new DB();
        $params = [];
        foreach ($this->data as $key => $value) {
            $params[':'.$key] = $value;
        }

        if ($this->id == null) {
            $dbh->query('INSERT INTO meters (title, site, image, cardStyle) VALUES (:title, :site, :image, :cardStyle)', $params);

        } else {
            $dbh->query('UPDATE meters SET title=:title, site=:site, image=:image, cardStyle=:cardStyle WHERE id=:id', $params);
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

}