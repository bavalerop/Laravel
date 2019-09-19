<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TipoHabModel extends Model
{
    protected $table = 'tipohab';
    protected $primaryKey = 'thab_id';
    protected $fillable = ['thab_nombre'];
}
