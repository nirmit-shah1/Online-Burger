<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Signup extends Model
{
    protected $table='user';
    public $primarkey='mail';
    public $timestamps=false;
}
