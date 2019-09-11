<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CiudadModel extends Model
{

    protected $table = 'ciudad';
    protected $primaryKey = 'ciu_id';
    protected $fillable = ['ciu_nombre'];
}
