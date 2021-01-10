<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class contactback extends Model
{
    protected $table='contact';
    public $primarkey='contact_id';
    public $timestamps=false;
}
