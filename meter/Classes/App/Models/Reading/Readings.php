<?php

namespace App\Models\Reading;

use App\Models\DB;

class Readings
{

    protected $data = [];

    public function __construct()
    {
        $dbh = new DB();
        $readings = $dbh->query('SELECT * FROM t_reading', ['']);
        foreach ($readings as $reading){
            $this->data[] = (new Reading($reading));
        }

        return $this;
    }

    /**
     * @return array|bool
     */
    public function getData()
    {
        return $this->data;
    }

}