<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class carts extends Model
{
    protected $table='order';
    public $primarkey='order_id';
    public $timestamps=false;
}
