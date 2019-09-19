<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AcomodacionModel extends Model
{
    protected $table = 'acomodacion';
    protected $primaryKey = 'aco_id';
    protected $fillable = ['aco_nombre'];
}
