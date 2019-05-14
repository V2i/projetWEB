<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Maison extends Model
{
    protected $table = 'maisons';
    public $primaryKey = 'id';
    public $timestamps = false;
}
