<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
    protected $table='menu';
    public $primarkey='menu_id';
    public $timestamps=false;
}
