<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AsigAcomodacionModel extends Model
{
    protected $table = 'asig_acomodacion';
    protected $primaryKey = array('thab_cod', 'aco_cod');
    protected $fillable = ['cant_hab', 'hot_cod'];
}
