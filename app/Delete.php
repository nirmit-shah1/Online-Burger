<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Delete extends Model
{
    protected $table='menu';
    public $primarkey='menu_id';
    public $timestamps=false;
}
