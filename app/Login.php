<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    protected $table='user';
    public $primarkey='mail';
    
}
