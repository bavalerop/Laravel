<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class HotelModel extends Model
{
    protected $table = 'hotel';
    protected $primaryKey = 'hot_nit';
    protected $fillable = ['hot_nombre','hot_direc','num_hab','ciudad_cod'];
}
