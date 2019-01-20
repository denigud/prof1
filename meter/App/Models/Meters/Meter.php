<?php

namespace App\Models\Meters;

use App\Db;
use App\Model;

class Meter extends Model
{

    public const TABLE = 'meters';

    public $title;
    public $site;
    public $image;
    public $cardStyle;

}