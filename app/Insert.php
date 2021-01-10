<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Insert extends Model
{
    protected $table='menu';
    public $primarkey='menu_id';
    public $timestamps=false;
}
