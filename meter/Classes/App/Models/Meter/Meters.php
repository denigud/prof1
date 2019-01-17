<?php

namespace App\Models\Meter;

use App\Models\DB;

class Meters
{

    protected $data = [];

    public function __construct()
    {
        $dbh = new DB();
        $meters = $dbh->query('SELECT * FROM meters', ['']);
        foreach ($meters as $meter){
            $this->data[] = (new Meter($meter));
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