<?php

namespace App\Models\Meters;

use App\Db;
use App\Model;

class Reading extends Model
{

    public const TABLE = 'reading';
    public const SUBSTRING_SQL_QUERY = 'ORDER BY date DESC';

    public $meterId;
    public $date;
    public $reading;

}